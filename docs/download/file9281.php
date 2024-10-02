
ndtset      4

gwcalctyp 20
#paral_kgb 1
gwmem 0
gwpara 2
paral_atom 1

occopt 1
tsmear 0.002
        
ngkpt    4 4 4        

nshiftk  1
shiftk   1 1 1
istwfk  *1           
tolwfr  1.0d-10   

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
shiftk1  1 1 1
istwfk1 *0            
tolvrs1 1e-10
prtcif1 1
# Dataset2: calculation of WFK file
# Definition of k-points
iscf2    -2             
getden2  -1             
nband2   105
nbdbuf2   10
localrdwf 1
# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3   3       # Screening calculation
getwfk3     -1       # Obtain WFK file from previous dataset
nband3      40      # Bands to be used in the screening calculation
ecutwfn3    30      # Planewaves to be used to represent the wavefunctions

ecuteps3   40

ppmfrq3    16.7 eV  # Imaginary frequency where to calculate the screening


# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        # Self-Energy calculation
getwfk4     -2       # Obtain WFK file from dataset 1
getscr4     -1       # Obtain SCR file from previous dataset
nband4     40      # Bands to be used in the Self-Energy calculation
ecutwfn4    30
ecutsigx4    40
                     
nkptgw4 1            
kptgw4 0.5 0.5 0.5
  
bdgw4 22 23
 

# Definition of the unit cell: fcc
acell  3*5.289805273 Angstr
rprim  1 0 0
       0 1 0
       0 0 1

# Definition of the atom types
ntypat  3
znucl 37 32 17
                
                         
# Definition of the atoms
natom 5
typat  1 2 3 3 3
 xred      4.0572364839E-29  3.8216794882E-30 -2.0266486347E-29
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01 -2.0266486347E-29
                       5.0000000000E-01  3.8216794882E-30  5.0000000000E-01
                       4.0572364839E-29  5.0000000000E-01  5.0000000000E-01


# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 45
ecutsm 0.5


# Definition of the SCF procedure
nstep   200
diemac  8    

symmorphi 0
