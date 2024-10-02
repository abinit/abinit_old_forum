# VN rocksalt phase
#
# Computation of the band structure at 0 GPa
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 4
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
ngkpt1   3*6
prtden1  1         # Print the density, for use by dataset 2
tolvrs1  1.0d-18
nband1   12
iscf1    5

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -6
nband2   12
ndivk2   15 7 12 15 15 12 # 15, 7, 12, 15, 15 and 12 divisions of 6 segments, delimited
                          # by 7 points
kptbounds2  0.0 0.0  0.0  # Gamma
            0.5 0.0  0.5  # X
            0.5 0.25 0.75 # W
            0.5 0.5  0.5  # L
            0.0 0.0  0.0  # Gamma
            0.5 0.5  1.0  # K
            0.5 0.0  0.5  # X
tolwfr2  1.0d-12

#Occupance options and XC
ixc      1
occopt   1

#Definition of the unit cell
acell    3*7.93767410515
rprim    0.0  0.5  0.5
         0.5  0.0  0.5
         0.5  0.5  0.0

#Definition of the atom types
ntypat   2
znucl    23 7

#Definition of the atoms
natom    2
typat    1 2
xred     0.0  0.0  0.0
         1/2  1/2  1/2

#Definition of the planewave basis set
ecut     40

#Definition of the SCF procedure
nstep    100
diemac   12
