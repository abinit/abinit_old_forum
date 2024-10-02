##################################################################################
#Optimization of the lattice parameters
optcell 1
ionmov  3
ntime  10
dilatmx 1.5
ecutsm  0.5
ecut 35
nsym 0
occopt 1
mkmem  0
#Definition of the k-point grids
kptopt 1          # Option for the automatic generation of k points, taking
                 # into account the symmetry
nshiftk 1
shiftk  0.5 0.5 0.5
ngkpt 4 4 4
getwfk -1
                                                      
chkprim 0

 #Definition of the SCF procedure
#nstep 300                                          
toldfe 1.0d-8        
diemac 9.0 


#COMMON INPUT DATA###########################################################
#alchemical input
npsp 3
ntypalch 1
mixalch 0.95 0.05
#
# CaB6 lattice structure
ntypat 2
znucl 5 20 56
natom 7
typat 1 2 2 2 2 2 2

#Definition of the unit cell
acell 3*7.6
#angdeg 90 90 90
#spgroup 221

# Atomic positions
xred 0.00 0.00 0.00 #Ca1
0.50 0.50 0.20 #B2
0.50 0.50 -0.20 #B2
0.50 0.20 0.50 #B2
0.50 -0.20 0.50 #B2
0.20 0.50 0.50 #B2
0.80 0.50 0.50 #B2


ixc 11
timopt 2
