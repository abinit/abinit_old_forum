#################################################################
# Automatic test for ABINIT:                                    #
# Prelimirary step for test v5#39 (macro_uj)                    #
#                       and v5#40 (testirdden)                  #
#                                                               #
# Fe bcc 2 atomic supercell - ferromag.- PAW DJA 2010 & MT 2009 #
#################################################################
#Unit cell
      acell  7.85 27.38 10.96
    chkprim  0                  # 0: do not check if uc primitive
     angdeg  90 90 90 

#Spin polarization
      nsppol  2                    #1 unpolarized / 2 polarized
      spinat  0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 2.0
              0.0 0.0 2.0
              0.0 0.0 2.0
              0.0 0.0 2.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0
              0.0 0.0 0.0


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

#Definition of the SCF procedure
      nstep  15                  # max  number SCF cycles
      tolvrs 10d-12

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
      lpawu  -1 2 -1                    # ang moments corrrected

#Save disk space & Miscelaneous
     prteig  0
     prtden  1                    # This is the default value    


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = tudet_1.in, tudet_2.in, tudet_3.in
#%% [files]
#%% files_to_test = 
#%%   tudet_1.out, tolnlines=  2, tolabs=  7.000e-09, tolrel=  2.000e-10
#%% psp_files =  26fe.paw
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% authors = M. Torrent
#%% keywords = PAW, LDAU
#%% description = 
#%%   Fe bcc 2 atomic supercell - ferromag.- PAW DJA 2010 & MT 2009
#%%   Prelimirary step for test v5#39 (macro_uj) 
#%%                         and v5#40 (testirdden)
#%%<END TEST_INFO>
