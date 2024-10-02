
#
# Computation of the band structure.
# First a SCF density computation then a non-SCF band structure calculation.

ndtset 2

#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points
# taking into account the symmetry
nshiftk1 4
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
ngkpt1  4 4 4  
prtden1  1         
toldfe1  1.0d-6    

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -3
nband2   8
ndivk2   10 12 17    
    # by 4 points.
kptbounds2  0.5  0.0  0.0 # L point
            0.0  0.0  0.0 # Gamma point
            0.0  0.5  0.5 # X point
            1.0  1.0  1.0 # Gamma point in another cell.
tolwfr2  1.0d-12
enunit2  1         


#Definition of the unit cell
acell 18.897161646320722   36.48342718923618  9.301189426811295          
rprim  1. 0. 0.
       0. 1. 0.
       0. 0. 1.

#Definition of the atom types
ntypat 1     
znucl 14          
          
              
      

#Definition of the atoms
natom 20          
typat 20*1      
xred             
                 
       9.448580823160361  24.954268868815902  0.        
       9.448580823160361  11.529158320420272  0.        
       9.448580823160361  12.871669375259836  2.325297365735666
       9.448580823160361  15.556691484938964  2.325297365735666
       9.448580823160361  16.899202539778525  0.        
       9.448580823160361  19.584224649457653  0.        
       9.448580823160361  20.926735704297215  2.325297365735666
       9.448580823160361  23.611757813976343  2.325297365735666
       9.448580823160361  27.034846366075815  0.        
       9.448580823160361  9.448580823160361   0.        
       9.448580823160361  24.954268868815902  4.650594712574172
       9.448580823160361  11.529158320420272  4.650594712574172
       9.448580823160361  12.871669375259836  6.975892078309838
       9.448580823160361  15.556691484938964  6.975892078309838
       9.448580823160361  16.899202539778525  4.650594712574172
       9.448580823160361  19.584224649457653  4.650594712574172
       9.448580823160361  20.926735704297215  6.975892078309838
       9.448580823160361  23.611757813976343  6.975892078309838
       9.448580823160361  27.034846366075815  4.650594712574172
       9.448580823160361  17.855135914358748  4.650594712574172 

#Definition of the planewave basis set
ecut 60    

#Definition of the SCF procedure
nstep 1000        
diemac 12.0      
# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1
mkmem 0
