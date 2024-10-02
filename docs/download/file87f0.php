# Crystalline : computation of the phonon spectrum
ndtset 37

#Set 1 : ground state self-consistency
getwfk1   0            # Cancel default
kptopt1   1            # Automatic generation of k points, taking
                       # into account the symmetry
  nqpt1   0            # Cancel default
tolvrs1   1.0d-18      # SCF stopping criterion (modify default)
rfphon1   0            # Cancel default

 ecutsm1 0.5
dilatmx1 1.1

# nline1   10       # These two keywords will greatly help convergence
#nnsclo1   5        # of the wavefunctions
prtwf1    1

#Q vectors for all datasets

#Complete set of symmetry-inequivalent qpt chosen to be commensurate
# with kpt mesh so that only one set of GS wave functions is needed.
#Generated automatically by running GS calculation with kptopt=1,
# nshift=0, shiftk=0 0 0 (to include gamma) and taking output kpt set
# file as qpt set. Set nstep=1 so only one iteration runs.
nqpt   1    # One qpt for each dataset (only 0 or 1 allowed)
            # This is the default for all datasets and must
            #  be explicitly turned off for dataset 1.

qpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
qpt3   0.00000000E+00  0.00000000E+00  0.00000000E+00
qpt4   1.25000000E-01  0.00000000E+00  0.00000000E+00
qpt5   2.50000000E-01  0.00000000E+00  0.00000000E+00
qpt6   3.75000000E-01  0.00000000E+00  0.00000000E+00
qpt7   5.00000000E-01  0.00000000E+00  0.00000000E+00
qpt8   1.25000000E-01  1.25000000E-01  0.00000000E+00
qpt9   2.50000000E-01  1.25000000E-01  0.00000000E+00
qpt10  3.75000000E-01  1.25000000E-01  0.00000000E+00
qpt11  5.00000000E-01  1.25000000E-01  0.00000000E+00
qpt12  2.50000000E-01  2.50000000E-01  0.00000000E+00
qpt13  3.75000000E-01  2.50000000E-01  0.00000000E+00
qpt14  5.00000000E-01  2.50000000E-01  0.00000000E+00
qpt15  3.75000000E-01  3.75000000E-01  0.00000000E+00
qpt16  5.00000000E-01  3.75000000E-01  0.00000000E+00
qpt17  5.00000000E-01  5.00000000E-01  0.00000000E+00
qpt18  1.25000000E-01  1.25000000E-01  1.25000000E-01
qpt19  2.50000000E-01  1.25000000E-01  1.25000000E-01
qpt20  3.75000000E-01  1.25000000E-01  1.25000000E-01
qpt21  5.00000000E-01  1.25000000E-01  1.25000000E-01
qpt22  2.50000000E-01  2.50000000E-01  1.25000000E-01
qpt23  3.75000000E-01  2.50000000E-01  1.25000000E-01
qpt24  5.00000000E-01  2.50000000E-01  1.25000000E-01
qpt25  3.75000000E-01  3.75000000E-01  1.25000000E-01
qpt26  5.00000000E-01  3.75000000E-01  1.25000000E-01
qpt27  5.00000000E-01  5.00000000E-01  1.25000000E-01
qpt28  2.50000000E-01  2.50000000E-01  2.50000000E-01
qpt29  3.75000000E-01  2.50000000E-01  2.50000000E-01
qpt30  5.00000000E-01  2.50000000E-01  2.50000000E-01
qpt31  3.75000000E-01  3.75000000E-01  2.50000000E-01
qpt32  5.00000000E-01  3.75000000E-01  2.50000000E-01
qpt33  5.00000000E-01  5.00000000E-01  2.50000000E-01
qpt34  3.75000000E-01  3.75000000E-01  3.75000000E-01
qpt35  5.00000000E-01  3.75000000E-01  3.75000000E-01
qpt36  5.00000000E-01  5.00000000E-01  3.75000000E-01
qpt37  5.00000000E-01  5.00000000E-01  5.00000000E-01

#Set 2 : Response function calculation of d/dk wave function 
  iscf2   -3         # Need this non-self-consistent option for d/dk
kptopt2   2          # Modify default to use time-reversal symmetry
rfphon2   0          # Cancel default
rfelfd2   2          # Calculate d/dk wave function only
tolwfr2   1.0d-22    # Use wave function residual criterion instead
 prtwf2   1

#Set 3 : Response function calculation of Q=0 phonons and electric field pert.
getddk3   2          # d/dk wave functions from last dataset
kptopt3   2          # Modify default to use time-reversal symmetry
rfelfd3   3          # Electric-field perturbation response only
rfstrs3   3          # do strain perturbation
rfdir3   1 1 1       # the full set of directions is needed

#Sets 4-22 : Finite-wave-vector phonon calculations (defaults for all datasets)
# Some useful stuff to avoid crashing when reading GS wavefunctions...
 ecutsm 0.5
dilatmx 1.1

 getwfk   1          # Use GS wave functions from dataset1
 kptopt   3          # Need full k-point set for finite-Q response
 rfphon   1          # Do phonon response
rfatpol   1 5        # Treat displacements of all atoms
  rfdir   1 1 1      # Do all directions (symmetry will be used)
 tolvrs   1.0d-18     # This default is active for sets 3-10


########### Common input variables ###########
#### cell and system
natom 5
ntypat 3
typat 1 2 3 3 3
znucl 38 22 8
xred
0.0000000000    0.0000000000    0.0000000000
0.5000000000    0.5000000000    0.5000000000
0.5000000000    0.0000000000    0.5000000000
0.5000000000    0.5000000000    0.0000000000
0.0000000000    0.5000000000    0.5000000000
acell    1.0    1.0    1.0
rprim
7.3470798030E+00    0.0000000000    0.0000000000
0.0000000000    7.3470798030E+00    0.0000000000
0.0000000000    0.0000000000    7.3470798030E+00

### electronic ground state
#kptopt 1
ngkpt 8 8 8
nshiftk 1
shiftk 0.0 0.0 0.0
ecut 30.0
#pawecutdg 30.0
nstep 300
#tolrff 0.02
#toldfe 1.0d-7
#occopt 3  tsmear 0.0001
nband 20
diemac 12.0
#nsppol 2
#spinat
#0 0 1
#0 0 1

### XC
#ixc 11

### parallelization
#autoparal 1
#max_ncpus 12
paral_kgb 1
#npband 4
#bandpp 1
npfft 3
npkpt 4

### options for printing
prtden 0 #otherwise _DEN file printed at each Broyden step
prteig 0
prtwf 0
prtpot 0
