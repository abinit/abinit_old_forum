#Spin
nsppol  2
nspden  2
nspinor 1
spinat 0 0 3
       0 0 0
# Kpoint Grid
ngkpt 8 8 8
chksymbreak 0  # The k point grid is not symmetric, but the calculations being for the ground-state, this is not a problem.
kptopt 4


#Parameters
nstep  1000
ecut 30
pawecutdg 80
tolvrs 1.0d-6
occopt 3

#Structural parameters
natom 2 ntypat 2 typat 1 2
znucl 27 8
             xred      0 0 0
                       0.5 0.5 0.5

acell      8.0 8.0 8.0

rprim 
0.5 0.5 0.0
0.0 0.5 0.5
0.5 0.0 0.5

# LDA+U
usepawu   1
lpawu   2 -1
upawu  8.0 0.0 eV
jpawu  0.8 0.0 eV
usedmatpu 10
dmatpawu 
#Occupation matrix for spin  1 and atom 1
1 0 0 0 0
0 1 0 0 0
0 0 1 0 0
0 0 0 1 0
0 0 0 0 1
#Occupation matrix for spin  2 and atom 1 
1 0 0 0 0
0 1 0 0 0
0 0 0 0 0
0 0 0 0 0
0 0 0 0 0
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
optforces 0

ndtset 1 
jdtset 1 

##   1
prtdos1 3

##  2
occopt2 1
berryopt2 -1       rfdir2    1 1 1
polcen2 1.0 1.0 1.0
symmorphi2 0
getwfk2 -1


##  3
#nband3 15
getwfk3 -1
paral_kgb3 0
berryopt3  14       red_efieldbar3   0.00001  0.00000  0.00000    
symmorphi3 0
optstress3 0
optforces3 0






