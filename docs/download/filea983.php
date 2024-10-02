#Ce - rocksalt (cubic) structure
#Response function calculation for:
#    * rigid-atom elastic tensor
#    * rigid-atom piezoelectric tensor
#    * interatomic force constants at gamma


ndtset   3

# Set 1 : Initial self-consistent run
  iscf1   7
kptopt1   1
tolvrs1   1.0d-18  #need excellent convergence of GS quantities for RF runs


# Set 2 : Calculate the ddk wf's - needed for piezoelectric tensor and

getwfk2  -1
  iscf2  -3        #this option is needed for ddk
kptopt2   2        #use time-reversal symmetry only for k points
  nqpt2   1        #one wave vector will be specified
   qpt2   0 0 0    #need to specify gamma point
rfelfd2   2        #set for GS ddk wf's only
 rfdir2   1 1 1    #full set of directions needed
tolwfr2   1.0d-20  #only wf convergence can be monitored here

# Set 3 : response-function calculations for all needed perturbations

 getddk3  -1
 getwfk3  -2
   iscf3   7
 kptopt3   2        #use time-reversal symmetry only for k points
   nqpt3   1
    qpt3   0 0 0
 rfphon3   1        #do atomic displacement perturbation
rfatpol3   1 1      #do for all atoms
 rfstrs3   3        #do strain perturbation
  rfdir3   1 1 1
 tolvrs3   1.0d-14  #need reasonable convergence of 1st-order quantities

# Common input data
# pressures 0.4, 0.5, 0.6 GPa
# acell...taken from the struct. relax. calc.

  acell    3*10.099949274
#  acell2?    3*10.085831838
#  acell3?    3*10.071910934

# xred...taken from the struct. relax. calc.
# fixed due to symmetry

   xred    0.00  0.00  0.00
# Space group info

 angdeg    90 90 90
spgroup    225
 brvltt   -1

#Definition of the atoms and bands
#*********************************
   natom   1
   ntypat  1
   znucl   58
   typat   1
   nband   8
   occopt  4
   tsmear  0.005

#Definition of the plane wave basis and k-point mesh
#***************************************************

   ecutsm   0.5
   dilatmx  1.2
   ecut     60
   ngkpt    3*8
   nshiftk  4
   shiftk   0.5 0.5 0.5
            0.5 0.0 0.0
            0.0 0.5 0.0
            0.0 0.0 0.5

#Definition of the self-consistency procedure
#    iscf    7              # Use Pulay mixing sheme for SCF cycle
npulayit    16             # Number of Pulay iterations
  nnsclo    10             # Number of non-self consistent loops
   nline    12             # Number of line minimisations
   nstep    100            # Maxiumum number of SCF iterations

#Definiton of the xc approximation
     ixc    1

  timopt    2
