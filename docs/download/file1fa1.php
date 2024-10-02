#AgTaO3
# Crystalline silicon : computation of the total energy
# Convergence with respect to the number of k points.

ndtset 30

#Definition of the k-point grids
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
#nshiftk 4
#shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
        #0.5 0.0 0.0
        #0.0 0.5 0.0
        #0.0 0.0 0.5

#ngkpt1  2 2 2     # Definition of the different grids
#ngkpt2  4 4 4 
#ngkpt3  6 6 6
ngkpt4  6 6 6 
ecut: 10  ecut+ 2
prtden 1
getwfk -1         # This is to speed up the calculation, by restarting
                  # from previous wavefunctions, transferred from the old 
                  # to the new k-points.



#Definition of the unit cell
acell 7.90 7.90 54.25       # This is equivalent to   10.18 10.18 10.18 

brvltt -1
spgroup 166
spgaxor 1
spgorig 1

angdeg 90 90 120

#chkprim 0
#Definition of the atom types
ntypat 2          # There is only one type of atom
znucl 83 34          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 15          # There are two atoms
typat 2 2 2 2 2 2 1 1 1 1 1 1 2 2 2    # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom

0.000000 0.000000 0.209700
0.000000 0.000000 0.790300
0.666667 0.333333 0.543033
0.666667 0.333333 0.123633
0.333333 0.666667 0.876367
0.333333 0.666667 0.456967
0.000000 0.000000 0.400460
0.000000 0.000000 0.599540
0.666667 0.333333 0.733793
0.666667 0.333333 0.932873
0.333333 0.666667 0.067127
0.333333 0.666667 0.266207
0.000000 0.000000 0.000000
0.666667 0.333333 0.333333
0.333333 0.666667 0.666667  


    
#Definition of the planewave basis set
#ecut  8.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 1000          # Maximal number of SCF cycles
toldfe 1.0d-10     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
#diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
