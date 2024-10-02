# Crystalline ZrO2 - fluorite : computation of the response to atomic displacements, at q=X

  ndtset    2

#Ground state calculation
  kptopt1   1             # Automatic generation of k points, taking
                          # into account the symmetry
  tolvrs1   1.0d-15       # SCF stopping criterion
    iscf1   5             # Self-consistent calculation, using algorithm 5

#Response Function calculation : electric field perturbation and phonons
  rfphon2   1             # Activate the calculation of the atomic dispacement perturbations
 rfatpol2   1 3           # All the atoms will be displaced
   rfdir2   1 1 1         # All directions are selected. However, symmetries will be used to decrease
                          # the number of perturbations, so only the x electric field is needed
                          # (and this explains why in the second dataset, rfdir was set to 1 0 0).

    nqpt2   1
     qpt2   0.0 0.5 0.5   # This is a calculation at X point

  getwfk2   1             # Uses as input wfs the output wfs of the dataset 1

  kptopt2   3             # Automatic generation of k points,
                          # no use of symmetries to decrease 
                          # the size of the k point set.
  tolvrs2   1.0d-8
    iscf2   5             # Self-consistent calculation, using algorithm 5


#######################################################################
#Common input variables

#Definition of the unit cell
acell   3*9.47118842767
rprim   0.0  0.5  0.5
        0.5  0.0  0.5
        0.5  0.5  0.0

#Definition of the atom types
ntypat  2
znucl   40 8 8

#Definition of the atoms
natom   3
typat   1 2 2
xred    0.00  0.00  0.00
        0.25  0.25  0.25
        0.75  0.75  0.75

#Gives the number of band, explicitely (do not take the default)
nband   14

#Exchange-correlation functional
ixc     3

#Definition of the planewave basis set
ecut    100
ecutsm  0.5

#Definition of the k-point grid
ngkpt   3*4
nshiftk 4
shiftk  0.5  0.5  0.5
        0.5  0.0  0.0
        0.0  0.5  0.0
        0.0  0.0  0.5

#Definition of the SCF procedure
nstep   100
diemac  4.0

timopt  2
