rfphon 1     #response function for phonon calculation
rfatpol 1 1   #atoms to be displaced
rfdir 1 0 0    #only one of the reduced directions to be considered
nqpt 1
qpt 0 0 0     #gamma point
kptopt 2      #automatic generation using time reversal symmetry


irdwfk 1     #read the input wavefunction
tolvrs 1.0d-09   #tolerance on the potential residual
acell 3*10.18
rprim 0   0.5  0.5 
      0.5  0   0.5
      0.5  0.5  0
xred 0  0  0
     0.25 0.25 0.25
ntypat 2
natom 2
typat 1 2
znucl 13 33
nband 4
ixc 1
ecut 3.0
nstep 30
