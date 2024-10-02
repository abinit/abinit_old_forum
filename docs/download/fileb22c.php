chkprim 0
#Definition of the unit cell
acell 3*8.1768
prtpot 1
rprim  0.7071067812 0.0          0.0
      -0.3535533906 0.6123724357 0.0
       0.0          0.0          7.0
natom 6
iprcel 45
occopt 4
tsmear 0.04
kptopt 1 # Option for the automatic generation of k points
ngkpt 4 4 1
nshiftk 1
shiftk 0.5 0.5 0.5
#Definition of the atom types
ntypat 2
znucl 22 7
#Definition of the atoms
typat 2 1 2 1 2 1 # 1=Ti 2=N
xred

0            0            0
0.3535533906 0.2041241452 0.2886751346/7
0            0.4082482905 0.5773502692/7
0            0            0.8660254038/7
0.3535533906 0.2041241452 1.154700538/7
0            0.4082482905 6.711324865/7
ixc 1
ecut 30.0 # Maximal kinetic energy cut-off, in Ha
nstep 80 # Maximal number of SCF cycles
toldfe 1.0d-6

