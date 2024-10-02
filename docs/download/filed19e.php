ndtset 3

nband 35
ngkpt  6 6 1
istwfk *1
symmorphi 0
nshiftk 1
shiftk  0.0 0.0 0.0

nbandkss1 -1
kssform1 3

optdriver2 3
getkss2 -1
ecutwfn2 25
ecuteps2  12.5
ppmfrq2 50 eV

optdriver3 4
getkss3 -2
getscr3 -1
ecutwfn3     25
ecutsigx3    25
nkptgw3 3
kptgw3
 0.0 0.0 0.0 1/3 1/3 0.0 1/3 2/3 0.0
bdgw3
  4 5 4 5 4 5 
  
chksymbreak 0

getwfk -1


#Definition of the unit cell
chkprim 0
acell 2*4.666920506 47.25897921 
angdeg 90 90 120

#Definition of the atom types
ntypat 1
znucl 6                      

#Definition of the atoms
natom 2
typat 2*1
xred
 1/3 2/3 0.0
  2/3 1/3 0.0

ecut 25.0
pawecutdg 50

nstep 100         
toldfe 1.0d-6