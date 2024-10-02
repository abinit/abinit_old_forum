# Crystalline silicon 
#
# Computation of the band structure.
# First, a SCF density computation, then a non-SCF band structure calculation.

ndtset 2
chkprim 0
#Dataset 1 : usual self-consistent calculation
kptopt1 1          # Option for the automatic generation of k points,
                  # taking into account the symmetry
nshiftk1 4
shiftk1  0.5 0.5 0.5  # These shifts will be the same for all grids
         0.5 0.0 0.0
         0.0 0.5 0.0
         0.0 0.0 0.5
ngkpt1 4 4 4
prtden1  1         # Print the density, for use by dataset 2
toldfe1  1.0d-6    # This value is way too large for most realistic studies of materials

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -3
nband2   35
ndivk2   10 12 17      # 10, 12 and 17 divisions of the 3 segments, delimited
                       # by 4 points.
kptbounds2  0.5  0.0  0.0 # L point
            0.0  0.0  0.0 # Gamma point
            0.0  0.5  0.5 # X point
            1.0  1.0  1.0 # Gamma point in another cell.
tolwfr2  1.0d-12
enunit2  1             # Will output the eigenenergies in eV 


#Definition of the unit cell
acell 3*10.276495620

 

angdeg 90.0 90.0 90.0
       
rprim  1   0.0  0
       0   1    0
       0.0 0.0  2  

#Definition of the atom types
ntypat 4
znucl 29 30 50 16



 
           
                         

#Definition of the atoms
natom 16          
typat 1 1 1 1 2 2 3 3 4 4 4 4 4 4 4 4
#typat 1 2 3 3 4            
xred
              0.500000      0.000000      0.750000     
              0.000000      0.500000      0.250000    
              0.500000      0.000000      0.250000     
              0.000000      0.500000      0.750000     
              0.500000      0.500000      0.000000     
              0.000000      0.000000      0.500000     
              0.000000      0.000000      0.000000    
              0.500000      0.500000      0.500000     
              0.741980      0.258020      0.866680    
              0.258020      0.741980      0.866680     
              0.258020      0.258020      0.133320    
              0.741980      0.741980      0.133320    
              0.241980      0.758020      0.366680    
              0.758020      0.241980      0.366680    
              0.758020      0.758020      0.633320     
              0.241980      0.241980      0.633320     
  
  
   

#Definition of the planewave basis set
    # Maximal kinetic energy cut-off, in Hartree
ecut 36
#Definition of the k-point grid
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
ngkpt 12 12 12

#nshiftk 4       
                  
#shiftk 0.5 0.5 0.5
      # 0.5 0.0 0.0
       #0.0 0.5 0.0
       #0.0 0.0 0.5
                  
#Definition of the SCF procedure
        # Maximal number of SCF cycles
toldfe 1.0d-6     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 12.0       
