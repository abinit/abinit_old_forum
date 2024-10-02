# q-SiO2 : computation of the phonon spectrum

   ndtset   16
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
qpt2  0.00000 0.00000 0.00000
qpt3  0.00000 0.00000 0.00000
qpt4  0.25000 0.00000 0.00000
qpt5  0.50000 0.00000 0.00000
qpt6  0.25000 0.25000 0.00000
qpt7  0.50000 0.25000 0.00000
qpt8  -0.25000  0.25000 0.00000
qpt9  0.50000 0.50000 0.00000
qpt10 0.00000 0.00000 0.50000
qpt11 0.25000 0.00000 0.50000
qpt12 0.50000 0.00000 0.50000
qpt13 0.25000 0.25000 0.50000
qpt14 0.50000 0.25000 0.50000
qpt15 -0.25000  0.25000 0.50000
qpt16 0.50000 0.50000 0.50000

                         # This is the default for all datasets and must
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
  rfatpol   1 9        # Treat displacements of all atoms
    rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-8     # This default is active for sets 3-10

#######################################################################
#Common input variables

#Definition of the unit cell
acell   9.3824902498E+00  9.3824902498E+00  1.0249874545E+01
    angdeg  90 90 120
    #spgroup 154

#Definition of the atom types
   ntypat   2         # There are two types of atom
    znucl   14 8     # The keyword "znucl" refers to the atomic number of the 
                      # possible type(s) of atom. The pseudopotential(s) 
                      # mentioned in the "files" file must correspond
                      # to the type(s) of atom. Here, type 1 is the Aluminum,
                      # type 2 is the Arsenic.

#Definition of the atoms
    natom   9        
    typat   1 1 1 2 2 2 2 2 2       # The first is of type 1 (Si), the second is of type 2 (O).
                       
     xred  0.524800    0.000000    0.333333      
          0.000000    0.524800    0.666667        
          0.475200    0.475200    0.000000  
          0.157000    0.416000    0.876800         
          0.584000    0.741000    0.210133         
          0.259000    0.843000    0.543467        
          0.416000    0.157000    0.123200       
          0.741000    0.584000    0.789867         
          0.843000    0.259000    0.456533


#Gives the number of band, explicitely (do not take the default)
    nband 26          

#Exchange-correlation functional

      ixc   1             # LDA Teter Pade parametrization

#Definition of the planewave basis set

     ecut   24           # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
    ngkpt   4  4  2
    nshiftk   1              # Use one copy of grid only (default)
   shiftk   0.5 0.5 0.5    # This gives the usual fcc Monkhorst-Pack grid

#chksymbreak 0           
           
           

#Definition of the SCF procedure
     iscf   5          # Self-consistent calculation, using algorithm 5
    nstep   25         # Maximal number of SCF cycles
   diemac   12.0        # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).
