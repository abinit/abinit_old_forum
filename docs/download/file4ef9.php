# Crystalline ZrO2 - fluorite - cubic fcc - Fm-3m #225 : computation of the phonon spectrum

   ndtset   18
#Set 1 : ground state self-consistency

  getwfk1   0            # Cancel default
  kptopt1   1            # Automatic generation of k points, taking
                         # into account the symmetry
    nqpt1   0            # Cancel default
  tolvrs1   1.0d-18      # SCF stopping criterion (modify default)
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

     qpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
     qpt3   0.00000000E+00  0.00000000E+00  0.00000000E+00
     qpt4   1.66666667E-01  0.00000000E+00  0.00000000E+00
     qpt5   3.33333333E-01  0.00000000E+00  0.00000000E+00
     qpt6   5.00000000E-01  0.00000000E+00  0.00000000E+00
     qpt7   1.66666667E-01  1.66666667E-01  0.00000000E+00
     qpt8   3.33333333E-01  1.66666667E-01  0.00000000E+00
     qpt9   5.00000000E-01  1.66666667E-01  0.00000000E+00
     qpt10 -3.33333333E-01  1.66666667E-01  0.00000000E+00
     qpt11 -1.66666667E-01  1.66666667E-01  0.00000000E+00
     qpt12  3.33333333E-01  3.33333333E-01  0.00000000E+00
     qpt13  5.00000000E-01  3.33333333E-01  0.00000000E+00
     qpt14 -3.33333333E-01  3.33333333E-01  0.00000000E+00
     qpt15  5.00000000E-01  5.00000000E-01  0.00000000E+00
     qpt16  5.00000000E-01  3.33333333E-01  1.66666667E-01
     qpt17 -3.33333333E-01  3.33333333E-01  1.66666667E-01
     qpt18 -3.33333333E-01  5.00000000E-01  1.66666667E-01

#Set 2 : Response function calculation of d/dk wave function

    iscf2   -3         # Need this non-self-consistent option for d/dk
  kptopt2   2          # Modify default to use time-reversal symmetry
  rfphon2   0          # Cancel default
  rfelfd2   2          # Calculate d/dk wave function only
  tolvrs2   0.0        # Cancel default for d/dk
  tolwfr2   1.0d-22    # Use wave function residual criterion instead

#Set 3 : Response function calculation of Q=0 phonons and electric field pert.

  getddk3   2          # d/dk wave functions from last dataset
  kptopt3   2          # Modify default to use time-reversal symmetry
  rfelfd3   3          # Electric-field perturbation response only

#Sets 4-17 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
  rfatpol   1 3        # Treat displacements of all atoms
    rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-8     # This default is active for sets 3-10

#######################################################################
#Common input variables

#Definition of the unit cell
    acell   3*9.46
   angdeg   90  90  90
   brvltt  -1
  spgroup   225

#Definition of the atom types
   ntypat   2
    znucl   40 8 8

#Definition of the atoms
    natom   3
    typat   1 2 2

     xred   0.00  0.00  0.00
            0.25  0.25  0.25
            0.75  0.75  0.75

#Gives the number of band, explicitely (do not take the default)
    nband   14

#Exchange-correlation functional

      ixc   3

#Definition of the planewave basis set

     ecut   50

#Definition of the k-point grid
  nshiftk   4
  shiftk    0.5  0.5  0.5
            0.5  0.0  0.0
            0.0  0.5  0.0
            0.0  0.0  0.5
  ngkpt     3*12

#Definition of the SCF procedure
    iscf    7              # Use Pulay mixing sheme for SCF cycle
npulayit    10             # Number of Pulay iterations
  nnsclo    4              # Number of non-self consistent loops
   nline    8              # Number of line minimisations

  diemac    4

  timopt    2
