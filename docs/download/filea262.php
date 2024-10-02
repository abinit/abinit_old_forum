# CO2 P42/mnm : Calculation of response function for phonon at ecut=40 Ha

   ndtset   20
#   jdtset 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 #restarted from dtset 2 using iscf 7 because iscf 5 did not converge after 40 iter
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
     qpt4   2.50000000E-01  0.00000000E+00  0.00000000E+00
     qpt5   5.00000000E-01  0.00000000E+00  0.00000000E+00
     qpt6   2.50000000E-01  2.50000000E-01  0.00000000E+00
     qpt7   5.00000000E-01  2.50000000E-01  0.00000000E+00
     qpt8   5.00000000E-01  5.00000000E-01  0.00000000E+00
     qpt9   0.00000000E+00  0.00000000E+00  2.50000000E-01
     qpt10  2.50000000E-01  0.00000000E+00  2.50000000E-01       
     qpt11  5.00000000E-01  0.00000000E+00  2.50000000E-01
     qpt12  2.50000000E-01  2.50000000E-01  2.50000000E-01
     qpt13  5.00000000E-01  2.50000000E-01  2.50000000E-01
     qpt14  5.00000000E-01  5.00000000E-01  2.50000000E-01
     qpt15  0.00000000E+00  0.00000000E+00  5.00000000E-01
     qpt16  2.50000000E-01  0.00000000E+00  5.00000000E-01
     qpt17  5.00000000E-01  0.00000000E+00  5.00000000E-01
     qpt18  2.50000000E-01  2.50000000E-01  5.00000000E-01
     qpt19  5.00000000E-01  2.50000000E-01  5.00000000E-01
     qpt20  5.00000000E-01  5.00000000E-01  5.00000000E-01
     
               
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

#Sets 4-20 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
  rfatpol   1 6        # Treat displacements of all atoms
    rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-8     # This default is active for sets 3-10




#Definition of the k-point grids

    nshiftk 1
    shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids

    ngkpt 4 4 4
    nband 16
    
    ecut 40
   

#Definition of the unit cell
acell 6.7564414225E+00   6.7564414225E+00  7.6456726025E+00      #obtained from run 12, optimized for hydrostatic stress tensor 
rprim  1.0  0.0  0.0   # primitive vectors (to be scaled by acell)
       0.0  1.0  0.0   
       0.0  0.0  1.0

#Definition of the atom types
ntypat 2          # There is 2 types of atom
znucl 6 8         # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom, here carbon and oxygen
                         

#Definition of the atoms
natom 6           # There are 6 atoms
typat 1 1 2 2 2 2         # first 2 atoms are type 1 (C), and 4 last are type 2 (O)
# This keyword indicate that the location of the atoms
# will follow, one triplet of number for each atom                  
xred       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00      # obtained from run 12
           5.0000000000E-01  5.0000000000E-01  5.0000000000E-01 
           7.6976780464E-01  7.6976780464E-01  0.0000000000E+00 
           2.3023219536E-01  2.3023219536E-01  0.0000000000E+00 
           2.6976780464E-01  7.3023219536E-01  5.0000000000E-01 
           7.3023219536E-01  2.6976780464E-01  5.0000000000E-01 



#Definition of the SCF procedure
# iscf 7 # use default
# ixc   1           # LDA Teter Pade parametrization
nstep 50          # Maximal number of SCF cycles

#toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
#toldff 5.0d-6     # Sets a tolerance for differences of forces (in hartree/Bohr) that, reached TWICE successively, will cause one SCF cycle to stop (and ions to be moved). 
diemac 2.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
