#Fe in FCC structure

# Common variables
####################
# system
 acell   3*6.496
 natom   1
 fband   2
 ntypat  1
 typat   1
 znucl   28.0
 rprim   0.0 0.5 0.5  # FCC
         0.5 0.0 0.5
         0.5 0.5 0.0
 xred    0.0  0.0  0.0
 occopt  7
 tsmear  0.01

# convergence parameters
 ecut    30
 toldfe  1.0d-10
 nstep   60

# atomic relaxation
# ionmov      2
# tolmxf      5.0d-5
# optcell     1
# ecutsm      0.5

# kpts
 kptopt     4
 ngkpt      4 4 4
 nshiftk   4
 shiftk    0.5 0.5 0.5
           0.5 0.0 0.0
           0.0 0.5 0.0
           0.0 0.0 0.5

# Magnetism and so
 nspinor    2
 nsppol     1
 nspden     4
 spinat     0.0  0.0  2.5 
 so_psp     1

# other
 ixc     1    # xc approximation (should be consistent with psp)
 enunit  1    # in which format eigenvalues are printed 0 (Ha), 1 (eV), 2 (both)
# irdden  1
# irdwfk  1
 prtdos  1
