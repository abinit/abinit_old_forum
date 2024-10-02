

ndtset 2
#dataset 1

kptopt 1
nshiftk1 4
shiftk1
0.5 0.5 0.5
0.5 0.0 0.0
0.0 0.5 0.0
0.0 0.0 0.5
ngkpt1 8 8 8
prtden1 1
toldfe1 1.0d-6

#dataset2: the band structure
iscf2 -2   #SCF cycle:CG based on the minim of the energy(non-selfconsistent calcylation)
getden2 -1
kptopt2 -3
nband2 16 
ndivk2 10 12 17
kptbounds2 
0.5 0 0       #L
0 0 0         #Gamma
0 0.5 0.5     #X
1 1 1         #Gamma in another cell

tolwfr2 1.0d-16
enunit2 0  #0---hatree


#Definition of the unit cell
#chkprim 0

diemac 12
acell 6.43 6.43 6.43 
angdeg 60 60 60 

#rprim 0 0.5 0.5
#      0.5 0 0.5 
#      0.5 0.5 0   

ntypat 2
znucl 20 8
natom 2
typat 1 2 

xred 0 0 0
     0.5 0.5 0.5          
   
ecut 40.0
nstep 45
