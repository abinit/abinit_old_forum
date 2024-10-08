
.Version 7.10.5 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel15.0 computer) 

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

.Starting date : Thu 22 Oct 2020.
- ( at 10h59 )
  
- input  file    -> kpt.in
- output file    -> ./out/kpt.out
- root for input  files -> ./tmp/tmp_kpti
- root for output files -> ./tmp/tmp_kpto
 
- inpspheads : Reading pseudopotential header in XML form from ./ps/Hf.LDA_PW-JTH.xml
- inpspheads : Reading pseudopotential header in XML form from ./ps/O.LDA_PW-JTH.xml
 
 Symmetries : space group Pc a 2_1 (# 29); Bravais oP (primitive ortho.)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         1
  lmnmax =        18   lnmax =         6   mband =        50  mffmem =         1
P  mgfft =        40   mkmem =        64 mpssoang=         3     mpw =      2952
  mqgrid =      3001   natom =        12    nfft =     51840    nkpt =        64
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =         1  ntypat =         2  occopt =         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        45    nfftf =     91125
================================================================================
P This job should need less than                     209.211 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    144.143 Mbytes ; DEN or POT disk file :      0.697 Mbytes.
================================================================================
 
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    1
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      1.78490000E+02  1.59994000E+01
          dilatmx      1.05000000E+00
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         112
           istwfk        2    0    0    3    0    0    0    0    0    0
                         0    0    6    0    0    7    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    4    0
                         0    5    0    0    0    0    0    0    0    0
                         8    0    0    9
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.66666667E-01  0.00000000E+00  0.00000000E+00
                       3.33333333E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       0.00000000E+00  1.66666667E-01  0.00000000E+00
                       1.66666667E-01  1.66666667E-01  0.00000000E+00
                       3.33333333E-01  1.66666667E-01  0.00000000E+00
                       5.00000000E-01  1.66666667E-01  0.00000000E+00
                       0.00000000E+00  3.33333333E-01  0.00000000E+00
                       1.66666667E-01  3.33333333E-01  0.00000000E+00
                       3.33333333E-01  3.33333333E-01  0.00000000E+00
                       5.00000000E-01  3.33333333E-01  0.00000000E+00
                       0.00000000E+00  5.00000000E-01  0.00000000E+00
                       1.66666667E-01  5.00000000E-01  0.00000000E+00
                       3.33333333E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  1.66666667E-01
                       1.66666667E-01  0.00000000E+00  1.66666667E-01
                       3.33333333E-01  0.00000000E+00  1.66666667E-01
                       5.00000000E-01  0.00000000E+00  1.66666667E-01
                       0.00000000E+00  1.66666667E-01  1.66666667E-01
                       1.66666667E-01  1.66666667E-01  1.66666667E-01
                       3.33333333E-01  1.66666667E-01  1.66666667E-01
                       5.00000000E-01  1.66666667E-01  1.66666667E-01
                       0.00000000E+00  3.33333333E-01  1.66666667E-01
                       1.66666667E-01  3.33333333E-01  1.66666667E-01
                       3.33333333E-01  3.33333333E-01  1.66666667E-01
                       5.00000000E-01  3.33333333E-01  1.66666667E-01
                       0.00000000E+00  5.00000000E-01  1.66666667E-01
                       1.66666667E-01  5.00000000E-01  1.66666667E-01
                       3.33333333E-01  5.00000000E-01  1.66666667E-01
                       5.00000000E-01  5.00000000E-01  1.66666667E-01
                       0.00000000E+00  0.00000000E+00  3.33333333E-01
                       1.66666667E-01  0.00000000E+00  3.33333333E-01
                       3.33333333E-01  0.00000000E+00  3.33333333E-01
                       5.00000000E-01  0.00000000E+00  3.33333333E-01
                       0.00000000E+00  1.66666667E-01  3.33333333E-01
                       1.66666667E-01  1.66666667E-01  3.33333333E-01
                       3.33333333E-01  1.66666667E-01  3.33333333E-01
                       5.00000000E-01  1.66666667E-01  3.33333333E-01
                       0.00000000E+00  3.33333333E-01  3.33333333E-01
                       1.66666667E-01  3.33333333E-01  3.33333333E-01
                       3.33333333E-01  3.33333333E-01  3.33333333E-01
                       5.00000000E-01  3.33333333E-01  3.33333333E-01
                       0.00000000E+00  5.00000000E-01  3.33333333E-01
                       1.66666667E-01  5.00000000E-01  3.33333333E-01
                       3.33333333E-01  5.00000000E-01  3.33333333E-01
                       5.00000000E-01  5.00000000E-01  3.33333333E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       1.66666667E-01  0.00000000E+00  5.00000000E-01
                       3.33333333E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       0.00000000E+00  1.66666667E-01  5.00000000E-01
                       1.66666667E-01  1.66666667E-01  5.00000000E-01
                       3.33333333E-01  1.66666667E-01  5.00000000E-01
                       5.00000000E-01  1.66666667E-01  5.00000000E-01
                       0.00000000E+00  3.33333333E-01  5.00000000E-01
                       1.66666667E-01  3.33333333E-01  5.00000000E-01
                       3.33333333E-01  3.33333333E-01  5.00000000E-01
                       5.00000000E-01  3.33333333E-01  5.00000000E-01
                       0.00000000E+00  5.00000000E-01  5.00000000E-01
                       1.66666667E-01  5.00000000E-01  5.00000000E-01
                       3.33333333E-01  5.00000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        6    0    0      0    6    0      0    0    6
          kptrlen      5.73097242E+01
P           mkmem          64
            natom          12
            nband          50
            ngfft          36      40      36
          ngfftdg          45      45      45
             nkpt          64
            nline           1
            nstep           1
             nsym           4
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000
        pawecutdg      2.00000000E+01 Hartree
           prtvol          -1
            rprim      9.5516206969E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  9.9613133207E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  9.6064227545E+00
          spgroup          29
           symrel      1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.5000000 -0.0000000  0.0000000
                       0.0000000 -0.0000000  0.5000000     0.5000000  0.0000000  0.5000000
           tolwfr      1.00000000E-08
            typat      1  1  1  1  2  2  2  2  2  2  2  2
           useylm           1
              wtk        0.00463    0.00926    0.00926    0.00463    0.00926    0.01852
                         0.01852    0.00926    0.00926    0.01852    0.01852    0.00926
                         0.00463    0.00926    0.00926    0.00463    0.00926    0.01852
                         0.01852    0.00926    0.01852    0.03704    0.03704    0.01852
                         0.01852    0.03704    0.03704    0.01852    0.00926    0.01852
                         0.01852    0.00926    0.00926    0.01852    0.01852    0.00926
                         0.01852    0.03704    0.03704    0.01852    0.01852    0.03704
                         0.03704    0.01852    0.00926    0.01852    0.01852    0.00926
                         0.00463    0.00926    0.00926    0.00463    0.00926    0.01852
                         0.01852    0.00926    0.00926    0.01852    0.01852    0.00926
                         0.00463    0.00926    0.00926    0.00463
           xangst      1.6174399929E-01  1.4074370938E+00  1.8115052171E+00
                       4.8927559786E+00  3.8638628831E+00  4.3532552060E+00
                       2.6889939882E+00  3.8638628831E+00  1.8115052171E+00
                       2.3655059897E+00  1.4074370938E+00  4.3532552060E+00
                       6.8225640702E-01  3.5918638043E-01  0.0000000000E+00
                       4.3722435709E+00  4.9121135965E+00  2.5417499889E+00
                       3.2095063960E+00  4.9121135965E+00  0.0000000000E+00
                       1.8449935819E+00  3.5918638043E-01  2.5417499889E+00
                       1.3626931940E+00  2.8333237376E+00  5.4113857263E-01
                       3.6918067839E+00  2.4379762393E+00  3.0828885615E+00
                       3.8899431830E+00  2.4379762393E+00  5.4113857263E-01
                       1.1645567949E+00  2.8333237376E+00  3.0828885615E+00
            xcart      3.0565186230E-01  2.6596706566E+00  3.4232487486E+00
                       9.2459688346E+00  7.3016426641E+00  8.2264601258E+00
                       5.0814622108E+00  7.3016426641E+00  3.4232487486E+00
                       4.4701584861E+00  2.6596706566E+00  8.2264601258E+00
                       1.2892777617E+00  6.7876388967E-01  0.0000000000E+00
                       8.2623429352E+00  9.2825494310E+00  4.8032113772E+00
                       6.0650881101E+00  9.2825494310E+00  0.0000000000E+00
                       3.4865325868E+00  6.7876388967E-01  4.8032113772E+00
                       2.5751169399E+00  5.3542059099E+00  1.0226037022E+00
                       6.9765037570E+00  4.6071074108E+00  5.8258150795E+00
                       7.3509272883E+00  4.6071074108E+00  1.0226037022E+00
                       2.2006934086E+00  5.3542059099E+00  5.8258150795E+00
             xred      3.2000000000E-02  2.6700000000E-01  3.5635000000E-01
                       9.6800000000E-01  7.3300000000E-01  8.5635000000E-01
                       5.3200000000E-01  7.3300000000E-01  3.5635000000E-01
                       4.6800000000E-01  2.6700000000E-01  8.5635000000E-01
                       1.3498000000E-01  6.8140000000E-02  0.0000000000E+00
                       8.6502000000E-01  9.3186000000E-01  5.0000000000E-01
                       6.3498000000E-01  9.3186000000E-01  0.0000000000E+00
                       3.6502000000E-01  6.8140000000E-02  5.0000000000E-01
                       2.6960000000E-01  5.3750000000E-01  1.0645000000E-01
                       7.3040000000E-01  4.6250000000E-01  6.0645000000E-01
                       7.6960000000E-01  4.6250000000E-01  1.0645000000E-01
                       2.3040000000E-01  5.3750000000E-01  6.0645000000E-01
            znucl       72.00000    8.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency.
 
 abinit : before driver, prtvol=-1, debugging mode => will skip driver
 
== END DATASET(S) ==============================================================
================================================================================
 
 abinit : before driver, prtvol=-1, debugging mode => will skip outvars


- Timing analysis has been suppressed with timopt=0


 
 abinit : before driver, prtvol=-1, debugging mode => will skip acknowledgments
-
- Proc.   0 individual time (sec): cpu=          0.2  wall=          0.3
 
================================================================================
 
 Calculation completed.
.Delivered    2 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=          0.2  wall=          0.3
