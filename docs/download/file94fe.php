# Polarization of SrTiO3 (tetragonal)
# (Sheng, 9.9.2014)
#

   ndtset 2
   jdtset 1 2

#Definition of unit cell
#************************************

            acell      1.0403507002E+01  1.0403507002E+01  1.4819473101E+01 Bohr

             xred      0.0000000000E+00  5.0000000000E-01  7.5000000000E-01
                       5.0000000000E-01  0.0000000000E+00  7.5000000000E-01
                       5.0000000000E-01  0.0000000000E+00  2.5000000000E-01
                       0.0000000000E+00  5.0000000000E-01  2.5000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       0.0000000000E+00  0.0000000000E+00  2.5000000000E-01
                       5.0000000000E-01  5.0000000000E-01  2.5000000000E-01
                       5.0000000000E-01  5.0000000000E-01  7.5000000000E-01
                       0.0000000000E+00  0.0000000000E+00  7.5000000000E-01
                      -2.2322646697E-01  2.7677353303E-01  0.0000000000E+00
                       7.2322646697E-01 -2.2322646697E-01  0.0000000000E+00
                       2.7677353303E-01  2.2322646697E-01  0.0000000000E+00
                       2.2322646697E-01  7.2322646697E-01  0.0000000000E+00
                       2.7677353303E-01 -2.2322646697E-01  5.0000000000E-01
                       2.2322646697E-01  2.7677353303E-01  5.0000000000E-01
                      -2.2322646697E-01  7.2322646697E-01  5.0000000000E-01
                       7.2322646697E-01  2.2322646697E-01  5.0000000000E-01
  
#Parallelization
#****************

#   paral_kgb 1 autoparal 3 max_ncpus 48    # used to determine distribution of processors
   paral_kgb 1   npkpt 12 npband 1 npfft 2

#Definition of the elementary cell
#*********************************

   rprim 1.0 0.0 0.0
         0.0 1.0 0.0
         0.0 0.0 1.0
   chkprim 0

#Definition of the atoms
#***********************
   nband 84   # total valence electron/2 + 10
   natom 20
   ntypat 3
   znucl 38 22 8
   typat 4*1 4*2 12*3
   ixc -116133

#Definition of the SCF procedure
#*******************************
   nstep 100
   fftalg 401
   diemac 10.0

#Definition of the plane wave basis set
#**************************************
   ecut 500 eV
   ecutsm 0.5
   dilatmx 1.05
   ngkpt 6 6 4
   nshiftk 1
   shiftk 0.5 0.5 0.5
   chksymbreak 0

#DATASET1 : scf calculation: GS WF in the BZ
#********************************************
   toldfe1 1.0d-11

#DATASET2 : non scf calculation: GS WF in the whole BZ
#*****************************************************
   getden2 -1
   getwfk2 -1
   iscf2 -2
   tolwfr2 1.0d-22
   ngkpt2 6 6 10
   berryopt2 -1
   rfdir2 1 1 1
   

# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


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
#%% authors = 
#%% keywords = NC, DFPT
#%% description = 
#%%<END TEST_INFO>

