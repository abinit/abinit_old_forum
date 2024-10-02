############################################################
# GS + Band Structure + Fermi Surface calculation for TiO2 
############################################################

ndtset  3

#Dataset 1 : GS calculation
kptopt1  1              # Use symmetry and treat only inequivalent points
ngkpt1   5 5 10
nshiftk1 1
shiftk1  0.5 0.5 0.5    # This choice preserves the hexagonal symmetry of the grid,
occopt1  1
nband1   26
prtden1  1
tolvrs1  1.0d-18     

#Dataset 2 : Band structure calculation
iscf2   -2
getden2  1
kptopt2 -6
tolwfr2  1.0d-12
nband2   26
ndivk2   15 7 12 15 15 12 # 15, 7, 12, 15, 15 and 12 divisions of 6 segments, delimited
                          # by 7 points
kptbounds2  0.5 0.5 0.5  #A
            0.0 0.0 0.0  #Gamma
            0.5 0.5 0.0  #M
            0.5 0.0 0.0  #X
            0.0 0.0 0.0  #Gamma
            0.0 0.0 0.5  #Z
            0.5 0.0 0.5  #R

#Dataset 3 : Output of the Fermi surface
prtfsurf3 1  # To output the FS
getwfk3  -1
iscf3    -3   # NSCF calculation, occupancies and Fermi level are calculated once convergence is achieved.
              # It should give the same FS as a GS calculation provided that the two 
              # k-meshes are sufficiently dense.
getden3   1
occopt3   1
nband3    26
kptopt3   1
ngkpt3    8 8 8       # too coarse. 24 24 24 for a reasonable FS 
shiftk3   0.0 0.0 0.0 # Shifted grids are not supported by Xcrysden.
tolwfr3   1.0d-12

#COMMON INPUT DATA###########################################################                  
#
ecut    50
ecutsm  0.5
nstep   100

# TiO2 lattice structure
ntypat  2
znucl   22 8
natom   6
typat   1 1 2 2 2 2

acell   2*8.5577462433E+00  5.5134124864E+00
angdeg  90  90  90
spgroup 136
brvltt -1

# Atomic positions 
xred       0.00   0.00   0.00  #Ti1
           0.50   0.50   0.50  #Ti2
           0.3033485499  0.3033485499  0.00  #O1
          -0.3033485499 -0.3033485499  0.00  #O2
           0.1966514501  0.8033485499  0.50  #O3
           0.8033485499  0.1966514501  0.50  #O4

ixc     3
timopt  2
