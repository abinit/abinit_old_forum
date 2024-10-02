# PARALLIZATION
autoparal 1
mem_test 0
chkprim 0
#DEFINE GEOMETRY
acell 1.88972599 1.88972599 1.88972599
rprim
3.1803401364 0 0
-1.5901700682 2.75701236 0
0 0 20

natom 3
ntypat 2
znucl 42 16
typat 1*1 2*2

xred
 3.3337371544E-01  6.6674747178E-01  1.5624944576E-01
 6.6664639466E-01  3.3329288958E-01  2.3447602694E-01
 6.6664648690E-01  3.3329295165E-01  7.8024527305E-02
#KPOINTS
ngkpt 48 48 1
nshiftk 1
shiftk 0.0 0.0 0.0

#CALCULATION DETAILS
ecut 25.0
#pawecutdg 12.0
nstep 100
diemac 3.0
occopt 7
tsmear 0.0025
ngfft   20      24     120

#ddk
ionmov 0
nband 78
tolwfr  1.e-18
kptopt 3
iscf -3
irdwfk 1
nqpt  1
qpt  0.0d0 0.0d0 0.0d0
rfdir 0 0 1
rfelfd  2
nline 0
prtwf 3
