# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 4
ngkpt 12 12 1

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 4
shiftk1  0.5 0.5 0.0  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.0
prtden1  1         # Print the density, for use by dataset 2

# Dataset2: calculation of kss file
# Definition of k-points
kptopt2 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk2 4
shiftk2  0.5 0.5 0.0  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.0
istwfk2  34*1           # Option needed for Gamma
iscf2    -2             # Non self-consistent calculation
getden2  -1             # Read previous density file
nband2   32
nbandkss2 128        # Number of bands to store in KSS file

# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        # Screening calculation
getkss3     -1       # Obtain KSS file from previous dataset
nband3      100      # Bands to be used in the screening calculation
ecutwfn3    3.6      # Planewaves to be used to represent the wavefunctions
ecuteps3    6.0      # Dimension of the screening matrix
ppmfrq3    16.7 eV  # Imaginary frequency where to calculate the screening

# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        # Self-Energy calculation
getkss4     -2       # Obtain KSS file from dataset 1
getscr4     -1       # Obtain SCR file from previous dataset
nband4      128      # Bands to be used in the Self-Energy calculation
ecutwfn4    5.0      # Planewaves to be used to represent the wavefunctions
ecutsigx4    6.0      # Dimension of the G sum in Sigma_x
                     # (the dimension in Sigma_c is controlled by npweps)
nkptgw4      1                # number of k-point where to calculate the GW correction
kptgw4                       # k-points
 0.0 0.0 0.0
bdgw4       4  5

#Definition of the unit cell
acell  2.454545 2.454545 10.0 angstrom
rprim  1.0  0.0 0.0
       0.5  0.86602540378444 0.0
       0.0  0.0  1.0

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl  6          # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.


#Definition of the atoms
natom 2           # There are two atoms
typat 1 1         # They both are of type 1, that is, Silicon.
xangst              # This keyword indicate that the location of the atoms
  0.00000      0.00000      0.00000
  1.22727      0.70848      0.00000

#Definition of the planewave basis set
ecut 12.0         # Maximal kinetic energy cut-off, in Hartree

# Use only symmorphic operations
symmorphi 0

#Definition of the SCF procedure
nstep 10          # Maximal number of SCF cycles
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
tolwfr 1.0d-10
prtvol 3          # print out all k-points



