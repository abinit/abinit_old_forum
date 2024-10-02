
.Version 7.6.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel12.1 computer) 

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

.Starting date : Mon 30 Jun 2014.
- ( at 07h53 )
  
- input  file    -> CoO.in
- output file    -> CoO.outD
- root for input  files -> CoOin
- root for output files -> CoOout


 DATASET    1 : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         2
  lmnmax =        18   lnmax =         6   mband =         9  mffmem =         1
P  mgfft =        30   mkmem =         6 mpssoang=         3     mpw =      1017
  mqgrid =      3001   natom =         2    nfft =     27000    nkpt =        60
  nloalg =         4  nspden =         2 nspinor =         1  nsppol =         2
    nsym =        48  n1xccc =         1  ntypat =         2  occopt =         3
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        48    nfftf =    110592
================================================================================
P This job should need less than                      62.912 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     16.762 Mbytes ; DEN or POT disk file :      1.690 Mbytes.
================================================================================

--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      8.0000000000E+00  8.0000000000E+00  8.0000000000E+00 Bohr
              amu      5.89332000E+01  1.59994000E+01
      chksymbreak           0
         dmatpawu        1.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    1.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    1.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    1.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    1.00000
                         1.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    1.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
             ecut      3.00000000E+01 Hartree
           iatsph1       1    2
              ixc          11
           jdtset        1
            jpawu      2.93994603E-02  0.00000000E+00
              kpt      6.25000000E-02  6.25000000E-02  6.25000000E-02
                       1.87500000E-01  6.25000000E-02  6.25000000E-02
                       3.12500000E-01  6.25000000E-02  6.25000000E-02
                       4.37500000E-01  6.25000000E-02  6.25000000E-02
                      -4.37500000E-01  6.25000000E-02  6.25000000E-02
                      -3.12500000E-01  6.25000000E-02  6.25000000E-02
                      -1.87500000E-01  6.25000000E-02  6.25000000E-02
                      -6.25000000E-02  6.25000000E-02  6.25000000E-02
                       1.87500000E-01  1.87500000E-01  6.25000000E-02
                       3.12500000E-01  1.87500000E-01  6.25000000E-02
                       4.37500000E-01  1.87500000E-01  6.25000000E-02
                      -4.37500000E-01  1.87500000E-01  6.25000000E-02
                      -3.12500000E-01  1.87500000E-01  6.25000000E-02
                      -1.87500000E-01  1.87500000E-01  6.25000000E-02
                      -6.25000000E-02  1.87500000E-01  6.25000000E-02
                       3.12500000E-01  3.12500000E-01  6.25000000E-02
                       4.37500000E-01  3.12500000E-01  6.25000000E-02
                      -4.37500000E-01  3.12500000E-01  6.25000000E-02
                      -3.12500000E-01  3.12500000E-01  6.25000000E-02
                      -1.87500000E-01  3.12500000E-01  6.25000000E-02
                      -6.25000000E-02  3.12500000E-01  6.25000000E-02
                       4.37500000E-01  4.37500000E-01  6.25000000E-02
                      -4.37500000E-01  4.37500000E-01  6.25000000E-02
                      -3.12500000E-01  4.37500000E-01  6.25000000E-02
                      -1.87500000E-01  4.37500000E-01  6.25000000E-02
                      -6.25000000E-02  4.37500000E-01  6.25000000E-02
                      -4.37500000E-01 -4.37500000E-01  6.25000000E-02
                      -3.12500000E-01 -4.37500000E-01  6.25000000E-02
                      -1.87500000E-01 -4.37500000E-01  6.25000000E-02
                      -3.12500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -1.87500000E-01  6.25000000E-02
                       1.87500000E-01  1.87500000E-01  1.87500000E-01
                       3.12500000E-01  1.87500000E-01  1.87500000E-01
                       4.37500000E-01  1.87500000E-01  1.87500000E-01
                      -4.37500000E-01  1.87500000E-01  1.87500000E-01
                      -3.12500000E-01  1.87500000E-01  1.87500000E-01
                      -1.87500000E-01  1.87500000E-01  1.87500000E-01
                       3.12500000E-01  3.12500000E-01  1.87500000E-01
                       4.37500000E-01  3.12500000E-01  1.87500000E-01
                      -4.37500000E-01  3.12500000E-01  1.87500000E-01
                      -3.12500000E-01  3.12500000E-01  1.87500000E-01
                      -1.87500000E-01  3.12500000E-01  1.87500000E-01
                       4.37500000E-01  4.37500000E-01  1.87500000E-01
                      -4.37500000E-01  4.37500000E-01  1.87500000E-01
                      -3.12500000E-01  4.37500000E-01  1.87500000E-01
                      -1.87500000E-01  4.37500000E-01  1.87500000E-01
                      -4.37500000E-01 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -3.12500000E-01  1.87500000E-01
                       outvar_i_n : Printing only first  50 k-points.
           kptopt           4
         kptrlatt        8    0    0      0    8    0      0    0    8
          kptrlen      4.52548340E+01
            lpawu           2      -1
P           mkmem           6
            natom           2
           natsph        2
            nband           9
           ndtset           1
            ngfft          30      30      30
          ngfftdg          48      48      48
             nkpt          60
-           npkpt          20
           nspden           2
           nsppol           2
            nstep        1000
             nsym          48
           ntypat           2
              occ      1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  1.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       1.000000  1.000000  1.000000  1.000000  1.000000  1.000000
                       1.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           3
        optforces           0
        pawecutdg      8.00000000E+01 Hartree
           prtdos           3
            rprim      5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         225
           spinat      0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
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
           tolvrs      1.00000000E-06
            typat      1  2
            upawu      2.93994603E-01  0.00000000E+00
        usedmatpu          10
          usepawu           1
           useylm           1
              wtk        0.00391    0.01172    0.01172    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.01172    0.02344    0.02344    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.02344    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.02344    0.02344
                         0.02344    0.02344    0.01172    0.02344    0.02344    0.01172
                         0.02344    0.01172    0.00391    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.01172    0.02344    0.02344    0.02344
                         0.02344    0.01172    0.02344    0.02344    0.02344    0.01172
                         0.02344    0.01172
                       outvars : Printing only first  50 k-points.
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.1167088344E+00  2.1167088344E+00  2.1167088344E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       4.0000000000E+00  4.0000000000E+00  4.0000000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
            znucl       27.00000    8.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

================================================================================
== DATASET  1 ==================================================================
-   nproc =   20

 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.0000000  4.0000000  0.0000000  G(1)=  0.1250000  0.1250000 -0.1250000
 R(2)=  0.0000000  4.0000000  4.0000000  G(2)= -0.1250000  0.1250000  0.1250000
 R(3)=  4.0000000  0.0000000  4.0000000  G(3)=  0.1250000 -0.1250000  0.1250000
 Unit cell volume ucvol=  1.2800000E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     30.000   => boxcut(ratio)=   2.15329

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     80.000   => boxcut(ratio)=   2.10744

--- Pseudopotential description ------------------------------------------------
- pspini: atom type   1  psp file is Co.atompaw.gga.paw
- pspatm: opening atomic psp file    Co.atompaw.gga.paw
- Paw atomic data for element Co - Generated by AtomPAW + AtomPAW2Abinit v3.2.1
- 27.00000   9.00000  20090115                znucl, zion, pspdat
    7   11    2    0      1079   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.31363306
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1079 , AA= 0.30804E-03 BB= 0.83171E-02
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size=1074 , AA= 0.30804E-03 BB= 0.83171E-02
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size=1169 , AA= 0.30804E-03 BB= 0.83171E-02
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size=1250 , AA= 0.30804E-03 BB= 0.83171E-02
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  2.00854057
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid  2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 4
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is O-GGA-hard-uspp.paw
- pspatm: opening atomic psp file    O-GGA-hard-uspp.paw
- oxygen - PAW data extracted from US-psp (D.Vanderbilt) - generated by USpp2Abinit v2.3.0
-  8.00000   6.00000  20090106                znucl, zion, pspdat
    7   11    1    0       489   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.11262345
 5 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 489 , AA= 0.30984E-03 BB= 0.16949E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 548 , AA= 0.30984E-03 BB= 0.16949E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 506 , AA= 0.30984E-03 BB= 0.16949E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 613 , AA= 0.30984E-03 BB= 0.16949E-01
  - mesh 5: r(i)=AA*[exp(BB*(i-1))-1], size= 608 , AA= 0.30984E-03 BB= 0.16949E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid  2
 Radial grid used for (t)core density is grid 3
 Radial grid used for Vloc is grid 4
 Radial grid used for pseudo valence density is grid 5
 pspatm: atomic psp has been read  and splines computed

   2.15878030E+02                                ecore*ucvol(ha*bohr**3)
--------------------------------------------------------------------------------

P newkpt: treating      9 bands with npw=     971 for ikpt=   1 by node    0
P newkpt: treating      9 bands with npw=     988 for ikpt=   2 by node    0
P newkpt: treating      9 bands with npw=     997 for ikpt=   3 by node    0
P newkpt: treating      9 bands with npw=    1009 for ikpt=   4 by node    0
P newkpt: treating      9 bands with npw=    1001 for ikpt=   5 by node    0
P newkpt: treating      9 bands with npw=    1005 for ikpt=   6 by node    0
P newkpt: treating      9 bands with npw=     993 for ikpt=   7 by node    1
P newkpt: treating      9 bands with npw=     984 for ikpt=   8 by node    1
P newkpt: treating      9 bands with npw=     989 for ikpt=   9 by node    1
P newkpt: treating      9 bands with npw=    1000 for ikpt=  10 by node    1
P newkpt: treating      9 bands with npw=    1006 for ikpt=  11 by node    1
P newkpt: treating      9 bands with npw=    1007 for ikpt=  12 by node    1
P newkpt: treating      9 bands with npw=    1009 for ikpt=  13 by node    2
P newkpt: treating      9 bands with npw=    1001 for ikpt=  14 by node    2
P newkpt: treating      9 bands with npw=     995 for ikpt=  15 by node    2
P newkpt: treating      9 bands with npw=    1008 for ikpt=  16 by node    2
P newkpt: treating      9 bands with npw=    1016 for ikpt=  17 by node    2
P newkpt: treating      9 bands with npw=    1008 for ikpt=  18 by node    2
P newkpt: treating      9 bands with npw=    1004 for ikpt=  19 by node    3
P newkpt: treating      9 bands with npw=    1009 for ikpt=  20 by node    3
P newkpt: treating      9 bands with npw=     999 for ikpt=  21 by node    3
P newkpt: treating      9 bands with npw=    1005 for ikpt=  22 by node    3
P newkpt: treating      9 bands with npw=    1002 for ikpt=  23 by node    3
P newkpt: treating      9 bands with npw=    1008 for ikpt=  24 by node    3
P newkpt: treating      9 bands with npw=    1003 for ikpt=  25 by node    4
P newkpt: treating      9 bands with npw=    1011 for ikpt=  26 by node    4
P newkpt: treating      9 bands with npw=    1003 for ikpt=  27 by node    4
P newkpt: treating      9 bands with npw=    1006 for ikpt=  28 by node    4
P newkpt: treating      9 bands with npw=    1010 for ikpt=  29 by node    4
P newkpt: treating      9 bands with npw=    1017 for ikpt=  30 by node    4
P newkpt: treating      9 bands with npw=    1006 for ikpt=  31 by node    5
P newkpt: treating      9 bands with npw=     991 for ikpt=  32 by node    5
P newkpt: treating      9 bands with npw=     989 for ikpt=  33 by node    5
P newkpt: treating      9 bands with npw=     993 for ikpt=  34 by node    5
P newkpt: treating      9 bands with npw=    1000 for ikpt=  35 by node    5
P newkpt: treating      9 bands with npw=    1003 for ikpt=  36 by node    5
P newkpt: treating      9 bands with npw=    1005 for ikpt=  37 by node    6
P newkpt: treating      9 bands with npw=    1007 for ikpt=  38 by node    6
P newkpt: treating      9 bands with npw=    1000 for ikpt=  39 by node    6
P newkpt: treating      9 bands with npw=    1006 for ikpt=  40 by node    6
P newkpt: treating      9 bands with npw=    1012 for ikpt=  41 by node    6
P newkpt: treating      9 bands with npw=    1011 for ikpt=  42 by node    6
P newkpt: treating      9 bands with npw=    1012 for ikpt=  43 by node    7
P newkpt: treating      9 bands with npw=    1010 for ikpt=  44 by node    7
P newkpt: treating      9 bands with npw=    1010 for ikpt=  45 by node    7
P newkpt: treating      9 bands with npw=    1013 for ikpt=  46 by node    7
P newkpt: treating      9 bands with npw=    1010 for ikpt=  47 by node    7
P newkpt: treating      9 bands with npw=    1007 for ikpt=  48 by node    7
P newkpt: treating      9 bands with npw=    1007 for ikpt=  49 by node    8
P newkpt: treating      9 bands with npw=    1008 for ikpt=  50 by node    8
 newkpt: prtvol=0 or 1, do not print more k-points.
P newkpt: treating      9 bands with npw=     971 for ikpt=   1 by node   19
P newkpt: treating      9 bands with npw=     988 for ikpt=   2 by node   19
P newkpt: treating      9 bands with npw=     997 for ikpt=   3 by node   19
P newkpt: treating      9 bands with npw=    1009 for ikpt=   4 by node   19
P newkpt: treating      9 bands with npw=    1001 for ikpt=   5 by node   19
P newkpt: treating      9 bands with npw=    1005 for ikpt=   6 by node   19
P newkpt: treating      9 bands with npw=     993 for ikpt=   7 by node   18
P newkpt: treating      9 bands with npw=     984 for ikpt=   8 by node   18
P newkpt: treating      9 bands with npw=     989 for ikpt=   9 by node   18
P newkpt: treating      9 bands with npw=    1000 for ikpt=  10 by node   18
P newkpt: treating      9 bands with npw=    1006 for ikpt=  11 by node   18
P newkpt: treating      9 bands with npw=    1007 for ikpt=  12 by node   18
P newkpt: treating      9 bands with npw=    1009 for ikpt=  13 by node   17
P newkpt: treating      9 bands with npw=    1001 for ikpt=  14 by node   17
P newkpt: treating      9 bands with npw=     995 for ikpt=  15 by node   17
P newkpt: treating      9 bands with npw=    1008 for ikpt=  16 by node   17
P newkpt: treating      9 bands with npw=    1016 for ikpt=  17 by node   17
P newkpt: treating      9 bands with npw=    1008 for ikpt=  18 by node   17
P newkpt: treating      9 bands with npw=    1004 for ikpt=  19 by node   16
P newkpt: treating      9 bands with npw=    1009 for ikpt=  20 by node   16
P newkpt: treating      9 bands with npw=     999 for ikpt=  21 by node   16
P newkpt: treating      9 bands with npw=    1005 for ikpt=  22 by node   16
P newkpt: treating      9 bands with npw=    1002 for ikpt=  23 by node   16
P newkpt: treating      9 bands with npw=    1008 for ikpt=  24 by node   16
P newkpt: treating      9 bands with npw=    1003 for ikpt=  25 by node   15
P newkpt: treating      9 bands with npw=    1011 for ikpt=  26 by node   15
P newkpt: treating      9 bands with npw=    1003 for ikpt=  27 by node   15
P newkpt: treating      9 bands with npw=    1006 for ikpt=  28 by node   15
P newkpt: treating      9 bands with npw=    1010 for ikpt=  29 by node   15
P newkpt: treating      9 bands with npw=    1017 for ikpt=  30 by node   15
P newkpt: treating      9 bands with npw=    1006 for ikpt=  31 by node   14
P newkpt: treating      9 bands with npw=     991 for ikpt=  32 by node   14
P newkpt: treating      9 bands with npw=     989 for ikpt=  33 by node   14
P newkpt: treating      9 bands with npw=     993 for ikpt=  34 by node   14
P newkpt: treating      9 bands with npw=    1000 for ikpt=  35 by node   14
P newkpt: treating      9 bands with npw=    1003 for ikpt=  36 by node   14
P newkpt: treating      9 bands with npw=    1005 for ikpt=  37 by node   13
P newkpt: treating      9 bands with npw=    1007 for ikpt=  38 by node   13
P newkpt: treating      9 bands with npw=    1000 for ikpt=  39 by node   13
P newkpt: treating      9 bands with npw=    1006 for ikpt=  40 by node   13
P newkpt: treating      9 bands with npw=    1012 for ikpt=  41 by node   13
P newkpt: treating      9 bands with npw=    1011 for ikpt=  42 by node   13
P newkpt: treating      9 bands with npw=    1012 for ikpt=  43 by node   12
P newkpt: treating      9 bands with npw=    1010 for ikpt=  44 by node   12
P newkpt: treating      9 bands with npw=    1010 for ikpt=  45 by node   12
P newkpt: treating      9 bands with npw=    1013 for ikpt=  46 by node   12
P newkpt: treating      9 bands with npw=    1010 for ikpt=  47 by node   12
P newkpt: treating      9 bands with npw=    1007 for ikpt=  48 by node   12
P newkpt: treating      9 bands with npw=    1007 for ikpt=  49 by node   11
P newkpt: treating      9 bands with npw=    1008 for ikpt=  50 by node   11
 newkpt: prtvol=0 or 1, do not print more k-points.
 
_setup2: Arith. and geom. avg. npw (full set) are    1005.027    1005.005


 ******************************************
 LDA+U Method used: FLL
 ******************************************

================================================================================

     iter   Etot(hartree)     deltaE(h) residm    nres2    magn
 ETOT  1  -43.971154941071    -4.40E+01 1.35E+01 3.99E+02 1.003
 ETOT  2  -46.379126774042    -2.41E+00 2.09E+00 6.85E+02 2.620
 ETOT  3  -46.194101872361     1.85E-01 5.49E-01 1.89E+02 2.439
 ETOT  4  -46.167720886353     2.64E-02 2.02E-01 5.46E+01 2.565
 ETOT  5  -46.170133129258    -2.41E-03 4.16E-02 3.05E+01 2.432
 ETOT  6  -46.180306055273    -1.02E-02 7.25E-02 4.46E+00 2.494
 ETOT  7  -46.181903881332    -1.60E-03 2.92E-02 5.71E-01 2.532
 ETOT  8  -46.187300847683    -5.40E-03 3.63E-02 8.32E-01 2.567
 ETOT  9  -46.195200390108    -7.90E-03 2.61E-02 7.34E-01 2.511
 ETOT 10  -46.195143525524     5.69E-05 1.18E-02 1.80E+00 2.525
 ETOT 11  -46.183030769221     1.21E-02 5.58E-03 1.92E+00 2.418
 ETOT 12  -46.183094277488    -6.35E-05 9.22E-03 6.89E-01 2.418
 ETOT 13  -46.183516344177    -4.22E-04 1.54E-03 1.49E+00 2.400
 ETOT 14  -46.183926736446    -4.10E-04 2.51E-03 3.02E+00 2.379
 ETOT 15  -46.184837403539    -9.11E-04 1.86E-03 4.85E+00 2.322
 ETOT 16  -46.184818598360     1.88E-05 1.50E-03 5.19E+00 2.314
 ETOT 17  -46.184965369171    -1.47E-04 1.70E-03 5.51E+00 2.322
 ETOT 18  -46.184754193692     2.11E-04 1.41E-03 5.19E+00 2.334
 ETOT 19  -46.182431797789     2.32E-03 1.62E-02 2.76E+00 2.168
 ETOT 20  -46.182780776538    -3.49E-04 6.20E-03 2.82E-01 2.382
 ETOT 21  -46.184713666366    -1.93E-03 5.04E-03 3.54E+00 2.357
 ETOT 22  -46.185891212364    -1.18E-03 8.31E-04 6.19E+00 2.362
 ETOT 23  -46.183105544189     2.79E-03 1.51E-03 2.64E-01 2.344
 ETOT 24  -46.183521798479    -4.16E-04 1.45E-03 8.02E-01 2.331
 ETOT 25  -46.183655333061    -1.34E-04 8.26E-04 1.01E+00 2.297
 ETOT 26  -46.183448906707     2.06E-04 5.57E-04 4.42E-01 2.302
 ETOT 27  -46.183437857323     1.10E-05 3.34E-04 3.66E-01 2.309
 ETOT 28  -46.183950997622    -5.13E-04 1.60E-03 1.60E+00 2.300
 ETOT 29  -46.184007545319    -5.65E-05 1.06E-03 1.92E+00 2.322
 ETOT 30  -46.183515621686     4.92E-04 6.13E-04 7.42E-01 2.288
 ETOT 31  -46.183408673093     1.07E-04 2.94E-04 3.67E-01 2.303
 ETOT 32  -46.183297502550     1.11E-04 4.58E-04 8.63E-02 2.312
 ETOT 33  -46.183392526942    -9.50E-05 3.45E-04 4.42E-02 2.318
 ETOT 34  -46.183382954951     9.57E-06 2.62E-04 1.17E-02 2.319
 ETOT 35  -46.183382980831    -2.59E-08 2.11E-04 6.68E-03 2.319
 ETOT 36  -46.183382139764     8.41E-07 4.37E-04 8.04E-04 2.320
 ETOT 37  -46.183382359072    -2.19E-07 2.95E-04 2.31E-04 2.322
 ETOT 38  -46.183382609726    -2.51E-07 4.74E-04 2.47E-04 2.322
 ETOT 39  -46.183382492330     1.17E-07 3.40E-04 4.66E-05 2.322
 ETOT 40  -46.183382475967     1.64E-08 4.86E-04 1.22E-05 2.322
 ETOT 41  -46.183382493634    -1.77E-08 3.90E-04 7.22E-07 2.322

 At SCF step   41       nres2   =  7.22E-07 < tolvrs=  1.00E-06 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.25924625E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -4.25924625E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -4.25924625E-04  sigma(2 1)=  0.00000000E+00
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.0000000  4.0000000  0.0000000  G(1)=  0.1250000  0.1250000 -0.1250000
 R(2)=  0.0000000  4.0000000  4.0000000  G(2)= -0.1250000  0.1250000  0.1250000
 R(3)=  4.0000000  0.0000000  4.0000000  G(3)=  0.1250000 -0.1250000  0.1250000
 Unit cell volume ucvol=  1.2800000E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =      5.960550841268551
 Compensation charge over fine fft grid    =      5.960573005466851

 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1 - Spin component 1
   0.30670  -1.12023   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -1.12023   5.25718   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.03462   0.00000   0.00000  -0.55632   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.03462   0.00000   0.00000  -0.55632   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.03462   0.00000   0.00000  -0.55632   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.55632   0.00000   0.00000  11.08013   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.55632   0.00000   0.00000  11.08013   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.55632   0.00000   0.00000  11.08013   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.14531   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.14531   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.18890   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.14531 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
   0.29553  -1.07882   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -1.07882   5.11343   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.03409   0.00000   0.00000  -0.53945   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.03409   0.00000   0.00000  -0.53945   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.03409   0.00000   0.00000  -0.53945   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.53945   0.00000   0.00000  10.69000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.53945   0.00000   0.00000  10.69000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.53945   0.00000   0.00000  10.69000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.06604   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.06604   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.13555   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.06604 ...
   ...  only 12  components have been written...
 Atom #  2 - Spin component 1
   1.06512   1.69761   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   1.69761   2.70504   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.28772   0.00000   0.00000  -0.28492   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.28772   0.00000   0.00000  -0.28492   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.28772   0.00000   0.00000  -0.28492
   0.00000   0.00000  -0.28492   0.00000   0.00000  -0.22808   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.28492   0.00000   0.00000  -0.22808   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.28492   0.00000   0.00000  -0.22808
 Atom #  2 - Spin component 2
   1.06473   1.69696   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   1.69696   2.70396   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.28678   0.00000   0.00000  -0.28365   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.28678   0.00000   0.00000  -0.28365   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.28678   0.00000   0.00000  -0.28365
   0.00000   0.00000  -0.28365   0.00000   0.00000  -0.22638   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.28365   0.00000   0.00000  -0.22638   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.28365   0.00000   0.00000  -0.22638
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1 - Spin component 1
   0.49070   0.00688   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00688   0.00017   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.75389   0.00000   0.00000   0.00412   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.75389   0.00000   0.00000   0.00412   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.75389   0.00000   0.00000   0.00412   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00412   0.00000   0.00000   0.00003   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00412   0.00000   0.00000   0.00003   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00412   0.00000   0.00000   0.00003   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.01645   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.01645   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.02401   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.01645 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
   0.44016   0.00876   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00876   0.00024   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.70599   0.00000   0.00000   0.00485   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.70599   0.00000   0.00000   0.00485   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.70599   0.00000   0.00000   0.00485   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00485   0.00000   0.00000   0.00004   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00485   0.00000   0.00000   0.00004   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00485   0.00000   0.00000   0.00004   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.82658   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.82658   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.07011   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.82658 ...
   ...  only 12  components have been written...
 Atom #  2 - Spin component 1
   1.10026  -0.06687   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -0.06687   0.01479   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.42737   0.00000   0.00000   0.01689   0.00000   0.00000
   0.00000   0.00000   0.00000   0.42737   0.00000   0.00000   0.01689   0.00000
   0.00000   0.00000   0.00000   0.00000   0.42737   0.00000   0.00000   0.01689
   0.00000   0.00000   0.01689   0.00000   0.00000   0.01069   0.00000   0.00000
   0.00000   0.00000   0.00000   0.01689   0.00000   0.00000   0.01069   0.00000
   0.00000   0.00000   0.00000   0.00000   0.01689   0.00000   0.00000   0.01069
 Atom #  2 - Spin component 2
   1.10777  -0.07335   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -0.07335   0.00871   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.44127   0.00000   0.00000   0.01368   0.00000   0.00000
   0.00000   0.00000   0.00000   0.44127   0.00000   0.00000   0.01368   0.00000
   0.00000   0.00000   0.00000   0.00000   0.44127   0.00000   0.00000   0.01368
   0.00000   0.00000   0.01368   0.00000   0.00000   0.00506   0.00000   0.00000
   0.00000   0.00000   0.00000   0.01368   0.00000   0.00000   0.00506   0.00000
   0.00000   0.00000   0.00000   0.00000   0.01368   0.00000   0.00000   0.00506
 
 "PAW+U" part of augmentation waves occupancies Rhoij:
 Atom #  1 - L=2 ONLY - Spin component 1
   1.01645   0.00000   0.00000   0.00000   0.00000  -0.02405   0.00000   0.00000   0.00000   0.00000
   0.00000   1.01645   0.00000   0.00000   0.00000   0.00000  -0.02405   0.00000   0.00000   0.00000
   0.00000   0.00000   1.02401   0.00000   0.00000   0.00000   0.00000  -0.04262   0.00000   0.00000
   0.00000   0.00000   0.00000   1.01645   0.00000   0.00000   0.00000   0.00000  -0.02405   0.00000
   0.00000   0.00000   0.00000   0.00000   1.02401   0.00000   0.00000   0.00000   0.00000  -0.04262
  -0.02405   0.00000   0.00000   0.00000   0.00000   0.00415   0.00000   0.00000   0.00000   0.00000
   0.00000  -0.02405   0.00000   0.00000   0.00000   0.00000   0.00415   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.04262   0.00000   0.00000   0.00000   0.00000   0.01691   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.02405   0.00000   0.00000   0.00000   0.00000   0.00415   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.04262   0.00000   0.00000   0.00000   0.00000   0.01691
 Atom #  1 - L=2 ONLY - Spin component 2
   0.82658   0.00000   0.00000   0.00000   0.00000   0.00269   0.00000   0.00000   0.00000   0.00000
   0.00000   0.82658   0.00000   0.00000   0.00000   0.00000   0.00269   0.00000   0.00000   0.00000
   0.00000   0.00000   0.07011   0.00000   0.00000   0.00000   0.00000   0.02128   0.00000   0.00000
   0.00000   0.00000   0.00000   0.82658   0.00000   0.00000   0.00000   0.00000   0.00269   0.00000
   0.00000   0.00000   0.00000   0.00000   0.07011   0.00000   0.00000   0.00000   0.00000   0.02128
   0.00269   0.00000   0.00000   0.00000   0.00000   0.00328   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00269   0.00000   0.00000   0.00000   0.00000   0.00328   0.00000   0.00000   0.00000
   0.00000   0.00000   0.02128   0.00000   0.00000   0.00000   0.00000   0.00808   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00269   0.00000   0.00000   0.00000   0.00000   0.00328   0.00000
   0.00000   0.00000   0.00000   0.00000   0.02128   0.00000   0.00000   0.00000   0.00000   0.00808
 
 ---------- LDA+U DATA ---------------------------------------------------

 ====== For Atom     1, occupations for correlated orbitals. lpawu =   2

 Atom   1. Occ. for lpawu and for spin  1 =   4.73194
 Atom   1. Occ. for lpawu and for spin  2 =   2.41862
 => On atom   1,  local Mag. for lpawu is       -2.313323

 == Occupation matrix for correlated orbitals:

 Occupation matrix for spin  1
     0.93828    0.00000    0.00000    0.00000    0.00000
     0.00000    0.93828    0.00000    0.00000    0.00000
     0.00000    0.00000    0.95855    0.00000    0.00000
     0.00000    0.00000    0.00000    0.93828    0.00000
     0.00000    0.00000    0.00000    0.00000    0.95855


 Occupation matrix for spin  2
     0.76031    0.00000    0.00000    0.00000    0.00000
     0.00000    0.76031    0.00000    0.00000    0.00000
     0.00000    0.00000    0.06884    0.00000    0.00000
     0.00000    0.00000    0.00000    0.76031    0.00000
     0.00000    0.00000    0.00000    0.00000    0.06884


 
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   6.3609E-07; max=  3.9044E-04
   0.0625  0.0625  0.0625    1  2.16382E-09 kpt; spin; max resid(k); each band:
  7.44E-11 2.55E-11 2.55E-11 6.28E-11 4.73E-11 4.73E-11 2.40E-10 5.88E-10
  2.16E-09
   0.1875  0.0625  0.0625    1  1.92559E-09 kpt; spin; max resid(k); each band:
  1.23E-10 2.58E-10 1.66E-10 8.16E-10 6.61E-11 2.04E-11 1.60E-09 1.12E-09
  1.93E-09
   0.3125  0.0625  0.0625    1  1.85194E-09 kpt; spin; max resid(k); each band:
  1.31E-10 2.10E-10 2.07E-10 3.37E-10 5.52E-11 9.85E-11 1.85E-09 5.13E-10
  3.36E-10
   0.4375  0.0625  0.0625    1  1.51521E-09 kpt; spin; max resid(k); each band:
  9.26E-11 1.52E-09 3.14E-10 1.16E-10 5.85E-11 2.25E-11 9.43E-10 5.64E-10
  6.87E-10
  -0.4375  0.0625  0.0625    1  1.31111E-09 kpt; spin; max resid(k); each band:
  1.85E-10 1.31E-09 1.09E-10 2.44E-10 3.13E-11 3.48E-11 6.88E-10 6.90E-10
  1.84E-10
  -0.3125  0.0625  0.0625    1  1.19336E-09 kpt; spin; max resid(k); each band:
  1.09E-10 3.60E-10 4.66E-10 1.33E-10 1.67E-11 6.19E-11 1.19E-09 2.97E-10
  5.95E-10
  -0.1875  0.0625  0.0625    1  1.76671E-09 kpt; spin; max resid(k); each band:
  1.41E-10 8.30E-10 3.31E-10 1.77E-09 1.86E-11 4.56E-11 1.23E-09 9.73E-11
  5.58E-10
  -0.0625  0.0625  0.0625    1  1.10758E-09 kpt; spin; max resid(k); each band:
  1.18E-10 1.81E-10 3.08E-11 2.21E-10 5.21E-11 1.74E-11 2.60E-10 1.11E-09
  5.43E-10
   0.1875  0.1875  0.0625    1  8.02983E-10 kpt; spin; max resid(k); each band:
  1.37E-10 3.79E-10 4.08E-11 6.28E-10 2.05E-10 6.74E-11 8.03E-10 3.04E-10
  3.08E-10
   0.3125  0.1875  0.0625    1  1.61669E-09 kpt; spin; max resid(k); each band:
  1.71E-10 1.62E-09 8.86E-10 1.25E-09 1.69E-10 5.48E-11 6.81E-10 1.29E-09
  1.55E-09
   0.4375  0.1875  0.0625    1  2.14881E-09 kpt; spin; max resid(k); each band:
  1.24E-10 2.15E-09 7.24E-10 8.30E-10 4.32E-11 4.59E-11 1.12E-09 2.35E-10
  4.64E-10
  -0.4375  0.1875  0.0625    1  9.57242E-10 kpt; spin; max resid(k); each band:
  8.09E-11 5.43E-10 7.86E-10 9.57E-10 6.20E-11 2.87E-11 4.68E-10 1.50E-10
  1.57E-10
  -0.3125  0.1875  0.0625    1  4.71867E-09 kpt; spin; max resid(k); each band:
  1.14E-10 4.72E-09 2.61E-10 1.10E-09 8.19E-11 1.49E-11 1.32E-10 4.30E-10
  4.27E-10
  -0.1875  0.1875  0.0625    1  3.30511E-09 kpt; spin; max resid(k); each band:
  5.68E-10 2.09E-10 3.51E-10 8.22E-10 1.55E-10 1.45E-11 3.31E-09 6.26E-10
  7.68E-10
  -0.0625  0.1875  0.0625    1  1.35898E-09 kpt; spin; max resid(k); each band:
  1.06E-10 7.00E-10 1.18E-09 1.36E-09 1.43E-10 1.88E-11 5.21E-10 3.39E-10
  1.14E-09
   0.3125  0.3125  0.0625    1  2.37005E-09 kpt; spin; max resid(k); each band:
  7.93E-10 6.76E-10 8.49E-11 5.39E-10 9.11E-10 8.59E-10 1.46E-09 2.37E-09
  3.98E-10
   0.4375  0.3125  0.0625    1  2.82651E-09 kpt; spin; max resid(k); each band:
  1.05E-09 2.29E-09 1.82E-10 1.80E-09 2.81E-10 3.54E-10 8.76E-10 2.83E-09
  3.04E-10
  -0.4375  0.3125  0.0625    1  1.14380E-09 kpt; spin; max resid(k); each band:
  4.20E-10 1.04E-09 1.14E-09 1.00E-09 8.72E-11 2.28E-11 1.13E-09 8.53E-10
  3.66E-10
  -0.3125  0.3125  0.0625    1  2.95407E-09 kpt; spin; max resid(k); each band:
  8.49E-10 2.14E-10 4.86E-10 2.95E-09 8.41E-11 6.47E-12 1.13E-09 2.06E-09
  1.03E-09
  -0.1875  0.3125  0.0625    1  2.44253E-09 kpt; spin; max resid(k); each band:
  9.07E-10 2.44E-09 1.62E-10 2.31E-09 1.10E-10 1.06E-11 1.29E-09 1.08E-09
  3.08E-10
  -0.0625  0.3125  0.0625    1  2.35549E-09 kpt; spin; max resid(k); each band:
  3.94E-10 5.41E-10 5.02E-10 5.52E-10 3.68E-11 3.96E-11 2.36E-09 8.56E-10
  4.64E-10
   0.4375  0.4375  0.0625    1  2.37553E-09 kpt; spin; max resid(k); each band:
  1.32E-09 3.96E-10 9.77E-11 1.55E-10 1.16E-09 2.38E-09 1.32E-09 1.65E-09
  1.07E-09
  -0.4375  0.4375  0.0625    1  1.44918E-09 kpt; spin; max resid(k); each band:
  5.14E-10 1.45E-09 1.01E-10 3.38E-10 8.31E-11 1.24E-10 8.48E-10 2.92E-10
  8.55E-10
  -0.3125  0.4375  0.0625    1  3.47255E-09 kpt; spin; max resid(k); each band:
  8.16E-10 3.61E-10 1.07E-09 4.50E-10 3.86E-11 5.63E-11 5.10E-10 3.47E-09
  2.61E-10
  -0.1875  0.4375  0.0625    1  1.33459E-09 kpt; spin; max resid(k); each band:
  2.48E-10 1.01E-09 6.01E-10 1.33E-09 1.08E-10 1.29E-11 9.95E-10 9.07E-10
  4.83E-10
  -0.0625  0.4375  0.0625    1  1.91908E-09 kpt; spin; max resid(k); each band:
  1.78E-10 1.92E-09 1.51E-10 1.87E-10 4.44E-11 3.40E-11 5.04E-10 2.56E-10
  1.60E-10
  -0.4375 -0.4375  0.0625    1  3.44929E-09 kpt; spin; max resid(k); each band:
  1.47E-09 1.46E-09 9.74E-11 8.95E-11 1.63E-10 1.15E-09 1.41E-09 1.04E-09
  3.45E-09
  -0.3125 -0.4375  0.0625    1  1.51824E-09 kpt; spin; max resid(k); each band:
  8.59E-10 3.58E-10 1.14E-10 1.52E-09 3.58E-10 7.90E-10 7.04E-10 1.37E-09
  5.14E-10
  -0.1875 -0.4375  0.0625    1  1.82382E-09 kpt; spin; max resid(k); each band:
  1.20E-09 1.82E-09 7.31E-10 9.35E-10 6.02E-11 3.81E-11 3.27E-10 6.29E-10
  1.82E-10
  -0.3125 -0.3125  0.0625    1  3.01737E-09 kpt; spin; max resid(k); each band:
  3.62E-10 4.97E-10 9.54E-11 2.75E-10 9.74E-10 1.03E-09 1.44E-09 2.07E-09
  3.02E-09
  -0.1875 -0.3125  0.0625    1  2.48138E-09 kpt; spin; max resid(k); each band:
  3.30E-10 3.27E-10 3.66E-10 1.63E-09 2.00E-10 1.79E-10 2.48E-09 4.57E-10
  3.37E-10
  -0.1875 -0.1875  0.0625    1  2.52406E-09 kpt; spin; max resid(k); each band:
  2.38E-10 6.23E-10 5.75E-11 8.08E-10 2.31E-10 4.98E-10 1.21E-09 9.39E-10
  2.52E-09
   0.1875  0.1875  0.1875    1  3.26644E-09 kpt; spin; max resid(k); each band:
  1.19E-10 4.99E-10 4.99E-10 3.27E-09 2.71E-11 2.71E-11 7.00E-10 5.15E-10
  4.18E-10
   0.3125  0.1875  0.1875    1  1.11407E-09 kpt; spin; max resid(k); each band:
  2.69E-10 2.26E-10 1.53E-10 1.11E-09 1.66E-10 1.08E-11 5.38E-10 3.64E-10
  6.07E-10
   0.4375  0.1875  0.1875    1  2.40554E-09 kpt; spin; max resid(k); each band:
  3.27E-10 2.41E-09 4.65E-10 9.58E-10 1.31E-10 8.83E-12 1.24E-09 3.71E-10
  2.10E-10
  -0.4375  0.1875  0.1875    1  3.07368E-09 kpt; spin; max resid(k); each band:
  2.88E-10 3.07E-09 3.18E-10 1.51E-09 1.29E-10 9.00E-12 1.65E-10 1.98E-10
  1.25E-10
  -0.3125  0.1875  0.1875    1  9.57421E-10 kpt; spin; max resid(k); each band:
  1.41E-10 4.95E-10 9.57E-10 5.82E-10 3.74E-11 1.99E-10 4.20E-10 4.85E-10
  7.07E-10
  -0.1875  0.1875  0.1875    1  2.27643E-09 kpt; spin; max resid(k); each band:
  1.72E-10 2.28E-09 2.94E-10 7.71E-10 7.43E-11 7.05E-11 1.16E-09 2.32E-10
  2.79E-10
   0.3125  0.3125  0.1875    1  1.74350E-09 kpt; spin; max resid(k); each band:
  5.09E-10 1.74E-09 1.67E-10 6.75E-10 2.80E-11 5.02E-11 1.14E-09 1.10E-09
  6.06E-10
   0.4375  0.3125  0.1875    1  2.10829E-09 kpt; spin; max resid(k); each band:
  3.44E-10 2.11E-09 1.13E-10 1.84E-09 1.47E-10 4.37E-11 1.08E-09 5.93E-10
  4.26E-10
  -0.4375  0.3125  0.1875    1  4.26559E-09 kpt; spin; max resid(k); each band:
  3.18E-10 4.27E-09 7.69E-10 7.45E-10 9.09E-11 3.27E-11 9.25E-10 3.70E-10
  4.65E-10
  -0.3125  0.3125  0.1875    1  1.73799E-09 kpt; spin; max resid(k); each band:
  2.70E-10 7.88E-10 1.14E-09 1.74E-09 9.84E-11 1.59E-11 5.52E-10 1.43E-09
  1.39E-10
  -0.1875  0.3125  0.1875    1  2.46042E-09 kpt; spin; max resid(k); each band:
  1.50E-10 2.46E-09 8.08E-10 2.27E-09 1.43E-10 7.87E-11 1.85E-10 9.42E-10
  1.44E-10
   0.4375  0.4375  0.1875    1  2.48555E-09 kpt; spin; max resid(k); each band:
  3.30E-10 2.49E-09 5.34E-10 3.75E-10 9.71E-11 7.47E-11 4.06E-10 6.79E-10
  8.71E-10
  -0.4375  0.4375  0.1875    1  2.68220E-09 kpt; spin; max resid(k); each band:
  7.18E-10 6.65E-10 7.39E-10 2.68E-09 1.17E-10 1.47E-10 3.84E-10 1.80E-09
  4.25E-10
  -0.3125  0.4375  0.1875    1  3.83903E-09 kpt; spin; max resid(k); each band:
  1.42E-09 2.60E-09 1.56E-09 3.02E-09 4.98E-11 3.24E-11 2.58E-10 1.22E-09
  3.84E-09
  -0.1875  0.4375  0.1875    1  2.30123E-09 kpt; spin; max resid(k); each band:
  1.12E-10 2.30E-09 1.25E-09 1.27E-09 6.63E-11 3.31E-11 8.40E-10 1.40E-09
  3.02E-10
  -0.4375 -0.4375  0.1875    1  1.24992E-09 kpt; spin; max resid(k); each band:
  2.11E-10 4.34E-10 6.14E-10 1.20E-09 4.81E-11 5.19E-11 1.85E-10 9.41E-10
  1.25E-09
  -0.3125 -0.4375  0.1875    1  1.57393E-09 kpt; spin; max resid(k); each band:
  1.23E-09 1.57E-09 9.73E-10 3.60E-10 5.14E-11 4.30E-11 5.65E-10 8.55E-10
  5.89E-10
  -0.3125 -0.3125  0.1875    1  1.36131E-09 kpt; spin; max resid(k); each band:
  1.23E-09 3.78E-10 4.89E-10 1.36E-09 1.60E-10 4.51E-11 2.98E-10 1.34E-09
  9.65E-11
 outwf : prtvol=0 or 1, do not print more k-points.

   0.0625  0.0625  0.0625    2  8.89333E-09 kpt; spin; max resid(k); each band:
  6.49E-10 6.58E-09 6.71E-09 8.89E-09 6.18E-10 6.34E-10 3.88E-10 8.29E-10
  2.82E-11
   0.1875  0.0625  0.0625    2  2.37291E-05 kpt; spin; max resid(k); each band:
  6.00E-10 6.66E-09 1.18E-08 6.86E-09 1.77E-10 5.67E-10 4.17E-09 1.19E-09
  2.37E-05
   0.3125  0.0625  0.0625    2  3.90442E-04 kpt; spin; max resid(k); each band:
  3.97E-09 9.65E-09 7.60E-09 9.34E-09 5.50E-10 6.72E-10 1.06E-09 1.83E-07
  3.90E-04
   0.4375  0.0625  0.0625    2  9.12954E-07 kpt; spin; max resid(k); each band:
  3.26E-09 7.00E-09 1.09E-08 1.27E-08 4.67E-10 1.55E-09 8.79E-10 4.11E-08
  9.13E-07
  -0.4375  0.0625  0.0625    2  4.64156E-07 kpt; spin; max resid(k); each band:
  3.57E-09 4.12E-09 4.70E-09 3.52E-09 8.82E-10 9.32E-10 5.27E-10 1.90E-08
  4.64E-07
  -0.3125  0.0625  0.0625    2  3.16642E-08 kpt; spin; max resid(k); each band:
  4.85E-09 9.89E-09 5.28E-09 8.75E-09 1.02E-09 1.11E-09 9.55E-10 3.17E-08
  1.78E-08
  -0.1875  0.0625  0.0625    2  1.86725E-08 kpt; spin; max resid(k); each band:
  1.39E-09 9.39E-09 1.15E-08 9.33E-09 1.57E-09 5.64E-10 3.98E-10 1.87E-08
  1.64E-08
  -0.0625  0.0625  0.0625    2  1.53806E-08 kpt; spin; max resid(k); each band:
  8.89E-10 9.04E-09 1.54E-08 1.36E-08 1.59E-10 1.23E-09 1.55E-09 1.31E-09
  6.18E-09
   0.1875  0.1875  0.0625    2  1.41303E-08 kpt; spin; max resid(k); each band:
  1.31E-08 6.58E-09 1.22E-08 1.41E-08 2.07E-10 3.20E-09 3.12E-09 6.38E-09
  1.27E-10
   0.3125  0.1875  0.0625    2  1.34951E-08 kpt; spin; max resid(k); each band:
  3.50E-09 5.02E-09 1.16E-08 5.35E-09 7.13E-10 5.45E-10 1.27E-09 7.68E-09
  1.35E-08
   0.4375  0.1875  0.0625    2  5.91626E-08 kpt; spin; max resid(k); each band:
  1.02E-09 8.05E-09 7.25E-09 5.06E-09 3.59E-10 4.70E-10 4.47E-10 1.03E-08
  5.92E-08
  -0.4375  0.1875  0.0625    2  1.54710E-08 kpt; spin; max resid(k); each band:
  2.79E-09 8.60E-09 1.55E-08 4.75E-09 3.89E-10 3.95E-10 3.14E-10 7.09E-09
  1.13E-08
  -0.3125  0.1875  0.0625    2  8.56026E-08 kpt; spin; max resid(k); each band:
  3.54E-09 8.52E-09 8.44E-09 2.73E-09 1.53E-10 1.39E-09 6.32E-10 3.99E-09
  8.56E-08
  -0.1875  0.1875  0.0625    2  2.99474E-07 kpt; spin; max resid(k); each band:
  2.75E-09 8.01E-09 8.28E-09 2.78E-09 1.62E-10 1.67E-09 2.62E-09 5.55E-09
  2.99E-07
  -0.0625  0.1875  0.0625    2  1.34949E-08 kpt; spin; max resid(k); each band:
  3.40E-09 6.88E-09 1.35E-08 6.24E-09 5.12E-10 1.77E-09 2.39E-09 3.24E-09
  4.35E-09
   0.3125  0.3125  0.0625    2  1.46265E-08 kpt; spin; max resid(k); each band:
  2.27E-09 1.06E-08 1.46E-08 9.34E-09 2.92E-10 7.99E-10 4.44E-10 5.73E-09
  1.28E-11
   0.4375  0.3125  0.0625    2  1.32253E-08 kpt; spin; max resid(k); each band:
  1.18E-09 1.27E-08 1.32E-08 5.43E-09 4.80E-10 3.32E-10 1.88E-10 1.55E-09
  3.47E-09
  -0.4375  0.3125  0.0625    2  1.37772E-08 kpt; spin; max resid(k); each band:
  2.24E-09 1.10E-08 1.38E-08 3.41E-09 4.20E-10 1.25E-10 1.99E-10 1.60E-09
  5.74E-10
  -0.3125  0.3125  0.0625    2  1.32097E-08 kpt; spin; max resid(k); each band:
  2.47E-09 1.32E-08 8.53E-09 3.08E-09 5.13E-11 3.90E-10 5.46E-10 1.82E-09
  6.76E-10
  -0.1875  0.3125  0.0625    2  4.95482E-08 kpt; spin; max resid(k); each band:
  7.71E-09 8.71E-09 1.38E-08 1.66E-09 8.65E-11 1.02E-09 5.66E-10 2.29E-09
  4.95E-08
  -0.0625  0.3125  0.0625    2  2.02374E-07 kpt; spin; max resid(k); each band:
  1.72E-09 1.06E-08 1.30E-08 6.35E-09 3.66E-10 2.63E-09 6.70E-10 2.06E-08
  2.02E-07
   0.4375  0.4375  0.0625    2  1.52427E-08 kpt; spin; max resid(k); each band:
  2.95E-09 3.13E-09 4.28E-09 1.52E-08 3.26E-10 9.13E-11 1.40E-10 1.99E-11
  2.23E-09
  -0.4375  0.4375  0.0625    2  7.66701E-09 kpt; spin; max resid(k); each band:
  3.13E-09 5.19E-09 7.67E-09 3.90E-09 8.15E-10 2.51E-11 4.42E-11 3.73E-10
  2.97E-10
  -0.3125  0.4375  0.0625    2  2.13901E-08 kpt; spin; max resid(k); each band:
  4.26E-10 2.14E-08 9.56E-09 1.67E-09 4.26E-10 3.68E-11 2.16E-10 5.46E-10
  2.85E-10
  -0.1875  0.4375  0.0625    2  8.82749E-09 kpt; spin; max resid(k); each band:
  8.96E-10 8.83E-09 4.69E-09 2.67E-09 3.36E-10 2.53E-10 5.43E-10 3.25E-09
  3.39E-10
  -0.0625  0.4375  0.0625    2  4.50194E-07 kpt; spin; max resid(k); each band:
  1.42E-09 3.46E-09 7.44E-09 6.56E-09 3.81E-10 4.78E-10 2.80E-10 7.87E-09
  4.50E-07
  -0.4375 -0.4375  0.0625    2  5.83383E-09 kpt; spin; max resid(k); each band:
  1.66E-09 2.90E-09 5.83E-09 2.03E-09 4.39E-10 4.14E-11 1.72E-11 1.29E-11
  1.23E-09
  -0.3125 -0.4375  0.0625    2  1.01688E-08 kpt; spin; max resid(k); each band:
  2.30E-09 1.02E-08 9.15E-09 8.47E-09 7.48E-10 1.35E-10 1.45E-10 8.23E-10
  1.15E-09
  -0.1875 -0.4375  0.0625    2  9.01075E-09 kpt; spin; max resid(k); each band:
  5.17E-09 4.18E-09 9.01E-09 6.16E-09 4.15E-10 3.48E-10 4.44E-10 2.88E-09
  5.85E-09
  -0.3125 -0.3125  0.0625    2  1.38933E-08 kpt; spin; max resid(k); each band:
  1.21E-09 1.39E-08 1.24E-08 1.11E-08 2.38E-10 5.89E-10 4.87E-10 6.58E-09
  8.73E-12
  -0.1875 -0.3125  0.0625    2  1.15033E-08 kpt; spin; max resid(k); each band:
  1.06E-08 8.20E-09 1.15E-08 5.53E-09 3.04E-10 2.97E-10 1.02E-09 2.54E-09
  8.12E-09
  -0.1875 -0.1875  0.0625    2  1.43446E-08 kpt; spin; max resid(k); each band:
  4.36E-09 6.05E-09 1.43E-08 1.31E-08 3.32E-10 2.09E-09 6.74E-10 5.42E-09
  1.87E-11
   0.1875  0.1875  0.1875    2  1.17716E-08 kpt; spin; max resid(k); each band:
  6.09E-10 7.54E-09 1.18E-08 6.46E-09 2.11E-09 1.11E-09 6.24E-10 1.08E-09
  3.94E-10
   0.3125  0.1875  0.1875    2  2.66569E-04 kpt; spin; max resid(k); each band:
  4.00E-09 5.69E-09 1.57E-08 2.78E-09 5.52E-11 2.05E-09 2.41E-09 1.20E-08
  2.67E-04
   0.4375  0.1875  0.1875    2  7.72828E-08 kpt; spin; max resid(k); each band:
  1.77E-09 8.23E-09 1.33E-08 4.84E-09 2.92E-11 1.46E-09 1.92E-09 5.70E-09
  7.73E-08
  -0.4375  0.1875  0.1875    2  1.18104E-08 kpt; spin; max resid(k); each band:
  3.31E-09 1.18E-08 6.01E-09 2.27E-09 1.10E-10 6.15E-10 8.55E-10 4.21E-09
  2.64E-10
  -0.3125  0.1875  0.1875    2  1.01155E-08 kpt; spin; max resid(k); each band:
  2.51E-09 1.01E-08 7.77E-09 6.05E-09 4.30E-10 4.34E-10 2.20E-10 9.21E-09
  6.21E-11
  -0.1875  0.1875  0.1875    2  1.27023E-08 kpt; spin; max resid(k); each band:
  3.79E-09 4.04E-09 1.26E-08 1.27E-08 4.38E-10 8.36E-10 1.40E-09 1.07E-08
  3.05E-10
   0.3125  0.3125  0.1875    2  1.13212E-08 kpt; spin; max resid(k); each band:
  3.46E-09 9.88E-09 1.13E-08 9.16E-09 3.33E-10 1.58E-09 1.80E-09 6.87E-09
  2.75E-10
   0.4375  0.3125  0.1875    2  3.56244E-08 kpt; spin; max resid(k); each band:
  6.49E-09 4.45E-09 1.36E-08 2.77E-09 4.46E-10 9.55E-10 1.46E-09 1.84E-09
  3.56E-08
  -0.4375  0.3125  0.1875    2  1.07310E-08 kpt; spin; max resid(k); each band:
  1.30E-09 4.24E-09 1.07E-08 1.43E-09 2.80E-10 4.17E-10 4.53E-10 2.51E-09
  3.07E-09
  -0.3125  0.3125  0.1875    2  1.32014E-08 kpt; spin; max resid(k); each band:
  2.43E-09 1.32E-08 9.29E-09 1.40E-09 3.49E-10 1.96E-10 3.23E-10 1.15E-09
  4.45E-10
  -0.1875  0.3125  0.1875    2  7.04911E-09 kpt; spin; max resid(k); each band:
  3.29E-09 5.74E-09 3.78E-09 7.05E-09 4.35E-10 2.22E-10 4.93E-10 2.47E-09
  4.04E-09
   0.4375  0.4375  0.1875    2  8.50151E-09 kpt; spin; max resid(k); each band:
  2.15E-09 6.07E-09 4.71E-09 8.50E-09 6.52E-10 5.02E-10 4.97E-10 5.58E-09
  2.18E-10
  -0.4375  0.4375  0.1875    2  7.72812E-09 kpt; spin; max resid(k); each band:
  3.23E-09 7.73E-09 5.02E-09 2.11E-09 1.04E-09 1.32E-10 1.80E-10 1.16E-09
  7.40E-10
  -0.3125  0.4375  0.1875    2  1.27058E-08 kpt; spin; max resid(k); each band:
  1.57E-09 5.77E-09 1.27E-08 2.74E-09 7.13E-10 2.43E-10 5.15E-11 2.68E-10
  6.98E-10
  -0.1875  0.4375  0.1875    2  1.23014E-08 kpt; spin; max resid(k); each band:
  5.87E-09 1.23E-08 1.22E-08 2.98E-09 1.90E-10 2.22E-10 2.48E-10 1.02E-09
  4.41E-10
  -0.4375 -0.4375  0.1875    2  7.97407E-09 kpt; spin; max resid(k); each band:
  9.43E-10 5.69E-09 7.97E-09 2.23E-09 5.43E-10 4.00E-11 1.10E-10 4.31E-10
  9.26E-11
  -0.3125 -0.4375  0.1875    2  1.31707E-08 kpt; spin; max resid(k); each band:
  7.33E-10 1.32E-08 1.13E-08 2.63E-09 1.52E-09 1.34E-10 6.32E-11 4.68E-10
  7.39E-10
  -0.3125 -0.3125  0.1875    2  1.61258E-08 kpt; spin; max resid(k); each band:
  1.64E-09 1.04E-08 1.61E-08 2.91E-09 5.27E-10 8.29E-11 1.29E-10 2.45E-09
  1.43E-10
 outwf : prtvol=0 or 1, do not print more k-points.

 reduced coordinates (array xred) for    2 atoms
       0.000000000000      0.000000000000      0.000000000000
       0.500000000000      0.500000000000      0.500000000000
 rms dE/dt=  0.0000E+00; max dE/dt=  0.0000E+00; dE/dt below (all hartree)
    1       0.000000000000      0.000000000000      0.000000000000
    2       0.000000000000      0.000000000000      0.000000000000
 
 cartesian coordinates (angstrom) at end:
    1      0.00000000000000     0.00000000000000     0.00000000000000
    2      2.11670883436000     2.11670883436000     2.11670883436000
 length scales=  8.000000000000  8.000000000000  8.000000000000 bohr
              =  4.233417668720  4.233417668720  4.233417668720 angstroms
 prteigrs : about to open file CoOout_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.32237   Average Vxc (hartree)=  -0.45298
 Magnetisation (Bohr magneton)=  2.32217917E+00
 Total spin up =  8.66108958E+00   Total spin down =  6.33891042E+00
 Eigenvalues (hartree) for nkpt=  60  k points, SPIN UP:
 kpt#   1, nband=  9, wtk=  0.00391, kpt=  0.0625  0.0625  0.0625 (reduced coord)
  -0.41747   0.10193   0.10193   0.13925   0.14264   0.14264   0.20853   0.21995
   0.21995
      occupation numbers for kpt#   1
   1.00000   0.99597   0.99597   0.98983   0.98894   0.98894   0.94512   0.92827
   0.92827
 kpt#   2, nband=  9, wtk=  0.01172, kpt=  0.1875  0.0625  0.0625 (reduced coord)
  -0.40971   0.08215   0.09004   0.12461   0.14154   0.14602   0.19602   0.22567
   0.24534
      occupation numbers for kpt#   2
   1.00000   0.99754   0.99701   0.99292   0.98924   0.98798   0.95926   0.91816
   0.87278
 kpt#   3, nband=  9, wtk=  0.01172, kpt=  0.3125  0.0625  0.0625 (reduced coord)
  -0.39350   0.05923   0.06039   0.08215   0.15179   0.15342   0.19281   0.25238
   0.27426
      occupation numbers for kpt#   3
   1.00000   0.99861   0.99857   0.99754   0.98614   0.98557   0.96228   0.85193
   0.76899
 kpt#   4, nband=  9, wtk=  0.01172, kpt=  0.4375  0.0625  0.0625 (reduced coord)
  -0.37724   0.02562   0.04668   0.05359   0.16129   0.16177   0.19998   0.27637
   0.29139
      occupation numbers for kpt#   4
   1.00000   0.99940   0.99899   0.99879   0.98248   0.98228   0.95520   0.75952
   0.68452
 kpt#   5, nband=  9, wtk=  0.01172, kpt= -0.4375  0.0625  0.0625 (reduced coord)
  -0.37199   0.01461   0.04472   0.04538   0.16354   0.16511   0.20304   0.28819
   0.29060
      occupation numbers for kpt#   5
   1.00000   0.99954   0.99903   0.99902   0.98149   0.98076   0.95181   0.70152
   0.68877
 kpt#   6, nband=  9, wtk=  0.01172, kpt= -0.3125  0.0625  0.0625 (reduced coord)
  -0.38202   0.03530   0.05411   0.05729   0.15770   0.16032   0.19734   0.27340
   0.28267
      occupation numbers for kpt#   6
   1.00000   0.99924   0.99878   0.99868   0.98396   0.98290   0.95794   0.77280
   0.72958
 kpt#   7, nband=  9, wtk=  0.01172, kpt= -0.1875  0.0625  0.0625 (reduced coord)
  -0.39949   0.06164   0.07970   0.09369   0.14882   0.14987   0.19155   0.24682
   0.26017
      occupation numbers for kpt#   7
   1.00000   0.99853   0.99769   0.99672   0.98712   0.98678   0.96340   0.86862
   0.82564
 kpt#   8, nband=  9, wtk=  0.01172, kpt= -0.0625  0.0625  0.0625 (reduced coord)
  -0.41353   0.08606   0.10223   0.13381   0.14137   0.14291   0.20343   0.22211
   0.22910
      occupation numbers for kpt#   8
   1.00000   0.99729   0.99594   0.99111   0.98928   0.98887   0.95136   0.92460
   0.91146
 kpt#   9, nband=  9, wtk=  0.01172, kpt=  0.1875  0.1875  0.0625 (reduced coord)
  -0.40647   0.06386   0.10284   0.12821   0.14030   0.14125   0.20279   0.22426
   0.23318
      occupation numbers for kpt#   9
   1.00000   0.99844   0.99588   0.99226   0.98956   0.98931   0.95209   0.92077
   0.90288
 kpt#  10, nband=  9, wtk=  0.02344, kpt=  0.3125  0.1875  0.0625 (reduced coord)
  -0.39468   0.04467   0.08482   0.11154   0.14187   0.14866   0.19775   0.22637
   0.25546
      occupation numbers for kpt#  10
   1.00000   0.99904   0.99737   0.99489   0.98915   0.98717   0.95753   0.91682
   0.84195
 kpt#  11, nband=  9, wtk=  0.02344, kpt=  0.4375  0.1875  0.0625 (reduced coord)
  -0.38026   0.03358   0.05923   0.07514   0.15121   0.16130   0.19810   0.24507
   0.27097
      occupation numbers for kpt#  11
   1.00000   0.99927   0.99861   0.99794   0.98633   0.98248   0.95717   0.87352
   0.78329
 kpt#  12, nband=  9, wtk=  0.02344, kpt= -0.4375  0.1875  0.0625 (reduced coord)
  -0.37203   0.02799   0.05003   0.05289   0.15778   0.16664   0.20042   0.25600
   0.27706
      occupation numbers for kpt#  12
   1.00000   0.99936   0.99890   0.99882   0.98393   0.98003   0.95473   0.84014
   0.75633
 kpt#  13, nband=  9, wtk=  0.02344, kpt= -0.3125  0.1875  0.0625 (reduced coord)
  -0.37600   0.02948   0.04817   0.06914   0.15467   0.16303   0.19995   0.24403
   0.28501
      occupation numbers for kpt#  13
   1.00000   0.99934   0.99895   0.99822   0.98512   0.98172   0.95523   0.87638
   0.71788
 kpt#  14, nband=  9, wtk=  0.02344, kpt= -0.1875  0.1875  0.0625 (reduced coord)
  -0.38921   0.04309   0.06135   0.10195   0.14384   0.15425   0.19878   0.22720
   0.27835
      occupation numbers for kpt#  14
   1.00000   0.99907   0.99854   0.99597   0.98861   0.98527   0.95647   0.91522
   0.75034
 kpt#  15, nband=  9, wtk=  0.02344, kpt= -0.0625  0.1875  0.0625 (reduced coord)
  -0.40291   0.06289   0.08572   0.11706   0.14145   0.14747   0.19595   0.22732
   0.25559
      occupation numbers for kpt#  15
   1.00000   0.99848   0.99731   0.99413   0.98926   0.98754   0.95932   0.91500
   0.84150
 kpt#  16, nband=  9, wtk=  0.01172, kpt=  0.3125  0.3125  0.0625 (reduced coord)
  -0.38954   0.03703   0.10541   0.11981   0.13927   0.14413   0.19864   0.21915
   0.22352
      occupation numbers for kpt#  16
   1.00000   0.99920   0.99561   0.99372   0.98983   0.98852   0.95661   0.92960
   0.92210
 kpt#  17, nband=  9, wtk=  0.02344, kpt=  0.4375  0.3125  0.0625 (reduced coord)
  -0.38092   0.04081   0.08689   0.10536   0.14342   0.15677   0.19360   0.21171
   0.22964
      occupation numbers for kpt#  17
   1.00000   0.99912   0.99723   0.99562   0.98872   0.98433   0.96155   0.94084
   0.91038
 kpt#  18, nband=  9, wtk=  0.02344, kpt= -0.4375  0.3125  0.0625 (reduced coord)
  -0.37366   0.05490   0.06337   0.07456   0.14589   0.17000   0.19427   0.21352
   0.24130
      occupation numbers for kpt#  18
   1.00000   0.99875   0.99846   0.99797   0.98802   0.97832   0.96092   0.93826
   0.88359
 kpt#  19, nband=  9, wtk=  0.02344, kpt= -0.3125  0.3125  0.0625 (reduced coord)
  -0.37219   0.04064   0.05416   0.07996   0.14496   0.16818   0.19888   0.20988
   0.26658
      occupation numbers for kpt#  19
   1.00000   0.99913   0.99878   0.99767   0.98829   0.97926   0.95637   0.94333
   0.80137
 kpt#  20, nband=  9, wtk=  0.02344, kpt= -0.1875  0.3125  0.0625 (reduced coord)
  -0.37760   0.03307   0.04970   0.08913   0.14614   0.16153   0.20152   0.22112
   0.28328
      occupation numbers for kpt#  20
   1.00000   0.99928   0.99891   0.99707   0.98794   0.98238   0.95352   0.92631
   0.72654
 kpt#  21, nband=  9, wtk=  0.02344, kpt= -0.0625  0.3125  0.0625 (reduced coord)
  -0.38651   0.04089   0.05899   0.07759   0.15237   0.15704   0.19615   0.25090
   0.27941
      occupation numbers for kpt#  21
   1.00000   0.99912   0.99862   0.99781   0.98594   0.98422   0.95912   0.85653
   0.74537
 kpt#  22, nband=  9, wtk=  0.01172, kpt=  0.4375  0.4375  0.0625 (reduced coord)
  -0.37904   0.05539   0.10924   0.11358   0.14606   0.15914   0.17515   0.19598
   0.19791
      occupation numbers for kpt#  22
   1.00000   0.99874   0.99517   0.99462   0.98797   0.98338   0.97541   0.95929
   0.95736
 kpt#  23, nband=  9, wtk=  0.02344, kpt= -0.4375  0.4375  0.0625 (reduced coord)
  -0.37577   0.07288   0.09018   0.10306   0.13776   0.17310   0.18152   0.18484
   0.20064
      occupation numbers for kpt#  23
   1.00000   0.99805   0.99700   0.99586   0.99020   0.97661   0.97129   0.96888
   0.95449
 kpt#  24, nband=  9, wtk=  0.02344, kpt= -0.3125  0.4375  0.0625 (reduced coord)
  -0.37283   0.06283   0.07432   0.07537   0.13985   0.17313   0.19195   0.19619
   0.23459
      occupation numbers for kpt#  24
   1.00000   0.99848   0.99798   0.99792   0.98968   0.97659   0.96305   0.95909
   0.89975
 kpt#  25, nband=  9, wtk=  0.02344, kpt= -0.1875  0.4375  0.0625 (reduced coord)
  -0.37187   0.03660   0.05319   0.06308   0.15263   0.16778   0.19856   0.23081
   0.27014
      occupation numbers for kpt#  25
   1.00000   0.99921   0.99881   0.99847   0.98585   0.97946   0.95670   0.90797
   0.78678
 kpt#  26, nband=  9, wtk=  0.02344, kpt= -0.0625  0.4375  0.0625 (reduced coord)
  -0.37367   0.02197   0.04612   0.05233   0.16050   0.16461   0.20134   0.27129
   0.28754
      occupation numbers for kpt#  26
   1.00000   0.99945   0.99900   0.99883   0.98282   0.98100   0.95373   0.78194
   0.70491
 kpt#  27, nband=  9, wtk=  0.01172, kpt= -0.4375 -0.4375  0.0625 (reduced coord)
  -0.37723   0.07253   0.11037   0.11197   0.14076   0.17077   0.17127   0.18263
   0.18418
      occupation numbers for kpt#  27
   1.00000   0.99807   0.99503   0.99483   0.98944   0.97791   0.97763   0.97051
   0.96938
 kpt#  28, nband=  9, wtk=  0.02344, kpt= -0.3125 -0.4375  0.0625 (reduced coord)
  -0.37733   0.05572   0.08886   0.10384   0.14321   0.16408   0.18650   0.19814
   0.21226
      occupation numbers for kpt#  28
   1.00000   0.99873   0.99709   0.99578   0.98878   0.98124   0.96760   0.95713
   0.94007
 kpt#  29, nband=  9, wtk=  0.02344, kpt= -0.1875 -0.4375  0.0625 (reduced coord)
  -0.37592   0.03927   0.06074   0.07435   0.14928   0.16576   0.19722   0.23329
   0.25468
      occupation numbers for kpt#  29
   1.00000   0.99916   0.99856   0.99798   0.98697   0.98046   0.95806   0.90265
   0.84451
 kpt#  30, nband=  9, wtk=  0.01172, kpt= -0.3125 -0.3125  0.0625 (reduced coord)
  -0.38307   0.04087   0.10737   0.11639   0.14220   0.15017   0.18933   0.21015
   0.21063
      occupation numbers for kpt#  30
   1.00000   0.99912   0.99539   0.99423   0.98906   0.98668   0.96531   0.94297
   0.94233
 kpt#  31, nband=  9, wtk=  0.02344, kpt= -0.1875 -0.3125  0.0625 (reduced coord)
  -0.38687   0.03652   0.08530   0.10778   0.14246   0.15157   0.19754   0.22132
   0.24597
      occupation numbers for kpt#  31
   1.00000   0.99921   0.99734   0.99534   0.98899   0.98621   0.95774   0.92596
   0.87102
 kpt#  32, nband=  9, wtk=  0.01172, kpt= -0.1875 -0.1875  0.0625 (reduced coord)
  -0.39786   0.04547   0.10385   0.12360   0.13937   0.14095   0.20235   0.22380
   0.23137
      occupation numbers for kpt#  32
   1.00000   0.99902   0.99578   0.99310   0.98980   0.98939   0.95260   0.92159
   0.90678
 kpt#  33, nband=  9, wtk=  0.00391, kpt=  0.1875  0.1875  0.1875 (reduced coord)
  -0.40601   0.08111   0.08111   0.10561   0.14733   0.14733   0.19040   0.24627
   0.24627
      occupation numbers for kpt#  33
   1.00000   0.99760   0.99760   0.99559   0.98758   0.98758   0.96440   0.87017
   0.87017
 kpt#  34, nband=  9, wtk=  0.01172, kpt=  0.3125  0.1875  0.1875 (reduced coord)
  -0.39664   0.06168   0.06184   0.10849   0.14253   0.15151   0.19635   0.22847
   0.27359
      occupation numbers for kpt#  34
   1.00000   0.99852   0.99852   0.99526   0.98897   0.98623   0.95893   0.91274
   0.77197
 kpt#  35, nband=  9, wtk=  0.01172, kpt=  0.4375  0.1875  0.1875 (reduced coord)
  -0.38296   0.03744   0.04957   0.09440   0.14529   0.15819   0.20102   0.22584
   0.28859
      occupation numbers for kpt#  35
   1.00000   0.99919   0.99891   0.99666   0.98819   0.98377   0.95408   0.91784
   0.69939
 kpt#  36, nband=  9, wtk=  0.01172, kpt= -0.4375  0.1875  0.1875 (reduced coord)
  -0.37301   0.02873   0.04785   0.06507   0.15496   0.16529   0.20023   0.23942
   0.28412
      occupation numbers for kpt#  36
   1.00000   0.99935   0.99896   0.99839   0.98501   0.98068   0.95493   0.88833
   0.72237
 kpt#  37, nband=  9, wtk=  0.01172, kpt= -0.3125  0.1875  0.1875 (reduced coord)
  -0.37366   0.03478   0.05435   0.05800   0.15419   0.16703   0.19894   0.25136
   0.26415
      occupation numbers for kpt#  37
   1.00000   0.99925   0.99877   0.99865   0.98529   0.97984   0.95630   0.85511
   0.81084
 kpt#  38, nband=  9, wtk=  0.01172, kpt= -0.1875  0.1875  0.1875 (reduced coord)
  -0.38437   0.03562   0.07898   0.08517   0.14616   0.15820   0.19652   0.24026
   0.25061
      occupation numbers for kpt#  38
   1.00000   0.99923   0.99773   0.99735   0.98793   0.98377   0.95876   0.88623
   0.85741
 kpt#  39, nband=  9, wtk=  0.01172, kpt=  0.3125  0.3125  0.1875 (reduced coord)
  -0.39167   0.04350   0.07881   0.08797   0.14787   0.15353   0.19485   0.24519
   0.26137
      occupation numbers for kpt#  39
   1.00000   0.99906   0.99774   0.99716   0.98741   0.98553   0.96038   0.87319
   0.82127
 kpt#  40, nband=  9, wtk=  0.02344, kpt=  0.4375  0.3125  0.1875 (reduced coord)
  -0.38240   0.03550   0.06228   0.09742   0.14501   0.15722   0.19956   0.22220
   0.26982
      occupation numbers for kpt#  40
   1.00000   0.99923   0.99850   0.99640   0.98827   0.98415   0.95565   0.92444
   0.78813
 kpt#  41, nband=  9, wtk=  0.02344, kpt= -0.4375  0.3125  0.1875 (reduced coord)
  -0.37416   0.03948   0.05321   0.08603   0.14590   0.16529   0.19922   0.21301
   0.26544
      occupation numbers for kpt#  41
   1.00000   0.99915   0.99881   0.99729   0.98801   0.98068   0.95601   0.93900
   0.80586
 kpt#  42, nband=  9, wtk=  0.02344, kpt= -0.3125  0.3125  0.1875 (reduced coord)
  -0.37209   0.04645   0.06155   0.06756   0.14852   0.16961   0.19604   0.21713
   0.25282
      occupation numbers for kpt#  42
   1.00000   0.99899   0.99853   0.99829   0.98721   0.97852   0.95924   0.93283
   0.85053
 kpt#  43, nband=  9, wtk=  0.02344, kpt= -0.1875  0.3125  0.1875 (reduced coord)
  -0.37748   0.04071   0.06441   0.09471   0.14548   0.16150   0.19718   0.21321
   0.25171
      occupation numbers for kpt#  43
   1.00000   0.99913   0.99842   0.99664   0.98813   0.98239   0.95810   0.93872
   0.85402
 kpt#  44, nband=  9, wtk=  0.01172, kpt=  0.4375  0.4375  0.1875 (reduced coord)
  -0.37896   0.04041   0.08016   0.08427   0.14453   0.16376   0.19504   0.23065
   0.23226
      occupation numbers for kpt#  44
   1.00000   0.99913   0.99766   0.99741   0.98841   0.98139   0.96020   0.90830
   0.90490
 kpt#  45, nband=  9, wtk=  0.02344, kpt= -0.4375  0.4375  0.1875 (reduced coord)
  -0.37475   0.05635   0.06700   0.09335   0.14375   0.16749   0.19211   0.20091
   0.23143
      occupation numbers for kpt#  45
   1.00000   0.99871   0.99831   0.99675   0.98863   0.97961   0.96290   0.95419
   0.90666
 kpt#  46, nband=  9, wtk=  0.02344, kpt= -0.3125  0.4375  0.1875 (reduced coord)
  -0.37213   0.05532   0.07790   0.08407   0.13841   0.17535   0.19043   0.19195
   0.22867
      occupation numbers for kpt#  46
   1.00000   0.99874   0.99779   0.99742   0.99004   0.97529   0.96437   0.96305
   0.91233
 kpt#  47, nband=  9, wtk=  0.02344, kpt= -0.1875  0.4375  0.1875 (reduced coord)
  -0.37259   0.05100   0.06203   0.08457   0.14351   0.17008   0.19476   0.20235
   0.24324
      occupation numbers for kpt#  47
   1.00000   0.99887   0.99851   0.99739   0.98870   0.97827   0.96047   0.95259
   0.87848
 kpt#  48, nband=  9, wtk=  0.01172, kpt= -0.4375 -0.4375  0.1875 (reduced coord)
  -0.37452   0.07325   0.08287   0.08471   0.13702   0.17437   0.18743   0.19005
   0.21612
      occupation numbers for kpt#  48
   1.00000   0.99803   0.99750   0.99738   0.99038   0.97587   0.96687   0.96470
   0.93440
 kpt#  49, nband=  9, wtk=  0.02344, kpt= -0.3125 -0.4375  0.1875 (reduced coord)
  -0.37366   0.06810   0.07441   0.09281   0.13810   0.17472   0.18727   0.18867
   0.21891
      occupation numbers for kpt#  49
   1.00000   0.99827   0.99797   0.99679   0.99011   0.97567   0.96699   0.96586
   0.92999
 kpt#  50, nband=  9, wtk=  0.01172, kpt= -0.3125 -0.3125  0.1875 (reduced coord)
  -0.37583   0.05583   0.08175   0.08440   0.14220   0.16973   0.19110   0.20685
   0.22302
      occupation numbers for kpt#  50
   1.00000   0.99872   0.99757   0.99740   0.98906   0.97846   0.96379   0.94725
   0.92299
 prteigrs : prtvol=0 or 1, do not print more k-points.

 Eigenvalues (hartree) for nkpt=  60  k points, SPIN DOWN:
 kpt#   1, nband=  9, wtk=  0.00391, kpt=  0.0625  0.0625  0.0625 (reduced coord)
  -0.41512   0.20057   0.21295   0.21295   0.23880   0.23880   0.24237   0.39466
   0.47385
      occupation numbers for kpt#   1
   1.00000   0.95456   0.93909   0.93909   0.88985   0.88985   0.88081   0.14097
   0.02216
 kpt#   2, nband=  9, wtk=  0.01172, kpt=  0.1875  0.0625  0.0625 (reduced coord)
  -0.40743   0.15635   0.18935   0.20403   0.24146   0.25498   0.25704   0.43349
   0.48472
      occupation numbers for kpt#   2
   1.00000   0.98449   0.96529   0.95066   0.88317   0.84355   0.83663   0.05853
   0.01698
 kpt#   3, nband=  9, wtk=  0.01172, kpt=  0.3125  0.0625  0.0625 (reduced coord)
  -0.39136   0.09291   0.17270   0.18377   0.25637   0.26852   0.26988   0.48415
   0.52087
      occupation numbers for kpt#   3
   1.00000   0.99678   0.97684   0.96967   0.83889   0.79350   0.78790   0.01722
   0.00695
 kpt#   4, nband=  9, wtk=  0.01172, kpt=  0.4375  0.0625  0.0625 (reduced coord)
  -0.37524   0.04610   0.16193   0.16877   0.27046   0.27738   0.28223   0.51469
   0.54396
      occupation numbers for kpt#   4
   1.00000   0.99900   0.98221   0.97896   0.78545   0.75488   0.73175   0.00810
   0.00391
 kpt#   5, nband=  9, wtk=  0.01172, kpt= -0.4375  0.0625  0.0625 (reduced coord)
  -0.37002   0.03292   0.16022   0.16370   0.27620   0.27788   0.28709   0.52206
   0.54524
      occupation numbers for kpt#   5
   1.00000   0.99928   0.98294   0.98142   0.76029   0.75256   0.70722   0.00675
   0.00379
 kpt#   6, nband=  9, wtk=  0.01172, kpt= -0.3125  0.0625  0.0625 (reduced coord)
  -0.37994   0.05867   0.16870   0.16928   0.26524   0.27588   0.27827   0.51104
   0.52459
      occupation numbers for kpt#   6
   1.00000   0.99863   0.97900   0.97869   0.80665   0.76172   0.75072   0.00887
   0.00633
 kpt#   7, nband=  9, wtk=  0.01172, kpt= -0.1875  0.0625  0.0625 (reduced coord)
  -0.39725   0.11345   0.18308   0.18546   0.24953   0.26467   0.26645   0.46979
   0.49627
      occupation numbers for kpt#   7
   1.00000   0.99464   0.97018   0.96841   0.86068   0.80883   0.80187   0.02447
   0.01277
 kpt#   8, nband=  9, wtk=  0.01172, kpt= -0.0625  0.0625  0.0625 (reduced coord)
  -0.41119   0.17816   0.20002   0.20347   0.23528   0.25283   0.25308   0.41524
   0.47544
      occupation numbers for kpt#   8
   1.00000   0.97354   0.95516   0.95132   0.89820   0.85049   0.84969   0.08934
   0.02132
 kpt#   9, nband=  9, wtk=  0.01172, kpt=  0.1875  0.1875  0.0625 (reduced coord)
  -0.40394   0.15003   0.18802   0.18863   0.23014   0.26631   0.26700   0.43804
   0.47840
      occupation numbers for kpt#   9
   1.00000   0.98673   0.96639   0.96589   0.90935   0.80241   0.79968   0.05256
   0.01983
 kpt#  10, nband=  9, wtk=  0.02344, kpt=  0.3125  0.1875  0.0625 (reduced coord)
  -0.39155   0.10963   0.16530   0.18252   0.23603   0.27540   0.27717   0.46809
   0.49414
      occupation numbers for kpt#  10
   1.00000   0.99512   0.98068   0.97058   0.89646   0.76390   0.75585   0.02551
   0.01346
 kpt#  11, nband=  9, wtk=  0.02344, kpt=  0.4375  0.1875  0.0625 (reduced coord)
  -0.37640   0.06750   0.15067   0.17028   0.25358   0.28043   0.28205   0.49943
   0.52278
      occupation numbers for kpt#  11
   1.00000   0.99829   0.98651   0.97817   0.84809   0.74047   0.73264   0.01182
   0.00663
 kpt#  12, nband=  9, wtk=  0.02344, kpt= -0.4375  0.1875  0.0625 (reduced coord)
  -0.36784   0.04669   0.14261   0.16505   0.27039   0.27585   0.28541   0.51560
   0.53919
      occupation numbers for kpt#  12
   1.00000   0.99899   0.98895   0.98079   0.78577   0.76189   0.71588   0.00792
   0.00441
 kpt#  13, nband=  9, wtk=  0.02344, kpt= -0.3125  0.1875  0.0625 (reduced coord)
  -0.37226   0.05726   0.14143   0.17001   0.26343   0.27970   0.28349   0.50240
   0.54236
      occupation numbers for kpt#  13
   1.00000   0.99868   0.98926   0.97831   0.81357   0.74398   0.72552   0.01098
   0.00407
 kpt#  14, nband=  9, wtk=  0.02344, kpt= -0.1875  0.1875  0.0625 (reduced coord)
  -0.38626   0.09292   0.15058   0.18273   0.24846   0.27680   0.27826   0.47684
   0.52119
      occupation numbers for kpt#  14
   1.00000   0.99678   0.98654   0.97043   0.86385   0.75756   0.75080   0.02060
   0.00689
 kpt#  15, nband=  9, wtk=  0.02344, kpt= -0.0625  0.1875  0.0625 (reduced coord)
  -0.40050   0.13182   0.17640   0.19376   0.24023   0.26526   0.26767   0.45285
   0.49010
      occupation numbers for kpt#  15
   1.00000   0.99154   0.97465   0.96141   0.88630   0.80654   0.79699   0.03690
   0.01487
 kpt#  16, nband=  9, wtk=  0.01172, kpt=  0.3125  0.3125  0.0625 (reduced coord)
  -0.38440   0.10195   0.16977   0.17388   0.21715   0.28217   0.28231   0.47398
   0.48667
      occupation numbers for kpt#  16
   1.00000   0.99597   0.97844   0.97616   0.93281   0.73206   0.73135   0.02209
   0.01618
 kpt#  17, nband=  9, wtk=  0.02344, kpt=  0.4375  0.3125  0.0625 (reduced coord)
  -0.37362   0.08439   0.15008   0.16963   0.22767   0.28199   0.28317   0.49135
   0.50436
      occupation numbers for kpt#  17
   1.00000   0.99740   0.98671   0.97851   0.91432   0.73293   0.72709   0.01442
   0.01046
 kpt#  18, nband=  9, wtk=  0.02344, kpt= -0.4375  0.3125  0.0625 (reduced coord)
  -0.36548   0.07474   0.12412   0.16583   0.24969   0.27664   0.28325   0.50820
   0.52160
      occupation numbers for kpt#  18
   1.00000   0.99796   0.99301   0.98042   0.86021   0.75826   0.72672   0.00951
   0.00682
 kpt#  19, nband=  9, wtk=  0.02344, kpt= -0.3125  0.3125  0.0625 (reduced coord)
  -0.36530   0.07559   0.10921   0.16787   0.26696   0.26944   0.28473   0.50266
   0.53820
      occupation numbers for kpt#  19
   1.00000   0.99791   0.99518   0.97942   0.79983   0.78973   0.71931   0.01091
   0.00452
 kpt#  20, nband=  9, wtk=  0.02344, kpt= -0.1875  0.3125  0.0625 (reduced coord)
  -0.37318   0.07276   0.12729   0.17339   0.25803   0.27987   0.28386   0.49169
   0.54297
      occupation numbers for kpt#  20
   1.00000   0.99805   0.99244   0.97644   0.83320   0.74315   0.72366   0.01430
   0.00401
 kpt#  21, nband=  9, wtk=  0.02344, kpt= -0.0625  0.3125  0.0625 (reduced coord)
  -0.38395   0.07656   0.16177   0.17676   0.25589   0.27632   0.27686   0.49209
   0.52088
      occupation numbers for kpt#  21
   1.00000   0.99786   0.98228   0.97443   0.84050   0.75972   0.75725   0.01416
   0.00695
 kpt#  22, nband=  9, wtk=  0.01172, kpt=  0.4375  0.4375  0.0625 (reduced coord)
  -0.36851   0.08202   0.16276   0.17145   0.20750   0.28113   0.28153   0.49395
   0.49870
      occupation numbers for kpt#  22
   1.00000   0.99755   0.98184   0.97754   0.94643   0.73712   0.73517   0.01353
   0.01203
 kpt#  23, nband=  9, wtk=  0.02344, kpt= -0.4375  0.4375  0.0625 (reduced coord)
  -0.36419   0.08227   0.14241   0.16589   0.22409   0.27840   0.28028   0.49965
   0.50889
      occupation numbers for kpt#  23
   1.00000   0.99753   0.98900   0.98039   0.92108   0.75014   0.74122   0.01175
   0.00935
 kpt#  24, nband=  9, wtk=  0.02344, kpt= -0.3125  0.4375  0.0625 (reduced coord)
  -0.36323   0.08720   0.10921   0.16582   0.24875   0.27404   0.28269   0.50710
   0.52038
      occupation numbers for kpt#  24
   1.00000   0.99721   0.99517   0.98043   0.86302   0.76999   0.72949   0.00977
   0.00703
 kpt#  25, nband=  9, wtk=  0.02344, kpt= -0.1875  0.4375  0.0625 (reduced coord)
  -0.36605   0.05946   0.12656   0.16638   0.26955   0.27115   0.28478   0.50943
   0.53808
      occupation numbers for kpt#  25
   1.00000   0.99860   0.99257   0.98016   0.78925   0.78252   0.71907   0.00923
   0.00453
 kpt#  26, nband=  9, wtk=  0.02344, kpt= -0.0625  0.4375  0.0625 (reduced coord)
  -0.37096   0.04182   0.15422   0.16585   0.27082   0.27867   0.28511   0.51604
   0.54186
      occupation numbers for kpt#  26
   1.00000   0.99910   0.98528   0.98041   0.78392   0.74884   0.71739   0.00783
   0.00412
 kpt#  27, nband=  9, wtk=  0.01172, kpt= -0.4375 -0.4375  0.0625 (reduced coord)
  -0.36495   0.07983   0.16167   0.17189   0.20552   0.27927   0.27988   0.49569
   0.50278
      occupation numbers for kpt#  27
   1.00000   0.99768   0.98232   0.97729   0.94888   0.74604   0.74312   0.01296
   0.01088
 kpt#  28, nband=  9, wtk=  0.02344, kpt= -0.3125 -0.4375  0.0625 (reduced coord)
  -0.36743   0.08181   0.14528   0.16703   0.22521   0.28022   0.28171   0.49716
   0.50826
      occupation numbers for kpt#  28
   1.00000   0.99756   0.98820   0.97984   0.91902   0.74150   0.73427   0.01250
   0.00950
 kpt#  29, nband=  9, wtk=  0.02344, kpt= -0.1875 -0.4375  0.0625 (reduced coord)
  -0.36997   0.06709   0.13830   0.16686   0.25137   0.27972   0.28373   0.50554
   0.52334
      occupation numbers for kpt#  29
   1.00000   0.99831   0.99006   0.97992   0.85507   0.74388   0.72432   0.01016
   0.00653
 kpt#  30, nband=  9, wtk=  0.01172, kpt= -0.3125 -0.3125  0.0625 (reduced coord)
  -0.37529   0.08859   0.16522   0.17165   0.21147   0.28300   0.28312   0.48864
   0.49076
      occupation numbers for kpt#  30
   1.00000   0.99711   0.98071   0.97743   0.94117   0.72797   0.72734   0.01542
   0.01463
 kpt#  31, nband=  9, wtk=  0.02344, kpt= -0.1875 -0.3125  0.0625 (reduced coord)
  -0.38207   0.09332   0.15661   0.17448   0.23146   0.28106   0.28228   0.48125
   0.49893
      occupation numbers for kpt#  31
   1.00000   0.99675   0.98439   0.97581   0.90660   0.73743   0.73148   0.01849
   0.01196
 kpt#  32, nband=  9, wtk=  0.01172, kpt= -0.1875 -0.1875  0.0625 (reduced coord)
  -0.39449   0.12297   0.17732   0.17919   0.22373   0.27669   0.27713   0.45703
   0.48233
      occupation numbers for kpt#  32
   1.00000   0.99321   0.97408   0.97287   0.92172   0.75803   0.75600   0.03336
   0.01800
 kpt#  33, nband=  9, wtk=  0.00391, kpt=  0.1875  0.1875  0.1875 (reduced coord)
  -0.40383   0.13599   0.19378   0.19378   0.25335   0.25335   0.25644   0.45155
   0.49410
      occupation numbers for kpt#  33
   1.00000   0.99062   0.96138   0.96138   0.84884   0.84884   0.83865   0.03807
   0.01348
 kpt#  34, nband=  9, wtk=  0.01172, kpt=  0.3125  0.1875  0.1875 (reduced coord)
  -0.39423   0.11073   0.16265   0.19075   0.24750   0.26979   0.27170   0.46648
   0.51920
      occupation numbers for kpt#  34
   1.00000   0.99499   0.98189   0.96410   0.86665   0.78829   0.78020   0.02652
   0.00724
 kpt#  35, nband=  9, wtk=  0.01172, kpt=  0.4375  0.1875  0.1875 (reduced coord)
  -0.37970   0.07942   0.13758   0.17891   0.25560   0.27963   0.28111   0.48424
   0.54324
      occupation numbers for kpt#  35
   1.00000   0.99770   0.99024   0.97305   0.84149   0.74433   0.73719   0.01718
   0.00398
 kpt#  36, nband=  9, wtk=  0.01172, kpt= -0.4375  0.1875  0.1875 (reduced coord)
  -0.36860   0.05430   0.13326   0.16883   0.26854   0.27638   0.28484   0.50620
   0.54638
      occupation numbers for kpt#  36
   1.00000   0.99877   0.99123   0.97893   0.79344   0.75948   0.71876   0.00999
   0.00368
 kpt#  37, nband=  9, wtk=  0.01172, kpt= -0.3125  0.1875  0.1875 (reduced coord)
  -0.36873   0.05439   0.14146   0.16604   0.26120   0.27824   0.28478   0.51536
   0.52860
      occupation numbers for kpt#  37
   1.00000   0.99877   0.98926   0.98032   0.82189   0.75089   0.71904   0.00796
   0.00573
 kpt#  38, nband=  9, wtk=  0.01172, kpt= -0.1875  0.1875  0.1875 (reduced coord)
  -0.37999   0.08169   0.15758   0.17055   0.24107   0.28108   0.28124   0.49436
   0.50254
      occupation numbers for kpt#  38
   1.00000   0.99757   0.98401   0.97802   0.88418   0.73736   0.73657   0.01339
   0.01094
 kpt#  39, nband=  9, wtk=  0.01172, kpt=  0.3125  0.3125  0.1875 (reduced coord)
  -0.38882   0.09431   0.17147   0.17511   0.24527   0.27483   0.27625   0.48274
   0.49920
      occupation numbers for kpt#  39
   1.00000   0.99667   0.97752   0.97543   0.87298   0.76645   0.76007   0.01783
   0.01188
 kpt#  40, nband=  9, wtk=  0.02344, kpt=  0.4375  0.3125  0.1875 (reduced coord)
  -0.37800   0.08168   0.14101   0.17453   0.24689   0.28068   0.28269   0.48633
   0.52324
      occupation numbers for kpt#  40
   1.00000   0.99757   0.98938   0.97578   0.86842   0.73927   0.72949   0.01632
   0.00655
 kpt#  41, nband=  9, wtk=  0.02344, kpt= -0.4375  0.3125  0.1875 (reduced coord)
  -0.36778   0.07438   0.11973   0.16642   0.25881   0.27690   0.28405   0.49831
   0.53613
      occupation numbers for kpt#  41
   1.00000   0.99797   0.99373   0.98013   0.83049   0.75710   0.72271   0.01215
   0.00475
 kpt#  42, nband=  9, wtk=  0.02344, kpt= -0.3125  0.3125  0.1875 (reduced coord)
  -0.36466   0.07098   0.12041   0.16187   0.26317   0.27238   0.28332   0.50810
   0.52907
      occupation numbers for kpt#  42
   1.00000   0.99814   0.99362   0.98223   0.81458   0.77727   0.72638   0.00953
   0.00567
 kpt#  43, nband=  9, wtk=  0.02344, kpt= -0.1875  0.3125  0.1875 (reduced coord)
  -0.37083   0.07838   0.13373   0.16713   0.24525   0.28042   0.28345   0.49435
   0.52357
      occupation numbers for kpt#  43
   1.00000   0.99776   0.99113   0.97979   0.87304   0.74055   0.72570   0.01339
   0.00650
 kpt#  44, nband=  9, wtk=  0.01172, kpt=  0.4375  0.4375  0.1875 (reduced coord)
  -0.37223   0.07698   0.14482   0.16902   0.23747   0.28126   0.28316   0.50387
   0.50579
      occupation numbers for kpt#  44
   1.00000   0.99784   0.98833   0.97883   0.89306   0.73649   0.72717   0.01059
   0.01010
 kpt#  45, nband=  9, wtk=  0.02344, kpt= -0.4375  0.4375  0.1875 (reduced coord)
  -0.36572   0.08183   0.12798   0.16042   0.24436   0.27816   0.28185   0.49971
   0.52046
      occupation numbers for kpt#  45
   1.00000   0.99756   0.99231   0.98285   0.87547   0.75124   0.73361   0.01173
   0.00702
 kpt#  46, nband=  9, wtk=  0.02344, kpt= -0.3125  0.4375  0.1875 (reduced coord)
  -0.36235   0.09478   0.10892   0.14895   0.26032   0.27096   0.28014   0.50332
   0.52004
      occupation numbers for kpt#  46
   1.00000   0.99663   0.99521   0.98707   0.82510   0.78335   0.74186   0.01073
   0.00709
 kpt#  47, nband=  9, wtk=  0.02344, kpt= -0.1875  0.4375  0.1875 (reduced coord)
  -0.36413   0.08323   0.11413   0.15735   0.25954   0.27317   0.28210   0.50251
   0.52645
      occupation numbers for kpt#  47
   1.00000   0.99747   0.99455   0.98410   0.82791   0.77384   0.73241   0.01095
   0.00605
 kpt#  48, nband=  9, wtk=  0.01172, kpt= -0.4375 -0.4375  0.1875 (reduced coord)
  -0.36374   0.08421   0.12438   0.17024   0.23329   0.27656   0.28185   0.50802
   0.50980
      occupation numbers for kpt#  48
   1.00000   0.99741   0.99297   0.97819   0.90265   0.75866   0.73361   0.00955
   0.00914
 kpt#  49, nband=  9, wtk=  0.02344, kpt= -0.3125 -0.4375  0.1875 (reduced coord)
  -0.36312   0.08731   0.12366   0.15585   0.24415   0.27634   0.28028   0.50195
   0.51666
      occupation numbers for kpt#  49
   1.00000   0.99720   0.99309   0.98468   0.87604   0.75966   0.74123   0.01110
   0.00771
 kpt#  50, nband=  9, wtk=  0.01172, kpt= -0.3125 -0.3125  0.1875 (reduced coord)
  -0.36663   0.07926   0.13311   0.16942   0.23479   0.27882   0.28262   0.50821
   0.50837
      occupation numbers for kpt#  50
   1.00000   0.99771   0.99126   0.97862   0.89930   0.74816   0.72985   0.00951
   0.00947
 prteigrs : prtvol=0 or 1, do not print more k-points.

 Total charge density [el/Bohr^3]
,     Maximum=    1.5352E+00  at reduced coord.    0.5000    0.5000    0.5000
,Next maximum=    1.4990E+00  at reduced coord.    0.5000    0.5000    0.5208
,     Minimum=    1.1151E-02  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=    1.1151E-02  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    1.5000E+01
 Spin up density      [el/Bohr^3]
,     Maximum=    9.2629E-01  at reduced coord.    0.0000    0.0000    0.0000
,Next maximum=    9.1334E-01  at reduced coord.    0.0000    0.0208    0.9792
,     Minimum=    5.2863E-03  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=    5.2863E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.6611E+00
 Spin down density    [el/Bohr^3]
,     Maximum=    7.6192E-01  at reduced coord.    0.5000    0.5000    0.5000
,Next maximum=    7.4389E-01  at reduced coord.    0.5000    0.5000    0.5208
,     Minimum=    5.8642E-03  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=    5.8642E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    6.3389E+00
 Magnetization (spin up - spin down) [el/Bohr^3]
,     Maximum=    4.8081E-01  at reduced coord.    0.0000    0.0000    0.0000
,Next maximum=    4.7405E-01  at reduced coord.    0.0000    0.0208    0.9792
,     Minimum=   -7.4386E-04  at reduced coord.    0.6250    0.6250    0.1250
,Next minimum=   -7.4386E-04  at reduced coord.    0.3750    0.3750    0.3750
,  Integrated=    2.3222E+00
 Relative magnetization (=zeta, between -1 and 1)
,     Maximum=    7.1655E-01  at reduced coord.    0.1875    0.8125    0.8125
,Next maximum=    7.1655E-01  at reduced coord.    0.8125    0.1875    0.8125
,     Minimum=   -5.1826E-02  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=   -5.1826E-02  at reduced coord.    0.7500    0.7500    0.7500

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.13080095390378E+01
    Hartree energy  =  8.49662977703234E+00
    XC energy       = -8.84767851523803E+00
    Ewald energy    = -4.08825008896774E+01
    PspCore energy  =  1.68654710609047E+00
    Loc. psp. energy= -3.50006840663208E+01
    Spherical terms =  1.71739255370037E+01
    >>>>> Internal E= -4.60657515120720E+01

    -kT*entropy     = -1.17592597074317E-01
    >>>>>>>>> Etotal= -4.61833441091463E+01

 "Double-counting" decomposition of free energy:
    Band energy     =  1.37791802945430E+00
    Ewald energy    = -4.08825008896774E+01
    PspCore energy  =  1.68654710609047E+00
    Dble-C XC-energy= -6.08096103324206E+00
    Spherical terms = -2.16679310918535E+00
    >>>>> Internal E= -4.60657898965600E+01

    -kT*entropy     = -1.17592597074317E-01
    >>>> Etotal (DC)= -4.61833824936344E+01

  >Total energy in eV           = -1.25671270449245E+03
  >Total DC energy in eV        = -1.25671374898749E+03
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.25924625E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -4.25924625E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -4.25924625E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  1.2531E+01 GPa]
- sigma(1 1)= -1.25311330E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -1.25311330E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -1.25311330E+01  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      8.0000000000E+00  8.0000000000E+00  8.0000000000E+00 Bohr
              amu      5.89332000E+01  1.59994000E+01
      chksymbreak           0
         dmatpawu        1.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    1.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    1.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    1.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    1.00000
                         1.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    1.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
             ecut      3.00000000E+01 Hartree
           etotal1    -4.6183382494E+01
            fcart1     9.9999999999E+99  9.9999999999E+99  9.9999999999E+99
                       9.9999999999E+99  9.9999999999E+99  9.9999999999E+99
           iatsph1       1    2
              ixc          11
           jdtset        1
            jpawu      2.93994603E-02  0.00000000E+00
              kpt      6.25000000E-02  6.25000000E-02  6.25000000E-02
                       1.87500000E-01  6.25000000E-02  6.25000000E-02
                       3.12500000E-01  6.25000000E-02  6.25000000E-02
                       4.37500000E-01  6.25000000E-02  6.25000000E-02
                      -4.37500000E-01  6.25000000E-02  6.25000000E-02
                      -3.12500000E-01  6.25000000E-02  6.25000000E-02
                      -1.87500000E-01  6.25000000E-02  6.25000000E-02
                      -6.25000000E-02  6.25000000E-02  6.25000000E-02
                       1.87500000E-01  1.87500000E-01  6.25000000E-02
                       3.12500000E-01  1.87500000E-01  6.25000000E-02
                       4.37500000E-01  1.87500000E-01  6.25000000E-02
                      -4.37500000E-01  1.87500000E-01  6.25000000E-02
                      -3.12500000E-01  1.87500000E-01  6.25000000E-02
                      -1.87500000E-01  1.87500000E-01  6.25000000E-02
                      -6.25000000E-02  1.87500000E-01  6.25000000E-02
                       3.12500000E-01  3.12500000E-01  6.25000000E-02
                       4.37500000E-01  3.12500000E-01  6.25000000E-02
                      -4.37500000E-01  3.12500000E-01  6.25000000E-02
                      -3.12500000E-01  3.12500000E-01  6.25000000E-02
                      -1.87500000E-01  3.12500000E-01  6.25000000E-02
                      -6.25000000E-02  3.12500000E-01  6.25000000E-02
                       4.37500000E-01  4.37500000E-01  6.25000000E-02
                      -4.37500000E-01  4.37500000E-01  6.25000000E-02
                      -3.12500000E-01  4.37500000E-01  6.25000000E-02
                      -1.87500000E-01  4.37500000E-01  6.25000000E-02
                      -6.25000000E-02  4.37500000E-01  6.25000000E-02
                      -4.37500000E-01 -4.37500000E-01  6.25000000E-02
                      -3.12500000E-01 -4.37500000E-01  6.25000000E-02
                      -1.87500000E-01 -4.37500000E-01  6.25000000E-02
                      -3.12500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -3.12500000E-01  6.25000000E-02
                      -1.87500000E-01 -1.87500000E-01  6.25000000E-02
                       1.87500000E-01  1.87500000E-01  1.87500000E-01
                       3.12500000E-01  1.87500000E-01  1.87500000E-01
                       4.37500000E-01  1.87500000E-01  1.87500000E-01
                      -4.37500000E-01  1.87500000E-01  1.87500000E-01
                      -3.12500000E-01  1.87500000E-01  1.87500000E-01
                      -1.87500000E-01  1.87500000E-01  1.87500000E-01
                       3.12500000E-01  3.12500000E-01  1.87500000E-01
                       4.37500000E-01  3.12500000E-01  1.87500000E-01
                      -4.37500000E-01  3.12500000E-01  1.87500000E-01
                      -3.12500000E-01  3.12500000E-01  1.87500000E-01
                      -1.87500000E-01  3.12500000E-01  1.87500000E-01
                       4.37500000E-01  4.37500000E-01  1.87500000E-01
                      -4.37500000E-01  4.37500000E-01  1.87500000E-01
                      -3.12500000E-01  4.37500000E-01  1.87500000E-01
                      -1.87500000E-01  4.37500000E-01  1.87500000E-01
                      -4.37500000E-01 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -4.37500000E-01  1.87500000E-01
                      -3.12500000E-01 -3.12500000E-01  1.87500000E-01
                       outvar_i_n : Printing only first  50 k-points.
           kptopt           4
         kptrlatt        8    0    0      0    8    0      0    0    8
          kptrlen      4.52548340E+01
            lpawu           2      -1
P           mkmem           6
            natom           2
           natsph        2
            nband           9
           ndtset           1
            ngfft          30      30      30
          ngfftdg          48      48      48
             nkpt          60
-           npkpt          20
           nspden           2
           nsppol           2
            nstep        1000
             nsym          48
           ntypat           2
              occ      1.000000  0.995974  0.995974  0.989830  0.988939  0.988939
                       0.945116  0.928275  0.928275
                       1.000000  0.997541  0.997006  0.992924  0.989237  0.987977
                       0.959256  0.918157  0.872778
                       1.000000  0.998612  0.998571  0.997541  0.986135  0.985567
                       0.962277  0.851934  0.768993
                       1.000000  0.999400  0.998985  0.998794  0.982484  0.982275
                       0.955200  0.759519  0.684519
                       1.000000  0.999545  0.999034  0.999018  0.981488  0.980763
                       0.951807  0.701518  0.688766
                       1.000000  0.999236  0.998779  0.998678  0.983964  0.982896
                       0.957942  0.772800  0.729577
                       1.000000  0.998526  0.997687  0.996722  0.987115  0.986776
                       0.963403  0.868621  0.825636
                       1.000000  0.997289  0.995944  0.991111  0.989282  0.988867
                       0.951361  0.924601  0.911464
                       1.000000  0.998442  0.995882  0.992264  0.989563  0.989312
                       0.952094  0.920770  0.902881
                       1.000000  0.999035  0.997372  0.994886  0.989148  0.987166
                       0.957527  0.916824  0.841954
                       1.000000  0.999269  0.998612  0.997935  0.986332  0.982481
                       0.957167  0.873522  0.783293
                       1.000000  0.999364  0.998897  0.998815  0.983932  0.980026
                       0.954725  0.840142  0.756330
                       1.000000  0.999340  0.998947  0.998222  0.985116  0.981720
                       0.955229  0.876381  0.717884
                       1.000000  0.999072  0.998537  0.995972  0.988607  0.985269
                       0.956473  0.915224  0.750341
                       1.000000  0.998479  0.997312  0.994134  0.989259  0.987539
                       0.959322  0.914998  0.841501
                       1.000000  0.999203  0.995610  0.993719  0.989825  0.988523
                       0.956610  0.929598  0.922096
                       1.000000  0.999124  0.997232  0.995616  0.988724  0.984329
                       0.961548  0.940836  0.910381
                       1.000000  0.998754  0.998461  0.997965  0.988015  0.978316
                       0.960925  0.938264  0.883587
                       1.000000  0.999128  0.998777  0.997672  0.988287  0.979260
                       0.956367  0.943331  0.801369
                       1.000000  0.999278  0.998906  0.997073  0.987940  0.982380
                       0.953525  0.926310  0.726543
                       1.000000  0.999122  0.998620  0.997805  0.985936  0.984224
                       0.959121  0.856530  0.745366
                       1.000000  0.998739  0.995171  0.994621  0.987965  0.983384
                       0.975411  0.959287  0.957364
                       1.000000  0.998049  0.996995  0.995859  0.990197  0.976610
                       0.971289  0.968880  0.954494
                       1.000000  0.998481  0.997977  0.997924  0.989677  0.976593
                       0.963050  0.959088  0.899746
                       1.000000  0.999211  0.998806  0.998472  0.985845  0.979463
                       0.956700  0.907967  0.786783
                       1.000000  0.999453  0.999000  0.998832  0.982821  0.980999
                       0.953726  0.781943  0.704909
                       1.000000  0.998066  0.995033  0.994832  0.989441  0.977905
                       0.977631  0.970505  0.969376
                       1.000000  0.998729  0.997093  0.995778  0.988782  0.981241
                       0.967604  0.957126  0.940067
                       1.000000  0.999157  0.998559  0.997976  0.986969  0.980456
                       0.958062  0.902646  0.844509
                       1.000000  0.999122  0.995390  0.994231  0.989060  0.986677
                       0.965314  0.942970  0.942327
                       1.000000  0.999213  0.997340  0.995343  0.988988  0.986213
                       0.957736  0.925964  0.871023
                       1.000000  0.999016  0.995777  0.993100  0.989800  0.989393
                       0.952600  0.921591  0.906782
                       1.000000  0.997604  0.997604  0.995588  0.987580  0.987580
                       0.964402  0.870169  0.870169
                       1.000000  0.998524  0.998519  0.995260  0.988970  0.986233
                       0.958926  0.912736  0.771967
                       1.000000  0.999194  0.998909  0.996663  0.988190  0.983769
                       0.954077  0.917839  0.699390
                       1.000000  0.999352  0.998955  0.998394  0.985010  0.980679
                       0.954934  0.888331  0.722374
                       1.000000  0.999246  0.998771  0.998654  0.985290  0.979835
                       0.956302  0.855113  0.810841
                       1.000000  0.999230  0.997728  0.997349  0.987935  0.983767
                       0.958761  0.886232  0.857408
                       1.000000  0.999063  0.997738  0.997157  0.987415  0.985530
                       0.960378  0.873188  0.821265
                       1.000000  0.999233  0.998502  0.996402  0.988272  0.984151
                       0.955652  0.924441  0.788132
                       1.000000  0.999152  0.998806  0.997291  0.988012  0.980677
                       0.956006  0.939004  0.805861
                       1.000000  0.998991  0.998529  0.998291  0.987210  0.978520
                       0.959236  0.932825  0.850528
                       1.000000  0.999126  0.998420  0.996637  0.988135  0.982393
                       0.958104  0.938722  0.854016
                       1.000000  0.999133  0.997660  0.997407  0.988410  0.981391
                       0.960198  0.908299  0.904897
                       1.000000  0.998708  0.998315  0.996749  0.988632  0.979608
                       0.962903  0.954194  0.906659
                       1.000000  0.998741  0.997788  0.997420  0.990039  0.975288
                       0.964373  0.963051  0.912333
                       1.000000  0.998870  0.998512  0.997388  0.988700  0.978274
                       0.960470  0.952591  0.878484
                       1.000000  0.998031  0.997497  0.997379  0.990376  0.975871
                       0.966869  0.964698  0.934398
                       1.000000  0.998268  0.997973  0.996792  0.990114  0.975669
                       0.966993  0.965858  0.929991
                       1.000000  0.998725  0.997566  0.997399  0.989060  0.978457
                       0.963795  0.947246  0.922994
                       prtocc : prtvol=0, do not print more k-points.
                       1.000000  0.998832  0.998634  0.998634  0.984383  0.984383
                       0.961159  0.767287  0.767287
                       1.000000  0.999267  0.998942  0.998070  0.985005  0.983191
                       0.956477  0.860577  0.692877
                       1.000000  0.999284  0.998927  0.997467  0.987932  0.980845
                       0.953605  0.933073  0.733449
                       1.000000  0.998870  0.998569  0.997867  0.988908  0.977962
                       0.959101  0.950757  0.844481
                       1.000000  0.999350  0.998812  0.998684  0.984385  0.981317
                       0.955762  0.788466  0.772456
                       1.000000  0.999224  0.998850  0.998288  0.985862  0.980090
                       0.956542  0.901901  0.791226
                       1.000000  0.998878  0.998310  0.997760  0.989049  0.977331
                       0.960611  0.954341  0.875097
                       1.000000  0.998991  0.998606  0.998538  0.986799  0.978644
                       0.958497  0.920546  0.831982
                       1.000000  0.999522  0.999015  0.999015  0.981370  0.981370
                       0.952714  0.681495  0.681495
                       1.000000  0.999467  0.998993  0.998887  0.982674  0.980567
                       0.953234  0.798044  0.704815
                       1.000000  0.954563  0.939090  0.939090  0.889852  0.889852
                       0.880809  0.140968  0.022161
                       1.000000  0.984490  0.965293  0.950660  0.883168  0.843549
                       0.836631  0.058525  0.016978
                       1.000000  0.996784  0.976838  0.969674  0.838885  0.793504
                       0.787903  0.017217  0.006946
                       1.000000  0.999000  0.982206  0.978961  0.785451  0.754876
                       0.731751  0.008098  0.003912
                       1.000000  0.999280  0.982937  0.981416  0.760294  0.752561
                       0.707223  0.006745  0.003789
                       1.000000  0.998631  0.978996  0.978695  0.806648  0.761722
                       0.750720  0.008866  0.006334
                       1.000000  0.994638  0.970178  0.968406  0.860679  0.808825
                       0.801866  0.024470  0.012774
                       1.000000  0.973536  0.955158  0.951321  0.898198  0.850488
                       0.849686  0.089343  0.021317
                       1.000000  0.986725  0.966389  0.965890  0.909352  0.802411
                       0.799684  0.052558  0.019825
                       1.000000  0.995124  0.980676  0.970581  0.896457  0.763896
                       0.755850  0.025508  0.013462
                       1.000000  0.998294  0.986512  0.978167  0.848089  0.740468
                       0.732638  0.011816  0.006626
                       1.000000  0.998985  0.988947  0.980793  0.785771  0.761888
                       0.715876  0.007917  0.004405
                       1.000000  0.998679  0.989264  0.978310  0.813571  0.743981
                       0.725524  0.010980  0.004071
                       1.000000  0.996784  0.986543  0.970429  0.863851  0.757564
                       0.750797  0.020597  0.006892
                       1.000000  0.991540  0.974650  0.961407  0.886302  0.806538
                       0.796994  0.036902  0.014871
                       1.000000  0.995972  0.978438  0.976162  0.932807  0.732062
                       0.731349  0.022093  0.016181
                       1.000000  0.997400  0.986709  0.978513  0.914321  0.732927
                       0.727090  0.014422  0.010460
                       1.000000  0.997956  0.993011  0.980418  0.860212  0.758261
                       0.726719  0.009512  0.006822
                       1.000000  0.997912  0.995175  0.979417  0.799827  0.789735
                       0.719305  0.010908  0.004516
                       1.000000  0.998054  0.992437  0.976445  0.833202  0.743148
                       0.723655  0.014300  0.004009
                       1.000000  0.997861  0.982275  0.974425  0.840502  0.759721
                       0.757253  0.014162  0.006945
                       1.000000  0.997549  0.981842  0.977535  0.946431  0.737123
                       0.735165  0.013527  0.012030
                       1.000000  0.997533  0.989003  0.980391  0.921079  0.750140
                       0.741218  0.011750  0.009350
                       1.000000  0.997211  0.995175  0.980427  0.863018  0.769994
                       0.729494  0.009773  0.007032
                       1.000000  0.998604  0.992574  0.980155  0.789252  0.782524
                       0.719065  0.009225  0.004529
                       1.000000  0.999101  0.985280  0.980413  0.783921  0.748837
                       0.717386  0.007832  0.004122
                       1.000000  0.997679  0.982320  0.977293  0.948883  0.746044
                       0.743117  0.012958  0.010877
                       1.000000  0.997562  0.988195  0.979837  0.919019  0.741502
                       0.734272  0.012496  0.009497
                       1.000000  0.998311  0.990065  0.979922  0.855072  0.743883
                       0.724318  0.010159  0.006534
                       1.000000  0.997113  0.980711  0.977426  0.941165  0.727970
                       0.727338  0.015416  0.014632
                       1.000000  0.996751  0.984389  0.975808  0.906600  0.737430
                       0.731484  0.018486  0.011961
                       1.000000  0.993207  0.974077  0.972867  0.921720  0.758032
                       0.756001  0.033358  0.018002
                       1.000000  0.990619  0.961383  0.961383  0.848839  0.848839
                       0.838647  0.038068  0.013475
                       1.000000  0.994989  0.981888  0.964099  0.866653  0.788286
                       0.780198  0.026524  0.007240
                       1.000000  0.997703  0.990241  0.973054  0.841488  0.744329
                       0.737195  0.017180  0.003983
                       1.000000  0.998773  0.991230  0.978930  0.793436  0.759481
                       0.718758  0.009995  0.003683
                       1.000000  0.998770  0.989258  0.980320  0.821890  0.750891
                       0.719043  0.007965  0.005734
                       1.000000  0.997569  0.984011  0.978024  0.884177  0.737364
                       0.736569  0.013391  0.010940
                       1.000000  0.996670  0.977524  0.975431  0.872976  0.766453
                       0.760066  0.017826  0.011881
                       1.000000  0.997569  0.989377  0.975780  0.868419  0.739267
                       0.729491  0.016319  0.006549
                       prtocc : prtvol=0, do not print more k-points.
           occopt           3
        optforces           0
        pawecutdg      8.00000000E+01 Hartree
           prtdos           3
            rprim      5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         225
           spinat      0.0000000000E+00  0.0000000000E+00  3.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten1    -4.2592462460E-04 -4.2592462460E-04 -4.2592462460E-04
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
           tolvrs      1.00000000E-06
            typat      1  2
            upawu      2.93994603E-01  0.00000000E+00
        usedmatpu          10
          usepawu           1
           useylm           1
              wtk        0.00391    0.01172    0.01172    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.01172    0.02344    0.02344    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.02344    0.02344
                         0.02344    0.02344    0.02344    0.01172    0.02344    0.02344
                         0.02344    0.02344    0.01172    0.02344    0.02344    0.01172
                         0.02344    0.01172    0.00391    0.01172    0.01172    0.01172
                         0.01172    0.01172    0.01172    0.02344    0.02344    0.02344
                         0.02344    0.01172    0.02344    0.02344    0.02344    0.01172
                         0.02344    0.01172
                       outvars : Printing only first  50 k-points.
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.1167088344E+00  2.1167088344E+00  2.1167088344E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       4.0000000000E+00  4.0000000000E+00  4.0000000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
            znucl       27.00000    8.00000

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

 [1] Gamma and beta cerium: LDA+U calculations of ground-state parameters.
 B. Amadon, F. Jollet and M. Torrent, Phys. Rev. B 77, 155104 (2008).
 Comment : LDA+U calculations, usepawu/=0. Strong suggestion to cite this paper.

 [2] Implementation of the Projector Augmented-Wave Method in the ABINIT code.
 M. Torrent, F. Jollet, F. Bottin, G. Zerah, and X. Gonze Comput. Mat. Science 42, 337, (2008).
 Comment : PAW calculations. Strong suggestion to cite this paper.

 [3] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [4] A brief introduction to the ABINIT software package.
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

 [5] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.
-
- Proc.   0 individual time (sec): cpu=         69.4  wall=        417.3

================================================================================

 Calculation completed.
.Delivered    1 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=       1482.3  wall=       8353.7
