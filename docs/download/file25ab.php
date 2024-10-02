  ABINIT 
  
  Give name for formatted input file: 
sig.in
  Give name for formatted output file:
sig.out
  Give root name for generic input files:
sigi
  Give root name for generic output files:
sigo
  Give root name for generic temporary files:
sig

--- !WARNING
message: |
    Finds that output file sig.out
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:sig.outA


--- !WARNING
message: |
    Finds that output file sig.outA
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:sig.outB


--- !WARNING
message: |
    Finds that output file sig.outB
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:sig.outC


--- !WARNING
message: |
    Finds that output file sig.outC
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:sig.outD


--- !WARNING
message: |
    Finds that output file sig.outD
     already exists.
src_file: isfile.F90
src_line: 114
...

 new name assigned:sig.outE


.Version 7.6.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel13.1 computer) 

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

.Starting date : Sun 20 Apr 2014.
- ( at 00h53 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.6.3
  Build target  : x86_64_linux_intel13.1
  Build date    : 20140416
 
 === Compiler Suite === 
  C compiler       : intel13.1
  CFLAGS           :  -g -O2 -vec-report0
  C++ compiler     : intel13.1
  CXXFLAGS         :  -g -O2 -vec-report0
  Fortran compiler : intel13.1
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp  -openmp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  openMP support : yes
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
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                 CXX_INTEL                  FC_INTEL

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

 HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY         HAVE_OMP_COLLAPSE

               HAVE_OPENMP             HAVE_OS_LINUX                HAVE_TIMER

         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL

         HAVE_TRIO_ETSF_IO             HAVE_TRIO_FOX          HAVE_TRIO_NETCDF

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> sig.in
- output file    -> sig.outE
- root for input  files -> sigi
- root for output files -> sigo

-instrng :   154 lines of input have been read from file sig.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is Sc-s14-p14-d18-lda.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 09-F.LDA.fhi
  read the values zionpsp= 11.0 , pspcod=   6 , lmax=   2
  read the values zionpsp=  7.0 , pspcod=   6 , lmax=   3

 inpspheads : deduce mpsang  =   4, n1xccc  =   0.

 invars1m : enter jdtset=0
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cP (primitive cubic)

 symlatt : the Bravais lattice is cP (primitive cubic)
 symspgr : spgroup= 221  Pm -3 m   (=Oh^1)
 getkgrid : length of smallest supercell vector (bohr)=    6.062241E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    6.062241E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   32.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 setshells : ecut_trial =    26.00

--- !WARNING
message: |
    The value ecutwfn=  0.260000E+02 given in the input file leads to
     the same values for nshwfn and npwwfn as ecutwfn=  0.257813E+02
     This value will be adopted for the calculation.

src_file: m_gsphere.F90
src_line: 2710
...


--- !COMMENT
message: |
    One of the three variables ecuteps, npweps, or nsheps
     must be non-null. Returning.
src_file: m_gsphere.F90
src_line: 2591
...

 setshells : ecut_trial =    34.00

--- !WARNING
message: |
    The value ecutsigx=  0.340000E+02 given in the input file leads to
     the same values for nshsigx and npwsigx as ecutsigx=  0.336875E+02
     This value will be adopted for the calculation.

src_file: m_gsphere.F90
src_line: 2710
...

npfft, npband, npspinor and npkpt:     1    1    1   64

--- !WARNING
message: |
    nproc_kpt=64 >= nkpt=35* nsppol=1
    The number of processors is larger than nkpt. This is a waste.
src_file: distrb2.F90
src_line: 106
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 35, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (35) will not distribute correctly
    with the current number of processors (64).
    You will leave some empty.
    ACTION: you can reduce number of processors to 35without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 35, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (35) will not distribute correctly
    with the current number of processors (64).
    You will leave some empty.
    ACTION: you can reduce number of processors to 35without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 35, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
message: |
    Your number of k-points (35) will not distribute correctly
    with the current number of processors (64).
    You will leave some empty.
    ACTION: you can reduce number of processors to 35without losing speed.
src_file: mpi_setup.F90
src_line: 601
...

 For input ecut=  2.578128E+01 best grid ngfft=      36      36      36
       max ecut=  2.784379E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    36   36   36
  Augmented FFT divisions ...................    37   37   36
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    2800

 Symmetries : space group Pm -3 m (#221); Bravais cP (primitive cubic)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         4   lnmax =         4   mband =       272  mffmem =         1
P  mgfft =        36   mkmem =         1 mpssoang=         4     mpw =      2800
  mqgrid =      3001   natom =         4    nfft =     46656    nkpt =        35
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      29.720 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    406.740 Mbytes ; DEN or POT disk file :      0.358 Mbytes.
================================================================================

 Biggest array : cg(disk), with     11.6231 MBytes.
 memana : allocated an array of     11.623 Mbytes, for testing purposes.
 memana : allocated      29.720 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    1
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (sigo_OUT.nc)

            acell      7.5778017929E+00  7.5778017929E+00  7.5778017929E+00 Bohr
              amu      4.49559100E+01  1.89984032E+01
             bdgw           8      24       8      24       8      24       8      24
                            8      24       8      24       8      24       8      24
                            8      24       8      24       8      24       8      24
                            8      24       8      24       8      24       8      24
                            8      24       8      24       8      24       8      24
                            8      24       8      24       8      24       8      24
                            8      24       8      24       8      24       8      24
                            8      24       8      24       8      24       8      24
                            8      24       8      24       8      24
             ecut      2.57812827E+01 Hartree
         ecutsigx      3.36875427E+01 Hartree
          ecutwfn      2.57812827E+01 Hartree
           gwcomp           1
           gwpara           2
          inclvkb           2
           irdkss           1
           irdscr           1
           istwfk        1    0    0    0    1    0    0    0    0    0
                         0    0    0    0    1    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    1
              ixc           7
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       5.00000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       5.00000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  2.50000000E-01  1.25000000E-01
                       3.75000000E-01  2.50000000E-01  1.25000000E-01
                       5.00000000E-01  2.50000000E-01  1.25000000E-01
                       3.75000000E-01  3.75000000E-01  1.25000000E-01
                       5.00000000E-01  3.75000000E-01  1.25000000E-01
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       3.75000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       3.75000000E-01  3.75000000E-01  2.50000000E-01
                       5.00000000E-01  3.75000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       3.75000000E-01  3.75000000E-01  3.75000000E-01
                       5.00000000E-01  3.75000000E-01  3.75000000E-01
                       5.00000000E-01  5.00000000E-01  3.75000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
            kptgw      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.75000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  1.25000000E-01  0.00000000E+00
                       3.75000000E-01  1.25000000E-01  0.00000000E+00
                       5.00000000E-01  1.25000000E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       3.75000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       1.25000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  1.25000000E-01  1.25000000E-01
                       3.75000000E-01  1.25000000E-01  1.25000000E-01
                       5.00000000E-01  1.25000000E-01  1.25000000E-01
                       2.50000000E-01  2.50000000E-01  1.25000000E-01
                       3.75000000E-01  2.50000000E-01  1.25000000E-01
                       5.00000000E-01  2.50000000E-01  1.25000000E-01
                       3.75000000E-01  3.75000000E-01  1.25000000E-01
                       5.00000000E-01  3.75000000E-01  1.25000000E-01
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       3.75000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  2.50000000E-01  2.50000000E-01
                       3.75000000E-01  3.75000000E-01  2.50000000E-01
                       5.00000000E-01  3.75000000E-01  2.50000000E-01
                       5.00000000E-01  5.00000000E-01  2.50000000E-01
                       3.75000000E-01  3.75000000E-01  3.75000000E-01
                       5.00000000E-01  3.75000000E-01  3.75000000E-01
                       5.00000000E-01  5.00000000E-01  3.75000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        8    0    0      0    8    0      0    0    8
          kptrlen      6.06224143E+01
P           mkmem           1
            natom           4
            nband         272
            ngfft          36      36      36
             nkpt          35
           nkptgw          35
          npwsigx        4067
           npwwfn        2777
          nshsigx         138
             nsym          48
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
        optdriver           4
           ppmfrq      9.61094082E-01 Hartree
             rcut     -1.00000000E+00 Bohr
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
         symsigma        1
            typat      1  2  2  2
              wtk        0.00195    0.01172    0.01172    0.01172    0.00586    0.02344
                         0.04688    0.04688    0.02344    0.02344    0.04688    0.02344
                         0.02344    0.02344    0.00586    0.01563    0.04688    0.04688
                         0.02344    0.04688    0.09375    0.04688    0.04688    0.04688
                         0.01172    0.01563    0.04688    0.02344    0.04688    0.04688
                         0.01172    0.01563    0.02344    0.01172    0.00195
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.0050000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  2.0050000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  2.0050000000E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.7889008964E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  3.7889008964E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.7889008964E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
            znucl       21.00000    9.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency.
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

  ==== OpenMP parallelism is ON ====
- Max_threads:       1
- Num_threads:       1
- Num_procs:         1
- Dynamic:           F
- Nested:            F
 
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
-   nproc =   64


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

 Unit cell volume ucvol=  4.3514072E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  36  36  36
         ecut(hartree)=     25.781   => boxcut(ratio)=   2.07846

 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    36   36   36
  Augmented FFT divisions ...................    37   37   36
  FFT algorithm .............................   312
  FFT cache size ............................    16
- pspini: atom type   1  psp file is Sc-s14-p14-d18-lda.fhi
- pspatm: opening atomic psp file    Sc-s14-p14-d18-lda.fhi
- Scandium, fhi98PP : Troullier-Martin, LDA CA PerdewWang, l=2 local (rc=1.4 s and p,1.8 d)
- 21.00000  11.00000     80210                znucl, zion, pspdat
    6    8    2    2       513   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

--- !WARNING
message: |
    Pseudopotential file pspxc=       8,
      not equal to input ixc=       7.
      These parameters must agree to get the same xc 
      in ABINIT code as in psp construction.
      Action : check psp design or input file.
      Assume experienced user. Execution will continue.

src_file: pspatm_abinit.F90
src_line: 412
...

  No XC core correction.
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    4.92654682
         --- l  ekb(1:nproj) -->
             0    7.281182
             1    3.800245
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 09-F.LDA.fhi
- pspatm: opening atomic psp file    09-F.LDA.fhi
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

   5.37937630E+02                                ecore*ucvol(ha*bohr**3)

 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Max number of Kleinman-Bylander energies    4
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   4
  Max number of (l,n)   components ..   4
  Max number of (l,m,n) components ..   4

 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   3001
  Number of q-points for vlspl ...................   3001
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   8
 XC functional for type   2 is   7

--- !WARNING
message: |
    Using WFK filesigi_WFK
src_file: setup_sigma.F90
src_line: 317
...


 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:  7563
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   2  2  2  2  2  2  2  2  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3
   2  2  2  2  2  2  2  2  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4
   3  3  3  3  3  3  3  3  2  2  2  2  2  2  2  2  4  4  4  4  4  4  4  4
   4  4  4  4  4  4  4  4  2  2  2  2  2  2  2  2  3  3  3  3  3  3  3  3
   4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  2  2  2  2  2  2  2  2
   3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  3  2  2  2  2  2  2  2  2
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  7.5778018  0.0000000  0.0000000  G(1)=  0.1319644  0.0000000  0.0000000
 R(2)=  0.0000000  7.5778018  0.0000000  G(2)=  0.0000000  0.1319644  0.0000000
 R(3)=  0.0000000  0.0000000  7.5778018  G(3)=  0.0000000  0.0000000  0.1319644
 Unit cell volume ucvol=  4.3514072E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 Time-reversal symmetry is present

 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1    -1  0  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1
  0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1


 -1  0  0   0.000  1     1  0  0   0.000  1     1  0  0   0.000  1    -1  0  0   0.000  1
  0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1


  0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1
  1  0  0   0.000  1    -1  0  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1


  0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1
 -1  0  0   0.000  1     1  0  0   0.000  1     1  0  0   0.000  1    -1  0  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1


  0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1
  1  0  0   0.000  1    -1  0  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1


  0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1
 -1  0  0   0.000  1     1  0  0   0.000  1     1  0  0   0.000  1    -1  0  0   0.000  1


  1  0  0   0.000  1    -1  0  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1
  0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1


 -1  0  0   0.000  1     1  0  0   0.000  1     1  0  0   0.000  1    -1  0  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1
  0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1


  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1
  1  0  0   0.000  1    -1  0  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1
  0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1


  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1
 -1  0  0   0.000  1     1  0  0   0.000  1     1  0  0   0.000  1    -1  0  0   0.000  1
  0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1


  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1
  0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1
  1  0  0   0.000  1    -1  0  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1


  0  0  1   0.000  1     0  0 -1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1
  0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1
 -1  0  0   0.000  1     1  0  0   0.000  1     1  0  0   0.000  1    -1  0  0   0.000  1


 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    35
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.00195
     2)     1.25000000E-01  0.00000000E+00  0.00000000E+00       0.01172
     3)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.01172
     4)     3.75000000E-01  0.00000000E+00  0.00000000E+00       0.01172
     5)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.00586
     6)     1.25000000E-01  1.25000000E-01  0.00000000E+00       0.02344
     7)     2.50000000E-01  1.25000000E-01  0.00000000E+00       0.04688
     8)     3.75000000E-01  1.25000000E-01  0.00000000E+00       0.04688
     9)     5.00000000E-01  1.25000000E-01  0.00000000E+00       0.02344
    10)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.02344
    11)     3.75000000E-01  2.50000000E-01  0.00000000E+00       0.04688
    12)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.02344
    13)     3.75000000E-01  3.75000000E-01  0.00000000E+00       0.02344
    14)     5.00000000E-01  3.75000000E-01  0.00000000E+00       0.02344
    15)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.00586
    16)     1.25000000E-01  1.25000000E-01  1.25000000E-01       0.01563
    17)     2.50000000E-01  1.25000000E-01  1.25000000E-01       0.04688
    18)     3.75000000E-01  1.25000000E-01  1.25000000E-01       0.04688
    19)     5.00000000E-01  1.25000000E-01  1.25000000E-01       0.02344
    20)     2.50000000E-01  2.50000000E-01  1.25000000E-01       0.04688
    21)     3.75000000E-01  2.50000000E-01  1.25000000E-01       0.09375
    22)     5.00000000E-01  2.50000000E-01  1.25000000E-01       0.04688
    23)     3.75000000E-01  3.75000000E-01  1.25000000E-01       0.04688
    24)     5.00000000E-01  3.75000000E-01  1.25000000E-01       0.04688
    25)     5.00000000E-01  5.00000000E-01  1.25000000E-01       0.01172
    26)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.01563
    27)     3.75000000E-01  2.50000000E-01  2.50000000E-01       0.04688
    28)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.02344
    29)     3.75000000E-01  3.75000000E-01  2.50000000E-01       0.04688
    30)     5.00000000E-01  3.75000000E-01  2.50000000E-01       0.04688
    31)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.01172
    32)     3.75000000E-01  3.75000000E-01  3.75000000E-01       0.01563
    33)     5.00000000E-01  3.75000000E-01  3.75000000E-01       0.02344
    34)     5.00000000E-01  5.00000000E-01  3.75000000E-01       0.01172
    35)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.00195

 Together with 48 symmetry operations and time-reversal symmetry 
 yields   512 points in the full Brillouin Zone.


 top of valence       [eV]  -1.64
 bottom of conduction [eV]   4.61
 Fermi energy         [eV]   1.49



  >>>> For spin  1
   Minimum optical gap =   6.7873 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   6.2514 [eV], Top of valence bands at :   0.5000  0.5000  0.5000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000


  >>>> For spin  1
   Minimum optical gap =   6.7873 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   6.2514 [eV], Top of valence bands at :   0.5000  0.5000  0.5000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000

--- !COMMENT
message: |
    Not all the degenerate states at ikcalc= 26, spin= 1
    were included in the bdgw set. bdgw has been changed to:  8 25
src_file: setup_sigma.F90
src_line: 650
...


--- !COMMENT
message: |
    Not all the degenerate states at ikcalc= 32, spin= 1
    were included in the bdgw set. bdgw has been changed to:  8 25
src_file: setup_sigma.F90
src_line: 650
...


--- !COMMENT
message: |
    Not all the degenerate states at ikcalc= 35, spin= 1
    were included in the bdgw set. bdgw has been changed to:  8 25
src_file: setup_sigma.F90
src_line: 650
...

 init_Er_from_file : testing file sigi_SCR

 ===============================================================================
 ECHO of the ABINIT-SCR file header 
 SCR file: epsilon^-1 , calculated using inclvkb = 2
 TESTPARTICLE RPA
 Identifier                       4
 Kxc kernel                       0
 Treatment of q-->0 limit         0
 headform                        56
 fform                         1002
 gwcalctyp                       -1
 Number of components             1       1
 Number of q-points              35
 Number of q-directions           0
 Number of frequencies            2
 Number of bands used           336
 Dimension of matrix           2103
 Number of planewaves used     2777
 Spectral method                  0
 Test_type                        0
 Time-ordering                    1
 Scissor Energy                 0.000000E+00
 Spectral smearing              0.000000E+00
 Complex Imaginary Shift        3.674933E-03

 q-points [r.l.u.]:
    1    0.000000    0.000000    0.000000
    2    0.125000    0.000000    0.000000
    3    0.250000    0.000000    0.000000
    4    0.375000    0.000000    0.000000
    5    0.500000    0.000000    0.000000
    6    0.125000    0.125000    0.000000
    7    0.250000    0.125000    0.000000
    8    0.375000    0.125000    0.000000
    9    0.500000    0.125000    0.000000
   10    0.250000    0.250000    0.000000
   11    0.375000    0.250000    0.000000
   12    0.500000    0.250000    0.000000
   13    0.375000    0.375000    0.000000
   14    0.500000    0.375000    0.000000
   15    0.500000    0.500000    0.000000
   16    0.125000    0.125000    0.125000
   17    0.250000    0.125000    0.125000
   18    0.375000    0.125000    0.125000
   19    0.500000    0.125000    0.125000
   20    0.250000    0.250000    0.125000
   21    0.375000    0.250000    0.125000
   22    0.500000    0.250000    0.125000
   23    0.375000    0.375000    0.125000
   24    0.500000    0.375000    0.125000
   25    0.500000    0.500000    0.125000
   26    0.250000    0.250000    0.250000
   27    0.375000    0.250000    0.250000
   28    0.500000    0.250000    0.250000
   29    0.375000    0.375000    0.250000
   30    0.500000    0.375000    0.250000
   31    0.500000    0.500000    0.250000
   32    0.375000    0.375000    0.375000
   33    0.500000    0.375000    0.375000
   34    0.500000    0.500000    0.375000
   35    0.500000    0.500000    0.500000

 Frequencies used [eV]:
  1   0.00   0.00
  2   0.00  26.15
 End the ECHO of the ABINIT-SCR file header 
 ===============================================================================
 ===============================================================================
 ECHO of the ABINIT file header 
 
 First record :
.codvsn,headform,fform = 7.6.3    57 1002
 
 Second record :
 bantot,intxc,ixc,natom  = 11760     0     7     4
 ngfft(1:3),nkpt         =    36    36    36    35
 nspden,nspinor          =     1     1
 nsppol,nsym,npsp,ntypat =     1    48     2     2
 occopt,pertcase,usepaw  =     1     0     0
 ecut,ecutdg,ecutsm      =  2.5781282715E+01  2.5781282715E+01  0.0000000000E+00
 ecut_eff                =  2.5781282715E+01
 qptn(1:3)               =  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,1)           =  7.5778017929E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,2)           =  0.0000000000E+00  7.5778017929E+00  0.0000000000E+00
 rprimd(1:3,3)           =  0.0000000000E+00  0.0000000000E+00  7.5778017929E+00
 stmbias,tphysel,tsmear  =  0.0000000000E+00  0.0000000000E+00  4.0000000000E-02

 Third record :
 istwfk=   1   1   1   1   1   1   1   1   1   1   1   1
   1   1   1   1   1   1   1   1   1   1   1   1
   1   1   1   1   1   1   1   1   1   1   1
 nband = 336 336 336 336 336 336 336 336 336 336 336 336
 336 336 336 336 336 336 336 336 336 336 336 336
 336 336 336 336 336 336 336 336 336 336 336
 npwarr= 2777 2777 2777 2777 2777 2777 2777 2777 2777 2777
 2777 2777 2777 2777 2777 2777 2777 2777 2777 2777
 2777 2777 2777 2777 2777 2777 2777 2777 2777 2777
 2777 2777 2777 2777 2777
 so_psp=   1   1
 symafm=
          1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
          1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symrel=
           1   0   0   0   1   0   0   0   1    -1   0   0   0  -1   0   0   0  -1
          -1   0   0   0   1   0   0   0  -1     1   0   0   0  -1   0   0   0   1
          -1   0   0   0  -1   0   0   0   1     1   0   0   0   1   0   0   0  -1
           1   0   0   0  -1   0   0   0  -1    -1   0   0   0   1   0   0   0   1
           0   1   0   1   0   0   0   0   1     0  -1   0  -1   0   0   0   0  -1
           0  -1   0   1   0   0   0   0  -1     0   1   0  -1   0   0   0   0   1
           0  -1   0  -1   0   0   0   0   1     0   1   0   1   0   0   0   0  -1
           0   1   0  -1   0   0   0   0  -1     0  -1   0   1   0   0   0   0   1
           0   0   1   1   0   0   0   1   0     0   0  -1  -1   0   0   0  -1   0
           0   0  -1   1   0   0   0  -1   0     0   0   1  -1   0   0   0   1   0
           0   0  -1  -1   0   0   0   1   0     0   0   1   1   0   0   0  -1   0
           0   0   1  -1   0   0   0  -1   0     0   0  -1   1   0   0   0   1   0
           1   0   0   0   0   1   0   1   0    -1   0   0   0   0  -1   0  -1   0
          -1   0   0   0   0   1   0  -1   0     1   0   0   0   0  -1   0   1   0
          -1   0   0   0   0  -1   0   1   0     1   0   0   0   0   1   0  -1   0
           1   0   0   0   0  -1   0  -1   0    -1   0   0   0   0   1   0   1   0
           0   1   0   0   0   1   1   0   0     0  -1   0   0   0  -1  -1   0   0
           0  -1   0   0   0   1  -1   0   0     0   1   0   0   0  -1   1   0   0
           0  -1   0   0   0  -1   1   0   0     0   1   0   0   0   1  -1   0   0
           0   1   0   0   0  -1  -1   0   0     0  -1   0   0   0   1   1   0   0
           0   0   1   0   1   0   1   0   0     0   0  -1   0  -1   0  -1   0   0
           0   0  -1   0   1   0  -1   0   0     0   0   1   0  -1   0   1   0   0
           0   0  -1   0  -1   0   1   0   0     0   0   1   0   1   0  -1   0   0
           0   0   1   0  -1   0  -1   0   0     0   0  -1   0   1   0   1   0   0
 type  =   1   2   2   2
 kptns =                 (max 50 k-points will be written)
            0.000000E+00    0.000000E+00    0.000000E+00
            1.250000E-01    0.000000E+00    0.000000E+00
            2.500000E-01    0.000000E+00    0.000000E+00
            3.750000E-01    0.000000E+00    0.000000E+00
            5.000000E-01    0.000000E+00    0.000000E+00
            1.250000E-01    1.250000E-01    0.000000E+00
            2.500000E-01    1.250000E-01    0.000000E+00
            3.750000E-01    1.250000E-01    0.000000E+00
            5.000000E-01    1.250000E-01    0.000000E+00
            2.500000E-01    2.500000E-01    0.000000E+00
            3.750000E-01    2.500000E-01    0.000000E+00
            5.000000E-01    2.500000E-01    0.000000E+00
            3.750000E-01    3.750000E-01    0.000000E+00
            5.000000E-01    3.750000E-01    0.000000E+00
            5.000000E-01    5.000000E-01    0.000000E+00
            1.250000E-01    1.250000E-01    1.250000E-01
            2.500000E-01    1.250000E-01    1.250000E-01
            3.750000E-01    1.250000E-01    1.250000E-01
            5.000000E-01    1.250000E-01    1.250000E-01
            2.500000E-01    2.500000E-01    1.250000E-01
            3.750000E-01    2.500000E-01    1.250000E-01
            5.000000E-01    2.500000E-01    1.250000E-01
            3.750000E-01    3.750000E-01    1.250000E-01
            5.000000E-01    3.750000E-01    1.250000E-01
            5.000000E-01    5.000000E-01    1.250000E-01
            2.500000E-01    2.500000E-01    2.500000E-01
            3.750000E-01    2.500000E-01    2.500000E-01
            5.000000E-01    2.500000E-01    2.500000E-01
            3.750000E-01    3.750000E-01    2.500000E-01
            5.000000E-01    3.750000E-01    2.500000E-01
            5.000000E-01    5.000000E-01    2.500000E-01
            3.750000E-01    3.750000E-01    3.750000E-01
            5.000000E-01    3.750000E-01    3.750000E-01
            5.000000E-01    5.000000E-01    3.750000E-01
            5.000000E-01    5.000000E-01    5.000000E-01
 wtk =
          0.00  0.01  0.01  0.01  0.01  0.02  0.05  0.05  0.02  0.02
          0.05  0.02  0.02  0.02  0.01  0.02  0.05  0.05  0.02  0.05
          0.09  0.05  0.05  0.05  0.01  0.02  0.05  0.02  0.05  0.05
          0.01  0.02  0.02  0.01  0.00
   occ =
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
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
  znucl= 21.00  9.00

 Pseudopotential info :
 title=Scandium, fhi98PP : Troullier-Martin, LDA CA PerdewWang, l=2 local (rc=1.4 s and p,1.8 d)
  znuclpsp= 21.00, zionpsp= 11.00, pspso=  0, pspdat= 80210, pspcod=  6, pspxc=  8
  lmnmax  =  4
 title=fluorine, fhi98PP : Trouiller-Martins-type, LDA Ceperley/Alder Perdew/Wang (1992), l= 2 local
  znuclpsp=  9.00, zionpsp=  7.00, pspso=  0, pspdat= 21003, pspcod=  6, pspxc=  7
  lmnmax  =  4
 
 Last record :
 residm,etot,fermie=    1.000000E+20    1.000000000000E+20    1.000000E+20
 xred =
            0.000000E+00    0.000000E+00    0.000000E+00
            5.000000E-01    0.000000E+00    0.000000E+00
            0.000000E+00    5.000000E-01    0.000000E+00
            0.000000E+00    0.000000E+00    5.000000E-01
 End the ECHO of the ABINIT file header 
 ===============================================================================
 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :    35
 Reduced coordinates and weights :

     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.00195
     2)     1.25000000E-01  0.00000000E+00  0.00000000E+00       0.01172
     3)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.01172
     4)     3.75000000E-01  0.00000000E+00  0.00000000E+00       0.01172
     5)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.00586
     6)     1.25000000E-01  1.25000000E-01  0.00000000E+00       0.02344
     7)     2.50000000E-01  1.25000000E-01  0.00000000E+00       0.04688
     8)     3.75000000E-01  1.25000000E-01  0.00000000E+00       0.04688
     9)     5.00000000E-01  1.25000000E-01  0.00000000E+00       0.02344
    10)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.02344
    11)     3.75000000E-01  2.50000000E-01  0.00000000E+00       0.04688
    12)     5.00000000E-01  2.50000000E-01  0.00000000E+00       0.02344
    13)     3.75000000E-01  3.75000000E-01  0.00000000E+00       0.02344
    14)     5.00000000E-01  3.75000000E-01  0.00000000E+00       0.02344
    15)     5.00000000E-01  5.00000000E-01  0.00000000E+00       0.00586
    16)     1.25000000E-01  1.25000000E-01  1.25000000E-01       0.01563
    17)     2.50000000E-01  1.25000000E-01  1.25000000E-01       0.04688
    18)     3.75000000E-01  1.25000000E-01  1.25000000E-01       0.04688
    19)     5.00000000E-01  1.25000000E-01  1.25000000E-01       0.02344
    20)     2.50000000E-01  2.50000000E-01  1.25000000E-01       0.04688
    21)     3.75000000E-01  2.50000000E-01  1.25000000E-01       0.09375
    22)     5.00000000E-01  2.50000000E-01  1.25000000E-01       0.04688
    23)     3.75000000E-01  3.75000000E-01  1.25000000E-01       0.04688
    24)     5.00000000E-01  3.75000000E-01  1.25000000E-01       0.04688
    25)     5.00000000E-01  5.00000000E-01  1.25000000E-01       0.01172
    26)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.01563
    27)     3.75000000E-01  2.50000000E-01  2.50000000E-01       0.04688
    28)     5.00000000E-01  2.50000000E-01  2.50000000E-01       0.02344
    29)     3.75000000E-01  3.75000000E-01  2.50000000E-01       0.04688
    30)     5.00000000E-01  3.75000000E-01  2.50000000E-01       0.04688
    31)     5.00000000E-01  5.00000000E-01  2.50000000E-01       0.01172
    32)     3.75000000E-01  3.75000000E-01  3.75000000E-01       0.01563
    33)     5.00000000E-01  3.75000000E-01  3.75000000E-01       0.02344
    34)     5.00000000E-01  5.00000000E-01  3.75000000E-01       0.01172
    35)     5.00000000E-01  5.00000000E-01  5.00000000E-01       0.00195

 Together with 48 symmetry operations and time-reversal symmetry 
 yields   512 points in the full Brillouin Zone.


 optimal value for ng0sh =  1 1 1

 integrate q->0 : numerical BZ geometry factor =     8.8399

 vcoul_init : cutoff-mode = AUXILIARY_FUNCTION
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030

 setmesh: npwwfn        =     2777; Max (m1,m2,m3)   =      8     8     8
          npweps/npwsigx=     4067; Max (mm1,mm2,mm3)=     10    10    10
          mG0 added     =   1  1  1
 calculated ecutwfn          =  25.781 [Ha]
 calculated ecutsigx/ecuteps =  33.688 [Ha]
 using method =  2 with ecuteff = 118.410 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  40x 40x 40
          total number of points  =    64000


 setmesh: npwwfn        =     2777; Max (m1,m2,m3)   =      8     8     8
          npweps/npwsigx=     2103; Max (mm1,mm2,mm3)=      8     8     8
          mG0 added     =   1  1  1
 calculated ecutwfn          =  25.781 [Ha]
 calculated ecutsigx/ecuteps =  21.313 [Ha]
 using method =  2 with ecuteff =  93.975 [Ha]

 finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh  1  1  1
 setmesh: FFT mesh size selected  =  36x 36x 36
          total number of points  =    46656


Using the extrapolar approximation to accelerate convergence
with respect to the number of bands included
with gwencomp:  0.5442E+02 [eV]
  screening after setup_sigma : Er%Hscr%headform=          57

 ==== FFT mesh for oscillator strengths used for Sigma_c ====
  FFT mesh divisions ........................    36   36   36
  Augmented FFT divisions ...................    37   37   36
  FFT algorithm .............................   312
  FFT cache size ............................    16

 ==== FFT mesh for oscillator strengths used for Sigma_x ====
  FFT mesh divisions ........................    40   40   40
  Augmented FFT divisions ...................    41   41   40
  FFT algorithm .............................   312
  FFT cache size ............................    16

--- !WARNING
message: |
    Using k-centered G-spheres.
src_file: m_wfs.F90
src_line: 1035
...

 Memory needed for Fourier components ug =         31.5 [Mb]
 Memory needed for real space ur =        525.4 [Mb]

--- !WARNING
message: |
    Wfd is init using WFK file
src_file: sigma.F90
src_line: 769
...

 wfd_read_wfk : about to read sigi_WFK
wfd_read_wfk: will read 738 (b,k,s) states
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          22 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          22 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          21 nblocks           1 nbxblock         272
 in buffered bmask
 nb_tot          22 nblocks           1 nbxblock         272
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
 symkpt : found identity, with number  1
 planewave contribution to nelect:   31.9853
  Number of electrons per unit cell       =    31.9853382094856     
  Charge density outside the cutoff region=    4.41399191023776     
 Number of electrons calculated from density =   31.9853; Expected =   32.0000
 average of density, n =  0.073506
 r_s =    1.4809
 omega_plasma =   26.1527 [eV]

 Total charge density [el/Bohr^3]
,     Maximum=    1.5317E+00  at reduced coord.    0.5000    0.9444    0.9722
,     Minimum=    1.0729E-04  at reduced coord.    0.5000    0.5000    0.5000
,  Integrated=    3.1985E+01

 ewald : nr and ng are    3 and   15
 calc_vhxc_braket : calculating v_xc[n_val] (excluding non-linear core corrections)
 For spin  1 Min density rhor =     0.107290E-03
 E_xc[n_val]  = -19.6646 [Ha]. <V_xc[n_val]> =  -0.3260 [Ha].
 Will calculate 35 <b,k,s|O|b',k,s> matrix elements in calc_vhxc_me.

 === Matrix elements in the KS basis set [eV] ===
 kpt= (  0.00000000E+00  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.44551 -21.44551  71.04719
   9 -21.44551 -21.44551  71.04719
  10 -21.44551 -21.44551  71.04719
  11 -22.05121 -22.05121  68.63697
  12 -22.05121 -22.05121  68.63697
  13 -22.05121 -22.05121  68.63697
  14 -22.65525 -22.65525  74.51235
  15 -22.65525 -22.65525  74.51235
  16 -22.65525 -22.65525  74.51235
  17 -17.49973 -17.49973  72.12316
  18 -17.49973 -17.49973  72.12316
  19 -17.49973 -17.49973  72.12316
  20  -8.07768  -8.07768 -10.32197
  21 -20.27693 -20.27693  88.38400
  22 -20.27693 -20.27693  88.38400
  23  -7.14934  -7.14934 -15.84617
  24  -7.14934  -7.14934 -15.84617
 kpt= (  1.25000000E-01  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.51184 -21.51184  72.65498
   9 -21.46684 -21.46684  71.17874
  10 -21.46684 -21.46684  71.17874
  11 -22.12113 -22.12113  71.09321
  12 -22.00469 -22.00469  69.13779
  13 -22.00469 -22.00469  69.13779
  14 -21.99178 -21.99178  68.30294
  15 -22.55106 -22.55106  73.51528
  16 -22.55106 -22.55106  73.51528
  17 -17.51492 -17.51492  72.23758
  18 -17.75546 -17.75546  73.14799
  19 -17.75546 -17.75546  73.14799
  20  -8.59171  -8.59171  -6.57437
  21 -20.29167 -20.29167  88.50383
  22 -20.15093 -20.15093  85.90696
  23  -9.13972  -9.13972  -2.98675
  24  -7.28380  -7.28380 -15.20397
 kpt= (  2.50000000E-01  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.52221 -21.52221  75.23145
   9 -21.54926 -21.54926  71.69709
  10 -21.54926 -21.54926  71.69709
  11 -21.15607 -21.15607  64.66491
  12 -21.71035 -21.71035  68.57964
  13 -21.71035 -21.71035  68.57964
  14 -21.86955 -21.86955  67.62636
  15 -22.47746 -22.47746  72.71619
  16 -22.47746 -22.47746  72.71619
  17 -17.55084 -17.55084  72.50603
  18 -18.35645 -18.35645  75.62030
  19 -18.35645 -18.35645  75.62030
  20 -20.32457 -20.32457  88.76584
  21 -10.69998 -10.69998  10.04239
  22 -18.62415 -18.62415  70.56471
  23  -9.89498  -9.89498   1.47297
  24  -7.64470  -7.64470 -13.48591
 kpt= (  3.75000000E-01  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.28813 -21.28813  75.51180
   9 -21.75532 -21.75532  73.07989
  10 -21.75532 -21.75532  73.07989
  11 -20.59100 -20.59100  61.01751
  12 -21.27600 -21.27600  66.66362
  13 -21.27600 -21.27600  66.66362
  14 -21.74485 -21.74485  66.93086
  15 -22.46875 -22.46875  72.57212
  16 -22.46875 -22.46875  72.57212
  17 -17.58785 -17.58785  72.78508
  18 -18.94799 -18.94799  78.13506
  19 -18.94799 -18.94799  78.13506
  20 -20.35541 -20.35541  89.01790
  21 -14.46523 -14.46523  40.20081
  22 -14.43463 -14.43463  34.70733
  23 -11.08567 -11.08567   9.92477
  24  -8.08107  -8.08107 -11.42860
 kpt= (  5.00000000E-01  0.00000000E+00  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.15591 -21.15591  75.25683
   9 -22.02966 -22.02966  75.06281
  10 -22.02966 -22.02966  75.06281
  11 -20.41817 -20.41817  59.94973
  12 -20.90804 -20.90804  64.41688
  13 -20.90804 -20.90804  64.41688
  14 -21.69788 -21.69788  66.67257
  15 -22.46736 -22.46736  72.54146
  16 -22.46736 -22.46736  72.54146
  17 -17.60269 -17.60269  72.89465
  18 -19.19267 -19.19267  79.19116
  19 -19.19267 -19.19267  79.19116
  20 -20.36691 -20.36691  89.10971
  21 -17.89337 -17.89337  67.69394
  22  -8.89844  -8.89844 -10.33629
  23 -13.43113 -13.43113  28.25844
  24  -8.29852  -8.29852 -10.41395
 kpt= (  1.25000000E-01  1.25000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.40577 -21.40577  71.78172
   9 -21.65149 -21.65149  73.73237
  10 -21.48694 -21.48694  71.29944
  11 -21.72406 -21.72406  69.06172
  12 -22.15834 -22.15834  70.94418
  13 -21.85603 -21.85603  67.95119
  14 -21.98186 -21.98186  68.92570
  15 -22.54809 -22.54809  74.19955
  16 -22.13238 -22.13238  69.20140
  17 -17.74676 -17.74676  73.14926
  18 -17.79208 -17.79208  73.36572
  19 -17.96209 -17.96209  73.97206
  20 -10.28561 -10.28561   6.90394
  21 -18.53333 -18.53333  73.15225
  22 -20.62309 -20.62309  89.20904
  23  -8.83468  -8.83468  -6.04299
  24  -9.75059  -9.75059   2.48107
 kpt= (  2.50000000E-01  1.25000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.52062 -21.52062  75.19650
   9 -21.56747 -21.56747  72.97217
  10 -21.56446 -21.56446  71.78155
  11 -21.00869 -21.00869  65.19347
  12 -21.53786 -21.53786  66.62312
  13 -21.66911 -21.66911  68.19902
  14 -22.06790 -22.06790  69.82040
  15 -22.37574 -22.37574  72.64701
  16 -22.10502 -22.10502  68.97741
  17 -17.80186 -17.80186  73.51356
  18 -18.37011 -18.37011  75.73278
  19 -18.49536 -18.49536  76.20706
  20 -19.35311 -19.35311  80.41168
  21 -11.81802 -11.81802  17.99033
  22 -18.89311 -18.89311  72.48877
  23  -9.85013  -9.85013   1.10602
  24  -9.42869  -9.42869  -0.84814
 kpt= (  3.75000000E-01  1.25000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.29176 -21.29176  75.52741
   9 -21.60685 -21.60685  73.09777
  10 -21.76081 -21.76081  73.09457
  11 -20.57248 -20.57248  63.04347
  12 -21.27495 -21.27495  66.62952
  13 -21.15245 -21.15245  64.30569
  14 -22.08551 -22.08551  69.92024
  15 -22.33859 -22.33859  72.23389
  16 -22.01887 -22.01887  68.50081
  17 -17.83714 -17.83714  73.78651
  18 -18.95974 -18.95974  78.24384
  19 -19.05988 -19.05988  78.64802
  20 -20.37220 -20.37220  88.45180
  21 -14.98284 -14.98284  43.36007
  22 -14.38883 -14.38883  34.27376
  23 -10.93406 -10.93406   8.79988
  24  -9.21004  -9.21004  -3.00398
 kpt= (  5.00000000E-01  1.25000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.15767 -21.15767  75.26249
   9 -22.01617 -22.01617  76.27891
  10 -20.06733 -20.06733  59.51027
  11 -22.03285 -22.03285  75.05952
  12 -20.91904 -20.91904  64.47657
  13 -21.00035 -21.00035  63.38193
  14 -22.09040 -22.09040  69.93858
  15 -22.33267 -22.33267  72.15820
  16 -21.97735 -21.97735  68.27623
  17 -17.85176 -17.85176  73.89945
  18 -19.20480 -19.20480  79.30674
  19 -19.29984 -19.29984  79.69118
  20 -20.44996 -20.44996  89.04902
  21 -18.48517 -18.48517  71.24507
  22  -8.83012  -8.83012 -10.65269
  23 -13.14398 -13.14398  26.04427
  24  -8.51511  -8.51511  -9.21648
 kpt= (  2.50000000E-01  2.50000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.35229 -21.35229  73.80496
   9 -21.77019 -21.77019  77.14216
  10 -20.29390 -20.29390  61.48531
  11 -21.62593 -21.62593  72.14418
  12 -21.45166 -21.45166  66.52564
  13 -21.51956 -21.51956  66.35216
  14 -21.52565 -21.52565  66.11044
  15 -22.26543 -22.26543  73.21669
  16 -22.32861 -22.32861  70.02151
  17 -18.35322 -18.35322  75.75645
  18 -18.44433 -18.44433  76.21174
  19 -18.90758 -18.90758  78.01212
  20 -19.38382 -19.38382  80.36483
  21 -10.03413 -10.03413   1.67178
  22 -21.33454 -21.33454  91.03850
  23  -9.60997  -9.60997  -1.29751
  24  -9.96280  -9.96280   2.85450
 kpt= (  3.75000000E-01  2.50000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.29409 -21.29409  75.51629
   9 -21.64771 -21.64771  76.09551
  10 -19.78583 -19.78583  58.70634
  11 -21.79273 -21.79273  73.23949
  12 -21.25230 -21.25230  66.38163
  13 -21.20363 -21.20363  64.28968
  14 -21.54836 -21.54836  66.32177
  15 -22.06814 -22.06814  71.61572
  16 -22.42311 -22.42311  70.47024
  17 -18.42835 -18.42835  76.24242
  18 -18.98944 -18.98944  78.51558
  19 -19.39069 -19.39069  80.12540
  20 -20.12513 -20.12513  86.06575
  21 -16.54382 -16.54382  52.99929
  22 -14.05904 -14.05904  31.58078
  23 -10.48179 -10.48179   5.43139
  24  -9.41508  -9.41508  -2.05016
 kpt= (  5.00000000E-01  2.50000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.15794 -21.15794  75.24038
   9 -21.75051 -21.75051  76.88914
  10 -19.54974 -19.54974  57.25810
  11 -22.05176 -22.05176  75.11716
  12 -20.94589 -20.94589  64.62350
  13 -21.09408 -21.09408  63.63686
  14 -21.56022 -21.56022  66.38804
  15 -22.02935 -22.02935  71.25066
  16 -22.44097 -22.44097  70.55750
  17 -18.44232 -18.44232  76.35752
  18 -19.23375 -19.23375  79.58354
  19 -19.60237 -19.60237  81.02363
  20 -20.32658 -20.32658  87.58427
  21 -20.29963 -20.29963  82.19700
  22  -8.63827  -8.63827 -11.48743
  23 -12.16866 -12.16866  18.64413
  24  -8.66227  -8.66227  -8.30788
 kpt= (  3.75000000E-01  3.75000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.10559 -21.10559  74.09257
   9 -21.56495 -21.56495  77.53481
  10 -19.34190 -19.34190  56.38631
  11 -21.90959 -21.90959  73.96319
  12 -21.10996 -21.10996  65.29088
  13 -21.86871 -21.86871  71.35375
  14 -21.23925 -21.23925  64.44270
  15 -21.24543 -21.24543  64.44240
  16 -22.67428 -22.67428  71.67998
  17 -18.99415 -18.99415  78.66118
  18 -19.04142 -19.04142  78.90638
  19 -19.77905 -19.77905  81.73524
  20 -20.22604 -20.22604  86.74476
  21 -22.09350 -22.09350  93.62978
  22  -8.99160  -8.99160  -7.42972
  23  -9.96246  -9.96246   1.23257
  24  -9.49639  -9.49639  -1.54292
 kpt= (  5.00000000E-01  3.75000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.10046 -21.10046  74.78152
   9 -21.42974 -21.42974  76.53115
  10 -19.20490 -19.20490  55.71028
  11 -22.17566 -22.17566  75.91376
  12 -20.97320 -20.97320  64.77309
  13 -21.65955 -21.65955  69.70999
  14 -21.14192 -21.14192  63.84907
  15 -21.25744 -21.25744  64.51700
  16 -22.75231 -22.75231  72.06174
  17 -19.03072 -19.03072  78.90294
  18 -19.26460 -19.26460  79.87489
  19 -19.94905 -19.94905  82.38494
  20 -20.31143 -20.31143  87.37448
  21 -22.12686 -22.12686  93.33892
  22  -8.33627  -8.33627 -12.91619
  23 -10.63815 -10.63815   6.98882
  24  -8.90956  -8.90956  -6.60488
 kpt= (  5.00000000E-01  5.00000000E-01  0.00000000E+00) spin= 1:
  ib vxc       vxcval    vhartree
   8 -20.91809 -20.91809  73.47144
   9 -21.45016 -21.45016  77.35989
  10 -19.08676 -19.08676  55.17629
  11 -22.75633 -22.75633  80.49743
  12 -20.98346 -20.98346  64.82840
  13 -20.98346 -20.98346  64.82840
  14 -21.15823 -21.15823  63.92968
  15 -21.15823 -21.15823  63.92968
  16 -22.85207 -22.85207  72.54662
  17 -19.27724 -19.27724  79.99409
  18 -19.27724 -19.27724  79.99409
  19 -20.09862 -20.09862  82.90258
  20 -20.34439 -20.34439  87.60800
  21 -22.73887 -22.73887  97.03166
  22  -7.49620  -7.49620 -19.12100
  23  -9.73685  -9.73685  -0.14775
  24  -9.73685  -9.73685  -0.14775
 kpt= (  1.25000000E-01  1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.30779 -21.30779  70.97753
   9 -21.65852 -21.65852  73.75722
  10 -21.65852 -21.65852  73.75722
  11 -21.81734 -21.81734  70.27836
  12 -21.64859 -21.64859  67.99440
  13 -21.64859 -21.64859  67.99440
  14 -22.19163 -22.19163  70.40652
  15 -22.19163 -22.19163  70.40652
  16 -22.15809 -22.15809  69.16024
  17 -17.90469 -17.90469  73.71858
  18 -18.01342 -18.01342  74.27615
  19 -18.01342 -18.01342  74.27615
  20  -8.56918  -8.56918  -7.99187
  21 -20.63860 -20.63860  89.33732
  22 -20.63860 -20.63860  89.33732
  23  -8.89722  -8.89722  -5.68101
  24  -8.89722  -8.89722  -5.68101
 kpt= (  2.50000000E-01  1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.52004 -21.52004  75.16814
   9 -21.46711 -21.46711  72.15023
  10 -21.69174 -21.69174  73.92560
  11 -20.92920 -20.92920  64.81901
  12 -21.25522 -21.25522  66.54805
  13 -21.72100 -21.72100  68.82404
  14 -21.90560 -21.90560  68.50978
  15 -22.20486 -22.20486  70.35040
  16 -22.18042 -22.18042  69.29412
  17 -18.00741 -18.00741  74.34419
  18 -18.47046 -18.47046  76.12149
  19 -18.55313 -18.55313  76.55366
  20 -20.67257 -20.67257  89.62989
  21 -11.17528 -11.17528  12.59563
  22 -18.61774 -18.61774  70.10448
  23  -9.80915  -9.80915   0.81416
  24  -9.01950  -9.01950  -4.98520
 kpt= (  3.75000000E-01  1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.29558 -21.29558  75.54536
   9 -21.40995 -21.40995  71.48772
  10 -21.82950 -21.82950  74.86822
  11 -20.52830 -20.52830  62.97324
  12 -20.86219 -20.86219  64.75414
  13 -21.74696 -21.74696  68.98591
  14 -21.63305 -21.63305  66.93472
  15 -22.21256 -22.21256  70.32964
  16 -22.12759 -22.12759  69.02618
  17 -18.04655 -18.04655  74.64589
  18 -19.03716 -19.03716  78.57741
  19 -19.10653 -19.10653  78.94703
  20 -20.70029 -20.70029  89.88327
  21 -15.46951 -15.46951  46.73972
  22 -14.03090 -14.03090  31.40766
  23 -10.79497 -10.79497   7.80340
  24  -9.00721  -9.00721  -5.42257
 kpt= (  5.00000000E-01  1.25000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.16157 -21.16157  75.28092
   9 -21.87642 -21.87642  75.10111
  10 -22.15562 -22.15562  77.40406
  11 -19.94886 -19.94886  58.85805
  12 -20.44620 -20.44620  61.92881
  13 -21.75959 -21.75959  69.06870
  14 -21.51270 -21.51270  66.23130
  15 -22.21631 -22.21631  70.32702
  16 -22.09653 -22.09653  68.86887
  17 -18.06209 -18.06209  74.76705
  18 -19.28027 -19.28027  79.63646
  19 -19.34217 -19.34217  79.97965
  20 -20.70994 -20.70994  89.97923
  21 -18.89594 -18.89594  73.77948
  22  -8.74847  -8.74847 -11.06676
  23 -12.85849 -12.85849  23.88140
  24  -8.72231  -8.72231  -8.32757
 kpt= (  2.50000000E-01  2.50000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.35161 -21.35161  73.77093
   9 -21.77320 -21.77320  77.14899
  10 -21.58208 -21.58208  72.96909
  11 -20.33622 -20.33622  61.78804
  12 -20.92762 -20.92762  64.10208
  13 -21.35703 -21.35703  67.75354
  14 -21.95689 -21.95689  68.46140
  15 -22.06640 -22.06640  69.33320
  16 -22.35078 -22.35078  70.12280
  17 -18.47070 -18.47070  76.23757
  18 -18.60350 -18.60350  76.91487
  19 -18.92737 -18.92737  78.16891
  20 -19.88999 -19.88999  82.73262
  21  -9.87682  -9.87682   0.38250
  22 -21.35775 -21.35775  91.23286
  23  -9.61777  -9.61777  -1.19357
  24  -9.75022  -9.75022   1.46486
 kpt= (  3.75000000E-01  2.50000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.29806 -21.29806  75.53474
   9 -21.64722 -21.64722  76.07090
  10 -19.80748 -19.80748  58.86088
  11 -21.65811 -21.65811  73.37112
  12 -20.71085 -20.71085  63.77301
  13 -21.23423 -21.23423  66.66812
  14 -21.81559 -21.81559  67.69169
  15 -22.05041 -22.05041  69.08586
  16 -22.43728 -22.43728  70.53945
  17 -18.56968 -18.56968  76.85688
  18 -19.09699 -19.09699  79.01642
  19 -19.40484 -19.40484  80.26497
  20 -20.57717 -20.57717  88.00272
  21 -17.92077 -17.92077  63.72576
  22 -12.59577 -12.59577  20.22134
  23 -10.37273 -10.37273   4.77739
  24  -9.15766  -9.15766  -3.56327
 kpt= (  5.00000000E-01  2.50000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.16022 -21.16022  75.24942
   9 -21.74839 -21.74839  76.85274
  10 -19.56243 -19.56243  57.32733
  11 -21.98115 -21.98115  75.88536
  12 -20.31588 -20.31588  61.12379
  13 -21.23700 -21.23700  66.65437
  14 -21.73555 -21.73555  67.22553
  15 -22.05738 -22.05738  69.10740
  16 -22.45494 -22.45494  70.62702
  17 -18.58631 -18.58631  76.99066
  18 -19.33420 -19.33420  80.06087
  19 -19.61613 -19.61613  81.17270
  20 -20.73741 -20.73741  89.21682
  21 -20.49369 -20.49369  83.55590
  22  -8.50026  -8.50026 -12.30429
  23 -11.94088 -11.94088  17.01662
  24  -8.30278  -8.30278 -10.11593
 kpt= (  3.75000000E-01  3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.10856 -21.10856  74.10121
   9 -21.56809 -21.56809  77.55182
  10 -19.36667 -19.36667  56.53249
  11 -21.63369 -21.63369  72.99540
  12 -20.48738 -20.48738  61.91337
  13 -21.20161 -21.20161  67.78835
  14 -21.85224 -21.85224  67.80949
  15 -21.88991 -21.88991  68.12012
  16 -22.67771 -22.67771  71.69820
  17 -19.09466 -19.09466  79.13401
  18 -19.15654 -19.15654  79.45579
  19 -19.79142 -19.79142  81.89249
  20 -20.61347 -20.61347  88.14341
  21 -22.12658 -22.12658  93.89004
  22  -8.81367  -8.81367  -8.64626
  23  -9.93982  -9.93982   1.22473
  24  -9.24986  -9.24986  -2.83188
 kpt= (  5.00000000E-01  3.75000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.10320 -21.10320  74.79243
   9 -21.43151 -21.43151  76.53404
  10 -19.23183 -19.23183  55.86964
  11 -21.87613 -21.87613  74.83564
  12 -20.33446 -20.33446  61.20669
  13 -21.03594 -21.03594  66.43162
  14 -21.79357 -21.79357  67.49803
  15 -21.88513 -21.88513  68.03517
  16 -22.75421 -22.75421  72.07195
  17 -19.13853 -19.13853  79.41711
  18 -19.36495 -19.36495  80.36399
  19 -19.96259 -19.96259  82.56331
  20 -20.68956 -20.68956  88.70439
  21 -22.19006 -22.19006  93.80863
  22  -8.06318  -8.06318 -14.69902
  23 -10.58148 -10.58148   6.75247
  24  -8.77507  -8.77507  -7.03204
 kpt= (  5.00000000E-01  5.00000000E-01  1.25000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -20.91967 -20.91967  73.47101
   9 -21.45311 -21.45311  77.37686
  10 -19.11496 -19.11496  55.34450
  11 -22.47561 -22.47561  79.69665
  12 -20.34844 -20.34844  61.28346
  13 -20.34844 -20.34844  61.28346
  14 -21.80983 -21.80983  67.57962
  15 -21.80983 -21.80983  67.57962
  16 -22.85504 -22.85504  72.56371
  17 -19.37813 -19.37813  80.49430
  18 -19.37813 -19.37813  80.49430
  19 -20.11278 -20.11278  83.09952
  20 -20.71276 -20.71276  88.86691
  21 -22.74103 -22.74103  97.05101
  22  -7.12388  -7.12388 -21.38448
  23  -9.74047  -9.74047   0.09535
  24  -9.74047  -9.74047   0.09535
 kpt= (  2.50000000E-01  2.50000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.21696 -21.21696  72.63811
   9 -21.78999 -21.78999  77.23751
  10 -21.78999 -21.78999  77.23751
  11 -20.26728 -20.26728  61.58691
  12 -20.42861 -20.42861  62.00005
  13 -20.42861 -20.42861  62.00005
  14 -22.19961 -22.19961  69.53911
  15 -22.19961 -22.19961  69.53911
  16 -22.43381 -22.43381  70.51117
  17 -18.79594 -18.79594  77.60799
  18 -19.02437 -19.02437  78.79971
  19 -19.02437 -19.02437  78.79971
  20 -21.40419 -21.40419  91.63920
  21 -21.40419 -21.40419  91.63920
  22  -8.92894  -8.92894  -7.15341
  23  -8.79068  -8.79068  -4.07279
  24  -9.62721  -9.62721  -0.96104
  25  -9.62721  -9.62721  -0.96104
 kpt= (  3.75000000E-01  2.50000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.30023 -21.30023  75.52276
   9 -21.50114 -21.50114  74.84391
  10 -21.86024 -21.86024  77.74626
  11 -19.75587 -19.75587  58.56282
  12 -20.04153 -20.04153  60.17819
  13 -20.40555 -20.40555  61.96736
  14 -22.26737 -22.26737  69.82969
  15 -22.24285 -22.24285  69.65303
  16 -22.51808 -22.51808  70.93012
  17 -18.96864 -18.96864  78.63501
  18 -19.35984 -19.35984  80.16143
  19 -19.49576 -19.49576  80.92695
  20 -21.44101 -21.44101  91.98679
  21 -20.49658 -20.49658  83.16121
  22  -9.79856  -9.79856  -1.07290
  23  -9.96490  -9.96490   2.30084
  24  -8.10529  -8.10529  -9.68567
 kpt= (  5.00000000E-01  2.50000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.15983 -21.15983  75.22362
   9 -21.58993 -21.58993  75.52133
  10 -21.95454 -21.95454  78.48355
  11 -19.52241 -19.52241  57.12020
  12 -19.83839 -19.83839  58.99048
  13 -20.42115 -20.42115  62.07062
  14 -22.28194 -22.28194  69.89394
  15 -22.24273 -22.24273  69.63639
  16 -22.54178 -22.54178  71.04939
  17 -18.98788 -18.98788  78.79176
  18 -19.56681 -19.56681  81.04048
  19 -19.70730 -19.70730  81.88497
  20 -21.45416 -21.45416  92.12234
  21 -21.13937 -21.13937  87.73968
  22  -8.05220  -8.05220 -14.97517
  23 -11.30057 -11.30057  12.49844
  24  -7.44670  -7.44670 -14.16531
 kpt= (  3.75000000E-01  3.75000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.10420 -21.10420  74.02984
   9 -21.57763 -21.57763  77.60893
  10 -21.74164 -21.74164  76.72047
  11 -19.43562 -19.43562  56.96193
  12 -19.99618 -19.99618  60.05643
  13 -19.92503 -19.92503  59.34389
  14 -22.35734 -22.35734  70.20001
  15 -22.36825 -22.36825  70.23613
  16 -22.68891 -22.68891  71.75738
  17 -19.40403 -19.40403  80.57129
  18 -19.48755 -19.48755  81.03248
  19 -19.82579 -19.82579  82.31097
  20 -21.48040 -21.48040  91.60605
  21 -22.19445 -22.19445  94.43410
  22  -8.16015  -8.16015 -13.11682
  23  -8.62256  -8.62256  -6.03256
  24  -9.88994  -9.88994   1.37959
 kpt= (  5.00000000E-01  3.75000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.10270 -21.10270  74.76430
   9 -21.43497 -21.43497  76.53508
  10 -21.83220 -21.83220  77.42567
  11 -19.29612 -19.29612  56.25029
  12 -19.76017 -19.76017  58.53315
  13 -19.97213 -19.97213  59.76158
  14 -22.38095 -22.38095  70.30796
  15 -22.38187 -22.38187  70.30027
  16 -22.76237 -22.76237  72.11675
  17 -19.46188 -19.46188  80.96511
  18 -19.66098 -19.66098  81.77903
  19 -20.00065 -20.00065  83.04443
  20 -21.53080 -21.53080  91.94023
  21 -22.31535 -22.31535  94.72621
  22  -7.18272  -7.18272 -20.41442
  23 -10.42387 -10.42387   6.19103
  24  -8.56613  -8.56613  -7.07209
 kpt= (  5.00000000E-01  5.00000000E-01  2.50000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -20.91419 -20.91419  73.39964
   9 -21.45765 -21.45765  77.40093
  10 -19.18431 -19.18431  55.75646
  11 -21.90649 -21.90649  78.00407
  12 -19.77142 -19.77142  58.59226
  13 -19.77142 -19.77142  58.59226
  14 -22.39816 -22.39816  70.37851
  15 -22.39816 -22.39816  70.37851
  16 -22.85792 -22.85792  72.57951
  17 -19.67749 -19.67749  81.95493
  18 -19.67749 -19.67749  81.95493
  19 -20.15611 -20.15611  83.65428
  20 -21.53966 -21.53966  91.94218
  21 -22.74418 -22.74418  97.08617
  22  -6.18206  -6.18206 -27.13347
  23  -9.74348  -9.74348   0.83075
  24  -9.74348  -9.74348   0.83075
 kpt= (  3.75000000E-01  3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -20.92834 -20.92834  72.68791
   9 -21.59564 -21.59564  77.73084
  10 -21.59564 -21.59564  77.73084
  11 -19.42824 -19.42824  56.91299
  12 -19.55883 -19.55883  57.65897
  13 -19.55882 -19.55882  57.65897
  14 -22.62846 -22.62846  71.47539
  15 -22.62846 -22.62846  71.47539
  16 -22.73265 -22.73265  71.97383
  17 -19.76860 -19.76860  82.18431
  18 -19.89267 -19.89267  82.94387
  19 -19.89267 -19.89267  82.94387
  20 -22.24954 -22.24954  94.88710
  21 -22.24954 -22.24954  94.88710
  22  -6.90863  -6.90863 -21.71768
  23  -8.54894  -8.54894  -5.50897
  24  -9.86330  -9.86330   1.96433
  25  -9.86330  -9.86330   1.96433
 kpt= (  5.00000000E-01  3.75000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -21.03281 -21.03281  74.20523
   9 -21.32788 -21.32788  75.72920
  10 -21.60824 -21.60824  77.82343
  11 -19.33055 -19.33055  56.46262
  12 -19.42697 -19.42697  57.03053
  13 -19.54190 -19.54190  57.56630
  14 -22.66418 -22.66418  71.64730
  15 -22.70937 -22.70937  71.86415
  16 -22.79022 -22.79022  72.25505
  17 -19.86585 -19.86585  82.87551
  18 -19.99379 -19.99379  83.24959
  19 -20.08152 -20.08152  83.82387
  20 -22.26758 -22.26758  95.04083
  21 -22.48887 -22.48887  95.80067
  22  -5.89149  -5.89149 -28.73830
  23 -10.17132 -10.17132   5.20858
  24  -8.98951  -8.98951  -2.86747
 kpt= (  5.00000000E-01  5.00000000E-01  3.75000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -20.83808 -20.83808  72.79091
   9 -21.46346 -21.46346  77.43223
  10 -21.50419 -21.50419  77.04014
  11 -19.25593 -19.25593  56.18266
  12 -19.40897 -19.40897  56.92643
  13 -19.40897 -19.40897  56.92643
  14 -22.75332 -22.75332  72.08121
  15 -22.75332 -22.75332  72.08121
  16 -22.86355 -22.86355  72.61298
  17 -20.05854 -20.05854  83.78575
  18 -20.05854 -20.05854  83.78575
  19 -20.21225 -20.21225  84.32512
  20 -22.37697 -22.37697  95.46251
  21 -22.75121 -22.75121  97.15092
  22  -5.20800  -5.20800 -33.12325
  23  -9.77488  -9.77488   2.33025
  24  -9.77488  -9.77488   2.33025
 kpt= (  5.00000000E-01  5.00000000E-01  5.00000000E-01) spin= 1:
  ib vxc       vxcval    vhartree
   8 -20.69528 -20.69528  71.76299
   9 -21.47060 -21.47060  77.47514
  10 -21.47060 -21.47060  77.47514
  11 -19.28888 -19.28888  56.38010
  12 -19.28888 -19.28888  56.38010
  13 -19.28888 -19.28888  56.38010
  14 -22.87249 -22.87249  72.66752
  15 -22.87249 -22.87249  72.66752
  16 -22.87249 -22.87249  72.66752
  17 -20.24221 -20.24221  84.66368
  18 -20.24221 -20.24221  84.66368
  19 -20.24221 -20.24221  84.66368
  20 -22.75802 -22.75802  97.20710
  21 -22.75802 -22.75802  97.20710
  22  -4.80397  -4.80397 -35.62484
  23 -10.09755 -10.09755  11.72995
  24 -10.09755 -10.09755  11.72995
  25 -10.09755 -10.09755  11.72995
 Er%ID:           4
 Er%Hscr%ID:           4
 Memory needed for Er%epsm1 =        627.9 [Mb]
mkdump_Erread_screening with MPI_IO
 Imaginary frequency for fit located at:   26.1527 [eV]
Killed
--------------------------------------------------------------------------
mpirun has exited due to process rank 11 with PID 5055 on
node hpc-n339 exiting improperly. There are two reasons this could occur:

1. this process did not call "init" before exiting, but others in
the job did. This can cause a job to hang indefinitely while it waits
for all processes to call "init". By rule, if one process calls "init",
then ALL processes must call "init" prior to termination.

2. this process called "init", but exited without calling "finalize".
By rule, all processes that call "init" MUST call "finalize" prior to
exiting or it will be considered an "abnormal termination"

This may have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------
