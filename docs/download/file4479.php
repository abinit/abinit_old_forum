# GaP-Si
#


#Definition of occupation numbers
occopt 3
#prtdos 1
tsmear 0.001

#Definition of the k-point grid 
ngkpt  4 6 2   
nshiftk 4
shiftk  0.5 0.5 0.5  # These shifts will be the same for all grids
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5


#Definition of the unit cell
acell  2*7.302292  10.327   # Lattice parameters of bulk aluminum
rprim  1 0 0    # The lattice vector along the z direction
       0 1 0     # is doubled with respect to previous run.
       0  0 4     # 

chkprim 0

#Definition of the atom types
ntypat 3          # There is only one type of atom
znucl 31 15 14    # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Aluminum
                         

#Definition of the atoms
natom 16           # Three atoms per cell: three aluminum layers and some vacuum
typat 2 1 2 1 2 1 2 9*3 # These atoms are of type 1, that is, Aluminum
             xred    -6.9388939039E-18 -7.57778781E-17 -4.2927101409E-03
                     0.0000000000E+00  5.0000000000E-01  6.0268031303E-02
                     5.0000000000E-01  5.0000000000E-01  1.2351008304E-01
                     5.0000000000E-01  1.0000000000      1.8750000000E-01
                    -6.9388939039E-18  -7.57778781E-17   2.5148991696E-01
                     0.0000000000E+00  5.0000000000E-01  3.1473196870E-01
                     5.0000000000E-01  5.0000000000E-01  3.7929271014E-01
                     5.0000000000E-01  1.0000000000      4.3727216486E-01
                    -6.9388939039E-18 -7.57778781E-17  4.9918664961E-01
                     0.0000000000E+00  5.0000000000E-01  5.6168046817E-01
                     5.0000000000E-01 5.0000000000E-01  6.2460120594E-01
                     5.0000000000E-01  1.0000000000      6.8750000000E-01
                    -6.9388939039E-18 -7.57778781E-17  7.5039879406E-01
                     0.0000000000E+00  5.0000000000E-01  8.1331953183E-01
                     5.0000000000E-01 5.0000000000E-01  8.7581335039E-01
                     5.0000000000E-01  1.0000000000  9.3772783514E-01

#The relaxation
ionmov 0
tolmxf 5.0d-4
ntime 50

#Exchange-correlation functional
ixc 11             # LDA Teter Pade parametrization

#Definition of the planewave basis set
ecut  20.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 80          # Maximal number of SCF cycles
toldff 5.0d-5     
