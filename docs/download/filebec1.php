# Finite difference calculation of the Born effective charges of AlAs
# (M. Veithen, 29.4.2005)
#

#Definition of the different datasets 
#************************************
 
ndtset 3
jdtset 1 2 3

            xcart1     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.6325000000E+00  2.6325000000E+00  2.6325000000E+00
            
            xcart2     1.0000000000E-02  0.0000000000E+00  0.0000000000E+00
                       2.6325000000E+00  2.6325000000E+00  2.6325000000E+00

            xcart3    -1.0000000000E-02  0.0000000000E+00  0.0000000000E+00
                       2.6325000000E+00  2.6325000000E+00  2.6325000000E+00


#Definition of the elementary cell
#*********************************
   acell 3*10.53
   rprim 0.0 0.5 0.5
         0.5 0.0 0.5
         0.5 0.5 0.0

#Definition of the atoms
#***********************
   nband 4
   natom 2
   ntypat 2
   znucl 13 33
   typat 1 2
   ixc 3

#Definition of the SCF procedure
#*******************************
   nstep 100


#Definition of the plane wave basis set
#**************************************
   ecut  2.8
   ecutsm 0.5
   dilatmx 1.05
   ngkpt 6 6 6
   nshiftk 4
   shiftk 0.5 0.5 0.5
          0.5 0.0 0.0
          0.0 0.5 0.0
          0.0 0.0 0.5
   toldfe 1.0d-12

# Berry phase calculation of the polarization
#********************************************
   berryopt -1
   rfdir 1 1 1



## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tffield_1.out, tolnlines=  1, tolabs=  1.100e-08, tolrel=  3.000e-04
#%% psp_files =  13al.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = M. Veithen
#%% keywords = NC, DFPT
#%% description = 
#%%  Finite difference calculation of the Born effective charges of AlAs
#%%<END TEST_INFO>
