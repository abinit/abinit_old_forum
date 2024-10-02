# n6 armchair ribbon
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
ecutwfn3    8
ecuteps3    8
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
kptgw    0.0 0.0 0.0
         0.0 0.125 0.0
         0.0 0.25 0.00
         0.0 0.375 0.0
         0.0 0.5 0.0

bdgw     26 27   26 27   26 27   26 27   26 27

#####################################################

# Definition of the unit cell: fcc
acell  3.0235618000E+01  8.0223409349E+00  1.1338356750E+01   # lengths of the primitive vectors (in Bohr)
rprim  1.0  0.0  0.0 # FCC primitive vectors (to be scaled by acell)
       0.0  1.0  0.0
       0.0  0.0  1.0


# Definition of the atom types
ntypat 2          # Number of TYPEs of atoms
znucl 6 1         # charge -Z- of the NUCLeus (atomic number)


# Definition of the atoms
natom  16              # total Number of ATOMs in the unit cell
typat 12*1 4*2         # TYPE of atoms
xangst                 # Reduced coordinate of atoms, xangst, xangst
  4.4636522460E+00  8.9181450453E-01  0.0000000000E+00
  4.4636462591E+00  2.2788686287E+00  0.0000000000E+00
  5.6889887755E+00  1.7850732304E-01  0.0000000000E+00
  5.6889839615E+00  2.9921744651E+00  0.0000000000E+00
  6.9313104794E+00  8.7510076730E-01  0.0000000000E+00
  6.9313081433E+00  2.2955862524E+00  0.0000000000E+00
  8.1834617217E+00  1.7304014078E-01  0.0000000000E+00
  8.1834609606E+00  2.9976425798E+00  0.0000000000E+00
  9.4263668332E+00  8.6926252206E-01  0.0000000000E+00
  9.4263680722E+00  2.3014252326E+00  0.0000000000E+00
  1.0652740169E+01  1.5652664522E-01  0.0000000000E+00
  1.0652742748E+01  3.0141572946E+00  0.0000000000E+00
  3.4720666714E+00  3.4913881569E-01  0.0000000000E+00
  3.4720455692E+00  2.8215152345E+00  0.0000000000E+00
  1.1642886904E+01  7.0327658527E-01  0.0000000000E+00
  1.1642896106E+01  2.4674210427E+00  0.0000000000E+00

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


