# Crystalline BiFeO3 Rhombohedral R3c 161 
           #Computation of the charge density
           #Computation of the total energy

#Datasets: convergence on ecut
ndtset 8   ecut: 16.   ecut+  2.

#Datasets: convergence on pawecutdg
#ndtset 7   pawecutdg: 19. pawecutdg+ 3.

#Datasets: etotal vs acell
#ndtset 20 acell: 3*5.604 angstrom  acell+ 3*5E-05 angstrom

#Definition of the unit cell
acell  3*7.89355   angstrom
angdeg  3*89.5373   
#spgroup 161 
brvltt -1
chkprim 0
rprim 
0.5 0.5 0.0
0.0 0.5 0.5
0.5 0.0 0.5
#Definition of the atom types
ntypat  3
znucl   83 26 8   
#Definition of the atoms
natom 40
#natrd 7
typat 1 1 1 1 1 1 1 1 2 2 2 2 2 2 2 2 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3    
xred   
0.0 0.0 0.0 #Bi  
0.5 0.0 0.0
0.0 0.5 0.0
0.0 0.0 0.5
0.0 0.5 0.5
0.5 0.5 0.0
0.5 0.0 0.5
0.5 0.5 0.5

0.22360 0.22360 0.22360 #Fe
0.72360 0.22360 0.22360
0.22360 0.22360 0.72360 
0.72360 0.22360 0.72360 
0.22360 0.72360 0.22360
0.22360 0.72360 0.72360 
0.72360 0.72360 0.22360
0.72360 0.72360 0.72360

-0.034  0.1669  0.2385 #O 17 
0.2385  0.1669  0.466
0.1669  0.2385  -0.034
0.2385  -0.034  0.1669
-0.034  0.2385  0.6669
0.1669 -0.034   0.7385
0.466   0.1669  0.7385
-0.034  0.6669  0.7385 #O 24
0.2385  0.466   0.6669
0.466   0.7385  0.6669
0.1669  0.7385  0.466
0.7385  -0.034  0.6669
0.6669  0.2385  0.466
0.6669  0.466   0.7385
0.1669  0.466   0.2385
0.466   0.6669  0.2385 
0.2385  0.6669  -0.034
-0.034  0.7385   0.1669
0.6669  0.7385   -0.034
0.7385  0.6669   0.466
0.6669  -0.034   0.2385
0.7385  0.1669   -0.034
0.7385  0.466     0.1669
0.466   0.2385    0.1669
#0.6669  0.966   0.2385 
#0.966   0.1669   0.2385
#0.966   0.7385   0.1669
#0.2385  0.966   0.1669
#0.966   0.2385  0.6669
#0.7385  0.1669  0.966
#0.1669  0.966   0.7385
#0.966   0.6669  0.7385
#0.6669  0.7385  0.966
#0.7385  0.966   0.6669
#0.2385  0.6669  0.966
#0.1669  0.2385  0.966
###########################
#Spin define antiferromagnetic ordering 
nsppol 1
nspden 2
nspinor 1
spinat 
0  0  0
0  0  0 
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0 -1
0  0  1
0  0  1
0  0 -1
0  0  1
0  0 -1
0  0 -1
0  0  1
0  0  0
0  0  0 
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0 
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0 
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
0  0  0
############################
#Definition of the k-point grid
#nkpt 2   # Number of k points 
kptopt 4 #Option for the automatic generation of k points
ngkpt 2 2 2         #Nombre de points k par maille 
nshiftk 1
shiftk  0.5 0.5 0.5 #Configuration de la maille 
chksymbreak 0  

#Exchange-correlation functional
ixc 7             # LDA Teter Pade parametrization
#SCF cycle parameters
iscf 17           # for PAW
#tolvrs 1.0d-10
nstep 50        # Maximal number of SCF cycles
toldfe   1.0d-3
#diemac 0.5
#nband  40
#occopt 1

#Definition of the planewave basis set
ecut  18       # Maximal kinetic energy cut-off, in Hartree
ecutsm 0.5
###############
pawovlp 63 
###############
pawecutdg 33     #Projector Augmented Waves- Energy CUToff for #the Double Grid

# LDA+U
usepawu  1
lpawu -1 2 -1
upawu 0.0 4.0 0.0 ev
jpawu 0.0 0.4 0.0 ev
usexcnhat 0
#jdtset 1 
prtden 1   #PRinT the DENsity 
#Additional test
#prtkden 1 # Test the kinetic energy density.
#usekden 1 # Test the kinetic energy density.
#prtgden 1 # Test the gradient of electronic density.
#prtlden 1 # Test the Laplacian of electronic density.




   
