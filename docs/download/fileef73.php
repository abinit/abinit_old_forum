
.Version 5.8.4  of ABINIT 
.(sequential version, prepared for a i686_linux_gnu4.4 computer) 

.Copyright (C) 1998-2009 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Wed 24 Feb 2010.
  
- input  file    -> t11.in
- output file    -> t11.out
- root for input  files -> t11i
- root for output files -> t11o


 DATASET    1 : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        32   mkmem =        28 mpssoang=         4     mpw =      1521
  mqgrid =      3001   natom =         2    nfft =     32768    nkpt =        28
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      17.013 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      7.800 Mbytes ; DEN or POT disk file :      0.252 Mbytes.
================================================================================


 DATASET    2 : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        12  mffmem =         1
P  mgfft =        32   mkmem =        77 mpssoang=         4     mpw =      1540
  mqgrid =      3001   natom =         2    nfft =     32768    nkpt =        77
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      29.395 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :     21.715 Mbytes ; DEN or POT disk file :      0.252 Mbytes.
================================================================================

 -outvars: echo values of preprocessed input variables --------
     acell    7.9376741052E+00  7.9376741052E+00  7.9376741052E+00 Bohr
       amu    5.09415000E+01  1.40067400E+01
    diemac    1.20000000E+01
      ecut    4.00000000E+01 Hartree
    getden1        0
    getden2       -1
      iscf1        5
      iscf2       -2
    istwfk2     2    0    0    0    0    0    0    0    0    0
                0    0    0    0    0    5    0    0    0    0
                0    0    0    0    0    0    0    0    0    0
                0    0    0    0    9    0    0    0    0    0
                0    0    0    0    0    0    0    0    0    2
                outvar1 : prtvol=0, do not print more k-points.
    jdtset      1    2
       kpt1  -8.33333333E-02 -1.66666667E-01  0.00000000E+00
             -8.33333333E-02 -3.33333333E-01  0.00000000E+00
             -1.66666667E-01 -2.50000000E-01  0.00000000E+00
             -8.33333333E-02 -2.50000000E-01  8.33333333E-02
             -8.33333333E-02  5.00000000E-01  0.00000000E+00
             -1.66666667E-01 -4.16666667E-01  0.00000000E+00
             -8.33333333E-02 -4.16666667E-01  8.33333333E-02
             -2.50000000E-01 -3.33333333E-01  0.00000000E+00
             -1.66666667E-01 -3.33333333E-01  8.33333333E-02
             -8.33333333E-02 -3.33333333E-01  1.66666667E-01
             -8.33333333E-02  3.33333333E-01  0.00000000E+00
             -1.66666667E-01  4.16666667E-01  0.00000000E+00
             -2.50000000E-01  5.00000000E-01  0.00000000E+00
             -1.66666667E-01  5.00000000E-01  8.33333333E-02
             -3.33333333E-01 -4.16666667E-01  0.00000000E+00
             -2.50000000E-01 -4.16666667E-01  8.33333333E-02
             -1.66666667E-01 -4.16666667E-01  1.66666667E-01
             -8.33333333E-02 -4.16666667E-01  2.50000000E-01
             -8.33333333E-02  1.66666667E-01  0.00000000E+00
             -1.66666667E-01  2.50000000E-01  0.00000000E+00
             -2.50000000E-01  3.33333333E-01  0.00000000E+00
             -3.33333333E-01  4.16666667E-01  0.00000000E+00
             -4.16666667E-01  5.00000000E-01  0.00000000E+00
             -3.33333333E-01  5.00000000E-01  8.33333333E-02
             -2.50000000E-01  5.00000000E-01  1.66666667E-01
             -8.33333333E-02  0.00000000E+00  0.00000000E+00
             -2.50000000E-01  0.00000000E+00  0.00000000E+00
             -4.16666667E-01  0.00000000E+00  0.00000000E+00
       kpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
              3.33333333E-02  0.00000000E+00  3.33333333E-02
              6.66666667E-02  0.00000000E+00  6.66666667E-02
              1.00000000E-01  0.00000000E+00  1.00000000E-01
              1.33333333E-01  0.00000000E+00  1.33333333E-01
              1.66666667E-01  0.00000000E+00  1.66666667E-01
              2.00000000E-01  0.00000000E+00  2.00000000E-01
              2.33333333E-01  0.00000000E+00  2.33333333E-01
              2.66666667E-01  0.00000000E+00  2.66666667E-01
              3.00000000E-01  0.00000000E+00  3.00000000E-01
              3.33333333E-01  0.00000000E+00  3.33333333E-01
              3.66666667E-01  0.00000000E+00  3.66666667E-01
              4.00000000E-01  0.00000000E+00  4.00000000E-01
              4.33333333E-01  0.00000000E+00  4.33333333E-01
              4.66666667E-01  0.00000000E+00  4.66666667E-01
              5.00000000E-01  0.00000000E+00  5.00000000E-01
              5.00000000E-01  3.57142857E-02  5.35714286E-01
              5.00000000E-01  7.14285714E-02  5.71428571E-01
              5.00000000E-01  1.07142857E-01  6.07142857E-01
              5.00000000E-01  1.42857143E-01  6.42857143E-01
              5.00000000E-01  1.78571429E-01  6.78571429E-01
              5.00000000E-01  2.14285714E-01  7.14285714E-01
              5.00000000E-01  2.50000000E-01  7.50000000E-01
              5.00000000E-01  2.70833333E-01  7.29166667E-01
              5.00000000E-01  2.91666667E-01  7.08333333E-01
              5.00000000E-01  3.12500000E-01  6.87500000E-01
              5.00000000E-01  3.33333333E-01  6.66666667E-01
              5.00000000E-01  3.54166667E-01  6.45833333E-01
              5.00000000E-01  3.75000000E-01  6.25000000E-01
              5.00000000E-01  3.95833333E-01  6.04166667E-01
              5.00000000E-01  4.16666667E-01  5.83333333E-01
              5.00000000E-01  4.37500000E-01  5.62500000E-01
              5.00000000E-01  4.58333333E-01  5.41666667E-01
              5.00000000E-01  4.79166667E-01  5.20833333E-01
              5.00000000E-01  5.00000000E-01  5.00000000E-01
              4.66666667E-01  4.66666667E-01  4.66666667E-01
              4.33333333E-01  4.33333333E-01  4.33333333E-01
              4.00000000E-01  4.00000000E-01  4.00000000E-01
              3.66666667E-01  3.66666667E-01  3.66666667E-01
              3.33333333E-01  3.33333333E-01  3.33333333E-01
              3.00000000E-01  3.00000000E-01  3.00000000E-01
              2.66666667E-01  2.66666667E-01  2.66666667E-01
              2.33333333E-01  2.33333333E-01  2.33333333E-01
              2.00000000E-01  2.00000000E-01  2.00000000E-01
              1.66666667E-01  1.66666667E-01  1.66666667E-01
              1.33333333E-01  1.33333333E-01  1.33333333E-01
              1.00000000E-01  1.00000000E-01  1.00000000E-01
              6.66666667E-02  6.66666667E-02  6.66666667E-02
              3.33333333E-02  3.33333333E-02  3.33333333E-02
              0.00000000E+00  0.00000000E+00  0.00000000E+00
                outvar1 : prtvol=0, do not print more k-points.
   kptrlen1   4.76260446E+01
   kptrlen2   3.00000000E+01
    kptopt1        1
    kptopt2       -6
  kptrlatt    6 -6  6  -6  6  6  -6 -6  6
P    mkmem1       28
P    mkmem2       77
     natom         2
     nband1    12
     nband2    12
    nbdbuf1        0
    nbdbuf2        2
    ndtset         2
     ngfft        32      32      32
      nkpt1       28
      nkpt2       77
     nstep       100
      nsym        48
    ntypat         2
       occ    2.000000  2.000000  2.000000  2.000000  2.000000  0.000000
              0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
     rprim    0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
              5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
              5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
    shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
   spgroup       225
    symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
              0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
             -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
              0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
             -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
              0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
              1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
              0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
             -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
              0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
              1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
              0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
              1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
              0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
             -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
              0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
              0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
              1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
              0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
             -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
              0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
              1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
              0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
             -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
    toldfe1   1.00000000E-08 Hartree
    toldfe2   0.00000000E+00 Hartree
    tolwfr1   0.00000000E+00
    tolwfr2   1.00000000E-12
     typat    1  2
       wtk1     0.02778    0.02778    0.02778    0.05556    0.02778    0.02778
                0.05556    0.02778    0.05556    0.05556    0.02778    0.02778
                0.02778    0.05556    0.02778    0.05556    0.05556    0.05556
                0.02778    0.02778    0.02778    0.02778    0.02778    0.05556
                0.05556    0.00926    0.00926    0.00926
       wtk2     1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000
                outvar1 : prtvol=0, do not print more k-points.
    xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              2.1002181128E+00  2.1002181128E+00  2.1002181128E+00
     xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              3.9688370526E+00  3.9688370526E+00  3.9688370526E+00
      xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
     znucl     23.00000    7.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset= 1.

 chkinp: Checking input parameters for consistency, jdtset= 2.

================================================================================
== DATASET  1 ==================================================================

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  3.9688371  3.9688371  G(1)= -0.1259815  0.1259815  0.1259815
 R(2)=  3.9688371  0.0000000  3.9688371  G(2)=  0.1259815 -0.1259815  0.1259815
 R(3)=  3.9688371  3.9688371  0.0000000  G(3)=  0.1259815  0.1259815 -0.1259815
 Unit cell volume ucvol=  1.2503160E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  32
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.00252

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../../Psps_for_tests/23-V.GGA.fhi
- pspatm: opening atomic psp file    ../../../Psps_for_tests/23-V.GGA.fhi
 vanadium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
  23.00000   5.00000     21003                znucl, zion, pspdat
    6   11    3    1       517   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   59.28995209
         --- l  ekb(1:nproj) -->
             0   -0.939186
             2   -5.620957
             3   -1.146175
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../../../Psps_for_tests/07-N.GGA.fhi
- pspatm: opening atomic psp file    ../../../Psps_for_tests/07-N.GGA.fhi
 nitrogen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
   7.00000   5.00000     21003                znucl, zion, pspdat
    6   11    3    2       467   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    3.15895891
         --- l  ekb(1:nproj) -->
             0    3.289579
             1   -2.246919
             3   -2.603757
 pspatm: atomic psp has been read  and splines computed

   6.24489110E+02                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     12 bands with npw=    1489 for ikpt=   1
P newkpt: treating     12 bands with npw=    1501 for ikpt=   2
P newkpt: treating     12 bands with npw=    1500 for ikpt=   3
P newkpt: treating     12 bands with npw=    1507 for ikpt=   4
P newkpt: treating     12 bands with npw=    1505 for ikpt=   5
P newkpt: treating     12 bands with npw=    1507 for ikpt=   6
P newkpt: treating     12 bands with npw=    1508 for ikpt=   7
P newkpt: treating     12 bands with npw=    1513 for ikpt=   8
P newkpt: treating     12 bands with npw=    1512 for ikpt=   9
P newkpt: treating     12 bands with npw=    1511 for ikpt=  10
P newkpt: treating     12 bands with npw=    1505 for ikpt=  11
P newkpt: treating     12 bands with npw=    1504 for ikpt=  12
P newkpt: treating     12 bands with npw=    1504 for ikpt=  13
P newkpt: treating     12 bands with npw=    1517 for ikpt=  14
P newkpt: treating     12 bands with npw=    1514 for ikpt=  15
P newkpt: treating     12 bands with npw=    1515 for ikpt=  16
P newkpt: treating     12 bands with npw=    1516 for ikpt=  17
P newkpt: treating     12 bands with npw=    1518 for ikpt=  18
P newkpt: treating     12 bands with npw=    1497 for ikpt=  19
P newkpt: treating     12 bands with npw=    1515 for ikpt=  20
P newkpt: treating     12 bands with npw=    1511 for ikpt=  21
P newkpt: treating     12 bands with npw=    1515 for ikpt=  22
P newkpt: treating     12 bands with npw=    1521 for ikpt=  23
P newkpt: treating     12 bands with npw=    1517 for ikpt=  24
P newkpt: treating     12 bands with npw=    1514 for ikpt=  25
P newkpt: treating     12 bands with npw=    1462 for ikpt=  26
P newkpt: treating     12 bands with npw=    1495 for ikpt=  27
P newkpt: treating     12 bands with npw=    1492 for ikpt=  28

 setup2: Arith. and geom. avg. npw (full set) are    1509.833    1509.809

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2    diffor    maxfor
 ETOT  1  -15.791306642780    -1.579E+01 1.800E-01 6.618E+02 0.000E+00 0.000E+00
 ETOT  2  -15.630762160536     1.605E-01 3.248E-03 1.349E+03 0.000E+00 0.000E+00
 ETOT  3  -15.945007120804    -3.142E-01 5.505E-03 1.103E+02 0.000E+00 0.000E+00
 ETOT  4  -15.955489255873    -1.048E-02 4.604E-04 9.272E+01 0.000E+00 0.000E+00
 ETOT  5  -15.957345088066    -1.856E-03 2.288E-03 5.978E+01 0.000E+00 0.000E+00
 ETOT  6  -15.974742582628    -1.740E-02 2.589E-04 1.046E+00 0.000E+00 0.000E+00
 ETOT  7  -15.974650142891     9.244E-05 1.174E-05 8.276E-01 0.000E+00 0.000E+00
 ETOT  8  -15.974869877808    -2.197E-04 3.281E-06 2.704E-02 0.000E+00 0.000E+00
 ETOT  9  -15.974866982177     2.896E-06 3.459E-07 2.518E-02 0.000E+00 0.000E+00
 ETOT 10  -15.974873026658    -6.044E-06 1.160E-07 8.246E-03 0.000E+00 0.000E+00
 ETOT 11  -15.974873576385    -5.497E-07 3.589E-08 1.544E-03 0.000E+00 0.000E+00
 ETOT 12  -15.974873752686    -1.763E-07 1.427E-08 4.305E-06 0.000E+00 0.000E+00
 ETOT 13  -15.974873752836    -1.505E-10 1.348E-09 6.206E-07 0.000E+00 0.000E+00
 ETOT 14  -15.974873752855    -1.887E-11 1.350E-09 1.052E-06 0.000E+00 0.000E+00

 At SCF step   14, etot is converged : 
  for the second time, diff in etot=  1.887E-11 < toldfe=  1.000E-08

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.12937588E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.12937588E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.12937588E-04  sigma(2 1)=  0.00000000E+00

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   6.0233E-12; max=  1.3501E-09
  -0.0833 -0.1667  0.0000    1  1.22038E-10 kpt; spin; max resid(k); each band:
 3.28E-14 1.64E-13 2.78E-13 2.30E-13 7.22E-14 1.04E-13 3.15E-13 1.35E-13
 1.13E-13 9.50E-14 3.97E-14 1.22E-10
  -0.0833 -0.3333  0.0000    1  1.35014E-09 kpt; spin; max resid(k); each band:
 2.57E-14 2.54E-13 2.03E-13 2.02E-13 1.47E-13 5.64E-14 2.19E-13 1.63E-13
 1.52E-13 1.44E-13 1.51E-13 1.35E-09
  -0.1667 -0.2500  0.0000    1  2.91818E-13 kpt; spin; max resid(k); each band:
 2.99E-14 1.60E-13 2.92E-13 2.42E-13 1.26E-13 7.40E-14 2.55E-13 2.32E-13
 1.02E-13 1.39E-13 9.95E-14 1.46E-13
  -0.0833 -0.2500  0.0833    1  2.71815E-13 kpt; spin; max resid(k); each band:
 2.78E-14 2.06E-13 2.19E-13 2.72E-13 1.31E-13 1.44E-13 2.61E-13 1.58E-13
 1.43E-13 1.34E-13 1.41E-13 1.90E-13
  -0.0833  0.5000  0.0000    1  4.84656E-11 kpt; spin; max resid(k); each band:
 1.30E-14 2.63E-13 2.01E-13 1.94E-13 7.42E-14 3.82E-14 2.86E-13 1.19E-13
 1.62E-13 9.22E-14 9.37E-13 4.85E-11
  -0.1667 -0.4167  0.0000    1  1.24621E-12 kpt; spin; max resid(k); each band:
 2.04E-14 2.40E-13 2.23E-13 1.89E-13 1.90E-13 5.25E-14 2.04E-13 1.62E-13
 1.11E-13 1.44E-13 1.05E-13 1.25E-12
  -0.0833 -0.4167  0.0833    1  2.54459E-13 kpt; spin; max resid(k); each band:
 1.60E-14 2.54E-13 2.12E-13 1.90E-13 1.27E-13 6.01E-14 2.54E-13 1.43E-13
 1.44E-13 1.11E-13 1.61E-13 1.22E-13
  -0.2500 -0.3333  0.0000    1  1.05538E-12 kpt; spin; max resid(k); each band:
 2.56E-14 1.66E-13 2.89E-13 2.00E-13 2.00E-13 6.58E-14 2.11E-13 2.50E-13
 7.25E-14 1.34E-13 5.35E-14 1.06E-12
  -0.1667 -0.3333  0.0833    1  3.35673E-13 kpt; spin; max resid(k); each band:
 2.29E-14 1.97E-13 2.72E-13 2.05E-13 2.24E-13 9.25E-14 2.29E-13 1.76E-13
 1.13E-13 1.34E-13 7.44E-14 3.36E-13
  -0.0833 -0.3333  0.1667    1  2.88681E-13 kpt; spin; max resid(k); each band:
 1.84E-14 2.23E-13 2.83E-13 1.66E-13 1.38E-13 1.25E-13 2.89E-13 1.18E-13
 1.50E-13 1.12E-13 1.49E-13 1.06E-13
  -0.0833  0.3333  0.0000    1  2.59820E-13 kpt; spin; max resid(k); each band:
 2.12E-14 2.60E-13 1.79E-13 2.24E-13 2.64E-14 1.68E-13 2.18E-13 1.58E-13
 1.79E-13 1.14E-13 1.37E-13 1.85E-13
  -0.1667  0.4167  0.0000    1  3.09086E-13 kpt; spin; max resid(k); each band:
 1.26E-14 2.57E-13 2.22E-13 1.72E-13 1.16E-13 2.41E-14 3.09E-13 1.21E-13
 1.53E-13 8.89E-14 1.37E-13 1.42E-13
  -0.2500  0.5000  0.0000    1  7.95372E-13 kpt; spin; max resid(k); each band:
 1.61E-14 2.35E-13 2.27E-13 1.52E-13 2.44E-13 2.94E-14 1.89E-13 1.33E-13
 7.65E-14 1.16E-13 5.92E-14 7.95E-13
  -0.1667  0.5000  0.0833    1  3.40063E-13 kpt; spin; max resid(k); each band:
 1.35E-14 2.52E-13 2.18E-13 1.64E-13 1.88E-13 8.54E-14 2.21E-13 1.03E-13
 1.32E-13 1.00E-13 6.00E-14 3.40E-13
  -0.3333 -0.4167  0.0000    1  1.84108E-12 kpt; spin; max resid(k); each band:
 2.07E-14 1.72E-13 2.79E-13 1.17E-13 2.84E-13 6.59E-14 1.22E-13 1.82E-13
 4.50E-14 7.16E-14 9.91E-14 1.84E-12
  -0.2500 -0.4167  0.0833    1  6.21900E-13 kpt; spin; max resid(k); each band:
 1.84E-14 1.96E-13 2.71E-13 1.53E-13 3.02E-13 7.60E-14 1.45E-13 1.34E-13
 7.53E-14 1.05E-13 6.98E-14 6.22E-13
  -0.1667 -0.4167  0.1667    1  2.60948E-13 kpt; spin; max resid(k); each band:
 1.46E-14 2.21E-13 2.61E-13 1.47E-13 2.52E-13 1.48E-13 1.72E-13 8.09E-14
 1.12E-13 1.18E-13 5.93E-14 1.83E-13
  -0.0833 -0.4167  0.2500    1  2.40202E-13 kpt; spin; max resid(k); each band:
 1.32E-14 2.40E-13 2.40E-13 1.38E-13 2.32E-13 1.11E-13 2.13E-13 6.05E-14
 1.22E-13 9.52E-14 6.68E-14 1.64E-13
  -0.0833  0.1667  0.0000    1  2.95498E-13 kpt; spin; max resid(k); each band:
 3.17E-14 2.29E-13 1.46E-13 2.95E-13 7.83E-15 2.28E-13 2.70E-13 1.29E-13
 1.39E-13 1.09E-13 6.87E-14 1.36E-13
  -0.1667  0.2500  0.0000    1  3.09382E-13 kpt; spin; max resid(k); each band:
 2.37E-14 2.25E-13 1.56E-13 3.09E-13 4.85E-15 2.69E-13 2.40E-13 1.36E-13
 1.73E-13 1.12E-13 1.16E-13 6.49E-14
  -0.2500  0.3333  0.0000    1  3.43864E-13 kpt; spin; max resid(k); each band:
 1.43E-14 2.34E-13 2.70E-13 1.51E-13 4.72E-15 1.67E-13 3.44E-13 8.69E-14
 1.51E-13 9.09E-14 1.33E-13 5.49E-14
  -0.3333  0.4167  0.0000    1  2.80097E-13 kpt; spin; max resid(k); each band:
 1.46E-14 2.29E-13 2.34E-13 1.13E-13 2.80E-13 4.82E-15 1.95E-13 4.69E-14
 1.10E-13 5.33E-14 1.29E-13 1.34E-13
  -0.4167  0.5000  0.0000    1  4.80403E-13 kpt; spin; max resid(k); each band:
 1.77E-14 1.75E-13 2.75E-13 4.19E-14 3.40E-13 6.32E-14 7.77E-14 3.88E-14
 2.52E-14 1.17E-14 1.73E-13 4.80E-13
  -0.3333  0.5000  0.0833    1  8.22320E-13 kpt; spin; max resid(k); each band:
 1.59E-14 1.98E-13 2.61E-13 1.15E-13 3.47E-13 7.65E-14 6.50E-14 6.97E-14
 4.77E-14 2.64E-14 1.57E-13 8.22E-13
  -0.2500  0.5000  0.1667    1  3.15636E-13 kpt; spin; max resid(k); each band:
 1.41E-14 2.28E-13 2.43E-13 1.35E-13 3.16E-13 2.18E-13 5.64E-14 4.20E-14
 8.42E-14 7.76E-14 1.39E-13 1.86E-13
  -0.0833  0.0000  0.0000    1  4.47855E-10 kpt; spin; max resid(k); each band:
 3.53E-14 2.70E-13 1.35E-13 1.35E-13 5.24E-14 5.24E-14 3.64E-13 8.43E-14
 8.43E-14 5.39E-14 2.07E-14 4.48E-10
  -0.2500  0.0000  0.0000    1  2.70238E-13 kpt; spin; max resid(k); each band:
 3.02E-14 2.70E-13 1.83E-13 1.83E-13 4.31E-14 1.44E-13 2.45E-13 1.52E-13
 1.50E-13 1.25E-13 9.22E-14 1.20E-13
  -0.4167  0.0000  0.0000    1  6.61321E-13 kpt; spin; max resid(k); each band:
 1.67E-14 2.65E-13 1.97E-13 1.97E-13 4.64E-14 5.37E-14 2.72E-13 1.73E-13
 1.66E-13 5.74E-14 6.61E-13 2.62E-14
 reduced coordinates (array xred) for    2 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.500000000000      0.500000000000      0.500000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      2.10021811283020     2.10021811283020     2.10021811283020

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  7.937674105150  7.937674105150  7.937674105150 bohr
              =  4.200436225660  4.200436225660  4.200436225660 angstroms
 prteigrs : about to open file t11o_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.01336   Average Vxc (hartree)=  -0.44961
 Eigenvalues (hartree) for nkpt=  28  k points:
 kpt#   1, nband= 12, wtk=  0.02778, kpt= -0.0833 -0.1667  0.0000 (reduced coord)
  -0.64603  -0.17113  -0.13358  -0.12816  -0.05834  -0.02363  -0.01452   0.01852
   0.06325   0.23164   0.51477   0.70113
 kpt#   2, nband= 12, wtk=  0.02778, kpt= -0.0833 -0.3333  0.0000 (reduced coord)
  -0.60808  -0.25675  -0.19058  -0.17883  -0.02709   0.00400   0.01800   0.10870
   0.14759   0.27321   0.47094   0.58297
 kpt#   3, nband= 12, wtk=  0.02778, kpt= -0.1667 -0.2500  0.0000 (reduced coord)
  -0.62650  -0.22258  -0.15107  -0.14303  -0.07440  -0.00095   0.01725   0.03354
   0.09887   0.29118   0.52981   0.59497
 kpt#   4, nband= 12, wtk=  0.05556, kpt= -0.0833 -0.2500  0.0833 (reduced coord)
  -0.61694  -0.23568  -0.17803  -0.16828  -0.04354   0.00375   0.01724   0.05852
   0.13647   0.28875   0.49308   0.55617
 kpt#   5, nband= 12, wtk=  0.02778, kpt= -0.0833  0.5000  0.0000 (reduced coord)
  -0.57545  -0.31324  -0.21043  -0.20495   0.01084   0.02057   0.04610   0.17455
   0.18171   0.23594   0.47408   0.50397
 kpt#   6, nband= 12, wtk=  0.02778, kpt= -0.1667 -0.4167  0.0000 (reduced coord)
  -0.59000  -0.27659  -0.20517  -0.18308  -0.03669   0.02226   0.03948   0.10933
   0.15142   0.30778   0.45149   0.52438
 kpt#   7, nband= 12, wtk=  0.05556, kpt= -0.0833 -0.4167  0.0833 (reduced coord)
  -0.58038  -0.29510  -0.21085  -0.19914  -0.00623   0.02014   0.04077   0.13247
   0.17800   0.27722   0.46112   0.49829
 kpt#   8, nband= 12, wtk=  0.02778, kpt= -0.2500 -0.3333  0.0000 (reduced coord)
  -0.60440  -0.25432  -0.16214  -0.15059  -0.09005   0.01436   0.03847   0.04599
   0.11617   0.34035   0.48392   0.55277
 kpt#   9, nband= 12, wtk=  0.05556, kpt= -0.1667 -0.3333  0.0833 (reduced coord)
  -0.59673  -0.26163  -0.19010  -0.17572  -0.05407   0.02241   0.03770   0.06667
   0.14323   0.33318   0.46281   0.51023
 kpt#  10, nband= 12, wtk=  0.05556, kpt= -0.0833 -0.3333  0.1667 (reduced coord)
  -0.58496  -0.27452  -0.20953  -0.19751  -0.01553   0.02297   0.03660   0.08260
   0.17819   0.32065   0.45533   0.47182
 kpt#  11, nband= 12, wtk=  0.02778, kpt= -0.0833  0.3333  0.0000 (reduced coord)
  -0.59382  -0.28275  -0.19874  -0.19570  -0.00333   0.00573   0.02988   0.12987
   0.18061   0.25680   0.46786   0.53349
 kpt#  12, nband= 12, wtk=  0.02778, kpt= -0.1667  0.4167  0.0000 (reduced coord)
  -0.57377  -0.29990  -0.21650  -0.20273   0.00812   0.01551   0.04017   0.13647
   0.17969   0.28051   0.45948   0.48159
 kpt#  13, nband= 12, wtk=  0.02778, kpt= -0.2500  0.5000  0.0000 (reduced coord)
  -0.57726  -0.27431  -0.21730  -0.18294  -0.04280   0.02930   0.04400   0.10703
   0.13109   0.34449   0.42201   0.49991
 kpt#  14, nband= 12, wtk=  0.05556, kpt= -0.1667  0.5000  0.0833 (reduced coord)
  -0.57285  -0.28648  -0.22161  -0.19750  -0.00982   0.01900   0.04225   0.12612
   0.14943   0.32259   0.44030   0.48167
 kpt#  15, nband= 12, wtk=  0.02778, kpt= -0.3333 -0.4167  0.0000 (reduced coord)
  -0.58677  -0.26392  -0.16838  -0.15216  -0.10079   0.02555   0.04430   0.04727
   0.11627   0.34437   0.43660   0.56469
 kpt#  16, nband= 12, wtk=  0.05556, kpt= -0.2500 -0.4167  0.0833 (reduced coord)
  -0.58140  -0.26545  -0.19912  -0.17728  -0.06125   0.03179   0.04369   0.06707
   0.12907   0.35720   0.42599   0.51120
 kpt#  17, nband= 12, wtk=  0.05556, kpt= -0.1667 -0.4167  0.1667 (reduced coord)
  -0.57435  -0.26881  -0.22030  -0.19804  -0.01834   0.01967   0.04237   0.08650
   0.14503   0.36804   0.43262   0.46586
 kpt#  18, nband= 12, wtk=  0.05556, kpt= -0.0833 -0.4167  0.2500 (reduced coord)
  -0.57066  -0.26571  -0.23391  -0.19603  -0.01011   0.01369   0.04231   0.09762
   0.13979   0.37658   0.43155   0.44716
 kpt#  19, nband= 12, wtk=  0.02778, kpt= -0.0833  0.1667  0.0000 (reduced coord)
  -0.63534  -0.19545  -0.16152  -0.15074  -0.03853  -0.01932  -0.00741   0.04493
   0.10110   0.24950   0.50508   0.63124
 kpt#  20, nband= 12, wtk=  0.02778, kpt= -0.1667  0.2500  0.0000 (reduced coord)
  -0.60108  -0.25947  -0.19394  -0.19257  -0.01718   0.01007   0.02749   0.07356
   0.17880   0.29120   0.46784   0.51062
 kpt#  21, nband= 12, wtk=  0.02778, kpt= -0.2500  0.3333  0.0000 (reduced coord)
  -0.57500  -0.27911  -0.22492  -0.19988   0.00768   0.01072   0.03741   0.09264
   0.17854   0.33300   0.44282   0.45407
 kpt#  22, nband= 12, wtk=  0.02778, kpt= -0.3333  0.4167  0.0000 (reduced coord)
  -0.57175  -0.25620  -0.23215  -0.18131  -0.04531   0.02856   0.04348   0.10410
   0.10580   0.37292   0.41996   0.47185
 kpt#  23, nband= 12, wtk=  0.02778, kpt= -0.4167  0.5000  0.0000 (reduced coord)
  -0.57783  -0.26070  -0.17154  -0.15126  -0.10563   0.03330   0.04197   0.04271
   0.10447   0.33094   0.42788   0.57418
 kpt#  24, nband= 12, wtk=  0.05556, kpt= -0.3333  0.5000  0.0833 (reduced coord)
  -0.57410  -0.25652  -0.20541  -0.17761  -0.06427   0.03384   0.04276   0.06585
   0.10745   0.35977   0.42512   0.51395
 kpt#  25, nband= 12, wtk=  0.05556, kpt= -0.2500  0.5000  0.1667 (reduced coord)
  -0.57017  -0.24920  -0.22908  -0.20155  -0.01926   0.01555   0.04251   0.08516
   0.11255   0.40725   0.42910   0.46312
 kpt#  26, nband= 12, wtk=  0.00926, kpt= -0.0833  0.0000  0.0000 (reduced coord)
  -0.65722  -0.11885  -0.11001  -0.11001  -0.04877  -0.04877  -0.03986   0.01071
   0.01071   0.19704   0.50163   0.78334
 kpt#  27, nband= 12, wtk=  0.00926, kpt= -0.2500  0.0000  0.0000 (reduced coord)
  -0.62521  -0.22302  -0.17009  -0.17009  -0.02006  -0.02006  -0.00607   0.10459
   0.10459   0.25487   0.48368   0.65644
 kpt#  28, nband= 12, wtk=  0.00926, kpt= -0.4167  0.0000  0.0000 (reduced coord)
  -0.58319  -0.30626  -0.20360  -0.20360   0.01336   0.01336   0.03705   0.18236
   0.18236   0.21969   0.47738   0.52539
 Total charge density [el/Bohr^3]
,     Maximum=    5.2130E-01  at reduced coord.    0.4688    0.5313    0.5938
,Next maximum=    5.2130E-01  at reduced coord.    0.4063    0.5313    0.5938
,     Minimum=    1.5104E-04  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=    2.8348E-03  at reduced coord.    0.0313    0.0000    0.0000

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.61152957610500E+01
    Hartree energy  =  1.88974421258253E+00
    XC energy       = -4.29618113730857E+00
    Ewald energy    = -1.78723480070804E+01
    PspCore energy  =  4.99465008732445E+00
    Loc. psp. energy= -7.40013356883510E+00
    NL   psp  energy= -9.40590110058827E+00
    >>>>>>>>> Etotal= -1.59748737528553E+01

 Other information on the energy :
    Total energy(eV)= -4.34698421803985E+02 ; Band energy (Ha)=  -2.5321706895E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.12937588E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.12937588E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.12937588E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  3.3227E+00 GPa]
- sigma(1 1)= -3.32273800E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -3.32273800E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -3.32273800E+00  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  3.9688371  3.9688371  G(1)= -0.1259815  0.1259815  0.1259815
 R(2)=  3.9688371  0.0000000  3.9688371  G(2)=  0.1259815 -0.1259815  0.1259815
 R(3)=  3.9688371  3.9688371  0.0000000  G(3)=  0.1259815  0.1259815 -0.1259815
 Unit cell volume ucvol=  1.2503160E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  32  32  32
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.00252
--------------------------------------------------------------------------------

P newkpt: treating     12 bands with npw=     730 for ikpt=   1
P newkpt: treating     12 bands with npw=    1463 for ikpt=   2
P newkpt: treating     12 bands with npw=    1463 for ikpt=   3
P newkpt: treating     12 bands with npw=    1483 for ikpt=   4
P newkpt: treating     12 bands with npw=    1491 for ikpt=   5
P newkpt: treating     12 bands with npw=    1491 for ikpt=   6
P newkpt: treating     12 bands with npw=    1491 for ikpt=   7
P newkpt: treating     12 bands with npw=    1491 for ikpt=   8
P newkpt: treating     12 bands with npw=    1495 for ikpt=   9
P newkpt: treating     12 bands with npw=    1503 for ikpt=  10
P newkpt: treating     12 bands with npw=    1527 for ikpt=  11
P newkpt: treating     12 bands with npw=    1512 for ikpt=  12
P newkpt: treating     12 bands with npw=    1524 for ikpt=  13
P newkpt: treating     12 bands with npw=    1524 for ikpt=  14
P newkpt: treating     12 bands with npw=    1528 for ikpt=  15
P newkpt: treating     12 bands with npw=     762 for ikpt=  16
P newkpt: treating     12 bands with npw=    1528 for ikpt=  17
P newkpt: treating     12 bands with npw=    1526 for ikpt=  18
P newkpt: treating     12 bands with npw=    1524 for ikpt=  19
P newkpt: treating     12 bands with npw=    1514 for ikpt=  20
P newkpt: treating     12 bands with npw=    1510 for ikpt=  21
P newkpt: treating     12 bands with npw=    1520 for ikpt=  22
P newkpt: treating     12 bands with npw=    1540 for ikpt=  23
P newkpt: treating     12 bands with npw=    1522 for ikpt=  24
P newkpt: treating     12 bands with npw=    1514 for ikpt=  25
P newkpt: treating     12 bands with npw=    1516 for ikpt=  26
P newkpt: treating     12 bands with npw=    1518 for ikpt=  27
P newkpt: treating     12 bands with npw=    1522 for ikpt=  28
P newkpt: treating     12 bands with npw=    1514 for ikpt=  29
P newkpt: treating     12 bands with npw=    1510 for ikpt=  30
P newkpt: treating     12 bands with npw=    1514 for ikpt=  31
P newkpt: treating     12 bands with npw=    1508 for ikpt=  32
P newkpt: treating     12 bands with npw=    1508 for ikpt=  33
P newkpt: treating     12 bands with npw=    1504 for ikpt=  34
P newkpt: treating     12 bands with npw=     751 for ikpt=  35
P newkpt: treating     12 bands with npw=    1501 for ikpt=  36
P newkpt: treating     12 bands with npw=    1495 for ikpt=  37
P newkpt: treating     12 bands with npw=    1498 for ikpt=  38
P newkpt: treating     12 bands with npw=    1504 for ikpt=  39
P newkpt: treating     12 bands with npw=    1501 for ikpt=  40
P newkpt: treating     12 bands with npw=    1507 for ikpt=  41
P newkpt: treating     12 bands with npw=    1501 for ikpt=  42
P newkpt: treating     12 bands with npw=    1507 for ikpt=  43
P newkpt: treating     12 bands with npw=    1504 for ikpt=  44
P newkpt: treating     12 bands with npw=    1495 for ikpt=  45
P newkpt: treating     12 bands with npw=    1492 for ikpt=  46
P newkpt: treating     12 bands with npw=    1471 for ikpt=  47
P newkpt: treating     12 bands with npw=    1462 for ikpt=  48
P newkpt: treating     12 bands with npw=    1462 for ikpt=  49
P newkpt: treating     12 bands with npw=     730 for ikpt=  50
  newkpt: prtvol=0 or 1, do not print more k-points.


================================================================================
 prteigrs : about to open file t11o_DS2_EIG
 Non-SCF case, kpt    1 (  0.00000  0.00000  0.00000), residuals and eigenvalues=
  1.97E-13  4.91E-13  1.84E-13  4.05E-13  8.25E-13  9.63E-13  3.29E-13  4.51E-13
  2.68E-13  7.55E-13  2.20E-13  3.42E-06
 -6.6164E-01 -8.8881E-02 -8.8881E-02 -8.8881E-02 -5.5536E-02 -5.5536E-02
 -5.5536E-02 -1.2454E-02 -1.2454E-02  1.8330E-01  4.9455E-01  8.5146E-01
  prteigrs : nnsclo,ikpt=  100    1 max resid (incl. the buffer)=  3.41698E-06
 Non-SCF case, kpt    2 (  0.03333  0.00000  0.03333), residuals and eigenvalues=
  6.11E-14  4.87E-13  1.43E-13  7.08E-14  4.00E-13  7.36E-13  1.04E-13  2.79E-13
  1.30E-13  9.24E-13  2.39E-13  1.26E-05
 -6.6069E-01 -9.9634E-02 -9.3404E-02 -9.3404E-02 -5.6589E-02 -5.0052E-02
 -5.0052E-02 -1.2106E-02 -2.4081E-03  1.8645E-01  4.9632E-01  8.3391E-01
  prteigrs : nnsclo,ikpt=  100    2 max resid (incl. the buffer)=  1.25919E-05
 Non-SCF case, kpt    3 (  0.06667  0.00000  0.06667), residuals and eigenvalues=
  6.12E-14  7.00E-14  1.55E-13  7.98E-13  4.73E-13  6.58E-14  5.30E-13  2.68E-13
  2.62E-13  1.54E-13  1.08E-12  6.28E-06
 -6.5788E-01 -1.2232E-01 -1.0242E-01 -1.0242E-01 -5.9661E-02 -3.8229E-02
 -3.8229E-02 -1.1070E-02  1.7961E-02  1.9598E-01  5.0148E-01  8.0016E-01
  prteigrs : nnsclo,ikpt=  100    3 max resid (incl. the buffer)=  6.27880E-06
 Non-SCF case, kpt    4 (  0.10000  0.00000  0.10000), residuals and eigenvalues=
  5.18E-13  1.66E-13  8.80E-14  2.25E-13  3.46E-13  7.20E-13  1.49E-13  2.33E-13
  3.13E-13  2.41E-13  6.27E-12  1.50E-05
 -6.5332E-01 -1.4769E-01 -1.1187E-01 -1.1187E-01 -6.4504E-02 -2.4381E-02
 -2.4381E-02 -9.3813E-03  3.9077E-02  2.1183E-01  5.0957E-01  7.6479E-01
  prteigrs : nnsclo,ikpt=  100    4 max resid (incl. the buffer)=  1.50188E-05
 Non-SCF case, kpt    5 (  0.13333  0.00000  0.13333), residuals and eigenvalues=
  1.26E-13  2.16E-13  2.17E-13  2.56E-13  1.16E-13  1.19E-13  1.24E-13  3.90E-13
  5.15E-13  8.20E-13  7.89E-13  1.76E-04
 -6.4717E-01 -1.7245E-01 -1.2049E-01 -1.2049E-01 -7.0757E-02 -1.0143E-02
 -1.0143E-02 -7.0947E-03  5.7712E-02  2.3325E-01  5.1990E-01  7.3223E-01
  prteigrs : nnsclo,ikpt=  100    5 max resid (incl. the buffer)=  1.75755E-04
 Non-SCF case, kpt    6 (  0.16667  0.00000  0.16667), residuals and eigenvalues=
  4.57E-13  2.86E-13  7.40E-13  3.09E-13  1.16E-13  8.43E-13  2.94E-13  4.61E-13
  1.82E-13  3.92E-13  3.68E-12  8.15E-08
 -6.3971E-01 -1.9523E-01 -1.2788E-01 -1.2788E-01 -7.7999E-02 -4.2868E-03
  3.5630E-03  3.5630E-03  7.3211E-02  2.5850E-01  5.3168E-01  6.7715E-01
  prteigrs : nnsclo,ikpt=  100    6 max resid (incl. the buffer)=  8.14955E-08
 Non-SCF case, kpt    7 (  0.20000  0.00000  0.20000), residuals and eigenvalues=
  7.98E-13  2.11E-13  3.44E-13  1.42E-13  2.88E-13  1.83E-13  2.79E-13  6.77E-13
  3.89E-13  4.53E-13  6.75E-10  2.04E-09
 -6.3127E-01 -2.1526E-01 -1.3390E-01 -1.3390E-01 -8.5803E-02 -1.0574E-03
  1.5990E-02  1.5990E-02  8.5904E-02  2.8506E-01  5.4407E-01  6.2077E-01
  prteigrs : nnsclo,ikpt=  100    7 max resid (incl. the buffer)=  2.03654E-09
 Non-SCF case, kpt    8 (  0.23333  0.00000  0.23333), residuals and eigenvalues=
  1.83E-13  5.59E-13  4.38E-13  4.85E-13  4.19E-13  3.78E-13  8.04E-13  6.09E-13
  6.67E-13  8.54E-13  3.68E-09  1.32E-11
 -6.2225E-01 -2.3205E-01 -1.3855E-01 -1.3855E-01 -9.3763E-02  2.4718E-03
  2.6502E-02  2.6502E-02  9.6228E-02  3.1007E-01  5.5634E-01  5.6856E-01
  prteigrs : nnsclo,ikpt=  100    8 max resid (incl. the buffer)=  3.68491E-09
 Non-SCF case, kpt    9 (  0.26667  0.00000  0.26667), residuals and eigenvalues=
  1.35E-13  9.53E-13  3.75E-13  3.90E-13  2.28E-13  5.29E-13  7.23E-13  5.36E-13
  8.44E-13  8.00E-13  7.47E-12  4.46E-10
 -6.1312E-01 -2.4528E-01 -1.4188E-01 -1.4188E-01 -1.0152E-01  6.1600E-03
  3.4632E-02  3.4632E-02  1.0437E-01  3.3061E-01  5.2247E-01  5.6792E-01
  prteigrs : nnsclo,ikpt=  100    9 max resid (incl. the buffer)=  4.45691E-10
 Non-SCF case, kpt   10 (  0.30000  0.00000  0.30000), residuals and eigenvalues=
  8.73E-14  7.69E-13  4.54E-13  3.68E-13  2.49E-13  1.32E-13  5.79E-13  1.85E-13
  6.64E-13  4.44E-13  5.47E-13  8.83E-09
 -6.0438E-01 -2.5481E-01 -1.4403E-01 -1.4403E-01 -1.0879E-01  9.8482E-03
  4.0173E-02  4.0173E-02  1.1016E-01  3.4377E-01  4.8497E-01  5.7837E-01
  prteigrs : nnsclo,ikpt=  100   10 max resid (incl. the buffer)=  8.82642E-09
 Non-SCF case, kpt   11 (  0.33333  0.00000  0.33333), residuals and eigenvalues=
  1.13E-13  4.97E-13  2.62E-13  1.72E-13  6.34E-13  9.90E-13  6.01E-13  1.29E-13
  3.53E-13  2.37E-13  2.75E-13  2.70E-08
 -5.9648E-01 -2.6074E-01 -1.4517E-01 -1.4517E-01 -1.1530E-01  1.3367E-02
  4.3247E-02  4.3247E-02  1.1320E-01  3.4737E-01  4.5863E-01  5.8742E-01
  prteigrs : nnsclo,ikpt=  100   11 max resid (incl. the buffer)=  2.70430E-08
 Non-SCF case, kpt   12 (  0.36667  0.00000  0.36667), residuals and eigenvalues=
  1.86E-13  7.44E-13  2.69E-13  4.66E-13  3.67E-13  2.71E-13  1.88E-13  1.29E-13
  4.32E-13  6.09E-13  2.22E-11  3.42E-05
 -5.8977E-01 -2.6348E-01 -1.4553E-01 -1.4553E-01 -1.2087E-01  1.6552E-02
  4.4301E-02  4.4301E-02  1.1323E-01  3.4244E-01  4.4350E-01  5.9495E-01
  prteigrs : nnsclo,ikpt=  100   12 max resid (incl. the buffer)=  3.41907E-05
 Non-SCF case, kpt   13 (  0.40000  0.00000  0.40000), residuals and eigenvalues=
  3.83E-13  6.26E-13  2.59E-13  3.51E-13  4.49E-13  6.43E-13  6.09E-13  2.52E-13
  5.40E-13  3.05E-13  1.38E-12  1.96E-06
 -5.8451E-01 -2.6380E-01 -1.4539E-01 -1.4539E-01 -1.2535E-01  1.9233E-02
  4.3990E-02  4.3990E-02  1.1057E-01  3.3410E-01  4.3568E-01  6.0081E-01
  prteigrs : nnsclo,ikpt=  100   13 max resid (incl. the buffer)=  1.95529E-06
 Non-SCF case, kpt   14 (  0.43333  0.00000  0.43333), residuals and eigenvalues=
  7.11E-13  7.15E-13  2.19E-13  2.69E-13  2.13E-13  6.23E-13  4.61E-13  1.56E-13
  5.80E-13  6.32E-13  1.37E-12  3.57E-07
 -5.8077E-01 -2.6275E-01 -1.4502E-01 -1.4502E-01 -1.2862E-01  2.1268E-02
  4.3067E-02  4.3067E-02  1.0646E-01  3.2703E-01  4.3128E-01  6.0502E-01
  prteigrs : nnsclo,ikpt=  100   14 max resid (incl. the buffer)=  3.57302E-07
 Non-SCF case, kpt   15 (  0.46667  0.00000  0.46667), residuals and eigenvalues=
  1.80E-13  7.04E-14  1.25E-13  2.06E-13  3.75E-13  4.49E-13  7.66E-13  4.72E-13
  9.75E-13  2.48E-13  1.22E-11  2.18E-06
 -5.7856E-01 -2.6149E-01 -1.4468E-01 -1.4468E-01 -1.3061E-01  2.2538E-02
  4.2202E-02  4.2202E-02  1.0281E-01  3.2287E-01  4.2873E-01  6.0756E-01
  prteigrs : nnsclo,ikpt=  100   15 max resid (incl. the buffer)=  2.18090E-06
 Non-SCF case, kpt   16 (  0.50000  0.00000  0.50000), residuals and eigenvalues=
  1.46E-13  1.03E-13  2.79E-13  1.64E-13  1.13E-13  8.88E-14  9.21E-13  1.76E-13
  3.41E-13  1.94E-13  5.77E-13  1.00E-07
 -5.7783E-01 -2.6095E-01 -1.4454E-01 -1.4454E-01 -1.3128E-01  2.2970E-02
  4.1859E-02  4.1859E-02  1.0137E-01  3.2156E-01  4.2785E-01  6.0839E-01
  prteigrs : nnsclo,ikpt=  100   16 max resid (incl. the buffer)=  1.00316E-07
 Non-SCF case, kpt   17 (  0.50000  0.03571  0.53571), residuals and eigenvalues=
  2.36E-13  8.18E-14  4.22E-13  6.74E-13  6.86E-13  1.36E-13  7.85E-13  4.95E-13
  1.87E-13  2.67E-13  1.04E-11  2.53E-06
 -5.7742E-01 -2.6048E-01 -1.5751E-01 -1.4909E-01 -1.1712E-01  2.7415E-02
  4.1430E-02  4.1864E-02  1.0162E-01  3.2447E-01  4.2754E-01  5.9431E-01
  prteigrs : nnsclo,ikpt=  100   17 max resid (incl. the buffer)=  2.53490E-06
 Non-SCF case, kpt   18 (  0.50000  0.07143  0.57143), residuals and eigenvalues=
  1.24E-13  5.19E-13  5.98E-13  3.14E-13  2.75E-13  5.40E-13  8.57E-13  1.26E-13
  2.45E-13  4.70E-13  7.79E-13  8.32E-07
 -5.7627E-01 -2.5905E-01 -1.7403E-01 -1.6072E-01 -9.7113E-02  3.8561E-02
  3.9990E-02  4.1879E-02  1.0232E-01  3.3330E-01  4.2683E-01  5.6721E-01
  prteigrs : nnsclo,ikpt=  100   18 max resid (incl. the buffer)=  8.31585E-07
 Non-SCF case, kpt   19 (  0.50000  0.10714  0.60714), residuals and eigenvalues=
  6.62E-13  4.45E-13  9.67E-13  3.44E-13  3.92E-13  2.87E-13  9.05E-13  2.66E-13
  9.64E-13  1.03E-13  2.33E-12  6.82E-09
 -5.7457E-01 -2.5661E-01 -1.8935E-01 -1.7542E-01 -7.6276E-02  3.7103E-02
  4.1899E-02  5.2061E-02  1.0337E-01  3.4815E-01  4.2644E-01  5.3839E-01
  prteigrs : nnsclo,ikpt=  100   19 max resid (incl. the buffer)=  6.82275E-09
 Non-SCF case, kpt   20 (  0.50000  0.14286  0.64286), residuals and eigenvalues=
  1.40E-13  8.67E-14  3.18E-13  8.69E-14  3.42E-13  3.95E-13  5.90E-13  2.42E-13
  6.68E-13  4.54E-13  6.84E-11  3.18E-08
 -5.7264E-01 -2.5307E-01 -2.0315E-01 -1.8978E-01 -5.5411E-02  3.2159E-02
  4.1924E-02  6.4383E-02  1.0458E-01  3.6843E-01  4.2741E-01  5.1104E-01
  prteigrs : nnsclo,ikpt=  100   20 max resid (incl. the buffer)=  3.18483E-08
 Non-SCF case, kpt   21 (  0.50000  0.17857  0.67857), residuals and eigenvalues=
  3.61E-13  9.40E-13  5.72E-13  2.28E-13  2.29E-13  4.19E-13  3.71E-13  6.28E-13
  2.15E-13  5.28E-13  6.32E-11  3.17E-09
 -5.7085E-01 -2.4834E-01 -2.1532E-01 -2.0149E-01 -3.5227E-02  2.4553E-02
  4.1945E-02  7.3626E-02  1.0572E-01  3.9188E-01  4.3095E-01  4.8659E-01
  prteigrs : nnsclo,ikpt=  100   21 max resid (incl. the buffer)=  3.17363E-09
 Non-SCF case, kpt   22 (  0.50000  0.21429  0.71429), residuals and eigenvalues=
  2.42E-13  1.92E-13  4.41E-13  7.98E-13  5.06E-13  1.42E-13  9.64E-13  4.43E-13
  2.68E-13  6.83E-13  5.24E-12  3.65E-11
 -5.6959E-01 -2.4229E-01 -2.2587E-01 -2.0907E-01 -1.6477E-02  1.3883E-02
  4.1958E-02  7.9166E-02  1.0652E-01  4.1314E-01  4.3816E-01  4.6597E-01
  prteigrs : nnsclo,ikpt=  100   22 max resid (incl. the buffer)=  3.65058E-11
 Non-SCF case, kpt   23 (  0.50000  0.25000  0.75000), residuals and eigenvalues=
  8.68E-13  1.03E-13  2.59E-13  1.62E-13  3.75E-13  6.71E-13  3.19E-13  3.58E-13
  6.71E-13  8.35E-13  8.93E-13  2.00E-12
 -5.6914E-01 -2.3484E-01 -2.3484E-01 -2.1169E-01  9.4303E-05  9.4303E-05
  4.1962E-02  8.0993E-02  1.0681E-01  4.2247E-01  4.4975E-01  4.4975E-01
  prteigrs : nnsclo,ikpt=  100   23 max resid (incl. the buffer)=  2.00115E-12
 Non-SCF case, kpt   24 (  0.50000  0.27083  0.72917), residuals and eigenvalues=
  5.35E-13  1.79E-13  2.75E-13  6.46E-13  2.80E-13  7.07E-13  7.28E-13  6.93E-13
  7.98E-13  6.67E-13  3.59E-10  9.78E-10
 -5.6924E-01 -2.3862E-01 -2.3438E-01 -2.0937E-01 -1.2261E-04  1.8013E-04
  4.2142E-02  8.2622E-02  1.0855E-01  4.2310E-01  4.4276E-01  4.5075E-01
  prteigrs : nnsclo,ikpt=  100   24 max resid (incl. the buffer)=  9.77866E-10
 Non-SCF case, kpt   25 (  0.50000  0.29167  0.70833), residuals and eigenvalues=
  3.88E-13  1.00E-13  1.84E-13  6.72E-13  6.84E-13  1.63E-13  7.10E-13  7.87E-13
  3.82E-13  5.06E-13  6.04E-13  5.73E-13
 -5.6955E-01 -2.4709E-01 -2.3303E-01 -2.0520E-01 -6.2943E-04  6.5916E-04
  4.2476E-02  8.7314E-02  1.1363E-01  4.2477E-01  4.2501E-01  4.5370E-01
 Non-SCF case, kpt   26 (  0.50000  0.31250  0.68750), residuals and eigenvalues=
  9.41E-14  8.48E-13  6.20E-14  7.70E-13  6.52E-13  2.48E-13  7.42E-13  5.18E-13
  7.28E-13  7.95E-13  5.87E-13  6.14E-11
 -5.7003E-01 -2.5731E-01 -2.3089E-01 -2.0181E-01 -1.0610E-03  1.9628E-03
  4.2611E-02  9.4632E-02  1.2157E-01  4.0068E-01  4.2820E-01  4.5836E-01
  prteigrs : nnsclo,ikpt=  100   26 max resid (incl. the buffer)=  6.14106E-11
 Non-SCF case, kpt   27 (  0.50000  0.33333  0.66667), residuals and eigenvalues=
  1.35E-13  6.83E-13  4.90E-13  1.15E-13  1.83E-13  2.95E-13  7.10E-13  5.50E-13
  6.66E-13  5.28E-13  3.64E-13  8.86E-10
 -5.7065E-01 -2.6805E-01 -2.2810E-01 -1.9993E-01 -1.0162E-03  4.3295E-03
  4.2410E-02  1.0402E-01  1.3163E-01  3.7381E-01  4.3269E-01  4.6438E-01
  prteigrs : nnsclo,ikpt=  100   27 max resid (incl. the buffer)=  8.86185E-10
 Non-SCF case, kpt   28 (  0.50000  0.35417  0.64583), residuals and eigenvalues=
  1.35E-13  3.54E-13  4.09E-13  1.96E-13  4.61E-13  8.82E-13  1.55E-13  2.86E-13
  3.89E-13  4.11E-13  6.87E-13  2.82E-11
 -5.7138E-01 -2.7861E-01 -2.2484E-01 -1.9952E-01 -1.7709E-04  7.6036E-03
  4.2030E-02  1.1493E-01  1.4288E-01  3.4606E-01  4.3844E-01  4.7134E-01
  prteigrs : nnsclo,ikpt=  100   28 max resid (incl. the buffer)=  2.81544E-11
 Non-SCF case, kpt   29 (  0.50000  0.37500  0.62500), residuals and eigenvalues=
  1.64E-13  7.73E-13  1.01E-13  6.67E-13  4.11E-13  5.91E-13  4.57E-13  6.56E-13
  6.24E-13  3.34E-13  3.57E-10  2.63E-08
 -5.7214E-01 -2.8855E-01 -2.2134E-01 -2.0027E-01  1.6326E-03  1.1267E-02
  4.1824E-02  1.2684E-01  1.5445E-01  3.1864E-01  4.4536E-01  4.7875E-01
  prteigrs : nnsclo,ikpt=  100   29 max resid (incl. the buffer)=  2.63277E-08
 Non-SCF case, kpt   30 (  0.50000  0.39583  0.60417), residuals and eigenvalues=
  8.09E-13  8.36E-13  5.08E-13  3.76E-13  3.35E-13  3.74E-13  2.89E-13  1.80E-13
  4.41E-13  3.85E-13  1.38E-11  1.47E-12
 -5.7290E-01 -2.9750E-01 -2.1784E-01 -2.0173E-01  4.4194E-03  1.4616E-02
  4.2194E-02  1.3925E-01  1.6553E-01  2.9242E-01  4.5323E-01  4.8608E-01
  prteigrs : nnsclo,ikpt=  100   30 max resid (incl. the buffer)=  1.37693E-11
 Non-SCF case, kpt   31 (  0.50000  0.41667  0.58333), residuals and eigenvalues=
  2.24E-13  5.20E-13  4.67E-14  4.19E-13  8.11E-13  2.55E-13  5.88E-13  9.86E-13
  7.60E-13  4.88E-13  2.55E-09  2.01E-08
 -5.7360E-01 -3.0518E-01 -2.1459E-01 -2.0351E-01  7.9919E-03  1.7064E-02
  4.3376E-02  1.5168E-01  1.7548E-01  2.6811E-01  4.6167E-01  4.9277E-01
  prteigrs : nnsclo,ikpt=  100   31 max resid (incl. the buffer)=  2.00840E-08
 Non-SCF case, kpt   32 (  0.50000  0.43750  0.56250), residuals and eigenvalues=
  1.26E-13  4.38E-13  1.42E-13  1.14E-13  8.83E-14  3.91E-13  6.92E-13  5.61E-13
  9.57E-13  5.50E-13  5.56E-11  5.82E-11
 -5.7420E-01 -3.1138E-01 -2.1180E-01 -2.0523E-01  1.1942E-02  1.8458E-02
  4.5188E-02  1.6375E-01  1.8376E-01  2.4635E-01  4.7006E-01  4.9829E-01
  prteigrs : nnsclo,ikpt=  100   32 max resid (incl. the buffer)=  5.82441E-11
 Non-SCF case, kpt   33 (  0.50000  0.45833  0.54167), residuals and eigenvalues=
  1.15E-13  1.90E-13  1.13E-13  1.03E-13  2.47E-13  5.20E-13  8.99E-13  7.13E-13
  1.59E-13  9.23E-13  2.46E-08  1.92E-06
 -5.7465E-01 -3.1591E-01 -2.0967E-01 -2.0664E-01  1.5638E-02  1.9064E-02
  4.7078E-02  1.7524E-01  1.8996E-01  2.2758E-01  4.7752E-01  5.0221E-01
  prteigrs : nnsclo,ikpt=  100   33 max resid (incl. the buffer)=  1.91575E-06
 Non-SCF case, kpt   34 (  0.50000  0.47917  0.52083), residuals and eigenvalues=
  2.55E-13  7.47E-13  6.72E-14  6.93E-14  4.91E-13  5.40E-13  9.04E-13  4.30E-13
  3.13E-13  3.23E-13  1.35E-07  7.69E-06
 -5.7494E-01 -3.1868E-01 -2.0833E-01 -2.0756E-01  1.8313E-02  1.9258E-02
  4.8466E-02  1.8626E-01  1.9379E-01  2.1199E-01  4.8287E-01  5.0438E-01
  prteigrs : nnsclo,ikpt=  100   34 max resid (incl. the buffer)=  7.68735E-06
 Non-SCF case, kpt   35 (  0.50000  0.50000  0.50000), residuals and eigenvalues=
  7.28E-13  1.48E-13  8.97E-14  1.75E-13  4.22E-13  4.49E-13  4.45E-13  6.49E-13
  3.77E-13  1.39E-13  5.13E-10  3.84E-13
 -5.7503E-01 -3.1961E-01 -2.0788E-01 -2.0788E-01  1.9295E-02  1.9295E-02
  4.8971E-02  1.9509E-01  1.9509E-01  2.0160E-01  4.8486E-01  5.0502E-01
  prteigrs : nnsclo,ikpt=  100   35 max resid (incl. the buffer)=  5.13272E-10
 Non-SCF case, kpt   36 (  0.46667  0.46667  0.46667), residuals and eigenvalues=
  1.38E-13  3.81E-13  1.87E-13  2.31E-13  3.24E-13  5.29E-13  3.37E-13  3.43E-13
  2.44E-13  3.75E-13  1.54E-05  2.45E-13
 -5.7641E-01 -3.1740E-01 -2.0719E-01 -2.0719E-01  1.8309E-02  1.8309E-02
  4.6802E-02  1.9298E-01  1.9298E-01  2.0486E-01  4.8357E-01  5.0837E-01
  prteigrs : nnsclo,ikpt=  100   36 max resid (incl. the buffer)=  1.54191E-05
 Non-SCF case, kpt   37 (  0.43333  0.43333  0.43333), residuals and eigenvalues=
  9.52E-14  5.89E-14  7.73E-13  4.45E-13  8.58E-13  9.37E-13  7.49E-13  6.35E-13
  7.41E-13  1.76E-13  6.46E-06  8.95E-13
 -5.8037E-01 -3.1095E-01 -2.0514E-01 -2.0514E-01  1.5438E-02  1.5438E-02
  4.0935E-02  1.8682E-01  1.8682E-01  2.1377E-01  4.7982E-01  5.1821E-01
  prteigrs : nnsclo,ikpt=  100   37 max resid (incl. the buffer)=  6.45966E-06
 Non-SCF case, kpt   38 (  0.40000  0.40000  0.40000), residuals and eigenvalues=
  1.01E-13  4.91E-14  2.67E-13  2.72E-13  2.81E-13  2.06E-13  9.81E-14  5.84E-13
  8.11E-13  5.42E-13  2.54E-09  4.18E-13
 -5.8647E-01 -3.0069E-01 -2.0172E-01 -2.0172E-01  1.0908E-02  1.0908E-02
  3.2769E-02  1.7707E-01  1.7707E-01  2.2616E-01  4.7481E-01  5.3395E-01
  prteigrs : nnsclo,ikpt=  100   38 max resid (incl. the buffer)=  2.54055E-09
 Non-SCF case, kpt   39 (  0.36667  0.36667  0.36667), residuals and eigenvalues=
  7.54E-13  5.57E-13  1.52E-13  1.62E-13  6.07E-13  9.76E-13  8.94E-13  8.77E-13
  2.31E-13  6.61E-14  2.12E-10  2.80E-13
 -5.9413E-01 -2.8721E-01 -1.9696E-01 -1.9696E-01  5.0661E-03  5.0661E-03
  2.3630E-02  1.6434E-01  1.6434E-01  2.3934E-01  4.7020E-01  5.5482E-01
  prteigrs : nnsclo,ikpt=  100   39 max resid (incl. the buffer)=  2.11866E-10
 Non-SCF case, kpt   40 (  0.33333  0.33333  0.33333), residuals and eigenvalues=
  1.13E-13  1.80E-13  6.76E-13  3.49E-13  5.18E-13  1.37E-13  4.36E-13  3.16E-13
  5.49E-13  8.84E-14  1.73E-11  8.88E-13
 -6.0275E-01 -2.7112E-01 -1.9088E-01 -1.9088E-01 -1.6933E-03 -1.6933E-03
  1.4435E-02  1.4923E-01  1.4923E-01  2.5045E-01  4.6815E-01  5.7999E-01
  prteigrs : nnsclo,ikpt=  100   40 max resid (incl. the buffer)=  1.73195E-11
 Non-SCF case, kpt   41 (  0.30000  0.30000  0.30000), residuals and eigenvalues=
  3.45E-13  6.61E-13  1.56E-13  6.55E-13  6.72E-13  2.26E-13  2.49E-13  3.28E-13
  7.14E-13  6.76E-13  7.19E-12  1.41E-13
 -6.1180E-01 -2.5298E-01 -1.8350E-01 -1.8350E-01 -8.9720E-03 -8.9720E-03
  5.7075E-03  1.3230E-01  1.3230E-01  2.5687E-01  4.7066E-01  6.0864E-01
  prteigrs : nnsclo,ikpt=  100   41 max resid (incl. the buffer)=  7.19443E-12
 Non-SCF case, kpt   42 (  0.26667  0.26667  0.26667), residuals and eigenvalues=
  8.46E-13  9.88E-14  5.96E-13  1.52E-13  2.16E-13  8.97E-13  3.98E-13  8.09E-13
  2.24E-13  4.12E-13  5.88E-11  2.80E-10
 -6.2082E-01 -2.3329E-01 -1.7486E-01 -1.7486E-01 -1.6397E-02 -1.6397E-02
 -2.3259E-03  1.1406E-01  1.1406E-01  2.5708E-01  4.7835E-01  6.4000E-01
  prteigrs : nnsclo,ikpt=  100   42 max resid (incl. the buffer)=  2.79965E-10
 Non-SCF case, kpt   43 (  0.23333  0.23333  0.23333), residuals and eigenvalues=
  1.36E-13  6.56E-13  8.72E-13  3.51E-13  4.49E-13  6.18E-13  4.44E-13  9.12E-13
  9.44E-13  4.03E-13  3.92E-11  1.16E-08
 -6.2946E-01 -2.1254E-01 -1.6503E-01 -1.6503E-01 -2.3650E-02 -2.3650E-02
 -9.6438E-03  9.4958E-02  9.4958E-02  2.5131E-01  4.8944E-01  6.7326E-01
  prteigrs : nnsclo,ikpt=  100   43 max resid (incl. the buffer)=  1.16316E-08
 Non-SCF case, kpt   44 (  0.20000  0.20000  0.20000), residuals and eigenvalues=
  6.13E-13  9.58E-13  1.82E-13  7.97E-14  6.14E-13  5.75E-13  3.37E-13  4.88E-13
  9.23E-13  5.43E-13  2.31E-12  4.97E-05
 -6.3743E-01 -1.9115E-01 -1.5410E-01 -1.5410E-01 -3.0467E-02 -3.0467E-02
 -1.6380E-02  7.5419E-02  7.5419E-02  2.4110E-01  5.0011E-01  7.0778E-01
  prteigrs : nnsclo,ikpt=  100   44 max resid (incl. the buffer)=  4.97397E-05
 Non-SCF case, kpt   45 (  0.16667  0.16667  0.16667), residuals and eigenvalues=
  1.26E-13  2.13E-13  7.41E-13  1.15E-13  3.07E-13  1.41E-13  2.44E-13  8.19E-13
  8.57E-13  2.08E-13  7.04E-13  1.10E-05
 -6.4451E-01 -1.6960E-01 -1.4218E-01 -1.4218E-01 -3.6651E-02 -3.6651E-02
 -2.2798E-02  5.5875E-02  5.5875E-02  2.2839E-01  5.0648E-01  7.1646E-01
  prteigrs : nnsclo,ikpt=  100   45 max resid (incl. the buffer)=  1.10224E-05
 Non-SCF case, kpt   46 (  0.13333  0.13333  0.13333), residuals and eigenvalues=
  4.22E-13  1.00E-13  4.83E-13  3.85E-13  1.16E-13  8.84E-13  8.24E-13  1.29E-13
  4.04E-13  6.95E-13  2.73E-12  5.41E-04
 -6.5051E-01 -1.4843E-01 -1.2951E-01 -1.2951E-01 -4.2081E-02 -4.2081E-02
 -2.9257E-02  3.6815E-02  3.6815E-02  2.1499E-01  5.0717E-01  7.3880E-01
  prteigrs : nnsclo,ikpt=  100   46 max resid (incl. the buffer)=  5.41451E-04
 Non-SCF case, kpt   47 (  0.10000  0.10000  0.10000), residuals and eigenvalues=
  5.76E-13  6.87E-13  5.30E-13  3.89E-13  2.02E-13  2.64E-13  8.98E-13  1.36E-13
  4.01E-13  2.29E-13  7.49E-13  7.99E-05
 -6.5531E-01 -1.2828E-01 -1.1646E-01 -1.1646E-01 -4.6723E-02 -4.6723E-02
 -3.6153E-02  1.8914E-02  1.8914E-02  2.0250E-01  5.0388E-01  7.6629E-01
  prteigrs : nnsclo,ikpt=  100   47 max resid (incl. the buffer)=  7.99248E-05
 Non-SCF case, kpt   48 (  0.06667  0.06667  0.06667), residuals and eigenvalues=
  7.42E-13  1.27E-13  7.64E-14  2.26E-13  5.91E-13  9.96E-14  7.53E-13  7.64E-13
  5.31E-13  1.79E-13  1.51E-13  2.00E-04
 -6.5880E-01 -1.1005E-01 -1.0382E-01 -1.0382E-01 -5.0668E-02 -5.0668E-02
 -4.3735E-02  3.2733E-03  3.2733E-03  1.9232E-01  4.9938E-01  8.0244E-01
  prteigrs : nnsclo,ikpt=  100   48 max resid (incl. the buffer)=  1.99704E-04
 Non-SCF case, kpt   49 (  0.03333  0.03333  0.03333), residuals and eigenvalues=
  3.66E-13  5.61E-14  2.01E-13  1.41E-13  5.71E-13  2.09E-13  3.72E-13  1.14E-13
  3.34E-13  1.46E-13  6.09E-13  2.22E-04
 -6.6093E-01 -9.5412E-02 -9.3372E-02 -9.3372E-02 -5.3952E-02 -5.3952E-02
 -5.1424E-02 -8.1254E-03 -8.1254E-03  1.8563E-01  4.9585E-01  8.3928E-01
  prteigrs : nnsclo,ikpt=  100   49 max resid (incl. the buffer)=  2.22437E-04
 Non-SCF case, kpt   50 (  0.00000  0.00000  0.00000), residuals and eigenvalues=
  1.97E-13  4.91E-13  1.84E-13  4.05E-13  8.25E-13  9.63E-13  3.29E-13  4.51E-13
  2.68E-13  7.55E-13  2.20E-13  3.42E-06
 -6.6164E-01 -8.8881E-02 -8.8881E-02 -8.8881E-02 -5.5536E-02 -5.5536E-02
 -5.5536E-02 -1.2454E-02 -1.2454E-02  1.8330E-01  4.9455E-01  8.5146E-01
  prteigrs : nnsclo,ikpt=  100   50 max resid (incl. the buffer)=  3.41698E-06
 Non-SCF case, kpt   51 (  0.03333  0.03333  0.06667), residuals and eigenvalues=
  2.25E-13  1.50E-13  3.64E-13  1.67E-13  1.51E-13  5.55E-13  9.60E-13  3.73E-13
  6.29E-13  2.35E-13  2.05E-13  2.80E-04
 -6.5974E-01 -1.0489E-01 -1.0073E-01 -9.7520E-02 -5.4483E-02 -4.8117E-02
 -4.7340E-02 -6.6164E-03  2.6920E-03  1.8945E-01  4.9794E-01  8.2703E-01
  prteigrs : nnsclo,ikpt=  100   51 max resid (incl. the buffer)=  2.80360E-04
 Non-SCF case, kpt   52 (  0.06667  0.06667  0.13333), residuals and eigenvalues=
  5.35E-13  7.27E-13  6.42E-13  7.22E-13  1.91E-13  3.38E-13  2.45E-13  1.77E-13
  2.36E-13  2.97E-13  7.59E-13  4.08E-05
 -6.5417E-01 -1.3466E-01 -1.2308E-01 -1.1443E-01 -5.1362E-02 -3.5512E-02
 -3.4601E-02  6.4375E-03  3.4664E-02  2.0637E-01  5.0584E-01  7.4586E-01
  prteigrs : nnsclo,ikpt=  100   52 max resid (incl. the buffer)=  4.08019E-05
 Non-SCF case, kpt   53 (  0.10000  0.10000  0.20000), residuals and eigenvalues=
  9.66E-13  9.90E-13  1.28E-13  1.95E-13  8.14E-14  1.61E-13  3.48E-13  2.03E-13
  3.94E-13  6.54E-13  4.16E-13  9.52E-09
 -6.4524E-01 -1.6721E-01 -1.4531E-01 -1.3341E-01 -4.6290E-02 -2.2614E-02
 -2.0551E-02  2.0732E-02  7.1944E-02  2.2998E-01  5.1169E-01  6.7318E-01
  prteigrs : nnsclo,ikpt=  100   53 max resid (incl. the buffer)=  9.51723E-09
 Non-SCF case, kpt   54 (  0.13333  0.13333  0.26667), residuals and eigenvalues=
  1.33E-13  1.71E-13  2.06E-13  3.04E-13  6.62E-14  3.77E-13  7.79E-13  1.78E-13
  8.67E-13  3.04E-13  4.48E-11  3.50E-10
 -6.3353E-01 -1.9886E-01 -1.6455E-01 -1.5264E-01 -3.9462E-02 -8.1840E-03
 -7.0143E-03  3.4499E-02  1.1000E-01  2.5507E-01  5.0801E-01  6.0682E-01
  prteigrs : nnsclo,ikpt=  100   54 max resid (incl. the buffer)=  3.49861E-10
 Non-SCF case, kpt   55 (  0.16667  0.16667  0.33333), residuals and eigenvalues=
  1.24E-13  3.21E-13  1.46E-13  3.07E-13  1.02E-13  1.01E-13  3.68E-13  2.56E-13
  3.01E-13  8.64E-13  2.72E-12  1.09E-12
 -6.1991E-01 -2.2732E-01 -1.7991E-01 -1.7123E-01 -3.1154E-02  5.6649E-03
  6.4768E-03  4.7679E-02  1.4521E-01  2.7688E-01  4.9387E-01  5.5192E-01
  prteigrs : nnsclo,ikpt=  100   55 max resid (incl. the buffer)=  2.71563E-12
 Non-SCF case, kpt   56 (  0.20000  0.20000  0.40000), residuals and eigenvalues=
  7.57E-13  6.29E-14  3.88E-14  9.19E-13  1.81E-13  2.58E-13  2.01E-13  5.02E-13
  7.38E-13  2.06E-13  1.33E-13  9.90E-13
 -6.0560E-01 -2.5069E-01 -1.9106E-01 -1.8857E-01 -2.1721E-02  1.7128E-02
  1.8795E-02  5.9779E-02  1.7324E-01  2.9317E-01  4.7474E-01  5.1169E-01
 Non-SCF case, kpt   57 (  0.23333  0.23333  0.46667), residuals and eigenvalues=
  3.88E-13  7.18E-13  3.19E-13  4.72E-13  6.83E-13  1.78E-13  2.28E-13  1.33E-13
  1.95E-13  2.62E-13  3.36E-13  7.62E-13
 -5.9211E-01 -2.6717E-01 -2.0425E-01 -1.9786E-01 -1.1588E-02  2.5185E-02
  2.6919E-02  6.9786E-02  1.8905E-01  3.0698E-01  4.5608E-01  4.8511E-01
 Non-SCF case, kpt   58 (  0.26667  0.26667  0.53333), residuals and eigenvalues=
  2.15E-13  1.29E-13  6.48E-14  9.97E-14  2.13E-13  2.14E-13  6.18E-13  4.96E-13
  7.92E-13  2.13E-13  6.81E-13  1.72E-12
 -5.8110E-01 -2.7514E-01 -2.1806E-01 -2.0033E-01 -1.2304E-03  2.1606E-02
  3.4586E-02  7.7996E-02  1.8892E-01  3.2540E-01  4.4100E-01  4.6628E-01
  prteigrs : nnsclo,ikpt=  100   58 max resid (incl. the buffer)=  1.71705E-12
 Non-SCF case, kpt   59 (  0.30000  0.30000  0.60000), residuals and eigenvalues=
  6.25E-13  2.34E-13  4.25E-13  2.98E-13  6.58E-13  7.63E-13  1.31E-13  9.96E-13
  1.57E-13  3.39E-13  3.35E-12  5.31E-13
 -5.7385E-01 -2.7357E-01 -2.2987E-01 -1.9860E-01  7.1005E-03  8.8556E-03
  3.9856E-02  8.5654E-02  1.7322E-01  3.5221E-01  4.3074E-01  4.4922E-01
  prteigrs : nnsclo,ikpt=  100   59 max resid (incl. the buffer)=  3.34690E-12
 Non-SCF case, kpt   60 (  0.33333  0.33333  0.66667), residuals and eigenvalues=
  9.57E-13  3.66E-13  1.37E-13  9.53E-14  1.94E-13  4.16E-13  4.35E-13  7.96E-13
  4.68E-13  3.70E-13  1.81E-12  7.72E-13
 -5.7067E-01 -2.6264E-01 -2.3967E-01 -1.9291E-01 -1.4684E-02  1.8188E-02
  4.2794E-02  9.2607E-02  1.4639E-01  3.8071E-01  4.2523E-01  4.3651E-01
  prteigrs : nnsclo,ikpt=  100   60 max resid (incl. the buffer)=  1.80540E-12
 Non-SCF case, kpt   61 (  0.36667  0.36667  0.73333), residuals and eigenvalues=
  5.05E-13  1.41E-13  9.03E-13  2.95E-13  6.47E-13  3.69E-13  9.47E-13  8.39E-13
  5.85E-13  5.78E-13  4.02E-11  4.09E-11
 -5.7077E-01 -2.4752E-01 -2.4385E-01 -1.8375E-01 -3.9357E-02  2.6345E-02
  4.3826E-02  9.7983E-02  1.1406E-01  3.8159E-01  4.2352E-01  4.5470E-01
  prteigrs : nnsclo,ikpt=  100   61 max resid (incl. the buffer)=  4.08548E-11
 Non-SCF case, kpt   62 (  0.40000  0.40000  0.80000), residuals and eigenvalues=
  1.37E-13  2.68E-13  6.10E-13  3.69E-13  3.11E-13  3.09E-13  2.62E-13  7.84E-13
  9.41E-13  9.61E-13  2.89E-11  5.20E-08
 -5.7275E-01 -2.5348E-01 -2.1959E-01 -1.7201E-01 -6.4232E-02  3.2987E-02
  4.3610E-02  8.1125E-02  1.0115E-01  3.6116E-01  4.2419E-01  4.9705E-01
  prteigrs : nnsclo,ikpt=  100   62 max resid (incl. the buffer)=  5.20237E-08
 Non-SCF case, kpt   63 (  0.43333  0.43333  0.86667), residuals and eigenvalues=
  6.00E-14  1.32E-13  1.42E-13  1.40E-13  2.62E-13  3.79E-13  6.48E-13  7.30E-13
  9.16E-13  8.45E-13  2.63E-11  1.62E-07
 -5.7522E-01 -2.5766E-01 -1.9254E-01 -1.5937E-01 -8.8395E-02  3.7873E-02
  4.2849E-02  5.1872E-02  1.0212E-01  3.4067E-01  4.2583E-01  5.4302E-01
  prteigrs : nnsclo,ikpt=  100   63 max resid (incl. the buffer)=  1.61615E-07
 Non-SCF case, kpt   64 (  0.46667  0.46667  0.93333), residuals and eigenvalues=
  2.49E-13  1.59E-13  7.58E-13  4.69E-13  3.03E-13  4.04E-13  5.16E-13  3.85E-13
  2.55E-13  5.30E-13  7.06E-11  2.72E-07
 -5.7713E-01 -2.6013E-01 -1.6529E-01 -1.4883E-01 -1.1209E-01  3.0834E-02
  4.0857E-02  4.2136E-02  1.0174E-01  3.2654E-01  4.2729E-01  5.8538E-01
  prteigrs : nnsclo,ikpt=  100   64 max resid (incl. the buffer)=  2.72462E-07
 Non-SCF case, kpt   65 (  0.50000  0.50000  1.00000), residuals and eigenvalues=
  3.43E-13  7.58E-13  1.61E-13  1.56E-13  6.63E-13  5.44E-13  9.04E-13  6.07E-13
  3.26E-13  3.03E-13  1.30E-12  1.20E-06
 -5.7783E-01 -2.6095E-01 -1.4454E-01 -1.4454E-01 -1.3128E-01  2.2970E-02
  4.1859E-02  4.1859E-02  1.0137E-01  3.2156E-01  4.2785E-01  6.0839E-01
  prteigrs : nnsclo,ikpt=  100   65 max resid (incl. the buffer)=  1.20191E-06
 Non-SCF case, kpt   66 (  0.50000  0.45833  0.95833), residuals and eigenvalues=
  1.66E-13  1.40E-13  1.30E-13  1.49E-13  2.53E-13  2.75E-13  8.28E-13  7.93E-13
  4.61E-13  9.23E-13  5.46E-12  1.20E-07
 -5.7728E-01 -2.6031E-01 -1.6030E-01 -1.5064E-01 -1.1390E-01  2.8919E-02
  4.1268E-02  4.1866E-02  1.0171E-01  3.2552E-01  4.2743E-01  5.9019E-01
  prteigrs : nnsclo,ikpt=  100   66 max resid (incl. the buffer)=  1.20476E-07
 Non-SCF case, kpt   67 (  0.50000  0.41667  0.91667), residuals and eigenvalues=
  7.24E-13  2.28E-13  2.07E-13  3.74E-14  3.51E-13  7.26E-13  3.89E-13  5.68E-13
  9.28E-13  7.43E-13  4.04E-12  8.59E-09
 -5.7575E-01 -2.5835E-01 -1.7930E-01 -1.6547E-01 -9.0213E-02  3.9218E-02
  4.1886E-02  4.3006E-02  1.0264E-01  3.3759E-01  4.2662E-01  5.5757E-01
  prteigrs : nnsclo,ikpt=  100   67 max resid (incl. the buffer)=  8.59305E-09
 Non-SCF case, kpt   68 (  0.50000  0.37500  0.87500), residuals and eigenvalues=
  1.48E-13  2.48E-13  8.55E-13  9.48E-13  2.71E-13  1.52E-13  1.55E-13  6.56E-13
  4.09E-13  1.86E-13  1.07E-10  1.59E-08
 -5.7361E-01 -2.5499E-01 -1.9645E-01 -1.8281E-01 -6.5804E-02  3.4928E-02
  4.1911E-02  5.8525E-02  1.0397E-01  3.5770E-01  4.2668E-01  5.2442E-01
  prteigrs : nnsclo,ikpt=  100   68 max resid (incl. the buffer)=  1.58908E-08
 Non-SCF case, kpt   69 (  0.50000  0.33333  0.83333), residuals and eigenvalues=
  1.48E-13  1.68E-13  1.80E-13  7.57E-13  5.92E-13  9.84E-13  5.72E-13  8.77E-13
  6.97E-13  1.82E-13  4.95E-11  1.12E-08
 -5.7141E-01 -2.5006E-01 -2.1144E-01 -1.9799E-01 -4.1834E-02  2.7415E-02
  4.1939E-02  7.0945E-02  1.0536E-01  3.8396E-01  4.2941E-01  4.9436E-01
  prteigrs : nnsclo,ikpt=  100   69 max resid (incl. the buffer)=  1.12079E-08
 Non-SCF case, kpt   70 (  0.50000  0.29167  0.79167), residuals and eigenvalues=
  8.47E-14  8.98E-14  1.93E-13  5.19E-13  3.35E-13  2.94E-13  2.38E-13  8.08E-13
  4.00E-13  5.77E-13  6.05E-11  1.36E-09
 -5.6975E-01 -2.4340E-01 -2.2422E-01 -2.0814E-01 -1.9470E-02  1.5881E-02
  4.1957E-02  7.8503E-02  1.0642E-01  4.1012E-01  4.3666E-01  4.6911E-01
  prteigrs : nnsclo,ikpt=  100   70 max resid (incl. the buffer)=  1.35704E-09
 Non-SCF case, kpt   71 (  0.50000  0.25000  0.75000), residuals and eigenvalues=
  8.68E-13  1.03E-13  2.59E-13  1.62E-13  3.75E-13  6.71E-13  3.19E-13  3.58E-13
  6.71E-13  8.35E-13  8.93E-13  2.00E-12
 -5.6914E-01 -2.3484E-01 -2.3484E-01 -2.1169E-01  9.4303E-05  9.4303E-05
  4.1962E-02  8.0993E-02  1.0681E-01  4.2247E-01  4.4975E-01  4.4975E-01
  prteigrs : nnsclo,ikpt=  100   71 max resid (incl. the buffer)=  2.00115E-12
 Non-SCF case, kpt   72 (  0.50000  0.20833  0.70833), residuals and eigenvalues=
  2.29E-13  1.86E-13  4.61E-13  8.70E-13  4.65E-13  8.15E-13  8.88E-13  5.49E-13
  2.77E-13  6.23E-13  2.44E-12  4.94E-11
 -5.6975E-01 -2.4340E-01 -2.2422E-01 -2.0814E-01 -1.9470E-02  1.5881E-02
  4.1957E-02  7.8503E-02  1.0642E-01  4.1012E-01  4.3666E-01  4.6911E-01
  prteigrs : nnsclo,ikpt=  100   72 max resid (incl. the buffer)=  4.94280E-11
 Non-SCF case, kpt   73 (  0.50000  0.16667  0.66667), residuals and eigenvalues=
  3.20E-13  7.67E-14  7.85E-13  2.85E-13  8.73E-13  6.58E-13  2.54E-13  3.83E-13
  2.88E-13  4.41E-13  3.35E-09  3.33E-08
 -5.7141E-01 -2.5006E-01 -2.1144E-01 -1.9799E-01 -4.1834E-02  2.7415E-02
  4.1939E-02  7.0945E-02  1.0536E-01  3.8396E-01  4.2941E-01  4.9436E-01
  prteigrs : nnsclo,ikpt=  100   73 max resid (incl. the buffer)=  3.33258E-08
 Non-SCF case, kpt   74 (  0.50000  0.12500  0.62500), residuals and eigenvalues=
  1.36E-13  2.68E-13  2.33E-13  2.03E-13  4.54E-13  1.59E-13  3.74E-13  3.33E-13
  4.09E-13  1.70E-13  4.28E-10  4.20E-07
 -5.7361E-01 -2.5499E-01 -1.9645E-01 -1.8281E-01 -6.5804E-02  3.4928E-02
  4.1911E-02  5.8525E-02  1.0397E-01  3.5770E-01  4.2668E-01  5.2442E-01
  prteigrs : nnsclo,ikpt=  100   74 max resid (incl. the buffer)=  4.19868E-07
 Non-SCF case, kpt   75 (  0.50000  0.08333  0.58333), residuals and eigenvalues=
  3.56E-13  1.46E-13  8.54E-14  5.31E-13  9.86E-13  5.17E-13  3.53E-13  3.28E-13
  3.31E-13  5.53E-13  1.41E-12  8.55E-08
 -5.7575E-01 -2.5835E-01 -1.7930E-01 -1.6547E-01 -9.0213E-02  3.9218E-02
  4.1886E-02  4.3006E-02  1.0264E-01  3.3759E-01  4.2662E-01  5.5757E-01
  prteigrs : nnsclo,ikpt=  100   75 max resid (incl. the buffer)=  8.54653E-08
 Non-SCF case, kpt   76 (  0.50000  0.04167  0.54167), residuals and eigenvalues=
  1.66E-13  1.22E-13  1.18E-13  1.58E-13  9.77E-14  6.02E-13  7.43E-13  4.95E-13
  4.60E-13  7.54E-13  5.77E-12  9.43E-07
 -5.7728E-01 -2.6031E-01 -1.6030E-01 -1.5064E-01 -1.1390E-01  2.8919E-02
  4.1268E-02  4.1866E-02  1.0171E-01  3.2552E-01  4.2743E-01  5.9019E-01
  prteigrs : nnsclo,ikpt=  100   76 max resid (incl. the buffer)=  9.43116E-07
 Non-SCF case, kpt   77 (  0.50000  0.00000  0.50000), residuals and eigenvalues=
  1.46E-13  1.03E-13  2.79E-13  1.64E-13  1.13E-13  8.88E-14  9.21E-13  1.76E-13
  3.41E-13  1.94E-13  5.77E-13  1.00E-07
 -5.7783E-01 -2.6095E-01 -1.4454E-01 -1.4454E-01 -1.3128E-01  2.2970E-02
  4.1859E-02  4.1859E-02  1.0137E-01  3.2156E-01  4.2785E-01  6.0839E-01
  prteigrs : nnsclo,ikpt=  100   77 max resid (incl. the buffer)=  1.00316E-07
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   1.8608E-06; max=  5.4145E-04
   0.0000  0.0000  0.0000    1  3.41698E-06 kpt; spin; max resid(k); each band:
 1.97E-13 4.91E-13 1.84E-13 4.05E-13 8.25E-13 9.63E-13 3.29E-13 4.51E-13
 2.68E-13 7.55E-13 2.20E-13 3.42E-06
   0.0333  0.0000  0.0333    1  1.25919E-05 kpt; spin; max resid(k); each band:
 6.11E-14 4.87E-13 1.43E-13 7.08E-14 4.00E-13 7.36E-13 1.04E-13 2.79E-13
 1.30E-13 9.24E-13 2.39E-13 1.26E-05
   0.0667  0.0000  0.0667    1  6.27880E-06 kpt; spin; max resid(k); each band:
 6.12E-14 7.00E-14 1.55E-13 7.98E-13 4.73E-13 6.58E-14 5.30E-13 2.68E-13
 2.62E-13 1.54E-13 1.08E-12 6.28E-06
   0.1000  0.0000  0.1000    1  1.50188E-05 kpt; spin; max resid(k); each band:
 5.18E-13 1.66E-13 8.80E-14 2.25E-13 3.46E-13 7.20E-13 1.49E-13 2.33E-13
 3.13E-13 2.41E-13 6.27E-12 1.50E-05
   0.1333  0.0000  0.1333    1  1.75755E-04 kpt; spin; max resid(k); each band:
 1.26E-13 2.16E-13 2.17E-13 2.56E-13 1.16E-13 1.19E-13 1.24E-13 3.90E-13
 5.15E-13 8.20E-13 7.89E-13 1.76E-04
   0.1667  0.0000  0.1667    1  8.14955E-08 kpt; spin; max resid(k); each band:
 4.57E-13 2.86E-13 7.40E-13 3.09E-13 1.16E-13 8.43E-13 2.94E-13 4.61E-13
 1.82E-13 3.92E-13 3.68E-12 8.15E-08
   0.2000  0.0000  0.2000    1  2.03654E-09 kpt; spin; max resid(k); each band:
 7.98E-13 2.11E-13 3.44E-13 1.42E-13 2.88E-13 1.83E-13 2.79E-13 6.77E-13
 3.89E-13 4.53E-13 6.75E-10 2.04E-09
   0.2333  0.0000  0.2333    1  3.68491E-09 kpt; spin; max resid(k); each band:
 1.83E-13 5.59E-13 4.38E-13 4.85E-13 4.19E-13 3.78E-13 8.04E-13 6.09E-13
 6.67E-13 8.54E-13 3.68E-09 1.32E-11
   0.2667  0.0000  0.2667    1  4.45691E-10 kpt; spin; max resid(k); each band:
 1.35E-13 9.53E-13 3.75E-13 3.90E-13 2.28E-13 5.29E-13 7.23E-13 5.36E-13
 8.44E-13 8.00E-13 7.47E-12 4.46E-10
   0.3000  0.0000  0.3000    1  8.82642E-09 kpt; spin; max resid(k); each band:
 8.73E-14 7.69E-13 4.54E-13 3.68E-13 2.49E-13 1.32E-13 5.79E-13 1.85E-13
 6.64E-13 4.44E-13 5.47E-13 8.83E-09
   0.3333  0.0000  0.3333    1  2.70430E-08 kpt; spin; max resid(k); each band:
 1.13E-13 4.97E-13 2.62E-13 1.72E-13 6.34E-13 9.90E-13 6.01E-13 1.29E-13
 3.53E-13 2.37E-13 2.75E-13 2.70E-08
   0.3667  0.0000  0.3667    1  3.41907E-05 kpt; spin; max resid(k); each band:
 1.86E-13 7.44E-13 2.69E-13 4.66E-13 3.67E-13 2.71E-13 1.88E-13 1.29E-13
 4.32E-13 6.09E-13 2.22E-11 3.42E-05
   0.4000  0.0000  0.4000    1  1.95529E-06 kpt; spin; max resid(k); each band:
 3.83E-13 6.26E-13 2.59E-13 3.51E-13 4.49E-13 6.43E-13 6.09E-13 2.52E-13
 5.40E-13 3.05E-13 1.38E-12 1.96E-06
   0.4333  0.0000  0.4333    1  3.57302E-07 kpt; spin; max resid(k); each band:
 7.11E-13 7.15E-13 2.19E-13 2.69E-13 2.13E-13 6.23E-13 4.61E-13 1.56E-13
 5.80E-13 6.32E-13 1.37E-12 3.57E-07
   0.4667  0.0000  0.4667    1  2.18090E-06 kpt; spin; max resid(k); each band:
 1.80E-13 7.04E-14 1.25E-13 2.06E-13 3.75E-13 4.49E-13 7.66E-13 4.72E-13
 9.75E-13 2.48E-13 1.22E-11 2.18E-06
   0.5000  0.0000  0.5000    1  1.00316E-07 kpt; spin; max resid(k); each band:
 1.46E-13 1.03E-13 2.79E-13 1.64E-13 1.13E-13 8.88E-14 9.21E-13 1.76E-13
 3.41E-13 1.94E-13 5.77E-13 1.00E-07
   0.5000  0.0357  0.5357    1  2.53490E-06 kpt; spin; max resid(k); each band:
 2.36E-13 8.18E-14 4.22E-13 6.74E-13 6.86E-13 1.36E-13 7.85E-13 4.95E-13
 1.87E-13 2.67E-13 1.04E-11 2.53E-06
   0.5000  0.0714  0.5714    1  8.31585E-07 kpt; spin; max resid(k); each band:
 1.24E-13 5.19E-13 5.98E-13 3.14E-13 2.75E-13 5.40E-13 8.57E-13 1.26E-13
 2.45E-13 4.70E-13 7.79E-13 8.32E-07
   0.5000  0.1071  0.6071    1  6.82275E-09 kpt; spin; max resid(k); each band:
 6.62E-13 4.45E-13 9.67E-13 3.44E-13 3.92E-13 2.87E-13 9.05E-13 2.66E-13
 9.64E-13 1.03E-13 2.33E-12 6.82E-09
   0.5000  0.1429  0.6429    1  3.18483E-08 kpt; spin; max resid(k); each band:
 1.40E-13 8.67E-14 3.18E-13 8.69E-14 3.42E-13 3.95E-13 5.90E-13 2.42E-13
 6.68E-13 4.54E-13 6.84E-11 3.18E-08
   0.5000  0.1786  0.6786    1  3.17363E-09 kpt; spin; max resid(k); each band:
 3.61E-13 9.40E-13 5.72E-13 2.28E-13 2.29E-13 4.19E-13 3.71E-13 6.28E-13
 2.15E-13 5.28E-13 6.32E-11 3.17E-09
   0.5000  0.2143  0.7143    1  3.65058E-11 kpt; spin; max resid(k); each band:
 2.42E-13 1.92E-13 4.41E-13 7.98E-13 5.06E-13 1.42E-13 9.64E-13 4.43E-13
 2.68E-13 6.83E-13 5.24E-12 3.65E-11
   0.5000  0.2500  0.7500    1  2.00115E-12 kpt; spin; max resid(k); each band:
 8.68E-13 1.03E-13 2.59E-13 1.62E-13 3.75E-13 6.71E-13 3.19E-13 3.58E-13
 6.71E-13 8.35E-13 8.93E-13 2.00E-12
   0.5000  0.2708  0.7292    1  9.77866E-10 kpt; spin; max resid(k); each band:
 5.35E-13 1.79E-13 2.75E-13 6.46E-13 2.80E-13 7.07E-13 7.28E-13 6.93E-13
 7.98E-13 6.67E-13 3.59E-10 9.78E-10
   0.5000  0.2917  0.7083    1  7.86925E-13 kpt; spin; max resid(k); each band:
 3.88E-13 1.00E-13 1.84E-13 6.72E-13 6.84E-13 1.63E-13 7.10E-13 7.87E-13
 3.82E-13 5.06E-13 6.04E-13 5.73E-13
   0.5000  0.3125  0.6875    1  6.14106E-11 kpt; spin; max resid(k); each band:
 9.41E-14 8.48E-13 6.20E-14 7.70E-13 6.52E-13 2.48E-13 7.42E-13 5.18E-13
 7.28E-13 7.95E-13 5.87E-13 6.14E-11
   0.5000  0.3333  0.6667    1  8.86185E-10 kpt; spin; max resid(k); each band:
 1.35E-13 6.83E-13 4.90E-13 1.15E-13 1.83E-13 2.95E-13 7.10E-13 5.50E-13
 6.66E-13 5.28E-13 3.64E-13 8.86E-10
   0.5000  0.3542  0.6458    1  2.81544E-11 kpt; spin; max resid(k); each band:
 1.35E-13 3.54E-13 4.09E-13 1.96E-13 4.61E-13 8.82E-13 1.55E-13 2.86E-13
 3.89E-13 4.11E-13 6.87E-13 2.82E-11
   0.5000  0.3750  0.6250    1  2.63277E-08 kpt; spin; max resid(k); each band:
 1.64E-13 7.73E-13 1.01E-13 6.67E-13 4.11E-13 5.91E-13 4.57E-13 6.56E-13
 6.24E-13 3.34E-13 3.57E-10 2.63E-08
   0.5000  0.3958  0.6042    1  1.37693E-11 kpt; spin; max resid(k); each band:
 8.09E-13 8.36E-13 5.08E-13 3.76E-13 3.35E-13 3.74E-13 2.89E-13 1.80E-13
 4.41E-13 3.85E-13 1.38E-11 1.47E-12
   0.5000  0.4167  0.5833    1  2.00840E-08 kpt; spin; max resid(k); each band:
 2.24E-13 5.20E-13 4.67E-14 4.19E-13 8.11E-13 2.55E-13 5.88E-13 9.86E-13
 7.60E-13 4.88E-13 2.55E-09 2.01E-08
   0.5000  0.4375  0.5625    1  5.82441E-11 kpt; spin; max resid(k); each band:
 1.26E-13 4.38E-13 1.42E-13 1.14E-13 8.83E-14 3.91E-13 6.92E-13 5.61E-13
 9.57E-13 5.50E-13 5.56E-11 5.82E-11
   0.5000  0.4583  0.5417    1  1.91575E-06 kpt; spin; max resid(k); each band:
 1.15E-13 1.90E-13 1.13E-13 1.03E-13 2.47E-13 5.20E-13 8.99E-13 7.13E-13
 1.59E-13 9.23E-13 2.46E-08 1.92E-06
   0.5000  0.4792  0.5208    1  7.68735E-06 kpt; spin; max resid(k); each band:
 2.55E-13 7.47E-13 6.72E-14 6.93E-14 4.91E-13 5.40E-13 9.04E-13 4.30E-13
 3.13E-13 3.23E-13 1.35E-07 7.69E-06
   0.5000  0.5000  0.5000    1  5.13272E-10 kpt; spin; max resid(k); each band:
 7.28E-13 1.48E-13 8.97E-14 1.75E-13 4.22E-13 4.49E-13 4.45E-13 6.49E-13
 3.77E-13 1.39E-13 5.13E-10 3.84E-13
   0.4667  0.4667  0.4667    1  1.54191E-05 kpt; spin; max resid(k); each band:
 1.38E-13 3.81E-13 1.87E-13 2.31E-13 3.24E-13 5.29E-13 3.37E-13 3.43E-13
 2.44E-13 3.75E-13 1.54E-05 2.45E-13
   0.4333  0.4333  0.4333    1  6.45966E-06 kpt; spin; max resid(k); each band:
 9.52E-14 5.89E-14 7.73E-13 4.45E-13 8.58E-13 9.37E-13 7.49E-13 6.35E-13
 7.41E-13 1.76E-13 6.46E-06 8.95E-13
   0.4000  0.4000  0.4000    1  2.54055E-09 kpt; spin; max resid(k); each band:
 1.01E-13 4.91E-14 2.67E-13 2.72E-13 2.81E-13 2.06E-13 9.81E-14 5.84E-13
 8.11E-13 5.42E-13 2.54E-09 4.18E-13
   0.3667  0.3667  0.3667    1  2.11866E-10 kpt; spin; max resid(k); each band:
 7.54E-13 5.57E-13 1.52E-13 1.62E-13 6.07E-13 9.76E-13 8.94E-13 8.77E-13
 2.31E-13 6.61E-14 2.12E-10 2.80E-13
   0.3333  0.3333  0.3333    1  1.73195E-11 kpt; spin; max resid(k); each band:
 1.13E-13 1.80E-13 6.76E-13 3.49E-13 5.18E-13 1.37E-13 4.36E-13 3.16E-13
 5.49E-13 8.84E-14 1.73E-11 8.88E-13
   0.3000  0.3000  0.3000    1  7.19443E-12 kpt; spin; max resid(k); each band:
 3.45E-13 6.61E-13 1.56E-13 6.55E-13 6.72E-13 2.26E-13 2.49E-13 3.28E-13
 7.14E-13 6.76E-13 7.19E-12 1.41E-13
   0.2667  0.2667  0.2667    1  2.79965E-10 kpt; spin; max resid(k); each band:
 8.46E-13 9.88E-14 5.96E-13 1.52E-13 2.16E-13 8.97E-13 3.98E-13 8.09E-13
 2.24E-13 4.12E-13 5.88E-11 2.80E-10
   0.2333  0.2333  0.2333    1  1.16316E-08 kpt; spin; max resid(k); each band:
 1.36E-13 6.56E-13 8.72E-13 3.51E-13 4.49E-13 6.18E-13 4.44E-13 9.12E-13
 9.44E-13 4.03E-13 3.92E-11 1.16E-08
   0.2000  0.2000  0.2000    1  4.97397E-05 kpt; spin; max resid(k); each band:
 6.13E-13 9.58E-13 1.82E-13 7.97E-14 6.14E-13 5.75E-13 3.37E-13 4.88E-13
 9.23E-13 5.43E-13 2.31E-12 4.97E-05
   0.1667  0.1667  0.1667    1  1.10224E-05 kpt; spin; max resid(k); each band:
 1.26E-13 2.13E-13 7.41E-13 1.15E-13 3.07E-13 1.41E-13 2.44E-13 8.19E-13
 8.57E-13 2.08E-13 7.04E-13 1.10E-05
   0.1333  0.1333  0.1333    1  5.41451E-04 kpt; spin; max resid(k); each band:
 4.22E-13 1.00E-13 4.83E-13 3.85E-13 1.16E-13 8.84E-13 8.24E-13 1.29E-13
 4.04E-13 6.95E-13 2.73E-12 5.41E-04
   0.1000  0.1000  0.1000    1  7.99248E-05 kpt; spin; max resid(k); each band:
 5.76E-13 6.87E-13 5.30E-13 3.89E-13 2.02E-13 2.64E-13 8.98E-13 1.36E-13
 4.01E-13 2.29E-13 7.49E-13 7.99E-05
   0.0667  0.0667  0.0667    1  1.99704E-04 kpt; spin; max resid(k); each band:
 7.42E-13 1.27E-13 7.64E-14 2.26E-13 5.91E-13 9.96E-14 7.53E-13 7.64E-13
 5.31E-13 1.79E-13 1.51E-13 2.00E-04
   0.0333  0.0333  0.0333    1  2.22437E-04 kpt; spin; max resid(k); each band:
 3.66E-13 5.61E-14 2.01E-13 1.41E-13 5.71E-13 2.09E-13 3.72E-13 1.14E-13
 3.34E-13 1.46E-13 6.09E-13 2.22E-04
   0.0000  0.0000  0.0000    1  3.41698E-06 kpt; spin; max resid(k); each band:
 1.97E-13 4.91E-13 1.84E-13 4.05E-13 8.25E-13 9.63E-13 3.29E-13 4.51E-13
 2.68E-13 7.55E-13 2.20E-13 3.42E-06
 outwf : prtvol=0 or 1, do not print more k-points.

 reduced coordinates (array xred) for    2 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.500000000000      0.500000000000      0.500000000000

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      2.10021811283020     2.10021811283020     2.10021811283020
 length scales=  7.937674105150  7.937674105150  7.937674105150 bohr
              =  4.200436225660  4.200436225660  4.200436225660 angstroms
 prteigrs : about to open file t11o_DS2_EIG
 Eigenvalues (hartree) for nkpt=  77  k points:
 kpt#   1, nband= 12, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.66164  -0.08888  -0.08888  -0.08888  -0.05554  -0.05554  -0.05554  -0.01245
  -0.01245   0.18330   0.49455   0.85146
 kpt#   2, nband= 12, wtk=  1.00000, kpt=  0.0333  0.0000  0.0333 (reduced coord)
  -0.66069  -0.09963  -0.09340  -0.09340  -0.05659  -0.05005  -0.05005  -0.01211
  -0.00241   0.18645   0.49632   0.83391
 kpt#   3, nband= 12, wtk=  1.00000, kpt=  0.0667  0.0000  0.0667 (reduced coord)
  -0.65788  -0.12232  -0.10242  -0.10242  -0.05966  -0.03823  -0.03823  -0.01107
   0.01796   0.19598   0.50148   0.80016
 kpt#   4, nband= 12, wtk=  1.00000, kpt=  0.1000  0.0000  0.1000 (reduced coord)
  -0.65332  -0.14769  -0.11187  -0.11187  -0.06450  -0.02438  -0.02438  -0.00938
   0.03908   0.21183   0.50957   0.76479
 kpt#   5, nband= 12, wtk=  1.00000, kpt=  0.1333  0.0000  0.1333 (reduced coord)
  -0.64717  -0.17245  -0.12049  -0.12049  -0.07076  -0.01014  -0.01014  -0.00709
   0.05771   0.23325   0.51990   0.73223
 kpt#   6, nband= 12, wtk=  1.00000, kpt=  0.1667  0.0000  0.1667 (reduced coord)
  -0.63971  -0.19523  -0.12788  -0.12788  -0.07800  -0.00429   0.00356   0.00356
   0.07321   0.25850   0.53168   0.67715
 kpt#   7, nband= 12, wtk=  1.00000, kpt=  0.2000  0.0000  0.2000 (reduced coord)
  -0.63127  -0.21526  -0.13390  -0.13390  -0.08580  -0.00106   0.01599   0.01599
   0.08590   0.28506   0.54407   0.62077
 kpt#   8, nband= 12, wtk=  1.00000, kpt=  0.2333  0.0000  0.2333 (reduced coord)
  -0.62225  -0.23205  -0.13855  -0.13855  -0.09376   0.00247   0.02650   0.02650
   0.09623   0.31007   0.55634   0.56856
 kpt#   9, nband= 12, wtk=  1.00000, kpt=  0.2667  0.0000  0.2667 (reduced coord)
  -0.61312  -0.24528  -0.14188  -0.14188  -0.10152   0.00616   0.03463   0.03463
   0.10437   0.33061   0.52247   0.56792
 kpt#  10, nband= 12, wtk=  1.00000, kpt=  0.3000  0.0000  0.3000 (reduced coord)
  -0.60438  -0.25481  -0.14403  -0.14403  -0.10879   0.00985   0.04017   0.04017
   0.11016   0.34377   0.48497   0.57837
 kpt#  11, nband= 12, wtk=  1.00000, kpt=  0.3333  0.0000  0.3333 (reduced coord)
  -0.59648  -0.26074  -0.14517  -0.14517  -0.11530   0.01337   0.04325   0.04325
   0.11320   0.34737   0.45863   0.58742
 kpt#  12, nband= 12, wtk=  1.00000, kpt=  0.3667  0.0000  0.3667 (reduced coord)
  -0.58977  -0.26348  -0.14553  -0.14553  -0.12087   0.01655   0.04430   0.04430
   0.11323   0.34244   0.44350   0.59495
 kpt#  13, nband= 12, wtk=  1.00000, kpt=  0.4000  0.0000  0.4000 (reduced coord)
  -0.58451  -0.26380  -0.14539  -0.14539  -0.12535   0.01923   0.04399   0.04399
   0.11057   0.33410   0.43568   0.60081
 kpt#  14, nband= 12, wtk=  1.00000, kpt=  0.4333  0.0000  0.4333 (reduced coord)
  -0.58077  -0.26275  -0.14502  -0.14502  -0.12862   0.02127   0.04307   0.04307
   0.10646   0.32703   0.43128   0.60502
 kpt#  15, nband= 12, wtk=  1.00000, kpt=  0.4667  0.0000  0.4667 (reduced coord)
  -0.57856  -0.26149  -0.14468  -0.14468  -0.13061   0.02254   0.04220   0.04220
   0.10281   0.32287   0.42873   0.60756
 kpt#  16, nband= 12, wtk=  1.00000, kpt=  0.5000  0.0000  0.5000 (reduced coord)
  -0.57783  -0.26095  -0.14454  -0.14454  -0.13128   0.02297   0.04186   0.04186
   0.10137   0.32156   0.42785   0.60839
 kpt#  17, nband= 12, wtk=  1.00000, kpt=  0.5000  0.0357  0.5357 (reduced coord)
  -0.57742  -0.26048  -0.15751  -0.14909  -0.11712   0.02741   0.04143   0.04186
   0.10162   0.32447   0.42754   0.59431
 kpt#  18, nband= 12, wtk=  1.00000, kpt=  0.5000  0.0714  0.5714 (reduced coord)
  -0.57627  -0.25905  -0.17403  -0.16072  -0.09711   0.03856   0.03999   0.04188
   0.10232   0.33330   0.42683   0.56721
 kpt#  19, nband= 12, wtk=  1.00000, kpt=  0.5000  0.1071  0.6071 (reduced coord)
  -0.57457  -0.25661  -0.18935  -0.17542  -0.07628   0.03710   0.04190   0.05206
   0.10337   0.34815   0.42644   0.53839
 kpt#  20, nband= 12, wtk=  1.00000, kpt=  0.5000  0.1429  0.6429 (reduced coord)
  -0.57264  -0.25307  -0.20315  -0.18978  -0.05541   0.03216   0.04192   0.06438
   0.10458   0.36843   0.42741   0.51104
 kpt#  21, nband= 12, wtk=  1.00000, kpt=  0.5000  0.1786  0.6786 (reduced coord)
  -0.57085  -0.24834  -0.21532  -0.20149  -0.03523   0.02455   0.04195   0.07363
   0.10572   0.39188   0.43095   0.48659
 kpt#  22, nband= 12, wtk=  1.00000, kpt=  0.5000  0.2143  0.7143 (reduced coord)
  -0.56959  -0.24229  -0.22587  -0.20907  -0.01648   0.01388   0.04196   0.07917
   0.10652   0.41314   0.43816   0.46597
 kpt#  23, nband= 12, wtk=  1.00000, kpt=  0.5000  0.2500  0.7500 (reduced coord)
  -0.56914  -0.23484  -0.23484  -0.21169   0.00009   0.00009   0.04196   0.08099
   0.10681   0.42247   0.44975   0.44975
 kpt#  24, nband= 12, wtk=  1.00000, kpt=  0.5000  0.2708  0.7292 (reduced coord)
  -0.56924  -0.23862  -0.23438  -0.20937  -0.00012   0.00018   0.04214   0.08262
   0.10855   0.42310   0.44276   0.45075
 kpt#  25, nband= 12, wtk=  1.00000, kpt=  0.5000  0.2917  0.7083 (reduced coord)
  -0.56955  -0.24709  -0.23303  -0.20520  -0.00063   0.00066   0.04248   0.08731
   0.11363   0.42477   0.42501   0.45370
 kpt#  26, nband= 12, wtk=  1.00000, kpt=  0.5000  0.3125  0.6875 (reduced coord)
  -0.57003  -0.25731  -0.23089  -0.20181  -0.00106   0.00196   0.04261   0.09463
   0.12157   0.40068   0.42820   0.45836
 kpt#  27, nband= 12, wtk=  1.00000, kpt=  0.5000  0.3333  0.6667 (reduced coord)
  -0.57065  -0.26805  -0.22810  -0.19993  -0.00102   0.00433   0.04241   0.10402
   0.13163   0.37381   0.43269   0.46438
 kpt#  28, nband= 12, wtk=  1.00000, kpt=  0.5000  0.3542  0.6458 (reduced coord)
  -0.57138  -0.27861  -0.22484  -0.19952  -0.00018   0.00760   0.04203   0.11493
   0.14288   0.34606   0.43844   0.47134
 kpt#  29, nband= 12, wtk=  1.00000, kpt=  0.5000  0.3750  0.6250 (reduced coord)
  -0.57214  -0.28855  -0.22134  -0.20027   0.00163   0.01127   0.04182   0.12684
   0.15445   0.31864   0.44536   0.47875
 kpt#  30, nband= 12, wtk=  1.00000, kpt=  0.5000  0.3958  0.6042 (reduced coord)
  -0.57290  -0.29750  -0.21784  -0.20173   0.00442   0.01462   0.04219   0.13925
   0.16553   0.29242   0.45323   0.48608
 kpt#  31, nband= 12, wtk=  1.00000, kpt=  0.5000  0.4167  0.5833 (reduced coord)
  -0.57360  -0.30518  -0.21459  -0.20351   0.00799   0.01706   0.04338   0.15168
   0.17548   0.26811   0.46167   0.49277
 kpt#  32, nband= 12, wtk=  1.00000, kpt=  0.5000  0.4375  0.5625 (reduced coord)
  -0.57420  -0.31138  -0.21180  -0.20523   0.01194   0.01846   0.04519   0.16375
   0.18376   0.24635   0.47006   0.49829
 kpt#  33, nband= 12, wtk=  1.00000, kpt=  0.5000  0.4583  0.5417 (reduced coord)
  -0.57465  -0.31591  -0.20967  -0.20664   0.01564   0.01906   0.04708   0.17524
   0.18996   0.22758   0.47752   0.50221
 kpt#  34, nband= 12, wtk=  1.00000, kpt=  0.5000  0.4792  0.5208 (reduced coord)
  -0.57494  -0.31868  -0.20833  -0.20756   0.01831   0.01926   0.04847   0.18626
   0.19379   0.21199   0.48287   0.50438
 kpt#  35, nband= 12, wtk=  1.00000, kpt=  0.5000  0.5000  0.5000 (reduced coord)
  -0.57503  -0.31961  -0.20788  -0.20788   0.01930   0.01930   0.04897   0.19509
   0.19509   0.20160   0.48486   0.50502
 kpt#  36, nband= 12, wtk=  1.00000, kpt=  0.4667  0.4667  0.4667 (reduced coord)
  -0.57641  -0.31740  -0.20719  -0.20719   0.01831   0.01831   0.04680   0.19298
   0.19298   0.20486   0.48357   0.50837
 kpt#  37, nband= 12, wtk=  1.00000, kpt=  0.4333  0.4333  0.4333 (reduced coord)
  -0.58037  -0.31095  -0.20514  -0.20514   0.01544   0.01544   0.04094   0.18682
   0.18682   0.21377   0.47982   0.51821
 kpt#  38, nband= 12, wtk=  1.00000, kpt=  0.4000  0.4000  0.4000 (reduced coord)
  -0.58647  -0.30069  -0.20172  -0.20172   0.01091   0.01091   0.03277   0.17707
   0.17707   0.22616   0.47481   0.53395
 kpt#  39, nband= 12, wtk=  1.00000, kpt=  0.3667  0.3667  0.3667 (reduced coord)
  -0.59413  -0.28721  -0.19696  -0.19696   0.00507   0.00507   0.02363   0.16434
   0.16434   0.23934   0.47020   0.55482
 kpt#  40, nband= 12, wtk=  1.00000, kpt=  0.3333  0.3333  0.3333 (reduced coord)
  -0.60275  -0.27112  -0.19088  -0.19088  -0.00169  -0.00169   0.01443   0.14923
   0.14923   0.25045   0.46815   0.57999
 kpt#  41, nband= 12, wtk=  1.00000, kpt=  0.3000  0.3000  0.3000 (reduced coord)
  -0.61180  -0.25298  -0.18350  -0.18350  -0.00897  -0.00897   0.00571   0.13230
   0.13230   0.25687   0.47066   0.60864
 kpt#  42, nband= 12, wtk=  1.00000, kpt=  0.2667  0.2667  0.2667 (reduced coord)
  -0.62082  -0.23329  -0.17486  -0.17486  -0.01640  -0.01640  -0.00233   0.11406
   0.11406   0.25708   0.47835   0.64000
 kpt#  43, nband= 12, wtk=  1.00000, kpt=  0.2333  0.2333  0.2333 (reduced coord)
  -0.62946  -0.21254  -0.16503  -0.16503  -0.02365  -0.02365  -0.00964   0.09496
   0.09496   0.25131   0.48944   0.67326
 kpt#  44, nband= 12, wtk=  1.00000, kpt=  0.2000  0.2000  0.2000 (reduced coord)
  -0.63743  -0.19115  -0.15410  -0.15410  -0.03047  -0.03047  -0.01638   0.07542
   0.07542   0.24110   0.50011   0.70778
 kpt#  45, nband= 12, wtk=  1.00000, kpt=  0.1667  0.1667  0.1667 (reduced coord)
  -0.64451  -0.16960  -0.14218  -0.14218  -0.03665  -0.03665  -0.02280   0.05587
   0.05587   0.22839   0.50648   0.71646
 kpt#  46, nband= 12, wtk=  1.00000, kpt=  0.1333  0.1333  0.1333 (reduced coord)
  -0.65051  -0.14843  -0.12951  -0.12951  -0.04208  -0.04208  -0.02926   0.03682
   0.03682   0.21499   0.50717   0.73880
 kpt#  47, nband= 12, wtk=  1.00000, kpt=  0.1000  0.1000  0.1000 (reduced coord)
  -0.65531  -0.12828  -0.11646  -0.11646  -0.04672  -0.04672  -0.03615   0.01891
   0.01891   0.20250   0.50388   0.76629
 kpt#  48, nband= 12, wtk=  1.00000, kpt=  0.0667  0.0667  0.0667 (reduced coord)
  -0.65880  -0.11005  -0.10382  -0.10382  -0.05067  -0.05067  -0.04374   0.00327
   0.00327   0.19232   0.49938   0.80244
 kpt#  49, nband= 12, wtk=  1.00000, kpt=  0.0333  0.0333  0.0333 (reduced coord)
  -0.66093  -0.09541  -0.09337  -0.09337  -0.05395  -0.05395  -0.05142  -0.00813
  -0.00813   0.18563   0.49585   0.83928
 kpt#  50, nband= 12, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.66164  -0.08888  -0.08888  -0.08888  -0.05554  -0.05554  -0.05554  -0.01245
  -0.01245   0.18330   0.49455   0.85146
 kpt#  51, nband= 12, wtk=  1.00000, kpt=  0.0333  0.0333  0.0667 (reduced coord)
  -0.65974  -0.10489  -0.10073  -0.09752  -0.05448  -0.04812  -0.04734  -0.00662
   0.00269   0.18945   0.49794   0.82703
 kpt#  52, nband= 12, wtk=  1.00000, kpt=  0.0667  0.0667  0.1333 (reduced coord)
  -0.65417  -0.13466  -0.12308  -0.11443  -0.05136  -0.03551  -0.03460   0.00644
   0.03466   0.20637   0.50584   0.74586
 kpt#  53, nband= 12, wtk=  1.00000, kpt=  0.1000  0.1000  0.2000 (reduced coord)
  -0.64524  -0.16721  -0.14531  -0.13341  -0.04629  -0.02261  -0.02055   0.02073
   0.07194   0.22998   0.51169   0.67318
 kpt#  54, nband= 12, wtk=  1.00000, kpt=  0.1333  0.1333  0.2667 (reduced coord)
  -0.63353  -0.19886  -0.16455  -0.15264  -0.03946  -0.00818  -0.00701   0.03450
   0.11000   0.25507   0.50801   0.60682
 kpt#  55, nband= 12, wtk=  1.00000, kpt=  0.1667  0.1667  0.3333 (reduced coord)
  -0.61991  -0.22732  -0.17991  -0.17123  -0.03115   0.00566   0.00648   0.04768
   0.14521   0.27688   0.49387   0.55192
 kpt#  56, nband= 12, wtk=  1.00000, kpt=  0.2000  0.2000  0.4000 (reduced coord)
  -0.60560  -0.25069  -0.19106  -0.18857  -0.02172   0.01713   0.01879   0.05978
   0.17324   0.29317   0.47474   0.51169
 kpt#  57, nband= 12, wtk=  1.00000, kpt=  0.2333  0.2333  0.4667 (reduced coord)
  -0.59211  -0.26717  -0.20425  -0.19786  -0.01159   0.02519   0.02692   0.06979
   0.18905   0.30698   0.45608   0.48511
 kpt#  58, nband= 12, wtk=  1.00000, kpt=  0.2667  0.2667  0.5333 (reduced coord)
  -0.58110  -0.27514  -0.21806  -0.20033  -0.00123   0.02161   0.03459   0.07800
   0.18892   0.32540   0.44100   0.46628
 kpt#  59, nband= 12, wtk=  1.00000, kpt=  0.3000  0.3000  0.6000 (reduced coord)
  -0.57385  -0.27357  -0.22987  -0.19860   0.00710   0.00886   0.03986   0.08565
   0.17322   0.35221   0.43074   0.44922
 kpt#  60, nband= 12, wtk=  1.00000, kpt=  0.3333  0.3333  0.6667 (reduced coord)
  -0.57067  -0.26264  -0.23967  -0.19291  -0.01468   0.01819   0.04279   0.09261
   0.14639   0.38071   0.42523   0.43651
 kpt#  61, nband= 12, wtk=  1.00000, kpt=  0.3667  0.3667  0.7333 (reduced coord)
  -0.57077  -0.24752  -0.24385  -0.18375  -0.03936   0.02634   0.04383   0.09798
   0.11406   0.38159   0.42352   0.45470
 kpt#  62, nband= 12, wtk=  1.00000, kpt=  0.4000  0.4000  0.8000 (reduced coord)
  -0.57275  -0.25348  -0.21959  -0.17201  -0.06423   0.03299   0.04361   0.08112
   0.10115   0.36116   0.42419   0.49705
 kpt#  63, nband= 12, wtk=  1.00000, kpt=  0.4333  0.4333  0.8667 (reduced coord)
  -0.57522  -0.25766  -0.19254  -0.15937  -0.08840   0.03787   0.04285   0.05187
   0.10212   0.34067   0.42583   0.54302
 kpt#  64, nband= 12, wtk=  1.00000, kpt=  0.4667  0.4667  0.9333 (reduced coord)
  -0.57713  -0.26013  -0.16529  -0.14883  -0.11209   0.03083   0.04086   0.04214
   0.10174   0.32654   0.42729   0.58538
 kpt#  65, nband= 12, wtk=  1.00000, kpt=  0.5000  0.5000  1.0000 (reduced coord)
  -0.57783  -0.26095  -0.14454  -0.14454  -0.13128   0.02297   0.04186   0.04186
   0.10137   0.32156   0.42785   0.60839
 kpt#  66, nband= 12, wtk=  1.00000, kpt=  0.5000  0.4583  0.9583 (reduced coord)
  -0.57728  -0.26031  -0.16030  -0.15064  -0.11390   0.02892   0.04127   0.04187
   0.10171   0.32552   0.42743   0.59019
 kpt#  67, nband= 12, wtk=  1.00000, kpt=  0.5000  0.4167  0.9167 (reduced coord)
  -0.57575  -0.25835  -0.17930  -0.16547  -0.09021   0.03922   0.04189   0.04301
   0.10264   0.33759   0.42662   0.55757
 kpt#  68, nband= 12, wtk=  1.00000, kpt=  0.5000  0.3750  0.8750 (reduced coord)
  -0.57361  -0.25499  -0.19645  -0.18281  -0.06580   0.03493   0.04191   0.05853
   0.10397   0.35770   0.42668   0.52442
 kpt#  69, nband= 12, wtk=  1.00000, kpt=  0.5000  0.3333  0.8333 (reduced coord)
  -0.57141  -0.25006  -0.21144  -0.19799  -0.04183   0.02742   0.04194   0.07094
   0.10536   0.38396   0.42941   0.49436
 kpt#  70, nband= 12, wtk=  1.00000, kpt=  0.5000  0.2917  0.7917 (reduced coord)
  -0.56975  -0.24340  -0.22422  -0.20814  -0.01947   0.01588   0.04196   0.07850
   0.10642   0.41012   0.43666   0.46911
 kpt#  71, nband= 12, wtk=  1.00000, kpt=  0.5000  0.2500  0.7500 (reduced coord)
  -0.56914  -0.23484  -0.23484  -0.21169   0.00009   0.00009   0.04196   0.08099
   0.10681   0.42247   0.44975   0.44975
 kpt#  72, nband= 12, wtk=  1.00000, kpt=  0.5000  0.2083  0.7083 (reduced coord)
  -0.56975  -0.24340  -0.22422  -0.20814  -0.01947   0.01588   0.04196   0.07850
   0.10642   0.41012   0.43666   0.46911
 kpt#  73, nband= 12, wtk=  1.00000, kpt=  0.5000  0.1667  0.6667 (reduced coord)
  -0.57141  -0.25006  -0.21144  -0.19799  -0.04183   0.02742   0.04194   0.07094
   0.10536   0.38396   0.42941   0.49436
 kpt#  74, nband= 12, wtk=  1.00000, kpt=  0.5000  0.1250  0.6250 (reduced coord)
  -0.57361  -0.25499  -0.19645  -0.18281  -0.06580   0.03493   0.04191   0.05853
   0.10397   0.35770   0.42668   0.52442
 kpt#  75, nband= 12, wtk=  1.00000, kpt=  0.5000  0.0833  0.5833 (reduced coord)
  -0.57575  -0.25835  -0.17930  -0.16547  -0.09021   0.03922   0.04189   0.04301
   0.10264   0.33759   0.42662   0.55757
 kpt#  76, nband= 12, wtk=  1.00000, kpt=  0.5000  0.0417  0.5417 (reduced coord)
  -0.57728  -0.26031  -0.16030  -0.15064  -0.11390   0.02892   0.04127   0.04187
   0.10171   0.32552   0.42743   0.59019
 kpt#  77, nband= 12, wtk=  1.00000, kpt=  0.5000  0.0000  0.5000 (reduced coord)
  -0.57783  -0.26095  -0.14454  -0.14454  -0.13128   0.02297   0.04186   0.04186
   0.10137   0.32156   0.42785   0.60839
 Total charge density [el/Bohr^3]
,     Maximum=    5.2130E-01  at reduced coord.    0.4688    0.5313    0.5938
,Next maximum=    5.2130E-01  at reduced coord.    0.4063    0.5313    0.5938
,     Minimum=    1.5104E-04  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=    2.8348E-03  at reduced coord.    0.0313    0.0000    0.0000

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
     acell    7.9376741052E+00  7.9376741052E+00  7.9376741052E+00 Bohr
       amu    5.09415000E+01  1.40067400E+01
    diemac    1.20000000E+01
      ecut    4.00000000E+01 Hartree
    etotal1  -1.5974873753E+01
     fcart1  -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
             -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
    getden1        0
    getden2       -1
      iscf1        5
      iscf2       -2
    istwfk2     2    0    0    0    0    0    0    0    0    0
                0    0    0    0    0    5    0    0    0    0
                0    0    0    0    0    0    0    0    0    0
                0    0    0    0    9    0    0    0    0    0
                0    0    0    0    0    0    0    0    0    2
                outvar1 : prtvol=0, do not print more k-points.
    jdtset      1    2
       kpt1  -8.33333333E-02 -1.66666667E-01  0.00000000E+00
             -8.33333333E-02 -3.33333333E-01  0.00000000E+00
             -1.66666667E-01 -2.50000000E-01  0.00000000E+00
             -8.33333333E-02 -2.50000000E-01  8.33333333E-02
             -8.33333333E-02  5.00000000E-01  0.00000000E+00
             -1.66666667E-01 -4.16666667E-01  0.00000000E+00
             -8.33333333E-02 -4.16666667E-01  8.33333333E-02
             -2.50000000E-01 -3.33333333E-01  0.00000000E+00
             -1.66666667E-01 -3.33333333E-01  8.33333333E-02
             -8.33333333E-02 -3.33333333E-01  1.66666667E-01
             -8.33333333E-02  3.33333333E-01  0.00000000E+00
             -1.66666667E-01  4.16666667E-01  0.00000000E+00
             -2.50000000E-01  5.00000000E-01  0.00000000E+00
             -1.66666667E-01  5.00000000E-01  8.33333333E-02
             -3.33333333E-01 -4.16666667E-01  0.00000000E+00
             -2.50000000E-01 -4.16666667E-01  8.33333333E-02
             -1.66666667E-01 -4.16666667E-01  1.66666667E-01
             -8.33333333E-02 -4.16666667E-01  2.50000000E-01
             -8.33333333E-02  1.66666667E-01  0.00000000E+00
             -1.66666667E-01  2.50000000E-01  0.00000000E+00
             -2.50000000E-01  3.33333333E-01  0.00000000E+00
             -3.33333333E-01  4.16666667E-01  0.00000000E+00
             -4.16666667E-01  5.00000000E-01  0.00000000E+00
             -3.33333333E-01  5.00000000E-01  8.33333333E-02
             -2.50000000E-01  5.00000000E-01  1.66666667E-01
             -8.33333333E-02  0.00000000E+00  0.00000000E+00
             -2.50000000E-01  0.00000000E+00  0.00000000E+00
             -4.16666667E-01  0.00000000E+00  0.00000000E+00
       kpt2   0.00000000E+00  0.00000000E+00  0.00000000E+00
              3.33333333E-02  0.00000000E+00  3.33333333E-02
              6.66666667E-02  0.00000000E+00  6.66666667E-02
              1.00000000E-01  0.00000000E+00  1.00000000E-01
              1.33333333E-01  0.00000000E+00  1.33333333E-01
              1.66666667E-01  0.00000000E+00  1.66666667E-01
              2.00000000E-01  0.00000000E+00  2.00000000E-01
              2.33333333E-01  0.00000000E+00  2.33333333E-01
              2.66666667E-01  0.00000000E+00  2.66666667E-01
              3.00000000E-01  0.00000000E+00  3.00000000E-01
              3.33333333E-01  0.00000000E+00  3.33333333E-01
              3.66666667E-01  0.00000000E+00  3.66666667E-01
              4.00000000E-01  0.00000000E+00  4.00000000E-01
              4.33333333E-01  0.00000000E+00  4.33333333E-01
              4.66666667E-01  0.00000000E+00  4.66666667E-01
              5.00000000E-01  0.00000000E+00  5.00000000E-01
              5.00000000E-01  3.57142857E-02  5.35714286E-01
              5.00000000E-01  7.14285714E-02  5.71428571E-01
              5.00000000E-01  1.07142857E-01  6.07142857E-01
              5.00000000E-01  1.42857143E-01  6.42857143E-01
              5.00000000E-01  1.78571429E-01  6.78571429E-01
              5.00000000E-01  2.14285714E-01  7.14285714E-01
              5.00000000E-01  2.50000000E-01  7.50000000E-01
              5.00000000E-01  2.70833333E-01  7.29166667E-01
              5.00000000E-01  2.91666667E-01  7.08333333E-01
              5.00000000E-01  3.12500000E-01  6.87500000E-01
              5.00000000E-01  3.33333333E-01  6.66666667E-01
              5.00000000E-01  3.54166667E-01  6.45833333E-01
              5.00000000E-01  3.75000000E-01  6.25000000E-01
              5.00000000E-01  3.95833333E-01  6.04166667E-01
              5.00000000E-01  4.16666667E-01  5.83333333E-01
              5.00000000E-01  4.37500000E-01  5.62500000E-01
              5.00000000E-01  4.58333333E-01  5.41666667E-01
              5.00000000E-01  4.79166667E-01  5.20833333E-01
              5.00000000E-01  5.00000000E-01  5.00000000E-01
              4.66666667E-01  4.66666667E-01  4.66666667E-01
              4.33333333E-01  4.33333333E-01  4.33333333E-01
              4.00000000E-01  4.00000000E-01  4.00000000E-01
              3.66666667E-01  3.66666667E-01  3.66666667E-01
              3.33333333E-01  3.33333333E-01  3.33333333E-01
              3.00000000E-01  3.00000000E-01  3.00000000E-01
              2.66666667E-01  2.66666667E-01  2.66666667E-01
              2.33333333E-01  2.33333333E-01  2.33333333E-01
              2.00000000E-01  2.00000000E-01  2.00000000E-01
              1.66666667E-01  1.66666667E-01  1.66666667E-01
              1.33333333E-01  1.33333333E-01  1.33333333E-01
              1.00000000E-01  1.00000000E-01  1.00000000E-01
              6.66666667E-02  6.66666667E-02  6.66666667E-02
              3.33333333E-02  3.33333333E-02  3.33333333E-02
              0.00000000E+00  0.00000000E+00  0.00000000E+00
                outvar1 : prtvol=0, do not print more k-points.
   kptrlen1   4.76260446E+01
   kptrlen2   3.00000000E+01
    kptopt1        1
    kptopt2       -6
  kptrlatt    6 -6  6  -6  6  6  -6 -6  6
P    mkmem1       28
P    mkmem2       77
     natom         2
     nband1    12
     nband2    12
    nbdbuf1        0
    nbdbuf2        2
    ndtset         2
     ngfft        32      32      32
      nkpt1       28
      nkpt2       77
     nstep       100
      nsym        48
    ntypat         2
       occ    2.000000  2.000000  2.000000  2.000000  2.000000  0.000000
              0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
     rprim    0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
              5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
              5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
    shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
   spgroup       225
    strten1  -1.1293758795E-04 -1.1293758795E-04 -1.1293758795E-04
              0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
    symrel    1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
              0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
             -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
              0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
             -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
              0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
              1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
              0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
             -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
              0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
              1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
              0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
              1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
              0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
             -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
              0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
              0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
              1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
              0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
             -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
              0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
              1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
              0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
             -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
    toldfe1   1.00000000E-08 Hartree
    toldfe2   0.00000000E+00 Hartree
    tolwfr1   0.00000000E+00
    tolwfr2   1.00000000E-12
     typat    1  2
       wtk1     0.02778    0.02778    0.02778    0.05556    0.02778    0.02778
                0.05556    0.02778    0.05556    0.05556    0.02778    0.02778
                0.02778    0.05556    0.02778    0.05556    0.05556    0.05556
                0.02778    0.02778    0.02778    0.02778    0.02778    0.05556
                0.05556    0.00926    0.00926    0.00926
       wtk2     1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                1.00000    1.00000
                outvar1 : prtvol=0, do not print more k-points.
    xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              2.1002181128E+00  2.1002181128E+00  2.1002181128E+00
     xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              3.9688370526E+00  3.9688370526E+00  3.9688370526E+00
      xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
              5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
     znucl     23.00000    7.00000

================================================================================

- Total cpu        time (s,m,h):        357.8        5.96      0.099
- Total wall clock time (s,m,h):        357.8        5.96      0.099

- For major independent code sections, cpu and wall times (sec),
- as well as % of the total time and number of calls 

- routine                 cpu     %       wall     %      number of calls 
-                                                          (-1=no count)
- fourwf(pot)          223.368  62.4    223.263  62.4          51375
- nonlop(apply)         83.277  23.3     83.301  23.3          51375
- projbd                16.660   4.7     16.448   4.6          79734
- getghc-other           5.621   1.6      5.684   1.6             -1
- vtowfk(ssdiag)         4.763   1.3      4.758   1.3             -1
- fourwf(den)            4.363   1.2      4.339   1.2           1960
- nonlop(forces)         3.873   1.1      3.892   1.1           1960
- 63   others            5.441   1.5      5.441   1.5

- subtotal             347.366  97.1    347.126  97.0

================================================================================

 Suggested references for the acknowledgment of ABINIT usage.

 The users of ABINIT have little formal obligations with respect to the ABINIT group
 (those specified in the GNU General Public License, http://www.gnu.org/copyleft/gpl.txt).
 However, it is common practice in the scientific literature,
 to acknowledge the efforts of people that have made the research possible.
 In this spirit, please find below suggested citations of work written by ABINIT developers,
 corresponding to implementations inside of ABINIT that you have used in the present run.
 Note also that it will be of great value to readers of publications presenting these results,
 to read papers enabling them to understand the theoretical formalism and details
 of the ABINIT implementation.
 For information on why they are suggested, see also http://www.abinit.org/about/?text=acknowledgments.

 [1] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [2] A brief introduction to the ABINIT software package.
 X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
 M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
 L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
 Z. Kristallogr. 220, 558-562 (2005).
 Comment : the second generic paper describing the ABINIT project. Note that this paper
 should be cited, especially if you are using the GW part of ABINIT, as the authors
 of this part are not in the list of authors of the first paper.
 The .pdf of the latter paper is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
 Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
 the licence allows the authors to put it on the Web).

 [3] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.


 And optionally :

 [4] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).

 [5] Iterative minimization techniques for ab initio total-energy calculations:
 molecular dynamics and conjugate gradients.
 M.C. Payne, M.P. Teter, D.C. Allan, T.A. Arias and J.D. Joannopoulos, Rev. Mod. Phys. 64, 1045 (1992).

================================================================================

 Calculation completed.
.Delivered    2 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=        357.8  wall=        357.8
