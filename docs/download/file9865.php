#struktur silicene
#test DOS menggunakan metode tetrahedron

ndtset 2
#dataset 1 : SCF calculation
ngkpt1 2 2 2
toldfe1 1.0d-10
prtden1 1

#dataset 2 :DOS calculation
iscf2 -3
getden2 1
getwfk2 1
prtdos2 3
dosdeltae 0.00005
ngkpt2 12 12 1
tolwfr2 1.0d-16
shiftk2 0 0 0
natsph2 2
iatsph2 1 2
ratsph2 2 2.75


acell 8.2 8.2 15.0  Angstrom  
rprim   
0.866 0.5 0
0.0 1.0 0.0
0.0 0.0 1.0
nspinor 2
#Definition of the atom types
ntypat 3          # There is only one type of atom
znucl 32 33 01           # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 17          # There are two atoms
typat 2 1 1 1 1 1 1 1 1 3 3 3 3 3 3 3 3       
xred             
1.5/6 3/6 0.15
1/6 1/6 0
2/6 2/6 0
4/6 1/6 0
5/6 2/6 0
1/6 4/6 0
2/6 5/6 0
4/6 4/6 0
5/6 5/6 0
1/6 1/6 0.5/6
2/6 2/6 0.5/6
4/6 1/6 0.5/6
5/6 2/6 0.5/6
1/6 4/6 0.5/6
2/6 5/6 0.5/6
4/6 4/6 0.5/6
5/6 5/6 0.5/6
ecut 30.0
nstep 20
diemac 12.0
optforces 1
chkprim 0
kptopt 1
nshiftk 1
shiftk 0.0 0.0 0.0
ngkpt 12 12 1
nband 40
occopt 3
tsmear 0.006


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   t46.out, tolnlines = 0, tolabs = 0.000e+00, tolrel = 0.000e+00;
#%%   t46o_DS2_DOS, tolnlines = 0, tolabs = 0.000e+00, tolrel = 0.000e+00
#%% psp_files = 14si.pspnc
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% author = 
#%% keywords = 
#%% description = 
#%%   2 Silicon atoms, in a diamond structure.
#%%   Test the computation of the DOS, using the linear tetrahedron method.
#%%<END TEST_INFO>
