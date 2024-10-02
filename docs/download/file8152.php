#GST Ge2Sb2Te5 te-ge-te-sb-te-te-sb-te-ge-te-
acell  3.268 5.233 25.433 Angstrom   

ecut 15
 #rprim 1 0 0 0 1 0 0 0 1    # is doubled with respect to previous run.
  
angdeg 90 90 90
ndtset 2 
 chkprim  0
 chksymbreak 0        

ntypat 2
znucl 30 8          
#Definition of the atoms
natom 16
typat 8*1 8*2
natfix 8
iatfix 1 2 3 4 9 10 11 12           
xred             
            
      0.816999999999999      1.635312500000000      8.943012983719909
      2.451000000000000      4.251812500000000      8.000000000000002
      2.451000000000000      1.635312500000000     11.773184003287454
      0.817000000000000      4.251812500000000     10.830171019567548
      0.817000000000001      1.635312500000000     14.603355022855000
      2.451000000000000      4.251812500000000     13.660342039135093
      2.451000000000001      1.635312500000000     17.433526042422542
      0.817000000000001      4.251812500000000     16.490513058702639
       0.817000000000000      3.597687499999999      8.943012983719909
       2.450999999999999      0.981187500000000      8.000000000000002
       2.451000000000000      3.597687500000000     11.773184003287454
       0.816999999999999      0.981187500000000     10.830171019567548
       0.817000000000001      3.597687500000001     14.603355022855000
       2.451000000000000      0.981187500000000     13.660342039135093
       2.451000000000001      3.597687500000001     17.433526042422542
       0.817000000000001      0.981187500000000     16.490513058702639       

#dataset 1
#Definition of the atomic positions without relaxing the lattice parameters
optcell1 0
ionmov1 2
#getwfk -1
#Definition of the basis of the geometry determined by dataset 1 (so using getxcart 1)
getxcart2 -1
optcell2 2
ionmov2 2
dilatmx2 1.1
ecutsm2 0.5 


tolmxf 5.0d-5        # Stopping criterion for the geometry optimization : when 
                         # the residual forces are less than tolmxf, the Broyden 

#prtwf 0                         # algorithm can stop
toldfe 5.0d-7        # Will stop the SCF cycle when, twice in a row, 
prtcif 1
                         
ntime 1000 
optforces 1       
#Definition of the SCF procedure
nstep 1000       # Maximal number of SCF cycles

#defination of k -point grid
ngkpt 5 5 1
shiftk 0 0 0.5

