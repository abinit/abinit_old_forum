
#== what to do  ==#
###############################################
# OPTIMIZATION OF THE LATTICE PARAMETERS
#
# "It is STRONGLY suggested first to optimize the ionic positions without
#cell shape and size optimization (optcell=0), then start the cell
#shape and size optimization from the cell with relaxed ionic
#positions."

# AFTER this calculation is done, take the output of XCART and use it as input for a relaxation of ACELL (using optcell=1).

#optcell 7    # MODIFY NUCLEAR POSITIONS, but **no** cell shape (rprim) and dimension (acell) optimisation.
#ionmov  3    # conduct structural optimization (displacements of ions)
#ntime  50    # molecular dynamics time steps
dilatmx 1.1 # maximal permitted scaling of the lattice parameters. Defines the sphere of plane waves [ecut] and
             # FFT box coherent with the possible modifications of the cell
ecutsm  0.5  # Energy CUToff SMearing. the total energy curves as a function of ecut, or acell, are smoothed,
             # keeping consistency with the stress


berryopt  -1
rfdir      1 1 1
#== Basis set ==#
 ecut 50.0   #optimal

#== k-point grid ==#
 kptopt 1
 ngkpt  1 8 8    #optimal
# nshiftks 1
# shiftk  0.0    0.5    0.5

#== SCF procedure ==#
 toldfe 1e-10   # 
 nstep 160     # with ecut=50, ngkpt1,8,8, convergence reached 123 with toldfe=1e-10
 occopt  1

#== Unit cell ==#
 acell    1.0    1.0    1.0
 natom 4
 ntypat 2
 nband  100
 ixc   3


 rprim
  2.83458918818670E+01    0.00000000000000E+00      0.00000000000000E+00
  0.00000000000000E+00    6.89362076070000E+00      0.00000000000000E+00
  0.00000000000000E+00    0.00000000000000E+00      8.52782123740000E+00
 
 typat
 1 1 2 2
 
#Definition of the differnet datasets

ndtset  1
jdtset  1 

  xcart
  2.6601427138E+00  1.7234051902E+00  1.1488286970E+00
  7.5016177052E+00  5.1702155705E+00  5.4128910860E+00
  3.0686797823E+00  5.1702155705E+00  4.2535954215E+00
  7.0933148342E+00  1.7234051902E+00 -1.0461981276E-02


         



 znucl 32 16

#== Other ==#
 nspinor 1
 prtden 1
 prtwf 0