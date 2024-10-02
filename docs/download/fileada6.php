ndtset 22

dilatmx 1.05
chkdilatmx 0
ecutsm 0.5

# COMMON INPUT DATA

#Definition of the unit cell
acell: 7.819984144 7.819984144 5.6960088 Angstr
acell+ 0.010038491 0.010038491  0.00731195 Angstr
#rprim 
1.0 0.0 0.0
0.0 1.0 0.0
0.0 0.0 1.0

#Definition of the atom types
ntypat 3
znucl 55 50 35

#Definition of the atoms
natom 10
typat 1 1 2 2 3 3 3 3 3 3
xred
 
0  0.5 0.5
0.5 0 0.5
0 0 0
0.5 0.5 0
0 0 0.5
0.5 0.5 0.5
0.1882 0.6882 0.0
-0.1882 0.3118 0
0.3118 0.1882 0
0.6882 -0.1882 0




#angdeg 90 90 90


#Definition of the planewave basis set
ecut 34

# find the optimal total energy

toldff 1.0d-8
nband 46
occopt 1
spgroup 127
nsym 0

chkprim 0
#chksymbreak 0
#brvltt -1
strprecon 0.01
#Definition of the k-point grid
kptopt 1
ngkpt 6 6 7
nshiftk 1
shiftk
0.5 0.5 0.5
prtcif 1
#prtgeo 1
#Definition of the SCF procedure
nstep 400
diemac 10.0
