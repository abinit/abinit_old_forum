# Structure: GaAs  Band Structure with no SOC
#
#  Data sets
#
ndtset 2
#
# Unit Cell Definition
# 1.0450389794E+01 determined by a BFGS run with same LDA HGH PS
acell  3*10.45
natom 2               # number of atoms
#
xred 0.0 0.0 0.0
     0.25 0.25 0.25
#    
rprim  0 .5 .5  .5 0 .5  .5 .5 0
#
ntypat 2            #  number of types of atoms, e.g. Ga and As
typat 1 2           #  specify types of atoms for each atom in xred list
znucl 31 33         #  specify the atomic numbers of the atoms for the types of atoms
#  plane wave basis set
#
ecut 45             # plane wave cutoff for basis set
                    # (1/2)[(2 Pi)*(k+Gmax)]2=ecut for Gmax
#
#
# Parallelization
#
paral_kgb  1
npkpt  32
npspinor 2
#
# SCF Parameters run 1
#
iscf1  7             #  Pulay mixing  (default seven steps)
# Turn on Spin-Orbit Coupling
so_psp   2 2
#
nspinor  2
#
nband 14
diemac 12.0          # precondition SCF cycle with semiconductor like dielectric constant
toldfe1  1.0d-12     # SCF stopping criterion (really strict criteria)
prtden1   1          # save the charge density for the bandstructure
#
#  k-point grid
#
#ngkpt1 3*28
#
kptopt1   1
#kptrlen 50
nshiftk1  4
#ngkpt1    8 8 8
ngkpt1    24 24 24
shiftk1 0.5 0.5 0.5
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5
#
# Band Structure  run 2
#
getden2 -1           # get the electron density from first run
iscf2  -2            # do non scf loop for band structure values in kptbounds
kptopt2 -5            # calculate eigenvalues for k-points specified in kbounds
                      #  L-Gamma-X-W-K,U-L-W-X-K,U-Gamma
#ndivk2  35  21  21  25  25  12  12  17
ndivsm 25      # specify at least 25 points for each segment
kptbounds2 1/2 1/4 3/4  # W point
           1/2 1/2 1/2  # L point
           0    0   0   # Gamma point
           1/2  0   1/2 # X point
           1/2  1/4 3/4 # W point
           3/8  3/8 3/4 # K point
#
tolwfr2    1.0d-12
#
enunit     1     # use eV units for output
#  specify the number of bands
#
#
#  output
#
#prtcml 1          #  output the structure in cml format (1=fractional coordinates)
