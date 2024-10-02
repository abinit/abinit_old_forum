#File: nanosi-band011.in
#Written by: Chris Twombly
#ctwombly@mymail.mines.edu
#Description: calculates the
#relaxed structure of a 1 nm diameter
#by 0.54 nm height silicon nanowire
#using the GGA approximation of Perdew
#Berke and Ernzerhof (ixc 11). diemac is
#set to 12 (same as bulk silicon) as a
#preconditioner. optimizes acell, and computes
#the band structure for the Boltztrap output


ndtset 2

kptopt1 1                    
chkprim1 0
chksymbreak1 0
ngkpt1 4 4 24
nband1 38
prtden1 1
toldfe1 1.0d-10
tsmear 0.01

ngkpt2 4 4 24
iscf2    -2
getden2  -1
kptopt2  -1
chksymbreak2 0
chkprim2 0
nband2 91
ndivk2 1000
kptbounds2 0.0  0.0  0.0
           0.0  0.0  1/2
tolwfr2  1.0d-12
enunit2  1 
prtbltztrp2 1
prtwf2 0

#optimized cell characteristics
ixc 11 #GGA of Perdew, Berke, and Ernzerhof
diemac 12.0
ecut 18
nstep 200
optforces 1
ngkpt 4 4 24
chkprim 0
#cell definition

acell 22 22 7.255776
rprim 1.0 0.0 0.0
      0.0 1.0 0.0
      0.0 0.0 1.0
natom 28 
ntypat 2
znucl 1 14
typat 1 1 1 1 1 2 2 2 2 2 2 2 2 1 1 2 2 1 2 2 1 2 2 2 1 1 2 1
xcart
0.0000000  10.613401  5.939895
13.530889  20.181184  3.627888
13.530889  1.0456180  3.627888
2.5653050  16.553296  3.627888
2.5653050  4.6735060  3.627888
11.896053  17.869177  3.627888
11.896053  10.613401  3.627888
14.461357  14.241289  3.627888
11.896053  3.3576250  3.627888
14.461357  6.9855130  3.627888
1.6348360  10.613401  3.627888
4.2001400  14.241289  3.627888
4.2001400  6.9855130  3.627888
21.226802  10.613401  2.312007
0.0000000  10.613401  1.315881
6.7654450  14.241289  0
9.3307490  17.869177  0
18.661497  4.6735060  0
6.7654450  6.9855130  0
9.3307490  10.613401  0
7.6959130  1.0456180  0
17.026662  6.9855130  0
9.3307490  3.3576250  0
19.591966  10.613401  0
18.661497  16.553296  0
7.6959130  20.181184  0
17.026662  14.241289  0
21.226802  10.613401  -2.312007
