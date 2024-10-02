toldfe     1.0d-12
nband      100    

# number of self-consistent field steps
nstep        2000
#diemac       4.0

# energy cutoff [Ha]:
ecut 100

#Definition of the k-point grid
occopt 4       
tsmear 0.01
iscf 5

kptopt 1           # Option for the automatic generation of k points, taking
                   # into account the symmetry
ngkpt   6 6 6
nshiftk  1
shiftk  0.0 0.0 0.0
                      
istwfk  *1
#chkprim 0

#spinat 0.0 0.0  1.0
#       0.0 0.0  0.0
spinat 0 0 1
       0 0 -1
       0 0 0
       0 0 0

nsppol   1
nspden 2
nspinor 1

# Definition of the atom types
znucl  28  8
ntypat 2


# Definition of the atoms
#natom 8
#natrd 2
#spgroup 225
#natom 2
#typat 1 2
natom 4
typat 1 1 2 2
#acell  4.4081 4.4081 4.4081  Angstrom
#angdeg 90 90 90

#xred 0.0000 0.0000 0.0000
#     0.5000 0.5000 0.5000
xred 0 0 0
    0.0 0.0 0.5
    0.5 0.5 0.25
    0.5 0.5 0.75
acell   3*7.92
rprim 0.0 1/2 1/2
      1/2 0.0 1/2
      1.0 1.0 0.0


prtdos 1
