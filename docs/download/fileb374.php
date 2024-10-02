ndtset   2       # There are 2 datasets in this calculation
jdtset 1 2

# Set 1 : Internal coordinate optimization at zero electric field

berryopt1 -1
rfdir2 1 1 1

# Set 2 : Internal coordinate optimization at finite electric field

ionmov2   2       # Use BFGS algorithm for structural optimization
ntime2   100      # Maximum number of optimization steps
tolmxf2  1.0e-7   # Optimization is converged when maximum force 
                  # (Hartree/Bohr) is less than this maximum
getxred2 -1
getwfk2 -1
berryopt2 4
efield2  0 0 1.0e-3

#Common input data

#Starting approximation for the unit cell
acell 3*8.65331771838237 Bohr
rprim  0.0  0.5  0.5
       0.5  0.0  0.5
       0.5  0.5  0.0

#Definition of the atom types and atoms
  ntypat   2 
  znucl   31 7
  natom   2
  typat   1 2

xred
0.0  0.0  0.0
0.25 0.25 0.25

#Gives the number of bands, explicitely (do not take the default)
nband   9                # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

symmorphi 0

#Definition of the k-point grid
#kptopt 3
ixc 11
ecut 16.0
pawecutdg 16.0
ecutsm 0.5
ngkpt  10 10 10
nbdbuf 0
nshiftk 4
shiftk 
  0.5 0.5 0.5
  0.5 0.0 0.0
  0.0 0.5 0.0
  0.0 0.0 0.5
nstep 150
diemac 12.0
tolvrs 1.0d-20

# enforce calculation of forces at each SCF step
optforces 1
#paral
autoparal 1