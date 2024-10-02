
.Version 6.10.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel11.1 computer) 

.Copyright (C) 1998-2011 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Sat 17 Dec 2011.
- ( at 15h 6 )
  
- input  file    -> t11.in
- output file    -> /home/ilukacev/gram_scratch_RJaK2eB2E1/t11.out
- root for input  files -> t11i
- root for output files -> t11o


 Number of divisions for each segment of the normalized path :

 DATASET    1 : space group P6/m m m (#191); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        11  mffmem =         1
P  mgfft =        20   mkmem =         1 mpssoang=         3     mpw =       302
  mqgrid =      3001   natom =         3    nfft =      6480    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         4
================================================================================
P This job should need less than                       3.495 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.103 Mbytes ; DEN or POT disk file :      0.051 Mbytes.
================================================================================


 DATASET    2 : space group P6/m m m (#191); Bravais hP (primitive hexag.)

 Number of divisions for each segment of the normalized path :
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        11  mffmem =         1
P  mgfft =        20   mkmem =         5 mpssoang=         3     mpw =       306
  mqgrid =      3001   natom =         3    nfft =      6480    nkpt =        33
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                       2.257 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      1.697 Mbytes ; DEN or POT disk file :      0.051 Mbytes.
================================================================================


 DATASET    3 : space group P6/m m m (#191); Bravais hP (primitive hexag.)
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =        -3 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        11  mffmem =         1
P  mgfft =        20   mkmem =         2 mpssoang=         3     mpw =       304
  mqgrid =      3001   natom =         3    nfft =      6480    nkpt =        12
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         4
================================================================================
P This job should need less than                       2.778 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.614 Mbytes ; DEN or POT disk file :      0.051 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-   nproc =    8
-
 -outvars: echo values of preprocessed input variables --------
            acell      5.8316948461E+00  5.8316948461E+00  6.6575051662E+00 Bohr
              amu      2.43050000E+01  1.08110000E+01
             ecut      1.00000000E+01 Hartree
           getden1          0
           getden2          1
           getden3          1
           getwfk1          0
           getwfk2          0
           getwfk3         -1
             iscf1          7
             iscf2         -2
             iscf3         -3
           istwfk2       2    0    0    0    0    0    0    3    0    0
                         0    0    0    0    0    0    0    0    0    0
                         5    0    0    0    0    0    0    4    0    0
                         0    0    2
           istwfk3       2    0    3    0    0    0    0    0    4    0
                         5    0
           jdtset        1    2    3
              kpt1     0.00000000E+00  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       7.14285714E-02  0.00000000E+00  0.00000000E+00
                       1.42857143E-01  0.00000000E+00  0.00000000E+00
                       2.14285714E-01  0.00000000E+00  0.00000000E+00
                       2.85714286E-01  0.00000000E+00  0.00000000E+00
                       3.57142857E-01  0.00000000E+00  0.00000000E+00
                       4.28571429E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.58333333E-01  8.33333333E-02  0.00000000E+00
                       4.16666667E-01  1.66666667E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  1.00000000E-01
                       3.33333333E-01  3.33333333E-01  2.00000000E-01
                       3.33333333E-01  3.33333333E-01  3.00000000E-01
                       3.33333333E-01  3.33333333E-01  4.00000000E-01
                       3.33333333E-01  3.33333333E-01  5.00000000E-01
                       3.75000000E-01  2.50000000E-01  5.00000000E-01
                       4.16666667E-01  1.66666667E-01  5.00000000E-01
                       4.58333333E-01  8.33333333E-02  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       4.28571429E-01  0.00000000E+00  5.00000000E-01
                       3.57142857E-01  0.00000000E+00  5.00000000E-01
                       2.85714286E-01  0.00000000E+00  5.00000000E-01
                       2.14285714E-01  0.00000000E+00  5.00000000E-01
                       1.42857143E-01  0.00000000E+00  5.00000000E-01
                       7.14285714E-02  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  0.00000000E+00  4.00000000E-01
                       0.00000000E+00  0.00000000E+00  3.00000000E-01
                       0.00000000E+00  0.00000000E+00  2.00000000E-01
                       0.00000000E+00  0.00000000E+00  1.00000000E-01
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
              kpt3     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
          kptrlen1     1.16633897E+01
          kptrlen2     3.00000000E+01
          kptrlen3     2.33267794E+01
           kptopt1          1
           kptopt2         -6
           kptopt3          1
         kptrlatt1     2  0  0   0  2  0   0  0  2
         kptrlatt3     4  0  0   0  4  0   0  0  4
P           mkmem1          1
P           mkmem2          5
P           mkmem3          2
            natom           3
            nband1         11
            nband2         11
            nband3         11
           nbdbuf1          0
           nbdbuf2          2
           nbdbuf3          2
           ndtset           3
            ngfft          18      18      20
             nkpt1          2
             nkpt2         33
             nkpt3         12
            nstep          50
             nsym          24
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
           occopt1          4
           occopt2          1
           occopt3          4
         prtfsurf1          0
         prtfsurf2          0
         prtfsurf3          1
            rprim      8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                      -8.6602540378E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
           shiftk1     0.00000000E+00  0.00000000E+00  5.00000000E-01
           shiftk2     5.00000000E-01  5.00000000E-01  5.00000000E-01
           shiftk3     0.00000000E+00  0.00000000E+00  0.00000000E+00
          spgroup         191
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       1  1  0  -1  0  0   0  0  1      -1 -1  0   1  0  0   0  0 -1
                      -1  0  0   1  1  0   0  0  1       1  0  0  -1 -1  0   0  0 -1
                       0  1  0  -1 -1  0   0  0  1       0 -1  0   1  1  0   0  0 -1
                      -1 -1  0   0  1  0   0  0  1       1  1  0   0 -1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1 -1  0   1  0  0   0  0  1       1  1  0  -1  0  0   0  0 -1
                       1  0  0  -1 -1  0   0  0  1      -1  0  0   1  1  0   0  0 -1
                       0 -1  0   1  1  0   0  0  1       0  1  0  -1 -1  0   0  0 -1
                       1  1  0   0 -1  0   0  0  1      -1 -1  0   0  1  0   0  0 -1
           timopt           2
           tolvrs1     1.00000000E-10
           tolvrs2     0.00000000E+00
           tolvrs3     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-08
           tolwfr3     1.00000000E-08
           tsmear1     3.00000000E-02 Hartree
           tsmear2     4.00000000E-02 Hartree
           tsmear3     3.00000000E-02 Hartree
            typat      1  2  2
              wtk1       0.25000    0.75000
              wtk2       1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000    1.00000    1.00000    1.00000
                         1.00000    1.00000    1.00000
              wtk3       0.01563    0.09375    0.04688    0.09375    0.03125    0.18750
                         0.09375    0.18750    0.01563    0.09375    0.04688    0.09375
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -8.9085146536E-01  1.5430000000E+00  1.7615000000E+00
                       8.9085146536E-01  1.5430000000E+00  1.7615000000E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                      -1.6834652946E+00  2.9158474230E+00  3.3287525831E+00
                       1.6834652946E+00  2.9158474230E+00  3.3287525831E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.3333333333E-01  6.6666666667E-01  5.0000000000E-01
                       6.6666666667E-01  3.3333333333E-01  5.0000000000E-01
            znucl       12.00000    5.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

 chkinp : ERROR -
  The number of bands has to be constant for the output of the Fermi surface.
  Action : set all the nbands to the same value in your input file
