#################################################################
# Input file for the positron tutorial                          #
#    Positron lifetime calculation within PAW                   #
#                                                               #
#              Fe perfect lattice, relaxation effect            #
#################################################################

# Self-consistent positron lifetime calculation

  positron  -10     ! We perform automatic calculation of electrons and positron densities in the two-component DFT context
  posnstep   30                ! Maximum number of electon and positron steps
  postoldfe  1.0d-4
  posdoppler 1    ! Activation of Doppler broadening calculation
  ixcpositron  2  ! LDA electron-positron correlation provided by Puska, Seitsonen, and Nieminen
  


 ! strfact 
  optforces 1
  optstress 0    ! We need to calculate forces to perform relaxation
  ionmov 2
  ntime 100 
  optcell 0  ! 0:cell volume const 1:volume relax 2:cell volume relax
  ecutsm 0.5  ! Ha
  dilatmx 1.0  ! default
   toldff 1.0d-4 ! force acting on each atom (Ha/Bohr)
   tolmxf 1.0d-5 ! default

# SPIN parameter
    spinat 0.0 0.0 4.0
           0.0 0.0 4.0
    nsppol 2


# Common input parameters
  ! Unit cell
    acell   3*2.86 angstrom
    rprim   1.0  0.0  0.0
            0.0  1.0  0.0
            0.0  0.0  1.0
    chkprim 0
    natom  2
    ntypat  1
    typat 2*1
    znucl 26
    xred
         0.0  0.0  0.0
         0.5  0.5  0.5

        
! K-points and occupations
kptopt 0
istwfk *1       
nkpt 512  
kpt
0.0         0.0             0.0
0.125       0.0             0.0
0.250       0.0             0.0
0.375       0.0             0.0
0.500       0.0             0.0
0.625       0.0             0.0
0.750       0.0             0.0
0.875       0.0             0.0
0.0         0.125           0.0
0.125       0.125           0.0
0.250       0.125           0.0
0.375       0.125           0.0
0.500       0.125           0.0
0.625       0.125           0.0
0.750       0.125           0.0
0.875       0.125           0.0
0.0         0.250           0.0
0.125       0.250           0.0
0.250       0.250           0.0
0.375       0.250           0.0
0.500       0.250           0.0
0.625       0.250           0.0
0.750       0.250           0.0
0.875       0.250           0.0
0.0         0.375           0.0
0.125       0.375           0.0
0.250       0.375           0.0
0.375       0.375           0.0
0.500       0.375           0.0
0.625       0.375           0.0
0.750       0.375           0.0
0.875       0.375           0.0
0.0         0.50            0.0
0.125       0.50            0.0
0.250       0.50            0.0
0.375       0.50            0.0
0.500       0.50            0.0
0.625       0.50            0.0
0.750       0.50            0.0
0.875       0.50            0.0
0.0         0.625           0.0
0.125       0.625           0.0
0.250       0.625           0.0
0.375       0.625           0.0
0.500       0.625           0.0
0.625       0.625           0.0
0.750       0.625           0.0
0.875       0.625           0.0
0.0         0.750           0.0
0.125       0.750           0.0
0.250       0.750           0.0
0.375       0.750           0.0
0.500       0.750           0.0
0.625       0.750           0.0
0.750       0.750           0.0
0.875       0.750           0.0
0.0         0.875           0.0
0.125       0.875           0.0
0.250       0.875           0.0
0.375       0.875           0.0
0.500       0.875           0.0
0.625       0.875           0.0
0.750       0.875           0.0
0.875       0.875           0.0
0.0         0.0             0.125
0.125       0.0             0.125
0.250       0.0             0.125
0.375       0.0             0.125
0.500       0.0             0.125
0.625       0.0             0.125
0.750       0.0             0.125
0.875       0.0             0.125
0.0         0.125           0.125
0.125       0.125           0.125
0.250       0.125           0.125
0.375       0.125           0.125
0.500       0.125           0.125
0.625       0.125           0.125
0.750       0.125           0.125
0.875       0.125           0.125
0.0         0.250           0.125
0.125       0.250           0.125
0.250       0.250           0.125
0.375       0.250           0.125
0.500       0.250           0.125
0.625       0.250           0.125
0.750       0.250           0.125
0.875       0.250           0.125
0.0         0.375           0.125
0.125       0.375           0.125
0.250       0.375           0.125
0.375       0.375           0.125
0.500       0.375           0.125
0.625       0.375           0.125
0.750       0.375           0.125
0.875       0.375           0.125
0.0         0.50            0.125
0.125       0.50            0.125
0.250       0.50            0.125
0.375       0.50            0.125
0.500       0.50            0.125
0.625       0.50            0.125
0.750       0.50            0.125
0.875       0.50            0.125
0.0         0.625           0.125
0.125       0.625           0.125
0.250       0.625           0.125
0.375       0.625           0.125
0.500       0.625           0.125
0.625       0.625           0.125
0.750       0.625           0.125
0.875       0.625           0.125
0.0         0.750           0.125
0.125       0.750           0.125
0.250       0.750           0.125
0.375       0.750           0.125
0.500       0.750           0.125
0.625       0.750           0.125
0.750       0.750           0.125
0.875       0.750           0.125
0.0         0.875           0.125
0.125       0.875           0.125
0.250       0.875           0.125
0.375       0.875           0.125
0.500       0.875           0.125
0.625       0.875           0.125
0.750       0.875           0.125
0.875       0.875           0.125
0.0         0.0             0.250
0.125       0.0             0.250
0.250       0.0             0.250
0.375       0.0             0.250
0.500       0.0             0.250
0.625       0.0             0.250
0.750       0.0             0.250
0.875       0.0             0.250
0.0         0.125           0.250
0.125       0.125           0.250
0.250       0.125           0.250
0.375       0.125           0.250
0.500       0.125           0.250
0.625       0.125           0.250
0.750       0.125           0.250
0.875       0.125           0.250
0.0         0.250           0.250
0.125       0.250           0.250
0.250       0.250           0.250
0.375       0.250           0.250
0.500       0.250           0.250
0.625       0.250           0.250
0.750       0.250           0.250
0.875       0.250           0.250
0.0         0.375           0.250
0.125       0.375           0.250
0.250       0.375           0.250
0.375       0.375           0.250
0.500       0.375           0.250
0.625       0.375           0.250
0.750       0.375           0.250
0.875       0.375           0.250
0.0         0.50            0.250
0.125       0.50            0.250
0.250       0.50            0.250
0.375       0.50            0.250
0.500       0.50            0.250
0.625       0.50            0.250
0.750       0.50            0.250
0.875       0.50            0.250
0.0         0.625           0.250
0.125       0.625           0.250
0.250       0.625           0.250
0.375       0.625           0.250
0.500       0.625           0.250
0.625       0.625           0.250
0.750       0.625           0.250
0.875       0.625           0.250
0.0         0.750           0.250
0.125       0.750           0.250
0.250       0.750           0.250
0.375       0.750           0.250
0.500       0.750           0.250
0.625       0.750           0.250
0.750       0.750           0.250
0.875       0.750           0.250
0.0         0.875           0.250
0.125       0.875           0.250
0.250       0.875           0.250
0.375       0.875           0.250
0.500       0.875           0.250
0.625       0.875           0.250
0.750       0.875           0.250
0.875       0.875           0.250
0.0         0.0             0.375
0.125       0.0             0.375
0.250       0.0             0.375
0.375       0.0             0.375
0.500       0.0             0.375
0.625       0.0             0.375
0.750       0.0             0.375
0.875       0.0             0.375
0.0         0.125           0.375
0.125       0.125           0.375
0.250       0.125           0.375
0.375       0.125           0.375
0.500       0.125           0.375
0.625       0.125           0.375
0.750       0.125           0.375
0.875       0.125           0.375
0.0         0.250           0.375
0.125       0.250           0.375
0.250       0.250           0.375
0.375       0.250           0.375
0.500       0.250           0.375
0.625       0.250           0.375
0.750       0.250           0.375
0.875       0.250           0.375
0.0         0.375           0.375
0.125       0.375           0.375
0.250       0.375           0.375
0.375       0.375           0.375
0.500       0.375           0.375
0.625       0.375           0.375
0.750       0.375           0.375
0.875       0.375           0.375
0.0         0.50            0.375
0.125       0.50            0.375
0.250       0.50            0.375
0.375       0.50            0.375
0.500       0.50            0.375
0.625       0.50            0.375
0.750       0.50            0.375
0.875       0.50            0.375
0.0         0.625           0.375
0.125       0.625           0.375
0.250       0.625           0.375
0.375       0.625           0.375
0.500       0.625           0.375
0.625       0.625           0.375
0.750       0.625           0.375
0.875       0.625           0.375
0.0         0.750           0.375
0.125       0.750           0.375
0.250       0.750           0.375
0.375       0.750           0.375
0.500       0.750           0.375
0.625       0.750           0.375
0.750       0.750           0.375
0.875       0.750           0.375
0.0         0.875           0.375
0.125       0.875           0.375
0.250       0.875           0.375
0.375       0.875           0.375
0.500       0.875           0.375
0.625       0.875           0.375
0.750       0.875           0.375
0.875       0.875           0.375
0.0         0.0             0.50
0.125       0.0             0.50
0.250       0.0             0.50
0.375       0.0             0.50
0.500       0.0             0.50
0.625       0.0             0.50
0.750       0.0             0.50
0.875       0.0             0.50
0.0         0.125           0.50
0.125       0.125           0.50
0.250       0.125           0.50
0.375       0.125           0.50
0.500       0.125           0.50
0.625       0.125           0.50
0.750       0.125           0.50
0.875       0.125           0.50
0.0         0.250           0.50
0.125       0.250           0.50
0.250       0.250           0.50
0.375       0.250           0.50
0.500       0.250           0.50
0.625       0.250           0.50
0.750       0.250           0.50
0.875       0.250           0.50
0.0         0.375           0.50
0.125       0.375           0.50
0.250       0.375           0.50
0.375       0.375           0.50
0.500       0.375           0.50
0.625       0.375           0.50
0.750       0.375           0.50
0.875       0.375           0.50
0.0         0.50            0.50
0.125       0.50            0.50
0.250       0.50            0.50
0.375       0.50            0.50
0.500       0.50            0.50
0.625       0.50            0.50
0.750       0.50            0.50
0.875       0.50            0.50
0.0         0.625           0.50
0.125       0.625           0.50
0.250       0.625           0.50
0.375       0.625           0.50
0.500       0.625           0.50
0.625       0.625           0.50
0.750       0.625           0.50
0.875       0.625           0.50
0.0         0.750           0.50
0.125       0.750           0.50
0.250       0.750           0.50
0.375       0.750           0.50
0.500       0.750           0.50
0.625       0.750           0.50
0.750       0.750           0.50
0.875       0.750           0.50
0.0         0.875           0.50
0.125       0.875           0.50
0.250       0.875           0.50
0.375       0.875           0.50
0.500       0.875           0.50
0.625       0.875           0.50
0.750       0.875           0.50
0.875       0.875           0.50
0.0         0.0             0.6250
0.125       0.0             0.6250
0.250       0.0             0.6250
0.375       0.0             0.6250
0.500       0.0             0.6250
0.625       0.0             0.6250
0.750       0.0             0.6250
0.875       0.0             0.6250
0.0         0.125           0.6250
0.125       0.125           0.6250
0.250       0.125           0.6250
0.375       0.125           0.6250
0.500       0.125           0.6250
0.625       0.125           0.6250
0.750       0.125           0.6250
0.875       0.125           0.6250
0.0         0.250           0.6250
0.125       0.250           0.6250
0.250       0.250           0.6250
0.375       0.250           0.6250
0.500       0.250           0.6250
0.625       0.250           0.6250
0.750       0.250           0.6250
0.875       0.250           0.6250
0.0         0.375           0.6250
0.125       0.375           0.6250
0.250       0.375           0.6250
0.375       0.375           0.6250
0.500       0.375           0.6250
0.625       0.375           0.6250
0.750       0.375           0.6250
0.875       0.375           0.6250
0.0         0.50            0.6250
0.125       0.50            0.6250
0.250       0.50            0.6250
0.375       0.50            0.6250
0.500       0.50            0.6250
0.625       0.50            0.6250
0.750       0.50            0.6250
0.875       0.50            0.6250
0.0         0.625           0.6250
0.125       0.625           0.6250
0.250       0.625           0.6250
0.375       0.625           0.6250
0.500       0.625           0.6250
0.625       0.625           0.6250
0.750       0.625           0.6250
0.875       0.625           0.6250
0.0         0.750           0.6250
0.125       0.750           0.6250
0.250       0.750           0.6250
0.375       0.750           0.6250
0.500       0.750           0.6250
0.625       0.750           0.6250
0.750       0.750           0.6250
0.875       0.750           0.6250
0.0         0.875           0.6250
0.125       0.875           0.6250
0.250       0.875           0.6250
0.375       0.875           0.6250
0.500       0.875           0.6250
0.625       0.875           0.6250
0.750       0.875           0.6250
0.875       0.875           0.6250
0.0         0.0             0.750
0.125       0.0             0.750
0.250       0.0             0.750
0.375       0.0             0.750
0.500       0.0             0.750
0.625       0.0             0.750
0.750       0.0             0.750
0.875       0.0             0.750
0.0         0.125           0.750
0.125       0.125           0.750
0.250       0.125           0.750
0.375       0.125           0.750
0.500       0.125           0.750
0.625       0.125           0.750
0.750       0.125           0.750
0.875       0.125           0.750
0.0         0.250           0.750
0.125       0.250           0.750
0.250       0.250           0.750
0.375       0.250           0.750
0.500       0.250           0.750
0.625       0.250           0.750
0.750       0.250           0.750
0.875       0.250           0.750
0.0         0.375           0.750
0.125       0.375           0.750
0.250       0.375           0.750
0.375       0.375           0.750
0.500       0.375           0.750
0.625       0.375           0.750
0.750       0.375           0.750
0.875       0.375           0.750
0.0         0.50            0.750
0.125       0.50            0.750
0.250       0.50            0.750
0.375       0.50            0.750
0.500       0.50            0.750
0.625       0.50            0.750
0.750       0.50            0.750
0.875       0.50            0.750
0.0         0.625           0.750
0.125       0.625           0.750
0.250       0.625           0.750
0.375       0.625           0.750
0.500       0.625           0.750
0.625       0.625           0.750
0.750       0.625           0.750
0.875       0.625           0.750
0.0         0.750           0.750
0.125       0.750           0.750
0.250       0.750           0.750
0.375       0.750           0.750
0.500       0.750           0.750
0.625       0.750           0.750
0.750       0.750           0.750
0.875       0.750           0.750
0.0         0.875           0.750
0.125       0.875           0.750
0.250       0.875           0.750
0.375       0.875           0.750
0.500       0.875           0.750
0.625       0.875           0.750
0.750       0.875           0.750
0.875       0.875           0.750
0.0         0.0             0.8750
0.125       0.0             0.8750
0.250       0.0             0.8750
0.375       0.0             0.8750
0.500       0.0             0.8750
0.625       0.0             0.8750
0.750       0.0             0.8750
0.875       0.0             0.8750
0.0         0.125           0.8750
0.125       0.125           0.8750
0.250       0.125           0.8750
0.375       0.125           0.8750
0.500       0.125           0.8750
0.625       0.125           0.8750
0.750       0.125           0.8750
0.875       0.125           0.8750
0.0         0.250           0.8750
0.125       0.250           0.8750
0.250       0.250           0.8750
0.375       0.250           0.8750
0.500       0.250           0.8750
0.625       0.250           0.8750
0.750       0.250           0.8750
0.875       0.250           0.8750
0.0         0.375           0.8750
0.125       0.375           0.8750
0.250       0.375           0.8750
0.375       0.375           0.8750
0.500       0.375           0.8750
0.625       0.375           0.8750
0.750       0.375           0.8750
0.875       0.375           0.8750
0.0         0.50            0.8750
0.125       0.50            0.8750
0.250       0.50            0.8750
0.375       0.50            0.8750
0.500       0.50            0.8750
0.625       0.50            0.8750
0.750       0.50            0.8750
0.875       0.50            0.8750
0.0         0.625           0.8750
0.125       0.625           0.8750
0.250       0.625           0.8750
0.375       0.625           0.8750
0.500       0.625           0.8750
0.625       0.625           0.8750
0.750       0.625           0.8750
0.875       0.625           0.8750
0.0         0.750           0.8750
0.125       0.750           0.8750
0.250       0.750           0.8750
0.375       0.750           0.8750
0.500       0.750           0.8750
0.625       0.750           0.8750
0.750       0.750           0.8750
0.875       0.750           0.8750
0.0         0.875           0.8750
0.125       0.875           0.8750
0.250       0.875           0.8750
0.375       0.875           0.8750
0.500       0.875           0.8750
0.625       0.875           0.8750
0.750       0.875           0.8750
0.875       0.875           0.8750
 
     
shiftk 0.5 0.5 0.5 
nshiftk 1

 
! Smearing
   occopt 6  
   tsmear 0.01 eV
   nband  35
   posocc 1.0  ! Occupation number for the positron (we have one positron in the cell).

#  Visualization parameter
    prtden 1
    prtcif 1


 ! Convergence parameters
    ecut 12   pawecutdg 24
    iscf 17
    nstep 100  ! We increase nstep 
    maxnsym 800  ! error-code not enough

!   Miscelaneous
    prtwf 0 prteig 0           ! To save disk space 

     

       
## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test =
#%%   tpositron_4.out, tolnlines= 40, tolabs= 3.0e-3, tolrel= 4.1e-1, fld_options= -easy
#%% psp_files = 26fe.lda2.paw
#%% [paral_info]
#%% max_nprocs = 10
#%% [extra_info]
#%% authors = J. Wiktor
#%% keywords = POSITRON,PAW
#%% description = Fourth step of the tutorial on electron-positron annihilation
#%%<END TEST_INFO>



