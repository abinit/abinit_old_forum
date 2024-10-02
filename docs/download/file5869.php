


ndtset 2
#dataset 1£ºusual self-consistent calculation

kptopt1 1
nshiftk1 4 
shiftk1 
0.5 0.5 0.5
0.5 0 0
0 0.5 0
0 0 0.5
ngkpt1 4 4 4 
prtden1 1
toldfe1 1.0d-6

#dataset2: the band structure
iscf2 -2               #SCF cycle:CG based on the minim of the energy(non-selfconsistent calcylation)
getden2 -1
kptopt2 -3
nband2 48
ndivk2 10 12 17
kptbounds2 
0.5 0 0               #L
0 0 0               	 #Gamma
0 0.5 0.5   	        #X
1 1 1                 #Gamma in another cell

tolwfr2 1.0d-16
enunit2 0             #0---hatree


#Definition of the unit cell
chkprim 0

#angdeg 90 90 90 
rprim 0 1 1  
      1 0 1
      1 1 0   
acell 9.093 9.093 9.093  #CaO lattice constant a=4.81 Angstrom,is equal to 9.093 bohr
ntypat 2
znucl 20 8
natom 16
typat 1 2 1 2 1 2 1 2 1 2 1 2 1 2 1 2
xred
   -0.00000  -0.00000   0.00000   
    0.25000   0.25000   0.25000   
    0.50000  -0.00000   0.00000   
    0.75000   0.25000   0.25000   
   -0.00000   0.50000   0.00000   
    0.25000   0.75000   0.25000   
    0.50000   0.50000   0.00000   
    0.75000   0.75000   0.25000   
   -0.00000  -0.00000   0.50000   
    0.25000   0.25000   0.75000   
    0.50000  -0.00000   0.50000   
    0.75000   0.25000   0.75000   
   -0.00000   0.50000   0.50000   
    0.25000   0.75000   0.75000 
    0.50000   0.50000   0.50000  
    0.75000   0.75000   0.75000 

ecut 40.0
nstep 45

