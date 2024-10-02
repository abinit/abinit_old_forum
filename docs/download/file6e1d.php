# HfS2 bulk PAWLDA SO 

prtden 0
prteig 0
#pawspnorb 1

ndtset  3

#Ground state calculation
  kptopt1   4             # Automatic generation of k points, taking
                          # into account the symmetry
  tolvrs1   1.0d-18       # SCF stopping criterion

#Response Function calculation : d/dk
  rfelfd2   2             # Activate the calculation of the d/dk perturbation
   rfdir2   1 1 1         # Need to consider the perturbation in the x-direction only
                          # This is rather specific, due to the high symmetry of the AlAs crystal
                          # In general, just use rfdir 1 1 1
                          # In the present version of ABINIT (v4.6), symmetry cannot be used
                          # to reduce the number of ddk perturbations

    nqpt2   1
     qpt2   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk2   -1            # Uses as input the output wf of the previous dataset

  kptopt2   4             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.

    iscf2  -3             # The d/dk perturbation must be treated 
                          # in a non-self-consistent way
  tolwfr2   1.0d-22       # Must use tolwfr for non-self-consistent calculations
                          # Here, the value of tolwfr is very low.

#Response Function calculation : electric field perturbation and phonons
  rfphon3   1             # Activate the calculation of the atomic dispacement perturbations
 rfatpol3   1 3           # All the atoms will be displaced
  rfelfd3   3             # Activate the calculation of the electric field perturbation
   rfdir3   1 1 1         # All directions are selected. However, symmetries will be used to decrease
                          # the number of perturbations, so only the x electric field is needed
                          # (and this explains why in the second dataset, rfdir was set to 1 0 0).

    nqpt3   1
     qpt3   0.0 0.0 0.0   # This is a calculation at the Gamma point

  getwfk3   -2            # Uses as input wfs the output wfs of the dataset 1
  getddk3   -1            # Uses as input ddk wfs the output of the dataset 2

  kptopt3   4             # Automatic generation of k points,
                          # using only the time-reversal symmetry to decrease
                          # the size of the k point set.
  tolvrs3   1.0d-18


# initial structure---------------------------------------------------------

acell 6.7188483702E+00  6.7188483702E+00  1.0733248998E+01 
angdeg 90 90 120

rprim
1.0  0.0  0.0
-0.5 0.8660254037844386467637231707  0.0
0.0 0.0 1.0

ntypat 2          
znucl 72 16           
                  
natom 3          
typat 1 2 2

xred     -1.4459833242E-30 -3.4127342373E-30  2.4009152495E-18
                       6.6666666667E-01  3.3333333333E-01  2.5398659065E-01
                       3.3333333333E-01  6.6666666667E-01  7.4601340935E-01

# base and t-----------------------------------------------------

ecut 30.0
pawecutdg 70.0
ecutsm 0.5            
ngkpt 12 12 6 
nshiftk 1         
shiftk      0.0 0.0 0.5

# electronic relaxation-----------------------------------------------------

nstep 500     
diemac 12 
nband 50
nbdbuf 4
occopt 7
tsmear 1.0d-4

 



