#
# Lead crystal
#

# Simulation parameters
ecut  30.0
acell 10.0 10.0 10.0
rprim
    0.0  0.5  0.5
    0.5  0.0  0.5
    0.5  0.5  0.0

# K-points
ngkpt 8 8 8
nshiftk 4
shiftk
   0.5 0.5 0.5
   0.5 0.0 0.0
   0.0 0.5 0.0
   0.0 0.0 0.5
occopt 7
tsmear 0.01

# System description
ntypat 1
znucl  82
natom  1
typat  1 
xred
  0.000   0.000   0.000
nband  4

# SCF procedure
nstep   3
tolvrs  1.0d-10
# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = tparal_1.out, tolnlines=0, tolabs=0.0, tolrel=0.0
#%% psp_files= HGH/82pb.4.hgh
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% keywords = NC
#%% description = 
#%%<END TEST_INFO>
