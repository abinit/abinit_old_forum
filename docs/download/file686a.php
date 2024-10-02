#ground state LDA graphene band structure
#double unit cell in each direction
chkprim 0

acell 2.683410904/0.25 2.683410904/0.25 26.83410904
rprim 1.7320508075688772935274463415059/4 0.75 0
      -1.7320508075688772935274463415059/4 0.75 0
       0 0 1
nstep 45
ntypat 1
znucl 6
nshiftk1 1
shiftk1  0.0 0.0 0.0
natom 8
typat 1 1 1 1 1 1 1 1
nband 64

xred 1/6 1/6 0
     2/6 2/6 0
     4/6 1/6 0
     1/6 4/6 0
     5/6 2/6 0
     2/6 5/6 0
     4/6 4/6 0
     5/6 5/6 0
ndtset 2
ecut 45

ngkpt 36 36 1 
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
