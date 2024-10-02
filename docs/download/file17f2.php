#  Single CdTe in a big box (zincblende), treated with spin-orbit coupling.
 ndtset 2

# First dataset : scalar wavefunctions
# Second dataset : spinor wavefunctions
 nspinor2 2

# Common data
 acell 3*12.25
 ecut 10
 enunit 2 
 nkpt  1
 intxc 1
 istwfk 1  
kptopt 0          # Enter the k points manually 
 kpt  0.0 0.0 0.0
 ixc 2
 natom  2 nband 26
 nline 5  nstep 10
 ntypat  2
 occopt  7  
 rprim   0.500  0.500  0.000
         0.500  0.000  0.500
         0.000  0.500  0.500
 toldfe 1.0d-7
 tsmear 0.01
 typat  1 2
 xred  0.0 0.0 0.0
 znucl 48.0 52.0
    
# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf 5
