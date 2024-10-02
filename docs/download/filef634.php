
#ecutsm 1.5
acell 10.61 10.61 10.61
rprim 0.0 0.5 0.5
      0.5 0.0 0.5
      0.5 0.5 0.0
ntypat 2
znucl 13 33
nband  5
#occopt 3
#tsmear 0.001
natom 2
typat 1 2
#udtset 15 2
xred   0.00 0.00 0.00
       0.25 0.25 0.25


ndtset 2


enunit 1
ecut 40
#pawecutdg 40
ngkpt  8 8 8 
nshiftk 1
shiftk 0.0 0.0 0.0
#       0.5 0.0 0.0
#       0.0 0.5 0.0
#       0.0 0.0 0.5
nstep   150

kptopt1    1
tolvrs1    1.00d-19

#######

#rfelfd2    2
# rfdir2    1 1 1
#  nqpt2    1
#   qpt2    0.0 0.0 0.0

#getwfk2   -1
#kptopt2    2
#  iscf2   -3
#tolwfr2   1.0d-22

#######

 rfphon2   1
rfatpol2   1 2
# rfelfd3   3
  rfdir2   1 1 1

   nqpt2   1
    qpt2   0.0 0.0 0.0
 getwfk2   1
# getddk3   -1
 kptopt2   2
 tolvrs2   1.0d-17






