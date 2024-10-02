 ndtset 5

#First dataset : SC run with kpoints in the IBZ
   iscf1  3     #was 3
  nband1  28    
  nstep1  1000   
 kptopt1 1
 nbdbuf1 0
 prtden1 1   getden1 0   getwfk1 0    ! Usual file handling data

#Second dataset : NSC run with large number of bands, and points in the IBZ
    iscf2 -3  # a non-self-consistent calculation is to be done; in this case an electron density rho(r) on a real space grid read from ds1 
   nband2 50  ! This number of bands might be too low for non-linear optics and real part of linear optics
   nstep2 1000
  kptopt2  1  # 
  getwfk2  1   getden2 1   ! Usual file handling data

#Third dataset : ddk response function along axis 1
   iscf3 -3
  nband3 50   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep3  1  nline3  0
 kptopt3  3
   nqpt3  1  qpt3  0.0d0 0.0d0 0.0d0 
  rfdir3  1 0 0
 rfelfd3  2  # Response Function with respect to the ELectric FielD 
 getwfk3  2

#Fourth dataset : ddk response function along axis 2
   iscf4 -3   #a non-self-consistent calculation is to be done; in this case an electron density rho(r) on a real space grid
  nband4 50   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep4  1  nline4  0
 kptopt4  3
   nqpt4  1  qpt5  0.0d0 0.0d0 0.0d0
  rfdir4  0 1 0
 rfelfd4  2
 getwfk4  2

 #Fifth dataset : ddk response function along axis 3
   iscf5 -3
  nband5 50   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep5  1  nline5  0
 kptopt5  3
   nqpt5  1  qpt6  0.0d0 0.0d0 0.0d0
  rfdir5  0 0 1
 rfelfd5  2
 getwfk5  2


#Data common to all datasets
spgroup 1                #Space Group (1=p1)
natom  5
ntypat 2                    #number of types of Atoms
znucl 51 52                 #Z-number of atom types Ge32, Sb51, Te52

acell 10.143765 10.143765 10.143765 angstrom
angdeg 24.001373 24.001373 24.001373
typat     1 1 2 2 2 
xred #these coordinates were found after opening .cif in crys maker
 0.398254   0.398254   0.398254
-0.398254  -0.398254  -0.398254
 0.211348   0.211348   0.211348
-0.211348  -0.211348  -0.211348
 0.000000   0.000000   0.000000

ngkpt  5 5 5     ! This is much too low : should be at least 24x24x24

diemac 12.0
ecut  18    #from the convergence study SAW_Sb2Te3_096
ixc 7
nbdbuf 2
npulayit  20
tolwfr  1.e-20
prtcif 1 #
