ndtset 2
prtdos 1
nsym 0

# PAW
usepawu 1
pawecutdg 40
lpawu -1 2 -1
upawu 0.0 5.0 0.0 eV
jpawu 0.0 0.5 0.0 eV

kptopt1 1
nshiftk1 1
shiftk1 0.0 0.0 0.0
ngkpt1 14 14 14
prtden1 1
toldfe1 1.0d-12
nband1 40

# Band Structure
iscf2 -2
getden2 -1
kptopt2 -4
nband2 40
ndivk2 17 10 10 14
kptbounds2 0.5 0.5 0.5 # R
           0.0 0.0 0.0 # Gamma
           0.0 0.5 0.0 # X
           0.5 0.5 0.0 # M
           0.0 0.0 0.0 # Gamma
tolwfr2 1.0d-12
enunit2 1

# Spin
spinat 0.0 0.0 8.0
       0.0 0.0 8.0
       0.0 0.0 8.0
       0.0 0.0 8.0
       0.0 0.0 8.0
nsppol 2
nspden 2

#Dataset SrMoO3
acell 3*7.4540720765E
rprim 1 0 0
      0 1 0
      0 0 1
ecut 18
ecutsm 0.5

# Atom Definitions
natom 5 
ntypat 3
znucl 38 42 8
typat 1 2 3 3 3
occopt 3

xred 
   0 0 0
   1/2 1/2 1/2
   1/2 1/2 0
   1/2 0 1/2
   0 1/2 1/2

nstep 100
