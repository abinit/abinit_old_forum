# Crystalline CuIn(0.8)Ga(0.2)Se2 : computation of the total energy
#CuSeIn(0.8)Ga(0.2)

npsp 4
znucl 29.00000 34.0000  49.00000 31.0000  
ntypat 3
ntypalch 1
mixalch 0.8 0.2
natom 16
typat 1 1 1 1 2 2 2 2 2 2 2 2 3 3 3 3  
xred  

 -2.6014654363E-17  -5.2095554017E-18  -3.4644072121E-17
  5.0000000000E-01   5.0000000000E-01   5.0000000000E-01
 -2.6016045047E-17   5.0000000000E-01   2.5000000000E-01
  5.0000000000E-01  -5.2109460853E-18   7.5000000000E-01
  2.1986118754E-01   2.4963914395E-01   1.2512514634E-01
  7.1986118754E-01   7.4963914395E-01   6.2512514634E-01
  2.4963914395E-01   7.8013881246E-01   8.7487485366E-01
  7.4963914395E-01   2.8013881246E-01   3.7487485366E-01
  7.8013881246E-01   7.5036085605E-01   1.2512514634E-01
  2.8013881246E-01   2.5036085605E-01   6.2512514634E-01
  7.5036085605E-01   2.1986118754E-01   8.7487485366E-01
  2.5036085605E-01   7.1986118754E-01   3.7487485366E-01
 -2.6020064062E-17  -5.2149651002E-18   5.0000000000E-01
  5.0000000000E-01   5.0000000000E-01  -3.4644072121E-17
 -2.6020064062E-17   5.0000000000E-01   7.5000000000E-01
  5.0000000000E-01  -5.2149651002E-18   2.5000000000E-01



 ecut 15
mkmem  0
#Definition of the k-point grids
kptopt 1          # Option for the automatic generation of k points, taking
                  # into account the symmetry
nshiftk 1
shiftk  0.00000000E+00  0.00000000E+00  5.00000000E-01


 
#getwfk -1         # This is to speed up the calculation, by restarting
                  # from previous wavefunctions, transferred from the old 
                  # to the new k-points.
acell 1.1207145485E+01  1.1207145485E+01  2.2296825803E+01     
         
chkprim 0              

# Definition of the different grids
ngkpt 2 2 2         

#Definition of the SCF procedure
nstep 300          # Maximal number of SCF cycles
toldfe 1.0d-8     # Will stop when, twice in a row, the difference 
                  # between two consecutive evaluations of total energy 
                  # differ by less than toldfe (in Hartree) 
                  # This value is way too large for most realistic studies of materials
diemac 9.0       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
