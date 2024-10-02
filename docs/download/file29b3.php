#ndtset 2
#spin
nsppol 2
nspden 2
#nspinor 1
spinat 0.0 0.0 0.4
#parameters
nstep 1000
ecut 20
pawecutdg 40
iscf 17
nband 10
toldfe 1.0d-12
occopt 3
tsmear 0.01
ratsph 2.31741
prtdensph 1 
#structural parameters
acell 3*5.445
rprim -0.5  0.5  0.5
       0.5 -0.5  0.5
       0.5  0.5 -0.5
natom 1
ntypat 1
typat 1
Znucl 26
xred 0.0 0.0 0.0
#kpoint grid
ngkpt 4 4 4
nshiftk 1
shiftk 0.5 0.5 0.5
#LDA+U parameters
usepawu 1
lpawu 2
upawu 6.8 eV
jpawu 0.89 eV
#initial density matrix
usedmatpu 8

dmatpawu
#occupation matrix for spin 1
0.93274  0.00000  0.00000  0.00000  0.00000
0.00000  0.93274  0.00000  0.00000  0.00000
0.00000  0.00000  0.47632  0.00000  0.00000
0.00000  0.00000  0.00000  0.93274  0.00000
0.00000  0.00000  0.00000  0.00000  0.47632
#occupation matrix for spin 2
0.12025  0.00000  0.00000  0.00000  0.00000
0.00000  0.12025  0.00000  0.00000  0.00000
0.00000  0.00000  0.94369  0.00000  0.00000
0.00000  0.00000  0.00000  0.12025  0.00000
0.00000  0.00000  0.00000  0.00000  0.94369  
