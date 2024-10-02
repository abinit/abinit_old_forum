# Linear and nonlinear response calculation for LiNbO3
#Definition of lattice parameters
#********************************

#Definition of atomic positions and types
#*************************************
   acell 5.38935 5.38935 5.38935 Angstrom
   angdeg 3*56.935273
#Definition of the atoms
#*********************
   natom 10
   ntypat 3
   znucl 41 3 8
   typat 1 1 2 2 3 3 3 3 3 3  
   xred -1.1481138710E-05 -1.1481138710E-05 -1.1481138710E-05
         4.9998851886E-01  4.9998851886E-01  4.9998851886E-01
         2.5001955918E-01  2.5001955918E-01  2.5001955918E-01
         7.5001955918E-01  7.5001955918E-01  7.5001955918E-01
         1.2936162193E-01  3.7058450171E-01 -2.5005420167E-01
        -2.5005420167E-01  1.2936162193E-01  3.7058450171E-01
         3.7058450171E-01 -2.5005420167E-01  1.2936162193E-01
         8.7058450171E-01  6.2936162193E-01  2.4994579833E-01
         6.2936162193E-01  2.4994579833E-01  8.7058450171E-01
         2.4994579833E-01  8.7058450171E-01  6.2936162193E-01  
   ixc 3
#Parameters of the SCF cycles
#****************************
   iscf        5
   nstep       3000


#Plane wave basis Aand k-point grid
#*********************************
   ecut        45
   ecutsm      0.5
   dilatmx     1.05
   ngkpt       8 8 8 
   nshiftk     1
   shiftk      0.5 0.5 0.5

ndtset 5     jdtset 1 2 3 4 5

#DATASET1 : scf calculation: GS WF in the BZ
#********************************************
   prtden1    1
   kptopt1    1
   toldfe1    1.0d-10

#DATASET2 : non scf calculation: GS WF in the whole BZ
#*****************************************************
   getden2    1
   kptopt2    2
     iscf2   -2
   getwfk2    1
   tolwfr2    1.0d-20
    nband2    25


#DATASET3 : ddk on the MP grid of k-points
#*****************************************
   getwfk3    2
    rfdir3    1 1 1
   rfelfd3    2
   tolwfr3    1.0d-20
    nband3    25
   kptopt3    2

#DATASET4 : ddE on the MP grid of k-points
#*****************************************
   prtden4    1
   getwfk4    2
   getddk4    3
    rfdir4    1 1 1
   rfphon4    1
  rfatpol4    1 10
   tolvrs4    1.0d-10
   rfelfd4    3
    nband4    25
   kptopt4    2
  prepanl4    1

#DATASET5 : 3DTE calculation
#*************************
   getden5    1
  get1den5    4
   getwfk5    2
   get1wf5    4
    nband5    25
   kptopt5    2
optdriver5    5
  rf1elfd5    1
  rf1phon5    1
 rf1atpol5    1 10
   rf1dir5    1 1 1
  rf2elfd5    1
   rf2dir5    1 1 1
  rf3elfd5    1
   rf3dir5    1 1 1

nbdbuf 0

