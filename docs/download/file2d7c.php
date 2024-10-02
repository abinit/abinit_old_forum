# dc germanium : computation of the optimal lattice parameter

ndtset 3

# Optimization of the lattice parameters.

#---- First Dataset (conventional cell)
natom1 8
typat1 1 1 1 1 1 1 1 1
xred1
       0.00  0.00  0.00
       0.00  0.50  0.50
       0.50  0.00  0.50
       0.50  0.50  0.00
       0.25  0.25  0.25
       0.25  0.75  0.75
       0.75  0.25  0.75
       0.75  0.75  0.25
chkprim1 0

#---- Second Dataset (primitive cell - set by hand)
natom2 2
typat2 1 1
xred2  0.00  0.00  0.00
       0.25  0.25  0.25
rprim2 0.0   0.5   0.5
       0.5   0.0   0.5
       0.5   0.5   0.0
chkprim2 0

#---- Third Dataset (using symmetrizer)
natom3 2
typat3 1
xred3  0.0 0.0 0.0
spgroup3 227
brvltt3 -1
natrd3  1

#---- Common data

optcell 1
dilatmx 1.2
ecutsm  0.5
strprecon = 0.5
acell 10.85 10.85 10.85

ionmov  3
ntime  30
tolmxf 2.0d-7
ecut 15.0
pawecutdg 30.

kptopt 1
kptrlen 40

ntypat 1
znucl 32

nstep 30
toldfe 1.0d-10
diemac 100.0

prteig 0
prtden 0
prtwf  0
timopt 2
