# turn on calculation of the electron-phonon quantities
elphflag 1

# Path in reciprocal space along which the phonon linewidths
#  and band structure will be calculated
nqpath 7
qpath
 0.0 0.0 0.0
 1/2 1/2 0.0
 1   1   1
 1/2 1/2 1/2
 1/2 1/2 0.0
 1/2 3/4 1/4
 1/2 1/2 1/2

# Coulomb pseudopotential parameter
mustar 0.136

# Minimalistic qpoint grid
ngqpt 2 2 2

#  impose acoustic sum rule in a symmetric way
asr 2 
dipdip 0

#  bravais lattice necessary
brav 4

# qpt grid
nqshft 1
q1shft 0.0 0.0 0.0
# 
ifcflag 1
ifcana 1
ifcout 0
#  ifc for all atoms?
natifc 0
atifc 1 2 3 

#  print dielectric matrix with freq dependence
dieflag 0

#  print out eigenvectors and symmetrize dyn matrix
eivec 1

#Wavevector list number 1 (Reduced coordinates and normalization factor)
nph1l 1
qph1l
              0.00000000E+00  0.00000000E+00  0.00000000E+00 1

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = anaddb
#%% input_ddb = teph_2.ddb.out 
#%% input_gkk = teph_3o_GKK.bin
#%% test_chain =  teph_1.in, teph_2.in, teph_3.in, teph_4.in, teph_5.in, teph_6.in
#%% [files]
#%% files_to_test = 
#%%   teph_4.out, tolnlines=  300, tolabs=  3.010e-05, tolrel=  6.000e-07, fld_options=-medium
#%% psp_files =  13al.981214.fhi 
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = M. Verstraete 
#%% keywords = EPH
#%% description = anaddb input file for electron-phonon calculation.
#%% topics = PhononWidth
#%%<END TEST_INFO>
