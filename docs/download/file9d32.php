#################################################################
# Automatic test for ABINIT:                                    #
#    Electron positron Doppler broadening calculation           #
#    within PAW                                                 #
#                                                               #
#              LaAlO3, 4 atoms in the box         E. Hecht 2017 #
#################################################################

  positron -10  ! Electron/positron GS calculation
                ! within self-consistent 2-component DFT
  #posdoppler 1  ! Activation of Doppler broadening calculation

  ! Choose one of the electron-positron correlation functionals
  ixcpositron 11

# Common input parameters
  ! Unit cell
    acell 3*3.83 angstrom
    rprim 1.0 0.0 0.0
          0.0 1.0 0.0
          0.0 0.0 1.0
    ntypat 3  natom 5  typat 1 2 2 2 3
    znucl 57 8 13
    xred 0.0 0.0 0.0
         0.5 0.5 0.0
         0.5 0.0 0.5
         0.0 0.5 0.5
         0.5 0.5 0.5 
    chkprim 0

  ! K-points and occupations
    kptopt 0
    nkpt 64
    kpt  0         0         0
         0         0    0.2500
         0         0    0.5000
         0         0    0.7500
         0    0.2500         0
         0    0.2500    0.2500
         0    0.2500    0.5000
         0    0.2500    0.7500
         0    0.5000         0
         0    0.5000    0.2500
         0    0.5000    0.5000
         0    0.5000    0.7500
         0    0.7500         0
         0    0.7500    0.2500
         0    0.7500    0.5000
         0    0.7500    0.7500
    0.2500         0         0
    0.2500         0    0.2500
    0.2500         0    0.5000
    0.2500         0    0.7500
    0.2500    0.2500         0
    0.2500    0.2500    0.2500
    0.2500    0.2500    0.5000
    0.2500    0.2500    0.7500
    0.2500    0.5000         0
    0.2500    0.5000    0.2500
    0.2500    0.5000    0.5000
    0.2500    0.5000    0.7500
    0.2500    0.7500         0
    0.2500    0.7500    0.2500
    0.2500    0.7500    0.5000
    0.2500    0.7500    0.7500
    0.5000         0         0
    0.5000         0    0.2500
    0.5000         0    0.5000
    0.5000         0    0.7500
    0.5000    0.2500         0
    0.5000    0.2500    0.2500
    0.5000    0.2500    0.5000
    0.5000    0.2500    0.7500
    0.5000    0.5000         0
    0.5000    0.5000    0.2500
    0.5000    0.5000    0.5000
    0.5000    0.5000    0.7500
    0.5000    0.7500         0
    0.5000    0.7500    0.2500
    0.5000    0.7500    0.5000
    0.5000    0.7500    0.7500
    0.7500         0         0
    0.7500         0    0.2500
    0.7500         0    0.5000
    0.7500         0    0.7500
    0.7500    0.2500         0
    0.7500    0.2500    0.2500
    0.7500    0.2500    0.5000
    0.7500    0.2500    0.7500
    0.7500    0.5000         0
    0.7500    0.5000    0.2500
    0.7500    0.5000    0.5000
    0.7500    0.5000    0.7500
    0.7500    0.7500         0
    0.7500    0.7500    0.2500
    0.7500    0.7500    0.5000
    0.7500    0.7500    0.7500
    istwfk *1
    occopt 3
    #nband 80
   posocc 1.0  ! Occupation number for the positron (to be set <1 for bulk calculation with a small cell).

  ! Convergence parameters
    ecut 25. pawecutdg 35.
    nstep 150 tolvrs 1.d-10

!   2-component DFT parameters
    postoldfe 1.d-6
    posnstep  4

!   Miscelaneous
#    prtdos 1
#    prtwf 1
#    prtvol 2 
    prteig 0           ! To save disk space
    optforces 0 optstress 0    ! Not relevant here

