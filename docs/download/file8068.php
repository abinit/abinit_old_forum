#TiO2 rutile - 25% N doped
#Structural optimization run

 ndtset    2

# Set 1 : Internal coordinate optimization

 ionmov1   2       # Use BFGS algorithm for structural optimization
  ntime1   50
optcell1   0       # Relax only reduced coordinates
 tolmxf1   1.0e-8
 natfix1   4
 iatfix1   1 2 7 8
natfixz1   8
iatfixz1   3 4 5 6 9 10 11 12

# Set 2 : Lattice parameter relaxation (including re-optimization of
#         internal coordinates)

dilatmx2   1.2
getxred2   -1      # Start with relaxed coordinates from dataset 1
 getwfk2   -1      # Start with wave functions from dataset 1
 ionmov2   2       # Use BFGS algorithm
  ntime2   50 
optcell2   2       # Fully optimize unit cell geometry, keeping symmetry
 tolmxf2   1.0e-8
strfact2   100     # Test convergence of stresses (Hartree/bohr^3) by
                    # multiplying by this factor and applying force
                    # convergence test
 natfix2   4
 iatfix2   1 2 7 8
natfixz2   8
iatfixz2   3 4 5 6 9 10 11 12

#Common input data

#strtarget  -0.000169949145 -0.000169949145 -0.000169949145 0.0 0.0 0.0 #targeting 5 GPa

#Starting approximation for the unit cell
   acell   2*8.55774624625  11.0268249728

  angdeg   90  90  90
# spgroup   136
#  brvltt  -1

#Definition of the atom types and atoms
   natom   12
  ntypat   3
   typat   1 1 2 2 2 3 1 1 2 2 2 2 
   znucl   22 8 7

#Starting approximation for atomic positions in REDUCED coordinates
    xred   0.00   0.00   0.00  #Ti1
           0.50   0.50   0.25  #Ti2
           0.3033485499  0.3033485499  0.00  #O1
          -0.3033485499 -0.3033485499  0.00  #O2
           0.1966514501  0.8033485499  0.25  #O3
           0.8033485499  0.1966514501  0.25  #N
           0.00   0.00   0.50  #Ti3
           0.50   0.50   0.75  #Ti4
           0.3033485499  0.3033485499  0.50  #O4
          -0.3033485499 -0.3033485499  0.50  #O5
           0.1966514501  0.8033485499  0.75  #O6
           0.8033485499  0.1966514501  0.75  #O7

#Gives the number of bands, explicitely (do not take the default)
   nband   36
  occopt   1

#Definition of the plane wave basis set
    ecut   50
  ecutsm   0.5

#Definition of the k-point grid
  kptopt   1              # Use symmetry and treat only inequivalent points
   ngkpt   5 5 10
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
    ixc   3

 timopt   2
