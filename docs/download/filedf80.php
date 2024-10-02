 Crystalline GaN : computation of the phonon spectrum
ndtset   3
autoparal 1
#chksymbreak=0
#Set 1 : ground state self-consistency
  getwfk1   0            # Cancel default
  kptopt1   1            # Automatic generation of k points, taking
                         # into account the symmetry
  nqpt1   0              # Cancel default
  tolvrs1   1.0d-15      # SCF stopping criterion (modify default)
  rfphon1   0            # Cancel default

#Q vectors for all datasets

#Complete set of sGGymmetry-inequivalent qpt chosen to be commensurate
# with kpt mesh so that only one set of GS wave functions is needed.
#Generated automatically by running GS calculation with kptopt=1,
# nshift=0, shiftk=0 0 0 (to include gamma) and taking output kpt set
# file as qpt set. Set nstep=1 so only one iteration runs.

     nqpt   1            # One qpt for each dataset (only 0 or 1 allowed)
                         # This is the default for all datasets and must
                         #  be explicitly turned off for dataset 1.
   qpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
   qpt3   0.00000000E+00  0.00000000E+00  0.00000000E+00

#Set 2 : Response function calculation of d/dk wave function

  rfelfd2   2          # Calculate d/dk wave function only
  iscf2   -3          # Need this non-self-consistent option for d/dk
  kptopt2   2          # Modify default to use time-reversal symmetry
  rfphon2   0          # Cancel default
  tolwfr2   1.0d-20    # Use wave function residual criterion instead

#Set 3 : Response function calculation of Q=0 phonons and electric field pert.
  getddk3   2          # d/dk wave functions from last dataset
  kptopt3   2          # Modify default to use time-reversal symmetry
  rfelfd3   3          # Electric-field perturbation response only

#Sets 4-17 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
   rfatpol  1 4        # Treat displacements of all atoms
   rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-15     # This default is active for sets 3-10


acell     5.9966182313E+00  5.9966182313E+00  9.7082969083E+00
angdeg 90.000  90.000 120.000
spgroup 186

ntypat 2                 # Two types of atoms
znucl 31 7               # Ga and N atomic numbers of the

natom 4
typat 1 2 1 2

             xred     3.3333333333E-01  6.6666666667E-01 -6.7120060053E-04
                       3.3333333333E-01  6.6666666667E-01  3.7687174200E-01
                       6.6666666667E-01  3.3333333333E-01  4.9932879940E-01
                       6.6666666667E-01  3.3333333333E-01  8.7687174200E-01

   ecut      100              # Kinetic energy cut-off (in Ha)
   ecutsm  0.5
# Definition of the k-point grid
   kptopt    1
   shiftk    0.0 0.0 0.0
   ngkpt     8 8 8
   nshiftk   1


 nstep     70
  diemac 9.0

