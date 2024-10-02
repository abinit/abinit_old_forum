
.Version 7.10.5 of ABINIT 
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

.Starting date : Tue  7 Feb 2017.
- ( at 14h12 )
  
- input  file    -> elastic.inpt.in
- output file    -> elastic.inpt.out
- root for input  files -> tbase3_xi
- root for output files -> tbase3_xo


 DATASET    1 : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        16  mffmem =         1
P  mgfft =        72   mkmem =         4 mpssoang=         4     mpw =     13966
  mqgrid =      3001   natom =         3    nfft =    373248    nkpt =        28
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                     129.123 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     95.473 Mbytes ; DEN or POT disk file :      2.850 Mbytes.
================================================================================


 DATASET    2 : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        16  mffmem =         1
P  mgfft =       144   mkmem =         4 mpssoang=         4     mpw =    111607
  mqgrid =      5474   natom =         3    nfft =   2985984    nkpt =        28
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                    1027.200 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    762.940 Mbytes ; DEN or POT disk file :     22.783 Mbytes.
================================================================================


 DATASET    3 : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  3 (RF).
   intxc =         0    iscf =        -3 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =        16  mffmem =         1   mgfft =        72
P  mkmem =        55  mkqmem =        55  mk1mem =        55 mpssoang=         4
     mpw =     13966  mqgrid =      3001   natom =         3    nfft =    373248
    nkpt =       432  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =        48  n1xccc =         0  ntypat =         2
  occopt =         1
================================================================================

 memorf : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =   2 is non-zero, while idtset=  3.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.

P This job should need less than                     661.105 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1472.979 Mbytes ; DEN or POT disk file :      2.850 Mbytes.
================================================================================


 DATASET    4 : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  4 (RF).
   intxc =         0    iscf =         7 xclevel =         2  lmnmax =         4
   lnmax =         4   mband =        16  mffmem =         1   mgfft =        72
P  mkmem =        55  mkqmem =        55  mk1mem =        55 mpssoang=         4
     mpw =     13966  mqgrid =      3001   natom =         3    nfft =    373248
    nkpt =       432  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =        48  n1xccc =         0  ntypat =         2
  occopt =         1
================================================================================

 memorf : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =   2 is non-zero, while idtset=  4.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.

P This job should need less than                     663.952 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   1472.979 Mbytes ; DEN or POT disk file :      2.850 Mbytes.
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
            acell      1.2585576045E+01  1.2585576045E+01  1.2585576045E+01 Bohr
              amu      1.12411000E+02  1.27600000E+02
           diemac      1.20000000E+01
          dilatmx1     1.00000000E+00
          dilatmx2     2.00000000E+00
          dilatmx3     1.00000000E+00
          dilatmx4     1.00000000E+00
             ecut      7.00000000E+01 Hartree
           ecutsm1     0.00000000E+00 Hartree
           ecutsm2     2.00000000E+00 Hartree
           ecutsm3     0.00000000E+00 Hartree
           ecutsm4     0.00000000E+00 Hartree
-          fftalg         312
          getcell1          0
          getcell2          0
          getcell3          2
          getcell4          2
           getddk1          0
           getddk2          0
           getddk3          0
           getddk4          3
           getwfk1          0
           getwfk2          1
           getwfk3          2
           getwfk4          2
          getxred1          0
          getxred2          1
          getxred3          2
          getxred4          2
           ionmov1          2
           ionmov2          2
           ionmov3          0
           ionmov4          0
             iscf1          7
             iscf2          7
             iscf3         -3
             iscf4          7
              ixc          11
           jdtset        1    2    3    4
              kpt1     0.00000000E+00  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  8.33333333E-02 -1.66666667E-01
                       8.33333333E-02  8.33333333E-02 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -4.16666667E-01
                       0.00000000E+00  8.33333333E-02 -3.33333333E-01
                       0.00000000E+00  1.66666667E-01 -2.50000000E-01
                       8.33333333E-02  8.33333333E-02 -2.50000000E-01
                       8.33333333E-02  1.66666667E-01 -1.66666667E-01
                       1.66666667E-01  1.66666667E-01 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  5.00000000E-01
                       0.00000000E+00  1.66666667E-01 -4.16666667E-01
                       0.00000000E+00  2.50000000E-01 -3.33333333E-01
                       8.33333333E-02  1.66666667E-01 -3.33333333E-01
                       8.33333333E-02  2.50000000E-01 -2.50000000E-01
                       1.66666667E-01  1.66666667E-01 -2.50000000E-01
                       1.66666667E-01  2.50000000E-01 -1.66666667E-01
                       2.50000000E-01  2.50000000E-01 -8.33333333E-02
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  3.33333333E-01 -4.16666667E-01
                       8.33333333E-02  2.50000000E-01 -4.16666667E-01
                       8.33333333E-02  3.33333333E-01 -3.33333333E-01
                       1.66666667E-01  3.33333333E-01 -2.50000000E-01
                       2.50000000E-01  3.33333333E-01 -1.66666667E-01
                       3.33333333E-01  3.33333333E-01 -8.33333333E-02
                       0.00000000E+00  4.16666667E-01  5.00000000E-01
                       8.33333333E-02  4.16666667E-01 -4.16666667E-01
                       1.66666667E-01  4.16666667E-01 -3.33333333E-01
              kpt2     0.00000000E+00  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  8.33333333E-02 -1.66666667E-01
                       8.33333333E-02  8.33333333E-02 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -4.16666667E-01
                       0.00000000E+00  8.33333333E-02 -3.33333333E-01
                       0.00000000E+00  1.66666667E-01 -2.50000000E-01
                       8.33333333E-02  8.33333333E-02 -2.50000000E-01
                       8.33333333E-02  1.66666667E-01 -1.66666667E-01
                       1.66666667E-01  1.66666667E-01 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  5.00000000E-01
                       0.00000000E+00  1.66666667E-01 -4.16666667E-01
                       0.00000000E+00  2.50000000E-01 -3.33333333E-01
                       8.33333333E-02  1.66666667E-01 -3.33333333E-01
                       8.33333333E-02  2.50000000E-01 -2.50000000E-01
                       1.66666667E-01  1.66666667E-01 -2.50000000E-01
                       1.66666667E-01  2.50000000E-01 -1.66666667E-01
                       2.50000000E-01  2.50000000E-01 -8.33333333E-02
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  3.33333333E-01 -4.16666667E-01
                       8.33333333E-02  2.50000000E-01 -4.16666667E-01
                       8.33333333E-02  3.33333333E-01 -3.33333333E-01
                       1.66666667E-01  3.33333333E-01 -2.50000000E-01
                       2.50000000E-01  3.33333333E-01 -1.66666667E-01
                       3.33333333E-01  3.33333333E-01 -8.33333333E-02
                       0.00000000E+00  4.16666667E-01  5.00000000E-01
                       8.33333333E-02  4.16666667E-01 -4.16666667E-01
                       1.66666667E-01  4.16666667E-01 -3.33333333E-01
              kpt3     0.00000000E+00  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  8.33333333E-02 -1.66666667E-01
                       0.00000000E+00  1.66666667E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00 -1.66666667E-01
                       8.33333333E-02  8.33333333E-02 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -4.16666667E-01
                       0.00000000E+00  8.33333333E-02 -3.33333333E-01
                       0.00000000E+00  1.66666667E-01 -2.50000000E-01
                       0.00000000E+00  2.50000000E-01 -1.66666667E-01
                       0.00000000E+00  3.33333333E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00 -3.33333333E-01
                       8.33333333E-02  8.33333333E-02 -2.50000000E-01
                       8.33333333E-02  1.66666667E-01 -1.66666667E-01
                       8.33333333E-02  2.50000000E-01 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -2.50000000E-01
                       1.66666667E-01  8.33333333E-02 -1.66666667E-01
                       1.66666667E-01  1.66666667E-01 -8.33333333E-02
                       2.50000000E-01  0.00000000E+00 -1.66666667E-01
                       2.50000000E-01  8.33333333E-02 -8.33333333E-02
                       3.33333333E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  5.00000000E-01
                       0.00000000E+00  1.66666667E-01 -4.16666667E-01
                       0.00000000E+00  2.50000000E-01 -3.33333333E-01
                       0.00000000E+00  3.33333333E-01 -2.50000000E-01
                       0.00000000E+00  4.16666667E-01 -1.66666667E-01
                       0.00000000E+00  5.00000000E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00  5.00000000E-01
                       8.33333333E-02  8.33333333E-02 -4.16666667E-01
                       8.33333333E-02  1.66666667E-01 -3.33333333E-01
                       8.33333333E-02  2.50000000E-01 -2.50000000E-01
                       8.33333333E-02  3.33333333E-01 -1.66666667E-01
                       8.33333333E-02  4.16666667E-01 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -4.16666667E-01
                       1.66666667E-01  8.33333333E-02 -3.33333333E-01
                       1.66666667E-01  1.66666667E-01 -2.50000000E-01
                       1.66666667E-01  2.50000000E-01 -1.66666667E-01
                       1.66666667E-01  3.33333333E-01 -8.33333333E-02
                       2.50000000E-01  0.00000000E+00 -3.33333333E-01
                       2.50000000E-01  8.33333333E-02 -2.50000000E-01
                       2.50000000E-01  1.66666667E-01 -1.66666667E-01
                       2.50000000E-01  2.50000000E-01 -8.33333333E-02
                       3.33333333E-01  0.00000000E+00 -2.50000000E-01
                       3.33333333E-01  8.33333333E-02 -1.66666667E-01
                       3.33333333E-01  1.66666667E-01 -8.33333333E-02
                       4.16666667E-01  0.00000000E+00 -1.66666667E-01
                       4.16666667E-01  8.33333333E-02 -8.33333333E-02
                       5.00000000E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  3.33333333E-01
              kpt4     0.00000000E+00  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  8.33333333E-02 -1.66666667E-01
                       0.00000000E+00  1.66666667E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00 -1.66666667E-01
                       8.33333333E-02  8.33333333E-02 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -4.16666667E-01
                       0.00000000E+00  8.33333333E-02 -3.33333333E-01
                       0.00000000E+00  1.66666667E-01 -2.50000000E-01
                       0.00000000E+00  2.50000000E-01 -1.66666667E-01
                       0.00000000E+00  3.33333333E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00 -3.33333333E-01
                       8.33333333E-02  8.33333333E-02 -2.50000000E-01
                       8.33333333E-02  1.66666667E-01 -1.66666667E-01
                       8.33333333E-02  2.50000000E-01 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -2.50000000E-01
                       1.66666667E-01  8.33333333E-02 -1.66666667E-01
                       1.66666667E-01  1.66666667E-01 -8.33333333E-02
                       2.50000000E-01  0.00000000E+00 -1.66666667E-01
                       2.50000000E-01  8.33333333E-02 -8.33333333E-02
                       3.33333333E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  5.00000000E-01
                       0.00000000E+00  1.66666667E-01 -4.16666667E-01
                       0.00000000E+00  2.50000000E-01 -3.33333333E-01
                       0.00000000E+00  3.33333333E-01 -2.50000000E-01
                       0.00000000E+00  4.16666667E-01 -1.66666667E-01
                       0.00000000E+00  5.00000000E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00  5.00000000E-01
                       8.33333333E-02  8.33333333E-02 -4.16666667E-01
                       8.33333333E-02  1.66666667E-01 -3.33333333E-01
                       8.33333333E-02  2.50000000E-01 -2.50000000E-01
                       8.33333333E-02  3.33333333E-01 -1.66666667E-01
                       8.33333333E-02  4.16666667E-01 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -4.16666667E-01
                       1.66666667E-01  8.33333333E-02 -3.33333333E-01
                       1.66666667E-01  1.66666667E-01 -2.50000000E-01
                       1.66666667E-01  2.50000000E-01 -1.66666667E-01
                       1.66666667E-01  3.33333333E-01 -8.33333333E-02
                       2.50000000E-01  0.00000000E+00 -3.33333333E-01
                       2.50000000E-01  8.33333333E-02 -2.50000000E-01
                       2.50000000E-01  1.66666667E-01 -1.66666667E-01
                       2.50000000E-01  2.50000000E-01 -8.33333333E-02
                       3.33333333E-01  0.00000000E+00 -2.50000000E-01
                       3.33333333E-01  8.33333333E-02 -1.66666667E-01
                       3.33333333E-01  1.66666667E-01 -8.33333333E-02
                       4.16666667E-01  0.00000000E+00 -1.66666667E-01
                       4.16666667E-01  8.33333333E-02 -8.33333333E-02
                       5.00000000E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  3.33333333E-01
                       outvar_i_n : Printing only first  50 k-points.
           kptopt1          1
           kptopt2          1
           kptopt3          2
           kptopt4          2
         kptrlatt       -6    6    6      6   -6    6      6    6   -6
          kptrlen      7.55134563E+01
P           mkmem1          4
P           mkmem2          4
P           mkmem3         55
P           mkmem4         55
P          mkqmem1          4
P          mkqmem2          4
P          mkqmem3         55
P          mkqmem4         55
P          mk1mem1          4
P          mk1mem2          4
P          mk1mem3         55
P          mk1mem4         55
            natom           3
            nband1         16
            nband2         16
            nband3         16
            nband4         16
           ndtset           4
            ngfft1         72      72      72
            ngfft2        144     144     144
            ngfft3         72      72      72
            ngfft4         72      72      72
             nkpt1         28
             nkpt2         28
             nkpt3        432
             nkpt4        432
             nqpt1          0
             nqpt2          0
             nqpt3          1
             nqpt4          1
            nstep         500
             nsym          48
            ntime1        200
            ntime2        200
            ntime3          1
            ntime4          1
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000
              occ2     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000
              occ4     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000
          optcell1          0
          optcell2          2
          optcell3          0
          optcell4          0
        optdriver1          0
        optdriver2          0
        optdriver3          1
        optdriver4          1
          rfatpol1          1       1
          rfatpol2          1       1
          rfatpol3          1       1
          rfatpol4          1       3
            rfdir1          0       0       0
            rfdir2          0       0       0
            rfdir3          1       1       1
            rfdir4          1       1       1
           rfelfd1          0
           rfelfd2          0
           rfelfd3          2
           rfelfd4          3
           rfphon1          0
           rfphon2          0
           rfphon3          0
           rfphon4          1
           rfstrs1          0
           rfstrs2          0
           rfstrs3          0
           rfstrs4          3
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         225
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
           tolmxf1     1.00000000E-04
           tolmxf2     1.00000000E-04
           tolmxf3     5.00000000E-05
           tolmxf4     5.00000000E-05
           tolvrs1     1.00000000E-18
           tolvrs2     1.00000000E-18
           tolvrs3     0.00000000E+00
           tolvrs4     1.00000000E-18
           tolwfr1     0.00000000E+00
           tolwfr2     0.00000000E+00
           tolwfr3     1.00000000E-22
           tolwfr4     0.00000000E+00
            typat      1  1  2
              wtk1       0.00926    0.00926    0.02778    0.02778    0.00926    0.02778
                         0.02778    0.02778    0.05556    0.02778    0.02778    0.02778
                         0.02778    0.05556    0.05556    0.02778    0.05556    0.02778
                         0.02778    0.02778    0.05556    0.05556    0.05556    0.05556
                         0.02778    0.02778    0.05556    0.05556
              wtk2       0.00926    0.00926    0.02778    0.02778    0.00926    0.02778
                         0.02778    0.02778    0.05556    0.02778    0.02778    0.02778
                         0.02778    0.05556    0.05556    0.02778    0.05556    0.02778
                         0.02778    0.02778    0.05556    0.05556    0.05556    0.05556
                         0.02778    0.02778    0.05556    0.05556
              wtk3       0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231
              wtk4       0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231
                       outvars : Printing only first  50 k-points.
           xangst      1.6650000000E+00  1.6650000000E+00  1.6650000000E+00
                      -1.6650000000E+00 -1.6650000000E+00 -1.6650000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            xcart      3.1463940113E+00  3.1463940113E+00  3.1463940113E+00
                      -3.1463940113E+00 -3.1463940113E+00 -3.1463940113E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
             xred      2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
                      -2.5000000000E-01 -2.5000000000E-01 -2.5000000000E-01
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            znucl       48.00000   52.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

 chkinp: Checking input parameters for consistency, jdtset=   4.

================================================================================
== DATASET  1 ==================================================================
-   nproc =    8

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  6.2927880  6.2927880  G(1)= -0.0794560  0.0794560  0.0794560
 R(2)=  6.2927880  0.0000000  6.2927880  G(2)=  0.0794560 -0.0794560  0.0794560
 R(3)=  6.2927880  6.2927880  0.0000000  G(3)=  0.0794560  0.0794560 -0.0794560
 Unit cell volume ucvol=  4.9837851E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  72  72
         ecut(hartree)=     70.000   => boxcut(ratio)=   2.14813

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is 48-Cd.GGA.fhi
- pspatm: opening atomic psp file    48-Cd.GGA.fhi
- cadmium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
- 48.00000  12.00000     11001                znucl, zion, pspdat
    6   11    3    1       547   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   81.72775700
         --- l  ekb(1:nproj) -->
             0   -0.875033
             2   -6.045521
             3   -2.291561
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 52-Te.GGA.fhi
- pspatm: opening atomic psp file    52-Te.GGA.fhi
- tellurium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 0 local
- 52.00000   6.00000     11001                znucl, zion, pspdat
    6   11    3    0       549   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   43.75451747
         --- l  ekb(1:nproj) -->
             1    0.375831
             2    0.739913
             3   -3.545945
 pspatm: atomic psp has been read  and splines computed

   6.21630094E+03                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   5 by node    1
P newkpt: treating     16 bands with npw=   13937 for ikpt=   6 by node    1
P newkpt: treating     16 bands with npw=   13950 for ikpt=   7 by node    1
P newkpt: treating     16 bands with npw=   13932 for ikpt=   8 by node    1
P newkpt: treating     16 bands with npw=   13934 for ikpt=   9 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  10 by node    2
P newkpt: treating     16 bands with npw=   13960 for ikpt=  11 by node    2
P newkpt: treating     16 bands with npw=   13948 for ikpt=  12 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  13 by node    3
P newkpt: treating     16 bands with npw=   13931 for ikpt=  14 by node    3
P newkpt: treating     16 bands with npw=   13936 for ikpt=  15 by node    3
P newkpt: treating     16 bands with npw=   13941 for ikpt=  16 by node    3
P newkpt: treating     16 bands with npw=   13943 for ikpt=  17 by node    4
P newkpt: treating     16 bands with npw=   13966 for ikpt=  18 by node    4
P newkpt: treating     16 bands with npw=   13954 for ikpt=  19 by node    4
P newkpt: treating     16 bands with npw=   13939 for ikpt=  20 by node    4
P newkpt: treating     16 bands with npw=   13941 for ikpt=  21 by node    5
P newkpt: treating     16 bands with npw=   13926 for ikpt=  22 by node    5
P newkpt: treating     16 bands with npw=   13929 for ikpt=  23 by node    5
P newkpt: treating     16 bands with npw=   13951 for ikpt=  24 by node    5
P newkpt: treating     16 bands with npw=   13960 for ikpt=  25 by node    6
P newkpt: treating     16 bands with npw=   13946 for ikpt=  26 by node    6
P newkpt: treating     16 bands with npw=   13949 for ikpt=  27 by node    6
P newkpt: treating     16 bands with npw=   13938 for ikpt=  28 by node    6

_setup2: Arith. and geom. avg. npw (full set) are   13940.565   13940.561

================================================================================

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: (  1/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -96.897436943429    -9.690E+01 3.991E-01 1.616E+04
 ETOT  2  -98.474574381875    -1.577E+00 3.546E-03 3.476E+02
 ETOT  3  -98.484760550881    -1.019E-02 4.212E-04 5.104E+01
 ETOT  4  -98.485975609552    -1.215E-03 4.388E-04 5.055E+00
 ETOT  5  -98.486153723682    -1.781E-04 1.416E-04 7.208E-01
 ETOT  6  -98.486170979438    -1.726E-05 9.119E-05 3.249E-02
 ETOT  7  -98.486172288192    -1.309E-06 2.248E-05 1.093E-03
 ETOT  8  -98.486172339292    -5.110E-08 1.383E-05 1.365E-05
 ETOT  9  -98.486172339918    -6.261E-10 3.014E-06 1.625E-07
 ETOT 10  -98.486172339926    -7.546E-12 1.977E-06 1.766E-09
 ETOT 11  -98.486172339926    -3.979E-13 4.121E-07 3.324E-12
 ETOT 12  -98.486172339926     5.684E-14 2.816E-07 5.464E-14
 ETOT 13  -98.486172339920     6.196E-12 5.747E-08 1.393E-16
 ETOT 14  -98.486172339920    -1.421E-14 4.024E-08 4.062E-18
 ETOT 15  -98.486172339920    -2.700E-13 8.096E-09 5.220E-19

 At SCF step   15       vres2   =  5.22E-19 < tolvrs=  1.00E-18 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -5.72513584E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -5.72513584E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -5.72513584E-04  sigma(2 1)=  0.00000000E+00


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  3.14639401125460E+00  3.14639401125460E+00  3.14639401125460E+00
 -3.14639401125460E+00 -3.14639401125460E+00 -3.14639401125460E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  2.50000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
 -2.50000000000000E-01 -2.50000000000000E-01 -2.50000000000000E-01
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.22861E-31 1.02356E-31 (free atoms)
  2.22861374329335E-31 -5.57153435823337E-32 -5.57153435823338E-32
 -1.53217194851418E-31  6.96441794779172E-32 -1.39288358955834E-32
 -6.96441794779172E-32 -1.39288358955834E-32  6.96441794779172E-32
 Reduced forces (fred)
  1.05181454029468E-30 -1.05181454029468E-30 -1.57772181044202E-30
  0.00000000000000E+00  1.05181454029468E-30  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Total energy (etotal) [Ha]= -9.84861723399202E+01

 At Broyd/MD step   1, gradients are converged : 
  max grad (force/stress) = 2.2286E-31 < tolmxf= 1.0000E-04 ha/bohr (free atoms)

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.0987E-11; max=  8.0959E-09
   0.0000  0.0000 -0.0833    1  7.42931E-15 kpt; spin; max resid(k); each band:
  8.60E-25 3.68E-24 3.70E-24 3.74E-24 2.39E-25 1.98E-25 3.88E-25 4.77E-25
  5.15E-25 2.61E-25 8.81E-26 2.59E-24 3.62E-24 3.56E-24 1.96E-24 7.43E-15
   0.0000  0.0000 -0.2500    1  8.09588E-09 kpt; spin; max resid(k); each band:
  1.20E-24 3.35E-24 3.35E-24 4.31E-24 4.90E-25 5.39E-25 6.08E-25 4.78E-25
  3.84E-25 2.82E-25 2.41E-25 3.75E-24 3.31E-24 3.31E-24 5.01E-25 8.10E-09
   0.0000  0.0833 -0.1667    1  1.16789E-18 kpt; spin; max resid(k); each band:
  1.04E-24 3.48E-24 3.34E-24 3.45E-24 1.21E-24 2.97E-25 3.68E-25 5.07E-25
  4.52E-25 3.11E-25 5.64E-25 3.58E-24 3.00E-24 3.35E-24 8.46E-25 1.17E-18
   0.0833  0.0833 -0.0833    1  8.21716E-24 kpt; spin; max resid(k); each band:
  9.63E-25 3.83E-24 3.35E-24 3.66E-24 2.72E-25 3.39E-25 6.29E-25 5.10E-25
  3.17E-25 5.61E-25 4.89E-25 3.27E-24 3.26E-24 3.14E-24 1.38E-24 8.22E-24
   0.0000  0.0000 -0.4167    1  3.42559E-22 kpt; spin; max resid(k); each band:
  1.35E-24 3.27E-24 3.32E-24 5.35E-25 1.60E-24 9.81E-25 4.32E-25 4.81E-25
  4.81E-25 1.49E-24 3.47E-24 2.19E-24 3.31E-24 3.31E-24 1.01E-24 3.43E-22
   0.0000  0.0833 -0.3333    1  1.22598E-13 kpt; spin; max resid(k); each band:
  1.27E-24 3.21E-24 3.07E-24 1.24E-24 4.43E-25 2.00E-24 8.76E-25 5.76E-25
  3.29E-25 2.80E-24 1.07E-24 3.25E-24 3.06E-24 3.23E-24 1.26E-24 1.23E-13
   0.0000  0.1667 -0.2500    1  1.16611E-23 kpt; spin; max resid(k); each band:
  1.28E-24 3.06E-24 2.08E-24 2.76E-24 5.07E-25 2.54E-24 2.03E-24 3.33E-25
  7.45E-25 2.67E-25 9.55E-25 3.79E-24 2.99E-24 3.10E-24 7.36E-25 1.17E-23
   0.0833  0.0833 -0.2500    1  2.53462E-19 kpt; spin; max resid(k); each band:
  1.21E-24 3.52E-24 2.73E-24 8.22E-25 1.90E-24 2.80E-24 3.00E-25 1.15E-24
  7.05E-25 1.03E-24 5.41E-25 3.65E-24 2.89E-24 3.11E-24 1.35E-24 2.53E-19
   0.0833  0.1667 -0.1667    1  1.03750E-23 kpt; spin; max resid(k); each band:
  1.19E-24 3.70E-24 2.15E-24 2.54E-24 2.17E-24 1.51E-24 7.58E-25 4.81E-25
  7.03E-25 7.34E-25 5.89E-25 3.87E-24 2.77E-24 3.03E-24 1.06E-24 1.04E-23
   0.1667  0.1667 -0.0833    1  4.34289E-24 kpt; spin; max resid(k); each band:
  1.13E-24 4.34E-24 1.71E-24 3.07E-24 1.60E-24 9.17E-25 2.48E-25 2.90E-25
  6.47E-25 8.11E-25 2.06E-25 3.89E-24 2.74E-24 2.79E-24 1.10E-24 1.04E-24
   0.0000  0.0833  0.5000    1  1.81599E-14 kpt; spin; max resid(k); each band:
  1.49E-24 3.37E-24 3.15E-24 5.09E-25 7.48E-25 1.68E-24 4.76E-25 5.62E-25
  2.90E-25 5.55E-25 2.54E-24 8.30E-25 3.09E-24 3.19E-24 1.47E-24 1.82E-14
   0.0000  0.1667 -0.4167    1  7.06586E-22 kpt; spin; max resid(k); each band:
  1.58E-24 2.70E-24 3.19E-24 1.41E-24 3.05E-25 9.94E-25 7.04E-25 4.51E-25
  6.06E-25 1.07E-24 2.51E-24 1.35E-24 3.38E-24 2.92E-24 1.21E-24 7.07E-22
   0.0000  0.2500 -0.3333    1  4.71602E-23 kpt; spin; max resid(k); each band:
  1.58E-24 2.28E-24 2.10E-24 2.20E-24 1.55E-24 1.91E-25 7.73E-25 2.04E-25
  3.55E-25 1.40E-24 3.15E-24 2.47E-24 3.55E-24 2.70E-24 1.05E-24 4.72E-23
   0.0833  0.1667 -0.3333    1  2.25940E-22 kpt; spin; max resid(k); each band:
  1.48E-24 3.19E-24 2.60E-24 1.52E-24 8.23E-25 1.32E-24 7.37E-25 4.42E-25
  3.93E-25 8.23E-25 3.24E-24 2.43E-24 3.16E-24 3.04E-24 1.25E-24 2.26E-22
   0.0833  0.2500 -0.2500    1  7.34741E-22 kpt; spin; max resid(k); each band:
  1.50E-24 2.99E-24 1.79E-24 2.69E-24 7.54E-25 1.32E-24 9.40E-25 3.63E-25
  3.52E-25 3.37E-24 1.13E-24 3.46E-24 3.12E-24 2.80E-24 9.69E-25 7.35E-22
   0.1667  0.1667 -0.2500    1  5.42376E-20 kpt; spin; max resid(k); each band:
  1.49E-24 3.75E-24 1.42E-24 1.38E-24 1.97E-24 1.21E-24 2.93E-25 1.39E-24
  7.53E-25 2.57E-24 4.55E-25 3.44E-24 3.02E-24 2.76E-24 1.36E-24 5.42E-20
   0.1667  0.2500 -0.1667    1  4.54143E-23 kpt; spin; max resid(k); each band:
  1.44E-24 4.05E-24 1.02E-24 2.32E-24 2.36E-24 1.31E-24 1.41E-24 5.21E-25
  2.31E-24 3.03E-25 6.63E-25 4.13E-24 2.60E-24 2.52E-24 1.53E-24 4.54E-23
   0.2500  0.2500 -0.0833    1  4.95019E-24 kpt; spin; max resid(k); each band:
  1.27E-24 4.95E-24 2.67E-25 2.22E-24 2.49E-24 2.09E-24 2.23E-25 1.56E-24
  7.51E-25 1.34E-25 3.12E-25 4.49E-24 2.25E-24 2.26E-24 1.40E-24 1.57E-24
   0.0000  0.2500  0.5000    1  2.04736E-14 kpt; spin; max resid(k); each band:
  1.64E-24 3.54E-24 6.38E-25 1.65E-24 2.61E-24 1.71E-24 1.06E-24 2.01E-25
  4.69E-25 5.97E-25 3.21E-24 3.16E-24 2.95E-24 2.31E-24 1.49E-24 2.05E-14
   0.0000  0.3333 -0.4167    1  1.67746E-17 kpt; spin; max resid(k); each band:
  1.68E-24 2.07E-25 2.40E-24 1.50E-24 3.35E-24 2.89E-24 1.25E-25 7.57E-25
  3.95E-25 7.43E-25 2.83E-24 3.85E-24 2.19E-24 1.98E-24 1.65E-24 1.68E-17
   0.0833  0.2500 -0.4167    1  1.82748E-22 kpt; spin; max resid(k); each band:
  1.63E-24 3.02E-24 2.21E-24 1.47E-24 1.10E-24 1.30E-24 7.86E-25 1.00E-24
  3.97E-25 8.66E-25 2.40E-24 1.81E-24 3.42E-24 2.63E-24 1.22E-24 1.83E-22
   0.0833  0.3333 -0.3333    1  1.18192E-17 kpt; spin; max resid(k); each band:
  1.68E-24 2.25E-24 1.92E-24 1.36E-24 1.05E-24 2.48E-24 4.67E-25 8.48E-25
  6.15E-25 1.12E-24 2.47E-24 2.19E-24 3.59E-24 2.26E-24 1.37E-24 1.18E-17
   0.1667  0.3333 -0.2500    1  7.43517E-18 kpt; spin; max resid(k); each band:
  1.66E-24 2.22E-24 1.72E-24 1.99E-24 1.58E-24 1.59E-24 1.66E-24 4.43E-25
  1.50E-25 1.25E-24 2.94E-24 3.11E-24 3.25E-24 2.16E-24 3.23E-24 7.44E-18
   0.2500  0.3333 -0.1667    1  5.17280E-21 kpt; spin; max resid(k); each band:
  1.54E-24 1.80E-24 3.10E-24 2.00E-24 2.56E-24 1.57E-24 5.71E-25 2.43E-25
  2.41E-25 3.47E-24 5.89E-25 4.48E-24 2.29E-24 1.85E-24 1.60E-24 5.17E-21
   0.3333  0.3333 -0.0833    1  5.36776E-24 kpt; spin; max resid(k); each band:
  1.45E-24 1.06E-25 5.37E-24 1.98E-24 1.69E-24 1.78E-24 2.57E-25 7.67E-26
  3.64E-24 9.99E-26 2.46E-25 5.10E-24 1.63E-24 1.67E-24 1.69E-24 2.48E-24
   0.0000  0.4167  0.5000    1  5.52396E-24 kpt; spin; max resid(k); each band:
  1.64E-24 6.23E-26 5.52E-24 2.04E-24 1.39E-24 1.19E-24 1.54E-25 5.15E-26
  6.97E-26 4.21E-24 1.34E-25 5.49E-24 1.13E-24 1.21E-24 1.86E-24 2.83E-24
   0.0833  0.4167 -0.4167    1  4.99590E-24 kpt; spin; max resid(k); each band:
  1.68E-24 7.37E-25 3.13E-24 2.49E-24 2.98E-24 1.27E-24 4.21E-25 1.69E-25
  1.54E-25 6.03E-25 3.43E-24 5.00E-24 1.59E-24 1.34E-24 1.65E-24 2.99E-24
   0.1667  0.4167 -0.3333    1  1.30611E-09 kpt; spin; max resid(k); each band:
  1.76E-24 1.66E-24 1.34E-24 2.12E-24 2.38E-24 1.69E-24 1.59E-24 5.30E-25
  3.66E-25 1.71E-24 3.03E-24 3.69E-24 3.06E-24 1.19E-24 3.40E-23 1.31E-09
 reduced coordinates (array xred) for    3 atoms
       0.250000000000      0.250000000000      0.250000000000
      -0.250000000000     -0.250000000000     -0.250000000000
       0.000000000000      0.000000000000      0.000000000000
 rms dE/dt=  8.0334E-31; max dE/dt=  1.0518E-30; dE/dt below (all hartree)
    1       0.000000000000     -0.000000000000     -0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000
    3       0.000000000000      0.000000000000      0.000000000000

 cartesian coordinates (angstrom) at end:
    1      1.66500000000000     1.66500000000000     1.66500000000000
    2     -1.66500000000000    -1.66500000000000    -1.66500000000000
    3      0.00000000000000     0.00000000000000     0.00000000000000

 cartesian forces (hartree/bohr) at end:
    1      0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000     0.00000000000000    -0.00000000000000
    3     -0.00000000000000    -0.00000000000000     0.00000000000000
 frms,max,avg= 1.0235562E-31 2.2286137E-31   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1      0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000     0.00000000000000    -0.00000000000000
    3     -0.00000000000000    -0.00000000000000     0.00000000000000
 frms,max,avg= 5.2633373E-30 1.1459992E-29   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales= 12.585576045018 12.585576045018 12.585576045018 bohr
              =  6.660000000000  6.660000000000  6.660000000000 angstroms
 prteigrs : about to open file tbase3_xo_DS1_EIG
 Fermi (or HOMO) energy (hartree) =  -0.01492   Average Vxc (hartree)=  -0.35981
 Eigenvalues (hartree) for nkpt=  28  k points:
 kpt#   1, nband= 16, wtk=  0.00926, kpt=  0.0000  0.0000 -0.0833 (reduced coord)
  -0.52469  -0.39122  -0.39122  -0.39067  -0.38599  -0.38599  -0.36274  -0.36262
  -0.36262  -0.35248  -0.35248  -0.14721  -0.10473  -0.10473  -0.08779  -0.00803
 kpt#   2, nband= 16, wtk=  0.00926, kpt=  0.0000  0.0000 -0.2500 (reduced coord)
  -0.51706  -0.38794  -0.38794  -0.38203  -0.38165  -0.38165  -0.36537  -0.36511
  -0.36511  -0.35768  -0.35768  -0.21960  -0.12145  -0.12145  -0.09437   0.02560
 kpt#   3, nband= 16, wtk=  0.02778, kpt=  0.0000  0.0833 -0.1667 (reduced coord)
  -0.51927  -0.38972  -0.38792  -0.38606  -0.38340  -0.38214  -0.36539  -0.36418
  -0.36363  -0.35753  -0.35446  -0.19657  -0.14100  -0.11176  -0.06912  -0.00928
 kpt#   4, nband= 16, wtk=  0.02778, kpt=  0.0833  0.0833 -0.0833 (reduced coord)
  -0.52182  -0.39077  -0.38913  -0.38838  -0.38560  -0.38334  -0.36406  -0.36401
  -0.36257  -0.35593  -0.35256  -0.17420  -0.12102  -0.12090  -0.06394  -0.02629
 kpt#   5, nband= 16, wtk=  0.00926, kpt=  0.0000  0.0000 -0.4167 (reduced coord)
  -0.50903  -0.38277  -0.38277  -0.37453  -0.37453  -0.37123  -0.36929  -0.36929
  -0.36587  -0.36587  -0.35931  -0.28196  -0.13313  -0.13313  -0.10873   0.04262
 kpt#   6, nband= 16, wtk=  0.02778, kpt=  0.0000  0.0833 -0.3333 (reduced coord)
  -0.51057  -0.38488  -0.38341  -0.37843  -0.37534  -0.37252  -0.36848  -0.36719
  -0.36534  -0.36435  -0.36115  -0.26273  -0.15879  -0.12931  -0.08255   0.02928
 kpt#   7, nband= 16, wtk=  0.02778, kpt=  0.0000  0.1667 -0.2500 (reduced coord)
  -0.51153  -0.38625  -0.38408  -0.38025  -0.37573  -0.37410  -0.36844  -0.36617
  -0.36598  -0.36464  -0.35848  -0.23975  -0.18875  -0.12813  -0.05214   0.00605
 kpt#   8, nband= 16, wtk=  0.02778, kpt=  0.0833  0.0833 -0.2500 (reduced coord)
  -0.51326  -0.38671  -0.38502  -0.38053  -0.37888  -0.37549  -0.36752  -0.36666
  -0.36504  -0.36303  -0.35796  -0.24214  -0.14470  -0.13713  -0.07594   0.01844
 kpt#   9, nband= 16, wtk=  0.05556, kpt=  0.0833  0.1667 -0.1667 (reduced coord)
  -0.51485  -0.38809  -0.38541  -0.38295  -0.38073  -0.37714  -0.36748  -0.36613
  -0.36395  -0.36237  -0.35530  -0.22026  -0.16577  -0.13063  -0.05029  -0.01359
 kpt#  10, nband= 16, wtk=  0.02778, kpt=  0.1667  0.1667 -0.0833 (reduced coord)
  -0.51680  -0.38931  -0.38589  -0.38444  -0.38438  -0.37836  -0.36633  -0.36629
  -0.36282  -0.36144  -0.35270  -0.20249  -0.14736  -0.14327  -0.05253  -0.03044
 kpt#  11, nband= 16, wtk=  0.02778, kpt=  0.0000  0.0833  0.5000 (reduced coord)
  -0.50744  -0.38158  -0.38122  -0.37364  -0.37230  -0.37183  -0.37062  -0.37010
  -0.36816  -0.36629  -0.35395  -0.29017  -0.15872  -0.13985  -0.08583   0.02971
 kpt#  12, nband= 16, wtk=  0.02778, kpt=  0.0000  0.1667 -0.4167 (reduced coord)
  -0.50623  -0.38116  -0.38052  -0.37572  -0.37373  -0.37367  -0.36936  -0.36806
  -0.36662  -0.36583  -0.35308  -0.28270  -0.19355  -0.14713  -0.06053   0.02058
 kpt#  13, nband= 16, wtk=  0.02778, kpt=  0.0000  0.2500 -0.3333 (reduced coord)
  -0.50560  -0.38169  -0.38151  -0.37573  -0.37476  -0.37383  -0.36789  -0.36696
  -0.36681  -0.36402  -0.35520  -0.26341  -0.22525  -0.15178  -0.04931   0.03038
 kpt#  14, nband= 16, wtk=  0.05556, kpt=  0.0833  0.1667 -0.3333 (reduced coord)
  -0.50761  -0.38279  -0.38139  -0.37667  -0.37293  -0.37199  -0.37096  -0.36926
  -0.36650  -0.36252  -0.35796  -0.27556  -0.18144  -0.14568  -0.06203   0.01759
 kpt#  15, nband= 16, wtk=  0.05556, kpt=  0.0833  0.2500 -0.2500 (reduced coord)
  -0.50777  -0.38385  -0.38262  -0.37713  -0.37349  -0.37254  -0.37076  -0.36791
  -0.36516  -0.36185  -0.36025  -0.25439  -0.20868  -0.14927  -0.03650   0.00578
 kpt#  16, nband= 16, wtk=  0.02778, kpt=  0.1667  0.1667 -0.2500 (reduced coord)
  -0.50893  -0.38433  -0.38250  -0.37843  -0.37569  -0.37171  -0.36982  -0.36967
  -0.36479  -0.36291  -0.35833  -0.25863  -0.17815  -0.15388  -0.05742   0.01542
 kpt#  17, nband= 16, wtk=  0.05556, kpt=  0.1667  0.2500 -0.1667 (reduced coord)
  -0.50975  -0.38551  -0.38368  -0.37908  -0.37746  -0.37193  -0.36926  -0.36865
  -0.36652  -0.36320  -0.35574  -0.24020  -0.18876  -0.15751  -0.04418  -0.00706
 kpt#  18, nband= 16, wtk=  0.02778, kpt=  0.2500  0.2500 -0.0833 (reduced coord)
  -0.51094  -0.38663  -0.38465  -0.38019  -0.37983  -0.37181  -0.36877  -0.36863
  -0.36825  -0.36209  -0.35288  -0.22854  -0.17224  -0.16452  -0.06809  -0.01798
 kpt#  19, nband= 16, wtk=  0.02778, kpt=  0.0000  0.2500  0.5000 (reduced coord)
  -0.50527  -0.38131  -0.38110  -0.37700  -0.37564  -0.37424  -0.37044  -0.37014
  -0.36419  -0.35876  -0.35539  -0.26556  -0.21021  -0.16756  -0.05698   0.03133
 kpt#  20, nband= 16, wtk=  0.02778, kpt=  0.0000  0.3333 -0.4167 (reduced coord)
  -0.50321  -0.38030  -0.37969  -0.37744  -0.37728  -0.37573  -0.36876  -0.36867
  -0.36397  -0.35911  -0.35068  -0.26013  -0.23705  -0.17522  -0.06104   0.03132
 kpt#  21, nband= 16, wtk=  0.05556, kpt=  0.0833  0.2500 -0.4167 (reduced coord)
  -0.50517  -0.38070  -0.38012  -0.37713  -0.37511  -0.37370  -0.36953  -0.36837
  -0.36576  -0.36330  -0.35208  -0.27592  -0.20818  -0.16348  -0.04415   0.01740
 kpt#  22, nband= 16, wtk=  0.05556, kpt=  0.0833  0.3333 -0.3333 (reduced coord)
  -0.50382  -0.38060  -0.37997  -0.37820  -0.37559  -0.37413  -0.36796  -0.36664
  -0.36519  -0.36398  -0.35040  -0.26218  -0.23605  -0.17305  -0.04008   0.03788
 kpt#  23, nband= 16, wtk=  0.05556, kpt=  0.1667  0.3333 -0.2500 (reduced coord)
  -0.50462  -0.38180  -0.38116  -0.37705  -0.37458  -0.37369  -0.36975  -0.36830
  -0.36480  -0.36133  -0.35376  -0.25997  -0.22443  -0.17809  -0.01679   0.00734
 kpt#  24, nband= 16, wtk=  0.05556, kpt=  0.2500  0.3333 -0.1667 (reduced coord)
  -0.50538  -0.38306  -0.38186  -0.37646  -0.37595  -0.37406  -0.37132  -0.36956
  -0.36304  -0.35883  -0.35614  -0.25417  -0.20836  -0.18015  -0.05221  -0.00102
 kpt#  25, nband= 16, wtk=  0.02778, kpt=  0.3333  0.3333 -0.0833 (reduced coord)
  -0.50586  -0.38400  -0.38328  -0.37639  -0.37637  -0.37412  -0.37043  -0.37017
  -0.36298  -0.36195  -0.35304  -0.25046  -0.19154  -0.18096  -0.07915  -0.02383
 kpt#  26, nband= 16, wtk=  0.02778, kpt=  0.0000  0.4167  0.5000 (reduced coord)
  -0.50294  -0.38363  -0.38076  -0.37758  -0.37534  -0.37521  -0.36970  -0.36965
  -0.36187  -0.35689  -0.35315  -0.26422  -0.20220  -0.18998  -0.08464  -0.03101
 kpt#  27, nband= 16, wtk=  0.05556, kpt=  0.0833  0.4167 -0.4167 (reduced coord)
  -0.50289  -0.38243  -0.37916  -0.37825  -0.37703  -0.37459  -0.36974  -0.36871
  -0.36291  -0.35643  -0.35288  -0.26070  -0.22162  -0.19243  -0.05758  -0.00496
 kpt#  28, nband= 16, wtk=  0.05556, kpt=  0.1667  0.4167 -0.3333 (reduced coord)
  -0.50284  -0.38108  -0.38031  -0.37961  -0.37433  -0.37384  -0.36806  -0.36707
  -0.36457  -0.36211  -0.34939  -0.25457  -0.23745  -0.19865  -0.01492   0.03188
 Total charge density [el/Bohr^3]
,     Maximum=    8.3162E-01  at reduced coord.    0.6944    0.7500    0.8611
,Next maximum=    8.3162E-01  at reduced coord.    0.7500    0.6944    0.8611
,     Minimum=    1.4589E-03  at reduced coord.    0.5000    0.5000    0.5000
,Next minimum=    1.4672E-03  at reduced coord.    0.5000    0.5000    0.4861
,  Integrated=    3.0000E+01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  7.19400755284710E+01
    Hartree energy  =  2.50350560833737E+01
    XC energy       = -1.49992415399336E+01
    Ewald energy    = -8.06596350836335E+01
    PspCore energy  =  1.24730518704826E+01
    Loc. psp. energy= -3.62949846915413E+01
    NL   psp  energy= -7.59804945071391E+01
    >>>>>>>>> Etotal= -9.84861723399202E+01

 Other information on the energy :
    Total energy(eV)= -2.67994504044368E+03 ; Band energy (Ha)=  -9.7558198004E+00
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -5.72513584E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -5.72513584E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -5.72513584E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  1.6844E+01 GPa]
- sigma(1 1)= -1.68439283E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -1.68439283E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -1.68439283E+01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    8

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

 find_getdtset : getxred/=0, take data from output of dataset with index  1.

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  6.2927880  6.2927880  G(1)= -0.0794560  0.0794560  0.0794560
 R(2)=  6.2927880  0.0000000  6.2927880  G(2)=  0.0794560 -0.0794560  0.0794560
 R(3)=  6.2927880  6.2927880  0.0000000  G(3)=  0.0794560  0.0794560 -0.0794560
 Unit cell volume ucvol=  4.9837851E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 144 144 144
         ecut(hartree)=    280.000   => boxcut(ratio)=   2.14813

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is 48-Cd.GGA.fhi
- pspatm: opening atomic psp file    48-Cd.GGA.fhi
- cadmium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
- 48.00000  12.00000     11001                znucl, zion, pspdat
    6   11    3    1       547   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   81.72775700
         --- l  ekb(1:nproj) -->
             0   -0.875033
             2   -6.045521
             3   -2.291561
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 52-Te.GGA.fhi
- pspatm: opening atomic psp file    52-Te.GGA.fhi
- tellurium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 0 local
- 52.00000   6.00000     11001                znucl, zion, pspdat
    6   11    3    0       549   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   43.75451747
         --- l  ekb(1:nproj) -->
             1    0.375831
             2    0.739913
             3   -3.545945
 pspatm: atomic psp has been read  and splines computed

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS1_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1  111514
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2  111577
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3  111607
- newkpt: read input wf with ikpt,npw=   4   13938, make ikpt,npw=   4  111607

_setup2: Arith. and geom. avg. npw (full set) are  111530.630  111530.625

================================================================================

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: (  1/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -98.486172419281    -9.849E+01 4.523E-04 3.012E-05
 ETOT  2  -98.486172419295    -1.309E-11 5.048E-07 7.262E-08
 ETOT  3  -98.486172419283     1.160E-11 8.482E-09 1.278E-10
 ETOT  4  -98.486172419284    -1.521E-12 6.449E-09 1.903E-11
 ETOT  5  -98.486172419273     1.123E-11 5.854E-10 4.787E-14
 ETOT  6  -98.486172419279    -5.684E-12 3.236E-10 3.267E-15
 ETOT  7  -98.486172419278     1.009E-12 2.177E-11 3.559E-16
 ETOT  8  -98.486172419274     3.524E-12 1.299E-11 8.236E-18
 ETOT  9  -98.486172419275    -1.279E-13 8.338E-13 2.684E-19

 At SCF step    9       vres2   =  2.68E-19 < tolvrs=  1.00E-18 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -5.72514613E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -5.72514613E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -5.72514613E-04  sigma(2 1)=  0.00000000E+00


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  3.14639401125460E+00  3.14639401125460E+00  3.14639401125460E+00
 -3.14639401125460E+00 -3.14639401125460E+00 -3.14639401125460E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  2.50000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
 -2.50000000000000E-01 -2.50000000000000E-01 -2.50000000000000E-01
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 5.57153E-32 3.93967E-32 (free atoms)
  5.57153435823338E-32 -5.57153435823338E-32 -5.57153435823338E-32
 -2.78576717911669E-32  2.78576717911669E-32  2.78576717911669E-32
 -2.78576717911669E-32  2.78576717911669E-32  2.78576717911669E-32
 Reduced forces (fred)
  1.05181454029468E-30  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.25855760450184E+01  1.25855760450184E+01  1.25855760450184E+01
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  6.29278802250919E+00  6.29278802250919E+00
  6.29278802250919E+00  0.00000000000000E+00  6.29278802250919E+00
  6.29278802250919E+00  6.29278802250919E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  4.98378505007122E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  8.89934616657147E+00  8.89934616657147E+00  8.89934616657147E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -5.72514612545576E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -5.72514612545576E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -5.72514612545580E-04
 Total energy (etotal) [Ha]= -9.84861724192745E+01

--- Iteration: (  2/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -98.486785755448    -9.849E+01 1.652E-07 2.681E+01
 ETOT  2  -98.486888574826    -1.028E-04 5.806E-08 2.615E+00
 ETOT  3  -98.486901911866    -1.334E-05 2.995E-07 2.307E-01
 ETOT  4  -98.486902409883    -4.980E-07 6.584E-08 9.950E-03
 ETOT  5  -98.486902424570    -1.469E-08 1.073E-08 3.547E-04
 ETOT  6  -98.486902425002    -4.326E-10 8.840E-09 2.824E-06
 ETOT  7  -98.486902425010    -7.191E-12 1.743E-09 4.672E-08
 ETOT  8  -98.486902425013    -3.240E-12 1.489E-09 2.066E-10
 ETOT  9  -98.486902425027    -1.432E-11 2.924E-10 1.116E-12
 ETOT 10  -98.486902425015     1.185E-11 2.485E-10 1.359E-14
 ETOT 11  -98.486902425016    -4.263E-13 4.914E-11 1.133E-16
 ETOT 12  -98.486902425015     6.537E-13 4.132E-11 3.799E-18
 ETOT 13  -98.486902425017    -1.990E-12 8.250E-12 1.759E-19

 At SCF step   13       vres2   =  1.76E-19 < tolvrs=  1.00E-18 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -5.63626510E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -5.63626510E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -5.63626510E-04  sigma(2 1)=  0.00000000E+00


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  3.14909604607700E+00  3.14909604607700E+00  3.14909604607700E+00
 -3.14909604607700E+00 -3.14909604607700E+00 -3.14909604607700E+00
 -2.78815951774248E-32  2.78815951774248E-32  2.78815951774248E-32
 Reduced coordinates (xred)
  2.50000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
 -2.50000000000000E-01 -2.50000000000000E-01 -2.50000000000000E-01
  6.64038062894868E-33 -2.21346020964956E-33 -2.21346020964956E-33
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 9.74182E-32 5.76614E-32 (free atoms)
 -9.74181912620461E-32 -4.17506533980198E-32  4.17506533980198E-32
  9.04597490290428E-32 -2.08753266990099E-32  2.08753266990099E-32
  6.95844223300330E-33  6.26259800970296E-32 -6.26259800970296E-32
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  1.31476817536835E-30
  0.00000000000000E+00 -1.05181454029468E-30  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  8.90698867515517E+00  8.90698867515517E+00  8.90698867515517E+00
 Real space primitive translations (rprimd) [bohr]
  1.51614543222111E-19  6.29819209215400E+00  6.29819209215400E+00
  6.29819209215400E+00 -1.51614543222114E-19  6.29819209215400E+00
  6.29819209215400E+00  6.29819209215400E+00  1.51614543222114E-19
 Unitary Cell Volume (ucvol) [Bohr^3]=  4.99663588364200E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  8.90698867515517E+00  8.90698867515517E+00  8.90698867515517E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -5.63626510007211E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -5.63626510007211E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -5.63626510007211E-04
 Total energy (etotal) [Ha]= -9.84869024250170E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-7.30006E-04
           Relative     =-7.41224E-06

--- Iteration: (  3/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -96.147929925578    -9.615E+01 2.131E-02 3.452E+05
 ETOT  2  -98.018539322649    -1.871E+00 2.775E-03 8.596E+04
 ETOT  3  -98.505529313640    -4.870E-01 2.474E-03 1.955E+03
 ETOT  4  -98.517794378805    -1.227E-02 3.448E-04 1.388E+02
 ETOT  5  -98.518211055158    -4.167E-04 8.657E-06 3.400E+01
 ETOT  6  -98.518309528115    -9.847E-05 2.981E-06 1.519E+00
 ETOT  7  -98.518316129551    -6.601E-06 8.418E-07 5.675E-03
 ETOT  8  -98.518316157367    -2.782E-08 3.696E-08 6.942E-04
 ETOT  9  -98.518316160128    -2.761E-09 1.761E-08 2.761E-05
 ETOT 10  -98.518316160252    -1.248E-10 9.108E-10 8.525E-08
 ETOT 11  -98.518316160285    -3.301E-11 4.245E-10 4.126E-10
 ETOT 12  -98.518316160289    -3.482E-12 3.686E-11 5.119E-12
 ETOT 13  -98.518316160274     1.450E-11 1.087E-11 2.062E-13
 ETOT 14  -98.518316160278    -3.610E-12 1.433E-12 1.416E-15
 ETOT 15  -98.518316160283    -4.633E-12 2.793E-13 3.663E-17
 ETOT 16  -98.518316160277     5.230E-12 5.380E-14 2.258E-18
 ETOT 17  -98.518316160280    -2.942E-12 7.219E-15 4.442E-19

 At SCF step   17       vres2   =  4.44E-19 < tolvrs=  1.00E-18 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.12437803E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.12437803E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.12437803E-04  sigma(2 1)=  0.00000000E+00


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  3.35446410797861E+00  3.35446410797861E+00  3.35446410797861E+00
 -3.35446410797861E+00 -3.35446410797861E+00 -3.35446410797861E+00
  5.42059880851676E-31  5.17553784077341E-30 -5.11613805815175E-30
 Reduced coordinates (xred)
  2.50000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
 -2.50000000000000E-01 -2.50000000000000E-01 -2.50000000000000E-01
 -3.59714758224719E-32 -7.26615019883800E-31  8.07411812367342E-31
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  9.48785727199424E+00  9.48785727199424E+00  9.48785727199424E+00
 Real space primitive translations (rprimd) [bohr]
 -1.15209243867259E-17  6.70892821595722E+00  6.70892821595722E+00
  6.70892821595722E+00  1.15209243867259E-17  6.70892821595722E+00
  6.70892821595722E+00  6.70892821595722E+00 -4.06309166853722E-17
 Unitary Cell Volume (ucvol) [Bohr^3]=  6.03933931573524E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  9.48785727199424E+00  9.48785727199424E+00  9.48785727199424E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.12437802870624E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.12437802870624E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.12437802870628E-04
 Total energy (etotal) [Ha]= -9.85183161602803E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-3.14137E-02
           Relative     =-3.18913E-04

--- Iteration: (  4/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -98.433430254973    -9.843E+01 7.557E-05 1.673E+04
 ETOT  2  -98.509818314097    -7.639E-02 2.522E-05 1.902E+03
 ETOT  3  -98.520581597959    -1.076E-02 2.737E-04 1.553E+02
 ETOT  4  -98.520861940433    -2.803E-04 2.366E-05 1.360E+01
 ETOT  5  -98.520877082318    -1.514E-05 1.396E-05 2.001E-01
 ETOT  6  -98.520877669312    -5.870E-07 4.832E-07 8.376E-03
 ETOT  7  -98.520877714289    -4.498E-08 4.901E-07 1.859E-04
 ETOT  8  -98.520877714901    -6.123E-10 1.372E-08 1.550E-06
 ETOT  9  -98.520877714897     4.292E-12 1.339E-08 1.934E-08
 ETOT 10  -98.520877714903    -5.627E-12 4.619E-10 3.052E-10
 ETOT 11  -98.520877714909    -5.741E-12 4.385E-10 9.782E-12
 ETOT 12  -98.520877714916    -7.262E-12 1.574E-11 4.918E-14
 ETOT 13  -98.520877714913     2.402E-12 1.432E-11 4.250E-16
 ETOT 14  -98.520877714914    -2.274E-13 5.756E-13 6.468E-18
 ETOT 15  -98.520877714913     5.542E-13 5.161E-13 8.220E-19

 At SCF step   15       vres2   =  8.22E-19 < tolvrs=  1.00E-18 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.43891353E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -3.43891353E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -3.43891353E-05  sigma(2 1)=  0.00000000E+00


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  3.41971587603451E+00  3.41971587603451E+00  3.41971587603451E+00
 -3.41971587603451E+00 -3.41971587603451E+00 -3.41971587603451E+00
  7.35398631817525E-31  6.92136388715407E-30 -6.86080864699479E-30
 Reduced coordinates (xred)
  2.50000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
 -2.50000000000000E-01 -2.50000000000000E-01 -2.50000000000000E-01
 -4.93347558774967E-32 -9.53790780819220E-31  1.06131413341281E-30
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.28156E-31 8.62873E-32 (free atoms)
  1.28155693146156E-31 -1.28155693146156E-31  7.68934158876939E-32
 -1.02524554516925E-31  1.02524554516925E-31  0.00000000000000E+00
 -2.56311386292313E-32  2.56311386292313E-32 -7.68934158876939E-32
 Reduced forces (fred)
  0.00000000000000E+00 -2.10362908058936E-30  0.00000000000000E+00
 -1.05181454029468E-30  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  9.67241714270117E+00  9.67241714270117E+00  9.67241714270117E+00
 Real space primitive translations (rprimd) [bohr]
 -1.16295105980792E-20  6.83943175206901E+00  6.83943175206901E+00
  6.83943175206901E+00  1.16295105980792E-20  6.83943175206901E+00
  6.83943175206901E+00  6.83943175206901E+00 -1.16295105980792E-20
 Unitary Cell Volume (ucvol) [Bohr^3]=  6.39867506329283E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  9.67241714270117E+00  9.67241714270117E+00  9.67241714270117E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -3.43891353005096E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -3.43891353005131E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -3.43891353005027E-05
 Total energy (etotal) [Ha]= -9.85208777149131E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.56155E-03
           Relative     =-2.60005E-05

--- Iteration: (  5/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -98.503100956780    -9.850E+01 7.188E-06 3.563E+03
 ETOT  2  -98.519030685491    -1.593E-02 4.713E-06 3.950E+02
 ETOT  3  -98.521137608757    -2.107E-03 3.779E-05 3.867E+01
 ETOT  4  -98.521210647996    -7.304E-05 6.700E-06 2.789E+00
 ETOT  5  -98.521213675345    -3.027E-06 3.291E-06 4.484E-02
 ETOT  6  -98.521213734613    -5.927E-08 2.803E-07 5.569E-04
 ETOT  7  -98.521213736003    -1.389E-09 1.949E-07 2.143E-05
 ETOT  8  -98.521213736103    -1.006E-10 1.643E-08 4.403E-07
 ETOT  9  -98.521213736126    -2.265E-11 1.244E-08 3.234E-09
 ETOT 10  -98.521213736105     2.059E-11 1.087E-09 7.213E-11
 ETOT 11  -98.521213736102     3.780E-12 8.227E-10 1.196E-12
 ETOT 12  -98.521213736101     4.690E-13 7.268E-11 4.700E-14
 ETOT 13  -98.521213736105    -3.510E-12 5.476E-11 1.029E-16
 ETOT 14  -98.521213736107    -2.714E-12 4.879E-12 2.000E-18
 ETOT 15  -98.521213736107    -8.527E-14 3.659E-12 4.858E-19

 At SCF step   15       vres2   =  4.86E-19 < tolvrs=  1.00E-18 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.34145661E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -4.34145661E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -4.34145661E-06  sigma(2 1)=  0.00000000E+00


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  3.45099726628130E+00  3.45099726628130E+00  3.45099726628130E+00
 -3.45099726628130E+00 -3.45099726628130E+00 -3.45099726628130E+00
  7.85355694805681E-31  7.82577008368397E-30 -7.85506552765018E-30
 Reduced coordinates (xred)
  2.50000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
 -2.50000000000000E-01 -2.50000000000000E-01 -2.50000000000000E-01
 -5.90156319980029E-32 -1.07907068357225E-30  1.19285745797499E-30
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.52393E-31 1.07758E-31 (free atoms)
 -1.52392838813821E-31  1.52392838813821E-31 -1.52392838813821E-31
  7.61964194069103E-32 -7.61964194069103E-32  7.61964194069103E-32
  7.61964194069103E-32 -7.61964194069103E-32  7.61964194069103E-32
 Reduced forces (fred)
  0.00000000000000E+00  3.15544362088405E-30  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  9.76089427537497E+00  9.76089427537497E+00  9.76089427537497E+00
 Real space primitive translations (rprimd) [bohr]
 -2.91057689771555E-17  6.90199453256259E+00  6.90199453256259E+00
  6.90199453256259E+00  2.91057689771555E-17  6.90199453256259E+00
  6.90199453256259E+00  6.90199453256259E+00 -2.91057689771555E-17
 Unitary Cell Volume (ucvol) [Bohr^3]=  6.57587922883529E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  9.76089427537497E+00  9.76089427537497E+00  9.76089427537497E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -4.34145660905411E-06  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -4.34145660905064E-06  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -4.34145660904543E-06
 Total energy (etotal) [Ha]= -9.85212137361073E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-3.36021E-04
           Relative     =-3.41065E-06

--- Iteration: (  6/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

     iter   Etot(hartree)      deltaE(h)  residm     vres2
 ETOT  1  -98.520847092983    -9.852E+01 2.055E-07 7.522E+01
 ETOT  2  -98.521177062247    -3.300E-04 1.242E-07 7.956E+00
 ETOT  3  -98.521218041915    -4.098E-05 7.405E-07 8.634E-01
 ETOT  4  -98.521219736077    -1.694E-06 1.752E-07 5.487E-02
 ETOT  5  -98.521219801536    -6.546E-08 5.789E-08 1.307E-03
 ETOT  6  -98.521219803283    -1.747E-09 8.907E-09 3.332E-05
 ETOT  7  -98.521219803371    -8.868E-11 4.150E-09 8.210E-07
 ETOT  8  -98.521219803381    -9.834E-12 6.504E-10 5.575E-09
 ETOT  9  -98.521219803391    -9.848E-12 3.561E-10 7.706E-11
 ETOT 10  -98.521219803370     2.130E-11 5.703E-11 1.994E-12
 ETOT 11  -98.521219803380    -1.054E-11 3.098E-11 4.309E-14
 ETOT 12  -98.521219803394    -1.378E-11 5.046E-12 1.450E-15
 ETOT 13  -98.521219803396    -1.805E-12 2.709E-12 7.676E-18
 ETOT 14  -98.521219803391     4.874E-12 4.481E-13 7.493E-19

 At SCF step   14       vres2   =  7.49E-19 < tolvrs=  1.00E-18 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.20732301E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -2.20732301E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.20732301E-07  sigma(2 1)=  0.00000000E+00


---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  3.45566080529449E+00  3.45566080529449E+00  3.45566080529449E+00
 -3.45566080529449E+00 -3.45566080529449E+00 -3.45566080529449E+00
  9.02903566969102E-31  7.85187522329328E-30 -7.88558362516385E-30
 Reduced coordinates (xred)
  2.50000000000000E-01  2.50000000000000E-01  2.50000000000000E-01
 -2.50000000000000E-01 -2.50000000000000E-01 -2.50000000000000E-01
 -6.77592522539158E-32 -1.07320684214432E-30  1.20384807371221E-30
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 -0.00000000000000E+00 -0.00000000000000E+00 -0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  9.77408475561719E+00  9.77408475561719E+00  9.77408475561719E+00
 Real space primitive translations (rprimd) [bohr]
  5.82127269529789E-17  6.91132161058898E+00  6.91132161058898E+00
  6.91132161058898E+00 -2.91027346543326E-17  6.91132161058898E+00
  6.91132161058898E+00  6.91132161058898E+00 -7.25764431373754E-21
 Unitary Cell Volume (ucvol) [Bohr^3]=  6.60257440788295E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  9.77408475561719E+00  9.77408475561719E+00  9.77408475561719E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -2.20732300729165E-07  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -2.20732300729165E-07  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -2.20732300727430E-07
 Total energy (etotal) [Ha]= -9.85212198033911E+01

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-6.06728E-06
           Relative     =-6.15835E-08

 At Broyd/MD step   6, gradients are converged : 
  max grad (force/stress) = 2.2073E-05 < tolmxf= 1.0000E-04 ha/bohr (free atoms)

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   1.0003E-15; max=  4.4813E-13
   0.0000  0.0000 -0.0833    1  2.31295E-25 kpt; spin; max resid(k); each band:
  3.06E-26 2.12E-25 2.12E-25 2.31E-25 1.94E-26 1.93E-26 7.86E-27 4.02E-26
  4.01E-26 4.02E-26 4.04E-26 9.97E-26 2.16E-25 2.16E-25 1.68E-25 6.76E-26
   0.0000  0.0000 -0.2500    1  2.02618E-25 kpt; spin; max resid(k); each band:
  8.56E-26 1.96E-25 1.96E-25 3.29E-26 3.28E-26 2.03E-25 1.31E-26 1.32E-26
  3.90E-26 3.10E-26 3.11E-26 1.78E-25 1.95E-25 1.95E-25 7.63E-26 1.63E-25
   0.0000  0.0833 -0.1667    1  2.06520E-25 kpt; spin; max resid(k); each band:
  7.12E-26 2.06E-25 1.17E-25 1.33E-25 2.43E-26 2.05E-25 3.86E-26 3.34E-26
  3.91E-26 2.99E-26 2.39E-26 1.71E-25 2.07E-25 2.06E-25 1.11E-25 1.25E-25
   0.0833  0.0833 -0.0833    1  2.16983E-25 kpt; spin; max resid(k); each band:
  5.49E-26 2.17E-25 1.39E-25 8.40E-26 1.94E-25 7.49E-26 2.74E-26 1.02E-26
  3.11E-26 3.43E-26 1.55E-26 1.50E-25 2.06E-25 1.95E-25 1.33E-25 6.25E-26
   0.0000  0.0000 -0.4167    1  4.03004E-18 kpt; spin; max resid(k); each band:
  1.43E-25 1.87E-25 1.77E-25 3.59E-26 5.04E-26 3.12E-26 2.59E-26 3.14E-26
  4.10E-26 4.24E-26 2.03E-25 5.45E-26 1.85E-25 1.85E-25 1.49E-26 4.03E-18
   0.0000  0.0833 -0.3333    1  1.26362E-24 kpt; spin; max resid(k); each band:
  1.31E-25 1.85E-25 1.44E-25 8.34E-26 3.65E-26 3.78E-26 4.29E-26 4.72E-26
  2.85E-26 1.99E-25 4.91E-26 1.67E-25 1.97E-25 1.86E-25 1.20E-25 1.26E-24
   0.0000  0.1667 -0.2500    1  2.07739E-25 kpt; spin; max resid(k); each band:
  1.23E-25 1.88E-25 7.20E-26 1.56E-25 3.56E-26 5.16E-26 6.07E-26 3.58E-26
  3.02E-26 1.72E-25 3.42E-26 1.80E-25 2.08E-25 1.84E-25 9.57E-26 1.51E-25
   0.0833  0.0833 -0.2500    1  4.34194E-25 kpt; spin; max resid(k); each band:
  1.10E-25 2.00E-25 1.28E-25 7.58E-26 4.81E-26 1.29E-25 2.33E-26 6.94E-26
  8.22E-26 4.34E-26 3.21E-26 1.80E-25 2.00E-25 1.76E-25 1.38E-25 4.34E-25
   0.0833  0.1667 -0.1667    1  2.04853E-25 kpt; spin; max resid(k); each band:
  9.89E-26 2.05E-25 6.68E-26 1.56E-25 7.38E-26 1.56E-25 5.77E-26 2.78E-26
  4.27E-26 3.91E-26 3.67E-26 1.85E-25 2.01E-25 1.83E-25 1.25E-25 1.37E-25
   0.1667  0.1667 -0.0833    1  2.23567E-25 kpt; spin; max resid(k); each band:
  8.74E-26 2.12E-26 2.24E-25 1.62E-25 1.59E-25 1.09E-25 1.62E-26 3.11E-26
  2.51E-26 3.42E-26 2.87E-26 1.84E-25 1.85E-25 1.64E-25 1.18E-25 1.23E-25
   0.0000  0.0833  0.5000    1  5.71738E-23 kpt; spin; max resid(k); each band:
  1.57E-25 1.87E-25 1.77E-25 4.82E-26 2.79E-26 5.94E-26 2.08E-26 3.14E-26
  1.56E-26 4.30E-26 1.68E-25 1.26E-25 1.89E-25 1.74E-25 1.32E-25 5.72E-23
   0.0000  0.1667 -0.4167    1  5.36358E-25 kpt; spin; max resid(k); each band:
  1.70E-25 1.60E-25 1.25E-25 6.20E-26 3.14E-26 6.13E-26 2.33E-26 2.27E-26
  3.97E-26 4.72E-26 1.77E-25 1.51E-25 1.99E-25 1.61E-25 1.18E-25 5.36E-25
   0.0000  0.2500 -0.3333    1  2.96464E-25 kpt; spin; max resid(k); each band:
  1.77E-25 6.69E-26 1.46E-25 3.88E-26 2.19E-26 1.35E-25 2.61E-26 3.45E-26
  3.59E-26 5.90E-26 2.24E-25 1.63E-25 2.20E-25 1.50E-25 1.05E-25 2.96E-25
   0.0833  0.1667 -0.3333    1  4.42517E-25 kpt; spin; max resid(k); each band:
  1.57E-25 1.69E-25 1.08E-25 1.04E-25 3.37E-26 5.63E-26 4.08E-26 2.57E-26
  2.10E-26 5.02E-26 2.08E-25 1.60E-25 1.96E-25 1.66E-25 1.25E-25 4.43E-25
   0.0833  0.2500 -0.2500    1  2.32799E-25 kpt; spin; max resid(k); each band:
  1.57E-25 6.33E-26 1.67E-25 1.32E-25 2.67E-26 5.94E-26 3.89E-26 4.45E-26
  3.28E-26 5.38E-26 2.33E-25 1.74E-25 2.10E-25 1.58E-25 1.10E-25 2.02E-25
   0.1667  0.1667 -0.2500    1  2.22497E-25 kpt; spin; max resid(k); each band:
  1.45E-25 5.63E-26 1.88E-25 1.14E-25 7.45E-26 2.98E-26 1.85E-26 5.48E-26
  3.52E-26 2.00E-25 3.28E-26 1.80E-25 1.96E-25 1.49E-25 1.40E-25 2.22E-25
   0.1667  0.2500 -0.1667    1  1.94201E-25 kpt; spin; max resid(k); each band:
  1.39E-25 3.03E-26 1.94E-25 1.41E-25 1.03E-25 3.04E-26 6.25E-26 7.06E-26
  1.61E-25 6.49E-26 3.22E-26 1.91E-25 1.91E-25 1.44E-25 1.46E-25 1.02E-25
   0.2500  0.2500 -0.0833    1  2.15166E-25 kpt; spin; max resid(k); each band:
  1.30E-25 1.02E-26 2.15E-25 1.29E-25 1.34E-25 8.82E-26 1.56E-26 5.19E-26
  1.07E-25 3.20E-26 1.80E-26 1.98E-25 1.57E-25 1.28E-25 9.04E-26 6.82E-26
   0.0000  0.2500  0.5000    1  1.49679E-20 kpt; spin; max resid(k); each band:
  1.80E-25 2.73E-26 1.47E-25 1.06E-25 8.24E-26 1.11E-25 1.39E-26 4.47E-26
  3.00E-26 3.55E-26 1.95E-25 1.90E-25 1.86E-25 1.23E-25 1.47E-25 1.50E-20
   0.0000  0.3333 -0.4167    1  4.48131E-13 kpt; spin; max resid(k); each band:
  2.01E-25 1.28E-26 8.80E-26 9.92E-26 9.00E-26 1.26E-25 1.22E-26 5.28E-26
  2.76E-26 3.84E-26 2.59E-25 1.76E-25 1.52E-25 1.06E-25 1.67E-25 4.48E-13
   0.0833  0.2500 -0.4167    1  2.15243E-25 kpt; spin; max resid(k); each band:
  1.81E-25 9.98E-26 1.02E-25 6.89E-26 8.25E-26 6.76E-26 3.05E-26 5.06E-26
  2.68E-26 4.76E-26 1.88E-25 1.73E-25 2.01E-25 1.35E-25 1.22E-25 2.15E-25
   0.0833  0.3333 -0.3333    1  1.98741E-23 kpt; spin; max resid(k); each band:
  1.95E-25 7.50E-26 9.18E-26 4.16E-26 6.50E-26 1.23E-25 2.33E-26 4.67E-26
  5.50E-26 5.35E-26 2.15E-25 1.97E-25 2.06E-25 1.17E-25 1.27E-25 1.99E-23
   0.1667  0.3333 -0.2500    1  2.54535E-25 kpt; spin; max resid(k); each band:
  1.87E-25 5.73E-26 1.28E-25 6.10E-26 8.28E-26 1.23E-25 4.62E-26 6.32E-26
  5.14E-26 5.31E-26 2.27E-25 1.88E-25 2.10E-25 1.11E-25 1.40E-25 2.55E-25
   0.2500  0.3333 -0.1667    1  1.10268E-24 kpt; spin; max resid(k); each band:
  1.80E-25 1.67E-26 1.52E-25 9.80E-26 9.29E-26 1.03E-25 3.05E-26 4.37E-26
  3.86E-26 2.17E-25 3.63E-26 1.84E-25 1.77E-25 1.01E-25 1.50E-25 1.10E-24
   0.3333  0.3333 -0.0833    1  2.05297E-25 kpt; spin; max resid(k); each band:
  1.76E-25 6.06E-27 1.87E-25 9.84E-26 1.21E-25 7.80E-26 3.01E-26 9.07E-27
  4.45E-26 2.05E-25 1.35E-26 1.91E-25 1.27E-25 9.35E-26 9.94E-26 7.24E-26
   0.0000  0.4167  0.5000    1  2.63267E-25 kpt; spin; max resid(k); each band:
  2.06E-25 3.65E-27 7.08E-26 1.01E-25 7.75E-26 1.79E-25 8.45E-27 1.68E-26
  2.14E-26 2.63E-25 1.03E-26 1.85E-25 1.05E-25 7.09E-26 1.13E-25 7.89E-26
   0.0833  0.4167 -0.4167    1  4.96773E-24 kpt; spin; max resid(k); each band:
  2.05E-25 1.09E-26 8.46E-26 1.02E-25 7.83E-26 1.61E-25 3.58E-26 2.13E-26
  3.01E-26 3.34E-26 2.60E-25 1.68E-25 1.58E-25 7.36E-26 1.59E-25 4.97E-24
   0.1667  0.4167 -0.3333    1  2.89845E-18 kpt; spin; max resid(k); each band:
  2.06E-25 3.57E-26 8.66E-26 8.51E-26 8.37E-26 1.07E-25 2.53E-26 8.38E-26
  5.62E-26 5.58E-26 2.27E-25 2.32E-25 2.03E-25 6.29E-26 1.58E-25 2.90E-18
 reduced coordinates (array xred) for    3 atoms
       0.250000000000      0.250000000000      0.250000000000
      -0.250000000000     -0.250000000000     -0.250000000000
      -0.000000000000     -0.000000000000      0.000000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000
    3       0.000000000000      0.000000000000      0.000000000000

 cartesian coordinates (angstrom) at end:
    1      1.82865693877961     1.82865693877961     1.82865693877961
    2     -1.82865693877961    -1.82865693877961    -1.82865693877961
    3      0.00000000000000     0.00000000000000    -0.00000000000000

 cartesian forces (hartree/bohr) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
    3     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 h/b

 cartesian forces (eV/Angstrom) at end:
    1     -0.00000000000000    -0.00000000000000    -0.00000000000000
    2     -0.00000000000000    -0.00000000000000    -0.00000000000000
    3     -0.00000000000000    -0.00000000000000    -0.00000000000000
 frms,max,avg= 0.0000000E+00 0.0000000E+00   0.000E+00  0.000E+00  0.000E+00 e/A
 length scales=  9.774084755617  9.774084755617  9.774084755617 bohr
              =  5.172222887500  5.172222887500  5.172222887500 angstroms
 prteigrs : about to open file tbase3_xo_DS2_EIG
 Fermi (or HOMO) energy (hartree) =  -0.05901   Average Vxc (hartree)=  -0.31441
 Eigenvalues (hartree) for nkpt=  28  k points:
 kpt#   1, nband= 16, wtk=  0.00926, kpt=  0.0000  0.0000 -0.0833 (reduced coord)
  -0.50146  -0.39183  -0.39183  -0.39130  -0.39069  -0.39069  -0.37918  -0.37913
  -0.37913  -0.37398  -0.37398  -0.18242  -0.13511  -0.13511  -0.12525  -0.05123
 kpt#   2, nband= 16, wtk=  0.00926, kpt=  0.0000  0.0000 -0.2500 (reduced coord)
  -0.49770  -0.39032  -0.39032  -0.38835  -0.38835  -0.38604  -0.38029  -0.38029
  -0.38019  -0.37643  -0.37643  -0.22657  -0.14495  -0.14495  -0.12857  -0.03840
 kpt#   3, nband= 16, wtk=  0.02778, kpt=  0.0000  0.0833 -0.1667 (reduced coord)
  -0.49878  -0.39113  -0.39045  -0.38955  -0.38862  -0.38780  -0.38036  -0.37981
  -0.37961  -0.37637  -0.37488  -0.21355  -0.15752  -0.13934  -0.10788  -0.06020
 kpt#   4, nband= 16, wtk=  0.02778, kpt=  0.0833  0.0833 -0.0833 (reduced coord)
  -0.50003  -0.39139  -0.39099  -0.39036  -0.39010  -0.38906  -0.37978  -0.37977
  -0.37910  -0.37559  -0.37401  -0.20022  -0.14452  -0.14393  -0.10683  -0.06765
 kpt#   5, nband= 16, wtk=  0.00926, kpt=  0.0000  0.0000 -0.4167 (reduced coord)
  -0.49388  -0.38766  -0.38766  -0.38476  -0.38476  -0.38288  -0.38228  -0.38228
  -0.38045  -0.38045  -0.37625  -0.26129  -0.15265  -0.15265  -0.14404   0.01702
 kpt#   6, nband= 16, wtk=  0.02778, kpt=  0.0000  0.0833 -0.3333 (reduced coord)
  -0.49459  -0.38874  -0.38826  -0.38641  -0.38511  -0.38322  -0.38169  -0.38122
  -0.38026  -0.37834  -0.37803  -0.25132  -0.17397  -0.15007  -0.11906  -0.01727
 kpt#   7, nband= 16, wtk=  0.02778, kpt=  0.0000  0.1667 -0.2500 (reduced coord)
  -0.49502  -0.38944  -0.38907  -0.38661  -0.38528  -0.38366  -0.38101  -0.38064
  -0.38004  -0.38003  -0.37664  -0.23921  -0.19332  -0.14898  -0.09128  -0.04755
 kpt#   8, nband= 16, wtk=  0.02778, kpt=  0.0833  0.0833 -0.2500 (reduced coord)
  -0.49587  -0.38949  -0.38921  -0.38757  -0.38648  -0.38368  -0.38142  -0.38056
  -0.37993  -0.37906  -0.37654  -0.24019  -0.16404  -0.15419  -0.11404  -0.03299
 kpt#   9, nband= 16, wtk=  0.05556, kpt=  0.0833  0.1667 -0.1667 (reduced coord)
  -0.49662  -0.39010  -0.38981  -0.38804  -0.38702  -0.38486  -0.38119  -0.38070
  -0.37965  -0.37877  -0.37525  -0.22884  -0.17527  -0.15037  -0.09255  -0.06135
 kpt#  10, nband= 16, wtk=  0.02778, kpt=  0.1667  0.1667 -0.0833 (reduced coord)
  -0.49755  -0.39045  -0.39005  -0.38882  -0.38832  -0.38616  -0.38086  -0.38080
  -0.37909  -0.37831  -0.37408  -0.21992  -0.16101  -0.15702  -0.09013  -0.07698
 kpt#  11, nband= 16, wtk=  0.02778, kpt=  0.0000  0.0833  0.5000 (reduced coord)
  -0.49312  -0.38699  -0.38693  -0.38436  -0.38357  -0.38328  -0.38292  -0.38244
  -0.38174  -0.38063  -0.37473  -0.26441  -0.17585  -0.15654  -0.12230  -0.00411
 kpt#  12, nband= 16, wtk=  0.02778, kpt=  0.0000  0.1667 -0.4167 (reduced coord)
  -0.49251  -0.38704  -0.38678  -0.38497  -0.38445  -0.38404  -0.38221  -0.38160
  -0.38080  -0.38014  -0.37443  -0.25943  -0.20123  -0.16052  -0.09856  -0.02047
 kpt#  13, nband= 16, wtk=  0.02778, kpt=  0.0000  0.2500 -0.3333 (reduced coord)
  -0.49218  -0.38778  -0.38739  -0.38500  -0.38449  -0.38390  -0.38139  -0.38118
  -0.38098  -0.37901  -0.37489  -0.24805  -0.22276  -0.16302  -0.08251  -0.02845
 kpt#  14, nband= 16, wtk=  0.05556, kpt=  0.0833  0.1667 -0.3333 (reduced coord)
  -0.49317  -0.38768  -0.38744  -0.38534  -0.38385  -0.38311  -0.38298  -0.38223
  -0.38097  -0.37862  -0.37589  -0.25706  -0.19203  -0.15963  -0.10200  -0.02209
 kpt#  15, nband= 16, wtk=  0.05556, kpt=  0.0833  0.2500 -0.2500 (reduced coord)
  -0.49322  -0.38850  -0.38820  -0.38504  -0.38414  -0.38330  -0.38285  -0.38162
  -0.38033  -0.37738  -0.37725  -0.24622  -0.20902  -0.16145  -0.07792  -0.04438
 kpt#  16, nband= 16, wtk=  0.02778, kpt=  0.1667  0.1667 -0.2500 (reduced coord)
  -0.49378  -0.38852  -0.38804  -0.38614  -0.38450  -0.38314  -0.38254  -0.38223
  -0.38006  -0.37799  -0.37668  -0.24941  -0.18841  -0.16419  -0.09650  -0.03419
 kpt#  17, nband= 16, wtk=  0.05556, kpt=  0.1667  0.2500 -0.1667 (reduced coord)
  -0.49415  -0.38940  -0.38838  -0.38613  -0.38516  -0.38329  -0.38202  -0.38191
  -0.37986  -0.37936  -0.37543  -0.24139  -0.19186  -0.16623  -0.08443  -0.05465
 kpt#  18, nband= 16, wtk=  0.02778, kpt=  0.2500  0.2500 -0.0833 (reduced coord)
  -0.49471  -0.39012  -0.38806  -0.38671  -0.38628  -0.38293  -0.38203  -0.38162
  -0.38148  -0.37886  -0.37415  -0.23723  -0.17679  -0.17001  -0.10220  -0.05766
 kpt#  19, nband= 16, wtk=  0.02778, kpt=  0.0000  0.2500  0.5000 (reduced coord)
  -0.49202  -0.38812  -0.38660  -0.38537  -0.38485  -0.38375  -0.38273  -0.38245
  -0.37986  -0.37683  -0.37533  -0.25233  -0.20994  -0.17238  -0.09038  -0.02384
 kpt#  20, nband= 16, wtk=  0.02778, kpt=  0.0000  0.3333 -0.4167 (reduced coord)
  -0.49101  -0.38788  -0.38673  -0.38561  -0.38559  -0.38347  -0.38210  -0.38154
  -0.37974  -0.37694  -0.37385  -0.24963  -0.22548  -0.17694  -0.09103  -0.00964
 kpt#  21, nband= 16, wtk=  0.05556, kpt=  0.0833  0.2500 -0.4167 (reduced coord)
  -0.49198  -0.38709  -0.38670  -0.38567  -0.38483  -0.38394  -0.38224  -0.38132
  -0.38054  -0.37892  -0.37418  -0.25533  -0.21171  -0.16990  -0.08391  -0.02664
 kpt#  22, nband= 16, wtk=  0.05556, kpt=  0.0833  0.3333 -0.3333 (reduced coord)
  -0.49132  -0.38731  -0.38681  -0.38642  -0.38500  -0.38351  -0.38156  -0.38074
  -0.37988  -0.37914  -0.37361  -0.24599  -0.23056  -0.17569  -0.07503  -0.02156
 kpt#  23, nband= 16, wtk=  0.05556, kpt=  0.1667  0.3333 -0.2500 (reduced coord)
  -0.49170  -0.38808  -0.38716  -0.38547  -0.38436  -0.38393  -0.38189  -0.38156
  -0.38016  -0.37779  -0.37465  -0.24773  -0.22117  -0.17847  -0.06243  -0.04060
 kpt#  24, nband= 16, wtk=  0.05556, kpt=  0.2500  0.3333 -0.1667 (reduced coord)
  -0.49205  -0.38907  -0.38672  -0.38499  -0.38443  -0.38403  -0.38308  -0.38246
  -0.37931  -0.37667  -0.37557  -0.24957  -0.20502  -0.17958  -0.08903  -0.03816
 kpt#  25, nband= 16, wtk=  0.02778, kpt=  0.3333  0.3333 -0.0833 (reduced coord)
  -0.49226  -0.38986  -0.38604  -0.38504  -0.38473  -0.38431  -0.38285  -0.38276
  -0.37880  -0.37858  -0.37422  -0.25037  -0.18882  -0.18008  -0.11187  -0.04875
 kpt#  26, nband= 16, wtk=  0.02778, kpt=  0.0000  0.4167  0.5000 (reduced coord)
  -0.49086  -0.38970  -0.38595  -0.38490  -0.38466  -0.38422  -0.38254  -0.38252
  -0.37874  -0.37624  -0.37426  -0.25764  -0.19532  -0.18553  -0.11679  -0.04952
 kpt#  27, nband= 16, wtk=  0.05556, kpt=  0.0833  0.4167 -0.4167 (reduced coord)
  -0.49085  -0.38889  -0.38635  -0.38602  -0.38446  -0.38374  -0.38228  -0.38203
  -0.37924  -0.37566  -0.37467  -0.25323  -0.21275  -0.18700  -0.09279  -0.03206
 kpt#  28, nband= 16, wtk=  0.05556, kpt=  0.1667  0.4167 -0.3333 (reduced coord)
  -0.49083  -0.38782  -0.38710  -0.38686  -0.38408  -0.38371  -0.38132  -0.38062
  -0.38003  -0.37803  -0.37338  -0.24466  -0.22958  -0.19025  -0.05901  -0.02287
 Total charge density [el/Bohr^3]
,     Maximum=    8.3431E-01  at reduced coord.    0.7153    0.7361    0.8542
,Next maximum=    8.3431E-01  at reduced coord.    0.6944    0.7361    0.8542
,     Minimum=    5.8096E-04  at reduced coord.    0.5000    0.5000    0.5000
,Next minimum=    5.8199E-04  at reduced coord.    0.5000    0.5000    0.4931
,  Integrated=    3.0000E+01

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  7.18964142242935E+01
    Hartree energy  =  2.88792305819787E+01
    XC energy       = -1.48360996508858E+01
    Ewald energy    = -7.34409443161475E+01
    PspCore energy  =  9.41496537572619E+00
    Loc. psp. energy= -4.41686469406583E+01
    NL   psp  energy= -7.62661390776979E+01
    >>>>>>>>> Etotal= -9.85212198033911E+01

 Other information on the energy :
    Total energy(eV)= -2.68089873042551E+03 ; Band energy (Ha)=  -1.0043867594E+01
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.20732301E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -2.20732301E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.20732301E-07  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  6.4942E-03 GPa]
- sigma(1 1)= -6.49416740E-03  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -6.49416740E-03  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -6.49416740E-03  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  3 ==================================================================
-   nproc =    8

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   2.

 find_getdtset : getcell/=0, take data from output of dataset with index  2.

 find_getdtset : getxred/=0, take data from output of dataset with index  2.

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  6.2927880  6.2927880  G(1)= -0.0794560  0.0794560  0.0794560
 R(2)=  6.2927880  0.0000000  6.2927880  G(2)=  0.0794560 -0.0794560  0.0794560
 R(3)=  6.2927880  6.2927880  0.0000000  G(3)=  0.0794560  0.0794560 -0.0794560
 Unit cell volume ucvol=  4.9837851E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 setup1 : take into account q-point for computing boxcut.

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  72  72
         ecut(hartree)=     70.000   => boxcut(ratio)=   2.14813

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is 48-Cd.GGA.fhi
- pspatm: opening atomic psp file    48-Cd.GGA.fhi
- cadmium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
- 48.00000  12.00000     11001                znucl, zion, pspdat
    6   11    3    1       547   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   81.72775700
         --- l  ekb(1:nproj) -->
             0   -0.875033
             2   -6.045521
             3   -2.291561
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 52-Te.GGA.fhi
- pspatm: opening atomic psp file    52-Te.GGA.fhi
- tellurium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 0 local
- 52.00000   6.00000     11001                znucl, zion, pspdat
    6   11    3    0       549   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   43.75451747
         --- l  ekb(1:nproj) -->
             1    0.375831
             2    0.739913
             3   -3.545945
 pspatm: atomic psp has been read  and splines computed

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.


 ==>  initialize data related to q vector <== 

 The list of irreducible perturbations for this q vector is:
    1)    idir= 1    ipert=   4
    2)    idir= 2    ipert=   4
    3)    idir= 3    ipert=   4

================================================================================

--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : derivative vs k along direction   1
 The set of symmetries contains only one element for this perturbation.
 symkpt : not enough symmetry to change the number of k points.

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  17 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  18 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  19 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  20 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  21 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  22 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  23 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  24 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  25 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  26 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  27 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  28 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  29 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  30 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  31 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  32 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  33 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  34 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  35 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  36 by node    0
P newkpt: treating     16 bands with npw=   13941 for ikpt=  37 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  38 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  39 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  40 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  41 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  42 by node    0
P newkpt: treating     16 bands with npw=   13966 for ikpt=  43 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  44 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  45 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  46 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  47 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  48 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  49 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  50 by node    0
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1  -52.272955091135     -5.227E+01 1.496E-01 0.000E+00
 ETOT  2  -52.375558327802     -1.026E-01 1.860E-03 0.000E+00
 ETOT  3  -52.376282588695     -7.243E-04 2.211E-05 0.000E+00
 ETOT  4  -52.376290736430     -8.148E-06 4.688E-07 0.000E+00
 ETOT  5  -52.376290845009     -1.086E-07 2.184E-08 0.000E+00
 ETOT  6  -52.376290846592     -1.583E-09 1.772E-09 0.000E+00
 ETOT  7  -52.376290846617     -2.431E-11 1.349E-10 0.000E+00
 ETOT  8  -52.376290846617     -4.405E-13 1.507E-11 0.000E+00
 ETOT  9  -52.376290846617     -1.421E-14 1.121E-12 0.000E+00
 ETOT 10  -52.376290846617     -7.105E-15 1.389E-13 0.000E+00
 ETOT 11  -52.376290846617      1.421E-14 9.986E-15 0.000E+00
 ETOT 12  -52.376290846617      4.974E-14 1.297E-15 0.000E+00
 ETOT 13  -52.376290846617     -2.842E-14 9.150E-17 0.000E+00
 ETOT 14  -52.376290846617     -1.421E-14 1.254E-17 0.000E+00
 ETOT 15  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 16  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT 17  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 18  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT 19  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 20  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 21  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 22  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 23  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 24  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT 25  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 26  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT 27  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 28  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT 29  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 30  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT 31  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 32  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT 33  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 34  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 35  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 36  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 37  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT 38  -52.376290846617      3.553E-14 1.917E-18 0.000E+00
 ETOT 39  -52.376290846617     -3.553E-14 1.917E-18 0.000E+00
 ETOT 40  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT 41  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 42  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 43  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT 44  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 45  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 46  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 47  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 48  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 49  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 50  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 51  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT 52  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT 53  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 54  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 55  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT 56  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 57  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT 58  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 59  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 60  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 61  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 62  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT 63  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT 64  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT 65  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT 66  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 67  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 68  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 69  -52.376290846617      4.263E-14 1.917E-18 0.000E+00
 ETOT 70  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT 71  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 72  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 73  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT 74  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 75  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 76  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 77  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT 78  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 79  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT 80  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT 81  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT 82  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 83  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 84  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT 85  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 86  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 87  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 88  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT 89  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 90  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 91  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT 92  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT 93  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 94  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT 95  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 96  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT 97  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT 98  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT 99  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  100  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  101  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  102  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  103  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  104  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  105  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  106  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT  107  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  108  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  109  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  110  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  111  -52.376290846617      3.553E-14 1.917E-18 0.000E+00
 ETOT  112  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT  113  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  114  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  115  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  116  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  117  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  118  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  119  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  120  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  121  -52.376290846617     -5.684E-14 1.917E-18 0.000E+00
 ETOT  122  -52.376290846617      7.105E-14 1.917E-18 0.000E+00
 ETOT  123  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  124  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  125  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  126  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  127  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  128  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  129  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  130  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  131  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  132  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  133  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  134  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  135  -52.376290846617     -3.553E-14 1.917E-18 0.000E+00
 ETOT  136  -52.376290846617      3.553E-14 1.917E-18 0.000E+00
 ETOT  137  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  138  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  139  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  140  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  141  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  142  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  143  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  144  -52.376290846617     -4.974E-14 1.917E-18 0.000E+00
 ETOT  145  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  146  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  147  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  148  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT  149  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  150  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  151  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  152  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  153  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  154  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  155  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  156  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  157  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  158  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  159  -52.376290846617     -4.974E-14 1.917E-18 0.000E+00
 ETOT  160  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  161  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  162  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  163  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  164  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  165  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  166  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  167  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  168  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  169  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  170  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  171  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  172  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  173  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  174  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  175  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  176  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  177  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  178  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  179  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  180  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT  181  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  182  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  183  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  184  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  185  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  186  -52.376290846617     -3.553E-14 1.917E-18 0.000E+00
 ETOT  187  -52.376290846617      3.553E-14 1.917E-18 0.000E+00
 ETOT  188  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  189  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  190  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  191  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  192  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  193  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  194  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  195  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  196  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  197  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  198  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  199  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  200  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  201  -52.376290846617      3.553E-14 1.917E-18 0.000E+00
 ETOT  202  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  203  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  204  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  205  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  206  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  207  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  208  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  209  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  210  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  211  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  212  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  213  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  214  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  215  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  216  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  217  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  218  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  219  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  220  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  221  -52.376290846617      3.553E-14 1.917E-18 0.000E+00
 ETOT  222  -52.376290846617     -3.553E-14 1.917E-18 0.000E+00
 ETOT  223  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  224  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  225  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  226  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  227  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  228  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  229  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT  230  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  231  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  232  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  233  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  234  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  235  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  236  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  237  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT  238  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  239  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  240  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  241  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  242  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  243  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  244  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  245  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  246  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  247  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  248  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  249  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  250  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  251  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  252  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  253  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  254  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  255  -52.376290846617     -3.553E-14 1.917E-18 0.000E+00
 ETOT  256  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  257  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  258  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  259  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  260  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  261  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  262  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  263  -52.376290846617     -4.263E-14 1.917E-18 0.000E+00
 ETOT  264  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  265  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  266  -52.376290846617     -2.842E-14 1.917E-18 0.000E+00
 ETOT  267  -52.376290846617      2.842E-14 1.917E-18 0.000E+00
 ETOT  268  -52.376290846617     -2.132E-14 1.917E-18 0.000E+00
 ETOT  269  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  270  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  271  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  272  -52.376290846617     -3.553E-14 1.917E-18 0.000E+00
 ETOT  273  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  274  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  275  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  276  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  277  -52.376290846617      7.105E-15 1.917E-18 0.000E+00
 ETOT  278  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  279  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  280  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  281  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  282  -52.376290846617     -7.105E-15 1.917E-18 0.000E+00
 ETOT  283  -52.376290846617      0.000E+00 1.917E-18 0.000E+00
 ETOT  284  -52.376290846617      2.132E-14 1.917E-18 0.000E+00
 ETOT  285  -52.376290846617     -1.421E-14 1.917E-18 0.000E+00
 ETOT  286  -52.376290846617      1.421E-14 1.917E-18 0.000E+00
 ETOT  287  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  288  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  289  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  290  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  291  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  292  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  293  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  294  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  295  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  296  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  297  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  298  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  299  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  300  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  301  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  302  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  303  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  304  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  305  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  306  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  307  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  308  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  309  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  310  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  311  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  312  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  313  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  314  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  315  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  316  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  317  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  318  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  319  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  320  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  321  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  322  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  323  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  324  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  325  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  326  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  327  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  328  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  329  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  330  -52.376290846617      3.553E-14 1.916E-18 0.000E+00
 ETOT  331  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  332  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  333  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  334  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  335  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  336  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  337  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  338  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  339  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  340  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  341  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  342  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  343  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  344  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  345  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  346  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  347  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  348  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  349  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  350  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  351  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  352  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  353  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  354  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  355  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  356  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  357  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  358  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  359  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  360  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  361  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  362  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  363  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  364  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  365  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  366  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  367  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  368  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  369  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  370  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  371  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  372  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  373  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  374  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  375  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  376  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  377  -52.376290846617     -3.553E-14 1.916E-18 0.000E+00
 ETOT  378  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  379  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  380  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  381  -52.376290846617     -4.263E-14 1.916E-18 0.000E+00
 ETOT  382  -52.376290846617      3.553E-14 1.916E-18 0.000E+00
 ETOT  383  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  384  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  385  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  386  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  387  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  388  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  389  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  390  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  391  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  392  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  393  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  394  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  395  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  396  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  397  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  398  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  399  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  400  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  401  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  402  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  403  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  404  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  405  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  406  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  407  -52.376290846617     -4.263E-14 1.916E-18 0.000E+00
 ETOT  408  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  409  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  410  -52.376290846617     -3.553E-14 1.916E-18 0.000E+00
 ETOT  411  -52.376290846617      3.553E-14 1.916E-18 0.000E+00
 ETOT  412  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  413  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  414  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  415  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  416  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  417  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  418  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  419  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  420  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  421  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  422  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  423  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  424  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  425  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  426  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  427  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  428  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  429  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  430  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  431  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  432  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  433  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  434  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  435  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  436  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  437  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  438  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  439  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  440  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  441  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  442  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  443  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  444  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  445  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  446  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  447  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  448  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  449  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  450  -52.376290846617      3.553E-14 1.916E-18 0.000E+00
 ETOT  451  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  452  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  453  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  454  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  455  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  456  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  457  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  458  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  459  -52.376290846617      4.263E-14 1.916E-18 0.000E+00
 ETOT  460  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  461  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  462  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  463  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  464  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  465  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  466  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  467  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  468  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  469  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  470  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  471  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  472  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  473  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  474  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  475  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  476  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  477  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  478  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  479  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  480  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  481  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  482  -52.376290846617     -1.421E-14 1.916E-18 0.000E+00
 ETOT  483  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  484  -52.376290846617      2.842E-14 1.916E-18 0.000E+00
 ETOT  485  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  486  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  487  -52.376290846617     -2.842E-14 1.916E-18 0.000E+00
 ETOT  488  -52.376290846617      3.553E-14 1.916E-18 0.000E+00
 ETOT  489  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  490  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  491  -52.376290846617     -7.105E-15 1.916E-18 0.000E+00
 ETOT  492  -52.376290846617      7.105E-15 1.916E-18 0.000E+00
 ETOT  493  -52.376290846617      1.421E-14 1.916E-18 0.000E+00
 ETOT  494  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00
 ETOT  495  -52.376290846617      2.132E-14 1.916E-18 0.000E+00
 ETOT  496  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  497  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  498  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  499  -52.376290846617      0.000E+00 1.916E-18 0.000E+00
 ETOT  500  -52.376290846617     -2.132E-14 1.916E-18 0.000E+00

 scprqt:  WARNING -
  nstep=  500 was not enough SCF cycles to converge;
  maximum residual=  1.916E-18 exceeds tolwfr=  1.000E-22

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.9816E-20; max=  1.9158E-18
   0.0000  0.0000 -0.0833    1  7.45703E-20 kpt; spin; max resid(k); each band:
  7.41E-23 1.74E-22 1.34E-22 1.85E-22 1.31E-22 1.26E-22 1.21E-21 1.30E-21
  3.30E-21 7.30E-22 7.29E-22 1.69E-20 7.46E-20 3.07E-20 5.34E-20 6.80E-20
   0.0000  0.0000 -0.2500    1  3.41134E-19 kpt; spin; max resid(k); each band:
  2.04E-22 1.71E-22 1.42E-22 7.20E-22 5.82E-22 1.78E-22 5.58E-22 1.71E-21
  5.29E-22 2.12E-21 2.05E-21 2.30E-20 1.75E-19 9.54E-20 8.09E-21 3.41E-19
   0.0000  0.0833 -0.1667    1  2.83861E-19 kpt; spin; max resid(k); each band:
  1.47E-22 1.66E-22 1.57E-22 2.58E-22 4.74E-22 2.04E-22 1.44E-21 2.89E-22
  2.18E-21 1.03E-21 2.44E-21 3.46E-20 6.60E-20 8.61E-20 9.62E-20 2.84E-19
   0.0000  0.1667 -0.0833    1  2.84898E-19 kpt; spin; max resid(k); each band:
  1.37E-22 1.66E-22 1.56E-22 2.58E-22 4.74E-22 2.04E-22 1.44E-21 2.90E-22
  2.18E-21 1.03E-21 2.46E-21 3.46E-20 6.60E-20 8.61E-20 9.62E-20 2.85E-19
   0.0833  0.0000 -0.1667    1  1.51991E-19 kpt; spin; max resid(k); each band:
  2.69E-22 1.92E-22 1.43E-22 1.57E-22 1.12E-21 2.99E-22 1.08E-21 8.90E-22
  1.06E-21 3.16E-21 1.49E-21 1.40E-20 3.32E-20 1.52E-19 1.93E-20 3.73E-20
   0.0833  0.0833 -0.0833    1  9.05314E-20 kpt; spin; max resid(k); each band:
  1.99E-22 1.71E-22 9.84E-23 1.73E-22 2.48E-22 5.49E-22 5.99E-22 2.43E-21
  6.64E-22 1.53E-21 2.06E-21 2.41E-20 6.75E-20 6.30E-20 9.05E-20 5.10E-20
   0.1667  0.0000 -0.0833    1  8.82128E-20 kpt; spin; max resid(k); each band:
  2.40E-22 2.11E-22 9.39E-23 6.42E-22 1.36E-21 2.69E-22 1.02E-21 1.15E-21
  1.48E-21 2.82E-21 1.65E-21 3.67E-21 3.70E-20 8.82E-20 1.17E-20 2.06E-20
   0.0000  0.0000 -0.4167    1  2.84396E-19 kpt; spin; max resid(k); each band:
  9.05E-23 4.43E-22 6.64E-22 1.63E-21 1.16E-21 6.09E-22 5.01E-22 1.56E-21
  1.68E-21 1.50E-21 5.01E-22 1.50E-20 4.12E-20 1.31E-19 5.52E-21 2.84E-19
   0.0000  0.0833 -0.3333    1  5.44600E-19 kpt; spin; max resid(k); each band:
  1.83E-22 2.54E-22 5.53E-22 7.70E-22 1.31E-21 3.12E-22 6.32E-22 1.06E-21
  1.41E-21 5.17E-22 2.10E-21 2.23E-20 6.00E-20 8.09E-20 1.11E-19 5.45E-19
   0.0000  0.1667 -0.2500    1  3.54225E-19 kpt; spin; max resid(k); each band:
  2.56E-22 2.01E-22 4.42E-22 3.30E-22 1.13E-21 2.76E-22 4.74E-22 5.40E-22
  1.91E-21 5.33E-22 1.70E-21 3.22E-20 3.81E-20 7.79E-20 1.28E-19 3.54E-19
   0.0000  0.2500 -0.1667    1  3.50885E-19 kpt; spin; max resid(k); each band:
  2.56E-22 2.01E-22 4.43E-22 3.30E-22 1.14E-21 2.76E-22 4.74E-22 5.40E-22
  1.91E-21 5.33E-22 1.70E-21 3.15E-20 3.86E-20 7.80E-20 1.26E-19 3.51E-19
   0.0000  0.3333 -0.0833    1  5.42779E-19 kpt; spin; max resid(k); each band:
  1.83E-22 2.54E-22 5.53E-22 7.71E-22 1.30E-21 3.12E-22 6.33E-22 1.06E-21
  1.41E-21 5.18E-22 2.10E-21 2.23E-20 6.67E-20 7.95E-20 1.12E-19 5.43E-19
   0.0833  0.0000 -0.3333    1  2.15747E-19 kpt; spin; max resid(k); each band:
  1.77E-22 2.18E-22 2.38E-22 6.93E-22 2.18E-21 1.06E-21 7.09E-22 7.83E-22
  3.01E-21 7.28E-22 1.14E-21 1.38E-20 1.58E-20 2.16E-19 4.51E-20 1.09E-19
   0.0833  0.0833 -0.2500    1  2.41754E-19 kpt; spin; max resid(k); each band:
  2.53E-22 1.75E-22 2.35E-22 6.18E-22 1.29E-21 2.25E-22 1.60E-21 6.46E-22
  5.56E-22 1.96E-21 1.73E-21 1.97E-20 8.53E-20 1.01E-19 9.72E-20 2.42E-19
   0.0833  0.1667 -0.1667    1  1.94609E-19 kpt; spin; max resid(k); each band:
  3.28E-22 1.60E-22 2.62E-22 3.10E-22 7.19E-22 2.68E-22 1.54E-21 9.20E-22
  4.23E-22 1.34E-21 1.96E-21 3.46E-20 6.29E-20 5.71E-20 1.78E-19 1.95E-19
   0.0833  0.2500 -0.0833    1  2.16633E-19 kpt; spin; max resid(k); each band:
  4.42E-22 1.94E-22 2.46E-22 3.31E-22 6.71E-22 1.71E-22 7.23E-22 1.37E-21
  6.43E-22 1.25E-21 2.51E-21 4.40E-20 3.62E-20 5.96E-20 2.17E-19 2.08E-19
   0.1667  0.0000 -0.2500    1  1.63274E-19 kpt; spin; max resid(k); each band:
  2.45E-22 3.14E-22 3.62E-22 3.39E-22 2.32E-21 5.36E-22 6.23E-22 1.66E-21
  2.73E-21 9.46E-22 7.98E-22 1.08E-20 1.83E-20 1.63E-19 9.29E-20 1.06E-20
   0.1667  0.0833 -0.1667    1  1.56647E-19 kpt; spin; max resid(k); each band:
  2.99E-22 1.92E-22 2.79E-22 2.25E-22 1.43E-21 4.75E-22 1.71E-21 7.69E-22
  5.76E-22 2.56E-21 1.52E-21 1.34E-20 2.57E-20 1.57E-19 6.10E-20 4.43E-20
   0.1667  0.1667 -0.0833    1  1.69672E-19 kpt; spin; max resid(k); each band:
  4.63E-22 9.67E-23 1.82E-22 2.02E-22 4.61E-22 1.06E-21 1.98E-21 4.19E-22
  9.21E-23 1.52E-21 2.13E-21 2.66E-20 4.30E-20 7.92E-20 4.88E-20 1.70E-19
   0.2500  0.0000 -0.1667    1  1.57845E-19 kpt; spin; max resid(k); each band:
  3.12E-22 5.02E-22 6.03E-22 8.38E-22 2.56E-21 4.66E-22 4.81E-22 1.65E-21
  3.15E-21 9.24E-22 8.24E-22 2.66E-21 3.08E-20 1.02E-19 3.45E-20 1.58E-19
   0.2500  0.0833 -0.0833    1  9.96574E-20 kpt; spin; max resid(k); each band:
  3.00E-22 2.67E-22 3.63E-22 6.78E-22 1.63E-21 5.55E-22 1.24E-21 1.39E-21
  7.81E-22 2.49E-21 1.79E-21 4.01E-21 4.53E-20 9.97E-20 3.90E-20 5.95E-20
   0.3333  0.0000 -0.0833    1  3.45508E-19 kpt; spin; max resid(k); each band:
  3.88E-22 6.04E-22 4.24E-22 2.33E-21 2.99E-21 8.88E-22 4.28E-22 1.01E-21
  3.87E-21 6.80E-22 1.34E-21 1.35E-21 3.82E-20 5.62E-20 2.27E-20 3.46E-19
   0.0000  0.0833  0.5000    1  7.72038E-19 kpt; spin; max resid(k); each band:
  9.93E-23 3.21E-22 3.44E-22 1.20E-21 6.13E-22 1.60E-21 1.20E-21 1.51E-21
  3.51E-22 1.45E-21 5.61E-22 1.17E-20 5.84E-20 3.09E-20 9.70E-20 7.72E-19
   0.0000  0.1667 -0.4167    1  4.71456E-19 kpt; spin; max resid(k); each band:
  2.13E-22 2.27E-22 5.58E-22 7.16E-22 9.38E-22 6.97E-22 1.38E-21 5.91E-22
  1.74E-21 1.20E-21 5.21E-22 1.51E-20 3.11E-20 2.54E-20 9.70E-20 4.71E-19
   0.0000  0.2500 -0.3333    1  4.72909E-19 kpt; spin; max resid(k); each band:
  3.50E-22 4.64E-22 2.10E-22 4.42E-22 7.37E-22 6.31E-22 1.47E-21 5.13E-22
  1.82E-21 1.08E-21 4.46E-22 2.41E-20 2.38E-20 3.38E-20 4.67E-20 4.73E-19
   0.0000  0.3333 -0.2500    1  4.72973E-19 kpt; spin; max resid(k); each band:
  3.50E-22 4.64E-22 2.10E-22 4.42E-22 7.37E-22 6.31E-22 1.47E-21 5.13E-22
  1.83E-21 1.08E-21 4.46E-22 2.40E-20 2.39E-20 3.36E-20 4.69E-20 4.73E-19
   0.0000  0.4167 -0.1667    1  4.71274E-19 kpt; spin; max resid(k); each band:
  2.13E-22 2.27E-22 5.58E-22 7.16E-22 9.38E-22 6.98E-22 1.38E-21 5.91E-22
  1.74E-21 1.20E-21 5.22E-22 1.53E-20 3.21E-20 2.54E-20 9.71E-20 4.71E-19
   0.0000  0.5000 -0.0833    1  7.53396E-19 kpt; spin; max resid(k); each band:
  9.93E-23 3.21E-22 3.43E-22 1.20E-21 6.15E-22 1.60E-21 1.20E-21 1.51E-21
  3.50E-22 1.45E-21 5.61E-22 1.09E-20 5.81E-20 3.04E-20 9.70E-20 7.53E-19
   0.0833  0.0000  0.5000    1  1.65923E-19 kpt; spin; max resid(k); each band:
  9.63E-23 3.23E-22 4.78E-22 1.73E-21 1.08E-21 9.45E-22 3.32E-22 7.41E-22
  1.34E-21 2.34E-21 4.55E-22 1.12E-20 6.19E-21 1.66E-19 7.38E-21 1.21E-19
   0.0833  0.0833 -0.4167    1  7.70489E-19 kpt; spin; max resid(k); each band:
  9.93E-23 3.21E-22 3.44E-22 1.20E-21 6.15E-22 1.60E-21 1.20E-21 1.51E-21
  3.51E-22 1.45E-21 5.61E-22 1.14E-20 5.85E-20 3.06E-20 9.72E-20 7.70E-19
   0.0833  0.1667 -0.3333    1  4.29009E-19 kpt; spin; max resid(k); each band:
  1.17E-22 3.78E-22 4.67E-22 9.30E-22 2.84E-22 1.79E-21 1.03E-21 1.55E-21
  5.37E-22 1.70E-21 5.75E-22 1.67E-20 3.08E-20 8.10E-20 4.72E-20 4.29E-19
   0.0833  0.2500 -0.2500    1  2.45039E-19 kpt; spin; max resid(k); each band:
  3.03E-22 5.00E-22 2.09E-22 6.24E-22 3.56E-22 1.64E-21 6.19E-22 1.22E-21
  7.57E-22 1.34E-21 4.97E-22 2.57E-20 3.76E-20 4.82E-20 1.76E-19 2.45E-19
   0.0833  0.3333 -0.1667    1  3.77380E-19 kpt; spin; max resid(k); each band:
  5.18E-22 4.67E-22 2.24E-22 4.66E-22 4.44E-22 1.54E-21 7.56E-22 6.13E-22
  1.15E-21 1.53E-21 4.15E-22 3.68E-20 2.49E-20 3.97E-20 1.58E-19 3.77E-19
   0.0833  0.4167 -0.0833    1  2.55356E-19 kpt; spin; max resid(k); each band:
  4.19E-22 2.84E-22 7.23E-22 6.15E-22 7.30E-22 1.35E-21 7.68E-22 4.85E-22
  1.48E-21 2.06E-21 4.35E-22 2.56E-20 3.35E-20 4.95E-20 1.25E-19 2.55E-19
   0.1667  0.0000 -0.4167    1  1.14632E-19 kpt; spin; max resid(k); each band:
  1.04E-22 3.72E-22 3.75E-22 4.95E-22 1.82E-21 1.00E-21 9.38E-22 6.60E-22
  1.93E-21 1.03E-21 4.26E-22 1.42E-20 2.37E-21 1.15E-19 2.57E-20 4.04E-20
   0.1667  0.0833 -0.3333    1  1.70563E-19 kpt; spin; max resid(k); each band:
  1.92E-22 2.71E-22 3.91E-22 6.44E-22 1.45E-21 2.38E-21 1.52E-21 1.01E-21
  3.71E-22 1.44E-21 5.47E-22 1.23E-20 2.49E-20 9.12E-20 1.09E-19 1.71E-19
   0.1667  0.1667 -0.2500    1  2.27511E-19 kpt; spin; max resid(k); each band:
  2.16E-22 4.22E-22 1.92E-22 6.56E-22 1.53E-21 4.45E-22 1.43E-21 1.15E-21
  2.09E-22 7.28E-22 1.15E-21 1.76E-20 5.39E-20 7.95E-20 1.09E-19 2.28E-19
   0.1667  0.2500 -0.1667    1  4.36840E-19 kpt; spin; max resid(k); each band:
  5.38E-22 3.09E-22 1.86E-22 6.25E-22 8.95E-22 2.19E-22 6.55E-22 1.32E-21
  5.36E-22 3.57E-22 1.39E-21 2.77E-20 6.20E-20 3.32E-20 1.96E-19 4.37E-19
   0.1667  0.3333 -0.0833    1  8.41719E-19 kpt; spin; max resid(k); each band:
  8.72E-22 2.63E-22 2.39E-22 4.31E-22 9.84E-22 3.64E-22 3.57E-22 9.20E-22
  1.04E-21 3.55E-22 1.97E-21 4.29E-20 2.33E-20 4.47E-20 1.32E-19 8.42E-19
   0.2500  0.0000 -0.3333    1  9.68506E-20 kpt; spin; max resid(k); each band:
  3.07E-22 5.03E-22 5.22E-22 9.41E-22 2.31E-21 5.47E-22 1.87E-21 2.62E-22
  1.64E-21 7.52E-22 5.66E-22 1.79E-20 4.32E-21 8.18E-20 9.69E-20 4.63E-20
   0.2500  0.0833 -0.2500    1  1.47268E-19 kpt; spin; max resid(k); each band:
  3.10E-22 4.80E-22 4.36E-22 3.69E-22 1.29E-21 2.29E-21 2.13E-21 7.02E-22
  5.76E-22 8.86E-22 1.03E-21 1.45E-20 1.35E-20 1.17E-19 1.47E-19 2.72E-20
   0.2500  0.1667 -0.1667    1  1.24446E-19 kpt; spin; max resid(k); each band:
  2.86E-22 3.48E-22 3.26E-22 3.06E-22 1.24E-21 5.58E-22 8.83E-22 1.57E-21
  1.71E-21 2.55E-22 1.17E-21 1.53E-20 2.35E-20 1.21E-19 2.64E-20 1.24E-19
   0.2500  0.2500 -0.0833    1  2.60538E-19 kpt; spin; max resid(k); each band:
  5.20E-22 1.01E-22 3.57E-22 4.48E-22 4.91E-22 4.79E-22 9.18E-22 9.58E-22
  6.79E-22 5.65E-23 1.62E-21 1.66E-20 2.23E-20 4.56E-20 1.52E-20 2.61E-19
   0.3333  0.0000 -0.2500    1  2.30078E-19 kpt; spin; max resid(k); each band:
  6.69E-22 7.71E-22 8.02E-22 1.05E-21 2.61E-21 9.76E-22 1.05E-21 1.70E-22
  2.70E-21 7.55E-22 4.01E-22 3.29E-21 2.60E-20 5.64E-20 6.98E-20 2.30E-19
   0.3333  0.0833 -0.1667    1  3.63692E-19 kpt; spin; max resid(k); each band:
  4.99E-22 7.08E-22 6.78E-22 1.20E-21 9.21E-22 2.25E-21 2.29E-21 8.46E-22
  8.30E-22 1.08E-21 8.56E-22 3.31E-21 3.50E-20 7.68E-20 4.88E-20 3.64E-19
   0.3333  0.1667 -0.0833    1  1.35157E-19 kpt; spin; max resid(k); each band:
  3.07E-22 4.86E-22 3.61E-22 8.92E-22 1.13E-21 6.06E-22 8.00E-22 1.48E-21
  2.35E-21 4.52E-22 1.63E-21 5.11E-21 6.11E-20 5.29E-20 5.03E-20 1.35E-19
   0.4167  0.0000 -0.1667    1  1.50312E-19 kpt; spin; max resid(k); each band:
  4.35E-22 8.68E-22 7.24E-22 1.32E-21 2.89E-21 5.81E-22 8.45E-22 4.06E-22
  2.82E-21 1.09E-21 6.92E-22 1.98E-21 2.73E-20 3.58E-20 2.47E-20 1.50E-19
   0.4167  0.0833 -0.0833    1  3.60186E-19 kpt; spin; max resid(k); each band:
  5.17E-22 6.96E-22 8.43E-22 2.45E-21 6.50E-22 1.78E-21 1.97E-21 1.50E-21
  9.63E-22 1.78E-21 7.42E-22 1.63E-21 4.07E-20 4.00E-20 2.75E-20 3.60E-19
   0.5000  0.0000 -0.0833    1  1.46950E-19 kpt; spin; max resid(k); each band:
  2.80E-22 7.48E-22 8.07E-22 3.55E-21 3.34E-22 1.10E-21 4.28E-22 1.18E-21
  7.01E-22 3.14E-21 1.23E-21 1.67E-21 2.66E-20 2.78E-20 2.93E-20 1.47E-19
   0.0000  0.0833  0.3333    1  2.41851E-19 kpt; spin; max resid(k); each band:
  2.53E-22 1.75E-22 2.35E-22 6.18E-22 1.29E-21 2.25E-22 1.60E-21 6.46E-22
  5.56E-22 1.94E-21 1.73E-21 1.97E-20 8.50E-20 9.99E-20 9.73E-20 2.42E-19
 outwf : prtvol=0 or 1, do not print more k-points.

 loper3 : ek2=    4.4862765921E+01
          f-sum rule ratio=    1.1060090814E+00
 prteigrs : about to open file tbase3_x_1WF1_EIG
 Expectation of eigenvalue derivatives (hartree) for nkpt= 432  k points:
  (in case of degenerate eigenvalues, averaged derivative)
 kpt#   1, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.0833 (reduced coord)
   0.00558   0.00199   0.00199   0.00733   0.00357   0.00357  -0.00209  -0.00151
  -0.00151  -0.00364  -0.00364  -0.09352  -0.01768  -0.01768   0.04927  -0.08109
 kpt#   2, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.2500 (reduced coord)
   0.01138   0.00656   0.00656   0.00829   0.00829   0.01835  -0.00437  -0.00437
  -0.00151  -0.00967  -0.00967  -0.10938  -0.02668  -0.02668  -0.05076   0.11919
 kpt#   3, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833 -0.1667 (reduced coord)
   0.00420   0.00356   0.00039   0.00446   0.00096   0.00817   0.00037  -0.00179
  -0.00284  -0.00026  -0.00685  -0.06742   0.08006  -0.02307  -0.15105   0.15242
 kpt#   4, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.0833 (reduced coord)
  -0.00420  -0.00356  -0.00039  -0.00446  -0.00096  -0.00817  -0.00037   0.00179
   0.00284   0.00026   0.00685   0.06742  -0.08006   0.02307   0.15105  -0.15242
 kpt#   5, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000 -0.1667 (reduced coord)
   0.02244   0.00708   0.01204   0.01378   0.02164   0.02980  -0.01274  -0.00557
  -0.00231  -0.02775  -0.00439  -0.16331  -0.33489  -0.02916   0.27102  -0.10467
 kpt#   6, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.0833 (reduced coord)
   0.01525   0.00762   0.00733   0.00631   0.01237   0.01873  -0.00692  -0.00725
   0.00039  -0.01933  -0.00039  -0.14657  -0.11438  -0.09114   0.17167  -0.13147
 kpt#   7, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.0833 (reduced coord)
   0.03084   0.01420   0.01282   0.02271   0.02355   0.04614  -0.01199  -0.00915
  -0.00800  -0.02827  -0.01809  -0.29816  -0.17477  -0.07531  -0.03108   0.20018
 kpt#   8, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.4167 (reduced coord)
   0.00577   0.00654   0.00654   0.01081   0.01081  -0.00092  -0.00483  -0.00483
  -0.01213  -0.01213   0.01567  -0.05252  -0.01083  -0.01083  -0.02009  -0.00020
 kpt#   9, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833 -0.3333 (reduced coord)
   0.00452   0.00796   0.00806   0.00574   0.00183   0.00372  -0.00574  -0.00711
  -0.00163   0.01642  -0.01674  -0.09299   0.17176  -0.01377  -0.21046   0.23456
 kpt#  10, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.2500 (reduced coord)
   0.00171   0.00308   0.00509  -0.00153   0.00056   0.00242  -0.00623  -0.00203
  -0.00132   0.01082  -0.00617  -0.07021   0.09644  -0.00382  -0.17513   0.18507
 kpt#  11, nband= 16, wtk=  0.00231, kpt=  0.0000  0.2500 -0.1667 (reduced coord)
  -0.00171  -0.00308  -0.00509   0.00153  -0.00056  -0.00242   0.00623   0.00203
   0.00132  -0.01082   0.00617   0.07021  -0.09644   0.00382   0.17513  -0.18507
 kpt#  12, nband= 16, wtk=  0.00231, kpt=  0.0000  0.3333 -0.0833 (reduced coord)
  -0.00452  -0.00796  -0.00806  -0.00574  -0.00183  -0.00372   0.00574   0.00711
   0.00163  -0.01642   0.01674   0.09299  -0.17176   0.01377   0.21046  -0.23456
 kpt#  13, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000 -0.3333 (reduced coord)
   0.01654   0.00655   0.00722   0.01371   0.02941  -0.01019   0.00081  -0.00332
  -0.03039   0.02072   0.00085  -0.04163  -0.41205  -0.04811   0.35115  -0.19280
 kpt#  14, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.2500 (reduced coord)
   0.01530   0.00947   0.00724   0.00998   0.01720   0.01378  -0.00973   0.00150
   0.00395  -0.02324  -0.00111  -0.08875  -0.18495  -0.07815   0.15051  -0.01752
 kpt#  15, nband= 16, wtk=  0.00231, kpt=  0.0833  0.1667 -0.1667 (reduced coord)
   0.01110   0.01055   0.00240   0.00499   0.00593   0.01650  -0.00403  -0.00836
   0.00219  -0.01645   0.00495  -0.08485   0.07203  -0.19260  -0.03087   0.05741
 kpt#  16, nband= 16, wtk=  0.00231, kpt=  0.0833  0.2500 -0.0833 (reduced coord)
   0.00518   0.00474  -0.00526   0.00602   0.00086   0.00410  -0.00341  -0.00903
   0.00657  -0.01440   0.01693   0.03415  -0.06832  -0.14647   0.32097  -0.35064
 kpt#  17, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.2500 (reduced coord)
   0.02480   0.01281   0.00582   0.02782   0.03179  -0.00243   0.00791  -0.01772
  -0.02145   0.01762  -0.01171  -0.06799  -0.35461  -0.09130   0.28260  -0.06558
 kpt#  18, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0833 -0.1667 (reduced coord)
   0.02497   0.01090   0.00666   0.02502   0.02492   0.03127  -0.00692  -0.00628
  -0.00613  -0.02784  -0.00850  -0.12718  -0.33855  -0.04087   0.27460  -0.08538
 kpt#  19, nband= 16, wtk=  0.00231, kpt=  0.1667  0.1667 -0.0833 (reduced coord)
   0.02076   0.00262   0.01381   0.01651   0.01649   0.02686  -0.00958  -0.00868
  -0.00282  -0.02281  -0.00055  -0.13825  -0.12806  -0.10542  -0.04455   0.10418
 kpt#  20, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0000 -0.1667 (reduced coord)
   0.02823   0.01898   0.01600   0.02476   0.03291   0.00241  -0.00456  -0.02179
  -0.02408   0.03925  -0.02405  -0.20840  -0.16173  -0.09893  -0.06766   0.30456
 kpt#  21, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0833 -0.0833 (reduced coord)
   0.03088   0.01671   0.01432   0.02399   0.02999   0.04366  -0.00754  -0.00561
  -0.01050  -0.02989  -0.02049  -0.24618  -0.19820  -0.08700  -0.07724   0.32267
 kpt#  22, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0000 -0.0833 (reduced coord)
   0.02557   0.02248   0.02333   0.02520   0.03308  -0.00275  -0.01067  -0.01755
  -0.03365   0.05355  -0.03262  -0.22761  -0.06853  -0.07565  -0.06977   0.27633
 kpt#  23, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833  0.5000 (reduced coord)
  -0.00529  -0.00528  -0.00182  -0.00189   0.00595   0.01725  -0.00103  -0.01186
  -0.00811   0.00193  -0.00729  -0.00699   0.19443   0.03253  -0.18417   0.14089
 kpt#  24, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.4167 (reduced coord)
  -0.00357   0.00367   0.00846   0.00288   0.00002   0.00057  -0.00848  -0.00410
   0.00225  -0.01347   0.00235  -0.06680   0.17963   0.02698  -0.15431   0.08946
 kpt#  25, nband= 16, wtk=  0.00231, kpt=  0.0000  0.2500 -0.3333 (reduced coord)
  -0.00124   0.00589   0.00205   0.00064  -0.00022  -0.00319  -0.00607  -0.00212
   0.00322  -0.00503   0.00345  -0.09079   0.12804   0.01040  -0.06582   0.02474
 kpt#  26, nband= 16, wtk=  0.00231, kpt=  0.0000  0.3333 -0.2500 (reduced coord)
   0.00124  -0.00589  -0.00205  -0.00064   0.00022   0.00319   0.00607   0.00212
  -0.00322   0.00503  -0.00345   0.09079  -0.12804  -0.01040   0.06582  -0.02474
 kpt#  27, nband= 16, wtk=  0.00231, kpt=  0.0000  0.4167 -0.1667 (reduced coord)
   0.00357  -0.00367  -0.00846  -0.00288  -0.00002  -0.00057   0.00848   0.00410
  -0.00225   0.01347  -0.00235   0.06680  -0.17963  -0.02698   0.15431  -0.08946
 kpt#  28, nband= 16, wtk=  0.00231, kpt=  0.0000  0.5000 -0.0833 (reduced coord)
   0.00529   0.00528   0.00182   0.00189  -0.00595  -0.01725   0.00103   0.01186
   0.00811  -0.00193   0.00729   0.00699  -0.19443  -0.03253   0.18417  -0.14089
 kpt#  29, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000  0.5000 (reduced coord)
   0.00483  -0.00162  -0.00118  -0.02380  -0.00589  -0.00869   0.00102   0.00546
   0.01276   0.03257  -0.00350   0.06640  -0.34958  -0.08338   0.39038  -0.31658
 kpt#  30, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.4167 (reduced coord)
   0.00529   0.00528   0.00182   0.00189  -0.00595  -0.01725   0.00103   0.01186
   0.00811  -0.00193   0.00729   0.00699  -0.19443  -0.03253   0.18417  -0.14089
 kpt#  31, nband= 16, wtk=  0.00231, kpt=  0.0833  0.1667 -0.3333 (reduced coord)
   0.00561   0.00935   0.00909  -0.00185   0.00483   0.00020  -0.01054  -0.01199
   0.00328  -0.00191   0.01431  -0.05224   0.05196  -0.09419  -0.01552   0.05664
 kpt#  32, nband= 16, wtk=  0.00231, kpt=  0.0833  0.2500 -0.2500 (reduced coord)
   0.00546   0.00199   0.00915  -0.00193   0.00417  -0.00040  -0.01134  -0.01205
   0.00604   0.00641   0.01049  -0.07108   0.10505  -0.14135   0.00425   0.02694
 kpt#  33, nband= 16, wtk=  0.00231, kpt=  0.0833  0.3333 -0.1667 (reduced coord)
   0.00500  -0.00881   0.00366   0.00384   0.00191  -0.00204  -0.00977  -0.00514
   0.01179   0.01747  -0.00493   0.06429  -0.07704  -0.15699   0.32115  -0.27494
 kpt#  34, nband= 16, wtk=  0.00231, kpt=  0.0833  0.4167 -0.0833 (reduced coord)
   0.00468  -0.00347  -0.01179  -0.00059  -0.00044  -0.00309  -0.00665  -0.00210
   0.01554   0.02765  -0.00987   0.10276  -0.22844  -0.13408   0.33317  -0.25575
 kpt#  35, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.4167 (reduced coord)
   0.01274   0.00599  -0.00244  -0.00556  -0.02933   0.00570   0.00627   0.01048
   0.02974  -0.00425   0.01117   0.08108  -0.33142  -0.12052   0.28937  -0.12287
 kpt#  36, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0833 -0.3333 (reduced coord)
   0.01463   0.00600   0.00184   0.01496  -0.01013   0.01634  -0.01921   0.00621
   0.00135  -0.00464   0.02105   0.01955  -0.33840  -0.08144   0.30738  -0.16850
 kpt#  37, nband= 16, wtk=  0.00231, kpt=  0.1667  0.1667 -0.2500 (reduced coord)
   0.01496   0.00346   0.01230   0.01196   0.01545  -0.00238  -0.00684  -0.02349
   0.00206   0.02218  -0.00131  -0.04621  -0.17347  -0.07343   0.08990   0.02483
 kpt#  38, nband= 16, wtk=  0.00231, kpt=  0.1667  0.2500 -0.1667 (reduced coord)
   0.01342  -0.00066   0.01724   0.00521   0.00720   0.00649  -0.01840  -0.01635
   0.01238   0.00613   0.00789  -0.07808   0.04444  -0.15029  -0.24125   0.22338
 kpt#  39, nband= 16, wtk=  0.00231, kpt=  0.1667  0.3333 -0.0833 (reduced coord)
   0.01048  -0.00986   0.01335   0.00992   0.00085   0.00412  -0.01311  -0.01006
  -0.00203   0.00583   0.01925   0.00305  -0.00921  -0.16180  -0.05069  -0.04472
 kpt#  40, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0000 -0.3333 (reduced coord)
   0.01598   0.00344   0.01314  -0.01013  -0.03253   0.01686   0.01021   0.00507
   0.02289  -0.01576   0.02654   0.09597  -0.29469  -0.12558   0.06549   0.15289
 kpt#  41, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0833 -0.2500 (reduced coord)
   0.02038   0.00545   0.01161   0.02360  -0.01167   0.03206  -0.03133   0.00030
  -0.00354  -0.01503   0.03710   0.00560  -0.31349  -0.11239   0.24744  -0.02032
 kpt#  42, nband= 16, wtk=  0.00231, kpt=  0.2500  0.1667 -0.1667 (reduced coord)
   0.02213   0.00618   0.01112   0.02486   0.02336  -0.00778  -0.01793  -0.01142
   0.03053  -0.00058  -0.01047  -0.07656  -0.27262  -0.08489   0.21604   0.00809
 kpt#  43, nband= 16, wtk=  0.00231, kpt=  0.2500  0.2500 -0.0833 (reduced coord)
   0.02059   0.00219   0.01660   0.01698   0.01636   0.01570  -0.00857  -0.02573
   0.00686   0.00055  -0.00058  -0.11380  -0.10910  -0.09223  -0.08507   0.11396
 kpt#  44, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0000 -0.2500 (reduced coord)
   0.01350   0.01522   0.01723  -0.00886  -0.03298   0.01048  -0.00194   0.00083
   0.02932  -0.02582   0.03344  -0.08560  -0.03862  -0.10478  -0.06615   0.20236
 kpt#  45, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0833 -0.1667 (reduced coord)
   0.02084   0.01625   0.01710   0.01783  -0.00941   0.03371  -0.03289  -0.00661
  -0.00928  -0.02609   0.05253  -0.12978  -0.13139  -0.09676  -0.06945   0.28155
 kpt#  46, nband= 16, wtk=  0.00231, kpt=  0.3333  0.1667 -0.0833 (reduced coord)
   0.02507   0.01537   0.01501   0.02015   0.02971  -0.00541  -0.02322  -0.01771
   0.04494  -0.00028  -0.02183  -0.15769  -0.21897  -0.07338   0.02548   0.27619
 kpt#  47, nband= 16, wtk=  0.00231, kpt=  0.4167  0.0000 -0.1667 (reduced coord)
   0.00560   0.01333   0.01448   0.00021  -0.02929   0.00685  -0.01069   0.00229
   0.03424  -0.03119   0.01587  -0.05252   0.02784  -0.06657  -0.01926   0.05606
 kpt#  48, nband= 16, wtk=  0.00231, kpt=  0.4167  0.0833 -0.0833 (reduced coord)
   0.01556   0.01883   0.02272   0.01370  -0.00486   0.01963  -0.02310  -0.00368
  -0.01090  -0.03421   0.04523  -0.13544  -0.05800  -0.04154  -0.04131   0.14389
 kpt#  49, nband= 16, wtk=  0.00231, kpt=  0.5000  0.0000 -0.0833 (reduced coord)
  -0.00576  -0.01218  -0.00481  -0.02758   0.00601   0.02582  -0.00105  -0.01827
  -0.00346   0.03642  -0.01807   0.05242   0.03928  -0.01831   0.02205  -0.03480
 kpt#  50, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833  0.3333 (reduced coord)
  -0.01530  -0.00947  -0.00724  -0.00998  -0.01720  -0.01378   0.00973  -0.00150
  -0.00395   0.02324   0.00111   0.08875   0.18495   0.07815  -0.15051   0.01752
 prteigrs : prtvol=0 or 1, do not print more k-points.


 Eight components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   6.57646699E+01 eigvalue=   9.96467777E+00  local=  -7.71200193E+00
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
     kin1=  -4.96186265E+01  Hartree=   0.00000000E+00     xc=   0.00000000E+00
 7,8,9: eventually, occupation + non-local contributions
    edocc=   4.53313314E+00     enl0=  -2.01741881E+01   enl1=  -5.51339552E+01
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -5.23762908E+01
  No Ewald or frozen-wf contrib.: the relaxation energy is the total one
 2DEtotal=   -0.5237629085E+02 Ha. Also 2DEtotal=   -0.142523135539E+04 eV
    (  non-var. 2DEtotal :   -5.2376290846E+01 Ha)

--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : derivative vs k along direction   2
 The set of symmetries contains only one element for this perturbation.
 symkpt : not enough symmetry to change the number of k points.

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  17 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  18 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  19 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  20 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  21 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  22 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  23 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  24 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  25 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  26 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  27 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  28 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  29 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  30 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  31 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  32 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  33 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  34 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  35 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  36 by node    0
P newkpt: treating     16 bands with npw=   13941 for ikpt=  37 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  38 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  39 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  40 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  41 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  42 by node    0
P newkpt: treating     16 bands with npw=   13966 for ikpt=  43 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  44 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  45 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  46 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  47 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  48 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  49 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  50 by node    0
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1  -52.272955091112     -5.227E+01 1.496E-01 0.000E+00
 ETOT  2  -52.375558327780     -1.026E-01 1.860E-03 0.000E+00
 ETOT  3  -52.376282588672     -7.243E-04 2.211E-05 0.000E+00
 ETOT  4  -52.376290736407     -8.148E-06 4.688E-07 0.000E+00
 ETOT  5  -52.376290844987     -1.086E-07 2.184E-08 0.000E+00
 ETOT  6  -52.376290846570     -1.583E-09 1.772E-09 0.000E+00
 ETOT  7  -52.376290846594     -2.444E-11 1.349E-10 0.000E+00
 ETOT  8  -52.376290846595     -3.837E-13 1.507E-11 0.000E+00
 ETOT  9  -52.376290846595      1.421E-14 1.121E-12 0.000E+00
 ETOT 10  -52.376290846595      2.842E-14 1.389E-13 0.000E+00
 ETOT 11  -52.376290846595     -3.553E-14 9.986E-15 0.000E+00
 ETOT 12  -52.376290846595      2.842E-14 1.297E-15 0.000E+00
 ETOT 13  -52.376290846595     -5.684E-14 9.150E-17 0.000E+00
 ETOT 14  -52.376290846595      2.842E-14 1.254E-17 0.000E+00
 ETOT 15  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT 16  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 17  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 18  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 19  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT 20  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT 21  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT 22  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 23  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 24  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 25  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT 26  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT 27  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT 28  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 29  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 30  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 31  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 32  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 33  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT 34  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 35  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT 36  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT 37  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 38  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 39  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT 40  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT 41  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT 42  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 43  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 44  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT 45  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT 46  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT 47  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT 48  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT 49  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT 50  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT 51  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 52  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 53  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 54  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT 55  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 56  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 57  -52.376290846594      5.684E-14 1.917E-18 0.000E+00
 ETOT 58  -52.376290846595     -4.263E-14 1.917E-18 0.000E+00
 ETOT 59  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT 60  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT 61  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 62  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 63  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT 64  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 65  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT 66  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT 67  -52.376290846595     -3.553E-14 1.917E-18 0.000E+00
 ETOT 68  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT 69  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT 70  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 71  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT 72  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT 73  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT 74  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT 75  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 76  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT 77  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 78  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 79  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 80  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 81  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 82  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT 83  -52.376290846595     -3.553E-14 1.917E-18 0.000E+00
 ETOT 84  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT 85  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT 86  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 87  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 88  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 89  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT 90  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT 91  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 92  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT 93  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT 94  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 95  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT 96  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT 97  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT 98  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT 99  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  100  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  101  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  102  -52.376290846595     -4.263E-14 1.917E-18 0.000E+00
 ETOT  103  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  104  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  105  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  106  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  107  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  108  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  109  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  110  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  111  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  112  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  113  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  114  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  115  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  116  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  117  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  118  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  119  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  120  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  121  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  122  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  123  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  124  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  125  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  126  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  127  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  128  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  129  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  130  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  131  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  132  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  133  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  134  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  135  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  136  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT  137  -52.376290846595     -4.263E-14 1.917E-18 0.000E+00
 ETOT  138  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  139  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  140  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  141  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  142  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  143  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  144  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  145  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  146  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  147  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  148  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  149  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  150  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  151  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  152  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  153  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  154  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  155  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  156  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  157  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  158  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  159  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  160  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  161  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  162  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  163  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  164  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  165  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  166  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  167  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  168  -52.376290846595      4.263E-14 1.917E-18 0.000E+00
 ETOT  169  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  170  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  171  -52.376290846595     -5.684E-14 1.917E-18 0.000E+00
 ETOT  172  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  173  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  174  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  175  -52.376290846595     -5.684E-14 1.917E-18 0.000E+00
 ETOT  176  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  177  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT  178  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  179  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  180  -52.376290846595     -4.263E-14 1.917E-18 0.000E+00
 ETOT  181  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  182  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  183  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  184  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  185  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  186  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  187  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  188  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  189  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  190  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  191  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  192  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  193  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  194  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  195  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  196  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  197  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  198  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  199  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  200  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  201  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  202  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  203  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  204  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  205  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  206  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  207  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  208  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  209  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT  210  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  211  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  212  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  213  -52.376290846595      0.000E+00 1.916E-18 0.000E+00
 ETOT  214  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  215  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  216  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  217  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  218  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  219  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  220  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  221  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  222  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  223  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  224  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  225  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  226  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  227  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  228  -52.376290846595     -3.553E-14 1.917E-18 0.000E+00
 ETOT  229  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  230  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT  231  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  232  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT  233  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  234  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  235  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  236  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  237  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  238  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  239  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  240  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  241  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  242  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  243  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  244  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  245  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  246  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  247  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  248  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  249  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  250  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  251  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  252  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  253  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  254  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  255  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  256  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  257  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  258  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  259  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  260  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  261  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  262  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  263  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  264  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  265  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  266  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  267  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  268  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  269  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  270  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  271  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  272  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  273  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  274  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  275  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  276  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  277  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  278  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  279  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  280  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  281  -52.376290846595      4.263E-14 1.917E-18 0.000E+00
 ETOT  282  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  283  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  284  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  285  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  286  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  287  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  288  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  289  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  290  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  291  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  292  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  293  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  294  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  295  -52.376290846595     -3.553E-14 1.917E-18 0.000E+00
 ETOT  296  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  297  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  298  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  299  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  300  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  301  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  302  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  303  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  304  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  305  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  306  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  307  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  308  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  309  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  310  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  311  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  312  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  313  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  314  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT  315  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  316  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  317  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  318  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  319  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  320  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  321  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT  322  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  323  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  324  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  325  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  326  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  327  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  328  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  329  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  330  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  331  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  332  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  333  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  334  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  335  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  336  -52.376290846595     -4.263E-14 1.917E-18 0.000E+00
 ETOT  337  -52.376290846595      5.684E-14 1.917E-18 0.000E+00
 ETOT  338  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  339  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  340  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  341  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  342  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  343  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  344  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  345  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  346  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  347  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  348  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  349  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  350  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  351  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  352  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  353  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  354  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  355  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  356  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  357  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  358  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  359  -52.376290846595      3.553E-14 1.917E-18 0.000E+00
 ETOT  360  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  361  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  362  -52.376290846595     -3.553E-14 1.917E-18 0.000E+00
 ETOT  363  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  364  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  365  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  366  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  367  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  368  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  369  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  370  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  371  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  372  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  373  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  374  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  375  -52.376290846595     -4.263E-14 1.917E-18 0.000E+00
 ETOT  376  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  377  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  378  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  379  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  380  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  381  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  382  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  383  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  384  -52.376290846595     -4.263E-14 1.917E-18 0.000E+00
 ETOT  385  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  386  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  387  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  388  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  389  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  390  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  391  -52.376290846595      4.263E-14 1.917E-18 0.000E+00
 ETOT  392  -52.376290846595     -7.105E-14 1.917E-18 0.000E+00
 ETOT  393  -52.376290846595      4.974E-14 1.917E-18 0.000E+00
 ETOT  394  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  395  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  396  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  397  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  398  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  399  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  400  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  401  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  402  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  403  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  404  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  405  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  406  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  407  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  408  -52.376290846595      4.263E-14 1.917E-18 0.000E+00
 ETOT  409  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  410  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  411  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  412  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  413  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  414  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  415  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  416  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  417  -52.376290846595      7.105E-15 1.916E-18 0.000E+00
 ETOT  418  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  419  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  420  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  421  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  422  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  423  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  424  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  425  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  426  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  427  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  428  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  429  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  430  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  431  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  432  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  433  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  434  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  435  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  436  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  437  -52.376290846595     -3.553E-14 1.917E-18 0.000E+00
 ETOT  438  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  439  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  440  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  441  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  442  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  443  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  444  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  445  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  446  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  447  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  448  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  449  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  450  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  451  -52.376290846595     -4.263E-14 1.917E-18 0.000E+00
 ETOT  452  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  453  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  454  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  455  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  456  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  457  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  458  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  459  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  460  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  461  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  462  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  463  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  464  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  465  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  466  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  467  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  468  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  469  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  470  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  471  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  472  -52.376290846595     -2.842E-14 1.917E-18 0.000E+00
 ETOT  473  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  474  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  475  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  476  -52.376290846595      2.842E-14 1.917E-18 0.000E+00
 ETOT  477  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  478  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  479  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  480  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  481  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  482  -52.376290846595     -3.553E-14 1.917E-18 0.000E+00
 ETOT  483  -52.376290846595      3.553E-14 1.916E-18 0.000E+00
 ETOT  484  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  485  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  486  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  487  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  488  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  489  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  490  -52.376290846595     -7.105E-15 1.917E-18 0.000E+00
 ETOT  491  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  492  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  493  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00
 ETOT  494  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  495  -52.376290846595      0.000E+00 1.917E-18 0.000E+00
 ETOT  496  -52.376290846595      1.421E-14 1.917E-18 0.000E+00
 ETOT  497  -52.376290846595     -1.421E-14 1.917E-18 0.000E+00
 ETOT  498  -52.376290846595      7.105E-15 1.917E-18 0.000E+00
 ETOT  499  -52.376290846595      2.132E-14 1.917E-18 0.000E+00
 ETOT  500  -52.376290846595     -2.132E-14 1.917E-18 0.000E+00

 scprqt:  WARNING -
  nstep=  500 was not enough SCF cycles to converge;
  maximum residual=  1.917E-18 exceeds tolwfr=  1.000E-22

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.9831E-20; max=  1.9165E-18
   0.0000  0.0000 -0.0833    1  6.83793E-20 kpt; spin; max resid(k); each band:
  7.41E-23 1.56E-22 1.52E-22 1.85E-22 9.94E-23 1.58E-22 1.21E-21 2.05E-21
  2.55E-21 5.96E-22 8.61E-22 1.67E-20 4.67E-20 6.02E-20 5.34E-20 6.84E-20
   0.0000  0.0000 -0.2500    1  3.42949E-19 kpt; spin; max resid(k); each band:
  2.04E-22 1.53E-22 1.60E-22 3.95E-22 9.05E-22 1.78E-22 1.02E-21 1.25E-21
  5.29E-22 1.22E-21 2.95E-21 2.30E-20 1.14E-19 1.53E-19 8.02E-21 3.43E-19
   0.0000  0.0833 -0.1667    1  1.51963E-19 kpt; spin; max resid(k); each band:
  2.77E-22 1.92E-22 1.43E-22 1.57E-22 1.11E-21 2.99E-22 1.07E-21 8.90E-22
  1.06E-21 3.16E-21 1.49E-21 1.34E-20 3.31E-20 1.52E-19 1.92E-20 3.73E-20
   0.0000  0.1667 -0.0833    1  8.82228E-20 kpt; spin; max resid(k); each band:
  2.40E-22 2.11E-22 9.39E-23 6.42E-22 1.37E-21 2.69E-22 1.03E-21 1.15E-21
  1.47E-21 2.74E-21 1.65E-21 3.65E-21 3.70E-20 8.82E-20 1.15E-20 2.05E-20
   0.0833  0.0000 -0.1667    1  2.78322E-19 kpt; spin; max resid(k); each band:
  1.43E-22 1.66E-22 1.57E-22 2.58E-22 4.74E-22 2.04E-22 1.44E-21 2.89E-22
  2.17E-21 1.03E-21 2.44E-21 3.44E-20 6.65E-20 8.61E-20 9.62E-20 2.78E-19
   0.0833  0.0833 -0.0833    1  9.09670E-20 kpt; spin; max resid(k); each band:
  2.00E-22 1.71E-22 9.84E-23 1.73E-22 2.47E-22 5.49E-22 5.99E-22 2.43E-21
  6.63E-22 1.54E-21 2.06E-21 2.41E-20 6.78E-20 6.29E-20 9.10E-20 4.97E-20
   0.1667  0.0000 -0.0833    1  2.84615E-19 kpt; spin; max resid(k); each band:
  1.38E-22 1.66E-22 1.57E-22 2.58E-22 4.74E-22 2.04E-22 1.44E-21 2.89E-22
  2.17E-21 1.03E-21 2.46E-21 3.43E-20 6.60E-20 8.61E-20 9.65E-20 2.85E-19
   0.0000  0.0000 -0.4167    1  2.09536E-19 kpt; spin; max resid(k); each band:
  8.94E-23 3.54E-22 7.19E-22 1.26E-21 1.49E-21 5.40E-22 9.05E-22 1.15E-21
  1.31E-21 1.76E-21 5.02E-22 1.49E-20 1.43E-19 1.94E-20 5.27E-21 2.10E-19
   0.0000  0.0833 -0.3333    1  2.15737E-19 kpt; spin; max resid(k); each band:
  1.77E-22 2.18E-22 2.38E-22 6.93E-22 2.18E-21 1.05E-21 7.08E-22 7.81E-22
  3.01E-21 7.28E-22 1.14E-21 1.38E-20 1.58E-20 2.16E-19 4.50E-20 1.09E-19
   0.0000  0.1667 -0.2500    1  1.63271E-19 kpt; spin; max resid(k); each band:
  2.45E-22 3.14E-22 3.61E-22 3.39E-22 2.30E-21 5.36E-22 6.24E-22 1.67E-21
  2.73E-21 9.53E-22 7.98E-22 1.07E-20 1.81E-20 1.63E-19 9.20E-20 1.06E-20
   0.0000  0.2500 -0.1667    1  1.75772E-19 kpt; spin; max resid(k); each band:
  3.07E-22 5.02E-22 6.03E-22 8.38E-22 2.58E-21 4.66E-22 4.80E-22 1.65E-21
  3.14E-21 9.24E-22 8.25E-22 2.48E-21 3.05E-20 9.82E-20 3.45E-20 1.76E-19
   0.0000  0.3333 -0.0833    1  3.83127E-19 kpt; spin; max resid(k); each band:
  4.01E-22 6.04E-22 4.23E-22 2.33E-21 2.99E-21 8.88E-22 4.29E-22 1.01E-21
  3.87E-21 6.79E-22 1.34E-21 1.36E-21 3.82E-20 5.67E-20 2.28E-20 3.83E-19
   0.0833  0.0000 -0.3333    1  5.41928E-19 kpt; spin; max resid(k); each band:
  1.84E-22 2.54E-22 5.53E-22 7.71E-22 1.30E-21 3.12E-22 6.31E-22 1.06E-21
  1.41E-21 5.17E-22 2.10E-21 2.21E-20 6.92E-20 8.08E-20 1.11E-19 5.42E-19
   0.0833  0.0833 -0.2500    1  2.41958E-19 kpt; spin; max resid(k); each band:
  2.53E-22 1.75E-22 2.35E-22 6.18E-22 1.29E-21 2.24E-22 1.60E-21 6.46E-22
  5.55E-22 1.96E-21 1.74E-21 1.97E-20 8.59E-20 1.01E-19 9.72E-20 2.42E-19
   0.0833  0.1667 -0.1667    1  1.56657E-19 kpt; spin; max resid(k); each band:
  2.95E-22 1.92E-22 2.79E-22 2.25E-22 1.44E-21 4.72E-22 1.70E-21 7.69E-22
  5.76E-22 2.56E-21 1.52E-21 1.34E-20 2.28E-20 1.57E-19 6.12E-20 4.43E-20
   0.0833  0.2500 -0.0833    1  9.91852E-20 kpt; spin; max resid(k); each band:
  3.00E-22 2.67E-22 3.63E-22 6.78E-22 1.64E-21 5.55E-22 1.23E-21 1.39E-21
  7.81E-22 2.49E-21 1.79E-21 4.01E-21 4.49E-20 9.92E-20 3.92E-20 5.94E-20
   0.1667  0.0000 -0.2500    1  3.54149E-19 kpt; spin; max resid(k); each band:
  2.56E-22 2.01E-22 4.42E-22 3.30E-22 1.13E-21 2.77E-22 4.74E-22 5.40E-22
  1.91E-21 5.33E-22 1.70E-21 3.32E-20 3.79E-20 7.79E-20 1.28E-19 3.54E-19
   0.1667  0.0833 -0.1667    1  1.99893E-19 kpt; spin; max resid(k); each band:
  3.28E-22 1.60E-22 2.62E-22 3.10E-22 7.17E-22 2.68E-22 1.54E-21 9.20E-22
  4.22E-22 1.34E-21 1.96E-21 3.48E-20 6.30E-20 5.71E-20 1.78E-19 2.00E-19
   0.1667  0.1667 -0.0833    1  1.69357E-19 kpt; spin; max resid(k); each band:
  4.63E-22 9.67E-23 1.82E-22 2.02E-22 4.61E-22 1.06E-21 1.98E-21 4.19E-22
  9.21E-23 1.53E-21 2.13E-21 2.66E-20 4.30E-20 7.88E-20 4.98E-20 1.69E-19
   0.2500  0.0000 -0.1667    1  3.53811E-19 kpt; spin; max resid(k); each band:
  2.56E-22 2.01E-22 4.43E-22 3.30E-22 1.14E-21 2.77E-22 4.72E-22 5.40E-22
  1.91E-21 5.33E-22 1.70E-21 3.33E-20 3.80E-20 7.85E-20 1.28E-19 3.54E-19
   0.2500  0.0833 -0.0833    1  2.15955E-19 kpt; spin; max resid(k); each band:
  4.42E-22 1.94E-22 2.46E-22 3.31E-22 6.72E-22 1.71E-22 7.23E-22 1.37E-21
  6.43E-22 1.25E-21 2.52E-21 4.41E-20 3.62E-20 5.99E-20 2.16E-19 2.03E-19
   0.3333  0.0000 -0.0833    1  5.43504E-19 kpt; spin; max resid(k); each band:
  1.83E-22 2.54E-22 5.53E-22 7.70E-22 1.30E-21 3.12E-22 6.33E-22 1.06E-21
  1.41E-21 5.18E-22 2.09E-21 2.22E-20 6.55E-20 8.08E-20 1.11E-19 5.44E-19
   0.0000  0.0833  0.5000    1  1.65916E-19 kpt; spin; max resid(k); each band:
  9.63E-23 3.23E-22 4.79E-22 1.73E-21 1.08E-21 9.46E-22 3.32E-22 7.41E-22
  1.34E-21 2.34E-21 4.55E-22 1.12E-20 6.03E-21 1.66E-19 6.34E-21 1.21E-19
   0.0000  0.1667 -0.4167    1  1.14661E-19 kpt; spin; max resid(k); each band:
  1.04E-22 3.73E-22 3.75E-22 4.95E-22 1.82E-21 1.00E-21 9.45E-22 6.60E-22
  1.93E-21 1.03E-21 4.26E-22 1.38E-20 2.38E-21 1.15E-19 2.58E-20 4.04E-20
   0.0000  0.2500 -0.3333    1  9.68120E-20 kpt; spin; max resid(k); each band:
  3.07E-22 4.94E-22 5.21E-22 9.41E-22 2.31E-21 5.47E-22 1.87E-21 2.61E-22
  1.64E-21 7.52E-22 5.66E-22 1.79E-20 4.31E-21 8.12E-20 9.68E-20 4.63E-20
   0.0000  0.3333 -0.2500    1  2.30456E-19 kpt; spin; max resid(k); each band:
  6.69E-22 7.71E-22 8.02E-22 1.06E-21 2.61E-21 9.67E-22 1.06E-21 1.70E-22
  2.71E-21 7.55E-22 3.99E-22 3.27E-21 2.60E-20 5.57E-20 6.97E-20 2.30E-19
   0.0000  0.4167 -0.1667    1  1.50589E-19 kpt; spin; max resid(k); each band:
  4.35E-22 8.66E-22 7.23E-22 1.33E-21 2.89E-21 5.82E-22 8.46E-22 4.06E-22
  2.82E-21 1.09E-21 6.92E-22 1.98E-21 2.74E-20 3.61E-20 2.47E-20 1.51E-19
   0.0000  0.5000 -0.0833    1  1.46953E-19 kpt; spin; max resid(k); each band:
  2.80E-22 7.49E-22 8.07E-22 3.55E-21 3.35E-22 1.10E-21 4.28E-22 1.18E-21
  7.00E-22 3.14E-21 1.23E-21 1.67E-21 2.68E-20 2.77E-20 2.96E-20 1.47E-19
   0.0833  0.0000  0.5000    1  7.72086E-19 kpt; spin; max resid(k); each band:
  9.93E-23 3.21E-22 3.44E-22 1.20E-21 6.13E-22 1.60E-21 1.20E-21 1.51E-21
  3.50E-22 1.45E-21 5.61E-22 1.19E-20 5.82E-20 3.02E-20 9.70E-20 7.72E-19
   0.0833  0.0833 -0.4167    1  7.72081E-19 kpt; spin; max resid(k); each band:
  9.93E-23 3.21E-22 3.44E-22 1.20E-21 6.14E-22 1.60E-21 1.20E-21 1.51E-21
  3.51E-22 1.45E-21 5.61E-22 1.20E-20 5.82E-20 3.09E-20 9.70E-20 7.72E-19
   0.0833  0.1667 -0.3333    1  1.70553E-19 kpt; spin; max resid(k); each band:
  1.92E-22 2.71E-22 3.91E-22 6.44E-22 1.46E-21 2.38E-21 1.52E-21 1.01E-21
  3.71E-22 1.44E-21 5.47E-22 1.23E-20 2.49E-20 9.11E-20 1.09E-19 1.71E-19
   0.0833  0.2500 -0.2500    1  1.47419E-19 kpt; spin; max resid(k); each band:
  3.17E-22 4.79E-22 4.36E-22 3.69E-22 1.29E-21 2.29E-21 2.13E-21 7.03E-22
  5.76E-22 8.86E-22 1.03E-21 1.46E-20 1.37E-20 1.18E-19 1.47E-19 2.72E-20
   0.0833  0.3333 -0.1667    1  3.63683E-19 kpt; spin; max resid(k); each band:
  5.01E-22 7.09E-22 6.78E-22 1.20E-21 9.20E-22 2.25E-21 2.29E-21 8.46E-22
  8.30E-22 1.08E-21 8.56E-22 3.49E-21 3.51E-20 7.69E-20 4.89E-20 3.64E-19
   0.0833  0.4167 -0.0833    1  3.39846E-19 kpt; spin; max resid(k); each band:
  5.16E-22 6.96E-22 8.39E-22 2.45E-21 6.50E-22 1.78E-21 1.97E-21 1.50E-21
  9.64E-22 1.78E-21 7.43E-22 1.63E-21 3.94E-20 4.06E-20 2.79E-20 3.40E-19
   0.1667  0.0000 -0.4167    1  4.69924E-19 kpt; spin; max resid(k); each band:
  2.13E-22 2.27E-22 5.58E-22 7.16E-22 9.38E-22 6.97E-22 1.38E-21 5.90E-22
  1.74E-21 1.20E-21 5.22E-22 1.53E-20 3.22E-20 2.54E-20 9.70E-20 4.70E-19
   0.1667  0.0833 -0.3333    1  4.41409E-19 kpt; spin; max resid(k); each band:
  1.17E-22 3.78E-22 4.67E-22 9.27E-22 2.84E-22 1.79E-21 1.03E-21 1.55E-21
  5.37E-22 1.70E-21 5.74E-22 1.68E-20 3.09E-20 8.10E-20 4.72E-20 4.41E-19
   0.1667  0.1667 -0.2500    1  2.27722E-19 kpt; spin; max resid(k); each band:
  2.16E-22 4.22E-22 1.92E-22 6.56E-22 1.51E-21 4.45E-22 1.43E-21 1.15E-21
  2.10E-22 7.24E-22 1.15E-21 1.76E-20 5.39E-20 7.95E-20 1.09E-19 2.28E-19
   0.1667  0.2500 -0.1667    1  1.24802E-19 kpt; spin; max resid(k); each band:
  2.86E-22 3.48E-22 3.26E-22 3.06E-22 1.24E-21 5.59E-22 8.82E-22 1.57E-21
  1.71E-21 2.55E-22 1.17E-21 1.60E-20 2.37E-20 1.22E-19 2.64E-20 1.25E-19
   0.1667  0.3333 -0.0833    1  1.35153E-19 kpt; spin; max resid(k); each band:
  3.07E-22 4.86E-22 3.62E-22 8.92E-22 1.13E-21 6.07E-22 8.00E-22 1.48E-21
  2.35E-21 4.52E-22 1.63E-21 5.11E-21 6.11E-20 5.33E-20 5.02E-20 1.35E-19
   0.2500  0.0000 -0.3333    1  4.72951E-19 kpt; spin; max resid(k); each band:
  3.50E-22 4.64E-22 2.10E-22 4.42E-22 7.37E-22 6.31E-22 1.47E-21 5.14E-22
  1.82E-21 1.08E-21 4.46E-22 2.40E-20 2.40E-20 3.37E-20 4.71E-20 4.73E-19
   0.2500  0.0833 -0.2500    1  2.45613E-19 kpt; spin; max resid(k); each band:
  3.03E-22 5.00E-22 2.09E-22 6.24E-22 3.56E-22 1.64E-21 6.19E-22 1.21E-21
  7.57E-22 1.33E-21 4.97E-22 2.57E-20 3.76E-20 4.85E-20 1.76E-19 2.46E-19
   0.2500  0.1667 -0.1667    1  4.36842E-19 kpt; spin; max resid(k); each band:
  5.43E-22 3.09E-22 1.86E-22 6.26E-22 8.95E-22 2.19E-22 6.55E-22 1.31E-21
  5.36E-22 3.57E-22 1.39E-21 2.79E-20 6.23E-20 3.32E-20 1.96E-19 4.37E-19
   0.2500  0.2500 -0.0833    1  2.63965E-19 kpt; spin; max resid(k); each band:
  5.20E-22 1.01E-22 3.57E-22 4.48E-22 4.91E-22 4.79E-22 9.18E-22 9.58E-22
  6.75E-22 5.65E-23 1.62E-21 1.66E-20 2.22E-20 4.38E-20 1.52E-20 2.64E-19
   0.3333  0.0000 -0.2500    1  4.72931E-19 kpt; spin; max resid(k); each band:
  3.50E-22 4.64E-22 2.10E-22 4.42E-22 7.37E-22 6.31E-22 1.47E-21 5.13E-22
  1.82E-21 1.08E-21 4.46E-22 2.38E-20 2.41E-20 3.35E-20 4.74E-20 4.73E-19
   0.3333  0.0833 -0.1667    1  3.77376E-19 kpt; spin; max resid(k); each band:
  5.18E-22 4.67E-22 2.24E-22 4.66E-22 4.45E-22 1.53E-21 7.57E-22 6.13E-22
  1.15E-21 1.53E-21 4.15E-22 3.68E-20 2.49E-20 3.96E-20 1.63E-19 3.77E-19
   0.3333  0.1667 -0.0833    1  8.41720E-19 kpt; spin; max resid(k); each band:
  8.73E-22 2.64E-22 2.40E-22 4.31E-22 9.85E-22 3.64E-22 3.57E-22 9.20E-22
  1.04E-21 3.55E-22 1.96E-21 4.29E-20 2.33E-20 4.47E-20 1.32E-19 8.42E-19
   0.4167  0.0000 -0.1667    1  4.69564E-19 kpt; spin; max resid(k); each band:
  2.13E-22 2.27E-22 5.58E-22 7.16E-22 9.38E-22 6.98E-22 1.38E-21 5.91E-22
  1.74E-21 1.20E-21 5.22E-22 1.54E-20 3.21E-20 2.54E-20 9.69E-20 4.70E-19
   0.4167  0.0833 -0.0833    1  2.58173E-19 kpt; spin; max resid(k); each band:
  4.19E-22 2.84E-22 7.23E-22 6.16E-22 7.28E-22 1.34E-21 7.65E-22 4.84E-22
  1.48E-21 2.06E-21 4.36E-22 2.56E-20 3.35E-20 4.99E-20 1.25E-19 2.58E-19
   0.5000  0.0000 -0.0833    1  7.67463E-19 kpt; spin; max resid(k); each band:
  9.93E-23 3.21E-22 3.42E-22 1.20E-21 6.14E-22 1.60E-21 1.20E-21 1.51E-21
  3.50E-22 1.45E-21 5.61E-22 1.07E-20 5.65E-20 3.09E-20 9.69E-20 7.67E-19
   0.0000  0.0833  0.3333    1  2.20853E-19 kpt; spin; max resid(k); each band:
  2.83E-22 3.08E-22 3.67E-22 6.15E-22 7.11E-22 1.56E-22 1.52E-22 2.10E-21
  3.54E-22 1.46E-21 3.13E-21 3.37E-20 2.54E-20 1.20E-19 1.23E-19 2.21E-19
 outwf : prtvol=0 or 1, do not print more k-points.

 loper3 : ek2=    4.4862765921E+01
          f-sum rule ratio=    1.1060090814E+00
 prteigrs : about to open file tbase3_x_1WF1_EIG
 Expectation of eigenvalue derivatives (hartree) for nkpt= 432  k points:
  (in case of degenerate eigenvalues, averaged derivative)
 kpt#   1, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.0833 (reduced coord)
   0.00558   0.00199   0.00199   0.00733   0.00357   0.00357  -0.00209  -0.00151
  -0.00151  -0.00364  -0.00364  -0.09352  -0.01768  -0.01768   0.04927  -0.08109
 kpt#   2, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.2500 (reduced coord)
   0.01138   0.00656   0.00656   0.00829   0.00829   0.01835  -0.00437  -0.00437
  -0.00151  -0.00967  -0.00967  -0.10938  -0.02668  -0.02668  -0.05076   0.11919
 kpt#   3, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833 -0.1667 (reduced coord)
   0.02244   0.00708   0.01204   0.01378   0.02164   0.02980  -0.01274  -0.00557
  -0.00231  -0.02775  -0.00439  -0.16331  -0.33489  -0.02916   0.27102  -0.10467
 kpt#   4, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.0833 (reduced coord)
   0.03084   0.01420   0.01282   0.02271   0.02355   0.04614  -0.01199  -0.00915
  -0.00800  -0.02827  -0.01809  -0.29816  -0.17477  -0.07531  -0.03108   0.20018
 kpt#   5, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000 -0.1667 (reduced coord)
   0.00420   0.00356   0.00039   0.00446   0.00096   0.00817   0.00037  -0.00179
  -0.00284  -0.00026  -0.00685  -0.06742   0.08006  -0.02307  -0.15105   0.15242
 kpt#   6, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.0833 (reduced coord)
   0.01525   0.00762   0.00733   0.00631   0.01237   0.01873  -0.00692  -0.00725
   0.00039  -0.01933  -0.00039  -0.14657  -0.11438  -0.09114   0.17167  -0.13147
 kpt#   7, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.0833 (reduced coord)
  -0.00420  -0.00356  -0.00039  -0.00446  -0.00096  -0.00817  -0.00037   0.00179
   0.00284   0.00026   0.00685   0.06742  -0.08006   0.02307   0.15105  -0.15242
 kpt#   8, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.4167 (reduced coord)
   0.00577   0.00654   0.00654   0.01081   0.01081  -0.00092  -0.00483  -0.00483
  -0.01213  -0.01213   0.01567  -0.05252  -0.01083  -0.01083  -0.02009  -0.00103
 kpt#   9, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833 -0.3333 (reduced coord)
   0.01654   0.00655   0.00722   0.01371   0.02941  -0.01019   0.00081  -0.00332
  -0.03039   0.02072   0.00085  -0.04163  -0.41205  -0.04811   0.35115  -0.19280
 kpt#  10, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.2500 (reduced coord)
   0.02480   0.01281   0.00582   0.02782   0.03179  -0.00243   0.00791  -0.01772
  -0.02145   0.01762  -0.01171  -0.06799  -0.35461  -0.09130   0.28260  -0.06558
 kpt#  11, nband= 16, wtk=  0.00231, kpt=  0.0000  0.2500 -0.1667 (reduced coord)
   0.02823   0.01898   0.01600   0.02476   0.03291   0.00241  -0.00456  -0.02179
  -0.02408   0.03925  -0.02405  -0.20840  -0.16173  -0.09893  -0.06766   0.30456
 kpt#  12, nband= 16, wtk=  0.00231, kpt=  0.0000  0.3333 -0.0833 (reduced coord)
   0.02557   0.02248   0.02333   0.02520   0.03308  -0.00275  -0.01067  -0.01755
  -0.03365   0.05355  -0.03262  -0.22761  -0.06853  -0.07565  -0.06977   0.27633
 kpt#  13, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000 -0.3333 (reduced coord)
   0.00452   0.00796   0.00806   0.00574   0.00183   0.00372  -0.00574  -0.00711
  -0.00163   0.01642  -0.01674  -0.09299   0.17176  -0.01377  -0.21046   0.23456
 kpt#  14, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.2500 (reduced coord)
   0.01530   0.00947   0.00724   0.00998   0.01720   0.01378  -0.00973   0.00150
   0.00395  -0.02324  -0.00111  -0.08875  -0.18495  -0.07815   0.15051  -0.01752
 kpt#  15, nband= 16, wtk=  0.00231, kpt=  0.0833  0.1667 -0.1667 (reduced coord)
   0.02497   0.01090   0.00666   0.02502   0.02492   0.03127  -0.00692  -0.00628
  -0.00613  -0.02784  -0.00850  -0.12718  -0.33855  -0.04087   0.27460  -0.08538
 kpt#  16, nband= 16, wtk=  0.00231, kpt=  0.0833  0.2500 -0.0833 (reduced coord)
   0.03088   0.01671   0.01432   0.02399   0.02999   0.04366  -0.00754  -0.00561
  -0.01050  -0.02989  -0.02049  -0.24618  -0.19820  -0.08700  -0.07724   0.32267
 kpt#  17, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.2500 (reduced coord)
   0.00171   0.00308   0.00509  -0.00153   0.00056   0.00242  -0.00623  -0.00203
  -0.00132   0.01082  -0.00617  -0.07021   0.09644  -0.00382  -0.17513   0.18507
 kpt#  18, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0833 -0.1667 (reduced coord)
   0.01110   0.01055   0.00240   0.00499   0.00593   0.01650  -0.00403  -0.00836
   0.00219  -0.01645   0.00495  -0.08485   0.07203  -0.19260  -0.03087   0.05741
 kpt#  19, nband= 16, wtk=  0.00231, kpt=  0.1667  0.1667 -0.0833 (reduced coord)
   0.02076   0.00262   0.01381   0.01651   0.01649   0.02686  -0.00958  -0.00868
  -0.00282  -0.02281  -0.00055  -0.13825  -0.12806  -0.10542  -0.04455   0.10418
 kpt#  20, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0000 -0.1667 (reduced coord)
  -0.00171  -0.00308  -0.00509   0.00153  -0.00056  -0.00242   0.00623   0.00203
   0.00132  -0.01082   0.00617   0.07021  -0.09644   0.00382   0.17513  -0.18507
 kpt#  21, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0833 -0.0833 (reduced coord)
   0.00518   0.00474  -0.00526   0.00602   0.00086   0.00410  -0.00341  -0.00903
   0.00657  -0.01440   0.01693   0.03415  -0.06832  -0.14647   0.32097  -0.35064
 kpt#  22, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0000 -0.0833 (reduced coord)
  -0.00452  -0.00796  -0.00806  -0.00574  -0.00183  -0.00372   0.00574   0.00711
   0.00163  -0.01642   0.01674   0.09299  -0.17176   0.01377   0.21046  -0.23456
 kpt#  23, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833  0.5000 (reduced coord)
   0.00483  -0.00162  -0.00118  -0.02380  -0.00589  -0.00869   0.00102   0.00546
   0.01276   0.03257  -0.00350   0.06640  -0.34958  -0.08338   0.39038  -0.31658
 kpt#  24, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.4167 (reduced coord)
   0.01274   0.00599  -0.00244  -0.00556  -0.02933   0.00570   0.00627   0.01048
   0.02974  -0.00425   0.01117   0.08108  -0.33142  -0.12052   0.28937  -0.12287
 kpt#  25, nband= 16, wtk=  0.00231, kpt=  0.0000  0.2500 -0.3333 (reduced coord)
   0.01598   0.00344   0.01314  -0.01013  -0.03253   0.01686   0.01021   0.00507
   0.02289  -0.01576   0.02654   0.09597  -0.29469  -0.12558   0.06549   0.15289
 kpt#  26, nband= 16, wtk=  0.00231, kpt=  0.0000  0.3333 -0.2500 (reduced coord)
   0.01350   0.01522   0.01723  -0.00886  -0.03298   0.01048  -0.00194   0.00083
   0.02932  -0.02582   0.03344  -0.08560  -0.03862  -0.10478  -0.06615   0.20236
 kpt#  27, nband= 16, wtk=  0.00231, kpt=  0.0000  0.4167 -0.1667 (reduced coord)
   0.00560   0.01333   0.01448   0.00021  -0.02929   0.00685  -0.01069   0.00229
   0.03424  -0.03119   0.01587  -0.05252   0.02784  -0.06657  -0.01926   0.05606
 kpt#  28, nband= 16, wtk=  0.00231, kpt=  0.0000  0.5000 -0.0833 (reduced coord)
  -0.00576  -0.01218  -0.00481  -0.02758   0.00601   0.02582  -0.00105  -0.01827
  -0.00346   0.03642  -0.01807   0.05242   0.03928  -0.01831   0.02205  -0.03480
 kpt#  29, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000  0.5000 (reduced coord)
  -0.00529  -0.00528  -0.00182  -0.00189   0.00595   0.01725  -0.00103  -0.01186
  -0.00811   0.00193  -0.00729  -0.00699   0.19443   0.03253  -0.18417   0.14089
 kpt#  30, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.4167 (reduced coord)
   0.00529   0.00528   0.00182   0.00189  -0.00595  -0.01725   0.00103   0.01186
   0.00811  -0.00193   0.00729   0.00699  -0.19443  -0.03253   0.18417  -0.14089
 kpt#  31, nband= 16, wtk=  0.00231, kpt=  0.0833  0.1667 -0.3333 (reduced coord)
   0.01463   0.00600   0.00184   0.01496  -0.01013   0.01634  -0.01921   0.00621
   0.00135  -0.00464   0.02105   0.01955  -0.33840  -0.08144   0.30738  -0.16850
 kpt#  32, nband= 16, wtk=  0.00231, kpt=  0.0833  0.2500 -0.2500 (reduced coord)
   0.02038   0.00545   0.01161   0.02360  -0.01167   0.03206  -0.03133   0.00030
  -0.00354  -0.01503   0.03710   0.00560  -0.31349  -0.11239   0.24744  -0.02032
 kpt#  33, nband= 16, wtk=  0.00231, kpt=  0.0833  0.3333 -0.1667 (reduced coord)
   0.02084   0.01625   0.01710   0.01783  -0.00941   0.03371  -0.03289  -0.00661
  -0.00928  -0.02609   0.05253  -0.12978  -0.13139  -0.09676  -0.06945   0.28155
 kpt#  34, nband= 16, wtk=  0.00231, kpt=  0.0833  0.4167 -0.0833 (reduced coord)
   0.01556   0.01883   0.02272   0.01370  -0.00486   0.01963  -0.02310  -0.00368
  -0.01090  -0.03421   0.04523  -0.13544  -0.05800  -0.04154  -0.04131   0.14389
 kpt#  35, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.4167 (reduced coord)
  -0.00357   0.00367   0.00846   0.00288   0.00002   0.00057  -0.00848  -0.00410
   0.00225  -0.01347   0.00235  -0.06680   0.17963   0.02698  -0.15431   0.08946
 kpt#  36, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0833 -0.3333 (reduced coord)
   0.00561   0.00935   0.00909  -0.00185   0.00483   0.00020  -0.01054  -0.01199
   0.00328  -0.00191   0.01431  -0.05224   0.05196  -0.09419  -0.01552   0.05664
 kpt#  37, nband= 16, wtk=  0.00231, kpt=  0.1667  0.1667 -0.2500 (reduced coord)
   0.01496   0.00346   0.01230   0.01196   0.01545  -0.00238  -0.00684  -0.02349
   0.00206   0.02218  -0.00131  -0.04621  -0.17347  -0.07343   0.08990   0.02483
 kpt#  38, nband= 16, wtk=  0.00231, kpt=  0.1667  0.2500 -0.1667 (reduced coord)
   0.02213   0.00618   0.01112   0.02486   0.02336  -0.00778  -0.01793  -0.01142
   0.03053  -0.00058  -0.01047  -0.07656  -0.27262  -0.08489   0.21604   0.00809
 kpt#  39, nband= 16, wtk=  0.00231, kpt=  0.1667  0.3333 -0.0833 (reduced coord)
   0.02507   0.01537   0.01501   0.02015   0.02971  -0.00541  -0.02322  -0.01771
   0.04494  -0.00028  -0.02183  -0.15769  -0.21897  -0.07338   0.02548   0.27619
 kpt#  40, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0000 -0.3333 (reduced coord)
  -0.00124   0.00589   0.00205   0.00064  -0.00022  -0.00319  -0.00607  -0.00212
   0.00322  -0.00503   0.00345  -0.09079   0.12804   0.01040  -0.06582   0.02474
 kpt#  41, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0833 -0.2500 (reduced coord)
   0.00546   0.00199   0.00915  -0.00193   0.00417  -0.00040  -0.01134  -0.01205
   0.00604   0.00641   0.01049  -0.07108   0.10505  -0.14135   0.00425   0.02694
 kpt#  42, nband= 16, wtk=  0.00231, kpt=  0.2500  0.1667 -0.1667 (reduced coord)
   0.01342  -0.00066   0.01724   0.00521   0.00720   0.00649  -0.01840  -0.01635
   0.01238   0.00613   0.00789  -0.07808   0.04444  -0.15029  -0.24125   0.22338
 kpt#  43, nband= 16, wtk=  0.00231, kpt=  0.2500  0.2500 -0.0833 (reduced coord)
   0.02059   0.00219   0.01660   0.01698   0.01636   0.01570  -0.00857  -0.02573
   0.00686   0.00055  -0.00058  -0.11380  -0.10910  -0.09223  -0.08507   0.11396
 kpt#  44, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0000 -0.2500 (reduced coord)
   0.00124  -0.00589  -0.00205  -0.00064   0.00022   0.00319   0.00607   0.00212
  -0.00322   0.00503  -0.00345   0.09079  -0.12804  -0.01040   0.06582  -0.02474
 kpt#  45, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0833 -0.1667 (reduced coord)
   0.00500  -0.00881   0.00366   0.00384   0.00191  -0.00204  -0.00977  -0.00514
   0.01179   0.01747  -0.00493   0.06429  -0.07704  -0.15699   0.32115  -0.27494
 kpt#  46, nband= 16, wtk=  0.00231, kpt=  0.3333  0.1667 -0.0833 (reduced coord)
   0.01048  -0.00986   0.01335   0.00992   0.00085   0.00412  -0.01311  -0.01006
  -0.00203   0.00583   0.01925   0.00305  -0.00921  -0.16180  -0.05069  -0.04472
 kpt#  47, nband= 16, wtk=  0.00231, kpt=  0.4167  0.0000 -0.1667 (reduced coord)
   0.00357  -0.00367  -0.00846  -0.00288  -0.00002  -0.00057   0.00848   0.00410
  -0.00225   0.01347  -0.00235   0.06680  -0.17963  -0.02698   0.15431  -0.08946
 kpt#  48, nband= 16, wtk=  0.00231, kpt=  0.4167  0.0833 -0.0833 (reduced coord)
   0.00468  -0.00347  -0.01179  -0.00059  -0.00044  -0.00309  -0.00665  -0.00210
   0.01554   0.02765  -0.00987   0.10276  -0.22844  -0.13408   0.33317  -0.25575
 kpt#  49, nband= 16, wtk=  0.00231, kpt=  0.5000  0.0000 -0.0833 (reduced coord)
   0.00529   0.00528   0.00182   0.00189  -0.00595  -0.01725   0.00103   0.01186
   0.00811  -0.00193   0.00729   0.00699  -0.19443  -0.03253   0.18417  -0.14089
 kpt#  50, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833  0.3333 (reduced coord)
  -0.00060  -0.00227  -0.00751  -0.00495   0.00416  -0.00416  -0.00389   0.00340
  -0.00235  -0.01411   0.02763   0.10019  -0.23476  -0.10202   0.39632  -0.39589
 prteigrs : prtvol=0 or 1, do not print more k-points.


 Eight components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   6.57646699E+01 eigvalue=   9.96467777E+00  local=  -7.71200193E+00
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
     kin1=  -4.96186265E+01  Hartree=   0.00000000E+00     xc=   0.00000000E+00
 7,8,9: eventually, occupation + non-local contributions
    edocc=   4.53313314E+00     enl0=  -2.01741881E+01   enl1=  -5.51339552E+01
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -5.23762908E+01
  No Ewald or frozen-wf contrib.: the relaxation energy is the total one
 2DEtotal=   -0.5237629085E+02 Ha. Also 2DEtotal=   -0.142523135539E+04 eV
    (  non-var. 2DEtotal :   -5.2376290846E+01 Ha)

--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : derivative vs k along direction   3
 The set of symmetries contains only one element for this perturbation.
 symkpt : not enough symmetry to change the number of k points.

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  17 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  18 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  19 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  20 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  21 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  22 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  23 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  24 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  25 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  26 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  27 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  28 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  29 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  30 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  31 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  32 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  33 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  34 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  35 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  36 by node    0
P newkpt: treating     16 bands with npw=   13941 for ikpt=  37 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  38 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  39 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  40 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  41 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  42 by node    0
P newkpt: treating     16 bands with npw=   13966 for ikpt=  43 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  44 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  45 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  46 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  47 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  48 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  49 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  50 by node    0
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1  -52.272955091089     -5.227E+01 1.496E-01 0.000E+00
 ETOT  2  -52.375558327757     -1.026E-01 1.860E-03 0.000E+00
 ETOT  3  -52.376282588649     -7.243E-04 2.211E-05 0.000E+00
 ETOT  4  -52.376290736385     -8.148E-06 4.688E-07 0.000E+00
 ETOT  5  -52.376290844964     -1.086E-07 2.184E-08 0.000E+00
 ETOT  6  -52.376290846547     -1.583E-09 1.772E-09 0.000E+00
 ETOT  7  -52.376290846572     -2.441E-11 1.349E-10 0.000E+00
 ETOT  8  -52.376290846572     -4.263E-13 1.507E-11 0.000E+00
 ETOT  9  -52.376290846572      4.263E-14 1.121E-12 0.000E+00
 ETOT 10  -52.376290846572      1.421E-14 1.389E-13 0.000E+00
 ETOT 11  -52.376290846572     -2.842E-14 9.986E-15 0.000E+00
 ETOT 12  -52.376290846572      1.421E-14 1.297E-15 0.000E+00
 ETOT 13  -52.376290846572      3.553E-14 9.150E-17 0.000E+00
 ETOT 14  -52.376290846572     -2.842E-14 1.254E-17 0.000E+00
 ETOT 15  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 16  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 17  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 18  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 19  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 20  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 21  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 22  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 23  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 24  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 25  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 26  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 27  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 28  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 29  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 30  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 31  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 32  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 33  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 34  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 35  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 36  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 37  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 38  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 39  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 40  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 41  -52.376290846572     -2.842E-14 1.917E-18 0.000E+00
 ETOT 42  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 43  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 44  -52.376290846572     -2.842E-14 1.917E-18 0.000E+00
 ETOT 45  -52.376290846572      2.842E-14 1.917E-18 0.000E+00
 ETOT 46  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 47  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 48  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 49  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 50  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 51  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 52  -52.376290846572      4.263E-14 1.917E-18 0.000E+00
 ETOT 53  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT 54  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 55  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 56  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 57  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 58  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 59  -52.376290846572     -2.842E-14 1.917E-18 0.000E+00
 ETOT 60  -52.376290846572      2.842E-14 1.917E-18 0.000E+00
 ETOT 61  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 62  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 63  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 64  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT 65  -52.376290846572      4.974E-14 1.917E-18 0.000E+00
 ETOT 66  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT 67  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 68  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 69  -52.376290846572     -2.842E-14 1.917E-18 0.000E+00
 ETOT 70  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 71  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 72  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 73  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT 74  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT 75  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 76  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 77  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 78  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT 79  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 80  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT 81  -52.376290846572      3.553E-14 1.917E-18 0.000E+00
 ETOT 82  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 83  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 84  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 85  -52.376290846572      2.842E-14 1.917E-18 0.000E+00
 ETOT 86  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT 87  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT 88  -52.376290846572      2.842E-14 1.917E-18 0.000E+00
 ETOT 89  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 90  -52.376290846572      2.132E-14 1.917E-18 0.000E+00
 ETOT 91  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 92  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 93  -52.376290846572      2.842E-14 1.917E-18 0.000E+00
 ETOT 94  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT 95  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT 96  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT 97  -52.376290846572      2.842E-14 1.917E-18 0.000E+00
 ETOT 98  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT 99  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT  100  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT  101  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT  102  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT  103  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT  104  -52.376290846572      2.132E-14 1.917E-18 0.000E+00
 ETOT  105  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT  106  -52.376290846572      3.553E-14 1.917E-18 0.000E+00
 ETOT  107  -52.376290846572     -4.263E-14 1.917E-18 0.000E+00
 ETOT  108  -52.376290846572      2.842E-14 1.917E-18 0.000E+00
 ETOT  109  -52.376290846572     -2.842E-14 1.917E-18 0.000E+00
 ETOT  110  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT  111  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT  112  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT  113  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT  114  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT  115  -52.376290846572     -4.263E-14 1.917E-18 0.000E+00
 ETOT  116  -52.376290846572      4.974E-14 1.917E-18 0.000E+00
 ETOT  117  -52.376290846572     -2.842E-14 1.917E-18 0.000E+00
 ETOT  118  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT  119  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT  120  -52.376290846572      1.421E-14 1.917E-18 0.000E+00
 ETOT  121  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT  122  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT  123  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT  124  -52.376290846572      2.132E-14 1.917E-18 0.000E+00
 ETOT  125  -52.376290846572     -7.105E-15 1.917E-18 0.000E+00
 ETOT  126  -52.376290846572      2.132E-14 1.917E-18 0.000E+00
 ETOT  127  -52.376290846572     -4.263E-14 1.917E-18 0.000E+00
 ETOT  128  -52.376290846572      2.842E-14 1.917E-18 0.000E+00
 ETOT  129  -52.376290846572     -1.421E-14 1.917E-18 0.000E+00
 ETOT  130  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT  131  -52.376290846572      7.105E-15 1.917E-18 0.000E+00
 ETOT  132  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  133  -52.376290846572      4.974E-14 1.916E-18 0.000E+00
 ETOT  134  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  135  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  136  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  137  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  138  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  139  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  140  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  141  -52.376290846572      3.553E-14 1.916E-18 0.000E+00
 ETOT  142  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  143  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  144  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  145  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  146  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  147  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  148  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  149  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  150  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  151  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  152  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  153  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  154  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  155  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  156  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  157  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  158  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  159  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  160  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  161  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  162  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  163  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  164  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  165  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  166  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  167  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  168  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  169  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  170  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  171  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  172  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  173  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  174  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  175  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  176  -52.376290846572      3.553E-14 1.916E-18 0.000E+00
 ETOT  177  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  178  -52.376290846572     -4.263E-14 1.916E-18 0.000E+00
 ETOT  179  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  180  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  181  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  182  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  183  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  184  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  185  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  186  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  187  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  188  -52.376290846572     -4.263E-14 1.916E-18 0.000E+00
 ETOT  189  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  190  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  191  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  192  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  193  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  194  -52.376290846572     -2.132E-14 1.917E-18 0.000E+00
 ETOT  195  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  196  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  197  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  198  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  199  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  200  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  201  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  202  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  203  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  204  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  205  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  206  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  207  -52.376290846572      4.263E-14 1.916E-18 0.000E+00
 ETOT  208  -52.376290846572     -3.553E-14 1.916E-18 0.000E+00
 ETOT  209  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  210  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  211  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  212  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  213  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  214  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  215  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  216  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  217  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  218  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  219  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  220  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  221  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  222  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  223  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  224  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  225  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  226  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  227  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  228  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  229  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  230  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  231  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  232  -52.376290846572      3.553E-14 1.916E-18 0.000E+00
 ETOT  233  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  234  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  235  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  236  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  237  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  238  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  239  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  240  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  241  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  242  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  243  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  244  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  245  -52.376290846572     -3.553E-14 1.916E-18 0.000E+00
 ETOT  246  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  247  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  248  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  249  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  250  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  251  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  252  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  253  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  254  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  255  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  256  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  257  -52.376290846572      0.000E+00 1.917E-18 0.000E+00
 ETOT  258  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  259  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  260  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  261  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  262  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  263  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  264  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  265  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  266  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  267  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  268  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  269  -52.376290846572     -3.553E-14 1.916E-18 0.000E+00
 ETOT  270  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  271  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  272  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  273  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  274  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  275  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  276  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  277  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  278  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  279  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  280  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  281  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  282  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  283  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  284  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  285  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  286  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  287  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  288  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  289  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  290  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  291  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  292  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  293  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  294  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  295  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  296  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  297  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  298  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  299  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  300  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  301  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  302  -52.376290846572      3.553E-14 1.916E-18 0.000E+00
 ETOT  303  -52.376290846572     -4.263E-14 1.916E-18 0.000E+00
 ETOT  304  -52.376290846572      4.263E-14 1.916E-18 0.000E+00
 ETOT  305  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  306  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  307  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  308  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  309  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  310  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  311  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  312  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  313  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  314  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  315  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  316  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  317  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  318  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  319  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  320  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  321  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  322  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  323  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  324  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  325  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  326  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  327  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  328  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  329  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  330  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  331  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  332  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  333  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  334  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  335  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  336  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  337  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  338  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  339  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  340  -52.376290846572     -4.263E-14 1.916E-18 0.000E+00
 ETOT  341  -52.376290846572      5.684E-14 1.916E-18 0.000E+00
 ETOT  342  -52.376290846572     -3.553E-14 1.916E-18 0.000E+00
 ETOT  343  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  344  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  345  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  346  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  347  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  348  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  349  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  350  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  351  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  352  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  353  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  354  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  355  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  356  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  357  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  358  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  359  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  360  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  361  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  362  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  363  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  364  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  365  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  366  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  367  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  368  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  369  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  370  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  371  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  372  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  373  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  374  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  375  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  376  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  377  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  378  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  379  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  380  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  381  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  382  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  383  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  384  -52.376290846572     -3.553E-14 1.916E-18 0.000E+00
 ETOT  385  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  386  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  387  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  388  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  389  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  390  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  391  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  392  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  393  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  394  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  395  -52.376290846572     -3.553E-14 1.916E-18 0.000E+00
 ETOT  396  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  397  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  398  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  399  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  400  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  401  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  402  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  403  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  404  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  405  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  406  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  407  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  408  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  409  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  410  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  411  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  412  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  413  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  414  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  415  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  416  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  417  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  418  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  419  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  420  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  421  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  422  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  423  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  424  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  425  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  426  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  427  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  428  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  429  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  430  -52.376290846572     -4.263E-14 1.916E-18 0.000E+00
 ETOT  431  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  432  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  433  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  434  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  435  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  436  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  437  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  438  -52.376290846572     -3.553E-14 1.916E-18 0.000E+00
 ETOT  439  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  440  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  441  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  442  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  443  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  444  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  445  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  446  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  447  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  448  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  449  -52.376290846572      3.553E-14 1.916E-18 0.000E+00
 ETOT  450  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  451  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  452  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  453  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  454  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  455  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  456  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  457  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  458  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  459  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  460  -52.376290846572      2.842E-14 1.916E-18 0.000E+00
 ETOT  461  -52.376290846572     -2.842E-14 1.916E-18 0.000E+00
 ETOT  462  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  463  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  464  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  465  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  466  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  467  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  468  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  469  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  470  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  471  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  472  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  473  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  474  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  475  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  476  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  477  -52.376290846572      4.263E-14 1.916E-18 0.000E+00
 ETOT  478  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  479  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  480  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  481  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  482  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  483  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  484  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  485  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  486  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  487  -52.376290846572      0.000E+00 1.916E-18 0.000E+00
 ETOT  488  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  489  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  490  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  491  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  492  -52.376290846572     -1.421E-14 1.916E-18 0.000E+00
 ETOT  493  -52.376290846572      2.132E-14 1.916E-18 0.000E+00
 ETOT  494  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  495  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  496  -52.376290846572      7.105E-15 1.916E-18 0.000E+00
 ETOT  497  -52.376290846572      1.421E-14 1.916E-18 0.000E+00
 ETOT  498  -52.376290846572     -2.132E-14 1.916E-18 0.000E+00
 ETOT  499  -52.376290846572     -7.105E-15 1.916E-18 0.000E+00
 ETOT  500  -52.376290846572      2.132E-14 1.916E-18 0.000E+00

 scprqt:  WARNING -
  nstep=  500 was not enough SCF cycles to converge;
  maximum residual=  1.916E-18 exceeds tolwfr=  1.000E-22

================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.9823E-20; max=  1.9161E-18
   0.0000  0.0000 -0.0833    1  7.78858E-20 kpt; spin; max resid(k); each band:
  6.49E-23 1.44E-22 1.44E-22 1.41E-22 2.49E-22 2.50E-22 3.60E-21 1.16E-21
  1.15E-21 6.96E-22 6.96E-22 4.78E-21 7.64E-20 7.79E-20 2.47E-21 2.15E-20
   0.0000  0.0000 -0.2500    1  5.18290E-20 kpt; spin; max resid(k); each band:
  1.09E-22 1.21E-22 1.21E-22 1.67E-21 1.68E-21 2.91E-22 1.14E-21 1.14E-21
  9.46E-22 2.55E-21 2.55E-21 9.90E-22 5.18E-20 5.18E-20 1.85E-20 4.10E-21
   0.0000  0.0833 -0.1667    1  8.82231E-20 kpt; spin; max resid(k); each band:
  2.41E-22 2.11E-22 9.39E-23 6.42E-22 1.36E-21 2.69E-22 1.02E-21 1.15E-21
  1.48E-21 2.82E-21 1.65E-21 3.69E-21 3.70E-20 8.82E-20 1.17E-20 2.05E-20
   0.0000  0.1667 -0.0833    1  1.52012E-19 kpt; spin; max resid(k); each band:
  2.71E-22 1.92E-22 1.43E-22 1.57E-22 1.12E-21 2.99E-22 1.08E-21 8.89E-22
  1.06E-21 3.16E-21 1.49E-21 1.40E-20 3.32E-20 1.52E-19 1.93E-20 3.73E-20
   0.0833  0.0000 -0.1667    1  8.82175E-20 kpt; spin; max resid(k); each band:
  2.41E-22 2.11E-22 9.39E-23 6.42E-22 1.37E-21 2.69E-22 1.03E-21 1.15E-21
  1.47E-21 2.80E-21 1.65E-21 3.65E-21 3.70E-20 8.82E-20 1.17E-20 2.06E-20
   0.0833  0.0833 -0.0833    1  7.28488E-20 kpt; spin; max resid(k); each band:
  2.41E-22 1.77E-22 8.58E-23 4.80E-22 2.19E-22 7.62E-22 1.97E-21 7.06E-22
  1.01E-21 1.81E-21 2.01E-21 8.89E-21 7.28E-20 4.38E-20 4.95E-20 1.22E-20
   0.1667  0.0000 -0.0833    1  1.51968E-19 kpt; spin; max resid(k); each band:
  2.77E-22 1.92E-22 1.43E-22 1.57E-22 1.12E-21 2.99E-22 1.07E-21 8.90E-22
  1.06E-21 3.16E-21 1.48E-21 1.39E-20 3.31E-20 1.52E-19 1.96E-20 3.72E-20
   0.0000  0.0000 -0.4167    1  2.12510E-19 kpt; spin; max resid(k); each band:
  1.61E-22 7.55E-22 6.65E-22 3.23E-21 1.38E-21 3.62E-22 5.33E-22 7.19E-22
  3.22E-21 8.93E-22 6.93E-22 1.13E-21 2.98E-20 2.35E-20 3.72E-20 2.13E-19
   0.0000  0.0833 -0.3333    1  3.81148E-19 kpt; spin; max resid(k); each band:
  3.90E-22 6.05E-22 4.20E-22 2.33E-21 2.99E-21 8.88E-22 4.29E-22 1.01E-21
  3.87E-21 6.80E-22 1.34E-21 1.35E-21 3.82E-20 5.68E-20 2.27E-20 3.81E-19
   0.0000  0.1667 -0.2500    1  1.78294E-19 kpt; spin; max resid(k); each band:
  3.06E-22 5.02E-22 6.03E-22 8.37E-22 2.58E-21 4.67E-22 4.81E-22 1.65E-21
  3.15E-21 9.24E-22 8.24E-22 2.50E-21 3.06E-20 1.00E-19 3.45E-20 1.78E-19
   0.0000  0.2500 -0.1667    1  1.63271E-19 kpt; spin; max resid(k); each band:
  2.45E-22 3.14E-22 3.60E-22 3.39E-22 2.31E-21 5.36E-22 6.23E-22 1.66E-21
  2.73E-21 9.53E-22 7.98E-22 1.09E-20 1.73E-20 1.63E-19 9.20E-20 1.06E-20
   0.0000  0.3333 -0.0833    1  2.15722E-19 kpt; spin; max resid(k); each band:
  1.77E-22 2.18E-22 2.38E-22 6.93E-22 2.18E-21 1.06E-21 7.08E-22 7.82E-22
  3.02E-21 7.28E-22 1.14E-21 1.38E-20 1.58E-20 2.16E-19 4.50E-20 1.09E-19
   0.0833  0.0000 -0.3333    1  3.81564E-19 kpt; spin; max resid(k); each band:
  4.02E-22 6.05E-22 4.22E-22 2.33E-21 2.99E-21 8.88E-22 4.28E-22 1.01E-21
  3.87E-21 6.80E-22 1.34E-21 1.34E-21 3.82E-20 5.66E-20 2.27E-20 3.82E-19
   0.0833  0.0833 -0.2500    1  1.98053E-19 kpt; spin; max resid(k); each band:
  3.44E-22 3.63E-22 2.25E-22 2.04E-21 2.37E-21 4.65E-22 9.55E-22 1.63E-21
  6.70E-22 2.24E-21 2.62E-21 1.45E-21 7.19E-20 2.83E-20 3.43E-20 1.98E-19
   0.0833  0.1667 -0.1667    1  9.96737E-20 kpt; spin; max resid(k); each band:
  2.99E-22 2.67E-22 3.63E-22 6.78E-22 1.62E-21 5.55E-22 1.23E-21 1.39E-21
  7.81E-22 2.49E-21 1.79E-21 4.00E-21 4.48E-20 9.97E-20 3.88E-20 5.95E-20
   0.0833  0.2500 -0.0833    1  1.56653E-19 kpt; spin; max resid(k); each band:
  2.95E-22 1.93E-22 2.79E-22 2.25E-22 1.43E-21 4.76E-22 1.71E-21 7.68E-22
  5.76E-22 2.56E-21 1.52E-21 1.34E-20 2.44E-20 1.57E-19 5.93E-20 4.40E-20
   0.1667  0.0000 -0.2500    1  1.75219E-19 kpt; spin; max resid(k); each band:
  3.08E-22 5.02E-22 6.03E-22 8.38E-22 2.56E-21 4.66E-22 4.81E-22 1.65E-21
  3.15E-21 9.24E-22 8.25E-22 2.65E-21 3.11E-20 1.01E-19 3.46E-20 1.75E-19
   0.1667  0.0833 -0.1667    1  9.98176E-20 kpt; spin; max resid(k); each band:
  2.97E-22 2.67E-22 3.63E-22 6.77E-22 1.64E-21 5.55E-22 1.23E-21 1.39E-21
  7.81E-22 2.49E-21 1.79E-21 4.01E-21 4.49E-20 9.98E-20 3.88E-20 5.95E-20
   0.1667  0.1667 -0.0833    1  9.72284E-20 kpt; spin; max resid(k); each band:
  3.45E-22 1.38E-22 1.96E-22 5.04E-22 2.93E-22 1.50E-21 5.15E-22 1.81E-21
  2.83E-22 1.73E-21 2.24E-21 1.14E-20 9.72E-20 2.64E-20 6.58E-20 3.47E-20
   0.2500  0.0000 -0.1667    1  1.63274E-19 kpt; spin; max resid(k); each band:
  2.45E-22 3.14E-22 3.62E-22 3.39E-22 2.31E-21 5.36E-22 6.23E-22 1.64E-21
  2.73E-21 9.47E-22 7.98E-22 1.08E-20 1.84E-20 1.63E-19 9.20E-20 1.06E-20
   0.2500  0.0833 -0.0833    1  1.56651E-19 kpt; spin; max resid(k); each band:
  2.97E-22 1.92E-22 2.79E-22 2.25E-22 1.43E-21 4.76E-22 1.71E-21 7.69E-22
  5.76E-22 2.55E-21 1.52E-21 1.34E-20 2.43E-20 1.57E-19 6.05E-20 4.43E-20
   0.3333  0.0000 -0.0833    1  2.15696E-19 kpt; spin; max resid(k); each band:
  1.77E-22 2.18E-22 2.38E-22 6.93E-22 2.18E-21 1.06E-21 7.09E-22 7.83E-22
  3.01E-21 7.28E-22 1.14E-21 1.38E-20 1.58E-20 2.16E-19 4.50E-20 1.09E-19
   0.0000  0.0833  0.5000    1  1.46959E-19 kpt; spin; max resid(k); each band:
  2.80E-22 7.44E-22 8.07E-22 3.55E-21 3.35E-22 1.10E-21 4.28E-22 1.18E-21
  6.92E-22 3.14E-21 1.23E-21 1.65E-21 2.67E-20 2.78E-20 2.94E-20 1.47E-19
   0.0000  0.1667 -0.4167    1  1.50302E-19 kpt; spin; max resid(k); each band:
  4.36E-22 8.67E-22 7.25E-22 1.31E-21 2.89E-21 5.81E-22 8.39E-22 4.07E-22
  2.82E-21 1.09E-21 6.92E-22 1.98E-21 2.74E-20 3.60E-20 2.47E-20 1.50E-19
   0.0000  0.2500 -0.3333    1  2.31281E-19 kpt; spin; max resid(k); each band:
  6.69E-22 7.71E-22 8.02E-22 1.06E-21 2.61E-21 9.70E-22 1.06E-21 1.70E-22
  2.71E-21 7.54E-22 4.01E-22 3.27E-21 2.60E-20 5.62E-20 6.84E-20 2.31E-19
   0.0000  0.3333 -0.2500    1  9.67522E-20 kpt; spin; max resid(k); each band:
  3.06E-22 5.05E-22 5.22E-22 9.41E-22 2.31E-21 5.48E-22 1.87E-21 2.61E-22
  1.64E-21 7.52E-22 5.66E-22 1.79E-20 4.32E-21 8.17E-20 9.68E-20 4.63E-20
   0.0000  0.4167 -0.1667    1  1.14623E-19 kpt; spin; max resid(k); each band:
  1.04E-22 3.73E-22 3.75E-22 4.95E-22 1.82E-21 9.99E-22 9.47E-22 6.60E-22
  1.93E-21 1.03E-21 4.26E-22 1.40E-20 2.37E-21 1.15E-19 2.56E-20 4.04E-20
   0.0000  0.5000 -0.0833    1  1.65929E-19 kpt; spin; max resid(k); each band:
  9.63E-23 3.23E-22 4.79E-22 1.73E-21 1.08E-21 9.43E-22 3.24E-22 7.41E-22
  1.34E-21 2.33E-21 4.55E-22 1.12E-20 6.01E-21 1.66E-19 7.33E-21 1.18E-19
   0.0833  0.0000  0.5000    1  1.46964E-19 kpt; spin; max resid(k); each band:
  2.80E-22 7.48E-22 8.07E-22 3.55E-21 3.35E-22 1.10E-21 4.28E-22 1.18E-21
  7.01E-22 3.14E-21 1.23E-21 1.67E-21 2.67E-20 2.79E-20 2.96E-20 1.47E-19
   0.0833  0.0833 -0.4167    1  1.46954E-19 kpt; spin; max resid(k); each band:
  2.80E-22 7.48E-22 8.06E-22 3.55E-21 3.34E-22 1.09E-21 4.28E-22 1.18E-21
  7.00E-22 3.14E-21 1.23E-21 1.67E-21 2.66E-20 2.77E-20 2.95E-20 1.47E-19
   0.0833  0.1667 -0.3333    1  3.53962E-19 kpt; spin; max resid(k); each band:
  5.22E-22 6.95E-22 8.34E-22 2.45E-21 6.50E-22 1.78E-21 1.97E-21 1.49E-21
  9.64E-22 1.79E-21 7.41E-22 1.63E-21 4.08E-20 4.03E-20 2.75E-20 3.54E-19
   0.0833  0.2500 -0.2500    1  3.63692E-19 kpt; spin; max resid(k); each band:
  4.96E-22 7.11E-22 6.79E-22 1.20E-21 9.20E-22 2.25E-21 2.29E-21 8.43E-22
  8.29E-22 1.08E-21 8.55E-22 3.55E-21 3.51E-20 7.69E-20 4.88E-20 3.64E-19
   0.0833  0.3333 -0.1667    1  1.47489E-19 kpt; spin; max resid(k); each band:
  3.06E-22 4.79E-22 4.36E-22 3.69E-22 1.29E-21 2.29E-21 2.13E-21 7.02E-22
  5.75E-22 8.85E-22 1.03E-21 1.45E-20 1.36E-20 1.18E-19 1.47E-19 2.72E-20
   0.0833  0.4167 -0.0833    1  1.70544E-19 kpt; spin; max resid(k); each band:
  1.92E-22 2.71E-22 3.91E-22 6.44E-22 1.46E-21 2.38E-21 1.52E-21 1.01E-21
  3.71E-22 1.44E-21 5.47E-22 1.23E-20 2.47E-20 9.13E-20 1.09E-19 1.71E-19
   0.1667  0.0000 -0.4167    1  1.50302E-19 kpt; spin; max resid(k); each band:
  4.36E-22 8.68E-22 7.24E-22 1.32E-21 2.88E-21 5.82E-22 8.45E-22 4.07E-22
  2.82E-21 1.09E-21 6.93E-22 1.98E-21 2.74E-20 3.58E-20 2.47E-20 1.50E-19
   0.1667  0.0833 -0.3333    1  3.60509E-19 kpt; spin; max resid(k); each band:
  5.20E-22 6.96E-22 8.43E-22 2.45E-21 6.48E-22 1.78E-21 1.97E-21 1.50E-21
  9.64E-22 1.79E-21 7.42E-22 1.63E-21 4.13E-20 4.02E-20 2.75E-20 3.61E-19
   0.1667  0.1667 -0.2500    1  4.99259E-19 kpt; spin; max resid(k); each band:
  4.76E-22 7.15E-22 4.09E-22 1.99E-21 2.04E-21 1.00E-21 5.44E-22 1.51E-21
  8.32E-22 1.23E-21 2.03E-21 1.83E-21 8.62E-20 1.55E-20 4.77E-20 4.99E-19
   0.1667  0.2500 -0.1667    1  1.32599E-19 kpt; spin; max resid(k); each band:
  3.07E-22 4.86E-22 3.61E-22 8.92E-22 1.12E-21 6.06E-22 8.00E-22 1.48E-21
  2.36E-21 4.52E-22 1.63E-21 5.11E-21 6.11E-20 5.34E-20 5.02E-20 1.33E-19
   0.1667  0.3333 -0.0833    1  1.24360E-19 kpt; spin; max resid(k); each band:
  2.86E-22 3.48E-22 3.26E-22 3.06E-22 1.24E-21 5.60E-22 8.83E-22 1.57E-21
  1.71E-21 2.55E-22 1.17E-21 1.53E-20 2.35E-20 1.21E-19 2.64E-20 1.24E-19
   0.2500  0.0000 -0.3333    1  2.24998E-19 kpt; spin; max resid(k); each band:
  6.69E-22 7.73E-22 8.02E-22 1.05E-21 2.61E-21 9.75E-22 1.06E-21 1.70E-22
  2.71E-21 7.54E-22 4.01E-22 3.27E-21 2.60E-20 5.63E-20 6.97E-20 2.25E-19
   0.2500  0.0833 -0.2500    1  3.63464E-19 kpt; spin; max resid(k); each band:
  5.01E-22 7.10E-22 6.79E-22 1.19E-21 9.20E-22 2.25E-21 2.29E-21 8.45E-22
  8.30E-22 1.08E-21 8.56E-22 3.20E-21 3.50E-20 7.68E-20 4.89E-20 3.63E-19
   0.2500  0.1667 -0.1667    1  1.35148E-19 kpt; spin; max resid(k); each band:
  3.07E-22 4.86E-22 3.61E-22 8.92E-22 1.13E-21 6.07E-22 8.00E-22 1.48E-21
  2.36E-21 4.52E-22 1.63E-21 5.12E-21 6.11E-20 5.35E-20 4.98E-20 1.35E-19
   0.2500  0.2500 -0.0833    1  7.16189E-20 kpt; spin; max resid(k); each band:
  3.79E-22 1.76E-22 2.54E-22 5.46E-22 3.44E-22 1.17E-21 3.08E-22 1.15E-21
  1.46E-21 8.41E-23 1.70E-21 8.39E-21 6.06E-20 1.13E-20 2.17E-20 7.16E-20
   0.3333  0.0000 -0.2500    1  9.68664E-20 kpt; spin; max resid(k); each band:
  3.06E-22 5.05E-22 5.22E-22 9.41E-22 2.31E-21 5.47E-22 1.87E-21 2.62E-22
  1.64E-21 7.52E-22 5.66E-22 1.79E-20 4.39E-21 8.18E-20 9.69E-20 4.63E-20
   0.3333  0.0833 -0.1667    1  1.47526E-19 kpt; spin; max resid(k); each band:
  3.14E-22 4.79E-22 4.36E-22 3.69E-22 1.29E-21 2.29E-21 2.13E-21 7.03E-22
  5.75E-22 8.85E-22 1.03E-21 1.48E-20 1.35E-20 1.18E-19 1.48E-19 2.72E-20
   0.3333  0.1667 -0.0833    1  1.24256E-19 kpt; spin; max resid(k); each band:
  2.86E-22 3.48E-22 3.26E-22 3.06E-22 1.24E-21 5.56E-22 8.84E-22 1.57E-21
  1.71E-21 2.55E-22 1.17E-21 1.54E-20 2.35E-20 1.21E-19 2.64E-20 1.24E-19
   0.4167  0.0000 -0.1667    1  1.14519E-19 kpt; spin; max resid(k); each band:
  1.04E-22 3.72E-22 3.76E-22 4.95E-22 1.82E-21 1.00E-21 9.47E-22 6.60E-22
  1.93E-21 1.03E-21 4.25E-22 1.40E-20 2.37E-21 1.15E-19 2.58E-20 4.03E-20
   0.4167  0.0833 -0.0833    1  1.69267E-19 kpt; spin; max resid(k); each band:
  1.93E-22 2.71E-22 3.89E-22 6.44E-22 1.46E-21 2.38E-21 1.52E-21 1.01E-21
  3.71E-22 1.44E-21 5.47E-22 1.23E-20 2.49E-20 9.21E-20 1.10E-19 1.69E-19
   0.5000  0.0000 -0.0833    1  1.65924E-19 kpt; spin; max resid(k); each band:
  9.63E-23 3.23E-22 4.80E-22 1.73E-21 1.08E-21 9.46E-22 3.32E-22 7.41E-22
  1.34E-21 2.34E-21 4.55E-22 1.12E-20 6.01E-21 1.66E-19 7.27E-21 1.21E-19
   0.0000  0.0833  0.3333    1  1.89936E-19 kpt; spin; max resid(k); each band:
  3.43E-22 3.63E-22 2.25E-22 2.04E-21 2.37E-21 4.65E-22 9.55E-22 1.63E-21
  6.70E-22 2.24E-21 2.60E-21 1.49E-21 7.19E-20 2.82E-20 3.47E-20 1.90E-19
 outwf : prtvol=0 or 1, do not print more k-points.

 loper3 : ek2=    4.4862765921E+01
          f-sum rule ratio=    1.1060090813E+00
 prteigrs : about to open file tbase3_x_1WF1_EIG
 Expectation of eigenvalue derivatives (hartree) for nkpt= 432  k points:
  (in case of degenerate eigenvalues, averaged derivative)
 kpt#   1, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.0833 (reduced coord)
  -0.01675  -0.00598  -0.00598  -0.02199  -0.01070  -0.01070   0.00627   0.00453
   0.00453   0.01092   0.01092   0.28056   0.05303   0.05303  -0.14782   0.24327
 kpt#   2, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.2500 (reduced coord)
  -0.03414  -0.01967  -0.01967  -0.02488  -0.02488  -0.05505   0.01312   0.01312
   0.00453   0.02901   0.02901   0.32815   0.08003   0.08003   0.15229  -0.35756
 kpt#   3, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833 -0.1667 (reduced coord)
  -0.03084  -0.01420  -0.01282  -0.02271  -0.02355  -0.04614   0.01199   0.00915
   0.00800   0.02827   0.01809   0.29816   0.17477   0.07531   0.03108  -0.20018
 kpt#   4, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.0833 (reduced coord)
  -0.02244  -0.00708  -0.01204  -0.01378  -0.02164  -0.02980   0.01274   0.00557
   0.00231   0.02775   0.00439   0.16331   0.33489   0.02916  -0.27102   0.10467
 kpt#   5, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000 -0.1667 (reduced coord)
  -0.03084  -0.01420  -0.01282  -0.02271  -0.02355  -0.04614   0.01199   0.00915
   0.00800   0.02827   0.01809   0.29816   0.17477   0.07531   0.03108  -0.20018
 kpt#   6, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.0833 (reduced coord)
  -0.02503  -0.00880  -0.00926  -0.01578  -0.02970  -0.02515   0.00948   0.00926
   0.00455   0.02288   0.01131   0.27822   0.12601   0.09229  -0.08810   0.00910
 kpt#   7, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.0833 (reduced coord)
  -0.02244  -0.00708  -0.01204  -0.01378  -0.02164  -0.02980   0.01274   0.00557
   0.00231   0.02775   0.00439   0.16331   0.33489   0.02916  -0.27102   0.10467
 kpt#   8, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0000 -0.4167 (reduced coord)
  -0.01730  -0.01963  -0.01963  -0.03243  -0.03243   0.00276   0.01448   0.01448
   0.03639   0.03639  -0.04700   0.15755   0.03249   0.03249   0.06027  -0.00419
 kpt#   9, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833 -0.3333 (reduced coord)
  -0.02557  -0.02248  -0.02333  -0.02520  -0.03308   0.00275   0.01067   0.01755
   0.03365  -0.05355   0.03262   0.22761   0.06853   0.07565   0.06977  -0.27633
 kpt#  10, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.2500 (reduced coord)
  -0.02823  -0.01898  -0.01600  -0.02476  -0.03291  -0.00241   0.00456   0.02179
   0.02408  -0.03925   0.02405   0.20840   0.16173   0.09893   0.06766  -0.30456
 kpt#  11, nband= 16, wtk=  0.00231, kpt=  0.0000  0.2500 -0.1667 (reduced coord)
  -0.02480  -0.01281  -0.00582  -0.02782  -0.03179   0.00243  -0.00791   0.01772
   0.02145  -0.01762   0.01171   0.06799   0.35461   0.09130  -0.28260   0.06558
 kpt#  12, nband= 16, wtk=  0.00231, kpt=  0.0000  0.3333 -0.0833 (reduced coord)
  -0.01654  -0.00655  -0.00722  -0.01371  -0.02941   0.01019  -0.00081   0.00332
   0.03039  -0.02072  -0.00085   0.04163   0.41205   0.04811  -0.35115   0.19280
 kpt#  13, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000 -0.3333 (reduced coord)
  -0.02557  -0.02248  -0.02333  -0.02520  -0.03308   0.00275   0.01067   0.01755
   0.03365  -0.05355   0.03262   0.22761   0.06853   0.07565   0.06977  -0.27633
 kpt#  14, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.2500 (reduced coord)
  -0.03120  -0.02122  -0.02198  -0.02491  -0.03024  -0.03173   0.01558   0.00040
  -0.01026   0.03237   0.02985   0.27769   0.13514   0.05428   0.09530  -0.36086
 kpt#  15, nband= 16, wtk=  0.00231, kpt=  0.0833  0.1667 -0.1667 (reduced coord)
  -0.03088  -0.01671  -0.01432  -0.02399  -0.02999  -0.04366   0.00754   0.00561
   0.01050   0.02989   0.02049   0.24618   0.19820   0.08700   0.07724  -0.32267
 kpt#  16, nband= 16, wtk=  0.00231, kpt=  0.0833  0.2500 -0.0833 (reduced coord)
  -0.02497  -0.01090  -0.00666  -0.02502  -0.02492  -0.03127   0.00692   0.00628
   0.00613   0.02784   0.00850   0.12718   0.33855   0.04087  -0.27460   0.08538
 kpt#  17, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.2500 (reduced coord)
  -0.02823  -0.01898  -0.01600  -0.02476  -0.03291  -0.00241   0.00456   0.02179
   0.02408  -0.03925   0.02405   0.20840   0.16173   0.09893   0.06766  -0.30456
 kpt#  18, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0833 -0.1667 (reduced coord)
  -0.03088  -0.01671  -0.01432  -0.02399  -0.02999  -0.04366   0.00754   0.00561
   0.01050   0.02989   0.02049   0.24618   0.19820   0.08700   0.07724  -0.32267
 kpt#  19, nband= 16, wtk=  0.00231, kpt=  0.1667  0.1667 -0.0833 (reduced coord)
  -0.02808  -0.00928  -0.01151  -0.02053  -0.03150  -0.03725   0.01181   0.00891
   0.00752   0.02605   0.01175   0.22237   0.21002   0.09136   0.04860  -0.24258
 kpt#  20, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0000 -0.1667 (reduced coord)
  -0.02480  -0.01281  -0.00582  -0.02782  -0.03179   0.00243  -0.00791   0.01772
   0.02145  -0.01762   0.01171   0.06799   0.35461   0.09130  -0.28260   0.06558
 kpt#  21, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0833 -0.0833 (reduced coord)
  -0.02497  -0.01090  -0.00666  -0.02502  -0.02492  -0.03127   0.00692   0.00628
   0.00613   0.02784   0.00850   0.12718   0.33855   0.04087  -0.27460   0.08538
 kpt#  22, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0000 -0.0833 (reduced coord)
  -0.01654  -0.00655  -0.00722  -0.01371  -0.02941   0.01019  -0.00081   0.00332
   0.03039  -0.02072  -0.00085   0.04163   0.41205   0.04811  -0.35115   0.19280
 kpt#  23, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833  0.5000 (reduced coord)
   0.00576   0.01218   0.00481   0.02758  -0.00601  -0.02582   0.00105   0.01827
   0.00346  -0.03642   0.01807  -0.05242  -0.03928   0.01831  -0.02205   0.03480
 kpt#  24, nband= 16, wtk=  0.00231, kpt=  0.0000  0.1667 -0.4167 (reduced coord)
  -0.00560  -0.01333  -0.01448  -0.00021   0.02929  -0.00685   0.01069  -0.00229
  -0.03424   0.03119  -0.01587   0.05252  -0.02784   0.06657   0.01926  -0.05606
 kpt#  25, nband= 16, wtk=  0.00231, kpt=  0.0000  0.2500 -0.3333 (reduced coord)
  -0.01350  -0.01522  -0.01723   0.00886   0.03298  -0.01048   0.00194  -0.00083
  -0.02932   0.02582  -0.03344   0.08560   0.03862   0.10478   0.06615  -0.20236
 kpt#  26, nband= 16, wtk=  0.00231, kpt=  0.0000  0.3333 -0.2500 (reduced coord)
  -0.01598  -0.00344  -0.01314   0.01013   0.03253  -0.01686  -0.01021  -0.00507
  -0.02289   0.01576  -0.02654  -0.09597   0.29469   0.12558  -0.06549  -0.15289
 kpt#  27, nband= 16, wtk=  0.00231, kpt=  0.0000  0.4167 -0.1667 (reduced coord)
  -0.01274  -0.00599   0.00244   0.00556   0.02933  -0.00570  -0.00627  -0.01048
  -0.02974   0.00425  -0.01117  -0.08108   0.33142   0.12052  -0.28937   0.12287
 kpt#  28, nband= 16, wtk=  0.00231, kpt=  0.0000  0.5000 -0.0833 (reduced coord)
  -0.00483   0.00162   0.00118   0.02380   0.00589   0.00869  -0.00102  -0.00546
  -0.01276  -0.03257   0.00350  -0.06640   0.34958   0.08338  -0.39038   0.31658
 kpt#  29, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0000  0.5000 (reduced coord)
   0.00576   0.01218   0.00481   0.02758  -0.00601  -0.02582   0.00105   0.01827
   0.00346  -0.03642   0.01807  -0.05242  -0.03928   0.01831  -0.02205   0.03480
 kpt#  30, nband= 16, wtk=  0.00231, kpt=  0.0833  0.0833 -0.4167 (reduced coord)
  -0.00576  -0.01218  -0.00481  -0.02758   0.00601   0.02582  -0.00105  -0.01827
  -0.00346   0.03642  -0.01807   0.05242   0.03928  -0.01831   0.02205  -0.03480
 kpt#  31, nband= 16, wtk=  0.00231, kpt=  0.0833  0.1667 -0.3333 (reduced coord)
  -0.01556  -0.01883  -0.02272  -0.01370   0.00486  -0.01963   0.02310   0.00368
   0.01090   0.03421  -0.04523   0.13544   0.05800   0.04154   0.04131  -0.14389
 kpt#  32, nband= 16, wtk=  0.00231, kpt=  0.0833  0.2500 -0.2500 (reduced coord)
  -0.02084  -0.01625  -0.01710  -0.01783   0.00941  -0.03371   0.03289   0.00661
   0.00928   0.02609  -0.05253   0.12978   0.13139   0.09676   0.06945  -0.28155
 kpt#  33, nband= 16, wtk=  0.00231, kpt=  0.0833  0.3333 -0.1667 (reduced coord)
  -0.02038  -0.00545  -0.01161  -0.02360   0.01167  -0.03206   0.03133  -0.00030
   0.00354   0.01503  -0.03710  -0.00560   0.31349   0.11239  -0.24744   0.02032
 kpt#  34, nband= 16, wtk=  0.00231, kpt=  0.0833  0.4167 -0.0833 (reduced coord)
  -0.01463  -0.00600  -0.00184  -0.01496   0.01013  -0.01634   0.01921  -0.00621
  -0.00135   0.00464  -0.02105  -0.01955   0.33840   0.08144  -0.30738   0.16850
 kpt#  35, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0000 -0.4167 (reduced coord)
  -0.00560  -0.01333  -0.01448  -0.00021   0.02929  -0.00685   0.01069  -0.00229
  -0.03424   0.03119  -0.01587   0.05252  -0.02784   0.06657   0.01926  -0.05606
 kpt#  36, nband= 16, wtk=  0.00231, kpt=  0.1667  0.0833 -0.3333 (reduced coord)
  -0.01556  -0.01883  -0.02272  -0.01370   0.00486  -0.01963   0.02310   0.00368
   0.01090   0.03421  -0.04523   0.13544   0.05800   0.04154   0.04131  -0.14389
 kpt#  37, nband= 16, wtk=  0.00231, kpt=  0.1667  0.1667 -0.2500 (reduced coord)
  -0.02273  -0.02290  -0.01889  -0.01773  -0.02921   0.00464   0.01138   0.03143
   0.00993  -0.05623   0.03073   0.18297   0.16316   0.01413   0.04305  -0.29459
 kpt#  38, nband= 16, wtk=  0.00231, kpt=  0.1667  0.2500 -0.1667 (reduced coord)
  -0.02507  -0.01537  -0.01501  -0.02015  -0.02971   0.00541   0.02322   0.01771
  -0.04494   0.00028   0.02183   0.15769   0.21897   0.07338  -0.02548  -0.27619
 kpt#  39, nband= 16, wtk=  0.00231, kpt=  0.1667  0.3333 -0.0833 (reduced coord)
  -0.02213  -0.00618  -0.01112  -0.02486  -0.02336   0.00778   0.01793   0.01142
  -0.03053   0.00058   0.01047   0.07656   0.27262   0.08489  -0.21604  -0.00809
 kpt#  40, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0000 -0.3333 (reduced coord)
  -0.01350  -0.01522  -0.01723   0.00886   0.03298  -0.01048   0.00194  -0.00083
  -0.02932   0.02582  -0.03344   0.08560   0.03862   0.10478   0.06615  -0.20236
 kpt#  41, nband= 16, wtk=  0.00231, kpt=  0.2500  0.0833 -0.2500 (reduced coord)
  -0.02084  -0.01625  -0.01710  -0.01783   0.00941  -0.03371   0.03289   0.00661
   0.00928   0.02609  -0.05253   0.12978   0.13139   0.09676   0.06945  -0.28155
 kpt#  42, nband= 16, wtk=  0.00231, kpt=  0.2500  0.1667 -0.1667 (reduced coord)
  -0.02507  -0.01537  -0.01501  -0.02015  -0.02971   0.00541   0.02322   0.01771
  -0.04494   0.00028   0.02183   0.15769   0.21897   0.07338  -0.02548  -0.27619
 kpt#  43, nband= 16, wtk=  0.00231, kpt=  0.2500  0.2500 -0.0833 (reduced coord)
  -0.02494  -0.00977  -0.01204  -0.01897  -0.02812  -0.01307   0.01077   0.02861
  -0.02444   0.00385   0.01217   0.15153   0.25385   0.06695  -0.10062  -0.14683
 kpt#  44, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0000 -0.2500 (reduced coord)
  -0.01598  -0.00344  -0.01314   0.01013   0.03253  -0.01686  -0.01021  -0.00507
  -0.02289   0.01576  -0.02654  -0.09597   0.29469   0.12558  -0.06549  -0.15289
 kpt#  45, nband= 16, wtk=  0.00231, kpt=  0.3333  0.0833 -0.1667 (reduced coord)
  -0.02038  -0.00545  -0.01161  -0.02360   0.01167  -0.03206   0.03133  -0.00030
   0.00354   0.01503  -0.03710  -0.00560   0.31349   0.11239  -0.24744   0.02032
 kpt#  46, nband= 16, wtk=  0.00231, kpt=  0.3333  0.1667 -0.0833 (reduced coord)
  -0.02213  -0.00618  -0.01112  -0.02486  -0.02336   0.00778   0.01793   0.01142
  -0.03053   0.00058   0.01047   0.07656   0.27262   0.08489  -0.21604  -0.00809
 kpt#  47, nband= 16, wtk=  0.00231, kpt=  0.4167  0.0000 -0.1667 (reduced coord)
  -0.01274  -0.00599   0.00244   0.00556   0.02933  -0.00570  -0.00627  -0.01048
  -0.02974   0.00425  -0.01117  -0.08108   0.33142   0.12052  -0.28937   0.12287
 kpt#  48, nband= 16, wtk=  0.00231, kpt=  0.4167  0.0833 -0.0833 (reduced coord)
  -0.01463  -0.00600  -0.00184  -0.01496   0.01013  -0.01634   0.01921  -0.00621
  -0.00135   0.00464  -0.02105  -0.01955   0.33840   0.08144  -0.30738   0.16850
 kpt#  49, nband= 16, wtk=  0.00231, kpt=  0.5000  0.0000 -0.0833 (reduced coord)
  -0.00483   0.00162   0.00118   0.02380   0.00589   0.00869  -0.00102  -0.00546
  -0.01276  -0.03257   0.00350  -0.06640   0.34958   0.08338  -0.39038   0.31658
 kpt#  50, nband= 16, wtk=  0.00231, kpt=  0.0000  0.0833  0.3333 (reduced coord)
   0.03120   0.02122   0.02198   0.02491   0.03024   0.03173  -0.01558  -0.00040
   0.01026  -0.03237  -0.02985  -0.27769  -0.13514  -0.05428  -0.09530   0.36086
 prteigrs : prtvol=0 or 1, do not print more k-points.


 Eight components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   6.57646699E+01 eigvalue=   9.96467777E+00  local=  -7.71200193E+00
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
     kin1=  -4.96186265E+01  Hartree=   0.00000000E+00     xc=   0.00000000E+00
 7,8,9: eventually, occupation + non-local contributions
    edocc=   4.53313314E+00     enl0=  -2.01741881E+01   enl1=  -5.51339552E+01
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -5.23762908E+01
  No Ewald or frozen-wf contrib.: the relaxation energy is the total one
 2DEtotal=   -0.5237629085E+02 Ha. Also 2DEtotal=   -0.142523135539E+04 eV
    (  non-var. 2DEtotal :   -5.2376290846E+01 Ha)
================================================================================

 ---- first-order wavefunction calculations are completed ----


 Total localisation tensor (bohr^2) in cartesian coordinates
  WARNING : still subject to testing - especially symmetries.
      direction              matrix element
   alpha     beta       real part   imaginary part
     1        1       4.7693063826    0.0000000000
     1        2       2.3846531913    0.0000000000
     1        3       2.3846531913    0.0000000000
     2        1       2.3846531913    0.0000000000
     2        2       4.7693063826    0.0000000000
     2        3       2.3846531913    0.0000000000
     3        1       2.3846531913    0.0000000000
     3        2       2.3846531913    0.0000000000
     3        3       4.7693063826    0.0000000000

 respfn : d/dk was computed, but no 2DTE, so no DDB output.

================================================================================
== DATASET  4 ==================================================================
-   nproc =    8

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   2.

 mkfilename : getddk/=0, take file _1WF from output of DATASET   3.

 find_getdtset : getcell/=0, take data from output of dataset with index  2.

 find_getdtset : getxred/=0, take data from output of dataset with index  2.

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  6.2927880  6.2927880  G(1)= -0.0794560  0.0794560  0.0794560
 R(2)=  6.2927880  0.0000000  6.2927880  G(2)=  0.0794560 -0.0794560  0.0794560
 R(3)=  6.2927880  6.2927880  0.0000000  G(3)=  0.0794560  0.0794560 -0.0794560
 Unit cell volume ucvol=  4.9837851E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 setup1 : take into account q-point for computing boxcut.

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  72  72
         ecut(hartree)=     70.000   => boxcut(ratio)=   2.14813
--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

 symkchk : k-point set has full space-group symmetry.

 ==>  initialize data related to q vector <== 

 The list of irreducible perturbations for this q vector is:
    1)    idir= 1    ipert=   1
    2)    idir= 1    ipert=   3
    3)    idir= 1    ipert=   5
    4)    idir= 1    ipert=   6
    5)    idir= 2    ipert=   6
    6)    idir= 3    ipert=   6
    7)    idir= 1    ipert=   7
    8)    idir= 2    ipert=   7
    9)    idir= 3    ipert=   7

================================================================================

 The perturbation idir=   2  ipert=   1 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   3  ipert=   1 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   1  ipert=   2 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   2  ipert=   2 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   3  ipert=   2 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   2  ipert=   3 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   3  ipert=   3 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   2  ipert=   5 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


 The perturbation idir=   3  ipert=   5 is
 symmetric of a previously calculated perturbation.
 So, its SCF calculation is not needed.


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : displacement of atom   1   along direction   1
 Found     2 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to   234 .

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13926, make ikpt,npw=   6   13926
- newkpt: read input wf with ikpt,npw=   7   13945, make ikpt,npw=   7   13945
- newkpt: read input wf with ikpt,npw=   8   13937, make ikpt,npw=   8   13937
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13937, make ikpt,npw=  10   13937
- newkpt: read input wf with ikpt,npw=  11   13932, make ikpt,npw=  11   13932
- newkpt: read input wf with ikpt,npw=  12   13934, make ikpt,npw=  12   13934
- newkpt: read input wf with ikpt,npw=  13   13934, make ikpt,npw=  13   13934
- newkpt: read input wf with ikpt,npw=  14   13950, make ikpt,npw=  14   13950
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13929, make ikpt,npw=  16   13929
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13937, make ikpt,npw=  19   13937
- newkpt: read input wf with ikpt,npw=  20   13960, make ikpt,npw=  20   13960
- newkpt: read input wf with ikpt,npw=  21   13948, make ikpt,npw=  21   13948
- newkpt: read input wf with ikpt,npw=  22   13929, make ikpt,npw=  22   13929
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13960, make ikpt,npw=  24   13960
- newkpt: read input wf with ikpt,npw=  25   13931, make ikpt,npw=  25   13931
- newkpt: read input wf with ikpt,npw=  26   13936, make ikpt,npw=  26   13936
- newkpt: read input wf with ikpt,npw=  27   13936, make ikpt,npw=  27   13936
- newkpt: read input wf with ikpt,npw=  28   13931, make ikpt,npw=  28   13931
- newkpt: read input wf with ikpt,npw=  29   13948, make ikpt,npw=  29   13948
- newkpt: read input wf with ikpt,npw=  30   13931, make ikpt,npw=  30   13931

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13926, make ikpt,npw=   6   13926
- newkpt: read input wf with ikpt,npw=   7   13945, make ikpt,npw=   7   13945
- newkpt: read input wf with ikpt,npw=   8   13937, make ikpt,npw=   8   13937
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13937, make ikpt,npw=  10   13937
- newkpt: read input wf with ikpt,npw=  11   13932, make ikpt,npw=  11   13932
- newkpt: read input wf with ikpt,npw=  12   13934, make ikpt,npw=  12   13934
- newkpt: read input wf with ikpt,npw=  13   13934, make ikpt,npw=  13   13934
- newkpt: read input wf with ikpt,npw=  14   13950, make ikpt,npw=  14   13950
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13929, make ikpt,npw=  16   13929
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13937, make ikpt,npw=  19   13937
- newkpt: read input wf with ikpt,npw=  20   13960, make ikpt,npw=  20   13960
- newkpt: read input wf with ikpt,npw=  21   13948, make ikpt,npw=  21   13948
- newkpt: read input wf with ikpt,npw=  22   13929, make ikpt,npw=  22   13929
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13960, make ikpt,npw=  24   13960
- newkpt: read input wf with ikpt,npw=  25   13931, make ikpt,npw=  25   13931
- newkpt: read input wf with ikpt,npw=  26   13936, make ikpt,npw=  26   13936
- newkpt: read input wf with ikpt,npw=  27   13936, make ikpt,npw=  27   13936
- newkpt: read input wf with ikpt,npw=  28   13931, make ikpt,npw=  28   13931
- newkpt: read input wf with ikpt,npw=  29   13948, make ikpt,npw=  29   13948
- newkpt: read input wf with ikpt,npw=  30   13931, make ikpt,npw=  30   13931

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  17 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  18 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  19 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  20 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  21 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  22 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  23 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  24 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  25 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  26 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  27 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  28 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  29 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  30 by node    0
P newkpt: treating     16 bands with npw=   13941 for ikpt=  31 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  32 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  33 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  34 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  35 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  36 by node    1
P newkpt: treating     16 bands with npw=   13966 for ikpt=  37 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  38 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  39 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  40 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  41 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  42 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  43 by node    1
P newkpt: treating     16 bands with npw=   13932 for ikpt=  44 by node    1
P newkpt: treating     16 bands with npw=   13941 for ikpt=  45 by node    1
P newkpt: treating     16 bands with npw=   13954 for ikpt=  46 by node    1
P newkpt: treating     16 bands with npw=   13939 for ikpt=  47 by node    1
P newkpt: treating     16 bands with npw=   13932 for ikpt=  48 by node    1
P newkpt: treating     16 bands with npw=   13937 for ikpt=  49 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  50 by node    1
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   7393.9999184394     -1.603E+04 6.073E+00 3.877E+07
 ETOT  2   5081.0551312522     -2.313E+03 5.717E+00 9.875E+06
 ETOT  3   3921.6887100326     -1.159E+03 5.156E-01 8.797E+04
 ETOT  4   3914.7366525620     -6.952E+00 3.183E-02 2.585E+03
 ETOT  5   3914.5386809774     -1.980E-01 3.146E-03 3.094E+02
 ETOT  6   3914.5168864507     -2.179E-02 5.078E-04 9.841E+00
 ETOT  7   3914.5165125085     -3.739E-04 5.411E-05 3.677E-01
 ETOT  8   3914.5165021949     -1.031E-05 1.881E-06 2.404E-02
 ETOT  9   3914.5165013918     -8.031E-07 2.383E-07 6.862E-04
 ETOT 10   3914.5165013619     -2.994E-08 1.092E-08 2.193E-05
 ETOT 11   3914.5165013603     -1.568E-09 1.899E-09 3.290E-06
 ETOT 12   3914.5165013600     -3.383E-10 8.229E-11 1.662E-07
 ETOT 13   3914.5165013599     -4.366E-11 1.558E-11 2.363E-09
 ETOT 14   3914.5165013600      6.912E-11 7.161E-13 1.535E-10
 ETOT 15   3914.5165013599     -5.093E-11 1.360E-13 1.910E-11
 ETOT 16   3914.5165013600      6.185E-11 6.481E-15 4.802E-13
 ETOT 17   3914.5165013599     -1.128E-10 1.168E-15 8.841E-14
 ETOT 18   3914.5165013599      1.819E-11 6.861E-17 1.206E-14
 ETOT 19   3914.5165013599     -1.819E-11 1.229E-17 9.062E-16
 ETOT 20   3914.5165013599     -2.183E-11 1.541E-18 2.420E-17
 ETOT 21   3914.5165013599      0.000E+00 1.294E-18 2.595E-18
 ETOT 22   3914.5165013599      1.455E-11 1.038E-18 4.370E-19

 At SCF step   22       vres2   =  4.37E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   1.5341E-20; max=  1.0377E-18
   0.0000  0.0000 -0.0833    1  3.58377E-20 kpt; spin; max resid(k); each band:
  3.39E-21 1.73E-20 1.66E-20 5.90E-21 3.15E-21 6.97E-21 4.86E-21 1.39E-20
  1.26E-20 4.24E-21 8.84E-21 1.12E-20 4.86E-21 4.98E-21 1.19E-20 3.58E-20
   0.0000  0.0000 -0.2500    1  6.46835E-20 kpt; spin; max resid(k); each band:
  4.04E-21 1.15E-20 1.29E-20 9.26E-21 1.15E-20 3.97E-21 8.09E-21 7.40E-21
  3.36E-21 1.33E-20 1.55E-20 2.64E-20 8.94E-21 9.43E-21 6.47E-20 2.88E-20
   0.0000  0.0833 -0.1667    1  4.61071E-20 kpt; spin; max resid(k); each band:
  5.17E-21 1.53E-20 1.27E-20 1.11E-20 7.27E-21 3.57E-21 1.25E-20 1.85E-21
  1.10E-20 1.07E-20 1.32E-20 2.75E-20 4.61E-20 4.70E-21 4.11E-20 4.59E-20
   0.0833  0.0000 -0.1667    1  4.58772E-20 kpt; spin; max resid(k); each band:
  3.46E-21 1.49E-20 1.61E-20 5.89E-21 1.13E-20 3.70E-21 6.18E-21 4.22E-21
  1.16E-20 1.31E-20 1.22E-20 1.99E-20 1.64E-20 6.55E-21 4.59E-20 1.78E-20
   0.0833  0.0833 -0.0833    1  5.26721E-20 kpt; spin; max resid(k); each band:
  3.97E-21 1.50E-20 1.28E-20 4.12E-21 8.20E-21 7.17E-21 9.77E-21 7.69E-21
  6.06E-21 1.25E-20 6.85E-21 1.84E-20 1.81E-20 1.18E-20 2.40E-20 5.27E-20
   0.1667  0.0000 -0.0833    1  2.86378E-20 kpt; spin; max resid(k); each band:
  3.10E-21 1.46E-20 1.32E-20 9.96E-21 1.32E-20 5.94E-21 5.91E-21 4.98E-21
  1.34E-20 1.21E-20 1.50E-20 1.37E-20 1.80E-20 7.13E-21 2.86E-20 2.63E-20
   0.0000  0.0000 -0.4167    1  1.03772E-18 kpt; spin; max resid(k); each band:
  2.66E-21 1.09E-20 9.25E-21 1.59E-20 1.92E-20 7.37E-21 1.64E-20 1.04E-20
  1.90E-20 2.16E-20 6.21E-21 2.12E-20 3.89E-21 5.99E-21 1.76E-20 1.04E-18
   0.0000  0.0833 -0.3333    1  4.44545E-20 kpt; spin; max resid(k); each band:
  4.68E-21 1.19E-20 1.40E-20 9.35E-21 1.51E-20 5.31E-21 6.76E-21 1.22E-20
  1.87E-20 6.07E-21 2.29E-20 3.35E-20 4.42E-20 6.03E-21 3.72E-20 4.45E-20
   0.0000  0.1667 -0.2500    1  5.03551E-20 kpt; spin; max resid(k); each band:
  4.91E-21 1.05E-20 1.68E-20 6.07E-21 1.24E-20 4.75E-21 6.71E-21 1.01E-20
  1.41E-20 7.10E-21 2.21E-20 3.21E-20 5.04E-20 4.02E-21 3.31E-20 2.40E-20
   0.0833  0.0000 -0.3333    1  5.41902E-20 kpt; spin; max resid(k); each band:
  2.63E-21 1.01E-20 1.32E-20 1.06E-20 1.82E-20 6.23E-21 8.26E-21 1.11E-20
  2.05E-20 5.17E-21 1.63E-20 2.59E-20 1.65E-20 4.94E-21 3.68E-20 5.42E-20
   0.0833  0.0833 -0.2500    1  5.06602E-20 kpt; spin; max resid(k); each band:
  3.73E-21 1.39E-20 1.19E-20 8.19E-21 1.39E-20 4.44E-21 6.50E-21 1.19E-20
  4.10E-21 1.92E-20 1.42E-20 2.88E-20 2.82E-20 1.27E-20 4.04E-20 5.07E-20
   0.0833  0.1667 -0.1667    1  5.03775E-20 kpt; spin; max resid(k); each band:
  4.77E-21 1.11E-20 1.31E-20 9.93E-21 1.09E-20 3.43E-21 1.17E-20 5.90E-21
  6.22E-21 1.42E-20 1.53E-20 2.97E-20 5.04E-20 5.14E-21 4.15E-20 4.73E-20
   0.0833  0.2500 -0.0833    1  5.09543E-20 kpt; spin; max resid(k); each band:
  4.77E-21 1.11E-20 1.31E-20 9.94E-21 1.09E-20 3.44E-21 1.17E-20 5.90E-21
  6.22E-21 1.42E-20 1.53E-20 2.97E-20 5.10E-20 5.21E-21 4.13E-20 4.77E-20
   0.1667  0.0000 -0.2500    1  5.10557E-20 kpt; spin; max resid(k); each band:
  2.34E-21 1.36E-20 1.01E-20 6.00E-21 1.84E-20 4.56E-21 4.92E-21 1.51E-20
  1.69E-20 4.20E-21 1.06E-20 2.05E-20 1.72E-20 6.83E-21 5.11E-20 1.48E-20
   0.1667  0.0833 -0.1667    1  5.79165E-20 kpt; spin; max resid(k); each band:
  2.80E-21 1.29E-20 1.10E-20 3.96E-21 1.54E-20 4.46E-21 4.66E-21 1.09E-20
  7.11E-21 1.94E-20 6.96E-21 2.04E-20 1.90E-20 1.15E-20 5.79E-20 2.59E-20
   0.1667  0.1667 -0.0833    1  6.04823E-20 kpt; spin; max resid(k); each band:
  3.18E-21 8.55E-21 1.09E-20 6.68E-21 1.14E-20 8.94E-21 6.55E-21 9.13E-21
  5.99E-21 1.74E-20 6.54E-21 1.92E-20 2.45E-20 1.57E-20 6.05E-20 2.15E-20
   0.2500  0.0000 -0.1667    1  4.63596E-20 kpt; spin; max resid(k); each band:
  2.29E-21 1.55E-20 1.34E-20 5.56E-21 1.89E-20 4.57E-21 3.94E-21 1.69E-20
  1.66E-20 4.66E-21 1.49E-20 1.43E-20 1.95E-20 7.82E-21 3.60E-20 4.64E-20
   0.2500  0.0833 -0.0833    1  8.32063E-20 kpt; spin; max resid(k); each band:
  2.32E-21 1.21E-20 1.22E-20 6.31E-21 1.55E-20 6.32E-21 7.54E-21 9.40E-21
  7.91E-21 2.04E-20 8.44E-21 1.47E-20 2.00E-20 8.03E-21 2.43E-20 8.32E-20
   0.3333  0.0000 -0.0833    1  9.99317E-20 kpt; spin; max resid(k); each band:
  2.42E-21 1.53E-20 1.87E-20 1.44E-20 1.95E-20 6.81E-21 5.68E-21 1.63E-20
  1.88E-20 5.24E-21 2.80E-20 1.26E-20 1.83E-20 7.55E-21 2.47E-20 9.99E-20
   0.0000  0.0833  0.5000    1  4.19470E-19 kpt; spin; max resid(k); each band:
  3.59E-21 2.99E-21 1.10E-20 1.78E-20 5.50E-21 1.76E-20 1.32E-20 1.29E-20
  1.18E-20 2.06E-20 5.98E-21 2.86E-20 2.64E-20 6.40E-21 3.49E-20 4.19E-19
   0.0000  0.1667 -0.4167    1  1.08194E-19 kpt; spin; max resid(k); each band:
  3.36E-21 7.62E-21 8.92E-21 1.12E-20 2.29E-20 2.75E-21 8.70E-21 4.78E-21
  2.22E-20 2.15E-20 5.82E-21 2.84E-20 2.84E-20 7.36E-21 1.89E-20 1.08E-19
   0.0000  0.2500 -0.3333    1  3.26618E-20 kpt; spin; max resid(k); each band:
  3.67E-21 1.45E-20 7.31E-21 5.92E-21 2.13E-20 1.55E-21 9.04E-21 6.28E-21
  1.82E-20 2.29E-20 6.25E-21 3.20E-20 3.27E-20 9.99E-21 1.40E-20 2.58E-20
   0.0833  0.0000  0.5000    1  1.39049E-19 kpt; spin; max resid(k); each band:
  2.01E-21 7.83E-21 6.70E-21 1.77E-20 9.67E-21 1.75E-20 7.01E-21 1.42E-20
  1.45E-20 2.00E-20 6.43E-21 2.09E-20 1.11E-20 6.78E-21 1.62E-20 1.39E-19
   0.0833  0.0833 -0.4167    1  1.42464E-19 kpt; spin; max resid(k); each band:
  2.00E-21 7.83E-21 6.70E-21 1.77E-20 9.67E-21 1.75E-20 7.00E-21 1.42E-20
  1.45E-20 2.00E-20 6.43E-21 2.09E-20 1.11E-20 6.71E-21 1.62E-20 1.42E-19
   0.0833  0.1667 -0.3333    1  6.54243E-20 kpt; spin; max resid(k); each band:
  3.43E-21 1.04E-20 1.32E-20 8.26E-21 6.96E-21 1.85E-20 2.21E-20 9.52E-21
  1.09E-20 2.24E-20 6.62E-21 3.04E-20 3.09E-20 5.96E-21 2.53E-20 6.54E-20
   0.0833  0.2500 -0.2500    1  5.72513E-20 kpt; spin; max resid(k); each band:
  3.76E-21 1.57E-20 9.12E-21 4.61E-21 6.63E-21 1.79E-20 1.97E-20 7.31E-21
  8.91E-21 2.24E-20 7.30E-21 3.02E-20 3.75E-20 4.73E-21 3.03E-20 5.73E-20
   0.0833  0.3333 -0.1667    1  5.47186E-20 kpt; spin; max resid(k); each band:
  3.80E-21 1.57E-20 9.12E-21 4.61E-21 6.63E-21 1.79E-20 1.97E-20 7.31E-21
  8.91E-21 2.24E-20 7.30E-21 2.99E-20 3.80E-20 4.83E-21 2.96E-20 5.47E-20
   0.0833  0.4167 -0.0833    1  6.26098E-20 kpt; spin; max resid(k); each band:
  3.45E-21 1.04E-20 1.32E-20 8.26E-21 6.95E-21 1.85E-20 2.21E-20 9.52E-21
  1.09E-20 2.24E-20 6.62E-21 3.00E-20 3.16E-20 6.08E-21 2.50E-20 6.26E-20
   0.1667  0.0000 -0.4167    1  4.64456E-20 kpt; spin; max resid(k); each band:
  1.79E-21 7.35E-21 9.17E-21 1.06E-20 2.00E-20 6.52E-21 7.27E-21 7.23E-21
  1.99E-20 1.38E-20 6.61E-21 2.20E-20 1.03E-20 9.99E-21 1.82E-20 4.64E-20
   0.1667  0.0833 -0.3333    1  9.02584E-20 kpt; spin; max resid(k); each band:
  1.46E-21 8.11E-21 1.11E-20 8.71E-21 8.73E-21 1.63E-20 2.04E-20 1.07E-20
  1.15E-20 1.22E-20 7.04E-21 2.34E-20 7.69E-21 1.41E-20 1.71E-20 9.03E-20
   0.1667  0.1667 -0.2500    1  7.69840E-20 kpt; spin; max resid(k); each band:
  2.26E-21 1.03E-20 9.19E-21 7.23E-21 1.57E-20 8.24E-21 6.96E-21 2.07E-20
  8.81E-21 6.16E-21 1.15E-20 2.63E-20 1.97E-20 1.55E-20 4.28E-20 7.70E-20
   0.1667  0.2500 -0.1667    1  5.64830E-20 kpt; spin; max resid(k); each band:
  2.94E-21 1.23E-20 6.68E-21 7.62E-21 1.40E-20 5.61E-21 1.42E-20 9.18E-21
  9.03E-21 4.32E-21 1.35E-20 2.25E-20 3.30E-20 8.11E-21 5.65E-20 4.68E-20
   0.1667  0.3333 -0.0833    1  5.50333E-20 kpt; spin; max resid(k); each band:
  2.94E-21 1.23E-20 6.68E-21 7.62E-21 1.40E-20 5.60E-21 1.42E-20 9.16E-21
  9.00E-21 4.32E-21 1.35E-20 2.27E-20 3.37E-20 8.27E-21 5.50E-20 4.73E-20
   0.2500  0.0000 -0.3333    1  3.21128E-20 kpt; spin; max resid(k); each band:
  1.57E-21 7.54E-21 1.15E-20 6.62E-21 2.04E-20 5.07E-21 1.17E-20 5.53E-21
  1.91E-20 9.91E-21 5.64E-21 2.18E-20 1.12E-20 1.25E-20 3.21E-20 9.93E-21
   0.2500  0.0833 -0.2500    1  5.26170E-20 kpt; spin; max resid(k); each band:
  1.39E-21 6.04E-21 1.28E-20 5.86E-21 6.87E-21 1.74E-20 2.21E-20 8.08E-21
  8.63E-21 6.47E-21 5.60E-21 2.18E-20 1.37E-20 1.22E-20 5.26E-20 2.54E-20
   0.2500  0.1667 -0.1667    1  7.96597E-20 kpt; spin; max resid(k); each band:
  1.88E-21 6.44E-21 1.07E-20 5.19E-21 1.51E-20 5.64E-21 1.33E-20 1.39E-20
  1.00E-20 2.47E-21 5.26E-21 1.86E-20 1.59E-20 1.67E-20 7.97E-20 2.45E-20
   0.2500  0.2500 -0.0833    1  2.52814E-20 kpt; spin; max resid(k); each band:
  1.75E-21 6.55E-21 7.67E-21 5.94E-21 9.94E-21 4.03E-21 5.82E-21 1.56E-20
  9.83E-21 2.36E-21 5.19E-21 1.17E-20 1.82E-20 1.51E-20 2.51E-20 2.53E-20
   0.3333  0.0000 -0.2500    1  3.32591E-20 kpt; spin; max resid(k); each band:
  1.62E-21 1.14E-20 1.35E-20 8.15E-21 2.04E-20 5.76E-21 1.42E-20 4.23E-21
  1.90E-20 1.45E-20 4.26E-21 1.36E-20 1.61E-20 1.13E-20 2.48E-20 3.33E-20
   0.3333  0.0833 -0.1667    1  1.13698E-19 kpt; spin; max resid(k); each band:
  1.67E-21 9.12E-21 1.52E-20 6.68E-21 6.78E-21 1.84E-20 2.30E-20 1.14E-20
  6.19E-21 9.68E-21 5.06E-21 1.56E-20 1.86E-20 7.32E-21 2.73E-20 1.14E-19
   0.3333  0.1667 -0.0833    1  1.24522E-19 kpt; spin; max resid(k); each band:
  1.56E-21 8.07E-21 1.14E-20 6.76E-21 1.42E-20 5.45E-21 1.81E-20 1.64E-20
  7.60E-21 4.39E-21 6.85E-21 1.40E-20 1.70E-20 1.23E-20 3.05E-20 1.25E-19
   0.4167  0.0000 -0.1667    1  5.29987E-20 kpt; spin; max resid(k); each band:
  1.65E-21 1.26E-20 1.72E-20 1.35E-20 2.04E-20 7.03E-21 1.28E-20 5.99E-21
  2.03E-20 2.13E-20 4.92E-21 1.15E-20 1.37E-20 7.50E-21 1.57E-20 5.30E-20
   0.4167  0.0833 -0.0833    1  8.98254E-20 kpt; spin; max resid(k); each band:
  1.96E-21 1.38E-20 1.60E-20 1.13E-20 7.67E-21 2.25E-20 2.61E-20 1.50E-20
  5.94E-21 1.67E-20 5.98E-21 1.43E-20 1.61E-20 5.18E-21 2.54E-20 8.98E-20
   0.5000  0.0000 -0.0833    1  1.31289E-19 kpt; spin; max resid(k); each band:
  1.80E-21 1.16E-20 1.29E-20 1.87E-20 1.10E-20 2.40E-20 1.39E-20 2.27E-20
  9.03E-21 2.00E-20 6.97E-21 1.15E-20 1.32E-20 6.26E-21 1.98E-20 1.31E-19
   0.0000  0.0833  0.3333    1  7.38244E-20 kpt; spin; max resid(k); each band:
  3.55E-21 6.02E-21 1.77E-20 1.48E-20 1.22E-20 3.68E-21 1.41E-20 3.00E-21
  4.27E-21 1.33E-20 1.89E-20 2.60E-20 1.86E-20 1.30E-20 4.16E-20 7.38E-20
   0.0000  0.1667  0.4167    1  9.24500E-20 kpt; spin; max resid(k); each band:
  2.43E-21 1.47E-20 2.72E-21 1.41E-20 1.11E-20 3.20E-21 1.50E-20 1.10E-20
  2.03E-21 3.85E-21 1.60E-20 2.17E-20 2.26E-20 1.75E-20 1.37E-20 9.25E-20
   0.0000  0.2500  0.5000    1  6.87436E-20 kpt; spin; max resid(k); each band:
  2.02E-21 1.32E-20 1.59E-21 1.08E-20 9.62E-21 4.42E-21 1.25E-20 9.32E-21
  2.12E-21 1.39E-20 3.33E-21 1.84E-20 2.27E-20 2.08E-20 4.28E-21 6.87E-20
   0.0000  0.3333 -0.4167    1  1.03710E-19 kpt; spin; max resid(k); each band:
  1.78E-21 1.74E-20 5.68E-21 6.80E-21 4.12E-21 3.30E-21 7.80E-21 9.57E-21
  2.83E-21 1.56E-20 3.05E-21 1.64E-20 2.60E-20 8.52E-21 4.21E-21 1.04E-19
   0.0833  0.0000  0.3333    1  5.04181E-20 kpt; spin; max resid(k); each band:
  3.69E-21 1.39E-20 1.19E-20 8.18E-21 1.39E-20 4.44E-21 6.50E-21 1.19E-20
  4.10E-21 1.92E-20 1.42E-20 2.89E-20 2.84E-20 1.28E-20 4.01E-20 5.04E-20
   0.0833  0.0833  0.4167    1  5.55371E-20 kpt; spin; max resid(k); each band:
  2.61E-21 1.01E-20 1.32E-20 1.06E-20 1.82E-20 6.23E-21 8.26E-21 1.11E-20
  2.05E-20 5.17E-21 1.63E-20 2.56E-20 1.63E-20 4.95E-21 3.72E-20 5.55E-20
   0.0833  0.1667  0.5000    1  7.01502E-20 kpt; spin; max resid(k); each band:
  2.77E-21 9.75E-21 1.17E-20 1.06E-20 8.09E-21 1.78E-20 1.75E-20 1.14E-20
  6.72E-21 1.93E-20 5.24E-21 2.47E-20 1.93E-20 8.63E-21 2.79E-20 7.02E-20
 outwf : prtvol=0 or 1, do not print more k-points.


 Thirteen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   2.00330832E+04 eigvalue=   1.34165841E+03  local=   1.73965298E+03
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -1.35223670E+03  Hartree=   1.45464960E+03     xc=  -4.54247217E+02
 note that "loc psp" includes a xc core correction that could be resolved
 7,8,9: eventually, occupation + non-local contributions
    edocc=   1.49749632E+00     enl0=  -4.61059699E+03   enl1=  -3.76591582E+04
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -1.95056974E+04
 10,11,12 Non-relaxation  contributions : frozen-wavefunctions and Ewald
 fr.local=   6.48293054E+02 fr.nonlo=   2.26281406E+04  Ewald=   1.43780258E+02
 13,14 Frozen wf xc core corrections (1) and (2)
 frxc 1  =   0.00000000E+00  frxc 2 =   0.00000000E+00
 Resulting in :
 2DEtotal=    0.3914516501E+04 Ha. Also 2DEtotal=    0.106519411145E+06 eV
    (2DErelax=   -1.9505697434E+04 Ha. 2DEnonrelax=    2.3420213936E+04 Ha)
    (  non-var. 2DEtotal :    3.9145165014E+03 Ha)


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : displacement of atom   3   along direction   1
 Found     4 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to   126 .

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13926, make ikpt,npw=   6   13926
- newkpt: read input wf with ikpt,npw=   7   13945, make ikpt,npw=   7   13945
- newkpt: read input wf with ikpt,npw=   8   13937, make ikpt,npw=   8   13937
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13937, make ikpt,npw=  10   13937
- newkpt: read input wf with ikpt,npw=  11   13932, make ikpt,npw=  11   13932
- newkpt: read input wf with ikpt,npw=  12   13934, make ikpt,npw=  12   13934
- newkpt: read input wf with ikpt,npw=  13   13950, make ikpt,npw=  13   13950
- newkpt: read input wf with ikpt,npw=  14   13934, make ikpt,npw=  14   13934
- newkpt: read input wf with ikpt,npw=  15   13929, make ikpt,npw=  15   13929
- newkpt: read input wf with ikpt,npw=  16   13950, make ikpt,npw=  16   13950

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13926, make ikpt,npw=   6   13926
- newkpt: read input wf with ikpt,npw=   7   13945, make ikpt,npw=   7   13945
- newkpt: read input wf with ikpt,npw=   8   13937, make ikpt,npw=   8   13937
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13937, make ikpt,npw=  10   13937
- newkpt: read input wf with ikpt,npw=  11   13932, make ikpt,npw=  11   13932
- newkpt: read input wf with ikpt,npw=  12   13934, make ikpt,npw=  12   13934
- newkpt: read input wf with ikpt,npw=  13   13950, make ikpt,npw=  13   13950
- newkpt: read input wf with ikpt,npw=  14   13934, make ikpt,npw=  14   13934
- newkpt: read input wf with ikpt,npw=  15   13929, make ikpt,npw=  15   13929
- newkpt: read input wf with ikpt,npw=  16   13950, make ikpt,npw=  16   13950

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  17 by node    1
P newkpt: treating     16 bands with npw=   13937 for ikpt=  18 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  19 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  20 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  21 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  22 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  23 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  24 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  25 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  26 by node    1
P newkpt: treating     16 bands with npw=   13941 for ikpt=  27 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  28 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  29 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  30 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  31 by node    1
P newkpt: treating     16 bands with npw=   13966 for ikpt=  32 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  33 by node    2
P newkpt: treating     16 bands with npw=   13936 for ikpt=  34 by node    2
P newkpt: treating     16 bands with npw=   13943 for ikpt=  35 by node    2
P newkpt: treating     16 bands with npw=   13948 for ikpt=  36 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  37 by node    2
P newkpt: treating     16 bands with npw=   13960 for ikpt=  38 by node    2
P newkpt: treating     16 bands with npw=   13932 for ikpt=  39 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  40 by node    2
P newkpt: treating     16 bands with npw=   13954 for ikpt=  41 by node    2
P newkpt: treating     16 bands with npw=   13939 for ikpt=  42 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  43 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  44 by node    2
P newkpt: treating     16 bands with npw=   13926 for ikpt=  45 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  46 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  47 by node    2
P newkpt: treating     16 bands with npw=   13954 for ikpt=  48 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  49 by node    3
P newkpt: treating     16 bands with npw=   13951 for ikpt=  50 by node    3
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   79.367091192769     -1.536E+02 1.052E+00 1.038E+06
 ETOT  2   22.866193310546     -5.650E+01 1.176E-01 2.848E+04
 ETOT  3   20.307762151289     -2.558E+00 3.409E-03 4.419E+03
 ETOT  4   19.874461826463     -4.333E-01 4.473E-04 3.998E+02
 ETOT  5   19.853829819455     -2.063E-02 2.876E-05 1.061E+01
 ETOT  6   19.853578169453     -2.517E-04 2.610E-06 1.922E-01
 ETOT  7   19.853573645224     -4.524E-06 7.096E-08 1.588E-03
 ETOT  8   19.853573605418     -3.981E-08 9.373E-09 3.497E-05
 ETOT  9   19.853573604002     -1.416E-09 1.618E-10 4.118E-07
 ETOT 10   19.853573603975     -2.694E-11 2.037E-11 1.517E-08
 ETOT 11   19.853573603991      1.603E-11 9.969E-13 3.172E-09
 ETOT 12   19.853573603966     -2.527E-11 5.668E-14 8.906E-11
 ETOT 13   19.853573603971      5.201E-12 8.037E-15 3.367E-12
 ETOT 14   19.853573603972      8.811E-13 4.630E-16 2.868E-13
 ETOT 15   19.853573603966     -6.509E-12 6.899E-17 5.893E-15
 ETOT 16   19.853573603983      1.788E-11 3.922E-18 2.973E-16
 ETOT 17   19.853573603986      2.331E-12 7.917E-19 4.711E-18
 ETOT 18   19.853573603981     -5.173E-12 7.922E-19 3.813E-19

 At SCF step   18       vres2   =  3.81E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   7.5636E-20; max=  7.9220E-19
   0.0000  0.0000 -0.0833    1  4.10487E-19 kpt; spin; max resid(k); each band:
  2.62E-21 5.65E-21 5.40E-21 5.72E-21 3.65E-22 7.72E-22 8.27E-23 8.62E-23
  8.26E-23 2.88E-23 7.72E-23 6.29E-20 3.38E-19 4.10E-19 2.65E-19 3.23E-20
   0.0000  0.0000 -0.2500    1  7.18396E-19 kpt; spin; max resid(k); each band:
  6.86E-21 7.43E-21 8.07E-21 1.10E-21 1.67E-21 6.58E-21 5.03E-22 4.87E-22
  5.60E-22 7.41E-23 1.98E-22 1.13E-19 6.11E-19 7.18E-19 4.26E-20 2.83E-19
   0.0000  0.0833 -0.1667    1  6.16707E-19 kpt; spin; max resid(k); each band:
  6.60E-21 8.69E-21 3.86E-21 4.06E-21 1.25E-21 7.93E-21 2.02E-22 3.96E-22
  2.76E-22 1.43E-22 1.40E-23 1.52E-19 3.43E-19 6.17E-19 2.35E-19 1.63E-19
   0.0833  0.0000 -0.1667    1  5.63715E-19 kpt; spin; max resid(k); each band:
  5.14E-21 7.38E-21 3.62E-21 5.06E-21 5.51E-22 6.06E-21 4.37E-22 2.36E-22
  2.04E-22 8.48E-23 1.91E-22 1.18E-19 4.11E-19 5.64E-19 2.40E-19 1.97E-19
   0.0833  0.0833 -0.0833    1  4.83161E-19 kpt; spin; max resid(k); each band:
  4.51E-21 9.35E-21 3.34E-21 2.90E-21 6.02E-21 2.20E-21 1.11E-22 1.95E-22
  2.25E-22 9.56E-23 6.56E-23 1.52E-19 4.36E-19 3.76E-19 4.83E-19 5.58E-20
   0.1667  0.0000 -0.0833    1  5.08712E-19 kpt; spin; max resid(k); each band:
  4.74E-21 7.07E-21 3.35E-21 4.37E-21 3.92E-22 6.27E-21 3.18E-22 4.07E-22
  9.69E-23 9.97E-23 1.96E-22 1.46E-19 3.66E-19 5.09E-19 1.47E-19 3.05E-19
   0.0000  0.0000 -0.4167    1  7.92203E-19 kpt; spin; max resid(k); each band:
  7.81E-21 4.14E-21 6.88E-21 3.56E-22 7.08E-22 8.33E-22 5.02E-22 6.78E-22
  1.80E-22 3.88E-22 2.65E-21 1.23E-19 1.21E-19 7.92E-19 3.22E-20 1.86E-19
   0.0000  0.0833 -0.3333    1  3.97980E-19 kpt; spin; max resid(k); each band:
  1.17E-20 6.06E-21 5.03E-21 3.59E-21 6.08E-22 1.33E-21 7.07E-22 6.36E-22
  3.35E-22 4.63E-21 1.37E-23 1.34E-19 3.55E-19 3.98E-19 2.48E-19 1.00E-19
   0.0000  0.1667 -0.2500    1  3.77290E-19 kpt; spin; max resid(k); each band:
  1.49E-20 5.82E-21 2.51E-21 6.26E-21 4.55E-22 2.54E-21 1.55E-21 4.28E-22
  2.54E-22 4.80E-21 2.45E-23 1.70E-19 2.70E-19 3.77E-19 1.43E-19 2.40E-19
   0.0833  0.0000 -0.3333    1  5.81361E-19 kpt; spin; max resid(k); each band:
  8.73E-21 7.42E-21 4.14E-21 2.73E-21 3.02E-22 1.04E-21 8.88E-22 5.67E-22
  2.36E-22 3.29E-21 4.30E-22 1.34E-19 3.52E-19 5.81E-19 2.77E-19 2.76E-19
   0.0833  0.0833 -0.2500    1  5.07509E-19 kpt; spin; max resid(k); each band:
  1.07E-20 8.45E-21 3.55E-21 3.52E-21 1.32E-21 4.17E-21 7.08E-22 1.29E-21
  1.74E-21 2.19E-22 1.54E-22 1.43E-19 3.83E-19 5.08E-19 3.08E-19 1.83E-19
   0.0833  0.1667 -0.1667    1  4.56157E-19 kpt; spin; max resid(k); each band:
  1.36E-20 7.40E-21 3.01E-21 5.24E-21 2.63E-21 6.61E-21 7.76E-22 8.08E-22
  3.53E-22 2.32E-22 6.39E-23 1.89E-19 2.59E-19 4.56E-19 3.02E-19 1.79E-19
   0.1667  0.0000 -0.2500    1  5.06733E-19 kpt; spin; max resid(k); each band:
  8.45E-21 7.02E-21 1.35E-21 5.30E-21 3.07E-22 1.34E-21 1.49E-21 3.07E-22
  2.03E-22 2.48E-21 5.18E-22 1.14E-19 3.15E-19 5.07E-19 2.03E-19 2.88E-19
   0.1667  0.0833 -0.1667    1  4.44204E-19 kpt; spin; max resid(k); each band:
  9.93E-21 7.99E-21 1.89E-21 6.39E-21 2.00E-21 4.18E-21 1.38E-21 1.86E-22
  4.79E-22 1.90E-22 2.45E-22 1.56E-19 4.27E-19 3.68E-19 4.44E-19 1.74E-19
   0.1667  0.1667 -0.0833    1  4.74905E-19 kpt; spin; max resid(k); each band:
  1.28E-20 4.32E-22 1.22E-20 5.87E-21 5.44E-21 3.07E-21 4.30E-22 1.98E-22
  3.73E-22 1.99E-22 1.19E-22 2.32E-19 3.33E-19 3.50E-19 2.40E-19 4.75E-19
   0.2500  0.0000 -0.1667    1  4.21960E-19 kpt; spin; max resid(k); each band:
  9.97E-21 6.45E-21 1.41E-21 4.85E-21 3.34E-22 1.11E-21 6.56E-22 2.79E-22
  1.33E-22 3.84E-21 5.84E-22 1.72E-19 2.94E-19 4.22E-19 7.81E-20 4.07E-19
   0.2500  0.0833 -0.0833    1  3.90781E-19 kpt; spin; max resid(k); each band:
  8.16E-21 7.53E-21 2.08E-21 5.37E-21 2.05E-21 4.09E-21 7.32E-22 1.17E-21
  4.97E-22 1.83E-22 2.64E-22 2.11E-19 3.63E-19 3.91E-19 2.71E-19 3.35E-19
   0.3333  0.0000 -0.0833    1  3.86328E-19 kpt; spin; max resid(k); each band:
  1.23E-20 5.85E-21 3.96E-21 2.08E-21 3.03E-22 6.17E-22 3.72E-22 2.89E-22
  1.99E-22 4.74E-21 5.27E-22 2.68E-19 3.27E-19 3.76E-19 1.36E-19 3.86E-19
   0.0000  0.0833  0.5000    1  3.08130E-19 kpt; spin; max resid(k); each band:
  8.86E-21 6.32E-21 3.76E-21 7.58E-22 5.33E-22 6.69E-22 3.18E-22 1.85E-22
  5.19E-22 4.36E-22 1.54E-21 1.07E-19 3.08E-19 2.82E-19 2.57E-19 5.28E-20
   0.0000  0.1667 -0.4167    1  2.62420E-19 kpt; spin; max resid(k); each band:
  1.47E-20 3.45E-21 3.36E-21 2.27E-21 7.24E-22 2.18E-21 5.77E-22 3.73E-22
  4.70E-22 9.31E-23 2.65E-21 1.30E-19 2.21E-19 2.62E-19 1.72E-19 1.54E-19
   0.0000  0.2500 -0.3333    1  3.62191E-19 kpt; spin; max resid(k); each band:
  1.92E-20 2.41E-21 3.30E-21 5.51E-22 5.32E-22 6.25E-21 5.54E-22 3.02E-22
  4.90E-22 1.01E-22 4.60E-21 1.35E-19 2.20E-19 2.48E-19 4.03E-20 3.62E-19
   0.0833  0.0000  0.5000    1  4.75711E-19 kpt; spin; max resid(k); each band:
  8.63E-21 4.63E-21 5.31E-21 1.12E-21 3.87E-22 4.84E-22 2.61E-22 5.37E-22
  6.36E-22 2.87E-22 1.63E-21 1.07E-19 2.42E-19 4.76E-19 2.08E-19 1.03E-19
   0.0833  0.1667 -0.3333    1  4.30678E-19 kpt; spin; max resid(k); each band:
  1.39E-20 4.59E-21 2.58E-21 4.23E-21 3.74E-22 1.17E-21 6.49E-22 5.18E-22
  5.60E-22 1.10E-22 3.78E-21 1.44E-19 1.72E-19 4.31E-19 1.50E-19 7.92E-20
   0.0833  0.2500 -0.2500    1  2.75546E-19 kpt; spin; max resid(k); each band:
  2.01E-20 1.98E-21 5.01E-21 5.59E-21 3.81E-22 1.27E-21 6.37E-22 4.55E-22
  4.44E-22 9.98E-23 6.01E-21 1.70E-19 2.11E-19 2.76E-19 1.21E-19 2.04E-19
   0.1667  0.0000 -0.4167    1  4.07723E-19 kpt; spin; max resid(k); each band:
  9.93E-21 4.87E-21 2.80E-21 1.60E-21 7.56E-22 1.12E-21 4.54E-22 5.81E-22
  4.01E-22 9.06E-22 1.59E-21 1.36E-19 2.20E-19 4.08E-19 2.00E-19 1.52E-19
   0.1667  0.0833 -0.3333    1  4.77703E-19 kpt; spin; max resid(k); each band:
  1.30E-20 3.79E-21 3.67E-21 4.49E-21 3.77E-22 1.22E-21 3.10E-22 6.72E-22
  7.47E-22 5.66E-22 3.28E-21 1.56E-19 4.78E-19 9.38E-20 4.51E-19 1.06E-19
   0.1667  0.1667 -0.2500    1  3.69217E-19 kpt; spin; max resid(k); each band:
  1.70E-20 1.07E-21 7.81E-21 4.39E-21 1.96E-21 1.33E-21 5.06E-22 4.89E-22
  6.94E-22 4.36E-21 2.58E-22 1.78E-19 3.02E-19 3.69E-19 2.30E-19 1.05E-19
   0.1667  0.2500 -0.1667    1  3.80911E-19 kpt; spin; max resid(k); each band:
  2.49E-20 9.86E-22 9.82E-21 4.25E-21 3.24E-21 1.44E-21 8.50E-22 2.49E-22
  4.08E-21 8.16E-22 1.34E-22 2.06E-19 1.90E-19 3.81E-19 1.95E-19 2.19E-19
   0.2500  0.0000 -0.3333    1  3.96377E-19 kpt; spin; max resid(k); each band:
  1.15E-20 1.46E-21 5.32E-21 9.74E-22 5.27E-22 3.77E-21 4.21E-22 3.90E-22
  5.94E-22 1.37E-21 2.10E-21 1.52E-19 2.82E-19 3.96E-19 1.12E-19 3.89E-19
   0.2500  0.0833 -0.2500    1  4.00122E-19 kpt; spin; max resid(k); each band:
  1.22E-20 8.55E-22 6.40E-21 5.49E-21 4.50E-22 1.53E-21 5.03E-22 3.97E-22
  5.73E-22 9.33E-22 3.55E-21 1.63E-19 4.00E-19 2.79E-19 3.54E-19 2.32E-19
   0.2500  0.1667 -0.1667    1  4.08383E-19 kpt; spin; max resid(k); each band:
  1.63E-20 4.24E-22 8.91E-21 5.78E-21 2.95E-21 8.86E-22 6.57E-22 6.76E-22
  3.08E-21 7.75E-22 4.34E-22 1.87E-19 4.08E-19 2.80E-19 2.99E-19 2.64E-19
   0.2500  0.2500 -0.0833    1  4.56172E-19 kpt; spin; max resid(k); each band:
  2.25E-20 3.27E-22 1.14E-20 3.97E-21 3.65E-21 2.08E-21 5.68E-22 4.31E-22
  8.02E-22 4.99E-22 1.51E-22 2.25E-19 2.71E-19 2.37E-19 8.84E-20 4.56E-19
   0.3333  0.0000 -0.2500    1  5.09175E-19 kpt; spin; max resid(k); each band:
  1.81E-20 1.48E-21 5.17E-21 6.15E-22 3.81E-22 4.32E-21 5.75E-22 2.94E-22
  4.19E-22 1.77E-21 2.24E-21 2.84E-19 2.63E-19 3.48E-19 3.55E-20 5.09E-19
   0.3333  0.0833 -0.1667    1  4.23793E-19 kpt; spin; max resid(k); each band:
  1.12E-20 1.24E-21 6.00E-21 4.10E-21 6.78E-22 1.54E-21 4.39E-22 2.90E-22
  4.13E-22 1.06E-21 3.26E-21 2.33E-19 2.99E-19 3.47E-19 1.08E-19 4.24E-19
   0.3333  0.1667 -0.0833    1  4.00857E-19 kpt; spin; max resid(k); each band:
  1.08E-20 8.52E-22 7.40E-21 4.54E-21 3.03E-21 4.89E-22 3.99E-22 4.85E-22
  3.15E-21 1.03E-21 4.48E-22 2.34E-19 3.58E-19 2.92E-19 1.91E-19 4.01E-19
   0.4167  0.0000 -0.1667    1  3.74629E-19 kpt; spin; max resid(k); each band:
  1.91E-20 4.50E-21 2.29E-21 1.03E-21 2.70E-22 2.02E-21 4.62E-22 3.41E-22
  3.57E-22 1.29E-21 1.39E-21 3.75E-19 1.85E-19 2.88E-19 1.05E-19 2.81E-19
   0.4167  0.0833 -0.0833    1  3.74238E-19 kpt; spin; max resid(k); each band:
  1.42E-20 5.18E-21 2.25E-21 2.00E-21 8.58E-22 9.88E-22 5.65E-22 4.27E-22
  3.49E-22 7.82E-22 2.72E-21 3.61E-19 2.03E-19 3.74E-19 9.85E-20 3.07E-19
   0.5000  0.0000 -0.0833    1  3.68512E-19 kpt; spin; max resid(k); each band:
  1.49E-20 3.87E-21 4.54E-21 2.31E-22 7.46E-22 4.46E-22 2.00E-22 5.42E-22
  5.42E-22 3.31E-22 1.33E-21 3.69E-19 1.92E-19 2.83E-19 1.55E-19 1.79E-19
   0.0000  0.0833  0.3333    1  6.00248E-19 kpt; spin; max resid(k); each band:
  9.23E-21 6.56E-21 4.99E-21 3.06E-21 4.85E-22 3.49E-21 4.66E-22 2.20E-21
  9.10E-22 2.43E-22 2.61E-22 1.31E-19 3.23E-19 6.00E-19 2.47E-19 1.92E-19
   0.0000  0.1667  0.4167    1  3.85602E-19 kpt; spin; max resid(k); each band:
  1.05E-20 2.22E-21 5.29E-21 3.43E-21 4.32E-22 8.16E-22 3.21E-22 6.93E-22
  9.81E-22 2.17E-21 3.93E-22 1.03E-19 2.06E-19 3.86E-19 2.05E-19 5.95E-20
   0.0000  0.2500  0.5000    1  2.72668E-19 kpt; spin; max resid(k); each band:
  1.36E-20 1.41E-21 3.25E-21 2.30E-21 1.22E-21 1.60E-21 7.17E-22 6.23E-22
  8.29E-22 3.68E-22 1.74E-21 1.20E-19 1.40E-19 2.73E-19 8.61E-20 1.16E-19
   0.0000  0.3333 -0.4167    1  2.68877E-19 kpt; spin; max resid(k); each band:
  1.84E-20 1.13E-21 1.93E-21 2.26E-21 5.09E-22 3.90E-21 1.26E-21 6.07E-22
  7.50E-22 3.90E-22 1.59E-21 1.59E-19 1.17E-19 2.69E-19 4.92E-20 1.97E-19
   0.0833  0.1667  0.5000    1  5.02941E-19 kpt; spin; max resid(k); each band:
  9.40E-21 6.15E-21 2.11E-21 2.38E-21 5.37E-22 4.09E-22 4.31E-22 4.32E-22
  7.26E-22 5.72E-22 2.09E-21 1.22E-19 1.58E-19 5.03E-19 1.78E-19 1.31E-19
   0.0833  0.2500 -0.4167    1  2.77418E-19 kpt; spin; max resid(k); each band:
  1.38E-20 2.43E-21 1.94E-21 1.71E-21 1.78E-21 2.03E-21 7.63E-22 6.96E-22
  2.86E-22 6.30E-22 1.61E-21 1.27E-19 1.48E-19 2.77E-19 1.51E-19 1.67E-19
   0.0833  0.3333 -0.3333    1  3.04234E-19 kpt; spin; max resid(k); each band:
  1.89E-20 1.86E-21 1.91E-21 9.13E-22 9.30E-22 4.37E-21 9.78E-22 8.97E-22
  6.54E-23 7.37E-22 2.43E-21 1.45E-19 1.56E-19 2.37E-19 8.26E-20 3.04E-19
   0.1667  0.2500 -0.3333    1  3.36613E-19 kpt; spin; max resid(k); each band:
  1.34E-20 2.23E-21 2.44E-21 1.70E-21 2.16E-21 1.28E-21 5.75E-22 1.26E-21
  9.38E-22 2.04E-22 1.86E-21 1.53E-19 1.35E-19 3.37E-19 1.32E-19 1.51E-19
   0.1667  0.3333 -0.2500    1  2.20495E-19 kpt; spin; max resid(k); each band:
  2.62E-20 1.64E-21 3.46E-21 9.51E-22 1.07E-21 3.40E-21 7.24E-22 2.16E-21
  6.79E-22 2.35E-22 4.03E-21 1.94E-19 1.45E-19 2.20E-19 1.49E-19 1.27E-19
   0.2500  0.0000  0.5000    1  2.78787E-19 kpt; spin; max resid(k); each band:
  2.68E-20 4.79E-22 5.55E-21 4.03E-21 1.58E-21 1.86E-21 4.50E-22 2.52E-21
  7.83E-22 3.42E-22 3.27E-21 2.13E-19 2.79E-19 2.77E-19 1.35E-19 1.25E-19
   0.2500  0.0833 -0.4167    1  4.15227E-19 kpt; spin; max resid(k); each band:
  1.55E-20 1.32E-21 2.31E-21 2.05E-21 4.46E-21 7.64E-22 7.23E-22 1.55E-21
  8.36E-22 8.37E-22 2.03E-21 1.81E-19 4.15E-19 9.51E-20 3.43E-19 8.63E-20
   0.2500  0.3333 -0.1667    1  3.71433E-19 kpt; spin; max resid(k); each band:
  3.82E-20 8.25E-22 9.21E-21 1.87E-21 2.05E-21 1.71E-21 2.05E-21 4.21E-22
  6.31E-22 3.05E-21 2.04E-22 2.10E-19 1.75E-19 3.71E-19 1.18E-19 1.07E-19
 outwf : prtvol=0 or 1, do not print more k-points.


 Thirteen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   2.09029419E+02 eigvalue=   3.33997981E+01  local=  -6.73125311E+01
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -4.49639761E+02  Hartree=   6.03910800E+01     xc=  -3.05639862E+01
 note that "loc psp" includes a xc core correction that could be resolved
 7,8,9: eventually, occupation + non-local contributions
    edocc=   8.05166600E+00     enl0=   1.12478180E-01   enl1=   2.34239120E+01
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -2.13107924E+02
 10,11,12 Non-relaxation  contributions : frozen-wavefunctions and Ewald
 fr.local=   1.42023749E+02 fr.nonlo=  -4.91575633E+00  Ewald=   9.58535052E+01
 13,14 Frozen wf xc core corrections (1) and (2)
 frxc 1  =   0.00000000E+00  frxc 2 =   0.00000000E+00
 Resulting in :
 2DEtotal=    0.1985357360E+02 Ha. Also 2DEtotal=    0.540243212331E+03 eV
    (2DErelax=   -2.1310792438E+02 Ha. 2DEnonrelax=    2.3296149799E+02 Ha)
    (  non-var. 2DEtotal :    1.9853573603E+01 Ha)


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : homogeneous electric field along direction   1
 The set of symmetries contains only one element for this perturbation.
 symkpt : not enough symmetry to change the number of k points.

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13926, make ikpt,npw=   7   13926
- newkpt: read input wf with ikpt,npw=   8   13945, make ikpt,npw=   8   13945
- newkpt: read input wf with ikpt,npw=   9   13937, make ikpt,npw=   9   13937
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13950, make ikpt,npw=  11   13950
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13937, make ikpt,npw=  13   13937
- newkpt: read input wf with ikpt,npw=  14   13932, make ikpt,npw=  14   13932
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13934, make ikpt,npw=  16   13934
- newkpt: read input wf with ikpt,npw=  17   13950, make ikpt,npw=  17   13950
- newkpt: read input wf with ikpt,npw=  18   13934, make ikpt,npw=  18   13934
- newkpt: read input wf with ikpt,npw=  19   13929, make ikpt,npw=  19   13929
- newkpt: read input wf with ikpt,npw=  20   13950, make ikpt,npw=  20   13950
- newkpt: read input wf with ikpt,npw=  21   13934, make ikpt,npw=  21   13934
- newkpt: read input wf with ikpt,npw=  22   13937, make ikpt,npw=  22   13937
- newkpt: read input wf with ikpt,npw=  23   13960, make ikpt,npw=  23   13960
- newkpt: read input wf with ikpt,npw=  24   13948, make ikpt,npw=  24   13948
- newkpt: read input wf with ikpt,npw=  25   13929, make ikpt,npw=  25   13929
- newkpt: read input wf with ikpt,npw=  26   13929, make ikpt,npw=  26   13929
- newkpt: read input wf with ikpt,npw=  27   13948, make ikpt,npw=  27   13948
- newkpt: read input wf with ikpt,npw=  28   13960, make ikpt,npw=  28   13960
- newkpt: read input wf with ikpt,npw=  29   13960, make ikpt,npw=  29   13960
- newkpt: read input wf with ikpt,npw=  30   13960, make ikpt,npw=  30   13960
- newkpt: read input wf with ikpt,npw=  31   13931, make ikpt,npw=  31   13931
- newkpt: read input wf with ikpt,npw=  32   13936, make ikpt,npw=  32   13936
- newkpt: read input wf with ikpt,npw=  33   13936, make ikpt,npw=  33   13936
- newkpt: read input wf with ikpt,npw=  34   13931, make ikpt,npw=  34   13931
- newkpt: read input wf with ikpt,npw=  35   13948, make ikpt,npw=  35   13948
- newkpt: read input wf with ikpt,npw=  36   13931, make ikpt,npw=  36   13931
- newkpt: read input wf with ikpt,npw=  37   13941, make ikpt,npw=  37   13941
- newkpt: read input wf with ikpt,npw=  38   13943, make ikpt,npw=  38   13943
- newkpt: read input wf with ikpt,npw=  39   13943, make ikpt,npw=  39   13943
- newkpt: read input wf with ikpt,npw=  40   13929, make ikpt,npw=  40   13929
- newkpt: read input wf with ikpt,npw=  41   13936, make ikpt,npw=  41   13936
- newkpt: read input wf with ikpt,npw=  42   13943, make ikpt,npw=  42   13943
- newkpt: read input wf with ikpt,npw=  43   13966, make ikpt,npw=  43   13966
- newkpt: read input wf with ikpt,npw=  44   13929, make ikpt,npw=  44   13929
- newkpt: read input wf with ikpt,npw=  45   13936, make ikpt,npw=  45   13936
- newkpt: read input wf with ikpt,npw=  46   13943, make ikpt,npw=  46   13943
- newkpt: read input wf with ikpt,npw=  47   13948, make ikpt,npw=  47   13948
- newkpt: read input wf with ikpt,npw=  48   13931, make ikpt,npw=  48   13931
- newkpt: read input wf with ikpt,npw=  49   13960, make ikpt,npw=  49   13960
- newkpt: read input wf with ikpt,npw=  50   13932, make ikpt,npw=  50   13932
- newkpt : prtvol=0 or 1, do not print more k-points.

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  17 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  18 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  19 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  20 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  21 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  22 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  23 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  24 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  25 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  26 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  27 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  28 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  29 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  30 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  31 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  32 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  33 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  34 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  35 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  36 by node    0
P newkpt: treating     16 bands with npw=   13941 for ikpt=  37 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  38 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  39 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  40 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  41 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  42 by node    0
P newkpt: treating     16 bands with npw=   13966 for ikpt=  43 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  44 by node    0
P newkpt: treating     16 bands with npw=   13936 for ikpt=  45 by node    0
P newkpt: treating     16 bands with npw=   13943 for ikpt=  46 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  47 by node    0
P newkpt: treating     16 bands with npw=   13931 for ikpt=  48 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  49 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  50 by node    0
 newkpt: prtvol=0 or 1, do not print more k-points.

-loper3 : read the ddk wavefunctions from file: tbase3_xo_DS3_1WF10

     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1  -4042.0168531762     -4.042E+03 9.328E+00 7.865E+05
 ETOT  2  -4089.3884619962     -4.737E+01 1.335E-01 1.750E+04
 ETOT  3  -4091.5583966108     -2.170E+00 4.771E-03 4.669E+03
 ETOT  4  -4092.1125011594     -5.541E-01 5.053E-04 1.486E+02
 ETOT  5  -4092.1203813724     -7.880E-03 3.458E-05 3.915E+00
 ETOT  6  -4092.1204867706     -1.054E-04 8.163E-06 2.698E-01
 ETOT  7  -4092.1204943684     -7.598E-06 3.602E-07 1.761E-03
 ETOT  8  -4092.1204944728     -1.044E-07 2.976E-08 2.193E-05
 ETOT  9  -4092.1204944744     -1.601E-09 1.063E-09 2.223E-06
 ETOT 10  -4092.1204944746     -1.637E-10 1.555E-10 3.882E-08
 ETOT 11  -4092.1204944746     -5.912E-12 8.538E-12 4.508E-09
 ETOT 12  -4092.1204944746      4.093E-12 1.309E-12 4.072E-10
 ETOT 13  -4092.1204944746      4.547E-13 7.756E-14 5.763E-12
 ETOT 14  -4092.1204944746     -1.819E-12 1.237E-14 8.840E-13
 ETOT 15  -4092.1204944746     -7.276E-12 8.733E-16 2.235E-14
 ETOT 16  -4092.1204944746      5.002E-12 2.902E-16 3.344E-16
 ETOT 17  -4092.1204944746      7.276E-12 2.925E-16 2.942E-17
 ETOT 18  -4092.1204944746     -6.821E-12 2.918E-16 7.064E-19

 At SCF step   18       vres2   =  7.06E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   1.8867E-18; max=  2.9183E-16
   0.0000  0.0000 -0.0833    1  2.07506E-17 kpt; spin; max resid(k); each band:
  1.59E-22 3.15E-21 3.87E-21 3.77E-21 1.68E-21 1.66E-21 2.76E-21 3.54E-21
  4.63E-21 4.35E-21 4.34E-21 2.65E-20 3.81E-19 5.91E-19 4.12E-19 2.08E-17
   0.0000  0.0000 -0.2500    1  4.58922E-17 kpt; spin; max resid(k); each band:
  1.39E-21 8.53E-21 6.77E-21 2.54E-21 1.99E-21 6.76E-21 4.61E-21 5.96E-21
  1.04E-21 1.16E-20 1.12E-20 2.96E-20 1.71E-18 1.57E-18 1.15E-19 4.59E-17
   0.0000  0.0833 -0.1667    1  2.47475E-17 kpt; spin; max resid(k); each band:
  1.17E-21 5.99E-21 5.40E-21 4.26E-21 1.67E-21 5.97E-21 2.55E-21 2.04E-21
  5.19E-21 4.60E-21 1.49E-20 4.30E-20 4.81E-19 1.13E-18 1.24E-18 2.47E-17
   0.0000  0.1667 -0.0833    1  2.49397E-17 kpt; spin; max resid(k); each band:
  1.17E-21 5.99E-21 5.40E-21 4.26E-21 1.67E-21 5.97E-21 2.55E-21 2.04E-21
  5.19E-21 4.60E-21 1.49E-20 4.30E-20 4.81E-19 1.13E-18 1.24E-18 2.49E-17
   0.0833  0.0000 -0.1667    1  2.89214E-18 kpt; spin; max resid(k); each band:
  9.96E-22 6.59E-21 3.57E-21 2.46E-21 5.56E-21 4.19E-21 5.34E-21 1.33E-21
  5.15E-21 1.82E-20 8.75E-21 1.76E-20 2.24E-19 1.49E-18 7.10E-19 2.89E-18
   0.0833  0.0833 -0.0833    1  5.76910E-18 kpt; spin; max resid(k); each band:
  7.53E-22 5.33E-21 4.16E-21 2.17E-21 4.41E-21 3.17E-21 2.71E-21 4.63E-21
  2.73E-21 8.37E-21 1.30E-20 2.26E-20 3.63E-19 5.35E-19 1.51E-18 5.77E-18
   0.1667  0.0000 -0.0833    1  6.32670E-19 kpt; spin; max resid(k); each band:
  7.04E-22 4.04E-21 4.57E-21 1.40E-21 7.10E-21 4.32E-21 3.68E-21 3.05E-21
  4.93E-21 1.77E-20 1.13E-20 2.22E-20 8.34E-20 6.33E-19 4.29E-19 1.83E-19
   0.0000  0.0000 -0.4167    1  2.43741E-17 kpt; spin; max resid(k); each band:
  2.54E-21 9.28E-21 5.90E-21 4.85E-21 2.83E-21 6.84E-21 4.74E-21 7.28E-21
  7.20E-21 5.72E-21 4.71E-21 2.84E-20 4.53E-19 2.12E-18 4.52E-20 2.44E-17
   0.0000  0.0833 -0.3333    1  8.91605E-17 kpt; spin; max resid(k); each band:
  2.69E-21 6.67E-21 1.14E-20 4.37E-21 2.83E-21 4.49E-21 4.34E-21 7.82E-21
  4.04E-21 5.25E-21 1.07E-20 3.15E-20 5.12E-19 9.30E-19 2.46E-18 8.92E-17
   0.0000  0.1667 -0.2500    1  1.83315E-17 kpt; spin; max resid(k); each band:
  2.51E-21 6.48E-21 6.57E-21 7.39E-21 2.24E-21 5.76E-21 3.24E-21 6.82E-21
  3.47E-21 4.26E-21 1.03E-20 3.74E-20 1.64E-19 8.80E-19 2.60E-18 1.83E-17
   0.0000  0.2500 -0.1667    1  1.83829E-17 kpt; spin; max resid(k); each band:
  2.51E-21 6.48E-21 6.57E-21 7.39E-21 2.24E-21 5.76E-21 3.24E-21 6.82E-21
  3.47E-21 4.26E-21 1.03E-20 3.74E-20 1.64E-19 8.82E-19 2.55E-18 1.84E-17
   0.0000  0.3333 -0.0833    1  9.07507E-17 kpt; spin; max resid(k); each band:
  2.69E-21 6.67E-21 1.14E-20 4.37E-21 2.83E-21 4.49E-21 4.34E-21 7.82E-21
  4.04E-21 5.26E-21 1.07E-20 3.17E-20 5.08E-19 9.42E-19 2.44E-18 9.08E-17
   0.0833  0.0000 -0.3333    1  1.52186E-17 kpt; spin; max resid(k); each band:
  2.02E-21 1.07E-20 4.35E-21 1.83E-21 1.09E-20 1.18E-20 2.48E-21 9.18E-21
  1.13E-20 2.54E-21 5.70E-21 2.52E-20 1.58E-19 2.68E-18 7.57E-19 1.52E-17
   0.0833  0.0833 -0.2500    1  3.01814E-17 kpt; spin; max resid(k); each band:
  2.01E-21 7.70E-21 6.84E-21 2.55E-21 5.61E-21 7.38E-21 6.25E-21 8.24E-21
  3.33E-21 8.08E-21 9.23E-21 2.99E-20 6.74E-19 1.19E-18 1.63E-18 3.02E-17
   0.0833  0.1667 -0.1667    1  9.79854E-18 kpt; spin; max resid(k); each band:
  2.25E-21 5.49E-21 6.52E-21 4.60E-21 3.82E-21 6.52E-21 3.13E-21 5.88E-21
  5.02E-21 4.40E-21 1.24E-20 4.53E-20 3.96E-19 5.62E-19 4.00E-18 9.80E-18
   0.0833  0.2500 -0.0833    1  7.02167E-18 kpt; spin; max resid(k); each band:
  2.27E-21 6.61E-21 5.25E-21 5.30E-21 3.43E-21 5.61E-21 2.89E-21 4.70E-21
  4.73E-21 4.06E-21 1.54E-20 6.93E-20 1.82E-19 5.35E-19 7.02E-18 5.57E-18
   0.1667  0.0000 -0.2500    1  3.20110E-18 kpt; spin; max resid(k); each band:
  1.27E-21 6.30E-21 3.44E-21 1.98E-21 1.47E-20 1.04E-20 2.47E-21 1.39E-20
  7.48E-21 2.95E-21 5.55E-21 2.09E-20 9.59E-20 1.31E-18 3.20E-18 8.82E-19
   0.1667  0.0833 -0.1667    1  2.51477E-18 kpt; spin; max resid(k); each band:
  1.47E-21 7.28E-21 2.87E-21 2.54E-21 9.16E-21 4.68E-21 9.55E-21 2.42E-21
  8.82E-21 1.08E-20 1.01E-20 2.71E-20 1.57E-19 1.41E-18 1.41E-18 2.51E-18
   0.1667  0.1667 -0.0833    1  4.67773E-18 kpt; spin; max resid(k); each band:
  2.09E-21 3.56E-21 7.74E-21 3.78E-21 4.52E-21 3.68E-21 5.77E-21 4.08E-21
  6.56E-21 6.03E-21 1.46E-20 4.58E-20 2.03E-19 5.96E-19 1.01E-18 4.68E-18
   0.2500  0.0000 -0.1667    1  1.04979E-17 kpt; spin; max resid(k); each band:
  1.27E-21 3.47E-21 6.39E-21 9.09E-22 1.74E-20 9.65E-21 2.62E-21 1.17E-20
  1.13E-20 3.94E-21 7.25E-21 2.25E-20 7.71E-20 4.76E-19 1.50E-18 1.05E-17
   0.2500  0.0833 -0.0833    1  3.21552E-18 kpt; spin; max resid(k); each band:
  1.33E-21 4.49E-21 5.25E-21 7.98E-22 1.21E-20 4.17E-21 7.03E-21 5.54E-21
  8.17E-21 1.21E-20 1.31E-20 2.05E-20 2.14E-19 5.58E-19 8.48E-19 3.22E-18
   0.3333  0.0000 -0.0833    1  3.38728E-17 kpt; spin; max resid(k); each band:
  2.57E-21 1.62E-21 6.35E-21 5.49E-21 1.86E-20 9.93E-21 3.07E-21 4.36E-21
  2.06E-20 2.49E-21 1.04E-20 2.51E-20 7.64E-20 1.92E-19 8.91E-20 3.39E-17
   0.0000  0.0833  0.5000    1  1.95438E-16 kpt; spin; max resid(k); each band:
  2.57E-21 8.79E-21 4.57E-21 4.86E-21 7.18E-21 8.26E-21 5.60E-21 6.56E-21
  3.84E-21 5.36E-21 4.77E-21 2.60E-20 4.57E-19 4.10E-19 1.93E-18 1.95E-16
   0.0000  0.1667 -0.4167    1  3.96259E-17 kpt; spin; max resid(k); each band:
  2.87E-21 3.25E-21 7.53E-21 6.90E-21 6.77E-21 7.24E-21 4.93E-21 4.94E-21
  6.46E-21 7.15E-21 5.54E-21 2.19E-20 1.21E-19 2.09E-19 2.11E-18 3.96E-17
   0.0000  0.2500 -0.3333    1  2.00831E-17 kpt; spin; max resid(k); each band:
  3.01E-21 6.55E-21 4.30E-21 6.39E-21 5.83E-21 9.28E-21 5.32E-21 3.76E-21
  6.88E-21 7.06E-21 7.28E-21 2.16E-20 5.34E-20 2.34E-19 7.25E-19 2.01E-17
   0.0000  0.3333 -0.2500    1  2.01132E-17 kpt; spin; max resid(k); each band:
  3.01E-21 6.55E-21 4.30E-21 6.39E-21 5.83E-21 9.28E-21 5.32E-21 3.76E-21
  6.88E-21 7.06E-21 7.28E-21 2.16E-20 5.35E-20 2.34E-19 7.23E-19 2.01E-17
   0.0000  0.4167 -0.1667    1  4.03166E-17 kpt; spin; max resid(k); each band:
  2.89E-21 3.25E-21 7.53E-21 6.90E-21 6.77E-21 7.24E-21 4.93E-21 4.94E-21
  6.46E-21 7.15E-21 5.54E-21 2.20E-20 1.22E-19 2.09E-19 2.09E-18 4.03E-17
   0.0000  0.5000 -0.0833    1  1.94315E-16 kpt; spin; max resid(k); each band:
  2.56E-21 8.79E-21 4.57E-21 4.86E-21 7.18E-21 8.26E-21 5.60E-21 6.56E-21
  3.84E-21 5.36E-21 4.77E-21 2.61E-20 4.54E-19 4.18E-19 1.94E-18 1.94E-16
   0.0833  0.0000  0.5000    1  2.76672E-18 kpt; spin; max resid(k); each band:
  2.61E-21 1.84E-21 1.29E-20 7.21E-21 4.28E-21 2.84E-21 2.54E-21 6.29E-21
  6.25E-21 1.41E-20 4.87E-21 1.86E-20 2.91E-20 2.26E-18 8.09E-20 2.77E-18
   0.0833  0.0833 -0.4167    1  1.94232E-16 kpt; spin; max resid(k); each band:
  2.56E-21 8.79E-21 4.57E-21 4.86E-21 7.18E-21 8.26E-21 5.60E-21 6.56E-21
  3.84E-21 5.36E-21 4.77E-21 2.60E-20 4.56E-19 4.21E-19 1.92E-18 1.94E-16
   0.0833  0.1667 -0.3333    1  4.43451E-17 kpt; spin; max resid(k); each band:
  2.66E-21 7.27E-21 6.49E-21 4.78E-21 4.85E-21 8.42E-21 7.29E-21 6.62E-21
  3.86E-21 7.50E-21 5.10E-21 2.78E-20 1.10E-19 8.51E-19 7.18E-19 4.43E-17
   0.0833  0.2500 -0.2500    1  9.52427E-18 kpt; spin; max resid(k); each band:
  2.78E-21 7.20E-21 6.21E-21 6.36E-21 4.63E-21 5.94E-21 6.54E-21 5.91E-21
  3.46E-21 8.08E-21 6.57E-21 3.16E-20 1.53E-19 3.59E-19 6.15E-18 9.52E-18
   0.0833  0.3333 -0.1667    1  2.06362E-17 kpt; spin; max resid(k); each band:
  3.43E-21 5.53E-21 6.03E-21 7.17E-21 4.17E-21 5.40E-21 8.07E-21 2.89E-21
  4.65E-21 1.03E-20 8.09E-21 4.87E-20 7.49E-20 3.39E-19 4.47E-18 2.06E-17
   0.0833  0.4167 -0.0833    1  1.42884E-17 kpt; spin; max resid(k); each band:
  3.63E-21 3.07E-21 8.47E-21 6.51E-21 3.94E-21 5.82E-21 7.17E-21 3.24E-21
  6.58E-21 1.25E-20 7.12E-21 2.34E-20 1.71E-19 3.25E-19 2.96E-18 1.43E-17
   0.1667  0.0000 -0.4167    1  1.11504E-18 kpt; spin; max resid(k); each band:
  1.81E-21 7.42E-21 3.58E-21 3.20E-21 9.70E-21 3.11E-21 4.95E-21 6.98E-21
  1.32E-20 4.66E-21 3.53E-21 1.83E-20 2.60E-20 1.12E-18 2.53E-19 5.77E-19
   0.1667  0.0833 -0.3333    1  1.36177E-17 kpt; spin; max resid(k); each band:
  2.16E-21 7.04E-21 3.98E-21 3.21E-21 9.99E-21 1.59E-20 9.12E-21 5.46E-21
  4.56E-21 6.00E-21 3.44E-21 2.37E-20 1.37E-19 7.39E-19 2.25E-18 1.36E-17
   0.1667  0.1667 -0.2500    1  1.48897E-17 kpt; spin; max resid(k); each band:
  2.23E-21 6.37E-21 6.11E-21 3.68E-21 7.93E-21 1.00E-20 6.17E-21 8.83E-21
  4.98E-21 2.75E-21 7.20E-21 3.34E-20 2.58E-19 8.73E-19 2.54E-18 1.49E-17
   0.1667  0.2500 -0.1667    1  2.52122E-17 kpt; spin; max resid(k); each band:
  3.42E-21 5.82E-21 6.69E-21 4.67E-21 4.82E-21 4.41E-21 8.72E-21 6.23E-21
  3.84E-21 2.79E-21 1.10E-20 5.25E-20 3.98E-19 1.62E-19 7.47E-18 2.52E-17
   0.1667  0.3333 -0.0833    1  5.88461E-17 kpt; spin; max resid(k); each band:
  4.02E-21 3.78E-21 7.78E-21 4.41E-21 5.01E-21 4.24E-21 7.43E-21 5.57E-21
  4.86E-21 4.60E-21 1.44E-20 8.48E-20 1.04E-19 3.38E-19 4.50E-18 5.88E-17
   0.2500  0.0000 -0.3333    1  2.62208E-18 kpt; spin; max resid(k); each band:
  1.60E-21 5.43E-21 5.36E-21 7.71E-21 1.27E-20 2.31E-21 1.02E-20 3.20E-21
  1.25E-20 5.03E-21 2.48E-21 1.85E-20 3.43E-20 4.83E-19 2.12E-18 2.62E-18
   0.2500  0.0833 -0.2500    1  5.78675E-18 kpt; spin; max resid(k); each band:
  1.84E-21 5.02E-21 4.85E-21 2.37E-21 1.15E-20 1.87E-20 1.31E-20 2.38E-21
  3.88E-21 6.42E-21 2.97E-21 2.47E-20 5.75E-20 8.99E-19 5.79E-18 6.38E-19
   0.2500  0.1667 -0.1667    1  3.75594E-18 kpt; spin; max resid(k); each band:
  2.32E-21 4.95E-21 5.52E-21 2.63E-21 8.08E-21 1.09E-20 5.25E-21 1.07E-20
  7.20E-21 3.45E-21 9.97E-21 3.84E-20 8.33E-20 1.29E-18 3.98E-19 3.76E-18
   0.2500  0.2500 -0.0833    1  8.59467E-18 kpt; spin; max resid(k); each band:
  3.63E-21 3.75E-21 5.52E-21 3.42E-21 2.79E-21 3.50E-21 3.59E-21 8.96E-21
  3.73E-21 3.86E-21 1.23E-20 3.27E-20 7.38E-20 3.33E-19 2.25E-19 8.59E-18
   0.3333  0.0000 -0.2500    1  1.25234E-17 kpt; spin; max resid(k); each band:
  3.08E-21 7.64E-21 4.28E-21 8.86E-21 1.48E-20 2.22E-21 4.34E-21 2.58E-21
  2.00E-20 7.05E-21 2.60E-21 2.76E-20 2.85E-20 1.89E-19 1.30E-18 1.25E-17
   0.3333  0.0833 -0.1667    1  2.99165E-17 kpt; spin; max resid(k); each band:
  2.31E-21 6.81E-21 3.72E-21 1.90E-21 1.06E-20 1.96E-20 1.50E-20 4.63E-21
  3.22E-21 8.94E-21 4.61E-21 2.63E-20 9.67E-20 4.76E-19 1.74E-18 2.99E-17
   0.3333  0.1667 -0.0833    1  1.22829E-17 kpt; spin; max resid(k); each band:
  2.08E-21 5.92E-21 4.35E-21 1.22E-21 9.28E-21 9.34E-21 7.09E-21 1.15E-20
  8.91E-21 5.96E-21 1.39E-20 2.69E-20 3.69E-19 4.30E-19 4.89E-19 1.23E-17
   0.4167  0.0000 -0.1667    1  2.85788E-18 kpt; spin; max resid(k); each band:
  3.60E-21 2.72E-21 5.67E-21 6.81E-21 1.62E-20 2.72E-21 2.40E-21 3.76E-21
  2.08E-20 9.43E-21 2.14E-21 2.56E-20 2.08E-20 9.42E-20 6.29E-20 2.86E-18
   0.4167  0.0833 -0.0833    1  2.33616E-17 kpt; spin; max resid(k); each band:
  3.80E-21 2.57E-21 7.57E-21 5.34E-21 6.94E-21 1.35E-20 1.47E-20 1.07E-20
  3.50E-21 1.41E-20 2.66E-21 2.89E-20 7.15E-20 1.42E-19 4.00E-20 2.34E-17
   0.5000  0.0000 -0.0833    1  2.87567E-18 kpt; spin; max resid(k); each band:
  3.30E-21 2.83E-21 1.67E-21 1.61E-20 3.63E-21 7.32E-21 2.96E-21 8.80E-21
  5.21E-21 2.29E-20 1.91E-21 2.35E-20 1.87E-20 1.02E-19 2.37E-20 2.88E-18
   0.0000  0.0833  0.3333    1  3.02879E-17 kpt; spin; max resid(k); each band:
  2.01E-21 7.70E-21 6.84E-21 2.55E-21 5.61E-21 7.38E-21 6.24E-21 8.24E-21
  3.33E-21 8.08E-21 9.23E-21 3.02E-20 6.65E-19 1.19E-18 1.60E-18 3.03E-17
 outwf : prtvol=0 or 1, do not print more k-points.


 Seven components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   1.70518728E+02 eigvalue=   3.64779206E+01  local=  -1.16330476E+02
 4,5,6: 1st-order hamiltonian combined with 1st and 0th-order wfs
    dotwf=  -8.18424099E+03  Hartree=   6.06790141E+01     xc=  -2.77183282E+01
 7,8,9: eventually, occupation + non-local contributions
    edocc=   3.99568948E+03     enl0=  -2.71958416E+01   enl1=   0.00000000E+00
 1-9 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -4.09212049E+03
  No Ewald or frozen-wf contrib.: the relaxation energy is the total one
 2DEtotal=   -0.4092120494E+04 Ha. Also 2DEtotal=   -0.111352261577E+06 eV
    (  non-var. 2DEtotal :   -4.0921204936E+03 Ha)

--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Found    16 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to    63 .

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13945, make ikpt,npw=   6   13945
- newkpt: read input wf with ikpt,npw=   7   13937, make ikpt,npw=   7   13937
- newkpt: read input wf with ikpt,npw=   8   13950, make ikpt,npw=   8   13950

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13945, make ikpt,npw=   6   13945
- newkpt: read input wf with ikpt,npw=   7   13937, make ikpt,npw=   7   13937
- newkpt: read input wf with ikpt,npw=   8   13950, make ikpt,npw=   8   13950

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   9 by node    1
P newkpt: treating     16 bands with npw=   13932 for ikpt=  10 by node    1
P newkpt: treating     16 bands with npw=   13934 for ikpt=  11 by node    1
P newkpt: treating     16 bands with npw=   13950 for ikpt=  12 by node    1
P newkpt: treating     16 bands with npw=   13934 for ikpt=  13 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  14 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  15 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  16 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  17 by node    2
P newkpt: treating     16 bands with npw=   13960 for ikpt=  18 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  19 by node    2
P newkpt: treating     16 bands with npw=   13936 for ikpt=  20 by node    2
P newkpt: treating     16 bands with npw=   13948 for ikpt=  21 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  22 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  23 by node    2
P newkpt: treating     16 bands with npw=   13943 for ikpt=  24 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  25 by node    3
P newkpt: treating     16 bands with npw=   13936 for ikpt=  26 by node    3
P newkpt: treating     16 bands with npw=   13943 for ikpt=  27 by node    3
P newkpt: treating     16 bands with npw=   13966 for ikpt=  28 by node    3
P newkpt: treating     16 bands with npw=   13932 for ikpt=  29 by node    3
P newkpt: treating     16 bands with npw=   13941 for ikpt=  30 by node    3
P newkpt: treating     16 bands with npw=   13954 for ikpt=  31 by node    3
P newkpt: treating     16 bands with npw=   13939 for ikpt=  32 by node    3
P newkpt: treating     16 bands with npw=   13931 for ikpt=  33 by node    4
P newkpt: treating     16 bands with npw=   13941 for ikpt=  34 by node    4
P newkpt: treating     16 bands with npw=   13926 for ikpt=  35 by node    4
P newkpt: treating     16 bands with npw=   13941 for ikpt=  36 by node    4
P newkpt: treating     16 bands with npw=   13929 for ikpt=  37 by node    4
P newkpt: treating     16 bands with npw=   13954 for ikpt=  38 by node    4
P newkpt: treating     16 bands with npw=   13941 for ikpt=  39 by node    4
P newkpt: treating     16 bands with npw=   13951 for ikpt=  40 by node    4
P newkpt: treating     16 bands with npw=   13939 for ikpt=  41 by node    5
P newkpt: treating     16 bands with npw=   13926 for ikpt=  42 by node    5
P newkpt: treating     16 bands with npw=   13929 for ikpt=  43 by node    5
P newkpt: treating     16 bands with npw=   13951 for ikpt=  44 by node    5
P newkpt: treating     16 bands with npw=   13960 for ikpt=  45 by node    5
P newkpt: treating     16 bands with npw=   13938 for ikpt=  46 by node    5
P newkpt: treating     16 bands with npw=   13929 for ikpt=  47 by node    5
P newkpt: treating     16 bands with npw=   13966 for ikpt=  48 by node    5
P newkpt: treating     16 bands with npw=   13960 for ikpt=  49 by node    6
P newkpt: treating     16 bands with npw=   13946 for ikpt=  50 by node    6
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   14.878156576602     -2.915E+02 5.923E-01 2.377E+05
 ETOT  2  -6.7676343154563     -2.165E+01 2.984E-02 1.555E+04
 ETOT  3  -8.0660536421893     -1.298E+00 1.701E-03 3.759E+02
 ETOT  4  -8.0800545125574     -1.400E-02 1.970E-04 4.668E+01
 ETOT  5  -8.0814037508413     -1.349E-03 5.962E-05 6.004E+00
 ETOT  6  -8.0815095744466     -1.058E-04 8.262E-07 3.010E-01
 ETOT  7  -8.0815161614227     -6.587E-06 8.237E-08 6.327E-03
 ETOT  8  -8.0815164283578     -2.669E-07 6.303E-09 1.677E-04
 ETOT  9  -8.0815164330936     -4.736E-09 7.149E-10 3.727E-06
 ETOT 10  -8.0815164332089     -1.153E-10 6.874E-11 5.362E-08
 ETOT 11  -8.0815164332130     -4.093E-12 5.594E-12 1.566E-09
 ETOT 12  -8.0815164332099      3.126E-12 6.353E-13 1.786E-11
 ETOT 13  -8.0815164332081      1.762E-12 4.989E-14 3.190E-13
 ETOT 14  -8.0815164332036      4.491E-12 6.048E-15 9.076E-15
 ETOT 15  -8.0815164332116     -7.958E-12 4.412E-16 3.565E-16
 ETOT 16  -8.0815164332081      3.467E-12 5.452E-17 1.680E-17
 ETOT 17  -8.0815164332094     -1.307E-12 4.229E-18 1.104E-18
 ETOT 18  -8.0815164332088      5.684E-13 4.111E-18 1.279E-19

 At SCF step   18       vres2   =  1.28E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   1.1351E-18; max=  4.1109E-18
   0.0000  0.0000 -0.0833    1  3.20616E-18 kpt; spin; max resid(k); each band:
  2.19E-20 1.74E-18 1.65E-18 1.93E-18 2.42E-18 5.10E-19 1.15E-18 1.31E-18
  1.21E-18 3.21E-18 4.45E-19 1.30E-19 2.52E-19 3.70E-19 2.03E-19 1.61E-20
   0.0000  0.0000 -0.2500    1  3.42409E-18 kpt; spin; max resid(k); each band:
  5.01E-20 1.57E-18 1.57E-18 2.93E-18 9.09E-19 1.23E-18 1.59E-18 1.43E-18
  1.56E-18 3.42E-18 4.62E-19 1.31E-19 2.16E-19 2.27E-19 4.90E-20 4.86E-20
   0.0000  0.0833 -0.1667    1  4.11091E-18 kpt; spin; max resid(k); each band:
  5.07E-20 2.21E-18 2.34E-18 1.24E-18 6.56E-19 1.88E-18 2.84E-19 1.97E-18
  1.89E-18 2.40E-19 4.11E-18 1.71E-19 6.17E-20 4.73E-19 1.36E-19 2.92E-20
   0.0833  0.0000 -0.1667    1  2.89548E-18 kpt; spin; max resid(k); each band:
  4.52E-20 1.54E-18 1.38E-18 1.94E-18 2.54E-18 1.30E-18 2.17E-18 1.17E-18
  1.17E-18 2.90E-18 1.26E-18 1.73E-19 2.60E-19 2.41E-19 8.78E-20 8.29E-20
   0.0833  0.0833 -0.0833    1  3.01847E-18 kpt; spin; max resid(k); each band:
  3.95E-20 1.88E-18 1.77E-18 1.94E-18 1.27E-18 1.68E-18 1.23E-18 1.19E-18
  1.77E-18 1.11E-18 3.02E-18 2.14E-19 2.26E-19 2.08E-19 2.55E-19 1.76E-20
   0.0000  0.0000 -0.4167    1  3.22819E-18 kpt; spin; max resid(k); each band:
  1.11E-19 1.63E-18 1.61E-18 3.23E-18 8.44E-19 1.63E-18 1.55E-18 1.58E-18
  2.99E-18 4.10E-19 1.57E-18 4.02E-20 2.48E-19 2.32E-19 6.05E-20 1.06E-18
   0.0000  0.0833 -0.3333    1  3.55056E-18 kpt; spin; max resid(k); each band:
  9.97E-20 2.09E-18 2.64E-18 1.92E-18 5.86E-19 1.41E-18 1.59E-18 1.83E-18
  4.77E-19 1.57E-18 3.55E-18 8.65E-20 1.37E-19 2.61E-19 1.00E-19 6.99E-20
   0.0000  0.1667 -0.2500    1  3.70378E-18 kpt; spin; max resid(k); each band:
  7.74E-20 2.36E-18 3.23E-18 5.73E-19 5.07E-19 1.35E-18 1.64E-18 1.36E-18
  1.14E-18 1.30E-18 3.70E-18 1.14E-19 8.77E-20 3.07E-19 6.33E-20 7.36E-20
   0.0833  0.0000 -0.3333    1  2.89299E-18 kpt; spin; max resid(k); each band:
  8.94E-20 1.48E-18 1.47E-18 1.62E-18 2.89E-18 1.67E-18 1.65E-18 1.50E-18
  2.53E-18 1.48E-18 1.20E-18 8.98E-20 1.63E-19 2.70E-19 1.13E-19 1.10E-19
   0.0833  0.0833 -0.2500    1  3.05676E-18 kpt; spin; max resid(k); each band:
  7.97E-20 1.79E-18 2.33E-18 1.96E-18 1.35E-18 1.60E-18 1.29E-18 1.37E-18
  1.72E-18 1.37E-18 3.06E-18 1.29E-19 2.06E-19 2.01E-19 1.58E-19 7.12E-20
   0.0833  0.1667 -0.1667    1  3.82162E-18 kpt; spin; max resid(k); each band:
  7.29E-20 2.16E-18 2.75E-18 6.32E-19 8.50E-19 1.74E-18 4.45E-19 2.17E-18
  1.83E-18 8.44E-19 3.82E-18 1.67E-19 9.52E-20 3.09E-19 1.31E-19 5.62E-20
   0.1667  0.0000 -0.2500    1  2.80112E-18 kpt; spin; max resid(k); each band:
  6.75E-20 1.40E-18 1.17E-18 1.91E-18 2.80E-18 1.47E-18 1.51E-18 1.82E-18
  2.01E-18 1.46E-18 1.15E-18 1.29E-19 1.38E-19 2.57E-19 1.12E-19 1.10E-19
   0.1667  0.0833 -0.1667    1  2.61353E-18 kpt; spin; max resid(k); each band:
  6.94E-20 1.75E-18 1.73E-18 2.01E-18 1.98E-18 1.47E-18 1.77E-18 4.80E-19
  1.99E-18 1.81E-18 2.61E-18 1.83E-19 1.60E-19 2.00E-19 1.43E-19 7.09E-20
   0.1667  0.1667 -0.0833    1  3.21580E-18 kpt; spin; max resid(k); each band:
  6.70E-20 2.88E-18 1.71E-18 1.28E-18 1.18E-18 1.74E-18 1.38E-18 1.37E-18
  1.73E-18 1.18E-18 3.22E-18 2.50E-19 1.79E-19 1.71E-19 7.85E-20 1.69E-19
   0.0000  0.0833  0.5000    1  3.20351E-18 kpt; spin; max resid(k); each band:
  1.07E-19 1.25E-18 1.56E-18 6.66E-19 1.52E-18 3.20E-18 2.02E-18 2.49E-18
  1.59E-18 3.38E-19 1.40E-18 1.68E-20 1.32E-19 1.64E-19 1.15E-19 1.33E-19
   0.0000  0.1667 -0.4167    1  3.36681E-18 kpt; spin; max resid(k); each band:
  1.10E-19 2.03E-18 2.51E-18 1.99E-18 4.00E-19 1.78E-18 1.85E-18 1.29E-18
  4.83E-19 3.37E-18 1.42E-18 4.28E-20 1.38E-19 1.78E-19 8.04E-20 1.23E-19
   0.0000  0.2500 -0.3333    1  3.41195E-18 kpt; spin; max resid(k); each band:
  1.12E-19 3.25E-18 2.93E-18 1.40E-18 2.39E-19 1.43E-18 1.92E-18 1.54E-18
  9.41E-19 3.41E-18 1.43E-18 7.99E-20 1.33E-19 2.63E-19 2.74E-20 1.39E-19
   0.0833  0.0000  0.5000    1  2.58138E-18 kpt; spin; max resid(k); each band:
  1.16E-19 1.51E-18 1.55E-18 2.51E-18 1.43E-18 1.16E-18 1.33E-18 1.43E-18
  1.73E-18 2.58E-18 1.49E-18 1.38E-20 1.33E-19 2.09E-19 1.47E-19 1.15E-19
   0.0833  0.1667 -0.3333    1  3.27068E-18 kpt; spin; max resid(k); each band:
  1.26E-19 2.05E-18 2.86E-18 1.55E-18 1.32E-18 7.32E-19 9.74E-19 1.40E-18
  2.01E-18 3.27E-18 1.62E-18 5.96E-20 1.44E-19 2.35E-19 1.43E-19 1.01E-19
   0.0833  0.2500 -0.2500    1  3.36469E-18 kpt; spin; max resid(k); each band:
  1.06E-19 3.36E-18 2.28E-18 8.98E-19 1.09E-18 6.41E-19 4.81E-19 1.95E-18
  2.23E-18 3.14E-18 1.37E-18 1.02E-19 1.14E-19 2.35E-19 7.63E-20 1.09E-19
   0.1667  0.0000 -0.4167    1  2.63351E-18 kpt; spin; max resid(k); each band:
  1.18E-19 1.38E-18 1.41E-18 1.61E-18 2.48E-18 1.42E-18 1.48E-18 1.76E-18
  2.63E-18 1.40E-18 1.49E-18 2.50E-20 1.27E-19 2.15E-19 1.53E-19 5.61E-20
   0.1667  0.0833 -0.3333    1  2.24642E-18 kpt; spin; max resid(k); each band:
  1.26E-19 1.76E-18 1.73E-18 1.79E-18 1.73E-18 2.07E-18 1.77E-18 1.35E-18
  2.18E-18 2.25E-18 1.72E-18 5.58E-20 1.59E-19 2.26E-19 1.48E-19 1.02E-19
   0.1667  0.1667 -0.2500    1  3.06282E-18 kpt; spin; max resid(k); each band:
  1.04E-19 3.06E-18 1.67E-18 1.34E-18 1.35E-18 1.50E-18 1.34E-18 1.17E-18
  2.07E-18 1.58E-18 2.54E-18 1.05E-19 1.75E-19 1.86E-19 1.76E-19 9.15E-20
   0.1667  0.2500 -0.1667    1  3.30348E-18 kpt; spin; max resid(k); each band:
  8.84E-20 3.30E-18 1.97E-18 7.33E-19 9.39E-19 1.28E-18 1.43E-18 1.54E-18
  1.36E-18 1.97E-18 3.16E-18 1.53E-19 1.22E-19 1.96E-19 1.02E-19 9.91E-20
   0.2500  0.0000 -0.3333    1  2.65751E-18 kpt; spin; max resid(k); each band:
  1.22E-19 1.21E-18 1.42E-18 1.70E-18 2.66E-18 1.75E-18 1.82E-18 1.84E-18
  2.60E-18 1.36E-18 1.55E-18 5.81E-20 1.10E-19 2.36E-19 1.34E-19 1.27E-19
   0.2500  0.0833 -0.2500    1  2.42513E-18 kpt; spin; max resid(k); each band:
  1.05E-19 1.93E-18 1.27E-18 1.77E-18 1.70E-18 2.36E-18 1.91E-18 8.79E-19
  2.43E-18 1.97E-18 1.71E-18 1.08E-19 1.11E-19 2.64E-19 1.38E-19 1.05E-19
   0.2500  0.1667 -0.1667    1  2.74314E-18 kpt; spin; max resid(k); each band:
  9.64E-20 2.74E-18 1.24E-18 1.68E-18 1.76E-18 1.63E-18 1.06E-18 1.04E-18
  1.80E-18 2.06E-18 2.54E-18 1.75E-19 1.18E-19 2.22E-19 8.98E-20 1.40E-19
   0.2500  0.2500 -0.0833    1  2.86805E-18 kpt; spin; max resid(k); each band:
  1.01E-19 2.65E-18 1.35E-18 1.12E-18 1.10E-18 1.56E-18 1.25E-18 1.14E-18
  1.36E-18 1.78E-18 2.87E-18 1.98E-19 1.27E-19 1.30E-19 2.45E-20 1.54E-19
   0.0000  0.0833  0.3333    1  3.46017E-18 kpt; spin; max resid(k); each band:
  6.14E-20 1.59E-18 1.03E-18 1.48E-18 3.24E-18 1.63E-18 2.21E-18 1.49E-18
  9.10E-19 3.46E-18 2.70E-19 1.41E-19 1.77E-19 2.41E-19 1.06E-19 8.28E-20
   0.0000  0.1667  0.4167    1  3.77353E-18 kpt; spin; max resid(k); each band:
  7.52E-20 4.06E-19 1.58E-18 1.60E-18 3.77E-18 2.07E-18 2.28E-18 3.39E-18
  5.65E-19 1.52E-18 2.34E-19 1.31E-19 1.57E-19 1.51E-19 1.18E-19 1.50E-19
   0.0000  0.2500  0.5000    1  3.94823E-18 kpt; spin; max resid(k); each band:
  8.41E-20 2.95E-19 1.61E-18 2.09E-18 3.95E-18 2.24E-18 2.02E-18 2.58E-18
  3.99E-19 2.59E-19 1.31E-18 1.02E-19 1.27E-19 1.60E-19 9.59E-20 2.49E-19
   0.0000  0.3333 -0.4167    1  3.29736E-18 kpt; spin; max resid(k); each band:
  9.44E-20 2.24E-19 3.30E-18 2.88E-18 1.87E-18 2.49E-18 2.15E-18 2.76E-18
  4.71E-19 2.67E-19 1.07E-18 1.69E-19 1.05E-19 1.72E-19 7.75E-20 9.77E-20
   0.0833  0.1667  0.5000    1  3.33377E-18 kpt; spin; max resid(k); each band:
  1.05E-19 1.25E-18 1.07E-18 1.67E-18 1.93E-18 3.33E-18 3.28E-18 2.30E-18
  7.10E-19 4.71E-19 1.51E-18 6.16E-20 1.50E-19 2.16E-19 1.41E-19 1.36E-19
   0.0833  0.2500 -0.4167    1  2.70318E-18 kpt; spin; max resid(k); each band:
  1.03E-19 1.13E-18 1.53E-18 2.70E-18 2.25E-18 2.08E-18 1.99E-18 2.45E-18
  1.39E-18 3.69E-19 1.34E-18 6.56E-20 1.53E-19 1.66E-19 1.07E-19 1.35E-19
   0.0833  0.3333 -0.3333    1  3.20465E-18 kpt; spin; max resid(k); each band:
  1.20E-19 3.20E-18 1.92E-18 9.25E-19 1.93E-18 2.06E-18 1.94E-18 1.48E-18
  2.84E-18 3.45E-19 1.42E-18 1.12E-19 1.42E-19 1.73E-19 5.80E-20 1.28E-19
   0.1667  0.2500 -0.3333    1  2.87330E-18 kpt; spin; max resid(k); each band:
  1.25E-19 2.26E-18 2.25E-18 1.49E-18 1.45E-18 1.67E-18 1.10E-18 1.02E-18
  1.87E-18 2.87E-18 1.44E-18 5.26E-20 1.40E-19 1.66E-19 1.60E-19 5.60E-20
   0.1667  0.3333 -0.2500    1  3.61724E-18 kpt; spin; max resid(k); each band:
  1.21E-19 3.62E-18 1.82E-18 8.74E-19 1.71E-18 1.84E-18 1.01E-18 6.89E-19
  2.26E-18 3.02E-18 1.52E-18 9.80E-20 1.33E-19 1.37E-19 1.14E-19 8.92E-20
   0.2500  0.0000  0.5000    1  2.95215E-18 kpt; spin; max resid(k); each band:
  1.29E-19 2.95E-18 1.58E-18 1.25E-18 1.21E-18 1.28E-18 1.29E-18 1.28E-18
  2.21E-18 2.79E-18 1.69E-18 8.84E-20 1.30E-19 1.55E-19 1.17E-19 1.03E-19
   0.2500  0.0833 -0.4167    1  2.47404E-18 kpt; spin; max resid(k); each band:
  1.34E-19 2.09E-18 1.59E-18 1.47E-18 1.70E-18 1.05E-18 1.67E-18 2.00E-18
  2.18E-18 2.47E-18 1.68E-18 3.88E-20 1.35E-19 1.78E-19 1.48E-19 9.46E-20
   0.2500  0.3333 -0.1667    1  3.33463E-18 kpt; spin; max resid(k); each band:
  1.40E-19 3.33E-18 1.52E-18 1.31E-18 1.13E-18 9.13E-19 1.68E-18 1.20E-18
  2.03E-18 1.55E-18 2.74E-18 1.40E-19 1.18E-19 9.34E-20 8.16E-20 8.08E-20
   0.3333  0.0000 -0.4167    1  3.04795E-18 kpt; spin; max resid(k); each band:
  1.93E-19 2.75E-18 1.19E-18 1.29E-18 1.57E-18 1.28E-18 1.32E-18 1.28E-18
  2.72E-18 3.05E-18 1.77E-18 1.22E-19 5.16E-20 1.47E-19 6.22E-20 8.00E-20
   0.3333  0.0833 -0.3333    1  2.58767E-18 kpt; spin; max resid(k); each band:
  1.40E-19 1.64E-18 1.90E-18 2.19E-18 1.08E-18 1.04E-18 1.92E-18 2.33E-18
  2.15E-18 2.59E-18 1.87E-18 5.92E-20 1.01E-19 2.00E-19 9.81E-20 1.44E-19
   0.3333  0.1667 -0.2500    1  2.72101E-18 kpt; spin; max resid(k); each band:
  1.42E-19 2.16E-18 1.74E-18 1.64E-18 1.46E-18 1.16E-18 1.85E-18 2.18E-18
  2.44E-18 2.72E-18 1.98E-18 8.90E-20 9.13E-20 2.41E-19 1.22E-19 1.06E-19
   0.3333  0.2500 -0.1667    1  2.53435E-18 kpt; spin; max resid(k); each band:
  1.48E-19 2.41E-18 1.49E-18 1.13E-18 1.48E-18 1.73E-18 8.36E-19 1.44E-18
  2.09E-18 1.83E-18 2.53E-18 1.41E-19 6.80E-20 1.84E-19 4.65E-20 1.27E-19
   0.3333  0.3333 -0.0833    1  3.24139E-18 kpt; spin; max resid(k); each band:
  1.61E-19 2.47E-18 1.21E-18 1.24E-18 1.19E-18 1.24E-18 1.29E-18 1.27E-18
  1.89E-18 1.72E-18 3.24E-18 1.59E-19 9.21E-20 1.07E-19 2.23E-20 7.29E-20
   0.0000  0.0833  0.1667    1  3.61023E-18 kpt; spin; max resid(k); each band:
  3.30E-20 1.39E-18 1.35E-18 1.39E-18 2.15E-18 2.18E-18 2.12E-18 1.82E-18
  2.13E-19 3.61E-18 2.42E-19 1.25E-19 2.92E-19 3.76E-19 1.24E-20 7.13E-20
   0.0000  0.1667  0.2500    1  2.91815E-18 kpt; spin; max resid(k); each band:
  4.42E-20 2.59E-19 1.77E-18 2.08E-18 2.46E-18 1.90E-18 2.64E-18 2.57E-18
  5.89E-19 2.92E-18 2.48E-19 1.66E-19 1.85E-19 2.77E-19 7.77E-20 3.60E-20
   0.0000  0.2500  0.3333    1  3.27063E-18 kpt; spin; max resid(k); each band:
  4.95E-20 1.86E-19 1.78E-18 1.83E-18 2.30E-18 1.58E-18 2.35E-18 3.27E-18
  1.79E-18 2.08E-19 2.46E-19 1.44E-19 1.60E-19 1.50E-19 1.09E-19 4.23E-20
   0.0000  0.3333  0.4167    1  3.57080E-18 kpt; spin; max resid(k); each band:
  5.73E-20 1.87E-19 1.89E-18 2.24E-18 2.31E-18 3.57E-18 2.13E-18 2.27E-18
  2.15E-19 7.21E-19 2.52E-19 1.25E-19 1.41E-19 1.54E-19 1.55E-19 2.64E-20
   0.0000  0.4167  0.5000    1  3.75819E-18 kpt; spin; max resid(k); each band:
  5.31E-20 2.01E-19 3.57E-18 2.47E-18 3.17E-18 3.76E-18 2.09E-18 2.06E-18
  2.24E-19 4.52E-19 2.26E-19 2.26E-19 1.35E-19 1.40E-19 1.95E-19 1.45E-20
 outwf : prtvol=0 or 1, do not print more k-points.


 Seventeen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   2.91925778E+02 eigvalue=   1.98957300E+01  local=   1.01103947E+00
 4,5,6,7: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -4.94037289E+01  Hartree=   4.59194394E+01     xc=  -1.19829540E+01
     kin1=  -2.61636631E+02
 8,9,10: eventually, occupation + non-local contributions
    edocc=   9.76025841E-01     enl0=  -2.60259616E+01   enl1=  -3.25105163E+02
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -3.14426426E+02
 11,12,13 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.hart=   8.34186846E+00   fr.kin=   1.15633042E+02 fr.loc=  -1.46066710E+01
 14,15,16 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.nonl=   1.71816656E+02    fr.xc=  -2.04279264E+00  Ewald=   1.47297551E+01
 17 Non-relaxation  contributions : pseudopotential core energy
  pspcore=   1.24730519E+01
 Resulting in :
 2DEtotal=   -0.8081516433E+01 Ha. Also 2DEtotal=   -0.219909245835E+03 eV
    (2DErelax=   -3.1442642627E+02 Ha. 2DEnonrelax=    3.0634490983E+02 Ha)
    (  non-var. 2DEtotal :   -8.0815164434E+00 Ha)


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Found    16 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to    63 .

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13945, make ikpt,npw=   6   13945
- newkpt: read input wf with ikpt,npw=   7   13937, make ikpt,npw=   7   13937
- newkpt: read input wf with ikpt,npw=   8   13950, make ikpt,npw=   8   13950

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13945, make ikpt,npw=   6   13945
- newkpt: read input wf with ikpt,npw=   7   13937, make ikpt,npw=   7   13937
- newkpt: read input wf with ikpt,npw=   8   13950, make ikpt,npw=   8   13950

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   9 by node    1
P newkpt: treating     16 bands with npw=   13932 for ikpt=  10 by node    1
P newkpt: treating     16 bands with npw=   13934 for ikpt=  11 by node    1
P newkpt: treating     16 bands with npw=   13950 for ikpt=  12 by node    1
P newkpt: treating     16 bands with npw=   13934 for ikpt=  13 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  14 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  15 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  16 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  17 by node    2
P newkpt: treating     16 bands with npw=   13960 for ikpt=  18 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  19 by node    2
P newkpt: treating     16 bands with npw=   13936 for ikpt=  20 by node    2
P newkpt: treating     16 bands with npw=   13948 for ikpt=  21 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  22 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  23 by node    2
P newkpt: treating     16 bands with npw=   13943 for ikpt=  24 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  25 by node    3
P newkpt: treating     16 bands with npw=   13936 for ikpt=  26 by node    3
P newkpt: treating     16 bands with npw=   13943 for ikpt=  27 by node    3
P newkpt: treating     16 bands with npw=   13966 for ikpt=  28 by node    3
P newkpt: treating     16 bands with npw=   13954 for ikpt=  29 by node    3
P newkpt: treating     16 bands with npw=   13939 for ikpt=  30 by node    3
P newkpt: treating     16 bands with npw=   13932 for ikpt=  31 by node    3
P newkpt: treating     16 bands with npw=   13941 for ikpt=  32 by node    3
P newkpt: treating     16 bands with npw=   13926 for ikpt=  33 by node    4
P newkpt: treating     16 bands with npw=   13941 for ikpt=  34 by node    4
P newkpt: treating     16 bands with npw=   13931 for ikpt=  35 by node    4
P newkpt: treating     16 bands with npw=   13929 for ikpt=  36 by node    4
P newkpt: treating     16 bands with npw=   13954 for ikpt=  37 by node    4
P newkpt: treating     16 bands with npw=   13941 for ikpt=  38 by node    4
P newkpt: treating     16 bands with npw=   13941 for ikpt=  39 by node    4
P newkpt: treating     16 bands with npw=   13951 for ikpt=  40 by node    4
P newkpt: treating     16 bands with npw=   13939 for ikpt=  41 by node    5
P newkpt: treating     16 bands with npw=   13926 for ikpt=  42 by node    5
P newkpt: treating     16 bands with npw=   13929 for ikpt=  43 by node    5
P newkpt: treating     16 bands with npw=   13951 for ikpt=  44 by node    5
P newkpt: treating     16 bands with npw=   13960 for ikpt=  45 by node    5
P newkpt: treating     16 bands with npw=   13946 for ikpt=  46 by node    5
P newkpt: treating     16 bands with npw=   13938 for ikpt=  47 by node    5
P newkpt: treating     16 bands with npw=   13949 for ikpt=  48 by node    5
P newkpt: treating     16 bands with npw=   13929 for ikpt=  49 by node    6
P newkpt: treating     16 bands with npw=   13934 for ikpt=  50 by node    6
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   14.876578299045     -2.915E+02 5.923E-01 2.377E+05
 ETOT  2  -6.7684699634696     -2.165E+01 3.852E-02 1.555E+04
 ETOT  3  -8.0667760713376     -1.298E+00 1.710E-03 3.759E+02
 ETOT  4  -8.0807785060890     -1.400E-02 2.545E-04 4.668E+01
 ETOT  5  -8.0821277482722     -1.349E-03 5.793E-05 6.006E+00
 ETOT  6  -8.0822336254944     -1.059E-04 9.285E-07 3.011E-01
 ETOT  7  -8.0822402157788     -6.590E-06 1.054E-07 6.332E-03
 ETOT  8  -8.0822404831329     -2.674E-07 1.141E-08 1.677E-04
 ETOT  9  -8.0822404878769     -4.744E-09 9.179E-10 3.728E-06
 ETOT 10  -8.0822404879902     -1.133E-10 1.194E-10 5.366E-08
 ETOT 11  -8.0822404879940     -3.865E-12 7.408E-12 1.565E-09
 ETOT 12  -8.0822404879919      2.160E-12 1.080E-12 1.784E-11
 ETOT 13  -8.0822404879942     -2.331E-12 6.234E-14 3.194E-13
 ETOT 14  -8.0822404879940      1.705E-13 9.590E-15 9.051E-15
 ETOT 15  -8.0822404879924      1.648E-12 5.097E-16 3.561E-16
 ETOT 16  -8.0822404879887      3.638E-12 7.891E-17 1.674E-17
 ETOT 17  -8.0822404879916     -2.899E-12 4.765E-18 1.099E-18
 ETOT 18  -8.0822404879917     -5.684E-14 4.115E-18 1.250E-19

 At SCF step   18       vres2   =  1.25E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   1.1372E-18; max=  4.1150E-18
   0.0000  0.0000 -0.0833    1  2.15059E-18 kpt; spin; max resid(k); each band:
  2.19E-20 2.15E-18 1.24E-18 1.93E-18 1.40E-18 1.50E-18 1.15E-18 1.52E-18
  8.46E-19 1.77E-18 1.78E-18 1.30E-19 4.69E-19 1.97E-19 2.03E-19 1.62E-20
   0.0000  0.0000 -0.2500    1  2.38880E-18 kpt; spin; max resid(k); each band:
  5.01E-20 1.58E-18 1.56E-18 1.72E-18 2.39E-18 1.23E-18 1.91E-18 1.15E-18
  1.56E-18 1.96E-18 2.07E-18 1.31E-19 3.23E-19 1.72E-19 4.90E-20 4.86E-20
   0.0000  0.0833 -0.1667    1  2.89639E-18 kpt; spin; max resid(k); each band:
  4.52E-20 1.54E-18 1.38E-18 1.94E-18 2.54E-18 1.30E-18 2.17E-18 1.17E-18
  1.17E-18 2.90E-18 1.26E-18 1.73E-19 2.61E-19 2.41E-19 8.78E-20 8.29E-20
   0.0833  0.0000 -0.1667    1  4.11499E-18 kpt; spin; max resid(k); each band:
  5.07E-20 2.21E-18 2.35E-18 1.24E-18 6.57E-19 1.88E-18 2.84E-19 1.97E-18
  1.89E-18 2.40E-19 4.11E-18 1.71E-19 6.18E-20 4.88E-19 1.36E-19 2.92E-20
   0.0833  0.0833 -0.0833    1  3.01302E-18 kpt; spin; max resid(k); each band:
  3.95E-20 1.88E-18 1.77E-18 1.94E-18 1.28E-18 1.68E-18 1.23E-18 1.20E-18
  1.77E-18 1.11E-18 3.01E-18 2.14E-19 2.26E-19 2.08E-19 2.55E-19 1.76E-20
   0.0000  0.0000 -0.4167    1  2.45095E-18 kpt; spin; max resid(k); each band:
  1.11E-19 1.68E-18 1.57E-18 2.10E-18 2.45E-18 1.63E-18 1.87E-18 1.22E-18
  1.75E-18 2.11E-18 1.57E-18 4.00E-20 2.37E-19 2.49E-19 5.54E-20 1.38E-18
   0.0000  0.0833 -0.3333    1  2.89621E-18 kpt; spin; max resid(k); each band:
  8.94E-20 1.48E-18 1.47E-18 1.62E-18 2.90E-18 1.67E-18 1.65E-18 1.50E-18
  2.53E-18 1.48E-18 1.20E-18 8.98E-20 1.63E-19 2.71E-19 1.13E-19 1.10E-19
   0.0000  0.1667 -0.2500    1  2.80356E-18 kpt; spin; max resid(k); each band:
  6.75E-20 1.40E-18 1.17E-18 1.91E-18 2.80E-18 1.47E-18 1.51E-18 1.82E-18
  2.01E-18 1.46E-18 1.15E-18 1.29E-19 1.38E-19 2.56E-19 1.12E-19 1.10E-19
   0.0833  0.0000 -0.3333    1  3.55154E-18 kpt; spin; max resid(k); each band:
  9.97E-20 2.09E-18 2.64E-18 1.93E-18 5.86E-19 1.41E-18 1.59E-18 1.83E-18
  4.78E-19 1.57E-18 3.55E-18 8.66E-20 1.37E-19 2.63E-19 1.00E-19 6.99E-20
   0.0833  0.0833 -0.2500    1  3.05782E-18 kpt; spin; max resid(k); each band:
  7.97E-20 1.79E-18 2.33E-18 1.96E-18 1.35E-18 1.60E-18 1.29E-18 1.37E-18
  1.73E-18 1.37E-18 3.06E-18 1.29E-19 2.06E-19 2.00E-19 1.58E-19 7.12E-20
   0.0833  0.1667 -0.1667    1  2.61550E-18 kpt; spin; max resid(k); each band:
  6.94E-20 1.75E-18 1.73E-18 2.01E-18 1.98E-18 1.47E-18 1.77E-18 4.80E-19
  2.00E-18 1.81E-18 2.62E-18 1.83E-19 1.60E-19 2.00E-19 1.43E-19 7.09E-20
   0.1667  0.0000 -0.2500    1  3.70642E-18 kpt; spin; max resid(k); each band:
  7.74E-20 2.36E-18 3.24E-18 5.73E-19 5.07E-19 1.36E-18 1.64E-18 1.36E-18
  1.14E-18 1.30E-18 3.71E-18 1.14E-19 8.78E-20 3.08E-19 6.33E-20 7.36E-20
   0.1667  0.0833 -0.1667    1  3.82379E-18 kpt; spin; max resid(k); each band:
  7.29E-20 2.16E-18 2.75E-18 6.32E-19 8.50E-19 1.74E-18 4.44E-19 2.17E-18
  1.83E-18 8.44E-19 3.82E-18 1.67E-19 9.53E-20 3.10E-19 1.31E-19 5.62E-20
   0.1667  0.1667 -0.0833    1  3.21528E-18 kpt; spin; max resid(k); each band:
  6.70E-20 2.88E-18 1.71E-18 1.28E-18 1.18E-18 1.74E-18 1.38E-18 1.37E-18
  1.73E-18 1.18E-18 3.22E-18 2.50E-19 1.79E-19 1.71E-19 7.86E-20 1.69E-19
   0.0000  0.0833  0.5000    1  2.58419E-18 kpt; spin; max resid(k); each band:
  1.16E-19 1.51E-18 1.55E-18 2.51E-18 1.43E-18 1.16E-18 1.33E-18 1.43E-18
  1.73E-18 2.58E-18 1.49E-18 1.38E-20 1.33E-19 2.09E-19 1.47E-19 1.15E-19
   0.0000  0.1667 -0.4167    1  2.63531E-18 kpt; spin; max resid(k); each band:
  1.18E-19 1.38E-18 1.41E-18 1.61E-18 2.48E-18 1.42E-18 1.48E-18 1.76E-18
  2.64E-18 1.40E-18 1.49E-18 2.50E-20 1.27E-19 2.15E-19 1.53E-19 5.61E-20
   0.0000  0.2500 -0.3333    1  2.65934E-18 kpt; spin; max resid(k); each band:
  1.22E-19 1.21E-18 1.42E-18 1.70E-18 2.66E-18 1.76E-18 1.82E-18 1.84E-18
  2.60E-18 1.36E-18 1.55E-18 5.81E-20 1.10E-19 2.36E-19 1.34E-19 1.27E-19
   0.0833  0.0000  0.5000    1  3.20506E-18 kpt; spin; max resid(k); each band:
  1.07E-19 1.25E-18 1.56E-18 6.66E-19 1.52E-18 3.21E-18 2.02E-18 2.49E-18
  1.59E-18 3.38E-19 1.40E-18 1.68E-20 1.32E-19 1.65E-19 1.15E-19 1.32E-19
   0.0833  0.1667 -0.3333    1  2.24814E-18 kpt; spin; max resid(k); each band:
  1.26E-19 1.76E-18 1.73E-18 1.79E-18 1.73E-18 2.07E-18 1.77E-18 1.35E-18
  2.18E-18 2.25E-18 1.72E-18 5.58E-20 1.60E-19 2.27E-19 1.48E-19 1.02E-19
   0.0833  0.2500 -0.2500    1  2.42606E-18 kpt; spin; max resid(k); each band:
  1.05E-19 1.93E-18 1.28E-18 1.77E-18 1.70E-18 2.36E-18 1.91E-18 8.79E-19
  2.43E-18 1.97E-18 1.71E-18 1.08E-19 1.11E-19 2.64E-19 1.38E-19 1.05E-19
   0.1667  0.0000 -0.4167    1  3.36330E-18 kpt; spin; max resid(k); each band:
  1.10E-19 2.04E-18 2.51E-18 1.99E-18 4.00E-19 1.78E-18 1.85E-18 1.29E-18
  4.83E-19 3.36E-18 1.42E-18 4.28E-20 1.38E-19 1.78E-19 8.03E-20 1.23E-19
   0.1667  0.0833 -0.3333    1  3.27195E-18 kpt; spin; max resid(k); each band:
  1.26E-19 2.05E-18 2.87E-18 1.55E-18 1.32E-18 7.32E-19 9.74E-19 1.40E-18
  2.01E-18 3.27E-18 1.62E-18 5.97E-20 1.45E-19 2.35E-19 1.43E-19 1.01E-19
   0.1667  0.1667 -0.2500    1  3.06802E-18 kpt; spin; max resid(k); each band:
  1.04E-19 3.07E-18 1.67E-18 1.34E-18 1.35E-18 1.50E-18 1.34E-18 1.17E-18
  2.07E-18 1.58E-18 2.54E-18 1.05E-19 1.76E-19 1.86E-19 1.76E-19 9.15E-20
   0.1667  0.2500 -0.1667    1  2.74307E-18 kpt; spin; max resid(k); each band:
  9.64E-20 2.74E-18 1.24E-18 1.68E-18 1.77E-18 1.64E-18 1.06E-18 1.04E-18
  1.80E-18 2.06E-18 2.54E-18 1.75E-19 1.18E-19 2.22E-19 8.98E-20 1.40E-19
   0.2500  0.0000 -0.3333    1  3.41051E-18 kpt; spin; max resid(k); each band:
  1.12E-19 3.25E-18 2.93E-18 1.40E-18 2.39E-19 1.43E-18 1.92E-18 1.54E-18
  9.41E-19 3.41E-18 1.43E-18 7.99E-20 1.33E-19 2.63E-19 2.74E-20 1.38E-19
   0.2500  0.0833 -0.2500    1  3.37170E-18 kpt; spin; max resid(k); each band:
  1.06E-19 3.37E-18 2.28E-18 8.98E-19 1.09E-18 6.42E-19 4.81E-19 1.95E-18
  2.23E-18 3.14E-18 1.38E-18 1.02E-19 1.14E-19 2.34E-19 7.63E-20 1.09E-19
   0.2500  0.1667 -0.1667    1  3.30048E-18 kpt; spin; max resid(k); each band:
  8.85E-20 3.30E-18 1.97E-18 7.33E-19 9.39E-19 1.28E-18 1.43E-18 1.54E-18
  1.36E-18 1.97E-18 3.16E-18 1.53E-19 1.22E-19 1.96E-19 1.02E-19 9.91E-20
   0.2500  0.2500 -0.0833    1  2.86745E-18 kpt; spin; max resid(k); each band:
  1.01E-19 2.65E-18 1.36E-18 1.12E-18 1.10E-18 1.56E-18 1.25E-18 1.14E-18
  1.37E-18 1.79E-18 2.87E-18 1.98E-19 1.27E-19 1.30E-19 2.45E-20 1.54E-19
   0.0000  0.2500  0.5000    1  2.94997E-18 kpt; spin; max resid(k); each band:
  1.28E-19 2.95E-18 1.58E-18 1.25E-18 1.21E-18 1.28E-18 1.29E-18 1.28E-18
  2.21E-18 2.79E-18 1.69E-18 8.84E-20 1.30E-19 1.55E-19 1.17E-19 1.03E-19
   0.0000  0.3333 -0.4167    1  3.03843E-18 kpt; spin; max resid(k); each band:
  1.93E-19 2.76E-18 1.19E-18 1.29E-18 1.57E-18 1.28E-18 1.32E-18 1.28E-18
  2.72E-18 3.04E-18 1.77E-18 1.22E-19 5.16E-20 1.47E-19 6.22E-20 7.99E-20
   0.0833  0.0000  0.3333    1  3.46343E-18 kpt; spin; max resid(k); each band:
  6.14E-20 1.59E-18 1.03E-18 1.48E-18 3.24E-18 1.64E-18 2.21E-18 1.49E-18
  9.10E-19 3.46E-18 2.71E-19 1.41E-19 1.77E-19 2.43E-19 1.06E-19 8.28E-20
   0.0833  0.2500 -0.4167    1  2.47675E-18 kpt; spin; max resid(k); each band:
  1.34E-19 2.09E-18 1.59E-18 1.47E-18 1.70E-18 1.05E-18 1.68E-18 2.00E-18
  2.18E-18 2.48E-18 1.68E-18 3.89E-20 1.35E-19 1.78E-19 1.48E-19 9.46E-20
   0.0833  0.3333 -0.3333    1  2.59056E-18 kpt; spin; max resid(k); each band:
  1.40E-19 1.64E-18 1.90E-18 2.19E-18 1.08E-18 1.04E-18 1.92E-18 2.33E-18
  2.16E-18 2.59E-18 1.87E-18 5.92E-20 1.01E-19 2.00E-19 9.81E-20 1.44E-19
   0.1667  0.0000  0.4167    1  3.76643E-18 kpt; spin; max resid(k); each band:
  7.52E-20 4.06E-19 1.58E-18 1.61E-18 3.77E-18 2.07E-18 2.28E-18 3.39E-18
  5.65E-19 1.52E-18 2.34E-19 1.31E-19 1.58E-19 1.51E-19 1.18E-19 1.50E-19
   0.1667  0.0833  0.5000    1  3.33594E-18 kpt; spin; max resid(k); each band:
  1.05E-19 1.25E-18 1.07E-18 1.67E-18 1.93E-18 3.34E-18 3.28E-18 2.30E-18
  7.10E-19 4.71E-19 1.51E-18 6.16E-20 1.50E-19 2.17E-19 1.41E-19 1.36E-19
   0.1667  0.3333 -0.2500    1  2.72535E-18 kpt; spin; max resid(k); each band:
  1.42E-19 2.16E-18 1.75E-18 1.64E-18 1.46E-18 1.16E-18 1.85E-18 2.18E-18
  2.44E-18 2.73E-18 1.98E-18 8.91E-20 9.14E-20 2.41E-19 1.22E-19 1.06E-19
   0.2500  0.0000  0.5000    1  3.94697E-18 kpt; spin; max resid(k); each band:
  8.42E-20 2.95E-19 1.61E-18 2.09E-18 3.95E-18 2.24E-18 2.02E-18 2.58E-18
  4.00E-19 2.59E-19 1.31E-18 1.02E-19 1.27E-19 1.59E-19 9.59E-20 2.49E-19
   0.2500  0.0833 -0.4167    1  2.70783E-18 kpt; spin; max resid(k); each band:
  1.03E-19 1.13E-18 1.53E-18 2.71E-18 2.25E-18 2.08E-18 1.99E-18 2.46E-18
  1.39E-18 3.70E-19 1.34E-18 6.56E-20 1.53E-19 1.67E-19 1.07E-19 1.35E-19
   0.2500  0.1667 -0.3333    1  2.87498E-18 kpt; spin; max resid(k); each band:
  1.25E-19 2.27E-18 2.25E-18 1.49E-18 1.45E-18 1.67E-18 1.11E-18 1.02E-18
  1.87E-18 2.87E-18 1.44E-18 5.25E-20 1.40E-19 1.66E-19 1.60E-19 5.60E-20
   0.2500  0.3333 -0.1667    1  2.53582E-18 kpt; spin; max resid(k); each band:
  1.48E-19 2.41E-18 1.49E-18 1.13E-18 1.48E-18 1.73E-18 8.36E-19 1.44E-18
  2.09E-18 1.83E-18 2.54E-18 1.42E-19 6.80E-20 1.84E-19 4.65E-20 1.27E-19
   0.3333  0.0000 -0.4167    1  3.30196E-18 kpt; spin; max resid(k); each band:
  9.44E-20 2.24E-19 3.30E-18 2.88E-18 1.87E-18 2.49E-18 2.15E-18 2.76E-18
  4.71E-19 2.67E-19 1.07E-18 1.69E-19 1.05E-19 1.72E-19 7.74E-20 9.77E-20
   0.3333  0.0833 -0.3333    1  3.20865E-18 kpt; spin; max resid(k); each band:
  1.20E-19 3.21E-18 1.92E-18 9.25E-19 1.94E-18 2.06E-18 1.94E-18 1.48E-18
  2.84E-18 3.45E-19 1.42E-18 1.12E-19 1.42E-19 1.73E-19 5.79E-20 1.28E-19
   0.3333  0.1667 -0.2500    1  3.62081E-18 kpt; spin; max resid(k); each band:
  1.20E-19 3.62E-18 1.82E-18 8.75E-19 1.71E-18 1.84E-18 1.01E-18 6.89E-19
  2.26E-18 3.02E-18 1.52E-18 9.79E-20 1.34E-19 1.37E-19 1.14E-19 8.92E-20
   0.3333  0.2500 -0.1667    1  3.33779E-18 kpt; spin; max resid(k); each band:
  1.40E-19 3.34E-18 1.52E-18 1.31E-18 1.13E-18 9.13E-19 1.68E-18 1.20E-18
  2.03E-18 1.55E-18 2.75E-18 1.40E-19 1.18E-19 9.34E-20 8.16E-20 8.08E-20
   0.3333  0.3333 -0.0833    1  3.24116E-18 kpt; spin; max resid(k); each band:
  1.61E-19 2.47E-18 1.21E-18 1.24E-18 1.19E-18 1.24E-18 1.29E-18 1.27E-18
  1.89E-18 1.72E-18 3.24E-18 1.59E-19 9.21E-20 1.07E-19 2.23E-20 7.30E-20
   0.0000  0.4167  0.5000    1  2.85680E-18 kpt; spin; max resid(k); each band:
  1.76E-19 2.72E-18 1.11E-18 1.33E-18 1.37E-18 1.21E-18 1.30E-18 1.27E-18
  2.26E-18 1.59E-18 2.86E-18 1.62E-19 7.78E-20 1.02E-19 2.28E-20 6.57E-20
   0.0833  0.0000  0.1667    1  3.61514E-18 kpt; spin; max resid(k); each band:
  3.30E-20 1.39E-18 1.35E-18 1.39E-18 2.16E-18 2.18E-18 2.12E-18 1.82E-18
  2.13E-19 3.62E-18 2.42E-19 1.25E-19 2.93E-19 3.74E-19 1.24E-20 7.12E-20
   0.0833  0.4167 -0.4167    1  2.78668E-18 kpt; spin; max resid(k); each band:
  1.92E-19 2.36E-18 1.41E-18 1.80E-18 5.21E-19 1.09E-18 9.75E-19 2.29E-18
  1.97E-18 2.79E-18 1.87E-18 1.30E-19 3.03E-20 1.30E-19 3.14E-20 7.10E-20
   0.1667  0.0000  0.2500    1  2.92367E-18 kpt; spin; max resid(k); each band:
  4.42E-20 2.59E-19 1.77E-18 2.08E-18 2.46E-18 1.91E-18 2.64E-18 2.57E-18
  5.89E-19 2.92E-18 2.48E-19 1.67E-19 1.85E-19 2.78E-19 7.77E-20 3.60E-20
   0.1667  0.0833  0.3333    1  3.18833E-18 kpt; spin; max resid(k); each band:
  5.02E-20 1.44E-18 6.49E-19 2.01E-18 2.97E-18 1.33E-18 1.94E-18 2.50E-18
  6.09E-19 3.19E-18 3.68E-19 1.66E-19 1.78E-19 2.04E-19 7.58E-20 1.02E-19
 outwf : prtvol=0 or 1, do not print more k-points.


 Seventeen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   2.91920591E+02 eigvalue=   1.98943355E+01  local=   1.01352252E+00
 4,5,6,7: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -4.94045745E+01  Hartree=   4.59202675E+01     xc=  -1.19830935E+01
     kin1=  -2.61638486E+02
 8,9,10: eventually, occupation + non-local contributions
    edocc=   9.78426969E-01     enl0=  -2.60239228E+01   enl1=  -3.25104217E+02
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -3.14427150E+02
 11,12,13 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.hart=   8.34186846E+00   fr.kin=   1.15633042E+02 fr.loc=  -1.46066710E+01
 14,15,16 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.nonl=   1.71816656E+02    fr.xc=  -2.04279264E+00  Ewald=   1.47297551E+01
 17 Non-relaxation  contributions : pseudopotential core energy
  pspcore=   1.24730519E+01
 Resulting in :
 2DEtotal=   -0.8082240488E+01 Ha. Also 2DEtotal=   -0.219928948368E+03 eV
    (2DErelax=   -3.1442715032E+02 Ha. 2DEnonrelax=    3.0634490983E+02 Ha)
    (  non-var. 2DEtotal :   -8.0822404982E+00 Ha)


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Found    16 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to    63 .

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13938, make ikpt,npw=   4   13938
- newkpt: read input wf with ikpt,npw=   5   13945, make ikpt,npw=   5   13945
- newkpt: read input wf with ikpt,npw=   6   13937, make ikpt,npw=   6   13937
- newkpt: read input wf with ikpt,npw=   7   13950, make ikpt,npw=   7   13950
- newkpt: read input wf with ikpt,npw=   8   13932, make ikpt,npw=   8   13932

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13938, make ikpt,npw=   4   13938
- newkpt: read input wf with ikpt,npw=   5   13945, make ikpt,npw=   5   13945
- newkpt: read input wf with ikpt,npw=   6   13937, make ikpt,npw=   6   13937
- newkpt: read input wf with ikpt,npw=   7   13950, make ikpt,npw=   7   13950
- newkpt: read input wf with ikpt,npw=   8   13932, make ikpt,npw=   8   13932

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=   9 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  10 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  11 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  12 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  13 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  14 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  15 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  16 by node    1
P newkpt: treating     16 bands with npw=   13941 for ikpt=  17 by node    2
P newkpt: treating     16 bands with npw=   13943 for ikpt=  18 by node    2
P newkpt: treating     16 bands with npw=   13966 for ikpt=  19 by node    2
P newkpt: treating     16 bands with npw=   13932 for ikpt=  20 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  21 by node    2
P newkpt: treating     16 bands with npw=   13954 for ikpt=  22 by node    2
P newkpt: treating     16 bands with npw=   13939 for ikpt=  23 by node    2
P newkpt: treating     16 bands with npw=   13937 for ikpt=  24 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  25 by node    3
P newkpt: treating     16 bands with npw=   13941 for ikpt=  26 by node    3
P newkpt: treating     16 bands with npw=   13926 for ikpt=  27 by node    3
P newkpt: treating     16 bands with npw=   13948 for ikpt=  28 by node    3
P newkpt: treating     16 bands with npw=   13941 for ikpt=  29 by node    3
P newkpt: treating     16 bands with npw=   13929 for ikpt=  30 by node    3
P newkpt: treating     16 bands with npw=   13954 for ikpt=  31 by node    3
P newkpt: treating     16 bands with npw=   13951 for ikpt=  32 by node    3
P newkpt: treating     16 bands with npw=   13960 for ikpt=  33 by node    4
P newkpt: treating     16 bands with npw=   13938 for ikpt=  34 by node    4
P newkpt: treating     16 bands with npw=   13929 for ikpt=  35 by node    4
P newkpt: treating     16 bands with npw=   13966 for ikpt=  36 by node    4
P newkpt: treating     16 bands with npw=   13960 for ikpt=  37 by node    4
P newkpt: treating     16 bands with npw=   13946 for ikpt=  38 by node    4
P newkpt: treating     16 bands with npw=   13926 for ikpt=  39 by node    4
P newkpt: treating     16 bands with npw=   13934 for ikpt=  40 by node    4
P newkpt: treating     16 bands with npw=   13943 for ikpt=  41 by node    5
P newkpt: treating     16 bands with npw=   13951 for ikpt=  42 by node    5
P newkpt: treating     16 bands with npw=   13949 for ikpt=  43 by node    5
P newkpt: treating     16 bands with npw=   13950 for ikpt=  44 by node    5
P newkpt: treating     16 bands with npw=   13936 for ikpt=  45 by node    5
P newkpt: treating     16 bands with npw=   13929 for ikpt=  46 by node    5
P newkpt: treating     16 bands with npw=   13938 for ikpt=  47 by node    5
P newkpt: treating     16 bands with npw=   13929 for ikpt=  48 by node    5
P newkpt: treating     16 bands with npw=   13926 for ikpt=  49 by node    6
P newkpt: treating     16 bands with npw=   13938 for ikpt=  50 by node    6
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   14.874882509654     -2.915E+02 5.923E-01 2.377E+05
 ETOT  2  -6.7730897972172     -2.165E+01 2.577E-02 1.555E+04
 ETOT  3  -8.0716971401878     -1.299E+00 1.350E-03 3.760E+02
 ETOT  4  -8.0857025286905     -1.401E-02 7.187E-05 4.669E+01
 ETOT  5  -8.0870517465222     -1.349E-03 4.725E-06 6.006E+00
 ETOT  6  -8.0871576260087     -1.059E-04 8.264E-07 3.012E-01
 ETOT  7  -8.0871642179199     -6.592E-06 3.565E-08 6.332E-03
 ETOT  8  -8.0871644851022     -2.672E-07 1.328E-09 1.677E-04
 ETOT  9  -8.0871644898377     -4.735E-09 6.342E-11 3.733E-06
 ETOT 10  -8.0871644899500     -1.123E-10 3.575E-12 5.374E-08
 ETOT 11  -8.0871644899534     -3.354E-12 6.288E-13 1.570E-09
 ETOT 12  -8.0871644899547     -1.364E-12 2.134E-14 1.782E-11
 ETOT 13  -8.0871644899558     -1.080E-12 4.994E-15 3.170E-13
 ETOT 14  -8.0871644899525      3.354E-12 1.655E-16 9.009E-15
 ETOT 15  -8.0871644899546     -2.160E-12 4.011E-17 3.515E-16
 ETOT 16  -8.0871644899551     -5.116E-13 4.115E-18 1.584E-17
 ETOT 17  -8.0871644899558     -6.253E-13 4.110E-18 1.002E-18
 ETOT 18  -8.0871644899557      5.684E-14 4.109E-18 1.167E-19

 At SCF step   18       vres2   =  1.17E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   1.1349E-18; max=  4.1087E-18
   0.0000  0.0000 -0.0833    1  3.20688E-18 kpt; spin; max resid(k); each band:
  2.19E-20 1.20E-18 2.20E-18 1.94E-18 5.74E-19 2.37E-18 1.15E-18 7.68E-19
  1.60E-18 4.54E-19 3.21E-18 1.30E-19 2.13E-19 4.48E-19 2.03E-19 1.60E-20
   0.0000  0.0000 -0.2500    1  3.36846E-18 kpt; spin; max resid(k); each band:
  5.01E-20 1.57E-18 1.58E-18 1.20E-18 2.71E-18 1.23E-18 1.07E-18 1.99E-18
  1.56E-18 5.31E-19 3.37E-18 1.31E-19 2.14E-19 2.30E-19 4.91E-20 4.86E-20
   0.0000  0.0833 -0.1667    1  2.89759E-18 kpt; spin; max resid(k); each band:
  4.52E-20 1.54E-18 1.38E-18 1.94E-18 2.54E-18 1.30E-18 2.17E-18 1.17E-18
  1.17E-18 2.90E-18 1.26E-18 1.73E-19 2.61E-19 2.40E-19 8.79E-20 8.29E-20
   0.0833  0.0833 -0.0833    1  3.61000E-18 kpt; spin; max resid(k); each band:
  3.30E-20 1.39E-18 1.35E-18 1.39E-18 2.16E-18 2.18E-18 2.12E-18 1.82E-18
  2.14E-19 3.61E-18 2.41E-19 1.25E-19 2.93E-19 3.74E-19 1.24E-20 7.15E-20
   0.0000  0.0000 -0.4167    1  3.04912E-18 kpt; spin; max resid(k); each band:
  1.08E-19 1.55E-18 1.69E-18 1.05E-18 3.05E-18 1.63E-18 1.19E-18 1.88E-18
  6.12E-19 2.86E-18 1.56E-18 3.86E-20 2.37E-19 2.39E-19 2.15E-20 2.60E-19
   0.0000  0.0833 -0.3333    1  2.89376E-18 kpt; spin; max resid(k); each band:
  8.95E-20 1.48E-18 1.47E-18 1.62E-18 2.89E-18 1.67E-18 1.65E-18 1.50E-18
  2.53E-18 1.48E-18 1.20E-18 8.99E-20 1.63E-19 2.71E-19 1.13E-19 1.10E-19
   0.0000  0.1667 -0.2500    1  2.80219E-18 kpt; spin; max resid(k); each band:
  6.76E-20 1.40E-18 1.17E-18 1.91E-18 2.80E-18 1.46E-18 1.51E-18 1.82E-18
  2.01E-18 1.46E-18 1.15E-18 1.29E-19 1.39E-19 2.56E-19 1.12E-19 1.10E-19
   0.0833  0.0833 -0.2500    1  3.46079E-18 kpt; spin; max resid(k); each band:
  6.14E-20 1.59E-18 1.03E-18 1.48E-18 3.24E-18 1.63E-18 2.21E-18 1.49E-18
  9.09E-19 3.46E-18 2.71E-19 1.41E-19 1.77E-19 2.43E-19 1.06E-19 8.28E-20
   0.0833  0.1667 -0.1667    1  3.18495E-18 kpt; spin; max resid(k); each band:
  5.03E-20 1.44E-18 6.48E-19 2.01E-18 2.97E-18 1.33E-18 1.94E-18 2.51E-18
  6.08E-19 3.18E-18 3.69E-19 1.66E-19 1.79E-19 2.04E-19 7.58E-20 1.02E-19
   0.1667  0.1667 -0.0833    1  2.91833E-18 kpt; spin; max resid(k); each band:
  4.42E-20 2.59E-19 1.77E-18 2.09E-18 2.46E-18 1.90E-18 2.66E-18 2.58E-18
  5.89E-19 2.92E-18 2.48E-19 1.67E-19 1.85E-19 2.78E-19 7.75E-20 3.60E-20
   0.0000  0.0833  0.5000    1  2.58191E-18 kpt; spin; max resid(k); each band:
  1.16E-19 1.51E-18 1.55E-18 2.51E-18 1.43E-18 1.16E-18 1.33E-18 1.43E-18
  1.73E-18 2.58E-18 1.49E-18 1.38E-20 1.33E-19 2.09E-19 1.47E-19 1.15E-19
   0.0000  0.1667 -0.4167    1  2.63442E-18 kpt; spin; max resid(k); each band:
  1.19E-19 1.38E-18 1.40E-18 1.61E-18 2.48E-18 1.42E-18 1.48E-18 1.76E-18
  2.63E-18 1.40E-18 1.49E-18 2.50E-20 1.27E-19 2.15E-19 1.53E-19 5.61E-20
   0.0000  0.2500 -0.3333    1  2.65879E-18 kpt; spin; max resid(k); each band:
  1.22E-19 1.21E-18 1.42E-18 1.70E-18 2.66E-18 1.76E-18 1.82E-18 1.84E-18
  2.60E-18 1.36E-18 1.55E-18 5.81E-20 1.10E-19 2.36E-19 1.34E-19 1.27E-19
   0.0833  0.0833 -0.4167    1  3.20544E-18 kpt; spin; max resid(k); each band:
  1.07E-19 1.25E-18 1.56E-18 6.68E-19 1.52E-18 3.21E-18 2.02E-18 2.49E-18
  1.59E-18 3.38E-19 1.40E-18 1.68E-20 1.32E-19 1.65E-19 1.15E-19 1.32E-19
   0.0833  0.1667 -0.3333    1  3.33557E-18 kpt; spin; max resid(k); each band:
  1.05E-19 1.25E-18 1.07E-18 1.67E-18 1.93E-18 3.34E-18 3.28E-18 2.30E-18
  7.12E-19 4.72E-19 1.51E-18 6.16E-20 1.50E-19 2.17E-19 1.41E-19 1.36E-19
   0.0833  0.2500 -0.2500    1  3.34996E-18 kpt; spin; max resid(k); each band:
  8.75E-20 6.63E-19 1.48E-18 1.98E-18 1.90E-18 3.14E-18 3.35E-18 2.48E-18
  4.40E-19 5.68E-19 1.48E-18 1.14E-19 1.37E-19 2.06E-19 1.42E-19 1.13E-19
   0.1667  0.1667 -0.2500    1  3.77946E-18 kpt; spin; max resid(k); each band:
  7.53E-20 4.05E-19 1.58E-18 1.61E-18 3.78E-18 2.07E-18 2.28E-18 3.39E-18
  5.65E-19 1.52E-18 2.34E-19 1.31E-19 1.58E-19 1.51E-19 1.18E-19 1.50E-19
   0.1667  0.2500 -0.1667    1  3.16383E-18 kpt; spin; max resid(k); each band:
  6.56E-20 3.30E-19 1.69E-18 1.88E-18 3.16E-18 2.07E-18 2.96E-18 2.70E-18
  1.70E-18 3.49E-19 2.60E-19 1.89E-19 1.54E-19 1.72E-19 1.15E-19 9.85E-20
   0.2500  0.2500 -0.0833    1  3.27192E-18 kpt; spin; max resid(k); each band:
  4.99E-20 1.87E-19 1.78E-18 1.84E-18 2.30E-18 1.57E-18 2.35E-18 3.27E-18
  1.79E-18 2.08E-19 2.46E-19 1.44E-19 1.61E-19 1.50E-19 1.09E-19 4.23E-20
   0.0000  0.0833  0.3333    1  3.05895E-18 kpt; spin; max resid(k); each band:
  7.98E-20 1.79E-18 2.33E-18 1.96E-18 1.35E-18 1.60E-18 1.28E-18 1.37E-18
  1.73E-18 1.37E-18 3.06E-18 1.29E-19 2.07E-19 2.00E-19 1.58E-19 7.12E-20
   0.0000  0.1667  0.4167    1  3.06135E-18 kpt; spin; max resid(k); each band:
  1.04E-19 3.06E-18 1.67E-18 1.34E-18 1.35E-18 1.49E-18 1.34E-18 1.17E-18
  2.07E-18 1.58E-18 2.54E-18 1.05E-19 1.76E-19 1.86E-19 1.76E-19 9.15E-20
   0.0000  0.2500  0.5000    1  2.95583E-18 kpt; spin; max resid(k); each band:
  1.29E-19 2.96E-18 1.58E-18 1.25E-18 1.22E-18 1.28E-18 1.29E-18 1.29E-18
  2.21E-18 2.79E-18 1.69E-18 8.84E-20 1.30E-19 1.56E-19 1.17E-19 1.03E-19
   0.0000  0.3333 -0.4167    1  3.06847E-18 kpt; spin; max resid(k); each band:
  1.93E-19 2.76E-18 1.19E-18 1.29E-18 1.57E-18 1.27E-18 1.32E-18 1.28E-18
  2.72E-18 3.07E-18 1.77E-18 1.22E-19 5.16E-20 1.47E-19 6.22E-20 7.99E-20
   0.0833  0.0833  0.4167    1  3.55379E-18 kpt; spin; max resid(k); each band:
  9.98E-20 2.09E-18 2.64E-18 1.92E-18 5.87E-19 1.41E-18 1.59E-18 1.83E-18
  4.78E-19 1.57E-18 3.55E-18 8.65E-20 1.37E-19 2.63E-19 1.00E-19 6.99E-20
   0.0833  0.1667  0.5000    1  3.27350E-18 kpt; spin; max resid(k); each band:
  1.26E-19 2.05E-18 2.87E-18 1.55E-18 1.31E-18 7.35E-19 9.73E-19 1.40E-18
  2.01E-18 3.27E-18 1.62E-18 5.97E-20 1.45E-19 2.35E-19 1.43E-19 1.01E-19
   0.0833  0.2500 -0.4167    1  2.87507E-18 kpt; spin; max resid(k); each band:
  1.26E-19 2.26E-18 2.25E-18 1.49E-18 1.45E-18 1.67E-18 1.10E-18 1.01E-18
  1.87E-18 2.88E-18 1.44E-18 5.26E-20 1.40E-19 1.67E-19 1.60E-19 5.60E-20
   0.0833  0.3333 -0.3333    1  3.05421E-18 kpt; spin; max resid(k); each band:
  1.30E-19 9.41E-19 1.72E-18 3.05E-18 2.09E-18 1.85E-18 1.18E-18 1.47E-18
  1.33E-18 2.87E-18 1.49E-18 8.74E-20 1.28E-19 1.43E-19 1.39E-19 9.24E-20
   0.1667  0.1667 -0.4167    1  3.37813E-18 kpt; spin; max resid(k); each band:
  1.10E-19 2.04E-18 2.51E-18 1.98E-18 4.00E-19 1.78E-18 1.86E-18 1.29E-18
  4.84E-19 3.38E-18 1.42E-18 4.28E-20 1.38E-19 1.78E-19 8.06E-20 1.23E-19
   0.1667  0.2500 -0.3333    1  2.70337E-18 kpt; spin; max resid(k); each band:
  1.03E-19 1.13E-18 1.53E-18 2.70E-18 2.25E-18 2.08E-18 1.99E-18 2.45E-18
  1.39E-18 3.70E-19 1.34E-18 6.56E-20 1.53E-19 1.67E-19 1.07E-19 1.35E-19
   0.1667  0.3333 -0.2500    1  3.86705E-18 kpt; spin; max resid(k); each band:
  1.04E-19 5.74E-19 1.46E-18 3.87E-18 2.31E-18 2.38E-18 2.41E-18 2.94E-18
  4.33E-19 4.35E-19 1.49E-18 1.21E-19 1.44E-19 1.21E-19 1.33E-19 1.51E-19
   0.2500  0.2500 -0.2500    1  3.95062E-18 kpt; spin; max resid(k); each band:
  8.42E-20 2.96E-19 1.60E-18 2.10E-18 3.95E-18 2.24E-18 2.02E-18 2.58E-18
  4.00E-19 2.59E-19 1.31E-18 1.02E-19 1.27E-19 1.59E-19 9.59E-20 2.49E-19
   0.2500  0.3333 -0.1667    1  3.19558E-18 kpt; spin; max resid(k); each band:
  7.22E-20 2.60E-19 1.68E-18 2.62E-18 3.20E-18 2.95E-18 2.29E-18 2.22E-18
  2.46E-19 1.23E-18 2.49E-19 1.42E-19 1.33E-19 1.37E-19 1.26E-19 9.85E-20
   0.3333  0.3333 -0.0833    1  3.57270E-18 kpt; spin; max resid(k); each band:
  5.74E-20 1.87E-19 1.89E-18 2.24E-18 2.31E-18 3.57E-18 2.13E-18 2.27E-18
  2.15E-19 7.22E-19 2.53E-19 1.25E-19 1.41E-19 1.54E-19 1.55E-19 2.64E-20
   0.0000  0.0833  0.1667    1  3.02514E-18 kpt; spin; max resid(k); each band:
  3.96E-20 1.88E-18 1.77E-18 1.94E-18 1.27E-18 1.68E-18 1.23E-18 1.19E-18
  1.77E-18 1.11E-18 3.03E-18 2.14E-19 2.26E-19 2.09E-19 2.55E-19 1.76E-20
   0.0000  0.1667  0.2500    1  3.21975E-18 kpt; spin; max resid(k); each band:
  6.71E-20 2.88E-18 1.71E-18 1.28E-18 1.18E-18 1.73E-18 1.38E-18 1.37E-18
  1.73E-18 1.18E-18 3.22E-18 2.50E-19 1.79E-19 1.71E-19 7.85E-20 1.69E-19
   0.0000  0.2500  0.3333    1  2.87288E-18 kpt; spin; max resid(k); each band:
  1.01E-19 2.66E-18 1.35E-18 1.12E-18 1.10E-18 1.56E-18 1.25E-18 1.14E-18
  1.36E-18 1.79E-18 2.87E-18 1.98E-19 1.27E-19 1.30E-19 2.45E-20 1.54E-19
   0.0000  0.3333  0.4167    1  3.24558E-18 kpt; spin; max resid(k); each band:
  1.61E-19 2.47E-18 1.21E-18 1.24E-18 1.19E-18 1.24E-18 1.29E-18 1.27E-18
  1.89E-18 1.72E-18 3.25E-18 1.59E-19 9.21E-20 1.07E-19 2.23E-20 7.27E-20
   0.0000  0.4167  0.5000    1  2.85838E-18 kpt; spin; max resid(k); each band:
  1.77E-19 2.71E-18 1.11E-18 1.33E-18 1.37E-18 1.21E-18 1.30E-18 1.27E-18
  2.27E-18 1.59E-18 2.86E-18 1.62E-19 7.79E-20 1.02E-19 2.29E-20 6.55E-20
   0.0833  0.0833  0.2500    1  4.10869E-18 kpt; spin; max resid(k); each band:
  5.08E-20 2.21E-18 2.35E-18 1.24E-18 6.57E-19 1.88E-18 2.84E-19 1.97E-18
  1.89E-18 2.40E-19 4.11E-18 1.71E-19 6.18E-20 4.94E-19 1.36E-19 2.92E-20
   0.0833  0.1667  0.3333    1  3.82129E-18 kpt; spin; max resid(k); each band:
  7.29E-20 2.16E-18 2.75E-18 6.33E-19 8.49E-19 1.74E-18 4.43E-19 2.17E-18
  1.83E-18 8.44E-19 3.82E-18 1.68E-19 9.54E-20 3.10E-19 1.31E-19 5.62E-20
   0.0833  0.2500  0.4167    1  3.30742E-18 kpt; spin; max resid(k); each band:
  8.88E-20 3.31E-18 1.97E-18 7.32E-19 9.40E-19 1.28E-18 1.43E-18 1.54E-18
  1.36E-18 1.97E-18 3.16E-18 1.53E-19 1.22E-19 1.96E-19 1.02E-19 9.91E-20
   0.0833  0.3333  0.5000    1  3.33678E-18 kpt; spin; max resid(k); each band:
  1.40E-19 3.34E-18 1.52E-18 1.31E-18 1.13E-18 9.25E-19 1.68E-18 1.20E-18
  2.03E-18 1.54E-18 2.75E-18 1.40E-19 1.18E-19 9.35E-20 8.16E-20 8.08E-20
   0.0833  0.4167 -0.4167    1  3.22838E-18 kpt; spin; max resid(k); each band:
  1.60E-19 2.97E-18 1.01E-18 9.47E-19 2.04E-18 1.41E-18 1.69E-18 4.57E-19
  1.90E-18 3.23E-18 1.52E-18 1.56E-19 9.30E-20 5.33E-20 7.56E-20 7.48E-20
   0.1667  0.1667  0.4167    1  3.70295E-18 kpt; spin; max resid(k); each band:
  7.74E-20 2.37E-18 3.23E-18 5.73E-19 5.07E-19 1.36E-18 1.64E-18 1.36E-18
  1.13E-18 1.30E-18 3.70E-18 1.14E-19 8.78E-20 3.09E-19 6.33E-20 7.36E-20
   0.1667  0.2500  0.5000    1  3.36621E-18 kpt; spin; max resid(k); each band:
  1.06E-19 3.37E-18 2.28E-18 8.97E-19 1.09E-18 6.43E-19 4.82E-19 1.95E-18
  2.23E-18 3.14E-18 1.37E-18 1.02E-19 1.14E-19 2.35E-19 7.63E-20 1.09E-19
   0.1667  0.3333 -0.4167    1  3.61876E-18 kpt; spin; max resid(k); each band:
  1.20E-19 3.62E-18 1.82E-18 8.77E-19 1.70E-18 1.84E-18 1.01E-18 6.89E-19
  2.26E-18 3.02E-18 1.52E-18 9.79E-20 1.34E-19 1.37E-19 1.14E-19 8.92E-20
   0.1667  0.4167 -0.3333    1  3.65011E-18 kpt; spin; max resid(k); each band:
  1.16E-19 3.65E-18 1.11E-18 1.06E-18 2.07E-18 2.06E-18 5.42E-19 7.06E-19
  1.95E-18 2.92E-18 1.47E-18 1.17E-19 1.27E-19 5.73E-20 1.20E-19 9.04E-20
   0.2500  0.2500 -0.4167    1  3.42449E-18 kpt; spin; max resid(k); each band:
  1.12E-19 3.25E-18 2.94E-18 1.40E-18 2.39E-19 1.43E-18 1.93E-18 1.54E-18
  9.39E-19 3.42E-18 1.43E-18 7.99E-20 1.33E-19 2.64E-19 2.74E-20 1.39E-19
   0.2500  0.3333 -0.3333    1  3.20654E-18 kpt; spin; max resid(k); each band:
  1.20E-19 3.21E-18 1.92E-18 9.27E-19 1.93E-18 2.06E-18 1.94E-18 1.48E-18
  2.85E-18 3.45E-19 1.42E-18 1.12E-19 1.42E-19 1.73E-19 5.79E-20 1.28E-19
   0.2500  0.4167 -0.2500    1  3.64643E-18 kpt; spin; max resid(k); each band:
  1.04E-19 4.96E-19 2.27E-18 3.65E-18 2.27E-18 2.17E-18 2.20E-18 2.83E-18
  6.64E-19 3.55E-19 1.33E-18 1.55E-19 1.37E-19 7.96E-20 9.72E-20 2.07E-19
 outwf : prtvol=0 or 1, do not print more k-points.


 Seventeen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   2.91885319E+02 eigvalue=   1.98848525E+01  local=   1.03040821E+00
 4,5,6,7: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -4.94103253E+01  Hartree=   4.59258992E+01     xc=  -1.19840423E+01
     kin1=  -2.61651099E+02
 8,9,10: eventually, occupation + non-local contributions
    edocc=   9.94755466E-01     enl0=  -2.60100588E+01   enl1=  -3.25097783E+02
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -3.14432074E+02
 11,12,13 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.hart=   8.34186846E+00   fr.kin=   1.15633042E+02 fr.loc=  -1.46066710E+01
 14,15,16 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.nonl=   1.71816656E+02    fr.xc=  -2.04279264E+00  Ewald=   1.47297551E+01
 17 Non-relaxation  contributions : pseudopotential core energy
  pspcore=   1.24730519E+01
 Resulting in :
 2DEtotal=   -0.8087164490E+01 Ha. Also 2DEtotal=   -0.220062937275E+03 eV
    (2DErelax=   -3.1443207432E+02 Ha. 2DEnonrelax=    3.0634490983E+02 Ha)
    (  non-var. 2DEtotal :   -8.0871645002E+00 Ha)


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Found     8 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to   126 .

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13926, make ikpt,npw=   6   13926
- newkpt: read input wf with ikpt,npw=   7   13945, make ikpt,npw=   7   13945
- newkpt: read input wf with ikpt,npw=   8   13937, make ikpt,npw=   8   13937
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13937, make ikpt,npw=  10   13937
- newkpt: read input wf with ikpt,npw=  11   13932, make ikpt,npw=  11   13932
- newkpt: read input wf with ikpt,npw=  12   13934, make ikpt,npw=  12   13934
- newkpt: read input wf with ikpt,npw=  13   13950, make ikpt,npw=  13   13950
- newkpt: read input wf with ikpt,npw=  14   13934, make ikpt,npw=  14   13934
- newkpt: read input wf with ikpt,npw=  15   13929, make ikpt,npw=  15   13929
- newkpt: read input wf with ikpt,npw=  16   13950, make ikpt,npw=  16   13950

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13926, make ikpt,npw=   6   13926
- newkpt: read input wf with ikpt,npw=   7   13945, make ikpt,npw=   7   13945
- newkpt: read input wf with ikpt,npw=   8   13937, make ikpt,npw=   8   13937
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13937, make ikpt,npw=  10   13937
- newkpt: read input wf with ikpt,npw=  11   13932, make ikpt,npw=  11   13932
- newkpt: read input wf with ikpt,npw=  12   13934, make ikpt,npw=  12   13934
- newkpt: read input wf with ikpt,npw=  13   13950, make ikpt,npw=  13   13950
- newkpt: read input wf with ikpt,npw=  14   13934, make ikpt,npw=  14   13934
- newkpt: read input wf with ikpt,npw=  15   13929, make ikpt,npw=  15   13929
- newkpt: read input wf with ikpt,npw=  16   13950, make ikpt,npw=  16   13950

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  17 by node    1
P newkpt: treating     16 bands with npw=   13937 for ikpt=  18 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  19 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  20 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  21 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  22 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  23 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  24 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  25 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  26 by node    1
P newkpt: treating     16 bands with npw=   13941 for ikpt=  27 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  28 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  29 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  30 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  31 by node    1
P newkpt: treating     16 bands with npw=   13966 for ikpt=  32 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  33 by node    2
P newkpt: treating     16 bands with npw=   13936 for ikpt=  34 by node    2
P newkpt: treating     16 bands with npw=   13943 for ikpt=  35 by node    2
P newkpt: treating     16 bands with npw=   13948 for ikpt=  36 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  37 by node    2
P newkpt: treating     16 bands with npw=   13960 for ikpt=  38 by node    2
P newkpt: treating     16 bands with npw=   13932 for ikpt=  39 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  40 by node    2
P newkpt: treating     16 bands with npw=   13954 for ikpt=  41 by node    2
P newkpt: treating     16 bands with npw=   13939 for ikpt=  42 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  43 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  44 by node    2
P newkpt: treating     16 bands with npw=   13926 for ikpt=  45 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  46 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  47 by node    2
P newkpt: treating     16 bands with npw=   13954 for ikpt=  48 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  49 by node    3
P newkpt: treating     16 bands with npw=   13951 for ikpt=  50 by node    3
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   3.8676452081179     -1.623E+02 9.094E-02 3.369E+04
 ETOT  2   1.3582353449687     -2.509E+00 4.322E-03 1.995E+03
 ETOT  3   1.1740772128360     -1.842E-01 1.240E-03 5.363E+02
 ETOT  4   1.1249738983712     -4.910E-02 3.092E-05 1.825E+00
 ETOT  5   1.1248376441390     -1.363E-04 3.882E-06 3.059E-02
 ETOT  6   1.1248359485381     -1.696E-06 1.064E-08 2.524E-03
 ETOT  7   1.1248358141007     -1.344E-07 1.474E-09 2.195E-05
 ETOT  8   1.1248358133388     -7.619E-10 1.491E-10 4.511E-07
 ETOT  9   1.1248358133197     -1.907E-11 8.177E-12 6.456E-09
 ETOT 10   1.1248358133194     -3.411E-13 7.597E-13 5.964E-11
 ETOT 11   1.1248358133201      7.390E-13 4.343E-14 6.230E-13
 ETOT 12   1.1248358133209      7.958E-13 5.093E-15 2.711E-14
 ETOT 13   1.1248358133201     -7.958E-13 3.438E-16 1.781E-16
 ETOT 14   1.1248358133197     -3.695E-13 4.550E-17 1.004E-17
 ETOT 15   1.1248358133194     -3.126E-13 3.750E-18 2.071E-18
 ETOT 16   1.1248358133193     -1.421E-13 6.971E-19 1.817E-19

 At SCF step   16       vres2   =  1.82E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.0706E-19; max=  6.9707E-19
   0.0000  0.0000 -0.0833    1  5.02197E-19 kpt; spin; max resid(k); each band:
  3.42E-21 3.40E-19 3.43E-19 3.72E-19 2.92E-19 4.69E-20 2.76E-19 2.70E-19
  2.76E-19 5.02E-19 3.57E-20 2.51E-20 6.25E-20 6.85E-20 6.11E-20 5.76E-21
   0.0000  0.0000 -0.2500    1  4.01181E-19 kpt; spin; max resid(k); each band:
  1.25E-20 3.17E-19 2.79E-19 3.95E-19 8.35E-20 3.29E-19 3.79E-19 4.01E-19
  3.47E-19 3.94E-19 2.64E-20 3.86E-20 5.81E-20 4.32E-20 1.00E-20 5.83E-20
   0.0000  0.0833 -0.1667    1  5.01634E-19 kpt; spin; max resid(k); each band:
  1.66E-20 3.13E-19 3.88E-19 4.37E-19 5.45E-20 3.03E-19 4.05E-19 3.18E-19
  3.02E-19 1.69E-21 5.02E-19 4.00E-20 4.01E-20 5.88E-20 5.37E-20 3.05E-20
   0.0833  0.0000 -0.1667    1  4.25116E-19 kpt; spin; max resid(k); each band:
  9.01E-21 3.76E-19 1.76E-19 2.62E-19 3.02E-19 3.70E-19 3.09E-19 3.63E-19
  4.25E-19 3.66E-19 1.31E-19 3.84E-20 4.99E-20 6.12E-20 1.86E-20 5.44E-20
   0.0833  0.0833 -0.0833    1  3.78018E-19 kpt; spin; max resid(k); each band:
  1.38E-20 3.06E-19 3.30E-19 3.27E-19 3.08E-19 1.81E-19 3.29E-19 3.33E-19
  3.07E-19 1.18E-19 3.78E-19 2.73E-20 6.11E-20 7.10E-20 7.33E-20 1.54E-20
   0.1667  0.0000 -0.0833    1  4.25115E-19 kpt; spin; max resid(k); each band:
  9.01E-21 3.76E-19 1.76E-19 2.62E-19 3.02E-19 3.70E-19 3.09E-19 3.63E-19
  4.25E-19 3.66E-19 1.31E-19 3.84E-20 4.99E-20 6.12E-20 1.86E-20 5.44E-20
   0.0000  0.0000 -0.4167    1  6.97065E-19 kpt; spin; max resid(k); each band:
  2.80E-20 3.09E-19 3.28E-19 3.95E-19 7.92E-20 3.78E-19 3.61E-19 3.61E-19
  4.28E-19 3.09E-20 3.69E-19 1.75E-20 7.70E-20 2.13E-20 1.22E-20 6.97E-19
   0.0000  0.0833 -0.3333    1  4.31667E-19 kpt; spin; max resid(k); each band:
  2.86E-20 3.01E-19 3.93E-19 4.23E-19 4.26E-20 3.78E-19 4.32E-19 2.80E-19
  4.03E-20 3.50E-19 4.02E-19 3.32E-20 4.72E-20 2.22E-20 3.46E-20 3.20E-20
   0.0000  0.1667 -0.2500    1  4.20240E-19 kpt; spin; max resid(k); each band:
  2.18E-20 3.25E-19 3.53E-19 4.09E-19 3.15E-20 2.96E-19 3.86E-19 1.94E-19
  1.46E-19 3.24E-19 4.20E-19 4.37E-20 2.88E-20 2.57E-20 2.23E-20 2.87E-20
   0.0833  0.0000 -0.3333    1  4.11428E-19 kpt; spin; max resid(k); each band:
  2.11E-20 3.44E-19 1.88E-19 2.45E-19 3.32E-19 3.62E-19 3.86E-19 4.11E-19
  3.54E-19 3.53E-19 1.34E-19 2.20E-20 2.72E-20 5.56E-20 2.92E-20 1.09E-19
   0.0833  0.0833 -0.2500    1  4.18263E-19 kpt; spin; max resid(k); each band:
  2.48E-20 3.24E-19 3.21E-19 3.53E-19 1.62E-19 3.56E-19 4.18E-19 3.53E-19
  3.09E-19 1.27E-19 3.76E-19 3.62E-20 2.18E-20 6.52E-20 3.83E-20 4.19E-20
   0.0833  0.1667 -0.1667    1  4.31989E-19 kpt; spin; max resid(k); each band:
  2.25E-20 3.10E-19 3.55E-19 4.32E-19 1.02E-19 2.56E-19 3.87E-19 3.10E-19
  3.43E-19 8.05E-20 4.01E-19 3.89E-20 3.12E-20 5.89E-20 3.16E-20 2.60E-20
   0.1667  0.0000 -0.2500    1  3.60564E-19 kpt; spin; max resid(k); each band:
  1.93E-20 3.42E-19 1.11E-19 2.92E-19 3.38E-19 3.59E-19 3.58E-19 3.61E-19
  3.52E-19 3.50E-19 1.31E-19 2.20E-20 2.74E-20 5.29E-20 3.67E-20 1.19E-19
   0.1667  0.0833 -0.1667    1  4.45816E-19 kpt; spin; max resid(k); each band:
  2.36E-20 3.88E-19 1.88E-19 3.40E-19 3.17E-19 3.49E-19 3.21E-19 4.46E-19
  2.96E-19 1.86E-19 2.92E-19 2.90E-20 5.22E-20 4.74E-20 5.88E-20 6.44E-20
   0.1667  0.1667 -0.0833    1  3.77456E-19 kpt; spin; max resid(k); each band:
  2.58E-20 3.40E-19 2.70E-19 3.77E-19 2.95E-19 2.29E-19 3.71E-19 3.48E-19
  3.54E-19 1.33E-19 3.54E-19 2.56E-20 5.52E-20 7.14E-20 2.67E-20 4.86E-20
   0.2500  0.0000 -0.1667    1  3.60564E-19 kpt; spin; max resid(k); each band:
  1.93E-20 3.42E-19 1.11E-19 2.92E-19 3.38E-19 3.59E-19 3.58E-19 3.61E-19
  3.52E-19 3.50E-19 1.31E-19 2.20E-20 2.74E-20 5.29E-20 3.67E-20 1.19E-19
   0.2500  0.0833 -0.0833    1  4.45815E-19 kpt; spin; max resid(k); each band:
  2.36E-20 3.88E-19 1.88E-19 3.40E-19 3.17E-19 3.49E-19 3.21E-19 4.46E-19
  2.96E-19 1.86E-19 2.92E-19 2.90E-20 5.22E-20 4.74E-20 5.88E-20 6.44E-20
   0.3333  0.0000 -0.0833    1  4.11428E-19 kpt; spin; max resid(k); each band:
  2.11E-20 3.44E-19 1.88E-19 2.45E-19 3.32E-19 3.62E-19 3.86E-19 4.11E-19
  3.54E-19 3.53E-19 1.34E-19 2.20E-20 2.72E-20 5.56E-20 2.92E-20 1.09E-19
   0.0000  0.0833  0.5000    1  4.23346E-19 kpt; spin; max resid(k); each band:
  3.00E-20 4.01E-19 2.32E-19 6.18E-20 3.54E-19 3.79E-19 3.00E-19 3.79E-19
  4.23E-19 1.59E-20 3.22E-19 9.15E-21 4.43E-20 1.09E-20 2.97E-20 6.88E-20
   0.0000  0.1667 -0.4167    1  4.47322E-19 kpt; spin; max resid(k); each band:
  3.37E-20 2.91E-19 3.94E-19 4.25E-19 2.96E-20 3.46E-19 2.80E-19 3.99E-19
  3.70E-20 4.47E-19 3.39E-19 1.64E-20 4.00E-20 8.71E-21 2.53E-20 4.74E-20
   0.0000  0.2500 -0.3333    1  4.64156E-19 kpt; spin; max resid(k); each band:
  3.31E-20 3.83E-19 3.76E-19 3.80E-19 5.59E-21 4.12E-19 2.90E-19 4.01E-19
  1.01E-19 4.64E-19 3.50E-19 3.28E-20 3.38E-20 7.19E-21 2.45E-20 3.36E-20
   0.0833  0.0000  0.5000    1  3.66506E-19 kpt; spin; max resid(k); each band:
  2.97E-20 2.77E-19 3.58E-19 3.05E-19 3.18E-19 1.17E-19 3.67E-19 2.40E-19
  2.54E-19 3.16E-19 3.49E-19 1.04E-20 1.65E-20 5.60E-20 2.86E-20 3.30E-20
   0.0833  0.1667 -0.3333    1  4.20397E-19 kpt; spin; max resid(k); each band:
  3.40E-20 3.15E-19 4.08E-19 4.18E-19 3.57E-19 6.62E-20 1.04E-19 3.81E-19
  3.20E-19 4.20E-19 3.49E-19 2.36E-20 3.63E-20 2.94E-20 2.34E-20 2.34E-20
   0.0833  0.2500 -0.2500    1  4.18263E-19 kpt; spin; max resid(k); each band:
  2.85E-20 3.98E-19 3.44E-19 4.18E-19 3.41E-19 4.92E-20 3.59E-20 3.80E-19
  3.77E-19 4.10E-19 3.18E-19 4.12E-20 2.88E-20 2.23E-20 1.66E-20 2.27E-20
   0.1667  0.0000 -0.4167    1  3.82022E-19 kpt; spin; max resid(k); each band:
  3.33E-20 3.82E-19 1.84E-19 2.39E-19 3.11E-19 3.33E-19 3.81E-19 3.51E-19
  3.52E-19 1.52E-19 3.41E-19 8.65E-21 1.62E-20 5.09E-20 3.72E-20 7.12E-20
   0.1667  0.0833 -0.3333    1  4.11276E-19 kpt; spin; max resid(k); each band:
  3.70E-20 3.93E-19 1.95E-19 3.20E-19 3.64E-19 2.73E-19 2.45E-19 4.11E-19
  3.28E-19 2.77E-19 3.75E-19 1.55E-20 1.29E-20 5.63E-20 5.92E-20 5.18E-20
   0.1667  0.1667 -0.2500    1  4.14611E-19 kpt; spin; max resid(k); each band:
  3.20E-20 3.37E-19 2.97E-19 3.56E-19 1.72E-19 3.55E-19 4.15E-19 1.03E-19
  3.55E-19 3.29E-19 3.26E-19 2.47E-20 1.59E-20 6.19E-20 3.62E-20 2.63E-20
   0.1667  0.2500 -0.1667    1  4.07022E-19 kpt; spin; max resid(k); each band:
  3.10E-20 4.07E-19 3.02E-19 3.84E-19 1.32E-19 3.27E-19 1.70E-19 2.43E-19
  3.14E-19 3.73E-19 3.41E-19 3.35E-20 2.13E-20 6.28E-20 1.77E-20 1.48E-20
   0.2500  0.0000 -0.3333    1  3.99393E-19 kpt; spin; max resid(k); each band:
  3.76E-20 1.17E-19 3.93E-19 3.73E-19 3.52E-19 3.32E-19 3.91E-19 3.82E-19
  3.99E-19 1.73E-19 3.58E-19 1.01E-20 1.75E-20 5.21E-20 3.00E-20 1.83E-19
   0.2500  0.0833 -0.2500    1  4.48762E-19 kpt; spin; max resid(k); each band:
  3.84E-20 2.02E-19 3.18E-19 3.23E-19 3.80E-19 3.44E-19 2.17E-19 4.49E-19
  3.46E-19 2.55E-19 3.39E-19 1.32E-20 2.63E-20 4.13E-20 6.95E-20 9.29E-20
   0.2500  0.1667 -0.1667    1  3.77269E-19 kpt; spin; max resid(k); each band:
  3.70E-20 2.82E-19 3.04E-19 3.11E-19 2.76E-19 3.53E-19 2.73E-19 2.94E-19
  3.01E-19 3.77E-19 3.21E-19 1.65E-20 4.69E-20 3.48E-20 6.02E-20 5.05E-20
   0.2500  0.2500 -0.0833    1  3.48052E-19 kpt; spin; max resid(k); each band:
  3.58E-20 3.09E-19 2.31E-19 3.45E-19 2.73E-19 2.68E-19 3.24E-19 8.61E-20
  3.03E-19 3.48E-19 3.15E-19 1.79E-20 4.19E-20 5.48E-20 1.45E-20 2.14E-20
   0.3333  0.0000 -0.2500    1  3.99393E-19 kpt; spin; max resid(k); each band:
  3.76E-20 1.17E-19 3.93E-19 3.73E-19 3.52E-19 3.32E-19 3.91E-19 3.82E-19
  3.99E-19 1.73E-19 3.58E-19 1.01E-20 1.75E-20 5.21E-20 3.00E-20 1.83E-19
   0.3333  0.0833 -0.1667    1  4.48763E-19 kpt; spin; max resid(k); each band:
  3.84E-20 2.02E-19 3.18E-19 3.23E-19 3.80E-19 3.44E-19 2.17E-19 4.49E-19
  3.46E-19 2.55E-19 3.39E-19 1.32E-20 2.63E-20 4.13E-20 6.95E-20 9.29E-20
   0.3333  0.1667 -0.0833    1  3.77269E-19 kpt; spin; max resid(k); each band:
  3.70E-20 2.82E-19 3.04E-19 3.11E-19 2.76E-19 3.53E-19 2.73E-19 2.94E-19
  3.01E-19 3.77E-19 3.21E-19 1.65E-20 4.69E-20 3.48E-20 6.02E-20 5.05E-20
   0.4167  0.0000 -0.1667    1  3.82023E-19 kpt; spin; max resid(k); each band:
  3.33E-20 3.82E-19 1.84E-19 2.39E-19 3.11E-19 3.33E-19 3.81E-19 3.51E-19
  3.52E-19 1.52E-19 3.41E-19 8.65E-21 1.62E-20 5.09E-20 3.72E-20 7.12E-20
   0.4167  0.0833 -0.0833    1  4.11276E-19 kpt; spin; max resid(k); each band:
  3.70E-20 3.93E-19 1.95E-19 3.20E-19 3.64E-19 2.73E-19 2.45E-19 4.11E-19
  3.28E-19 2.77E-19 3.75E-19 1.55E-20 1.29E-20 5.63E-20 5.92E-20 5.18E-20
   0.5000  0.0000 -0.0833    1  3.66505E-19 kpt; spin; max resid(k); each band:
  2.97E-20 2.77E-19 3.58E-19 3.05E-19 3.18E-19 1.17E-19 3.67E-19 2.40E-19
  2.54E-19 3.16E-19 3.49E-19 1.04E-20 1.65E-20 5.60E-20 2.86E-20 3.30E-20
   0.0000  0.0833  0.3333    1  4.70846E-19 kpt; spin; max resid(k); each band:
  1.36E-20 4.12E-19 1.16E-19 1.99E-19 3.89E-19 3.83E-19 3.42E-19 3.41E-19
  4.20E-19 4.71E-19 2.33E-21 2.87E-20 5.00E-20 2.14E-20 2.17E-20 1.48E-19
   0.0000  0.1667  0.4167    1  4.87575E-19 kpt; spin; max resid(k); each band:
  2.08E-20 2.80E-20 4.04E-19 2.47E-19 4.11E-19 3.49E-19 3.35E-19 4.41E-19
  4.88E-19 3.77E-19 3.00E-21 2.06E-20 4.10E-20 9.65E-21 5.82E-20 2.84E-19
   0.0000  0.2500  0.5000    1  4.57628E-19 kpt; spin; max resid(k); each band:
  2.65E-20 1.16E-20 4.03E-19 3.06E-19 4.58E-19 3.47E-19 3.09E-19 3.83E-19
  3.69E-19 3.61E-21 3.70E-19 2.15E-20 3.36E-20 5.20E-21 1.08E-19 3.64E-19
   0.0000  0.3333 -0.4167    1  4.57593E-19 kpt; spin; max resid(k); each band:
  3.03E-20 2.59E-21 4.36E-19 3.78E-19 4.15E-19 3.67E-19 3.41E-19 3.91E-19
  4.58E-19 3.65E-21 3.98E-19 3.52E-20 2.36E-20 1.98E-21 2.86E-20 5.61E-20
   0.0833  0.1667  0.5000    1  4.81402E-19 kpt; spin; max resid(k); each band:
  2.78E-20 3.63E-19 1.61E-19 2.52E-19 3.76E-19 4.09E-19 4.18E-19 3.37E-19
  4.81E-19 3.41E-20 3.76E-19 1.28E-20 3.45E-20 3.41E-20 3.09E-20 1.77E-19
   0.0833  0.2500 -0.4167    1  4.69176E-19 kpt; spin; max resid(k); each band:
  3.14E-20 1.83E-19 3.00E-19 3.47E-19 3.59E-19 3.43E-19 3.21E-19 3.84E-19
  4.69E-19 2.05E-20 3.48E-19 1.45E-20 3.49E-20 1.68E-20 4.37E-20 1.20E-19
   0.0833  0.3333 -0.3333    1  5.08334E-19 kpt; spin; max resid(k); each band:
  3.60E-20 4.11E-19 3.05E-19 1.10E-19 3.88E-19 3.83E-19 3.54E-19 3.89E-19
  5.08E-19 1.49E-20 3.85E-19 2.72E-20 3.67E-20 8.67E-21 7.29E-20 3.79E-20
   0.1667  0.2500 -0.3333    1  3.93184E-19 kpt; spin; max resid(k); each band:
  3.45E-20 3.82E-19 3.26E-19 2.45E-19 2.59E-19 3.06E-19 3.69E-19 2.16E-19
  2.56E-19 3.93E-19 3.38E-19 1.50E-20 2.12E-20 3.94E-20 1.78E-20 6.36E-20
   0.1667  0.3333 -0.2500    1  4.30820E-19 kpt; spin; max resid(k); each band:
  3.65E-20 4.31E-19 3.61E-19 8.71E-20 3.23E-19 3.64E-19 3.79E-19 1.11E-19
  3.75E-19 4.27E-19 3.33E-19 2.91E-20 2.52E-20 2.71E-20 2.30E-20 5.61E-20
   0.2500  0.0000  0.5000    1  3.90047E-19 kpt; spin; max resid(k); each band:
  4.41E-20 2.90E-19 2.95E-19 3.77E-19 1.12E-19 2.74E-19 3.90E-19 2.59E-19
  3.21E-19 3.52E-19 3.14E-19 1.56E-20 1.32E-20 5.26E-20 2.83E-20 4.50E-20
   0.2500  0.0833 -0.4167    1  4.13528E-19 kpt; spin; max resid(k); each band:
  4.80E-20 3.21E-19 2.39E-19 1.88E-19 3.28E-19 4.14E-19 3.78E-19 2.80E-19
  3.14E-19 3.10E-19 3.54E-19 1.07E-20 1.22E-20 4.19E-20 5.81E-20 5.64E-20
   0.2500  0.3333 -0.1667    1  3.84784E-19 kpt; spin; max resid(k); each band:
  4.70E-20 3.85E-19 3.11E-19 2.38E-19 1.84E-19 2.15E-19 2.50E-19 3.76E-19
  3.77E-19 3.00E-19 3.48E-19 1.94E-20 1.46E-20 5.69E-20 9.89E-21 1.77E-20
 outwf : prtvol=0 or 1, do not print more k-points.


 Seventeen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   1.53926713E+02 eigvalue=   1.08594830E+01  local=  -2.14718595E-01
 4,5,6,7: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -2.53135923E+01  Hartree=   2.92249188E+01     xc=  -4.74983664E+00
     kin1=  -1.25388651E+02
 8,9,10: eventually, occupation + non-local contributions
    edocc=   7.92397511E-01     enl0=  -5.37190856E+00   enl1=  -1.98839631E+02
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -1.65074826E+02
 11,12,13 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.hart=  -9.45724089E+00   fr.kin=   5.78165211E+01 fr.loc=   7.83697119E+00
 14,15,16 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.nonl=   1.04207570E+02    fr.xc=  -2.82554971E-01  Ewald=   6.07839497E+00
 17 Non-relaxation  contributions : pseudopotential core energy
  pspcore=   0.00000000E+00
 Resulting in :
 2DEtotal=    0.1124835813E+01 Ha. Also 2DEtotal=    0.306083390957E+02 eV
    (2DErelax=   -1.6507482569E+02 Ha. 2DEnonrelax=    1.6619966150E+02 Ha)
    (  non-var. 2DEtotal :    1.1248358108E+00 Ha)


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Found     8 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to   126 .

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13945, make ikpt,npw=   7   13945
- newkpt: read input wf with ikpt,npw=   8   13937, make ikpt,npw=   8   13937
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13937, make ikpt,npw=  11   13937
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13932, make ikpt,npw=  13   13932
- newkpt: read input wf with ikpt,npw=  14   13934, make ikpt,npw=  14   13934
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13950, make ikpt,npw=  16   13950

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13926, make ikpt,npw=   5   13926
- newkpt: read input wf with ikpt,npw=   6   13938, make ikpt,npw=   6   13938
- newkpt: read input wf with ikpt,npw=   7   13945, make ikpt,npw=   7   13945
- newkpt: read input wf with ikpt,npw=   8   13937, make ikpt,npw=   8   13937
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13950, make ikpt,npw=  10   13950
- newkpt: read input wf with ikpt,npw=  11   13937, make ikpt,npw=  11   13937
- newkpt: read input wf with ikpt,npw=  12   13937, make ikpt,npw=  12   13937
- newkpt: read input wf with ikpt,npw=  13   13932, make ikpt,npw=  13   13932
- newkpt: read input wf with ikpt,npw=  14   13934, make ikpt,npw=  14   13934
- newkpt: read input wf with ikpt,npw=  15   13934, make ikpt,npw=  15   13934
- newkpt: read input wf with ikpt,npw=  16   13950, make ikpt,npw=  16   13950

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  17 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  18 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  19 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  20 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  21 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  22 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  23 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  24 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  25 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  26 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  27 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  28 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  29 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  30 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  31 by node    1
P newkpt: treating     16 bands with npw=   13941 for ikpt=  32 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  33 by node    2
P newkpt: treating     16 bands with npw=   13943 for ikpt=  34 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  35 by node    2
P newkpt: treating     16 bands with npw=   13936 for ikpt=  36 by node    2
P newkpt: treating     16 bands with npw=   13943 for ikpt=  37 by node    2
P newkpt: treating     16 bands with npw=   13966 for ikpt=  38 by node    2
P newkpt: treating     16 bands with npw=   13954 for ikpt=  39 by node    2
P newkpt: treating     16 bands with npw=   13939 for ikpt=  40 by node    2
P newkpt: treating     16 bands with npw=   13939 for ikpt=  41 by node    2
P newkpt: treating     16 bands with npw=   13954 for ikpt=  42 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  43 by node    2
P newkpt: treating     16 bands with npw=   13932 for ikpt=  44 by node    2
P newkpt: treating     16 bands with npw=   13932 for ikpt=  45 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  46 by node    2
P newkpt: treating     16 bands with npw=   13926 for ikpt=  47 by node    2
P newkpt: treating     16 bands with npw=   13926 for ikpt=  48 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  49 by node    3
P newkpt: treating     16 bands with npw=   13941 for ikpt=  50 by node    3
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   3.8675430068774     -1.623E+02 9.094E-02 3.369E+04
 ETOT  2   1.3580681238523     -2.509E+00 6.367E-03 1.995E+03
 ETOT  3   1.1739460816046     -1.841E-01 1.285E-03 5.363E+02
 ETOT  4   1.1248484263014     -4.910E-02 2.470E-05 1.825E+00
 ETOT  5   1.1247121265689     -1.363E-04 5.389E-06 3.060E-02
 ETOT  6   1.1247104301190     -1.696E-06 1.298E-08 2.525E-03
 ETOT  7   1.1247102955580     -1.346E-07 1.074E-09 2.196E-05
 ETOT  8   1.1247102947916     -7.664E-10 1.910E-10 4.511E-07
 ETOT  9   1.1247102947752     -1.637E-11 1.148E-11 6.465E-09
 ETOT 10   1.1247102947750     -1.990E-13 1.305E-12 5.917E-11
 ETOT 11   1.1247102947734     -1.620E-12 6.187E-14 6.230E-13
 ETOT 12   1.1247102947736      2.274E-13 1.053E-14 2.675E-14
 ETOT 13   1.1247102947751      1.506E-12 5.264E-16 1.752E-16
 ETOT 14   1.1247102947750     -1.137E-13 1.010E-16 1.024E-17
 ETOT 15   1.1247102947737     -1.307E-12 5.429E-18 2.194E-18
 ETOT 16   1.1247102947737      2.842E-14 1.378E-18 1.564E-19

 At SCF step   16       vres2   =  1.56E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.0774E-19; max=  1.3779E-18
   0.0000  0.0000 -0.0833    1  3.71713E-19 kpt; spin; max resid(k); each band:
  3.42E-21 3.25E-19 3.58E-19 3.72E-19 1.61E-19 1.79E-19 2.76E-19 2.61E-19
  2.84E-19 2.69E-19 2.70E-19 2.51E-20 7.38E-20 5.67E-20 6.11E-20 5.76E-21
   0.0000  0.0000 -0.2500    1  4.45284E-19 kpt; spin; max resid(k); each band:
  1.25E-20 2.28E-19 3.68E-19 1.97E-19 2.82E-19 3.29E-19 3.35E-19 4.45E-19
  3.47E-19 2.03E-19 2.17E-19 3.86E-20 3.49E-20 6.83E-20 1.00E-20 5.82E-20
   0.0000  0.0833 -0.1667    1  4.25111E-19 kpt; spin; max resid(k); each band:
  9.01E-21 3.76E-19 1.76E-19 2.62E-19 3.02E-19 3.70E-19 3.09E-19 3.63E-19
  4.25E-19 3.66E-19 1.31E-19 3.84E-20 4.99E-20 6.12E-20 1.86E-20 5.44E-20
   0.0000  0.1667 -0.0833    1  4.25113E-19 kpt; spin; max resid(k); each band:
  9.01E-21 3.76E-19 1.76E-19 2.62E-19 3.02E-19 3.70E-19 3.09E-19 3.63E-19
  4.25E-19 3.66E-19 1.31E-19 3.84E-20 4.99E-20 6.12E-20 1.86E-20 5.44E-20
   0.0833  0.0000 -0.1667    1  5.01643E-19 kpt; spin; max resid(k); each band:
  1.66E-20 3.13E-19 3.88E-19 4.37E-19 5.45E-20 3.03E-19 4.05E-19 3.18E-19
  3.02E-19 1.69E-21 5.02E-19 3.99E-20 4.00E-20 5.88E-20 5.37E-20 3.05E-20
   0.0833  0.0833 -0.0833    1  3.78014E-19 kpt; spin; max resid(k); each band:
  1.38E-20 3.06E-19 3.30E-19 3.27E-19 3.08E-19 1.81E-19 3.29E-19 3.33E-19
  3.07E-19 1.18E-19 3.78E-19 2.73E-20 6.11E-20 7.10E-20 7.33E-20 1.54E-20
   0.0000  0.0000 -0.4167    1  1.37785E-18 kpt; spin; max resid(k); each band:
  2.91E-20 2.66E-19 3.71E-19 2.11E-19 2.63E-19 3.78E-19 3.07E-19 4.14E-19
  2.01E-19 2.58E-19 3.68E-19 1.73E-20 1.98E-20 7.81E-20 1.14E-20 1.38E-18
   0.0000  0.0833 -0.3333    1  4.11429E-19 kpt; spin; max resid(k); each band:
  2.11E-20 3.44E-19 1.88E-19 2.45E-19 3.32E-19 3.62E-19 3.86E-19 4.11E-19
  3.54E-19 3.53E-19 1.34E-19 2.21E-20 2.72E-20 5.56E-20 2.92E-20 1.09E-19
   0.0000  0.1667 -0.2500    1  3.60561E-19 kpt; spin; max resid(k); each band:
  1.93E-20 3.42E-19 1.11E-19 2.92E-19 3.38E-19 3.59E-19 3.58E-19 3.61E-19
  3.52E-19 3.50E-19 1.31E-19 2.20E-20 2.74E-20 5.29E-20 3.67E-20 1.19E-19
   0.0000  0.2500 -0.1667    1  3.60561E-19 kpt; spin; max resid(k); each band:
  1.93E-20 3.42E-19 1.11E-19 2.92E-19 3.38E-19 3.59E-19 3.58E-19 3.61E-19
  3.52E-19 3.50E-19 1.31E-19 2.20E-20 2.74E-20 5.29E-20 3.67E-20 1.19E-19
   0.0000  0.3333 -0.0833    1  4.11429E-19 kpt; spin; max resid(k); each band:
  2.11E-20 3.44E-19 1.88E-19 2.45E-19 3.32E-19 3.62E-19 3.86E-19 4.11E-19
  3.54E-19 3.53E-19 1.34E-19 2.21E-20 2.72E-20 5.56E-20 2.92E-20 1.09E-19
   0.0833  0.0000 -0.3333    1  4.31673E-19 kpt; spin; max resid(k); each band:
  2.86E-20 3.01E-19 3.93E-19 4.23E-19 4.26E-20 3.78E-19 4.32E-19 2.80E-19
  4.03E-20 3.50E-19 4.02E-19 3.43E-20 4.72E-20 2.22E-20 3.46E-20 3.20E-20
   0.0833  0.0833 -0.2500    1  4.18263E-19 kpt; spin; max resid(k); each band:
  2.48E-20 3.24E-19 3.21E-19 3.53E-19 1.62E-19 3.56E-19 4.18E-19 3.53E-19
  3.09E-19 1.27E-19 3.76E-19 3.63E-20 2.18E-20 6.52E-20 3.83E-20 4.19E-20
   0.0833  0.1667 -0.1667    1  4.45810E-19 kpt; spin; max resid(k); each band:
  2.36E-20 3.88E-19 1.88E-19 3.40E-19 3.17E-19 3.49E-19 3.21E-19 4.46E-19
  2.96E-19 1.86E-19 2.92E-19 2.90E-20 5.23E-20 4.75E-20 5.88E-20 6.44E-20
   0.0833  0.2500 -0.0833    1  4.45810E-19 kpt; spin; max resid(k); each band:
  2.36E-20 3.88E-19 1.88E-19 3.40E-19 3.17E-19 3.49E-19 3.21E-19 4.46E-19
  2.96E-19 1.86E-19 2.92E-19 2.90E-20 5.23E-20 4.75E-20 5.88E-20 6.44E-20
   0.1667  0.0000 -0.2500    1  4.20256E-19 kpt; spin; max resid(k); each band:
  2.18E-20 3.25E-19 3.53E-19 4.09E-19 3.15E-20 2.96E-19 3.86E-19 1.94E-19
  1.46E-19 3.24E-19 4.20E-19 4.37E-20 2.88E-20 2.56E-20 2.23E-20 2.86E-20
   0.1667  0.0833 -0.1667    1  4.31990E-19 kpt; spin; max resid(k); each band:
  2.25E-20 3.10E-19 3.55E-19 4.32E-19 1.02E-19 2.56E-19 3.87E-19 3.10E-19
  3.43E-19 8.05E-20 4.01E-19 3.89E-20 3.12E-20 5.89E-20 3.16E-20 2.60E-20
   0.1667  0.1667 -0.0833    1  3.77458E-19 kpt; spin; max resid(k); each band:
  2.58E-20 3.40E-19 2.70E-19 3.77E-19 2.95E-19 2.29E-19 3.71E-19 3.48E-19
  3.54E-19 1.33E-19 3.54E-19 2.56E-20 5.52E-20 7.14E-20 2.66E-20 4.86E-20
   0.0000  0.0833  0.5000    1  3.66507E-19 kpt; spin; max resid(k); each band:
  2.97E-20 2.78E-19 3.58E-19 3.05E-19 3.18E-19 1.17E-19 3.67E-19 2.40E-19
  2.54E-19 3.16E-19 3.49E-19 1.04E-20 1.65E-20 5.60E-20 2.86E-20 3.30E-20
   0.0000  0.1667 -0.4167    1  3.82029E-19 kpt; spin; max resid(k); each band:
  3.33E-20 3.82E-19 1.84E-19 2.39E-19 3.11E-19 3.33E-19 3.81E-19 3.51E-19
  3.52E-19 1.52E-19 3.41E-19 8.63E-21 1.62E-20 5.09E-20 3.72E-20 7.12E-20
   0.0000  0.2500 -0.3333    1  3.99396E-19 kpt; spin; max resid(k); each band:
  3.76E-20 1.17E-19 3.93E-19 3.73E-19 3.52E-19 3.32E-19 3.91E-19 3.82E-19
  3.99E-19 1.73E-19 3.58E-19 1.01E-20 1.75E-20 5.22E-20 3.00E-20 1.89E-19
   0.0000  0.3333 -0.2500    1  3.99394E-19 kpt; spin; max resid(k); each band:
  3.76E-20 1.17E-19 3.93E-19 3.73E-19 3.52E-19 3.32E-19 3.91E-19 3.82E-19
  3.99E-19 1.73E-19 3.58E-19 1.01E-20 1.75E-20 5.22E-20 3.00E-20 1.89E-19
   0.0000  0.4167 -0.1667    1  3.82031E-19 kpt; spin; max resid(k); each band:
  3.33E-20 3.82E-19 1.84E-19 2.39E-19 3.11E-19 3.33E-19 3.81E-19 3.51E-19
  3.52E-19 1.52E-19 3.41E-19 8.63E-21 1.62E-20 5.09E-20 3.72E-20 7.12E-20
   0.0000  0.5000 -0.0833    1  3.66507E-19 kpt; spin; max resid(k); each band:
  2.97E-20 2.78E-19 3.58E-19 3.05E-19 3.18E-19 1.17E-19 3.67E-19 2.40E-19
  2.54E-19 3.16E-19 3.49E-19 1.04E-20 1.65E-20 5.60E-20 2.86E-20 3.30E-20
   0.0833  0.0000  0.5000    1  4.23349E-19 kpt; spin; max resid(k); each band:
  3.00E-20 4.01E-19 2.32E-19 6.18E-20 3.54E-19 3.79E-19 3.00E-19 3.79E-19
  4.23E-19 1.59E-20 3.22E-19 9.15E-21 4.41E-20 1.09E-20 2.97E-20 6.88E-20
   0.0833  0.1667 -0.3333    1  4.11277E-19 kpt; spin; max resid(k); each band:
  3.70E-20 3.93E-19 1.95E-19 3.20E-19 3.64E-19 2.73E-19 2.45E-19 4.11E-19
  3.28E-19 2.77E-19 3.75E-19 1.54E-20 1.29E-20 5.63E-20 5.92E-20 5.19E-20
   0.0833  0.2500 -0.2500    1  4.48766E-19 kpt; spin; max resid(k); each band:
  3.84E-20 2.02E-19 3.18E-19 3.23E-19 3.80E-19 3.44E-19 2.17E-19 4.49E-19
  3.46E-19 2.55E-19 3.39E-19 1.32E-20 2.65E-20 4.13E-20 6.95E-20 9.28E-20
   0.0833  0.3333 -0.1667    1  4.48765E-19 kpt; spin; max resid(k); each band:
  3.84E-20 2.02E-19 3.18E-19 3.23E-19 3.80E-19 3.44E-19 2.17E-19 4.49E-19
  3.46E-19 2.55E-19 3.39E-19 1.32E-20 2.65E-20 4.13E-20 6.95E-20 9.28E-20
   0.0833  0.4167 -0.0833    1  4.11275E-19 kpt; spin; max resid(k); each band:
  3.70E-20 3.93E-19 1.95E-19 3.20E-19 3.64E-19 2.73E-19 2.45E-19 4.11E-19
  3.28E-19 2.77E-19 3.75E-19 1.54E-20 1.29E-20 5.63E-20 5.92E-20 5.19E-20
   0.1667  0.0000 -0.4167    1  4.47332E-19 kpt; spin; max resid(k); each band:
  3.37E-20 2.91E-19 3.94E-19 4.25E-19 2.96E-20 3.46E-19 2.80E-19 3.99E-19
  3.70E-20 4.47E-19 3.39E-19 1.62E-20 4.00E-20 8.72E-21 2.53E-20 4.74E-20
   0.1667  0.0833 -0.3333    1  4.20405E-19 kpt; spin; max resid(k); each band:
  3.40E-20 3.15E-19 4.08E-19 4.18E-19 3.57E-19 6.62E-20 1.04E-19 3.81E-19
  3.20E-19 4.20E-19 3.49E-19 2.36E-20 3.63E-20 2.94E-20 2.34E-20 2.34E-20
   0.1667  0.1667 -0.2500    1  4.14612E-19 kpt; spin; max resid(k); each band:
  3.20E-20 3.37E-19 2.97E-19 3.56E-19 1.72E-19 3.55E-19 4.15E-19 1.03E-19
  3.55E-19 3.29E-19 3.26E-19 2.47E-20 1.59E-20 6.20E-20 3.62E-20 2.63E-20
   0.1667  0.2500 -0.1667    1  3.77272E-19 kpt; spin; max resid(k); each band:
  3.63E-20 2.82E-19 3.04E-19 3.11E-19 2.76E-19 3.53E-19 2.73E-19 2.94E-19
  3.01E-19 3.77E-19 3.21E-19 1.65E-20 4.69E-20 3.48E-20 6.02E-20 5.04E-20
   0.1667  0.3333 -0.0833    1  3.77271E-19 kpt; spin; max resid(k); each band:
  3.63E-20 2.82E-19 3.04E-19 3.11E-19 2.76E-19 3.53E-19 2.73E-19 2.94E-19
  3.01E-19 3.77E-19 3.21E-19 1.65E-20 4.69E-20 3.48E-20 6.02E-20 5.04E-20
   0.2500  0.0000 -0.3333    1  4.64163E-19 kpt; spin; max resid(k); each band:
  3.31E-20 3.83E-19 3.76E-19 3.80E-19 5.59E-21 4.12E-19 2.90E-19 4.01E-19
  1.01E-19 4.64E-19 3.50E-19 3.29E-20 3.38E-20 7.11E-21 2.45E-20 3.36E-20
   0.2500  0.0833 -0.2500    1  4.18263E-19 kpt; spin; max resid(k); each band:
  2.84E-20 3.98E-19 3.44E-19 4.18E-19 3.41E-19 4.92E-20 3.59E-20 3.80E-19
  3.77E-19 4.10E-19 3.18E-19 4.14E-20 2.88E-20 2.23E-20 1.66E-20 2.27E-20
   0.2500  0.1667 -0.1667    1  4.07026E-19 kpt; spin; max resid(k); each band:
  3.11E-20 4.07E-19 3.02E-19 3.84E-19 1.32E-19 3.27E-19 1.70E-19 2.43E-19
  3.14E-19 3.73E-19 3.41E-19 3.34E-20 2.12E-20 6.28E-20 1.77E-20 1.49E-20
   0.2500  0.2500 -0.0833    1  3.48057E-19 kpt; spin; max resid(k); each band:
  3.55E-20 3.09E-19 2.31E-19 3.45E-19 2.73E-19 2.68E-19 3.24E-19 8.61E-20
  3.03E-19 3.48E-19 3.15E-19 1.79E-20 4.21E-20 5.48E-20 1.45E-20 2.16E-20
   0.0000  0.2500  0.5000    1  3.90049E-19 kpt; spin; max resid(k); each band:
  4.41E-20 2.90E-19 2.95E-19 3.77E-19 1.12E-19 2.74E-19 3.90E-19 2.59E-19
  3.21E-19 3.52E-19 3.14E-19 1.57E-20 1.32E-20 5.26E-20 2.83E-20 4.51E-20
   0.0000  0.3333 -0.4167    1  4.05725E-19 kpt; spin; max resid(k); each band:
  5.59E-20 3.21E-19 1.19E-19 4.03E-19 3.18E-19 2.75E-19 4.06E-19 2.50E-19
  3.55E-19 3.52E-19 3.21E-19 9.34E-21 1.09E-20 4.13E-20 1.74E-20 2.90E-20
   0.0000  0.4167 -0.3333    1  4.05723E-19 kpt; spin; max resid(k); each band:
  5.59E-20 3.21E-19 1.19E-19 4.03E-19 3.18E-19 2.75E-19 4.06E-19 2.50E-19
  3.55E-19 3.52E-19 3.21E-19 9.34E-21 1.09E-20 4.13E-20 1.74E-20 2.90E-20
   0.0000  0.5000 -0.2500    1  3.90049E-19 kpt; spin; max resid(k); each band:
  4.41E-20 2.90E-19 2.95E-19 3.77E-19 1.12E-19 2.74E-19 3.90E-19 2.59E-19
  3.21E-19 3.52E-19 3.14E-19 1.57E-20 1.32E-20 5.27E-20 2.83E-20 4.51E-20
   0.0000 -0.4167 -0.1667    1  4.14613E-19 kpt; spin; max resid(k); each band:
  3.20E-20 3.37E-19 2.97E-19 3.56E-19 1.72E-19 3.55E-19 4.15E-19 1.03E-19
  3.55E-19 3.29E-19 3.26E-19 2.47E-20 1.59E-20 6.20E-20 3.62E-20 2.63E-20
   0.0000 -0.3333 -0.0833    1  4.18262E-19 kpt; spin; max resid(k); each band:
  2.48E-20 3.24E-19 3.21E-19 3.53E-19 1.62E-19 3.56E-19 4.18E-19 3.53E-19
  3.09E-19 1.27E-19 3.76E-19 3.63E-20 2.18E-20 6.53E-20 3.83E-20 4.19E-20
   0.0833  0.0000  0.3333    1  4.70854E-19 kpt; spin; max resid(k); each band:
  1.36E-20 4.12E-19 1.16E-19 1.99E-19 3.89E-19 3.83E-19 3.42E-19 3.41E-19
  4.20E-19 4.71E-19 2.33E-21 2.87E-20 4.96E-20 2.14E-20 2.17E-20 1.48E-19
   0.0833  0.2500 -0.4167    1  4.13529E-19 kpt; spin; max resid(k); each band:
  4.79E-20 3.21E-19 2.39E-19 1.88E-19 3.28E-19 4.14E-19 3.78E-19 2.80E-19
  3.14E-19 3.10E-19 3.54E-19 1.07E-20 1.21E-20 4.19E-20 5.81E-20 5.64E-20
   0.0833  0.3333 -0.3333    1  4.36819E-19 kpt; spin; max resid(k); each band:
  5.66E-20 1.63E-19 3.35E-19 2.49E-19 4.37E-19 4.04E-19 3.74E-19 3.50E-19
  2.77E-19 3.29E-19 3.51E-19 1.25E-20 1.40E-20 3.22E-20 5.17E-20 9.71E-20
   0.0833  0.4167 -0.2500    1  4.36819E-19 kpt; spin; max resid(k); each band:
  5.67E-20 1.63E-19 3.35E-19 2.49E-19 4.37E-19 4.04E-19 3.74E-19 3.50E-19
  2.77E-19 3.29E-19 3.51E-19 1.25E-20 1.40E-20 3.22E-20 5.17E-20 9.71E-20
   0.0833  0.5000 -0.1667    1  4.13530E-19 kpt; spin; max resid(k); each band:
  4.80E-20 3.21E-19 2.39E-19 1.88E-19 3.28E-19 4.14E-19 3.78E-19 2.80E-19
  3.14E-19 3.10E-19 3.54E-19 1.07E-20 1.21E-20 4.19E-20 5.81E-20 5.64E-20
   0.1667  0.0000  0.4167    1  4.87579E-19 kpt; spin; max resid(k); each band:
  2.08E-20 2.80E-20 4.04E-19 2.47E-19 4.11E-19 3.49E-19 3.35E-19 4.41E-19
  4.88E-19 3.77E-19 3.00E-21 2.06E-20 4.06E-20 9.65E-21 5.82E-20 2.80E-19
 outwf : prtvol=0 or 1, do not print more k-points.


 Seventeen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   1.53925926E+02 eigvalue=   1.08591213E+01  local=  -2.14219667E-01
 4,5,6,7: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -2.53135727E+01  Hartree=   2.92248801E+01     xc=  -4.74983803E+00
     kin1=  -1.25388977E+02
 8,9,10: eventually, occupation + non-local contributions
    edocc=   7.92952887E-01     enl0=  -5.37166339E+00   enl1=  -1.98839561E+02
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -1.65074951E+02
 11,12,13 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.hart=  -9.45724089E+00   fr.kin=   5.78165211E+01 fr.loc=   7.83697119E+00
 14,15,16 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.nonl=   1.04207570E+02    fr.xc=  -2.82554971E-01  Ewald=   6.07839497E+00
 17 Non-relaxation  contributions : pseudopotential core energy
  pspcore=   0.00000000E+00
 Resulting in :
 2DEtotal=    0.1124710295E+01 Ha. Also 2DEtotal=    0.306049235624E+02 eV
    (2DErelax=   -1.6507495121E+02 Ha. 2DEnonrelax=    1.6619966150E+02 Ha)
    (  non-var. 2DEtotal :    1.1247102922E+00 Ha)


--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Found     8 symmetries that leave the perturbation invariant.
 symkpt : the number of k-points, thanks to the symmetries,
 is reduced to   126 .

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13945, make ikpt,npw=   6   13945
- newkpt: read input wf with ikpt,npw=   7   13937, make ikpt,npw=   7   13937
- newkpt: read input wf with ikpt,npw=   8   13950, make ikpt,npw=   8   13950
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13937, make ikpt,npw=  10   13937
- newkpt: read input wf with ikpt,npw=  11   13932, make ikpt,npw=  11   13932
- newkpt: read input wf with ikpt,npw=  12   13934, make ikpt,npw=  12   13934
- newkpt: read input wf with ikpt,npw=  13   13934, make ikpt,npw=  13   13934
- newkpt: read input wf with ikpt,npw=  14   13929, make ikpt,npw=  14   13929
- newkpt: read input wf with ikpt,npw=  15   13960, make ikpt,npw=  15   13960
- newkpt: read input wf with ikpt,npw=  16   13948, make ikpt,npw=  16   13948

--------------------------------------------------------------------------------

-inwffil : will read wavefunctions from disk file tbase3_xo_DS2_WFK
- newkpt: read input wf with ikpt,npw=   1   13965, make ikpt,npw=   1   13965
- newkpt: read input wf with ikpt,npw=   2   13938, make ikpt,npw=   2   13938
- newkpt: read input wf with ikpt,npw=   3   13926, make ikpt,npw=   3   13926
- newkpt: read input wf with ikpt,npw=   4   13926, make ikpt,npw=   4   13926
- newkpt: read input wf with ikpt,npw=   5   13938, make ikpt,npw=   5   13938
- newkpt: read input wf with ikpt,npw=   6   13945, make ikpt,npw=   6   13945
- newkpt: read input wf with ikpt,npw=   7   13937, make ikpt,npw=   7   13937
- newkpt: read input wf with ikpt,npw=   8   13950, make ikpt,npw=   8   13950
- newkpt: read input wf with ikpt,npw=   9   13950, make ikpt,npw=   9   13950
- newkpt: read input wf with ikpt,npw=  10   13937, make ikpt,npw=  10   13937
- newkpt: read input wf with ikpt,npw=  11   13932, make ikpt,npw=  11   13932
- newkpt: read input wf with ikpt,npw=  12   13934, make ikpt,npw=  12   13934
- newkpt: read input wf with ikpt,npw=  13   13934, make ikpt,npw=  13   13934
- newkpt: read input wf with ikpt,npw=  14   13929, make ikpt,npw=  14   13929
- newkpt: read input wf with ikpt,npw=  15   13960, make ikpt,npw=  15   13960
- newkpt: read input wf with ikpt,npw=  16   13948, make ikpt,npw=  16   13948

 Initialisation of the first-order wave-functions :
  ireadwf=   0
P newkpt: treating     16 bands with npw=   13965 for ikpt=   1 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   2 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   3 by node    0
P newkpt: treating     16 bands with npw=   13926 for ikpt=   4 by node    0
P newkpt: treating     16 bands with npw=   13938 for ikpt=   5 by node    0
P newkpt: treating     16 bands with npw=   13945 for ikpt=   6 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=   7 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   8 by node    0
P newkpt: treating     16 bands with npw=   13950 for ikpt=   9 by node    0
P newkpt: treating     16 bands with npw=   13937 for ikpt=  10 by node    0
P newkpt: treating     16 bands with npw=   13932 for ikpt=  11 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  12 by node    0
P newkpt: treating     16 bands with npw=   13934 for ikpt=  13 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  14 by node    0
P newkpt: treating     16 bands with npw=   13960 for ikpt=  15 by node    0
P newkpt: treating     16 bands with npw=   13948 for ikpt=  16 by node    0
P newkpt: treating     16 bands with npw=   13929 for ikpt=  17 by node    1
P newkpt: treating     16 bands with npw=   13929 for ikpt=  18 by node    1
P newkpt: treating     16 bands with npw=   13948 for ikpt=  19 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  20 by node    1
P newkpt: treating     16 bands with npw=   13960 for ikpt=  21 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  22 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  23 by node    1
P newkpt: treating     16 bands with npw=   13936 for ikpt=  24 by node    1
P newkpt: treating     16 bands with npw=   13931 for ikpt=  25 by node    1
P newkpt: treating     16 bands with npw=   13941 for ikpt=  26 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  27 by node    1
P newkpt: treating     16 bands with npw=   13943 for ikpt=  28 by node    1
P newkpt: treating     16 bands with npw=   13966 for ikpt=  29 by node    1
P newkpt: treating     16 bands with npw=   13932 for ikpt=  30 by node    1
P newkpt: treating     16 bands with npw=   13941 for ikpt=  31 by node    1
P newkpt: treating     16 bands with npw=   13954 for ikpt=  32 by node    1
P newkpt: treating     16 bands with npw=   13939 for ikpt=  33 by node    2
P newkpt: treating     16 bands with npw=   13939 for ikpt=  34 by node    2
P newkpt: treating     16 bands with npw=   13954 for ikpt=  35 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  36 by node    2
P newkpt: treating     16 bands with npw=   13932 for ikpt=  37 by node    2
P newkpt: treating     16 bands with npw=   13937 for ikpt=  38 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  39 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  40 by node    2
P newkpt: treating     16 bands with npw=   13926 for ikpt=  41 by node    2
P newkpt: treating     16 bands with npw=   13926 for ikpt=  42 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  43 by node    2
P newkpt: treating     16 bands with npw=   13931 for ikpt=  44 by node    2
P newkpt: treating     16 bands with npw=   13948 for ikpt=  45 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  46 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  47 by node    2
P newkpt: treating     16 bands with npw=   13929 for ikpt=  48 by node    2
P newkpt: treating     16 bands with npw=   13941 for ikpt=  49 by node    3
P newkpt: treating     16 bands with npw=   13954 for ikpt=  50 by node    3
 newkpt: prtvol=0 or 1, do not print more k-points.


     iter   2DEtotal(Ha)        deltaE(Ha) residm    vres2
-ETOT  1   3.8670122198056     -1.623E+02 9.094E-02 3.369E+04
 ETOT  2   1.3576082421923     -2.509E+00 4.009E-03 1.999E+03
 ETOT  3   1.1731481887978     -1.845E-01 3.258E-04 5.368E+02
 ETOT  4   1.1239947914909     -4.915E-02 2.954E-05 1.823E+00
 ETOT  5   1.1238585156645     -1.363E-04 1.606E-06 3.057E-02
 ETOT  6   1.1238568190818     -1.697E-06 3.477E-08 2.520E-03
 ETOT  7   1.1238566847918     -1.343E-07 2.521E-09 2.198E-05
 ETOT  8   1.1238566840276     -7.642E-10 2.420E-10 4.504E-07
 ETOT  9   1.1238566840105     -1.714E-11 2.117E-11 6.401E-09
 ETOT 10   1.1238566840087     -1.762E-12 2.188E-12 5.923E-11
 ETOT 11   1.1238566840098      1.080E-12 2.165E-13 6.207E-13
 ETOT 12   1.1238566840096     -2.274E-13 2.168E-14 2.707E-14
 ETOT 13   1.1238566840094     -2.274E-13 2.206E-15 1.774E-16
 ETOT 14   1.1238566840101      7.390E-13 2.153E-16 1.001E-17
 ETOT 15   1.1238566840107      5.684E-13 2.221E-17 2.111E-18
 ETOT 16   1.1238566840103     -3.695E-13 2.180E-18 1.836E-19

 At SCF step   16       vres2   =  1.84E-19 < tolvrs=  1.00E-18 =>converged.
-open ddk wf file :tbase3_xo_DS3_1WF10
-open ddk wf file :tbase3_xo_DS3_1WF11
-open ddk wf file :tbase3_xo_DS3_1WF12
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.0850E-19; max=  2.1798E-18
   0.0000  0.0000 -0.0833    1  5.01256E-19 kpt; spin; max resid(k); each band:
  3.42E-21 3.60E-19 3.23E-19 3.72E-19 5.65E-20 2.82E-19 2.76E-19 2.87E-19
  2.58E-19 3.67E-20 5.01E-19 2.51E-20 5.86E-20 7.15E-20 6.11E-20 5.75E-21
   0.0000  0.0000 -0.2500    1  4.56109E-19 kpt; spin; max resid(k); each band:
  1.25E-20 3.49E-19 2.47E-19 1.26E-19 3.52E-19 3.29E-19 4.56E-19 3.24E-19
  3.47E-19 3.34E-20 3.87E-19 3.86E-20 5.81E-20 4.29E-20 1.00E-20 5.83E-20
   0.0000  0.0833 -0.1667    1  4.25114E-19 kpt; spin; max resid(k); each band:
  9.01E-21 3.76E-19 1.76E-19 2.62E-19 3.02E-19 3.70E-19 3.09E-19 3.63E-19
  4.25E-19 3.66E-19 1.31E-19 3.84E-20 4.99E-20 6.12E-20 1.86E-20 5.43E-20
   0.0000  0.1667 -0.0833    1  4.25115E-19 kpt; spin; max resid(k); each band:
  9.01E-21 3.76E-19 1.76E-19 2.62E-19 3.02E-19 3.70E-19 3.09E-19 3.63E-19
  4.25E-19 3.66E-19 1.31E-19 3.84E-20 4.99E-20 6.12E-20 1.86E-20 5.43E-20
   0.0833  0.0833 -0.0833    1  5.28921E-19 kpt; spin; max resid(k); each band:
  2.92E-21 3.83E-19 1.76E-19 1.54E-19 3.46E-19 3.74E-19 3.31E-19 2.86E-19
  4.09E-19 5.29E-19 1.07E-22 3.65E-20 4.65E-20 4.14E-20 8.65E-21 3.20E-20
   0.0000  0.0000 -0.4167    1  2.17975E-18 kpt; spin; max resid(k); each band:
  3.69E-20 3.82E-19 2.56E-19 1.01E-19 3.69E-19 3.78E-19 4.16E-19 3.04E-19
  5.83E-20 3.98E-19 3.61E-19 1.68E-20 5.18E-20 4.76E-20 4.01E-21 2.18E-18
   0.0000  0.0833 -0.3333    1  4.11430E-19 kpt; spin; max resid(k); each band:
  2.11E-20 3.44E-19 1.88E-19 2.45E-19 3.32E-19 3.62E-19 3.86E-19 4.11E-19
  3.54E-19 3.53E-19 1.34E-19 2.20E-20 2.72E-20 5.55E-20 2.92E-20 1.09E-19
   0.0000  0.1667 -0.2500    1  3.60561E-19 kpt; spin; max resid(k); each band:
  1.93E-20 3.42E-19 1.11E-19 2.92E-19 3.38E-19 3.59E-19 3.58E-19 3.61E-19
  3.52E-19 3.50E-19 1.31E-19 2.20E-20 2.74E-20 5.29E-20 3.67E-20 1.18E-19
   0.0000  0.2500 -0.1667    1  3.60560E-19 kpt; spin; max resid(k); each band:
  1.93E-20 3.42E-19 1.11E-19 2.92E-19 3.38E-19 3.59E-19 3.58E-19 3.61E-19
  3.52E-19 3.50E-19 1.31E-19 2.20E-20 2.74E-20 5.29E-20 3.67E-20 1.18E-19
   0.0000  0.3333 -0.0833    1  4.11428E-19 kpt; spin; max resid(k); each band:
  2.11E-20 3.44E-19 1.88E-19 2.45E-19 3.32E-19 3.62E-19 3.86E-19 4.11E-19
  3.54E-19 3.53E-19 1.34E-19 2.20E-20 2.72E-20 5.55E-20 2.92E-20 1.09E-19
   0.0833  0.0833 -0.2500    1  4.70868E-19 kpt; spin; max resid(k); each band:
  1.36E-20 4.12E-19 1.16E-19 1.99E-19 3.89E-19 3.83E-19 3.42E-19 3.41E-19
  4.20E-19 4.71E-19 2.33E-21 2.87E-20 5.00E-20 2.14E-20 2.17E-20 1.47E-19
   0.0833  0.1667 -0.1667    1  4.84392E-19 kpt; spin; max resid(k); each band:
  9.14E-21 3.42E-19 8.39E-20 3.02E-19 3.36E-19 3.71E-19 3.69E-19 3.11E-19
  4.59E-19 4.84E-19 1.72E-20 3.13E-20 2.64E-20 4.30E-20 2.37E-20 1.11E-19
   0.0833  0.2500 -0.0833    1  4.84393E-19 kpt; spin; max resid(k); each band:
  9.14E-21 3.42E-19 8.39E-20 3.02E-19 3.36E-19 3.71E-19 3.69E-19 3.11E-19
  4.59E-19 4.84E-19 1.72E-20 3.13E-20 2.64E-20 4.30E-20 2.37E-20 1.11E-19
   0.1667  0.1667 -0.0833    1  4.95360E-19 kpt; spin; max resid(k); each band:
  6.61E-21 1.01E-20 3.59E-19 3.13E-19 3.18E-19 3.61E-19 3.85E-19 3.80E-19
  4.78E-19 4.95E-19 2.02E-22 3.52E-20 2.57E-20 2.17E-20 6.40E-20 2.75E-20
   0.0000  0.0833  0.5000    1  3.66507E-19 kpt; spin; max resid(k); each band:
  2.97E-20 2.77E-19 3.58E-19 3.05E-19 3.18E-19 1.17E-19 3.67E-19 2.40E-19
  2.54E-19 3.16E-19 3.49E-19 1.05E-20 1.65E-20 5.59E-20 2.86E-20 3.28E-20
   0.0000  0.1667 -0.4167    1  3.82019E-19 kpt; spin; max resid(k); each band:
  3.33E-20 3.82E-19 1.84E-19 2.39E-19 3.11E-19 3.33E-19 3.81E-19 3.51E-19
  3.52E-19 1.52E-19 3.41E-19 8.65E-21 1.62E-20 5.08E-20 3.72E-20 7.12E-20
   0.0000  0.2500 -0.3333    1  3.99392E-19 kpt; spin; max resid(k); each band:
  3.76E-20 1.17E-19 3.93E-19 3.73E-19 3.52E-19 3.32E-19 3.91E-19 3.82E-19
  3.99E-19 1.73E-19 3.58E-19 1.01E-20 1.76E-20 5.20E-20 3.00E-20 1.82E-19
   0.0000  0.3333 -0.2500    1  3.99391E-19 kpt; spin; max resid(k); each band:
  3.76E-20 1.17E-19 3.93E-19 3.73E-19 3.52E-19 3.32E-19 3.91E-19 3.82E-19
  3.99E-19 1.73E-19 3.58E-19 1.01E-20 1.76E-20 5.20E-20 3.00E-20 1.82E-19
   0.0000  0.4167 -0.1667    1  3.82020E-19 kpt; spin; max resid(k); each band:
  3.33E-20 3.82E-19 1.84E-19 2.39E-19 3.11E-19 3.33E-19 3.81E-19 3.51E-19
  3.52E-19 1.52E-19 3.41E-19 8.65E-21 1.62E-20 5.08E-20 3.72E-20 7.12E-20
   0.0000  0.5000 -0.0833    1  3.66506E-19 kpt; spin; max resid(k); each band:
  2.97E-20 2.78E-19 3.58E-19 3.05E-19 3.18E-19 1.17E-19 3.67E-19 2.40E-19
  2.54E-19 3.16E-19 3.49E-19 1.05E-20 1.65E-20 5.59E-20 2.86E-20 3.28E-20
   0.0833  0.0833 -0.4167    1  4.23346E-19 kpt; spin; max resid(k); each band:
  3.00E-20 4.01E-19 2.32E-19 6.18E-20 3.54E-19 3.79E-19 3.00E-19 3.79E-19
  4.23E-19 1.59E-20 3.22E-19 9.15E-21 4.42E-20 1.09E-20 2.97E-20 6.88E-20
   0.0833  0.1667 -0.3333    1  4.81401E-19 kpt; spin; max resid(k); each band:
  2.78E-20 3.63E-19 1.61E-19 2.52E-19 3.76E-19 4.09E-19 4.18E-19 3.37E-19
  4.81E-19 3.41E-20 3.76E-19 1.27E-20 3.45E-20 3.41E-20 3.09E-20 1.77E-19
   0.0833  0.2500 -0.2500    1  4.75290E-19 kpt; spin; max resid(k); each band:
  2.24E-20 6.30E-20 3.99E-19 3.01E-19 3.64E-19 3.88E-19 4.19E-19 3.43E-19
  4.75E-19 4.98E-20 3.67E-19 1.72E-20 1.92E-20 4.62E-20 3.49E-20 2.66E-19
   0.0833  0.3333 -0.1667    1  4.75289E-19 kpt; spin; max resid(k); each band:
  2.24E-20 6.30E-20 3.99E-19 3.01E-19 3.64E-19 3.88E-19 4.19E-19 3.43E-19
  4.75E-19 4.98E-20 3.67E-19 1.72E-20 1.92E-20 4.62E-20 3.49E-20 2.66E-19
   0.0833  0.4167 -0.0833    1  4.81402E-19 kpt; spin; max resid(k); each band:
  2.78E-20 3.63E-19 1.61E-19 2.52E-19 3.76E-19 4.09E-19 4.18E-19 3.37E-19
  4.81E-19 3.41E-20 3.76E-19 1.27E-20 3.45E-20 3.41E-20 3.09E-20 1.77E-19
   0.1667  0.1667 -0.2500    1  4.87582E-19 kpt; spin; max resid(k); each band:
  2.08E-20 2.80E-20 4.04E-19 2.47E-19 4.11E-19 3.49E-19 3.35E-19 4.41E-19
  4.88E-19 3.77E-19 3.00E-21 2.06E-20 4.10E-20 9.65E-21 5.82E-20 2.78E-19
   0.1667  0.2500 -0.1667    1  4.64054E-19 kpt; spin; max resid(k); each band:
  1.59E-20 1.49E-20 3.56E-19 3.05E-19 3.65E-19 3.60E-19 3.85E-19 4.14E-19
  3.80E-19 4.64E-19 5.42E-21 3.03E-20 2.03E-20 2.25E-20 1.36E-19 7.86E-20
   0.1667  0.3333 -0.0833    1  4.64051E-19 kpt; spin; max resid(k); each band:
  1.59E-20 1.49E-20 3.56E-19 3.05E-19 3.65E-19 3.60E-19 3.85E-19 4.14E-19
  3.80E-19 4.64E-19 5.42E-21 3.03E-20 2.03E-20 2.25E-20 1.36E-19 7.86E-20
   0.2500  0.2500 -0.0833    1  4.23275E-19 kpt; spin; max resid(k); each band:
  1.35E-20 1.50E-21 3.52E-19 2.88E-19 3.15E-19 3.61E-19 3.48E-19 4.23E-19
  3.46E-19 3.77E-19 2.70E-22 3.93E-20 1.71E-20 1.01E-20 1.05E-19 3.99E-21
   0.0000  0.0833  0.3333    1  4.18265E-19 kpt; spin; max resid(k); each band:
  2.48E-20 3.24E-19 3.21E-19 3.53E-19 1.62E-19 3.56E-19 4.18E-19 3.53E-19
  3.09E-19 1.27E-19 3.76E-19 3.61E-20 2.18E-20 6.52E-20 3.83E-20 4.19E-20
   0.0000  0.1667  0.4167    1  4.14612E-19 kpt; spin; max resid(k); each band:
  3.20E-20 3.37E-19 2.97E-19 3.56E-19 1.72E-19 3.55E-19 4.15E-19 1.03E-19
  3.55E-19 3.29E-19 3.26E-19 2.47E-20 1.59E-20 6.21E-20 3.62E-20 2.63E-20
   0.0000  0.2500  0.5000    1  3.90046E-19 kpt; spin; max resid(k); each band:
  4.40E-20 2.90E-19 2.95E-19 3.77E-19 1.12E-19 2.74E-19 3.90E-19 2.59E-19
  3.21E-19 3.52E-19 3.14E-19 1.56E-20 1.32E-20 5.28E-20 2.83E-20 4.50E-20
   0.0000  0.3333 -0.4167    1  4.05725E-19 kpt; spin; max resid(k); each band:
  5.60E-20 3.21E-19 1.19E-19 4.03E-19 3.18E-19 2.75E-19 4.06E-19 2.50E-19
  3.55E-19 3.52E-19 3.21E-19 9.33E-21 1.10E-20 4.13E-20 1.74E-20 2.90E-20
   0.0000  0.4167 -0.3333    1  4.05725E-19 kpt; spin; max resid(k); each band:
  5.60E-20 3.21E-19 1.19E-19 4.03E-19 3.18E-19 2.75E-19 4.06E-19 2.50E-19
  3.55E-19 3.52E-19 3.21E-19 9.33E-21 1.10E-20 4.13E-20 1.74E-20 2.90E-20
   0.0000  0.5000 -0.2500    1  3.90047E-19 kpt; spin; max resid(k); each band:
  4.40E-20 2.90E-19 2.95E-19 3.77E-19 1.12E-19 2.74E-19 3.90E-19 2.59E-19
  3.21E-19 3.52E-19 3.14E-19 1.56E-20 1.32E-20 5.28E-20 2.83E-20 4.50E-20
   0.0000 -0.4167 -0.1667    1  4.14612E-19 kpt; spin; max resid(k); each band:
  3.20E-20 3.37E-19 2.97E-19 3.56E-19 1.72E-19 3.55E-19 4.15E-19 1.03E-19
  3.55E-19 3.29E-19 3.26E-19 2.47E-20 1.59E-20 6.21E-20 3.62E-20 2.63E-20
   0.0000 -0.3333 -0.0833    1  4.18264E-19 kpt; spin; max resid(k); each band:
  2.48E-20 3.24E-19 3.21E-19 3.53E-19 1.62E-19 3.56E-19 4.18E-19 3.53E-19
  3.09E-19 1.27E-19 3.76E-19 3.61E-20 2.18E-20 6.52E-20 3.83E-20 4.19E-20
   0.0833  0.0833  0.4167    1  4.31669E-19 kpt; spin; max resid(k); each band:
  2.86E-20 3.01E-19 3.93E-19 4.23E-19 4.26E-20 3.78E-19 4.32E-19 2.80E-19
  4.03E-20 3.50E-19 4.02E-19 3.38E-20 4.72E-20 2.22E-20 3.46E-20 3.20E-20
   0.0833  0.1667  0.5000    1  4.20401E-19 kpt; spin; max resid(k); each band:
  3.40E-20 3.15E-19 4.08E-19 4.18E-19 3.57E-19 6.62E-20 1.04E-19 3.81E-19
  3.20E-19 4.20E-19 3.49E-19 2.36E-20 3.63E-20 2.94E-20 2.34E-20 2.34E-20
   0.0833  0.2500 -0.4167    1  3.93185E-19 kpt; spin; max resid(k); each band:
  3.45E-20 3.82E-19 3.26E-19 2.45E-19 2.59E-19 3.06E-19 3.69E-19 2.16E-19
  2.56E-19 3.93E-19 3.38E-19 1.50E-20 2.12E-20 3.94E-20 1.78E-20 6.36E-20
   0.0833  0.3333 -0.3333    1  4.40667E-19 kpt; spin; max resid(k); each band:
  3.64E-20 1.18E-19 3.94E-19 4.41E-19 3.47E-19 2.96E-19 3.87E-19 3.69E-19
  1.45E-19 4.04E-19 3.63E-19 1.28E-20 1.43E-20 5.00E-20 9.82E-21 3.26E-19
   0.0833  0.4167 -0.2500    1  4.40666E-19 kpt; spin; max resid(k); each band:
  3.64E-20 1.18E-19 3.94E-19 4.41E-19 3.47E-19 2.96E-19 3.87E-19 3.69E-19
  1.45E-19 4.04E-19 3.63E-19 1.28E-20 1.43E-20 5.00E-20 9.82E-21 3.26E-19
   0.0833  0.5000 -0.1667    1  3.93185E-19 kpt; spin; max resid(k); each band:
  3.45E-20 3.82E-19 3.26E-19 2.45E-19 2.59E-19 3.06E-19 3.69E-19 2.16E-19
  2.56E-19 3.93E-19 3.38E-19 1.50E-20 2.12E-20 3.94E-20 1.78E-20 6.36E-20
   0.0833 -0.4167 -0.0833    1  4.20401E-19 kpt; spin; max resid(k); each band:
  3.40E-20 3.15E-19 4.08E-19 4.18E-19 3.57E-19 6.62E-20 1.04E-19 3.81E-19
  3.20E-19 4.20E-19 3.49E-19 2.36E-20 3.63E-20 2.94E-20 2.34E-20 2.34E-20
   0.1667  0.1667 -0.4167    1  4.47328E-19 kpt; spin; max resid(k); each band:
  3.37E-20 2.91E-19 3.94E-19 4.25E-19 2.96E-20 3.46E-19 2.80E-19 3.99E-19
  3.70E-20 4.47E-19 3.39E-19 1.64E-20 4.00E-20 8.72E-21 2.53E-20 4.74E-20
   0.1667  0.2500 -0.3333    1  4.69181E-19 kpt; spin; max resid(k); each band:
  3.14E-20 1.83E-19 3.00E-19 3.47E-19 3.59E-19 3.43E-19 3.21E-19 3.84E-19
  4.69E-19 2.05E-20 3.48E-19 1.45E-20 3.50E-20 1.68E-20 4.37E-20 1.20E-19
   0.1667  0.3333 -0.2500    1  4.55382E-19 kpt; spin; max resid(k); each band:
  2.97E-20 4.69E-20 4.55E-19 4.47E-19 3.59E-19 3.41E-19 3.52E-19 4.02E-19
  4.41E-19 2.72E-20 3.86E-19 2.18E-20 1.80E-20 3.16E-20 1.81E-19 2.75E-19
   0.1667  0.4167 -0.1667    1  4.55383E-19 kpt; spin; max resid(k); each band:
  2.97E-20 4.69E-20 4.55E-19 4.47E-19 3.59E-19 3.41E-19 3.52E-19 4.02E-19
  4.41E-19 2.72E-20 3.86E-19 2.18E-20 1.80E-20 3.16E-20 1.81E-19 2.75E-19
   0.1667  0.5000 -0.0833    1  4.69180E-19 kpt; spin; max resid(k); each band:
  3.14E-20 1.83E-19 3.00E-19 3.47E-19 3.59E-19 3.43E-19 3.21E-19 3.84E-19
  4.69E-19 2.05E-20 3.48E-19 1.45E-20 3.50E-20 1.68E-20 4.37E-20 1.20E-19
   0.2500  0.2500 -0.2500    1  4.57623E-19 kpt; spin; max resid(k); each band:
  2.65E-20 1.16E-20 4.03E-19 3.06E-19 4.58E-19 3.47E-19 3.09E-19 3.83E-19
  3.69E-19 3.61E-21 3.70E-19 2.15E-20 3.36E-20 5.20E-21 1.08E-19 3.64E-19
 outwf : prtvol=0 or 1, do not print more k-points.


 Seventeen components of 2nd-order total energy (hartree) are
 1,2,3: 0th-order hamiltonian combined with 1st-order wavefunctions
     kin0=   1.53920569E+02 eigvalue=   1.08566617E+01  local=  -2.10826861E-01
 4,5,6,7: 1st-order hamiltonian combined with 1st and 0th-order wfs
 loc psp =  -2.53134390E+01  Hartree=   2.92246172E+01     xc=  -4.74984751E+00
     kin1=  -1.25391195E+02
 8,9,10: eventually, occupation + non-local contributions
    edocc=   7.96729736E-01     enl0=  -5.36999613E+00   enl1=  -1.98839078E+02
 1-10 gives the relaxation energy (to be shifted if some occ is /=2.0)
   erelax=  -1.65075805E+02
 11,12,13 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.hart=  -9.45724089E+00   fr.kin=   5.78165211E+01 fr.loc=   7.83697119E+00
 14,15,16 Non-relaxation  contributions : frozen-wavefunctions and Ewald
  fr.nonl=   1.04207570E+02    fr.xc=  -2.82554971E-01  Ewald=   6.07839497E+00
 17 Non-relaxation  contributions : pseudopotential core energy
  pspcore=   0.00000000E+00
 Resulting in :
 2DEtotal=    0.1123856684E+01 Ha. Also 2DEtotal=    0.305816956322E+02 eV
    (2DErelax=   -1.6507580482E+02 Ha. 2DEnonrelax=    1.6619966150E+02 Ha)
    (  non-var. 2DEtotal :    1.1238566815E+00 Ha)

================================================================================

 ---- first-order wavefunction calculations are completed ----


 ==> Compute Derivative Database <==
  
  2nd-order matrix (non-cartesian coordinates, masses not included,
   asr not included )
  cartesian coordinates for strain terms (1/ucvol factor 
   for elastic tensor components not included) 
     j1       j2             matrix element
  dir pert dir pert     real part     imaginary part
  
   1    1   1    1      3914.5158949842         0.0000000000
   1    1   2    1      1957.2579474921         0.0000000000
   1    1   3    1      1957.2579474921         0.0000000000
   1    1   1    2        -1.1927724774         0.0000000000
   1    1   2    2        -0.5963862387         0.0000000000
   1    1   3    2        -0.5963862387         0.0000000000
   1    1   1    3        -3.3393690761         0.0000000000
   1    1   2    3        -1.6696845381         0.0000000000
   1    1   3    3        -1.6696845381        -0.0000000000
   1    1   1    5       -68.6423329688         0.0000000000
   1    1   2    5         0.0000000000         0.0000000000
   1    1   3    5        -0.0000000000         0.0000000000
   1    1   1    6        -0.0000000000         0.0000000000
   1    1   2    6         0.0000000000         0.0000000000
   1    1   3    6        -0.0000000000         0.0000000000
   1    1   1    7         0.0000000000         0.0000000000
   1    1   2    7         0.8615315966         0.0000000000
   1    1   3    7         0.8611823520         0.0000000000
  
   2    1   1    1      1957.2579474921         0.0000000000
   2    1   2    1      3914.5158949842         0.0000000000
   2    1   3    1      1957.2579474921         0.0000000000
   2    1   1    2        -0.5963862387         0.0000000000
   2    1   2    2        -1.1927724774         0.0000000000
   2    1   3    2        -0.5963862387         0.0000000000
   2    1   1    3        -1.6696845381         0.0000000000
   2    1   2    3        -3.3393690761        -0.0000000000
   2    1   3    3        -1.6696845381         0.0000000000
   2    1   1    5         0.0000000000         0.0000000000
   2    1   2    5       -68.6423329688         0.0000000000
   2    1   3    5        -0.0000000000         0.0000000000
   2    1   1    6         0.0000000000         0.0000000000
   2    1   2    6        -0.0000000000         0.0000000000
   2    1   3    6        -0.0000000000         0.0000000000
   2    1   1    7         0.8615829567         0.0000000000
   2    1   2    7         0.0000000000         0.0000000000
   2    1   3    7         0.8611823520         0.0000000000
  
   3    1   1    1      1957.2579474921         0.0000000000
   3    1   2    1      1957.2579474921         0.0000000000
   3    1   3    1      3914.5158949842         0.0000000000
   3    1   1    2        -0.5963862387         0.0000000000
   3    1   2    2        -0.5963862387         0.0000000000
   3    1   3    2        -1.1927724774         0.0000000000
   3    1   1    3        -1.6696845381        -0.0000000000
   3    1   2    3        -1.6696845381         0.0000000000
   3    1   3    3        -3.3393690761        -0.0000000000
   3    1   1    5         0.0000000000         0.0000000000
   3    1   2    5        -0.0000000000         0.0000000000
   3    1   3    5       -68.6423329688         0.0000000000
   3    1   1    6         0.0000000000         0.0000000000
   3    1   2    6        -0.0000000000         0.0000000000
   3    1   3    6        -0.0000000000         0.0000000000
   3    1   1    7         0.8615829567         0.0000000000
   3    1   2    7         0.8615315966         0.0000000000
   3    1   3    7         0.0000000000         0.0000000000
  
   1    2   1    1        -1.1927724774         0.0000000000
   1    2   2    1        -0.5963862387         0.0000000000
   1    2   3    1        -0.5963862387         0.0000000000
   1    2   1    2      3914.5158949842         0.0000000000
   1    2   2    2      1957.2579474921         0.0000000000
   1    2   3    2      1957.2579474921         0.0000000000
   1    2   1    3        -3.3393690761        -0.0000000000
   1    2   2    3        -1.6696845381        -0.0000000000
   1    2   3    3        -1.6696845381         0.0000000000
   1    2   1    5       -68.6423329688         0.0000000000
   1    2   2    5         0.0000000000         0.0000000000
   1    2   3    5        -0.0000000000         0.0000000000
   1    2   1    6         0.0000000000         0.0000000000
   1    2   2    6        -0.0000000000         0.0000000000
   1    2   3    6         0.0000000000         0.0000000000
   1    2   1    7        -0.0000000000         0.0000000000
   1    2   2    7        -0.8615315966         0.0000000000
   1    2   3    7        -0.8611823520         0.0000000000
  
   2    2   1    1        -0.5963862387         0.0000000000
   2    2   2    1        -1.1927724774         0.0000000000
   2    2   3    1        -0.5963862387         0.0000000000
   2    2   1    2      1957.2579474921         0.0000000000
   2    2   2    2      3914.5158949842         0.0000000000
   2    2   3    2      1957.2579474921         0.0000000000
   2    2   1    3        -1.6696845381        -0.0000000000
   2    2   2    3        -3.3393690761         0.0000000000
   2    2   3    3        -1.6696845381        -0.0000000000
   2    2   1    5         0.0000000000         0.0000000000
   2    2   2    5       -68.6423329688         0.0000000000
   2    2   3    5        -0.0000000000         0.0000000000
   2    2   1    6        -0.0000000000         0.0000000000
   2    2   2    6         0.0000000000         0.0000000000
   2    2   3    6         0.0000000000         0.0000000000
   2    2   1    7        -0.8615829567         0.0000000000
   2    2   2    7        -0.0000000000         0.0000000000
   2    2   3    7        -0.8611823520         0.0000000000
  
   3    2   1    1        -0.5963862387         0.0000000000
   3    2   2    1        -0.5963862387         0.0000000000
   3    2   3    1        -1.1927724774         0.0000000000
   3    2   1    2      1957.2579474921         0.0000000000
   3    2   2    2      1957.2579474921         0.0000000000
   3    2   3    2      3914.5158949842         0.0000000000
   3    2   1    3        -1.6696845381         0.0000000000
   3    2   2    3        -1.6696845381        -0.0000000000
   3    2   3    3        -3.3393690761         0.0000000000
   3    2   1    5         0.0000000000         0.0000000000
   3    2   2    5        -0.0000000000         0.0000000000
   3    2   3    5       -68.6423329688         0.0000000000
   3    2   1    6        -0.0000000000         0.0000000000
   3    2   2    6         0.0000000000         0.0000000000
   3    2   3    6         0.0000000000         0.0000000000
   3    2   1    7        -0.8615829567         0.0000000000
   3    2   2    7        -0.8615315966         0.0000000000
   3    2   3    7        -0.0000000000         0.0000000000
  
   1    3   1    1        -3.3393691161        -0.0000000000
   1    3   2    1        -1.6696845580        -0.0000000000
   1    3   3    1        -1.6696845580         0.0000000000
   1    3   1    2        -3.3393691161         0.0000000000
   1    3   2    2        -1.6696845580         0.0000000000
   1    3   3    2        -1.6696845580        -0.0000000000
   1    3   1    3        19.8535736030         0.0000000000
   1    3   2    3         9.9267868015         0.0000000000
   1    3   3    3         9.9267868015         0.0000000000
   1    3   1    5       -73.7613798660         0.0000000000
   1    3   2    5        -0.0000000000         0.0000000000
   1    3   3    5         0.0000000000         0.0000000000
   1    3   1    6        -0.0000000000         0.0000000000
   1    3   2    6        -0.0000000000         0.0000000000
   1    3   3    6         0.0000000000         0.0000000000
   1    3   1    7         0.0000000000         0.0000000000
   1    3   2    7         0.0000000000         0.0000000000
   1    3   3    7        -0.0000000000         0.0000000000
  
   2    3   1    1        -1.6696845580        -0.0000000000
   2    3   2    1        -3.3393691161         0.0000000000
   2    3   3    1        -1.6696845580        -0.0000000000
   2    3   1    2        -1.6696845580         0.0000000000
   2    3   2    2        -3.3393691161        -0.0000000000
   2    3   3    2        -1.6696845580         0.0000000000
   2    3   1    3         9.9267868015         0.0000000000
   2    3   2    3        19.8535736030         0.0000000000
   2    3   3    3         9.9267868015         0.0000000000
   2    3   1    5         0.0000000000         0.0000000000
   2    3   2    5       -73.7613798660         0.0000000000
   2    3   3    5         0.0000000000         0.0000000000
   2    3   1    6        -0.0000000000         0.0000000000
   2    3   2    6        -0.0000000000         0.0000000000
   2    3   3    6        -0.0000000000         0.0000000000
   2    3   1    7         0.0000000000         0.0000000000
   2    3   2    7        -0.0000000000         0.0000000000
   2    3   3    7        -0.0000000000         0.0000000000
  
   3    3   1    1        -1.6696845580         0.0000000000
   3    3   2    1        -1.6696845580        -0.0000000000
   3    3   3    1        -3.3393691161         0.0000000000
   3    3   1    2        -1.6696845580        -0.0000000000
   3    3   2    2        -1.6696845580         0.0000000000
   3    3   3    2        -3.3393691161        -0.0000000000
   3    3   1    3         9.9267868015         0.0000000000
   3    3   2    3         9.9267868015         0.0000000000
   3    3   3    3        19.8535736030         0.0000000000
   3    3   1    5        -0.0000000000         0.0000000000
   3    3   2    5        -0.0000000000         0.0000000000
   3    3   3    5       -73.7613798660         0.0000000000
   3    3   1    6        -0.0000000000         0.0000000000
   3    3   2    6        -0.0000000000         0.0000000000
   3    3   3    6        -0.0000000000         0.0000000000
   3    3   1    7        -0.0000000000         0.0000000000
   3    3   2    7        -0.0000000000         0.0000000000
   3    3   3    7         0.0000000000         0.0000000000
  
   1    5   1    1       -68.6422526317         0.0000000000
   1    5   2    1         0.0000000000         0.0000000000
   1    5   3    1         0.0000000000         0.0000000000
   1    5   1    2       -68.6422526317         0.0000000000
   1    5   2    2         0.0000000000         0.0000000000
   1    5   3    2         0.0000000000         0.0000000000
   1    5   1    3       -73.7613800754         0.0000000000
   1    5   2    3         0.0000000000         0.0000000000
   1    5   3    3         0.0000000000         0.0000000000
   1    5   1    5     -4092.1204936237         0.0000000000
   1    5   2    5      1364.0401645412         0.0000000000
   1    5   3    5      1364.0401645412         0.0000000000
   1    5   1    6         0.0000000000         0.0000000000
   1    5   2    6         0.0000000000         0.0000000000
   1    5   3    6         0.0000000000         0.0000000000
   1    5   1    7         0.0000000000         0.0000000000
   1    5   2    7         0.0000000000         0.0000000000
   1    5   3    7         0.0000000000         0.0000000000
  
   2    5   1    1         0.0000000000         0.0000000000
   2    5   2    1       -68.6422526317         0.0000000000
   2    5   3    1         0.0000000000         0.0000000000
   2    5   1    2         0.0000000000         0.0000000000
   2    5   2    2       -68.6422526317         0.0000000000
   2    5   3    2         0.0000000000         0.0000000000
   2    5   1    3         0.0000000000         0.0000000000
   2    5   2    3       -73.7613800754         0.0000000000
   2    5   3    3         0.0000000000         0.0000000000
   2    5   1    5      1364.0401645412         0.0000000000
   2    5   2    5     -4092.1204936237         0.0000000000
   2    5   3    5      1364.0401645412         0.0000000000
   2    5   1    6         0.0000000000         0.0000000000
   2    5   2    6         0.0000000000         0.0000000000
   2    5   3    6         0.0000000000         0.0000000000
   2    5   1    7         0.0000000000         0.0000000000
   2    5   2    7         0.0000000000         0.0000000000
   2    5   3    7         0.0000000000         0.0000000000
  
   3    5   1    1         0.0000000000         0.0000000000
   3    5   2    1         0.0000000000         0.0000000000
   3    5   3    1       -68.6422526317         0.0000000000
   3    5   1    2         0.0000000000         0.0000000000
   3    5   2    2         0.0000000000         0.0000000000
   3    5   3    2       -68.6422526317         0.0000000000
   3    5   1    3         0.0000000000         0.0000000000
   3    5   2    3         0.0000000000         0.0000000000
   3    5   3    3       -73.7613800754         0.0000000000
   3    5   1    5      1364.0401645412         0.0000000000
   3    5   2    5      1364.0401645412         0.0000000000
   3    5   3    5     -4092.1204936237         0.0000000000
   3    5   1    6         0.0000000000         0.0000000000
   3    5   2    6         0.0000000000         0.0000000000
   3    5   3    6         0.0000000000         0.0000000000
   3    5   1    7         0.0000000000         0.0000000000
   3    5   2    7         0.0000000000         0.0000000000
   3    5   3    7         0.0000000000         0.0000000000
  
   1    6   1    6        -8.0815164434         0.0000000000
   1    6   2    6        -9.3619863306         0.0000000000
   1    6   3    6        -9.3629423068         0.0000000000
   1    6   1    7        -0.0000000002         0.0000000000
   1    6   2    7        -0.0000000002         0.0000000000
   1    6   3    7        -0.0000000018         0.0000000000
  
   2    6   1    6        -9.3618457718         0.0000000000
   2    6   2    6        -8.0822404982         0.0000000000
   2    6   3    6        -9.3629423068         0.0000000000
   2    6   1    7         0.0000000018         0.0000000000
   2    6   2    7        -0.0000000000         0.0000000000
   2    6   3    7        -0.0000000018         0.0000000000
  
   3    6   1    6        -9.3618457718         0.0000000000
   3    6   2    6        -9.3619863306         0.0000000000
   3    6   3    6        -8.0871645002         0.0000000000
   3    6   1    7         0.0000000018         0.0000000000
   3    6   2    7        -0.0000000002         0.0000000000
   3    6   3    7         0.0000000002         0.0000000000
  
   1    7   1    6        -0.0000000000         0.0000000000
   1    7   2    6        -0.0000000007         0.0000000000
   1    7   3    6        -0.0000000007         0.0000000000
   1    7   1    7         1.1248358108         0.0000000000
   1    7   2    7         0.0000000003         0.0000000000
   1    7   3    7         0.0000000000         0.0000000000
  
   2    7   1    6         0.0000000000         0.0000000000
   2    7   2    6        -0.0000000000         0.0000000000
   2    7   3    6         0.0000000000         0.0000000000
   2    7   1    7         0.0000000003         0.0000000000
   2    7   2    7         1.1247102922         0.0000000000
   2    7   3    7        -0.0000000003         0.0000000000
  
   3    7   1    6         0.0000000007         0.0000000000
   3    7   2    6         0.0000000007         0.0000000000
   3    7   3    6         0.0000000000         0.0000000000
   3    7   1    7         0.0000000000         0.0000000000
   3    7   2    7        -0.0000000003         0.0000000000
   3    7   3    7         1.1238566815         0.0000000000
  
  
  Dynamical matrix, in cartesian coordinates,
   if specified in the inputs, asr has been imposed
     j1       j2             matrix element
  dir pert dir pert     real part    imaginary part
  
   1    1   1    1        49.4267278592         0.0000000000
   1    1   2    1        -0.0000000000         0.0000000000
   1    1   3    1        -0.0000000000         0.0000000000
   1    1   1    2        -0.0150605700         0.0000000000
   1    1   2    2        -0.0000000000         0.0000000000
   1    1   3    2         0.0000000000         0.0000000000
   1    1   1    3        -0.0421646229         0.0000000000
   1    1   2    3         0.0000000000         0.0000000000
   1    1   3    3         0.0000000000        -0.0000000000
  
   2    1   1    1        -0.0000000000         0.0000000000
   2    1   2    1        49.4267278592         0.0000000000
   2    1   3    1         0.0000000000         0.0000000000
   2    1   1    2        -0.0000000000         0.0000000000
   2    1   2    2        -0.0150605700         0.0000000000
   2    1   3    2         0.0000000000         0.0000000000
   2    1   1    3         0.0000000000         0.0000000000
   2    1   2    3        -0.0421646229        -0.0000000000
   2    1   3    3         0.0000000000         0.0000000000
  
   3    1   1    1        -0.0000000000         0.0000000000
   3    1   2    1         0.0000000000         0.0000000000
   3    1   3    1        49.4267278592         0.0000000000
   3    1   1    2         0.0000000000         0.0000000000
   3    1   2    2         0.0000000000         0.0000000000
   3    1   3    2        -0.0150605700         0.0000000000
   3    1   1    3         0.0000000000        -0.0000000000
   3    1   2    3         0.0000000000         0.0000000000
   3    1   3    3        -0.0421646229        -0.0000000000
  
   1    2   1    1        -0.0150605700         0.0000000000
   1    2   2    1        -0.0000000000         0.0000000000
   1    2   3    1         0.0000000000         0.0000000000
   1    2   1    2        49.4267278592         0.0000000000
   1    2   2    2        -0.0000000000         0.0000000000
   1    2   3    2        -0.0000000000         0.0000000000
   1    2   1    3        -0.0421646229        -0.0000000000
   1    2   2    3         0.0000000000        -0.0000000000
   1    2   3    3         0.0000000000         0.0000000000
  
   2    2   1    1        -0.0000000000         0.0000000000
   2    2   2    1        -0.0150605700         0.0000000000
   2    2   3    1         0.0000000000         0.0000000000
   2    2   1    2        -0.0000000000         0.0000000000
   2    2   2    2        49.4267278592         0.0000000000
   2    2   3    2         0.0000000000         0.0000000000
   2    2   1    3         0.0000000000        -0.0000000000
   2    2   2    3        -0.0421646229         0.0000000000
   2    2   3    3         0.0000000000        -0.0000000000
  
   3    2   1    1         0.0000000000         0.0000000000
   3    2   2    1         0.0000000000         0.0000000000
   3    2   3    1        -0.0150605700         0.0000000000
   3    2   1    2         0.0000000000         0.0000000000
   3    2   2    2         0.0000000000         0.0000000000
   3    2   3    2        49.4267278592         0.0000000000
   3    2   1    3         0.0000000000         0.0000000000
   3    2   2    3         0.0000000000        -0.0000000000
   3    2   3    3        -0.0421646229         0.0000000000
  
   1    3   1    1        -0.0421646234        -0.0000000000
   1    3   2    1         0.0000000000        -0.0000000000
   1    3   3    1         0.0000000000         0.0000000000
   1    3   1    2        -0.0421646234         0.0000000000
   1    3   2    2         0.0000000000         0.0000000000
   1    3   3    2         0.0000000000        -0.0000000000
   1    3   1    3         0.2506816183         0.0000000000
   1    3   2    3        -0.0000000000         0.0000000000
   1    3   3    3        -0.0000000000         0.0000000000
  
   2    3   1    1         0.0000000000        -0.0000000000
   2    3   2    1        -0.0421646234         0.0000000000
   2    3   3    1         0.0000000000        -0.0000000000
   2    3   1    2         0.0000000000         0.0000000000
   2    3   2    2        -0.0421646234        -0.0000000000
   2    3   3    2         0.0000000000         0.0000000000
   2    3   1    3        -0.0000000000         0.0000000000
   2    3   2    3         0.2506816183         0.0000000000
   2    3   3    3         0.0000000000         0.0000000000
  
   3    3   1    1         0.0000000000         0.0000000000
   3    3   2    1         0.0000000000        -0.0000000000
   3    3   3    1        -0.0421646234         0.0000000000
   3    3   1    2         0.0000000000        -0.0000000000
   3    3   2    2         0.0000000000         0.0000000000
   3    3   3    2        -0.0421646234        -0.0000000000
   3    3   1    3        -0.0000000000         0.0000000000
   3    3   2    3        -0.0000000000         0.0000000000
   3    3   3    3         0.2506816183         0.0000000000
  
  Dielectric tensor, in cartesian coordinates,
     j1       j2             matrix element
  dir pert dir pert     real part    imaginary part
  
   1    5   1    5       138.9952631400        -0.0000000000
   1    5   2    5        -0.0000000000        -0.0000000000
   1    5   3    5        -0.0000000000        -0.0000000000
  
   2    5   1    5        -0.0000000000        -0.0000000000
   2    5   2    5       138.9952631400        -0.0000000000
   2    5   3    5        -0.0000000000        -0.0000000000
  
   3    5   1    5        -0.0000000000        -0.0000000000
   3    5   2    5        -0.0000000000        -0.0000000000
   3    5   3    5       138.9952631400        -0.0000000000
  
  Effective charges, in cartesian coordinates,
  (from electric field response) 
   if specified in the inputs, asr has been imposed
     j1       j2             matrix element
  dir pert dir pert     real part    imaginary part
  
   1    1   1    5         1.0752334027         0.0000000000
   2    1   1    5         0.0000000000         0.0000000000
   3    1   1    5        -0.0000000000         0.0000000000
   1    2   1    5         1.0752334027         0.0000000000
   2    2   1    5         0.0000000000         0.0000000000
   3    2   1    5        -0.0000000000         0.0000000000
   1    3   1    5        -5.7394882149         0.0000000000
   2    3   1    5         0.0000000000         0.0000000000
   3    3   1    5        -0.0000000000         0.0000000000
  
   1    1   2    5         0.0000000000         0.0000000000
   2    1   2    5         1.0752334027         0.0000000000
   3    1   2    5        -0.0000000000         0.0000000000
   1    2   2    5         0.0000000000         0.0000000000
   2    2   2    5         1.0752334027         0.0000000000
   3    2   2    5        -0.0000000000         0.0000000000
   1    3   2    5         0.0000000000         0.0000000000
   2    3   2    5        -5.7394882149         0.0000000000
   3    3   2    5        -0.0000000000         0.0000000000
  
   1    1   3    5        -0.0000000000         0.0000000000
   2    1   3    5         0.0000000000         0.0000000000
   3    1   3    5         1.0752334027         0.0000000000
   1    2   3    5        -0.0000000000         0.0000000000
   2    2   3    5         0.0000000000         0.0000000000
   3    2   3    5         1.0752334027         0.0000000000
   1    3   3    5         0.0000000000         0.0000000000
   2    3   3    5        -0.0000000000         0.0000000000
   3    3   3    5        -5.7394882149         0.0000000000
  
  Effective charges, in cartesian coordinates,
  (from phonon response) 
   if specified in the inputs, asr has been imposed
     j1       j2             matrix element
  dir pert dir pert     real part    imaginary part
  
   1    5   1    1         1.0752461887         0.0000000000
   2    5   1    1         0.0000000000         0.0000000000
   3    5   1    1         0.0000000000         0.0000000000
  
   1    5   2    1         0.0000000000         0.0000000000
   2    5   2    1         1.0752461887         0.0000000000
   3    5   2    1        -0.0000000000         0.0000000000
  
   1    5   3    1         0.0000000000         0.0000000000
   2    5   3    1        -0.0000000000         0.0000000000
   3    5   3    1         1.0752461887         0.0000000000
  
   1    5   1    2         1.0752461887         0.0000000000
   2    5   1    2         0.0000000000         0.0000000000
   3    5   1    2         0.0000000000         0.0000000000
  
   1    5   2    2         0.0000000000         0.0000000000
   2    5   2    2         1.0752461887         0.0000000000
   3    5   2    2        -0.0000000000         0.0000000000
  
   1    5   3    2        -0.0000000000         0.0000000000
   2    5   3    2        -0.0000000000         0.0000000000
   3    5   3    2         1.0752461887         0.0000000000
  
   1    5   1    3        -5.7394882483         0.0000000000
   2    5   1    3        -0.0000000000         0.0000000000
   3    5   1    3        -0.0000000000         0.0000000000
  
   1    5   2    3         0.0000000000         0.0000000000
   2    5   2    3        -5.7394882483         0.0000000000
   3    5   2    3         0.0000000000         0.0000000000
  
   1    5   3    3         0.0000000000         0.0000000000
   2    5   3    3         0.0000000000         0.0000000000
   3    5   3    3        -5.7394882483         0.0000000000
  
  
  
  
  Rigid-atom elastic tensor , in cartesian coordinates,
     j1       j2             matrix element
  dir pert dir pert     real part    imaginary part
  
   1    6   1    6        -0.0162156200         0.0000000000
   1    6   2    6        -0.0187848919         0.0000000000
   1    6   3    6        -0.0187868101         0.0000000000
   1    6   1    7        -0.0000000000         0.0000000000
   1    6   2    7        -0.0000000000         0.0000000000
   1    6   3    7        -0.0000000000         0.0000000000
  
   2    6   1    6        -0.0187846098         0.0000000000
   2    6   2    6        -0.0162170728         0.0000000000
   2    6   3    6        -0.0187868101         0.0000000000
   2    6   1    7         0.0000000000         0.0000000000
   2    6   2    7        -0.0000000000         0.0000000000
   2    6   3    7        -0.0000000000         0.0000000000
  
   3    6   1    6        -0.0187846098         0.0000000000
   3    6   2    6        -0.0187848919         0.0000000000
   3    6   3    6        -0.0162269528         0.0000000000
   3    6   1    7         0.0000000000         0.0000000000
   3    6   2    7        -0.0000000000         0.0000000000
   3    6   3    7         0.0000000000         0.0000000000
  
   1    7   1    6        -0.0000000000         0.0000000000
   1    7   2    6        -0.0000000000         0.0000000000
   1    7   3    6        -0.0000000000         0.0000000000
   1    7   1    7         0.0022569910         0.0000000000
   1    7   2    7         0.0000000000         0.0000000000
   1    7   3    7         0.0000000000         0.0000000000
  
   2    7   1    6         0.0000000000         0.0000000000
   2    7   2    6        -0.0000000000         0.0000000000
   2    7   3    6         0.0000000000         0.0000000000
   2    7   1    7         0.0000000000         0.0000000000
   2    7   2    7         0.0022567392         0.0000000000
   2    7   3    7        -0.0000000000         0.0000000000
  
   3    7   1    6         0.0000000000         0.0000000000
   3    7   2    6         0.0000000000         0.0000000000
   3    7   3    6         0.0000000000         0.0000000000
   3    7   1    7         0.0000000000         0.0000000000
   3    7   2    7        -0.0000000000         0.0000000000
   3    7   3    7         0.0022550264         0.0000000000
  
  Internal strain coupling parameters, in cartesian coordinates,
   zero average net force deriv. has been imposed  
     j1       j2             matrix element
  dir pert dir pert     real part    imaginary part
  
   1    1   1    6        -0.0000000000         0.0000000000
   1    1   2    6         0.0000000000         0.0000000000
   1    1   3    6         0.0000000000         0.0000000000
   1    1   1    7        -0.1369159351         0.0000000000
   1    1   2    7        -0.0000000000         0.0000000000
   1    1   3    7        -0.0000000000         0.0000000000
  
   2    1   1    6         0.0000000000         0.0000000000
   2    1   2    6        -0.0000000000         0.0000000000
   2    1   3    6         0.0000000000         0.0000000000
   2    1   1    7        -0.0000000000         0.0000000000
   2    1   2    7        -0.1369077734         0.0000000000
   2    1   3    7        -0.0000000000         0.0000000000
  
   3    1   1    6        -0.0000000000         0.0000000000
   3    1   2    6         0.0000000000         0.0000000000
   3    1   3    6        -0.0000000000         0.0000000000
   3    1   1    7        -0.0000000000         0.0000000000
   3    1   2    7        -0.0000000000         0.0000000000
   3    1   3    7        -0.1368522742         0.0000000000
  
   1    2   1    6         0.0000000000         0.0000000000
   1    2   2    6        -0.0000000000         0.0000000000
   1    2   3    6        -0.0000000000         0.0000000000
   1    2   1    7         0.1369159351         0.0000000000
   1    2   2    7         0.0000000000         0.0000000000
   1    2   3    7         0.0000000000         0.0000000000
  
   2    2   1    6        -0.0000000000         0.0000000000
   2    2   2    6         0.0000000000         0.0000000000
   2    2   3    6        -0.0000000000         0.0000000000
   2    2   1    7         0.0000000000         0.0000000000
   2    2   2    7         0.1369077734         0.0000000000
   2    2   3    7         0.0000000000         0.0000000000
  
   3    2   1    6         0.0000000000         0.0000000000
   3    2   2    6        -0.0000000000         0.0000000000
   3    2   3    6         0.0000000000         0.0000000000
   3    2   1    7         0.0000000000         0.0000000000
   3    2   2    7         0.0000000000         0.0000000000
   3    2   3    7         0.1368522742         0.0000000000
  
   1    3   1    6         0.0000000000         0.0000000000
   1    3   2    6        -0.0000000000         0.0000000000
   1    3   3    6         0.0000000000         0.0000000000
   1    3   1    7         0.0000000000         0.0000000000
   1    3   2    7        -0.0000000000         0.0000000000
   1    3   3    7         0.0000000000         0.0000000000
  
   2    3   1    6        -0.0000000000         0.0000000000
   2    3   2    6         0.0000000000         0.0000000000
   2    3   3    6         0.0000000000         0.0000000000
   2    3   1    7         0.0000000000         0.0000000000
   2    3   2    7        -0.0000000000         0.0000000000
   2    3   3    7         0.0000000000         0.0000000000
  
   3    3   1    6        -0.0000000000         0.0000000000
   3    3   2    6         0.0000000000         0.0000000000
   3    3   3    6        -0.0000000000         0.0000000000
   3    3   1    7        -0.0000000000         0.0000000000
   3    3   2    7         0.0000000000         0.0000000000
   3    3   3    7        -0.0000000000         0.0000000000
  
  Rigid-atom proper piezoelectric tensor, in cartesian coordinates,
     j1       j2             matrix element
  dir pert dir pert     real part    imaginary part
  
   1    5   1    6         0.0000000000         0.0000000000
   1    5   2    6         0.0000000000         0.0000000000
   1    5   3    6         0.0000000000         0.0000000000
   1    5   1    7         0.0000000000         0.0000000000
   1    5   2    7         0.0000000000         0.0000000000
   1    5   3    7         0.0000000000         0.0000000000
  
   2    5   1    6         0.0000000000         0.0000000000
   2    5   2    6         0.0000000000         0.0000000000
   2    5   3    6         0.0000000000         0.0000000000
   2    5   1    7         0.0000000000         0.0000000000
   2    5   2    7         0.0000000000         0.0000000000
   2    5   3    7         0.0000000000         0.0000000000
  
   3    5   1    6         0.0000000000         0.0000000000
   3    5   2    6         0.0000000000         0.0000000000
   3    5   3    6         0.0000000000         0.0000000000
   3    5   1    7         0.0000000000         0.0000000000
   3    5   2    7         0.0000000000         0.0000000000
   3    5   3    7         0.0000000000         0.0000000000
 
  Phonon wavevector (reduced coordinates) :  0.00000  0.00000  0.00000
 Phonon energies in Hartree :
   1.037990E-03  1.037990E-03  1.037990E-03  1.552854E-02  1.552854E-02
   1.552854E-02  1.553326E-02  1.553326E-02  1.553326E-02
 Phonon frequencies in cm-1    :
-  2.278125E+02  2.278125E+02  2.278125E+02  3.408120E+03  3.408120E+03
-  3.408120E+03  3.409157E+03  3.409157E+03  3.409157E+03
 
  Phonon at Gamma, with non-analyticity in the
  direction (cartesian coordinates)  1.00000  0.00000  0.00000
 Phonon energies in Hartree :
   1.037990E-03  1.037990E-03  1.050285E-03  1.552854E-02  1.552854E-02
   1.552860E-02  1.553326E-02  1.553326E-02  1.553326E-02
 Phonon frequencies in cm-1    :
-  2.278125E+02  2.278125E+02  2.305109E+02  3.408120E+03  3.408120E+03
-  3.408135E+03  3.409157E+03  3.409157E+03  3.409157E+03
 
  Phonon at Gamma, with non-analyticity in the
  direction (cartesian coordinates)  0.00000  1.00000  0.00000
 Phonon energies in Hartree :
   1.037990E-03  1.037990E-03  1.050285E-03  1.552854E-02  1.552854E-02
   1.552860E-02  1.553326E-02  1.553326E-02  1.553326E-02
 Phonon frequencies in cm-1    :
-  2.278125E+02  2.278125E+02  2.305109E+02  3.408120E+03  3.408120E+03
-  3.408135E+03  3.409157E+03  3.409157E+03  3.409157E+03
 
  Phonon at Gamma, with non-analyticity in the
  direction (cartesian coordinates)  0.00000  0.00000  1.00000
 Phonon energies in Hartree :
   1.037990E-03  1.037990E-03  1.050285E-03  1.552854E-02  1.552854E-02
   1.552860E-02  1.553326E-02  1.553326E-02  1.553326E-02
 Phonon frequencies in cm-1    :
-  2.278125E+02  2.278125E+02  2.305109E+02  3.408120E+03  3.408120E+03
-  3.408135E+03  3.409157E+03  3.409157E+03  3.409157E+03

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell1     1.2585576045E+01  1.2585576045E+01  1.2585576045E+01 Bohr
            acell2     9.7740847556E+00  9.7740847556E+00  9.7740847556E+00 Bohr
            acell3     9.6866108967E+00  9.6866108967E+00  9.6866108967E+00 Bohr
            acell4     9.6866108967E+00  9.6866108967E+00  9.6866108967E+00 Bohr
              amu      1.12411000E+02  1.27600000E+02
           diemac      1.20000000E+01
          dilatmx1     1.00000000E+00
          dilatmx2     2.00000000E+00
          dilatmx3     1.00000000E+00
          dilatmx4     1.00000000E+00
             ecut      7.00000000E+01 Hartree
           ecutsm1     0.00000000E+00 Hartree
           ecutsm2     2.00000000E+00 Hartree
           ecutsm3     0.00000000E+00 Hartree
           ecutsm4     0.00000000E+00 Hartree
           etotal1    -9.8486172340E+01
           etotal2    -9.8521219803E+01
           etotal3    -5.2376290847E+01
           etotal4     1.1238566840E+00
            fcart1     2.2286137433E-31 -5.5715343582E-32 -5.5715343582E-32
                      -1.5321719485E-31  6.9644179478E-32 -1.3928835896E-32
                      -6.9644179478E-32 -1.3928835896E-32  6.9644179478E-32
            fcart2    -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                      -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
                      -0.0000000000E+00 -0.0000000000E+00 -0.0000000000E+00
            fcart4     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
-          fftalg         312
          getcell1          0
          getcell2          0
          getcell3          2
          getcell4          2
           getddk1          0
           getddk2          0
           getddk3          0
           getddk4          3
           getwfk1          0
           getwfk2          1
           getwfk3          2
           getwfk4          2
          getxred1          0
          getxred2          1
          getxred3          2
          getxred4          2
           ionmov1          2
           ionmov2          2
           ionmov3          0
           ionmov4          0
             iscf1          7
             iscf2          7
             iscf3         -3
             iscf4          7
              ixc          11
           jdtset        1    2    3    4
              kpt1     0.00000000E+00  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  8.33333333E-02 -1.66666667E-01
                       8.33333333E-02  8.33333333E-02 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -4.16666667E-01
                       0.00000000E+00  8.33333333E-02 -3.33333333E-01
                       0.00000000E+00  1.66666667E-01 -2.50000000E-01
                       8.33333333E-02  8.33333333E-02 -2.50000000E-01
                       8.33333333E-02  1.66666667E-01 -1.66666667E-01
                       1.66666667E-01  1.66666667E-01 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  5.00000000E-01
                       0.00000000E+00  1.66666667E-01 -4.16666667E-01
                       0.00000000E+00  2.50000000E-01 -3.33333333E-01
                       8.33333333E-02  1.66666667E-01 -3.33333333E-01
                       8.33333333E-02  2.50000000E-01 -2.50000000E-01
                       1.66666667E-01  1.66666667E-01 -2.50000000E-01
                       1.66666667E-01  2.50000000E-01 -1.66666667E-01
                       2.50000000E-01  2.50000000E-01 -8.33333333E-02
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  3.33333333E-01 -4.16666667E-01
                       8.33333333E-02  2.50000000E-01 -4.16666667E-01
                       8.33333333E-02  3.33333333E-01 -3.33333333E-01
                       1.66666667E-01  3.33333333E-01 -2.50000000E-01
                       2.50000000E-01  3.33333333E-01 -1.66666667E-01
                       3.33333333E-01  3.33333333E-01 -8.33333333E-02
                       0.00000000E+00  4.16666667E-01  5.00000000E-01
                       8.33333333E-02  4.16666667E-01 -4.16666667E-01
                       1.66666667E-01  4.16666667E-01 -3.33333333E-01
              kpt2     0.00000000E+00  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  8.33333333E-02 -1.66666667E-01
                       8.33333333E-02  8.33333333E-02 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -4.16666667E-01
                       0.00000000E+00  8.33333333E-02 -3.33333333E-01
                       0.00000000E+00  1.66666667E-01 -2.50000000E-01
                       8.33333333E-02  8.33333333E-02 -2.50000000E-01
                       8.33333333E-02  1.66666667E-01 -1.66666667E-01
                       1.66666667E-01  1.66666667E-01 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  5.00000000E-01
                       0.00000000E+00  1.66666667E-01 -4.16666667E-01
                       0.00000000E+00  2.50000000E-01 -3.33333333E-01
                       8.33333333E-02  1.66666667E-01 -3.33333333E-01
                       8.33333333E-02  2.50000000E-01 -2.50000000E-01
                       1.66666667E-01  1.66666667E-01 -2.50000000E-01
                       1.66666667E-01  2.50000000E-01 -1.66666667E-01
                       2.50000000E-01  2.50000000E-01 -8.33333333E-02
                       0.00000000E+00  2.50000000E-01  5.00000000E-01
                       0.00000000E+00  3.33333333E-01 -4.16666667E-01
                       8.33333333E-02  2.50000000E-01 -4.16666667E-01
                       8.33333333E-02  3.33333333E-01 -3.33333333E-01
                       1.66666667E-01  3.33333333E-01 -2.50000000E-01
                       2.50000000E-01  3.33333333E-01 -1.66666667E-01
                       3.33333333E-01  3.33333333E-01 -8.33333333E-02
                       0.00000000E+00  4.16666667E-01  5.00000000E-01
                       8.33333333E-02  4.16666667E-01 -4.16666667E-01
                       1.66666667E-01  4.16666667E-01 -3.33333333E-01
              kpt3     0.00000000E+00  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  8.33333333E-02 -1.66666667E-01
                       0.00000000E+00  1.66666667E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00 -1.66666667E-01
                       8.33333333E-02  8.33333333E-02 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -4.16666667E-01
                       0.00000000E+00  8.33333333E-02 -3.33333333E-01
                       0.00000000E+00  1.66666667E-01 -2.50000000E-01
                       0.00000000E+00  2.50000000E-01 -1.66666667E-01
                       0.00000000E+00  3.33333333E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00 -3.33333333E-01
                       8.33333333E-02  8.33333333E-02 -2.50000000E-01
                       8.33333333E-02  1.66666667E-01 -1.66666667E-01
                       8.33333333E-02  2.50000000E-01 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -2.50000000E-01
                       1.66666667E-01  8.33333333E-02 -1.66666667E-01
                       1.66666667E-01  1.66666667E-01 -8.33333333E-02
                       2.50000000E-01  0.00000000E+00 -1.66666667E-01
                       2.50000000E-01  8.33333333E-02 -8.33333333E-02
                       3.33333333E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  5.00000000E-01
                       0.00000000E+00  1.66666667E-01 -4.16666667E-01
                       0.00000000E+00  2.50000000E-01 -3.33333333E-01
                       0.00000000E+00  3.33333333E-01 -2.50000000E-01
                       0.00000000E+00  4.16666667E-01 -1.66666667E-01
                       0.00000000E+00  5.00000000E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00  5.00000000E-01
                       8.33333333E-02  8.33333333E-02 -4.16666667E-01
                       8.33333333E-02  1.66666667E-01 -3.33333333E-01
                       8.33333333E-02  2.50000000E-01 -2.50000000E-01
                       8.33333333E-02  3.33333333E-01 -1.66666667E-01
                       8.33333333E-02  4.16666667E-01 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -4.16666667E-01
                       1.66666667E-01  8.33333333E-02 -3.33333333E-01
                       1.66666667E-01  1.66666667E-01 -2.50000000E-01
                       1.66666667E-01  2.50000000E-01 -1.66666667E-01
                       1.66666667E-01  3.33333333E-01 -8.33333333E-02
                       2.50000000E-01  0.00000000E+00 -3.33333333E-01
                       2.50000000E-01  8.33333333E-02 -2.50000000E-01
                       2.50000000E-01  1.66666667E-01 -1.66666667E-01
                       2.50000000E-01  2.50000000E-01 -8.33333333E-02
                       3.33333333E-01  0.00000000E+00 -2.50000000E-01
                       3.33333333E-01  8.33333333E-02 -1.66666667E-01
                       3.33333333E-01  1.66666667E-01 -8.33333333E-02
                       4.16666667E-01  0.00000000E+00 -1.66666667E-01
                       4.16666667E-01  8.33333333E-02 -8.33333333E-02
                       5.00000000E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  3.33333333E-01
              kpt4     0.00000000E+00  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -2.50000000E-01
                       0.00000000E+00  8.33333333E-02 -1.66666667E-01
                       0.00000000E+00  1.66666667E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00 -1.66666667E-01
                       8.33333333E-02  8.33333333E-02 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  0.00000000E+00 -4.16666667E-01
                       0.00000000E+00  8.33333333E-02 -3.33333333E-01
                       0.00000000E+00  1.66666667E-01 -2.50000000E-01
                       0.00000000E+00  2.50000000E-01 -1.66666667E-01
                       0.00000000E+00  3.33333333E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00 -3.33333333E-01
                       8.33333333E-02  8.33333333E-02 -2.50000000E-01
                       8.33333333E-02  1.66666667E-01 -1.66666667E-01
                       8.33333333E-02  2.50000000E-01 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -2.50000000E-01
                       1.66666667E-01  8.33333333E-02 -1.66666667E-01
                       1.66666667E-01  1.66666667E-01 -8.33333333E-02
                       2.50000000E-01  0.00000000E+00 -1.66666667E-01
                       2.50000000E-01  8.33333333E-02 -8.33333333E-02
                       3.33333333E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  5.00000000E-01
                       0.00000000E+00  1.66666667E-01 -4.16666667E-01
                       0.00000000E+00  2.50000000E-01 -3.33333333E-01
                       0.00000000E+00  3.33333333E-01 -2.50000000E-01
                       0.00000000E+00  4.16666667E-01 -1.66666667E-01
                       0.00000000E+00  5.00000000E-01 -8.33333333E-02
                       8.33333333E-02  0.00000000E+00  5.00000000E-01
                       8.33333333E-02  8.33333333E-02 -4.16666667E-01
                       8.33333333E-02  1.66666667E-01 -3.33333333E-01
                       8.33333333E-02  2.50000000E-01 -2.50000000E-01
                       8.33333333E-02  3.33333333E-01 -1.66666667E-01
                       8.33333333E-02  4.16666667E-01 -8.33333333E-02
                       1.66666667E-01  0.00000000E+00 -4.16666667E-01
                       1.66666667E-01  8.33333333E-02 -3.33333333E-01
                       1.66666667E-01  1.66666667E-01 -2.50000000E-01
                       1.66666667E-01  2.50000000E-01 -1.66666667E-01
                       1.66666667E-01  3.33333333E-01 -8.33333333E-02
                       2.50000000E-01  0.00000000E+00 -3.33333333E-01
                       2.50000000E-01  8.33333333E-02 -2.50000000E-01
                       2.50000000E-01  1.66666667E-01 -1.66666667E-01
                       2.50000000E-01  2.50000000E-01 -8.33333333E-02
                       3.33333333E-01  0.00000000E+00 -2.50000000E-01
                       3.33333333E-01  8.33333333E-02 -1.66666667E-01
                       3.33333333E-01  1.66666667E-01 -8.33333333E-02
                       4.16666667E-01  0.00000000E+00 -1.66666667E-01
                       4.16666667E-01  8.33333333E-02 -8.33333333E-02
                       5.00000000E-01  0.00000000E+00 -8.33333333E-02
                       0.00000000E+00  8.33333333E-02  3.33333333E-01
                       outvar_i_n : Printing only first  50 k-points.
           kptopt1          1
           kptopt2          1
           kptopt3          2
           kptopt4          2
         kptrlatt       -6    6    6      6   -6    6      6    6   -6
          kptrlen      7.55134563E+01
P           mkmem1          4
P           mkmem2          4
P           mkmem3         55
P           mkmem4         55
P          mkqmem1          4
P          mkqmem2          4
P          mkqmem3         55
P          mkqmem4         55
P          mk1mem1          4
P          mk1mem2          4
P          mk1mem3         55
P          mk1mem4         55
            natom           3
            nband1         16
            nband2         16
            nband3         16
            nband4         16
           ndtset           4
            ngfft1         72      72      72
            ngfft2        144     144     144
            ngfft3         72      72      72
            ngfft4         72      72      72
             nkpt1         28
             nkpt2         28
             nkpt3        432
             nkpt4        432
             nqpt1          0
             nqpt2          0
             nqpt3          1
             nqpt4          1
            nstep         500
             nsym          48
            ntime1        200
            ntime2        200
            ntime3          1
            ntime4          1
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000
              occ2     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000
              occ4     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  0.000000
          optcell1          0
          optcell2          2
          optcell3          0
          optcell4          0
        optdriver1          0
        optdriver2          0
        optdriver3          1
        optdriver4          1
          rfatpol1          1       1
          rfatpol2          1       1
          rfatpol3          1       1
          rfatpol4          1       3
            rfdir1          0       0       0
            rfdir2          0       0       0
            rfdir3          1       1       1
            rfdir4          1       1       1
           rfelfd1          0
           rfelfd2          0
           rfelfd3          2
           rfelfd4          3
           rfphon1          0
           rfphon2          0
           rfphon3          0
           rfphon4          1
           rfstrs1          0
           rfstrs2          0
           rfstrs3          0
           rfstrs4          3
            rprim1     0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
            rprim2     5.9558238350E-18  7.0710678119E-01  7.0710678119E-01
                       7.0710678119E-01 -2.9775406477E-18  7.0710678119E-01
                       7.0710678119E-01  7.0710678119E-01 -7.4253953134E-22
            rprim3     5.4086465139E-18  7.0710678119E-01  7.0710678119E-01
                       7.0710678119E-01 -2.7039860967E-18  7.0710678119E-01
                       7.0710678119E-01  7.0710678119E-01 -6.7432045656E-22
            rprim4     5.4086465139E-18  7.0710678119E-01  7.0710678119E-01
                       7.0710678119E-01 -2.7039860967E-18  7.0710678119E-01
                       7.0710678119E-01  7.0710678119E-01 -6.7432045656E-22
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         225
           strten1    -5.7251358421E-04 -5.7251358421E-04 -5.7251358421E-04
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten2    -2.2073230073E-07 -2.2073230073E-07 -2.2073230073E-07
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten4     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
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
           tolmxf1     1.00000000E-04
           tolmxf2     1.00000000E-04
           tolmxf3     5.00000000E-05
           tolmxf4     5.00000000E-05
           tolvrs1     1.00000000E-18
           tolvrs2     1.00000000E-18
           tolvrs3     0.00000000E+00
           tolvrs4     1.00000000E-18
           tolwfr1     0.00000000E+00
           tolwfr2     0.00000000E+00
           tolwfr3     1.00000000E-22
           tolwfr4     0.00000000E+00
            typat      1  1  2
              wtk1       0.00926    0.00926    0.02778    0.02778    0.00926    0.02778
                         0.02778    0.02778    0.05556    0.02778    0.02778    0.02778
                         0.02778    0.05556    0.05556    0.02778    0.05556    0.02778
                         0.02778    0.02778    0.05556    0.05556    0.05556    0.05556
                         0.02778    0.02778    0.05556    0.05556
              wtk2       0.00926    0.00926    0.02778    0.02778    0.00926    0.02778
                         0.02778    0.02778    0.05556    0.02778    0.02778    0.02778
                         0.02778    0.05556    0.05556    0.02778    0.05556    0.02778
                         0.02778    0.02778    0.05556    0.05556    0.05556    0.05556
                         0.02778    0.02778    0.05556    0.05556
              wtk3       0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231
              wtk4       0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231    0.00231    0.00231    0.00231    0.00231
                         0.00231    0.00231
                       outvars : Printing only first  50 k-points.
           xangst1     1.6650000000E+00  1.6650000000E+00  1.6650000000E+00
                      -1.6650000000E+00 -1.6650000000E+00 -1.6650000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           xangst2     1.8286569388E+00  1.8286569388E+00  1.8286569388E+00
                      -1.8286569388E+00 -1.8286569388E+00 -1.8286569388E+00
                       4.7779598919E-31  4.1550334129E-30 -4.1728711309E-30
           xangst3     1.8122912449E+00  1.8122912449E+00  1.8122912449E+00
                      -1.8122912449E+00 -1.8122912449E+00 -1.8122912449E+00
                       4.7351992039E-31  4.1178476491E-30 -4.1355257272E-30
           xangst4     1.8122912449E+00  1.8122912449E+00  1.8122912449E+00
                      -1.8122912449E+00 -1.8122912449E+00 -1.8122912449E+00
                       4.7351992039E-31  4.1178476491E-30 -4.1355257272E-30
            xcart1     3.1463940113E+00  3.1463940113E+00  3.1463940113E+00
                      -3.1463940113E+00 -3.1463940113E+00 -3.1463940113E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            xcart2     3.4556608053E+00  3.4556608053E+00  3.4556608053E+00
                      -3.4556608053E+00 -3.4556608053E+00 -3.4556608053E+00
                       9.0290356697E-31  7.8518752233E-30 -7.8855836252E-30
            xcart3     3.4247341259E+00  3.4247341259E+00  3.4247341259E+00
                      -3.4247341259E+00 -3.4247341259E+00 -3.4247341259E+00
                       8.9482296800E-31  7.7816043138E-30 -7.8150110399E-30
            xcart4     3.4247341259E+00  3.4247341259E+00  3.4247341259E+00
                      -3.4247341259E+00 -3.4247341259E+00 -3.4247341259E+00
                       8.9482296800E-31  7.7816043138E-30 -7.8150110399E-30
             xred      2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
                      -2.5000000000E-01 -2.5000000000E-01 -2.5000000000E-01
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
            znucl       48.00000   52.00000

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

 [1] Metric tensor formulation of strain in density-functional perturbation theory, 
 D. R. Hamann, X. Wu, K. M. Rabe, and D. Vanderbilt, Phys. Rev. B71, 035117 (2005).
 Comment : Non-vanishing rfstrs. Strong suggestion to cite this paper in your publications.

 [2] First-principles responses of solids to atomic displacements and homogeneous electric fields:,
 implementation of a conjugate-gradient algorithm. X. Gonze, Phys. Rev. B55, 10337 (1997).
 Comment : Non-vanishing rfphon and/or rfelfd, in the norm-conserving case.

 [3] Dynamical matrices, Born effective charges, dielectric permittivity tensors, and ,
 interatomic force constants from density-functional perturbation theory,
 X. Gonze and C. Lee, Phys. Rev. B55, 10355 (1997).
 Comment : Non-vanishing rfphon and/or rfelfd, in the norm-conserving case.

 [4] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [5] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [6] A brief introduction to the ABINIT software package.
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
-
- Proc.   0 individual time (sec): cpu=     163649.7  wall=     172051.9

================================================================================

 Calculation completed.
.Delivered    4 WARNINGs and   8 COMMENTs to log file.
+Overall time at end (sec) : cpu=    1308446.9  wall=    1376414.0
