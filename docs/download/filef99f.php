# Crystalline lithium : cell_optimization
#

 dilatmx   1.50    # Maximum scaling allowed for lattice parameters
  ionmov   2       # Use BFGS algorithm
   ntime   50      # Maximum number of optimization steps
 optcell   1       # Fully optimize unit cell geometry, keeping symmetry
  tolmxf   1.0e-06  # Convergence limit for forces as above
 strfact   100     # Test convergence of stresses (Hartree/bohr^3) by
                    # multiplying by this factor and applying force
                    # convergence test

#Definition of the unit cell
acell     3*6.500 
rprim -0.5  0.5  0.5  
       0.5 -0.5  0.5  
       0.5  0.5 -0.5  

#Definition of the atom types
ntypat 1          
znucl 03          
occopt   3           
tsmear    0.0001
                        

#Definition of the atoms
natom 1          
typat 1          
xred              
   0.0  0.0  0.0  

#Definition of the planewave basis set
ecut  6.0         # Maximal kinetic energy cut-off, in Hartree
ecutsm   0.5      # Smoothing energy needed for lattice paramete

#Definition of the k-point grid
kptopt 3          
                  
ngkpt  8 8 8      
nshiftk 2         
shiftk  0.25  0.25  0.25
       -0.25 -0.25 -0.25

#Definition of the SCF procedure
nstep 50         
toldfe 1.0d-06   
diemac 12.0      
