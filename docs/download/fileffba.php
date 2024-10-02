

ndtset 2

wfoptalg 1
nbdblock 12

#Dataset 1 : usual self-consistent calculation
kptopt1 1          
nshiftk1 1
shiftk1  0.0 0.0 0.5  
ngkpt1  4 4 3  
prtden1  1         
toldfe1  1.0d-6

#Dataset 2 : the band structure
iscf2    -2
getden2  -1
kptopt2  -7
nband2   42
tolwfr2  1.0d-12
enunit2  1             
ndivsm2 10
kptbounds2    0 0 0 # Gamma point
              1/3 1/3 0 # K point
              1/3 1/3 1/2 # H point
              0 0 1/2 # A point
              0 0 0 # Gamma point
              1/2 0 0 # M point
              1/2 0 1/2 # L point
              0 0 1/2 # A point

#Definition of the unit cell
acell 8.9693 8.9693 12.4458         
rprim  0.866 -0.5  0.0   
        0.0  1.0  0.0
        0.0  0.0  1.0

#Definition of the atom types
ntypat 2          
znucl 6 7          
                         

#Definition of the atoms
natom 14           
typat 1 1 1 1 1 1 2 2 2 2 2 2 2 2       
xred                 1.8790529977E-02  5.0939526499E-01  5.0000000000E-01
                    -5.0939444598E-01 -4.9060202468E-01  5.0000000000E-01
                     4.9060555402E-01 -1.8792421297E-02  5.0000000000E-01
                     3.5108429333E-01  1.7554214666E-01 -5.5511151231E-17
                    -1.7554132351E-01  1.7554479150E-01 -5.5511151231E-17
                    -1.7554132351E-01 -3.5108611500E-01 -5.5511151231E-17
                    -2.4008016527E-07 -1.2004008263E-07 -5.5511151231E-17
                     6.6666643936E-01  3.3333321968E-01  5.0000000000E-01
                     1.6986324577E-01  3.3973095907E-01  5.0000000000E-01
                    -3.3972793529E-01 -1.6986396765E-01  5.0000000000E-01
                     1.6986324577E-01 -1.6986771330E-01  5.0000000000E-01
                     5.0311082034E-01  4.9688476652E-01 -5.5511151231E-17
                    -4.9688917966E-01  6.2260538176E-03 -5.5511151231E-17
                    -6.2230138740E-03 -5.0311150694E-01 -5.5511151231E-17


#Definition of the planewave basis set
ecut 30.0         # Maximal kinetic energy cut-off, in Hartree

#Definition of the SCF procedure
nstep 40
diemac 5.25       # Although this is not mandatory, it is worth to
                  # precondition the SCF cycle. The model dielectric
                  # function used as the standard preconditioner
                  # is described in the "dielng" input variable section.
                  # Here, we follow the prescription for bulk silicon.
#iscf 7
