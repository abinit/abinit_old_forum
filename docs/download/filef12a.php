# Crystalline AlAs : computation of the phonon spectrum
   ndtset   20
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

qpt2               0.00000000E+00  0.00000000E+00  0.00000000E+00   
qpt3      0.00000000E+00  0.00000000E+00  0.00000000E+00
qpt4      5.00000000E-01  0.00000000E+00  0.00000000E+00
qpt5      0.00000000E+00  2.50000000E-01  0.00000000E+00
qpt6      5.00000000E-01  2.50000000E-01  0.00000000E+00
qpt7      0.00000000E+00  5.00000000E-01  0.00000000E+00
qpt8      5.00000000E-01  5.00000000E-01  0.00000000E+00
qpt9      0.00000000E+00  0.00000000E+00  2.50000000E-01
qpt10     5.00000000E-01  0.00000000E+00  2.50000000E-01
qpt11     0.00000000E+00  2.50000000E-01  2.50000000E-01
qpt12     5.00000000E-01  2.50000000E-01  2.50000000E-01
qpt13     0.00000000E+00  5.00000000E-01  2.50000000E-01
qpt14     5.00000000E-01  5.00000000E-01  2.50000000E-01
qpt15     0.00000000E+00  0.00000000E+00  5.00000000E-01
qpt16     5.00000000E-01  0.00000000E+00  5.00000000E-01
qpt17     0.00000000E+00  2.50000000E-01  5.00000000E-01
qpt18     5.00000000E-01  2.50000000E-01  5.00000000E-01
qpt19     0.00000000E+00  5.00000000E-01  5.00000000E-01
qpt20     5.00000000E-01  5.00000000E-01  5.00000000E-01       
#Set 2 : Response function calculation of d/dk wave function 

    iscf2   -3         # Need this non-self-consistent option for d/dk
  kptopt2   2          # Modify default to use time-reversal symmetry
  rfphon2   0          # Cancel default
  rfelfd2   2          # Calculate d/dk wave function only
  tolwfr2   1.0d-22    # Use wave function residual criterion instead

#Set 3 : Response function calculation of Q=0 phonons and electric field pert.

  getddk3   2          # d/dk wave functions from last dataset
  kptopt3   2          # Modify default to use time-reversal symmetry
  rfelfd3   3          # Electric-field perturbation response only

#Sets 4-10 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
  rfatpol   1 2        # Treat displacements of all atoms
    rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-8     # This default is active for sets 3-10

#######################################################################
#Common input variables

#Definition of the unit cell
acell     6.1751299030E+01  7.1916802673E+00  7.9924668599E+00 Bohr
         # This is equivalent to   10.61 10.61 10.61
rprim     9.9999999292E-01  0.0000000000E+00 -1.1899496579E-04
          0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
         -1.2422665590E-04  0.0000000000E+00  9.9999999228E-01
#Definition of the atom types
   ntypat   2         # There are two types of atom
    znucl   32 34     # The keyword "znucl" refers to the atomic number of the 
                      # possible type(s) of atom. The pseudopotential(s) 
                      # mentioned in the "files" file must correspond
                      # to the type(s) of atom. Here, type 1 is the Aluminum,
                      # type 2 is the Arsenic.

#Definition of the atoms
    natom   8     # There are two atoms
    typat   1 1 1 1 2 2 2 2       # The first is of type 1 (Al), the second is of type 2 (As).
                       

xred     2.0781545355E-01  2.5000000000E-01  9.5583551927E-02
                       2.8698833336E-01  7.5000000000E-01  5.9274556981E-01
                       1.2551787978E-01  7.5000000000E-01  9.0441644807E-01
                       4.6344999977E-02  2.5000000000E-01  4.0725443019E-01
                       1.2141593181E-01  2.5000000000E-01  4.9388515323E-01
                       4.9488883215E-02  7.5000000000E-01 -3.8427889174E-03
                       2.1191740152E-01  7.5000000000E-01  5.0611484677E-01
                       2.8384445012E-01  2.5000000000E-01  1.0038427889E+00

#Gives the number of band, explicitely (do not take the default)
    nband   30         

#Exchange-correlation functional

      ixc   1             # LDA Teter Pade parametrization

#Definition of the planewave basis set

     ecut   40           # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
kptrlatt 2 0 0 0 4 0 0 0 4   
# ngkpt   4 4 4          
  nshiftk   1              # Use one copy of grid only (default)
   shiftk  3*0.0    # This gives the usual fcc Monkhorst-Pack grid

#Definition of the SCF procedure
     iscf   5          # Self-consistent calculation, using algorithm 5
    nstep   25         # Maximal number of SCF cycles
   diemac   9.0        # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1
