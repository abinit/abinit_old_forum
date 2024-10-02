# Crystalline rutile SnO2 : phonons

  ndtset  3

#Ground state calculation
  kptopt1   1             # Automatic generation of k points, taking
                          # into account the symmetry
  tolvrs1   1.0d-18       # SCF stopping criterion
    iscf1   5             # Self-consistent calculation, using algorithm 5
  prtden1   1             # Will be needed for dataset 4

# Response Function calculation : d/dk
  rfelfd2   2             # Activate the calculation of the d/dk perturbation
   rfdir2   1 1 1         # Need to consider the perturbation in the all directions
                         
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


#Response Function calculation : electric field perturbation and phonons
  rfphon3   1             # Activate the calculation of the atomic dispacement perturbations
 rfatpol3   1 6           # All the atoms will be displaced
  rfelfd3   3             # Activate the calculation of the electric field perturbation
   rfdir3   1 1 1         # All directions are selected.
    nqpt3   1
    rfasr3  1
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

# SC number of steps
nstep 50
diemac 9.86
#Definition of the plane wave basis set
    ecut   60
  ecutsm   0.5

#Definition of the k-point grid
  kptopt   1              # Use symmetry and treat only inequivalent points
   ngkpt   5 5 10
 nshiftk   1
  shiftk   0.5 0.5 0.5

! SnO2 tetragonal structure
spgroup 136
acell   8.6053072894E+00  8.6053072894E+00  5.6699342234E+00 Bohr
rprim   1.0  0.0  0.0   #Ortorhombic equivalent cell
        0.0  1.0  0.0   #wich is ortogonal vectors
        0.0  0.0  1.0   #with different values of a, b, c
ntypat   2
znucl   50 8
natom   6
typat   2*1 4*2
xred
0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
3.0408024279E-01  3.0408024279E-01  0.0000000000E+00
6.9591975721E-01  6.9591975721E-01  0.0000000000E+00
1.9591975721E-01  8.0408024279E-01  5.0000000000E-01
8.0408024279E-01  1.9591975721E-01  5.0000000000E-01
