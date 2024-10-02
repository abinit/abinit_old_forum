ndtset 65


#DS 1: Ground State
#*****************************************************
getwfk1   0            
kptopt1   1            
nqpt1     0             
tolvrs1   1.0d-18       
rfphon1   0             

nqpt   1


#DS 2 : Response function calculation of d/dk wave function 
#*****************************************************

qpt2 0.00000000E+00  0.00000000E+00  0.00000000E+00

iscf2     -3         # Need this non-self-consistent option for d/dk
kptopt2   2          # Modify default to use time-reversal symmetry
rfphon2   0          # Cancel default
rfelfd2   2          # Calculate d/dk wave function only
tolwfr2   1.0d-22    # Use wave function residual criterion instead


#DS 3 : Response function calculation of Q=0 phonons and electric field pert.
#*****************************************************

qpt3 0.00000000E+00  0.00000000E+00  0.00000000E+00

getddk3   2          # d/dk wave functions from last dataset
kptopt3   2          # Modify default to use time-reversal symmetry
rfelfd3   3          # Electric-field perturbation response only

#DS 4-65 
#*****************************************************

qpt4 1.66666667E-01  0.00000000E+00  0.00000000E+00
qpt5 3.33333333E-01  0.00000000E+00  0.00000000E+00
qpt6 5.00000000E-01  0.00000000E+00  0.00000000E+00
qpt7 0.00000000E+00  1.66666667E-01  0.00000000E+00
qpt8 1.66666667E-01  1.66666667E-01  0.00000000E+00
qpt9 3.33333333E-01  1.66666667E-01  0.00000000E+00
qpt10 5.00000000E-01  1.66666667E-01  0.00000000E+00

qpt11 0.00000000E+00  3.33333333E-01  0.00000000E+00
qpt12 1.66666667E-01  3.33333333E-01  0.00000000E+00
qpt13 3.33333333E-01  3.33333333E-01  0.00000000E+00
qpt14 5.00000000E-01  3.33333333E-01  0.00000000E+00
qpt15 0.00000000E+00  5.00000000E-01  0.00000000E+00
qpt16 1.66666667E-01  5.00000000E-01  0.00000000E+00
qpt17 3.33333333E-01  5.00000000E-01  0.00000000E+00
qpt18 5.00000000E-01  5.00000000E-01  0.00000000E+00
qpt19 0.00000000E+00  0.00000000E+00  1.66666667E-01
qpt20 1.66666667E-01  0.00000000E+00  1.66666667E-01

qpt21 3.33333333E-01  0.00000000E+00  1.66666667E-01
qpt22 5.00000000E-01  0.00000000E+00  1.66666667E-01
qpt23 0.00000000E+00  1.66666667E-01  1.66666667E-01
qpt24 1.66666667E-01  1.66666667E-01  1.66666667E-01
qpt25 3.33333333E-01  1.66666667E-01  1.66666667E-01
qpt26 5.00000000E-01  1.66666667E-01  1.66666667E-01
qpt27 0.00000000E+00  3.33333333E-01  1.66666667E-01
qpt28 1.66666667E-01  3.33333333E-01  1.66666667E-01
qpt29 3.33333333E-01  3.33333333E-01  1.66666667E-01
qpt30 5.00000000E-01  3.33333333E-01  1.66666667E-01

qpt31 0.00000000E+00  5.00000000E-01  1.66666667E-01
qpt32 1.66666667E-01  5.00000000E-01  1.66666667E-01
qpt33 3.33333333E-01  5.00000000E-01  1.66666667E-01
qpt34 5.00000000E-01  5.00000000E-01  1.66666667E-01
qpt35 0.00000000E+00  0.00000000E+00  3.33333333E-01
qpt36 1.66666667E-01  0.00000000E+00  3.33333333E-01
qpt37 3.33333333E-01  0.00000000E+00  3.33333333E-01
qpt38 5.00000000E-01  0.00000000E+00  3.33333333E-01
qpt39 0.00000000E+00  1.66666667E-01  3.33333333E-01
qpt40 1.66666667E-01  1.66666667E-01  3.33333333E-01

qpt41 3.33333333E-01  1.66666667E-01  3.33333333E-01
qpt42 5.00000000E-01  1.66666667E-01  3.33333333E-01
qpt43 0.00000000E+00  3.33333333E-01  3.33333333E-01
qpt44 1.66666667E-01  3.33333333E-01  3.33333333E-01
qpt45 3.33333333E-01  3.33333333E-01  3.33333333E-01
qpt46 5.00000000E-01  3.33333333E-01  3.33333333E-01
qpt47 0.00000000E+00  5.00000000E-01  3.33333333E-01
qpt48 1.66666667E-01  5.00000000E-01  3.33333333E-01
qpt49 3.33333333E-01  5.00000000E-01  3.33333333E-01
qpt50 5.00000000E-01  5.00000000E-01  3.33333333E-01

qpt51 0.00000000E+00  0.00000000E+00  5.00000000E-01
qpt52 1.66666667E-01  0.00000000E+00  5.00000000E-01
qpt53 3.33333333E-01  0.00000000E+00  5.00000000E-01
qpt54 5.00000000E-01  0.00000000E+00  5.00000000E-01
qpt55 0.00000000E+00  1.66666667E-01  5.00000000E-01
qpt56 1.66666667E-01  1.66666667E-01  5.00000000E-01
qpt57 3.33333333E-01  1.66666667E-01  5.00000000E-01
qpt58 5.00000000E-01  1.66666667E-01  5.00000000E-01
qpt59 0.00000000E+00  3.33333333E-01  5.00000000E-01
qpt60 1.66666667E-01  3.33333333E-01  5.00000000E-01

qpt61 3.33333333E-01  3.33333333E-01  5.00000000E-01
qpt62 5.00000000E-01  3.33333333E-01  5.00000000E-01
qpt63 0.00000000E+00  5.00000000E-01  5.00000000E-01
qpt64 1.66666667E-01  5.00000000E-01  5.00000000E-01
qpt65 3.33333333E-01  5.00000000E-01  5.00000000E-01
qpt66 5.00000000E-01  5.00000000E-01  5.00000000E-01


getwfk    1          # Use GS wave functions from dataset1
kptopt    3          # Need full k-point set for finite-Q response
rfphon    1          # Do phonon response
rfatpol   1 12        # Treat displacements of all atoms
rfdir     1 1 1      # Do all directions (symmetry will be used)
tolvrs    1.0d-8     # This default is active for sets 3-10



#Definition of the unit cell
#*****************************************************
acell    1.0    1.0    1.0
 rprim
    9.5516206969    0.0000000000    0.0000000000
    0.0000000000    9.9613133207    0.0000000000
    0.0000000000    0.0000000000    9.6064227545

#Definition of the atoms
#*****************************************************
natom 12
 ntypat 2
 typat
 1 1 1
 1 2 2
 2 2 2
 2 2 2
 znucl 72 8
 xred
    0.0320000000    0.2670000000    0.3563500000
    0.9680000000    0.7330000000    0.8563500000
    0.5320000000    0.7330000000    0.3563500000
    0.4680000000    0.2670000000    0.8563500000
    0.1349800000    0.0681400000    0.0000000000
    0.8650200000    0.9318600000    0.5000000000
    0.6349800000    0.9318600000    0.0000000000
    0.3650200000    0.0681400000    0.5000000000
    0.2696000000    0.5375000000    0.1064500000
    0.7304000000    0.4625000000    0.6064500000
    0.7696000000    0.4625000000    0.1064500000
    0.2304000000    0.5375000000    0.6064500000

ixc 3


ecut    14
ecutsm 0.5
pawecutdg 25

prtwf 1 prtden 1 prteig 1

ngkpt 6 6 6
nshiftk 1
shiftk 0.0 0.0 0.0


#Definition of the SCF procedure
    nstep   25         # Maximal number of SCF cycles
   diemac   9.0

