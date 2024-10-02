# PbTiO3: Computation of the band gap.
# Calculation of the GW corrections
# STEP 1&2

####################
# PbTiO3 structure #
####################

# Definition of the unit cell
acell   7.31803  7.31803  8.05746
spgroup 99
spgaxor 1
brvltt  1

#Used for the generation of alchemical pseudoatoms
#npsp  4
znucl 82 8 22      #original was znucl 82 8 22 40 
ntypat 3
#ntypalch 1
#mixalch  1.00 0.00

#Definition of the atoms
natom 5
typat 1 3 2 2 2
xred
0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
5.0000000000E-01  5.0000000000E-01  5.3930972737E-01
5.0000000000E-01  5.0000000000E-01  1.2421819610E-01
0.0000000000E+00  5.0000000000E-01  6.2786881684E-01
5.0000000000E-01  0.0000000000E+00  6.2786881684E-01

# Definition of the k-point grid
ngkpt   6 6 6  
nshiftk 1
shiftk  0.0 0.0 0.0  
istwfk  40*1        

# Use only symmorphic operations
symmorphi 0

#Definition of the planewave basis set
ecut  12   #original  45.0 

#Definition of the SCF procedure
nstep 100
ntime 100     
toldfe  1.0d-6                               
diemac  12.0                       
enunit  1
prtvol  1

###############################################################################
ndtset   6

# Self-consistent run to get the density
iscf1     5
toldfe1   1.00d-6
prtden1   1

# Non-self-consistent run to get wavefunctions
getden2     1
getwfk2     1
iscf2      -2
tolwfr2     1.0d-8
nband2      30    #nband2      35
kssform2     3   
nbandkss2   50    #original: nbandkss2 400

# Calculation of the dielectric matrix--1
optdriver3     3
gwcalctyp3    28
getkss3        2
nband3       50   #original:nband3 400

npwwfn3      27    #npwwfn3      27
npweps3      27    #npweps3      27
awtr3        0    

# Calculation of the model GW corrections--1 
optdriver4   4
gwcalctyp4   28
getkss4      2
getscr4      3
nband4       50   #original 400

npwwfn4      27   
npwsigx4     27    #original:npweps3      27

# Calculation of the dielectric matrix--2
optdriver5     3
gwcalctyp5    28
getkss5        2
getqps5        4
nband5       50  #original 400
npwwfn5      27
npweps5      27
awtr5          0    

# Calculation of the model GW corrections--2
optdriver6   4
gwcalctyp6   28
getkss6      2
getscr6      5
getqps6      4
nband6       50  #original 400
npwwfn6      27
npwsigx6     27

# Calculation of the dielectric matrix--3
#optdriver7     3
#gwcalctyp7    28
#getkss7        2
#getqps7        6
#nband7       400
#npwwfn7      27
#npweps7      27
#awtr7          0    

# Calculation of the model GW corrections--3
#optdriver8     4
#gwcalctyp8    28
#getkss8        2
#getscr8        7
#getqps8        6
#nband8       400
#npwwfn8      27
#npwsigx8     27

# Calculation of the dielectric matrix--4
#optdriver9     3
#gwcalctyp9    28
#getkss9        2
#getqps9        8
#nband9       400
#npwwfn9      27
#npweps9      27
#awtr9          0    

# Calculation of the model GW corrections--4
#optdriver10     4
#gwcalctyp10    28
#getkss10        2
#getscr10        9
#getqps10        8
#nband10       400
#npwwfn10      27
#npwsigx10     27

# Calculation of the dielectric matrix--5
#optdriver11     3
#gwcalctyp11    28
#getkss11        2
#getqps11        10
#nband11       400
#npwwfn11      27
#npweps11      27
#awtr11          0    

# Calculation of the model GW corrections--5
#optdriver12     4
#gwcalctyp12    28
#getkss12        2
#getscr12        11
#getqps12        10
#nband12       400
#npwwfn12      27
#npwsigx12     27


#Common to all model GW calculations
gwpara     2   #was not used in the original run
rhoqpmix   1.0  #original rhoqpmix   1
nkptgw     40
kptgw     
     0.00000000E+00  0.00000000E+00  0.00000000E+00
     1.66666667E-01  0.00000000E+00  0.00000000E+00
     3.33333333E-01  0.00000000E+00  0.00000000E+00
     5.00000000E-01  0.00000000E+00  0.00000000E+00
     1.66666667E-01  1.66666667E-01  0.00000000E+00
     3.33333333E-01  1.66666667E-01  0.00000000E+00
     5.00000000E-01  1.66666667E-01  0.00000000E+00
     3.33333333E-01  3.33333333E-01  0.00000000E+00
     5.00000000E-01  3.33333333E-01  0.00000000E+00
     5.00000000E-01  5.00000000E-01  0.00000000E+00
     0.00000000E+00  0.00000000E+00  1.66666667E-01
     1.66666667E-01  0.00000000E+00  1.66666667E-01
     3.33333333E-01  0.00000000E+00  1.66666667E-01
     5.00000000E-01  0.00000000E+00  1.66666667E-01
     1.66666667E-01  1.66666667E-01  1.66666667E-01
     3.33333333E-01  1.66666667E-01  1.66666667E-01
     5.00000000E-01  1.66666667E-01  1.66666667E-01
     3.33333333E-01  3.33333333E-01  1.66666667E-01
     5.00000000E-01  3.33333333E-01  1.66666667E-01
     5.00000000E-01  5.00000000E-01  1.66666667E-01
     0.00000000E+00  0.00000000E+00  3.33333333E-01
     1.66666667E-01  0.00000000E+00  3.33333333E-01
     3.33333333E-01  0.00000000E+00  3.33333333E-01
     5.00000000E-01  0.00000000E+00  3.33333333E-01
     1.66666667E-01  1.66666667E-01  3.33333333E-01
     3.33333333E-01  1.66666667E-01  3.33333333E-01
     5.00000000E-01  1.66666667E-01  3.33333333E-01
     3.33333333E-01  3.33333333E-01  3.33333333E-01
     5.00000000E-01  3.33333333E-01  3.33333333E-01
     5.00000000E-01  5.00000000E-01  3.33333333E-01
     0.00000000E+00  0.00000000E+00  5.00000000E-01
     1.66666667E-01  0.00000000E+00  5.00000000E-01
     3.33333333E-01  0.00000000E+00  5.00000000E-01
     5.00000000E-01  0.00000000E+00  5.00000000E-01
     1.66666667E-01  1.66666667E-01  5.00000000E-01
     3.33333333E-01  1.66666667E-01  5.00000000E-01
     5.00000000E-01  1.66666667E-01  5.00000000E-01
     3.33333333E-01  3.33333333E-01  5.00000000E-01
     5.00000000E-01  3.33333333E-01  5.00000000E-01
     5.00000000E-01  5.00000000E-01  5.00000000E-01
bdgw   
       1 30   
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30
       1 30

              

