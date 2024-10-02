# Crystalline silicon
# Calculation of the GW corrections
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the kss file for only Gamma point
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)

ndtset      3

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
kptopt1  1            # Option for the automatic generation of k points,
#nkpt1    10
ngkpt1   4 4 4  
nshiftk1 1 
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
istwfk1  *1            
# Definition of the SCF procedure
toldfe1  1.0d-6    # Will stop when this tolerance is achieved on total energy
prtden1  1         # Print out density

# Dataset2: calculation of kss file
# Definition of k-points
kptopt2  0              # K-points will be provided
nkpt2    1              # Take only 1 k-point:
kpt2     0.0  0.0  0.0  # the Gamma point
istwfk2  1              # Option needed for special k-points like Gamma
# Definition of the SCF procedure
iscf2    -2             # Non self-consistent calculation
getden2  -1             # Read previous density file
tolwfr2  1.0d-10        # Still get it converged
nband2   9

# Definition of parameters for the calculation of the kss file
nbandkss2 -1        # Number of bands in KSS file (the maximum possible)

# Dataset3: Calculation of the screening (epsilon^-1 matrix)
kptopt3   0
optdriver3  3
getkss3     -1
nband3      25
ecutwfn3    5.6
ecuteps3    6.0
ppmfrq3    16.7 eV
awtr3       0       # Note : the default awtr 1 is better

#Definition of the unit cell
acell 8.668 8.668 5.582

rprim  1.0  0.0  0.0   # FCC primitive vectors (to be scaled by acell)
       0.0  1.0  0.0
       0.0  0.0  1.0

#Definition of the atom types
ntypat 2
znucl 8 22

#Definition of the atoms
natom 6
typat 1 1 1 1 2 2
xred  0.3047997387897260   0.3047997387897260   0.0000000000000000
     -0.3047997387897260  -0.3047997387897260   0.0000000000000000
      0.1952002612102740   0.8047997387897259   0.5000000000000000
      0.8047997387897259   0.1952002612102740   0.5000000000000000
      0.0000000000000000   0.0000000000000000   0.0000000000000000
      0.5000000000000000   0.5000000000000000   0.5000000000000000

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 8.0          # Maximal kinetic energy cut-off, in Hartree

# Use only symmorphic operations
#symmorphi 0
istwfk    1


# Definition of the SCF procedure
nstep   50        # Maximal number of SCF cycles
diemac  12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.

timopt -1
# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
iscf 5
