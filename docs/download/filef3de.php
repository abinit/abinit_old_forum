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
ngkpt  7 7 1        # This mesh is too coarse for optical properties.
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
nband2    170     # bands treated in the CG algorithm
nbandkss2 150     # bands written in the KSS file.
nbdbuf2    5      # The last five states are excluded from the converge check
                  # to facilitate the convergence 

# Dataset3: calculation of the kss file on the shifted k-mesh to break the symmetry.
#
iscf3    -2                
getden3   1
tolwfr3  1.0d-8  
kssform3   3
nband3    150               # Here we can reduce the number of bands since this KSS file 
nbandkss3 130               # will be used to construct the transition space 
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

# VARIABLES COMMON TO THE DIFFERENT DATASETS

# Definition of the unit cell
acell 7.326  7.326  44.2378
angdeg 90.00000000 90.00000000 90.00000000

#rprim # a cubic unit cell
#1 0 0
#0 1 0
#0 0 1

# Definition of the atom types
ntypat 5
znucl 57 13 8 38 22 

# Definition of the atoms
natom 30
typat 1 1 2 2 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 4 4 4 4 5 5 5 5
xred
0.006818504   0.006818504   4.026558064
0.002256150   0.002256150   4.976713498
0.493167890   0.493167890   5.426449203
0.493592114   0.493592114   4.486080340
0.001702662   0.492317071   4.471097507
0.492317071   0.001702662   4.471097507
0.490624575   0.490624575   4.009365944
0.002020017   0.492845153   5.416123932
0.492845153   0.002020017   5.416123932
0.493028621   0.493028621   4.951469252
0.002936627   0.493879115   0.493968024
0.493879115   0.002936627   0.493968024
0.493867261   0.493867261  -0.014681930
0.494305591   0.494305591   0.999583884
0.003030665   0.493779991   1.506245551
0.493779991   0.003030665   1.506245551
0.494150192   0.494150192   2.012311325
0.493780695   0.002829754   2.518216984
0.002829754   0.493780695   2.518216984
0.493058999   0.493058999   3.024649198
0.000699529   0.489332705   3.536005163
0.489332705   0.000699529   3.536005163
0.002817255   0.002817255  -0.040068196
0.003851173   0.003851173   0.967930854
0.003644063   0.003644063   1.979303159
0.003971318   0.003971318   2.985880744
0.494398478   0.494398478   0.456875249
0.495039394   0.495039394   1.470453194
0.494587856   0.494587856   2.483796460
0.495373111   0.495373111   3.501928948

# Definition of the planewave basis set 
ecut 25         # Maximal kinetic energy cut-off, in Hartree

istwfk *1
nstep  50      # Maximal number of SCF cycles
diemac 4


