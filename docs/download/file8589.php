
#== what to do  ==#
###############################################
# OPTIMIZATION OF THE LATTICE PARAMETERS
#
# "It is STRONGLY suggested first to optimize the ionic positions without
#cell shape and size optimization (optcell=0), then start the cell
#shape and size optimization from the cell with relaxed ionic
#positions."

# AFTER this calculation is done, take the output of XCART and use it as input for a relaxation of ACELL (using optcell=1).

#optcell 9    # MODIFY NUCLEAR POSITIONS, but **no** cell shape (rprim) and dimension (acell) optimisation.
#ionmov  3    # conduct structural optimization (displacements of ions)
#ntime  150    # molecular dynamics time steps
dilatmx 1.02 # maximal permitted scaling of the lattice parameters. Defines the sphere of plane waves [ecut] and
             # FFT box coherent with the possible modifications of the cell
ecutsm  0.5  # Energy CUToff SMearing. the total energy curves as a function of ecut, or acell, are smoothed,
             # keeping consistency with the stress

 berryopt  -1
 rfdir      1 1 1

#== Basis set ==#
 ecut 30.0  

#== k-point grid ==#
 kptopt 1
 ngkpt   30 30 1   
 nshiftk 1
 shiftk  0.0    0.0    0.5

#== SCF procedure ==#
 toldfe 1e-9    
 nstep 300     
 tolmxf 5.0d-6
 occopt 1
 #iscf 17

#== Unit cell ==#
 acell    1.00    1.00    1.00 

 natom 5
 ntypat 2
 ixc 11
 nband 38

 rprim
 7.7535934588          0.0000000000000000      0.0000000000000000
 3.8767967294          6.7148089059032370      0.0000000000000001
 0.00000000000        -0.0000000000000011      56.403752299000000     
 typat
 1 1 2 2 2

 xred
    0.33333333333  0.33333333333     0.54197527673
    0.66666666667  0.66666666667     0.68364644370
    0.00000000000  0.00000000000     0.50031431457
    0.33333333333  0.33333333333     0.62735986478
    0.00000000000  0.00000000000     0.72787076690

 ndtset 1
 jdtset 1
 

znucl 49 34

#== Other ==#
 nspinor 1
 prtden 1
 prtwf 0

