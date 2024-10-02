# Crystalline silicon
# Calculation of the GW corrections
# Dataset 1: ground state calculation and of the kss file for 10 k-points in IBZ
# Dataset 2: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 3: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      3

# Definition of parameters for the calculation of the KSS file
kssform1     3
nbandkss1   -1         # Number of bands in KSS file (-1 means the maximum possible)
nband1      100         # Number of (occ and empty) bands to be computed
#istwfk1     10*1

# Calculation of the screening (epsilon^-1 matrix)
optdriver2  3        # Screening calculation
getkss2     -1       # Obtain KSS file from previous dataset
nband2      100       # Bands to be used in the screening calculation
ecutwfn2    12.0      # Cut-off energy of the planewave set to represent the wavefunctions
ecuteps2    13.0      # Cut-off energy of the planewave set to represent the dielectric matrix
ppmfrq2    16.7 eV  # Imaginary frequency where to calculate the screening
awtr2       1       # Note : the default awtr 1 is better

# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver3  4        # Self-Energy calculation
getkss3     -2       # Obtain KSS file from dataset 1
getscr3     -1       # Obtain SCR file from previous dataset
nband3      100       # Bands to be used in the Self-Energy calculation
ecutwfn3     13.0     # Planewaves to be used to represent the wavefunctions
ecutsigx3     14.0     # Dimension of the G sum in Sigma_x
                     # (the dimension in Sigma_c is controlled by npweps)
nkptgw3      1                # number of k-point where to calculate the GW correction
kptgw3                       # k-points
    0.0625  0.0625  0.0625    

bdgw3       1  20             # calculate GW corrections for bands from 4 to 5
       
          
# Data common to the three different datasets

#Definition of the unit cell
acell 3*5.709

angdeg 3*60  # FCC primitive vectors (to be scaled by acell)


#chkprim 0
#Definition of the atom types
ntypat 2
znucl 30 52

#Definition of the atoms
natom 2
typat 1 2
xred     0.0000000000000000   0.0000000000000000   0.0000000000000000
         0.2500000000000000   0.2500000000000000   0.2500000000000000

#Definition of the planewave basis set
ecut  14.0

#Definition of the k-point grid
ngkpt       8 8 8
gwpara    2
#64 k points
nshiftk     1
shiftk      0.5  0.5  0.5
istwfk    *1



# Use only symmorphic operations
symmorphi 0


# Definition of the SCF procedure
nstep   50        # Maximal number of SCF cycles
toldfe  1.0d-6    # Will stop when this tolerance is achieved on total energy
diemac  12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.


# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
 iscf 5
