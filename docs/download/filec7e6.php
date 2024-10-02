#Al fcc metal - elastic constant calculation

   ndtset   12        # Total number of datasets (3*4)
   udtset   3  4      # Double loop for k-sample convergence study

# Set 1 : Initial self-consistent and lattice optimization run

  getwfk?1   0
  ionmov?1   2        # Broyden lattice optimization scheme
   ntime?1   30        # Maximim lattice optimization steps
 optcell?1   1        # Optimize cell volume only
 strfact?1   100      # Test convergence of stresses (Hartree/bohr^3) by
                      # multiplying by this factor and applying force
                      # convergence test
  tolmxf?1   1.0e-6   # Convergence limit for forces as above
  tolvrs?1   1.0d-18  # Need excellent convergence of GS quantities for RF runs

# Set 2 : Additional iteration to print density just at converged acell

  prtden?2   1        # Third dataset needs density
  tolvrs?2   1.0d-18

# Set 3 : Converge unoccupied wave functions

  getden?3   -1       # Use density from previout set
  tolwfr?3   5.0d-19  # Only wave function convergence can be used with
                      # non-self-consistent calculation
  tolwfr23   1.0d-31  # This is simply for a reason of portability of automatic tests 
  nstep23    40        # This is simply for a reason of portability of automatic tests
  nstep33    50       # This is simply for a reason of portability of automatic tests

# Set 4 : response-function calculations for all needed perturbations

  kptopt?4   2        # Time-reversal only for RF calculation
    nqpt?4   1
     qpt?4   0  0  0  # By symmetry, only need one direction
   rfdir?4   1  0  0
  rfstrs?4   3        # Need both unaxial and shear strains
  tolvrs?4   1.0d-12  # Need reasonable convergence of 1st-order quantities

getcell   -1         # Start from optimized (datasets ?2-?4) or previously
                     # optimized (datasets ?1) acell
getwfk   -1         # Use last set of wave functions (except datasets ?1)

acell  3*5.7 
natom    1
ntypat   1
typat    1   
znucl    24
xred     0 0 0
         

rprim -0.5 0.5 0.5
       0.5 -0.5 0.5
       0.5 0.5 -0.5


prtcif 1
#Definition of the planewave basis set

ecut  100         # Maximal kinetic energy cut-off, in Hartree
ecutsm 0.5
#Definition of the k-point grid
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt1?   6  6  6
ngkpt2?   8  8  8
ngkpt3?   10 10 10 # This is a 2x2x2 grid based on the primitive vectors
nshiftk 2          # of the reciprocal space (that form a BCC lattice !),
                   # repeated four times, with different shifts :
shiftk 0.25 0.25 0.25
       -0.25 -0.25 -0.25
               

#Definition of the SCF procedure
nstep  200         
                   
                  
                 
ixc 11 #GGA-PBE
occopt 3 #Cold smearing
tsmear 0.02 #Température de smearing en Ha

nband 27
optforces 1

#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% [files]
#%% files_to_test = 
#%%   tbase3_1.out, tolnlines=  0, tolabs=  0.000e+00, tolrel=  0.000e+00
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = Unknown
#%% keywords = 
#%% description = Crystalline silicon: computation of the total energy
#%%<END TEST_INFO>
