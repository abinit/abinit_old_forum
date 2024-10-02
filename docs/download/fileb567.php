# PbTiO3: Computation of the band gap.
# Calculation of the GW corrections
# STEP 3

####################
# PbTiO3 structure #
####################

# Definition of the unit cell
acell   7.31803  7.31803  8.05746
spgroup 99
spgaxor 1
brvltt  1

#Used for the generation of alchemical pseudoatoms
#npsp  4
znucl 82 8 22
ntypat 3
#ntypalch 1
#mixalch  1.00 0.00

#Definition of the atoms
natom 5
typat 1 3 2 2 2
xred
0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
5.0000000000E-01  5.0000000000E-01  5.3930972737E-01
5.0000000000E-01  5.0000000000E-01  1.2421819610E-01
0.0000000000E+00  5.0000000000E-01  6.2786881684E-01
5.0000000000E-01  0.0000000000E+00  6.2786881684E-01

# Definition of the k-point grid
ngkpt   6 6 6  
nshiftk 1
shiftk  0.0 0.0 0.0         

# Use only symmorphic operations
symmorphi 0

#Definition of the planewave basis set
ecut  12.0   

#Definition of the SCF procedure
ntime 100                      
diemac  12.0                       
enunit  2
prtvol 1
#kssform 3

###############################################################################


# Calculation of the quasiparticle Wannier functions
getden     1         # Point to the gs density
irdwfk     1         # Must point to lda wavefunction file completely
irdqps     1         # point to the converged QPS file from the QPSCGW run,
kptopt     3         # Must use full-zone k mesh for wannier90
istwfk     216*1
iscf      -2
nstep      0         # Irreducible-zone wavefunctions will be transformed
                     #  using symmetry operations to fill the full zone,
                     #  and must not be modified (for consistency with GW)
tolwfr     1.0d-8    # Dummy, but necessary
nband      50       # Must be consistent with nband in quasiparticle GW above
prtwant     3        # Flag for wannier90 interface with quaisparticles
w90iniprj   2        # Flag to use hydrogenic or gaussian orbital initial
                     #  projectors (to be specified in *.win file)
w90prtunk   0        # Flag for producing UNK files necessary for plotting
                     #  (suppressed here by 0 value)


#Common to all model GW calculations
#gwpara     2   #was not used in the original run
rhoqpmix   1.0  
nkptgw     40
kptgw     
     0.00000000E+00  0.00000000E+00  0.00000000E+00
     1.66666667E-01  0.00000000E+00  0.00000000E+00
     3.33333333E-01  0.00000000E+00  0.00000000E+00
     5.00000000E-01  0.00000000E+00  0.00000000E+00
     1.66666667E-01  1.66666667E-01  0.00000000E+00
     3.33333333E-01  1.66666667E-01  0.00000000E+00
     5.00000000E-01  1.66666667E-01  0.00000000E+00
     3.33333333E-01  3.33333333E-01  0.00000000E+00
     5.00000000E-01  3.33333333E-01  0.00000000E+00
     5.00000000E-01  5.00000000E-01  0.00000000E+00
     0.00000000E+00  0.00000000E+00  1.66666667E-01
     1.66666667E-01  0.00000000E+00  1.66666667E-01
     3.33333333E-01  0.00000000E+00  1.66666667E-01
     5.00000000E-01  0.00000000E+00  1.66666667E-01
     1.66666667E-01  1.66666667E-01  1.66666667E-01
     3.33333333E-01  1.66666667E-01  1.66666667E-01
     5.00000000E-01  1.66666667E-01  1.66666667E-01
     3.33333333E-01  3.33333333E-01  1.66666667E-01
     5.00000000E-01  3.33333333E-01  1.66666667E-01
     5.00000000E-01  5.00000000E-01  1.66666667E-01
     0.00000000E+00  0.00000000E+00  3.33333333E-01
     1.66666667E-01  0.00000000E+00  3.33333333E-01
     3.33333333E-01  0.00000000E+00  3.33333333E-01
     5.00000000E-01  0.00000000E+00  3.33333333E-01
     1.66666667E-01  1.66666667E-01  3.33333333E-01
     3.33333333E-01  1.66666667E-01  3.33333333E-01
     5.00000000E-01  1.66666667E-01  3.33333333E-01
     3.33333333E-01  3.33333333E-01  3.33333333E-01
     5.00000000E-01  3.33333333E-01  3.33333333E-01
     5.00000000E-01  5.00000000E-01  3.33333333E-01
     0.00000000E+00  0.00000000E+00  5.00000000E-01
     1.66666667E-01  0.00000000E+00  5.00000000E-01
     3.33333333E-01  0.00000000E+00  5.00000000E-01
     5.00000000E-01  0.00000000E+00  5.00000000E-01
     1.66666667E-01  1.66666667E-01  5.00000000E-01
     3.33333333E-01  1.66666667E-01  5.00000000E-01
     5.00000000E-01  1.66666667E-01  5.00000000E-01
     3.33333333E-01  3.33333333E-01  5.00000000E-01
     5.00000000E-01  3.33333333E-01  5.00000000E-01
     5.00000000E-01  5.00000000E-01  5.00000000E-01
bdgw   
       1 30   
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30

              

