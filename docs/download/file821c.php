#Cubic
acell *0.122E+02 Angstrom   
#restartxf -1
ecut 28
 #rprim 1 0 0 0 1 0 0 0 1    # is doubled with respect to previous run.
#restartxf -1  
angdeg 90 90 90
ndtset 3 

#Definition of the atoms
ntypat 3         
znucl 52 32 51           
chkprim 0
chksymbreak 0
#Definition of the atoms
natom 58          
typat ########
xred     ####specify#####
#dataset 1
#Definition of the atomic positions without relaxing the lattice parameters
optcell 0
ionmov 2
tolmxf 5.0d-5        # Stopping criterion for the geometry optimization : when 
                         # the residual forces are less than tolmxf, the Broyden 
prtden 0
prtwf 0                         # algorithm can stop
toldfe 5.0d-7        # Will stop the SCF cycle when, twice in a row, 
prtcif 1
                         
ntime 1000
optforces 1       
#Definition of the SCF procedure
nstep 1000         # Maximal number of SCF cycles
#defination of k -point grid
shiftk  0.5 0.5 0.5
#prtkpt 1

kptrlen1     6.5208E+01
kptrlatt1
0 2 2 
2 0 2
2 2 0
kptrlen2     7.9864E+01
kptrlatt2
-2 2 2 
2 -2 2
2 2 -2
kptrlen3     9.7813E+01
kptrlatt3
0 3 3 
3 0 3
3 3 0
