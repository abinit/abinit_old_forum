#MgSiO3
#Response function calculation for:
#    * rigid-atom elastic tensor
#    * rigid-atom piezoelectric tensor
#    * interatomic force constants at gamma
#    * Born effective charges

   ndtset   3

# Set 1 : Initial self-consistent run
    iscf1   5
  kptopt1   1
  tolvrs1   1.0d-18  #need excellent convergence of GS quantities for RF runs

# Set 2 : Calculate the ddk wf's - needed for piezoelectric tensor and 
#         Born effective charges in dataset 3

  getwfk2  -1
    iscf2  -3        #this option is needed for ddk
  kptopt2   2        #use time-reversal symmetry only for k points
    nqpt2   1        #one wave vector will be specified
     qpt2   0 0 0    #need to specify gamma point
  rfelfd2   2        #set for ddk wf's only
   rfdir2   1 1 1    #full set of directions needed
  tolwfr2   1.0d-20  #only wf convergence can be monitored here

# Set 3 : response-function calculations for all needed perturbations

  getddk3  -1
  getwfk3  -2
    iscf3   3
  kptopt3   2        #use time-reversal symmetry only for k points
    nqpt3   1
     qpt3   0 0 0
  rfphon3   1        #do atomic displacement perturbation
 rfatpol3   1 40      #do for all atoms
  rfstrs3   1        #do strain perturbation
   rfdir3   1 1 1    #the full set of directions is needed
  tolvrs3   1.0d-10  #need reasonable convergence of 1st-order quantities

#Common input data

# acell  COPY RELAXED RESULT FROM PREVIOUS CALCULATION
# Here is a default value, for automatic testing : suppress it and fill the previous line
   acell   1.7580914548E+01  1.6787435043E+01  1.0126086124E+01 Bohr
   
   angdeg 90.00000000 90.00000 90.00000000

#Definition of the atom types and atoms
  ntypat   3 
  znucl 12 14 8
  natom 40
  typat 8*1 8*2 24*3          

# xred  COPY RELAXED RESULT FROM PREVIOUS CALCULATION
# Here is a set of default values, for automatic testing : suppress it and fill the previous line
      xred   -4.1633363423E-17  9.9567025045E-02  7.5000000000E-01
             -4.1633363423E-17  9.0043297495E-01  2.5000000000E-01
              5.0000000000E-01  4.0043297495E-01  2.5000000000E-01
              5.0000000000E-01  5.9956702505E-01  7.5000000000E-01
             -4.1633363423E-17  2.5960568214E-01  2.5000000000E-01
             -4.1633363423E-17  7.4039431786E-01  7.5000000000E-01
              5.0000000000E-01  2.4039431786E-01  7.5000000000E-01
              5.0000000000E-01  7.5960568214E-01  2.5000000000E-01
              2.9271480472E-01  9.0340937760E-02  6.2883150262E-02
              7.0728519528E-01  9.0965906224E-01  9.3711684974E-01
              2.0728519528E-01  4.0965906224E-01  5.6288315026E-01
              7.9271480472E-01  5.9034093776E-01  4.3711684974E-01
              7.0728519528E-01  9.0340937760E-02  4.3711684974E-01
              2.9271480472E-01  9.0965906224E-01  5.6288315026E-01
              7.9271480472E-01  4.0965906224E-01  9.3711684974E-01
              2.0728519528E-01  5.9034093776E-01  6.2883150262E-02
              1.1798594137E-01  9.3523090107E-02  7.6308718419E-02
              8.8201405863E-01  9.0647690989E-01  9.2369128158E-01
              3.8201405863E-01  4.0647690989E-01  5.7630871842E-01
              6.1798594137E-01  5.9352309011E-01  4.2369128158E-01
              8.8201405863E-01  9.3523090107E-02  4.2369128158E-01
              1.1798594137E-01  9.0647690989E-01  5.7630871842E-01
              6.1798594137E-01  4.0647690989E-01  9.2369128158E-01
              3.8201405863E-01  5.9352309011E-01  7.6308718419E-02
              3.7899813350E-01  2.4650782594E-01  6.7127119897E-02
              6.2100186650E-01  7.5349217406E-01  9.3287288010E-01
              1.2100186650E-01  2.5349217406E-01  5.6712711990E-01
              8.7899813350E-01  7.4650782594E-01  4.3287288010E-01
              6.2100186650E-01  2.4650782594E-01  4.3287288010E-01
              3.7899813350E-01  7.5349217406E-01  5.6712711990E-01
              8.7899813350E-01  2.5349217406E-01  9.3287288010E-01
              1.2100186650E-01  7.4650782594E-01  6.7127119897E-02
              3.4894876019E-01  9.7384486385E-01  2.8492964774E-01
              6.5105123981E-01  2.6155136152E-02  7.1507035226E-01
              1.5105123981E-01  5.2615513615E-01  7.8492964774E-01
              8.4894876019E-01  4.7384486385E-01  2.1507035226E-01
              6.5105123981E-01  9.7384486385E-01  2.1507035226E-01
              3.4894876019E-01  2.6155136152E-02  7.8492964774E-01
              8.4894876019E-01  5.2615513615E-01  7.1507035226E-01
              1.5105123981E-01  4.7384486385E-01  2.8492964774E-01

#Gives the number of bands, explicitely (do not take the default)
  nband   96              # For an insulator (if described correctly as an 
                         # insulator by DFT), conduction bands should not
                         # be included in response-function calculations

#Definition of the plane wave basis set
   ecut   30.0            # Maximum kinetic energy cutoff (Hartree)
 ecutsm   0.5            # Smoothing energy needed for lattice paramete
                         # optimization.  This will be retained for
                         # consistency throughout.

#Definition of the k-point grids
 kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
  nshiftk 1
  shiftk  0.0 0.0 0.0
  ngkpt  4 4 4 
  
  enunit 1

#Definition of the self-consistency procedure
   iscf   3              # Use conjugate-gradient SCF cycle
  nstep   5000             # Maxiumum number of SCF iterations
