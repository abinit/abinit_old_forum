
#Specific to ground state calculation

# ndtset 11

#Specific to ground state calculation

#ecut1 10
#ecut2 12
#ecut3 14
#ecut4 16
#ecut5 18
#ecut6 20
#ecut7 22
#ecut8 24
#ecut9 26
ecut 28
#ecut11 30

pawecutdg 50
pawmixdg 1

prtpot 0
#prtden 0
prtvhxc 0
prtwf 0
#prteig 0

toldfe 1.0D-6

# dilatmx   1.1    # Maximum scaling allowed for lattice parameters
  ionmov   3       # Use BFGS algorithm
   ntime   500      # Maximum number of optimization steps
 optcell   0       # Fully optimize unit cell geometry, keeping symmetry
  tolmxf   1.0e-4  # Convergence limit for forces as above

#######################################################################
#Common input variables

#Definition of the unit cell
 acell 10.50730 10.50730 21.79630  angstrom

  angdeg  90.00 90.00 120.0000
#  spgroup 1
 chkprim 0
  occopt 1
  nsppol 2
# spinat 0.0 0.0 0.0
#        0.0 0.0 0.0
#        0.0 0.0 0.0
#        0.0 0.0 0.0
#        0.0 0.0 0.0
# occopt  3
# tsmear  1.0d-3
 enunit 1

# kspace grid
 nshiftk 1
 shiftk  0.0 0.0 0.0
 ngkpt 2 2 1  # Use ngkpt 4 4 6 for converged results

#Definition of the atom types
ntypat 2              # There are two types of atom
znucl 14 8           # The keyword "znucl" refers to the atomic number of the

#Definition of the atoms
natom 52
 typat 16*1 36*2 

 xred     
 0.38333    0.71667    0.19680
 0.05000    0.05000    0.39360
 0.38333    0.21667    0.19680
 0.05000    0.55000    0.39360   
 0.88333    0.71667    0.19680    
 0.55000    0.05000    0.39360   
 0.88333    0.21667    0.19680  
 0.55000    0.55000    0.39360   
 0.21667    0.88333    0.14760   
 0.88333    0.21667    0.34440   
 0.71667    0.38333    0.14760   
 0.38333    0.71667    0.34440  
 0.71667    0.88333    0.14760  
 0.38333    0.21667    0.34440   
 0.21667    0.38333    0.14760   
 0.88333    0.71667    0.34440  
 0.71667    0.38333    0.07380 
 0.38333    0.71667    0.27060 
 0.05000    0.05000    0.46741 
 0.30000    0.05000    0.17220   
 0.96667    0.38333    0.36900  
 0.80000    0.80000    0.17220 
 0.46667    0.13333    0.36900  
 0.05000    0.30000    0.17220  
 0.71667    0.63333    0.36900  
 0.80000    0.05000    0.17220   
 0.46667    0.38333    0.36900   
 0.30000    0.30000    0.17220   
 0.96667    0.63333    0.36900   
 0.05000    0.80000    0.17220    
 0.71667    0.13333    0.36900   
 0.71667    0.88333    0.07380   
 0.38333    0.21667    0.27060  
 0.05000    0.55000    0.46741  
 0.30000    0.55000    0.17220   
 0.96667    0.88333    0.36900  
 0.80000    0.30000    0.17220   
 0.46667    0.63333    0.36900  
 0.80000    0.55000    0.17220   
 0.46667    0.88333    0.36900  
 0.30000    0.80000    0.17220 
 0.96667    0.13333    0.36900  
 0.21667    0.88333    0.07380  
 0.88333    0.21667    0.27060  
 0.55000    0.55000    0.46741   
 0.55000    0.80000    0.17220   
 0.21667    0.13333    0.36900   
 0.55000    0.30000    0.17220  
 0.21667    0.63333    0.36900  
 0.21667    0.38333    0.07380   
 0.88333    0.71667    0.27060   
 0.55000    0.05000    0.46741    
                                                                                 
  natfix  24
    iatfix  7 3 5 1 11 15 13 9 17 50 32 43 37 48 28 24 39 22 46 41 30 26 20 35 
         

nstep 500               # Maximal number of SCF cycles
iscf 17
# diemac 3.0
ecutsm  0.5
