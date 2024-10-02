# Crystalline Sr2RuO4
# Create the KSS file
spinat    0.0 0.0 4.0
          0.0 0.0 1.0
          0.0 0.0 1.0
          0.0 0.0 1.0
          0.0 0.0 1.0
          0.0 0.0 1.0
          0.0 0.0 1.0
kssform     1
nbandkss   70
nband      100
prtwf      0
nsppol   2
npband  32
gwpara  2
#Definition of occupation numbers
#occopt 3
#tsmear 0.001
iscf   5

#Definition of the unit cell
acell 10.212836 10.375352 22.583550


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
kptopt      1        
ngkpt       4 4 1

#64 k points
 nshiftk     4     
 shiftk  0.0 0.0 0.0  # This grid contains the Gamma point
         0.0 0.0 0.0
         0.5 0.5 0.0
         0.0 0.0 0.0 
 istwfk     13*1
#256 k points
#nshiftk 4
#shiftk 0 0 0   1/2 1/2 0   1/2 0 1/2  0 1/2 1/2
#istwfk     19*1

#Definition of the SCF procedure
nstep 30          
toldfe 1.0d-7     
                 
prtvol     5
enunit     1


