  ABINIT 
  
  Give name for formatted input file: 
bamgf.in
  Give name for formatted output file:
bamgf.out
  Give root name for generic input files:
bamgfi
  Give root name for generic output files:
bamgfo
  Give root name for generic temporary files:
bamgf

.Version 7.6.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel13.1 computer) 

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

.Starting date : Tue 25 Mar 2014.
- ( at 23h50 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.6.2
  Build target  : x86_64_linux_intel13.1
  Build date    : 20140324
 
 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : intel13.1
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : amd_opteron
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  openMP support : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : fftw3
  LINALG flavor : mkl
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback+fox-fallback
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                  FC_INTEL

          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC

        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...  HAVE_FC_COMMAND_ARGUMENT

        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME             HAVE_FC_ETIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV            HAVE_FC_GETPID             HAVE_FC_IOMSG

     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES              HAVE_FC_NULL

         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                  HAVE_FFT

            HAVE_FFT_FFTW3              HAVE_FFT_MPI           HAVE_FFT_SERIAL

               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT               HAVE_LINALG

         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M  HAVE_LINALG_MKL_IMATCOPY

   HAVE_LINALG_MKL_OMATADD  HAVE_LINALG_MKL_OMATCOPY        HAVE_LINALG_SERIAL

                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO

 HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY             HAVE_OS_LINUX

                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI

         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO             HAVE_TRIO_FOX

          HAVE_TRIO_NETCDF              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> bamgf.in
- output file    -> bamgf.out
- root for input  files -> bamgfi
- root for output files -> bamgfo

-instrng :   102 lines of input have been read from file bamgf.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is ../psps/Ba.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ../psps/Mg.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is ../psps/F.pspnc
  read the values zionpsp=  2.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  2.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  7.0 , pspcod=   6 , lmax=   3

 inpspheads : deduce mpsang  =   4, n1xccc  =2501.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : spgroup=  36  Cm c 2_1   (=C2v^12)
 getkgrid : length of smallest supercell vector (bohr)=    3.118804E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : spgroup=  36  Cm c 2_1   (=C2v^12)
 getkgrid : length of smallest supercell vector (bohr)=    3.118804E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : spgroup=  36  Cm c 2_1   (=C2v^12)
 getkgrid : length of smallest supercell vector (bohr)=    3.118804E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=4
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)
 symspgr : spgroup=  36  Cm c 2_1   (=C2v^12)
 getkgrid : length of smallest supercell vector (bohr)=    3.118804E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    3.118804E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   64.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 getkgrid : length of smallest supercell vector (bohr)=    3.118804E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   64.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    15.00

--- !COMMENT
message: |
    One of the three variables ecuteps, npweps, or nsheps
     must be non-null. Returning.
src_file: m_gsphere.F90
src_line: 2588
...

 setshells : ecut_trial =    14.50
 getkgrid : length of smallest supercell vector (bohr)=    3.118804E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   64.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    15.00

--- !COMMENT
message: |
    One of the three variables ecuteps, npweps, or nsheps
     must be non-null. Returning.
src_file: m_gsphere.F90
src_line: 2588
...

 setshells : ecut_trial =    14.50
 getkgrid : length of smallest supercell vector (bohr)=    3.118804E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   64.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    15.00

--- !COMMENT
message: |
    One of the three variables ecuteps, npweps, or nsheps
     must be non-null. Returning.
src_file: m_gsphere.F90
src_line: 2588
...

 setshells : ecut_trial =    14.50
 getmpw sequential formula gave:    16963

 Computing all possible proc distrib for this input with nproc less than 7
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->    7|   1 ->    1|   1 ->    7|   1 ->    7|   1 ->    4|   2 ->    7|   1 ->    7|
           1|           7|           1|           1|           1|           1|           7|       6.80 |
           1|           3|           1|           2|           1|           1|           6|       5.38 |
           1|           3|           1|           1|           2|           1|           6|       5.38 |
           1|           6|           1|           1|           1|           1|           6|       5.36 |
           1|           2|           1|           3|           1|           1|           6|       5.08 |
npfft, npband, npspinor and npkpt:     1    1    1    7
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=3 and mkmem  = 21, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=3 and mkqmem = 21, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=3 and mk1mem = 21, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 1
src_file: getng.F90
src_line: 200
...

 For input ecut=  4.500000E+01 best grid ngfft=      90      90      72
       max ecut=  4.914381E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    90   90   72
  Augmented FFT divisions ...................    91   91   72
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=   16995
npfft, npband, npspinor and npkpt:     1    1    1    7
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=3 and mkmem  = 21, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=3 and mkqmem = 21, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=3 and mk1mem = 21, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.499963E+01 best grid ngfft=      50      50      40
       max ecut=  1.517189E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    50   50   40
  Augmented FFT divisions ...................    51   51   40
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    3295
npfft, npband, npspinor and npkpt:     1    1    1    7
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=3 and mkmem  = 21, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=3 and mkqmem = 21, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=3 and mk1mem = 21, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.499963E+01 best grid ngfft=      50      50      40
       max ecut=  1.517189E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    50   50   40
  Augmented FFT divisions ...................    51   51   40
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    3295
npfft, npband, npspinor and npkpt:     1    1    1    7
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=3 and mkmem  = 21, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=3 and mkqmem = 21, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=3 and mk1mem = 21, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.499963E+01 best grid ngfft=      50      50      40
       max ecut=  1.517189E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    50   50   40
  Augmented FFT divisions ...................    51   51   40
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    3295

 DATASET    1 : space group Cm c 2_1 (# 36); Bravais oC (1-face-center ortho.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        40  mffmem =         1
P  mgfft =        90   mkmem =         3 mpssoang=         4     mpw =     16995
  mqgrid =      3322   natom =        12    nfft =    583200    nkpt =        21
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =      2501  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                     202.048 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    217.833 Mbytes ; DEN or POT disk file :      4.451 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     71.1934 MBytes.
 memana : allocated an array of     71.193 Mbytes, for testing purposes.
 memana : allocated     202.048 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : space group Cm c 2_1 (# 36); Bravais oC (1-face-center ortho.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        40  mffmem =         1
P  mgfft =        50   mkmem =         3 mpssoang=         4     mpw =      3295
  mqgrid =      3001   natom =        12    nfft =    100000    nkpt =        21
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =      2501  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                      37.057 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     42.235 Mbytes ; DEN or POT disk file :      0.765 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     12.2090 MBytes.
 memana : allocated an array of     12.209 Mbytes, for testing purposes.
 memana : allocated      37.057 Mbytes, for testing purposes.
 The job will continue.

 DATASET    3 : space group Cm c 2_1 (# 36); Bravais oC (1-face-center ortho.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        40  mffmem =         1
P  mgfft =        50   mkmem =         3 mpssoang=         4     mpw =      3295
  mqgrid =      3001   natom =        12    nfft =    100000    nkpt =        21
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =      2501  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                      37.057 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     42.235 Mbytes ; DEN or POT disk file :      0.765 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     12.2090 MBytes.
 memana : allocated an array of     12.209 Mbytes, for testing purposes.
 memana : allocated      37.057 Mbytes, for testing purposes.
 The job will continue.

 DATASET    4 : space group Cm c 2_1 (# 36); Bravais oC (1-face-center ortho.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =        40  mffmem =         1
P  mgfft =        50   mkmem =         3 mpssoang=         4     mpw =      3295
  mqgrid =      3001   natom =        12    nfft =    100000    nkpt =        21
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         4  n1xccc =      2501  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                      37.057 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     42.235 Mbytes ; DEN or POT disk file :      0.765 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     12.2090 MBytes.
 memana : allocated an array of     12.209 Mbytes, for testing purposes.
 memana : allocated      37.057 Mbytes, for testing purposes.
 The job will continue.
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
 
 These variables are accessible in NetCDF format (bamgfo_OUT.nc)

            acell      7.7970098886E+00  7.7970098886E+00  7.7970098886E+00 Bohr
              amu      1.37327000E+02  2.43050000E+01  1.89984032E+01
             bdgw          30      34
           diemac      1.20000000E+01
             ecut1     4.50000000E+01 Hartree
             ecut2     1.49996283E+01 Hartree
             ecut3     1.49996283E+01 Hartree
             ecut4     1.49996283E+01 Hartree
         ecutsigx1     1.45000000E+01 Hartree
         ecutsigx2     1.44875446E+01 Hartree
         ecutsigx3     1.44875446E+01 Hartree
         ecutsigx4     1.44875446E+01 Hartree
          ecutwfn1     1.50000000E+01 Hartree
          ecutwfn2     1.49996283E+01 Hartree
          ecutwfn3     1.49996283E+01 Hartree
          ecutwfn4     1.49996283E+01 Hartree
           enunit           1
           getkss           1
        gwcalctyp1          0
        gwcalctyp2        115
        gwcalctyp3        215
        gwcalctyp4        315
           gwpara           2
         icutcoul1          6
         icutcoul2          5
         icutcoul3          6
         icutcoul4          6
           istwfk        1    0    1    0    0    0    1    0    0    0
                         0    0    0    0    1    0    1    0    0    0
                         1
              ixc           7
           jdtset        1    2    3    4
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                      -2.50000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
                       5.00000000E-01  2.50000000E-01  5.00000000E-01
                      -2.50000000E-01  2.50000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    4    0      0    0    4
          kptrlen      3.11880396E+01
          kssform           3
P           mkmem           3
            natom          12
            nband          40
         nbandkss          35
           ndtset           4
            ngfft1         90      90      72
            ngfft2         50      50      40
            ngfft3         50      50      40
            ngfft4         50      50      40
             nkpt          21
           nkptgw           1
-           npkpt1          7
-           npkpt2          1
-           npkpt3          1
-           npkpt4          1
          npwsigx1          0
          npwsigx2       3127
          npwsigx3       3127
          npwsigx4       3127
           npwwfn1          0
           npwwfn2       3295
           npwwfn3       3295
           npwwfn4       3295
          nshsigx1          0
          nshsigx2        899
          nshsigx3        899
          nshsigx4        899
            nstep         250
             nsym           4
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          4
        optdriver3          4
        optdriver4          4
             rcut1     0.00000000E+00 Bohr
             rcut2     9.09090900E+00 Bohr
             rcut3     0.00000000E+00 Bohr
             rcut4     0.00000000E+00 Bohr
            rprim      5.0000000000E-01 -1.7593310713E+00  0.0000000000E+00
                       5.0000000000E-01  1.7593310713E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.4108095007E+00
          spgroup          36
           symrel      1  0  0   0  1  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       0  1  0   1  0  0   0  0  1
         symsigma        1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.0000000  0.0000000  0.5000000
           tolvrs      1.00000000E-10
            typat      1  1  2  2  3  3  3  3  3  3  3  3
              wtk        0.01563    0.06250    0.03125    0.03125    0.06250    0.03125
                         0.01563    0.03125    0.12500    0.06250    0.06250    0.12500
                         0.06250    0.03125    0.01563    0.06250    0.03125    0.03125
                         0.06250    0.03125    0.01563
           xangst      2.0629999641E+00 -2.1536000825E+00  2.0153465849E+00
                       2.0629999641E+00  2.1536000825E+00  4.9258465343E+00
                       2.0629999641E+00 -6.0217759352E+00  1.8109130685E+00
                       2.0629999641E+00  6.0217759352E+00  4.7214130178E+00
                       2.0629999641E+00 -6.9051962198E+00  0.0000000000E+00
                       2.0629999641E+00  6.9051962198E+00  2.9104999494E+00
                       2.0629999641E+00 -4.8393332491E+00  3.3587169416E+00
                       2.0629999641E+00  4.8393332491E+00  4.4821699220E-01
                       2.0629999641E+00 -4.4108586832E+00  6.6010138851E-01
                       2.0629999641E+00  4.4108586832E+00  3.5706013379E+00
                       2.0629999641E+00  1.1405340602E+00  1.7625987693E+00
                       2.0629999641E+00 -1.1405340602E+00  4.6730987187E+00
            xcart      3.8985049443E+00 -4.0697143557E+00  3.8084531084E+00
                       3.8985049443E+00  4.0697143557E+00  9.3085009224E+00
                       3.8985049443E+00 -1.1379507351E+01  3.4221297499E+00
                       3.8985049443E+00  1.1379507351E+01  8.9221775640E+00
                       3.8985049443E+00 -1.3048929749E+01  0.0000000000E+00
                       3.8985049443E+00  1.3048929749E+01  5.5000478140E+00
                       3.8985049443E+00 -9.1450145066E+00  6.3470551774E+00
                       3.8985049443E+00  9.1450145066E+00  8.4700736336E-01
                       3.8985049443E+00 -8.3353149222E+00  1.2474108442E+00
                       3.8985049443E+00  8.3353149222E+00  6.7474586583E+00
                       3.8985049443E+00  2.1552970189E+00  3.3308289562E+00
                       3.8985049443E+00 -2.1552970189E+00  8.8308767702E+00
             xred      6.4834000000E-01  3.5166000000E-01  3.4622000000E-01
                       3.5166000000E-01  6.4834000000E-01  8.4622000000E-01
                       9.1478000000E-01  8.5220000000E-02  3.1110000000E-01
                       8.5220000000E-02  9.1478000000E-01  8.1110000000E-01
                       9.7563000000E-01  2.4370000000E-02  0.0000000000E+00
                       2.4370000000E-02  9.7563000000E-01  5.0000000000E-01
                       8.3333333333E-01  1.6666666667E-01  5.7700000000E-01
                       1.6666666667E-01  8.3333333333E-01  7.7000000000E-02
                       8.0382000000E-01  1.9618000000E-01  1.1340000000E-01
                       1.9618000000E-01  8.0382000000E-01  6.1340000000E-01
                       4.2144000000E-01  5.7856000000E-01  3.0280000000E-01
                       5.7856000000E-01  4.2144000000E-01  8.0280000000E-01
            znucl       56.00000   12.00000    9.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset=   2.
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset=   3.
 Checking if input is consistent with KSS generation

 chkinp: Checking input parameters for consistency, jdtset=   4.
 Checking if input is consistent with KSS generation
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
 
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................   2147483647
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................   1.000000000000000E-006

================================================================================
== DATASET  1 ==================================================================
-   nproc =    7

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 
 Unit cell volume ucvol=  1.1765224E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.48269814E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  90  90  72
         ecut(hartree)=     45.000   => boxcut(ratio)=   2.09006
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is ../psps/Ba.pspnc
- pspatm: opening atomic psp file    ../psps/Ba.pspnc
- barium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 0 local
- 56.00000   2.00000     11001                znucl, zion, pspdat
    6    7    3    0       553   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    8.36000000000000    1.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=  104.42952062
         --- l  ekb(1:nproj) -->
             1    0.208052
             2   -1.459896
             3   -3.702704
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../psps/Mg.pspnc
- pspatm: opening atomic psp file    ../psps/Mg.pspnc
- magnesium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
- 12.00000   2.00000     21003                znucl, zion, pspdat
    6    7    3    2       489   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.14800000000000    1.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   -1.42487076
         --- l  ekb(1:nproj) -->
             0    1.954451
             1    0.886950
             3   -0.837897
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is ../psps/F.pspnc
- pspatm: opening atomic psp file    ../psps/F.pspnc
- fluorine, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
-  9.00000   7.00000     21003                znucl, zion, pspdat
    6    7    3    2       477   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    3.96133470
         --- l  ekb(1:nproj) -->
             0    2.753113
             1   -3.755035
             3   -4.390442
 pspatm: atomic psp has been read  and splines computed

   1.52127985E+04                                ecore*ucvol(ha*bohr**3)
   1  1  2  2
   2  2  1  1
   3  3  4  4
   4  4  3  3
   5  5  6  6
   6  6  5  5
   7  7  8  8
   8  8  7  7
   9  9 10 10
  10 10  9  9
  11 11 12 12
  12 12 11 11
 wfconv:    40 bands initialized randomly with npw= 16927, for ikpt=     1
 wfconv:    40 bands initialized randomly with npw= 16990, for ikpt=     2
 wfconv:    40 bands initialized randomly with npw= 16974, for ikpt=     3
 
_setup2: Arith. and geom. avg. npw (full set) are   16964.234   16964.225
 initro : for itypat=  1, take decay length=      2.0000,
 initro : indeed, coreel=     54.0000, nval=  2 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      1.6000,
 initro : indeed, coreel=     10.0000, nval=  2 and densty=  0.0000E+00.
 initro : for itypat=  3, take decay length=      0.4000,
 initro : indeed, coreel=      2.0000, nval=  7 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  90  90  72
         ecut(hartree)=     45.000   => boxcut(ratio)=   2.09006

 ewald : nr and ng are    3 and   29

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    1.1007E+00  at reduced coord.    0.9889    0.0111    0.9722
,     Minimum=    2.5205E-04  at reduced coord.    0.6444    0.3444    0.3472
,  Integrated=    6.4000E+01
 ETOT  1  -189.53708177244    -1.895E+02 6.574E-02 6.088E+04
 scprqt: <Vxc>= -3.9307290E-01 hartree

Simple mixing update:
  residual square of the potential :   28245.2391285822

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    2.3574E+00  at reduced coord.    0.8556    0.1778    0.6111
,     Minimum=    4.6801E-07  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT  2  -190.96890479252    -1.432E+00 1.265E-02 6.128E+04
 scprqt: <Vxc>= -2.9960024E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.486      0.514

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    1.6958E+00  at reduced coord.    0.8556    0.1778    0.6111
,     Minimum=    1.2263E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT  3  -198.73330834497    -7.764E+00 2.385E-02 3.896E+03
 scprqt: <Vxc>= -3.3898328E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.478      0.207      0.315

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    1.6655E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    1.0399E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT  4  -198.88436569189    -1.511E-01 4.585E-03 1.949E+03
 scprqt: <Vxc>= -3.4242882E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.66     -0.949      0.123      0.163

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    1.6361E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    1.4572E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT  5  -198.95956740233    -7.520E-02 5.456E-03 5.704E+02
 scprqt: <Vxc>= -3.4526449E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.67     -0.279     -0.414      0.113E-01  0.130E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    1.6156E+00  at reduced coord.    0.9222    0.9889    0.9861
,     Minimum=    2.1401E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT  6  -198.99143574019    -3.187E-02 3.790E-03 1.713E+01
 scprqt: <Vxc>= -3.4850466E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.531       1.02     -0.555      0.643E-02 -0.383E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    1.5991E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1440E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT  7  -198.99304966681    -1.614E-03 7.360E-04 1.306E+00
 scprqt: <Vxc>= -3.4876294E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.31     -0.195     -0.306      0.164      0.190E-01

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    1.6018E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.0909E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT  8  -198.99310108233    -5.142E-05 8.826E-04 3.862E-01
 scprqt: <Vxc>= -3.4853314E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05     -0.505E-01  0.122E-01  0.109E-01 -0.239E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    1.6003E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1120E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT  9  -198.99311972775    -1.865E-05 1.169E-03 4.417E-02
 scprqt: <Vxc>= -3.4861740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.604      0.630     -0.286      0.401E-01  0.553E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    1.6007E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1136E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 10  -198.99312091247    -1.185E-06 6.593E-04 1.288E-02
 scprqt: <Vxc>= -3.4862433E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.29     -0.454E-01 -0.222     -0.283E-01  0.192E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    1.6007E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1102E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 11  -198.99312143286    -5.204E-07 5.933E-04 5.435E-04
 scprqt: <Vxc>= -3.4861055E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.724E-02 -0.106     -0.606E-01  0.375E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    1.6008E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1101E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 12  -198.99312144351    -1.065E-08 1.914E-04 1.092E-04
 scprqt: <Vxc>= -3.4861113E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.737      0.370     -0.864E-01 -0.246E-01 -0.156E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    1.6007E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1104E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 13  -198.99312144800    -4.487E-09 2.202E-04 1.305E-05
 scprqt: <Vxc>= -3.4861231E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.641      0.395     -0.289E-01 -0.588E-02  0.427E-03

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    1.6007E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1104E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 14  -198.99312144925    -1.254E-09 4.849E-05 1.060E-06
 scprqt: <Vxc>= -3.4861201E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.10      0.135E-02 -0.623E-01 -0.467E-01  0.685E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    1.6007E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1104E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 15  -198.99312144933    -7.154E-11 1.275E-04 1.288E-07
 scprqt: <Vxc>= -3.4861220E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.618      0.438     -0.736E-02 -0.296E-01 -0.216E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    1.6007E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1104E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 16  -198.99312144934    -1.026E-11 6.073E-05 1.027E-08
 scprqt: <Vxc>= -3.4861217E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.969      0.155     -0.123     -0.121E-01  0.308E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    1.6007E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1104E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 17  -198.99312144934    -3.041E-12 8.309E-05 1.218E-09
 scprqt: <Vxc>= -3.4861216E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.941      0.117     -0.406E-01 -0.165E-01 -0.110E-02

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    1.6007E+00  at reduced coord.    0.2222    0.8000    0.6250
,     Minimum=    2.1104E-05  at reduced coord.    0.6333    0.3556    0.3333
,  Integrated=    6.4000E+01
 ETOT 18  -198.99312144934     2.018E-12 7.534E-05 7.951E-11
 scprqt: <Vxc>= -3.4861217E-01 hartree

 At SCF step   18       vres2   =  7.95E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -9.05756376E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  8.90296983E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.19266957E-05  sigma(2 1)=  0.00000000E+00
 
   1  1  2  2
   2  2  1  1
   3  3  4  4
   4  4  3  3
   5  5  6  6
   6  6  5  5
   7  7  8  8
   8  8  7  7
   9  9 10 10
  10 10  9  9
  11 11 12 12
  12 12 11 11
 ioarr: writing density data
ioarr: file name is bamgfo_DS1_DEN
ioarr: data written to disk file bamgfo_DS1_DEN

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is: 19620

--- !COMMENT
message: |
    Number of bands calculated=   40, greater than nbandkss=   35
     will write nbandkss bands on the KSS file
src_file: outkss.F90
src_line: 560
...

 Number of bands written on file is:    35

 Total amount of disk space required by _KSS file =   295.74 Mb.
  Subdivided into : 
  Header             =     0.25 Mb.
  KB elements        =    75.44 Mb.
  Wavefunctions (PW) =   220.05 Mb.
  PAW projectors     =     0.00 Mb.


 Opening file for KS structure output: bamgfo_DS1_KSS
 number of Gamma centered plane waves  19620
 number of Gamma centered shells   5281
 number of bands     35
 maximum angular momentum components      4
 number of symmetry operations  4 (without inversion)

 k-point   1
 Eigenvalues in eV for ikpt=   1
   1      -25.72  -25.41  -25.03  -24.93  -24.74  -24.71  -24.58  -24.52   -8.91
           -8.40   -8.35   -8.19   -7.96   -7.87   -7.79   -7.46   -7.26   -7.25
           -7.23   -7.01   -6.73   -6.64   -6.61   -6.60   -6.57   -6.52   -6.41
           -6.21   -6.06   -6.01   -5.97   -5.95    0.73    2.28    2.86
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000

 k-point   2
 Eigenvalues in eV for ikpt=   2
   2      -25.64  -25.41  -24.96  -24.91  -24.71  -24.69  -24.64  -24.60   -9.24
           -8.51   -8.33   -8.18   -7.84   -7.64   -7.56   -7.48   -7.28   -7.20
           -7.10   -6.99   -6.92   -6.81   -6.69   -6.56   -6.48   -6.31   -6.28
           -6.22   -6.11   -6.09   -6.01   -6.00    1.59    2.57    2.79
 Writing out eigenvalues/vectors for ikpt=  2
 Occupation numbers for ikpt=  2
   2      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000

 k-point   3
 Eigenvalues in eV for ikpt=   3
   3      -25.57  -25.41  -24.91  -24.89  -24.70  -24.69  -24.67  -24.66   -9.50
           -8.42   -8.27   -8.14   -7.86   -7.84   -7.50   -7.45   -7.32   -7.10
           -7.01   -6.98   -6.84   -6.79   -6.77   -6.54   -6.31   -6.29   -6.28
           -6.23   -6.18   -6.08   -5.98   -5.94    2.31    2.45    3.09
 Writing out eigenvalues/vectors for ikpt=  3
 Occupation numbers for ikpt=  3
   3      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=   4
   4      -25.57  -25.41  -24.91  -24.89  -24.70  -24.69  -24.67  -24.66   -9.50
           -8.42   -8.27   -8.15   -7.85   -7.84   -7.49   -7.44   -7.36   -7.09
           -7.02   -6.97   -6.84   -6.84   -6.70   -6.49   -6.35   -6.30   -6.29
           -6.26   -6.15   -6.01   -6.01   -5.94    2.29    2.57    2.80
 Writing out eigenvalues/vectors for ikpt=  4
 Occupation numbers for ikpt=  4
   4      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=   5
   5      -25.62  -25.41  -24.98  -24.90  -24.72  -24.69  -24.65  -24.59   -9.25
           -8.51   -8.43   -8.14   -7.77   -7.63   -7.61   -7.45   -7.24   -7.17
           -7.08   -6.96   -6.92   -6.78   -6.67   -6.57   -6.52   -6.34   -6.25
           -6.23   -6.18   -6.12   -6.02   -5.98    1.93    2.51    2.88
 Writing out eigenvalues/vectors for ikpt=  5
 Occupation numbers for ikpt=  5
   5      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=   6
   6      -25.70  -25.41  -25.06  -24.91  -24.74  -24.71  -24.59  -24.51   -8.91
           -8.48   -8.34   -8.20   -8.03   -7.84   -7.76   -7.38   -7.31   -7.11
           -7.07   -7.01   -6.89   -6.71   -6.59   -6.55   -6.48   -6.44   -6.41
           -6.24   -6.18   -6.04   -6.04   -5.97    1.07    2.34    2.70
 Writing out eigenvalues/vectors for ikpt=  6
 Occupation numbers for ikpt=  6
   6      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=   7
   7      -25.68  -25.42  -25.08  -24.89  -24.74  -24.72  -24.59  -24.51   -8.90
           -8.56   -8.34   -8.16   -8.13   -7.83   -7.73   -7.43   -7.16   -7.03
           -7.01   -6.94   -6.87   -6.64   -6.60   -6.60   -6.55   -6.47   -6.34
           -6.33   -6.31   -6.08   -6.03   -5.99    1.69    2.19    2.55
 Writing out eigenvalues/vectors for ikpt=  7
 Occupation numbers for ikpt=  7
   7      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=   8
   8      -25.67  -25.45  -24.98  -24.90  -24.75  -24.69  -24.62  -24.56   -8.81
           -8.47   -8.34   -8.11   -8.01   -7.79   -7.75   -7.40   -7.31   -7.19
           -7.15   -7.05   -6.73   -6.73   -6.70   -6.69   -6.52   -6.38   -6.37
           -6.35   -6.26   -6.06   -6.03   -5.98    1.21    2.34    2.92
 Writing out eigenvalues/vectors for ikpt=  8
 Occupation numbers for ikpt=  8
   8      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=   9
   9      -25.61  -25.44  -24.93  -24.90  -24.73  -24.72  -24.62  -24.60   -9.14
           -8.68   -8.15   -8.10   -7.76   -7.64   -7.57   -7.53   -7.44   -7.18
           -7.11   -7.01   -6.92   -6.80   -6.74   -6.58   -6.48   -6.38   -6.28
           -6.22   -6.16   -6.10   -6.02   -5.97    1.86    2.56    2.91
 Writing out eigenvalues/vectors for ikpt=  9
 Occupation numbers for ikpt=  9
   9      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  10
  10      -25.55  -25.44  -24.90  -24.88  -24.79  -24.78  -24.57  -24.57   -9.38
           -8.70   -8.10   -8.01   -7.90   -7.86   -7.50   -7.36   -7.33   -7.22
           -7.06   -6.99   -6.87   -6.80   -6.65   -6.64   -6.43   -6.40   -6.24
           -6.23   -6.08   -6.06   -5.97   -5.91    2.42    2.53    2.92
 Writing out eigenvalues/vectors for ikpt= 10
 Occupation numbers for ikpt= 10
  10      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  11
  11      -25.55  -25.44  -24.90  -24.88  -24.79  -24.79  -24.57  -24.57   -9.39
           -8.70   -8.08   -8.06   -7.88   -7.84   -7.50   -7.43   -7.26   -7.23
           -7.02   -6.99   -6.90   -6.88   -6.58   -6.57   -6.52   -6.38   -6.26
           -6.20   -6.08   -6.06   -5.98   -5.91    2.42    2.66    2.79
 Writing out eigenvalues/vectors for ikpt= 11
 Occupation numbers for ikpt= 11
  11      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  12
  12      -25.59  -25.45  -24.95  -24.89  -24.74  -24.73  -24.62  -24.59   -9.15
           -8.69   -8.23   -8.05   -7.71   -7.68   -7.61   -7.49   -7.38   -7.25
           -7.12   -7.04   -6.83   -6.75   -6.60   -6.56   -6.50   -6.38   -6.34
           -6.25   -6.19   -6.13   -6.04   -6.00    2.12    2.53    3.01
 Writing out eigenvalues/vectors for ikpt= 12
 Occupation numbers for ikpt= 12
  12      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  13
  13      -25.66  -25.46  -25.00  -24.89  -24.74  -24.70  -24.63  -24.55   -8.81
           -8.53   -8.33   -8.10   -8.01   -7.88   -7.69   -7.38   -7.20   -7.18
           -7.06   -7.02   -6.93   -6.78   -6.65   -6.52   -6.51   -6.46   -6.35
           -6.31   -6.24   -6.10   -6.07   -6.06    1.49    2.40    2.76
 Writing out eigenvalues/vectors for ikpt= 13
 Occupation numbers for ikpt= 13
  13      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  14
  14      -25.64  -25.46  -25.02  -24.88  -24.74  -24.70  -24.64  -24.55   -8.82
           -8.58   -8.32   -8.08   -8.00   -7.96   -7.66   -7.35   -7.14   -7.13
           -7.09   -6.96   -6.87   -6.78   -6.72   -6.53   -6.52   -6.45   -6.35
           -6.26   -6.24   -6.16   -6.15   -6.09    1.93    2.34    2.73
 Writing out eigenvalues/vectors for ikpt= 14
 Occupation numbers for ikpt= 14
  14      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  15
  15      -25.56  -25.56  -24.89  -24.89  -24.73  -24.73  -24.63  -24.63   -8.62
           -8.62   -8.25   -8.25   -7.83   -7.83   -7.52   -7.52   -7.18   -7.18
           -7.07   -7.07   -6.85   -6.85   -6.69   -6.69   -6.60   -6.60   -6.38
           -6.38   -6.18   -6.18   -6.01   -6.01    2.09    2.09    2.95
 Writing out eigenvalues/vectors for ikpt= 15
 Occupation numbers for ikpt= 15
  15      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  16
  16      -25.53  -25.53  -24.89  -24.89  -24.75  -24.75  -24.60  -24.60   -8.92
           -8.92   -7.92   -7.92   -7.81   -7.81   -7.53   -7.53   -7.42   -7.42
           -7.06   -7.06   -6.83   -6.83   -6.68   -6.68   -6.53   -6.53   -6.25
           -6.25   -6.13   -6.13   -5.98   -5.98    2.32    2.32    3.01
 Writing out eigenvalues/vectors for ikpt= 16
 Occupation numbers for ikpt= 16
  16      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  17
  17      -25.50  -25.50  -24.88  -24.88  -24.83  -24.83  -24.52  -24.52   -9.08
           -9.08   -7.99   -7.99   -7.78   -7.78   -7.59   -7.59   -7.20   -7.20
           -7.05   -7.05   -6.94   -6.94   -6.58   -6.58   -6.49   -6.49   -6.24
           -6.24   -6.07   -6.07   -5.91   -5.91    2.60    2.60    2.84
 Writing out eigenvalues/vectors for ikpt= 17
 Occupation numbers for ikpt= 17
  17      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  18
  18      -25.50  -25.50  -24.88  -24.88  -24.83  -24.83  -24.52  -24.52   -9.08
           -9.08   -7.99   -7.99   -7.77   -7.77   -7.58   -7.58   -7.23   -7.23
           -7.05   -7.05   -6.89   -6.89   -6.67   -6.67   -6.42   -6.42   -6.24
           -6.24   -6.08   -6.08   -5.91   -5.91    2.66    2.66    2.79
 Writing out eigenvalues/vectors for ikpt= 18
 Occupation numbers for ikpt= 18
  18      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  19
  19      -25.52  -25.52  -24.89  -24.89  -24.76  -24.76  -24.60  -24.60   -8.92
           -8.92   -7.95   -7.95   -7.76   -7.76   -7.60   -7.60   -7.44   -7.44
           -6.99   -6.99   -6.86   -6.86   -6.57   -6.57   -6.47   -6.47   -6.32
           -6.32   -6.18   -6.18   -6.01   -6.01    2.38    2.38    3.08
 Writing out eigenvalues/vectors for ikpt= 19
 Occupation numbers for ikpt= 19
  19      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  20
  20      -25.56  -25.56  -24.90  -24.90  -24.73  -24.73  -24.63  -24.63   -8.64
           -8.64   -8.24   -8.24   -7.84   -7.84   -7.50   -7.50   -7.15   -7.15
           -7.11   -7.11   -6.87   -6.87   -6.67   -6.67   -6.56   -6.56   -6.35
           -6.35   -6.18   -6.18   -6.09   -6.09    2.15    2.15    3.03
 Writing out eigenvalues/vectors for ikpt= 20
 Occupation numbers for ikpt= 20
  20      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Eigenvalues in eV for ikpt=  21
  21      -25.55  -25.55  -24.90  -24.90  -24.73  -24.73  -24.63  -24.63   -8.66
           -8.66   -8.23   -8.23   -7.85   -7.85   -7.48   -7.48   -7.14   -7.14
           -7.11   -7.11   -6.88   -6.88   -6.66   -6.66   -6.50   -6.50   -6.32
           -6.32   -6.19   -6.19   -6.18   -6.18    2.20    2.20    3.19
 Writing out eigenvalues/vectors for ikpt= 21
 Occupation numbers for ikpt= 21
  21      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000  0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)a(n',k,G) =  0.000000
  max sum_G a(n,k,G)a(n',k,G) =  0.000000

================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file bamgfo_DS1_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     1.22, wall:     1.23

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   6.6831 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   6.6388 [eV], Top of valence bands at :   0.2500  0.2500  0.2500
                                        Bottom of conduction at :   0.0000  0.0000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -9.05756376E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  8.90296983E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.19266957E-05  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.1955E+00 GPa]
- sigma(1 1)= -2.66482681E-01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.61934372E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.23352577E+00  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    7

 mkfilename : getkss/=0, take file _KSS from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Wang 92 LSD fit to Ceperley-Alder data - ixc=7
 Citation for XC functional:
  J.P.Perdew and Y.Wang, PRB 45, 13244 (1992)
 
 SIGMA: Calculation of the GW corrections

 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using double precision arithmetic ; gwpc =  8

 Unit cell volume ucvol=  1.1765224E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.48269814E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  50  50  40
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.01145

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    50   50   40
  Augmented FFT divisions ...................    51   51   40
  FFT algorithm .............................   312
  FFT cache size ............................    16
- pspini: atom type   1  psp file is ../psps/Ba.pspnc
- pspatm: opening atomic psp file    ../psps/Ba.pspnc
- barium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 0 local
- 56.00000   2.00000     11001                znucl, zion, pspdat
    6    7    3    0       553   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    8.36000000000000    1.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=  104.42952062
         --- l  ekb(1:nproj) -->
             1    0.208052
             2   -1.459896
             3   -3.702704
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ../psps/Mg.pspnc
- pspatm: opening atomic psp file    ../psps/Mg.pspnc
- magnesium, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
- 12.00000   2.00000     21003                znucl, zion, pspdat
    6    7    3    2       489   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.14800000000000    1.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   -1.42487076
         --- l  ekb(1:nproj) -->
             0    1.954451
             1    0.886950
             3   -0.837897
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is ../psps/F.pspnc
- pspatm: opening atomic psp file    ../psps/F.pspnc
- fluorine, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
-  9.00000   7.00000     21003                znucl, zion, pspdat
    6    7    3    2       477   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    3.96133470
         --- l  ekb(1:nproj) -->
             0    2.753113
             1   -3.755035
             3   -4.390442
 pspatm: atomic psp has been read  and splines computed


 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    4
  Number of pseudopotentials ..    3
  Number of types of atoms   ..    3
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   4
  Max number of (l,n)   components ..   4
  Max number of (l,m,n) components ..   4

 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius ..  8.3600
  - Atom type    2 has pseudo-core radius ..  5.1480
  - Atom type    3 has pseudo-core radius ..  0.0000

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   7
 XC functional for type   2 is   7
 XC functional for type   3 is   7

--- !WARNING
message: |
    Using WFK filebamgfo_DS1_WFK
src_file: setup_sigma.F90
src_line: 317
...


 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is: 19620
   1  1  2  2
   2  2  1  1
   3  3  4  4
   4  4  3  3
   5  5  6  6
   6  6  5  5
   7  7  8  8
   8  8  7  7
   9  9 10 10
  10 10  9  9
  11 11 12 12
  12 12 11 11
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  3.8985049-13.7175218  0.0000000  G(1)=  0.1282543 -0.0364497  0.0000000
 R(2)=  3.8985049 13.7175218  0.0000000  G(2)=  0.1282543  0.0364497  0.0000000
 R(3)=  0.0000000  0.0000000 11.0000956  G(3)=  0.0000000  0.0000000  0.0909083
 Unit cell volume ucvol=  1.1765224E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.48269814E+02 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1     0 -1  0   0.000  1    -1  0  0   0.000  1     0  1  0   0.000  1
  0  1  0   0.000  1    -1  0  0   0.000  1     0 -1  0   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     0  0  1   0.000  1     0  0  1   0.500  1     0  0  1   0.500  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    21
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.06250
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.03125
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.03125
     5)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.06250
     6)    -2.50000000E-01  2.50000000E-01  0.00000000E+00       0.03125
     7)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.01563
     8)     0.00000000E+00  0.00000000E+00  2.50000000E-01       0.03125
     9)     2.50000000E-01  0.00000000E+00  2.50000000E-01       0.12500
    10)     5.00000000E-01  0.00000000E+00  2.50000000E-01       0.06250
    11)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.06250
    12)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.12500
    13)    -2.50000000E-01  2.50000000E-01  2.50000000E-01       0.06250
    14)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.03125
    15)     0.00000000E+00  0.00000000E+00  5.00000000E-01       0.01563
    16)     2.50000000E-01  0.00000000E+00  5.00000000E-01       0.06250
    17)     5.00000000E-01  0.00000000E+00  5.00000000E-01       0.03125
    18)     2.50000000E-01  2.50000000E-01  5.00000000E-01       0.03125
    19)     5.00000000E-01  2.50000000E-01  5.00000000E-01       0.06250
    20)    -2.50000000E-01  2.50000000E-01  5.00000000E-01       0.03125
    21)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with  4 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 top of valence       [eV]  -5.91
 bottom of conduction [eV]   0.73
 Fermi energy         [eV]  -2.59



  >>>> For spin  1
   Minimum optical gap =   6.6831 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   6.6388 [eV], Top of valence bands at :   0.2500  0.2500  0.2500
                                        Bottom of conduction at :   0.0000  0.0000  0.0000


  >>>> For spin  1
   Minimum optical gap =   6.6831 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   6.6388 [eV], Top of valence bands at :   0.2500  0.2500  0.2500
                                        Bottom of conduction at :   0.0000  0.0000  0.0000
 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :    21
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.06250
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.03125
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.03125
     5)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.06250
     6)    -2.50000000E-01  2.50000000E-01  0.00000000E+00       0.03125
     7)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.01563
     8)     0.00000000E+00  0.00000000E+00  2.50000000E-01       0.03125
     9)     2.50000000E-01  0.00000000E+00  2.50000000E-01       0.12500
    10)     5.00000000E-01  0.00000000E+00  2.50000000E-01       0.06250
    11)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.06250
    12)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.12500
    13)    -2.50000000E-01  2.50000000E-01  2.50000000E-01       0.06250
    14)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.03125
    15)     0.00000000E+00  0.00000000E+00  5.00000000E-01       0.01563
    16)     2.50000000E-01  0.00000000E+00  5.00000000E-01       0.06250
    17)     5.00000000E-01  0.00000000E+00  5.00000000E-01       0.03125
    18)     2.50000000E-01  2.50000000E-01  5.00000000E-01       0.03125
    19)     5.00000000E-01  2.50000000E-01  5.00000000E-01       0.06250
    20)    -2.50000000E-01  2.50000000E-01  5.00000000E-01       0.03125
    21)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.01563

 Together with  4 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.


 optimal value for ng0sh =  1 1 1

 === Complement Error function cutoff === 

  Cutoff radius .........     9.0909 [Bohr] 

 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

 setmesh: npwwfn        =     3295; Max (m1,m2,m3)   =     12    12     9
          npweps/npwsigx=     3127; Max (mm1,mm2,mm3)=     13    13    10
          mG0 added     =   1  1  1
 calculated ecutwfn          =  15.000 [Ha]
 calculated ecutsigx/ecuteps =  14.488 [Ha]
 using method =  2 with ecuteff =  58.970 [Ha]

--- !COMMENT
message: |
    Note that npwwfn is small with respect to npweps or with respect to npwsigx. 
     Such a small npwwfn is a waste: 
     You could raise npwwfn without loss in cpu time.
src_file: m_fft_mesh.F90
src_line: 520
...


 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  2
 setmesh: FFT mesh size selected  =  27x 27x 40
          total number of points  =    29160


 setmesh: npwwfn        =     3295; Max (m1,m2,m3)   =     12    12     9
          npweps/npwsigx=        1; Max (mm1,mm2,mm3)=      1     1     1
          mG0 added     =   1  1  1
 calculated ecutwfn          =  15.000 [Ha]
 calculated ecutsigx/ecuteps =   0.000 [Ha]
 using method =  2 with ecuteff =  15.000 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  2
 setmesh: FFT mesh size selected  =  15x 15x 20
          total number of points  =     4500


 ==== FFT mesh for oscillator strengths used for Sigma_c ====
  FFT mesh divisions ........................    15   15   20
  Augmented FFT divisions ...................    15   15   20
  FFT algorithm .............................   312
  FFT cache size ............................    16

 ==== FFT mesh for oscillator strengths used for Sigma_x ====
  FFT mesh divisions ........................    27   27   40
  Augmented FFT divisions ...................    27   27   40
  FFT algorithm .............................   312
  FFT cache size ............................    16

--- !WARNING
message: |
    Using k-centered G-spheres.
src_file: m_wfs.F90
src_line: 1033
...

 Memory needed for Fourier components ug =          5.5 [Mb]
 Memory needed for real space ur =          7.6 [Mb]
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
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................   2147483647
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................   1.000000000000000E-006
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.6.2
  Build target  : x86_64_linux_intel13.1
  Build date    : 20140324
 
 === Compiler Suite === 
  C compiler       : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.4
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : intel13.1
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : amd_opteron
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  openMP support : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : fftw3
  LINALG flavor : mkl
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf-fallback+etsf_io-fallback+fox-fallback
 
 === Experimental features === 
  Bindings            : no
  Exports             : no
  GW double-precision : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

--- !BUG
message: |
    iloop,igb,mgb=       2      45      44
     about to overwrite gbound.
src_file: sphereboundary.F90
src_line: 251
...


 leave_new : decision taken to exit ...
calling XMPI_ABORT...
 MPI_ERROR_STRING: MPI_ERR_UNKNOWN: unknown error
