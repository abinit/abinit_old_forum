
.Version 7.10.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.8 computer) 

.Copyright (C) 1998-2014 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Fri 31 Jul 2015.
- ( at 01h07 )
  
- input  file    -> dos.in
- output file    -> dos.out
- root for input  files -> dosi
- root for output files -> doso


 Symmetries : space group P6/m m m (#191); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        10  mffmem =         1
P  mgfft =        96   mkmem =       192 mpssoang=         4     mpw =      2796
  mqgrid =      4660   natom =         2    nfft =     55296    nkpt =       192
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =         0  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                     105.731 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     81.916 Mbytes ; DEN or POT disk file :      0.424 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      4.6448095337E+00  4.6448095337E+00  1.8897160000E+01 Bohr
              amu      1.20110000E+01
             ecut      3.00000000E+01 Hartree
-          fftalg         312
           istwfk        2    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
              ixc          11
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.22222222E-02  0.00000000E+00  0.00000000E+00
                       4.44444444E-02  0.00000000E+00  0.00000000E+00
                       6.66666667E-02  0.00000000E+00  0.00000000E+00
                       8.88888889E-02  0.00000000E+00  0.00000000E+00
                       1.11111111E-01  0.00000000E+00  0.00000000E+00
                       1.33333333E-01  0.00000000E+00  0.00000000E+00
                       1.55555556E-01  0.00000000E+00  0.00000000E+00
                       1.77777778E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.22222222E-01  0.00000000E+00  0.00000000E+00
                       2.44444444E-01  0.00000000E+00  0.00000000E+00
                       2.66666667E-01  0.00000000E+00  0.00000000E+00
                       2.88888889E-01  0.00000000E+00  0.00000000E+00
                       3.11111111E-01  0.00000000E+00  0.00000000E+00
                       3.33333333E-01  0.00000000E+00  0.00000000E+00
                       3.55555556E-01  0.00000000E+00  0.00000000E+00
                       3.77777778E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.22222222E-01  0.00000000E+00  0.00000000E+00
                       4.44444444E-01  0.00000000E+00  0.00000000E+00
                       4.66666667E-01  0.00000000E+00  0.00000000E+00
                       4.88888889E-01  0.00000000E+00  0.00000000E+00
                       4.44444444E-02  2.22222222E-02  0.00000000E+00
                       6.66666667E-02  2.22222222E-02  0.00000000E+00
                       8.88888889E-02  2.22222222E-02  0.00000000E+00
                       1.11111111E-01  2.22222222E-02  0.00000000E+00
                       1.33333333E-01  2.22222222E-02  0.00000000E+00
                       1.55555556E-01  2.22222222E-02  0.00000000E+00
                       1.77777778E-01  2.22222222E-02  0.00000000E+00
                       2.00000000E-01  2.22222222E-02  0.00000000E+00
                       2.22222222E-01  2.22222222E-02  0.00000000E+00
                       2.44444444E-01  2.22222222E-02  0.00000000E+00
                       2.66666667E-01  2.22222222E-02  0.00000000E+00
                       2.88888889E-01  2.22222222E-02  0.00000000E+00
                       3.11111111E-01  2.22222222E-02  0.00000000E+00
                       3.33333333E-01  2.22222222E-02  0.00000000E+00
                       3.55555556E-01  2.22222222E-02  0.00000000E+00
                       3.77777778E-01  2.22222222E-02  0.00000000E+00
                       4.00000000E-01  2.22222222E-02  0.00000000E+00
                       4.22222222E-01  2.22222222E-02  0.00000000E+00
                       4.44444444E-01  2.22222222E-02  0.00000000E+00
                       4.66666667E-01  2.22222222E-02  0.00000000E+00
                       4.88888889E-01  2.22222222E-02  0.00000000E+00
                      -4.88888889E-01  2.22222222E-02  0.00000000E+00
                       8.88888889E-02  4.44444444E-02  0.00000000E+00
                       1.11111111E-01  4.44444444E-02  0.00000000E+00
                       1.33333333E-01  4.44444444E-02  0.00000000E+00
                       1.55555556E-01  4.44444444E-02  0.00000000E+00
                       1.77777778E-01  4.44444444E-02  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt       45    0    0      0   45    0      0    0    1
          kptrlen      2.09016429E+02
P           mkmem         192
            natom           2
            nband          10
            ngfft          24      24      96
             nkpt         192
            nstep          25
             nsym          24
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           prtdos           2
            rprim      8.6602540378E-01 -5.0000000000E-01  0.0000000000E+00
                       8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
          spgroup         191
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  1  0   0  1  0   0  0  1       1 -1  0   0 -1  0   0  0 -1
                       0  1  0  -1  1  0   0  0  1       0 -1  0   1 -1  0   0  0 -1
                      -1  0  0  -1  1  0   0  0  1       1  0  0   1 -1  0   0  0 -1
                      -1  1  0  -1  0  0   0  0  1       1 -1  0   1  0  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1 -1  0   0 -1  0   0  0  1      -1  1  0   0  1  0   0  0 -1
                       0 -1  0   1 -1  0   0  0  1       0  1  0  -1  1  0   0  0 -1
                       1  0  0   1 -1  0   0  0  1      -1  0  0  -1  1  0   0  0 -1
                       1 -1  0   1  0  0   0  0  1      -1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000    -0.0000000 -0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                      -0.0000000 -0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                      -0.0000000 -0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000 -0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000 -0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000 -0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000 -0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000    -0.0000000 -0.0000000  0.0000000
           toldfe      1.00000000E-06 Hartree
            typat      1  1
              wtk        0.00049    0.00296    0.00296    0.00296    0.00296    0.00296
                         0.00296    0.00296    0.00296    0.00296    0.00296    0.00296
                         0.00296    0.00296    0.00296    0.00296    0.00296    0.00296
                         0.00296    0.00296    0.00296    0.00296    0.00296    0.00296
                         0.00593    0.00593    0.00593    0.00593    0.00593    0.00593
                         0.00593    0.00593    0.00593    0.00593    0.00593    0.00593
                         0.00593    0.00593    0.00593    0.00593    0.00593    0.00593
                         0.00593    0.00593    0.00296    0.00296    0.00593    0.00593
                         0.00593    0.00593
                       outvars : Printing only first  50 k-points.
           xangst      1.4190850134E+00  2.5203350282E-17  0.0000000000E+00
                       2.8381700268E+00 -4.6070957865E-17  0.0000000000E+00
            xcart      2.6816820346E+00  4.7627429663E-17  0.0000000000E+00
                       5.3633640692E+00 -8.7061493045E-17  0.0000000000E+00
             xred      3.3333333333E-01  3.3333333333E-01  0.0000000000E+00
                       6.6666666667E-01  6.6666666667E-01  0.0000000000E+00
            znucl        6.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.0225231 -2.3224048  0.0000000  G(1)=  0.1243001 -0.2152941  0.0000000
 R(2)=  4.0225231  2.3224048  0.0000000  G(2)=  0.1243001  0.2152941  0.0000000
 R(3)=  0.0000000  0.0000000 18.8971600  G(3)=  0.0000000  0.0000000  0.0529180
 Unit cell volume ucvol=  3.5307177E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  24  24  96
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.06039

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is 06-C.GGA.fhi
- pspatm: opening atomic psp file    06-C.GGA.fhi
- carbon, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  6.00000   4.00000     21003                znucl, zion, pspdat
    6   11    3    2       461   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    2.83374474
         --- l  ekb(1:nproj) -->
             0    3.092918
             1   -1.669563
             3   -2.046570
 pspatm: atomic psp has been read  and splines computed

   4.53399158E+01                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     10 bands with npw=    1368 for ikpt=   1 by node    0
P newkpt: treating     10 bands with npw=    2747 for ikpt=   2 by node    0
P newkpt: treating     10 bands with npw=    2754 for ikpt=   3 by node    0
P newkpt: treating     10 bands with npw=    2758 for ikpt=   4 by node    0
P newkpt: treating     10 bands with npw=    2766 for ikpt=   5 by node    0
P newkpt: treating     10 bands with npw=    2774 for ikpt=   6 by node    0
P newkpt: treating     10 bands with npw=    2780 for ikpt=   7 by node    0
P newkpt: treating     10 bands with npw=    2776 for ikpt=   8 by node    0
P newkpt: treating     10 bands with npw=    2782 for ikpt=   9 by node    0
P newkpt: treating     10 bands with npw=    2778 for ikpt=  10 by node    0
P newkpt: treating     10 bands with npw=    2776 for ikpt=  11 by node    0
P newkpt: treating     10 bands with npw=    2772 for ikpt=  12 by node    0
P newkpt: treating     10 bands with npw=    2758 for ikpt=  13 by node    0
P newkpt: treating     10 bands with npw=    2762 for ikpt=  14 by node    0
P newkpt: treating     10 bands with npw=    2762 for ikpt=  15 by node    0
P newkpt: treating     10 bands with npw=    2770 for ikpt=  16 by node    0
P newkpt: treating     10 bands with npw=    2782 for ikpt=  17 by node    0
P newkpt: treating     10 bands with npw=    2782 for ikpt=  18 by node    0
P newkpt: treating     10 bands with npw=    2776 for ikpt=  19 by node    0
P newkpt: treating     10 bands with npw=    2772 for ikpt=  20 by node    0
P newkpt: treating     10 bands with npw=    2782 for ikpt=  21 by node    0
P newkpt: treating     10 bands with npw=    2782 for ikpt=  22 by node    0
P newkpt: treating     10 bands with npw=    2796 for ikpt=  23 by node    0
P newkpt: treating     10 bands with npw=    2743 for ikpt=  24 by node    0
P newkpt: treating     10 bands with npw=    2753 for ikpt=  25 by node    0
P newkpt: treating     10 bands with npw=    2759 for ikpt=  26 by node    0
P newkpt: treating     10 bands with npw=    2763 for ikpt=  27 by node    0
P newkpt: treating     10 bands with npw=    2782 for ikpt=  28 by node    0
P newkpt: treating     10 bands with npw=    2786 for ikpt=  29 by node    0
P newkpt: treating     10 bands with npw=    2780 for ikpt=  30 by node    0
P newkpt: treating     10 bands with npw=    2780 for ikpt=  31 by node    0
P newkpt: treating     10 bands with npw=    2778 for ikpt=  32 by node    0
P newkpt: treating     10 bands with npw=    2780 for ikpt=  33 by node    0
P newkpt: treating     10 bands with npw=    2764 for ikpt=  34 by node    0
P newkpt: treating     10 bands with npw=    2765 for ikpt=  35 by node    0
P newkpt: treating     10 bands with npw=    2772 for ikpt=  36 by node    0
P newkpt: treating     10 bands with npw=    2768 for ikpt=  37 by node    0
P newkpt: treating     10 bands with npw=    2774 for ikpt=  38 by node    0
P newkpt: treating     10 bands with npw=    2776 for ikpt=  39 by node    0
P newkpt: treating     10 bands with npw=    2770 for ikpt=  40 by node    0
P newkpt: treating     10 bands with npw=    2774 for ikpt=  41 by node    0
P newkpt: treating     10 bands with npw=    2783 for ikpt=  42 by node    0
P newkpt: treating     10 bands with npw=    2783 for ikpt=  43 by node    0
P newkpt: treating     10 bands with npw=    2782 for ikpt=  44 by node    0
P newkpt: treating     10 bands with npw=    2796 for ikpt=  45 by node    0
P newkpt: treating     10 bands with npw=    2763 for ikpt=  46 by node    0
P newkpt: treating     10 bands with npw=    2757 for ikpt=  47 by node    0
P newkpt: treating     10 bands with npw=    2773 for ikpt=  48 by node    0
P newkpt: treating     10 bands with npw=    2773 for ikpt=  49 by node    0
P newkpt: treating     10 bands with npw=    2772 for ikpt=  50 by node    0
 newkpt: prtvol=0 or 1, do not print more k-points.

_setup2: Arith. and geom. avg. npw (full set) are    2771.232    2771.222

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -11.389688812009    -1.139E+01 9.883E-02 1.507E+02
 ETOT  2  -11.409542419665    -1.985E-02 2.290E-02 2.899E+01
 ETOT  3  -11.409740417457    -1.980E-04 3.549E-03 1.282E+01
 ETOT  4  -11.409852514533    -1.121E-04 9.919E-04 5.268E+00
 ETOT  5  -11.409890896733    -3.838E-05 2.724E-03 2.371E+00
 ETOT  6  -11.409898935069    -8.038E-06 3.283E-04 1.697E+00
 ETOT  7  -11.409903164678    -4.230E-06 4.800E-04 1.176E+00
 ETOT  8  -11.409907669406    -4.505E-06 2.125E-04 9.473E-01
 ETOT  9  -11.409907663495     5.911E-09 7.301E-05 1.395E+00
 ETOT 10  -11.409907943328    -2.798E-07 2.274E-04 3.477E+00

 At SCF step   10, etot is converged : 
  for the second time, diff in etot=  2.798E-07 < toldfe=  1.000E-06

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.01194360E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.01194360E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.09795963E-06  sigma(2 1)=  0.00000000E+00

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   5.7858E-07; max=  2.2741E-04
   0.0000  0.0000  0.0000    1  5.66939E-07 kpt; spin; max resid(k); each band:
  1.43E-09 1.35E-08 2.13E-12 2.13E-12 5.54E-07 4.15E-07 5.67E-07 4.56E-12
  4.85E-12 4.17E-07
   0.0222  0.0000  0.0000    1  5.67205E-07 kpt; spin; max resid(k); each band:
  1.43E-09 1.35E-08 2.32E-12 2.15E-12 5.53E-07 4.15E-07 5.67E-07 4.56E-10
  5.43E-12 4.27E-07
   0.0444  0.0000  0.0000    1  1.09102E-06 kpt; spin; max resid(k); each band:
  1.43E-09 1.35E-08 2.98E-12 2.17E-12 5.53E-07 4.15E-07 5.68E-07 1.69E-09
  9.88E-13 1.09E-06
   0.0667  0.0000  0.0000    1  3.62634E-06 kpt; spin; max resid(k); each band:
  1.42E-09 1.34E-08 8.29E-13 2.22E-12 5.53E-07 4.15E-07 5.69E-07 3.72E-09
  1.27E-10 3.63E-06
   0.0889  0.0000  0.0000    1  8.14956E-06 kpt; spin; max resid(k); each band:
  1.42E-09 1.14E-08 1.50E-12 2.29E-12 5.53E-07 4.76E-08 5.70E-07 6.30E-09
  2.89E-11 8.15E-06
   0.1111  0.0000  0.0000    1  5.72486E-07 kpt; spin; max resid(k); each band:
  1.41E-09 1.12E-08 2.52E-12 2.36E-12 5.53E-07 1.55E-08 5.72E-07 9.77E-09
  6.70E-11 5.30E-07
   0.1333  0.0000  0.0000    1  5.75644E-07 kpt; spin; max resid(k); each band:
  1.40E-09 1.11E-08 3.94E-12 2.43E-12 5.53E-07 1.60E-08 5.76E-07 1.46E-08
  6.62E-10 7.31E-08
   0.1556  0.0000  0.0000    1  5.81029E-07 kpt; spin; max resid(k); each band:
  1.39E-09 1.10E-08 5.73E-12 2.51E-12 5.53E-07 1.70E-08 5.81E-07 2.20E-08
  2.12E-08 1.50E-09
   0.1778  0.0000  0.0000    1  5.91567E-07 kpt; spin; max resid(k); each band:
  1.38E-09 1.09E-08 7.80E-12 2.58E-12 5.52E-07 1.89E-08 5.92E-07 3.57E-08
  1.19E-08 5.23E-08
   0.2000  0.0000  0.0000    1  1.17375E-05 kpt; spin; max resid(k); each band:
  1.37E-09 1.14E-08 1.01E-11 2.62E-12 5.52E-07 1.60E-07 6.16E-07 6.74E-08
  1.37E-08 1.17E-05
   0.2222  0.0000  0.0000    1  7.69908E-07 kpt; spin; max resid(k); each band:
  1.35E-09 1.26E-11 1.24E-08 2.67E-12 5.51E-07 4.23E-07 6.91E-07 2.55E-08
  1.70E-07 7.70E-07
   0.2444  0.0000  0.0000    1  9.54447E-07 kpt; spin; max resid(k); each band:
  1.33E-09 1.51E-11 1.22E-08 2.71E-12 5.51E-07 4.51E-07 1.04E-07 9.54E-07
  6.45E-07 8.18E-07
   0.2667  0.0000  0.0000    1  7.90391E-07 kpt; spin; max resid(k); each band:
  1.31E-09 1.77E-11 1.18E-08 2.75E-12 5.51E-07 3.17E-07 5.52E-07 4.80E-07
  7.90E-07 4.27E-07
   0.2889  0.0000  0.0000    1  6.19809E-07 kpt; spin; max resid(k); each band:
  1.29E-09 2.03E-11 2.78E-12 1.15E-08 5.50E-07 4.19E-08 4.48E-07 1.55E-07
  6.20E-07 4.16E-07
   0.3111  0.0000  0.0000    1  5.81934E-07 kpt; spin; max resid(k); each band:
  1.26E-09 2.29E-11 2.82E-12 1.10E-08 1.44E-08 5.50E-07 8.75E-08 4.31E-07
  5.82E-07 4.19E-07
   0.3333  0.0000  0.0000    1  5.71288E-07 kpt; spin; max resid(k); each band:
  1.24E-09 2.55E-11 2.84E-12 1.05E-08 7.64E-09 5.53E-07 8.19E-08 4.24E-07
  5.71E-07 4.25E-07
   0.3556  0.0000  0.0000    1  5.69566E-07 kpt; spin; max resid(k); each band:
  1.21E-09 2.82E-11 2.86E-12 9.84E-09 5.19E-09 5.70E-07 1.67E-07 4.15E-07
  5.69E-07 4.39E-07
   0.3778  0.0000  0.0000    1  6.25789E-07 kpt; spin; max resid(k); each band:
  1.18E-09 3.11E-11 2.88E-12 8.98E-09 4.33E-09 2.53E-07 6.26E-07 3.94E-07
  5.49E-07 5.31E-07
   0.4000  0.0000  0.0000    1  5.52552E-07 kpt; spin; max resid(k); each band:
  1.18E-09 6.32E-10 2.90E-12 7.86E-09 3.81E-09 1.64E-08 5.53E-07 1.57E-08
  5.47E-07 1.69E-07
   0.4222  0.0000  0.0000    1  5.46230E-07 kpt; spin; max resid(k); each band:
  1.16E-09 6.51E-10 2.91E-12 7.05E-09 3.83E-09 2.90E-09 5.42E-07 1.67E-08
  5.46E-07 1.14E-07
   0.4444  0.0000  0.0000    1  5.49084E-07 kpt; spin; max resid(k); each band:
  1.13E-09 6.59E-10 2.93E-12 6.03E-09 4.25E-09 7.86E-10 5.36E-07 2.03E-08
  5.49E-07 7.96E-08
   0.4667  0.0000  0.0000    1  5.42728E-07 kpt; spin; max resid(k); each band:
  1.11E-09 6.61E-10 2.94E-12 4.60E-09 5.20E-09 2.89E-10 5.31E-07 3.31E-08
  5.94E-08 5.43E-07
   0.4889  0.0000  0.0000    1  3.14893E-08 kpt; spin; max resid(k); each band:
  8.46E-10 6.23E-10 2.96E-12 6.63E-09 1.02E-08 1.53E-10 3.05E-08 2.96E-08
  3.15E-08 3.05E-08
   0.0444  0.0222  0.0000    1  1.78152E-06 kpt; spin; max resid(k); each band:
  1.43E-09 1.35E-08 2.70E-12 2.21E-12 5.53E-07 4.15E-07 5.68E-07 1.29E-09
  4.02E-12 1.78E-06
   0.0667  0.0222  0.0000    1  2.57856E-06 kpt; spin; max resid(k); each band:
  1.42E-09 1.35E-08 5.28E-13 2.35E-12 5.53E-07 4.15E-07 5.68E-07 2.92E-09
  1.44E-11 2.58E-06
   0.0889  0.0222  0.0000    1  7.05735E-05 kpt; spin; max resid(k); each band:
  1.42E-09 1.22E-08 9.93E-13 2.53E-12 5.53E-07 1.86E-07 5.70E-07 5.14E-09
  3.28E-11 7.06E-05
   0.1111  0.0222  0.0000    1  6.42166E-07 kpt; spin; max resid(k); each band:
  1.41E-09 1.12E-08 1.83E-12 2.70E-12 5.53E-07 1.46E-08 5.71E-07 8.09E-09
  6.83E-11 6.42E-07
   0.1333  0.0222  0.0000    1  5.73837E-07 kpt; spin; max resid(k); each band:
  1.41E-09 1.12E-08 3.12E-12 2.84E-12 5.53E-07 1.54E-08 5.74E-07 1.20E-08
  1.56E-10 1.63E-07
   0.1556  0.0222  0.0000    1  5.77701E-07 kpt; spin; max resid(k); each band:
  1.40E-09 1.11E-08 4.90E-12 2.95E-12 5.53E-07 1.62E-08 5.78E-07 1.76E-08
  4.34E-08 7.81E-10
   0.1778  0.0222  0.0000    1  5.84636E-07 kpt; spin; max resid(k); each band:
  1.39E-09 1.10E-08 7.15E-12 3.04E-12 5.52E-07 1.76E-08 5.85E-07 2.69E-08
  1.36E-08 3.62E-08
   0.2000  0.0222  0.0000    1  1.13502E-06 kpt; spin; max resid(k); each band:
  1.37E-09 1.08E-08 9.85E-12 3.12E-12 5.52E-07 2.07E-08 5.99E-07 4.55E-08
  9.91E-09 1.14E-06
   0.2222  0.0222  0.0000    1  1.06675E-05 kpt; spin; max resid(k); each band:
  1.36E-09 1.12E-11 1.25E-08 3.16E-12 5.52E-07 4.08E-07 6.36E-07 1.65E-08
  9.41E-08 1.07E-05
   0.2444  0.0222  0.0000    1  5.39443E-06 kpt; spin; max resid(k); each band:
  1.34E-09 1.37E-11 1.23E-08 3.21E-12 5.51E-07 4.30E-07 4.50E-08 7.66E-07
  2.84E-07 5.39E-06
   0.2667  0.0222  0.0000    1  9.23437E-07 kpt; spin; max resid(k); each band:
  1.32E-09 1.63E-11 1.20E-08 3.25E-12 5.51E-07 5.16E-07 3.43E-07 9.23E-07
  8.95E-07 4.51E-07
   0.2889  0.0222  0.0000    1  6.86959E-07 kpt; spin; max resid(k); each band:
  1.30E-09 1.89E-11 1.16E-08 3.28E-12 5.50E-07 9.19E-08 4.73E-07 2.79E-07
  6.87E-07 4.38E-07
   0.3111  0.0222  0.0000    1  5.97514E-07 kpt; spin; max resid(k); each band:
  1.28E-09 2.15E-11 3.32E-12 1.12E-08 2.17E-08 5.50E-07 4.36E-07 1.14E-07
  5.98E-07 4.18E-07
   0.3333  0.0222  0.0000    1  5.75915E-07 kpt; spin; max resid(k); each band:
  1.25E-09 2.42E-11 3.35E-12 1.08E-08 9.74E-09 5.51E-07 7.90E-08 4.26E-07
  5.76E-07 4.22E-07
   0.3556  0.0222  0.0000    1  5.69760E-07 kpt; spin; max resid(k); each band:
  1.22E-09 2.68E-11 3.38E-12 1.02E-08 5.97E-09 5.56E-07 9.62E-08 4.19E-07
  5.70E-07 4.31E-07
   0.3778  0.0222  0.0000    1  5.86633E-07 kpt; spin; max resid(k); each band:
  1.20E-09 2.96E-11 3.41E-12 9.41E-09 4.51E-09 5.87E-07 3.53E-07 4.06E-07
  5.69E-07 4.56E-07
   0.4000  0.0222  0.0000    1  8.48744E-07 kpt; spin; max resid(k); each band:
  1.18E-09 3.31E-10 3.43E-12 8.27E-09 4.09E-09 6.46E-08 5.75E-07 1.96E-07
  5.48E-07 8.49E-07
   0.4222  0.0222  0.0000    1  5.46350E-07 kpt; spin; max resid(k); each band:
  1.17E-09 6.41E-10 3.46E-12 7.44E-09 3.72E-09 7.05E-09 5.46E-07 1.61E-08
  5.46E-07 1.27E-07
   0.4444  0.0222  0.0000    1  5.46783E-07 kpt; spin; max resid(k); each band:
  1.14E-09 6.55E-10 3.48E-12 6.57E-09 3.95E-09 1.55E-09 5.39E-07 1.82E-08
  5.47E-07 9.77E-08
   0.4667  0.0222  0.0000    1  5.33947E-07 kpt; spin; max resid(k); each band:
  1.12E-09 6.60E-10 3.49E-12 5.36E-09 4.61E-09 4.72E-10 5.34E-07 2.53E-08
  2.71E-07 5.31E-07
   0.4889  0.0222  0.0000    1  6.36160E-06 kpt; spin; max resid(k); each band:
  1.08E-09 6.58E-10 3.50E-12 3.77E-09 6.30E-09 2.03E-10 4.94E-07 4.40E-08
  4.96E-08 6.36E-06
  -0.4889  0.0222  0.0000    1  5.96805E-08 kpt; spin; max resid(k); each band:
  8.52E-10 6.14E-10 3.51E-12 6.59E-09 1.02E-08 1.41E-10 5.97E-08 7.87E-09
  1.72E-08 1.70E-08
   0.0889  0.0444  0.0000    1  9.54439E-06 kpt; spin; max resid(k); each band:
  1.42E-09 1.34E-08 6.61E-13 2.81E-12 5.53E-07 4.12E-07 5.69E-07 4.86E-09
  3.18E-11 9.54E-06
   0.1111  0.0444  0.0000    1  3.63656E-06 kpt; spin; max resid(k); each band:
  1.42E-09 1.13E-08 1.12E-12 3.34E-12 5.53E-07 1.58E-08 5.71E-07 7.23E-09
  3.61E-11 3.64E-06
   0.1333  0.0444  0.0000    1  5.72624E-07 kpt; spin; max resid(k); each band:
  1.41E-09 1.12E-08 2.20E-12 3.81E-12 5.53E-07 1.45E-08 5.73E-07 1.04E-08
  1.75E-10 2.04E-07
   0.1556  0.0444  0.0000    1  5.75234E-07 kpt; spin; max resid(k); each band:
  1.40E-09 1.11E-08 4.02E-12 4.14E-12 5.53E-07 1.53E-08 5.75E-07 1.45E-08
  4.51E-08 6.10E-10
   0.1778  0.0444  0.0000    1  5.79552E-07 kpt; spin; max resid(k); each band:
  1.39E-09 1.10E-08 6.62E-12 4.36E-12 5.53E-07 1.63E-08 5.80E-07 2.05E-08
  1.44E-08 9.94E-10
 outwf : prtvol=0 or 1, do not print more k-points.

 reduced coordinates (array xred) for    2 atoms
       0.333333333333      0.333333333333      0.000000000000
       0.666666666667      0.666666666667      0.000000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000

 cartesian coordinates (angstrom) at end:
    1      1.41908501339690     0.00000000000000     0.00000000000000
    2      2.83817002679380     0.00000000000000     0.00000000000000

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  4.644809533700  4.644809533700 18.897160000000 bohr
              =  2.457927343476  2.457927343476  9.999946379079 angstroms
 prteigrs : about to open file doso_EIG
 Fermi (or HOMO) energy (hartree) =  -0.03430   Average Vxc (hartree)=  -0.15655
 Eigenvalues (hartree) for nkpt= 192  k points:
 kpt#   1, nband= 10, wtk=  0.00049, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.75296  -0.31579  -0.14794  -0.14794   0.08230   0.14030   0.18713   0.27252
   0.27252   0.35884
 kpt#   2, nband= 10, wtk=  0.00296, kpt=  0.0222  0.0000  0.0000 (reduced coord)
  -0.75253  -0.31527  -0.14971  -0.14889   0.08289   0.14089   0.18770   0.27280
   0.27441   0.35939
 kpt#   3, nband= 10, wtk=  0.00296, kpt=  0.0444  0.0000  0.0000 (reduced coord)
  -0.75124  -0.31373  -0.15492  -0.15167   0.08465   0.14263   0.18944   0.27356
   0.28001   0.36105
 kpt#   4, nband= 10, wtk=  0.00296, kpt=  0.0667  0.0000  0.0000 (reduced coord)
  -0.74908  -0.31115  -0.16335  -0.15611   0.08758   0.14554   0.19233   0.27455
   0.28916   0.36380
 kpt#   5, nband= 10, wtk=  0.00296, kpt=  0.0889  0.0000  0.0000 (reduced coord)
  -0.74605  -0.30756  -0.17468  -0.16199   0.09169   0.14962   0.19637   0.27544
   0.30158   0.36478
 kpt#   6, nband= 10, wtk=  0.00296, kpt=  0.1111  0.0000  0.0000 (reduced coord)
  -0.74217  -0.30295  -0.18849  -0.16899   0.09697   0.15485   0.20157   0.27591
   0.31697   0.35191
 kpt#   7, nband= 10, wtk=  0.00296, kpt=  0.1333  0.0000  0.0000 (reduced coord)
  -0.73743  -0.29733  -0.20439  -0.17684   0.10343   0.16123   0.20792   0.27577
   0.33499   0.33712
 kpt#   8, nband= 10, wtk=  0.00296, kpt=  0.1556  0.0000  0.0000 (reduced coord)
  -0.73184  -0.29072  -0.22197  -0.18525   0.11106   0.16876   0.21542   0.27493
   0.32040   0.35531
 kpt#   9, nband= 10, wtk=  0.00296, kpt=  0.1778  0.0000  0.0000 (reduced coord)
  -0.72540  -0.28312  -0.24089  -0.19396   0.11985   0.17741   0.22402   0.27345
   0.30205   0.37762
 kpt#  10, nband= 10, wtk=  0.00296, kpt=  0.2000  0.0000  0.0000 (reduced coord)
  -0.71812  -0.27457  -0.26081  -0.20277   0.12982   0.18714   0.23369   0.27148
   0.28235   0.40203
 kpt#  11, nband= 10, wtk=  0.00296, kpt=  0.2222  0.0000  0.0000 (reduced coord)
  -0.71000  -0.28148  -0.26508  -0.21147   0.14095   0.19786   0.24422   0.26170
   0.26936   0.41294
 kpt#  12, nband= 10, wtk=  0.00296, kpt=  0.2444  0.0000  0.0000 (reduced coord)
  -0.70106  -0.30264  -0.25469  -0.21993   0.15325   0.20897   0.24091   0.25453
   0.26833   0.42396
 kpt#  13, nband= 10, wtk=  0.00296, kpt=  0.2667  0.0000  0.0000 (reduced coord)
  -0.69130  -0.32411  -0.24344  -0.22800   0.16669   0.21157   0.22913   0.25895
   0.27419   0.43586
 kpt#  14, nband= 10, wtk=  0.00296, kpt=  0.2889  0.0000  0.0000 (reduced coord)
  -0.68074  -0.34571  -0.23560  -0.23138   0.18128   0.19219   0.24008   0.25745
   0.28711   0.44853
 kpt#  15, nband= 10, wtk=  0.00296, kpt=  0.3111  0.0000  0.0000 (reduced coord)
  -0.66940  -0.36730  -0.24262  -0.21859   0.16977   0.19698   0.25491   0.25504
   0.30230   0.46185
 kpt#  16, nband= 10, wtk=  0.00296, kpt=  0.3333  0.0000  0.0000 (reduced coord)
  -0.65729  -0.38875  -0.24900  -0.20516   0.14712   0.21375   0.25237   0.27145
   0.31889   0.47559
 kpt#  17, nband= 10, wtk=  0.00296, kpt=  0.3556  0.0000  0.0000 (reduced coord)
  -0.64443  -0.40994  -0.25470  -0.19125   0.12476   0.23125   0.25035   0.28904
   0.33671   0.48931
 kpt#  18, nband= 10, wtk=  0.00296, kpt=  0.3778  0.0000  0.0000 (reduced coord)
  -0.63087  -0.43076  -0.25965  -0.17707   0.10309   0.24427   0.25419   0.30773
   0.35569   0.50199
 kpt#  19, nband= 10, wtk=  0.00296, kpt=  0.4000  0.0000  0.0000 (reduced coord)
  -0.61666  -0.45111  -0.26382  -0.16294   0.08256   0.24421   0.27253   0.32744
   0.37579   0.49484
 kpt#  20, nband= 10, wtk=  0.00296, kpt=  0.4222  0.0000  0.0000 (reduced coord)
  -0.60190  -0.47082  -0.26719  -0.14937   0.06377   0.24286   0.29361   0.34811
   0.39697   0.46879
 kpt#  21, nband= 10, wtk=  0.00296, kpt=  0.4444  0.0000  0.0000 (reduced coord)
  -0.58684  -0.48964  -0.26974  -0.13720   0.04762   0.24170   0.31595   0.36965
   0.41911   0.44217
 kpt#  22, nband= 10, wtk=  0.00296, kpt=  0.4667  0.0000  0.0000 (reduced coord)
  -0.57213  -0.50686  -0.27144  -0.12763   0.03537   0.24089   0.33935   0.39184
   0.41530   0.44264
 kpt#  23, nband= 10, wtk=  0.00296, kpt=  0.4889  0.0000  0.0000 (reduced coord)
  -0.56049  -0.51976  -0.27230  -0.12223   0.02862   0.24047   0.36360   0.38946
   0.41363   0.44176
 kpt#  24, nband= 10, wtk=  0.00296, kpt=  0.0444  0.0222  0.0000 (reduced coord)
  -0.75167  -0.31424  -0.15316  -0.15078   0.08406   0.14205   0.18886   0.27341
   0.27807   0.36050
 kpt#  25, nband= 10, wtk=  0.00593, kpt=  0.0667  0.0222  0.0000 (reduced coord)
  -0.74994  -0.31218  -0.15991  -0.15447   0.08641   0.14438   0.19117   0.27450
   0.28522   0.36272
 kpt#  26, nband= 10, wtk=  0.00593, kpt=  0.0889  0.0222  0.0000 (reduced coord)
  -0.74735  -0.30910  -0.16968  -0.15974   0.08993   0.14787   0.19464   0.27571
   0.29568   0.36781
 kpt#  27, nband= 10, wtk=  0.00593, kpt=  0.1111  0.0222  0.0000 (reduced coord)
  -0.74389  -0.30499  -0.18213  -0.16630   0.09462   0.15252   0.19926   0.27668
   0.30919   0.35748
 kpt#  28, nband= 10, wtk=  0.00593, kpt=  0.1333  0.0222  0.0000 (reduced coord)
  -0.73958  -0.29988  -0.19687  -0.17384   0.10049   0.15833   0.20504   0.27710
   0.32547   0.34381
 kpt#  29, nband= 10, wtk=  0.00593, kpt=  0.1556  0.0222  0.0000 (reduced coord)
  -0.73442  -0.29376  -0.21351  -0.18208   0.10754   0.16529   0.21197   0.27681
   0.32809   0.34418
 kpt#  30, nband= 10, wtk=  0.00593, kpt=  0.1778  0.0222  0.0000 (reduced coord)
  -0.72840  -0.28666  -0.23166  -0.19074   0.11575   0.17338   0.22003   0.27580
   0.31058   0.36502
 kpt#  31, nband= 10, wtk=  0.00593, kpt=  0.2000  0.0222  0.0000 (reduced coord)
  -0.72154  -0.27859  -0.25100  -0.19958   0.12513   0.18258   0.22919   0.27416
   0.29159   0.38768
 kpt#  32, nband= 10, wtk=  0.00593, kpt=  0.2222  0.0222  0.0000 (reduced coord)
  -0.71384  -0.27123  -0.26957  -0.20841   0.13569   0.19283   0.23936   0.27144
   0.27212   0.40823
 kpt#  33, nband= 10, wtk=  0.00593, kpt=  0.2444  0.0222  0.0000 (reduced coord)
  -0.70531  -0.29209  -0.25962  -0.21705   0.14740   0.20390   0.25016   0.25060
   0.27020   0.41867
 kpt#  34, nband= 10, wtk=  0.00593, kpt=  0.2667  0.0222  0.0000 (reduced coord)
  -0.69596  -0.31336  -0.24880  -0.22536   0.16027   0.21361   0.23151   0.25914
   0.27103   0.43009
 kpt#  35, nband= 10, wtk=  0.00593, kpt=  0.2889  0.0222  0.0000 (reduced coord)
  -0.68581  -0.33486  -0.23714  -0.23323   0.17429   0.20254   0.23381   0.26024
   0.28078   0.44234
 kpt#  36, nband= 10, wtk=  0.00593, kpt=  0.3111  0.0222  0.0000 (reduced coord)
  -0.67486  -0.35642  -0.24056  -0.22470   0.18076   0.18944   0.24768   0.25809
   0.29497   0.45530
 kpt#  37, nband= 10, wtk=  0.00593, kpt=  0.3333  0.0222  0.0000 (reduced coord)
  -0.66313  -0.37791  -0.24729  -0.21158   0.15817   0.20569   0.25552   0.26344
   0.31088   0.46877
 kpt#  38, nband= 10, wtk=  0.00593, kpt=  0.3556  0.0222  0.0000 (reduced coord)
  -0.65064  -0.39922  -0.25335  -0.19789   0.13566   0.22294   0.25312   0.28046
   0.32809   0.48243
 kpt#  39, nband= 10, wtk=  0.00593, kpt=  0.3778  0.0222  0.0000 (reduced coord)
  -0.63743  -0.42021  -0.25868  -0.18381   0.11363   0.24026   0.25197   0.29859
   0.34649   0.49561
 kpt#  40, nband= 10, wtk=  0.00593, kpt=  0.4000  0.0222  0.0000 (reduced coord)
  -0.62353  -0.44079  -0.26325  -0.16960   0.09250   0.24658   0.26321   0.31778
   0.36603   0.50672
 kpt#  41, nband= 10, wtk=  0.00593, kpt=  0.4222  0.0222  0.0000 (reduced coord)
  -0.60904  -0.46083  -0.26704  -0.15567   0.07278   0.24546   0.28334   0.33796
   0.38667   0.48210
 kpt#  42, nband= 10, wtk=  0.00593, kpt=  0.4444  0.0222  0.0000 (reduced coord)
  -0.59409  -0.48012  -0.27000  -0.14267   0.05520   0.24417   0.30507   0.35904
   0.40835   0.45575
 kpt#  43, nband= 10, wtk=  0.00593, kpt=  0.4667  0.0222  0.0000 (reduced coord)
  -0.57907  -0.49827  -0.27213  -0.13161   0.04082   0.24318   0.32794   0.38089
   0.42791   0.43228
 kpt#  44, nband= 10, wtk=  0.00593, kpt=  0.4889  0.0222  0.0000 (reduced coord)
  -0.56528  -0.51395  -0.27341  -0.12392   0.03112   0.24257   0.35181   0.40265
   0.40308   0.45477
 kpt#  45, nband= 10, wtk=  0.00296, kpt= -0.4889  0.0222  0.0000 (reduced coord)
  -0.55819  -0.52168  -0.27384  -0.12112   0.02765   0.24236   0.37419   0.37946
   0.41985   0.43568
 kpt#  46, nband= 10, wtk=  0.00296, kpt=  0.0889  0.0444  0.0000 (reduced coord)
  -0.74778  -0.30961  -0.16786  -0.15912   0.08934   0.14729   0.19406   0.27619
   0.29326   0.36547
 kpt#  47, nband= 10, wtk=  0.00593, kpt=  0.1111  0.0444  0.0000 (reduced coord)
  -0.74475  -0.30602  -0.17853  -0.16531   0.09345   0.15136   0.19811   0.27811
   0.30408   0.36038
 kpt#  48, nband= 10, wtk=  0.00593, kpt=  0.1333  0.0444  0.0000 (reduced coord)
  -0.74088  -0.30141  -0.19164  -0.17267   0.09873   0.15659   0.20332   0.27969
   0.31758   0.34794
 kpt#  49, nband= 10, wtk=  0.00593, kpt=  0.1556  0.0444  0.0000 (reduced coord)
  -0.73614  -0.29580  -0.20686  -0.18087   0.10519   0.16297   0.20968   0.28054
   0.33339   0.33360
 kpt#  50, nband= 10, wtk=  0.00593, kpt=  0.1778  0.0444  0.0000 (reduced coord)
  -0.73055  -0.28919  -0.22383  -0.18959   0.11282   0.17050   0.21718   0.28052
   0.31693   0.35189
 prteigrs : prtvol=0 or 1, do not print more k-points.

 Total charge density [el/Bohr^3]
,     Maximum=    3.3146E-01  at reduced coord.    0.5417    0.8750    0.0000
,Next maximum=    3.3146E-01  at reduced coord.    0.5833    0.5417    0.0000
,     Minimum=    3.5485E-09  at reduced coord.    0.4583    0.0417    0.4896
,Next minimum=    3.5486E-09  at reduced coord.    0.5000    0.0417    0.4896
,  Integrated=    8.0000E+00

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  8.21872293805377E+00
    Hartree energy  =  2.37109655486101E+01
    XC energy       = -3.51207894325900E+00
    Ewald energy    =  1.40664047571042E+01
    PspCore energy  =  1.28415580081541E-01
    Loc. psp. energy= -5.42644703145829E+01
    NL   psp  energy=  2.42132490664177E-01
    >>>>>>>>> Etotal= -1.14099079433282E+01

 Other information on the energy :
    Total energy(eV)= -3.10479384853166E+02 ; Band energy (Ha)=  -2.9700973611E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  6.01194360E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  6.01194360E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.09795963E-06  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.2869E-01 GPa]
- sigma(1 1)=  1.76877458E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.76877458E-01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  3.23030820E-02  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      4.6448095337E+00  4.6448095337E+00  1.8897160000E+01 Bohr
              amu      1.20110000E+01
             ecut      3.00000000E+01 Hartree
           etotal     -1.1409907943E+01
            fcart     -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                      -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
-          fftalg         312
           istwfk        2    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
              ixc          11
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.22222222E-02  0.00000000E+00  0.00000000E+00
                       4.44444444E-02  0.00000000E+00  0.00000000E+00
                       6.66666667E-02  0.00000000E+00  0.00000000E+00
                       8.88888889E-02  0.00000000E+00  0.00000000E+00
                       1.11111111E-01  0.00000000E+00  0.00000000E+00
                       1.33333333E-01  0.00000000E+00  0.00000000E+00
                       1.55555556E-01  0.00000000E+00  0.00000000E+00
                       1.77777778E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.22222222E-01  0.00000000E+00  0.00000000E+00
                       2.44444444E-01  0.00000000E+00  0.00000000E+00
                       2.66666667E-01  0.00000000E+00  0.00000000E+00
                       2.88888889E-01  0.00000000E+00  0.00000000E+00
                       3.11111111E-01  0.00000000E+00  0.00000000E+00
                       3.33333333E-01  0.00000000E+00  0.00000000E+00
                       3.55555556E-01  0.00000000E+00  0.00000000E+00
                       3.77777778E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.22222222E-01  0.00000000E+00  0.00000000E+00
                       4.44444444E-01  0.00000000E+00  0.00000000E+00
                       4.66666667E-01  0.00000000E+00  0.00000000E+00
                       4.88888889E-01  0.00000000E+00  0.00000000E+00
                       4.44444444E-02  2.22222222E-02  0.00000000E+00
                       6.66666667E-02  2.22222222E-02  0.00000000E+00
                       8.88888889E-02  2.22222222E-02  0.00000000E+00
                       1.11111111E-01  2.22222222E-02  0.00000000E+00
                       1.33333333E-01  2.22222222E-02  0.00000000E+00
                       1.55555556E-01  2.22222222E-02  0.00000000E+00
                       1.77777778E-01  2.22222222E-02  0.00000000E+00
                       2.00000000E-01  2.22222222E-02  0.00000000E+00
                       2.22222222E-01  2.22222222E-02  0.00000000E+00
                       2.44444444E-01  2.22222222E-02  0.00000000E+00
                       2.66666667E-01  2.22222222E-02  0.00000000E+00
                       2.88888889E-01  2.22222222E-02  0.00000000E+00
                       3.11111111E-01  2.22222222E-02  0.00000000E+00
                       3.33333333E-01  2.22222222E-02  0.00000000E+00
                       3.55555556E-01  2.22222222E-02  0.00000000E+00
                       3.77777778E-01  2.22222222E-02  0.00000000E+00
                       4.00000000E-01  2.22222222E-02  0.00000000E+00
                       4.22222222E-01  2.22222222E-02  0.00000000E+00
                       4.44444444E-01  2.22222222E-02  0.00000000E+00
                       4.66666667E-01  2.22222222E-02  0.00000000E+00
                       4.88888889E-01  2.22222222E-02  0.00000000E+00
                      -4.88888889E-01  2.22222222E-02  0.00000000E+00
                       8.88888889E-02  4.44444444E-02  0.00000000E+00
                       1.11111111E-01  4.44444444E-02  0.00000000E+00
                       1.33333333E-01  4.44444444E-02  0.00000000E+00
                       1.55555556E-01  4.44444444E-02  0.00000000E+00
                       1.77777778E-01  4.44444444E-02  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt       45    0    0      0   45    0      0    0    1
          kptrlen      2.09016429E+02
P           mkmem         192
            natom           2
            nband          10
            ngfft          24      24      96
             nkpt         192
            nstep          25
             nsym          24
           ntypat           1
              occ      2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           prtdos           2
            rprim      8.6602540378E-01 -5.0000000000E-01  0.0000000000E+00
                       8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
          spgroup         191
           strten      6.0119436028E-06  6.0119435991E-06  1.0979596268E-06
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  1  0   0  1  0   0  0  1       1 -1  0   0 -1  0   0  0 -1
                       0  1  0  -1  1  0   0  0  1       0 -1  0   1 -1  0   0  0 -1
                      -1  0  0  -1  1  0   0  0  1       1  0  0   1 -1  0   0  0 -1
                      -1  1  0  -1  0  0   0  0  1       1 -1  0   1  0  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1 -1  0   0 -1  0   0  0  1      -1  1  0   0  1  0   0  0 -1
                       0 -1  0   1 -1  0   0  0  1       0  1  0  -1  1  0   0  0 -1
                       1  0  0   1 -1  0   0  0  1      -1  0  0  -1  1  0   0  0 -1
                       1 -1  0   1  0  0   0  0  1      -1  1  0  -1  0  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000    -0.0000000 -0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                      -0.0000000  0.0000000  0.0000000     0.0000000 -0.0000000  0.0000000
                      -0.0000000 -0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                      -0.0000000 -0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000 -0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000 -0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000 -0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000 -0.0000000  0.0000000    -0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000    -0.0000000 -0.0000000  0.0000000
           toldfe      1.00000000E-06 Hartree
            typat      1  1
              wtk        0.00049    0.00296    0.00296    0.00296    0.00296    0.00296
                         0.00296    0.00296    0.00296    0.00296    0.00296    0.00296
                         0.00296    0.00296    0.00296    0.00296    0.00296    0.00296
                         0.00296    0.00296    0.00296    0.00296    0.00296    0.00296
                         0.00593    0.00593    0.00593    0.00593    0.00593    0.00593
                         0.00593    0.00593    0.00593    0.00593    0.00593    0.00593
                         0.00593    0.00593    0.00593    0.00593    0.00593    0.00593
                         0.00593    0.00593    0.00296    0.00296    0.00593    0.00593
                         0.00593    0.00593
                       outvars : Printing only first  50 k-points.
           xangst      1.4190850134E+00  1.8727884963E-18  0.0000000000E+00
                       2.8381700268E+00  7.5979276349E-18  0.0000000000E+00
            xcart      2.6816820346E+00  3.5390573629E-18  0.0000000000E+00
                       5.3633640692E+00  1.4358002407E-17  0.0000000000E+00
             xred      3.3333333333E-01  3.3333333333E-01  0.0000000000E+00
                       6.6666666667E-01  6.6666666667E-01  0.0000000000E+00
            znucl        6.00000

================================================================================


- Timing analysis has been suppressed with timopt=0



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

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
 X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
 D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
 S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
 M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
 M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
 Computer Phys. Comm. 180, 2582-2615 (2009).
 Comment : the third generic paper describing the ABINIT project.
 Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
 is available at http://www.abinit.org/about/ABINIT_CPC_v10.pdf .
 The licence allows the authors to put it on the Web.

 [3] A brief introduction to the ABINIT software package.
 X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
 M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
 L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
 Z. Kristallogr. 220, 558-562 (2005).
 Comment : the second generic paper describing the ABINIT project. Note that this paper
 should be cited especially if you are using the GW part of ABINIT, as several authors
 of this part are not in the list of authors of the first or third paper.
 The .pdf of the latter paper is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
 Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
 the licence allows the authors to put it on the Web).


 And optionally :

 [4] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [5] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
-
- Proc.   0 individual time (sec): cpu=        183.4  wall=        183.3

================================================================================

 Calculation completed.
.Delivered    0 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=        183.4  wall=        183.3
