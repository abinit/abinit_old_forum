#
#  the sequence of datasets makes the ground states and
#   all of the explicit perturbations of the single
#   Si atom in all directions, for the irreducible
#   qpoints in a 2x2x2 grid.
#
#  Note that the q-point grid must be a sub-grid of the k-point grid (here 4x4x4)
#
ndtset 10

#
# DATASET 1 : make ground state wavefunctions and density
# 
tolwfr1  1.0d-14
nline1   8       # This is to expedite the convergence of higher-lying bands
rfphon1  0       # for DS1 do _not_ do perturbation
nqpt1    0       # for DS1 do _not_ do perturbation
prtwf1   1       # need GS wavefunctions for further runs
getwfk1  0
kptopt1  1
# enforce calculation of forces at each SCF step
optforces 1

qpt2   0.0 0.0 0.0
qpt3   0.5 0.0 0.0
qpt4   0.5 0.5 0.0

#
#  DS5 get DDK perturbation (stored in GKK matrix element files)
#
tolwfr5  1.0d-14
qpt5     0.0 0.0 0.0
rfphon5  0
rfelfd5  2
prtwf5   0

# WF on full BZ
tolwfr6      1.0d-14
prtwf6       1
getwfk6      1
nstep6       1
nline6       1
nqpt6        0
rfphon6      0

# Compute the GKK correctly (no gauge problem)
# This step is very quick as NSCF+nstep 1
qpt7         0.0 0.0 0.0
prtgkk7      1            # print out gkk files directly
iscf7       -2
iqpt         1
tolwfr7      1.0d-14
nstep7       1
nline7       1
getwfk7      6
get1den7     2
qpt8         0.5 0.0 0.0
prtgkk8      1
iscf8       -2
tolwfr8      1.0d-14
nstep8       1
nline8       1
iqpt         2
getwfk8      6
get1den8     3
qpt9         0.5 0.5 0.0
prtgkk9      1
iscf9       -2
tolwfr9      1.0d-14
nstep9       1
iqpt         3
nline9       1
getwfk9      6
get1den9     4

# DS12 get the ddk matrix elements on the full grid
prtgkk10     1
rfphon10     0             # no phonons here
rfelfd10     2             # Activate the calculation of the d/dk perturbation
qpt10        0.0 0.0 0.0   # This is a calculation at the Gamma point
iscf10      -3             # The d/dk perturbation must be treated non SC-ly
tolwfr10     1.0d-14       # Must use tolwfr for non-self-consistent calculations
nstep10      1
nline10      1
getwfk10     6
get1den10    5

#
# general data for all phonon calculations:
#
prepgkk 1        # flag to calculate all perturbations for el-phon calculations
use_nonscf_gkk 0 # enforce old default and scf-calculate all perturbations
nqpt 1           # 1 qpoint at a time
tolvrs 1.e-8     # tolerance on 2DTE convergence: potential^(1) is what we need
getwfk 1         # all other DS get wf from DS1
prtwf 0
rfatpol 1 1      # all atoms are perturbed
rfdir 1 1 1      # all directions of perturbation
rfphon 1

#
#  Common data for GS and perturbation runs
#

# The kpoint grid is minimalistic to keep the calculation manageable.
ngkpt        4 4 4
kptopt       3

# As the kinetic energy cutoff
ecut         8.0

# Use a centered grid for the kpoints
nshiftk      1
shiftk       0.0 0.0 0.0

#
#  Common data
#

acell        3*10.18
rprim
 0.0 0.5 0.5
 0.5 0.0 0.5
 0.5 0.5 0.0

nband        10

#  include metallic occupation function with a small smearing
occopt       7
tsmear       0.001
natom        2
typat        1 1
xred         0.00 0.00 0.00
             1/4  1/4  1/4
nstep        800
ntypat       1
znucl        14

## After modifying the following section, one might need to regenerate the pickle database with runtests.py -r
#%%<BEGIN TEST_INFO>
#%% [setup]
#%% executable = abinit
#%% test_chain =  teph_1.in, teph_2.in, teph_3.in, teph_4.in, teph_5.in, teph_6.in
#%% [files]
#%% files_to_test = 
#%%   teph_1.out, tolnlines= 57, tolabs=  3.000e-02, tolrel=  6.000e-03, fld_options= -easy
#%% psp_files =  13al.981214.fhi 
#%% [paral_info]
#%% max_nprocs = 2
#%% [extra_info]
#%% authors = M. Verstraete 
#%% keywords = NC, DFPT, EPH
#%% description = 
#%%   the sequence of datasets makes the ground states and
#%%    all of the explicit perturbations of the single
#%%    Al atom in all directions, for the irreducible
#%%    qpoints in a 2x2x2 grid.
#%% 
#%%   Note that the q-point grid must be a sub-grid of the k-point grid (here 4x4x4)
#%%<END TEST_INFO>
