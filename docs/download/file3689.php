
# Calculation of the GW corrections
# Dataset 1: ground state calculation to get the density 
# Dataset 2: NSCF run to produce the WFK file for 10 k-points in IBZ
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      4

############
# Dataset 1
############
# SCF-GS run 
nband1  50
tolvrs1 1.0e-10

############
# Dataset 2
############
# Definition of parameters for the calculation of the WFK file
nband2      201       # Number of (occ and empty) bands to be computed
nbdbuf2     25
iscf2       -2
getden2     -1
tolwfr2  1.0d-18     # Will stop when this tolerance is achieved 

############
# Dataset 3
############
# Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        # Screening calculation
getwfk3     -1       # Obtain WFK file from previous dataset
nband3      70       # Bands to be used in the screening calculation
ecuteps3    25      # Cut-off energy of the planewave set to represent the dielectric matrix. 
                     # It is important to adjust this parameter.
ppmfrq3    16.7 eV   # Imaginary frequency where to calculate the screening

############
# Dataset 4
############
# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        # Self-Energy calculation
getwfk4     -2       # Obtain WFK file from dataset 1
getscr4     -1       # Obtain SCR file from previous dataset
nband4      90       # Bands to be used in the Self-Energy calculation
ecutsigx4   25       # Dimension of the G sum in Sigma_x. 
                     # (the dimension in Sigma_c is controlled by ecuteps)
nkptgw4 1            # number of k-point where to calculate the GW correction
kptgw4               # k-points in reduced coordinates
        0.5  0.5  0.0
  
bdgw4       26 27    # calculate GW corrections for bands from 26 to 27



# Data common to the three different datasets

# Definition of the unit cell: fcc
acell 5.42649 5.42649 5.42649 Angstrom        # This is equivalent to   10.217 10.217 10.217
rprim  1 0 0                                  # FCC primitive vectors (to be scaled by acell)
       0 1 0
       0 0 1
       

# Definition of the atom types
ntypat 3         # There is only one type of atom
znucl 53 3 82    # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         
# Definition of the atoms
natom 5           # There are two atoms
typat  1 2 3 3 3  # They both are of type 1, that is, Silicon.

xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
        5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
        5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
        0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
        5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
      
# Definition of the k-point grid
ngkpt 7 7 7     
nshiftk 4
shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5

istwfk  *1         # This is mandatory in all the GW steps.

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 35.0          # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep 300        # Maximal number of SCF cycles
#toldfe 1.0d-6    # Will stop when this tolerance is achieved on total energy
diemac 12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
zcut 0.1 ev
prtcif 1
prtgeo 1

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tgw1_1.out, tolnlines= 70, tolabs=  0.02, tolrel=  3.000e-02
#%% psp_files = 14si.pspnc
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = Unknown
#%% keywords = GW 
#%% description = 
#%% Crystalline silicon
#%% Calculation of the GW corrections
#%% Dataset 1: ground state calculation and calculation of the WFK file for 10 k-points in IBZ
#%% Dataset 2: calculation of the screening (epsilon^-1 matrix for W)
#%% Dataset 3: calculation of the Self-Energy matrix elements (GW corrections)
#%%<END TEST_INFO>
