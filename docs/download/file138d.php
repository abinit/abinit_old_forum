#####################################################################
# CuBO2:Computation of the band structure                           #
#####################################################################

     ndtset 2

#####################################################################
#Dataset 1 : usual self-consistent calculation                      #
#####################################################################

     kptopt1     1         
    nshiftk1     4
     shiftk1     0.5 0.5 0.5  
                 0.5 0.0 0.0
                 0.0 0.5 0.0
                 0.0 0.0 0.5
      ngkpt1     4 4 4  
     prtden1     1         
     toldfe1     1.0d-6 

####################################################################
#Dataset 2 : the band structure                                    #
####################################################################

      iscf2     -2
    getden2     -1
    kptopt2     -4
     nband2     35
     ndivk2     30 30 30 30 30
 kptbounds2     0.0 0.0 0.0  #G
                0.5 -0.5 0.0 #F
                1.0 0.0 0.5  #L
                0.5 0.5 0.5  #Z
                0.0 0.0 0.0  #G
    tolwfr2     1.0d-12
    enunit2     1    
 
####################################################################
#COMMON INPUT FILES                                                #
####################################################################

     acell      1.0648897989E+01  1.0648897989E+01  1.0648897989E+01
     rprim      2.5509751948E-01  0.0000000000E+00  9.6691533009E-01
               -1.2754875974E-01  2.2092093231E-01  9.6691533009E-01
               -1.2754875974E-01 -2.2092093231E-01  9.6691533009E-01
    brvltt      -1
    ntypat      3 
     znucl      29 5 8
     natom      4
     typat      1 2 3 3
      xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                1.1384398348E-01  1.1384398348E-01  1.1384398348E-01
                8.8615601652E-01  8.8615601652E-01  8.8615601652E-01
      ecut      100
    kptopt      1  
     ngkpt      4 4 4
   nshiftk      1
    shiftk      0.5 0.5 0.5  
     nstep      1000        
    toldfe      1.0d-6 
########################################################################
