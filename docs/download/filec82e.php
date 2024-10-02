# BCT C8 input file generated from modifying ABINIT White Tin input file
# white tin (body centered tetragonal), optcell 2 run to make
# sure that symmetry is not broken as cell is deformed

ndtset 2

strprecon1 1.0 # test also two values of strprecon
strprecon2 0.5

ntime 30
nstep 100
ionmov 2
optcell 2
ecutsm 0.5
diemac   6.0
nband   18
dilatmx 1.05
tolmxf 2.0D-7
tolvrs 1.0D-18

ecut 30
#pawecutdg 12

#prtwf 0
#prtden 0
#prteig 0

# occopt 7
# tsmear 0.001

acell 8.2771111111 8.2771111111 4.7411111111
spgroup 139
brvltt -1

#kptopt 1
#kptrlatt 0   3   3
#        -3   0  -3
#        -4  -4   0

znucl 6
ntypat 1
typat 1 1 1 1

natom 4
natrd 4
xred
           0.18011111111111  0.18011111111111  0.00000000000000 # C 
          -0.18011111111111  0.18011111111111  0.00000000000000 # C 
          -0.18011111111111 -0.18011111111111  0.00000000000000 # C 
           0.18011111111111 -0.18011111111111  0.00000000000000 # C 



## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   t77.out, tolnlines = 1, tolabs = 1.210e-04, tolrel = 1.100e-03, fld_options = -medium
#%% psp_files = 50sn.paw
#%% [paral_info]
#%% max_nprocs = 8
#%% [extra_info]
#%% authors = J. Zwanziger
#%% keywords = PAW
#%% description = 
#%%   White tin, body-centered tetragonal. This test checks that in an optcell 2 run, the symmetry
#%%   of the body-centered case is not broken. This test is run for two values of strprecon also,
#%%   to test the strprecon variable.
#%%   Coded and contributed by J. Zwanziger.
#%% topics = GeoOpt, UnitCell, SmartSymm
#%%<END TEST_INFO>
