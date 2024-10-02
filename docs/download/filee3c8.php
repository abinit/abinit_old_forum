#Definition of lattice parameters
#********************************
   acell          1.0 1.0 1.0  Angstrom
   rprim          3.42730156395548 0.00000000000000 0.00000000000000
                 -1.71365078197774 2.96813022077937 0.00000000000000
                  0.00000000000000 0.00000000000000 13.95498120107878
                      
#Definition of atomic positions and types
#*************************************
   spgroup     194
   brvltt      -1
   spgaxor     1
   natom       6
   ntypat      2
#             Mo Se
  znucl       42 34
  typat       1 1 2 2 2 2
  xred        3.33333333333333E-01  6.66666666666667E-01  2.50000000000000E-01
              6.66666666666667E-01  3.33333333333333E-01  7.50000000000000E-01
              3.33333333333333E-01  6.66666666666667E-01  6.33043029622559E-01
              6.66666666666667E-01  3.33333333333333E-01  3.66956970377442E-01
              6.66666666666667E-01  3.33333333333333E-01  1.33043029622558E-01
              3.33333333333333E-01  6.66666666666667E-01  8.66956970377441E-01
  ixc         11 # PBE
  vdw_xc      7
  vdw_tol_3bt 1.0e-10
  kptopt    1
  toldfe    1.0d-12

#Parameters of the SCF cycles
#****************************
   iscf        4
   nstep       600
#Plane wave basis and k-point grid
#*********************************
   ecut        500  eV
   ecutsm      0.5
   dilatmx     1.1
   ngkpt       9 9 9 
   nshiftk     1
   shiftk      0.0 0.0 0.5

ndtset 1 jdtset 1

#DATASET1
#Berry phase calculation of the polarizationa at 0 field
#********************************************
  irdwfk1     14
  irdden1     14
  berryopt1  -1
  rfdir1      1 1 1

