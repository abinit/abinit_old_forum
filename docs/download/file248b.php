



# Structural parameters
acell    3*7.923466054  

rprim    1.000000000000000   0.000000000000000   0.000000000000000 
         0.000000000000000   1.000000000000000   0.000000000000000 
         0.500000000000000   0.500000000000000   1.063405797101449 
       
natom    6  
ntypat   3  
typat    1 1 1 2 3 3  
znucl    22 42 7  
xred     0.860000000000000   0.110000000000000   0.280000000000000 
         0.390000000000000   0.640000000000000   0.220000000000000 
         0.610000000000000   0.360000000000000   0.780000000000000 
         0.140000000000000   0.890000000000000   0.720000000000000 
         0.625000000000000   0.875000000000000   0.750000000000000 
         0.375000000000000   0.125000000000000   0.250000000000000 



pawovlp 10


ixc 11
ecut 20
pawecutdg 42
kptopt 1


toldff 4.0e-05
nstep 200

ngkpt 8 8 8

tsmear 0.01

 nshiftk 1
 shiftk 0.0 0.0 0.5
        0.5 0.0 0.0
        0.0 0.5 0.0
        0.0 0.0 0.5






# I/O parameters
# prtwf 1 prtden 0  prteig 0
# getwfk -1

# cell optimisation

    ndtset   2       # There are 2 datasets in this calculation
     
     # Set 1 : Internal coordinate optimization
     
       ionmov1   2       # Use BFGS algorithm for structural optimization
       ntime1   10       # Maximum number of optimization steps
      tolmxf1   1.0e-6  # Optimization is converged when maximum force 
                        # (Hartree/Bohr) is less than this maximum
     # natfix1   2       # Fix the position of two symmetry-equivalent atoms 
                        #  in doing the structural optimization
    #  iatfix1   1 2     # Choose atoms 1 and 2 as the fixed atoms (see discussion)
    
    # Set 2 : Lattice parameter relaxation (including re-optimization of
    #         internal coordinates)
    
     dilatmx2   1.05    # Maximum scaling allowed for lattice parameters
     getxred2   -1      # Start with relaxed coordinates from dataset 1
      getwfk2   -1      # Start with wave functions from dataset 1
      ionmov2   2       # Use BFGS algorithm
       ntime2   12      # Maximum number of optimization steps
     optcell2   2       # Fully optimize unit cell geometry, keeping symmetry
      tolmxf2   1.0e-6  # Convergence limit for forces as above
     strfact2   100     # Test convergence of stresses (Hartree/bohr^3) by
                        # multiplying by this factor and applying force
                        # convergence test
 #     natfix2   2       
#      iatfix2   1 2   
      ecutsm2 0.5



