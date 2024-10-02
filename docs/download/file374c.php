#ground state LDA graphene band structure
#triple unit cell in each direction
chkprim 0

acell 2.683410904/0.1666666666666 2.683410904/0.1666666666666 26.83410904
rprim 1.7320508075688772935274463415059/4 0.75 0
      -1.7320508075688772935274463415059/4 0.75 0
       0 0 1
nstep 45
ntypat 1
znucl 6
nshiftk1 1
shiftk1  0.0 0.0 0.0
natom 18
typat 18*1
nband 256

xred 1/9 1/9 0
     2/9 2/9 0
     2/9 3/9 0
     3/9 2/9 0
     4/9 3/9 0
     3/9 4/9 0
     4/9 4/9 0
     3/9 5/9 0
     5/9 3/9 0
     4/9 6/9 0
     5/9 5/9 0
     6/9 4/9 0
     5/9 6/9 0
     6/9 5/9 0
     6/9 7/9 0
     7/9 6/9 0
     7/9 7/9 0
     8/9 8/9 0
     
ndtset 2
ecut 45

ngkpt 20 20 1 
ixc 1
toldfe1 1e-7
timopt 2
iscf1 7
iscf2 -2
getden2 -1
kptopt2 -3
ndivk2 21 22 6
enunit2 1
kptbounds2 0.5 0.5 0.0
          0.0 0.0 0.0 
          2/3 1/3 0.0
          0.5 0.5 0.0
tolwfr2 1.0e-10
