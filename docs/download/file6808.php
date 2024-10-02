# Crystalline alpha-quartz
ndtset 2

# DATASET 1 : GS calculation 
tolvrs1     1d-8
nband1      28     # Adding 4 empty states to avoid problems in the SCF cycle.

# DATASET 2 : KSS generation
iscf2      -2      # NSCF
getden2    -1      # Read previous density
tolwfr2    1d-12   # Stopping criterion for the NSCF cycle.
kssform2    3      # Conjugate-gradient algorithm (recommended option for large systems)
nband2      160    # Number of (occ and empty) bands computed in the NSCF cycle.
nbdbuf2     10     # A large buffer helps to reduce the number of NSCF steps.
nbandkss2   150    # Number of bands stored in the KSS file (only the converged states are written).

#################### COMMON PART #########################

# number of self-consistent field steps
nstep        200
diemac       4.0

# energy cutoff [Ha]:
ecut         24

#Definition of the k-point grid
occopt 1           # Semiconductor
kptopt 1           # Option for the automatic generation of k points, taking
                   # into account the symmetry

ngkpt   4 4 3
nshiftk  1
shiftk  0.0 0.0 0.0   # The mesh contains the Gamma point 
                      # so that we can evaluate the QP correction for this point.
istwfk  *1

# Definition of the atom types
npsp   2
znucl  14  8
ntypat 2

# Definition of the atoms
natom 9
typat 3*1  6*2

# Experimental parameters (Wyckoff pag 312)
# u(Si)= 0.465
# x= 0.415 ; y= 0.272 ; z= 0.120

acell   2*4.91304  5.40463  Angstrom

xred   0.465   0.000   0.000              #Si
       0.000   0.465   2/3                #Si
      -0.465  -0.465   1/3                #Si
       0.415   0.272   0.120              #O
      -0.143  -0.415   0.4533333333333333 #O
      -0.272   0.143   0.7866666666666666 #O
       0.143  -0.272  -0.120              #O
       0.272   0.415   0.5466666666666666 #O
      -0.415  -0.143   0.2133333333333333 #O

rprim   5.0000000000e-01 -8.6602540378e-01  0.0000000000e+00
        5.0000000000e-01  8.6602540378e-01  0.0000000000e+00
        0.0000000000e+00  0.0000000000e+00  1.0000000000e+00

#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tmbt_01.out, tolnlines = 0, tolabs = 1.100e-03, tolrel = 3.000e-03
#%% psp_files = 14si.pspnc, 8o.pspnc
#%% [paral_info]
#%% nprocs_to_test = 9
#%% [extra_info]
#%% authors = M. Giantomassi
#%% keywords =  GW
#%% description = GW calculation for crystalline alpha-quartz. Preparatory GS run.
#%%<END TEST_INFO>
