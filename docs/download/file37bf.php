# Linear and nonlinear response calculation for AlAs
# Perturbations: electric fields & atomic displacements
# (M. Veithen, 21.4.2005)

#Definition of lattice parameters
#********************************
   acell       3*10.53
   rprim       0.0 0.5 0.5
               0.5 0.0 0.5
               0.5 0.5 0.0

#Definition of atomic positions and types
#*************************************
   natom       2
   ntypat      2
   znucl       13 33
   typat       1 2
   xred        0    0    0
               0.25 0.25 0.25
   ixc         3

#Parameters of the SCF cycles
#****************************
   iscf        5
   nstep       100


#Plane wave basis and k-point grid
#*********************************
   ecut        2.8
   ecutsm      0.5
   dilatmx     1.05
   ngkpt       6 6 6
   nshiftk     4
   shiftk      0.5 0.5 0.5
               0.5 0.0 0.0
               0.0 0.5 0.0
               0.0 0.0 0.5

ndtset 5     jdtset 1 2 3 4 5

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
    nband2    4


#DATASET3 : ddk on the MP grid of k-points
#*****************************************
   getwfk3    2
    rfdir3    1 1 1
   rfelfd3    2
   tolwfr3    1.0d-22
    nband3    4
   kptopt3    2

#DATASET4 : ddE on the MP grid of k-points
#*****************************************
   prtden4    1
   getwfk4    2
   getddk4    3
    rfdir4    1 1 1
   rfphon4    1
  rfatpol4    1 2
   tolvrs4    1.0d-12
   rfelfd4    3
    nband4    4
   kptopt4    2
  prepanl4    1

#DATASET5 : 3DTE calculation
#***************************
   getden5    1
  get1den5    4
   getwfk5    2
   get1wf5    4
    nband5    4
   kptopt5    2
optdriver5    5
  rf1elfd5    1
  rf1phon5    1
 rf1atpol5    1 2
   rf1dir5    1 1 1
  rf2elfd5    1
   rf2dir5    1 1 1
  rf3elfd5    1
   rf3dir5    1 1 1

nbdbuf 0

