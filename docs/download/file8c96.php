     prtvol   0  
     ndtset   1
     jdtset   5
#DATASET1 : scf calculation: GS WF in the BZ
#********************************************
   prtden1    1
   kptopt1    1
   toldfe1    1.0d-12
     iscf1    7
 npulayit1    5
    nband1    24
#DATASET2 : non scf calculation: GS WF in the whole BZ
#*****************************************************
   getden2    1
   kptopt2    2
     iscf2   -2
   getwfk2    1
   tolwfr2    1.0d-22
    nband2    24
#DATASET3 : ddk on the MP grid of k-points
#*****************************************
   getwfk3    2
    rfdir3    1 1 1
   rfelfd3    2
   tolwfr3    1.0d-22
    nband3    24
   kptopt3    2
#DATASET4 : ddE on the MP grid of k-points
#*****************************************
   prtden4    1
   getwfk4    2
   getddk4    3
    rfdir4    1 1 1
   rfphon4    1
  rfatpol4    1 10
   tolvrs4    1.0d-12
   rfelfd4    3
    nband4    24
   kptopt4    2
  prepanl4    1
    nline4    13
   iprcel4    45
#DATASET5 : 3DTE calculation
#***************************
   getden5    1
  get1den5    4
   getwfk5    2
   get1wf5    4
    nband5    24
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
# ddE for strain RF
#****************************************
   getwfk6    2
   getddk6    3
    rfdir6    1 1 1
   rfstrs6    3
   tolvrs6    1.0d-12
    nband6    24
   kptopt6    2
    nline6    13
#######################################################################
#Common input variables
     acell    9.5433731251E+00  9.5433731251E+00  9.5433731251E+00
     rprim    5.3592738660E-01  0.0000000000E+00  8.4426407972E-01
             -2.6796369329E-01  4.6412673138E-01  8.4426407972E-01
             -2.6796369329E-01 -4.6412673138E-01  8.4426407972E-01
      xred    1.4791041389E-01  1.4791041389E-01  1.4791041389E-01
              3.5208958611E-01  3.5208958611E-01  3.5208958611E-01
              6.4791041389E-01  6.4791041389E-01  6.4791041389E-01
              8.5208958611E-01  8.5208958611E-01  8.5208958611E-01
              4.4360105843E-01  5.6398941572E-02  7.5000000000E-01
              5.6398941572E-02  7.5000000000E-01  4.4360105843E-01
              7.5000000000E-01  4.4360105843E-01  5.6398941572E-02
              5.5639894157E-01  9.4360105843E-01  2.5000000000E-01
              2.5000000000E-01  5.5639894157E-01  9.4360105843E-01
              9.4360105843E-01  2.5000000000E-01  5.5639894157E-01
     typat    1  1  1  1  2  2  2  2  2  2
    ntypat    2
     natom    10
     znucl    13    8
    
#Definition of the planewave basis set
      ecut    67.0
    ecutsm    0.5
     nstep    100  
    diemac    6.0
#Definition of the k mesh
  kptrlatt   -3   3   3
              3  -3   3
              3   3  -3
    shiftk    5.0000E-01 5.0000E-01 5.0000E-01
