# Ni fcc structure with two atoms per unit cell 

#Ni is a ferromagnatic material
#spin definition
 nsppol  2
 nspden  2
spinat   0.0 0.0   4.0

prtdos   1  
prtden   1
 

#Structure optimize
optcell  1
ionmov   2
ntime    15
dilatmx  1.05
tolmxf   1.0e-6
ecutsm   0.5

#######################################################
#Common data
acell    3*6.65184
rprim    0.0   0.5  0.5
         0.5   0.0  0.5
         0.5   0.5  0.0

ntypat   1
znucl    28

   
natom    1
typat    1

xred     0.0  0.0  0.0
        

ixc      11

occopt   3  
tsmear   0.01
nband    10

kptopt   1
ngkpt    8 8 8
nshiftk  4
shiftk   0.5 0.5 0.5
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
   
ecut     60.0
tolvrs   1.0d-18
iscf     5 
nstep    70


diemac   12
