# Crystalline BiCrO3 : computation of phonons
#

  ndtset  5     jdtset 1 2 3 4 5

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
    nband2    16 

#DATASET3 : ddk on the MP grid of k-points
#*****************************************
   getwfk3    2
    rfdir3    1 1 1
   rfelfd3    2
   tolwfr3    1.0d-22
    nband3    16
   kptopt3    2

#DATASET4 : ddE on the MP grid of k-points
#*****************************************
   prtden4    1
   getwfk4    2
   getddk4    3
    rfdir4    1 1 1
   rfphon4    1
  rfatpol4    1 4 
   tolvrs4    1.0d-12
   rfelfd4    3
    nband4    16
   kptopt4    2
  prepanl4    1

#DATASET5 : 3DTE calculation
#***************************
   getden5    1
  get1den5    4
   getwfk5    2
   get1wf5    4
    nband5    16
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


#######################################################################
#Common input variables

#Structural parameters
natom 4
ntypat 2
typat 1 1 2 2
znucl 28 8
xred 0 0 0
    0.0 0.0 0.5
    0.5 0.5 0.25
    0.5 0.5 0.75

acell   3*7.92

rprim 0.0 1/2 1/2
      1/2 0.0 1/2
      1.0 1.0 0.0

# Kpoint Grid
ngkpt 6 6 6
chksymbreak 0

#Spin
nsppol 2 
nspden 2
nspinor 1
spinat 0 0 1
       0 0 -1
       0 0 0
       0 0 0

#Definition of the planewave basis set
ecut    50.0           # Maximal kinetic energy cut-off, in Hartree
ecutsm  0.5


#Definition of the SCF procedure
nstep 3000               # Maximal number of SCF cycles
#iscf   5             # Self-consistent calculation, using algorithm 5
