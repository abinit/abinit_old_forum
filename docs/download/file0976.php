# Crystalline AlAs : computation of the response to homogeneous
# electric field and atomic displacements, at q=0
#

  ndtset  3
#ixc  11
  iscf 7
#Ground state calculation
  kptopt1   1             # Automatic generation of k points, taking
                          # into account the symmetry
  tolvrs1   1.0d-18       # SCF stopping criterion
    iscf1   5             # Self-consistent calculation, using algorithm 5
   nstep1   16            # Limit of step number, for better portability of the
                          #  automatic testing procedure

#Response Function calculation : d/dk
  rfelfd2   2             # Activate the calculation of the d/dk perturbation
   rfdir2   1 1 1         # Need to consider the perturbation in the x-direction only

    nqpt2   1
     qpt2   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk2   -1            # Uses as input the output wf of the previous dataset

  kptopt2   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.

    iscf2  -3             # The d/dk perturbation must be treated
                          # in a non-self-consistent way
  tolwfr2   1.0d-22       # Must use tolwfr for non-self-consistent calculations
                          # Here, the value of tolwfr is very low.

#Response Function calculation : electric field perturbation and phonons
  rfphon3   1             # Activate the calculation of the atomic dispacement perturbations
 rfatpol3   1 2           # All the atoms will be displaced
  rfelfd3   3             # Activate the calculation of the electric field perturbation
   rfdir3   1 1 1         # Need to consider the perturbation in the x-direction only
   rfstrs3  3
    nqpt3   1
     qpt3   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk3   -2            # Uses as input wfs the output wfs of the dataset 1
  getddk3   -1            # Uses as input ddk wfs the output of the dataset 2

  kptopt3   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.
  tolvrs3   1.0d-8
    iscf3   5             # Self-consistent calculation, using algorithm 5


#######################################################################
#Common input variables

#Definition of the unit cell
acell 3*6.32 angstrom         # This is equivalent to   10.61 10.61 10.61
rprim  0.0  0.5  0.5   # In lessons 1 and 2, these primitive vectors
       0.5  0.0  0.5   # (to be scaled by acell) were 1 0 0  0 1 0  0 0 1
       0.5  0.5  0.0   # that is, the default.

#Definition of the atom types
ntypat 2                # There are two types of atom
znucl 48 25 52           # The keyword "znucl" refers to the atomic number of the
                       # possible type(s) of atom. The pseudopotential(s)
                       # mentioned in the "files" file must correspond
                       # to the type(s) of atom. Here, type 1 is the Aluminum,
                       # type 2 is the Arsenic.
npsp 3 
ntypalch 2
mixalch 0.75  0.25  0.00
        0.00  0.00  1.00
#Definition of the atoms
natom 2                # There are two atoms
typat 1 2 3              # The first is of type 1 (Al), the second is of type 2 (As).
xred                   # This keyword indicate that the location of the atoms
                       # will follow, one triplet of number for each atom
   0.0  0.0  0.0       # Triplet giving the REDUCED coordinate of atom 1.
   0.25 0.25 0.25      # Triplet giving the REDUCED coordinate of atom 2.

#Gives the number of band, explicitely (do not take the default)
nband  10               # For an insulator (if described correctly as an insulator
                       # by DFT), there is no need to include conduction bands
                       # in response-function calculations

#Definition of the planewave basis set
 ecut    70.0           # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
kptrlatt -7  7  7      # In cartesian coordinates, this grid is simple cubic, and
          7 -7  7      # actually corresponds to the so-called 8x8x8 Monkhorst-Pack grid.
          7  7 -7      # It might as well be obtained through the use of
                       # ngkpt, nshiftk and shiftk .
occopt 1

#Definition of the SCF procedure
nstep 500000               # Maximal number of SCF cycles
diemac 9.0             # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smalle that the one of Si (=12).

#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = t69.in, t70.in
#%% [files]
#%% files_to_test = 
#%%   t69.out, tolnlines = 0, tolabs = 5.000e-07, tolrel = 4.000e-08, fld_options =  -easy
#%% psp_files = 13al.981214.fhi, 33as.pspnc
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = X. Wu
#%% keywords = NC, DFPT
#%% description = 
#%%   This is a DDB file generating run which prepares for the calculation #70.
#%%   The material is Crystalline AlAs (face-center cubic), with ecut=3 Hartree.
#%%   Response function calculations are with respect to electric field, strain,
#%%   and displacement.
#%%<END TEST_INFO>
