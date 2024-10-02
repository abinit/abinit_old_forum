# t-ZrO2 - Check for overlap at small dimension
#
#ndtset 25
#udtset 5 5

#Courbe E(V)
ecut 20.00

pawecutdg 32.

acell 3.5   3.5   5.00 Angstrom

rprim  0.5  0.5  0.0
       0.0  1.0  0.0
       0.0  0.0  1.0

nstep 50
ntime 100
#toldfe 5.0d-8
toldff 1.0d-6
tolmxf 1.0d-5
ionmov 2
# optcell 2
ecutsm 0.5
dilatmx 1.05

natfix 2
iatfix 1 2

natfixx 4
iatfixx 3 4 5 6
natfixy 4
iatfixy 3 4 5 6

#getxred -1

#nband 40
#occopt 7 tsmear 5.0d-4
#iscf 14

#Definition of the atom types
ntypat 2
znucl 40 8


#Definition of the atoms
natom 6
typat 2*1 4*2
xred
  0     0     0
  0     1/2   1/2

  1/2   0/2   0.28
  1/2   0/2   0.78
  1/2   1/2   0.22
  1/2   1/2   0.72

prtwf 0
prtden 0
#prtkpt 1
#prtvol -3
