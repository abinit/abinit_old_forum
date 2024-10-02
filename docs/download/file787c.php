# V3Sirelaxation


#Definition of the k-point grids
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry

occopt 4
tsmear 0.003

nshiftk 1
shiftk 0.5 0.5 0.5

ngkpt 8 8 8

optcell 1
ionmov 2
ntime 500
dilatmx 1.05
ecutsm 0.5

#Definition of the unit cell
acell 8.7132682681E+00  8.7132682681E+00  8.7132682681E+00   
rprim  1 0 0
       0 1 0
       0 0 1

#Definition of the atom types
ntypat 2          
znucl 23 14          
                         

#Definition of the atoms
natom 8          
typat 1 1 1 1 1 1 2 2        
xred     -1.0062664890E-28  5.0000000000E-01  2.5000000000E-01
                       7.2825031294E-28  5.0000000000E-01  7.5000000000E-01
                       2.5000000000E-01  2.4885827911E-28  5.0000000000E-01
                       5.0000000000E-01  7.5000000000E-01  6.6182004744E-28
                       5.0000000000E-01  2.5000000000E-01 -3.7522468471E-28
                       7.5000000000E-01  1.1192124205E-27  5.0000000000E-01
                       3.1524668070E-28  6.7176529233E-28  1.1252148927E-28
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01

#Definition of the planewave basis set
ecut 13
pawecutdg 26
pawovlp -1

#Definition of the SCF procedure
nstep 500          # Maximal number of SCF cycles
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
