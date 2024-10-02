# Crystalline aluminum : 
# create the screening file

#Parameter for the screening calculation
spinat    0.0 0.0 4.0
          0.0 0.0 -4.0
          0.0 0.0 4.0
          0.0 0.0 -4.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
          0.0 0.0 1.0
          0.0 0.0 -1.0
optdriver    3
gwcalctyp    2
nband       100
ecuteps     8.0
ecutwfn     8.0
awtr     1
nsppol     1
nspden     2
nfreqim      4
nfreqre     10
freqremax    1.
prtwf      0
#Definition of occupation numbers
occopt 3
tsmear  0.001
#Definition of the unit cell
acell 10.212836 10.375352 22.583550

#rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5 
       0.5  0.5  0.0

#Definition of the atom types
ntypat 3       
znucl 44 8 20  
   

#Definition of the atoms
natom 28  
typat 1 1 1 1 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 3 3 3 3 3 3 3 3
xred  0.50000000  0.00000000 0.50000000 
      0.00000000  0.00000000 0.00000000 
      0.00000000  0.50000000 0.50000000
      0.50000000  0.50000000 0.00000000
      0.69530000  0.30300000 0.47560000
      0.30470000  0.69700000 0.52440000
      0.19530000  0.30300000 0.02440000
      0.80470000  0.69700000 0.97560000
      0.80470000  0.80300000 0.47560000
      0.19530000  0.19700000 0.52440000
      0.30470000  0.80300000 0.02440000
      0.69530000  0.19700000 0.97560000
      0.43980000  0.97990000 0.33430000
      0.56020000  0.02010000 0.66570000
      0.93980000  0.97990000 0.16570000
      0.06020000  0.02010000 0.83430000
      0.06020000  0.47990000 0.33430000
      0.93980000  0.52010000 0.66570000
      0.56020000  0.47990000 0.16570000
      0.43980000  0.52010000 0.83430000
      0.51080000  0.04560000 0.15080000
      0.48920000  0.95440000 0.84920000
      0.01080000  0.04560000 0.34920000
      0.98920000  0.95440000 0.65080000
      0.98920000  0.54560000 0.15080000
      0.01080000  0.45440000 0.84920000
      0.48920000  0.54560000 0.34920000
      0.51080000  0.45440000 0.65080000
#Definition of the planewave basis set
ecut  10.0

#Definition of the k-point grid
kptopt       1        
ngkpt        4 1 1
nshiftk      4      
shiftk   0.0 0.0 0.0  # This grid contains the Gamma point
         0.0 0.0 0.0
         0.5 0.0 0.0
         0.0 0.0 0.0
istwfk       5*1

#Definition of the SCF procedure
nstep       30          
toldfe      1.0d-7     
                  
prtvol     5
enunit     1


