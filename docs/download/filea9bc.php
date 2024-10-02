# Phonon calculations - DDB generation on a MP grid for N

 ndtset   3
 jdtset   11 12 13               # 11- SC GS, 12- ddk, 13- q=0 RF 

chkprim -1

# Definition of the unit cell: 
natom   1
ntypat  1
znucl   4
typat   1
nband   4

acell   3*3.647560
rprim
 -0.5000  0.5000  0.5000
  0.5000 -0.5000  0.5000
  0.5000  0.5000 -0.5000
xred
  0.0000  0.0000  0.0000

# Definition of the plane wave basis and kpt grid: 
 ecut      30.0
 ecutsm    1.0
 ixc       11
 ngkpt     24 24 24
 nshiftk   2
 shiftk    0.25  0.25  0.25
          -0.25 -0.25 -0.25
 occopt    4
 tsmear    0.001

# Other common parameters:
 nstep   100
 diemac  10E+06
 diemix  1.0

# Ground state calculation:
 kptopt11   2
 tolvrs11   1.0d-18
 prtden11   1

# ddk perturbations, NSC run:
 rfelfd12   2             # activate the calculation of the d/dk perturbation
 rfdir12    1 1 1         # consider perturbations in all directions 
 getwfk12   11            # uses the GS wavefunctions from dataset 11
 iscf12    -3             # this is a non self-consistent calculation
 kptopt12   2             # consider only inverse symmetry
 nqpt12     1             # one q point
 qpt12      0.0 0.0 0.0   # and it is q=0
 tolwfr12   1.0d-8        # must use tolwfr for non-self-consistent calculations

# Phonon and electric field perturbation at q = 0:
 rfphon13   1             # activate the calculation of the phonon perturbations
 rfatpol13  1 1           # all the atoms will be displaced
 rfelfd13   3             # activate the calculation of the electric field pert.
 rfdir13    1 1 1         # consider perturbations in all directions
 getwfk13   11            # uses GS wavefunctions from dataset 11
 getddk13   12            # uses ddk wavefunctions from dataset 12
 kptopt13   2             # consider only inverse symmetry
 nqpt13     1             # one q point
 qpt13      0.0 0.0 0.0   # and it is q=0
 tolvrs13   1.0d-8        # SC stopping criterion
