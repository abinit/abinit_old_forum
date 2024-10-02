# Crystalline silicon definition of primitive cell starting from spacegroup 
spgroup 227
spgorig 1
brvltt -1  
#chkprim 0
#Definition of the unit cell
acell 3*5.43 angstrom  

#Definition of the atom types
ntypat 1         
znucl 14        

#Definition of the atoms
natrd 1
natom 2
typat 1 1           
xred 
0.0 0.0 0.0  
#Definition of the planewave basis set
ecut 20.0 

#Definition of the k-point grid
kptopt 1 
ngkpt 2 2 2
nshiftk 4 
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5

#Definition of the SCF procedure
nstep 10   
toldfe 1.0d-6
diemac 12.0       

#Control of the output
prtcif 1
prtden 1
