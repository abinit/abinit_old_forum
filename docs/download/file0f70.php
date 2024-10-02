### general
ndtset             1
autoparal          1
optdriver          7
eph_task           -2  ## 2 GKK matrix elements

### i/o
getwfk_filepath   "elph.24x24x16.WFK"
getddb_filepath   "elph.6x6x4.DDB"
getdvdb_filepath  "elph.6x6x4.DVDB"
pp_dirpath        "/home/ty/pseudo/abi/nc-sr-04_pbesol_standard_psp8/"
pseudos           "Mg.psp8,B.psp8"

### lattice 
ntypat             2
natom              3
typat              1 2 2
znucl              12 5
acell              3.06298338297 3.06298338297 3.52411724101 Angstr
rprim              1.00000000000 0.00000000000 0.00000000000
                   0.50000000000 0.86602540378 0.00000000000
                   0.00000000000 0.00000000000 1.00000000000
xred               0.00000000000 0.00000000000 0.00000000000
                  -0.33333333333 0.66666666667 0.50000000000
                   0.33333333333 0.33333333333 0.50000000000

### electrons
nband              14
#nspden             1
#nsppol             1
#spinat             9*0

### kpoints grid
ngkpt              24 24 16
nshiftk            1
shiftk             0 0 0

### plane waves and occupation
ecut               500 eV
occopt             3 
tsmear             0.1 eV

### q-points grid
ddb_ngqpt          6 6 4
eph_ngqpt_fine     24 24 16 # interpolate onto fine grid

### elph integration options
eph_intmeth        1
eph_fsmear        -0.1 
eph_fsewin         0.5 eV

### phonon calculation options
asr                1
chneut             1
dipdip             0 ## 1 is better but slow and unimportant for metals
dvdb_add_lr        0 ## 1 is better but slow and unimportant for metals

nqpt               1
qpt                8.33333333E-02  0.00000000E+00  0.00000000E+00

#prtphbands         1
#ph_ndivsm          251
#ph_nqpath          2
#ph_qpath           0 0 0
#                   2/3 1/3 0
#                   1/2 0 0
#                   0 0 0
#                   0 0 1/2
#                   2/3 1/3 1/2
#                   1/2 0 1/2
#                   0 0 1/2





