  ABINIT 8.4.4
  
  Give name for formatted input file: 
tbase3_4.in
  Give name for formatted output file:
tbase3_4.out
  Give root name for generic input files:
tbase3_xi
  Give root name for generic output files:
tbase3_xo
  Give root name for generic temporary files:
tbase3_x

.Version 8.4.4 of ABINIT 
.(sequential version, prepared for a x86_64_linux_gnu5.4 computer) 

.Copyright (C) 1998-2017 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Sun 21 Jan 2018.
- ( at 22h35 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.4.4
  Build target  : x86_64_linux_gnu5.4
  Build date    : 20180121

 === Compiler Suite === 
  C compiler       : gnu5.4
  C++ compiler     : gnu5.4
  Fortran compiler : gnu5.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_core_i3

 === Multicore === 
  Parallel build : no
  Parallel I/O   : no
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback
  FFT flavor    : fftw3
  LINALG flavor : atlas
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf

 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : no

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 Optimizations for 20_datashare:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV   HAVE_FC_IEEE_EXCEPTIONS
 
          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
            HAVE_FC_SYSTEM                  HAVE_FFT            HAVE_FFT_FFTW3
 
           HAVE_FFT_SERIAL          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT
 
      HAVE_LIBTETRA_ABINIT                HAVE_LIBXC               HAVE_LINALG
 
        HAVE_LINALG_SERIAL               HAVE_NETCDF             HAVE_OS_LINUX
 
         HAVE_TIMER_ABINIT              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tbase3_4.in
- output file    -> tbase3_4.out
- root for input  files -> tbase3_xi
- root for output files -> tbase3_xo

-instrng: 88 lines of input have been read from file tbase3_4.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is ../../../Psps_for_tests/14si.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2

 inpspheads: deduce mpsang = 3, n1xccc = 2501.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  symfind : exit, nsym=          48
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2      -1   0   0     0  -1   0     0   0  -1       1      0.2500  0.2500  0.2500
   3       0  -1   1     0  -1   0     1  -1   0       1      0.0000  0.0000  0.0000
   4       0   1  -1     0   1   0    -1   1   0       1      0.2500  0.2500  0.2500
   5      -1   0   0    -1   0   1    -1   1   0       1      0.0000  0.0000  0.0000
   6       1   0   0     1   0  -1     1  -1   0       1      0.2500  0.2500  0.2500
   7       0   1  -1     1   0  -1     0   0  -1       1      0.0000  0.0000  0.0000
   8       0  -1   1    -1   0   1     0   0   1       1      0.2500  0.2500  0.2500
   9      -1   0   0    -1   1   0    -1   0   1       1      0.0000  0.0000  0.0000
  10       1   0   0     1  -1   0     1   0  -1       1      0.2500  0.2500  0.2500
  11       0  -1   1     1  -1   0     0  -1   0       1      0.0000  0.0000  0.0000
  12       0   1  -1    -1   1   0     0   1   0       1      0.2500  0.2500  0.2500
  13       1   0   0     0   0   1     0   1   0       1      0.0000  0.0000  0.0000
  14      -1   0   0     0   0  -1     0  -1   0       1      0.2500  0.2500  0.2500
  15       0   1  -1     0   0  -1     1   0  -1       1      0.0000  0.0000  0.0000
  16       0  -1   1     0   0   1    -1   0   1       1      0.2500  0.2500  0.2500
  17      -1   0   1    -1   1   0    -1   0   0       1      0.0000  0.0000  0.0000
  18       1   0  -1     1  -1   0     1   0   0       1      0.2500  0.2500  0.2500
  19       0  -1   0     1  -1   0     0  -1   1       1      0.0000  0.0000  0.0000
  20       0   1   0    -1   1   0     0   1  -1       1      0.2500  0.2500  0.2500
  21       1   0  -1     0   0  -1     0   1  -1       1      0.0000  0.0000  0.0000
  22      -1   0   1     0   0   1     0  -1   1       1      0.2500  0.2500  0.2500
  23       0   1   0     0   0   1     1   0   0       1      0.0000  0.0000  0.0000
  24       0  -1   0     0   0  -1    -1   0   0       1      0.2500  0.2500  0.2500
  25       1   0  -1     0   1  -1     0   0  -1       1      0.0000  0.0000  0.0000
  26      -1   0   1     0  -1   1     0   0   1       1      0.2500  0.2500  0.2500
  27       0  -1   0     0  -1   1     1  -1   0       1      0.0000  0.0000  0.0000
  28       0   1   0     0   1  -1    -1   1   0       1      0.2500  0.2500  0.2500
  29      -1   0   1    -1   0   0    -1   1   0       1      0.0000  0.0000  0.0000
  30       1   0  -1     1   0   0     1  -1   0       1      0.2500  0.2500  0.2500
  31       0   1   0     1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  32       0  -1   0    -1   0   0     0   0  -1       1      0.2500  0.2500  0.2500
  33       0   0  -1     0   1  -1     1   0  -1       1      0.0000  0.0000  0.0000
  34       0   0   1     0  -1   1    -1   0   1       1      0.2500  0.2500  0.2500
  35       1  -1   0     0  -1   1     0  -1   0       1      0.0000  0.0000  0.0000
  36      -1   1   0     0   1  -1     0   1   0       1      0.2500  0.2500  0.2500
  37       0   0   1     1   0   0     0   1   0       1      0.0000  0.0000  0.0000
  38       0   0  -1    -1   0   0     0  -1   0       1      0.2500  0.2500  0.2500
  39      -1   1   0    -1   0   0    -1   0   1       1      0.0000  0.0000  0.0000
  40       1  -1   0     1   0   0     1   0  -1       1      0.2500  0.2500  0.2500
  41       0   0   1     0   1   0     1   0   0       1      0.0000  0.0000  0.0000
  42       0   0  -1     0  -1   0    -1   0   0       1      0.2500  0.2500  0.2500
  43       1  -1   0     0  -1   0     0  -1   1       1      0.0000  0.0000  0.0000
  44      -1   1   0     0   1   0     0   1  -1       1      0.2500  0.2500  0.2500
  45       0   0  -1     1   0  -1     0   1  -1       1      0.0000  0.0000  0.0000
  46       0   0   1    -1   0   1     0  -1   1       1      0.2500  0.2500  0.2500
  47      -1   1   0    -1   0   1    -1   0   0       1      0.0000  0.0000  0.0000
  48       1  -1   0     1   0  -1     1   0   0       1      0.2500  0.2500  0.2500

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
 symspgr : optical characteristics = isotropic
 ingeo : angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  symfind : exit, nsym=          48
    symrel matrices, symafm and tnons are :
   1       1   0   0     0   1   0     0   0   1       1      0.0000  0.0000  0.0000
   2      -1   0   0     0  -1   0     0   0  -1       1      0.2500  0.2500  0.2500
   3       0  -1   1     0  -1   0     1  -1   0       1      0.0000  0.0000  0.0000
   4       0   1  -1     0   1   0    -1   1   0       1      0.2500  0.2500  0.2500
   5      -1   0   0    -1   0   1    -1   1   0       1      0.0000  0.0000  0.0000
   6       1   0   0     1   0  -1     1  -1   0       1      0.2500  0.2500  0.2500
   7       0   1  -1     1   0  -1     0   0  -1       1      0.0000  0.0000  0.0000
   8       0  -1   1    -1   0   1     0   0   1       1      0.2500  0.2500  0.2500
   9      -1   0   0    -1   1   0    -1   0   1       1      0.0000  0.0000  0.0000
  10       1   0   0     1  -1   0     1   0  -1       1      0.2500  0.2500  0.2500
  11       0  -1   1     1  -1   0     0  -1   0       1      0.0000  0.0000  0.0000
  12       0   1  -1    -1   1   0     0   1   0       1      0.2500  0.2500  0.2500
  13       1   0   0     0   0   1     0   1   0       1      0.0000  0.0000  0.0000
  14      -1   0   0     0   0  -1     0  -1   0       1      0.2500  0.2500  0.2500
  15       0   1  -1     0   0  -1     1   0  -1       1      0.0000  0.0000  0.0000
  16       0  -1   1     0   0   1    -1   0   1       1      0.2500  0.2500  0.2500
  17      -1   0   1    -1   1   0    -1   0   0       1      0.0000  0.0000  0.0000
  18       1   0  -1     1  -1   0     1   0   0       1      0.2500  0.2500  0.2500
  19       0  -1   0     1  -1   0     0  -1   1       1      0.0000  0.0000  0.0000
  20       0   1   0    -1   1   0     0   1  -1       1      0.2500  0.2500  0.2500
  21       1   0  -1     0   0  -1     0   1  -1       1      0.0000  0.0000  0.0000
  22      -1   0   1     0   0   1     0  -1   1       1      0.2500  0.2500  0.2500
  23       0   1   0     0   0   1     1   0   0       1      0.0000  0.0000  0.0000
  24       0  -1   0     0   0  -1    -1   0   0       1      0.2500  0.2500  0.2500
  25       1   0  -1     0   1  -1     0   0  -1       1      0.0000  0.0000  0.0000
  26      -1   0   1     0  -1   1     0   0   1       1      0.2500  0.2500  0.2500
  27       0  -1   0     0  -1   1     1  -1   0       1      0.0000  0.0000  0.0000
  28       0   1   0     0   1  -1    -1   1   0       1      0.2500  0.2500  0.2500
  29      -1   0   1    -1   0   0    -1   1   0       1      0.0000  0.0000  0.0000
  30       1   0  -1     1   0   0     1  -1   0       1      0.2500  0.2500  0.2500
  31       0   1   0     1   0   0     0   0   1       1      0.0000  0.0000  0.0000
  32       0  -1   0    -1   0   0     0   0  -1       1      0.2500  0.2500  0.2500
  33       0   0  -1     0   1  -1     1   0  -1       1      0.0000  0.0000  0.0000
  34       0   0   1     0  -1   1    -1   0   1       1      0.2500  0.2500  0.2500
  35       1  -1   0     0  -1   1     0  -1   0       1      0.0000  0.0000  0.0000
  36      -1   1   0     0   1  -1     0   1   0       1      0.2500  0.2500  0.2500
  37       0   0   1     1   0   0     0   1   0       1      0.0000  0.0000  0.0000
  38       0   0  -1    -1   0   0     0  -1   0       1      0.2500  0.2500  0.2500
  39      -1   1   0    -1   0   0    -1   0   1       1      0.0000  0.0000  0.0000
  40       1  -1   0     1   0   0     1   0  -1       1      0.2500  0.2500  0.2500
  41       0   0   1     0   1   0     1   0   0       1      0.0000  0.0000  0.0000
  42       0   0  -1     0  -1   0    -1   0   0       1      0.2500  0.2500  0.2500
  43       1  -1   0     0  -1   0     0  -1   1       1      0.0000  0.0000  0.0000
  44      -1   1   0     0   1   0     0   1  -1       1      0.2500  0.2500  0.2500
  45       0   0  -1     1   0  -1     0   1  -1       1      0.0000  0.0000  0.0000
  46       0   0   1    -1   0   1     0  -1   1       1      0.2500  0.2500  0.2500
  47      -1   1   0    -1   0   1    -1   0   0       1      0.0000  0.0000  0.0000
  48       1  -1   0     1   0  -1     1   0   0       1      0.2500  0.2500  0.2500

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 227  Fd -3 m   (=Oh^7)
 symspgr : optical characteristics = isotropic
 ingeo : angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 invars2: take the default value of fband=  1.25000000E-01
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  0.00
 invars2: take the default value of fband=  1.25000000E-01
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 2, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 2, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 2, ground state wf handled in core.
 For input ecut=  8.820000E+00 best grid ngfft=      20      20      20
       max ecut=  9.523667E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 331
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=10 and mkmem  = 10, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=10 and mkqmem = 10, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=10 and mk1mem = 10, ground state wf handled in core.
 For input ecut=  8.820000E+00 best grid ngfft=      20      20      20
       max ecut=  9.523667E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    20   20   20
  Augmented FFT divisions ...................    21   21   20
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 338

 DATASET    1 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       2
     lnmax =       2     mgfft =      20  mpssoang =       3    mqgrid =    3001
     natom =       2  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =    2501    ntypat =       1
    occopt =       1   xclevel =       1
-    mband =           5        mffmem =           1         mkmem =           2
       mpw =         331          nfft =        8000          nkpt =           2
================================================================================
P This job should need less than                       2.886 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.053 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.9786 MBytes.
 memana : allocated an array of      0.979 Mbytes, for testing purposes.
 memana: allocated       2.886Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : space group Fd -3 m (#227); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       2
     lnmax =       2     mgfft =      20  mpssoang =       3    mqgrid =    3001
     natom =       2  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =    2501    ntypat =       1
    occopt =       1   xclevel =       1
-    mband =           5        mffmem =           1         mkmem =          10
       mpw =         338          nfft =        8000          nkpt =          10
================================================================================
P This job should need less than                       3.131 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.260 Mbytes ; DEN or POT disk file :      0.063 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.9786 MBytes.
 memana : allocated an array of      0.979 Mbytes, for testing purposes.
 memana: allocated       3.131Mbytes, for testing purposes. 
 The job will continue.
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
 
 These variables are accessible in NetCDF format (tbase3_xo_OUT.nc)

            acell      1.0180000000E+01  1.0180000000E+01  1.0180000000E+01 Bohr
              amu      2.80855000E+01
           diemac      1.20000000E+01
          dilatmx      1.05000000E+00
             ecut      8.00000000E+00 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         312
           getwfk          -1
           ionmov           2
           jdtset        1    2
              kpt1    -2.50000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  0.00000000E+00  0.00000000E+00
              kpt2    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -3.75000000E-01  0.00000000E+00  0.00000000E+00
         kptrlatt1       2   -2    2     -2    2    2     -2   -2    2
         kptrlatt2       4   -4    4     -4    4    4     -4   -4    4
          kptrlen1     2.03600000E+01
          kptrlen2     4.07200000E+01
P           mkmem1          2
P           mkmem2         10
            natom           2
            nband1          5
            nband2          5
           ndtset           2
            ngfft          20      20      20
             nkpt1          2
             nkpt2         10
            nstep          10
             nsym          48
            ntime          10
           ntypat           1
              occ1     2.000000  2.000000  2.000000  2.000000  0.000000
              occ2     2.000000  2.000000  2.000000  2.000000  0.000000
          optcell           1
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
           toldfe      1.00000000E-06 Hartree
            typat      1  1
              wtk1       0.75000    0.25000
              wtk2       0.09375    0.09375    0.09375    0.18750    0.09375    0.09375
                         0.09375    0.18750    0.03125    0.03125
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.3467559959E+00  1.3467559959E+00  1.3467559959E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5450000000E+00  2.5450000000E+00  2.5450000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       14.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

--- !ERROR
src_file: chkvars.F90
src_line: 402
mpi_rank: 0
message: |
    Found the token ACCESSWFF in the input file.
    This name is not one of the registered input variable names (see http://www.abinit.org/doc).
    Action: check your input file. You likely mistyped the input variable.
...


 leave_new: decision taken to exit ...

--- !ERROR
src_file: chkvars.F90
src_line: 402
mpi_rank: 0
message: |
    Found the token ACCESSWFF in the input file.
    This name is not one of the registered input variable names (see http://www.abinit.org/doc).
    Action: check your input file. You likely mistyped the input variable.
...

