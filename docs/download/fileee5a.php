ndtset 1
prtdos 1
prtdensph 1

# PAW
usepawu 1
pawecutdg 40
lpawu -1 2 -1

upawu 0.0 5.0 0.0 eV
jpawu 0.0 0.5 0.0 eV
tsmear 0.005

kptopt 1
nshiftk 1
shiftk 0.0 0.0 0.0
ngkpt 12 12 12

# Spin
spinat 0.0 0.0 1.0
       0.0 0.0 10.0
       0.0 0.0 1.0
       0.0 0.0 1.0
       0.0 0.0 1.0
nsppol 2
nspden 2

# Lattice optimization
occopt 3
optcell 1
ionmov 2
ntime 30
dilatmx 1.05
ecutsm 0.5

nsym 0

#Dataset SrMoO3
acell 3*7.4540720765E
rprim 1 0 0
      0 1 0
      0 0 1
ecut 18

# Atom Definitions
natom 5 
ntypat 3
znucl 38 42 8
typat 1 2 3 3 3

xred 
   0 0 0
   1/2 1/2 1/2
   1/2 1/2 0
   1/2 0 1/2
   0 1/2 1/2

nstep 100
toldfe 1.0d-12
