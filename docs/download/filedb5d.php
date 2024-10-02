# Graphene hexagonal unit cell
ndtset      3

# definition of the SCF ground state calculation
#Definition of the k-point grid
kptopt1 1          # Enter the k points manually 
ngkpt1 36 36 1
nshiftk1 1
shiftk1 0.0 0.0 0.0
toldfe1 1.0d-12 Ry
prtden1 1

#DataSet 2
kptopt2 0
nkpt2 1
kpt2 0.0 0.0 0.0 # doing calculation on GAMMA point only (for convergence)
istwfk2 1
#Definition of the SCF procedure
iscf 2  #NSCF calc
getden2 -1 # read previous file for density
tolwfr2 1.0d-10

# Definition of parameters for the calculation of the KSS file
nbandkss2   -1         # Number of bands in KSS file (-1 means the maximum possible)
nband2      12         # Number of (occ and empty) bands to be computed
#istwfk1     10*1

# Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        # Screening calculation
getkss3     -1       # Obtain KSS file from previous dataset
nband3      25       # Bands to be used in the screening calculation
ecutwfn3    5 Ry      # Cut-off energy of the planewave set to represent the wavefunctions
ecuteps3    10 Ry      # Cut-off energy of the planewave set to represent the dielectric matrix
ppmfrq3    15.7 eV  # Imaginary frequency where to calculate the screening
awtr3       1       # Note : the default awtr 1 is better


xred   -2.1769798868E-02  6.1754830599E-04  0.0000000000E+00
     3.1156579887E-01  6.6728245169E-01  0.0000000000E+00
acell 4.6303388276  4.6303388276  27.893607396 Bohr

angdeg 90 90 120
#chksymbreak 0

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 6           # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Hydrogen.
                         

#Definition of the atoms
natom 2           # There are two atoms
typat 2*1         # They both are of type 1, that is, Hydrogen

#Definition of the planewave basis set
ecut 60 Ry
tsmear 0.01 eV
occopt 7
enunit 1
iprcel 45

#Definition of the SCF procedure
nstep 1000           # Maximal number of SCF cycles


istwfk *1
symmorphi 0
