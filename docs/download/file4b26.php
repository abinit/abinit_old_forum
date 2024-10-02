# Crystalline Arsenic : computation of the total energy

#Definition of the unit cell
acell 3*7.9637910317              # This is lattice parameters of As.
rprim  3.75707448460874  -1.90901902297550   0.00000000000000
       3.75707448460874   1.90901902297550   0.00000000000000
       2.78707677894391   0.00000000000000   3.16103864912341

#Definition of the atom types
ntypat 1                               # There is only one type of atom
znucl 33                               # The keyword "znucl" refers to the atomic number of the possible type(s) of atom. 
                                       # The pseudopotential(s) mentioned in the "files" file must correspond to As atom.
   
#Definition of the atoms
natom 2                                # There are two atoms
typat 1 1                              # They both are of As.
xred                                   # This represents the location of the atoms  will follow, one triplet of number for each atom
   0.22660727 0.22660727 0.22660727    # Triplet giving the REDUCED coordinate of atom 1.
   0.77339273 0.77339273 0.77339273    # Triplet giving the REDUCED coordinate of atom 2.

#Definition of the planewave basis set
ndtset 28 ecut: 8.0 ecut+ 1.0          # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
nkpt 2                                 # Number of k points (It does not agree with ngkpt and shiftk)
kptopt 0                               # Option for the automatic generation of k points, taking into account the symmetry.
ngkpt 2 2 2                            # This is a 2*2*2 grid, based on the primitive vectors of the reciprocal space.
nshiftk 1         
shiftk  0.0 0.0 0.5
 
#Definition of the SCF procedure
nstep 10                               # Maximal number of SCF cycles
toldfe 1.0d-8                          # Will stop when, twice in a row, the difference between two consecutive 
                                       # evaluations of total energy differ by less than toldfe (in Hartree)
                                       # This value is way too large for most realistic studies of materials
diemac 100.0                            # Although this is not mandatory, it is worth to precondition the SCF cycle.
                                       # The model dielectric function used as the standard preconditioner
                                       # is described in the "dielng" input variable section.
                                       # Here, we follow the prescription for bulk Arsenic.
