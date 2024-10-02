#CaZrS3
#DOS 
ndtset   7
#set1
toldfe1   1.0d-6
prtden1   1

#set2
iscf2    -3         # non-self-consistent   iscf2=-3
getden2   1         # If getden is positive, its value gives the index of the dataset from which the output density is to be used as input. 
getwfk2   1         # If getwfk is positive, its value gives the index of the dataset for which the output wavefunction file appended with _WFK must be used.
prtdos2   2         # It is strongly advised to use a non-shifted k-point grid (shiftk 0 0 0): 
                    # such grids contain naturally more extremal points (band minima and maxima at Gamma or at the zone-boundaries) than shifted grids,
                    # and lead to more non-equivalent points than shifted grids, for the same grid spacing.

                    # printdos=2 for drawing total dos
dosdeltae2   0.003
tolwfr2      1.0d-10

#set3
iscf3     -3
prtdos3    3        # printdos=3 for drawing pdos
getden3    1
getwfk3    1
natsph3    1
iatsph3    1
ratsph3    1.6252  1.6252  1.6252     #Zr
dosdeltae3   0.003
tolwfr3      1.0d-10

#set4
iscf4     -3
getden4    1
getwfk4    1
prtdos4    3
natsph4    1
iatsph4    5
ratsph4    2.1543 2.1543  2.1543      #Ca bohr 
dosdeltae4   0.003
tolwfr4     1.0d-10

#set5
iscf5     -3
getden5    1
getwfk5    1
prtdos5    3
natsph5    1
iatsph5    9
ratsph5    0.9638  0.9638  0.9638    #S
dosdeltae5   0.003
tolwfr5     1.0d-10

#set6
iscf6     -3
getden6    1
getwfk6    1
prtdos6    3
natsph6    1
iatsph6    13
ratsph6    0.9638  0.9638  0.9638    #S
dosdeltae6   0.003
tolwfr6     1.0d-10

#set7
iscf7     -3
prtdos7    3
getden7    1
getwfk7    1
natsph7    1
iatsph7    17
ratsph7    0.9638  0.9638  0.9638    #S
dosdeltae7  0.003
tolwfr7   1.0d-10

##############################
enunit   1
kptopt   1

fband   1.5
nbdbuf   3

ngkpt  3  3  2  
 

acell      1.2423109510E+01  1.3357200779E+01  1.8213761375E+01 Bohr

rprim  1.00000000  0.00000000  0.00000000
       0.00000000  1.00000000  0.00000000
       0.00000000  0.00000000  1.00000000

natom    20  
ntypat   3  
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
diemac  12.0
nstep   100
chksymbreak  0

