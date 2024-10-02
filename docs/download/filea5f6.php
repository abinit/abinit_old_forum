# Crystalline silicon
# BS run: Tamm-Dancoff approximation solved with the Haydock algorithm.

# BSE run with Haydock iterative method (only resonant + W + v)
optdriver 99  # BS calculation
irdwfk  1     # Read the WFK file produced in tbs_1 
irdscr  1     # Read the SCR file produced in tbs_1 

bs_calctype       1       # L0 is constructed with KS orbitals and energies.
#mbpt_sciss          0.8 eV  # Scissors operator used to correct the KS band structure.
bs_exchange_term  1       # Exchange term included.
bs_coulomb_term   11      # Coulomb term included using the full matrix W_GG'
bs_coupling       0       # Tamm-Dancoff approximation.

bs_loband         105
nband             120

bs_freq_mesh 0 6 0.02 eV   # Frequency mesh.

bs_algorithm        2      # Haydock method.
bs_haydock_niter   200     # Max number of iterations for the Haydock method.
bs_haydock_tol     0.05 0  # Tolerance for the iterative method.
zcut               0.15 eV # complex shift to avoid divergences in the continued fraction.

# Definition of the k-point grid
# MUST be equal to the grid used for generating the WFK file.
kptopt 1                  # Option for the automatic generation of k points,
ngkpt  4 4 4              # This mesh is too coarse for optical properties.
nshiftk 1
shiftk    0.11 0.21 0.31  # This shift breaks the symmetry of the k-mesh.
chksymbreak 0             # Mandatory for using symmetry-breaking k-meshes in the BS code.

ecutwfn 12.0               # Cutoff for the wavefunction.
ecuteps 2.0               # Cutoff for W and /bare v used to calculate the BS matrix elements.
inclvkb 2                 # The commutator for the optical limit is correctly evaluated.
gw_icutcoul 3               # Legacy value

# VARIABLES COMMON TO THE DIFFERENT DATASETS

# Definition of the unit cell: fcc
spgroup  2
acell 6.417 6.510 6.461 angstrom
angdeg 121.10 88.38 106.47


# Definition of the atom types
ntypat 2         # There is only one type of atom
znucl 75 16         # The keyword "zatnum" refers to the atomic number of the
                    # possible type(s) of atom. The pseudopotential(s)
                    # mentioned in the "files" file must correspond
                    # to the type(s) of atom. Here, the only type is Silicon.


# Definition of the atoms
natom 12             # There are two atoms
natrd 6
typat 1 1 2 2 2 2           # They both are of type 1, that is, Silicon.
                            # This keyword indicate that the location of the atoms
xred
    0.4925  0.0564  0.2477
    0.5026  0.5112  0.2974
    0.2174  0.2498  0.3676
    0.2769  0.7705  0.3819
    0.7562  0.2729  0.1178
    0.6975  0.7526  0.1169


# Definition of the planewave basis set 
ecut 20        # Maximal kinetic energy cut-off, in Hartree
pawecutdg  25.0
pawovlp 5

istwfk *1
nstep  100     # Maximal number of SCF cycles
diemac 12.0

 pp_dirpath "$ABI_PSPDIR"
 pseudos "Re.GGA_PBE-JTH.xml,S.GGA_PBE-JTH.xml"

##############################################################
# This section is used only for regression testing of ABINIT #
##############################################################
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain = tbs_1.abi, tbs_2.abi, tbs_3.abi, tbs_4.abi
#%% [files]
#%% files_to_test = 
#%%   tbs_2.abo, tolnlines= 10, tolabs=  1.1e-2,    tolrel=  4.0e-2, fld_options =-ridiculous
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = M. Giantomassi
#%% keywords = GW, BSE
#%% description = 
#%%  Crystalline silicon
#%%   BS run: Tamm-Dancoff approximation solved with the Haydock algorithm.
#%%<END TEST_INFO>

