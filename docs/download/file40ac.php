# Crystalline CNT22

acell 6.1514 6.1514 2.4678
                          
angdeg 90 90 120

# Definition of the atom types
ntypat 1         # There is only one type of atom
znucl  6

# Definition of the atoms
natom 8             # There are two atoms
typat 8*1           # They both are of type 1
xred                # The location of the atoms will follow
0.7279   0.5000   0.0000
0.7259   0.7300   0.0000
0.6316   0.7632   0.5000
0.3649   0.6280   0.5000
0.2721   0.5000   0.0000
0.2741   0.2700   0.0000
0.3684   0.2368   0.5000
0.6351   0.3720   0.5000
# Definition of the k-point grids
kptopt 1          # Option for the automatic generation of k points,
                  # taking into account the symmetry

ngkpt  4 4 4         # parameters that define the MP grid

# Definition of the planewave basis set 
ecut 300        # Maximal kinetic energy cut-off, in Hartree

ixc  2           # XC potential Perdew-Zunger

# Definition of the SCF procedure
nstep 300          # Maximal number of SCF cycles
toldfe  1.0d-16    # Will stop when this tolerance is achieved on total energy
#diemac 12.0       # Although this is not mandatory, it is worth to

# Optimization of the lattice parameters
optcell 1
ionmov  3
ntime  10
dilatmx 1.05
ecutsm  0.5
