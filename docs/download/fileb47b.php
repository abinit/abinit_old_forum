# Crystalline silicon
# Calculation of the GW correction to the direct band gap in Gamma
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the WFK file 
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)
gwcalctyp 20
ndtset      4
chkprim 0
ngkpt    4 4 4     # Density of k points used for the automatic tests of the tutorial
#ngkpt    4 4 4        # Density of k points needed for a converged calculation

nshiftk  4
shiftk   0.0 0.0 0.0  # This grid contains the Gamma point, which is the point at which
         0.0 0.5 0.5  # we will compute the (direct) band gap. There are 19 k points
         0.5 0.0 0.5  # in the irreducible Brillouin zone, if ngkpt 4 4 4 is used.
         0.5 0.5 0.0
istwfk *1           # For the GW computations, do not take advantage of the 
                      # specificities of k points to reduce the number of components of the
                      # wavefunction.
tolwfr  1.0d-10   

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
shiftk1  0.5 0.5 0.5  # This grid is the most economical, but does not contain the Gamma point.
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
istwfk1 *0            # For the ground state, let the code use the time-reversal symmetry
tolvrs1 1e-6

# Dataset2: calculation of WFK file
# Definition of k-points
iscf2    -2             # Non self-consistent calculation
getden2  -1             # Read previous density file
nband2   105
nbdbuf2   5

# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3   3       # Screening calculation
getwfk3     -1       # Obtain WFK file from previous dataset
nband3      65      # Bands to be used in the screening calculation
ecutwfn3   5     # Planewaves to be used to represent the wavefunctions
ecuteps3    5      # Dimension of the screening matrix
ppmfrq3    16.7 eV  # Imaginary frequency where to calculate the screening


# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        # Self-Energy calculation
getwfk4     -2       # Obtain WFK file from dataset 1
getscr4     -1       # Obtain SCR file from previous dataset
nband4     63     # Bands to be used in the Self-Energy calculation
ecutwfn4    9      # Planewaves to be used to represent the wavefunctions
ecutsigx4    9    # Dimension of the G sum in Sigma_x
                     
nkptgw4 1               # number of k-point where to calculate the GW correction
kptgw4  0.000    0.000    0.000    # (Gamma)
bdgw4    62 63            

#Definition of the unit cell
acell 10.2555436803 10.2555436803 20.5110873607



 

angdeg 90.0 90.0 90.0
       
rprim  1   0.0  0
       0   1    0
       0.0 0.0  1  

#Definition of the atom types
ntypat 4
znucl 29 30 50 16



 
           
                         

#Definition of the atoms
natom 16          
typat 1 1 1 1 3 3 2 2 4 4 4 4 4 4 4 4
          
xred
              0.000000      0.000000      0.000000
              0.0           0.5          0.25
              0.5           0.5          0.5
              0.5           0.0           0.75
              0.5           0.5          0.0
              0.0           0.0           0.5
              0.5           0.0           0.25
              0.0           0.5          0.75
              0.25          0.25         0.125
              0.75          0.75          0.125
              0.75          0.25          0.375
              0.25          0.75          0.375
               0.25         0.25         0.625
              0.75          0.75          0.625
              0.75          0.25          0.875
              0.25          0.75          0.875     
  
  
   

#Definition of the planewave basis set
    # Maximal kinetic energy cut-off, in Hartree
ecut 40

symmorphi 0
                  
#Definition of the SCF procedure
        # Maximal number of SCF cycles
   # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
nstep 200                 # This value is way too large for most realistic studies of materials
diemac 12.0       
