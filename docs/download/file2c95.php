#TiO2 anatase - pure
#Structural optimization run

 ndtset    2

# Set 1 : Internal coordinate optimization

 ionmov1   2       # Use BFGS algorithm for structural optimization
  ntime1   50
optcell1   0       # Relax only reduced coordinates
 tolmxf1   1.0e-8
 natfix1   4
 iatfix1   1 2
natfixx2   4
iatfixx2   3 4 5 6
natfixy2   4
iatfixy2   3 4 5 6

# Set 2 : Lattice parameter relaxation (including re-optimization of
#         internal coordinates)

dilatmx2   1.2
getxred2  -1
 getwfk2  -1
 ionmov2   2       # Use BFGS algorithm
  ntime2   50 
optcell2   2       # Fully optimize unit cell geometry, keeping symmetry
 tolmxf2   1.0e-8
strfact2   100
 natfix2   4
 iatfix2   1 2
natfixx2   4
iatfixx2   3 4 5 6
natfixy2   4
iatfixy2   3 4 5 6

#Common input data

#strtarget  -0.000169949145 -0.000169949145 -0.000169949145 0.0 0.0 0.0 #targeting 5 GPa

#Starting approximation for the unit cell
   acell   2*7.1  17.94
  angdeg   90  90  90
 spgroup   141
  brvltt  -1

#Definition of the atom types and atoms
   natom   6
  ntypat   2
   typat   1 1 2 2 2 2
   znucl   22 8

#Starting approximation for atomic positions in REDUCED coordinates
    xred   0.00   0.00   0.00   #Ti1
           0.50   0.50   0.50   #Ti2
           0.00   0.00   0.208  #O1
           0.00   0.50   0.458  #O2
           0.50   0.00   0.542  #O3
           0.50   0.50   0.292  #O4

#Gives the number of bands, explicitely (do not take the default)
   nband   26
  occopt   1

#Definition of the plane wave basis set
    ecut   20
  ecutsm   0.5
pawecutdg  50

#Definition of the k-point grid
  kptopt   1              # Use symmetry and treat only inequivalent points
   ngkpt   4 4 2
 nshiftk   1
  shiftk   0.5 0.5 0.5

#Definition of the self-consistency procedure
#  diemac  9.0            # Model dielectric preconditioner
    iscf  7              # Use Pulay mixing sheme for SCF cycle
#npulayit  7              # Number of Pulay iterations
#  nnsclo  2              # Number of non-self consistent loops
#   nline  6              # Number of line minimisations
   nstep  100            # Maxiumum number of SCF iterations
  tolvrs  1.0d-18        # Strict tolerance on (squared) residual of the
                         # SCF potential needed for accurate forces and
                         # stresses in the structural optimization, and
                         # accurate wave functions in the RF calculations

#Define xc approximation
    ixc   7

#Timing option
 timopt   2
