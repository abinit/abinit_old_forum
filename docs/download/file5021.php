ndtset 2
jdtset 1 2
#Specific to ground state calculation
  
tolvrs1   1.0d-18      # SCF stopping criterion
    
iscf1   5            # Self-consistent calculation, using algorithm 5
          
rfphon2   1            # Will consider phonon-type perturbation
 
rfatpol2   1 5          # All the atoms will be displaced
   
rfdir2   1 1 1        # Along all reduced coordinate axis
    
nqpt2   1            # One wavevector is to be considered
     
qpt2   0 0 0        # This wavevector is q=0 (Gamma)
  
kptopt2   2             
tolvrs2   1.0d-8       # SCF stopping criterion
    
iscf2   5            # Self-consistent calculation, using algorithm 5
  
getwfk2   -1            # Read the ground-state wavefunctions

xred   0.000000000000      0.000000000000      0.003840536571 
      0.500000000000      0.500000000000      0.515541353427  
     0.500000000000      0.500000000000     -0.016704495341    
   0.000000000000      0.500000000000      0.487761302671       
0.500000000000      0.000000000000      0.487761302671
 kptopt 1         
nshiftk 4
 
shiftk  0.5 0.5 0.5    0.5 0.0 0.0    0.0 0.5 0.0     0.0 0.0 0.5
ngkpt  6 6 6  

acell 7.4882932576E+00  7.4882932576E+00  7.5786898548E+00
rprim  1 0 0    0 1 0 0 0 1
ntypat 3       
znucl 56 22 8         


natom 5           
typat 1 2 3 3 3       


ecut 25        

nstep 100 

toldfe 1.0d-6 

diemac 12.0       
