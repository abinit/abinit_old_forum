
.Version 6.2.3  of ABINIT 
.(sequential version, prepared for a i686_linux_gnu4.4 computer) 

.Copyright (C) 1998-2010 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Thu 12 May 2011.
  
- input  file    -> t31.in
- output file    -> t31.out
- root for input  files -> t31i
- root for output files -> t31o


 Symmetries : space group Fd -3 m (#227); Bravais cF (face-center cubic)
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =         5  mffmem =         1
P  mgfft =        20   mkmem =         2 mpssoang=         3     mpw =       289
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =         2
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       2.905 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
  WF disk file :      0.046 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 -outvars: echo values of preprocessed input variables --------
            acell    1.0180000000E+01  1.0180000000E+01  1.0180000000E+01 Bohr
              amu    2.80855000E+01
           diemac    1.20000000E+01
             ecut    8.00000000E+00 Hartree
              kpt   -2.50000000E-01  5.00000000E-01  0.00000000E+00
                    -2.50000000E-01  0.00000000E+00  0.00000000E+00
          kptrlen    2.03600000E+01
         kptrlatt    2 -2  2  -2  2  2  -2 -2  2
P           mkmem         2
            natom         2
            nband         5
            ngfft        20      20      20
             nkpt         2
            nstep        10
             nsym        48
           ntypat         1
              occ    2.000000  2.000000  2.000000  2.000000  0.000000
            rprim    0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                     5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                     5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk    5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup       227
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
            tnons    0.0000000  0.0000000  0.0000000     0.2500000  0.2500000  0.2500000
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
           toldfe    1.00000000E-06 Hartree
            typat    1  1
              wtk      0.75000    0.25000
           xangst    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     1.3467559959E+00  1.3467559959E+00  1.3467559959E+00
            xcart    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5450000000E+00  2.5450000000E+00  2.5450000000E+00
             xred    0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                     2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl     14.00000

================================================================================

 chkinp: Checking input parameters for consistency.

================================================================================
== DATASET  1 ==================================================================

 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
