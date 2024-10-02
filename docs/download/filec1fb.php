#GW Convergence of Sigma on Ecutwfn
# Calculating the Screening for C4F from the C4F_GW_Fuller.in run KSS
# With a 1000band KSS file, 24 kpts in ibz, 25 Ha cutoff.  Highest Band Energy
# In KSS file is only ~5.9Ha
#
#chkprim 0

ndtset 2

####################   DATASET #1  ######################
icutcoul 2
vcutgeo 1 1 0
rcut 9.5
optdriver1  3  #Screening Calc
getkss1 1
nband1 200
#gwcalctyp1 22
ecuteps1 3.0
ecutwfn1 3.0 

nfreqim1 4
nfreqre1 10
freqremax1 1.
awtr1 1

######################Dataset #2
getkss2 1 
getscr2 1
optdriver2 4
nband2 200

ecutsigx2 3.0
ecutwfn2  4.0 #ecutwfn+ 1.0
#ecuteps 3.0
#gwcalctyp 22
nkptgw2 2
kptgw2 0.0 0.0 0.0
0.5 0.0 0.0
bdgw2 22 26
      22 26
nfreqsp2 100
freqspmax2 1.0 


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
#nband 35

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

gw_toldfeig 1.0d-5
gw_sctype 4
ixc 1
timopt 2

istwfk  24*1
