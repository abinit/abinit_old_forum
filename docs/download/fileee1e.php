# General information
#**********************
   rfmeth  1       #response function methond
   enunit  0       # 0: print eigenvalues in hartree
   eivec   1       # 1 or 2: write the phonon eigenvectors
   chneut  2       # set the treatment of the charge neutrality requirement for effective charges
   selectz 0       # 0: the effective charge tensor is left as it is

# Flags
#*******
   dieflag  1      # 1 or 2: write the phonon eigenvectors
   ifcflag  0 ! This is the default value  # 0: donot write the phonon eigenvectors
   thmflag  0 ! This is the default value  # 0: donot write the phonon eigenvectors
    nlflag  1      # 1 or 2: write the phonon eigenvectors
   elaflag  3      # flag for calculate elastic and compliance tensors: 3: both relaxed and clamped-ion elastic and compliance tensors will be printed out
 piezoflag  3      # 3: both relaxed and clamped-ion piezoelectric tensors will be printed out.
 instrflag  1      # print out both force-response and displacement-response internal-strain tensor

# Nonlinear response calculation
#*******************************
   ramansr  1     # 1: impose the sum rule on the Raman tensors, giving each atom an equal part of the discrepancy
    alphon  1     # 1: ANADDB will compute linear combinations of the eigendispacements of modes that are degenerate.
    prtmbm  1     # 1: wite out the contribution of the individual zone-center phonon modes to the electrooptic tensor

# Wavevector list number 1
**************************                                                      
     nph1l  1               #the number of wavevectors in phonon list 1, used for interpolation of the phonon frequencies
     qph1l  0.0 0.0 0.0 1.0 #
                                                                                
# Wave vector list no. 2
#***********************
     nph2l  1
     qph2l  0.5 0 0 0.0

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = anaddb
#%% input_ddb = tnlo_4.ddb.out
#%% test_chain = tnlo_2.in, tnlo_3.in, tnlo_4.in, tnlo_5.in
#%% [files]
#%% files_to_test = 
#%%   tnlo_5.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options=-easy
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = M. Veithen, P. Ghosez
#%% keywords = 
#%% description = anaddb input file.
#%%<END TEST_INFO>
