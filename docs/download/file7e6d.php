# Crystalline AlAs : computation of the phonon spectrum

   ndtset   25        
#Set 1 : ground state self-consistency
   nline1 20
   nnsclo1 2
  getwfk1   0            # Cancel default
  kptopt1   1            # Automatic generation of k points, taking
                         # into account the symmetry
    nqpt1   0            # Cancel default
  tolwfr1 1.0d-22      # SCF stopping criterion (modify default)
  rfphon1   0            # Cancel default
 
#Q vectors for all datasets

#Complete set of symmetry-inequivalent qpt chosen to be commensurate
# with kpt mesh so that only one set of GS wave functions is needed.
#Generated automatically by running GS calculation with kptopt=1,
# nshift=0, shiftk=0 0 0 (to include gamma) and taking output kpt set
# file as qpt set. Set nstep=1 so only one iteration runs.

     nqpt   1            # One qpt for each dataset (only 0 or 1 allowed)
                         # This is the default for all datasets and must
                         #  be explicitly turned off for dataset 1.

    qpt2               0.00000000E+00  0.00000000E+00  0.00000000E+00
    qpt3                   3.33333333E-01  0.00000000E+00  0.00000000E+00
    qpt4                   0.00000000E+00  1.66666667E-01  0.00000000E+00
    qpt5                   3.33333333E-01  1.66666667E-01  0.00000000E+00
    qpt6                   0.00000000E+00  3.33333333E-01  0.00000000E+00
    qpt7                   3.33333333E-01  3.33333333E-01  0.00000000E+00
    qpt8                   0.00000000E+00  5.00000000E-01  0.00000000E+00
    qpt9                   3.33333333E-01  5.00000000E-01  0.00000000E+00
    qpt10                   0.00000000E+00  0.00000000E+00  2.50000000E-01
    qpt11                   3.33333333E-01  0.00000000E+00  2.50000000E-01
    qpt12                   0.00000000E+00  1.66666667E-01  2.50000000E-01
    qpt13                   3.33333333E-01  1.66666667E-01  2.50000000E-01
    qpt14                   0.00000000E+00  3.33333333E-01  2.50000000E-01
    qpt15                   3.33333333E-01  3.33333333E-01  2.50000000E-01
    qpt16                   0.00000000E+00  5.00000000E-01  2.50000000E-01
    qpt17                   3.33333333E-01  5.00000000E-01  2.50000000E-01
    qpt18                   0.00000000E+00  0.00000000E+00  5.00000000E-01
    qpt19                   3.33333333E-01  0.00000000E+00  5.00000000E-01
    qpt20                   0.00000000E+00  1.66666667E-01  5.00000000E-01
    qpt21                   3.33333333E-01  1.66666667E-01  5.00000000E-01
    qpt22                   0.00000000E+00  3.33333333E-01  5.00000000E-01
    qpt23                   3.33333333E-01  3.33333333E-01  5.00000000E-01
    qpt24                   0.00000000E+00  5.00000000E-01  5.00000000E-01
    qpt25                   3.33333333E-01  5.00000000E-01  5.00000000E-01

#Set 2 : Response function calculation of d/dk wave function 

    

#Sets 4-10 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
  rfatpol   1 8        # Treat displacements of all atoms
    rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-10     # This default is active for sets 3-10

#######################################################################
#Common input variables


#Definition of the k-point grid
    ngkpt   3 6 4          
  nshiftk   1              # Use one copy of grid only (default)
   shiftk   0 0 0    # This gives the usual fcc Monkhorst-Pack grid
            

#Definition of the SCF procedure
     iscf   7          # Self-consistent calculation, using algorithm 5
    nstep   500       # Maximal number of SCF cycles
   
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1

acell    1.0095896651E+01  5.6096055520E+00  7.5051183985E+00 Bohr

  angdeg 90.00 90.00 90.00
                #Definition of the atom types and atoms
  ntypat   2 
  znucl   5 26
  natom   8
  typat   1 1 1 1 2 2 2 2

#Starting approximation for atomic positions in REDUCED coordinates
#based on ideal tetrahedral bond angles

# xred  COPY RELAXED RESULT FROM PREVIOUS CALCULATION
# Here is a set of default values, for automatic testing : suppress it and fill the previous line
  xred
  3.70536605355309E-02  2.50000000000000E-01  6.17875614748110E-01
  4.62946339462469E-01  7.50000000000000E-01  1.17875614748110E-01
  5.37053660535531E-01  2.50000000000000E-01  8.82124385251890E-01
  9.62946339462469E-01  7.50000000000000E-01  3.82124385251890E-01
  1.80206880904572E-01  2.50000000000000E-01  1.21089645963796E-01
  3.19793119093428E-01  7.50000000000000E-01  6.21089645963796E-01
  6.80206880904572E-01  2.50000000000000E-01  3.78910354036204E-01
  8.19793119093428E-01  7.50000000000000E-01  8.78910354036204E-01

#Gives the number of bands, explicitely (do not take the default)
  nband  100      # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

#Definition of the plane wave basis set
  ecut   60 # Maximum kinetic energy cutoff (Hartree)
 #ecutsm   0.5            # Smoothing energy needed for lattice paramete
                         # optimization.  This will be retained for
                         # consistency throughout.
ixc     7

occopt  7
tsmear   0.001
 


