#LiFePO4

autoparal=1

#Structural optimization run

   ndtset   2       # There are 2 datasets in this calculation

# Set 1 : Internal coordinate optimization

  ionmov1   2       # Use BFGS algorithm for structural optimization
   ntime1   5       # Maximum number of optimization steps
  tolmxf1   1.0e-6  # Optimization is converged when maximum force 
                    # (Hartree/Bohr) is less than this maximum
  natfix1   4      # Fix the position of  atoms 
                    #  in doing the structural optimization
  iatfix1   1 7 13 19  # Choose atoms 1 as the fixed atoms (see discussion)

  natfixy1  16
  iatfixy1  2 3 4 5
            8 9 10 11  
            14 15 16 17
            20 21 22 23
# Set 2 : Lattice parameter relaxation (including re-optimization of
#         internal coordinates)

 dilatmx2   1.05    # Maximum scaling allowed for lattice parameters
 getxred2   -1      # Start with relaxed coordinates from dataset 1
  getwfk2   -1      # Start with wave functions from dataset 1
  ionmov2   2       # Use BFGS algorithm
   ntime2   12      # Maximum number of optimization steps
 optcell2   2       # Fully optimize unit cell geometry, keeping symmetry
  tolmxf2   1.0e-6  # Convergence limit for forces as above
 strfact2   100     # Test convergence of stresses (Hartree/bohr^3) by
                    # multiplying by this factor and applying force
                    # convergence test
  natfix2   4       
  iatfix2   1 7 13 19
  natfixy2  16
  iatfixy2  2 3 4 5     
            8 9 10 11  
            14 15 16 17
            20 21 22 23

#Common input data

#Starting approximation for the unit cell
   natom    28
#   acell    10.3328 6.0043 4.6977 angstrom   

   acell    19.524648914  11.357253191  8.866594338   

   rprim    1.000000000000000   0.000000000000000   0.000000000000000 
            0.000000000000000   1.000000000000000   0.000000000000000 
            0.000000000000000   0.000000000000000   1.000000000000000 
#Definition of the atom types and atoms 
  ntypat  4
  typat   1 2 3 4 4 4 4
  znucl   3 26 15 8
  spgroup 62
  natrd   6

#Starting approximation for atomic positions in REDUCED coordinates
   xred   0.0      0.0      0.0
          0.28222  0.25     0.97472
          0.09486  0.25     0.4182
          0.09678  0.25     0.74279
          0.45710  0.25     0.20602
          0.16558  0.04646  0.28478

#Gives the number of bands, explicitely (do not take the default)
#  nband   32             # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

#Definition of the plane wave basis set
   ecut   15.0            # Maximum kinetic energy cutoff (Hartree)
 ecutsm   0.5            # Smoothing energy needed for lattice paramete
                         # optimization.  This will be retained for
                         # consistency throughout.
# pawecutdg 50

#Definition of the k-point grid
  ngkpt   4 7 9          # 4x7x9 Monkhorst-Pack grid
nshiftk   1              # Use one copy of grid only (default)
 shiftk   0.5 0.5 0.5    # This choice of origin for the k point grid
                         # preserves the hexagonal symmetry of the grid,
                         # which would be broken by the default choice.

#Definition of the self-consistency procedure
 diemac   2              # Model dielectric preconditioner
   iscf   7              # Use pseudopot
  nstep   40             # Maxiumum number of SCF iterations
 tolvrs   1.0d-10        # Strict tolerance on (squared) residual of the
                         # SCF potential needed for accurate forces and
                         # stresses in the structural optimization, and
                         # accurate wave functions in the RF calculations
  ixc 11