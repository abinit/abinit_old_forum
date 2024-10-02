# CuGaSe2
 acell 6.777 6.777 6.777 Angstr
 rprim    1.00000000000000   0.00000000000000   0.00000000000000                  
          0.31722189834620   0.94835134165015   0.00000000000000                  
         -0.65861066380215  -0.47417546536848   0.58428556508670                  
 chkprim 0
 chksymbreak 0
 ecut 300 eV
 ecutsm 13.6057 eV
 ionmov 0
 nkpt 0
 kptopt 1
 ngkpt 4 4 4
 nshiftk 1
 shiftk 0.000000 0.000000 0.00000
 nstep 50
 ixc 1
 nband  40
 nsppol 1
 natom 8
 natrd 8
 ntypat 3
 occopt 1
 diemac 1e+06
 typat 1 2 3 3 3 3 1 2
 xred 0.0000000000 0.0000000000 0.0000000000
 0.5000000000 0.5000000000 0.0000000000
 0.3750000000 0.3750000000 0.5000000000
 0.8750000000 0.8750000000 0.5000000000
 0.6250000000 0.1250000000 1.0000000000
 0.1250000000 0.6250000000 0.0000000000
 0.7500000000 0.2500000000 0.5000000000
 0.2500000000 0.7500000000 0.5000000000
 znucl 29 31 34

 # Band structure calculation
 ndtset      4
 istwfk     *1
 gwcalctyp   6

 # ground state
 istwfk1   *0
 prtden1    1
 tolvrs1    1.0d-15
 nshiftk1   1
 shiftk1    0.500000 0.500000 0.500000

 # kss file
 tolwfr2    1.0d-16
 iscf2     -2
 getden2   -1
 nband2     54
 nbdbuf2    10
 nbandkss2  100
 kssform2   1

 # screening matrix
 optdriver3  3
 getkss     -1
 nband3      100
 ecutwfn3    300 eV
 ecuteps3    7.0
 ppmfrq3     16.7 eV
 gwpara3     2
 symchi3     1
 inclvkb3    2
 gwmem3      0
 fftgw       11

 # self-energy matrix elements
 optdriver4  4
 getkss4    -2
 getscr4    -1
 nband4      100
 ecutwfn4    300 eV
 ecutsigx4   300 eV
 nkptgw4     1
 kptgw4      0.000    0.000    0.000    # (G)
 bdgw4       26 27
 gwpara4     2
 gwmem4      0
 fftgw4      11
