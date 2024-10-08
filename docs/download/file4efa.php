# Crystalline silicon
# Calculation of the GW corrections
# Dataset 1: ground state calculation and calculation of the KSS file for 10 k-points in IBZ
# Dataset 2: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 3: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      3

# Definition of parameters for the calculation of the KSS file
kssform1     3
nbandkss1   35       # Number of bands in KSS file (-1 means the maximum possible)
nband1      40       # Number of (occ and empty) bands to be computed
nbdbuf1      5
tolwfr1  1.0d-18     # Will stop when this tolerance is achieved 

# Calculation of the screening (epsilon^-1 matrix)
optdriver2  3        # Screening calculation
getkss2     -1       # Obtain KSS file from previous dataset
nband2      20       # Bands to be used in the screening calculation
ecutwfn2    2.1      # Cut-off energy of the planewave set to represent the wavefunctions. It would be more convenient to keep the default ecut value.
ecuteps2    3.6      # Cut-off energy of the planewave set to represent the dielectric matrix. It is important to adjust this parameter.
ppmfrq2    16.7 eV   # Imaginary frequency where to calculate the screening
awtr2       0        # Note : the default awtr 1 is better

# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver3  4        # Self-Energy calculation
getkss3     -2       # Obtain KSS file from dataset 1
getscr3     -1       # Obtain SCR file from previous dataset
nband3      20       # Bands to be used in the Self-Energy calculation
ecutwfn3     5.0     # Planewaves to be used to represent the wavefunctions. It would be ore convenient to keep the default ecut value.
ecutsigx3    6.0    # Dimension of the G sum in Sigma_x. It would be better to keep the default ecut value.
                     # (the dimension in Sigma_c is controlled by ecuteps)
nkptgw3      1       # number of k-point where to calculate the GW correction
kptgw3               # k-points
  -0.125    0.000    0.000
bdgw3       4  5     # calculate GW corrections for bands from 4 to 5


# Data common to the three different datasets

# Definition of the unit cell: fcc
acell 6.1429 6.1429 9.837


rprim  0.86602540378  0.5  0.0
      -0.86602540378  0.5  0.0
       0.0            0.0  1.0

# Definition of the atom types
ntypat 2          # There is only one type of atom
znucl  30 8       # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.

# Definition of the atoms
natom 4           # There are two atoms
typat  1 1 2 2       # They both are of type 1, that is, Silicon.
 xred     1/3  2/3  0.0
          2/3  1/3  0.5
          1/3  2/3  0.375
          2/3  1/3  0.875

# Definition of the k-point grid

kptopt 1

chksymbreak 0
istwfk  *1         # This is mandatory in all the GW steps.

# Use only symmorphic operations
symmorphi 0

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 60         # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   20        # Maximal number of SCF cycles
#toldfe  1.0d-6    # Will stop when this tolerance is achieved on total energy
diemac  9.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tgw1_1.out, tolnlines= 70, tolabs=  1.010e-03, tolrel=  3.000e-02
#%% psp_files = 14si.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% author = 
#%% keywords = GW 
#%% description = 
#%%<END TEST_INFO>
