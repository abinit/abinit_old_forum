# Linear and nonlinear response calculation for calcite CaCO3
# Perturbations: electric fields & atomic displacements


#Definition of lattice parameters from calcite_rprimopt.in (worked to produce reasonable rprim values)
#****************************************************************************************************
   acell       3*12.04700407        #Bohr, Rhombohedral lattice
   angdeg      3*48.3
   spgroup     167
   spgaxor      2

#Definition of atomic positions and types
#*************************************
   natom       10
   ntypat      3
   znucl       20 6 8
   typat       1 1 2 2 3 3 3 3 3 3
   xred        0     0     0
               0.5   0.5   0.5
               0.25  0.25  0.25
               0.75  0.75  0.75
               0.007 0.493 0.25
               0.493 0.25  0.007
               0.25  0.007 0.493
              -0.007 0.507 0.75
               0.507 0.75 -0.007
               0.75 -0.007 0.507  
   ixc         3

#Parameters of the SCF cycles
#****************************
   iscf        2
   nstep       100


#Plane wave basis and k-point grid
#**********************************************************************************************************
   ecut        10.0
   ecutsm      0.5
   dilatmx     1.05
   ngkpt       4 4 4
   nshiftk     1
   shiftk      0.5 0.5 0.5  #from the output of calcite_rprimopt
              

ndtset 5     jdtset 1 2 3 4 5

#DATASET1 : scf calculation: GS WF in the BZ
#********************************************
   prtden1    1
   kptopt1    2
   toldfe1    1.0d-12

#DATASET2 : non scf calculation: GS WF in the whole BZ
#*****************************************************
   getden2    1
   kptopt2    2
     iscf2    7
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
  rfatpol4    1 1
   tolvrs4    1.0d-12
   rfelfd4    3
    nband4    24
   kptopt4    2
  prepanl4    1

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
 rf1atpol5    1 1
   rf1dir5    1 1 1
  rf2elfd5    1
   rf2dir5    1 1 1
  rf3elfd5    1
   rf3dir5    1 1 1

nbdbuf 0

