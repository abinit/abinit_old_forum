ifltransport 1
ep_keepbands 1

# turn on calculation of the electron-phonon quantities
elphflag 1

telphint 0

ntemper 10
tempermin 1.0
temperinc 2.0

# Minimalistic kpoint grid - needed for tetrahedron method
kptrlatt 4 0 0  0 4 0  0 0 1
elphsmear 0.01   # This input variable is not relevant in the tetrahedron method case

mustar 0.136
nqpath 4
qpath
  0.0 0.0 0.0
  1/4 0.0 0.0
  1/2 0.0 0.0
  1/2 1/4 0.0

 

prtnest 1        # print the nesting function along the q-path specified by qpath
                 # note that the k-grid defined by kptrlatt must be orthogonal in reciprocal space
                 # moreover off-diagonal elements are not allowed
                 # i.e kprtlatt = (1 0 0 0 1 1 0 -1 1 ) will not work

# Minimalistic qpoint grid
ngqpt 2 2 1

#  impose acoustic sum rule in a symmetric way
asr 2 
dipdip 0

#  bravais lattice necessary
brav 1

# qpt grid
nqshft 1
q1shft 0.0 0.0 0.0
# 
ifcflag 1
ifcout 0
ifcana 1
#  ifc for all atoms?
natifc 0
atifc 1 2 3

#  print dielectric matrix with freq dependence
dieflag 0

#  print out eigenvectors and symmetrize dyn matrix
eivec 1

#Wavevector list number 1 (Reduced coordinates and normalization factor)
nph1l 4
qph1l
             0.00000000E+00  0.00000000E+00  0.00000000E+00 1
             2.50000000E-01  0.00000000E+00  0.00000000E+00 1
             5.00000000E-01  0.00000000E+00  0.00000000E+00 1
             5.00000000E-01  2.50000000E-01  0.00000000E+00 1


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = anaddb
#%% test_chain =  teph_1.in, teph_2.in, teph_3.in, teph_4.in, teph_5.in, teph_6.in
#%% input_ddb = teph_2.ddb.out 
#%% input_gkk = teph_3o_GKK.bin
#%% [files]
#%% files_to_test = 
#%%   teph_6.out, tolnlines= 21, tolabs=  3.000e-01, tolrel=  3.000e-02
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = M. Verstraete 
#%% keywords = EPH
#%% description = anaddb input file for electron phonon calculations.
#%%<END TEST_INFO>
