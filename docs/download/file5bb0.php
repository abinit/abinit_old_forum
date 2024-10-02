# Crystalline : computation of the phonon spectrum
ndtset 10

#Set 1 : ground state self-consistency
getwfk1   0            # Cancel default

  iscf1   17
kptopt1   1            # Automatic generation of k points, taking
                       # into account the symmetry
  nqpt1   0            # Cancel default
tolwfr1   1.0d-20      # SCF stopping criterion (modify default)
rfphon1   0            # Cancel default

# ecutsm1 0.5
#dilatmx1 1.1

 nline1   10       # These two keywords will greatly help convergence
nnsclo1   5        # of the wavefunctions

prtwf1    1

#Set 2-36
getwfk 1
 ecutsm1 0.5
dilatmx1 1.1

    nstep 300
     ecut 30
pawecutdg 20
   tolvrs 1.0d-18
    nband 20

 rfphon   1          # Do phonon response
rfatpol   1 5        # Treat displacements of all atoms
  rfdir   1 1 1      # Do all directions (symmetry will be used)

   iscf   7
  
 qptopt   1
  ngqpt   4 4 4     ! Monkhorst-Pack indices
  nqshft  1         ! number of q-points in repeated basic q-cell
  q1shft  3*0.0

    nqpt  1
    iqpt: 0 
    iqpt+ 1

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
kptopt2 2

kptopt 3

ngkpt 8 8 8
nshiftk 1
shiftk 0.0 0.0 0.0
#ecut 30.0
#pawecutdg 30.0
#nstep 300
#tolrff 0.02
#toldfe 1.0d-7
#occopt 3  tsmear 0.0001
#nband 20
#diemac 12.0
#nsppol 2
#spinat
#0 0 1
#0 0 1

### XC
#ixc 11

#-------------- pseudopotentials --------------
outdata_prefix "stoo"
pp_dirpath "/home/gtang/workdir/abinit/test/phonon"
pseudos "Sr.psp8, Ti.psp8, O.psp8"

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
