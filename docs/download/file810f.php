!Local variables-------------------------------
!scalars
 integer,parameter :: nt1=1
 integer :: g2max_in,g2min_in,g2max_out,g2min_out,ix,iy,iz,ig,igb,mgb,nx
 integer :: ny,nz,nfft,ngbin,ngbout,nthreads,ldxy,ng2_pos,ng2_neg,pt,status
 integer :: lot,nlot,lotin,lotout,fftcache,cidx,sidx,xyplane,padx
 integer :: nxhalf1,nxhalfm,nyhalf1,cidx_inv,pidx,fidx,padz,padc
 integer :: igb_inv,iiy,ixmax,iz_inv
 real(dp) :: fraction,arg
 complex(MYKIND) :: vloc,phase
 character(len=500) :: msg
 type(DFTI_DESCRIPTOR),pointer :: bw_plan,fw_plan 
 type(DFTI_DESCRIPTOR),pointer :: fw_plan_xg2pos,fw_plan_xg2neg,fw_plan_y
 type(DFTI_DESCRIPTOR),pointer :: bw_plan_xg2pos,bw_plan_xg2neg,bw_plan_y
 type(C_PTR) :: cptr_cuboid,cptr_sa,cptr_sb,cptr_sc,cptr_sd
!arrays
 integer,allocatable :: indpw_kin(:,:),indpw_kout(:,:)
 complex(MYKIND),allocatable :: pha1(:),pha2(:),pha3(:)
 complex(MYKIND),ABI_CONTIGUOUS pointer :: cuboid(:),slice_a(:),slice_b(:),slice_c(:),slice_d(:)

! *************************************************************************

! gcc does not like C-pointers in OMP clauses
#if defined HAVE_OPENMP && defined __GFORTRAN__ 
#define DEV_USE_ABIMALLOC
#endif

 if (istwf_k>2 .and. option==0) then
   write(msg,'(a,i0)')' option=0 is not allowed with istwf_k=',istwf_k
   MSG_BUG(msg)
 end if

 if (istwf_k>=2 .and. option==3) then
   write(msg,'(a,i0)')' option=3 is not allowed with istwf_k=',istwf_k
   MSG_BUG(msg)
 end if

!For all other tests of validity of inputs, assume that they
!have been done in the calling routine

 nx=ngfft(1); ny=ngfft(2); nz=ngfft(3); nfft=nx*ny*nz
 fftcache=ngfft(8)
 ldxy = ldx*ldy

 if (option/=3) then
   ABI_MALLOC(indpw_kin,(4,npwin))
   call indfftrisc(gboundin(3:3+2*mgfft+4,1),indpw_kin,kg_kin,mgfft,ngbin,ngfft,npwin)
 end if

 if (option==2 .or. option==3) then
   ABI_MALLOC(indpw_kout,(4,npwout))
   call indfftrisc(gboundout(3:3+2*mgfft+4,1),indpw_kout,kg_kout,mgfft,ngbout,ngfft,npwout)
 end if

! Define the dimension of the first work arrays, for 1D transforms along z ,
! taking into account the need to avoid the cache trashing
 if (option==2) then
   mgb=MAX(ngbin,ngbout)
 else if (option==0 .or. option==1) then
   mgb=ngbin; ngbout=1
 else if (option==3) then
   mgb=ngbout; ngbin=1
 end if

 if (MOD(mgb,2)/=1) mgb=mgb+1

!Initialise openmp, if needed
 nthreads = xomp_get_num_threads(open_parallel=.TRUE.)

!For the treatment of the z transform, one tries to use only a fraction of the cache, since the
!treatment of the array cuboid will not involve contiguous segments
 fraction=0.25
!First estimation of lot and nlot
 lot=(fftcache*fraction*1000)/(nz*8*2)+1
!Select the smallest integer multiple of nthreads, larger
!or equal to nlot. In this way, the cache size is not exhausted,
!and one takes care correctly of the number of processors.
!Treat separately the in and out cases
 nlot=(ngbin-1)/lot+1
 nlot=nthreads*((nlot-1)/nthreads+1)
 lotin=(ngbin-1)/nlot+1
 nlot=(ngbout-1)/lot+1
 nlot=nthreads*((nlot-1)/nthreads+1)
 lotout=(ngbout-1)/nlot+1
!The next line impose only one lot. Usually, comment it.
!lotin=mgb; lotout=mgb
 !write(std_out,*)"lotin, lotout",lotin,lotout

 ! ===============================
 ! ===== General k-point code ====
 ! ===============================

if (istwf_k==1) then

 call dfti_alloc_complex(mgb*nz,cptr_cuboid,cuboid)

 if (option/=3) then

!$OMP PARALLEL DO 
   do cidx=1,mgb*nz
     cuboid(cidx) = MYCZERO
   end do
   !
   ! Insert fofgin into the work array
!$OMP PARALLEL DO PRIVATE(igb,iz,cidx)
   do ig=1,npwin
     igb =indpw_kin(4,ig) 
     iz  =indpw_kin(3,ig)
     cidx = igb + (iz-1)*mgb
     cuboid(cidx) = CMPLX(fofgin(1,ig),fofgin(2,ig), KIND=MYKIND)
   end do

#ifndef HAVE_OPENMP
   ! ngbin 1D in-place transforms of cuboid(Gx,Gy,Gz) along Gz.
   status = DftiCreateDescriptor(bw_plan, FFT_PRECISION, DFTI_COMPLEX, 1, nz)
   status = DftiSetValue(bw_plan, DFTI_NUMBER_OF_TRANSFORMS, ngbin)
   status = DftiSetValue(bw_plan, DFTI_INPUT_STRIDES,  (/0,mgb/))
   status = DftiSetValue(bw_plan, DFTI_INPUT_DISTANCE,  1)
   status = DftiSetValue(bw_plan, DFTI_NUMBER_OF_USER_THREADS, nt1)
   DFTI_CHECK(status)
                                                                            
   status = DftiCommitDescriptor(bw_plan)
   DFTI_CHECK(status)

   status =  DftiComputeBackward(bw_plan, cuboid)
   DFTI_CHECK(status)

#else
   ! Distribute 1D in-place transforms of cuboid(Gx,Gy,Gz) along Gz among the threads.
   status = DftiCreateDescriptor(bw_plan, FFT_PRECISION, DFTI_COMPLEX, 1, nz)
   status = DftiSetValue(bw_plan, DFTI_INPUT_STRIDES,  (/0,mgb/))
   status = DftiSetValue(bw_plan, DFTI_NUMBER_OF_USER_THREADS, nthreads)

   status = DftiCommitDescriptor(bw_plan)
   DFTI_CHECK(status)

!!$OMP PARALLEL DO PRIVATE(status) SCHEDULE(STATIC, lotin)
!$OMP PARALLEL DO PRIVATE(status)
   do igb=1,ngbin
     status = DftiComputeBackward(bw_plan, cuboid(igb:))
     DFTI_CHECK(status)
   end do
#endif

   status = DftiFreeDescriptor(bw_plan)
   DFTI_CHECK(status)
   !
   ! Now we have cuboid(Gx,Gy,z) in the cuboid enclosing the G-sphere
 end if
 !
 ! ================================
 ! ==== Generate the FFT plans ====
 ! ================================
 !
 !(1:g2max_in+1,n3)     ! Positive g_y.
 !(g2min_in+ny+1:ny,n3) ! Negative g_y.
 g2min_in = gboundin(3,1)
 g2max_in = gboundin(4,1)

 g2min_out = gboundout(3,1) 
 g2max_out = gboundout(4,1)

! ng2_pos 1D transforms of f(Gx,Gy,z) along Gx for Gy >= 0 
 ng2_pos = g2max_in + 1
 status = DftiCreateDescriptor(bw_plan_xg2pos , FFT_PRECISION, DFTI_COMPLEX, 1, nx)
 DFTI_CHECK(status)

 status = DftiSetValue(bw_plan_xg2pos, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
 status = DftiSetValue(bw_plan_xg2pos, DFTI_NUMBER_OF_TRANSFORMS, ng2_pos)
 status = DftiSetValue(bw_plan_xg2pos, DFTI_INPUT_DISTANCE,  ldx)
 status = DftiSetValue(bw_plan_xg2pos, DFTI_INPUT_STRIDES,  (/0,1/))
 status = DftiSetValue(bw_plan_xg2pos, DFTI_OUTPUT_DISTANCE,  ldx)
 status = DftiSetValue(bw_plan_xg2pos, DFTI_OUTPUT_STRIDES,  (/0,1/))
 status = DftiSetValue(bw_plan_xg2pos, DFTI_NUMBER_OF_USER_THREADS, nthreads)
                                                                 
 status = DftiCommitDescriptor(bw_plan_xg2pos)
 DFTI_CHECK(status)

! ng2_neg 1D transforms of f(Gx,Gy,z) along Gx for Gy < 0
 ng2_neg = -g2min_in
 status = DftiCreateDescriptor(bw_plan_xg2neg , FFT_PRECISION, DFTI_COMPLEX, 1, nx)
 DFTI_CHECK(status)

 status = DftiSetValue(bw_plan_xg2neg, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
 status = DftiSetValue(bw_plan_xg2neg, DFTI_NUMBER_OF_TRANSFORMS, ng2_neg)
 status = DftiSetValue(bw_plan_xg2neg, DFTI_INPUT_DISTANCE,  ldx)
 status = DftiSetValue(bw_plan_xg2neg, DFTI_INPUT_STRIDES,  (/0,1/))
 status = DftiSetValue(bw_plan_xg2neg, DFTI_OUTPUT_DISTANCE,  ldx)
 status = DftiSetValue(bw_plan_xg2neg, DFTI_OUTPUT_STRIDES,  (/0,1/))
 status = DftiSetValue(bw_plan_xg2neg, DFTI_NUMBER_OF_USER_THREADS, nthreads)

 status = DftiCommitDescriptor(bw_plan_xg2neg)
 DFTI_CHECK(status)

! nx 1D transforms of f(x,Gy,z) along Gy.
 status = DftiCreateDescriptor(bw_plan_y, FFT_PRECISION, DFTI_COMPLEX, 1, ny)
 DFTI_CHECK(status)

 status = DftiSetValue(bw_plan_y, DFTI_NUMBER_OF_TRANSFORMS, nx)
 status = DftiSetValue(bw_plan_y, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
 status = DftiSetValue(bw_plan_y, DFTI_INPUT_DISTANCE,  1)
 status = DftiSetValue(bw_plan_y, DFTI_INPUT_STRIDES,  (/0,ldx/))
 status = DftiSetValue(bw_plan_y, DFTI_OUTPUT_DISTANCE,  1)
 status = DftiSetValue(bw_plan_y, DFTI_OUTPUT_STRIDES,  (/0,ldx/))
 status = DftiSetValue(bw_plan_y, DFTI_NUMBER_OF_USER_THREADS, nthreads)
 DFTI_CHECK(status)

 status = DftiCommitDescriptor(bw_plan_y)
 DFTI_CHECK(status)

 if (option==2 .or. option==3) then  
   ! nx 1D transforms of f(x,y,Gz) along y.
   status = DftiCreateDescriptor(fw_plan_y , FFT_PRECISION, DFTI_COMPLEX, 1, ny)
   DFTI_CHECK(status)
                                                                                    
   status = DftiSetValue(fw_plan_y, DFTI_NUMBER_OF_TRANSFORMS, nx)
   status = DftiSetValue(fw_plan_y, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
   status = DftiSetValue(fw_plan_y, DFTI_INPUT_DISTANCE,  1)
   status = DftiSetValue(fw_plan_y, DFTI_INPUT_STRIDES,  (/0,ldx/))
   status = DftiSetValue(fw_plan_y, DFTI_OUTPUT_DISTANCE,  1)
   status = DftiSetValue(fw_plan_y, DFTI_OUTPUT_STRIDES,  (/0,ldx/))
   status = DftiSetValue(fw_plan_y, DFTI_NUMBER_OF_USER_THREADS, nthreads)
   DFTI_CHECK(status)
                                                                   
   status = DftiCommitDescriptor(fw_plan_y)
   DFTI_CHECK(status)

   ! ng2_pos 1D transforms of f(x,y,Gz) along x.
   ng2_pos = g2max_out + 1
   status = DftiCreateDescriptor(fw_plan_xg2pos , FFT_PRECISION, DFTI_COMPLEX, 1, nx)
   DFTI_CHECK(status)
                                                                                    
   status = DftiSetValue(fw_plan_xg2pos, DFTI_NUMBER_OF_TRANSFORMS, ng2_pos)
   status = DftiSetValue(fw_plan_xg2pos, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
   status = DftiSetValue(fw_plan_xg2pos, DFTI_INPUT_DISTANCE,  ldx)
   !status = DftiSetValue(fw_plan_xg2pos, DFTI_INPUT_STRIDES,  (/0,ldx/))
   status = DftiSetValue(fw_plan_xg2pos, DFTI_OUTPUT_DISTANCE,  ldx)
   status = DftiSetValue(fw_plan_xg2pos, DFTI_NUMBER_OF_USER_THREADS, nthreads)
   DFTI_CHECK(status)

   status = DftiCommitDescriptor(fw_plan_xg2pos)
   DFTI_CHECK(status)

   ! ng2_neg 1D transforms of f(x,y,Gz) along x.
   ng2_neg = -g2min_out
   status = DftiCreateDescriptor(fw_plan_xg2neg , FFT_PRECISION, DFTI_COMPLEX, 1, nx)
   DFTI_CHECK(status)
                                                                                    
   status = DftiSetValue(fw_plan_xg2neg, DFTI_NUMBER_OF_TRANSFORMS, ng2_neg)
   status = DftiSetValue(fw_plan_xg2neg, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
   status = DftiSetValue(fw_plan_xg2neg, DFTI_INPUT_DISTANCE,  ldx)
   !status = DftiSetValue(fw_plan_xg2neg, DFTI_INPUT_STRIDES,  (/0,ldx/))
   status = DftiSetValue(fw_plan_xg2neg, DFTI_OUTPUT_DISTANCE,  ldx)
   status = DftiSetValue(fw_plan_xg2neg, DFTI_NUMBER_OF_USER_THREADS, nthreads)

   status = DftiCommitDescriptor(fw_plan_xg2neg)
   DFTI_CHECK(status)
 end if
 !
 ! Open OMP parallel region and allocate two 2-dimensional work arrays for out-of-place transforms.
 !

#ifdef DEV_USE_ABIMALLOC
!$OMP PARALLEL PRIVATE(status,ix,iy,cidx,sidx,padx,xyplane,pt,vloc,slice_a,slice_b)

 ABI_MALLOC(slice_a,(ldxy))
 ABI_MALLOC(slice_b,(ldxy))

#else
!$OMP PARALLEL PRIVATE(status,ix,iy,cidx,sidx,padx,xyplane,pt,vloc,slice_a,slice_b,cptr_sa,cptr_sb)
! This causes a sigfault in gcc44 due to the presence of C-pointers in the OMP statement.

 call dfti_alloc_complex(ldxy,cptr_sa,slice_a)
 call dfti_alloc_complex(ldxy,cptr_sb,slice_b)
#endif
 !
 ! Big Loop over z parallelized with OpenMP.
!$OMP DO
 do iz=1,nz

   if (option/=3) then
     !
     ! Zero the values on the current plane
     slice_a(:) = MYCZERO
     !
     ! Copy the data in the current plane
     do igb=1,ngbin
       ix   = indpw_kin(1,igb) 
       iy   = indpw_kin(2,igb)
       cidx = igb + (iz-1)*mgb
       sidx = ix + (iy-1)*ldx
       slice_a(sidx) = cuboid(cidx)
     end do
     !
     ! Perform Gx transform, taking into account arrays of zeros
     if (g2min_in+ny >= g2max_in+2) then
       do iy=g2max_in+2,g2min_in+ny
         padx = (iy-1)*ldx
         do ix=1,nx
           sidx = ix + padx
           slice_b(sidx) = MYCZERO
         end do
       end do
     end if

     status = DftiComputeBackward(bw_plan_xg2pos, slice_a, slice_b)
     DFTI_CHECK(status)

     pt = 1 + (g2min_in+ny)*ldx
     status = DftiComputeBackward(bw_plan_xg2neg, slice_a(pt:), slice_b(pt:))
     DFTI_CHECK(status)
     !
     ! Got f(x,Gy,z). Now perform y transform
     status = DftiComputeBackward(bw_plan_y, slice_b, slice_a)
     DFTI_CHECK(status)
   end if
   !
   ! The wave function is now in real space, for the current z plane
   !
   SELECT CASE (option)

   CASE (0)
     ! Copy the transformed function at the right place and we are done!
     xyplane = 1 + (iz-1)*ldx*ldy
     if (MYKIND==dpc) then
       call ZCOPY(ldxy,slice_a,1,fofr(1,xyplane),1)
     else if (MYKIND==spc) then
       call CCOPY(ldxy,slice_a,1,fofr(1,xyplane),1)
     else
       MSG_ERROR("Wrong FFT precision")
     end if

   CASE (1)
     ! Accumulate density
!THIS IS FOR TESTING PURPOSE
 if (abs(weight_r-weight_i)<tol12) then
     do iy=1,ny
       padx = (iy-1)*ldx
       do ix=1,nx
         sidx = ix + padx
         denpot(ix,iy,iz)=denpot(ix,iy,iz)+weight_r*(REAL(slice_a(sidx))**2+AIMAG(slice_a(sidx))**2)
       end do
     end do
else
     do iy=1,ny
       padx = (iy-1)*ldx
       do ix=1,nx
         sidx = ix + padx
         denpot(ix,iy,iz)=denpot(ix,iy,iz)+weight_r*(REAL(slice_a(sidx))**2)+weight_i*(AIMAG(slice_a(sidx))**2)
       end do
     end do
end if

   CASE (2)
     ! Apply local potential
     if (cplex==1) then
       do iy=1,ny
         padx = (iy-1)*ldx
         do ix=1,nx
           sidx = ix + padx
           slice_a(sidx) = denpot(ix,iy,iz)*slice_a(sidx)
         end do
       end do
     else
       do iy=1,ny
         padx = (iy-1)*ldx
         do ix=1,nx
           sidx = ix + padx
           vloc = CMPLX(denpot(2*ix-1,iy,iz), denpot(2*ix,iy,iz), KIND=MYKIND)
           slice_a(sidx) = vloc * slice_a(sidx)
         end do
       end do
     end if

   CASE (3)
     ! Copy the function to be tranformed at the right place
     xyplane = 1 + (iz-1)*ldx*ldy
     if (MYKIND==dpc) then
       call ZCOPY(ldxy,fofr(1,xyplane),1,slice_a,1)
     else if (MYKIND==spc) then
       call CCOPY(ldxy,fofr(1,xyplane),1,slice_a,1)
     else
       MSG_ERROR("Wrong FFT precision")
     end if
   END SELECT

   if (option==2 .or. option==3) then  
     ! Go back to G space.
     !
     ! 1) Perform y transform
     status = DftiComputeForward(fw_plan_y, slice_a, slice_b)
     DFTI_CHECK(status)

     ! Perform x transform, taking into account arrays of zeros
     status = DftiComputeForward(fw_plan_xg2pos, slice_b, slice_a)
     DFTI_CHECK(status)

     pt = 1 + (g2min_out+ny)*ldx
     status = DftiComputeForward(fw_plan_xg2neg, slice_b(pt:), slice_a(pt:))
     DFTI_CHECK(status)

     ! Copy the data from the current plane to cuboid
     do igb=1,ngbout
       ix=indpw_kout(1,igb) 
       iy=indpw_kout(2,igb)
       sidx = ix + (iy-1)*ldx
       cidx = igb + (iz-1)*mgb
       cuboid(cidx)=slice_a(sidx)
     end do
   end if

 end do ! End loop on planes iz
!$OMP END DO

#ifdef DEV_USE_ABIMALLOC
 ABI_FREE(slice_a)
 ABI_FREE(slice_b)
#else
 call dfti_free(cptr_sa)
 call dfti_free(cptr_sb)
#endif
!$OMP END PARALLEL

! Free plans
 status = DftiFreeDescriptor(bw_plan_xg2pos)
 status = DftiFreeDescriptor(bw_plan_xg2neg)
 status = DftiFreeDescriptor(bw_plan_y)

 if (option==2 .or. option==3)then  
   status = DftiFreeDescriptor(fw_plan_y)
   status = DftiFreeDescriptor(fw_plan_xg2pos)
   status = DftiFreeDescriptor(fw_plan_xg2neg)
 end if

 if (option==2 .or. option==3) then ! Do 1D FFTs on the z direction

#ifndef HAVE_OPENMP
   ! ngbout 1D transforms of f(x,y,Gz) along Gz.
   status = DftiCreateDescriptor(fw_plan, FFT_PRECISION, DFTI_COMPLEX, 1, nz)
   DFTI_CHECK(status)

   status = DftiSetValue(fw_plan, DFTI_NUMBER_OF_TRANSFORMS, ngbout)
   status = DftiSetValue(fw_plan, DFTI_INPUT_STRIDES,  (/0,mgb/))
   status = DftiSetValue(fw_plan, DFTI_INPUT_DISTANCE,  1)
   status = DftiSetValue(fw_plan, DFTI_NUMBER_OF_USER_THREADS, nt1)
   status = DftiSetValue(fw_plan, DFTI_FORWARD_SCALE, one/DBLE(nfft)) ! normalization

   status = DftiCommitDescriptor(fw_plan)
   DFTI_CHECK(status)

   status = DftiComputeForward(fw_plan, cuboid)
   DFTI_CHECK(status)

#else
   ! Distribute ngbout 1D transforms of f(x,y,Gz) along Gz among the threads.
   status = DftiCreateDescriptor(fw_plan, FFT_PRECISION, DFTI_COMPLEX, 1, nz)
   DFTI_CHECK(status)

   status = DftiSetValue(fw_plan, DFTI_INPUT_STRIDES,  (/0,mgb/))
   status = DftiSetValue(fw_plan, DFTI_NUMBER_OF_USER_THREADS, nthreads)
   status = DftiSetValue(fw_plan, DFTI_FORWARD_SCALE, one/DBLE(nfft)) ! normalization
   DFTI_CHECK(status)

   status = DftiCommitDescriptor(fw_plan)
   DFTI_CHECK(status)

!!$OMP PARALLEL DO PRIVATE(status) SCHEDULE(STATIC, lotout)
!$OMP PARALLEL DO PRIVATE(status)
   do igb=1,ngbout
     status = DftiComputeForward(fw_plan, cuboid(igb:))
     DFTI_CHECK(status)
   end do
#endif

   status = DftiFreeDescriptor(fw_plan)

   ! Transfer the data in the output array, after normalization
!$OMP PARALLEL DO PRIVATE(igb,iz,cidx) 
   do ig=1,npwout
     igb = indpw_kout(4,ig) 
     iz  = indpw_kout(3,ig)
     cidx = igb + (iz-1)*mgb
     fofgout(1,ig) = REAL (cuboid(cidx)) 
     fofgout(2,ig) = AIMAG(cuboid(cidx)) 
   end do
 end if

 call dfti_free(cptr_cuboid)

else if (istwf_k>=2) then

!------------------------------------------------------------------
!Here, use of time-reversal symmetry
   nxhalf1 = nx/2+1
   nxhalfm = (nx+1)/2
   nyhalf1 = ny/2+1

   call dfti_alloc_complex(mgb*nz,cptr_cuboid,cuboid)

   if (istwf_k/=2) then
     ! Precompute phases.
     ABI_MALLOC(pha1,(nx))
     ABI_MALLOC(pha2,(ny))
     ABI_MALLOC(pha3,(nz))
     do ix=1,nx
       arg = DBLE(ix-1)*pi/DBLE(nx)
       pha1(ix)= MYCMPLX(COS(arg), SIN(arg))
     end do
     do iy=1,ny
       arg = DBLE(iy-1)*pi/DBLE(ny)
       pha2(iy)= MYCMPLX(COS(arg), SIN(arg))
     end do
     do iz=1,nz
       arg = DBLE(iz-1)*pi/DBLE(nz)
       pha3(iz)= MYCMPLX(COS(arg), SIN(arg))
     end do
   end if


   if (option/=3) then

     ! Zero the components of cuboid
!$OMP PARALLEL DO 
     do cidx=1,mgb*nz
       cuboid(cidx) = MYCZERO
     end do

     ! Insert fofgin into the work array cuboid
!$OMP PARALLEL DO PRIVATE(igb,iz,cidx)
     do ig=1,npwin
       igb = indpw_kin(4,ig) 
       iz  = indpw_kin(3,ig)
       cidx = igb + (iz-1)*mgb
       cuboid(cidx) = MYCMPLX(fofgin(1,ig), fofgin(2,ig))
     end do

     ! Must complete the iy=1 plane when $k_y \equiv 0$

     ! Take care of ix=1 when $k_x \equiv 0$
     if (istwf_k==2) then
       do iz=nz/2+1,nz
         iz_inv   = nz+2-iz
         cidx     = 1 + (iz-1)*mgb
         cidx_inv = 1 + (iz_inv-1)*mgb
         cuboid(cidx) = MYCONJG(cuboid(cidx_inv))
       end do
     else if (istwf_k==4)then
       do iz=nz/2+1,nz
         iz_inv   = nz+1-iz
         cidx     = 1 + (iz-1)*mgb
         cidx_inv = 1 + (iz_inv-1)*mgb
         cuboid(cidx) = MYCONJG(cuboid(cidx_inv))
       end do
     end if

     ! Now, take care of other ix values, except iz==1 when $k_z \equiv 0$
     ixmax=gboundin(6,1)+1

     if (istwf_k==2) then
!$OMP PARALLEL DO PRIVATE(igb_inv,iz_inv,cidx,cidx_inv)
       do igb=2,2*ixmax-1
         igb_inv=2*ixmax+1-igb
         do iz=nz/2+1,nz
           iz_inv   = nz+2-iz
           cidx     = igb     + (iz-1)*mgb
           cidx_inv = igb_inv + (iz_inv-1)*mgb
           cuboid(cidx) = MYCONJG(cuboid(cidx_inv))
         end do
       end do

     else if (istwf_k==3) then
!$OMP PARALLEL DO PRIVATE(igb_inv,iz_inv,cidx,cidx_inv)
       do igb=1,2*ixmax
         igb_inv=2*ixmax+1-igb
         do iz=nz/2+1,nz
           iz_inv   = nz+2-iz
           cidx     = igb     + (iz-1)*mgb
           cidx_inv = igb_inv + (iz_inv-1)*mgb
           cuboid(cidx) = MYCONJG(cuboid(cidx_inv))
         end do
       end do

     else if (istwf_k==4) then
!$OMP PARALLEL DO PRIVATE(igb_inv,iz_inv,cidx,cidx_inv)
       do igb=2,2*ixmax-1
         igb_inv=2*ixmax+1-igb
         do iz=nz/2+1,nz
           iz_inv   = nz+1-iz
           cidx     = igb     + (iz-1)*mgb
           cidx_inv = igb_inv + (iz_inv-1)*mgb
           cuboid(cidx) = MYCONJG(cuboid(cidx_inv))
         end do
       end do

     else if (istwf_k==5) then
!$OMP PARALLEL DO PRIVATE(igb_inv,iz_inv,cidx,cidx_inv)
       do igb=1,2*ixmax
         igb_inv=2*ixmax+1-igb
         do iz=nz/2+1,nz
           iz_inv   = nz+1-iz
           cidx     = igb     + (iz-1)*mgb
           cidx_inv = igb_inv + (iz_inv-1)*mgb
           cuboid(cidx) = MYCONJG(cuboid(cidx_inv))
         end do
       end do

     end if

     ! Now, iz==1
     if (istwf_k==2) then
       do igb=2,ixmax
         igb_inv  = 2*ixmax+1-igb
         cidx_inv = igb_inv !+ (iz_inv-1)*mgb
         cuboid(cidx_inv) = MYCONJG(cuboid(igb))
       end do
     else if (istwf_k==3) then
       do igb=1,ixmax
         igb_inv  = 2*ixmax+1-igb
         cidx_inv = igb_inv !+ (iz_inv-1)*mgb
         cuboid(cidx_inv) = MYCONJG(cuboid(igb))
       end do
     end if
     !
     ! Perform in-place 1D FFTs on the z direction
     ! ngbin 1D in-place transforms of cuboid(Gx,Gy,Gz) along Gz.
!     bw_plan = fftw3_plan_many_dft(1, (/nz/), ngbin, &  
!&      cuboid, (/mgb, nz/), mgb, 1,                  &      
!&      cuboid, (/mgb, nz/), mgb, 1, ABI_FFTW_BACKWARD, ABI_FFTW_ESTIMATE, nthreads)

     status = DftiCreateDescriptor(bw_plan, FFT_PRECISION, DFTI_COMPLEX, 1, nz)
     status = DftiSetValue(bw_plan, DFTI_NUMBER_OF_TRANSFORMS, ngbin)
     status = DftiSetValue(bw_plan, DFTI_INPUT_STRIDES,  (/0,mgb/))
     status = DftiSetValue(bw_plan, DFTI_INPUT_DISTANCE,  1)
     status = DftiSetValue(bw_plan, DFTI_NUMBER_OF_USER_THREADS, nt1)
     DFTI_CHECK(status)
                                                                              
     status = DftiCommitDescriptor(bw_plan)
     DFTI_CHECK(status)

     status =  DftiComputeBackward(bw_plan, cuboid)
     DFTI_CHECK(status)
     status = DftiFreeDescriptor(bw_plan)
     DFTI_CHECK(status)

     !call fftw3_execute_dft(bw_plan, cuboid, cuboid)
     !call fftw3_destroy_plan(bw_plan)

     ! Change the phase if $k_z \neq 0$
     if (istwf_k==4 .or. istwf_k==5 .or. istwf_k==8 .or. istwf_k==9) then
!$OMP PARALLEL DO PRIVATE(phase,padz,cidx) 
       do iz=1,nz
         phase = pha3(iz)
         padz  = (iz-1)*mgb
         do igb=1,ngbin
           cidx = igb + padz
           cuboid(cidx) = cuboid(cidx) * phase
         end do
       end do
     end if

   end if ! if(option/=3)

   g2max_in= gboundin(4,1)
   ng2_pos = g2max_in + 1

!   bw_plan_xg2pos = fftw3_plan_many_dft(1, (/nx/), ng2_pos,  &  ! ng2_pos 1D transforms of f(Gx,Gy,z) along Gx
!&    slice_a, (/ldx, ldy/), 1, ldx,                          &  ! for Gy >= 0 
!&    slice_b, (/ldx, ldy/), 1, ldx, ABI_FFTW_BACKWARD, ABI_FFTW_ESTIMATE, nt1)

   status = DftiCreateDescriptor(bw_plan_xg2pos , FFT_PRECISION, DFTI_COMPLEX, 1, nx)
   DFTI_CHECK(status)
                                                                                      
   status = DftiSetValue(bw_plan_xg2pos, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
   status = DftiSetValue(bw_plan_xg2pos, DFTI_NUMBER_OF_TRANSFORMS, ng2_pos)
   status = DftiSetValue(bw_plan_xg2pos, DFTI_INPUT_DISTANCE,  ldx)
   status = DftiSetValue(bw_plan_xg2pos, DFTI_INPUT_STRIDES,  (/0,1/))
   status = DftiSetValue(bw_plan_xg2pos, DFTI_OUTPUT_DISTANCE,  ldx)
   status = DftiSetValue(bw_plan_xg2pos, DFTI_OUTPUT_STRIDES,  (/0,1/))
   status = DftiSetValue(bw_plan_xg2pos, DFTI_NUMBER_OF_USER_THREADS, nthreads)
                                                                   
   status = DftiCommitDescriptor(bw_plan_xg2pos)
   DFTI_CHECK(status)

   ! TODO clarify this point. why nxhalfm?
!   bw_plan_y = fftw3_plan_many_dft(1, (/ny/), nxhalf1, &  ! nx 1D transforms of f(x,Gy,z) along Gy.
!&    slice_a, (/ldx, ldy/), ldx, 1,                    &  
!&    slice_b, (/ldx, ldy/), ldx, 1, ABI_FFTW_BACKWARD, ABI_FFTW_ESTIMATE, nt1)

   status = DftiCreateDescriptor(bw_plan_y, FFT_PRECISION, DFTI_COMPLEX, 1, ny)
   DFTI_CHECK(status)

   status = DftiSetValue(bw_plan_y, DFTI_NUMBER_OF_TRANSFORMS, nxhalf1)
   status = DftiSetValue(bw_plan_y, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
   status = DftiSetValue(bw_plan_y, DFTI_INPUT_DISTANCE,  1)
   status = DftiSetValue(bw_plan_y, DFTI_INPUT_STRIDES,  (/0,ldx/))
   status = DftiSetValue(bw_plan_y, DFTI_OUTPUT_DISTANCE,  1)
   status = DftiSetValue(bw_plan_y, DFTI_OUTPUT_STRIDES,  (/0,ldx/))
   status = DftiSetValue(bw_plan_y, DFTI_NUMBER_OF_USER_THREADS, nthreads)
   DFTI_CHECK(status)

   status = DftiCommitDescriptor(bw_plan_y)
   DFTI_CHECK(status)

   if (option==2 .or. option==3)then  
     ! TODO clarify this point. why nxhalfm?
!     fw_plan_y = fftw3_plan_many_dft(1, (/ny/), nxhalf1, &  ! nx 1D transforms of f(x,y,Gz) along y.
!&      slice_a, (/ldx, ldy/), ldx, 1,                    &   
!&      slice_b, (/ldx, ldy/), ldx, 1, ABI_FFTW_FORWARD, ABI_FFTW_ESTIMATE, nt1)

     status = DftiCreateDescriptor(fw_plan_y , FFT_PRECISION, DFTI_COMPLEX, 1, ny)
     DFTI_CHECK(status)
                                                                                      
     status = DftiSetValue(fw_plan_y, DFTI_NUMBER_OF_TRANSFORMS, nxhalf1)
     status = DftiSetValue(fw_plan_y, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
     status = DftiSetValue(fw_plan_y, DFTI_INPUT_DISTANCE,  1)
     status = DftiSetValue(fw_plan_y, DFTI_INPUT_STRIDES,  (/0,ldx/))
     status = DftiSetValue(fw_plan_y, DFTI_OUTPUT_DISTANCE,  1)
     status = DftiSetValue(fw_plan_y, DFTI_OUTPUT_STRIDES,  (/0,ldx/))
     status = DftiSetValue(fw_plan_y, DFTI_NUMBER_OF_USER_THREADS, nthreads)
     DFTI_CHECK(status)
                                                                     
     status = DftiCommitDescriptor(fw_plan_y)
     DFTI_CHECK(status)

!    Note that here gboundin must equal gboudnout
     ! TODO clarify this point. why nxhalfm?
     ng2_pos = g2max_in + 1
!     fw_plan_xg2pos = fftw3_plan_many_dft(1, (/nx/), ng2_pos, &  ! ng2_pos 1D transforms of f(x,y,Gz) along x.
!&      slice_c, (/2*nxhalfm, ldy/), 1, 2*nxhalfm,        &  
!&      slice_d, (/2*nxhalfm, ldy/), 1, 2*nxhalfm, ABI_FFTW_FORWARD, ABI_FFTW_ESTIMATE, nt1)

     status = DftiCreateDescriptor(fw_plan_xg2pos , FFT_PRECISION, DFTI_COMPLEX, 1, nx)
     DFTI_CHECK(status)
                                                                                      
     status = DftiSetValue(fw_plan_xg2pos, DFTI_NUMBER_OF_TRANSFORMS, ng2_pos)
     status = DftiSetValue(fw_plan_xg2pos, DFTI_PLACEMENT, DFTI_NOT_INPLACE)
     status = DftiSetValue(fw_plan_xg2pos, DFTI_INPUT_DISTANCE, 2*nxhalfm)
     !status = DftiSetValue(fw_plan_xg2pos, DFTI_INPUT_STRIDES,  (/0,ldx/))
     status = DftiSetValue(fw_plan_xg2pos, DFTI_OUTPUT_DISTANCE, 2*nxhalfm)
     status = DftiSetValue(fw_plan_xg2pos, DFTI_NUMBER_OF_USER_THREADS, nthreads)
     DFTI_CHECK(status)
                                                                                        
     status = DftiCommitDescriptor(fw_plan_xg2pos)
     DFTI_CHECK(status)

   end if

   ! Do-loop on the planes stacked in the z direction

#ifdef DEV_USE_ABIMALLOC
!$OMP PARALLEL PRIVATE(ix,iy,iiy,cidx,sidx,pidx,fidx,padx,padz,phase,slice_a,slice_b,slice_c,slice_d)
   ! Allocate two 2-dimensional work arrays
   ABI_MALLOC(slice_a,(ldxy))
   ABI_MALLOC(slice_b,(ldxy))

   ABI_MALLOC(slice_c,(2*nxhalfm*ldy))
   ABI_MALLOC(slice_d,(2*nxhalfm*ldy))

#else
!$OMP PARALLEL &
!$OMP& PRIVATE(ix,iy,iiy,cidx,sidx,pidx,fidx,padx,padz,phase,slice_a,slice_b,slice_c,slice_d,cptr_sa,cptr_sb,cptr_sc,cptr_sd)
   call dfti_alloc_complex(ldxy,cptr_sa,slice_a)
   call dfti_alloc_complex(ldxy,cptr_sb,slice_b)

   call dfti_alloc_complex(2*nxhalfm*ldy,cptr_sc,slice_c)
   call dfti_alloc_complex(2*nxhalfm*ldy,cptr_sd,slice_d)
#endif

!$OMP DO
   do iz=1,nz

     if (option/=3) then
       !
       ! Zero the values on the current plane: needed only from iy=1 to g2max_in+1
       !do iy=1,g2max_in+1
       !  padx = (iy-1)*ldx
       !  do ix=1,nx
       !    sidx = ix + padx
       !    slice_a(sidx) = MYCZERO
       !  end do
       !end do
       slice_a = MYCZERO
       !
       ! Copy the data in the current plane
       do igb=1,ngbin
         ix   = indpw_kin(1,igb)
         iy   = indpw_kin(2,igb)
         cidx = igb + (iz-1)*mgb
         sidx = ix + (iy-1)*ldx
         slice_a(sidx) = cuboid(cidx)
       end do

       ! Perform x transform, taking into account arrays of zeros
       !call sg_fftx(fftcache,mfac,mg,ldx,ldy,1,g2max_in+1,1,slice_a,slice_b,trig1,aft1,now1,bef1,one,ind1,ic1)
       !call fftw3_execute_dft(bw_plan_xg2pos, slice_a, slice_b)

       status = DftiComputeBackward(bw_plan_xg2pos, slice_a, slice_b)
       DFTI_CHECK(status)

       ! Change the phase if $k_x \neq 0$
       if (istwf_k==3 .or. istwf_k==5 .or. istwf_k==7 .or. istwf_k==9) then
         do iy=1,g2max_in+1
           padx = (iy-1)*ldx
           do ix=1,nx
             phase = pha1(ix)
             sidx = ix + padx
             slice_b(sidx) = slice_b(sidx) * phase
           end do
         end do
       end if

       ! Compute symmetric and antisymmetric combinations
       if (istwf_k>=2 .and. istwf_k<=5) then
         do ix=1,nxhalf1-1
           slice_a(ix) = MYCMPLX(REAL(slice_b(2*ix-1)), REAL(slice_b(2*ix)))
         end do
         ! If nx odd, must add last data
         if ((2*nxhalf1-2)/=nx) then
           slice_a(nxhalf1)= REAL(slice_b(nx))
         end if
         iiy=2
       else
         iiy=1
       end if

       if (g2max_in+1 >= iiy) then
         do iy=iiy,g2max_in+1
           !
           padx = (iy-1)*ldx
           do ix=1,nxhalf1-1
             sidx = ix     + padx 
             cidx = 2*ix-1 + padx 

             slice_a(sidx) = MYCMPLX( REAL(slice_b(cidx)) - AIMAG(slice_b(cidx+1)),&
&                                    AIMAG(slice_b(cidx)) + REAL (slice_b(cidx+1)) )

             sidx = ix + (ny+iiy-iy-1)*ldx
             slice_a(sidx) = MYCMPLX(  REAL(slice_b(cidx)) + AIMAG(slice_b(cidx+1)),&
&                                    -AIMAG(slice_b(cidx)) + REAL (slice_b(cidx+1)) )
           end do
           !
           if ((2*nxhalf1-2)/=nx) then
             sidx = nxhalf1 + padx 
             cidx = nx + padx 
             slice_a(sidx) = slice_b(cidx)

             sidx = nxhalf1 + (ny+iiy-iy-1)*ldx
             slice_a(sidx) = MYCONJG(slice_b(cidx))
           end if
         end do
       end if

       if (nyhalf1 >= g2max_in+2) then
         do iy=g2max_in+2,nyhalf1
           do ix=1,nxhalf1-1
             sidx = ix + (iy-1)*ldx
             slice_a(sidx) = MYCZERO

             sidx = ix + (ny+iiy-iy-1)*ldx
             slice_a(sidx) =zero
           end do
           if ((2*nxhalf1-2)/=nx) then
             sidx = nxhalf1 + (iy-1)*ldx
             slice_a(sidx) = MYCZERO

             sidx = nxhalf1 + (ny+iiy-iy-1)*ldx
             slice_a(sidx) = MYCZERO
           end if
         end do
       end if

       !nxi=1
       !call sg_ffty(fftcache,mfac,mg,ldx,ldy,1,nxi,nxhalfm,1,1,slice_a,slice_b,trig2,aft2,now2,bef2,one,ind2,ic2)
       !call fftw3_execute_dft(bw_plan_y, slice_a, slice_b)

       status = DftiComputeBackward(bw_plan_y, slice_a, slice_b)
       DFTI_CHECK(status)

       ! Change the phase if $k_y \neq 0$
       if (istwf_k>=6 .and. istwf_k<=9) then
         do iy=1,ny
           phase = pha2(iy)
           padx = (iy-1)*ldx
           do ix=1,nxhalfm
             sidx = ix + padx
             slice_b(sidx) = slice_b(sidx) * phase 
           end do
         end do
       end if

     end if ! option/=3

     ! The wave function is now in real space, for the current plane,
     ! represented by REAL numbers, although packed in the complex array slice_b

     if (option==0) then
       ! This option is only permitted for istwf_k==2 (Gamma point)
       ! Copy the transformed function at the right place
       do iy=1,ny
         padx = (iy-1)*ldx
         do ix=1,nxhalf1-1
           sidx = ix + (iy-1)*ldx
           fidx = 2*ix-1 + padx + (iz-1)*ldx*ldy

           fofr(1,fidx) = REAL(slice_b(sidx))
           fofr(2,fidx) = zero

           fofr(1,fidx+1) = AIMAG(slice_b(sidx))
           fofr(2,fidx+1) = zero
         end do
         ! If nx odd, must add last data
         if ((2*nxhalf1-2)/=nx) then
           sidx = nxhalf1 + (iy-1)*ldx
           fidx = nx + (iy-1) * ldx + (iz-1)*ldx*ldy
           fofr(1,fidx) = REAL(slice_b(sidx))
           fofr(2,fidx) = zero
         end if
       end do
     end if

     if (option==1) then ! Accumulate density
       do iy=1,ny
         padx = (iy-1)*ldx
         do ix=1,nxhalf1-1
           sidx = ix + padx 
           denpot(2*ix-1,iy,iz) = denpot(2*ix-1,iy,iz) + weight_r* REAL(slice_b(sidx))**2
           denpot(2*ix  ,iy,iz) = denpot(2*ix  ,iy,iz) + weight_i*AIMAG(slice_b(sidx))**2
         end do
         ! If nx odd, must add last data
         if ((2*nxhalf1-2)/=nx) then
           sidx = nxhalf1 + padx
           denpot(nx,iy,iz) = denpot(nx,iy,iz)+weight_r*REAL(slice_b(sidx))**2
         end if
       end do
     end if

     if (option==2) then ! Apply local potential
       do iy=1,ny
         padx = (iy-1)*ldx
         do ix=1,nxhalf1-1
           sidx = ix + padx 
           slice_a(sidx) = MYCMPLX( denpot(2*ix-1,iy,iz)* REAL(slice_b(sidx)), &
                                    denpot(2*ix  ,iy,iz)*AIMAG(slice_b(sidx)) )
         end do
         ! If nx odd, must add last data
         if ((2*nxhalf1-2)/=nx) then
           sidx = nxhalf1 + padx 
           slice_a(sidx) = MYCMPLX( denpot(nx,iy,iz)*REAL(slice_b(sidx)), zero)
         end if
       end do
     end if

     if (option==3) then
       ! This option is only permitted for istwf_k==2 (Gamma point)
       ! Copy the transformed function at the right place
       do iy=1,ny
         padx = (iy-1)*ldx
         do ix=1,nxhalf1-1
           sidx = ix + padx 
           fidx = 2*ix-1 + padx + (iz-1)*ldx*ldy
           slice_b(sidx) = MYCMPLX( fofr(1,fidx), fofr(1,fidx+1) )
         end do
         ! If nx odd, must add last data
         if ((2*nxhalf1-2)/=nx) then
           sidx = nxhalf1 + padx
           fidx = nx + padx + (iz-1)*ldx*ldy
           slice_b(sidx) = MYCMPLX( fofr(1,fidx), zero)
         end if
       end do
     end if

     if (option==2 .or. option==3) then  
       !
       ! Change the phase if $k_y \neq 0$
       if (istwf_k>=6 .and. istwf_k<=9) then
         do iy=1,ny
           padx = (iy-1)*ldx
           phase = MYCONJG(pha2(iy))
           do ix=1,nxhalfm
             sidx = ix + padx
             slice_a(sidx) = slice_a(sidx) * phase
           end do
         end do
       end if
       !
       ! Perform y transform
       !nxi=1
       !call sg_ffty(fftcache,mfac,mg,ldx,ldy,1,nxi,nxhalfm,1,1,slice_a,slice_b,trig5,aft5,now5,bef5,-one,ind5,ic5)
       !call fftw3_execute_dft(fw_plan_y, slice_a, slice_b)

       status = DftiComputeForward(fw_plan_y, slice_a, slice_b)
       DFTI_CHECK(status)

       ! Decompose symmetric and antisymmetric parts
       if (istwf_k>=2 .and. istwf_k<=5) then
         do ix=1,nxhalfm
           pidx = 2*ix-1 
           slice_c(pidx)   = MYCMPLX(  REAL(slice_b(ix)), zero)
           slice_c(pidx+1) = MYCMPLX( AIMAG(slice_b(ix)), zero)
         end do
         iiy=2
       else
         iiy=1
       end if

       do iy=iiy,g2max_in+1
         padx = (iy-1)*ldx
         do ix=1,nxhalfm
           sidx = ix + padx
           cidx = ix + (ny+iiy-iy-1)*ldx
           pidx = 2*ix-1 + (iy-1)*2*nxhalfm

           slice_c(pidx) = MYCMPLX( &
&            ( REAL(slice_b(sidx)) +  REAL(slice_b(cidx)))*0.5d0, &
&            (AIMAG(slice_b(sidx)) - AIMAG(slice_b(cidx)))*0.5d0 )

           slice_c(pidx+1) = MYCMPLX( &
&            (AIMAG(slice_b(sidx)) + AIMAG(slice_b(cidx)))*0.5d0, &
&            (-REAL(slice_b(sidx)) +  REAL(slice_b(cidx)))*0.5d0 )
         end do
       end do
       !
       ! Change the phase if $k_x \neq 0$
       if (istwf_k==3 .or. istwf_k==5 .or. istwf_k==7 .or. istwf_k==9) then
         do iy=1,g2max_in+1
           do ix=1,nx
             phase = MYCONJG(pha1(ix))
             pidx = ix + (iy-1)*2*nxhalfm
             slice_c(pidx)= slice_c(pidx) * phase
           end do
         end do
       end if
       !
       ! Perform x transform: for y=1 to g2max_in+1, to benefit from zeros
       !call sg_fftx(fftcache,mfac,mg,2*nxhalfm,ldy,1,g2max_in+1,1,slice_c,slice_d,trig4,aft4,now4,bef4,-one,ind4,ic4)
       !call fftw3_execute_dft(fw_plan_xg2pos, slice_c, slice_d)

       status = DftiComputeForward(fw_plan_xg2pos, slice_c, slice_d)
       DFTI_CHECK(status)

       ! Copy the data from the current plane to cuboid.
       do igb=1,ngbout
         ix=indpw_kout(1,igb)
         iy=indpw_kout(2,igb)
         cidx = igb + (iz-1)*mgb
         pidx = ix + (iy-1)*2*nxhalfm
         cuboid(cidx) = slice_d(pidx)
       end do

     end if ! option==2 or 3

   end do ! End loop on planes
!$OMP END DO

#ifdef DEV_USE_ABIMALLOC
   ABI_FREE(slice_a)
   ABI_FREE(slice_b)
   ABI_FREE(slice_c)
   ABI_FREE(slice_d)
#else
   call dfti_free(cptr_sa)
   call dfti_free(cptr_sb)
   call dfti_free(cptr_sc)
   call dfti_free(cptr_sd)
#endif
!$OMP END PARALLEL

   status = DftiFreeDescriptor(bw_plan_xg2pos)
   status = DftiFreeDescriptor(bw_plan_y)

   !call fftw3_destroy_plan(bw_plan_xg2pos)
   !call fftw3_destroy_plan(bw_plan_y)

   if (option==2 .or. option==3) then

     status = DftiFreeDescriptor(fw_plan_y)
     status = DftiFreeDescriptor(fw_plan_xg2pos)

     !call fftw3_destroy_plan(fw_plan_y)
     !call fftw3_destroy_plan(fw_plan_xg2pos)

     ! Change the phase if $k_z \neq 0$
     if (istwf_k==4 .or. istwf_k==5 .or. istwf_k==8 .or. istwf_k==9) then
!$OMP PARALLEL DO PRIVATE(phase,cidx,padc)
       do iz=1,nz
         phase = MYCONJG(pha3(iz))
         padc = (iz-1)*mgb
         do igb=1,ngbout
           cidx = igb + padc
           cuboid(cidx) = cuboid(cidx) * phase
         end do
       end do
     end if

     ! 1D FFTs on the z direction
!     fw_plan = fftw3_plan_many_dft(1, (/nz/), ngbout, & ! ngbout 1D transforms of f(x,y,Gz) along Gz.
!&      cuboid, (/mgb, nz, 1/), mgb, 1,                & 
!&      cuboid, (/mgb, nz, 1/), mgb, 1, ABI_FFTW_FORWARD, ABI_FFTW_ESTIMATE, nthreads)

     status = DftiCreateDescriptor(fw_plan, FFT_PRECISION, DFTI_COMPLEX, 1, nz)
     DFTI_CHECK(status)
                                                                                        
     status = DftiSetValue(fw_plan, DFTI_NUMBER_OF_TRANSFORMS, ngbout)
     status = DftiSetValue(fw_plan, DFTI_INPUT_STRIDES,  (/0,mgb/))
     status = DftiSetValue(fw_plan, DFTI_INPUT_DISTANCE,  1)
     status = DftiSetValue(fw_plan, DFTI_NUMBER_OF_USER_THREADS, nt1)
     status = DftiSetValue(fw_plan, DFTI_FORWARD_SCALE, one/DBLE(nfft)) ! normalization
                                                                                        
     status = DftiCommitDescriptor(fw_plan)
     DFTI_CHECK(status)
                                                                                        
     status = DftiComputeForward(fw_plan, cuboid)
     DFTI_CHECK(status)
     status = DftiFreeDescriptor(fw_plan)

     !call fftw3_execute_dft(fw_plan, cuboid, cuboid)
     !call fftw3_destroy_plan(fw_plan)

     ! Transfer the data in the output array.

!$OMP PARALLEL DO PRIVATE(igb,iz,cidx)
     do ig=1,npwout
       igb  = indpw_kout(4,ig)
       iz   = indpw_kout(3,ig)
       cidx = igb + (iz-1)*mgb
       fofgout(1,ig)=REAL (cuboid(cidx))
       fofgout(2,ig)=AIMAG(cuboid(cidx))
     end do
   end if

   call dfti_free(cptr_cuboid)

   if (istwf_k/=2) then
     ABI_FREE(pha1)
     ABI_FREE(pha2)
     ABI_FREE(pha3)
   end if
!------------------------------------------------------------------

end if ! End time-reversal symmetry

 if (option/=3) then
   ABI_FREE(indpw_kin)
 end if

 if (option==2 .or. option==3) then
   ABI_FREE(indpw_kout)
 end if
