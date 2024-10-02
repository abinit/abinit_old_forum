#NaSn3


#Definition of the k-point grids
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry

#occopt 4
#tsmear 0.001

nshiftk 1
shiftk 0.5 0.5 0.5

ngkpt 4 4 4



optcell 1
ionmov 2
ntime 50
dilatmx 1.01
ecutsm 0.5


#Definition of the unit cell
acell 3*8.961         
rprim  1 0 0
       0 1 0
       0 0 1

#Definition of the atom types
ntypat 2          # There is only one type of atom
znucl 11 50          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 4           # There are two atoms
typat 1 2 2 2        # They both are of type 1, that is, Silicon.
xred              # This keyword indicate that the location of the atoms
                  # will follow, one triplet of number for each atom
   0.0  0.0  0.0  # Triplet giving the REDUCED coordinate of atom 1.
   0 0.5 0.5  # Triplet giving the REDUCED coordinate of atom 2.
   0.5 0.5 0
   0.5 0 0.5

#Definition of the planewave basis set
ecut  30         # Maximal kinetic energy cut-off, in Hartree
pawecutdg 60
pawovlp -1

#Definition of the SCF procedure
nstep 50          # Maximal number of SCF cycles
toldff 5.0d-6    # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials



## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tbase3_3.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% psp_files =  14si.pspnc
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = Unknown
#%% keywords = 
#%% description = 
#%%   Crystalline silicon : computation of the total energy
#%%   Convergence with respect to the number of k points.
#%%<END TEST_INFO>
