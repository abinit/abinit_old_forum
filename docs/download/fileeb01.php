!Input file for the anaddb code. Analysis of the SiO2 DDB                       

!Flags
 ifcflag   1     ! Interatomic force constant flag
 ifcout    0

!Wavevector grid number 1 (coarse grid, from DDB)
  brav    1      ! Bravais Lattice : 1-S.C., 2-F.C., 3-B.C., 4-Hex.)
  ngqpt   4  4  4   ! Monkhorst-Pack indices
  nqshft  1         ! number of q-points in repeated basic q-cell
  q1shft  3*0.0

!Effective charges
  chneut   1     ! Charge neutrality requirement for effective charges.

!Interatomic force constant info
  dipdip  1      ! Dipole-dipole interaction treatment

!Phonon band structure output for band2eps - See note near end for
! dealing with gamma LO-TO splitting issue.
   eivec  4

!Wavevector list number 1 (Reduced coordinates and normalization factor)         
  nph1l    71      ! number of phonons in list 1                             

  qph1l   0.0000  0.0000  0.0000   1.0    !(gamma point)
          0.0375  0.0375  0.0750   1.0
          0.0750  0.0750  0.1500   1.0
          0.1125  0.1125  0.2250   1.0
          0.1500  0.1500  0.3000   1.0
          0.1875  0.1875  0.3750   1.0
          0.2250  0.2250  0.4500   1.0
          0.2625  0.2625  0.5250   1.0
          0.3000  0.3000  0.6000   1.0
          0.3375  0.3375  0.6750   1.0
          0.3750  0.3750  0.7500   1.0    !(K point)
          0.3875  0.3875  0.7750   1.0
          0.4000  0.4000  0.8000   1.0
          0.4125  0.4125  0.8250   1.0
          0.4250  0.4250  0.8500   1.0
          0.4375  0.4375  0.8750   1.0
          0.4500  0.4500  0.9000   1.0
          0.4625  0.4625  0.9250   1.0
          0.4750  0.4750  0.9500   1.0
          0.4875  0.4875  0.9750   1.0
          0.5000  0.5000  1.0000   1.0    !(X point)
          0.5500  0.5500  1.0000   1.0
          0.6000  0.6000  1.0000   1.0
          0.6500  0.6500  1.0000   1.0
          0.7000  0.7000  1.0000   1.0
          0.7500  0.7500  1.0000   1.0
          0.8000  0.8000  1.0000   1.0
          0.8500  0.8500  1.0000   1.0
          0.9000  0.9000  1.0000   1.0
          0.9500  0.9500  1.0000   1.0
          1.0000  1.0000  1.0000   1.0    !(gamma point)
          0.9500  0.9500  0.9500   1.0
          0.9000  0.9000  0.9000   1.0
          0.8500  0.8500  0.8500   1.0
          0.8000  0.8000  0.8000   1.0
          0.7500  0.7500  0.7500   1.0
          0.7000  0.7000  0.7000   1.0
          0.6500  0.6500  0.6500   1.0
          0.6000  0.6000  0.6000   1.0
          0.5500  0.5500  0.5500   1.0
          0.5000  0.5000  0.5000   1.0    !(L point)
          0.5000  0.4500  0.5000   1.0
          0.5000  0.4000  0.5000   1.0
          0.5000  0.3500  0.5000   1.0
          0.5000  0.3000  0.5000   1.0
          0.5000  0.2500  0.5000   1.0
          0.5000  0.2000  0.5000   1.0
          0.5000  0.1500  0.5000   1.0
          0.5000  0.1000  0.5000   1.0
          0.5000  0.0500  0.5000   1.0
          0.5000  0.0000  0.5000   1.0    !(X point)
          0.5000  0.0250  0.5250   1.0
          0.5000  0.0500  0.5500   1.0
          0.5000  0.0750  0.5750   1.0
          0.5000  0.1000  0.6000   1.0
          0.5000  0.1250  0.6250   1.0
          0.5000  0.1500  0.6500   1.0
          0.5000  0.1750  0.6750   1.0
          0.5000  0.2000  0.7000   1.0
          0.5000  0.2250  0.7250   1.0
          0.5000  0.2500  0.7500   1.0    !(W point)
          0.5000  0.2750  0.7250   1.0
          0.5000  0.3000  0.7000   1.0
          0.5000  0.3250  0.6750   1.0
          0.5000  0.3500  0.6500   1.0
          0.5000  0.3750  0.6250   1.0
          0.5000  0.4000  0.6000   1.0
          0.5000  0.4250  0.5750   1.0
          0.5000  0.4500  0.5500   1.0
          0.5000  0.4750  0.5250   1.0
          0.5000  0.5000  0.5000   1.0    !(L point)

!Wavevector list number 2 (Cartesian directions for non-analytic gamma phonons)

!The output for this calculation must be cut-and-pasted into the
! t59_out.freq file to be used as band2eps input to get proper LO-TO 
! splitting at gamma.  Note that gamma occurrs twice.

  nph2l    1       ! number of directions in list 2

  qph2l   1.0000  1.0000  1.0000   0.0                   
## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = anaddb
#%% test_chain = trf2_1.in, trf2_3.in, trf2_4.in, trf2_5.in, trf2_6.in, trf2_7.in
#%% input_ddb = trf2_3.ddb.out 
#%% [files]
#%% files_to_test = 
#%%   trf2_5.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options=-easy
#%% psp_files =  13al.981214.fhi, 33as.pspnc 
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = X. Gonze
#%% keywords = 
#%% description = Input file for the anaddb code. Analysis of the SiO2 DDB
#%%<END TEST_INFO>
