
ecut   12

pawecutdg 24

# ion relaxation without change the acell and rprim

ionmov  3              # Use the modified Broyden algorithm
ntime   20             # Maximum number of Broyden "timesteps"
tolmxf  1.0d-5         # Stopping criterion for the geometry optimization : when 
                       # the residual forces are less than tolmxf, the Broyden 
                       # algorithm can stop




nstep   500
tolvrs   1.0d-6
occopt   4
tsmear   0.01
iprcel 45

nband 48

chkprim 0
acell 3*6.833 

angdeg 90.0000 90.0000 90.0000
  
  ntypat  2 
  znucl   28 29
  natom   4
  typat   1 1 1 2
   xred   
0.00000   0.00000   0.00000   
0.00000   0.50000   0.50000   
0.50000   0.00000   0.50000  
0.50000   0.50000   0.00000
  
nsppol  2
  spinat  
 0. 0. 1.
 0. 0. 1.
 0. 0. 1.
 0. 0. 1.
  
ngkpt 10 10 10
nshiftk   4
 shiftk   1/2 1/2 1/2
          1/2 0.0 0.0
          0.0 1/2 0.0
          0.0 0.0 1/2
 
 getwfk -1
 prteig 0 prtden 0
 optforces 2





