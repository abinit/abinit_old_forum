#Structural optimisation
#BaO - hexagonal (NiAs) phase

  ndtset 9
  jdtset 1 2 3 4 5 6 7 8 9

  ecut1  20
  ecut2  30
  ecut3  40
  ecut4  50
  ecut5  60
  ecut6  70
  ecut7  80
  ecut8  90
  ecut9  100

#Targeting pressure 11 - 16 GPa
#******************************
#   strtarget1   -0.000472451131 -0.000472451131 -0.000472451131  0.0 0.0 0.0
#   strtarget2   -0.00027191432 -0.00027191432 -0.00027191432  0.0 0.0 0.0
#   strtarget3   -0.00030590361 -0.00030590361 -0.00030590361  0.0 0.0 0.0
#   strtarget4   -0.0003398929  -0.0003398929  -0.0003398929   0.0 0.0 0.0
   strtarget   -0.00037388219 -0.00037388219 -0.00037388219  0.0 0.0 0.0
#   strtarget2   -0.00040787148 -0.00040787148 -0.00040787148  0.0 0.0 0.0
#   strtarget3   -0.00044186077 -0.00044186077 -0.00044186077  0.0 0.0 0.0
#   strtarget4   -0.00047585006 -0.00047585006 -0.00047585006  0.0 0.0 0.0
#   strtarget5   -0.00050983935 -0.00050983935 -0.00050983935  0.0 0.0 0.0
#   strtarget6   -0.00054382864 -0.00054382864 -0.00054382864  0.0 0.0 0.0
#   strtarget11  -0.006797858   -0.006797858   -0.006797858   0.0 0.0 0.0

#Definition of the unit cell
#***************************
   acell   2*11.998 6.835
   angdeg  90 90 120
   spgroup 194
   brvltt  -1

#Definition of the atoms and bands
#*********************************
   natom   4
   ntypat  2
   znucl   56 8
   typat   1 1 2 2
   xred    1/3  2/3  1/4
           2/3  1/3  3/4
           0.0  0.0  0.0
           0.0  0.0  0.5
   nband   18
   occopt  1

   ixc     1

#Definition of the scf procedure
#*******************************
   iscf     7
   nnsclo   6
   nline    4
   npulayit 8
   nstep    100
   diemac   4

#Definition of the plane wave basis and k-point mesh
#***************************************************
#   ecut    40
   ecutsm  0.5
   dilatmx 1.2

   ngkpt   2*4 8
   nshiftk 1
   shiftk  0.0  0.0  0.5

#Structural relaxation
#*********************
   ionmov  3
   optcell 2
   natfix  4
   iatfix  1 2 3 4
   tolvrs  1.0d-18
   tolmxf  1.0d-8
   ntime   100

   timopt  2
