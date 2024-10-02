
.Version 8.6.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu5.4 computer) 

.Copyright (C) 1998-2017 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Thu 18 Jun 2020.
- ( at 12h08 )
  
- The starting date is more than 2 years after the initial release
- of this version of ABINIT, namely Dec 2017.
- Note that the use beyond 3 years after the release will not be supported.
- Action: please, switch to a more recent version of ABINIT.

- input  file    -> GWRbGeCl3.in
- output file    -> GWRbGeCl3.out
- root for input  files -> tbase1_xi
- root for output files -> tbase1_xo


 DATASET    1 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       6
     lnmax =       6     mgfft =      64  mpssoang =       3    mqgrid =    3019
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          23        mffmem =           1         mkmem =           1
       mpw =       14436          nfft =      262144          nkpt =          10
================================================================================
P This job should need less than                      91.008 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     50.665 Mbytes ; DEN or POT disk file :      2.002 Mbytes.
================================================================================


 DATASET    2 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
     intxc =       0    ionmov =       0      iscf =      -2    lmnmax =       6
     lnmax =       6     mgfft =      64  mpssoang =       3    mqgrid =    3019
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =         105        mffmem =           1         mkmem =           1
       mpw =       14454          nfft =      262144          nkpt =          10
================================================================================
P This job should need less than                      75.118 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    231.580 Mbytes ; DEN or POT disk file :      2.002 Mbytes.
================================================================================


 DATASET    3 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       6
     lnmax =       6     mgfft =      50  mpssoang =       3    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          40        mffmem =           1         mkmem =           1
       mpw =        7712          nfft =      125000          nkpt =          10
================================================================================
P This job should need less than                      46.568 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     47.072 Mbytes ; DEN or POT disk file :      0.956 Mbytes.
================================================================================


 DATASET    4 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       6
     lnmax =       6     mgfft =      50  mpssoang =       3    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          40        mffmem =           1         mkmem =           1
       mpw =        7712          nfft =      125000          nkpt =          10
================================================================================
P This job should need less than                      46.568 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     47.072 Mbytes ; DEN or POT disk file :      0.956 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      9.9962832623E+00  9.9962832623E+00  9.9962832623E+00 Bohr
              amu      8.54678000E+01  7.26100000E+01  3.54527000E+01
             bdgw4         22      23
           diemac      8.00000000E+00
             ecut1     4.50000000E+01 Hartree
             ecut2     4.50000000E+01 Hartree
             ecut3     2.96308351E+01 Hartree
             ecut4     2.96308351E+01 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     0.00000000E+00 Hartree
          ecuteps3     3.99028580E+01 Hartree
          ecuteps4     0.00000000E+00 Hartree
         ecutsigx1     0.00000000E+00 Hartree
         ecutsigx2     0.00000000E+00 Hartree
         ecutsigx3     0.00000000E+00 Hartree
         ecutsigx4     3.99028580E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     0.00000000E+00 Hartree
          ecutwfn3     2.96308351E+01 Hartree
          ecutwfn4     2.96308351E+01 Hartree
-          fftalg         312
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
        gwcalctyp          20
            gwmem           0
             iscf1          7
             iscf2         -2
             iscf3          7
             iscf4          7
           istwfk1       2    0    3    0    0    7    0    0    0    9
           istwfk2       1    0    1    0    0    1    0    0    0    1
           istwfk3       1    0    1    0    0    1    0    0    0    1
           istwfk4       1    0    1    0    0    1    0    0    0    1
              ixc          11
           jdtset        1    2    3    4
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
            kptgw4     5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      3.99851330E+01
P           mkmem           1
            natom           5
            nband1         23
            nband2        105
            nband3         40
            nband4         40
           nbdbuf1          0
           nbdbuf2         10
           nbdbuf3          0
           nbdbuf4          0
           ndtset           4
            ngfft1         64      64      64
            ngfft2         64      64      64
            ngfft3         50      50      50
            ngfft4         50      50      50
             nkpt          10
           nkptgw1          0
           nkptgw2          0
           nkptgw3          0
           nkptgw4          1
           npweps1          0
           npweps2          0
           npweps3      12053
           npweps4          0
          npwsigx1          0
          npwsigx2          0
          npwsigx3          0
          npwsigx4      12053
           npwwfn1          0
           npwwfn2          0
           npwwfn3       7809
           npwwfn4       7809
            nstep         200
             nsym          48
           ntypat           3
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
              occ4     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          0
        optdriver3          3
        optdriver4          4
           ppmfrq1     0.00000000E+00 Hartree
           ppmfrq2     0.00000000E+00 Hartree
           ppmfrq3     6.13713734E-01 Hartree
           ppmfrq4     0.00000000E+00 Hartree
           prtcif1          1
           prtcif2          0
           prtcif3          0
           prtcif4          0
          spgroup         221
        symmorphi           0
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                       0  0 -1   1  0  0   0 -1  0       0  0  1  -1  0  0   0  1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1   1  0  0   0 -1  0
                       0  0  1  -1  0  0   0 -1  0       0  0 -1   1  0  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0  1   0 -1  0       1  0  0   0  0 -1   0  1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0 -1   0 -1  0      -1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0  1  -1  0  0       0  1  0   0  0 -1   1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0  1  -1  0  0
                       0  1  0   0  0 -1  -1  0  0       0 -1  0   0  0  1   1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       0  0 -1   0  1  0  -1  0  0       0  0  1   0 -1  0   1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0  1  0  -1  0  0
                       0  0  1   0 -1  0  -1  0  0       0  0 -1   0  1  0   1  0  0
           tolvrs1     1.00000000E-10
           tolvrs2     0.00000000E+00
           tolvrs3     0.00000000E+00
           tolvrs4     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-10
           tolwfr3     1.00000000E-10
           tolwfr4     1.00000000E-10
           tsmear      2.00000000E-03 Hartree
            typat      1  2  3  3  3
              wtk        0.01563    0.09375    0.04688    0.18750    0.18750    0.04688
                         0.12500    0.18750    0.09375    0.01563
           xangst      2.1461990946E-28  2.0215940308E-29 -1.0720576634E-28
                       2.6449026365E+00  2.6449026365E+00  2.6449026365E+00
                       2.6449026365E+00  2.6449026365E+00 -1.0720576634E-28
                       2.6449026365E+00  2.0215940308E-29  2.6449026365E+00
                       2.1461990946E-28  2.6449026365E+00  2.6449026365E+00
            xcart      4.0557285155E-28  3.8202590702E-29 -2.0258953826E-28
                       4.9981416311E+00  4.9981416311E+00  4.9981416311E+00
                       4.9981416311E+00  4.9981416311E+00 -2.0258953826E-28
                       4.9981416311E+00  3.8202590702E-29  4.9981416311E+00
                       4.0557285155E-28  4.9981416311E+00  4.9981416311E+00
             xred      4.0572364839E-29  3.8216794882E-30 -2.0266486347E-29
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01 -2.0266486347E-29
                       5.0000000000E-01  3.8216794882E-30  5.0000000000E-01
                       4.0572364839E-29  5.0000000000E-01  5.0000000000E-01
            znucl       37.00000   32.00000   17.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

 chkinp: Checking input parameters for consistency, jdtset=   4.

================================================================================
== DATASET  1 ==================================================================
-   nproc =   32   -> not optimal: autoparal keyword recommended in input file

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  9.9962833  0.0000000  0.0000000  G(1)=  0.1000372  0.0000000  0.0000000
 R(2)=  0.0000000  9.9962833  0.0000000  G(2)=  0.0000000  0.1000372  0.0000000
 R(3)=  0.0000000  0.0000000  9.9962833  G(3)=  0.0000000  0.0000000  0.1000372
 Unit cell volume ucvol=  9.9888539E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  64  64  64
         ecut(hartree)=     45.000   => boxcut(ratio)=   2.12017

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is Rb.psp8
- pspatm: opening atomic psp file    Rb.psp8
- Rb    ONCVPSP-3.2.3.1  r_core=   1.71227   1.75361   1.90633
- 37.00000   9.00000    170510                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    7.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
  pspatm : epsatm=   34.45470697
         --- l  ekb(1:nproj) -->
             0    8.246201   -0.469081
             1    3.243116   -0.369397
             2   -1.026759    0.985281
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is Ge.psp8
- pspatm: opening atomic psp file    Ge.psp8
- Ge    ONCVPSP-3.2.3.1  r_core=   1.91022   1.82122   1.91022
- 32.00000  14.00000    170504                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    5.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
  pspatm : epsatm=   30.91138940
         --- l  ekb(1:nproj) -->
             0    6.362763    0.588704
             1    3.817661    0.733995
             2   -9.308681   -3.597493
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is Cl.psp8
- pspatm: opening atomic psp file    Cl.psp8
- Cl    ONCVPSP-3.2.3.1  r_core=   1.56009   1.35202   1.75774
- 17.00000   7.00000    170504                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    8.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
  pspatm : epsatm=    9.12776994
         --- l  ekb(1:nproj) -->
             0    8.139296    0.698720
             1    3.821713    1.107519
             2   -2.938609   -0.805455
 pspatm: atomic psp has been read  and splines computed

   4.08097387E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

_setup2: Arith. and geom. avg. npw (full set) are   14395.266   14395.250

================================================================================

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -158.15408610770    -1.582E+02 7.233E-01 1.850E+04
 ETOT  2  -160.67147843171    -2.517E+00 1.713E-01 4.923E+04
 ETOT  3  -165.23568052186    -4.564E+00 1.398E-01 4.011E+03
 ETOT  4  -165.68641481854    -4.507E-01 9.599E-02 1.340E+03
 ETOT  5  -165.69065382487    -4.239E-03 2.959E-02 1.500E+03
 ETOT  6  -165.71867148722    -2.802E-02 7.189E-03 1.343E+03
 ETOT  7  -165.79087735774    -7.221E-02 8.260E-03 5.800E+02
 ETOT  8  -165.81456657698    -2.369E-02 6.405E-04 2.383E+02
 ETOT  9  -165.82920434218    -1.464E-02 3.764E-04 1.061E+01
 ETOT 10  -165.83041613959    -1.212E-03 1.730E-03 1.640E+00
 ETOT 11  -165.83110968956    -6.935E-04 2.043E-03 6.294E-01
 ETOT 12  -165.83117706571    -6.738E-05 1.034E-03 9.095E-03
 ETOT 13  -165.83118279599    -5.730E-06 1.317E-04 4.918E-04
 ETOT 14  -165.83118372564    -9.297E-07 5.664E-04 2.770E-05
 ETOT 15  -165.83118395129    -2.257E-07 5.447E-05 1.810E-06
 ETOT 16  -165.83118400893    -5.764E-08 2.499E-04 3.519E-09
 ETOT 17  -165.83118402411    -1.517E-08 3.388E-05 2.488E-09
 ETOT 18  -165.83118402812    -4.017E-09 9.957E-05 6.309E-11

 At SCF step   18       vres2   =  6.31E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.46070733E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.46070733E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.46070733E-06  sigma(2 1)=  0.00000000E+00

 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.00000          5.99601233
    2        2.00000         11.35405630
    3        2.00000          5.03901374
    4        2.00000          5.03901374
    5        2.00000          5.03901374
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   7.5192E-07; max=  9.9566E-05
 reduced coordinates (array xred) for    5 atoms
       0.000000000000      0.000000000000     -0.000000000000
       0.500000000000      0.500000000000      0.500000000000
       0.500000000000      0.500000000000     -0.000000000000
       0.500000000000      0.000000000000      0.500000000000
       0.000000000000      0.500000000000      0.500000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000
    3       0.000000000000      0.000000000000      0.000000000000
    4       0.000000000000      0.000000000000      0.000000000000
    5       0.000000000000      0.000000000000      0.000000000000

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000    -0.00000000000000
    2      2.64490263650000     2.64490263650000     2.64490263650000
    3      2.64490263650000     2.64490263650000    -0.00000000000000
    4      2.64490263650000     0.00000000000000     2.64490263650000
    5      0.00000000000000     2.64490263650000     2.64490263650000

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
    3     -0.00000000000000    -0.00000000000000    -0.00000000000000
    4     -0.00000000000000    -0.00000000000000    -0.00000000000000
    5     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
    3     -0.00000000000000    -0.00000000000000    -0.00000000000000
    4     -0.00000000000000    -0.00000000000000    -0.00000000000000
    5     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  9.996283262264  9.996283262264  9.996283262264 bohr
              =  5.289805273000  5.289805273000  5.289805273000 angstroms
 prteigrs : about to open file tbase1_xo_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.07045   Average Vxc (hartree)=  -0.30109
 Eigenvalues (hartree) for nkpt=  10  k points:
 kpt#   1, nband= 23, wtk=  0.01563, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.91798   -0.86296   -0.86296   -0.86278   -0.86278   -0.86278   -0.51243   -0.48201
  -0.48201   -0.33264   -0.33264   -0.33264   -0.17772   -0.13387   -0.13387   -0.13387
  -0.04034   -0.04034   -0.04034   -0.03557   -0.03557   -0.03557    0.17948
 prteigrs : prtvol=0 or 1, do not print more k-points.


--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  9.10181017105315E+01
    Hartree energy  =  4.95748586447570E+01
    XC energy       = -4.23155316071961E+01
    Ewald energy    = -9.26826807341565E+01
    PspCore energy  =  4.08552762944307E+00
    Loc. psp. energy= -1.33850479136432E+02
    NL   psp  energy= -4.16609805350723E+01
    >>>>>>>>> Etotal= -1.65831184028125E+02

 Other information on the energy :
    Total energy(eV)= -4.51249600454761E+03 ; Band energy (Ha)=  -1.6915698537E+01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.46070733E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.46070733E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.46070733E-06  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  2.4892E-01 GPa]
- sigma(1 1)= -2.48922562E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -2.48922562E-01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -2.48922562E-01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =   32   -> not optimal: autoparal keyword recommended in input file

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  9.9962833  0.0000000  0.0000000  G(1)=  0.1000372  0.0000000  0.0000000
 R(2)=  0.0000000  9.9962833  0.0000000  G(2)=  0.0000000  0.1000372  0.0000000
 R(3)=  0.0000000  0.0000000  9.9962833  G(3)=  0.0000000  0.0000000  0.1000372
 Unit cell volume ucvol=  9.9888539E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  64  64  64
         ecut(hartree)=     45.000   => boxcut(ratio)=   2.12017
--------------------------------------------------------------------------------


================================================================================
 prteigrs : about to open file tbase1_xo_DS2_EIG
 Non-SCF case, kpt    1 (  0.00000  0.00000  0.00000), residuals and eigenvalues=
  3.72E-11  2.86E-11  2.21E-11  3.03E-11  3.20E-11  3.91E-11  7.23E-11  4.24E-11
  6.05E-11  3.08E-11  6.51E-11  6.93E-11  5.07E-11  3.08E-11  3.17E-11  7.48E-11
  2.39E-11  2.68E-11  2.81E-11  2.87E-11  3.90E-11  5.25E-11  8.39E-11  1.82E-11
  3.93E-11  3.01E-11  3.09E-11  4.42E-11  4.29E-11  7.75E-11  7.48E-11  1.83E-11
  5.68E-11  7.89E-11  4.14E-11  4.80E-11  7.90E-11  4.82E-11  4.03E-11  4.14E-11
  3.26E-11  1.43E-11  3.32E-11  4.86E-11  7.67E-11  2.06E-11  3.38E-11  5.54E-11
  5.84E-11  3.38E-11  8.81E-11  9.60E-11  2.33E-11  2.42E-11  3.61E-11  5.53E-11
  7.58E-11  3.16E-11  8.49E-11  6.13E-11  1.95E-11  4.88E-11  4.75E-11  7.65E-11
  9.84E-11  2.52E-11  4.36E-11  6.95E-11  4.02E-11  5.11E-11  7.89E-11  2.88E-11
  2.93E-11  9.78E-11  4.12E-11  5.23E-11  8.35E-11  4.03E-11  2.48E-11  3.91E-11
  6.75E-11  2.56E-11  2.72E-11  7.61E-11  3.30E-11  5.62E-11  7.11E-11  2.14E-11
  3.81E-11  9.49E-11  5.09E-11  9.76E-11  5.06E-11  7.20E-11  7.66E-11  5.75E-11
  9.26E-10  4.99E-11  4.57E-10  1.42E-07  1.21E-08  2.46E-06  3.36E-05  3.00E-07
  1.01E-06
 -9.1798E-01 -8.6296E-01 -8.6296E-01 -8.6278E-01 -8.6278E-01 -8.6278E-01
 -5.1243E-01 -4.8201E-01 -4.8201E-01 -3.3264E-01 -3.3264E-01 -3.3264E-01
 -1.7772E-01 -1.3387E-01 -1.3387E-01 -1.3387E-01 -4.0340E-02 -4.0340E-02
 -4.0340E-02 -3.5569E-02 -3.5569E-02 -3.5569E-02  1.7948E-01  2.3885E-01
  2.3885E-01  2.6135E-01  2.6135E-01  2.6135E-01  2.7222E-01  2.7222E-01
  2.7222E-01  3.7315E-01  3.7315E-01  3.7315E-01  4.5591E-01  4.5591E-01
  4.5591E-01  4.6246E-01  4.6246E-01  5.1660E-01  5.1660E-01  5.5495E-01
  5.8038E-01  5.8038E-01  5.8038E-01  6.0519E-01  6.0519E-01  6.0519E-01
  6.1526E-01  6.1543E-01  6.1543E-01  6.1543E-01  6.2363E-01  6.4190E-01
  6.4190E-01  6.4190E-01  6.7041E-01  7.0493E-01  7.0493E-01  7.8282E-01
  8.1525E-01  8.1525E-01  8.5541E-01  8.5541E-01  8.5541E-01  8.7433E-01
  8.7433E-01  8.7433E-01  8.8433E-01  8.8433E-01  8.8433E-01  9.3497E-01
  9.3497E-01  9.3497E-01  1.0050E+00  1.0050E+00  1.0050E+00  1.0115E+00
  1.0322E+00  1.0322E+00  1.0322E+00  1.0672E+00  1.0672E+00  1.0672E+00
  1.0679E+00  1.0679E+00  1.0679E+00  1.1149E+00  1.1149E+00  1.1149E+00
  1.1231E+00  1.1231E+00  1.1594E+00  1.1594E+00  1.2265E+00  1.2265E+00
  1.2265E+00  1.2600E+00  1.2600E+00  1.2600E+00  1.2623E+00  1.2623E+00
  1.2902E+00  1.3107E+00  1.3107E+00
  prteigrs : nnsclo,ikpt=  200    1 max resid (incl. the buffer)=  3.35954E-05
 prteigrs : prtvol=0 or 1, do not print more k-points.

  prteigrs : nnsclo,ikpt=  200    2 max resid (incl. the buffer)=  2.28531E-04
  prteigrs : nnsclo,ikpt=  200    3 max resid (incl. the buffer)=  1.92555E-04
  prteigrs : nnsclo,ikpt=  200    4 max resid (incl. the buffer)=  2.07251E-04
  prteigrs : nnsclo,ikpt=  200    5 max resid (incl. the buffer)=  1.12941E-04
  prteigrs : nnsclo,ikpt=  200    6 max resid (incl. the buffer)=  4.16412E-04
  prteigrs : nnsclo,ikpt=  200    7 max resid (incl. the buffer)=  1.63963E-04
  prteigrs : nnsclo,ikpt=  200    8 max resid (incl. the buffer)=  1.08482E-04
  prteigrs : nnsclo,ikpt=  200    9 max resid (incl. the buffer)=  2.14017E-04
  prteigrs : nnsclo,ikpt=  200   10 max resid (incl. the buffer)=  3.78124E-05

 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.00000          5.99601233
    2        2.00000         11.35405630
    3        2.00000          5.03901374
    4        2.00000          5.03901374
    5        2.00000          5.03901374
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.0592E-06; max=  4.1641E-04
 reduced coordinates (array xred) for    5 atoms
       0.000000000000      0.000000000000     -0.000000000000
       0.500000000000      0.500000000000      0.500000000000
       0.500000000000      0.500000000000     -0.000000000000
       0.500000000000      0.000000000000      0.500000000000
       0.000000000000      0.500000000000      0.500000000000

 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000    -0.00000000000000
    2      2.64490263650000     2.64490263650000     2.64490263650000
    3      2.64490263650000     2.64490263650000    -0.00000000000000
    4      2.64490263650000     0.00000000000000     2.64490263650000
    5      0.00000000000000     2.64490263650000     2.64490263650000
 length scales=  9.996283262264  9.996283262264  9.996283262264 bohr
              =  5.289805273000  5.289805273000  5.289805273000 angstroms
 prteigrs : about to open file tbase1_xo_DS2_EIG
 Eigenvalues (hartree) for nkpt=  10  k points:
 kpt#   1, nband=105, wtk=  0.01563, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -0.91798   -0.86296   -0.86296   -0.86278   -0.86278   -0.86278   -0.51243   -0.48201
  -0.48201   -0.33264   -0.33264   -0.33264   -0.17772   -0.13387   -0.13387   -0.13387
  -0.04034   -0.04034   -0.04034   -0.03557   -0.03557   -0.03557    0.17948    0.23885
   0.23885    0.26135    0.26135    0.26135    0.27222    0.27222    0.27222    0.37315
   0.37315    0.37315    0.45591    0.45591    0.45591    0.46246    0.46246    0.51660
   0.51660    0.55495    0.58038    0.58038    0.58038    0.60519    0.60519    0.60519
   0.61526    0.61543    0.61543    0.61543    0.62363    0.64190    0.64190    0.64190
   0.67041    0.70493    0.70493    0.78282    0.81525    0.81525    0.85541    0.85541
   0.85541    0.87433    0.87433    0.87433    0.88433    0.88433    0.88433    0.93497
   0.93497    0.93497    1.00499    1.00499    1.00499    1.01149    1.03217    1.03217
   1.03217    1.06720    1.06720    1.06720    1.06793    1.06793    1.06793    1.11488
   1.11488    1.11488    1.12311    1.12311    1.15942    1.15942    1.22649    1.22649
   1.22649    1.26000    1.26000    1.26000    1.26232    1.26233    1.29017    1.31065
   1.31066
 prteigrs : prtvol=0 or 1, do not print more k-points.


================================================================================
== DATASET  3 ==================================================================
-   nproc =   32   -> not optimal: autoparal keyword recommended in input file

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   2.

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 SCREENING: Calculation of the susceptibility and dielectric matrices 

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  9.9962833  0.0000000  0.0000000  G(1)=  0.1000372  0.0000000  0.0000000
 R(2)=  0.0000000  9.9962833  0.0000000  G(2)=  0.0000000  0.1000372  0.0000000
 R(3)=  0.0000000  0.0000000  9.9962833  G(3)=  0.0000000  0.0000000  0.1000372
 Unit cell volume ucvol=  9.9888539E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is Rb.psp8
- pspatm: opening atomic psp file    Rb.psp8
- Rb    ONCVPSP-3.2.3.1  r_core=   1.71227   1.75361   1.90633
- 37.00000   9.00000    170510                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    7.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
  pspatm : epsatm=   34.45470697
         --- l  ekb(1:nproj) -->
             0    8.246201   -0.469081
             1    3.243116   -0.369397
             2   -1.026759    0.985281
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is Ge.psp8
- pspatm: opening atomic psp file    Ge.psp8
- Ge    ONCVPSP-3.2.3.1  r_core=   1.91022   1.82122   1.91022
- 32.00000  14.00000    170504                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    5.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
  pspatm : epsatm=   30.91138940
         --- l  ekb(1:nproj) -->
             0    6.362763    0.588704
             1    3.817661    0.733995
             2   -9.308681   -3.597493
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is Cl.psp8
- pspatm: opening atomic psp file    Cl.psp8
- Cl    ONCVPSP-3.2.3.1  r_core=   1.56009   1.35202   1.75774
- 17.00000   7.00000    170504                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    8.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
  pspatm : epsatm=    9.12776994
         --- l  ekb(1:nproj) -->
             0    8.139296    0.698720
             1    3.821713    1.107519
             2   -2.938609   -0.805455
 pspatm: atomic psp has been read  and splines computed

--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights : 

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     5)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     6)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.04688
     7)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.12500
     8)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.18750
     9)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.09375
    10)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights : 

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     5)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     6)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.04688
     7)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.12500
     8)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.18750
     9)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.09375
    10)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  54x 54x 54
          total number of points  =   157464


- screening: taking advantage of time-reversal symmetry 
- Maximum band index for partially occupied states nbvw = 22
- Remaining bands to be divided among processors   nbcw = 18
- Number of bands treated by each node ~0


 rdqps: reading QP wavefunctions of the previous step 
        looking for file tbase1_xi_DS3_QPS
 file not found, 1st iteration initialized with KS eigenelements 

 Number of electrons calculated from density =   43.9993; Expected =   44.0000
 average of density, n =  0.044048
 r_s =    1.7565
 omega_plasma =   20.2451 [eV]


 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    1.670000E+01


--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.000  -0.000   0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000
        0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000   0.000

    2  -0.000 -23.160   9.106   0.835   0.835   0.836   0.836   5.094   0.066
       -0.000   0.000   0.000   0.001   0.001  -0.001  -0.001  -0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.000  -0.000   0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000
       -0.000   0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000

    2  -0.000  -7.739   3.903   0.060   0.060   0.061   0.061   0.914   0.055
       -0.000   0.000   0.000   0.000   0.000  -0.000  -0.000  -0.000   0.000

 For q-point:  0.000010 0.000020 0.000030
  dielectric constant =   9.3500
  dielectric constant without local fields =  10.3593

  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :     19.90  [%]
  Heads and wings of the symmetrical epsilon^-1(G,G') 

   Upper and lower wings at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
      0.107  -0.003   0.003   0.006  -0.006  -0.009   0.009   0.003  -0.003
      0.000   0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000
       1       2       3       4       5       6       7       8       9
      0.107  -0.003   0.003   0.006  -0.006  -0.009   0.009   0.003  -0.003
      0.000  -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000


   Upper and lower wings at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
      0.661  -0.005   0.005   0.010  -0.010  -0.015   0.015   0.010  -0.010
     -0.000   0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000
       1       2       3       4       5       6       7       8       9
      0.661  -0.005   0.005   0.010  -0.010  -0.015   0.015   0.010  -0.010
     -0.000  -0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000




--------------------------------------------------------------------------------
  q-point number  2        q = ( 0.250000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -5.789  -1.258   1.808   2.618   2.618   2.618   2.618   0.567  -0.449
        0.000  -0.000   0.000  -0.000  -0.000   0.000   0.000   0.000   0.000

    2  -1.258 -20.228   8.635   1.156   1.156   1.157   1.157   5.469  -0.169
        0.000   0.000  -0.000   0.001   0.001  -0.001  -0.001  -0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -0.977  -0.274   0.269   0.185   0.185   0.185   0.185   0.277  -0.325
        0.000   0.000  -0.000  -0.000  -0.000   0.000   0.000   0.000  -0.000

    2  -0.274  -5.943   3.636   0.333   0.333   0.334   0.334   0.862   0.014
       -0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :     41.05  [%]


--------------------------------------------------------------------------------
  q-point number  3        q = ( 0.500000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -14.156  -1.601   2.466   4.919   4.919   4.918   4.918   0.936  -0.517
        0.000   0.000  -0.000  -0.001  -0.001   0.001   0.001   0.000   0.000

    2  -1.601 -14.156   7.402   0.936   0.936   0.937   0.937   4.919  -0.840
       -0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.001   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -3.376  -0.407   0.448   0.583   0.583   0.582   0.582   0.422  -0.657
       -0.000   0.000  -0.000  -0.000  -0.000   0.000   0.000   0.000   0.000

    2  -0.407  -3.376   2.814   0.422   0.422   0.423   0.423   0.583  -0.058
       -0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    3 :     31.90  [%]


--------------------------------------------------------------------------------
  q-point number  4        q = ( 0.250000, 0.250000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -10.765   1.516   3.959   3.957   1.519   4.820   4.820   1.070  -0.892
        0.000   0.000   0.000  -0.000  -0.000  -0.000  -0.000  -0.000   0.000

    2   1.516 -22.969   5.432   0.338   1.527  -0.479  -0.479   4.899   0.614
       -0.000   0.000  -0.000   0.001   0.001  -0.001  -0.001  -0.001   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -1.869  -0.049   0.403   0.402  -0.047   0.347   0.347   0.581  -0.597
       -0.000   0.000   0.000  -0.000  -0.000  -0.000  -0.000  -0.000   0.000

    2  -0.049  -6.356   3.001  -0.074   0.634   0.158   0.158   0.790   0.035
       -0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    4 :     35.19  [%]


--------------------------------------------------------------------------------
  q-point number  5        q = ( 0.500000, 0.250000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -17.882   1.192   4.223   5.734   4.104   6.617   6.617   1.353  -1.060
        0.000   0.000   0.000  -0.000  -0.001   0.000   0.000   0.001  -0.000

    2   1.192 -17.882   4.268   0.305   1.353  -0.673  -0.673   4.104  -0.099
       -0.000  -0.000  -0.000   0.000   0.001  -0.000  -0.000  -0.001   0.001

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -4.044  -0.164   0.536   0.695   0.437   0.692   0.692   0.734  -0.872
       -0.000   0.000   0.000  -0.000  -0.000   0.000   0.000   0.000  -0.000

    2  -0.164  -4.044   2.232   0.018   0.734   0.234   0.234   0.437  -0.029
       -0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    5 :     30.13  [%]


--------------------------------------------------------------------------------
  q-point number  6        q = ( 0.500000, 0.500000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -22.853   3.861   5.613   5.608   3.865   7.804   7.804   1.398  -1.333
        0.000   0.000   0.000  -0.000   0.000  -0.000  -0.000  -0.000   0.000

    2   3.861 -22.853  -0.429   0.061   1.398  -1.682  -1.682   3.865   0.245
       -0.000  -0.000  -0.000   0.000  -0.000   0.000   0.000   0.000   0.001

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -5.672   0.355   0.736   0.734   0.358   0.920   0.920   0.863  -1.073
       -0.000   0.000   0.000  -0.000   0.000  -0.000  -0.000  -0.000   0.000

    2   0.355  -5.672   0.822  -0.400   0.863  -0.192  -0.192   0.358  -0.023
       -0.000  -0.000  -0.000   0.000  -0.000   0.000   0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    6 :     28.17  [%]


--------------------------------------------------------------------------------
  q-point number  7        q = ( 0.250000, 0.250000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -15.030   3.868   5.770   5.768   3.870   3.871   5.767  -0.581  -2.093
        0.000  -0.000  -0.000  -0.000  -0.000  -0.000  -0.000   0.000   0.000

    2   3.868 -25.231   2.693  -1.093  -0.132  -0.131  -1.092   6.370   1.707
        0.000  -0.000  -0.000   0.001   0.001  -0.001  -0.001  -0.001   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -2.679   0.151   0.519   0.518   0.153   0.153   0.518   0.372  -0.682
        0.000  -0.000  -0.000  -0.000  -0.000  -0.000  -0.000   0.000  -0.000

    2   0.151  -6.723   2.428  -0.210   0.427   0.427  -0.210   0.871   0.114
        0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    7 :     31.83  [%]


--------------------------------------------------------------------------------
  q-point number  8        q = ( 0.500000, 0.250000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -21.025   3.566   5.704   7.123   5.920   5.921   7.122  -0.284  -2.100
       -0.000   0.000  -0.000  -0.000  -0.001   0.001   0.000   0.000  -0.000

    2   3.566 -21.025   1.573  -1.111  -0.284  -0.282  -1.110   5.920   1.037
       -0.000  -0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.001   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -4.646   0.052   0.612   0.768   0.576   0.576   0.767   0.512  -0.929
        0.000   0.000  -0.000  -0.000  -0.000   0.000   0.000   0.000  -0.000

    2   0.052  -4.646   1.705  -0.129   0.512   0.513  -0.129   0.576   0.051
       -0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    8 :     28.70  [%]


--------------------------------------------------------------------------------
  q-point number  9        q = ( 0.500000, 0.500000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -25.082   5.693   6.749   6.745   5.698   7.298   7.978  -0.222  -2.226
        0.000   0.000   0.000  -0.000   0.000  -0.000  -0.000  -0.000  -0.000

    2   5.693 -25.082  -2.414  -1.183  -0.222  -1.245  -2.064   5.698   1.182
       -0.000  -0.000  -0.000   0.000   0.000   0.000   0.000  -0.000   0.001

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -6.105   0.506   0.779   0.777   0.509   0.864   0.924   0.627  -1.110
        0.000   0.000   0.000  -0.000   0.000  -0.000  -0.000  -0.000   0.000

    2   0.506  -6.105   0.434  -0.506   0.627   0.020  -0.468   0.509   0.036
       -0.000  -0.000  -0.000   0.000   0.000   0.000  -0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    9 :     27.18  [%]


--------------------------------------------------------------------------------
  q-point number 10        q = ( 0.500000, 0.500000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
       1       2       3       4       5       6       7       8       9
    1 -27.574   7.126   7.391   7.387   7.130   7.132   7.385  -1.149  -2.918
       -0.000  -0.000  -0.000  -0.000  -0.000   0.000  -0.000   0.000  -0.000

    2   7.126 -27.574  -5.146  -2.121  -1.149  -1.148  -2.120   7.130   1.908
        0.000   0.000   0.000   0.000   0.000  -0.000  -0.000   0.000   0.001

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
       1       2       3       4       5       6       7       8       9
    1  -7.151   0.818   0.876   0.873   0.821   0.822   0.872   0.107  -1.207
       -0.000   0.000  -0.000  -0.000   0.000   0.000  -0.000   0.000   0.000

    2   0.818  -7.151  -0.504  -0.758   0.107   0.108  -0.757   0.821   0.158
       -0.000   0.000  -0.000   0.000   0.000  -0.000  -0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   10 :     26.11  [%]

================================================================================
== DATASET  4 ==================================================================
-   nproc =   32   -> not optimal: autoparal keyword recommended in input file

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   2.

 mkfilename : getscr/=0, take file _SCR from output of DATASET   3.

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 SIGMA: Calculation of the GW corrections 

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  9.9962833  0.0000000  0.0000000  G(1)=  0.1000372  0.0000000  0.0000000
 R(2)=  0.0000000  9.9962833  0.0000000  G(2)=  0.0000000  0.1000372  0.0000000
 R(3)=  0.0000000  0.0000000  9.9962833  G(3)=  0.0000000  0.0000000  0.1000372
 Unit cell volume ucvol=  9.9888539E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
--------------------------------------------------------------------------------

 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights : 

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     5)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     6)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.04688
     7)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.12500
     8)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.18750
     9)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.09375
    10)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.



 COMMENT: In a self-consistent GW run, the QP corrections should be calculated for all the k-points of the KSS file 
 but nkptgw= 1 and WFK nkpt= 10
 Assuming expert user. Execution will continue.
 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights : 

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     5)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.18750
     6)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.04688
     7)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.12500
     8)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.18750
     9)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.09375
    10)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with 48 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 setmesh: FFT mesh size selected  =  54x 54x 54
          total number of points  =   157464

 Number of electrons calculated from density =   43.9993; Expected =   44.0000
 average of density, n =  0.044048
 r_s =    1.7565
 omega_plasma =   20.2451 [eV]


 rdqps: reading QP wavefunctions of the previous step 
        looking for file tbase1_xi_DS4_QPS
 file not found, 1st iteration initialized with KS eigenelements 

 Number of electrons calculated from density =   43.9993; Expected =   44.0000
 average of density, n =  0.044048
 r_s =    1.7565
 omega_plasma =   20.2451 [eV]


--------------------------------------------------------------------------------

 QP results after the unitary transformation in the KS subspace: 

  Number of electrons    =   43.9993

  QP Band energy    [Ha] = -1.69156982026997E+01
  QP Hartree energy [Ha] =  4.95496498919647E+01

--------------------------------------------------------------------------------

 === KS Band Gaps ===
  >>>> For spin  1
   Minimum optical gap =   0.9395 [eV], located at k-point      :   0.5000  0.5000  0.5000
   Fundamental gap     =   0.9395 [eV], Top of valence bands at :   0.5000  0.5000  0.5000
                                        Bottom of conduction at :   0.5000  0.5000  0.5000
 SIGMA fundamental parameters:
 PLASMON POLE MODEL  1
 number of plane-waves for SigmaX                12053
 number of plane-waves for SigmaC and W          12053
 number of plane-waves for wavefunctions          7809
 number of bands                                    40
 number of independent spin polarizations            1
 number of spinorial components                      1
 number of k-points in IBZ                          10
 number of q-points in IBZ                          10
 number of symmetry operations                      48
 number of k-points in BZ                           64
 number of q-points in BZ                           64
 number of frequencies for dSigma/dE                 9
 frequency step for dSigma/dE [eV]                0.25
 number of omega for Sigma on real axis              0
 max omega for Sigma on real axis  [eV]           0.00
 zcut for avoiding poles [eV]                     0.10

 EPSILON^-1 parameters (SCR file):
 dimension of the eps^-1 matrix on file          12053
 dimension of the eps^-1 matrix used             12053
 number of plane-waves for wavefunctions          7809
 number of bands                                    40
 number of q-points in IBZ                          10
 number of frequencies                               2
 number of real frequencies                          1
 number of imag frequencies                          1

 matrix elements of self-energy operator (all in [eV])

 Self-Consistent on Energies and Wavefunctions

 k =    0.500   0.500   0.500
 Band     E_lda   <Vxclda>   E(N-1)  <Hhartree>   SigX  SigC[E(N-1)]    Z     dSigC/dE  Sig[E(N)]  DeltaE  E(N)_pert E(N)_diago
   22     1.917   -15.296     1.917    17.213   -16.903     2.112     0.782    -0.279   -14.901     0.395     2.312     2.422
   23     2.857   -11.018     2.857    13.874    -7.750    -1.899     0.800    -0.250    -9.923     1.095     3.952     4.225
   24     2.857   -11.018     2.857    13.874    -7.750    -1.898     0.800    -0.250    -9.922     1.095     3.952     4.226
   25     2.857   -11.018     2.857    13.874    -7.750    -1.898     0.800    -0.250    -9.922     1.095     3.952     4.226

 E^0_gap          0.939
 E^GW_gap         1.640
 DeltaE^GW_gap    0.700


 writing QP data on file : tbase1_xo_DS4_QPS

 Convergence of QP corrections
 >>>>> For spin  1 <<<<<
.  kptgw no:  1; Maximum DeltaE = (   0.000   0.000) for band index:  4

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      9.9962832623E+00  9.9962832623E+00  9.9962832623E+00 Bohr
              amu      8.54678000E+01  7.26100000E+01  3.54527000E+01
             bdgw4         22      23
           diemac      8.00000000E+00
             ecut1     4.50000000E+01 Hartree
             ecut2     4.50000000E+01 Hartree
             ecut3     2.96308351E+01 Hartree
             ecut4     2.96308351E+01 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     0.00000000E+00 Hartree
          ecuteps3     3.99028580E+01 Hartree
          ecuteps4     0.00000000E+00 Hartree
         ecutsigx1     0.00000000E+00 Hartree
         ecutsigx2     0.00000000E+00 Hartree
         ecutsigx3     0.00000000E+00 Hartree
         ecutsigx4     3.99028580E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     0.00000000E+00 Hartree
          ecutwfn3     2.96308351E+01 Hartree
          ecutwfn4     2.96308351E+01 Hartree
           etotal1    -1.6583118403E+02
           etotal3     0.0000000000E+00
           etotal4     0.0000000000E+00
            fcart1    -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                      -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                      -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                      -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                      -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
            fcart3     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            fcart4     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
-          fftalg         312
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
        gwcalctyp          20
            gwmem           0
             iscf1          7
             iscf2         -2
             iscf3          7
             iscf4          7
           istwfk1       2    0    3    0    0    7    0    0    0    9
           istwfk2       1    0    1    0    0    1    0    0    0    1
           istwfk3       1    0    1    0    0    1    0    0    0    1
           istwfk4       1    0    1    0    0    1    0    0    0    1
              ixc          11
           jdtset        1    2    3    4
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
            kptgw4     5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      3.99851330E+01
P           mkmem           1
            natom           5
            nband1         23
            nband2        105
            nband3         40
            nband4         40
           nbdbuf1          0
           nbdbuf2         10
           nbdbuf3          0
           nbdbuf4          0
           ndtset           4
            ngfft1         64      64      64
            ngfft2         64      64      64
            ngfft3         50      50      50
            ngfft4         50      50      50
             nkpt          10
           nkptgw1          0
           nkptgw2          0
           nkptgw3          0
           nkptgw4          1
           npweps1          0
           npweps2          0
           npweps3      12053
           npweps4          0
          npwsigx1          0
          npwsigx2          0
          npwsigx3          0
          npwsigx4      12053
           npwwfn1          0
           npwwfn2          0
           npwwfn3       7809
           npwwfn4       7809
            nstep         200
             nsym          48
           ntypat           3
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
              occ4     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          0
        optdriver3          3
        optdriver4          4
           ppmfrq1     0.00000000E+00 Hartree
           ppmfrq2     0.00000000E+00 Hartree
           ppmfrq3     6.13713734E-01 Hartree
           ppmfrq4     0.00000000E+00 Hartree
           prtcif1          1
           prtcif2          0
           prtcif3          0
           prtcif4          0
          spgroup         221
           strten1    -8.4607073262E-06 -8.4607073262E-06 -8.4607073262E-06
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten3     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten4     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
        symmorphi           0
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                       0  0 -1   1  0  0   0 -1  0       0  0  1  -1  0  0   0  1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1   1  0  0   0 -1  0
                       0  0  1  -1  0  0   0 -1  0       0  0 -1   1  0  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0  1   0 -1  0       1  0  0   0  0 -1   0  1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0 -1   0 -1  0      -1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0  1  -1  0  0       0  1  0   0  0 -1   1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0  1  -1  0  0
                       0  1  0   0  0 -1  -1  0  0       0 -1  0   0  0  1   1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       0  0 -1   0  1  0  -1  0  0       0  0  1   0 -1  0   1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0  1  0  -1  0  0
                       0  0  1   0 -1  0  -1  0  0       0  0 -1   0  1  0   1  0  0
           tolvrs1     1.00000000E-10
           tolvrs2     0.00000000E+00
           tolvrs3     0.00000000E+00
           tolvrs4     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-10
           tolwfr3     1.00000000E-10
           tolwfr4     1.00000000E-10
           tsmear      2.00000000E-03 Hartree
            typat      1  2  3  3  3
              wtk        0.01563    0.09375    0.04688    0.18750    0.18750    0.04688
                         0.12500    0.18750    0.09375    0.01563
           xangst      2.1461990946E-28  2.0215940308E-29 -1.0720576634E-28
                       2.6449026365E+00  2.6449026365E+00  2.6449026365E+00
                       2.6449026365E+00  2.6449026365E+00 -1.0720576634E-28
                       2.6449026365E+00  2.0215940308E-29  2.6449026365E+00
                       2.1461990946E-28  2.6449026365E+00  2.6449026365E+00
            xcart      4.0557285155E-28  3.8202590702E-29 -2.0258953826E-28
                       4.9981416311E+00  4.9981416311E+00  4.9981416311E+00
                       4.9981416311E+00  4.9981416311E+00 -2.0258953826E-28
                       4.9981416311E+00  3.8202590702E-29  4.9981416311E+00
                       4.0557285155E-28  4.9981416311E+00  4.9981416311E+00
             xred      4.0572364839E-29  3.8216794882E-30 -2.0266486347E-29
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01 -2.0266486347E-29
                       5.0000000000E-01  3.8216794882E-30  5.0000000000E-01
                       4.0572364839E-29  5.0000000000E-01  5.0000000000E-01
            znucl       37.00000   32.00000   17.00000

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
 For information on why they are suggested, see also https://www.abinit.org/about/?text=acknowledgments.
-
- [1] Effect of self-consistency on quasiparticles in solids
- F. Bruneval, N. Vast, L. Reining, Phys. Rev. B 74, 045102 (2006).
- Comment : in case gwcalctyp >= 10.
-
- [2] Recent developments in the ABINIT software package.
- Computer Phys. Comm. 205, 106 (2016).
- X.Gonze, F.Jollet, F.Abreu Araujo, D.Adams, B.Amadon, T.Applencourt,
- C.Audouze, J.-M.Beuken, J.Bieder, A.Bokhanchuk, E.Bousquet, F.Bruneval
- D.Caliste, M.Cote, F.Dahm, F.Da Pieve, M.Delaveau, M.Di Gennaro,
- B.Dorado, C.Espejo, G.Geneste, L.Genovese, A.Gerossier, M.Giantomassi,
- Y.Gillet, D.R.Hamann, L.He, G.Jomard, J.Laflamme Janssen, S.Le Roux,
- A.Levitt, A.Lherbier, F.Liu, I.Lukacevic, A.Martin, C.Martins,
- M.J.T.Oliveira, S.Ponce, Y.Pouillon, T.Rangel, G.-M.Rignanese,
- A.H.Romero, B.Rousseau, O.Rubel, A.A.Shukri, M.Stankovski, M.Torrent,
- M.J.Van Setten, B.Van Troeye, M.J.Verstraete, D.Waroquier, J.Wiktor,
- B.Xue, A.Zhou, J.W.Zwanziger.
- Comment : the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
-
- [3] Optimized norm-conserving Vanderbilt pseudopotentials.
- D.R. Hamann, Phys. Rev. B 88, 085117 (2013).
- Comment: Some pseudopotential generated using the ONCVPSP code were used.
-
- [4] ABINIT : First-principles approach of materials and nanosystem properties.
- Computer Phys. Comm. 180, 2582-2615 (2009).
- X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
- D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
- S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
- M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
- M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
- Comment : the third generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT_CPC_v10.pdf .
- The licence allows the authors to put it on the Web.
-
- [5] A brief introduction to the ABINIT software package.
- Z. Kristallogr. 220, 558-562 (2005).
- X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
- M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
- L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
- Comment : the second generic paper describing the ABINIT project. Note that this paper
- should be cited especially if you are using the GW part of ABINIT, as several authors
- of this part are not in the list of authors of the first or third paper.
- The .pdf of the latter paper is available at https://www.abinit.org/about/zfk_0505-06_558-562.pdf.
- Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
- the licence allows the authors to put it on the Web).
-
- Proc.   0 individual time (sec): cpu=     124487.0  wall=     326311.7

================================================================================

 Calculation completed.
.Delivered   0 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=    4179274.5  wall=   10441979.2
