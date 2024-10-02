# Linear response calculation for AlAs
# Perturbation: strain
# (M. Veithen, 28.4.2005)



#Definition of lattice parameters
#********************************
   acell 1.0 1.0 1.0
   rprim 10.47772787831160504149 0.0000000000 0.0000000000
         -5.23886393915579307211 9.07397851655827902295 0.0000000000
         0.0000000000 0.0000000000 9.91340216177724524086
#Definition of atomic positions and types
#*************************************
   natom 10
   ntypat 3
   znucl 3 53 8
   typat 1 1  2 2 3 3 3 3 3 3
   xred 0.000000000         0.000000000         0.420231998
     0.000000000         0.000000000         0.920231953
     0.666666971         0.333332997         0.497346010
     0.333332999         0.666666987         0.997346010
     0.244930988         0.340423996         0.159573998
     0.659576000         0.904507016         0.159573998
     0.755068994         0.659576013         0.659573953
     0.340424007         0.095492999         0.659573953
     0.904507049         0.244931003         0.659573953
     0.095492999         0.755069006         0.159573998

   ixc 3
#Parameters of the SCF cycles
#****************************
   nstep       200

#Plane wave basis and k-point grid
#*********************************
   ecut        35
   ecutsm      0.5
   dilatmx     1.05
#chksymbreak 0
   ngkpt       8 8 8
   nshiftk     1
   shiftk      0 0 0.5

ndtset 4     jdtset 1 2 3 4

#DATASET1 : scf calculation: GS WF in the BZ
#********************************************
   prtden1    1
   kptopt1    1
   toldfe1    1.0d-12

#DATASET2 : non scf calculation: GS WF in the whole BZ
#*****************************************************
   getden2    1
   kptopt2    2
     iscf2   -2
   getwfk2    1
   tolwfr2    1.0d-22
    nband2    28


#DATASET3 : ddk on the MP grid of k-points
#*****************************************
   getwfk3    2
    rfdir3    1 1 1
   rfelfd3    2
   tolwfr3    1.0d-22
    nband3    28
   kptopt3    2

#DATASET4 : strain response
#**************************
   getwfk4    2
   getddk4    3
    rfdir4    1 1 1
   rfstrs4    3
   toldfe4    1.0d-12
    nband4    28
   kptopt4    2

nbdbuf 0



## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = tnlo_2.in, tnlo_3.in, tnlo_4.in, tnlo_5.in
#%% [files]
#%% files_to_test = 
#%%   tnlo_3.out, tolnlines=  1, tolabs=  3.100e-08, tolrel=  2.000e-08, fld_options = -medium
#%% psp_files =  13al.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = M. Veithen
#%% keywords = NC, DFPT
#%% description = 
#%%   Linear response calculation for AlAs
#%%   Perturbation: strain
#%%<END TEST_INFO>
