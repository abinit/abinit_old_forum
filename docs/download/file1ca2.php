# Prepare the computation of linear and non-linear optic properties
# of GaAs crystal : ground-state with few bands,
# then non-SCF with a larger number of bands, then ddk for different directions
# Note that the k point sampling shoud be finer for significant results. The cut-off energy is also too low.
 ndtset 3

#First dataset : SC run with kpoints in the IBZ
# nband1  30    # Segmentation fault if it is too small 
  nstep1 50   
 kptopt1 1
 nbdbuf1 0
 occopt1 3
 prtden1 1   getden1 0   getwfk1 0    # Usual file handling data
 prtcif1 1
 tolvrs1 1.0d-12
 nband1 12
#Second dataset : NSC run with large number of bands, and points in the IBZ
    iscf2 -2  
#   nband2 30  # This number of bands might be too low for non-linear optics and real part of linear optics
   nstep2 50
  kptopt2  1
  getwfk2  1   getden2 1   # Usual file handling data
  occopt2  3
  nband2 10*12  # try nband2 12, then you can find "10" from the erroe message
  tolwfr2 1.0d-20
#Third dataset : NSC run with large number of bands, and points in the the full BZ
    iscf3 -2  
#   nband3 30  # This number of bands might be too low for non-linear optics and real part of linear optics 
   nstep3 50
  kptopt3  3
  getwfk3  2   getden3 1   # Usual file handling data
  occopt3 3
  nband3 256*12
  tolwfr3 1.0d-20
#Fourth dataset : ddk response function along axis 1
   iscf4 -3
#  nband4 60   # This number of bands might be too low for non-linear optics and real part of linear optics
  nstep4  1  nline4  0  prtwf4  3
 kptopt4  3

   nqpt4  1  qpt4  0.0d0 0.0d0 0.0d0 
  rfdir4  1 0 0
 rfelfd4  2
 getwfk4  3
 occopt4 3
 nband4 256*12
 tolwfr4 1.0d-20
#Fifth dataset : ddk response function along axis 2
#   iscf5 -3
#  nband5 20   # This number of bands might be too low for non-linear optics and real part of linear optics
#  nstep5  1  nline5  0   prtwf5  3
# kptopt5  3

#   nqpt5  1  qpt5  0.0d0 0.0d0 0.0d0
#  rfdir5  0 1 0
# rfelfd5  2
# getwfk5  3

#Sixth dataset : ddk response function along axis 3
#   iscf6 -3
#  nband6 20   # This number of bands might be too low for non-linear optics and real part of linear optics
#  nstep6  1  nline6  0    prtwf6  3
# kptopt6  3

#   nqpt6  1  qpt6  0.0d0 0.0d0 0.0d0
#  rfdir6  0 0 1
# rfelfd6  2
# getwfk6  3


#Data common to all datasets
 nshiftk 4
 shiftk  0.5 0.5 0.5
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
 ngkpt  4 4 4        # This is much too low : should be at least 24x24x24
 acell   3*10.60
 amu 69.72  74.9216
 diemac 10.0
 ecut 4.00             # This is also too low
 ixc 1
 natom  2  nbdbuf 2
 ntypat  2
 rprim   0 .5 .5  .5 0 .5  .5 .5 0
 xred 3*0.00d0 3*0.25d0
 tnons 72*0.0
 typat  1 2 # tolwfr  1.e-20
 znucl  31 33
# autoparal 1
# max_ncpus 16
# nband 12
#  paral_kgb 1 npband 3 bandpp 10  npfft 1
# occopt 3
## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = toptic_1.in, toptic_2.in
#%% need_cpp_vars = !HAVE_MPI_IO_DEFAULT
#%% [files]
#%% files_to_test = 
#%%   toptic_1.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00, fld_options = -easy
#%% psp_files =  31ga.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = S. Sharma, X. Gonze
#%% keywords = NC, DFPT
#%% description = 
#%%  Prepare the computation of linear and non-linear optic properties
#%%  of GaAs crystal : ground-state with few bands,
#%%  then non-SCF with a larger number of bands, then ddk for different directions
#%%  Note that the k point sampling shoud be finer for significant results. The cut-off energy is also too low.
#%%<END TEST_INFO>
