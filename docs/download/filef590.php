# 'Full' DFPT calculation of third derivatives using Second Order Sternheimer equation
# Test on AlAs, with norm conserving pseudopotentials
# (L. Baguet, 05.2018)
# Enable output for nonlinear (full DFPT only)
#*****************************************************
#   nonlinear_info 1  # print details of 3rd derivatives in .out file (no time consuming)
#   nonlinear_info 2  # nonlinear_info=1 + debug_mode activated in nonlinear (time consuming)
#   nonlinear_info 3  # nonlinear_info=1 + debug_mode activated in rf2_init  (time consuming)
#   nonlinear_info 4  # nonlinear_info=1 + debug_mode activated in both nonlinear and rf2_init (time consuming)

#Definition of lattice parameters
#********************************
   acell       12.9625 12.9625 43.0695
   rprim       1.0 0.0 0.0
              -0.5 0.86602540378 0.0
               0.0 0.0 1.0

#Definition of atomic positions and types
#*************************************
   natom       8
   ntypat      2
   znucl       24 53
   typat       2 2 2 2 2 2 1 1
   xred        
  0.6666117556053998  0.9800847209644372  0.1363244757703120
  0.0199280432163384  0.6865434638410742  0.1363285999092597
  0.3134452350071282  0.3333518470058891  0.1363264033223797
  0.6667180390199008  0.6865202809602798  0.9987344613379026
  0.3134665182408375  0.9801902487885742  0.9987301022217714
  0.0198219530318117  0.3333185448433467  0.9987319587043872
  0.9999892072306352  0.0000027287868752  0.0675479039305820
  0.3333392566479562  0.6666682638095136  0.0674860938034034
# Exchange correlation functional
#********************************
   ixc 7
 nband 70
# Polarization
#*******************************
          nsppol    2
#nspinor 2
spinat  0.0 0.0 0.0
        0.0 0.0 0.0
        0.0 0.0 0.0
        0.0 0.0 0.0 
        0.0 0.0 0.0
        0.0 0.0 0.0
        0.0 0.0 4.0
        0.0 0.0 4.0
# SCF procedure
#*******************************
   nstep    40

# Bands
#*******************************
  occopt   4
  tsmear   0.001
  nbands   35
# Plane wave basis set
#**************************************
       ecut  40
     ecutsm  0.5

# K point grid
#**************************************
   ngkpt       6 6 1
   nshiftk     1
   shiftk      0.0 0.0 0.5

# Number of Datasets
#**************************************
    ndtset   7
# For all datasets (except 1 and 2)
#*******************************
    kptopt   2
    tolwfr   1.0d-26
    getden   2
    getwfk   2

# DATASET1 : Ground state (density)
#*******************************
   getden1   0
   getwfk1   0
   tolvrs1   1.0d-8
   kptopt1   1
    nstep1   100
# DATASET2 : Ground state (highly converged wavefunction)
#*******************************
   getden2   1
   getwfk2   1
   nstep2   100
# DATASET3 : ddk (SCF cycles are useless)
#*******************************
   getwfk3   2
    rfddk3   1
    rfdir3   1 1 1
# For a more effective non self-consistent computation:
    nstep3   1
    nline3   100
   tolrde3   1.0d-30 # tolrde is choosen to be much lower than tolwfr.
                     # This way the conjugate gradient steps stop at tolwfr, and not tolrde (usually around 1.0d-3).
                     # If nline is sufficiently large, the computation converges in one step only.

# DATASET4 : Phonons, Electric field
#*******************************
   rfelfd4   3
   rfphon4   1
  rfatpol4   1 8
    rfdir4   1 1 1
   getddk4   3
   prtden4   1
  prepanl4   1

# DATASET5 : dkdk
#*******************************
 rf2_dkdk5   1
   getddk5   3
  prepanl5   1
# Non self-consistent computation : can converge in one step. If not, increase nline instead of nstep. tolrde is not used.
    nstep5   1
    nline5   100

# DATASET6 : dkde
#*******************************
 rf2_dkde6   1
   getddk6   3
  get1den6   4
 getdelfd6   4
  getdkdk6   5
  prepanl6   1
# Non self-consistent computation : can converge in one step. If not, increase nline instead of nstep. tolrde is not used.
    nstep6   1
    nline6   100

# DATASET7 : 3DTE calculation (full DFPT)
#*****************************************
optdriver7    5 # for nonlinear calculation
  usepead7    0
   getddk7    3
  get1den7    4
   get1wf7    4
  getdkde7    6
  d3e_pert1_phon7   1
 d3e_pert1_atpol7   1 8
  d3e_pert1_elfd7   1
   d3e_pert1_dir7   1 1 1
  d3e_pert2_elfd7   1
   d3e_pert2_dir7   1 1 1
  d3e_pert3_elfd7   1
   d3e_pert3_dir7   1 1 1

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%    t82.out, tolnlines =1 , tolabs =1.0E-8, tolrel = 1.0E-8, fld_options = -medium;
#%% psp_files = 13al.pspnc,33as.pspnc
#%% [paral_info]
#%% max_nprocs = 10
#%% [extra_info]
#%% authors = L. Baguet
#%% keywords = NC, DFPT, NONLINEAR
#%% description = 
#%%   'Full' DFPT computation of third derivatives in Nonlinear (dataset 7). 
#%%   Preceded by resolution of Second-order Sternheimer equations (dataset 5 and 6).
#%%   Test the polarized case (with a non-polarized system). Must give same results than t81.in
#%%<END TEST_INFO>
