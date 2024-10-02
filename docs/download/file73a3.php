# Crystalline silicon 
#
# Density of states while DEN calculation

ndtset 2 
jdtset 1 2

# DEN CALCULATION + DOS 
ecut 14.0         # Maximal kinetic energy cut-off, in Hartree
toldfe 10d-6
prtdos  2         # print dos and its projection
nstep 10          # Maximal number of SCF cycles
diemac 12.0       # Although this is not mandatory, it is worth to
nband  8

# EXCHANGE POTENTIALS 
ixc2 -428 
ixc1    1

#Definition of k grid
kptopt 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
ngkpt  2 2 2       #To prtdosm is better do not use shiftk grid
nshiftk 4 
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5


#Definition of the unit cell
acell 3*10.18         # This is equivalent to   10.216 10.216 10.216 
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5   
       0.5  0.5  0.0

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 14          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 1 1         # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0  # Triplet giving the REDUCED coordinate of atom 1.
   1/4  1/4  1/4  # Triplet giving the REDUCED coordinate of atom 2.

#No print
prtden 1
prtwf  0
prteig 0
