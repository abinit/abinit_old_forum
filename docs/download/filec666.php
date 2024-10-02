# Crystalline aluminum : optimization of the lattice parameter
# at fixed number of k points and broadening.
#Spin
nsppol 1
nspden 2
nspinor 1
spinat 0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 0
       0 0 5
       0 0 -5
       0 0 0
       0 0 0
       0 0 0 
       0 0 0
#Definition of occupation numbers
occopt 1
tsmear 0.05

#Definition of the unit cell
acell 7.24385633  7.24385633  23.7996219           # This is equivalent to   7.60 7.60 7.60
rprim  1.0  0.0  0.0   # FCC primitive vectors (to be scaled by acell)
       0.0  1.0  0.0
       0.0  0.0  1.0
 #rprim  -0.5  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
 #        0.5 -0.5  0.5
 #        0.5  0.5 -0.5
#angdeg  90 90 90
#spgroup 139
#brvltt -1
#chkprim 0
#Optimization of the lattice parameters
optcell 0
ionmov  2
ntime  100
dilatmx 1.05
ecutsm  0.5
iscf 17
#Definition of the atom types
ntypat 3          # There is only one type of atom
znucl 8 23 38          # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Aluminum


#Definition of the atoms
natom 14           # There is only one atom per cell
typat 1 1 1 1 1 1 1 1 2 2 3 3 3 3     # This atom is of type 1, that is, Aluminum
#natrd  4
xred              # This keyword indicate that the location of the atoms
     0.500000000  0.000000000   0.000000000
     0.000000000  0.500000000   0.000000000
     0.000000000  0.500000000   0.500000000
     0.500000000  0.000000000   0.500000000
     0.000000000  0.000000000   0.157810000
     0.000000000  0.000000000   0.842190000
     0.500000000  0.500000000   0.657810000
     0.500000000  0.500000000   0.342190000
     0.000000000  0.000000000   0.000000000
     0.500000000  0.500000000   0.500000000
     0.500000000  0.500000000   0.144860000
     0.500000000  0.500000000   0.855140000
     0.000000000  0.000000000   0.644860000
     0.000000000  0.000000000   0.355140000
#Definition of the planewave basis set
ecut  25.0         # Maximal kinetic energy cut-off, in Hartree
pawecutdg 65.
symafm -1
#nsym 1
#Exchange-correlation functional
ixc 11             # LDA Teter Pade parametrization

#Definition of the k-point grid
kptopt 1
ngkpt 4 4 4       # This is a 2x2x2 FCC grid, based on the primitive vectors
nshiftk 1         # of the reciprocal space. For a FCC real space lattice,
                  # like the present one, it actually corresponds to the
                  # so-called 4x4x4 Monkhorst-Pack grid, if the following shifts
                  # are used :
shiftk 0.5 0.5 0.5

# LDA+U
usepawu   1
lpawu   -1 2 -1
upawu  0.0 4.2 0.0 eV
jpawu  0.0 0.7 0.0 eV
#Definition of the SCF procedure
nstep 1000          # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference
                  # between two consecutive evaluations of total energy
                  # differ by less than toldfe (in Hartree)
                  # This value is way too large for most realistic studies of materials
tolsym 1.0d-8
#I/O parameters
 optforces 2 optstress 1
 prtwf 1 prtden 0 prteig 0
 getwfk -1
 
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test =
#%%   tbase4_1.out, tolnlines=  6, tolabs=  1.2e-07, tolrel=  1.2e-03
#%% psp_files =  13al.981214.fhi
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors =
#%% keywords =
#%% description =
#%%<END TEST_INFO>
