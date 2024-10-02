# =======================================
# Input for PAW1 tutorial
# Diamond at experimental volume
# =======================================

#Cell and atoms definition
 acell 3*3.567 angstrom
 rprim 0.0 1/2 1/2
       1/2 0.0 1/2
       1/2 1/2 0.0
 ntypat 1  natom 2  typat 2*1
 xred 0.0 0.0 0.0
      1/4 1/4 1/4
 znucl 6  nband 6

ionmov 2
optcell 1
ntime 50
#getwfk -1
#irdwfk 1
tolmxf 5.0d-6
dilatmx 1.05
ecutsm  0.5

#Grid definitions
 ecut 15
 pawecutdg 20

#SCF cycle parameters
 tolvrs 1.0d-10
 nstep 20

#K-points and sym
 nsym 0       
 occopt 1
 ngkpt 2 2 2
 nshiftk 4
 shiftk 0.5 0.5 0.5
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5

 prtcif 1
