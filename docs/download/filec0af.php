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
nband             30

bs_freq_mesh 0 10 0.01 eV   # Frequency mesh.

bs_algorithm        2      # Haydock method.
bs_haydock_niter   2000     # Max number of iterations for the Haydock method.
bs_haydock_tol     0.01 0  # Tolerance for the iterative method.
zcut               0.2 eV # complex shift to avoid divergences in the continued fraction.

# Definition of the k-point grid
# MUST be equal to the grid used for generating the KSS file.
kptopt 1                  # Option for the automatic generation of k points,
ngkpt  5 5 5             # This mesh is too coarse for optical properties.
nshiftk 1
shiftk    0.11 0.21 0.31  # This shift breaks the symmetry of the k-mesh.
chksymbreak 0             # Mandatory for using symmetry-breaking k-meshes in the BS code.

ecutwfn 20.0               # Cutoff for the wavefunction.
ecuteps 20.0               # Cutoff for W and /bare v used to calculate the BS matrix elements.
inclvkb 2                 # The commutator for the optical limit is correctly evaluated.
icutcoul 3                # Legacy value
