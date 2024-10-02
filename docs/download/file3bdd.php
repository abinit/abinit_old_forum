ndtset 7

nqpt1 0
rfphon1 0
getwfk1 0
kptopt1 1
tolvrs1 1.0d-20


#q points for the rest of the datasets

nqpt 1
qpt2 0.0     0.0       0.0
qpt3 0.0     0.0       0.0
qpt4 1/2     1/4       3/4              #W point
qpt5 3/8     3/8       3/4              #K point
qpt6 1/2     0.0       1/2              #X point
qpt7 1/2     1/2       1/2              #L point




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
kptrlatt 4  -4   4
         4   4  -4
        -4   4   4

acell 3*11.6257
rprim 0   0.5  0.5 
      0.5  0   0.5
      0.5  0.5  0
xred 3/4  3/4  3/4
     1/4  1/4  1/4
      0    0    0
ntypat 3
natom 3
typat 2 3 1
znucl 40 50 28
nband 21
ixc 1
ecut 11.0248
nstep 150


occopt 7

