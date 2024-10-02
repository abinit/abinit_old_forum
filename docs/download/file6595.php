# Crystalline gold : computation of the total energy

#Definition of the unit cell
acell  3*1.889726124  # Lattice parameters of bulk gold
rprim
    0.432563734556E+01    -0.249740788588E+01    0.000000000000E+00
    0.432563734556E+01     0.249740788588E+01    0.000000000000E+00
    0.000000000000E+00     0.000000000000E+00    15.0
chkprim 0

#Definition of occupation numbers
natom 9
occopt 4
tsmear 0.01
#chksymbreak 0

kptopt 2
ngkpt 6 6 1
nshiftk 1
shiftk 0.5 0.5 0
mqgrid 5707      

#Definition of the atom types
ntypat 1
znucl 79 
typat 9*1 
xangst
-1.441879115187 -0.832469295292 2.354578735323
1.441879115187 -0.832469295292 2.354578735323
0.000000000000 1.66493859058 2.354578735323
-2.883758230374 0.000000000000 0.000000000000
0.000000000000 0.000000000000 0.000000000000
2.883758230374 0.000000000000 0.000000000000
0.000000000000 -1.664938590584 -2.354578735323
-1.441879115187 0.832469295292 -2.354578735323
1.441879115187 0.832469295292 -2.354578735323

#Exchange-correlation functional
ixc 11             # PBE

#Definition of the planewave basis set
ecut  40.0 Ry        # Maximal kinetic energy cut-off, in Rydberg

#Definition of the SCF procedure
nstep 200           # Maximal number of SCF cycles
toldfe 1.0d-6     


