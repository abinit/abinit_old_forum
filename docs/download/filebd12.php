#  2/11/20  bulkPdlatopt1.in

#Crystalline Pd: computation of the total energy and acell (lattice parameter) for the
# convergence with respect to k points and broadening factor (tsmear) 
chkprim 0
chksymbreak 0

ndtset 25  udtset  5 5
getwfk -1
ngfft  36  36 120

#Definition of occupation numbers
occopt 4

tsmear?1  0.0001
tsmear?2  0.0002
tsmear?3  0.0003
tsmear?4  0.0004
tsmear?5  0.0005

#Definition of the k-point grids

ngkpt1?  2 2 2
ngkpt2?  4 4 4
ngkpt3?  6 6 6
ngkpt4?  8 8 8
ngkpt5? 10 10 10

#Definition of the unit cell
#3.8907   A  interatomic fcc distance
#2.75114  A in-plane distance
#2.246296 A  interlayer distance

acell  2*2.75114  6.73889  angstroms   
angdeg    90  90  120                 
#Optimization of the lattice parameters
optcell 2 
ionmov 2 
ntime 30 
dilatmx 1.15
ecutsm  0.5
tolmxf 1D-7

#Definition of the atom types
ntypat 1          # There is only one type of atom
znucl 46          # The keyword "znucl" refers to the atomic number of the
                  # possible type(s) of atom. The pseudopotential(s)
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Aluminum.

#Definition of the atoms
natom  3          # There is only one atom per cell
typat 3*1           # They both are of type 1, that is, Aluminum.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0     # Triplet giving the REDUCED coordinate of atom 1.
   1/3  2/3  1/3
   2/3  1/3  2/3
#Exchange-correlation functional
ixc 11             # LDA Teter Pade parametrization

#Definition of the planewave basis set
ecut 44.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 240          # Maximal number of SCF cycles
tolvrs 1.0d-12     # Will stop when, twice in a row, the difference
                  # between two consecutive evaluations of total energy
                  # differ by less than toldfe (in Hartree)
                  # This value is way too large for most realistic studies of materials
shiftk 0  0  0

prtebands 0   prtden 0   prteig 0

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test =
#%%   tbase4_3.out, tolnlines=  0, tolabs=  2.116e-07, tolrel=  4.549e-03, fld_options = -easy
#%% psp_files =  13al.981214.fhi
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = Unknown
#%% keywords =
#%% description =
#%%  Crystalline aluminum : computation of the total energy
#%%
#%%  Convergence with respect to k points
#%%<END TEST_INFO>
