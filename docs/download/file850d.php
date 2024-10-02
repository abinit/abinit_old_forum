# Phonon at gamma point for V2O5 
pawecutdg 10
  ndtset  3

#Ground state calculation
  kptopt1   1             # Automatic generation of k points, taking
                          # into account the symmetry
  tolvrs1   1.0d-18       # SCF stopping criterion
#    iscf1   5             # Self-consistent calculation, using algorithm 5

#Response Function calculation : d/dk
  rfelfd2   2             # Activate the calculation of the d/dk perturbation
   rfdir2   1 1 1        # Need to consider the perturbation in the x-direction only
                          # This is rather specific, due to the high symmetry of the AlAs crystal
                          # In general, just use rfdir 1 1 1
                          # In the present version of ABINIT (v4.6), symmetry cannot be used
                          # to reduce the number of ddk perturbations

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
 rfatpol3   1 14           # All the atoms will be displaced
  rfelfd3   3             # Activate the calculation of the electric field perturbation
   rfdir3   1 1 1         # All directions are selected. However, symmetries will be used to decrease
                          # the number of perturbations, so only the x electric field is needed
                          # (and this explains why in the second dataset, rfdir was set to 1 0 0).

    nqpt3   1
     qpt3   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk3   -2            # Uses as input wfs the output wfs of the dataset 1
  getddk3   -1            # Uses as input ddk wfs the output of the dataset 2

  kptopt3   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.
  tolvrs3   1.0d-12
#    iscf3   5             # Self-consistent calculation, using algorithm 5


#######################################################################
#Common input variables

#Definition of the unit cell
acell 2.1754500000E+01  6.7350000000E+00  8.2543000000E+00  Bohr          # This is equivalent to   10.61 10.61 10.61
rprim  1.0  0.0  0.0   # In lessons 1 and 2, these primitive vectors 
       0.0  1.0  0.0   # (to be scaled by acell) were 1 0 0  0 1 0  0 0 1 
       0.0  0.0  1.0   # that is, the default.

#Definition of the atom types
ntypat 2               # There are two types of atom
znucl 23 8            # The keyword "znucl" refers to the atomic number of the 
                       # possible type(s) of atom. The pseudopotential(s) 
                       # mentioned in the "files" file must correspond
                       # to the type(s) of atom. Here, type 1 is the Aluminum,
                       # type 2 is the Arsenic.

#Definition of the atoms
natom 14                # There are two atoms
typat 1 1 1 1 2 2 2 2 2 2 2 2 2 2             

xred    0.10118    0.25      -0.1083
        0.39882    0.25      -0.1083
       -0.10118    0.75       0.1083
        0.60118    0.75       0.1083
        0.10430    0.25      -0.469
        0.39570    0.25      -0.469
       -0.10430    0.75       0.469
        0.60430    0.75       0.469
       -0.0689     0.25       0.003
        0.5689     0.25       0.003
        0.0689     0.75      -0.003
        0.4311     0.75      -0.003
        0.25       0.25       0.001
        0.75       0.75       0.001
 


#Gives the number of band, explicitely (do not take the default)
nband  40               # For an insulator (if described correctly as an insulator 
                       # by DFT), there is no need to include conduction bands 
                       # in response-function calculations

#Exchange-correlation functional
#ixc 1             # LDA Teter Pade parametrization

#Definition of the planewave basis set
 ecut    40.0           # Maximal kinetic energy cut-off, in Hartree

#Definition of the k-point grid
kptrlatt -4  4  4      # In cartesian coordinates, this grid is simple cubic, and
          4 -4  4      # actually corresponds to the so-called 8x8x8 Monkhorst-Pack grid.
          4  4 -4      # It might as well be obtained through the use of
                       # ngkpt, nshiftk and shiftk .


#Definition of the SCF procedure
nstep 600               # Maximal number of SCF cycles
#diemac 9.0             # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1




