#Band structure
#TiO2 - rutile with N doped with 25%

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                   # taking into account the symmetry
nshiftk1 1
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
ngkpt1   5 5 10
prtden1  1         # Print the density, for use by dataset 2
tolvrs1  1.0d-18

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -6
ndivk2   15 7 12 15 15 12 # 15, 7, 12, 15, 15 and 12 divisions of 6 segments, delimited
                          # by 7 points
kptbounds2  0.5 0.5 0.5  #A
            0.0 0.0 0.0  #Gamma
            0.5 0.5 0.0  #M
            0.5 0.0 0.0  #X
            0.0 0.0 0.0  #Gamma
            0.0 0.0 0.5  #Z
            0.5 0.0 0.5  #R
tolwfr2  1.0d-12

#Starting approximation for the unit cell
   acell   2*8.5577462462E+00  1.1026824973E+01

  angdeg   90  90  90
# spgroup   136
#  brvltt  -1

#Definition of the atom types and atoms
   natom   12
  ntypat   3
   typat   1 1 2 2 2 3 1 1 2 2 2 2 
   znucl   22 8 7

#Starting approximation for atomic positions in REDUCED coordinates
    xred   0.00   0.00   0.00  #Ti1
           0.50   0.50   0.25  #Ti2
           3.0214678510E-01  3.0349279601E-01  0.00  #O1
          -3.0349279601E-01 -3.0214678510E-01  0.00  #O2
           1.9571022482E-01  8.0428977518E-01  0.25  #O3
           8.0065896067E-01  1.9934103933E-01  0.25  #N
           0.00   0.00   0.50  #Ti3
           0.50   0.50   0.75  #Ti4
           3.0214678510E-01  3.0349279601E-01  0.50  #O4
          -3.0349279601E-01 -3.0214678510E-01  0.50  #O5
           2.0051376568E-01  7.9948623432E-01  0.75  #O6
           8.0225957235E-01  1.9774042765E-01  0.75  #O7

#Gives the number of bands, explicitely (do not take the default)
   nband   36
  occopt   1

#Definition of the plane wave basis set
  ecut     50
  ecutsm   0.5

#Definition of the k-point grid
  kptopt   1              # Use symmetry and treat only inequivalent points
   ngkpt   5 5 10
 nshiftk   1
  shiftk   0.5 0.5 0.5

#Definition of the self-consistency procedure
#  diemac  9.0            # Model dielectric preconditioner
    iscf  7              # Use Pulay mixing sheme for SCF cycle
#npulayit  7              # Number of Pulay iterations
#  nnsclo  2              # Number of non-self consistent loops
#   nline  6              # Number of line minimisations
   nstep  100            # Maxiumum number of SCF iterations
  tolvrs  1.0d-18        # Strict tolerance on (squared) residual of the
                         # SCF potential needed for accurate forces and
                         # stresses in the structural optimization, and
                         # accurate wave functions in the RF calculations

#Define xc approximation
    ixc   1

 timopt   2
