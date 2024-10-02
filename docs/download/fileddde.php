# Co in HCP structure

fband 1.8

# Spin same configuration as for the other elements should not effect result
nsppol 2
spinat
   0 0 4
   0 0 4

#Definition of occupation numbers
occopt 7
tsmear 0.001

#Optimization of the lattice parameters
optcell 1
ionmov  2
ntime  100
tolmxf 1d-5
dilatmx 1.01

#Definition of the unit cell
acell 4.737732368 4.737732368 7.690240466
angdeg 90 90 120

#Definition of the atom types
ntypat 1
znucl 27

#Definition of the atoms
natom 2           
typat 1 1          
xred
   1/3  2/3  1/4
   2/3  1/3  3/4

#Definition of the planewave basis set
ecut 50
pawecutdg 100
ecutsm 0.5

#Exchange-correlation functional
ixc 11            # GGA-PBE Perdew-Burke-Ernzerhof GGA functional

#Definition of the k-point grid
ngkpt 20 20 20
nshiftk 1
shiftk 0 0 0

#Definition of the SCF procedure
nstep 100         
toldfe 3.675d-08

# Definition of Output-Parameters
prtden 0
prteig 0
prtwf 0
