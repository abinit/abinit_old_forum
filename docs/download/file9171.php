#
ndtset 4
# DATASET 1 : make ground state wavefunctions and density
tolwfr1 1.0d-14
nline1 8    # This is to expedite the convergence of higher-lying bands
rfphon1  0  # for DS1 do _not_ do perturbation
nqpt1 0     # for DS1 do _not_ do perturbation
prtwf1 1    # need GS wavefunctions for further runs
getwfk1  0


qpt2   0.0 0.0 0.0
qpt3   0.5 0.0 0.0
qpt4  0.5 0.5 0.0

#
# general data for all phonon calculations:
#
rfatpol  1 1
rfdir  1 1 1
rfphon  1
prtwf   0  # for response function runs, do not keep first order wavefunctions
tolvrs   1.0e-5
getwfk  1
nqpt 1
prepgkk 1 # force all perturbations to be calculated for q-points considered
prtgkk 1 # print out GKK files containing electron-phonon coupling

#
#  Common data for GS and perturbation runs
#

#
#  the kpoint grid is minimalistic to keep the calculation
#   manageable.
#
ngkpt 4 4 4
kptopt 3 # keep all k-points. Also for ground state, because of eventual transport calculations
#
#  use a centered grid for the kpoints: obligatory for el-ph for the moment
#
nshiftk 1
shiftk 0.0 0.0 0.0

#
#  as is the kinetic energy cutoff
#
ecut 20.0

acell 3*8.3420591462
rprim 
 0.0 0.5 0.5
 0.5 0.0 0.5
 0.5 0.5 0.0

nband 30
#  include metallic occupation function with a small smearing
occopt 7
tsmear 0.001
natom 2
typat 1*1 1*2

xred 0.00 0.00 0.00
     0.50 0.50 0.50

nstep 800
ntypat 2 
znucl 06 22 
