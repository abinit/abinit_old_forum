# Crystalline AlAs : computation of the phonon spectrum

   ndtset   2 
   jdtset   1 3
#Set 1 : ground state self-consistency

  getwfk1   0            # Cancel default
  kptopt1   1            # Automatic generation of k points, taking
                         # into account the symmetry
    nqpt1   0            # Cancel default
  tolvrs1   1.0d-12      # SCF stopping criterion (modify default)
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
     qpt4    3.33333333E-01  0.00000000E+00  0.00000000E+00
     qpt5    0.00000000E+00  3.33333333E-01  0.00000000E+00
     qpt6    3.33333333E-01  3.33333333E-01  0.00000000E+00
     qpt7   -3.33333333E-01  3.33333333E-01  0.00000000E+00
#Set 2 : Response function calculation of d/dk wave function 

    iscf2   -3         # Need this non-self-consistent option for d/dk
  kptopt2   2          # Modify default to use time-reversal symmetry
  rfphon2   0          # Cancel default
  rfelfd2   2          # Calculate d/dk wave function only
  tolwfr2   1.0d-22    # Use wave function residual criterion instead

#Set 3 : Response function calculation of Q=0 phonons and electric field pert.

#  getddk3   2          # d/dk wave functions from last dataset
  kptopt3   2          # Modify default to use time-reversal symmetry
  rfelfd3   3          # Electric-field perturbation response only

#Sets 4-10 : Finite-wave-vector phonon calculations (defaults for all datasets)

   getwfk   1          # Use GS wave functions from dataset1
   kptopt   3          # Need full k-point set for finite-Q response
   rfphon   1          # Do phonon response
  rfatpol   1 8        # Treat displacements of all atoms
    rfdir   1 1 1      # Do all directions (symmetry will be used)
   tolvrs   1.0d-8     # This default is active for sets 3-10

#######################################################################
#Common input variables

#Definition of lattice parameters
#********************************
   acell       12.9625 12.9625 43.0695
   rprim       1.0 0.0 0.0
              -0.5 0.86602540378 0.0
               0.0 0.0 1.0

#Definition of atomic positions and types
#*************************************
   natom       8
   ntypat      2
   znucl       24 53
   typat       2 2 2 2 2 2 1 1
   xred        
       0.666714806338      0.973608342883      0.134076419841
       0.026400804854      0.693103640515      0.134058575160
       0.306877207350      0.333254069862      0.134075994983
       0.666741640209      0.693217491849      1.000963393086
       0.306809058879      0.973510096552      1.000986926089
       0.026506807933      0.333312603812      1.000965469541
       0.999914825589      0.000021921136      0.067534532860
       0.333354856850      0.666651932387      0.067548687444

# Polarization
#*******************************
          nsppol    2
spinat  0.0 0.0 0.0
        0.0 0.0 0.0
        0.0 0.0 0.0
        0.0 0.0 0.0 
        0.0 0.0 0.0
        0.0 0.0 0.0
        0.0 0.0 4.0
        0.0 0.0 4.0
occopt 7
#Gives the number of band, explicitely (do not take the default)
    nband   35

#Definition of the planewave basis set

     ecut   25           # Maximal kinetic energy cut-off, in Hartree
pawecutdg 50
#Definition of the k-point grid
    ngkpt   6 6  1
  nshiftk   1              # Use one copy of grid only (default)
   shiftk   0.5 0.5 0.5    # This gives the usual fcc Monkhorst-Pack grid

#Definition of the SCF procedure
    nstep    150         # Maximal number of SCF cycles
   diemac   12

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = trf2_1.in, trf2_3.in, trf2_4.in, trf2_5.in, trf2_6.in, trf2_7.in
#%% [files]
#%% files_to_test = 
#%%   trf2_1.out, tolnlines= 14, tolabs=  5.000e-05, tolrel=  5.000e-04, fld_options=-medium
#%% psp_files =  13al.981214.fhi, 33as.pspnc 
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = Unknown
#%% keywords = NC, DFPT
#%% description =  Crystalline AlAs : computation of the phonon spectrum
#%%<END TEST_INFO>
