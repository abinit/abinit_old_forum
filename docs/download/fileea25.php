#LiIO3(hexagonal) structure with mesh 4*4*4
#Response function calculation for:
#    * rigid-atom elastic tensor
#    * rigid-atom piezoelectric tensor
#    * interatomic force constants at gamma
#    * Born effective charges

   ndtset   3

# Set 1 : Initial self-consistent run

    iscf1   5
  kptopt1   1
  tolvrs1   1.0d-5  #need excellent convergence of GS quantities for RF runs


# Set 2 : Calculate the ddk wf's - needed for piezoelectric tensor and 
#         Born effective charges in dataset 3

  getwfk2  -1
    iscf2  -3        #this option is needed for ddk
  kptopt2   2        #use time-reversal symmetry only for k points
    nqpt2   1        #one wave vector will be specified
     qpt2   0 0 0    #need to specify gamma point
  rfelfd2   2        #set for ddk wf's only
   rfdir2   1 1 1    #full set of directions needed
  tolwfr2   1.0d-5  #only wf convergence can be monitored here

# Set 3 : response-function calculations for all needed perturbations

  getddk3  -1
  getwfk3  -2
    iscf3   5
  kptopt3   2        #use time-reversal symmetry only for k points
    nqpt3   1
     qpt3   0 0 0
 rfphon3   1        #do atomic displacement perturbation
 rfatpol3   1 10     #do for all atoms
  rfstrs3   3        #do strain perturbation
   rfdir3   1 1 1    #the full set of directions is needed
  tolvrs3   1.0d-4  #need reasonable convergence of 1st-order quantities

#Common input data
#acell    1.0358533000E+01  1.0358533000E+01  9.7715840000E+00
acell     1.0392845188E+01  1.0392845188E+01  9.9437669943E+00

angdeg   90 90 120


                                  #hexagonal primitive vectors must be
                                  #specified with high accuracy to be
                                  #sure that the symmetry is recognized
                                 #and preserved in the optimization
                                 #process

#Definition of the atom types and atoms
 ntypat   3 
  znucl   3 8 53
  natom   10
  typat   1 1 2 2 2 2 2 2 3 3

#Starting approximation for atomic positions in REDUCED coordinates
#based on ideal tetrahedral bond angles

# xred  COPY RELAXED RESULT FROM PREVIOUS CALCULATION
# Here is a set of default values, for automatic testing : suppress it and fill the previous line
     xred    -1.1569387487E-20 -2.1580269686E-20  9.2347191842E-01
             -1.1569387487E-20 -2.1580269686E-20  4.2347191842E-01
              3.3796286752E-01  2.5159173924E-01  1.4880456963E-01
              7.4840826076E-01  8.6371128289E-02  1.4880456963E-01
              9.1362887171E-01  6.6203713248E-01  1.4880456963E-01
              2.5159173924E-01  9.1362887171E-01  6.4880456963E-01
              8.6371128289E-02  3.3796286752E-01  6.4880456963E-01
              6.6203713248E-01  7.4840826076E-01  6.4880456963E-01
              6.6666666667E-01  3.3333333333E-01 -1.2153987329E-02
              3.3333333333E-01  6.6666666667E-01  4.8784601267E-01


#Gives the number of bands, explicitely (do not take the default)
  nband   26              # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

#Definition of the plane wave basis set
   ecut   30             # Maximum kinetic energy cutoff (Hartree)
 ecutsm   0.5            # Smoothing energy needed for lattice paramete
                         # optimization.  This will be retained for
                         # consistency throughout.

#Definition of the k-point grid
 kptopt   1              # Use symmetry and treat only inequivalent points
  ngkpt   8 8 8          # 4x4x4 Monkhorst-Pack grid
  prtvol   10
nshiftk   1              # Use one copy of grid only (default)
 shiftk   0.0 0.0 0.5    # This choice of origin for the k point grid
                         # preserves the hexagonal symmetry of the grid,
                         # which would be broken by the default choice.

#Definition of the self-consistency procedure
 diemac   9.0            # Model dielectric preconditioner
   iscf   5              # Use conjugate-gradient SCF cycle
  nstep   40             # Maxiumum number of SCF iterations
ixc   11
