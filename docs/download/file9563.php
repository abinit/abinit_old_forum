# band SrWO4

#Definition of lattice parameters
#********************************
   acell    9.9418815105E+00  9.9418815105E+00  2.1567449396E+01

spgroup   88
spgaxor   1
spgorig   1
chkprim   0
brvltt   -1

#Definition of atomic positions and types
#*************************************
####################################################################

znucl  8.0 74.0   38.0  
ntypat  3

######################################################################

   natom       12
   natrd       3
   typat       1 2 3
    xred       2.4069433895E-01  1.5280381560E-01  8.6819084306E-02
               4.7019774033E-38  0.0000000000E+00  0.0000000000E+00
               0.0000000000E+00 -2.3509887016E-38  5.0000000000E-01
                
                
   ixc         3

#Parameters of the SCF cycles
#****************************
   
   nstep       100


#Plane wave basis and k-point grid
#*********************************
   ecut        100
  
   ngkpt       3 3 2
   fband       1.5

ndtset 2     jdtset 1 2 

#DATASET1 : 
#********************************************
   prtden1    1
   kptopt1    1
   toldfe1    1.0d-10
   iscf1      7 
#DATASET2 : 
#*****************************************************
      
   enunit2    1
   prtvol2    3
   iscf2     -2
   getwfk2    1
   getden2    1
   tolwfr2    1.0d-16
   
   kptopt2    -5
ndivk2      14 20 7 16 13 
kptbounds2      
                 0.50  0.50 -0.50    # Z  
                 0.00  0.00  0.00    # G
                 0.00  0.00  0.50    # X
                 0.25  0.25  0.25    # P
                 0.00  0.00  0.00    # G
                 0.00  0.50  0.00    # N 

diemac  12               
nbdbuf 1
Chksymbreak 0
