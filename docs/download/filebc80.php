# Crystalline NaH : computation of the phonon spectrum

   ndtset   10
#Set 1 : ground state self-consistency

  getwfk1   0            # Cancel default
#  kptopt1   1            # Automatic generation of k points, taking
                         # into account the symmetry
    nqpt1   0            # Cancel default
  tolvrs1   1.0d-21      # SCF stopping criterion (modify default)
  rfphon1   0            # Cancel default
  prtwf1    1
 
#Q vectors for all datasets

#Complete set of symmetry-inequivalent qpt chosen to be commensurate
# with kpt mesh so that only one set of GS wave functions is needed.
#Generated automatically by running GS calculation with kptopt=1,
# nshift=0, shiftk=0 0 0 (to include gamma) and taking output kpt set
# file as qpt set. Set nstep=1 so only one iteration runs.

     nqpt   1            # One qpt for each dataset (only 0 or 1 allowed)
                         # This is the default for all datasets and must
                         #  be explicitly turned off for dataset 1.
                         #
qpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
qpt3   0.00000000E+00  0.00000000E+00  0.00000000E+00
qpt4   2.50000000E-01  0.00000000E+00  0.00000000E+00
qpt5   5.00000000E-01  0.00000000E+00  0.00000000E+00
qpt6   2.50000000E-01  2.50000000E-01  0.00000000E+00
qpt7   5.00000000E-01  2.50000000E-01  0.00000000E+00
qpt8  -2.50000000E-01  2.50000000E-01  0.00000000E+00
qpt9   5.00000000E-01  5.00000000E-01  0.00000000E+00
qpt10 -2.50000000E-01  5.00000000E-01  2.50000000E-01
                         
                  #nqpt 3-nkpt+2 are copied from make_qpt from kpt in
                  #the make_qpt.out file.
                  #insert nqpt 2 = gamma because it is the electrical part 
                  #of the phonon around the gamma point. Think forces
                  #due to charges moving


#Set 2 : Response function calculation of d/dk wave function 

    iscf2   -3         # Need this non-self-consistent option for d/dk
#  kptopt2   2          # Modify default to use time-reversal symmetry
  rfphon2   0          # Cancel default
  rfelfd2   2          # Calculate d/dk wave function only
  tolwfr2   1.0d-25    # Use wave function residual criterion instead

  prtwf2    1

#Set 3 : Response function calculation of Q=0 phonons and electric field pert.

  getddk3   2          # d/dk wave functions from last dataset
#  kptopt3   2          # Modify default to use time-reversal symmetry
  rfelfd3   3          # Electric-field perturbation response only

#Sets 4-11 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
  rfatpol   1 2        # Treat displacements of all atoms
    rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-11    # This default is active for sets 3-10

   prtden   0
   prtwf    0

#######################################################################
#Common input variables

#Definition of the unit cell
acell    6.4410481435E+00  6.4410481435E+00  6.4410481435E+00 Bohr

            rprim    7.0710678119E-01  7.0710678119E-01  0.0000000000E+00
                     0.0000000000E+00  7.0710678119E-01  7.0710678119E-01
                     7.0710678119E-01  0.0000000000E+00  7.0710678119E-01

             xred    5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00

#Definition of the atom types
   ntypat   2         # There are two types of atom
    znucl 1    11     # The keyword "znucl" refers to the atomic number of the 
                      # possible type(s) of atom. The pseudopotential(s) 
                      # mentioned in the "files" file must correspond
                      # to the type(s) of atom. Here, type 1 is the Aluminum,
                      # type 2 is the Arsenic.

#Definition of the atoms
    natom   2         # There are two atoms
    typat 1 2         # The first is of type 1 (Al), the second is of type 2 (As).

#Gives the number of band, explicitely (do not take the default)
    nband   10

#Definition of the planewave basis set

     ecut   40 Ha         # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid #DEFINED BY findk DIRECTORY
ngkpt 8 8 8

nshiftk 1

shiftk 3*0.0

#Definition of the SCF procedure
#     iscf   7          # Self-consistent calculation, using algorithm 5
    nstep  3000         # Maximal number of SCF cycles
   diemac  12.0        # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                     
  occopt   7
  tsmear  0.01 eV
