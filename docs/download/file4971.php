# Structure: GaAs  Band Structure with SOC
#
#  Data sets
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
ecut 35             # plane wave cutoff for basis set
                    # (1/2)[(2 Pi)*(k+Gmax)]2=ecut for Gmax
#
#
# Parallelization
#
paral_kgb  1  
npkpt    28
#
# SCF Parameters run 1
#
iscf  7             #  Pulay mixing  (default seven steps)
# Turn on Spin-Orbit Coupling
so_psp   2 2
nspinor  2
#
#
ixc  3               # LDA using old Teter rational polynomial parameterization
nband 8 
diemac 12.0          # precondition SCF cycle with semiconductor like dielectric constant
toldfe  1.0d-12     # SCF stopping criterion (really strict criteria)
dilatmx 1.05        # copied from tffield tutorial (why necessary?)
ecutsm 0.5d         # copied from ttfield tutorial (why necessary?)
#tolvrs   1.0d-18     # total varience between eigenfunctions and initial charge density criteria for SCF termination
#
#  k-point grid
#
#
kptopt   1
#kptrlen1 50
#ngkpt1    8 8 8
#ngkpt1    24 24 24
nshiftk  4
ngkpt 3*8 
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5
#
#
# Berry phase calculation of the polarization
# #********************************************
berryopt -1
rfdir 1 1 1
#       #
#