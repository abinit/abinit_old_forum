# n5 armchair ribbon
# Calculation of the GW corrections
# Dataset 1: ground state calculation
# Dataset 2: calculation of the kss file for only Gamma point
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: Calculation of the Self-Energy matrix elements (GW corrections)

ndtset 2
jdtset  3 4

#####################################################
# Dataset 3: Calculation of the screening (epsilon^-1 matrix)
optdriver3  3
getkss3     2
nband3      256
ecutwfn3    8.0
ecuteps3    8.0
ppmfrq3     16.7 eV

#####################################################
# Dataset 4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4    4
getkss4      2
getscr4      -1
nband4        256      # Optimum value from convergence study
ecutwfn4      7        # Optimum value from convergence study
ecutsigx4     7        # Optimum value from convergence study

nkptgw   6
kptgw                0.00000000E+00  0.00000000E+00  0.00000000E+00
                     0.00000000E+00  3.12500000E-02  0.00000000E+00
                     0.00000000E+00  6.25000000E-02  0.00000000E+00
                     0.00000000E+00  9.37500000E-02  0.00000000E+00
                     0.00000000E+00  1.25000000E-01  0.00000000E+00
                     0.00000000E+00  1.56250000E-01  0.00000000E+00

bdgw   20 21   20 21   20 21   20 21   20 21   20 21 

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

