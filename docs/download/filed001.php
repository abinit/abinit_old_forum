# Crystalline graphene ixc=HSEPBE

autoparal 1
chksymbreak 0
ixc -524130
#--------------
nsppol 2
nspden 2
spinat 56*0 1*1
#-------------
ionmov 2 
ntime  200
toldff 1e-5
tolmxf 1e-4
#-------------
occopt 7
tsmear 0.0001
#-------------
kptopt 1 
nshiftk 1
shiftk 0 0 0.0  
ngkpt 5 5 1
#-------------
acell 4.6664963396E+00  4.6664963396E+00  3.8204645245E+01
rprim 
    2.59808 1.5 0 
   -2.59808 1.5 0
    0 0 1
#----------
ntypat 2 
znucl 6 9  
natom 19
typat 18*1  1*2
xred
0.0 0.0 0.0 
1/3 0  0
2/3 0 0
1/9 2/9 0
4/9 2/9 0
7/9 2/9 0
0 1/3 0
1/3 1/3 0
2/3 1/3 0
1/9 5/9 0
4/9 5/9 0
7/9 5/9 0 
0 2/3 0
1/3 2/3 0
2/3 2/3 0
1/9 8/9 0
4/9 8/9 0
7/9 8/9 0
4/9 5/9 1/13
#------------
ecut 40 
nstep 300
diemac 12 
prtden 1
optforces 1
