# Crystalline silicon
# BS run: Tamm-Dancoff approximation solved with the Haydock algorithm.

# BSE run with Haydock iterative method (only resonant + W + v)
optdriver 99  # BS calculation
irdkss  1     # Read the KSS file produced n tbse_1 
irdscr  1     # Read the SCR file produced in tbse_1 
gw_qlwl
1.0, 0.0, 0.0
0.0, 1.0, 0.0
0.0, 0.0, 1.0
0.0, 0.5, 0.5
0.5, 0.0, 0.5
0.5, 0.5, 0.0
gw_nqlwl 6
bs_calctype       1       # L0 is contstructed with KS orbitals and energies.
soenergy          1.6 eV  # Scissors operator used to correct the KS band structure.
bs_exchange_term  1       # Exchange term included.
bs_coulomb_term   11      # Coulomb term included using the full matrix W_GG'
bs_coupling       0       # Tamm-Dancoff approximation.

bs_loband         1
nband             120

bs_freq_mesh 0 10 0.01 eV   # Frequency mesh.

bs_algorithm        2      # Haydock method.
bs_haydock_niter   2000     # Max number of iterations for the Haydock method.
bs_haydock_tol     0.01 0  # Tolerance for the iterative method.
zcut               0.2 eV # complex shift to avoid divergences in the continued fraction.

# Definition of the k-point grid
# MUST be equal to the grid used for generating the KSS file.
kptopt 1                  # Option for the automatic generation of k points,
ngkpt  7 7 1            # This mesh is too coarse for optical properties.
nshiftk 1
shiftk    0.11 0.21 0.31  # This shift breaks the symmetry of the k-mesh.
chksymbreak 0             # Mandatory for using symmetry-breaking k-meshes in the BS code.

ecutwfn 20.0               # Cutoff for the wavefunction.
ecuteps 20.0               # Cutoff for W and /bare v used to calculate the BS matrix elements.
inclvkb 2                 # The commutator for the optical limit is correctly evaluated.
icutcoul 3                # Legacy value

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
diemac 4.0


