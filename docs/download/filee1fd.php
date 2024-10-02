ndtset 2
chkprim 0
brvltt=-1
spgroup 120
#Definition of the atomic positions without relaxing the lattice parameters 
optcell1 0
ionmov 2

#Definition of the basis of the geometry determined by dataset 1 (so using getxcart 1)
getxcart2 1
optcell2 2
dilatmx2 1.1
ecutsm2 0.5

ixc 15
# COMMON INPUT DATA
#Definition of the unit cell
acell      9.1761 9.1761  12.6960 angstrom
rprim 
1.0 0.0 0.0
0.0 1.0 0.0
0.0 0.0 1.0

#Definition of the atom types
ntypat 3
znucl 12 47 51

#Definition of the atoms
natom 24
typat 4*1 4*2 16*3 
xangst
      8.845760    2.716126    1.218816
      9.506440    6.459974    1.218816
      7.304176    4.257710   -1.218816
     11.048024    4.918390   -1.218816
     13.764150    4.588050    3.174000
      9.176100    9.176100   -3.174000
      4.588050    4.588050    3.174000
      9.176100   -0.000000   -3.174000
     11.344412    4.357730    1.527329
      7.007788    4.818370    1.527329
      8.945780    6.756362   -1.527329
      9.406420    2.419738   -1.527329
      2.168312    4.357730    1.527329
     16.183888    4.818370    1.527329
      4.357730    2.168312    4.820671
     13.533830    2.168312    4.820671
      4.818370    7.007788    4.820671
     13.994470    7.007788    4.820671
      6.756362   -0.230320   -4.820671
      6.756362    8.945780   -4.820671
     11.595838    0.230320   -4.820671
     11.595838    9.406420   -4.820671
      8.945780   -2.419738   -1.527329
      9.406420   11.595838   -1.527329




#Definition of the planewave basis set
ecut 100.0

# find the optimal total energy
ntime 150
#tolmxf 1.0d-5
#toldff 1.0d-6

#Definition of the k-point grid
kptopt 1
ngkpt 8 8 8
nshiftk 1
shiftk
0.5 0.5 0.5
getwfk -1

#Definition of the SCF procedure
nstep 100
toldfe 1.0d-12
diemac 10.0