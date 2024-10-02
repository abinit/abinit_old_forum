
#Specific to ground state calculation

 ndtset 11

#Specific to ground state calculation

ecut1 10
ecut2 12
ecut3 14
ecut4 16
ecut5 18
ecut6 20
ecut7 22
ecut8 24
ecut9 26
ecut10 28
ecut11 30

pawecutdg 30
pawmixdg 1

prtpot 0
#prtden 0
prtvhxc 0
prtwf 0
#prteig 0

toldfe 1.0D-6

# dilatmx   1.1    # Maximum scaling allowed for lattice parameters
#  ionmov   3       # Use BFGS algorithm
#   ntime   500      # Maximum number of optimization steps
# optcell   1       # Fully optimize unit cell geometry, keeping symmetry
#  tolmxf   1.0e-4  # Convergence limit for forces as above

#######################################################################
#Common input variables

#Definition of the unit cell
 acell    7.16000  7.16000  7.16000 angstrom


  angdeg  90.00 90.00 90.00
  spgroup 1
# chkprim 1
  occopt 1
  nsppol 2
# spinat 0.0 0.0 0.0
#        0.0 0.0 0.0
#        0.0 0.0 0.0
#        0.0 0.0 0.0
#        0.0 0.0 0.0
# occopt  3
# tsmear  1.0d-3
 enunit 1

# kspace grid
 nshiftk 1
 shiftk  0.0 0.0 0.0
 ngkpt 4 4 4  # Use ngkpt 4 4 6 for converged results

#Definition of the atom types
ntypat 2              # There are two types of atom
znucl 14 8            # The keyword "znucl" refers to the atomic number of the

#Definition of the atoms
natom 24                #
 typat 8*1 16*2

 xred     
 0.00000    0.00000    0.00000
 0.00000    0.50000    0.50000
 0.50000    0.50000    0.00000
 0.50000    0.00000    0.50000
 0.75000    0.25000    0.75000
 0.25000    0.25000    0.25000
 0.25000    0.75000    0.75000
 0.75000    0.75000    0.25000
 0.12500    0.12500    0.12500
 0.87500    0.37500    0.62500
 0.37500    0.62500    0.87500
 0.62500    0.87500    0.37500
 0.37500    0.87500    0.62500
 0.87500    0.62500    0.37500
 0.62500    0.37500    0.87500
 0.12500    0.62500    0.62500
 0.87500    0.87500    0.12500
 0.37500    0.12500    0.37500
 0.37500    0.37500    0.12500
 0.87500    0.12500    0.87500
 0.62500    0.12500    0.62500
 0.12500    0.87500    0.87500
 0.12500    0.37500    0.37500
 0.62500    0.62500    0.12500

#  natfix  4
#  iatfix  1 2 3 4 
         

nstep 500               # Maximal number of SCF cycles
iscf 17
# diemac 3.0
ecutsm  0.5
