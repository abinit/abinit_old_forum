#BiGaO3 tetragonal structure
#Structural optimization run
symmorphi 0
ixc 7
acell   6.8770439418E+00  6.8770439418E+00  8.8563513703E+00 Bohr   #from optimization

rprim     1 0 0                          
          0 1 0                         
          0 0 1                          
 
#Definition of the atoms
#***********************
 ntypat   3 
  znucl   83 31 8
  natom   5
  typat   1 2 3 3 3
#
#Starting approximation for atomic positions in REDUCED coordinates
#must be import from well relaxed structures
xred   0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      5.0000000000E-01  5.0000000000E-01  5.5662708469E-01
                      5.0000000000E-01  5.0000000000E-01  1.6787262673E-01
                      5.0000000000E-01  0.0000000000E+00  7.0207142055E-01
                      0.0000000000E+00  5.0000000000E-01  7.0207142055E-01


#Definition of the SCF procedure
#*******************************
  #iscf     5                        #let default for PAW calculation
   nstep    300
   diemac   9.0
   toldff   1.0d-7

#Definition of the plane wave basis set
#**************************************
  ecut       40.0                   # Maximum kinetic energy cutoff (Hartree)
  ecutsm     0.5                    # Smoothing energy needed for lattice paramete
  pawecutdg  60                     # optimization.  This will be retained for
                                    # consistency throughout.

#Definition of the k-point grid
#******************************

  ngkpt     8 8 8                  # 8x8x8 Monkhorst-Pack grid
#nshiftk    1                      # Use one copy of grid only (default)
#shiftk     0.0 0.0 0.5            # This choice of origin for the k point grid
                                   # preserves the hexagonal symmetry of the grid,
                                   # which would be broken by the default choice.

# Relaxation of atomic positions affacted by strain perturbation
#***************************************************************
   optcell   0
   ionmov    2
   tolmxf    1.0d-6
   ntime     100
   natfixx   5                     # Fix the position of two symmetry-equivalent atoms in doing the structural optimization
   iatfixx   1 2 3 4 5             # Choose atoms 1 and 2 as the fixed atoms (see discussion)
   natfixy   5                     # Fix the position of two symmetry-equivalent atoms in doing the structural optimization
   iatfixy   1 2 3 4 5             # Choose atoms 1 and 2 as the fixed atoms (see discussion)
   natfixz   1                     # Fix the position of two symmetry-equivalent atoms in doing the structural optimization
   iatfixz   1                     # Choose atoms 1 and 2 as the fixed atoms (see discussion)

# Berry phase calculation of the polarization
#********************************************
   berryopt -1
   rfdir 1 1 1

# definition of insulator====Do not use because we don't know if our system are really defined as insulator within ABINIT====
#*************************
#nband   23                       # no unoccupied states
#occopt  1                        # semiconductor (insulator) occupation
