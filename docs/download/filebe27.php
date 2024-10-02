# InAs
 acell 4.2278 4.2278 4.2278 Angstr
            rprim      1.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       5.0000000000E-01  2.8867513459E-01  8.1649658093E-01
 chkprim 0
 chksymbreak 0
 ecut 300 eV
 ecutsm 13.6057 eV
 ionmov 0
 nkpt 0
 kptopt 1
 ngkpt 4 4 4
 nshiftk 1
 shiftk 0.000000 0.000000 0.000000
 nstep 50
 ixc 1
 nband  8
 nsppol 1
 natom 2
 natrd 2
 ntypat 2
 occopt 1
 diemac 1e+06
 typat 1 2
             xred     -1.6524475508E-30 -1.5709729968E-31  3.9332843003E-31
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
 znucl 49 33

 # GW
 ndtset 4
 istwfk *1
 gwcalctyp 6

 # ground state
 toldfe1 0.000001 Hartree
 nshiftk1 4
 shiftk1 0.500000 0.500000 0.500000
         0.500000 0.000000 0.000000
         0.000000 0.500000 0.000000
         0.000000 0.000000 0.500000
 istwfk1 *0
 prtden1 1

 # kss file
 tolwfr2 1.0d-10
 iscf2     -2
 getden2   -1
 nband2     8
 nbandkss2  -1
 
 # screening matrix
 optdriver3  3
 getkss     -1
 nband3      100
 ecutwfn3    4.0
 ecuteps3    5.0
 ppmfrq3     16.7 eV
 
 # self-energy matrix elements
 optdriver4  4
 getkss4    -2
 getscr4    -1
 nband4      100
 ecutwfn4    5.0
 ecutsigx4   5.0
 nkptgw4     1
 kptgw4
             0.000    0.000    0.000    # (G)
 bdgw4       4 5 
