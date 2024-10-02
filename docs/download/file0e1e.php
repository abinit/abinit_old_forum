#################################################################
# Automatic test for ABINIT:                                    #
# Prelimirary step for test v5#39 (macro_uj)                    #
#                       and v5#40 (testirdden)                  #
#                                                               #
# Fe bcc 2 atomic supercell - ferromag.- PAW DJA 2010 & MT 2009 #
#################################################################
#Unit cell
  scalecart  4.22100 15.10700 5.99800 angstrom
    chkprim  0                  # 0: do not check if uc primitive
      rprim  0.50 -0.50  0.00
             0.50  0.50  0.00
             0.00  0.00  1.00
     
#Spin polarization
      nsppol  2                    #1 unpolarized / 2 polarized
      spinat  0.0 0.0 2.0
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


#Definition of the atom types
     ntypat  3
      znucl  25 56 9

#Definition of the atoms
      natom  12
      typat  2*1 2*2 8*3               # atomic types
       xred 
             0.586830  0.586830  0.324100
             0.413170  0.413170  0.824100
             0.352350  0.352350  0.361500
             0.647650  0.647650  0.861500
             0.028500  0.028500  0.000000
             0.971500  0.971500  0.500000
             0.167400  0.167400  0.594600
             0.832600  0.832600  0.094600
             0.198300  0.198300  0.123800
             0.801700  0.801700  0.623800
             0.577300  0.577300  0.312100
             0.422700  0.422700  0.812100
       ecut  8                   # Energy cutoff
  pawecutdg  16                  # pawecutdg > 2*ecut
      nband  80                  # Fe_2 minband=17

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
      lpawu  2 -1 -1                   # ang moments corrrected
    pawovlp -1 
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
