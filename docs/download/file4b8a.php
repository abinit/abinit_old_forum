#Double Perovskite Cs2AgBiBr6 acell relaxation
#Eric Yang

#Definition of the unit cell
acell 3*14.643488

angdeg 3*60
#spgroup 225

#Definition of the atom types
ntypat 4
znucl 55 47 83 17

#Definition of the atoms
natom 10
typat 1 1 2 3 4 4 4 4 4 4

xred 1/4    1/4    1/4 
     3/4    3/4    3/4 
     1/2    1/2    1/2 
     0      0      0
     0.2508 0.7492 0.2508
     0.2508 0.7492 0.7492
     0.2508 0.2508 0.7492
     0.7492 0.7492 0.2508
     0.7492 0.2508 0.7492
     0.7492 0.2508 0.2508

ecut 31
pawecutdg 62

#Definition of the k-point grid
kptopt 1
ngkpt 2 2 2
nshiftk 1
shiftk 1/2 1/2 1/2
chksymbreak 0

#Definition of the SCF Procedure
nstep 100
toldfe 1.0d-10

diemac 12

#Converging acell
pawovlp -1
optcell 1
ionmov 2
ecutsm 0.5
tolmxf 5.0d-5
ntime 50
chkdilatmx 0

#Stress
natfix 0
optforces 2
optstress 1
strprecon 0.5
strtarget 5.09839451E-04 5.09839451E-04 5.09839451E-04 0 0 0 #15 GPa
