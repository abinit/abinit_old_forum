# DyMnO3 : computation of the optimal lattice parameter
# Convergence with respect to the number of k points.



#Optimization of the lattice parameters
optcell 1
ionmov  3
ntime  20
dilatmx 1.1
ecutsm  0.5

#Definition of the k-point grids
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry


ngkpt  2 2 2  


getwfk -1         # This is to speed up the calculation, by restarting
                  # from previous wavefunctions, transferred from the old 
                  # to the new k-points.



#Definition of the unit cell
acell   10.376 11.093 14.036       
angdeg  90.0   90.0  90.0 

#Definition of the atom types
ntypat 3         # There is only one type of atom
znucl  66 25 8        # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom   20
typat   4*1 4*2 12*3 
xred     
 
      0.4178100000E+00    0.7500000000E+00    0.1701000000E+00
      0.8219000000E-01    0.2500000000E+00    0.6701000000E+00
      0.5821900000E+00    0.2500000000E+00    0.8299000000E+00
      0.9178100000E+00    0.7500000000E+00    0.3299000000E+00
      0.0000000000E+00    0.5000000000E+00    0.0000000000E+00
      0.5000000000E+00    0.5000000000E+00    0.5000000000E+00
      0.0000000000E+00    0.0000000000E+00    0.0000000000E+00
      0.5000000000E+00    0.5551115123E-16    0.5000000000E+00
      0.8284100000E+00    0.4469700000E+00    0.7030900000E+00
      0.9642860000E+00    0.2500000000E+00    0.1083150000E+00
      0.6715900000E+00    0.5530300000E+00    0.2030900000E+00
      0.5357140000E+00    0.7500000000E+00    0.6083150000E+00
      0.1715900000E+00    0.9469700000E+00    0.2969100000E+00
      0.3571400000E-01    0.7500000000E+00    0.8916850000E+00
      0.3284100000E+00    0.5303000000E-01    0.7969100000E+00
      0.4642860000E+00    0.2500000000E+00    0.3916850000E+00
      0.1715900000E+00    0.5530300000E+00    0.2969100000E+00
      0.3284100000E+00    0.4469700000E+00    0.7969100000E+00
      0.8284100000E+00    0.5303000000E-01    0.7030900000E+00
      0.6715900000E+00    0.9469700000E+00    0.2030900000E+00

                  

#Definition of the planewave basis set
ecut 62.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 2000          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
#diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
