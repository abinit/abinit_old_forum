=======================================

# Input for PAW1 tutorial
#  CdZnTe paw with GGA  x=0.5 

=======================================
#chkprim 0
#Datasets: convergence on ecut and pawecutdg and ngkpt
ndtset 13   
ecut: 10. ecut+  2.
pawecutdg: 12. 
pawecutdg+ 3.
ngkpt: 2 2 2
ngkpt+ 1 1 1

#Output of the total DOS
#prtdos 2


#Datasets: etotal vs acell
#ndtset 15   
#acell: 3*5.35 angstrom  
#acell+ 3*0.2 angstrom

#Cell and atoms definition
 acell 3*6.4 angstrom
 rprim  1/2 1/2 0
       -1/2 1/2 0
         0   0  1
       

 ntypat 3 
 natom 4  typat 1  2   3 3 
 xred  0.0 0.0 0.0
       0.5 0.5 0.5
       0.0 1/2 1/4
       1/2 1   3/4

 znucl 48 30 52  nband 18

#Basis definitions
 ecut 10
 ecutsm 1.5
 pawecutdg 50.

#SCF cycle parameters
 tolvrs 1.0d-10
 nstep 200

#K-points and sym
 nsym 0       
 occopt 8
 ngkpt 2 2 2
 nshiftk 1
 shiftk 0.5 0.5 0.5
        
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
