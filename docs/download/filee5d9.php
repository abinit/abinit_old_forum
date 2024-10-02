# Double perovkite

chkprim 0
fftalg 401

#   paral_kgb 1 autoparal 2 max_ncpus 64    # used to determine distribution of processors
   paral_kgb 1   npkpt 14 npband 1 npfft 2

#Definition of the unit cell
acell 5.5 5.5 8.5 angstrom
rprim 1 0 0  0 1 0  0 0 1

#Definition of the atom types
natom 20
ntypat 4
znucl 38 29 77 8    

# spin orbit coupling
nsppol 1
#nspden 4
nspinor 2
pawspnorb 1                                

#Definition of the atoms
spgroup 87
brvltt 2
natrd 5
typat 1 2 3 4 4
xred
    0 0.5 0.25
    0 0 0.5
    0 0 0
    0.2 0.3 0
    0 0 0.24

#Definition of the planewave basis set
ecut 40
pawecutdg 70

#Definition of the k-point grid
#kptrlen 50
ngkpt 5 5 4
nshiftk 1
shiftk 0.5 0.5 0.5
kptopt 4

occopt 7
tsmear 0.01

#Definition of the SCF procedure
nstep 300          # Maximal number of SCF cycles
toldff 1.0d-6
#toldfe 5.0e-11
nband 200
ixc -116133

# Relaxation of atomic positions and lattice geometry
#****************************************************
   ionmov 2
   tolmxf 1.0d-5
   ntime 300
   natfix 8
   natfixx 12
   natfixy 12
   natfixz 16
   iatfix  1 2 3 6 10 12 13 14
   iatfixx 1 2 3 6 10 12 13 14 5 11 16 20
   iatfixy 1 2 3 6 10 12 13 14 5 11 16 20
   iatfixz 1 2 3 6 10 12 13 14 4 7 8 9 15 17 18 19
   ecutsm 0.5
   optcell 2
   dilatmx 1.05

# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


