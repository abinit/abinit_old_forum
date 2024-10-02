
ndtset 2
jdtset 1 2



####################################################################
### KSS and GS : 

nbandkss1 10
npwkss1   80
nband1    10
prtwf1    0
prtden1   0
prteig1   0
nstep1    20
toldfe1   1.0d-12

ecut 8.0        
diemac  12.0

####################################################################
### SCR calculation :

optdriver2 3
getkss2    1
nband2     8
npwwfn2    75
npweps2    9
ppmfrq2    16.7 eV
inclvkb2   0
awtr2      0
symchi2    0



######################################################################
#####   ATOMIC POSITIONS AND CELL PARAMETERS
acell  3*10.217        # This is equivalent to   10.217 10.217 10.217
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5
       0.5  0.5  0.0

# Definition of the atom types
ntypat  1         # There is only one type of atom
znucl 14          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.

# Definition of the atoms
natom 2           # There are two atoms
typat  1 1        # They both are of type 1, that is, Silicon.
xred              # Reduced coordinate of atoms
      0.0  0.0  0.0
      0.25 0.25 0.25

########################################################################
### K POINT GRID AND SYMMETRIES : 

symmorphi 0
prtvol 3

kptopt 1               # using spatial symmetries.
ngkpt 3 3 1
istwfk *1
nshiftk 1
shiftk 0.0 0.0 0.0
chksymbreak 0
