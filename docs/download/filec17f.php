# n5 armchair ribbon
# Calculation of the GW corrections
# Dataset 1: ground state calculation
# Dataset 2: calculation of the kss file for only Gamma point
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: Calculation of the Self-Energy matrix elements (GW corrections)

ndtset 4

# Dataset 1 : usual self-consistent calculation for ground state charge density
# Definition of the k-point grid
kptopt1   1
ngkpt1    1 32 1
nshiftk1  1
shiftk1   0.0 0.0 0.0

# Definition of the SCF procedure
toldfe1  1.0d-6    # Will stop when this tolerance is achieved on total energy
prtden1  1         # Print out density
nband1   70

######################################################
# Dataset 2: calculation of kss file
# Definition of the k-point grid
kptopt2   1
ngkpt2    1 32 1
nshiftk2  1
shiftk2   0.0 0.0 0.0    # This grid contains the Gamma point
istwfk2   17*1

# Definition of the SCF procedure
iscf2     -2             # Non self-consistent calculation
getden2   -1             # Read previous density file
tolwfr2   1.0d-10        # Still get it converged
nband2    128

# Definition of parameters for the calculation of the kss file
nbandkss2 256        # Number of bands in KSS file (the maximum possible)

#####################################################
# Dataset 3: Calculation of the screening (epsilon^-1 matrix)
optdriver3  3
getkss3     -1
nband3      256
ecutwfn3    8.0
ecuteps3    8.0
ppmfrq3     16.7 eV

#####################################################
# Dataset 4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4    4
getkss4      -2
getscr4      -1
nband4        256      # Optimum value from convergence study
ecutwfn4      7        # Optimum value from convergence study
ecutsigx4     7        # Optimum value from convergence study

nkptgw   5
kptgw      0.0000  0.3750  0.0000
           0.0000  0.4063  0.0000
           0.0000  0.4375  0.0000
           0.0000  0.4688  0.0000
           0.0000  0.5000  0.0000

bdgw    20 21    20 21    20 21     20 21     20 21      

#####################################################

# Definition of the unit cell: fcc
acell  16.60553 4.24423 6.0 Angstrom
rprim  1.0  0.0  0.0 # FCC primitive vectors (to be scaled by acell)
       0.0  1.0  0.0
       0.0  0.0  1.0


# Definition of the atom types
ntypat 2          # Number of TYPEs of atoms
znucl 6 1         # charge -Z- of the NUCLeus (atomic number)


# Definition of the atoms
natom  14              # total Number of ATOMs in the unit cell
typat 10*1 4*2         # TYPE of atoms
xangst             1.72520127    3.32947924    0.00000000
                   1.72520127    0.50000000    0.00000000
                   2.95040254    1.20736443    0.00000000
                   5.40080507    1.20736443    0.00000000
                   2.95040254    2.62211481    0.00000000
                   5.40080507    2.62211481    0.00000000
                   4.17560381    3.32947924    0.00000000
                   6.62600634    3.32947924    0.00000000
                   4.17560381    0.50000000    0.00000000
                   6.62600634    0.50000000    0.00000000
                   7.55265161    2.79447592    0.00000000
                   7.55265161    1.03500332    0.00000000
                   0.79855600    1.03500332    0.00000000
                   0.79855600    2.79447592    0.00000000

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 12.0         # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep  200        # Maximal number of SCF cycles
diemac  4.0       # model DIElectric MACroscopic constant
                  # precondition the SCF cycle.metal10d6,si 12,wide gap,4,mol 2

# Use only symmorphic operations
symmorphi 0        # must 0 for GW, default 1

timopt -1          # TIMing OPTion, -1 a full analysis of timings

gwpara 2

