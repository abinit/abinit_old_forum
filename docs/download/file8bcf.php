#Structural optimisation
#VN - cubic (rocksalt) phase

  ndtset 1
  jdtset 1

#Targeting pressure from 10-100 GPa
#**********************************  
  strtarget1   -0.0003398929 -0.0003398929 -0.0003398929 0.0 0.0 0.0
#  strtarget2   -0.0006797858 -0.0006797858 -0.0006797858 0.0 0.0 0.0
#  strtarget3   -0.0010196787 -0.0010196787 -0.0010196787 0.0 0.0 0.0
#  strtarget4   -0.0013595716 -0.0013595716 -0.0013595716 0.0 0.0 0.0
#  strtarget5   -0.0016994645 -0.0016994645 -0.0016994645 0.0 0.0 0.0
#  strtarget6   -0.0020393574 -0.0020393574 -0.0020393574 0.0 0.0 0.0
#  strtarget7   -0.0023792503 -0.0023792503 -0.0023792503 0.0 0.0 0.0
#  strtarget8   -0.0027191432 -0.0027191432 -0.0027191432 0.0 0.0 0.0
#  strtarget9   -0.0030590361 -0.0030590361 -0.0030590361 0.0 0.0 0.0
#  strtarget10  -0.003398929  -0.003398929  -0.003398929  0.0 0.0 0.0

#Definition of the unit cell
#***************************
   acell   3*7.88
   rprim   0.0  0.5  0.5
           0.5  0.0  0.5
           0.5  0.5  0.0

#Definition of the atoms and bands
#*********************************
   natom   2
   ntypat  2
   znucl   23 7
   typat   1 2
   xred    0.00  0.00  0.00
           0.50  0.50  0.50
   nband   12
   occopt  1

   ixc     11

#Definition of the scf procedure
#*******************************
   iscf    5
   nstep   100
   diemac  12

#Definition of the plane wave basis and k-point mesh
#***************************************************
   ecut    40
   ecutsm  0.5
   dilatmx 1.2

   ngkpt   3*6
   nshiftk 4
   shiftk  0.5  0.5  0.5
           0.5  0.0  0.0
           0.0  0.5  0.0
           0.0  0.0  0.5

#Structural relaxation
#*********************
   ionmov  2
   optcell 2
   tolvrs  1.0d-18
   tolmxf  1.0d-8
   ntime   100  

   timopt  2
