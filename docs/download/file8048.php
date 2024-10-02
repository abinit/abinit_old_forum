  ABINIT 
  
  Give name for formatted input file: 
tgw1_1.in
  Give name for formatted output file:
tgw1_x.out
  Give root name for generic input files:
tgw1i
  Give root name for generic output files:
tgw1o
  Give root name for generic temporary files:
tgw1

--- !WARNING
message: |
    Finds that output file tgw1_x.out
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tgw1_x.outA


--- !WARNING
message: |
    Finds that output file tgw1_x.outA
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tgw1_x.outB


.Version 7.6.2 of ABINIT 
.(sequential version, prepared for a x86_64_linux_gnu4.4 computer) 

.Copyright (C) 1998-2013 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Wed  5 Mar 2014.
- ( at 18h48 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.6.2
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20140305

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : no
  Parallel I/O   : no
  Time tracing   : no
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU

 HAVE_FC_ALLOCATABLE_DT...  HAVE_FC_COMMAND_ARGUMENT           HAVE_FC_CPUTIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG

     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES              HAVE_FC_NULL

         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM          HAVE_FORTRAN2003

        HAVE_LIBPAW_ABINIT               HAVE_LINALG        HAVE_LINALG_SERIAL

                HAVE_NUMPY             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT         HAVE_TIMER_SERIAL              USE_MACROAVE

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tgw1_1.in
- output file    -> tgw1_x.outB
- root for input  files -> tgw1i
- root for output files -> tgw1o

-instrng :   108 lines of input have been read from file tgw1_1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../../Psps_for_tests/14si.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2

 inpspheads : deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
 getkgrid : length of smallest supercell vector (bohr)=    4.086800E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
 getkgrid : length of smallest supercell vector (bohr)=    4.086800E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
 getkgrid : length of smallest supercell vector (bohr)=    4.086800E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    4.086800E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 getkgrid : length of smallest supercell vector (bohr)=    4.086800E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     2.10
 setshells : ecut_trial =     3.60

--- !COMMENT
message: |
    One of the three variables ecutsigx, npwsigx, or nshsigx
     must be non-null. Returning.
src_file: m_gsphere.F90
src_line: 2588
...

 getkgrid : length of smallest supercell vector (bohr)=    4.086800E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     5.00

--- !WARNING
message: |
    The value ecutwfn=  0.500000E+01 given in the input file leads to
     the same values for nshwfn and npwwfn as ecutwfn=  0.453831E+01
     This value will be adopted for the calculation.

src_file: m_gsphere.F90
src_line: 2707
...


--- !COMMENT
message: |
    One of the three variables ecuteps, npweps, or nsheps
     must be non-null. Returning.
src_file: m_gsphere.F90
src_line: 2588
...

 setshells : ecut_trial =     6.00

--- !WARNING
message: |
    The value ecutsigx=  0.600000E+01 given in the input file leads to
     the same values for nshsigx and npwsigx as ecutsigx=  0.510560E+01
     This value will be adopted for the calculation.

src_file: m_gsphere.F90
src_line: 2707
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=10 and mkmem  = 10, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=10 and mkqmem = 10, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=10 and mk1mem = 10, ground state wf handled in core.

--- !WARNING
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 1
src_file: getng.F90
src_line: 200
...

 For input ecut=  8.000000E+00 best grid ngfft=      20      20      20
       max ecut=  9.454813E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     295
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=10 and mkmem  = 10, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=10 and mkqmem = 10, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=10 and mk1mem = 10, ground state wf handled in core.
 For input ecut=  2.080059E+00 best grid ngfft=      10      10      10
       max ecut=  2.410977E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    10   10   10
  Augmented FFT divisions ...................    11   11   10
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      42
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=10 and mkmem  = 10, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=10 and mkqmem = 10, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=10 and mk1mem = 10, ground state wf handled in core.
 For input ecut=  4.538310E+00 best grid ngfft=      15      15      15
       max ecut=  4.680133E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=     128

 DATASET    1 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        40  mffmem =         1
P  mgfft =        20   mkmem =        10 mpssoang=         3     mpw =       295
  mqgrid =      3001   natom =         2    nfft =      8000    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       4.425 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      1.803 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : cg(disk), with      1.8025 MBytes.
 memana : allocated an array of      1.803 Mbytes, for testing purposes.
 memana : allocated       4.425 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        17  mffmem =         1
P  mgfft =        10   mkmem =        10 mpssoang=         3     mpw =        42
  mqgrid =      3001   natom =         2    nfft =      1000    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       0.963 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.111 Mbytes ; DEN or POT disk file :      0.010 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.1109 MBytes.
 memana : allocated an array of      0.111 Mbytes, for testing purposes.
 memana : allocated       0.963 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         5 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        30  mffmem =         1
P  mgfft =        15   mkmem =        10 mpssoang=         3     mpw =       128
  mqgrid =      3001   natom =         2    nfft =      3375    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         1  occopt =         1
================================================================================
P This job should need less than                       2.022 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.588 Mbytes ; DEN or POT disk file :      0.028 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.5879 MBytes.
 memana : allocated an array of      0.588 Mbytes, for testing purposes.
 memana : allocated       2.022 Mbytes, for testing purposes.
 The job will continue.
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
              amu      2.80855000E+01
             awtr1          1
             awtr2          0
             awtr3          1
           diemac      1.20000000E+01
             ecut1     8.00000000E+00 Hartree
             ecut2     2.08005893E+00 Hartree
             ecut3     4.53831040E+00 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     3.59282906E+00 Hartree
          ecuteps3     0.00000000E+00 Hartree
         ecutsigx1     0.00000000E+00 Hartree
         ecutsigx2     0.00000000E+00 Hartree
         ecutsigx3     5.10559920E+00 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     2.08005893E+00 Hartree
          ecutwfn3     4.53831040E+00 Hartree
           getkss1          0
           getkss2         -1
           getkss3         -2
           getscr1          0
           getscr2          0
           getscr3         -1
         icutcoul1          6
         icutcoul2          6
         icutcoul3          3
             iscf           5
           jdtset        1    2    3
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
         kptrlatt        4   -4    4     -4    4    4     -4   -4    4
          kptrlen      4.08680000E+01
          kssform1          3
          kssform2          1
          kssform3          1
P           mkmem          10
            natom           2
            nband1         40
            nband2         17
            nband3         30
         nbandkss1         35
         nbandkss2          0
         nbandkss3          0
           nbdbuf1          5
           nbdbuf2          0
           nbdbuf3          0
           ndtset           3
            ngfft1         20      20      20
            ngfft2         10      10      10
            ngfft3         15      15      15
             nkpt          10
           npweps1          0
           npweps2         89
           npweps3          0
          npwsigx1          0
          npwsigx2          0
          npwsigx3        169
           npwwfn1          0
           npwwfn2         51
           npwwfn3        137
           nsheps1          0
           nsheps2         12
           nsheps3          0
          nshsigx1          0
          nshsigx2          0
          nshsigx3         19
            nstep         200
             nsym          24
           ntypat           1
              occ1     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
              occ2     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          3
        optdriver3          4
           ppmfrq1     0.00000000E+00 Hartree
           ppmfrq2     6.13713734E-01 Hartree
           ppmfrq3     0.00000000E+00 Hartree
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         227
        symmorphi           0
           symrel      1  0  0   0  1  0   0  0  1       0 -1  1   0 -1  0   1 -1  0
                      -1  0  0  -1  0  1  -1  1  0       0  1 -1   1  0 -1   0  0 -1
                      -1  0  0  -1  1  0  -1  0  1       0 -1  1   1 -1  0   0 -1  0
                       1  0  0   0  0  1   0  1  0       0  1 -1   0  0 -1   1  0 -1
                      -1  0  1  -1  1  0  -1  0  0       0 -1  0   1 -1  0   0 -1  1
                       1  0 -1   0  0 -1   0  1 -1       0  1  0   0  0  1   1  0  0
                       1  0 -1   0  1 -1   0  0 -1       0 -1  0   0 -1  1   1 -1  0
                      -1  0  1  -1  0  0  -1  1  0       0  1  0   1  0  0   0  0  1
                       0  0 -1   0  1 -1   1  0 -1       1 -1  0   0 -1  1   0 -1  0
                       0  0  1   1  0  0   0  1  0      -1  1  0  -1  0  0  -1  0  1
                       0  0  1   0  1  0   1  0  0       1 -1  0   0 -1  0   0 -1  1
                       0  0 -1   1  0 -1   0  1 -1      -1  1  0  -1  0  1  -1  0  0
           tolwfr1     1.00000000E-18
           tolwfr2     0.00000000E+00
           tolwfr3     0.00000000E+00
            typat      1  1
              wtk        0.09375    0.09375    0.09375    0.18750    0.09375    0.09375
                         0.09375    0.18750    0.03125    0.03125
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3516508850E+00  1.3516508850E+00  1.3516508850E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5542500000E+00  2.5542500000E+00  2.5542500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       14.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1:  0.22204460E-15
            Smallest positive number:                       0.22250739-307
            Largest representable number:                   0.17976931+309
 INTEGER:   Data type name: INTEGER(default) 
            Kind value: 4
            Bit size:   32
            Largest representable number: 2147483647
 LOGICAL:   Data type name: LOGICAL 
            Kind value: 4
 CHARACTER: Data type name: CHARACTER             Kind value: 1

  ==== OpenMP parallelism is OFF ====
 
  MPI-IO support is OFF

================================================================================
== DATASET  1 ==================================================================
-   nproc =    1


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426
- pspini: atom type   1  psp file is ../../Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    ../../Psps_for_tests/14si.pspnc
-  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
- 14.00000   4.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.907  14.692    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.617   4.181    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.80626423934776    0.22824404341771    1.17378968127746   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.43386982
         --- l  ekb(1:nproj) -->
             0    3.287949
             1    1.849886
 pspatm: atomic psp has been read  and splines computed

   2.29419171E+01                                ecore*ucvol(ha*bohr**3)
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 wfconv:    40 bands initialized randomly with npw=   295, for ikpt=     1
 wfconv:    40 bands initialized randomly with npw=   283, for ikpt=     2
 wfconv:    40 bands initialized randomly with npw=   292, for ikpt=     3
 wfconv:    40 bands initialized randomly with npw=   289, for ikpt=     4
 wfconv:    40 bands initialized randomly with npw=   292, for ikpt=     5
 wfconv:    40 bands initialized randomly with npw=   286, for ikpt=     6
 wfconv:    40 bands initialized randomly with npw=   291, for ikpt=     7
 wfconv:    40 bands initialized randomly with npw=   286, for ikpt=     8
 wfconv:    40 bands initialized randomly with npw=   295, for ikpt=     9
 wfconv:    40 bands initialized randomly with npw=   287, for ikpt=    10

_setup2: Arith. and geom. avg. npw (full set) are     289.031     289.009
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  20  20  20
         ecut(hartree)=      8.000   => boxcut(ratio)=   2.17426

 ewald : nr and ng are    3 and   11

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  1.80E-01  1.54E-01  1.58E-01  1.13E-01  1.80E-01  2.16E-01  2.19E-01  2.32E-01
 res:  2.28E-01  3.42E-01  2.36E-01  2.00E-01  1.95E-01  2.96E-01  2.55E-01  2.35E-01
 res:  2.33E-01  2.70E-01  2.96E-01  2.38E-01  2.14E-01  2.27E-01  1.95E-01  1.58E-01
 res:  1.42E-01  1.16E-01  1.25E-01  1.80E-01  1.72E-01  1.14E-01  1.69E-01  1.07E-01
 res:  1.42E-01  1.22E-01  8.82E-02  1.17E-01  8.93E-02  1.33E-01  1.36E-01  9.84E-02
 ene: -2.15E-01  7.88E-02  1.50E-01  1.62E-01  2.89E-01  3.43E-01  3.79E-01  3.93E-01
 ene:  4.92E-01  5.24E-01  5.89E-01  6.50E-01  7.13E-01  7.59E-01  8.70E-01  8.79E-01
 ene:  9.38E-01  1.01E+00  1.02E+00  1.08E+00  1.18E+00  1.22E+00  1.26E+00  1.33E+00
 ene:  1.39E+00  1.41E+00  1.42E+00  1.43E+00  1.46E+00  1.50E+00  1.53E+00  1.56E+00
 ene:  1.63E+00  1.64E+00  1.66E+00  1.73E+00  1.77E+00  1.80E+00  1.84E+00  1.91E+00
 res:  7.67E-05  8.92E-05  1.36E-04  4.32E-04  1.53E-04  2.26E-04  4.27E-04  4.73E-04
 res:  6.13E-04  3.93E-04  5.18E-04  4.73E-04  5.88E-04  5.53E-04  6.96E-04  4.39E-04
 res:  6.03E-04  3.75E-04  7.11E-04  1.35E-03  5.70E-04  1.10E-03  9.28E-04  1.22E-03
 res:  5.22E-04  8.74E-04  2.18E-03  7.66E-04  6.65E-04  1.18E-03  6.43E-04  8.85E-04
 res:  4.01E-04  9.80E-04  1.69E-03  1.73E-03  3.24E-03  3.80E-03  6.01E-03  1.03E-02
 ene: -2.19E-01  7.38E-02  1.43E-01  1.46E-01  2.81E-01  3.35E-01  3.64E-01  3.79E-01
 ene:  4.73E-01  5.08E-01  5.78E-01  6.37E-01  6.96E-01  7.42E-01  8.53E-01  8.68E-01
 ene:  9.22E-01  9.96E-01  1.00E+00  1.05E+00  1.16E+00  1.20E+00  1.24E+00  1.30E+00
 ene:  1.37E+00  1.38E+00  1.39E+00  1.43E+00  1.45E+00  1.48E+00  1.52E+00  1.54E+00
 ene:  1.61E+00  1.63E+00  1.63E+00  1.70E+00  1.71E+00  1.74E+00  1.78E+00  1.82E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =36
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1933E-01  7.3816E-02  1.4347E-01  1.4624E-01  2.8096E-01  3.3525E-01
  3.6352E-01  3.7929E-01  4.7341E-01  5.0803E-01  5.7773E-01  6.3743E-01
  6.9609E-01  7.4223E-01  8.5300E-01  8.6766E-01  9.2218E-01  9.9637E-01
  1.0004E+00  1.0521E+00  1.1649E+00  1.1985E+00  1.2445E+00  1.3027E+00
  1.3707E+00  1.3795E+00  1.3920E+00  1.4258E+00  1.4483E+00  1.4769E+00
  1.5162E+00  1.5373E+00  1.6145E+00  1.6255E+00  1.6271E+00  1.6983E+00
  1.7051E+00  1.7384E+00  1.7786E+00  1.8174E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  2.45E-01  1.45E-01  1.72E-01  1.41E-01  2.04E-01  1.68E-01  2.44E-01  2.08E-01
 res:  2.10E-01  2.93E-01  2.23E-01  1.87E-01  1.73E-01  2.87E-01  2.16E-01  1.59E-01
 res:  1.41E-01  2.23E-01  1.65E-01  2.54E-01  1.82E-01  1.96E-01  1.51E-01  1.72E-01
 res:  1.24E-01  2.09E-01  1.28E-01  1.66E-01  2.03E-01  1.61E-01  1.43E-01  1.78E-01
 res:  2.16E-01  1.85E-01  1.55E-01  1.53E-01  1.57E-01  1.48E-01  1.55E-01  8.57E-02
 ene: -1.53E-01 -4.60E-02  1.23E-01  1.44E-01  2.90E-01  3.47E-01  3.63E-01  4.87E-01
 ene:  5.54E-01  6.07E-01  6.35E-01  6.52E-01  6.72E-01  7.73E-01  8.85E-01  9.42E-01
 ene:  9.62E-01  9.99E-01  1.03E+00  1.06E+00  1.13E+00  1.18E+00  1.19E+00  1.22E+00
 ene:  1.25E+00  1.32E+00  1.33E+00  1.35E+00  1.43E+00  1.45E+00  1.48E+00  1.49E+00
 ene:  1.59E+00  1.63E+00  1.65E+00  1.72E+00  1.77E+00  1.87E+00  1.93E+00  2.04E+00
 res:  1.51E-04  1.49E-04  3.63E-04  3.33E-04  2.42E-04  4.36E-04  3.30E-04  3.38E-04
 res:  6.05E-04  5.16E-04  2.70E-04  8.53E-04  9.24E-04  1.11E-03  2.63E-04  2.01E-04
 res:  2.50E-04  4.88E-04  6.63E-04  1.80E-03  1.17E-03  8.23E-04  6.87E-04  3.87E-04
 res:  6.30E-04  2.70E-04  6.78E-04  1.89E-03  7.21E-04  7.67E-04  7.48E-04  1.39E-03
 res:  1.08E-03  1.61E-03  7.43E-04  1.70E-03  2.26E-03  5.35E-03  5.35E-03  1.09E-02
 ene: -1.59E-01 -5.30E-02  1.10E-01  1.34E-01  2.83E-01  3.31E-01  3.54E-01  4.75E-01
 ene:  5.40E-01  5.92E-01  6.26E-01  6.33E-01  6.58E-01  7.53E-01  8.78E-01  9.37E-01
 ene:  9.55E-01  9.85E-01  1.02E+00  1.03E+00  1.11E+00  1.17E+00  1.18E+00  1.22E+00
 ene:  1.24E+00  1.31E+00  1.31E+00  1.32E+00  1.42E+00  1.43E+00  1.46E+00  1.47E+00
 ene:  1.57E+00  1.59E+00  1.63E+00  1.68E+00  1.73E+00  1.80E+00  1.87E+00  1.93E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =72
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.5868E-01 -5.2979E-02  1.0963E-01  1.3419E-01  2.8261E-01  3.3133E-01
  3.5411E-01  4.7506E-01  5.4033E-01  5.9158E-01  6.2647E-01  6.3285E-01
  6.5803E-01  7.5254E-01  8.7789E-01  9.3670E-01  9.5488E-01  9.8544E-01
  1.0165E+00  1.0323E+00  1.1126E+00  1.1696E+00  1.1834E+00  1.2174E+00
  1.2425E+00  1.3061E+00  1.3119E+00  1.3181E+00  1.4176E+00  1.4314E+00
  1.4599E+00  1.4696E+00  1.5722E+00  1.5924E+00  1.6316E+00  1.6841E+00
  1.7332E+00  1.8020E+00  1.8655E+00  1.9285E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  1.73E-01  1.62E-01  1.73E-01  1.78E-01  2.20E-01  2.16E-01  1.88E-01  1.51E-01
 res:  1.64E-01  1.71E-01  2.06E-01  2.58E-01  1.87E-01  2.57E-01  2.40E-01  2.29E-01
 res:  1.84E-01  2.23E-01  2.05E-01  2.52E-01  2.00E-01  2.07E-01  1.39E-01  1.73E-01
 res:  1.58E-01  1.26E-01  2.37E-01  1.70E-01  1.48E-01  1.78E-01  1.58E-01  2.07E-01
 res:  1.65E-01  1.50E-01  1.54E-01  7.21E-02  1.14E-01  1.20E-01  1.31E-01  9.60E-02
 ene: -1.75E-01  1.42E-02  1.02E-01  1.19E-01  2.63E-01  3.22E-01  4.30E-01  4.42E-01
 ene:  5.77E-01  5.93E-01  6.53E-01  7.06E-01  7.24E-01  7.68E-01  8.06E-01  8.54E-01
 ene:  8.97E-01  9.38E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.20E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.53E+00  1.56E+00  1.58E+00
 ene:  1.60E+00  1.62E+00  1.69E+00  1.70E+00  1.78E+00  1.81E+00  1.88E+00  1.96E+00
 res:  1.35E-04  6.91E-05  1.06E-04  9.69E-05  2.65E-04  2.29E-04  3.04E-04  2.88E-04
 res:  1.70E-04  6.87E-04  6.43E-04  3.58E-04  2.69E-04  6.24E-04  3.68E-04  4.42E-04
 res:  6.25E-04  3.46E-04  6.93E-04  4.28E-04  4.46E-04  2.92E-04  4.35E-04  3.05E-04
 res:  6.26E-04  8.03E-04  6.21E-04  2.71E-04  6.95E-04  6.11E-04  6.29E-04  6.94E-04
 res:  9.60E-04  2.30E-03  9.25E-04  9.00E-04  4.67E-03  4.10E-03  5.54E-03  2.08E-02
 ene: -1.81E-01  1.02E-02  9.65E-02  1.12E-01  2.54E-01  3.12E-01  4.19E-01  4.30E-01
 ene:  5.68E-01  5.73E-01  6.36E-01  6.92E-01  7.16E-01  7.50E-01  7.97E-01  8.41E-01
 ene:  8.83E-01  9.27E-01  1.01E+00  1.10E+00  1.13E+00  1.18E+00  1.18E+00  1.21E+00
 ene:  1.27E+00  1.29E+00  1.33E+00  1.42E+00  1.45E+00  1.51E+00  1.54E+00  1.56E+00
 ene:  1.57E+00  1.58E+00  1.67E+00  1.68E+00  1.72E+00  1.76E+00  1.80E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =108
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8092E-01  1.0197E-02  9.6496E-02  1.1181E-01  2.5392E-01  3.1239E-01
  4.1854E-01  4.3033E-01  5.6795E-01  5.7289E-01  6.3597E-01  6.9205E-01
  7.1557E-01  7.5029E-01  7.9653E-01  8.4077E-01  8.8315E-01  9.2745E-01
  1.0120E+00  1.1002E+00  1.1333E+00  1.1772E+00  1.1848E+00  1.2150E+00
  1.2662E+00  1.2886E+00  1.3261E+00  1.4224E+00  1.4452E+00  1.5126E+00
  1.5443E+00  1.5592E+00  1.5750E+00  1.5795E+00  1.6654E+00  1.6802E+00
  1.7162E+00  1.7590E+00  1.7965E+00  1.8491E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  1.35E-01  2.35E-01  1.49E-01  1.90E-01  1.10E-01  1.84E-01  1.71E-01  2.39E-01
 res:  1.47E-01  1.79E-01  1.25E-01  2.20E-01  1.48E-01  2.22E-01  1.56E-01  2.13E-01
 res:  2.39E-01  1.96E-01  1.48E-01  1.75E-01  1.35E-01  1.53E-01  2.13E-01  1.46E-01
 res:  1.54E-01  1.82E-01  2.06E-01  2.20E-01  1.63E-01  1.57E-01  1.42E-01  1.46E-01
 res:  1.34E-01  1.11E-01  1.39E-01  1.12E-01  1.07E-01  1.03E-01  9.97E-02  1.02E-01
 ene: -1.61E-01 -1.23E-02  7.90E-02  1.32E-01  3.13E-01  3.40E-01  3.94E-01  4.27E-01
 ene:  5.46E-01  5.74E-01  6.59E-01  6.87E-01  7.40E-01  7.80E-01  8.55E-01  8.89E-01
 ene:  9.16E-01  9.88E-01  1.04E+00  1.06E+00  1.10E+00  1.17E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.38E+00  1.41E+00  1.45E+00  1.49E+00  1.55E+00
 ene:  1.56E+00  1.66E+00  1.70E+00  1.74E+00  1.77E+00  1.81E+00  1.89E+00  1.96E+00
 res:  7.82E-05  2.48E-04  1.17E-04  2.97E-04  9.47E-05  2.14E-04  1.61E-04  2.72E-04
 res:  2.94E-04  3.35E-04  2.31E-04  4.62E-04  3.98E-04  6.99E-04  2.67E-04  6.68E-04
 res:  3.80E-04  2.14E-04  1.13E-03  7.36E-04  6.23E-04  3.71E-04  1.07E-03  4.44E-04
 res:  1.87E-04  5.70E-04  6.62E-04  7.64E-04  4.59E-04  8.55E-04  5.50E-04  8.11E-04
 res:  1.03E-03  4.51E-04  3.26E-03  1.40E-03  3.12E-03  5.87E-03  8.96E-03  1.26E-02
 ene: -1.66E-01 -2.16E-02  7.35E-02  1.22E-01  3.08E-01  3.33E-01  3.88E-01  4.18E-01
 ene:  5.34E-01  5.61E-01  6.51E-01  6.74E-01  7.27E-01  7.65E-01  8.46E-01  8.71E-01
 ene:  9.04E-01  9.82E-01  1.01E+00  1.05E+00  1.09E+00  1.16E+00  1.17E+00  1.21E+00
 ene:  1.27E+00  1.30E+00  1.35E+00  1.37E+00  1.40E+00  1.44E+00  1.48E+00  1.53E+00
 ene:  1.55E+00  1.64E+00  1.66E+00  1.71E+00  1.73E+00  1.77E+00  1.79E+00  1.86E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =144
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.6558E-01 -2.1633E-02  7.3524E-02  1.2215E-01  3.0827E-01  3.3286E-01
  3.8794E-01  4.1818E-01  5.3438E-01  5.6141E-01  6.5096E-01  6.7366E-01
  7.2688E-01  7.6504E-01  8.4580E-01  8.7134E-01  9.0441E-01  9.8199E-01
  1.0107E+00  1.0471E+00  1.0935E+00  1.1576E+00  1.1708E+00  1.2050E+00
  1.2691E+00  1.3007E+00  1.3548E+00  1.3672E+00  1.4011E+00  1.4362E+00
  1.4821E+00  1.5298E+00  1.5496E+00  1.6409E+00  1.6573E+00  1.7101E+00
  1.7337E+00  1.7655E+00  1.7932E+00  1.8600E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  1.67E-01  1.55E-01  1.72E-01  1.51E-01  1.64E-01  1.89E-01  2.35E-01  1.96E-01
 res:  1.55E-01  1.89E-01  1.91E-01  1.69E-01  2.15E-01  2.45E-01  2.28E-01  2.16E-01
 res:  2.19E-01  1.62E-01  1.53E-01  2.71E-01  1.55E-01  1.92E-01  1.89E-01  1.36E-01
 res:  1.75E-01  1.44E-01  1.79E-01  1.84E-01  1.25E-01  1.36E-01  1.58E-01  1.07E-01
 res:  1.03E-01  1.24E-01  1.19E-01  1.20E-01  1.13E-01  9.07E-02  1.04E-01  6.96E-02
 ene: -1.97E-01  3.16E-02  1.18E-01  1.73E-01  3.12E-01  3.47E-01  3.52E-01  4.41E-01
 ene:  4.59E-01  5.81E-01  5.92E-01  6.79E-01  7.34E-01  7.87E-01  8.33E-01  8.80E-01
 ene:  9.16E-01  1.02E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.30E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.50E+00  1.52E+00  1.60E+00
 ene:  1.62E+00  1.65E+00  1.67E+00  1.69E+00  1.70E+00  1.73E+00  1.81E+00  1.87E+00
 res:  4.30E-05  2.13E-04  1.99E-04  2.64E-04  3.38E-04  1.49E-04  2.77E-04  2.15E-04
 res:  3.70E-04  4.43E-04  5.26E-04  4.59E-04  5.74E-04  3.36E-04  1.02E-03  5.95E-04
 res:  6.91E-04  2.22E-04  8.15E-04  5.92E-04  9.46E-04  6.23E-04  5.61E-04  3.07E-04
 res:  3.34E-04  4.13E-04  3.79E-04  3.46E-04  5.75E-04  5.24E-04  1.67E-03  8.26E-04
 res:  1.25E-03  5.67E-04  2.10E-03  1.59E-03  3.33E-03  1.95E-03  4.13E-03  7.22E-03
 ene: -2.01E-01  2.34E-02  1.09E-01  1.61E-01  3.00E-01  3.38E-01  3.43E-01  4.33E-01
 ene:  4.45E-01  5.67E-01  5.75E-01  6.64E-01  7.21E-01  7.78E-01  8.12E-01  8.64E-01
 ene:  9.02E-01  1.01E+00  1.02E+00  1.05E+00  1.16E+00  1.18E+00  1.20E+00  1.30E+00
 ene:  1.30E+00  1.34E+00  1.36E+00  1.40E+00  1.43E+00  1.48E+00  1.49E+00  1.58E+00
 ene:  1.59E+00  1.63E+00  1.63E+00  1.65E+00  1.67E+00  1.69E+00  1.75E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =180
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.0078E-01  2.3377E-02  1.0922E-01  1.6144E-01  3.0023E-01  3.3778E-01
  3.4251E-01  4.3306E-01  4.4484E-01  5.6686E-01  5.7508E-01  6.6426E-01
  7.2149E-01  7.7796E-01  8.1156E-01  8.6385E-01  9.0195E-01  1.0135E+00
  1.0168E+00  1.0481E+00  1.1614E+00  1.1800E+00  1.2049E+00  1.2956E+00
  1.2974E+00  1.3424E+00  1.3594E+00  1.3968E+00  1.4315E+00  1.4815E+00
  1.4883E+00  1.5800E+00  1.5949E+00  1.6295E+00  1.6325E+00  1.6507E+00
  1.6714E+00  1.6942E+00  1.7537E+00  1.8064E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  1.99E-01  1.67E-01  2.21E-01  1.20E-01  2.59E-01  2.11E-01  2.19E-01  1.84E-01
 res:  2.26E-01  1.77E-01  1.49E-01  2.28E-01  1.82E-01  1.74E-01  2.11E-01  2.12E-01
 res:  1.71E-01  1.69E-01  1.65E-01  2.62E-01  1.91E-01  1.34E-01  1.89E-01  2.19E-01
 res:  1.70E-01  1.78E-01  1.50E-01  1.56E-01  1.80E-01  1.49E-01  1.68E-01  1.68E-01
 res:  1.51E-01  1.24E-01  1.27E-01  1.50E-01  1.52E-01  1.06E-01  1.04E-01  9.68E-02
 ene: -1.33E-01 -4.21E-02  5.59E-02  1.30E-01  2.79E-01  4.04E-01  4.17E-01  4.66E-01
 ene:  5.04E-01  5.09E-01  6.80E-01  7.60E-01  7.63E-01  8.02E-01  8.22E-01  8.94E-01
 ene:  9.31E-01  9.57E-01  1.03E+00  1.04E+00  1.13E+00  1.15E+00  1.17E+00  1.19E+00
 ene:  1.25E+00  1.28E+00  1.29E+00  1.33E+00  1.45E+00  1.49E+00  1.52E+00  1.54E+00
 ene:  1.59E+00  1.61E+00  1.64E+00  1.74E+00  1.81E+00  1.86E+00  1.90E+00  2.00E+00
 res:  1.36E-04  2.11E-04  1.43E-04  1.05E-04  1.31E-04  6.22E-05  3.49E-04  1.54E-04
 res:  1.29E-04  3.95E-04  2.01E-04  1.86E-04  3.93E-04  2.46E-04  4.18E-04  5.01E-04
 res:  7.40E-04  6.06E-04  7.07E-04  7.36E-04  3.49E-04  3.10E-04  4.24E-04  3.19E-04
 res:  7.47E-04  6.93E-04  5.20E-04  9.16E-04  3.15E-04  5.59E-04  3.14E-04  4.65E-04
 res:  1.35E-03  5.60E-04  1.86E-03  2.10E-03  1.76E-03  5.23E-03  5.89E-03  1.20E-02
 ene: -1.40E-01 -5.08E-02  5.00E-02  1.23E-01  2.73E-01  4.00E-01  4.04E-01  4.58E-01
 ene:  4.95E-01  4.99E-01  6.74E-01  7.50E-01  7.52E-01  7.91E-01  8.11E-01  8.81E-01
 ene:  9.15E-01  9.43E-01  1.01E+00  1.03E+00  1.13E+00  1.14E+00  1.16E+00  1.18E+00
 ene:  1.23E+00  1.27E+00  1.28E+00  1.32E+00  1.44E+00  1.48E+00  1.51E+00  1.53E+00
 ene:  1.56E+00  1.59E+00  1.61E+00  1.69E+00  1.78E+00  1.78E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =216
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.4025E-01 -5.0762E-02  4.9990E-02  1.2287E-01  2.7296E-01  4.0010E-01
  4.0445E-01  4.5814E-01  4.9477E-01  4.9869E-01  6.7390E-01  7.5029E-01
  7.5238E-01  7.9104E-01  8.1149E-01  8.8119E-01  9.1494E-01  9.4311E-01
  1.0098E+00  1.0274E+00  1.1251E+00  1.1375E+00  1.1609E+00  1.1829E+00
  1.2298E+00  1.2653E+00  1.2780E+00  1.3196E+00  1.4445E+00  1.4758E+00
  1.5077E+00  1.5289E+00  1.5607E+00  1.5944E+00  1.6097E+00  1.6921E+00
  1.7761E+00  1.7817E+00  1.8304E+00  1.8728E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  1.64E-01  1.56E-01  1.93E-01  2.84E-01  1.93E-01  1.70E-01  2.22E-01  1.79E-01
 res:  1.94E-01  2.01E-01  2.01E-01  1.30E-01  2.38E-01  2.01E-01  1.97E-01  2.09E-01
 res:  1.98E-01  2.32E-01  2.78E-01  2.00E-01  1.84E-01  1.83E-01  2.00E-01  2.06E-01
 res:  1.65E-01  1.45E-01  1.44E-01  1.60E-01  1.52E-01  1.33E-01  1.37E-01  1.75E-01
 res:  1.72E-01  1.31E-01  1.21E-01  1.18E-01  1.04E-01  1.15E-01  1.20E-01  7.99E-02
 ene: -1.18E-01 -5.42E-02  7.42E-02  1.02E-01  2.47E-01  2.84E-01  5.12E-01  5.20E-01
 ene:  6.05E-01  6.11E-01  6.68E-01  6.76E-01  7.60E-01  7.72E-01  8.05E-01  9.04E-01
 ene:  9.07E-01  9.38E-01  9.87E-01  1.04E+00  1.06E+00  1.08E+00  1.11E+00  1.17E+00
 ene:  1.29E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.49E+00  1.54E+00  1.55E+00
 ene:  1.61E+00  1.67E+00  1.68E+00  1.69E+00  1.76E+00  1.81E+00  1.86E+00  1.89E+00
 res:  1.82E-04  9.24E-05  8.58E-05  1.04E-04  1.86E-04  1.75E-04  2.00E-04  4.09E-04
 res:  2.30E-04  3.08E-04  2.02E-04  2.71E-04  3.61E-04  5.32E-04  1.92E-04  1.29E-04
 res:  2.29E-04  3.39E-04  7.43E-04  2.37E-04  7.58E-04  4.15E-04  7.96E-04  5.32E-04
 res:  5.19E-04  3.51E-04  4.07E-04  1.89E-04  4.34E-04  1.91E-04  2.76E-04  3.59E-04
 res:  1.00E-03  4.34E-04  1.27E-03  2.11E-03  4.37E-03  2.01E-03  4.55E-03  6.03E-03
 ene: -1.26E-01 -5.91E-02  6.96E-02  9.48E-02  2.39E-01  2.77E-01  5.05E-01  5.05E-01
 ene:  5.95E-01  6.01E-01  6.58E-01  6.66E-01  7.48E-01  7.56E-01  7.98E-01  8.98E-01
 ene:  9.01E-01  9.28E-01  9.71E-01  1.03E+00  1.04E+00  1.07E+00  1.10E+00  1.16E+00
 ene:  1.28E+00  1.31E+00  1.38E+00  1.41E+00  1.43E+00  1.48E+00  1.53E+00  1.54E+00
 ene:  1.59E+00  1.64E+00  1.65E+00  1.67E+00  1.70E+00  1.77E+00  1.79E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =252
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.2619E-01 -5.9121E-02  6.9614E-02  9.4783E-02  2.3894E-01  2.7703E-01
  5.0487E-01  5.0535E-01  5.9517E-01  6.0065E-01  6.5821E-01  6.6622E-01
  7.4808E-01  7.5616E-01  7.9831E-01  8.9774E-01  9.0078E-01  9.2812E-01
  9.7088E-01  1.0336E+00  1.0420E+00  1.0697E+00  1.0954E+00  1.1607E+00
  1.2790E+00  1.3139E+00  1.3767E+00  1.4142E+00  1.4317E+00  1.4770E+00
  1.5326E+00  1.5359E+00  1.5913E+00  1.6444E+00  1.6534E+00  1.6705E+00
  1.7041E+00  1.7684E+00  1.7902E+00  1.8368E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  1.83E-01  1.91E-01  2.22E-01  1.67E-01  2.08E-01  1.89E-01  2.33E-01  2.12E-01
 res:  1.87E-01  1.55E-01  2.19E-01  1.97E-01  2.53E-01  1.87E-01  1.73E-01  2.05E-01
 res:  1.91E-01  2.10E-01  1.55E-01  2.22E-01  2.03E-01  1.62E-01  1.97E-01  2.31E-01
 res:  1.84E-01  2.06E-01  1.92E-01  2.08E-01  1.98E-01  1.39E-01  1.69E-01  1.61E-01
 res:  1.08E-01  1.71E-01  1.21E-01  1.20E-01  1.64E-01  1.15E-01  1.39E-01  1.10E-01
 ene: -1.10E-01 -5.67E-02  5.36E-02  9.57E-02  2.98E-01  3.73E-01  4.06E-01  4.82E-01
 ene:  5.19E-01  6.18E-01  6.58E-01  7.41E-01  7.79E-01  8.02E-01  8.66E-01  8.93E-01
 ene:  8.99E-01  9.29E-01  9.98E-01  1.02E+00  1.06E+00  1.11E+00  1.14E+00  1.24E+00
 ene:  1.25E+00  1.28E+00  1.36E+00  1.36E+00  1.40E+00  1.42E+00  1.49E+00  1.59E+00
 ene:  1.64E+00  1.67E+00  1.71E+00  1.78E+00  1.79E+00  1.83E+00  1.90E+00  1.99E+00
 res:  1.66E-04  1.30E-04  6.91E-05  2.48E-04  1.76E-04  2.54E-04  3.68E-04  1.86E-04
 res:  1.99E-04  2.37E-04  3.19E-04  2.36E-04  3.51E-04  5.35E-04  3.58E-04  2.64E-04
 res:  2.24E-04  6.49E-04  4.07E-04  7.05E-04  6.70E-04  3.30E-04  4.88E-04  4.31E-04
 res:  1.15E-03  3.36E-04  7.90E-04  3.88E-04  4.48E-04  4.46E-04  3.41E-04  2.16E-03
 res:  1.27E-03  8.08E-04  2.26E-03  2.61E-03  2.31E-03  4.13E-03  8.13E-03  1.10E-02
 ene: -1.20E-01 -6.26E-02  4.80E-02  8.65E-02  2.92E-01  3.60E-01  3.95E-01  4.75E-01
 ene:  5.09E-01  6.09E-01  6.50E-01  7.35E-01  7.69E-01  7.87E-01  8.56E-01  8.86E-01
 ene:  8.90E-01  9.16E-01  9.87E-01  1.01E+00  1.04E+00  1.10E+00  1.13E+00  1.23E+00
 ene:  1.24E+00  1.27E+00  1.34E+00  1.35E+00  1.39E+00  1.41E+00  1.48E+00  1.55E+00
 ene:  1.62E+00  1.65E+00  1.68E+00  1.73E+00  1.76E+00  1.78E+00  1.79E+00  1.90E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =288
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.2020E-01 -6.2639E-02  4.8007E-02  8.6472E-02  2.9170E-01  3.6031E-01
  3.9548E-01  4.7540E-01  5.0857E-01  6.0894E-01  6.5023E-01  7.3534E-01
  7.6899E-01  7.8735E-01  8.5550E-01  8.8612E-01  8.9039E-01  9.1569E-01
  9.8661E-01  1.0059E+00  1.0445E+00  1.1030E+00  1.1274E+00  1.2281E+00
  1.2405E+00  1.2700E+00  1.3413E+00  1.3549E+00  1.3929E+00  1.4069E+00
  1.4760E+00  1.5532E+00  1.6190E+00  1.6524E+00  1.6828E+00  1.7328E+00
  1.7565E+00  1.7762E+00  1.7946E+00  1.8980E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  2.05E-01  1.12E-01  1.64E-01  1.11E-01  1.95E-01  2.27E-01  1.63E-01  1.69E-01
 res:  1.51E-01  2.59E-01  1.69E-01  2.22E-01  1.87E-01  3.71E-01  2.81E-01  1.77E-01
 res:  2.06E-01  2.71E-01  1.65E-01  3.01E-01  2.03E-01  1.76E-01  1.75E-01  1.64E-01
 res:  1.90E-01  1.93E-01  1.66E-01  1.52E-01  1.11E-01  1.04E-01  1.26E-01  1.22E-01
 res:  1.17E-01  1.39E-01  1.29E-01  8.79E-02  1.05E-01  1.28E-01  7.91E-02  8.54E-02
 ene: -2.33E-01  1.41E-01  1.90E-01  1.97E-01  3.07E-01  3.21E-01  3.27E-01  3.83E-01
 ene:  4.83E-01  4.91E-01  5.37E-01  6.25E-01  6.80E-01  6.90E-01  8.46E-01  9.95E-01
 ene:  1.01E+00  1.02E+00  1.10E+00  1.11E+00  1.18E+00  1.18E+00  1.22E+00  1.31E+00
 ene:  1.38E+00  1.38E+00  1.42E+00  1.50E+00  1.51E+00  1.55E+00  1.60E+00  1.61E+00
 ene:  1.66E+00  1.70E+00  1.73E+00  1.78E+00  1.82E+00  1.85E+00  1.89E+00  1.93E+00
 res:  1.34E-04  1.58E-04  1.92E-04  4.51E-04  3.71E-04  2.86E-04  4.00E-04  4.90E-04
 res:  2.84E-04  4.56E-04  1.83E-04  5.35E-04  4.26E-04  6.00E-04  6.83E-04  4.42E-04
 res:  9.58E-04  9.01E-04  5.28E-04  9.21E-04  6.32E-04  1.02E-03  1.04E-03  9.10E-04
 res:  4.49E-04  3.79E-04  6.07E-04  5.52E-04  1.08E-03  4.40E-04  1.07E-03  1.78E-03
 res:  1.29E-03  3.98E-03  2.04E-03  1.82E-03  5.33E-03  9.12E-03  1.09E-02  5.00E-03
 ene: -2.39E-01  1.33E-01  1.79E-01  1.79E-01  2.93E-01  3.11E-01  3.11E-01  3.68E-01
 ene:  4.74E-01  4.74E-01  5.30E-01  6.07E-01  6.70E-01  6.70E-01  8.28E-01  9.81E-01
 ene:  9.82E-01  9.88E-01  1.09E+00  1.09E+00  1.16E+00  1.16E+00  1.19E+00  1.29E+00
 ene:  1.37E+00  1.37E+00  1.41E+00  1.49E+00  1.49E+00  1.54E+00  1.58E+00  1.58E+00
 ene:  1.64E+00  1.64E+00  1.70E+00  1.75E+00  1.76E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =324
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.3902E-01  1.3298E-01  1.7879E-01  1.7882E-01  2.9252E-01  3.1083E-01
  3.1086E-01  3.6779E-01  4.7411E-01  4.7414E-01  5.2963E-01  6.0736E-01
  6.6950E-01  6.6955E-01  8.2838E-01  9.8144E-01  9.8151E-01  9.8784E-01
  1.0864E+00  1.0865E+00  1.1595E+00  1.1598E+00  1.1940E+00  1.2934E+00
  1.3673E+00  1.3674E+00  1.4063E+00  1.4861E+00  1.4863E+00  1.5404E+00
  1.5771E+00  1.5780E+00  1.6396E+00  1.6408E+00  1.7005E+00  1.7495E+00
  1.7569E+00  1.7642E+00  1.7851E+00  1.8474E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  2.13E-01  2.27E-01  1.64E-01  1.36E-01  1.84E-01  1.72E-01  1.45E-01  2.52E-01
 res:  1.95E-01  1.76E-01  1.96E-01  2.33E-01  2.61E-01  2.27E-01  1.77E-01  1.66E-01
 res:  1.86E-01  2.19E-01  2.50E-01  1.78E-01  1.92E-01  1.93E-01  1.49E-01  1.30E-01
 res:  1.97E-01  1.65E-01  1.72E-01  1.41E-01  1.26E-01  1.53E-01  1.42E-01  1.70E-01
 res:  1.51E-01  1.51E-01  1.20E-01  1.16E-01  1.83E-01  1.46E-01  1.06E-01  8.07E-02
 ene: -1.81E-01 -1.91E-02  1.59E-01  1.66E-01  2.71E-01  3.38E-01  3.53E-01  5.07E-01
 ene:  5.31E-01  5.39E-01  5.70E-01  7.19E-01  7.22E-01  7.30E-01  8.26E-01  9.06E-01
 ene:  9.10E-01  1.07E+00  1.09E+00  1.10E+00  1.12E+00  1.19E+00  1.20E+00  1.26E+00
 ene:  1.27E+00  1.30E+00  1.35E+00  1.42E+00  1.43E+00  1.47E+00  1.48E+00  1.49E+00
 ene:  1.58E+00  1.63E+00  1.75E+00  1.77E+00  1.79E+00  1.80E+00  1.84E+00  1.87E+00
 res:  5.35E-05  1.15E-04  1.72E-04  4.55E-04  2.29E-04  1.52E-04  6.03E-04  1.26E-04
 res:  2.15E-04  4.51E-04  4.86E-04  1.84E-04  2.34E-04  6.41E-04  2.56E-04  3.36E-04
 res:  6.87E-04  1.41E-04  2.85E-04  1.26E-04  1.69E-03  2.23E-04  6.44E-04  2.92E-04
 res:  6.72E-04  2.80E-04  7.14E-04  1.82E-04  6.41E-04  4.23E-04  1.27E-03  8.86E-04
 res:  4.87E-04  2.07E-03  1.53E-03  1.39E-03  1.29E-03  4.21E-03  4.89E-03  3.64E-03
 ene: -1.85E-01 -2.38E-02  1.51E-01  1.51E-01  2.62E-01  3.31E-01  3.31E-01  5.00E-01
 ene:  5.21E-01  5.21E-01  5.55E-01  7.11E-01  7.11E-01  7.16E-01  8.15E-01  8.95E-01
 ene:  8.95E-01  1.06E+00  1.08E+00  1.09E+00  1.09E+00  1.18E+00  1.18E+00  1.25E+00
 ene:  1.25E+00  1.29E+00  1.34E+00  1.41E+00  1.41E+00  1.45E+00  1.45E+00  1.47E+00
 ene:  1.56E+00  1.59E+00  1.73E+00  1.73E+00  1.75E+00  1.76E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =360
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.8476E-01 -2.3831E-02  1.5053E-01  1.5058E-01  2.6201E-01  3.3061E-01
  3.3065E-01  5.0025E-01  5.2100E-01  5.2103E-01  5.5472E-01  7.1132E-01
  7.1134E-01  7.1595E-01  8.1462E-01  8.9468E-01  8.9475E-01  1.0618E+00
  1.0831E+00  1.0915E+00  1.0917E+00  1.1837E+00  1.1838E+00  1.2525E+00
  1.2528E+00  1.2944E+00  1.3366E+00  1.4141E+00  1.4144E+00  1.4504E+00
  1.4508E+00  1.4709E+00  1.5583E+00  1.5939E+00  1.7266E+00  1.7320E+00
  1.7528E+00  1.7552E+00  1.7799E+00  1.8145E+00
 Total charge density [el/Bohr^3]
,     Maximum=    9.2701E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    2.8367E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  1  -8.8676394764192    -8.868E+00 3.984E-03 5.836E+00
 scprqt: <Vxc>= -3.5168537E-01 hartree
 scfcge:
 scfcge:istep-iline_cge-ilinmin lambda      etot             resid
 scfcge: actual     1-0-0   0.0000E+00 -8.867639476419E+00  2.5192E+00

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  2.37E-04  1.71E-04  1.88E-04  1.90E-04  1.81E-04  1.13E-04  1.39E-04  2.06E-04
 res:  1.72E-04  1.23E-04  2.13E-04  1.70E-04  8.73E-05  1.08E-04  2.08E-04  2.39E-04
 res:  1.85E-04  1.95E-04  8.69E-05  2.12E-04  1.17E-04  1.27E-04  1.52E-04  1.85E-04
 res:  1.11E-04  4.35E-05  1.36E-04  9.19E-05  1.41E-04  9.12E-05  6.10E-05  1.11E-04
 res:  6.68E-05  8.35E-05  8.49E-05  1.22E-04  1.78E-04  2.01E-04  2.44E-04  1.65E-03
 ene: -1.98E-01  9.81E-02  1.68E-01  1.71E-01  2.96E-01  3.53E-01  3.82E-01  3.93E-01
 ene:  4.93E-01  5.24E-01  5.83E-01  6.43E-01  7.04E-01  7.51E-01  8.69E-01  8.84E-01
 ene:  9.27E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.75E+00  1.79E+00  1.81E+00
 res:  1.95E-10  3.78E-11  3.52E-10  5.78E-11  1.85E-10  1.51E-10  1.06E-09  2.62E-10
 res:  2.52E-10  6.73E-10  3.38E-10  3.28E-10  5.65E-10  2.14E-10  7.62E-10  1.12E-09
 res:  1.05E-10  6.02E-10  3.66E-09  8.90E-10  1.66E-09  9.05E-09  6.57E-09  2.27E-09
 res:  8.82E-10  1.77E-10  6.62E-11  3.00E-10  3.58E-10  8.97E-10  1.55E-09  1.66E-09
 res:  1.29E-08  5.21E-08  2.00E-08  9.18E-07  2.00E-06  6.40E-06  1.20E-05  8.91E-05
 ene: -1.98E-01  9.81E-02  1.68E-01  1.71E-01  2.96E-01  3.53E-01  3.82E-01  3.93E-01
 ene:  4.93E-01  5.24E-01  5.83E-01  6.43E-01  7.04E-01  7.51E-01  8.69E-01  8.84E-01
 ene:  9.27E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.75E+00  1.79E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =396
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.9809E-01  9.8111E-02  1.6820E-01  1.7111E-01  2.9577E-01  3.5323E-01
  3.8245E-01  3.9276E-01  4.9266E-01  5.2426E-01  5.8322E-01  6.4309E-01
  7.0430E-01  7.5115E-01  8.6950E-01  8.8399E-01  9.2708E-01  1.0123E+00
  1.0196E+00  1.0686E+00  1.1834E+00  1.2189E+00  1.2643E+00  1.3147E+00
  1.3809E+00  1.3982E+00  1.4023E+00  1.4409E+00  1.4607E+00  1.4915E+00
  1.5295E+00  1.5497E+00  1.6222E+00  1.6339E+00  1.6388E+00  1.7091E+00
  1.7107E+00  1.7450E+00  1.7854E+00  1.8137E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  2.19E-04  2.14E-04  2.15E-04  1.80E-04  1.79E-04  1.87E-04  1.43E-04  1.99E-04
 res:  2.42E-04  1.86E-04  2.66E-04  1.15E-04  1.88E-04  1.69E-04  2.24E-04  8.66E-05
 res:  2.04E-04  1.24E-04  1.08E-04  1.32E-04  1.68E-04  1.83E-04  1.21E-04  1.22E-04
 res:  1.71E-04  1.21E-04  8.07E-05  1.19E-04  1.33E-04  3.89E-05  8.32E-05  1.29E-04
 res:  8.38E-05  7.75E-05  1.03E-04  1.04E-04  7.58E-05  3.18E-04  1.84E-03  5.34E-03
 ene: -1.35E-01 -3.29E-02  1.33E-01  1.59E-01  2.98E-01  3.47E-01  3.69E-01  4.89E-01
 ene:  5.49E-01  6.10E-01  6.41E-01  6.50E-01  6.75E-01  7.71E-01  8.92E-01  9.47E-01
 ene:  9.66E-01  1.00E+00  1.04E+00  1.05E+00  1.13E+00  1.18E+00  1.20E+00  1.24E+00
 ene:  1.26E+00  1.31E+00  1.32E+00  1.33E+00  1.43E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.87E+00  1.91E+00
 res:  5.75E-09  1.25E-10  1.81E-09  5.17E-10  2.88E-10  3.82E-10  2.40E-09  1.23E-09
 res:  2.53E-09  2.07E-10  9.51E-10  1.53E-09  4.98E-09  2.15E-09  5.37E-09  1.37E-09
 res:  3.95E-10  2.33E-09  9.67E-10  4.25E-09  7.46E-09  6.00E-09  1.63E-09  2.58E-08
 res:  1.39E-08  1.14E-08  7.08E-09  3.96E-09  1.96E-09  9.24E-10  1.16E-09  7.90E-09
 res:  1.26E-08  5.22E-09  1.13E-08  1.78E-07  4.36E-07  2.53E-05  4.85E-04  2.73E-03
 ene: -1.35E-01 -3.29E-02  1.33E-01  1.59E-01  2.98E-01  3.47E-01  3.69E-01  4.89E-01
 ene:  5.49E-01  6.10E-01  6.41E-01  6.50E-01  6.75E-01  7.71E-01  8.92E-01  9.47E-01
 ene:  9.66E-01  1.00E+00  1.04E+00  1.05E+00  1.13E+00  1.18E+00  1.20E+00  1.24E+00
 ene:  1.26E+00  1.31E+00  1.32E+00  1.33E+00  1.43E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.89E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =432
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.3546E-01 -3.2871E-02  1.3257E-01  1.5921E-01  2.9756E-01  3.4671E-01
  3.6908E-01  4.8920E-01  5.4862E-01  6.0998E-01  6.4135E-01  6.5014E-01
  6.7517E-01  7.7074E-01  8.9209E-01  9.4741E-01  9.6641E-01  1.0002E+00
  1.0353E+00  1.0462E+00  1.1272E+00  1.1753E+00  1.1954E+00  1.2372E+00
  1.2567E+00  1.3093E+00  1.3221E+00  1.3273E+00  1.4262E+00  1.4526E+00
  1.4690E+00  1.4808E+00  1.5801E+00  1.6019E+00  1.6398E+00  1.6936E+00
  1.7417E+00  1.8139E+00  1.8629E+00  1.8939E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  2.22E-04  1.57E-04  2.22E-04  1.97E-04  1.95E-04  1.92E-04  1.64E-04  1.44E-04
 res:  1.47E-04  9.92E-05  2.25E-04  1.45E-04  2.20E-04  2.37E-04  1.45E-04  1.52E-04
 res:  1.22E-04  1.21E-04  1.83E-04  1.45E-04  1.85E-04  1.46E-04  2.22E-04  1.39E-04
 res:  1.13E-04  2.00E-04  1.45E-04  8.97E-05  7.64E-05  8.14E-05  5.51E-05  9.27E-05
 res:  1.26E-04  1.36E-04  1.45E-04  1.28E-04  2.66E-04  2.62E-04  2.29E-03  1.36E-03
 ene: -1.59E-01  3.50E-02  1.18E-01  1.35E-01  2.66E-01  3.24E-01  4.38E-01  4.49E-01
 ene:  5.89E-01  5.91E-01  6.46E-01  7.10E-01  7.23E-01  7.66E-01  8.05E-01  8.48E-01
 ene:  9.01E-01  9.45E-01  1.03E+00  1.11E+00  1.15E+00  1.19E+00  1.20E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.44E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.85E+00
 res:  7.96E-10  8.16E-11  8.04E-11  2.62E-10  2.65E-10  4.96E-10  6.64E-10  2.15E-09
 res:  8.01E-10  3.38E-09  8.29E-10  9.25E-10  8.54E-10  6.72E-10  1.30E-08  1.02E-09
 res:  4.18E-09  9.94E-10  1.78E-09  1.36E-09  2.55E-09  6.36E-09  3.76E-09  1.47E-09
 res:  9.80E-09  8.23E-10  7.80E-09  1.35E-09  2.15E-09  2.26E-09  2.12E-09  1.88E-08
 res:  5.10E-08  1.56E-08  4.83E-08  3.98E-07  1.75E-06  1.05E-05  1.06E-04  1.18E-04
 ene: -1.59E-01  3.50E-02  1.18E-01  1.35E-01  2.66E-01  3.24E-01  4.38E-01  4.49E-01
 ene:  5.89E-01  5.91E-01  6.46E-01  7.10E-01  7.23E-01  7.66E-01  8.05E-01  8.48E-01
 ene:  9.01E-01  9.45E-01  1.03E+00  1.11E+00  1.15E+00  1.19E+00  1.20E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.44E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =468
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.5900E-01  3.5030E-02  1.1780E-01  1.3506E-01  2.6606E-01  3.2357E-01
  4.3831E-01  4.4942E-01  5.8886E-01  5.9100E-01  6.4566E-01  7.0970E-01
  7.2306E-01  7.6613E-01  8.0474E-01  8.4822E-01  9.0108E-01  9.4514E-01
  1.0280E+00  1.1106E+00  1.1465E+00  1.1922E+00  1.1966E+00  1.2248E+00
  1.2813E+00  1.3030E+00  1.3397E+00  1.4355E+00  1.4574E+00  1.5231E+00
  1.5525E+00  1.5732E+00  1.5905E+00  1.5919E+00  1.6727E+00  1.6891E+00
  1.7199E+00  1.7626E+00  1.7824E+00  1.8437E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  2.20E-04  1.79E-04  2.30E-04  2.11E-04  1.93E-04  1.95E-04  1.78E-04  1.85E-04
 res:  1.77E-04  1.88E-04  2.14E-04  1.24E-04  2.24E-04  2.32E-04  1.53E-04  1.50E-04
 res:  8.61E-05  1.61E-04  1.69E-04  2.13E-04  1.27E-04  1.39E-04  1.28E-04  1.46E-04
 res:  1.42E-04  9.83E-05  1.31E-04  8.83E-05  1.46E-04  1.52E-04  7.39E-05  1.44E-04
 res:  1.41E-04  1.07E-04  1.05E-04  1.31E-04  2.85E-04  3.84E-04  1.26E-03  1.04E-03
 ene: -1.43E-01  1.31E-03  9.37E-02  1.45E-01  3.23E-01  3.48E-01  4.02E-01  4.37E-01
 ene:  5.52E-01  5.76E-01  6.60E-01  6.94E-01  7.42E-01  7.77E-01  8.56E-01  8.91E-01
 ene:  9.22E-01  9.95E-01  1.03E+00  1.06E+00  1.11E+00  1.17E+00  1.18E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.38E+00  1.41E+00  1.45E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.67E+00  1.72E+00  1.74E+00  1.77E+00  1.80E+00  1.86E+00
 res:  8.14E-10  7.56E-11  9.09E-11  4.61E-10  4.11E-10  7.73E-10  3.89E-10  8.86E-10
 res:  1.73E-10  1.67E-10  8.69E-10  1.59E-09  1.05E-09  7.52E-09  7.76E-10  3.10E-09
 res:  1.49E-09  7.85E-10  2.41E-09  9.02E-10  4.21E-09  1.44E-09  2.72E-09  8.82E-09
 res:  5.45E-09  6.41E-10  1.55E-09  2.14E-10  1.62E-09  6.90E-10  6.55E-09  4.15E-09
 res:  4.12E-09  2.66E-08  2.00E-07  4.58E-07  2.99E-06  3.48E-06  5.32E-05  8.19E-04
 ene: -1.43E-01  1.31E-03  9.37E-02  1.45E-01  3.23E-01  3.48E-01  4.02E-01  4.37E-01
 ene:  5.52E-01  5.76E-01  6.60E-01  6.94E-01  7.42E-01  7.77E-01  8.56E-01  8.91E-01
 ene:  9.22E-01  9.95E-01  1.03E+00  1.06E+00  1.11E+00  1.17E+00  1.18E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.38E+00  1.41E+00  1.45E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.67E+00  1.72E+00  1.74E+00  1.77E+00  1.80E+00  1.86E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =504
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.4308E-01  1.3111E-03  9.3658E-02  1.4540E-01  3.2293E-01  3.4810E-01
  4.0230E-01  4.3695E-01  5.5166E-01  5.7611E-01  6.5982E-01  6.9398E-01
  7.4223E-01  7.7663E-01  8.5611E-01  8.9054E-01  9.2230E-01  9.9499E-01
  1.0255E+00  1.0611E+00  1.1118E+00  1.1650E+00  1.1759E+00  1.2179E+00
  1.2800E+00  1.3112E+00  1.3708E+00  1.3765E+00  1.4137E+00  1.4467E+00
  1.4917E+00  1.5416E+00  1.5631E+00  1.6542E+00  1.6652E+00  1.7191E+00
  1.7403E+00  1.7685E+00  1.7956E+00  1.8562E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  2.35E-04  1.86E-04  2.20E-04  1.71E-04  1.50E-04  9.63E-05  2.24E-04  1.97E-04
 res:  1.93E-04  2.24E-04  1.98E-04  2.00E-04  1.89E-04  1.55E-04  8.13E-05  2.13E-04
 res:  1.63E-04  1.66E-04  1.52E-04  1.61E-04  1.81E-04  1.01E-04  1.79E-04  8.26E-05
 res:  1.52E-04  1.17E-04  9.78E-05  1.28E-04  6.28E-05  1.32E-04  1.15E-04  8.75E-05
 res:  9.29E-05  1.06E-04  1.27E-04  1.01E-04  9.16E-05  1.54E-04  9.96E-04  2.41E-03
 ene: -1.79E-01  4.61E-02  1.31E-01  1.89E-01  3.17E-01  3.53E-01  3.60E-01  4.48E-01
 ene:  4.59E-01  5.77E-01  5.90E-01  6.74E-01  7.36E-01  7.86E-01  8.28E-01  8.81E-01
 ene:  9.16E-01  1.02E+00  1.03E+00  1.07E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.60E+00
 ene:  1.60E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.76E+00  1.81E+00
 res:  4.53E-10  2.35E-11  8.57E-10  6.24E-11  1.58E-09  2.10E-10  2.40E-09  6.73E-10
 res:  1.01E-10  3.10E-10  2.56E-09  1.43E-09  2.87E-10  3.18E-09  7.14E-10  6.59E-09
 res:  1.41E-09  1.86E-09  1.02E-09  5.66E-09  5.40E-09  5.80E-10  1.36E-08  2.99E-10
 res:  5.83E-09  2.02E-09  7.57E-10  1.69E-09  3.48E-09  2.65E-09  1.37E-08  2.98E-09
 res:  1.69E-08  1.49E-07  6.65E-08  2.57E-07  1.82E-07  3.99E-07  1.37E-05  3.62E-04
 ene: -1.79E-01  4.61E-02  1.31E-01  1.89E-01  3.17E-01  3.53E-01  3.60E-01  4.48E-01
 ene:  4.59E-01  5.77E-01  5.90E-01  6.74E-01  7.36E-01  7.86E-01  8.28E-01  8.81E-01
 ene:  9.16E-01  1.02E+00  1.03E+00  1.07E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.60E+00
 ene:  1.60E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.76E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =540
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.7913E-01  4.6140E-02  1.3124E-01  1.8855E-01  3.1678E-01  3.5292E-01
  3.5954E-01  4.4819E-01  4.5911E-01  5.7712E-01  5.9028E-01  6.7407E-01
  7.3620E-01  7.8614E-01  8.2789E-01  8.8124E-01  9.1552E-01  1.0163E+00
  1.0348E+00  1.0656E+00  1.1807E+00  1.2002E+00  1.2180E+00  1.3080E+00
  1.3118E+00  1.3542E+00  1.3712E+00  1.4084E+00  1.4493E+00  1.4922E+00
  1.4990E+00  1.5962E+00  1.5985E+00  1.6399E+00  1.6430E+00  1.6586E+00
  1.6834E+00  1.7028E+00  1.7561E+00  1.8019E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  2.01E-04  1.92E-04  2.40E-04  1.99E-04  1.79E-04  2.70E-04  1.19E-04  1.72E-04
 res:  1.60E-04  2.07E-04  1.85E-04  1.08E-04  1.83E-04  1.83E-04  2.29E-04  5.31E-05
 res:  1.50E-04  1.88E-04  1.37E-04  1.25E-04  1.57E-04  1.28E-04  6.81E-05  1.54E-04
 res:  1.57E-04  1.90E-04  6.25E-05  1.39E-04  1.47E-04  8.34E-05  1.10E-04  8.28E-05
 res:  1.19E-04  6.17E-05  1.03E-04  1.30E-04  1.45E-04  1.70E-04  7.64E-04  7.46E-04
 ene: -1.17E-01 -2.84E-02  6.86E-02  1.47E-01  2.84E-01  4.19E-01  4.20E-01  4.74E-01
 ene:  5.11E-01  5.16E-01  6.80E-01  7.69E-01  7.70E-01  8.10E-01  8.24E-01  9.01E-01
 ene:  9.35E-01  9.55E-01  1.02E+00  1.04E+00  1.14E+00  1.15E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.33E+00  1.45E+00  1.48E+00  1.52E+00  1.54E+00
 ene:  1.57E+00  1.62E+00  1.62E+00  1.70E+00  1.79E+00  1.79E+00  1.84E+00  1.88E+00
 res:  5.75E-10  6.80E-10  1.94E-10  2.78E-10  2.85E-10  2.46E-10  4.45E-10  7.98E-11
 res:  2.94E-10  3.32E-10  9.13E-11  8.84E-10  1.65E-09  1.01E-09  4.62E-09  7.59E-11
 res:  8.81E-10  2.68E-10  5.97E-10  9.95E-10  4.66E-10  2.59E-09  8.88E-11  6.30E-10
 res:  1.35E-09  3.20E-10  9.74E-11  1.88E-09  1.53E-09  7.59E-10  7.22E-09  5.15E-10
 res:  8.42E-09  3.10E-09  4.42E-09  5.20E-08  2.44E-06  1.03E-05  5.70E-05  1.87E-04
 ene: -1.17E-01 -2.84E-02  6.86E-02  1.47E-01  2.84E-01  4.19E-01  4.20E-01  4.74E-01
 ene:  5.11E-01  5.16E-01  6.80E-01  7.69E-01  7.70E-01  8.10E-01  8.24E-01  9.01E-01
 ene:  9.35E-01  9.55E-01  1.02E+00  1.04E+00  1.14E+00  1.15E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.33E+00  1.45E+00  1.48E+00  1.52E+00  1.54E+00
 ene:  1.57E+00  1.62E+00  1.62E+00  1.70E+00  1.79E+00  1.79E+00  1.84E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =576
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.1674E-01 -2.8385E-02  6.8574E-02  1.4710E-01  2.8441E-01  4.1880E-01
  4.2032E-01  4.7406E-01  5.1118E-01  5.1555E-01  6.8041E-01  7.6919E-01
  7.7019E-01  8.0994E-01  8.2446E-01  9.0149E-01  9.3487E-01  9.5499E-01
  1.0231E+00  1.0369E+00  1.1351E+00  1.1467E+00  1.1720E+00  1.1926E+00
  1.2402E+00  1.2712E+00  1.2975E+00  1.3282E+00  1.4516E+00  1.4841E+00
  1.5171E+00  1.5385E+00  1.5730E+00  1.6156E+00  1.6192E+00  1.6977E+00
  1.7928E+00  1.7945E+00  1.8372E+00  1.8751E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  1.90E-04  1.63E-04  2.27E-04  1.93E-04  1.92E-04  2.13E-04  1.21E-04  1.56E-04
 res:  1.86E-04  1.90E-04  9.45E-05  1.81E-04  2.65E-04  6.98E-05  1.94E-04  1.70E-04
 res:  1.27E-04  1.73E-04  1.44E-04  1.25E-04  1.26E-04  1.99E-04  1.40E-04  2.12E-04
 res:  6.58E-05  1.47E-04  1.30E-04  1.47E-04  8.43E-05  7.34E-05  7.93E-05  7.27E-05
 res:  1.11E-04  1.49E-04  5.87E-05  1.17E-04  1.79E-04  2.07E-04  3.38E-04  5.33E-03
 ene: -1.03E-01 -3.49E-02  8.92E-02  1.17E-01  2.49E-01  2.89E-01  5.23E-01  5.25E-01
 ene:  6.14E-01  6.20E-01  6.78E-01  6.86E-01  7.65E-01  7.76E-01  8.06E-01  9.07E-01
 ene:  9.10E-01  9.35E-01  9.82E-01  1.04E+00  1.05E+00  1.09E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.33E+00  1.39E+00  1.42E+00  1.44E+00  1.49E+00  1.54E+00  1.54E+00
 ene:  1.60E+00  1.65E+00  1.66E+00  1.68E+00  1.72E+00  1.78E+00  1.80E+00  1.82E+00
 res:  5.36E-11  1.30E-10  4.88E-11  1.12E-09  2.30E-11  1.27E-10  3.68E-09  5.33E-10
 res:  4.49E-10  8.33E-10  5.87E-09  9.05E-10  5.53E-09  1.66E-09  2.65E-09  1.32E-09
 res:  2.65E-09  6.94E-10  9.50E-10  2.48E-09  3.01E-09  1.71E-09  3.63E-09  8.85E-10
 res:  2.50E-08  1.83E-09  1.82E-10  4.06E-09  7.82E-11  7.58E-10  4.43E-08  3.33E-09
 res:  1.47E-08  1.36E-07  6.30E-09  1.31E-08  4.80E-06  3.77E-06  1.56E-05  5.89E-05
 ene: -1.03E-01 -3.49E-02  8.92E-02  1.17E-01  2.49E-01  2.89E-01  5.23E-01  5.25E-01
 ene:  6.14E-01  6.20E-01  6.78E-01  6.86E-01  7.65E-01  7.76E-01  8.06E-01  9.07E-01
 ene:  9.10E-01  9.35E-01  9.82E-01  1.04E+00  1.05E+00  1.09E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.33E+00  1.39E+00  1.42E+00  1.44E+00  1.49E+00  1.54E+00  1.54E+00
 ene:  1.60E+00  1.65E+00  1.66E+00  1.68E+00  1.72E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =612
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.0318E-01 -3.4871E-02  8.9244E-02  1.1745E-01  2.4900E-01  2.8907E-01
  5.2314E-01  5.2479E-01  6.1402E-01  6.2012E-01  6.7764E-01  6.8622E-01
  7.6542E-01  7.7552E-01  8.0606E-01  9.0720E-01  9.0963E-01  9.3504E-01
  9.8209E-01  1.0426E+00  1.0505E+00  1.0857E+00  1.1086E+00  1.1785E+00
  1.3002E+00  1.3254E+00  1.3913E+00  1.4210E+00  1.4434E+00  1.4857E+00
  1.5432E+00  1.5444E+00  1.5952E+00  1.6535E+00  1.6616E+00  1.6779E+00
  1.7169E+00  1.7814E+00  1.7982E+00  1.8140E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  1.88E-04  1.73E-04  2.43E-04  2.21E-04  2.11E-04  2.52E-04  1.38E-04  1.47E-04
 res:  1.87E-04  1.69E-04  1.43E-04  2.07E-04  1.39E-04  1.56E-04  2.19E-04  1.60E-04
 res:  1.31E-04  1.32E-04  1.61E-04  1.48E-04  1.29E-04  1.54E-04  1.31E-04  1.46E-04
 res:  1.13E-04  9.44E-05  1.64E-04  1.22E-04  1.07E-04  1.89E-04  1.28E-04  1.73E-04
 res:  1.07E-04  8.68E-05  1.52E-04  1.74E-04  1.70E-04  1.61E-04  1.70E-04  3.87E-03
 ene: -9.65E-02 -3.87E-02  6.59E-02  1.07E-01  3.05E-01  3.75E-01  4.12E-01  4.92E-01
 ene:  5.29E-01  6.29E-01  6.69E-01  7.44E-01  7.86E-01  8.08E-01  8.66E-01  8.93E-01
 ene:  9.10E-01  9.36E-01  9.95E-01  1.02E+00  1.06E+00  1.11E+00  1.14E+00  1.24E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.37E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.64E+00  1.66E+00  1.69E+00  1.74E+00  1.77E+00  1.79E+00  1.80E+00  1.89E+00
 res:  1.75E-09  1.08E-09  1.36E-10  6.24E-10  3.19E-10  1.33E-09  1.20E-09  5.25E-11
 res:  2.43E-09  1.81E-09  1.65E-09  1.09E-09  1.85E-09  1.22E-09  5.49E-09  1.29E-09
 res:  8.50E-10  1.05E-08  3.48E-10  2.77E-09  2.85E-10  2.03E-09  3.97E-09  3.30E-09
 res:  8.75E-09  3.85E-09  8.34E-09  6.88E-09  5.26E-09  9.21E-10  2.42E-09  1.18E-08
 res:  2.37E-08  2.42E-08  3.87E-08  1.96E-06  2.46E-06  1.65E-06  2.90E-06  1.53E-04
 ene: -9.65E-02 -3.87E-02  6.59E-02  1.07E-01  3.05E-01  3.75E-01  4.12E-01  4.92E-01
 ene:  5.29E-01  6.29E-01  6.69E-01  7.44E-01  7.86E-01  8.08E-01  8.66E-01  8.93E-01
 ene:  9.10E-01  9.36E-01  9.95E-01  1.02E+00  1.06E+00  1.11E+00  1.14E+00  1.24E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.37E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.64E+00  1.66E+00  1.69E+00  1.74E+00  1.77E+00  1.79E+00  1.80E+00  1.89E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =648
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -9.6484E-02 -3.8736E-02  6.5885E-02  1.0696E-01  3.0469E-01  3.7521E-01
  4.1171E-01  4.9172E-01  5.2865E-01  6.2858E-01  6.6870E-01  7.4377E-01
  7.8597E-01  8.0843E-01  8.6612E-01  8.9348E-01  9.1015E-01  9.3615E-01
  9.9541E-01  1.0212E+00  1.0584E+00  1.1123E+00  1.1369E+00  1.2367E+00
  1.2495E+00  1.2791E+00  1.3507E+00  1.3664E+00  1.4026E+00  1.4194E+00
  1.4833E+00  1.5647E+00  1.6351E+00  1.6615E+00  1.6904E+00  1.7392E+00
  1.7673E+00  1.7870E+00  1.8040E+00  1.8850E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  2.59E-04  1.73E-04  1.64E-04  1.62E-04  1.34E-04  1.05E-04  1.08E-04  1.26E-04
 res:  1.42E-04  1.43E-04  2.78E-04  9.52E-05  6.91E-05  7.43E-05  8.54E-05  1.98E-04
 res:  1.93E-04  2.43E-04  9.93E-05  9.88E-05  1.58E-04  1.49E-04  1.61E-04  3.63E-05
 res:  2.75E-05  2.84E-05  1.82E-04  1.29E-04  1.29E-04  6.14E-05  1.34E-04  1.41E-04
 res:  6.03E-05  7.99E-05  2.02E-04  2.96E-04  1.16E-03  1.09E-03  4.52E-04  7.99E-04
 ene: -2.18E-01  1.58E-01  2.07E-01  2.07E-01  3.09E-01  3.27E-01  3.27E-01  3.88E-01
 ene:  4.89E-01  4.89E-01  5.34E-01  6.10E-01  6.77E-01  6.77E-01  8.26E-01  1.00E+00
 ene:  1.00E+00  1.01E+00  1.11E+00  1.11E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.71E+00  1.75E+00  1.75E+00  1.77E+00  1.79E+00  1.85E+00
 res:  5.85E-10  3.17E-10  1.72E-10  3.46E-10  8.58E-10  4.15E-10  8.39E-10  3.36E-10
 res:  3.19E-10  5.69E-10  2.10E-09  7.21E-10  1.66E-10  8.00E-10  7.27E-11  4.35E-09
 res:  6.37E-09  2.96E-09  4.52E-09  9.35E-09  1.05E-08  1.21E-08  6.30E-09  8.36E-10
 res:  3.09E-10  4.88E-10  4.19E-10  2.67E-09  4.78E-09  6.71E-09  8.93E-09  2.01E-08
 res:  3.20E-08  1.54E-07  1.33E-06  2.16E-05  2.05E-05  3.10E-05  4.32E-05  3.22E-04
 ene: -2.18E-01  1.58E-01  2.07E-01  2.07E-01  3.09E-01  3.27E-01  3.27E-01  3.88E-01
 ene:  4.89E-01  4.89E-01  5.34E-01  6.10E-01  6.77E-01  6.77E-01  8.26E-01  1.00E+00
 ene:  1.00E+00  1.01E+00  1.11E+00  1.11E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.71E+00  1.75E+00  1.75E+00  1.77E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =684
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -2.1812E-01  1.5811E-01  2.0662E-01  2.0662E-01  3.0869E-01  3.2738E-01
  3.2738E-01  3.8838E-01  4.8908E-01  4.8908E-01  5.3448E-01  6.1047E-01
  6.7671E-01  6.7671E-01  8.2579E-01  9.9951E-01  9.9951E-01  1.0052E+00
  1.1059E+00  1.1059E+00  1.1793E+00  1.1793E+00  1.2127E+00  1.3122E+00
  1.3861E+00  1.3861E+00  1.4187E+00  1.4984E+00  1.4984E+00  1.5439E+00
  1.5880E+00  1.5880E+00  1.6499E+00  1.6499E+00  1.7084E+00  1.7521E+00
  1.7521E+00  1.7659E+00  1.7854E+00  1.8515E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  2.31E-04  2.12E-04  1.77E-04  1.69E-04  1.72E-04  1.24E-04  1.31E-04  2.22E-04
 res:  1.68E-04  1.69E-04  3.16E-04  1.28E-04  1.29E-04  2.35E-04  2.24E-04  9.83E-05
 res:  1.02E-04  9.33E-05  2.22E-04  9.79E-05  9.99E-05  1.25E-04  1.33E-04  1.20E-04
 res:  1.17E-04  1.91E-04  1.82E-05  1.17E-04  1.19E-04  7.63E-05  7.83E-05  9.74E-05
 res:  1.15E-04  2.83E-05  2.99E-04  1.03E-03  1.01E-04  2.68E-04  2.80E-03  5.86E-03
 ene: -1.63E-01 -3.15E-03  1.77E-01  1.77E-01  2.78E-01  3.45E-01  3.45E-01  5.05E-01
 ene:  5.38E-01  5.38E-01  5.70E-01  7.29E-01  7.30E-01  7.30E-01  8.30E-01  9.05E-01
 ene:  9.05E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.27E+00
 ene:  1.27E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.74E+00  1.76E+00  1.77E+00  1.78E+00  1.81E+00
 res:  7.77E-09  1.29E-09  8.40E-11  9.60E-10  1.84E-09  4.67E-10  2.48E-09  2.38E-08
 res:  7.99E-11  6.25E-10  1.54E-08  4.53E-09  1.86E-10  1.29E-09  2.94E-08  3.18E-10
 res:  4.09E-09  1.14E-09  2.28E-08  8.82E-10  1.52E-09  9.55E-09  1.98E-08  1.64E-09
 res:  1.20E-08  7.26E-08  1.83E-10  3.58E-10  1.93E-08  1.28E-09  2.18E-09  2.13E-07
 res:  4.59E-08  2.73E-08  7.03E-06  1.02E-04  5.98E-05  1.43E-05  1.07E-03  2.16E-03
 ene: -1.63E-01 -3.15E-03  1.77E-01  1.77E-01  2.78E-01  3.45E-01  3.45E-01  5.05E-01
 ene:  5.38E-01  5.38E-01  5.70E-01  7.29E-01  7.30E-01  7.30E-01  8.30E-01  9.05E-01
 ene:  9.05E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.27E+00
 ene:  1.27E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =720
     eigenvalues (hartree) for   40  bands
              after    3 non-SCF iterations with    4 CG line minimizations
 -1.6256E-01 -3.1533E-03  1.7689E-01  1.7689E-01  2.7793E-01  3.4493E-01
  3.4493E-01  5.0506E-01  5.3758E-01  5.3758E-01  5.6956E-01  7.2938E-01
  7.2955E-01  7.2955E-01  8.3031E-01  9.0464E-01  9.0464E-01  1.0612E+00
  1.0991E+00  1.1098E+00  1.1098E+00  1.2048E+00  1.2048E+00  1.2656E+00
  1.2656E+00  1.3043E+00  1.3581E+00  1.4233E+00  1.4233E+00  1.4607E+00
  1.4607E+00  1.4731E+00  1.5647E+00  1.6017E+00  1.7336E+00  1.7337E+00
  1.7611E+00  1.7689E+00  1.7708E+00  1.7967E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.6318E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.3868E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  2  -8.8724875609554    -4.848E-03 7.034E-06 1.449E-01
 scprqt: <Vxc>= -3.5417336E-01 hartree
 findmin : lambda_predict   1.1164E+00 etotal_predict  -8.8725395741E+00
 scfcge: actual     2-0-1   1.0000E+00 -8.872487560955E+00  6.4928E-02
 scfcge: predict            1.1164E+00 not close enough => continue minim.

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  3.23E-06  2.39E-06  2.62E-06  2.63E-06  2.51E-06  1.57E-06  1.89E-06  2.95E-06
 res:  2.35E-06  1.70E-06  2.84E-06  2.36E-06  1.14E-06  1.47E-06  2.82E-06  3.26E-06
 res:  2.29E-06  2.55E-06  1.15E-06  2.80E-06  1.63E-06  1.73E-06  2.03E-06  2.54E-06
 res:  1.39E-06  4.20E-07  1.90E-06  1.31E-06  1.87E-06  1.22E-06  8.53E-07  1.46E-06
 res:  8.94E-07  1.08E-06  1.07E-06  1.29E-06  1.81E-06  1.91E-06  5.72E-06  1.56E-05
 ene: -1.99E-01  9.72E-02  1.67E-01  1.70E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.22E-01  5.80E-01  6.40E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.24E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =756
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9936E-01  9.7188E-02  1.6732E-01  1.7025E-01  2.9378E-01  3.5162E-01
  3.8096E-01  3.9058E-01  4.9121E-01  5.2242E-01  5.8016E-01  6.4006E-01
  7.0154E-01  7.4847E-01  8.6773E-01  8.8219E-01  9.2390E-01  1.0105E+00
  1.0182E+00  1.0669E+00  1.1818E+00  1.2176E+00  1.2629E+00  1.3124E+00
  1.3784E+00  1.3968E+00  1.3998E+00  1.4389E+00  1.4585E+00  1.4895E+00
  1.5274E+00  1.5475E+00  1.6194E+00  1.6310E+00  1.6367E+00  1.7069E+00
  1.7077E+00  1.7423E+00  1.7828E+00  1.8112E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  2.69E-06  2.97E-06  2.92E-06  2.53E-06  2.46E-06  2.64E-06  2.03E-06  2.72E-06
 res:  3.38E-06  2.55E-06  3.53E-06  1.65E-06  2.41E-06  2.29E-06  3.04E-06  1.16E-06
 res:  2.70E-06  1.65E-06  1.36E-06  1.79E-06  2.33E-06  2.42E-06  1.67E-06  1.86E-06
 res:  2.20E-06  1.70E-06  1.12E-06  1.68E-06  1.90E-06  6.73E-07  1.26E-06  1.83E-06
 res:  1.13E-06  1.07E-06  1.36E-06  1.22E-06  6.71E-07  2.34E-06  1.02E-04  5.64E-04
 ene: -1.36E-01 -3.43E-02  1.31E-01  1.58E-01  2.96E-01  3.45E-01  3.67E-01  4.87E-01
 ene:  5.46E-01  6.08E-01  6.39E-01  6.48E-01  6.73E-01  7.69E-01  8.90E-01  9.45E-01
 ene:  9.64E-01  9.98E-01  1.03E+00  1.04E+00  1.13E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.31E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.89E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =792
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3649E-01 -3.4292E-02  1.3149E-01  1.5837E-01  2.9556E-01  3.4481E-01
  3.6710E-01  4.8708E-01  5.4588E-01  6.0841E-01  6.3936E-01  6.4845E-01
  6.7348E-01  7.6915E-01  8.9006E-01  9.4493E-01  9.6402E-01  9.9825E-01
  1.0338E+00  1.0442E+00  1.1253E+00  1.1722E+00  1.1931E+00  1.2358E+00
  1.2547E+00  1.3059E+00  1.3196E+00  1.3247E+00  1.4236E+00  1.4513E+00
  1.4664E+00  1.4785E+00  1.5773E+00  1.5993E+00  1.6370E+00  1.6911E+00
  1.7390E+00  1.8120E+00  1.8596E+00  1.8862E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  3.00E-06  2.16E-06  3.06E-06  2.71E-06  2.69E-06  2.67E-06  2.20E-06  1.98E-06
 res:  1.96E-06  1.39E-06  3.00E-06  2.02E-06  3.02E-06  3.14E-06  2.14E-06  2.10E-06
 res:  1.56E-06  1.63E-06  2.38E-06  2.01E-06  2.62E-06  1.98E-06  2.88E-06  1.95E-06
 res:  1.56E-06  2.61E-06  2.01E-06  1.28E-06  1.04E-06  1.10E-06  6.97E-07  1.30E-06
 res:  1.50E-06  1.78E-06  1.84E-06  1.46E-06  9.60E-07  1.92E-06  6.75E-06  3.65E-05
 ene: -1.60E-01  3.42E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.88E-01  5.89E-01  6.43E-01  7.08E-01  7.20E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  8.99E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =828
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6018E-01  3.4185E-02  1.1652E-01  1.3402E-01  2.6375E-01  3.2115E-01
  4.3691E-01  4.4793E-01  5.8757E-01  5.8940E-01  6.4304E-01  7.0803E-01
  7.2023E-01  7.6430E-01  8.0199E-01  8.4536E-01  8.9949E-01  9.4347E-01
  1.0262E+00  1.1081E+00  1.1442E+00  1.1901E+00  1.1944E+00  1.2223E+00
  1.2794E+00  1.3010E+00  1.3376E+00  1.4334E+00  1.4551E+00  1.5207E+00
  1.5498E+00  1.5712E+00  1.5887E+00  1.5897E+00  1.6699E+00  1.6866E+00
  1.7173E+00  1.7599E+00  1.7805E+00  1.8404E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  3.10E-06  2.51E-06  3.16E-06  2.93E-06  2.70E-06  2.72E-06  2.39E-06  2.55E-06
 res:  2.44E-06  2.66E-06  2.85E-06  1.67E-06  3.13E-06  3.01E-06  2.16E-06  1.94E-06
 res:  1.22E-06  2.39E-06  2.01E-06  2.86E-06  1.75E-06  1.96E-06  1.76E-06  1.85E-06
 res:  1.88E-06  1.34E-06  1.94E-06  1.18E-06  1.96E-06  2.16E-06  9.68E-07  2.12E-06
 res:  1.58E-06  1.44E-06  1.21E-06  1.53E-06  1.70E-06  1.54E-06  9.08E-06  1.61E-04
 ene: -1.44E-01  2.34E-04  9.23E-02  1.44E-01  3.21E-01  3.46E-01  4.00E-01  4.35E-01
 ene:  5.50E-01  5.74E-01  6.57E-01  6.93E-01  7.40E-01  7.74E-01  8.54E-01  8.89E-01
 ene:  9.21E-01  9.93E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.77E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =864
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4420E-01  2.3384E-04  9.2253E-02  1.4435E-01  3.2091E-01  3.4617E-01
  4.0025E-01  4.3543E-01  5.4993E-01  5.7409E-01  6.5715E-01  6.9264E-01
  7.4028E-01  7.7433E-01  8.5360E-01  8.8909E-01  9.2065E-01  9.9271E-01
  1.0236E+00  1.0590E+00  1.1103E+00  1.1621E+00  1.1729E+00  1.2157E+00
  1.2776E+00  1.3087E+00  1.3689E+00  1.3740E+00  1.4114E+00  1.4443E+00
  1.4892E+00  1.5390E+00  1.5613E+00  1.6519E+00  1.6628E+00  1.7166E+00
  1.7377E+00  1.7656E+00  1.7935E+00  1.8521E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  3.30E-06  2.60E-06  3.00E-06  2.37E-06  2.07E-06  1.34E-06  3.18E-06  2.75E-06
 res:  2.67E-06  2.88E-06  2.21E-06  2.68E-06  2.45E-06  2.22E-06  1.09E-06  2.92E-06
 res:  2.32E-06  1.96E-06  2.02E-06  1.65E-06  2.47E-06  1.41E-06  2.38E-06  1.14E-06
 res:  1.98E-06  1.69E-06  1.26E-06  1.75E-06  8.64E-07  1.80E-06  1.53E-06  1.23E-06
 res:  1.16E-06  1.60E-06  1.33E-06  1.11E-06  1.21E-06  1.59E-06  6.30E-07  3.04E-04
 ene: -1.80E-01  4.50E-02  1.30E-01  1.88E-01  3.15E-01  3.51E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.74E-01  5.89E-01  6.72E-01  7.34E-01  7.83E-01  8.26E-01  8.80E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.60E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =900
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8035E-01  4.5038E-02  1.3005E-01  1.8797E-01  3.1499E-01  3.5096E-01
  3.5781E-01  4.4621E-01  4.5704E-01  5.7424E-01  5.8872E-01  6.7153E-01
  7.3422E-01  7.8341E-01  8.2607E-01  8.7954E-01  9.1342E-01  1.0128E+00
  1.0332E+00  1.0641E+00  1.1793E+00  1.1988E+00  1.2158E+00  1.3058E+00
  1.3097E+00  1.3519E+00  1.3688E+00  1.4061E+00  1.4477E+00  1.4898E+00
  1.4966E+00  1.5944E+00  1.5952E+00  1.6372E+00  1.6410E+00  1.6559E+00
  1.6812E+00  1.7001E+00  1.7534E+00  1.7985E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  2.83E-06  2.61E-06  3.26E-06  2.74E-06  2.49E-06  3.66E-06  1.65E-06  2.33E-06
 res:  2.30E-06  2.86E-06  2.49E-06  2.60E-06  1.52E-06  2.52E-06  3.44E-06  7.34E-07
 res:  2.21E-06  2.68E-06  1.83E-06  1.69E-06  2.07E-06  1.74E-06  9.35E-07  2.08E-06
 res:  2.26E-06  2.51E-06  8.18E-07  1.97E-06  1.97E-06  1.16E-06  1.34E-06  1.14E-06
 res:  1.68E-06  7.46E-07  1.41E-06  1.66E-06  1.42E-06  1.01E-06  1.24E-05  3.89E-05
 ene: -1.18E-01 -2.95E-02  6.70E-02  1.46E-01  2.82E-01  4.17E-01  4.18E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.00E-01
 ene:  9.33E-01  9.53E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.33E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =936
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1774E-01 -2.9534E-02  6.6986E-02  1.4617E-01  2.8201E-01  4.1727E-01
  4.1845E-01  4.7219E-01  5.0937E-01  5.1380E-01  6.7747E-01  7.6740E-01
  7.6880E-01  8.0822E-01  8.2250E-01  9.0015E-01  9.3341E-01  9.5281E-01
  1.0210E+00  1.0343E+00  1.1326E+00  1.1440E+00  1.1696E+00  1.1900E+00
  1.2377E+00  1.2683E+00  1.2961E+00  1.3255E+00  1.4487E+00  1.4814E+00
  1.5145E+00  1.5360E+00  1.5708E+00  1.6144E+00  1.6166E+00  1.6947E+00
  1.7906E+00  1.7932E+00  1.8349E+00  1.8722E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  2.63E-06  2.25E-06  3.14E-06  2.61E-06  2.65E-06  2.95E-06  1.55E-06  2.09E-06
 res:  2.63E-06  2.62E-06  1.29E-06  2.48E-06  3.82E-06  1.02E-06  2.70E-06  1.78E-06
 res:  2.26E-06  2.46E-06  1.90E-06  1.65E-06  1.71E-06  2.57E-06  2.06E-06  2.71E-06
 res:  7.37E-07  1.93E-06  1.78E-06  2.05E-06  1.14E-06  1.04E-06  1.06E-06  1.05E-06
 res:  1.47E-06  1.97E-06  8.10E-07  1.51E-06  1.44E-06  1.81E-06  2.83E-06  3.74E-06
 ene: -1.04E-01 -3.58E-02  8.78E-02  1.16E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.13E-01  6.19E-01  6.76E-01  6.85E-01  7.64E-01  7.74E-01  8.03E-01  9.04E-01
 ene:  9.07E-01  9.32E-01  9.80E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.68E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =972
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0424E-01 -3.5781E-02  8.7760E-02  1.1634E-01  2.4644E-01  2.8676E-01
  5.2155E-01  5.2333E-01  6.1251E-01  6.1867E-01  6.7620E-01  6.8482E-01
  7.6370E-01  7.7406E-01  8.0328E-01  9.0423E-01  9.0730E-01  9.3218E-01
  9.7965E-01  1.0399E+00  1.0478E+00  1.0839E+00  1.1065E+00  1.1769E+00
  1.2990E+00  1.3230E+00  1.3894E+00  1.4181E+00  1.4411E+00  1.4830E+00
  1.5407E+00  1.5417E+00  1.5919E+00  1.6509E+00  1.6589E+00  1.6750E+00
  1.7149E+00  1.7794E+00  1.7960E+00  1.8112E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  2.69E-06  2.35E-06  3.34E-06  3.10E-06  2.93E-06  3.43E-06  1.98E-06  1.96E-06
 res:  2.63E-06  2.36E-06  1.99E-06  2.74E-06  1.79E-06  2.23E-06  2.78E-06  2.15E-06
 res:  1.69E-06  1.84E-06  2.22E-06  1.91E-06  1.78E-06  2.16E-06  1.79E-06  1.97E-06
 res:  1.39E-06  1.30E-06  1.92E-06  1.91E-06  1.40E-06  2.61E-06  1.76E-06  2.24E-06
 res:  1.36E-06  1.21E-06  2.16E-06  1.52E-06  1.74E-06  1.89E-06  1.36E-06  2.66E-04
 ene: -9.75E-02 -3.97E-02  6.42E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.41E-01  7.84E-01  8.07E-01  8.64E-01  8.91E-01
 ene:  9.09E-01  9.35E-01  9.93E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.77E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1008
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7454E-02 -3.9689E-02  6.4199E-02  1.0557E-01  3.0249E-01  3.7323E-01
  4.0988E-01  4.8990E-01  5.2728E-01  6.2715E-01  6.6714E-01  7.4100E-01
  7.8428E-01  8.0714E-01  8.6366E-01  8.9064E-01  9.0874E-01  9.3481E-01
  9.9274E-01  1.0192E+00  1.0564E+00  1.1097E+00  1.1344E+00  1.2341E+00
  1.2468E+00  1.2765E+00  1.3480E+00  1.3641E+00  1.3999E+00  1.4172E+00
  1.4805E+00  1.5625E+00  1.6333E+00  1.6589E+00  1.6876E+00  1.7367E+00
  1.7650E+00  1.7848E+00  1.8017E+00  1.8818E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  3.53E-06  2.41E-06  2.28E-06  2.30E-06  1.91E-06  1.44E-06  1.52E-06  1.82E-06
 res:  1.99E-06  1.99E-06  3.72E-06  1.26E-06  9.37E-07  9.91E-07  1.12E-06  2.57E-06
 res:  2.66E-06  3.17E-06  1.33E-06  1.34E-06  1.91E-06  2.25E-06  2.16E-06  5.74E-07
 res:  3.80E-07  3.72E-07  2.50E-06  1.73E-06  1.73E-06  7.90E-07  1.79E-06  1.79E-06
 res:  7.50E-07  7.48E-07  1.66E-06  1.85E-06  2.90E-06  3.74E-06  1.68E-06  1.04E-04
 ene: -2.19E-01  1.57E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.87E-01  4.87E-01  5.31E-01  6.07E-01  6.74E-01  6.74E-01  8.22E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.38E+00  1.38E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.71E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1044
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1942E-01  1.5728E-01  2.0612E-01  2.0612E-01  3.0687E-01  3.2561E-01
  3.2561E-01  3.8706E-01  4.8709E-01  4.8709E-01  5.3136E-01  6.0712E-01
  6.7385E-01  6.7385E-01  8.2179E-01  9.9792E-01  9.9792E-01  1.0035E+00
  1.1045E+00  1.1045E+00  1.1778E+00  1.1778E+00  1.2112E+00  1.3107E+00
  1.3846E+00  1.3846E+00  1.4165E+00  1.4962E+00  1.4962E+00  1.5406E+00
  1.5856E+00  1.5856E+00  1.6475E+00  1.6475E+00  1.7058E+00  1.7495E+00
  1.7495E+00  1.7635E+00  1.7831E+00  1.8484E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  3.03E-06  2.91E-06  2.44E-06  2.44E-06  2.42E-06  1.79E-06  1.80E-06  2.33E-06
 res:  2.33E-06  2.33E-06  3.92E-06  3.03E-06  1.79E-06  1.79E-06  2.85E-06  1.36E-06
 res:  1.36E-06  1.24E-06  2.80E-06  1.33E-06  1.33E-06  1.86E-06  1.86E-06  1.64E-06
 res:  1.64E-06  2.45E-06  2.70E-07  1.63E-06  1.63E-06  1.03E-06  1.03E-06  1.24E-06
 res:  1.50E-06  2.73E-07  1.93E-06  5.69E-06  1.96E-05  1.90E-06  1.36E-04  3.40E-04
 ene: -1.64E-01 -4.50E-03  1.76E-01  1.76E-01  2.76E-01  3.43E-01  3.43E-01  5.02E-01
 ene:  5.36E-01  5.36E-01  5.68E-01  7.27E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1080
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6371E-01 -4.5010E-03  1.7622E-01  1.7622E-01  2.7609E-01  3.4287E-01
  3.4287E-01  5.0180E-01  5.3579E-01  5.3579E-01  5.6765E-01  7.2725E-01
  7.2796E-01  7.2796E-01  8.2844E-01  9.0210E-01  9.0210E-01  1.0574E+00
  1.0973E+00  1.1082E+00  1.1082E+00  1.2035E+00  1.2035E+00  1.2634E+00
  1.2634E+00  1.3018E+00  1.3569E+00  1.4207E+00  1.4207E+00  1.4582E+00
  1.4582E+00  1.4696E+00  1.5617E+00  1.5990E+00  1.7309E+00  1.7309E+00
  1.7580E+00  1.7672E+00  1.7675E+00  1.7911E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5591E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.4570E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  3  -8.8725416536139    -5.409E-05 3.918E-06 4.356E-02
 scprqt: <Vxc>= -3.5445856E-01 hartree
 findmin : lambda_predict   1.1176E+00 etotal_predict  -8.8725416593E+00
 scfcge: actual     3-0-2   1.1164E+00 -8.872541653614E+00  2.5804E-02
 scfcge: predict            1.1176E+00 suff. close => next line, ilinear= 0
 scfcge:
 scfcge: start      3-1-0   0.0000E+00 -8.872541653614E+00  2.5804E-02

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  1.24E-06  8.94E-07  4.61E-07  7.18E-07  1.11E-06  5.50E-07  5.24E-07  9.70E-07
 res:  4.69E-07  1.57E-07  1.63E-06  1.78E-06  4.19E-07  1.06E-06  7.89E-07  7.30E-07
 res:  1.54E-06  6.74E-07  5.02E-07  6.55E-07  6.25E-07  6.47E-07  6.86E-07  9.75E-07
 res:  5.87E-07  4.05E-07  1.01E-06  7.72E-07  7.70E-07  3.59E-07  6.87E-07  5.89E-07
 res:  9.64E-07  1.29E-06  5.40E-07  3.62E-07  7.66E-07  1.50E-06  1.97E-06  2.51E-06
 ene: -1.99E-01  9.72E-02  1.67E-01  1.70E-01  2.94E-01  3.52E-01  3.81E-01  3.90E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.23E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1116
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9933E-01  9.7177E-02  1.6740E-01  1.7026E-01  2.9380E-01  3.5175E-01
  3.8120E-01  3.9049E-01  4.9103E-01  5.2290E-01  5.7901E-01  6.3925E-01
  7.0153E-01  7.4826E-01  8.6750E-01  8.8165E-01  9.2285E-01  1.0100E+00
  1.0183E+00  1.0663E+00  1.1814E+00  1.2170E+00  1.2622E+00  1.3116E+00
  1.3780E+00  1.3972E+00  1.3992E+00  1.4388E+00  1.4579E+00  1.4895E+00
  1.5276E+00  1.5472E+00  1.6190E+00  1.6301E+00  1.6369E+00  1.7069E+00
  1.7069E+00  1.7419E+00  1.7823E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  9.93E-07  1.40E-06  8.20E-07  6.24E-07  1.25E-06  9.69E-07  4.17E-07  1.22E-06
 res:  2.02E-06  4.84E-07  1.32E-06  4.61E-07  8.75E-07  8.46E-07  1.16E-06  7.06E-07
 res:  1.24E-06  7.61E-07  5.51E-07  7.35E-07  5.80E-07  1.44E-06  6.78E-07  5.13E-07
 res:  9.41E-07  7.52E-07  7.24E-07  7.16E-07  8.49E-07  3.53E-07  5.96E-07  8.09E-07
 res:  1.02E-06  5.08E-07  1.23E-06  7.75E-07  4.49E-07  9.92E-07  1.88E-05  3.16E-04
 ene: -1.36E-01 -3.43E-02  1.32E-01  1.58E-01  2.95E-01  3.45E-01  3.67E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1152
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3643E-01 -3.4296E-02  1.3152E-01  1.5846E-01  2.9545E-01  3.4479E-01
  3.6741E-01  4.8688E-01  5.4519E-01  6.0857E-01  6.3879E-01  6.4870E-01
  6.7306E-01  7.6889E-01  8.8932E-01  9.4490E-01  9.6329E-01  9.9808E-01
  1.0337E+00  1.0439E+00  1.1249E+00  1.1712E+00  1.1931E+00  1.2354E+00
  1.2542E+00  1.3049E+00  1.3194E+00  1.3241E+00  1.4228E+00  1.4517E+00
  1.4661E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6363E+00  1.6909E+00
  1.7391E+00  1.8116E+00  1.8593E+00  1.8842E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  1.09E-06  7.89E-07  8.72E-07  5.34E-07  1.46E-06  1.23E-06  7.13E-07  5.66E-07
 res:  5.42E-07  2.34E-07  1.60E-06  3.49E-07  2.04E-06  9.59E-07  9.39E-07  1.12E-06
 res:  6.35E-07  4.60E-07  9.74E-07  1.27E-06  9.90E-07  8.16E-07  6.80E-07  1.05E-06
 res:  8.97E-07  1.04E-06  6.97E-07  7.01E-07  3.51E-07  3.08E-07  7.76E-07  3.17E-07
 res:  7.79E-07  1.18E-06  9.65E-07  1.22E-06  9.85E-07  1.22E-06  1.07E-06  7.13E-06
 ene: -1.60E-01  3.42E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1188
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6015E-01  3.4186E-02  1.1658E-01  1.3414E-01  2.6362E-01  3.2100E-01
  4.3688E-01  4.4811E-01  5.8727E-01  5.8989E-01  6.4228E-01  7.0821E-01
  7.1932E-01  7.6388E-01  8.0174E-01  8.4476E-01  8.9958E-01  9.4314E-01
  1.0258E+00  1.1076E+00  1.1435E+00  1.1898E+00  1.1936E+00  1.2216E+00
  1.2791E+00  1.3003E+00  1.3371E+00  1.4332E+00  1.4551E+00  1.5205E+00
  1.5495E+00  1.5711E+00  1.5886E+00  1.5893E+00  1.6692E+00  1.6863E+00
  1.7170E+00  1.7589E+00  1.7806E+00  1.8396E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  1.06E-06  1.06E-06  9.52E-07  6.68E-07  1.14E-06  1.03E-06  1.03E-06  7.26E-07
 res:  7.21E-07  1.23E-06  1.89E-06  4.47E-07  1.43E-06  1.12E-06  1.10E-06  5.93E-07
 res:  5.13E-07  9.52E-07  8.98E-07  1.15E-06  5.87E-07  9.30E-07  1.32E-06  1.08E-06
 res:  9.05E-07  7.02E-07  8.84E-07  7.88E-07  7.34E-07  5.52E-07  6.36E-07  1.28E-06
 res:  8.60E-07  7.22E-07  4.43E-07  1.54E-06  7.97E-07  1.16E-06  1.53E-06  1.52E-04
 ene: -1.44E-01  2.44E-04  9.23E-02  1.44E-01  3.21E-01  3.46E-01  4.00E-01  4.35E-01
 ene:  5.50E-01  5.74E-01  6.57E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.77E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1224
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4415E-01  2.4423E-04  9.2284E-02  1.4443E-01  3.2085E-01  3.4614E-01
  4.0021E-01  4.3546E-01  5.4995E-01  5.7383E-01  6.5661E-01  6.9261E-01
  7.3977E-01  7.7387E-01  8.5323E-01  8.8887E-01  9.2074E-01  9.9228E-01
  1.0233E+00  1.0584E+00  1.1100E+00  1.1613E+00  1.1722E+00  1.2153E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4108E+00  1.4437E+00
  1.4890E+00  1.5386E+00  1.5611E+00  1.6517E+00  1.6626E+00  1.7160E+00
  1.7371E+00  1.7652E+00  1.7932E+00  1.8509E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  1.21E-06  1.09E-06  7.99E-07  5.67E-07  8.65E-07  2.80E-07  1.11E-06  1.08E-06
 res:  5.03E-07  1.64E-06  4.49E-07  1.78E-06  8.39E-07  8.84E-07  2.11E-07  6.62E-07
 res:  8.75E-07  1.12E-06  6.45E-07  6.37E-07  8.35E-07  5.82E-07  1.07E-06  6.91E-07
 res:  7.47E-07  6.31E-07  7.27E-07  4.87E-07  4.04E-07  3.81E-07  8.72E-07  5.13E-07
 res:  1.01E-06  1.63E-06  5.67E-07  1.33E-06  7.68E-07  1.00E-06  2.89E-07  3.31E-05
 ene: -1.80E-01  4.50E-02  1.30E-01  1.88E-01  3.15E-01  3.51E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.26E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1260
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8032E-01  4.5041E-02  1.3009E-01  1.8799E-01  3.1497E-01  3.5136E-01
  3.5772E-01  4.4593E-01  4.5723E-01  5.7331E-01  5.8878E-01  6.7084E-01
  7.3408E-01  7.8296E-01  8.2637E-01  8.7897E-01  9.1322E-01  1.0114E+00
  1.0331E+00  1.0638E+00  1.1786E+00  1.1984E+00  1.2151E+00  1.3058E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4481E+00  1.4890E+00
  1.4962E+00  1.5943E+00  1.5944E+00  1.6364E+00  1.6410E+00  1.6555E+00
  1.6809E+00  1.6995E+00  1.7537E+00  1.7978E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  7.66E-07  1.05E-06  9.81E-07  5.37E-07  1.27E-06  1.23E-06  3.76E-07  9.59E-07
 res:  1.14E-06  5.83E-07  1.92E-06  1.04E-06  4.72E-07  1.01E-06  7.75E-07  3.01E-07
 res:  7.62E-07  1.43E-06  8.43E-07  7.62E-07  6.86E-07  1.08E-06  4.09E-07  9.36E-07
 res:  1.11E-06  1.23E-06  8.00E-07  8.07E-07  8.69E-07  4.46E-07  1.03E-06  2.82E-07
 res:  8.79E-07  5.82E-07  1.18E-06  1.19E-06  9.08E-07  6.33E-07  2.82E-06  1.36E-05
 ene: -1.18E-01 -2.95E-02  6.70E-02  1.46E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.00E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1296
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1769E-01 -2.9521E-02  6.7004E-02  1.4627E-01  2.8190E-01  4.1686E-01
  4.1878E-01  4.7214E-01  5.0916E-01  5.1392E-01  6.7676E-01  7.6678E-01
  7.6905E-01  8.0797E-01  8.2206E-01  9.0041E-01  9.3296E-01  9.5200E-01
  1.0206E+00  1.0340E+00  1.1321E+00  1.1434E+00  1.1698E+00  1.1895E+00
  1.2370E+00  1.2672E+00  1.2959E+00  1.3249E+00  1.4480E+00  1.4809E+00
  1.5140E+00  1.5356E+00  1.5703E+00  1.6145E+00  1.6162E+00  1.6939E+00
  1.7900E+00  1.7934E+00  1.8343E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  8.11E-07  7.89E-07  8.96E-07  6.36E-07  1.53E-06  1.54E-06  4.41E-07  7.56E-07
 res:  9.47E-07  5.30E-07  2.08E-07  9.50E-07  1.12E-06  2.22E-07  2.03E-06  8.78E-07
 res:  1.69E-06  1.57E-06  7.82E-07  6.22E-07  1.19E-06  6.92E-07  8.74E-07  9.26E-07
 res:  8.53E-07  1.03E-06  7.49E-07  1.07E-06  3.85E-07  2.60E-07  1.60E-07  9.08E-07
 res:  1.34E-06  1.53E-06  8.42E-07  1.58E-06  8.16E-07  9.16E-07  8.08E-07  1.27E-06
 ene: -1.04E-01 -3.58E-02  8.78E-02  1.16E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.74E-01  8.03E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1332
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0420E-01 -3.5755E-02  8.7833E-02  1.1648E-01  2.4622E-01  2.8658E-01
  5.2175E-01  5.2323E-01  6.1224E-01  6.1872E-01  6.7664E-01  6.8426E-01
  7.6288E-01  7.7449E-01  8.0267E-01  9.0385E-01  9.0673E-01  9.3145E-01
  9.7935E-01  1.0397E+00  1.0472E+00  1.0834E+00  1.1061E+00  1.1764E+00
  1.2987E+00  1.3224E+00  1.3889E+00  1.4174E+00  1.4410E+00  1.4827E+00
  1.5404E+00  1.5413E+00  1.5911E+00  1.6505E+00  1.6586E+00  1.6746E+00
  1.7145E+00  1.7789E+00  1.7959E+00  1.8106E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  7.60E-07  8.08E-07  1.07E-06  6.73E-07  1.29E-06  1.33E-06  7.44E-07  8.37E-07
 res:  7.73E-07  5.89E-07  7.77E-07  1.97E-06  8.47E-07  6.44E-07  1.98E-06  1.35E-06
 res:  4.82E-07  5.15E-07  1.05E-06  7.27E-07  7.85E-07  1.12E-06  8.90E-07  9.94E-07
 res:  1.10E-06  7.11E-07  8.70E-07  1.13E-06  6.24E-07  9.78E-07  8.16E-07  9.79E-07
 res:  6.14E-07  4.76E-07  1.56E-06  7.11E-07  7.84E-07  1.07E-06  6.54E-07  6.13E-05
 ene: -9.74E-02 -3.97E-02  6.42E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.84E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1368
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7409E-02 -3.9663E-02  6.4226E-02  1.0565E-01  3.0234E-01  3.7299E-01
  4.0996E-01  4.8993E-01  5.2720E-01  6.2711E-01  6.6711E-01  7.4022E-01
  7.8432E-01  8.0693E-01  8.6302E-01  8.9004E-01  9.0866E-01  9.3466E-01
  9.9201E-01  1.0190E+00  1.0561E+00  1.1092E+00  1.1338E+00  1.2337E+00
  1.2465E+00  1.2763E+00  1.3473E+00  1.3636E+00  1.3996E+00  1.4164E+00
  1.4799E+00  1.5619E+00  1.6332E+00  1.6585E+00  1.6868E+00  1.7362E+00
  1.7648E+00  1.7845E+00  1.8014E+00  1.8807E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  1.38E-06  8.66E-07  4.81E-07  5.56E-07  1.02E-06  2.55E-07  3.35E-07  3.80E-07
 res:  2.30E-07  2.01E-07  1.13E-06  1.04E-06  5.96E-07  6.43E-07  8.42E-07  7.04E-07
 res:  7.08E-07  3.67E-07  4.70E-07  4.59E-07  3.75E-07  3.75E-07  3.26E-07  1.96E-08
 res:  3.05E-07  3.08E-07  1.10E-06  5.52E-07  3.62E-07  1.37E-06  5.33E-07  5.33E-07
 res:  4.94E-07  4.93E-07  9.65E-07  4.31E-07  4.36E-07  1.45E-06  2.05E-07  8.15E-05
 ene: -2.19E-01  1.57E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.30E-01  6.07E-01  6.74E-01  6.74E-01  8.20E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1404
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1939E-01  1.5725E-01  2.0608E-01  2.0608E-01  3.0692E-01  3.2599E-01
  3.2599E-01  3.8673E-01  4.8754E-01  4.8754E-01  5.2980E-01  6.0650E-01
  6.7378E-01  6.7378E-01  8.1999E-01  9.9765E-01  9.9765E-01  1.0028E+00
  1.1045E+00  1.1045E+00  1.1770E+00  1.1770E+00  1.2103E+00  1.3114E+00
  1.3850E+00  1.3850E+00  1.4155E+00  1.4956E+00  1.4956E+00  1.5393E+00
  1.5851E+00  1.5851E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7491E+00
  1.7491E+00  1.7631E+00  1.7837E+00  1.8479E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  1.07E-06  1.28E-06  5.93E-07  5.94E-07  1.41E-06  3.93E-07  3.93E-07  1.70E-06
 res:  4.57E-07  4.57E-07  8.80E-07  1.20E-06  4.31E-07  4.31E-07  6.06E-07  8.20E-07
 res:  8.20E-07  1.06E-06  1.13E-06  4.54E-07  4.54E-07  5.22E-07  5.23E-07  6.21E-07
 res:  6.21E-07  7.10E-07  9.95E-09  2.95E-07  2.95E-07  7.86E-07  7.86E-07  8.72E-07
 res:  1.77E-06  1.30E-08  2.83E-07  6.93E-07  8.35E-06  8.04E-07  3.55E-05  1.33E-04
 ene: -1.64E-01 -4.50E-03  1.76E-01  1.76E-01  2.76E-01  3.43E-01  3.43E-01  5.01E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1440
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6367E-01 -4.5009E-03  1.7627E-01  1.7627E-01  2.7584E-01  3.4321E-01
  3.4321E-01  5.0087E-01  5.3602E-01  5.3602E-01  5.6668E-01  7.2634E-01
  7.2817E-01  7.2817E-01  8.2785E-01  9.0197E-01  9.0197E-01  1.0559E+00
  1.0965E+00  1.1082E+00  1.1082E+00  1.2029E+00  1.2029E+00  1.2633E+00
  1.2633E+00  1.3008E+00  1.3577E+00  1.4199E+00  1.4199E+00  1.4579E+00
  1.4579E+00  1.4686E+00  1.5607E+00  1.5995E+00  1.7304E+00  1.7304E+00
  1.7577E+00  1.7674E+00  1.7674E+00  1.7893E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5839E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    3.4973E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  4  -8.8725555626570    -1.391E-05 2.042E-06 4.404E-03
 scprqt: <Vxc>= -3.5446337E-01 hartree
 nlinear, ilinear  0  0
  compute new search direction
 scfcge: actual     4-1-off 1.0000E+00 -8.872555562657E+00  1.9526E-03, end=2

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  1.47E-07  6.24E-08  3.24E-08  5.06E-08  1.45E-07  5.40E-08  4.33E-08  1.73E-07
 res:  8.40E-08  5.95E-08  2.12E-07  2.10E-07  7.01E-08  1.33E-07  1.16E-07  1.30E-07
 res:  2.05E-07  1.04E-07  4.45E-08  1.02E-07  8.67E-08  5.56E-08  7.01E-08  1.39E-07
 res:  7.79E-08  3.21E-08  1.01E-07  6.37E-08  8.99E-08  3.40E-08  6.92E-08  8.03E-08
 res:  9.41E-08  1.20E-07  4.95E-08  6.33E-08  9.53E-08  1.89E-07  3.98E-07  2.70E-06
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.23E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1476
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9909E-01  9.7458E-02  1.6770E-01  1.7056E-01  2.9393E-01  3.5196E-01
  3.8145E-01  3.9057E-01  4.9120E-01  5.2315E-01  5.7874E-01  6.3905E-01
  7.0155E-01  7.4824E-01  8.6762E-01  8.8169E-01  9.2258E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1815E+00  1.2171E+00  1.2622E+00  1.3115E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4389E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6189E+00  1.6299E+00  1.6371E+00  1.7067E+00
  1.7070E+00  1.7418E+00  1.7822E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  7.70E-08  1.31E-07  6.91E-08  2.19E-08  1.60E-07  1.39E-07  8.24E-08  1.77E-07
 res:  2.69E-07  7.33E-08  2.13E-07  7.30E-08  1.16E-07  1.14E-07  1.56E-07  8.80E-08
 res:  1.59E-07  1.01E-07  7.09E-08  8.48E-08  6.44E-08  2.09E-07  5.94E-08  4.35E-08
 res:  9.54E-08  9.58E-08  7.91E-08  8.90E-08  9.96E-08  3.19E-08  8.30E-08  8.37E-08
 res:  8.15E-08  4.29E-08  1.07E-07  7.46E-08  4.34E-08  1.41E-07  3.45E-06  5.23E-05
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1512
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4086E-02  1.3178E-01  1.5878E-01  2.9555E-01  3.4493E-01
  3.6760E-01  4.8695E-01  5.4507E-01  6.0880E-01  6.3880E-01  6.4893E-01
  6.7314E-01  7.6902E-01  8.8929E-01  9.4496E-01  9.6320E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1709E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3046E+00  1.3194E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4661E+00  1.4778E+00  1.5768E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8116E+00  1.8593E+00  1.8837E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  1.23E-07  3.90E-08  9.37E-08  4.68E-08  1.93E-07  1.93E-07  8.03E-08  5.43E-08
 res:  6.67E-08  3.11E-08  2.13E-07  4.90E-08  2.64E-07  1.43E-07  1.44E-07  1.51E-07
 res:  6.80E-08  6.13E-08  1.30E-07  1.54E-07  1.50E-07  7.80E-08  1.28E-07  1.04E-07
 res:  9.67E-08  1.19E-07  7.15E-08  4.04E-08  4.27E-08  3.07E-08  6.37E-08  5.63E-08
 res:  8.00E-08  1.57E-07  1.18E-07  1.31E-07  8.89E-08  1.39E-07  1.31E-07  3.19E-06
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1548
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4482E-02  1.1683E-01  1.3443E-01  2.6368E-01  3.2104E-01
  4.3709E-01  4.4835E-01  5.8743E-01  5.9017E-01  6.4216E-01  7.0843E-01
  7.1913E-01  7.6394E-01  8.0171E-01  8.4463E-01  8.9979E-01  9.4324E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1936E+00  1.2215E+00
  1.2792E+00  1.3003E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5495E+00  1.5712E+00  1.5887E+00  1.5893E+00  1.6691E+00  1.6862E+00
  1.7170E+00  1.7587E+00  1.7807E+00  1.8394E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  1.15E-07  7.52E-08  1.11E-07  5.49E-08  1.59E-07  1.41E-07  1.44E-07  9.29E-08
 res:  1.03E-07  1.65E-07  2.38E-07  4.66E-08  2.05E-07  1.54E-07  1.44E-07  7.08E-08
 res:  5.19E-08  1.40E-07  1.21E-07  1.29E-07  6.78E-08  1.34E-07  1.43E-07  1.01E-07
 res:  1.18E-07  6.74E-08  8.54E-08  7.20E-08  9.20E-08  7.25E-08  6.01E-08  1.65E-07
 res:  8.95E-08  8.29E-08  5.76E-08  1.55E-07  9.93E-08  1.32E-07  1.73E-07  2.94E-05
 ene: -1.44E-01  5.08E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.57E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.77E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1584
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0799E-04  9.2505E-02  1.4471E-01  3.2095E-01  3.4627E-01
  4.0032E-01  4.3566E-01  5.5012E-01  5.7389E-01  6.5653E-01  6.9282E-01
  7.3979E-01  7.7386E-01  8.5320E-01  8.8904E-01  9.2093E-01  9.9227E-01
  1.0234E+00  1.0584E+00  1.1101E+00  1.1611E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4437E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6517E+00  1.6626E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7932E+00  1.8505E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  1.38E-07  8.55E-08  8.41E-08  8.11E-09  1.05E-07  5.41E-08  1.51E-07  1.67E-07
 res:  1.21E-07  2.12E-07  7.22E-08  2.25E-07  1.09E-07  1.30E-07  2.93E-08  1.15E-07
 res:  1.22E-07  1.49E-07  7.94E-08  7.70E-08  1.11E-07  5.66E-08  1.35E-07  5.82E-08
 res:  8.09E-08  7.09E-08  7.55E-08  5.72E-08  4.31E-08  7.22E-08  9.22E-08  1.00E-07
 res:  4.84E-08  1.44E-07  7.11E-08  1.17E-07  1.04E-07  1.20E-07  2.77E-08  2.95E-05
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1620
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8007E-01  4.5300E-02  1.3035E-01  1.8833E-01  3.1512E-01  3.5158E-01
  3.5787E-01  4.4599E-01  4.5739E-01  5.7310E-01  5.8898E-01  6.7074E-01
  7.3418E-01  7.8288E-01  8.2658E-01  8.7902E-01  9.1328E-01  1.0111E+00
  1.0332E+00  1.0639E+00  1.1786E+00  1.1985E+00  1.2150E+00  1.3059E+00
  1.3090E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4962E+00  1.5941E+00  1.5945E+00  1.6363E+00  1.6412E+00  1.6555E+00
  1.6809E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  7.52E-08  7.64E-08  1.33E-07  2.76E-08  1.86E-07  1.80E-07  6.14E-08  1.26E-07
 res:  1.38E-07  1.04E-07  2.28E-07  1.46E-07  4.38E-08  1.41E-07  1.18E-07  1.85E-08
 res:  8.01E-08  2.09E-07  9.74E-08  1.02E-07  1.07E-07  1.15E-07  1.86E-08  1.11E-07
 res:  1.62E-07  1.74E-07  3.11E-08  1.01E-07  1.05E-07  5.28E-08  7.61E-08  4.50E-08
 res:  6.05E-08  4.20E-08  1.09E-07  1.31E-07  9.41E-08  3.60E-08  4.83E-07  3.12E-06
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1656
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9268E-02  6.7194E-02  1.4658E-01  2.8195E-01  4.1697E-01
  4.1900E-01  4.7227E-01  5.0927E-01  5.1410E-01  6.7660E-01  7.6680E-01
  7.6931E-01  8.0809E-01  8.2211E-01  9.0069E-01  9.3307E-01  9.5193E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1895E+00
  1.2369E+00  1.2670E+00  1.2961E+00  1.3249E+00  1.4479E+00  1.4808E+00
  1.5139E+00  1.5356E+00  1.5703E+00  1.6148E+00  1.6162E+00  1.6937E+00
  1.7900E+00  1.7936E+00  1.8343E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  6.86E-08  4.26E-08  1.14E-07  5.10E-08  2.18E-07  2.07E-07  5.15E-08  8.88E-08
 res:  1.23E-07  8.12E-08  1.87E-08  1.23E-07  1.96E-07  1.33E-08  2.53E-07  1.24E-07
 res:  2.04E-07  2.15E-07  7.94E-08  8.83E-08  1.43E-07  7.65E-08  1.23E-07  1.05E-07
 res:  4.96E-08  1.23E-07  6.99E-08  1.14E-07  4.61E-08  3.54E-08  3.24E-08  7.65E-08
 res:  1.57E-07  1.74E-07  6.87E-08  1.51E-07  9.95E-08  9.83E-08  8.65E-08  1.29E-07
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.03E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1692
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5463E-02  8.8050E-02  1.1676E-01  2.4622E-01  2.8662E-01
  5.2198E-01  5.2342E-01  6.1238E-01  6.1893E-01  6.7694E-01  6.8436E-01
  7.6287E-01  7.7478E-01  8.0255E-01  9.0376E-01  9.0669E-01  9.3130E-01
  9.7935E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5412E+00  1.5909E+00  1.6504E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8105E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  6.98E-08  4.44E-08  1.45E-07  9.08E-08  1.85E-07  1.93E-07  9.39E-08  1.06E-07
 res:  9.19E-08  7.21E-08  8.84E-08  2.42E-07  9.50E-08  7.60E-08  2.53E-07  1.62E-07
 res:  4.60E-08  3.99E-08  1.46E-07  6.47E-08  9.61E-08  1.31E-07  9.98E-08  1.26E-07
 res:  9.78E-08  7.57E-08  1.12E-07  1.25E-07  7.79E-08  1.43E-07  8.91E-08  9.92E-08
 res:  8.49E-08  4.61E-08  1.74E-07  7.98E-08  9.97E-08  1.24E-07  8.56E-08  1.24E-04
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.84E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1728
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7122E-02 -3.9377E-02  6.4404E-02  1.0589E-01  3.0240E-01  3.7307E-01
  4.1013E-01  4.9009E-01  5.2740E-01  6.2732E-01  6.6730E-01  7.4007E-01
  7.8450E-01  8.0712E-01  8.6294E-01  8.8992E-01  9.0886E-01  9.3485E-01
  9.9188E-01  1.0191E+00  1.0562E+00  1.1092E+00  1.1337E+00  1.2336E+00
  1.2464E+00  1.2763E+00  1.3472E+00  1.3636E+00  1.3996E+00  1.4164E+00
  1.4798E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6867E+00  1.7361E+00
  1.7649E+00  1.7845E+00  1.8014E+00  1.8803E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  1.53E-07  5.67E-08  1.86E-08  1.89E-08  1.13E-07  3.60E-08  4.85E-08  7.50E-08
 res:  8.28E-08  8.52E-08  2.05E-07  1.25E-07  7.36E-08  8.25E-08  1.07E-07  9.44E-08
 res:  9.85E-08  9.05E-08  4.37E-08  4.67E-08  6.42E-08  5.95E-08  5.85E-08  2.01E-08
 res:  2.11E-08  2.34E-08  1.42E-07  6.84E-08  7.53E-08  1.31E-07  6.85E-08  6.82E-08
 res:  3.67E-08  3.65E-08  7.57E-08  4.78E-08  5.32E-08  1.45E-07  3.01E-08  5.05E-05
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1764
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1916E-01  1.5755E-01  2.0642E-01  2.0642E-01  3.0708E-01  3.2623E-01
  3.2623E-01  3.8688E-01  4.8777E-01  4.8777E-01  5.2943E-01  6.0630E-01
  6.7376E-01  6.7376E-01  8.1944E-01  9.9778E-01  9.9778E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3118E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5390E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7048E+00  1.7490E+00
  1.7490E+00  1.7630E+00  1.7839E+00  1.8476E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  1.30E-07  1.21E-07  1.16E-08  1.16E-08  1.63E-07  8.23E-08  8.23E-08  2.12E-07
 res:  8.86E-08  8.86E-08  1.94E-07  1.96E-07  5.73E-08  5.73E-08  9.26E-08  1.04E-07
 res:  1.04E-07  1.29E-07  1.36E-07  6.84E-08  6.84E-08  3.83E-08  3.82E-08  3.15E-08
 res:  3.15E-08  1.21E-07  9.64E-09  7.06E-08  7.06E-08  8.18E-08  8.18E-08  8.38E-08
 res:  1.24E-07  1.00E-08  5.46E-08  6.50E-08  4.01E-07  7.77E-08  3.13E-06  2.20E-05
 ene: -1.63E-01 -4.28E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.01E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1800
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6341E-01 -4.2792E-03  1.7660E-01  1.7660E-01  2.7593E-01  3.4340E-01
  3.4340E-01  5.0061E-01  5.3623E-01  5.3623E-01  5.6661E-01  7.2626E-01
  7.2840E-01  7.2840E-01  8.2787E-01  9.0199E-01  9.0199E-01  1.0555E+00
  1.0965E+00  1.1083E+00  1.1083E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4683E+00  1.5604E+00  1.5997E+00  1.7304E+00  1.7304E+00
  1.7577E+00  1.7676E+00  1.7676E+00  1.7890E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5786E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    3.5165E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  5  -8.8725568679797    -1.305E-06 2.689E-07 5.111E-04
 scprqt: <Vxc>= -3.5450627E-01 hartree
 findmin : lambda_predict   1.2146E+00 etotal_predict  -8.8725568680E+00
 scfcge: actual     5-1-1   1.2133E+00 -8.872556867980E+00  2.9229E-04
 scfcge: predict            1.2146E+00 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start      5-2-0   0.0000E+00 -8.872556867980E+00  2.9229E-04

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  1.85E-08  1.51E-08  6.81E-09  1.01E-08  1.60E-08  1.28E-08  7.54E-09  1.23E-08
 res:  1.27E-08  1.33E-09  4.11E-08  3.05E-08  6.28E-09  1.28E-08  5.82E-09  1.33E-08
 res:  2.36E-08  1.07E-08  4.76E-09  1.37E-08  1.79E-08  5.44E-09  7.58E-09  2.80E-08
 res:  6.52E-09  4.07E-09  1.17E-08  7.28E-09  8.02E-09  3.57E-09  2.78E-08  3.62E-09
 res:  3.83E-08  5.90E-08  2.77E-09  2.06E-08  3.66E-09  3.60E-08  1.32E-07  1.32E-06
 ene: -1.99E-01  9.74E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1836
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9911E-01  9.7443E-02  1.6767E-01  1.7053E-01  2.9392E-01  3.5199E-01
  3.8146E-01  3.9054E-01  4.9122E-01  5.2313E-01  5.7865E-01  6.3898E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2248E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  1.75E-08  1.20E-08  1.08E-08  6.30E-09  1.96E-08  1.55E-08  5.38E-09  1.65E-08
 res:  2.46E-08  3.64E-09  1.81E-08  4.69E-09  1.87E-08  1.27E-08  2.97E-08  5.84E-09
 res:  2.06E-08  9.86E-09  5.25E-09  8.19E-09  1.12E-08  3.27E-08  4.11E-09  3.77E-09
 res:  1.40E-08  1.65E-08  6.34E-09  1.99E-08  2.00E-08  2.84E-09  4.93E-09  2.93E-08
 res:  3.57E-08  2.53E-09  2.35E-08  2.91E-08  3.35E-09  4.31E-08  5.29E-07  3.00E-05
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1872
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3617E-01 -3.4110E-02  1.3176E-01  1.5875E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4499E-01  6.0877E-01  6.3876E-01  6.4893E-01
  6.7317E-01  7.6903E-01  8.8926E-01  9.4494E-01  9.6315E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4661E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8836E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  1.55E-08  1.61E-08  9.39E-09  6.29E-09  1.98E-08  1.76E-08  1.21E-08  7.19E-09
 res:  1.24E-08  1.78E-09  2.98E-08  7.49E-09  2.92E-08  1.82E-08  5.60E-09  1.58E-08
 res:  5.04E-09  1.16E-08  1.72E-08  1.99E-08  2.11E-08  4.82E-09  1.10E-08  1.72E-08
 res:  1.13E-08  1.39E-08  1.43E-08  1.24E-08  4.72E-09  2.08E-09  2.26E-08  3.93E-09
 res:  4.74E-09  2.44E-08  2.47E-08  1.69E-08  3.21E-08  5.66E-08  9.31E-09  5.47E-07
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1908
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5991E-01  3.4474E-02  1.1680E-01  1.3440E-01  2.6365E-01  3.2101E-01
  4.3710E-01  4.4835E-01  5.8748E-01  5.9016E-01  6.4210E-01  7.0843E-01
  7.1904E-01  7.6391E-01  8.0167E-01  8.4458E-01  8.9977E-01  9.4329E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  2.11E-08  1.32E-08  1.02E-08  8.30E-09  1.64E-08  1.51E-08  1.51E-08  9.74E-09
 res:  9.42E-09  1.98E-08  2.19E-08  8.51E-09  1.83E-08  2.22E-08  1.36E-08  8.15E-09
 res:  1.26E-08  1.01E-08  1.30E-08  1.53E-08  1.68E-08  1.61E-08  1.82E-08  2.07E-08
 res:  1.60E-08  7.85E-09  1.34E-08  9.39E-09  1.64E-08  7.66E-09  1.84E-08  2.25E-08
 res:  8.89E-09  1.77E-08  1.40E-08  4.49E-08  2.95E-08  1.61E-08  4.35E-08  2.55E-05
 ene: -1.44E-01  4.94E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.77E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1944
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4390E-01  4.9369E-04  9.2474E-02  1.4468E-01  3.2094E-01  3.4625E-01
  4.0031E-01  4.3565E-01  5.5011E-01  5.7387E-01  6.5647E-01  6.9285E-01
  7.3975E-01  7.7383E-01  8.5317E-01  8.8905E-01  9.2096E-01  9.9222E-01
  1.0234E+00  1.0583E+00  1.1101E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8505E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  2.15E-08  1.32E-08  1.00E-08  7.59E-09  1.87E-08  4.90E-09  1.38E-08  2.02E-08
 res:  2.34E-09  3.60E-08  8.58E-09  2.90E-08  1.84E-08  8.47E-09  4.99E-09  1.64E-08
 res:  5.31E-09  2.41E-08  6.47E-09  1.02E-08  1.52E-08  5.61E-09  3.49E-08  4.13E-09
 res:  1.34E-08  1.75E-08  3.58E-09  1.04E-08  4.69E-09  5.67E-09  1.12E-08  2.36E-08
 res:  5.21E-09  3.92E-08  2.24E-09  4.09E-08  5.75E-08  2.43E-08  3.75E-09  2.94E-06
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =1980
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8009E-01  4.5283E-02  1.3032E-01  1.8830E-01  3.1514E-01  3.5159E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7304E-01  5.8899E-01  6.7068E-01
  7.3416E-01  7.8284E-01  8.2660E-01  8.7902E-01  9.1325E-01  1.0110E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4483E+00  1.4889E+00
  1.4961E+00  1.5941E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  2.07E-08  1.17E-08  9.44E-09  7.17E-09  1.79E-08  1.84E-08  5.52E-09  1.45E-08
 res:  1.64E-08  3.32E-09  2.35E-08  1.58E-08  5.39E-09  1.55E-08  1.56E-08  5.10E-09
 res:  1.05E-08  2.58E-08  2.05E-08  4.61E-09  4.49E-09  1.53E-08  4.20E-09  9.04E-09
 res:  3.64E-08  3.12E-08  5.67E-09  9.17E-09  1.56E-08  4.81E-09  2.42E-08  4.55E-09
 res:  1.57E-08  4.79E-09  2.00E-08  1.68E-08  2.74E-08  4.86E-09  5.47E-08  1.14E-06
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2016
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1741E-01 -2.9284E-02  6.7161E-02  1.4655E-01  2.8192E-01  4.1693E-01
  4.1900E-01  4.7226E-01  5.0928E-01  5.1407E-01  6.7653E-01  7.6681E-01
  7.6931E-01  8.0807E-01  8.2209E-01  9.0071E-01  9.3307E-01  9.5188E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2369E+00  1.2670E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4808E+00
  1.5140E+00  1.5356E+00  1.5703E+00  1.6148E+00  1.6162E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  1.45E-08  1.45E-08  8.11E-09  5.07E-09  2.14E-08  2.01E-08  6.93E-09  1.31E-08
 res:  1.48E-08  5.08E-09  2.52E-09  1.63E-08  1.85E-08  3.59E-09  2.25E-08  7.01E-09
 res:  3.19E-08  1.95E-08  1.01E-08  5.76E-09  2.53E-08  9.20E-09  1.51E-08  1.28E-08
 res:  4.76E-09  2.02E-08  1.34E-08  2.04E-08  4.33E-09  4.61E-09  2.24E-09  2.67E-08
 res:  1.76E-08  1.52E-08  2.37E-08  2.92E-08  8.88E-09  2.62E-08  7.31E-09  2.23E-08
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2052
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0394E-01 -3.5471E-02  8.8016E-02  1.1673E-01  2.4618E-01  2.8658E-01
  5.2199E-01  5.2343E-01  6.1237E-01  6.1891E-01  6.7693E-01  6.8439E-01
  7.6283E-01  7.7478E-01  8.0247E-01  9.0372E-01  9.0666E-01  9.3123E-01
  9.7935E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4827E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8105E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  2.02E-08  1.44E-08  9.43E-09  7.65E-09  1.88E-08  1.78E-08  1.13E-08  1.17E-08
 res:  8.52E-09  8.24E-09  9.29E-09  2.19E-08  1.18E-08  8.89E-09  2.40E-08  2.04E-08
 res:  6.98E-09  8.72E-09  1.24E-08  9.22E-09  1.20E-08  1.07E-08  1.13E-08  1.36E-08
 res:  2.86E-08  1.12E-08  2.08E-08  1.82E-08  8.40E-09  1.87E-08  1.49E-08  1.47E-08
 res:  1.18E-08  1.16E-08  1.92E-08  1.09E-08  3.97E-08  1.03E-08  1.64E-08  3.18E-05
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2088
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7131E-02 -3.9386E-02  6.4367E-02  1.0585E-01  3.0237E-01  3.7303E-01
  4.1014E-01  4.9009E-01  5.2738E-01  6.2731E-01  6.6730E-01  7.4000E-01
  7.8451E-01  8.0712E-01  8.6286E-01  8.8988E-01  9.0888E-01  9.3487E-01
  9.9183E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2336E+00
  1.2464E+00  1.2763E+00  1.3472E+00  1.3636E+00  1.3995E+00  1.4163E+00
  1.4798E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7845E+00  1.8014E+00  1.8800E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  2.22E-08  1.13E-08  8.35E-09  8.35E-09  1.74E-08  5.49E-09  5.65E-09  1.66E-08
 res:  1.27E-09  1.30E-09  5.49E-08  2.01E-08  5.76E-09  6.22E-09  2.11E-08  6.77E-09
 res:  6.79E-09  1.30E-08  5.19E-09  5.21E-09  5.43E-09  5.96E-09  1.51E-08  7.00E-10
 res:  3.52E-09  3.93E-09  2.97E-08  5.05E-09  5.01E-09  8.15E-08  3.00E-09  3.00E-09
 res:  4.61E-09  4.62E-09  4.25E-08  9.27E-09  1.02E-08  6.67E-08  1.79E-09  4.67E-05
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2124
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1918E-01  1.5752E-01  2.0638E-01  2.0638E-01  3.0710E-01  3.2624E-01
  3.2624E-01  3.8693E-01  4.8775E-01  4.8775E-01  5.2932E-01  6.0624E-01
  6.7374E-01  6.7374E-01  8.1926E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8473E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  2.27E-08  1.20E-08  6.30E-09  6.30E-09  2.87E-08  4.90E-09  4.90E-09  2.74E-08
 res:  3.38E-09  3.38E-09  4.02E-08  2.81E-08  5.01E-09  5.01E-09  3.23E-08  4.97E-09
 res:  4.97E-09  2.40E-08  2.39E-08  6.03E-09  6.03E-09  5.29E-09  5.29E-09  3.80E-09
 res:  3.80E-09  4.81E-08  3.18E-10  5.52E-09  5.52E-09  5.27E-09  5.26E-09  4.15E-08
 res:  6.53E-08  3.20E-10  4.65E-09  6.31E-09  1.65E-07  3.57E-09  8.02E-07  1.12E-05
 ene: -1.63E-01 -4.30E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.01E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2160
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6343E-01 -4.3018E-03  1.7657E-01  1.7657E-01  2.7595E-01  3.4340E-01
  3.4340E-01  5.0051E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2624E-01
  7.2840E-01  7.2840E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4683E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5809E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.5207E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  6  -8.8725570672899    -1.993E-07 8.150E-08 1.737E-05
 scprqt: <Vxc>= -3.5451187E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual     6-2-off 1.1015E+00 -8.872557067290E+00  7.0604E-06, end=4
 scfcge:

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  5.49E-10  3.31E-10  2.80E-10  3.25E-10  9.16E-10  4.00E-10  3.31E-10  1.00E-09
 res:  4.87E-10  3.54E-10  1.68E-09  1.48E-09  4.55E-10  8.13E-10  5.46E-10  7.25E-10
 res:  1.47E-09  7.45E-10  2.55E-10  5.94E-10  5.38E-10  3.34E-10  4.89E-10  1.16E-09
 res:  4.73E-10  9.21E-11  5.77E-10  3.71E-10  5.55E-10  2.37E-10  1.99E-10  3.29E-10
 res:  3.82E-10  9.80E-10  1.88E-10  6.92E-10  2.37E-10  8.97E-10  3.72E-08  2.05E-06
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2196
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7460E-02  1.6769E-01  1.7054E-01  2.9392E-01  3.5201E-01
  3.8147E-01  3.9054E-01  4.9124E-01  5.2314E-01  5.7863E-01  6.3896E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8169E-01  9.2246E-01  1.0101E+00
  1.0185E+00  1.0664E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  3.29E-10  6.93E-10  4.59E-10  2.56E-10  9.58E-10  8.49E-10  5.34E-10  1.15E-09
 res:  1.66E-09  3.84E-10  1.26E-09  3.48E-10  8.01E-10  7.24E-10  1.07E-09  4.14E-10
 res:  1.02E-09  6.19E-10  3.49E-10  4.82E-10  4.51E-10  1.63E-09  2.41E-10  3.34E-10
 res:  7.26E-10  7.98E-10  3.47E-10  6.14E-10  6.41E-10  9.67E-11  3.70E-10  5.84E-10
 res:  4.16E-10  2.77E-10  8.37E-10  3.90E-10  1.47E-10  1.12E-09  9.51E-08  4.77E-06
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2232
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4100E-02  1.3177E-01  1.5876E-01  2.9556E-01  3.4493E-01
  3.6761E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3876E-01  6.4894E-01
  6.7318E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6315E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4661E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  4.79E-10  2.28E-10  5.52E-10  3.33E-10  1.19E-09  1.17E-09  4.42E-10  3.41E-10
 res:  3.57E-10  2.32E-10  1.59E-09  3.77E-10  1.76E-09  8.53E-10  6.52E-10  9.31E-10
 res:  3.58E-10  4.16E-10  8.99E-10  1.03E-09  1.05E-09  5.08E-10  8.20E-10  6.53E-10
 res:  4.86E-10  8.79E-10  4.64E-10  2.17E-10  2.72E-10  2.35E-10  2.49E-10  2.60E-10
 res:  3.58E-10  8.67E-10  7.39E-10  5.78E-10  5.41E-10  1.71E-09  5.19E-10  2.59E-07
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2268
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4492E-02  1.1681E-01  1.3442E-01  2.6365E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1902E-01  7.6392E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4331E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  4.17E-10  4.19E-10  6.54E-10  4.06E-10  9.81E-10  8.83E-10  8.87E-10  5.73E-10
 res:  5.90E-10  1.16E-09  1.28E-09  3.10E-10  1.30E-09  9.58E-10  8.78E-10  4.44E-10
 res:  3.24E-10  7.41E-10  7.88E-10  8.68E-10  3.90E-10  8.59E-10  9.75E-10  6.62E-10
 res:  7.27E-10  3.86E-10  6.80E-10  4.36E-10  6.22E-10  4.71E-10  3.47E-10  8.27E-10
 res:  4.59E-10  3.52E-10  2.95E-10  1.01E-09  7.52E-10  7.34E-10  1.83E-09  4.74E-06
 ene: -1.44E-01  5.09E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2304
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0877E-04  9.2484E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3566E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8907E-01  9.2097E-01  9.9222E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  5.10E-10  4.49E-10  5.12E-10  1.69E-10  6.91E-10  4.31E-10  8.89E-10  1.15E-09
 res:  5.38E-10  1.59E-09  4.62E-10  1.58E-09  7.29E-10  6.37E-10  2.19E-10  8.51E-10
 res:  5.00E-10  1.20E-09  4.08E-10  4.63E-10  6.85E-10  3.94E-10  1.05E-09  2.11E-10
 res:  6.28E-10  6.10E-10  2.89E-10  3.62E-10  1.19E-10  5.57E-10  5.60E-10  7.18E-10
 res:  2.69E-10  1.07E-09  1.79E-10  5.66E-10  3.15E-10  7.92E-10  1.82E-10  2.87E-06
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2340
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8007E-01  4.5298E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5785E-01  4.4599E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7903E-01  9.1326E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  2.97E-10  4.73E-10  7.72E-10  2.88E-10  1.15E-09  1.09E-09  4.41E-10  8.06E-10
 res:  9.10E-10  4.71E-10  1.33E-09  1.05E-09  2.20E-10  9.60E-10  7.28E-10  1.17E-10
 res:  5.19E-10  1.31E-09  6.99E-10  5.06E-10  5.44E-10  7.43E-10  1.22E-10  6.01E-10
 res:  1.27E-09  1.40E-09  1.60E-10  5.92E-10  7.49E-10  3.73E-10  4.34E-10  3.08E-10
 res:  4.24E-10  2.08E-10  6.76E-10  9.46E-10  7.11E-10  1.83E-10  1.99E-09  2.64E-07
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2376
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9270E-02  6.7168E-02  1.4657E-01  2.8192E-01  4.1694E-01
  4.1901E-01  4.7227E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6933E-01  8.0807E-01  8.2210E-01  9.0072E-01  9.3308E-01  9.5188E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  3.62E-10  2.47E-10  6.68E-10  3.58E-10  1.33E-09  1.25E-09  3.17E-10  5.16E-10
 res:  7.73E-10  3.99E-10  1.81E-10  7.44E-10  1.25E-09  1.70E-10  1.53E-09  6.57E-10
 res:  1.38E-09  1.30E-09  5.45E-10  5.36E-10  9.99E-10  4.57E-10  8.32E-10  7.22E-10
 res:  2.13E-10  8.60E-10  4.59E-10  7.08E-10  2.45E-10  2.35E-10  2.94E-10  4.11E-10
 res:  9.66E-10  7.80E-10  4.31E-10  8.32E-10  5.90E-10  7.82E-10  3.80E-10  1.31E-09
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2412
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0392E-01 -3.5453E-02  8.8025E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2201E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8440E-01
  7.6284E-01  7.7479E-01  8.0246E-01  9.0372E-01  9.0666E-01  9.3122E-01
  9.7935E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2990E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  2.78E-10  2.87E-10  8.23E-10  5.99E-10  1.14E-09  1.17E-09  5.85E-10  6.60E-10
 res:  5.02E-10  4.32E-10  4.68E-10  1.45E-09  6.39E-10  3.94E-10  1.51E-09  9.51E-10
 res:  2.94E-10  2.98E-10  8.01E-10  4.55E-10  5.41E-10  7.06E-10  5.68E-10  7.24E-10
 res:  6.32E-10  3.98E-10  8.81E-10  8.37E-10  4.96E-10  1.03E-09  5.94E-10  7.19E-10
 res:  4.41E-10  3.33E-10  1.16E-09  5.81E-10  5.48E-10  6.26E-10  4.98E-10  6.53E-05
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2448
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7114E-02 -3.9369E-02  6.4373E-02  1.0586E-01  3.0237E-01  3.7303E-01
  4.1015E-01  4.9010E-01  5.2740E-01  6.2732E-01  6.6732E-01  7.3998E-01
  7.8452E-01  8.0714E-01  8.6285E-01  8.8987E-01  9.0890E-01  9.3489E-01
  9.9182E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4798E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7845E+00  1.8014E+00  1.8798E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  5.91E-10  2.93E-10  1.77E-10  1.76E-10  7.00E-10  3.84E-10  3.79E-10  5.72E-10
 res:  4.51E-10  4.52E-10  1.91E-09  9.77E-10  4.05E-10  4.27E-10  9.59E-10  4.99E-10
 res:  4.88E-10  6.50E-10  2.95E-10  2.95E-10  5.10E-10  5.13E-10  5.25E-10  3.71E-11
 res:  7.36E-11  7.37E-11  1.17E-09  5.43E-10  5.33E-10  1.23E-09  3.57E-10  3.57E-10
 res:  1.92E-10  1.92E-10  5.58E-10  3.10E-10  3.60E-10  1.46E-09  2.22E-10  3.17E-05
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2484
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0640E-01  2.0640E-01  3.0711E-01  3.2626E-01
  3.2626E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2929E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1922E-01  9.9778E-01  9.9778E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7839E+00  1.8471E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  4.47E-10  6.32E-10  1.93E-10  1.93E-10  9.62E-10  5.30E-10  5.30E-10  1.63E-09
 res:  4.34E-10  4.34E-10  1.56E-09  1.63E-09  3.11E-10  3.11E-10  7.26E-10  4.13E-10
 res:  4.13E-10  1.12E-09  9.74E-10  3.67E-10  3.67E-10  3.57E-10  3.57E-10  1.92E-10
 res:  1.92E-10  1.17E-09  1.80E-11  4.95E-10  4.95E-10  3.63E-10  3.63E-10  7.52E-10
 res:  1.23E-09  1.93E-11  3.21E-10  4.02E-10  1.11E-08  3.28E-10  7.16E-08  1.94E-06
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2520
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6341E-01 -4.2906E-03  1.7659E-01  1.7659E-01  2.7596E-01  3.4341E-01
  3.4341E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2624E-01
  7.2842E-01  7.2842E-01  8.2787E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    3.5222E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT  7  -8.8725570746037    -7.314E-09 1.914E-09 8.852E-08
 scprqt: <Vxc>= -3.5451563E-01 hartree
 nlinear, ilinear  1  0
 scfcge: actual     7-3-off 1.1015E+00 -8.872557074604E+00  4.6606E-08, end=1

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  4.68E-12  4.23E-12  2.96E-12  3.54E-12  4.05E-12  3.77E-12  3.01E-12  3.32E-12
 res:  3.87E-12  1.54E-12  4.50E-12  4.42E-12  1.69E-12  3.07E-12  2.50E-12  2.98E-12
 res:  4.43E-12  2.99E-12  2.41E-12  2.93E-12  3.74E-12  3.12E-12  2.76E-12  3.74E-12
 res:  2.46E-12  1.34E-12  3.10E-12  2.24E-12  2.66E-12  1.45E-12  2.36E-12  1.90E-12
 res:  4.25E-12  4.87E-12  1.29E-12  3.84E-12  2.17E-12  1.16E-11  5.67E-09  1.11E-06
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2556
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7456E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2246E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  4.30E-12  4.63E-12  3.65E-12  3.18E-12  4.62E-12  3.85E-12  2.42E-12  4.35E-12
 res:  5.11E-12  2.02E-12  4.00E-12  2.22E-12  4.00E-12  3.60E-12  3.90E-12  1.97E-12
 res:  3.52E-12  2.99E-12  2.58E-12  2.53E-12  2.26E-12  4.61E-12  1.47E-12  2.60E-12
 res:  3.08E-12  2.42E-12  2.35E-12  2.70E-12  3.05E-12  1.24E-12  2.01E-12  3.76E-12
 res:  3.29E-12  1.91E-12  3.75E-12  2.50E-12  1.13E-12  1.46E-11  1.40E-08  2.68E-06
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2592
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  4.51E-12  4.20E-12  3.46E-12  2.92E-12  4.49E-12  3.88E-12  3.80E-12  3.04E-12
 res:  4.29E-12  1.97E-12  4.59E-12  2.38E-12  5.10E-12  3.38E-12  2.04E-12  2.95E-12
 res:  2.35E-12  3.30E-12  3.90E-12  3.88E-12  3.33E-12  2.65E-12  2.61E-12  3.12E-12
 res:  2.73E-12  3.18E-12  2.46E-12  2.55E-12  1.39E-12  1.66E-12  3.32E-12  1.65E-12
 res:  2.25E-12  3.49E-12  2.87E-12  2.59E-12  3.94E-12  1.12E-11  6.27E-12  4.81E-08
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2628
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1680E-01  1.3441E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  4.51E-12  4.37E-12  3.67E-12  3.16E-12  4.10E-12  3.87E-12  3.95E-12  3.40E-12
 res:  3.31E-12  4.18E-12  4.64E-12  3.21E-12  4.38E-12  3.27E-12  2.95E-12  3.04E-12
 res:  2.87E-12  2.57E-12  3.44E-12  3.31E-12  3.05E-12  2.92E-12  3.42E-12  3.41E-12
 res:  2.93E-12  2.16E-12  3.06E-12  2.43E-12  2.75E-12  1.76E-12  2.61E-12  3.45E-12
 res:  2.45E-12  2.52E-12  1.86E-12  5.52E-12  4.38E-12  5.08E-12  3.29E-11  4.17E-06
 ene: -1.44E-01  5.05E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2664
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0542E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3565E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  4.67E-12  4.40E-12  3.51E-12  3.25E-12  4.32E-12  2.42E-12  3.91E-12  4.48E-12
 res:  1.82E-12  4.84E-12  3.08E-12  4.92E-12  2.93E-12  2.07E-12  2.19E-12  3.59E-12
 res:  2.14E-12  3.33E-12  2.46E-12  3.02E-12  3.43E-12  2.73E-12  4.27E-12  1.71E-12
 res:  3.18E-12  2.72E-12  1.90E-12  1.63E-12  1.29E-12  2.04E-12  2.83E-12  3.18E-12
 res:  1.59E-12  4.58E-12  1.44E-12  4.28E-12  4.10E-12  4.26E-12  2.97E-12  2.57E-07
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2700
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5294E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  4.07E-12  4.24E-12  3.62E-12  2.95E-12  4.09E-12  4.68E-12  2.59E-12  3.94E-12
 res:  4.70E-12  2.35E-12  4.55E-12  4.30E-12  2.36E-12  3.48E-12  2.88E-12  2.34E-12
 res:  3.04E-12  4.62E-12  3.18E-12  1.83E-12  1.93E-12  3.44E-12  1.19E-12  2.37E-12
 res:  4.09E-12  3.78E-12  2.57E-12  2.40E-12  2.50E-12  1.93E-12  3.61E-12  1.80E-12
 res:  2.78E-12  1.92E-12  2.80E-12  3.29E-12  6.57E-12  3.13E-12  1.48E-10  9.83E-08
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2736
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  4.05E-12  4.15E-12  3.33E-12  2.95E-12  4.48E-12  4.65E-12  2.85E-12  4.07E-12
 res:  4.03E-12  2.37E-12  1.81E-12  4.40E-12  4.08E-12  1.91E-12  5.07E-12  1.94E-12
 res:  5.03E-12  4.01E-12  2.68E-12  1.86E-12  4.19E-12  2.54E-12  3.22E-12  3.12E-12
 res:  2.63E-12  3.25E-12  2.81E-12  2.77E-12  1.31E-12  1.79E-12  1.54E-12  3.37E-12
 res:  3.38E-12  3.05E-12  3.23E-12  3.83E-12  3.42E-12  1.17E-11  1.12E-11  4.31E-11
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2772
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5457E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  4.11E-12  4.08E-12  3.53E-12  3.03E-12  4.19E-12  4.30E-12  3.65E-12  3.72E-12
 res:  3.65E-12  2.84E-12  3.36E-12  4.97E-12  3.23E-12  2.99E-12  5.12E-12  3.60E-12
 res:  2.70E-12  2.68E-12  3.08E-12  2.86E-12  3.02E-12  2.71E-12  3.00E-12  2.48E-12
 res:  3.57E-12  2.06E-12  3.05E-12  3.41E-12  1.88E-12  3.36E-12  2.42E-12  2.98E-12
 res:  2.43E-12  2.10E-12  3.95E-12  3.38E-12  5.08E-12  4.67E-12  9.34E-12  1.69E-05
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2808
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7118E-02 -3.9372E-02  6.4370E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8796E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  4.82E-12  3.97E-12  3.26E-12  3.24E-12  4.67E-12  2.69E-12  2.62E-12  4.77E-12
 res:  1.50E-12  1.52E-12  3.78E-12  2.84E-12  1.69E-12  1.72E-12  2.65E-12  2.71E-12
 res:  2.71E-12  2.86E-12  2.72E-12  2.75E-12  3.06E-12  3.04E-12  3.31E-12  1.92E-13
 res:  1.01E-12  9.71E-13  4.21E-12  2.80E-12  2.56E-12  5.14E-12  2.00E-12  2.00E-12
 res:  1.51E-12  1.51E-12  4.65E-12  2.94E-12  9.29E-12  2.66E-11  1.10E-11  2.91E-05
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2844
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8470E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  4.43E-12  4.52E-12  3.24E-12  3.24E-12  5.71E-12  2.26E-12  2.26E-12  4.76E-12
 res:  2.01E-12  2.01E-12  4.88E-12  4.86E-12  2.29E-12  2.29E-12  3.17E-12  1.94E-12
 res:  1.94E-12  3.26E-12  3.84E-12  2.62E-12  2.62E-12  2.85E-12  2.85E-12  1.59E-12
 res:  1.59E-12  4.07E-12  1.66E-13  1.85E-12  1.85E-12  2.31E-12  2.31E-12  3.52E-12
 res:  5.55E-12  1.78E-13  3.21E-12  8.16E-12  1.59E-09  1.71E-11  1.84E-08  9.62E-07
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2880
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2940E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4340E-01
  3.4340E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.5222E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  8  -8.8725570746449    -4.122E-11 5.712E-12 1.041E-08
 scprqt: <Vxc>= -3.5451565E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual     8-3-off 1.1015E+00 -8.872557074645E+00  4.2057E-09, end=2

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  2.91E-13  2.68E-13  1.90E-13  2.25E-13  2.49E-13  2.37E-13  1.91E-13  2.01E-13
 res:  2.42E-13  9.61E-14  2.70E-13  2.66E-13  1.04E-13  1.86E-13  1.56E-13  1.85E-13
 res:  2.64E-13  1.86E-13  1.52E-13  1.83E-13  2.32E-13  1.98E-13  1.73E-13  2.28E-13
 res:  1.52E-13  8.42E-14  1.92E-13  1.40E-13  1.65E-13  9.19E-14  1.46E-13  1.18E-13
 res:  2.63E-13  2.82E-13  7.94E-14  2.20E-13  8.73E-14  9.11E-13  2.86E-09  1.76E-06
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2916
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7456E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2246E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  2.72E-13  2.89E-13  2.31E-13  2.05E-13  2.84E-13  2.37E-13  1.50E-13  2.64E-13
 res:  3.06E-13  1.27E-13  2.42E-13  1.39E-13  2.48E-13  2.22E-13  2.38E-13  1.22E-13
 res:  2.14E-13  1.84E-13  1.61E-13  1.57E-13  1.43E-13  2.74E-13  9.34E-14  1.66E-13
 res:  1.91E-13  1.47E-13  1.46E-13  1.67E-13  1.89E-13  7.81E-14  1.24E-13  2.35E-13
 res:  2.05E-13  1.20E-13  2.25E-13  1.54E-13  6.96E-14  1.27E-12  2.56E-09  4.34E-07
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2952
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  2.82E-13  2.67E-13  2.18E-13  1.87E-13  2.73E-13  2.34E-13  2.38E-13  1.92E-13
 res:  2.69E-13  1.25E-13  2.76E-13  1.50E-13  3.04E-13  2.08E-13  1.24E-13  1.78E-13
 res:  1.48E-13  2.07E-13  2.38E-13  2.35E-13  2.03E-13  1.67E-13  1.59E-13  1.93E-13
 res:  1.70E-13  1.95E-13  1.54E-13  1.62E-13  8.73E-14  1.05E-13  2.08E-13  1.03E-13
 res:  1.39E-13  2.11E-13  1.72E-13  1.55E-13  2.26E-13  7.26E-13  5.12E-13  2.37E-08
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =2988
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1680E-01  1.3441E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  2.83E-13  2.76E-13  2.30E-13  2.01E-13  2.51E-13  2.39E-13  2.42E-13  2.12E-13
 res:  2.06E-13  2.54E-13  2.80E-13  2.03E-13  2.65E-13  2.00E-13  1.79E-13  1.91E-13
 res:  1.80E-13  1.57E-13  2.11E-13  2.03E-13  1.91E-13  1.77E-13  2.07E-13  2.11E-13
 res:  1.80E-13  1.35E-13  1.90E-13  1.50E-13  1.71E-13  1.10E-13  1.63E-13  2.08E-13
 res:  1.52E-13  1.56E-13  1.15E-13  3.06E-13  1.91E-13  2.00E-13  4.64E-12  7.80E-07
 ene: -1.44E-01  5.05E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3024
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0531E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3565E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  2.92E-13  2.77E-13  2.21E-13  2.10E-13  2.69E-13  1.51E-13  2.40E-13  2.73E-13
 res:  1.11E-13  2.91E-13  1.93E-13  2.96E-13  1.81E-13  1.27E-13  1.38E-13  2.21E-13
 res:  1.33E-13  1.99E-13  1.54E-13  1.88E-13  2.12E-13  1.72E-13  2.61E-13  1.08E-13
 res:  1.97E-13  1.70E-13  1.18E-13  1.02E-13  8.11E-14  1.26E-13  1.74E-13  1.95E-13
 res:  1.00E-13  2.80E-13  8.98E-14  2.54E-13  2.49E-13  2.28E-13  2.98E-13  2.57E-07
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3060
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5294E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  2.58E-13  2.68E-13  2.24E-13  1.90E-13  2.48E-13  2.87E-13  1.62E-13  2.43E-13
 res:  2.90E-13  1.46E-13  2.73E-13  2.64E-13  1.50E-13  2.12E-13  1.79E-13  1.48E-13
 res:  1.90E-13  2.78E-13  1.96E-13  1.13E-13  1.19E-13  2.10E-13  7.64E-14  1.45E-13
 res:  2.45E-13  2.27E-13  1.65E-13  1.48E-13  1.53E-13  1.20E-13  2.26E-13  1.12E-13
 res:  1.76E-13  1.21E-13  1.68E-13  1.94E-13  3.74E-13  1.59E-13  1.18E-11  2.31E-08
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3096
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  2.56E-13  2.64E-13  2.08E-13  1.88E-13  2.70E-13  2.82E-13  1.79E-13  2.54E-13
 res:  2.49E-13  1.49E-13  1.15E-13  2.72E-13  2.47E-13  1.22E-13  3.03E-13  1.18E-13
 res:  3.04E-13  2.40E-13  1.67E-13  1.15E-13  2.56E-13  1.60E-13  1.96E-13  1.92E-13
 res:  1.66E-13  1.99E-13  1.77E-13  1.70E-13  8.38E-14  1.13E-13  9.58E-14  2.11E-13
 res:  2.03E-13  1.82E-13  2.01E-13  2.33E-13  1.63E-13  5.97E-13  7.95E-13  7.39E-12
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3132
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5457E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  2.60E-13  2.60E-13  2.18E-13  1.91E-13  2.55E-13  2.62E-13  2.27E-13  2.30E-13
 res:  2.28E-13  1.79E-13  2.10E-13  2.99E-13  2.00E-13  1.88E-13  3.06E-13  2.19E-13
 res:  1.71E-13  1.70E-13  1.87E-13  1.80E-13  1.87E-13  1.65E-13  1.86E-13  1.51E-13
 res:  2.21E-13  1.27E-13  1.87E-13  2.09E-13  1.16E-13  2.05E-13  1.49E-13  1.85E-13
 res:  1.49E-13  1.32E-13  2.32E-13  1.46E-13  2.48E-13  2.19E-13  8.56E-13  3.41E-05
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3168
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7118E-02 -3.9372E-02  6.4369E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8795E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  3.00E-13  2.51E-13  2.10E-13  2.08E-13  2.90E-13  1.70E-13  1.65E-13  2.96E-13
 res:  9.22E-14  9.36E-14  2.24E-13  1.69E-13  1.04E-13  1.06E-13  1.58E-13  1.70E-13
 res:  1.70E-13  1.78E-13  1.72E-13  1.74E-13  1.93E-13  1.91E-13  2.08E-13  1.18E-14
 res:  6.43E-14  6.15E-14  2.56E-13  1.74E-13  1.59E-13  3.13E-13  1.26E-13  1.26E-13
 res:  9.32E-14  9.36E-14  2.78E-13  1.85E-13  2.89E-13  1.27E-12  1.76E-12  1.97E-05
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3204
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8468E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  2.77E-13  2.83E-13  2.09E-13  2.09E-13  3.53E-13  1.40E-13  1.40E-13  2.84E-13
 res:  1.25E-13  1.25E-13  2.96E-13  2.94E-13  1.44E-13  1.44E-13  1.98E-13  1.20E-13
 res:  1.20E-13  1.95E-13  2.35E-13  1.63E-13  1.63E-13  1.82E-13  1.82E-13  1.03E-13
 res:  1.03E-13  2.48E-13  1.03E-14  1.14E-13  1.14E-13  1.43E-13  1.43E-13  2.17E-13
 res:  3.40E-13  1.04E-14  1.52E-13  4.08E-13  1.28E-10  2.88E-12  1.67E-09  1.70E-07
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3240
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2941E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4340E-01
  3.4340E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.5222E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT  9  -8.8725570746502    -5.352E-12 3.531E-13 1.062E-08
 scprqt: <Vxc>= -3.5451565E-01 hartree
 findmin : lambda_predict   8.2847E-01 etotal_predict  -8.8725570747E+00
 scfcge: actual     9-3-1   8.2732E-01 -8.872557074650E+00  5.4008E-09
 scfcge: predict            8.2847E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start      9-4-0   0.0000E+00 -8.872557074650E+00  5.4008E-09

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  2.45E-13  1.33E-13  5.88E-14  1.09E-13  3.13E-13  1.11E-13  8.21E-14  3.13E-13
 res:  1.28E-13  6.31E-14  5.50E-13  5.38E-13  1.07E-13  3.09E-13  1.49E-13  1.81E-13
 res:  5.37E-13  1.80E-13  8.37E-14  1.48E-13  1.77E-13  9.67E-14  1.40E-13  3.41E-13
 res:  1.47E-13  5.54E-14  2.26E-13  1.53E-13  1.91E-13  6.41E-14  1.16E-13  1.16E-13
 res:  1.95E-13  3.64E-13  8.60E-14  2.29E-13  6.71E-14  4.50E-13  4.58E-10  9.49E-07
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3276
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7457E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2246E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  1.36E-13  2.82E-13  1.44E-13  6.16E-14  3.23E-13  2.61E-13  1.13E-13  4.00E-13
 res:  6.36E-13  9.46E-14  4.08E-13  9.24E-14  2.42E-13  2.29E-13  3.45E-13  1.40E-13
 res:  3.49E-13  2.11E-13  1.19E-13  1.59E-13  9.66E-14  5.47E-13  8.96E-14  6.97E-14
 res:  2.34E-13  2.47E-13  1.46E-13  1.87E-13  1.95E-13  5.00E-14  1.46E-13  1.88E-13
 res:  1.82E-13  1.07E-13  3.50E-13  1.53E-13  6.26E-14  1.84E-13  3.78E-10  2.45E-07
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3312
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  2.06E-13  9.26E-14  1.75E-13  7.47E-14  4.27E-13  3.87E-13  1.55E-13  9.62E-14
 res:  1.19E-13  4.88E-14  5.28E-13  8.46E-14  6.48E-13  2.60E-13  2.08E-13  3.16E-13
 res:  1.09E-13  1.04E-13  3.12E-13  3.80E-13  3.09E-13  1.40E-13  2.08E-13  2.45E-13
 res:  1.76E-13  2.86E-13  1.37E-13  8.10E-14  6.59E-14  5.65E-14  1.21E-13  7.54E-14
 res:  1.59E-13  3.54E-13  2.70E-13  2.67E-13  1.98E-13  4.05E-13  1.49E-13  4.58E-09
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3348
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1680E-01  1.3441E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  1.83E-13  1.67E-13  2.16E-13  1.05E-13  3.25E-13  2.71E-13  2.98E-13  1.70E-13
 res:  1.82E-13  3.91E-13  5.24E-13  8.82E-14  4.49E-13  2.96E-13  2.87E-13  1.32E-13
 res:  1.07E-13  2.43E-13  2.60E-13  3.02E-13  1.15E-13  2.84E-13  3.66E-13  2.46E-13
 res:  2.31E-13  1.34E-13  2.15E-13  1.74E-13  1.76E-13  1.24E-13  1.34E-13  3.52E-13
 res:  1.71E-13  1.34E-13  8.74E-14  4.12E-13  2.48E-13  2.90E-13  4.43E-13  6.82E-07
 ene: -1.44E-01  5.06E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3384
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0558E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3566E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  2.29E-13  1.81E-13  1.61E-13  4.71E-14  2.08E-13  8.48E-14  3.00E-13  3.66E-13
 res:  1.36E-13  5.49E-13  1.14E-13  5.63E-13  2.13E-13  1.85E-13  5.44E-14  2.28E-13
 res:  1.58E-13  4.06E-13  1.12E-13  1.49E-13  2.22E-13  1.11E-13  3.31E-13  9.71E-14
 res:  1.84E-13  1.54E-13  1.26E-13  9.41E-14  6.20E-14  1.30E-13  2.15E-13  2.84E-13
 res:  8.81E-14  4.52E-13  8.86E-14  2.66E-13  1.41E-13  2.60E-13  5.31E-14  2.32E-08
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3420
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5294E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  1.11E-13  1.74E-13  2.53E-13  5.84E-14  3.80E-13  3.62E-13  9.46E-14  2.71E-13
 res:  3.27E-13  1.29E-13  5.48E-13  3.26E-13  6.86E-14  3.05E-13  1.86E-13  4.49E-14
 res:  1.61E-13  4.80E-13  2.08E-13  1.56E-13  1.49E-13  2.63E-13  3.92E-14  2.27E-13
 res:  3.95E-13  4.37E-13  8.19E-14  2.05E-13  2.45E-13  1.14E-13  1.67E-13  8.21E-14
 res:  1.31E-13  9.16E-14  3.00E-13  3.61E-13  1.96E-13  8.09E-14  2.50E-12  8.66E-09
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3456
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  1.27E-13  9.45E-14  2.07E-13  8.71E-14  4.74E-13  4.56E-13  9.16E-14  1.84E-13
 res:  2.61E-13  1.08E-13  3.28E-14  2.62E-13  3.82E-13  3.19E-14  6.23E-13  1.95E-13
 res:  5.14E-13  4.81E-13  1.61E-13  1.40E-13  3.41E-13  1.24E-13  2.62E-13  2.47E-13
 res:  1.19E-13  2.78E-13  1.39E-13  2.60E-13  6.92E-14  6.01E-14  6.21E-14  1.60E-13
 res:  4.10E-13  3.76E-13  1.70E-13  3.94E-13  2.18E-13  2.63E-13  2.60E-13  1.05E-12
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3492
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5456E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  1.03E-13  1.01E-13  2.70E-13  1.58E-13  3.83E-13  3.99E-13  1.75E-13  2.24E-13
 res:  1.69E-13  1.23E-13  1.62E-13  5.82E-13  2.14E-13  1.26E-13  6.17E-13  3.53E-13
 res:  8.13E-14  7.81E-14  2.84E-13  1.36E-13  1.75E-13  2.89E-13  1.82E-13  2.65E-13
 res:  2.53E-13  1.43E-13  2.65E-13  3.00E-13  1.63E-13  3.06E-13  1.99E-13  2.19E-13
 res:  1.60E-13  8.61E-14  4.53E-13  1.86E-13  1.62E-13  2.31E-13  1.41E-13  8.68E-06
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3528
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7117E-02 -3.9372E-02  6.4370E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8794E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  2.71E-13  1.16E-13  5.41E-14  5.32E-14  2.45E-13  8.03E-14  7.08E-14  1.70E-13
 res:  8.52E-14  8.72E-14  5.06E-13  3.18E-13  1.21E-13  1.26E-13  3.23E-13  1.30E-13
 res:  1.29E-13  1.21E-13  8.32E-14  8.53E-14  1.02E-13  1.00E-13  1.07E-13  8.78E-15
 res:  4.15E-14  4.04E-14  3.73E-13  1.58E-13  1.36E-13  4.21E-13  1.02E-13  1.02E-13
 res:  7.72E-14  7.74E-14  2.10E-13  7.35E-14  1.02E-13  5.24E-13  1.02E-13  1.78E-05
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3564
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8467E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  1.89E-13  2.52E-13  5.20E-14  5.20E-14  3.49E-13  1.13E-13  1.13E-13  5.93E-13
 res:  1.06E-13  1.06E-13  4.11E-13  4.70E-13  8.06E-14  8.06E-14  1.61E-13  1.56E-13
 res:  1.56E-13  3.96E-13  3.32E-13  1.12E-13  1.12E-13  7.38E-14  7.38E-14  5.95E-14
 res:  5.95E-14  2.95E-13  5.00E-15  1.08E-13  1.08E-13  1.47E-13  1.47E-13  2.57E-13
 res:  4.82E-13  5.49E-15  6.79E-14  8.52E-14  2.13E-11  2.84E-13  4.30E-10  8.51E-08
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3600
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2939E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4341E-01
  3.4341E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    3.5222E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT 10  -8.8725570746532    -2.979E-12 6.484E-13 9.357E-10
 scprqt: <Vxc>= -3.5451568E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual    10-4-off 1.0254E+00 -8.872557074653E+00  4.0933E-10, end=4
 scfcge:

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  2.99E-14  1.49E-14  9.73E-15  1.46E-14  4.79E-14  1.66E-14  1.24E-14  5.26E-14
 res:  2.22E-14  1.49E-14  8.70E-14  8.03E-14  2.03E-14  4.48E-14  2.63E-14  3.41E-14
 res:  7.94E-14  3.32E-14  1.17E-14  2.70E-14  2.71E-14  1.33E-14  2.26E-14  5.64E-14
 res:  2.24E-14  5.42E-15  3.05E-14  1.92E-14  2.81E-14  9.63E-15  1.12E-14  1.72E-14
 res:  2.10E-14  4.88E-14  1.07E-14  3.33E-14  1.09E-14  5.63E-14  2.35E-10  1.51E-06
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3636
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7457E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2245E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  1.47E-14  3.68E-14  2.06E-14  7.95E-15  4.90E-14  4.22E-14  2.27E-14  6.13E-14
 res:  9.39E-14  1.75E-14  6.66E-14  1.61E-14  3.95E-14  3.63E-14  5.47E-14  2.16E-14
 res:  5.35E-14  3.24E-14  1.84E-14  2.44E-14  1.74E-14  8.51E-14  1.22E-14  1.18E-14
 res:  3.48E-14  3.93E-14  1.92E-14  2.92E-14  3.09E-14  5.21E-15  2.03E-14  2.69E-14
 res:  2.23E-14  1.35E-14  4.57E-14  2.07E-14  8.04E-15  2.30E-14  7.11E-11  4.01E-08
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3672
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  2.49E-14  8.44E-15  2.67E-14  1.27E-14  6.42E-14  6.19E-14  2.25E-14  1.48E-14
 res:  1.71E-14  8.66E-15  8.26E-14  1.56E-14  9.70E-14  4.34E-14  3.48E-14  4.94E-14
 res:  1.67E-14  1.74E-14  4.69E-14  5.50E-14  5.16E-14  2.21E-14  3.87E-14  3.44E-14
 res:  2.44E-14  4.35E-14  2.04E-14  8.07E-15  1.15E-14  8.78E-15  1.26E-14  1.20E-14
 res:  2.01E-14  4.98E-14  3.89E-14  3.65E-14  2.41E-14  5.73E-14  2.38E-14  2.32E-09
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3708
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1681E-01  1.3442E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  2.10E-14  1.97E-14  3.28E-14  1.65E-14  5.08E-14  4.35E-14  4.59E-14  2.76E-14
 res:  2.91E-14  6.03E-14  7.47E-14  1.34E-14  6.96E-14  4.85E-14  4.54E-14  2.08E-14
 res:  1.48E-14  3.91E-14  4.06E-14  4.47E-14  1.77E-14  4.48E-14  5.27E-14  3.35E-14
 res:  3.67E-14  1.88E-14  3.20E-14  2.29E-14  2.86E-14  2.12E-14  1.76E-14  4.87E-14
 res:  2.32E-14  1.77E-14  1.33E-14  5.28E-14  3.74E-14  3.89E-14  7.09E-14  1.28E-07
 ene: -1.44E-01  5.06E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3744
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0568E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3566E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  2.73E-14  2.17E-14  2.42E-14  4.48E-15  3.27E-14  1.69E-14  4.69E-14  5.88E-14
 res:  2.72E-14  8.39E-14  2.05E-14  8.53E-14  3.53E-14  3.22E-14  9.29E-15  4.04E-14
 res:  2.61E-14  6.26E-14  1.88E-14  2.27E-14  3.54E-14  1.71E-14  5.20E-14  1.15E-14
 res:  2.87E-14  2.62E-14  1.64E-14  1.56E-14  6.86E-15  2.40E-14  2.95E-14  3.92E-14
 res:  1.19E-14  5.90E-14  1.08E-14  3.04E-14  1.42E-14  3.48E-14  6.58E-15  2.34E-08
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3780
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5295E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  1.25E-14  2.21E-14  3.97E-14  9.42E-15  5.99E-14  5.72E-14  1.78E-14  4.13E-14
 res:  4.78E-14  2.35E-14  7.78E-14  5.28E-14  9.31E-15  4.89E-14  3.33E-14  4.61E-15
 res:  2.49E-14  7.24E-14  3.28E-14  2.57E-14  2.67E-14  3.83E-14  3.75E-15  3.32E-14
 res:  6.42E-14  7.06E-14  5.50E-15  3.10E-14  3.79E-14  1.69E-14  2.11E-14  1.32E-14
 res:  1.73E-14  1.01E-14  3.96E-14  5.11E-14  2.67E-14  7.72E-15  2.33E-13  2.06E-09
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3816
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  1.59E-14  9.35E-15  3.31E-14  1.42E-14  7.21E-14  6.78E-14  1.43E-14  2.67E-14
 res:  3.98E-14  1.89E-14  5.79E-15  3.88E-14  6.44E-14  4.92E-15  8.81E-14  3.33E-14
 res:  7.53E-14  7.23E-14  2.44E-14  2.49E-14  5.09E-14  2.02E-14  4.19E-14  3.70E-14
 res:  1.13E-14  4.32E-14  2.07E-14  3.85E-14  1.11E-14  9.14E-15  1.18E-14  2.16E-14
 res:  5.67E-14  5.03E-14  2.17E-14  5.09E-14  2.97E-14  3.28E-14  2.23E-14  2.07E-13
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3852
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5456E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  1.13E-14  1.12E-14  4.27E-14  2.74E-14  5.98E-14  6.19E-14  2.73E-14  3.34E-14
 res:  2.55E-14  2.00E-14  2.34E-14  8.30E-14  3.11E-14  1.90E-14  8.75E-14  5.18E-14
 res:  1.22E-14  1.18E-14  4.37E-14  1.97E-14  2.68E-14  4.06E-14  2.79E-14  3.99E-14
 res:  3.32E-14  2.05E-14  4.32E-14  4.39E-14  2.52E-14  5.10E-14  3.02E-14  3.32E-14
 res:  2.29E-14  1.40E-14  6.46E-14  2.79E-14  1.95E-14  3.42E-14  1.69E-14  1.72E-05
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3888
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7117E-02 -3.9372E-02  6.4370E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8793E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  3.27E-14  1.30E-14  5.72E-15  5.71E-15  3.47E-14  1.48E-14  1.37E-14  2.85E-14
 res:  2.00E-14  2.01E-14  9.23E-14  4.92E-14  2.00E-14  2.08E-14  4.95E-14  2.31E-14
 res:  2.26E-14  2.66E-14  1.33E-14  1.35E-14  2.11E-14  2.01E-14  2.14E-14  2.30E-15
 res:  3.93E-15  3.86E-15  5.80E-14  2.54E-14  2.40E-14  6.31E-14  1.65E-14  1.66E-14
 res:  9.15E-15  9.17E-15  2.76E-14  1.25E-14  1.34E-14  5.82E-14  2.12E-14  1.19E-05
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3924
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8467E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  2.28E-14  3.29E-14  5.54E-15  5.54E-15  4.98E-14  2.27E-14  2.27E-14  8.72E-14
 res:  2.05E-14  2.05E-14  7.59E-14  8.05E-14  1.36E-14  1.36E-14  3.13E-14  2.37E-14
 res:  2.37E-14  5.86E-14  5.05E-14  1.89E-14  1.89E-14  1.22E-14  1.22E-14  7.16E-15
 res:  7.16E-15  5.40E-14  1.19E-15  2.15E-14  2.15E-14  1.99E-14  1.99E-14  3.79E-14
 res:  6.53E-14  1.27E-15  1.43E-14  1.54E-14  1.81E-12  6.90E-14  3.97E-11  1.51E-08
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3960
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2938E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4341E-01
  3.4341E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.5223E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT 11  -8.8725570746535    -2.860E-13 9.702E-14 2.742E-12
 scprqt: <Vxc>= -3.5451570E-01 hartree
 nlinear, ilinear  1  0
 scfcge: actual    11-5-off 1.0254E+00 -8.872557074653E+00  1.0907E-12, end=1

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  1.06E-16  9.81E-17  8.44E-17  9.05E-17  1.20E-16  1.04E-16  8.57E-17  1.17E-16
 res:  1.21E-16  6.56E-17  1.42E-16  1.25E-16  7.05E-17  8.74E-17  8.91E-17  1.11E-16
 res:  1.24E-16  1.08E-16  6.92E-17  1.02E-16  1.06E-16  8.25E-17  8.36E-17  1.22E-16
 res:  7.63E-17  2.89E-17  7.71E-17  4.95E-17  7.65E-17  4.24E-17  4.15E-17  5.80E-17
 res:  8.87E-17  1.14E-16  2.69E-17  1.07E-16  5.99E-17  1.44E-15  3.78E-11  8.11E-07
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =3996
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7457E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2245E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8110E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  9.79E-17  1.11E-16  9.69E-17  8.20E-17  1.33E-16  1.20E-16  9.29E-17  1.29E-16
 res:  1.41E-16  6.81E-17  1.33E-16  7.42E-17  1.26E-16  1.09E-16  1.19E-16  6.68E-17
 res:  1.07E-16  9.06E-17  7.95E-17  7.80E-17  7.19E-17  1.42E-16  3.93E-17  7.84E-17
 res:  8.42E-17  7.15E-17  5.94E-17  8.15E-17  9.43E-17  2.74E-17  5.34E-17  1.01E-16
 res:  7.19E-17  4.67E-17  7.87E-17  6.17E-17  2.83E-17  1.58E-16  1.04E-11  2.26E-08
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4032
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  1.03E-16  9.46E-17  9.81E-17  8.65E-17  1.32E-16  1.28E-16  1.04E-16  8.75E-17
 res:  1.19E-16  6.14E-17  1.43E-16  7.70E-17  1.45E-16  1.10E-16  7.99E-17  9.49E-17
 res:  7.22E-17  1.00E-16  1.10E-16  1.05E-16  1.13E-16  8.27E-17  1.04E-16  7.87E-17
 res:  6.75E-17  9.05E-17  6.82E-17  5.58E-17  4.89E-17  4.92E-17  7.33E-17  5.04E-17
 res:  5.10E-17  8.53E-17  7.13E-17  6.47E-17  8.70E-17  3.01E-16  2.41E-16  4.55E-10
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4068
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1681E-01  1.3442E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  1.01E-16  1.02E-16  1.05E-16  8.96E-17  1.25E-16  1.21E-16  1.18E-16  1.04E-16
 res:  1.01E-16  1.25E-16  1.21E-16  9.16E-17  1.32E-16  1.09E-16  9.79E-17  8.96E-17
 res:  7.76E-17  8.76E-17  1.08E-16  8.80E-17  8.58E-17  9.08E-17  9.16E-17  8.07E-17
 res:  9.18E-17  5.90E-17  8.32E-17  5.79E-17  8.47E-17  5.78E-17  6.27E-17  8.10E-17
 res:  6.12E-17  6.50E-17  5.46E-17  1.20E-16  1.23E-16  9.85E-17  2.32E-15  1.12E-07
 ene: -1.44E-01  5.06E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4104
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0566E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3566E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  1.05E-16  1.02E-16  9.75E-17  7.92E-17  1.26E-16  8.59E-17  1.18E-16  1.41E-16
 res:  8.00E-17  1.42E-16  9.98E-17  1.43E-16  9.42E-17  8.24E-17  6.69E-17  1.21E-16
 res:  7.57E-17  9.87E-17  8.13E-17  8.91E-17  1.06E-16  7.60E-17  1.25E-16  3.99E-17
 res:  9.34E-17  8.64E-17  4.93E-17  5.20E-17  2.86E-17  7.49E-17  7.30E-17  7.43E-17
 res:  4.03E-17  9.32E-17  3.38E-17  8.71E-17  7.89E-17  1.08E-16  1.88E-16  2.11E-09
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4140
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5295E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  9.63E-17  1.04E-16  1.09E-16  8.29E-17  1.31E-16  1.40E-16  8.92E-17  1.14E-16
 res:  1.29E-16  8.34E-17  1.17E-16  1.38E-16  6.41E-17  1.11E-16  9.94E-17  5.94E-17
 res:  8.55E-17  1.36E-16  9.64E-17  6.68E-17  7.63E-17  9.33E-17  2.62E-17  6.33E-17
 res:  1.30E-16  1.21E-16  4.73E-17  7.02E-17  7.12E-17  5.59E-17  8.76E-17  5.57E-17
 res:  6.99E-17  4.20E-17  6.02E-17  8.23E-17  1.99E-16  6.36E-17  3.24E-14  7.78E-10
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4176
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  9.93E-17  9.58E-17  1.02E-16  8.63E-17  1.36E-16  1.33E-16  8.44E-17  1.12E-16
 res:  1.15E-16  7.72E-17  5.44E-17  1.23E-16  1.39E-16  5.53E-17  1.27E-16  7.82E-17
 res:  1.35E-16  1.22E-16  7.51E-17  7.09E-17  1.19E-16  7.57E-17  1.03E-16  8.51E-17
 res:  5.10E-17  9.59E-17  7.77E-17  7.36E-17  4.43E-17  5.15E-17  5.42E-17  8.52E-17
 res:  7.86E-17  6.69E-17  7.75E-17  7.58E-17  9.50E-17  2.88E-16  1.56E-15  1.81E-14
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4212
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5456E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  9.58E-17  9.70E-17  1.09E-16  9.83E-17  1.30E-16  1.30E-16  1.09E-16  1.07E-16
 res:  1.03E-16  8.53E-17  9.25E-17  1.29E-16  8.84E-17  8.28E-17  1.29E-16  1.02E-16
 res:  7.72E-17  7.23E-17  9.47E-17  7.65E-17  9.01E-17  6.56E-17  8.99E-17  6.91E-17
 res:  7.97E-17  5.50E-17  9.81E-17  9.03E-17  5.67E-17  1.12E-16  6.43E-17  8.34E-17
 res:  6.57E-17  6.33E-17  9.80E-17  9.50E-17  1.07E-16  1.33E-16  4.44E-16  4.34E-06
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4248
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7117E-02 -3.9372E-02  6.4370E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8793E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  1.07E-16  9.30E-17  8.11E-17  8.08E-17  1.24E-16  8.70E-17  8.60E-17  1.43E-16
 res:  7.28E-17  7.32E-17  1.54E-16  8.81E-17  6.28E-17  6.46E-17  7.86E-17  9.41E-17
 res:  9.27E-17  1.11E-16  8.50E-17  8.54E-17  1.03E-16  9.99E-17  1.09E-16  8.67E-18
 res:  2.16E-17  2.07E-17  1.27E-16  8.76E-17  8.71E-17  1.32E-16  6.49E-17  6.49E-17
 res:  3.55E-17  3.54E-17  1.17E-16  1.99E-16  1.95E-16  5.78E-16  9.27E-16  1.06E-05
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4284
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8466E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  1.02E-16  1.09E-16  7.97E-17  7.97E-17  1.50E-16  8.91E-17  8.91E-17  1.31E-16
 res:  7.54E-17  7.54E-17  1.84E-16  1.73E-16  7.09E-17  7.09E-17  1.12E-16  6.53E-17
 res:  6.53E-17  9.05E-17  1.08E-16  8.87E-17  8.87E-17  8.13E-17  8.13E-17  3.85E-17
 res:  3.85E-17  1.41E-16  5.99E-18  7.31E-17  7.31E-17  6.44E-17  6.44E-17  8.85E-17
 res:  1.20E-16  5.98E-18  8.17E-17  1.13E-16  2.86E-13  1.91E-14  1.02E-11  7.63E-09
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4320
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2938E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4341E-01
  3.4341E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    3.5223E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT 12  -8.8725570746536    -7.816E-14 1.839E-16 2.294E-13
 scprqt: <Vxc>= -3.5451570E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual    12-5-off 1.0254E+00 -8.872557074654E+00  9.3566E-14, end=2

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  2.48E-18  2.27E-18  1.97E-18  2.09E-18  2.85E-18  2.41E-18  1.99E-18  2.83E-18
 res:  2.79E-18  1.56E-18  3.50E-18  3.07E-18  1.68E-18  2.08E-18  2.15E-18  2.70E-18
 res:  3.00E-18  2.61E-18  1.59E-18  2.43E-18  2.45E-18  1.95E-18  2.00E-18  2.95E-18
 res:  1.77E-18  8.36E-19  1.84E-18  1.18E-18  1.81E-18  1.01E-18  9.63E-19  1.38E-18
 res:  2.03E-18  2.50E-18  8.88E-19  1.99E-18  1.17E-18  1.34E-16  1.95E-11  1.29E-06
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4356
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7457E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2245E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8109E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  2.26E-18  2.63E-18  2.28E-18  1.91E-18  3.18E-18  2.88E-18  2.21E-18  3.07E-18
 res:  3.44E-18  1.62E-18  3.25E-18  1.75E-18  2.98E-18  2.59E-18  2.88E-18  1.59E-18
 res:  2.60E-18  2.13E-18  1.83E-18  1.84E-18  1.76E-18  3.45E-18  9.58E-19  1.88E-18
 res:  2.05E-18  1.77E-18  1.39E-18  1.96E-18  2.26E-18  7.40E-19  1.27E-18  2.38E-18
 res:  1.72E-18  1.10E-18  1.85E-18  1.47E-18  9.19E-19  5.34E-18  1.98E-12  3.75E-09
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4392
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  2.42E-18  2.17E-18  2.33E-18  2.03E-18  3.17E-18  3.10E-18  2.40E-18  2.03E-18
 res:  2.71E-18  1.43E-18  3.48E-18  1.81E-18  3.55E-18  2.65E-18  1.97E-18  2.33E-18
 res:  1.71E-18  2.33E-18  2.59E-18  2.51E-18  2.78E-18  2.01E-18  2.52E-18  1.90E-18
 res:  1.63E-18  2.21E-18  1.64E-18  1.35E-18  1.17E-18  1.17E-18  1.71E-18  1.19E-18
 res:  1.20E-18  2.05E-18  1.74E-18  1.44E-18  1.96E-18  8.02E-18  1.72E-17  2.35E-10
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4428
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1681E-01  1.3442E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  2.36E-18  2.37E-18  2.49E-18  2.11E-18  3.01E-18  2.90E-18  2.82E-18  2.44E-18
 res:  2.38E-18  3.00E-18  2.95E-18  2.10E-18  3.20E-18  2.67E-18  2.37E-18  2.09E-18
 res:  1.79E-18  2.14E-18  2.56E-18  2.15E-18  2.01E-18  2.21E-18  2.22E-18  1.95E-18
 res:  2.21E-18  1.41E-18  2.33E-18  1.39E-18  2.06E-18  1.43E-18  1.48E-18  1.96E-18
 res:  1.47E-18  1.54E-18  1.31E-18  2.50E-18  2.40E-18  3.46E-18  2.90E-16  2.12E-08
 ene: -1.44E-01  5.06E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4464
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0566E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3566E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  2.45E-18  2.39E-18  2.30E-18  1.81E-18  2.98E-18  2.02E-18  2.81E-18  3.35E-18
 res:  1.93E-18  3.49E-18  2.33E-18  3.48E-18  2.27E-18  2.04E-18  1.52E-18  2.87E-18
 res:  1.84E-18  2.43E-18  1.92E-18  2.07E-18  2.50E-18  1.80E-18  2.99E-18  9.54E-19
 res:  2.19E-18  2.09E-18  1.36E-18  1.27E-18  7.90E-19  1.80E-18  1.72E-18  1.80E-18
 res:  9.85E-19  2.28E-18  8.43E-19  1.87E-18  1.88E-18  2.40E-18  8.88E-18  2.13E-09
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4500
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5295E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  2.23E-18  2.42E-18  2.61E-18  1.94E-18  3.15E-18  3.35E-18  2.10E-18  2.70E-18
 res:  3.02E-18  1.99E-18  2.86E-18  3.29E-18  1.48E-18  2.65E-18  2.44E-18  1.33E-18
 res:  2.04E-18  3.25E-18  2.31E-18  1.63E-18  1.87E-18  2.24E-18  7.16E-19  1.55E-18
 res:  3.17E-18  2.99E-18  1.12E-18  1.69E-18  1.77E-18  1.34E-18  2.07E-18  1.32E-18
 res:  1.70E-18  9.74E-19  1.44E-18  1.90E-18  5.34E-18  1.39E-18  2.82E-15  1.87E-10
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4536
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  2.31E-18  2.20E-18  2.43E-18  2.03E-18  3.28E-18  3.22E-18  1.94E-18  2.58E-18
 res:  2.72E-18  1.83E-18  1.26E-18  2.89E-18  3.38E-18  1.27E-18  3.10E-18  1.92E-18
 res:  3.26E-18  2.96E-18  1.82E-18  1.74E-18  2.86E-18  1.82E-18  2.46E-18  2.04E-18
 res:  1.17E-18  2.34E-18  1.88E-18  1.82E-18  1.06E-18  1.22E-18  1.28E-18  2.02E-18
 res:  1.91E-18  1.60E-18  1.82E-18  1.84E-18  1.72E-18  1.58E-17  2.35E-17  3.41E-15
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4572
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5456E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  2.21E-18  2.24E-18  2.62E-18  2.35E-18  3.14E-18  3.13E-18  2.56E-18  2.50E-18
 res:  2.40E-18  2.00E-18  2.17E-18  3.15E-18  2.10E-18  1.94E-18  3.12E-18  2.48E-18
 res:  1.79E-18  1.70E-18  2.28E-18  1.83E-18  2.12E-18  1.61E-18  2.15E-18  1.70E-18
 res:  1.93E-18  1.34E-18  2.39E-18  2.22E-18  1.38E-18  2.74E-18  1.60E-18  2.06E-18
 res:  1.54E-18  1.47E-18  2.32E-18  1.78E-18  2.92E-18  5.95E-18  2.21E-17  8.54E-06
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4608
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7117E-02 -3.9372E-02  6.4370E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8793E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  2.51E-18  2.14E-18  1.85E-18  1.85E-18  2.91E-18  2.03E-18  2.01E-18  3.25E-18
 res:  1.75E-18  1.76E-18  3.88E-18  2.14E-18  1.49E-18  1.53E-18  1.92E-18  2.24E-18
 res:  2.20E-18  2.65E-18  1.94E-18  1.95E-18  2.45E-18  2.37E-18  2.57E-18  2.82E-19
 res:  7.44E-19  7.34E-19  3.02E-18  2.05E-18  2.04E-18  3.19E-18  1.54E-18  1.55E-18
 res:  8.22E-19  8.36E-19  2.27E-18  5.28E-18  5.66E-18  3.62E-17  1.66E-16  7.03E-06
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4644
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8466E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  2.39E-18  2.58E-18  1.83E-18  1.83E-18  3.56E-18  2.12E-18  2.12E-18  3.17E-18
 res:  1.80E-18  1.80E-18  4.44E-18  4.19E-18  1.66E-18  1.66E-18  2.69E-18  1.54E-18
 res:  1.54E-18  2.20E-18  2.60E-18  2.04E-18  2.04E-18  1.94E-18  1.94E-18  9.53E-19
 res:  9.53E-19  3.40E-18  1.87E-19  1.75E-18  1.75E-18  1.50E-18  1.50E-18  2.19E-18
 res:  2.86E-18  2.16E-19  2.88E-18  5.91E-18  2.42E-14  2.17E-14  9.34E-13  1.36E-09
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4680
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2938E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4341E-01
  3.4341E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1500    0.1500    0.5500
,     Minimum=    3.5223E-03  at reduced coord.    0.7500    0.7500    0.7500
,  Integrated=    8.0000E+00
 ETOT 13  -8.8725570746536    -3.020E-14 4.440E-18 2.738E-13
 scprqt: <Vxc>= -3.5451570E-01 hartree
 findmin : lambda_predict   8.7022E-01 etotal_predict  -8.8725570747E+00
 scfcge: actual    13-5-1   8.7276E-01 -8.872557074654E+00  1.1078E-13
 scfcge: predict            8.7022E-01 suff. close => next line, ilinear= 1
 scfcge:
 scfcge: start     13-6-0   0.0000E+00 -8.872557074654E+00  1.1078E-13

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  6.61E-18  4.76E-18  4.04E-18  4.55E-18  9.27E-18  5.32E-18  4.38E-18  1.01E-17
 res:  6.72E-18  4.34E-18  1.41E-17  1.28E-17  5.27E-18  7.76E-18  6.69E-18  8.28E-18
 res:  1.23E-17  7.84E-18  3.78E-18  7.02E-18  6.34E-18  4.43E-18  5.63E-18  1.02E-17
 res:  5.33E-18  1.49E-18  5.85E-18  3.57E-18  5.70E-18  2.62E-18  2.38E-18  4.15E-18
 res:  5.01E-18  7.94E-18  2.06E-18  5.85E-18  2.69E-18  1.98E-17  3.15E-12  6.92E-07
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4716
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7457E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2245E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8109E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  4.76E-18  7.70E-18  5.54E-18  3.72E-18  9.98E-18  8.94E-18  6.24E-18  1.08E-17
 res:  1.45E-17  4.55E-18  1.20E-17  4.73E-18  8.77E-18  7.74E-18  1.01E-17  5.15E-18
 res:  9.65E-18  6.66E-18  4.87E-18  5.62E-18  4.77E-18  1.37E-17  2.95E-18  4.44E-18
 res:  6.61E-18  6.57E-18  4.11E-18  6.04E-18  6.95E-18  1.45E-18  4.08E-18  6.25E-18
 res:  4.80E-18  3.04E-18  6.70E-18  4.33E-18  2.02E-18  5.09E-18  2.91E-13  2.11E-09
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4752
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  6.01E-18  3.89E-18  6.36E-18  4.51E-18  1.15E-17  1.14E-17  5.85E-18  4.69E-18
 res:  5.85E-18  3.21E-18  1.37E-17  4.44E-18  1.50E-17  8.68E-18  7.46E-18  8.90E-18
 res:  4.67E-18  5.49E-18  8.55E-18  9.27E-18  9.76E-18  5.94E-18  8.42E-18  6.21E-18
 res:  4.90E-18  7.79E-18  4.65E-18  2.92E-18  3.24E-18  2.83E-18  3.86E-18  3.18E-18
 res:  3.75E-18  7.75E-18  6.38E-18  5.98E-18  5.26E-18  9.26E-18  5.14E-18  4.63E-11
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4788
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1681E-01  1.3442E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  5.51E-18  5.46E-18  7.20E-18  5.01E-18  9.93E-18  9.14E-18  9.10E-18  6.66E-18
 res:  6.80E-18  1.06E-17  1.20E-17  4.59E-18  1.19E-17  9.42E-18  8.75E-18  5.40E-18
 res:  4.22E-18  7.73E-18  8.25E-18  7.75E-18  4.93E-18  8.11E-18  8.65E-18  6.21E-18
 res:  7.35E-18  4.79E-18  6.24E-18  4.33E-18  6.28E-18  4.56E-18  3.92E-18  7.58E-18
 res:  4.58E-18  4.31E-18  3.55E-18  8.10E-18  6.51E-18  6.05E-18  2.62E-17  1.84E-08
 ene: -1.44E-01  5.06E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4824
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0566E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3566E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  6.29E-18  5.70E-18  6.00E-18  3.05E-18  7.97E-18  5.13E-18  9.14E-18  1.11E-17
 res:  6.47E-18  1.37E-17  5.84E-18  1.37E-17  7.29E-18  7.27E-18  3.25E-18  8.64E-18
 res:  6.16E-18  9.80E-18  5.37E-18  5.56E-18  7.65E-18  4.51E-18  1.02E-17  2.74E-18
 res:  6.45E-18  6.01E-18  3.61E-18  3.76E-18  1.66E-18  5.56E-18  5.55E-18  6.38E-18
 res:  2.77E-18  8.52E-18  2.43E-18  5.50E-18  3.75E-18  6.28E-18  2.31E-18  1.93E-10
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4860
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5295E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  4.47E-18  5.87E-18  8.17E-18  4.01E-18  1.12E-17  1.08E-17  5.38E-18  8.26E-18
 res:  9.23E-18  5.90E-18  1.21E-17  1.06E-17  3.28E-18  9.09E-18  7.63E-18  2.35E-18
 res:  5.72E-18  1.23E-17  7.07E-18  5.73E-18  6.31E-18  7.38E-18  1.37E-18  5.71E-18
 res:  1.13E-17  1.16E-17  2.07E-18  5.81E-18  6.52E-18  3.87E-18  5.36E-18  3.46E-18
 res:  4.51E-18  2.42E-18  5.84E-18  7.72E-18  5.82E-18  2.08E-18  4.64E-16  7.11E-11
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4896
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  4.98E-18  4.06E-18  7.28E-18  4.73E-18  1.25E-17  1.19E-17  4.50E-18  6.50E-18
 res:  8.09E-18  4.99E-18  2.60E-18  8.28E-18  1.19E-17  2.50E-18  1.33E-17  7.24E-18
 res:  1.22E-17  1.21E-17  5.46E-18  5.87E-18  9.59E-18  5.12E-18  8.24E-18  6.76E-18
 res:  2.70E-18  8.01E-18  5.08E-18  6.60E-18  3.01E-18  2.90E-18  3.29E-18  5.32E-18
 res:  8.19E-18  7.35E-18  4.84E-18  7.42E-18  5.65E-18  6.94E-18  9.44E-18  3.92E-16
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4932
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5456E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  4.32E-18  4.37E-18  8.55E-18  6.63E-18  1.11E-17  1.11E-17  6.88E-18  7.19E-18
 res:  6.24E-18  5.22E-18  5.87E-18  1.30E-17  6.30E-18  5.06E-18  1.30E-17  9.28E-18
 res:  4.13E-18  3.86E-18  8.22E-18  4.96E-18  6.22E-18  6.41E-18  6.56E-18  6.54E-18
 res:  6.05E-18  4.27E-18  8.18E-18  7.67E-18  4.78E-18  9.53E-18  5.43E-18  6.62E-18
 res:  4.62E-18  3.82E-18  9.71E-18  5.24E-18  4.32E-18  6.00E-18  6.15E-18  2.14E-06
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =4968
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7117E-02 -3.9372E-02  6.4370E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8792E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  6.93E-18  4.39E-18  3.26E-18  3.25E-18  7.82E-18  4.76E-18  4.63E-18  7.53E-18
 res:  5.40E-18  5.43E-18  1.53E-17  8.37E-18  4.89E-18  5.08E-18  7.74E-18  6.46E-18
 res:  6.31E-18  7.34E-18  4.59E-18  4.62E-18  6.09E-18  5.83E-18  6.24E-18  8.99E-19
 res:  1.10E-18  1.07E-18  1.04E-17  5.87E-18  5.76E-18  1.03E-17  4.31E-18  4.32E-18
 res:  2.07E-18  2.08E-18  5.75E-18  4.42E-18  4.62E-18  1.06E-17  8.10E-18  6.19E-06
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5004
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8465E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  5.75E-18  7.19E-18  3.23E-18  3.23E-18  1.04E-17  6.13E-18  6.13E-18  1.34E-17
 res:  5.33E-18  5.33E-18  1.46E-17  1.47E-17  4.14E-18  4.14E-18  7.69E-18  5.30E-18
 res:  5.30E-18  8.98E-18  8.98E-18  5.41E-18  5.41E-18  4.33E-18  4.33E-18  2.32E-18
 res:  2.32E-18  1.06E-17  5.33E-19  5.22E-18  5.22E-18  4.56E-18  4.56E-18  6.73E-18
 res:  9.68E-18  6.60E-19  3.56E-18  3.46E-18  4.05E-15  2.06E-14  2.25E-13  6.90E-10
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5040
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2938E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4341E-01
  3.4341E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.5223E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT 14  -8.8725570746535     5.151E-14 1.530E-17 2.064E-14
 scprqt: <Vxc>= -3.5451570E-01 hartree
 nlinear, ilinear  1  1
  compute new search direction
  energy CG update : after 2D interpolation,
     computation in the next plane

 scfcge: actual    14-6-off 9.9825E-01 -8.872557074654E+00  8.6849E-15, end=4
 scfcge:

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  7.43E-19  5.15E-19  4.55E-19  5.14E-19  1.01E-18  6.33E-19  5.67E-19  1.12E-18
 res:  8.04E-19  6.87E-19  1.65E-18  1.52E-18  5.57E-19  9.29E-19  6.92E-19  8.54E-19
 res:  1.49E-18  8.17E-19  6.90E-19  7.28E-19  6.77E-19  8.79E-19  6.31E-19  1.12E-18
 res:  7.01E-19  5.50E-19  7.78E-19  5.17E-19  7.78E-19  9.38E-19  9.31E-19  5.33E-19
 res:  7.83E-19  9.01E-19  9.52E-19  8.02E-19  3.85E-19  2.64E-18  1.63E-12  1.10E-06
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5076
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7457E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2245E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8109E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  5.09E-19  9.05E-19  6.49E-19  4.14E-19  1.06E-18  9.45E-19  8.22E-19  1.23E-18
 res:  1.76E-18  7.44E-19  1.36E-18  7.24E-19  9.14E-19  8.21E-19  1.12E-18  5.82E-19
 res:  1.10E-18  7.45E-19  8.94E-19  6.22E-19  4.75E-19  1.61E-18  3.42E-19  8.20E-19
 res:  7.85E-19  8.15E-19  5.32E-19  7.60E-19  8.52E-19  4.94E-19  5.99E-19  7.24E-19
 res:  6.36E-19  4.00E-19  8.22E-19  6.58E-19  3.13E-19  9.41E-19  5.60E-14  3.52E-10
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5112
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  6.69E-19  4.08E-19  7.63E-19  5.15E-19  1.30E-18  1.28E-18  7.56E-19  6.25E-19
 res:  7.17E-19  5.25E-19  1.59E-18  6.80E-19  1.81E-18  9.49E-19  8.41E-19  1.02E-18
 res:  8.31E-19  9.12E-19  9.85E-19  1.07E-18  1.08E-18  6.00E-19  9.50E-19  7.87E-19
 res:  5.89E-19  8.82E-19  5.57E-19  9.51E-19  3.92E-19  3.28E-19  4.86E-19  3.81E-19
 res:  5.29E-19  9.53E-19  8.65E-19  8.80E-19  6.85E-19  1.04E-18  8.98E-19  2.40E-11
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5148
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1681E-01  1.3442E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  6.02E-19  6.06E-19  8.81E-19  5.91E-19  1.08E-18  9.71E-19  9.90E-19  8.55E-19
 res:  9.68E-19  1.20E-18  1.44E-18  6.28E-19  1.37E-18  1.04E-18  9.78E-19  8.91E-19
 res:  7.63E-19  8.94E-19  9.17E-19  9.10E-19  9.24E-19  9.68E-19  1.01E-18  7.11E-19
 res:  8.78E-19  5.13E-19  7.82E-19  5.77E-19  7.54E-19  5.75E-19  4.84E-19  9.86E-19
 res:  5.74E-19  5.35E-19  4.83E-19  9.68E-19  7.47E-19  8.93E-19  3.44E-18  3.50E-09
 ene: -1.44E-01  5.06E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5184
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0566E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3566E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  6.98E-19  6.42E-19  7.20E-19  3.17E-19  9.55E-19  6.88E-19  9.96E-19  1.22E-18
 res:  6.86E-19  1.60E-18  7.65E-19  1.63E-18  7.85E-19  8.04E-19  6.73E-19  9.15E-19
 res:  6.79E-19  1.16E-18  9.61E-19  5.80E-19  8.38E-19  9.12E-19  1.05E-18  3.31E-19
 res:  8.06E-19  7.44E-19  4.52E-19  4.85E-19  6.18E-19  7.66E-19  7.70E-19  8.30E-19
 res:  9.55E-19  1.03E-18  9.76E-19  8.84E-19  6.23E-19  8.27E-19  4.01E-19  1.95E-10
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5220
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5295E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  4.80E-19  6.65E-19  8.70E-19  4.57E-19  1.25E-18  1.18E-18  7.14E-19  8.84E-19
 res:  9.94E-19  9.09E-19  1.46E-18  1.14E-18  5.30E-19  1.01E-18  7.88E-19  4.16E-19
 res:  6.00E-19  1.43E-18  7.57E-19  6.66E-19  7.21E-19  8.51E-19  8.16E-19  7.21E-19
 res:  1.27E-18  1.34E-18  6.64E-19  7.35E-19  8.02E-19  5.54E-19  6.51E-19  4.45E-19
 res:  5.46E-19  6.56E-19  9.74E-19  9.75E-19  8.92E-19  6.27E-19  4.38E-17  1.71E-11
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5256
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  5.53E-19  4.31E-19  8.97E-19  5.41E-19  1.45E-18  1.36E-18  6.32E-19  8.56E-19
 res:  8.60E-19  7.66E-19  4.49E-19  8.80E-19  1.32E-18  4.46E-19  1.63E-18  8.12E-19
 res:  1.43E-18  1.43E-18  5.83E-19  6.43E-19  1.05E-18  5.28E-19  9.55E-19  7.90E-19
 res:  7.64E-19  9.39E-19  5.56E-19  8.27E-19  3.71E-19  3.19E-19  4.35E-19  6.28E-19
 res:  1.01E-18  9.52E-19  5.97E-19  9.59E-19  6.16E-19  7.71E-19  8.69E-19  7.83E-17
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5292
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5456E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  4.62E-19  4.70E-19  9.27E-19  8.26E-19  1.24E-18  1.25E-18  9.13E-19  7.48E-19
 res:  8.56E-19  7.73E-19  8.94E-19  1.57E-18  9.91E-19  8.00E-19  1.60E-18  1.06E-18
 res:  6.87E-19  7.07E-19  9.69E-19  4.99E-19  6.70E-19  8.21E-19  7.21E-19  8.46E-19
 res:  7.10E-19  5.04E-19  9.42E-19  9.18E-19  6.12E-19  1.05E-18  6.62E-19  7.88E-19
 res:  5.61E-19  4.68E-19  1.18E-18  8.17E-19  6.28E-19  8.42E-19  6.36E-19  4.20E-06
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5328
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -9.7117E-02 -3.9372E-02  6.4370E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8792E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  7.79E-19  4.89E-19  3.40E-19  3.40E-19  9.35E-19  5.94E-19  5.95E-19  8.29E-19
 res:  7.98E-19  7.99E-19  1.74E-18  9.94E-19  5.46E-19  5.65E-19  9.56E-19  6.49E-19
 res:  6.36E-19  7.39E-19  7.33E-19  7.33E-19  5.93E-19  5.73E-19  6.46E-19  3.79E-19
 res:  5.44E-19  5.44E-19  1.16E-18  8.21E-19  8.23E-19  1.15E-18  5.15E-19  5.15E-19
 res:  3.18E-19  3.19E-19  7.27E-19  6.29E-19  6.79E-19  1.16E-18  1.60E-18  4.10E-06
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5364
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8465E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  6.34E-19  8.44E-19  3.46E-19  3.46E-19  1.08E-18  8.28E-19  8.28E-19  1.62E-18
 res:  8.29E-19  8.29E-19  1.57E-18  1.63E-18  6.62E-19  6.62E-19  7.72E-19  6.17E-19
 res:  6.17E-19  1.07E-18  1.00E-18  9.22E-19  9.22E-19  7.98E-19  7.98E-19  9.47E-19
 res:  9.47E-19  1.11E-18  1.88E-19  7.48E-19  7.48E-19  5.95E-19  5.95E-19  8.13E-19
 res:  1.13E-18  7.84E-19  4.77E-19  5.66E-19  3.43E-16  3.33E-15  1.98E-14  1.24E-10
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5400
     eigenvalues (hartree) for   40  bands
              after    2 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2938E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4341E-01
  3.4341E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.5223E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT 15  -8.8725570746536    -2.309E-14 1.812E-18 4.149E-17
 scprqt: <Vxc>= -3.5451570E-01 hartree
 nlinear, ilinear  1  0
  compute new search direction
 scfcge: actual    15-7-off 9.9825E-01 -8.872557074654E+00  2.1246E-17, end=2

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Non-SCF iterations; kpt #     1  , k= ( -0.12500 -0.25000  0.00000  ), band residuals:
 res:  1.03E-19  1.52E-19  1.91E-19  1.68E-19  1.46E-20  2.39E-19  2.61E-19  1.67E-20
 res:  2.52E-19  3.59E-19  2.66E-20  2.72E-20  2.62E-20  3.19E-20  2.20E-20  2.22E-20
 res:  3.37E-20  3.33E-20  4.18E-19  3.69E-20  4.14E-20  5.86E-19  5.94E-20  2.03E-20
 res:  1.44E-19  4.77E-19  1.14E-19  1.11E-19  1.39E-19  8.22E-19  8.30E-19  8.36E-20
 res:  2.60E-19  7.69E-20  8.93E-19  1.62E-19  1.12E-19  6.17E-19  2.63E-13  5.90E-07
 ene: -1.99E-01  9.75E-02  1.68E-01  1.71E-01  2.94E-01  3.52E-01  3.81E-01  3.91E-01
 ene:  4.91E-01  5.23E-01  5.79E-01  6.39E-01  7.02E-01  7.48E-01  8.68E-01  8.82E-01
 ene:  9.22E-01  1.01E+00  1.02E+00  1.07E+00  1.18E+00  1.22E+00  1.26E+00  1.31E+00
 ene:  1.38E+00  1.40E+00  1.40E+00  1.44E+00  1.46E+00  1.49E+00  1.53E+00  1.55E+00
 ene:  1.62E+00  1.63E+00  1.64E+00  1.71E+00  1.71E+00  1.74E+00  1.78E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5436
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -1.9910E-01  9.7457E-02  1.6768E-01  1.7054E-01  2.9392E-01  3.5200E-01
  3.8147E-01  3.9054E-01  4.9123E-01  5.2314E-01  5.7863E-01  6.3895E-01
  7.0153E-01  7.4820E-01  8.6760E-01  8.8168E-01  9.2245E-01  1.0101E+00
  1.0185E+00  1.0663E+00  1.1816E+00  1.2171E+00  1.2623E+00  1.3114E+00
  1.3780E+00  1.3975E+00  1.3991E+00  1.4388E+00  1.4579E+00  1.4896E+00
  1.5278E+00  1.5472E+00  1.6190E+00  1.6300E+00  1.6371E+00  1.7066E+00
  1.7069E+00  1.7418E+00  1.7823E+00  1.8109E+00
 Non-SCF iterations; kpt #     2  , k= ( -0.12500  0.50000  0.00000  ), band residuals:
 res:  1.39E-19  1.38E-19  1.96E-19  1.91E-19  1.46E-20  2.12E-20  3.03E-19  1.87E-20
 res:  2.59E-20  3.83E-19  1.95E-20  3.44E-19  2.25E-20  2.34E-20  2.04E-20  3.16E-20
 res:  2.11E-20  3.10E-20  4.89E-19  3.34E-20  3.54E-20  3.24E-20  3.04E-20  5.31E-19
 res:  6.30E-20  8.03E-20  8.76E-20  1.28E-19  1.22E-19  4.22E-19  1.38E-19  9.50E-20
 res:  1.26E-19  8.13E-20  7.15E-20  1.87E-19  9.80E-20  4.50E-19  8.22E-15  1.97E-10
 ene: -1.36E-01 -3.41E-02  1.32E-01  1.59E-01  2.96E-01  3.45E-01  3.68E-01  4.87E-01
 ene:  5.45E-01  6.09E-01  6.39E-01  6.49E-01  6.73E-01  7.69E-01  8.89E-01  9.45E-01
 ene:  9.63E-01  9.98E-01  1.03E+00  1.04E+00  1.12E+00  1.17E+00  1.19E+00  1.24E+00
 ene:  1.25E+00  1.30E+00  1.32E+00  1.32E+00  1.42E+00  1.45E+00  1.47E+00  1.48E+00
 ene:  1.58E+00  1.60E+00  1.64E+00  1.69E+00  1.74E+00  1.81E+00  1.86E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5472
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -1.3615E-01 -3.4103E-02  1.3177E-01  1.5876E-01  2.9555E-01  3.4492E-01
  3.6760E-01  4.8692E-01  5.4497E-01  6.0878E-01  6.3875E-01  6.4894E-01
  6.7317E-01  7.6904E-01  8.8925E-01  9.4494E-01  9.6314E-01  9.9817E-01
  1.0339E+00  1.0440E+00  1.1249E+00  1.1708E+00  1.1931E+00  1.2355E+00
  1.2542E+00  1.3045E+00  1.3193E+00  1.3240E+00  1.4227E+00  1.4520E+00
  1.4660E+00  1.4779E+00  1.5769E+00  1.5991E+00  1.6361E+00  1.6909E+00
  1.7392E+00  1.8117E+00  1.8593E+00  1.8835E+00
 Non-SCF iterations; kpt #     3  , k= ( -0.25000 -0.37500  0.00000  ), band residuals:
 res:  1.19E-19  1.67E-19  1.91E-19  1.88E-19  1.81E-20  1.86E-20  2.57E-19  2.71E-19
 res:  2.55E-19  3.26E-19  2.53E-20  3.58E-19  2.95E-20  2.89E-20  2.93E-20  2.28E-20
 res:  4.65E-19  5.06E-19  4.23E-20  2.31E-20  2.07E-20  2.12E-20  5.08E-20  8.22E-20
 res:  6.64E-20  3.59E-20  8.42E-20  8.51E-19  6.56E-20  6.81E-20  1.14E-19  6.90E-20
 res:  9.61E-20  6.79E-20  1.36E-19  2.65E-19  1.45E-19  7.99E-20  4.75E-19  4.75E-12
 ene: -1.60E-01  3.45E-02  1.17E-01  1.34E-01  2.64E-01  3.21E-01  4.37E-01  4.48E-01
 ene:  5.87E-01  5.90E-01  6.42E-01  7.08E-01  7.19E-01  7.64E-01  8.02E-01  8.45E-01
 ene:  9.00E-01  9.43E-01  1.03E+00  1.11E+00  1.14E+00  1.19E+00  1.19E+00  1.22E+00
 ene:  1.28E+00  1.30E+00  1.34E+00  1.43E+00  1.46E+00  1.52E+00  1.55E+00  1.57E+00
 ene:  1.59E+00  1.59E+00  1.67E+00  1.69E+00  1.72E+00  1.76E+00  1.78E+00  1.84E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5508
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -1.5990E-01  3.4489E-02  1.1681E-01  1.3442E-01  2.6364E-01  3.2100E-01
  4.3711E-01  4.4836E-01  5.8749E-01  5.9017E-01  6.4208E-01  7.0844E-01
  7.1901E-01  7.6391E-01  8.0166E-01  8.4456E-01  8.9978E-01  9.4330E-01
  1.0259E+00  1.1075E+00  1.1434E+00  1.1899E+00  1.1935E+00  1.2215E+00
  1.2792E+00  1.3002E+00  1.3371E+00  1.4333E+00  1.4551E+00  1.5205E+00
  1.5496E+00  1.5712E+00  1.5887E+00  1.5892E+00  1.6691E+00  1.6862E+00
  1.7171E+00  1.7588E+00  1.7807E+00  1.8393E+00
 Non-SCF iterations; kpt #     4  , k= ( -0.12500 -0.37500  0.12500  ), band residuals:
 res:  1.20E-19  1.51E-19  2.03E-19  2.06E-19  1.53E-20  2.25E-20  2.34E-20  2.63E-19
 res:  3.63E-19  1.87E-20  2.34E-20  2.92E-19  2.11E-20  1.77E-20  1.97E-20  4.51E-19
 res:  4.56E-19  3.71E-20  2.95E-20  4.22E-20  5.58E-19  6.19E-20  2.32E-20  3.99E-20
 res:  7.42E-20  6.67E-20  1.14E-19  9.46E-20  9.41E-20  9.09E-20  8.39E-20  8.06E-20
 res:  7.65E-20  8.95E-20  1.27E-19  8.35E-20  1.05E-19  2.34E-19  8.92E-19  3.03E-09
 ene: -1.44E-01  5.06E-04  9.25E-02  1.45E-01  3.21E-01  3.46E-01  4.00E-01  4.36E-01
 ene:  5.50E-01  5.74E-01  6.56E-01  6.93E-01  7.40E-01  7.74E-01  8.53E-01  8.89E-01
 ene:  9.21E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.16E+00  1.17E+00  1.22E+00
 ene:  1.28E+00  1.31E+00  1.37E+00  1.37E+00  1.41E+00  1.44E+00  1.49E+00  1.54E+00
 ene:  1.56E+00  1.65E+00  1.66E+00  1.72E+00  1.74E+00  1.76E+00  1.79E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5544
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -1.4389E-01  5.0566E-04  9.2481E-02  1.4469E-01  3.2094E-01  3.4626E-01
  4.0031E-01  4.3566E-01  5.5012E-01  5.7387E-01  6.5646E-01  6.9286E-01
  7.3975E-01  7.7382E-01  8.5316E-01  8.8906E-01  9.2097E-01  9.9221E-01
  1.0234E+00  1.0583E+00  1.1102E+00  1.1610E+00  1.1720E+00  1.2154E+00
  1.2770E+00  1.3085E+00  1.3684E+00  1.3737E+00  1.4107E+00  1.4436E+00
  1.4890E+00  1.5385E+00  1.5612E+00  1.6518E+00  1.6627E+00  1.7159E+00
  1.7370E+00  1.7650E+00  1.7933E+00  1.8504E+00
 Non-SCF iterations; kpt #     5  , k= ( -0.12500  0.25000  0.00000  ), band residuals:
 res:  1.03E-19  1.51E-19  2.01E-19  1.63E-19  2.46E-19  2.99E-19  1.42E-20  1.76E-20
 res:  2.13E-20  2.57E-20  2.96E-19  2.67E-20  2.70E-20  2.88E-20  4.86E-19  3.06E-20
 res:  2.67E-20  3.16E-20  5.29E-19  2.56E-20  3.10E-20  5.84E-19  1.92E-20  3.82E-20
 res:  1.42E-19  1.21E-19  4.85E-20  9.48E-20  5.36E-19  1.81E-19  1.34E-19  9.62E-20
 res:  8.22E-19  3.03E-20  8.63E-19  2.63E-19  2.54E-19  2.58E-19  2.40E-19  1.77E-11
 ene: -1.80E-01  4.53E-02  1.30E-01  1.88E-01  3.15E-01  3.52E-01  3.58E-01  4.46E-01
 ene:  4.57E-01  5.73E-01  5.89E-01  6.71E-01  7.34E-01  7.83E-01  8.27E-01  8.79E-01
 ene:  9.13E-01  1.01E+00  1.03E+00  1.06E+00  1.18E+00  1.20E+00  1.22E+00  1.31E+00
 ene:  1.31E+00  1.35E+00  1.37E+00  1.41E+00  1.45E+00  1.49E+00  1.50E+00  1.59E+00
 ene:  1.59E+00  1.64E+00  1.64E+00  1.66E+00  1.68E+00  1.70E+00  1.75E+00  1.80E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5580
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -1.8008E-01  4.5295E-02  1.3033E-01  1.8831E-01  3.1515E-01  3.5160E-01
  3.5784E-01  4.4598E-01  4.5736E-01  5.7302E-01  5.8900E-01  6.7067E-01
  7.3416E-01  7.8283E-01  8.2661E-01  8.7902E-01  9.1325E-01  1.0109E+00
  1.0332E+00  1.0640E+00  1.1786E+00  1.1986E+00  1.2150E+00  1.3059E+00
  1.3091E+00  1.3512E+00  1.3688E+00  1.4057E+00  1.4484E+00  1.4889E+00
  1.4961E+00  1.5940E+00  1.5945E+00  1.6362E+00  1.6412E+00  1.6555E+00
  1.6810E+00  1.6993E+00  1.7538E+00  1.7977E+00
 Non-SCF iterations; kpt #     6  , k= ( -0.25000  0.37500  0.00000  ), band residuals:
 res:  1.57E-19  1.63E-19  1.72E-20  2.03E-19  1.77E-20  1.62E-20  2.97E-19  2.05E-20
 res:  1.54E-20  4.02E-19  2.56E-20  1.69E-20  3.08E-19  1.67E-20  2.26E-20  2.85E-19
 res:  2.81E-20  2.54E-20  2.88E-20  4.52E-20  5.36E-20  4.59E-20  8.42E-19  6.29E-20
 res:  2.37E-20  2.86E-20  5.87E-19  8.48E-20  7.08E-20  1.43E-19  1.06E-19  1.02E-19
 res:  1.01E-19  5.02E-19  2.43E-19  1.15E-19  3.51E-19  5.15E-19  6.61E-18  6.57E-12
 ene: -1.17E-01 -2.93E-02  6.72E-02  1.47E-01  2.82E-01  4.17E-01  4.19E-01  4.72E-01
 ene:  5.09E-01  5.14E-01  6.77E-01  7.67E-01  7.69E-01  8.08E-01  8.22E-01  9.01E-01
 ene:  9.33E-01  9.52E-01  1.02E+00  1.03E+00  1.13E+00  1.14E+00  1.17E+00  1.19E+00
 ene:  1.24E+00  1.27E+00  1.30E+00  1.32E+00  1.45E+00  1.48E+00  1.51E+00  1.54E+00
 ene:  1.57E+00  1.61E+00  1.62E+00  1.69E+00  1.79E+00  1.79E+00  1.83E+00  1.87E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5616
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -1.1740E-01 -2.9273E-02  6.7165E-02  1.4656E-01  2.8192E-01  4.1693E-01
  4.1901E-01  4.7226E-01  5.0928E-01  5.1408E-01  6.7651E-01  7.6682E-01
  7.6932E-01  8.0807E-01  8.2209E-01  9.0072E-01  9.3308E-01  9.5187E-01
  1.0207E+00  1.0340E+00  1.1320E+00  1.1433E+00  1.1700E+00  1.1894E+00
  1.2368E+00  1.2669E+00  1.2961E+00  1.3248E+00  1.4478E+00  1.4807E+00
  1.5140E+00  1.5355E+00  1.5703E+00  1.6148E+00  1.6161E+00  1.6936E+00
  1.7901E+00  1.7936E+00  1.8344E+00  1.8723E+00
 Non-SCF iterations; kpt #     7  , k= ( -0.37500  0.50000  0.00000  ), band residuals:
 res:  1.71E-19  1.69E-19  2.09E-19  1.86E-19  2.02E-20  1.86E-20  2.91E-19  2.81E-19
 res:  1.95E-20  3.53E-19  3.08E-19  2.28E-20  1.92E-20  3.25E-19  2.76E-20  3.15E-20
 res:  2.44E-20  2.52E-20  3.73E-20  4.00E-20  2.00E-20  3.19E-20  5.58E-20  4.46E-20
 res:  5.87E-19  5.75E-20  5.59E-20  7.28E-20  6.18E-20  6.37E-20  1.09E-19  9.14E-20
 res:  3.08E-20  5.80E-20  9.76E-20  9.11E-20  9.96E-20  1.92E-19  4.66E-19  8.71E-18
 ene: -1.04E-01 -3.55E-02  8.80E-02  1.17E-01  2.46E-01  2.87E-01  5.22E-01  5.23E-01
 ene:  6.12E-01  6.19E-01  6.77E-01  6.84E-01  7.63E-01  7.75E-01  8.02E-01  9.04E-01
 ene:  9.07E-01  9.31E-01  9.79E-01  1.04E+00  1.05E+00  1.08E+00  1.11E+00  1.18E+00
 ene:  1.30E+00  1.32E+00  1.39E+00  1.42E+00  1.44E+00  1.48E+00  1.54E+00  1.54E+00
 ene:  1.59E+00  1.65E+00  1.66E+00  1.67E+00  1.71E+00  1.78E+00  1.80E+00  1.81E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5652
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -1.0393E-01 -3.5456E-02  8.8022E-02  1.1675E-01  2.4618E-01  2.8658E-01
  5.2200E-01  5.2344E-01  6.1238E-01  6.1892E-01  6.7694E-01  6.8439E-01
  7.6283E-01  7.7479E-01  8.0246E-01  9.0371E-01  9.0665E-01  9.3121E-01
  9.7934E-01  1.0397E+00  1.0470E+00  1.0835E+00  1.1062E+00  1.1765E+00
  1.2989E+00  1.3223E+00  1.3890E+00  1.4172E+00  1.4411E+00  1.4826E+00
  1.5404E+00  1.5413E+00  1.5908E+00  1.6503E+00  1.6586E+00  1.6745E+00
  1.7145E+00  1.7789E+00  1.7960E+00  1.8104E+00
 Non-SCF iterations; kpt #     8  , k= ( -0.25000  0.50000  0.12500  ), band residuals:
 res:  1.63E-19  1.72E-19  1.87E-20  2.38E-19  1.76E-20  1.80E-20  3.19E-19  1.77E-20
 res:  3.11E-19  3.42E-19  3.95E-19  2.67E-20  4.05E-19  3.78E-19  2.85E-20  2.07E-20
 res:  3.92E-19  4.56E-19  5.11E-20  2.50E-20  2.95E-20  6.36E-20  4.46E-20  7.91E-20
 res:  5.16E-20  4.59E-20  5.80E-20  5.27E-20  8.04E-20  1.93E-20  7.08E-20  8.16E-20
 res:  7.15E-20  1.03E-19  3.18E-20  2.37E-19  2.17E-19  2.07E-19  3.20E-19  1.05E-06
 ene: -9.71E-02 -3.94E-02  6.44E-02  1.06E-01  3.02E-01  3.73E-01  4.10E-01  4.90E-01
 ene:  5.27E-01  6.27E-01  6.67E-01  7.40E-01  7.85E-01  8.07E-01  8.63E-01  8.90E-01
 ene:  9.09E-01  9.35E-01  9.92E-01  1.02E+00  1.06E+00  1.11E+00  1.13E+00  1.23E+00
 ene:  1.25E+00  1.28E+00  1.35E+00  1.36E+00  1.40E+00  1.42E+00  1.48E+00  1.56E+00
 ene:  1.63E+00  1.66E+00  1.69E+00  1.74E+00  1.76E+00  1.78E+00  1.80E+00  1.88E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5688
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -9.7117E-02 -3.9372E-02  6.4370E-02  1.0586E-01  3.0237E-01  3.7302E-01
  4.1015E-01  4.9010E-01  5.2739E-01  6.2732E-01  6.6731E-01  7.3998E-01
  7.8451E-01  8.0713E-01  8.6285E-01  8.8986E-01  9.0889E-01  9.3488E-01
  9.9181E-01  1.0191E+00  1.0562E+00  1.1091E+00  1.1337E+00  1.2335E+00
  1.2464E+00  1.2762E+00  1.3472E+00  1.3635E+00  1.3995E+00  1.4163E+00
  1.4797E+00  1.5618E+00  1.6334E+00  1.6585E+00  1.6866E+00  1.7361E+00
  1.7650E+00  1.7844E+00  1.8014E+00  1.8792E+00
 Non-SCF iterations; kpt #     9  , k= ( -0.12500  0.00000  0.00000  ), band residuals:
 res:  8.69E-20  1.68E-19  1.57E-19  1.57E-19  2.11E-19  2.43E-19  2.67E-19  1.82E-19
 res:  3.52E-19  3.48E-19  2.60E-20  5.07E-20  2.60E-20  2.52E-20  6.00E-20  2.51E-20
 res:  2.68E-20  4.28E-20  3.86E-19  3.81E-19  3.99E-20  4.41E-20  7.29E-20  3.45E-19
 res:  5.17E-19  5.19E-19  2.21E-20  1.94E-19  2.20E-19  2.92E-20  6.92E-20  6.76E-20
 res:  9.69E-20  9.55E-20  2.26E-19  3.01E-19  3.62E-19  2.03E-19  7.45E-19  3.58E-06
 ene: -2.19E-01  1.58E-01  2.06E-01  2.06E-01  3.07E-01  3.26E-01  3.26E-01  3.87E-01
 ene:  4.88E-01  4.88E-01  5.29E-01  6.06E-01  6.74E-01  6.74E-01  8.19E-01  9.98E-01
 ene:  9.98E-01  1.00E+00  1.10E+00  1.10E+00  1.18E+00  1.18E+00  1.21E+00  1.31E+00
 ene:  1.39E+00  1.39E+00  1.42E+00  1.50E+00  1.50E+00  1.54E+00  1.59E+00  1.59E+00
 ene:  1.65E+00  1.65E+00  1.70E+00  1.75E+00  1.75E+00  1.76E+00  1.78E+00  1.85E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5724
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -2.1917E-01  1.5754E-01  2.0639E-01  2.0639E-01  3.0711E-01  3.2625E-01
  3.2625E-01  3.8695E-01  4.8775E-01  4.8775E-01  5.2928E-01  6.0622E-01
  6.7374E-01  6.7374E-01  8.1921E-01  9.9777E-01  9.9777E-01  1.0028E+00
  1.1047E+00  1.1047E+00  1.1771E+00  1.1771E+00  1.2103E+00  1.3117E+00
  1.3853E+00  1.3853E+00  1.4154E+00  1.4956E+00  1.4956E+00  1.5392E+00
  1.5850E+00  1.5850E+00  1.6475E+00  1.6475E+00  1.7049E+00  1.7490E+00
  1.7490E+00  1.7631E+00  1.7838E+00  1.8465E+00
 Non-SCF iterations; kpt #    10  , k= ( -0.37500  0.00000  0.00000  ), band residuals:
 res:  1.22E-19  1.51E-19  1.73E-19  1.73E-19  1.41E-20  3.14E-19  3.14E-19  2.95E-20
 res:  3.85E-19  3.85E-19  1.99E-20  2.30E-20  3.56E-19  3.56E-19  2.88E-20  2.72E-20
 res:  2.72E-20  3.31E-20  2.00E-20  4.70E-19  4.70E-19  5.28E-19  5.28E-19  8.85E-19
 res:  8.85E-19  2.16E-20  1.70E-19  1.95E-19  1.95E-19  8.48E-20  8.48E-20  9.21E-20
 res:  3.37E-20  8.61E-19  2.10E-19  2.85E-19  5.62E-17  8.15E-16  5.14E-15  6.29E-11
 ene: -1.63E-01 -4.29E-03  1.77E-01  1.77E-01  2.76E-01  3.43E-01  3.43E-01  5.00E-01
 ene:  5.36E-01  5.36E-01  5.67E-01  7.26E-01  7.28E-01  7.28E-01  8.28E-01  9.02E-01
 ene:  9.02E-01  1.06E+00  1.10E+00  1.11E+00  1.11E+00  1.20E+00  1.20E+00  1.26E+00
 ene:  1.26E+00  1.30E+00  1.36E+00  1.42E+00  1.42E+00  1.46E+00  1.46E+00  1.47E+00
 ene:  1.56E+00  1.60E+00  1.73E+00  1.73E+00  1.76E+00  1.77E+00  1.77E+00  1.79E+00
 vtowfk : number of one-way 3D ffts skipped in vtowfk until now =5760
     eigenvalues (hartree) for   40  bands
              after    1 non-SCF iterations with    4 CG line minimizations
 -1.6342E-01 -4.2938E-03  1.7658E-01  1.7658E-01  2.7595E-01  3.4341E-01
  3.4341E-01  5.0049E-01  5.3621E-01  5.3621E-01  5.6659E-01  7.2623E-01
  7.2841E-01  7.2841E-01  8.2786E-01  9.0196E-01  9.0196E-01  1.0553E+00
  1.0965E+00  1.1084E+00  1.1084E+00  1.2031E+00  1.2031E+00  1.2634E+00
  1.2634E+00  1.3006E+00  1.3581E+00  1.4197E+00  1.4197E+00  1.4579E+00
  1.4579E+00  1.4682E+00  1.5604E+00  1.5997E+00  1.7303E+00  1.7303E+00
  1.7578E+00  1.7676E+00  1.7676E+00  1.7891E+00
 Total charge density [el/Bohr^3]
,     Maximum=    8.5805E-02  at reduced coord.    0.1000    0.1000    0.7000
,     Minimum=    3.5223E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    8.0000E+00
 ETOT 16  -8.8725570746536     1.776E-14 8.934E-19 4.941E-17
 scprqt: <Vxc>= -3.5451570E-01 hartree

 At SCF step   16   max residual=  8.93E-19 < tolwfr=  1.00E-18 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.02339301E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.02339301E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.02339301E-05  sigma(2 1)=  0.00000000E+00

   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 ioarr: writing density data
ioarr: file name is tgw1o_DS1_DEN
ioarr: data written to disk file tgw1o_DS1_DEN

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

 Sorting g-vecs for an output of states on an unique "big" PW basis.

--- !WARNING
message: |
    Removing inversion related symmetrie from initial set
src_file: remove_inversion.F90
src_line: 86
...

 The inversion was not found in the symmetries list.
 Program uses the original set of symmetries
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is:   471

--- !COMMENT
message: |
    Number of bands calculated=   40, greater than nbandkss=   35
     will write nbandkss bands on the KSS file
src_file: outkss.F90
src_line: 560
...

 Number of bands written on file is:    35

 Total amount of disk space required by _KSS file =     2.74 Mb.
  Subdivided into : 
  Header             =     0.01 Mb.
  KB elements        =     0.22 Mb.
  Wavefunctions (PW) =     2.52 Mb.
  PAW projectors     =     0.00 Mb.


 Opening file for KS structure output: tgw1o_DS1_KSS
 number of Gamma centered plane waves    471
 number of Gamma centered shells     40
 number of bands     35
 maximum angular momentum components      3
 number of symmetry operations 24 (without inversion)

 k-point   1
 Eigenvalues in Hartree for ikpt=   1
   1     -0.1991  0.0975  0.1677  0.1705  0.2939  0.3520  0.3815  0.3905  0.4912
          0.5231  0.5786  0.6390  0.7015  0.7482  0.8676  0.8817  0.9225  1.0101
          1.0185  1.0663  1.1816  1.2171  1.2623  1.3114  1.3780  1.3975  1.3991
          1.4388  1.4579  1.4896  1.5278  1.5472  1.6190  1.6300  1.6371
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point   2
 Eigenvalues in Hartree for ikpt=   2
   2     -0.1362 -0.0341  0.1318  0.1588  0.2956  0.3449  0.3676  0.4869  0.5450
          0.6088  0.6388  0.6489  0.6732  0.7690  0.8892  0.9449  0.9631  0.9982
          1.0339  1.0440  1.1249  1.1708  1.1931  1.2355  1.2542  1.3045  1.3193
          1.3240  1.4227  1.4520  1.4660  1.4779  1.5769  1.5991  1.6361
 Writing out eigenvalues/vectors for ikpt=  2
 Occupation numbers for ikpt=  2
   2      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point   3
 Eigenvalues in Hartree for ikpt=   3
   3     -0.1599  0.0345  0.1168  0.1344  0.2636  0.3210  0.4371  0.4484  0.5875
          0.5902  0.6421  0.7084  0.7190  0.7639  0.8017  0.8446  0.8998  0.9433
          1.0259  1.1075  1.1434  1.1899  1.1935  1.2215  1.2792  1.3002  1.3371
          1.4333  1.4551  1.5205  1.5496  1.5712  1.5887  1.5892  1.6691
 Writing out eigenvalues/vectors for ikpt=  3
 Occupation numbers for ikpt=  3
   3      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point   4
 Eigenvalues in Hartree for ikpt=   4
   4     -0.1439  0.0005  0.0925  0.1447  0.3209  0.3463  0.4003  0.4357  0.5501
          0.5739  0.6565  0.6929  0.7397  0.7738  0.8532  0.8891  0.9210  0.9922
          1.0234  1.0583  1.1102  1.1610  1.1720  1.2154  1.2770  1.3085  1.3684
          1.3737  1.4107  1.4436  1.4890  1.5385  1.5612  1.6518  1.6627
 Writing out eigenvalues/vectors for ikpt=  4
 Occupation numbers for ikpt=  4
   4      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point   5
 Eigenvalues in Hartree for ikpt=   5
   5     -0.1801  0.0453  0.1303  0.1883  0.3151  0.3516  0.3578  0.4460  0.4574
          0.5730  0.5890  0.6707  0.7342  0.7828  0.8266  0.8790  0.9133  1.0109
          1.0332  1.0640  1.1786  1.1986  1.2150  1.3059  1.3091  1.3512  1.3688
          1.4057  1.4484  1.4889  1.4961  1.5940  1.5945  1.6362  1.6412
 Writing out eigenvalues/vectors for ikpt=  5
 Occupation numbers for ikpt=  5
   5      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point   6
 Eigenvalues in Hartree for ikpt=   6
   6     -0.1174 -0.0293  0.0672  0.1466  0.2819  0.4169  0.4190  0.4723  0.5093
          0.5141  0.6765  0.7668  0.7693  0.8081  0.8221  0.9007  0.9331  0.9519
          1.0207  1.0340  1.1320  1.1433  1.1700  1.1894  1.2368  1.2669  1.2961
          1.3248  1.4478  1.4807  1.5140  1.5355  1.5703  1.6148  1.6161
 Writing out eigenvalues/vectors for ikpt=  6
 Occupation numbers for ikpt=  6
   6      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point   7
 Eigenvalues in Hartree for ikpt=   7
   7     -0.1039 -0.0355  0.0880  0.1167  0.2462  0.2866  0.5220  0.5234  0.6124
          0.6189  0.6769  0.6844  0.7628  0.7748  0.8025  0.9037  0.9067  0.9312
          0.9793  1.0397  1.0470  1.0835  1.1062  1.1765  1.2989  1.3223  1.3890
          1.4172  1.4411  1.4826  1.5404  1.5413  1.5908  1.6503  1.6586
 Writing out eigenvalues/vectors for ikpt=  7
 Occupation numbers for ikpt=  7
   7      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point   8
 Eigenvalues in Hartree for ikpt=   8
   8     -0.0971 -0.0394  0.0644  0.1059  0.3024  0.3730  0.4102  0.4901  0.5274
          0.6273  0.6673  0.7400  0.7845  0.8071  0.8628  0.8899  0.9089  0.9349
          0.9918  1.0191  1.0562  1.1091  1.1337  1.2335  1.2464  1.2762  1.3472
          1.3635  1.3995  1.4163  1.4797  1.5618  1.6334  1.6585  1.6866
 Writing out eigenvalues/vectors for ikpt=  8
 Occupation numbers for ikpt=  8
   8      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point   9
 Eigenvalues in Hartree for ikpt=   9
   9     -0.2192  0.1575  0.2064  0.2064  0.3071  0.3263  0.3263  0.3869  0.4877
          0.4877  0.5293  0.6062  0.6737  0.6737  0.8192  0.9978  0.9978  1.0028
          1.1047  1.1047  1.1771  1.1771  1.2103  1.3117  1.3853  1.3853  1.4154
          1.4956  1.4956  1.5392  1.5850  1.5850  1.6475  1.6475  1.7049
 Writing out eigenvalues/vectors for ikpt=  9
 Occupation numbers for ikpt=  9
   9      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000

 k-point  10
 Eigenvalues in Hartree for ikpt=  10
  10     -0.1634 -0.0043  0.1766  0.1766  0.2760  0.3434  0.3434  0.5005  0.5362
          0.5362  0.5666  0.7262  0.7284  0.7284  0.8279  0.9020  0.9020  1.0553
          1.0965  1.1084  1.1084  1.2031  1.2031  1.2634  1.2634  1.3006  1.3581
          1.4197  1.4197  1.4579  1.4579  1.4682  1.5604  1.5997  1.7303
 Writing out eigenvalues/vectors for ikpt= 10
 Occupation numbers for ikpt= 10
  10      2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)a(n',k,G) =  0.000000
  max sum_G a(n,k,G)a(n',k,G) =  0.000000

================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tgw1o_DS1_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.00, wall:     0.01

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.7040 [eV], located at k-point      :  -0.3750  0.0000  0.0000
   Fundamental gap     =   1.0826 [eV], Top of valence bands at :  -0.1250  0.0000  0.0000
                                        Bottom of conduction at :  -0.3750  0.5000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.02339301E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.02339301E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.02339301E-05  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -8.8951E-01 GPa]
- sigma(1 1)=  8.89512785E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  8.89512785E-01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  8.89512785E-01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    1

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 SCREENING: Calculation of the susceptibility and dielectric matrices

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  10  10  10
         ecut(hartree)=      2.080   => boxcut(ratio)=   2.15322

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    10   10   10
  Augmented FFT divisions ...................    11   11   10
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspini: atom type   1  psp file is ../../Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    ../../Psps_for_tests/14si.pspnc
-  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
- 14.00000   4.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.907  14.692    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.617   4.181    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.80626423934776    0.22824404341771    1.17378968127746   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.43386982
         --- l  ekb(1:nproj) -->
             0    3.287949
             1    1.849886
 pspatm: atomic psp has been read  and splines computed


 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    2
  Number of pseudopotentials ..    1
  Number of types of atoms   ..    1
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   2
  Max number of (l,m,n) components ..   2

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  5.4188

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1

 GW calculation type              =    0
 zcut to avoid poles in chi0 [eV] =   0.100000


--- !WARNING
message: |
    Using WFK filetgw1o_DS1_WFK
src_file: setup_screening.F90
src_line: 211
...


 Sorting g-vecs for an output of states on an unique "big" PW basis.

--- !WARNING
message: |
    Removing inversion related symmetrie from initial set
src_file: remove_inversion.F90
src_line: 86
...

 The inversion was not found in the symmetries list.
 Program uses the original set of symmetries
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:   471
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1085000  5.1085000  G(1)= -0.0978761  0.0978761  0.0978761
 R(2)=  5.1085000  0.0000000  5.1085000  G(2)=  0.0978761 -0.0978761  0.0978761
 R(3)=  5.1085000  5.1085000  0.0000000  G(3)=  0.0978761  0.0978761 -0.0978761
 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1     0  0  1   0.000  1    -1 -1 -1   0.000  1     0  1  0   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     1  0  0   0.000  1     0  1  0   0.000  1    -1 -1 -1   0.000  1


 -1 -1 -1   0.000  1     0  1  0   0.000  1     1  0  0   0.000  1     0  0  1   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     1  0  0   0.000  1     0  1  0   0.000  1    -1 -1 -1   0.000  1


 -1 -1 -1   0.000  1     0  1  0   0.000  1     1  0  0   0.000  1     0  0  1   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
  1  0  0   0.000  1     0  0  1   0.000  1    -1 -1 -1   0.000  1     0  1  0   0.000  1


  1  0  0   0.000  1     0  0  1   0.000  1    -1 -1 -1   0.000  1     0  1  0   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
 -1 -1 -1   0.000  1     0  1  0   0.000  1     1  0  0   0.000  1     0  0  1   0.000  1


  0  0  1   0.000  1     1  0  0   0.000  1     0  1  0   0.000  1    -1 -1 -1   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
 -1 -1 -1   0.000  1     0  1  0   0.000  1     1  0  0   0.000  1     0  0  1   0.000  1


  0  0  1   0.000  1     1  0  0   0.000  1     0  1  0   0.000  1    -1 -1 -1   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
  1  0  0   0.000  1     0  0  1   0.000  1    -1 -1 -1   0.000  1     0  1  0   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights :

     1)    -1.25000000E-01 -2.50000000E-01  0.00000000E+00       0.09375
     2)    -1.25000000E-01  5.00000000E-01  0.00000000E+00       0.09375
     3)    -2.50000000E-01 -3.75000000E-01  0.00000000E+00       0.09375
     4)    -1.25000000E-01 -3.75000000E-01  1.25000000E-01       0.18750
     5)    -1.25000000E-01  2.50000000E-01  0.00000000E+00       0.09375
     6)    -2.50000000E-01  3.75000000E-01  0.00000000E+00       0.09375
     7)    -3.75000000E-01  5.00000000E-01  0.00000000E+00       0.09375
     8)    -2.50000000E-01  5.00000000E-01  1.25000000E-01       0.18750
     9)    -1.25000000E-01  0.00000000E+00  0.00000000E+00       0.03125
    10)    -3.75000000E-01  0.00000000E+00  0.00000000E+00       0.03125

 Together with 24 symmetry operations and time-reversal symmetry 
 yields   256 points in the full Brillouin Zone.


 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :    19
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.00391
     2)     3.75000000E-01  5.00000000E-01  1.25000000E-01       0.09375
     3)    -1.25000000E-01  1.25000000E-01  0.00000000E+00       0.04688
     4)    -1.25000000E-01  2.50000000E-01 -1.25000000E-01       0.09375
     5)     0.00000000E+00  2.50000000E-01 -2.50000000E-01       0.04688
     6)     2.50000000E-01  5.00000000E-01  0.00000000E+00       0.09375
     7)    -1.25000000E-01  0.00000000E+00 -1.25000000E-01       0.02344
     8)     3.75000000E-01  3.75000000E-01  0.00000000E+00       0.02344
     9)     0.00000000E+00  3.75000000E-01 -1.25000000E-01       0.09375
    10)     3.75000000E-01  2.50000000E-01  1.25000000E-01       0.09375
    11)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.03125
    12)    -3.75000000E-01 -2.50000000E-01  3.75000000E-01       0.09375
    13)    -3.75000000E-01  3.75000000E-01  0.00000000E+00       0.04688
    14)    -3.75000000E-01  2.50000000E-01  1.25000000E-01       0.09375
    15)     5.00000000E-01 -3.75000000E-01  1.25000000E-01       0.04688
    16)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.01172
    17)     2.50000000E-01  5.00000000E-01 -2.50000000E-01       0.02344
    18)     2.50000000E-01  0.00000000E+00  2.50000000E-01       0.02344
    19)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with 24 symmetry operations and time-reversal symmetry 
 yields   256 points in the full Brillouin Zone.


 Optimal value for ng0sh =  2 2 2
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1
 symkpt : found identity, with number  1

 setmesh: npwwfn        =       51; Max (m1,m2,m3)   =      2     2     2
          npweps/npwsigx=       89; Max (mm1,mm2,mm3)=      5     5     5
          mG0 added     =   2  2  2
 calculated ecutwfn          =   2.080 [Ha]
 calculated ecutsigx/ecuteps =   3.593 [Ha]
 using method =  2 with ecuteff =  11.140 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  12x 12x 12
          total number of points  =     1728


 integrate q->0 : numerical BZ geometry factor =     8.8646

 vcoul_init : cutoff-mode = AUXILIARY_FUNCTION
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a screening       |  input file contains a screening
. ABINIT  code version 7.6.2            |  ABINIT  code version 7.6.2
. date 20140305 bantot  170 natom    2  |  date 20140305 bantot  400 natom    2
  nkpt  10 nsym 24 ngfft  10,  10,  10  |  nkpt  10 nsym 24 ngfft  20,  20,  20
  ntypat  1 ecut_eff   2.0800589        |  ntypat  1 ecut_eff   8.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.1085000   5.1085000  |     0.0000000   5.1085000   5.1085000
     5.1085000   0.0000000   5.1085000  |     5.1085000   0.0000000   5.1085000
     5.1085000   5.1085000   0.0000000  |     5.1085000   5.1085000   0.0000000

--- !WARNING
message: |
    input ecut_eff=    2.080059 /= disk file ecut_eff=    8.000000.
src_file: m_header.F90
src_line: 3886
...

  nband:                                |  nband:
    17  17  17  17  17  17  17  17  17  |    40  40  40  40  40  40  40  40  40
    17                                  |    40
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    0 -1  1  0 -1  0  1 -1  0           |    0 -1  1  0 -1  0  1 -1  0
   -1  0  0 -1  0  1 -1  1  0           |   -1  0  0 -1  0  1 -1  1  0
    0  1 -1  1  0 -1  0  0 -1           |    0  1 -1  1  0 -1  0  0 -1
   -1  0  0 -1  1  0 -1  0  1           |   -1  0  0 -1  1  0 -1  0  1
    0 -1  1  1 -1  0  0 -1  0           |    0 -1  1  1 -1  0  0 -1  0
    1  0  0  0  0  1  0  1  0           |    1  0  0  0  0  1  0  1  0
    0  1 -1  0  0 -1  1  0 -1           |    0  1 -1  0  0 -1  1  0 -1
   -1  0  1 -1  1  0 -1  0  0           |   -1  0  1 -1  1  0 -1  0  0
    0 -1  0  1 -1  0  0 -1  1           |    0 -1  0  1 -1  0  0 -1  1
    1  0 -1  0  0 -1  0  1 -1           |    1  0 -1  0  0 -1  0  1 -1
    0  1  0  0  0  1  1  0  0           |    0  1  0  0  0  1  1  0  0
    1  0 -1  0  1 -1  0  0 -1           |    1  0 -1  0  1 -1  0  0 -1
    0 -1  0  0 -1  1  1 -1  0           |    0 -1  0  0 -1  1  1 -1  0
   -1  0  1 -1  0  0 -1  1  0           |   -1  0  1 -1  0  0 -1  1  0
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0  0 -1  0  1 -1  1  0 -1           |    0  0 -1  0  1 -1  1  0 -1
    1 -1  0  0 -1  1  0 -1  0           |    1 -1  0  0 -1  1  0 -1  0
    0  0  1  1  0  0  0  1  0           |    0  0  1  1  0  0  0  1  0
   -1  1  0 -1  0  0 -1  0  1           |   -1  1  0 -1  0  0 -1  0  1
    0  0  1  0  1  0  1  0  0           |    0  0  1  0  1  0  1  0  0
    1 -1  0  0 -1  0  0 -1  1           |    1 -1  0  0 -1  0  0 -1  1
    0  0 -1  1  0 -1  0  1 -1           |    0  0 -1  1  0 -1  0  1 -1
   -1  1  0 -1  0  1 -1  0  0           |   -1  1  0 -1  0  1 -1  0  0
  typat:                                |  typat:
    1  1                                |    1  1
  so_psp  :                             |  so_psp  :
    1                                   |    1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1        |    1  1  1  1  1  1  1  1  1  1
  kpt:                                  |  kpt:
    -0.1250000  -0.2500000   0.0000000  |    -0.1250000  -0.2500000   0.0000000
    -0.1250000   0.5000000   0.0000000  |    -0.1250000   0.5000000   0.0000000
    -0.2500000  -0.3750000   0.0000000  |    -0.2500000  -0.3750000   0.0000000
    -0.1250000  -0.3750000   0.1250000  |    -0.1250000  -0.3750000   0.1250000
    -0.1250000   0.2500000   0.0000000  |    -0.1250000   0.2500000   0.0000000
  wtk:                                  |  wtk:
    0.094  0.094  0.094  0.188  0.094   |    0.094  0.094  0.094  0.188  0.094
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   14.00                                |   14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
================================================================================

 ==== FFT mesh used for oscillator strengths ====
  FFT mesh divisions ........................    12   12   12
  Augmented FFT divisions ...................    13   13   12
  FFT algorithm .............................   112
  FFT cache size ............................    16
 top of valence       [eV]   5.62
 bottom of conduction [eV]   6.70
 Fermi energy         [eV]   6.16


--- !WARNING
message: |
    Using k-centered G-spheres.
src_file: m_wfs.F90
src_line: 1033
...

 Memory needed for Fourier components ug =          0.1 [Mb]
 Memory needed for real space ur =          2.2 [Mb]
 ==== Info on the Wfd% object ====
  Number of irreducible k-points ........ 10
  Number of spinorial components ........ 1
  Number of spin-density components ..... 1
  Number of spin polarizations .......... 1
  Plane wave cutoff energy ..............   2.1
  Max number of G-vectors ............... 42
  Total number of FFT points ............ 1728
  Number of FFT points treated by me .... 1728
  Parallelism over k-b-g (paral_kgb) .... 0


 ==== FFT mesh for wavefunctions ====
  FFT mesh divisions ........................    12   12   12
  Augmented FFT divisions ...................    13   13   12
  FFT algorithm .............................   112
  FFT cache size ............................    16

--- !WARNING
message: |
    Wfd is init using WFK file
src_file: screening.F90
src_line: 660
...

 wfd_read_wfk : about to read tgw1o_DS1_WFK
wfd_read_wfk: will read 170 (b,k,s) states
  CHECK           -1          10

--- !COMMENT
message: |
    Changing FFT mesh
src_file: m_wfs.F90
src_line: 4918
...

 planewave contribution to nelect:    7.9465
  Number of electrons per unit cell       =    7.9464546397514599     
  Charge density outside the cutoff region=    3.8556876892325112     
 Number of electrons calculated from density =    7.9465; Expected =    8.0000
 average of density, n =  0.029803
 r_s =    2.0009
 omega_plasma =   16.6528 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    7.9489E-02  at reduced coord.    0.1000    0.2000    0.6000
,     Minimum=    3.0454E-03  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    7.9465E+00

 ewald : nr and ng are    3 and   11

 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    1.670000E+01
 Memory required for chi0 matrix=          0.1 [Mb].

--- !WARNING
message: |
    Finds that output file tgw1o_DS2_EM1
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tgw1o_DS2_EM1A


--- !WARNING
message: |
    Finds that output file tgw1o_DS2_EM1A
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:tgw1o_DS2_EM1B



--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------

--- !COMMENT
message: |
    Changing FFT mesh
src_file: m_wfs.F90
src_line: 4918
...

 Q-points for long wave-length limit. #   1
     1)      0.000010    0.000020    0.000030

 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0q0.
 Calculating chi0(q=(0,0,0),omega,G,G")
 Calculation status (    256 to be completed):
 ik =    1 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  1, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.000   0.000  -0.000   0.000  -0.000  -0.000   0.000  -0.000   0.000
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2   0.000 -15.325  -0.005  -0.005  -0.005   0.000   0.000   0.000   0.000
       -0.000   0.000  -0.000  -0.000  -0.000  -4.478  -0.330  -0.330  -0.330

    3  -0.000  -0.005 -15.325  -0.005  -0.005   0.000   0.000   0.000   0.000
        0.000  -0.000   0.000  -0.000  -0.000  -0.330  -4.478  -0.330  -0.330

    4   0.000  -0.005  -0.005 -15.325  -0.005   0.000   0.000   0.000   0.000
       -0.000  -0.000  -0.000   0.000  -0.000  -0.330  -0.330  -4.478  -0.330

    5  -0.000  -0.005  -0.005  -0.005 -15.325   0.000   0.000   0.000   0.000
        0.000  -0.000  -0.000  -0.000   0.000  -0.330  -0.330  -0.330  -4.478

    6  -0.000   0.000   0.000   0.000   0.000 -15.325  -0.005  -0.005  -0.005
       -0.000   4.478   0.330   0.330   0.330  -0.000   0.000   0.000   0.000

    7   0.000   0.000   0.000   0.000   0.000  -0.005 -15.325  -0.005  -0.005
        0.000   0.330   4.478   0.330   0.330   0.000  -0.000   0.000   0.000

    8  -0.000   0.000   0.000   0.000   0.000  -0.005  -0.005 -15.325  -0.005
       -0.000   0.330   0.330   4.478   0.330   0.000   0.000  -0.000   0.000

    9   0.000   0.000   0.000   0.000   0.000  -0.005  -0.005  -0.005 -15.325
        0.000   0.330   0.330   0.330   4.478   0.000   0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  1, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.000   0.000  -0.000   0.000  -0.000  -0.000   0.000  -0.000   0.000
       -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000   0.000  -0.000

    2   0.000  -5.333   0.088   0.088   0.088   0.000  -0.000   0.000  -0.000
       -0.000  -0.000   0.000  -0.000   0.000  -1.025  -0.152  -0.152  -0.152

    3  -0.000   0.088  -5.333   0.088   0.088  -0.000   0.000   0.000   0.000
        0.000  -0.000  -0.000   0.000  -0.000  -0.152  -1.025  -0.152  -0.152

    4   0.000   0.088   0.088  -5.333   0.088   0.000   0.000   0.000  -0.000
       -0.000   0.000   0.000   0.000   0.000  -0.152  -0.152  -1.025  -0.152

    5  -0.000   0.088   0.088   0.088  -5.333  -0.000   0.000   0.000   0.000
        0.000   0.000   0.000  -0.000   0.000  -0.152  -0.152  -0.152  -1.025

    6  -0.000  -0.000   0.000   0.000   0.000  -5.333   0.088   0.088   0.088
       -0.000   1.025   0.152   0.152   0.152   0.000   0.000  -0.000   0.000

    7   0.000   0.000  -0.000   0.000   0.000   0.088  -5.333   0.088   0.088
        0.000   0.152   1.025   0.152   0.152   0.000   0.000  -0.000   0.000

    8  -0.000   0.000   0.000  -0.000   0.000   0.088   0.088  -5.333   0.088
       -0.000   0.152   0.152   1.025   0.152  -0.000  -0.000   0.000  -0.000

    9   0.000   0.000   0.000   0.000  -0.000   0.088   0.088   0.088  -5.333
        0.000   0.152   0.152   0.152   1.025  -0.000  -0.000  -0.000   0.000

 Analyzing long wavelength limit for several q
 For q-point:  0.000010 0.000020 0.000030
  dielectric constant =  13.9412
  dielectric constant without local fields =  15.6048

  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :     35.30  [%]


--------------------------------------------------------------------------------
  q-point number  2        q = ( 0.375000, 0.500000, 0.125000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  2, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -16.211  -2.289  -1.510  -0.561  -2.319  -1.510  -2.289  -2.319  -0.561
        0.000  -2.289  -1.510  -0.561  -2.319   1.510   2.289   2.319   0.561

    2  -2.289 -13.338   0.062   0.048   0.352  -0.000  -0.000  -0.000   0.000
        2.289   0.000  -0.000  -0.000  -0.000  -2.059  -0.030   0.135  -0.182

    3  -1.510   0.062 -16.454   2.032   0.046   0.000  -0.000  -0.000  -0.000
        1.510   0.000   0.000   0.000   0.000   0.023  -2.059  -0.109  -0.196

    4  -0.561   0.048   2.032 -17.893  -0.151  -0.000   0.000  -0.000   0.000
        0.561   0.000  -0.000   0.000   0.000  -0.196  -0.182  -2.441  -0.640

    5  -2.319   0.352   0.046  -0.151 -11.705  -0.000  -0.000   0.000  -0.000
        2.319   0.000  -0.000  -0.000   0.000  -0.109   0.135   0.202  -2.441

    6  -1.510  -0.000   0.000  -0.000  -0.000 -16.454   0.062   0.046   2.032
       -1.510   2.059  -0.023   0.196   0.109  -0.000   0.000  -0.000  -0.000

    7  -2.289  -0.000  -0.000   0.000  -0.000   0.062 -13.338   0.352   0.048
       -2.289   0.030   2.059   0.182  -0.135  -0.000  -0.000   0.000   0.000

    8  -2.319  -0.000  -0.000  -0.000   0.000   0.046   0.352 -11.705  -0.151
       -2.319  -0.135   0.109   2.441  -0.202   0.000  -0.000  -0.000   0.000

    9  -0.561   0.000  -0.000   0.000  -0.000   2.032   0.048  -0.151 -17.893
       -0.561   0.182   0.196   0.640   2.441   0.000  -0.000  -0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  2, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.965  -0.555  -0.244   0.118  -0.593  -0.244  -0.555  -0.593   0.118
        0.000  -0.555  -0.244   0.118  -0.593   0.244   0.555   0.593  -0.118

    2  -0.555  -4.684   0.029   0.019   0.152   0.000   0.000   0.000   0.000
        0.555  -0.000   0.000   0.000  -0.000  -0.678  -0.044  -0.058  -0.100

    3  -0.244   0.029  -5.430   0.091   0.067  -0.000   0.000  -0.000  -0.000
        0.244  -0.000   0.000  -0.000   0.000  -0.076  -0.678  -0.047  -0.081

    4   0.118   0.019   0.091  -5.086   0.036   0.000   0.000  -0.000  -0.000
       -0.118  -0.000   0.000   0.000  -0.000  -0.081  -0.100  -0.708  -0.081

    5  -0.593   0.152   0.067   0.036  -4.167   0.000   0.000  -0.000   0.000
        0.593   0.000  -0.000   0.000  -0.000  -0.047  -0.058  -0.079  -0.708

    6  -0.244   0.000  -0.000   0.000   0.000  -5.430   0.029   0.067   0.091
       -0.244   0.678   0.076   0.081   0.047   0.000   0.000   0.000  -0.000

    7  -0.555   0.000   0.000   0.000   0.000   0.029  -4.684   0.152   0.019
       -0.555   0.044   0.678   0.100   0.058  -0.000  -0.000  -0.000  -0.000

    8  -0.593   0.000  -0.000  -0.000  -0.000   0.067   0.152  -4.167   0.036
       -0.593   0.058   0.047   0.708   0.079  -0.000   0.000  -0.000  -0.000

    9   0.118   0.000  -0.000  -0.000   0.000   0.091   0.019   0.036  -5.086
        0.118   0.100   0.081   0.081   0.708   0.000   0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :     60.79  [%]


--------------------------------------------------------------------------------
  q-point number  3        q = (-0.125000, 0.125000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  3, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -7.592   1.064  -1.196  -1.196  -1.672  -1.672  -1.196  -1.196   1.064
       -0.000   1.064  -1.196  -1.196  -1.672   1.672   1.196   1.196  -1.064

    2   1.064 -16.521   0.662   0.662  -0.075   0.000   0.000   0.000  -0.000
       -1.064  -0.000   0.000   0.000   0.000  -3.754  -0.392  -0.392  -1.274

    3  -1.196   0.662 -15.655  -0.118  -0.395   0.000   0.000   0.000  -0.000
        1.196  -0.000  -0.000  -0.000  -0.000  -0.122  -3.446  -0.036  -0.392

    4  -1.196   0.662  -0.118 -15.655  -0.395   0.000   0.000   0.000  -0.000
        1.196  -0.000   0.000  -0.000  -0.000  -0.122  -0.036  -3.446  -0.392

    5  -1.672  -0.075  -0.395  -0.395 -13.788  -0.000  -0.000   0.000   0.000
        1.672  -0.000   0.000   0.000  -0.000   0.006  -0.122  -0.122  -3.754

    6  -1.672   0.000   0.000   0.000  -0.000 -13.788  -0.395  -0.395  -0.075
       -1.672   3.754   0.122   0.122  -0.006   0.000  -0.000  -0.000   0.000

    7  -1.196   0.000   0.000   0.000  -0.000  -0.395 -15.655  -0.118   0.662
       -1.196   0.392   3.446   0.036   0.122   0.000   0.000   0.000   0.000

    8  -1.196   0.000   0.000   0.000   0.000  -0.395  -0.118 -15.655   0.662
       -1.196   0.392   0.036   3.446   0.122   0.000  -0.000   0.000   0.000

    9   1.064  -0.000  -0.000  -0.000   0.000  -0.075   0.662   0.662 -16.521
        1.064   1.274   0.392   0.392   3.754  -0.000  -0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  3, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.731   0.232  -0.108  -0.108  -0.309  -0.309  -0.108  -0.108   0.232
        0.000   0.232  -0.108  -0.108  -0.309   0.309   0.108   0.108  -0.232

    2   0.232  -5.372   0.090   0.090   0.074  -0.000  -0.000  -0.000  -0.000
       -0.232   0.000   0.000   0.000  -0.000  -0.964  -0.174  -0.174  -0.200

    3  -0.108   0.090  -5.305   0.071   0.079   0.000   0.000   0.000  -0.000
        0.108  -0.000   0.000   0.000  -0.000  -0.099  -0.954  -0.123  -0.174

    4  -0.108   0.090   0.071  -5.305   0.079   0.000   0.000   0.000  -0.000
        0.108  -0.000  -0.000   0.000  -0.000  -0.099  -0.123  -0.954  -0.174

    5  -0.309   0.074   0.079   0.079  -4.930  -0.000  -0.000  -0.000   0.000
        0.309   0.000   0.000   0.000  -0.000  -0.089  -0.099  -0.099  -0.964

    6  -0.309  -0.000   0.000   0.000  -0.000  -4.930   0.079   0.079   0.074
       -0.309   0.964   0.099   0.099   0.089   0.000  -0.000  -0.000  -0.000

    7  -0.108  -0.000   0.000   0.000  -0.000   0.079  -5.305   0.071   0.090
       -0.108   0.174   0.954   0.123   0.099   0.000  -0.000  -0.000  -0.000

    8  -0.108  -0.000   0.000   0.000  -0.000   0.079   0.071  -5.305   0.090
       -0.108   0.174   0.123   0.954   0.099   0.000   0.000   0.000  -0.000

    9   0.232  -0.000  -0.000  -0.000   0.000   0.074   0.090   0.090  -5.372
        0.232   0.200   0.174   0.174   0.964   0.000   0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    3 :     76.97  [%]


--------------------------------------------------------------------------------
  q-point number  4        q = (-0.125000, 0.250000,-0.125000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  4, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -12.783  -1.070  -1.070  -1.964  -1.751  -2.300  -2.300  -1.448   1.742
       -0.000  -1.070  -1.070  -1.964  -1.751   2.300   2.300   1.448  -1.742

    2  -1.070 -17.161   1.043   0.126   0.025  -0.000   0.000   0.000   0.000
        1.070  -0.000   0.000   0.000   0.000  -2.718   0.017  -0.023  -0.944

    3  -1.070   1.043 -17.161   0.126   0.025   0.000  -0.000   0.000   0.000
        1.070  -0.000  -0.000   0.000   0.000   0.017  -2.718  -0.023  -0.944

    4  -1.964   0.126   0.126 -15.388   0.055   0.000   0.000   0.000  -0.000
        1.964  -0.000  -0.000   0.000  -0.000   0.066   0.066  -2.613  -0.493

    5  -1.751   0.025   0.025   0.055 -12.054   0.000   0.000   0.000  -0.000
        1.751  -0.000  -0.000   0.000  -0.000   0.091   0.091  -0.207  -3.328

    6  -2.300  -0.000   0.000   0.000   0.000 -13.609  -0.100  -0.126   0.072
       -2.300   2.718  -0.017  -0.066  -0.091  -0.000  -0.000  -0.000  -0.000

    7  -2.300   0.000  -0.000   0.000   0.000  -0.100 -13.609  -0.126   0.072
       -2.300  -0.017   2.718  -0.066  -0.091   0.000  -0.000  -0.000   0.000

    8  -1.448   0.000   0.000   0.000   0.000  -0.126  -0.126 -15.169   1.547
       -1.448   0.023   0.023   2.613   0.207   0.000   0.000   0.000   0.000

    9   1.742   0.000   0.000  -0.000  -0.000   0.072   0.072   1.547 -16.459
        1.742   0.944   0.944   0.493   3.328   0.000  -0.000  -0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  4, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.965  -0.033  -0.033  -0.303  -0.520  -0.448  -0.448  -0.299   0.413
       -0.000  -0.033  -0.033  -0.303  -0.520   0.448   0.448   0.299  -0.413

    2  -0.033  -5.429   0.083   0.046   0.073  -0.000   0.000  -0.000   0.000
        0.033   0.000  -0.000   0.000   0.000  -0.818  -0.088  -0.112  -0.149

    3  -0.033   0.083  -5.429   0.046   0.073   0.000  -0.000   0.000   0.000
        0.033   0.000  -0.000  -0.000   0.000  -0.088  -0.818  -0.112  -0.149

    4  -0.303   0.046   0.046  -5.245   0.105   0.000  -0.000   0.000  -0.000
        0.303  -0.000   0.000  -0.000  -0.000  -0.062  -0.062  -0.803  -0.166

    5  -0.520   0.073   0.073   0.105  -4.323   0.000  -0.000   0.000  -0.000
        0.520  -0.000  -0.000   0.000   0.000  -0.074  -0.074  -0.065  -0.840

    6  -0.448  -0.000   0.000   0.000   0.000  -4.800   0.103   0.070   0.045
       -0.448   0.818   0.088   0.062   0.074   0.000  -0.000   0.000  -0.000

    7  -0.448   0.000  -0.000  -0.000  -0.000   0.103  -4.800   0.070   0.045
       -0.448   0.088   0.818   0.062   0.074   0.000   0.000   0.000   0.000

    8  -0.299  -0.000   0.000   0.000   0.000   0.070   0.070  -5.242   0.077
       -0.299   0.112   0.112   0.803   0.065  -0.000  -0.000   0.000  -0.000

    9   0.413   0.000   0.000  -0.000  -0.000   0.045   0.045   0.077  -4.776
        0.413   0.149   0.149   0.166   0.840   0.000  -0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    4 :     65.52  [%]


--------------------------------------------------------------------------------
  q-point number  5        q = ( 0.000000, 0.250000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  5, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -14.897  -2.147   0.290  -2.147  -2.059  -2.147  -2.059  -2.147   0.290
       -0.000  -2.147   0.290  -2.147  -2.059   2.147   2.059   2.147  -0.290

    2  -2.147 -15.214   0.715   0.086   0.067   0.000  -0.000   0.000   0.000
        2.147   0.000  -0.000   0.000  -0.000  -2.204   0.030   0.014  -0.124

    3   0.290   0.715 -17.648   0.715   0.032  -0.000  -0.000  -0.000   0.000
       -0.290   0.000  -0.000   0.000  -0.000  -0.124  -2.877  -0.124  -1.653

    4  -2.147   0.086   0.715 -15.214   0.067   0.000  -0.000   0.000  -0.000
        2.147  -0.000  -0.000   0.000  -0.000   0.014   0.030  -2.204  -0.124

    5  -2.059   0.067   0.032   0.067 -11.844  -0.000  -0.000  -0.000   0.000
        2.059   0.000   0.000   0.000  -0.000   0.030   0.101   0.030  -2.877

    6  -2.147   0.000  -0.000   0.000  -0.000 -15.214   0.067   0.086   0.715
       -2.147   2.204   0.124  -0.014  -0.030  -0.000   0.000  -0.000   0.000

    7  -2.059  -0.000  -0.000  -0.000  -0.000   0.067 -11.844   0.067   0.032
       -2.059  -0.030   2.877  -0.030  -0.101  -0.000   0.000  -0.000  -0.000

    8  -2.147   0.000  -0.000   0.000  -0.000   0.086   0.067 -15.214   0.715
       -2.147  -0.014   0.124   2.204  -0.030   0.000   0.000  -0.000   0.000

    9   0.290   0.000   0.000  -0.000   0.000   0.715   0.032   0.715 -17.648
        0.290   0.124   1.653   0.124   2.877  -0.000   0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  5, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.490  -0.381   0.256  -0.381  -0.560  -0.381  -0.560  -0.381   0.256
       -0.000  -0.381   0.256  -0.381  -0.560   0.381   0.560   0.381  -0.256

    2  -0.381  -5.197   0.057   0.035   0.106   0.000  -0.000   0.000  -0.000
        0.381   0.000   0.000  -0.000   0.000  -0.733  -0.055  -0.062  -0.132

    3   0.256   0.057  -4.961   0.057   0.042  -0.000  -0.000  -0.000   0.000
       -0.256  -0.000  -0.000  -0.000  -0.000  -0.132  -0.774  -0.132  -0.123

    4  -0.381   0.035   0.057  -5.197   0.106   0.000  -0.000  -0.000  -0.000
        0.381   0.000   0.000   0.000   0.000  -0.062  -0.055  -0.733  -0.132

    5  -0.560   0.106   0.042   0.106  -4.238  -0.000   0.000  -0.000   0.000
        0.560  -0.000   0.000  -0.000   0.000  -0.055  -0.085  -0.055  -0.774

    6  -0.381   0.000  -0.000   0.000  -0.000  -5.197   0.106   0.035   0.057
       -0.381   0.733   0.132   0.062   0.055  -0.000   0.000   0.000  -0.000

    7  -0.560  -0.000  -0.000  -0.000   0.000   0.106  -4.238   0.106   0.042
       -0.560   0.055   0.774   0.055   0.085  -0.000  -0.000  -0.000  -0.000

    8  -0.381   0.000  -0.000  -0.000  -0.000   0.035   0.106  -5.197   0.057
       -0.381   0.062   0.132   0.733   0.055  -0.000   0.000  -0.000   0.000

    9   0.256  -0.000   0.000  -0.000   0.000   0.057   0.042   0.057  -4.961
        0.256   0.132   0.123   0.132   0.774   0.000   0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    5 :     62.91  [%]


--------------------------------------------------------------------------------
  q-point number  6        q = ( 0.250000, 0.500000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  6, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -16.290  -2.218  -1.560  -1.560  -2.051  -1.485  -2.445  -2.445   0.404
        0.000  -2.218  -1.560  -1.560  -2.051   1.485   2.445   2.445  -0.404

    2  -2.218 -14.000   0.061   0.061   0.437  -0.000  -0.000  -0.000   0.000
        2.218  -0.000  -0.000  -0.000  -0.000  -1.962   0.030   0.030  -0.367

    3  -1.560   0.061 -17.627   1.461   0.180  -0.000  -0.000   0.000   0.000
        1.560   0.000  -0.000  -0.000   0.000  -0.036  -2.128   0.037  -0.521

    4  -1.560   0.061   1.461 -17.627   0.180  -0.000   0.000   0.000   0.000
        1.560   0.000   0.000  -0.000   0.000  -0.036   0.037  -2.128  -0.521

    5  -2.051   0.437   0.180   0.180 -10.888  -0.000  -0.000  -0.000   0.000
        2.051   0.000  -0.000  -0.000  -0.000  -0.110   0.171   0.171  -2.684

    6  -1.485  -0.000  -0.000  -0.000  -0.000 -15.152   0.127   0.127   2.223
       -1.485   1.962   0.036   0.036   0.110  -0.000   0.000   0.000   0.000

    7  -2.445  -0.000  -0.000   0.000  -0.000   0.127 -12.360   0.356  -0.193
       -2.445  -0.030   2.128  -0.037  -0.171  -0.000  -0.000  -0.000   0.000

    8  -2.445  -0.000   0.000   0.000  -0.000   0.127   0.356 -12.360  -0.193
       -2.445  -0.030  -0.037   2.128  -0.171  -0.000   0.000  -0.000   0.000

    9   0.404   0.000   0.000   0.000   0.000   2.223  -0.193  -0.193 -17.341
        0.404   0.367   0.521   0.521   2.684  -0.000  -0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  6, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -3.175  -0.542  -0.143  -0.143  -0.610  -0.401  -0.595  -0.595   0.300
       -0.000  -0.542  -0.143  -0.143  -0.610   0.401   0.595   0.595  -0.300

    2  -0.542  -4.910   0.009   0.009   0.151  -0.000  -0.000   0.000   0.000
        0.542  -0.000  -0.000  -0.000  -0.000  -0.635  -0.041  -0.041  -0.123

    3  -0.143   0.009  -5.410   0.083   0.068   0.000   0.000  -0.000   0.000
        0.143   0.000   0.000  -0.000   0.000  -0.072  -0.661  -0.055  -0.080

    4  -0.143   0.009   0.083  -5.410   0.068   0.000  -0.000  -0.000  -0.000
        0.143   0.000   0.000  -0.000   0.000  -0.072  -0.055  -0.661  -0.080

    5  -0.610   0.151   0.068   0.068  -3.877  -0.000   0.000  -0.000   0.000
        0.610   0.000  -0.000  -0.000   0.000  -0.046  -0.079  -0.079  -0.689

    6  -0.401  -0.000   0.000   0.000  -0.000  -5.315   0.070   0.070   0.075
       -0.401   0.635   0.072   0.072   0.046   0.000   0.000   0.000  -0.000

    7  -0.595  -0.000   0.000  -0.000   0.000   0.070  -4.381   0.157   0.015
       -0.595   0.041   0.661   0.055   0.079  -0.000  -0.000  -0.000   0.000

    8  -0.595   0.000  -0.000  -0.000  -0.000   0.070   0.157  -4.381   0.015
       -0.595   0.041   0.055   0.661   0.079  -0.000   0.000   0.000   0.000

    9   0.300   0.000   0.000  -0.000   0.000   0.075   0.015   0.015  -4.476
        0.300   0.123   0.080   0.080   0.689   0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    6 :     60.45  [%]


--------------------------------------------------------------------------------
  q-point number  7        q = (-0.125000, 0.000000,-0.125000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  7, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -4.785   0.376   0.376  -1.311  -1.311  -1.311  -1.311   0.376   0.376
       -0.000   0.376   0.376  -1.311  -1.311   1.311   1.311  -0.376  -0.376

    2   0.376 -16.129   1.063  -0.134  -0.134   0.000  -0.000   0.000  -0.000
       -0.376  -0.000   0.000   0.000   0.000  -3.946  -0.345  -0.536  -0.536

    3   0.376   1.063 -16.129  -0.134  -0.134  -0.000   0.000  -0.000   0.000
       -0.376  -0.000  -0.000   0.000   0.000  -0.345  -3.946  -0.536  -0.536

    4  -1.311  -0.134  -0.134 -14.699  -0.409  -0.000  -0.000  -0.000   0.000
        1.311  -0.000  -0.000  -0.000   0.000  -0.034  -0.034  -3.946  -0.345

    5  -1.311  -0.134  -0.134  -0.409 -14.699  -0.000  -0.000   0.000  -0.000
        1.311  -0.000  -0.000  -0.000  -0.000  -0.034  -0.034  -0.345  -3.946

    6  -1.311   0.000  -0.000  -0.000  -0.000 -14.699  -0.409  -0.134  -0.134
       -1.311   3.946   0.345   0.034   0.034   0.000  -0.000  -0.000   0.000

    7  -1.311  -0.000   0.000  -0.000  -0.000  -0.409 -14.699  -0.134  -0.134
       -1.311   0.345   3.946   0.034   0.034   0.000   0.000   0.000  -0.000

    8   0.376   0.000  -0.000  -0.000   0.000  -0.134  -0.134 -16.129   1.063
        0.376   0.536   0.536   3.946   0.345   0.000  -0.000   0.000  -0.000

    9   0.376  -0.000   0.000   0.000  -0.000  -0.134  -0.134   1.063 -16.129
        0.376   0.536   0.536   0.345   3.946  -0.000   0.000   0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  7, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.377   0.106   0.106  -0.175  -0.175  -0.175  -0.175   0.106   0.106
       -0.000   0.106   0.106  -0.175  -0.175   0.175   0.175  -0.106  -0.106

    2   0.106  -5.406   0.103   0.081   0.081  -0.000   0.000   0.000   0.000
       -0.106   0.000   0.000   0.000   0.000  -0.994  -0.142  -0.184  -0.184

    3   0.106   0.103  -5.406   0.081   0.081   0.000  -0.000  -0.000   0.000
       -0.106  -0.000   0.000   0.000   0.000  -0.142  -0.994  -0.184  -0.184

    4  -0.175   0.081   0.081  -5.158   0.082  -0.000  -0.000  -0.000   0.000
        0.175  -0.000  -0.000   0.000  -0.000  -0.108  -0.108  -0.994  -0.142

    5  -0.175   0.081   0.081   0.082  -5.158  -0.000  -0.000  -0.000   0.000
        0.175  -0.000  -0.000   0.000   0.000  -0.108  -0.108  -0.142  -0.994

    6  -0.175  -0.000   0.000  -0.000  -0.000  -5.158   0.082   0.081   0.081
       -0.175   0.994   0.142   0.108   0.108   0.000  -0.000  -0.000   0.000

    7  -0.175   0.000  -0.000  -0.000  -0.000   0.082  -5.158   0.081   0.081
       -0.175   0.142   0.994   0.108   0.108   0.000   0.000   0.000   0.000

    8   0.106   0.000  -0.000  -0.000  -0.000   0.081   0.081  -5.406   0.103
        0.106   0.184   0.184   0.994   0.142   0.000  -0.000  -0.000  -0.000

    9   0.106   0.000   0.000   0.000   0.000   0.081   0.081   0.103  -5.406
        0.106   0.184   0.184   0.142   0.994  -0.000  -0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    7 :     81.80  [%]


--------------------------------------------------------------------------------
  q-point number  8        q = ( 0.375000, 0.375000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  8, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -15.158  -2.297  -0.766  -0.766  -2.297  -0.766  -2.297  -2.297  -0.766
        0.000  -2.297  -0.766  -0.766  -2.297   0.766   2.297   2.297   0.766

    2  -2.297 -12.638  -0.100  -0.100   0.401   0.000  -0.000  -0.000   0.000
        2.297   0.000  -0.000  -0.000   0.000  -2.369   0.139   0.139  -0.249

    3  -0.766  -0.100 -17.103   2.484  -0.100   0.000  -0.000   0.000   0.000
        0.766   0.000  -0.000   0.000   0.000  -0.200  -2.369  -0.249  -0.200

    4  -0.766  -0.100   2.484 -17.103  -0.100   0.000   0.000  -0.000   0.000
        0.766   0.000  -0.000  -0.000   0.000  -0.200  -0.249  -2.369  -0.200

    5  -2.297   0.401  -0.100  -0.100 -12.638   0.000  -0.000  -0.000   0.000
        2.297  -0.000  -0.000  -0.000   0.000  -0.249   0.139   0.139  -2.369

    6  -0.766   0.000   0.000   0.000   0.000 -17.103  -0.100  -0.100   2.484
       -0.766   2.369   0.200   0.200   0.249   0.000  -0.000  -0.000  -0.000

    7  -2.297  -0.000  -0.000   0.000  -0.000  -0.100 -12.638   0.401  -0.100
       -2.297  -0.139   2.369   0.249  -0.139   0.000  -0.000  -0.000   0.000

    8  -2.297  -0.000   0.000  -0.000  -0.000  -0.100   0.401 -12.638  -0.100
       -2.297  -0.139   0.249   2.369  -0.139   0.000   0.000  -0.000   0.000

    9  -0.766   0.000   0.000   0.000   0.000   2.484  -0.100  -0.100 -17.103
       -0.766   0.249   0.200   0.200   2.369   0.000  -0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  8, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.742  -0.561  -0.027  -0.027  -0.561  -0.027  -0.561  -0.561  -0.027
       -0.000  -0.561  -0.027  -0.027  -0.561   0.027   0.561   0.561   0.027

    2  -0.561  -4.466   0.035   0.035   0.149   0.000   0.000   0.000   0.000
        0.561  -0.000   0.000  -0.000  -0.000  -0.724  -0.060  -0.060  -0.073

    3  -0.027   0.035  -5.354   0.103   0.035   0.000   0.000  -0.000   0.000
        0.027  -0.000  -0.000  -0.000  -0.000  -0.083  -0.724  -0.073  -0.083

    4  -0.027   0.035   0.103  -5.354   0.035  -0.000  -0.000   0.000   0.000
        0.027   0.000   0.000  -0.000   0.000  -0.083  -0.073  -0.724  -0.083

    5  -0.561   0.149   0.035   0.035  -4.466   0.000   0.000  -0.000  -0.000
        0.561   0.000   0.000  -0.000  -0.000  -0.073  -0.060  -0.060  -0.724

    6  -0.027   0.000   0.000  -0.000   0.000  -5.354   0.035   0.035   0.103
       -0.027   0.724   0.083   0.083   0.073  -0.000   0.000  -0.000  -0.000

    7  -0.561   0.000   0.000  -0.000   0.000   0.035  -4.466   0.149   0.035
       -0.561   0.060   0.724   0.073   0.060  -0.000   0.000   0.000  -0.000

    8  -0.561   0.000  -0.000   0.000  -0.000   0.035   0.149  -4.466   0.035
       -0.561   0.060   0.073   0.724   0.060   0.000  -0.000   0.000   0.000

    9  -0.027   0.000   0.000   0.000  -0.000   0.103   0.035   0.035  -5.354
       -0.027   0.073   0.083   0.083   0.724   0.000   0.000  -0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    8 :     61.27  [%]


--------------------------------------------------------------------------------
  q-point number  9        q = ( 0.000000, 0.375000,-0.125000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  9, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -14.298  -2.063  -0.907  -2.063  -1.728  -2.065  -2.320  -2.065   1.840
        0.000  -2.063  -0.907  -2.063  -1.728   2.065   2.320   2.065  -1.840

    2  -2.063 -16.075   0.494   0.046   0.286   0.000  -0.000  -0.000  -0.000
        2.063   0.000   0.000   0.000   0.000  -2.258   0.119   0.049  -0.442

    3  -0.907   0.494 -17.671   0.494   0.293   0.000   0.000   0.000  -0.000
        0.907  -0.000  -0.000  -0.000  -0.000   0.062  -2.592   0.062  -1.453

    4  -2.063   0.046   0.494 -16.075   0.286   0.000  -0.000   0.000  -0.000
        2.063  -0.000   0.000  -0.000   0.000   0.049   0.119  -2.258  -0.442

    5  -1.728   0.286   0.293   0.286 -11.079  -0.000  -0.000  -0.000  -0.000
        1.728  -0.000   0.000  -0.000  -0.000   0.026   0.117   0.026  -3.183

    6  -2.065   0.000   0.000   0.000  -0.000 -14.050   0.038   0.175   0.801
       -2.065   2.258  -0.062  -0.049  -0.026   0.000   0.000  -0.000   0.000

    7  -2.320  -0.000   0.000  -0.000  -0.000   0.038 -12.383   0.038  -0.073
       -2.320  -0.119   2.592  -0.119  -0.117  -0.000   0.000  -0.000   0.000

    8  -2.065  -0.000   0.000   0.000  -0.000   0.175   0.038 -14.050   0.801
       -2.065  -0.049  -0.062   2.258  -0.026   0.000   0.000   0.000   0.000

    9   1.840  -0.000  -0.000  -0.000  -0.000   0.801  -0.073   0.801 -16.093
        1.840   0.442   1.453   0.442   3.183  -0.000  -0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  9, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -2.725  -0.325  -0.030  -0.325  -0.585  -0.481  -0.557  -0.481   0.459
       -0.000  -0.325  -0.030  -0.325  -0.585   0.481   0.557   0.481  -0.459

    2  -0.325  -5.356   0.050   0.018   0.107   0.000  -0.000   0.000  -0.000
        0.325  -0.000   0.000  -0.000  -0.000  -0.702  -0.046  -0.056  -0.133

    3  -0.030   0.050  -5.392   0.050   0.072   0.000  -0.000   0.000  -0.000
        0.030  -0.000   0.000   0.000  -0.000  -0.089  -0.727  -0.089  -0.118

    4  -0.325   0.018   0.050  -5.356   0.107   0.000  -0.000   0.000  -0.000
        0.325   0.000  -0.000  -0.000  -0.000  -0.056  -0.046  -0.702  -0.133

    5  -0.585   0.107   0.072   0.107  -3.957  -0.000  -0.000   0.000  -0.000
        0.585   0.000   0.000   0.000   0.000  -0.066  -0.084  -0.066  -0.753

    6  -0.481   0.000   0.000   0.000  -0.000  -4.944   0.111   0.069   0.041
       -0.481   0.702   0.089   0.056   0.066   0.000  -0.000   0.000   0.000

    7  -0.557  -0.000  -0.000  -0.000  -0.000   0.111  -4.447   0.111   0.023
       -0.557   0.046   0.727   0.046   0.084   0.000   0.000  -0.000  -0.000

    8  -0.481   0.000   0.000   0.000   0.000   0.069   0.111  -4.944   0.041
       -0.481   0.056   0.089   0.702   0.066  -0.000   0.000   0.000   0.000

    9   0.459  -0.000  -0.000  -0.000  -0.000   0.041   0.023   0.041  -4.200
        0.459   0.133   0.118   0.133   0.753  -0.000   0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point    9 :     61.91  [%]


--------------------------------------------------------------------------------
  q-point number 10        q = ( 0.375000, 0.250000, 0.125000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 10, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -12.659  -2.115  -1.260   0.390  -2.100   0.390  -2.100  -2.115  -1.260
       -0.000  -2.115  -1.260   0.390  -2.100  -0.390   2.100   2.115   1.260

    2  -2.115 -12.885  -0.225  -0.130  -0.091   0.000  -0.000  -0.000   0.000
        2.115   0.000   0.000  -0.000   0.000  -3.072   0.070   0.126  -0.200

    3  -1.260  -0.225 -16.259   1.504  -0.073  -0.000  -0.000  -0.000  -0.000
        1.260  -0.000  -0.000   0.000  -0.000  -0.357  -2.706  -0.200   0.010

    4   0.390  -0.130   1.504 -17.275   0.175  -0.000   0.000   0.000  -0.000
       -0.390   0.000  -0.000   0.000   0.000  -1.217  -0.240  -3.072  -0.357

    5  -2.100  -0.091  -0.073   0.175 -14.665   0.000  -0.000  -0.000   0.000
        2.100  -0.000   0.000  -0.000   0.000  -0.240  -0.016   0.070  -2.706

    6   0.390   0.000  -0.000  -0.000   0.000 -17.275   0.175  -0.130   1.504
        0.390   3.072   0.357   1.217   0.240  -0.000  -0.000  -0.000   0.000

    7  -2.100  -0.000  -0.000   0.000  -0.000   0.175 -14.665  -0.091  -0.073
       -2.100  -0.070   2.706   0.240   0.016   0.000  -0.000  -0.000  -0.000

    8  -2.115  -0.000  -0.000   0.000  -0.000  -0.130  -0.091 -12.885  -0.225
       -2.115  -0.126   0.200   3.072  -0.070   0.000   0.000  -0.000  -0.000

    9  -1.260   0.000  -0.000  -0.000   0.000   1.504  -0.073  -0.225 -16.259
       -1.260   0.200  -0.010   0.357   2.706  -0.000   0.000   0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 10, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.684  -0.465  -0.132   0.234  -0.351   0.234  -0.351  -0.465  -0.132
       -0.000  -0.465  -0.132   0.234  -0.351  -0.234   0.351   0.465   0.132

    2  -0.465  -4.598   0.073   0.054   0.103   0.000   0.000  -0.000  -0.000
        0.465  -0.000   0.000  -0.000  -0.000  -0.866  -0.068  -0.077  -0.076

    3  -0.132   0.073  -5.395   0.094   0.051  -0.000  -0.000  -0.000  -0.000
        0.132  -0.000   0.000   0.000  -0.000  -0.153  -0.845  -0.076  -0.120

    4   0.234   0.054   0.094  -5.234   0.057   0.000   0.000  -0.000  -0.000
       -0.234   0.000  -0.000   0.000  -0.000  -0.154  -0.144  -0.866  -0.153

    5  -0.351   0.103   0.051   0.057  -5.064   0.000   0.000   0.000   0.000
        0.351   0.000   0.000   0.000   0.000  -0.144  -0.069  -0.068  -0.845

    6   0.234   0.000  -0.000   0.000   0.000  -5.234   0.057   0.054   0.094
        0.234   0.866   0.153   0.154   0.144   0.000   0.000  -0.000   0.000

    7  -0.351   0.000  -0.000   0.000   0.000   0.057  -5.064   0.103   0.051
       -0.351   0.068   0.845   0.144   0.069  -0.000   0.000   0.000   0.000

    8  -0.465  -0.000  -0.000  -0.000   0.000   0.054   0.103  -4.598   0.073
       -0.465   0.077   0.076   0.866   0.068   0.000  -0.000  -0.000   0.000

    9  -0.132  -0.000  -0.000  -0.000   0.000   0.094   0.051   0.073  -5.395
       -0.132   0.076   0.120   0.153   0.845  -0.000  -0.000  -0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   10 :     67.60  [%]


--------------------------------------------------------------------------------
  q-point number 11        q = ( 0.250000, 0.250000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 11, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -8.794  -1.743  -1.743   2.410  -1.743  -0.876  -0.876  -1.418  -0.876
       -0.000  -1.743  -1.743   2.410  -1.743   0.876   0.876   1.418   0.876

    2  -1.743 -14.686  -0.329   0.540  -0.329   0.000  -0.000   0.000  -0.000
        1.743   0.000  -0.000   0.000  -0.000  -3.269  -0.009  -0.111  -0.009

    3  -1.743  -0.329 -14.686   0.540  -0.329  -0.000  -0.000   0.000  -0.000
        1.743   0.000   0.000  -0.000  -0.000  -0.009  -3.269  -0.111  -0.009

    4   2.410   0.540   0.540 -15.951   0.540  -0.000  -0.000  -0.000  -0.000
       -2.410  -0.000   0.000  -0.000   0.000  -0.914  -0.914  -3.884  -0.914

    5  -1.743  -0.329  -0.329   0.540 -14.686  -0.000   0.000  -0.000   0.000
        1.743   0.000   0.000  -0.000   0.000  -0.009  -0.009  -0.111  -3.269

    6  -0.876   0.000  -0.000  -0.000  -0.000 -16.441   0.410  -0.185   0.410
       -0.876   3.269   0.009   0.914   0.009  -0.000  -0.000   0.000  -0.000

    7  -0.876  -0.000  -0.000  -0.000   0.000   0.410 -16.441  -0.185   0.410
       -0.876   0.009   3.269   0.914   0.009   0.000  -0.000   0.000  -0.000

    8  -1.418   0.000   0.000  -0.000  -0.000  -0.185  -0.185 -12.920  -0.185
       -1.418   0.111   0.111   3.884   0.111  -0.000  -0.000   0.000  -0.000

    9  -0.876  -0.000  -0.000  -0.000   0.000   0.410   0.410  -0.185 -16.441
       -0.876   0.009   0.009   0.914   3.269   0.000   0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 11, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.064  -0.267  -0.267   0.390  -0.267  -0.021  -0.021  -0.406  -0.021
       -0.000  -0.267  -0.267   0.390  -0.267   0.021   0.021   0.406   0.021

    2  -0.267  -5.110   0.075   0.077   0.075  -0.000   0.000  -0.000  -0.000
        0.267   0.000   0.000   0.000   0.000  -0.919  -0.114  -0.083  -0.114

    3  -0.267   0.075  -5.110   0.077   0.075  -0.000   0.000  -0.000  -0.000
        0.267  -0.000   0.000   0.000   0.000  -0.114  -0.919  -0.083  -0.114

    4   0.390   0.077   0.077  -5.136   0.077   0.000  -0.000   0.000   0.000
       -0.390  -0.000  -0.000  -0.000   0.000  -0.192  -0.192  -0.936  -0.192

    5  -0.267   0.075   0.075   0.077  -5.110   0.000   0.000  -0.000   0.000
        0.267  -0.000  -0.000  -0.000   0.000  -0.114  -0.114  -0.083  -0.919

    6  -0.021  -0.000  -0.000   0.000   0.000  -5.403   0.077   0.079   0.077
       -0.021   0.919   0.114   0.192   0.114   0.000   0.000  -0.000   0.000

    7  -0.021   0.000   0.000  -0.000   0.000   0.077  -5.403   0.079   0.077
       -0.021   0.114   0.919   0.192   0.114  -0.000  -0.000  -0.000   0.000

    8  -0.406  -0.000  -0.000   0.000  -0.000   0.079   0.079  -4.679   0.079
       -0.406   0.083   0.083   0.936   0.083   0.000   0.000   0.000   0.000

    9  -0.021  -0.000  -0.000   0.000   0.000   0.077   0.077   0.079  -5.403
       -0.021   0.114   0.114   0.192   0.919  -0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   11 :     72.96  [%]


--------------------------------------------------------------------------------
  q-point number 12        q = (-0.375000,-0.250000, 0.375000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 12, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -18.217  -2.027  -1.952  -2.353  -2.369  -2.167  -0.532  -2.015  -2.313
       -0.000  -2.027  -1.952  -2.353  -2.369   2.167   0.532   2.015   2.313

    2  -2.027 -18.378   0.396   0.041   1.012  -0.000  -0.000  -0.000  -0.000
        2.027   0.000   0.000   0.000   0.000  -1.752  -0.000  -0.000   0.213

    3  -1.952   0.396  -8.623   0.850   0.772  -0.000  -0.000   0.000  -0.000
        1.952  -0.000  -0.000   0.000   0.000  -0.128  -2.245   0.109   0.061

    4  -2.353   0.041   0.850 -13.049   0.104  -0.000  -0.000  -0.000  -0.000
        2.353  -0.000  -0.000  -0.000   0.000   0.038  -0.067  -1.195  -0.109

    5  -2.369   1.012   0.772   0.104 -16.740  -0.000   0.000  -0.000  -0.000
        2.369  -0.000  -0.000  -0.000   0.000   0.162  -0.000  -0.000  -1.358

    6  -2.167  -0.000  -0.000  -0.000  -0.000  -9.987  -0.373   0.766   0.731
       -2.167   1.752   0.128  -0.038  -0.162   0.000   0.000   0.000   0.000

    7  -0.532  -0.000  -0.000  -0.000   0.000  -0.373 -17.279   1.814  -0.155
       -0.532   0.000   2.245   0.067   0.000  -0.000   0.000   0.000   0.000

    8  -2.015  -0.000   0.000  -0.000  -0.000   0.766   1.814 -14.040   0.581
       -2.015   0.000  -0.109   1.195   0.000  -0.000  -0.000   0.000  -0.000

    9  -2.313  -0.000  -0.000  -0.000  -0.000   0.731  -0.155   0.581 -11.328
       -2.313  -0.213  -0.061   0.109   1.358  -0.000  -0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 12, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -4.702  -0.304  -0.625  -0.709  -0.564  -0.665   0.156  -0.666  -0.697
        0.000  -0.304  -0.625  -0.709  -0.564   0.665  -0.156   0.666   0.697

    2  -0.304  -5.266   0.088  -0.038   0.051   0.000   0.000  -0.000   0.000
        0.304   0.000   0.000   0.000  -0.000  -0.413  -0.000  -0.000  -0.030

    3  -0.625   0.088  -3.009   0.203   0.136  -0.000  -0.000  -0.000   0.000
        0.625  -0.000  -0.000  -0.000   0.000  -0.131  -0.445  -0.057  -0.098

    4  -0.709  -0.038   0.203  -4.596  -0.018  -0.000   0.000  -0.000  -0.000
        0.709  -0.000   0.000   0.000  -0.000  -0.048  -0.067  -0.362  -0.026

    5  -0.564   0.051   0.136  -0.018  -5.437  -0.000  -0.000   0.000   0.000
        0.564   0.000  -0.000   0.000   0.000  -0.023  -0.000  -0.000  -0.381

    6  -0.665   0.000  -0.000  -0.000  -0.000  -3.506   0.006   0.149   0.214
       -0.665   0.413   0.131   0.048   0.023  -0.000   0.000   0.000   0.000

    7   0.156   0.000  -0.000   0.000  -0.000   0.006  -3.572   0.036  -0.021
        0.156   0.000   0.445   0.067   0.000  -0.000  -0.000   0.000   0.000

    8  -0.666  -0.000  -0.000  -0.000   0.000   0.149   0.036  -5.060   0.104
       -0.666   0.000   0.057   0.362   0.000  -0.000  -0.000  -0.000  -0.000

    9  -0.697   0.000   0.000  -0.000   0.000   0.214  -0.021   0.104  -4.035
       -0.697   0.030   0.098   0.026   0.381  -0.000  -0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   12 :     59.84  [%]


--------------------------------------------------------------------------------
  q-point number 13        q = (-0.375000, 0.375000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 13, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -17.667  -0.614  -2.490  -2.490  -1.905  -1.905  -2.490  -2.490  -0.614
        0.000  -0.614  -2.490  -2.490  -1.905   1.905   2.490   2.490   0.614

    2  -0.614 -17.896   0.489   0.489   0.107  -0.000  -0.000  -0.000  -0.000
        0.614  -0.000   0.000   0.000   0.000  -2.350   0.147   0.147  -1.117

    3  -2.490   0.489 -14.155   0.247   0.761   0.000  -0.000  -0.000  -0.000
        2.490  -0.000  -0.000  -0.000  -0.000   0.119  -1.349  -0.023   0.147

    4  -2.490   0.489   0.247 -14.155   0.761   0.000  -0.000  -0.000  -0.000
        2.490  -0.000   0.000  -0.000   0.000   0.119  -0.023  -1.349   0.147

    5  -1.905   0.107   0.761   0.761  -9.623   0.000  -0.000   0.000  -0.000
        1.905  -0.000   0.000  -0.000  -0.000  -0.187   0.119   0.119  -2.350

    6  -1.905  -0.000   0.000   0.000   0.000  -9.623   0.761   0.761   0.107
       -1.905   2.350  -0.119  -0.119   0.187   0.000   0.000  -0.000   0.000

    7  -2.490  -0.000  -0.000  -0.000  -0.000   0.761 -14.155   0.247   0.489
       -2.490  -0.147   1.349   0.023  -0.119  -0.000   0.000  -0.000   0.000

    8  -2.490  -0.000  -0.000  -0.000   0.000   0.761   0.247 -14.155   0.489
       -2.490  -0.147   0.023   1.349  -0.119   0.000   0.000   0.000   0.000

    9  -0.614  -0.000  -0.000  -0.000  -0.000   0.107   0.489   0.489 -17.896
       -0.614   1.117  -0.147  -0.147   2.350  -0.000  -0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 13, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -4.360   0.081  -0.653  -0.653  -0.640  -0.640  -0.653  -0.653   0.081
       -0.000   0.081  -0.653  -0.653  -0.640   0.640   0.653   0.653  -0.081

    2   0.081  -4.357   0.006   0.006   0.039  -0.000   0.000   0.000   0.000
       -0.081  -0.000  -0.000  -0.000  -0.000  -0.505  -0.055  -0.055  -0.046

    3  -0.653   0.006  -4.927   0.033   0.174   0.000  -0.000  -0.000  -0.000
        0.653   0.000   0.000  -0.000  -0.000  -0.055  -0.428  -0.011  -0.055

    4  -0.653   0.006   0.033  -4.927   0.174   0.000   0.000  -0.000   0.000
        0.653   0.000   0.000   0.000   0.000  -0.055  -0.011  -0.428  -0.055

    5  -0.640   0.039   0.174   0.174  -3.354   0.000   0.000   0.000  -0.000
        0.640   0.000   0.000  -0.000  -0.000  -0.135  -0.055  -0.055  -0.505

    6  -0.640  -0.000   0.000   0.000   0.000  -3.354   0.174   0.174   0.039
       -0.640   0.505   0.055   0.055   0.135   0.000  -0.000  -0.000  -0.000

    7  -0.653   0.000  -0.000   0.000   0.000   0.174  -4.927   0.033   0.006
       -0.653   0.055   0.428   0.011   0.055   0.000   0.000  -0.000   0.000

    8  -0.653   0.000  -0.000  -0.000   0.000   0.174   0.033  -4.927   0.006
       -0.653   0.055   0.011   0.428   0.055   0.000   0.000  -0.000   0.000

    9   0.081   0.000  -0.000   0.000  -0.000   0.039   0.006   0.006  -4.357
        0.081   0.046   0.055   0.055   0.505   0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   13 :     58.89  [%]


--------------------------------------------------------------------------------
  q-point number 14        q = (-0.375000, 0.250000, 0.125000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 14, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -16.804   0.673  -2.406  -1.899  -2.299  -1.905  -2.206  -2.405  -1.389
       -0.000   0.673  -2.406  -1.899  -2.299   1.905   2.206   2.405   1.389

    2   0.673 -16.804   0.103   1.538  -0.291   0.000  -0.000   0.000  -0.000
       -0.673  -0.000  -0.000  -0.000   0.000  -2.726  -0.283  -0.172  -1.000

    3  -2.406   0.103 -12.734   0.351   0.404  -0.000   0.000  -0.000  -0.000
        2.406   0.000   0.000  -0.000  -0.000   0.142  -1.785  -0.047   0.187

    4  -1.899   1.538   0.351 -14.095   0.374   0.000  -0.000   0.000  -0.000
        1.899   0.000   0.000  -0.000   0.000   0.033   0.018  -1.704  -0.033

    5  -2.299  -0.291   0.404   0.374 -11.212   0.000   0.000  -0.000  -0.000
        2.299  -0.000   0.000  -0.000   0.000   0.081   0.104   0.105  -2.208

    6  -1.905   0.000  -0.000   0.000   0.000  -9.917   0.542   0.607   0.350
       -1.905   2.726  -0.142  -0.033  -0.081  -0.000   0.000  -0.000   0.000

    7  -2.206  -0.000   0.000  -0.000   0.000   0.542 -16.588  -0.007   0.872
       -2.206   0.283   1.785  -0.018  -0.104  -0.000  -0.000  -0.000  -0.000

    8  -2.405   0.000  -0.000   0.000  -0.000   0.607  -0.007 -14.593   0.139
       -2.405   0.172   0.047   1.704  -0.105   0.000   0.000   0.000   0.000

    9  -1.389  -0.000  -0.000  -0.000  -0.000   0.350   0.872   0.139 -18.146
       -1.389   1.000  -0.187   0.033   2.208  -0.000   0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 14, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -3.742   0.366  -0.624  -0.563  -0.638  -0.627  -0.422  -0.570  -0.126
       -0.000   0.366  -0.624  -0.563  -0.638   0.627   0.422   0.570   0.126

    2   0.366  -3.742   0.003   0.038   0.007   0.000   0.000  -0.000   0.000
       -0.366   0.000   0.000   0.000   0.000  -0.616  -0.072  -0.105  -0.069

    3  -0.624   0.003  -4.530   0.079   0.168  -0.000  -0.000  -0.000  -0.000
        0.624  -0.000   0.000  -0.000   0.000  -0.078  -0.551  -0.026  -0.057

    4  -0.563   0.038   0.079  -5.030   0.126   0.000  -0.000  -0.000   0.000
        0.563  -0.000   0.000   0.000  -0.000  -0.058  -0.040  -0.537  -0.057

    5  -0.638   0.007   0.168   0.126  -4.005   0.000   0.000  -0.000   0.000
        0.638  -0.000  -0.000   0.000   0.000  -0.105  -0.029  -0.035  -0.586

    6  -0.627   0.000  -0.000   0.000   0.000  -3.508   0.115   0.156   0.073
       -0.627   0.616   0.078   0.058   0.105   0.000   0.000   0.000   0.000

    7  -0.422   0.000  -0.000  -0.000   0.000   0.115  -5.417  -0.013   0.052
       -0.422   0.072   0.551   0.040   0.029  -0.000   0.000   0.000  -0.000

    8  -0.570  -0.000  -0.000  -0.000  -0.000   0.156  -0.013  -5.057   0.003
       -0.570   0.105   0.026   0.537   0.035  -0.000  -0.000  -0.000  -0.000

    9  -0.126   0.000  -0.000   0.000   0.000   0.073   0.052   0.003  -5.313
       -0.126   0.069   0.057   0.057   0.586  -0.000   0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   14 :     60.12  [%]


--------------------------------------------------------------------------------
  q-point number 15        q = ( 0.500000,-0.375000, 0.125000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 15, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -18.094  -1.821  -2.482  -2.376  -1.307  -1.307  -2.376  -2.482  -1.821
       -0.000  -1.821  -2.482  -2.376  -1.307   1.307   2.376   2.482   1.821

    2  -1.821  -8.534   0.971   1.086   0.200  -0.000  -0.000  -0.000  -0.000
        1.821  -0.000   0.000   0.000  -0.000  -1.833   0.158   0.105  -0.582

    3  -2.482   0.971 -12.649   0.360  -0.029  -0.000  -0.000  -0.000  -0.000
        2.482  -0.000   0.000  -0.000  -0.000   0.264  -1.005  -0.093   0.105

    4  -2.376   1.086   0.360 -14.340   0.700  -0.000  -0.000  -0.000  -0.000
        2.376  -0.000   0.000   0.000  -0.000   0.000  -0.000  -1.005   0.158

    5  -1.307   0.200  -0.029   0.700 -17.837  -0.000  -0.000  -0.000  -0.000
        1.307   0.000   0.000   0.000  -0.000  -0.000   0.000   0.264  -1.833

    6  -1.307  -0.000  -0.000  -0.000  -0.000 -17.837   0.700  -0.029   0.200
       -1.307   1.833  -0.264  -0.000   0.000  -0.000   0.000  -0.000  -0.000

    7  -2.376  -0.000  -0.000  -0.000  -0.000   0.700 -14.340   0.360   1.086
       -2.376  -0.158   1.005   0.000  -0.000  -0.000  -0.000  -0.000   0.000

    8  -2.482  -0.000  -0.000  -0.000  -0.000  -0.029   0.360 -12.649   0.971
       -2.482  -0.105   0.093   1.005  -0.264   0.000   0.000  -0.000  -0.000

    9  -1.821  -0.000  -0.000  -0.000  -0.000   0.200   1.086   0.971  -8.534
       -1.821   0.582  -0.105  -0.158   1.833   0.000  -0.000   0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 15, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -5.025  -0.616  -0.730  -0.720  -0.092  -0.092  -0.720  -0.730  -0.616
        0.000  -0.616  -0.730  -0.720  -0.092   0.092   0.720   0.730   0.616

    2  -0.616  -2.879   0.218   0.194   0.058   0.000   0.000   0.000   0.000
        0.616   0.000  -0.000  -0.000   0.000  -0.349  -0.059  -0.076  -0.162

    3  -0.730   0.218  -4.444   0.070  -0.035   0.000  -0.000  -0.000  -0.000
        0.730   0.000   0.000   0.000   0.000  -0.034  -0.292  -0.010  -0.076

    4  -0.720   0.194   0.070  -4.961   0.006  -0.000  -0.000   0.000   0.000
        0.720   0.000  -0.000   0.000  -0.000  -0.000  -0.000  -0.292  -0.059

    5  -0.092   0.058  -0.035   0.006  -4.225   0.000   0.000   0.000   0.000
        0.092  -0.000  -0.000   0.000  -0.000   0.000   0.000  -0.034  -0.349

    6  -0.092   0.000   0.000  -0.000   0.000  -4.225   0.006  -0.035   0.058
       -0.092   0.349   0.034   0.000  -0.000  -0.000  -0.000  -0.000   0.000

    7  -0.720   0.000  -0.000  -0.000   0.000   0.006  -4.961   0.070   0.194
       -0.720   0.059   0.292   0.000  -0.000   0.000   0.000   0.000  -0.000

    8  -0.730   0.000  -0.000   0.000   0.000  -0.035   0.070  -4.444   0.218
       -0.730   0.076   0.010   0.292   0.034   0.000  -0.000  -0.000  -0.000

    9  -0.616   0.000  -0.000   0.000   0.000   0.058   0.194   0.218  -2.879
       -0.616   0.162   0.076   0.059   0.349  -0.000   0.000   0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   15 :     58.74  [%]


--------------------------------------------------------------------------------
  q-point number 16        q = ( 0.500000, 0.500000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 16, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -17.029  -2.253  -1.301  -1.301  -2.253  -1.301  -2.253  -2.253  -1.301
        0.000  -2.253  -1.301  -1.301  -2.253   1.301   2.253   2.253   1.301

    2  -2.253 -11.145   0.123   0.123   0.661   0.000  -0.000  -0.000   0.000
        2.253  -0.000  -0.000  -0.000  -0.000  -1.846   0.119   0.119  -0.097

    3  -1.301   0.123 -17.158   2.641   0.123  -0.000   0.000   0.000  -0.000
        1.301   0.000  -0.000  -0.000   0.000  -0.000  -1.846  -0.097   0.000

    4  -1.301   0.123   2.641 -17.158   0.123  -0.000   0.000   0.000  -0.000
        1.301   0.000   0.000  -0.000   0.000  -0.000  -0.097  -1.846   0.000

    5  -2.253   0.661   0.123   0.123 -11.145   0.000  -0.000  -0.000   0.000
        2.253   0.000  -0.000  -0.000  -0.000  -0.097   0.119   0.119  -1.846

    6  -1.301   0.000  -0.000  -0.000   0.000 -17.158   0.123   0.123   2.641
       -1.301   1.846   0.000   0.000   0.097  -0.000  -0.000  -0.000  -0.000

    7  -2.253  -0.000   0.000   0.000  -0.000   0.123 -11.145   0.661   0.123
       -2.253  -0.119   1.846   0.097  -0.119   0.000   0.000   0.000   0.000

    8  -2.253  -0.000   0.000   0.000  -0.000   0.123   0.661 -11.145   0.123
       -2.253  -0.119   0.097   1.846  -0.119   0.000  -0.000   0.000   0.000

    9  -1.301   0.000  -0.000  -0.000   0.000   2.641   0.123   0.123 -17.158
       -1.301   0.097  -0.000  -0.000   1.846   0.000  -0.000  -0.000   0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 16, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -4.083  -0.662  -0.230  -0.230  -0.662  -0.230  -0.662  -0.662  -0.230
       -0.000  -0.662  -0.230  -0.230  -0.662   0.230   0.662   0.662   0.230

    2  -0.662  -3.969   0.028   0.028   0.201   0.000  -0.000  -0.000   0.000
        0.662  -0.000   0.000   0.000  -0.000  -0.526  -0.072  -0.072  -0.032

    3  -0.230   0.028  -5.331   0.099   0.028   0.000  -0.000  -0.000  -0.000
        0.230  -0.000  -0.000   0.000   0.000  -0.000  -0.526  -0.032   0.000

    4  -0.230   0.028   0.099  -5.331   0.028   0.000  -0.000   0.000  -0.000
        0.230  -0.000  -0.000  -0.000  -0.000  -0.000  -0.032  -0.526   0.000

    5  -0.662   0.201   0.028   0.028  -3.969   0.000   0.000   0.000   0.000
        0.662   0.000  -0.000   0.000   0.000  -0.032  -0.072  -0.072  -0.526

    6  -0.230   0.000   0.000   0.000   0.000  -5.331   0.028   0.028   0.099
       -0.230   0.526   0.000   0.000   0.032  -0.000  -0.000  -0.000   0.000

    7  -0.662  -0.000  -0.000  -0.000   0.000   0.028  -3.969   0.201   0.028
       -0.662   0.072   0.526   0.032   0.072   0.000   0.000   0.000  -0.000

    8  -0.662  -0.000  -0.000   0.000   0.000   0.028   0.201  -3.969   0.028
       -0.662   0.072   0.032   0.526   0.072   0.000  -0.000   0.000  -0.000

    9  -0.230   0.000  -0.000  -0.000   0.000   0.099   0.028   0.028  -5.331
       -0.230   0.032  -0.000  -0.000   0.526  -0.000   0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   16 :     58.48  [%]


--------------------------------------------------------------------------------
  q-point number 17        q = ( 0.250000, 0.500000,-0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 17, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -18.547  -2.374  -1.427  -2.254  -2.067  -2.254  -2.067  -2.374  -1.427
       -0.000  -2.374  -1.427  -2.254  -2.067   2.254   2.067   2.374   1.427

    2  -2.374 -12.251   0.044   0.319   0.751   0.000  -0.000  -0.000  -0.000
        2.374  -0.000   0.000  -0.000  -0.000  -1.238   0.086  -0.137   0.131

    3  -1.427   0.044 -18.547   1.433  -0.008   0.000  -0.000  -0.000   0.000
        1.427  -0.000  -0.000  -0.000  -0.000  -0.000  -2.017   0.131  -0.000

    4  -2.254   0.319   1.433 -15.539   0.772   0.000  -0.000   0.000   0.000
        2.254   0.000   0.000   0.000   0.000  -0.000   0.133  -1.238  -0.000

    5  -2.067   0.751  -0.008   0.772  -9.406  -0.000   0.000  -0.000  -0.000
        2.067   0.000   0.000  -0.000   0.000   0.133  -0.129   0.086  -2.017

    6  -2.254   0.000   0.000   0.000  -0.000 -15.539   0.772   0.319   1.433
       -2.254   1.238   0.000   0.000  -0.133   0.000  -0.000  -0.000  -0.000

    7  -2.067  -0.000  -0.000  -0.000   0.000   0.772  -9.406   0.751  -0.008
       -2.067  -0.086   2.017  -0.133   0.129   0.000  -0.000  -0.000   0.000

    8  -2.374  -0.000  -0.000   0.000  -0.000   0.319   0.751 -12.251   0.044
       -2.374   0.137  -0.131   1.238  -0.086   0.000   0.000   0.000  -0.000

    9  -1.427  -0.000   0.000   0.000  -0.000   1.433  -0.008   0.044 -18.547
       -1.427  -0.131   0.000   0.000   2.017   0.000  -0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 17, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -4.601  -0.699  -0.043  -0.608  -0.645  -0.608  -0.645  -0.699  -0.043
        0.000  -0.699  -0.043  -0.608  -0.645   0.608   0.645   0.699   0.043

    2  -0.699  -4.352  -0.025   0.037   0.209   0.000   0.000   0.000  -0.000
        0.699   0.000  -0.000   0.000  -0.000  -0.394  -0.071  -0.028  -0.054

    3  -0.043  -0.025  -4.601   0.053   0.041   0.000  -0.000  -0.000   0.000
        0.043   0.000   0.000  -0.000  -0.000   0.000  -0.455  -0.054  -0.000

    4  -0.608   0.037   0.053  -5.305   0.138   0.000  -0.000   0.000  -0.000
        0.608  -0.000   0.000   0.000   0.000   0.000  -0.037  -0.394  -0.000

    5  -0.645   0.209   0.041   0.138  -3.289  -0.000   0.000   0.000  -0.000
        0.645   0.000   0.000  -0.000  -0.000  -0.037  -0.132  -0.071  -0.455

    6  -0.608   0.000   0.000   0.000  -0.000  -5.305   0.138   0.037   0.053
       -0.608   0.394  -0.000  -0.000   0.037   0.000   0.000  -0.000   0.000

    7  -0.645   0.000  -0.000  -0.000   0.000   0.138  -3.289   0.209   0.041
       -0.645   0.071   0.455   0.037   0.132  -0.000  -0.000  -0.000  -0.000

    8  -0.699   0.000  -0.000   0.000   0.000   0.037   0.209  -4.352  -0.025
       -0.699   0.028   0.054   0.394   0.071   0.000   0.000   0.000  -0.000

    9  -0.043  -0.000   0.000  -0.000  -0.000   0.053   0.041  -0.025  -4.601
       -0.043   0.054   0.000   0.000   0.455  -0.000   0.000   0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   17 :     58.91  [%]


--------------------------------------------------------------------------------
  q-point number 18        q = ( 0.250000, 0.000000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 18, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -11.307  -2.084  -2.084  -0.160  -0.160  -0.160  -0.160  -2.084  -2.084
        0.000  -2.084  -2.084  -0.160  -0.160   0.160   0.160   2.084   2.084

    2  -2.084 -13.853  -0.052  -0.213  -0.213   0.000  -0.000  -0.000  -0.000
        2.084   0.000  -0.000  -0.000  -0.000  -3.064  -0.353   0.077   0.077

    3  -2.084  -0.052 -13.853  -0.213  -0.213  -0.000   0.000  -0.000  -0.000
        2.084   0.000   0.000  -0.000  -0.000  -0.353  -3.064   0.077   0.077

    4  -0.160  -0.213  -0.213 -16.799   1.956  -0.000  -0.000  -0.000  -0.000
        0.160   0.000   0.000   0.000  -0.000  -0.430  -0.430  -3.064  -0.353

    5  -0.160  -0.213  -0.213   1.956 -16.799  -0.000  -0.000  -0.000  -0.000
        0.160   0.000   0.000   0.000   0.000  -0.430  -0.430  -0.353  -3.064

    6  -0.160   0.000  -0.000  -0.000  -0.000 -16.799   1.956  -0.213  -0.213
       -0.160   3.064   0.353   0.430   0.430  -0.000   0.000  -0.000  -0.000

    7  -0.160  -0.000   0.000  -0.000  -0.000   1.956 -16.799  -0.213  -0.213
       -0.160   0.353   3.064   0.430   0.430  -0.000  -0.000  -0.000  -0.000

    8  -2.084  -0.000  -0.000  -0.000  -0.000  -0.213  -0.213 -13.853  -0.052
       -2.084  -0.077  -0.077   3.064   0.353   0.000   0.000  -0.000   0.000

    9  -2.084  -0.000  -0.000  -0.000  -0.000  -0.213  -0.213  -0.052 -13.853
       -2.084  -0.077  -0.077   0.353   3.064   0.000   0.000  -0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 18, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.386  -0.384  -0.384   0.093   0.093   0.093   0.093  -0.384  -0.384
       -0.000  -0.384  -0.384   0.093   0.093  -0.093  -0.093   0.384   0.384

    2  -0.384  -4.869   0.102   0.059   0.059   0.000   0.000  -0.000  -0.000
        0.384  -0.000  -0.000  -0.000   0.000  -0.889  -0.113  -0.074  -0.074

    3  -0.384   0.102  -4.869   0.059   0.059   0.000  -0.000  -0.000  -0.000
        0.384   0.000   0.000  -0.000  -0.000  -0.113  -0.889  -0.074  -0.074

    4   0.093   0.059   0.059  -5.400   0.108   0.000  -0.000   0.000  -0.000
       -0.093   0.000   0.000   0.000   0.000  -0.161  -0.161  -0.889  -0.113

    5   0.093   0.059   0.059   0.108  -5.400  -0.000  -0.000  -0.000   0.000
       -0.093  -0.000   0.000  -0.000   0.000  -0.161  -0.161  -0.113  -0.889

    6   0.093   0.000   0.000   0.000  -0.000  -5.400   0.108   0.059   0.059
        0.093   0.889   0.113   0.161   0.161   0.000  -0.000   0.000  -0.000

    7   0.093   0.000  -0.000  -0.000  -0.000   0.108  -5.400   0.059   0.059
        0.093   0.113   0.889   0.161   0.161   0.000   0.000   0.000   0.000

    8  -0.384  -0.000  -0.000   0.000  -0.000   0.059   0.059  -4.869   0.102
       -0.384   0.074   0.074   0.889   0.113  -0.000  -0.000   0.000   0.000

    9  -0.384  -0.000  -0.000  -0.000   0.000   0.059   0.059   0.102  -4.869
       -0.384   0.074   0.074   0.113   0.889   0.000  -0.000  -0.000   0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   18 :     70.02  [%]


--------------------------------------------------------------------------------
  q-point number 19        q = ( 0.500000, 0.500000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Will sum 26624 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :    256 to be completed
 ik =    1 /  256 spin =  1 done by processor   0
 ik =    2 /  256 spin =  1 done by processor   0
 ik =    3 /  256 spin =  1 done by processor   0
 ik =    4 /  256 spin =  1 done by processor   0
 ik =    5 /  256 spin =  1 done by processor   0
 ik =    6 /  256 spin =  1 done by processor   0
 ik =    7 /  256 spin =  1 done by processor   0
 ik =    8 /  256 spin =  1 done by processor   0
 ik =    9 /  256 spin =  1 done by processor   0
 ik =   10 /  256 spin =  1 done by processor   0
 ik =   11 /  256 spin =  1 done by processor   0
 ik =   12 /  256 spin =  1 done by processor   0
 ik =   13 /  256 spin =  1 done by processor   0
 ik =   14 /  256 spin =  1 done by processor   0
 ik =   15 /  256 spin =  1 done by processor   0
 ik =   16 /  256 spin =  1 done by processor   0
 ik =   17 /  256 spin =  1 done by processor   0
 ik =   18 /  256 spin =  1 done by processor   0
 ik =   19 /  256 spin =  1 done by processor   0
 ik =   20 /  256 spin =  1 done by processor   0
 ik =   21 /  256 spin =  1 done by processor   0
 ik =   22 /  256 spin =  1 done by processor   0
 ik =   23 /  256 spin =  1 done by processor   0
 ik =   24 /  256 spin =  1 done by processor   0
 ik =   25 /  256 spin =  1 done by processor   0
 ik =   26 /  256 spin =  1 done by processor   0
 ik =   27 /  256 spin =  1 done by processor   0
 ik =   28 /  256 spin =  1 done by processor   0
 ik =   29 /  256 spin =  1 done by processor   0
 ik =   30 /  256 spin =  1 done by processor   0
 ik =   31 /  256 spin =  1 done by processor   0
 ik =   32 /  256 spin =  1 done by processor   0
 ik =   33 /  256 spin =  1 done by processor   0
 ik =   34 /  256 spin =  1 done by processor   0
 ik =   35 /  256 spin =  1 done by processor   0
 ik =   36 /  256 spin =  1 done by processor   0
 ik =   37 /  256 spin =  1 done by processor   0
 ik =   38 /  256 spin =  1 done by processor   0
 ik =   39 /  256 spin =  1 done by processor   0
 ik =   40 /  256 spin =  1 done by processor   0
 ik =   41 /  256 spin =  1 done by processor   0
 ik =   42 /  256 spin =  1 done by processor   0
 ik =   43 /  256 spin =  1 done by processor   0
 ik =   44 /  256 spin =  1 done by processor   0
 ik =   45 /  256 spin =  1 done by processor   0
 ik =   46 /  256 spin =  1 done by processor   0
 ik =   47 /  256 spin =  1 done by processor   0
 ik =   48 /  256 spin =  1 done by processor   0
 ik =   49 /  256 spin =  1 done by processor   0
 ik =   50 /  256 spin =  1 done by processor   0
 ik =   51 /  256 spin =  1 done by processor   0
 ik =   52 /  256 spin =  1 done by processor   0
 ik =   53 /  256 spin =  1 done by processor   0
 ik =   54 /  256 spin =  1 done by processor   0
 ik =   55 /  256 spin =  1 done by processor   0
 ik =   56 /  256 spin =  1 done by processor   0
 ik =   57 /  256 spin =  1 done by processor   0
 ik =   58 /  256 spin =  1 done by processor   0
 ik =   59 /  256 spin =  1 done by processor   0
 ik =   60 /  256 spin =  1 done by processor   0
 ik =   61 /  256 spin =  1 done by processor   0
 ik =   62 /  256 spin =  1 done by processor   0
 ik =   63 /  256 spin =  1 done by processor   0
 ik =   64 /  256 spin =  1 done by processor   0
 ik =   65 /  256 spin =  1 done by processor   0
 ik =   66 /  256 spin =  1 done by processor   0
 ik =   67 /  256 spin =  1 done by processor   0
 ik =   68 /  256 spin =  1 done by processor   0
 ik =   69 /  256 spin =  1 done by processor   0
 ik =   70 /  256 spin =  1 done by processor   0
 ik =   71 /  256 spin =  1 done by processor   0
 ik =   72 /  256 spin =  1 done by processor   0
 ik =   73 /  256 spin =  1 done by processor   0
 ik =   74 /  256 spin =  1 done by processor   0
 ik =   75 /  256 spin =  1 done by processor   0
 ik =   76 /  256 spin =  1 done by processor   0
 ik =   77 /  256 spin =  1 done by processor   0
 ik =   78 /  256 spin =  1 done by processor   0
 ik =   79 /  256 spin =  1 done by processor   0
 ik =   80 /  256 spin =  1 done by processor   0
 ik =   81 /  256 spin =  1 done by processor   0
 ik =   82 /  256 spin =  1 done by processor   0
 ik =   83 /  256 spin =  1 done by processor   0
 ik =   84 /  256 spin =  1 done by processor   0
 ik =   85 /  256 spin =  1 done by processor   0
 ik =   86 /  256 spin =  1 done by processor   0
 ik =   87 /  256 spin =  1 done by processor   0
 ik =   88 /  256 spin =  1 done by processor   0
 ik =   89 /  256 spin =  1 done by processor   0
 ik =   90 /  256 spin =  1 done by processor   0
 ik =   91 /  256 spin =  1 done by processor   0
 ik =   92 /  256 spin =  1 done by processor   0
 ik =   93 /  256 spin =  1 done by processor   0
 ik =   94 /  256 spin =  1 done by processor   0
 ik =   95 /  256 spin =  1 done by processor   0
 ik =   96 /  256 spin =  1 done by processor   0
 ik =   97 /  256 spin =  1 done by processor   0
 ik =   98 /  256 spin =  1 done by processor   0
 ik =   99 /  256 spin =  1 done by processor   0
 ik =  100 /  256 spin =  1 done by processor   0
 ik =  101 /  256 spin =  1 done by processor   0
 ik =  102 /  256 spin =  1 done by processor   0
 ik =  103 /  256 spin =  1 done by processor   0
 ik =  104 /  256 spin =  1 done by processor   0
 ik =  105 /  256 spin =  1 done by processor   0
 ik =  106 /  256 spin =  1 done by processor   0
 ik =  107 /  256 spin =  1 done by processor   0
 ik =  108 /  256 spin =  1 done by processor   0
 ik =  109 /  256 spin =  1 done by processor   0
 ik =  110 /  256 spin =  1 done by processor   0
 ik =  111 /  256 spin =  1 done by processor   0
 ik =  112 /  256 spin =  1 done by processor   0
 ik =  113 /  256 spin =  1 done by processor   0
 ik =  114 /  256 spin =  1 done by processor   0
 ik =  115 /  256 spin =  1 done by processor   0
 ik =  116 /  256 spin =  1 done by processor   0
 ik =  117 /  256 spin =  1 done by processor   0
 ik =  118 /  256 spin =  1 done by processor   0
 ik =  119 /  256 spin =  1 done by processor   0
 ik =  120 /  256 spin =  1 done by processor   0
 ik =  121 /  256 spin =  1 done by processor   0
 ik =  122 /  256 spin =  1 done by processor   0
 ik =  123 /  256 spin =  1 done by processor   0
 ik =  124 /  256 spin =  1 done by processor   0
 ik =  125 /  256 spin =  1 done by processor   0
 ik =  126 /  256 spin =  1 done by processor   0
 ik =  127 /  256 spin =  1 done by processor   0
 ik =  128 /  256 spin =  1 done by processor   0
 ik =  129 /  256 spin =  1 done by processor   0
 ik =  130 /  256 spin =  1 done by processor   0
 ik =  131 /  256 spin =  1 done by processor   0
 ik =  132 /  256 spin =  1 done by processor   0
 ik =  133 /  256 spin =  1 done by processor   0
 ik =  134 /  256 spin =  1 done by processor   0
 ik =  135 /  256 spin =  1 done by processor   0
 ik =  136 /  256 spin =  1 done by processor   0
 ik =  137 /  256 spin =  1 done by processor   0
 ik =  138 /  256 spin =  1 done by processor   0
 ik =  139 /  256 spin =  1 done by processor   0
 ik =  140 /  256 spin =  1 done by processor   0
 ik =  141 /  256 spin =  1 done by processor   0
 ik =  142 /  256 spin =  1 done by processor   0
 ik =  143 /  256 spin =  1 done by processor   0
 ik =  144 /  256 spin =  1 done by processor   0
 ik =  145 /  256 spin =  1 done by processor   0
 ik =  146 /  256 spin =  1 done by processor   0
 ik =  147 /  256 spin =  1 done by processor   0
 ik =  148 /  256 spin =  1 done by processor   0
 ik =  149 /  256 spin =  1 done by processor   0
 ik =  150 /  256 spin =  1 done by processor   0
 ik =  151 /  256 spin =  1 done by processor   0
 ik =  152 /  256 spin =  1 done by processor   0
 ik =  153 /  256 spin =  1 done by processor   0
 ik =  154 /  256 spin =  1 done by processor   0
 ik =  155 /  256 spin =  1 done by processor   0
 ik =  156 /  256 spin =  1 done by processor   0
 ik =  157 /  256 spin =  1 done by processor   0
 ik =  158 /  256 spin =  1 done by processor   0
 ik =  159 /  256 spin =  1 done by processor   0
 ik =  160 /  256 spin =  1 done by processor   0
 ik =  161 /  256 spin =  1 done by processor   0
 ik =  162 /  256 spin =  1 done by processor   0
 ik =  163 /  256 spin =  1 done by processor   0
 ik =  164 /  256 spin =  1 done by processor   0
 ik =  165 /  256 spin =  1 done by processor   0
 ik =  166 /  256 spin =  1 done by processor   0
 ik =  167 /  256 spin =  1 done by processor   0
 ik =  168 /  256 spin =  1 done by processor   0
 ik =  169 /  256 spin =  1 done by processor   0
 ik =  170 /  256 spin =  1 done by processor   0
 ik =  171 /  256 spin =  1 done by processor   0
 ik =  172 /  256 spin =  1 done by processor   0
 ik =  173 /  256 spin =  1 done by processor   0
 ik =  174 /  256 spin =  1 done by processor   0
 ik =  175 /  256 spin =  1 done by processor   0
 ik =  176 /  256 spin =  1 done by processor   0
 ik =  177 /  256 spin =  1 done by processor   0
 ik =  178 /  256 spin =  1 done by processor   0
 ik =  179 /  256 spin =  1 done by processor   0
 ik =  180 /  256 spin =  1 done by processor   0
 ik =  181 /  256 spin =  1 done by processor   0
 ik =  182 /  256 spin =  1 done by processor   0
 ik =  183 /  256 spin =  1 done by processor   0
 ik =  184 /  256 spin =  1 done by processor   0
 ik =  185 /  256 spin =  1 done by processor   0
 ik =  186 /  256 spin =  1 done by processor   0
 ik =  187 /  256 spin =  1 done by processor   0
 ik =  188 /  256 spin =  1 done by processor   0
 ik =  189 /  256 spin =  1 done by processor   0
 ik =  190 /  256 spin =  1 done by processor   0
 ik =  191 /  256 spin =  1 done by processor   0
 ik =  192 /  256 spin =  1 done by processor   0
 ik =  193 /  256 spin =  1 done by processor   0
 ik =  194 /  256 spin =  1 done by processor   0
 ik =  195 /  256 spin =  1 done by processor   0
 ik =  196 /  256 spin =  1 done by processor   0
 ik =  197 /  256 spin =  1 done by processor   0
 ik =  198 /  256 spin =  1 done by processor   0
 ik =  199 /  256 spin =  1 done by processor   0
 ik =  200 /  256 spin =  1 done by processor   0
 ik =  201 /  256 spin =  1 done by processor   0
 ik =  202 /  256 spin =  1 done by processor   0
 ik =  203 /  256 spin =  1 done by processor   0
 ik =  204 /  256 spin =  1 done by processor   0
 ik =  205 /  256 spin =  1 done by processor   0
 ik =  206 /  256 spin =  1 done by processor   0
 ik =  207 /  256 spin =  1 done by processor   0
 ik =  208 /  256 spin =  1 done by processor   0
 ik =  209 /  256 spin =  1 done by processor   0
 ik =  210 /  256 spin =  1 done by processor   0
 ik =  211 /  256 spin =  1 done by processor   0
 ik =  212 /  256 spin =  1 done by processor   0
 ik =  213 /  256 spin =  1 done by processor   0
 ik =  214 /  256 spin =  1 done by processor   0
 ik =  215 /  256 spin =  1 done by processor   0
 ik =  216 /  256 spin =  1 done by processor   0
 ik =  217 /  256 spin =  1 done by processor   0
 ik =  218 /  256 spin =  1 done by processor   0
 ik =  219 /  256 spin =  1 done by processor   0
 ik =  220 /  256 spin =  1 done by processor   0
 ik =  221 /  256 spin =  1 done by processor   0
 ik =  222 /  256 spin =  1 done by processor   0
 ik =  223 /  256 spin =  1 done by processor   0
 ik =  224 /  256 spin =  1 done by processor   0
 ik =  225 /  256 spin =  1 done by processor   0
 ik =  226 /  256 spin =  1 done by processor   0
 ik =  227 /  256 spin =  1 done by processor   0
 ik =  228 /  256 spin =  1 done by processor   0
 ik =  229 /  256 spin =  1 done by processor   0
 ik =  230 /  256 spin =  1 done by processor   0
 ik =  231 /  256 spin =  1 done by processor   0
 ik =  232 /  256 spin =  1 done by processor   0
 ik =  233 /  256 spin =  1 done by processor   0
 ik =  234 /  256 spin =  1 done by processor   0
 ik =  235 /  256 spin =  1 done by processor   0
 ik =  236 /  256 spin =  1 done by processor   0
 ik =  237 /  256 spin =  1 done by processor   0
 ik =  238 /  256 spin =  1 done by processor   0
 ik =  239 /  256 spin =  1 done by processor   0
 ik =  240 /  256 spin =  1 done by processor   0
 ik =  241 /  256 spin =  1 done by processor   0
 ik =  242 /  256 spin =  1 done by processor   0
 ik =  243 /  256 spin =  1 done by processor   0
 ik =  244 /  256 spin =  1 done by processor   0
 ik =  245 /  256 spin =  1 done by processor   0
 ik =  246 /  256 spin =  1 done by processor   0
 ik =  247 /  256 spin =  1 done by processor   0
 ik =  248 /  256 spin =  1 done by processor   0
 ik =  249 /  256 spin =  1 done by processor   0
 ik =  250 /  256 spin =  1 done by processor   0
 ik =  251 /  256 spin =  1 done by processor   0
 ik =  252 /  256 spin =  1 done by processor   0
 ik =  253 /  256 spin =  1 done by processor   0
 ik =  254 /  256 spin =  1 done by processor   0
 ik =  255 /  256 spin =  1 done by processor   0
 ik =  256 /  256 spin =  1 done by processor   0
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 19, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -14.080  -2.136  -2.136   2.856  -2.136  -1.851  -1.851  -1.595  -1.851
       -0.000  -2.136  -2.136   2.856  -2.136   1.851   1.851   1.595   1.851

    2  -2.136 -12.756   0.248   0.477   0.248  -0.000  -0.000  -0.000  -0.000
        2.136  -0.000  -0.000   0.000  -0.000  -2.229   0.132   0.083   0.132

    3  -2.136   0.248 -12.756   0.477   0.248   0.000  -0.000  -0.000   0.000
        2.136   0.000   0.000   0.000   0.000   0.132  -2.229   0.083   0.132

    4   2.856   0.477   0.477 -14.080   0.477  -0.000  -0.000   0.000  -0.000
       -2.856  -0.000  -0.000   0.000   0.000  -0.853  -0.853  -3.291  -0.853

    5  -2.136   0.248   0.248   0.477 -12.756   0.000   0.000  -0.000  -0.000
        2.136   0.000  -0.000  -0.000  -0.000   0.132   0.132   0.083  -2.229

    6  -1.851  -0.000   0.000  -0.000   0.000 -16.662   0.222   0.528   0.222
       -1.851   2.229  -0.132   0.853  -0.132  -0.000   0.000   0.000   0.000

    7  -1.851  -0.000  -0.000  -0.000   0.000   0.222 -16.662   0.528   0.222
       -1.851  -0.132   2.229   0.853  -0.132  -0.000  -0.000   0.000  -0.000

    8  -1.595  -0.000  -0.000   0.000  -0.000   0.528   0.528 -10.067   0.528
       -1.595  -0.083  -0.083   3.291  -0.083  -0.000  -0.000  -0.000  -0.000

    9  -1.851  -0.000   0.000  -0.000  -0.000   0.222   0.222   0.528 -16.662
       -1.851  -0.132  -0.132   0.853   2.229  -0.000   0.000   0.000  -0.000

  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 19, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -3.362  -0.587  -0.587   0.533  -0.587  -0.337  -0.337  -0.615  -0.337
        0.000  -0.587  -0.587   0.533  -0.587   0.337   0.337   0.615   0.337

    2  -0.587  -4.593   0.123   0.016   0.123   0.000   0.000   0.000  -0.000
        0.587  -0.000   0.000  -0.000   0.000  -0.613  -0.041  -0.082  -0.041

    3  -0.587   0.123  -4.593   0.016   0.123  -0.000  -0.000  -0.000  -0.000
        0.587  -0.000   0.000  -0.000  -0.000  -0.041  -0.613  -0.082  -0.041

    4   0.533   0.016   0.016  -3.362   0.016  -0.000   0.000   0.000   0.000
       -0.533   0.000   0.000   0.000  -0.000  -0.106  -0.106  -0.676  -0.106

    5  -0.587   0.123   0.123   0.016  -4.593   0.000  -0.000  -0.000   0.000
        0.587  -0.000   0.000   0.000   0.000  -0.041  -0.041  -0.082  -0.613

    6  -0.337   0.000  -0.000  -0.000   0.000  -5.443   0.016   0.110   0.016
       -0.337   0.613   0.041   0.106   0.041   0.000   0.000   0.000   0.000

    7  -0.337   0.000  -0.000   0.000  -0.000   0.016  -5.443   0.110   0.016
       -0.337   0.041   0.613   0.106   0.041  -0.000  -0.000   0.000   0.000

    8  -0.615   0.000  -0.000   0.000  -0.000   0.110   0.110  -3.596   0.110
       -0.615   0.082   0.082   0.676   0.082  -0.000  -0.000  -0.000   0.000

    9  -0.337  -0.000  -0.000   0.000   0.000   0.016   0.016   0.110  -5.443
       -0.337   0.041   0.041   0.106   0.613  -0.000  -0.000  -0.000  -0.000

  Average fulfillment of the sum rule on Im[epsilon] for q-point   19 :     60.80  [%]

================================================================================
== DATASET  3 ==================================================================
-   nproc =    1

 mkfilename : getscr/=0, take file _SCR from output of DATASET   2.

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 SIGMA: Calculation of the GW corrections

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using single precision arithmetic ; gwpc =  4

 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.538   => boxcut(ratio)=   2.03101

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspini: atom type   1  psp file is ../../Psps_for_tests/14si.pspnc
- pspatm: opening atomic psp file    ../../Psps_for_tests/14si.pspnc
-  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
- 14.00000   4.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.907  14.692    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.617   4.181    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.80626423934776    0.22824404341771    1.17378968127746   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.43386982
         --- l  ekb(1:nproj) -->
             0    3.287949
             1    1.849886
 pspatm: atomic psp has been read  and splines computed


 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    2
  Number of pseudopotentials ..    1
  Number of types of atoms   ..    1
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   2
  Max number of (l,m,n) components ..   2

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  5.4188

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1

--- !WARNING
message: |
    Using WFK filetgw1o_DS1_WFK
src_file: setup_sigma.F90
src_line: 317
...


 Sorting g-vecs for an output of states on an unique "big" PW basis.

--- !WARNING
message: |
    Removing inversion related symmetrie from initial set
src_file: remove_inversion.F90
src_line: 86
...

 The inversion was not found in the symmetries list.
 Program uses the original set of symmetries
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:   471
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.1085000  5.1085000  G(1)= -0.0978761  0.0978761  0.0978761
 R(2)=  5.1085000  0.0000000  5.1085000  G(2)=  0.0978761 -0.0978761  0.0978761
 R(3)=  5.1085000  5.1085000  0.0000000  G(3)=  0.0978761  0.0978761 -0.0978761
 Unit cell volume ucvol=  2.6663072E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1     0  0  1   0.000  1    -1 -1 -1   0.000  1     0  1  0   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     1  0  0   0.000  1     0  1  0   0.000  1    -1 -1 -1   0.000  1


 -1 -1 -1   0.000  1     0  1  0   0.000  1     1  0  0   0.000  1     0  0  1   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     1  0  0   0.000  1     0  1  0   0.000  1    -1 -1 -1   0.000  1


 -1 -1 -1   0.000  1     0  1  0   0.000  1     1  0  0   0.000  1     0  0  1   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
  1  0  0   0.000  1     0  0  1   0.000  1    -1 -1 -1   0.000  1     0  1  0   0.000  1


  1  0  0   0.000  1     0  0  1   0.000  1    -1 -1 -1   0.000  1     0  1  0   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
 -1 -1 -1   0.000  1     0  1  0   0.000  1     1  0  0   0.000  1     0  0  1   0.000  1


  0  0  1   0.000  1     1  0  0   0.000  1     0  1  0   0.000  1    -1 -1 -1   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
 -1 -1 -1   0.000  1     0  1  0   0.000  1     1  0  0   0.000  1     0  0  1   0.000  1


  0  0  1   0.000  1     1  0  0   0.000  1     0  1  0   0.000  1    -1 -1 -1   0.000  1
  0  1  0   0.000  1    -1 -1 -1   0.000  1     0  0  1   0.000  1     1  0  0   0.000  1
  1  0  0   0.000  1     0  0  1   0.000  1    -1 -1 -1   0.000  1     0  1  0   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    10
 Reduced coordinates and weights :

     1)    -1.25000000E-01 -2.50000000E-01  0.00000000E+00       0.09375
     2)    -1.25000000E-01  5.00000000E-01  0.00000000E+00       0.09375
     3)    -2.50000000E-01 -3.75000000E-01  0.00000000E+00       0.09375
     4)    -1.25000000E-01 -3.75000000E-01  1.25000000E-01       0.18750
     5)    -1.25000000E-01  2.50000000E-01  0.00000000E+00       0.09375
     6)    -2.50000000E-01  3.75000000E-01  0.00000000E+00       0.09375
     7)    -3.75000000E-01  5.00000000E-01  0.00000000E+00       0.09375
     8)    -2.50000000E-01  5.00000000E-01  1.25000000E-01       0.18750
     9)    -1.25000000E-01  0.00000000E+00  0.00000000E+00       0.03125
    10)    -3.75000000E-01  0.00000000E+00  0.00000000E+00       0.03125

 Together with 24 symmetry operations and time-reversal symmetry 
 yields   256 points in the full Brillouin Zone.


 top of valence       [eV]   5.62
 bottom of conduction [eV]   6.70
 Fermi energy         [eV]   6.16



  >>>> For spin  1
   Minimum optical gap =   2.7040 [eV], located at k-point      :  -0.3750  0.0000  0.0000
   Fundamental gap     =   1.0826 [eV], Top of valence bands at :  -0.1250  0.0000  0.0000
                                        Bottom of conduction at :  -0.3750  0.5000  0.0000


  >>>> For spin  1
   Minimum optical gap =   2.7040 [eV], located at k-point      :  -0.3750  0.0000  0.0000
   Fundamental gap     =   1.0826 [eV], Top of valence bands at :  -0.1250  0.0000  0.0000
                                        Bottom of conduction at :  -0.3750  0.5000  0.0000
 init_Er_from_file : testing file tgw1o_DS2_SCR

 ===============================================================================
 ECHO of the ABINIT-SCR file header 
 SCR file: epsilon^-1 , calculated using inclvkb = 1
 TESTPARTICLE RPA
 Identifier                       4
 Kxc kernel                       0
 Treatment of q-->0 limit         0
 headform                        56
 fform                         1002
 gwcalctyp                       -1
 Number of components             1       1
 Number of q-points              19
 Number of q-directions           0
 Number of frequencies            2
 Number of bands used            17
 Dimension of matrix             89
 Number of planewaves used       51
 Spectral method                  0
 Test_type                        0
 Time-ordering                    1
 Scissor Energy                 0.000000E+00
 Spectral smearing              0.000000E+00
 Complex Imaginary Shift        3.674933E-03

 q-points [r.l.u.]:
    1    0.000000    0.000000    0.000000
    2    0.375000    0.500000    0.125000
    3   -0.125000    0.125000    0.000000
    4   -0.125000    0.250000   -0.125000
    5    0.000000    0.250000   -0.250000
    6    0.250000    0.500000    0.000000
    7   -0.125000    0.000000   -0.125000
    8    0.375000    0.375000    0.000000
    9    0.000000    0.375000   -0.125000
   10    0.375000    0.250000    0.125000
   11    0.250000    0.250000    0.250000
   12   -0.375000   -0.250000    0.375000
   13   -0.375000    0.375000    0.000000
   14   -0.375000    0.250000    0.125000
   15    0.500000   -0.375000    0.125000
   16    0.500000    0.500000    0.000000
   17    0.250000    0.500000   -0.250000
   18    0.250000    0.000000    0.250000
   19    0.500000    0.500000    0.500000

 Frequencies used [eV]:
  1   0.00   0.00
  2   0.00  16.70
 End the ECHO of the ABINIT-SCR file header 
 ===============================================================================
 ===============================================================================
 ECHO of the ABINIT file header 
 
 First record :
.codvsn,headform,fform = 7.6.2    57 1002
 
 Second record :
 bantot,intxc,ixc,natom  =   170     0     1     2
 ngfft(1:3),nkpt         =    10    10    10    10
 nspden,nspinor          =     1     1
 nsppol,nsym,npsp,ntypat =     1    24     1     1
 occopt,pertcase,usepaw  =     1     0     0
 ecut,ecutdg,ecutsm      =  2.0800589317E+00  2.0800589317E+00  0.0000000000E+00
 ecut_eff                =  2.0800589317E+00
 qptn(1:3)               =  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,1)           =  0.0000000000E+00  5.1085000000E+00  5.1085000000E+00
 rprimd(1:3,2)           =  5.1085000000E+00  0.0000000000E+00  5.1085000000E+00
 rprimd(1:3,3)           =  5.1085000000E+00  5.1085000000E+00  0.0000000000E+00
 stmbias,tphysel,tsmear  =  0.0000000000E+00  0.0000000000E+00  4.0000000000E-02

 Third record :
 istwfk=   1   1   1   1   1   1   1   1   1   1
 nband =  17  17  17  17  17  17  17  17  17  17
 npwarr=   51   51   51   51   51   51   51   51   51   51
 so_psp=   1
 symafm=
          1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symrel=
           1   0   0   0   1   0   0   0   1     0  -1   1   0  -1   0   1  -1   0
          -1   0   0  -1   0   1  -1   1   0     0   1  -1   1   0  -1   0   0  -1
          -1   0   0  -1   1   0  -1   0   1     0  -1   1   1  -1   0   0  -1   0
           1   0   0   0   0   1   0   1   0     0   1  -1   0   0  -1   1   0  -1
          -1   0   1  -1   1   0  -1   0   0     0  -1   0   1  -1   0   0  -1   1
           1   0  -1   0   0  -1   0   1  -1     0   1   0   0   0   1   1   0   0
           1   0  -1   0   1  -1   0   0  -1     0  -1   0   0  -1   1   1  -1   0
          -1   0   1  -1   0   0  -1   1   0     0   1   0   1   0   0   0   0   1
           0   0  -1   0   1  -1   1   0  -1     1  -1   0   0  -1   1   0  -1   0
           0   0   1   1   0   0   0   1   0    -1   1   0  -1   0   0  -1   0   1
           0   0   1   0   1   0   1   0   0     1  -1   0   0  -1   0   0  -1   1
           0   0  -1   1   0  -1   0   1  -1    -1   1   0  -1   0   1  -1   0   0
 type  =   1   1
 kptns =                 (max 50 k-points will be written)
           -1.250000E-01   -2.500000E-01    0.000000E+00
           -1.250000E-01    5.000000E-01    0.000000E+00
           -2.500000E-01   -3.750000E-01    0.000000E+00
           -1.250000E-01   -3.750000E-01    1.250000E-01
           -1.250000E-01    2.500000E-01    0.000000E+00
           -2.500000E-01    3.750000E-01    0.000000E+00
           -3.750000E-01    5.000000E-01    0.000000E+00
           -2.500000E-01    5.000000E-01    1.250000E-01
           -1.250000E-01    0.000000E+00    0.000000E+00
           -3.750000E-01    0.000000E+00    0.000000E+00
 wtk =
          0.09  0.09  0.09  0.19  0.09  0.09  0.09  0.19  0.03  0.03
   occ =
          2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00
          2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00
          2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 tnons =
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
          0.000000  0.000000  0.000000    0.000000  0.000000  0.000000
  znucl= 14.00

 Pseudopotential info :
 title= Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
  znuclpsp= 14.00, zionpsp=  4.00, pspso=  0, pspdat=940714, pspcod=  1, pspxc=  1
  lmnmax  =  2
 
 Last record :
 residm,etot,fermie=    1.000000E+20    1.000000000000E+20    1.000000E+20
 xred =
            0.000000E+00    0.000000E+00    0.000000E+00
            2.500000E-01    2.500000E-01    2.500000E-01
 End the ECHO of the ABINIT file header 
 ===============================================================================
 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :    19
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.00391
     2)     3.75000000E-01  5.00000000E-01  1.25000000E-01       0.09375
     3)    -1.25000000E-01  1.25000000E-01  0.00000000E+00       0.04688
     4)    -1.25000000E-01  2.50000000E-01 -1.25000000E-01       0.09375
     5)     0.00000000E+00  2.50000000E-01 -2.50000000E-01       0.04688
     6)     2.50000000E-01  5.00000000E-01  0.00000000E+00       0.09375
     7)    -1.25000000E-01  0.00000000E+00 -1.25000000E-01       0.02344
     8)     3.75000000E-01  3.75000000E-01  0.00000000E+00       0.02344
     9)     0.00000000E+00  3.75000000E-01 -1.25000000E-01       0.09375
    10)     3.75000000E-01  2.50000000E-01  1.25000000E-01       0.09375
    11)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.03125
    12)    -3.75000000E-01 -2.50000000E-01  3.75000000E-01       0.09375
    13)    -3.75000000E-01  3.75000000E-01  0.00000000E+00       0.04688
    14)    -3.75000000E-01  2.50000000E-01  1.25000000E-01       0.09375
    15)     5.00000000E-01 -3.75000000E-01  1.25000000E-01       0.04688
    16)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.01172
    17)     2.50000000E-01  5.00000000E-01 -2.50000000E-01       0.02344
    18)     2.50000000E-01  0.00000000E+00  2.50000000E-01       0.02344
    19)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with 24 symmetry operations and time-reversal symmetry 
 yields   256 points in the full Brillouin Zone.


 optimal value for ng0sh =  1 1 1

 vcoul_init : cutoff-mode = CRYSTAL
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

 setmesh: npwwfn        =      137; Max (m1,m2,m3)   =      3     3     3
          npweps/npwsigx=      169; Max (mm1,mm2,mm3)=      4     4     4
          mG0 added     =   1  1  1
 calculated ecutwfn          =   4.538 [Ha]
 calculated ecutsigx/ecuteps =   5.106 [Ha]
 using method =  2 with ecuteff =  19.271 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  15x 15x 15
          total number of points  =     3375


 setmesh: npwwfn        =      137; Max (m1,m2,m3)   =      3     3     3
          npweps/npwsigx=       89; Max (mm1,mm2,mm3)=      4     4     4
          mG0 added     =   1  1  1
 calculated ecutwfn          =   4.538 [Ha]
 calculated ecutsigx/ecuteps =   3.593 [Ha]
 using method =  2 with ecuteff =  16.207 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  15x 15x 15
          total number of points  =     3375

  screening after setup_sigma : Er%Hscr%headform=          57

 ==== FFT mesh for oscillator strengths used for Sigma_c ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   112
  FFT cache size ............................    16

 ==== FFT mesh for oscillator strengths used for Sigma_x ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   112
  FFT cache size ............................    16

--- !WARNING
message: |
    Using k-centered G-spheres.
src_file: m_wfs.F90
src_line: 1033
...

 Memory needed for Fourier components ug =          0.3 [Mb]
 Memory needed for real space ur =          7.7 [Mb]

--- !WARNING
message: |
    Wfd is init using WFK file
src_file: sigma.F90
src_line: 763
...

 wfd_read_wfk : about to read tgw1o_DS1_WFK
wfd_read_wfk: will read 300 (b,k,s) states
 planewave contribution to nelect:    7.9937
 Number of electrons calculated from density =    7.9937; Expected =    8.0000
 average of density, n =  0.029980
 r_s =    1.9969
 omega_plasma =   16.7022 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    8.8850E-02  at reduced coord.    0.1333    0.1333    0.6000
,     Minimum=    3.6520E-03  at reduced coord.    0.7333    0.7333    0.7333
,  Integrated=    7.9937E+00

 ewald : nr and ng are    3 and   11
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1:  0.22204460E-15
            Smallest positive number:                       0.22250739-307
            Largest representable number:                   0.17976931+309
 INTEGER:   Data type name: INTEGER(default) 
            Kind value: 4
            Bit size:   32
            Largest representable number: 2147483647
 LOGICAL:   Data type name: LOGICAL 
            Kind value: 4
 CHARACTER: Data type name: CHARACTER             Kind value: 1
  MPI-IO support is OFF

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.6.2
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20140305

 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : gnu4.4
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : no
  Parallel I/O   : no
  Time tracing   : no
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none

 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


--- !ERROR
message: |
    Wrong b1, b2
src_file: m_melemts.F90
src_line: 620
...


 leave_new : decision taken to exit ...
 calc_vhxc_braket : calculating v_xc[n_val] (excluding non-linear core corrections)
 For spin  1 Min density rhor =     0.365198E-02
 E_xc[n_val]  =  -2.3907 [Ha]. <V_xc[n_val]> =  -0.3376 [Ha].
 Will calculate 0 <b,k,s|O|b',k,s> matrix elements in calc_vhxc_me.

 === Matrix elements in the KS basis set [eV] ===
 kpt= ( -1.25000000E-01  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
 Er%ID:           4
 Er%Hscr%ID:           4
 Memory needed for Er%epsm1 =          2.3 [Mb]
 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.394578663580
            omega twiddle min location =    10   64

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.390044826035
            omega twiddle min location =    49   57

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.110910428366
            omega twiddle min location =    68   17

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.302094404126
            omega twiddle min location =    26   38

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  1.119190198113
            omega twiddle min location =    22   10

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.880739568304
            omega twiddle min location =    54   45

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.379591064089
            omega twiddle min location =    11   60

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  1.198903547863
            omega twiddle min location =    10   24

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.302314453714
            omega twiddle min location =    76   14

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.964122725810
            omega twiddle min location =    40   66

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.681213310680
            omega twiddle min location =    30   18

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.228465882919
            omega twiddle min location =    57   56

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.613011167205
            omega twiddle min location =    17   15

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.215511138168
            omega twiddle min location =    61   60

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.148466440828
            omega twiddle min location =    13   17

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.759269712121
            omega twiddle min location =    59   16

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.402833804996
            omega twiddle min location =    72   42

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  0.707993064244
            omega twiddle min location =    13   62

 Imaginary frequency for fit located at:   16.7000 [eV]

 cppm1par : omega twiddle minval [eV]  =  1.644622795029
            omega twiddle min location =    60   32


--- !WARNING
message: |
    Checking if PPm em1 is output, nfreqre is: -1 freqremax is:     0.00 eV
src_file: sigma.F90
src_line: 2048
...

 SIGMA fundamental parameters:
 PLASMON POLE MODEL  1
 number of plane-waves for SigmaX                  169
 number of plane-waves for SigmaC and W             89
 number of plane-waves for wavefunctions           137
 number of bands                                    30
 number of independent spin polarizations            1
 number of spinorial components                      1
 number of k-points in IBZ                          10
 number of q-points in IBZ                          19
 number of symmetry operations                      24
 number of k-points in BZ                          256
 number of q-points in BZ                          256
 number of frequencies for dSigma/dE                 9
 frequency step for dSigma/dE [eV]                0.25
 number of omega for Sigma on real axis              0
 max omega for Sigma on real axis  [eV]           0.00
 zcut for avoiding poles [eV]                     0.10

 EPSILON^-1 parameters (SCR file):
 dimension of the eps^-1 matrix on file             89
 dimension of the eps^-1 matrix used                89
 number of plane-waves for wavefunctions            51
 number of bands                                    17
 number of q-points in IBZ                          19
 number of frequencies                               2
 number of real frequencies                          1
 number of imag frequencies                          1

 matrix elements of self-energy operator (all in [eV])

 Perturbative Calculation
 ==== Info on the Wfd% object ====
  Number of irreducible k-points ........ 10
  Number of spinorial components ........ 1
  Number of spin-density components ..... 1
  Number of spin polarizations .......... 1
  Plane wave cutoff energy ..............   4.5
  Max number of G-vectors ............... 128
  Total number of FFT points ............ 3375
  Number of FFT points treated by me .... 3375
  Parallelism over k-b-g (paral_kgb) .... 0


 ==== FFT mesh for wavefunctions ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   112
  FFT cache size ............................    16
 standard GW with PPM
 Perturbative Calculation

 Calculating <nk|Sigma_x|nk> at k=   -0.125   0.000   0.000
 bands n = from *** to   4

 Will sum 1024 (b,k,s) occupied states in Sigma_x.

 calc_sigx_me: calculation status (    256 to be completed):
 calc_sigx_me : ik_bz    1/ 256 done by processor   0
 calc_sigx_me : ik_bz    2/ 256 done by processor   0
 calc_sigx_me : ik_bz    3/ 256 done by processor   0
 calc_sigx_me : ik_bz    4/ 256 done by processor   0
 calc_sigx_me : ik_bz    5/ 256 done by processor   0
 calc_sigx_me : ik_bz    6/ 256 done by processor   0
 calc_sigx_me : ik_bz    7/ 256 done by processor   0
 calc_sigx_me : ik_bz    8/ 256 done by processor   0
 calc_sigx_me : ik_bz    9/ 256 done by processor   0
 calc_sigx_me : ik_bz   10/ 256 done by processor   0
 calc_sigx_me : ik_bz   11/ 256 done by processor   0
 calc_sigx_me : ik_bz   12/ 256 done by processor   0
 calc_sigx_me : ik_bz   13/ 256 done by processor   0
 calc_sigx_me : ik_bz   14/ 256 done by processor   0
 calc_sigx_me : ik_bz   15/ 256 done by processor   0
 calc_sigx_me : ik_bz   16/ 256 done by processor   0
 calc_sigx_me : ik_bz   17/ 256 done by processor   0
 calc_sigx_me : ik_bz   18/ 256 done by processor   0
 calc_sigx_me : ik_bz   19/ 256 done by processor   0
 calc_sigx_me : ik_bz   20/ 256 done by processor   0
 calc_sigx_me : ik_bz   21/ 256 done by processor   0
 calc_sigx_me : ik_bz   22/ 256 done by processor   0
 calc_sigx_me : ik_bz   23/ 256 done by processor   0
 calc_sigx_me : ik_bz   24/ 256 done by processor   0
 calc_sigx_me : ik_bz   25/ 256 done by processor   0
 calc_sigx_me : ik_bz   26/ 256 done by processor   0
 calc_sigx_me : ik_bz   27/ 256 done by processor   0
 calc_sigx_me : ik_bz   28/ 256 done by processor   0
 calc_sigx_me : ik_bz   29/ 256 done by processor   0
 calc_sigx_me : ik_bz   30/ 256 done by processor   0
 calc_sigx_me : ik_bz   31/ 256 done by processor   0
 calc_sigx_me : ik_bz   32/ 256 done by processor   0
 calc_sigx_me : ik_bz   33/ 256 done by processor   0
 calc_sigx_me : ik_bz   34/ 256 done by processor   0
 calc_sigx_me : ik_bz   35/ 256 done by processor   0
 calc_sigx_me : ik_bz   36/ 256 done by processor   0
 calc_sigx_me : ik_bz   37/ 256 done by processor   0
 calc_sigx_me : ik_bz   38/ 256 done by processor   0
 calc_sigx_me : ik_bz   39/ 256 done by processor   0
 calc_sigx_me : ik_bz   40/ 256 done by processor   0
 calc_sigx_me : ik_bz   41/ 256 done by processor   0
 calc_sigx_me : ik_bz   42/ 256 done by processor   0
 calc_sigx_me : ik_bz   43/ 256 done by processor   0
 calc_sigx_me : ik_bz   44/ 256 done by processor   0
 calc_sigx_me : ik_bz   45/ 256 done by processor   0
 calc_sigx_me : ik_bz   46/ 256 done by processor   0
 calc_sigx_me : ik_bz   47/ 256 done by processor   0
 calc_sigx_me : ik_bz   48/ 256 done by processor   0
 calc_sigx_me : ik_bz   49/ 256 done by processor   0
 calc_sigx_me : ik_bz   50/ 256 done by processor   0
 calc_sigx_me : ik_bz   51/ 256 done by processor   0
 calc_sigx_me : ik_bz   52/ 256 done by processor   0
 calc_sigx_me : ik_bz   53/ 256 done by processor   0
 calc_sigx_me : ik_bz   54/ 256 done by processor   0
 calc_sigx_me : ik_bz   55/ 256 done by processor   0
 calc_sigx_me : ik_bz   56/ 256 done by processor   0
 calc_sigx_me : ik_bz   57/ 256 done by processor   0
 calc_sigx_me : ik_bz   58/ 256 done by processor   0
 calc_sigx_me : ik_bz   59/ 256 done by processor   0
 calc_sigx_me : ik_bz   60/ 256 done by processor   0
 calc_sigx_me : ik_bz   61/ 256 done by processor   0
 calc_sigx_me : ik_bz   62/ 256 done by processor   0
 calc_sigx_me : ik_bz   63/ 256 done by processor   0
 calc_sigx_me : ik_bz   64/ 256 done by processor   0
 calc_sigx_me : ik_bz   65/ 256 done by processor   0
 calc_sigx_me : ik_bz   66/ 256 done by processor   0
 calc_sigx_me : ik_bz   67/ 256 done by processor   0
 calc_sigx_me : ik_bz   68/ 256 done by processor   0
 calc_sigx_me : ik_bz   69/ 256 done by processor   0
 calc_sigx_me : ik_bz   70/ 256 done by processor   0
 calc_sigx_me : ik_bz   71/ 256 done by processor   0
 calc_sigx_me : ik_bz   72/ 256 done by processor   0
 calc_sigx_me : ik_bz   73/ 256 done by processor   0
 calc_sigx_me : ik_bz   74/ 256 done by processor   0
 calc_sigx_me : ik_bz   75/ 256 done by processor   0
 calc_sigx_me : ik_bz   76/ 256 done by processor   0
 calc_sigx_me : ik_bz   77/ 256 done by processor   0
 calc_sigx_me : ik_bz   78/ 256 done by processor   0
 calc_sigx_me : ik_bz   79/ 256 done by processor   0
 calc_sigx_me : ik_bz   80/ 256 done by processor   0
 calc_sigx_me : ik_bz   81/ 256 done by processor   0
 calc_sigx_me : ik_bz   82/ 256 done by processor   0
 calc_sigx_me : ik_bz   83/ 256 done by processor   0
 calc_sigx_me : ik_bz   84/ 256 done by processor   0
 calc_sigx_me : ik_bz   85/ 256 done by processor   0
 calc_sigx_me : ik_bz   86/ 256 done by processor   0
 calc_sigx_me : ik_bz   87/ 256 done by processor   0
 calc_sigx_me : ik_bz   88/ 256 done by processor   0
 calc_sigx_me : ik_bz   89/ 256 done by processor   0
 calc_sigx_me : ik_bz   90/ 256 done by processor   0
 calc_sigx_me : ik_bz   91/ 256 done by processor   0
 calc_sigx_me : ik_bz   92/ 256 done by processor   0
 calc_sigx_me : ik_bz   93/ 256 done by processor   0
 calc_sigx_me : ik_bz   94/ 256 done by processor   0
 calc_sigx_me : ik_bz   95/ 256 done by processor   0
 calc_sigx_me : ik_bz   96/ 256 done by processor   0
 calc_sigx_me : ik_bz   97/ 256 done by processor   0
 calc_sigx_me : ik_bz   98/ 256 done by processor   0
 calc_sigx_me : ik_bz   99/ 256 done by processor   0
 calc_sigx_me : ik_bz  100/ 256 done by processor   0
 calc_sigx_me : ik_bz  101/ 256 done by processor   0
 calc_sigx_me : ik_bz  102/ 256 done by processor   0
 calc_sigx_me : ik_bz  103/ 256 done by processor   0
 calc_sigx_me : ik_bz  104/ 256 done by processor   0
 calc_sigx_me : ik_bz  105/ 256 done by processor   0
 calc_sigx_me : ik_bz  106/ 256 done by processor   0
 calc_sigx_me : ik_bz  107/ 256 done by processor   0
 calc_sigx_me : ik_bz  108/ 256 done by processor   0
 calc_sigx_me : ik_bz  109/ 256 done by processor   0
 calc_sigx_me : ik_bz  110/ 256 done by processor   0
 calc_sigx_me : ik_bz  111/ 256 done by processor   0
 calc_sigx_me : ik_bz  112/ 256 done by processor   0
 calc_sigx_me : ik_bz  113/ 256 done by processor   0
 calc_sigx_me : ik_bz  114/ 256 done by processor   0
 calc_sigx_me : ik_bz  115/ 256 done by processor   0
 calc_sigx_me : ik_bz  116/ 256 done by processor   0
 calc_sigx_me : ik_bz  117/ 256 done by processor   0
 calc_sigx_me : ik_bz  118/ 256 done by processor   0
 calc_sigx_me : ik_bz  119/ 256 done by processor   0
 calc_sigx_me : ik_bz  120/ 256 done by processor   0
 calc_sigx_me : ik_bz  121/ 256 done by processor   0
 calc_sigx_me : ik_bz  122/ 256 done by processor   0
 calc_sigx_me : ik_bz  123/ 256 done by processor   0
 calc_sigx_me : ik_bz  124/ 256 done by processor   0
 calc_sigx_me : ik_bz  125/ 256 done by processor   0
 calc_sigx_me : ik_bz  126/ 256 done by processor   0
 calc_sigx_me : ik_bz  127/ 256 done by processor   0
 calc_sigx_me : ik_bz  128/ 256 done by processor   0
 calc_sigx_me : ik_bz  129/ 256 done by processor   0
 calc_sigx_me : ik_bz  130/ 256 done by processor   0
 calc_sigx_me : ik_bz  131/ 256 done by processor   0
 calc_sigx_me : ik_bz  132/ 256 done by processor   0
 calc_sigx_me : ik_bz  133/ 256 done by processor   0
 calc_sigx_me : ik_bz  134/ 256 done by processor   0
 calc_sigx_me : ik_bz  135/ 256 done by processor   0
 calc_sigx_me : ik_bz  136/ 256 done by processor   0
 calc_sigx_me : ik_bz  137/ 256 done by processor   0
 calc_sigx_me : ik_bz  138/ 256 done by processor   0
 calc_sigx_me : ik_bz  139/ 256 done by processor   0
 calc_sigx_me : ik_bz  140/ 256 done by processor   0
 calc_sigx_me : ik_bz  141/ 256 done by processor   0
 calc_sigx_me : ik_bz  142/ 256 done by processor   0
 calc_sigx_me : ik_bz  143/ 256 done by processor   0
 calc_sigx_me : ik_bz  144/ 256 done by processor   0
 calc_sigx_me : ik_bz  145/ 256 done by processor   0
 calc_sigx_me : ik_bz  146/ 256 done by processor   0
 calc_sigx_me : ik_bz  147/ 256 done by processor   0
 calc_sigx_me : ik_bz  148/ 256 done by processor   0
 calc_sigx_me : ik_bz  149/ 256 done by processor   0
 calc_sigx_me : ik_bz  150/ 256 done by processor   0
 calc_sigx_me : ik_bz  151/ 256 done by processor   0
 calc_sigx_me : ik_bz  152/ 256 done by processor   0
 calc_sigx_me : ik_bz  153/ 256 done by processor   0
 calc_sigx_me : ik_bz  154/ 256 done by processor   0
 calc_sigx_me : ik_bz  155/ 256 done by processor   0
 calc_sigx_me : ik_bz  156/ 256 done by processor   0
 calc_sigx_me : ik_bz  157/ 256 done by processor   0
 calc_sigx_me : ik_bz  158/ 256 done by processor   0
 calc_sigx_me : ik_bz  159/ 256 done by processor   0
 calc_sigx_me : ik_bz  160/ 256 done by processor   0
 calc_sigx_me : ik_bz  161/ 256 done by processor   0
 calc_sigx_me : ik_bz  162/ 256 done by processor   0
 calc_sigx_me : ik_bz  163/ 256 done by processor   0
 calc_sigx_me : ik_bz  164/ 256 done by processor   0
 calc_sigx_me : ik_bz  165/ 256 done by processor   0
 calc_sigx_me : ik_bz  166/ 256 done by processor   0
 calc_sigx_me : ik_bz  167/ 256 done by processor   0
 calc_sigx_me : ik_bz  168/ 256 done by processor   0
 calc_sigx_me : ik_bz  169/ 256 done by processor   0
 calc_sigx_me : ik_bz  170/ 256 done by processor   0
 calc_sigx_me : ik_bz  171/ 256 done by processor   0
 calc_sigx_me : ik_bz  172/ 256 done by processor   0
 calc_sigx_me : ik_bz  173/ 256 done by processor   0
 calc_sigx_me : ik_bz  174/ 256 done by processor   0
 calc_sigx_me : ik_bz  175/ 256 done by processor   0
 calc_sigx_me : ik_bz  176/ 256 done by processor   0
 calc_sigx_me : ik_bz  177/ 256 done by processor   0
 calc_sigx_me : ik_bz  178/ 256 done by processor   0
 calc_sigx_me : ik_bz  179/ 256 done by processor   0
 calc_sigx_me : ik_bz  180/ 256 done by processor   0
 calc_sigx_me : ik_bz  181/ 256 done by processor   0
 calc_sigx_me : ik_bz  182/ 256 done by processor   0
 calc_sigx_me : ik_bz  183/ 256 done by processor   0
 calc_sigx_me : ik_bz  184/ 256 done by processor   0
 calc_sigx_me : ik_bz  185/ 256 done by processor   0
 calc_sigx_me : ik_bz  186/ 256 done by processor   0
 calc_sigx_me : ik_bz  187/ 256 done by processor   0
 calc_sigx_me : ik_bz  188/ 256 done by processor   0
 calc_sigx_me : ik_bz  189/ 256 done by processor   0
 calc_sigx_me : ik_bz  190/ 256 done by processor   0
 calc_sigx_me : ik_bz  191/ 256 done by processor   0
 calc_sigx_me : ik_bz  192/ 256 done by processor   0
 calc_sigx_me : ik_bz  193/ 256 done by processor   0
 calc_sigx_me : ik_bz  194/ 256 done by processor   0
 calc_sigx_me : ik_bz  195/ 256 done by processor   0
 calc_sigx_me : ik_bz  196/ 256 done by processor   0
 calc_sigx_me : ik_bz  197/ 256 done by processor   0
 calc_sigx_me : ik_bz  198/ 256 done by processor   0
 calc_sigx_me : ik_bz  199/ 256 done by processor   0
 calc_sigx_me : ik_bz  200/ 256 done by processor   0
 calc_sigx_me : ik_bz  201/ 256 done by processor   0
 calc_sigx_me : ik_bz  202/ 256 done by processor   0
 calc_sigx_me : ik_bz  203/ 256 done by processor   0
 calc_sigx_me : ik_bz  204/ 256 done by processor   0
 calc_sigx_me : ik_bz  205/ 256 done by processor   0
 calc_sigx_me : ik_bz  206/ 256 done by processor   0
 calc_sigx_me : ik_bz  207/ 256 done by processor   0
 calc_sigx_me : ik_bz  208/ 256 done by processor   0
 calc_sigx_me : ik_bz  209/ 256 done by processor   0
 calc_sigx_me : ik_bz  210/ 256 done by processor   0
 calc_sigx_me : ik_bz  211/ 256 done by processor   0
 calc_sigx_me : ik_bz  212/ 256 done by processor   0
 calc_sigx_me : ik_bz  213/ 256 done by processor   0
 calc_sigx_me : ik_bz  214/ 256 done by processor   0
 calc_sigx_me : ik_bz  215/ 256 done by processor   0
 calc_sigx_me : ik_bz  216/ 256 done by processor   0
 calc_sigx_me : ik_bz  217/ 256 done by processor   0
 calc_sigx_me : ik_bz  218/ 256 done by processor   0
 calc_sigx_me : ik_bz  219/ 256 done by processor   0
 calc_sigx_me : ik_bz  220/ 256 done by processor   0
 calc_sigx_me : ik_bz  221/ 256 done by processor   0
 calc_sigx_me : ik_bz  222/ 256 done by processor   0
 calc_sigx_me : ik_bz  223/ 256 done by processor   0
 calc_sigx_me : ik_bz  224/ 256 done by processor   0
 calc_sigx_me : ik_bz  225/ 256 done by processor   0
 calc_sigx_me : ik_bz  226/ 256 done by processor   0
 calc_sigx_me : ik_bz  227/ 256 done by processor   0
 calc_sigx_me : ik_bz  228/ 256 done by processor   0
 calc_sigx_me : ik_bz  229/ 256 done by processor   0
 calc_sigx_me : ik_bz  230/ 256 done by processor   0
 calc_sigx_me : ik_bz  231/ 256 done by processor   0
 calc_sigx_me : ik_bz  232/ 256 done by processor   0
 calc_sigx_me : ik_bz  233/ 256 done by processor   0
 calc_sigx_me : ik_bz  234/ 256 done by processor   0
 calc_sigx_me : ik_bz  235/ 256 done by processor   0
 calc_sigx_me : ik_bz  236/ 256 done by processor   0
 calc_sigx_me : ik_bz  237/ 256 done by processor   0
 calc_sigx_me : ik_bz  238/ 256 done by processor   0
 calc_sigx_me : ik_bz  239/ 256 done by processor   0
 calc_sigx_me : ik_bz  240/ 256 done by processor   0
 calc_sigx_me : ik_bz  241/ 256 done by processor   0
 calc_sigx_me : ik_bz  242/ 256 done by processor   0
 calc_sigx_me : ik_bz  243/ 256 done by processor   0
 calc_sigx_me : ik_bz  244/ 256 done by processor   0
 calc_sigx_me : ik_bz  245/ 256 done by processor   0
 calc_sigx_me : ik_bz  246/ 256 done by processor   0
 calc_sigx_me : ik_bz  247/ 256 done by processor   0
 calc_sigx_me : ik_bz  248/ 256 done by processor   0
 calc_sigx_me : ik_bz  249/ 256 done by processor   0
 calc_sigx_me : ik_bz  250/ 256 done by processor   0
 calc_sigx_me : ik_bz  251/ 256 done by processor   0
 calc_sigx_me : ik_bz  252/ 256 done by processor   0
 calc_sigx_me : ik_bz  253/ 256 done by processor   0
 calc_sigx_me : ik_bz  254/ 256 done by processor   0
 calc_sigx_me : ik_bz  255/ 256 done by processor   0
 calc_sigx_me : ik_bz  256/ 256 done by processor   0

 Calculating <nk|Sigma_c(omega)|nk> at k =   -0.125   0.000   0.000
 bands n = from *** to   4

 standard GW with PPM
 Will sum 7680 (b,k,s) states in Sigma_c.

 calculation status (    256 to be completed):
 csigme : ik_bz    1/ 256 done by processor   0
 csigme : ik_bz    2/ 256 done by processor   0
 csigme : ik_bz    3/ 256 done by processor   0
 csigme : ik_bz    4/ 256 done by processor   0
 csigme : ik_bz    5/ 256 done by processor   0
 csigme : ik_bz    6/ 256 done by processor   0
 csigme : ik_bz    7/ 256 done by processor   0
 csigme : ik_bz    8/ 256 done by processor   0
 csigme : ik_bz    9/ 256 done by processor   0
 csigme : ik_bz   10/ 256 done by processor   0
 csigme : ik_bz   11/ 256 done by processor   0
 csigme : ik_bz   12/ 256 done by processor   0
 csigme : ik_bz   13/ 256 done by processor   0
 csigme : ik_bz   14/ 256 done by processor   0
 csigme : ik_bz   15/ 256 done by processor   0
 csigme : ik_bz   16/ 256 done by processor   0
 csigme : ik_bz   17/ 256 done by processor   0
 csigme : ik_bz   18/ 256 done by processor   0
 csigme : ik_bz   19/ 256 done by processor   0
 csigme : ik_bz   20/ 256 done by processor   0
 csigme : ik_bz   21/ 256 done by processor   0
 csigme : ik_bz   22/ 256 done by processor   0
 csigme : ik_bz   23/ 256 done by processor   0
 csigme : ik_bz   24/ 256 done by processor   0
 csigme : ik_bz   25/ 256 done by processor   0
 csigme : ik_bz   26/ 256 done by processor   0
 csigme : ik_bz   27/ 256 done by processor   0
 csigme : ik_bz   28/ 256 done by processor   0
 csigme : ik_bz   29/ 256 done by processor   0
 csigme : ik_bz   30/ 256 done by processor   0
 csigme : ik_bz   31/ 256 done by processor   0
 csigme : ik_bz   32/ 256 done by processor   0
 csigme : ik_bz   33/ 256 done by processor   0
 csigme : ik_bz   34/ 256 done by processor   0
 csigme : ik_bz   35/ 256 done by processor   0
 csigme : ik_bz   36/ 256 done by processor   0
 csigme : ik_bz   37/ 256 done by processor   0
 csigme : ik_bz   38/ 256 done by processor   0
 csigme : ik_bz   39/ 256 done by processor   0
 csigme : ik_bz   40/ 256 done by processor   0
 csigme : ik_bz   41/ 256 done by processor   0
 csigme : ik_bz   42/ 256 done by processor   0
 csigme : ik_bz   43/ 256 done by processor   0
 csigme : ik_bz   44/ 256 done by processor   0
 csigme : ik_bz   45/ 256 done by processor   0
 csigme : ik_bz   46/ 256 done by processor   0
 csigme : ik_bz   47/ 256 done by processor   0
 csigme : ik_bz   48/ 256 done by processor   0
 csigme : ik_bz   49/ 256 done by processor   0
 csigme : ik_bz   50/ 256 done by processor   0
 csigme : ik_bz   51/ 256 done by processor   0
 csigme : ik_bz   52/ 256 done by processor   0
 csigme : ik_bz   53/ 256 done by processor   0
 csigme : ik_bz   54/ 256 done by processor   0
 csigme : ik_bz   55/ 256 done by processor   0
 csigme : ik_bz   56/ 256 done by processor   0
 csigme : ik_bz   57/ 256 done by processor   0
 csigme : ik_bz   58/ 256 done by processor   0
 csigme : ik_bz   59/ 256 done by processor   0
 csigme : ik_bz   60/ 256 done by processor   0
 csigme : ik_bz   61/ 256 done by processor   0
 csigme : ik_bz   62/ 256 done by processor   0
 csigme : ik_bz   63/ 256 done by processor   0
 csigme : ik_bz   64/ 256 done by processor   0
 csigme : ik_bz   65/ 256 done by processor   0
 csigme : ik_bz   66/ 256 done by processor   0
 csigme : ik_bz   67/ 256 done by processor   0
 csigme : ik_bz   68/ 256 done by processor   0
 csigme : ik_bz   69/ 256 done by processor   0
 csigme : ik_bz   70/ 256 done by processor   0
 csigme : ik_bz   71/ 256 done by processor   0
 csigme : ik_bz   72/ 256 done by processor   0
 csigme : ik_bz   73/ 256 done by processor   0
 csigme : ik_bz   74/ 256 done by processor   0
 csigme : ik_bz   75/ 256 done by processor   0
 csigme : ik_bz   76/ 256 done by processor   0
 csigme : ik_bz   77/ 256 done by processor   0
 csigme : ik_bz   78/ 256 done by processor   0
 csigme : ik_bz   79/ 256 done by processor   0
 csigme : ik_bz   80/ 256 done by processor   0
 csigme : ik_bz   81/ 256 done by processor   0
 csigme : ik_bz   82/ 256 done by processor   0
 csigme : ik_bz   83/ 256 done by processor   0
 csigme : ik_bz   84/ 256 done by processor   0
 csigme : ik_bz   85/ 256 done by processor   0
 csigme : ik_bz   86/ 256 done by processor   0
 csigme : ik_bz   87/ 256 done by processor   0
 csigme : ik_bz   88/ 256 done by processor   0
 csigme : ik_bz   89/ 256 done by processor   0
 csigme : ik_bz   90/ 256 done by processor   0
 csigme : ik_bz   91/ 256 done by processor   0
 csigme : ik_bz   92/ 256 done by processor   0
 csigme : ik_bz   93/ 256 done by processor   0
 csigme : ik_bz   94/ 256 done by processor   0
 csigme : ik_bz   95/ 256 done by processor   0
 csigme : ik_bz   96/ 256 done by processor   0
 csigme : ik_bz   97/ 256 done by processor   0
 csigme : ik_bz   98/ 256 done by processor   0
 csigme : ik_bz   99/ 256 done by processor   0
 csigme : ik_bz  100/ 256 done by processor   0
 csigme : ik_bz  101/ 256 done by processor   0
 csigme : ik_bz  102/ 256 done by processor   0
 csigme : ik_bz  103/ 256 done by processor   0
 csigme : ik_bz  104/ 256 done by processor   0
 csigme : ik_bz  105/ 256 done by processor   0
 csigme : ik_bz  106/ 256 done by processor   0
 csigme : ik_bz  107/ 256 done by processor   0
 csigme : ik_bz  108/ 256 done by processor   0
 csigme : ik_bz  109/ 256 done by processor   0
 csigme : ik_bz  110/ 256 done by processor   0
 csigme : ik_bz  111/ 256 done by processor   0
 csigme : ik_bz  112/ 256 done by processor   0
 csigme : ik_bz  113/ 256 done by processor   0
 csigme : ik_bz  114/ 256 done by processor   0
 csigme : ik_bz  115/ 256 done by processor   0
 csigme : ik_bz  116/ 256 done by processor   0
 csigme : ik_bz  117/ 256 done by processor   0
 csigme : ik_bz  118/ 256 done by processor   0
 csigme : ik_bz  119/ 256 done by processor   0
 csigme : ik_bz  120/ 256 done by processor   0
 csigme : ik_bz  121/ 256 done by processor   0
 csigme : ik_bz  122/ 256 done by processor   0
 csigme : ik_bz  123/ 256 done by processor   0
 csigme : ik_bz  124/ 256 done by processor   0
 csigme : ik_bz  125/ 256 done by processor   0
 csigme : ik_bz  126/ 256 done by processor   0

--- !ERROR
message: |
    Wrong b1, b2
src_file: m_melemts.F90
src_line: 620
...

 csigme : ik_bz  127/ 256 done by processor   0
 csigme : ik_bz  128/ 256 done by processor   0
 csigme : ik_bz  129/ 256 done by processor   0
 csigme : ik_bz  130/ 256 done by processor   0
 csigme : ik_bz  131/ 256 done by processor   0
 csigme : ik_bz  132/ 256 done by processor   0
 csigme : ik_bz  133/ 256 done by processor   0
 csigme : ik_bz  134/ 256 done by processor   0
 csigme : ik_bz  135/ 256 done by processor   0
 csigme : ik_bz  136/ 256 done by processor   0
 csigme : ik_bz  137/ 256 done by processor   0
 csigme : ik_bz  138/ 256 done by processor   0
 csigme : ik_bz  139/ 256 done by processor   0
 csigme : ik_bz  140/ 256 done by processor   0
 csigme : ik_bz  141/ 256 done by processor   0
 csigme : ik_bz  142/ 256 done by processor   0
 csigme : ik_bz  143/ 256 done by processor   0
 csigme : ik_bz  144/ 256 done by processor   0
 csigme : ik_bz  145/ 256 done by processor   0
 csigme : ik_bz  146/ 256 done by processor   0
 csigme : ik_bz  147/ 256 done by processor   0
 csigme : ik_bz  148/ 256 done by processor   0
 csigme : ik_bz  149/ 256 done by processor   0
 csigme : ik_bz  150/ 256 done by processor   0
 csigme : ik_bz  151/ 256 done by processor   0
 csigme : ik_bz  152/ 256 done by processor   0
 csigme : ik_bz  153/ 256 done by processor   0
 csigme : ik_bz  154/ 256 done by processor   0
 csigme : ik_bz  155/ 256 done by processor   0
 csigme : ik_bz  156/ 256 done by processor   0
 csigme : ik_bz  157/ 256 done by processor   0
 csigme : ik_bz  158/ 256 done by processor   0
 csigme : ik_bz  159/ 256 done by processor   0
 csigme : ik_bz  160/ 256 done by processor   0
 csigme : ik_bz  161/ 256 done by processor   0
 csigme : ik_bz  162/ 256 done by processor   0
 csigme : ik_bz  163/ 256 done by processor   0
 csigme : ik_bz  164/ 256 done by processor   0
 csigme : ik_bz  165/ 256 done by processor   0
 csigme : ik_bz  166/ 256 done by processor   0
 csigme : ik_bz  167/ 256 done by processor   0
 csigme : ik_bz  168/ 256 done by processor   0
 csigme : ik_bz  169/ 256 done by processor   0
 csigme : ik_bz  170/ 256 done by processor   0
 csigme : ik_bz  171/ 256 done by processor   0
 csigme : ik_bz  172/ 256 done by processor   0
 csigme : ik_bz  173/ 256 done by processor   0
 csigme : ik_bz  174/ 256 done by processor   0
 csigme : ik_bz  175/ 256 done by processor   0
 csigme : ik_bz  176/ 256 done by processor   0
 csigme : ik_bz  177/ 256 done by processor   0
 csigme : ik_bz  178/ 256 done by processor   0
 csigme : ik_bz  179/ 256 done by processor   0
 csigme : ik_bz  180/ 256 done by processor   0
 csigme : ik_bz  181/ 256 done by processor   0
 csigme : ik_bz  182/ 256 done by processor   0
 csigme : ik_bz  183/ 256 done by processor   0
 csigme : ik_bz  184/ 256 done by processor   0
 csigme : ik_bz  185/ 256 done by processor   0
 csigme : ik_bz  186/ 256 done by processor   0
 csigme : ik_bz  187/ 256 done by processor   0
 csigme : ik_bz  188/ 256 done by processor   0
 csigme : ik_bz  189/ 256 done by processor   0
 csigme : ik_bz  190/ 256 done by processor   0
 csigme : ik_bz  191/ 256 done by processor   0
 csigme : ik_bz  192/ 256 done by processor   0
 csigme : ik_bz  193/ 256 done by processor   0
 csigme : ik_bz  194/ 256 done by processor   0
 csigme : ik_bz  195/ 256 done by processor   0
 csigme : ik_bz  196/ 256 done by processor   0
 csigme : ik_bz  197/ 256 done by processor   0
 csigme : ik_bz  198/ 256 done by processor   0
 csigme : ik_bz  199/ 256 done by processor   0
 csigme : ik_bz  200/ 256 done by processor   0
 csigme : ik_bz  201/ 256 done by processor   0
 csigme : ik_bz  202/ 256 done by processor   0
 csigme : ik_bz  203/ 256 done by processor   0
 csigme : ik_bz  204/ 256 done by processor   0
 csigme : ik_bz  205/ 256 done by processor   0
 csigme : ik_bz  206/ 256 done by processor   0
 csigme : ik_bz  207/ 256 done by processor   0
 csigme : ik_bz  208/ 256 done by processor   0
 csigme : ik_bz  209/ 256 done by processor   0
 csigme : ik_bz  210/ 256 done by processor   0
 csigme : ik_bz  211/ 256 done by processor   0
 csigme : ik_bz  212/ 256 done by processor   0
 csigme : ik_bz  213/ 256 done by processor   0
 csigme : ik_bz  214/ 256 done by processor   0
 csigme : ik_bz  215/ 256 done by processor   0
 csigme : ik_bz  216/ 256 done by processor   0
 csigme : ik_bz  217/ 256 done by processor   0
 csigme : ik_bz  218/ 256 done by processor   0
 csigme : ik_bz  219/ 256 done by processor   0
 csigme : ik_bz  220/ 256 done by processor   0
 csigme : ik_bz  221/ 256 done by processor   0
 csigme : ik_bz  222/ 256 done by processor   0
 csigme : ik_bz  223/ 256 done by processor   0
 csigme : ik_bz  224/ 256 done by processor   0
 csigme : ik_bz  225/ 256 done by processor   0
 csigme : ik_bz  226/ 256 done by processor   0
 csigme : ik_bz  227/ 256 done by processor   0
 csigme : ik_bz  228/ 256 done by processor   0
 csigme : ik_bz  229/ 256 done by processor   0
 csigme : ik_bz  230/ 256 done by processor   0
 csigme : ik_bz  231/ 256 done by processor   0
 csigme : ik_bz  232/ 256 done by processor   0
 csigme : ik_bz  233/ 256 done by processor   0
 csigme : ik_bz  234/ 256 done by processor   0
 csigme : ik_bz  235/ 256 done by processor   0
 csigme : ik_bz  236/ 256 done by processor   0
 csigme : ik_bz  237/ 256 done by processor   0
 csigme : ik_bz  238/ 256 done by processor   0
 csigme : ik_bz  239/ 256 done by processor   0
 csigme : ik_bz  240/ 256 done by processor   0
 csigme : ik_bz  241/ 256 done by processor   0
 csigme : ik_bz  242/ 256 done by processor   0
 csigme : ik_bz  243/ 256 done by processor   0
 csigme : ik_bz  244/ 256 done by processor   0
 csigme : ik_bz  245/ 256 done by processor   0
 csigme : ik_bz  246/ 256 done by processor   0
 csigme : ik_bz  247/ 256 done by processor   0
 csigme : ik_bz  248/ 256 done by processor   0
 csigme : ik_bz  249/ 256 done by processor   0
 csigme : ik_bz  250/ 256 done by processor   0
 csigme : ik_bz  251/ 256 done by processor   0
 csigme : ik_bz  252/ 256 done by processor   0
 csigme : ik_bz  253/ 256 done by processor   0
 csigme : ik_bz  254/ 256 done by processor   0
 csigme : ik_bz  255/ 256 done by processor   0
 csigme : ik_bz  256/ 256 done by processor   0
 ** On entry to ZHEEV parameter number  3 had an illegal value
