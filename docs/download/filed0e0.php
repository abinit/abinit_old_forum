###################################################################
## Automatic test for ABINIT:                                    ##
## determine U from change of occupation on atoms upon potential ##
##  shift on atom 1                                              ##
## Fe bcc structure - ferromagnetic PAW                 DJA 2010 ##
###################################################################
 
# 2 atomic supercell
      acell  7.85 27.38 10.96
    chkprim  0                  # 0: do not check if uc primitive
     angdeg  90 90 90 
     nsppol  2        

#Definition of the atom types
     ntypat  3
      znucl  56 28 9

#Definition of the atoms
      natom  24
      typat  4*1 4*2 16*3               # atomic types
       xred
             0.000000 0.352350 0.361500
             0.000000 0.647650 0.861500
             0.500000 0.852350 0.361500
             0.500000 0.147650 0.861500
             0.000000 0.086830 0.324100
             0.000000 0.913170 0.824100
             0.500000 0.586830 0.324100
             0.500000 0.413170 0.824100
             0.000000 0.028500 0.000000
             0.000000 0.971500 0.500000
             0.500000 0.528500 0.000000
             0.500000 0.471500 0.500000
             0.000000 0.167400 0.594600
             0.000000 0.832600 0.094600
             0.500000 0.667400 0.594600
             0.500000 0.332600 0.094600
             0.000000 0.198300 0.123800
             0.000000 0.801700 0.623800
             0.500000 0.698300 0.123800
             0.500000 0.301700 0.623800
             0.000000 0.577300 0.312100
             0.000000 0.422700 0.812100
             0.500000 0.077300 0.312100
             0.500000 0.922700 0.812100
       ecut  8                   # Energy cutoff
  pawecutdg  20                  # pawecutdg > 2*ecut
      nband  120                  # Fe_2 minband=17

#Definition of the k-point grid
     kptopt  1                    # 1:  automatic generation of k points
      ngkpt  3 3 3                # n x n x n
    nshiftk  1
     shiftk  0.5 0.5 0.5

#Smearing
     occopt  4
     tsmear  0.05 eV

#DFT+U
    usepawu  1                    # 1 at lim dble cnt / 2 rnd m fld dle cnt
      lpawu  -1 2 -1                     # ang moments corrrected
       nsym  4                   # nsym&symrel: break cubic symmetry of crystal: allow 
                                  # individual ionicoccupations


      symrel  1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
             -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                            
             
    pawujat  5                    # default, the atom on which U is determined
     pawujv  0.1 eV               # default, size of the potential shift
   macro_uj  1                    # activate determination of U
   pawujrad  2.66866              # optional, radius ASA-sphere to which U should be extrapolated 

#Only to accelerate test
     irdwfk  1                    # default for macro_uj = 1                     
 #    nline  2 
 #   nnsclo  2
     tolvrs  10d-9                # default for macro_uj = 1
 
 
#Save disk space 
     prteig  0
      prtwf  0
     prtden  0


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = tudet_1.in, tudet_2.in, tudet_3.in
#%% input_prefix = tudet_1o
#%% [files]
#%% files_to_test = 
#%%   tudet_2.out, tolnlines=  4, tolabs=  8.000e-03, tolrel=  6.500e-01, fld_options = -easy
#%% psp_files =  26fe.paw
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = D.J. Adams
#%% keywords = PAW, LDAU
#%% description = 
#%%  Fe bcc structure - ferromagnetic PAW 
#%%  determine U from change of occupation on atoms upon potential
#%%  shift on atom 1                                              
#%%<END TEST_INFO>
