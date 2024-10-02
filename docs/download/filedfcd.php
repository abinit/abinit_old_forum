  ndtset 6
    ixc 11
#First dataset : SCF
   iscf1 7
  nstep1 200          # Maximal number of SCF cycles
  nband1 32
 kptopt1 1
 prtden1 1   getden1 0   getwfk1 0

#Second dataset : High number of bands
    iscf2 -2
   nstep2 100
  kptopt2  1
  getwfk2  1   getden2 1

#Third dataset : NSC run with points in the full BZ
   iscf3  -2
  nstep3  100          # Maximal number of SCF cycles
 getwfk3  2   getden3 1   # Usual file handling data

#Forth dataset : X Direction
   iscf4 -3
  nstep4  1  nline4  0  prtwf4  3   # Speed up the calculation : the first-order response wavefunction is not computed, only the matrix elements.
   nqpt4  1
  rfdir4  1 0 0
 rfelfd4  2
 getwfk4  3

#Fifth dataset : Y Direction
    iscf5 -3
   nstep5  1  nline5  0  prtwf5  3   # Speed up the calculation : the first-order response wavefunction is not computed, only the matrix elements.
    nqpt5  1
   rfdir5  0 1 0
  rfelfd5  2
  getwfk5  3

#Sixth dataset : Z Direction
    iscf6 -3
   nstep6  1  nline6  0  prtwf6  3   # Speed up the calculation : the first-order response wavefunction is not computed, only the matrix elements.
    nqpt6  1
   rfdir6  0 0 1
  rfelfd6  2
  getwfk6  3

#Data common to 2-6
nband 150

#Data common to 3-6
kptopt  3

#Data common to all datasets
acell   10.270487452231300     10.270487452231300     10.270487452231300 Bohr
rprim
      0.571002763849827     0.000000000000000     0.820948137019543
     -0.285501381924913     0.494502899125078     0.820948137019543
     -0.285501381924913    -0.494502899125079     0.820948137019544
#nsym 0            # Automatic detection of symetries

#Definition of the atom types and pseudopotentials
ntypat 3          # There is three types of atom
znucl 13 83 8           # Atomic number of the possible type(s) of atom. Here carbon.

#Definition of the atoms
natom 10           # There are ten atoms
typat  1 1 2 2 3 3 3 3 3 3
xred              # Location of the atoms
     0.222476236182265     0.222476236182265     0.222476236182265
     0.722476236182265     0.722476236182264     0.722476236182265
     0.000000000061215     0.000000000061215     0.000000000061215
     0.500000000061216     0.500000000061216     0.500000000061215
     0.515260386572961     0.415454756715846     0.946350884501211
     0.415454756715846     0.946350884501212     0.515260386572960
     0.946350884501211     0.515260386572961     0.415454756715845
     0.446350884501211     0.915454756715845     0.015260386572961
     0.915454756715846     0.015260386572961     0.446350884501212
     0.015260386572961     0.446350884501211     0.915454756715845

#Numerical parameters of the calculation : planewave basis set and k point grid
ecut 38.0         # Maximal plane-wave kinetic energy cut-off, in Hartree
#ecutsm 0.5        # Introduce a smooth PW cutoff within an 0.5 Ha region
ngkpt 8  8  8     # This is a 6x6x6 grid based on the primitive vectors
nshiftk 1         # of the reciprocal space, repeated four times,
shiftk            # with different shifts:
 0.5 0.5 0.5
enunit  1
diemac 4.0
tolwfr  1.0d-15
nbdbuf 2

