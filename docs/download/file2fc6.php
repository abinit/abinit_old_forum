ndtset 2
#Dataset 1:usual self-consistent calculation
kptopt1 1
nshiftk1 4
shiftk1 0.5 0.5 0.5
        0.5 0.0 0.0 
        0.0 0.5 0.0
        0.0 0.0 0.5
ngkpt1 4 4 4
prtden1 1
toldfe1 1.0d-6

#Dataset 2;the band structure
iscf2 -2
getden2 -1
kptopt2 -3
nband2 8
ndivk2 10 12 17
kptbounds2 0.5 0.0 0.0
           0.0 0.0 0.0
           0.0 0.5 0.5
           1.0 1.0 1.0
tolwfr2 1.0d-12

#Defination of the unit cell
nstep 10
diemac 12.0
ecut 8.0
typat 1 1
ntypat 1
znucl 14
natom 2
acell 3*10.217
rprim 0.0 0.5 0.5
      0.5 0.0 0.5
      0.5 0.5 0.0
xred 
     0.0 0.0 0.0
     1/4 1/4 1/4
#################################
##      NOTE
## This is an example of Si band caculation;
## Fri Jan 1, 8:04 PM   hhwj340
