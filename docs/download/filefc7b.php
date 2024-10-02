# Crystalline silicon : computation of the total energy
#

#Definition of the unit cell
acell 6.52 6.52 9.826
angdeg 90.0 90.0 120.0
spgroup 186

#Definition of the atom types
ntypat 2          
znucl 8.000 30.000

#Definition of the atoms
natom 4           # There are two atoms
typat 1 1 2 2
xred 0.6667 0.3333 0.5000
0.3333 0.6667 0.0000
0.6667 0.3333 0.8750
0.3333 0.6667 0.3750

#Definition of the planewave basis set
ecut  290.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt 6 6 6       # This is a 2x2x2 grid based on the primitive vectors
nshiftk 1         # of the reciprocal space (that form a BCC lattice !),
                  # repeated four times, with different shifts :
shiftk 0.0 0.0 0.5
                  # In cartesian coordinates, this grid is simple cubic, and
                  # actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid

#Definition of the SCF procedure
nstep 10          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
