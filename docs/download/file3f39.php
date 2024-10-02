#Finite-difference calculation for strain  sigma=0.0001

   ndtset   1

# Set 1 : Self-consistent run for stress

  kptopt1   1
   rprim1   1.000000005           0.0001000000005     0
            0.0001000000005       1.000000005         0
            0                     0                   1.000000005

  chkprim   0
#Common input data

#Starting approximation for the unit cell

# relaxed lattice constants

  natom    28 
  acell    1.9693475248E+01  1.1503037857E+01  9.0341343414E+00

# Definition of the atom types and atoms
  ntypat  4
  typat   1 2 3 4 4 4 4
  znucl   3 26 15 8
  spgroup 62
  natrd   6

# spin-polarized case: antiferromagnetic         
   nsppol 2
   occopt 6
   spinat 0.0 0.0 0.0
          0.0 0.0  4.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0  
          0.0 0.0 -4.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 -4.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0  4.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0
          0.0 0.0 0.0

#Starting approximation for atomic positions in REDUCED coordinates
#based on ideal tetrahedral bond angles

# xred  COPY RELAXED RESULT FROM PREVIOUS CALCULATION
# Here is a set of default values, for automatic testing : suppress it and fill the previous line
  xred     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           2.7949753392E-01  2.5000000000E-01  9.8102720072E-01
           9.4846477299E-02  2.5000000000E-01  4.1959515502E-01
           9.7975401119E-02  2.5000000000E-01  7.4288958974E-01
           4.5562034628E-01  2.5000000000E-01  2.0328520601E-01
           1.6569203078E-01  4.5929105315E-02  2.8435643307E-01


#Gives the number of bands, explicitely (do not take the default)
#  nband   8             # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

#Definition of the plane wave basis set
  ecut 15
  ecutsm 1.0
  pawecutdg 50

#Definition of the k-point grid
  ngkpt    3 5 6          # 3x5x6 Monkhorst-Pack grid
  nshiftk  1              # Use one copy of grid only (default)
  shiftk   0.5 0.5 0.5    # This choice of origin for the k point grid
                          # preserves the hexagonal symmetry of the grid,
                          # which would be broken by the default choice.

#Definition of the self-consistency procedure
 diemac   2.0            # Model dielectric preconditioner
   iscf   17             # Use conjugate-gradient SCF cycle
  nstep   400            # Maxiumum number of SCF iterations
 tolvrs   1.0d-18        # Needed for good stress and polarization convergence
# enforce calculation of forces at each SCF step
 optforces 1

