# =======================================
# Input for PAW1 tutorial
#  CdSe paw with GGA by B4-wurtzite structure
# =======================================


#Datasets: etotal vs acell
ndtset 15   
acell: 3*3.4 angstrom  
acell+ 3*0.27 angstrom

#Cell and atoms definition
 acell 3*4.2 angstrom
 rprim 1/2 -0.866  0
       1/2  0.866  0
       0      0   1.0
 ntypat 2  natom 2  typat 1 2
 xred 0.0   0.0   0.0
      1/2 -0,2886 1/2
       0     0    0.375
      1/2 -0.2886 0.875

 znucl 48 34  nband 13

#Basis definitions
 ecut 35
 ecutsm 0.5
 pawecutdg 50.

#SCF cycle parameters
 tolvrs 1.0d-10
 nstep 20

#K-points and sym
 nsym 0       
 occopt 1
 ngkpt 10 10 10
 nshiftk 4
 shiftk 0.5 0.5 0.5
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5

#I/O parameters
 optforces 2 optstress 1
 prtwf 1 prtden 0  prteig 0
 getwfk -1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tpaw1_2.out, tolnlines=  2, tolabs=  1.001e-08, tolrel=  4.000e-05
#%% psp_files =  6c.pspnc
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = 
#%% keywords = PAW
#%% description = 
#%%<END TEST_INFO>
