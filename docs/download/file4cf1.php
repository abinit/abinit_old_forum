# H2-molecule in a box
# Calculation of the GW corrections - convergence test

# double convergence loop
ndtset      10
udtset      5  2


# Calculation of the screening (epsilon^-1 matrix)
optdriver?1  3
ecuteps?1    6.0
ecutwfn?1    6.0
awtr?1       1
gw_EET?1     2

# Convergence with respect to the number of bands to calculate epsilon^-1
nband11  2
nband21  3
nband31  4
nband41  5
nband51  6


# Calculation of the Self-Energy matrix elements (GW corrections)
optdriver?2   4
getscr?2     -1
ecutwfn?2     6.0
ecutsigx      6.0
nband?2       4
gw_EET?2      2

# GW calculation general parameters
nkptgw     1
kptgw      0.000    0.000    0.000
bdgw       1  2
ppmfrq    13.6 eV
getkss     1
icutcoul   0       # => sphere (molecules but also 3D-crystals)
rcut       5.0     # radius of sphere for Coulomb potential cutoff


# Definition of the unit cell
acell  12.0 12.0 12.0  # cubic cell
rprim  1.0  0.0  0.0   
       0.0  1.0  0.0
       0.0  0.0  1.0

# Definition of the atom types
ntypat  1        
znucl   1        
                 
# Definition of the atoms
natom  2          # There are two atoms
typat  1 1        # They both are of type 1, that is, Silicon.
xcart             # Cartesian coordinates of atoms
     -0.75  0.0  0.0
     +0.75  0.0  0.0

# Definition of the planewave basis set 
ecut 10.0         # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   10        
diemac  2.0       

# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5

# BZ sampling for GW.
ngkpt   1 1 1
nshiftk 1
shiftk  0.0 0.0 0.0
istwfk  *1            
