# Graphene hexagonal unit cell
#
# In this input file, the location of the information on this or that line
# is not important : a keyword is located by the parser, and the related
# information should follow. 
# The "#" symbol indicates the beginning of a comment : the remaining
# of the line will be skipped.

ndtset 2

#Dataset 1 : the self consistent calculation
#Definition of the k-point grid
kptopt1 1          # Enter the k points manually 
ngkpt1 36 36 1
prtden1 1


#Dataset 2 : the band structure
iscf2 -2
getden2 -1
kptopt2 -2
nband2 8
ndivk2 30 30
kptbounds2 0.0 0.0 0.0
           0.0 0.50 0.0
           0.333333 0.333333 0.0

tolwfr2 1.0d-12
enunit2 1


#Definition of the unit cell
acell 4.6308134782 4.6308134782 4.6308134782 # The keyword "acell" refers to the
                  # lengths of the primitive vectors (in Bohr)
rprim 1.0 0 0
      -0.5 0.866025 0.0
       0.0 0.0 20.00   # This line, defining orthogonal primitive vectors,
                           # is commented, because it is precisely the default value of rprim

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 6           # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Hydrogen.
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 1 1         # They both are of type 1, that is, Hydrogen
xangst            # This keyword indicates that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0 0.0 0.0    # Triplet giving the cartesian coordinates of atom 1, in Bohr
   0.0 1.4150 0.0    # Triplet giving the cartesian coordinates of atom 2, in Bohr

#Definition of the planewave basis set
ecut 120.0         # Maximal plane-wave kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 100          # Maximal number of SCF cycles
toldfe 1.0d-12     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
