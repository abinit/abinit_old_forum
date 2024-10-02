# Double perovkite

#irdwfk 1
#getwfk -1
prtden 1
chkprim 0
fftalg 401

ndtset 3

#   paral_kgb 1 autoparal 2 max_ncpus 64    # used to determine distribution of processors
   paral_kgb 1   npkpt 14 npband 2 npfft 2

#Definition of the unit cell
acell 5.5 5.5 8.5 angstrom    
rprim 1 0 0  0 1 0  0 0 1

#Definition of the atom types
natom 20
ntypat 4
znucl 38 29 77 8                                    

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
ecut: 60 ecut+ 5        # Maximal kinetic energy cut-off, in Hartree
#ecut 35

#Definition of the k-point grid
kptrlen 50

occopt 3
tsmear 0.01

#Definition of the SCF procedure
nstep 1000          # Maximal number of SCF cycles
toldfe 5.0d-11     
iprcel 45
nband 104
diecut 3.5
iscf 3    
nline 6  

# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


