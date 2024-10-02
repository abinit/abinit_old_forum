iscf      -2      # NSCF
getden    -1      # Read previous density
tolwfr    1d-12   # Stopping criterion for the NSCF cycle.
kssform    3      # Conjugate-gradient algorithm (recommended option for large systems)
nband      100    # Number of (occ and empty) bands computed in the NSCF cycle.
nbdbuf     10     # A large buffer helps to reduce the number of NSCF steps.
nbandkss   100    # Number of bands stored in the KSS file (only the converged states are written).

# number of self-consistent field steps
nstep        2000
#diemac       4.0

# energy cutoff [Ha]:
ecut         100

#Definition of the k-point grid
occopt 4       
tsmear 0.01

kptopt 1           # Option for the automatic generation of k points, taking
#kptopt -3

ngkpt   6 6 6
nshiftk  1
shiftk  0.0 0.0 0.0

spinat 0 0 1
       0 0 -1
       0 0 0
       0 0 0
nsppol   1
nspden 2
nspinor 1

natsph 1
iatsph 2
ratsph 2.4 2.4

#ndivk 10 12 17
#kptbounds 0.5 0.0 0.0
#          0.0 0.0 0.0
#          0.0 0.5 0.5
#          1.0 1.0 1.0
                      
istwfk  *1

# Definition of the atom types
znucl  28  8
ntypat 2
chkprim 0

# Definition of the atoms
#natom 8
#natrd 2
#spgroup 225
#natom 2
#typat 1 2
natom 4
typat 1 1 2 2
#acell  4.4081 4.4081 4.4081  Angstrom
#angdeg 90 90 90
#xred 0.0000 0.0000 0.0000
#     0.5000 0.5000 0.5000

xred 0 0 0
    0.0 0.0 0.5
    0.5 0.5 0.25
    0.5 0.5 0.75
acell   3*7.92
rprim 0.0 1/2 1/2
      1/2 0.0 1/2
      1.0 1.0 0.0

prtdos 3
