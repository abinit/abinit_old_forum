ndtset 10

nqpt1 0
rfphon1 0
getwfk1 0
kptopt1 1
tolvrs1 1.0d-20

#q points for the rest of the datasets

nqpt 1
qpt2 0.0     0.0       0.0
qpt3 0.0     0.0       0.0
qpt4 2.5d-01 0.0       0.0
qpt5 5.0d-01 0.0       0.0
qpt6 2.5d-01 2.5d-01   0.0
qpt7 5.0d-01 2.5d-01   0.0
qpt8 -2.5d-01 2.5d-01  0.0
qpt9 5.0d-01 5.0d-01   0.0
qpt10 -2.5d-01 5.0d-01 2.5d-01

rfphon2 0     #response function for phonon calculation at gamma
kptopt2 2      #automatic generation using time reversal symmetry
iscf2  -3
rfelfd2 2
tolwfr2 1.0d-22   #tolerance on the potential residual

getddk3 2
kptopt3 2
rfelfd3 3

getwfk 1     #read the input wavefunction
kptopt 3     #automatic generation not using any symmetry
rfphon 1
rfatpol 1 3  #atoms to be displaced
rfdir 1 1 1    #all the reduced directions to be considered
tolvrs 1.0d-20   #tolerance on the potential residual
ngkpt 8 8 8

acell 3*11.228
rprim 0   0.5  0.5 
      0.5  0   0.5
      0.5  0.5  0
xred  0.75  0.75  0.75
      0.25  0.25  0.25
      0.00  0.00  0.00 
ntypat 3
natom 3
typat 2 3 1
znucl 22 50 28
nband 21
ixc 1
ecut 65.0
nstep 150
nshiftk 4
shiftk 0.0 0.0 0.5
       0.0 0.5 0.0
       0.5 0.0 0.0 
       0.5 0.5 0.5
occopt 7

