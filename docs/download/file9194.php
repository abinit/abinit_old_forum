# Structure: GaAs  Band Structure with SOC
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
#paral_kgb  1  
#npkpt    28
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
nband 10 
diemac 12.0          # precondition SCF cycle with semiconductor like dielectric constant
#tolvrs   1.0d-14    # total variance between eigenfunctions and initial charge density criteria for SCF termination
toldfe 1.0d-12       # free energy tolerance for our SCF
ecutsm 0.5
dilatmx 1.05
#
#  k-point grid
#
#
kptopt   1
#kptrlen1 100
ngkpt 3*8
nshiftk  4
shiftk 0.5 0.5 0.5
       0.5 0.0 0.0
       0.0 0.5 0.0
       0.0 0.0 0.5

#
#
# Berry phase calculation of the polarization
# #********************************************
#
ndtset 6
jdtset 11             # calculate initial Berry phase
       21 22 23 24 25 # different field values
berryopt11 -1    
rfdir11 1 1 1
#
berryopt21  4       efield21   0.0001  0.0001  0.0001    getwfk21  11
berryopt22  4       efield22   0.0002  0.0002  0.0002    getwfk22  21
berryopt23  4       efield23   0.0003  0.0003  0.0003    getwfk23  22
berryopt24  4       efield24   0.0004  0.0004  0.0004    getwfk24  23
berryopt25  4       efield25   0.0005  0.0005  0.0005    getwfk25  24
