=== modified file 'src/68_gw/mlwfovlp_qp.F90'
--- src/68_gw/mlwfovlp_qp.F90	2010-07-09 16:04:52 +0000
+++ src/68_gw/mlwfovlp_qp.F90	2010-11-11 17:02:39 +0000
@@ -86,6 +86,7 @@
  use interfaces_28_numeric_noabirule
  use interfaces_42_geometry
  use interfaces_51_manage_mpi
+ use interfaces_53_abiutil
  use interfaces_66_wfs
  use interfaces_68_gw, except_this_one => mlwfovlp_qp
 !End of the abilint section
@@ -99,7 +100,7 @@
  type(datafiles_type),intent(in) :: dtfil
  type(Hdr_type),intent(in) :: Hdr
  type(MPI_type),intent(inout) :: MPI_enreg
- type(Cprj_type),intent(inout) :: Cprj_BZ(natom,nspinor*mband*mkmem*nsppol)
+ type(Cprj_type),target,intent(inout) :: Cprj_BZ(natom,nspinor*mband*mkmem*nsppol)
  type(Pawtab_type),intent(in) :: Pawtab(ntypat*Dtset%usepaw)
 !arrays
  integer,intent(in) :: npwarr(nkpt)
@@ -114,7 +115,7 @@
  integer :: iatom,iband,icg,icg_shift,ii,ipw,isppol,jband,nband_k,ord_iband
  integer :: nfftot,ikpt,irzkpt,npw_k,ikg,ijpack
  integer :: nscf,nbsc,itimrev,band_index,nkibz,nkbz
- integer :: gw_timrev,input
+ integer :: gw_timrev,input,jb_idx,ib_idx
  integer :: master,nprocs,spaceComm,rank
  real(dp) :: TOL_SORT=tol12
  real(dp) :: dksqmax,ortho_err,ucvol
@@ -129,7 +130,7 @@
  integer :: indkk(nkpt,6),my_ngfft(18)
  integer,allocatable :: npwarr_ibz(:),nband_ibz(:),ibz2bz(:,:),istwfk_ibz(:)
  integer,allocatable :: dimlmn(:),iord(:)
- real(dp) :: gmet(3,3),gprimd(3,3),rmet(3,3)
+ real(dp) :: gmet(3,3),gprimd(3,3),rmet(3,3),paw_ovlp(2)
  real(dp),allocatable :: qp_rhor(:,:),sorted_qpene(:)
  real(dp),allocatable :: kibz(:,:),wtk_ibz(:)
  real(dp),allocatable :: doccde_ibz(:),occfact_ibz(:),eigen_ibz(:)
@@ -137,6 +138,7 @@
  complex(dpc),allocatable :: m_lda_to_qp(:,:,:,:),ortho(:),m_lda_to_qp_BZ(:,:,:,:)
  complex(dpc),allocatable :: m_tmp(:,:),cg_k(:,:),cg_qpk(:,:)
  type(Pawrhoij_type),allocatable :: prev_Pawrhoij(:)
+ type(Cprj_type),pointer :: Cp1(:,:),Cp2(:,:) 
 
 !************************************************************************
 
@@ -167,6 +169,10 @@
  call xme_init    (MPI_enreg,rank     )          
  call xproc_init  (MPI_enreg,nprocs   )
 
+ if (nprocs/=1) then
+   MSG_ERROR(" mlwfovlp_qp not programmed for parallel execution")
+ end if
+
  ! Compute reciprocal space metric gmet for unit cell of disk wf
  call metric(gmet,gprimd,-1,rmet,rprimd,ucvol)
 
@@ -341,13 +347,19 @@
     ! * nband >= maxval(bndgw) for this to pass, but may be less than nband used in GW.
     ! * Unfortunately, does not test WFK and QPS consistency.
     allocate(ortho(nband_k*(nband_k+1)/2))
-    ortho=czero ; ijpack=0
+    ortho=czero; ijpack=0
     do jband=1,nband_k
+      jb_idx=band_index+jband
+      if (dtset%usepaw==1) Cp2 => Cprj_BZ(:,jband:jband+(nspinor-1))
       do iband=1,jband
+        ib_idx=band_index+iband
         ijpack=ijpack+1
         ortho(ijpack)=sum(conjg(cg_qpk(1:npw_k,iband))*cg_qpk(1:npw_k,jband))
-        !ortho(ijpack) = &
-        ! &overlap_cmplx(cg_qpk(1:npw_k,iband),cg_qpk(1:npw_k,jband),Dtset%usepaw,cprj1,cprj2,Cryst%typat,Pawtab)
+        if (dtset%usepaw==1) then
+          Cp1 => Cprj_BZ(:,iband:iband+(nspinor-1))
+          paw_ovlp = paw_overlap(Cp2,Cp1,Cryst%typat,Pawtab)
+          ortho(ijpack) = ortho(ijpack) + CMPLX(paw_ovlp(1),paw_ovlp(2)) 
+        end if
         if (jband==iband) ortho(ijpack)=ortho(ijpack)-cone
       end do
     end do

