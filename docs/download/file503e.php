# Crystalline silicon 
# Template for converge study on ngkpt
# 1) GS
# 2) generation of the KSS file on a symmetric k-mesh
# 3) generation of the KSS file on a shifted k-mesh that breaks the symmetry of the BZ sampling
# 4) SCR calculation using the KSS generated in the second dataset 
# 5) BS run with Haydock method (no coupling)
#
ndtset 5

# Definition of the k-point grid
kptopt  1             # Option for the automatic generation of k points,
ngkpt   3  3  3 
nshiftk 4
#shiftk  0.0 0.0 0.0   # Gamma-centered k-mesh is 
shiftk   0.5 0.5 0.5       # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5

nsppol  1

# Dataset1: self-consistent calculation
tolvrs1 1.0d-8
prtden1 1

# Dataset2: definition of parameters for the calculation of the kss file on the symmetric k-mesh.
iscf2    -2       # non self-consistency, read previous density file
getden2   1
tolwfr2   1.0d-8  
kssform2  3       # CG algo
nband2    105
nbandkss2 100
nbdbuf2   5       # The last five states are excluded from the converge check

# Dataset3: calculation of the kss file on the shifted k-mesh to break the symmetry.
iscf3    -2 # non self-consistency, read previous density file
getden3   1
tolwfr3  1.0d-8  
kssform3   3
nband3    15            # Here we can reduce the number of bands since this KSS file is only used in the BS run.
nbandkss3 10             
nbdbuf3    5            # The last five states are excluded from the converge check
chksymbreak3 0          # To skip the check on the k-mesh.
##shiftk3    0.11 0.21 0.31  # This shift breaks the symmetry of the k-mesh.
shiftk3  0.5 0.5 0.5       # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5




# Dataset3: creation of the screening (eps^-1) matrix
optdriver4 3
gwpara4    2
inclvkb4   2
awtr4      1
symchi4    1
getkss4    2
ecuteps4   6
ecutwfn4   8
nband4    100
nfreqre4   1   # Only the static limit is needed for standard BSE calculations.
nfreqim4   0

# BSE run with Haydock iterative method (only resonant + W + v)
optdriver5 99              # BS calculation
getscr5    4
getkss5    3               # Read the KSS generated on the shifted k-mesh.



chksymbreak5 0          # To skip the check on the k-mesh.
####ngkpt   2 2 2  
####nshiftk5 4
shiftk5  0.5 0.5 0.5       # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5


#shiftk5    0.11 0.21 0.31  # This shift breaks the symmetry of the k-mesh.

bs_calctype5       2
soenergy5          0.0 eV  # Scissors operator used to correct the KS band structure.
bs_exchange_term5  1       # Exchange term included.
bs_coulomb_term5   11
bs_coupling5       0       # Tamm-Dancoff approximation.

bs_loband5 2  
nband5     8
ecuteps5   3

bs_freq_mesh5 0 6 0.02 eV  # Frequency mesh.

bs_algorithm5        2      # Haydock method.
bs_haydock_niter5   100     # Max number of iterations for the Haydock method.
bs_haydock_tol5     0.05 0  # Tolerance for the iterative method.
zcut5               0.1 eV  # complex shift to avoid divergences in the continued fraction.

ecutwfn5 8.0               # Cutoff for the wavefunction.
inclvkb5 2

# VARIABLES COMMON TO THE DIFFERENT DATASETS

# Definition of the unit cell: fcc
acell 3*10.217         # This is equivalent to   10.217 10.217 10.217
rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5
       0.5  0.5  0.0

# Definition of the atom types
ntypat 1         # There is only one type of atom
znucl 14         # The keyword "zatnum" refers to the atomic number of the
                 # possible type(s) of atom. The pseudopotential(s)
                 # mentioned in the "files" file must correspond
                 # to the type(s) of atom. Here, the only type is Silicon.

# Definition of the atoms
natom 2           # There are two atoms
typat 1 1         # They both are of type 1, that is, Silicon.
xred              # Reduced coordinate of atoms
   0.0  0.0  0.0
   0.25 0.25 0.25

# Definition of the planewave basis set 
ecut 8         # Maximal kinetic energy cut-off, in Hartree

istwfk *1
nstep  50      # Maximal number of SCF cycles
diemac 12.0
