#  MonoH_MonoH_2x1_12layers
#  14 Layers        1 H on top + 12-Layers Si + 1 H on bottom
#                   1x1e       + 12x4e        + 1x1e = 50/2 => Nv=25
# Calculation of the GW correction to the direct band gap in Gamma
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the kss file 
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      4

kptopt    1
ngkpt     4 4 4         # Density of k points used for the automatic tests of the tutorial
#ngkpt    8 16 1        # Density of k points needed for a converged calculation

nshiftk  1
shiftk   0.0 0.0 0.0  # This grid contains the Gamma point, which is the point at which
istwfk  *1            # For the GW computations, do not take advantage of the 
                      # specificities of k points to reduce the number of components of the
                      # wavefunction.
chksymbreak 0
#autoparal 1
#paral_kgb 1
#max_ncpus 10

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
nshiftk1 4
shiftk1  0.5 0.5 0.5  # This grid is the most economical, but does not contain the Gamma point.
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
istwfk1 *0            # For the ground state, let the code use the time-reversal symmetry
prtden1  1            # Print out density


# Dataset2: calculation of kss file
# Definition of k-points
iscf2     -2       # Non self-consistent calculation
getden2   -1       # Read previous density file
kssform2   1 
nband2     100
nbandkss2 -1       # Number of bands to store in KSS file
nbdbuf2    5


# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3 3       # Screening calculation
getkss3   -1       # Obtain KSS file from previous dataset
nband3     100     # Bands to be used in the screening calculation
#ecutwfn3   5.0     # Planewaves to be used to represent the wavefunctions
ecuteps3   20.0    # Dimension of the screening matrix
ppmfrq3    16.7 eV # Imaginary frequency where to calculate the screening


# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4      # Self-Energy calculation
getkss4    -2      # Obtain KSS file from dataset 1
getscr4    -1      # Obtain SCR file from previous dataset
nband4      100    # Bands to be used in the Self-Energy calculation
#ecutwfn4    5.0    # Planewaves to be used to represent the wavefunctions
ecutsigx4   10.0   # Dimension of the G sum in Sigma_x
                   # (the dimension in Sigma_c is controlled by npweps)
nkptgw4     1      # number of k-point where to calculate the GW correction
kptgw4                       # k-points
  0.000    0.000    0.000    # (Gamma)
bdgw4       25 26            # calculate GW corrections for bands from 25 to 26
#icutcoul4   3      # old deprecated value of icutcoul, only used for legacy

# Definition of the unit cell: fcc
acell   7.255773198 7.255773198 46
rprim   0.8660254037844385  -0.500000   0.000000
        0.0000000000000000   1.000000   0.000000
        0.0000000000000000   0.000000   1.000000 

# Definition of the atom types
ntypat  2         # There are two types of atom
znucl   1 14      # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.

# Definition of the atoms
natom   14              # There are two atoms
typat   1*1 12*2 1*1    # They both are of type 1, that is, Silicon.
xcart                   # Cartesian coordinate of atoms
     0.00000000000000    0.00000000000000    18.35263538077075
     0.00000000000000    0.00000000000000    15.55132426971724
     4.18912260765629    0.00000000000000    14.07024576783943
     4.18912260765629    0.00000000000000     9.62701026220597
     2.09456130382814   -3.62788659779806     8.14593176032815
     2.09456130382814   -3.62788659779806     3.70269625469461
     0.00000000000000    0.00000000000000     2.22161775281679
     0.00000000000000    0.00000000000000    -2.22161775281679
    -2.09456130382814    3.62788659779806    -3.70269625469461
    -2.09456130382814    3.62788659779806    -8.14593176032815
    -4.18912260765629    0.00000000000000    -9.62701026220597
    -4.18912260765629    0.00000000000000   -14.07024576783943
     0.00000000000000    0.00000000000000   -15.55132426971724
     0.00000000000000    0.00000000000000   -18.35263538077075

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 5.0          # Maximal kinetic energy cut-off, in Hartree

# Definition of the SCF procedure
nstep   100        # Maximal number of SCF cycles
diemac  12.0      # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
tolwfr  1.0d-10   

# This line added when defaults were changed (v5.3) to keep the previous, old behaviour
#  iscf 5
