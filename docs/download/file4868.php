#Ir(0.75)Pt(0.25)BiSe


#We are going to compute the band structure

#Firts, a SCF density approximation, then a non-SCF band structure calculation 

#.......................................................

# Convergence parameters
ecut      30.0
nstep 200

# Spin Orbit Coupling
nspinor 2    # with spin orbit coupling
so_psp 1 1 1 1
  
#.......................................................

ndtset 2 # two datasets

# Dataset 1: self-consistent calculation

occopt1 1   

kptopt1 1

nshiftk1 1

shiftk1 0.5 0.5 0.5

ngkpt1 16 16 16 

prtden1 1

toldfe1 1.0d-12

#Dataset 2: the band structure

iscf2 -2

getden2 -1

kptopt2 -7

nband2 130

ndivk2 80 80 80 80 80 80 80

kptbounds2 0.0  0.0  0.0 # Gamma point
           0.0  0.0  0.5 # X point
           0.5  0.0  0.5 # M point
           0.0  0.0  0.0 # Gamma point
           0.5  0.5  0.5 # R point
           0.5  0.0  0.5 # M point
           0.5  0.0  0.0 # X point
           0.5  0.5  0.5 # R point

tolwfr2 1.0d-12

enunit2 1

#structural parameters

acell    3*11.886377169

rprim    1.000000000000000   0.000000000000000   0.000000000000000
         0.000000000000000   1.000000000000000   0.000000000000000
         0.000000000000000   0.000000000000000   1.000000000000000
natom    12
ntypat   3
typat    1 1 1 1 2 2 2 2 3 3 3 3
znucl    83 34 77 78     # the two atoms whose pseudopotentials are to be mixed are mentioned at the end of the series
xred     0.373000000000000   0.373000000000000   0.373000000000000
         0.127000000000000   0.627000000000000   0.873000000000000
         0.873000000000000   0.127000000000000   0.627000000000000
         0.627000000000000   0.873000000000000   0.127000000000000
         0.619000000000000   0.619000000000000   0.619000000000000
         0.881000000000000   0.381000000000000   0.119000000000000
         0.119000000000000   0.881000000000000   0.381000000000000
         0.381000000000000   0.119000000000000   0.881000000000000
         0.019000000000000   0.019000000000000   0.019000000000000
         0.481000000000000   0.981000000000000   0.519000000000000
         0.519000000000000   0.481000000000000   0.981000000000000
         0.981000000000000   0.519000000000000   0.481000000000000
         


# Alchemical pseudopotential for Ir and Pt

npsp     4       # 4 pseudopotentials should be read
ntypalch 1       # Number of TYPe of atoms that are "ALCHemical"

algalch  1       # ALGorithm for generating ALCHemical pseudopotentials

mixalch  0.75 0.25 # MIXing coefficients for ALCHemical potentials
