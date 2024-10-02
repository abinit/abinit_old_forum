#gamma-KNO3

ndtset 5 #REMOVE if it's not necessary
#getwfk -1 #this is not possible since printing wfk file not allowed
prtden 0 #to reduce output size
prtwf 0 #to reduce output size
prteig 0 #to reduce output size

#Parameters
nstep  1000
ecut 60
toldfe 1.0d-12

#Definition of occupation numbers
occopt 1

#Variables needed for geometry optim. - this
#will be retained for consistency throughout
dilatmx 1.01
ecutsm  0.5

#chkprim 0 #mozno tak delatj, PC perestaet rugatsa
nsym 1 #break the symmetries
natom 15
ntypat 3
typat 1 1 1 2 2 2 3 3 3 3 3 3 3 3 3
znucl 19 7 8
xred 0.0000000000 0.0000000000 0.0000000000
0.6666666667 0.3333333333 0.3333333333
0.3333333333 0.6666666667 0.6666666667
0.0000000000 0.0000000000 0.4050000000
0.3333333333 0.6666666667 0.0716700000
0.6666666667 0.3333333333 0.7383300000
0.0713500000 0.5356400000 0.1006700000
0.4643600000 0.5356400000 0.1006700000
0.4643600000 0.9286500000 0.1006700000
0.1309800000 0.2620200000 0.4340000000
0.1309800000 0.8690200000 0.4340000000
0.7379800000 0.8690200000 0.4340000000
0.4046600000 0.2023300000 0.7673300000
0.7976700000 0.2023300000 0.7673300000
0.7976700000 0.5953400000 0.7673300000

rprim 1.0000000000E+00 0.0000000000E+00 0.0000000000E+00 #obtained from
-5.0000000000E-01 8.6602540378E-01 0.0000000000E+00 #output of input file
0.0000000000E+00  0.0000000000E+00  1.0000000000E+00 #with angdeg
#scalecart 10.3689272478 10.3689272478 17.3023324004 #see descr. of rprim
acell 10.3689272478 10.3689272478 17.3023324004 #see descr. of rprim

#Kpoint Grid
#prtkpt 1
#kptrlen 40
kptopt 1
nshiftk 1
shiftk 0.0 0.0 0.5
ngkpt1 2 2 2
ngkpt2 4 4 4
ngkpt3 6 6 6
ngkpt4 8 8 8
ngkpt5 16 16 16

#uncomment this only for paw psp test as jzwanzig said you in forum:
#it will show you if you are getting occupations and or D_ij's that are too 
#big for the code to work well
#pawprtvol -3

diemac 4.0

#Berry phase calculation of the polarization
#berryopt -1
#rfdir 1 1 1 #as jzwanzig said in forum: always use rfdir 1 1 1,
#not e.g. 0 0 1... It will calculate polarization in all three cartesian
#directions. The computational overhead of doing this is negligible
#symmorphi 0
