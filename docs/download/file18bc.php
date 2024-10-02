
#== what to do  ==#
###############################################
# OPTIMIZATION OF THE LATTICE PARAMETERS
#
# "It is STRONGLY suggested first to optimize the ionic positions without
#cell shape and size optimization (optcell=0), then start the cell
#shape and size optimization from the cell with relaxed ionic
#positions."

# AFTER this calculation is done, take the output of XCART and use it as input for a relaxation of ACELL (using optcell=1).

optcell 0    # MODIFY NUCLEAR POSITIONS, but **no** cell shape (rprim) and dimension (acell) optimisation.
ionmov  3    # conduct structural optimization (displacements of ions)
ntime   20    # molecular dynamics time steps
dilatmx 1.1 # maximal permitted scaling of the lattice parameters. Defines the sphere of plane waves [ecut] and
             # FFT box coherent with the possible modifications of the cell
ecutsm  0.5  # Energy CUToff SMearing. the total energy curves as a function of ecut, or acell, are smoothed,
             # keeping consistency with the stress

autoparal 1

#== Basis set ==#
 ecut 30.0  
 
#== k-point grid ==#
 kptopt 1
 ngkpt  6 6 1   
 nshiftk 1
 shiftk  0.0    0.0    0.5

#== SCF procedure ==#
 toldfe 1e-10   
 nstep 300     
 tolmxf 5.0d-6
 

#== Unit cell ==#
 acell    1.00    1.00    1.00 

 natom 5
 ntypat 2

 rprim
 6.5887536421  3.8040186889  0.0000000000000000 
-6.5887536421  3.8040186889  0.0000000000000000 
 0.0000000000  0.0000000000  66.140414361901960 
     
 typat
 1 1 2 2 2

 xred
  0.6666666666666666    0.3333333333333333     0.14020000000000
  0.6666666666666666    0.3333333333333333     0.32880000000000
  0.6666666666666666    0.3333333333333333     0.05450000000000
  0.3333333333333333    0.6666666666666666     0.18100000000000
  0.0000000000000000    0.0000000000000000     0.28220000000000 

znucl 49 34

#== Other ==#
 nspinor 1
 prtden 1
 prtwf 0

