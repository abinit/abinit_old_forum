#CaZrS3   
#Band structure

ndtset   2

#Dataset 1 
ngkpt1   3  3  2
prtden1  1  
toldfe1  1.0d-6 

##############################################################################
#Dataset  2

iscf2    -2        #iscf=-2 would be used for band structure calculations, to permit computation of the eigenvalues of occupied 
                   #and unoccupied states at arbitrary k points in the fixed self consistent potential produced by some integration grid of k points.
                   #Due to this typical use,
                   #ABINIT insist that either prtvol>2 or prteig does not vanish when there are more than 50 k points. 

getden2  -1        #If getden is -1, the output density of the previous dataset must be taken, which is a frequently occurring case. 
fband2   1.5
nbdbuf2   3
kptopt2    -12
ndivk2      20 17 17 15 10 15 13 15  13  10  10  10
kptbounds2  
                 0.00  0.00  0.00    # G  
                 0.50  0.00  0.00    # X
                 0.50  0.50  0.00    # S
                 0.00  0.50  0.00    # Y
                 0.00  0.00  0.00    # G
                 0.00  0.00  0.50    # Z
                 0.50  0.00  0.50    # U
                 0.50  0.50  0.50    # R
                 0.00  0.50  0.50    # T
                 0.00  0.25  0.25    # Z|Y
                 0.25  0.25  0.50    # T|U
                 0.50  0.25  0.00    # X|S
                 0.50  0.50  0.50    # R
                 
tolwfr2  1.0d-12
enunit2  1             

enunit  1
prtvol   3

#Definition of lattice parameters
#********************************
acell      1.2423109510E+01  1.3357200779E+01  1.8213761375E+01 Bohr

rprim    1.000000000000000   0.000000000000000   0.000000000000000 
         0.000000000000000   1.000000000000000   0.000000000000000 
         0.000000000000000   0.000000000000000   1.000000000000000 

natom    20  
ntypat    3  
typat    1 1 1 1 2 2 2 2 3 3 3 3 3 3 3 3 3 3 3 3  
znucl    40 20 16 
xred                  -2.7755575616E-17  5.0000000000E-01  0.0000000000E+00
                      -2.7755575616E-17  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                      -3.3232745964E-02 -9.2394563347E-02  2.5000000000E-01
                       1.0332327460E+00  1.0923945633E+00  7.5000000000E-01
                       5.3323274596E-01  4.0760543665E-01  2.5000000000E-01
                       4.6676725404E-01  5.9239456335E-01  7.5000000000E-01
                       1.8364233140E-01  8.0913603163E-01  5.6368035651E-01
                       8.1635766860E-01  1.9086396837E-01  6.3680356512E-02
                       3.1635766860E-01  3.0913603163E-01  9.3631964349E-01
                       8.1635766860E-01  1.9086396837E-01  4.3631964349E-01
                       3.1635766860E-01  3.0913603163E-01  5.6368035651E-01
                       1.8364233140E-01  8.0913603163E-01  9.3631964349E-01
                       6.8364233140E-01  6.9086396837E-01  6.3680356512E-02
                       6.8364233140E-01  6.9086396837E-01  4.3631964349E-01
                      -1.2444111606E-01  4.6565069485E-01  7.5000000000E-01
                       1.1244411161E+00  5.3434930515E-01  2.5000000000E-01
                       6.2444111606E-01  9.6565069485E-01  7.5000000000E-01
                       3.7555888394E-01  3.4349305154E-02  2.5000000000E-01
ecut    45
diemac  12
nstep   100
chksymbreak  0
             
