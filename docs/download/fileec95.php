#AlAs in hypothetical wurzite (hexagonal) structure
#Structural optimization run

   ndtset   2       # There are 2 datasets in this calculation

# Set 1 : Internal coordinate optimization

  ionmov1   2       # Use BFGS algorithm for structural optimization
   ntime1   30       # Maximum number of optimization steps
  tolmxf1   1.0e-6  # Optimization is converged when maximum force 
                    # (Hartree/Bohr) is less than this maximum
  #natfix1   2       # Fix the position of two symmetry-equivalent atoms 
                    #  in doing the structural optimization
  #iatfix1   1 2     # Choose atoms 1 and 2 as the fixed atoms (see discussion)

# Set 2 : Lattice parameter relaxation (including re-optimization of
#         internal coordinates)

 dilatmx2   1.05    # Maximum scaling allowed for lattice parameters
 getxred2   -1      # Start with relaxed coordinates from dataset 1
  getwfk2   -1      # Start with wave functions from dataset 1
  ionmov2   2       # Use BFGS algorithm
   ntime2   30      # Maximum number of optimization steps
 optcell2   2       # Fully optimize unit cell geometry, keeping symmetry
  tolmxf2   1.0e-6  # Convergence limit for forces as above
 strfact2   100     # Test convergence of stresses (Hartree/bohr^3) by
                    # multiplying by this factor and applying force
                    # convergence test
  ##natfix2   2       
  #iatfix2   1 2     

#Common input data

#Starting approximation for the unit cell
 #acell   8.2771111111 8.2771111111 4.7411111111           # From literature 

  rprim   -4.1384444444  4.1384444444  2.3722222222   #hexagonal primitive vectors must be
           4.1384444444 -4.1384444444  2.3722222222   #specified with high accuracy to be
           4.1384444444  4.1384444444 -2.3722222222            #sure that the symmetry is recognized
                                                                      #and preserved in the optimization
  #scalecart  8.2771111111 8.2771111111 4.7411111111                                     #process

#Definition of the atom types and atoms
 
 ntypat   1 
  znucl   6
  natom   4
  typat   1 1 1 1

  #spgroup 139
  #brvltt      -1 

#Starting approximation for atomic positions in REDUCED coordinates
#based on ideal tetrahedral bond angles

   xred    0.18011111111111  0.18011111111111  0.00000000000000 # C 
          -0.18011111111111  0.18011111111111  0.00000000000000 # C 
          -0.18011111111111 -0.18011111111111  0.00000000000000 # C 
           0.18011111111111 -0.18011111111111  0.00000000000000 # C 

#Gives the number of bands, explicitely (do not take the default)
  nband   18              # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

#Definition of the plane wave basis set
   ecut   30.0            # Maximum kinetic energy cutoff (Hartree)
 ecutsm   0.5            # Smoothing energy needed for lattice paramete
                         # optimization.  This will be retained for
                         # consistency throughout.

#Definition of the k-point grid
  ngkpt   6 6 6          # 4x4x4 Monkhorst-Pack grid
  nshiftk   1              # Use one copy of grid only (default)
  shiftk   0.0 0.0 0.0    # This choice of origin for the k point grid
                         # preserves the hexagonal symmetry of the grid,
                         # which would be broken by the default choice.

#Definition of the self-consistency procedure
 diemac   6.0            # Model dielectric preconditioner
  nstep   100             # Maxiumum number of SCF iterations
 tolvrs   1.0d-18        # Strict tolerance on (squared) residual of the
                         # SCF potential needed for accurate forces and
                         # stresses in the structural optimization, and
                         # accurate wave functions in the RF calculations
# enforce calculation of forces at each SCF step
 optforces 1


## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   telast_1.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% psp_files =  13al.pspnc, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = D. Hamann
#%% keywords = 
#%% description = 
#%%   AlAs in hypothetical wurzite (hexagonal) structure
#%%   Structural optimization run
#%%<END TEST_INFO>
