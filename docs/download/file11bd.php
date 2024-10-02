
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

.Starting date : Tue  8 Jul 2014.
- ( at 15h18 )
  
- input  file    -> CoO.in
- output file    -> CoO.outC
- root for input  files -> CoOin
- root for output files -> CoOout


 DATASET    1 : space group Fm -3 m (#225); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         2
  lmnmax =        18   lnmax =         6   mband =         9  mffmem =         1
P  mgfft =        30   mkmem =        30 mpssoang=         3     mpw =      1017
  mqgrid =      3001   natom =         2    nfft =     27000    nkpt =        60
  nloalg =         4  nspden =         2 nspinor =         1  nsppol =         2
    nsym =        48  n1xccc =         1  ntypat =         2  occopt =         3
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        48    nfftf =    110592
================================================================================
P This job should need less than                      71.572 Mbytes of memory.
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
                         0.00000    0.00000    0.00000    1.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
             ecut      3.00000000E+01 Hartree
           iatsph1       1    2
              ixc          11
           jdtset        1
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
P           mkmem          30
            natom           2
           natsph        2
            nband           9
           ndtset           1
            ngfft          30      30      30
          ngfftdg          48      48      48
             nkpt          60
-           npkpt           4
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
-   nproc =    4

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
P newkpt: treating      9 bands with npw=     993 for ikpt=   7 by node    0
P newkpt: treating      9 bands with npw=     984 for ikpt=   8 by node    0
P newkpt: treating      9 bands with npw=     989 for ikpt=   9 by node    0
P newkpt: treating      9 bands with npw=    1000 for ikpt=  10 by node    0
P newkpt: treating      9 bands with npw=    1006 for ikpt=  11 by node    0
P newkpt: treating      9 bands with npw=    1007 for ikpt=  12 by node    0
P newkpt: treating      9 bands with npw=    1009 for ikpt=  13 by node    0
P newkpt: treating      9 bands with npw=    1001 for ikpt=  14 by node    0
P newkpt: treating      9 bands with npw=     995 for ikpt=  15 by node    0
P newkpt: treating      9 bands with npw=    1008 for ikpt=  16 by node    0
P newkpt: treating      9 bands with npw=    1016 for ikpt=  17 by node    0
P newkpt: treating      9 bands with npw=    1008 for ikpt=  18 by node    0
P newkpt: treating      9 bands with npw=    1004 for ikpt=  19 by node    0
P newkpt: treating      9 bands with npw=    1009 for ikpt=  20 by node    0
P newkpt: treating      9 bands with npw=     999 for ikpt=  21 by node    0
P newkpt: treating      9 bands with npw=    1005 for ikpt=  22 by node    0
P newkpt: treating      9 bands with npw=    1002 for ikpt=  23 by node    0
P newkpt: treating      9 bands with npw=    1008 for ikpt=  24 by node    0
P newkpt: treating      9 bands with npw=    1003 for ikpt=  25 by node    0
P newkpt: treating      9 bands with npw=    1011 for ikpt=  26 by node    0
P newkpt: treating      9 bands with npw=    1003 for ikpt=  27 by node    0
P newkpt: treating      9 bands with npw=    1006 for ikpt=  28 by node    0
P newkpt: treating      9 bands with npw=    1010 for ikpt=  29 by node    0
P newkpt: treating      9 bands with npw=    1017 for ikpt=  30 by node    0
P newkpt: treating      9 bands with npw=    1006 for ikpt=  31 by node    1
P newkpt: treating      9 bands with npw=     991 for ikpt=  32 by node    1
P newkpt: treating      9 bands with npw=     989 for ikpt=  33 by node    1
P newkpt: treating      9 bands with npw=     993 for ikpt=  34 by node    1
P newkpt: treating      9 bands with npw=    1000 for ikpt=  35 by node    1
P newkpt: treating      9 bands with npw=    1003 for ikpt=  36 by node    1
P newkpt: treating      9 bands with npw=    1005 for ikpt=  37 by node    1
P newkpt: treating      9 bands with npw=    1007 for ikpt=  38 by node    1
P newkpt: treating      9 bands with npw=    1000 for ikpt=  39 by node    1
P newkpt: treating      9 bands with npw=    1006 for ikpt=  40 by node    1
P newkpt: treating      9 bands with npw=    1012 for ikpt=  41 by node    1
P newkpt: treating      9 bands with npw=    1011 for ikpt=  42 by node    1
P newkpt: treating      9 bands with npw=    1012 for ikpt=  43 by node    1
P newkpt: treating      9 bands with npw=    1010 for ikpt=  44 by node    1
P newkpt: treating      9 bands with npw=    1010 for ikpt=  45 by node    1
P newkpt: treating      9 bands with npw=    1013 for ikpt=  46 by node    1
P newkpt: treating      9 bands with npw=    1010 for ikpt=  47 by node    1
P newkpt: treating      9 bands with npw=    1007 for ikpt=  48 by node    1
P newkpt: treating      9 bands with npw=    1007 for ikpt=  49 by node    1
P newkpt: treating      9 bands with npw=    1008 for ikpt=  50 by node    1
 newkpt: prtvol=0 or 1, do not print more k-points.
P newkpt: treating      9 bands with npw=     971 for ikpt=   1 by node    3
P newkpt: treating      9 bands with npw=     988 for ikpt=   2 by node    3
P newkpt: treating      9 bands with npw=     997 for ikpt=   3 by node    3
P newkpt: treating      9 bands with npw=    1009 for ikpt=   4 by node    3
P newkpt: treating      9 bands with npw=    1001 for ikpt=   5 by node    3
P newkpt: treating      9 bands with npw=    1005 for ikpt=   6 by node    3
P newkpt: treating      9 bands with npw=     993 for ikpt=   7 by node    3
P newkpt: treating      9 bands with npw=     984 for ikpt=   8 by node    3
P newkpt: treating      9 bands with npw=     989 for ikpt=   9 by node    3
P newkpt: treating      9 bands with npw=    1000 for ikpt=  10 by node    3
P newkpt: treating      9 bands with npw=    1006 for ikpt=  11 by node    3
P newkpt: treating      9 bands with npw=    1007 for ikpt=  12 by node    3
P newkpt: treating      9 bands with npw=    1009 for ikpt=  13 by node    3
P newkpt: treating      9 bands with npw=    1001 for ikpt=  14 by node    3
P newkpt: treating      9 bands with npw=     995 for ikpt=  15 by node    3
P newkpt: treating      9 bands with npw=    1008 for ikpt=  16 by node    3
P newkpt: treating      9 bands with npw=    1016 for ikpt=  17 by node    3
P newkpt: treating      9 bands with npw=    1008 for ikpt=  18 by node    3
P newkpt: treating      9 bands with npw=    1004 for ikpt=  19 by node    3
P newkpt: treating      9 bands with npw=    1009 for ikpt=  20 by node    3
P newkpt: treating      9 bands with npw=     999 for ikpt=  21 by node    3
P newkpt: treating      9 bands with npw=    1005 for ikpt=  22 by node    3
P newkpt: treating      9 bands with npw=    1002 for ikpt=  23 by node    3
P newkpt: treating      9 bands with npw=    1008 for ikpt=  24 by node    3
P newkpt: treating      9 bands with npw=    1003 for ikpt=  25 by node    3
P newkpt: treating      9 bands with npw=    1011 for ikpt=  26 by node    3
P newkpt: treating      9 bands with npw=    1003 for ikpt=  27 by node    3
P newkpt: treating      9 bands with npw=    1006 for ikpt=  28 by node    3
P newkpt: treating      9 bands with npw=    1010 for ikpt=  29 by node    3
P newkpt: treating      9 bands with npw=    1017 for ikpt=  30 by node    3
P newkpt: treating      9 bands with npw=    1006 for ikpt=  31 by node    2
P newkpt: treating      9 bands with npw=     991 for ikpt=  32 by node    2
P newkpt: treating      9 bands with npw=     989 for ikpt=  33 by node    2
P newkpt: treating      9 bands with npw=     993 for ikpt=  34 by node    2
P newkpt: treating      9 bands with npw=    1000 for ikpt=  35 by node    2
P newkpt: treating      9 bands with npw=    1003 for ikpt=  36 by node    2
P newkpt: treating      9 bands with npw=    1005 for ikpt=  37 by node    2
P newkpt: treating      9 bands with npw=    1007 for ikpt=  38 by node    2
P newkpt: treating      9 bands with npw=    1000 for ikpt=  39 by node    2
P newkpt: treating      9 bands with npw=    1006 for ikpt=  40 by node    2
P newkpt: treating      9 bands with npw=    1012 for ikpt=  41 by node    2
P newkpt: treating      9 bands with npw=    1011 for ikpt=  42 by node    2
P newkpt: treating      9 bands with npw=    1012 for ikpt=  43 by node    2
P newkpt: treating      9 bands with npw=    1010 for ikpt=  44 by node    2
P newkpt: treating      9 bands with npw=    1010 for ikpt=  45 by node    2
P newkpt: treating      9 bands with npw=    1013 for ikpt=  46 by node    2
P newkpt: treating      9 bands with npw=    1010 for ikpt=  47 by node    2
P newkpt: treating      9 bands with npw=    1007 for ikpt=  48 by node    2
P newkpt: treating      9 bands with npw=    1007 for ikpt=  49 by node    2
P newkpt: treating      9 bands with npw=    1008 for ikpt=  50 by node    2
 newkpt: prtvol=0 or 1, do not print more k-points.
 
_setup2: Arith. and geom. avg. npw (full set) are    1005.027    1005.005


 ******************************************
 LDA+U Method used: FLL
 ******************************************

================================================================================

     iter   Etot(hartree)     deltaE(h) residm    nres2    magn
 ETOT  1  -44.094296901619    -4.41E+01 1.60E+01 3.66E+02 0.959
 ETOT  2  -46.533528175907    -2.44E+00 2.24E+00 6.25E+02 2.101
 ETOT  3  -46.357477255477     1.76E-01 8.74E-01 1.77E+02 1.840
 ETOT  4  -46.323334363271     3.41E-02 3.07E-01 7.20E+01 1.938
 ETOT  5  -46.316470398731     6.86E-03 2.19E-01 1.92E+01 1.713
 ETOT  6  -46.345975944228    -2.95E-02 1.63E-01 6.65E+01 1.790
 ETOT  7  -46.355875681587    -9.90E-03 3.11E-02 4.12E+01 1.807
 ETOT  8  -46.359515496334    -3.64E-03 1.83E-02 3.53E+01 1.840
 ETOT  9  -46.390163913649    -3.06E-02 1.15E-02 3.71E+01 1.899
 ETOT 10  -46.400375210718    -1.02E-02 8.06E-03 2.98E+01 1.926
 ETOT 11  -46.173672220245     2.27E-01 3.24E-02 2.53E+01 2.156
 ETOT 12  -46.174490035885    -8.18E-04 2.73E-02 2.40E+01 2.154
 ETOT 13  -46.175107052819    -6.17E-04 1.73E-02 2.49E+01 2.158
 ETOT 14  -46.175195656517    -8.86E-05 3.25E-02 2.49E+01 2.157
 ETOT 15  -46.160438385571     1.48E-02 4.03E-02 1.10E+01 1.993
 ETOT 16  -46.152746160148     7.69E-03 1.50E-01 2.63E+01 1.896
 ETOT 17  -46.154591033176    -1.84E-03 1.32E-02 9.96E+00 1.892
 ETOT 18  -46.156067370394    -1.48E-03 3.08E-03 7.64E+00 1.876
 ETOT 19  -46.161124827828    -5.06E-03 8.88E-02 3.47E+00 2.071
 ETOT 20  -46.161347757383    -2.23E-04 2.96E-03 3.21E+00 2.142
 ETOT 21  -46.161411419719    -6.37E-05 8.71E-04 1.74E+00 2.178
 ETOT 22  -46.162173529463    -7.62E-04 7.48E-03 8.19E-01 2.371
 ETOT 23  -46.161724942679     4.49E-04 2.24E-02 6.74E-01 2.549
 ETOT 24  -46.162286251515    -5.61E-04 7.61E-03 4.97E-02 2.374
 ETOT 25  -46.162435850896    -1.50E-04 1.11E-03 1.80E-02 2.402
 ETOT 26  -46.162515830378    -8.00E-05 2.16E-04 1.13E-02 2.413
 ETOT 27  -46.162526856842    -1.10E-05 3.84E-04 4.69E-03 2.424
 ETOT 28  -46.162529936964    -3.08E-06 2.06E-04 1.09E-03 2.429
 ETOT 29  -46.162531172215    -1.24E-06 2.40E-04 3.91E-04 2.428
 ETOT 30  -46.162531447664    -2.75E-07 1.58E-04 9.39E-05 2.430
 ETOT 31  -46.162531543122    -9.55E-08 1.81E-04 1.55E-05 2.430
 ETOT 32  -46.162531560656    -1.75E-08 1.13E-04 2.73E-06 2.430
 ETOT 33  -46.162531551828     8.83E-09 1.38E-04 1.72E-06 2.430
 ETOT 34  -46.162531556631    -4.80E-09 8.10E-05 3.42E-07 2.430

 At SCF step   34       nres2   =  3.42E-07 < tolvrs=  1.00E-06 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.35358604E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -4.35358604E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -4.35358604E-04  sigma(2 1)=  0.00000000E+00
 
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  4.0000000  4.0000000  0.0000000  G(1)=  0.1250000  0.1250000 -0.1250000
 R(2)=  0.0000000  4.0000000  4.0000000  G(2)= -0.1250000  0.1250000  0.1250000
 R(3)=  4.0000000  0.0000000  4.0000000  G(3)=  0.1250000 -0.1250000  0.1250000
 Unit cell volume ucvol=  1.2800000E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =      5.960365997584923
 Compensation charge over fine fft grid    =      5.960392906655408

 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1 - Spin component 1
   0.30693  -1.12108   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -1.12108   5.26012   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.03463   0.00000   0.00000  -0.55666   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.03463   0.00000   0.00000  -0.55666   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.03463   0.00000   0.00000  -0.55666   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.55666   0.00000   0.00000  11.08806   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.55666   0.00000   0.00000  11.08806   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.55666   0.00000   0.00000  11.08806   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.16929   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.16929   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.19372   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.16929 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
   0.29525  -1.07774   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -1.07774   5.10952   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.03408   0.00000   0.00000  -0.53899   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.03408   0.00000   0.00000  -0.53899   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.03408   0.00000   0.00000  -0.53899   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.53899   0.00000   0.00000  10.67950   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.53899   0.00000   0.00000  10.67950   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.53899   0.00000   0.00000  10.67950   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.06016   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.06016   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.13862   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.06016 ...
   ...  only 12  components have been written...
 Atom #  2 - Spin component 1
   1.06502   1.69745   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   1.69745   2.70479   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.28739   0.00000   0.00000  -0.28446   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.28739   0.00000   0.00000  -0.28446   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.28739   0.00000   0.00000  -0.28446
   0.00000   0.00000  -0.28446   0.00000   0.00000  -0.22746   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.28446   0.00000   0.00000  -0.22746   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.28446   0.00000   0.00000  -0.22746
 Atom #  2 - Spin component 2
   1.06450   1.69658   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   1.69658   2.70333   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.28616   0.00000   0.00000  -0.28282   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.28616   0.00000   0.00000  -0.28282   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.28616   0.00000   0.00000  -0.28282
   0.00000   0.00000  -0.28282   0.00000   0.00000  -0.22525   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.28282   0.00000   0.00000  -0.22525   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.28282   0.00000   0.00000  -0.22525
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1 - Spin component 1
   0.49309   0.00682   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00682   0.00017   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.75738   0.00000   0.00000   0.00410   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.75738   0.00000   0.00000   0.00410   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.75738   0.00000   0.00000   0.00410   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00410   0.00000   0.00000   0.00003   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00410   0.00000   0.00000   0.00003   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00410   0.00000   0.00000   0.00003   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.03172   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.03172   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.02845   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.03172 ...
   ...  only 12  components have been written...
 Atom #  1 - Spin component 2
   0.44111   0.00879   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00879   0.00024   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.70844   0.00000   0.00000   0.00486   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.70844   0.00000   0.00000   0.00486   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.70844   0.00000   0.00000   0.00486   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00486   0.00000   0.00000   0.00004   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00486   0.00000   0.00000   0.00004   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00486   0.00000   0.00000   0.00004   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.80719   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.80719   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.06912   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.80719 ...
   ...  only 12  components have been written...
 Atom #  2 - Spin component 1
   1.10089  -0.06716   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -0.06716   0.01475   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.42926   0.00000   0.00000   0.01694   0.00000   0.00000
   0.00000   0.00000   0.00000   0.42926   0.00000   0.00000   0.01694   0.00000
   0.00000   0.00000   0.00000   0.00000   0.42926   0.00000   0.00000   0.01694
   0.00000   0.00000   0.01694   0.00000   0.00000   0.01054   0.00000   0.00000
   0.00000   0.00000   0.00000   0.01694   0.00000   0.00000   0.01054   0.00000
   0.00000   0.00000   0.00000   0.00000   0.01694   0.00000   0.00000   0.01054
 Atom #  2 - Spin component 2
   1.10912  -0.07410   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -0.07410   0.00885   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   0.44227   0.00000   0.00000   0.01289   0.00000   0.00000
   0.00000   0.00000   0.00000   0.44227   0.00000   0.00000   0.01289   0.00000
   0.00000   0.00000   0.00000   0.00000   0.44227   0.00000   0.00000   0.01289
   0.00000   0.00000   0.01289   0.00000   0.00000   0.00502   0.00000   0.00000
   0.00000   0.00000   0.00000   0.01289   0.00000   0.00000   0.00502   0.00000
   0.00000   0.00000   0.00000   0.00000   0.01289   0.00000   0.00000   0.00502
 
 "PAW+U" part of augmentation waves occupancies Rhoij:
 Atom #  1 - L=2 ONLY - Spin component 1
   1.03172   0.00000   0.00000   0.00000   0.00000  -0.02537   0.00000   0.00000   0.00000   0.00000
   0.00000   1.03172   0.00000   0.00000   0.00000   0.00000  -0.02537   0.00000   0.00000   0.00000
   0.00000   0.00000   1.02845   0.00000   0.00000   0.00000   0.00000  -0.04367   0.00000   0.00000
   0.00000   0.00000   0.00000   1.03172   0.00000   0.00000   0.00000   0.00000  -0.02537   0.00000
   0.00000   0.00000   0.00000   0.00000   1.02845   0.00000   0.00000   0.00000   0.00000  -0.04367
  -0.02537   0.00000   0.00000   0.00000   0.00000   0.00435   0.00000   0.00000   0.00000   0.00000
   0.00000  -0.02537   0.00000   0.00000   0.00000   0.00000   0.00435   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.04367   0.00000   0.00000   0.00000   0.00000   0.01722   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.02537   0.00000   0.00000   0.00000   0.00000   0.00435   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.04367   0.00000   0.00000   0.00000   0.00000   0.01722
 Atom #  1 - L=2 ONLY - Spin component 2
   0.80719   0.00000   0.00000   0.00000   0.00000   0.00360   0.00000   0.00000   0.00000   0.00000
   0.00000   0.80719   0.00000   0.00000   0.00000   0.00000   0.00360   0.00000   0.00000   0.00000
   0.00000   0.00000   0.06912   0.00000   0.00000   0.00000   0.00000   0.02122   0.00000   0.00000
   0.00000   0.00000   0.00000   0.80719   0.00000   0.00000   0.00000   0.00000   0.00360   0.00000
   0.00000   0.00000   0.00000   0.00000   0.06912   0.00000   0.00000   0.00000   0.00000   0.02122
   0.00360   0.00000   0.00000   0.00000   0.00000   0.00327   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00360   0.00000   0.00000   0.00000   0.00000   0.00327   0.00000   0.00000   0.00000
   0.00000   0.00000   0.02122   0.00000   0.00000   0.00000   0.00000   0.00809   0.00000   0.00000
   0.00000   0.00000   0.00000   0.00360   0.00000   0.00000   0.00000   0.00000   0.00327   0.00000
   0.00000   0.00000   0.00000   0.00000   0.02122   0.00000   0.00000   0.00000   0.00000   0.00809
 
 ---------- LDA+U DATA ---------------------------------------------------

 ====== For Atom     1, occupations for correlated orbitals. lpawu =   2

 Atom   1. Occ. for lpawu and for spin  1 =   4.78388
 Atom   1. Occ. for lpawu and for spin  2 =   2.36319
 => On atom   1,  local Mag. for lpawu is       -2.420697

 == Occupation matrix for correlated orbitals:

 Occupation matrix for spin  1
     0.95261    0.00000    0.00000    0.00000    0.00000
     0.00000    0.95261    0.00000    0.00000    0.00000
     0.00000    0.00000    0.96303    0.00000    0.00000
     0.00000    0.00000    0.00000    0.95261    0.00000
     0.00000    0.00000    0.00000    0.00000    0.96303


 Occupation matrix for spin  2
     0.74242    0.00000    0.00000    0.00000    0.00000
     0.00000    0.74242    0.00000    0.00000    0.00000
     0.00000    0.00000    0.06796    0.00000    0.00000
     0.00000    0.00000    0.00000    0.74242    0.00000
     0.00000    0.00000    0.00000    0.00000    0.06796


 
================================================================================

 ----iterations are completed or convergence reached----

 Mean square residual over all n,k,spin=   2.2029E-07; max=  8.0983E-05
   0.0625  0.0625  0.0625    1  4.66668E-10 kpt; spin; max resid(k); each band:
  4.17E-12 7.93E-13 7.90E-13 1.30E-12 1.41E-13 1.41E-13 2.41E-11 1.02E-11
  4.67E-10
   0.1875  0.0625  0.0625    1  4.54540E-09 kpt; spin; max resid(k); each band:
  1.10E-11 4.91E-12 1.71E-11 1.19E-11 1.24E-11 1.07E-13 1.39E-11 6.87E-10
  4.55E-09
   0.3125  0.0625  0.0625    1  1.31929E-09 kpt; spin; max resid(k); each band:
  5.45E-12 4.76E-10 6.48E-12 3.61E-11 2.76E-13 1.06E-12 2.68E-10 7.44E-10
  1.32E-09
   0.4375  0.0625  0.0625    1  6.48575E-10 kpt; spin; max resid(k); each band:
  9.03E-12 1.36E-10 2.91E-11 7.30E-11 1.90E-13 4.15E-13 4.28E-11 3.80E-10
  6.49E-10
  -0.4375  0.0625  0.0625    1  3.10672E-10 kpt; spin; max resid(k); each band:
  1.59E-12 1.83E-11 2.63E-11 1.59E-11 3.34E-13 1.60E-13 1.70E-11 3.11E-10
  6.92E-11
  -0.3125  0.0625  0.0625    1  2.02668E-10 kpt; spin; max resid(k); each band:
  4.40E-12 2.03E-10 5.71E-11 1.36E-11 5.59E-13 2.30E-13 4.35E-11 1.50E-10
  1.20E-10
  -0.1875  0.0625  0.0625    1  1.11739E-09 kpt; spin; max resid(k); each band:
  6.69E-12 6.59E-11 6.09E-12 2.87E-10 3.48E-12 3.60E-13 7.06E-11 1.48E-10
  1.12E-09
  -0.0625  0.0625  0.0625    1  2.35712E-09 kpt; spin; max resid(k); each band:
  1.09E-11 5.59E-11 7.57E-13 9.77E-12 5.60E-13 3.87E-12 4.03E-10 2.36E-09
  1.88E-11
   0.1875  0.1875  0.0625    1  6.82144E-10 kpt; spin; max resid(k); each band:
  1.00E-11 4.22E-11 1.97E-12 1.21E-11 1.28E-11 1.50E-12 3.40E-10 6.82E-10
  3.56E-11
   0.3125  0.1875  0.0625    1  8.61864E-10 kpt; spin; max resid(k); each band:
  4.34E-12 3.80E-10 1.22E-11 4.73E-12 2.44E-12 1.35E-12 8.08E-11 8.62E-10
  3.18E-10
   0.4375  0.1875  0.0625    1  5.75153E-10 kpt; spin; max resid(k); each band:
  5.33E-12 7.25E-11 4.45E-11 5.81E-11 4.06E-12 6.53E-13 1.89E-10 1.56E-10
  5.75E-10
  -0.4375  0.1875  0.0625    1  2.92552E-10 kpt; spin; max resid(k); each band:
  2.35E-11 7.06E-11 1.77E-11 4.19E-11 1.82E-12 5.03E-13 1.83E-11 3.06E-11
  2.93E-10
  -0.3125  0.1875  0.0625    1  1.93231E-10 kpt; spin; max resid(k); each band:
  7.28E-12 8.63E-12 9.58E-11 7.44E-11 1.15E-12 6.70E-13 2.72E-11 5.67E-11
  1.93E-10
  -0.1875  0.1875  0.0625    1  1.39367E-09 kpt; spin; max resid(k); each band:
  4.47E-12 6.61E-11 3.25E-11 5.39E-11 1.77E-12 1.09E-12 2.66E-11 2.76E-10
  1.39E-09
  -0.0625  0.1875  0.0625    1  1.17408E-09 kpt; spin; max resid(k); each band:
  6.48E-12 1.30E-10 3.78E-11 2.00E-11 7.63E-12 4.50E-12 1.04E-11 9.29E-10
  1.17E-09
   0.3125  0.3125  0.0625    1  3.34649E-10 kpt; spin; max resid(k); each band:
  2.16E-11 3.35E-10 4.22E-12 2.03E-12 1.29E-11 2.69E-12 1.02E-10 4.01E-11
  9.94E-11
   0.4375  0.3125  0.0625    1  2.24852E-10 kpt; spin; max resid(k); each band:
  5.94E-11 4.24E-11 7.04E-12 1.29E-11 1.22E-11 2.83E-12 6.00E-11 1.87E-10
  2.25E-10
  -0.4375  0.3125  0.0625    1  3.20734E-10 kpt; spin; max resid(k); each band:
  2.65E-11 4.84E-11 5.43E-11 1.74E-11 6.51E-12 1.10E-12 7.23E-12 6.69E-11
  3.21E-10
  -0.3125  0.3125  0.0625    1  1.98401E-10 kpt; spin; max resid(k); each band:
  1.14E-11 2.00E-11 4.13E-11 4.01E-12 1.52E-12 1.09E-12 3.73E-11 1.98E-10
  1.93E-10
  -0.1875  0.3125  0.0625    1  6.03401E-10 kpt; spin; max resid(k); each band:
  9.97E-12 2.56E-11 1.12E-10 1.94E-11 1.67E-12 6.03E-13 1.79E-11 1.07E-10
  6.03E-10
  -0.0625  0.3125  0.0625    1  8.29503E-10 kpt; spin; max resid(k); each band:
  4.44E-12 3.42E-11 1.65E-11 2.13E-11 1.52E-12 5.66E-13 2.04E-11 8.30E-10
  7.39E-10
   0.4375  0.4375  0.0625    1  1.06664E-10 kpt; spin; max resid(k); each band:
  9.12E-12 4.09E-11 3.34E-12 1.24E-12 2.88E-11 1.48E-12 8.19E-12 5.74E-11
  1.07E-10
  -0.4375  0.4375  0.0625    1  1.24024E-10 kpt; spin; max resid(k); each band:
  1.33E-11 2.38E-11 3.25E-11 1.69E-11 2.62E-12 9.59E-13 3.07E-12 4.49E-11
  1.24E-10
  -0.3125  0.4375  0.0625    1  1.01515E-10 kpt; spin; max resid(k); each band:
  5.97E-12 1.02E-10 5.79E-11 1.19E-11 3.22E-12 1.04E-12 1.54E-11 4.77E-11
  8.75E-11
  -0.1875  0.4375  0.0625    1  2.23457E-10 kpt; spin; max resid(k); each band:
  5.53E-12 6.55E-11 5.59E-11 3.16E-11 1.51E-12 8.76E-13 1.06E-11 1.31E-10
  2.23E-10
  -0.0625  0.4375  0.0625    1  4.14461E-10 kpt; spin; max resid(k); each band:
  5.45E-12 1.45E-11 6.52E-11 2.84E-11 1.04E-12 3.70E-13 3.24E-11 5.17E-11
  4.14E-10
  -0.4375 -0.4375  0.0625    1  2.03011E-10 kpt; spin; max resid(k); each band:
  4.18E-11 7.63E-11 2.95E-12 3.39E-12 3.58E-12 3.69E-13 1.05E-12 2.03E-10
  6.58E-11
  -0.3125 -0.4375  0.0625    1  2.44825E-10 kpt; spin; max resid(k); each band:
  1.67E-11 1.43E-11 1.96E-11 1.94E-11 4.53E-12 4.99E-12 2.59E-11 8.62E-11
  2.45E-10
  -0.1875 -0.4375  0.0625    1  2.60079E-10 kpt; spin; max resid(k); each band:
  2.12E-11 7.89E-11 2.82E-11 1.93E-10 4.88E-12 8.22E-13 1.82E-11 8.24E-11
  2.60E-10
  -0.3125 -0.3125  0.0625    1  1.22492E-10 kpt; spin; max resid(k); each band:
  3.28E-11 1.22E-10 3.72E-12 1.04E-12 4.19E-12 2.92E-12 1.75E-11 8.97E-11
  2.67E-11
  -0.1875 -0.3125  0.0625    1  4.68086E-10 kpt; spin; max resid(k); each band:
  2.21E-11 3.05E-11 2.64E-11 1.28E-11 5.50E-12 4.07E-12 1.73E-10 4.68E-10
  6.92E-12
  -0.1875 -0.1875  0.0625    1  3.56641E-10 kpt; spin; max resid(k); each band:
  8.20E-12 8.55E-11 2.14E-12 4.89E-12 7.23E-12 2.94E-12 2.03E-11 3.57E-10
  1.63E-11
   0.1875  0.1875  0.1875    1  1.98292E-09 kpt; spin; max resid(k); each band:
  7.29E-12 4.06E-12 3.98E-12 2.33E-10 5.09E-13 5.09E-13 2.65E-10 2.72E-11
  1.98E-09
   0.3125  0.1875  0.1875    1  4.25269E-09 kpt; spin; max resid(k); each band:
  9.52E-12 3.53E-11 2.67E-12 3.62E-11 2.00E-12 9.99E-14 1.90E-11 7.30E-10
  4.25E-09
   0.4375  0.1875  0.1875    1  1.00909E-09 kpt; spin; max resid(k); each band:
  3.67E-12 2.94E-11 3.25E-11 7.43E-11 2.05E-12 9.21E-14 6.03E-11 1.50E-10
  1.01E-09
  -0.4375  0.1875  0.1875    1  2.13863E-10 kpt; spin; max resid(k); each band:
  3.12E-12 1.31E-11 2.57E-11 3.69E-11 1.17E-12 1.79E-13 2.30E-11 2.14E-10
  2.92E-11
  -0.3125  0.1875  0.1875    1  1.13340E-10 kpt; spin; max resid(k); each band:
  2.75E-11 5.12E-11 1.13E-10 4.58E-11 2.47E-12 2.07E-13 1.67E-11 8.50E-11
  9.45E-11
  -0.1875  0.1875  0.1875    1  2.08518E-10 kpt; spin; max resid(k); each band:
  2.88E-11 2.06E-11 3.57E-12 7.88E-11 6.98E-12 8.69E-13 2.55E-11 2.09E-10
  8.17E-11
   0.3125  0.3125  0.1875    1  3.62377E-10 kpt; spin; max resid(k); each band:
  1.25E-11 2.73E-11 7.84E-12 1.03E-10 6.59E-12 5.27E-13 2.65E-11 3.27E-11
  3.62E-10
   0.4375  0.3125  0.1875    1  2.85188E-10 kpt; spin; max resid(k); each band:
  1.26E-11 2.72E-11 3.39E-11 3.73E-11 2.36E-12 1.52E-12 4.41E-11 2.85E-10
  9.50E-11
  -0.4375  0.3125  0.1875    1  2.44406E-10 kpt; spin; max resid(k); each band:
  1.60E-11 5.81E-11 2.57E-11 3.37E-11 1.99E-12 1.41E-12 2.96E-11 1.15E-10
  2.44E-10
  -0.3125  0.3125  0.1875    1  2.22336E-10 kpt; spin; max resid(k); each band:
  1.70E-11 1.25E-11 1.30E-11 7.18E-11 1.97E-12 2.06E-12 1.29E-11 4.33E-11
  2.22E-10
  -0.1875  0.3125  0.1875    1  2.15031E-10 kpt; spin; max resid(k); each band:
  1.94E-11 6.06E-11 3.15E-11 6.73E-11 3.38E-12 2.09E-12 1.79E-11 3.30E-11
  2.15E-10
   0.4375  0.4375  0.1875    1  1.44659E-10 kpt; spin; max resid(k); each band:
  2.99E-11 6.64E-11 5.81E-11 1.27E-11 1.01E-11 4.93E-13 1.45E-10 1.80E-11
  4.38E-11
  -0.4375  0.4375  0.1875    1  1.30662E-10 kpt; spin; max resid(k); each band:
  1.42E-11 2.63E-11 5.60E-12 5.84E-11 3.97E-12 2.51E-12 4.66E-11 1.87E-11
  1.31E-10
  -0.3125  0.4375  0.1875    1  6.14832E-11 kpt; spin; max resid(k); each band:
  1.99E-11 5.29E-12 6.15E-11 8.22E-12 1.68E-12 1.26E-12 3.92E-11 1.34E-11
  3.20E-11
  -0.1875  0.4375  0.1875    1  8.57821E-11 kpt; spin; max resid(k); each band:
  1.35E-11 2.25E-11 2.91E-11 1.72E-11 1.37E-12 1.78E-12 2.77E-11 4.67E-11
  8.58E-11
  -0.4375 -0.4375  0.1875    1  1.67000E-10 kpt; spin; max resid(k); each band:
  9.55E-12 4.01E-11 8.39E-11 2.42E-11 5.52E-12 1.51E-13 4.01E-11 1.67E-10
  3.46E-11
  -0.3125 -0.4375  0.1875    1  1.47687E-10 kpt; spin; max resid(k); each band:
  2.42E-11 3.17E-11 1.71E-11 4.48E-11 1.89E-12 1.24E-12 2.21E-11 7.45E-11
  1.48E-10
  -0.3125 -0.3125  0.1875    1  7.57820E-11 kpt; spin; max resid(k); each band:
  2.10E-11 1.68E-11 2.07E-11 7.46E-12 5.79E-12 4.94E-13 2.36E-11 7.58E-11
  2.96E-12
 outwf : prtvol=0 or 1, do not print more k-points.

   0.0625  0.0625  0.0625    2  9.22102E-10 kpt; spin; max resid(k); each band:
  1.48E-11 8.83E-10 6.99E-11 9.22E-10 5.18E-12 1.91E-11 1.47E-11 2.04E-11
  1.09E-12
   0.1875  0.0625  0.0625    2  9.23581E-06 kpt; spin; max resid(k); each band:
  1.41E-11 7.76E-11 1.79E-09 7.42E-11 3.27E-12 7.17E-12 1.95E-10 1.97E-09
  9.24E-06
   0.3125  0.0625  0.0625    2  8.09832E-05 kpt; spin; max resid(k); each band:
  2.84E-11 2.66E-10 3.57E-10 1.18E-09 5.49E-11 2.46E-11 1.55E-11 2.39E-07
  8.10E-05
   0.4375  0.0625  0.0625    2  3.99217E-08 kpt; spin; max resid(k); each band:
  6.31E-11 3.35E-10 6.14E-10 2.53E-09 1.19E-10 5.13E-11 3.00E-11 3.99E-08
  7.07E-11
  -0.4375  0.0625  0.0625    2  1.72198E-05 kpt; spin; max resid(k); each band:
  6.47E-11 1.90E-10 3.19E-10 3.92E-10 1.22E-10 9.06E-12 6.59E-12 1.65E-09
  1.72E-05
  -0.3125  0.0625  0.0625    2  6.03679E-08 kpt; spin; max resid(k); each band:
  8.97E-11 3.80E-10 1.59E-10 1.97E-10 3.21E-11 2.16E-11 2.32E-11 1.57E-09
  6.04E-08
  -0.1875  0.0625  0.0625    2  9.35949E-08 kpt; spin; max resid(k); each band:
  6.20E-11 2.73E-10 1.90E-10 3.76E-10 5.58E-11 1.49E-11 1.20E-10 8.51E-11
  9.36E-08
  -0.0625  0.0625  0.0625    2  1.03423E-07 kpt; spin; max resid(k); each band:
  1.79E-10 5.83E-10 9.38E-10 4.09E-10 6.64E-12 1.47E-11 5.66E-11 7.87E-11
  1.03E-07
   0.1875  0.1875  0.0625    2  9.23516E-08 kpt; spin; max resid(k); each band:
  4.44E-11 8.37E-11 8.55E-10 5.24E-10 5.03E-12 1.22E-10 2.28E-11 1.94E-10
  9.24E-08
   0.3125  0.1875  0.0625    2  1.99998E-08 kpt; spin; max resid(k); each band:
  6.39E-11 3.69E-11 1.44E-09 2.36E-10 6.88E-12 3.22E-11 4.66E-11 5.46E-11
  2.00E-08
   0.4375  0.1875  0.0625    2  1.64030E-09 kpt; spin; max resid(k); each band:
  5.89E-11 3.84E-10 4.55E-10 1.63E-10 1.33E-11 6.16E-11 5.82E-11 1.45E-10
  1.64E-09
  -0.4375  0.1875  0.0625    2  2.32646E-08 kpt; spin; max resid(k); each band:
  1.13E-10 8.71E-11 3.21E-10 1.40E-09 5.28E-11 7.39E-12 7.52E-12 1.87E-10
  2.33E-08
  -0.3125  0.1875  0.0625    2  9.61054E-08 kpt; spin; max resid(k); each band:
  8.32E-11 7.39E-11 1.96E-09 1.33E-10 9.93E-12 1.78E-11 2.37E-11 1.54E-11
  9.61E-08
  -0.1875  0.1875  0.0625    2  7.43445E-07 kpt; spin; max resid(k); each band:
  2.89E-10 7.95E-10 1.90E-09 8.76E-11 2.89E-12 6.40E-11 4.19E-10 5.99E-10
  7.43E-07
  -0.0625  0.1875  0.0625    2  3.64577E-07 kpt; spin; max resid(k); each band:
  3.23E-10 1.56E-09 2.00E-09 5.19E-10 4.07E-12 1.30E-11 1.51E-10 1.09E-10
  3.65E-07
   0.3125  0.3125  0.0625    2  1.83679E-09 kpt; spin; max resid(k); each band:
  1.11E-10 8.47E-11 1.84E-09 1.17E-09 1.48E-11 6.40E-11 5.28E-11 9.96E-11
  1.31E-12
   0.4375  0.3125  0.0625    2  6.55334E-10 kpt; spin; max resid(k); each band:
  6.90E-11 7.30E-11 4.90E-10 8.90E-11 1.85E-11 3.16E-11 3.03E-11 4.35E-11
  6.55E-10
  -0.4375  0.3125  0.0625    2  1.74583E-09 kpt; spin; max resid(k); each band:
  5.36E-11 2.83E-10 1.92E-10 1.75E-09 1.57E-11 5.83E-12 4.35E-12 1.30E-11
  6.42E-12
  -0.3125  0.3125  0.0625    2  8.35891E-10 kpt; spin; max resid(k); each band:
  5.89E-11 8.36E-10 6.22E-10 1.79E-10 1.24E-12 6.53E-12 7.73E-12 1.62E-11
  3.58E-11
  -0.1875  0.3125  0.0625    2  2.54003E-08 kpt; spin; max resid(k); each band:
  6.08E-11 3.71E-10 2.94E-10 8.12E-11 3.17E-12 5.52E-12 4.78E-11 1.47E-10
  2.54E-08
  -0.0625  0.3125  0.0625    2  1.86156E-06 kpt; spin; max resid(k); each band:
  8.00E-11 1.39E-09 2.10E-09 3.46E-10 7.54E-12 1.49E-11 2.70E-11 6.16E-09
  1.86E-06
   0.4375  0.4375  0.0625    2  6.34781E-10 kpt; spin; max resid(k); each band:
  6.35E-10 1.17E-11 3.77E-10 1.65E-10 2.12E-11 5.56E-12 1.13E-11 1.69E-12
  1.27E-11
  -0.4375  0.4375  0.0625    2  7.41974E-10 kpt; spin; max resid(k); each band:
  1.67E-10 1.85E-11 7.42E-10 3.03E-10 3.57E-11 9.65E-13 1.23E-12 4.01E-12
  6.31E-11
  -0.3125  0.4375  0.0625    2  1.50727E-10 kpt; spin; max resid(k); each band:
  7.87E-11 1.51E-10 1.36E-10 8.89E-11 1.02E-11 9.86E-13 3.12E-12 6.51E-12
  3.96E-11
  -0.1875  0.4375  0.0625    2  1.78549E-09 kpt; spin; max resid(k); each band:
  1.60E-10 7.84E-10 5.26E-10 1.79E-09 1.69E-11 1.13E-11 7.74E-12 2.21E-11
  4.04E-10
  -0.0625  0.4375  0.0625    2  3.73892E-06 kpt; spin; max resid(k); each band:
  5.20E-11 1.14E-10 4.15E-10 2.13E-10 2.14E-11 4.07E-11 6.11E-11 2.72E-11
  3.74E-06
  -0.4375 -0.4375  0.0625    2  4.34244E-10 kpt; spin; max resid(k); each band:
  1.99E-10 8.76E-12 4.34E-10 6.85E-11 2.32E-11 1.93E-12 1.63E-12 1.34E-12
  1.77E-11
  -0.3125 -0.4375  0.0625    2  1.66613E-09 kpt; spin; max resid(k); each band:
  2.01E-10 4.82E-11 2.01E-10 1.67E-09 2.30E-11 7.22E-12 1.38E-11 4.62E-12
  1.27E-11
  -0.1875 -0.4375  0.0625    2  5.26418E-10 kpt; spin; max resid(k); each band:
  9.96E-11 5.26E-10 2.15E-10 9.52E-11 1.91E-11 9.08E-12 1.31E-11 1.99E-10
  1.62E-11
  -0.3125 -0.3125  0.0625    2  8.97845E-10 kpt; spin; max resid(k); each band:
  2.68E-10 2.72E-11 2.93E-10 8.98E-10 8.98E-12 1.23E-11 2.29E-11 1.11E-10
  1.95E-12
  -0.1875 -0.3125  0.0625    2  1.93996E-09 kpt; spin; max resid(k); each band:
  1.69E-10 9.17E-11 1.94E-09 2.98E-10 1.35E-11 4.04E-11 6.81E-11 3.60E-10
  9.99E-10
  -0.1875 -0.1875  0.0625    2  1.39724E-09 kpt; spin; max resid(k); each band:
  6.66E-10 3.32E-11 1.40E-09 1.05E-09 5.80E-12 2.98E-11 4.45E-11 9.20E-11
  2.69E-12
   0.1875  0.1875  0.1875    2  1.45132E-09 kpt; spin; max resid(k); each band:
  1.40E-11 1.07E-09 2.40E-10 1.45E-09 9.20E-12 2.06E-10 1.42E-11 7.90E-11
  9.29E-12
   0.3125  0.1875  0.1875    2  6.87905E-05 kpt; spin; max resid(k); each band:
  6.42E-11 1.88E-09 6.86E-10 7.52E-11 2.54E-12 4.85E-11 3.09E-10 2.55E-09
  6.88E-05
   0.4375  0.1875  0.1875    2  2.74414E-05 kpt; spin; max resid(k); each band:
  6.83E-11 1.87E-10 6.51E-10 4.23E-10 6.38E-13 2.61E-11 1.08E-10 1.09E-10
  2.74E-05
  -0.4375  0.1875  0.1875    2  8.09454E-09 kpt; spin; max resid(k); each band:
  6.50E-11 7.43E-10 1.36E-10 5.47E-10 2.60E-12 7.49E-11 1.51E-11 4.53E-10
  8.09E-09
  -0.3125  0.1875  0.1875    2  1.80067E-09 kpt; spin; max resid(k); each band:
  4.95E-11 4.57E-10 4.45E-11 1.80E-09 1.70E-11 1.13E-11 1.46E-11 2.94E-10
  9.03E-11
  -0.1875  0.1875  0.1875    2  5.51651E-10 kpt; spin; max resid(k); each band:
  1.11E-10 1.06E-10 7.30E-11 5.52E-10 1.78E-11 1.84E-11 6.06E-11 2.01E-10
  1.19E-11
   0.3125  0.3125  0.1875    2  1.78094E-09 kpt; spin; max resid(k); each band:
  6.96E-11 1.78E-09 1.70E-10 1.32E-09 1.36E-11 1.83E-11 2.10E-11 1.12E-10
  4.22E-10
   0.4375  0.3125  0.1875    2  3.05105E-09 kpt; spin; max resid(k); each band:
  1.07E-10 8.16E-10 1.16E-09 5.52E-11 5.47E-12 8.22E-12 1.02E-10 1.47E-10
  3.05E-09
  -0.4375  0.3125  0.1875    2  1.29414E-09 kpt; spin; max resid(k); each band:
  8.65E-11 7.42E-10 1.14E-09 1.85E-10 6.62E-12 1.27E-11 1.18E-11 1.09E-10
  1.29E-09
  -0.3125  0.3125  0.1875    2  8.44053E-10 kpt; spin; max resid(k); each band:
  4.94E-11 4.81E-10 1.85E-10 8.44E-10 6.44E-12 1.19E-11 2.14E-11 8.81E-12
  9.14E-11
  -0.1875  0.3125  0.1875    2  1.00193E-09 kpt; spin; max resid(k); each band:
  1.73E-10 6.40E-10 1.00E-09 7.12E-11 3.09E-11 1.01E-11 1.50E-11 4.38E-11
  1.66E-10
   0.4375  0.4375  0.1875    2  4.84441E-10 kpt; spin; max resid(k); each band:
  1.89E-10 9.96E-11 4.84E-10 4.80E-10 1.64E-11 1.54E-11 3.20E-11 2.36E-10
  4.79E-12
  -0.4375  0.4375  0.1875    2  8.87030E-10 kpt; spin; max resid(k); each band:
  2.15E-10 8.87E-10 2.14E-10 1.56E-10 1.28E-11 4.02E-12 1.05E-11 2.42E-11
  9.90E-12
  -0.3125  0.4375  0.1875    2  2.75897E-10 kpt; spin; max resid(k); each band:
  5.79E-11 6.31E-11 1.33E-10 2.76E-10 4.62E-11 1.06E-11 1.14E-12 4.59E-12
  1.37E-11
  -0.1875  0.4375  0.1875    2  1.48048E-09 kpt; spin; max resid(k); each band:
  1.09E-10 1.48E-09 6.64E-10 2.91E-10 1.67E-11 5.47E-12 2.09E-11 1.10E-11
  7.21E-11
  -0.4375 -0.4375  0.1875    2  4.23566E-10 kpt; spin; max resid(k); each band:
  1.53E-10 2.71E-10 4.24E-10 2.95E-10 1.33E-11 2.70E-12 5.06E-12 9.75E-12
  4.63E-12
  -0.3125 -0.4375  0.1875    2  3.04408E-10 kpt; spin; max resid(k); each band:
  6.52E-11 1.01E-10 6.25E-11 3.04E-10 1.88E-11 6.33E-12 1.85E-12 8.22E-12
  3.44E-11
  -0.3125 -0.3125  0.1875    2  3.26278E-10 kpt; spin; max resid(k); each band:
  2.32E-10 1.97E-10 1.25E-10 3.26E-10 2.17E-11 5.89E-12 6.42E-12 1.22E-11
  4.30E-12
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
 Fermi (or HOMO) energy (hartree) =   0.32426   Average Vxc (hartree)=  -0.45279
 Magnetisation (Bohr magneton)=  2.43001176E+00
 Total spin up =  8.71500588E+00   Total spin down =  6.28499412E+00
 Eigenvalues (hartree) for nkpt=  60  k points, SPIN UP:
 kpt#   1, nband=  9, wtk=  0.00391, kpt=  0.0625  0.0625  0.0625 (reduced coord)
  -0.41681   0.09668   0.09668   0.11513   0.11774   0.11774   0.20826   0.22029
   0.22029
      occupation numbers for kpt#   1
   1.00000   0.99663   0.99663   0.99467   0.99431   0.99431   0.94784   0.93080
   0.93080
 kpt#   2, nband=  9, wtk=  0.01172, kpt=  0.1875  0.0625  0.0625 (reduced coord)
  -0.40904   0.07768   0.08426   0.10496   0.11985   0.12092   0.19042   0.22384
   0.24491
      occupation numbers for kpt#   2
   1.00000   0.99790   0.99753   0.99586   0.99400   0.99384   0.96597   0.92487
   0.87907
 kpt#   3, nband=  9, wtk=  0.01172, kpt=  0.3125  0.0625  0.0625 (reduced coord)
  -0.39281   0.05297   0.05612   0.07288   0.12858   0.12950   0.17798   0.24978
   0.27292
      occupation numbers for kpt#   3
   1.00000   0.99887   0.99877   0.99814   0.99255   0.99238   0.97484   0.86551
   0.78303
 kpt#   4, nband=  9, wtk=  0.01172, kpt=  0.4375  0.0625  0.0625 (reduced coord)
  -0.37652   0.01924   0.04239   0.04841   0.13703   0.13775   0.18151   0.27379
   0.28949
      occupation numbers for kpt#   4
   1.00000   0.99951   0.99913   0.99899   0.99081   0.99065   0.97258   0.77930
   0.70455
 kpt#   5, nband=  9, wtk=  0.01172, kpt= -0.4375  0.0625  0.0625 (reduced coord)
  -0.37126   0.00845   0.04025   0.04093   0.13930   0.14065   0.18379   0.28589
   0.28840
      occupation numbers for kpt#   5
   1.00000   0.99963   0.99918   0.99916   0.99028   0.98995   0.97102   0.72298
   0.71019
 kpt#   6, nband=  9, wtk=  0.01172, kpt= -0.3125  0.0625  0.0625 (reduced coord)
  -0.38131   0.02903   0.04861   0.05248   0.13339   0.13658   0.17960   0.27107
   0.28076
      occupation numbers for kpt#   6
   1.00000   0.99938   0.99898   0.99888   0.99160   0.99091   0.97383   0.79081
   0.74788
 kpt#   7, nband=  9, wtk=  0.01172, kpt= -0.1875  0.0625  0.0625 (reduced coord)
  -0.39880   0.05716   0.07429   0.08141   0.12451   0.12698   0.17906   0.24468
   0.25893
      occupation numbers for kpt#   7
   1.00000   0.99874   0.99807   0.99770   0.99326   0.99284   0.97416   0.87968
   0.83662
 kpt#   8, nband=  9, wtk=  0.01172, kpt= -0.0625  0.0625  0.0625 (reduced coord)
  -0.41286   0.08154   0.09665   0.11136   0.11794   0.11822   0.20110   0.22113
   0.22881
      occupation numbers for kpt#   8
   1.00000   0.99769   0.99663   0.99514   0.99428   0.99424   0.95602   0.92944
   0.91577
 kpt#   9, nband=  9, wtk=  0.01172, kpt=  0.1875  0.1875  0.0625 (reduced coord)
  -0.40581   0.06019   0.09679   0.10713   0.11766   0.11900   0.19815   0.22131
   0.23179
      occupation numbers for kpt#   9
   1.00000   0.99864   0.99662   0.99563   0.99432   0.99413   0.95902   0.92916
   0.90984
 kpt#  10, nband=  9, wtk=  0.02344, kpt=  0.3125  0.1875  0.0625 (reduced coord)
  -0.39402   0.04126   0.07879   0.09457   0.12225   0.12679   0.18692   0.22116
   0.25399
      occupation numbers for kpt#  10
   1.00000   0.99915   0.99784   0.99680   0.99363   0.99287   0.96873   0.92940
   0.85280
 kpt#  11, nband=  9, wtk=  0.02344, kpt=  0.4375  0.1875  0.0625 (reduced coord)
  -0.37960   0.02912   0.05400   0.06702   0.12901   0.13816   0.18061   0.24106
   0.26915
      occupation numbers for kpt#  11
   1.00000   0.99938   0.99884   0.99839   0.99247   0.99055   0.97318   0.88894
   0.79860
 kpt#  12, nband=  9, wtk=  0.02344, kpt= -0.4375  0.1875  0.0625 (reduced coord)
  -0.37136   0.02167   0.04579   0.04820   0.13526   0.14176   0.18144   0.25252
   0.27499
      occupation numbers for kpt#  12
   1.00000   0.99948   0.99905   0.99899   0.99121   0.98967   0.97263   0.85736
   0.77413
 kpt#  13, nband=  9, wtk=  0.02344, kpt= -0.3125  0.1875  0.0625 (reduced coord)
  -0.37533   0.02411   0.04420   0.06154   0.13371   0.13841   0.18214   0.23912
   0.28332
      occupation numbers for kpt#  13
   1.00000   0.99945   0.99909   0.99860   0.99154   0.99049   0.97216   0.89363
   0.73565
 kpt#  14, nband=  9, wtk=  0.02344, kpt= -0.1875  0.1875  0.0625 (reduced coord)
  -0.38853   0.03893   0.05670   0.08683   0.12726   0.12982   0.18552   0.22071
   0.27709
      occupation numbers for kpt#  14
   1.00000   0.99920   0.99876   0.99736   0.99279   0.99232   0.96977   0.93012
   0.76478
 kpt#  15, nband=  9, wtk=  0.02344, kpt= -0.0625  0.1875  0.0625 (reduced coord)
  -0.40224   0.05886   0.07980   0.09919   0.12150   0.12326   0.18734   0.22385
   0.25467
      occupation numbers for kpt#  15
   1.00000   0.99869   0.99779   0.99641   0.99375   0.99347   0.96841   0.92485
   0.85063
 kpt#  16, nband=  9, wtk=  0.01172, kpt=  0.3125  0.3125  0.0625 (reduced coord)
  -0.38893   0.03457   0.09874   0.09925   0.12013   0.12589   0.19077   0.21257
   0.21967
      occupation numbers for kpt#  16
   1.00000   0.99928   0.99645   0.99641   0.99396   0.99303   0.96568   0.94225
   0.93181
 kpt#  17, nband=  9, wtk=  0.02344, kpt=  0.4375  0.3125  0.0625 (reduced coord)
  -0.38035   0.03828   0.08140   0.08873   0.12698   0.13655   0.17897   0.20412
   0.22734
      occupation numbers for kpt#  17
   1.00000   0.99922   0.99770   0.99724   0.99284   0.99092   0.97423   0.95273
   0.91856
 kpt#  18, nband=  9, wtk=  0.02344, kpt= -0.4375  0.3125  0.0625 (reduced coord)
  -0.37310   0.04934   0.05899   0.06762   0.12798   0.14498   0.17501   0.20815
   0.23929
      occupation numbers for kpt#  18
   1.00000   0.99897   0.99868   0.99837   0.99266   0.98881   0.97660   0.94797
   0.89323
 kpt#  19, nband=  9, wtk=  0.02344, kpt= -0.3125  0.3125  0.0625 (reduced coord)
  -0.37160   0.03522   0.05053   0.07089   0.13025   0.14221   0.18369   0.19860
   0.26502
      occupation numbers for kpt#  19
   1.00000   0.99927   0.99893   0.99823   0.99223   0.98956   0.97109   0.95857
   0.81471
 kpt#  20, nband=  9, wtk=  0.02344, kpt= -0.1875  0.3125  0.0625 (reduced coord)
  -0.37695   0.02844   0.04603   0.07677   0.13138   0.13607   0.18670   0.21159
   0.28182
      occupation numbers for kpt#  20
   1.00000   0.99939   0.99905   0.99795   0.99201   0.99103   0.96890   0.94357
   0.74288
 kpt#  21, nband=  9, wtk=  0.02344, kpt= -0.0625  0.3125  0.0625 (reduced coord)
  -0.38583   0.03598   0.05387   0.06895   0.12937   0.13382   0.17983   0.24748
   0.27786
      occupation numbers for kpt#  21
   1.00000   0.99926   0.99884   0.99831   0.99240   0.99151   0.97368   0.87207
   0.76134
 kpt#  22, nband=  9, wtk=  0.01172, kpt=  0.4375  0.4375  0.0625 (reduced coord)
  -0.37854   0.05415   0.09177   0.10402   0.13342   0.14073   0.16430   0.18840
   0.19018
      occupation numbers for kpt#  22
   1.00000   0.99883   0.99702   0.99595   0.99160   0.98993   0.98199   0.96760
   0.96617
 kpt#  23, nband=  9, wtk=  0.02344, kpt= -0.4375  0.4375  0.0625 (reduced coord)
  -0.37530   0.07101   0.08374   0.08793   0.13032   0.14921   0.15924   0.17766
   0.19912
      occupation numbers for kpt#  23
   1.00000   0.99822   0.99756   0.99729   0.99222   0.98758   0.98410   0.97504
   0.95805
 kpt#  24, nband=  9, wtk=  0.02344, kpt= -0.3125  0.4375  0.0625 (reduced coord)
  -0.37231   0.05703   0.06813   0.06970   0.12629   0.14702   0.17268   0.18793
   0.23308
      occupation numbers for kpt#  24
   1.00000   0.99875   0.99835   0.99828   0.99296   0.98824   0.97789   0.96796
   0.90715
 kpt#  25, nband=  9, wtk=  0.02344, kpt= -0.1875  0.4375  0.0625 (reduced coord)
  -0.37125   0.03054   0.04923   0.05718   0.13287   0.14228   0.18030   0.22506
   0.26832
      occupation numbers for kpt#  25
   1.00000   0.99935   0.99897   0.99874   0.99171   0.98954   0.97337   0.92271
   0.80192
 kpt#  26, nband=  9, wtk=  0.02344, kpt= -0.0625  0.4375  0.0625 (reduced coord)
  -0.37297   0.01584   0.04183   0.04733   0.13685   0.14020   0.18243   0.26842
   0.28552
      occupation numbers for kpt#  26
   1.00000   0.99955   0.99914   0.99902   0.99085   0.99006   0.97196   0.80154
   0.72478
 kpt#  27, nband=  9, wtk=  0.01172, kpt= -0.4375 -0.4375  0.0625 (reduced coord)
  -0.37678   0.07227   0.09008   0.10542   0.13510   0.14912   0.15263   0.17505
   0.17936
      occupation numbers for kpt#  27
   1.00000   0.99817   0.99714   0.99581   0.99124   0.98761   0.98649   0.97657
   0.97398
 kpt#  28, nband=  9, wtk=  0.02344, kpt= -0.3125 -0.4375  0.0625 (reduced coord)
  -0.37682   0.05354   0.08329   0.08760   0.13075   0.14287   0.16882   0.19019
   0.20974
      occupation numbers for kpt#  28
   1.00000   0.99885   0.99759   0.99731   0.99214   0.98938   0.97988   0.96616
   0.94598
 kpt#  29, nband=  9, wtk=  0.02344, kpt= -0.1875 -0.4375  0.0625 (reduced coord)
  -0.37531   0.03474   0.05569   0.06682   0.12858   0.14192   0.17871   0.22897
   0.25260
      occupation numbers for kpt#  29
   1.00000   0.99928   0.99879   0.99840   0.99255   0.98963   0.97439   0.91546
   0.85711
 kpt#  30, nband=  9, wtk=  0.01172, kpt= -0.3125 -0.3125  0.0625 (reduced coord)
  -0.38251   0.03895   0.09483   0.10169   0.12571   0.13230   0.18054   0.20250
   0.20510
      occupation numbers for kpt#  30
   1.00000   0.99920   0.99678   0.99618   0.99306   0.99183   0.97322   0.95452
   0.95161
 kpt#  31, nband=  9, wtk=  0.02344, kpt= -0.1875 -0.3125  0.0625 (reduced coord)
  -0.38624   0.03360   0.07946   0.09114   0.12377   0.13122   0.18487   0.21465
   0.24404
      occupation numbers for kpt#  31
   1.00000   0.99930   0.99781   0.99706   0.99339   0.99204   0.97024   0.93936
   0.88137
 kpt#  32, nband=  9, wtk=  0.01172, kpt= -0.1875 -0.1875  0.0625 (reduced coord)
  -0.39720   0.04247   0.09754   0.10292   0.11771   0.12154   0.19585   0.21887
   0.22878
      occupation numbers for kpt#  32
   1.00000   0.99913   0.99656   0.99606   0.99431   0.99374   0.96121   0.93307
   0.91583
 kpt#  33, nband=  9, wtk=  0.00391, kpt=  0.1875  0.1875  0.1875 (reduced coord)
  -0.40534   0.07618   0.07618   0.09072   0.12320   0.12320   0.18081   0.24518
   0.24518
      occupation numbers for kpt#  33
   1.00000   0.99798   0.99798   0.99710   0.99348   0.99348   0.97304   0.87835
   0.87835
 kpt#  34, nband=  9, wtk=  0.01172, kpt=  0.3125  0.1875  0.1875 (reduced coord)
  -0.39596   0.05641   0.05776   0.09227   0.12539   0.12612   0.18487   0.22360
   0.27258
      occupation numbers for kpt#  34
   1.00000   0.99877   0.99872   0.99698   0.99312   0.99299   0.97025   0.92528
   0.78445
 kpt#  35, nband=  9, wtk=  0.01172, kpt=  0.4375  0.1875  0.1875 (reduced coord)
  -0.38229   0.03262   0.04593   0.08076   0.13041   0.13249   0.18670   0.21776
   0.28724
      occupation numbers for kpt#  35
   1.00000   0.99932   0.99905   0.99773   0.99220   0.99179   0.96890   0.93477
   0.71615
 kpt#  36, nband=  9, wtk=  0.01172, kpt= -0.4375  0.1875  0.1875 (reduced coord)
  -0.37235   0.02307   0.04403   0.05826   0.13484   0.13976   0.18227   0.23392
   0.28240
      occupation numbers for kpt#  36
   1.00000   0.99946   0.99909   0.99871   0.99130   0.99017   0.97207   0.90536
   0.74009
 kpt#  37, nband=  9, wtk=  0.01172, kpt= -0.3125  0.1875  0.1875 (reduced coord)
  -0.37302   0.02874   0.04922   0.05366   0.13184   0.14252   0.17988   0.24824
   0.26181
      occupation numbers for kpt#  37
   1.00000   0.99938   0.99897   0.99885   0.99192   0.98947   0.97364   0.86994
   0.82652
 kpt#  38, nband=  9, wtk=  0.01172, kpt= -0.1875  0.1875  0.1875 (reduced coord)
  -0.38373   0.03217   0.07362   0.07418   0.12393   0.13632   0.18032   0.23646
   0.24849
      occupation numbers for kpt#  38
   1.00000   0.99933   0.99810   0.99808   0.99336   0.99097   0.97336   0.89979
   0.86923
 kpt#  39, nband=  9, wtk=  0.01172, kpt=  0.3125  0.3125  0.1875 (reduced coord)
  -0.39099   0.03960   0.07324   0.07663   0.12433   0.13151   0.18035   0.24203
   0.25970
      occupation numbers for kpt#  39
   1.00000   0.99919   0.99812   0.99796   0.99330   0.99199   0.97334   0.88652
   0.83395
 kpt#  40, nband=  9, wtk=  0.02344, kpt=  0.4375  0.3125  0.1875 (reduced coord)
  -0.38175   0.03177   0.05770   0.08312   0.12869   0.13385   0.18504   0.21426
   0.26835
      occupation numbers for kpt#  40
   1.00000   0.99933   0.99873   0.99760   0.99253   0.99151   0.97012   0.93991
   0.80180
 kpt#  41, nband=  9, wtk=  0.02344, kpt= -0.4375  0.3125  0.1875 (reduced coord)
  -0.37355   0.03464   0.04973   0.07471   0.13149   0.14009   0.18388   0.20247
   0.26386
      occupation numbers for kpt#  41
   1.00000   0.99928   0.99896   0.99805   0.99199   0.99009   0.97096   0.95455
   0.81905
 kpt#  42, nband=  9, wtk=  0.02344, kpt= -0.3125  0.3125  0.1875 (reduced coord)
  -0.37151   0.04092   0.05665   0.06135   0.13086   0.14418   0.17770   0.21035
   0.25092
      occupation numbers for kpt#  42
   1.00000   0.99916   0.99876   0.99860   0.99212   0.98903   0.97501   0.94519
   0.86217
 kpt#  43, nband=  9, wtk=  0.02344, kpt= -0.1875  0.3125  0.1875 (reduced coord)
  -0.37689   0.03709   0.06018   0.08092   0.13034   0.13833   0.18139   0.20423
   0.25010
      occupation numbers for kpt#  43
   1.00000   0.99924   0.99864   0.99772   0.99222   0.99051   0.97266   0.95260
   0.86458
 kpt#  44, nband=  9, wtk=  0.01172, kpt=  0.4375  0.4375  0.1875 (reduced coord)
  -0.37838   0.03721   0.07336   0.07530   0.12432   0.14112   0.17713   0.22800
   0.22853
      occupation numbers for kpt#  44
   1.00000   0.99924   0.99812   0.99802   0.99330   0.98983   0.97536   0.91732
   0.91630
 kpt#  45, nband=  9, wtk=  0.02344, kpt= -0.4375  0.4375  0.1875 (reduced coord)
  -0.37421   0.05241   0.06331   0.07981   0.13137   0.14379   0.17442   0.19132
   0.22972
      occupation numbers for kpt#  45
   1.00000   0.99888   0.99853   0.99779   0.99202   0.98914   0.97693   0.96523
   0.91400
 kpt#  46, nband=  9, wtk=  0.02344, kpt= -0.3125  0.4375  0.1875 (reduced coord)
  -0.37161   0.05188   0.07066   0.07384   0.13041   0.14942   0.17326   0.17931
   0.22683
      occupation numbers for kpt#  46
   1.00000   0.99890   0.99824   0.99809   0.99220   0.98752   0.97757   0.97401
   0.91950
 kpt#  47, nband=  9, wtk=  0.02344, kpt= -0.1875  0.4375  0.1875 (reduced coord)
  -0.37203   0.04644   0.05768   0.07397   0.13102   0.14486   0.17844   0.19103
   0.24151
      occupation numbers for kpt#  47
   1.00000   0.99904   0.99873   0.99809   0.99208   0.98885   0.97455   0.96547
   0.88782
 kpt#  48, nband=  9, wtk=  0.01172, kpt= -0.4375 -0.4375  0.1875 (reduced coord)
  -0.37403   0.06982   0.07351   0.07898   0.12437   0.14825   0.16536   0.18477
   0.21476
      occupation numbers for kpt#  48
   1.00000   0.99828   0.99811   0.99783   0.99329   0.98787   0.98152   0.97032
   0.93919
 kpt#  49, nband=  9, wtk=  0.02344, kpt= -0.3125 -0.4375  0.1875 (reduced coord)
  -0.37316   0.06430   0.07011   0.07936   0.13013   0.14932   0.16686   0.17950
   0.21725
      occupation numbers for kpt#  49
   1.00000   0.99850   0.99826   0.99781   0.99226   0.98755   0.98083   0.97389
   0.93555
 kpt#  50, nband=  9, wtk=  0.01172, kpt= -0.3125 -0.3125  0.1875 (reduced coord)
  -0.37530   0.05266   0.07336   0.07747   0.12522   0.14544   0.17118   0.20323
   0.22027
      occupation numbers for kpt#  50
   1.00000   0.99888   0.99812   0.99791   0.99315   0.98869   0.97869   0.95373
   0.93084
 prteigrs : prtvol=0 or 1, do not print more k-points.

 Eigenvalues (hartree) for nkpt=  60  k points, SPIN DOWN:
 kpt#   1, nband=  9, wtk=  0.00391, kpt=  0.0625  0.0625  0.0625 (reduced coord)
  -0.41401   0.20258   0.21471   0.21471   0.24466   0.24466   0.24788   0.39513
   0.47734
      occupation numbers for kpt#   1
   1.00000   0.95443   0.93927   0.93927   0.87974   0.87974   0.87095   0.14531
   0.02131
 kpt#   2, nband=  9, wtk=  0.01172, kpt=  0.1875  0.0625  0.0625 (reduced coord)
  -0.40629   0.15809   0.19190   0.20562   0.24762   0.26077   0.26197   0.43425
   0.48802
      occupation numbers for kpt#   2
   1.00000   0.98454   0.96473   0.95101   0.87169   0.83022   0.82593   0.06009
   0.01640
 kpt#   3, nband=  9, wtk=  0.01172, kpt=  0.3125  0.0625  0.0625 (reduced coord)
  -0.39017   0.09446   0.17494   0.18564   0.26245   0.27386   0.27584   0.48571
   0.51937
      occupation numbers for kpt#   3
   1.00000   0.99681   0.97664   0.96969   0.82421   0.77901   0.77037   0.01735
   0.00756
 kpt#   4, nband=  9, wtk=  0.01172, kpt=  0.4375  0.0625  0.0625 (reduced coord)
  -0.37398   0.04748   0.16398   0.17071   0.27665   0.28337   0.28815   0.51630
   0.54753
      occupation numbers for kpt#   4
   1.00000   0.99901   0.98214   0.97893   0.76676   0.73541   0.71151   0.00815
   0.00375
 kpt#   5, nband=  9, wtk=  0.01172, kpt= -0.4375  0.0625  0.0625 (reduced coord)
  -0.36874   0.03425   0.16219   0.16569   0.28235   0.28408   0.29309   0.52302
   0.54887
      occupation numbers for kpt#   5
   1.00000   0.99929   0.98290   0.98137   0.74033   0.73190   0.68550   0.00690
   0.00363
 kpt#   6, nband=  9, wtk=  0.01172, kpt= -0.3125  0.0625  0.0625 (reduced coord)
  -0.37870   0.06010   0.17066   0.17135   0.27120   0.28191   0.28414   0.51230
   0.52811
      occupation numbers for kpt#   6
   1.00000   0.99865   0.97896   0.97860   0.79024   0.74246   0.73162   0.00900
   0.00608
 kpt#   7, nband=  9, wtk=  0.01172, kpt= -0.1875  0.0625  0.0625 (reduced coord)
  -0.39608   0.11506   0.18530   0.18747   0.25535   0.27028   0.27210   0.47083
   0.49976
      occupation numbers for kpt#   7
   1.00000   0.99467   0.96994   0.96832   0.84847   0.79403   0.78649   0.02498
   0.01228
 kpt#   8, nband=  9, wtk=  0.01172, kpt= -0.0625  0.0625  0.0625 (reduced coord)
  -0.41007   0.17989   0.20239   0.20542   0.24136   0.25814   0.25838   0.41589
   0.47894
      occupation numbers for kpt#   8
   1.00000   0.97364   0.95464   0.95124   0.88820   0.83928   0.83846   0.09189
   0.02049
 kpt#   9, nband=  9, wtk=  0.01172, kpt=  0.1875  0.1875  0.0625 (reduced coord)
  -0.40279   0.15139   0.19040   0.19089   0.23612   0.27171   0.27238   0.43919
   0.48193
      occupation numbers for kpt#   9
   1.00000   0.98690   0.96599   0.96558   0.90057   0.78815   0.78532   0.05349
   0.01904
 kpt#  10, nband=  9, wtk=  0.02344, kpt=  0.3125  0.1875  0.0625 (reduced coord)
  -0.39035   0.11096   0.16770   0.18434   0.24185   0.28133   0.28271   0.47004
   0.49744
      occupation numbers for kpt#  10
   1.00000   0.99519   0.98043   0.97063   0.88698   0.74517   0.73857   0.02547
   0.01300
 kpt#  11, nband=  9, wtk=  0.02344, kpt=  0.4375  0.1875  0.0625 (reduced coord)
  -0.37513   0.06885   0.15264   0.17206   0.25939   0.28658   0.28808   0.50214
   0.52595
      occupation numbers for kpt#  11
   1.00000   0.99832   0.98649   0.97822   0.83502   0.71950   0.71183   0.01158
   0.00642
 kpt#  12, nband=  9, wtk=  0.02344, kpt= -0.4375  0.1875  0.0625 (reduced coord)
  -0.36654   0.04802   0.14438   0.16681   0.27643   0.28213   0.29150   0.51838
   0.54278
      occupation numbers for kpt#  12
   1.00000   0.99900   0.98898   0.98085   0.76775   0.74140   0.69403   0.00774
   0.00422
 kpt#  13, nband=  9, wtk=  0.02344, kpt= -0.3125  0.1875  0.0625 (reduced coord)
  -0.37099   0.05861   0.14335   0.17170   0.26970   0.28584   0.28935   0.50528
   0.54577
      occupation numbers for kpt#  13
   1.00000   0.99870   0.98926   0.97842   0.79641   0.72322   0.70532   0.01071
   0.00392
 kpt#  14, nband=  9, wtk=  0.02344, kpt= -0.1875  0.1875  0.0625 (reduced coord)
  -0.38504   0.09430   0.15292   0.18431   0.25469   0.28292   0.28361   0.47935
   0.52411
      occupation numbers for kpt#  14
   1.00000   0.99682   0.98639   0.97065   0.85059   0.73757   0.73424   0.02028
   0.00672
 kpt#  15, nband=  9, wtk=  0.02344, kpt= -0.0625  0.1875  0.0625 (reduced coord)
  -0.39934   0.13334   0.17894   0.19549   0.24628   0.27104   0.27286   0.45416
   0.49340
      occupation numbers for kpt#  15
   1.00000   0.99161   0.97424   0.96155   0.87538   0.79092   0.78327   0.03741
   0.01436
 kpt#  16, nband=  9, wtk=  0.01172, kpt=  0.3125  0.3125  0.0625 (reduced coord)
  -0.38316   0.10299   0.17185   0.17581   0.22272   0.28818   0.28832   0.47612
   0.49027
      occupation numbers for kpt#  16
   1.00000   0.99606   0.97834   0.97613   0.92678   0.71134   0.71064   0.02195
   0.01552
 kpt#  17, nband=  9, wtk=  0.02344, kpt=  0.4375  0.3125  0.0625 (reduced coord)
  -0.37233   0.08543   0.15214   0.17116   0.23295   0.28839   0.28949   0.49448
   0.50759
      occupation numbers for kpt#  17
   1.00000   0.99745   0.98665   0.97870   0.90742   0.71024   0.70459   0.01399
   0.01012
 kpt#  18, nband=  9, wtk=  0.02344, kpt= -0.4375  0.3125  0.0625 (reduced coord)
  -0.36415   0.07598   0.12571   0.16728   0.25517   0.28321   0.28967   0.51162
   0.52518
      occupation numbers for kpt#  18
   1.00000   0.99799   0.99306   0.98063   0.84904   0.73618   0.70364   0.00916
   0.00654
 kpt#  19, nband=  9, wtk=  0.02344, kpt= -0.3125  0.3125  0.0625 (reduced coord)
  -0.36397   0.07695   0.11075   0.16927   0.27355   0.27538   0.29078   0.50607
   0.54180
      occupation numbers for kpt#  19
   1.00000   0.99794   0.99522   0.97966   0.78032   0.77239   0.69781   0.01051
   0.00433
 kpt#  20, nband=  9, wtk=  0.02344, kpt= -0.1875  0.3125  0.0625 (reduced coord)
  -0.37190   0.07408   0.12926   0.17488   0.26445   0.28613   0.28948   0.49479
   0.54644
      occupation numbers for kpt#  20
   1.00000   0.99808   0.99242   0.97667   0.81685   0.72175   0.70462   0.01388
   0.00386
 kpt#  21, nband=  9, wtk=  0.02344, kpt= -0.0625  0.3125  0.0625 (reduced coord)
  -0.38273   0.07800   0.16392   0.17860   0.26189   0.28190   0.28297   0.49430
   0.52388
      occupation numbers for kpt#  21
   1.00000   0.99788   0.98216   0.97446   0.82624   0.74247   0.73732   0.01405
   0.00676
 kpt#  22, nband=  9, wtk=  0.01172, kpt=  0.4375  0.4375  0.0625 (reduced coord)
  -0.36718   0.08285   0.16453   0.17281   0.21262   0.28779   0.28819   0.49761
   0.50176
      occupation numbers for kpt#  22
   1.00000   0.99761   0.98189   0.97782   0.94218   0.71333   0.71131   0.01295
   0.01169
 kpt#  23, nband=  9, wtk=  0.02344, kpt= -0.4375  0.4375  0.0625 (reduced coord)
  -0.36284   0.08314   0.14426   0.16713   0.22896   0.28519   0.28705   0.50323
   0.51247
      occupation numbers for kpt#  23
   1.00000   0.99760   0.98901   0.98070   0.91547   0.72645   0.71713   0.01127
   0.00897
 kpt#  24, nband=  9, wtk=  0.02344, kpt= -0.3125  0.4375  0.0625 (reduced coord)
  -0.36188   0.08838   0.11073   0.16713   0.25415   0.28076   0.28916   0.51067
   0.52397
      occupation numbers for kpt#  24
   1.00000   0.99726   0.99522   0.98070   0.85229   0.74790   0.70629   0.00937
   0.00674
 kpt#  25, nband=  9, wtk=  0.02344, kpt= -0.1875  0.4375  0.0625 (reduced coord)
  -0.36473   0.06080   0.12819   0.16794   0.27567   0.27745   0.29088   0.51268
   0.54167
      occupation numbers for kpt#  25
   1.00000   0.99862   0.99262   0.98031   0.77111   0.76319   0.69730   0.00892
   0.00434
 kpt#  26, nband=  9, wtk=  0.02344, kpt= -0.0625  0.4375  0.0625 (reduced coord)
  -0.36968   0.04317   0.15615   0.16774   0.27697   0.28483   0.29110   0.51817
   0.54528
      occupation numbers for kpt#  26
   1.00000   0.99911   0.98527   0.98041   0.76536   0.72825   0.69611   0.00778
   0.00397
 kpt#  27, nband=  9, wtk=  0.01172, kpt= -0.4375 -0.4375  0.0625 (reduced coord)
  -0.36359   0.08059   0.16337   0.17306   0.21050   0.28612   0.28671   0.49936
   0.50614
      occupation numbers for kpt#  27
   1.00000   0.99774   0.98240   0.97768   0.94501   0.72179   0.71881   0.01240
   0.01049
 kpt#  28, nband=  9, wtk=  0.02344, kpt= -0.3125 -0.4375  0.0625 (reduced coord)
  -0.36609   0.08275   0.14720   0.16838   0.23024   0.28685   0.28833   0.50063
   0.51167
      occupation numbers for kpt#  28
   1.00000   0.99762   0.98818   0.98010   0.91296   0.71814   0.71056   0.01202
   0.00915
 kpt#  29, nband=  9, wtk=  0.02344, kpt= -0.1875 -0.4375  0.0625 (reduced coord)
  -0.36867   0.06837   0.14006   0.16849   0.25700   0.28608   0.29000   0.50867
   0.52675
      occupation numbers for kpt#  29
   1.00000   0.99834   0.99010   0.98004   0.84309   0.72201   0.70191   0.00985
   0.00629
 kpt#  30, nband=  9, wtk=  0.01172, kpt= -0.3125 -0.3125  0.0625 (reduced coord)
  -0.37400   0.08951   0.16713   0.17329   0.21682   0.28935   0.28948   0.49124
   0.49439
      occupation numbers for kpt#  30
   1.00000   0.99718   0.98070   0.97756   0.93619   0.70528   0.70460   0.01515
   0.01402
 kpt#  31, nband=  9, wtk=  0.02344, kpt= -0.1875 -0.3125  0.0625 (reduced coord)
  -0.38083   0.09449   0.15884   0.17620   0.23701   0.28724   0.28820   0.48380
   0.50219
      occupation numbers for kpt#  31
   1.00000   0.99681   0.98426   0.97590   0.89854   0.71614   0.71122   0.01819
   0.01156
 kpt#  32, nband=  9, wtk=  0.01172, kpt= -0.1875 -0.1875  0.0625 (reduced coord)
  -0.39331   0.12414   0.17955   0.18139   0.22953   0.28236   0.28280   0.45872
   0.48589
      occupation numbers for kpt#  32
   1.00000   0.99333   0.97386   0.97266   0.91437   0.74026   0.73818   0.03352
   0.01728
 kpt#  33, nband=  9, wtk=  0.00391, kpt=  0.1875  0.1875  0.1875 (reduced coord)
  -0.40268   0.13775   0.19588   0.19588   0.25904   0.25904   0.26192   0.45218
   0.49757
      occupation numbers for kpt#  33
   1.00000   0.99065   0.96119   0.96119   0.83621   0.83621   0.82613   0.03923
   0.01296
 kpt#  34, nband=  9, wtk=  0.01172, kpt=  0.3125  0.1875  0.1875 (reduced coord)
  -0.39305   0.11221   0.16515   0.19230   0.25387   0.27568   0.27685   0.46846
   0.51912
      occupation numbers for kpt#  34
   1.00000   0.99504   0.98161   0.96439   0.85318   0.77109   0.76589   0.02647
   0.00760
 kpt#  35, nband=  9, wtk=  0.01172, kpt=  0.4375  0.1875  0.1875 (reduced coord)
  -0.37846   0.08078   0.13975   0.18043   0.26211   0.28591   0.28635   0.48708
   0.54683
      occupation numbers for kpt#  35
   1.00000   0.99773   0.99017   0.97329   0.82543   0.72286   0.72062   0.01678
   0.00382
 kpt#  36, nband=  9, wtk=  0.01172, kpt= -0.4375  0.1875  0.1875 (reduced coord)
  -0.36730   0.05565   0.13504   0.17047   0.27504   0.28246   0.29069   0.50925
   0.55000
      occupation numbers for kpt#  36
   1.00000   0.99879   0.99125   0.97905   0.77391   0.73981   0.69829   0.00971
   0.00353
 kpt#  37, nband=  9, wtk=  0.01172, kpt= -0.3125  0.1875  0.1875 (reduced coord)
  -0.36743   0.05572   0.14316   0.16780   0.26695   0.28461   0.29099   0.51820
   0.53219
      occupation numbers for kpt#  37
   1.00000   0.99879   0.98931   0.98038   0.80731   0.72929   0.69673   0.00778
   0.00550
 kpt#  38, nband=  9, wtk=  0.01172, kpt= -0.1875  0.1875  0.1875 (reduced coord)
  -0.37874   0.08299   0.15952   0.17249   0.24659   0.28717   0.28735   0.49660
   0.50610
      occupation numbers for kpt#  38
   1.00000   0.99760   0.98399   0.97799   0.87452   0.71652   0.71557   0.01327
   0.01050
 kpt#  39, nband=  9, wtk=  0.01172, kpt=  0.3125  0.3125  0.1875 (reduced coord)
  -0.38761   0.09575   0.17348   0.17725   0.25097   0.28067   0.28207   0.48441
   0.50273
      occupation numbers for kpt#  39
   1.00000   0.99671   0.97746   0.97528   0.86200   0.74831   0.74165   0.01792
   0.01141
 kpt#  40, nband=  9, wtk=  0.02344, kpt=  0.4375  0.3125  0.1875 (reduced coord)
  -0.37674   0.08296   0.14316   0.17606   0.25283   0.28698   0.28844   0.48924
   0.52637
      occupation numbers for kpt#  40
   1.00000   0.99761   0.98931   0.97599   0.85640   0.71748   0.70999   0.01591
   0.00635
 kpt#  41, nband=  9, wtk=  0.02344, kpt= -0.4375  0.3125  0.1875 (reduced coord)
  -0.36647   0.07568   0.12149   0.16782   0.26498   0.28310   0.29013   0.50162
   0.53965
      occupation numbers for kpt#  41
   1.00000   0.99800   0.99375   0.98037   0.81485   0.73669   0.70124   0.01173
   0.00456
 kpt#  42, nband=  9, wtk=  0.02344, kpt= -0.3125  0.3125  0.1875 (reduced coord)
  -0.36333   0.07232   0.12196   0.16329   0.26910   0.27864   0.28967   0.51153
   0.53261
      occupation numbers for kpt#  42
   1.00000   0.99816   0.99368   0.98243   0.79880   0.75778   0.70365   0.00918
   0.00544
 kpt#  43, nband=  9, wtk=  0.02344, kpt= -0.1875  0.3125  0.1875 (reduced coord)
  -0.36953   0.07957   0.13569   0.16855   0.25090   0.28679   0.28966   0.49758
   0.52693
      occupation numbers for kpt#  43
   1.00000   0.99780   0.99111   0.98002   0.86223   0.71841   0.70367   0.01296
   0.00626
 kpt#  44, nband=  9, wtk=  0.01172, kpt=  0.4375  0.4375  0.1875 (reduced coord)
  -0.37094   0.07816   0.14664   0.17070   0.24281   0.28764   0.28951   0.50669
   0.50939
      occupation numbers for kpt#  44
   1.00000   0.99788   0.98835   0.97893   0.88453   0.71413   0.70444   0.01034
   0.00968
 kpt#  45, nband=  9, wtk=  0.02344, kpt= -0.4375  0.4375  0.1875 (reduced coord)
  -0.36439   0.08294   0.12979   0.16173   0.24974   0.28463   0.28841   0.50316
   0.52401
      occupation numbers for kpt#  45
   1.00000   0.99761   0.99232   0.98310   0.86563   0.72923   0.71015   0.01129
   0.00673
 kpt#  46, nband=  9, wtk=  0.02344, kpt= -0.3125  0.4375  0.1875 (reduced coord)
  -0.36099   0.09606   0.11042   0.15019   0.26598   0.27710   0.28691   0.50693
   0.52352
      occupation numbers for kpt#  46
   1.00000   0.99668   0.99525   0.98728   0.81105   0.76476   0.71782   0.01028
   0.00682
 kpt#  47, nband=  9, wtk=  0.02344, kpt= -0.1875  0.4375  0.1875 (reduced coord)
  -0.36279   0.08451   0.11573   0.15865   0.26544   0.27932   0.28859   0.50600
   0.52998
      occupation numbers for kpt#  47
   1.00000   0.99751   0.99459   0.98433   0.81313   0.75462   0.70925   0.01052
   0.00581
 kpt#  48, nband=  9, wtk=  0.01172, kpt= -0.4375 -0.4375  0.1875 (reduced coord)
  -0.36238   0.08519   0.12607   0.17150   0.23841   0.28338   0.28847   0.51158
   0.51345
      occupation numbers for kpt#  48
   1.00000   0.99747   0.99300   0.97852   0.89530   0.73535   0.70987   0.00917
   0.00875
 kpt#  49, nband=  9, wtk=  0.02344, kpt= -0.3125 -0.4375  0.1875 (reduced coord)
  -0.36176   0.08836   0.12539   0.15710   0.24934   0.28289   0.28702   0.50552
   0.52024
      occupation numbers for kpt#  49
   1.00000   0.99726   0.99312   0.98492   0.86679   0.73772   0.71726   0.01065
   0.00739
 kpt#  50, nband=  9, wtk=  0.01172, kpt= -0.3125 -0.3125  0.1875 (reduced coord)
  -0.36529   0.08032   0.13483   0.17085   0.23999   0.28546   0.28915   0.51153
   0.51200
      occupation numbers for kpt#  50
   1.00000   0.99776   0.99130   0.97886   0.89155   0.72508   0.70635   0.00918
   0.00907
 prteigrs : prtvol=0 or 1, do not print more k-points.

 Total charge density [el/Bohr^3]
,     Maximum=    1.5357E+00  at reduced coord.    0.5000    0.5000    0.5000
,Next maximum=    1.4994E+00  at reduced coord.    0.5000    0.5000    0.5208
,     Minimum=    1.1118E-02  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=    1.1118E-02  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    1.5000E+01
 Spin up density      [el/Bohr^3]
,     Maximum=    9.3726E-01  at reduced coord.    0.0000    0.0000    0.0000
,Next maximum=    9.2415E-01  at reduced coord.    0.0000    0.0208    0.9792
,     Minimum=    5.1784E-03  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=    5.1784E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.7150E+00
 Spin down density    [el/Bohr^3]
,     Maximum=    7.6023E-01  at reduced coord.    0.5000    0.5000    0.5000
,Next maximum=    7.4225E-01  at reduced coord.    0.5000    0.5000    0.5208
,     Minimum=    5.9394E-03  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=    5.9394E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    6.2850E+00
 Magnetization (spin up - spin down) [el/Bohr^3]
,     Maximum=    5.0291E-01  at reduced coord.    0.0000    0.0000    0.0000
,Next maximum=    4.9584E-01  at reduced coord.    0.0000    0.0208    0.9792
,     Minimum=   -7.6092E-04  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=   -7.6092E-04  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    2.4300E+00
 Relative magnetization (=zeta, between -1 and 1)
,     Maximum=    7.1954E-01  at reduced coord.    0.1875    0.8125    0.8125
,Next maximum=    7.1954E-01  at reduced coord.    0.8125    0.1875    0.8125
,     Minimum=   -6.8441E-02  at reduced coord.    0.2500    0.2500    0.2500
,Next minimum=   -6.8441E-02  at reduced coord.    0.7500    0.7500    0.7500

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.13095064200927E+01
    Hartree energy  =  8.49996962977950E+00
    XC energy       = -8.85595908840807E+00
    Ewald energy    = -4.08825008896774E+01
    PspCore energy  =  1.68654710609047E+00
    Loc. psp. energy= -3.50056360297136E+01
    Spherical terms =  1.71989680112357E+01
    >>>>> Internal E= -4.60491048406006E+01

    -kT*entropy     = -1.13427694686086E-01
    >>>>>>>>> Etotal= -4.61625325352867E+01

 "Double-counting" decomposition of free energy:
    Band energy     =  1.30994367394859E+00
    Ewald energy    = -4.08825008896774E+01
    PspCore energy  =  1.68654710609047E+00
    Dble-C XC-energy= -6.08103834215973E+00
    Spherical terms = -2.08205541014642E+00
    >>>>> Internal E= -4.60491038619445E+01

    -kT*entropy     = -1.13427694686086E-01
    >>>> Etotal (DC)= -4.61625315566306E+01

  >Total energy in eV           = -1.25614639276743E+03
  >Total DC energy in eV        = -1.25614636613684E+03
--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -4.35358604E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -4.35358604E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -4.35358604E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  1.2809E+01 GPa]
- sigma(1 1)= -1.28086902E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -1.28086902E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -1.28086902E+01  sigma(2 1)=  0.00000000E+00

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
                         0.00000    0.00000    0.00000    1.00000    0.00000
                         0.00000    0.00000    0.00000    0.00000    0.00000
             ecut      3.00000000E+01 Hartree
           etotal1    -4.6162531557E+01
            fcart1     9.9999999999E+99  9.9999999999E+99  9.9999999999E+99
                       9.9999999999E+99  9.9999999999E+99  9.9999999999E+99
           iatsph1       1    2
              ixc          11
           jdtset        1
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
P           mkmem          30
            natom           2
           natsph        2
            nband           9
           ndtset           1
            ngfft          30      30      30
          ngfftdg          48      48      48
             nkpt          60
-           npkpt           4
           nspden           2
           nsppol           2
            nstep        1000
             nsym          48
           ntypat           2
              occ      1.000000  0.996630  0.996630  0.994665  0.994308  0.994308
                       0.947844  0.930804  0.930804
                       1.000000  0.997901  0.997527  0.995858  0.994001  0.993840
                       0.965971  0.924872  0.879069
                       1.000000  0.998868  0.998775  0.998138  0.992548  0.992376
                       0.974840  0.865511  0.783029
                       1.000000  0.999512  0.999130  0.998989  0.990812  0.990647
                       0.972579  0.779295  0.704549
                       1.000000  0.999628  0.999176  0.999162  0.990282  0.989952
                       0.971018  0.722975  0.710190
                       1.000000  0.999377  0.998984  0.998881  0.991604  0.990915
                       0.973826  0.790805  0.747883
                       1.000000  0.998743  0.998071  0.997697  0.993265  0.992838
                       0.974163  0.879682  0.836619
                       1.000000  0.997689  0.996633  0.995143  0.994279  0.994240
                       0.956017  0.929443  0.915773
                       1.000000  0.998644  0.996621  0.995628  0.994319  0.994127
                       0.959015  0.929155  0.909835
                       1.000000  0.999155  0.997842  0.996802  0.993632  0.992873
                       0.968731  0.929396  0.852802
                       1.000000  0.999376  0.998838  0.998391  0.992469  0.990553
                       0.973176  0.888941  0.798604
                       1.000000  0.999482  0.999053  0.998995  0.991207  0.989671
                       0.972629  0.857356  0.774126
                       1.000000  0.999449  0.999090  0.998597  0.991539  0.990493
                       0.972155  0.893627  0.735649
                       1.000000  0.999202  0.998757  0.997363  0.992789  0.992317
                       0.969774  0.930122  0.764781
                       1.000000  0.998688  0.997787  0.996412  0.993749  0.993471
                       0.968412  0.924849  0.850630
                       1.000000  0.999285  0.996452  0.996407  0.993959  0.993030
                       0.965682  0.942253  0.931806
                       1.000000  0.999215  0.997697  0.997235  0.992838  0.990921
                       0.974225  0.952733  0.918563
                       1.000000  0.998966  0.998684  0.998368  0.992659  0.988814
                       0.976595  0.947973  0.893235
                       1.000000  0.999273  0.998934  0.998229  0.992233  0.989556
                       0.971091  0.958571  0.814710
                       1.000000  0.999386  0.999048  0.997949  0.992014  0.991028
                       0.968896  0.943572  0.742883
                       1.000000  0.999259  0.998842  0.998312  0.992401  0.991515
                       0.973680  0.872074  0.761336
                       1.000000  0.998834  0.997018  0.995953  0.991599  0.989931
                       0.981994  0.967596  0.966167
                       1.000000  0.998223  0.997559  0.997290  0.992220  0.987582
                       0.984099  0.975035  0.958049
                       1.000000  0.998747  0.998346  0.998280  0.992961  0.988237
                       0.977890  0.967958  0.907152
                       1.000000  0.999353  0.998968  0.998742  0.991712  0.989538
                       0.973372  0.922714  0.801919
                       1.000000  0.999552  0.999143  0.999016  0.990853  0.990061
                       0.971960  0.801539  0.724785
                       1.000000  0.998166  0.997141  0.995810  0.991242  0.987611
                       0.986489  0.976572  0.973980
                       1.000000  0.998851  0.997586  0.997312  0.992137  0.989383
                       0.979882  0.966158  0.945976
                       1.000000  0.999282  0.998788  0.998400  0.992549  0.989630
                       0.974385  0.915457  0.857107
                       1.000000  0.999202  0.996781  0.996182  0.993061  0.991829
                       0.973221  0.954520  0.951614
                       1.000000  0.999302  0.997806  0.997065  0.993388  0.992044
                       0.970245  0.939359  0.881366
                       1.000000  0.999129  0.996557  0.996063  0.994312  0.993744
                       0.961214  0.933066  0.915827
                       1.000000  0.997979  0.997979  0.997095  0.993481  0.993481
                       0.973042  0.878354  0.878354
                       1.000000  0.998766  0.998723  0.996980  0.993116  0.992991
                       0.970251  0.925279  0.784453
                       1.000000  0.999319  0.999050  0.997734  0.992203  0.991789
                       0.968899  0.934770  0.716145
                       1.000000  0.999463  0.999094  0.998708  0.991297  0.990169
                       0.972071  0.905365  0.740089
                       1.000000  0.999382  0.998969  0.998848  0.991922  0.989474
                       0.973644  0.869943  0.826518
                       1.000000  0.999326  0.998104  0.998077  0.993360  0.990972
                       0.973359  0.899790  0.869233
                       1.000000  0.999189  0.998122  0.997956  0.993295  0.991987
                       0.973340  0.886522  0.833946
                       1.000000  0.999333  0.998725  0.997597  0.992529  0.991508
                       0.970123  0.939908  0.801797
                       1.000000  0.999283  0.998956  0.998052  0.991992  0.990089
                       0.970956  0.954550  0.819053
                       1.000000  0.999162  0.998758  0.998604  0.992116  0.989034
                       0.975007  0.945193  0.862175
                       1.000000  0.999238  0.998644  0.997725  0.992216  0.990512
                       0.972658  0.952599  0.864578
                       1.000000  0.999236  0.998116  0.998022  0.993297  0.989833
                       0.975355  0.917317  0.916300
                       1.000000  0.998883  0.998534  0.997787  0.992015  0.989138
                       0.976930  0.965225  0.914000
                       1.000000  0.998898  0.998239  0.998093  0.992202  0.987517
                       0.977574  0.974011  0.919498
                       1.000000  0.999038  0.998726  0.998087  0.992084  0.988847
                       0.974553  0.965468  0.887821
                       1.000000  0.998275  0.998109  0.997832  0.993288  0.987874
                       0.981521  0.970322  0.939194
                       1.000000  0.998497  0.998263  0.997812  0.992257  0.987549
                       0.980830  0.973889  0.935551
                       1.000000  0.998876  0.998116  0.997912  0.993145  0.988687
                       0.978687  0.953725  0.930842
                       prtocc : prtvol=0, do not print more k-points.
                       1.000000  0.999092  0.998840  0.998840  0.991793  0.991793
                       0.975184  0.783622  0.783622
                       1.000000  0.999392  0.999085  0.998499  0.991411  0.991406
                       0.972557  0.877977  0.710954
                       1.000000  0.999397  0.999062  0.998145  0.991994  0.990364
                       0.968888  0.950410  0.749706
                       1.000000  0.999084  0.998752  0.998292  0.992707  0.988953
                       0.973874  0.963129  0.855225
                       1.000000  0.999462  0.999014  0.998883  0.991699  0.990096
                       0.973001  0.806291  0.790252
                       1.000000  0.999357  0.999003  0.998625  0.991793  0.989707
                       0.973284  0.916863  0.806248
                       1.000000  0.999047  0.998607  0.998243  0.992429  0.988546
                       0.974806  0.966578  0.884564
                       1.000000  0.999190  0.998793  0.998766  0.992249  0.989105
                       0.974816  0.932775  0.844741
                       1.000000  0.999610  0.999160  0.999160  0.990258  0.990258
                       0.971425  0.702961  0.702961
                       1.000000  0.999564  0.999135  0.999059  0.990652  0.989958
                       0.971741  0.817469  0.724670
                       1.000000  0.954432  0.939270  0.939270  0.879736  0.879736
                       0.870952  0.145314  0.021310
                       1.000000  0.984544  0.964731  0.951008  0.871692  0.830215
                       0.825931  0.060091  0.016399
                       1.000000  0.996811  0.976636  0.969686  0.824207  0.779008
                       0.770375  0.017354  0.007557
                       1.000000  0.999013  0.982137  0.978933  0.766763  0.735414
                       0.711509  0.008154  0.003752
                       1.000000  0.999290  0.982903  0.981370  0.740333  0.731903
                       0.685503  0.006902  0.003629
                       1.000000  0.998647  0.978956  0.978600  0.790244  0.742456
                       0.731617  0.009005  0.006081
                       1.000000  0.994675  0.969936  0.968317  0.848471  0.794028
                       0.786489  0.024981  0.012278
                       1.000000  0.973637  0.954637  0.951239  0.888201  0.839282
                       0.838463  0.091891  0.020491
                       1.000000  0.986895  0.965991  0.965583  0.900566  0.788145
                       0.785318  0.053489  0.019045
                       1.000000  0.995191  0.980431  0.970631  0.886980  0.745175
                       0.738569  0.025469  0.013001
                       1.000000  0.998317  0.986487  0.978222  0.835021  0.719496
                       0.711833  0.011578  0.006416
                       1.000000  0.998999  0.988981  0.980851  0.767750  0.741403
                       0.694030  0.007743  0.004223
                       1.000000  0.998696  0.989256  0.978416  0.796412  0.723219
                       0.705321  0.010713  0.003919
                       1.000000  0.996824  0.986391  0.970653  0.850591  0.737569
                       0.734243  0.020284  0.006717
                       1.000000  0.991614  0.974244  0.961548  0.875377  0.790924
                       0.783272  0.037415  0.014364
                       1.000000  0.996056  0.978335  0.976133  0.926785  0.711340
                       0.710644  0.021952  0.015515
                       1.000000  0.997454  0.986651  0.978696  0.907425  0.710243
                       0.704585  0.013988  0.010118
                       1.000000  0.997989  0.993062  0.980627  0.849036  0.736183
                       0.703644  0.009157  0.006542
                       1.000000  0.997939  0.995216  0.979659  0.780324  0.772386
                       0.697811  0.010506  0.004327
                       1.000000  0.998082  0.992423  0.976672  0.816852  0.721754
                       0.704622  0.013880  0.003855
                       1.000000  0.997885  0.982160  0.974455  0.826239  0.742466
                       0.737316  0.014048  0.006756
                       1.000000  0.997613  0.981893  0.977823  0.942182  0.713327
                       0.711312  0.012948  0.011686
                       1.000000  0.997595  0.989012  0.980701  0.915474  0.726448
                       0.717131  0.011269  0.008966
                       1.000000  0.997260  0.995218  0.980698  0.852287  0.747897
                       0.706291  0.009374  0.006740
                       1.000000  0.998623  0.992621  0.980312  0.771114  0.763190
                       0.697304  0.008919  0.004341
                       1.000000  0.999113  0.985266  0.980411  0.765357  0.728252
                       0.696113  0.007785  0.003967
                       1.000000  0.997743  0.982401  0.977684  0.945008  0.721792
                       0.718808  0.012399  0.010486
                       1.000000  0.997619  0.988183  0.980101  0.912962  0.718140
                       0.710564  0.012018  0.009146
                       1.000000  0.998336  0.990096  0.980044  0.843089  0.722005
                       0.701915  0.009851  0.006291
                       1.000000  0.997181  0.980700  0.977561  0.936193  0.705285
                       0.704604  0.015147  0.014016
                       1.000000  0.996809  0.984257  0.975903  0.898537  0.716138
                       0.711218  0.018190  0.011563
                       1.000000  0.993326  0.973857  0.972662  0.914373  0.740256
                       0.738178  0.033520  0.017279
                       1.000000  0.990646  0.961187  0.961187  0.836213  0.836213
                       0.826126  0.039233  0.012960
                       1.000000  0.995039  0.981614  0.964393  0.853181  0.771090
                       0.765889  0.026466  0.007602
                       1.000000  0.997733  0.990173  0.973289  0.825433  0.722863
                       0.720621  0.016781  0.003818
                       1.000000  0.998789  0.991254  0.979054  0.773913  0.739807
                       0.698293  0.009711  0.003527
                       1.000000  0.998787  0.989306  0.980378  0.807311  0.729293
                       0.696728  0.007778  0.005496
                       1.000000  0.997604  0.983988  0.977995  0.874524  0.716523
                       0.715575  0.013274  0.010496
                       1.000000  0.996707  0.977456  0.975282  0.862004  0.748307
                       0.741654  0.017917  0.011410
                       1.000000  0.997606  0.989308  0.975986  0.856402  0.717479
                       0.709991  0.015912  0.006351
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
           strten1    -4.3535860373E-04 -4.3535860373E-04 -4.3535860373E-04
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
- Proc.   0 individual time (sec): cpu=        258.5  wall=        263.9

================================================================================

 Calculation completed.
.Delivered    1 WARNINGs and   0 COMMENTs to log file.
+Overall time at end (sec) : cpu=       1049.2  wall=       1055.5
