ndtset 9 #REMOVE if it's not necessary
#getwfk -1 #this is not possible since printing wfk file not allowed
prtden 0 #to reduce output size
prtwf 0 #to reduce output size
prteig 0 #to reduce output size

#Parameters
nstep  50
ecut: 48
ecut+ 4
toldfe 1.0d-6

#Definition of occupation numbers
occopt 1

#chkprim 0 #mozno tak delatj, PC perestaet rugatsa
nsym 1 #break the symmetries
#npsp 3
natom 12
ntypat 2
#ntypalch 1
#mixalch 0.9 0.1
typat 2 2 2 2 1 1 1 1 1 1 1 1
znucl 8 58
xred 0.25 0.25 0.25
 0.75 0.75 0.25
 0.75 0.25 0.75
 0.25 0.75 0.75
 0.0 0.0 0.0
 0.5 0.5 0.5
 0.0 0.0 0.5
 0.0 0.5 0.0
 0.5 0.0 0.0
 0.5 0.5 0.0
 0.0 0.5 0.5
 0.5 0.0 0.5

rprim 1.0000000000E+00 0.0000000000E+00 0.0000000000E+00
0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
acell 10.2253073242 10.2253073242 10.2253073242

#Kpoint Grid
#prtkpt 1
#kptrlen 40
kptrlatt 0 3 3
         3 0 3
         3 3 0
shiftk 0.0 0.0 0.0
kptrlen 4.3382E+01
nkpt 28

#uncomment this only for paw psp test as jzwanzig said you in forum:
#"it will show you if you are getting occupations and or D_ij's that are too 
#big for the code to work well
#pawprtvol -3

diemac 4.0

#Berry phase calculation of the polarization
#berryopt -1
#rfdir 1 1 1
#symmorphi 0
