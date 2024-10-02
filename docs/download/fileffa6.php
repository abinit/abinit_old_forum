#scf cycle
nstep 1000
#tolvrs 1.d-10
ecut 20
pawecutdg 60
iscf1 17
iscf2 -2
npulayit 5
ndtset 2
diemix 0.45
#spin
nsppol 2
nspden 2
nspinor 1
spinat 0.0 0.0 4.0
       0.0 0.0 4.0
#structure and acell
acell 3*5.42
chkprim 0
rprim 1.0 0.0 0.0
      0.0 1.0 0.0
      0.0 0.0 1.0
natom 2
ntypat 1
typat 2*1
Znucl 26.0
xred 0.0 0.0 0.0
     0.5 0.5 0.5
nband 25
occopt 4
tsmear 0.05 eV
#kpoint and sym
kptopt 1
ngkpt 4 4 4
nsym 0
prtdos1 1
prtdos2 3
pawprtdos2 2
natsph2 2
iatsph2 1 2
getden -1
prtden 1
prtwf 1
getwfk -1
tolwfr 1.0d-8
#other options
optforces 2
prtdensph 1
ratsph 2*2.318
#LDA+U 
usepawu 1
lpawu 2
upawu 4.06 eV
jpawu 2.74 eV
dmatpuopt 3
#initial density matrix
usedmatpu 10

dmatpawu
#occupation matrix for spin 1 
0.73274  0.00000  0.00000  0.00000  0.00000
0.00000  0.73274  0.00000  0.00000  0.00000
0.00000  0.00000  0.81632  0.00000  0.00000
0.00000  0.00000  0.00000  0.73274  0.00000
0.00000  0.00000  0.00000  0.00000  0.81632
#occupation matrix for spin 2 
0.46025  0.00000  0.00000  0.00000  0.00000
0.00000  0.46025  0.00000  0.00000  0.00000
0.00000  0.00000  0.14369  0.00000  0.00000
0.00000  0.00000  0.00000  0.46025  0.00000
0.00000  0.00000  0.00000  0.00000  0.14369


 
