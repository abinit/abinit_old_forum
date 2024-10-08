#CdSe
#Prepare the computation of linear and non-linear optic properties
#of CdSe crystal : ground-state with few bands,
#then non-SCF with a larger number of bands, then ddk for different directions
#Note that the k point sampling shoud be finer for significant results. The cut-off energy is also too low.

 ndtset 6

#First dataset : SC run with kpoints in the IBZ
   iscf1  3
  nband1  4     
  nstep1 25   
 kptopt1 1
 nbdbuf1 0
 prtden1 1   getden1 0   getwfk1 0    ! Usual file handling data

#Second dataset : NSC run with large number of bands, and points in the IBZ
    iscf2 -2  
   nband2 20  ! This number of bands might be too low for non-linear optics and real part of linear optics
   nstep2 25
  kptopt2  1
  getwfk2  1   getden2 1   ! Usual file handling data

#Third dataset : NSC run with large number of bands, and points in the the full BZ
    iscf3 -2  
   nband3 20  ! This number of bands might be too low for non-linear optics and real part of linear optics 
   nstep3 25
  kptopt3  3
  getwfk3  2   getden3 1   ! Usual file handling data


#Fourth dataset : ddk response function along axis 1
   iscf4 -3
  nband4 20   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep4  1  nline4  0  prtwf4  3
 kptopt4  3

   nqpt4  1  qpt4  0.0d0 0.0d0 0.0d0 
  rfdir4  1 0 0
 rfelfd4  2
 getwfk4  3

#Fifth dataset : ddk response function along axis 2
   iscf5 -3
  nband5 20   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep5  1  nline5  0   prtwf5  3
 kptopt5  3

   nqpt5  1  qpt5  0.0d0 0.0d0 0.0d0
  rfdir5  0 1 0
 rfelfd5  2
 getwfk5  3

#Sixth dataset : ddk response function along axis 3
   iscf6 -3
  nband6 20   ! This number of bands might be too low for non-linear optics and real part of linear optics
  nstep6  1  nline6  0    prtwf6  3
 kptopt6  3

   nqpt6  1  qpt6  0.0d0 0.0d0 0.0d0
  rfdir6  0 0 1
 rfelfd6  2
 getwfk6  3

#Data common to all datasets
 nshiftk 4
 shiftk  0.5 0.5 0.5
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
ngkpt 12 12 12 

 acell   3*11.02
 amu 112.41  78.96
 diemac 12.0
 ecut 29.0           ! This is also too low
 iscf 3
 ixc 14
 natom  2  nbdbuf 2
 ntypat  2
 rprim   
       0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5   
       0.5  0.5  0.0
 xred
   0.0  0.0  0.0  # Triplet giving the REDUCED coordinate of atom 1.
   1/4  1/4  1/4  # Triplet giving the REDUCED coordinate of atom 2.

 tnons 72*0.0
 typat  1 2  tolwfr  1.e-20
 znucl  48 34
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = toptic_1.in, toptic_2.in
#%% [files]
#%% files_to_test = 
#%%   toptic_1.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options = -easy
#%% psp_files =  31ga.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = 
#%% keywords = NC, DFPT
#%% description = 
#%%<END TEST_INFO>
