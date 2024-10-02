# Crystalline Li : computation of the phonon spectrum

ndtset   10
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
     qpt8  -2.50000000E-01  2.50000000E-01  0.00000000E+00
     qpt9   5.00000000E-01  5.00000000E-01  0.00000000E+00
     qpt10 -2.50000000E-01  5.00000000E-01  2.50000000E-01

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
 acell
   6.6224091420E+00  6.6224091420E+00  6.6224091420E+00     
 
 # chkprim 0

 rprim
  -1.00000000000000E+000     1.00000000000000E+000      1.00000000000000E+000
   1.00000000000000E+000    -1.00000000000000E+000      1.00000000000000E+000
   1.00000000000000E+000     1.00000000000000E+000     -1.00000000000000E+000  
#Definition of the atom types
   ntypat   1         # There are one types of atom
   znucl   3          # The keyword "znucl" refers to the atomic number of the 
                      # possible type(s) of atom. The pseudopotential(s) 
                      # mentioned in the "files" file must correspond
                      # to the type(s) of atom. Here, type 1 is the Lithinum.

#Definition of the atoms
    natom   2         # There are two atom
    typat   1  1      # The type of atom is Li.
                       
     xred      
       0.0000000000E+00  2.4589689013E-32  0.0000000000E+00
       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01 

#Gives the number of band, explicitely (do not take the default)
    nband   4         

#Exchange-correlation functional

      ixc   11            # GGA, Perdew-Burke-Ernzerhof GGA functional

#Definition of the planewave basis set

     ecut   30           # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
  # kptopt     1
   ngkpt      6    6    6
   nshiftk    1
   shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
  # getwfk -1            # This is to speed up the calculation, by restarting
                        # from previous wavefunctions, transferred from the old 
                        # to the new k-points.

#Definition of the SCF procedure
     iscf   5          # Self-consistent calculation, using algorithm 5
    nstep   400        # Maximal number of SCF cycles
   diemac   12.0       # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = Li_1.in, Li_3.in, Li_4.in, Li_5.in, Li_6.in, Li_7.in
#%% [files]
#%% files_to_test = 
#%%   Li_1.out, tolnlines= 13, tolabs=  4.294e-05, tolrel=  5.000e-04, fld_options=-medium
#%% psp_file =  psppar_PBE.Li 
#%% [paral_info]
#%% max_nprocs = 1
#%% [extra_info]
#%% author = 
#%% keywords = NC, DFPT
#%% description = 
#%%<END TEST_INFO>
