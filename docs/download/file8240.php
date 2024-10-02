
.Version 9.4.0 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel19.1 computer) 

.Copyright (C) 1998-2021 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Tue  4 May 2021.
- ( at 20h46 )
  
- input  file    -> tdmft_5.abi
- output file    -> tdmft_5.abo
- root for input  files -> tdmft_5i
- root for output files -> tdmft_5o
 
- inpspheads : Reading pseudopotential header in XML form from 
-   ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
- inpspheads : Reading pseudopotential header in XML form from 
-   ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
- inpspheads : Reading pseudopotential header in XML form from 
-   ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
 
 DATASET    3 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
     intxc =       0    ionmov =       0      iscf =      -2    lmnmax =      18
     lnmax =       6     mgfft =      30  mpssoang =       3    mqgrid =    3001
     natom =       5  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =       1    ntypat =       3
    occopt =       3   xclevel =       1
-    mband =          30        mffmem =           1         mkmem =           8
       mpw =        1659          nfft =       27000          nkpt =         261
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        54    nfftf =    157464
================================================================================
P This job should need less than                      41.619 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    198.213 Mbytes ; DEN or POT disk file :      1.203 Mbytes.
================================================================================
 
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =512 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      7.2605000000E+00  7.2605000000E+00  7.2605000000E+00 Bohr
              amu      5.09415000E+01  8.76200000E+01  1.59994000E+01
        dmatpuopt           1
        dmftbandf          23
        dmftbandi          21
        dmft_iter          10
        dmft_mxsf      8.0000000000E-01
        dmft_nwli      100000
        dmft_nwlo        1600
        dmft_rslf           1
             ecut      2.00000000E+01 Hartree
-          fftalg         512
        f4of2_sla      0.00000000E+00  0.00000000E+00  0.00000000E+00
           getden           1
           iatsph3       1    2    3    4    5
             iscf          -2
           istwfk        1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1
              ixc       -1012
           jdtset        3
              kpt      5.00000000E-01  5.00000000E-01  5.00000000E-01
                       4.94444444E-01  4.94444444E-01  4.94444444E-01
                       4.88888889E-01  4.88888889E-01  4.88888889E-01
                       4.83333333E-01  4.83333333E-01  4.83333333E-01
                       4.77777778E-01  4.77777778E-01  4.77777778E-01
                       4.72222222E-01  4.72222222E-01  4.72222222E-01
                       4.66666667E-01  4.66666667E-01  4.66666667E-01
                       4.61111111E-01  4.61111111E-01  4.61111111E-01
                       4.55555556E-01  4.55555556E-01  4.55555556E-01
                       4.50000000E-01  4.50000000E-01  4.50000000E-01
                       4.44444444E-01  4.44444444E-01  4.44444444E-01
                       4.38888889E-01  4.38888889E-01  4.38888889E-01
                       4.33333333E-01  4.33333333E-01  4.33333333E-01
                       4.27777778E-01  4.27777778E-01  4.27777778E-01
                       4.22222222E-01  4.22222222E-01  4.22222222E-01
                       4.16666667E-01  4.16666667E-01  4.16666667E-01
                       4.11111111E-01  4.11111111E-01  4.11111111E-01
                       4.05555556E-01  4.05555556E-01  4.05555556E-01
                       4.00000000E-01  4.00000000E-01  4.00000000E-01
                       3.94444444E-01  3.94444444E-01  3.94444444E-01
                       3.88888889E-01  3.88888889E-01  3.88888889E-01
                       3.83333333E-01  3.83333333E-01  3.83333333E-01
                       3.77777778E-01  3.77777778E-01  3.77777778E-01
                       3.72222222E-01  3.72222222E-01  3.72222222E-01
                       3.66666667E-01  3.66666667E-01  3.66666667E-01
                       3.61111111E-01  3.61111111E-01  3.61111111E-01
                       3.55555556E-01  3.55555556E-01  3.55555556E-01
                       3.50000000E-01  3.50000000E-01  3.50000000E-01
                       3.44444444E-01  3.44444444E-01  3.44444444E-01
                       3.38888889E-01  3.38888889E-01  3.38888889E-01
                       3.33333333E-01  3.33333333E-01  3.33333333E-01
                       3.27777778E-01  3.27777778E-01  3.27777778E-01
                       3.22222222E-01  3.22222222E-01  3.22222222E-01
                       3.16666667E-01  3.16666667E-01  3.16666667E-01
                       3.11111111E-01  3.11111111E-01  3.11111111E-01
                       3.05555556E-01  3.05555556E-01  3.05555556E-01
                       3.00000000E-01  3.00000000E-01  3.00000000E-01
                       2.94444444E-01  2.94444444E-01  2.94444444E-01
                       2.88888889E-01  2.88888889E-01  2.88888889E-01
                       2.83333333E-01  2.83333333E-01  2.83333333E-01
                       2.77777778E-01  2.77777778E-01  2.77777778E-01
                       2.72222222E-01  2.72222222E-01  2.72222222E-01
                       2.66666667E-01  2.66666667E-01  2.66666667E-01
                       2.61111111E-01  2.61111111E-01  2.61111111E-01
                       2.55555556E-01  2.55555556E-01  2.55555556E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       2.44444444E-01  2.44444444E-01  2.44444444E-01
                       2.38888889E-01  2.38888889E-01  2.38888889E-01
                       2.33333333E-01  2.33333333E-01  2.33333333E-01
                       2.27777778E-01  2.27777778E-01  2.27777778E-01
                       2.22222222E-01  2.22222222E-01  2.22222222E-01
                       2.16666667E-01  2.16666667E-01  2.16666667E-01
                       2.11111111E-01  2.11111111E-01  2.11111111E-01
                       2.05555556E-01  2.05555556E-01  2.05555556E-01
                       2.00000000E-01  2.00000000E-01  2.00000000E-01
                       1.94444444E-01  1.94444444E-01  1.94444444E-01
                       1.88888889E-01  1.88888889E-01  1.88888889E-01
                       1.83333333E-01  1.83333333E-01  1.83333333E-01
                       1.77777778E-01  1.77777778E-01  1.77777778E-01
                       1.72222222E-01  1.72222222E-01  1.72222222E-01
                       1.66666667E-01  1.66666667E-01  1.66666667E-01
                       1.61111111E-01  1.61111111E-01  1.61111111E-01
                       1.55555556E-01  1.55555556E-01  1.55555556E-01
                       1.50000000E-01  1.50000000E-01  1.50000000E-01
                       1.44444444E-01  1.44444444E-01  1.44444444E-01
                       1.38888889E-01  1.38888889E-01  1.38888889E-01
                       1.33333333E-01  1.33333333E-01  1.33333333E-01
                       1.27777778E-01  1.27777778E-01  1.27777778E-01
                       1.22222222E-01  1.22222222E-01  1.22222222E-01
                       1.16666667E-01  1.16666667E-01  1.16666667E-01
                       1.11111111E-01  1.11111111E-01  1.11111111E-01
                       1.05555556E-01  1.05555556E-01  1.05555556E-01
                       1.00000000E-01  1.00000000E-01  1.00000000E-01
                       9.44444444E-02  9.44444444E-02  9.44444444E-02
                       8.88888889E-02  8.88888889E-02  8.88888889E-02
                       8.33333333E-02  8.33333333E-02  8.33333333E-02
                       7.77777778E-02  7.77777778E-02  7.77777778E-02
                       7.22222222E-02  7.22222222E-02  7.22222222E-02
                       6.66666667E-02  6.66666667E-02  6.66666667E-02
                       6.11111111E-02  6.11111111E-02  6.11111111E-02
                       5.55555556E-02  5.55555556E-02  5.55555556E-02
                       5.00000000E-02  5.00000000E-02  5.00000000E-02
                       4.44444444E-02  4.44444444E-02  4.44444444E-02
                       3.88888889E-02  3.88888889E-02  3.88888889E-02
                       3.33333333E-02  3.33333333E-02  3.33333333E-02
                       2.77777778E-02  2.77777778E-02  2.77777778E-02
                       2.22222222E-02  2.22222222E-02  2.22222222E-02
                       1.66666667E-02  1.66666667E-02  1.66666667E-02
                       1.11111111E-02  1.11111111E-02  1.11111111E-02
                       5.55555556E-03  5.55555556E-03  5.55555556E-03
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.00000000E-02  0.00000000E+00  0.00000000E+00
                       2.00000000E-02  0.00000000E+00  0.00000000E+00
                       3.00000000E-02  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  0.00000000E+00  0.00000000E+00
                       5.00000000E-02  0.00000000E+00  0.00000000E+00
                       6.00000000E-02  0.00000000E+00  0.00000000E+00
                       7.00000000E-02  0.00000000E+00  0.00000000E+00
                       8.00000000E-02  0.00000000E+00  0.00000000E+00
                       9.00000000E-02  0.00000000E+00  0.00000000E+00
                       1.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.10000000E-01  0.00000000E+00  0.00000000E+00
                       1.20000000E-01  0.00000000E+00  0.00000000E+00
                       1.30000000E-01  0.00000000E+00  0.00000000E+00
                       1.40000000E-01  0.00000000E+00  0.00000000E+00
                       1.50000000E-01  0.00000000E+00  0.00000000E+00
                       1.60000000E-01  0.00000000E+00  0.00000000E+00
                       1.70000000E-01  0.00000000E+00  0.00000000E+00
                       1.80000000E-01  0.00000000E+00  0.00000000E+00
                       1.90000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.10000000E-01  0.00000000E+00  0.00000000E+00
                       2.20000000E-01  0.00000000E+00  0.00000000E+00
                       2.30000000E-01  0.00000000E+00  0.00000000E+00
                       2.40000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       2.60000000E-01  0.00000000E+00  0.00000000E+00
                       2.70000000E-01  0.00000000E+00  0.00000000E+00
                       2.80000000E-01  0.00000000E+00  0.00000000E+00
                       2.90000000E-01  0.00000000E+00  0.00000000E+00
                       3.00000000E-01  0.00000000E+00  0.00000000E+00
                       3.10000000E-01  0.00000000E+00  0.00000000E+00
                       3.20000000E-01  0.00000000E+00  0.00000000E+00
                       3.30000000E-01  0.00000000E+00  0.00000000E+00
                       3.40000000E-01  0.00000000E+00  0.00000000E+00
                       3.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.60000000E-01  0.00000000E+00  0.00000000E+00
                       3.70000000E-01  0.00000000E+00  0.00000000E+00
                       3.80000000E-01  0.00000000E+00  0.00000000E+00
                       3.90000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.10000000E-01  0.00000000E+00  0.00000000E+00
                       4.20000000E-01  0.00000000E+00  0.00000000E+00
                       4.30000000E-01  0.00000000E+00  0.00000000E+00
                       4.40000000E-01  0.00000000E+00  0.00000000E+00
                       4.50000000E-01  0.00000000E+00  0.00000000E+00
                       4.60000000E-01  0.00000000E+00  0.00000000E+00
                       4.70000000E-01  0.00000000E+00  0.00000000E+00
                       4.80000000E-01  0.00000000E+00  0.00000000E+00
                       4.90000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  1.00000000E-02  0.00000000E+00
                       5.00000000E-01  2.00000000E-02  0.00000000E+00
                       5.00000000E-01  3.00000000E-02  0.00000000E+00
                       5.00000000E-01  4.00000000E-02  0.00000000E+00
                       5.00000000E-01  5.00000000E-02  0.00000000E+00
                       5.00000000E-01  6.00000000E-02  0.00000000E+00
                       5.00000000E-01  7.00000000E-02  0.00000000E+00
                       5.00000000E-01  8.00000000E-02  0.00000000E+00
                       5.00000000E-01  9.00000000E-02  0.00000000E+00
                       5.00000000E-01  1.00000000E-01  0.00000000E+00
                       5.00000000E-01  1.10000000E-01  0.00000000E+00
                       5.00000000E-01  1.20000000E-01  0.00000000E+00
                       5.00000000E-01  1.30000000E-01  0.00000000E+00
                       5.00000000E-01  1.40000000E-01  0.00000000E+00
                       5.00000000E-01  1.50000000E-01  0.00000000E+00
                       5.00000000E-01  1.60000000E-01  0.00000000E+00
                       5.00000000E-01  1.70000000E-01  0.00000000E+00
                       5.00000000E-01  1.80000000E-01  0.00000000E+00
                       5.00000000E-01  1.90000000E-01  0.00000000E+00
                       5.00000000E-01  2.00000000E-01  0.00000000E+00
                       5.00000000E-01  2.10000000E-01  0.00000000E+00
                       5.00000000E-01  2.20000000E-01  0.00000000E+00
                       5.00000000E-01  2.30000000E-01  0.00000000E+00
                       5.00000000E-01  2.40000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.60000000E-01  0.00000000E+00
                       5.00000000E-01  2.70000000E-01  0.00000000E+00
                       5.00000000E-01  2.80000000E-01  0.00000000E+00
                       5.00000000E-01  2.90000000E-01  0.00000000E+00
                       5.00000000E-01  3.00000000E-01  0.00000000E+00
                       5.00000000E-01  3.10000000E-01  0.00000000E+00
                       5.00000000E-01  3.20000000E-01  0.00000000E+00
                       5.00000000E-01  3.30000000E-01  0.00000000E+00
                       5.00000000E-01  3.40000000E-01  0.00000000E+00
                       5.00000000E-01  3.50000000E-01  0.00000000E+00
                       5.00000000E-01  3.60000000E-01  0.00000000E+00
                       5.00000000E-01  3.70000000E-01  0.00000000E+00
                       5.00000000E-01  3.80000000E-01  0.00000000E+00
                       5.00000000E-01  3.90000000E-01  0.00000000E+00
                       5.00000000E-01  4.00000000E-01  0.00000000E+00
                       5.00000000E-01  4.10000000E-01  0.00000000E+00
                       5.00000000E-01  4.20000000E-01  0.00000000E+00
                       5.00000000E-01  4.30000000E-01  0.00000000E+00
                       5.00000000E-01  4.40000000E-01  0.00000000E+00
                       5.00000000E-01  4.50000000E-01  0.00000000E+00
                       5.00000000E-01  4.60000000E-01  0.00000000E+00
                       5.00000000E-01  4.70000000E-01  0.00000000E+00
                       5.00000000E-01  4.80000000E-01  0.00000000E+00
                       5.00000000E-01  4.90000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       4.92857143E-01  4.92857143E-01  0.00000000E+00
                       4.85714286E-01  4.85714286E-01  0.00000000E+00
                       4.78571429E-01  4.78571429E-01  0.00000000E+00
                       4.71428571E-01  4.71428571E-01  0.00000000E+00
                       4.64285714E-01  4.64285714E-01  0.00000000E+00
                       4.57142857E-01  4.57142857E-01  0.00000000E+00
                       4.50000000E-01  4.50000000E-01  0.00000000E+00
                       4.42857143E-01  4.42857143E-01  0.00000000E+00
                       4.35714286E-01  4.35714286E-01  0.00000000E+00
                       4.28571429E-01  4.28571429E-01  0.00000000E+00
                       4.21428571E-01  4.21428571E-01  0.00000000E+00
                       4.14285714E-01  4.14285714E-01  0.00000000E+00
                       4.07142857E-01  4.07142857E-01  0.00000000E+00
                       4.00000000E-01  4.00000000E-01  0.00000000E+00
                       3.92857143E-01  3.92857143E-01  0.00000000E+00
                       3.85714286E-01  3.85714286E-01  0.00000000E+00
                       3.78571429E-01  3.78571429E-01  0.00000000E+00
                       3.71428571E-01  3.71428571E-01  0.00000000E+00
                       3.64285714E-01  3.64285714E-01  0.00000000E+00
                       3.57142857E-01  3.57142857E-01  0.00000000E+00
                       3.50000000E-01  3.50000000E-01  0.00000000E+00
                       3.42857143E-01  3.42857143E-01  0.00000000E+00
                       3.35714286E-01  3.35714286E-01  0.00000000E+00
                       3.28571429E-01  3.28571429E-01  0.00000000E+00
                       3.21428571E-01  3.21428571E-01  0.00000000E+00
                       3.14285714E-01  3.14285714E-01  0.00000000E+00
                       3.07142857E-01  3.07142857E-01  0.00000000E+00
                       3.00000000E-01  3.00000000E-01  0.00000000E+00
                       2.92857143E-01  2.92857143E-01  0.00000000E+00
                       2.85714286E-01  2.85714286E-01  0.00000000E+00
                       2.78571429E-01  2.78571429E-01  0.00000000E+00
                       2.71428571E-01  2.71428571E-01  0.00000000E+00
                       2.64285714E-01  2.64285714E-01  0.00000000E+00
                       2.57142857E-01  2.57142857E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       2.42857143E-01  2.42857143E-01  0.00000000E+00
                       2.35714286E-01  2.35714286E-01  0.00000000E+00
                       2.28571429E-01  2.28571429E-01  0.00000000E+00
                       2.21428571E-01  2.21428571E-01  0.00000000E+00
                       2.14285714E-01  2.14285714E-01  0.00000000E+00
                       2.07142857E-01  2.07142857E-01  0.00000000E+00
                       2.00000000E-01  2.00000000E-01  0.00000000E+00
                       1.92857143E-01  1.92857143E-01  0.00000000E+00
                       1.85714286E-01  1.85714286E-01  0.00000000E+00
                       1.78571429E-01  1.78571429E-01  0.00000000E+00
                       1.71428571E-01  1.71428571E-01  0.00000000E+00
                       1.64285714E-01  1.64285714E-01  0.00000000E+00
                       1.57142857E-01  1.57142857E-01  0.00000000E+00
                       1.50000000E-01  1.50000000E-01  0.00000000E+00
                       1.42857143E-01  1.42857143E-01  0.00000000E+00
                       1.35714286E-01  1.35714286E-01  0.00000000E+00
                       1.28571429E-01  1.28571429E-01  0.00000000E+00
                       1.21428571E-01  1.21428571E-01  0.00000000E+00
                       1.14285714E-01  1.14285714E-01  0.00000000E+00
                       1.07142857E-01  1.07142857E-01  0.00000000E+00
                       1.00000000E-01  1.00000000E-01  0.00000000E+00
                       9.28571429E-02  9.28571429E-02  0.00000000E+00
                       8.57142857E-02  8.57142857E-02  0.00000000E+00
                       7.85714286E-02  7.85714286E-02  0.00000000E+00
                       7.14285714E-02  7.14285714E-02  0.00000000E+00
                       6.42857143E-02  6.42857143E-02  0.00000000E+00
                       5.71428571E-02  5.71428571E-02  0.00000000E+00
                       5.00000000E-02  5.00000000E-02  0.00000000E+00
                       4.28571429E-02  4.28571429E-02  0.00000000E+00
                       3.57142857E-02  3.57142857E-02  0.00000000E+00
                       2.85714286E-02  2.85714286E-02  0.00000000E+00
                       2.14285714E-02  2.14285714E-02  0.00000000E+00
                       1.42857143E-02  1.42857143E-02  0.00000000E+00
                       7.14285714E-03  7.14285714E-03  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
           kptopt          -4
          kssform           3
            lpawu           2      -1      -1
P           mkmem           8
            natom           5
           natsph        5
            nband          30
         nbandkss          30
           nbdbuf           2
           ndtset           1
            ngfft          30      30      30
          ngfftdg          54      54      54
             nkpt         261
             nsym          48
           ntypat           3
           occopt           3
        optforces           0
        pawecutdg      6.00000000E+01 Hartree
        pawfatbnd           1
        pawprtvol           3
     plowan_bandi          21
     plowan_bandf          23
   plowan_compute           1
     plowan_natom           1
        plowan_nt           1
 plowan_realspace           1
        plowan_it3       0    0    0
     plowan_iatom3       1
       plowan_nbl3       1
     plowan_lcalc3       2
  plowan_projcalc3      -2
           prtvol           4
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         221
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
           tolwfr      1.00000000E-12
           tsmear      3.80017850E-03 Hartree
            typat      1  2  3  3  3
          usepawu          10
           useylm           1
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.9210455615E+00  1.9210455615E+00  1.9210455615E+00
                       1.9210455615E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  1.9210455615E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.9210455615E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.6302500000E+00  3.6302500000E+00  3.6302500000E+00
                       3.6302500000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  3.6302500000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.6302500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
            znucl       23.00000   38.00000    8.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   3.
 
================================================================================
== DATASET  3 ==================================================================
-   mpi_nproc: 36, omp_nthreads: -1 (-1 if OMP is not activated)
 

--- !DatasetInfo
iteration_state: {dtset: 3, }
dimensions: {natom: 5, nkpt: 261, mband: 30, nsppol: 1, nspinor: 1, nspden: 1, mpw: 1659, }
cutoff_energies: {ecut:  20.0, pawecutdg:  60.0, }
electrons: {nelect:   4.10000000E+01, charge:   0.00000000E+00, occopt:   3.00000000E+00, tsmear:   3.80017850E-03, }
meta: {optdriver: 0, ionmov: 0, optcell: 0, iscf: -2, paral_kgb: 0, }
...

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  7.2605000  0.0000000  0.0000000  G(1)=  0.1377316  0.0000000  0.0000000
 R(2)=  0.0000000  7.2605000  0.0000000  G(2)=  0.0000000  0.1377316  0.0000000
 R(3)=  0.0000000  0.0000000  7.2605000  G(3)=  0.0000000  0.0000000  0.1377316
 Unit cell volume ucvol=  3.8273624E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     20.000   => boxcut(ratio)=   2.05246
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  54  54  54
         ecut(hartree)=     60.000   => boxcut(ratio)=   2.13298
 
--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
- pspatm: opening atomic psp file    ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
- pspatm : Reading pseudopotential header in XML form from ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.20000000
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 910 , AA= 0.60796E-03 BB= 0.13983E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  2.02290427
 mmax=  910
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to  744 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
- pspatm: opening atomic psp file    ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
- pspatm : Reading pseudopotential header in XML form from ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.20669967
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1500 , AA= 0.22443E-03 BB= 0.85283E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.81361893
 mmax= 1500
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1337 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   3  psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
- pspatm: opening atomic psp file    ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
- pspatm : Reading pseudopotential header in XML form from ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.41465230
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=2001 , AA= 0.72565E-03 BB= 0.58052E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.20231231
 mmax= 2001
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1762 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 pspatm: atomic psp has been read  and splines computed
 
--------------------------------------------------------------------------------
 
P newkpt: treating     30 bands with npw=    1640 for ikpt=   1 by node    0
P newkpt: treating     30 bands with npw=    1640 for ikpt=   2 by node    0
P newkpt: treating     30 bands with npw=    1640 for ikpt=   3 by node    0
P newkpt: treating     30 bands with npw=    1640 for ikpt=   4 by node    0
P newkpt: treating     30 bands with npw=    1640 for ikpt=   5 by node    0
P newkpt: treating     30 bands with npw=    1637 for ikpt=   6 by node    0
P newkpt: treating     30 bands with npw=    1631 for ikpt=   7 by node    0
P newkpt: treating     30 bands with npw=    1625 for ikpt=   8 by node    0
P newkpt: treating     30 bands with npw=    1625 for ikpt=   9 by node    1
P newkpt: treating     30 bands with npw=    1625 for ikpt=  10 by node    1
P newkpt: treating     30 bands with npw=    1628 for ikpt=  11 by node    1
P newkpt: treating     30 bands with npw=    1628 for ikpt=  12 by node    1
P newkpt: treating     30 bands with npw=    1634 for ikpt=  13 by node    1
P newkpt: treating     30 bands with npw=    1640 for ikpt=  14 by node    1
P newkpt: treating     30 bands with npw=    1640 for ikpt=  15 by node    1
P newkpt: treating     30 bands with npw=    1640 for ikpt=  16 by node    1
P newkpt: treating     30 bands with npw=    1640 for ikpt=  17 by node    2
P newkpt: treating     30 bands with npw=    1634 for ikpt=  18 by node    2
P newkpt: treating     30 bands with npw=    1634 for ikpt=  19 by node    2
P newkpt: treating     30 bands with npw=    1640 for ikpt=  20 by node    2
P newkpt: treating     30 bands with npw=    1640 for ikpt=  21 by node    2
P newkpt: treating     30 bands with npw=    1640 for ikpt=  22 by node    2
P newkpt: treating     30 bands with npw=    1640 for ikpt=  23 by node    2
P newkpt: treating     30 bands with npw=    1628 for ikpt=  24 by node    2
P newkpt: treating     30 bands with npw=    1628 for ikpt=  25 by node    3
P newkpt: treating     30 bands with npw=    1628 for ikpt=  26 by node    3
P newkpt: treating     30 bands with npw=    1628 for ikpt=  27 by node    3
P newkpt: treating     30 bands with npw=    1634 for ikpt=  28 by node    3
P newkpt: treating     30 bands with npw=    1634 for ikpt=  29 by node    3
P newkpt: treating     30 bands with npw=    1634 for ikpt=  30 by node    3
P newkpt: treating     30 bands with npw=    1634 for ikpt=  31 by node    3
P newkpt: treating     30 bands with npw=    1628 for ikpt=  32 by node    3
P newkpt: treating     30 bands with npw=    1628 for ikpt=  33 by node    4
P newkpt: treating     30 bands with npw=    1628 for ikpt=  34 by node    4
P newkpt: treating     30 bands with npw=    1628 for ikpt=  35 by node    4
P newkpt: treating     30 bands with npw=    1628 for ikpt=  36 by node    4
P newkpt: treating     30 bands with npw=    1622 for ikpt=  37 by node    4
P newkpt: treating     30 bands with npw=    1631 for ikpt=  38 by node    4
P newkpt: treating     30 bands with npw=    1637 for ikpt=  39 by node    4
P newkpt: treating     30 bands with npw=    1637 for ikpt=  40 by node    4
P newkpt: treating     30 bands with npw=    1637 for ikpt=  41 by node    5
P newkpt: treating     30 bands with npw=    1637 for ikpt=  42 by node    5
P newkpt: treating     30 bands with npw=    1631 for ikpt=  43 by node    5
P newkpt: treating     30 bands with npw=    1637 for ikpt=  44 by node    5
P newkpt: treating     30 bands with npw=    1637 for ikpt=  45 by node    5
P newkpt: treating     30 bands with npw=    1637 for ikpt=  46 by node    5
P newkpt: treating     30 bands with npw=    1637 for ikpt=  47 by node    5
P newkpt: treating     30 bands with npw=    1637 for ikpt=  48 by node    5
P newkpt: treating     30 bands with npw=    1631 for ikpt=  49 by node    6
P newkpt: treating     30 bands with npw=    1631 for ikpt=  50 by node    6
P newkpt: treating     30 bands with npw=    1634 for ikpt=  51 by node    6
P newkpt: treating     30 bands with npw=    1632 for ikpt=  52 by node    6
P newkpt: treating     30 bands with npw=    1632 for ikpt=  53 by node    6
P newkpt: treating     30 bands with npw=    1632 for ikpt=  54 by node    6
P newkpt: treating     30 bands with npw=    1638 for ikpt=  55 by node    6
P newkpt: treating     30 bands with npw=    1644 for ikpt=  56 by node    6
P newkpt: treating     30 bands with npw=    1644 for ikpt=  57 by node    7
P newkpt: treating     30 bands with npw=    1644 for ikpt=  58 by node    7
P newkpt: treating     30 bands with npw=    1644 for ikpt=  59 by node    7
P newkpt: treating     30 bands with npw=    1644 for ikpt=  60 by node    7
P newkpt: treating     30 bands with npw=    1629 for ikpt=  61 by node    7
P newkpt: treating     30 bands with npw=    1644 for ikpt=  62 by node    7
P newkpt: treating     30 bands with npw=    1644 for ikpt=  63 by node    7
P newkpt: treating     30 bands with npw=    1644 for ikpt=  64 by node    7
P newkpt: treating     30 bands with npw=    1644 for ikpt=  65 by node    8
P newkpt: treating     30 bands with npw=    1647 for ikpt=  66 by node    8
P newkpt: treating     30 bands with npw=    1647 for ikpt=  67 by node    8
P newkpt: treating     30 bands with npw=    1653 for ikpt=  68 by node    8
P newkpt: treating     30 bands with npw=    1653 for ikpt=  69 by node    8
P newkpt: treating     30 bands with npw=    1653 for ikpt=  70 by node    8
P newkpt: treating     30 bands with npw=    1653 for ikpt=  71 by node    8
P newkpt: treating     30 bands with npw=    1650 for ikpt=  72 by node    8
P newkpt: treating     30 bands with npw=    1650 for ikpt=  73 by node    9
P newkpt: treating     30 bands with npw=    1650 for ikpt=  74 by node    9
P newkpt: treating     30 bands with npw=    1650 for ikpt=  75 by node    9
P newkpt: treating     30 bands with npw=    1650 for ikpt=  76 by node    9
P newkpt: treating     30 bands with npw=    1650 for ikpt=  77 by node    9
P newkpt: treating     30 bands with npw=    1644 for ikpt=  78 by node    9
P newkpt: treating     30 bands with npw=    1650 for ikpt=  79 by node    9
P newkpt: treating     30 bands with npw=    1656 for ikpt=  80 by node    9
P newkpt: treating     30 bands with npw=    1656 for ikpt=  81 by node   10
P newkpt: treating     30 bands with npw=    1656 for ikpt=  82 by node   10
P newkpt: treating     30 bands with npw=    1644 for ikpt=  83 by node   10
P newkpt: treating     30 bands with npw=    1650 for ikpt=  84 by node   10
P newkpt: treating     30 bands with npw=    1641 for ikpt=  85 by node   10
P newkpt: treating     30 bands with npw=    1635 for ikpt=  86 by node   10
P newkpt: treating     30 bands with npw=    1641 for ikpt=  87 by node   10
P newkpt: treating     30 bands with npw=    1647 for ikpt=  88 by node   10
P newkpt: treating     30 bands with npw=    1647 for ikpt=  89 by node   11
P newkpt: treating     30 bands with npw=    1647 for ikpt=  90 by node   11
P newkpt: treating     30 bands with npw=    1647 for ikpt=  91 by node   11
P newkpt: treating     30 bands with npw=    1647 for ikpt=  92 by node   11
P newkpt: treating     30 bands with npw=    1647 for ikpt=  93 by node   11
P newkpt: treating     30 bands with npw=    1643 for ikpt=  94 by node   11
P newkpt: treating     30 bands with npw=    1635 for ikpt=  95 by node   11
P newkpt: treating     30 bands with npw=    1647 for ikpt=  96 by node   11
P newkpt: treating     30 bands with npw=    1647 for ikpt=  97 by node   12
P newkpt: treating     30 bands with npw=    1647 for ikpt=  98 by node   12
P newkpt: treating     30 bands with npw=    1647 for ikpt=  99 by node   12
P newkpt: treating     30 bands with npw=    1647 for ikpt= 100 by node   12
P newkpt: treating     30 bands with npw=    1655 for ikpt= 101 by node   12
P newkpt: treating     30 bands with npw=    1651 for ikpt= 102 by node   12
P newkpt: treating     30 bands with npw=    1647 for ikpt= 103 by node   12
P newkpt: treating     30 bands with npw=    1647 for ikpt= 104 by node   12
P newkpt: treating     30 bands with npw=    1647 for ikpt= 105 by node   13
P newkpt: treating     30 bands with npw=    1647 for ikpt= 106 by node   13
P newkpt: treating     30 bands with npw=    1659 for ikpt= 107 by node   13
P newkpt: treating     30 bands with npw=    1659 for ikpt= 108 by node   13
P newkpt: treating     30 bands with npw=    1651 for ikpt= 109 by node   13
P newkpt: treating     30 bands with npw=    1643 for ikpt= 110 by node   13
P newkpt: treating     30 bands with npw=    1643 for ikpt= 111 by node   13
P newkpt: treating     30 bands with npw=    1643 for ikpt= 112 by node   13
P newkpt: treating     30 bands with npw=    1651 for ikpt= 113 by node   14
P newkpt: treating     30 bands with npw=    1651 for ikpt= 114 by node   14
P newkpt: treating     30 bands with npw=    1639 for ikpt= 115 by node   14
P newkpt: treating     30 bands with npw=    1639 for ikpt= 116 by node   14
P newkpt: treating     30 bands with npw=    1639 for ikpt= 117 by node   14
P newkpt: treating     30 bands with npw=    1643 for ikpt= 118 by node   14
P newkpt: treating     30 bands with npw=    1643 for ikpt= 119 by node   14
P newkpt: treating     30 bands with npw=    1643 for ikpt= 120 by node   14
P newkpt: treating     30 bands with npw=    1643 for ikpt= 121 by node   15
P newkpt: treating     30 bands with npw=    1642 for ikpt= 122 by node   15
P newkpt: treating     30 bands with npw=    1642 for ikpt= 123 by node   15
P newkpt: treating     30 bands with npw=    1642 for ikpt= 124 by node   15
P newkpt: treating     30 bands with npw=    1642 for ikpt= 125 by node   15
P newkpt: treating     30 bands with npw=    1642 for ikpt= 126 by node   15
P newkpt: treating     30 bands with npw=    1642 for ikpt= 127 by node   15
P newkpt: treating     30 bands with npw=    1642 for ikpt= 128 by node   15
P newkpt: treating     30 bands with npw=    1646 for ikpt= 129 by node   16
P newkpt: treating     30 bands with npw=    1646 for ikpt= 130 by node   16
P newkpt: treating     30 bands with npw=    1646 for ikpt= 131 by node   16
P newkpt: treating     30 bands with npw=    1638 for ikpt= 132 by node   16
P newkpt: treating     30 bands with npw=    1646 for ikpt= 133 by node   16
P newkpt: treating     30 bands with npw=    1646 for ikpt= 134 by node   16
P newkpt: treating     30 bands with npw=    1646 for ikpt= 135 by node   16
P newkpt: treating     30 bands with npw=    1646 for ikpt= 136 by node   16
P newkpt: treating     30 bands with npw=    1646 for ikpt= 137 by node   17
P newkpt: treating     30 bands with npw=    1646 for ikpt= 138 by node   17
P newkpt: treating     30 bands with npw=    1654 for ikpt= 139 by node   17
P newkpt: treating     30 bands with npw=    1654 for ikpt= 140 by node   17
P newkpt: treating     30 bands with npw=    1654 for ikpt= 141 by node   17
P newkpt: treating     30 bands with npw=    1654 for ikpt= 142 by node   17
P newkpt: treating     30 bands with npw=    1646 for ikpt= 143 by node   17
P newkpt: treating     30 bands with npw=    1642 for ikpt= 144 by node   17
P newkpt: treating     30 bands with npw=    1638 for ikpt= 145 by node   18
P newkpt: treating     30 bands with npw=    1638 for ikpt= 146 by node   18
P newkpt: treating     30 bands with npw=    1638 for ikpt= 147 by node   18
P newkpt: treating     30 bands with npw=    1638 for ikpt= 148 by node   18
P newkpt: treating     30 bands with npw=    1642 for ikpt= 149 by node   18
P newkpt: treating     30 bands with npw=    1642 for ikpt= 150 by node   18
P newkpt: treating     30 bands with npw=    1634 for ikpt= 151 by node   18
P newkpt: treating     30 bands with npw=    1638 for ikpt= 152 by node   18
P newkpt: treating     30 bands with npw=    1634 for ikpt= 153 by node   19
P newkpt: treating     30 bands with npw=    1634 for ikpt= 154 by node   19
P newkpt: treating     30 bands with npw=    1640 for ikpt= 155 by node   19
P newkpt: treating     30 bands with npw=    1636 for ikpt= 156 by node   19
P newkpt: treating     30 bands with npw=    1634 for ikpt= 157 by node   19
P newkpt: treating     30 bands with npw=    1634 for ikpt= 158 by node   19
P newkpt: treating     30 bands with npw=    1630 for ikpt= 159 by node   19
P newkpt: treating     30 bands with npw=    1628 for ikpt= 160 by node   19
P newkpt: treating     30 bands with npw=    1628 for ikpt= 161 by node   20
P newkpt: treating     30 bands with npw=    1632 for ikpt= 162 by node   20
P newkpt: treating     30 bands with npw=    1632 for ikpt= 163 by node   20
P newkpt: treating     30 bands with npw=    1628 for ikpt= 164 by node   20
P newkpt: treating     30 bands with npw=    1632 for ikpt= 165 by node   20
P newkpt: treating     30 bands with npw=    1634 for ikpt= 166 by node   20
P newkpt: treating     30 bands with npw=    1634 for ikpt= 167 by node   20
P newkpt: treating     30 bands with npw=    1634 for ikpt= 168 by node   20
P newkpt: treating     30 bands with npw=    1630 for ikpt= 169 by node   21
P newkpt: treating     30 bands with npw=    1630 for ikpt= 170 by node   21
P newkpt: treating     30 bands with npw=    1636 for ikpt= 171 by node   21
P newkpt: treating     30 bands with npw=    1632 for ikpt= 172 by node   21
P newkpt: treating     30 bands with npw=    1632 for ikpt= 173 by node   21
P newkpt: treating     30 bands with npw=    1648 for ikpt= 174 by node   21
P newkpt: treating     30 bands with npw=    1644 for ikpt= 175 by node   21
P newkpt: treating     30 bands with npw=    1638 for ikpt= 176 by node   21
P newkpt: treating     30 bands with npw=    1642 for ikpt= 177 by node   22
P newkpt: treating     30 bands with npw=    1642 for ikpt= 178 by node   22
P newkpt: treating     30 bands with npw=    1638 for ikpt= 179 by node   22
P newkpt: treating     30 bands with npw=    1638 for ikpt= 180 by node   22
P newkpt: treating     30 bands with npw=    1638 for ikpt= 181 by node   22
P newkpt: treating     30 bands with npw=    1634 for ikpt= 182 by node   22
P newkpt: treating     30 bands with npw=    1636 for ikpt= 183 by node   22
P newkpt: treating     30 bands with npw=    1636 for ikpt= 184 by node   22
P newkpt: treating     30 bands with npw=    1640 for ikpt= 185 by node   23
P newkpt: treating     30 bands with npw=    1640 for ikpt= 186 by node   23
P newkpt: treating     30 bands with npw=    1640 for ikpt= 187 by node   23
P newkpt: treating     30 bands with npw=    1640 for ikpt= 188 by node   23
P newkpt: treating     30 bands with npw=    1632 for ikpt= 189 by node   23
P newkpt: treating     30 bands with npw=    1632 for ikpt= 190 by node   23
P newkpt: treating     30 bands with npw=    1628 for ikpt= 191 by node   23
P newkpt: treating     30 bands with npw=    1632 for ikpt= 192 by node   23
P newkpt: treating     30 bands with npw=    1636 for ikpt= 193 by node   24
P newkpt: treating     30 bands with npw=    1638 for ikpt= 194 by node   24
P newkpt: treating     30 bands with npw=    1638 for ikpt= 195 by node   24
P newkpt: treating     30 bands with npw=    1638 for ikpt= 196 by node   24
P newkpt: treating     30 bands with npw=    1638 for ikpt= 197 by node   24
P newkpt: treating     30 bands with npw=    1638 for ikpt= 198 by node   24
P newkpt: treating     30 bands with npw=    1636 for ikpt= 199 by node   24
P newkpt: treating     30 bands with npw=    1636 for ikpt= 200 by node   24
P newkpt: treating     30 bands with npw=    1636 for ikpt= 201 by node   25
P newkpt: treating     30 bands with npw=    1636 for ikpt= 202 by node   25
P newkpt: treating     30 bands with npw=    1636 for ikpt= 203 by node   25
P newkpt: treating     30 bands with npw=    1640 for ikpt= 204 by node   25
P newkpt: treating     30 bands with npw=    1636 for ikpt= 205 by node   25
P newkpt: treating     30 bands with npw=    1636 for ikpt= 206 by node   25
P newkpt: treating     30 bands with npw=    1632 for ikpt= 207 by node   25
P newkpt: treating     30 bands with npw=    1632 for ikpt= 208 by node   25
P newkpt: treating     30 bands with npw=    1632 for ikpt= 209 by node   26
P newkpt: treating     30 bands with npw=    1624 for ikpt= 210 by node   26
P newkpt: treating     30 bands with npw=    1624 for ikpt= 211 by node   26
P newkpt: treating     30 bands with npw=    1618 for ikpt= 212 by node   26
P newkpt: treating     30 bands with npw=    1614 for ikpt= 213 by node   26
P newkpt: treating     30 bands with npw=    1614 for ikpt= 214 by node   26
P newkpt: treating     30 bands with npw=    1614 for ikpt= 215 by node   26
P newkpt: treating     30 bands with npw=    1616 for ikpt= 216 by node   26
P newkpt: treating     30 bands with npw=    1620 for ikpt= 217 by node   27
P newkpt: treating     30 bands with npw=    1620 for ikpt= 218 by node   27
P newkpt: treating     30 bands with npw=    1624 for ikpt= 219 by node   27
P newkpt: treating     30 bands with npw=    1624 for ikpt= 220 by node   27
P newkpt: treating     30 bands with npw=    1618 for ikpt= 221 by node   27
P newkpt: treating     30 bands with npw=    1622 for ikpt= 222 by node   27
P newkpt: treating     30 bands with npw=    1624 for ikpt= 223 by node   27
P newkpt: treating     30 bands with npw=    1628 for ikpt= 224 by node   27
P newkpt: treating     30 bands with npw=    1628 for ikpt= 225 by node   28
P newkpt: treating     30 bands with npw=    1628 for ikpt= 226 by node   28
P newkpt: treating     30 bands with npw=    1628 for ikpt= 227 by node   28
P newkpt: treating     30 bands with npw=    1640 for ikpt= 228 by node   28
P newkpt: treating     30 bands with npw=    1636 for ikpt= 229 by node   28
P newkpt: treating     30 bands with npw=    1632 for ikpt= 230 by node   28
P newkpt: treating     30 bands with npw=    1632 for ikpt= 231 by node   28
P newkpt: treating     30 bands with npw=    1638 for ikpt= 232 by node   28
P newkpt: treating     30 bands with npw=    1630 for ikpt= 233 by node   29
P newkpt: treating     30 bands with npw=    1638 for ikpt= 234 by node   29
P newkpt: treating     30 bands with npw=    1638 for ikpt= 235 by node   29
P newkpt: treating     30 bands with npw=    1642 for ikpt= 236 by node   29
P newkpt: treating     30 bands with npw=    1642 for ikpt= 237 by node   29
P newkpt: treating     30 bands with npw=    1643 for ikpt= 238 by node   29
P newkpt: treating     30 bands with npw=    1643 for ikpt= 239 by node   29
P newkpt: treating     30 bands with npw=    1643 for ikpt= 240 by node   29
P newkpt: treating     30 bands with npw=    1647 for ikpt= 241 by node   30
P newkpt: treating     30 bands with npw=    1647 for ikpt= 242 by node   30
P newkpt: treating     30 bands with npw=    1643 for ikpt= 243 by node   30
P newkpt: treating     30 bands with npw=    1643 for ikpt= 244 by node   30
P newkpt: treating     30 bands with npw=    1649 for ikpt= 245 by node   30
P newkpt: treating     30 bands with npw=    1649 for ikpt= 246 by node   30
P newkpt: treating     30 bands with npw=    1637 for ikpt= 247 by node   30
P newkpt: treating     30 bands with npw=    1645 for ikpt= 248 by node   30
P newkpt: treating     30 bands with npw=    1645 for ikpt= 249 by node   31
P newkpt: treating     30 bands with npw=    1645 for ikpt= 250 by node   31
P newkpt: treating     30 bands with npw=    1645 for ikpt= 251 by node   31
P newkpt: treating     30 bands with npw=    1651 for ikpt= 252 by node   31
P newkpt: treating     30 bands with npw=    1647 for ikpt= 253 by node   31
P newkpt: treating     30 bands with npw=    1647 for ikpt= 254 by node   31
P newkpt: treating     30 bands with npw=    1641 for ikpt= 255 by node   31
P newkpt: treating     30 bands with npw=    1643 for ikpt= 256 by node   31
P newkpt: treating     30 bands with npw=    1641 for ikpt= 257 by node   32
P newkpt: treating     30 bands with npw=    1643 for ikpt= 258 by node   32
P newkpt: treating     30 bands with npw=    1647 for ikpt= 259 by node   32
P newkpt: treating     30 bands with npw=    1647 for ikpt= 260 by node   32
P newkpt: treating     30 bands with npw=    1647 for ikpt= 261 by node   32
 
================================================================================
 prteigrs : about to open file tdmft_5o_DS3_EIG
 Non-SCF case, kpt    1 (  0.50000  0.50000  0.50000), residuals and eigenvalues=
  6.64E-13  8.35E-13  2.13E-13  7.05E-13  7.85E-13  6.11E-13  2.32E-13  2.63E-13
  5.35E-13  4.27E-13  3.99E-13  6.07E-13  7.90E-13  8.14E-13  8.99E-13  3.92E-13
  6.84E-13  3.38E-13  5.84E-13  2.17E-13  3.45E-13  2.31E-13  7.63E-13  4.98E-13
  1.23E-13  6.86E-13  4.50E-13  8.45E-13  2.90E-13  2.64E-06
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6356E-01 -3.6978E-01
 -3.6978E-01 -3.6978E-01 -3.1919E-01 -3.1919E-01 -3.1919E-01  2.7134E-02
  5.4192E-02  5.4192E-02  7.5923E-02  7.5923E-02  7.5923E-02  2.1920E-01
  2.1920E-01  2.1920E-01  3.5033E-01  3.5033E-01  3.5033E-01  4.8352E-01
  4.8352E-01  4.8352E-01  4.9486E-01  4.9486E-01  5.9107E-01  5.9109E-01
  prteigrs : nnsclo,ikpt=   30    1 max resid (incl. the buffer)=  2.63958E-06
 Non-SCF case, kpt    2 (  0.49444  0.49444  0.49444), residuals and eigenvalues=
  3.29E-13  4.38E-13  1.56E-13  4.37E-13  4.57E-13  3.66E-13  9.42E-13  7.40E-13
  3.72E-13  4.83E-13  3.69E-13  2.64E-13  5.70E-13  3.49E-13  5.88E-13  9.09E-13
  2.21E-13  5.06E-13  5.27E-13  7.96E-13  4.79E-13  4.56E-13  2.27E-13  2.88E-13
  7.49E-13  2.71E-13  6.20E-13  3.68E-13  3.98E-13  3.52E-06
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6356E-01 -3.6984E-01
 -3.6979E-01 -3.6979E-01 -3.1917E-01 -3.1917E-01 -3.1913E-01  2.7169E-02
  5.4211E-02  5.4211E-02  7.5902E-02  7.5933E-02  7.5933E-02  2.1916E-01
  2.1916E-01  2.1919E-01  3.5030E-01  3.5031E-01  3.5031E-01  4.8356E-01
  4.8356E-01  4.8358E-01  4.9484E-01  4.9484E-01  5.9103E-01  5.9106E-01
  prteigrs : nnsclo,ikpt=   30    2 max resid (incl. the buffer)=  3.52239E-06
 Non-SCF case, kpt    3 (  0.48889  0.48889  0.48889), residuals and eigenvalues=
  4.72E-13  4.03E-13  1.90E-13  4.11E-13  5.37E-13  4.21E-13  2.46E-13  3.80E-13
  3.22E-13  6.40E-13  6.25E-13  8.87E-13  4.64E-13  6.41E-13  5.15E-13  6.03E-13
  1.99E-13  4.61E-13  4.17E-13  6.87E-13  7.81E-13  2.68E-13  8.77E-13  3.58E-13
  7.84E-13  4.41E-13  2.59E-13  8.63E-13  4.90E-13  2.35E-05
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6356E-01 -3.7000E-01
 -3.6982E-01 -3.6982E-01 -3.1912E-01 -3.1912E-01 -3.1898E-01  2.7271E-02
  5.4266E-02  5.4266E-02  7.5837E-02  7.5962E-02  7.5962E-02  2.1905E-01
  2.1905E-01  2.1914E-01  3.5023E-01  3.5025E-01  3.5025E-01  4.8366E-01
  4.8366E-01  4.8375E-01  4.9478E-01  4.9478E-01  5.9091E-01  5.9096E-01
  prteigrs : nnsclo,ikpt=   30    3 max resid (incl. the buffer)=  2.35094E-05
 Non-SCF case, kpt    4 (  0.48333  0.48333  0.48333), residuals and eigenvalues=
  5.71E-13  4.18E-13  1.99E-13  2.96E-13  5.75E-13  4.61E-13  1.63E-13  4.30E-13
  3.38E-13  7.74E-13  5.99E-13  7.77E-13  3.27E-13  6.81E-13  5.43E-13  3.16E-13
  1.54E-13  2.12E-13  5.17E-13  4.01E-13  9.53E-13  5.26E-13  3.15E-13  5.87E-13
  5.66E-13  5.46E-13  3.72E-13  7.55E-13  3.51E-13  1.27E-05
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6357E-01 -3.7028E-01
 -3.6988E-01 -3.6988E-01 -3.1904E-01 -3.1904E-01 -3.1871E-01  2.7441E-02
  5.4357E-02  5.4357E-02  7.5731E-02  7.6010E-02  7.6010E-02  2.1885E-01
  2.1885E-01  2.1906E-01  3.5012E-01  3.5014E-01  3.5014E-01  4.8383E-01
  4.8383E-01  4.8403E-01  4.9470E-01  4.9470E-01  5.9072E-01  5.9075E-01
  prteigrs : nnsclo,ikpt=   30    4 max resid (incl. the buffer)=  1.26900E-05
 Non-SCF case, kpt    5 (  0.47778  0.47778  0.47778), residuals and eigenvalues=
  5.46E-13  9.06E-13  7.93E-13  6.55E-13  5.74E-13  4.62E-13  6.02E-13  8.39E-13
  3.22E-13  5.98E-13  6.01E-13  2.99E-13  4.54E-13  4.75E-13  2.88E-13  4.78E-13
  8.16E-13  7.87E-13  2.10E-13  8.58E-13  4.40E-13  9.43E-13  2.82E-13  4.28E-13
  6.97E-13  2.14E-13  6.13E-13  8.55E-13  1.83E-13  2.64E-06
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6357E-01 -3.7066E-01
 -3.6995E-01 -3.6995E-01 -3.1893E-01 -3.1893E-01 -3.1835E-01  2.7678E-02
  5.4486E-02  5.4486E-02  7.5585E-02  7.6078E-02  7.6078E-02  2.1858E-01
  2.1858E-01  2.1895E-01  3.4995E-01  3.5000E-01  3.5000E-01  4.8404E-01
  4.8404E-01  4.8442E-01  4.9460E-01  4.9460E-01  5.9045E-01  5.9047E-01
  prteigrs : nnsclo,ikpt=   30    5 max resid (incl. the buffer)=  2.63922E-06
 Non-SCF case, kpt    6 (  0.47222  0.47222  0.47222), residuals and eigenvalues=
  3.90E-13  2.75E-13  3.83E-13  6.99E-13  3.92E-13  8.57E-13  4.67E-13  4.88E-13
  3.00E-13  3.32E-13  3.11E-13  5.43E-13  4.62E-13  3.48E-13  2.69E-13  5.60E-13
  4.21E-13  2.71E-13  5.56E-13  6.42E-13  9.19E-13  4.12E-13  8.16E-13  6.44E-13
  6.52E-13  6.15E-13  5.46E-13  7.54E-13  4.26E-13  7.81E-05
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6358E-01 -3.7114E-01
 -3.7005E-01 -3.7005E-01 -3.1879E-01 -3.1879E-01 -3.1790E-01  2.7982E-02
  5.4651E-02  5.4651E-02  7.5400E-02  7.6165E-02  7.6165E-02  2.1824E-01
  2.1824E-01  2.1881E-01  3.4974E-01  3.4981E-01  3.4981E-01  4.8429E-01
  4.8429E-01  4.8492E-01  4.9450E-01  4.9450E-01  5.9010E-01  5.9037E-01
  prteigrs : nnsclo,ikpt=   30    6 max resid (incl. the buffer)=  7.81062E-05
 Non-SCF case, kpt    7 (  0.46667  0.46667  0.46667), residuals and eigenvalues=
  3.61E-13  6.71E-13  2.56E-13  5.21E-13  3.25E-13  3.62E-13  4.70E-13  3.65E-13
  4.55E-13  2.25E-13  2.29E-13  3.72E-13  3.12E-13  5.48E-13  2.29E-13  1.71E-13
  1.86E-13  2.48E-13  7.00E-13  1.80E-13  5.23E-13  3.22E-13  9.89E-13  4.38E-13
  1.19E-13  8.83E-13  7.82E-13  3.18E-13  3.86E-13  1.90E-05
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6359E-01 -3.7172E-01
 -3.7016E-01 -3.7016E-01 -3.1862E-01 -3.1862E-01 -3.1735E-01  2.8351E-02
  5.4852E-02  5.4852E-02  7.5179E-02  7.6273E-02  7.6273E-02  2.1782E-01
  2.1782E-01  2.1864E-01  3.4948E-01  3.4959E-01  3.4959E-01  4.8454E-01
  4.8454E-01  4.8552E-01  4.9442E-01  4.9442E-01  5.8968E-01  5.8979E-01
  prteigrs : nnsclo,ikpt=   30    7 max resid (incl. the buffer)=  1.89929E-05
 Non-SCF case, kpt    8 (  0.46111  0.46111  0.46111), residuals and eigenvalues=
  4.62E-13  8.93E-13  6.31E-13  4.16E-13  3.27E-13  5.39E-13  4.19E-13  3.95E-13
  4.12E-13  3.71E-13  3.67E-13  2.59E-13  2.96E-13  5.32E-13  3.12E-13  3.93E-13
  5.01E-13  3.06E-13  2.61E-13  8.65E-13  2.22E-13  5.77E-13  4.94E-13  1.51E-13
  8.33E-13  3.32E-13  5.74E-13  6.59E-13  1.70E-13  2.65E-05
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6360E-01 -3.7238E-01
 -3.7030E-01 -3.7030E-01 -3.1842E-01 -3.1842E-01 -3.1673E-01  2.8785E-02
  5.5089E-02  5.5089E-02  7.4925E-02  7.6400E-02  7.6400E-02  2.1734E-01
  2.1734E-01  2.1843E-01  3.4918E-01  3.4932E-01  3.4932E-01  4.8476E-01
  4.8476E-01  4.8622E-01  4.9439E-01  4.9439E-01  5.8919E-01  5.8926E-01
  prteigrs : nnsclo,ikpt=   30    8 max resid (incl. the buffer)=  2.65309E-05
 Non-SCF case, kpt    9 (  0.45556  0.45556  0.45556), residuals and eigenvalues=
  4.89E-13  9.92E-13  7.00E-13  4.64E-13  3.31E-13  5.77E-13  3.96E-13  4.02E-13
  4.23E-13  4.58E-13  3.83E-13  3.09E-13  3.39E-13  6.29E-13  2.76E-13  3.90E-13
  4.93E-13  2.98E-13  2.75E-13  2.06E-13  2.10E-13  5.66E-13  4.30E-13  3.59E-13
  7.33E-13  4.58E-13  8.65E-13  2.90E-13  1.86E-13  3.08E-05
 -2.1022E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6361E-01 -3.7312E-01
 -3.7045E-01 -3.7045E-01 -3.1819E-01 -3.1819E-01 -3.1604E-01  2.9281E-02
  5.5362E-02  5.5362E-02  7.4641E-02  7.6548E-02  7.6548E-02  2.1678E-01
  2.1678E-01  2.1820E-01  3.4883E-01  3.4901E-01  3.4901E-01  4.8491E-01
  4.8491E-01  4.8701E-01  4.9446E-01  4.9446E-01  5.8862E-01  5.8868E-01
  prteigrs : nnsclo,ikpt=   30    9 max resid (incl. the buffer)=  3.07666E-05
 Non-SCF case, kpt   10 (  0.45000  0.45000  0.45000), residuals and eigenvalues=
  5.08E-13  1.89E-13  7.33E-13  5.09E-13  3.18E-13  5.80E-13  3.99E-13  4.85E-13
  4.43E-13  5.58E-13  3.71E-13  3.94E-13  3.66E-13  6.92E-13  2.49E-13  3.64E-13
  4.47E-13  3.30E-13  3.26E-13  9.09E-13  1.61E-13  6.04E-13  4.07E-13  5.24E-13
  4.98E-13  5.79E-13  8.55E-13  4.28E-13  2.15E-13  3.04E-05
 -2.1022E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6363E-01 -3.7394E-01
 -3.7062E-01 -3.7062E-01 -3.1793E-01 -3.1793E-01 -3.1528E-01  2.9838E-02
  5.5670E-02  5.5670E-02  7.4332E-02  7.6716E-02  7.6716E-02  2.1616E-01
  2.1616E-01  2.1794E-01  3.4844E-01  3.4867E-01  3.4867E-01  4.8494E-01
  4.8494E-01  4.8788E-01  4.9466E-01  4.9466E-01  5.8798E-01  5.8803E-01
  prteigrs : nnsclo,ikpt=   30   10 max resid (incl. the buffer)=  3.04342E-05
 Non-SCF case, kpt   11 (  0.44444  0.44444  0.44444), residuals and eigenvalues=
  4.98E-13  9.35E-13  7.68E-13  5.42E-13  7.43E-13  4.97E-13  6.28E-13  2.93E-13
  6.30E-13  4.92E-13  6.19E-13  2.93E-13  9.51E-13  7.87E-13  4.34E-13  4.38E-13
  5.14E-13  7.73E-13  8.28E-13  6.25E-13  6.51E-13  7.57E-13  9.06E-13  8.86E-13
  5.89E-13  4.43E-13  2.34E-13  7.07E-13  7.84E-12  6.84E-06
 -2.1022E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6364E-01 -3.7481E-01
 -3.7081E-01 -3.7081E-01 -3.1765E-01 -3.1765E-01 -3.1446E-01  3.0453E-02
  5.6012E-02  5.6012E-02  7.4001E-02  7.6906E-02  7.6906E-02  2.1548E-01
  2.1548E-01  2.1764E-01  3.4800E-01  3.4828E-01  3.4828E-01  4.8482E-01
  4.8482E-01  4.8884E-01  4.9502E-01  4.9502E-01  5.8727E-01  5.8730E-01
  prteigrs : nnsclo,ikpt=   30   11 max resid (incl. the buffer)=  6.83648E-06
 Non-SCF case, kpt   12 (  0.43889  0.43889  0.43889), residuals and eigenvalues=
  2.76E-13  1.93E-13  5.19E-13  4.25E-13  3.99E-13  9.38E-13  8.48E-13  5.50E-13
  5.67E-13  4.64E-13  8.14E-13  8.54E-13  9.42E-13  7.34E-13  5.68E-13  9.27E-13
  7.48E-13  3.50E-13  5.48E-13  5.05E-13  6.38E-13  9.43E-13  6.35E-13  2.71E-13
  4.83E-13  9.80E-13  4.89E-13  8.47E-13  9.85E-13  3.63E-07
 -2.1022E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6366E-01 -3.7574E-01
 -3.7101E-01 -3.7101E-01 -3.1735E-01 -3.1735E-01 -3.1360E-01  3.1125E-02
  5.6390E-02  5.6390E-02  7.3655E-02  7.7117E-02  7.7117E-02  2.1474E-01
  2.1474E-01  2.1732E-01  3.4752E-01  3.4785E-01  3.4785E-01  4.8452E-01
  4.8452E-01  4.8987E-01  4.9557E-01  4.9557E-01  5.8649E-01  5.8649E-01
  prteigrs : nnsclo,ikpt=   30   12 max resid (incl. the buffer)=  3.63140E-07
 Non-SCF case, kpt   13 (  0.43333  0.43333  0.43333), residuals and eigenvalues=
  2.77E-13  2.52E-13  8.90E-13  6.70E-13  4.60E-13  7.40E-13  3.87E-13  4.26E-13
  5.01E-13  3.83E-13  4.76E-13  2.94E-13  3.06E-13  8.59E-14  4.86E-13  2.39E-13
  3.11E-13  5.94E-13  7.19E-13  4.40E-13  5.46E-13  2.87E-13  1.37E-13  7.28E-13
  3.44E-13  9.73E-13  1.49E-13  6.17E-13  3.57E-13  5.33E-07
 -2.1022E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6368E-01 -3.7673E-01
 -3.7123E-01 -3.7123E-01 -3.1702E-01 -3.1702E-01 -3.1270E-01  3.1850E-02
  5.6801E-02  5.6801E-02  7.3299E-02  7.7350E-02  7.7350E-02  2.1395E-01
  2.1395E-01  2.1697E-01  3.4700E-01  3.4739E-01  3.4739E-01  4.8405E-01
  4.8405E-01  4.9096E-01  4.9629E-01  4.9629E-01  5.8565E-01  5.8565E-01
  prteigrs : nnsclo,ikpt=   30   13 max resid (incl. the buffer)=  5.32998E-07
 Non-SCF case, kpt   14 (  0.42778  0.42778  0.42778), residuals and eigenvalues=
  4.35E-13  3.10E-13  3.43E-13  3.11E-13  2.12E-13  1.46E-13  3.66E-13  2.40E-13
  1.89E-13  6.63E-13  3.77E-13  2.86E-13  4.38E-13  9.12E-13  4.78E-13  6.20E-13
  8.71E-13  3.87E-13  9.31E-13  5.65E-13  3.32E-13  3.73E-13  4.56E-13  8.07E-13
  7.36E-13  4.18E-13  1.95E-13  4.73E-13  7.59E-13  1.90E-05
 -2.1022E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6370E-01 -3.7775E-01
 -3.7145E-01 -3.7145E-01 -3.1667E-01 -3.1667E-01 -3.1176E-01  3.2625E-02
  5.7245E-02  5.7245E-02  7.2939E-02  7.7606E-02  7.7606E-02  2.1310E-01
  2.1310E-01  2.1659E-01  3.4644E-01  3.4689E-01  3.4689E-01  4.8342E-01
  4.8342E-01  4.9212E-01  4.9717E-01  4.9717E-01  5.8474E-01  5.8477E-01
  prteigrs : nnsclo,ikpt=   30   14 max resid (incl. the buffer)=  1.90081E-05
 Non-SCF case, kpt   15 (  0.42222  0.42222  0.42222), residuals and eigenvalues=
  4.50E-13  3.35E-13  3.22E-13  3.54E-13  2.14E-13  1.59E-13  3.65E-13  3.50E-13
  1.86E-13  6.81E-13  3.34E-13  2.97E-13  5.88E-13  4.55E-13  5.20E-13  5.89E-13
  6.88E-13  5.72E-13  8.80E-13  9.77E-13  2.97E-13  3.88E-13  4.35E-13  8.45E-13
  6.91E-13  9.65E-13  1.08E-13  5.04E-13  9.14E-13  1.45E-05
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6372E-01 -3.7882E-01
 -3.7169E-01 -3.7169E-01 -3.1631E-01 -3.1631E-01 -3.1079E-01  3.3446E-02
  5.7723E-02  5.7723E-02  7.2584E-02  7.7885E-02  7.7885E-02  2.1221E-01
  2.1221E-01  2.1619E-01  3.4584E-01  3.4635E-01  3.4635E-01  4.8264E-01
  4.8264E-01  4.9332E-01  4.9819E-01  4.9819E-01  5.8378E-01  5.8380E-01
  prteigrs : nnsclo,ikpt=   30   15 max resid (incl. the buffer)=  1.45386E-05
 Non-SCF case, kpt   16 (  0.41667  0.41667  0.41667), residuals and eigenvalues=
  4.77E-13  3.03E-13  2.85E-13  4.23E-13  9.99E-13  1.42E-13  3.56E-13  3.86E-13
  2.09E-13  6.36E-13  3.22E-13  2.78E-13  6.77E-13  3.82E-13  5.42E-13  6.10E-13
  7.67E-13  5.82E-13  7.85E-13  9.49E-13  2.85E-13  4.26E-13  5.36E-13  6.84E-13
  5.18E-13  3.83E-13  1.71E-13  6.80E-13  1.65E-12  9.50E-06
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6374E-01 -3.7991E-01
 -3.7194E-01 -3.7194E-01 -3.1593E-01 -3.1593E-01 -3.0981E-01  3.4309E-02
  5.8232E-02  5.8232E-02  7.2240E-02  7.8188E-02  7.8188E-02  2.1127E-01
  2.1127E-01  2.1576E-01  3.4519E-01  3.4577E-01  3.4577E-01  4.8172E-01
  4.8172E-01  4.9456E-01  4.9932E-01  4.9932E-01  5.8275E-01  5.8277E-01
  prteigrs : nnsclo,ikpt=   30   16 max resid (incl. the buffer)=  9.49612E-06
 Non-SCF case, kpt   17 (  0.41111  0.41111  0.41111), residuals and eigenvalues=
  5.02E-13  3.31E-13  2.60E-13  4.75E-13  9.55E-13  1.51E-13  3.18E-13  5.10E-13
  2.18E-13  6.76E-13  3.69E-13  2.79E-13  7.00E-13  2.94E-13  5.68E-13  6.99E-13
  7.59E-13  7.41E-13  6.56E-13  5.70E-13  2.57E-13  4.92E-13  5.46E-13  5.62E-13
  9.32E-13  8.53E-13  8.89E-13  6.59E-13  2.56E-12  6.72E-06
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6376E-01 -3.8103E-01
 -3.7220E-01 -3.7220E-01 -3.1553E-01 -3.1553E-01 -3.0881E-01  3.5208E-02
  5.8774E-02  5.8774E-02  7.1917E-02  7.8515E-02  7.8515E-02  2.1030E-01
  2.1030E-01  2.1530E-01  3.4451E-01  3.4515E-01  3.4515E-01  4.8069E-01
  4.8069E-01  4.9583E-01  5.0055E-01  5.0055E-01  5.8168E-01  5.8169E-01
  prteigrs : nnsclo,ikpt=   30   17 max resid (incl. the buffer)=  6.71715E-06
 Non-SCF case, kpt   18 (  0.40556  0.40556  0.40556), residuals and eigenvalues=
  2.06E-13  1.93E-13  6.21E-13  1.88E-13  3.90E-13  7.10E-13  6.23E-13  5.87E-13
  3.67E-13  6.76E-13  1.32E-13  9.93E-13  4.09E-13  3.44E-13  6.43E-13  3.01E-13
  2.81E-13  4.81E-13  6.84E-13  6.52E-13  8.18E-13  1.91E-13  2.77E-13  4.62E-13
  5.05E-13  3.66E-13  5.22E-13  9.66E-13  2.17E-12  2.43E-06
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6379E-01 -3.8217E-01
 -3.7246E-01 -3.7246E-01 -3.1512E-01 -3.1512E-01 -3.0780E-01  3.6138E-02
  5.9347E-02  5.9347E-02  7.1622E-02  7.8867E-02  7.8867E-02  2.0930E-01
  2.0930E-01  2.1482E-01  3.4379E-01  3.4450E-01  3.4450E-01  4.7956E-01
  4.7956E-01  4.9712E-01  5.0184E-01  5.0184E-01  5.8056E-01  5.8056E-01
  prteigrs : nnsclo,ikpt=   30   18 max resid (incl. the buffer)=  2.43260E-06
 Non-SCF case, kpt   19 (  0.40000  0.40000  0.40000), residuals and eigenvalues=
  9.70E-13  2.34E-13  7.64E-13  2.86E-13  4.39E-13  6.38E-13  6.01E-13  5.21E-13
  5.03E-13  8.08E-13  3.98E-13  2.47E-13  4.95E-13  4.37E-13  7.86E-13  2.46E-13
  2.03E-13  7.46E-13  8.79E-13  4.03E-13  6.68E-13  5.89E-13  9.51E-13  4.19E-13
  4.41E-13  8.24E-13  6.74E-13  5.86E-13  1.15E-11  1.98E-06
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1542E+00 -9.6382E-01 -3.8333E-01
 -3.7273E-01 -3.7273E-01 -3.1470E-01 -3.1470E-01 -3.0678E-01  3.7092E-02
  5.9949E-02  5.9949E-02  7.1367E-02  7.9246E-02  7.9246E-02  2.0826E-01
  2.0826E-01  2.1431E-01  3.4303E-01  3.4381E-01  3.4381E-01  4.7833E-01
  4.7833E-01  4.9842E-01  5.0318E-01  5.0318E-01  5.7939E-01  5.7939E-01
  prteigrs : nnsclo,ikpt=   30   19 max resid (incl. the buffer)=  1.98228E-06
 Non-SCF case, kpt   20 (  0.39444  0.39444  0.39444), residuals and eigenvalues=
  6.68E-13  3.93E-13  3.85E-13  5.60E-13  4.07E-13  6.95E-13  5.74E-13  6.47E-13
  2.81E-13  4.09E-13  6.37E-13  6.27E-13  4.98E-13  4.25E-13  1.96E-13  6.44E-13
  7.43E-13  5.24E-13  7.22E-13  9.36E-13  2.63E-13  3.41E-13  2.89E-13  2.94E-13
  9.45E-13  2.83E-13  4.81E-13  6.58E-13  5.38E-11  1.16E-06
 -2.1023E+00 -1.1542E+00 -1.1541E+00 -1.1541E+00 -9.6384E-01 -3.8450E-01
 -3.7300E-01 -3.7300E-01 -3.1426E-01 -3.1426E-01 -3.0577E-01  3.8062E-02
  6.0580E-02  6.0580E-02  7.1162E-02  7.9650E-02  7.9650E-02  2.0720E-01
  2.0720E-01  2.1378E-01  3.4223E-01  3.4309E-01  3.4309E-01  4.7702E-01
  4.7702E-01  4.9972E-01  5.0455E-01  5.0455E-01  5.7819E-01  5.7819E-01
  prteigrs : nnsclo,ikpt=   30   20 max resid (incl. the buffer)=  1.15731E-06
 Non-SCF case, kpt   21 (  0.38889  0.38889  0.38889), residuals and eigenvalues=
  6.98E-13  3.97E-13  3.94E-13  5.59E-13  4.03E-13  6.54E-13  6.26E-13  6.68E-13
  2.37E-13  4.05E-13  6.09E-13  5.01E-13  6.94E-13  5.30E-13  8.72E-13  5.51E-13
  7.37E-13  4.42E-13  4.63E-13  8.93E-13  7.62E-13  3.37E-13  6.96E-13  7.34E-13
  6.57E-13  3.32E-13  3.98E-13  5.36E-13  7.47E-11  8.55E-07
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1541E+00 -9.6387E-01 -3.8569E-01
 -3.7328E-01 -3.7328E-01 -3.1382E-01 -3.1382E-01 -3.0476E-01  3.9041E-02
  6.1240E-02  6.1240E-02  7.1019E-02  8.0083E-02  8.0083E-02  2.0611E-01
  2.0611E-01  2.1323E-01  3.4140E-01  3.4233E-01  3.4233E-01  4.7563E-01
  4.7563E-01  5.0102E-01  5.0595E-01  5.0595E-01  5.7696E-01  5.7696E-01
  prteigrs : nnsclo,ikpt=   30   21 max resid (incl. the buffer)=  8.54716E-07
 Non-SCF case, kpt   22 (  0.38333  0.38333  0.38333), residuals and eigenvalues=
  7.13E-13  4.01E-13  4.05E-13  6.53E-13  4.04E-13  5.91E-13  6.53E-13  6.90E-13
  8.60E-13  4.09E-13  5.55E-13  4.68E-13  8.99E-13  6.55E-13  7.56E-13  5.11E-13
  7.81E-13  3.46E-13  3.18E-13  6.75E-13  5.65E-13  3.57E-13  4.41E-13  3.31E-13
  5.94E-13  4.36E-13  9.18E-13  6.96E-13  9.99E-11  6.41E-07
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1541E+00 -9.6390E-01 -3.8687E-01
 -3.7356E-01 -3.7356E-01 -3.1338E-01 -3.1338E-01 -3.0376E-01  4.0019E-02
  6.1927E-02  6.1927E-02  7.0951E-02  8.0544E-02  8.0544E-02  2.0501E-01
  2.0501E-01  2.1266E-01  3.4054E-01  3.4154E-01  3.4154E-01  4.7416E-01
  4.7416E-01  5.0229E-01  5.0734E-01  5.0734E-01  5.7570E-01  5.7571E-01
  prteigrs : nnsclo,ikpt=   30   22 max resid (incl. the buffer)=  6.40512E-07
 Non-SCF case, kpt   23 (  0.37778  0.37778  0.37778), residuals and eigenvalues=
  6.96E-13  4.05E-13  4.16E-13  7.74E-13  4.06E-13  5.46E-13  6.78E-13  7.30E-13
  6.88E-13  3.60E-13  5.29E-13  5.06E-13  1.24E-13  8.13E-13  6.96E-13  4.93E-13
  8.46E-13  2.75E-13  2.96E-13  5.21E-13  4.33E-13  2.85E-13  3.66E-13  6.77E-13
  6.93E-13  6.46E-13  4.29E-13  5.77E-13  1.27E-10  4.91E-07
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1541E+00 -9.6394E-01 -3.8806E-01
 -3.7384E-01 -3.7384E-01 -3.1292E-01 -3.1292E-01 -3.0277E-01  4.0987E-02
  6.2639E-02  6.2639E-02  7.0970E-02  8.1034E-02  8.1034E-02  2.0390E-01
  2.0390E-01  2.1206E-01  3.3964E-01  3.4072E-01  3.4072E-01  4.7262E-01
  4.7262E-01  5.0354E-01  5.0872E-01  5.0872E-01  5.7444E-01  5.7444E-01
  prteigrs : nnsclo,ikpt=   30   23 max resid (incl. the buffer)=  4.90693E-07
 Non-SCF case, kpt   24 (  0.37222  0.37222  0.37222), residuals and eigenvalues=
  8.41E-13  5.04E-13  3.92E-13  3.29E-13  8.44E-13  2.90E-13  3.30E-13  3.64E-13
  3.18E-13  2.41E-13  2.22E-13  5.65E-13  1.94E-13  2.87E-13  4.15E-13  7.43E-13
  5.69E-13  6.14E-13  5.23E-13  5.74E-13  4.82E-13  4.00E-13  5.16E-13  7.31E-13
  4.80E-13  3.17E-13  8.29E-13  2.48E-13  1.21E-11  2.56E-08
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1541E+00 -9.6397E-01 -3.8925E-01
 -3.7412E-01 -3.7412E-01 -3.1247E-01 -3.1247E-01 -3.0180E-01  4.1934E-02
  6.3378E-02  6.3378E-02  7.1089E-02  8.1556E-02  8.1556E-02  2.0278E-01
  2.0278E-01  2.1145E-01  3.3870E-01  3.3986E-01  3.3986E-01  4.7102E-01
  4.7102E-01  5.0476E-01  5.1006E-01  5.1006E-01  5.7317E-01  5.7317E-01
  prteigrs : nnsclo,ikpt=   30   24 max resid (incl. the buffer)=  2.55864E-08
 Non-SCF case, kpt   25 (  0.36667  0.36667  0.36667), residuals and eigenvalues=
  9.11E-13  4.70E-13  4.18E-13  3.13E-13  8.54E-13  2.27E-13  3.85E-13  4.13E-13
  2.95E-13  2.34E-13  8.34E-13  5.57E-13  2.12E-13  3.44E-13  3.46E-13  8.40E-13
  5.77E-13  8.18E-13  4.13E-13  5.58E-13  5.18E-13  3.45E-13  5.02E-13  3.65E-13
  6.09E-13  5.51E-13  4.46E-13  2.57E-13  7.67E-12  9.87E-09
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1541E+00 -9.6400E-01 -3.9044E-01
 -3.7440E-01 -3.7440E-01 -3.1201E-01 -3.1201E-01 -3.0086E-01  4.2852E-02
  6.4139E-02  6.4139E-02  7.1322E-02  8.2108E-02  8.2108E-02  2.0165E-01
  2.0165E-01  2.1081E-01  3.3774E-01  3.3897E-01  3.3897E-01  4.6935E-01
  4.6935E-01  5.0594E-01  5.1135E-01  5.1135E-01  5.7190E-01  5.7190E-01
  prteigrs : nnsclo,ikpt=   30   25 max resid (incl. the buffer)=  9.86622E-09
 Non-SCF case, kpt   26 (  0.36111  0.36111  0.36111), residuals and eigenvalues=
  5.72E-13  1.89E-13  6.33E-13  9.83E-13  1.82E-13  3.63E-13  3.76E-13  9.77E-13
  8.35E-13  6.15E-13  2.42E-13  5.99E-13  8.03E-13  2.82E-13  9.04E-13  8.59E-13
  6.78E-13  4.50E-13  2.66E-13  6.69E-13  8.90E-13  7.91E-13  8.76E-13  7.64E-13
  3.06E-13  7.57E-13  3.13E-13  6.37E-13  1.77E-11  2.23E-08
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1541E+00 -9.6404E-01 -3.9162E-01
 -3.7468E-01 -3.7468E-01 -3.1156E-01 -3.1156E-01 -2.9993E-01  4.3730E-02
  6.4923E-02  6.4923E-02  7.1680E-02  8.2692E-02  8.2692E-02  2.0053E-01
  2.0053E-01  2.1016E-01  3.3674E-01  3.3806E-01  3.3806E-01  4.6763E-01
  4.6763E-01  5.0706E-01  5.1257E-01  5.1257E-01  5.7065E-01  5.7065E-01
  prteigrs : nnsclo,ikpt=   30   26 max resid (incl. the buffer)=  2.22772E-08
 Non-SCF case, kpt   27 (  0.35556  0.35556  0.35556), residuals and eigenvalues=
  5.89E-13  1.57E-13  7.32E-13  9.87E-13  1.90E-13  3.23E-13  3.87E-13  9.47E-13
  7.79E-13  5.89E-13  2.23E-13  5.46E-13  7.62E-13  2.48E-13  6.94E-13  8.89E-13
  4.09E-13  6.24E-13  2.31E-13  5.41E-13  7.88E-13  2.77E-13  6.54E-13  6.48E-13
  9.48E-13  4.17E-13  3.83E-13  6.55E-13  1.37E-11  1.54E-08
 -2.1023E+00 -1.1541E+00 -1.1540E+00 -1.1540E+00 -9.6408E-01 -3.9279E-01
 -3.7495E-01 -3.7495E-01 -3.1110E-01 -3.1110E-01 -2.9903E-01  4.4561E-02
  6.5727E-02  6.5727E-02  7.2175E-02  8.3309E-02  8.3309E-02  1.9940E-01
  1.9940E-01  2.0949E-01  3.3571E-01  3.3711E-01  3.3711E-01  4.6584E-01
  4.6584E-01  5.0813E-01  5.1370E-01  5.1370E-01  5.6944E-01  5.6944E-01
  prteigrs : nnsclo,ikpt=   30   27 max resid (incl. the buffer)=  1.53622E-08
 Non-SCF case, kpt   28 (  0.35000  0.35000  0.35000), residuals and eigenvalues=
  2.62E-13  2.30E-13  6.45E-13  5.62E-13  6.35E-13  4.32E-13  3.96E-13  2.59E-13
  1.90E-13  7.39E-13  6.05E-13  9.30E-13  5.16E-13  3.35E-13  3.75E-13  6.51E-13
  8.10E-13  8.13E-13  4.50E-13  4.69E-13  3.64E-13  2.87E-13  4.13E-13  6.41E-13
  5.53E-13  6.69E-13  5.73E-13  5.49E-13  2.68E-12  4.94E-08
 -2.1023E+00 -1.1540E+00 -1.1540E+00 -1.1540E+00 -9.6411E-01 -3.9395E-01
 -3.7523E-01 -3.7523E-01 -3.1065E-01 -3.1065E-01 -2.9816E-01  4.5339E-02
  6.6551E-02  6.6551E-02  7.2814E-02  8.3961E-02  8.3961E-02  1.9828E-01
  1.9828E-01  2.0881E-01  3.3466E-01  3.3613E-01  3.3613E-01  4.6401E-01
  4.6401E-01  5.0914E-01  5.1472E-01  5.1472E-01  5.6826E-01  5.6826E-01
  prteigrs : nnsclo,ikpt=   30   28 max resid (incl. the buffer)=  4.94011E-08
 Non-SCF case, kpt   29 (  0.34444  0.34444  0.34444), residuals and eigenvalues=
  2.70E-13  2.88E-13  5.49E-13  6.31E-13  7.29E-13  4.30E-13  4.37E-13  8.45E-13
  1.94E-13  5.53E-13  5.79E-13  8.31E-13  4.92E-13  3.08E-13  4.43E-13  5.90E-13
  6.71E-13  2.44E-13  3.36E-13  5.05E-13  3.16E-13  9.38E-13  3.75E-13  5.67E-13
  3.06E-13  9.97E-13  4.39E-13  4.87E-13  2.27E-12  4.06E-08
 -2.1023E+00 -1.1540E+00 -1.1540E+00 -1.1540E+00 -9.6415E-01 -3.9511E-01
 -3.7549E-01 -3.7549E-01 -3.1021E-01 -3.1021E-01 -2.9733E-01  4.6061E-02
  6.7393E-02  6.7393E-02  7.3603E-02  8.4648E-02  8.4648E-02  1.9718E-01
  1.9718E-01  2.0811E-01  3.3357E-01  3.3513E-01  3.3513E-01  4.6212E-01
  4.6212E-01  5.1008E-01  5.1561E-01  5.1561E-01  5.6715E-01  5.6715E-01
  prteigrs : nnsclo,ikpt=   30   29 max resid (incl. the buffer)=  4.06185E-08
 Non-SCF case, kpt   30 (  0.33889  0.33889  0.33889), residuals and eigenvalues=
  2.75E-13  3.60E-13  4.58E-13  6.98E-13  8.50E-13  4.34E-13  4.68E-13  7.12E-13
  1.96E-13  3.95E-13  5.44E-13  6.72E-13  4.86E-13  3.37E-13  5.25E-13  5.85E-13
  5.87E-13  2.45E-13  3.35E-13  6.71E-13  2.75E-13  6.75E-13  4.07E-13  2.88E-13
  3.93E-13  8.82E-13  4.61E-13  5.39E-13  7.70E-13  3.12E-09
 -2.1023E+00 -1.1540E+00 -1.1540E+00 -1.1540E+00 -9.6419E-01 -3.9624E-01
 -3.7575E-01 -3.7575E-01 -3.0977E-01 -3.0977E-01 -2.9652E-01  4.6728E-02
  6.8252E-02  6.8252E-02  7.4545E-02  8.5372E-02  8.5372E-02  1.9609E-01
  1.9609E-01  2.0739E-01  3.3245E-01  3.3410E-01  3.3410E-01  4.6018E-01
  4.6018E-01  5.1095E-01  5.1635E-01  5.1635E-01  5.6611E-01  5.6611E-01
  prteigrs : nnsclo,ikpt=   30   30 max resid (incl. the buffer)=  3.12388E-09
 Non-SCF case, kpt   31 (  0.33333  0.33333  0.33333), residuals and eigenvalues=
  2.82E-13  4.22E-13  4.22E-13  7.75E-13  2.40E-13  4.37E-13  5.86E-13  5.89E-13
  2.02E-13  3.28E-13  4.96E-13  4.04E-13  4.88E-13  3.51E-13  6.15E-13  6.88E-13
  6.62E-13  2.50E-13  3.84E-13  7.09E-13  2.23E-13  4.56E-13  4.17E-13  3.73E-13
  4.75E-13  7.10E-13  4.43E-13  5.58E-13  2.40E-12  3.22E-09
 -2.1023E+00 -1.1540E+00 -1.1540E+00 -1.1540E+00 -9.6423E-01 -3.9737E-01
 -3.7601E-01 -3.7601E-01 -3.0933E-01 -3.0933E-01 -2.9576E-01  4.7342E-02
  6.9125E-02  6.9125E-02  7.5638E-02  8.6133E-02  8.6133E-02  1.9501E-01
  1.9501E-01  2.0667E-01  3.3131E-01  3.3304E-01  3.3304E-01  4.5819E-01
  4.5819E-01  5.1174E-01  5.1692E-01  5.1692E-01  5.6516E-01  5.6516E-01
  prteigrs : nnsclo,ikpt=   30   31 max resid (incl. the buffer)=  3.21528E-09
 Non-SCF case, kpt   32 (  0.32778  0.32778  0.32778), residuals and eigenvalues=
  2.50E-13  2.40E-13  6.18E-13  4.97E-13  6.50E-13  3.34E-13  7.38E-13  7.82E-13
  4.88E-13  4.40E-13  6.16E-13  7.53E-13  2.88E-13  7.59E-13  4.74E-13  7.51E-13
  4.82E-13  4.56E-13  7.16E-13  8.24E-13  3.93E-13  7.69E-13  6.62E-13  6.49E-13
  7.52E-13  8.85E-13  4.62E-13  4.42E-13  1.93E-11  4.07E-09
 -2.1023E+00 -1.1540E+00 -1.1540E+00 -1.1540E+00 -9.6428E-01 -3.9848E-01
 -3.7625E-01 -3.7625E-01 -3.0891E-01 -3.0891E-01 -2.9503E-01  4.7910E-02
  7.0013E-02  7.0013E-02  7.6879E-02  8.6932E-02  8.6932E-02  1.9396E-01
  1.9396E-01  2.0593E-01  3.3014E-01  3.3195E-01  3.3195E-01  4.5616E-01
  4.5616E-01  5.1246E-01  5.1730E-01  5.1730E-01  5.6430E-01  5.6430E-01
  prteigrs : nnsclo,ikpt=   30   32 max resid (incl. the buffer)=  4.07328E-09
 Non-SCF case, kpt   33 (  0.32222  0.32222  0.32222), residuals and eigenvalues=
  9.10E-13  2.42E-13  3.26E-13  6.09E-13  5.21E-13  2.04E-13  5.89E-13  9.82E-13
  5.40E-13  3.03E-13  3.50E-13  6.97E-13  8.92E-13  5.60E-13  4.15E-13  3.77E-13
  2.50E-13  3.46E-13  2.61E-13  3.55E-13  2.69E-13  1.74E-13  2.28E-13  7.65E-13
  9.62E-13  9.15E-13  1.54E-13  5.03E-13  1.15E-11  2.30E-09
 -2.1023E+00 -1.1540E+00 -1.1539E+00 -1.1539E+00 -9.6432E-01 -3.9956E-01
 -3.7649E-01 -3.7649E-01 -3.0850E-01 -3.0850E-01 -2.9435E-01  4.8440E-02
  7.0912E-02  7.0912E-02  7.8260E-02  8.7770E-02  8.7770E-02  1.9293E-01
  1.9293E-01  2.0518E-01  3.2894E-01  3.3085E-01  3.3085E-01  4.5408E-01
  4.5408E-01  5.1310E-01  5.1748E-01  5.1748E-01  5.6356E-01  5.6356E-01
  prteigrs : nnsclo,ikpt=   30   33 max resid (incl. the buffer)=  2.30448E-09
 Non-SCF case, kpt   34 (  0.31667  0.31667  0.31667), residuals and eigenvalues=
  9.23E-13  2.68E-13  4.34E-13  6.03E-13  4.45E-13  2.37E-13  4.42E-13  2.90E-13
  4.21E-13  3.55E-13  3.13E-13  6.04E-13  6.72E-13  5.15E-13  7.56E-13  4.33E-13
  3.19E-13  7.30E-13  5.09E-13  3.79E-13  9.50E-13  1.42E-13  2.11E-13  6.91E-13
  8.36E-13  3.11E-13  9.13E-13  4.16E-13  8.77E-12  2.32E-09
 -2.1023E+00 -1.1539E+00 -1.1539E+00 -1.1539E+00 -9.6436E-01 -4.0063E-01
 -3.7673E-01 -3.7673E-01 -3.0809E-01 -3.0809E-01 -2.9371E-01  4.8941E-02
  7.1821E-02  7.1821E-02  7.9773E-02  8.8649E-02  8.8649E-02  1.9193E-01
  1.9193E-01  2.0442E-01  3.2772E-01  3.2971E-01  3.2971E-01  4.5197E-01
  4.5197E-01  5.1366E-01  5.1744E-01  5.1744E-01  5.6293E-01  5.6293E-01
  prteigrs : nnsclo,ikpt=   30   34 max resid (incl. the buffer)=  2.31508E-09
 Non-SCF case, kpt   35 (  0.31111  0.31111  0.31111), residuals and eigenvalues=
  9.66E-13  2.96E-13  5.69E-13  5.88E-13  3.83E-13  2.60E-13  3.49E-13  2.88E-13
  3.26E-13  3.36E-13  2.88E-13  5.76E-13  4.67E-13  4.82E-13  1.64E-13  3.76E-13
  3.28E-13  6.35E-13  6.00E-13  4.92E-13  7.02E-13  1.71E-13  2.19E-13  5.59E-13
  9.83E-13  4.27E-13  7.12E-13  9.88E-13  6.42E-12  2.52E-09
 -2.1023E+00 -1.1539E+00 -1.1539E+00 -1.1539E+00 -9.6441E-01 -4.0168E-01
 -3.7695E-01 -3.7695E-01 -3.0770E-01 -3.0770E-01 -2.9311E-01  4.9423E-02
  7.2739E-02  7.2739E-02  8.1409E-02  8.9569E-02  8.9569E-02  1.9096E-01
  1.9096E-01  2.0365E-01  3.2647E-01  3.2856E-01  3.2856E-01  4.4981E-01
  4.4981E-01  5.1414E-01  5.1717E-01  5.1717E-01  5.6242E-01  5.6242E-01
  prteigrs : nnsclo,ikpt=   30   35 max resid (incl. the buffer)=  2.51695E-09
 Non-SCF case, kpt   36 (  0.30556  0.30556  0.30556), residuals and eigenvalues=
  2.60E-13  3.27E-13  7.40E-13  5.49E-13  3.44E-13  2.66E-13  4.15E-13  9.43E-13
  3.89E-13  2.54E-13  2.69E-13  5.49E-13  5.83E-13  6.52E-13  2.38E-13  3.01E-13
  4.08E-13  4.20E-13  7.90E-13  7.03E-13  7.48E-13  2.06E-13  2.31E-13  4.79E-13
  4.61E-13  5.74E-13  1.29E-13  2.99E-13  4.20E-12  2.81E-09
 -2.1023E+00 -1.1539E+00 -1.1539E+00 -1.1539E+00 -9.6445E-01 -4.0271E-01
 -3.7716E-01 -3.7716E-01 -3.0732E-01 -3.0732E-01 -2.9256E-01  4.9897E-02
  7.3664E-02  7.3664E-02  8.3158E-02  9.0530E-02  9.0530E-02  1.9003E-01
  1.9003E-01  2.0288E-01  3.2520E-01  3.2738E-01  3.2738E-01  4.4762E-01
  4.4762E-01  5.1454E-01  5.1668E-01  5.1668E-01  5.6202E-01  5.6202E-01
  prteigrs : nnsclo,ikpt=   30   36 max resid (incl. the buffer)=  2.80597E-09
 Non-SCF case, kpt   37 (  0.30000  0.30000  0.30000), residuals and eigenvalues=
  6.63E-13  5.23E-13  2.62E-13  3.35E-13  4.93E-13  2.49E-13  3.57E-13  5.14E-13
  9.79E-13  7.58E-13  4.59E-13  3.49E-13  6.01E-13  8.22E-13  8.41E-13  3.75E-13
  5.91E-13  4.05E-13  5.61E-13  8.48E-13  7.06E-13  5.79E-13  7.98E-13  8.60E-13
  6.54E-13  2.68E-13  6.46E-13  2.18E-13  2.56E-13  3.26E-09
 -2.1023E+00 -1.1539E+00 -1.1539E+00 -1.1539E+00 -9.6450E-01 -4.0372E-01
 -3.7737E-01 -3.7737E-01 -3.0696E-01 -3.0696E-01 -2.9206E-01  5.0372E-02
  7.4594E-02  7.4594E-02  8.5013E-02  9.1533E-02  9.1533E-02  1.8913E-01
  1.8913E-01  2.0210E-01  3.2391E-01  3.2619E-01  3.2619E-01  4.4540E-01
  4.4540E-01  5.1486E-01  5.1598E-01  5.1598E-01  5.6173E-01  5.6173E-01
  prteigrs : nnsclo,ikpt=   30   37 max resid (incl. the buffer)=  3.25815E-09
 Non-SCF case, kpt   38 (  0.29444  0.29444  0.29444), residuals and eigenvalues=
  3.97E-13  8.38E-13  7.18E-13  7.31E-13  6.90E-13  1.69E-13  9.14E-13  5.63E-13
  2.61E-13  3.03E-13  8.38E-13  4.53E-13  4.11E-13  3.97E-13  5.55E-13  4.71E-13
  4.52E-13  6.58E-13  7.31E-13  9.24E-13  2.83E-13  6.55E-13  6.96E-13  3.48E-13
  3.60E-13  1.51E-13  2.69E-13  4.29E-13  4.70E-13  1.17E-08
 -2.1023E+00 -1.1539E+00 -1.1538E+00 -1.1538E+00 -9.6454E-01 -4.0470E-01
 -3.7756E-01 -3.7756E-01 -3.0661E-01 -3.0661E-01 -2.9160E-01  5.0857E-02
  7.5526E-02  7.5526E-02  8.6962E-02  9.2579E-02  9.2579E-02  1.8827E-01
  1.8827E-01  2.0131E-01  3.2260E-01  3.2497E-01  3.2497E-01  4.4314E-01
  4.4314E-01  5.1506E-01  5.1506E-01  5.1510E-01  5.6153E-01  5.6153E-01
  prteigrs : nnsclo,ikpt=   30   38 max resid (incl. the buffer)=  1.17229E-08
 Non-SCF case, kpt   39 (  0.28889  0.28889  0.28889), residuals and eigenvalues=
  5.60E-13  3.65E-13  8.33E-13  1.75E-13  6.28E-13  8.44E-13  5.51E-13  5.69E-13
  4.48E-13  4.53E-13  4.32E-13  2.64E-13  7.46E-13  5.18E-13  4.25E-13  2.66E-13
  1.39E-13  5.99E-13  5.16E-13  4.50E-13  8.23E-13  3.99E-13  3.03E-13  9.62E-13
  2.18E-13  5.48E-14  3.36E-13  8.05E-13  2.06E-11  3.36E-08
 -2.1023E+00 -1.1538E+00 -1.1538E+00 -1.1538E+00 -9.6459E-01 -4.0566E-01
 -3.7775E-01 -3.7775E-01 -3.0628E-01 -3.0628E-01 -2.9120E-01  5.1361E-02
  7.6461E-02  7.6461E-02  8.8998E-02  9.3667E-02  9.3667E-02  1.8745E-01
  1.8745E-01  2.0052E-01  3.2126E-01  3.2373E-01  3.2373E-01  4.4085E-01
  4.4085E-01  5.1394E-01  5.1394E-01  5.1526E-01  5.6140E-01  5.6140E-01
  prteigrs : nnsclo,ikpt=   30   39 max resid (incl. the buffer)=  3.35789E-08
 Non-SCF case, kpt   40 (  0.28333  0.28333  0.28333), residuals and eigenvalues=
  7.99E-13  5.08E-13  2.62E-13  5.97E-13  4.27E-13  3.43E-13  5.53E-13  5.00E-13
  2.37E-13  3.20E-13  2.29E-13  3.90E-13  2.64E-13  3.29E-13  3.63E-13  6.45E-13
  1.49E-13  5.85E-13  7.24E-13  5.85E-13  5.84E-13  1.71E-13  2.74E-13  5.26E-13
  2.74E-13  7.12E-14  6.51E-13  2.16E-13  1.23E-11  5.07E-08
 -2.1023E+00 -1.1538E+00 -1.1538E+00 -1.1538E+00 -9.6464E-01 -4.0659E-01
 -3.7792E-01 -3.7792E-01 -3.0596E-01 -3.0596E-01 -2.9084E-01  5.1891E-02
  7.7396E-02  7.7396E-02  9.1114E-02  9.4799E-02  9.4799E-02  1.8668E-01
  1.8668E-01  1.9972E-01  3.1990E-01  3.2247E-01  3.2247E-01  4.3853E-01
  4.3853E-01  5.1264E-01  5.1264E-01  5.1535E-01  5.6133E-01  5.6133E-01
  prteigrs : nnsclo,ikpt=   30   40 max resid (incl. the buffer)=  5.07277E-08
 Non-SCF case, kpt   41 (  0.27778  0.27778  0.27778), residuals and eigenvalues=
  8.92E-13  4.41E-13  2.89E-13  6.54E-13  7.75E-13  4.42E-13  6.52E-13  6.32E-13
  4.93E-13  4.55E-13  2.96E-13  4.78E-13  4.91E-13  2.82E-13  4.17E-13  6.76E-13
  1.81E-13  5.87E-13  5.28E-13  1.49E-13  7.23E-13  1.35E-13  2.60E-13  6.68E-13
  3.78E-13  2.40E-13  5.96E-13  5.60E-13  1.42E-11  1.18E-08
 -2.1023E+00 -1.1538E+00 -1.1538E+00 -1.1538E+00 -9.6469E-01 -4.0750E-01
 -3.7808E-01 -3.7808E-01 -3.0566E-01 -3.0566E-01 -2.9054E-01  5.2452E-02
  7.8331E-02  7.8331E-02  9.3303E-02  9.5975E-02  9.5975E-02  1.8595E-01
  1.8595E-01  1.9892E-01  3.1853E-01  3.2120E-01  3.2120E-01  4.3618E-01
  4.3618E-01  5.1118E-01  5.1118E-01  5.1537E-01  5.6130E-01  5.6130E-01
  prteigrs : nnsclo,ikpt=   30   41 max resid (incl. the buffer)=  1.17917E-08
 Non-SCF case, kpt   42 (  0.27222  0.27222  0.27222), residuals and eigenvalues=
  8.98E-13  4.48E-13  2.72E-13  5.63E-13  7.40E-13  4.56E-13  6.85E-13  5.79E-13
  5.06E-13  3.76E-13  3.15E-13  4.27E-13  4.49E-13  6.29E-13  1.24E-13  6.44E-13
  1.60E-13  3.19E-13  3.39E-13  2.69E-13  5.72E-13  8.90E-13  9.16E-13  8.59E-13
  5.25E-13  3.63E-13  8.16E-13  7.14E-13  1.07E-11  6.86E-09
 -2.1023E+00 -1.1538E+00 -1.1538E+00 -1.1538E+00 -9.6474E-01 -4.0838E-01
 -3.7823E-01 -3.7823E-01 -3.0538E-01 -3.0538E-01 -2.9028E-01  5.3051E-02
  7.9262E-02  7.9262E-02  9.5558E-02  9.7194E-02  9.7194E-02  1.8528E-01
  1.8528E-01  1.9812E-01  3.1713E-01  3.1991E-01  3.1991E-01  4.3381E-01
  4.3381E-01  5.0957E-01  5.0957E-01  5.1531E-01  5.6129E-01  5.6129E-01
  prteigrs : nnsclo,ikpt=   30   42 max resid (incl. the buffer)=  6.85528E-09
 Non-SCF case, kpt   43 (  0.26667  0.26667  0.26667), residuals and eigenvalues=
  6.28E-13  3.46E-13  9.00E-13  1.55E-13  7.81E-13  3.57E-13  6.23E-13  2.66E-13
  4.38E-13  2.98E-13  3.02E-13  7.47E-13  3.34E-13  8.00E-13  3.59E-13  7.04E-13
  2.84E-13  5.85E-13  5.60E-13  6.60E-13  8.99E-13  2.82E-13  3.00E-13  4.16E-13
  5.06E-13  4.13E-13  3.07E-13  7.79E-13  2.20E-12  5.39E-09
 -2.1023E+00 -1.1538E+00 -1.1537E+00 -1.1537E+00 -9.6479E-01 -4.0923E-01
 -3.7837E-01 -3.7837E-01 -3.0511E-01 -3.0511E-01 -2.9008E-01  5.3692E-02
  8.0190E-02  8.0190E-02  9.7874E-02  9.8456E-02  9.8456E-02  1.8465E-01
  1.8465E-01  1.9732E-01  3.1572E-01  3.1860E-01  3.1860E-01  4.3142E-01
  4.3142E-01  5.0783E-01  5.0783E-01  5.1519E-01  5.6128E-01  5.6128E-01
  prteigrs : nnsclo,ikpt=   30   43 max resid (incl. the buffer)=  5.38642E-09
 Non-SCF case, kpt   44 (  0.26111  0.26111  0.26111), residuals and eigenvalues=
  4.74E-13  3.99E-13  4.05E-13  1.40E-13  1.32E-13  3.66E-13  3.88E-13  3.51E-13
  2.82E-13  3.17E-13  2.21E-13  8.05E-13  3.79E-13  7.06E-13  7.35E-13  5.39E-13
  2.70E-13  2.09E-13  4.12E-13  5.68E-13  2.82E-13  4.10E-13  3.56E-13  5.75E-13
  4.35E-13  6.98E-13  8.73E-13  8.88E-13  3.41E-13  1.03E-08
 -2.1023E+00 -1.1537E+00 -1.1537E+00 -1.1537E+00 -9.6484E-01 -4.1006E-01
 -3.7850E-01 -3.7850E-01 -3.0487E-01 -3.0487E-01 -2.8993E-01  5.4376E-02
  8.1110E-02  8.1110E-02  9.9760E-02  9.9760E-02  1.0025E-01  1.8408E-01
  1.8408E-01  1.9652E-01  3.1430E-01  3.1728E-01  3.1728E-01  4.2901E-01
  4.2901E-01  5.0597E-01  5.0597E-01  5.1500E-01  5.6125E-01  5.6125E-01
  prteigrs : nnsclo,ikpt=   30   44 max resid (incl. the buffer)=  1.02963E-08
 Non-SCF case, kpt   45 (  0.25556  0.25556  0.25556), residuals and eigenvalues=
  4.83E-13  3.94E-13  4.44E-13  1.38E-13  1.26E-13  3.25E-13  3.67E-13  3.28E-13
  3.06E-13  3.56E-13  2.73E-13  2.85E-13  3.84E-13  9.13E-13  6.88E-13  4.97E-13
  3.59E-13  2.56E-13  5.33E-13  7.95E-13  3.34E-13  4.49E-13  4.76E-13  4.53E-13
  3.28E-13  1.60E-13  3.40E-13  9.21E-13  9.42E-13  2.45E-08
 -2.1023E+00 -1.1537E+00 -1.1537E+00 -1.1537E+00 -9.6489E-01 -4.1085E-01
 -3.7862E-01 -3.7862E-01 -3.0464E-01 -3.0464E-01 -2.8982E-01  5.5108E-02
  8.2025E-02  8.2025E-02  1.0111E-01  1.0111E-01  1.0267E-01  1.8357E-01
  1.8357E-01  1.9572E-01  3.1285E-01  3.1594E-01  3.1594E-01  4.2657E-01
  4.2657E-01  5.0400E-01  5.0400E-01  5.1474E-01  5.6120E-01  5.6120E-01
  prteigrs : nnsclo,ikpt=   30   45 max resid (incl. the buffer)=  2.44708E-08
 Non-SCF case, kpt   46 (  0.25000  0.25000  0.25000), residuals and eigenvalues=
  4.83E-13  3.94E-13  4.95E-13  1.40E-13  9.43E-13  9.00E-13  3.36E-13  3.08E-13
  3.40E-13  4.46E-13  3.45E-13  3.91E-13  4.31E-13  3.10E-13  6.79E-13  5.04E-13
  3.57E-13  3.30E-13  6.54E-13  9.27E-13  4.26E-13  5.53E-13  5.55E-13  7.67E-13
  6.74E-13  7.13E-13  8.32E-13  7.22E-13  2.14E-13  7.90E-09
 -2.1023E+00 -1.1537E+00 -1.1537E+00 -1.1537E+00 -9.6494E-01 -4.1162E-01
 -3.7873E-01 -3.7873E-01 -3.0443E-01 -3.0443E-01 -2.8977E-01  5.5890E-02
  8.2930E-02  8.2930E-02  1.0250E-01  1.0250E-01  1.0513E-01  1.8311E-01
  1.8311E-01  1.9493E-01  3.1140E-01  3.1459E-01  3.1459E-01  4.2413E-01
  4.2413E-01  5.0195E-01  5.0195E-01  5.1443E-01  5.6111E-01  5.6111E-01
  prteigrs : nnsclo,ikpt=   30   46 max resid (incl. the buffer)=  7.90243E-09
 Non-SCF case, kpt   47 (  0.24444  0.24444  0.24444), residuals and eigenvalues=
  4.77E-13  3.96E-13  5.47E-13  1.46E-13  8.45E-13  7.35E-13  3.15E-13  2.92E-13
  3.85E-13  5.68E-13  4.51E-13  5.13E-13  6.30E-13  4.81E-13  6.54E-13  4.97E-13
  8.62E-13  4.23E-13  6.88E-13  4.34E-13  5.74E-13  6.98E-13  6.54E-13  8.40E-13
  8.02E-13  4.38E-13  6.63E-13  5.37E-13  3.09E-13  7.32E-09
 -2.1023E+00 -1.1537E+00 -1.1537E+00 -1.1537E+00 -9.6499E-01 -4.1236E-01
 -3.7882E-01 -3.7882E-01 -3.0424E-01 -3.0424E-01 -2.8977E-01  5.6721E-02
  8.3826E-02  8.3826E-02  1.0393E-01  1.0393E-01  1.0764E-01  1.8271E-01
  1.8271E-01  1.9413E-01  3.0993E-01  3.1323E-01  3.1323E-01  4.2166E-01
  4.2166E-01  4.9981E-01  4.9981E-01  5.1405E-01  5.6098E-01  5.6098E-01
  prteigrs : nnsclo,ikpt=   30   47 max resid (incl. the buffer)=  7.31654E-09
 Non-SCF case, kpt   48 (  0.23889  0.23889  0.23889), residuals and eigenvalues=
  4.55E-13  3.52E-13  5.90E-13  1.53E-13  7.07E-13  4.69E-13  2.95E-13  2.68E-13
  4.38E-13  7.12E-13  5.57E-13  6.35E-13  7.57E-13  6.45E-13  5.24E-13  3.49E-13
  2.54E-13  5.53E-13  7.00E-13  9.09E-13  6.49E-13  7.21E-13  8.30E-13  6.77E-13
  4.42E-13  5.67E-13  7.39E-13  9.49E-13  2.01E-13  1.94E-08
 -2.1023E+00 -1.1537E+00 -1.1536E+00 -1.1536E+00 -9.6504E-01 -4.1307E-01
 -3.7890E-01 -3.7890E-01 -3.0408E-01 -3.0408E-01 -2.8981E-01  5.7603E-02
  8.4710E-02  8.4710E-02  1.0540E-01  1.0540E-01  1.1019E-01  1.8237E-01
  1.8237E-01  1.9335E-01  3.0845E-01  3.1185E-01  3.1185E-01  4.1918E-01
  4.1918E-01  4.9761E-01  4.9761E-01  5.1362E-01  5.6079E-01  5.6079E-01
  prteigrs : nnsclo,ikpt=   30   48 max resid (incl. the buffer)=  1.93757E-08
 Non-SCF case, kpt   49 (  0.23333  0.23333  0.23333), residuals and eigenvalues=
  4.14E-13  2.88E-13  3.14E-13  6.85E-13  3.98E-13  8.21E-13  2.57E-13  5.82E-13
  3.17E-13  4.09E-13  6.14E-13  4.19E-13  3.15E-13  5.28E-13  5.42E-13  8.80E-13
  4.58E-13  8.50E-13  4.32E-13  2.62E-13  3.53E-13  5.30E-13  5.41E-13  2.53E-13
  1.81E-13  2.04E-13  9.19E-13  8.27E-13  1.28E-12  2.35E-07
 -2.1023E+00 -1.1536E+00 -1.1536E+00 -1.1536E+00 -9.6509E-01 -4.1375E-01
 -3.7897E-01 -3.7897E-01 -3.0393E-01 -3.0393E-01 -2.8990E-01  5.8537E-02
  8.5581E-02  8.5581E-02  1.0691E-01  1.0691E-01  1.1278E-01  1.8210E-01
  1.8210E-01  1.9256E-01  3.0696E-01  3.1046E-01  3.1046E-01  4.1670E-01
  4.1670E-01  4.9535E-01  4.9535E-01  5.1313E-01  5.6054E-01  5.6054E-01
  prteigrs : nnsclo,ikpt=   30   49 max resid (incl. the buffer)=  2.34754E-07
 Non-SCF case, kpt   50 (  0.22778  0.22778  0.22778), residuals and eigenvalues=
  5.59E-13  5.13E-13  2.58E-13  7.32E-13  3.80E-13  6.07E-13  2.66E-13  4.05E-13
  2.01E-13  4.34E-13  4.34E-13  3.41E-13  3.01E-13  3.98E-13  4.71E-13  6.29E-13
  6.12E-13  5.34E-13  2.20E-13  5.97E-13  2.11E-13  6.19E-13  5.48E-13  6.42E-13
  5.93E-13  4.35E-13  5.11E-13  3.75E-13  3.58E-13  3.10E-07
 -2.1023E+00 -1.1536E+00 -1.1536E+00 -1.1536E+00 -9.6515E-01 -4.1441E-01
 -3.7903E-01 -3.7903E-01 -3.0380E-01 -3.0380E-01 -2.9004E-01  5.9521E-02
  8.6438E-02  8.6438E-02  1.0847E-01  1.0847E-01  1.1539E-01  1.8188E-01
  1.8188E-01  1.9179E-01  3.0546E-01  3.0906E-01  3.0906E-01  4.1420E-01
  4.1420E-01  4.9303E-01  4.9303E-01  5.1258E-01  5.6023E-01  5.6023E-01
  prteigrs : nnsclo,ikpt=   30   50 max resid (incl. the buffer)=  3.09569E-07
 Non-SCF case, kpt   51 (  0.22222  0.22222  0.22222), residuals and eigenvalues=
  3.25E-13  8.87E-13  3.40E-13  7.15E-13  4.28E-13  6.60E-13  5.28E-13  5.37E-13
  4.88E-13  7.42E-13  3.62E-13  4.84E-13  8.90E-13  6.16E-13  2.78E-13  1.82E-13
  4.90E-13  3.19E-13  4.21E-13  1.84E-13  4.15E-13  1.14E-13  2.56E-13  2.67E-13
  2.47E-13  8.56E-13  3.89E-13  4.16E-13  8.66E-13  3.07E-07
 -2.1023E+00 -1.1536E+00 -1.1536E+00 -1.1536E+00 -9.6520E-01 -4.1503E-01
 -3.7908E-01 -3.7908E-01 -3.0369E-01 -3.0369E-01 -2.9022E-01  6.0554E-02
  8.7279E-02  8.7279E-02  1.1006E-01  1.1006E-01  1.1804E-01  1.8173E-01
  1.8173E-01  1.9102E-01  3.0395E-01  3.0765E-01  3.0765E-01  4.1170E-01
  4.1170E-01  4.9067E-01  4.9067E-01  5.1197E-01  5.5985E-01  5.5985E-01
  prteigrs : nnsclo,ikpt=   30   51 max resid (incl. the buffer)=  3.06874E-07
 Non-SCF case, kpt   52 (  0.21667  0.21667  0.21667), residuals and eigenvalues=
  5.16E-13  7.66E-13  1.91E-13  3.23E-13  9.74E-13  8.93E-13  6.56E-13  7.75E-13
  2.01E-13  7.44E-13  2.87E-13  9.49E-13  9.26E-13  4.43E-13  8.01E-13  5.69E-13
  7.21E-13  2.12E-13  3.15E-13  2.97E-13  2.64E-13  5.55E-13  2.21E-13  3.71E-13
  4.43E-13  2.78E-13  6.82E-13  8.89E-13  4.00E-14  4.99E-08
 -2.1023E+00 -1.1536E+00 -1.1536E+00 -1.1536E+00 -9.6525E-01 -4.1562E-01
 -3.7912E-01 -3.7912E-01 -3.0360E-01 -3.0360E-01 -2.9044E-01  6.1636E-02
  8.8102E-02  8.8102E-02  1.1168E-01  1.1168E-01  1.2071E-01  1.8165E-01
  1.8165E-01  1.9025E-01  3.0244E-01  3.0623E-01  3.0623E-01  4.0919E-01
  4.0919E-01  4.8827E-01  4.8827E-01  5.1131E-01  5.5941E-01  5.5941E-01
  prteigrs : nnsclo,ikpt=   30   52 max resid (incl. the buffer)=  4.99241E-08
 Non-SCF case, kpt   53 (  0.21111  0.21111  0.21111), residuals and eigenvalues=
  5.45E-13  6.87E-13  1.87E-13  3.63E-13  8.17E-13  8.99E-13  6.17E-13  7.33E-13
  2.05E-13  8.06E-13  2.47E-13  9.29E-13  6.16E-13  5.77E-13  8.94E-13  5.56E-13
  9.17E-13  2.42E-13  3.84E-13  3.14E-13  2.18E-13  5.20E-13  3.01E-13  4.14E-13
  4.35E-13  4.09E-13  5.90E-13  2.99E-13  1.48E-13  1.50E-07
 -2.1023E+00 -1.1536E+00 -1.1535E+00 -1.1535E+00 -9.6530E-01 -4.1619E-01
 -3.7914E-01 -3.7914E-01 -3.0353E-01 -3.0353E-01 -2.9071E-01  6.2763E-02
  8.8908E-02  8.8908E-02  1.1335E-01  1.1335E-01  1.2340E-01  1.8163E-01
  1.8163E-01  1.8950E-01  3.0092E-01  3.0480E-01  3.0480E-01  4.0668E-01
  4.0668E-01  4.8584E-01  4.8584E-01  5.1059E-01  5.5891E-01  5.5891E-01
  prteigrs : nnsclo,ikpt=   30   53 max resid (incl. the buffer)=  1.49791E-07
 Non-SCF case, kpt   54 (  0.20556  0.20556  0.20556), residuals and eigenvalues=
  5.83E-13  6.13E-13  1.91E-13  3.57E-13  7.00E-13  9.34E-13  5.79E-13  6.17E-13
  2.35E-13  8.81E-13  2.20E-13  9.21E-13  2.54E-13  8.20E-13  1.15E-13  2.54E-13
  2.51E-13  4.76E-13  7.13E-13  2.85E-13  2.04E-13  4.14E-13  3.99E-13  2.72E-13
  2.79E-13  2.46E-13  3.43E-13  3.62E-13  2.67E-13  4.48E-07
 -2.1023E+00 -1.1535E+00 -1.1535E+00 -1.1535E+00 -9.6535E-01 -4.1673E-01
 -3.7916E-01 -3.7916E-01 -3.0347E-01 -3.0347E-01 -2.9101E-01  6.3934E-02
  8.9693E-02  8.9693E-02  1.1505E-01  1.1505E-01  1.2611E-01  1.8167E-01
  1.8167E-01  1.8876E-01  2.9940E-01  3.0336E-01  3.0336E-01  4.0417E-01
  4.0417E-01  4.8338E-01  4.8338E-01  5.0982E-01  5.5834E-01  5.5834E-01
  prteigrs : nnsclo,ikpt=   30   54 max resid (incl. the buffer)=  4.47548E-07
 Non-SCF case, kpt   55 (  0.20000  0.20000  0.20000), residuals and eigenvalues=
  2.78E-13  4.90E-13  3.99E-13  6.45E-13  3.16E-13  4.41E-13  4.92E-13  3.70E-13
  3.93E-13  4.18E-13  4.99E-13  2.43E-13  5.20E-13  4.32E-13  7.63E-13  2.73E-13
  3.34E-13  9.13E-13  2.59E-13  7.71E-13  3.95E-13  4.47E-13  3.45E-13  7.25E-13
  4.68E-13  5.65E-13  5.07E-13  7.84E-13  7.53E-13  3.55E-07
 -2.1023E+00 -1.1535E+00 -1.1535E+00 -1.1535E+00 -9.6541E-01 -4.1723E-01
 -3.7916E-01 -3.7916E-01 -3.0344E-01 -3.0344E-01 -2.9135E-01  6.5147E-02
  9.0457E-02  9.0457E-02  1.1678E-01  1.1678E-01  1.2884E-01  1.8178E-01
  1.8178E-01  1.8802E-01  2.9788E-01  3.0191E-01  3.0191E-01  4.0167E-01
  4.0167E-01  4.8090E-01  4.8090E-01  5.0898E-01  5.5771E-01  5.5771E-01
  prteigrs : nnsclo,ikpt=   30   55 max resid (incl. the buffer)=  3.54652E-07
 Non-SCF case, kpt   56 (  0.19444  0.19444  0.19444), residuals and eigenvalues=
  4.83E-13  2.18E-13  7.46E-13  8.26E-13  3.22E-13  9.18E-13  4.37E-13  2.37E-13
  5.02E-13  2.66E-13  6.44E-13  3.48E-13  5.92E-13  2.86E-13  2.99E-13  9.41E-13
  2.62E-13  4.18E-13  7.50E-13  5.56E-13  2.65E-13  3.67E-13  9.28E-13  6.36E-13
  7.95E-13  6.91E-13  6.96E-13  3.00E-13  7.05E-13  9.92E-07
 -2.1023E+00 -1.1535E+00 -1.1535E+00 -1.1535E+00 -9.6546E-01 -4.1771E-01
 -3.7916E-01 -3.7916E-01 -3.0342E-01 -3.0342E-01 -2.9173E-01  6.6398E-02
  9.1199E-02  9.1199E-02  1.1855E-01  1.1855E-01  1.3159E-01  1.8195E-01
  1.8195E-01  1.8730E-01  2.9636E-01  3.0045E-01  3.0045E-01  3.9917E-01
  3.9917E-01  4.7841E-01  4.7841E-01  5.0808E-01  5.5703E-01  5.5703E-01
  prteigrs : nnsclo,ikpt=   30   56 max resid (incl. the buffer)=  9.92370E-07
 Non-SCF case, kpt   57 (  0.18889  0.18889  0.18889), residuals and eigenvalues=
  4.87E-13  2.61E-13  7.46E-13  1.90E-13  3.28E-13  9.62E-13  4.58E-13  2.65E-13
  5.03E-13  2.22E-13  3.17E-13  4.03E-13  6.56E-13  2.00E-13  3.57E-13  3.24E-13
  3.13E-13  1.27E-13  3.17E-13  9.68E-13  5.46E-13  2.81E-13  2.04E-13  1.95E-13
  6.50E-13  4.26E-13  4.65E-13  1.00E-12  2.44E-13  1.80E-06
 -2.1023E+00 -1.1535E+00 -1.1535E+00 -1.1535E+00 -9.6551E-01 -4.1816E-01
 -3.7914E-01 -3.7914E-01 -3.0342E-01 -3.0342E-01 -2.9214E-01  6.7685E-02
  9.1918E-02  9.1918E-02  1.2035E-01  1.2035E-01  1.3434E-01  1.8219E-01
  1.8219E-01  1.8659E-01  2.9483E-01  2.9898E-01  2.9898E-01  3.9667E-01
  3.9667E-01  4.7590E-01  4.7590E-01  5.0711E-01  5.5629E-01  5.5630E-01
  prteigrs : nnsclo,ikpt=   30   57 max resid (incl. the buffer)=  1.79828E-06
 Non-SCF case, kpt   58 (  0.18333  0.18333  0.18333), residuals and eigenvalues=
  3.77E-13  2.61E-13  2.17E-13  5.15E-13  9.29E-13  4.63E-13  3.86E-13  8.87E-13
  4.37E-13  4.93E-13  4.25E-13  4.92E-13  7.24E-13  4.10E-13  5.76E-13  4.00E-13
  3.40E-13  5.41E-13  5.13E-13  9.48E-13  6.39E-13  7.04E-13  2.96E-13  5.78E-13
  8.93E-13  4.68E-13  5.62E-13  5.10E-13  2.20E-14  5.46E-07
 -2.1023E+00 -1.1535E+00 -1.1534E+00 -1.1534E+00 -9.6556E-01 -4.1859E-01
 -3.7911E-01 -3.7911E-01 -3.0344E-01 -3.0344E-01 -2.9258E-01  6.9003E-02
  9.2612E-02  9.2612E-02  1.2218E-01  1.2218E-01  1.3711E-01  1.8249E-01
  1.8249E-01  1.8589E-01  2.9331E-01  2.9751E-01  2.9751E-01  3.9419E-01
  3.9419E-01  4.7339E-01  4.7339E-01  5.0608E-01  5.5551E-01  5.5551E-01
  prteigrs : nnsclo,ikpt=   30   58 max resid (incl. the buffer)=  5.45765E-07
 Non-SCF case, kpt   59 (  0.17778  0.17778  0.17778), residuals and eigenvalues=
  4.36E-13  4.03E-13  2.32E-13  5.08E-13  9.74E-13  5.01E-13  5.55E-13  5.98E-13
  4.24E-13  3.88E-13  4.44E-13  2.70E-13  6.93E-13  3.51E-13  5.74E-13  3.47E-13
  3.15E-13  4.79E-13  1.49E-13  5.92E-13  2.58E-13  3.22E-13  2.07E-13  7.34E-13
  3.95E-13  5.39E-13  5.17E-13  5.46E-13  2.26E-13  6.82E-07
 -2.1023E+00 -1.1534E+00 -1.1534E+00 -1.1534E+00 -9.6561E-01 -4.1898E-01
 -3.7908E-01 -3.7908E-01 -3.0347E-01 -3.0347E-01 -2.9305E-01  7.0350E-02
  9.3282E-02  9.3282E-02  1.2404E-01  1.2404E-01  1.3988E-01  1.8285E-01
  1.8285E-01  1.8520E-01  2.9180E-01  2.9603E-01  2.9603E-01  3.9172E-01
  3.9172E-01  4.7088E-01  4.7088E-01  5.0497E-01  5.5468E-01  5.5468E-01
  prteigrs : nnsclo,ikpt=   30   59 max resid (incl. the buffer)=  6.82361E-07
 Non-SCF case, kpt   60 (  0.17222  0.17222  0.17222), residuals and eigenvalues=
  6.29E-13  3.75E-13  2.29E-13  6.17E-13  2.64E-13  5.27E-13  3.74E-13  7.61E-13
  4.69E-13  4.02E-13  5.09E-13  6.07E-13  6.94E-13  3.26E-13  6.79E-13  3.28E-13
  3.04E-13  5.18E-13  8.92E-13  6.00E-13  5.04E-13  4.60E-13  2.23E-13  8.45E-13
  7.88E-13  1.80E-13  5.85E-13  3.52E-13  7.90E-14  1.60E-06
 -2.1023E+00 -1.1534E+00 -1.1534E+00 -1.1534E+00 -9.6566E-01 -4.1935E-01
 -3.7904E-01 -3.7904E-01 -3.0352E-01 -3.0352E-01 -2.9354E-01  7.1722E-02
  9.3927E-02  9.3927E-02  1.2592E-01  1.2592E-01  1.4265E-01  1.8328E-01
  1.8328E-01  1.8453E-01  2.9028E-01  2.9454E-01  2.9454E-01  3.8927E-01
  3.8927E-01  4.6837E-01  4.6837E-01  5.0379E-01  5.5382E-01  5.5382E-01
  prteigrs : nnsclo,ikpt=   30   60 max resid (incl. the buffer)=  1.60412E-06
 Non-SCF case, kpt   61 (  0.16667  0.16667  0.16667), residuals and eigenvalues=
  7.49E-13  3.63E-13  3.39E-13  1.09E-13  7.05E-13  4.37E-13  6.49E-13  3.25E-13
  3.90E-13  5.45E-13  5.64E-13  8.36E-13  4.21E-13  5.99E-13  6.13E-13  5.76E-13
  2.19E-13  6.88E-13  4.81E-13  2.78E-13  2.99E-13  8.57E-13  3.26E-13  8.62E-13
  6.22E-13  3.99E-13  3.55E-13  7.61E-13  1.47E-13  3.61E-07
 -2.1023E+00 -1.1534E+00 -1.1534E+00 -1.1534E+00 -9.6571E-01 -4.1969E-01
 -3.7899E-01 -3.7899E-01 -3.0358E-01 -3.0358E-01 -2.9405E-01  7.3114E-02
  9.4546E-02  9.4546E-02  1.2783E-01  1.2783E-01  1.4543E-01  1.8376E-01
  1.8376E-01  1.8388E-01  2.8878E-01  2.9304E-01  2.9304E-01  3.8683E-01
  3.8683E-01  4.6588E-01  4.6588E-01  5.0253E-01  5.5292E-01  5.5293E-01
  prteigrs : nnsclo,ikpt=   30   61 max resid (incl. the buffer)=  3.61152E-07
 Non-SCF case, kpt   62 (  0.16111  0.16111  0.16111), residuals and eigenvalues=
  4.61E-13  5.08E-13  4.93E-13  8.06E-13  8.19E-13  5.87E-13  2.80E-13  2.33E-13
  2.74E-13  7.37E-14  6.58E-13  9.32E-13  5.70E-13  6.82E-13  5.86E-13  2.54E-13
  7.88E-13  3.07E-13  2.72E-13  7.17E-13  4.83E-13  4.41E-13  3.20E-13  1.28E-13
  3.98E-13  7.19E-13  5.94E-13  8.77E-13  4.03E-13  1.54E-07
 -2.1023E+00 -1.1534E+00 -1.1534E+00 -1.1534E+00 -9.6576E-01 -4.2001E-01
 -3.7893E-01 -3.7893E-01 -3.0366E-01 -3.0366E-01 -2.9459E-01  7.4521E-02
  9.5137E-02  9.5137E-02  1.2976E-01  1.2976E-01  1.4820E-01  1.8323E-01
  1.8430E-01  1.8430E-01  2.8728E-01  2.9154E-01  2.9154E-01  3.8442E-01
  3.8442E-01  4.6339E-01  4.6339E-01  5.0119E-01  5.5200E-01  5.5200E-01
  prteigrs : nnsclo,ikpt=   30   62 max resid (incl. the buffer)=  1.53712E-07
 Non-SCF case, kpt   63 (  0.15556  0.15556  0.15556), residuals and eigenvalues=
  4.58E-13  5.79E-13  4.13E-13  8.30E-13  9.54E-13  5.80E-13  9.45E-13  4.26E-13
  3.21E-13  7.16E-14  7.05E-13  7.65E-13  5.58E-13  6.27E-13  4.33E-13  2.24E-13
  8.72E-13  8.48E-13  5.53E-13  5.62E-13  6.48E-13  4.14E-13  2.22E-13  1.48E-13
  4.92E-13  4.50E-13  3.52E-13  9.11E-13  3.99E-13  1.57E-07
 -2.1023E+00 -1.1534E+00 -1.1533E+00 -1.1533E+00 -9.6581E-01 -4.2030E-01
 -3.7886E-01 -3.7886E-01 -3.0375E-01 -3.0375E-01 -2.9514E-01  7.5940E-02
  9.5702E-02  9.5702E-02  1.3172E-01  1.3172E-01  1.5097E-01  1.8261E-01
  1.8489E-01  1.8489E-01  2.8579E-01  2.9003E-01  2.9003E-01  3.8203E-01
  3.8203E-01  4.6092E-01  4.6092E-01  4.9977E-01  5.5105E-01  5.5106E-01
  prteigrs : nnsclo,ikpt=   30   63 max resid (incl. the buffer)=  1.56538E-07
 Non-SCF case, kpt   64 (  0.15000  0.15000  0.15000), residuals and eigenvalues=
  4.82E-13  5.22E-13  4.34E-13  8.58E-13  8.90E-13  4.87E-13  8.51E-13  4.90E-13
  3.07E-13  7.77E-14  6.39E-13  6.79E-13  6.80E-13  6.55E-13  8.58E-13  8.95E-13
  4.25E-13  3.50E-13  4.20E-13  6.94E-13  4.66E-13  5.89E-13  2.18E-13  1.37E-13
  4.74E-13  5.75E-13  3.61E-13  9.46E-13  4.36E-13  6.41E-07
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1533E+00 -9.6585E-01 -4.2057E-01
 -3.7879E-01 -3.7879E-01 -3.0385E-01 -3.0385E-01 -2.9571E-01  7.7367E-02
  9.6240E-02  9.6240E-02  1.3369E-01  1.3369E-01  1.5373E-01  1.8200E-01
  1.8553E-01  1.8553E-01  2.8431E-01  2.8852E-01  2.8852E-01  3.7966E-01
  3.7966E-01  4.5847E-01  4.5847E-01  4.9827E-01  5.5010E-01  5.5011E-01
  prteigrs : nnsclo,ikpt=   30   64 max resid (incl. the buffer)=  6.40899E-07
 Non-SCF case, kpt   65 (  0.14444  0.14444  0.14444), residuals and eigenvalues=
  4.47E-13  4.24E-13  6.43E-13  8.23E-13  8.22E-13  4.49E-13  9.06E-13  4.41E-13
  2.48E-13  9.52E-14  6.10E-13  7.65E-13  9.44E-13  8.07E-13  5.20E-13  2.20E-13
  5.29E-13  5.08E-13  5.79E-13  5.97E-13  2.79E-13  5.89E-13  1.93E-13  6.35E-13
  8.20E-13  4.23E-13  2.85E-13  8.81E-13  3.45E-13  2.14E-05
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1533E+00 -9.6590E-01 -4.2082E-01
 -3.7871E-01 -3.7871E-01 -3.0396E-01 -3.0396E-01 -2.9629E-01  7.8796E-02
  9.6751E-02  9.6751E-02  1.3567E-01  1.3567E-01  1.5648E-01  1.8140E-01
  1.8622E-01  1.8622E-01  2.8285E-01  2.8700E-01  2.8700E-01  3.7733E-01
  3.7733E-01  4.5606E-01  4.5606E-01  4.9668E-01  5.4912E-01  5.4970E-01
  prteigrs : nnsclo,ikpt=   30   65 max resid (incl. the buffer)=  2.14473E-05
 Non-SCF case, kpt   66 (  0.13889  0.13889  0.13889), residuals and eigenvalues=
  3.53E-13  7.45E-13  2.25E-13  4.80E-13  4.85E-13  4.40E-13  1.94E-13  8.10E-13
  2.03E-13  3.55E-13  2.18E-13  5.13E-13  6.63E-13  3.74E-13  5.29E-13  8.03E-13
  1.97E-13  5.34E-13  2.82E-13  5.36E-13  3.09E-13  4.64E-13  2.26E-13  9.45E-13
  3.74E-13  7.11E-13  7.43E-13  4.51E-13  4.66E-13  3.82E-07
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1533E+00 -9.6595E-01 -4.2104E-01
 -3.7863E-01 -3.7863E-01 -3.0408E-01 -3.0408E-01 -2.9688E-01  8.0223E-02
  9.7236E-02  9.7236E-02  1.3767E-01  1.3767E-01  1.5921E-01  1.8083E-01
  1.8696E-01  1.8696E-01  2.8140E-01  2.8548E-01  2.8548E-01  3.7503E-01
  3.7503E-01  4.5367E-01  4.5367E-01  4.9501E-01  5.4815E-01  5.4816E-01
  prteigrs : nnsclo,ikpt=   30   66 max resid (incl. the buffer)=  3.82180E-07
 Non-SCF case, kpt   67 (  0.13333  0.13333  0.13333), residuals and eigenvalues=
  3.64E-13  8.14E-13  8.67E-13  5.83E-13  4.50E-13  4.48E-13  1.81E-13  7.50E-13
  6.62E-13  8.03E-13  2.88E-13  4.89E-13  5.25E-13  3.37E-13  6.40E-13  2.88E-13
  1.99E-13  3.20E-13  2.80E-13  5.84E-13  5.30E-13  5.45E-13  2.34E-13  9.29E-13
  3.98E-13  5.63E-13  9.52E-13  3.48E-13  3.15E-13  1.59E-06
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1533E+00 -9.6599E-01 -4.2125E-01
 -3.7854E-01 -3.7854E-01 -3.0421E-01 -3.0421E-01 -2.9747E-01  8.1643E-02
  9.7694E-02  9.7694E-02  1.3967E-01  1.3967E-01  1.6192E-01  1.8027E-01
  1.8774E-01  1.8774E-01  2.7996E-01  2.8395E-01  2.8395E-01  3.7277E-01
  3.7277E-01  4.5132E-01  4.5132E-01  4.9327E-01  5.4717E-01  5.4723E-01
  prteigrs : nnsclo,ikpt=   30   67 max resid (incl. the buffer)=  1.59223E-06
 Non-SCF case, kpt   68 (  0.12778  0.12778  0.12778), residuals and eigenvalues=
  6.40E-13  2.05E-13  7.12E-13  2.52E-13  3.65E-13  8.38E-13  2.41E-13  3.00E-13
  6.30E-13  2.41E-13  5.67E-13  3.47E-13  6.75E-13  7.41E-13  3.12E-13  1.78E-13
  2.57E-13  2.11E-13  9.78E-13  5.88E-13  9.48E-13  8.43E-13  5.68E-13  7.17E-13
  6.46E-13  4.92E-13  9.88E-13  6.13E-13  6.04E-13  2.50E-05
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1533E+00 -9.6603E-01 -4.2143E-01
 -3.7845E-01 -3.7845E-01 -3.0434E-01 -3.0434E-01 -2.9807E-01  8.3052E-02
  9.8126E-02  9.8126E-02  1.4168E-01  1.4168E-01  1.6460E-01  1.7974E-01
  1.8855E-01  1.8855E-01  2.7854E-01  2.8243E-01  2.8243E-01  3.7055E-01
  3.7055E-01  4.4902E-01  4.4902E-01  4.9146E-01  5.4620E-01  5.4734E-01
  prteigrs : nnsclo,ikpt=   30   68 max resid (incl. the buffer)=  2.49913E-05
 Non-SCF case, kpt   69 (  0.12222  0.12222  0.12222), residuals and eigenvalues=
  6.17E-13  2.24E-13  7.40E-13  9.72E-13  3.57E-13  7.60E-13  3.41E-13  9.40E-13
  4.23E-13  1.89E-13  5.82E-13  3.75E-13  7.77E-13  6.55E-13  9.12E-13  9.42E-13
  3.13E-13  3.35E-13  4.87E-13  3.53E-13  8.28E-13  5.76E-13  6.69E-13  5.77E-13
  3.63E-13  3.24E-13  6.84E-13  9.15E-13  5.07E-13  8.58E-06
 -2.1023E+00 -1.1533E+00 -1.1532E+00 -1.1532E+00 -9.6608E-01 -4.2159E-01
 -3.7836E-01 -3.7836E-01 -3.0448E-01 -3.0448E-01 -2.9867E-01  8.4444E-02
  9.8533E-02  9.8533E-02  1.4368E-01  1.4368E-01  1.6727E-01  1.7922E-01
  1.8940E-01  1.8940E-01  2.7714E-01  2.8090E-01  2.8090E-01  3.6837E-01
  3.6837E-01  4.4676E-01  4.4676E-01  4.8960E-01  5.4524E-01  5.4622E-01
  prteigrs : nnsclo,ikpt=   30   69 max resid (incl. the buffer)=  8.58088E-06
 Non-SCF case, kpt   70 (  0.11667  0.11667  0.11667), residuals and eigenvalues=
  6.35E-13  2.25E-13  8.60E-13  7.43E-13  4.00E-13  6.73E-13  4.28E-13  8.54E-13
  2.60E-13  2.25E-13  6.18E-13  4.38E-13  2.29E-13  6.42E-13  9.84E-13  9.43E-13
  3.12E-13  6.54E-13  4.74E-13  3.15E-13  6.91E-13  5.66E-13  5.21E-13  4.34E-13
  3.08E-13  6.51E-13  9.16E-13  3.06E-13  4.02E-13  2.35E-06
 -2.1023E+00 -1.1533E+00 -1.1532E+00 -1.1532E+00 -9.6612E-01 -4.2174E-01
 -3.7826E-01 -3.7826E-01 -3.0463E-01 -3.0463E-01 -2.9926E-01  8.5815E-02
  9.8915E-02  9.8915E-02  1.4568E-01  1.4568E-01  1.6989E-01  1.7872E-01
  1.9027E-01  1.9027E-01  2.7575E-01  2.7938E-01  2.7938E-01  3.6625E-01
  3.6625E-01  4.4456E-01  4.4456E-01  4.8768E-01  5.4430E-01  5.4495E-01
  prteigrs : nnsclo,ikpt=   30   70 max resid (incl. the buffer)=  2.34925E-06
 Non-SCF case, kpt   71 (  0.11111  0.11111  0.11111), residuals and eigenvalues=
  7.27E-13  2.28E-13  8.37E-13  4.99E-13  4.91E-13  4.56E-13  3.78E-13  7.41E-13
  1.43E-13  1.57E-13  5.74E-13  4.31E-13  2.31E-13  7.32E-13  5.28E-13  1.96E-13
  5.86E-13  2.65E-13  5.37E-13  3.62E-13  2.65E-13  2.86E-13  5.14E-13  3.91E-13
  3.63E-13  5.86E-13  7.29E-13  6.60E-13  8.60E-13  5.01E-07
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1532E+00 -9.6616E-01 -4.2187E-01
 -3.7816E-01 -3.7816E-01 -3.0478E-01 -3.0478E-01 -2.9985E-01  8.7161E-02
  9.9273E-02  9.9273E-02  1.4767E-01  1.4767E-01  1.7249E-01  1.7824E-01
  1.9117E-01  1.9117E-01  2.7439E-01  2.7786E-01  2.7786E-01  3.6417E-01
  3.6417E-01  4.4241E-01  4.4241E-01  4.8573E-01  5.4337E-01  5.4368E-01
  prteigrs : nnsclo,ikpt=   30   71 max resid (incl. the buffer)=  5.00919E-07
 Non-SCF case, kpt   72 (  0.10556  0.10556  0.10556), residuals and eigenvalues=
  4.90E-13  2.93E-13  4.69E-13  9.54E-13  3.79E-13  9.46E-13  3.17E-13  3.70E-13
  6.94E-13  6.77E-13  2.94E-13  7.48E-13  8.05E-13  7.66E-13  4.23E-13  5.14E-13
  3.45E-13  2.35E-13  2.63E-13  3.10E-13  7.31E-13  5.83E-13  8.91E-13  2.26E-13
  2.47E-13  1.10E-13  3.73E-13  2.24E-13  6.86E-13  1.08E-08
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1532E+00 -9.6620E-01 -4.2198E-01
 -3.7806E-01 -3.7806E-01 -3.0493E-01 -3.0493E-01 -3.0043E-01  8.8475E-02
  9.9607E-02  9.9607E-02  1.4965E-01  1.4965E-01  1.7504E-01  1.7778E-01
  1.9209E-01  1.9209E-01  2.7305E-01  2.7634E-01  2.7634E-01  3.6215E-01
  3.6215E-01  4.4033E-01  4.4033E-01  4.8375E-01  5.4246E-01  5.4248E-01
  prteigrs : nnsclo,ikpt=   30   72 max resid (incl. the buffer)=  1.08056E-08
 Non-SCF case, kpt   73 (  0.10000  0.10000  0.10000), residuals and eigenvalues=
  5.89E-13  2.68E-13  3.68E-13  7.18E-13  2.31E-13  5.28E-13  3.51E-13  4.15E-13
  3.10E-13  2.56E-13  5.73E-13  4.76E-13  2.92E-13  5.45E-13  3.88E-13  6.39E-13
  8.38E-13  7.95E-13  8.66E-13  5.80E-13  3.34E-13  8.15E-13  5.35E-13  3.70E-13
  8.71E-13  4.59E-13  6.55E-13  3.30E-13  8.38E-08  6.68E-13
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1532E+00 -9.6623E-01 -4.2208E-01
 -3.7796E-01 -3.7796E-01 -3.0508E-01 -3.0508E-01 -3.0100E-01  8.9755E-02
  9.9919E-02  9.9919E-02  1.5160E-01  1.5160E-01  1.7735E-01  1.7754E-01
  1.9302E-01  1.9302E-01  2.7173E-01  2.7484E-01  2.7484E-01  3.6020E-01
  3.6020E-01  4.3832E-01  4.3832E-01  4.8177E-01  5.4132E-01  5.4158E-01
  prteigrs : nnsclo,ikpt=   30   73 max resid (incl. the buffer)=  8.37653E-08
 Non-SCF case, kpt   74 (  0.09444  0.09444  0.09444), residuals and eigenvalues=
  4.31E-13  9.09E-13  5.66E-13  2.50E-13  2.49E-13  3.33E-13  3.52E-13  3.55E-13
  4.93E-13  6.24E-13  9.38E-13  8.11E-13  4.22E-13  9.19E-13  4.30E-13  3.18E-13
  4.48E-13  6.11E-13  5.13E-13  7.89E-13  4.77E-13  4.58E-13  8.05E-13  6.53E-13
  3.00E-13  7.08E-13  8.16E-13  7.72E-13  2.37E-06  9.40E-13
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1532E+00 -9.6627E-01 -4.2216E-01
 -3.7786E-01 -3.7786E-01 -3.0524E-01 -3.0524E-01 -3.0156E-01  9.0994E-02
  1.0021E-01  1.0021E-01  1.5353E-01  1.5353E-01  1.7693E-01  1.7999E-01
  1.9396E-01  1.9396E-01  2.7044E-01  2.7334E-01  2.7334E-01  3.5831E-01
  3.5831E-01  4.3638E-01  4.3638E-01  4.7979E-01  5.4028E-01  5.4073E-01
  prteigrs : nnsclo,ikpt=   30   74 max resid (incl. the buffer)=  2.37314E-06
 Non-SCF case, kpt   75 (  0.08889  0.08889  0.08889), residuals and eigenvalues=
  3.80E-13  8.96E-13  5.07E-13  9.32E-13  2.58E-13  8.00E-13  2.31E-13  3.58E-13
  3.68E-13  4.53E-13  4.59E-13  7.06E-13  4.25E-13  8.78E-13  4.72E-13  3.91E-13
  5.14E-13  3.03E-13  6.08E-13  1.80E-13  9.52E-13  2.19E-13  7.05E-13  8.31E-13
  5.03E-13  3.64E-13  8.39E-13  3.96E-13  9.72E-07  9.85E-13
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1532E+00 -9.6630E-01 -4.2223E-01
 -3.7776E-01 -3.7776E-01 -3.0539E-01 -3.0539E-01 -3.0210E-01  9.2189E-02
  1.0048E-01  1.0048E-01  1.5542E-01  1.5542E-01  1.7654E-01  1.8238E-01
  1.9491E-01  1.9491E-01  2.6918E-01  2.7187E-01  2.7187E-01  3.5649E-01
  3.5649E-01  4.3452E-01  4.3452E-01  4.7783E-01  5.3937E-01  5.3991E-01
  prteigrs : nnsclo,ikpt=   30   75 max resid (incl. the buffer)=  9.72221E-07
 Non-SCF case, kpt   76 (  0.08333  0.08333  0.08333), residuals and eigenvalues=
  3.74E-13  8.35E-13  5.59E-13  6.59E-13  2.42E-13  5.96E-13  2.44E-13  3.97E-13
  9.47E-13  3.39E-13  3.43E-13  6.76E-13  7.81E-13  8.71E-13  6.09E-13  4.48E-13
  5.10E-13  2.85E-13  8.33E-13  2.03E-13  3.74E-13  2.75E-13  8.13E-13  6.92E-13
  2.74E-13  1.99E-13  5.53E-13  6.22E-13  1.66E-06  9.69E-13
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1532E+00 -9.6634E-01 -4.2229E-01
 -3.7766E-01 -3.7766E-01 -3.0554E-01 -3.0554E-01 -3.0262E-01  9.3336E-02
  1.0072E-01  1.0072E-01  1.5727E-01  1.5727E-01  1.7616E-01  1.8470E-01
  1.9585E-01  1.9585E-01  2.6795E-01  2.7041E-01  2.7041E-01  3.5474E-01
  3.5474E-01  4.3275E-01  4.3275E-01  4.7590E-01  5.3854E-01  5.3913E-01
  prteigrs : nnsclo,ikpt=   30   76 max resid (incl. the buffer)=  1.65935E-06
 Non-SCF case, kpt   77 (  0.07778  0.07778  0.07778), residuals and eigenvalues=
  3.84E-13  8.51E-13  5.85E-13  5.67E-13  2.20E-13  4.46E-13  2.64E-13  4.04E-13
  2.62E-13  3.31E-13  2.72E-13  7.01E-13  2.89E-13  8.92E-13  8.24E-13  4.76E-13
  4.08E-13  3.69E-13  7.80E-13  7.45E-13  3.77E-13  2.61E-13  8.46E-13  7.07E-13
  9.48E-13  4.12E-13  5.18E-13  6.39E-13  2.38E-06  8.24E-13
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1532E+00 -9.6637E-01 -4.2234E-01
 -3.7757E-01 -3.7757E-01 -3.0569E-01 -3.0569E-01 -3.0312E-01  9.4430E-02
  1.0095E-01  1.0095E-01  1.5906E-01  1.5906E-01  1.7582E-01  1.8695E-01
  1.9678E-01  1.9678E-01  2.6675E-01  2.6899E-01  2.6899E-01  3.5308E-01
  3.5308E-01  4.3107E-01  4.3107E-01  4.7402E-01  5.3779E-01  5.3839E-01
  prteigrs : nnsclo,ikpt=   30   77 max resid (incl. the buffer)=  2.37689E-06
 Non-SCF case, kpt   78 (  0.07222  0.07222  0.07222), residuals and eigenvalues=
  3.12E-13  5.47E-13  3.10E-13  9.17E-13  5.43E-13  3.53E-13  2.78E-13  9.48E-13
  6.86E-13  2.56E-13  9.23E-13  1.85E-13  8.02E-13  8.43E-13  2.57E-13  7.78E-13
  3.22E-13  2.08E-13  4.05E-13  2.59E-13  7.04E-13  4.06E-13  6.16E-13  4.92E-13
  6.10E-13  3.60E-13  6.97E-13  4.20E-13  4.16E-06  6.46E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6639E-01 -4.2238E-01
 -3.7747E-01 -3.7747E-01 -3.0583E-01 -3.0583E-01 -3.0360E-01  9.5468E-02
  1.0116E-01  1.0116E-01  1.6080E-01  1.6080E-01  1.7549E-01  1.8912E-01
  1.9770E-01  1.9770E-01  2.6559E-01  2.6759E-01  2.6759E-01  3.5150E-01
  3.5150E-01  4.2947E-01  4.2947E-01  4.7220E-01  5.3716E-01  5.3769E-01
  prteigrs : nnsclo,ikpt=   30   78 max resid (incl. the buffer)=  4.16013E-06
 Non-SCF case, kpt   79 (  0.06667  0.06667  0.06667), residuals and eigenvalues=
  5.52E-13  3.57E-13  8.45E-13  3.78E-13  7.08E-13  5.73E-13  4.80E-13  6.07E-13
  8.54E-13  3.77E-13  3.55E-13  8.17E-13  7.54E-13  3.80E-13  3.91E-13  3.20E-13
  6.35E-13  3.90E-13  2.29E-13  4.55E-13  2.81E-13  1.81E-13  9.16E-13  3.52E-13
  5.99E-13  2.82E-13  6.55E-13  9.32E-13  1.33E-06  6.15E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6642E-01 -4.2241E-01
 -3.7738E-01 -3.7738E-01 -3.0596E-01 -3.0596E-01 -3.0405E-01  9.6444E-02
  1.0135E-01  1.0135E-01  1.6246E-01  1.6246E-01  1.7519E-01  1.9119E-01
  1.9860E-01  1.9860E-01  2.6448E-01  2.6624E-01  2.6624E-01  3.5001E-01
  3.5001E-01  4.2798E-01  4.2798E-01  4.7046E-01  5.3632E-01  5.3703E-01
  prteigrs : nnsclo,ikpt=   30   79 max resid (incl. the buffer)=  1.33344E-06
 Non-SCF case, kpt   80 (  0.06111  0.06111  0.06111), residuals and eigenvalues=
  2.39E-13  5.35E-13  4.20E-13  3.06E-13  6.85E-13  8.94E-13  2.84E-13  2.16E-13
  7.37E-13  3.58E-13  3.03E-13  4.08E-13  2.13E-13  4.69E-13  6.54E-13  4.75E-13
  7.80E-13  6.43E-13  2.54E-13  5.60E-13  5.21E-13  4.98E-13  6.92E-13  2.10E-13
  2.73E-13  5.19E-13  8.28E-13  3.66E-13  2.89E-07  9.79E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6645E-01 -4.2244E-01
 -3.7730E-01 -3.7730E-01 -3.0609E-01 -3.0609E-01 -3.0448E-01  9.7357E-02
  1.0152E-01  1.0152E-01  1.6405E-01  1.6405E-01  1.7490E-01  1.9316E-01
  1.9946E-01  1.9946E-01  2.6341E-01  2.6493E-01  2.6493E-01  3.4862E-01
  3.4862E-01  4.2659E-01  4.2659E-01  4.6881E-01  5.3566E-01  5.3641E-01
  prteigrs : nnsclo,ikpt=   30   80 max resid (incl. the buffer)=  2.89127E-07
 Non-SCF case, kpt   81 (  0.05556  0.05556  0.05556), residuals and eigenvalues=
  2.17E-13  5.94E-13  6.03E-13  4.12E-13  8.68E-13  1.97E-13  2.84E-13  1.94E-13
  2.38E-13  2.45E-13  3.03E-13  9.91E-13  1.92E-13  4.19E-13  6.85E-13  3.11E-13
  2.52E-13  6.45E-13  2.27E-13  5.40E-13  8.80E-13  3.81E-13  7.83E-13  7.49E-13
  4.27E-13  4.25E-13  7.63E-13  7.15E-13  2.84E-07  4.54E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6647E-01 -4.2246E-01
 -3.7722E-01 -3.7722E-01 -3.0622E-01 -3.0622E-01 -3.0487E-01  9.8203E-02
  1.0168E-01  1.0168E-01  1.6554E-01  1.6554E-01  1.7465E-01  1.9502E-01
  2.0030E-01  2.0030E-01  2.6239E-01  2.6369E-01  2.6369E-01  3.4733E-01
  3.4733E-01  4.2531E-01  4.2531E-01  4.6726E-01  5.3517E-01  5.3585E-01
  prteigrs : nnsclo,ikpt=   30   81 max resid (incl. the buffer)=  2.84130E-07
 Non-SCF case, kpt   82 (  0.05000  0.05000  0.05000), residuals and eigenvalues=
  2.01E-13  6.73E-13  8.53E-13  4.81E-13  3.87E-13  1.97E-13  2.72E-13  1.59E-13
  2.52E-13  2.47E-13  2.80E-13  7.10E-13  1.90E-13  3.35E-13  7.78E-13  2.80E-13
  2.50E-13  6.02E-13  2.14E-13  4.89E-13  2.17E-13  3.38E-13  7.97E-13  6.86E-13
  6.16E-13  2.83E-13  6.46E-13  4.96E-13  2.89E-07  5.63E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6649E-01 -4.2247E-01
 -3.7715E-01 -3.7715E-01 -3.0633E-01 -3.0633E-01 -3.0523E-01  9.8977E-02
  1.0182E-01  1.0182E-01  1.6694E-01  1.6694E-01  1.7442E-01  1.9676E-01
  2.0109E-01  2.0109E-01  2.6143E-01  2.6251E-01  2.6251E-01  3.4614E-01
  3.4614E-01  4.2413E-01  4.2413E-01  4.6582E-01  5.3474E-01  5.3533E-01
  prteigrs : nnsclo,ikpt=   30   82 max resid (incl. the buffer)=  2.89317E-07
 Non-SCF case, kpt   83 (  0.04444  0.04444  0.04444), residuals and eigenvalues=
  3.72E-13  5.82E-13  7.20E-13  5.45E-13  8.58E-13  2.92E-13  3.89E-13  7.64E-13
  2.28E-13  3.98E-13  1.96E-13  3.36E-13  2.64E-13  4.49E-13  8.36E-13  4.89E-13
  2.98E-13  6.54E-13  5.91E-13  8.98E-13  6.90E-13  3.52E-13  3.42E-13  4.83E-13
  7.44E-13  4.75E-13  5.51E-13  8.62E-13  1.94E-06  6.81E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6651E-01 -4.2248E-01
 -3.7708E-01 -3.7708E-01 -3.0643E-01 -3.0643E-01 -3.0556E-01  9.9680E-02
  1.0194E-01  1.0194E-01  1.6823E-01  1.6823E-01  1.7421E-01  1.9837E-01
  2.0183E-01  2.0183E-01  2.6053E-01  2.6140E-01  2.6140E-01  3.4506E-01
  3.4506E-01  4.2308E-01  4.2308E-01  4.6451E-01  5.3440E-01  5.3486E-01
  prteigrs : nnsclo,ikpt=   30   83 max resid (incl. the buffer)=  1.94057E-06
 Non-SCF case, kpt   84 (  0.03889  0.03889  0.03889), residuals and eigenvalues=
  6.75E-13  2.80E-13  5.07E-13  3.09E-13  3.96E-13  1.91E-13  7.85E-13  4.41E-13
  5.58E-13  5.83E-13  1.78E-13  6.38E-13  3.20E-13  2.84E-13  9.03E-13  6.06E-13
  3.84E-13  3.29E-13  7.15E-13  4.26E-13  2.33E-13  4.19E-13  6.82E-13  2.69E-13
  8.85E-13  4.88E-13  5.60E-13  5.25E-13  5.71E-08  6.76E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6653E-01 -4.2249E-01
 -3.7702E-01 -3.7702E-01 -3.0653E-01 -3.0653E-01 -3.0586E-01  1.0030E-01
  1.0205E-01  1.0205E-01  1.6939E-01  1.6939E-01  1.7402E-01  1.9983E-01
  2.0251E-01  2.0251E-01  2.5971E-01  2.6039E-01  2.6039E-01  3.4410E-01
  3.4410E-01  4.2213E-01  4.2213E-01  4.6332E-01  5.3406E-01  5.3445E-01
  prteigrs : nnsclo,ikpt=   30   84 max resid (incl. the buffer)=  5.71325E-08
 Non-SCF case, kpt   85 (  0.03333  0.03333  0.03333), residuals and eigenvalues=
  5.84E-13  6.08E-13  3.92E-13  1.75E-13  5.60E-13  4.70E-13  4.11E-13  8.16E-13
  5.40E-13  7.45E-13  8.59E-13  7.64E-13  5.62E-13  3.29E-13  3.61E-13  1.96E-13
  5.69E-13  9.81E-13  5.82E-13  9.19E-13  4.38E-13  5.11E-13  4.78E-13  9.40E-13
  3.83E-13  6.52E-13  7.49E-13  6.86E-13  7.24E-08  9.47E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6654E-01 -4.2249E-01
 -3.7696E-01 -3.7696E-01 -3.0661E-01 -3.0661E-01 -3.0612E-01  1.0085E-01
  1.0214E-01  1.0214E-01  1.7043E-01  1.7043E-01  1.7386E-01  2.0114E-01
  2.0312E-01  2.0312E-01  2.5898E-01  2.5948E-01  2.5948E-01  3.4326E-01
  3.4326E-01  4.2131E-01  4.2131E-01  4.6228E-01  5.3380E-01  5.3409E-01
  prteigrs : nnsclo,ikpt=   30   85 max resid (incl. the buffer)=  7.23569E-08
 Non-SCF case, kpt   86 (  0.02778  0.02778  0.02778), residuals and eigenvalues=
  7.99E-13  2.76E-13  8.14E-13  4.72E-13  7.59E-13  3.64E-13  5.40E-13  9.21E-13
  9.18E-13  1.30E-13  5.71E-13  1.89E-13  3.21E-13  6.92E-13  2.04E-13  4.71E-13
  6.41E-13  4.40E-13  5.69E-13  1.96E-13  5.26E-13  3.52E-13  7.18E-13  3.92E-13
  5.30E-13  6.69E-13  4.02E-13  5.95E-13  9.99E-09  4.53E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6655E-01 -4.2250E-01
 -3.7692E-01 -3.7692E-01 -3.0668E-01 -3.0668E-01 -3.0634E-01  1.0132E-01
  1.0222E-01  1.0222E-01  1.7132E-01  1.7132E-01  1.7373E-01  2.0227E-01
  2.0365E-01  2.0365E-01  2.5833E-01  2.5869E-01  2.5869E-01  3.4254E-01
  3.4254E-01  4.2061E-01  4.2061E-01  4.6138E-01  5.3356E-01  5.3378E-01
  prteigrs : nnsclo,ikpt=   30   86 max resid (incl. the buffer)=  9.98780E-09
 Non-SCF case, kpt   87 (  0.02222  0.02222  0.02222), residuals and eigenvalues=
  8.47E-13  2.15E-13  5.13E-13  3.10E-13  2.32E-13  3.09E-13  4.62E-13  3.91E-13
  8.07E-14  2.01E-13  4.78E-13  6.19E-13  8.11E-13  9.34E-13  5.28E-13  2.84E-13
  4.51E-13  5.09E-13  1.91E-13  2.17E-13  6.05E-13  5.19E-13  7.50E-13  6.42E-13
  6.80E-13  4.28E-13  7.64E-13  5.93E-13  2.15E-08  8.81E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6656E-01 -4.2250E-01
 -3.7688E-01 -3.7688E-01 -3.0674E-01 -3.0674E-01 -3.0652E-01  1.0170E-01
  1.0228E-01  1.0228E-01  1.7207E-01  1.7207E-01  1.7362E-01  2.0321E-01
  2.0411E-01  2.0411E-01  2.5778E-01  2.5802E-01  2.5802E-01  3.4194E-01
  3.4194E-01  4.2003E-01  4.2003E-01  4.6064E-01  5.3340E-01  5.3353E-01
  prteigrs : nnsclo,ikpt=   30   87 max resid (incl. the buffer)=  2.14855E-08
 Non-SCF case, kpt   88 (  0.01667  0.01667  0.01667), residuals and eigenvalues=
  3.47E-13  3.02E-13  7.77E-13  6.58E-13  6.60E-13  7.34E-13  5.72E-13  4.44E-13
  1.69E-13  3.09E-13  5.89E-13  2.32E-13  3.77E-13  7.16E-13  4.02E-13  4.98E-13
  5.60E-13  1.74E-13  2.70E-13  7.34E-13  5.88E-13  4.51E-13  6.11E-13  3.17E-13
  3.85E-13  1.70E-13  3.41E-13  5.10E-13  8.04E-08  2.22E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6657E-01 -4.2250E-01
 -3.7685E-01 -3.7685E-01 -3.0679E-01 -3.0679E-01 -3.0666E-01  1.0200E-01
  1.0233E-01  1.0233E-01  1.7265E-01  1.7265E-01  1.7353E-01  2.0396E-01
  2.0447E-01  2.0447E-01  2.5735E-01  2.5748E-01  2.5748E-01  3.4148E-01
  3.4148E-01  4.1958E-01  4.1958E-01  4.6006E-01  5.3327E-01  5.3333E-01
  prteigrs : nnsclo,ikpt=   30   88 max resid (incl. the buffer)=  8.04152E-08
 Non-SCF case, kpt   89 (  0.01111  0.01111  0.01111), residuals and eigenvalues=
  3.49E-13  3.37E-13  8.54E-13  6.53E-13  6.67E-13  6.38E-13  6.65E-13  5.37E-13
  1.67E-13  3.63E-13  5.80E-13  2.77E-13  3.96E-13  8.73E-13  4.30E-13  5.77E-13
  5.63E-13  1.91E-13  3.78E-13  8.27E-13  3.33E-13  6.56E-13  4.81E-13  2.82E-13
  3.57E-13  7.57E-13  3.79E-13  4.51E-13  4.99E-09  9.11E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6658E-01 -4.2250E-01
 -3.7683E-01 -3.7683E-01 -3.0682E-01 -3.0682E-01 -3.0676E-01  1.0221E-01
  1.0236E-01  1.0236E-01  1.7308E-01  1.7308E-01  1.7347E-01  2.0450E-01
  2.0473E-01  2.0473E-01  2.5703E-01  2.5709E-01  2.5709E-01  3.4114E-01
  3.4114E-01  4.1926E-01  4.1926E-01  4.5964E-01  5.3316E-01  5.3319E-01
  prteigrs : nnsclo,ikpt=   30   89 max resid (incl. the buffer)=  4.98600E-09
 Non-SCF case, kpt   90 (  0.00556  0.00556  0.00556), residuals and eigenvalues=
  3.61E-13  5.57E-13  9.50E-13  6.78E-13  7.19E-13  6.67E-13  7.39E-13  6.30E-13
  1.86E-13  3.93E-13  4.84E-13  2.89E-13  3.22E-13  8.75E-13  4.36E-13  8.48E-13
  6.27E-13  7.49E-13  4.11E-13  7.31E-13  3.97E-13  5.59E-13  5.06E-13  2.53E-13
  3.60E-13  7.32E-13  3.66E-13  4.74E-13  1.71E-10  1.71E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6658E-01 -4.2250E-01
 -3.7681E-01 -3.7681E-01 -3.0684E-01 -3.0684E-01 -3.0682E-01  1.0234E-01
  1.0238E-01  1.0238E-01  1.7333E-01  1.7333E-01  1.7343E-01  2.0483E-01
  2.0489E-01  2.0489E-01  2.5684E-01  2.5686E-01  2.5686E-01  3.4094E-01
  3.4094E-01  4.1907E-01  4.1907E-01  4.5938E-01  5.3309E-01  5.3310E-01
  prteigrs : nnsclo,ikpt=   30   90 max resid (incl. the buffer)=  1.71097E-10
 Non-SCF case, kpt   91 (  0.00000  0.00000  0.00000), residuals and eigenvalues=
  3.84E-13  5.38E-13  3.04E-13  3.57E-13  8.55E-13  6.80E-13  2.28E-13  3.39E-13
  3.70E-13  1.44E-13  4.62E-13  6.02E-13  5.85E-13  8.94E-13  6.13E-13  1.93E-13
  5.48E-13  7.73E-13  2.20E-13  9.08E-13  2.22E-13  4.33E-13  7.96E-13  5.06E-13
  7.27E-13  8.97E-13  3.84E-13  2.65E-13  3.67E-13  9.32E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6658E-01 -4.2250E-01
 -3.7681E-01 -3.7681E-01 -3.0685E-01 -3.0685E-01 -3.0685E-01  1.0239E-01
  1.0239E-01  1.0239E-01  1.7342E-01  1.7342E-01  1.7342E-01  2.0494E-01
  2.0494E-01  2.0494E-01  2.5678E-01  2.5678E-01  2.5678E-01  3.4087E-01
  3.4087E-01  4.1900E-01  4.1900E-01  4.5930E-01  5.3307E-01  5.3307E-01
 Non-SCF case, kpt   92 (  0.01000  0.00000  0.00000), residuals and eigenvalues=
  3.85E-13  5.05E-13  4.03E-13  6.04E-13  8.42E-13  7.85E-13  6.29E-13  5.80E-13
  4.09E-13  3.60E-13  3.42E-13  6.56E-13  6.34E-13  6.55E-13  4.52E-13  6.11E-13
  3.31E-13  4.63E-13  7.63E-13  3.53E-13  2.25E-13  7.06E-13  6.84E-13  5.43E-13
  5.72E-13  2.19E-13  9.03E-13  8.92E-13  2.84E-09  2.42E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6658E-01 -4.2250E-01
 -3.7682E-01 -3.7681E-01 -3.0684E-01 -3.0684E-01 -3.0681E-01  1.0233E-01
  1.0238E-01  1.0238E-01  1.7335E-01  1.7335E-01  1.7338E-01  2.0480E-01
  2.0490E-01  2.0490E-01  2.5678E-01  2.5689E-01  2.5689E-01  3.4088E-01
  3.4102E-01  4.1907E-01  4.1908E-01  4.5939E-01  5.3307E-01  5.3312E-01
  prteigrs : nnsclo,ikpt=   30   92 max resid (incl. the buffer)=  2.83713E-09
 Non-SCF case, kpt   93 (  0.02000  0.00000  0.00000), residuals and eigenvalues=
  3.40E-13  4.90E-13  4.20E-13  1.29E-13  8.64E-13  9.23E-13  5.06E-13  4.31E-13
  4.58E-13  3.92E-13  3.14E-13  4.81E-13  3.95E-13  4.19E-13  1.77E-13  5.47E-13
  7.72E-13  4.42E-13  8.22E-13  2.34E-13  7.56E-13  4.77E-13  4.29E-13  6.71E-13
  4.41E-13  6.57E-13  6.23E-13  5.51E-13  2.74E-07  2.88E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6658E-01 -4.2250E-01
 -3.7685E-01 -3.7680E-01 -3.0684E-01 -3.0684E-01 -3.0672E-01  1.0216E-01
  1.0238E-01  1.0238E-01  1.7315E-01  1.7315E-01  1.7326E-01  2.0438E-01
  2.0476E-01  2.0476E-01  2.5679E-01  2.5725E-01  2.5725E-01  3.4088E-01
  3.4145E-01  4.1926E-01  4.1930E-01  4.5966E-01  5.3305E-01  5.3325E-01
  prteigrs : nnsclo,ikpt=   30   93 max resid (incl. the buffer)=  2.73701E-07
 Non-SCF case, kpt   94 (  0.03000  0.00000  0.00000), residuals and eigenvalues=
  3.05E-13  4.68E-13  5.71E-13  5.11E-13  5.82E-13  2.53E-13  2.12E-13  2.88E-13
  3.32E-13  2.79E-13  7.57E-13  2.17E-13  5.18E-13  2.72E-13  2.02E-13  2.19E-13
  1.95E-13  1.83E-13  4.09E-13  3.00E-13  2.78E-13  2.45E-13  7.81E-13  5.24E-13
  6.61E-13  8.38E-13  2.52E-13  6.10E-13  9.00E-07  8.50E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6657E-01 -4.2250E-01
 -3.7691E-01 -3.7679E-01 -3.0682E-01 -3.0682E-01 -3.0656E-01  1.0189E-01
  1.0236E-01  1.0236E-01  1.7282E-01  1.7282E-01  1.7307E-01  2.0368E-01
  2.0454E-01  2.0454E-01  2.5682E-01  2.5783E-01  2.5783E-01  3.4089E-01
  3.4215E-01  4.1960E-01  4.1966E-01  4.6012E-01  5.3312E-01  5.3348E-01
  prteigrs : nnsclo,ikpt=   30   94 max resid (incl. the buffer)=  9.00196E-07
 Non-SCF case, kpt   95 (  0.04000  0.00000  0.00000), residuals and eigenvalues=
  8.59E-13  3.93E-13  7.79E-13  4.02E-13  2.05E-13  7.93E-13  3.48E-13  3.27E-13
  3.88E-13  6.94E-13  3.66E-13  4.23E-13  4.70E-13  3.59E-13  3.33E-13  4.21E-13
  9.79E-13  5.15E-13  3.33E-13  6.98E-13  6.78E-13  8.52E-13  2.85E-13  8.39E-13
  3.52E-13  5.16E-13  6.74E-13  7.74E-13  3.58E-06  2.02E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6656E-01 -4.2250E-01
 -3.7698E-01 -3.7678E-01 -3.0681E-01 -3.0681E-01 -3.0634E-01  1.0150E-01
  1.0234E-01  1.0234E-01  1.7237E-01  1.7237E-01  1.7281E-01  2.0271E-01
  2.0424E-01  2.0424E-01  2.5685E-01  2.5862E-01  2.5862E-01  3.4090E-01
  3.4313E-01  4.2005E-01  4.2018E-01  4.6076E-01  5.3311E-01  5.3379E-01
  prteigrs : nnsclo,ikpt=   30   95 max resid (incl. the buffer)=  3.57971E-06
 Non-SCF case, kpt   96 (  0.05000  0.00000  0.00000), residuals and eigenvalues=
  4.96E-13  4.79E-13  3.30E-13  7.82E-13  8.56E-13  5.10E-13  2.54E-13  3.20E-13
  1.21E-13  6.07E-13  4.43E-13  8.34E-13  2.89E-13  3.76E-13  7.91E-13  2.93E-13
  6.20E-13  6.43E-13  7.59E-13  1.54E-13  9.40E-13  5.68E-13  4.09E-13  4.81E-13
  5.72E-13  3.66E-13  2.66E-13  5.30E-13  4.65E-06  2.49E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6655E-01 -4.2251E-01
 -3.7707E-01 -3.7677E-01 -3.0679E-01 -3.0679E-01 -3.0606E-01  1.0100E-01
  1.0232E-01  1.0232E-01  1.7178E-01  1.7178E-01  1.7246E-01  2.0150E-01
  2.0388E-01  2.0388E-01  2.5689E-01  2.5962E-01  2.5962E-01  3.4091E-01
  3.4435E-01  4.2064E-01  4.2083E-01  4.6157E-01  5.3332E-01  5.3419E-01
  prteigrs : nnsclo,ikpt=   30   96 max resid (incl. the buffer)=  4.65264E-06
 Non-SCF case, kpt   97 (  0.06000  0.00000  0.00000), residuals and eigenvalues=
  9.94E-13  5.36E-13  3.78E-13  8.84E-13  8.73E-13  7.13E-13  3.92E-13  7.95E-13
  2.65E-13  4.06E-13  7.46E-13  1.83E-13  6.28E-13  4.78E-13  5.52E-13  4.98E-13
  2.53E-13  4.03E-13  5.80E-13  8.50E-13  6.63E-13  5.09E-13  6.00E-13  3.33E-13
  4.71E-13  5.71E-13  7.23E-13  6.81E-13  5.34E-07  3.17E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6654E-01 -4.2251E-01
 -3.7718E-01 -3.7675E-01 -3.0676E-01 -3.0676E-01 -3.0572E-01  1.0039E-01
  1.0229E-01  1.0229E-01  1.7108E-01  1.7108E-01  1.7205E-01  2.0007E-01
  2.0346E-01  2.0346E-01  2.5693E-01  2.6080E-01  2.6080E-01  3.4092E-01
  3.4580E-01  4.2136E-01  4.2163E-01  4.6256E-01  5.3280E-01  5.3468E-01
  prteigrs : nnsclo,ikpt=   30   97 max resid (incl. the buffer)=  5.34062E-07
 Non-SCF case, kpt   98 (  0.07000  0.00000  0.00000), residuals and eigenvalues=
  9.55E-13  6.09E-13  4.15E-13  9.41E-13  8.75E-13  7.39E-13  3.76E-13  7.61E-13
  2.65E-13  4.11E-13  7.29E-13  9.82E-13  4.92E-13  6.01E-13  6.68E-13  4.85E-13
  2.64E-13  3.44E-13  5.81E-13  7.97E-13  7.03E-13  6.35E-13  6.78E-13  9.26E-13
  5.81E-13  4.19E-13  7.10E-13  8.81E-13  1.10E-06  3.65E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6652E-01 -4.2252E-01
 -3.7730E-01 -3.7673E-01 -3.0673E-01 -3.0673E-01 -3.0533E-01  9.9685E-02
  1.0226E-01  1.0226E-01  1.7027E-01  1.7027E-01  1.7157E-01  1.9842E-01
  2.0300E-01  2.0300E-01  2.5699E-01  2.6215E-01  2.6215E-01  3.4094E-01
  3.4747E-01  4.2220E-01  4.2256E-01  4.6373E-01  5.3271E-01  5.3525E-01
  prteigrs : nnsclo,ikpt=   30   98 max resid (incl. the buffer)=  1.10457E-06
 Non-SCF case, kpt   99 (  0.08000  0.00000  0.00000), residuals and eigenvalues=
  9.90E-13  6.39E-13  4.15E-13  8.91E-13  8.95E-13  7.44E-13  4.74E-13  7.46E-13
  2.74E-13  4.29E-13  6.16E-13  2.15E-13  6.62E-13  5.36E-13  8.14E-13  3.94E-13
  6.79E-13  8.02E-13  2.41E-13  5.15E-13  3.37E-13  5.99E-13  6.97E-13  4.92E-13
  5.86E-13  2.86E-13  7.48E-13  6.00E-13  2.59E-06  3.94E-13
 -2.1023E+00 -1.1532E+00 -1.1531E+00 -1.1531E+00 -9.6650E-01 -4.2254E-01
 -3.7742E-01 -3.7670E-01 -3.0670E-01 -3.0670E-01 -3.0489E-01  9.8877E-02
  1.0222E-01  1.0222E-01  1.6934E-01  1.6934E-01  1.7102E-01  1.9658E-01
  2.0250E-01  2.0250E-01  2.5705E-01  2.6365E-01  2.6365E-01  3.4095E-01
  3.4932E-01  4.2317E-01  4.2362E-01  4.6507E-01  5.3263E-01  5.3591E-01
  prteigrs : nnsclo,ikpt=   30   99 max resid (incl. the buffer)=  2.59060E-06
 Non-SCF case, kpt  100 (  0.09000  0.00000  0.00000), residuals and eigenvalues=
  2.05E-13  6.70E-13  4.53E-13  8.74E-13  8.86E-13  7.59E-13  4.66E-13  6.11E-13
  2.47E-13  3.85E-13  6.91E-13  1.77E-13  6.27E-13  5.61E-13  4.74E-13  3.13E-13
  7.50E-13  9.71E-13  4.39E-13  7.03E-13  3.62E-13  4.43E-13  3.72E-13  4.44E-13
  9.44E-13  5.24E-13  8.58E-13  8.34E-13  5.58E-06  4.30E-13
 -2.1023E+00 -1.1532E+00 -1.1531E+00 -1.1531E+00 -9.6648E-01 -4.2256E-01
 -3.7755E-01 -3.7667E-01 -3.0666E-01 -3.0666E-01 -3.0440E-01  9.7971E-02
  1.0218E-01  1.0218E-01  1.6832E-01  1.6832E-01  1.7041E-01  1.9458E-01
  2.0199E-01  2.0199E-01  2.5713E-01  2.6528E-01  2.6528E-01  3.4097E-01
  3.5135E-01  4.2426E-01  4.2481E-01  4.6657E-01  5.3254E-01  5.3664E-01
  prteigrs : nnsclo,ikpt=   30  100 max resid (incl. the buffer)=  5.58379E-06
 Non-SCF case, kpt  101 (  0.10000  0.00000  0.00000), residuals and eigenvalues=
  9.92E-13  2.97E-13  2.80E-13  9.40E-13  7.91E-13  6.19E-13  2.67E-13  7.08E-13
  1.56E-13  6.98E-13  6.25E-13  4.12E-13  3.69E-13  8.22E-13  1.01E-13  2.48E-13
  7.12E-13  3.63E-13  6.04E-13  2.23E-13  8.85E-13  6.74E-13  2.40E-13  5.85E-13
  7.21E-13  5.74E-13  2.22E-13  3.97E-13  5.27E-06  3.37E-13
 -2.1023E+00 -1.1532E+00 -1.1531E+00 -1.1531E+00 -9.6646E-01 -4.2259E-01
 -3.7768E-01 -3.7664E-01 -3.0662E-01 -3.0662E-01 -3.0386E-01  9.6971E-02
  1.0213E-01  1.0213E-01  1.6722E-01  1.6722E-01  1.6974E-01  1.9244E-01
  2.0146E-01  2.0146E-01  2.5720E-01  2.6703E-01  2.6703E-01  3.4099E-01
  3.5352E-01  4.2547E-01  4.2612E-01  4.6824E-01  5.3226E-01  5.3745E-01
  prteigrs : nnsclo,ikpt=   30  101 max resid (incl. the buffer)=  5.26804E-06
 Non-SCF case, kpt  102 (  0.11000  0.00000  0.00000), residuals and eigenvalues=
  3.22E-13  4.40E-13  7.68E-13  3.78E-13  2.92E-13  4.31E-13  4.44E-13  8.79E-13
  2.50E-13  1.05E-13  9.77E-13  8.95E-13  4.11E-13  3.99E-13  1.88E-13  7.70E-13
  6.22E-13  2.83E-13  3.11E-13  4.39E-13  4.93E-13  3.11E-13  3.01E-13  4.32E-13
  9.90E-13  2.16E-13  8.73E-13  2.81E-13  1.29E-07  7.03E-13
 -2.1023E+00 -1.1532E+00 -1.1531E+00 -1.1531E+00 -9.6644E-01 -4.2263E-01
 -3.7781E-01 -3.7661E-01 -3.0657E-01 -3.0657E-01 -3.0328E-01  9.5881E-02
  1.0208E-01  1.0208E-01  1.6603E-01  1.6603E-01  1.6902E-01  1.9018E-01
  2.0092E-01  2.0092E-01  2.5729E-01  2.6887E-01  2.6887E-01  3.4101E-01
  3.5581E-01  4.2681E-01  4.2755E-01  4.7007E-01  5.3208E-01  5.3834E-01
  prteigrs : nnsclo,ikpt=   30  102 max resid (incl. the buffer)=  1.28830E-07
 Non-SCF case, kpt  103 (  0.12000  0.00000  0.00000), residuals and eigenvalues=
  6.76E-13  6.74E-13  5.75E-13  7.84E-13  4.60E-13  5.57E-13  2.80E-13  3.15E-13
  1.58E-13  3.83E-13  4.60E-13  5.27E-13  3.89E-13  3.73E-13  2.32E-13  2.50E-13
  2.98E-13  3.89E-13  3.22E-13  3.84E-13  5.25E-13  4.01E-13  2.50E-13  8.21E-13
  2.71E-13  3.81E-13  7.67E-13  2.92E-13  1.81E-07  5.05E-13
 -2.1023E+00 -1.1533E+00 -1.1531E+00 -1.1531E+00 -9.6641E-01 -4.2268E-01
 -3.7793E-01 -3.7657E-01 -3.0652E-01 -3.0652E-01 -3.0267E-01  9.4707E-02
  1.0203E-01  1.0203E-01  1.6477E-01  1.6477E-01  1.6825E-01  1.8782E-01
  2.0038E-01  2.0038E-01  2.5739E-01  2.7081E-01  2.7081E-01  3.4104E-01
  3.5821E-01  4.2825E-01  4.2910E-01  4.7206E-01  5.3190E-01  5.3929E-01
  prteigrs : nnsclo,ikpt=   30  103 max resid (incl. the buffer)=  1.81498E-07
 Non-SCF case, kpt  104 (  0.13000  0.00000  0.00000), residuals and eigenvalues=
  7.05E-13  7.21E-13  4.32E-13  4.78E-13  4.55E-13  5.01E-13  2.50E-13  2.57E-13
  2.26E-13  3.29E-13  3.72E-13  6.64E-13  4.05E-13  8.14E-13  2.56E-13  2.34E-13
  2.87E-13  5.32E-13  3.32E-13  4.53E-13  5.01E-13  3.22E-13  7.58E-13  5.92E-13
  3.29E-13  4.91E-13  8.16E-13  9.73E-13  2.26E-06  3.50E-13
 -2.1023E+00 -1.1533E+00 -1.1531E+00 -1.1531E+00 -9.6638E-01 -4.2274E-01
 -3.7804E-01 -3.7653E-01 -3.0647E-01 -3.0647E-01 -3.0202E-01  9.3451E-02
  1.0197E-01  1.0197E-01  1.6344E-01  1.6344E-01  1.6743E-01  1.8538E-01
  1.9984E-01  1.9984E-01  2.5749E-01  2.7281E-01  2.7281E-01  3.4106E-01
  3.6070E-01  4.2981E-01  4.3074E-01  4.7420E-01  5.3174E-01  5.4032E-01
  prteigrs : nnsclo,ikpt=   30  104 max resid (incl. the buffer)=  2.25612E-06
 Non-SCF case, kpt  105 (  0.14000  0.00000  0.00000), residuals and eigenvalues=
  3.36E-13  2.57E-13  5.97E-13  2.41E-13  6.34E-13  6.23E-13  8.01E-13  2.82E-13
  2.18E-13  3.49E-13  3.64E-13  4.46E-13  3.64E-13  7.89E-13  4.30E-13  1.28E-13
  9.06E-13  5.37E-13  3.16E-13  7.77E-13  7.95E-13  7.12E-13  2.90E-13  6.03E-13
  4.13E-13  2.31E-13  5.26E-13  6.10E-13  4.83E-05  3.18E-13
 -2.1023E+00 -1.1533E+00 -1.1531E+00 -1.1531E+00 -9.6636E-01 -4.2282E-01
 -3.7814E-01 -3.7649E-01 -3.0641E-01 -3.0641E-01 -3.0134E-01  9.2121E-02
  1.0191E-01  1.0191E-01  1.6207E-01  1.6207E-01  1.6657E-01  1.8287E-01
  1.9931E-01  1.9931E-01  2.5759E-01  2.7487E-01  2.7487E-01  3.4108E-01
  3.6326E-01  4.3148E-01  4.3249E-01  4.7649E-01  5.3180E-01  5.4140E-01
  prteigrs : nnsclo,ikpt=   30  105 max resid (incl. the buffer)=  4.83282E-05
 Non-SCF case, kpt  106 (  0.15000  0.00000  0.00000), residuals and eigenvalues=
  4.07E-13  2.32E-13  9.25E-13  3.05E-13  3.92E-13  7.48E-13  9.80E-13  2.78E-13
  2.00E-13  8.80E-13  2.40E-13  7.63E-13  6.31E-13  8.48E-13  4.45E-13  1.86E-13
  3.89E-13  3.68E-13  5.02E-13  6.10E-13  5.77E-13  3.54E-13  8.95E-13  2.57E-13
  3.19E-13  8.20E-13  4.25E-13  7.36E-13  1.55E-05  4.27E-13
 -2.1023E+00 -1.1534E+00 -1.1531E+00 -1.1531E+00 -9.6632E-01 -4.2291E-01
 -3.7822E-01 -3.7644E-01 -3.0635E-01 -3.0635E-01 -3.0064E-01  9.0720E-02
  1.0185E-01  1.0185E-01  1.6065E-01  1.6065E-01  1.6568E-01  1.8031E-01
  1.9878E-01  1.9878E-01  2.5771E-01  2.7698E-01  2.7698E-01  3.4111E-01
  3.6586E-01  4.3326E-01  4.3432E-01  4.7892E-01  5.3137E-01  5.4255E-01
  prteigrs : nnsclo,ikpt=   30  106 max resid (incl. the buffer)=  1.54765E-05
 Non-SCF case, kpt  107 (  0.16000  0.00000  0.00000), residuals and eigenvalues=
  4.92E-13  6.17E-13  9.59E-13  2.55E-13  7.90E-13  4.13E-13  3.37E-13  2.48E-13
  3.47E-13  3.58E-13  4.62E-13  6.77E-13  6.52E-13  5.04E-13  9.20E-13  5.01E-13
  3.49E-13  6.25E-13  9.88E-13  6.99E-13  6.72E-13  1.35E-13  3.35E-13  3.08E-13
  9.27E-13  5.38E-13  6.85E-13  1.58E-13  5.13E-07  6.17E-13
 -2.1023E+00 -1.1534E+00 -1.1531E+00 -1.1531E+00 -9.6629E-01 -4.2302E-01
 -3.7827E-01 -3.7640E-01 -3.0629E-01 -3.0629E-01 -2.9992E-01  8.9254E-02
  1.0178E-01  1.0178E-01  1.5919E-01  1.5919E-01  1.6475E-01  1.7773E-01
  1.9826E-01  1.9826E-01  2.5782E-01  2.7913E-01  2.7913E-01  3.4113E-01
  3.6851E-01  4.3513E-01  4.3624E-01  4.8148E-01  5.3106E-01  5.4375E-01
  prteigrs : nnsclo,ikpt=   30  107 max resid (incl. the buffer)=  5.12561E-07
 Non-SCF case, kpt  108 (  0.17000  0.00000  0.00000), residuals and eigenvalues=
  4.75E-13  6.04E-13  2.26E-13  2.65E-13  8.09E-13  3.91E-13  3.36E-13  2.71E-13
  3.54E-13  3.64E-13  4.96E-13  7.03E-13  6.43E-13  5.10E-13  8.56E-13  3.86E-13
  3.07E-13  6.18E-13  4.87E-13  6.25E-13  6.60E-13  5.66E-13  4.89E-13  3.42E-13
  8.89E-13  5.18E-13  8.37E-13  2.61E-13  5.85E-07  7.36E-13
 -2.1023E+00 -1.1534E+00 -1.1531E+00 -1.1531E+00 -9.6626E-01 -4.2315E-01
 -3.7830E-01 -3.7635E-01 -3.0622E-01 -3.0622E-01 -2.9917E-01  8.7730E-02
  1.0172E-01  1.0172E-01  1.5771E-01  1.5771E-01  1.6380E-01  1.7513E-01
  1.9774E-01  1.9774E-01  2.5795E-01  2.8130E-01  2.8130E-01  3.4115E-01
  3.7117E-01  4.3710E-01  4.3824E-01  4.8418E-01  5.3082E-01  5.4501E-01
  prteigrs : nnsclo,ikpt=   30  108 max resid (incl. the buffer)=  5.85273E-07
 Non-SCF case, kpt  109 (  0.18000  0.00000  0.00000), residuals and eigenvalues=
  5.27E-13  6.17E-13  5.04E-13  3.84E-13  6.84E-13  2.82E-13  6.28E-13  5.05E-13
  3.85E-13  6.39E-13  9.78E-13  4.85E-13  4.98E-13  1.97E-13  5.28E-13  3.86E-13
  2.87E-13  4.61E-13  8.57E-13  5.94E-13  2.01E-13  4.52E-13  4.08E-13  6.70E-13
  6.14E-13  7.00E-13  1.88E-13  9.44E-13  2.31E-07  4.61E-13
 -2.1023E+00 -1.1535E+00 -1.1531E+00 -1.1531E+00 -9.6622E-01 -4.2329E-01
 -3.7831E-01 -3.7630E-01 -3.0615E-01 -3.0615E-01 -2.9842E-01  8.6153E-02
  1.0165E-01  1.0165E-01  1.5622E-01  1.5622E-01  1.6282E-01  1.7253E-01
  1.9724E-01  1.9724E-01  2.5807E-01  2.8350E-01  2.8350E-01  3.4118E-01
  3.7385E-01  4.3917E-01  4.4030E-01  4.8701E-01  5.3057E-01  5.4631E-01
  prteigrs : nnsclo,ikpt=   30  109 max resid (incl. the buffer)=  2.31405E-07
 Non-SCF case, kpt  110 (  0.19000  0.00000  0.00000), residuals and eigenvalues=
  3.69E-13  2.71E-13  4.87E-13  2.10E-13  4.23E-13  5.43E-13  5.79E-13  8.82E-13
  3.23E-13  2.96E-13  4.08E-13  8.57E-13  6.24E-13  5.53E-13  5.39E-13  8.79E-13
  4.04E-13  4.06E-13  4.94E-13  2.09E-13  8.63E-13  3.42E-13  1.92E-13  8.23E-13
  5.69E-13  8.77E-13  8.67E-13  8.77E-13  1.31E-08  1.85E-13
 -2.1023E+00 -1.1535E+00 -1.1531E+00 -1.1531E+00 -9.6619E-01 -4.2345E-01
 -3.7829E-01 -3.7625E-01 -3.0608E-01 -3.0608E-01 -2.9765E-01  8.4530E-02
  1.0159E-01  1.0159E-01  1.5471E-01  1.5471E-01  1.6183E-01  1.6993E-01
  1.9675E-01  1.9675E-01  2.5821E-01  2.8570E-01  2.8570E-01  3.4120E-01
  3.7653E-01  4.4131E-01  4.4243E-01  4.8996E-01  5.3032E-01  5.4765E-01
  prteigrs : nnsclo,ikpt=   30  110 max resid (incl. the buffer)=  1.31330E-08
 Non-SCF case, kpt  111 (  0.20000  0.00000  0.00000), residuals and eigenvalues=
  2.85E-13  2.92E-13  4.63E-13  2.64E-13  4.41E-13  8.86E-13  4.84E-13  6.81E-13
  4.10E-13  1.73E-13  4.45E-13  2.14E-13  4.16E-13  2.43E-13  6.69E-13  4.28E-13
  4.34E-13  3.01E-13  4.99E-13  1.81E-13  5.11E-13  3.56E-13  1.89E-13  8.61E-13
  2.92E-13  3.92E-13  6.50E-13  3.69E-13  7.12E-10  2.39E-13
 -2.1023E+00 -1.1536E+00 -1.1531E+00 -1.1531E+00 -9.6615E-01 -4.2363E-01
 -3.7823E-01 -3.7620E-01 -3.0601E-01 -3.0601E-01 -2.9688E-01  8.2866E-02
  1.0152E-01  1.0152E-01  1.5319E-01  1.5319E-01  1.6082E-01  1.6735E-01
  1.9627E-01  1.9627E-01  2.5834E-01  2.8791E-01  2.8791E-01  3.4123E-01
  3.7919E-01  4.4354E-01  4.4461E-01  4.9304E-01  5.3006E-01  5.4903E-01
  prteigrs : nnsclo,ikpt=   30  111 max resid (incl. the buffer)=  7.11972E-10
 Non-SCF case, kpt  112 (  0.21000  0.00000  0.00000), residuals and eigenvalues=
  2.63E-13  2.72E-13  4.36E-13  2.30E-13  4.34E-13  9.05E-13  4.97E-13  5.94E-13
  3.72E-13  1.97E-13  4.24E-13  9.42E-13  7.78E-13  4.87E-13  5.39E-13  4.61E-13
  6.23E-13  2.44E-13  3.56E-13  2.32E-13  5.56E-13  3.81E-13  1.72E-13  8.68E-13
  3.26E-13  5.24E-13  8.11E-13  7.04E-13  1.85E-10  3.23E-13
 -2.1023E+00 -1.1536E+00 -1.1531E+00 -1.1531E+00 -9.6611E-01 -4.2382E-01
 -3.7815E-01 -3.7614E-01 -3.0594E-01 -3.0594E-01 -2.9610E-01  8.1169E-02
  1.0145E-01  1.0145E-01  1.5167E-01  1.5167E-01  1.5980E-01  1.6480E-01
  1.9579E-01  1.9579E-01  2.5848E-01  2.9012E-01  2.9012E-01  3.4125E-01
  3.8184E-01  4.4585E-01  4.4684E-01  4.9622E-01  5.2980E-01  5.5044E-01
  prteigrs : nnsclo,ikpt=   30  112 max resid (incl. the buffer)=  1.84652E-10
 Non-SCF case, kpt  113 (  0.22000  0.00000  0.00000), residuals and eigenvalues=
  8.72E-13  2.25E-13  1.94E-13  2.79E-13  7.88E-13  7.29E-13  6.18E-13  4.02E-13
  3.35E-13  7.92E-13  2.69E-13  9.65E-13  4.07E-13  1.79E-13  4.48E-13  3.55E-13
  8.51E-13  5.37E-13  7.55E-13  5.04E-13  1.93E-13  3.77E-13  2.68E-13  6.05E-13
  1.83E-13  9.69E-13  7.02E-13  9.10E-13  1.71E-08  9.24E-13
 -2.1023E+00 -1.1536E+00 -1.1531E+00 -1.1531E+00 -9.6607E-01 -4.2404E-01
 -3.7804E-01 -3.7609E-01 -3.0587E-01 -3.0587E-01 -2.9532E-01  7.9445E-02
  1.0139E-01  1.0139E-01  1.5017E-01  1.5017E-01  1.5878E-01  1.6228E-01
  1.9533E-01  1.9533E-01  2.5862E-01  2.9231E-01  2.9231E-01  3.4127E-01
  3.8445E-01  4.4821E-01  4.4911E-01  4.9952E-01  5.2953E-01  5.5188E-01
  prteigrs : nnsclo,ikpt=   30  113 max resid (incl. the buffer)=  1.70772E-08
 Non-SCF case, kpt  114 (  0.23000  0.00000  0.00000), residuals and eigenvalues=
  2.55E-13  3.21E-13  1.95E-13  2.52E-13  7.63E-13  5.45E-13  8.98E-13  4.08E-13
  9.26E-13  8.17E-13  2.75E-13  8.04E-13  4.30E-13  1.73E-13  3.39E-13  5.38E-13
  7.17E-13  4.26E-13  7.64E-13  2.81E-13  1.76E-13  5.03E-13  5.72E-13  5.99E-13
  2.73E-13  2.06E-13  7.47E-13  8.46E-13  2.35E-08  8.12E-13
 -2.1023E+00 -1.1537E+00 -1.1531E+00 -1.1531E+00 -9.6604E-01 -4.2427E-01
 -3.7789E-01 -3.7603E-01 -3.0579E-01 -3.0579E-01 -2.9454E-01  7.7701E-02
  1.0132E-01  1.0132E-01  1.4867E-01  1.4867E-01  1.5776E-01  1.5980E-01
  1.9488E-01  1.9488E-01  2.5876E-01  2.9449E-01  2.9449E-01  3.4130E-01
  3.8703E-01  4.5064E-01  4.5140E-01  5.0292E-01  5.2925E-01  5.5334E-01
  prteigrs : nnsclo,ikpt=   30  114 max resid (incl. the buffer)=  2.35094E-08
 Non-SCF case, kpt  115 (  0.24000  0.00000  0.00000), residuals and eigenvalues=
  2.92E-13  2.51E-13  5.33E-13  3.73E-13  2.64E-13  6.55E-13  6.37E-13  2.06E-13
  3.46E-13  6.56E-13  3.14E-13  1.96E-13  8.45E-13  6.11E-13  2.35E-13  7.09E-13
  5.22E-13  1.69E-13  2.74E-13  8.39E-13  5.50E-13  6.40E-13  3.23E-13  9.12E-13
  1.35E-13  9.81E-13  7.94E-13  2.89E-13  2.11E-10  5.84E-13
 -2.1023E+00 -1.1537E+00 -1.1531E+00 -1.1531E+00 -9.6600E-01 -4.2452E-01
 -3.7772E-01 -3.7598E-01 -3.0571E-01 -3.0571E-01 -2.9378E-01  7.5944E-02
  1.0126E-01  1.0126E-01  1.4719E-01  1.4719E-01  1.5674E-01  1.5739E-01
  1.9444E-01  1.9444E-01  2.5891E-01  2.9665E-01  2.9665E-01  3.4132E-01
  3.8957E-01  4.5312E-01  4.5372E-01  5.0642E-01  5.2897E-01  5.5481E-01
  prteigrs : nnsclo,ikpt=   30  115 max resid (incl. the buffer)=  2.11027E-10
 Non-SCF case, kpt  116 (  0.25000  0.00000  0.00000), residuals and eigenvalues=
  2.53E-13  3.19E-13  6.36E-13  2.87E-13  2.23E-13  6.26E-13  7.23E-13  2.59E-13
  3.79E-13  4.41E-13  3.55E-13  2.03E-13  6.09E-13  5.93E-13  8.60E-13  4.73E-13
  2.68E-13  7.02E-13  2.66E-13  5.94E-13  2.42E-13  7.73E-13  4.87E-13  5.32E-13
  2.46E-13  2.73E-13  9.55E-13  9.78E-13  1.18E-12  4.77E-13
 -2.1023E+00 -1.1538E+00 -1.1530E+00 -1.1530E+00 -9.6596E-01 -4.2478E-01
 -3.7752E-01 -3.7592E-01 -3.0564E-01 -3.0564E-01 -2.9302E-01  7.4180E-02
  1.0120E-01  1.0120E-01  1.4573E-01  1.4573E-01  1.5502E-01  1.5573E-01
  1.9401E-01  1.9401E-01  2.5905E-01  2.9877E-01  2.9877E-01  3.4134E-01
  3.9205E-01  4.5565E-01  4.5604E-01  5.1002E-01  5.2869E-01  5.5630E-01
  prteigrs : nnsclo,ikpt=   30  116 max resid (incl. the buffer)=  1.17924E-12
 Non-SCF case, kpt  117 (  0.26000  0.00000  0.00000), residuals and eigenvalues=
  9.78E-13  3.65E-13  7.38E-13  3.05E-13  1.88E-13  8.22E-13  6.13E-13  3.00E-13
  4.43E-13  4.17E-13  3.37E-13  1.77E-13  5.54E-13  5.35E-13  7.48E-13  4.98E-13
  4.08E-13  8.15E-13  2.75E-13  5.40E-13  2.02E-13  2.53E-13  3.33E-13  5.17E-13
  3.64E-13  2.58E-13  7.22E-13  7.18E-13  5.19E-13  8.91E-13
 -2.1023E+00 -1.1538E+00 -1.1530E+00 -1.1530E+00 -9.6592E-01 -4.2505E-01
 -3.7729E-01 -3.7586E-01 -3.0556E-01 -3.0556E-01 -2.9227E-01  7.2417E-02
  1.0114E-01  1.0114E-01  1.4430E-01  1.4430E-01  1.5272E-01  1.5472E-01
  1.9360E-01  1.9360E-01  2.5920E-01  3.0086E-01  3.0086E-01  3.4136E-01
  3.9447E-01  4.5821E-01  4.5837E-01  5.1372E-01  5.2841E-01  5.5779E-01
 Non-SCF case, kpt  118 (  0.27000  0.00000  0.00000), residuals and eigenvalues=
  9.53E-13  4.93E-13  5.62E-13  2.01E-13  4.26E-13  6.04E-13  2.39E-13  5.03E-13
  4.39E-13  1.81E-13  3.84E-13  9.18E-13  4.06E-13  6.02E-13  2.87E-13  7.08E-13
  3.49E-13  2.90E-13  4.97E-13  3.07E-13  4.39E-13  4.82E-13  6.98E-13  7.22E-13
  7.84E-13  7.68E-13  1.53E-13  9.93E-13  9.95E-13  3.62E-13
 -2.1023E+00 -1.1539E+00 -1.1530E+00 -1.1530E+00 -9.6588E-01 -4.2533E-01
 -3.7703E-01 -3.7581E-01 -3.0548E-01 -3.0548E-01 -2.9153E-01  7.0660E-02
  1.0109E-01  1.0109E-01  1.4289E-01  1.4289E-01  1.5049E-01  1.5374E-01
  1.9320E-01  1.9320E-01  2.5934E-01  3.0291E-01  3.0291E-01  3.4138E-01
  3.9683E-01  4.6070E-01  4.6079E-01  5.1751E-01  5.2813E-01  5.5927E-01
 Non-SCF case, kpt  119 (  0.28000  0.00000  0.00000), residuals and eigenvalues=
  8.93E-13  6.25E-13  5.41E-13  2.74E-13  3.37E-13  4.18E-13  9.39E-13  4.10E-13
  3.93E-13  2.21E-13  4.06E-13  8.72E-13  3.14E-13  5.35E-13  2.58E-13  6.15E-13
  4.06E-13  3.10E-13  8.11E-13  5.10E-13  4.19E-13  4.06E-13  5.80E-13  5.53E-13
  2.09E-13  2.07E-13  9.72E-13  9.08E-13  5.27E-13  7.61E-13
 -2.1023E+00 -1.1539E+00 -1.1530E+00 -1.1530E+00 -9.6584E-01 -4.2562E-01
 -3.7676E-01 -3.7575E-01 -3.0541E-01 -3.0541E-01 -2.9081E-01  6.8919E-02
  1.0104E-01  1.0104E-01  1.4152E-01  1.4152E-01  1.4832E-01  1.5277E-01
  1.9281E-01  1.9281E-01  2.5949E-01  3.0492E-01  3.0492E-01  3.4140E-01
  3.9913E-01  4.6301E-01  4.6339E-01  5.2140E-01  5.2786E-01  5.6075E-01
 Non-SCF case, kpt  120 (  0.29000  0.00000  0.00000), residuals and eigenvalues=
  9.04E-13  6.66E-13  5.33E-13  5.01E-13  2.96E-13  3.21E-13  9.64E-13  2.74E-13
  3.58E-13  2.25E-13  4.40E-13  7.47E-13  2.14E-13  3.16E-13  3.44E-13  6.58E-13
  6.22E-13  2.50E-13  6.18E-13  8.42E-13  2.89E-13  5.78E-13  7.20E-13  3.97E-13
  2.74E-13  9.93E-13  7.85E-13  9.26E-13  4.15E-13  8.21E-13
 -2.1023E+00 -1.1539E+00 -1.1530E+00 -1.1530E+00 -9.6580E-01 -4.2592E-01
 -3.7646E-01 -3.7570E-01 -3.0533E-01 -3.0533E-01 -2.9011E-01  6.7200E-02
  1.0100E-01  1.0100E-01  1.4019E-01  1.4019E-01  1.4624E-01  1.5182E-01
  1.9243E-01  1.9243E-01  2.5963E-01  3.0687E-01  3.0687E-01  3.4142E-01
  4.0135E-01  4.6530E-01  4.6599E-01  5.2537E-01  5.2758E-01  5.6221E-01
 Non-SCF case, kpt  121 (  0.30000  0.00000  0.00000), residuals and eigenvalues=
  1.69E-13  5.99E-13  5.12E-13  6.29E-13  2.69E-13  3.32E-13  7.29E-13  2.53E-13
  3.12E-13  2.13E-13  3.87E-13  3.12E-13  2.56E-13  6.08E-13  4.30E-13  6.28E-13
  9.32E-13  2.69E-13  8.92E-13  1.75E-13  2.19E-13  3.26E-13  1.70E-13  6.15E-13
  3.27E-13  3.44E-13  3.30E-13  2.39E-13  6.98E-13  3.81E-13
 -2.1023E+00 -1.1540E+00 -1.1530E+00 -1.1530E+00 -9.6576E-01 -4.2623E-01
 -3.7615E-01 -3.7564E-01 -3.0526E-01 -3.0526E-01 -2.8943E-01  6.5508E-02
  1.0096E-01  1.0096E-01  1.3889E-01  1.3889E-01  1.4423E-01  1.5090E-01
  1.9207E-01  1.9207E-01  2.5977E-01  3.0877E-01  3.0877E-01  3.4144E-01
  4.0350E-01  4.6756E-01  4.6859E-01  5.2731E-01  5.2942E-01  5.6366E-01
 Non-SCF case, kpt  122 (  0.31000  0.00000  0.00000), residuals and eigenvalues=
  4.56E-13  8.29E-13  8.22E-13  3.90E-13  9.63E-13  2.82E-13  3.30E-13  2.58E-13
  5.58E-13  4.61E-13  4.51E-13  3.93E-13  2.60E-13  7.09E-13  9.96E-13  8.39E-13
  3.36E-13  9.57E-13  5.69E-13  4.84E-13  4.81E-13  3.41E-13  4.27E-13  3.48E-13
  7.69E-13  8.09E-13  3.46E-13  6.84E-13  5.88E-13  7.40E-13
 -2.1023E+00 -1.1540E+00 -1.1530E+00 -1.1530E+00 -9.6573E-01 -4.2653E-01
 -3.7582E-01 -3.7559E-01 -3.0519E-01 -3.0519E-01 -2.8878E-01  6.3852E-02
  1.0092E-01  1.0092E-01  1.3763E-01  1.3763E-01  1.4231E-01  1.5000E-01
  1.9172E-01  1.9172E-01  2.5991E-01  3.1061E-01  3.1061E-01  3.4145E-01
  4.0556E-01  4.6978E-01  4.7117E-01  5.2704E-01  5.3356E-01  5.6508E-01
 Non-SCF case, kpt  123 (  0.32000  0.00000  0.00000), residuals and eigenvalues=
  4.40E-13  8.32E-13  8.12E-13  3.49E-13  9.63E-13  3.04E-13  3.15E-13  4.37E-13
  3.97E-13  4.69E-13  4.82E-13  4.02E-13  1.58E-13  3.11E-13  3.34E-13  1.66E-13
  8.95E-13  1.67E-13  6.82E-13  5.14E-13  3.82E-13  5.57E-13  7.09E-13  4.76E-13
  5.06E-13  3.70E-13  1.78E-13  5.55E-13  1.28E-11  2.38E-13
 -2.1023E+00 -1.1541E+00 -1.1530E+00 -1.1530E+00 -9.6569E-01 -4.2684E-01
 -3.7554E-01 -3.7549E-01 -3.0512E-01 -3.0512E-01 -2.8814E-01  6.2237E-02
  1.0089E-01  1.0089E-01  1.3642E-01  1.3642E-01  1.4047E-01  1.4913E-01
  1.9139E-01  1.9139E-01  2.6004E-01  3.1239E-01  3.1239E-01  3.4147E-01
  4.0754E-01  4.7195E-01  4.7371E-01  5.2678E-01  5.3778E-01  5.6647E-01
  prteigrs : nnsclo,ikpt=   30  123 max resid (incl. the buffer)=  1.28470E-11
 Non-SCF case, kpt  124 (  0.33000  0.00000  0.00000), residuals and eigenvalues=
  4.32E-13  8.26E-13  8.01E-13  3.14E-13  9.63E-13  3.41E-13  3.97E-13  4.44E-13
  3.10E-13  5.21E-13  5.06E-13  3.99E-13  6.77E-13  6.17E-13  3.86E-13  2.42E-13
  5.20E-13  2.05E-13  6.47E-13  6.16E-13  3.96E-13  6.99E-13  9.28E-13  3.93E-13
  7.71E-13  6.29E-13  3.12E-13  9.11E-13  3.45E-09  5.07E-13
 -2.1023E+00 -1.1541E+00 -1.1530E+00 -1.1530E+00 -9.6566E-01 -4.2714E-01
 -3.7549E-01 -3.7514E-01 -3.0505E-01 -3.0505E-01 -2.8754E-01  6.0670E-02
  1.0086E-01  1.0086E-01  1.3526E-01  1.3526E-01  1.3872E-01  1.4830E-01
  1.9107E-01  1.9107E-01  2.6018E-01  3.1409E-01  3.1409E-01  3.4149E-01
  4.0943E-01  4.7406E-01  4.7622E-01  5.2653E-01  5.4208E-01  5.6782E-01
  prteigrs : nnsclo,ikpt=   30  124 max resid (incl. the buffer)=  3.44644E-09
 Non-SCF case, kpt  125 (  0.34000  0.00000  0.00000), residuals and eigenvalues=
  2.92E-13  2.97E-13  4.75E-13  1.49E-13  6.31E-13  8.12E-13  3.31E-13  2.89E-13
  7.20E-13  1.39E-13  5.21E-13  9.95E-13  3.10E-13  9.58E-13  6.19E-13  8.64E-13
  5.19E-13  7.58E-13  8.18E-13  8.40E-13  9.35E-13  8.83E-13  3.71E-13  6.24E-13
  9.18E-13  6.50E-13  2.54E-13  4.73E-13  3.97E-09  9.05E-13
 -2.1023E+00 -1.1541E+00 -1.1530E+00 -1.1530E+00 -9.6562E-01 -4.2744E-01
 -3.7544E-01 -3.7480E-01 -3.0498E-01 -3.0498E-01 -2.8696E-01  5.9157E-02
  1.0084E-01  1.0084E-01  1.3415E-01  1.3415E-01  1.3706E-01  1.4750E-01
  1.9076E-01  1.9076E-01  2.6030E-01  3.1573E-01  3.1573E-01  3.4150E-01
  4.1123E-01  4.7611E-01  4.7867E-01  5.2628E-01  5.4646E-01  5.6913E-01
  prteigrs : nnsclo,ikpt=   30  125 max resid (incl. the buffer)=  3.96977E-09
 Non-SCF case, kpt  126 (  0.35000  0.00000  0.00000), residuals and eigenvalues=
  3.04E-13  3.34E-13  4.84E-13  1.55E-13  6.49E-13  9.72E-13  3.77E-13  3.11E-13
  7.26E-13  2.30E-13  4.80E-13  1.55E-13  9.43E-13  8.07E-13  7.81E-13  3.58E-13
  5.22E-13  8.88E-13  3.94E-13  6.14E-13  1.73E-13  2.63E-13  4.92E-13  8.39E-13
  7.33E-13  4.80E-13  3.42E-13  8.46E-13  6.91E-08  4.92E-13
 -2.1023E+00 -1.1542E+00 -1.1530E+00 -1.1530E+00 -9.6559E-01 -4.2773E-01
 -3.7539E-01 -3.7445E-01 -3.0492E-01 -3.0492E-01 -2.8641E-01  5.7704E-02
  1.0083E-01  1.0083E-01  1.3309E-01  1.3309E-01  1.3549E-01  1.4674E-01
  1.9048E-01  1.9048E-01  2.6043E-01  3.1729E-01  3.1729E-01  3.4151E-01
  4.1293E-01  4.7809E-01  4.8106E-01  5.2605E-01  5.5091E-01  5.7039E-01
  prteigrs : nnsclo,ikpt=   30  126 max resid (incl. the buffer)=  6.91386E-08
 Non-SCF case, kpt  127 (  0.36000  0.00000  0.00000), residuals and eigenvalues=
  2.71E-13  6.33E-13  4.10E-13  5.50E-13  8.07E-13  2.32E-13  3.22E-13  6.14E-13
  4.90E-13  2.75E-13  2.93E-13  2.77E-13  9.96E-13  7.22E-13  6.77E-13  2.76E-13
  6.33E-13  9.89E-13  4.74E-13  9.93E-13  6.23E-13  5.92E-13  1.63E-13  8.32E-13
  8.23E-13  6.49E-13  2.04E-13  6.42E-13  8.93E-07  2.48E-13
 -2.1023E+00 -1.1542E+00 -1.1530E+00 -1.1530E+00 -9.6556E-01 -4.2801E-01
 -3.7535E-01 -3.7411E-01 -3.0486E-01 -3.0486E-01 -2.8589E-01  5.6316E-02
  1.0081E-01  1.0081E-01  1.3208E-01  1.3208E-01  1.3402E-01  1.4602E-01
  1.9021E-01  1.9021E-01  2.6054E-01  3.1876E-01  3.1876E-01  3.4153E-01
  4.1454E-01  4.7998E-01  4.8336E-01  5.2582E-01  5.5543E-01  5.7160E-01
  prteigrs : nnsclo,ikpt=   30  127 max resid (incl. the buffer)=  8.92779E-07
 Non-SCF case, kpt  128 (  0.37000  0.00000  0.00000), residuals and eigenvalues=
  3.01E-13  6.76E-13  9.82E-13  5.79E-13  7.75E-13  2.40E-13  3.10E-13  5.73E-13
  5.16E-13  3.11E-13  3.08E-13  2.99E-13  8.78E-13  9.12E-13  2.22E-13  2.40E-13
  7.52E-13  2.43E-13  2.79E-13  8.86E-13  7.70E-13  6.73E-13  2.43E-13  8.93E-13
  8.13E-13  4.19E-13  8.89E-13  9.77E-13  1.28E-06  5.85E-13
 -2.1023E+00 -1.1542E+00 -1.1530E+00 -1.1530E+00 -9.6553E-01 -4.2828E-01
 -3.7530E-01 -3.7377E-01 -3.0480E-01 -3.0480E-01 -2.8540E-01  5.4999E-02
  1.0081E-01  1.0081E-01  1.3113E-01  1.3113E-01  1.3264E-01  1.4534E-01
  1.8995E-01  1.8995E-01  2.6065E-01  3.2015E-01  3.2015E-01  3.4154E-01
  4.1604E-01  4.8179E-01  4.8558E-01  5.2561E-01  5.6002E-01  5.7275E-01
  prteigrs : nnsclo,ikpt=   30  128 max resid (incl. the buffer)=  1.27991E-06
 Non-SCF case, kpt  129 (  0.38000  0.00000  0.00000), residuals and eigenvalues=
  6.42E-13  3.36E-13  6.91E-13  7.93E-13  4.76E-13  6.09E-13  5.57E-13  7.30E-13
  4.82E-13  8.95E-13  9.25E-13  6.22E-13  3.53E-13  8.78E-13  6.26E-13  4.48E-13
  3.05E-13  4.04E-13  3.22E-13  4.42E-13  2.80E-13  2.20E-13  3.43E-13  6.91E-13
  8.02E-13  9.48E-13  6.66E-13  6.80E-13  6.41E-06  3.95E-13
 -2.1023E+00 -1.1543E+00 -1.1530E+00 -1.1530E+00 -9.6550E-01 -4.2854E-01
 -3.7526E-01 -3.7345E-01 -3.0474E-01 -3.0474E-01 -2.8494E-01  5.3758E-02
  1.0081E-01  1.0081E-01  1.3024E-01  1.3024E-01  1.3136E-01  1.4470E-01
  1.8972E-01  1.8972E-01  2.6076E-01  3.2146E-01  3.2146E-01  3.4155E-01
  4.1745E-01  4.8349E-01  4.8769E-01  5.2540E-01  5.6469E-01  5.7384E-01
  prteigrs : nnsclo,ikpt=   30  129 max resid (incl. the buffer)=  6.41164E-06
 Non-SCF case, kpt  130 (  0.39000  0.00000  0.00000), residuals and eigenvalues=
  6.79E-13  3.32E-13  6.35E-13  8.08E-13  4.62E-13  6.12E-13  5.47E-13  7.76E-13
  4.36E-13  9.12E-13  9.53E-13  6.25E-13  4.77E-13  9.76E-13  5.15E-13  4.46E-13
  2.71E-13  3.91E-13  3.93E-13  5.52E-13  3.20E-13  2.28E-13  3.16E-13  7.05E-13
  6.98E-13  2.99E-13  7.13E-13  2.68E-13  1.18E-05  8.97E-13
 -2.1023E+00 -1.1543E+00 -1.1530E+00 -1.1530E+00 -9.6547E-01 -4.2879E-01
 -3.7523E-01 -3.7313E-01 -3.0469E-01 -3.0469E-01 -2.8452E-01  5.2597E-02
  1.0081E-01  1.0081E-01  1.2941E-01  1.2941E-01  1.3018E-01  1.4411E-01
  1.8950E-01  1.8950E-01  2.6086E-01  3.2267E-01  3.2267E-01  3.4156E-01
  4.1875E-01  4.8509E-01  4.8968E-01  5.2521E-01  5.6944E-01  5.7486E-01
  prteigrs : nnsclo,ikpt=   30  130 max resid (incl. the buffer)=  1.17590E-05
 Non-SCF case, kpt  131 (  0.40000  0.00000  0.00000), residuals and eigenvalues=
  7.20E-13  2.81E-13  5.48E-13  7.81E-13  4.43E-13  6.05E-13  5.40E-13  8.15E-13
  3.98E-13  9.17E-13  9.81E-13  6.86E-13  5.11E-13  7.09E-13  4.30E-13  4.43E-13
  2.49E-13  3.76E-13  3.62E-13  5.49E-13  3.62E-13  2.46E-13  2.80E-13  7.19E-13
  9.00E-13  4.39E-13  9.81E-13  4.67E-13  3.47E-06  4.93E-13
 -2.1023E+00 -1.1543E+00 -1.1530E+00 -1.1530E+00 -9.6545E-01 -4.2902E-01
 -3.7519E-01 -3.7284E-01 -3.0465E-01 -3.0465E-01 -2.8413E-01  5.1523E-02
  1.0081E-01  1.0081E-01  1.2864E-01  1.2864E-01  1.2909E-01  1.4356E-01
  1.8930E-01  1.8930E-01  2.6095E-01  3.2379E-01  3.2379E-01  3.4157E-01
  4.1994E-01  4.8658E-01  4.9154E-01  5.2504E-01  5.7423E-01  5.7581E-01
  prteigrs : nnsclo,ikpt=   30  131 max resid (incl. the buffer)=  3.46924E-06
 Non-SCF case, kpt  132 (  0.41000  0.00000  0.00000), residuals and eigenvalues=
  9.21E-13  2.61E-13  6.36E-13  2.97E-13  3.21E-13  4.00E-13  3.30E-13  5.59E-13
  6.52E-13  6.25E-13  4.85E-13  1.87E-13  3.76E-13  2.02E-13  3.96E-13  4.31E-13
  2.04E-13  5.64E-13  3.62E-13  5.91E-13  2.29E-13  3.05E-13  7.35E-13  8.27E-13
  3.20E-13  4.15E-13  9.73E-13  8.35E-13  3.18E-13  2.62E-05
 -2.1023E+00 -1.1543E+00 -1.1530E+00 -1.1530E+00 -9.6543E-01 -4.2923E-01
 -3.7516E-01 -3.7256E-01 -3.0460E-01 -3.0460E-01 -2.8378E-01  5.0538E-02
  1.0082E-01  1.0082E-01  1.2794E-01  1.2794E-01  1.2811E-01  1.4306E-01
  1.8912E-01  1.8912E-01  2.6103E-01  3.2481E-01  3.2481E-01  3.4158E-01
  4.2102E-01  4.8795E-01  4.9326E-01  5.2488E-01  5.7668E-01  5.7793E-01
  prteigrs : nnsclo,ikpt=   30  132 max resid (incl. the buffer)=  2.61955E-05
 Non-SCF case, kpt  133 (  0.42000  0.00000  0.00000), residuals and eigenvalues=
  3.78E-13  4.87E-13  2.14E-13  3.20E-13  2.83E-13  4.69E-13  3.17E-13  4.31E-13
  8.10E-13  6.73E-13  1.97E-13  3.66E-13  5.39E-13  7.79E-13  2.02E-13  1.78E-13
  2.42E-13  1.52E-13  4.48E-13  2.36E-13  4.97E-13  1.43E-13  6.42E-13  5.91E-13
  9.75E-13  3.97E-13  7.02E-13  3.03E-13  4.37E-13  3.87E-05
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6541E-01 -4.2942E-01
 -3.7513E-01 -3.7230E-01 -3.0456E-01 -3.0456E-01 -2.8346E-01  4.9646E-02
  1.0083E-01  1.0083E-01  1.2722E-01  1.2731E-01  1.2731E-01  1.4261E-01
  1.8895E-01  1.8895E-01  2.6111E-01  3.2573E-01  3.2573E-01  3.4159E-01
  4.2200E-01  4.8919E-01  4.9483E-01  5.2473E-01  5.7746E-01  5.7822E-01
  prteigrs : nnsclo,ikpt=   30  133 max resid (incl. the buffer)=  3.86852E-05
 Non-SCF case, kpt  134 (  0.43000  0.00000  0.00000), residuals and eigenvalues=
  3.80E-13  5.63E-13  2.14E-13  2.94E-13  3.05E-13  3.87E-13  2.88E-13  3.50E-13
  4.18E-13  5.01E-13  2.14E-13  3.12E-13  4.68E-13  5.57E-13  8.63E-13  9.10E-13
  2.15E-13  8.98E-13  3.41E-13  1.78E-13  4.46E-13  9.57E-13  5.49E-13  7.87E-13
  9.00E-13  9.63E-13  2.92E-13  7.86E-13  5.15E-13  6.09E-05
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6539E-01 -4.2960E-01
 -3.7510E-01 -3.7207E-01 -3.0453E-01 -3.0453E-01 -2.8318E-01  4.8850E-02
  1.0084E-01  1.0084E-01  1.2644E-01  1.2674E-01  1.2674E-01  1.4221E-01
  1.8881E-01  1.8881E-01  2.6118E-01  3.2654E-01  3.2654E-01  3.4159E-01
  4.2286E-01  4.9030E-01  4.9624E-01  5.2460E-01  5.7817E-01  5.7870E-01
  prteigrs : nnsclo,ikpt=   30  134 max resid (incl. the buffer)=  6.08738E-05
 Non-SCF case, kpt  135 (  0.44000  0.00000  0.00000), residuals and eigenvalues=
  3.77E-13  6.24E-13  2.25E-13  3.02E-13  3.22E-13  3.37E-13  3.24E-13  3.12E-13
  4.05E-13  5.61E-13  2.19E-13  2.96E-13  5.32E-13  4.53E-13  7.72E-13  8.48E-13
  1.96E-13  7.91E-13  2.83E-13  1.43E-13  3.56E-13  2.72E-13  5.48E-13  7.51E-13
  7.40E-13  3.51E-13  2.63E-13  6.66E-13  4.20E-13  5.02E-05
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6537E-01 -4.2975E-01
 -3.7508E-01 -3.7186E-01 -3.0450E-01 -3.0450E-01 -2.8294E-01  4.8155E-02
  1.0086E-01  1.0086E-01  1.2577E-01  1.2625E-01  1.2625E-01  1.4187E-01
  1.8868E-01  1.8868E-01  2.6124E-01  3.2726E-01  3.2726E-01  3.4160E-01
  4.2361E-01  4.9128E-01  4.9749E-01  5.2448E-01  5.7879E-01  5.7913E-01
  prteigrs : nnsclo,ikpt=   30  135 max resid (incl. the buffer)=  5.01977E-05
 Non-SCF case, kpt  136 (  0.45000  0.00000  0.00000), residuals and eigenvalues=
  3.71E-13  6.95E-13  2.38E-13  3.11E-13  3.41E-13  3.28E-13  3.43E-13  2.79E-13
  5.46E-13  5.35E-13  2.16E-13  2.57E-13  4.18E-13  3.69E-13  7.65E-13  2.02E-13
  9.39E-13  6.76E-13  3.00E-13  7.10E-13  2.80E-13  2.47E-13  4.63E-13  7.06E-13
  5.53E-13  4.97E-13  1.99E-13  9.67E-13  9.47E-13  2.77E-05
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6536E-01 -4.2988E-01
 -3.7506E-01 -3.7169E-01 -3.0447E-01 -3.0447E-01 -2.8273E-01  4.7562E-02
  1.0087E-01  1.0087E-01  1.2519E-01  1.2583E-01  1.2583E-01  1.4157E-01
  1.8858E-01  1.8858E-01  2.6129E-01  3.2786E-01  3.2786E-01  3.4160E-01
  4.2424E-01  4.9211E-01  4.9855E-01  5.2438E-01  5.7932E-01  5.7947E-01
  prteigrs : nnsclo,ikpt=   30  136 max resid (incl. the buffer)=  2.77395E-05
 Non-SCF case, kpt  137 (  0.46000  0.00000  0.00000), residuals and eigenvalues=
  3.62E-13  7.52E-13  2.45E-13  3.14E-13  3.67E-13  3.34E-13  3.45E-13  2.59E-13
  6.52E-13  3.65E-13  9.63E-13  2.11E-13  2.83E-13  2.98E-13  7.71E-13  1.93E-13
  8.25E-13  5.78E-13  5.46E-13  6.02E-13  2.19E-13  2.79E-13  3.47E-13  6.84E-13
  3.76E-13  6.49E-13  7.87E-13  4.30E-13  6.68E-13  1.38E-05
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6535E-01 -4.2999E-01
 -3.7505E-01 -3.7154E-01 -3.0445E-01 -3.0445E-01 -2.8256E-01  4.7074E-02
  1.0088E-01  1.0088E-01  1.2472E-01  1.2548E-01  1.2548E-01  1.4133E-01
  1.8849E-01  1.8849E-01  2.6133E-01  3.2836E-01  3.2836E-01  3.4161E-01
  4.2477E-01  4.9280E-01  4.9943E-01  5.2430E-01  5.7975E-01  5.7982E-01
  prteigrs : nnsclo,ikpt=   30  137 max resid (incl. the buffer)=  1.38015E-05
 Non-SCF case, kpt  138 (  0.47000  0.00000  0.00000), residuals and eigenvalues=
  3.56E-13  7.79E-13  5.34E-13  3.87E-13  3.93E-13  3.71E-13  3.47E-13  2.49E-13
  5.58E-13  3.82E-13  8.44E-13  1.66E-13  9.45E-13  2.27E-13  7.57E-13  1.93E-13
  7.70E-13  5.18E-13  5.71E-13  4.76E-13  9.21E-13  2.47E-13  8.25E-13  6.24E-13
  7.79E-13  4.91E-13  8.98E-13  5.85E-13  7.69E-12  2.61E-05
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6534E-01 -4.3007E-01
 -3.7503E-01 -3.7142E-01 -3.0443E-01 -3.0443E-01 -2.8243E-01  4.6692E-02
  1.0089E-01  1.0089E-01  1.2436E-01  1.2521E-01  1.2521E-01  1.4114E-01
  1.8842E-01  1.8842E-01  2.6136E-01  3.2875E-01  3.2875E-01  3.4161E-01
  4.2517E-01  4.9334E-01  5.0012E-01  5.2424E-01  5.8009E-01  5.8014E-01
  prteigrs : nnsclo,ikpt=   30  138 max resid (incl. the buffer)=  2.60918E-05
 Non-SCF case, kpt  139 (  0.48000  0.00000  0.00000), residuals and eigenvalues=
  3.41E-13  3.82E-13  2.24E-13  5.64E-13  3.94E-13  4.47E-13  4.00E-13  6.05E-13
  6.81E-13  3.92E-13  5.93E-13  5.87E-13  8.58E-13  6.39E-13  2.73E-13  4.90E-13
  3.12E-13  6.99E-13  8.41E-13  4.68E-13  6.09E-13  2.89E-13  3.42E-13  4.59E-13
  2.74E-13  9.66E-13  6.68E-13  9.35E-13  3.40E-11  1.63E-05
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6533E-01 -4.3013E-01
 -3.7503E-01 -3.7134E-01 -3.0442E-01 -3.0442E-01 -2.8233E-01  4.6418E-02
  1.0090E-01  1.0090E-01  1.2409E-01  1.2502E-01  1.2502E-01  1.4100E-01
  1.8837E-01  1.8837E-01  2.6139E-01  3.2903E-01  3.2903E-01  3.4161E-01
  4.2546E-01  4.9372E-01  5.0062E-01  5.2419E-01  5.8033E-01  5.8039E-01
  prteigrs : nnsclo,ikpt=   30  139 max resid (incl. the buffer)=  1.63002E-05
 Non-SCF case, kpt  140 (  0.49000  0.00000  0.00000), residuals and eigenvalues=
  4.08E-13  4.80E-13  2.24E-13  8.60E-13  3.97E-13  4.07E-13  4.26E-13  5.37E-13
  5.93E-13  4.33E-13  4.92E-13  4.59E-13  9.24E-13  6.06E-13  8.88E-13  4.28E-13
  4.74E-13  6.01E-13  7.34E-13  6.39E-13  5.19E-13  2.55E-13  4.20E-13  2.28E-13
  8.92E-13  3.82E-13  4.96E-13  9.60E-13  3.26E-11  8.70E-06
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6533E-01 -4.3017E-01
 -3.7502E-01 -3.7129E-01 -3.0441E-01 -3.0441E-01 -2.8228E-01  4.6253E-02
  1.0090E-01  1.0090E-01  1.2394E-01  1.2490E-01  1.2490E-01  1.4092E-01
  1.8834E-01  1.8834E-01  2.6140E-01  3.2920E-01  3.2920E-01  3.4161E-01
  4.2564E-01  4.9396E-01  5.0092E-01  5.2417E-01  5.8048E-01  5.8051E-01
  prteigrs : nnsclo,ikpt=   30  140 max resid (incl. the buffer)=  8.70437E-06
 Non-SCF case, kpt  141 (  0.50000  0.00000  0.00000), residuals and eigenvalues=
  4.78E-13  5.40E-13  2.49E-13  8.39E-13  4.07E-13  4.07E-13  4.82E-13  5.42E-13
  4.44E-13  4.36E-13  4.71E-13  3.76E-13  8.20E-13  6.38E-13  8.73E-13  4.83E-13
  6.12E-13  8.35E-13  4.27E-13  7.77E-13  9.05E-13  5.08E-13  7.33E-13  5.64E-13
  6.19E-13  6.78E-13  4.01E-13  4.85E-13  6.07E-12  4.19E-06
 -2.1023E+00 -1.1545E+00 -1.1530E+00 -1.1530E+00 -9.6533E-01 -4.3018E-01
 -3.7502E-01 -3.7127E-01 -3.0441E-01 -3.0441E-01 -2.8226E-01  4.6198E-02
  1.0090E-01  1.0090E-01  1.2388E-01  1.2486E-01  1.2486E-01  1.4089E-01
  1.8833E-01  1.8833E-01  2.6140E-01  3.2925E-01  3.2925E-01  3.4161E-01
  4.2570E-01  4.9404E-01  5.0102E-01  5.2416E-01  5.8053E-01  5.8054E-01
  prteigrs : nnsclo,ikpt=   30  141 max resid (incl. the buffer)=  4.18761E-06
 Non-SCF case, kpt  142 (  0.50000  0.01000  0.00000), residuals and eigenvalues=
  3.91E-13  6.03E-13  8.44E-13  2.37E-13  3.95E-13  3.53E-13  4.68E-13  4.69E-13
  5.67E-13  3.31E-13  4.83E-13  3.88E-13  5.70E-13  8.77E-13  8.42E-13  6.07E-13
  3.57E-13  8.24E-13  8.52E-13  3.02E-13  4.88E-13  3.26E-13  6.09E-13  5.85E-13
  7.25E-13  6.67E-13  3.77E-13  8.30E-13  5.74E-06  8.10E-07
 -2.1023E+00 -1.1545E+00 -1.1530E+00 -1.1530E+00 -9.6533E-01 -4.3016E-01
 -3.7502E-01 -3.7129E-01 -3.0441E-01 -3.0439E-01 -2.8227E-01  4.6195E-02
  1.0087E-01  1.0090E-01  1.2199E-01  1.2484E-01  1.2657E-01  1.4112E-01
  1.8823E-01  1.8825E-01  2.6150E-01  3.2925E-01  3.2925E-01  3.4172E-01
  4.2575E-01  4.9407E-01  5.0108E-01  5.2421E-01  5.8039E-01  5.8053E-01
  prteigrs : nnsclo,ikpt=   30  142 max resid (incl. the buffer)=  5.74054E-06
 Non-SCF case, kpt  143 (  0.50000  0.02000  0.00000), residuals and eigenvalues=
  2.64E-13  9.96E-13  5.96E-13  6.82E-13  6.12E-13  6.12E-13  8.81E-13  3.89E-13
  4.00E-13  2.94E-13  4.91E-13  3.34E-13  4.76E-13  9.71E-13  5.41E-13  7.93E-13
  3.75E-13  3.68E-13  8.08E-13  5.63E-13  1.51E-13  2.34E-13  8.27E-13  2.93E-13
  9.83E-13  6.87E-13  7.14E-13  9.07E-13  2.90E-07  3.40E-06
 -2.1023E+00 -1.1545E+00 -1.1530E+00 -1.1530E+00 -9.6533E-01 -4.3009E-01
 -3.7501E-01 -3.7136E-01 -3.0440E-01 -3.0434E-01 -2.8230E-01  4.6185E-02
  1.0079E-01  1.0091E-01  1.1954E-01  1.2478E-01  1.2842E-01  1.4180E-01
  1.8794E-01  1.8801E-01  2.6180E-01  3.2924E-01  3.2925E-01  3.4202E-01
  4.2590E-01  4.9418E-01  5.0127E-01  5.2438E-01  5.7991E-01  5.8055E-01
  prteigrs : nnsclo,ikpt=   30  143 max resid (incl. the buffer)=  3.39948E-06
 Non-SCF case, kpt  144 (  0.50000  0.03000  0.00000), residuals and eigenvalues=
  2.71E-13  3.53E-13  6.22E-13  4.18E-13  5.91E-13  8.46E-13  5.72E-13  3.20E-13
  8.38E-13  4.90E-13  2.54E-13  2.23E-13  6.60E-13  8.13E-13  8.58E-13  6.46E-13
  5.71E-13  4.98E-13  1.54E-13  2.72E-13  5.07E-13  4.08E-13  3.09E-13  8.18E-13
  7.30E-13  7.59E-13  8.61E-13  7.15E-13  2.39E-08  2.27E-06
 -2.1023E+00 -1.1545E+00 -1.1530E+00 -1.1530E+00 -9.6532E-01 -4.2999E-01
 -3.7500E-01 -3.7146E-01 -3.0439E-01 -3.0426E-01 -2.8236E-01  4.6168E-02
  1.0066E-01  1.0093E-01  1.1699E-01  1.2467E-01  1.2999E-01  1.4294E-01
  1.8745E-01  1.8762E-01  2.6230E-01  3.2923E-01  3.2924E-01  3.4252E-01
  4.2615E-01  4.9436E-01  5.0158E-01  5.2465E-01  5.7916E-01  5.8057E-01
  prteigrs : nnsclo,ikpt=   30  144 max resid (incl. the buffer)=  2.26580E-06
 Non-SCF case, kpt  145 (  0.50000  0.04000  0.00000), residuals and eigenvalues=
  6.84E-13  3.12E-13  4.70E-13  5.20E-13  9.98E-13  3.83E-13  8.70E-13  7.09E-13
  7.04E-13  6.16E-13  5.69E-13  2.09E-13  8.38E-13  3.87E-13  6.51E-13  2.34E-13
  5.62E-13  8.71E-13  9.99E-13  4.23E-13  2.10E-13  2.22E-13  8.97E-13  1.90E-13
  6.36E-13  2.46E-13  4.21E-13  8.29E-13  1.79E-07  1.79E-06
 -2.1023E+00 -1.1544E+00 -1.1530E+00 -1.1530E+00 -9.6532E-01 -4.2984E-01
 -3.7498E-01 -3.7161E-01 -3.0437E-01 -3.0414E-01 -2.8244E-01  4.6144E-02
  1.0046E-01  1.0095E-01  1.1437E-01  1.2453E-01  1.3127E-01  1.4451E-01
  1.8678E-01  1.8708E-01  2.6297E-01  3.2921E-01  3.2924E-01  3.4320E-01
  4.2651E-01  4.9460E-01  5.0202E-01  5.2504E-01  5.7818E-01  5.8059E-01
  prteigrs : nnsclo,ikpt=   30  145 max resid (incl. the buffer)=  1.78885E-06
 Non-SCF case, kpt  146 (  0.50000  0.05000  0.00000), residuals and eigenvalues=
  4.02E-13  2.59E-13  6.70E-13  4.13E-13  9.21E-13  5.62E-13  9.79E-13  2.26E-13
  5.49E-13  5.96E-13  4.71E-13  5.37E-13  8.09E-13  5.35E-13  5.05E-13  5.11E-13
  3.91E-13  6.04E-13  8.11E-13  3.83E-13  6.83E-13  3.21E-13  5.20E-13  8.37E-13
  5.73E-13  1.57E-13  3.82E-13  7.60E-13  1.11E-07  1.48E-06
 -2.1023E+00 -1.1544E+00 -1.1531E+00 -1.1530E+00 -9.6531E-01 -4.2964E-01
 -3.7497E-01 -3.7180E-01 -3.0434E-01 -3.0400E-01 -2.8254E-01  4.6114E-02
  1.0021E-01  1.0097E-01  1.1172E-01  1.2434E-01  1.3229E-01  1.4642E-01
  1.8594E-01  1.8640E-01  2.6383E-01  3.2919E-01  3.2923E-01  3.4405E-01
  4.2697E-01  4.9492E-01  5.0258E-01  5.2553E-01  5.7699E-01  5.8062E-01
  prteigrs : nnsclo,ikpt=   30  146 max resid (incl. the buffer)=  1.47788E-06
 Non-SCF case, kpt  147 (  0.50000  0.06000  0.00000), residuals and eigenvalues=
  3.69E-13  2.81E-13  6.51E-13  3.85E-13  8.13E-13  4.94E-13  9.42E-13  9.90E-13
  5.50E-13  7.25E-13  5.18E-13  5.36E-13  8.43E-13  4.85E-13  5.05E-13  4.41E-13
  3.79E-13  5.31E-13  5.59E-13  2.72E-13  8.60E-13  9.81E-13  5.93E-13  8.37E-13
  4.76E-13  8.78E-13  4.34E-13  3.33E-13  6.29E-08  1.05E-06
 -2.1023E+00 -1.1544E+00 -1.1531E+00 -1.1530E+00 -9.6530E-01 -4.2941E-01
 -3.7495E-01 -3.7202E-01 -3.0431E-01 -3.0382E-01 -2.8267E-01  4.6077E-02
  9.9889E-02  1.0100E-01  1.0904E-01  1.2411E-01  1.3312E-01  1.4859E-01
  1.8496E-01  1.8559E-01  2.6485E-01  3.2916E-01  3.2921E-01  3.4506E-01
  4.2753E-01  4.9530E-01  5.0327E-01  5.2612E-01  5.7564E-01  5.8065E-01
  prteigrs : nnsclo,ikpt=   30  147 max resid (incl. the buffer)=  1.05451E-06
 Non-SCF case, kpt  148 (  0.50000  0.07000  0.00000), residuals and eigenvalues=
  3.41E-13  3.35E-13  6.47E-13  3.32E-13  6.78E-13  4.27E-13  9.11E-13  8.56E-13
  6.06E-13  7.68E-13  5.81E-13  5.55E-13  6.93E-13  4.29E-13  4.90E-13  4.22E-13
  2.97E-13  3.92E-13  4.43E-13  2.06E-13  1.80E-13  6.49E-13  4.78E-13  9.49E-13
  4.65E-13  7.91E-13  4.89E-13  4.73E-13  4.00E-08  7.07E-07
 -2.1023E+00 -1.1544E+00 -1.1531E+00 -1.1530E+00 -9.6529E-01 -4.2913E-01
 -3.7492E-01 -3.7229E-01 -3.0428E-01 -3.0361E-01 -2.8281E-01  4.6033E-02
  9.9505E-02  1.0103E-01  1.0636E-01  1.2385E-01  1.3385E-01  1.5094E-01
  1.8384E-01  1.8467E-01  2.6602E-01  3.2914E-01  3.2920E-01  3.4621E-01
  4.2821E-01  4.9575E-01  5.0408E-01  5.2682E-01  5.7417E-01  5.8069E-01
  prteigrs : nnsclo,ikpt=   30  148 max resid (incl. the buffer)=  7.07084E-07
 Non-SCF case, kpt  149 (  0.50000  0.08000  0.00000), residuals and eigenvalues=
  7.50E-13  2.83E-13  5.69E-13  7.58E-13  7.08E-13  8.53E-13  4.78E-13  2.74E-13
  8.89E-13  7.98E-13  2.59E-13  1.94E-13  5.73E-13  8.51E-13  3.50E-13  6.44E-13
  3.66E-13  8.00E-13  6.47E-13  5.28E-13  6.34E-13  1.93E-13  4.37E-13  2.73E-13
  7.64E-13  4.47E-13  7.17E-13  4.55E-13  1.21E-08  6.94E-07
 -2.1023E+00 -1.1544E+00 -1.1531E+00 -1.1530E+00 -9.6528E-01 -4.2881E-01
 -3.7490E-01 -3.7259E-01 -3.0424E-01 -3.0337E-01 -2.8298E-01  4.5983E-02
  9.9051E-02  1.0107E-01  1.0369E-01  1.2354E-01  1.3451E-01  1.5341E-01
  1.8261E-01  1.8364E-01  2.6733E-01  3.2911E-01  3.2918E-01  3.4747E-01
  4.2899E-01  4.9626E-01  5.0502E-01  5.2762E-01  5.7259E-01  5.8074E-01
  prteigrs : nnsclo,ikpt=   30  149 max resid (incl. the buffer)=  6.93580E-07
 Non-SCF case, kpt  150 (  0.50000  0.09000  0.00000), residuals and eigenvalues=
  4.61E-13  6.18E-13  7.79E-13  2.21E-13  8.95E-13  7.82E-13  3.62E-13  6.28E-13
  7.50E-13  4.59E-13  6.40E-13  6.50E-13  2.87E-13  2.51E-13  2.54E-13  5.66E-13
  1.37E-13  4.87E-13  5.90E-13  4.05E-13  6.70E-13  7.15E-13  9.45E-13  3.32E-13
  8.54E-13  8.45E-13  8.05E-13  5.14E-13  3.78E-08  1.40E-06
 -2.1023E+00 -1.1544E+00 -1.1531E+00 -1.1530E+00 -9.6526E-01 -4.2845E-01
 -3.7487E-01 -3.7292E-01 -3.0420E-01 -3.0311E-01 -2.8316E-01  4.5926E-02
  9.8522E-02  1.0102E-01  1.0112E-01  1.2320E-01  1.3514E-01  1.5594E-01
  1.8129E-01  1.8253E-01  2.6876E-01  3.2909E-01  3.2917E-01  3.4883E-01
  4.2988E-01  4.9683E-01  5.0607E-01  5.2852E-01  5.7094E-01  5.8080E-01
  prteigrs : nnsclo,ikpt=   30  150 max resid (incl. the buffer)=  1.39524E-06
 Non-SCF case, kpt  151 (  0.50000  0.10000  0.00000), residuals and eigenvalues=
  3.15E-13  7.52E-13  2.81E-13  7.44E-13  9.19E-13  2.88E-13  4.26E-13  2.77E-13
  6.89E-13  7.23E-13  6.70E-13  3.77E-13  9.21E-13  3.44E-13  4.18E-13  2.95E-13
  8.46E-13  2.76E-13  3.05E-13  5.84E-13  6.47E-13  5.93E-13  4.52E-13  2.97E-13
  6.20E-13  8.19E-13  7.15E-13  6.53E-13  1.01E-08  7.62E-08
 -2.1023E+00 -1.1544E+00 -1.1531E+00 -1.1530E+00 -9.6525E-01 -4.2804E-01
 -3.7485E-01 -3.7329E-01 -3.0415E-01 -3.0282E-01 -2.8336E-01  4.5864E-02
  9.7915E-02  9.8372E-02  1.0116E-01  1.2283E-01  1.3576E-01  1.5852E-01
  1.7991E-01  1.8134E-01  2.7031E-01  3.2908E-01  3.2915E-01  3.5027E-01
  4.3089E-01  4.9746E-01  5.0726E-01  5.2952E-01  5.6923E-01  5.8086E-01
  prteigrs : nnsclo,ikpt=   30  151 max resid (incl. the buffer)=  7.61629E-08
 Non-SCF case, kpt  152 (  0.50000  0.11000  0.00000), residuals and eigenvalues=
  6.74E-13  9.71E-13  4.75E-13  9.98E-13  3.08E-13  5.26E-13  3.68E-13  7.96E-13
  4.62E-13  2.37E-13  3.17E-13  2.34E-13  2.41E-13  6.59E-13  9.87E-13  7.02E-13
  9.38E-13  8.54E-13  3.03E-13  7.60E-13  9.59E-13  3.07E-13  6.12E-13  7.27E-13
  2.50E-13  8.64E-13  7.17E-13  2.88E-13  2.63E-08  7.32E-07
 -2.1023E+00 -1.1544E+00 -1.1532E+00 -1.1530E+00 -9.6523E-01 -4.2760E-01
 -3.7483E-01 -3.7369E-01 -3.0410E-01 -3.0251E-01 -2.8358E-01  4.5795E-02
  9.5746E-02  9.7226E-02  1.0122E-01  1.2242E-01  1.3638E-01  1.6111E-01
  1.7848E-01  1.8008E-01  2.7195E-01  3.2908E-01  3.2913E-01  3.5175E-01
  4.3201E-01  4.9815E-01  5.0856E-01  5.3061E-01  5.6747E-01  5.8093E-01
  prteigrs : nnsclo,ikpt=   30  152 max resid (incl. the buffer)=  7.31592E-07
 Non-SCF case, kpt  153 (  0.50000  0.12000  0.00000), residuals and eigenvalues=
  2.72E-13  3.68E-13  2.06E-13  7.49E-13  8.16E-13  3.28E-13  6.08E-13  2.66E-13
  3.92E-13  8.26E-13  4.46E-13  9.32E-13  2.64E-13  2.96E-13  4.31E-13  8.86E-13
  4.68E-13  2.07E-13  2.27E-13  3.40E-13  6.22E-13  8.76E-13  8.39E-13  8.25E-13
  2.28E-13  8.65E-13  2.86E-13  2.89E-13  1.58E-09  8.40E-09
 -2.1023E+00 -1.1544E+00 -1.1532E+00 -1.1530E+00 -9.6521E-01 -4.2712E-01
 -3.7481E-01 -3.7411E-01 -3.0404E-01 -3.0218E-01 -2.8381E-01  4.5720E-02
  9.3147E-02  9.6449E-02  1.0128E-01  1.2198E-01  1.3702E-01  1.6371E-01
  1.7702E-01  1.7877E-01  2.7368E-01  3.2908E-01  3.2910E-01  3.5328E-01
  4.3324E-01  4.9889E-01  5.0998E-01  5.3178E-01  5.6569E-01  5.8100E-01
  prteigrs : nnsclo,ikpt=   30  153 max resid (incl. the buffer)=  8.40058E-09
 Non-SCF case, kpt  154 (  0.50000  0.13000  0.00000), residuals and eigenvalues=
  2.47E-13  4.11E-13  7.86E-13  6.89E-13  7.50E-13  3.69E-13  5.88E-13  2.60E-13
  2.77E-13  7.56E-13  5.03E-13  8.39E-13  3.01E-13  3.10E-13  3.97E-13  7.73E-13
  4.95E-13  2.68E-13  3.03E-13  2.59E-13  7.04E-13  6.82E-13  7.96E-13  2.40E-13
  3.83E-13  2.37E-13  4.10E-13  8.96E-13  1.12E-09  4.85E-09
 -2.1023E+00 -1.1544E+00 -1.1532E+00 -1.1530E+00 -9.6519E-01 -4.2660E-01
 -3.7480E-01 -3.7456E-01 -3.0398E-01 -3.0183E-01 -2.8405E-01  4.5639E-02
  9.0578E-02  9.5583E-02  1.0134E-01  1.2151E-01  1.3768E-01  1.6629E-01
  1.7556E-01  1.7742E-01  2.7548E-01  3.2908E-01  3.2910E-01  3.5481E-01
  4.3459E-01  4.9968E-01  5.1152E-01  5.3304E-01  5.6388E-01  5.8108E-01
  prteigrs : nnsclo,ikpt=   30  154 max resid (incl. the buffer)=  4.85349E-09
 Non-SCF case, kpt  155 (  0.50000  0.14000  0.00000), residuals and eigenvalues=
  3.11E-13  4.87E-13  3.61E-13  2.84E-13  8.50E-13  6.02E-13  8.84E-13  7.86E-13
  7.75E-13  3.90E-13  8.89E-13  8.00E-13  4.10E-13  4.40E-13  8.77E-13  4.17E-13
  5.81E-13  9.20E-13  2.86E-13  2.21E-13  3.89E-13  6.43E-13  6.29E-13  3.39E-13
  5.28E-13  7.52E-13  8.67E-13  8.11E-13  3.09E-10  1.62E-08
 -2.1023E+00 -1.1544E+00 -1.1533E+00 -1.1530E+00 -9.6517E-01 -4.2604E-01
 -3.7503E-01 -3.7479E-01 -3.0391E-01 -3.0146E-01 -2.8431E-01  4.5552E-02
  8.8044E-02  9.4621E-02  1.0141E-01  1.2102E-01  1.3836E-01  1.6885E-01
  1.7412E-01  1.7603E-01  2.7735E-01  3.2906E-01  3.2914E-01  3.5635E-01
  4.3605E-01  5.0052E-01  5.1318E-01  5.3439E-01  5.6206E-01  5.8116E-01
  prteigrs : nnsclo,ikpt=   30  155 max resid (incl. the buffer)=  1.62469E-08
 Non-SCF case, kpt  156 (  0.50000  0.15000  0.00000), residuals and eigenvalues=
  4.69E-13  5.23E-13  3.74E-13  4.61E-13  3.40E-13  3.75E-13  2.83E-13  3.09E-13
  3.54E-13  7.69E-13  1.31E-13  2.82E-13  4.60E-13  3.47E-13  2.96E-13  7.66E-13
  5.74E-13  3.68E-13  2.50E-13  9.66E-13  1.94E-13  1.96E-13  6.54E-13  4.84E-13
  2.90E-13  6.00E-13  1.79E-13  4.72E-13  1.73E-10  1.24E-08
 -2.1023E+00 -1.1544E+00 -1.1533E+00 -1.1530E+00 -9.6515E-01 -4.2545E-01
 -3.7552E-01 -3.7479E-01 -3.0384E-01 -3.0108E-01 -2.8458E-01  4.5458E-02
  8.5548E-02  9.3568E-02  1.0148E-01  1.2050E-01  1.3906E-01  1.7138E-01
  1.7271E-01  1.7461E-01  2.7927E-01  3.2903E-01  3.2920E-01  3.5787E-01
  4.3763E-01  5.0141E-01  5.1496E-01  5.3580E-01  5.6024E-01  5.8125E-01
  prteigrs : nnsclo,ikpt=   30  156 max resid (incl. the buffer)=  1.24161E-08
 Non-SCF case, kpt  157 (  0.50000  0.16000  0.00000), residuals and eigenvalues=
  7.77E-13  2.77E-13  3.41E-13  4.09E-13  1.94E-13  2.75E-13  2.20E-13  9.99E-13
  1.94E-13  5.93E-13  4.86E-13  6.87E-13  7.22E-13  7.45E-13  2.24E-13  7.88E-13
  4.12E-13  1.29E-13  4.37E-13  7.79E-13  9.44E-13  5.60E-13  2.72E-13  7.80E-13
  2.55E-13  9.43E-13  4.93E-13  3.41E-13  5.48E-13  2.56E-09
 -2.1023E+00 -1.1544E+00 -1.1533E+00 -1.1530E+00 -9.6513E-01 -4.2482E-01
 -3.7603E-01 -3.7480E-01 -3.0377E-01 -3.0068E-01 -2.8485E-01  4.5358E-02
  8.3093E-02  9.2420E-02  1.0156E-01  1.1996E-01  1.3978E-01  1.7135E-01
  1.7318E-01  1.7387E-01  2.8123E-01  3.2901E-01  3.2927E-01  3.5936E-01
  4.3930E-01  5.0235E-01  5.1685E-01  5.3729E-01  5.5841E-01  5.8135E-01
  prteigrs : nnsclo,ikpt=   30  157 max resid (incl. the buffer)=  2.55829E-09
 Non-SCF case, kpt  158 (  0.50000  0.17000  0.00000), residuals and eigenvalues=
  8.15E-13  2.82E-13  3.30E-13  4.50E-13  2.03E-13  2.90E-13  2.07E-13  9.92E-13
  1.97E-13  6.42E-13  5.20E-13  6.58E-13  6.73E-13  8.22E-13  2.15E-13  7.14E-13
  4.72E-13  7.94E-13  4.68E-13  2.70E-13  8.14E-13  5.94E-13  2.58E-13  7.62E-13
  2.45E-13  8.56E-13  3.88E-13  3.99E-13  7.19E-13  1.54E-09
 -2.1023E+00 -1.1544E+00 -1.1534E+00 -1.1530E+00 -9.6510E-01 -4.2415E-01
 -3.7656E-01 -3.7482E-01 -3.0370E-01 -3.0027E-01 -2.8514E-01  4.5252E-02
  8.0681E-02  9.1177E-02  1.0164E-01  1.1940E-01  1.4052E-01  1.7005E-01
  1.7174E-01  1.7631E-01  2.8322E-01  3.2898E-01  3.2937E-01  3.6080E-01
  4.4108E-01  5.0332E-01  5.1886E-01  5.3884E-01  5.5659E-01  5.8145E-01
  prteigrs : nnsclo,ikpt=   30  158 max resid (incl. the buffer)=  1.53999E-09
 Non-SCF case, kpt  159 (  0.50000  0.18000  0.00000), residuals and eigenvalues=
  3.37E-13  5.10E-13  4.93E-13  4.76E-13  5.19E-13  4.51E-13  8.00E-13  4.12E-13
  5.29E-13  9.85E-13  1.64E-13  2.85E-13  8.22E-13  7.26E-13  6.11E-13  3.40E-13
  3.03E-13  9.82E-13  2.28E-13  5.85E-13  6.78E-13  5.00E-13  5.20E-13  4.31E-13
  3.41E-13  3.43E-13  4.15E-13  3.30E-13  3.17E-10  7.70E-08
 -2.1023E+00 -1.1544E+00 -1.1534E+00 -1.1530E+00 -9.6508E-01 -4.2345E-01
 -3.7710E-01 -3.7486E-01 -3.0362E-01 -2.9986E-01 -2.8542E-01  4.5139E-02
  7.8315E-02  8.9843E-02  1.0173E-01  1.1882E-01  1.4128E-01  1.6882E-01
  1.7029E-01  1.7871E-01  2.8524E-01  3.2896E-01  3.2950E-01  3.6220E-01
  4.4296E-01  5.0433E-01  5.2098E-01  5.4046E-01  5.5479E-01  5.8155E-01
  prteigrs : nnsclo,ikpt=   30  159 max resid (incl. the buffer)=  7.70257E-08
 Non-SCF case, kpt  160 (  0.50000  0.19000  0.00000), residuals and eigenvalues=
  4.07E-13  6.70E-13  3.57E-13  9.73E-13  4.03E-13  4.23E-13  2.47E-13  3.73E-13
  4.77E-13  3.41E-13  7.53E-13  5.26E-13  8.58E-13  9.49E-13  3.81E-13  7.21E-13
  6.99E-13  2.91E-13  2.66E-13  4.93E-13  3.32E-13  2.67E-13  5.13E-13  8.91E-13
  9.24E-13  4.41E-13  2.40E-13  7.74E-13  2.97E-11  1.04E-08
 -2.1023E+00 -1.1544E+00 -1.1534E+00 -1.1530E+00 -9.6505E-01 -4.2272E-01
 -3.7764E-01 -3.7491E-01 -3.0354E-01 -2.9943E-01 -2.8572E-01  4.5018E-02
  7.5998E-02  8.8421E-02  1.0182E-01  1.1822E-01  1.4206E-01  1.6767E-01
  1.6884E-01  1.8105E-01  2.8728E-01  3.2893E-01  3.2966E-01  3.6353E-01
  4.4492E-01  5.0538E-01  5.2321E-01  5.4213E-01  5.5299E-01  5.8166E-01
  prteigrs : nnsclo,ikpt=   30  160 max resid (incl. the buffer)=  1.04199E-08
 Non-SCF case, kpt  161 (  0.50000  0.20000  0.00000), residuals and eigenvalues=
  4.13E-13  6.02E-13  3.51E-13  9.17E-13  3.92E-13  4.42E-13  2.39E-13  4.07E-13
  3.55E-13  2.88E-13  8.37E-13  4.72E-13  6.93E-13  8.33E-13  3.64E-13  7.42E-13
  7.44E-13  9.13E-13  2.89E-13  5.86E-13  3.38E-13  3.70E-13  6.29E-13  9.13E-13
  8.35E-13  3.34E-13  3.75E-13  3.78E-13  2.61E-11  3.44E-09
 -2.1023E+00 -1.1544E+00 -1.1535E+00 -1.1530E+00 -9.6503E-01 -4.2195E-01
 -3.7820E-01 -3.7498E-01 -3.0346E-01 -2.9900E-01 -2.8601E-01  4.4890E-02
  7.3731E-02  8.6918E-02  1.0192E-01  1.1762E-01  1.4286E-01  1.6661E-01
  1.6740E-01  1.8333E-01  2.8932E-01  3.2891E-01  3.2985E-01  3.6481E-01
  4.4697E-01  5.0645E-01  5.2554E-01  5.4385E-01  5.5122E-01  5.8177E-01
  prteigrs : nnsclo,ikpt=   30  161 max resid (incl. the buffer)=  3.43742E-09
 Non-SCF case, kpt  162 (  0.50000  0.21000  0.00000), residuals and eigenvalues=
  6.25E-13  4.64E-13  3.54E-13  7.99E-13  7.40E-13  4.22E-13  2.41E-13  7.47E-13
  6.83E-13  3.03E-13  8.43E-13  3.41E-13  3.50E-13  9.12E-13  6.38E-13  4.47E-13
  9.09E-13  5.54E-13  5.76E-13  6.17E-13  2.23E-13  7.84E-13  5.71E-13  5.63E-13
  4.98E-13  2.23E-13  8.16E-13  3.45E-13  6.72E-13  2.21E-09
 -2.1023E+00 -1.1544E+00 -1.1535E+00 -1.1530E+00 -9.6500E-01 -4.2116E-01
 -3.7876E-01 -3.7506E-01 -3.0337E-01 -2.9857E-01 -2.8630E-01  4.4753E-02
  7.1517E-02  8.5341E-02  1.0202E-01  1.1700E-01  1.4367E-01  1.6563E-01
  1.6597E-01  1.8555E-01  2.9137E-01  3.2888E-01  3.3006E-01  3.6601E-01
  4.4908E-01  5.0756E-01  5.2799E-01  5.4561E-01  5.4947E-01  5.8189E-01
  prteigrs : nnsclo,ikpt=   30  162 max resid (incl. the buffer)=  2.21393E-09
 Non-SCF case, kpt  163 (  0.50000  0.22000  0.00000), residuals and eigenvalues=
  5.83E-13  5.40E-13  4.66E-13  1.71E-13  7.83E-13  4.75E-13  7.76E-13  7.46E-13
  6.78E-13  2.83E-13  8.10E-13  3.42E-13  2.83E-13  9.33E-13  6.25E-13  5.58E-13
  7.85E-13  9.35E-13  4.36E-13  6.64E-13  3.61E-13  9.89E-13  6.12E-13  5.60E-13
  6.41E-13  3.03E-13  3.65E-13  7.66E-13  2.83E-13  1.02E-09
 -2.1023E+00 -1.1544E+00 -1.1536E+00 -1.1530E+00 -9.6497E-01 -4.2033E-01
 -3.7933E-01 -3.7517E-01 -3.0329E-01 -2.9813E-01 -2.8659E-01  4.4606E-02
  6.9359E-02  8.3699E-02  1.0212E-01  1.1638E-01  1.4449E-01  1.6456E-01
  1.6474E-01  1.8769E-01  2.9342E-01  3.2886E-01  3.3032E-01  3.6715E-01
  4.5125E-01  5.0868E-01  5.3054E-01  5.4741E-01  5.4775E-01  5.8201E-01
  prteigrs : nnsclo,ikpt=   30  163 max resid (incl. the buffer)=  1.01579E-09
 Non-SCF case, kpt  164 (  0.50000  0.23000  0.00000), residuals and eigenvalues=
  4.60E-13  7.71E-13  4.27E-13  4.90E-13  9.90E-13  2.67E-13  1.56E-13  4.98E-13
  6.43E-13  4.09E-13  1.86E-13  5.98E-13  3.14E-13  3.03E-13  8.43E-13  4.71E-13
  2.84E-13  4.58E-13  6.77E-13  5.91E-13  2.42E-13  4.17E-13  4.51E-13  8.60E-13
  8.94E-13  2.48E-13  5.31E-13  7.79E-13  5.46E-13  7.34E-10
 -2.1023E+00 -1.1544E+00 -1.1536E+00 -1.1530E+00 -9.6495E-01 -4.1948E-01
 -3.7989E-01 -3.7530E-01 -3.0320E-01 -2.9769E-01 -2.8688E-01  4.4450E-02
  6.7258E-02  8.2002E-02  1.0223E-01  1.1575E-01  1.4532E-01  1.6317E-01
  1.6395E-01  1.8977E-01  2.9545E-01  3.2883E-01  3.3060E-01  3.6822E-01
  4.5347E-01  5.0983E-01  5.3319E-01  5.4606E-01  5.4924E-01  5.8213E-01
  prteigrs : nnsclo,ikpt=   30  164 max resid (incl. the buffer)=  7.34271E-10
 Non-SCF case, kpt  165 (  0.50000  0.24000  0.00000), residuals and eigenvalues=
  9.93E-13  7.15E-13  3.66E-13  5.68E-13  8.81E-13  3.44E-13  3.68E-13  4.18E-13
  2.45E-13  2.32E-13  1.79E-13  7.17E-13  5.32E-13  8.49E-13  3.72E-13  5.08E-13
  3.84E-13  4.89E-13  6.94E-13  1.39E-13  7.29E-13  6.62E-13  3.69E-13  2.37E-13
  7.49E-13  4.12E-13  9.07E-13  4.20E-13  7.73E-13  1.18E-08
 -2.1023E+00 -1.1544E+00 -1.1536E+00 -1.1530E+00 -9.6492E-01 -4.1860E-01
 -3.8046E-01 -3.7545E-01 -3.0312E-01 -2.9726E-01 -2.8716E-01  4.4281E-02
  6.5216E-02  8.0261E-02  1.0234E-01  1.1512E-01  1.4615E-01  1.6180E-01
  1.6324E-01  1.9177E-01  2.9747E-01  3.2881E-01  3.3092E-01  3.6922E-01
  4.5573E-01  5.1099E-01  5.3595E-01  5.4441E-01  5.5109E-01  5.8226E-01
  prteigrs : nnsclo,ikpt=   30  165 max resid (incl. the buffer)=  1.18239E-08
 Non-SCF case, kpt  166 (  0.50000  0.25000  0.00000), residuals and eigenvalues=
  3.46E-13  7.30E-13  4.60E-13  3.66E-13  7.81E-13  3.62E-13  7.26E-13  4.94E-13
  8.80E-13  6.18E-13  5.48E-13  2.18E-13  6.90E-13  9.33E-13  3.24E-13  8.74E-13
  5.35E-13  4.24E-13  2.75E-13  3.33E-13  2.28E-13  6.38E-13  8.42E-13  7.93E-13
  6.78E-13  5.64E-13  4.10E-13  5.01E-13  3.00E-12  5.87E-09
 -2.1023E+00 -1.1544E+00 -1.1537E+00 -1.1530E+00 -9.6489E-01 -4.1769E-01
 -3.8102E-01 -3.7563E-01 -3.0303E-01 -2.9683E-01 -2.8743E-01  4.4101E-02
  6.3235E-02  7.8489E-02  1.0245E-01  1.1449E-01  1.4698E-01  1.6045E-01
  1.6262E-01  1.9369E-01  2.9946E-01  3.2879E-01  3.3127E-01  3.7015E-01
  4.5801E-01  5.1216E-01  5.3880E-01  5.4279E-01  5.5297E-01  5.8238E-01
  prteigrs : nnsclo,ikpt=   30  166 max resid (incl. the buffer)=  5.86568E-09
 Non-SCF case, kpt  167 (  0.50000  0.26000  0.00000), residuals and eigenvalues=
  2.95E-13  6.34E-13  4.59E-13  3.60E-13  7.72E-13  3.17E-13  6.67E-13  4.84E-13
  8.21E-13  5.41E-13  5.02E-13  8.78E-13  6.34E-13  8.43E-13  3.11E-13  1.97E-13
  5.83E-13  3.85E-13  2.23E-13  3.72E-13  2.12E-13  6.67E-13  8.20E-13  7.81E-13
  7.65E-13  6.03E-13  8.24E-13  4.22E-13  2.65E-12  2.84E-09
 -2.1023E+00 -1.1544E+00 -1.1537E+00 -1.1530E+00 -9.6486E-01 -4.1677E-01
 -3.8158E-01 -3.7584E-01 -3.0294E-01 -2.9640E-01 -2.8770E-01  4.3906E-02
  6.1316E-02  7.6699E-02  1.0257E-01  1.1386E-01  1.4781E-01  1.5914E-01
  1.6208E-01  1.9553E-01  3.0143E-01  3.2877E-01  3.3165E-01  3.7101E-01
  4.6031E-01  5.1333E-01  5.4121E-01  5.4175E-01  5.5485E-01  5.8251E-01
  prteigrs : nnsclo,ikpt=   30  167 max resid (incl. the buffer)=  2.83901E-09
 Non-SCF case, kpt  168 (  0.50000  0.27000  0.00000), residuals and eigenvalues=
  2.98E-13  5.06E-13  5.15E-13  3.64E-13  7.72E-13  9.65E-13  6.08E-13  4.80E-13
  7.62E-13  4.64E-13  4.87E-13  7.26E-13  5.64E-13  7.81E-13  2.85E-13  2.04E-13
  6.23E-13  3.43E-13  1.86E-13  4.10E-13  1.85E-13  7.65E-13  8.18E-13  7.46E-13
  8.73E-13  6.34E-13  4.01E-13  5.80E-13  2.28E-12  1.34E-09
 -2.1023E+00 -1.1544E+00 -1.1538E+00 -1.1530E+00 -9.6484E-01 -4.1581E-01
 -3.8212E-01 -3.7607E-01 -3.0285E-01 -2.9598E-01 -2.8795E-01  4.3694E-02
  5.9462E-02  7.4905E-02  1.0269E-01  1.1323E-01  1.4864E-01  1.5786E-01
  1.6161E-01  1.9730E-01  3.0336E-01  3.2875E-01  3.3207E-01  3.7181E-01
  4.6261E-01  5.1451E-01  5.3968E-01  5.4479E-01  5.5674E-01  5.8264E-01
  prteigrs : nnsclo,ikpt=   30  168 max resid (incl. the buffer)=  1.33579E-09
 Non-SCF case, kpt  169 (  0.50000  0.28000  0.00000), residuals and eigenvalues=
  5.12E-13  5.99E-13  7.48E-13  6.69E-13  8.44E-13  2.82E-13  4.60E-13  4.15E-13
  4.30E-13  2.42E-13  4.83E-13  3.27E-13  2.39E-13  9.82E-13  5.65E-13  5.50E-13
  9.72E-13  3.28E-13  7.42E-13  4.19E-13  6.92E-13  4.72E-13  3.22E-13  7.25E-13
  2.79E-13  2.25E-13  9.06E-13  9.13E-13  7.22E-13  1.00E-10
 -2.1023E+00 -1.1544E+00 -1.1538E+00 -1.1530E+00 -9.6481E-01 -4.1484E-01
 -3.8266E-01 -3.7634E-01 -3.0277E-01 -2.9557E-01 -2.8820E-01  4.3465E-02
  5.7675E-02  7.3120E-02  1.0281E-01  1.1262E-01  1.4946E-01  1.5661E-01
  1.6122E-01  1.9897E-01  3.0526E-01  3.2873E-01  3.3252E-01  3.7256E-01
  4.6490E-01  5.1569E-01  5.3819E-01  5.4793E-01  5.5863E-01  5.8277E-01
  prteigrs : nnsclo,ikpt=   30  169 max resid (incl. the buffer)=  1.00414E-10
 Non-SCF case, kpt  170 (  0.50000  0.29000  0.00000), residuals and eigenvalues=
  5.54E-13  9.08E-13  6.80E-13  9.64E-13  7.56E-13  2.51E-13  3.54E-13  6.79E-13
  4.12E-13  6.91E-13  2.57E-13  5.28E-13  2.59E-13  2.67E-13  4.99E-13  5.59E-13
  3.47E-13  3.00E-13  6.86E-13  2.18E-13  2.13E-13  3.25E-13  1.81E-13  2.03E-13
  4.76E-13  9.86E-13  6.18E-13  2.94E-13  6.22E-13  6.25E-11
 -2.1023E+00 -1.1544E+00 -1.1538E+00 -1.1530E+00 -9.6478E-01 -4.1385E-01
 -3.8319E-01 -3.7664E-01 -3.0268E-01 -2.9516E-01 -2.8843E-01  4.3215E-02
  5.5955E-02  7.1358E-02  1.0293E-01  1.1201E-01  1.5027E-01  1.5541E-01
  1.6089E-01  2.0057E-01  3.0711E-01  3.2871E-01  3.3299E-01  3.7324E-01
  4.6716E-01  5.1685E-01  5.3675E-01  5.5115E-01  5.6050E-01  5.8291E-01
  prteigrs : nnsclo,ikpt=   30  170 max resid (incl. the buffer)=  6.24590E-11
 Non-SCF case, kpt  171 (  0.50000  0.30000  0.00000), residuals and eigenvalues=
  6.04E-13  5.55E-13  3.67E-13  3.31E-13  7.90E-13  3.63E-13  7.28E-13  9.92E-13
  2.62E-13  9.71E-13  6.37E-13  6.50E-13  6.05E-13  2.10E-13  7.10E-13  1.40E-13
  1.63E-13  3.85E-13  3.20E-13  5.79E-13  1.86E-13  4.40E-13  4.62E-13  2.24E-13
  3.31E-13  7.27E-13  9.15E-13  7.47E-13  1.49E-11  4.91E-10
 -2.1023E+00 -1.1544E+00 -1.1539E+00 -1.1530E+00 -9.6476E-01 -4.1284E-01
 -3.8371E-01 -3.7698E-01 -3.0260E-01 -2.9477E-01 -2.8865E-01  4.2943E-02
  5.4304E-02  6.9634E-02  1.0305E-01  1.1142E-01  1.5106E-01  1.5423E-01
  1.6061E-01  2.0208E-01  3.0891E-01  3.2869E-01  3.3348E-01  3.7387E-01
  4.6940E-01  5.1801E-01  5.3535E-01  5.5445E-01  5.6236E-01  5.8304E-01
  prteigrs : nnsclo,ikpt=   30  171 max resid (incl. the buffer)=  4.90561E-10
 Non-SCF case, kpt  172 (  0.50000  0.31000  0.00000), residuals and eigenvalues=
  3.94E-13  8.10E-13  3.88E-13  9.16E-13  8.13E-13  2.66E-13  6.49E-13  4.92E-13
  3.92E-13  2.62E-13  8.92E-13  3.74E-13  7.44E-13  3.33E-13  5.06E-13  2.21E-13
  2.79E-13  5.92E-13  4.45E-13  7.68E-13  6.18E-13  3.36E-13  2.60E-13  4.69E-13
  4.38E-13  3.55E-13  9.84E-13  8.13E-13  1.08E-11  7.26E-11
 -2.1023E+00 -1.1544E+00 -1.1539E+00 -1.1530E+00 -9.6473E-01 -4.1181E-01
 -3.8421E-01 -3.7735E-01 -3.0251E-01 -2.9438E-01 -2.8886E-01  4.2645E-02
  5.2724E-02  6.7960E-02  1.0317E-01  1.1083E-01  1.5184E-01  1.5311E-01
  1.6039E-01  2.0350E-01  3.1066E-01  3.2867E-01  3.3400E-01  3.7445E-01
  4.7159E-01  5.1915E-01  5.3402E-01  5.5783E-01  5.6419E-01  5.8317E-01
  prteigrs : nnsclo,ikpt=   30  172 max resid (incl. the buffer)=  7.26285E-11
 Non-SCF case, kpt  173 (  0.50000  0.32000  0.00000), residuals and eigenvalues=
  4.25E-13  8.82E-13  3.10E-13  9.02E-13  9.11E-13  2.53E-13  3.04E-13  5.20E-13
  7.62E-13  2.65E-13  8.62E-13  5.76E-13  9.20E-13  4.72E-13  6.20E-13  2.61E-13
  7.87E-13  3.47E-13  4.52E-13  8.57E-13  4.81E-13  4.13E-13  8.40E-13  3.84E-13
  5.09E-13  6.15E-13  9.61E-13  9.51E-13  5.15E-12  2.07E-10
 -2.1023E+00 -1.1544E+00 -1.1540E+00 -1.1530E+00 -9.6470E-01 -4.1077E-01
 -3.8469E-01 -3.7775E-01 -3.0243E-01 -2.9401E-01 -2.8905E-01  4.2320E-02
  5.1216E-02  6.6349E-02  1.0330E-01  1.1027E-01  1.5202E-01  1.5260E-01
  1.6022E-01  2.0484E-01  3.1235E-01  3.2865E-01  3.3453E-01  3.7498E-01
  4.7372E-01  5.2027E-01  5.3274E-01  5.6127E-01  5.6599E-01  5.8330E-01
  prteigrs : nnsclo,ikpt=   30  173 max resid (incl. the buffer)=  2.07143E-10
 Non-SCF case, kpt  174 (  0.50000  0.33000  0.00000), residuals and eigenvalues=
  2.68E-13  6.85E-13  2.29E-13  3.23E-13  6.03E-13  7.62E-13  4.48E-13  3.24E-13
  8.04E-13  5.90E-13  1.84E-13  2.70E-13  1.74E-13  1.84E-13  9.85E-13  5.30E-13
  3.04E-13  5.55E-13  7.40E-13  2.84E-13  4.06E-13  4.35E-13  3.63E-13  6.74E-13
  2.06E-13  6.63E-13  5.89E-13  9.17E-13  3.64E-12  2.58E-11
 -2.1023E+00 -1.1544E+00 -1.1540E+00 -1.1530E+00 -9.6468E-01 -4.0971E-01
 -3.8516E-01 -3.7819E-01 -3.0235E-01 -2.9366E-01 -2.8924E-01  4.1965E-02
  4.9781E-02  6.4813E-02  1.0342E-01  1.0972E-01  1.5098E-01  1.5333E-01
  1.6008E-01  2.0609E-01  3.1397E-01  3.2864E-01  3.3508E-01  3.7547E-01
  4.7580E-01  5.2136E-01  5.3151E-01  5.6478E-01  5.6775E-01  5.8342E-01
  prteigrs : nnsclo,ikpt=   30  174 max resid (incl. the buffer)=  2.57951E-11
 Non-SCF case, kpt  175 (  0.50000  0.34000  0.00000), residuals and eigenvalues=
  2.69E-13  8.43E-13  5.25E-13  6.64E-13  9.52E-13  3.75E-13  8.47E-13  6.41E-13
  2.62E-13  4.24E-13  8.77E-13  3.86E-13  5.18E-13  3.90E-13  5.67E-13  7.65E-13
  4.71E-13  2.81E-13  3.43E-13  3.43E-13  2.95E-13  3.41E-13  6.77E-13  9.55E-13
  8.30E-13  2.00E-13  7.14E-13  8.35E-13  6.04E-12  2.19E-11
 -2.1023E+00 -1.1544E+00 -1.1540E+00 -1.1530E+00 -9.6466E-01 -4.0864E-01
 -3.8560E-01 -3.7867E-01 -3.0228E-01 -2.9331E-01 -2.8940E-01  4.1580E-02
  4.8422E-02  6.3366E-02  1.0354E-01  1.0920E-01  1.4999E-01  1.5404E-01
  1.5998E-01  2.0726E-01  3.1553E-01  3.2863E-01  3.3563E-01  3.7591E-01
  4.7780E-01  5.2243E-01  5.3035E-01  5.6835E-01  5.6946E-01  5.8355E-01
  prteigrs : nnsclo,ikpt=   30  175 max resid (incl. the buffer)=  2.18896E-11
 Non-SCF case, kpt  176 (  0.50000  0.35000  0.00000), residuals and eigenvalues=
  3.56E-13  7.56E-13  1.60E-13  8.12E-13  8.49E-13  6.59E-13  3.47E-13  2.64E-13
  1.78E-13  4.04E-13  2.49E-13  4.15E-13  6.59E-13  5.18E-13  2.87E-13  5.18E-13
  5.67E-13  4.38E-13  6.89E-13  9.83E-13  1.45E-13  3.63E-13  8.56E-13  9.03E-13
  2.36E-13  3.03E-13  2.10E-13  7.08E-13  3.98E-13  2.29E-11
 -2.1023E+00 -1.1544E+00 -1.1541E+00 -1.1530E+00 -9.6463E-01 -4.0757E-01
 -3.8603E-01 -3.7918E-01 -3.0220E-01 -2.9299E-01 -2.8955E-01  4.1164E-02
  4.7138E-02  6.2014E-02  1.0366E-01  1.0870E-01  1.4905E-01  1.5473E-01
  1.5992E-01  2.0835E-01  3.1702E-01  3.2861E-01  3.3619E-01  3.7632E-01
  4.7972E-01  5.2345E-01  5.2924E-01  5.7111E-01  5.7196E-01  5.8367E-01
  prteigrs : nnsclo,ikpt=   30  176 max resid (incl. the buffer)=  2.29482E-11
 Non-SCF case, kpt  177 (  0.50000  0.36000  0.00000), residuals and eigenvalues=
  9.41E-13  2.91E-13  7.44E-13  7.91E-13  4.66E-13  3.51E-13  2.66E-13  3.96E-13
  3.15E-13  5.24E-13  7.22E-13  3.95E-13  8.99E-13  2.65E-13  4.12E-13  6.19E-13
  2.45E-13  5.58E-13  2.27E-13  5.88E-13  4.16E-13  2.24E-13  2.64E-13  5.25E-13
  4.39E-13  7.34E-13  5.69E-13  9.72E-13  7.16E-13  1.44E-12
 -2.1023E+00 -1.1544E+00 -1.1541E+00 -1.1530E+00 -9.6461E-01 -4.0648E-01
 -3.8644E-01 -3.7973E-01 -3.0213E-01 -2.9268E-01 -2.8969E-01  4.0719E-02
  4.5932E-02  6.0766E-02  1.0378E-01  1.0822E-01  1.4816E-01  1.5538E-01
  1.5987E-01  2.0935E-01  3.1843E-01  3.2860E-01  3.3675E-01  3.7669E-01
  4.8155E-01  5.2444E-01  5.2820E-01  5.7270E-01  5.7560E-01  5.8378E-01
  prteigrs : nnsclo,ikpt=   30  177 max resid (incl. the buffer)=  1.43671E-12
 Non-SCF case, kpt  178 (  0.50000  0.37000  0.00000), residuals and eigenvalues=
  8.22E-13  9.17E-13  7.02E-13  8.38E-13  4.33E-13  3.04E-13  3.00E-13  3.70E-13
  2.74E-13  4.31E-13  6.51E-13  2.86E-13  7.44E-13  2.08E-13  3.17E-13  5.36E-13
  1.82E-13  4.81E-13  9.64E-13  6.14E-13  3.40E-13  1.96E-13  2.25E-13  4.13E-13
  4.63E-13  3.16E-13  6.46E-13  6.37E-13  6.44E-13  7.37E-13
 -2.1023E+00 -1.1544E+00 -1.1541E+00 -1.1530E+00 -9.6459E-01 -4.0540E-01
 -3.8682E-01 -3.8031E-01 -3.0207E-01 -2.9239E-01 -2.8982E-01  4.0248E-02
  4.4804E-02  5.9626E-02  1.0390E-01  1.0776E-01  1.4732E-01  1.5600E-01
  1.5985E-01  2.1028E-01  3.1977E-01  3.2859E-01  3.3729E-01  3.7702E-01
  4.8329E-01  5.2538E-01  5.2723E-01  5.7422E-01  5.7925E-01  5.8390E-01
 Non-SCF case, kpt  179 (  0.50000  0.38000  0.00000), residuals and eigenvalues=
  6.47E-13  6.98E-13  5.27E-13  8.68E-13  4.47E-13  5.32E-13  2.69E-13  3.01E-13
  3.55E-13  9.70E-13  5.95E-13  3.21E-13  2.59E-13  2.06E-13  6.54E-13  2.54E-13
  1.92E-13  5.31E-13  5.54E-13  7.15E-13  4.49E-13  5.10E-13  4.16E-13  1.84E-13
  3.37E-13  9.31E-13  6.68E-13  5.34E-13  9.25E-13  7.75E-12
 -2.1023E+00 -1.1544E+00 -1.1542E+00 -1.1530E+00 -9.6457E-01 -4.0430E-01
 -3.8718E-01 -3.8093E-01 -3.0200E-01 -2.9211E-01 -2.8993E-01  3.9754E-02
  4.3755E-02  5.8598E-02  1.0401E-01  1.0734E-01  1.4654E-01  1.5658E-01
  1.5985E-01  2.1112E-01  3.2102E-01  3.2858E-01  3.3783E-01  3.7732E-01
  4.8492E-01  5.2628E-01  5.2632E-01  5.7567E-01  5.8290E-01  5.8401E-01
  prteigrs : nnsclo,ikpt=   30  179 max resid (incl. the buffer)=  7.75313E-12
 Non-SCF case, kpt  180 (  0.50000  0.39000  0.00000), residuals and eigenvalues=
  7.95E-13  6.31E-13  4.72E-13  7.91E-13  4.51E-13  4.65E-13  2.57E-13  9.73E-13
  2.99E-13  8.64E-13  5.88E-13  9.49E-13  1.76E-13  2.72E-13  6.29E-13  1.65E-13
  1.84E-13  5.97E-13  4.65E-13  6.24E-13  3.48E-13  5.73E-13  5.35E-13  7.09E-13
  4.11E-13  4.41E-13  5.67E-13  7.70E-13  7.68E-12  1.59E-12
 -2.1023E+00 -1.1544E+00 -1.1542E+00 -1.1530E+00 -9.6455E-01 -4.0321E-01
 -3.8751E-01 -3.8159E-01 -3.0195E-01 -2.9186E-01 -2.9003E-01  3.9246E-02
  4.2787E-02  5.7681E-02  1.0412E-01  1.0694E-01  1.4581E-01  1.5712E-01
  1.5986E-01  2.1189E-01  3.2218E-01  3.2857E-01  3.3834E-01  3.7759E-01
  4.8644E-01  5.2548E-01  5.2712E-01  5.7703E-01  5.8411E-01  5.8653E-01
  prteigrs : nnsclo,ikpt=   30  180 max resid (incl. the buffer)=  7.68033E-12
 Non-SCF case, kpt  181 (  0.50000  0.40000  0.00000), residuals and eigenvalues=
  9.64E-13  5.31E-13  4.07E-13  6.54E-13  4.45E-13  3.68E-13  2.37E-13  7.83E-13
  2.36E-13  1.64E-13  7.21E-13  6.89E-13  8.56E-13  3.81E-13  6.56E-13  8.66E-13
  1.67E-13  5.79E-13  7.02E-13  4.80E-13  3.57E-13  6.40E-13  6.89E-13  8.23E-13
  5.20E-13  3.89E-13  7.42E-13  3.83E-13  1.15E-12  5.90E-13
 -2.1023E+00 -1.1544E+00 -1.1542E+00 -1.1530E+00 -9.6454E-01 -4.0212E-01
 -3.8782E-01 -3.8228E-01 -3.0189E-01 -2.9162E-01 -2.9011E-01  3.8731E-02
  4.1900E-02  5.6873E-02  1.0422E-01  1.0657E-01  1.4514E-01  1.5763E-01
  1.5988E-01  2.1259E-01  3.2325E-01  3.2856E-01  3.3884E-01  3.7783E-01
  4.8785E-01  5.2471E-01  5.2790E-01  5.7829E-01  5.8420E-01  5.9010E-01
  prteigrs : nnsclo,ikpt=   30  181 max resid (incl. the buffer)=  1.15165E-12
 Non-SCF case, kpt  182 (  0.50000  0.41000  0.00000), residuals and eigenvalues=
  2.89E-13  3.90E-13  6.67E-13  5.60E-13  8.34E-13  2.22E-13  2.30E-13  5.61E-13
  2.08E-13  9.02E-13  2.08E-13  4.16E-13  8.07E-13  6.68E-13  3.79E-13  4.35E-13
  2.12E-13  9.26E-13  4.93E-13  9.04E-13  5.05E-13  3.54E-13  3.47E-13  5.23E-13
  3.78E-13  4.90E-13  9.07E-13  9.42E-13  1.49E-11  1.96E-11
 -2.1023E+00 -1.1544E+00 -1.1542E+00 -1.1530E+00 -9.6452E-01 -4.0103E-01
 -3.8810E-01 -3.8300E-01 -3.0184E-01 -2.9141E-01 -2.9019E-01  3.8221E-02
  4.1095E-02  5.6170E-02  1.0431E-01  1.0623E-01  1.4453E-01  1.5809E-01
  1.5991E-01  2.1321E-01  3.2423E-01  3.2855E-01  3.3930E-01  3.7804E-01
  4.8915E-01  5.2401E-01  5.2862E-01  5.7946E-01  5.8429E-01  5.9358E-01
  prteigrs : nnsclo,ikpt=   30  182 max resid (incl. the buffer)=  1.96235E-11
 Non-SCF case, kpt  183 (  0.50000  0.42000  0.00000), residuals and eigenvalues=
  1.68E-13  5.06E-13  2.33E-13  5.88E-13  4.96E-13  2.47E-13  7.43E-13  7.38E-13
  4.29E-13  3.25E-13  6.68E-13  7.92E-13  1.89E-13  7.51E-13  8.31E-13  1.85E-13
  2.91E-13  6.69E-13  7.83E-13  4.91E-13  6.13E-13  4.11E-13  4.06E-13  4.68E-13
  9.89E-13  4.68E-13  6.76E-13  9.82E-13  1.14E-12  1.59E-11
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6451E-01 -3.9995E-01
 -3.8835E-01 -3.8375E-01 -3.0180E-01 -2.9121E-01 -2.9025E-01  3.7726E-02
  4.0372E-02  5.5565E-02  1.0440E-01  1.0593E-01  1.4398E-01  1.5851E-01
  1.5994E-01  2.1376E-01  3.2512E-01  3.2855E-01  3.3973E-01  3.7823E-01
  4.9031E-01  5.2338E-01  5.2928E-01  5.8052E-01  5.8437E-01  5.9693E-01
  prteigrs : nnsclo,ikpt=   30  183 max resid (incl. the buffer)=  1.58811E-11
 Non-SCF case, kpt  184 (  0.50000  0.43000  0.00000), residuals and eigenvalues=
  1.77E-13  6.68E-13  2.71E-13  6.32E-13  5.86E-13  2.64E-13  8.32E-13  7.54E-13
  6.46E-13  5.22E-13  8.61E-13  2.16E-13  2.42E-13  2.68E-13  3.26E-13  2.32E-13
  4.58E-13  5.70E-13  8.65E-13  9.52E-13  5.25E-13  6.19E-13  8.36E-13  6.08E-13
  2.26E-13  4.88E-13  7.99E-13  4.48E-13  5.90E-13  7.99E-12
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6449E-01 -3.9888E-01
 -3.8858E-01 -3.8452E-01 -3.0176E-01 -2.9104E-01 -2.9031E-01  3.7258E-02
  3.9733E-02  5.5052E-02  1.0448E-01  1.0566E-01  1.4349E-01  1.5888E-01
  1.5998E-01  2.1425E-01  3.2591E-01  3.2854E-01  3.4012E-01  3.7840E-01
  4.9135E-01  5.2282E-01  5.2986E-01  5.8148E-01  5.8444E-01  6.0011E-01
  prteigrs : nnsclo,ikpt=   30  184 max resid (incl. the buffer)=  7.99467E-12
 Non-SCF case, kpt  185 (  0.50000  0.44000  0.00000), residuals and eigenvalues=
  8.72E-13  5.00E-13  6.33E-13  5.89E-13  3.56E-13  7.96E-13  2.98E-13  4.31E-13
  3.02E-13  2.18E-13  3.56E-13  8.80E-13  3.07E-13  9.70E-13  3.27E-13  7.50E-13
  3.21E-13  4.23E-13  1.10E-13  5.84E-13  2.24E-13  3.17E-13  5.63E-13  4.69E-13
  6.53E-13  7.87E-13  7.27E-13  6.60E-13  1.23E-12  7.13E-12
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6448E-01 -3.9783E-01
 -3.8877E-01 -3.8532E-01 -3.0172E-01 -2.9089E-01 -2.9035E-01  3.6826E-02
  3.9177E-02  5.4624E-02  1.0455E-01  1.0542E-01  1.4307E-01  1.5921E-01
  1.6001E-01  2.1466E-01  3.2659E-01  3.2853E-01  3.4047E-01  3.7853E-01
  4.9226E-01  5.2233E-01  5.3038E-01  5.8231E-01  5.8451E-01  6.0305E-01
  prteigrs : nnsclo,ikpt=   30  185 max resid (incl. the buffer)=  7.12644E-12
 Non-SCF case, kpt  186 (  0.50000  0.45000  0.00000), residuals and eigenvalues=
  8.22E-13  4.15E-13  6.20E-13  7.59E-13  3.18E-13  7.23E-13  2.66E-13  7.04E-13
  4.26E-13  2.41E-13  3.65E-13  4.22E-13  2.37E-13  5.57E-13  3.99E-13  5.90E-13
  1.78E-13  3.36E-13  9.70E-13  5.60E-13  2.20E-13  2.57E-13  4.66E-13  5.36E-13
  7.35E-13  9.12E-13  5.76E-13  4.57E-13  1.20E-12  1.24E-11
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6447E-01 -3.9680E-01
 -3.8894E-01 -3.8613E-01 -3.0169E-01 -2.9076E-01 -2.9039E-01  3.6444E-02
  3.8707E-02  5.4274E-02  1.0461E-01  1.0522E-01  1.4270E-01  1.5949E-01
  1.6004E-01  2.1501E-01  3.2718E-01  3.2853E-01  3.4077E-01  3.7865E-01
  4.9303E-01  5.2192E-01  5.3082E-01  5.8303E-01  5.8456E-01  6.0569E-01
  prteigrs : nnsclo,ikpt=   30  186 max resid (incl. the buffer)=  1.24036E-11
 Non-SCF case, kpt  187 (  0.50000  0.46000  0.00000), residuals and eigenvalues=
  7.16E-13  3.49E-13  5.69E-13  9.91E-13  2.94E-13  6.36E-13  8.51E-13  9.96E-13
  4.42E-13  2.35E-13  3.17E-13  3.97E-13  2.21E-13  7.65E-13  5.02E-13  5.32E-13
  5.97E-13  2.70E-13  7.48E-13  8.40E-13  2.41E-13  2.05E-13  3.95E-13  6.84E-13
  7.12E-13  7.16E-13  5.54E-13  2.82E-13  1.04E-12  1.46E-11
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6446E-01 -3.9580E-01
 -3.8908E-01 -3.8695E-01 -3.0166E-01 -2.9066E-01 -2.9042E-01  3.6117E-02
  3.8321E-02  5.3996E-02  1.0466E-01  1.0505E-01  1.4241E-01  1.5971E-01
  1.6007E-01  2.1529E-01  3.2766E-01  3.2853E-01  3.4102E-01  3.7874E-01
  4.9366E-01  5.2159E-01  5.3118E-01  5.8362E-01  5.8461E-01  6.0797E-01
  prteigrs : nnsclo,ikpt=   30  187 max resid (incl. the buffer)=  1.45802E-11
 Non-SCF case, kpt  188 (  0.50000  0.47000  0.00000), residuals and eigenvalues=
  6.11E-13  8.80E-13  5.23E-13  3.05E-13  9.79E-13  5.78E-13  5.59E-13  2.14E-13
  4.15E-13  2.30E-13  2.40E-13  4.77E-13  2.18E-13  9.75E-13  5.30E-13  4.95E-13
  3.25E-13  2.72E-13  5.86E-13  6.08E-13  2.37E-13  2.36E-13  3.42E-13  7.56E-13
  6.48E-13  6.87E-13  7.49E-13  7.16E-13  5.14E-12  1.05E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6446E-01 -3.9486E-01
 -3.8918E-01 -3.8775E-01 -3.0165E-01 -2.9058E-01 -2.9044E-01  3.5856E-02
  3.8021E-02  5.3786E-02  1.0470E-01  1.0492E-01  1.4217E-01  1.5989E-01
  1.6009E-01  2.1551E-01  3.2804E-01  3.2852E-01  3.4122E-01  3.7882E-01
  4.9416E-01  5.2132E-01  5.3147E-01  5.8409E-01  5.8464E-01  6.0982E-01
  prteigrs : nnsclo,ikpt=   30  188 max resid (incl. the buffer)=  1.05175E-10
 Non-SCF case, kpt  189 (  0.50000  0.48000  0.00000), residuals and eigenvalues=
  4.14E-13  4.63E-13  8.50E-13  8.14E-13  6.29E-13  2.23E-13  2.68E-13  6.51E-13
  8.06E-13  6.84E-13  9.60E-13  8.86E-13  3.75E-13  3.15E-13  6.51E-13  2.65E-13
  4.95E-13  2.43E-13  2.79E-13  3.46E-13  4.68E-13  4.81E-13  2.03E-13  3.76E-13
  3.98E-13  5.91E-13  5.20E-13  8.98E-13  5.48E-12  5.66E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6445E-01 -3.9402E-01
 -3.8926E-01 -3.8850E-01 -3.0163E-01 -2.9052E-01 -2.9046E-01  3.5665E-02
  3.7806E-02  5.3639E-02  1.0473E-01  1.0483E-01  1.4201E-01  1.6002E-01
  1.6011E-01  2.1567E-01  3.2831E-01  3.2852E-01  3.4137E-01  3.7887E-01
  4.9451E-01  5.2114E-01  5.3168E-01  5.8442E-01  5.8467E-01  6.1119E-01
  prteigrs : nnsclo,ikpt=   30  189 max resid (incl. the buffer)=  5.66228E-10
 Non-SCF case, kpt  190 (  0.50000  0.49000  0.00000), residuals and eigenvalues=
  5.42E-13  6.11E-13  9.60E-13  1.43E-13  4.91E-13  9.54E-13  3.49E-13  8.18E-13
  9.40E-13  7.19E-13  9.68E-13  8.39E-13  3.25E-13  3.06E-13  2.10E-13  2.40E-13
  3.96E-13  1.93E-13  2.17E-13  5.89E-13  4.92E-13  3.02E-13  1.78E-13  3.44E-13
  9.91E-13  2.67E-13  7.48E-13  9.78E-13  1.28E-12  3.89E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6445E-01 -3.9337E-01
 -3.8931E-01 -3.8908E-01 -3.0162E-01 -2.9048E-01 -2.9047E-01  3.5548E-02
  3.7677E-02  5.3551E-02  1.0475E-01  1.0477E-01  1.4191E-01  1.6010E-01
  1.6012E-01  2.1576E-01  3.2847E-01  3.2852E-01  3.4145E-01  3.7890E-01
  4.9473E-01  5.2102E-01  5.3180E-01  5.8462E-01  5.8469E-01  6.1203E-01
  prteigrs : nnsclo,ikpt=   30  190 max resid (incl. the buffer)=  3.88935E-10
 Non-SCF case, kpt  191 (  0.50000  0.50000  0.00000), residuals and eigenvalues=
  9.19E-13  2.14E-13  6.42E-13  8.35E-13  2.79E-13  6.34E-13  6.67E-13  6.76E-13
  1.83E-13  4.70E-13  1.50E-13  2.04E-13  3.18E-13  4.92E-13  5.72E-13  4.85E-13
  2.28E-13  3.82E-13  1.50E-13  9.87E-13  7.89E-13  3.76E-13  9.59E-13  8.27E-13
  6.22E-13  9.45E-13  1.59E-13  5.23E-13  2.49E-12  6.10E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6445E-01 -3.9311E-01
 -3.8932E-01 -3.8932E-01 -3.0162E-01 -2.9047E-01 -2.9047E-01  3.5509E-02
  3.7635E-02  5.3523E-02  1.0476E-01  1.0476E-01  1.4187E-01  1.6013E-01
  1.6013E-01  2.1579E-01  3.2852E-01  3.2852E-01  3.4148E-01  3.7891E-01
  4.9480E-01  5.2099E-01  5.3184E-01  5.8469E-01  5.8469E-01  6.1231E-01
  prteigrs : nnsclo,ikpt=   30  191 max resid (incl. the buffer)=  6.10137E-10
 Non-SCF case, kpt  192 (  0.49286  0.49286  0.00000), residuals and eigenvalues=
  6.13E-13  8.86E-13  4.38E-13  2.76E-13  3.51E-13  4.96E-13  6.20E-13  3.09E-13
  6.41E-13  4.88E-13  9.67E-13  2.20E-13  7.54E-13  3.43E-13  7.57E-13  7.24E-13
  3.17E-13  4.81E-13  2.28E-13  9.94E-13  2.95E-13  1.17E-13  3.31E-13  3.27E-13
  2.33E-13  4.23E-13  5.91E-13  9.78E-13  4.88E-13  4.85E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6445E-01 -3.9338E-01
 -3.8932E-01 -3.8907E-01 -3.0162E-01 -2.9048E-01 -2.9047E-01  3.5549E-02
  3.7679E-02  5.3552E-02  1.0475E-01  1.0478E-01  1.4191E-01  1.6009E-01
  1.6013E-01  2.1576E-01  3.2849E-01  3.2850E-01  3.4145E-01  3.7890E-01
  4.9473E-01  5.2102E-01  5.3180E-01  5.8464E-01  5.8466E-01  6.1202E-01
  prteigrs : nnsclo,ikpt=   30  192 max resid (incl. the buffer)=  4.84926E-10
 Non-SCF case, kpt  193 (  0.48571  0.48571  0.00000), residuals and eigenvalues=
  5.53E-13  8.78E-13  5.03E-13  7.31E-13  5.90E-13  6.18E-13  2.34E-13  7.49E-13
  6.10E-13  6.07E-13  8.73E-13  4.34E-13  3.77E-13  3.86E-13  7.26E-13  5.35E-13
  3.12E-13  7.11E-13  2.89E-13  3.87E-13  4.16E-13  2.25E-13  3.77E-13  3.97E-13
  5.92E-13  7.28E-13  2.45E-13  8.47E-13  1.94E-13  1.48E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6445E-01 -3.9402E-01
 -3.8930E-01 -3.8845E-01 -3.0163E-01 -2.9050E-01 -2.9048E-01  3.5667E-02
  3.7812E-02  5.3640E-02  1.0472E-01  1.0484E-01  1.4201E-01  1.5999E-01
  1.6014E-01  2.1566E-01  3.2839E-01  3.2843E-01  3.4136E-01  3.7887E-01
  4.9451E-01  5.2114E-01  5.3168E-01  5.8451E-01  5.8458E-01  6.1117E-01
  prteigrs : nnsclo,ikpt=   30  193 max resid (incl. the buffer)=  1.47941E-10
 Non-SCF case, kpt  194 (  0.47857  0.47857  0.00000), residuals and eigenvalues=
  2.58E-13  6.94E-13  3.98E-13  4.15E-13  5.74E-13  2.86E-13  2.46E-13  3.71E-13
  9.77E-13  8.14E-13  4.99E-13  3.34E-13  4.88E-13  9.00E-13  2.87E-13  2.08E-13
  6.39E-13  3.75E-13  2.07E-13  5.11E-13  4.34E-13  1.61E-13  4.16E-13  5.13E-13
  1.49E-13  8.14E-13  7.48E-13  7.79E-13  3.97E-12  2.71E-09
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6446E-01 -3.9486E-01
 -3.8928E-01 -3.8766E-01 -3.0165E-01 -2.9054E-01 -2.9049E-01  3.5858E-02
  3.8039E-02  5.3787E-02  1.0467E-01  1.0496E-01  1.4218E-01  1.5983E-01
  1.6015E-01  2.1550E-01  3.2824E-01  3.2831E-01  3.4122E-01  3.7882E-01
  4.9415E-01  5.2132E-01  5.3147E-01  5.8428E-01  5.8444E-01  6.0980E-01
  prteigrs : nnsclo,ikpt=   30  194 max resid (incl. the buffer)=  2.71167E-09
 Non-SCF case, kpt  195 (  0.47143  0.47143  0.00000), residuals and eigenvalues=
  2.99E-13  6.35E-13  3.65E-13  4.64E-13  5.36E-13  2.26E-13  9.05E-13  3.94E-13
  8.58E-13  8.13E-13  5.58E-13  3.02E-13  3.28E-13  8.48E-13  3.27E-13  6.11E-13
  5.89E-13  3.46E-13  1.87E-13  5.71E-13  2.69E-13  8.41E-13  2.37E-13  4.02E-13
  3.43E-13  8.00E-13  3.39E-13  7.68E-13  5.75E-12  3.58E-09
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6447E-01 -3.9578E-01
 -3.8924E-01 -3.8681E-01 -3.0167E-01 -2.9059E-01 -2.9050E-01  3.6116E-02
  3.8366E-02  5.3992E-02  1.0461E-01  1.0511E-01  1.4241E-01  1.5960E-01
  1.6018E-01  2.1529E-01  3.2801E-01  3.2815E-01  3.4101E-01  3.7874E-01
  4.9364E-01  5.2155E-01  5.3121E-01  5.8396E-01  5.8425E-01  6.0796E-01
  prteigrs : nnsclo,ikpt=   30  195 max resid (incl. the buffer)=  3.57928E-09
 Non-SCF case, kpt  196 (  0.46429  0.46429  0.00000), residuals and eigenvalues=
  3.73E-13  6.23E-13  3.56E-13  5.26E-13  4.96E-13  1.94E-13  8.39E-13  4.06E-13
  7.19E-13  7.46E-13  7.03E-13  2.88E-13  2.46E-13  7.31E-13  3.80E-13  7.91E-13
  6.13E-13  2.95E-13  2.74E-13  6.78E-13  5.63E-13  6.76E-13  2.58E-13  5.16E-13
  6.52E-13  5.43E-13  7.46E-13  5.07E-13  8.56E-13  2.93E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6447E-01 -3.9675E-01
 -3.8920E-01 -3.8593E-01 -3.0169E-01 -2.9065E-01 -2.9051E-01  3.6431E-02
  3.8802E-02  5.4255E-02  1.0453E-01  1.0532E-01  1.4272E-01  1.5932E-01
  1.6021E-01  2.1500E-01  3.2773E-01  3.2795E-01  3.4074E-01  3.7865E-01
  4.9299E-01  5.2182E-01  5.3089E-01  5.8355E-01  5.8400E-01  6.0571E-01
  prteigrs : nnsclo,ikpt=   30  196 max resid (incl. the buffer)=  2.93327E-10
 Non-SCF case, kpt  197 (  0.45714  0.45714  0.00000), residuals and eigenvalues=
  3.88E-13  5.70E-13  9.32E-13  5.84E-13  4.37E-13  8.37E-13  8.63E-13  3.01E-13
  5.92E-13  6.83E-13  7.65E-13  3.01E-13  2.53E-13  7.71E-13  4.20E-13  4.40E-13
  7.35E-13  2.52E-13  3.89E-13  6.57E-13  1.99E-13  3.48E-13  3.32E-13  7.62E-13
  7.43E-13  6.13E-13  2.36E-13  8.00E-13  1.23E-12  1.28E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6448E-01 -3.9774E-01
 -3.8914E-01 -3.8505E-01 -3.0172E-01 -2.9073E-01 -2.9053E-01  3.6794E-02
  3.9352E-02  5.4575E-02  1.0443E-01  1.0556E-01  1.4308E-01  1.5897E-01
  1.6024E-01  2.1466E-01  3.2738E-01  3.2770E-01  3.4042E-01  3.7853E-01
  4.9221E-01  5.2209E-01  5.3055E-01  5.8306E-01  5.8370E-01  6.0313E-01
  prteigrs : nnsclo,ikpt=   30  197 max resid (incl. the buffer)=  1.27618E-10
 Non-SCF case, kpt  198 (  0.45000  0.45000  0.00000), residuals and eigenvalues=
  4.27E-13  5.74E-13  7.82E-13  5.99E-13  4.30E-13  6.97E-13  9.02E-13  8.62E-13
  6.14E-13  6.70E-13  7.48E-13  2.94E-13  3.10E-13  8.24E-13  4.21E-13  6.63E-13
  8.04E-13  2.18E-13  4.71E-13  5.91E-13  2.85E-13  4.10E-13  4.28E-13  8.79E-13
  9.35E-13  4.60E-13  8.03E-13  9.86E-13  1.71E-12  1.94E-10
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6449E-01 -3.9873E-01
 -3.8908E-01 -3.8418E-01 -3.0176E-01 -2.9082E-01 -2.9054E-01  3.7201E-02
  4.0023E-02  5.4953E-02  1.0432E-01  1.0585E-01  1.4351E-01  1.5858E-01
  1.6029E-01  2.1426E-01  3.2698E-01  3.2740E-01  3.4004E-01  3.7840E-01
  4.9128E-01  5.2232E-01  5.3023E-01  5.8249E-01  5.8334E-01  6.0027E-01
  prteigrs : nnsclo,ikpt=   30  198 max resid (incl. the buffer)=  1.94495E-10
 Non-SCF case, kpt  199 (  0.44286  0.44286  0.00000), residuals and eigenvalues=
  7.32E-13  8.87E-13  9.97E-13  6.25E-13  4.59E-13  7.08E-13  2.18E-13  7.13E-13
  7.08E-13  4.63E-13  6.83E-13  6.50E-13  7.89E-13  2.69E-13  2.94E-13  2.49E-13
  4.19E-13  7.92E-13  8.92E-13  9.30E-13  7.25E-13  1.55E-13  6.29E-13  8.09E-13
  8.43E-13  5.97E-13  6.43E-13  8.40E-13  8.83E-13  4.89E-13
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6451E-01 -3.9973E-01
 -3.8900E-01 -3.8334E-01 -3.0180E-01 -2.9093E-01 -2.9056E-01  3.7646E-02
  4.0817E-02  5.5386E-02  1.0420E-01  1.0619E-01  1.4400E-01  1.5814E-01
  1.6034E-01  2.1381E-01  3.2651E-01  3.2706E-01  3.3960E-01  3.7824E-01
  4.9022E-01  5.2245E-01  5.2999E-01  5.8184E-01  5.8294E-01  5.9717E-01
 Non-SCF case, kpt  200 (  0.43571  0.43571  0.00000), residuals and eigenvalues=
  9.51E-13  9.28E-13  9.38E-13  6.94E-13  4.76E-13  7.69E-13  2.23E-13  9.06E-13
  8.07E-13  4.61E-13  6.39E-13  6.52E-13  8.09E-13  2.27E-13  2.71E-13  2.12E-13
  4.97E-13  8.76E-13  1.99E-13  9.99E-13  7.33E-13  2.42E-13  5.32E-13  5.75E-13
  1.74E-13  9.76E-13  9.37E-13  6.10E-13  4.99E-13  7.59E-13
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6452E-01 -4.0072E-01
 -3.8892E-01 -3.8251E-01 -3.0185E-01 -2.9105E-01 -2.9058E-01  3.8128E-02
  4.1733E-02  5.5875E-02  1.0407E-01  1.0657E-01  1.4454E-01  1.5765E-01
  1.6040E-01  2.1330E-01  3.2598E-01  3.2667E-01  3.3910E-01  3.7806E-01
  4.8903E-01  5.2241E-01  5.2987E-01  5.8112E-01  5.8248E-01  5.9389E-01
 Non-SCF case, kpt  201 (  0.42857  0.42857  0.00000), residuals and eigenvalues=
  2.26E-13  2.90E-13  9.31E-13  7.67E-13  5.11E-13  7.84E-13  9.54E-13  1.98E-13
  9.05E-13  4.70E-13  6.02E-13  7.87E-13  7.82E-13  3.55E-13  2.46E-13  2.14E-13
  6.96E-13  9.33E-13  2.89E-13  5.26E-13  6.96E-13  3.47E-13  6.27E-13  2.85E-13
  2.00E-13  5.24E-13  7.03E-13  7.39E-13  8.73E-13  7.61E-13
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6454E-01 -4.0171E-01
 -3.8882E-01 -3.8172E-01 -3.0190E-01 -2.9119E-01 -2.9060E-01  3.8648E-02
  4.2767E-02  5.6418E-02  1.0392E-01  1.0699E-01  1.4514E-01  1.5713E-01
  1.6047E-01  2.1273E-01  3.2540E-01  3.2623E-01  3.3855E-01  3.7786E-01
  4.8771E-01  5.2214E-01  5.2995E-01  5.8033E-01  5.8197E-01  5.9044E-01
 Non-SCF case, kpt  202 (  0.42143  0.42143  0.00000), residuals and eigenvalues=
  2.78E-13  3.52E-13  2.61E-13  8.31E-13  5.54E-13  7.36E-13  7.83E-13  3.55E-13
  9.88E-13  4.83E-13  6.29E-13  1.51E-13  6.52E-13  5.62E-13  2.73E-13  2.34E-13
  8.99E-13  1.93E-13  3.97E-13  5.18E-13  7.27E-13  4.67E-13  6.95E-13  5.63E-13
  2.08E-13  6.66E-13  2.93E-13  7.47E-13  7.47E-13  6.19E-13
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6456E-01 -4.0269E-01
 -3.8872E-01 -3.8095E-01 -3.0196E-01 -2.9133E-01 -2.9062E-01  3.9205E-02
  4.3918E-02  5.7014E-02  1.0377E-01  1.0746E-01  1.4580E-01  1.5658E-01
  1.6054E-01  2.1212E-01  3.2475E-01  3.2575E-01  3.3794E-01  3.7764E-01
  4.8626E-01  5.2162E-01  5.3022E-01  5.7947E-01  5.8141E-01  5.8687E-01
 Non-SCF case, kpt  203 (  0.41429  0.41429  0.00000), residuals and eigenvalues=
  3.38E-13  4.34E-13  3.45E-13  8.99E-13  6.05E-13  6.68E-13  5.62E-13  6.02E-13
  2.79E-13  4.77E-13  7.03E-13  1.98E-13  3.86E-13  7.36E-13  3.45E-13  2.68E-13
  2.26E-13  2.25E-13  5.04E-13  4.68E-13  7.95E-13  5.92E-13  2.66E-13  9.84E-13
  1.87E-13  9.69E-13  6.37E-13  8.41E-13  3.31E-12  7.47E-13
 -2.1023E+00 -1.1543E+00 -1.1543E+00 -1.1530E+00 -9.6458E-01 -4.0365E-01
 -3.8861E-01 -3.8022E-01 -3.0202E-01 -2.9149E-01 -2.9064E-01  3.9801E-02
  4.5182E-02  5.7663E-02  1.0362E-01  1.0797E-01  1.4650E-01  1.5601E-01
  1.6063E-01  2.1145E-01  3.2405E-01  3.2523E-01  3.3728E-01  3.7739E-01
  4.8470E-01  5.2086E-01  5.3067E-01  5.7856E-01  5.8081E-01  5.8319E-01
  prteigrs : nnsclo,ikpt=   30  203 max resid (incl. the buffer)=  3.31223E-12
 Non-SCF case, kpt  204 (  0.40714  0.40714  0.00000), residuals and eigenvalues=
  2.85E-13  9.08E-13  4.03E-13  3.13E-13  4.39E-13  3.94E-13  7.81E-13  5.88E-13
  9.21E-13  4.36E-13  2.25E-13  1.60E-13  1.32E-13  4.11E-13  4.26E-13  2.58E-13
  5.42E-13  3.34E-13  2.87E-13  2.27E-13  9.44E-13  4.36E-13  9.28E-13  4.34E-13
  3.61E-13  9.69E-13  2.51E-13  8.25E-13  8.53E-13  2.21E-12
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1530E+00 -9.6460E-01 -4.0460E-01
 -3.8848E-01 -3.7953E-01 -3.0209E-01 -2.9167E-01 -2.9067E-01  4.0438E-02
  4.6555E-02  5.8362E-02  1.0346E-01  1.0852E-01  1.4725E-01  1.5542E-01
  1.6073E-01  2.1074E-01  3.2330E-01  3.2466E-01  3.3656E-01  3.7712E-01
  4.8301E-01  5.1991E-01  5.3124E-01  5.7759E-01  5.7942E-01  5.8015E-01
  prteigrs : nnsclo,ikpt=   30  204 max resid (incl. the buffer)=  2.20776E-12
 Non-SCF case, kpt  205 (  0.40000  0.40000  0.00000), residuals and eigenvalues=
  2.92E-13  7.56E-13  4.66E-13  7.51E-13  4.96E-13  4.73E-13  7.91E-13  6.49E-13
  3.84E-13  6.89E-13  3.43E-13  2.73E-13  8.27E-13  3.57E-13  3.10E-13  4.54E-13
  1.99E-13  2.29E-13  2.07E-13  6.05E-13  2.90E-13  2.75E-13  8.44E-13  4.07E-13
  9.75E-13  2.16E-13  4.67E-13  9.14E-13  3.93E-12  9.32E-12
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1530E+00 -9.6462E-01 -4.0554E-01
 -3.8835E-01 -3.7887E-01 -3.0216E-01 -2.9185E-01 -2.9069E-01  4.1114E-02
  4.8033E-02  5.9111E-02  1.0330E-01  1.0912E-01  1.4805E-01  1.5482E-01
  1.6084E-01  2.0999E-01  3.2249E-01  3.2405E-01  3.3579E-01  3.7684E-01
  4.8121E-01  5.1879E-01  5.3189E-01  5.7557E-01  5.7656E-01  5.7946E-01
  prteigrs : nnsclo,ikpt=   30  205 max resid (incl. the buffer)=  9.31957E-12
 Non-SCF case, kpt  206 (  0.39286  0.39286  0.00000), residuals and eigenvalues=
  3.09E-13  1.97E-13  3.07E-13  2.32E-13  2.93E-13  7.79E-13  1.05E-13  2.08E-13
  4.17E-13  6.01E-13  2.67E-13  9.15E-13  2.45E-13  4.03E-13  7.48E-13  2.37E-13
  4.17E-13  2.46E-13  2.95E-13  4.36E-13  4.69E-13  3.13E-13  2.32E-13  2.94E-13
  3.33E-13  6.10E-13  8.28E-13  6.29E-13  1.09E-11  1.83E-11
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1530E+00 -9.6465E-01 -4.0645E-01
 -3.8821E-01 -3.7826E-01 -3.0223E-01 -2.9205E-01 -2.9071E-01  4.1831E-02
  4.9614E-02  5.9907E-02  1.0314E-01  1.0976E-01  1.4889E-01  1.5422E-01
  1.6096E-01  2.0920E-01  3.2163E-01  3.2339E-01  3.3497E-01  3.7652E-01
  4.7931E-01  5.1754E-01  5.3257E-01  5.7167E-01  5.7550E-01  5.7871E-01
  prteigrs : nnsclo,ikpt=   30  206 max resid (incl. the buffer)=  1.83206E-11
 Non-SCF case, kpt  207 (  0.38571  0.38571  0.00000), residuals and eigenvalues=
  2.79E-13  2.64E-13  9.23E-13  6.39E-13  5.43E-13  4.24E-13  4.61E-13  3.03E-13
  3.69E-13  5.97E-13  3.65E-13  3.66E-13  3.53E-13  4.90E-13  6.41E-13  8.41E-13
  7.44E-13  5.76E-13  9.67E-13  6.22E-13  6.53E-13  4.86E-13  6.68E-13  5.96E-13
  8.55E-13  9.66E-13  3.15E-13  8.56E-13  2.39E-12  1.95E-11
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1530E+00 -9.6467E-01 -4.0734E-01
 -3.8806E-01 -3.7769E-01 -3.0231E-01 -2.9226E-01 -2.9073E-01  4.2589E-02
  5.1292E-02  6.0750E-02  1.0298E-01  1.1044E-01  1.4978E-01  1.5363E-01
  1.6109E-01  2.0837E-01  3.2073E-01  3.2269E-01  3.3410E-01  3.7619E-01
  4.7729E-01  5.1618E-01  5.3327E-01  5.6772E-01  5.7439E-01  5.7793E-01
  prteigrs : nnsclo,ikpt=   30  207 max resid (incl. the buffer)=  1.95094E-11
 Non-SCF case, kpt  208 (  0.37857  0.37857  0.00000), residuals and eigenvalues=
  3.18E-13  3.22E-13  2.06E-13  6.62E-13  6.37E-13  4.94E-13  4.44E-13  3.30E-13
  3.79E-13  6.55E-13  4.74E-13  3.73E-13  9.42E-13  7.35E-13  7.60E-13  8.71E-13
  2.07E-13  4.93E-13  1.81E-13  5.11E-13  7.27E-13  5.53E-13  8.09E-13  9.96E-13
  9.09E-13  3.00E-13  6.04E-13  5.85E-13  5.79E-12  3.79E-11
 -2.1023E+00 -1.1542E+00 -1.1542E+00 -1.1530E+00 -9.6470E-01 -4.0822E-01
 -3.8790E-01 -3.7716E-01 -3.0240E-01 -2.9249E-01 -2.9075E-01  4.3386E-02
  5.3066E-02  6.1637E-02  1.0282E-01  1.1117E-01  1.5070E-01  1.5304E-01
  1.6124E-01  2.0751E-01  3.1977E-01  3.2194E-01  3.3318E-01  3.7583E-01
  4.7518E-01  5.1472E-01  5.3394E-01  5.6373E-01  5.7325E-01  5.7711E-01
  prteigrs : nnsclo,ikpt=   30  208 max resid (incl. the buffer)=  3.79191E-11
 Non-SCF case, kpt  209 (  0.37143  0.37143  0.00000), residuals and eigenvalues=
  3.76E-13  3.62E-13  2.60E-13  6.53E-13  7.78E-13  5.70E-13  4.80E-13  3.71E-13
  4.12E-13  6.90E-13  5.78E-13  4.17E-13  6.29E-13  2.60E-13  8.53E-13  7.50E-13
  3.17E-13  3.71E-13  1.89E-13  9.85E-13  8.97E-13  5.16E-13  8.55E-13  8.68E-13
  8.31E-13  9.54E-13  6.18E-13  5.79E-13  5.31E-11  2.20E-10
 -2.1023E+00 -1.1542E+00 -1.1541E+00 -1.1530E+00 -9.6473E-01 -4.0906E-01
 -3.8773E-01 -3.7668E-01 -3.0249E-01 -2.9272E-01 -2.9078E-01  4.4222E-02
  5.4932E-02  6.2566E-02  1.0266E-01  1.1193E-01  1.5166E-01  1.5248E-01
  1.6140E-01  2.0662E-01  3.1876E-01  3.2116E-01  3.3221E-01  3.7546E-01
  4.7297E-01  5.1318E-01  5.3456E-01  5.5971E-01  5.7208E-01  5.7625E-01
  prteigrs : nnsclo,ikpt=   30  209 max resid (incl. the buffer)=  2.20045E-10
 Non-SCF case, kpt  210 (  0.36429  0.36429  0.00000), residuals and eigenvalues=
  3.47E-13  9.44E-13  6.51E-13  4.38E-13  3.38E-13  2.46E-13  8.23E-13  6.41E-13
  4.20E-13  8.25E-13  4.08E-13  7.56E-13  9.07E-13  1.57E-13  5.53E-13  6.95E-13
  4.94E-13  8.65E-13  1.47E-13  7.01E-13  9.70E-13  9.56E-13  3.51E-13  9.26E-13
  3.89E-13  7.73E-13  8.40E-13  7.18E-13  5.59E-11  2.41E-10
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1530E+00 -9.6476E-01 -4.0989E-01
 -3.8756E-01 -3.7623E-01 -3.0258E-01 -2.9297E-01 -2.9080E-01  4.5098E-02
  5.6887E-02  6.3536E-02  1.0251E-01  1.1274E-01  1.5195E-01  1.5265E-01
  1.6157E-01  2.0570E-01  3.1771E-01  3.2032E-01  3.3120E-01  3.7505E-01
  4.7066E-01  5.1156E-01  5.3511E-01  5.5567E-01  5.7089E-01  5.7535E-01
  prteigrs : nnsclo,ikpt=   30  210 max resid (incl. the buffer)=  2.40788E-10
 Non-SCF case, kpt  211 (  0.35714  0.35714  0.00000), residuals and eigenvalues=
  3.39E-13  9.82E-13  7.74E-13  4.25E-13  3.62E-13  2.53E-13  8.08E-13  6.07E-13
  3.99E-13  7.90E-13  4.36E-13  7.26E-13  2.57E-13  2.23E-13  7.07E-13  8.43E-13
  6.59E-13  2.05E-13  1.64E-13  9.08E-13  3.59E-13  5.84E-13  5.03E-13  2.33E-13
  4.63E-13  4.71E-13  9.98E-13  7.83E-13  2.35E-10  1.22E-09
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1530E+00 -9.6480E-01 -4.1069E-01
 -3.8737E-01 -3.7584E-01 -3.0267E-01 -2.9322E-01 -2.9083E-01  4.6012E-02
  5.8927E-02  6.4544E-02  1.0236E-01  1.1359E-01  1.5146E-01  1.5367E-01
  1.6177E-01  2.0476E-01  3.1662E-01  3.1945E-01  3.3014E-01  3.7463E-01
  4.6827E-01  5.0988E-01  5.3556E-01  5.5162E-01  5.6967E-01  5.7442E-01
  prteigrs : nnsclo,ikpt=   30  211 max resid (incl. the buffer)=  1.21879E-09
 Non-SCF case, kpt  212 (  0.35000  0.35000  0.00000), residuals and eigenvalues=
  3.86E-13  2.60E-13  2.26E-13  3.83E-13  3.49E-13  3.03E-13  3.45E-13  4.12E-13
  6.82E-13  3.35E-13  9.81E-13  5.30E-13  3.13E-13  3.67E-13  4.32E-13  8.05E-13
  8.81E-13  7.69E-13  3.62E-13  7.75E-13  8.86E-13  8.44E-13  2.65E-13  3.71E-13
  9.71E-13  2.51E-13  9.37E-13  3.37E-13  2.04E-09  1.10E-09
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1530E+00 -9.6483E-01 -4.1146E-01
 -3.8718E-01 -3.7548E-01 -3.0277E-01 -2.9349E-01 -2.9087E-01  4.6963E-02
  6.1048E-02  6.5589E-02  1.0222E-01  1.1447E-01  1.5100E-01  1.5473E-01
  1.6198E-01  2.0379E-01  3.1548E-01  3.1853E-01  3.2904E-01  3.7418E-01
  4.6579E-01  5.0813E-01  5.3591E-01  5.4756E-01  5.6844E-01  5.7346E-01
  prteigrs : nnsclo,ikpt=   30  212 max resid (incl. the buffer)=  2.03644E-09
 Non-SCF case, kpt  213 (  0.34286  0.34286  0.00000), residuals and eigenvalues=
  2.75E-13  8.04E-13  9.95E-13  9.16E-13  4.32E-13  7.90E-13  3.21E-13  1.80E-13
  8.79E-13  9.75E-13  2.66E-13  6.88E-13  5.69E-13  3.77E-13  2.97E-13  3.77E-13
  6.25E-13  2.26E-13  3.52E-13  2.42E-13  7.63E-13  2.84E-13  3.12E-13  9.40E-13
  2.84E-13  7.23E-13  5.22E-13  6.57E-13  4.59E-10  1.40E-08
 -2.1023E+00 -1.1541E+00 -1.1541E+00 -1.1530E+00 -9.6487E-01 -4.1221E-01
 -3.8698E-01 -3.7517E-01 -3.0287E-01 -2.9376E-01 -2.9090E-01  4.7951E-02
  6.3247E-02  6.6666E-02  1.0208E-01  1.1540E-01  1.5060E-01  1.5581E-01
  1.6220E-01  2.0282E-01  3.1431E-01  3.1758E-01  3.2790E-01  3.7371E-01
  4.6324E-01  5.0632E-01  5.3614E-01  5.4349E-01  5.6720E-01  5.7247E-01
  prteigrs : nnsclo,ikpt=   30  213 max resid (incl. the buffer)=  1.39663E-08
 Non-SCF case, kpt  214 (  0.33571  0.33571  0.00000), residuals and eigenvalues=
  3.02E-13  7.69E-13  8.84E-13  1.76E-13  4.58E-13  7.55E-13  3.71E-13  1.71E-13
  8.99E-13  2.46E-13  3.27E-13  6.20E-13  5.86E-13  3.82E-13  1.69E-13  3.74E-13
  6.85E-13  8.20E-13  3.41E-13  9.37E-13  7.46E-13  2.98E-13  2.69E-13  5.57E-13
  8.48E-13  6.21E-13  4.69E-13  6.30E-13  2.16E-10  6.60E-09
 -2.1023E+00 -1.1541E+00 -1.1540E+00 -1.1530E+00 -9.6490E-01 -4.1292E-01
 -3.8677E-01 -3.7491E-01 -3.0298E-01 -2.9405E-01 -2.9095E-01  4.8975E-02
  6.5520E-02  6.7774E-02  1.0196E-01  1.1636E-01  1.5026E-01  1.5692E-01
  1.6245E-01  2.0183E-01  3.1310E-01  3.1658E-01  3.2672E-01  3.7321E-01
  4.6061E-01  5.0446E-01  5.3622E-01  5.3942E-01  5.6594E-01  5.7144E-01
  prteigrs : nnsclo,ikpt=   30  214 max resid (incl. the buffer)=  6.60048E-09
 Non-SCF case, kpt  215 (  0.32857  0.32857  0.00000), residuals and eigenvalues=
  3.12E-13  6.37E-13  8.69E-13  9.56E-13  4.18E-13  7.59E-13  4.23E-13  9.67E-13
  9.69E-13  2.51E-13  1.93E-13  4.93E-13  4.81E-13  8.79E-13  1.50E-13  2.81E-13
  5.79E-13  6.95E-13  7.98E-13  9.26E-13  7.55E-13  2.98E-13  2.40E-13  7.78E-13
  2.44E-13  8.89E-13  4.77E-13  7.78E-13  3.17E-11  2.27E-10
 -2.1023E+00 -1.1540E+00 -1.1540E+00 -1.1530E+00 -9.6494E-01 -4.1361E-01
 -3.8656E-01 -3.7468E-01 -3.0308E-01 -2.9434E-01 -2.9100E-01  5.0034E-02
  6.7865E-02  6.8910E-02  1.0184E-01  1.1737E-01  1.4997E-01  1.5805E-01
  1.6271E-01  2.0083E-01  3.1185E-01  3.1554E-01  3.2550E-01  3.7270E-01
  4.5790E-01  5.0255E-01  5.3537E-01  5.3615E-01  5.6469E-01  5.7040E-01
  prteigrs : nnsclo,ikpt=   30  215 max resid (incl. the buffer)=  2.27180E-10
 Non-SCF case, kpt  216 (  0.32143  0.32143  0.00000), residuals and eigenvalues=
  9.78E-13  5.75E-13  3.80E-13  8.21E-13  4.23E-13  2.13E-13  4.06E-13  4.42E-13
  3.49E-13  5.25E-13  7.10E-13  9.56E-13  6.32E-13  9.02E-13  4.82E-13  2.39E-13
  3.38E-13  4.84E-13  4.54E-13  6.92E-13  4.63E-13  8.29E-13  2.63E-13  3.51E-13
  5.73E-13  4.19E-13  3.67E-13  5.12E-13  3.34E-08  1.48E-08
 -2.1023E+00 -1.1540E+00 -1.1540E+00 -1.1530E+00 -9.6498E-01 -4.1428E-01
 -3.8633E-01 -3.7449E-01 -3.0319E-01 -2.9465E-01 -2.9107E-01  5.1127E-02
  7.0071E-02  7.0277E-02  1.0172E-01  1.1841E-01  1.4976E-01  1.5920E-01
  1.6299E-01  1.9983E-01  3.1057E-01  3.1446E-01  3.2424E-01  3.7216E-01
  4.5513E-01  5.0059E-01  5.3132E-01  5.3592E-01  5.6343E-01  5.6933E-01
  prteigrs : nnsclo,ikpt=   30  216 max resid (incl. the buffer)=  3.33690E-08
 Non-SCF case, kpt  217 (  0.31429  0.31429  0.00000), residuals and eigenvalues=
  3.61E-13  5.12E-13  4.01E-13  4.21E-13  4.22E-13  4.42E-13  2.53E-13  3.45E-13
  9.57E-13  3.09E-13  7.39E-13  5.96E-13  2.47E-13  3.27E-13  2.27E-13  8.45E-13
  3.47E-13  9.07E-13  7.73E-13  2.78E-13  8.90E-13  8.33E-13  3.39E-13  5.12E-13
  6.89E-13  4.58E-13  8.04E-13  5.98E-13  1.03E-08  8.63E-10
 -2.1023E+00 -1.1540E+00 -1.1540E+00 -1.1530E+00 -9.6502E-01 -4.1491E-01
 -3.8610E-01 -3.7435E-01 -3.0330E-01 -2.9496E-01 -2.9114E-01  5.2252E-02
  7.1253E-02  7.2752E-02  1.0162E-01  1.1949E-01  1.4962E-01  1.6038E-01
  1.6330E-01  1.9883E-01  3.0925E-01  3.1334E-01  3.2294E-01  3.7159E-01
  4.5230E-01  4.9859E-01  5.2729E-01  5.3552E-01  5.6218E-01  5.6824E-01
  prteigrs : nnsclo,ikpt=   30  217 max resid (incl. the buffer)=  1.02777E-08
 Non-SCF case, kpt  218 (  0.30714  0.30714  0.00000), residuals and eigenvalues=
  2.98E-13  6.11E-13  9.95E-13  3.89E-13  5.47E-13  5.41E-13  5.97E-13  4.41E-13
  2.42E-13  3.77E-13  6.49E-13  3.74E-13  2.90E-13  9.79E-13  2.87E-13  5.68E-13
  2.09E-13  3.76E-13  8.13E-13  5.12E-13  5.52E-13  4.31E-13  3.07E-13  4.60E-13
  5.86E-13  9.04E-13  6.37E-13  4.95E-13  1.26E-09  4.46E-11
 -2.1023E+00 -1.1540E+00 -1.1539E+00 -1.1530E+00 -9.6506E-01 -4.1551E-01
 -3.8587E-01 -3.7424E-01 -3.0341E-01 -2.9527E-01 -2.9123E-01  5.3410E-02
  7.2455E-02  7.5287E-02  1.0153E-01  1.2060E-01  1.4956E-01  1.6157E-01
  1.6363E-01  1.9783E-01  3.0791E-01  3.1218E-01  3.2162E-01  3.7101E-01
  4.4940E-01  4.9655E-01  5.2328E-01  5.3496E-01  5.6093E-01  5.6713E-01
  prteigrs : nnsclo,ikpt=   30  218 max resid (incl. the buffer)=  1.26114E-09
 Non-SCF case, kpt  219 (  0.30000  0.30000  0.00000), residuals and eigenvalues=
  7.03E-13  4.52E-13  1.87E-13  3.00E-13  4.69E-13  9.40E-13  4.11E-13  8.86E-13
  7.15E-13  3.40E-13  4.02E-13  1.96E-13  2.94E-13  8.92E-13  4.46E-13  6.21E-13
  2.85E-13  9.72E-13  5.64E-13  5.43E-13  3.37E-13  2.19E-13  4.07E-13  3.30E-13
  4.45E-13  9.14E-13  2.32E-13  8.59E-13  1.62E-08  1.20E-09
 -2.1023E+00 -1.1539E+00 -1.1539E+00 -1.1530E+00 -9.6510E-01 -4.1608E-01
 -3.8563E-01 -3.7416E-01 -3.0353E-01 -2.9560E-01 -2.9133E-01  5.4598E-02
  7.3671E-02  7.7878E-02  1.0144E-01  1.2175E-01  1.4958E-01  1.6278E-01
  1.6398E-01  1.9684E-01  3.0654E-01  3.1098E-01  3.2026E-01  3.7040E-01
  4.4646E-01  4.9447E-01  5.1930E-01  5.3421E-01  5.5969E-01  5.6601E-01
  prteigrs : nnsclo,ikpt=   30  219 max resid (incl. the buffer)=  1.61636E-08
 Non-SCF case, kpt  220 (  0.29286  0.29286  0.00000), residuals and eigenvalues=
  6.68E-13  4.69E-13  1.88E-13  3.03E-13  4.63E-13  1.08E-13  3.95E-13  8.67E-13
  6.71E-13  3.10E-13  3.39E-13  1.84E-13  2.27E-13  8.48E-13  4.51E-13  6.18E-13
  2.42E-13  8.91E-13  5.45E-13  4.04E-13  3.25E-13  7.02E-13  3.07E-13  2.93E-13
  4.60E-13  2.66E-13  9.08E-13  3.41E-13  4.06E-09  5.57E-11
 -2.1023E+00 -1.1539E+00 -1.1539E+00 -1.1530E+00 -9.6515E-01 -4.1663E-01
 -3.8538E-01 -3.7412E-01 -3.0364E-01 -2.9593E-01 -2.9145E-01  5.5816E-02
  7.4900E-02  8.0520E-02  1.0136E-01  1.2293E-01  1.4969E-01  1.6401E-01
  1.6435E-01  1.9586E-01  3.0514E-01  3.0975E-01  3.1886E-01  3.6976E-01
  4.4346E-01  4.9235E-01  5.1535E-01  5.3330E-01  5.5847E-01  5.6487E-01
  prteigrs : nnsclo,ikpt=   30  220 max resid (incl. the buffer)=  4.06209E-09
 Non-SCF case, kpt  221 (  0.28571  0.28571  0.00000), residuals and eigenvalues=
  5.89E-13  7.75E-13  2.99E-13  2.87E-13  9.30E-13  2.04E-13  2.31E-13  6.49E-13
  2.89E-13  6.15E-13  6.29E-13  7.54E-13  5.01E-13  3.23E-13  2.18E-13  4.29E-13
  3.45E-13  1.95E-13  2.80E-13  7.72E-13  5.47E-13  6.26E-13  3.32E-13  3.16E-13
  3.62E-13  3.24E-13  7.59E-13  4.96E-13  2.22E-11  1.31E-09
 -2.1023E+00 -1.1539E+00 -1.1539E+00 -1.1530E+00 -9.6519E-01 -4.1714E-01
 -3.8513E-01 -3.7411E-01 -3.0376E-01 -2.9627E-01 -2.9159E-01  5.7063E-02
  7.6138E-02  8.3212E-02  1.0130E-01  1.2415E-01  1.4990E-01  1.6475E-01
  1.6525E-01  1.9491E-01  3.0373E-01  3.0848E-01  3.1744E-01  3.6911E-01
  4.4041E-01  4.9021E-01  5.1143E-01  5.3222E-01  5.5726E-01  5.6372E-01
  prteigrs : nnsclo,ikpt=   30  221 max resid (incl. the buffer)=  1.30758E-09
 Non-SCF case, kpt  222 (  0.27857  0.27857  0.00000), residuals and eigenvalues=
  2.57E-13  7.54E-13  6.95E-13  9.68E-13  8.94E-13  9.30E-13  8.98E-13  3.06E-13
  6.77E-13  4.75E-13  2.32E-13  2.68E-13  3.16E-13  6.22E-13  4.55E-13  2.83E-13
  8.06E-13  4.92E-13  9.23E-13  3.93E-13  7.68E-13  2.38E-13  8.68E-13  8.66E-13
  3.40E-13  2.15E-13  6.88E-13  9.06E-13  1.18E-07  1.09E-06
 -2.1023E+00 -1.1538E+00 -1.1538E+00 -1.1530E+00 -9.6524E-01 -4.1763E-01
 -3.8487E-01 -3.7412E-01 -3.0387E-01 -2.9661E-01 -2.9174E-01  5.8337E-02
  7.7379E-02  8.5945E-02  1.0124E-01  1.2540E-01  1.5020E-01  1.6517E-01
  1.6649E-01  1.9397E-01  3.0229E-01  3.0717E-01  3.1599E-01  3.6843E-01
  4.3733E-01  4.8802E-01  5.0754E-01  5.3098E-01  5.5607E-01  5.6257E-01
  prteigrs : nnsclo,ikpt=   30  222 max resid (incl. the buffer)=  1.09224E-06
 Non-SCF case, kpt  223 (  0.27143  0.27143  0.00000), residuals and eigenvalues=
  1.94E-13  4.02E-13  9.81E-13  5.56E-13  2.60E-13  6.33E-13  7.68E-13  3.08E-13
  4.02E-13  5.01E-13  4.32E-13  9.58E-13  7.92E-13  6.47E-13  3.83E-13  7.43E-13
  4.76E-13  9.27E-13  5.39E-13  2.93E-13  2.42E-13  3.22E-13  3.71E-13  2.30E-13
  8.00E-13  7.45E-13  3.29E-13  7.45E-13  2.43E-08  6.66E-09
 -2.1023E+00 -1.1538E+00 -1.1538E+00 -1.1530E+00 -9.6528E-01 -4.1808E-01
 -3.8461E-01 -3.7416E-01 -3.0399E-01 -2.9696E-01 -2.9192E-01  5.9638E-02
  7.8622E-02  8.8717E-02  1.0119E-01  1.2668E-01  1.5060E-01  1.6562E-01
  1.6775E-01  1.9305E-01  3.0083E-01  3.0584E-01  3.1451E-01  3.6773E-01
  4.3420E-01  4.8581E-01  5.0370E-01  5.2958E-01  5.5490E-01  5.6140E-01
  prteigrs : nnsclo,ikpt=   30  223 max resid (incl. the buffer)=  2.43044E-08
 Non-SCF case, kpt  224 (  0.26429  0.26429  0.00000), residuals and eigenvalues=
  1.70E-13  4.61E-13  5.14E-13  5.07E-13  4.98E-13  4.18E-13  4.99E-13  4.48E-13
  7.84E-13  2.68E-13  4.95E-13  6.82E-13  2.78E-13  4.39E-13  5.63E-13  9.65E-13
  8.63E-13  3.10E-13  3.13E-13  4.31E-13  8.28E-13  4.51E-13  7.71E-13  6.25E-13
  9.23E-13  4.80E-13  8.99E-13  5.50E-13  5.09E-08  2.54E-07
 -2.1023E+00 -1.1538E+00 -1.1538E+00 -1.1530E+00 -9.6533E-01 -4.1851E-01
 -3.8434E-01 -3.7423E-01 -3.0411E-01 -2.9732E-01 -2.9212E-01  6.0964E-02
  7.9862E-02  9.1524E-02  1.0115E-01  1.2799E-01  1.5110E-01  1.6609E-01
  1.6902E-01  1.9217E-01  2.9935E-01  3.0446E-01  3.1301E-01  3.6701E-01
  4.3104E-01  4.8358E-01  4.9990E-01  5.2804E-01  5.5375E-01  5.6024E-01
  prteigrs : nnsclo,ikpt=   30  224 max resid (incl. the buffer)=  2.53992E-07
 Non-SCF case, kpt  225 (  0.25714  0.25714  0.00000), residuals and eigenvalues=
  1.77E-13  5.15E-13  4.17E-13  3.47E-13  5.17E-13  4.02E-13  1.51E-13  5.44E-13
  6.50E-13  7.27E-13  5.30E-13  8.94E-13  6.87E-13  4.18E-13  7.59E-13  8.27E-13
  9.10E-13  4.39E-13  2.37E-13  3.94E-13  4.34E-13  2.41E-13  3.64E-13  6.88E-13
  6.63E-13  3.14E-13  3.27E-13  3.56E-13  5.61E-08  3.15E-07
 -2.1023E+00 -1.1538E+00 -1.1537E+00 -1.1530E+00 -9.6538E-01 -4.1891E-01
 -3.8407E-01 -3.7431E-01 -3.0423E-01 -2.9767E-01 -2.9235E-01  6.2314E-02
  8.1095E-02  9.4363E-02  1.0112E-01  1.2933E-01  1.5170E-01  1.6659E-01
  1.7030E-01  1.9133E-01  2.9786E-01  3.0306E-01  3.1148E-01  3.6627E-01
  4.2785E-01  4.8131E-01  4.9615E-01  5.2636E-01  5.5263E-01  5.5907E-01
  prteigrs : nnsclo,ikpt=   30  225 max resid (incl. the buffer)=  3.15345E-07
 Non-SCF case, kpt  226 (  0.25000  0.25000  0.00000), residuals and eigenvalues=
  2.03E-13  5.84E-13  4.49E-13  4.18E-13  4.98E-13  4.92E-13  2.59E-13  6.55E-13
  6.79E-13  4.32E-13  5.68E-13  2.11E-13  9.29E-13  3.98E-13  6.82E-13  7.37E-13
  1.96E-13  3.47E-13  7.69E-13  3.54E-13  6.80E-13  7.61E-13  5.70E-13  4.24E-13
  3.00E-13  3.29E-13  3.00E-13  5.14E-13  7.09E-08  1.47E-07
 -2.1023E+00 -1.1537E+00 -1.1537E+00 -1.1530E+00 -9.6543E-01 -4.1929E-01
 -3.8380E-01 -3.7441E-01 -3.0434E-01 -2.9803E-01 -2.9260E-01  6.3686E-02
  8.2316E-02  9.7228E-02  1.0110E-01  1.3070E-01  1.5241E-01  1.6710E-01
  1.7158E-01  1.9052E-01  2.9636E-01  3.0163E-01  3.0993E-01  3.6551E-01
  4.2464E-01  4.7903E-01  4.9245E-01  5.2457E-01  5.5153E-01  5.5791E-01
  prteigrs : nnsclo,ikpt=   30  226 max resid (incl. the buffer)=  1.47489E-07
 Non-SCF case, kpt  227 (  0.24286  0.24286  0.00000), residuals and eigenvalues=
  9.39E-13  5.52E-13  5.43E-13  4.16E-13  4.51E-13  5.95E-13  3.00E-13  7.58E-13
  2.85E-13  2.84E-13  6.09E-13  2.45E-13  1.69E-13  3.57E-13  6.39E-13  7.89E-13
  2.04E-13  9.89E-13  8.09E-13  7.20E-13  4.15E-13  3.20E-13  8.57E-13  5.89E-13
  6.74E-13  1.73E-13  2.92E-13  2.38E-13  6.62E-08  6.28E-08
 -2.1023E+00 -1.1537E+00 -1.1537E+00 -1.1530E+00 -9.6547E-01 -4.1963E-01
 -3.8352E-01 -3.7453E-01 -3.0446E-01 -2.9839E-01 -2.9288E-01  6.5079E-02
  8.3524E-02  1.0011E-01  1.0108E-01  1.3209E-01  1.5322E-01  1.6764E-01
  1.7287E-01  1.8977E-01  2.9485E-01  3.0017E-01  3.0835E-01  3.6473E-01
  4.2141E-01  4.7672E-01  4.8881E-01  5.2266E-01  5.5046E-01  5.5675E-01
  prteigrs : nnsclo,ikpt=   30  227 max resid (incl. the buffer)=  6.61829E-08
 Non-SCF case, kpt  228 (  0.23571  0.23571  0.00000), residuals and eigenvalues=
  4.59E-13  7.90E-13  5.13E-13  2.02E-13  5.44E-13  2.72E-13  9.86E-13  4.40E-13
  3.51E-13  7.43E-13  9.06E-13  8.15E-13  3.12E-13  5.43E-13  4.53E-13  9.49E-13
  2.39E-13  3.69E-13  1.70E-13  4.43E-13  5.70E-13  7.26E-13  5.23E-13  1.83E-13
  6.25E-13  6.88E-13  3.47E-13  8.85E-13  5.87E-08  3.43E-07
 -2.1023E+00 -1.1537E+00 -1.1537E+00 -1.1530E+00 -9.6552E-01 -4.1995E-01
 -3.8324E-01 -3.7466E-01 -3.0458E-01 -2.9876E-01 -2.9318E-01  6.6491E-02
  8.4710E-02  1.0108E-01  1.0302E-01  1.3351E-01  1.5413E-01  1.6819E-01
  1.7416E-01  1.8906E-01  2.9333E-01  2.9868E-01  3.0676E-01  3.6394E-01
  4.1816E-01  4.7439E-01  4.8522E-01  5.2065E-01  5.4941E-01  5.5560E-01
  prteigrs : nnsclo,ikpt=   30  228 max resid (incl. the buffer)=  3.43423E-07
 Non-SCF case, kpt  229 (  0.22857  0.22857  0.00000), residuals and eigenvalues=
  9.06E-13  4.99E-13  3.45E-13  2.56E-13  5.64E-13  4.51E-13  9.51E-13  8.57E-13
  3.01E-13  3.50E-13  3.28E-13  5.31E-13  6.86E-13  7.04E-13  3.67E-13  3.92E-13
  2.74E-13  1.77E-13  7.18E-13  2.55E-13  2.91E-13  4.00E-13  2.48E-13  5.07E-13
  4.63E-13  1.71E-13  2.31E-13  5.86E-13  5.26E-10  3.65E-09
 -2.1023E+00 -1.1537E+00 -1.1536E+00 -1.1530E+00 -9.6557E-01 -4.2025E-01
 -3.8296E-01 -3.7479E-01 -3.0469E-01 -2.9912E-01 -2.9351E-01  6.7922E-02
  8.5876E-02  1.0108E-01  1.0593E-01  1.3495E-01  1.5514E-01  1.6875E-01
  1.7545E-01  1.8842E-01  2.9180E-01  2.9716E-01  3.0514E-01  3.6312E-01
  4.1489E-01  4.7205E-01  4.8169E-01  5.1855E-01  5.4840E-01  5.5445E-01
  prteigrs : nnsclo,ikpt=   30  229 max resid (incl. the buffer)=  3.65038E-09
 Non-SCF case, kpt  230 (  0.22143  0.22143  0.00000), residuals and eigenvalues=
  4.37E-13  1.99E-13  8.80E-13  3.54E-13  4.44E-13  9.42E-13  6.28E-13  5.94E-13
  5.11E-13  6.24E-13  1.88E-13  3.75E-13  1.95E-13  3.57E-13  5.43E-13  2.72E-13
  3.44E-13  2.84E-13  3.15E-13  6.23E-13  4.63E-13  2.92E-13  4.28E-13  9.01E-13
  8.58E-13  6.79E-13  9.42E-13  5.14E-13  3.28E-09  2.36E-08
 -2.1023E+00 -1.1536E+00 -1.1536E+00 -1.1530E+00 -9.6562E-01 -4.2052E-01
 -3.8268E-01 -3.7494E-01 -3.0481E-01 -2.9949E-01 -2.9386E-01  6.9367E-02
  8.7015E-02  1.0109E-01  1.0886E-01  1.3642E-01  1.5626E-01  1.6932E-01
  1.7674E-01  1.8785E-01  2.9027E-01  2.9562E-01  3.0350E-01  3.6229E-01
  4.1163E-01  4.6970E-01  4.7823E-01  5.1636E-01  5.4741E-01  5.5332E-01
  prteigrs : nnsclo,ikpt=   30  230 max resid (incl. the buffer)=  2.36173E-08
 Non-SCF case, kpt  231 (  0.21429  0.21429  0.00000), residuals and eigenvalues=
  4.31E-13  2.10E-13  8.65E-13  3.58E-13  4.62E-13  9.84E-13  6.24E-13  7.03E-13
  4.40E-13  5.93E-13  1.92E-13  3.36E-13  1.89E-13  3.00E-13  3.58E-13  3.06E-13
  3.27E-13  2.81E-13  2.57E-13  5.12E-13  3.66E-13  3.59E-13  3.77E-13  5.26E-13
  5.59E-13  5.03E-13  9.04E-13  3.55E-13  3.52E-09  1.17E-08
 -2.1023E+00 -1.1536E+00 -1.1536E+00 -1.1530E+00 -9.6567E-01 -4.2076E-01
 -3.8240E-01 -3.7509E-01 -3.0492E-01 -2.9985E-01 -2.9424E-01  7.0827E-02
  8.8124E-02  1.0111E-01  1.1179E-01  1.3790E-01  1.5748E-01  1.6989E-01
  1.7803E-01  1.8736E-01  2.8874E-01  2.9406E-01  3.0184E-01  3.6144E-01
  4.0835E-01  4.6734E-01  4.7483E-01  5.1411E-01  5.4646E-01  5.5219E-01
  prteigrs : nnsclo,ikpt=   30  231 max resid (incl. the buffer)=  1.16728E-08
 Non-SCF case, kpt  232 (  0.20714  0.20714  0.00000), residuals and eigenvalues=
  3.83E-13  2.24E-13  6.92E-13  8.80E-13  4.52E-13  6.46E-13  7.10E-13  2.92E-13
  1.91E-13  4.62E-13  3.95E-13  6.58E-13  6.44E-13  8.55E-13  7.56E-13  3.57E-13
  6.56E-13  9.59E-13  4.46E-13  6.37E-13  7.36E-13  3.23E-13  9.68E-13  4.49E-13
  1.41E-13  3.67E-13  5.59E-13  7.56E-13  6.58E-08  1.02E-06
 -2.1023E+00 -1.1536E+00 -1.1535E+00 -1.1530E+00 -9.6572E-01 -4.2099E-01
 -3.8212E-01 -3.7524E-01 -3.0503E-01 -3.0022E-01 -2.9465E-01  7.2296E-02
  8.9199E-02  1.0113E-01  1.1471E-01  1.3940E-01  1.5880E-01  1.7045E-01
  1.7931E-01  1.8696E-01  2.8721E-01  2.9248E-01  3.0016E-01  3.6058E-01
  4.0508E-01  4.6498E-01  4.7151E-01  5.1180E-01  5.4554E-01  5.5109E-01
  prteigrs : nnsclo,ikpt=   30  232 max resid (incl. the buffer)=  1.01545E-06
 Non-SCF case, kpt  233 (  0.20000  0.20000  0.00000), residuals and eigenvalues=
  2.34E-13  5.92E-13  2.30E-13  2.05E-13  2.03E-13  3.80E-13  3.63E-13  2.60E-13
  9.28E-13  3.22E-13  2.31E-13  3.11E-13  2.37E-13  3.42E-13  8.73E-13  5.09E-13
  7.11E-13  5.67E-13  7.44E-13  7.49E-13  2.04E-13  7.64E-13  2.24E-13  2.27E-13
  3.23E-13  4.88E-13  6.19E-13  4.30E-13  2.04E-10  2.21E-08
 -2.1023E+00 -1.1535E+00 -1.1535E+00 -1.1530E+00 -9.6576E-01 -4.2119E-01
 -3.8183E-01 -3.7540E-01 -3.0514E-01 -3.0058E-01 -2.9508E-01  7.3776E-02
  9.0240E-02  1.0116E-01  1.1763E-01  1.4092E-01  1.6021E-01  1.7100E-01
  1.8059E-01  1.8666E-01  2.8569E-01  2.9089E-01  2.9846E-01  3.5970E-01
  4.0182E-01  4.6261E-01  4.6826E-01  5.0944E-01  5.4466E-01  5.5000E-01
  prteigrs : nnsclo,ikpt=   30  233 max resid (incl. the buffer)=  2.21365E-08
 Non-SCF case, kpt  234 (  0.19286  0.19286  0.00000), residuals and eigenvalues=
  8.12E-13  2.37E-13  6.15E-13  5.55E-13  2.48E-13  5.78E-13  2.53E-13  3.01E-13
  3.02E-13  4.02E-13  3.76E-13  7.25E-13  7.08E-13  4.22E-13  3.76E-13  2.77E-13
  2.25E-13  6.51E-13  9.28E-13  2.70E-13  6.72E-13  8.27E-13  2.88E-13  4.42E-13
  9.43E-13  2.32E-13  6.35E-13  5.83E-13  3.48E-09  1.30E-08
 -2.1023E+00 -1.1535E+00 -1.1535E+00 -1.1530E+00 -9.6581E-01 -4.2137E-01
 -3.8155E-01 -3.7555E-01 -3.0525E-01 -3.0094E-01 -2.9553E-01  7.5261E-02
  9.1240E-02  1.0119E-01  1.2054E-01  1.4245E-01  1.6171E-01  1.7151E-01
  1.8186E-01  1.8647E-01  2.8416E-01  2.8927E-01  2.9675E-01  3.5882E-01
  3.9857E-01  4.6025E-01  4.6508E-01  5.0703E-01  5.4380E-01  5.4893E-01
  prteigrs : nnsclo,ikpt=   30  234 max resid (incl. the buffer)=  1.29577E-08
 Non-SCF case, kpt  235 (  0.18571  0.18571  0.00000), residuals and eigenvalues=
  9.38E-13  2.45E-13  6.15E-13  5.35E-13  2.46E-13  8.45E-13  2.85E-13  2.52E-13
  2.95E-13  4.42E-13  3.46E-13  6.94E-13  8.18E-13  3.78E-13  4.24E-13  3.31E-13
  4.00E-13  9.10E-13  2.38E-13  2.52E-13  6.42E-13  2.54E-13  3.89E-13  1.10E-13
  6.97E-13  2.65E-13  3.00E-13  5.57E-13  4.14E-09  1.76E-08
 -2.1023E+00 -1.1535E+00 -1.1535E+00 -1.1530E+00 -9.6586E-01 -4.2154E-01
 -3.8127E-01 -3.7570E-01 -3.0535E-01 -3.0129E-01 -2.9601E-01  7.6749E-02
  9.2198E-02  1.0123E-01  1.2343E-01  1.4400E-01  1.6329E-01  1.7198E-01
  1.8313E-01  1.8641E-01  2.8265E-01  2.8765E-01  2.9502E-01  3.5792E-01
  3.9534E-01  4.5789E-01  4.6199E-01  5.0459E-01  5.4299E-01  5.4788E-01
  prteigrs : nnsclo,ikpt=   30  235 max resid (incl. the buffer)=  1.75935E-08
 Non-SCF case, kpt  236 (  0.17857  0.17857  0.00000), residuals and eigenvalues=
  4.36E-13  2.56E-13  6.30E-13  8.54E-13  6.26E-13  9.71E-13  4.99E-13  2.70E-13
  5.80E-13  5.61E-13  9.20E-13  5.34E-13  4.53E-13  8.95E-13  5.58E-13  5.81E-13
  3.03E-13  5.21E-13  6.30E-13  9.56E-13  5.62E-13  6.40E-13  8.25E-13  6.05E-13
  7.70E-13  7.29E-13  4.55E-13  6.30E-13  2.27E-07  1.24E-06
 -2.1023E+00 -1.1535E+00 -1.1534E+00 -1.1530E+00 -9.6590E-01 -4.2168E-01
 -3.8100E-01 -3.7584E-01 -3.0546E-01 -3.0165E-01 -2.9650E-01  7.8236E-02
  9.3111E-02  1.0128E-01  1.2631E-01  1.4555E-01  1.6496E-01  1.7239E-01
  1.8438E-01  1.8648E-01  2.8115E-01  2.8602E-01  2.9327E-01  3.5702E-01
  3.9213E-01  4.5555E-01  4.5898E-01  5.0212E-01  5.4220E-01  5.4686E-01
  prteigrs : nnsclo,ikpt=   30  236 max resid (incl. the buffer)=  1.24445E-06
 Non-SCF case, kpt  237 (  0.17143  0.17143  0.00000), residuals and eigenvalues=
  4.17E-13  2.45E-13  6.43E-13  1.67E-13  6.95E-13  2.84E-13  5.47E-13  2.88E-13
  6.55E-13  5.99E-13  9.78E-13  4.59E-13  4.97E-13  9.53E-13  5.91E-13  8.77E-13
  2.44E-13  5.24E-13  4.70E-13  9.76E-13  6.94E-13  8.99E-13  9.23E-13  7.96E-13
  2.59E-13  8.55E-13  9.91E-13  5.94E-13  2.14E-07  1.29E-06
 -2.1023E+00 -1.1534E+00 -1.1534E+00 -1.1530E+00 -9.6595E-01 -4.2181E-01
 -3.8072E-01 -3.7598E-01 -3.0556E-01 -3.0199E-01 -2.9702E-01  7.9720E-02
  9.3979E-02  1.0133E-01  1.2916E-01  1.4710E-01  1.6671E-01  1.7275E-01
  1.8563E-01  1.8670E-01  2.7966E-01  2.8438E-01  2.9151E-01  3.5611E-01
  3.8895E-01  4.5323E-01  4.5605E-01  4.9963E-01  5.4145E-01  5.4587E-01
  prteigrs : nnsclo,ikpt=   30  237 max resid (incl. the buffer)=  1.29052E-06
 Non-SCF case, kpt  238 (  0.16429  0.16429  0.00000), residuals and eigenvalues=
  3.63E-13  5.09E-13  2.34E-13  3.34E-13  6.53E-13  4.04E-13  7.74E-13  4.32E-13
  4.31E-13  6.13E-13  4.07E-13  8.33E-13  2.22E-13  1.48E-13  5.26E-13  4.19E-13
  4.25E-13  2.58E-13  2.34E-13  7.10E-13  6.30E-13  5.82E-13  9.70E-13  5.98E-13
  7.64E-13  1.87E-13  4.41E-13  7.87E-13  1.53E-07  7.02E-08
 -2.1023E+00 -1.1534E+00 -1.1534E+00 -1.1530E+00 -9.6600E-01 -4.2192E-01
 -3.8045E-01 -3.7611E-01 -3.0565E-01 -3.0233E-01 -2.9755E-01  8.1195E-02
  9.4800E-02  1.0138E-01  1.3198E-01  1.4866E-01  1.6852E-01  1.7304E-01
  1.8686E-01  1.8705E-01  2.7818E-01  2.8273E-01  2.8974E-01  3.5520E-01
  3.8580E-01  4.5093E-01  4.5322E-01  4.9713E-01  5.4074E-01  5.4489E-01
  prteigrs : nnsclo,ikpt=   30  238 max resid (incl. the buffer)=  1.53119E-07
 Non-SCF case, kpt  239 (  0.15714  0.15714  0.00000), residuals and eigenvalues=
  6.62E-13  8.18E-13  6.34E-13  5.27E-13  9.70E-13  6.14E-13  3.57E-13  3.74E-13
  3.70E-13  3.95E-13  2.84E-13  4.96E-13  6.83E-13  3.17E-13  4.56E-13  7.57E-13
  4.40E-13  2.39E-13  5.26E-13  3.08E-13  4.34E-13  3.90E-13  8.91E-13  3.39E-13
  2.61E-13  2.37E-13  3.27E-13  6.39E-13  4.40E-07  1.04E-05
 -2.1023E+00 -1.1534E+00 -1.1534E+00 -1.1531E+00 -9.6604E-01 -4.2202E-01
 -3.8019E-01 -3.7623E-01 -3.0575E-01 -3.0267E-01 -2.9809E-01  8.2659E-02
  9.5573E-02  1.0143E-01  1.3477E-01  1.5022E-01  1.7040E-01  1.7326E-01
  1.8755E-01  1.8808E-01  2.7672E-01  2.8109E-01  2.8795E-01  3.5429E-01
  3.8269E-01  4.4866E-01  4.5047E-01  4.9464E-01  5.4005E-01  5.4399E-01
  prteigrs : nnsclo,ikpt=   30  239 max resid (incl. the buffer)=  1.04160E-05
 Non-SCF case, kpt  240 (  0.15000  0.15000  0.00000), residuals and eigenvalues=
  6.82E-13  1.88E-13  7.37E-13  5.06E-13  9.55E-13  6.76E-13  4.08E-13  3.19E-13
  4.29E-13  3.84E-13  1.90E-13  5.58E-13  5.48E-13  2.57E-13  4.80E-13  7.83E-13
  3.18E-13  3.02E-13  5.90E-13  3.02E-13  3.46E-13  3.20E-13  7.40E-13  2.97E-13
  1.67E-13  9.54E-13  7.55E-13  4.01E-13  1.99E-07  5.33E-06
 -2.1023E+00 -1.1534E+00 -1.1533E+00 -1.1531E+00 -9.6608E-01 -4.2211E-01
 -3.7993E-01 -3.7635E-01 -3.0584E-01 -3.0300E-01 -2.9864E-01  8.4108E-02
  9.6298E-02  1.0149E-01  1.3751E-01  1.5178E-01  1.7233E-01  1.7342E-01
  1.8818E-01  1.8928E-01  2.7529E-01  2.7946E-01  2.8615E-01  3.5337E-01
  3.7963E-01  4.4642E-01  4.4783E-01  4.9215E-01  5.3941E-01  5.4306E-01
  prteigrs : nnsclo,ikpt=   30  240 max resid (incl. the buffer)=  5.32818E-06
 Non-SCF case, kpt  241 (  0.14286  0.14286  0.00000), residuals and eigenvalues=
  3.59E-13  6.41E-13  4.55E-13  7.50E-13  6.39E-13  1.98E-13  3.52E-13  1.30E-13
  6.51E-13  3.63E-13  8.64E-13  2.32E-13  4.44E-13  5.73E-13  7.07E-13  7.71E-13
  4.02E-13  3.29E-13  5.44E-13  2.04E-13  3.43E-13  8.02E-13  6.99E-13  5.90E-13
  7.60E-13  8.39E-13  1.92E-13  6.52E-13  4.10E-07  1.72E-06
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1531E+00 -9.6612E-01 -4.2218E-01
 -3.7967E-01 -3.7645E-01 -3.0593E-01 -3.0332E-01 -2.9921E-01  8.5535E-02
  9.6974E-02  1.0155E-01  1.4022E-01  1.5332E-01  1.7353E-01  1.7430E-01
  1.8892E-01  1.9046E-01  2.7388E-01  2.7783E-01  2.8434E-01  3.5247E-01
  3.7663E-01  4.4423E-01  4.4528E-01  4.8968E-01  5.3879E-01  5.4216E-01
  prteigrs : nnsclo,ikpt=   30  241 max resid (incl. the buffer)=  1.72121E-06
 Non-SCF case, kpt  242 (  0.13571  0.13571  0.00000), residuals and eigenvalues=
  3.98E-13  8.27E-13  3.38E-13  7.10E-13  6.00E-13  8.13E-13  2.33E-13  8.75E-13
  7.40E-13  2.75E-13  8.79E-13  3.01E-13  2.89E-13  4.39E-13  6.66E-13  7.57E-13
  3.62E-13  4.34E-13  4.11E-13  1.74E-13  2.71E-13  5.09E-13  3.30E-13  8.64E-13
  3.90E-13  7.42E-13  7.80E-13  4.43E-13  1.83E-07  2.38E-07
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1531E+00 -9.6617E-01 -4.2224E-01
 -3.7942E-01 -3.7654E-01 -3.0601E-01 -3.0363E-01 -2.9977E-01  8.6938E-02
  9.7601E-02  1.0161E-01  1.4287E-01  1.5486E-01  1.7360E-01  1.7631E-01
  1.8976E-01  1.9161E-01  2.7249E-01  2.7621E-01  2.8253E-01  3.5157E-01
  3.7368E-01  4.4208E-01  4.4283E-01  4.8723E-01  5.3821E-01  5.4132E-01
  prteigrs : nnsclo,ikpt=   30  242 max resid (incl. the buffer)=  2.37599E-07
 Non-SCF case, kpt  243 (  0.12857  0.12857  0.00000), residuals and eigenvalues=
  9.13E-13  4.11E-13  3.41E-13  5.62E-13  5.91E-13  5.92E-13  5.94E-13  8.38E-13
  5.80E-13  3.38E-13  1.56E-13  5.45E-13  6.22E-13  3.50E-13  8.04E-13  8.82E-13
  9.35E-13  3.94E-13  4.78E-13  9.88E-13  8.19E-13  5.20E-13  7.79E-13  9.04E-13
  6.23E-13  1.93E-13  5.91E-13  6.27E-13  2.88E-05  3.44E-05
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1531E+00 -9.6620E-01 -4.2230E-01
 -3.7918E-01 -3.7662E-01 -3.0609E-01 -3.0393E-01 -3.0034E-01  8.8311E-02
  9.8182E-02  1.0167E-01  1.4547E-01  1.5638E-01  1.7363E-01  1.7835E-01
  1.9069E-01  1.9275E-01  2.7114E-01  2.7462E-01  2.8071E-01  3.5068E-01
  3.7080E-01  4.3999E-01  4.4048E-01  4.8482E-01  5.3776E-01  5.4064E-01
  prteigrs : nnsclo,ikpt=   30  243 max resid (incl. the buffer)=  3.43734E-05
 Non-SCF case, kpt  244 (  0.12143  0.12143  0.00000), residuals and eigenvalues=
  9.35E-13  3.76E-13  3.13E-13  5.54E-13  5.87E-13  6.06E-13  6.18E-13  7.77E-13
  6.05E-13  3.34E-13  1.67E-13  4.84E-13  5.43E-13  3.00E-13  8.89E-13  4.60E-13
  8.18E-13  3.96E-13  5.39E-13  9.77E-13  7.66E-13  3.26E-13  6.92E-13  7.04E-13
  3.81E-13  9.05E-13  6.83E-13  5.88E-13  2.79E-05  3.83E-05
 -2.1023E+00 -1.1533E+00 -1.1533E+00 -1.1531E+00 -9.6624E-01 -4.2234E-01
 -3.7895E-01 -3.7668E-01 -3.0617E-01 -3.0422E-01 -3.0091E-01  8.9649E-02
  9.8715E-02  1.0173E-01  1.4802E-01  1.5787E-01  1.7364E-01  1.8041E-01
  1.9168E-01  1.9386E-01  2.6981E-01  2.7305E-01  2.7888E-01  3.4980E-01
  3.6800E-01  4.3796E-01  4.3825E-01  4.8246E-01  5.3724E-01  5.3987E-01
  prteigrs : nnsclo,ikpt=   30  244 max resid (incl. the buffer)=  3.83308E-05
 Non-SCF case, kpt  245 (  0.11429  0.11429  0.00000), residuals and eigenvalues=
  2.96E-13  2.89E-13  3.62E-13  2.24E-13  3.47E-13  2.92E-13  4.06E-13  3.00E-13
  4.44E-13  4.64E-13  9.92E-13  7.28E-13  3.11E-13  2.82E-13  4.57E-13  5.74E-13
  4.60E-13  2.73E-13  4.64E-13  2.56E-13  1.72E-13  7.55E-13  3.21E-13  5.39E-13
  4.23E-13  7.73E-13  4.28E-13  9.04E-13  8.65E-08  4.25E-07
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1531E+00 -9.6628E-01 -4.2238E-01
 -3.7872E-01 -3.7674E-01 -3.0625E-01 -3.0450E-01 -3.0147E-01  9.0947E-02
  9.9204E-02  1.0179E-01  1.5049E-01  1.5934E-01  1.7363E-01  1.8247E-01
  1.9273E-01  1.9494E-01  2.6853E-01  2.7150E-01  2.7707E-01  3.4894E-01
  3.6528E-01  4.3600E-01  4.3612E-01  4.8016E-01  5.3667E-01  5.3900E-01
  prteigrs : nnsclo,ikpt=   30  245 max resid (incl. the buffer)=  4.25136E-07
 Non-SCF case, kpt  246 (  0.10714  0.10714  0.00000), residuals and eigenvalues=
  3.41E-13  2.74E-13  3.06E-13  7.06E-13  3.81E-13  2.80E-13  4.52E-13  2.43E-13
  7.86E-13  3.17E-13  7.91E-13  3.63E-13  2.08E-13  6.02E-13  7.06E-13  4.11E-13
  3.09E-13  1.75E-13  2.38E-13  2.25E-13  4.20E-13  8.54E-13  2.44E-13  5.33E-13
  2.45E-13  8.21E-13  3.79E-13  5.23E-13  4.70E-07  3.23E-07
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1531E+00 -9.6631E-01 -4.2241E-01
 -3.7851E-01 -3.7679E-01 -3.0632E-01 -3.0476E-01 -3.0202E-01  9.2199E-02
  9.9649E-02  1.0186E-01  1.5289E-01  1.6078E-01  1.7361E-01  1.8453E-01
  1.9381E-01  1.9599E-01  2.6728E-01  2.7000E-01  2.7525E-01  3.4810E-01
  3.6265E-01  4.3411E-01  4.3411E-01  4.7792E-01  5.3623E-01  5.3831E-01
  prteigrs : nnsclo,ikpt=   30  246 max resid (incl. the buffer)=  4.69623E-07
 Non-SCF case, kpt  247 (  0.10000  0.10000  0.00000), residuals and eigenvalues=
  5.65E-13  6.54E-13  3.30E-13  2.35E-13  3.40E-13  6.41E-13  3.54E-13  3.27E-13
  4.47E-13  8.62E-13  4.87E-13  5.79E-13  2.32E-13  9.25E-13  5.59E-13  2.49E-13
  1.93E-13  6.50E-13  9.60E-13  8.57E-13  2.78E-13  9.47E-13  3.62E-13  2.05E-13
  2.76E-13  6.24E-13  7.85E-13  2.25E-13  6.93E-06  3.05E-08
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1531E+00 -9.6635E-01 -4.2243E-01
 -3.7830E-01 -3.7682E-01 -3.0638E-01 -3.0502E-01 -3.0256E-01  9.3403E-02
  1.0005E-01  1.0192E-01  1.5521E-01  1.6218E-01  1.7359E-01  1.8658E-01
  1.9490E-01  1.9700E-01  2.6608E-01  2.6853E-01  2.7346E-01  3.4729E-01
  3.6013E-01  4.3221E-01  4.3231E-01  4.7576E-01  5.3583E-01  5.3764E-01
  prteigrs : nnsclo,ikpt=   30  247 max resid (incl. the buffer)=  6.92562E-06
 Non-SCF case, kpt  248 (  0.09286  0.09286  0.00000), residuals and eigenvalues=
  2.60E-13  5.74E-13  9.88E-13  4.65E-13  5.99E-13  9.71E-13  4.94E-13  7.21E-13
  1.18E-13  2.78E-13  2.23E-13  5.47E-13  2.05E-13  3.12E-13  5.22E-13  3.65E-13
  7.37E-13  7.54E-13  5.51E-13  7.23E-13  3.53E-13  1.95E-13  5.10E-13  5.89E-13
  7.52E-13  4.76E-13  2.94E-13  5.31E-13  4.74E-07  1.71E-06
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1531E+00 -9.6638E-01 -4.2245E-01
 -3.7811E-01 -3.7685E-01 -3.0645E-01 -3.0526E-01 -3.0308E-01  9.4550E-02
  1.0041E-01  1.0197E-01  1.5744E-01  1.6353E-01  1.7356E-01  1.8859E-01
  1.9601E-01  1.9797E-01  2.6494E-01  2.6712E-01  2.7168E-01  3.4650E-01
  3.5771E-01  4.3043E-01  4.3059E-01  4.7369E-01  5.3542E-01  5.3703E-01
  prteigrs : nnsclo,ikpt=   30  248 max resid (incl. the buffer)=  1.71371E-06
 Non-SCF case, kpt  249 (  0.08571  0.08571  0.00000), residuals and eigenvalues=
  2.63E-13  6.50E-13  3.37E-13  5.14E-13  6.20E-13  2.13E-13  5.27E-13  6.60E-13
  1.35E-13  2.88E-13  2.16E-13  5.63E-13  2.06E-13  3.20E-13  4.71E-13  3.73E-13
  7.29E-13  7.70E-13  6.27E-13  1.69E-13  3.42E-13  8.45E-13  4.21E-13  5.60E-13
  5.72E-13  4.64E-13  1.39E-13  4.32E-13  6.44E-07  2.96E-06
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1531E+00 -9.6641E-01 -4.2246E-01
 -3.7792E-01 -3.7687E-01 -3.0650E-01 -3.0548E-01 -3.0358E-01  9.5637E-02
  1.0074E-01  1.0203E-01  1.5957E-01  1.6482E-01  1.7354E-01  1.9057E-01
  1.9710E-01  1.9890E-01  2.6384E-01  2.6576E-01  2.6993E-01  3.4575E-01
  3.5542E-01  4.2877E-01  4.2897E-01  4.7172E-01  5.3507E-01  5.3647E-01
  prteigrs : nnsclo,ikpt=   30  249 max resid (incl. the buffer)=  2.95788E-06
 Non-SCF case, kpt  250 (  0.07857  0.07857  0.00000), residuals and eigenvalues=
  2.67E-13  7.50E-13  3.76E-13  5.65E-13  6.32E-13  2.23E-13  5.72E-13  6.01E-13
  1.56E-13  2.94E-13  1.96E-13  5.41E-13  2.19E-13  3.30E-13  3.89E-13  4.24E-13
  6.98E-13  8.75E-13  6.89E-13  2.69E-13  3.34E-13  6.91E-13  3.19E-13  4.53E-13
  8.85E-13  4.19E-13  5.51E-13  3.72E-13  8.08E-07  3.78E-06
 -2.1023E+00 -1.1532E+00 -1.1532E+00 -1.1531E+00 -9.6643E-01 -4.2248E-01
 -3.7775E-01 -3.7688E-01 -3.0656E-01 -3.0569E-01 -3.0406E-01  9.6657E-02
  1.0103E-01  1.0208E-01  1.6159E-01  1.6606E-01  1.7351E-01  1.9248E-01
  1.9817E-01  1.9978E-01  2.6280E-01  2.6446E-01  2.6822E-01  3.4504E-01
  3.5326E-01  4.2724E-01  4.2746E-01  4.6986E-01  5.3475E-01  5.3596E-01
  prteigrs : nnsclo,ikpt=   30  250 max resid (incl. the buffer)=  3.77550E-06
 Non-SCF case, kpt  251 (  0.07143  0.07143  0.00000), residuals and eigenvalues=
  2.68E-13  8.81E-13  4.26E-13  6.13E-13  6.36E-13  2.28E-13  6.28E-13  5.68E-13
  1.68E-13  3.02E-13  1.56E-13  4.89E-13  2.52E-13  3.43E-13  5.78E-13  6.14E-13
  6.57E-13  2.36E-13  7.03E-13  3.64E-13  3.03E-13  6.07E-13  7.72E-13  3.39E-13
  8.47E-13  3.77E-13  4.25E-13  3.51E-13  9.47E-07  3.46E-06
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6646E-01 -4.2248E-01
 -3.7759E-01 -3.7688E-01 -3.0661E-01 -3.0589E-01 -3.0451E-01  9.7608E-02
  1.0129E-01  1.0213E-01  1.6349E-01  1.6723E-01  1.7349E-01  1.9433E-01
  1.9920E-01  2.0061E-01  2.6183E-01  2.6324E-01  2.6657E-01  3.4437E-01
  3.5123E-01  4.2583E-01  4.2605E-01  4.6813E-01  5.3447E-01  5.3549E-01
  prteigrs : nnsclo,ikpt=   30  251 max resid (incl. the buffer)=  3.45724E-06
 Non-SCF case, kpt  252 (  0.06429  0.06429  0.00000), residuals and eigenvalues=
  3.53E-13  5.58E-13  3.72E-13  7.21E-13  2.42E-13  7.05E-13  2.31E-13  3.79E-13
  2.97E-13  3.58E-13  6.09E-13  2.03E-13  6.31E-13  5.93E-13  8.66E-13  9.99E-13
  3.00E-13  2.46E-13  4.07E-13  5.60E-13  6.65E-13  3.08E-13  9.04E-13  3.09E-13
  8.02E-13  6.10E-13  8.75E-13  8.95E-13  3.84E-06  5.19E-06
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6648E-01 -4.2249E-01
 -3.7745E-01 -3.7688E-01 -3.0665E-01 -3.0606E-01 -3.0492E-01  9.8483E-02
  1.0151E-01  1.0218E-01  1.6525E-01  1.6832E-01  1.7347E-01  1.9609E-01
  2.0018E-01  2.0138E-01  2.6093E-01  2.6210E-01  2.6498E-01  3.4374E-01
  3.4936E-01  4.2455E-01  4.2475E-01  4.6652E-01  5.3439E-01  5.3525E-01
  prteigrs : nnsclo,ikpt=   30  252 max resid (incl. the buffer)=  5.18975E-06
 Non-SCF case, kpt  253 (  0.05714  0.05714  0.00000), residuals and eigenvalues=
  3.68E-13  3.43E-13  2.61E-13  2.54E-13  6.99E-13  6.38E-13  3.68E-13  2.50E-13
  7.93E-13  5.01E-13  2.63E-13  4.26E-13  5.55E-13  2.66E-13  6.26E-13  7.02E-13
  1.68E-13  4.22E-13  3.42E-13  6.03E-13  7.84E-13  7.32E-13  4.09E-13  3.09E-13
  2.61E-13  3.59E-13  1.97E-13  6.95E-13  1.49E-06  2.29E-06
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6650E-01 -4.2249E-01
 -3.7732E-01 -3.7687E-01 -3.0669E-01 -3.0622E-01 -3.0531E-01  9.9279E-02
  1.0171E-01  1.0222E-01  1.6688E-01  1.6933E-01  1.7346E-01  1.9775E-01
  2.0110E-01  2.0209E-01  2.6010E-01  2.6104E-01  2.6347E-01  3.4317E-01
  3.4765E-01  4.2339E-01  4.2358E-01  4.6506E-01  5.3405E-01  5.3473E-01
  prteigrs : nnsclo,ikpt=   30  253 max resid (incl. the buffer)=  2.29273E-06
 Non-SCF case, kpt  254 (  0.05000  0.05000  0.00000), residuals and eigenvalues=
  3.66E-13  3.31E-13  2.84E-13  2.65E-13  7.11E-13  6.64E-13  3.77E-13  2.55E-13
  9.15E-13  4.91E-13  2.25E-13  4.83E-13  5.18E-13  2.52E-13  7.17E-13  7.72E-13
  1.84E-13  4.63E-13  3.11E-13  6.70E-13  8.21E-13  7.02E-13  9.63E-13  2.52E-13
  5.61E-13  4.24E-13  8.17E-14  7.70E-13  1.30E-06  3.33E-06
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6652E-01 -4.2250E-01
 -3.7720E-01 -3.7686E-01 -3.0673E-01 -3.0637E-01 -3.0566E-01  9.9992E-02
  1.0187E-01  1.0226E-01  1.6835E-01  1.7025E-01  1.7345E-01  1.9929E-01
  2.0195E-01  2.0273E-01  2.5935E-01  2.6009E-01  2.6205E-01  3.4265E-01
  3.4611E-01  4.2237E-01  4.2252E-01  4.6375E-01  5.3390E-01  5.3452E-01
  prteigrs : nnsclo,ikpt=   30  254 max resid (incl. the buffer)=  3.33093E-06
 Non-SCF case, kpt  255 (  0.04286  0.04286  0.00000), residuals and eigenvalues=
  3.34E-13  3.00E-13  2.76E-13  7.60E-13  4.24E-13  4.24E-13  3.05E-13  5.36E-13
  7.65E-13  1.37E-13  4.88E-13  6.00E-13  3.37E-13  3.25E-13  4.55E-13  2.86E-13
  2.85E-13  4.19E-13  7.34E-13  3.08E-13  2.74E-13  9.77E-13  2.73E-13  6.97E-13
  7.63E-13  7.77E-13  9.93E-14  5.56E-13  3.62E-07  8.59E-07
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6654E-01 -4.2250E-01
 -3.7710E-01 -3.7685E-01 -3.0676E-01 -3.0649E-01 -3.0596E-01  1.0062E-01
  1.0202E-01  1.0229E-01  1.6965E-01  1.7106E-01  1.7344E-01  2.0069E-01
  2.0270E-01  2.0330E-01  2.5869E-01  2.5924E-01  2.6076E-01  3.4219E-01
  3.4476E-01  4.2148E-01  4.2160E-01  4.6259E-01  5.3360E-01  5.3398E-01
  prteigrs : nnsclo,ikpt=   30  255 max resid (incl. the buffer)=  8.58577E-07
 Non-SCF case, kpt  256 (  0.03571  0.03571  0.00000), residuals and eigenvalues=
  5.67E-13  3.16E-13  2.90E-13  6.83E-13  2.63E-13  9.96E-13  8.70E-13  3.34E-13
  4.58E-13  6.07E-13  9.64E-13  3.11E-13  4.21E-13  2.05E-13  8.43E-13  5.54E-13
  2.50E-13  3.32E-13  7.15E-13  4.18E-13  8.90E-13  7.80E-13  5.11E-13  5.07E-13
  7.61E-13  2.33E-13  9.41E-13  9.47E-13  6.17E-07  4.13E-07
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6655E-01 -4.2250E-01
 -3.7701E-01 -3.7684E-01 -3.0678E-01 -3.0660E-01 -3.0623E-01  1.0115E-01
  1.0213E-01  1.0232E-01  1.7078E-01  1.7176E-01  1.7343E-01  2.0192E-01
  2.0337E-01  2.0379E-01  2.5811E-01  2.5850E-01  2.5962E-01  3.4180E-01
  3.4359E-01  4.2073E-01  4.2082E-01  4.6160E-01  5.3354E-01  5.3371E-01
  prteigrs : nnsclo,ikpt=   30  256 max resid (incl. the buffer)=  6.16877E-07
 Non-SCF case, kpt  257 (  0.02857  0.02857  0.00000), residuals and eigenvalues=
  4.07E-13  3.61E-13  2.27E-13  2.67E-13  3.14E-13  6.04E-13  8.99E-13  2.33E-13
  3.64E-13  5.17E-13  8.54E-13  5.27E-13  2.71E-13  2.45E-13  8.86E-13  3.95E-13
  2.31E-13  3.04E-13  5.66E-13  7.15E-13  3.24E-13  5.53E-13  7.58E-13  8.20E-13
  8.91E-13  8.22E-13  4.47E-13  3.83E-13  5.10E-08  2.63E-07
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6656E-01 -4.2250E-01
 -3.7694E-01 -3.7683E-01 -3.0681E-01 -3.0669E-01 -3.0645E-01  1.0159E-01
  1.0223E-01  1.0234E-01  1.7172E-01  1.7235E-01  1.7343E-01  2.0297E-01
  2.0392E-01  2.0420E-01  2.5764E-01  2.5789E-01  2.5863E-01  3.4147E-01
  3.4262E-01  4.2011E-01  4.2017E-01  4.6078E-01  5.3342E-01  5.3376E-01
  prteigrs : nnsclo,ikpt=   30  257 max resid (incl. the buffer)=  2.62907E-07
 Non-SCF case, kpt  258 (  0.02143  0.02143  0.00000), residuals and eigenvalues=
  2.47E-13  6.57E-13  7.43E-13  8.32E-13  9.77E-13  6.00E-13  2.53E-13  9.83E-13
  2.33E-13  3.13E-13  3.40E-13  4.85E-13  5.76E-13  2.89E-13  9.10E-13  6.11E-13
  2.73E-13  3.06E-13  5.08E-13  4.80E-13  4.59E-13  8.28E-13  8.57E-13  1.96E-13
  3.22E-13  3.53E-13  7.14E-13  4.40E-13  8.66E-08  2.23E-07
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6657E-01 -4.2250E-01
 -3.7688E-01 -3.7682E-01 -3.0682E-01 -3.0676E-01 -3.0662E-01  1.0194E-01
  1.0230E-01  1.0236E-01  1.7246E-01  1.7281E-01  1.7342E-01  2.0382E-01
  2.0436E-01  2.0452E-01  2.5726E-01  2.5741E-01  2.5784E-01  3.4121E-01
  3.4186E-01  4.1962E-01  4.1966E-01  4.6013E-01  5.3328E-01  5.3331E-01
  prteigrs : nnsclo,ikpt=   30  258 max resid (incl. the buffer)=  2.22777E-07
 Non-SCF case, kpt  259 (  0.01429  0.01429  0.00000), residuals and eigenvalues=
  3.26E-13  5.84E-13  5.15E-13  3.77E-13  6.66E-13  8.71E-13  3.30E-13  8.19E-13
  4.14E-13  4.07E-13  5.31E-13  2.56E-13  8.25E-13  5.86E-13  3.99E-13  1.96E-13
  5.56E-13  7.47E-13  6.20E-13  9.85E-13  7.76E-13  2.88E-13  6.65E-13  5.63E-13
  7.88E-13  2.89E-13  3.42E-13  8.54E-13  4.80E-09  4.15E-08
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6658E-01 -4.2250E-01
 -3.7684E-01 -3.7682E-01 -3.0684E-01 -3.0681E-01 -3.0674E-01  1.0219E-01
  1.0235E-01  1.0238E-01  1.7299E-01  1.7315E-01  1.7342E-01  2.0444E-01
  2.0468E-01  2.0475E-01  2.5699E-01  2.5706E-01  2.5725E-01  3.4103E-01
  3.4132E-01  4.1928E-01  4.1929E-01  4.5967E-01  5.3314E-01  5.3324E-01
  prteigrs : nnsclo,ikpt=   30  259 max resid (incl. the buffer)=  4.15180E-08
 Non-SCF case, kpt  260 (  0.00714  0.00714  0.00000), residuals and eigenvalues=
  3.49E-13  7.64E-13  4.54E-13  3.98E-13  7.10E-13  8.06E-13  4.96E-13  9.16E-13
  4.19E-13  3.83E-13  5.52E-13  2.47E-13  8.83E-13  4.39E-13  4.56E-13  2.96E-13
  6.26E-13  7.57E-13  5.50E-13  8.35E-13  9.38E-13  3.67E-13  9.04E-13  3.26E-13
  8.71E-13  2.83E-13  7.32E-13  6.75E-13  3.58E-10  7.89E-10
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6658E-01 -4.2250E-01
 -3.7682E-01 -3.7681E-01 -3.0684E-01 -3.0684E-01 -3.0682E-01  1.0234E-01
  1.0238E-01  1.0238E-01  1.7331E-01  1.7335E-01  1.7342E-01  2.0482E-01
  2.0488E-01  2.0490E-01  2.5683E-01  2.5685E-01  2.5690E-01  3.4091E-01
  3.4099E-01  4.1907E-01  4.1908E-01  4.5939E-01  5.3309E-01  5.3311E-01
  prteigrs : nnsclo,ikpt=   30  260 max resid (incl. the buffer)=  7.88752E-10
 Non-SCF case, kpt  261 (  0.00000  0.00000  0.00000), residuals and eigenvalues=
  3.84E-13  5.38E-13  3.04E-13  3.57E-13  8.55E-13  6.80E-13  2.28E-13  3.39E-13
  3.70E-13  1.44E-13  4.62E-13  6.02E-13  5.85E-13  8.94E-13  6.13E-13  1.93E-13
  5.48E-13  7.73E-13  2.20E-13  9.08E-13  2.22E-13  4.33E-13  7.96E-13  5.06E-13
  7.27E-13  8.97E-13  3.84E-13  2.65E-13  3.67E-13  9.32E-13
 -2.1023E+00 -1.1531E+00 -1.1531E+00 -1.1531E+00 -9.6658E-01 -4.2250E-01
 -3.7681E-01 -3.7681E-01 -3.0685E-01 -3.0685E-01 -3.0685E-01  1.0239E-01
  1.0239E-01  1.0239E-01  1.7342E-01  1.7342E-01  1.7342E-01  2.0494E-01
  2.0494E-01  2.0494E-01  2.5678E-01  2.5678E-01  2.5678E-01  3.4087E-01
  3.4087E-01  4.1900E-01  4.1900E-01  4.5930E-01  5.3307E-01  5.3307E-01
 

--- !ResultsGS
iteration_state: {dtset: 3, }
comment   : Summary of ground state results
lattice_vectors:
- [  7.2605000,   0.0000000,   0.0000000, ]
- [  0.0000000,   7.2605000,   0.0000000, ]
- [  0.0000000,   0.0000000,   7.2605000, ]
lattice_lengths: [   7.26050,    7.26050,    7.26050, ]
lattice_angles: [ 90.000,  90.000,  90.000, ] # degrees, (23, 13, 12)
lattice_volume:   3.8273624E+02
convergence: {deltae:  0.000E+00, res2:  0.000E+00, residm:  9.999E-13, diffor:  0.000E+00, }
etotal    :  -1.52077308E+02
entropy   :   0.00000000E+00
fermie    :   2.92707987E-01
cartesian_stress_tensor: null
pressure_GPa: null
xred      :
- [  0.0000E+00,   0.0000E+00,   0.0000E+00,  V]
- [  5.0000E-01,   5.0000E-01,   5.0000E-01, Sr]
- [  5.0000E-01,   0.0000E+00,   0.0000E+00,  O]
- [  0.0000E+00,   5.0000E-01,   0.0000E+00,  O]
- [  0.0000E+00,   0.0000E+00,   5.0000E-01,  O]
cartesian_forces: null
force_length_stats: {min: null, max: null, mean: null, }
...

 
 ***** Print of fatbands activated ****** 
  Number of atom: natsph =     5
  atoms  are             =     1    2    3    4    5
  (fatbands are in eV and are given for each value of L)
 
 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.20000         11.31183667
    2        2.20670          7.30508372
    3        1.41465          4.56692005
    4        1.41465          4.56692005
    5        1.41465          4.56692005
 
 PAW TEST:
 ==== Compensation charge inside spheres ============
 Compensation charge over spherical meshes =      6.126444380230417
 
 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1
  -0.52874   0.07211   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.07211   0.02109   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07814   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801 ...
   ...  only 12  components have been written...
 Atom #  5
   0.59370  -1.74040   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.74040   5.16557   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.29593   0.00000   0.00000   0.84626   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.29729   0.00000   0.00000   0.85313   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.29593   0.00000   0.00000   0.84626
   0.00000   0.00000   0.84626   0.00000   0.00000   0.26118   0.00000   0.00000
   0.00000   0.00000   0.00000   0.85313   0.00000   0.00000   0.22787   0.00000
   0.00000   0.00000   0.00000   0.00000   0.84626   0.00000   0.00000   0.26118
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1
   1.99201  -0.06299   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.06299   1.05979   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.99489   0.00000   0.00000  -0.03527   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.99489   0.00000   0.00000  -0.03527   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.99489   0.00000   0.00000  -0.03527   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.03527   0.00000   0.00000   0.18286   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.03527   0.00000   0.00000   0.18286   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.03527   0.00000   0.00000   0.18286   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.71080   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.71080   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.80965   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.71080 ...
   ...  only 12  components have been written...
 Atom #  5
   1.98202   0.02838   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.02838   0.00086   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.73572   0.00000   0.00000   0.02849   0.00000   0.00000
   0.00000   0.00000   0.00000   1.77207   0.00000   0.00000   0.03965   0.00000
   0.00000   0.00000   0.00000   0.00000   1.73572   0.00000   0.00000   0.02849
   0.00000   0.00000   0.02849   0.00000   0.00000   0.00059   0.00000   0.00000
   0.00000   0.00000   0.00000   0.03965   0.00000   0.00000   0.00108   0.00000
   0.00000   0.00000   0.00000   0.00000   0.02849   0.00000   0.00000   0.00059
 
 "PAW+U" part of augmentation waves occupancies Rhoij:
 Atom #  1 - L=2 ONLY
   0.71080   0.00000   0.00000   0.00000   0.00000   0.05967   0.00000   0.00000   0.00000   0.00000
   0.00000   0.71080   0.00000   0.00000   0.00000   0.00000   0.05967   0.00000   0.00000   0.00000
   0.00000   0.00000   0.80965   0.00000   0.00000   0.00000   0.00000   0.16195   0.00000   0.00000
   0.00000   0.00000   0.00000   0.71080   0.00000   0.00000   0.00000   0.00000   0.05967   0.00000
   0.00000   0.00000   0.00000   0.00000   0.80965   0.00000   0.00000   0.00000   0.00000   0.16195
   0.05967   0.00000   0.00000   0.00000   0.00000   0.01031   0.00000   0.00000   0.00000   0.00000
   0.00000   0.05967   0.00000   0.00000   0.00000   0.00000   0.01031   0.00000   0.00000   0.00000
   0.00000   0.00000   0.16195   0.00000   0.00000   0.00000   0.00000   0.03723   0.00000   0.00000
   0.00000   0.00000   0.00000   0.05967   0.00000   0.00000   0.00000   0.00000   0.01031   0.00000
   0.00000   0.00000   0.00000   0.00000   0.16195   0.00000   0.00000   0.00000   0.00000   0.03723
 
 ---------- DFT+U DATA --------------------------------------------------- 
 
 ====== For Atom     1, occupations for correlated orbitals. lpawu =   2
 
  (This is PAW atomic orbital occupations)
  (For Wannier orbital occupations, refer to DFT+DMFT occupations above)
 
 == Occupation matrix for correlated orbitals:
 
 Up component only...
     0.22113    0.00000    0.00000    0.00000    0.00000
     0.00000    0.22113    0.00000    0.00000    0.00000
     0.00000    0.00000    0.20550    0.00000    0.00000
     0.00000    0.00000    0.00000    0.22113    0.00000
     0.00000    0.00000    0.00000    0.00000    0.20550
 
 
 
 
 ======================================================================================
 
 == Start computation of Projected Local Orbitals Wannier functions ==  30
 
 == Lower and upper values of the selected bands   21   23
 == Number of atoms                                      1
 == Atoms selected                                1
 == Nb of angular momenta used for each atom      1
 == Value of the angular momenta for atom 1 is :  1
 == Value of the projectors      for atom 1 is : -2
 
 == For each k-point of the path, gives the eigenvalues (in eV) of the Hamiltonian in the Wannier basis
 
   (The band structure is shifted by fermie =       7.9649 eV )
 
 Wannier band structure for atom  1
 1       1.568       1.568       1.568
 2       1.567       1.567       1.567
 3       1.565       1.566       1.566
 4       1.562       1.563       1.563
 5       1.558       1.559       1.559
 6       1.552       1.554       1.554
 7       1.545       1.548       1.548
 8       1.537       1.540       1.540
 9       1.527       1.532       1.532
 10       1.517       1.523       1.523
 11       1.505       1.512       1.512
 12       1.492       1.501       1.501
 13       1.477       1.488       1.488
 14       1.462       1.474       1.474
 15       1.446       1.460       1.460
 16       1.428       1.444       1.444
 17       1.410       1.427       1.427
 18       1.390       1.409       1.409
 19       1.369       1.391       1.391
 20       1.348       1.371       1.371
 21       1.325       1.350       1.350
 22       1.301       1.329       1.329
 23       1.277       1.306       1.306
 24       1.252       1.283       1.283
 25       1.225       1.259       1.259
 26       1.198       1.234       1.234
 27       1.170       1.208       1.208
 28       1.141       1.182       1.182
 29       1.112       1.154       1.154
 30       1.082       1.126       1.126
 31       1.050       1.097       1.097
 32       1.019       1.068       1.068
 33       0.986       1.038       1.038
 34       0.953       1.007       1.007
 35       0.919       0.976       0.976
 36       0.884       0.944       0.944
 37       0.849       0.911       0.911
 38       0.813       0.878       0.878
 39       0.777       0.844       0.844
 40       0.740       0.810       0.810
 41       0.703       0.775       0.775
 42       0.665       0.740       0.740
 43       0.626       0.705       0.705
 44       0.587       0.669       0.669
 45       0.548       0.632       0.632
 46       0.509       0.595       0.595
 47       0.469       0.558       0.558
 48       0.428       0.521       0.521
 49       0.388       0.483       0.483
 50       0.347       0.445       0.445
 51       0.306       0.407       0.407
 52       0.265       0.368       0.368
 53       0.224       0.329       0.329
 54       0.182       0.290       0.290
 55       0.141       0.250       0.250
 56       0.099       0.211       0.211
 57       0.058       0.171       0.171
 58       0.016       0.131       0.131
 59      -0.025       0.090       0.090
 60      -0.066       0.050       0.050
 61      -0.107       0.009       0.009
 62      -0.148      -0.032      -0.032
 63      -0.188      -0.073      -0.073
 64      -0.228      -0.114      -0.114
 65      -0.268      -0.155      -0.155
 66      -0.308      -0.197      -0.197
 67      -0.347      -0.238      -0.238
 68      -0.386      -0.280      -0.280
 69      -0.424      -0.321      -0.321
 70      -0.461      -0.363      -0.363
 71      -0.498      -0.404      -0.404
 72      -0.535      -0.445      -0.445
 73      -0.571      -0.486      -0.486
 74      -0.606      -0.527      -0.527
 75      -0.640      -0.567      -0.567
 76      -0.674      -0.607      -0.607
 77      -0.706      -0.645      -0.645
 78      -0.738      -0.683      -0.683
 79      -0.768      -0.720      -0.720
 80      -0.797      -0.756      -0.756
 81      -0.825      -0.790      -0.790
 82      -0.851      -0.822      -0.822
 83      -0.875      -0.852      -0.852
 84      -0.898      -0.879      -0.879
 85      -0.918      -0.904      -0.904
 86      -0.935      -0.926      -0.926
 87      -0.950      -0.944      -0.944
 88      -0.962      -0.959      -0.959
 89      -0.971      -0.969      -0.969
 90      -0.976      -0.976      -0.976
 91      -0.978      -0.978      -0.978
 92      -0.978      -0.975      -0.975
 93      -0.977      -0.965      -0.965
 94      -0.977      -0.949      -0.949
 95      -0.976      -0.927      -0.927
 96      -0.975      -0.900      -0.900
 97      -0.973      -0.868      -0.868
 98      -0.972      -0.831      -0.831
 99      -0.970      -0.791      -0.791
 100      -0.968      -0.746      -0.746
 101      -0.966      -0.699      -0.699
 102      -0.964      -0.649      -0.649
 103      -0.961      -0.596      -0.596
 104      -0.958      -0.541      -0.541
 105      -0.956      -0.485      -0.485
 106      -0.952      -0.428      -0.428
 107      -0.949      -0.370      -0.370
 108      -0.946      -0.310      -0.310
 109      -0.942      -0.251      -0.251
 110      -0.939      -0.191      -0.191
 111      -0.935      -0.130      -0.130
 112      -0.931      -0.070      -0.070
 113      -0.928      -0.011      -0.011
 114      -0.924       0.048       0.048
 115      -0.920       0.107       0.107
 116      -0.916       0.165       0.165
 117      -0.912       0.222       0.222
 118      -0.908       0.278       0.278
 119      -0.904       0.332       0.332
 120      -0.900       0.385       0.385
 121      -0.896       0.437       0.437
 122      -0.892       0.487       0.487
 123      -0.889       0.536       0.536
 124      -0.885       0.582       0.582
 125      -0.882       0.626       0.626
 126      -0.878       0.669       0.669
 127      -0.875       0.709       0.709
 128      -0.872       0.747       0.747
 129      -0.869       0.782       0.782
 130      -0.867       0.815       0.815
 131      -0.864       0.846       0.846
 132      -0.862       0.873       0.873
 133      -0.860       0.898       0.898
 134      -0.858       0.921       0.921
 135      -0.856       0.940       0.940
 136      -0.855       0.957       0.957
 137      -0.854       0.970       0.970
 138      -0.853       0.981       0.981
 139      -0.852       0.988       0.988
 140      -0.852       0.993       0.993
 141      -0.852       0.994       0.994
 142      -0.849       0.994       0.994
 143      -0.841       0.994       0.994
 144      -0.828       0.994       0.994
 145      -0.809       0.993       0.994
 146      -0.786       0.993       0.994
 147      -0.758       0.992       0.993
 148      -0.726       0.991       0.993
 149      -0.691       0.991       0.993
 150      -0.652       0.990       0.992
 151      -0.610       0.990       0.992
 152      -0.565       0.990       0.991
 153      -0.518       0.990       0.990
 154      -0.469       0.990       0.990
 155      -0.418       0.989       0.991
 156      -0.366       0.988       0.993
 157      -0.312       0.988       0.995
 158      -0.258       0.987       0.998
 159      -0.203       0.986       1.001
 160      -0.148       0.986       1.005
 161      -0.092       0.985       1.011
 162      -0.036       0.984       1.017
 163       0.019       0.984       1.023
 164       0.075       0.983       1.031
 165       0.130       0.982       1.040
 166       0.184       0.982       1.049
 167       0.237       0.981       1.060
 168       0.290       0.981       1.071
 169       0.341       0.980       1.083
 170       0.392       0.980       1.096
 171       0.441       0.979       1.110
 172       0.488       0.979       1.124
 173       0.534       0.978       1.138
 174       0.579       0.978       1.153
 175       0.621       0.977       1.168
 176       0.662       0.977       1.183
 177       0.700       0.977       1.198
 178       0.736       0.976       1.213
 179       0.770       0.976       1.228
 180       0.802       0.976       1.242
 181       0.831       0.976       1.255
 182       0.858       0.975       1.268
 183       0.882       0.975       1.280
 184       0.903       0.975       1.290
 185       0.922       0.975       1.300
 186       0.938       0.975       1.308
 187       0.951       0.975       1.315
 188       0.961       0.975       1.320
 189       0.969       0.975       1.324
 190       0.973       0.975       1.326
 191       0.974       0.974       1.327
 192       0.974       0.974       1.326
 193       0.971       0.972       1.324
 194       0.967       0.969       1.320
 195       0.961       0.965       1.314
 196       0.953       0.959       1.307
 197       0.944       0.952       1.298
 198       0.932       0.944       1.288
 199       0.920       0.935       1.276
 200       0.905       0.924       1.262
 201       0.889       0.912       1.247
 202       0.872       0.899       1.231
 203       0.853       0.885       1.213
 204       0.832       0.869       1.193
 205       0.810       0.853       1.172
 206       0.787       0.835       1.150
 207       0.762       0.816       1.126
 208       0.736       0.796       1.101
 209       0.709       0.774       1.075
 210       0.680       0.751       1.047
 211       0.651       0.728       1.019
 212       0.620       0.703       0.989
 213       0.588       0.677       0.958
 214       0.555       0.649       0.925
 215       0.521       0.621       0.892
 216       0.486       0.592       0.858
 217       0.450       0.561       0.823
 218       0.414       0.530       0.787
 219       0.376       0.497       0.750
 220       0.338       0.464       0.712
 221       0.300       0.429       0.673
 222       0.261       0.394       0.634
 223       0.221       0.357       0.593
 224       0.181       0.320       0.552
 225       0.140       0.282       0.511
 226       0.099       0.243       0.469
 227       0.058       0.203       0.426
 228       0.017       0.162       0.382
 229      -0.025       0.121       0.338
 230      -0.066       0.079       0.294
 231      -0.108       0.037       0.248
 232      -0.150      -0.006       0.203
 233      -0.191      -0.050       0.157
 234      -0.233      -0.093       0.110
 235      -0.274      -0.138       0.063
 236      -0.315      -0.182       0.015
 237      -0.355      -0.227      -0.033
 238      -0.395      -0.271      -0.081
 239      -0.435      -0.316      -0.129
 240      -0.474      -0.361      -0.178
 241      -0.512      -0.405      -0.228
 242      -0.550      -0.449      -0.277
 243      -0.587      -0.492      -0.327
 244      -0.623      -0.535      -0.376
 245      -0.658      -0.577      -0.426
 246      -0.692      -0.618      -0.475
 247      -0.724      -0.658      -0.524
 248      -0.756      -0.696      -0.572
 249      -0.786      -0.733      -0.620
 250      -0.814      -0.769      -0.666
 251      -0.840      -0.802      -0.711
 252      -0.865      -0.833      -0.755
 253      -0.887      -0.862      -0.796
 254      -0.908      -0.888      -0.834
 255      -0.926      -0.911      -0.869
 256      -0.941      -0.931      -0.900
 257      -0.954      -0.947      -0.927
 258      -0.964      -0.961      -0.949
 259      -0.972      -0.970      -0.965
 260      -0.976      -0.976      -0.974
 261      -0.978      -0.978      -0.978
 
 Print the psichi coefficients in data.plowann
 
======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)
 outkss: Not allowed options found !
 Program does not stop but _KSS file will not be created...
 outkss: see the log file for more information.
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   51.746E-14; max=  99.985E-14
   0.5000  0.5000  0.5000    1  2.63958E-06 kpt; spin; max resid(k); each band:
   6.64E-13  8.35E-13  2.13E-13  7.05E-13  7.85E-13  6.11E-13  2.32E-13  2.63E-13
   5.35E-13  4.27E-13  3.99E-13  6.07E-13  7.90E-13  8.14E-13  8.99E-13  3.92E-13
   6.84E-13  3.38E-13  5.84E-13  2.17E-13  3.45E-13  2.31E-13  7.63E-13  4.98E-13
   1.23E-13  6.86E-13  4.50E-13  8.45E-13  2.90E-13  2.64E-06
   0.4944  0.4944  0.4944    1  3.52239E-06 kpt; spin; max resid(k); each band:
   3.29E-13  4.38E-13  1.56E-13  4.37E-13  4.57E-13  3.66E-13  9.42E-13  7.40E-13
   3.72E-13  4.83E-13  3.69E-13  2.64E-13  5.70E-13  3.49E-13  5.88E-13  9.09E-13
   2.21E-13  5.06E-13  5.27E-13  7.96E-13  4.79E-13  4.56E-13  2.27E-13  2.88E-13
   7.49E-13  2.71E-13  6.20E-13  3.68E-13  3.98E-13  3.52E-06
   0.4889  0.4889  0.4889    1  2.35094E-05 kpt; spin; max resid(k); each band:
   4.72E-13  4.03E-13  1.90E-13  4.11E-13  5.37E-13  4.21E-13  2.46E-13  3.80E-13
   3.22E-13  6.40E-13  6.25E-13  8.87E-13  4.64E-13  6.41E-13  5.15E-13  6.03E-13
   1.99E-13  4.61E-13  4.17E-13  6.87E-13  7.81E-13  2.68E-13  8.77E-13  3.58E-13
   7.84E-13  4.41E-13  2.59E-13  8.63E-13  4.90E-13  2.35E-05
   0.4833  0.4833  0.4833    1  1.26900E-05 kpt; spin; max resid(k); each band:
   5.71E-13  4.18E-13  1.99E-13  2.96E-13  5.75E-13  4.61E-13  1.63E-13  4.30E-13
   3.38E-13  7.74E-13  5.99E-13  7.77E-13  3.27E-13  6.81E-13  5.43E-13  3.16E-13
   1.54E-13  2.12E-13  5.17E-13  4.01E-13  9.53E-13  5.26E-13  3.15E-13  5.87E-13
   5.66E-13  5.46E-13  3.72E-13  7.55E-13  3.51E-13  1.27E-05
   0.4778  0.4778  0.4778    1  2.63922E-06 kpt; spin; max resid(k); each band:
   5.46E-13  9.06E-13  7.93E-13  6.55E-13  5.74E-13  4.62E-13  6.02E-13  8.39E-13
   3.22E-13  5.98E-13  6.01E-13  2.99E-13  4.54E-13  4.75E-13  2.88E-13  4.78E-13
   8.16E-13  7.87E-13  2.10E-13  8.58E-13  4.40E-13  9.43E-13  2.82E-13  4.28E-13
   6.97E-13  2.14E-13  6.13E-13  8.55E-13  1.83E-13  2.64E-06
   0.4722  0.4722  0.4722    1  7.81062E-05 kpt; spin; max resid(k); each band:
   3.90E-13  2.75E-13  3.83E-13  6.99E-13  3.92E-13  8.57E-13  4.67E-13  4.88E-13
   3.00E-13  3.32E-13  3.11E-13  5.43E-13  4.62E-13  3.48E-13  2.69E-13  5.60E-13
   4.21E-13  2.71E-13  5.56E-13  6.42E-13  9.19E-13  4.12E-13  8.16E-13  6.44E-13
   6.52E-13  6.15E-13  5.46E-13  7.54E-13  4.26E-13  7.81E-05
   0.4667  0.4667  0.4667    1  1.89929E-05 kpt; spin; max resid(k); each band:
   3.61E-13  6.71E-13  2.56E-13  5.21E-13  3.25E-13  3.62E-13  4.70E-13  3.65E-13
   4.55E-13  2.25E-13  2.29E-13  3.72E-13  3.12E-13  5.48E-13  2.29E-13  1.71E-13
   1.86E-13  2.48E-13  7.00E-13  1.80E-13  5.23E-13  3.22E-13  9.89E-13  4.38E-13
   1.19E-13  8.83E-13  7.82E-13  3.18E-13  3.86E-13  1.90E-05
   0.4611  0.4611  0.4611    1  2.65309E-05 kpt; spin; max resid(k); each band:
   4.62E-13  8.93E-13  6.31E-13  4.16E-13  3.27E-13  5.39E-13  4.19E-13  3.95E-13
   4.12E-13  3.71E-13  3.67E-13  2.59E-13  2.96E-13  5.32E-13  3.12E-13  3.93E-13
   5.01E-13  3.06E-13  2.61E-13  8.65E-13  2.22E-13  5.77E-13  4.94E-13  1.51E-13
   8.33E-13  3.32E-13  5.74E-13  6.59E-13  1.70E-13  2.65E-05
   0.4556  0.4556  0.4556    1  3.07666E-05 kpt; spin; max resid(k); each band:
   4.89E-13  9.92E-13  7.00E-13  4.64E-13  3.31E-13  5.77E-13  3.96E-13  4.02E-13
   4.23E-13  4.58E-13  3.83E-13  3.09E-13  3.39E-13  6.29E-13  2.76E-13  3.90E-13
   4.93E-13  2.98E-13  2.75E-13  2.06E-13  2.10E-13  5.66E-13  4.30E-13  3.59E-13
   7.33E-13  4.58E-13  8.65E-13  2.90E-13  1.86E-13  3.08E-05
   0.4500  0.4500  0.4500    1  3.04342E-05 kpt; spin; max resid(k); each band:
   5.08E-13  1.89E-13  7.33E-13  5.09E-13  3.18E-13  5.80E-13  3.99E-13  4.85E-13
   4.43E-13  5.58E-13  3.71E-13  3.94E-13  3.66E-13  6.92E-13  2.49E-13  3.64E-13
   4.47E-13  3.30E-13  3.26E-13  9.09E-13  1.61E-13  6.04E-13  4.07E-13  5.24E-13
   4.98E-13  5.79E-13  8.55E-13  4.28E-13  2.15E-13  3.04E-05
   0.4444  0.4444  0.4444    1  6.83648E-06 kpt; spin; max resid(k); each band:
   4.98E-13  9.35E-13  7.68E-13  5.42E-13  7.43E-13  4.97E-13  6.28E-13  2.93E-13
   6.30E-13  4.92E-13  6.19E-13  2.93E-13  9.51E-13  7.87E-13  4.34E-13  4.38E-13
   5.14E-13  7.73E-13  8.28E-13  6.25E-13  6.51E-13  7.57E-13  9.06E-13  8.86E-13
   5.89E-13  4.43E-13  2.34E-13  7.07E-13  7.84E-12  6.84E-06
   0.4389  0.4389  0.4389    1  3.63140E-07 kpt; spin; max resid(k); each band:
   2.76E-13  1.93E-13  5.19E-13  4.25E-13  3.99E-13  9.38E-13  8.48E-13  5.50E-13
   5.67E-13  4.64E-13  8.14E-13  8.54E-13  9.42E-13  7.34E-13  5.68E-13  9.27E-13
   7.48E-13  3.50E-13  5.48E-13  5.05E-13  6.38E-13  9.43E-13  6.35E-13  2.71E-13
   4.83E-13  9.80E-13  4.89E-13  8.47E-13  9.85E-13  3.63E-07
   0.4333  0.4333  0.4333    1  5.32998E-07 kpt; spin; max resid(k); each band:
   2.77E-13  2.52E-13  8.90E-13  6.70E-13  4.60E-13  7.40E-13  3.87E-13  4.26E-13
   5.01E-13  3.83E-13  4.76E-13  2.94E-13  3.06E-13  8.59E-14  4.86E-13  2.39E-13
   3.11E-13  5.94E-13  7.19E-13  4.40E-13  5.46E-13  2.87E-13  1.37E-13  7.28E-13
   3.44E-13  9.73E-13  1.49E-13  6.17E-13  3.57E-13  5.33E-07
   0.4278  0.4278  0.4278    1  1.90081E-05 kpt; spin; max resid(k); each band:
   4.35E-13  3.10E-13  3.43E-13  3.11E-13  2.12E-13  1.46E-13  3.66E-13  2.40E-13
   1.89E-13  6.63E-13  3.77E-13  2.86E-13  4.38E-13  9.12E-13  4.78E-13  6.20E-13
   8.71E-13  3.87E-13  9.31E-13  5.65E-13  3.32E-13  3.73E-13  4.56E-13  8.07E-13
   7.36E-13  4.18E-13  1.95E-13  4.73E-13  7.59E-13  1.90E-05
   0.4222  0.4222  0.4222    1  1.45386E-05 kpt; spin; max resid(k); each band:
   4.50E-13  3.35E-13  3.22E-13  3.54E-13  2.14E-13  1.59E-13  3.65E-13  3.50E-13
   1.86E-13  6.81E-13  3.34E-13  2.97E-13  5.88E-13  4.55E-13  5.20E-13  5.89E-13
   6.88E-13  5.72E-13  8.80E-13  9.77E-13  2.97E-13  3.88E-13  4.35E-13  8.45E-13
   6.91E-13  9.65E-13  1.08E-13  5.04E-13  9.14E-13  1.45E-05
   0.4167  0.4167  0.4167    1  9.49612E-06 kpt; spin; max resid(k); each band:
   4.77E-13  3.03E-13  2.85E-13  4.23E-13  9.99E-13  1.42E-13  3.56E-13  3.86E-13
   2.09E-13  6.36E-13  3.22E-13  2.78E-13  6.77E-13  3.82E-13  5.42E-13  6.10E-13
   7.67E-13  5.82E-13  7.85E-13  9.49E-13  2.85E-13  4.26E-13  5.36E-13  6.84E-13
   5.18E-13  3.83E-13  1.71E-13  6.80E-13  1.65E-12  9.50E-06
   0.4111  0.4111  0.4111    1  6.71715E-06 kpt; spin; max resid(k); each band:
   5.02E-13  3.31E-13  2.60E-13  4.75E-13  9.55E-13  1.51E-13  3.18E-13  5.10E-13
   2.18E-13  6.76E-13  3.69E-13  2.79E-13  7.00E-13  2.94E-13  5.68E-13  6.99E-13
   7.59E-13  7.41E-13  6.56E-13  5.70E-13  2.57E-13  4.92E-13  5.46E-13  5.62E-13
   9.32E-13  8.53E-13  8.89E-13  6.59E-13  2.56E-12  6.72E-06
   0.4056  0.4056  0.4056    1  2.43260E-06 kpt; spin; max resid(k); each band:
   2.06E-13  1.93E-13  6.21E-13  1.88E-13  3.90E-13  7.10E-13  6.23E-13  5.87E-13
   3.67E-13  6.76E-13  1.32E-13  9.93E-13  4.09E-13  3.44E-13  6.43E-13  3.01E-13
   2.81E-13  4.81E-13  6.84E-13  6.52E-13  8.18E-13  1.91E-13  2.77E-13  4.62E-13
   5.05E-13  3.66E-13  5.22E-13  9.66E-13  2.17E-12  2.43E-06
   0.4000  0.4000  0.4000    1  1.98228E-06 kpt; spin; max resid(k); each band:
   9.70E-13  2.34E-13  7.64E-13  2.86E-13  4.39E-13  6.38E-13  6.01E-13  5.21E-13
   5.03E-13  8.08E-13  3.98E-13  2.47E-13  4.95E-13  4.37E-13  7.86E-13  2.46E-13
   2.03E-13  7.46E-13  8.79E-13  4.03E-13  6.68E-13  5.89E-13  9.51E-13  4.19E-13
   4.41E-13  8.24E-13  6.74E-13  5.86E-13  1.15E-11  1.98E-06
   0.3944  0.3944  0.3944    1  1.15731E-06 kpt; spin; max resid(k); each band:
   6.68E-13  3.93E-13  3.85E-13  5.60E-13  4.07E-13  6.95E-13  5.74E-13  6.47E-13
   2.81E-13  4.09E-13  6.37E-13  6.27E-13  4.98E-13  4.25E-13  1.96E-13  6.44E-13
   7.43E-13  5.24E-13  7.22E-13  9.36E-13  2.63E-13  3.41E-13  2.89E-13  2.94E-13
   9.45E-13  2.83E-13  4.81E-13  6.58E-13  5.38E-11  1.16E-06
   0.3889  0.3889  0.3889    1  8.54716E-07 kpt; spin; max resid(k); each band:
   6.98E-13  3.97E-13  3.94E-13  5.59E-13  4.03E-13  6.54E-13  6.26E-13  6.68E-13
   2.37E-13  4.05E-13  6.09E-13  5.01E-13  6.94E-13  5.30E-13  8.72E-13  5.51E-13
   7.37E-13  4.42E-13  4.63E-13  8.93E-13  7.62E-13  3.37E-13  6.96E-13  7.34E-13
   6.57E-13  3.32E-13  3.98E-13  5.36E-13  7.47E-11  8.55E-07
   0.3833  0.3833  0.3833    1  6.40512E-07 kpt; spin; max resid(k); each band:
   7.13E-13  4.01E-13  4.05E-13  6.53E-13  4.04E-13  5.91E-13  6.53E-13  6.90E-13
   8.60E-13  4.09E-13  5.55E-13  4.68E-13  8.99E-13  6.55E-13  7.56E-13  5.11E-13
   7.81E-13  3.46E-13  3.18E-13  6.75E-13  5.65E-13  3.57E-13  4.41E-13  3.31E-13
   5.94E-13  4.36E-13  9.18E-13  6.96E-13  9.99E-11  6.41E-07
   0.3778  0.3778  0.3778    1  4.90693E-07 kpt; spin; max resid(k); each band:
   6.96E-13  4.05E-13  4.16E-13  7.74E-13  4.06E-13  5.46E-13  6.78E-13  7.30E-13
   6.88E-13  3.60E-13  5.29E-13  5.06E-13  1.24E-13  8.13E-13  6.96E-13  4.93E-13
   8.46E-13  2.75E-13  2.96E-13  5.21E-13  4.33E-13  2.85E-13  3.66E-13  6.77E-13
   6.93E-13  6.46E-13  4.29E-13  5.77E-13  1.27E-10  4.91E-07
   0.3722  0.3722  0.3722    1  2.55864E-08 kpt; spin; max resid(k); each band:
   8.41E-13  5.04E-13  3.92E-13  3.29E-13  8.44E-13  2.90E-13  3.30E-13  3.64E-13
   3.18E-13  2.41E-13  2.22E-13  5.65E-13  1.94E-13  2.87E-13  4.15E-13  7.43E-13
   5.69E-13  6.14E-13  5.23E-13  5.74E-13  4.82E-13  4.00E-13  5.16E-13  7.31E-13
   4.80E-13  3.17E-13  8.29E-13  2.48E-13  1.21E-11  2.56E-08
   0.3667  0.3667  0.3667    1  9.86622E-09 kpt; spin; max resid(k); each band:
   9.11E-13  4.70E-13  4.18E-13  3.13E-13  8.54E-13  2.27E-13  3.85E-13  4.13E-13
   2.95E-13  2.34E-13  8.34E-13  5.57E-13  2.12E-13  3.44E-13  3.46E-13  8.40E-13
   5.77E-13  8.18E-13  4.13E-13  5.58E-13  5.18E-13  3.45E-13  5.02E-13  3.65E-13
   6.09E-13  5.51E-13  4.46E-13  2.57E-13  7.67E-12  9.87E-09
   0.3611  0.3611  0.3611    1  2.22772E-08 kpt; spin; max resid(k); each band:
   5.72E-13  1.89E-13  6.33E-13  9.83E-13  1.82E-13  3.63E-13  3.76E-13  9.77E-13
   8.35E-13  6.15E-13  2.42E-13  5.99E-13  8.03E-13  2.82E-13  9.04E-13  8.59E-13
   6.78E-13  4.50E-13  2.66E-13  6.69E-13  8.90E-13  7.91E-13  8.76E-13  7.64E-13
   3.06E-13  7.57E-13  3.13E-13  6.37E-13  1.77E-11  2.23E-08
   0.3556  0.3556  0.3556    1  1.53622E-08 kpt; spin; max resid(k); each band:
   5.89E-13  1.57E-13  7.32E-13  9.87E-13  1.90E-13  3.23E-13  3.87E-13  9.47E-13
   7.79E-13  5.89E-13  2.23E-13  5.46E-13  7.62E-13  2.48E-13  6.94E-13  8.89E-13
   4.09E-13  6.24E-13  2.31E-13  5.41E-13  7.88E-13  2.77E-13  6.54E-13  6.48E-13
   9.48E-13  4.17E-13  3.83E-13  6.55E-13  1.37E-11  1.54E-08
   0.3500  0.3500  0.3500    1  4.94011E-08 kpt; spin; max resid(k); each band:
   2.62E-13  2.30E-13  6.45E-13  5.62E-13  6.35E-13  4.32E-13  3.96E-13  2.59E-13
   1.90E-13  7.39E-13  6.05E-13  9.30E-13  5.16E-13  3.35E-13  3.75E-13  6.51E-13
   8.10E-13  8.13E-13  4.50E-13  4.69E-13  3.64E-13  2.87E-13  4.13E-13  6.41E-13
   5.53E-13  6.69E-13  5.73E-13  5.49E-13  2.68E-12  4.94E-08
   0.3444  0.3444  0.3444    1  4.06185E-08 kpt; spin; max resid(k); each band:
   2.70E-13  2.88E-13  5.49E-13  6.31E-13  7.29E-13  4.30E-13  4.37E-13  8.45E-13
   1.94E-13  5.53E-13  5.79E-13  8.31E-13  4.92E-13  3.08E-13  4.43E-13  5.90E-13
   6.71E-13  2.44E-13  3.36E-13  5.05E-13  3.16E-13  9.38E-13  3.75E-13  5.67E-13
   3.06E-13  9.97E-13  4.39E-13  4.87E-13  2.27E-12  4.06E-08
   0.3389  0.3389  0.3389    1  3.12388E-09 kpt; spin; max resid(k); each band:
   2.75E-13  3.60E-13  4.58E-13  6.98E-13  8.50E-13  4.34E-13  4.68E-13  7.12E-13
   1.96E-13  3.95E-13  5.44E-13  6.72E-13  4.86E-13  3.37E-13  5.25E-13  5.85E-13
   5.87E-13  2.45E-13  3.35E-13  6.71E-13  2.75E-13  6.75E-13  4.07E-13  2.88E-13
   3.93E-13  8.82E-13  4.61E-13  5.39E-13  7.70E-13  3.12E-09
   0.3333  0.3333  0.3333    1  3.21528E-09 kpt; spin; max resid(k); each band:
   2.82E-13  4.22E-13  4.22E-13  7.75E-13  2.40E-13  4.37E-13  5.86E-13  5.89E-13
   2.02E-13  3.28E-13  4.96E-13  4.04E-13  4.88E-13  3.51E-13  6.15E-13  6.88E-13
   6.62E-13  2.50E-13  3.84E-13  7.09E-13  2.23E-13  4.56E-13  4.17E-13  3.73E-13
   4.75E-13  7.10E-13  4.43E-13  5.58E-13  2.40E-12  3.22E-09
   0.3278  0.3278  0.3278    1  4.07328E-09 kpt; spin; max resid(k); each band:
   2.50E-13  2.40E-13  6.18E-13  4.97E-13  6.50E-13  3.34E-13  7.38E-13  7.82E-13
   4.88E-13  4.40E-13  6.16E-13  7.53E-13  2.88E-13  7.59E-13  4.74E-13  7.51E-13
   4.82E-13  4.56E-13  7.16E-13  8.24E-13  3.93E-13  7.69E-13  6.62E-13  6.49E-13
   7.52E-13  8.85E-13  4.62E-13  4.42E-13  1.93E-11  4.07E-09
   0.3222  0.3222  0.3222    1  2.30448E-09 kpt; spin; max resid(k); each band:
   9.10E-13  2.42E-13  3.26E-13  6.09E-13  5.21E-13  2.04E-13  5.89E-13  9.82E-13
   5.40E-13  3.03E-13  3.50E-13  6.97E-13  8.92E-13  5.60E-13  4.15E-13  3.77E-13
   2.50E-13  3.46E-13  2.61E-13  3.55E-13  2.69E-13  1.74E-13  2.28E-13  7.65E-13
   9.62E-13  9.15E-13  1.54E-13  5.03E-13  1.15E-11  2.30E-09
   0.3167  0.3167  0.3167    1  2.31508E-09 kpt; spin; max resid(k); each band:
   9.23E-13  2.68E-13  4.34E-13  6.03E-13  4.45E-13  2.37E-13  4.42E-13  2.90E-13
   4.21E-13  3.55E-13  3.13E-13  6.04E-13  6.72E-13  5.15E-13  7.56E-13  4.33E-13
   3.19E-13  7.30E-13  5.09E-13  3.79E-13  9.50E-13  1.42E-13  2.11E-13  6.91E-13
   8.36E-13  3.11E-13  9.13E-13  4.16E-13  8.77E-12  2.32E-09
   0.3111  0.3111  0.3111    1  2.51695E-09 kpt; spin; max resid(k); each band:
   9.66E-13  2.96E-13  5.69E-13  5.88E-13  3.83E-13  2.60E-13  3.49E-13  2.88E-13
   3.26E-13  3.36E-13  2.88E-13  5.76E-13  4.67E-13  4.82E-13  1.64E-13  3.76E-13
   3.28E-13  6.35E-13  6.00E-13  4.92E-13  7.02E-13  1.71E-13  2.19E-13  5.59E-13
   9.83E-13  4.27E-13  7.12E-13  9.88E-13  6.42E-12  2.52E-09
   0.3056  0.3056  0.3056    1  2.80597E-09 kpt; spin; max resid(k); each band:
   2.60E-13  3.27E-13  7.40E-13  5.49E-13  3.44E-13  2.66E-13  4.15E-13  9.43E-13
   3.89E-13  2.54E-13  2.69E-13  5.49E-13  5.83E-13  6.52E-13  2.38E-13  3.01E-13
   4.08E-13  4.20E-13  7.90E-13  7.03E-13  7.48E-13  2.06E-13  2.31E-13  4.79E-13
   4.61E-13  5.74E-13  1.29E-13  2.99E-13  4.20E-12  2.81E-09
   0.3000  0.3000  0.3000    1  3.25815E-09 kpt; spin; max resid(k); each band:
   6.63E-13  5.23E-13  2.62E-13  3.35E-13  4.93E-13  2.49E-13  3.57E-13  5.14E-13
   9.79E-13  7.58E-13  4.59E-13  3.49E-13  6.01E-13  8.22E-13  8.41E-13  3.75E-13
   5.91E-13  4.05E-13  5.61E-13  8.48E-13  7.06E-13  5.79E-13  7.98E-13  8.60E-13
   6.54E-13  2.68E-13  6.46E-13  2.18E-13  2.56E-13  3.26E-09
   0.2944  0.2944  0.2944    1  1.17229E-08 kpt; spin; max resid(k); each band:
   3.97E-13  8.38E-13  7.18E-13  7.31E-13  6.90E-13  1.69E-13  9.14E-13  5.63E-13
   2.61E-13  3.03E-13  8.38E-13  4.53E-13  4.11E-13  3.97E-13  5.55E-13  4.71E-13
   4.52E-13  6.58E-13  7.31E-13  9.24E-13  2.83E-13  6.55E-13  6.96E-13  3.48E-13
   3.60E-13  1.51E-13  2.69E-13  4.29E-13  4.70E-13  1.17E-08
   0.2889  0.2889  0.2889    1  3.35789E-08 kpt; spin; max resid(k); each band:
   5.60E-13  3.65E-13  8.33E-13  1.75E-13  6.28E-13  8.44E-13  5.51E-13  5.69E-13
   4.48E-13  4.53E-13  4.32E-13  2.64E-13  7.46E-13  5.18E-13  4.25E-13  2.66E-13
   1.39E-13  5.99E-13  5.16E-13  4.50E-13  8.23E-13  3.99E-13  3.03E-13  9.62E-13
   2.18E-13  5.48E-14  3.36E-13  8.05E-13  2.06E-11  3.36E-08
   0.2833  0.2833  0.2833    1  5.07277E-08 kpt; spin; max resid(k); each band:
   7.99E-13  5.08E-13  2.62E-13  5.97E-13  4.27E-13  3.43E-13  5.53E-13  5.00E-13
   2.37E-13  3.20E-13  2.29E-13  3.90E-13  2.64E-13  3.29E-13  3.63E-13  6.45E-13
   1.49E-13  5.85E-13  7.24E-13  5.85E-13  5.84E-13  1.71E-13  2.74E-13  5.26E-13
   2.74E-13  7.12E-14  6.51E-13  2.16E-13  1.23E-11  5.07E-08
   0.2778  0.2778  0.2778    1  1.17917E-08 kpt; spin; max resid(k); each band:
   8.92E-13  4.41E-13  2.89E-13  6.54E-13  7.75E-13  4.42E-13  6.52E-13  6.32E-13
   4.93E-13  4.55E-13  2.96E-13  4.78E-13  4.91E-13  2.82E-13  4.17E-13  6.76E-13
   1.81E-13  5.87E-13  5.28E-13  1.49E-13  7.23E-13  1.35E-13  2.60E-13  6.68E-13
   3.78E-13  2.40E-13  5.96E-13  5.60E-13  1.42E-11  1.18E-08
   0.2722  0.2722  0.2722    1  6.85528E-09 kpt; spin; max resid(k); each band:
   8.98E-13  4.48E-13  2.72E-13  5.63E-13  7.40E-13  4.56E-13  6.85E-13  5.79E-13
   5.06E-13  3.76E-13  3.15E-13  4.27E-13  4.49E-13  6.29E-13  1.24E-13  6.44E-13
   1.60E-13  3.19E-13  3.39E-13  2.69E-13  5.72E-13  8.90E-13  9.16E-13  8.59E-13
   5.25E-13  3.63E-13  8.16E-13  7.14E-13  1.07E-11  6.86E-09
   0.2667  0.2667  0.2667    1  5.38642E-09 kpt; spin; max resid(k); each band:
   6.28E-13  3.46E-13  9.00E-13  1.55E-13  7.81E-13  3.57E-13  6.23E-13  2.66E-13
   4.38E-13  2.98E-13  3.02E-13  7.47E-13  3.34E-13  8.00E-13  3.59E-13  7.04E-13
   2.84E-13  5.85E-13  5.60E-13  6.60E-13  8.99E-13  2.82E-13  3.00E-13  4.16E-13
   5.06E-13  4.13E-13  3.07E-13  7.79E-13  2.20E-12  5.39E-09
   0.2611  0.2611  0.2611    1  1.02963E-08 kpt; spin; max resid(k); each band:
   4.74E-13  3.99E-13  4.05E-13  1.40E-13  1.32E-13  3.66E-13  3.88E-13  3.51E-13
   2.82E-13  3.17E-13  2.21E-13  8.05E-13  3.79E-13  7.06E-13  7.35E-13  5.39E-13
   2.70E-13  2.09E-13  4.12E-13  5.68E-13  2.82E-13  4.10E-13  3.56E-13  5.75E-13
   4.35E-13  6.98E-13  8.73E-13  8.88E-13  3.41E-13  1.03E-08
   0.2556  0.2556  0.2556    1  2.44708E-08 kpt; spin; max resid(k); each band:
   4.83E-13  3.94E-13  4.44E-13  1.38E-13  1.26E-13  3.25E-13  3.67E-13  3.28E-13
   3.06E-13  3.56E-13  2.73E-13  2.85E-13  3.84E-13  9.13E-13  6.88E-13  4.97E-13
   3.59E-13  2.56E-13  5.33E-13  7.95E-13  3.34E-13  4.49E-13  4.76E-13  4.53E-13
   3.28E-13  1.60E-13  3.40E-13  9.21E-13  9.42E-13  2.45E-08
   0.2500  0.2500  0.2500    1  7.90243E-09 kpt; spin; max resid(k); each band:
   4.83E-13  3.94E-13  4.95E-13  1.40E-13  9.43E-13  9.00E-13  3.36E-13  3.08E-13
   3.40E-13  4.46E-13  3.45E-13  3.91E-13  4.31E-13  3.10E-13  6.79E-13  5.04E-13
   3.57E-13  3.30E-13  6.54E-13  9.27E-13  4.26E-13  5.53E-13  5.55E-13  7.67E-13
   6.74E-13  7.13E-13  8.32E-13  7.22E-13  2.14E-13  7.90E-09
   0.2444  0.2444  0.2444    1  7.31654E-09 kpt; spin; max resid(k); each band:
   4.77E-13  3.96E-13  5.47E-13  1.46E-13  8.45E-13  7.35E-13  3.15E-13  2.92E-13
   3.85E-13  5.68E-13  4.51E-13  5.13E-13  6.30E-13  4.81E-13  6.54E-13  4.97E-13
   8.62E-13  4.23E-13  6.88E-13  4.34E-13  5.74E-13  6.98E-13  6.54E-13  8.40E-13
   8.02E-13  4.38E-13  6.63E-13  5.37E-13  3.09E-13  7.32E-09
   0.2389  0.2389  0.2389    1  1.93757E-08 kpt; spin; max resid(k); each band:
   4.55E-13  3.52E-13  5.90E-13  1.53E-13  7.07E-13  4.69E-13  2.95E-13  2.68E-13
   4.38E-13  7.12E-13  5.57E-13  6.35E-13  7.57E-13  6.45E-13  5.24E-13  3.49E-13
   2.54E-13  5.53E-13  7.00E-13  9.09E-13  6.49E-13  7.21E-13  8.30E-13  6.77E-13
   4.42E-13  5.67E-13  7.39E-13  9.49E-13  2.01E-13  1.94E-08
   0.2333  0.2333  0.2333    1  2.34754E-07 kpt; spin; max resid(k); each band:
   4.14E-13  2.88E-13  3.14E-13  6.85E-13  3.98E-13  8.21E-13  2.57E-13  5.82E-13
   3.17E-13  4.09E-13  6.14E-13  4.19E-13  3.15E-13  5.28E-13  5.42E-13  8.80E-13
   4.58E-13  8.50E-13  4.32E-13  2.62E-13  3.53E-13  5.30E-13  5.41E-13  2.53E-13
   1.81E-13  2.04E-13  9.19E-13  8.27E-13  1.28E-12  2.35E-07
   0.2278  0.2278  0.2278    1  3.09569E-07 kpt; spin; max resid(k); each band:
   5.59E-13  5.13E-13  2.58E-13  7.32E-13  3.80E-13  6.07E-13  2.66E-13  4.05E-13
   2.01E-13  4.34E-13  4.34E-13  3.41E-13  3.01E-13  3.98E-13  4.71E-13  6.29E-13
   6.12E-13  5.34E-13  2.20E-13  5.97E-13  2.11E-13  6.19E-13  5.48E-13  6.42E-13
   5.93E-13  4.35E-13  5.11E-13  3.75E-13  3.58E-13  3.10E-07
   0.2222  0.2222  0.2222    1  3.06874E-07 kpt; spin; max resid(k); each band:
   3.25E-13  8.87E-13  3.40E-13  7.15E-13  4.28E-13  6.60E-13  5.28E-13  5.37E-13
   4.88E-13  7.42E-13  3.62E-13  4.84E-13  8.90E-13  6.16E-13  2.78E-13  1.82E-13
   4.90E-13  3.19E-13  4.21E-13  1.84E-13  4.15E-13  1.14E-13  2.56E-13  2.67E-13
   2.47E-13  8.56E-13  3.89E-13  4.16E-13  8.66E-13  3.07E-07
   0.2167  0.2167  0.2167    1  4.99241E-08 kpt; spin; max resid(k); each band:
   5.16E-13  7.66E-13  1.91E-13  3.23E-13  9.74E-13  8.93E-13  6.56E-13  7.75E-13
   2.01E-13  7.44E-13  2.87E-13  9.49E-13  9.26E-13  4.43E-13  8.01E-13  5.69E-13
   7.21E-13  2.12E-13  3.15E-13  2.97E-13  2.64E-13  5.55E-13  2.21E-13  3.71E-13
   4.43E-13  2.78E-13  6.82E-13  8.89E-13  4.00E-14  4.99E-08
   0.2111  0.2111  0.2111    1  1.49791E-07 kpt; spin; max resid(k); each band:
   5.45E-13  6.87E-13  1.87E-13  3.63E-13  8.17E-13  8.99E-13  6.17E-13  7.33E-13
   2.05E-13  8.06E-13  2.47E-13  9.29E-13  6.16E-13  5.77E-13  8.94E-13  5.56E-13
   9.17E-13  2.42E-13  3.84E-13  3.14E-13  2.18E-13  5.20E-13  3.01E-13  4.14E-13
   4.35E-13  4.09E-13  5.90E-13  2.99E-13  1.48E-13  1.50E-07
   0.2056  0.2056  0.2056    1  4.47548E-07 kpt; spin; max resid(k); each band:
   5.83E-13  6.13E-13  1.91E-13  3.57E-13  7.00E-13  9.34E-13  5.79E-13  6.17E-13
   2.35E-13  8.81E-13  2.20E-13  9.21E-13  2.54E-13  8.20E-13  1.15E-13  2.54E-13
   2.51E-13  4.76E-13  7.13E-13  2.85E-13  2.04E-13  4.14E-13  3.99E-13  2.72E-13
   2.79E-13  2.46E-13  3.43E-13  3.62E-13  2.67E-13  4.48E-07
   0.2000  0.2000  0.2000    1  3.54652E-07 kpt; spin; max resid(k); each band:
   2.78E-13  4.90E-13  3.99E-13  6.45E-13  3.16E-13  4.41E-13  4.92E-13  3.70E-13
   3.93E-13  4.18E-13  4.99E-13  2.43E-13  5.20E-13  4.32E-13  7.63E-13  2.73E-13
   3.34E-13  9.13E-13  2.59E-13  7.71E-13  3.95E-13  4.47E-13  3.45E-13  7.25E-13
   4.68E-13  5.65E-13  5.07E-13  7.84E-13  7.53E-13  3.55E-07
   0.1944  0.1944  0.1944    1  9.92370E-07 kpt; spin; max resid(k); each band:
   4.83E-13  2.18E-13  7.46E-13  8.26E-13  3.22E-13  9.18E-13  4.37E-13  2.37E-13
   5.02E-13  2.66E-13  6.44E-13  3.48E-13  5.92E-13  2.86E-13  2.99E-13  9.41E-13
   2.62E-13  4.18E-13  7.50E-13  5.56E-13  2.65E-13  3.67E-13  9.28E-13  6.36E-13
   7.95E-13  6.91E-13  6.96E-13  3.00E-13  7.05E-13  9.92E-07
   0.1889  0.1889  0.1889    1  1.79828E-06 kpt; spin; max resid(k); each band:
   4.87E-13  2.61E-13  7.46E-13  1.90E-13  3.28E-13  9.62E-13  4.58E-13  2.65E-13
   5.03E-13  2.22E-13  3.17E-13  4.03E-13  6.56E-13  2.00E-13  3.57E-13  3.24E-13
   3.13E-13  1.27E-13  3.17E-13  9.68E-13  5.46E-13  2.81E-13  2.04E-13  1.95E-13
   6.50E-13  4.26E-13  4.65E-13  1.00E-12  2.44E-13  1.80E-06
   0.1833  0.1833  0.1833    1  5.45765E-07 kpt; spin; max resid(k); each band:
   3.77E-13  2.61E-13  2.17E-13  5.15E-13  9.29E-13  4.63E-13  3.86E-13  8.87E-13
   4.37E-13  4.93E-13  4.25E-13  4.92E-13  7.24E-13  4.10E-13  5.76E-13  4.00E-13
   3.40E-13  5.41E-13  5.13E-13  9.48E-13  6.39E-13  7.04E-13  2.96E-13  5.78E-13
   8.93E-13  4.68E-13  5.62E-13  5.10E-13  2.20E-14  5.46E-07
   0.1778  0.1778  0.1778    1  6.82361E-07 kpt; spin; max resid(k); each band:
   4.36E-13  4.03E-13  2.32E-13  5.08E-13  9.74E-13  5.01E-13  5.55E-13  5.98E-13
   4.24E-13  3.88E-13  4.44E-13  2.70E-13  6.93E-13  3.51E-13  5.74E-13  3.47E-13
   3.15E-13  4.79E-13  1.49E-13  5.92E-13  2.58E-13  3.22E-13  2.07E-13  7.34E-13
   3.95E-13  5.39E-13  5.17E-13  5.46E-13  2.26E-13  6.82E-07
   0.1722  0.1722  0.1722    1  1.60412E-06 kpt; spin; max resid(k); each band:
   6.29E-13  3.75E-13  2.29E-13  6.17E-13  2.64E-13  5.27E-13  3.74E-13  7.61E-13
   4.69E-13  4.02E-13  5.09E-13  6.07E-13  6.94E-13  3.26E-13  6.79E-13  3.28E-13
   3.04E-13  5.18E-13  8.92E-13  6.00E-13  5.04E-13  4.60E-13  2.23E-13  8.45E-13
   7.88E-13  1.80E-13  5.85E-13  3.52E-13  7.90E-14  1.60E-06
   0.1667  0.1667  0.1667    1  3.61152E-07 kpt; spin; max resid(k); each band:
   7.49E-13  3.63E-13  3.39E-13  1.09E-13  7.05E-13  4.37E-13  6.49E-13  3.25E-13
   3.90E-13  5.45E-13  5.64E-13  8.36E-13  4.21E-13  5.99E-13  6.13E-13  5.76E-13
   2.19E-13  6.88E-13  4.81E-13  2.78E-13  2.99E-13  8.57E-13  3.26E-13  8.62E-13
   6.22E-13  3.99E-13  3.55E-13  7.61E-13  1.47E-13  3.61E-07
   0.1611  0.1611  0.1611    1  1.53712E-07 kpt; spin; max resid(k); each band:
   4.61E-13  5.08E-13  4.93E-13  8.06E-13  8.19E-13  5.87E-13  2.80E-13  2.33E-13
   2.74E-13  7.37E-14  6.58E-13  9.32E-13  5.70E-13  6.82E-13  5.86E-13  2.54E-13
   7.88E-13  3.07E-13  2.72E-13  7.17E-13  4.83E-13  4.41E-13  3.20E-13  1.28E-13
   3.98E-13  7.19E-13  5.94E-13  8.77E-13  4.03E-13  1.54E-07
   0.1556  0.1556  0.1556    1  1.56538E-07 kpt; spin; max resid(k); each band:
   4.58E-13  5.79E-13  4.13E-13  8.30E-13  9.54E-13  5.80E-13  9.45E-13  4.26E-13
   3.21E-13  7.16E-14  7.05E-13  7.65E-13  5.58E-13  6.27E-13  4.33E-13  2.24E-13
   8.72E-13  8.48E-13  5.53E-13  5.62E-13  6.48E-13  4.14E-13  2.22E-13  1.48E-13
   4.92E-13  4.50E-13  3.52E-13  9.11E-13  3.99E-13  1.57E-07
   0.1500  0.1500  0.1500    1  6.40899E-07 kpt; spin; max resid(k); each band:
   4.82E-13  5.22E-13  4.34E-13  8.58E-13  8.90E-13  4.87E-13  8.51E-13  4.90E-13
   3.07E-13  7.77E-14  6.39E-13  6.79E-13  6.80E-13  6.55E-13  8.58E-13  8.95E-13
   4.25E-13  3.50E-13  4.20E-13  6.94E-13  4.66E-13  5.89E-13  2.18E-13  1.37E-13
   4.74E-13  5.75E-13  3.61E-13  9.46E-13  4.36E-13  6.41E-07
   0.1444  0.1444  0.1444    1  2.14473E-05 kpt; spin; max resid(k); each band:
   4.47E-13  4.24E-13  6.43E-13  8.23E-13  8.22E-13  4.49E-13  9.06E-13  4.41E-13
   2.48E-13  9.52E-14  6.10E-13  7.65E-13  9.44E-13  8.07E-13  5.20E-13  2.20E-13
   5.29E-13  5.08E-13  5.79E-13  5.97E-13  2.79E-13  5.89E-13  1.93E-13  6.35E-13
   8.20E-13  4.23E-13  2.85E-13  8.81E-13  3.45E-13  2.14E-05
   0.1389  0.1389  0.1389    1  3.82180E-07 kpt; spin; max resid(k); each band:
   3.53E-13  7.45E-13  2.25E-13  4.80E-13  4.85E-13  4.40E-13  1.94E-13  8.10E-13
   2.03E-13  3.55E-13  2.18E-13  5.13E-13  6.63E-13  3.74E-13  5.29E-13  8.03E-13
   1.97E-13  5.34E-13  2.82E-13  5.36E-13  3.09E-13  4.64E-13  2.26E-13  9.45E-13
   3.74E-13  7.11E-13  7.43E-13  4.51E-13  4.66E-13  3.82E-07
   0.1333  0.1333  0.1333    1  1.59223E-06 kpt; spin; max resid(k); each band:
   3.64E-13  8.14E-13  8.67E-13  5.83E-13  4.50E-13  4.48E-13  1.81E-13  7.50E-13
   6.62E-13  8.03E-13  2.88E-13  4.89E-13  5.25E-13  3.37E-13  6.40E-13  2.88E-13
   1.99E-13  3.20E-13  2.80E-13  5.84E-13  5.30E-13  5.45E-13  2.34E-13  9.29E-13
   3.98E-13  5.63E-13  9.52E-13  3.48E-13  3.15E-13  1.59E-06
   0.1278  0.1278  0.1278    1  2.49913E-05 kpt; spin; max resid(k); each band:
   6.40E-13  2.05E-13  7.12E-13  2.52E-13  3.65E-13  8.38E-13  2.41E-13  3.00E-13
   6.30E-13  2.41E-13  5.67E-13  3.47E-13  6.75E-13  7.41E-13  3.12E-13  1.78E-13
   2.57E-13  2.11E-13  9.78E-13  5.88E-13  9.48E-13  8.43E-13  5.68E-13  7.17E-13
   6.46E-13  4.92E-13  9.88E-13  6.13E-13  6.04E-13  2.50E-05
   0.1222  0.1222  0.1222    1  8.58088E-06 kpt; spin; max resid(k); each band:
   6.17E-13  2.24E-13  7.40E-13  9.72E-13  3.57E-13  7.60E-13  3.41E-13  9.40E-13
   4.23E-13  1.89E-13  5.82E-13  3.75E-13  7.77E-13  6.55E-13  9.12E-13  9.42E-13
   3.13E-13  3.35E-13  4.87E-13  3.53E-13  8.28E-13  5.76E-13  6.69E-13  5.77E-13
   3.63E-13  3.24E-13  6.84E-13  9.15E-13  5.07E-13  8.58E-06
   0.1167  0.1167  0.1167    1  2.34925E-06 kpt; spin; max resid(k); each band:
   6.35E-13  2.25E-13  8.60E-13  7.43E-13  4.00E-13  6.73E-13  4.28E-13  8.54E-13
   2.60E-13  2.25E-13  6.18E-13  4.38E-13  2.29E-13  6.42E-13  9.84E-13  9.43E-13
   3.12E-13  6.54E-13  4.74E-13  3.15E-13  6.91E-13  5.66E-13  5.21E-13  4.34E-13
   3.08E-13  6.51E-13  9.16E-13  3.06E-13  4.02E-13  2.35E-06
   0.1111  0.1111  0.1111    1  5.00919E-07 kpt; spin; max resid(k); each band:
   7.27E-13  2.28E-13  8.37E-13  4.99E-13  4.91E-13  4.56E-13  3.78E-13  7.41E-13
   1.43E-13  1.57E-13  5.74E-13  4.31E-13  2.31E-13  7.32E-13  5.28E-13  1.96E-13
   5.86E-13  2.65E-13  5.37E-13  3.62E-13  2.65E-13  2.86E-13  5.14E-13  3.91E-13
   3.63E-13  5.86E-13  7.29E-13  6.60E-13  8.60E-13  5.01E-07
   0.1056  0.1056  0.1056    1  1.08056E-08 kpt; spin; max resid(k); each band:
   4.90E-13  2.93E-13  4.69E-13  9.54E-13  3.79E-13  9.46E-13  3.17E-13  3.70E-13
   6.94E-13  6.77E-13  2.94E-13  7.48E-13  8.05E-13  7.66E-13  4.23E-13  5.14E-13
   3.45E-13  2.35E-13  2.63E-13  3.10E-13  7.31E-13  5.83E-13  8.91E-13  2.26E-13
   2.47E-13  1.10E-13  3.73E-13  2.24E-13  6.86E-13  1.08E-08
   0.1000  0.1000  0.1000    1  8.37653E-08 kpt; spin; max resid(k); each band:
   5.89E-13  2.68E-13  3.68E-13  7.18E-13  2.31E-13  5.28E-13  3.51E-13  4.15E-13
   3.10E-13  2.56E-13  5.73E-13  4.76E-13  2.92E-13  5.45E-13  3.88E-13  6.39E-13
   8.38E-13  7.95E-13  8.66E-13  5.80E-13  3.34E-13  8.15E-13  5.35E-13  3.70E-13
   8.71E-13  4.59E-13  6.55E-13  3.30E-13  8.38E-08  6.68E-13
   0.0944  0.0944  0.0944    1  2.37314E-06 kpt; spin; max resid(k); each band:
   4.31E-13  9.09E-13  5.66E-13  2.50E-13  2.49E-13  3.33E-13  3.52E-13  3.55E-13
   4.93E-13  6.24E-13  9.38E-13  8.11E-13  4.22E-13  9.19E-13  4.30E-13  3.18E-13
   4.48E-13  6.11E-13  5.13E-13  7.89E-13  4.77E-13  4.58E-13  8.05E-13  6.53E-13
   3.00E-13  7.08E-13  8.16E-13  7.72E-13  2.37E-06  9.40E-13
   0.0889  0.0889  0.0889    1  9.72221E-07 kpt; spin; max resid(k); each band:
   3.80E-13  8.96E-13  5.07E-13  9.32E-13  2.58E-13  8.00E-13  2.31E-13  3.58E-13
   3.68E-13  4.53E-13  4.59E-13  7.06E-13  4.25E-13  8.78E-13  4.72E-13  3.91E-13
   5.14E-13  3.03E-13  6.08E-13  1.80E-13  9.52E-13  2.19E-13  7.05E-13  8.31E-13
   5.03E-13  3.64E-13  8.39E-13  3.96E-13  9.72E-07  9.85E-13
   0.0833  0.0833  0.0833    1  1.65935E-06 kpt; spin; max resid(k); each band:
   3.74E-13  8.35E-13  5.59E-13  6.59E-13  2.42E-13  5.96E-13  2.44E-13  3.97E-13
   9.47E-13  3.39E-13  3.43E-13  6.76E-13  7.81E-13  8.71E-13  6.09E-13  4.48E-13
   5.10E-13  2.85E-13  8.33E-13  2.03E-13  3.74E-13  2.75E-13  8.13E-13  6.92E-13
   2.74E-13  1.99E-13  5.53E-13  6.22E-13  1.66E-06  9.69E-13
   0.0778  0.0778  0.0778    1  2.37689E-06 kpt; spin; max resid(k); each band:
   3.84E-13  8.51E-13  5.85E-13  5.67E-13  2.20E-13  4.46E-13  2.64E-13  4.04E-13
   2.62E-13  3.31E-13  2.72E-13  7.01E-13  2.89E-13  8.92E-13  8.24E-13  4.76E-13
   4.08E-13  3.69E-13  7.80E-13  7.45E-13  3.77E-13  2.61E-13  8.46E-13  7.07E-13
   9.48E-13  4.12E-13  5.18E-13  6.39E-13  2.38E-06  8.24E-13
   0.0722  0.0722  0.0722    1  4.16013E-06 kpt; spin; max resid(k); each band:
   3.12E-13  5.47E-13  3.10E-13  9.17E-13  5.43E-13  3.53E-13  2.78E-13  9.48E-13
   6.86E-13  2.56E-13  9.23E-13  1.85E-13  8.02E-13  8.43E-13  2.57E-13  7.78E-13
   3.22E-13  2.08E-13  4.05E-13  2.59E-13  7.04E-13  4.06E-13  6.16E-13  4.92E-13
   6.10E-13  3.60E-13  6.97E-13  4.20E-13  4.16E-06  6.46E-13
   0.0667  0.0667  0.0667    1  1.33344E-06 kpt; spin; max resid(k); each band:
   5.52E-13  3.57E-13  8.45E-13  3.78E-13  7.08E-13  5.73E-13  4.80E-13  6.07E-13
   8.54E-13  3.77E-13  3.55E-13  8.17E-13  7.54E-13  3.80E-13  3.91E-13  3.20E-13
   6.35E-13  3.90E-13  2.29E-13  4.55E-13  2.81E-13  1.81E-13  9.16E-13  3.52E-13
   5.99E-13  2.82E-13  6.55E-13  9.32E-13  1.33E-06  6.15E-13
   0.0611  0.0611  0.0611    1  2.89127E-07 kpt; spin; max resid(k); each band:
   2.39E-13  5.35E-13  4.20E-13  3.06E-13  6.85E-13  8.94E-13  2.84E-13  2.16E-13
   7.37E-13  3.58E-13  3.03E-13  4.08E-13  2.13E-13  4.69E-13  6.54E-13  4.75E-13
   7.80E-13  6.43E-13  2.54E-13  5.60E-13  5.21E-13  4.98E-13  6.92E-13  2.10E-13
   2.73E-13  5.19E-13  8.28E-13  3.66E-13  2.89E-07  9.79E-13
   0.0556  0.0556  0.0556    1  2.84130E-07 kpt; spin; max resid(k); each band:
   2.17E-13  5.94E-13  6.03E-13  4.12E-13  8.68E-13  1.97E-13  2.84E-13  1.94E-13
   2.38E-13  2.45E-13  3.03E-13  9.91E-13  1.92E-13  4.19E-13  6.85E-13  3.11E-13
   2.52E-13  6.45E-13  2.27E-13  5.40E-13  8.80E-13  3.81E-13  7.83E-13  7.49E-13
   4.27E-13  4.25E-13  7.63E-13  7.15E-13  2.84E-07  4.54E-13
   0.0500  0.0500  0.0500    1  2.89317E-07 kpt; spin; max resid(k); each band:
   2.01E-13  6.73E-13  8.53E-13  4.81E-13  3.87E-13  1.97E-13  2.72E-13  1.59E-13
   2.52E-13  2.47E-13  2.80E-13  7.10E-13  1.90E-13  3.35E-13  7.78E-13  2.80E-13
   2.50E-13  6.02E-13  2.14E-13  4.89E-13  2.17E-13  3.38E-13  7.97E-13  6.86E-13
   6.16E-13  2.83E-13  6.46E-13  4.96E-13  2.89E-07  5.63E-13
   0.0444  0.0444  0.0444    1  1.94057E-06 kpt; spin; max resid(k); each band:
   3.72E-13  5.82E-13  7.20E-13  5.45E-13  8.58E-13  2.92E-13  3.89E-13  7.64E-13
   2.28E-13  3.98E-13  1.96E-13  3.36E-13  2.64E-13  4.49E-13  8.36E-13  4.89E-13
   2.98E-13  6.54E-13  5.91E-13  8.98E-13  6.90E-13  3.52E-13  3.42E-13  4.83E-13
   7.44E-13  4.75E-13  5.51E-13  8.62E-13  1.94E-06  6.81E-13
   0.0389  0.0389  0.0389    1  5.71325E-08 kpt; spin; max resid(k); each band:
   6.75E-13  2.80E-13  5.07E-13  3.09E-13  3.96E-13  1.91E-13  7.85E-13  4.41E-13
   5.58E-13  5.83E-13  1.78E-13  6.38E-13  3.20E-13  2.84E-13  9.03E-13  6.06E-13
   3.84E-13  3.29E-13  7.15E-13  4.26E-13  2.33E-13  4.19E-13  6.82E-13  2.69E-13
   8.85E-13  4.88E-13  5.60E-13  5.25E-13  5.71E-08  6.76E-13
   0.0333  0.0333  0.0333    1  7.23569E-08 kpt; spin; max resid(k); each band:
   5.84E-13  6.08E-13  3.92E-13  1.75E-13  5.60E-13  4.70E-13  4.11E-13  8.16E-13
   5.40E-13  7.45E-13  8.59E-13  7.64E-13  5.62E-13  3.29E-13  3.61E-13  1.96E-13
   5.69E-13  9.81E-13  5.82E-13  9.19E-13  4.38E-13  5.11E-13  4.78E-13  9.40E-13
   3.83E-13  6.52E-13  7.49E-13  6.86E-13  7.24E-08  9.47E-13
   0.0278  0.0278  0.0278    1  9.98780E-09 kpt; spin; max resid(k); each band:
   7.99E-13  2.76E-13  8.14E-13  4.72E-13  7.59E-13  3.64E-13  5.40E-13  9.21E-13
   9.18E-13  1.30E-13  5.71E-13  1.89E-13  3.21E-13  6.92E-13  2.04E-13  4.71E-13
   6.41E-13  4.40E-13  5.69E-13  1.96E-13  5.26E-13  3.52E-13  7.18E-13  3.92E-13
   5.30E-13  6.69E-13  4.02E-13  5.95E-13  9.99E-09  4.53E-13
   0.0222  0.0222  0.0222    1  2.14855E-08 kpt; spin; max resid(k); each band:
   8.47E-13  2.15E-13  5.13E-13  3.10E-13  2.32E-13  3.09E-13  4.62E-13  3.91E-13
   8.07E-14  2.01E-13  4.78E-13  6.19E-13  8.11E-13  9.34E-13  5.28E-13  2.84E-13
   4.51E-13  5.09E-13  1.91E-13  2.17E-13  6.05E-13  5.19E-13  7.50E-13  6.42E-13
   6.80E-13  4.28E-13  7.64E-13  5.93E-13  2.15E-08  8.81E-13
   0.0167  0.0167  0.0167    1  8.04152E-08 kpt; spin; max resid(k); each band:
   3.47E-13  3.02E-13  7.77E-13  6.58E-13  6.60E-13  7.34E-13  5.72E-13  4.44E-13
   1.69E-13  3.09E-13  5.89E-13  2.32E-13  3.77E-13  7.16E-13  4.02E-13  4.98E-13
   5.60E-13  1.74E-13  2.70E-13  7.34E-13  5.88E-13  4.51E-13  6.11E-13  3.17E-13
   3.85E-13  1.70E-13  3.41E-13  5.10E-13  8.04E-08  2.22E-13
   0.0111  0.0111  0.0111    1  4.98600E-09 kpt; spin; max resid(k); each band:
   3.49E-13  3.37E-13  8.54E-13  6.53E-13  6.67E-13  6.38E-13  6.65E-13  5.37E-13
   1.67E-13  3.63E-13  5.80E-13  2.77E-13  3.96E-13  8.73E-13  4.30E-13  5.77E-13
   5.63E-13  1.91E-13  3.78E-13  8.27E-13  3.33E-13  6.56E-13  4.81E-13  2.82E-13
   3.57E-13  7.57E-13  3.79E-13  4.51E-13  4.99E-09  9.11E-13
   0.0056  0.0056  0.0056    1  1.71097E-10 kpt; spin; max resid(k); each band:
   3.61E-13  5.57E-13  9.50E-13  6.78E-13  7.19E-13  6.67E-13  7.39E-13  6.30E-13
   1.86E-13  3.93E-13  4.84E-13  2.89E-13  3.22E-13  8.75E-13  4.36E-13  8.48E-13
   6.27E-13  7.49E-13  4.11E-13  7.31E-13  3.97E-13  5.59E-13  5.06E-13  2.53E-13
   3.60E-13  7.32E-13  3.66E-13  4.74E-13  1.71E-10  1.71E-13
   0.0000  0.0000  0.0000    1  9.32187E-13 kpt; spin; max resid(k); each band:
   3.84E-13  5.38E-13  3.04E-13  3.57E-13  8.55E-13  6.80E-13  2.28E-13  3.39E-13
   3.70E-13  1.44E-13  4.62E-13  6.02E-13  5.85E-13  8.94E-13  6.13E-13  1.93E-13
   5.48E-13  7.73E-13  2.20E-13  9.08E-13  2.22E-13  4.33E-13  7.96E-13  5.06E-13
   7.27E-13  8.97E-13  3.84E-13  2.65E-13  3.67E-13  9.32E-13
   0.0100  0.0000  0.0000    1  2.83713E-09 kpt; spin; max resid(k); each band:
   3.85E-13  5.05E-13  4.03E-13  6.04E-13  8.42E-13  7.85E-13  6.29E-13  5.80E-13
   4.09E-13  3.60E-13  3.42E-13  6.56E-13  6.34E-13  6.55E-13  4.52E-13  6.11E-13
   3.31E-13  4.63E-13  7.63E-13  3.53E-13  2.25E-13  7.06E-13  6.84E-13  5.43E-13
   5.72E-13  2.19E-13  9.03E-13  8.92E-13  2.84E-09  2.42E-13
   0.0200  0.0000  0.0000    1  2.73701E-07 kpt; spin; max resid(k); each band:
   3.40E-13  4.90E-13  4.20E-13  1.29E-13  8.64E-13  9.23E-13  5.06E-13  4.31E-13
   4.58E-13  3.92E-13  3.14E-13  4.81E-13  3.95E-13  4.19E-13  1.77E-13  5.47E-13
   7.72E-13  4.42E-13  8.22E-13  2.34E-13  7.56E-13  4.77E-13  4.29E-13  6.71E-13
   4.41E-13  6.57E-13  6.23E-13  5.51E-13  2.74E-07  2.88E-13
   0.0300  0.0000  0.0000    1  9.00196E-07 kpt; spin; max resid(k); each band:
   3.05E-13  4.68E-13  5.71E-13  5.11E-13  5.82E-13  2.53E-13  2.12E-13  2.88E-13
   3.32E-13  2.79E-13  7.57E-13  2.17E-13  5.18E-13  2.72E-13  2.02E-13  2.19E-13
   1.95E-13  1.83E-13  4.09E-13  3.00E-13  2.78E-13  2.45E-13  7.81E-13  5.24E-13
   6.61E-13  8.38E-13  2.52E-13  6.10E-13  9.00E-07  8.50E-13
   0.0400  0.0000  0.0000    1  3.57971E-06 kpt; spin; max resid(k); each band:
   8.59E-13  3.93E-13  7.79E-13  4.02E-13  2.05E-13  7.93E-13  3.48E-13  3.27E-13
   3.88E-13  6.94E-13  3.66E-13  4.23E-13  4.70E-13  3.59E-13  3.33E-13  4.21E-13
   9.79E-13  5.15E-13  3.33E-13  6.98E-13  6.78E-13  8.52E-13  2.85E-13  8.39E-13
   3.52E-13  5.16E-13  6.74E-13  7.74E-13  3.58E-06  2.02E-13
   0.0500  0.0000  0.0000    1  4.65264E-06 kpt; spin; max resid(k); each band:
   4.96E-13  4.79E-13  3.30E-13  7.82E-13  8.56E-13  5.10E-13  2.54E-13  3.20E-13
   1.21E-13  6.07E-13  4.43E-13  8.34E-13  2.89E-13  3.76E-13  7.91E-13  2.93E-13
   6.20E-13  6.43E-13  7.59E-13  1.54E-13  9.40E-13  5.68E-13  4.09E-13  4.81E-13
   5.72E-13  3.66E-13  2.66E-13  5.30E-13  4.65E-06  2.49E-13
   0.0600  0.0000  0.0000    1  5.34062E-07 kpt; spin; max resid(k); each band:
   9.94E-13  5.36E-13  3.78E-13  8.84E-13  8.73E-13  7.13E-13  3.92E-13  7.95E-13
   2.65E-13  4.06E-13  7.46E-13  1.83E-13  6.28E-13  4.78E-13  5.52E-13  4.98E-13
   2.53E-13  4.03E-13  5.80E-13  8.50E-13  6.63E-13  5.09E-13  6.00E-13  3.33E-13
   4.71E-13  5.71E-13  7.23E-13  6.81E-13  5.34E-07  3.17E-13
   0.0700  0.0000  0.0000    1  1.10457E-06 kpt; spin; max resid(k); each band:
   9.55E-13  6.09E-13  4.15E-13  9.41E-13  8.75E-13  7.39E-13  3.76E-13  7.61E-13
   2.65E-13  4.11E-13  7.29E-13  9.82E-13  4.92E-13  6.01E-13  6.68E-13  4.85E-13
   2.64E-13  3.44E-13  5.81E-13  7.97E-13  7.03E-13  6.35E-13  6.78E-13  9.26E-13
   5.81E-13  4.19E-13  7.10E-13  8.81E-13  1.10E-06  3.65E-13
   0.0800  0.0000  0.0000    1  2.59060E-06 kpt; spin; max resid(k); each band:
   9.90E-13  6.39E-13  4.15E-13  8.91E-13  8.95E-13  7.44E-13  4.74E-13  7.46E-13
   2.74E-13  4.29E-13  6.16E-13  2.15E-13  6.62E-13  5.36E-13  8.14E-13  3.94E-13
   6.79E-13  8.02E-13  2.41E-13  5.15E-13  3.37E-13  5.99E-13  6.97E-13  4.92E-13
   5.86E-13  2.86E-13  7.48E-13  6.00E-13  2.59E-06  3.94E-13
   0.0900  0.0000  0.0000    1  5.58379E-06 kpt; spin; max resid(k); each band:
   2.05E-13  6.70E-13  4.53E-13  8.74E-13  8.86E-13  7.59E-13  4.66E-13  6.11E-13
   2.47E-13  3.85E-13  6.91E-13  1.77E-13  6.27E-13  5.61E-13  4.74E-13  3.13E-13
   7.50E-13  9.71E-13  4.39E-13  7.03E-13  3.62E-13  4.43E-13  3.72E-13  4.44E-13
   9.44E-13  5.24E-13  8.58E-13  8.34E-13  5.58E-06  4.30E-13
   0.1000  0.0000  0.0000    1  5.26804E-06 kpt; spin; max resid(k); each band:
   9.92E-13  2.97E-13  2.80E-13  9.40E-13  7.91E-13  6.19E-13  2.67E-13  7.08E-13
   1.56E-13  6.98E-13  6.25E-13  4.12E-13  3.69E-13  8.22E-13  1.01E-13  2.48E-13
   7.12E-13  3.63E-13  6.04E-13  2.23E-13  8.85E-13  6.74E-13  2.40E-13  5.85E-13
   7.21E-13  5.74E-13  2.22E-13  3.97E-13  5.27E-06  3.37E-13
   0.1100  0.0000  0.0000    1  1.28830E-07 kpt; spin; max resid(k); each band:
   3.22E-13  4.40E-13  7.68E-13  3.78E-13  2.92E-13  4.31E-13  4.44E-13  8.79E-13
   2.50E-13  1.05E-13  9.77E-13  8.95E-13  4.11E-13  3.99E-13  1.88E-13  7.70E-13
   6.22E-13  2.83E-13  3.11E-13  4.39E-13  4.93E-13  3.11E-13  3.01E-13  4.32E-13
   9.90E-13  2.16E-13  8.73E-13  2.81E-13  1.29E-07  7.03E-13
   0.1200  0.0000  0.0000    1  1.81498E-07 kpt; spin; max resid(k); each band:
   6.76E-13  6.74E-13  5.75E-13  7.84E-13  4.60E-13  5.57E-13  2.80E-13  3.15E-13
   1.58E-13  3.83E-13  4.60E-13  5.27E-13  3.89E-13  3.73E-13  2.32E-13  2.50E-13
   2.98E-13  3.89E-13  3.22E-13  3.84E-13  5.25E-13  4.01E-13  2.50E-13  8.21E-13
   2.71E-13  3.81E-13  7.67E-13  2.92E-13  1.81E-07  5.05E-13
   0.1300  0.0000  0.0000    1  2.25612E-06 kpt; spin; max resid(k); each band:
   7.05E-13  7.21E-13  4.32E-13  4.78E-13  4.55E-13  5.01E-13  2.50E-13  2.57E-13
   2.26E-13  3.29E-13  3.72E-13  6.64E-13  4.05E-13  8.14E-13  2.56E-13  2.34E-13
   2.87E-13  5.32E-13  3.32E-13  4.53E-13  5.01E-13  3.22E-13  7.58E-13  5.92E-13
   3.29E-13  4.91E-13  8.16E-13  9.73E-13  2.26E-06  3.50E-13
   0.1400  0.0000  0.0000    1  4.83282E-05 kpt; spin; max resid(k); each band:
   3.36E-13  2.57E-13  5.97E-13  2.41E-13  6.34E-13  6.23E-13  8.01E-13  2.82E-13
   2.18E-13  3.49E-13  3.64E-13  4.46E-13  3.64E-13  7.89E-13  4.30E-13  1.28E-13
   9.06E-13  5.37E-13  3.16E-13  7.77E-13  7.95E-13  7.12E-13  2.90E-13  6.03E-13
   4.13E-13  2.31E-13  5.26E-13  6.10E-13  4.83E-05  3.18E-13
   0.1500  0.0000  0.0000    1  1.54765E-05 kpt; spin; max resid(k); each band:
   4.07E-13  2.32E-13  9.25E-13  3.05E-13  3.92E-13  7.48E-13  9.80E-13  2.78E-13
   2.00E-13  8.80E-13  2.40E-13  7.63E-13  6.31E-13  8.48E-13  4.45E-13  1.86E-13
   3.89E-13  3.68E-13  5.02E-13  6.10E-13  5.77E-13  3.54E-13  8.95E-13  2.57E-13
   3.19E-13  8.20E-13  4.25E-13  7.36E-13  1.55E-05  4.27E-13
   0.1600  0.0000  0.0000    1  5.12561E-07 kpt; spin; max resid(k); each band:
   4.92E-13  6.17E-13  9.59E-13  2.55E-13  7.90E-13  4.13E-13  3.37E-13  2.48E-13
   3.47E-13  3.58E-13  4.62E-13  6.77E-13  6.52E-13  5.04E-13  9.20E-13  5.01E-13
   3.49E-13  6.25E-13  9.88E-13  6.99E-13  6.72E-13  1.35E-13  3.35E-13  3.08E-13
   9.27E-13  5.38E-13  6.85E-13  1.58E-13  5.13E-07  6.17E-13
   0.1700  0.0000  0.0000    1  5.85273E-07 kpt; spin; max resid(k); each band:
   4.75E-13  6.04E-13  2.26E-13  2.65E-13  8.09E-13  3.91E-13  3.36E-13  2.71E-13
   3.54E-13  3.64E-13  4.96E-13  7.03E-13  6.43E-13  5.10E-13  8.56E-13  3.86E-13
   3.07E-13  6.18E-13  4.87E-13  6.25E-13  6.60E-13  5.66E-13  4.89E-13  3.42E-13
   8.89E-13  5.18E-13  8.37E-13  2.61E-13  5.85E-07  7.36E-13
   0.1800  0.0000  0.0000    1  2.31405E-07 kpt; spin; max resid(k); each band:
   5.27E-13  6.17E-13  5.04E-13  3.84E-13  6.84E-13  2.82E-13  6.28E-13  5.05E-13
   3.85E-13  6.39E-13  9.78E-13  4.85E-13  4.98E-13  1.97E-13  5.28E-13  3.86E-13
   2.87E-13  4.61E-13  8.57E-13  5.94E-13  2.01E-13  4.52E-13  4.08E-13  6.70E-13
   6.14E-13  7.00E-13  1.88E-13  9.44E-13  2.31E-07  4.61E-13
   0.1900  0.0000  0.0000    1  1.31330E-08 kpt; spin; max resid(k); each band:
   3.69E-13  2.71E-13  4.87E-13  2.10E-13  4.23E-13  5.43E-13  5.79E-13  8.82E-13
   3.23E-13  2.96E-13  4.08E-13  8.57E-13  6.24E-13  5.53E-13  5.39E-13  8.79E-13
   4.04E-13  4.06E-13  4.94E-13  2.09E-13  8.63E-13  3.42E-13  1.92E-13  8.23E-13
   5.69E-13  8.77E-13  8.67E-13  8.77E-13  1.31E-08  1.85E-13
   0.2000  0.0000  0.0000    1  7.11972E-10 kpt; spin; max resid(k); each band:
   2.85E-13  2.92E-13  4.63E-13  2.64E-13  4.41E-13  8.86E-13  4.84E-13  6.81E-13
   4.10E-13  1.73E-13  4.45E-13  2.14E-13  4.16E-13  2.43E-13  6.69E-13  4.28E-13
   4.34E-13  3.01E-13  4.99E-13  1.81E-13  5.11E-13  3.56E-13  1.89E-13  8.61E-13
   2.92E-13  3.92E-13  6.50E-13  3.69E-13  7.12E-10  2.39E-13
   0.2100  0.0000  0.0000    1  1.84652E-10 kpt; spin; max resid(k); each band:
   2.63E-13  2.72E-13  4.36E-13  2.30E-13  4.34E-13  9.05E-13  4.97E-13  5.94E-13
   3.72E-13  1.97E-13  4.24E-13  9.42E-13  7.78E-13  4.87E-13  5.39E-13  4.61E-13
   6.23E-13  2.44E-13  3.56E-13  2.32E-13  5.56E-13  3.81E-13  1.72E-13  8.68E-13
   3.26E-13  5.24E-13  8.11E-13  7.04E-13  1.85E-10  3.23E-13
   0.2200  0.0000  0.0000    1  1.70772E-08 kpt; spin; max resid(k); each band:
   8.72E-13  2.25E-13  1.94E-13  2.79E-13  7.88E-13  7.29E-13  6.18E-13  4.02E-13
   3.35E-13  7.92E-13  2.69E-13  9.65E-13  4.07E-13  1.79E-13  4.48E-13  3.55E-13
   8.51E-13  5.37E-13  7.55E-13  5.04E-13  1.93E-13  3.77E-13  2.68E-13  6.05E-13
   1.83E-13  9.69E-13  7.02E-13  9.10E-13  1.71E-08  9.24E-13
   0.2300  0.0000  0.0000    1  2.35094E-08 kpt; spin; max resid(k); each band:
   2.55E-13  3.21E-13  1.95E-13  2.52E-13  7.63E-13  5.45E-13  8.98E-13  4.08E-13
   9.26E-13  8.17E-13  2.75E-13  8.04E-13  4.30E-13  1.73E-13  3.39E-13  5.38E-13
   7.17E-13  4.26E-13  7.64E-13  2.81E-13  1.76E-13  5.03E-13  5.72E-13  5.99E-13
   2.73E-13  2.06E-13  7.47E-13  8.46E-13  2.35E-08  8.12E-13
   0.2400  0.0000  0.0000    1  2.11027E-10 kpt; spin; max resid(k); each band:
   2.92E-13  2.51E-13  5.33E-13  3.73E-13  2.64E-13  6.55E-13  6.37E-13  2.06E-13
   3.46E-13  6.56E-13  3.14E-13  1.96E-13  8.45E-13  6.11E-13  2.35E-13  7.09E-13
   5.22E-13  1.69E-13  2.74E-13  8.39E-13  5.50E-13  6.40E-13  3.23E-13  9.12E-13
   1.35E-13  9.81E-13  7.94E-13  2.89E-13  2.11E-10  5.84E-13
   0.2500  0.0000  0.0000    1  1.17924E-12 kpt; spin; max resid(k); each band:
   2.53E-13  3.19E-13  6.36E-13  2.87E-13  2.23E-13  6.26E-13  7.23E-13  2.59E-13
   3.79E-13  4.41E-13  3.55E-13  2.03E-13  6.09E-13  5.93E-13  8.60E-13  4.73E-13
   2.68E-13  7.02E-13  2.66E-13  5.94E-13  2.42E-13  7.73E-13  4.87E-13  5.32E-13
   2.46E-13  2.73E-13  9.55E-13  9.78E-13  1.18E-12  4.77E-13
   0.2600  0.0000  0.0000    1  9.78396E-13 kpt; spin; max resid(k); each band:
   9.78E-13  3.65E-13  7.38E-13  3.05E-13  1.88E-13  8.22E-13  6.13E-13  3.00E-13
   4.43E-13  4.17E-13  3.37E-13  1.77E-13  5.54E-13  5.35E-13  7.48E-13  4.98E-13
   4.08E-13  8.15E-13  2.75E-13  5.40E-13  2.02E-13  2.53E-13  3.33E-13  5.17E-13
   3.64E-13  2.58E-13  7.22E-13  7.18E-13  5.19E-13  8.91E-13
   0.2700  0.0000  0.0000    1  9.95153E-13 kpt; spin; max resid(k); each band:
   9.53E-13  4.93E-13  5.62E-13  2.01E-13  4.26E-13  6.04E-13  2.39E-13  5.03E-13
   4.39E-13  1.81E-13  3.84E-13  9.18E-13  4.06E-13  6.02E-13  2.87E-13  7.08E-13
   3.49E-13  2.90E-13  4.97E-13  3.07E-13  4.39E-13  4.82E-13  6.98E-13  7.22E-13
   7.84E-13  7.68E-13  1.53E-13  9.93E-13  9.95E-13  3.62E-13
   0.2800  0.0000  0.0000    1  9.71615E-13 kpt; spin; max resid(k); each band:
   8.93E-13  6.25E-13  5.41E-13  2.74E-13  3.37E-13  4.18E-13  9.39E-13  4.10E-13
   3.93E-13  2.21E-13  4.06E-13  8.72E-13  3.14E-13  5.35E-13  2.58E-13  6.15E-13
   4.06E-13  3.10E-13  8.11E-13  5.10E-13  4.19E-13  4.06E-13  5.80E-13  5.53E-13
   2.09E-13  2.07E-13  9.72E-13  9.08E-13  5.27E-13  7.61E-13
   0.2900  0.0000  0.0000    1  9.92862E-13 kpt; spin; max resid(k); each band:
   9.04E-13  6.66E-13  5.33E-13  5.01E-13  2.96E-13  3.21E-13  9.64E-13  2.74E-13
   3.58E-13  2.25E-13  4.40E-13  7.47E-13  2.14E-13  3.16E-13  3.44E-13  6.58E-13
   6.22E-13  2.50E-13  6.18E-13  8.42E-13  2.89E-13  5.78E-13  7.20E-13  3.97E-13
   2.74E-13  9.93E-13  7.85E-13  9.26E-13  4.15E-13  8.21E-13
   0.3000  0.0000  0.0000    1  9.31654E-13 kpt; spin; max resid(k); each band:
   1.69E-13  5.99E-13  5.12E-13  6.29E-13  2.69E-13  3.32E-13  7.29E-13  2.53E-13
   3.12E-13  2.13E-13  3.87E-13  3.12E-13  2.56E-13  6.08E-13  4.30E-13  6.28E-13
   9.32E-13  2.69E-13  8.92E-13  1.75E-13  2.19E-13  3.26E-13  1.70E-13  6.15E-13
   3.27E-13  3.44E-13  3.30E-13  2.39E-13  6.98E-13  3.81E-13
   0.3100  0.0000  0.0000    1  9.95980E-13 kpt; spin; max resid(k); each band:
   4.56E-13  8.29E-13  8.22E-13  3.90E-13  9.63E-13  2.82E-13  3.30E-13  2.58E-13
   5.58E-13  4.61E-13  4.51E-13  3.93E-13  2.60E-13  7.09E-13  9.96E-13  8.39E-13
   3.36E-13  9.57E-13  5.69E-13  4.84E-13  4.81E-13  3.41E-13  4.27E-13  3.48E-13
   7.69E-13  8.09E-13  3.46E-13  6.84E-13  5.88E-13  7.40E-13
   0.3200  0.0000  0.0000    1  1.28470E-11 kpt; spin; max resid(k); each band:
   4.40E-13  8.32E-13  8.12E-13  3.49E-13  9.63E-13  3.04E-13  3.15E-13  4.37E-13
   3.97E-13  4.69E-13  4.82E-13  4.02E-13  1.58E-13  3.11E-13  3.34E-13  1.66E-13
   8.95E-13  1.67E-13  6.82E-13  5.14E-13  3.82E-13  5.57E-13  7.09E-13  4.76E-13
   5.06E-13  3.70E-13  1.78E-13  5.55E-13  1.28E-11  2.38E-13
   0.3300  0.0000  0.0000    1  3.44644E-09 kpt; spin; max resid(k); each band:
   4.32E-13  8.26E-13  8.01E-13  3.14E-13  9.63E-13  3.41E-13  3.97E-13  4.44E-13
   3.10E-13  5.21E-13  5.06E-13  3.99E-13  6.77E-13  6.17E-13  3.86E-13  2.42E-13
   5.20E-13  2.05E-13  6.47E-13  6.16E-13  3.96E-13  6.99E-13  9.28E-13  3.93E-13
   7.71E-13  6.29E-13  3.12E-13  9.11E-13  3.45E-09  5.07E-13
   0.3400  0.0000  0.0000    1  3.96977E-09 kpt; spin; max resid(k); each band:
   2.92E-13  2.97E-13  4.75E-13  1.49E-13  6.31E-13  8.12E-13  3.31E-13  2.89E-13
   7.20E-13  1.39E-13  5.21E-13  9.95E-13  3.10E-13  9.58E-13  6.19E-13  8.64E-13
   5.19E-13  7.58E-13  8.18E-13  8.40E-13  9.35E-13  8.83E-13  3.71E-13  6.24E-13
   9.18E-13  6.50E-13  2.54E-13  4.73E-13  3.97E-09  9.05E-13
   0.3500  0.0000  0.0000    1  6.91386E-08 kpt; spin; max resid(k); each band:
   3.04E-13  3.34E-13  4.84E-13  1.55E-13  6.49E-13  9.72E-13  3.77E-13  3.11E-13
   7.26E-13  2.30E-13  4.80E-13  1.55E-13  9.43E-13  8.07E-13  7.81E-13  3.58E-13
   5.22E-13  8.88E-13  3.94E-13  6.14E-13  1.73E-13  2.63E-13  4.92E-13  8.39E-13
   7.33E-13  4.80E-13  3.42E-13  8.46E-13  6.91E-08  4.92E-13
   0.3600  0.0000  0.0000    1  8.92779E-07 kpt; spin; max resid(k); each band:
   2.71E-13  6.33E-13  4.10E-13  5.50E-13  8.07E-13  2.32E-13  3.22E-13  6.14E-13
   4.90E-13  2.75E-13  2.93E-13  2.77E-13  9.96E-13  7.22E-13  6.77E-13  2.76E-13
   6.33E-13  9.89E-13  4.74E-13  9.93E-13  6.23E-13  5.92E-13  1.63E-13  8.32E-13
   8.23E-13  6.49E-13  2.04E-13  6.42E-13  8.93E-07  2.48E-13
   0.3700  0.0000  0.0000    1  1.27991E-06 kpt; spin; max resid(k); each band:
   3.01E-13  6.76E-13  9.82E-13  5.79E-13  7.75E-13  2.40E-13  3.10E-13  5.73E-13
   5.16E-13  3.11E-13  3.08E-13  2.99E-13  8.78E-13  9.12E-13  2.22E-13  2.40E-13
   7.52E-13  2.43E-13  2.79E-13  8.86E-13  7.70E-13  6.73E-13  2.43E-13  8.93E-13
   8.13E-13  4.19E-13  8.89E-13  9.77E-13  1.28E-06  5.85E-13
   0.3800  0.0000  0.0000    1  6.41164E-06 kpt; spin; max resid(k); each band:
   6.42E-13  3.36E-13  6.91E-13  7.93E-13  4.76E-13  6.09E-13  5.57E-13  7.30E-13
   4.82E-13  8.95E-13  9.25E-13  6.22E-13  3.53E-13  8.78E-13  6.26E-13  4.48E-13
   3.05E-13  4.04E-13  3.22E-13  4.42E-13  2.80E-13  2.20E-13  3.43E-13  6.91E-13
   8.02E-13  9.48E-13  6.66E-13  6.80E-13  6.41E-06  3.95E-13
   0.3900  0.0000  0.0000    1  1.17590E-05 kpt; spin; max resid(k); each band:
   6.79E-13  3.32E-13  6.35E-13  8.08E-13  4.62E-13  6.12E-13  5.47E-13  7.76E-13
   4.36E-13  9.12E-13  9.53E-13  6.25E-13  4.77E-13  9.76E-13  5.15E-13  4.46E-13
   2.71E-13  3.91E-13  3.93E-13  5.52E-13  3.20E-13  2.28E-13  3.16E-13  7.05E-13
   6.98E-13  2.99E-13  7.13E-13  2.68E-13  1.18E-05  8.97E-13
   0.4000  0.0000  0.0000    1  3.46924E-06 kpt; spin; max resid(k); each band:
   7.20E-13  2.81E-13  5.48E-13  7.81E-13  4.43E-13  6.05E-13  5.40E-13  8.15E-13
   3.98E-13  9.17E-13  9.81E-13  6.86E-13  5.11E-13  7.09E-13  4.30E-13  4.43E-13
   2.49E-13  3.76E-13  3.62E-13  5.49E-13  3.62E-13  2.46E-13  2.80E-13  7.19E-13
   9.00E-13  4.39E-13  9.81E-13  4.67E-13  3.47E-06  4.93E-13
   0.4100  0.0000  0.0000    1  2.61955E-05 kpt; spin; max resid(k); each band:
   9.21E-13  2.61E-13  6.36E-13  2.97E-13  3.21E-13  4.00E-13  3.30E-13  5.59E-13
   6.52E-13  6.25E-13  4.85E-13  1.87E-13  3.76E-13  2.02E-13  3.96E-13  4.31E-13
   2.04E-13  5.64E-13  3.62E-13  5.91E-13  2.29E-13  3.05E-13  7.35E-13  8.27E-13
   3.20E-13  4.15E-13  9.73E-13  8.35E-13  3.18E-13  2.62E-05
   0.4200  0.0000  0.0000    1  3.86852E-05 kpt; spin; max resid(k); each band:
   3.78E-13  4.87E-13  2.14E-13  3.20E-13  2.83E-13  4.69E-13  3.17E-13  4.31E-13
   8.10E-13  6.73E-13  1.97E-13  3.66E-13  5.39E-13  7.79E-13  2.02E-13  1.78E-13
   2.42E-13  1.52E-13  4.48E-13  2.36E-13  4.97E-13  1.43E-13  6.42E-13  5.91E-13
   9.75E-13  3.97E-13  7.02E-13  3.03E-13  4.37E-13  3.87E-05
   0.4300  0.0000  0.0000    1  6.08738E-05 kpt; spin; max resid(k); each band:
   3.80E-13  5.63E-13  2.14E-13  2.94E-13  3.05E-13  3.87E-13  2.88E-13  3.50E-13
   4.18E-13  5.01E-13  2.14E-13  3.12E-13  4.68E-13  5.57E-13  8.63E-13  9.10E-13
   2.15E-13  8.98E-13  3.41E-13  1.78E-13  4.46E-13  9.57E-13  5.49E-13  7.87E-13
   9.00E-13  9.63E-13  2.92E-13  7.86E-13  5.15E-13  6.09E-05
   0.4400  0.0000  0.0000    1  5.01977E-05 kpt; spin; max resid(k); each band:
   3.77E-13  6.24E-13  2.25E-13  3.02E-13  3.22E-13  3.37E-13  3.24E-13  3.12E-13
   4.05E-13  5.61E-13  2.19E-13  2.96E-13  5.32E-13  4.53E-13  7.72E-13  8.48E-13
   1.96E-13  7.91E-13  2.83E-13  1.43E-13  3.56E-13  2.72E-13  5.48E-13  7.51E-13
   7.40E-13  3.51E-13  2.63E-13  6.66E-13  4.20E-13  5.02E-05
   0.4500  0.0000  0.0000    1  2.77395E-05 kpt; spin; max resid(k); each band:
   3.71E-13  6.95E-13  2.38E-13  3.11E-13  3.41E-13  3.28E-13  3.43E-13  2.79E-13
   5.46E-13  5.35E-13  2.16E-13  2.57E-13  4.18E-13  3.69E-13  7.65E-13  2.02E-13
   9.39E-13  6.76E-13  3.00E-13  7.10E-13  2.80E-13  2.47E-13  4.63E-13  7.06E-13
   5.53E-13  4.97E-13  1.99E-13  9.67E-13  9.47E-13  2.77E-05
   0.4600  0.0000  0.0000    1  1.38015E-05 kpt; spin; max resid(k); each band:
   3.62E-13  7.52E-13  2.45E-13  3.14E-13  3.67E-13  3.34E-13  3.45E-13  2.59E-13
   6.52E-13  3.65E-13  9.63E-13  2.11E-13  2.83E-13  2.98E-13  7.71E-13  1.93E-13
   8.25E-13  5.78E-13  5.46E-13  6.02E-13  2.19E-13  2.79E-13  3.47E-13  6.84E-13
   3.76E-13  6.49E-13  7.87E-13  4.30E-13  6.68E-13  1.38E-05
   0.4700  0.0000  0.0000    1  2.60918E-05 kpt; spin; max resid(k); each band:
   3.56E-13  7.79E-13  5.34E-13  3.87E-13  3.93E-13  3.71E-13  3.47E-13  2.49E-13
   5.58E-13  3.82E-13  8.44E-13  1.66E-13  9.45E-13  2.27E-13  7.57E-13  1.93E-13
   7.70E-13  5.18E-13  5.71E-13  4.76E-13  9.21E-13  2.47E-13  8.25E-13  6.24E-13
   7.79E-13  4.91E-13  8.98E-13  5.85E-13  7.69E-12  2.61E-05
   0.4800  0.0000  0.0000    1  1.63002E-05 kpt; spin; max resid(k); each band:
   3.41E-13  3.82E-13  2.24E-13  5.64E-13  3.94E-13  4.47E-13  4.00E-13  6.05E-13
   6.81E-13  3.92E-13  5.93E-13  5.87E-13  8.58E-13  6.39E-13  2.73E-13  4.90E-13
   3.12E-13  6.99E-13  8.41E-13  4.68E-13  6.09E-13  2.89E-13  3.42E-13  4.59E-13
   2.74E-13  9.66E-13  6.68E-13  9.35E-13  3.40E-11  1.63E-05
   0.4900  0.0000  0.0000    1  8.70437E-06 kpt; spin; max resid(k); each band:
   4.08E-13  4.80E-13  2.24E-13  8.60E-13  3.97E-13  4.07E-13  4.26E-13  5.37E-13
   5.93E-13  4.33E-13  4.92E-13  4.59E-13  9.24E-13  6.06E-13  8.88E-13  4.28E-13
   4.74E-13  6.01E-13  7.34E-13  6.39E-13  5.19E-13  2.55E-13  4.20E-13  2.28E-13
   8.92E-13  3.82E-13  4.96E-13  9.60E-13  3.26E-11  8.70E-06
   0.5000  0.0000  0.0000    1  4.18761E-06 kpt; spin; max resid(k); each band:
   4.78E-13  5.40E-13  2.49E-13  8.39E-13  4.07E-13  4.07E-13  4.82E-13  5.42E-13
   4.44E-13  4.36E-13  4.71E-13  3.76E-13  8.20E-13  6.38E-13  8.73E-13  4.83E-13
   6.12E-13  8.35E-13  4.27E-13  7.77E-13  9.05E-13  5.08E-13  7.33E-13  5.64E-13
   6.19E-13  6.78E-13  4.01E-13  4.85E-13  6.07E-12  4.19E-06
   0.5000  0.0100  0.0000    1  5.74054E-06 kpt; spin; max resid(k); each band:
   3.91E-13  6.03E-13  8.44E-13  2.37E-13  3.95E-13  3.53E-13  4.68E-13  4.69E-13
   5.67E-13  3.31E-13  4.83E-13  3.88E-13  5.70E-13  8.77E-13  8.42E-13  6.07E-13
   3.57E-13  8.24E-13  8.52E-13  3.02E-13  4.88E-13  3.26E-13  6.09E-13  5.85E-13
   7.25E-13  6.67E-13  3.77E-13  8.30E-13  5.74E-06  8.10E-07
   0.5000  0.0200  0.0000    1  3.39948E-06 kpt; spin; max resid(k); each band:
   2.64E-13  9.96E-13  5.96E-13  6.82E-13  6.12E-13  6.12E-13  8.81E-13  3.89E-13
   4.00E-13  2.94E-13  4.91E-13  3.34E-13  4.76E-13  9.71E-13  5.41E-13  7.93E-13
   3.75E-13  3.68E-13  8.08E-13  5.63E-13  1.51E-13  2.34E-13  8.27E-13  2.93E-13
   9.83E-13  6.87E-13  7.14E-13  9.07E-13  2.90E-07  3.40E-06
   0.5000  0.0300  0.0000    1  2.26580E-06 kpt; spin; max resid(k); each band:
   2.71E-13  3.53E-13  6.22E-13  4.18E-13  5.91E-13  8.46E-13  5.72E-13  3.20E-13
   8.38E-13  4.90E-13  2.54E-13  2.23E-13  6.60E-13  8.13E-13  8.58E-13  6.46E-13
   5.71E-13  4.98E-13  1.54E-13  2.72E-13  5.07E-13  4.08E-13  3.09E-13  8.18E-13
   7.30E-13  7.59E-13  8.61E-13  7.15E-13  2.39E-08  2.27E-06
   0.5000  0.0400  0.0000    1  1.78885E-06 kpt; spin; max resid(k); each band:
   6.84E-13  3.12E-13  4.70E-13  5.20E-13  9.98E-13  3.83E-13  8.70E-13  7.09E-13
   7.04E-13  6.16E-13  5.69E-13  2.09E-13  8.38E-13  3.87E-13  6.51E-13  2.34E-13
   5.62E-13  8.71E-13  9.99E-13  4.23E-13  2.10E-13  2.22E-13  8.97E-13  1.90E-13
   6.36E-13  2.46E-13  4.21E-13  8.29E-13  1.79E-07  1.79E-06
   0.5000  0.0500  0.0000    1  1.47788E-06 kpt; spin; max resid(k); each band:
   4.02E-13  2.59E-13  6.70E-13  4.13E-13  9.21E-13  5.62E-13  9.79E-13  2.26E-13
   5.49E-13  5.96E-13  4.71E-13  5.37E-13  8.09E-13  5.35E-13  5.05E-13  5.11E-13
   3.91E-13  6.04E-13  8.11E-13  3.83E-13  6.83E-13  3.21E-13  5.20E-13  8.37E-13
   5.73E-13  1.57E-13  3.82E-13  7.60E-13  1.11E-07  1.48E-06
   0.5000  0.0600  0.0000    1  1.05451E-06 kpt; spin; max resid(k); each band:
   3.69E-13  2.81E-13  6.51E-13  3.85E-13  8.13E-13  4.94E-13  9.42E-13  9.90E-13
   5.50E-13  7.25E-13  5.18E-13  5.36E-13  8.43E-13  4.85E-13  5.05E-13  4.41E-13
   3.79E-13  5.31E-13  5.59E-13  2.72E-13  8.60E-13  9.81E-13  5.93E-13  8.37E-13
   4.76E-13  8.78E-13  4.34E-13  3.33E-13  6.29E-08  1.05E-06
   0.5000  0.0700  0.0000    1  7.07084E-07 kpt; spin; max resid(k); each band:
   3.41E-13  3.35E-13  6.47E-13  3.32E-13  6.78E-13  4.27E-13  9.11E-13  8.56E-13
   6.06E-13  7.68E-13  5.81E-13  5.55E-13  6.93E-13  4.29E-13  4.90E-13  4.22E-13
   2.97E-13  3.92E-13  4.43E-13  2.06E-13  1.80E-13  6.49E-13  4.78E-13  9.49E-13
   4.65E-13  7.91E-13  4.89E-13  4.73E-13  4.00E-08  7.07E-07
   0.5000  0.0800  0.0000    1  6.93580E-07 kpt; spin; max resid(k); each band:
   7.50E-13  2.83E-13  5.69E-13  7.58E-13  7.08E-13  8.53E-13  4.78E-13  2.74E-13
   8.89E-13  7.98E-13  2.59E-13  1.94E-13  5.73E-13  8.51E-13  3.50E-13  6.44E-13
   3.66E-13  8.00E-13  6.47E-13  5.28E-13  6.34E-13  1.93E-13  4.37E-13  2.73E-13
   7.64E-13  4.47E-13  7.17E-13  4.55E-13  1.21E-08  6.94E-07
   0.5000  0.0900  0.0000    1  1.39524E-06 kpt; spin; max resid(k); each band:
   4.61E-13  6.18E-13  7.79E-13  2.21E-13  8.95E-13  7.82E-13  3.62E-13  6.28E-13
   7.50E-13  4.59E-13  6.40E-13  6.50E-13  2.87E-13  2.51E-13  2.54E-13  5.66E-13
   1.37E-13  4.87E-13  5.90E-13  4.05E-13  6.70E-13  7.15E-13  9.45E-13  3.32E-13
   8.54E-13  8.45E-13  8.05E-13  5.14E-13  3.78E-08  1.40E-06
   0.5000  0.1000  0.0000    1  7.61629E-08 kpt; spin; max resid(k); each band:
   3.15E-13  7.52E-13  2.81E-13  7.44E-13  9.19E-13  2.88E-13  4.26E-13  2.77E-13
   6.89E-13  7.23E-13  6.70E-13  3.77E-13  9.21E-13  3.44E-13  4.18E-13  2.95E-13
   8.46E-13  2.76E-13  3.05E-13  5.84E-13  6.47E-13  5.93E-13  4.52E-13  2.97E-13
   6.20E-13  8.19E-13  7.15E-13  6.53E-13  1.01E-08  7.62E-08
   0.5000  0.1100  0.0000    1  7.31592E-07 kpt; spin; max resid(k); each band:
   6.74E-13  9.71E-13  4.75E-13  9.98E-13  3.08E-13  5.26E-13  3.68E-13  7.96E-13
   4.62E-13  2.37E-13  3.17E-13  2.34E-13  2.41E-13  6.59E-13  9.87E-13  7.02E-13
   9.38E-13  8.54E-13  3.03E-13  7.60E-13  9.59E-13  3.07E-13  6.12E-13  7.27E-13
   2.50E-13  8.64E-13  7.17E-13  2.88E-13  2.63E-08  7.32E-07
   0.5000  0.1200  0.0000    1  8.40058E-09 kpt; spin; max resid(k); each band:
   2.72E-13  3.68E-13  2.06E-13  7.49E-13  8.16E-13  3.28E-13  6.08E-13  2.66E-13
   3.92E-13  8.26E-13  4.46E-13  9.32E-13  2.64E-13  2.96E-13  4.31E-13  8.86E-13
   4.68E-13  2.07E-13  2.27E-13  3.40E-13  6.22E-13  8.76E-13  8.39E-13  8.25E-13
   2.28E-13  8.65E-13  2.86E-13  2.89E-13  1.58E-09  8.40E-09
   0.5000  0.1300  0.0000    1  4.85349E-09 kpt; spin; max resid(k); each band:
   2.47E-13  4.11E-13  7.86E-13  6.89E-13  7.50E-13  3.69E-13  5.88E-13  2.60E-13
   2.77E-13  7.56E-13  5.03E-13  8.39E-13  3.01E-13  3.10E-13  3.97E-13  7.73E-13
   4.95E-13  2.68E-13  3.03E-13  2.59E-13  7.04E-13  6.82E-13  7.96E-13  2.40E-13
   3.83E-13  2.37E-13  4.10E-13  8.96E-13  1.12E-09  4.85E-09
   0.5000  0.1400  0.0000    1  1.62469E-08 kpt; spin; max resid(k); each band:
   3.11E-13  4.87E-13  3.61E-13  2.84E-13  8.50E-13  6.02E-13  8.84E-13  7.86E-13
   7.75E-13  3.90E-13  8.89E-13  8.00E-13  4.10E-13  4.40E-13  8.77E-13  4.17E-13
   5.81E-13  9.20E-13  2.86E-13  2.21E-13  3.89E-13  6.43E-13  6.29E-13  3.39E-13
   5.28E-13  7.52E-13  8.67E-13  8.11E-13  3.09E-10  1.62E-08
   0.5000  0.1500  0.0000    1  1.24161E-08 kpt; spin; max resid(k); each band:
   4.69E-13  5.23E-13  3.74E-13  4.61E-13  3.40E-13  3.75E-13  2.83E-13  3.09E-13
   3.54E-13  7.69E-13  1.31E-13  2.82E-13  4.60E-13  3.47E-13  2.96E-13  7.66E-13
   5.74E-13  3.68E-13  2.50E-13  9.66E-13  1.94E-13  1.96E-13  6.54E-13  4.84E-13
   2.90E-13  6.00E-13  1.79E-13  4.72E-13  1.73E-10  1.24E-08
   0.5000  0.1600  0.0000    1  2.55829E-09 kpt; spin; max resid(k); each band:
   7.77E-13  2.77E-13  3.41E-13  4.09E-13  1.94E-13  2.75E-13  2.20E-13  9.99E-13
   1.94E-13  5.93E-13  4.86E-13  6.87E-13  7.22E-13  7.45E-13  2.24E-13  7.88E-13
   4.12E-13  1.29E-13  4.37E-13  7.79E-13  9.44E-13  5.60E-13  2.72E-13  7.80E-13
   2.55E-13  9.43E-13  4.93E-13  3.41E-13  5.48E-13  2.56E-09
   0.5000  0.1700  0.0000    1  1.53999E-09 kpt; spin; max resid(k); each band:
   8.15E-13  2.82E-13  3.30E-13  4.50E-13  2.03E-13  2.90E-13  2.07E-13  9.92E-13
   1.97E-13  6.42E-13  5.20E-13  6.58E-13  6.73E-13  8.22E-13  2.15E-13  7.14E-13
   4.72E-13  7.94E-13  4.68E-13  2.70E-13  8.14E-13  5.94E-13  2.58E-13  7.62E-13
   2.45E-13  8.56E-13  3.88E-13  3.99E-13  7.19E-13  1.54E-09
   0.5000  0.1800  0.0000    1  7.70257E-08 kpt; spin; max resid(k); each band:
   3.37E-13  5.10E-13  4.93E-13  4.76E-13  5.19E-13  4.51E-13  8.00E-13  4.12E-13
   5.29E-13  9.85E-13  1.64E-13  2.85E-13  8.22E-13  7.26E-13  6.11E-13  3.40E-13
   3.03E-13  9.82E-13  2.28E-13  5.85E-13  6.78E-13  5.00E-13  5.20E-13  4.31E-13
   3.41E-13  3.43E-13  4.15E-13  3.30E-13  3.17E-10  7.70E-08
   0.5000  0.1900  0.0000    1  1.04199E-08 kpt; spin; max resid(k); each band:
   4.07E-13  6.70E-13  3.57E-13  9.73E-13  4.03E-13  4.23E-13  2.47E-13  3.73E-13
   4.77E-13  3.41E-13  7.53E-13  5.26E-13  8.58E-13  9.49E-13  3.81E-13  7.21E-13
   6.99E-13  2.91E-13  2.66E-13  4.93E-13  3.32E-13  2.67E-13  5.13E-13  8.91E-13
   9.24E-13  4.41E-13  2.40E-13  7.74E-13  2.97E-11  1.04E-08
   0.5000  0.2000  0.0000    1  3.43742E-09 kpt; spin; max resid(k); each band:
   4.13E-13  6.02E-13  3.51E-13  9.17E-13  3.92E-13  4.42E-13  2.39E-13  4.07E-13
   3.55E-13  2.88E-13  8.37E-13  4.72E-13  6.93E-13  8.33E-13  3.64E-13  7.42E-13
   7.44E-13  9.13E-13  2.89E-13  5.86E-13  3.38E-13  3.70E-13  6.29E-13  9.13E-13
   8.35E-13  3.34E-13  3.75E-13  3.78E-13  2.61E-11  3.44E-09
   0.5000  0.2100  0.0000    1  2.21393E-09 kpt; spin; max resid(k); each band:
   6.25E-13  4.64E-13  3.54E-13  7.99E-13  7.40E-13  4.22E-13  2.41E-13  7.47E-13
   6.83E-13  3.03E-13  8.43E-13  3.41E-13  3.50E-13  9.12E-13  6.38E-13  4.47E-13
   9.09E-13  5.54E-13  5.76E-13  6.17E-13  2.23E-13  7.84E-13  5.71E-13  5.63E-13
   4.98E-13  2.23E-13  8.16E-13  3.45E-13  6.72E-13  2.21E-09
   0.5000  0.2200  0.0000    1  1.01579E-09 kpt; spin; max resid(k); each band:
   5.83E-13  5.40E-13  4.66E-13  1.71E-13  7.83E-13  4.75E-13  7.76E-13  7.46E-13
   6.78E-13  2.83E-13  8.10E-13  3.42E-13  2.83E-13  9.33E-13  6.25E-13  5.58E-13
   7.85E-13  9.35E-13  4.36E-13  6.64E-13  3.61E-13  9.89E-13  6.12E-13  5.60E-13
   6.41E-13  3.03E-13  3.65E-13  7.66E-13  2.83E-13  1.02E-09
   0.5000  0.2300  0.0000    1  7.34271E-10 kpt; spin; max resid(k); each band:
   4.60E-13  7.71E-13  4.27E-13  4.90E-13  9.90E-13  2.67E-13  1.56E-13  4.98E-13
   6.43E-13  4.09E-13  1.86E-13  5.98E-13  3.14E-13  3.03E-13  8.43E-13  4.71E-13
   2.84E-13  4.58E-13  6.77E-13  5.91E-13  2.42E-13  4.17E-13  4.51E-13  8.60E-13
   8.94E-13  2.48E-13  5.31E-13  7.79E-13  5.46E-13  7.34E-10
   0.5000  0.2400  0.0000    1  1.18239E-08 kpt; spin; max resid(k); each band:
   9.93E-13  7.15E-13  3.66E-13  5.68E-13  8.81E-13  3.44E-13  3.68E-13  4.18E-13
   2.45E-13  2.32E-13  1.79E-13  7.17E-13  5.32E-13  8.49E-13  3.72E-13  5.08E-13
   3.84E-13  4.89E-13  6.94E-13  1.39E-13  7.29E-13  6.62E-13  3.69E-13  2.37E-13
   7.49E-13  4.12E-13  9.07E-13  4.20E-13  7.73E-13  1.18E-08
   0.5000  0.2500  0.0000    1  5.86568E-09 kpt; spin; max resid(k); each band:
   3.46E-13  7.30E-13  4.60E-13  3.66E-13  7.81E-13  3.62E-13  7.26E-13  4.94E-13
   8.80E-13  6.18E-13  5.48E-13  2.18E-13  6.90E-13  9.33E-13  3.24E-13  8.74E-13
   5.35E-13  4.24E-13  2.75E-13  3.33E-13  2.28E-13  6.38E-13  8.42E-13  7.93E-13
   6.78E-13  5.64E-13  4.10E-13  5.01E-13  3.00E-12  5.87E-09
   0.5000  0.2600  0.0000    1  2.83901E-09 kpt; spin; max resid(k); each band:
   2.95E-13  6.34E-13  4.59E-13  3.60E-13  7.72E-13  3.17E-13  6.67E-13  4.84E-13
   8.21E-13  5.41E-13  5.02E-13  8.78E-13  6.34E-13  8.43E-13  3.11E-13  1.97E-13
   5.83E-13  3.85E-13  2.23E-13  3.72E-13  2.12E-13  6.67E-13  8.20E-13  7.81E-13
   7.65E-13  6.03E-13  8.24E-13  4.22E-13  2.65E-12  2.84E-09
   0.5000  0.2700  0.0000    1  1.33579E-09 kpt; spin; max resid(k); each band:
   2.98E-13  5.06E-13  5.15E-13  3.64E-13  7.72E-13  9.65E-13  6.08E-13  4.80E-13
   7.62E-13  4.64E-13  4.87E-13  7.26E-13  5.64E-13  7.81E-13  2.85E-13  2.04E-13
   6.23E-13  3.43E-13  1.86E-13  4.10E-13  1.85E-13  7.65E-13  8.18E-13  7.46E-13
   8.73E-13  6.34E-13  4.01E-13  5.80E-13  2.28E-12  1.34E-09
   0.5000  0.2800  0.0000    1  1.00414E-10 kpt; spin; max resid(k); each band:
   5.12E-13  5.99E-13  7.48E-13  6.69E-13  8.44E-13  2.82E-13  4.60E-13  4.15E-13
   4.30E-13  2.42E-13  4.83E-13  3.27E-13  2.39E-13  9.82E-13  5.65E-13  5.50E-13
   9.72E-13  3.28E-13  7.42E-13  4.19E-13  6.92E-13  4.72E-13  3.22E-13  7.25E-13
   2.79E-13  2.25E-13  9.06E-13  9.13E-13  7.22E-13  1.00E-10
   0.5000  0.2900  0.0000    1  6.24590E-11 kpt; spin; max resid(k); each band:
   5.54E-13  9.08E-13  6.80E-13  9.64E-13  7.56E-13  2.51E-13  3.54E-13  6.79E-13
   4.12E-13  6.91E-13  2.57E-13  5.28E-13  2.59E-13  2.67E-13  4.99E-13  5.59E-13
   3.47E-13  3.00E-13  6.86E-13  2.18E-13  2.13E-13  3.25E-13  1.81E-13  2.03E-13
   4.76E-13  9.86E-13  6.18E-13  2.94E-13  6.22E-13  6.25E-11
   0.5000  0.3000  0.0000    1  4.90561E-10 kpt; spin; max resid(k); each band:
   6.04E-13  5.55E-13  3.67E-13  3.31E-13  7.90E-13  3.63E-13  7.28E-13  9.92E-13
   2.62E-13  9.71E-13  6.37E-13  6.50E-13  6.05E-13  2.10E-13  7.10E-13  1.40E-13
   1.63E-13  3.85E-13  3.20E-13  5.79E-13  1.86E-13  4.40E-13  4.62E-13  2.24E-13
   3.31E-13  7.27E-13  9.15E-13  7.47E-13  1.49E-11  4.91E-10
   0.5000  0.3100  0.0000    1  7.26285E-11 kpt; spin; max resid(k); each band:
   3.94E-13  8.10E-13  3.88E-13  9.16E-13  8.13E-13  2.66E-13  6.49E-13  4.92E-13
   3.92E-13  2.62E-13  8.92E-13  3.74E-13  7.44E-13  3.33E-13  5.06E-13  2.21E-13
   2.79E-13  5.92E-13  4.45E-13  7.68E-13  6.18E-13  3.36E-13  2.60E-13  4.69E-13
   4.38E-13  3.55E-13  9.84E-13  8.13E-13  1.08E-11  7.26E-11
   0.5000  0.3200  0.0000    1  2.07143E-10 kpt; spin; max resid(k); each band:
   4.25E-13  8.82E-13  3.10E-13  9.02E-13  9.11E-13  2.53E-13  3.04E-13  5.20E-13
   7.62E-13  2.65E-13  8.62E-13  5.76E-13  9.20E-13  4.72E-13  6.20E-13  2.61E-13
   7.87E-13  3.47E-13  4.52E-13  8.57E-13  4.81E-13  4.13E-13  8.40E-13  3.84E-13
   5.09E-13  6.15E-13  9.61E-13  9.51E-13  5.15E-12  2.07E-10
   0.5000  0.3300  0.0000    1  2.57951E-11 kpt; spin; max resid(k); each band:
   2.68E-13  6.85E-13  2.29E-13  3.23E-13  6.03E-13  7.62E-13  4.48E-13  3.24E-13
   8.04E-13  5.90E-13  1.84E-13  2.70E-13  1.74E-13  1.84E-13  9.85E-13  5.30E-13
   3.04E-13  5.55E-13  7.40E-13  2.84E-13  4.06E-13  4.35E-13  3.63E-13  6.74E-13
   2.06E-13  6.63E-13  5.89E-13  9.17E-13  3.64E-12  2.58E-11
   0.5000  0.3400  0.0000    1  2.18896E-11 kpt; spin; max resid(k); each band:
   2.69E-13  8.43E-13  5.25E-13  6.64E-13  9.52E-13  3.75E-13  8.47E-13  6.41E-13
   2.62E-13  4.24E-13  8.77E-13  3.86E-13  5.18E-13  3.90E-13  5.67E-13  7.65E-13
   4.71E-13  2.81E-13  3.43E-13  3.43E-13  2.95E-13  3.41E-13  6.77E-13  9.55E-13
   8.30E-13  2.00E-13  7.14E-13  8.35E-13  6.04E-12  2.19E-11
   0.5000  0.3500  0.0000    1  2.29482E-11 kpt; spin; max resid(k); each band:
   3.56E-13  7.56E-13  1.60E-13  8.12E-13  8.49E-13  6.59E-13  3.47E-13  2.64E-13
   1.78E-13  4.04E-13  2.49E-13  4.15E-13  6.59E-13  5.18E-13  2.87E-13  5.18E-13
   5.67E-13  4.38E-13  6.89E-13  9.83E-13  1.45E-13  3.63E-13  8.56E-13  9.03E-13
   2.36E-13  3.03E-13  2.10E-13  7.08E-13  3.98E-13  2.29E-11
   0.5000  0.3600  0.0000    1  1.43671E-12 kpt; spin; max resid(k); each band:
   9.41E-13  2.91E-13  7.44E-13  7.91E-13  4.66E-13  3.51E-13  2.66E-13  3.96E-13
   3.15E-13  5.24E-13  7.22E-13  3.95E-13  8.99E-13  2.65E-13  4.12E-13  6.19E-13
   2.45E-13  5.58E-13  2.27E-13  5.88E-13  4.16E-13  2.24E-13  2.64E-13  5.25E-13
   4.39E-13  7.34E-13  5.69E-13  9.72E-13  7.16E-13  1.44E-12
   0.5000  0.3700  0.0000    1  9.63610E-13 kpt; spin; max resid(k); each band:
   8.22E-13  9.17E-13  7.02E-13  8.38E-13  4.33E-13  3.04E-13  3.00E-13  3.70E-13
   2.74E-13  4.31E-13  6.51E-13  2.86E-13  7.44E-13  2.08E-13  3.17E-13  5.36E-13
   1.82E-13  4.81E-13  9.64E-13  6.14E-13  3.40E-13  1.96E-13  2.25E-13  4.13E-13
   4.63E-13  3.16E-13  6.46E-13  6.37E-13  6.44E-13  7.37E-13
   0.5000  0.3800  0.0000    1  7.75313E-12 kpt; spin; max resid(k); each band:
   6.47E-13  6.98E-13  5.27E-13  8.68E-13  4.47E-13  5.32E-13  2.69E-13  3.01E-13
   3.55E-13  9.70E-13  5.95E-13  3.21E-13  2.59E-13  2.06E-13  6.54E-13  2.54E-13
   1.92E-13  5.31E-13  5.54E-13  7.15E-13  4.49E-13  5.10E-13  4.16E-13  1.84E-13
   3.37E-13  9.31E-13  6.68E-13  5.34E-13  9.25E-13  7.75E-12
   0.5000  0.3900  0.0000    1  7.68033E-12 kpt; spin; max resid(k); each band:
   7.95E-13  6.31E-13  4.72E-13  7.91E-13  4.51E-13  4.65E-13  2.57E-13  9.73E-13
   2.99E-13  8.64E-13  5.88E-13  9.49E-13  1.76E-13  2.72E-13  6.29E-13  1.65E-13
   1.84E-13  5.97E-13  4.65E-13  6.24E-13  3.48E-13  5.73E-13  5.35E-13  7.09E-13
   4.11E-13  4.41E-13  5.67E-13  7.70E-13  7.68E-12  1.59E-12
   0.5000  0.4000  0.0000    1  1.15165E-12 kpt; spin; max resid(k); each band:
   9.64E-13  5.31E-13  4.07E-13  6.54E-13  4.45E-13  3.68E-13  2.37E-13  7.83E-13
   2.36E-13  1.64E-13  7.21E-13  6.89E-13  8.56E-13  3.81E-13  6.56E-13  8.66E-13
   1.67E-13  5.79E-13  7.02E-13  4.80E-13  3.57E-13  6.40E-13  6.89E-13  8.23E-13
   5.20E-13  3.89E-13  7.42E-13  3.83E-13  1.15E-12  5.90E-13
   0.5000  0.4100  0.0000    1  1.96235E-11 kpt; spin; max resid(k); each band:
   2.89E-13  3.90E-13  6.67E-13  5.60E-13  8.34E-13  2.22E-13  2.30E-13  5.61E-13
   2.08E-13  9.02E-13  2.08E-13  4.16E-13  8.07E-13  6.68E-13  3.79E-13  4.35E-13
   2.12E-13  9.26E-13  4.93E-13  9.04E-13  5.05E-13  3.54E-13  3.47E-13  5.23E-13
   3.78E-13  4.90E-13  9.07E-13  9.42E-13  1.49E-11  1.96E-11
   0.5000  0.4200  0.0000    1  1.58811E-11 kpt; spin; max resid(k); each band:
   1.68E-13  5.06E-13  2.33E-13  5.88E-13  4.96E-13  2.47E-13  7.43E-13  7.38E-13
   4.29E-13  3.25E-13  6.68E-13  7.92E-13  1.89E-13  7.51E-13  8.31E-13  1.85E-13
   2.91E-13  6.69E-13  7.83E-13  4.91E-13  6.13E-13  4.11E-13  4.06E-13  4.68E-13
   9.89E-13  4.68E-13  6.76E-13  9.82E-13  1.14E-12  1.59E-11
   0.5000  0.4300  0.0000    1  7.99467E-12 kpt; spin; max resid(k); each band:
   1.77E-13  6.68E-13  2.71E-13  6.32E-13  5.86E-13  2.64E-13  8.32E-13  7.54E-13
   6.46E-13  5.22E-13  8.61E-13  2.16E-13  2.42E-13  2.68E-13  3.26E-13  2.32E-13
   4.58E-13  5.70E-13  8.65E-13  9.52E-13  5.25E-13  6.19E-13  8.36E-13  6.08E-13
   2.26E-13  4.88E-13  7.99E-13  4.48E-13  5.90E-13  7.99E-12
   0.5000  0.4400  0.0000    1  7.12644E-12 kpt; spin; max resid(k); each band:
   8.72E-13  5.00E-13  6.33E-13  5.89E-13  3.56E-13  7.96E-13  2.98E-13  4.31E-13
   3.02E-13  2.18E-13  3.56E-13  8.80E-13  3.07E-13  9.70E-13  3.27E-13  7.50E-13
   3.21E-13  4.23E-13  1.10E-13  5.84E-13  2.24E-13  3.17E-13  5.63E-13  4.69E-13
   6.53E-13  7.87E-13  7.27E-13  6.60E-13  1.23E-12  7.13E-12
   0.5000  0.4500  0.0000    1  1.24036E-11 kpt; spin; max resid(k); each band:
   8.22E-13  4.15E-13  6.20E-13  7.59E-13  3.18E-13  7.23E-13  2.66E-13  7.04E-13
   4.26E-13  2.41E-13  3.65E-13  4.22E-13  2.37E-13  5.57E-13  3.99E-13  5.90E-13
   1.78E-13  3.36E-13  9.70E-13  5.60E-13  2.20E-13  2.57E-13  4.66E-13  5.36E-13
   7.35E-13  9.12E-13  5.76E-13  4.57E-13  1.20E-12  1.24E-11
   0.5000  0.4600  0.0000    1  1.45802E-11 kpt; spin; max resid(k); each band:
   7.16E-13  3.49E-13  5.69E-13  9.91E-13  2.94E-13  6.36E-13  8.51E-13  9.96E-13
   4.42E-13  2.35E-13  3.17E-13  3.97E-13  2.21E-13  7.65E-13  5.02E-13  5.32E-13
   5.97E-13  2.70E-13  7.48E-13  8.40E-13  2.41E-13  2.05E-13  3.95E-13  6.84E-13
   7.12E-13  7.16E-13  5.54E-13  2.82E-13  1.04E-12  1.46E-11
   0.5000  0.4700  0.0000    1  1.05175E-10 kpt; spin; max resid(k); each band:
   6.11E-13  8.80E-13  5.23E-13  3.05E-13  9.79E-13  5.78E-13  5.59E-13  2.14E-13
   4.15E-13  2.30E-13  2.40E-13  4.77E-13  2.18E-13  9.75E-13  5.30E-13  4.95E-13
   3.25E-13  2.72E-13  5.86E-13  6.08E-13  2.37E-13  2.36E-13  3.42E-13  7.56E-13
   6.48E-13  6.87E-13  7.49E-13  7.16E-13  5.14E-12  1.05E-10
   0.5000  0.4800  0.0000    1  5.66228E-10 kpt; spin; max resid(k); each band:
   4.14E-13  4.63E-13  8.50E-13  8.14E-13  6.29E-13  2.23E-13  2.68E-13  6.51E-13
   8.06E-13  6.84E-13  9.60E-13  8.86E-13  3.75E-13  3.15E-13  6.51E-13  2.65E-13
   4.95E-13  2.43E-13  2.79E-13  3.46E-13  4.68E-13  4.81E-13  2.03E-13  3.76E-13
   3.98E-13  5.91E-13  5.20E-13  8.98E-13  5.48E-12  5.66E-10
   0.5000  0.4900  0.0000    1  3.88935E-10 kpt; spin; max resid(k); each band:
   5.42E-13  6.11E-13  9.60E-13  1.43E-13  4.91E-13  9.54E-13  3.49E-13  8.18E-13
   9.40E-13  7.19E-13  9.68E-13  8.39E-13  3.25E-13  3.06E-13  2.10E-13  2.40E-13
   3.96E-13  1.93E-13  2.17E-13  5.89E-13  4.92E-13  3.02E-13  1.78E-13  3.44E-13
   9.91E-13  2.67E-13  7.48E-13  9.78E-13  1.28E-12  3.89E-10
   0.5000  0.5000  0.0000    1  6.10137E-10 kpt; spin; max resid(k); each band:
   9.19E-13  2.14E-13  6.42E-13  8.35E-13  2.79E-13  6.34E-13  6.67E-13  6.76E-13
   1.83E-13  4.70E-13  1.50E-13  2.04E-13  3.18E-13  4.92E-13  5.72E-13  4.85E-13
   2.28E-13  3.82E-13  1.50E-13  9.87E-13  7.89E-13  3.76E-13  9.59E-13  8.27E-13
   6.22E-13  9.45E-13  1.59E-13  5.23E-13  2.49E-12  6.10E-10
   0.4929  0.4929  0.0000    1  4.84926E-10 kpt; spin; max resid(k); each band:
   6.13E-13  8.86E-13  4.38E-13  2.76E-13  3.51E-13  4.96E-13  6.20E-13  3.09E-13
   6.41E-13  4.88E-13  9.67E-13  2.20E-13  7.54E-13  3.43E-13  7.57E-13  7.24E-13
   3.17E-13  4.81E-13  2.28E-13  9.94E-13  2.95E-13  1.17E-13  3.31E-13  3.27E-13
   2.33E-13  4.23E-13  5.91E-13  9.78E-13  4.88E-13  4.85E-10
   0.4857  0.4857  0.0000    1  1.47941E-10 kpt; spin; max resid(k); each band:
   5.53E-13  8.78E-13  5.03E-13  7.31E-13  5.90E-13  6.18E-13  2.34E-13  7.49E-13
   6.10E-13  6.07E-13  8.73E-13  4.34E-13  3.77E-13  3.86E-13  7.26E-13  5.35E-13
   3.12E-13  7.11E-13  2.89E-13  3.87E-13  4.16E-13  2.25E-13  3.77E-13  3.97E-13
   5.92E-13  7.28E-13  2.45E-13  8.47E-13  1.94E-13  1.48E-10
   0.4786  0.4786  0.0000    1  2.71167E-09 kpt; spin; max resid(k); each band:
   2.58E-13  6.94E-13  3.98E-13  4.15E-13  5.74E-13  2.86E-13  2.46E-13  3.71E-13
   9.77E-13  8.14E-13  4.99E-13  3.34E-13  4.88E-13  9.00E-13  2.87E-13  2.08E-13
   6.39E-13  3.75E-13  2.07E-13  5.11E-13  4.34E-13  1.61E-13  4.16E-13  5.13E-13
   1.49E-13  8.14E-13  7.48E-13  7.79E-13  3.97E-12  2.71E-09
   0.4714  0.4714  0.0000    1  3.57928E-09 kpt; spin; max resid(k); each band:
   2.99E-13  6.35E-13  3.65E-13  4.64E-13  5.36E-13  2.26E-13  9.05E-13  3.94E-13
   8.58E-13  8.13E-13  5.58E-13  3.02E-13  3.28E-13  8.48E-13  3.27E-13  6.11E-13
   5.89E-13  3.46E-13  1.87E-13  5.71E-13  2.69E-13  8.41E-13  2.37E-13  4.02E-13
   3.43E-13  8.00E-13  3.39E-13  7.68E-13  5.75E-12  3.58E-09
   0.4643  0.4643  0.0000    1  2.93327E-10 kpt; spin; max resid(k); each band:
   3.73E-13  6.23E-13  3.56E-13  5.26E-13  4.96E-13  1.94E-13  8.39E-13  4.06E-13
   7.19E-13  7.46E-13  7.03E-13  2.88E-13  2.46E-13  7.31E-13  3.80E-13  7.91E-13
   6.13E-13  2.95E-13  2.74E-13  6.78E-13  5.63E-13  6.76E-13  2.58E-13  5.16E-13
   6.52E-13  5.43E-13  7.46E-13  5.07E-13  8.56E-13  2.93E-10
   0.4571  0.4571  0.0000    1  1.27618E-10 kpt; spin; max resid(k); each band:
   3.88E-13  5.70E-13  9.32E-13  5.84E-13  4.37E-13  8.37E-13  8.63E-13  3.01E-13
   5.92E-13  6.83E-13  7.65E-13  3.01E-13  2.53E-13  7.71E-13  4.20E-13  4.40E-13
   7.35E-13  2.52E-13  3.89E-13  6.57E-13  1.99E-13  3.48E-13  3.32E-13  7.62E-13
   7.43E-13  6.13E-13  2.36E-13  8.00E-13  1.23E-12  1.28E-10
   0.4500  0.4500  0.0000    1  1.94495E-10 kpt; spin; max resid(k); each band:
   4.27E-13  5.74E-13  7.82E-13  5.99E-13  4.30E-13  6.97E-13  9.02E-13  8.62E-13
   6.14E-13  6.70E-13  7.48E-13  2.94E-13  3.10E-13  8.24E-13  4.21E-13  6.63E-13
   8.04E-13  2.18E-13  4.71E-13  5.91E-13  2.85E-13  4.10E-13  4.28E-13  8.79E-13
   9.35E-13  4.60E-13  8.03E-13  9.86E-13  1.71E-12  1.94E-10
   0.4429  0.4429  0.0000    1  9.96884E-13 kpt; spin; max resid(k); each band:
   7.32E-13  8.87E-13  9.97E-13  6.25E-13  4.59E-13  7.08E-13  2.18E-13  7.13E-13
   7.08E-13  4.63E-13  6.83E-13  6.50E-13  7.89E-13  2.69E-13  2.94E-13  2.49E-13
   4.19E-13  7.92E-13  8.92E-13  9.30E-13  7.25E-13  1.55E-13  6.29E-13  8.09E-13
   8.43E-13  5.97E-13  6.43E-13  8.40E-13  8.83E-13  4.89E-13
   0.4357  0.4357  0.0000    1  9.98714E-13 kpt; spin; max resid(k); each band:
   9.51E-13  9.28E-13  9.38E-13  6.94E-13  4.76E-13  7.69E-13  2.23E-13  9.06E-13
   8.07E-13  4.61E-13  6.39E-13  6.52E-13  8.09E-13  2.27E-13  2.71E-13  2.12E-13
   4.97E-13  8.76E-13  1.99E-13  9.99E-13  7.33E-13  2.42E-13  5.32E-13  5.75E-13
   1.74E-13  9.76E-13  9.37E-13  6.10E-13  4.99E-13  7.59E-13
   0.4286  0.4286  0.0000    1  9.53917E-13 kpt; spin; max resid(k); each band:
   2.26E-13  2.90E-13  9.31E-13  7.67E-13  5.11E-13  7.84E-13  9.54E-13  1.98E-13
   9.05E-13  4.70E-13  6.02E-13  7.87E-13  7.82E-13  3.55E-13  2.46E-13  2.14E-13
   6.96E-13  9.33E-13  2.89E-13  5.26E-13  6.96E-13  3.47E-13  6.27E-13  2.85E-13
   2.00E-13  5.24E-13  7.03E-13  7.39E-13  8.73E-13  7.61E-13
   0.4214  0.4214  0.0000    1  9.87902E-13 kpt; spin; max resid(k); each band:
   2.78E-13  3.52E-13  2.61E-13  8.31E-13  5.54E-13  7.36E-13  7.83E-13  3.55E-13
   9.88E-13  4.83E-13  6.29E-13  1.51E-13  6.52E-13  5.62E-13  2.73E-13  2.34E-13
   8.99E-13  1.93E-13  3.97E-13  5.18E-13  7.27E-13  4.67E-13  6.95E-13  5.63E-13
   2.08E-13  6.66E-13  2.93E-13  7.47E-13  7.47E-13  6.19E-13
   0.4143  0.4143  0.0000    1  3.31223E-12 kpt; spin; max resid(k); each band:
   3.38E-13  4.34E-13  3.45E-13  8.99E-13  6.05E-13  6.68E-13  5.62E-13  6.02E-13
   2.79E-13  4.77E-13  7.03E-13  1.98E-13  3.86E-13  7.36E-13  3.45E-13  2.68E-13
   2.26E-13  2.25E-13  5.04E-13  4.68E-13  7.95E-13  5.92E-13  2.66E-13  9.84E-13
   1.87E-13  9.69E-13  6.37E-13  8.41E-13  3.31E-12  7.47E-13
   0.4071  0.4071  0.0000    1  2.20776E-12 kpt; spin; max resid(k); each band:
   2.85E-13  9.08E-13  4.03E-13  3.13E-13  4.39E-13  3.94E-13  7.81E-13  5.88E-13
   9.21E-13  4.36E-13  2.25E-13  1.60E-13  1.32E-13  4.11E-13  4.26E-13  2.58E-13
   5.42E-13  3.34E-13  2.87E-13  2.27E-13  9.44E-13  4.36E-13  9.28E-13  4.34E-13
   3.61E-13  9.69E-13  2.51E-13  8.25E-13  8.53E-13  2.21E-12
   0.4000  0.4000  0.0000    1  9.31957E-12 kpt; spin; max resid(k); each band:
   2.92E-13  7.56E-13  4.66E-13  7.51E-13  4.96E-13  4.73E-13  7.91E-13  6.49E-13
   3.84E-13  6.89E-13  3.43E-13  2.73E-13  8.27E-13  3.57E-13  3.10E-13  4.54E-13
   1.99E-13  2.29E-13  2.07E-13  6.05E-13  2.90E-13  2.75E-13  8.44E-13  4.07E-13
   9.75E-13  2.16E-13  4.67E-13  9.14E-13  3.93E-12  9.32E-12
   0.3929  0.3929  0.0000    1  1.83206E-11 kpt; spin; max resid(k); each band:
   3.09E-13  1.97E-13  3.07E-13  2.32E-13  2.93E-13  7.79E-13  1.05E-13  2.08E-13
   4.17E-13  6.01E-13  2.67E-13  9.15E-13  2.45E-13  4.03E-13  7.48E-13  2.37E-13
   4.17E-13  2.46E-13  2.95E-13  4.36E-13  4.69E-13  3.13E-13  2.32E-13  2.94E-13
   3.33E-13  6.10E-13  8.28E-13  6.29E-13  1.09E-11  1.83E-11
   0.3857  0.3857  0.0000    1  1.95094E-11 kpt; spin; max resid(k); each band:
   2.79E-13  2.64E-13  9.23E-13  6.39E-13  5.43E-13  4.24E-13  4.61E-13  3.03E-13
   3.69E-13  5.97E-13  3.65E-13  3.66E-13  3.53E-13  4.90E-13  6.41E-13  8.41E-13
   7.44E-13  5.76E-13  9.67E-13  6.22E-13  6.53E-13  4.86E-13  6.68E-13  5.96E-13
   8.55E-13  9.66E-13  3.15E-13  8.56E-13  2.39E-12  1.95E-11
   0.3786  0.3786  0.0000    1  3.79191E-11 kpt; spin; max resid(k); each band:
   3.18E-13  3.22E-13  2.06E-13  6.62E-13  6.37E-13  4.94E-13  4.44E-13  3.30E-13
   3.79E-13  6.55E-13  4.74E-13  3.73E-13  9.42E-13  7.35E-13  7.60E-13  8.71E-13
   2.07E-13  4.93E-13  1.81E-13  5.11E-13  7.27E-13  5.53E-13  8.09E-13  9.96E-13
   9.09E-13  3.00E-13  6.04E-13  5.85E-13  5.79E-12  3.79E-11
   0.3714  0.3714  0.0000    1  2.20045E-10 kpt; spin; max resid(k); each band:
   3.76E-13  3.62E-13  2.60E-13  6.53E-13  7.78E-13  5.70E-13  4.80E-13  3.71E-13
   4.12E-13  6.90E-13  5.78E-13  4.17E-13  6.29E-13  2.60E-13  8.53E-13  7.50E-13
   3.17E-13  3.71E-13  1.89E-13  9.85E-13  8.97E-13  5.16E-13  8.55E-13  8.68E-13
   8.31E-13  9.54E-13  6.18E-13  5.79E-13  5.31E-11  2.20E-10
   0.3643  0.3643  0.0000    1  2.40788E-10 kpt; spin; max resid(k); each band:
   3.47E-13  9.44E-13  6.51E-13  4.38E-13  3.38E-13  2.46E-13  8.23E-13  6.41E-13
   4.20E-13  8.25E-13  4.08E-13  7.56E-13  9.07E-13  1.57E-13  5.53E-13  6.95E-13
   4.94E-13  8.65E-13  1.47E-13  7.01E-13  9.70E-13  9.56E-13  3.51E-13  9.26E-13
   3.89E-13  7.73E-13  8.40E-13  7.18E-13  5.59E-11  2.41E-10
   0.3571  0.3571  0.0000    1  1.21879E-09 kpt; spin; max resid(k); each band:
   3.39E-13  9.82E-13  7.74E-13  4.25E-13  3.62E-13  2.53E-13  8.08E-13  6.07E-13
   3.99E-13  7.90E-13  4.36E-13  7.26E-13  2.57E-13  2.23E-13  7.07E-13  8.43E-13
   6.59E-13  2.05E-13  1.64E-13  9.08E-13  3.59E-13  5.84E-13  5.03E-13  2.33E-13
   4.63E-13  4.71E-13  9.98E-13  7.83E-13  2.35E-10  1.22E-09
   0.3500  0.3500  0.0000    1  2.03644E-09 kpt; spin; max resid(k); each band:
   3.86E-13  2.60E-13  2.26E-13  3.83E-13  3.49E-13  3.03E-13  3.45E-13  4.12E-13
   6.82E-13  3.35E-13  9.81E-13  5.30E-13  3.13E-13  3.67E-13  4.32E-13  8.05E-13
   8.81E-13  7.69E-13  3.62E-13  7.75E-13  8.86E-13  8.44E-13  2.65E-13  3.71E-13
   9.71E-13  2.51E-13  9.37E-13  3.37E-13  2.04E-09  1.10E-09
   0.3429  0.3429  0.0000    1  1.39663E-08 kpt; spin; max resid(k); each band:
   2.75E-13  8.04E-13  9.95E-13  9.16E-13  4.32E-13  7.90E-13  3.21E-13  1.80E-13
   8.79E-13  9.75E-13  2.66E-13  6.88E-13  5.69E-13  3.77E-13  2.97E-13  3.77E-13
   6.25E-13  2.26E-13  3.52E-13  2.42E-13  7.63E-13  2.84E-13  3.12E-13  9.40E-13
   2.84E-13  7.23E-13  5.22E-13  6.57E-13  4.59E-10  1.40E-08
   0.3357  0.3357  0.0000    1  6.60048E-09 kpt; spin; max resid(k); each band:
   3.02E-13  7.69E-13  8.84E-13  1.76E-13  4.58E-13  7.55E-13  3.71E-13  1.71E-13
   8.99E-13  2.46E-13  3.27E-13  6.20E-13  5.86E-13  3.82E-13  1.69E-13  3.74E-13
   6.85E-13  8.20E-13  3.41E-13  9.37E-13  7.46E-13  2.98E-13  2.69E-13  5.57E-13
   8.48E-13  6.21E-13  4.69E-13  6.30E-13  2.16E-10  6.60E-09
   0.3286  0.3286  0.0000    1  2.27180E-10 kpt; spin; max resid(k); each band:
   3.12E-13  6.37E-13  8.69E-13  9.56E-13  4.18E-13  7.59E-13  4.23E-13  9.67E-13
   9.69E-13  2.51E-13  1.93E-13  4.93E-13  4.81E-13  8.79E-13  1.50E-13  2.81E-13
   5.79E-13  6.95E-13  7.98E-13  9.26E-13  7.55E-13  2.98E-13  2.40E-13  7.78E-13
   2.44E-13  8.89E-13  4.77E-13  7.78E-13  3.17E-11  2.27E-10
   0.3214  0.3214  0.0000    1  3.33690E-08 kpt; spin; max resid(k); each band:
   9.78E-13  5.75E-13  3.80E-13  8.21E-13  4.23E-13  2.13E-13  4.06E-13  4.42E-13
   3.49E-13  5.25E-13  7.10E-13  9.56E-13  6.32E-13  9.02E-13  4.82E-13  2.39E-13
   3.38E-13  4.84E-13  4.54E-13  6.92E-13  4.63E-13  8.29E-13  2.63E-13  3.51E-13
   5.73E-13  4.19E-13  3.67E-13  5.12E-13  3.34E-08  1.48E-08
   0.3143  0.3143  0.0000    1  1.02777E-08 kpt; spin; max resid(k); each band:
   3.61E-13  5.12E-13  4.01E-13  4.21E-13  4.22E-13  4.42E-13  2.53E-13  3.45E-13
   9.57E-13  3.09E-13  7.39E-13  5.96E-13  2.47E-13  3.27E-13  2.27E-13  8.45E-13
   3.47E-13  9.07E-13  7.73E-13  2.78E-13  8.90E-13  8.33E-13  3.39E-13  5.12E-13
   6.89E-13  4.58E-13  8.04E-13  5.98E-13  1.03E-08  8.63E-10
   0.3071  0.3071  0.0000    1  1.26114E-09 kpt; spin; max resid(k); each band:
   2.98E-13  6.11E-13  9.95E-13  3.89E-13  5.47E-13  5.41E-13  5.97E-13  4.41E-13
   2.42E-13  3.77E-13  6.49E-13  3.74E-13  2.90E-13  9.79E-13  2.87E-13  5.68E-13
   2.09E-13  3.76E-13  8.13E-13  5.12E-13  5.52E-13  4.31E-13  3.07E-13  4.60E-13
   5.86E-13  9.04E-13  6.37E-13  4.95E-13  1.26E-09  4.46E-11
   0.3000  0.3000  0.0000    1  1.61636E-08 kpt; spin; max resid(k); each band:
   7.03E-13  4.52E-13  1.87E-13  3.00E-13  4.69E-13  9.40E-13  4.11E-13  8.86E-13
   7.15E-13  3.40E-13  4.02E-13  1.96E-13  2.94E-13  8.92E-13  4.46E-13  6.21E-13
   2.85E-13  9.72E-13  5.64E-13  5.43E-13  3.37E-13  2.19E-13  4.07E-13  3.30E-13
   4.45E-13  9.14E-13  2.32E-13  8.59E-13  1.62E-08  1.20E-09
   0.2929  0.2929  0.0000    1  4.06209E-09 kpt; spin; max resid(k); each band:
   6.68E-13  4.69E-13  1.88E-13  3.03E-13  4.63E-13  1.08E-13  3.95E-13  8.67E-13
   6.71E-13  3.10E-13  3.39E-13  1.84E-13  2.27E-13  8.48E-13  4.51E-13  6.18E-13
   2.42E-13  8.91E-13  5.45E-13  4.04E-13  3.25E-13  7.02E-13  3.07E-13  2.93E-13
   4.60E-13  2.66E-13  9.08E-13  3.41E-13  4.06E-09  5.57E-11
   0.2857  0.2857  0.0000    1  1.30758E-09 kpt; spin; max resid(k); each band:
   5.89E-13  7.75E-13  2.99E-13  2.87E-13  9.30E-13  2.04E-13  2.31E-13  6.49E-13
   2.89E-13  6.15E-13  6.29E-13  7.54E-13  5.01E-13  3.23E-13  2.18E-13  4.29E-13
   3.45E-13  1.95E-13  2.80E-13  7.72E-13  5.47E-13  6.26E-13  3.32E-13  3.16E-13
   3.62E-13  3.24E-13  7.59E-13  4.96E-13  2.22E-11  1.31E-09
   0.2786  0.2786  0.0000    1  1.09224E-06 kpt; spin; max resid(k); each band:
   2.57E-13  7.54E-13  6.95E-13  9.68E-13  8.94E-13  9.30E-13  8.98E-13  3.06E-13
   6.77E-13  4.75E-13  2.32E-13  2.68E-13  3.16E-13  6.22E-13  4.55E-13  2.83E-13
   8.06E-13  4.92E-13  9.23E-13  3.93E-13  7.68E-13  2.38E-13  8.68E-13  8.66E-13
   3.40E-13  2.15E-13  6.88E-13  9.06E-13  1.18E-07  1.09E-06
   0.2714  0.2714  0.0000    1  2.43044E-08 kpt; spin; max resid(k); each band:
   1.94E-13  4.02E-13  9.81E-13  5.56E-13  2.60E-13  6.33E-13  7.68E-13  3.08E-13
   4.02E-13  5.01E-13  4.32E-13  9.58E-13  7.92E-13  6.47E-13  3.83E-13  7.43E-13
   4.76E-13  9.27E-13  5.39E-13  2.93E-13  2.42E-13  3.22E-13  3.71E-13  2.30E-13
   8.00E-13  7.45E-13  3.29E-13  7.45E-13  2.43E-08  6.66E-09
   0.2643  0.2643  0.0000    1  2.53992E-07 kpt; spin; max resid(k); each band:
   1.70E-13  4.61E-13  5.14E-13  5.07E-13  4.98E-13  4.18E-13  4.99E-13  4.48E-13
   7.84E-13  2.68E-13  4.95E-13  6.82E-13  2.78E-13  4.39E-13  5.63E-13  9.65E-13
   8.63E-13  3.10E-13  3.13E-13  4.31E-13  8.28E-13  4.51E-13  7.71E-13  6.25E-13
   9.23E-13  4.80E-13  8.99E-13  5.50E-13  5.09E-08  2.54E-07
   0.2571  0.2571  0.0000    1  3.15345E-07 kpt; spin; max resid(k); each band:
   1.77E-13  5.15E-13  4.17E-13  3.47E-13  5.17E-13  4.02E-13  1.51E-13  5.44E-13
   6.50E-13  7.27E-13  5.30E-13  8.94E-13  6.87E-13  4.18E-13  7.59E-13  8.27E-13
   9.10E-13  4.39E-13  2.37E-13  3.94E-13  4.34E-13  2.41E-13  3.64E-13  6.88E-13
   6.63E-13  3.14E-13  3.27E-13  3.56E-13  5.61E-08  3.15E-07
   0.2500  0.2500  0.0000    1  1.47489E-07 kpt; spin; max resid(k); each band:
   2.03E-13  5.84E-13  4.49E-13  4.18E-13  4.98E-13  4.92E-13  2.59E-13  6.55E-13
   6.79E-13  4.32E-13  5.68E-13  2.11E-13  9.29E-13  3.98E-13  6.82E-13  7.37E-13
   1.96E-13  3.47E-13  7.69E-13  3.54E-13  6.80E-13  7.61E-13  5.70E-13  4.24E-13
   3.00E-13  3.29E-13  3.00E-13  5.14E-13  7.09E-08  1.47E-07
   0.2429  0.2429  0.0000    1  6.61829E-08 kpt; spin; max resid(k); each band:
   9.39E-13  5.52E-13  5.43E-13  4.16E-13  4.51E-13  5.95E-13  3.00E-13  7.58E-13
   2.85E-13  2.84E-13  6.09E-13  2.45E-13  1.69E-13  3.57E-13  6.39E-13  7.89E-13
   2.04E-13  9.89E-13  8.09E-13  7.20E-13  4.15E-13  3.20E-13  8.57E-13  5.89E-13
   6.74E-13  1.73E-13  2.92E-13  2.38E-13  6.62E-08  6.28E-08
   0.2357  0.2357  0.0000    1  3.43423E-07 kpt; spin; max resid(k); each band:
   4.59E-13  7.90E-13  5.13E-13  2.02E-13  5.44E-13  2.72E-13  9.86E-13  4.40E-13
   3.51E-13  7.43E-13  9.06E-13  8.15E-13  3.12E-13  5.43E-13  4.53E-13  9.49E-13
   2.39E-13  3.69E-13  1.70E-13  4.43E-13  5.70E-13  7.26E-13  5.23E-13  1.83E-13
   6.25E-13  6.88E-13  3.47E-13  8.85E-13  5.87E-08  3.43E-07
   0.2286  0.2286  0.0000    1  3.65038E-09 kpt; spin; max resid(k); each band:
   9.06E-13  4.99E-13  3.45E-13  2.56E-13  5.64E-13  4.51E-13  9.51E-13  8.57E-13
   3.01E-13  3.50E-13  3.28E-13  5.31E-13  6.86E-13  7.04E-13  3.67E-13  3.92E-13
   2.74E-13  1.77E-13  7.18E-13  2.55E-13  2.91E-13  4.00E-13  2.48E-13  5.07E-13
   4.63E-13  1.71E-13  2.31E-13  5.86E-13  5.26E-10  3.65E-09
   0.2214  0.2214  0.0000    1  2.36173E-08 kpt; spin; max resid(k); each band:
   4.37E-13  1.99E-13  8.80E-13  3.54E-13  4.44E-13  9.42E-13  6.28E-13  5.94E-13
   5.11E-13  6.24E-13  1.88E-13  3.75E-13  1.95E-13  3.57E-13  5.43E-13  2.72E-13
   3.44E-13  2.84E-13  3.15E-13  6.23E-13  4.63E-13  2.92E-13  4.28E-13  9.01E-13
   8.58E-13  6.79E-13  9.42E-13  5.14E-13  3.28E-09  2.36E-08
   0.2143  0.2143  0.0000    1  1.16728E-08 kpt; spin; max resid(k); each band:
   4.31E-13  2.10E-13  8.65E-13  3.58E-13  4.62E-13  9.84E-13  6.24E-13  7.03E-13
   4.40E-13  5.93E-13  1.92E-13  3.36E-13  1.89E-13  3.00E-13  3.58E-13  3.06E-13
   3.27E-13  2.81E-13  2.57E-13  5.12E-13  3.66E-13  3.59E-13  3.77E-13  5.26E-13
   5.59E-13  5.03E-13  9.04E-13  3.55E-13  3.52E-09  1.17E-08
   0.2071  0.2071  0.0000    1  1.01545E-06 kpt; spin; max resid(k); each band:
   3.83E-13  2.24E-13  6.92E-13  8.80E-13  4.52E-13  6.46E-13  7.10E-13  2.92E-13
   1.91E-13  4.62E-13  3.95E-13  6.58E-13  6.44E-13  8.55E-13  7.56E-13  3.57E-13
   6.56E-13  9.59E-13  4.46E-13  6.37E-13  7.36E-13  3.23E-13  9.68E-13  4.49E-13
   1.41E-13  3.67E-13  5.59E-13  7.56E-13  6.58E-08  1.02E-06
   0.2000  0.2000  0.0000    1  2.21365E-08 kpt; spin; max resid(k); each band:
   2.34E-13  5.92E-13  2.30E-13  2.05E-13  2.03E-13  3.80E-13  3.63E-13  2.60E-13
   9.28E-13  3.22E-13  2.31E-13  3.11E-13  2.37E-13  3.42E-13  8.73E-13  5.09E-13
   7.11E-13  5.67E-13  7.44E-13  7.49E-13  2.04E-13  7.64E-13  2.24E-13  2.27E-13
   3.23E-13  4.88E-13  6.19E-13  4.30E-13  2.04E-10  2.21E-08
   0.1929  0.1929  0.0000    1  1.29577E-08 kpt; spin; max resid(k); each band:
   8.12E-13  2.37E-13  6.15E-13  5.55E-13  2.48E-13  5.78E-13  2.53E-13  3.01E-13
   3.02E-13  4.02E-13  3.76E-13  7.25E-13  7.08E-13  4.22E-13  3.76E-13  2.77E-13
   2.25E-13  6.51E-13  9.28E-13  2.70E-13  6.72E-13  8.27E-13  2.88E-13  4.42E-13
   9.43E-13  2.32E-13  6.35E-13  5.83E-13  3.48E-09  1.30E-08
   0.1857  0.1857  0.0000    1  1.75935E-08 kpt; spin; max resid(k); each band:
   9.38E-13  2.45E-13  6.15E-13  5.35E-13  2.46E-13  8.45E-13  2.85E-13  2.52E-13
   2.95E-13  4.42E-13  3.46E-13  6.94E-13  8.18E-13  3.78E-13  4.24E-13  3.31E-13
   4.00E-13  9.10E-13  2.38E-13  2.52E-13  6.42E-13  2.54E-13  3.89E-13  1.10E-13
   6.97E-13  2.65E-13  3.00E-13  5.57E-13  4.14E-09  1.76E-08
   0.1786  0.1786  0.0000    1  1.24445E-06 kpt; spin; max resid(k); each band:
   4.36E-13  2.56E-13  6.30E-13  8.54E-13  6.26E-13  9.71E-13  4.99E-13  2.70E-13
   5.80E-13  5.61E-13  9.20E-13  5.34E-13  4.53E-13  8.95E-13  5.58E-13  5.81E-13
   3.03E-13  5.21E-13  6.30E-13  9.56E-13  5.62E-13  6.40E-13  8.25E-13  6.05E-13
   7.70E-13  7.29E-13  4.55E-13  6.30E-13  2.27E-07  1.24E-06
   0.1714  0.1714  0.0000    1  1.29052E-06 kpt; spin; max resid(k); each band:
   4.17E-13  2.45E-13  6.43E-13  1.67E-13  6.95E-13  2.84E-13  5.47E-13  2.88E-13
   6.55E-13  5.99E-13  9.78E-13  4.59E-13  4.97E-13  9.53E-13  5.91E-13  8.77E-13
   2.44E-13  5.24E-13  4.70E-13  9.76E-13  6.94E-13  8.99E-13  9.23E-13  7.96E-13
   2.59E-13  8.55E-13  9.91E-13  5.94E-13  2.14E-07  1.29E-06
   0.1643  0.1643  0.0000    1  1.53119E-07 kpt; spin; max resid(k); each band:
   3.63E-13  5.09E-13  2.34E-13  3.34E-13  6.53E-13  4.04E-13  7.74E-13  4.32E-13
   4.31E-13  6.13E-13  4.07E-13  8.33E-13  2.22E-13  1.48E-13  5.26E-13  4.19E-13
   4.25E-13  2.58E-13  2.34E-13  7.10E-13  6.30E-13  5.82E-13  9.70E-13  5.98E-13
   7.64E-13  1.87E-13  4.41E-13  7.87E-13  1.53E-07  7.02E-08
   0.1571  0.1571  0.0000    1  1.04160E-05 kpt; spin; max resid(k); each band:
   6.62E-13  8.18E-13  6.34E-13  5.27E-13  9.70E-13  6.14E-13  3.57E-13  3.74E-13
   3.70E-13  3.95E-13  2.84E-13  4.96E-13  6.83E-13  3.17E-13  4.56E-13  7.57E-13
   4.40E-13  2.39E-13  5.26E-13  3.08E-13  4.34E-13  3.90E-13  8.91E-13  3.39E-13
   2.61E-13  2.37E-13  3.27E-13  6.39E-13  4.40E-07  1.04E-05
   0.1500  0.1500  0.0000    1  5.32818E-06 kpt; spin; max resid(k); each band:
   6.82E-13  1.88E-13  7.37E-13  5.06E-13  9.55E-13  6.76E-13  4.08E-13  3.19E-13
   4.29E-13  3.84E-13  1.90E-13  5.58E-13  5.48E-13  2.57E-13  4.80E-13  7.83E-13
   3.18E-13  3.02E-13  5.90E-13  3.02E-13  3.46E-13  3.20E-13  7.40E-13  2.97E-13
   1.67E-13  9.54E-13  7.55E-13  4.01E-13  1.99E-07  5.33E-06
   0.1429  0.1429  0.0000    1  1.72121E-06 kpt; spin; max resid(k); each band:
   3.59E-13  6.41E-13  4.55E-13  7.50E-13  6.39E-13  1.98E-13  3.52E-13  1.30E-13
   6.51E-13  3.63E-13  8.64E-13  2.32E-13  4.44E-13  5.73E-13  7.07E-13  7.71E-13
   4.02E-13  3.29E-13  5.44E-13  2.04E-13  3.43E-13  8.02E-13  6.99E-13  5.90E-13
   7.60E-13  8.39E-13  1.92E-13  6.52E-13  4.10E-07  1.72E-06
   0.1357  0.1357  0.0000    1  2.37599E-07 kpt; spin; max resid(k); each band:
   3.98E-13  8.27E-13  3.38E-13  7.10E-13  6.00E-13  8.13E-13  2.33E-13  8.75E-13
   7.40E-13  2.75E-13  8.79E-13  3.01E-13  2.89E-13  4.39E-13  6.66E-13  7.57E-13
   3.62E-13  4.34E-13  4.11E-13  1.74E-13  2.71E-13  5.09E-13  3.30E-13  8.64E-13
   3.90E-13  7.42E-13  7.80E-13  4.43E-13  1.83E-07  2.38E-07
   0.1286  0.1286  0.0000    1  3.43734E-05 kpt; spin; max resid(k); each band:
   9.13E-13  4.11E-13  3.41E-13  5.62E-13  5.91E-13  5.92E-13  5.94E-13  8.38E-13
   5.80E-13  3.38E-13  1.56E-13  5.45E-13  6.22E-13  3.50E-13  8.04E-13  8.82E-13
   9.35E-13  3.94E-13  4.78E-13  9.88E-13  8.19E-13  5.20E-13  7.79E-13  9.04E-13
   6.23E-13  1.93E-13  5.91E-13  6.27E-13  2.88E-05  3.44E-05
   0.1214  0.1214  0.0000    1  3.83308E-05 kpt; spin; max resid(k); each band:
   9.35E-13  3.76E-13  3.13E-13  5.54E-13  5.87E-13  6.06E-13  6.18E-13  7.77E-13
   6.05E-13  3.34E-13  1.67E-13  4.84E-13  5.43E-13  3.00E-13  8.89E-13  4.60E-13
   8.18E-13  3.96E-13  5.39E-13  9.77E-13  7.66E-13  3.26E-13  6.92E-13  7.04E-13
   3.81E-13  9.05E-13  6.83E-13  5.88E-13  2.79E-05  3.83E-05
   0.1143  0.1143  0.0000    1  4.25136E-07 kpt; spin; max resid(k); each band:
   2.96E-13  2.89E-13  3.62E-13  2.24E-13  3.47E-13  2.92E-13  4.06E-13  3.00E-13
   4.44E-13  4.64E-13  9.92E-13  7.28E-13  3.11E-13  2.82E-13  4.57E-13  5.74E-13
   4.60E-13  2.73E-13  4.64E-13  2.56E-13  1.72E-13  7.55E-13  3.21E-13  5.39E-13
   4.23E-13  7.73E-13  4.28E-13  9.04E-13  8.65E-08  4.25E-07
   0.1071  0.1071  0.0000    1  4.69623E-07 kpt; spin; max resid(k); each band:
   3.41E-13  2.74E-13  3.06E-13  7.06E-13  3.81E-13  2.80E-13  4.52E-13  2.43E-13
   7.86E-13  3.17E-13  7.91E-13  3.63E-13  2.08E-13  6.02E-13  7.06E-13  4.11E-13
   3.09E-13  1.75E-13  2.38E-13  2.25E-13  4.20E-13  8.54E-13  2.44E-13  5.33E-13
   2.45E-13  8.21E-13  3.79E-13  5.23E-13  4.70E-07  3.23E-07
   0.1000  0.1000  0.0000    1  6.92562E-06 kpt; spin; max resid(k); each band:
   5.65E-13  6.54E-13  3.30E-13  2.35E-13  3.40E-13  6.41E-13  3.54E-13  3.27E-13
   4.47E-13  8.62E-13  4.87E-13  5.79E-13  2.32E-13  9.25E-13  5.59E-13  2.49E-13
   1.93E-13  6.50E-13  9.60E-13  8.57E-13  2.78E-13  9.47E-13  3.62E-13  2.05E-13
   2.76E-13  6.24E-13  7.85E-13  2.25E-13  6.93E-06  3.05E-08
   0.0929  0.0929  0.0000    1  1.71371E-06 kpt; spin; max resid(k); each band:
   2.60E-13  5.74E-13  9.88E-13  4.65E-13  5.99E-13  9.71E-13  4.94E-13  7.21E-13
   1.18E-13  2.78E-13  2.23E-13  5.47E-13  2.05E-13  3.12E-13  5.22E-13  3.65E-13
   7.37E-13  7.54E-13  5.51E-13  7.23E-13  3.53E-13  1.95E-13  5.10E-13  5.89E-13
   7.52E-13  4.76E-13  2.94E-13  5.31E-13  4.74E-07  1.71E-06
   0.0857  0.0857  0.0000    1  2.95788E-06 kpt; spin; max resid(k); each band:
   2.63E-13  6.50E-13  3.37E-13  5.14E-13  6.20E-13  2.13E-13  5.27E-13  6.60E-13
   1.35E-13  2.88E-13  2.16E-13  5.63E-13  2.06E-13  3.20E-13  4.71E-13  3.73E-13
   7.29E-13  7.70E-13  6.27E-13  1.69E-13  3.42E-13  8.45E-13  4.21E-13  5.60E-13
   5.72E-13  4.64E-13  1.39E-13  4.32E-13  6.44E-07  2.96E-06
   0.0786  0.0786  0.0000    1  3.77550E-06 kpt; spin; max resid(k); each band:
   2.67E-13  7.50E-13  3.76E-13  5.65E-13  6.32E-13  2.23E-13  5.72E-13  6.01E-13
   1.56E-13  2.94E-13  1.96E-13  5.41E-13  2.19E-13  3.30E-13  3.89E-13  4.24E-13
   6.98E-13  8.75E-13  6.89E-13  2.69E-13  3.34E-13  6.91E-13  3.19E-13  4.53E-13
   8.85E-13  4.19E-13  5.51E-13  3.72E-13  8.08E-07  3.78E-06
   0.0714  0.0714  0.0000    1  3.45724E-06 kpt; spin; max resid(k); each band:
   2.68E-13  8.81E-13  4.26E-13  6.13E-13  6.36E-13  2.28E-13  6.28E-13  5.68E-13
   1.68E-13  3.02E-13  1.56E-13  4.89E-13  2.52E-13  3.43E-13  5.78E-13  6.14E-13
   6.57E-13  2.36E-13  7.03E-13  3.64E-13  3.03E-13  6.07E-13  7.72E-13  3.39E-13
   8.47E-13  3.77E-13  4.25E-13  3.51E-13  9.47E-07  3.46E-06
   0.0643  0.0643  0.0000    1  5.18975E-06 kpt; spin; max resid(k); each band:
   3.53E-13  5.58E-13  3.72E-13  7.21E-13  2.42E-13  7.05E-13  2.31E-13  3.79E-13
   2.97E-13  3.58E-13  6.09E-13  2.03E-13  6.31E-13  5.93E-13  8.66E-13  9.99E-13
   3.00E-13  2.46E-13  4.07E-13  5.60E-13  6.65E-13  3.08E-13  9.04E-13  3.09E-13
   8.02E-13  6.10E-13  8.75E-13  8.95E-13  3.84E-06  5.19E-06
   0.0571  0.0571  0.0000    1  2.29273E-06 kpt; spin; max resid(k); each band:
   3.68E-13  3.43E-13  2.61E-13  2.54E-13  6.99E-13  6.38E-13  3.68E-13  2.50E-13
   7.93E-13  5.01E-13  2.63E-13  4.26E-13  5.55E-13  2.66E-13  6.26E-13  7.02E-13
   1.68E-13  4.22E-13  3.42E-13  6.03E-13  7.84E-13  7.32E-13  4.09E-13  3.09E-13
   2.61E-13  3.59E-13  1.97E-13  6.95E-13  1.49E-06  2.29E-06
   0.0500  0.0500  0.0000    1  3.33093E-06 kpt; spin; max resid(k); each band:
   3.66E-13  3.31E-13  2.84E-13  2.65E-13  7.11E-13  6.64E-13  3.77E-13  2.55E-13
   9.15E-13  4.91E-13  2.25E-13  4.83E-13  5.18E-13  2.52E-13  7.17E-13  7.72E-13
   1.84E-13  4.63E-13  3.11E-13  6.70E-13  8.21E-13  7.02E-13  9.63E-13  2.52E-13
   5.61E-13  4.24E-13  8.17E-14  7.70E-13  1.30E-06  3.33E-06
   0.0429  0.0429  0.0000    1  8.58577E-07 kpt; spin; max resid(k); each band:
   3.34E-13  3.00E-13  2.76E-13  7.60E-13  4.24E-13  4.24E-13  3.05E-13  5.36E-13
   7.65E-13  1.37E-13  4.88E-13  6.00E-13  3.37E-13  3.25E-13  4.55E-13  2.86E-13
   2.85E-13  4.19E-13  7.34E-13  3.08E-13  2.74E-13  9.77E-13  2.73E-13  6.97E-13
   7.63E-13  7.77E-13  9.93E-14  5.56E-13  3.62E-07  8.59E-07
   0.0357  0.0357  0.0000    1  6.16877E-07 kpt; spin; max resid(k); each band:
   5.67E-13  3.16E-13  2.90E-13  6.83E-13  2.63E-13  9.96E-13  8.70E-13  3.34E-13
   4.58E-13  6.07E-13  9.64E-13  3.11E-13  4.21E-13  2.05E-13  8.43E-13  5.54E-13
   2.50E-13  3.32E-13  7.15E-13  4.18E-13  8.90E-13  7.80E-13  5.11E-13  5.07E-13
   7.61E-13  2.33E-13  9.41E-13  9.47E-13  6.17E-07  4.13E-07
   0.0286  0.0286  0.0000    1  2.62907E-07 kpt; spin; max resid(k); each band:
   4.07E-13  3.61E-13  2.27E-13  2.67E-13  3.14E-13  6.04E-13  8.99E-13  2.33E-13
   3.64E-13  5.17E-13  8.54E-13  5.27E-13  2.71E-13  2.45E-13  8.86E-13  3.95E-13
   2.31E-13  3.04E-13  5.66E-13  7.15E-13  3.24E-13  5.53E-13  7.58E-13  8.20E-13
   8.91E-13  8.22E-13  4.47E-13  3.83E-13  5.10E-08  2.63E-07
   0.0214  0.0214  0.0000    1  2.22777E-07 kpt; spin; max resid(k); each band:
   2.47E-13  6.57E-13  7.43E-13  8.32E-13  9.77E-13  6.00E-13  2.53E-13  9.83E-13
   2.33E-13  3.13E-13  3.40E-13  4.85E-13  5.76E-13  2.89E-13  9.10E-13  6.11E-13
   2.73E-13  3.06E-13  5.08E-13  4.80E-13  4.59E-13  8.28E-13  8.57E-13  1.96E-13
   3.22E-13  3.53E-13  7.14E-13  4.40E-13  8.66E-08  2.23E-07
   0.0143  0.0143  0.0000    1  4.15180E-08 kpt; spin; max resid(k); each band:
   3.26E-13  5.84E-13  5.15E-13  3.77E-13  6.66E-13  8.71E-13  3.30E-13  8.19E-13
   4.14E-13  4.07E-13  5.31E-13  2.56E-13  8.25E-13  5.86E-13  3.99E-13  1.96E-13
   5.56E-13  7.47E-13  6.20E-13  9.85E-13  7.76E-13  2.88E-13  6.65E-13  5.63E-13
   7.88E-13  2.89E-13  3.42E-13  8.54E-13  4.80E-09  4.15E-08
   0.0071  0.0071  0.0000    1  7.88752E-10 kpt; spin; max resid(k); each band:
   3.49E-13  7.64E-13  4.54E-13  3.98E-13  7.10E-13  8.06E-13  4.96E-13  9.16E-13
   4.19E-13  3.83E-13  5.52E-13  2.47E-13  8.83E-13  4.39E-13  4.56E-13  2.96E-13
   6.26E-13  7.57E-13  5.50E-13  8.35E-13  9.38E-13  3.67E-13  9.04E-13  3.26E-13
   8.71E-13  2.83E-13  7.32E-13  6.75E-13  3.58E-10  7.89E-10
   0.0000  0.0000  0.0000    1  9.32187E-13 kpt; spin; max resid(k); each band:
   3.84E-13  5.38E-13  3.04E-13  3.57E-13  8.55E-13  6.80E-13  2.28E-13  3.39E-13
   3.70E-13  1.44E-13  4.62E-13  6.02E-13  5.85E-13  8.94E-13  6.13E-13  1.93E-13
   5.48E-13  7.73E-13  2.20E-13  9.08E-13  2.22E-13  4.33E-13  7.96E-13  5.06E-13
   7.27E-13  8.97E-13  3.84E-13  2.65E-13  3.67E-13  9.32E-13
 reduced coordinates (array xred) for    5 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.500000000000      0.500000000000      0.500000000000
       0.500000000000      0.000000000000      0.000000000000
       0.000000000000      0.500000000000      0.000000000000
       0.000000000000      0.000000000000      0.500000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      1.92104556148385     1.92104556148385     1.92104556148385
    3      1.92104556148385     0.00000000000000     0.00000000000000
    4      0.00000000000000     1.92104556148385     0.00000000000000
    5      0.00000000000000     0.00000000000000     1.92104556148385
 length scales=  7.260500000000  7.260500000000  7.260500000000 bohr
              =  3.842091122968  3.842091122968  3.842091122968 angstroms
 prteigrs : about to open file tdmft_5o_DS3_EIG
 Eigenvalues (hartree) for nkpt= 261  k points:
 kpt#   1, nband= 30, wtk=  1.00000, kpt=  0.5000  0.5000  0.5000 (reduced coord)
  -2.10224   -1.15427   -1.15427   -1.15427   -0.96356   -0.36978   -0.36978   -0.36978
  -0.31919   -0.31919   -0.31919    0.02713    0.05419    0.05419    0.07592    0.07592
   0.07592    0.21920    0.21920    0.21920    0.35033    0.35033    0.35033    0.48352
   0.48352    0.48352    0.49486    0.49486    0.59107    0.59109
 kpt#   2, nband= 30, wtk=  1.00000, kpt=  0.4944  0.4944  0.4944 (reduced coord)
  -2.10224   -1.15427   -1.15427   -1.15427   -0.96356   -0.36984   -0.36979   -0.36979
  -0.31917   -0.31917   -0.31913    0.02717    0.05421    0.05421    0.07590    0.07593
   0.07593    0.21916    0.21916    0.21919    0.35030    0.35031    0.35031    0.48356
   0.48356    0.48358    0.49484    0.49484    0.59103    0.59106
 kpt#   3, nband= 30, wtk=  1.00000, kpt=  0.4889  0.4889  0.4889 (reduced coord)
  -2.10224   -1.15427   -1.15427   -1.15427   -0.96356   -0.37000   -0.36982   -0.36982
  -0.31912   -0.31912   -0.31898    0.02727    0.05427    0.05427    0.07584    0.07596
   0.07596    0.21905    0.21905    0.21914    0.35023    0.35025    0.35025    0.48366
   0.48366    0.48375    0.49478    0.49478    0.59091    0.59096
 kpt#   4, nband= 30, wtk=  1.00000, kpt=  0.4833  0.4833  0.4833 (reduced coord)
  -2.10224   -1.15427   -1.15427   -1.15427   -0.96357   -0.37028   -0.36988   -0.36988
  -0.31904   -0.31904   -0.31871    0.02744    0.05436    0.05436    0.07573    0.07601
   0.07601    0.21885    0.21885    0.21906    0.35012    0.35014    0.35014    0.48383
   0.48383    0.48403    0.49470    0.49470    0.59072    0.59075
 kpt#   5, nband= 30, wtk=  1.00000, kpt=  0.4778  0.4778  0.4778 (reduced coord)
  -2.10224   -1.15426   -1.15426   -1.15426   -0.96357   -0.37066   -0.36995   -0.36995
  -0.31893   -0.31893   -0.31835    0.02768    0.05449    0.05449    0.07558    0.07608
   0.07608    0.21858    0.21858    0.21895    0.34995    0.35000    0.35000    0.48404
   0.48404    0.48442    0.49460    0.49460    0.59045    0.59047
 kpt#   6, nband= 30, wtk=  1.00000, kpt=  0.4722  0.4722  0.4722 (reduced coord)
  -2.10224   -1.15426   -1.15426   -1.15426   -0.96358   -0.37114   -0.37005   -0.37005
  -0.31879   -0.31879   -0.31790    0.02798    0.05465    0.05465    0.07540    0.07617
   0.07617    0.21824    0.21824    0.21881    0.34974    0.34981    0.34981    0.48429
   0.48429    0.48492    0.49450    0.49450    0.59010    0.59037
 kpt#   7, nband= 30, wtk=  1.00000, kpt=  0.4667  0.4667  0.4667 (reduced coord)
  -2.10225   -1.15426   -1.15426   -1.15426   -0.96359   -0.37172   -0.37016   -0.37016
  -0.31862   -0.31862   -0.31735    0.02835    0.05485    0.05485    0.07518    0.07627
   0.07627    0.21782    0.21782    0.21864    0.34948    0.34959    0.34959    0.48454
   0.48454    0.48552    0.49442    0.49442    0.58968    0.58979
 kpt#   8, nband= 30, wtk=  1.00000, kpt=  0.4611  0.4611  0.4611 (reduced coord)
  -2.10225   -1.15425   -1.15425   -1.15425   -0.96360   -0.37238   -0.37030   -0.37030
  -0.31842   -0.31842   -0.31673    0.02878    0.05509    0.05509    0.07493    0.07640
   0.07640    0.21734    0.21734    0.21843    0.34918    0.34932    0.34932    0.48476
   0.48476    0.48622    0.49439    0.49439    0.58919    0.58926
 kpt#   9, nband= 30, wtk=  1.00000, kpt=  0.4556  0.4556  0.4556 (reduced coord)
  -2.10225   -1.15425   -1.15425   -1.15425   -0.96361   -0.37312   -0.37045   -0.37045
  -0.31819   -0.31819   -0.31604    0.02928    0.05536    0.05536    0.07464    0.07655
   0.07655    0.21678    0.21678    0.21820    0.34883    0.34901    0.34901    0.48491
   0.48491    0.48701    0.49446    0.49446    0.58862    0.58868
 kpt#  10, nband= 30, wtk=  1.00000, kpt=  0.4500  0.4500  0.4500 (reduced coord)
  -2.10225   -1.15424   -1.15424   -1.15424   -0.96363   -0.37394   -0.37062   -0.37062
  -0.31793   -0.31793   -0.31528    0.02984    0.05567    0.05567    0.07433    0.07672
   0.07672    0.21616    0.21616    0.21794    0.34844    0.34867    0.34867    0.48494
   0.48494    0.48788    0.49466    0.49466    0.58798    0.58803
 kpt#  11, nband= 30, wtk=  1.00000, kpt=  0.4444  0.4444  0.4444 (reduced coord)
  -2.10225   -1.15424   -1.15423   -1.15423   -0.96364   -0.37481   -0.37081   -0.37081
  -0.31765   -0.31765   -0.31446    0.03045    0.05601    0.05601    0.07400    0.07691
   0.07691    0.21548    0.21548    0.21764    0.34800    0.34828    0.34828    0.48482
   0.48482    0.48884    0.49502    0.49502    0.58727    0.58730
 kpt#  12, nband= 30, wtk=  1.00000, kpt=  0.4389  0.4389  0.4389 (reduced coord)
  -2.10225   -1.15423   -1.15423   -1.15423   -0.96366   -0.37574   -0.37101   -0.37101
  -0.31735   -0.31735   -0.31360    0.03112    0.05639    0.05639    0.07366    0.07712
   0.07712    0.21474    0.21474    0.21732    0.34752    0.34785    0.34785    0.48452
   0.48452    0.48987    0.49557    0.49557    0.58649    0.58649
 kpt#  13, nband= 30, wtk=  1.00000, kpt=  0.4333  0.4333  0.4333 (reduced coord)
  -2.10225   -1.15422   -1.15422   -1.15422   -0.96368   -0.37673   -0.37123   -0.37123
  -0.31702   -0.31702   -0.31270    0.03185    0.05680    0.05680    0.07330    0.07735
   0.07735    0.21395    0.21395    0.21697    0.34700    0.34739    0.34739    0.48405
   0.48405    0.49096    0.49629    0.49629    0.58565    0.58565
 kpt#  14, nband= 30, wtk=  1.00000, kpt=  0.4278  0.4278  0.4278 (reduced coord)
  -2.10225   -1.15421   -1.15421   -1.15421   -0.96370   -0.37775   -0.37145   -0.37145
  -0.31667   -0.31667   -0.31176    0.03263    0.05724    0.05724    0.07294    0.07761
   0.07761    0.21310    0.21310    0.21659    0.34644    0.34689    0.34689    0.48342
   0.48342    0.49212    0.49717    0.49717    0.58474    0.58477
 kpt#  15, nband= 30, wtk=  1.00000, kpt=  0.4222  0.4222  0.4222 (reduced coord)
  -2.10225   -1.15420   -1.15420   -1.15420   -0.96372   -0.37882   -0.37169   -0.37169
  -0.31631   -0.31631   -0.31079    0.03345    0.05772    0.05772    0.07258    0.07788
   0.07788    0.21221    0.21221    0.21619    0.34584    0.34635    0.34635    0.48264
   0.48264    0.49332    0.49819    0.49819    0.58378    0.58380
 kpt#  16, nband= 30, wtk=  1.00000, kpt=  0.4167  0.4167  0.4167 (reduced coord)
  -2.10225   -1.15419   -1.15419   -1.15419   -0.96374   -0.37991   -0.37194   -0.37194
  -0.31593   -0.31593   -0.30981    0.03431    0.05823    0.05823    0.07224    0.07819
   0.07819    0.21127    0.21127    0.21576    0.34519    0.34577    0.34577    0.48172
   0.48172    0.49456    0.49932    0.49932    0.58275    0.58277
 kpt#  17, nband= 30, wtk=  1.00000, kpt=  0.4111  0.4111  0.4111 (reduced coord)
  -2.10225   -1.15418   -1.15418   -1.15418   -0.96376   -0.38103   -0.37220   -0.37220
  -0.31553   -0.31553   -0.30881    0.03521    0.05877    0.05877    0.07192    0.07851
   0.07851    0.21030    0.21030    0.21530    0.34451    0.34515    0.34515    0.48069
   0.48069    0.49583    0.50055    0.50055    0.58168    0.58169
 kpt#  18, nband= 30, wtk=  1.00000, kpt=  0.4056  0.4056  0.4056 (reduced coord)
  -2.10225   -1.15417   -1.15417   -1.15417   -0.96379   -0.38217   -0.37246   -0.37246
  -0.31512   -0.31512   -0.30780    0.03614    0.05935    0.05935    0.07162    0.07887
   0.07887    0.20930    0.20930    0.21482    0.34379    0.34450    0.34450    0.47956
   0.47956    0.49712    0.50184    0.50184    0.58056    0.58056
 kpt#  19, nband= 30, wtk=  1.00000, kpt=  0.4000  0.4000  0.4000 (reduced coord)
  -2.10225   -1.15416   -1.15416   -1.15416   -0.96382   -0.38333   -0.37273   -0.37273
  -0.31470   -0.31470   -0.30678    0.03709    0.05995    0.05995    0.07137    0.07925
   0.07925    0.20826    0.20826    0.21431    0.34303    0.34381    0.34381    0.47833
   0.47833    0.49842    0.50318    0.50318    0.57939    0.57939
 kpt#  20, nband= 30, wtk=  1.00000, kpt=  0.3944  0.3944  0.3944 (reduced coord)
  -2.10225   -1.15415   -1.15414   -1.15414   -0.96384   -0.38450   -0.37300   -0.37300
  -0.31426   -0.31426   -0.30577    0.03806    0.06058    0.06058    0.07116    0.07965
   0.07965    0.20720    0.20720    0.21378    0.34223    0.34309    0.34309    0.47702
   0.47702    0.49972    0.50455    0.50455    0.57819    0.57819
 kpt#  21, nband= 30, wtk=  1.00000, kpt=  0.3889  0.3889  0.3889 (reduced coord)
  -2.10226   -1.15414   -1.15413   -1.15413   -0.96387   -0.38569   -0.37328   -0.37328
  -0.31382   -0.31382   -0.30476    0.03904    0.06124    0.06124    0.07102    0.08008
   0.08008    0.20611    0.20611    0.21323    0.34140    0.34233    0.34233    0.47563
   0.47563    0.50102    0.50595    0.50595    0.57696    0.57696
 kpt#  22, nband= 30, wtk=  1.00000, kpt=  0.3833  0.3833  0.3833 (reduced coord)
  -2.10226   -1.15413   -1.15412   -1.15412   -0.96390   -0.38687   -0.37356   -0.37356
  -0.31338   -0.31338   -0.30376    0.04002    0.06193    0.06193    0.07095    0.08054
   0.08054    0.20501    0.20501    0.21266    0.34054    0.34154    0.34154    0.47416
   0.47416    0.50229    0.50734    0.50734    0.57570    0.57571
 kpt#  23, nband= 30, wtk=  1.00000, kpt=  0.3778  0.3778  0.3778 (reduced coord)
  -2.10226   -1.15411   -1.15410   -1.15410   -0.96394   -0.38806   -0.37384   -0.37384
  -0.31292   -0.31292   -0.30277    0.04099    0.06264    0.06264    0.07097    0.08103
   0.08103    0.20390    0.20390    0.21206    0.33964    0.34072    0.34072    0.47262
   0.47262    0.50354    0.50872    0.50872    0.57444    0.57444
 kpt#  24, nband= 30, wtk=  1.00000, kpt=  0.3722  0.3722  0.3722 (reduced coord)
  -2.10226   -1.15410   -1.15409   -1.15409   -0.96397   -0.38925   -0.37412   -0.37412
  -0.31247   -0.31247   -0.30180    0.04193    0.06338    0.06338    0.07109    0.08156
   0.08156    0.20278    0.20278    0.21145    0.33870    0.33986    0.33986    0.47102
   0.47102    0.50476    0.51006    0.51006    0.57317    0.57317
 kpt#  25, nband= 30, wtk=  1.00000, kpt=  0.3667  0.3667  0.3667 (reduced coord)
  -2.10226   -1.15408   -1.15407   -1.15407   -0.96400   -0.39044   -0.37440   -0.37440
  -0.31201   -0.31201   -0.30086    0.04285    0.06414    0.06414    0.07132    0.08211
   0.08211    0.20165    0.20165    0.21081    0.33774    0.33897    0.33897    0.46935
   0.46935    0.50594    0.51135    0.51135    0.57190    0.57190
 kpt#  26, nband= 30, wtk=  1.00000, kpt=  0.3611  0.3611  0.3611 (reduced coord)
  -2.10226   -1.15407   -1.15406   -1.15406   -0.96404   -0.39162   -0.37468   -0.37468
  -0.31156   -0.31156   -0.29993    0.04373    0.06492    0.06492    0.07168    0.08269
   0.08269    0.20053    0.20053    0.21016    0.33674    0.33806    0.33806    0.46763
   0.46763    0.50706    0.51257    0.51257    0.57065    0.57065
 kpt#  27, nband= 30, wtk=  1.00000, kpt=  0.3556  0.3556  0.3556 (reduced coord)
  -2.10226   -1.15405   -1.15404   -1.15404   -0.96408   -0.39279   -0.37495   -0.37495
  -0.31110   -0.31110   -0.29903    0.04456    0.06573    0.06573    0.07217    0.08331
   0.08331    0.19940    0.19940    0.20949    0.33571    0.33711    0.33711    0.46584
   0.46584    0.50813    0.51370    0.51370    0.56944    0.56944
 kpt#  28, nband= 30, wtk=  1.00000, kpt=  0.3500  0.3500  0.3500 (reduced coord)
  -2.10226   -1.15404   -1.15403   -1.15403   -0.96411   -0.39395   -0.37523   -0.37523
  -0.31065   -0.31065   -0.29816    0.04534    0.06655    0.06655    0.07281    0.08396
   0.08396    0.19828    0.19828    0.20881    0.33466    0.33613    0.33613    0.46401
   0.46401    0.50914    0.51472    0.51472    0.56826    0.56826
 kpt#  29, nband= 30, wtk=  1.00000, kpt=  0.3444  0.3444  0.3444 (reduced coord)
  -2.10227   -1.15402   -1.15401   -1.15401   -0.96415   -0.39511   -0.37549   -0.37549
  -0.31021   -0.31021   -0.29733    0.04606    0.06739    0.06739    0.07360    0.08465
   0.08465    0.19718    0.19718    0.20811    0.33357    0.33513    0.33513    0.46212
   0.46212    0.51008    0.51561    0.51561    0.56715    0.56715
 kpt#  30, nband= 30, wtk=  1.00000, kpt=  0.3389  0.3389  0.3389 (reduced coord)
  -2.10227   -1.15401   -1.15399   -1.15399   -0.96419   -0.39624   -0.37575   -0.37575
  -0.30977   -0.30977   -0.29652    0.04673    0.06825    0.06825    0.07455    0.08537
   0.08537    0.19609    0.19609    0.20739    0.33245    0.33410    0.33410    0.46018
   0.46018    0.51095    0.51635    0.51635    0.56611    0.56611
 kpt#  31, nband= 30, wtk=  1.00000, kpt=  0.3333  0.3333  0.3333 (reduced coord)
  -2.10227   -1.15399   -1.15397   -1.15397   -0.96423   -0.39737   -0.37601   -0.37601
  -0.30933   -0.30933   -0.29576    0.04734    0.06913    0.06913    0.07564    0.08613
   0.08613    0.19501    0.19501    0.20667    0.33131    0.33304    0.33304    0.45819
   0.45819    0.51174    0.51692    0.51692    0.56516    0.56516
 kpt#  32, nband= 30, wtk=  1.00000, kpt=  0.3278  0.3278  0.3278 (reduced coord)
  -2.10227   -1.15397   -1.15396   -1.15396   -0.96428   -0.39848   -0.37625   -0.37625
  -0.30891   -0.30891   -0.29503    0.04791    0.07001    0.07001    0.07688    0.08693
   0.08693    0.19396    0.19396    0.20593    0.33014    0.33195    0.33195    0.45616
   0.45616    0.51246    0.51730    0.51730    0.56430    0.56430
 kpt#  33, nband= 30, wtk=  1.00000, kpt=  0.3222  0.3222  0.3222 (reduced coord)
  -2.10227   -1.15395   -1.15394   -1.15394   -0.96432   -0.39956   -0.37649   -0.37649
  -0.30850   -0.30850   -0.29435    0.04844    0.07091    0.07091    0.07826    0.08777
   0.08777    0.19293    0.19293    0.20518    0.32894    0.33085    0.33085    0.45408
   0.45408    0.51310    0.51748    0.51748    0.56356    0.56356
 kpt#  34, nband= 30, wtk=  1.00000, kpt=  0.3167  0.3167  0.3167 (reduced coord)
  -2.10227   -1.15394   -1.15392   -1.15392   -0.96436   -0.40063   -0.37673   -0.37673
  -0.30809   -0.30809   -0.29371    0.04894    0.07182    0.07182    0.07977    0.08865
   0.08865    0.19193    0.19193    0.20442    0.32772    0.32971    0.32971    0.45197
   0.45197    0.51366    0.51744    0.51744    0.56293    0.56293
 kpt#  35, nband= 30, wtk=  1.00000, kpt=  0.3111  0.3111  0.3111 (reduced coord)
  -2.10228   -1.15392   -1.15390   -1.15390   -0.96441   -0.40168   -0.37695   -0.37695
  -0.30770   -0.30770   -0.29311    0.04942    0.07274    0.07274    0.08141    0.08957
   0.08957    0.19096    0.19096    0.20365    0.32647    0.32856    0.32856    0.44981
   0.44981    0.51414    0.51717    0.51717    0.56242    0.56242
 kpt#  36, nband= 30, wtk=  1.00000, kpt=  0.3056  0.3056  0.3056 (reduced coord)
  -2.10228   -1.15390   -1.15388   -1.15388   -0.96445   -0.40271   -0.37716   -0.37716
  -0.30732   -0.30732   -0.29256    0.04990    0.07366    0.07366    0.08316    0.09053
   0.09053    0.19003    0.19003    0.20288    0.32520    0.32738    0.32738    0.44762
   0.44762    0.51454    0.51668    0.51668    0.56202    0.56202
 kpt#  37, nband= 30, wtk=  1.00000, kpt=  0.3000  0.3000  0.3000 (reduced coord)
  -2.10228   -1.15388   -1.15386   -1.15386   -0.96450   -0.40372   -0.37737   -0.37737
  -0.30696   -0.30696   -0.29206    0.05037    0.07459    0.07459    0.08501    0.09153
   0.09153    0.18913    0.18913    0.20210    0.32391    0.32619    0.32619    0.44540
   0.44540    0.51486    0.51598    0.51598    0.56173    0.56173
 kpt#  38, nband= 30, wtk=  1.00000, kpt=  0.2944  0.2944  0.2944 (reduced coord)
  -2.10228   -1.15386   -1.15384   -1.15384   -0.96454   -0.40470   -0.37756   -0.37756
  -0.30661   -0.30661   -0.29160    0.05086    0.07553    0.07553    0.08696    0.09258
   0.09258    0.18827    0.18827    0.20131    0.32260    0.32497    0.32497    0.44314
   0.44314    0.51506    0.51506    0.51510    0.56153    0.56153
 kpt#  39, nband= 30, wtk=  1.00000, kpt=  0.2889  0.2889  0.2889 (reduced coord)
  -2.10228   -1.15384   -1.15382   -1.15382   -0.96459   -0.40566   -0.37775   -0.37775
  -0.30628   -0.30628   -0.29120    0.05136    0.07646    0.07646    0.08900    0.09367
   0.09367    0.18745    0.18745    0.20052    0.32126    0.32373    0.32373    0.44085
   0.44085    0.51394    0.51394    0.51526    0.56140    0.56140
 kpt#  40, nband= 30, wtk=  1.00000, kpt=  0.2833  0.2833  0.2833 (reduced coord)
  -2.10228   -1.15382   -1.15380   -1.15380   -0.96464   -0.40659   -0.37792   -0.37792
  -0.30596   -0.30596   -0.29084    0.05189    0.07740    0.07740    0.09111    0.09480
   0.09480    0.18668    0.18668    0.19972    0.31990    0.32247    0.32247    0.43853
   0.43853    0.51264    0.51264    0.51535    0.56133    0.56133
 kpt#  41, nband= 30, wtk=  1.00000, kpt=  0.2778  0.2778  0.2778 (reduced coord)
  -2.10229   -1.15380   -1.15378   -1.15378   -0.96469   -0.40750   -0.37808   -0.37808
  -0.30566   -0.30566   -0.29054    0.05245    0.07833    0.07833    0.09330    0.09597
   0.09597    0.18595    0.18595    0.19892    0.31853    0.32120    0.32120    0.43618
   0.43618    0.51118    0.51118    0.51537    0.56130    0.56130
 kpt#  42, nband= 30, wtk=  1.00000, kpt=  0.2722  0.2722  0.2722 (reduced coord)
  -2.10229   -1.15378   -1.15376   -1.15376   -0.96474   -0.40838   -0.37823   -0.37823
  -0.30538   -0.30538   -0.29028    0.05305    0.07926    0.07926    0.09556    0.09719
   0.09719    0.18528    0.18528    0.19812    0.31713    0.31991    0.31991    0.43381
   0.43381    0.50957    0.50957    0.51531    0.56129    0.56129
 kpt#  43, nband= 30, wtk=  1.00000, kpt=  0.2667  0.2667  0.2667 (reduced coord)
  -2.10229   -1.15376   -1.15374   -1.15374   -0.96479   -0.40923   -0.37837   -0.37837
  -0.30511   -0.30511   -0.29008    0.05369    0.08019    0.08019    0.09787    0.09846
   0.09846    0.18465    0.18465    0.19732    0.31572    0.31860    0.31860    0.43142
   0.43142    0.50783    0.50783    0.51519    0.56128    0.56128
 kpt#  44, nband= 30, wtk=  1.00000, kpt=  0.2611  0.2611  0.2611 (reduced coord)
  -2.10229   -1.15374   -1.15372   -1.15372   -0.96484   -0.41006   -0.37850   -0.37850
  -0.30487   -0.30487   -0.28993    0.05438    0.08111    0.08111    0.09976    0.09976
   0.10025    0.18408    0.18408    0.19652    0.31430    0.31728    0.31728    0.42901
   0.42901    0.50597    0.50597    0.51500    0.56125    0.56125
 kpt#  45, nband= 30, wtk=  1.00000, kpt=  0.2556  0.2556  0.2556 (reduced coord)
  -2.10229   -1.15372   -1.15370   -1.15370   -0.96489   -0.41085   -0.37862   -0.37862
  -0.30464   -0.30464   -0.28982    0.05511    0.08202    0.08202    0.10111    0.10111
   0.10267    0.18357    0.18357    0.19572    0.31285    0.31594    0.31594    0.42657
   0.42657    0.50400    0.50400    0.51474    0.56120    0.56120
 kpt#  46, nband= 30, wtk=  1.00000, kpt=  0.2500  0.2500  0.2500 (reduced coord)
  -2.10229   -1.15370   -1.15368   -1.15368   -0.96494   -0.41162   -0.37873   -0.37873
  -0.30443   -0.30443   -0.28977    0.05589    0.08293    0.08293    0.10250    0.10250
   0.10513    0.18311    0.18311    0.19493    0.31140    0.31459    0.31459    0.42413
   0.42413    0.50195    0.50195    0.51443    0.56111    0.56111
 kpt#  47, nband= 30, wtk=  1.00000, kpt=  0.2444  0.2444  0.2444 (reduced coord)
  -2.10230   -1.15368   -1.15366   -1.15366   -0.96499   -0.41236   -0.37882   -0.37882
  -0.30424   -0.30424   -0.28977    0.05672    0.08383    0.08383    0.10393    0.10393
   0.10764    0.18271    0.18271    0.19413    0.30993    0.31323    0.31323    0.42166
   0.42166    0.49981    0.49981    0.51405    0.56098    0.56098
 kpt#  48, nband= 30, wtk=  1.00000, kpt=  0.2389  0.2389  0.2389 (reduced coord)
  -2.10230   -1.15366   -1.15364   -1.15364   -0.96504   -0.41307   -0.37890   -0.37890
  -0.30408   -0.30408   -0.28981    0.05760    0.08471    0.08471    0.10540    0.10540
   0.11019    0.18237    0.18237    0.19335    0.30845    0.31185    0.31185    0.41918
   0.41918    0.49761    0.49761    0.51362    0.56079    0.56079
 kpt#  49, nband= 30, wtk=  1.00000, kpt=  0.2333  0.2333  0.2333 (reduced coord)
  -2.10230   -1.15364   -1.15362   -1.15362   -0.96509   -0.41375   -0.37897   -0.37897
  -0.30393   -0.30393   -0.28990    0.05854    0.08558    0.08558    0.10691    0.10691
   0.11278    0.18210    0.18210    0.19256    0.30696    0.31046    0.31046    0.41670
   0.41670    0.49535    0.49535    0.51313    0.56054    0.56054
 kpt#  50, nband= 30, wtk=  1.00000, kpt=  0.2278  0.2278  0.2278 (reduced coord)
  -2.10230   -1.15362   -1.15360   -1.15360   -0.96515   -0.41441   -0.37903   -0.37903
  -0.30380   -0.30380   -0.29004    0.05952    0.08644    0.08644    0.10847    0.10847
   0.11539    0.18188    0.18188    0.19179    0.30546    0.30906    0.30906    0.41420
   0.41420    0.49303    0.49303    0.51258    0.56023    0.56023
 kpt#  51, nband= 30, wtk=  1.00000, kpt=  0.2222  0.2222  0.2222 (reduced coord)
  -2.10230   -1.15360   -1.15357   -1.15357   -0.96520   -0.41503   -0.37908   -0.37908
  -0.30369   -0.30369   -0.29022    0.06055    0.08728    0.08728    0.11006    0.11006
   0.11804    0.18173    0.18173    0.19102    0.30395    0.30765    0.30765    0.41170
   0.41170    0.49067    0.49067    0.51197    0.55985    0.55985
 kpt#  52, nband= 30, wtk=  1.00000, kpt=  0.2167  0.2167  0.2167 (reduced coord)
  -2.10230   -1.15358   -1.15355   -1.15355   -0.96525   -0.41562   -0.37912   -0.37912
  -0.30360   -0.30360   -0.29044    0.06164    0.08810    0.08810    0.11168    0.11168
   0.12071    0.18165    0.18165    0.19025    0.30244    0.30623    0.30623    0.40919
   0.40919    0.48827    0.48827    0.51131    0.55941    0.55941
 kpt#  53, nband= 30, wtk=  1.00000, kpt=  0.2111  0.2111  0.2111 (reduced coord)
  -2.10231   -1.15356   -1.15353   -1.15353   -0.96530   -0.41619   -0.37914   -0.37914
  -0.30353   -0.30353   -0.29071    0.06276    0.08891    0.08891    0.11335    0.11335
   0.12340    0.18163    0.18163    0.18950    0.30092    0.30480    0.30480    0.40668
   0.40668    0.48584    0.48584    0.51059    0.55891    0.55891
 kpt#  54, nband= 30, wtk=  1.00000, kpt=  0.2056  0.2056  0.2056 (reduced coord)
  -2.10231   -1.15354   -1.15351   -1.15351   -0.96535   -0.41673   -0.37916   -0.37916
  -0.30347   -0.30347   -0.29101    0.06393    0.08969    0.08969    0.11505    0.11505
   0.12611    0.18167    0.18167    0.18876    0.29940    0.30336    0.30336    0.40417
   0.40417    0.48338    0.48338    0.50982    0.55834    0.55834
 kpt#  55, nband= 30, wtk=  1.00000, kpt=  0.2000  0.2000  0.2000 (reduced coord)
  -2.10231   -1.15352   -1.15349   -1.15349   -0.96541   -0.41723   -0.37916   -0.37916
  -0.30344   -0.30344   -0.29135    0.06515    0.09046    0.09046    0.11678    0.11678
   0.12884    0.18178    0.18178    0.18802    0.29788    0.30191    0.30191    0.40167
   0.40167    0.48090    0.48090    0.50898    0.55771    0.55771
 kpt#  56, nband= 30, wtk=  1.00000, kpt=  0.1944  0.1944  0.1944 (reduced coord)
  -2.10231   -1.15350   -1.15347   -1.15347   -0.96546   -0.41771   -0.37916   -0.37916
  -0.30342   -0.30342   -0.29173    0.06640    0.09120    0.09120    0.11855    0.11855
   0.13159    0.18195    0.18195    0.18730    0.29636    0.30045    0.30045    0.39917
   0.39917    0.47841    0.47841    0.50808    0.55703    0.55703
 kpt#  57, nband= 30, wtk=  1.00000, kpt=  0.1889  0.1889  0.1889 (reduced coord)
  -2.10231   -1.15348   -1.15345   -1.15345   -0.96551   -0.41816   -0.37914   -0.37914
  -0.30342   -0.30342   -0.29214    0.06768    0.09192    0.09192    0.12035    0.12035
   0.13434    0.18219    0.18219    0.18659    0.29483    0.29898    0.29898    0.39667
   0.39667    0.47590    0.47590    0.50711    0.55629    0.55630
 kpt#  58, nband= 30, wtk=  1.00000, kpt=  0.1833  0.1833  0.1833 (reduced coord)
  -2.10231   -1.15346   -1.15344   -1.15344   -0.96556   -0.41859   -0.37911   -0.37911
  -0.30344   -0.30344   -0.29258    0.06900    0.09261    0.09261    0.12218    0.12218
   0.13711    0.18249    0.18249    0.18589    0.29331    0.29751    0.29751    0.39419
   0.39419    0.47339    0.47339    0.50608    0.55551    0.55551
 kpt#  59, nband= 30, wtk=  1.00000, kpt=  0.1778  0.1778  0.1778 (reduced coord)
  -2.10232   -1.15344   -1.15342   -1.15342   -0.96561   -0.41898   -0.37908   -0.37908
  -0.30347   -0.30347   -0.29305    0.07035    0.09328    0.09328    0.12404    0.12404
   0.13988    0.18285    0.18285    0.18520    0.29180    0.29603    0.29603    0.39172
   0.39172    0.47088    0.47088    0.50497    0.55468    0.55468
 kpt#  60, nband= 30, wtk=  1.00000, kpt=  0.1722  0.1722  0.1722 (reduced coord)
  -2.10232   -1.15342   -1.15340   -1.15340   -0.96566   -0.41935   -0.37904   -0.37904
  -0.30352   -0.30352   -0.29354    0.07172    0.09393    0.09393    0.12592    0.12592
   0.14265    0.18328    0.18328    0.18453    0.29028    0.29454    0.29454    0.38927
   0.38927    0.46837    0.46837    0.50379    0.55382    0.55382
 kpt#  61, nband= 30, wtk=  1.00000, kpt=  0.1667  0.1667  0.1667 (reduced coord)
  -2.10232   -1.15340   -1.15338   -1.15338   -0.96571   -0.41969   -0.37899   -0.37899
  -0.30358   -0.30358   -0.29405    0.07311    0.09455    0.09455    0.12783    0.12783
   0.14543    0.18376    0.18376    0.18388    0.28878    0.29304    0.29304    0.38683
   0.38683    0.46588    0.46588    0.50253    0.55292    0.55293
 kpt#  62, nband= 30, wtk=  1.00000, kpt=  0.1611  0.1611  0.1611 (reduced coord)
  -2.10232   -1.15339   -1.15336   -1.15336   -0.96576   -0.42001   -0.37893   -0.37893
  -0.30366   -0.30366   -0.29459    0.07452    0.09514    0.09514    0.12976    0.12976
   0.14820    0.18323    0.18430    0.18430    0.28728    0.29154    0.29154    0.38442
   0.38442    0.46339    0.46339    0.50119    0.55200    0.55200
 kpt#  63, nband= 30, wtk=  1.00000, kpt=  0.1556  0.1556  0.1556 (reduced coord)
  -2.10232   -1.15337   -1.15334   -1.15334   -0.96581   -0.42030   -0.37886   -0.37886
  -0.30375   -0.30375   -0.29514    0.07594    0.09570    0.09570    0.13172    0.13172
   0.15097    0.18261    0.18489    0.18489    0.28579    0.29003    0.29003    0.38203
   0.38203    0.46092    0.46092    0.49977    0.55105    0.55106
 kpt#  64, nband= 30, wtk=  1.00000, kpt=  0.1500  0.1500  0.1500 (reduced coord)
  -2.10232   -1.15335   -1.15333   -1.15333   -0.96585   -0.42057   -0.37879   -0.37879
  -0.30385   -0.30385   -0.29571    0.07737    0.09624    0.09624    0.13369    0.13369
   0.15373    0.18200    0.18553    0.18553    0.28431    0.28852    0.28852    0.37966
   0.37966    0.45847    0.45847    0.49827    0.55010    0.55011
 kpt#  65, nband= 30, wtk=  1.00000, kpt=  0.1444  0.1444  0.1444 (reduced coord)
  -2.10232   -1.15333   -1.15331   -1.15331   -0.96590   -0.42082   -0.37871   -0.37871
  -0.30396   -0.30396   -0.29629    0.07880    0.09675    0.09675    0.13567    0.13567
   0.15648    0.18140    0.18622    0.18622    0.28285    0.28700    0.28700    0.37733
   0.37733    0.45606    0.45606    0.49668    0.54912    0.54970
 kpt#  66, nband= 30, wtk=  1.00000, kpt=  0.1389  0.1389  0.1389 (reduced coord)
  -2.10233   -1.15331   -1.15329   -1.15329   -0.96595   -0.42104   -0.37863   -0.37863
  -0.30408   -0.30408   -0.29688    0.08022    0.09724    0.09724    0.13767    0.13767
   0.15921    0.18083    0.18696    0.18696    0.28140    0.28548    0.28548    0.37503
   0.37503    0.45367    0.45367    0.49501    0.54815    0.54816
 kpt#  67, nband= 30, wtk=  1.00000, kpt=  0.1333  0.1333  0.1333 (reduced coord)
  -2.10233   -1.15330   -1.15328   -1.15328   -0.96599   -0.42125   -0.37854   -0.37854
  -0.30421   -0.30421   -0.29747    0.08164    0.09769    0.09769    0.13967    0.13967
   0.16192    0.18027    0.18774    0.18774    0.27996    0.28395    0.28395    0.37277
   0.37277    0.45132    0.45132    0.49327    0.54717    0.54723
 kpt#  68, nband= 30, wtk=  1.00000, kpt=  0.1278  0.1278  0.1278 (reduced coord)
  -2.10233   -1.15328   -1.15326   -1.15326   -0.96603   -0.42143   -0.37845   -0.37845
  -0.30434   -0.30434   -0.29807    0.08305    0.09813    0.09813    0.14168    0.14168
   0.16460    0.17974    0.18855    0.18855    0.27854    0.28243    0.28243    0.37055
   0.37055    0.44902    0.44902    0.49146    0.54620    0.54734
 kpt#  69, nband= 30, wtk=  1.00000, kpt=  0.1222  0.1222  0.1222 (reduced coord)
  -2.10233   -1.15327   -1.15325   -1.15325   -0.96608   -0.42159   -0.37836   -0.37836
  -0.30448   -0.30448   -0.29867    0.08444    0.09853    0.09853    0.14368    0.14368
   0.16727    0.17922    0.18940    0.18940    0.27714    0.28090    0.28090    0.36837
   0.36837    0.44676    0.44676    0.48960    0.54524    0.54622
 kpt#  70, nband= 30, wtk=  1.00000, kpt=  0.1167  0.1167  0.1167 (reduced coord)
  -2.10233   -1.15325   -1.15323   -1.15323   -0.96612   -0.42174   -0.37826   -0.37826
  -0.30463   -0.30463   -0.29926    0.08582    0.09892    0.09892    0.14568    0.14568
   0.16989    0.17872    0.19027    0.19027    0.27575    0.27938    0.27938    0.36625
   0.36625    0.44456    0.44456    0.48768    0.54430    0.54495
 kpt#  71, nband= 30, wtk=  1.00000, kpt=  0.1111  0.1111  0.1111 (reduced coord)
  -2.10233   -1.15324   -1.15322   -1.15322   -0.96616   -0.42187   -0.37816   -0.37816
  -0.30478   -0.30478   -0.29985    0.08716    0.09927    0.09927    0.14767    0.14767
   0.17249    0.17824    0.19117    0.19117    0.27439    0.27786    0.27786    0.36417
   0.36417    0.44241    0.44241    0.48573    0.54337    0.54368
 kpt#  72, nband= 30, wtk=  1.00000, kpt=  0.1056  0.1056  0.1056 (reduced coord)
  -2.10233   -1.15322   -1.15321   -1.15321   -0.96620   -0.42198   -0.37806   -0.37806
  -0.30493   -0.30493   -0.30043    0.08848    0.09961    0.09961    0.14965    0.14965
   0.17504    0.17778    0.19209    0.19209    0.27305    0.27634    0.27634    0.36215
   0.36215    0.44033    0.44033    0.48375    0.54246    0.54248
 kpt#  73, nband= 30, wtk=  1.00000, kpt=  0.1000  0.1000  0.1000 (reduced coord)
  -2.10233   -1.15321   -1.15320   -1.15320   -0.96623   -0.42208   -0.37796   -0.37796
  -0.30508   -0.30508   -0.30100    0.08975    0.09992    0.09992    0.15160    0.15160
   0.17735    0.17754    0.19302    0.19302    0.27173    0.27484    0.27484    0.36020
   0.36020    0.43832    0.43832    0.48177    0.54132    0.54158
 kpt#  74, nband= 30, wtk=  1.00000, kpt=  0.0944  0.0944  0.0944 (reduced coord)
  -2.10234   -1.15319   -1.15318   -1.15318   -0.96627   -0.42216   -0.37786   -0.37786
  -0.30524   -0.30524   -0.30156    0.09099    0.10021    0.10021    0.15353    0.15353
   0.17693    0.17999    0.19396    0.19396    0.27044    0.27334    0.27334    0.35831
   0.35831    0.43638    0.43638    0.47979    0.54028    0.54073
 kpt#  75, nband= 30, wtk=  1.00000, kpt=  0.0889  0.0889  0.0889 (reduced coord)
  -2.10234   -1.15318   -1.15317   -1.15317   -0.96630   -0.42223   -0.37776   -0.37776
  -0.30539   -0.30539   -0.30210    0.09219    0.10048    0.10048    0.15542    0.15542
   0.17654    0.18238    0.19491    0.19491    0.26918    0.27187    0.27187    0.35649
   0.35649    0.43452    0.43452    0.47783    0.53937    0.53991
 kpt#  76, nband= 30, wtk=  1.00000, kpt=  0.0833  0.0833  0.0833 (reduced coord)
  -2.10234   -1.15317   -1.15316   -1.15316   -0.96634   -0.42229   -0.37766   -0.37766
  -0.30554   -0.30554   -0.30262    0.09334    0.10072    0.10072    0.15727    0.15727
   0.17616    0.18470    0.19585    0.19585    0.26795    0.27041    0.27041    0.35474
   0.35474    0.43275    0.43275    0.47590    0.53854    0.53913
 kpt#  77, nband= 30, wtk=  1.00000, kpt=  0.0778  0.0778  0.0778 (reduced coord)
  -2.10234   -1.15316   -1.15315   -1.15315   -0.96637   -0.42234   -0.37757   -0.37757
  -0.30569   -0.30569   -0.30312    0.09443    0.10095    0.10095    0.15906    0.15906
   0.17582    0.18695    0.19678    0.19678    0.26675    0.26899    0.26899    0.35308
   0.35308    0.43107    0.43107    0.47402    0.53779    0.53839
 kpt#  78, nband= 30, wtk=  1.00000, kpt=  0.0722  0.0722  0.0722 (reduced coord)
  -2.10234   -1.15315   -1.15314   -1.15314   -0.96639   -0.42238   -0.37747   -0.37747
  -0.30583   -0.30583   -0.30360    0.09547    0.10116    0.10116    0.16080    0.16080
   0.17549    0.18912    0.19770    0.19770    0.26559    0.26759    0.26759    0.35150
   0.35150    0.42947    0.42947    0.47220    0.53716    0.53769
 kpt#  79, nband= 30, wtk=  1.00000, kpt=  0.0667  0.0667  0.0667 (reduced coord)
  -2.10234   -1.15314   -1.15313   -1.15313   -0.96642   -0.42241   -0.37738   -0.37738
  -0.30596   -0.30596   -0.30405    0.09644    0.10135    0.10135    0.16246    0.16246
   0.17519    0.19119    0.19860    0.19860    0.26448    0.26624    0.26624    0.35001
   0.35001    0.42798    0.42798    0.47046    0.53632    0.53703
 kpt#  80, nband= 30, wtk=  1.00000, kpt=  0.0611  0.0611  0.0611 (reduced coord)
  -2.10234   -1.15313   -1.15312   -1.15312   -0.96645   -0.42244   -0.37730   -0.37730
  -0.30609   -0.30609   -0.30448    0.09736    0.10152    0.10152    0.16405    0.16405
   0.17490    0.19316    0.19946    0.19946    0.26341    0.26493    0.26493    0.34862
   0.34862    0.42659    0.42659    0.46881    0.53566    0.53641
 kpt#  81, nband= 30, wtk=  1.00000, kpt=  0.0556  0.0556  0.0556 (reduced coord)
  -2.10234   -1.15312   -1.15312   -1.15312   -0.96647   -0.42246   -0.37722   -0.37722
  -0.30622   -0.30622   -0.30487    0.09820    0.10168    0.10168    0.16554    0.16554
   0.17465    0.19502    0.20030    0.20030    0.26239    0.26369    0.26369    0.34733
   0.34733    0.42531    0.42531    0.46726    0.53517    0.53585
 kpt#  82, nband= 30, wtk=  1.00000, kpt=  0.0500  0.0500  0.0500 (reduced coord)
  -2.10234   -1.15311   -1.15311   -1.15311   -0.96649   -0.42247   -0.37715   -0.37715
  -0.30633   -0.30633   -0.30523    0.09898    0.10182    0.10182    0.16694    0.16694
   0.17442    0.19676    0.20109    0.20109    0.26143    0.26251    0.26251    0.34614
   0.34614    0.42413    0.42413    0.46582    0.53474    0.53533
 kpt#  83, nband= 30, wtk=  1.00000, kpt=  0.0444  0.0444  0.0444 (reduced coord)
  -2.10234   -1.15311   -1.15310   -1.15310   -0.96651   -0.42248   -0.37708   -0.37708
  -0.30643   -0.30643   -0.30556    0.09968    0.10194    0.10194    0.16823    0.16823
   0.17421    0.19837    0.20183    0.20183    0.26053    0.26140    0.26140    0.34506
   0.34506    0.42308    0.42308    0.46451    0.53440    0.53486
 kpt#  84, nband= 30, wtk=  1.00000, kpt=  0.0389  0.0389  0.0389 (reduced coord)
  -2.10234   -1.15310   -1.15310   -1.15310   -0.96653   -0.42249   -0.37702   -0.37702
  -0.30653   -0.30653   -0.30586    0.10030    0.10205    0.10205    0.16939    0.16939
   0.17402    0.19983    0.20251    0.20251    0.25971    0.26039    0.26039    0.34410
   0.34410    0.42213    0.42213    0.46332    0.53406    0.53445
 kpt#  85, nband= 30, wtk=  1.00000, kpt=  0.0333  0.0333  0.0333 (reduced coord)
  -2.10234   -1.15310   -1.15309   -1.15309   -0.96654   -0.42249   -0.37696   -0.37696
  -0.30661   -0.30661   -0.30612    0.10085    0.10214    0.10214    0.17043    0.17043
   0.17386    0.20114    0.20312    0.20312    0.25898    0.25948    0.25948    0.34326
   0.34326    0.42131    0.42131    0.46228    0.53380    0.53409
 kpt#  86, nband= 30, wtk=  1.00000, kpt=  0.0278  0.0278  0.0278 (reduced coord)
  -2.10234   -1.15309   -1.15309   -1.15309   -0.96655   -0.42250   -0.37692   -0.37692
  -0.30668   -0.30668   -0.30634    0.10132    0.10222    0.10222    0.17132    0.17132
   0.17373    0.20227    0.20365    0.20365    0.25833    0.25869    0.25869    0.34254
   0.34254    0.42061    0.42061    0.46138    0.53356    0.53378
 kpt#  87, nband= 30, wtk=  1.00000, kpt=  0.0222  0.0222  0.0222 (reduced coord)
  -2.10234   -1.15309   -1.15309   -1.15309   -0.96656   -0.42250   -0.37688   -0.37688
  -0.30674   -0.30674   -0.30652    0.10170    0.10228    0.10228    0.17207    0.17207
   0.17362    0.20321    0.20411    0.20411    0.25778    0.25802    0.25802    0.34194
   0.34194    0.42003    0.42003    0.46064    0.53340    0.53353
 kpt#  88, nband= 30, wtk=  1.00000, kpt=  0.0167  0.0167  0.0167 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96657   -0.42250   -0.37685   -0.37685
  -0.30679   -0.30679   -0.30666    0.10200    0.10233    0.10233    0.17265    0.17265
   0.17353    0.20396    0.20447    0.20447    0.25735    0.25748    0.25748    0.34148
   0.34148    0.41958    0.41958    0.46006    0.53327    0.53333
 kpt#  89, nband= 30, wtk=  1.00000, kpt=  0.0111  0.0111  0.0111 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37683   -0.37683
  -0.30682   -0.30682   -0.30676    0.10221    0.10236    0.10236    0.17308    0.17308
   0.17347    0.20450    0.20473    0.20473    0.25703    0.25709    0.25709    0.34114
   0.34114    0.41926    0.41926    0.45964    0.53316    0.53319
 kpt#  90, nband= 30, wtk=  1.00000, kpt=  0.0056  0.0056  0.0056 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37681   -0.37681
  -0.30684   -0.30684   -0.30682    0.10234    0.10238    0.10238    0.17333    0.17333
   0.17343    0.20483    0.20489    0.20489    0.25684    0.25686    0.25686    0.34094
   0.34094    0.41907    0.41907    0.45938    0.53309    0.53310
 kpt#  91, nband= 30, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37681   -0.37681
  -0.30685   -0.30685   -0.30685    0.10239    0.10239    0.10239    0.17342    0.17342
   0.17342    0.20494    0.20494    0.20494    0.25678    0.25678    0.25678    0.34087
   0.34087    0.41900    0.41900    0.45930    0.53307    0.53307
 kpt#  92, nband= 30, wtk=  1.00000, kpt=  0.0100  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37682   -0.37681
  -0.30684   -0.30684   -0.30681    0.10233    0.10238    0.10238    0.17335    0.17335
   0.17338    0.20480    0.20490    0.20490    0.25678    0.25689    0.25689    0.34088
   0.34102    0.41907    0.41908    0.45939    0.53307    0.53312
 kpt#  93, nband= 30, wtk=  1.00000, kpt=  0.0200  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15309   -1.15308   -1.15308   -0.96658   -0.42250   -0.37685   -0.37680
  -0.30684   -0.30684   -0.30672    0.10216    0.10238    0.10238    0.17315    0.17315
   0.17326    0.20438    0.20476    0.20476    0.25679    0.25725    0.25725    0.34088
   0.34145    0.41926    0.41930    0.45966    0.53305    0.53325
 kpt#  94, nband= 30, wtk=  1.00000, kpt=  0.0300  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15309   -1.15308   -1.15308   -0.96657   -0.42250   -0.37691   -0.37679
  -0.30682   -0.30682   -0.30656    0.10189    0.10236    0.10236    0.17282    0.17282
   0.17307    0.20368    0.20454    0.20454    0.25682    0.25783    0.25783    0.34089
   0.34215    0.41960    0.41966    0.46012    0.53312    0.53348
 kpt#  95, nband= 30, wtk=  1.00000, kpt=  0.0400  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15310   -1.15308   -1.15308   -0.96656   -0.42250   -0.37698   -0.37678
  -0.30681   -0.30681   -0.30634    0.10150    0.10234    0.10234    0.17237    0.17237
   0.17281    0.20271    0.20424    0.20424    0.25685    0.25862    0.25862    0.34090
   0.34313    0.42005    0.42018    0.46076    0.53311    0.53379
 kpt#  96, nband= 30, wtk=  1.00000, kpt=  0.0500  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15311   -1.15308   -1.15308   -0.96655   -0.42251   -0.37707   -0.37677
  -0.30679   -0.30679   -0.30606    0.10100    0.10232    0.10232    0.17178    0.17178
   0.17246    0.20150    0.20388    0.20388    0.25689    0.25962    0.25962    0.34091
   0.34435    0.42064    0.42083    0.46157    0.53332    0.53419
 kpt#  97, nband= 30, wtk=  1.00000, kpt=  0.0600  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15313   -1.15308   -1.15308   -0.96654   -0.42251   -0.37718   -0.37675
  -0.30676   -0.30676   -0.30572    0.10039    0.10229    0.10229    0.17108    0.17108
   0.17205    0.20007    0.20346    0.20346    0.25693    0.26080    0.26080    0.34092
   0.34580    0.42136    0.42163    0.46256    0.53280    0.53468
 kpt#  98, nband= 30, wtk=  1.00000, kpt=  0.0700  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15315   -1.15308   -1.15308   -0.96652   -0.42252   -0.37730   -0.37673
  -0.30673   -0.30673   -0.30533    0.09969    0.10226    0.10226    0.17027    0.17027
   0.17157    0.19842    0.20300    0.20300    0.25699    0.26215    0.26215    0.34094
   0.34747    0.42220    0.42256    0.46373    0.53271    0.53525
 kpt#  99, nband= 30, wtk=  1.00000, kpt=  0.0800  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15317   -1.15308   -1.15308   -0.96650   -0.42254   -0.37742   -0.37670
  -0.30670   -0.30670   -0.30489    0.09888    0.10222    0.10222    0.16934    0.16934
   0.17102    0.19658    0.20250    0.20250    0.25705    0.26365    0.26365    0.34095
   0.34932    0.42317    0.42362    0.46507    0.53263    0.53591
 kpt# 100, nband= 30, wtk=  1.00000, kpt=  0.0900  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15319   -1.15308   -1.15308   -0.96648   -0.42256   -0.37755   -0.37667
  -0.30666   -0.30666   -0.30440    0.09797    0.10218    0.10218    0.16832    0.16832
   0.17041    0.19458    0.20199    0.20199    0.25713    0.26528    0.26528    0.34097
   0.35135    0.42426    0.42481    0.46657    0.53254    0.53664
 kpt# 101, nband= 30, wtk=  1.00000, kpt=  0.1000  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15321   -1.15307   -1.15307   -0.96646   -0.42259   -0.37768   -0.37664
  -0.30662   -0.30662   -0.30386    0.09697    0.10213    0.10213    0.16722    0.16722
   0.16974    0.19244    0.20146    0.20146    0.25720    0.26703    0.26703    0.34099
   0.35352    0.42547    0.42612    0.46824    0.53226    0.53745
 kpt# 102, nband= 30, wtk=  1.00000, kpt=  0.1100  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15324   -1.15307   -1.15307   -0.96644   -0.42263   -0.37781   -0.37661
  -0.30657   -0.30657   -0.30328    0.09588    0.10208    0.10208    0.16603    0.16603
   0.16902    0.19018    0.20092    0.20092    0.25729    0.26887    0.26887    0.34101
   0.35581    0.42681    0.42755    0.47007    0.53208    0.53834
 kpt# 103, nband= 30, wtk=  1.00000, kpt=  0.1200  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15327   -1.15307   -1.15307   -0.96641   -0.42268   -0.37793   -0.37657
  -0.30652   -0.30652   -0.30267    0.09471    0.10203    0.10203    0.16477    0.16477
   0.16825    0.18782    0.20038    0.20038    0.25739    0.27081    0.27081    0.34104
   0.35821    0.42825    0.42910    0.47206    0.53190    0.53929
 kpt# 104, nband= 30, wtk=  1.00000, kpt=  0.1300  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15330   -1.15307   -1.15307   -0.96638   -0.42274   -0.37804   -0.37653
  -0.30647   -0.30647   -0.30202    0.09345    0.10197    0.10197    0.16344    0.16344
   0.16743    0.18538    0.19984    0.19984    0.25749    0.27281    0.27281    0.34106
   0.36070    0.42981    0.43074    0.47420    0.53174    0.54032
 kpt# 105, nband= 30, wtk=  1.00000, kpt=  0.1400  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15333   -1.15307   -1.15307   -0.96636   -0.42282   -0.37814   -0.37649
  -0.30641   -0.30641   -0.30134    0.09212    0.10191    0.10191    0.16207    0.16207
   0.16657    0.18287    0.19931    0.19931    0.25759    0.27487    0.27487    0.34108
   0.36326    0.43148    0.43249    0.47649    0.53180    0.54140
 kpt# 106, nband= 30, wtk=  1.00000, kpt=  0.1500  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15336   -1.15307   -1.15307   -0.96632   -0.42291   -0.37822   -0.37644
  -0.30635   -0.30635   -0.30064    0.09072    0.10185    0.10185    0.16065    0.16065
   0.16568    0.18031    0.19878    0.19878    0.25771    0.27698    0.27698    0.34111
   0.36586    0.43326    0.43432    0.47892    0.53137    0.54255
 kpt# 107, nband= 30, wtk=  1.00000, kpt=  0.1600  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15340   -1.15307   -1.15307   -0.96629   -0.42302   -0.37827   -0.37640
  -0.30629   -0.30629   -0.29992    0.08925    0.10178    0.10178    0.15919    0.15919
   0.16475    0.17773    0.19826    0.19826    0.25782    0.27913    0.27913    0.34113
   0.36851    0.43513    0.43624    0.48148    0.53106    0.54375
 kpt# 108, nband= 30, wtk=  1.00000, kpt=  0.1700  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15344   -1.15306   -1.15306   -0.96626   -0.42315   -0.37830   -0.37635
  -0.30622   -0.30622   -0.29917    0.08773    0.10172    0.10172    0.15771    0.15771
   0.16380    0.17513    0.19774    0.19774    0.25795    0.28130    0.28130    0.34115
   0.37117    0.43710    0.43824    0.48418    0.53082    0.54501
 kpt# 109, nband= 30, wtk=  1.00000, kpt=  0.1800  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15348   -1.15306   -1.15306   -0.96622   -0.42329   -0.37831   -0.37630
  -0.30615   -0.30615   -0.29842    0.08615    0.10165    0.10165    0.15622    0.15622
   0.16282    0.17253    0.19724    0.19724    0.25807    0.28350    0.28350    0.34118
   0.37385    0.43917    0.44030    0.48701    0.53057    0.54631
 kpt# 110, nband= 30, wtk=  1.00000, kpt=  0.1900  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15352   -1.15306   -1.15306   -0.96619   -0.42345   -0.37829   -0.37625
  -0.30608   -0.30608   -0.29765    0.08453    0.10159    0.10159    0.15471    0.15471
   0.16183    0.16993    0.19675    0.19675    0.25821    0.28570    0.28570    0.34120
   0.37653    0.44131    0.44243    0.48996    0.53032    0.54765
 kpt# 111, nband= 30, wtk=  1.00000, kpt=  0.2000  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15356   -1.15306   -1.15306   -0.96615   -0.42363   -0.37823   -0.37620
  -0.30601   -0.30601   -0.29688    0.08287    0.10152    0.10152    0.15319    0.15319
   0.16082    0.16735    0.19627    0.19627    0.25834    0.28791    0.28791    0.34123
   0.37919    0.44354    0.44461    0.49304    0.53006    0.54903
 kpt# 112, nband= 30, wtk=  1.00000, kpt=  0.2100  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15360   -1.15306   -1.15306   -0.96611   -0.42382   -0.37815   -0.37614
  -0.30594   -0.30594   -0.29610    0.08117    0.10145    0.10145    0.15167    0.15167
   0.15980    0.16480    0.19579    0.19579    0.25848    0.29012    0.29012    0.34125
   0.38184    0.44585    0.44684    0.49622    0.52980    0.55044
 kpt# 113, nband= 30, wtk=  1.00000, kpt=  0.2200  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15364   -1.15305   -1.15305   -0.96607   -0.42404   -0.37804   -0.37609
  -0.30587   -0.30587   -0.29532    0.07944    0.10139    0.10139    0.15017    0.15017
   0.15878    0.16228    0.19533    0.19533    0.25862    0.29231    0.29231    0.34127
   0.38445    0.44821    0.44911    0.49952    0.52953    0.55188
 kpt# 114, nband= 30, wtk=  1.00000, kpt=  0.2300  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15368   -1.15305   -1.15305   -0.96604   -0.42427   -0.37789   -0.37603
  -0.30579   -0.30579   -0.29454    0.07770    0.10132    0.10132    0.14867    0.14867
   0.15776    0.15980    0.19488    0.19488    0.25876    0.29449    0.29449    0.34130
   0.38703    0.45064    0.45140    0.50292    0.52925    0.55334
 kpt# 115, nband= 30, wtk=  1.00000, kpt=  0.2400  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15372   -1.15305   -1.15305   -0.96600   -0.42452   -0.37772   -0.37598
  -0.30571   -0.30571   -0.29378    0.07594    0.10126    0.10126    0.14719    0.14719
   0.15674    0.15739    0.19444    0.19444    0.25891    0.29665    0.29665    0.34132
   0.38957    0.45312    0.45372    0.50642    0.52897    0.55481
 kpt# 116, nband= 30, wtk=  1.00000, kpt=  0.2500  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15377   -1.15305   -1.15305   -0.96596   -0.42478   -0.37752   -0.37592
  -0.30564   -0.30564   -0.29302    0.07418    0.10120    0.10120    0.14573    0.14573
   0.15502    0.15573    0.19401    0.19401    0.25905    0.29877    0.29877    0.34134
   0.39205    0.45565    0.45604    0.51002    0.52869    0.55630
 kpt# 117, nband= 30, wtk=  1.00000, kpt=  0.2600  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15381   -1.15305   -1.15305   -0.96592   -0.42505   -0.37729   -0.37586
  -0.30556   -0.30556   -0.29227    0.07242    0.10114    0.10114    0.14430    0.14430
   0.15272    0.15472    0.19360    0.19360    0.25920    0.30086    0.30086    0.34136
   0.39447    0.45821    0.45837    0.51372    0.52841    0.55779
 kpt# 118, nband= 30, wtk=  1.00000, kpt=  0.2700  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15385   -1.15305   -1.15305   -0.96588   -0.42533   -0.37703   -0.37581
  -0.30548   -0.30548   -0.29153    0.07066    0.10109    0.10109    0.14289    0.14289
   0.15049    0.15374    0.19320    0.19320    0.25934    0.30291    0.30291    0.34138
   0.39683    0.46070    0.46079    0.51751    0.52813    0.55927
 kpt# 119, nband= 30, wtk=  1.00000, kpt=  0.2800  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15390   -1.15304   -1.15304   -0.96584   -0.42562   -0.37676   -0.37575
  -0.30541   -0.30541   -0.29081    0.06892    0.10104    0.10104    0.14152    0.14152
   0.14832    0.15277    0.19281    0.19281    0.25949    0.30492    0.30492    0.34140
   0.39913    0.46301    0.46339    0.52140    0.52786    0.56075
 kpt# 120, nband= 30, wtk=  1.00000, kpt=  0.2900  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15394   -1.15304   -1.15304   -0.96580   -0.42592   -0.37646   -0.37570
  -0.30533   -0.30533   -0.29011    0.06720    0.10100    0.10100    0.14019    0.14019
   0.14624    0.15182    0.19243    0.19243    0.25963    0.30687    0.30687    0.34142
   0.40135    0.46530    0.46599    0.52537    0.52758    0.56221
 kpt# 121, nband= 30, wtk=  1.00000, kpt=  0.3000  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15398   -1.15304   -1.15304   -0.96576   -0.42623   -0.37615   -0.37564
  -0.30526   -0.30526   -0.28943    0.06551    0.10096    0.10096    0.13889    0.13889
   0.14423    0.15090    0.19207    0.19207    0.25977    0.30877    0.30877    0.34144
   0.40350    0.46756    0.46859    0.52731    0.52942    0.56366
 kpt# 122, nband= 30, wtk=  1.00000, kpt=  0.3100  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15402   -1.15304   -1.15304   -0.96573   -0.42653   -0.37582   -0.37559
  -0.30519   -0.30519   -0.28878    0.06385    0.10092    0.10092    0.13763    0.13763
   0.14231    0.15000    0.19172    0.19172    0.25991    0.31061    0.31061    0.34145
   0.40556    0.46978    0.47117    0.52704    0.53356    0.56508
 kpt# 123, nband= 30, wtk=  1.00000, kpt=  0.3200  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15406   -1.15304   -1.15304   -0.96569   -0.42684   -0.37554   -0.37549
  -0.30512   -0.30512   -0.28814    0.06224    0.10089    0.10089    0.13642    0.13642
   0.14047    0.14913    0.19139    0.19139    0.26004    0.31239    0.31239    0.34147
   0.40754    0.47195    0.47371    0.52678    0.53778    0.56647
 kpt# 124, nband= 30, wtk=  1.00000, kpt=  0.3300  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15410   -1.15303   -1.15303   -0.96566   -0.42714   -0.37549   -0.37514
  -0.30505   -0.30505   -0.28754    0.06067    0.10086    0.10086    0.13526    0.13526
   0.13872    0.14830    0.19107    0.19107    0.26018    0.31409    0.31409    0.34149
   0.40943    0.47406    0.47622    0.52653    0.54208    0.56782
 kpt# 125, nband= 30, wtk=  1.00000, kpt=  0.3400  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15413   -1.15303   -1.15303   -0.96562   -0.42744   -0.37544   -0.37480
  -0.30498   -0.30498   -0.28696    0.05916    0.10084    0.10084    0.13415    0.13415
   0.13706    0.14750    0.19076    0.19076    0.26030    0.31573    0.31573    0.34150
   0.41123    0.47611    0.47867    0.52628    0.54646    0.56913
 kpt# 126, nband= 30, wtk=  1.00000, kpt=  0.3500  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15417   -1.15303   -1.15303   -0.96559   -0.42773   -0.37539   -0.37445
  -0.30492   -0.30492   -0.28641    0.05770    0.10083    0.10083    0.13309    0.13309
   0.13549    0.14674    0.19048    0.19048    0.26043    0.31729    0.31729    0.34151
   0.41293    0.47809    0.48106    0.52605    0.55091    0.57039
 kpt# 127, nband= 30, wtk=  1.00000, kpt=  0.3600  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15420   -1.15303   -1.15303   -0.96556   -0.42801   -0.37535   -0.37411
  -0.30486   -0.30486   -0.28589    0.05632    0.10081    0.10081    0.13208    0.13208
   0.13402    0.14602    0.19021    0.19021    0.26054    0.31876    0.31876    0.34153
   0.41454    0.47998    0.48336    0.52582    0.55543    0.57160
 kpt# 128, nband= 30, wtk=  1.00000, kpt=  0.3700  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15424   -1.15303   -1.15303   -0.96553   -0.42828   -0.37530   -0.37377
  -0.30480   -0.30480   -0.28540    0.05500    0.10081    0.10081    0.13113    0.13113
   0.13264    0.14534    0.18995    0.18995    0.26065    0.32015    0.32015    0.34154
   0.41604    0.48179    0.48558    0.52561    0.56002    0.57275
 kpt# 129, nband= 30, wtk=  1.00000, kpt=  0.3800  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15427   -1.15303   -1.15303   -0.96550   -0.42854   -0.37526   -0.37345
  -0.30474   -0.30474   -0.28494    0.05376    0.10081    0.10081    0.13024    0.13024
   0.13136    0.14470    0.18972    0.18972    0.26076    0.32146    0.32146    0.34155
   0.41745    0.48349    0.48769    0.52540    0.56469    0.57384
 kpt# 130, nband= 30, wtk=  1.00000, kpt=  0.3900  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15429   -1.15302   -1.15302   -0.96547   -0.42879   -0.37523   -0.37313
  -0.30469   -0.30469   -0.28452    0.05260    0.10081    0.10081    0.12941    0.12941
   0.13018    0.14411    0.18950    0.18950    0.26086    0.32267    0.32267    0.34156
   0.41875    0.48509    0.48968    0.52521    0.56944    0.57486
 kpt# 131, nband= 30, wtk=  1.00000, kpt=  0.4000  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15432   -1.15302   -1.15302   -0.96545   -0.42902   -0.37519   -0.37284
  -0.30465   -0.30465   -0.28413    0.05152    0.10081    0.10081    0.12864    0.12864
   0.12909    0.14356    0.18930    0.18930    0.26095    0.32379    0.32379    0.34157
   0.41994    0.48658    0.49154    0.52504    0.57423    0.57581
 kpt# 132, nband= 30, wtk=  1.00000, kpt=  0.4100  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15435   -1.15302   -1.15302   -0.96543   -0.42923   -0.37516   -0.37256
  -0.30460   -0.30460   -0.28378    0.05054    0.10082    0.10082    0.12794    0.12794
   0.12811    0.14306    0.18912    0.18912    0.26103    0.32481    0.32481    0.34158
   0.42102    0.48795    0.49326    0.52488    0.57668    0.57793
 kpt# 133, nband= 30, wtk=  1.00000, kpt=  0.4200  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15437   -1.15302   -1.15302   -0.96541   -0.42942   -0.37513   -0.37230
  -0.30456   -0.30456   -0.28346    0.04965    0.10083    0.10083    0.12722    0.12731
   0.12731    0.14261    0.18895    0.18895    0.26111    0.32573    0.32573    0.34159
   0.42200    0.48919    0.49483    0.52473    0.57746    0.57822
 kpt# 134, nband= 30, wtk=  1.00000, kpt=  0.4300  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15439   -1.15302   -1.15302   -0.96539   -0.42960   -0.37510   -0.37207
  -0.30453   -0.30453   -0.28318    0.04885    0.10084    0.10084    0.12644    0.12674
   0.12674    0.14221    0.18881    0.18881    0.26118    0.32654    0.32654    0.34159
   0.42286    0.49030    0.49624    0.52460    0.57817    0.57870
 kpt# 135, nband= 30, wtk=  1.00000, kpt=  0.4400  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15440   -1.15302   -1.15302   -0.96537   -0.42975   -0.37508   -0.37186
  -0.30450   -0.30450   -0.28294    0.04815    0.10086    0.10086    0.12577    0.12625
   0.12625    0.14187    0.18868    0.18868    0.26124    0.32726    0.32726    0.34160
   0.42361    0.49128    0.49749    0.52448    0.57879    0.57913
 kpt# 136, nband= 30, wtk=  1.00000, kpt=  0.4500  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15442   -1.15302   -1.15302   -0.96536   -0.42988   -0.37506   -0.37169
  -0.30447   -0.30447   -0.28273    0.04756    0.10087    0.10087    0.12519    0.12583
   0.12583    0.14157    0.18858    0.18858    0.26129    0.32786    0.32786    0.34160
   0.42424    0.49211    0.49855    0.52438    0.57932    0.57947
 kpt# 137, nband= 30, wtk=  1.00000, kpt=  0.4600  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15443   -1.15302   -1.15302   -0.96535   -0.42999   -0.37505   -0.37154
  -0.30445   -0.30445   -0.28256    0.04707    0.10088    0.10088    0.12472    0.12548
   0.12548    0.14133    0.18849    0.18849    0.26133    0.32836    0.32836    0.34161
   0.42477    0.49280    0.49943    0.52430    0.57975    0.57982
 kpt# 138, nband= 30, wtk=  1.00000, kpt=  0.4700  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15302   -1.15302   -0.96534   -0.43007   -0.37503   -0.37142
  -0.30443   -0.30443   -0.28243    0.04669    0.10089    0.10089    0.12436    0.12521
   0.12521    0.14114    0.18842    0.18842    0.26136    0.32875    0.32875    0.34161
   0.42517    0.49334    0.50012    0.52424    0.58009    0.58014
 kpt# 139, nband= 30, wtk=  1.00000, kpt=  0.4800  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43013   -0.37503   -0.37134
  -0.30442   -0.30442   -0.28233    0.04642    0.10090    0.10090    0.12409    0.12502
   0.12502    0.14100    0.18837    0.18837    0.26139    0.32903    0.32903    0.34161
   0.42546    0.49372    0.50062    0.52419    0.58033    0.58039
 kpt# 140, nband= 30, wtk=  1.00000, kpt=  0.4900  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43017   -0.37502   -0.37129
  -0.30441   -0.30441   -0.28228    0.04625    0.10090    0.10090    0.12394    0.12490
   0.12490    0.14092    0.18834    0.18834    0.26140    0.32920    0.32920    0.34161
   0.42564    0.49396    0.50092    0.52417    0.58048    0.58051
 kpt# 141, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43018   -0.37502   -0.37127
  -0.30441   -0.30441   -0.28226    0.04620    0.10090    0.10090    0.12388    0.12486
   0.12486    0.14089    0.18833    0.18833    0.26140    0.32925    0.32925    0.34161
   0.42570    0.49404    0.50102    0.52416    0.58053    0.58054
 kpt# 142, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0100  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43016   -0.37502   -0.37129
  -0.30441   -0.30439   -0.28227    0.04619    0.10087    0.10090    0.12199    0.12484
   0.12657    0.14112    0.18823    0.18825    0.26150    0.32925    0.32925    0.34172
   0.42575    0.49407    0.50108    0.52421    0.58039    0.58053
 kpt# 143, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0200  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43009   -0.37501   -0.37136
  -0.30440   -0.30434   -0.28230    0.04618    0.10079    0.10091    0.11954    0.12478
   0.12842    0.14180    0.18794    0.18801    0.26180    0.32924    0.32925    0.34202
   0.42590    0.49418    0.50127    0.52438    0.57991    0.58055
 kpt# 144, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0300  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15303   -1.15302   -0.96532   -0.42999   -0.37500   -0.37146
  -0.30439   -0.30426   -0.28236    0.04617    0.10066    0.10093    0.11699    0.12467
   0.12999    0.14294    0.18745    0.18762    0.26230    0.32923    0.32924    0.34252
   0.42615    0.49436    0.50158    0.52465    0.57916    0.58057
 kpt# 145, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0400  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15304   -1.15302   -0.96532   -0.42984   -0.37498   -0.37161
  -0.30437   -0.30414   -0.28244    0.04614    0.10046    0.10095    0.11437    0.12453
   0.13127    0.14451    0.18678    0.18708    0.26297    0.32921    0.32924    0.34320
   0.42651    0.49460    0.50202    0.52504    0.57818    0.58059
 kpt# 146, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0500  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15305   -1.15302   -0.96531   -0.42964   -0.37497   -0.37180
  -0.30434   -0.30400   -0.28254    0.04611    0.10021    0.10097    0.11172    0.12434
   0.13229    0.14642    0.18594    0.18640    0.26383    0.32919    0.32923    0.34405
   0.42697    0.49492    0.50258    0.52553    0.57699    0.58062
 kpt# 147, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0600  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15306   -1.15302   -0.96530   -0.42941   -0.37495   -0.37202
  -0.30431   -0.30382   -0.28267    0.04608    0.09989    0.10100    0.10904    0.12411
   0.13312    0.14859    0.18496    0.18559    0.26485    0.32916    0.32921    0.34506
   0.42753    0.49530    0.50327    0.52612    0.57564    0.58065
 kpt# 148, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0700  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15308   -1.15301   -0.96529   -0.42913   -0.37492   -0.37229
  -0.30428   -0.30361   -0.28281    0.04603    0.09951    0.10103    0.10636    0.12385
   0.13385    0.15094    0.18384    0.18467    0.26602    0.32914    0.32920    0.34621
   0.42821    0.49575    0.50408    0.52682    0.57417    0.58069
 kpt# 149, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0800  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15310   -1.15301   -0.96528   -0.42881   -0.37490   -0.37259
  -0.30424   -0.30337   -0.28298    0.04598    0.09905    0.10107    0.10369    0.12354
   0.13451    0.15341    0.18261    0.18364    0.26733    0.32911    0.32918    0.34747
   0.42899    0.49626    0.50502    0.52762    0.57259    0.58074
 kpt# 150, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0900  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15312   -1.15301   -0.96526   -0.42845   -0.37487   -0.37292
  -0.30420   -0.30311   -0.28316    0.04593    0.09852    0.10102    0.10112    0.12320
   0.13514    0.15594    0.18129    0.18253    0.26876    0.32909    0.32917    0.34883
   0.42988    0.49683    0.50607    0.52852    0.57094    0.58080
 kpt# 151, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1000  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15314   -1.15301   -0.96525   -0.42804   -0.37485   -0.37329
  -0.30415   -0.30282   -0.28336    0.04586    0.09792    0.09837    0.10116    0.12283
   0.13576    0.15852    0.17991    0.18134    0.27031    0.32908    0.32915    0.35027
   0.43089    0.49746    0.50726    0.52952    0.56923    0.58086
 kpt# 152, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1100  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15317   -1.15301   -0.96523   -0.42760   -0.37483   -0.37369
  -0.30410   -0.30251   -0.28358    0.04579    0.09575    0.09723    0.10122    0.12242
   0.13638    0.16111    0.17848    0.18008    0.27195    0.32908    0.32913    0.35175
   0.43201    0.49815    0.50856    0.53061    0.56747    0.58093
 kpt# 153, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1200  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15320   -1.15301   -0.96521   -0.42712   -0.37481   -0.37411
  -0.30404   -0.30218   -0.28381    0.04572    0.09315    0.09645    0.10128    0.12198
   0.13702    0.16371    0.17702    0.17877    0.27368    0.32908    0.32910    0.35328
   0.43324    0.49889    0.50998    0.53178    0.56569    0.58100
 kpt# 154, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1300  0.0000 (reduced coord)
  -2.10231   -1.15443   -1.15323   -1.15301   -0.96519   -0.42660   -0.37480   -0.37456
  -0.30398   -0.30183   -0.28405    0.04564    0.09058    0.09558    0.10134    0.12151
   0.13768    0.16629    0.17556    0.17742    0.27548    0.32908    0.32910    0.35481
   0.43459    0.49968    0.51152    0.53304    0.56388    0.58108
 kpt# 155, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1400  0.0000 (reduced coord)
  -2.10230   -1.15443   -1.15326   -1.15301   -0.96517   -0.42604   -0.37503   -0.37479
  -0.30391   -0.30146   -0.28431    0.04555    0.08804    0.09462    0.10141    0.12102
   0.13836    0.16885    0.17412    0.17603    0.27735    0.32906    0.32914    0.35635
   0.43605    0.50052    0.51318    0.53439    0.56206    0.58116
 kpt# 156, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1500  0.0000 (reduced coord)
  -2.10230   -1.15443   -1.15329   -1.15300   -0.96515   -0.42545   -0.37552   -0.37479
  -0.30384   -0.30108   -0.28458    0.04546    0.08555    0.09357    0.10148    0.12050
   0.13906    0.17138    0.17271    0.17461    0.27927    0.32903    0.32920    0.35787
   0.43763    0.50141    0.51496    0.53580    0.56024    0.58125
 kpt# 157, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1600  0.0000 (reduced coord)
  -2.10230   -1.15443   -1.15333   -1.15300   -0.96513   -0.42482   -0.37603   -0.37480
  -0.30377   -0.30068   -0.28485    0.04536    0.08309    0.09242    0.10156    0.11996
   0.13978    0.17135    0.17318    0.17387    0.28123    0.32901    0.32927    0.35936
   0.43930    0.50235    0.51685    0.53729    0.55841    0.58135
 kpt# 158, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1700  0.0000 (reduced coord)
  -2.10230   -1.15442   -1.15336   -1.15300   -0.96510   -0.42415   -0.37656   -0.37482
  -0.30370   -0.30027   -0.28514    0.04525    0.08068    0.09118    0.10164    0.11940
   0.14052    0.17005    0.17174    0.17631    0.28322    0.32898    0.32937    0.36080
   0.44108    0.50332    0.51886    0.53884    0.55659    0.58145
 kpt# 159, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1800  0.0000 (reduced coord)
  -2.10230   -1.15442   -1.15340   -1.15300   -0.96508   -0.42345   -0.37710   -0.37486
  -0.30362   -0.29986   -0.28542    0.04514    0.07832    0.08984    0.10173    0.11882
   0.14128    0.16882    0.17029    0.17871    0.28524    0.32896    0.32950    0.36220
   0.44296    0.50433    0.52098    0.54046    0.55479    0.58155
 kpt# 160, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1900  0.0000 (reduced coord)
  -2.10230   -1.15442   -1.15344   -1.15300   -0.96505   -0.42272   -0.37764   -0.37491
  -0.30354   -0.29943   -0.28572    0.04502    0.07600    0.08842    0.10182    0.11822
   0.14206    0.16767    0.16884    0.18105    0.28728    0.32893    0.32966    0.36353
   0.44492    0.50538    0.52321    0.54213    0.55299    0.58166
 kpt# 161, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2000  0.0000 (reduced coord)
  -2.10230   -1.15441   -1.15348   -1.15300   -0.96503   -0.42195   -0.37820   -0.37498
  -0.30346   -0.29900   -0.28601    0.04489    0.07373    0.08692    0.10192    0.11762
   0.14286    0.16661    0.16740    0.18333    0.28932    0.32891    0.32985    0.36481
   0.44697    0.50645    0.52554    0.54385    0.55122    0.58177
 kpt# 162, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2100  0.0000 (reduced coord)
  -2.10230   -1.15441   -1.15352   -1.15299   -0.96500   -0.42116   -0.37876   -0.37506
  -0.30337   -0.29857   -0.28630    0.04475    0.07152    0.08534    0.10202    0.11700
   0.14367    0.16563    0.16597    0.18555    0.29137    0.32888    0.33006    0.36601
   0.44908    0.50756    0.52799    0.54561    0.54947    0.58189
 kpt# 163, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2200  0.0000 (reduced coord)
  -2.10230   -1.15441   -1.15356   -1.15299   -0.96497   -0.42033   -0.37933   -0.37517
  -0.30329   -0.29813   -0.28659    0.04461    0.06936    0.08370    0.10212    0.11638
   0.14449    0.16456    0.16474    0.18769    0.29342    0.32886    0.33032    0.36715
   0.45125    0.50868    0.53054    0.54741    0.54775    0.58201
 kpt# 164, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2300  0.0000 (reduced coord)
  -2.10230   -1.15440   -1.15360   -1.15299   -0.96495   -0.41948   -0.37989   -0.37530
  -0.30320   -0.29769   -0.28688    0.04445    0.06726    0.08200    0.10223    0.11575
   0.14532    0.16317    0.16395    0.18977    0.29545    0.32883    0.33060    0.36822
   0.45347    0.50983    0.53319    0.54606    0.54924    0.58213
 kpt# 165, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2400  0.0000 (reduced coord)
  -2.10229   -1.15440   -1.15364   -1.15299   -0.96492   -0.41860   -0.38046   -0.37545
  -0.30312   -0.29726   -0.28716    0.04428    0.06522    0.08026    0.10234    0.11512
   0.14615    0.16180    0.16324    0.19177    0.29747    0.32881    0.33092    0.36922
   0.45573    0.51099    0.53595    0.54441    0.55109    0.58226
 kpt# 166, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2500  0.0000 (reduced coord)
  -2.10229   -1.15440   -1.15368   -1.15299   -0.96489   -0.41769   -0.38102   -0.37563
  -0.30303   -0.29683   -0.28743    0.04410    0.06323    0.07849    0.10245    0.11449
   0.14698    0.16045    0.16262    0.19369    0.29946    0.32879    0.33127    0.37015
   0.45801    0.51216    0.53880    0.54279    0.55297    0.58238
 kpt# 167, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2600  0.0000 (reduced coord)
  -2.10229   -1.15439   -1.15372   -1.15299   -0.96486   -0.41677   -0.38158   -0.37584
  -0.30294   -0.29640   -0.28770    0.04391    0.06132    0.07670    0.10257    0.11386
   0.14781    0.15914    0.16208    0.19553    0.30143    0.32877    0.33165    0.37101
   0.46031    0.51333    0.54121    0.54175    0.55485    0.58251
 kpt# 168, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2700  0.0000 (reduced coord)
  -2.10229   -1.15439   -1.15376   -1.15298   -0.96484   -0.41581   -0.38212   -0.37607
  -0.30285   -0.29598   -0.28795    0.04369    0.05946    0.07490    0.10269    0.11323
   0.14864    0.15786    0.16161    0.19730    0.30336    0.32875    0.33207    0.37181
   0.46261    0.51451    0.53968    0.54479    0.55674    0.58264
 kpt# 169, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2800  0.0000 (reduced coord)
  -2.10229   -1.15439   -1.15381   -1.15298   -0.96481   -0.41484   -0.38266   -0.37634
  -0.30277   -0.29557   -0.28820    0.04347    0.05767    0.07312    0.10281    0.11262
   0.14946    0.15661    0.16122    0.19897    0.30526    0.32873    0.33252    0.37256
   0.46490    0.51569    0.53819    0.54793    0.55863    0.58277
 kpt# 170, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2900  0.0000 (reduced coord)
  -2.10229   -1.15438   -1.15385   -1.15298   -0.96478   -0.41385   -0.38319   -0.37664
  -0.30268   -0.29516   -0.28843    0.04322    0.05595    0.07136    0.10293    0.11201
   0.15027    0.15541    0.16089    0.20057    0.30711    0.32871    0.33299    0.37324
   0.46716    0.51685    0.53675    0.55115    0.56050    0.58291
 kpt# 171, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3000  0.0000 (reduced coord)
  -2.10229   -1.15438   -1.15389   -1.15298   -0.96476   -0.41284   -0.38371   -0.37698
  -0.30260   -0.29477   -0.28865    0.04294    0.05430    0.06963    0.10305    0.11142
   0.15106    0.15423    0.16061    0.20208    0.30891    0.32869    0.33348    0.37387
   0.46940    0.51801    0.53535    0.55445    0.56236    0.58304
 kpt# 172, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3100  0.0000 (reduced coord)
  -2.10229   -1.15438   -1.15393   -1.15298   -0.96473   -0.41181   -0.38421   -0.37735
  -0.30251   -0.29438   -0.28886    0.04265    0.05272    0.06796    0.10317    0.11083
   0.15184    0.15311    0.16039    0.20350    0.31066    0.32867    0.33400    0.37445
   0.47159    0.51915    0.53402    0.55783    0.56419    0.58317
 kpt# 173, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3200  0.0000 (reduced coord)
  -2.10229   -1.15437   -1.15396   -1.15297   -0.96470   -0.41077   -0.38469   -0.37775
  -0.30243   -0.29401   -0.28905    0.04232    0.05122    0.06635    0.10330    0.11027
   0.15202    0.15260    0.16022    0.20484    0.31235    0.32865    0.33453    0.37498
   0.47372    0.52027    0.53274    0.56127    0.56599    0.58330
 kpt# 174, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3300  0.0000 (reduced coord)
  -2.10229   -1.15437   -1.15400   -1.15297   -0.96468   -0.40971   -0.38516   -0.37819
  -0.30235   -0.29366   -0.28924    0.04196    0.04978    0.06481    0.10342    0.10972
   0.15098    0.15333    0.16008    0.20609    0.31397    0.32864    0.33508    0.37547
   0.47580    0.52136    0.53151    0.56478    0.56775    0.58342
 kpt# 175, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3400  0.0000 (reduced coord)
  -2.10228   -1.15437   -1.15404   -1.15297   -0.96466   -0.40864   -0.38560   -0.37867
  -0.30228   -0.29331   -0.28940    0.04158    0.04842    0.06337    0.10354    0.10920
   0.14999    0.15404    0.15998    0.20726    0.31553    0.32863    0.33563    0.37591
   0.47780    0.52243    0.53035    0.56835    0.56946    0.58355
 kpt# 176, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3500  0.0000 (reduced coord)
  -2.10228   -1.15437   -1.15407   -1.15297   -0.96463   -0.40757   -0.38603   -0.37918
  -0.30220   -0.29299   -0.28955    0.04116    0.04714    0.06201    0.10366    0.10870
   0.14905    0.15473    0.15992    0.20835    0.31702    0.32861    0.33619    0.37632
   0.47972    0.52345    0.52924    0.57111    0.57196    0.58367
 kpt# 177, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3600  0.0000 (reduced coord)
  -2.10228   -1.15436   -1.15410   -1.15297   -0.96461   -0.40648   -0.38644   -0.37973
  -0.30213   -0.29268   -0.28969    0.04072    0.04593    0.06077    0.10378    0.10822
   0.14816    0.15538    0.15987    0.20935    0.31843    0.32860    0.33675    0.37669
   0.48155    0.52444    0.52820    0.57270    0.57560    0.58378
 kpt# 178, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3700  0.0000 (reduced coord)
  -2.10228   -1.15436   -1.15413   -1.15297   -0.96459   -0.40540   -0.38682   -0.38031
  -0.30207   -0.29239   -0.28982    0.04025    0.04480    0.05963    0.10390    0.10776
   0.14732    0.15600    0.15985    0.21028    0.31977    0.32859    0.33729    0.37702
   0.48329    0.52538    0.52723    0.57422    0.57925    0.58390
 kpt# 179, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3800  0.0000 (reduced coord)
  -2.10228   -1.15436   -1.15416   -1.15297   -0.96457   -0.40430   -0.38718   -0.38093
  -0.30200   -0.29211   -0.28993    0.03975    0.04376    0.05860    0.10401    0.10734
   0.14654    0.15658    0.15985    0.21112    0.32102    0.32858    0.33783    0.37732
   0.48492    0.52628    0.52632    0.57567    0.58290    0.58401
 kpt# 180, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3900  0.0000 (reduced coord)
  -2.10228   -1.15436   -1.15419   -1.15296   -0.96455   -0.40321   -0.38751   -0.38159
  -0.30195   -0.29186   -0.29003    0.03925    0.04279    0.05768    0.10412    0.10694
   0.14581    0.15712    0.15986    0.21189    0.32218    0.32857    0.33834    0.37759
   0.48644    0.52548    0.52712    0.57703    0.58411    0.58653
 kpt# 181, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4000  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15422   -1.15296   -0.96454   -0.40212   -0.38782   -0.38228
  -0.30189   -0.29162   -0.29011    0.03873    0.04190    0.05687    0.10422    0.10657
   0.14514    0.15763    0.15988    0.21259    0.32325    0.32856    0.33884    0.37783
   0.48785    0.52471    0.52790    0.57829    0.58420    0.59010
 kpt# 182, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4100  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15424   -1.15296   -0.96452   -0.40103   -0.38810   -0.38300
  -0.30184   -0.29141   -0.29019    0.03822    0.04109    0.05617    0.10431    0.10623
   0.14453    0.15809    0.15991    0.21321    0.32423    0.32855    0.33930    0.37804
   0.48915    0.52401    0.52862    0.57946    0.58429    0.59358
 kpt# 183, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4200  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15426   -1.15296   -0.96451   -0.39995   -0.38835   -0.38375
  -0.30180   -0.29121   -0.29025    0.03773    0.04037    0.05557    0.10440    0.10593
   0.14398    0.15851    0.15994    0.21376    0.32512    0.32855    0.33973    0.37823
   0.49031    0.52338    0.52928    0.58052    0.58437    0.59693
 kpt# 184, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4300  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15428   -1.15296   -0.96449   -0.39888   -0.38858   -0.38452
  -0.30176   -0.29104   -0.29031    0.03726    0.03973    0.05505    0.10448    0.10566
   0.14349    0.15888    0.15998    0.21425    0.32591    0.32854    0.34012    0.37840
   0.49135    0.52282    0.52986    0.58148    0.58444    0.60011
 kpt# 185, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4400  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15430   -1.15296   -0.96448   -0.39783   -0.38877   -0.38532
  -0.30172   -0.29089   -0.29035    0.03683    0.03918    0.05462    0.10455    0.10542
   0.14307    0.15921    0.16001    0.21466    0.32659    0.32853    0.34047    0.37853
   0.49226    0.52233    0.53038    0.58231    0.58451    0.60305
 kpt# 186, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4500  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15431   -1.15296   -0.96447   -0.39680   -0.38894   -0.38613
  -0.30169   -0.29076   -0.29039    0.03644    0.03871    0.05427    0.10461    0.10522
   0.14270    0.15949    0.16004    0.21501    0.32718    0.32853    0.34077    0.37865
   0.49303    0.52192    0.53082    0.58303    0.58456    0.60569
 kpt# 187, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4600  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15432   -1.15296   -0.96446   -0.39580   -0.38908   -0.38695
  -0.30166   -0.29066   -0.29042    0.03612    0.03832    0.05400    0.10466    0.10505
   0.14241    0.15971    0.16007    0.21529    0.32766    0.32853    0.34102    0.37874
   0.49366    0.52159    0.53118    0.58362    0.58461    0.60797
 kpt# 188, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4700  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15433   -1.15296   -0.96446   -0.39486   -0.38918   -0.38775
  -0.30165   -0.29058   -0.29044    0.03586    0.03802    0.05379    0.10470    0.10492
   0.14217    0.15989    0.16009    0.21551    0.32804    0.32852    0.34122    0.37882
   0.49416    0.52132    0.53147    0.58409    0.58464    0.60982
 kpt# 189, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4800  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39402   -0.38926   -0.38850
  -0.30163   -0.29052   -0.29046    0.03566    0.03781    0.05364    0.10473    0.10483
   0.14201    0.16002    0.16011    0.21567    0.32831    0.32852    0.34137    0.37887
   0.49451    0.52114    0.53168    0.58442    0.58467    0.61119
 kpt# 190, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4900  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39337   -0.38931   -0.38908
  -0.30162   -0.29048   -0.29047    0.03555    0.03768    0.05355    0.10475    0.10477
   0.14191    0.16010    0.16012    0.21576    0.32847    0.32852    0.34145    0.37890
   0.49473    0.52102    0.53180    0.58462    0.58469    0.61203
 kpt# 191, nband= 30, wtk=  1.00000, kpt=  0.5000  0.5000  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39311   -0.38932   -0.38932
  -0.30162   -0.29047   -0.29047    0.03551    0.03763    0.05352    0.10476    0.10476
   0.14187    0.16013    0.16013    0.21579    0.32852    0.32852    0.34148    0.37891
   0.49480    0.52099    0.53184    0.58469    0.58469    0.61231
 kpt# 192, nband= 30, wtk=  1.00000, kpt=  0.4929  0.4929  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39338   -0.38932   -0.38907
  -0.30162   -0.29048   -0.29047    0.03555    0.03768    0.05355    0.10475    0.10478
   0.14191    0.16009    0.16013    0.21576    0.32849    0.32850    0.34145    0.37890
   0.49473    0.52102    0.53180    0.58464    0.58466    0.61202
 kpt# 193, nband= 30, wtk=  1.00000, kpt=  0.4857  0.4857  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39402   -0.38930   -0.38845
  -0.30163   -0.29050   -0.29048    0.03567    0.03781    0.05364    0.10472    0.10484
   0.14201    0.15999    0.16014    0.21566    0.32839    0.32843    0.34136    0.37887
   0.49451    0.52114    0.53168    0.58451    0.58458    0.61117
 kpt# 194, nband= 30, wtk=  1.00000, kpt=  0.4786  0.4786  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96446   -0.39486   -0.38928   -0.38766
  -0.30165   -0.29054   -0.29049    0.03586    0.03804    0.05379    0.10467    0.10496
   0.14218    0.15983    0.16015    0.21550    0.32824    0.32831    0.34122    0.37882
   0.49415    0.52132    0.53147    0.58428    0.58444    0.60980
 kpt# 195, nband= 30, wtk=  1.00000, kpt=  0.4714  0.4714  0.0000 (reduced coord)
  -2.10228   -1.15433   -1.15433   -1.15296   -0.96447   -0.39578   -0.38924   -0.38681
  -0.30167   -0.29059   -0.29050    0.03612    0.03837    0.05399    0.10461    0.10511
   0.14241    0.15960    0.16018    0.21529    0.32801    0.32815    0.34101    0.37874
   0.49364    0.52155    0.53121    0.58396    0.58425    0.60796
 kpt# 196, nband= 30, wtk=  1.00000, kpt=  0.4643  0.4643  0.0000 (reduced coord)
  -2.10228   -1.15433   -1.15433   -1.15296   -0.96447   -0.39675   -0.38920   -0.38593
  -0.30169   -0.29065   -0.29051    0.03643    0.03880    0.05425    0.10453    0.10532
   0.14272    0.15932    0.16021    0.21500    0.32773    0.32795    0.34074    0.37865
   0.49299    0.52182    0.53089    0.58355    0.58400    0.60571
 kpt# 197, nband= 30, wtk=  1.00000, kpt=  0.4571  0.4571  0.0000 (reduced coord)
  -2.10228   -1.15432   -1.15432   -1.15296   -0.96448   -0.39774   -0.38914   -0.38505
  -0.30172   -0.29073   -0.29053    0.03679    0.03935    0.05458    0.10443    0.10556
   0.14308    0.15897    0.16024    0.21466    0.32738    0.32770    0.34042    0.37853
   0.49221    0.52209    0.53055    0.58306    0.58370    0.60313
 kpt# 198, nband= 30, wtk=  1.00000, kpt=  0.4500  0.4500  0.0000 (reduced coord)
  -2.10228   -1.15431   -1.15431   -1.15296   -0.96449   -0.39873   -0.38908   -0.38418
  -0.30176   -0.29082   -0.29054    0.03720    0.04002    0.05495    0.10432    0.10585
   0.14351    0.15858    0.16029    0.21426    0.32698    0.32740    0.34004    0.37840
   0.49128    0.52232    0.53023    0.58249    0.58334    0.60027
 kpt# 199, nband= 30, wtk=  1.00000, kpt=  0.4429  0.4429  0.0000 (reduced coord)
  -2.10228   -1.15431   -1.15430   -1.15296   -0.96451   -0.39973   -0.38900   -0.38334
  -0.30180   -0.29093   -0.29056    0.03765    0.04082    0.05539    0.10420    0.10619
   0.14400    0.15814    0.16034    0.21381    0.32651    0.32706    0.33960    0.37824
   0.49022    0.52245    0.52999    0.58184    0.58294    0.59717
 kpt# 200, nband= 30, wtk=  1.00000, kpt=  0.4357  0.4357  0.0000 (reduced coord)
  -2.10228   -1.15430   -1.15429   -1.15296   -0.96452   -0.40072   -0.38892   -0.38251
  -0.30185   -0.29105   -0.29058    0.03813    0.04173    0.05587    0.10407    0.10657
   0.14454    0.15765    0.16040    0.21330    0.32598    0.32667    0.33910    0.37806
   0.48903    0.52241    0.52987    0.58112    0.58248    0.59389
 kpt# 201, nband= 30, wtk=  1.00000, kpt=  0.4286  0.4286  0.0000 (reduced coord)
  -2.10228   -1.15429   -1.15428   -1.15296   -0.96454   -0.40171   -0.38882   -0.38172
  -0.30190   -0.29119   -0.29060    0.03865    0.04277    0.05642    0.10392    0.10699
   0.14514    0.15713    0.16047    0.21273    0.32540    0.32623    0.33855    0.37786
   0.48771    0.52214    0.52995    0.58033    0.58197    0.59044
 kpt# 202, nband= 30, wtk=  1.00000, kpt=  0.4214  0.4214  0.0000 (reduced coord)
  -2.10228   -1.15427   -1.15427   -1.15296   -0.96456   -0.40269   -0.38872   -0.38095
  -0.30196   -0.29133   -0.29062    0.03920    0.04392    0.05701    0.10377    0.10746
   0.14580    0.15658    0.16054    0.21212    0.32475    0.32575    0.33794    0.37764
   0.48626    0.52162    0.53022    0.57947    0.58141    0.58687
 kpt# 203, nband= 30, wtk=  1.00000, kpt=  0.4143  0.4143  0.0000 (reduced coord)
  -2.10228   -1.15426   -1.15425   -1.15297   -0.96458   -0.40365   -0.38861   -0.38022
  -0.30202   -0.29149   -0.29064    0.03980    0.04518    0.05766    0.10362    0.10797
   0.14650    0.15601    0.16063    0.21145    0.32405    0.32523    0.33728    0.37739
   0.48470    0.52086    0.53067    0.57856    0.58081    0.58319
 kpt# 204, nband= 30, wtk=  1.00000, kpt=  0.4071  0.4071  0.0000 (reduced coord)
  -2.10228   -1.15425   -1.15424   -1.15297   -0.96460   -0.40460   -0.38848   -0.37953
  -0.30209   -0.29167   -0.29067    0.04044    0.04655    0.05836    0.10346    0.10852
   0.14725    0.15542    0.16073    0.21074    0.32330    0.32466    0.33656    0.37712
   0.48301    0.51991    0.53124    0.57759    0.57942    0.58015
 kpt# 205, nband= 30, wtk=  1.00000, kpt=  0.4000  0.4000  0.0000 (reduced coord)
  -2.10228   -1.15423   -1.15422   -1.15297   -0.96462   -0.40554   -0.38835   -0.37887
  -0.30216   -0.29185   -0.29069    0.04111    0.04803    0.05911    0.10330    0.10912
   0.14805    0.15482    0.16084    0.20999    0.32249    0.32405    0.33579    0.37684
   0.48121    0.51879    0.53189    0.57557    0.57656    0.57946
 kpt# 206, nband= 30, wtk=  1.00000, kpt=  0.3929  0.3929  0.0000 (reduced coord)
  -2.10228   -1.15422   -1.15421   -1.15297   -0.96465   -0.40645   -0.38821   -0.37826
  -0.30223   -0.29205   -0.29071    0.04183    0.04961    0.05991    0.10314    0.10976
   0.14889    0.15422    0.16096    0.20920    0.32163    0.32339    0.33497    0.37652
   0.47931    0.51754    0.53257    0.57167    0.57550    0.57871
 kpt# 207, nband= 30, wtk=  1.00000, kpt=  0.3857  0.3857  0.0000 (reduced coord)
  -2.10229   -1.15420   -1.15419   -1.15297   -0.96467   -0.40734   -0.38806   -0.37769
  -0.30231   -0.29226   -0.29073    0.04259    0.05129    0.06075    0.10298    0.11044
   0.14978    0.15363    0.16109    0.20837    0.32073    0.32269    0.33410    0.37619
   0.47729    0.51618    0.53327    0.56772    0.57439    0.57793
 kpt# 208, nband= 30, wtk=  1.00000, kpt=  0.3786  0.3786  0.0000 (reduced coord)
  -2.10229   -1.15418   -1.15417   -1.15297   -0.96470   -0.40822   -0.38790   -0.37716
  -0.30240   -0.29249   -0.29075    0.04339    0.05307    0.06164    0.10282    0.11117
   0.15070    0.15304    0.16124    0.20751    0.31977    0.32194    0.33318    0.37583
   0.47518    0.51472    0.53394    0.56373    0.57325    0.57711
 kpt# 209, nband= 30, wtk=  1.00000, kpt=  0.3714  0.3714  0.0000 (reduced coord)
  -2.10229   -1.15416   -1.15415   -1.15298   -0.96473   -0.40906   -0.38773   -0.37668
  -0.30249   -0.29272   -0.29078    0.04422    0.05493    0.06257    0.10266    0.11193
   0.15166    0.15248    0.16140    0.20662    0.31876    0.32116    0.33221    0.37546
   0.47297    0.51318    0.53456    0.55971    0.57208    0.57625
 kpt# 210, nband= 30, wtk=  1.00000, kpt=  0.3643  0.3643  0.0000 (reduced coord)
  -2.10229   -1.15414   -1.15413   -1.15298   -0.96476   -0.40989   -0.38756   -0.37623
  -0.30258   -0.29297   -0.29080    0.04510    0.05689    0.06354    0.10251    0.11274
   0.15195    0.15265    0.16157    0.20570    0.31771    0.32032    0.33120    0.37505
   0.47066    0.51156    0.53511    0.55567    0.57089    0.57535
 kpt# 211, nband= 30, wtk=  1.00000, kpt=  0.3571  0.3571  0.0000 (reduced coord)
  -2.10229   -1.15412   -1.15411   -1.15298   -0.96480   -0.41069   -0.38737   -0.37584
  -0.30267   -0.29322   -0.29083    0.04601    0.05893    0.06454    0.10236    0.11359
   0.15146    0.15367    0.16177    0.20476    0.31662    0.31945    0.33014    0.37463
   0.46827    0.50988    0.53556    0.55162    0.56967    0.57442
 kpt# 212, nband= 30, wtk=  1.00000, kpt=  0.3500  0.3500  0.0000 (reduced coord)
  -2.10229   -1.15410   -1.15408   -1.15298   -0.96483   -0.41146   -0.38718   -0.37548
  -0.30277   -0.29349   -0.29087    0.04696    0.06105    0.06559    0.10222    0.11447
   0.15100    0.15473    0.16198    0.20379    0.31548    0.31853    0.32904    0.37418
   0.46579    0.50813    0.53591    0.54756    0.56844    0.57346
 kpt# 213, nband= 30, wtk=  1.00000, kpt=  0.3429  0.3429  0.0000 (reduced coord)
  -2.10229   -1.15408   -1.15406   -1.15298   -0.96487   -0.41221   -0.38698   -0.37517
  -0.30287   -0.29376   -0.29090    0.04795    0.06325    0.06667    0.10208    0.11540
   0.15060    0.15581    0.16220    0.20282    0.31431    0.31758    0.32790    0.37371
   0.46324    0.50632    0.53614    0.54349    0.56720    0.57247
 kpt# 214, nband= 30, wtk=  1.00000, kpt=  0.3357  0.3357  0.0000 (reduced coord)
  -2.10229   -1.15405   -1.15404   -1.15299   -0.96490   -0.41292   -0.38677   -0.37491
  -0.30298   -0.29405   -0.29095    0.04898    0.06552    0.06777    0.10196    0.11636
   0.15026    0.15692    0.16245    0.20183    0.31310    0.31658    0.32672    0.37321
   0.46061    0.50446    0.53622    0.53942    0.56594    0.57144
 kpt# 215, nband= 30, wtk=  1.00000, kpt=  0.3286  0.3286  0.0000 (reduced coord)
  -2.10229   -1.15403   -1.15401   -1.15299   -0.96494   -0.41361   -0.38656   -0.37468
  -0.30308   -0.29434   -0.29100    0.05003    0.06787    0.06891    0.10184    0.11737
   0.14997    0.15805    0.16271    0.20083    0.31185    0.31554    0.32550    0.37270
   0.45790    0.50255    0.53537    0.53615    0.56469    0.57040
 kpt# 216, nband= 30, wtk=  1.00000, kpt=  0.3214  0.3214  0.0000 (reduced coord)
  -2.10230   -1.15401   -1.15399   -1.15299   -0.96498   -0.41428   -0.38633   -0.37449
  -0.30319   -0.29465   -0.29107    0.05113    0.07007    0.07028    0.10172    0.11841
   0.14976    0.15920    0.16299    0.19983    0.31057    0.31446    0.32424    0.37216
   0.45513    0.50059    0.53132    0.53592    0.56343    0.56933
 kpt# 217, nband= 30, wtk=  1.00000, kpt=  0.3143  0.3143  0.0000 (reduced coord)
  -2.10230   -1.15398   -1.15396   -1.15299   -0.96502   -0.41491   -0.38610   -0.37435
  -0.30330   -0.29496   -0.29114    0.05225    0.07125    0.07275    0.10162    0.11949
   0.14962    0.16038    0.16330    0.19883    0.30925    0.31334    0.32294    0.37159
   0.45230    0.49859    0.52729    0.53552    0.56218    0.56824
 kpt# 218, nband= 30, wtk=  1.00000, kpt=  0.3071  0.3071  0.0000 (reduced coord)
  -2.10230   -1.15396   -1.15393   -1.15300   -0.96506   -0.41551   -0.38587   -0.37424
  -0.30341   -0.29527   -0.29123    0.05341    0.07245    0.07529    0.10153    0.12060
   0.14956    0.16157    0.16363    0.19783    0.30791    0.31218    0.32162    0.37101
   0.44940    0.49655    0.52328    0.53496    0.56093    0.56713
 kpt# 219, nband= 30, wtk=  1.00000, kpt=  0.3000  0.3000  0.0000 (reduced coord)
  -2.10230   -1.15393   -1.15391   -1.15300   -0.96510   -0.41608   -0.38563   -0.37416
  -0.30353   -0.29560   -0.29133    0.05460    0.07367    0.07788    0.10144    0.12175
   0.14958    0.16278    0.16398    0.19684    0.30654    0.31098    0.32026    0.37040
   0.44646    0.49447    0.51930    0.53421    0.55969    0.56601
 kpt# 220, nband= 30, wtk=  1.00000, kpt=  0.2929  0.2929  0.0000 (reduced coord)
  -2.10230   -1.15390   -1.15388   -1.15300   -0.96515   -0.41663   -0.38538   -0.37412
  -0.30364   -0.29593   -0.29145    0.05582    0.07490    0.08052    0.10136    0.12293
   0.14969    0.16401    0.16435    0.19586    0.30514    0.30975    0.31886    0.36976
   0.44346    0.49235    0.51535    0.53330    0.55847    0.56487
 kpt# 221, nband= 30, wtk=  1.00000, kpt=  0.2857  0.2857  0.0000 (reduced coord)
  -2.10230   -1.15388   -1.15385   -1.15300   -0.96519   -0.41714   -0.38513   -0.37411
  -0.30376   -0.29627   -0.29159    0.05706    0.07614    0.08321    0.10130    0.12415
   0.14990    0.16475    0.16525    0.19491    0.30373    0.30848    0.31744    0.36911
   0.44041    0.49021    0.51143    0.53222    0.55726    0.56372
 kpt# 222, nband= 30, wtk=  1.00000, kpt=  0.2786  0.2786  0.0000 (reduced coord)
  -2.10230   -1.15385   -1.15382   -1.15301   -0.96524   -0.41763   -0.38487   -0.37412
  -0.30387   -0.29661   -0.29174    0.05834    0.07738    0.08594    0.10124    0.12540
   0.15020    0.16517    0.16649    0.19397    0.30229    0.30717    0.31599    0.36843
   0.43733    0.48802    0.50754    0.53098    0.55607    0.56257
 kpt# 223, nband= 30, wtk=  1.00000, kpt=  0.2714  0.2714  0.0000 (reduced coord)
  -2.10231   -1.15382   -1.15380   -1.15301   -0.96528   -0.41808   -0.38461   -0.37416
  -0.30399   -0.29696   -0.29192    0.05964    0.07862    0.08872    0.10119    0.12668
   0.15060    0.16562    0.16775    0.19305    0.30083    0.30584    0.31451    0.36773
   0.43420    0.48581    0.50370    0.52958    0.55490    0.56140
 kpt# 224, nband= 30, wtk=  1.00000, kpt=  0.2643  0.2643  0.0000 (reduced coord)
  -2.10231   -1.15379   -1.15377   -1.15301   -0.96533   -0.41851   -0.38434   -0.37423
  -0.30411   -0.29732   -0.29212    0.06096    0.07986    0.09152    0.10115    0.12799
   0.15110    0.16609    0.16902    0.19217    0.29935    0.30446    0.31301    0.36701
   0.43104    0.48358    0.49990    0.52804    0.55375    0.56024
 kpt# 225, nband= 30, wtk=  1.00000, kpt=  0.2571  0.2571  0.0000 (reduced coord)
  -2.10231   -1.15377   -1.15374   -1.15302   -0.96538   -0.41891   -0.38407   -0.37431
  -0.30423   -0.29767   -0.29235    0.06231    0.08109    0.09436    0.10112    0.12933
   0.15170    0.16659    0.17030    0.19133    0.29786    0.30306    0.31148    0.36627
   0.42785    0.48131    0.49615    0.52636    0.55263    0.55907
 kpt# 226, nband= 30, wtk=  1.00000, kpt=  0.2500  0.2500  0.0000 (reduced coord)
  -2.10231   -1.15374   -1.15371   -1.15302   -0.96543   -0.41929   -0.38380   -0.37441
  -0.30434   -0.29803   -0.29260    0.06369    0.08232    0.09723    0.10110    0.13070
   0.15241    0.16710    0.17158    0.19052    0.29636    0.30163    0.30993    0.36551
   0.42464    0.47903    0.49245    0.52457    0.55153    0.55791
 kpt# 227, nband= 30, wtk=  1.00000, kpt=  0.2429  0.2429  0.0000 (reduced coord)
  -2.10231   -1.15371   -1.15368   -1.15302   -0.96547   -0.41963   -0.38352   -0.37453
  -0.30446   -0.29839   -0.29288    0.06508    0.08352    0.10011    0.10108    0.13209
   0.15322    0.16764    0.17287    0.18977    0.29485    0.30017    0.30835    0.36473
   0.42141    0.47672    0.48881    0.52266    0.55046    0.55675
 kpt# 228, nband= 30, wtk=  1.00000, kpt=  0.2357  0.2357  0.0000 (reduced coord)
  -2.10231   -1.15368   -1.15366   -1.15302   -0.96552   -0.41995   -0.38324   -0.37466
  -0.30458   -0.29876   -0.29318    0.06649    0.08471    0.10108    0.10302    0.13351
   0.15413    0.16819    0.17416    0.18906    0.29333    0.29868    0.30676    0.36394
   0.41816    0.47439    0.48522    0.52065    0.54941    0.55560
 kpt# 229, nband= 30, wtk=  1.00000, kpt=  0.2286  0.2286  0.0000 (reduced coord)
  -2.10231   -1.15365   -1.15363   -1.15303   -0.96557   -0.42025   -0.38296   -0.37479
  -0.30469   -0.29912   -0.29351    0.06792    0.08588    0.10108    0.10593    0.13495
   0.15514    0.16875    0.17545    0.18842    0.29180    0.29716    0.30514    0.36312
   0.41489    0.47205    0.48169    0.51855    0.54840    0.55445
 kpt# 230, nband= 30, wtk=  1.00000, kpt=  0.2214  0.2214  0.0000 (reduced coord)
  -2.10232   -1.15362   -1.15360   -1.15303   -0.96562   -0.42052   -0.38268   -0.37494
  -0.30481   -0.29949   -0.29386    0.06937    0.08701    0.10109    0.10886    0.13642
   0.15626    0.16932    0.17674    0.18785    0.29027    0.29562    0.30350    0.36229
   0.41163    0.46970    0.47823    0.51636    0.54741    0.55332
 kpt# 231, nband= 30, wtk=  1.00000, kpt=  0.2143  0.2143  0.0000 (reduced coord)
  -2.10232   -1.15360   -1.15357   -1.15303   -0.96567   -0.42076   -0.38240   -0.37509
  -0.30492   -0.29985   -0.29424    0.07083    0.08812    0.10111    0.11179    0.13790
   0.15748    0.16989    0.17803    0.18736    0.28874    0.29406    0.30184    0.36144
   0.40835    0.46734    0.47483    0.51411    0.54646    0.55219
 kpt# 232, nband= 30, wtk=  1.00000, kpt=  0.2071  0.2071  0.0000 (reduced coord)
  -2.10232   -1.15357   -1.15354   -1.15303   -0.96572   -0.42099   -0.38212   -0.37524
  -0.30503   -0.30022   -0.29465    0.07230    0.08920    0.10113    0.11471    0.13940
   0.15880    0.17045    0.17931    0.18696    0.28721    0.29248    0.30016    0.36058
   0.40508    0.46498    0.47151    0.51180    0.54554    0.55109
 kpt# 233, nband= 30, wtk=  1.00000, kpt=  0.2000  0.2000  0.0000 (reduced coord)
  -2.10232   -1.15354   -1.15352   -1.15304   -0.96576   -0.42119   -0.38183   -0.37540
  -0.30514   -0.30058   -0.29508    0.07378    0.09024    0.10116    0.11763    0.14092
   0.16021    0.17100    0.18059    0.18666    0.28569    0.29089    0.29846    0.35970
   0.40182    0.46261    0.46826    0.50944    0.54466    0.55000
 kpt# 234, nband= 30, wtk=  1.00000, kpt=  0.1929  0.1929  0.0000 (reduced coord)
  -2.10232   -1.15351   -1.15349   -1.15304   -0.96581   -0.42137   -0.38155   -0.37555
  -0.30525   -0.30094   -0.29553    0.07526    0.09124    0.10119    0.12054    0.14245
   0.16171    0.17151    0.18186    0.18647    0.28416    0.28927    0.29675    0.35882
   0.39857    0.46025    0.46508    0.50703    0.54380    0.54893
 kpt# 235, nband= 30, wtk=  1.00000, kpt=  0.1857  0.1857  0.0000 (reduced coord)
  -2.10232   -1.15349   -1.15346   -1.15304   -0.96586   -0.42154   -0.38127   -0.37570
  -0.30535   -0.30129   -0.29601    0.07675    0.09220    0.10123    0.12343    0.14400
   0.16329    0.17198    0.18313    0.18641    0.28265    0.28765    0.29502    0.35792
   0.39534    0.45789    0.46199    0.50459    0.54299    0.54788
 kpt# 236, nband= 30, wtk=  1.00000, kpt=  0.1786  0.1786  0.0000 (reduced coord)
  -2.10232   -1.15346   -1.15344   -1.15305   -0.96590   -0.42168   -0.38100   -0.37584
  -0.30546   -0.30165   -0.29650    0.07824    0.09311    0.10128    0.12631    0.14555
   0.16496    0.17239    0.18438    0.18648    0.28115    0.28602    0.29327    0.35702
   0.39213    0.45555    0.45898    0.50212    0.54220    0.54686
 kpt# 237, nband= 30, wtk=  1.00000, kpt=  0.1714  0.1714  0.0000 (reduced coord)
  -2.10233   -1.15343   -1.15341   -1.15305   -0.96595   -0.42181   -0.38072   -0.37598
  -0.30556   -0.30199   -0.29702    0.07972    0.09398    0.10133    0.12916    0.14710
   0.16671    0.17275    0.18563    0.18670    0.27966    0.28438    0.29151    0.35611
   0.38895    0.45323    0.45605    0.49963    0.54145    0.54587
 kpt# 238, nband= 30, wtk=  1.00000, kpt=  0.1643  0.1643  0.0000 (reduced coord)
  -2.10233   -1.15341   -1.15339   -1.15305   -0.96600   -0.42192   -0.38045   -0.37611
  -0.30565   -0.30233   -0.29755    0.08120    0.09480    0.10138    0.13198    0.14866
   0.16852    0.17304    0.18686    0.18705    0.27818    0.28273    0.28974    0.35520
   0.38580    0.45093    0.45322    0.49713    0.54074    0.54489
 kpt# 239, nband= 30, wtk=  1.00000, kpt=  0.1571  0.1571  0.0000 (reduced coord)
  -2.10233   -1.15338   -1.15336   -1.15305   -0.96604   -0.42202   -0.38019   -0.37623
  -0.30575   -0.30267   -0.29809    0.08266    0.09557    0.10143    0.13477    0.15022
   0.17040    0.17326    0.18755    0.18808    0.27672    0.28109    0.28795    0.35429
   0.38269    0.44866    0.45047    0.49464    0.54005    0.54399
 kpt# 240, nband= 30, wtk=  1.00000, kpt=  0.1500  0.1500  0.0000 (reduced coord)
  -2.10233   -1.15336   -1.15334   -1.15305   -0.96608   -0.42211   -0.37993   -0.37635
  -0.30584   -0.30300   -0.29864    0.08411    0.09630    0.10149    0.13751    0.15178
   0.17233    0.17342    0.18818    0.18928    0.27529    0.27946    0.28615    0.35337
   0.37963    0.44642    0.44783    0.49215    0.53941    0.54306
 kpt# 241, nband= 30, wtk=  1.00000, kpt=  0.1429  0.1429  0.0000 (reduced coord)
  -2.10233   -1.15333   -1.15332   -1.15306   -0.96612   -0.42218   -0.37967   -0.37645
  -0.30593   -0.30332   -0.29921    0.08554    0.09697    0.10155    0.14022    0.15332
   0.17353    0.17430    0.18892    0.19046    0.27388    0.27783    0.28434    0.35247
   0.37663    0.44423    0.44528    0.48968    0.53879    0.54216
 kpt# 242, nband= 30, wtk=  1.00000, kpt=  0.1357  0.1357  0.0000 (reduced coord)
  -2.10233   -1.15331   -1.15330   -1.15306   -0.96617   -0.42224   -0.37942   -0.37654
  -0.30601   -0.30363   -0.29977    0.08694    0.09760    0.10161    0.14287    0.15486
   0.17360    0.17631    0.18976    0.19161    0.27249    0.27621    0.28253    0.35157
   0.37368    0.44208    0.44283    0.48723    0.53821    0.54132
 kpt# 243, nband= 30, wtk=  1.00000, kpt=  0.1286  0.1286  0.0000 (reduced coord)
  -2.10233   -1.15329   -1.15328   -1.15306   -0.96620   -0.42230   -0.37918   -0.37662
  -0.30609   -0.30393   -0.30034    0.08831    0.09818    0.10167    0.14547    0.15638
   0.17363    0.17835    0.19069    0.19275    0.27114    0.27462    0.28071    0.35068
   0.37080    0.43999    0.44048    0.48482    0.53776    0.54064
 kpt# 244, nband= 30, wtk=  1.00000, kpt=  0.1214  0.1214  0.0000 (reduced coord)
  -2.10233   -1.15327   -1.15326   -1.15306   -0.96624   -0.42234   -0.37895   -0.37668
  -0.30617   -0.30422   -0.30091    0.08965    0.09872    0.10173    0.14802    0.15787
   0.17364    0.18041    0.19168    0.19386    0.26981    0.27305    0.27888    0.34980
   0.36800    0.43796    0.43825    0.48246    0.53724    0.53987
 kpt# 245, nband= 30, wtk=  1.00000, kpt=  0.1143  0.1143  0.0000 (reduced coord)
  -2.10234   -1.15325   -1.15324   -1.15307   -0.96628   -0.42238   -0.37872   -0.37674
  -0.30625   -0.30450   -0.30147    0.09095    0.09920    0.10179    0.15049    0.15934
   0.17363    0.18247    0.19273    0.19494    0.26853    0.27150    0.27707    0.34894
   0.36528    0.43600    0.43612    0.48016    0.53667    0.53900
 kpt# 246, nband= 30, wtk=  1.00000, kpt=  0.1071  0.1071  0.0000 (reduced coord)
  -2.10234   -1.15323   -1.15322   -1.15307   -0.96631   -0.42241   -0.37851   -0.37679
  -0.30632   -0.30476   -0.30202    0.09220    0.09965    0.10186    0.15289    0.16078
   0.17361    0.18453    0.19381    0.19599    0.26728    0.27000    0.27525    0.34810
   0.36265    0.43411    0.43411    0.47792    0.53623    0.53831
 kpt# 247, nband= 30, wtk=  1.00000, kpt=  0.1000  0.1000  0.0000 (reduced coord)
  -2.10234   -1.15321   -1.15320   -1.15307   -0.96635   -0.42243   -0.37830   -0.37682
  -0.30638   -0.30502   -0.30256    0.09340    0.10005    0.10192    0.15521    0.16218
   0.17359    0.18658    0.19490    0.19700    0.26608    0.26853    0.27346    0.34729
   0.36013    0.43221    0.43231    0.47576    0.53583    0.53764
 kpt# 248, nband= 30, wtk=  1.00000, kpt=  0.0929  0.0929  0.0000 (reduced coord)
  -2.10234   -1.15319   -1.15319   -1.15307   -0.96638   -0.42245   -0.37811   -0.37685
  -0.30645   -0.30526   -0.30308    0.09455    0.10041    0.10197    0.15744    0.16353
   0.17356    0.18859    0.19601    0.19797    0.26494    0.26712    0.27168    0.34650
   0.35771    0.43043    0.43059    0.47369    0.53542    0.53703
 kpt# 249, nband= 30, wtk=  1.00000, kpt=  0.0857  0.0857  0.0000 (reduced coord)
  -2.10234   -1.15318   -1.15317   -1.15307   -0.96641   -0.42246   -0.37792   -0.37687
  -0.30650   -0.30548   -0.30358    0.09564    0.10074    0.10203    0.15957    0.16482
   0.17354    0.19057    0.19710    0.19890    0.26384    0.26576    0.26993    0.34575
   0.35542    0.42877    0.42897    0.47172    0.53507    0.53647
 kpt# 250, nband= 30, wtk=  1.00000, kpt=  0.0786  0.0786  0.0000 (reduced coord)
  -2.10234   -1.15316   -1.15316   -1.15307   -0.96643   -0.42248   -0.37775   -0.37688
  -0.30656   -0.30569   -0.30406    0.09666    0.10103    0.10208    0.16159    0.16606
   0.17351    0.19248    0.19817    0.19978    0.26280    0.26446    0.26822    0.34504
   0.35326    0.42724    0.42746    0.46986    0.53475    0.53596
 kpt# 251, nband= 30, wtk=  1.00000, kpt=  0.0714  0.0714  0.0000 (reduced coord)
  -2.10234   -1.15315   -1.15314   -1.15307   -0.96646   -0.42248   -0.37759   -0.37688
  -0.30661   -0.30589   -0.30451    0.09761    0.10129    0.10213    0.16349    0.16723
   0.17349    0.19433    0.19920    0.20061    0.26183    0.26324    0.26657    0.34437
   0.35123    0.42583    0.42605    0.46813    0.53447    0.53549
 kpt# 252, nband= 30, wtk=  1.00000, kpt=  0.0643  0.0643  0.0000 (reduced coord)
  -2.10234   -1.15314   -1.15313   -1.15308   -0.96648   -0.42249   -0.37745   -0.37688
  -0.30665   -0.30606   -0.30492    0.09848    0.10151    0.10218    0.16525    0.16832
   0.17347    0.19609    0.20018    0.20138    0.26093    0.26210    0.26498    0.34374
   0.34936    0.42455    0.42475    0.46652    0.53439    0.53525
 kpt# 253, nband= 30, wtk=  1.00000, kpt=  0.0571  0.0571  0.0000 (reduced coord)
  -2.10234   -1.15312   -1.15312   -1.15308   -0.96650   -0.42249   -0.37732   -0.37687
  -0.30669   -0.30622   -0.30531    0.09928    0.10171    0.10222    0.16688    0.16933
   0.17346    0.19775    0.20110    0.20209    0.26010    0.26104    0.26347    0.34317
   0.34765    0.42339    0.42358    0.46506    0.53405    0.53473
 kpt# 254, nband= 30, wtk=  1.00000, kpt=  0.0500  0.0500  0.0000 (reduced coord)
  -2.10234   -1.15311   -1.15311   -1.15308   -0.96652   -0.42250   -0.37720   -0.37686
  -0.30673   -0.30637   -0.30566    0.09999    0.10187    0.10226    0.16835    0.17025
   0.17345    0.19929    0.20195    0.20273    0.25935    0.26009    0.26205    0.34265
   0.34611    0.42237    0.42252    0.46375    0.53390    0.53452
 kpt# 255, nband= 30, wtk=  1.00000, kpt=  0.0429  0.0429  0.0000 (reduced coord)
  -2.10234   -1.15311   -1.15310   -1.15308   -0.96654   -0.42250   -0.37710   -0.37685
  -0.30676   -0.30649   -0.30596    0.10062    0.10202    0.10229    0.16965    0.17106
   0.17344    0.20069    0.20270    0.20330    0.25869    0.25924    0.26076    0.34219
   0.34476    0.42148    0.42160    0.46259    0.53360    0.53398
 kpt# 256, nband= 30, wtk=  1.00000, kpt=  0.0357  0.0357  0.0000 (reduced coord)
  -2.10234   -1.15310   -1.15310   -1.15308   -0.96655   -0.42250   -0.37701   -0.37684
  -0.30678   -0.30660   -0.30623    0.10115    0.10213    0.10232    0.17078    0.17176
   0.17343    0.20192    0.20337    0.20379    0.25811    0.25850    0.25962    0.34180
   0.34359    0.42073    0.42082    0.46160    0.53354    0.53371
 kpt# 257, nband= 30, wtk=  1.00000, kpt=  0.0286  0.0286  0.0000 (reduced coord)
  -2.10234   -1.15309   -1.15309   -1.15308   -0.96656   -0.42250   -0.37694   -0.37683
  -0.30681   -0.30669   -0.30645    0.10159    0.10223    0.10234    0.17172    0.17235
   0.17343    0.20297    0.20392    0.20420    0.25764    0.25789    0.25863    0.34147
   0.34262    0.42011    0.42017    0.46078    0.53342    0.53376
 kpt# 258, nband= 30, wtk=  1.00000, kpt=  0.0214  0.0214  0.0000 (reduced coord)
  -2.10234   -1.15309   -1.15309   -1.15308   -0.96657   -0.42250   -0.37688   -0.37682
  -0.30682   -0.30676   -0.30662    0.10194    0.10230    0.10236    0.17246    0.17281
   0.17342    0.20382    0.20436    0.20452    0.25726    0.25741    0.25784    0.34121
   0.34186    0.41962    0.41966    0.46013    0.53328    0.53331
 kpt# 259, nband= 30, wtk=  1.00000, kpt=  0.0143  0.0143  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37684   -0.37682
  -0.30684   -0.30681   -0.30674    0.10219    0.10235    0.10238    0.17299    0.17315
   0.17342    0.20444    0.20468    0.20475    0.25699    0.25706    0.25725    0.34103
   0.34132    0.41928    0.41929    0.45967    0.53314    0.53324
 kpt# 260, nband= 30, wtk=  1.00000, kpt=  0.0071  0.0071  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37682   -0.37681
  -0.30684   -0.30684   -0.30682    0.10234    0.10238    0.10238    0.17331    0.17335
   0.17342    0.20482    0.20488    0.20490    0.25683    0.25685    0.25690    0.34091
   0.34099    0.41907    0.41908    0.45939    0.53309    0.53311
 kpt# 261, nband= 30, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37681   -0.37681
  -0.30685   -0.30685   -0.30685    0.10239    0.10239    0.10239    0.17342    0.17342
   0.17342    0.20494    0.20494    0.20494    0.25678    0.25678    0.25678    0.34087
   0.34087    0.41900    0.41900    0.45930    0.53307    0.53307
 Total charge density [el/Bohr^3]
      Maximum=    1.9681E+00  at reduced coord.    0.0000    0.0000    0.0000
 Next maximum=    1.9399E+00  at reduced coord.    0.0000    0.0000    0.9815
      Minimum=    5.6281E-03  at reduced coord.    0.5000    0.5000    0.0000
 Next minimum=    5.6281E-03  at reduced coord.    0.5000    0.0000    0.5000
   Integrated=    4.1000E+01
 
== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      7.2605000000E+00  7.2605000000E+00  7.2605000000E+00 Bohr
              amu      5.09415000E+01  8.76200000E+01  1.59994000E+01
        dmatpuopt           1
        dmftbandf          23
        dmftbandi          21
        dmft_iter          10
        dmft_mxsf      8.0000000000E-01
        dmft_nwli      100000
        dmft_nwlo        1600
        dmft_rslf           1
             ecut      2.00000000E+01 Hartree
-          fftalg         512
        f4of2_sla      0.00000000E+00  0.00000000E+00  0.00000000E+00
           getden           1
           iatsph3       1    2    3    4    5
             iscf          -2
           istwfk        1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1
              ixc       -1012
           jdtset        3
              kpt      5.00000000E-01  5.00000000E-01  5.00000000E-01
                       4.94444444E-01  4.94444444E-01  4.94444444E-01
                       4.88888889E-01  4.88888889E-01  4.88888889E-01
                       4.83333333E-01  4.83333333E-01  4.83333333E-01
                       4.77777778E-01  4.77777778E-01  4.77777778E-01
                       4.72222222E-01  4.72222222E-01  4.72222222E-01
                       4.66666667E-01  4.66666667E-01  4.66666667E-01
                       4.61111111E-01  4.61111111E-01  4.61111111E-01
                       4.55555556E-01  4.55555556E-01  4.55555556E-01
                       4.50000000E-01  4.50000000E-01  4.50000000E-01
                       4.44444444E-01  4.44444444E-01  4.44444444E-01
                       4.38888889E-01  4.38888889E-01  4.38888889E-01
                       4.33333333E-01  4.33333333E-01  4.33333333E-01
                       4.27777778E-01  4.27777778E-01  4.27777778E-01
                       4.22222222E-01  4.22222222E-01  4.22222222E-01
                       4.16666667E-01  4.16666667E-01  4.16666667E-01
                       4.11111111E-01  4.11111111E-01  4.11111111E-01
                       4.05555556E-01  4.05555556E-01  4.05555556E-01
                       4.00000000E-01  4.00000000E-01  4.00000000E-01
                       3.94444444E-01  3.94444444E-01  3.94444444E-01
                       3.88888889E-01  3.88888889E-01  3.88888889E-01
                       3.83333333E-01  3.83333333E-01  3.83333333E-01
                       3.77777778E-01  3.77777778E-01  3.77777778E-01
                       3.72222222E-01  3.72222222E-01  3.72222222E-01
                       3.66666667E-01  3.66666667E-01  3.66666667E-01
                       3.61111111E-01  3.61111111E-01  3.61111111E-01
                       3.55555556E-01  3.55555556E-01  3.55555556E-01
                       3.50000000E-01  3.50000000E-01  3.50000000E-01
                       3.44444444E-01  3.44444444E-01  3.44444444E-01
                       3.38888889E-01  3.38888889E-01  3.38888889E-01
                       3.33333333E-01  3.33333333E-01  3.33333333E-01
                       3.27777778E-01  3.27777778E-01  3.27777778E-01
                       3.22222222E-01  3.22222222E-01  3.22222222E-01
                       3.16666667E-01  3.16666667E-01  3.16666667E-01
                       3.11111111E-01  3.11111111E-01  3.11111111E-01
                       3.05555556E-01  3.05555556E-01  3.05555556E-01
                       3.00000000E-01  3.00000000E-01  3.00000000E-01
                       2.94444444E-01  2.94444444E-01  2.94444444E-01
                       2.88888889E-01  2.88888889E-01  2.88888889E-01
                       2.83333333E-01  2.83333333E-01  2.83333333E-01
                       2.77777778E-01  2.77777778E-01  2.77777778E-01
                       2.72222222E-01  2.72222222E-01  2.72222222E-01
                       2.66666667E-01  2.66666667E-01  2.66666667E-01
                       2.61111111E-01  2.61111111E-01  2.61111111E-01
                       2.55555556E-01  2.55555556E-01  2.55555556E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       2.44444444E-01  2.44444444E-01  2.44444444E-01
                       2.38888889E-01  2.38888889E-01  2.38888889E-01
                       2.33333333E-01  2.33333333E-01  2.33333333E-01
                       2.27777778E-01  2.27777778E-01  2.27777778E-01
                       2.22222222E-01  2.22222222E-01  2.22222222E-01
                       2.16666667E-01  2.16666667E-01  2.16666667E-01
                       2.11111111E-01  2.11111111E-01  2.11111111E-01
                       2.05555556E-01  2.05555556E-01  2.05555556E-01
                       2.00000000E-01  2.00000000E-01  2.00000000E-01
                       1.94444444E-01  1.94444444E-01  1.94444444E-01
                       1.88888889E-01  1.88888889E-01  1.88888889E-01
                       1.83333333E-01  1.83333333E-01  1.83333333E-01
                       1.77777778E-01  1.77777778E-01  1.77777778E-01
                       1.72222222E-01  1.72222222E-01  1.72222222E-01
                       1.66666667E-01  1.66666667E-01  1.66666667E-01
                       1.61111111E-01  1.61111111E-01  1.61111111E-01
                       1.55555556E-01  1.55555556E-01  1.55555556E-01
                       1.50000000E-01  1.50000000E-01  1.50000000E-01
                       1.44444444E-01  1.44444444E-01  1.44444444E-01
                       1.38888889E-01  1.38888889E-01  1.38888889E-01
                       1.33333333E-01  1.33333333E-01  1.33333333E-01
                       1.27777778E-01  1.27777778E-01  1.27777778E-01
                       1.22222222E-01  1.22222222E-01  1.22222222E-01
                       1.16666667E-01  1.16666667E-01  1.16666667E-01
                       1.11111111E-01  1.11111111E-01  1.11111111E-01
                       1.05555556E-01  1.05555556E-01  1.05555556E-01
                       1.00000000E-01  1.00000000E-01  1.00000000E-01
                       9.44444444E-02  9.44444444E-02  9.44444444E-02
                       8.88888889E-02  8.88888889E-02  8.88888889E-02
                       8.33333333E-02  8.33333333E-02  8.33333333E-02
                       7.77777778E-02  7.77777778E-02  7.77777778E-02
                       7.22222222E-02  7.22222222E-02  7.22222222E-02
                       6.66666667E-02  6.66666667E-02  6.66666667E-02
                       6.11111111E-02  6.11111111E-02  6.11111111E-02
                       5.55555556E-02  5.55555556E-02  5.55555556E-02
                       5.00000000E-02  5.00000000E-02  5.00000000E-02
                       4.44444444E-02  4.44444444E-02  4.44444444E-02
                       3.88888889E-02  3.88888889E-02  3.88888889E-02
                       3.33333333E-02  3.33333333E-02  3.33333333E-02
                       2.77777778E-02  2.77777778E-02  2.77777778E-02
                       2.22222222E-02  2.22222222E-02  2.22222222E-02
                       1.66666667E-02  1.66666667E-02  1.66666667E-02
                       1.11111111E-02  1.11111111E-02  1.11111111E-02
                       5.55555556E-03  5.55555556E-03  5.55555556E-03
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.00000000E-02  0.00000000E+00  0.00000000E+00
                       2.00000000E-02  0.00000000E+00  0.00000000E+00
                       3.00000000E-02  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  0.00000000E+00  0.00000000E+00
                       5.00000000E-02  0.00000000E+00  0.00000000E+00
                       6.00000000E-02  0.00000000E+00  0.00000000E+00
                       7.00000000E-02  0.00000000E+00  0.00000000E+00
                       8.00000000E-02  0.00000000E+00  0.00000000E+00
                       9.00000000E-02  0.00000000E+00  0.00000000E+00
                       1.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.10000000E-01  0.00000000E+00  0.00000000E+00
                       1.20000000E-01  0.00000000E+00  0.00000000E+00
                       1.30000000E-01  0.00000000E+00  0.00000000E+00
                       1.40000000E-01  0.00000000E+00  0.00000000E+00
                       1.50000000E-01  0.00000000E+00  0.00000000E+00
                       1.60000000E-01  0.00000000E+00  0.00000000E+00
                       1.70000000E-01  0.00000000E+00  0.00000000E+00
                       1.80000000E-01  0.00000000E+00  0.00000000E+00
                       1.90000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.10000000E-01  0.00000000E+00  0.00000000E+00
                       2.20000000E-01  0.00000000E+00  0.00000000E+00
                       2.30000000E-01  0.00000000E+00  0.00000000E+00
                       2.40000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       2.60000000E-01  0.00000000E+00  0.00000000E+00
                       2.70000000E-01  0.00000000E+00  0.00000000E+00
                       2.80000000E-01  0.00000000E+00  0.00000000E+00
                       2.90000000E-01  0.00000000E+00  0.00000000E+00
                       3.00000000E-01  0.00000000E+00  0.00000000E+00
                       3.10000000E-01  0.00000000E+00  0.00000000E+00
                       3.20000000E-01  0.00000000E+00  0.00000000E+00
                       3.30000000E-01  0.00000000E+00  0.00000000E+00
                       3.40000000E-01  0.00000000E+00  0.00000000E+00
                       3.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.60000000E-01  0.00000000E+00  0.00000000E+00
                       3.70000000E-01  0.00000000E+00  0.00000000E+00
                       3.80000000E-01  0.00000000E+00  0.00000000E+00
                       3.90000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.10000000E-01  0.00000000E+00  0.00000000E+00
                       4.20000000E-01  0.00000000E+00  0.00000000E+00
                       4.30000000E-01  0.00000000E+00  0.00000000E+00
                       4.40000000E-01  0.00000000E+00  0.00000000E+00
                       4.50000000E-01  0.00000000E+00  0.00000000E+00
                       4.60000000E-01  0.00000000E+00  0.00000000E+00
                       4.70000000E-01  0.00000000E+00  0.00000000E+00
                       4.80000000E-01  0.00000000E+00  0.00000000E+00
                       4.90000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  1.00000000E-02  0.00000000E+00
                       5.00000000E-01  2.00000000E-02  0.00000000E+00
                       5.00000000E-01  3.00000000E-02  0.00000000E+00
                       5.00000000E-01  4.00000000E-02  0.00000000E+00
                       5.00000000E-01  5.00000000E-02  0.00000000E+00
                       5.00000000E-01  6.00000000E-02  0.00000000E+00
                       5.00000000E-01  7.00000000E-02  0.00000000E+00
                       5.00000000E-01  8.00000000E-02  0.00000000E+00
                       5.00000000E-01  9.00000000E-02  0.00000000E+00
                       5.00000000E-01  1.00000000E-01  0.00000000E+00
                       5.00000000E-01  1.10000000E-01  0.00000000E+00
                       5.00000000E-01  1.20000000E-01  0.00000000E+00
                       5.00000000E-01  1.30000000E-01  0.00000000E+00
                       5.00000000E-01  1.40000000E-01  0.00000000E+00
                       5.00000000E-01  1.50000000E-01  0.00000000E+00
                       5.00000000E-01  1.60000000E-01  0.00000000E+00
                       5.00000000E-01  1.70000000E-01  0.00000000E+00
                       5.00000000E-01  1.80000000E-01  0.00000000E+00
                       5.00000000E-01  1.90000000E-01  0.00000000E+00
                       5.00000000E-01  2.00000000E-01  0.00000000E+00
                       5.00000000E-01  2.10000000E-01  0.00000000E+00
                       5.00000000E-01  2.20000000E-01  0.00000000E+00
                       5.00000000E-01  2.30000000E-01  0.00000000E+00
                       5.00000000E-01  2.40000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.60000000E-01  0.00000000E+00
                       5.00000000E-01  2.70000000E-01  0.00000000E+00
                       5.00000000E-01  2.80000000E-01  0.00000000E+00
                       5.00000000E-01  2.90000000E-01  0.00000000E+00
                       5.00000000E-01  3.00000000E-01  0.00000000E+00
                       5.00000000E-01  3.10000000E-01  0.00000000E+00
                       5.00000000E-01  3.20000000E-01  0.00000000E+00
                       5.00000000E-01  3.30000000E-01  0.00000000E+00
                       5.00000000E-01  3.40000000E-01  0.00000000E+00
                       5.00000000E-01  3.50000000E-01  0.00000000E+00
                       5.00000000E-01  3.60000000E-01  0.00000000E+00
                       5.00000000E-01  3.70000000E-01  0.00000000E+00
                       5.00000000E-01  3.80000000E-01  0.00000000E+00
                       5.00000000E-01  3.90000000E-01  0.00000000E+00
                       5.00000000E-01  4.00000000E-01  0.00000000E+00
                       5.00000000E-01  4.10000000E-01  0.00000000E+00
                       5.00000000E-01  4.20000000E-01  0.00000000E+00
                       5.00000000E-01  4.30000000E-01  0.00000000E+00
                       5.00000000E-01  4.40000000E-01  0.00000000E+00
                       5.00000000E-01  4.50000000E-01  0.00000000E+00
                       5.00000000E-01  4.60000000E-01  0.00000000E+00
                       5.00000000E-01  4.70000000E-01  0.00000000E+00
                       5.00000000E-01  4.80000000E-01  0.00000000E+00
                       5.00000000E-01  4.90000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       4.92857143E-01  4.92857143E-01  0.00000000E+00
                       4.85714286E-01  4.85714286E-01  0.00000000E+00
                       4.78571429E-01  4.78571429E-01  0.00000000E+00
                       4.71428571E-01  4.71428571E-01  0.00000000E+00
                       4.64285714E-01  4.64285714E-01  0.00000000E+00
                       4.57142857E-01  4.57142857E-01  0.00000000E+00
                       4.50000000E-01  4.50000000E-01  0.00000000E+00
                       4.42857143E-01  4.42857143E-01  0.00000000E+00
                       4.35714286E-01  4.35714286E-01  0.00000000E+00
                       4.28571429E-01  4.28571429E-01  0.00000000E+00
                       4.21428571E-01  4.21428571E-01  0.00000000E+00
                       4.14285714E-01  4.14285714E-01  0.00000000E+00
                       4.07142857E-01  4.07142857E-01  0.00000000E+00
                       4.00000000E-01  4.00000000E-01  0.00000000E+00
                       3.92857143E-01  3.92857143E-01  0.00000000E+00
                       3.85714286E-01  3.85714286E-01  0.00000000E+00
                       3.78571429E-01  3.78571429E-01  0.00000000E+00
                       3.71428571E-01  3.71428571E-01  0.00000000E+00
                       3.64285714E-01  3.64285714E-01  0.00000000E+00
                       3.57142857E-01  3.57142857E-01  0.00000000E+00
                       3.50000000E-01  3.50000000E-01  0.00000000E+00
                       3.42857143E-01  3.42857143E-01  0.00000000E+00
                       3.35714286E-01  3.35714286E-01  0.00000000E+00
                       3.28571429E-01  3.28571429E-01  0.00000000E+00
                       3.21428571E-01  3.21428571E-01  0.00000000E+00
                       3.14285714E-01  3.14285714E-01  0.00000000E+00
                       3.07142857E-01  3.07142857E-01  0.00000000E+00
                       3.00000000E-01  3.00000000E-01  0.00000000E+00
                       2.92857143E-01  2.92857143E-01  0.00000000E+00
                       2.85714286E-01  2.85714286E-01  0.00000000E+00
                       2.78571429E-01  2.78571429E-01  0.00000000E+00
                       2.71428571E-01  2.71428571E-01  0.00000000E+00
                       2.64285714E-01  2.64285714E-01  0.00000000E+00
                       2.57142857E-01  2.57142857E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       2.42857143E-01  2.42857143E-01  0.00000000E+00
                       2.35714286E-01  2.35714286E-01  0.00000000E+00
                       2.28571429E-01  2.28571429E-01  0.00000000E+00
                       2.21428571E-01  2.21428571E-01  0.00000000E+00
                       2.14285714E-01  2.14285714E-01  0.00000000E+00
                       2.07142857E-01  2.07142857E-01  0.00000000E+00
                       2.00000000E-01  2.00000000E-01  0.00000000E+00
                       1.92857143E-01  1.92857143E-01  0.00000000E+00
                       1.85714286E-01  1.85714286E-01  0.00000000E+00
                       1.78571429E-01  1.78571429E-01  0.00000000E+00
                       1.71428571E-01  1.71428571E-01  0.00000000E+00
                       1.64285714E-01  1.64285714E-01  0.00000000E+00
                       1.57142857E-01  1.57142857E-01  0.00000000E+00
                       1.50000000E-01  1.50000000E-01  0.00000000E+00
                       1.42857143E-01  1.42857143E-01  0.00000000E+00
                       1.35714286E-01  1.35714286E-01  0.00000000E+00
                       1.28571429E-01  1.28571429E-01  0.00000000E+00
                       1.21428571E-01  1.21428571E-01  0.00000000E+00
                       1.14285714E-01  1.14285714E-01  0.00000000E+00
                       1.07142857E-01  1.07142857E-01  0.00000000E+00
                       1.00000000E-01  1.00000000E-01  0.00000000E+00
                       9.28571429E-02  9.28571429E-02  0.00000000E+00
                       8.57142857E-02  8.57142857E-02  0.00000000E+00
                       7.85714286E-02  7.85714286E-02  0.00000000E+00
                       7.14285714E-02  7.14285714E-02  0.00000000E+00
                       6.42857143E-02  6.42857143E-02  0.00000000E+00
                       5.71428571E-02  5.71428571E-02  0.00000000E+00
                       5.00000000E-02  5.00000000E-02  0.00000000E+00
                       4.28571429E-02  4.28571429E-02  0.00000000E+00
                       3.57142857E-02  3.57142857E-02  0.00000000E+00
                       2.85714286E-02  2.85714286E-02  0.00000000E+00
                       2.14285714E-02  2.14285714E-02  0.00000000E+00
                       1.42857143E-02  1.42857143E-02  0.00000000E+00
                       7.14285714E-03  7.14285714E-03  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
           kptopt          -4
          kssform           3
            lpawu           2      -1      -1
P           mkmem           8
            natom           5
           natsph        5
            nband          30
         nbandkss          30
           nbdbuf           2
           ndtset           1
            ngfft          30      30      30
          ngfftdg          54      54      54
             nkpt         261
             nsym          48
           ntypat           3
           occopt           3
        optforces           0
        pawecutdg      6.00000000E+01 Hartree
        pawfatbnd           1
        pawprtvol           3
     plowan_bandi          21
     plowan_bandf          23
   plowan_compute           1
     plowan_natom           1
        plowan_nt           1
 plowan_realspace           1
        plowan_it3       0    0    0
     plowan_iatom3       1
       plowan_nbl3       1
     plowan_lcalc3       2
  plowan_projcalc3      -2
           prtvol           4
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         221
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
           tolwfr      1.00000000E-12
           tsmear      3.80017850E-03 Hartree
            typat      1  2  3  3  3
          usepawu          10
           useylm           1
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.9210455615E+00  1.9210455615E+00  1.9210455615E+00
                       1.9210455615E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  1.9210455615E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.9210455615E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.6302500000E+00  3.6302500000E+00  3.6302500000E+00
                       3.6302500000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  3.6302500000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.6302500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
            znucl       23.00000   38.00000    8.00000
 
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
 For information on why they are suggested, see also https://docs.abinit.org/theory/acknowledgments.
-
- [1] Gamma and beta cerium: DFT+U calculations of ground-state parameters.
- B. Amadon, F. Jollet and M. Torrent, Phys. Rev. B 77, 155104 (2008).
- Comment: DFT+U calculations, usepawu/=0. Strong suggestion to cite this paper.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#amadon2008a
-
- [2] Implementation of the Projector Augmented-Wave Method in the ABINIT code.
- M. Torrent, F. Jollet, F. Bottin, G. Zerah, and X. Gonze Comput. Mat. Science 42, 337, (2008).
- Comment: PAW calculations. Strong suggestion to cite this paper.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#torrent2008
-
- [3] Libxc: A library of exchange and correlation functionals for density functional theory.
- M.A.L. Marques, M.J.T. Oliveira, T. Burnus, Computer Physics Communications 183, 2227 (2012).
- Comment: to be cited when LibXC is used (negative value of ixc)
- Strong suggestion to cite this paper.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#marques2012
-
- [4] The Abinit project: Impact, environment and recent developments.
- Computer Phys. Comm. 248, 107042 (2020).
- X.Gonze, B. Amadon, G. Antonius, F.Arnardi, L.Baguet, J.-M.Beuken,
- J.Bieder, F.Bottin, J.Bouchet, E.Bousquet, N.Brouwer, F.Bruneval,
- G.Brunin, T.Cavignac, J.-B. Charraud, Wei Chen, M.Cote, S.Cottenier,
- J.Denier, G.Geneste, Ph.Ghosez, M.Giantomassi, Y.Gillet, O.Gingras,
- D.R.Hamann, G.Hautier, Xu He, N.Helbig, N.Holzwarth, Y.Jia, F.Jollet,
- W.Lafargue-Dit-Hauret, K.Lejaeghere, M.A.L.Marques, A.Martin, C.Martins,
- H.P.C. Miranda, F.Naccarato, K. Persson, G.Petretto, V.Planes, Y.Pouillon,
- S.Prokhorenko, F.Ricci, G.-M.Rignanese, A.H.Romero, M.M.Schmitt, M.Torrent,
- M.J.van Setten, B.Van Troeye, M.J.Verstraete, G.Zerah and J.W.Zwanzig
- Comment: the fifth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/sites/default/files/ABINIT20.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze2020
-
- [5] ABINIT: Overview, and focus on selected capabilities
- J. Chem. Phys. 152, 124102 (2020).
- A. Romero, D.C. Allan, B. Amadon, G. Antonius, T. Applencourt, L.Baguet,
- J.Bieder, F.Bottin, J.Bouchet, E.Bousquet, F.Bruneval,
- G.Brunin, D.Caliste, M.Cote,
- J.Denier, C. Dreyer, Ph.Ghosez, M.Giantomassi, Y.Gillet, O.Gingras,
- D.R.Hamann, G.Hautier, F.Jollet, G. Jomard,
- A.Martin, 
- H.P.C. Miranda, F.Naccarato, G.Petretto, N.A. Pike, V.Planes,
- S.Prokhorenko, T. Rangel, F.Ricci, G.-M.Rignanese, M.Royo, M.Stengel, M.Torrent,
- M.J.van Setten, B.Van Troeye, M.J.Verstraete, J.Wiktor, J.W.Zwanziger, and X.Gonze.
- Comment: a global overview of ABINIT, with focus on selected capabilities .
- Note that a version of this paper, that is not formatted for J. Chem. Phys 
- is available at https://www.abinit.org/sites/default/files/ABINIT20_JPC.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#romero2020
-
- [6] Recent developments in the ABINIT software package.
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
- B.Xu, A.Zhou, J.W.Zwanziger.
- Comment: the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/sites/default/files/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze2016
-
- Proc.   0 individual time (sec): cpu=         10.7  wall=         11.1
 
================================================================================
 
 Calculation completed.
.Delivered   1 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=        396.0  wall=        397.6
