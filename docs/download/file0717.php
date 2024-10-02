# Crystalline silicon
# Calculation of the GW correction to the direct band gap in Gamma
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the kss file 
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      4

 ngkpt    12 12 1        # Density of k points used for the automatic tests of the tutorial
#ngkpt    4 4 4        # Density of k points needed for a converged calculation

nshiftk  1
shiftk   0.0 0.0 0.0  # This grid contains the Gamma point, which is the point at which
istwfk  *1            # For the GW computations, do not take advantage of the 
                      # specificities of k points to reduce the number of components of the
                      # wavefunction.

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
#shiftk1  0.0 0.0 0.0  # This grid is the most economical, but does not contain the Gamma point.
#istwfk1 *0            # For the ground state, let the code use the time-reversal symmetry
prtden1  1            # Print out density


# Dataset2: calculation of kss file
# Definition of k-points
iscf2    -2             # Non self-consistent calculation
getden2  -1             # Read previous density file
nband2   9
nbandkss2 100        # Number of bands to store in KSS file

# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        # Screening calculation
getkss3     -1       # Obtain KSS file from previous dataset
nband3      300       # Bands to be used in the screening calculation
ecutwfn3    9.0      # Planewaves to be used to represent the wavefunctions
ecuteps3    7.0      # Dimension of the screening matrix
ppmfrq3    16.7 eV  # Imaginary frequency where to calculate the screening


# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        # Self-Energy calculation
getkss4     -2       # Obtain KSS file from dataset 1
getscr4     -1       # Obtain SCR file from previous dataset
nband4      250      # Bands to be used in the Self-Energy calculation
ecutwfn4    9.0      # Planewaves to be used to represent the wavefunctions
ecutsigx4    8.0      # Dimension of the G sum in Sigma_x
                     # (the dimension in Sigma_c is controlled by npweps)
nkptgw4      1                # number of k-point where to calculate the GW correction
kptgw4                       # k-points
  -1/3 1/3 0.000    # (Gamma)
bdgw4       4  5             # calculate GW corrections for bands from 4 to 5

# Definition of the unit cell: fcc
acell  1.41475 1.41475 20 Angstrom    # This is equivalent to   10.217 10.217 10.217
rprim  1.5 -0.866 0.0 # FCC primitive vectors (to be scaled by acell)
       1.5 0.866 0.0
       0.0 0.0  1.0

# Definition of the atom types
ntypat  1         # There is only one type of atom
znucl 6          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         
# Definition of the atoms
natom 2           # There are two atoms
typat  1 1        # They both are of type 1, that is, Silicon.
xangst  0.0 0.0 0.0
       1.41475 0.0 0.0

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 12.0          # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   100        # Maximal number of SCF cycles
diemac  12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
tolwfr  1.0d-10   

# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5
gwpara 2
