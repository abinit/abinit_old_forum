#GW Calculation for LDA Geometry of C4F
#Previous Datasets
#Dataset 1: Ground state calculation & KSS file formation for  24 kpts in ibz
#Dataset 2: NonSelfconsistent Run  to get all cg wavefunctions 
#Current Datasets
#Dataset 1: Calculate Screening matrix using gwpara1
#and monitoring memory usage over 24 procs
#Using 24 processors, 3 nodes, infiniband interconnects
# 48GB/node.  How much memory is used over time
#ndtset 4


###################  GW Common Options ########################
icutcoul 2
vcutgeo 1 1 0
rcut 9.5
gw_nqlwl 1
gw_qlwl 0.00001 0.00001 0.00000
gwcalctyp 22
####DATASET #1##########
gwpara 1
optdriver 3
getkss 1
nband 150
ecuteps 4
ecutwfn 13
nfreqim 4
nfreqre 10
freqremax 1.0
awtr 1



nkptgw 24
kptgw 0.0 0.0 0.0
0.0714285714 0 0
0.142857143 0 0
0.214285714 0 0
0.285714286 0 0
0.357142856 0 0
0.428571429 0 0
0.5 0 0
0.142857143 0.0714285714 0
0.214285714 0.0714285714 0
0.285714286 0.0714285714 0
0.357142856 0.0714285714 0
0.428571429 0.0714285714 0
0.5 0.0714285714 0
0.285714286 0.142857143 0
0.357142856 0.142857143 0
0.428571429 0.142857143 0
0.5 0.142857143 0
-0.428571429 0.142857143 0
0.428571429 0.214285714 0
0.5 0.214285714 0
-0.428571429 0.214285714 0
-0.428571429 0.285714286 0
-0.357142857 0.285714286 0
bdgw 1 30
      1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30
1 30

 


acell 2.683410904/0.25 2.683410904/0.25 19
rprim 1.7320508075688772935274463415059/4 0.75 0
      -1.7320508075688772935274463415059/4 0.75 0
       0 0 1
nstep 50

ntypat 2
znucl 6 9
nshiftk 1
shiftk  0.0 0.0 0.0
natom 10
typat 1 1 1 1 1 1 1 1 2 2


             xred    1.6312910445E-01  1.6312910445E-01 -1.2811613600E-02
                     3.3333333333E-01  3.3333333333E-01  2.1607028423E-02
                     6.7374179109E-01  1.6312910445E-01 -1.2811613600E-02
                     1.6312910445E-01  6.7374179109E-01 -1.2811613600E-02   
                     8.3687089555E-01  3.2625820891E-01 -1.2811613600E-02
                     3.2625820891E-01  8.3687089555E-01 -1.2811613600E-02
                     6.6666666667E-01  6.6666666667E-01  2.1607028423E-02
                     8.3687089555E-01  8.3687089555E-01 -1.2811613600E-02
                     3.3333333333E-01  3.3333333333E-01  1.6547210258E-01
                     6.6666666667E-01  6.6666666667E-01  1.6547210258E-01
ecut 25

ngkpt 14 14 1

timopt 2

istwfk  24*1
