#MoS2 unit cell
# Generation of the KSS file

# Number of datasets: 2-step calculation
ndtset 2

# Definition of the unit cell: fcc
#acell 3*7.6079786             # Lattice constants (in atomic units)
acell 1*1.000000             # Lattice constants (in atomic units)

rprim 2.985767062 5.171500251  0.000       # FCC primitive vectors
      5.971534124 0.000000000  0.000              # (to be scaled by acell)
      0.000000000 0.000000000 40.000
      
# Definition of the system
znucl  16 42                    # Z number of each species
ntypat 2                      # Number of species
natom  3                      # Number of atoms
typat  2*1 2                    # Type of each atom (index in znucl)
xangst -0.00000    1.82443    8.43053 # cart ang coordinates of atom 1
       -0.00000    1.82443   11.56947  # cart ang coordinates of atom 2
       -1.58000    0.91221   10.00000  # cart ang coordinates of atom 3

# Definition of the plane-wave basis set
ecut 40.0                     # Kinetic energy cut-off, in Hartree
#nspinor 2
#so_psp 2

# Definition of the SCF procedure
nstep 3000                    # Maximum number of SCF cycles

# Step 1: determine the ground state
#iscf1    3                    # Algorithm: Anderson mixing of the potential
#nband1  40                    # Number of bands
tolwfr1  1.0d-16              # Tolerance on wavefunctions to stop SCF cycles
kptopt1  1                    # Automatic generation of k-points
ngkpt1   15 15 1                # Number of grid points for k-point generation
nspinor1 2
so_psp1 2
nshiftk1 1
shiftk1  0.0 0.0 0.0
prtden1  1                    # Store electronic density in a file

# Step 2: obtain the Kohn-Sham band structure
getden2    1                  # Read electronic density from step 1
iscf2     -2                  # Non self-consistent calculation
tolwfr2    1.0d-16            # Tolerance on wavefunctions
nband2    72                  # Number of bands for the system
nbandkss2 72                  # Number of bands to output to the KSS file
kssform2   3                  # Format of the KSS file
kptopt2    1                  # Automatic generation of k-points
ngkpt2     15 15 1              # Number of grid points for k-point generation
nspinor2 2
so_psp2 2
nshiftk2 1
shiftk2  0.0 0.0 0.0
symmorphi2 0                  # Disallow non-symmorphic operations (required)
#istwfk2    *1               # Wavefunction storage mode for each k-point
