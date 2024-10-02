ndtset 2
#spin
nsppol 2
nspden 2
nspinor 1
spinat 0.0 0.0 4.0
#parameters
nband 6
occopt 3
tsmear 0.01
nstep1 1000
ecut 20
pawecutdg 40
#dataset1:usual self-consistent calculation
kptopt1 1
iscf1 17
ngkpt1 4 4 4 
nshiftk1 1
shiftk1 0.5 0.5 0.5
toldfe1 1.0d-12
prtden1 1
#dataset2:band structure calculation
iscf2 -2
getden2 -1
kptopt2 -4
ndivk2 20 25 15 10
kptbounds2 0.0  0.0  0.0
          -0.5  0.5  0.5
           0.25 0.25 0.25   
           0.0  0.0  0.5  
           0.0  0.0  0.0
tolwfr2 1.0d-7
enunit2 1
#structural parameters
acell 3*5.435
rprim -0.5  0.5 0.5 
       0.5 -0.5 0.5
       0.5  0.5 -0.5  
natom 1
ntypat 1
typat 1
Znucl 26
xred 0.0 0.0 0.0
#LDA+U
usepawu 1
lpawu 2
upawu 6.8 eV
jpawu 0.89 eV
#initial density matrix
usedmatpu 5

dmatpawu
#occupation matrix for spin 1
0.93274  0.00000  0.00000  0.00000  0.00000
0.00000  0.93274  0.00000  0.00000  0.00000
0.00000  0.00000  0.87632  0.00000  0.00000
0.00000  0.00000  0.00000  0.93274  0.00000
0.00000  0.00000  0.00000  0.00000  0.87632
#occupation matrix for spin 2
0.92025  0.00000  0.00000  0.00000  0.00000
0.00000  0.92025  0.00000  0.00000  0.00000
0.00000  0.00000  0.14369  0.00000  0.00000
0.00000  0.00000  0.00000  0.92025  0.00000
0.00000  0.00000  0.00000  0.00000  0.14369
