# Crystalline LaAlO3 : computation of the response to homogeneous
# electric field and atomic displacements, at q=0
#

  ndtset  3

#Ground state calculation
  kptopt1   2             # Automatic generation of k points, taking
                          # into account the symmetry
  tolvrs1   1.0d-18       # SCF stopping criterion
    iscf1   5             # Self-consistent calculation, using algorithm 5
#Response Function calculation : d/dk
  rfelfd2   2             # Activate the calculation of the d/dk perturbation
   rfdir2   1 0 0         # Need to consider the perturbation in the x-direction only
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
 rfatpol3   1 2           # All the atoms will be displaced
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
  tolvrs3   1.0d-8
    iscf3   5             # Self-consistent calculation, using algorithm 5


#######################################################################
#Common input variables

#Definition of the unit cell

acell     1.0164647896E+01  1.0272740231E+01  1.4435239984E+01 Bohr

rprim     1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
          0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
          0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
#Definition of the atom types

ntypat  3               # There are two types of atom
znucl  57 13  8         # The keyword "znucl" refers to the atomic number of the 
                       # possible type(s) of atom. The pseudopotential(s) 
                       # mentioned in the "files" file must correspond
                       # to the type(s) of atom. Here, type 1 is the Aluminum,
                       # type 2 is the Arsenic.

#Definition of the atoms

natom  20

typat  1 1 1 1 2 2 2 2 3 3 3 3 3 3 3 3 3 3 3 3

xred          1.0782632134E-03  2.7532471986E-07  2.5000000000E-01
              5.0107826321E-01  4.9999972468E-01 -2.5000000000E-01
             -1.0782632134E-03 -2.7532471975E-07  7.5000000000E-01
              4.9892173679E-01  5.0000027532E-01  2.5000000000E-01
              5.0000000000E-01  5.5511151231E-17  0.0000000000E+00
              1.0000000000E+00  5.0000000000E-01  0.0000000000E+00
             -5.0000000000E-01  5.5511151231E-17  5.0000000000E-01
             -1.3877787808E-17  5.0000000000E-01  5.0000000000E-01
              2.4999864940E-01  2.5000215779E-01  2.0158647769E-02
              7.4999864940E-01  2.4999784221E-01 -2.0158647769E-02
             -2.4999864940E-01 -2.5000215779E-01  5.2015864777E-01
              2.5000135060E-01  7.5000215779E-01  4.7984135223E-01
             -2.4999864940E-01 -2.5000215779E-01 -2.0158647769E-02
              2.5000135060E-01  7.5000215779E-01  2.0158647769E-02
              2.4999864940E-01  2.5000215779E-01  4.7984135223E-01
              7.4999864940E-01  2.4999784221E-01  5.2015864777E-01
              5.3919168635E-01 -1.4814265884E-08  2.5000000000E-01
              1.0391916864E+00  5.0000001481E-01 -2.5000000000E-01
             -5.3919168635E-01  1.4814265981E-08  7.5000000000E-01
             -3.9191686353E-02  4.9999998519E-01  2.5000000000E-01

#Gives the number of band, explicitely (do not take the default)
nband   67             # For an insulator (if described correctly as an insulator 
                       # by DFT), there is no need to include conduction bands 
                       # in response-function calculations

#Exchange-correlation functional
ixc      23

#Definition of the planewave basis set
ecut    5.0

#Definition of the k-point grid
kptrlatt  6  0  0   0  6  0   0  0  4

#Definition of the SCF procedure

nstep  30
diemac 6.0
