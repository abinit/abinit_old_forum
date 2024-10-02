# Crystalline silicon 
# Preparatory run for BS calculations
#
# There are four datasets specified in this input:
# 1) Ground-state calculation to get the density.
# 2) NSCF run to generate the KSS file on a symmetric k-mesh (4x4x4, gamma-centered) 
# 3) NSCF run to generate another KSS file on a shifted 4x4x4 k-mesh that breaks the symmetry of the BZ sampling
# 4) SCR calculation with the KSS file generated in the second dataset 
#
ndtset 4

# Definition of the k-point grid
kptopt 1             # Option for the automatic generation of k points,
ngkpt  5 5 5        # This mesh is too coarse for optical properties.
nshiftk 1
shiftk  0.0 0.0 0.0  # Gamma-centered k-mesh

# Dataset1: self-consistent calculation
#
tolvrs1 1.0d-8
prtden1 1

# Dataset2: definition of parameters for the calculation of the kss file on the symmetric k-mesh.
#
iscf2    -2       # NSCF run
getden2  1        # Read previous density file
tolwfr2  1.0d-8  
kssform2   3      # conjugate-gradient algorithm (CG)
nband2    80     # bands treated in the CG algorithm
nbandkss2 100     # bands written in the KSS file.
nbdbuf2    5      # The last five states are excluded from the converge check
                  # to facilitate the convergence 

# Dataset3: calculation of the kss file on the shifted k-mesh to break the symmetry.
#
iscf3    -2                
getden3   1
tolwfr3  1.0d-8  
kssform3   3
nband3    60               # Here we can reduce the number of bands since this KSS file 
nbandkss3 80               # will be used to construct the transition space 
nbdbuf3    5               
chksymbreak3 0             # To skip the check on the k-mesh.
shiftk3    0.11 0.21 0.31  # This shift breaks the symmetry of the k-mesh.

# Dataset3: creation of the screening (eps^-1) matrix
#
optdriver4 3
gwpara4    2
inclvkb4   2
awtr4      1
symchi4    1
getkss4    2
ecuteps4   6
ecutwfn4   8
nband4    100  # This value leads to well converged QP energies, see the first GW tutorial
nfreqre4   1   # Only the static limit is needed for standard BSE calculations.
nfreqim4   0
