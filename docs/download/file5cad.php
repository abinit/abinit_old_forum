#------------------------#
# INPUT FILE FOR ABINIT  #
# Al - fcc - gamma       #
#------------------------#
#
# - Options for link
#--------------------
 ndtset 5
#
# - Options for output
#----------------------
 enunit 2
 prtvol 1
#
# - Parameters governing the convergence
#----------------------------------------
 ecut   25.
 nband 40
 occopt 3
 tsmear 0.0002
#
# - Options for the choice of calculations
#-----------------------------------------
 ixc   1
 nstep 30
#
# SC run
 iscf1   3
 toldfe1 1.d-10
 nqpt1   0
 prtden1 1
#
# NSC run
 iscf2 -2
 tolwfr2 1.0d-22
 nqpt2 0
 getden2 1
 getwfk2 1
#
# ddk response function
 iscf3 -3
 tolwfr3 1.0d-22
 nqpt3 1
 qpt3 0.0d0 0.0d0 0.0d0
 rfdir3 1 0 0
 rfelfd3 2
 getwfk3 2

# ddk response function
 iscf4 -3
 tolwfr4 1.0d-22
 nqpt4 1
 qpt4 0.0d0 0.0d0 0.0d0
 rfdir4 0 1 0
 rfelfd4 2
 getwfk4 2


# ddk response function
 iscf5 -3
 tolwfr5 1.0d-22
 nqpt5 1
 qpt5 0.0d0 0.0d0 0.0d0
 rfdir5 0 0 1
 rfelfd5 2
 getwfk5 2

#
# - Definition of special k-points
#----------------------------------
 kptopt 0
 nkpt 1
 kpt 0.0 0.0 0.0
 wtk 1.0
 kptnrm 1
 npkpt 1
 npband 8
 npfft 1
 paral_kgb 1
# accesswff 0 # Only for testing purposes
#
# - Definition of the unit cell
#--------------------------------
 acell 3*7.6557
 rprim 0.0 0.5 0.5
       0.5 0.0 0.5
       0.5 0.5 0.0
 natom 1
 ntypat 1
 typat 1
 znucl 13.
 xred 0.0 0.0 0.0
 amu 26.98
#
# - Symmetries of the lattice
#
 nsym 1

# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5

# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1

