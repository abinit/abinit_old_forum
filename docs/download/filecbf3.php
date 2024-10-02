# Crystalline ZnTe : computation of the total energy
#
#Definition of the unit cell
acell 3*11.529

rprim  1.0  0.0  0.0   # FCC primitive vectors (to be scaled by acell)
       0.0  1.0  0.0
       0.0  0.0  1.0
chkprim 0
#Definition of the atom types
ntypat 2
znucl 30 52

#Definition of the atoms
natom 8
typat 1 1 1 1 2 2 2 2
xred  0.0000000000000000   0.0000000000000000   0.0000000000000000
      0.0000000000000000   0.5000000000000000   0.5000000000000000
      0.5000000000000000   0.0000000000000000   0.5000000000000000
      0.5000000000000000   0.5000000000000000   0.0000000000000000
      0.2500000000000000   0.2500000000000000   0.2500000000000000
     -0.2500000000000000  -0.2500000000000000   0.2500000000000000
     -0.2500000000000000   0.2500000000000000  -0.2500000000000000
      0.2500000000000000  -0.2500000000000000  -0.2500000000000000
optcell 2
ionmov 2
ntime 20
#Definition of the planewave basis set
ecut  10.0
ecutsm 0.5
dilatmx 1.205258E+00
#Definition of the k-point grid
ngkpt       4 4 4
nshiftk     1
shiftk      0.5  0.5  0.5

#Definition of the SCF procedure
nstep 50          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
