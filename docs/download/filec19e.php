# =======================================
# Input for PAW1 tutorial
# ZnO at norm-conservative-relaxed volume
# =======================================

#Cell and atoms definition

 acell      6.1909745932E+00  6.1909745932E+00  9.9872422030E+00
 
 rprim      1.0000000000E+00  1.5538439020E-52  1.4650953985E-36
           -5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
            6.1232339957E-17  1.0605752387E-16  1.0000000000E+00
 
 xred      6.6666666667E-01  3.3333333333E-01  3.7711008561E-01
           6.6666666667E-01  3.3333333333E-01  9.9788991440E-01
           3.3333333334E-01  6.6666666667E-01  8.7711008561E-01
           3.3333333334E-01  6.6666666667E-01  4.9788991440E-01

 ntypat 2 
 natom 4 
 typat 1  2  1  2

 spgroup   186
 
 znucl 8 30 
 nband 26

#Grid definitions
 ecut 30
 ecutsm 0.5
 pawecutdg 80

#SCF cycle parameters
 tolvrs 1.0d-10
 nstep 40

#K-points

 kptopt 1
 ngkpt 6 6 6
 nshiftk 1
 shiftk 0 0 0.5

#I/O parameters
 prtwf 0 prtden 0  prteig 0


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tpaw1_1.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% psp_files =  6c.pspnc
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = M. Torrent
#%% keywords = PAW
#%% description = 
#%%   Input for PAW1 tutorial
#%%   Diamond at experimental volume
#%%<END TEST_INFO>
