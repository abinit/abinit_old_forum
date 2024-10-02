#
#  the sequence of datasets makes the ground states and
#   all of the explicit perturbations of the single
#   Al atom in all directions, for the irreducible
#   qpoints in a 2x2x2 grid.
#
#  Note that the q-point grid must be a sub-grid of the k-point grid (here 4x4x4)
#
ndtset 20

#
# DATASET 1 : make ground state wavefunctions and density
# 
tolwfr1  1.0d-20
#nline1   8       # This is to expedite the convergence of higher-lying bands
rfphon1  0       # for DS1 do _not_ do perturbation
nqpt1    0       # for DS1 do _not_ do perturbation
prtwf1   1       # need GS wavefunctions for further runs
getwfk1  0
kptopt1  1
# enforce calculation of forces at each SCF step
optforces 1

qpt2    0.0 0.0 0.0
qpt3    0.5 0.0 0.0
qpt4    0.0 0.5 0.0    
qpt5    0.0 0.0 0.5        
qpt6    0.5 0.5 0.0
qpt7    0.0 0.5 0.5
qpt8    0.5 0.0 0.5
qpt9    0.5 0.5 0.5

#
#  DS5 get DDK perturbation (stored in GKK matrix element files)
#
tolwfr10  1.0d-20
qpt10     0.0 0.0 0.0
rfphon10  0
rfelfd10  2
prtwf10   0
nqpt10    1
# WF on full BZ
tolwfr11      1.0d-20
prtwf11       1
getwfk11      1
nstep11       1
nline11       1
nqpt11        0
rfphon11      0
# Compute the GKK correctly (no gauge problem)
# This step is very quick as NSCF+nstep 1
qpt12         0.0 0.0 0.0
prtgkk12      1            # print out gkk files directly
iscf12       -2
tolwfr12      1.0d-20
nstep12       1
nline12       1
getwfk12      11
get1den12     2
qpt13         0.5 0.0 0.0
prtgkk13      1
iscf13       -2
tolwfr13      1.0d-20
nstep13       1
nline13       1
getwfk13      11
get1den13     3
qpt14         0.0 0.5 0.0
prtgkk14      1
iscf14       -2
tolwfr14      1.0d-20
nstep14       1
nline14       1
getwfk14      11
get1den14     4
qpt15         0.0 0.0 0.5
prtgkk15      1            # print out gkk files directly
iscf15       -2
tolwfr15      1.0d-20
nstep15       1
nline15       1
getwfk15      11
get1den15     5
qpt16         0.5 0.5 0.0
prtgkk16      1
iscf16       -2
tolwfr16      1.0d-20
nstep16       1
nline16       1
getwfk16      11
get1den16     6
qpt17         0.0 0.5 0.5
prtgkk17      1
iscf17       -2
tolwfr17      1.0d-20
nstep17       1
nline17       1
getwfk17      11
get1den17     7
qpt18         0.5 0.0 0.5
prtgkk18      1
iscf18       -2
tolwfr18      1.0d-20
nstep18       1
nline18       1
getwfk18      11
get1den18     8
qpt19         0.5 0.5 0.5
prtgkk19      1
iscf19       -2
tolwfr19      1.0d-20
nstep19       1
nline19       1
getwfk19      11
get1den19     9

# DS12 get the ddk matrix elements on the full grid
prtgkk20     1
rfphon20     0             # no phonons here
rfelfd20     2             # Activate the calculation of the d/dk perturbation
qpt20        0.0 0.0 0.0   # This is a calculation at the Gamma point
iscf20      -3             # The d/dk perturbation must be treated non SC-ly
tolwfr20     1.0d-20       # Must use tolwfr for non-self-consistent calculations
nstep20      1
nline20      1
getwfk20     11
get1den20    10

# general data for all phonon calculations:
#
prepgkk 1        # flag to calculate all perturbations for el-phon calculations
use_nonscf_gkk 0 # enforce old default and scf-calculate all perturbations
nqpt 1           # 1 qpoint at a time
tolvrs 1.e-8     # tolerance on 2DTE convergence: potential^(1) is what we need
getwfk 1         # all other DS get wf from DS1
prtwf 0
rfatpol 1 2      # all atoms are perturbed
rfdir 1 1 1      # all directions of perturbation
rfphon 1

#
#  Common data for GS and perturbation runs
#

# The kpoint grid is minimalistic to keep the calculation manageable.
ngkpt        4 4 4
kptopt       3

# As the kinetic energy cutoff
ecut         15.0

# Use a centered grid for the kpoints
nshiftk      1
shiftk       0.0 0.0 0.5
nband  10
nbdbuf 2
nline 8

#Definition of the unit cell
acell  2.456   2.456    10.0  angstrom  # This is equivalent to   10.216 10.216 10.216
rprim  1.0   0.0        0.0          #  1.0    -0.577350269   0.0   # FCC primitive vectors (to be scaled by acell)
      -1/2   sqrt(0.75)  0.0           #0.5   0.866025   0.0    #    1.154700538   0.0   
       0.0   0.0       1.0

#Definition of the atom types
ntypat 1          # There is two types of atoms
znucl  6          # The keyword "znucl" refers to the atomic number of the 
                  # possible type(s) of atom. The pseudopotential(s) 
                  # mentioned in the "files" file must correspond
                  # to the type(s) of atom. Here, the only type is Silicon.
                         

#Definition of the atoms
natom 2           # There are three atoms
typat 1 1         # They  are of type 1 Mo,type 2 sulphur .
xred              # This keyword indicate that the location of the atoms
 0.0  0.0  0.0             # C
 1/3  2/3  0.0
#  include metallic occupation function with a small smearing
occopt       7
tsmear       0.001
nstep        800

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
