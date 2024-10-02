
.Version 7.8.2 of ABINIT 
.(sequential version, prepared for a i686_linux_gnu5.2 computer) 

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

.Starting date : Wed  6 Dec 2017.
- ( at 15h57 )
  
- input  file    -> ../tgw111.in
- output file    -> tgw1_1.out
- root for input  files -> tgw1i
- root for output files -> tgw1o


 DATASET    1 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         6  mffmem =         1
P  mgfft =        20   mkmem =        10 mpssoang=         3     mpw =       295
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       3.168 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.272 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================


 DATASET    2 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        40  mffmem =         1
P  mgfft =        20   mkmem =        10 mpssoang=         3     mpw =       295
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       3.815 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      1.803 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================


 DATASET    3 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        17  mffmem =         1
P  mgfft =        18   mkmem =        10 mpssoang=         3     mpw =       274
  mqgrid =      3001   natom =         2    nfft =      5832    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       3.024 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.713 Mbytes ; DEN or POT disk file :      0.046 Mbytes.
================================================================================


 DATASET    4 : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        30  mffmem =         1
P  mgfft =        18   mkmem =        10 mpssoang=         3     mpw =       274
  mqgrid =      3001   natom =         2    nfft =      5832    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       3.603 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      1.256 Mbytes ; DEN or POT disk file :      0.046 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0217000000E+01  1.0217000000E+01  1.0217000000E+01 Bohr
              amu      2.69815390E+01
             bdgw4          4       5
           diemac      1.20000000E+01
             ecut1     8.00000000E+00 Hartree
             ecut2     8.00000000E+00 Hartree
             ecut3     7.56385066E+00 Hartree
             ecut4     7.56385066E+00 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     0.00000000E+00 Hartree
          ecuteps3     3.59282906E+00 Hartree
          ecuteps4     0.00000000E+00 Hartree
         ecutsigx1     0.00000000E+00 Hartree
         ecutsigx2     0.00000000E+00 Hartree
         ecutsigx3     0.00000000E+00 Hartree
         ecutsigx4     5.10559920E+00 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     0.00000000E+00 Hartree
          ecutwfn3     7.56385066E+00 Hartree
          ecutwfn4     7.56385066E+00 Hartree
-          fftalg         112
           getden1          0
           getden2         -1
           getden3          0
           getden4          0
           getscr1          0
           getscr2          0
           getscr3          0
           getscr4         -1
           getwfk1          0
           getwfk2          0
           getwfk3         -1
           getwfk4         -2
             iscf1          7
             iscf2         -2
             iscf3          7
             iscf4          7
           jdtset        1    2    3    4
              kpt     -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -3.75000000E-01  0.00000000E+00  0.00000000E+00
            kptgw4    -1.25000000E-01  0.00000000E+00  0.00000000E+00
         kptrlatt        4   -4    4     -4    4    4     -4   -4    4
          kptrlen      4.08680000E+01
P           mkmem          10
            natom           2
            nband1          6
            nband2         40
            nband3         17
            nband4         30
           nbdbuf1          0
           nbdbuf2          5
           nbdbuf3          0
           nbdbuf4          0
           ndtset           4
            ngfft1         20      20      20
            ngfft2         20      20      20
            ngfft3         18      18      18
            ngfft4         18      18      18
             nkpt          10
           nkptgw1          0
           nkptgw2          0
           nkptgw3          0
           nkptgw4          1
           npweps1          0
           npweps2          0
           npweps3         89
           npweps4          0
          npwsigx1          0
          npwsigx2          0
          npwsigx3          0
          npwsigx4        169
           npwwfn1          0
           npwwfn2          0
           npwwfn3        283
           npwwfn4        283
           nsheps1          0
           nsheps2          0
           nsheps3          8
           nsheps4          0
          nshsigx1          0
          nshsigx2          0
          nshsigx3          0
          nshsigx4         12
            nstep          20
             nsym          48
           ntypat           1
              occ1     2.000000  2.000000  2.000000  0.000000  0.000000  0.000000
              occ3     2.000000  2.000000  2.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
              occ4     2.000000  2.000000  2.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          0
        optdriver3          3
        optdriver4          4
           ppmfrq1     0.00000000E+00 Hartree
           ppmfrq2     0.00000000E+00 Hartree
           ppmfrq3     6.13713734E-01 Hartree
           ppmfrq4     0.00000000E+00 Hartree
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         227
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
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
            tnons      0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
                       0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
           tolvrs1     1.00000000E-10
           tolvrs2     0.00000000E+00
           tolvrs3     0.00000000E+00
           tolvrs4     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-18
           tolwfr3     0.00000000E+00
           tolwfr4     0.00000000E+00
            typat      1  1
              wtk        0.09375    0.09375    0.09375    0.18750    0.09375    0.09375
                         0.09375    0.18750    0.03125    0.03125
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3516508850E+00  1.3516508850E+00  1.3516508850E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5542500000E+00  2.5542500000E+00  2.5542500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       13.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

 chkinp: Checking input parameters for consistency, jdtset=   4.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1085000  5.1085000  G(1)= -0.0978761  0.0978761  0.0978761
 R(2)=  5.1085000  0.0000000  5.1085000  G(2)=  0.0978761 -0.0978761  0.0978761
 R(3)=  5.1085000  5.1085000  0.0000000  G(3)=  0.0978761  0.0978761 -0.0978761
 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../../Psps_for_tests/13al.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/13al.pspnc
-  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
 pspatm: atomic psp has been read  and splines computed

   2.65863118E+00                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating      6 bands with npw=     295 for ikpt=   1 by node    0
P newkpt: treating      6 bands with npw=     283 for ikpt=   2 by node    0
P newkpt: treating      6 bands with npw=     292 for ikpt=   3 by node    0
P newkpt: treating      6 bands with npw=     289 for ikpt=   4 by node    0
P newkpt: treating      6 bands with npw=     292 for ikpt=   5 by node    0
P newkpt: treating      6 bands with npw=     286 for ikpt=   6 by node    0
P newkpt: treating      6 bands with npw=     291 for ikpt=   7 by node    0
P newkpt: treating      6 bands with npw=     286 for ikpt=   8 by node    0
P newkpt: treating      6 bands with npw=     295 for ikpt=   9 by node    0
P newkpt: treating      6 bands with npw=     287 for ikpt=  10 by node    0

_setup2: Arith. and geom. avg. npw (full set) are     289.031     289.009

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -4.7464429153066    -4.746E+00 3.291E-03 8.989E-01
 ETOT  2  -4.7478805318794    -1.438E-03 1.948E-05 3.713E-02
 ETOT  3  -4.7479028317977    -2.230E-05 5.510E-05 1.921E-04
 ETOT  4  -4.7479028949403    -6.314E-08 8.493E-06 3.141E-06
 ETOT  5  -4.7479028963856    -1.445E-09 2.079E-05 3.671E-08
 ETOT  6  -4.7479028964019    -1.625E-11 2.959E-06 8.553E-11

 At SCF step    6       vres2   =  8.55E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.69049664E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.69049664E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.69049664E-04  sigma(2 1)=  0.00000000E+00

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   5.0811E-08; max=  2.9585E-06
  -0.1250 -0.2500  0.0000    1  5.10426E-10 kpt; spin; max resid(k); each band:
  2.09E-13 8.38E-14 6.44E-15 7.12E-14 1.85E-13 5.10E-10
  -0.1250  0.5000  0.0000    1  3.85749E-09 kpt; spin; max resid(k); each band:
  8.84E-14 1.23E-13 9.35E-14 2.97E-14 2.38E-13 3.86E-09
  -0.2500 -0.3750  0.0000    1  2.54334E-13 kpt; spin; max resid(k); each band:
  2.54E-13 7.62E-14 1.79E-13 5.19E-15 2.28E-13 1.81E-13
  -0.1250 -0.3750  0.1250    1  1.30263E-12 kpt; spin; max resid(k); each band:
  1.79E-13 2.21E-13 1.19E-13 1.39E-13 2.54E-13 1.30E-12
  -0.1250  0.2500  0.0000    1  3.18564E-09 kpt; spin; max resid(k); each band:
  9.17E-14 1.74E-13 8.97E-14 5.87E-15 1.10E-10 3.19E-09
  -0.2500  0.3750  0.0000    1  4.17656E-08 kpt; spin; max resid(k); each band:
  5.10E-14 2.19E-13 1.50E-13 3.75E-14 2.10E-13 4.18E-08
  -0.3750  0.5000  0.0000    1  2.41897E-13 kpt; spin; max resid(k); each band:
  2.42E-13 1.54E-13 1.34E-13 5.24E-15 2.40E-13 2.40E-13
  -0.2500  0.5000  0.1250    1  4.99810E-13 kpt; spin; max resid(k); each band:
  1.29E-13 1.45E-13 2.54E-13 1.50E-13 2.34E-13 5.00E-13
  -0.1250  0.0000  0.0000    1  2.95853E-06 kpt; spin; max resid(k); each band:
  1.20E-13 5.95E-14 1.56E-14 1.49E-14 2.96E-06 1.87E-14
  -0.3750  0.0000  0.0000    1  4.07071E-08 kpt; spin; max resid(k); each band:
  1.96E-13 2.68E-13 9.57E-15 6.79E-15 4.07E-08 1.26E-14
 reduced coordinates (array xred) for    2 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.250000000000      0.250000000000      0.250000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      1.35165088504101     1.35165088504101     1.35165088504101

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales= 10.217000000000 10.217000000000 10.217000000000 bohr
              =  5.406603540164  5.406603540164  5.406603540164 angstroms
 prteigrs : about to open file tgw1o_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.27552   Average Vxc (hartree)=  -0.33910
 Eigenvalues (hartree) for nkpt=  10  k points:
 kpt#   1, nband=  6, wtk=  0.09375, kpt= -0.1250 -0.2500  0.0000 (reduced coord)
  -0.13176   0.17021   0.22886   0.24258   0.33568   0.39939
 kpt#   2, nband=  6, wtk=  0.09375, kpt= -0.1250  0.5000  0.0000 (reduced coord)
  -0.05573   0.02037   0.19910   0.22326   0.33125   0.39354
 kpt#   3, nband=  6, wtk=  0.09375, kpt= -0.2500 -0.3750  0.0000 (reduced coord)
  -0.08872   0.11940   0.17173   0.19237   0.29237   0.34003
 kpt#   4, nband=  6, wtk=  0.18750, kpt= -0.1250 -0.3750  0.1250 (reduced coord)
  -0.06920   0.07132   0.14872   0.20132   0.35234   0.38817
 kpt#   5, nband=  6, wtk=  0.09375, kpt= -0.1250  0.2500  0.0000 (reduced coord)
  -0.11047   0.11321   0.19008   0.25996   0.37441   0.38632
 kpt#   6, nband=  6, wtk=  0.09375, kpt= -0.2500  0.3750  0.0000 (reduced coord)
  -0.03521   0.03733   0.11618   0.20812   0.30802   0.45095
 kpt#   7, nband=  6, wtk=  0.09375, kpt= -0.3750  0.5000  0.0000 (reduced coord)
  -0.02640   0.05007   0.13145   0.17347   0.26739   0.31456
 kpt#   8, nband=  6, wtk=  0.18750, kpt= -0.2500  0.5000  0.1250 (reduced coord)
  -0.01373   0.04218   0.10399   0.15129   0.33279   0.40259
 kpt#   9, nband=  6, wtk=  0.03125, kpt= -0.1250  0.0000  0.0000 (reduced coord)
  -0.15364   0.22705   0.27552   0.27552   0.37087   0.37442
 kpt#  10, nband=  6, wtk=  0.03125, kpt= -0.3750  0.0000  0.0000 (reduced coord)
  -0.09051   0.05487   0.24628   0.24628   0.36027   0.36749
 Total charge density [el/Bohr^3]
,     Maximum=    5.4700E-02  at reduced coord.    0.1000    0.1500    0.6500
,Next maximum=    5.4700E-02  at reduced coord.    0.1500    0.1000    0.6500
,     Minimum=    3.6132E-03  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=    3.6132E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    6.0000E+00

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.78126291069286E+00
    Hartree energy  =  1.50368344248516E-01
    XC energy       = -2.42084814500475E+00
    Ewald energy    = -4.74514851691068E+00
    PspCore energy  =  9.97121095210471E-03
    Loc. psp. energy= -6.83493974507360E-01
    NL   psp  energy=  1.15998527412746E+00
    >>>>>>>>> Etotal= -4.74790289640186E+00

 Other information on the energy :
    Total energy(eV)= -1.29197008243997E+02 ; Band energy (Ha)=   3.4739730400E-01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.69049664E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.69049664E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.69049664E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  2.5568E+01 GPa]
- sigma(1 1)= -2.55683195E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -2.55683195E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -2.55683195E+01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    1

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1085000  5.1085000  G(1)= -0.0978761  0.0978761  0.0978761
 R(2)=  5.1085000  0.0000000  5.1085000  G(2)=  0.0978761 -0.0978761  0.0978761
 R(3)=  5.1085000  5.1085000  0.0000000  G(3)=  0.0978761  0.0978761 -0.0978761
 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426
--------------------------------------------------------------------------------

P newkpt: treating     40 bands with npw=     295 for ikpt=   1 by node    0
P newkpt: treating     40 bands with npw=     283 for ikpt=   2 by node    0
P newkpt: treating     40 bands with npw=     292 for ikpt=   3 by node    0
P newkpt: treating     40 bands with npw=     289 for ikpt=   4 by node    0
P newkpt: treating     40 bands with npw=     292 for ikpt=   5 by node    0
P newkpt: treating     40 bands with npw=     286 for ikpt=   6 by node    0
P newkpt: treating     40 bands with npw=     291 for ikpt=   7 by node    0
P newkpt: treating     40 bands with npw=     286 for ikpt=   8 by node    0
P newkpt: treating     40 bands with npw=     295 for ikpt=   9 by node    0
P newkpt: treating     40 bands with npw=     287 for ikpt=  10 by node    0


================================================================================
 prteigrs : about to open file tgw1o_DS2_EIG
 Non-SCF case, kpt    1 ( -0.12500 -0.25000  0.00000), residuals and eigenvalues=
  5.59E-20  4.73E-19  5.21E-20  5.41E-20  5.51E-19  9.34E-20  1.17E-19  2.78E-19
  2.18E-19  2.00E-19  3.24E-19  3.18E-19  7.94E-19  9.95E-19  4.64E-19  4.25E-19
  2.70E-19  1.58E-19  1.25E-19  9.43E-20  1.95E-19  6.50E-19  9.34E-20  3.85E-19
  1.11E-19  1.84E-19  9.92E-19  3.93E-19  5.75E-19  9.53E-19  5.35E-19  7.11E-19
  6.29E-19  4.54E-19  7.30E-19  4.81E-16  2.53E-15  7.68E-14  8.99E-12  2.43E-05
 -1.3176E-01  1.7021E-01  2.2886E-01  2.4258E-01  3.3568E-01  3.9939E-01
  4.2510E-01  4.3288E-01  5.2628E-01  5.8283E-01  6.1526E-01  6.7057E-01
  7.0669E-01  7.5593E-01  8.9553E-01  9.2839E-01  9.3651E-01  1.0491E+00
  1.0659E+00  1.1178E+00  1.2383E+00  1.2961E+00  1.3197E+00  1.3669E+00
  1.4074E+00  1.4159E+00  1.4203E+00  1.4609E+00  1.4893E+00  1.5055E+00
  1.5212E+00  1.5687E+00  1.6019E+00  1.6367E+00  1.6377E+00  1.7012E+00
  1.7105E+00  1.7337E+00  1.7532E+00  1.8370E+00
  prteigrs : nnsclo,ikpt=   20    1 max resid (incl. the buffer)=  2.42518E-05
 Non-SCF case, kpt    2 ( -0.12500  0.50000  0.00000), residuals and eigenvalues=
  6.22E-20  6.35E-20  1.91E-20  2.64E-19  8.44E-19  3.80E-20  8.84E-20  4.97E-20
  2.98E-20  6.03E-19  5.93E-19  7.10E-20  1.79E-19  3.23E-19  7.78E-20  3.88E-19
  5.52E-20  8.38E-19  1.58E-19  7.42E-19  2.86E-19  1.87E-19  2.59E-19  1.76E-19
  6.40E-19  9.85E-20  8.42E-20  9.14E-20  5.29E-19  2.09E-19  4.75E-19  3.47E-19
  3.69E-19  6.06E-19  2.00E-19  2.49E-18  1.50E-15  2.70E-10  1.50E-06  1.25E-05
 -5.5729E-02  2.0373E-02  1.9910E-01  2.2326E-01  3.3125E-01  3.9354E-01
  4.0545E-01  5.2239E-01  5.5204E-01  6.2111E-01  6.8855E-01  6.9630E-01
  7.5424E-01  8.6202E-01  9.3369E-01  9.5216E-01  9.8863E-01  1.0278E+00
  1.0738E+00  1.0777E+00  1.1615E+00  1.1842E+00  1.1914E+00  1.2889E+00
  1.2897E+00  1.3019E+00  1.3541E+00  1.3571E+00  1.4407E+00  1.4645E+00
  1.4830E+00  1.5089E+00  1.5607E+00  1.6119E+00  1.6525E+00  1.6790E+00
  1.7338E+00  1.8096E+00  1.8765E+00  1.8771E+00
  prteigrs : nnsclo,ikpt=   20    2 max resid (incl. the buffer)=  1.25481E-05
 Non-SCF case, kpt    3 ( -0.25000 -0.37500  0.00000), residuals and eigenvalues=
  6.67E-19  7.69E-19  2.11E-20  7.87E-19  6.04E-20  4.57E-20  3.40E-19  6.33E-20
  7.74E-20  3.71E-19  6.93E-20  6.74E-20  6.71E-19  1.53E-19  3.82E-20  8.04E-20
  7.36E-19  6.74E-20  5.08E-19  5.05E-19  1.31E-19  2.94E-19  5.83E-19  4.88E-19
  4.93E-19  5.24E-19  1.97E-19  2.98E-19  7.16E-19  7.81E-19  3.50E-19  5.92E-19
  6.23E-19  5.75E-19  5.49E-19  8.40E-19  1.74E-15  7.12E-11  1.46E-07  4.79E-05
 -8.8717E-02  1.1940E-01  1.7173E-01  1.9237E-01  2.9237E-01  3.4003E-01
  4.9324E-01  5.0674E-01  6.0373E-01  6.6084E-01  7.1040E-01  7.3772E-01
  7.5727E-01  7.9988E-01  8.0463E-01  8.5410E-01  9.2714E-01  1.0297E+00
  1.0743E+00  1.1238E+00  1.1611E+00  1.2212E+00  1.2274E+00  1.2549E+00
  1.3238E+00  1.3316E+00  1.3676E+00  1.4636E+00  1.4701E+00  1.5427E+00
  1.5466E+00  1.5946E+00  1.5983E+00  1.6123E+00  1.6634E+00  1.6774E+00
  1.7123E+00  1.7694E+00  1.8004E+00  1.8378E+00
  prteigrs : nnsclo,ikpt=   20    3 max resid (incl. the buffer)=  4.78916E-05
 Non-SCF case, kpt    4 ( -0.12500 -0.37500  0.12500), residuals and eigenvalues=
  8.94E-20  7.41E-19  1.85E-19  8.13E-19  5.18E-20  4.46E-20  2.99E-20  5.36E-20
  1.84E-19  2.95E-19  4.62E-19  8.90E-20  7.42E-20  6.23E-20  1.83E-19  4.03E-19
  8.29E-19  5.37E-19  5.22E-19  3.74E-19  9.25E-19  7.40E-20  2.00E-19  1.46E-19
  5.31E-19  1.21E-19  4.00E-19  4.36E-19  1.13E-19  3.99E-19  3.66E-19  4.55E-19
  4.44E-19  8.52E-19  1.95E-19  1.99E-17  2.92E-15  3.14E-13  1.12E-10  2.37E-06
 -6.9202E-02  7.1324E-02  1.4872E-01  2.0132E-01  3.5234E-01  3.8817E-01
  4.3611E-01  4.9049E-01  5.8674E-01  6.1657E-01  6.7394E-01  7.5859E-01
  7.9762E-01  8.0676E-01  8.7475E-01  9.5375E-01  9.6521E-01  1.0014E+00
  1.0635E+00  1.1018E+00  1.1607E+00  1.1679E+00  1.1874E+00  1.2440E+00
  1.3020E+00  1.3247E+00  1.3807E+00  1.4237E+00  1.4308E+00  1.4607E+00
  1.4949E+00  1.5363E+00  1.5978E+00  1.6609E+00  1.6751E+00  1.7015E+00
  1.7423E+00  1.7687E+00  1.7924E+00  1.8542E+00
  prteigrs : nnsclo,ikpt=   20    4 max resid (incl. the buffer)=  2.36944E-06
 Non-SCF case, kpt    5 ( -0.12500  0.25000  0.00000), residuals and eigenvalues=
  1.36E-19  2.79E-20  4.81E-19  3.63E-20  4.95E-20  2.83E-20  1.26E-19  2.41E-19
  1.54E-19  1.04E-19  6.41E-19  6.13E-19  3.48E-20  2.55E-20  3.43E-19  5.29E-19
  5.94E-19  1.95E-19  3.69E-19  1.60E-19  6.56E-19  1.47E-19  4.58E-19  6.95E-19
  6.39E-20  1.09E-19  1.10E-19  1.79E-19  2.64E-19  2.58E-19  2.14E-19  4.68E-19
  4.79E-19  5.60E-19  6.17E-19  9.10E-19  5.43E-19  3.90E-17  1.19E-13  1.84E-07
 -1.1047E-01  1.1321E-01  1.9008E-01  2.5995E-01  3.7441E-01  3.8632E-01
  4.0473E-01  4.6120E-01  4.9637E-01  5.8827E-01  6.6505E-01  7.2171E-01
  7.6174E-01  7.9607E-01  8.5502E-01  9.2498E-01  9.5089E-01  1.0177E+00
  1.0705E+00  1.1157E+00  1.2323E+00  1.2547E+00  1.2649E+00  1.3285E+00
  1.3525E+00  1.3791E+00  1.3961E+00  1.4280E+00  1.4611E+00  1.5164E+00
  1.5182E+00  1.5825E+00  1.6148E+00  1.6222E+00  1.6484E+00  1.6490E+00
  1.6582E+00  1.7144E+00  1.7539E+00  1.7910E+00
  prteigrs : nnsclo,ikpt=   20    5 max resid (incl. the buffer)=  1.83745E-07
 Non-SCF case, kpt    6 ( -0.25000  0.37500  0.00000), residuals and eigenvalues=
  5.91E-19  1.96E-19  1.28E-19  8.01E-19  3.44E-19  4.23E-20  2.94E-20  1.17E-19
  4.17E-20  1.55E-19  1.28E-19  9.49E-20  2.07E-19  2.32E-19  7.60E-19  3.77E-20
  4.04E-20  7.38E-20  1.63E-19  6.94E-19  7.26E-19  7.57E-20  2.57E-19  1.87E-19
  8.21E-20  3.74E-19  8.33E-20  4.59E-19  5.74E-19  5.97E-19  5.67E-19  6.08E-19
  7.46E-19  8.07E-19  6.37E-19  1.02E-18  1.37E-10  6.18E-10  3.46E-09  3.73E-05
 -3.5207E-02  3.7334E-02  1.1618E-01  2.0812E-01  3.0802E-01  4.5095E-01
  4.6212E-01  5.3161E-01  5.3271E-01  5.7830E-01  6.8582E-01  7.9986E-01
  8.1310E-01  8.7055E-01  9.0524E-01  9.4794E-01  9.7403E-01  1.0106E+00
  1.0357E+00  1.0591E+00  1.1352E+00  1.1698E+00  1.1770E+00  1.1984E+00
  1.2504E+00  1.2956E+00  1.3370E+00  1.3595E+00  1.4438E+00  1.4963E+00
  1.5122E+00  1.5591E+00  1.5944E+00  1.6181E+00  1.6410E+00  1.7008E+00
  1.7993E+00  1.8192E+00  1.8240E+00  1.8776E+00
  prteigrs : nnsclo,ikpt=   20    6 max resid (incl. the buffer)=  3.72587E-05
 Non-SCF case, kpt    7 ( -0.37500  0.50000  0.00000), residuals and eigenvalues=
  5.27E-19  9.22E-20  2.05E-19  9.05E-19  3.16E-20  5.23E-20  2.28E-19  9.31E-19
  2.32E-19  5.13E-19  7.32E-19  1.51E-19  4.07E-19  1.19E-19  2.38E-19  2.09E-19
  4.24E-19  4.36E-20  1.58E-19  5.89E-20  1.97E-19  1.69E-19  5.15E-19  1.80E-19
  4.50E-19  4.00E-19  8.70E-19  4.90E-19  7.23E-19  2.53E-19  2.75E-19  1.51E-19
  3.34E-19  6.31E-19  3.19E-19  5.70E-19  4.55E-14  1.02E-10  1.30E-09  2.10E-10
 -2.6395E-02  5.0069E-02  1.3145E-01  1.7347E-01  2.6739E-01  3.1456E-01
  5.6290E-01  5.8848E-01  6.4605E-01  6.7825E-01  7.0173E-01  7.9514E-01
  7.9921E-01  8.1251E-01  8.3875E-01  9.0831E-01  9.3182E-01  9.5431E-01
  1.0125E+00  1.0494E+00  1.0702E+00  1.1247E+00  1.1452E+00  1.2155E+00
  1.3440E+00  1.3627E+00  1.4140E+00  1.4280E+00  1.4489E+00  1.5103E+00
  1.5357E+00  1.5589E+00  1.5914E+00  1.6383E+00  1.6522E+00  1.6636E+00
  1.7461E+00  1.7990E+00  1.8077E+00  1.8117E+00
  prteigrs : nnsclo,ikpt=   20    7 max resid (incl. the buffer)=  1.29976E-09
 Non-SCF case, kpt    8 ( -0.25000  0.50000  0.12500), residuals and eigenvalues=
  2.78E-19  2.38E-19  2.69E-19  2.60E-20  3.37E-20  2.06E-20  5.62E-19  3.88E-19
  1.47E-19  3.18E-19  1.01E-19  1.01E-19  4.98E-19  6.62E-19  6.99E-19  3.26E-19
  4.76E-19  2.01E-19  7.58E-20  7.53E-20  1.36E-19  1.65E-19  3.21E-19  4.61E-20
  9.01E-19  1.17E-19  2.12E-19  4.70E-19  2.68E-19  6.79E-19  2.84E-19  6.82E-19
  2.55E-19  9.59E-19  3.47E-19  6.41E-16  6.78E-15  5.06E-12  1.23E-09  2.42E-05
 -1.3728E-02  4.2180E-02  1.0399E-01  1.5129E-01  3.3279E-01  4.0259E-01
  4.5916E-01  5.3256E-01  5.8865E-01  6.7217E-01  7.2644E-01  7.5409E-01
  8.3499E-01  8.7027E-01  8.8949E-01  9.0472E-01  9.6622E-01  1.0053E+00
  1.0094E+00  1.0587E+00  1.1002E+00  1.1107E+00  1.1671E+00  1.2384E+00
  1.2556E+00  1.2885E+00  1.3611E+00  1.3818E+00  1.4058E+00  1.4483E+00
  1.4875E+00  1.5975E+00  1.6636E+00  1.6680E+00  1.6943E+00  1.7344E+00
  1.7533E+00  1.7926E+00  1.8180E+00  1.8693E+00
  prteigrs : nnsclo,ikpt=   20    8 max resid (incl. the buffer)=  2.42137E-05
 Non-SCF case, kpt    9 ( -0.12500  0.00000  0.00000), residuals and eigenvalues=
  1.70E-19  3.14E-19  4.27E-19  7.87E-19  3.28E-20  9.59E-19  1.48E-20  2.17E-20
  4.05E-20  2.38E-20  1.87E-20  4.87E-20  9.90E-20  1.10E-19  4.49E-19  4.39E-20
  6.40E-20  9.85E-20  9.37E-19  9.00E-19  6.45E-20  7.67E-20  7.80E-19  1.03E-19
  2.89E-19  4.69E-19  4.12E-19  1.25E-19  8.14E-19  2.90E-19  9.85E-19  4.74E-19
  5.77E-19  7.55E-19  4.49E-19  1.09E-14  1.18E-13  6.26E-13  5.67E-13  2.69E-05
 -1.5364E-01  2.2705E-01  2.7552E-01  2.7552E-01  3.7077E-01  3.7442E-01
  3.7442E-01  4.8457E-01  4.8457E-01  5.2237E-01  5.6606E-01  6.1653E-01
  6.7809E-01  6.7809E-01  8.2684E-01  1.0298E+00  1.0298E+00  1.0629E+00
  1.1439E+00  1.1439E+00  1.2763E+00  1.2763E+00  1.2917E+00  1.3001E+00
  1.3968E+00  1.3968E+00  1.4571E+00  1.5266E+00  1.5413E+00  1.5413E+00
  1.6001E+00  1.6001E+00  1.6570E+00  1.6570E+00  1.6820E+00  1.7478E+00
  1.7662E+00  1.7725E+00  1.7725E+00  1.8367E+00
  prteigrs : nnsclo,ikpt=   20    9 max resid (incl. the buffer)=  2.69422E-05
 Non-SCF case, kpt   10 ( -0.37500  0.00000  0.00000), residuals and eigenvalues=
  4.39E-20  1.96E-19  3.21E-19  1.95E-20  7.92E-19  2.11E-20  2.63E-19  2.71E-19
  1.32E-19  5.42E-20  3.16E-20  5.04E-19  2.22E-19  6.97E-19  3.84E-19  6.08E-20
  9.25E-20  2.45E-19  7.68E-19  4.71E-19  4.71E-19  7.99E-20  3.04E-19  9.29E-19
  9.43E-19  1.37E-19  2.12E-19  1.98E-19  6.16E-19  2.76E-19  7.38E-19  2.88E-19
  7.52E-19  2.65E-19  7.45E-19  2.88E-18  2.10E-18  1.05E-12  8.05E-17  3.95E-08
 -9.0507E-02  5.4875E-02  2.4628E-01  2.4628E-01  3.6027E-01  3.6749E-01
  3.6749E-01  5.0139E-01  5.5214E-01  5.5214E-01  6.6533E-01  7.6234E-01
  7.6234E-01  8.2467E-01  8.8483E-01  9.0623E-01  9.0623E-01  1.0560E+00
  1.1441E+00  1.1502E+00  1.1502E+00  1.2419E+00  1.2419E+00  1.3198E+00
  1.3198E+00  1.3279E+00  1.3488E+00  1.4511E+00  1.4511E+00  1.4566E+00
  1.4817E+00  1.4817E+00  1.5522E+00  1.5787E+00  1.7348E+00  1.7348E+00
  1.7349E+00  1.7661E+00  1.7892E+00  1.7892E+00
  prteigrs : nnsclo,ikpt=   20   10 max resid (incl. the buffer)=  3.95495E-08
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   4.4339E-07; max=  4.7892E-05
  -0.1250 -0.2500  0.0000    1  2.42518E-05 kpt; spin; max resid(k); each band:
  5.59E-20 4.73E-19 5.21E-20 5.41E-20 5.51E-19 9.34E-20 1.17E-19 2.78E-19
  2.18E-19 2.00E-19 3.24E-19 3.18E-19 7.94E-19 9.95E-19 4.64E-19 4.25E-19
  2.70E-19 1.58E-19 1.25E-19 9.43E-20 1.95E-19 6.50E-19 9.34E-20 3.85E-19
  1.11E-19 1.84E-19 9.92E-19 3.93E-19 5.75E-19 9.53E-19 5.35E-19 7.11E-19
  6.29E-19 4.54E-19 7.30E-19 4.81E-16 2.53E-15 7.68E-14 8.99E-12 2.43E-05
  -0.1250  0.5000  0.0000    1  1.25481E-05 kpt; spin; max resid(k); each band:
  6.22E-20 6.35E-20 1.91E-20 2.64E-19 8.44E-19 3.80E-20 8.84E-20 4.97E-20
  2.98E-20 6.03E-19 5.93E-19 7.10E-20 1.79E-19 3.23E-19 7.78E-20 3.88E-19
  5.52E-20 8.38E-19 1.58E-19 7.42E-19 2.86E-19 1.87E-19 2.59E-19 1.76E-19
  6.40E-19 9.85E-20 8.42E-20 9.14E-20 5.29E-19 2.09E-19 4.75E-19 3.47E-19
  3.69E-19 6.06E-19 2.00E-19 2.49E-18 1.50E-15 2.70E-10 1.50E-06 1.25E-05
  -0.2500 -0.3750  0.0000    1  4.78916E-05 kpt; spin; max resid(k); each band:
  6.67E-19 7.69E-19 2.11E-20 7.87E-19 6.04E-20 4.57E-20 3.40E-19 6.33E-20
  7.74E-20 3.71E-19 6.93E-20 6.74E-20 6.71E-19 1.53E-19 3.82E-20 8.04E-20
  7.36E-19 6.74E-20 5.08E-19 5.05E-19 1.31E-19 2.94E-19 5.83E-19 4.88E-19
  4.93E-19 5.24E-19 1.97E-19 2.98E-19 7.16E-19 7.81E-19 3.50E-19 5.92E-19
  6.23E-19 5.75E-19 5.49E-19 8.40E-19 1.74E-15 7.12E-11 1.46E-07 4.79E-05
  -0.1250 -0.3750  0.1250    1  2.36944E-06 kpt; spin; max resid(k); each band:
  8.94E-20 7.41E-19 1.85E-19 8.13E-19 5.18E-20 4.46E-20 2.99E-20 5.36E-20
  1.84E-19 2.95E-19 4.62E-19 8.90E-20 7.42E-20 6.23E-20 1.83E-19 4.03E-19
  8.29E-19 5.37E-19 5.22E-19 3.74E-19 9.25E-19 7.40E-20 2.00E-19 1.46E-19
  5.31E-19 1.21E-19 4.00E-19 4.36E-19 1.13E-19 3.99E-19 3.66E-19 4.55E-19
  4.44E-19 8.52E-19 1.95E-19 1.99E-17 2.92E-15 3.14E-13 1.12E-10 2.37E-06
  -0.1250  0.2500  0.0000    1  1.83745E-07 kpt; spin; max resid(k); each band:
  1.36E-19 2.79E-20 4.81E-19 3.63E-20 4.95E-20 2.83E-20 1.26E-19 2.41E-19
  1.54E-19 1.04E-19 6.41E-19 6.13E-19 3.48E-20 2.55E-20 3.43E-19 5.29E-19
  5.94E-19 1.95E-19 3.69E-19 1.60E-19 6.56E-19 1.47E-19 4.58E-19 6.95E-19
  6.39E-20 1.09E-19 1.10E-19 1.79E-19 2.64E-19 2.58E-19 2.14E-19 4.68E-19
  4.79E-19 5.60E-19 6.17E-19 9.10E-19 5.43E-19 3.90E-17 1.19E-13 1.84E-07
  -0.2500  0.3750  0.0000    1  3.72587E-05 kpt; spin; max resid(k); each band:
  5.91E-19 1.96E-19 1.28E-19 8.01E-19 3.44E-19 4.23E-20 2.94E-20 1.17E-19
  4.17E-20 1.55E-19 1.28E-19 9.49E-20 2.07E-19 2.32E-19 7.60E-19 3.77E-20
  4.04E-20 7.38E-20 1.63E-19 6.94E-19 7.26E-19 7.57E-20 2.57E-19 1.87E-19
  8.21E-20 3.74E-19 8.33E-20 4.59E-19 5.74E-19 5.97E-19 5.67E-19 6.08E-19
  7.46E-19 8.07E-19 6.37E-19 1.02E-18 1.37E-10 6.18E-10 3.46E-09 3.73E-05
  -0.3750  0.5000  0.0000    1  1.29976E-09 kpt; spin; max resid(k); each band:
  5.27E-19 9.22E-20 2.05E-19 9.05E-19 3.16E-20 5.23E-20 2.28E-19 9.31E-19
  2.32E-19 5.13E-19 7.32E-19 1.51E-19 4.07E-19 1.19E-19 2.38E-19 2.09E-19
  4.24E-19 4.36E-20 1.58E-19 5.89E-20 1.97E-19 1.69E-19 5.15E-19 1.80E-19
  4.50E-19 4.00E-19 8.70E-19 4.90E-19 7.23E-19 2.53E-19 2.75E-19 1.51E-19
  3.34E-19 6.31E-19 3.19E-19 5.70E-19 4.55E-14 1.02E-10 1.30E-09 2.10E-10
  -0.2500  0.5000  0.1250    1  2.42137E-05 kpt; spin; max resid(k); each band:
  2.78E-19 2.38E-19 2.69E-19 2.60E-20 3.37E-20 2.06E-20 5.62E-19 3.88E-19
  1.47E-19 3.18E-19 1.01E-19 1.01E-19 4.98E-19 6.62E-19 6.99E-19 3.26E-19
  4.76E-19 2.01E-19 7.58E-20 7.53E-20 1.36E-19 1.65E-19 3.21E-19 4.61E-20
  9.01E-19 1.17E-19 2.12E-19 4.70E-19 2.68E-19 6.79E-19 2.84E-19 6.82E-19
  2.55E-19 9.59E-19 3.47E-19 6.41E-16 6.78E-15 5.06E-12 1.23E-09 2.42E-05
  -0.1250  0.0000  0.0000    1  2.69422E-05 kpt; spin; max resid(k); each band:
  1.70E-19 3.14E-19 4.27E-19 7.87E-19 3.28E-20 9.59E-19 1.48E-20 2.17E-20
  4.05E-20 2.38E-20 1.87E-20 4.87E-20 9.90E-20 1.10E-19 4.49E-19 4.39E-20
  6.40E-20 9.85E-20 9.37E-19 9.00E-19 6.45E-20 7.67E-20 7.80E-19 1.03E-19
  2.89E-19 4.69E-19 4.12E-19 1.25E-19 8.14E-19 2.90E-19 9.85E-19 4.74E-19
  5.77E-19 7.55E-19 4.49E-19 1.09E-14 1.18E-13 6.26E-13 5.67E-13 2.69E-05
  -0.3750  0.0000  0.0000    1  3.95495E-08 kpt; spin; max resid(k); each band:
  4.39E-20 1.96E-19 3.21E-19 1.95E-20 7.92E-19 2.11E-20 2.63E-19 2.71E-19
  1.32E-19 5.42E-20 3.16E-20 5.04E-19 2.22E-19 6.97E-19 3.84E-19 6.08E-20
  9.25E-20 2.45E-19 7.68E-19 4.71E-19 4.71E-19 7.99E-20 3.04E-19 9.29E-19
  9.43E-19 1.37E-19 2.12E-19 1.98E-19 6.16E-19 2.76E-19 7.38E-19 2.88E-19
  7.52E-19 2.65E-19 7.45E-19 2.88E-18 2.10E-18 1.05E-12 8.05E-17 3.95E-08
 reduced coordinates (array xred) for    2 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.250000000000      0.250000000000      0.250000000000

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      1.35165088504101     1.35165088504101     1.35165088504101
 length scales= 10.217000000000 10.217000000000 10.217000000000 bohr
              =  5.406603540164  5.406603540164  5.406603540164 angstroms
 prteigrs : about to open file tgw1o_DS2_EIG
 Eigenvalues (hartree) for nkpt=  10  k points:
 kpt#   1, nband= 40, wtk=  0.09375, kpt= -0.1250 -0.2500  0.0000 (reduced coord)
  -0.13176   0.17021   0.22886   0.24258   0.33568   0.39939   0.42510   0.43288
   0.52628   0.58283   0.61526   0.67057   0.70669   0.75593   0.89553   0.92839
   0.93651   1.04911   1.06587   1.11781   1.23825   1.29615   1.31968   1.36689
   1.40738   1.41586   1.42032   1.46089   1.48931   1.50553   1.52121   1.56872
   1.60188   1.63666   1.63769   1.70124   1.71050   1.73368   1.75323   1.83703
 kpt#   2, nband= 40, wtk=  0.09375, kpt= -0.1250  0.5000  0.0000 (reduced coord)
  -0.05573   0.02037   0.19910   0.22326   0.33125   0.39354   0.40545   0.52239
   0.55204   0.62111   0.68855   0.69630   0.75424   0.86202   0.93369   0.95216
   0.98863   1.02780   1.07383   1.07774   1.16146   1.18420   1.19142   1.28890
   1.28967   1.30185   1.35409   1.35712   1.44068   1.46454   1.48301   1.50893
   1.56072   1.61194   1.65250   1.67900   1.73377   1.80958   1.87647   1.87712
 kpt#   3, nband= 40, wtk=  0.09375, kpt= -0.2500 -0.3750  0.0000 (reduced coord)
  -0.08872   0.11940   0.17173   0.19237   0.29237   0.34003   0.49324   0.50674
   0.60373   0.66084   0.71040   0.73772   0.75727   0.79988   0.80463   0.85410
   0.92714   1.02972   1.07430   1.12385   1.16105   1.22118   1.22735   1.25486
   1.32381   1.33155   1.36756   1.46364   1.47006   1.54266   1.54659   1.59462
   1.59834   1.61228   1.66336   1.67737   1.71226   1.76938   1.80041   1.83781
 kpt#   4, nband= 40, wtk=  0.18750, kpt= -0.1250 -0.3750  0.1250 (reduced coord)
  -0.06920   0.07132   0.14872   0.20132   0.35234   0.38817   0.43611   0.49049
   0.58674   0.61657   0.67394   0.75859   0.79762   0.80676   0.87475   0.95375
   0.96521   1.00142   1.06348   1.10178   1.16068   1.16787   1.18740   1.24404
   1.30203   1.32466   1.38068   1.42373   1.43076   1.46070   1.49488   1.53632
   1.59779   1.66087   1.67506   1.70151   1.74227   1.76868   1.79243   1.85415
 kpt#   5, nband= 40, wtk=  0.09375, kpt= -0.1250  0.2500  0.0000 (reduced coord)
  -0.11047   0.11321   0.19008   0.25995   0.37441   0.38632   0.40473   0.46120
   0.49637   0.58827   0.66505   0.72171   0.76174   0.79607   0.85502   0.92498
   0.95089   1.01775   1.07048   1.11565   1.23232   1.25467   1.26490   1.32846
   1.35248   1.37910   1.39615   1.42800   1.46105   1.51645   1.51821   1.58250
   1.61481   1.62223   1.64845   1.64897   1.65817   1.71442   1.75388   1.79102
 kpt#   6, nband= 40, wtk=  0.09375, kpt= -0.2500  0.3750  0.0000 (reduced coord)
  -0.03521   0.03733   0.11618   0.20812   0.30802   0.45095   0.46212   0.53161
   0.53271   0.57830   0.68582   0.79986   0.81310   0.87055   0.90524   0.94794
   0.97403   1.01061   1.03570   1.05913   1.13525   1.16978   1.17704   1.19836
   1.25042   1.29558   1.33704   1.35950   1.44382   1.49629   1.51218   1.55912
   1.59443   1.61806   1.64096   1.70075   1.79927   1.81921   1.82398   1.87762
 kpt#   7, nband= 40, wtk=  0.09375, kpt= -0.3750  0.5000  0.0000 (reduced coord)
  -0.02640   0.05007   0.13145   0.17347   0.26739   0.31456   0.56290   0.58848
   0.64605   0.67825   0.70173   0.79514   0.79921   0.81251   0.83875   0.90831
   0.93182   0.95431   1.01249   1.04945   1.07019   1.12467   1.14516   1.21549
   1.34403   1.36268   1.41404   1.42796   1.44889   1.51029   1.53573   1.55885
   1.59138   1.63828   1.65224   1.66357   1.74606   1.79900   1.80766   1.81171
 kpt#   8, nband= 40, wtk=  0.18750, kpt= -0.2500  0.5000  0.1250 (reduced coord)
  -0.01373   0.04218   0.10399   0.15129   0.33279   0.40259   0.45916   0.53256
   0.58865   0.67217   0.72644   0.75409   0.83499   0.87027   0.88949   0.90472
   0.96622   1.00529   1.00941   1.05870   1.10020   1.11074   1.16706   1.23844
   1.25561   1.28848   1.36110   1.38176   1.40576   1.44831   1.48746   1.59746
   1.66358   1.66796   1.69426   1.73439   1.75333   1.79259   1.81798   1.86931
 kpt#   9, nband= 40, wtk=  0.03125, kpt= -0.1250  0.0000  0.0000 (reduced coord)
  -0.15364   0.22705   0.27552   0.27552   0.37077   0.37442   0.37442   0.48457
   0.48457   0.52237   0.56606   0.61653   0.67809   0.67809   0.82684   1.02976
   1.02976   1.06288   1.14385   1.14385   1.27631   1.27631   1.29165   1.30008
   1.39683   1.39683   1.45714   1.52659   1.54126   1.54126   1.60011   1.60011
   1.65698   1.65698   1.68196   1.74777   1.76617   1.77249   1.77249   1.83672
 kpt#  10, nband= 40, wtk=  0.03125, kpt= -0.3750  0.0000  0.0000 (reduced coord)
  -0.09051   0.05487   0.24628   0.24628   0.36027   0.36749   0.36749   0.50139
   0.55214   0.55214   0.66533   0.76234   0.76234   0.82467   0.88483   0.90623
   0.90623   1.05600   1.14414   1.15018   1.15018   1.24192   1.24192   1.31975
   1.31975   1.32786   1.34879   1.45109   1.45109   1.45664   1.48174   1.48174
   1.55222   1.57872   1.73477   1.73477   1.73487   1.76608   1.78919   1.78919
 Total charge density [el/Bohr^3]
,     Maximum=    5.4700E-02  at reduced coord.    0.1000    0.1500    0.6500
,Next maximum=    5.4700E-02  at reduced coord.    0.1500    0.1000    0.6500
,     Minimum=    3.6132E-03  at reduced coord.    0.0000    0.0000    0.0000
,Next minimum=    3.6132E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    6.0000E+00

================================================================================
== DATASET  3 ==================================================================
-   nproc =    1

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   2.

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 SCREENING: Calculation of the susceptibility and dielectric matrices 

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1085000  5.1085000  G(1)= -0.0978761  0.0978761  0.0978761
 R(2)=  5.1085000  0.0000000  5.1085000  G(2)=  0.0978761 -0.0978761  0.0978761
 R(3)=  5.1085000  5.1085000  0.0000000  G(3)=  0.0978761  0.0978761 -0.0978761
 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../../Psps_for_tests/13al.pspnc
- pspatm: opening atomic psp file    ../../../Psps_for_tests/13al.pspnc
-  Troullier-Martins psp for element  Al        Thu Oct 27 17:31:05 EDT 1994
- 13.00000   3.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.657  11.889    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   1.829   2.761    1   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.2761078        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.09673076353074    0.12648111154518    1.01742091001718   rchrg,fchrg,qchrg
 pspatm: epsatm=    0.22155260
         --- l  ekb(1:nproj) -->
             0    2.540658
             1    1.353815
 pspatm: atomic psp has been read  and splines computed

--------------------------------------------------------------------------------

