#naphthalene frequencies and electron-phonon strenght evaluation
ndtset 32

#DATASET 1: usual self-consistent calculation
nline1 6 #  more suitable for metals here?
tolwfr1 1.0d-20
rfphon1 0
getwfk1 0
nqpt1 0
prtwf1 1
#
#defaults for all phonon runs
#
ngkpt 2 2 2 # 4 4 4
prtwf   0 
getwfk  1 #get wavefunction from _WFK file
prepgkk 1
prtgkk  1
nqpt 1        # 1 qpoint at a time
tolvrs 1.e-8  # tolerance on 2DTE convergence: potential^(1) is what we need
kptopt 3      #Do not take into account any symmetry : k points will be generated in the full Brillouin zone.
rfatpol 1 36   # all atoms are perturbed
rfdir 1 1 1   # all directions of perturbation
rfphon 1
occopt 7 #Gaussian smearing ???????????????
tsmear 0.0001 #??????????????????

# set 2: Response function of ddk 
qpt2    0.00000000E+00  0.00000000E+00  0.00000000E+00
rfphon2   0             # no phonons here
rfelfd2   2             # Activate the calculation of the d/dk perturbation
iscf2    -3             # The d/dk perturbation must be treated non SC-ly
tolwfr2   1.0d-22       # Must use tolwfr for non-self-consistent calculations
#  the kpoint grid is minimalistic to keep the calculation
prtwf2    1
#   manageable.

#Set 3: Response function of q=0 phonons and electric field (naphthalene is not metal, it is mandetory)
qpt3                      0.00000000E+00  0.00000000E+00  0.00000000E+00
qpt4                      2.50000000E-01  0.00000000E+00  0.00000000E+00
qpt5                      5.00000000E-01  0.00000000E+00  0.00000000E+00
qpt6                      0.00000000E+00  2.50000000E-01  0.00000000E+00
qpt7                      2.50000000E-01  2.50000000E-01  0.00000000E+00
qpt8                       5.00000000E-01  2.50000000E-01  0.00000000E+00
qpt9                       0.00000000E+00  5.00000000E-01  0.00000000E+00
qpt10                       2.50000000E-01  5.00000000E-01  0.00000000E+00
qpt11                       5.00000000E-01  5.00000000E-01  0.00000000E+00
qpt12                       0.00000000E+00  0.00000000E+00  2.50000000E-01
qpt13                       2.50000000E-01  0.00000000E+00  2.50000000E-01
qpt14                       5.00000000E-01  0.00000000E+00  2.50000000E-01
qpt15                      -2.50000000E-01  0.00000000E+00  2.50000000E-01
qpt16                       0.00000000E+00  2.50000000E-01  2.50000000E-01
qpt17                       2.50000000E-01  2.50000000E-01  2.50000000E-01
qpt18                       5.00000000E-01  2.50000000E-01  2.50000000E-01
qpt19                      -2.50000000E-01  2.50000000E-01  2.50000000E-01
qpt20                       0.00000000E+00  5.00000000E-01  2.50000000E-01
qpt21                       2.50000000E-01  5.00000000E-01  2.50000000E-01
qpt22                       5.00000000E-01  5.00000000E-01  2.50000000E-01
qpt23                      -2.50000000E-01  5.00000000E-01  2.50000000E-01
qpt24                       0.00000000E+00  0.00000000E+00  5.00000000E-01
qpt25                       2.50000000E-01  0.00000000E+00  5.00000000E-01
qpt26                       5.00000000E-01  0.00000000E+00  5.00000000E-01
qpt27                       0.00000000E+00  2.50000000E-01  5.00000000E-01
qpt28                       2.50000000E-01  2.50000000E-01  5.00000000E-01
qpt29                       5.00000000E-01  2.50000000E-01  5.00000000E-01
qpt30                       0.00000000E+00  5.00000000E-01  5.00000000E-01
qpt31                       2.50000000E-01  5.00000000E-01  5.00000000E-01
qpt32                       5.00000000E-01  5.00000000E-01  5.00000000E-01


getddk3  2 # d/dk wave function from second data
rfelfd3  3 #electric field perturbation
iscf3    5 #SCF cycle, CG based on the minim. of the energy with respect to the potential
##############################################################
#commom input variables 
#  use a centered grid for the kpoints

nshiftk 1
shiftk 0.0 0.0 0.0

#  Common data 
#
# UNIT CELL
#Definition ofatoms and the atom types
ixc      11
natom    36
ntypat   2
typat    20*1 16*2
znucl    6 1



acell   3*15.4776126494

rprim     1.000000000000000   0.000000000000000   0.000000000000000
          0.000000000000000   0.732479488181285   0.000000000000000
         -0.586095952790224   0.000000000000000   0.868857560432123

xred     0.083568412000000   0.020526323000000   0.331186919000000
         0.916431588000000   0.979473677000000   0.668813081000000
         0.416431588000000   0.520526323000000   0.668813081000000
         0.583568412000000   0.479473677000000   0.331186919000000
         0.110838744000000   0.163829430000000   0.222430463000000
         0.889161256000000   0.836170570000000   0.777569537000000
         0.389161256000000   0.663829430000000   0.777569537000000
         0.610838744000000   0.336170570000000   0.222430463000000
         0.046516721000000   0.105834328000000   0.036486026000000
         0.953483279000000   0.894165672000000   0.963513974000000
         0.453483279000000   0.605834328000000   0.963513974000000
         0.546516721000000   0.394165672000000   0.036486026000000
         0.071416816000000   0.250000000000000   0.920651031000000
         0.928583184000000   0.750000000000000   0.079348969000000
         0.428583184000000   0.750000000000000   0.079348969000000
         0.571416816000000   0.250000000000000   0.920651031000000
         0.008505367000000   0.188120767000000   0.740909800000000
         0.991494633000000   0.811879233000000   0.259090200000000
         0.491494633000000   0.688120767000000   0.259090200000000
         0.508505367000000   0.311879233000000   0.740909800000000
         0.133241597000000   0.068728536000000   0.473566595000000
         0.866758403000000   0.931271464000000   0.526433405000000
         0.366758403000000   0.568728536000000   0.526433405000000
         0.633241597000000   0.431271464000000   0.473566595000000
         0.181318070000000   0.325086934000000   0.277290334000000
         0.818681930000000   0.674913066000000   0.722709666000000
         0.318681930000000   0.825086934000000   0.722709666000000
         0.681318070000000   0.174913066000000   0.277290334000000
         0.142210996000000   0.410891151000000   0.976565880000000
         0.857789004000000   0.589108849000000   0.023434120000000
         0.357789004000000   0.910891151000000   0.023434120000000
         0.642210996000000   0.089108849000000   0.976565880000000
         0.030210392000000   0.300386066000000   0.654161653000000
         0.969789608000000   0.699613934000000   0.345838347000000
         0.469789608000000   0.800386066000000   0.345838347000000
         0.530210392000000   0.199613934000000   0.654161653000000

        
ecut 30
#Definition of the SCF procedure
nstep 1000          # Maximal number of SCF cycle
nband 53
nbdbuf 2     # helps to better convergence
optforces 1

