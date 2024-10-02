ndtset 15   acell: 3*5.39  acell+ 3*0.005 
#spin
nsppol 2
nspden 2
spinat 0.0 0.0 0.4
nspinor 1
#parameters
nstep 1000
ecut 20
pawecutdg 40
iscf 17
toldfe 1.0d-8
nband 10
occopt 3
tsmear 0.01
#structural parameters
natom 1
ntypat 1
typat 1
Znucl 26
xred 0.0  0.0  0.0

rprim -0.5 0.5 0.5
       0.5 -0.5 0.5
       0.5 0.5 -0.5
#optimization of cell parameter
#optcell 1
#ionmov 3
#ntime 40
#dilatmx 1.2
#ecutsm 0.5
#kpoint grid
ngkpt  4 4 4
nshiftk 1
shiftk 0.5 0.5 0.5 
    
#LDA+U
usepawu 1
lpawu 2
upawu 6.8 eV
jpawu 0.89 eV
#initial density matrix
usedmatpu 8

dmatpawu
#occupation matrix for spin 1
0.93274  0.00000    0.00000    0.00000    0.00000
0.00000  0.93274    0.00000    0.00000    0.00000
0.00000  0.00000    0.37632    0.00000    0.00000
0.00000  0.00000    0.00000    0.93274    0.00000
0.00000  0.00000    0.00000    0.00000    0.37632
#occupation matrix for spin 2
0.02025   0.00000    0.00000    0.00000    0.00000
0.00000   0.02025    0.00000    0.00000    0.00000
0.00000   0.00000    0.94369    0.00000    0.00000
0.00000   0.00000    0.00000    0.02025    0.00000
0.00000   0.00000    0.00000    0.00000    0.94369       

 
