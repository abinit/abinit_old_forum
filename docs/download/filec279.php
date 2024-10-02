#GaN in hypothetical wurzite (hexagonal) structure
#Structural optimization run

   ndtset   2       # There are 2 datasets in this calculation

# Set 1 : Internal coordinate optimization

  ionmov1   2       # Use BFGS algorithm for structural optimization
   ntime1   5       # Maximum number of optimization steps
  tolmxf1   1.0e-6  # Optimization is converged when maximum force 
                    # (Hartree/Bohr) is less than this maximum
  natfix1   2       # Fix the position of two symmetry-equivalent atoms 
                    #  in doing the structural optimization
  iatfix1   1 2     # Choose atoms 1 and 2 as the fixed atoms (see discussion)

# Set 2 : Lattice parameter relaxation (including re-optimization of
#         internal coordinates)

 dilatmx2 1.066875E+00
#dilatmx2   1.05    # Maximum scaling allowed for lattice parameters
 getxred2   -1      # Start with relaxed coordinates from dataset 1
  getwfk2   -1      # Start with wave functions from dataset 1
  ionmov2   2       # Use BFGS algorithm
   ntime2   12      # Maximum number of optimization steps
 optcell2   2       # Fully optimize unit cell geometry, keeping symmetry
  tolmxf2   1.0e-6  # Convergence limit for forces as above
 strfact2   100     # Test convergence of stresses (Hartree/bohr^3) by
                    # multiplying by this factor and applying force
                    # convergence test
  natfix2   2       
  iatfix2   1 2     

#Common input data

#Definition of the unit cell
acell   0.6028000E+01 0.6028000E+01 0.9805000E+01             #this is a guess, with the c/a
                                                              #ratio based on ideal tetrahedral
                                                              #bond angles
angdeg 90. 90. 120.
#rprim  0.5    -0.86602540378      0.0   
#       0.5     0.86602540378      0.0   
#       0.0    0.0      1.0
spgroup 186

#Definition of the atom types and atoms
 ntypat   2 
 znucl   31 7
 natom   4
 typat   1 1 2 2

#Starting approximation for atomic positions in REDUCED coordinates
#based on ideal tetrahedral bond angles

  xred  0.666667  0.333333  0.499120  
        0.333333  0.666667  0.999120  
        0.666667  0.333333  0.875880 
        0.333333  0.666667  0.375880  

#Gives the number of bands, explicitely (do not take the default)
nband   20               # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

#Definition of the plane wave basis set
ecut   90.0            # Maximum kinetic energy cutoff (Hartree)
ecutsm   0.5            # Smoothing energy needed for lattice paramete
                         # optimization.  This will be retained for
                         # consistency throughout.

#Definition of the k-point grid
ngkpt   8 8 6          # 4x4x4 Monkhorst-Pack grid                                !few k point along z axis
nshiftk   1              # Use one copy of grid only (default)
shiftk   0.0 0.0 0.5    # This choice of origin for the k point grid
                         # preserves the hexagonal symmetry of the grid,
                         # which would be broken by the default choice.

#Definition of the self-consistency procedure
diemac   9.0            # Model dielectric preconditioner
nstep   50             # Maxiumum number of SCF iterations
tolvrs   1.0d-18        # Strict tolerance on (squared) residual of the
                         # SCF potential needed for accurate forces and
                         # stresses in the structural optimization, and
                         # accurate wave functions in the RF calculations
# enforce calculation of forces at each SCF step
optforces 1

