!{\src2tex{textfont=tt}}
!!****p* ABINIT/fold2Bloch
!! NAME
!! fold2Bloch
!!
!! FUNCTION
!! Main routine for the unfolding of the wavefuntion.
!!
!! COPYRIGHT
!! Copyright (C) 2014 ABINIT group (AB)
!! This file is distributed under the terms of the
!! GNU General Public License, see ~abinit/COPYING
!! or http://www.gnu.org/copyleft/gpl.txt .
!! For the initials of contributors, see ~abinit/doc/developers/contributors.txt .
!!
!! INPUTS
!!  (main program)
!!
!! OUTPUT
!!  (main program)
!!
!! NOTES
!! folds= Array of folds in X,Y, and Z directions
!!
!! PARENTS
!!
!! CHILDREN
!!	sortc, newk, wfk_open_read, wfk_read_band_block, hdr_io, getargs
!!
!! SOURCE

program fold2Bloch

#if defined HAVE_CONFIG_H
#include "config.h"
#endif
#include "abi_common.h"

 use defs_basis
 use defs_abitypes
 use m_distribfft
 use m_errors
 use m_profiling
 use m_splines
 use m_wfk
 use m_xmpi

 use m_io_tools, only : get_unit, iomode_from_fname
 use m_header,   only : hdr_skip, hdr_io
 use m_pptools,  only : print_fofr_ri, print_fofr_xyzri , print_fofr_cube

!This section has been created automatically by the script Abilint (TD).
!Do not modify the following lines by hand.
#undef ABI_FUNC
#define ABI_FUNC 'fold2Bloch'
 use interfaces_84_fold2Bloch
!End of the abilint section

implicit none

type(wfk_t) :: Wfk
type(hdr_type) :: hdr
integer :: ikpt, iband,nspinor,nsppol,npw,rdwr,fform0,unitfi,mband,nkpt,mcg,csppol
integer :: folds(3),cg_b, count, infile, outfile
real(dp), allocatable :: cg(:,:), eig(:),kpts(:,:), weights(:),coefc(:,:), nkval(:,:)
integer, allocatable :: kg(:,:),nband(:), npwarr(:)
character(30) :: fname, outname

infile=100
outfile=300
call getargs(folds, fname) !Process command line arguments
!folds=(/1,2,3/)
open(unit=infile, file=fname, form="unformatted", status="old")

 write(*,*) '         \033[97m ***********************' !print program header in pearl white
 write(*,*) '          ** Fold2Bloch V 1.0  **'
 write(*,*) '          **Build Sept 22, 2014**'
 write(*,*) '          ***********************\033[0m'

rdwr=1
call hdr_io(fform0,hdr,rdwr, infile) !read header
!rdwr=4; unitfi=6
!call hdr_io(fform0,hdr,rdwr,unitfi)

nkpt=hdr%nkpt
ABI_ALLOCATE(npwarr,(nkpt))
ABI_ALLOCATE(nband,(nkpt))
ABI_ALLOCATE(kpts,(3,nkpt)) 

nsppol=hdr%nsppol
nspinor=hdr%nspinor
npwarr=hdr%npwarr
kpts=hdr%kptns
nband=hdr%nband
mband=maxval(nband)
mcg=maxval(npwarr)*nspinor*mband
!write(300,*) "NPWARR: ", npwarr
!write(300, "(3f)") kpts(:,1:nkpt)

call wfk_open_read(wfk, fname,0, 0, infile,0)

do csppol=1, nsppol
   if (nsppol==1) then !Determine spin polarization for output file
      outname="fold2Bloch.out"
   elseif ((nsppol==2).and.(csppol==1)) then
      outname="fold2Bloch_up.out"
      WRITE(*,*) "     ===================="
      write(*,*) "     SPIN POLARIZATION UP"
      WRITE(*,*) "     ===================="
   elseif ((nsppol==2).and.(csppol==2)) then
      outname="fold2Bloch_down.out"
      WRITE(*,*) "     ======================"
      write(*,*) "     SPIN POLARIZATION DOWN"
      WRITE(*,*) "     ======================"
   endif
   open(unit=outfile, file=outname, form="formatted", status="unknown") !open output file
 do ikpt=1, nkpt !For each K point
   ABI_ALLOCATE(cg,(2,mcg))
   ABI_ALLOCATE(eig,((2*mband)**0*mband))
   ABI_ALLOCATE(kg,(3,npwarr(ikpt)))
   ABI_ALLOCATE(coefc,(2,npwarr(ikpt)))
   ABI_ALLOCATE(weights,(product(folds)))
   ABI_ALLOCATE(nkval,(3,product(folds)))
   call progress(ikpt,nkpt,kpts(:,ikpt)) !Write progress information

   !Read a block of data
   call wfk_read_band_block(wfk, (/1,nband(ikpt)/), ikpt, csppol, xmpio_single, kg_k=kg, cg_k=cg, eig_k=eig)
   		 !write(300,*) "K-point: ", kpts(:,ikpt)

   !Determine unfolded K point states
   call newk(kpts(1,ikpt),kpts(2,ikpt),kpts(3,ikpt),folds(1),folds(2),folds(3),nkval)
		 !write(outfile,*) "nkval: "
       	 !write(outfile,"(3f)") nkval
      		 !write(outfile,*) "eig : "
      		 !write(outfile,"(f)") eig
      		 !write(outfile,*) "kg : "
      		 !write(outfile, "(3i)") kg(:,1:npwarr(ikpt))
	cg_b=1
       do iband=1, nband(ikpt) !Foe each Eigenvalue
	  	 !write(*,*) "kg size: ", size(kg, dim=2)
	  	 !write(*,*) "npwarr: ", npwarr(ikpt)
	  	 !write(*,*) "cg size: ", (cg_b+npwarr(ikpt)-1)
	  	 !write(*,*) "coefc size: ", size(coefc, dim=2)
	  coefc=cg(:,cg_b:(cg_b+npwarr(ikpt)-1)) !Split coefficients per eigen value according to the number of "kg" 

         !Find weight of each eigen value
	  call sortc(folds(1),folds(2),folds(3),kg,coefc,npwarr(ikpt),weights)  

         !Write out results, format: new k states(x, y, and z), eigenvalue, weight
	  do count=1, product(folds) 
	    write(outfile,50) nkval(1,count),nkval(2,count),nkval(3,count),eig(iband),weights(count)
	    50 format(f11.6, f11.6, f11.6, f11.6, f11.6)
	  enddo
         	 !write(outfile,*) "Weights: "
         	 !write(outfile,"(f6.4)") weights 
	 	 !write(outfile,*) "cg", npwarr(ikpt)
        	 !write(outfile,"(2f)") cg(:,cg_b:cg_b+npwarr(ikpt)-1)
	  cg_b=cg_b+npwarr(ikpt) !shift coefficient pointer for next eigenvalue
       enddo
   ABI_DEALLOCATE(cg)
   ABI_DEALLOCATE(eig)
   ABI_DEALLOCATE(kg)
   ABI_DEALLOCATE(coefc)
   ABI_DEALLOCATE(weights)
   ABI_DEALLOCATE(nkval)
 enddo
close(outfile) !close output file
enddo
call wfk_close(wfk)
close(infile) !close input file

write(*,*) "\033[97m     Number of K points processed:", nkpt
write(*,*) "     Data was written to: fold2Bloch.out"
write(*,*) "     Data format: KX, KY, KZ, Eigenvalue(Ht), Weight\033[0m"

end program fold2Bloch