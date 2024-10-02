# Crystalline In2O3
# Calculation of the GW correction to the direct band gap in Gamma
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the kss file 
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      4    

ngkpt    2 2 2
kptopt   1
nshiftk  2
shiftk   0.25  0.25  0.25
        -0.25 -0.25 -0.25
istwfk  *1

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
nshiftk1  1
shiftk1  0.0 0.0 0.5
ngkpt1   4 4 4
istwfk1  *0
prtden1  1
toldfe1  1.0d-6

# Dataset2: calculation of kss file
# Definition of k-points
iscf2           -2
getden2      -1
nband2       181
nbandkss2   -1

# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3  3
getkss3     -1
nband3      185
ecutwfn3    3.6
ecuteps3    6.0
ppmfrq3    16.7 eV

# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4
getkss4     -2
getscr4     -1
nband4      200
ecutwfn4    5.0
ecutsigx4    6.0
                
nkptgw4      1 
kptgw4         
  0.000    0.000    0.000
bdgw4       176 177

# Definition of the unit cell: fcc
acell 3*18.0387
rprim -0.5   0.5    0.5   
       0.5  -0.5    0.5    
       0.5   0.5   -0.5

# Definition of the atom types
ntypat  2
znucl 49 8
                         
# Definition of the atoms
natom 40
typat  16*1  24*2 
xred 
     0.5     0.5     0.5
     0.5       0       0
       0     0.5       0
       0       0     0.5
    0.25  0.2156 -0.0344
   -0.25  0.2844 -0.4656
 -0.0344    0.25  0.2156
 -0.4656   -0.25  0.2844
  0.2156 -0.0344    0.25
  0.2844 -0.4656   -0.25
   -0.25 -0.2156  0.0344
    0.25 -0.2844  0.4656
  0.0344   -0.25 -0.2156
  0.4656    0.25 -0.2844
 -0.2156  0.0344   -0.25
 -0.2844  0.4656    0.25
   0.225   0.463   0.438
  -0.475  -0.213   0.062
  -0.025   0.037   0.262
   0.275  -0.287   0.238
   0.438   0.225   0.463
   0.062  -0.475  -0.213
   0.262  -0.025   0.037
   0.238   0.275  -0.287
   0.463   0.438   0.225
  -0.213   0.062  -0.475
   0.037   0.262  -0.025
  -0.287   0.238   0.275
  -0.225  -0.463  -0.438
   0.475   0.213  -0.062
   0.025  -0.037  -0.262
  -0.275   0.287  -0.238
  -0.438  -0.225  -0.463
  -0.062   0.475   0.213
  -0.262   0.025  -0.037
  -0.238  -0.275   0.287
  -0.463  -0.438  -0.225
   0.213  -0.062   0.475
  -0.037  -0.262   0.025
   0.287  -0.238  -0.275

# Definition of the planewave basis set 
ecut 25

# Definition of the SCF procedure
nstep   100
diemac  12.0      
tolwfr  1.0d-10

# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
iscf 3
ixc  11
