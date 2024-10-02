# Crystalline silicon 
# Preparatory run for BS calculations
#
# There are four datasets specified in this input:
# 1) Ground-state calculation to get the density.
# 2) NSCF run to generate the WFK file on a symmetric k-mesh (4x4x4, gamma-centered) 
# 3) NSCF run to generate another WFK file on a shifted 4x4x4 k-mesh that breaks the symmetry of the BZ sampling
# 4) SCR calculation with the WFK file generated in the second dataset 
#
ndtset 4

# Definition of the k-point grid
kptopt 1             # Option for the automatic generation of k points,
ngkpt  4 4 4         # This mesh is too coarse for optical properties.
nshiftk 1
shiftk  0.0 0.0 0.0  # Gamma-centered k-mesh

# Dataset1: self-consistent calculation
#
tolvrs1 1.0d-8
prtden1 1

# Dataset2: definition of parameters for the calculation of the WFK file on the symmetric k-mesh.
#
iscf2    -2       # NSCF run
getden2  1        # Read previous density file
tolwfr2  1.0d-8  
nband2    120     # bands treated in the CG algorithm
nbdbuf2    5      # The last five states are excluded from the converge check
                  # to facilitate the convergence 

# Dataset3: calculation of the WFK file on the shifted k-mesh to break the symmetry.
#
iscf3    -2                
getden3   1
tolwfr3  1.0d-8  
nband3    120               # Here we can reduce the number of bands since this WFK file 
                           # will be used to construct the transition space 
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
getwfk4    2
ecuteps4   6
ecutwfn4   12
nband4    120  # This value leads to well converged QP energies, see the first GW tutorial
nfreqre4   1   # Only the static limit is needed for standard BSE calculations.
nfreqim4   0

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
xred                    # will follow, one triplet of number for each atom
    0.4925  0.0564  0.2477
    0.5026  0.5112  0.2974
    0.2174  0.2498  0.3676
    0.2769  0.7705  0.3819
    0.7562  0.2729  0.1178
    0.6975  0.7526  0.1169  
                  

# Definition of the planewave basis set 
ecut 20         # Maximal kinetic energy cut-off, in Hartree
pawecutdg  25.0
pawovlp 5  

istwfk *1
nstep  100      # Maximal number of SCF cycles
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
#%%   tbs_1.abo,  tolnlines= 20, tolabs=  1.1e-2,    tolrel=  4.0e-2
#%% [shell]
#%% post_commands =
#%%  ww_cp tbs_1o_DS3_WFK tbs_2i_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_2i_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_3i_DS1_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_3i_DS1_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_3i_DS2_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_3i_DS2_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_3i_DS3_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_3i_DS3_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_3i_DS4_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_3i_DS4_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_3i_DS5_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_3i_DS5_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_4i_DS1_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_4i_DS1_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_4i_DS2_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_4i_DS2_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_4i_DS3_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_4i_DS3_SCR;
#%%  ww_cp tbs_1o_DS3_WFK tbs_4i_DS4_WFK;
#%%  ww_cp tbs_1o_DS4_SCR tbs_4i_DS4_SCR; 
#%% [paral_info]
#%% max_nprocs = 4
#%% [extra_info]
#%% authors = M. Giantomassi
#%% keywords = GW, BSE
#%% description = 
#%%  Crystalline silicon 
#%%  Preparatory run for BS calculations
#%% 
#%%  There are four datasets specified in this input:
#%%  1) Ground-state calculation to get the density.
#%%  2) NSCF run to generate the WFK file on a symmetric k-mesh (4x4x4, gamma-centered) 
#%%  3) NSCF run to generate another WFK file on a shifted 4x4x4 k-mesh that breaks the symmetry of the BZ sampling
#%%  4) SCR calculation with the WFK file generated in the second dataset 
#%%<END TEST_INFO>

