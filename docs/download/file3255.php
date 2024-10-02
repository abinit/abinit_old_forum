
ndtset 40
#Definition of the basis of the geometry determined by dataset 1 (so using getxcart 1)


dilatmx 1.05
chkdilatmx 0
ecutsm 0.5

# COMMON INPUT DATA

#Definition of the unit cell
acell: 3*5.582494 Angstr
acell+ 3*0.010022 Angstr
rprim 
1.0 0.0 0.0
0.0 1.0 0.0
0.0 0.0 1.0

#Definition of the atom types
ntypat 3
znucl 55 50 35

#Definition of the atoms
natom 5
typat 1 2 3 3 3
xred                   5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       0                 0                 0
                       5.0000000000E-01  0                 0
                       0                 5.0000000000E-01  0
                       0                 0                 5.0000000000E-01




angdeg 90 90 90


#Definition of the planewave basis set
ecut 34

# find the optimal total energy

nband 35
occopt 1
spgroup 221

strprecon 0.01
#Definition of the k-point grid
kptopt 1
ngkpt 6 6 6
nshiftk 1
shiftk
0.5 0.5 0.5
#getwfk -1
prtcif 1
prtgeo 1
#Definition of the SCF procedure
nstep 400
toldfe 1.0d-8
diemac 10.0


