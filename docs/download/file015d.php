# CrO2Cl2 molecule in vacuum
#
# geometry optimization
#

ndtset 4

ionmov 6
dtion 100

# CIS
xcart1 0.0     0.0     0.0       # Cr atom in center
       0.0     2.3552  1.8040    # O atom
       0.0    -2.3552  1.8040    # O atom
       3.3457  0.0    -2.2033    # Cl atom
      -3.3457  0.0    -2.2033    # Cl atom

# TRANS
xcart2 0.0     0.0     0.0       # Cr atom in center
       0.0     2.3552  1.8040    # O atom
      -2.3552  0.0    -1.8040    # O atom
       3.3457  0.0    -2.2033    # Cl atom
       0.0    -3.3457  2.2033    # Cl atom

# PLANAR
xcart3 0.0     0.0     0.0       # Cr atom in center
       0.0     2.9667  0.0       # O atom
       0.0    -2.9667  0.0       # O atom
       4.0060  0.0     0.0       # Cl atom
      -4.0060  0.0     0.0       # Cl atom

# TETRA
xcart4 0.0     0.0     0.0       # Cr atom in center
       0.0     2.3552  1.8040    # O atom
       0.0    -2.3552  1.8040    # O atom
       3.3457  0.0     2.2033    # Cl atom
      -3.3457  0.0     2.2033    # Cl atom



tolmxf 5.0d-5
toldff 5.0d-6

acell 14 14 14
ecut 90.0

ntypat 3
znucl 24 8 17

natom 5
typat 1 2 2 3 3

kptopt 0
nkpt 1

nstep 50
diemac 2.0

