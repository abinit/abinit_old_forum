# Crystalline silicon
# Calculation of the GW correction to the direct band gap in Gamma
# Dataset 1: ground state calculation 
# Dataset 2: calculation of the kss file 
# Dataset 3: calculation of the screening (epsilon^-1 matrix for W)
# Dataset 4: calculation of the Self-Energy matrix elements (GW corrections)

ndtset      4

kptopt   1            
ngkpt    12  12  7        

# Dataset1: usual self-consistent ground-state calculation
# Definition of the k-point grid
nshiftk1  1
shiftk1  0.0 0.0 0.5  
prtden1  1         

# Dataset2: calculation of kss file
# Definition of k-points
nkpt2    76             
nshiftk2  1
shiftk2  0.0 0.0 0.5  
istwfk2  76*1                    
iscf2    -2            
getden2  -1             
nband2   40
nbandkss2 100       

# Dataset3: Calculation of the screening (epsilon^-1 matrix)
optdriver3  3        
getkss3     -1       
nband3      40       
ecutwfn3    40      
ecuteps3    85.0      
ppmfrq3    16.7 eV  
nshiftk3  1
shiftk3  0.0 0.0 0.5  
istwfk3  76*1                    

# Dataset4: Calculation of the Self-Energy matrix elements (GW corrections)
optdriver4  4        
getkss4     -2       
getscr4     -1       
nband4      100      
ecutwfn4    40.0      
ecutsigx4    85.0      
nkptgw4      1               
kptgw4                       
  0.000    0.000    0.000    
bdgw4       8  9             

nshiftk4  1
shiftk4  0.0 0.0 0.5  
istwfk4  76*1                    

# Definition of the unit cell: fcc
acell  7.6399210181E+00  7.6399210181E+00  1.2235388369E+01       
rprim   0.866025403784439  0.5  0.0   
         -0.866025403784439  0.5  0.0   
          0.0                0.0  1.0 
# Definition of the atom types
ntypat  2         
znucl 12.0  16.0          
                                           
# Definition of the atoms
natom  4           
typat  1 1 2 2        
xred             
      3.3333333333E-01  6.6666666667E-01  0.0000000000E+00
              6.6666666667E-01  3.3333333333E-01  5.0000000000E-01
              3.3333333333E-01  6.6666666667E-01  3.8088259380E-01
              6.6666666667E-01  3.3333333333E-01  8.8088259380E-01

# Definition of the planewave basis set (at convergence 16 Rydberg 8 Hartree)
ecut 40.0          
ixc  11
# Use only symmorphic operations
symmorphi 0
nsym     0
# Definition of the SCF procedure
nstep   50        
diemac  10.0     
tolwfr  1.0d-12   

iscf 5
