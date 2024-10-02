#*********************************************************************************************************
# 
#*********************************************************************************************************

ndtset 4 

#*********************************************************************************************************
# Data set 1: Atomic relaxation
#*********************************************************************************************************
ionmov1  2        # use BFGS algo
ntime1   200      # max nb of relaxation cycles
tolmxf1  1.0d-4   # criterion for relation based on the maximum force

kptopt1  1             # Option for the automatic generation of k points, taking into account the symmetry
tolvrs1  1.0d-18     # SCF stoping criterion (strict)

#*********************************************************************************************************
# Data set 2: Cell relaxation
#*********************************************************************************************************
getxred2 1         # Get reduced coordinates from the previous dataset
getwfk2  1         # Get wavefunction from the previous dataset
  
ionmov2     2
optcell2    2       # cell relaxation 2 : full cell relaxation
dilatmx2    2.0
ecutsm2     2.0 
strprecon2  0.05
tolmxf2     1.0d-4   # criterion for relation based on the maximum force
ntime2      200      # max nb of relaxation cycles
kptopt2   1              # Option for the automatic generation of k points, taking into account the symmetry
tolvrs2  1.0d-18     # SCF stoping criterion (strict)
#*********************************************************************************************************
# Data set 3 : ddk calculation   (needed for polar solids)
#*********************************************************************************************************

  getcell3  2
  getxred3  2            # Get reduced coordinates from the previous dataset
  getwfk3   2            # Uses as input wfs the output wfs of the dataset 1
  
  rfelfd3   2             # Activate the calculation of the d/dk perturbation
   rfdir3   1 1 1         # Need to consider the perturbation in the x-direction only
                          # This is rather specific, due to the high symmetry of the AlAs crystal
                          # In general, just use rfdir 1 1 1
                          # In the present version of ABINIT (v4.6), symmetry cannot be used
                          # to reduce the number of ddk perturbations

    nqpt3   1
     qpt3   0.0 0.0 0.0   # This is a calculation at the Gamma point

  kptopt3   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.

    iscf3  -3             # The d/dk perturbation must be treated 
                          # in a non-self-consistent way
  tolwfr3   1.0d-22       # Must use tolwfr for non-self-consistent calculations
                          # Here, the value of tolwfr is very low.


#*********************************************************************************************************
# Data set 4 : calcul des réponses : Rep2strain / Rep2phon / Rep2ElecField
#*********************************************************************************************************

  getcell4  2
  getxred4  2            # Get reduced coordinates from the previous dataset
  getwfk4   2            # Uses as input wfs the output wfs of the dataset 1
  getddk4   3            # Uses as input ddk wfs the output of the dataset 2

  
  rfstrs4   3
  rfphon4   1             # Activate the calculation of the atomic dispacement perturbations
  rfelfd4   3             # Activate the calculation of the electric field perturbation
  
 rfatpol4   1 3          # All the atoms will be displaced
 rfdir4     1 1 1         # All directions are selected. However, symmetries will be used to decrease
                          # the number of perturbations, so only the x electric field is needed
                          # (and this explains why in the second dataset, rfdir was set to 1 0 0).

    nqpt4   1
     qpt4   0.0 0.0 0.0   # This is a calculation at the Gamma point

  kptopt4   2             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.
  tolvrs4   1.0d-18

#*********************************************************************************************************
# Common Variables
#*********************************************************************************************************

##################################
#Definition of the unit cell
##################################
acell     6.66      6.66     6.66 angstrom 

rprim    0.0  0.5  0.5   
         0.5  0.0  0.5    
         0.5  0.5  0.0 
##################################
#Definition of the atom types
##################################
ntypat 2          # nb of species
znucl  48 52      # Atomic nb for all species 

natom 3                      # There are two atoms in the unitcell
typat 1 1 2   # thefirst atom is Ga (1) and the second one is N (2).


xred         0.25  0.25  0.25           
            -0.25 -0.25 -0.25            
             0.0  0.0  0.0 

######################################
#Definition of the planewave basis set
######################################
ecut  70     # Maximal kinetic energy cut-off
#nband  18
###################################
#Definition of the k-point grid
###################################

kptrlatt -6  6  6    # In cartesian coordinates, this grid is simple cubic, and
          6 -6  6      # actually corresponds to the so-called 8x8x8 Monkhorst-Pack grid.
          6  6 -6 

#nshiftk 1             # nb of shifted k-grids
#shiftk  0.5 0.5 0.5   # Shift of the k-grid

################################
#Definition XC
################################
ixc 11             # XC = PBE

#intxc 1            # improved interpolation scheme for XC


################################
#Definition of the SCF procedure
################################

nstep 500         # Maximal number of SCF cycles

diemac 12.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.





