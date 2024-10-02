#
#  the sequence of datasets makes the ground states and
#   all of the explicit perturbations of the single
#   MoS2 in all directions, for the irreducible
#   qpoints in a 2x2x2 grid.
#
#  Note that the q-point grid must be a sub-grid of the k-point grid (here 4x4x4)
#
ndtset 20

#
# DATASET 1 : make ground state wavefunctions and density
# 
tolwfr1  1.0d-20
nline1   8       # This is to expedite the convergence of higher-lying bands
rfphon1  0       # for DS1 do _not_ do perturbation
nqpt1    0       # for DS1 do _not_ do perturbation
prtwf1   1       # need GS wavefunctions for further runs
getwfk1  0
kptopt1  3
# enforce calculation of forces at each SCF step
# enforce calculation of forces at each SCF step
optforces 1
ngqpt      8 8 1
nshiftq   1
shiftq  0.0 0.0 0.0
qptopt   3
iqpt2    1
iqpt3    2
iqpt4    3    
iqpt5    4        
iqpt6    5
iqpt7    6
iqpt8    7
iqpt9    8

#
#  DS5 get DDK perturbation (stored in GKK matrix element files)
#
tolwfr10  1.0d-20
iqpt10     0
rfphon10  0
rfelfd10  2
prtwf10   0
nqpt10    1
# WF on full BZ
kptopt11      3
tolwfr11      1.0d-20
prtwf11       1
getwfk11      1
nstep11       1
nline11       1
nqpt11        0
rfphon11      0
# Compute the GKK correctly (no gauge problem)
# This step is very quick as NSCF+nstep 1
iqpt12         1
prtgkk12      1            # print out gkk files directly
iscf12       -2
tolwfr12      1.0d-20
nstep12       1
nline12       1
getwfk12      11
get1den12     2
iqpt13         2
prtgkk13      1
iscf13       -2
tolwfr13      1.0d-20
nstep13       1
nline13       1
getwfk13      11
get1den13     3
iqpt14         3
prtgkk14      1
iscf14       -2
tolwfr14      1.0d-20
nstep14       1
nline14       1
getwfk14      11
get1den14     4
iqpt15         4
prtgkk15      1            # print out gkk files directly
iscf15       -2
tolwfr15      1.0d-20
nstep15       1
nline15       1
getwfk15      11
get1den15     5
iqpt16         5
prtgkk16      1
iscf16       -2
tolwfr16      1.0d-20
nstep16       1
nline16       1
getwfk16      11
get1den16     6
iqpt17         6
prtgkk17      1
iscf17       -2
tolwfr17      1.0d-20
nstep17       1
nline17       1
getwfk17      11
get1den17     7
iqpt18         7
prtgkk18      1
iscf18       -2
tolwfr18      1.0d-20
nstep18       1
nline18       1
getwfk18      11
get1den18     8
iqpt19         8
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
iqpt20        1   # This is a calculation at the Gamma point
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
rfatpol 1 3      # all atoms are perturbed
rfdir 1 1 1      # all directions of perturbation
rfphon 1

#
#  Common data for GS and perturbation runs
#

################### Common input variables

#Definition of the unit cell
acell  3.18   3.18  12.29  angstrom        
rprim  1.0     0.0        0.0   # In lessons 1 and 2, these primitive vectors 
      -1/2   sqrt(0.75)   0.0   # (to be scaled by acell) were 1 0 0  0 1 0  0 0 1 
       0.0     0.0        1.0   # that is, the default.

#Definition of the atom types
ntypat 2               # There are two types of atom
znucl  42 16            # The keyword "znucl" refers to the atomic number of the 
                       # possible type(s) of atom. The pseudopotential(s) 
                       # mentioned in the "files" file must correspond
                       # to the type(s) of atom. Here, type 1 is the Aluminum,
                       # type 2 is the Arsenic.

#Definition of the atoms
natom 3                # There are two atoms
typat 1  2  2            # The first is of type 1 (Al), the second is of type 2 (As).
xred                   # This keyword indicate that the location of the atoms
                       # will follow, one triplet of number for each atom
  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
  3.3123689824E-01 -3.3123689534E-01  1.2708365500E-01
  3.3123689824E-01 -3.3123689534E-01 -1.2708365500E-01

#Gives the number of band, explicitely (do not take the default)
nband  20               # For an insulator (if described correctly as an insulator 
                        # by DFT), there is no need to include conduction bands 
                        # in response-function calculations
#Definition of the k-point grid
  ngkpt     8  8  1          
  kptopt    3               # The kpoint grid is minimalistic to keep the calculation manageable.
  nshiftk   1              # Use one copy of grid only (default)
  shiftk    0.0 0.0 0.0    # This gives the usual fcc Monkhorst-Pack grid
            

#Exchange-correlation functional
ixc 1             # LDA Teter Pade parametrization, which reproduces Perdew-Wang (which reproduces Ceperley-Alder!).

#Definition of the planewave basis set
ecut    15.0           # Maximal kinetic energy cut-off, in Hartree.
enunit  1              # Will output the eigenenergies in eV. 

#Definition of the SCF procedure
nstep 800               # Maximal number of SCF cycles
diemac 12.0             # Although this is not mandatory, it is worth to
                       # precondition the SCF cycle. The model dielectric
                       # function used as the standard preconditioner
                       # is described in the "dielng" input variable section.
                       # The dielectric constant of AlAs is smaller that the one of Si (=12).

#  include metallic occupation function with a small smearing
occopt       7
tsmear       0.001

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
