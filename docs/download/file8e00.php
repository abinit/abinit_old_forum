
   ndtset 5

#Definition of the elementary cell
#*********************************
acell 3*1.0
rprim
   5.35235062146617  -5.34022027938491   0.00000000000000
   5.35235062146617   5.34022027938491   0.00000000000000
   0.02423319246599   0.00000000000000   7.56075542256500

xred
   0.00000000000000   0.00000000000000   0.00000000000000
   0.51137441996000   0.51137441996000   0.51137441996000   
   0.48941502736000   0.98324994518700   0.48941502736000    
   0.48941502736000   0.48941502736000   0.98324994518700   
   0.98324994518700   0.48941502736000   0.48941502736000


#Definition of the atoms
#***********************
   nband 30 
   natom 5
   ntypat 3
   znucl 56 22 8
   typat 1 2 3 3 3

#Parallelization
#****************
   paral_kgb1 1   npkpt1 10 npband1 1 npfft1 2

#Definition of the SCF procedure
#*******************************
   nstep 300
   fftalg 401
   diemac 100000.0

#Definition of the plane wave basis set
#**************************************
   ecut 32
   pawecutdg 80
   kptrlen 50
   nshiftk 1
   shiftk 0.5 0.5 0.5
   usexcnhat 1

   enunit 1

#Ground state calculation
   kptopt1   1
   tolvrs 1.0d-18

#Band Structure, path 1
   getden2 1
   getwfk2 1
   iscf2 -2
   kptopt2 -2
   kptbounds2   0.0               0.0              0.0                # gamma
                0.5               0.0              0.0                # L
                0.5               0.4977413235    -0.4977413235       # B1
   ndivsm2 10
   tolwfr2 1.0d-22
   

#Band Structure, path 2
   getden3 1
   getwfk3 1
   iscf3 -2
   kptopt3 -3
   kptbounds3   0.5022586765      0.5              0.4977413235       # B
                0.5               0.5              0.5                # Z
                0.0               0.0              0.0                # gamma
                0.4988706617      0.0             -0.4988706617       # X
   ndivsm3 10
   tolwfr3 1.0d-22

#Band Structure, path 3
   getden4 1
   getwfk4 1
   iscf4 -2
   kptopt4 -3
   kptbounds4   0.5011293383      0.4988706617     0.0               # Q
                0.5               0.5              0.0               # F
                0.5011293383      0.5011293383     0.4977413235      # P1
                0.5               0.5              0.5               # Z
   ndivsm4 10
   tolwfr4 1.0d-22

#Band Structure, path 4
   getden5 1
   getwfk5 1
   iscf5 -2
   kptopt5 -1
   kptbounds5   0.5              0.0              0.0                # L
                0.5022586765     0.4988706617     0.4988706617       # P
   ndivsm5 10
   tolwfr5 1.0d-22

# add to conserve old < 6.7.2 behavior for calculating forces at each SCF step
 optforces 1


# high symmetry point
# gamma	0	0	0
# B	0.5022586765	0.5	0.4977413235
# B1	0.5	0.4977413235	-0.4977413235
# F	0.5	0.5	0
# L	0.5	0	0
# L1	0	0	-0.5
# P	0.5022586765	0.4988706617	0.4988706617
# P1	0.5011293383	0.5011293383	0.4977413235
# P2	0.4988706617	0.4988706617	-0.4977413235
# Q	0.5011293383	0.4988706617	0
# X	0.4988706617	0	-0.4988706617
# Z	0.5	0.5	0.5


