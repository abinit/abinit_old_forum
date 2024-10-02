
 ndtset 5
 acell 20 20 20
 prtgeo 1
 enunit  1
# ionmov  3
# tolmxf 1.0d-4
  diemac 1.6d0
  diemix 0.5
 npulayit 25
# diemac  5.0d0
 iprcel 144
 diecut 0.8
# nnsclo 1
# nline 20
# ortalg 4
#  occopt  3
#  tsmear  1.0d-3
  ecut1 30
  ecut2 40
  ecut3 50
  ecut4 60
  ecut5 70
 kpt   0.0 0.0 0.0
 natom  1
# nband  10
 nkpt 1
 nsppol 2
 nstep 3000
 ntime 3000
 nsym 1
 ntypat  1
 rprim 1 0 0
       0 1 0
       0 0 1

 toldfe 1.d-5
 typat  1
 wtk  1
 xred  0.0  0.0  0.0
  znucl  22

# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
  iscf  7
