#Definition of lattice parameters
#********************************
    acell      1.0 1.0 1.0 
    rprim     6.48334048189399E+00 -5.32053395188653E-30  0.00000000000000E+00
             -3.24167024094700E+00  5.61473755863573E+00  0.00000000000000E+00
              0.00000000000000E+00  0.00000000000000E+00  2.54465013307842E+01
#Definition of atomic positions and types
#*************************************
   spgroup    0 # 194
   brvltt     -1
   spgaxor     1
   natom       6
   ntypat      2
#             Mo Se
  znucl       42 34
  typat       1 1 2 2 2 2
  xred       3.33333333333333E-01  6.66666666666666E-01  2.50000000000000E-01
             6.66666666666666E-01  3.33333333333333E-01  7.50000000000000E-01
             3.33333333333333E-01  6.66666666666666E-01  6.29356323436936E-01
             6.66666666666666E-01  3.33333333333333E-01  3.70643676563064E-01
             6.66666666666666E-01  3.33333333333333E-01  1.29356323436935E-01
             3.33333333333333E-01  6.66666666666666E-01  8.70643676563064E-01

   ixc         11 # PBE
   vdw_xc       7
   vdw_tol_3bt  1.0e-10

#Parameters of the SCF cycles
#****************************
   iscf        4
   nstep       2000

#Plane wave basis and k-point grid
#*********************************
   ecut        500  eV
   ngkpt       8 8 8
   nshiftk     1
   shiftk      0.0 0.0 0.0

   nqpt        1        
   tolvrs      1.0d-10 
   rfatpol     1 6     
   rfdir       1 1 1   
   rfphon      1
   kptopt      3
   getwfk      1
   rfasr       1
   fband       0.0
   nsym        1
   berryopt    4
   efield      0.000 0.000 0.0005

ndtset 3 jdtset 101 1 3 

#DATASET101 : scf calculation no efield
#********************************************
   getwfk101       0
   kptopt101       1
   prtden101       0
   rfphon101       0       
   nqpt101         0      
   prtwf101        1
   toldfe101       1.0d-11
   fband101        0.125
   nsym101         0
   spgroup101      194
   berryopt101     0

#DATASET1 : scf calculation with efield
#********************************************
   getwfk1       101
   kptopt1       2
   prtden1       1
   rfphon1       0
   nqpt1         0 
   prtwf1        1
   toldfe1       1.0d-11

#DATASETS 3: phonon perturbations
#*************************************************************
   qpt3      0.00000000E+00  0.00000000E+00  0.00000000E+00

