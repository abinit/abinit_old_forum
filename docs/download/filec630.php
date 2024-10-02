# Linear and nonlinear response calculation for NaTaO3
# Perturbations: electric fields & atomic displacements
# (M. Veithen, 21.4.2005)

#Definition of lattice parameters
#********************************
  acell  3*7.4608699023E+00  
  angdeg      90.0   90.0  90.0
#Definition of atomic positions and types
#*************************************
   natom       5
   ntypat      3
   znucl       47 41 8
   typat       1 2 3*3
   xred        0.0 0.0 0.0 
               0.5 0.5 0.5
               0.5 0.5 0.0
               0.5 0.0 0.5
               0.0 0.5 0.5
   ixc         3

#Parameters of the SCF cycles
#****************************
   iscf        5
   nstep       1000


#Plane wave basis and k-point grid
#*********************************
   ecut       40.0
   ecutsm      0.5
   dilatmx     1.05
   ngkpt       8 8 8
   nshiftk     1
   shiftk      0.5 0.5 0.5
               
ndtset 6     jdtset 1 2 3 4 5 6

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
    nband2    17


#DATASET3 : ddk on the MP grid of k-points
#*****************************************
   getwfk3    2
    rfdir3    1 1 1
   rfelfd3    2
   tolwfr3    1.0d-22
    nband3    17
   kptopt3    2

#DATASET4 : ddE on the MP grid of k-points
#*****************************************
   prtden4    1
   getwfk4    2
   getddk4    3
    rfdir4    1 1 1
   rfphon4    1
  rfatpol4    1 5
   tolvrs4    1.0d-10
   rfelfd4    3
    nband4    17
   kptopt4    2
  prepanl4    1

#DATASET5 : 3DTE calculation
#***************************
   getden5    1
  get1den5    4
   getwfk5    2
   get1wf5    4
    nband5    17
   kptopt5    2
optdriver5    5
  rf1elfd5    1
  rf1phon5    1
 rf1atpol5    1 5
   rf1dir5    1 1 1
  rf2elfd5    1
   rf2dir5    1 1 1
  rf3elfd5    1
   rf3dir5    1 1 1

#DATASET6 : ddE on the MP grid of k-points
#*****************************************
   getwfk6    2
   getddk6    3
    rfdir6    1 1 1
   rfstrs6    3
   tolvrs6    1.0d-10
   nband6     17
   kptopt6    2
  
nbdbuf 0

