# This input file produces a "G-shell not closed" bug.
# The bug is avoided by setting ecutsigx = ecutwfn.
#
# The system is a 2x1x1 diamond supercell,
# but the bug arises in other anisotropic cells,
# wether or not it is primitive.
#== Procedure ==
 ndtset 3
 jdtset 4 5 6
 optdriver5 3
 optdriver6 4

#== Models ==
 ixc 7
 ppmodel 2

#== Precision ==
 ecut 10.0
 ecutsm 0.5
 nband 12
 nband1 12
 nband2 13
 nband3 13
 nband4 13
 nbdbuf1 0
 nbdbuf2 1
 nbdbuf3 1
 nbdbuf4 1

#== k-point grid ==
 kptopt 1
 ngkpt 1 2 2
 nshiftk 1
 shiftk 0 0 0

#== GW procedure ==
 gwcalctyp 00
 nkptgw 1
 kptgw 0.0 0.0 0.0
 bdgw 4 12

#== GW param ==
 ecuteps 2.5
 ecutsigx 20.0
 ecutwfn 10.0

#== GW options ==
 userre 2.0
 awtr 1
 symchi 1
 gwpara 2
 symsigma 0

#== PAW options ==
 userie 1

#== KSS generation ==
 kssform4 3
 nbandkss4 12

#== SCF procedure ==
 iscf1 7
 iscf2 -2
 iscf3 -2
 iscf4 7
 nstep1 100
 nstep2 100
 nstep3 100
 nstep4 1
 nline1 6
 nline2 6
 nline3 6
 tolwfr1 1d-08
 tolwfr2 1d-08
 tolwfr3 1d-08
 tolwfr4 1d-08

#== Printing ==
 prtvol 10
 enunit 1

#== Files ==
 getden2 1
 getden3 1
 getkss 4
 getkss1 0
 getkss2 0
 getkss3 0
 getkss4 0
 getscr6 5
 getwfk3 -1

#== Geometry ==
 acell 13.4069361 6.70346805 6.70346805
 rprim
 0.0 0.5 0.5
 0.5 0.0 0.5
 0.5 0.5 0.0

#== Atoms ==
 ntypat 1
 znucl 6
 natom 4
 typat
 1 1 1
 1

#== Positions ==
 xred
 0.0 0.0 0.0
 0.125 0.25 0.25
 0.5 0.0 0.0
 0.625 0.25 0.25

#== Other options ==
 optforces 0
 chkprim 0
 istwfk *1

