# Crystalline aluminum : 
# create the screening file

#Parameter for the screening calculation
spinat    0.0 0.0 4.0
          0.0 0.0 1.0
          0.0 0.0 1.0
          0.0 0.0 1.0
          0.0 0.0 1.0
          0.0 0.0 1.0
          0.0 0.0 1.0
optdriver    3
gwcalctyp    2
nband       100
ecuteps     8.0
ecutwfn     8.0

nfreqim      8
nfreqre     40
freqremax    1.
nsppol   2



#Definition of occupation numbers
occopt 3
tsmear 0.001
iscf   5
#Definition of the unit cell
acell 10.212836 10.375352 22.583550

#rprim  0.0  0.5  0.5   # FCC primitive vectors (to be scaled by acell)
       0.5  0.0  0.5 
       0.5  0.5  0.0

#Definition of the atom types
ntypat 3       
znucl 44 38 8     

#Definition of the atoms
natom 7  
typat 1 2 2 3 3 3 3 
xred  0.00000000 0.00000000 0.00000000
      0.00000000 0.00000000 0.64630000 
      0.00000000 0.00000000 0.35370000
      0.00000000 0.50000000 0.00000000
      0.50000000 0.00000000 0.00000000
      0.00000000 0.00000000 0.83790000
      0.00000000 0.00000000 0.16210000

#Definition of the planewave basis set
ecut  10.0

#Definition of the k-point grid
kptopt       1        
ngkpt        2 4 1
nshiftk      4      
shiftk   0.0 0.0 0.0  # This grid contains the Gamma point
         0.0 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.0
istwfk       10*1

#Definition of the SCF procedure
nstep       30          
toldfe      1.0d-7     
                  
prtvol     5
enunit     1


