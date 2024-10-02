  ABINIT 
  
  Give name for formatted input file: 
run01.in
  Give name for formatted output file:
run01.out
  Give root name for generic input files:
run1i
  Give root name for generic output files:
run1o
  Give root name for generic temporary files:
run1

.Version 7.10.2 of ABINIT 
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

.Starting date : Thu 13 Aug 2015.
- ( at 10h57 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.10.2
  Build target  : x86_64_linux_intel12.1
  Build date    : 20150220
 
 === Compiler Suite === 
  C compiler       : intel12.1
  C++ compiler     : gnu12.1
  Fortran compiler : intel12.1
  CFLAGS           :  -g -O2 -vec-report0 -O3 -axSSE4.2 -ip
  CXXFLAGS         : -m64 -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
         HAVE_BSE_UNPACKED HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC
 
  HAVE_FC_COMMAND_ARGUMENT        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
              HAVE_FC_EXIT             HAVE_FC_GAMMA   HAVE_FC_IEEE_EXCEPTIONS
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT                  HAVE_MPI
 
                 HAVE_MPI2               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
                HAVE_NUMPY             HAVE_OS_LINUX                HAVE_TIMER
 
         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> run01.in
- output file    -> run01.out
- root for input  files -> run1i
- root for output files -> run1o
 
-instrng :   115 lines of input have been read from file run01.in
 

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 1h.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 14si.pspnc
  read the values zionpsp=  1.0 , pspcod=   1 , lmax=   0
nproj =      0     0     0     0
nprojso =      0     0     0
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2
nproj =      1     1     0     0
nprojso =      0     0     0
 
 inpspheads: deduce mpsang  =   3, n1xccc  =2501.
 
 invars1m : enter jdtset=1
 invars1 : treat image number     1
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : spgroup= 164  P-3 m 1   (=D3d^3)
       Simple Lattice Grid
 
 invars1m : enter jdtset=2
 invars1 : treat image number     1
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : spgroup= 164  P-3 m 1   (=D3d^3)
       Simple Lattice Grid
 
 invars1m : enter jdtset=3
 invars1 : treat image number     1
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : spgroup= 164  P-3 m 1   (=D3d^3)
       Simple Lattice Grid
 
 invars1m : enter jdtset=4
 invars1 : treat image number     1
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xcart  is defined in input file
 ingeo : takes atomic coordinates from input array xcart
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
 
 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : spgroup= 164  P-3 m 1   (=D3d^3)
       Simple Lattice Grid
 invars2: take the default value of fband=  1.25000000E-01
       Simple Lattice Grid
  dtset%nelect=   50.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  0.00  0.00
       Simple Lattice Grid
  dtset%nelect=   50.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
       Simple Lattice Grid
  dtset%nelect=   50.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     5.00
 setshells : ecut_trial =    20.00
 
--- !COMMENT
message: |
    One of the three variables ecutsigx, npwsigx, or nshsigx
     must be non-null. Returning.
src_file: Subroutine Unknown
src_line: 0
...
 
       Simple Lattice Grid
  dtset%nelect=   50.0000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 setshells : ecut_trial =     5.00
 
--- !COMMENT
message: |
    One of the three variables ecuteps, npweps, or nsheps
     must be non-null. Returning.
src_file: Subroutine Unknown
src_line: 0
...
 
 setshells : ecut_trial =    10.00
npfft, npband, npspinor and npkpt:     1    1    1   10
 
--- !WARNING
message: |
    nkpt*nsppol (52) is not a multiple of nproc_kpt (10)
    The k-point parallelisation is not efficient.
src_file: Subroutine Unknown
src_line: 0
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=6 and mkmem  = 52, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=6 and mkqmem = 52, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=6 and mk1mem = 52, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  5.000000E+00 best grid ngfft=      16      16      96
       max ecut=  5.373244E+00
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   96
  Augmented FFT divisions ...................    17   17   96
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    1151
npfft, npband, npspinor and npkpt:     1    1    1   10
 
--- !WARNING
message: |
    nkpt*nsppol (13) is not a multiple of nproc_kpt (10)
    The k-point parallelisation is not efficient.
src_file: Subroutine Unknown
src_line: 0
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 13, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 13, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 13, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 
--- !WARNING
message: |
    Your number of spins*k-points (=13) will not distribute correctly
    with the current number of processors (=10).
    You will leave some empty.
    YOU ARE STRONGLY ADVICED TO ACTIVATE AUTOMATIC PARALLELIZATION!
    PUT "AUTOPARAL=1" IN THE INPUT FILE.
src_file: Subroutine Unknown
src_line: 0
...
 
 For input ecut=  5.000000E+00 best grid ngfft=      16      16      96
       max ecut=  5.373244E+00
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   96
  Augmented FFT divisions ...................    17   17   96
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    1150
npfft, npband, npspinor and npkpt:     1    1    1   10
 
--- !WARNING
message: |
    nkpt*nsppol (13) is not a multiple of nproc_kpt (10)
    The k-point parallelisation is not efficient.
src_file: Subroutine Unknown
src_line: 0
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 13, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 13, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 13, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.956385E+00 best grid ngfft=      16      16      96
       max ecut=  5.373244E+00
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   96
  Augmented FFT divisions ...................    17   17   96
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    1138
npfft, npband, npspinor and npkpt:     1    1    1   10
 
--- !WARNING
message: |
    nkpt*nsppol (13) is not a multiple of nproc_kpt (10)
    The k-point parallelisation is not efficient.
src_file: Subroutine Unknown
src_line: 0
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=2 and mkmem  = 13, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=2 and mkqmem = 13, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=2 and mk1mem = 13, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.956385E+00 best grid ngfft=      16      16      96
       max ecut=  5.373244E+00
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    16   16   96
  Augmented FFT divisions ...................    17   17   96
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    1138
 
 DATASET    1 : space group P-3 m 1 (#164); Bravais hP (primitive hexag.)
 
 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =        27  mffmem =         1
P  mgfft =        96   mkmem =         6 mpssoang=         3     mpw =      1151
  mqgrid =      4631   natom =        14    nfft =     24576    nkpt =        52
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      11.947 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     24.660 Mbytes ; DEN or POT disk file :      0.190 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with      3.0020 MBytes.
 memana : allocated an array of      3.002 Mbytes, for testing purposes.
 memana : allocated      11.947 Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    2 : space group P-3 m 1 (#164); Bravais hP (primitive hexag.)
 
 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =       100  mffmem =         1
P  mgfft =        96   mkmem =         2 mpssoang=         3     mpw =      1150
  mqgrid =      4631   natom =        14    nfft =     24576    nkpt =        13
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                       9.758 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     22.814 Mbytes ; DEN or POT disk file :      0.190 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with      3.5115 MBytes.
 memana : allocated an array of      3.512 Mbytes, for testing purposes.
 memana : allocated       9.758 Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    3 : space group P-3 m 1 (#164); Bravais hP (primitive hexag.)
 
 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =       100  mffmem =         1
P  mgfft =        96   mkmem =         2 mpssoang=         3     mpw =      1138
  mqgrid =      4611   natom =        14    nfft =     24576    nkpt =        13
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      12.715 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     22.576 Mbytes ; DEN or POT disk file :      0.190 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with      3.4749 MBytes.
 
 DATASET    4 : space group P-3 m 1 (#164); Bravais hP (primitive hexag.)
 
 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
  lmnmax =         2   lnmax =         2   mband =       100  mffmem =         1
P  mgfft =        96   mkmem =         2 mpssoang=         3     mpw =      1138
  mqgrid =      4611   natom =        14    nfft =     24576    nkpt =        13
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        12  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      12.715 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     22.576 Mbytes ; DEN or POT disk file :      0.190 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with      3.4749 MBytes.
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
            acell      7.2557731980E+00  7.2557731980E+00  4.6000000000E+01 Bohr
              amu      1.00794000E+00  2.80855000E+01
             bdgw4         25      26
      chksymbreak           0
           diemac      1.20000000E+01
             ecut1     5.00000000E+00 Hartree
             ecut2     5.00000000E+00 Hartree
             ecut3     4.95638476E+00 Hartree
             ecut4     4.95638476E+00 Hartree
          ecuteps1     0.00000000E+00 Hartree
          ecuteps2     0.00000000E+00 Hartree
          ecuteps3     1.99693927E+01 Hartree
          ecuteps4     0.00000000E+00 Hartree
         ecutsigx1     0.00000000E+00 Hartree
         ecutsigx2     0.00000000E+00 Hartree
         ecutsigx3     0.00000000E+00 Hartree
         ecutsigx4     9.95559130E+00 Hartree
          ecutwfn1     0.00000000E+00 Hartree
          ecutwfn2     0.00000000E+00 Hartree
          ecutwfn3     4.95638476E+00 Hartree
          ecutwfn4     4.95638476E+00 Hartree
-          fftalg         112
           getden1          0
           getden2         -1
           getden3          0
           getden4          0
           getkss1          0
           getkss2          0
           getkss3         -1
           getkss4         -2
           getscr1          0
           getscr2          0
           getscr3          0
           getscr4         -1
             iscf1          7
             iscf2         -2
             iscf3          7
             iscf4          7
           istwfk2       1    0    1    0    0    0    0    0    0    1
                         0    1    0
           istwfk3       1    0    1    0    0    0    0    0    0    1
                         0    1    0
           istwfk4       1    0    1    0    0    0    0    0    0    1
                         0    1    0
                       outvar_i_n : Printing only first  50 k-points.
           jdtset        1    2    3    4
              kpt1    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                      -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                      -3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -2.50000000E-01 -1.25000000E-01  2.50000000E-01
                      -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  2.50000000E-01
                      -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                      -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                      -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                      -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                       3.75000000E-01 -1.25000000E-01  1.25000000E-01
                       5.00000000E-01 -1.25000000E-01  2.50000000E-01
                      -3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                      -2.50000000E-01  2.50000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  2.50000000E-01
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -1.25000000E-01  3.75000000E-01  3.75000000E-01
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  5.00000000E-01
                       3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -3.75000000E-01 -3.75000000E-01  3.75000000E-01
                      -2.50000000E-01 -3.75000000E-01  5.00000000E-01
                       2.50000000E-01 -2.50000000E-01  1.25000000E-01
                       1.25000000E-01 -1.25000000E-01  1.25000000E-01
                       3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -3.75000000E-01  0.00000000E+00  0.00000000E+00
                      -1.25000000E-01  0.00000000E+00  2.50000000E-01
                      -1.25000000E-01  1.25000000E-01  3.75000000E-01
                      -2.50000000E-01  2.50000000E-01  3.75000000E-01
                      -1.25000000E-01  2.50000000E-01  5.00000000E-01
                      -3.75000000E-01  3.75000000E-01  3.75000000E-01
                       5.00000000E-01  5.00000000E-01  3.75000000E-01
                       3.75000000E-01 -3.75000000E-01  3.75000000E-01
                       2.50000000E-01 -2.50000000E-01  3.75000000E-01
                       0.00000000E+00 -1.25000000E-01  2.50000000E-01
                       1.25000000E-01 -1.25000000E-01  3.75000000E-01
                      -3.75000000E-01  0.00000000E+00  2.50000000E-01
                      -1.25000000E-01  0.00000000E+00  5.00000000E-01
                       0.00000000E+00 -3.75000000E-01  2.50000000E-01
                      -3.75000000E-01  0.00000000E+00  5.00000000E-01
              kpt2     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                      -2.50000000E-01  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
              kpt3     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                      -2.50000000E-01  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
              kpt4     0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  0.00000000E+00  2.50000000E-01
                       5.00000000E-01  0.00000000E+00  2.50000000E-01
                      -2.50000000E-01  0.00000000E+00  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       0.00000000E+00  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  0.00000000E+00  5.00000000E-01
                       5.00000000E-01  0.00000000E+00  5.00000000E-01
                       2.50000000E-01  2.50000000E-01  5.00000000E-01
                       outvar_i_n : Printing only first  50 k-points.
            kptgw4     0.00000000E+00  0.00000000E+00  0.00000000E+00
         kptrlatt1       8    0    0      0    8    0     -4   -4    4
         kptrlatt2       4    0    0      0    4    0      0    0    4
         kptrlatt3       4    0    0      0    4    0      0    0    4
         kptrlatt4       4    0    0      0    4    0      0    0    4
          kptrlen1     5.80461856E+01
          kptrlen2     2.90230928E+01
          kptrlen3     2.90230928E+01
          kptrlen4     2.90230928E+01
P           mkmem1          6
P           mkmem2          2
P           mkmem3          2
P           mkmem4          2
            natom          14
            nband1         27
            nband2        100
            nband3        100
            nband4        100
         nbandkss1          0
         nbandkss2         -1
         nbandkss3          0
         nbandkss4          0
           nbdbuf1          0
           nbdbuf2          5
           nbdbuf3          0
           nbdbuf4          0
           ndtset           4
            ngfft          16      16      96
             nkpt1         52
             nkpt2         13
             nkpt3         13
             nkpt4         13
           nkptgw1          0
           nkptgw2          0
           nkptgw3          0
           nkptgw4          1
           npweps1          0
           npweps2          0
           npweps3       9015
           npweps4          0
          npwsigx1          0
          npwsigx2          0
          npwsigx3          0
          npwsigx4       3161
           npwwfn1          0
           npwwfn2          0
           npwwfn3       1139
           npwwfn4       1139
           nsheps1          0
           nsheps2          0
           nsheps3       1000
           nsheps4          0
          nshsigx1          0
          nshsigx2          0
          nshsigx3          0
          nshsigx4        392
            nstep         100
             nsym          12
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000  0.000000
              occ3     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000
              occ4     2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
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
                       0.000000  0.000000  0.000000  0.000000
        optdriver1          0
        optdriver2          0
        optdriver3          3
        optdriver4          4
           ppmfrq1     0.00000000E+00 Hartree
           ppmfrq2     0.00000000E+00 Hartree
           ppmfrq3     6.13713734E-01 Hartree
           ppmfrq4     0.00000000E+00 Hartree
            rprim      8.6602540378E-01 -5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  1.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
           shiftk1     0.00000000E+00  0.00000000E+00  5.00000000E-01
           shiftk2     0.00000000E+00  0.00000000E+00  0.00000000E+00
           shiftk3     0.00000000E+00  0.00000000E+00  0.00000000E+00
           shiftk4     0.00000000E+00  0.00000000E+00  0.00000000E+00
          spgroup         164
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   1  1  0   0  0  1       1  0  0  -1 -1  0   0  0 -1
                       0  1  0  -1 -1  0   0  0  1       0 -1  0   1  1  0   0  0 -1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1 -1  0   1  0  0   0  0  1       1  1  0  -1  0  0   0  0 -1
                       1  1  0   0 -1  0   0  0  1      -1 -1  0   0  1  0   0  0 -1
           tolwfr      1.00000000E-10
            typat      1  2  2  2  2  2  2  2  2  2  2  2  2  1
              wtk1       0.03125    0.01563    0.03125    0.01563    0.01563    0.04688
                         0.03125    0.01563    0.03125    0.01563    0.01563    0.01563
                         0.03125    0.01563    0.03125    0.01563    0.04688    0.03125
                         0.01563    0.03125    0.01563    0.01563    0.00781    0.02344
                         0.03125    0.00781    0.01563    0.02344    0.03125    0.00781
                         0.01563    0.01563    0.02344    0.00781    0.01563    0.01563
                         0.01563    0.00781    0.02344    0.01563    0.00781    0.02344
                         0.00781    0.02344    0.01563    0.00781    0.01563    0.01563
                         0.01563    0.01563
              wtk2       0.01563    0.09375    0.04688    0.09375    0.03125    0.09375
                         0.09375    0.09375    0.18750    0.01563    0.09375    0.04688
                         0.09375
              wtk3       0.01563    0.09375    0.04688    0.09375    0.03125    0.09375
                         0.09375    0.09375    0.18750    0.01563    0.09375    0.04688
                         0.09375
              wtk4       0.01563    0.09375    0.04688    0.09375    0.03125    0.09375
                         0.09375    0.09375    0.18750    0.01563    0.09375    0.04688
                         0.09375
                       outvars : Printing only first  50 k-points.
           xangst      0.0000000000E+00  0.0000000000E+00  9.7117963611E+00
                       0.0000000000E+00  0.0000000000E+00  8.2294063669E+00
                       2.2167882080E+00  0.0000000000E+00  7.4456533796E+00
                       2.2167882080E+00  0.0000000000E+00  5.0943944176E+00
                       1.1083941040E+00 -1.9197949029E+00  4.3106414303E+00
                       1.1083941040E+00 -1.9197949029E+00  1.9593824683E+00
                       0.0000000000E+00  0.0000000000E+00  1.1756294810E+00
                       0.0000000000E+00  0.0000000000E+00 -1.1756294810E+00
                      -1.1083941040E+00  1.9197949029E+00 -1.9593824683E+00
                      -1.1083941040E+00  1.9197949029E+00 -4.3106414303E+00
                      -2.2167882080E+00  0.0000000000E+00 -5.0943944176E+00
                      -2.2167882080E+00  0.0000000000E+00 -7.4456533796E+00
                       0.0000000000E+00  0.0000000000E+00 -8.2294063669E+00
                       0.0000000000E+00  0.0000000000E+00 -9.7117963611E+00
            xcart      0.0000000000E+00  0.0000000000E+00  1.8352635381E+01
                       0.0000000000E+00  0.0000000000E+00  1.5551324270E+01
                       4.1891226077E+00  0.0000000000E+00  1.4070245768E+01
                       4.1891226077E+00  0.0000000000E+00  9.6270102622E+00
                       2.0945613038E+00 -3.6278865978E+00  8.1459317603E+00
                       2.0945613038E+00 -3.6278865978E+00  3.7026962547E+00
                       0.0000000000E+00  0.0000000000E+00  2.2216177528E+00
                       0.0000000000E+00  0.0000000000E+00 -2.2216177528E+00
                      -2.0945613038E+00  3.6278865978E+00 -3.7026962547E+00
                      -2.0945613038E+00  3.6278865978E+00 -8.1459317603E+00
                      -4.1891226077E+00  0.0000000000E+00 -9.6270102622E+00
                      -4.1891226077E+00  0.0000000000E+00 -1.4070245768E+01
                       0.0000000000E+00  0.0000000000E+00 -1.5551324270E+01
                       0.0000000000E+00  0.0000000000E+00 -1.8352635381E+01
             xred      0.0000000000E+00  0.0000000000E+00  3.9897033436E-01
                       0.0000000000E+00  0.0000000000E+00  3.3807226673E-01
                       6.6666666645E-01  3.3333333322E-01  3.0587490800E-01
                       6.6666666645E-01  3.3333333322E-01  2.0928283179E-01
                       3.3333333322E-01 -3.3333333322E-01  1.7708547305E-01
                       3.3333333322E-01 -3.3333333322E-01  8.0493396841E-02
                       0.0000000000E+00  0.0000000000E+00  4.8296038105E-02
                       0.0000000000E+00  0.0000000000E+00 -4.8296038105E-02
                      -3.3333333322E-01  3.3333333322E-01 -8.0493396841E-02
                      -3.3333333322E-01  3.3333333322E-01 -1.7708547305E-01
                      -6.6666666645E-01 -3.3333333322E-01 -2.0928283179E-01
                      -6.6666666645E-01 -3.3333333322E-01 -3.0587490800E-01
                       0.0000000000E+00  0.0000000000E+00 -3.3807226673E-01
                       0.0000000000E+00  0.0000000000E+00 -3.9897033436E-01
            znucl        1.00000   14.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   1.
 
 chkinp: Checking input parameters for consistency, jdtset=   2.
 Checking if input is consistent with KSS generation
 
 chkinp: Checking input parameters for consistency, jdtset=   3.
 
 chkinp: Checking input parameters for consistency, jdtset=   4.
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
-   nproc =   10
 
 
 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Unit cell volume ucvol=  2.0972773E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  96
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.07331
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 1h.pspnc
- pspatm: opening atomic psp file    1h.pspnc
-  Troullier-Martins psp for element  H         Thu Oct 27 17:28:54 EDT 1994
-  1.00000   1.00000    940714                znucl, zion, pspdat
    1    1    0    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   7.740  11.990    0   1.5855604        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
 Note: local psp for atom with Z=  1.0
 pspatm: epsatm=    0.04198703
         --- l  ekb(1:nproj) -->
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is 14si.pspnc
- pspatm: opening atomic psp file    14si.pspnc
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
 
   8.64520596E+02                                ecore*ucvol(ha*bohr**3)
   1 14  1 14  1 14  1 14  1 14  1 14
   2 13  2 13  2 13  2 13  2 13  2 13
   3 12  3 12  3 12  3 12  3 12  3 12
   4 11  4 11  4 11  4 11  4 11  4 11
   5 10  5 10  5 10  5 10  5 10  5 10
   6  9  6  9  6  9  6  9  6  9  6  9
   7  8  7  8  7  8  7  8  7  8  7  8
   8  7  8  7  8  7  8  7  8  7  8  7
   9  6  9  6  9  6  9  6  9  6  9  6
  10  5 10  5 10  5 10  5 10  5 10  5
  11  4 11  4 11  4 11  4 11  4 11  4
  12  3 12  3 12  3 12  3 12  3 12  3
  13  2 13  2 13  2 13  2 13  2 13  2
  14  1 14  1 14  1 14  1 14  1 14  1
 wfconv:    27 bands initialized randomly with npw=  1126, for ikpt=     1
 wfconv:    27 bands initialized randomly with npw=  1120, for ikpt=     2
 wfconv:    27 bands initialized randomly with npw=  1110, for ikpt=     3
 wfconv:    27 bands initialized randomly with npw=  1108, for ikpt=     4
 wfconv:    27 bands initialized randomly with npw=  1109, for ikpt=     5
 wfconv:    27 bands initialized randomly with npw=  1113, for ikpt=     6
 
_setup2: Arith. and geom. avg. npw (full set) are    1120.258    1120.207
 initro : for itypat=  1, take decay length=      0.6000,
 initro : indeed, coreel=      0.0000, nval=  1 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.
 
================================================================================
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  96
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.07331
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    1.7475E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1731E-05  at reduced coord.    0.5625    0.1250    0.5000
,  Integrated=    5.0000E+01
 ETOT  1  -54.164336810723    -5.416E+01 1.042E-02 2.112E+02
 scprqt: <Vxc>= -2.9671565E-01 hartree
 
Simple mixing update:
  residual square of the potential :   8.80206431615294
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    1.6997E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    5.3407E-06  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT  2  -54.216278251664    -5.194E-02 8.794E-04 6.566E+01
 scprqt: <Vxc>= -2.9921998E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.280
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    1.6845E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    7.0236E-06  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT  3  -54.219046336377    -2.768E-03 7.836E-04 2.333E+01
 scprqt: <Vxc>= -3.0005578E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.92     -0.995      0.773E-01
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    1.6862E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    9.2801E-06  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT  4  -54.220410588942    -1.364E-03 2.295E-04 2.864E+00
 scprqt: <Vxc>= -3.0062703E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.31     -0.163     -0.195      0.453E-01
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    1.6820E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.0623E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT  5  -54.220542664298    -1.321E-04 1.417E-04 2.061E-01
 scprqt: <Vxc>= -3.0082946E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26     -0.798E-01 -0.356      0.198     -0.192E-01
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1148E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT  6  -54.220563069129    -2.040E-05 3.015E-05 1.323E-02
 scprqt: <Vxc>= -3.0087584E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.41     -0.343     -0.134      0.114     -0.462E-01
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    1.6826E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1374E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT  7  -54.220563860245    -7.911E-07 1.905E-05 5.899E-04
 scprqt: <Vxc>= -3.0089838E-01 hartree
 
 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.10     -0.113E-01 -0.110      0.229E-02  0.368E-01
 
 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1388E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT  8  -54.220564004380    -1.441E-07 1.579E-05 1.782E-05
 scprqt: <Vxc>= -3.0089893E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03      0.551E-01 -0.106      0.217E-01  0.781E-02
 
 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT  9  -54.220564007304    -2.924E-09 1.193E-05 3.302E-06
 scprqt: <Vxc>= -3.0089901E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.46     -0.529      0.664E-01  0.506E-02 -0.980E-03
 
 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 10  -54.220564010830    -3.525E-09 1.330E-05 3.688E-06
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.499      0.625     -0.135      0.104E-01  0.608E-03
 
 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 11  -54.220564010989    -1.592E-10 9.268E-06 1.974E-06
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.35      -1.56      0.275     -0.730E-01  0.435E-02
 
 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 12  -54.220564011159    -1.706E-10 1.196E-05 3.499E-07
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.26      -2.48       1.18      0.415E-01  0.807E-03
 
 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 13  -54.220564011229    -6.943E-11 7.561E-06 1.494E-08
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.73      -1.39       1.33     -0.651     -0.271E-01
 
 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 14  -54.220564011231    -1.911E-12 9.861E-06 3.363E-09
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.60     -0.796      0.285     -0.207      0.123
 
 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 15  -54.220564011231    -9.237E-14 6.047E-06 1.067E-09
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.26      -1.75      0.543     -0.279E-01 -0.149E-01
 
 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 16  -54.220564011231    -3.411E-13 7.561E-06 2.650E-11
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.50     -0.860      0.461     -0.936E-01 -0.244E-01
 
 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 17  -54.220564011231     2.984E-13 4.667E-06 1.248E-12
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.63     -0.906      0.434     -0.206      0.391E-01
 
 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 18  -54.220564011230     6.537E-13 5.480E-06 1.442E-12
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.886      0.300     -0.243      0.108     -0.652E-01
 
 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 19  -54.220564011232    -1.329E-12 3.485E-06 2.047E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.16      -1.09     -0.182      0.116     -0.196E-01
 
 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 20  -54.220564011230     1.386E-12 3.813E-06 5.586E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.644       1.31     -0.999      0.103E-01  0.249E-01
 
 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 21  -54.220564011231    -8.029E-13 2.536E-06 1.201E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.85      -2.73      -1.25       1.18     -0.373E-01
 
 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 22  -54.220564011231     3.695E-13 2.580E-06 3.938E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.965       1.92      -2.17      0.547E-02  0.327
 
 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 23  -54.220564011232    -1.080E-12 1.809E-06 8.436E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.87      -2.09     -0.665       1.06     -0.192
 
 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 24  -54.220564011231     8.100E-13 1.815E-06 2.081E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.527       2.10      -1.74     -0.251      0.472
 
 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 25  -54.220564011231    -4.476E-13 1.273E-06 4.200E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.78     -0.882      0.157     -0.917E-01 -0.217E-01
 
 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 26  -54.220564011231    -7.816E-14 1.319E-06 1.502E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.21       2.81     -0.313     -0.855      0.581
 
 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 27  -54.220564011231     1.137E-13 8.860E-07 1.612E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.462E-01 -0.785       2.28     -0.289     -0.363
 
 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 28  -54.220564011231    -4.974E-14 9.488E-07 3.185E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.98       2.18      0.512      0.111      0.210
 
 ITER STEP NUMBER    29
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 29
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 29  -54.220564011231     7.816E-13 6.126E-07 2.840E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.487      -2.50       2.06      0.464      0.248
 
 ITER STEP NUMBER    30
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 30
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 30  -54.220564011232    -9.237E-13 6.770E-07 5.421E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.47       2.24      -1.34      0.699      0.568
 
 ITER STEP NUMBER    31
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 31
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 31  -54.220564011231     6.253E-13 4.215E-07 3.389E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.39      -1.04     -0.631      -1.88       2.40
 
 ITER STEP NUMBER    32
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 32
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 32  -54.220564011230     7.248E-13 4.804E-07 4.285E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.232      0.961     -0.765     -0.803      -1.65
 
 ITER STEP NUMBER    33
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 33
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 33  -54.220564011231    -1.023E-12 2.890E-07 3.370E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.67      0.177       3.47     -0.775      -1.75
 
 ITER STEP NUMBER    34
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 34
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 34  -54.220564011231     2.345E-13 3.396E-07 6.239E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      -2.05      0.129       1.41      -1.74
 
 ITER STEP NUMBER    35
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 35
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 35  -54.220564011230     6.466E-13 1.977E-07 7.721E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.09      0.966     -0.401E-01 -0.458E-02   1.58
 
 ITER STEP NUMBER    36
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 36
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 36  -54.220564011231    -3.979E-13 2.394E-07 2.713E-13
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.22      0.976      -5.68      0.903E-01  0.714
 
 ITER STEP NUMBER    37
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 37
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 37  -54.220564011231    -6.537E-13 1.351E-07 1.531E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.12     -0.389     -0.243E-01 -0.550      0.210
 
 ITER STEP NUMBER    38
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 38
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 38  -54.220564011231     1.421E-14 1.684E-07 3.779E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.472      0.605     -0.272     -0.319E-01 -0.655
 
 ITER STEP NUMBER    39
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 39
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 39  -54.220564011231     1.137E-13 9.216E-08 2.219E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11     -0.509      0.586     -0.457     -0.147
 
 ITER STEP NUMBER    40
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 40
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 40  -54.220564011231     1.492E-13 1.183E-07 1.998E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.446      0.292     -0.135      0.680     -0.663
 
 ITER STEP NUMBER    41
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 41
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 41  -54.220564011231    -4.263E-14 6.353E-08 1.023E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -4.05       1.44       5.95      -1.23     -0.247
 
 ITER STEP NUMBER    42
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 42
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 42  -54.220564011232    -8.882E-13 8.306E-08 2.168E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.761      0.756       1.64      0.827     -0.755
 
 ITER STEP NUMBER    43
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 43
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 43  -54.220564011231     1.428E-12 4.458E-08 5.672E-18
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.640     -0.388      0.180      0.697      0.319
 
 ITER STEP NUMBER    44
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 44
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 44  -54.220564011230     1.634E-13 5.828E-08 2.802E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.349      0.974     -0.279      0.110      0.852
 
 ITER STEP NUMBER    45
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 45
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 45  -54.220564011231    -5.755E-13 3.127E-08 2.150E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.438     -0.605      0.882     -0.387      0.225
 
 ITER STEP NUMBER    46
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 46
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 46  -54.220564011232    -5.329E-13 4.087E-08 4.348E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.05       1.54      0.625E-01  0.493     -0.326
 
 ITER STEP NUMBER    47
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 47
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 47  -54.220564011231     9.237E-14 2.193E-08 2.936E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.08      -1.62     -0.320      0.982      0.750
 
 ITER STEP NUMBER    48
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 48
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 48  -54.220564011231     3.340E-13 2.865E-08 7.129E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.39       2.97     -0.646      -1.93       1.15
 
 ITER STEP NUMBER    49
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 49
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 49  -54.220564011231     1.634E-13 1.537E-08 5.231E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.67      -4.57       1.02      -1.03     -0.585
 
 ITER STEP NUMBER    50
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 50
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 50  -54.220564011230     4.903E-13 2.008E-08 5.510E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.42       2.16      -3.39     -0.889      -2.18
 
 ITER STEP NUMBER    51
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 51
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 51  -54.220564011232    -1.300E-12 1.078E-08 6.865E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.323       1.34     -0.297     -0.974     -0.851
 
 ITER STEP NUMBER    52
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 52
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 52  -54.220564011231     5.045E-13 1.408E-08 1.082E-14
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.40      0.758       1.51       1.49      -1.79
 
 ITER STEP NUMBER    53
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 53
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 53  -54.220564011231     7.105E-14 7.552E-09 4.973E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.378      -2.50       1.69      0.765       1.65
 
 ITER STEP NUMBER    54
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 54
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 54  -54.220564011231     1.350E-13 9.866E-09 4.044E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.659      0.135      -2.88       4.56      -1.33
 
 ITER STEP NUMBER    55
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 55
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 55  -54.220564011231     5.045E-13 5.293E-09 4.501E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.207      0.625      0.421      -4.22       5.78
 
 ITER STEP NUMBER    56
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 56
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 56  -54.220564011231    -5.329E-13 6.914E-09 4.197E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.361       1.07       1.06      -1.04      -3.77
 
 ITER STEP NUMBER    57
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 57
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 57  -54.220564011231     5.187E-13 3.710E-09 4.425E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.15      0.306       2.45     -0.507      0.251
 
 ITER STEP NUMBER    58
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 58
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 58  -54.220564011231    -5.613E-13 4.846E-09 5.039E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.827      0.536     -0.108       1.32     -0.196
 
 ITER STEP NUMBER    59
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 59
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 59  -54.220564011232    -1.030E-12 2.600E-09 3.865E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -2.00       3.11      -4.52       2.01       4.22
 
 ITER STEP NUMBER    60
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 60
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 60  -54.220564011231     9.948E-13 3.396E-09 6.615E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.84       2.35      -3.41       6.40      -9.86
 
 ITER STEP NUMBER    61
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 61
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 61  -54.220564011232    -3.695E-13 1.822E-09 9.076E-16
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.08       2.01      0.278      -11.3       8.62
 
 ITER STEP NUMBER    62
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 62
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 62  -54.220564011231     6.324E-13 2.380E-09 3.113E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.216       1.02       2.34      0.694      -12.7
 
 ITER STEP NUMBER    63
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 63
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 63  -54.220564011231    -1.634E-13 1.277E-09 3.514E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -3.38       3.22      0.675       1.52       1.44
 
 ITER STEP NUMBER    64
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 64
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 64  -54.220564011231     1.421E-13 1.668E-09 2.598E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.721       1.21      0.313      0.620       2.71
 
 ITER STEP NUMBER    65
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 65
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 65  -54.220564011232    -5.542E-13 8.951E-10 5.086E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.12     -0.662      -4.05      -3.98       2.50
 
 ITER STEP NUMBER    66
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 66
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 66  -54.220564011231     6.466E-13 1.169E-09 2.624E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.265      0.180     -0.291      -3.41      0.341
 
 ITER STEP NUMBER    67
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 67
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 67  -54.220564011231     1.066E-13 6.274E-10 1.195E-15
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -3.54       1.13      -4.37       4.51      -11.3
 
 ITER STEP NUMBER    68
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 68
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 68  -54.220564011231    -5.826E-13 8.192E-10 4.902E-16
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.516      -5.63       3.88      -10.1       6.57
 
 ITER STEP NUMBER    69
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 69
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 69  -54.220564011230     1.322E-12 4.398E-10 8.556E-16
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.359      -3.55       5.80      -2.35      -1.88
 
 ITER STEP NUMBER    70
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 70
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 70  -54.220564011231    -1.201E-12 5.742E-10 2.744E-16
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.34       1.18      0.224      -2.47      0.268
 
 ITER STEP NUMBER    71
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 71
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 71  -54.220564011231     2.842E-13 3.082E-10 1.479E-18
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.58     -0.753     -0.126     -0.129      0.938E-01
 
 ITER STEP NUMBER    72
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 72
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 72  -54.220564011231    -2.487E-13 4.024E-10 2.015E-18
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.50     -0.654      0.263     -0.271      0.550E-01
 
 ITER STEP NUMBER    73
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 73
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 73  -54.220564011231     3.411E-13 2.161E-10 4.556E-19
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.43     -0.442      0.201E-01 -0.267E-01 -0.446E-01
 
 ITER STEP NUMBER    74
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 74
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 74  -54.220564011230     5.542E-13 2.821E-10 1.021E-18
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.52     -0.103     -0.687      0.286     -0.434E-01
 
 ITER STEP NUMBER    75
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 75
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 75  -54.220564011231    -9.237E-13 1.515E-10 7.325E-20
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.756      0.241      0.709E-02 -0.132E-01  0.349E-01
 
 ITER STEP NUMBER    76
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 76
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 76  -54.220564011231     1.705E-13 1.977E-10 4.794E-19
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.134      0.932      0.124      0.432E-02  0.133
 
 ITER STEP NUMBER    77
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 77
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 77  -54.220564011231     2.558E-13 1.062E-10 7.008E-19
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.844       1.18      0.459      0.176      0.104
 
 ITER STEP NUMBER    78
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 78
 Total charge density [el/Bohr^3]
,     Maximum=    1.6825E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.1389E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    5.0000E+01
 ETOT 78  -54.220564011231    -6.111E-13 9.981E-11 4.257E-19
 scprqt: <Vxc>= -3.0089936E-01 hartree
 
 At SCF step   78   max residual=  9.98E-11 < tolwfr=  1.00E-10 =>converged.
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.64476304E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.64476304E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.35550622E-04  sigma(2 1)=  0.00000000E+00
 
   1 14  1 14  1 14  1 14  1 14  1 14
   2 13  2 13  2 13  2 13  2 13  2 13
   3 12  3 12  3 12  3 12  3 12  3 12
   4 11  4 11  4 11  4 11  4 11  4 11
   5 10  5 10  5 10  5 10  5 10  5 10
   6  9  6  9  6  9  6  9  6  9  6  9
   7  8  7  8  7  8  7  8  7  8  7  8
   8  7  8  7  8  7  8  7  8  7  8  7
   9  6  9  6  9  6  9  6  9  6  9  6
  10  5 10  5 10  5 10  5 10  5 10  5
  11  4 11  4 11  4 11  4 11  4 11  4
  12  3 12  3 12  3 12  3 12  3 12  3
  13  2 13  2 13  2 13  2 13  2 13  2
  14  1 14  1 14  1 14  1 14  1 14  1
 ioarr: writing density data
ioarr: file name is run1o_DS1_DEN
ioarr: data written to disk file run1o_DS1_DEN
================================================================================
 
 ----iterations are completed or convergence reached----
 
 
 outwf: write wavefunction to file run1o_DS1_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.03, wall:     0.14
 
 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   1.6220 [eV], located at k-point      :   0.0000  0.0000  0.1250
   Fundamental gap     =   0.8074 [eV], Top of valence bands at :   0.0000  0.0000  0.3750
                                        Bottom of conduction at :   0.5000  0.5000  0.3750
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.64476304E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.64476304E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.35550622E-04  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure= -4.5554E+00 GPa]
- sigma(1 1)=  4.83905912E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  4.83905912E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  3.98803633E+00  sigma(2 1)=  0.00000000E+00
 
================================================================================
== DATASET  2 ==================================================================
-   nproc =   10   -> not optimal: autoparal keyword recommended in input file
 
 mkfilename : getden/=0, take file _DEN from output of DATASET   1.
 
 
 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Unit cell volume ucvol=  2.0972773E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  96
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.07331
 kpgio: loop on k-points done in parallel
   1 14  1 14  1 14  1 14  1 14  1 14
   2 13  2 13  2 13  2 13  2 13  2 13
   3 12  3 12  3 12  3 12  3 12  3 12
   4 11  4 11  4 11  4 11  4 11  4 11
   5 10  5 10  5 10  5 10  5 10  5 10
   6  9  6  9  6  9  6  9  6  9  6  9
   7  8  7  8  7  8  7  8  7  8  7  8
   8  7  8  7  8  7  8  7  8  7  8  7
   9  6  9  6  9  6  9  6  9  6  9  6
  10  5 10  5 10  5 10  5 10  5 10  5
  11  4 11  4 11  4 11  4 11  4 11  4
  12  3 12  3 12  3 12  3 12  3 12  3
  13  2 13  2 13  2 13  2 13  2 13  2
  14  1 14  1 14  1 14  1 14  1 14  1
 wfconv:   100 bands initialized randomly with npw=  1139, for ikpt=     1
 wfconv:   100 bands initialized randomly with npw=  1136, for ikpt=     2
 
 ioarr: reading density data
ioarr: file name is run1o_DS1_DEN
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a density         |  input file contains a density
. ABINIT  code version 7.10.2           |  ABINIT  code version 7.10.2
. date 20150813 bantot 1300 natom   14  |  date 20150813 bantot 1404 natom   14
  nkpt  13 nsym 12 ngfft  16,  16,  96  |  nkpt  52 nsym 12 ngfft  16,  16,  96
  ntypat  2 ecut_eff   5.0000000        |  ntypat  2 ecut_eff   5.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     6.2836839  -3.6278866   0.0000000  |     6.2836839  -3.6278866   0.0000000
     0.0000000   7.2557732   0.0000000  |     0.0000000   7.2557732   0.0000000
     0.0000000   0.0000000  46.0000000  |     0.0000000   0.0000000  46.0000000
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
   -1  0  0  1  1  0  0  0  1           |   -1  0  0  1  1  0  0  0  1
    1  0  0 -1 -1  0  0  0 -1           |    1  0  0 -1 -1  0  0  0 -1
    0  1  0 -1 -1  0  0  0  1           |    0  1  0 -1 -1  0  0  0  1
    0 -1  0  1  1  0  0  0 -1           |    0 -1  0  1  1  0  0  0 -1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
    0  1  0  1  0  0  0  0 -1           |    0  1  0  1  0  0  0  0 -1
   -1 -1  0  1  0  0  0  0  1           |   -1 -1  0  1  0  0  0  0  1
    1  1  0 -1  0  0  0  0 -1           |    1  1  0 -1  0  0  0  0 -1
    1  1  0  0 -1  0  0  0  1           |    1  1  0  0 -1  0  0  0  1
   -1 -1  0  0  1  0  0  0 -1           |   -1 -1  0  0  1  0  0  0 -1
  typat:                                |  typat:
    1  2  2  2  2  2  2  2  2  2  2  2  |    1  2  2  2  2  2  2  2  2  2  2  2
    2  1                                |    2  1
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
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
   znucl:                               |   znucl:
    1.00 14.00                          |    1.00 14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   1.0  |  pspdat 940714 pspcod    1 zion   1.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.3989703  |     0.0000000   0.0000000   0.3989703
     0.0000000   0.0000000   0.3380723  |     0.0000000   0.0000000   0.3380723
     0.6666667   0.3333333   0.3058749  |     0.6666667   0.3333333   0.3058749
     0.6666667   0.3333333   0.2092828  |     0.6666667   0.3333333   0.2092828
     0.3333333  -0.3333333   0.1770855  |     0.3333333  -0.3333333   0.1770855
     0.3333333  -0.3333333   0.0804934  |     0.3333333  -0.3333333   0.0804934
     0.0000000   0.0000000   0.0482960  |     0.0000000   0.0000000   0.0482960
     0.0000000   0.0000000  -0.0482960  |     0.0000000   0.0000000  -0.0482960
    -0.3333333   0.3333333  -0.0804934  |    -0.3333333   0.3333333  -0.0804934
    -0.3333333   0.3333333  -0.1770855  |    -0.3333333   0.3333333  -0.1770855
    -0.6666667  -0.3333333  -0.2092828  |    -0.6666667  -0.3333333  -0.2092828
    -0.6666667  -0.3333333  -0.3058749  |    -0.6666667  -0.3333333  -0.3058749
     0.0000000   0.0000000  -0.3380723  |     0.0000000   0.0000000  -0.3380723
     0.0000000   0.0000000  -0.3989703  |     0.0000000   0.0000000  -0.3989703
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
ioarr: data read from disk file run1o_DS1_DEN
 
================================================================================
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  96
         ecut(hartree)=      5.000   => boxcut(ratio)=   2.07331
 vtorho : nnsclo_now=100, note that nnsclo,dbl_nnsclo,istep=  0 0  1
   1 14  1 14  1 14  1 14  1 14  1 14
   2 13  2 13  2 13  2 13  2 13  2 13
   3 12  3 12  3 12  3 12  3 12  3 12
   4 11  4 11  4 11  4 11  4 11  4 11
   5 10  5 10  5 10  5 10  5 10  5 10
   6  9  6  9  6  9  6  9  6  9  6  9
   7  8  7  8  7  8  7  8  7  8  7  8
   8  7  8  7  8  7  8  7  8  7  8  7
   9  6  9  6  9  6  9  6  9  6  9  6
  10  5 10  5 10  5 10  5 10  5 10  5
  11  4 11  4 11  4 11  4 11  4 11  4
  12  3 12  3 12  3 12  3 12  3 12  3
  13  2 13  2 13  2 13  2 13  2 13  2
  14  1 14  1 14  1 14  1 14  1 14  1
 ioarr: writing density data
ioarr: file name is run1o_DS2_DEN
ioarr: data written to disk file run1o_DS2_DEN
 
======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using diagonalized wavefunctions and energies (kssform=1)
 
 Additional amount of memory required by "outkss" routine=   41.35 Mbytes.
 
 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of g-vectors written on file is:  1601
 
 Since the number of bands to be computed was (-1) or
 too large, it has been set to the max. value. allowed for each k,
 thus, the minimum of the number of plane waves for each k point.
 Number of bands written on file is:  1114
 
 Since the number of bands to be computed
 is equal to the nb of G-vectors found for each k-pt,
 the program will perform complete diagonalizations.
 
 Total amount of disk space required by _KSS file =   355.82 Mb.
  Subdivided into : 
  Header             =     0.02 Mb.
  KB elements        =     1.91 Mb.
  Wavefunctions (PW) =   353.90 Mb.
  PAW projectors     =     0.00 Mb.
 
 
 Opening file for KS structure output: run1o_DS2_KSS
 number of Gamma centered plane waves   1601
 number of Gamma centered shells    213
 number of bands   1114
 maximum angular momentum components      3
 number of symmetry operations 12 (without inversion)
 
 k-point   1
 
 Since the number of bands to be computed was (-1) or
 too large, it has been set to the max. value npw_k*nspinor.
 Eigenvalues in Hartree for ikpt=   1
   1     -0.3052 -0.2974 -0.2845 -0.2676 -0.2481 -0.2303 -0.1216 -0.1030 -0.0702
         -0.0281  0.0184  0.0677  0.0879  0.0879  0.0932  0.0932  0.1015  0.1015
          0.1105  0.1115  0.1115  0.1217  0.1217  0.1290  0.1290  0.1896  0.1936
          0.2009  0.2097  0.2192  0.2248  0.2303  0.2303  0.2433  0.2433  0.2528
          0.2562  0.2562  0.2570  0.2570  0.2570  0.2606  0.2606  0.2619  0.2619
          0.3108  0.3189  0.3719  0.3969  0.4069  0.4069  0.4080  0.4080  0.4101
          0.4164  0.4261  0.4261  0.4272  0.4272  0.4289  0.4345  0.4472  0.4477
          0.4558  0.4558  0.4744  0.4787  0.4961  0.4961  0.5173  0.5223  0.5343
          0.5381  0.5381  0.5573  0.5573  0.5587  0.5684  0.5954  0.5954  0.5995
          0.5995  0.6034  0.6203  0.6465  0.6465  0.6553  0.6553  0.6575  0.6891
          0.7080  0.7080  0.7102  0.7318  0.7318  0.7338  0.7410  0.7410  0.7432
          0.7622  0.7627  0.7627  0.7661  0.7937  0.7985  0.8076  0.8076  0.8154
          0.8154  0.8359  0.8556  0.8693  0.8693  0.8710  0.8710  0.8733  0.8761
          0.9147  0.9168  0.9187  0.9187  0.9250  0.9250  0.9587  0.9589  0.9835
          0.9835  1.0030  1.0030  1.0161  1.0262  1.0340  1.0340  1.0409  1.0410
          1.0410  1.0517  1.0517  1.0525  1.0525  1.0567  1.0567  1.0678  1.0681
          1.0681  1.0700  1.0908  1.0908  1.0956  1.0980  1.0980  1.1129  1.1129
          1.1209  1.1209  1.1254  1.1254  1.1314  1.1314  1.1475  1.1475  1.1492
          1.1492  1.1635  1.1742  1.1833  1.1833  1.1903  1.1926  1.2169  1.2172
          1.2188  1.2267  1.2391  1.2396  1.2396  1.2531  1.2539  1.2539  1.2549
          1.2648  1.2648  1.2704  1.2725  1.2815  1.3320  1.3396  1.3396  1.3451
          1.3451  1.3582  1.3620  1.3620  1.3654  1.3654  1.3688  1.3743  1.3743
          1.3796  1.3796  1.3982  1.3982  1.4044  1.4044  1.4084  1.4205  1.4205
          1.4266  1.4266  1.4365  1.4377  1.4504  1.4504  1.4553  1.4607  1.4607
          1.4656  1.4661  1.4742  1.4742  1.4810  1.4841  1.5040  1.5040  1.5041
          1.5117  1.5142  1.5339  1.5370  1.5370  1.5378  1.5515  1.5717  1.5746
          1.5746  1.5859  1.5859  1.5979  1.5979  1.6007  1.6041  1.6041  1.6160
          1.6271  1.6271  1.6341  1.6381  1.6470  1.6470  1.6524  1.6564  1.6564
          1.6571  1.6571  1.6600  1.6600  1.6613  1.6613  1.6629  1.6629  1.6665
          1.6681  1.6781  1.6781  1.6944  1.6944  1.6992  1.7010  1.7026  1.7026
          1.7050  1.7072  1.7122  1.7126  1.7126  1.7148  1.7225  1.7327  1.7327
          1.7364  1.7426  1.7427  1.7427  1.7467  1.7470  1.7510  1.7510  1.7577
          1.7602  1.7602  1.7622  1.7649  1.7649  1.7659  1.7662  1.7663  1.7663
          1.7842  1.7868  1.7963  1.7963  1.7996  1.7996  1.7997  1.8054  1.8054
          1.8121  1.8123  1.8123  1.8180  1.8371  1.8399  1.8399  1.8438  1.8438
          1.8506  1.8600  1.8904  1.8904  1.8949  1.8971  1.8971  1.8989  1.9043
          1.9043  1.9153  1.9153  1.9247  1.9247  1.9311  1.9311  1.9412  1.9495
          1.9593  1.9596  1.9596  1.9627  1.9651  1.9651  1.9673  1.9676  1.9676
          1.9748  1.9748  1.9748  1.9780  2.0014  2.0022  2.0022  2.0028  2.0059
          2.0059  2.0158  2.0287  2.0287  2.0303  2.0344  2.0428  2.0428  2.0450
          2.0450  2.0461  2.0465  2.0465  2.0478  2.0550  2.0627  2.0780  2.0780
          2.0890  2.0890  2.0892  2.0892  2.0895  2.1003  2.1121  2.1121  2.1167
          2.1177  2.1280  2.1390  2.1390  2.1407  2.1438  2.1438  2.1543  2.1543
          2.1582  2.1582  2.1610  2.1787  2.1808  2.1808  2.1848  2.1854  2.1882
          2.1882  2.2065  2.2086  2.2128  2.2128  2.2147  2.2147  2.2257  2.2324
          2.2324  2.2393  2.2398  2.2398  2.2497  2.2528  2.2601  2.2601  2.2808
          2.2808  2.2907  2.2930  2.2989  2.2989  2.3064  2.3093  2.3122  2.3122
          2.3137  2.3180  2.3180  2.3203  2.3203  2.3284  2.3347  2.3357  2.3715
          2.3721  2.3721  2.3735  2.3774  2.3774  2.3800  2.3800  2.3963  2.3963
          2.4042  2.4042  2.4101  2.4101  2.4144  2.4144  2.4176  2.4244  2.4244
          2.4296  2.4529  2.4646  2.4646  2.4699  2.4699  2.4744  2.4782  2.4789
          2.4856  2.4898  2.5035  2.5040  2.5284  2.5284  2.5303  2.5353  2.5402
          2.5402  2.5421  2.5421  2.5574  2.5574  2.5648  2.5648  2.5650  2.5650
          2.5753  2.5806  2.5982  2.5982  2.6017  2.6041  2.6081  2.6081  2.6499
          2.6547  2.6562  2.6562  2.6562  2.6562  2.6855  2.6855  2.6864  2.6864
          2.6945  2.6972  2.7066  2.7144  2.7279  2.7324  2.7324  2.7357  2.7394
          2.7394  2.7403  2.7403  2.7615  2.7622  2.7622  2.7637  2.7637  2.7668
          2.7801  2.7801  2.7848  2.8066  2.8066  2.8070  2.8091  2.8091  2.8152
          2.8266  2.8473  2.8561  2.8561  2.8715  2.8767  2.8767  2.8783  2.8860
          2.8924  2.8943  2.9082  2.9082  2.9105  2.9119  2.9119  2.9151  2.9225
          2.9265  2.9265  2.9268  2.9268  2.9318  2.9318  2.9324  2.9343  2.9343
          2.9383  2.9388  2.9388  2.9413  2.9516  2.9516  2.9579  2.9591  2.9591
          2.9609  2.9641  2.9641  2.9694  2.9694  2.9855  2.9897  2.9897  2.9934
          2.9934  3.0007  3.0042  3.0042  3.0114  3.0114  3.0147  3.0151  3.0159
          3.0159  3.0181  3.0183  3.0304  3.0305  3.0305  3.0377  3.0377  3.0420
          3.0427  3.0471  3.0615  3.0615  3.0725  3.0725  3.0725  3.0890  3.0927
          3.0928  3.0953  3.0953  3.1017  3.1017  3.1178  3.1377  3.1377  3.1403
          3.1411  3.1411  3.1460  3.1460  3.1507  3.1517  3.1670  3.1670  3.1838
          3.1842  3.1925  3.1925  3.1934  3.1972  3.1998  3.1998  3.2060  3.2122
          3.2122  3.2179  3.2179  3.2239  3.2262  3.2262  3.2310  3.2310  3.2331
          3.2331  3.2388  3.2388  3.2453  3.2472  3.2472  3.2504  3.2504  3.2536
          3.2569  3.2587  3.2601  3.2601  3.2606  3.2606  3.2681  3.2681  3.2758
          3.2774  3.2774  3.2929  3.2943  3.2947  3.2947  3.3009  3.3014  3.3081
          3.3081  3.3190  3.3274  3.3274  3.3277  3.3277  3.3541  3.3544  3.3551
          3.3551  3.3564  3.3564  3.3674  3.3716  3.3775  3.3775  3.3797  3.3797
          3.3850  3.3850  3.3866  3.3876  3.3876  3.3995  3.4025  3.4025  3.4049
          3.4073  3.4079  3.4079  3.4121  3.4122  3.4332  3.4332  3.4413  3.4413
          3.4473  3.4490  3.4490  3.4526  3.4526  3.4559  3.4559  3.4571  3.4571
          3.4573  3.4573  3.4592  3.4602  3.4679  3.4685  3.4722  3.4722  3.4849
          3.4849  3.4910  3.4937  3.4940  3.4946  3.4996  3.5010  3.5010  3.5139
          3.5249  3.5249  3.5310  3.5325  3.5325  3.5359  3.5359  3.5398  3.5420
          3.5420  3.5470  3.5527  3.5527  3.5640  3.5640  3.5705  3.5718  3.5718
          3.5838  3.5838  3.5848  3.5909  3.5909  3.5934  3.5955  3.5956  3.5956
          3.5985  3.5996  3.5996  3.6026  3.6100  3.6120  3.6120  3.6170  3.6170
          3.6194  3.6235  3.6235  3.6378  3.6378  3.6379  3.6408  3.6408  3.6411
          3.6446  3.6479  3.6479  3.6549  3.6592  3.6620  3.6670  3.6670  3.6678
          3.6678  3.6733  3.6738  3.6738  3.6764  3.6764  3.6865  3.6914  3.6955
          3.6955  3.6968  3.6968  3.6975  3.7061  3.7061  3.7076  3.7076  3.7103
          3.7103  3.7179  3.7179  3.7179  3.7255  3.7255  3.7264  3.7329  3.7329
          3.7376  3.7525  3.7525  3.7533  3.7536  3.7536  3.7583  3.7589  3.7766
          3.7766  3.7784  3.7784  3.7806  3.7831  3.7858  3.7940  3.7940  3.7992
          3.7997  3.8001  3.8005  3.8005  3.8169  3.8194  3.8223  3.8223  3.8301
          3.8301  3.8354  3.8354  3.8357  3.8357  3.8456  3.8474  3.8474  3.8482
          3.8482  3.8488  3.8541  3.8618  3.8783  3.8909  3.8909  3.8962  3.8962
          3.8974  3.8991  3.9023  3.9023  3.9079  3.9079  3.9111  3.9111  3.9146
          3.9167  3.9186  3.9201  3.9226  3.9226  3.9273  3.9382  3.9382  3.9392
          3.9392  3.9536  3.9578  3.9578  3.9653  3.9654  3.9654  3.9672  3.9672
          3.9698  3.9741  3.9754  3.9792  3.9792  3.9892  4.0048  4.0128  4.0150
          4.0150  4.0151  4.0151  4.0336  4.0336  4.0370  4.0381  4.0381  4.0412
          4.0412  4.0419  4.0419  4.0472  4.0561  4.0561  4.0601  4.0601  4.0628
          4.0628  4.0747  4.0747  4.0750  4.0761  4.0771  4.0771  4.1022  4.1046
          4.1121  4.1121  4.1122  4.1122  4.1176  4.1180  4.1237  4.1241  4.1296
          4.1296  4.1337  4.1347  4.1347  4.1349  4.1349  4.1373  4.1455  4.1455
          4.1537  4.1586  4.1586  4.1626  4.1626  4.1719  4.1722  4.1732  4.1732
          4.1734  4.1804  4.1820  4.1843  4.1843  4.1851  4.1875  4.1875  4.1884
          4.1900  4.1900  4.1944  4.1944  4.1946  4.1946  4.2003  4.2003  4.2053
          4.2063  4.2063  4.2064  4.2174  4.2174  4.2232  4.2232  4.2277  4.2307
          4.2307  4.2320  4.2320  4.2348  4.2350  4.2350  4.2364  4.2364  4.2433
          4.2448  4.2536  4.2592  4.2597  4.2639  4.2643  4.2643  4.2717  4.2717
          4.2862  4.2862  4.2884  4.2884  4.2950  4.2955  4.2968  4.2968  4.2968
          4.2968  4.3294  4.3308  4.3545  4.3545  4.3554  4.3554  4.3790  4.3790
          4.3851  4.3851  4.3885  4.3908  4.3908  4.3934  4.4024  4.4070  4.4138
          4.4138  4.4194  4.4195  4.4195  4.4219  4.4414  4.4478  4.4478  4.4488
          4.4505  4.4505  4.4537  4.4543  4.4547  4.4557  4.4557  4.4565  4.4571
          4.4571  4.4715  4.4715  4.4741  4.4741  4.4750  4.4768  4.4768  4.4794
          4.4794  4.4795  4.4803  4.4803  4.4861  4.4861  4.4868  4.4878  4.4928
          4.4928  4.4976  4.4976  4.5110  4.5110  4.5118  4.5119  4.5233  4.5233
          4.5253  4.5325  4.5411  4.5411  4.5419  4.5419  4.5435  4.5435  4.5447
          4.5447  4.5451  4.5494  4.5723  4.5729  4.5729  4.5741  4.5794  4.5794
          4.6144  4.6182  4.6182  4.6198  4.6249  4.6249  4.6712  4.6791  4.6793
          4.6793  4.6822  4.6822  4.6831  4.6831  4.6862  4.6862  4.6867  4.6916
          4.6923  4.6988  4.6988  4.7048  4.7048  4.7122  4.7122  4.7159  4.7159
          4.7176  4.7304  4.7319  4.7325  4.7341  4.7380  4.7380  4.7439  4.7439
          4.7486  4.7508  4.7523  4.7523  4.7532  4.7532  4.7541
 Writing out eigenvalues/vectors for ikpt=  1
 Occupation numbers for ikpt=  1
   1      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 
 k-point   2
 
 Since the number of bands to be computed was (-1) or
 too large, it has been set to the max. value npw_k*nspinor.
 Eigenvalues in Hartree for ikpt=   2
   2     -0.2792 -0.2710 -0.2584 -0.2417 -0.2229 -0.2042 -0.1152 -0.0982 -0.0708
         -0.0444 -0.0239 -0.0128 -0.0069  0.0047  0.0147  0.0254  0.0451  0.0494
          0.0565  0.0673  0.0676  0.0804  0.0932  0.0932  0.1025  0.1762  0.1860
          0.1962  0.2097  0.2131  0.2260  0.2419  0.2548  0.2636  0.2645  0.2723
          0.2767  0.2853  0.3035  0.3116  0.3179  0.3325  0.3334  0.3403  0.3431
          0.3482  0.3496  0.3576  0.3595  0.3722  0.3782  0.3834  0.3954  0.4002
          0.4125  0.4206  0.4271  0.4501  0.4516  0.4630  0.4737  0.4778  0.4804
          0.4956  0.5134  0.5171  0.5317  0.5417  0.5455  0.5545  0.5597  0.5683
          0.5762  0.5866  0.5947  0.6009  0.6069  0.6184  0.6202  0.6235  0.6320
          0.6473  0.6486  0.6522  0.6572  0.6644  0.6694  0.6755  0.6756  0.6852
          0.6945  0.7116  0.7133  0.7269  0.7305  0.7492  0.7507  0.7657  0.7660
          0.7746  0.7802  0.7876  0.7946  0.7973  0.7995  0.8035  0.8072  0.8114
          0.8171  0.8248  0.8275  0.8291  0.8344  0.8405  0.8497  0.8578  0.8657
          0.8663  0.8699  0.8769  0.8863  0.8997  0.9028  0.9135  0.9191  0.9247
          0.9290  0.9369  0.9481  0.9593  0.9641  0.9715  0.9908  0.9931  1.0097
          1.0125  1.0157  1.0197  1.0269  1.0377  1.0504  1.0569  1.0689  1.0699
          1.0738  1.0758  1.0793  1.0835  1.0961  1.0983  1.1019  1.1140  1.1167
          1.1237  1.1275  1.1289  1.1352  1.1364  1.1468  1.1486  1.1508  1.1570
          1.1612  1.1617  1.1770  1.1805  1.1889  1.1907  1.2018  1.2069  1.2091
          1.2094  1.2129  1.2169  1.2208  1.2252  1.2265  1.2319  1.2361  1.2424
          1.2458  1.2489  1.2544  1.2697  1.2779  1.2846  1.2975  1.2981  1.3000
          1.3050  1.3125  1.3189  1.3240  1.3287  1.3511  1.3515  1.3529  1.3589
          1.3735  1.3834  1.3900  1.3912  1.3963  1.3992  1.4068  1.4150  1.4196
          1.4244  1.4251  1.4255  1.4362  1.4388  1.4400  1.4471  1.4504  1.4576
          1.4678  1.4693  1.4695  1.4774  1.4779  1.4803  1.4890  1.4966  1.4981
          1.5024  1.5044  1.5110  1.5111  1.5157  1.5180  1.5208  1.5229  1.5280
          1.5293  1.5394  1.5398  1.5407  1.5430  1.5482  1.5520  1.5536  1.5554
          1.5625  1.5667  1.5700  1.5713  1.5727  1.5805  1.5866  1.5901  1.5969
          1.6034  1.6086  1.6093  1.6147  1.6230  1.6245  1.6321  1.6356  1.6468
          1.6486  1.6546  1.6649  1.6665  1.6696  1.6701  1.6736  1.6879  1.6976
          1.6984  1.7057  1.7059  1.7143  1.7172  1.7207  1.7308  1.7441  1.7448
          1.7499  1.7508  1.7550  1.7607  1.7643  1.7701  1.7747  1.7775  1.7831
          1.7841  1.7861  1.7881  1.7952  1.7970  1.8032  1.8083  1.8108  1.8124
          1.8195  1.8211  1.8216  1.8305  1.8429  1.8443  1.8531  1.8541  1.8567
          1.8581  1.8646  1.8700  1.8734  1.8741  1.8757  1.8838  1.8860  1.8893
          1.8967  1.9002  1.9038  1.9133  1.9154  1.9220  1.9287  1.9295  1.9331
          1.9430  1.9435  1.9474  1.9516  1.9573  1.9602  1.9657  1.9665  1.9674
          1.9787  1.9808  1.9827  1.9859  1.9878  1.9910  1.9946  1.9983  2.0006
          2.0043  2.0116  2.0118  2.0160  2.0249  2.0264  2.0287  2.0289  2.0336
          2.0400  2.0401  2.0497  2.0575  2.0641  2.0663  2.0775  2.0778  2.0868
          2.0878  2.0882  2.0949  2.0978  2.0994  2.1039  2.1048  2.1112  2.1125
          2.1164  2.1242  2.1261  2.1287  2.1378  2.1468  2.1480  2.1519  2.1655
          2.1676  2.1725  2.1810  2.1848  2.1883  2.1934  2.1966  2.2015  2.2048
          2.2079  2.2197  2.2216  2.2269  2.2280  2.2322  2.2359  2.2424  2.2442
          2.2460  2.2507  2.2590  2.2636  2.2647  2.2698  2.2735  2.2783  2.2787
          2.2824  2.2845  2.2886  2.2919  2.2978  2.3041  2.3112  2.3126  2.3138
          2.3201  2.3222  2.3294  2.3301  2.3361  2.3508  2.3532  2.3538  2.3592
          2.3636  2.3664  2.3729  2.3812  2.3838  2.3928  2.3997  2.4015  2.4032
          2.4147  2.4194  2.4223  2.4272  2.4299  2.4361  2.4367  2.4383  2.4411
          2.4420  2.4435  2.4504  2.4559  2.4560  2.4590  2.4619  2.4704  2.4721
          2.4746  2.4757  2.4773  2.4797  2.4813  2.4879  2.4945  2.4969  2.5004
          2.5069  2.5112  2.5142  2.5158  2.5203  2.5255  2.5277  2.5319  2.5328
          2.5337  2.5456  2.5509  2.5529  2.5575  2.5594  2.5606  2.5711  2.5753
          2.5799  2.5903  2.5929  2.5929  2.6067  2.6071  2.6149  2.6319  2.6337
          2.6383  2.6383  2.6443  2.6468  2.6496  2.6524  2.6529  2.6616  2.6640
          2.6667  2.6718  2.6728  2.6745  2.6766  2.6769  2.6795  2.6875  2.6922
          2.6954  2.6985  2.7038  2.7061  2.7074  2.7135  2.7191  2.7212  2.7233
          2.7243  2.7281  2.7288  2.7295  2.7320  2.7330  2.7422  2.7466  2.7572
          2.7621  2.7717  2.7729  2.7771  2.7898  2.7945  2.8027  2.8085  2.8166
          2.8169  2.8199  2.8247  2.8278  2.8331  2.8365  2.8446  2.8464  2.8526
          2.8564  2.8587  2.8610  2.8613  2.8676  2.8738  2.8754  2.8778  2.8840
          2.8894  2.8987  2.8992  2.9038  2.9042  2.9070  2.9102  2.9105  2.9190
          2.9195  2.9216  2.9218  2.9284  2.9336  2.9357  2.9419  2.9422  2.9446
          2.9460  2.9497  2.9537  2.9551  2.9567  2.9598  2.9656  2.9667  2.9722
          2.9792  2.9802  2.9854  2.9893  2.9977  3.0004  3.0020  3.0048  3.0079
          3.0087  3.0200  3.0242  3.0243  3.0268  3.0317  3.0320  3.0359  3.0420
          3.0451  3.0513  3.0527  3.0605  3.0651  3.0685  3.0697  3.0711  3.0799
          3.0870  3.0906  3.0936  3.0959  3.1090  3.1100  3.1128  3.1173  3.1211
          3.1241  3.1278  3.1353  3.1424  3.1455  3.1476  3.1510  3.1520  3.1622
          3.1625  3.1657  3.1704  3.1710  3.1737  3.1770  3.1807  3.1818  3.1840
          3.1859  3.1866  3.1921  3.1923  3.2092  3.2150  3.2185  3.2195  3.2207
          3.2305  3.2314  3.2339  3.2390  3.2422  3.2451  3.2458  3.2502  3.2520
          3.2537  3.2539  3.2558  3.2668  3.2677  3.2726  3.2746  3.2831  3.2892
          3.2907  3.2940  3.2948  3.2961  3.3010  3.3035  3.3123  3.3220  3.3274
          3.3275  3.3303  3.3316  3.3326  3.3398  3.3460  3.3500  3.3514  3.3524
          3.3605  3.3610  3.3635  3.3713  3.3770  3.3775  3.3849  3.3877  3.3940
          3.3962  3.3970  3.3995  3.4057  3.4066  3.4117  3.4148  3.4167  3.4228
          3.4261  3.4296  3.4320  3.4347  3.4364  3.4386  3.4442  3.4484  3.4502
          3.4531  3.4585  3.4610  3.4624  3.4627  3.4680  3.4693  3.4746  3.4769
          3.4777  3.4779  3.4834  3.4853  3.4895  3.4941  3.4973  3.4985  3.5049
          3.5081  3.5178  3.5210  3.5256  3.5295  3.5308  3.5311  3.5322  3.5405
          3.5421  3.5448  3.5476  3.5487  3.5496  3.5517  3.5540  3.5550  3.5600
          3.5608  3.5621  3.5674  3.5679  3.5710  3.5752  3.5761  3.5779  3.5843
          3.5857  3.5930  3.5959  3.6053  3.6062  3.6082  3.6123  3.6142  3.6165
          3.6207  3.6250  3.6261  3.6315  3.6362  3.6439  3.6478  3.6487  3.6531
          3.6543  3.6566  3.6593  3.6595  3.6636  3.6700  3.6718  3.6746  3.6764
          3.6817  3.6907  3.6915  3.6965  3.6983  3.7024  3.7039  3.7080  3.7143
          3.7153  3.7226  3.7254  3.7290  3.7362  3.7393  3.7486  3.7514  3.7526
          3.7577  3.7577  3.7611  3.7634  3.7678  3.7690  3.7732  3.7759  3.7811
          3.7825  3.7835  3.7860  3.7906  3.7940  3.7985  3.7999  3.8012  3.8040
          3.8061  3.8063  3.8082  3.8088  3.8106  3.8130  3.8158  3.8171  3.8172
          3.8242  3.8277  3.8306  3.8317  3.8343  3.8389  3.8416  3.8430  3.8459
          3.8489  3.8490  3.8504  3.8513  3.8552  3.8573  3.8593  3.8614  3.8621
          3.8641  3.8670  3.8686  3.8696  3.8731  3.8769  3.8805  3.8835  3.8845
          3.8917  3.8967  3.8988  3.9011  3.9047  3.9080  3.9112  3.9126  3.9179
          3.9202  3.9234  3.9286  3.9303  3.9384  3.9407  3.9414  3.9441  3.9490
          3.9507  3.9534  3.9567  3.9606  3.9658  3.9670  3.9702  3.9722  3.9768
          3.9814  3.9818  3.9856  3.9881  3.9934  3.9950  4.0050  4.0067  4.0091
          4.0107  4.0122  4.0157  4.0192  4.0250  4.0304  4.0358  4.0400  4.0450
          4.0462  4.0526  4.0548  4.0570  4.0648  4.0684  4.0726  4.0727  4.0734
          4.0822  4.0889  4.0921  4.0971  4.0990  4.1017  4.1036  4.1075  4.1097
          4.1118  4.1129  4.1138  4.1152  4.1159  4.1228  4.1253  4.1304  4.1343
          4.1365  4.1393  4.1400  4.1444  4.1501  4.1554  4.1565  4.1569  4.1583
          4.1608  4.1621  4.1653  4.1730  4.1745  4.1808  4.1823  4.1828  4.1863
          4.1879  4.1880  4.1894  4.1909  4.1938  4.1982  4.1993  4.2004  4.2031
          4.2087  4.2095  4.2114  4.2164  4.2164  4.2175  4.2215  4.2240  4.2262
          4.2278  4.2343  4.2375  4.2457  4.2464  4.2526  4.2562  4.2599  4.2609
          4.2664  4.2714  4.2735  4.2747  4.2855  4.2906  4.2991  4.3029  4.3057
          4.3076  4.3091  4.3092  4.3108  4.3135  4.3206  4.3284  4.3328  4.3369
          4.3379  4.3399  4.3421  4.3438  4.3456  4.3461  4.3491  4.3526  4.3586
          4.3623  4.3682  4.3753  4.3797  4.3831  4.3831  4.3847  4.3870  4.3887
          4.3899  4.3918  4.3935  4.3964  4.3998  4.4019  4.4028  4.4081  4.4085
          4.4154  4.4230  4.4271  4.4299  4.4344  4.4350  4.4414  4.4440  4.4451
          4.4462  4.4479  4.4494  4.4595  4.4606  4.4688  4.4695  4.4777  4.4783
          4.4807  4.4821  4.4828  4.4935  4.5011  4.5057  4.5224  4.5282  4.5348
          4.5393  4.5415  4.5476  4.5476  4.5540  4.5552  4.5560  4.5621  4.5633
          4.5648  4.5659  4.5769  4.5783  4.5868  4.5882  4.5908  4.5946  4.5976
          4.6007  4.6024  4.6030  4.6047  4.6071  4.6092  4.6097  4.6117  4.6175
          4.6176  4.6187  4.6196  4.6225  4.6262  4.6299  4.6338  4.6342  4.6388
          4.6396  4.6403  4.6457  4.6508  4.6558  4.6627  4.6634  4.6672  4.6757
          4.6797  4.6835  4.7065  4.7231  4.7241  4.7269  4.7312  4.7348  4.7387
          4.7387  4.7523  4.7535  4.7570  4.7722  4.7743  4.7788  4.7840  4.7883
          4.7968  4.8008  4.8023  4.8071  4.8121  4.8183  4.8209  4.8229  4.8237
          4.8260  4.8263  4.8268  4.8305  4.8324  4.8371  4.8401
 Writing out eigenvalues/vectors for ikpt=  2
 Occupation numbers for ikpt=  2
   2      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 
--- !WARNING
message: |
    The diagonalized eigenvalues differ by more than 10^-3 Hartree
     with respect to the conjugated gradient values.
src_file: Subroutine Unknown
src_line: 0
...
 
 Eigenvalues in Hartree for ikpt=   3
   3     -0.2204 -0.2160 -0.2086 -0.1985 -0.1857 -0.1693 -0.1505 -0.1294 -0.1226
         -0.1155 -0.1100 -0.1062 -0.0199 -0.0177  0.0028  0.0124  0.0187  0.0269
          0.0342  0.0450  0.0455  0.0590  0.0725  0.0735  0.0824  0.1585  0.1661
          0.1704  0.1809  0.1964  0.1993  0.2033  0.2081  0.2485  0.2528  0.2600
          0.2647  0.2901  0.2959  0.3010  0.3270  0.3379  0.3499  0.3720  0.3913
          0.3952  0.4088  0.4120  0.4213  0.4273  0.4572  0.4701  0.4816  0.4826
          0.4917  0.5155  0.5183  0.5223  0.5319  0.5321  0.5361  0.5361  0.5368
          0.5421  0.5424  0.5471  0.5498  0.5522  0.5571  0.5587  0.5640  0.5645
          0.5683  0.5832  0.5844  0.5887  0.5932  0.5938  0.5944  0.5955  0.5970
          0.5999  0.6036  0.6230  0.6276  0.6285  0.6362  0.6498  0.6553  0.6605
          0.6944  0.7122  0.7329  0.7336  0.7400  0.7437  0.7621  0.7800  0.7967
          0.8094  0.8142  0.8154  0.8230  0.8253  0.8344  0.8374  0.8377  0.8383
          0.8486  0.8522  0.8543  0.8625  0.8655  0.8707  0.8709  0.8752  0.8764
          0.8800  0.8820  0.8843  0.8889  0.8891  0.9007  0.9046  0.9060  0.9173
          0.9252  0.9307  0.9323  0.9389  0.9438  0.9473  0.9581  0.9619  0.9659
          0.9709  0.9729  0.9878  0.9966  1.0009  1.0219  1.0255  1.0282  1.0303
          1.0316  1.0319  1.0661  1.0671  1.0705  1.0737  1.0842  1.0899  1.0904
          1.0925  1.0932  1.1048  1.1093  1.1094  1.1231  1.1264  1.1402  1.1502
          1.1526  1.1532  1.1543  1.1639  1.1663  1.1675  1.1736  1.1738  1.1796
          1.1824  1.1851  1.1894  1.2177  1.2187  1.2208  1.2218  1.2260  1.2268
          1.2284  1.2290  1.2435  1.2490  1.2580  1.2697  1.2758  1.2789  1.2819
          1.2853  1.2922  1.2925  1.3041  1.3060  1.3114  1.3193  1.3232  1.3319
          1.3373  1.3376  1.3425  1.3498  1.3554  1.3586  1.3641  1.3679  1.3762
          1.3854  1.3859  1.3875  1.3974  1.3977  1.4038  1.4046  1.4054  1.4166
          1.4198  1.4247  1.4260  1.4283  1.4336  1.4382  1.4544  1.4551  1.4790
          1.4839  1.4840  1.4856  1.4869  1.4965  1.4992  1.5012  1.5025  1.5107
          1.5114  1.5129  1.5194  1.5268  1.5298  1.5306  1.5343  1.5469  1.5573
          1.5577  1.5605  1.5631  1.5761  1.5802  1.5851  1.5854  1.5864  1.5977
          1.6014  1.6115  1.6225  1.6295  1.6312  1.6427  1.6546  1.6575  1.6662
          1.6743  1.6758  1.6816  1.6885  1.6889  1.6978  1.6989  1.6992  1.7069
          1.7100  1.7155  1.7259  1.7304  1.7404  1.7456  1.7462  1.7525  1.7598
          1.7604  1.7610  1.7734  1.7753  1.7760  1.7764  1.7825  1.7937  1.7964
          1.7999  1.8000  1.8219  1.8301  1.8329  1.8376  1.8509  1.8547  1.8575
          1.8586  1.8630  1.8656  1.8704  1.8793  1.8880  1.8896  1.8952  1.9035
          1.9046  1.9067  1.9086  1.9115  1.9121  1.9167  1.9240  1.9248  1.9288
          1.9289  1.9321  1.9335  1.9428  1.9441  1.9452  1.9618  1.9659  1.9705
          1.9705  1.9797  1.9799  1.9814  1.9826  1.9869  1.9918  1.9927  1.9971
          2.0021  2.0034  2.0042  2.0147  2.0181  2.0195  2.0219  2.0243  2.0277
          2.0287  2.0340  2.0379  2.0386  2.0412  2.0417  2.0580  2.0631  2.0686
          2.0706  2.0738  2.0801  2.0862  2.0883  2.0982  2.1048  2.1172  2.1243
          2.1258  2.1470  2.1476  2.1505  2.1599  2.1606  2.1788  2.1820  2.1827
          2.1881  2.1883  2.1899  2.1960  2.1988  2.1992  2.2021  2.2091  2.2098
          2.2149  2.2161  2.2198  2.2203  2.2254  2.2299  2.2354  2.2381  2.2397
          2.2530  2.2531  2.2607  2.2619  2.2646  2.2651  2.2718  2.2730  2.2740
          2.2799  2.2876  2.2877  2.2885  2.2909  2.2931  2.2950  2.2957  2.2957
          2.3023  2.3035  2.3052  2.3075  2.3107  2.3257  2.3266  2.3312  2.3372
          2.3384  2.3420  2.3478  2.3478  2.3612  2.3631  2.3682  2.3690  2.3705
          2.3754  2.3759  2.3773  2.3847  2.3886  2.3887  2.3892  2.3928  2.3978
          2.4004  2.4031  2.4087  2.4125  2.4146  2.4295  2.4302  2.4305  2.4315
          2.4450  2.4463  2.4508  2.4598  2.4615  2.4631  2.4699  2.4763  2.4767
          2.4818  2.4898  2.5005  2.5012  2.5090  2.5210  2.5245  2.5247  2.5265
          2.5290  2.5291  2.5372  2.5461  2.5463  2.5505  2.5529  2.5546  2.5562
          2.5609  2.5629  2.5640  2.5693  2.5748  2.5812  2.5839  2.5865  2.5880
          2.5913  2.5936  2.5985  2.6033  2.6124  2.6134  2.6138  2.6163  2.6172
          2.6310  2.6311  2.6337  2.6348  2.6388  2.6458  2.6465  2.6594  2.6605
          2.6640  2.6658  2.6664  2.6707  2.6713  2.6764  2.6815  2.6914  2.6919
          2.6965  2.7019  2.7027  2.7062  2.7235  2.7292  2.7303  2.7315  2.7315
          2.7368  2.7381  2.7405  2.7413  2.7475  2.7495  2.7562  2.7633  2.7651
          2.7662  2.7700  2.7712  2.7720  2.7732  2.7753  2.7787  2.7837  2.7839
          2.7887  2.7903  2.7956  2.7962  2.7983  2.8018  2.8041  2.8057  2.8131
          2.8151  2.8186  2.8233  2.8236  2.8258  2.8314  2.8325  2.8334  2.8396
          2.8402  2.8403  2.8468  2.8489  2.8490  2.8575  2.8585  2.8624  2.8631
          2.8738  2.8777  2.8786  2.8872  2.8872  2.8958  2.9011  2.9012  2.9093
          2.9144  2.9177  2.9179  2.9185  2.9203  2.9214  2.9348  2.9348  2.9399
          2.9423  2.9435  2.9518  2.9527  2.9546  2.9558  2.9568  2.9647  2.9688
          2.9693  2.9745  2.9892  2.9944  2.9949  2.9953  2.9960  3.0036  3.0046
          3.0080  3.0128  3.0209  3.0212  3.0253  3.0260  3.0288  3.0307  3.0330
          3.0331  3.0426  3.0491  3.0502  3.0523  3.0549  3.0591  3.0595  3.0600
          3.0608  3.0658  3.0676  3.0706  3.0711  3.0744  3.0814  3.0837  3.0983
          3.1033  3.1037  3.1111  3.1136  3.1163  3.1210  3.1227  3.1259  3.1311
          3.1320  3.1388  3.1426  3.1470  3.1554  3.1561  3.1607  3.1650  3.1822
          3.1860  3.1875  3.1892  3.1987  3.1988  3.1994  3.1996  3.2011  3.2059
          3.2062  3.2154  3.2177  3.2281  3.2309  3.2312  3.2430  3.2473  3.2515
          3.2585  3.2611  3.2645  3.2693  3.2726  3.2739  3.2786  3.2789  3.2824
          3.2867  3.2871  3.2929  3.2952  3.3023  3.3063  3.3071  3.3102  3.3119
          3.3173  3.3192  3.3297  3.3355  3.3392  3.3393  3.3493  3.3536  3.3542
          3.3584  3.3602  3.3624  3.3674  3.3685  3.3708  3.3719  3.3739  3.3782
          3.3788  3.3790  3.3816  3.3838  3.3915  3.3924  3.4087  3.4148  3.4150
          3.4157  3.4173  3.4254  3.4288  3.4401  3.4452  3.4537  3.4585  3.4587
          3.4666  3.4685  3.4711  3.4832  3.4838  3.4915  3.4954  3.4994  3.4999
          3.5033  3.5075  3.5108  3.5137  3.5168  3.5181  3.5228  3.5232  3.5262
          3.5274  3.5275  3.5316  3.5331  3.5362  3.5364  3.5379  3.5397  3.5410
          3.5421  3.5494  3.5504  3.5547  3.5635  3.5640  3.5659  3.5673  3.5690
          3.5710  3.5780  3.5791  3.5804  3.5820  3.5832  3.5835  3.5850  3.5882
          3.5912  3.5919  3.5980  3.6004  3.6038  3.6038  3.6084  3.6106  3.6137
          3.6169  3.6171  3.6193  3.6262  3.6274  3.6317  3.6355  3.6443  3.6453
          3.6486  3.6569  3.6636  3.6770  3.6889  3.6948  3.7090  3.7099  3.7108
          3.7110  3.7187  3.7189  3.7239  3.7251  3.7262  3.7291  3.7380  3.7422
          3.7463  3.7467  3.7477  3.7510  3.7553  3.7567  3.7584  3.7598  3.7639
          3.7702  3.7735  3.7742  3.7769  3.7778  3.7800  3.7806  3.8014  3.8105
          3.8160  3.8175  3.8176  3.8205  3.8273  3.8325  3.8336  3.8343  3.8394
          3.8413  3.8421  3.8444  3.8453  3.8494  3.8534  3.8562  3.8581  3.8607
          3.8679  3.8721  3.8786  3.8794  3.8824  3.8850  3.8996  3.9037  3.9073
          3.9075  3.9087  3.9135  3.9139  3.9163  3.9228  3.9252  3.9366  3.9370
          3.9454  3.9464  3.9524  3.9534  3.9578  3.9582  3.9582  3.9593  3.9759
          3.9812  3.9814  3.9896  3.9904  3.9910  3.9990  3.9992  4.0094  4.0104
          4.0132  4.0141  4.0182  4.0184  4.0214  4.0214  4.0387  4.0430  4.0473
          4.0489  4.0507  4.0511  4.0552  4.0571  4.0574  4.0577  4.0587  4.0601
          4.0640  4.0642  4.0693  4.0719  4.0733  4.0781  4.0822  4.0852  4.0880
          4.0896  4.1080  4.1087  4.1132  4.1139  4.1195  4.1205  4.1462  4.1483
          4.1494  4.1548  4.1558  4.1581  4.1684  4.1694  4.1696  4.1725  4.1864
          4.1867  4.1944  4.1965  4.1982  4.1998  4.2007  4.2014  4.2016  4.2042
          4.2082  4.2087  4.2093  4.2122  4.2127  4.2172  4.2180  4.2188  4.2189
          4.2219  4.2233  4.2235  4.2262  4.2323  4.2324  4.2376  4.2381  4.2419
          4.2421  4.2433  4.2464  4.2475  4.2546  4.2565  4.2568  4.2576  4.2588
          4.2591  4.2624  4.2637  4.2668  4.2669  4.2716  4.2782  4.2786  4.2797
          4.2805  4.2846  4.2855  4.2863  4.2896  4.2957  4.2979  4.3033  4.3060
          4.3075  4.3079  4.3088  4.3240  4.3326  4.3328  4.3340  4.3467  4.3482
          4.3499  4.3503  4.3683  4.3695  4.3718  4.3734  4.3754  4.3771  4.4026
          4.4035  4.4038  4.4187  4.4195  4.4239  4.4256  4.4300  4.4301  4.4359
          4.4431  4.4452  4.4477  4.4580  4.4668  4.4684  4.4700  4.4732  4.4740
          4.4786  4.4837  4.4851  4.4874  4.4890  4.4914  4.4930  4.4941  4.4973
          4.4974  4.4998  4.5082  4.5106  4.5170  4.5211  4.5326  4.5333  4.5406
          4.5414  4.5464  4.5516  4.5589  4.5635  4.5638  4.5644  4.5657  4.5674
          4.5831  4.5835  4.5842  4.5866  4.5890  4.5932  4.5936  4.5948  4.6120
          4.6124  4.6222  4.6234  4.6290  4.6404  4.6430  4.6458  4.6484  4.6492
          4.6513  4.6527  4.6605  4.6634  4.6674  4.6678  4.6683  4.6687  4.6716
          4.6719  4.6789  4.6797  4.6808  4.6818  4.6894  4.6900  4.7034  4.7062
          4.7063  4.7080  4.7113  4.7118  4.7126  4.7142  4.7160  4.7162  4.7170
          4.7187  4.7209  4.7211  4.7233  4.7259  4.7559  4.7568  4.7625  4.7642
          4.7792  4.7838  4.7849  4.7874  4.7885  4.7887  4.8154  4.8175  4.8216
          4.8216  4.8219  4.8224  4.8369  4.8381  4.8382  4.8405  4.8489  4.8492
          4.8601  4.8633  4.8652  4.8663  4.8727  4.8728  4.8762  4.8763  4.8960
          4.8961  4.9083  4.9088  4.9417  4.9427  4.9434  4.9439
 Writing out eigenvalues/vectors for ikpt=  3
 Occupation numbers for ikpt=  3
   3      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   4
   4     -0.2297 -0.2226 -0.2117 -0.1976 -0.1813 -0.1631 -0.1444 -0.1268 -0.1118
         -0.0987 -0.0863 -0.0751 -0.0230 -0.0213 -0.0165 -0.0073 -0.0037 -0.0019
          0.0094  0.0140  0.0189  0.0347  0.0450  0.0572  0.0738  0.1973  0.1974
          0.2275  0.2294  0.2329  0.2631  0.2691  0.2700  0.2904  0.2920  0.2969
          0.3045  0.3062  0.3070  0.3163  0.3191  0.3214  0.3317  0.3346  0.3429
          0.3444  0.3463  0.3503  0.3609  0.3767  0.3904  0.3981  0.4120  0.4499
          0.4583  0.4751  0.4816  0.4864  0.4874  0.4881  0.4950  0.5090  0.5263
          0.5331  0.5372  0.5453  0.5652  0.5681  0.5774  0.5875  0.5890  0.5939
          0.5944  0.5965  0.6007  0.6060  0.6128  0.6134  0.6144  0.6193  0.6244
          0.6378  0.6417  0.6666  0.6731  0.6939  0.7063  0.7167  0.7216  0.7244
          0.7248  0.7391  0.7480  0.7509  0.7532  0.7689  0.7740  0.7742  0.7813
          0.7968  0.8039  0.8090  0.8101  0.8110  0.8126  0.8169  0.8204  0.8249
          0.8317  0.8358  0.8359  0.8428  0.8440  0.8480  0.8566  0.8568  0.8612
          0.8626  0.8652  0.8660  0.8800  0.8873  0.8893  0.9033  0.9127  0.9127
          0.9187  0.9205  0.9255  0.9349  0.9539  0.9667  0.9721  0.9726  0.9822
          0.9867  0.9889  0.9949  0.9996  1.0035  1.0135  1.0144  1.0296  1.0343
          1.0364  1.0439  1.0554  1.0568  1.0695  1.0761  1.0807  1.0840  1.0869
          1.0878  1.0906  1.0948  1.1011  1.1042  1.1164  1.1217  1.1349  1.1426
          1.1483  1.1498  1.1556  1.1560  1.1564  1.1655  1.1683  1.1693  1.1760
          1.1839  1.1865  1.1902  1.2010  1.2085  1.2107  1.2107  1.2235  1.2266
          1.2273  1.2279  1.2284  1.2386  1.2414  1.2428  1.2629  1.2632  1.2706
          1.2740  1.2821  1.2854  1.2906  1.2955  1.2989  1.3021  1.3091  1.3179
          1.3345  1.3415  1.3503  1.3521  1.3549  1.3569  1.3641  1.3685  1.3732
          1.3809  1.3823  1.3881  1.4070  1.4150  1.4200  1.4205  1.4298  1.4315
          1.4333  1.4387  1.4399  1.4520  1.4586  1.4593  1.4666  1.4700  1.4769
          1.4809  1.4916  1.4982  1.4984  1.5027  1.5078  1.5142  1.5154  1.5199
          1.5274  1.5284  1.5376  1.5426  1.5448  1.5533  1.5536  1.5623  1.5627
          1.5683  1.5700  1.5783  1.5868  1.5869  1.5959  1.5972  1.6058  1.6134
          1.6135  1.6330  1.6350  1.6393  1.6430  1.6438  1.6486  1.6488  1.6549
          1.6585  1.6671  1.6682  1.6713  1.6807  1.6873  1.6919  1.6935  1.6945
          1.7203  1.7231  1.7268  1.7429  1.7450  1.7468  1.7504  1.7566  1.7615
          1.7618  1.7684  1.7802  1.7850  1.7876  1.7883  1.7919  1.7924  1.7965
          1.7965  1.7993  1.8030  1.8093  1.8147  1.8185  1.8187  1.8280  1.8296
          1.8303  1.8438  1.8444  1.8588  1.8680  1.8703  1.8703  1.8743  1.8783
          1.8853  1.8876  1.8895  1.8921  1.9049  1.9066  1.9093  1.9179  1.9235
          1.9280  1.9331  1.9363  1.9440  1.9441  1.9534  1.9545  1.9561  1.9607
          1.9645  1.9728  1.9786  1.9824  1.9834  1.9893  1.9902  1.9917  1.9925
          1.9955  2.0075  2.0111  2.0119  2.0194  2.0280  2.0308  2.0329  2.0363
          2.0373  2.0385  2.0445  2.0459  2.0526  2.0616  2.0702  2.0758  2.0823
          2.0835  2.0904  2.0931  2.0971  2.0974  2.1047  2.1110  2.1159  2.1199
          2.1264  2.1331  2.1383  2.1430  2.1523  2.1561  2.1616  2.1627  2.1636
          2.1700  2.1737  2.1751  2.1796  2.1848  2.1877  2.1907  2.1915  2.1935
          2.2063  2.2066  2.2087  2.2125  2.2129  2.2200  2.2226  2.2231  2.2254
          2.2341  2.2383  2.2464  2.2540  2.2554  2.2648  2.2696  2.2751  2.2778
          2.2796  2.2877  2.2885  2.2957  2.2992  2.3005  2.3059  2.3150  2.3192
          2.3195  2.3291  2.3315  2.3414  2.3414  2.3447  2.3510  2.3510  2.3525
          2.3640  2.3704  2.3714  2.3743  2.3777  2.3845  2.3850  2.3923  2.3957
          2.3977  2.3988  2.4000  2.4038  2.4044  2.4050  2.4079  2.4106  2.4107
          2.4162  2.4181  2.4185  2.4231  2.4232  2.4262  2.4339  2.4377  2.4388
          2.4449  2.4522  2.4533  2.4660  2.4666  2.4713  2.4789  2.4814  2.4835
          2.4885  2.4896  2.4952  2.4970  2.4998  2.5024  2.5043  2.5066  2.5087
          2.5111  2.5118  2.5197  2.5240  2.5285  2.5302  2.5315  2.5354  2.5375
          2.5426  2.5450  2.5513  2.5526  2.5556  2.5584  2.5594  2.5603  2.5717
          2.5748  2.5813  2.5818  2.5831  2.5858  2.6011  2.6063  2.6072  2.6132
          2.6217  2.6225  2.6288  2.6299  2.6339  2.6382  2.6473  2.6585  2.6596
          2.6618  2.6642  2.6682  2.6724  2.6739  2.6742  2.6776  2.6788  2.6846
          2.6890  2.6941  2.6964  2.7038  2.7042  2.7117  2.7119  2.7134  2.7233
          2.7274  2.7284  2.7300  2.7313  2.7427  2.7434  2.7538  2.7561  2.7576
          2.7605  2.7632  2.7655  2.7766  2.7772  2.7810  2.7819  2.7872  2.7911
          2.7942  2.7948  2.8036  2.8040  2.8076  2.8122  2.8148  2.8186  2.8196
          2.8275  2.8317  2.8378  2.8400  2.8404  2.8454  2.8481  2.8552  2.8554
          2.8593  2.8615  2.8639  2.8680  2.8728  2.8737  2.8786  2.8830  2.8835
          2.8855  2.8887  2.8914  2.8944  2.8991  2.9063  2.9082  2.9135  2.9181
          2.9202  2.9265  2.9295  2.9305  2.9374  2.9384  2.9389  2.9423  2.9530
          2.9545  2.9606  2.9620  2.9649  2.9737  2.9761  2.9791  2.9809  2.9815
          2.9889  2.9916  2.9986  2.9999  3.0054  3.0081  3.0105  3.0183  3.0205
          3.0224  3.0259  3.0281  3.0282  3.0325  3.0372  3.0384  3.0476  3.0493
          3.0510  3.0531  3.0546  3.0573  3.0585  3.0626  3.0715  3.0729  3.0761
          3.0789  3.0814  3.0896  3.0929  3.0936  3.0967  3.0987  3.1090  3.1159
          3.1243  3.1288  3.1290  3.1307  3.1355  3.1384  3.1419  3.1438  3.1472
          3.1481  3.1515  3.1552  3.1605  3.1631  3.1720  3.1732  3.1746  3.1751
          3.1802  3.1804  3.1835  3.1861  3.1862  3.1921  3.1949  3.2028  3.2029
          3.2056  3.2104  3.2117  3.2163  3.2168  3.2204  3.2271  3.2360  3.2382
          3.2392  3.2413  3.2493  3.2519  3.2540  3.2597  3.2626  3.2652  3.2674
          3.2679  3.2697  3.2738  3.2755  3.2863  3.2871  3.2980  3.3005  3.3044
          3.3105  3.3148  3.3218  3.3219  3.3264  3.3269  3.3379  3.3396  3.3405
          3.3448  3.3472  3.3518  3.3606  3.3611  3.3626  3.3656  3.3659  3.3721
          3.3757  3.3814  3.3882  3.3887  3.3992  3.4021  3.4037  3.4063  3.4121
          3.4156  3.4217  3.4219  3.4236  3.4263  3.4307  3.4346  3.4366  3.4405
          3.4477  3.4505  3.4549  3.4582  3.4592  3.4636  3.4716  3.4747  3.4757
          3.4778  3.4783  3.4847  3.4856  3.4879  3.4943  3.4965  3.4978  3.5035
          3.5127  3.5143  3.5175  3.5203  3.5249  3.5259  3.5263  3.5276  3.5325
          3.5351  3.5390  3.5425  3.5441  3.5455  3.5469  3.5472  3.5480  3.5535
          3.5569  3.5611  3.5699  3.5716  3.5718  3.5767  3.5785  3.5803  3.5806
          3.5908  3.5960  3.5994  3.6009  3.6033  3.6059  3.6078  3.6119  3.6183
          3.6247  3.6252  3.6342  3.6365  3.6404  3.6407  3.6469  3.6479  3.6497
          3.6528  3.6556  3.6570  3.6681  3.6752  3.6788  3.6850  3.6914  3.6943
          3.7064  3.7102  3.7109  3.7145  3.7164  3.7201  3.7312  3.7346  3.7366
          3.7406  3.7411  3.7417  3.7492  3.7527  3.7548  3.7598  3.7605  3.7658
          3.7808  3.7812  3.7834  3.7898  3.7925  3.7937  3.7946  3.7997  3.8020
          3.8029  3.8054  3.8078  3.8089  3.8139  3.8178  3.8197  3.8231  3.8254
          3.8346  3.8348  3.8494  3.8512  3.8565  3.8571  3.8690  3.8712  3.8747
          3.8769  3.8790  3.8845  3.8865  3.8875  3.8947  3.8974  3.9017  3.9027
          3.9058  3.9060  3.9168  3.9178  3.9264  3.9305  3.9310  3.9323  3.9365
          3.9395  3.9415  3.9435  3.9588  3.9611  3.9665  3.9676  3.9711  3.9790
          3.9844  3.9864  3.9882  3.9889  3.9975  4.0048  4.0070  4.0108  4.0184
          4.0220  4.0248  4.0267  4.0278  4.0280  4.0298  4.0340  4.0355  4.0396
          4.0401  4.0452  4.0477  4.0491  4.0505  4.0548  4.0630  4.0640  4.0780
          4.0819  4.0873  4.0877  4.0908  4.0926  4.0969  4.0993  4.1033  4.1052
          4.1098  4.1126  4.1147  4.1156  4.1177  4.1217  4.1238  4.1256  4.1353
          4.1374  4.1380  4.1389  4.1503  4.1517  4.1551  4.1592  4.1642  4.1652
          4.1764  4.1764  4.1796  4.1825  4.1840  4.1880  4.1994  4.2015  4.2087
          4.2149  4.2157  4.2158  4.2171  4.2211  4.2229  4.2232  4.2286  4.2317
          4.2329  4.2368  4.2419  4.2432  4.2455  4.2455  4.2475  4.2506  4.2523
          4.2540  4.2554  4.2631  4.2634  4.2668  4.2682  4.2760  4.2784  4.2815
          4.2839  4.2862  4.2883  4.2900  4.2930  4.2930  4.2969  4.3022  4.3040
          4.3074  4.3085  4.3137  4.3176  4.3190  4.3198  4.3210  4.3211  4.3231
          4.3318  4.3318  4.3417  4.3435  4.3475  4.3483  4.3505  4.3548  4.3608
          4.3666  4.3691  4.3713  4.3725  4.3740  4.3799  4.3808  4.3828  4.3835
          4.3859  4.3866  4.3926  4.3935  4.4033  4.4057  4.4078  4.4127  4.4161
          4.4202  4.4368  4.4400  4.4426  4.4452  4.4461  4.4483  4.4614  4.4634
          4.4675  4.4746  4.4749  4.4818  4.4869  4.4887  4.4912  4.4941  4.5051
          4.5083  4.5100  4.5103  4.5143  4.5153  4.5212  4.5223  4.5243  4.5270
          4.5281  4.5292  4.5329  4.5351  4.5394  4.5419  4.5421  4.5479  4.5561
          4.5621  4.5635  4.5649  4.5678  4.5704  4.5732  4.5814  4.5885  4.5933
          4.5949  4.6050  4.6057  4.6083  4.6114  4.6150  4.6161  4.6163  4.6189
          4.6262  4.6283  4.6286  4.6307  4.6327  4.6328  4.6413  4.6447  4.6484
          4.6558  4.6578  4.6723  4.6744  4.6758  4.6779  4.6781  4.6798  4.6890
          4.6891  4.6901  4.6903  4.6933  4.6942  4.7131  4.7150  4.7172  4.7202
          4.7354  4.7431  4.7477  4.7632  4.7639  4.7654  4.7673  4.7730  4.7926
          4.7927  4.7965  4.7986  4.8010  4.8033  4.8078  4.8092  4.8139  4.8156
          4.8224  4.8225  4.8253  4.8255  4.8257  4.8263  4.8483  4.8576  4.8579
          4.8765  4.8778  4.8868  4.8873  4.8880  4.8894  4.9109  4.9166  4.9189
          4.9215  4.9281  4.9325  4.9337  4.9761  4.9923  5.0117
 Writing out eigenvalues/vectors for ikpt=  4
 Occupation numbers for ikpt=  4
   4      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   5
   5     -0.3053 -0.2976 -0.2845 -0.2676 -0.2483 -0.2304 -0.1217 -0.1031 -0.0701
         -0.0283  0.0186  0.0672  0.0879  0.0879  0.0932  0.0932  0.1014  0.1014
          0.1108  0.1115  0.1115  0.1217  0.1217  0.1290  0.1290  0.1886  0.1934
          0.2008  0.2097  0.2191  0.2247  0.2303  0.2303  0.2433  0.2433  0.2472
          0.2561  0.2561  0.2570  0.2570  0.2606  0.2606  0.2619  0.2619  0.2663
          0.2975  0.3322  0.3646  0.4009  0.4069  0.4069  0.4080  0.4080  0.4100
          0.4180  0.4254  0.4254  0.4271  0.4271  0.4289  0.4341  0.4401  0.4537
          0.4557  0.4557  0.4667  0.4880  0.4957  0.4957  0.5165  0.5232  0.5339
          0.5382  0.5382  0.5436  0.5573  0.5573  0.5842  0.5950  0.5950  0.5987
          0.5987  0.6036  0.6191  0.6460  0.6460  0.6523  0.6552  0.6552  0.6885
          0.7091  0.7092  0.7092  0.7297  0.7297  0.7371  0.7390  0.7390  0.7427
          0.7622  0.7653  0.7653  0.7779  0.7821  0.8008  0.8008  0.8028  0.8251
          0.8332  0.8332  0.8438  0.8438  0.8477  0.8720  0.8897  0.8918  0.8918
          0.8994  0.8994  0.9075  0.9300  0.9449  0.9519  0.9519  0.9630  0.9630
          0.9828  0.9886  1.0110  1.0110  1.0152  1.0200  1.0200  1.0501  1.0504
          1.0504  1.0529  1.0529  1.0540  1.0540  1.0590  1.0590  1.0622  1.0683
          1.0683  1.0843  1.0843  1.0923  1.1004  1.1004  1.1102  1.1112  1.1112
          1.1219  1.1219  1.1242  1.1242  1.1306  1.1306  1.1369  1.1441  1.1441
          1.1605  1.1605  1.1630  1.1756  1.1773  1.1773  1.2046  1.2148  1.2188
          1.2218  1.2218  1.2267  1.2347  1.2392  1.2548  1.2549  1.2551  1.2551
          1.2703  1.2776  1.2815  1.2973  1.2973  1.3202  1.3226  1.3226  1.3397
          1.3397  1.3461  1.3569  1.3569  1.3699  1.3699  1.3751  1.3751  1.3777
          1.3777  1.3909  1.3975  1.3975  1.4023  1.4023  1.4085  1.4123  1.4154
          1.4154  1.4358  1.4358  1.4404  1.4404  1.4437  1.4547  1.4717  1.4717
          1.4723  1.4763  1.4841  1.4856  1.4888  1.4888  1.5062  1.5070  1.5070
          1.5097  1.5117  1.5269  1.5356  1.5364  1.5364  1.5517  1.5549  1.5549
          1.5684  1.5686  1.5686  1.5875  1.5875  1.6002  1.6149  1.6199  1.6199
          1.6303  1.6342  1.6342  1.6494  1.6540  1.6550  1.6550  1.6562  1.6562
          1.6596  1.6596  1.6601  1.6601  1.6623  1.6623  1.6625  1.6641  1.6641
          1.6763  1.6763  1.6784  1.6957  1.6977  1.6977  1.7015  1.7015  1.7021
          1.7031  1.7091  1.7096  1.7096  1.7100  1.7132  1.7216  1.7307  1.7307
          1.7326  1.7366  1.7406  1.7424  1.7424  1.7518  1.7518  1.7525  1.7576
          1.7585  1.7585  1.7607  1.7617  1.7617  1.7656  1.7695  1.7695  1.7699
          1.7737  1.7759  1.7759  1.7940  1.7962  1.7962  1.8020  1.8048  1.8113
          1.8113  1.8233  1.8289  1.8289  1.8292  1.8292  1.8395  1.8539  1.8539
          1.8681  1.8685  1.8768  1.8768  1.8825  1.8825  1.8907  1.8971  1.8971
          1.8987  1.9220  1.9293  1.9307  1.9310  1.9310  1.9406  1.9406  1.9495
          1.9495  1.9521  1.9521  1.9616  1.9616  1.9654  1.9697  1.9697  1.9799
          1.9799  1.9822  1.9913  1.9954  1.9954  2.0009  2.0013  2.0047  2.0061
          2.0061  2.0076  2.0097  2.0129  2.0129  2.0215  2.0215  2.0364  2.0478
          2.0571  2.0571  2.0588  2.0599  2.0611  2.0611  2.0750  2.0750  2.0773
          2.0806  2.0806  2.0851  2.0851  2.0889  2.0968  2.1078  2.1078  2.1099
          2.1161  2.1294  2.1325  2.1325  2.1407  2.1447  2.1447  2.1573  2.1584
          2.1604  2.1604  2.1619  2.1619  2.1676  2.1843  2.1843  2.1989  2.1989
          2.2000  2.2053  2.2053  2.2055  2.2122  2.2183  2.2183  2.2271  2.2357
          2.2456  2.2456  2.2470  2.2492  2.2492  2.2523  2.2569  2.2569  2.2717
          2.2717  2.2780  2.2816  2.2816  2.2883  2.2992  2.3079  2.3112  2.3112
          2.3232  2.3232  2.3281  2.3342  2.3342  2.3380  2.3400  2.3400  2.3443
          2.3576  2.3576  2.3632  2.3746  2.3746  2.3763  2.3801  2.3801  2.3861
          2.4059  2.4059  2.4098  2.4130  2.4244  2.4244  2.4271  2.4341  2.4369
          2.4369  2.4522  2.4535  2.4535  2.4633  2.4737  2.4737  2.4773  2.4828
          2.4828  2.4955  2.4955  2.5081  2.5162  2.5162  2.5222  2.5222  2.5322
          2.5350  2.5397  2.5434  2.5523  2.5542  2.5542  2.5822  2.5822  2.5883
          2.5941  2.5941  2.6023  2.6029  2.6029  2.6120  2.6120  2.6142  2.6142
          2.6200  2.6422  2.6490  2.6583  2.6583  2.6684  2.6775  2.6857  2.6857
          2.6956  2.6965  2.6965  2.7057  2.7057  2.7183  2.7192  2.7192  2.7320
          2.7503  2.7554  2.7554  2.7590  2.7603  2.7603  2.7725  2.7870  2.7870
          2.7873  2.8002  2.8002  2.8081  2.8115  2.8115  2.8192  2.8192  2.8214
          2.8344  2.8470  2.8505  2.8505  2.8593  2.8600  2.8687  2.8784  2.8784
          2.8839  2.8867  2.8873  2.8873  2.9017  2.9076  2.9076  2.9085  2.9120
          2.9120  2.9157  2.9157  2.9209  2.9227  2.9227  2.9259  2.9348  2.9348
          2.9366  2.9404  2.9404  2.9459  2.9459  2.9505  2.9505  2.9590  2.9732
          2.9732  2.9790  2.9790  2.9799  2.9901  2.9904  2.9904  2.9925  2.9925
          2.9978  2.9994  2.9994  3.0036  3.0075  3.0075  3.0089  3.0153  3.0199
          3.0205  3.0205  3.0223  3.0291  3.0335  3.0335  3.0383  3.0473  3.0535
          3.0535  3.0574  3.0625  3.0710  3.0710  3.0745  3.0836  3.0836  3.0852
          3.0860  3.0860  3.0927  3.0940  3.0965  3.0965  3.1096  3.1096  3.1159
          3.1387  3.1391  3.1505  3.1505  3.1597  3.1622  3.1674  3.1674  3.1769
          3.1849  3.1849  3.1999  3.1999  3.2035  3.2035  3.2065  3.2065  3.2174
          3.2174  3.2240  3.2240  3.2290  3.2290  3.2315  3.2340  3.2340  3.2385
          3.2385  3.2414  3.2431  3.2437  3.2437  3.2452  3.2452  3.2508  3.2512
          3.2512  3.2525  3.2545  3.2545  3.2622  3.2622  3.2632  3.2632  3.2643
          3.2699  3.2699  3.2726  3.2760  3.2909  3.2930  3.3007  3.3014  3.3074
          3.3074  3.3183  3.3183  3.3272  3.3272  3.3312  3.3378  3.3378  3.3403
          3.3456  3.3497  3.3497  3.3590  3.3672  3.3743  3.3743  3.3801  3.3821
          3.3821  3.3907  3.3908  3.4019  3.4067  3.4092  3.4092  3.4124  3.4124
          3.4143  3.4143  3.4143  3.4211  3.4279  3.4279  3.4321  3.4321  3.4386
          3.4386  3.4464  3.4464  3.4494  3.4494  3.4559  3.4559  3.4575  3.4633
          3.4641  3.4641  3.4673  3.4688  3.4693  3.4693  3.4805  3.4805  3.4858
          3.4858  3.4877  3.4926  3.4935  3.5004  3.5012  3.5030  3.5030  3.5102
          3.5154  3.5154  3.5168  3.5270  3.5283  3.5283  3.5310  3.5318  3.5318
          3.5436  3.5445  3.5514  3.5514  3.5604  3.5604  3.5732  3.5732  3.5762
          3.5762  3.5772  3.5809  3.5830  3.5830  3.5858  3.5867  3.5867  3.5924
          3.5926  3.5926  3.5959  3.5962  3.6041  3.6041  3.6057  3.6084  3.6084
          3.6105  3.6177  3.6177  3.6237  3.6237  3.6362  3.6377  3.6377  3.6393
          3.6393  3.6443  3.6519  3.6558  3.6558  3.6612  3.6678  3.6678  3.6697
          3.6756  3.6756  3.6815  3.6832  3.6832  3.6892  3.6892  3.6900  3.6905
          3.7010  3.7010  3.7028  3.7093  3.7093  3.7129  3.7159  3.7185  3.7200
          3.7200  3.7218  3.7218  3.7331  3.7339  3.7358  3.7358  3.7506  3.7531
          3.7531  3.7568  3.7568  3.7596  3.7596  3.7632  3.7632  3.7636  3.7693
          3.7697  3.7734  3.7784  3.7784  3.7797  3.7797  3.7891  3.7914  3.7914
          3.8019  3.8019  3.8091  3.8091  3.8099  3.8106  3.8169  3.8169  3.8217
          3.8272  3.8281  3.8281  3.8334  3.8370  3.8370  3.8410  3.8461  3.8532
          3.8532  3.8566  3.8566  3.8613  3.8684  3.8684  3.8750  3.8750  3.8751
          3.8763  3.8835  3.8841  3.8841  3.8847  3.9066  3.9129  3.9129  3.9233
          3.9233  3.9285  3.9285  3.9318  3.9359  3.9359  3.9378  3.9378  3.9380
          3.9402  3.9419  3.9419  3.9507  3.9507  3.9539  3.9674  3.9674  3.9710
          3.9730  3.9730  3.9753  3.9854  3.9875  3.9961  3.9961  4.0052  4.0060
          4.0060  4.0082  4.0143  4.0143  4.0185  4.0185  4.0192  4.0309  4.0309
          4.0362  4.0399  4.0700  4.0700  4.0705  4.0774  4.0805  4.0805  4.0845
          4.0847  4.0847  4.0863  4.0914  4.0935  4.0935  4.0973  4.0973  4.1013
          4.1056  4.1056  4.1124  4.1124  4.1159  4.1174  4.1215  4.1266  4.1266
          4.1349  4.1371  4.1371  4.1396  4.1421  4.1427  4.1427  4.1442  4.1442
          4.1479  4.1479  4.1532  4.1532  4.1534  4.1646  4.1677  4.1714  4.1734
          4.1735  4.1735  4.1790  4.1811  4.1811  4.1828  4.1851  4.1851  4.1858
          4.1907  4.1914  4.1914  4.1940  4.1940  4.1953  4.1953  4.1988  4.1988
          4.2044  4.2044  4.2064  4.2080  4.2081  4.2081  4.2168  4.2188  4.2188
          4.2190  4.2221  4.2225  4.2225  4.2329  4.2329  4.2479  4.2479  4.2507
          4.2572  4.2572  4.2614  4.2614  4.2656  4.2656  4.2662  4.2677  4.2677
          4.2711  4.2759  4.2759  4.2817  4.2872  4.3076  4.3079  4.3111  4.3111
          4.3142  4.3306  4.3306  4.3365  4.3387  4.3387  4.3407  4.3407  4.3410
          4.3538  4.3604  4.3604  4.3664  4.3664  4.3701  4.3726  4.3726  4.4042
          4.4042  4.4046  4.4068  4.4139  4.4139  4.4183  4.4183  4.4222  4.4319
          4.4319  4.4354  4.4375  4.4379  4.4379  4.4423  4.4436  4.4436  4.4502
          4.4508  4.4508  4.4518  4.4623  4.4623  4.4627  4.4629  4.4629  4.4741
          4.4741  4.4748  4.4753  4.4781  4.4857  4.4857  4.5050  4.5050  4.5059
          4.5115  4.5115  4.5122  4.5140  4.5224  4.5232  4.5232  4.5284  4.5284
          4.5342  4.5382  4.5447  4.5630  4.5640  4.5640  4.5656  4.5682  4.5682
          4.5724  4.5724  4.5790  4.5790  4.5829  4.5829  4.5996  4.6032  4.6032
          4.6100  4.6179  4.6241  4.6241  4.6277  4.6306  4.6306  4.6349  4.6349
          4.6386  4.6408  4.6408  4.6441  4.6441  4.6471  4.6584  4.6584  4.6737
          4.6742  4.6852  4.6853  4.6878  4.6878  4.6896  4.6896  4.6995  4.6995
          4.6999  4.7165  4.7165  4.7172  4.7220  4.7331  4.7369  4.7369  4.7429
          4.7433  4.7433  4.7447  4.7513  4.7555  4.7555  4.7616
 Writing out eigenvalues/vectors for ikpt=  5
 Occupation numbers for ikpt=  5
   5      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   6
   6     -0.2788 -0.2709 -0.2581 -0.2416 -0.2226 -0.2040 -0.1151 -0.0982 -0.0707
         -0.0443 -0.0238 -0.0128 -0.0068  0.0048  0.0148  0.0255  0.0452  0.0494
          0.0565  0.0673  0.0676  0.0804  0.0933  0.0933  0.1026  0.1763  0.1861
          0.1960  0.2100  0.2133  0.2258  0.2420  0.2534  0.2638  0.2646  0.2698
          0.2841  0.2853  0.2996  0.3116  0.3189  0.3321  0.3335  0.3351  0.3467
          0.3483  0.3501  0.3578  0.3596  0.3749  0.3782  0.3824  0.3956  0.4017
          0.4176  0.4208  0.4210  0.4443  0.4505  0.4633  0.4780  0.4789  0.4879
          0.4960  0.5139  0.5174  0.5267  0.5336  0.5455  0.5531  0.5593  0.5687
          0.5849  0.5928  0.5961  0.6028  0.6114  0.6149  0.6208  0.6221  0.6319
          0.6351  0.6477  0.6498  0.6554  0.6555  0.6730  0.6790  0.6853  0.6915
          0.7032  0.7106  0.7131  0.7218  0.7419  0.7494  0.7538  0.7580  0.7581
          0.7609  0.7770  0.7858  0.7928  0.7978  0.7996  0.8067  0.8151  0.8213
          0.8215  0.8232  0.8283  0.8287  0.8396  0.8397  0.8558  0.8610  0.8650
          0.8656  0.8706  0.8769  0.8902  0.8928  0.8962  0.9115  0.9132  0.9189
          0.9218  0.9396  0.9476  0.9561  0.9753  0.9894  0.9923  0.9982  1.0085
          1.0136  1.0220  1.0263  1.0273  1.0335  1.0440  1.0447  1.0578  1.0603
          1.0711  1.0748  1.0853  1.0919  1.0972  1.1020  1.1115  1.1150  1.1194
          1.1235  1.1267  1.1292  1.1346  1.1362  1.1385  1.1477  1.1525  1.1551
          1.1695  1.1736  1.1834  1.1849  1.1867  1.1879  1.1974  1.1979  1.2057
          1.2081  1.2137  1.2142  1.2238  1.2301  1.2337  1.2337  1.2353  1.2398
          1.2490  1.2519  1.2534  1.2617  1.2802  1.2820  1.2885  1.2983  1.2995
          1.3057  1.3116  1.3229  1.3263  1.3387  1.3454  1.3546  1.3566  1.3634
          1.3791  1.3801  1.3812  1.3867  1.3877  1.4072  1.4074  1.4163  1.4200
          1.4264  1.4288  1.4305  1.4325  1.4464  1.4466  1.4483  1.4509  1.4546
          1.4669  1.4718  1.4737  1.4776  1.4828  1.4829  1.4855  1.4889  1.4953
          1.5042  1.5087  1.5088  1.5103  1.5109  1.5188  1.5195  1.5223  1.5269
          1.5274  1.5287  1.5374  1.5415  1.5459  1.5492  1.5494  1.5530  1.5580
          1.5637  1.5686  1.5689  1.5791  1.5842  1.5849  1.5905  1.5942  1.5955
          1.6016  1.6093  1.6173  1.6212  1.6224  1.6295  1.6374  1.6385  1.6421
          1.6437  1.6464  1.6560  1.6592  1.6686  1.6715  1.6812  1.6814  1.6910
          1.6980  1.6988  1.7102  1.7150  1.7249  1.7273  1.7308  1.7373  1.7419
          1.7472  1.7502  1.7540  1.7544  1.7695  1.7722  1.7783  1.7834  1.7858
          1.7878  1.7890  1.7922  1.7935  1.8050  1.8064  1.8066  1.8139  1.8147
          1.8178  1.8240  1.8298  1.8329  1.8350  1.8373  1.8468  1.8504  1.8506
          1.8608  1.8640  1.8642  1.8686  1.8711  1.8813  1.8830  1.8882  1.8895
          1.9005  1.9071  1.9087  1.9130  1.9167  1.9249  1.9255  1.9321  1.9376
          1.9406  1.9461  1.9477  1.9515  1.9568  1.9589  1.9605  1.9679  1.9700
          1.9749  1.9778  1.9819  1.9840  1.9891  1.9894  1.9959  1.9981  2.0041
          2.0086  2.0094  2.0117  2.0197  2.0209  2.0239  2.0275  2.0306  2.0464
          2.0472  2.0482  2.0515  2.0534  2.0615  2.0685  2.0720  2.0730  2.0792
          2.0812  2.0848  2.0882  2.0900  2.0975  2.1018  2.1129  2.1198  2.1237
          2.1306  2.1311  2.1321  2.1345  2.1382  2.1382  2.1488  2.1576  2.1640
          2.1689  2.1691  2.1733  2.1771  2.1924  2.1933  2.1953  2.2049  2.2090
          2.2217  2.2250  2.2263  2.2322  2.2358  2.2376  2.2393  2.2395  2.2430
          2.2472  2.2519  2.2545  2.2562  2.2570  2.2618  2.2640  2.2698  2.2716
          2.2731  2.2799  2.2849  2.2932  2.2990  2.3011  2.3108  2.3155  2.3192
          2.3193  2.3224  2.3387  2.3426  2.3455  2.3493  2.3538  2.3577  2.3586
          2.3675  2.3753  2.3774  2.3910  2.3956  2.3976  2.4027  2.4065  2.4146
          2.4153  2.4178  2.4201  2.4232  2.4259  2.4361  2.4380  2.4419  2.4426
          2.4446  2.4470  2.4506  2.4548  2.4588  2.4593  2.4615  2.4658  2.4660
          2.4672  2.4741  2.4784  2.4820  2.4838  2.4856  2.4890  2.4898  2.4997
          2.5006  2.5025  2.5118  2.5130  2.5223  2.5295  2.5322  2.5344  2.5360
          2.5420  2.5457  2.5475  2.5582  2.5583  2.5686  2.5692  2.5701  2.5772
          2.5819  2.5869  2.5947  2.5956  2.6051  2.6057  2.6100  2.6198  2.6240
          2.6269  2.6308  2.6389  2.6479  2.6513  2.6551  2.6613  2.6624  2.6637
          2.6690  2.6706  2.6796  2.6799  2.6828  2.6872  2.6897  2.6898  2.6929
          2.6944  2.6960  2.7059  2.7060  2.7066  2.7149  2.7197  2.7228  2.7263
          2.7314  2.7316  2.7342  2.7382  2.7441  2.7469  2.7569  2.7604  2.7625
          2.7678  2.7695  2.7715  2.7742  2.7812  2.7904  2.8026  2.8035  2.8045
          2.8102  2.8139  2.8165  2.8197  2.8228  2.8266  2.8303  2.8303  2.8470
          2.8471  2.8531  2.8562  2.8574  2.8634  2.8664  2.8667  2.8727  2.8783
          2.8831  2.8898  2.8900  2.8985  2.9039  2.9083  2.9147  2.9174  2.9202
          2.9231  2.9279  2.9339  2.9384  2.9423  2.9439  2.9485  2.9488  2.9563
          2.9599  2.9637  2.9676  2.9720  2.9758  2.9763  2.9783  2.9785  2.9850
          2.9882  2.9886  2.9906  2.9929  2.9966  2.9999  3.0035  3.0038  3.0053
          3.0108  3.0123  3.0155  3.0193  3.0269  3.0326  3.0345  3.0400  3.0439
          3.0486  3.0534  3.0545  3.0568  3.0609  3.0673  3.0679  3.0695  3.0757
          3.0769  3.0842  3.0897  3.0927  3.0945  3.1081  3.1101  3.1140  3.1159
          3.1215  3.1218  3.1289  3.1322  3.1342  3.1353  3.1357  3.1464  3.1484
          3.1498  3.1519  3.1602  3.1650  3.1683  3.1713  3.1765  3.1783  3.1857
          3.1862  3.2002  3.2032  3.2056  3.2179  3.2205  3.2260  3.2262  3.2293
          3.2315  3.2321  3.2362  3.2413  3.2464  3.2466  3.2534  3.2625  3.2627
          3.2668  3.2676  3.2744  3.2758  3.2779  3.2850  3.2875  3.2913  3.2942
          3.2999  3.3091  3.3092  3.3136  3.3171  3.3205  3.3236  3.3283  3.3317
          3.3340  3.3369  3.3372  3.3409  3.3452  3.3502  3.3541  3.3547  3.3615
          3.3619  3.3635  3.3665  3.3688  3.3724  3.3732  3.3746  3.3773  3.3818
          3.3820  3.3852  3.3882  3.3946  3.3965  3.3969  3.3986  3.4071  3.4097
          3.4098  3.4149  3.4171  3.4233  3.4243  3.4338  3.4396  3.4437  3.4455
          3.4487  3.4495  3.4554  3.4616  3.4629  3.4712  3.4783  3.4799  3.4811
          3.4820  3.4855  3.4900  3.4930  3.4948  3.4971  3.4987  3.5009  3.5056
          3.5092  3.5120  3.5151  3.5205  3.5225  3.5294  3.5315  3.5412  3.5423
          3.5440  3.5461  3.5494  3.5509  3.5524  3.5549  3.5576  3.5585  3.5636
          3.5664  3.5668  3.5760  3.5779  3.5782  3.5823  3.5884  3.5909  3.5947
          3.6059  3.6082  3.6086  3.6123  3.6129  3.6137  3.6198  3.6203  3.6271
          3.6273  3.6306  3.6376  3.6379  3.6411  3.6445  3.6451  3.6473  3.6502
          3.6548  3.6601  3.6640  3.6650  3.6656  3.6676  3.6751  3.6783  3.6815
          3.6821  3.6878  3.6885  3.6969  3.6978  3.7048  3.7064  3.7118  3.7150
          3.7214  3.7235  3.7281  3.7308  3.7320  3.7366  3.7367  3.7411  3.7439
          3.7477  3.7488  3.7532  3.7561  3.7591  3.7603  3.7631  3.7635  3.7740
          3.7768  3.7781  3.7785  3.7847  3.7851  3.7868  3.7938  3.7960  3.7968
          3.8007  3.8027  3.8048  3.8063  3.8099  3.8105  3.8118  3.8182  3.8220
          3.8227  3.8242  3.8274  3.8361  3.8426  3.8437  3.8445  3.8483  3.8497
          3.8531  3.8570  3.8579  3.8595  3.8605  3.8609  3.8636  3.8650  3.8667
          3.8690  3.8748  3.8769  3.8798  3.8856  3.8908  3.8917  3.8927  3.8951
          3.8967  3.8976  3.8978  3.8991  3.9018  3.9056  3.9083  3.9129  3.9187
          3.9187  3.9263  3.9315  3.9360  3.9423  3.9478  3.9501  3.9526  3.9539
          3.9567  3.9619  3.9622  3.9746  3.9764  3.9819  3.9907  3.9914  3.9972
          4.0008  4.0024  4.0076  4.0095  4.0115  4.0141  4.0153  4.0170  4.0259
          4.0270  4.0297  4.0322  4.0354  4.0358  4.0397  4.0412  4.0421  4.0430
          4.0459  4.0464  4.0516  4.0564  4.0578  4.0589  4.0599  4.0631  4.0642
          4.0681  4.0726  4.0761  4.0804  4.0821  4.0845  4.0866  4.0882  4.0931
          4.0970  4.0973  4.1016  4.1035  4.1093  4.1115  4.1128  4.1129  4.1179
          4.1207  4.1249  4.1277  4.1288  4.1302  4.1339  4.1426  4.1433  4.1521
          4.1583  4.1589  4.1685  4.1701  4.1748  4.1779  4.1799  4.1819  4.1867
          4.1928  4.1943  4.1963  4.2042  4.2080  4.2106  4.2133  4.2161  4.2191
          4.2205  4.2226  4.2251  4.2269  4.2292  4.2380  4.2383  4.2433  4.2448
          4.2463  4.2483  4.2498  4.2525  4.2558  4.2565  4.2596  4.2630  4.2655
          4.2757  4.2763  4.2779  4.2853  4.2860  4.2870  4.2880  4.2969  4.2980
          4.2999  4.3059  4.3165  4.3189  4.3215  4.3238  4.3266  4.3306  4.3411
          4.3455  4.3483  4.3498  4.3540  4.3572  4.3583  4.3601  4.3645  4.3650
          4.3650  4.3689  4.3714  4.3726  4.3852  4.3868  4.3914  4.4003  4.4036
          4.4053  4.4069  4.4073  4.4103  4.4129  4.4150  4.4210  4.4251  4.4279
          4.4298  4.4306  4.4354  4.4373  4.4388  4.4402  4.4445  4.4454  4.4499
          4.4624  4.4655  4.4660  4.4683  4.4748  4.4769  4.4798  4.4818  4.4822
          4.4864  4.4898  4.4903  4.4925  4.4971  4.5030  4.5102  4.5207  4.5213
          4.5226  4.5239  4.5331  4.5342  4.5360  4.5402  4.5417  4.5582  4.5606
          4.5688  4.5709  4.5750  4.5756  4.5847  4.5898  4.5905  4.5924  4.5933
          4.5947  4.5958  4.6033  4.6067  4.6105  4.6123  4.6127  4.6151  4.6154
          4.6193  4.6269  4.6342  4.6416  4.6526  4.6590  4.6646  4.6685  4.6709
          4.6793  4.6820  4.6825  4.6829  4.6846  4.6908  4.7061  4.7188  4.7202
          4.7261  4.7285  4.7411  4.7411  4.7460  4.7472  4.7497  4.7525  4.7529
          4.7545  4.7556  4.7577  4.7673  4.7782  4.7798  4.7830  4.7887  4.7901
          4.7931  4.7940  4.7969  4.8007  4.8021  4.8220  4.8220  4.8288  4.8340
          4.8360  4.8382  4.8409  4.8490  4.8511  4.8516  4.8529
 Writing out eigenvalues/vectors for ikpt=  6
 Occupation numbers for ikpt=  6
   6      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   7
   7     -0.2203 -0.2159 -0.2086 -0.1985 -0.1856 -0.1696 -0.1505 -0.1297 -0.1227
         -0.1155 -0.1100 -0.1062 -0.0198 -0.0179  0.0028  0.0125  0.0187  0.0269
          0.0342  0.0449  0.0454  0.0590  0.0725  0.0735  0.0824  0.1587  0.1661
          0.1702  0.1809  0.1961  0.1992  0.2032  0.2083  0.2489  0.2528  0.2602
          0.2646  0.2901  0.2948  0.3002  0.3272  0.3401  0.3546  0.3722  0.3764
          0.3973  0.4127  0.4140  0.4215  0.4345  0.4569  0.4698  0.4699  0.4886
          0.4948  0.5053  0.5165  0.5276  0.5318  0.5320  0.5337  0.5361  0.5371
          0.5412  0.5470  0.5484  0.5519  0.5542  0.5579  0.5592  0.5649  0.5686
          0.5690  0.5822  0.5837  0.5890  0.5899  0.5938  0.5947  0.5956  0.5965
          0.5996  0.6036  0.6071  0.6254  0.6268  0.6338  0.6526  0.6645  0.6796
          0.6884  0.7105  0.7114  0.7276  0.7484  0.7606  0.7630  0.7747  0.8008
          0.8056  0.8093  0.8205  0.8215  0.8302  0.8337  0.8344  0.8369  0.8425
          0.8483  0.8505  0.8540  0.8554  0.8631  0.8660  0.8730  0.8751  0.8760
          0.8820  0.8836  0.8867  0.8902  0.8968  0.8975  0.9038  0.9059  0.9143
          0.9249  0.9256  0.9359  0.9361  0.9446  0.9523  0.9526  0.9599  0.9677
          0.9731  0.9820  0.9861  0.9978  1.0055  1.0056  1.0131  1.0241  1.0315
          1.0446  1.0473  1.0522  1.0643  1.0724  1.0727  1.0855  1.0921  1.0927
          1.0934  1.1024  1.1034  1.1088  1.1183  1.1234  1.1256  1.1346  1.1383
          1.1481  1.1484  1.1507  1.1527  1.1592  1.1736  1.1761  1.1811  1.1864
          1.1883  1.1926  1.2008  1.2147  1.2159  1.2171  1.2229  1.2247  1.2285
          1.2290  1.2344  1.2411  1.2479  1.2556  1.2617  1.2673  1.2783  1.2788
          1.2847  1.2880  1.2982  1.3008  1.3053  1.3161  1.3231  1.3269  1.3309
          1.3347  1.3359  1.3486  1.3510  1.3528  1.3605  1.3652  1.3720  1.3837
          1.3854  1.3856  1.3938  1.3948  1.3963  1.3985  1.4026  1.4054  1.4096
          1.4172  1.4273  1.4286  1.4317  1.4385  1.4464  1.4591  1.4631  1.4641
          1.4737  1.4744  1.4823  1.4852  1.4860  1.4890  1.4937  1.4961  1.5081
          1.5111  1.5124  1.5156  1.5260  1.5350  1.5506  1.5529  1.5556  1.5562
          1.5584  1.5612  1.5642  1.5664  1.5762  1.5806  1.5836  1.5947  1.6025
          1.6103  1.6150  1.6362  1.6377  1.6436  1.6475  1.6482  1.6532  1.6538
          1.6615  1.6618  1.6660  1.6741  1.6818  1.6908  1.6936  1.7074  1.7087
          1.7148  1.7237  1.7244  1.7332  1.7379  1.7379  1.7446  1.7462  1.7518
          1.7586  1.7665  1.7694  1.7789  1.7828  1.7917  1.7957  1.8030  1.8130
          1.8188  1.8241  1.8243  1.8254  1.8273  1.8323  1.8388  1.8469  1.8504
          1.8565  1.8596  1.8619  1.8657  1.8721  1.8743  1.8841  1.8909  1.8926
          1.8947  1.9059  1.9141  1.9142  1.9161  1.9201  1.9238  1.9292  1.9297
          1.9330  1.9342  1.9416  1.9417  1.9455  1.9477  1.9558  1.9627  1.9643
          1.9710  1.9763  1.9771  1.9825  1.9844  1.9868  1.9924  1.9941  2.0039
          2.0040  2.0059  2.0063  2.0068  2.0166  2.0186  2.0214  2.0231  2.0248
          2.0331  2.0350  2.0366  2.0389  2.0499  2.0508  2.0570  2.0636  2.0645
          2.0683  2.0822  2.0834  2.0916  2.0998  2.1031  2.1048  2.1097  2.1253
          2.1282  2.1367  2.1402  2.1418  2.1543  2.1572  2.1678  2.1711  2.1789
          2.1851  2.1889  2.1913  2.1960  2.1971  2.1995  2.2027  2.2064  2.2091
          2.2150  2.2160  2.2259  2.2281  2.2317  2.2378  2.2400  2.2407  2.2451
          2.2492  2.2502  2.2544  2.2570  2.2614  2.2671  2.2700  2.2703  2.2797
          2.2813  2.2848  2.2860  2.2865  2.2920  2.2932  2.2934  2.2992  2.2996
          2.3040  2.3068  2.3100  2.3136  2.3167  2.3207  2.3308  2.3331  2.3357
          2.3402  2.3420  2.3451  2.3520  2.3521  2.3568  2.3577  2.3635  2.3703
          2.3707  2.3765  2.3777  2.3782  2.3854  2.3906  2.3937  2.3966  2.4019
          2.4066  2.4138  2.4171  2.4196  2.4209  2.4251  2.4312  2.4323  2.4360
          2.4415  2.4475  2.4538  2.4552  2.4629  2.4637  2.4711  2.4720  2.4758
          2.4781  2.4899  2.4955  2.4985  2.5031  2.5055  2.5069  2.5150  2.5180
          2.5225  2.5247  2.5298  2.5364  2.5465  2.5513  2.5532  2.5571  2.5605
          2.5655  2.5716  2.5746  2.5749  2.5774  2.5840  2.5856  2.5858  2.5909
          2.5955  2.6005  2.6024  2.6056  2.6154  2.6185  2.6213  2.6223  2.6231
          2.6339  2.6342  2.6403  2.6405  2.6437  2.6500  2.6524  2.6601  2.6648
          2.6669  2.6670  2.6717  2.6741  2.6850  2.6855  2.6916  2.6923  2.6932
          2.6962  2.6970  2.7054  2.7090  2.7095  2.7119  2.7159  2.7161  2.7191
          2.7256  2.7273  2.7299  2.7342  2.7393  2.7397  2.7428  2.7457  2.7491
          2.7551  2.7568  2.7635  2.7656  2.7704  2.7773  2.7791  2.7820  2.7856
          2.7901  2.7924  2.8006  2.8054  2.8064  2.8102  2.8131  2.8149  2.8171
          2.8229  2.8250  2.8253  2.8276  2.8323  2.8332  2.8374  2.8379  2.8390
          2.8432  2.8458  2.8483  2.8498  2.8512  2.8547  2.8588  2.8609  2.8662
          2.8693  2.8754  2.8846  2.8869  2.8914  2.8938  2.8962  2.8972  2.9010
          2.9031  2.9127  2.9187  2.9223  2.9234  2.9279  2.9320  2.9348  2.9388
          2.9444  2.9476  2.9508  2.9594  2.9631  2.9651  2.9692  2.9696  2.9708
          2.9739  2.9763  2.9773  2.9810  2.9865  2.9884  2.9898  2.9932  2.9964
          2.9991  3.0020  3.0038  3.0056  3.0113  3.0153  3.0179  3.0230  3.0238
          3.0286  3.0310  3.0331  3.0503  3.0527  3.0567  3.0595  3.0624  3.0653
          3.0708  3.0783  3.0790  3.0828  3.0855  3.0934  3.0949  3.0977  3.0985
          3.1017  3.1127  3.1157  3.1179  3.1213  3.1223  3.1270  3.1318  3.1368
          3.1412  3.1451  3.1492  3.1502  3.1523  3.1647  3.1655  3.1716  3.1740
          3.1745  3.1768  3.1788  3.1856  3.1857  3.1873  3.1987  3.2041  3.2077
          3.2173  3.2199  3.2271  3.2290  3.2393  3.2396  3.2430  3.2449  3.2460
          3.2522  3.2604  3.2605  3.2656  3.2722  3.2727  3.2738  3.2806  3.2885
          3.2939  3.2943  3.2969  3.2975  3.3046  3.3076  3.3103  3.3116  3.3163
          3.3167  3.3232  3.3235  3.3316  3.3358  3.3386  3.3425  3.3455  3.3462
          3.3539  3.3595  3.3613  3.3624  3.3661  3.3675  3.3695  3.3718  3.3740
          3.3857  3.3914  3.3981  3.4040  3.4095  3.4136  3.4166  3.4174  3.4259
          3.4267  3.4304  3.4333  3.4343  3.4473  3.4534  3.4537  3.4569  3.4620
          3.4626  3.4640  3.4673  3.4681  3.4776  3.4833  3.4863  3.4912  3.4950
          3.4970  3.4979  3.5003  3.5042  3.5092  3.5100  3.5117  3.5158  3.5192
          3.5194  3.5224  3.5255  3.5270  3.5286  3.5288  3.5336  3.5361  3.5373
          3.5374  3.5430  3.5458  3.5488  3.5521  3.5574  3.5596  3.5673  3.5681
          3.5707  3.5787  3.5793  3.5821  3.5843  3.5918  3.5955  3.5967  3.6015
          3.6018  3.6066  3.6084  3.6127  3.6151  3.6184  3.6197  3.6200  3.6209
          3.6226  3.6268  3.6271  3.6278  3.6346  3.6393  3.6393  3.6475  3.6479
          3.6527  3.6554  3.6562  3.6565  3.6664  3.6718  3.6744  3.6799  3.6874
          3.6967  3.6998  3.7048  3.7128  3.7142  3.7148  3.7208  3.7230  3.7263
          3.7286  3.7293  3.7321  3.7414  3.7501  3.7557  3.7604  3.7800  3.7801
          3.7818  3.7821  3.7875  3.7891  3.7957  3.8010  3.8024  3.8103  3.8160
          3.8185  3.8231  3.8280  3.8295  3.8297  3.8342  3.8344  3.8364  3.8374
          3.8405  3.8431  3.8443  3.8488  3.8504  3.8533  3.8544  3.8612  3.8651
          3.8706  3.8721  3.8792  3.8839  3.8846  3.8882  3.8936  3.8986  3.9022
          3.9046  3.9071  3.9090  3.9130  3.9178  3.9214  3.9227  3.9228  3.9383
          3.9432  3.9448  3.9507  3.9520  3.9541  3.9572  3.9596  3.9599  3.9713
          3.9730  3.9786  3.9793  3.9845  3.9865  3.9895  3.9911  3.9972  3.9986
          4.0024  4.0070  4.0077  4.0098  4.0132  4.0199  4.0241  4.0273  4.0276
          4.0386  4.0426  4.0472  4.0507  4.0566  4.0643  4.0651  4.0708  4.0727
          4.0750  4.0822  4.0857  4.0870  4.0910  4.0924  4.0935  4.0980  4.1027
          4.1038  4.1060  4.1153  4.1244  4.1300  4.1311  4.1417  4.1426  4.1462
          4.1482  4.1495  4.1531  4.1549  4.1649  4.1656  4.1681  4.1699  4.1738
          4.1776  4.1797  4.1818  4.1858  4.1900  4.1930  4.1955  4.1962  4.1970
          4.2014  4.2018  4.2022  4.2041  4.2069  4.2097  4.2125  4.2133  4.2159
          4.2163  4.2169  4.2213  4.2232  4.2238  4.2245  4.2274  4.2274  4.2293
          4.2305  4.2338  4.2353  4.2358  4.2401  4.2467  4.2503  4.2511  4.2542
          4.2570  4.2592  4.2617  4.2638  4.2656  4.2684  4.2685  4.2702  4.2723
          4.2734  4.2774  4.2814  4.3004  4.3071  4.3157  4.3195  4.3200  4.3235
          4.3276  4.3321  4.3333  4.3347  4.3360  4.3384  4.3388  4.3470  4.3537
          4.3552  4.3563  4.3571  4.3634  4.3662  4.3681  4.3882  4.3969  4.3987
          4.4018  4.4070  4.4077  4.4103  4.4149  4.4157  4.4215  4.4228  4.4320
          4.4487  4.4531  4.4613  4.4625  4.4637  4.4658  4.4716  4.4729  4.4760
          4.4794  4.4834  4.4847  4.4870  4.4892  4.4904  4.4944  4.4968  4.5011
          4.5035  4.5048  4.5076  4.5080  4.5143  4.5249  4.5310  4.5355  4.5425
          4.5436  4.5503  4.5512  4.5523  4.5571  4.5605  4.5614  4.5652  4.5708
          4.5721  4.5744  4.5798  4.5848  4.5892  4.5906  4.5920  4.5962  4.6056
          4.6096  4.6113  4.6115  4.6181  4.6255  4.6268  4.6302  4.6354  4.6365
          4.6407  4.6465  4.6509  4.6590  4.6610  4.6613  4.6645  4.6651  4.6669
          4.6707  4.6735  4.6778  4.6783  4.6793  4.6822  4.6856  4.6858  4.6912
          4.6929  4.6946  4.7029  4.7100  4.7115  4.7165  4.7220  4.7312  4.7381
          4.7411  4.7451  4.7463  4.7502  4.7561  4.7579  4.7593  4.7664  4.7686
          4.7694  4.7702  4.7754  4.7765  4.7783  4.7819  4.7821  4.7849  4.7888
          4.7904  4.7909  4.7923  4.8024  4.8035  4.8079  4.8115  4.8220  4.8336
          4.8424  4.8505  4.8528  4.8532  4.8596  4.8608  4.8615  4.8656  4.8671
          4.8677  4.8898  4.8976  4.9066  4.9121  4.9314  4.9316
 Writing out eigenvalues/vectors for ikpt=  7
 Occupation numbers for ikpt=  7
   7      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 
--- !WARNING
message: |
    The diagonalized eigenvalues differ by more than 10^-3 Hartree
     with respect to the conjugated gradient values.
src_file: Subroutine Unknown
src_line: 0
...
 
 Eigenvalues in Hartree for ikpt=   8
   8     -0.2790 -0.2710 -0.2583 -0.2416 -0.2225 -0.2041 -0.1149 -0.0982 -0.0707
         -0.0444 -0.0238 -0.0127 -0.0068  0.0048  0.0149  0.0254  0.0452  0.0494
          0.0565  0.0673  0.0677  0.0804  0.0932  0.0932  0.1025  0.1762  0.1860
          0.1963  0.2103  0.2128  0.2264  0.2419  0.2552  0.2633  0.2645  0.2678
          0.2820  0.2853  0.3022  0.3117  0.3182  0.3314  0.3335  0.3369  0.3474
          0.3483  0.3560  0.3590  0.3597  0.3661  0.3783  0.3795  0.3957  0.4026
          0.4095  0.4208  0.4322  0.4508  0.4549  0.4636  0.4686  0.4786  0.4827
          0.4951  0.5130  0.5156  0.5209  0.5490  0.5531  0.5607  0.5610  0.5623
          0.5713  0.5875  0.5944  0.6046  0.6062  0.6159  0.6203  0.6205  0.6412
          0.6443  0.6471  0.6521  0.6557  0.6643  0.6692  0.6731  0.6794  0.6818
          0.7006  0.7076  0.7163  0.7286  0.7331  0.7373  0.7625  0.7626  0.7687
          0.7767  0.7805  0.7864  0.7937  0.7983  0.7992  0.8008  0.8071  0.8119
          0.8188  0.8205  0.8243  0.8318  0.8396  0.8442  0.8447  0.8541  0.8659
          0.8699  0.8740  0.8806  0.8876  0.8920  0.8991  0.9077  0.9182  0.9318
          0.9419  0.9494  0.9521  0.9589  0.9654  0.9690  0.9857  0.9885  0.9933
          0.9984  1.0033  1.0235  1.0468  1.0532  1.0543  1.0625  1.0658  1.0692
          1.0702  1.0742  1.0887  1.0901  1.0936  1.1013  1.1106  1.1120  1.1135
          1.1138  1.1187  1.1287  1.1351  1.1416  1.1440  1.1444  1.1486  1.1536
          1.1583  1.1650  1.1705  1.1793  1.1882  1.1942  1.2039  1.2054  1.2086
          1.2097  1.2131  1.2137  1.2189  1.2294  1.2351  1.2385  1.2416  1.2445
          1.2538  1.2577  1.2662  1.2688  1.2728  1.2812  1.2841  1.2912  1.3000
          1.3018  1.3143  1.3161  1.3258  1.3311  1.3373  1.3437  1.3609  1.3619
          1.3663  1.3747  1.3938  1.4063  1.4067  1.4097  1.4154  1.4162  1.4220
          1.4247  1.4263  1.4295  1.4325  1.4392  1.4395  1.4441  1.4526  1.4530
          1.4544  1.4636  1.4696  1.4699  1.4824  1.4836  1.4925  1.4954  1.5011
          1.5026  1.5078  1.5109  1.5159  1.5202  1.5215  1.5223  1.5259  1.5296
          1.5335  1.5381  1.5386  1.5440  1.5454  1.5476  1.5505  1.5537  1.5561
          1.5590  1.5603  1.5624  1.5665  1.5709  1.5819  1.5853  1.5950  1.5997
          1.5998  1.6113  1.6139  1.6162  1.6222  1.6260  1.6319  1.6389  1.6485
          1.6491  1.6529  1.6594  1.6611  1.6669  1.6746  1.6782  1.6931  1.6952
          1.6985  1.7182  1.7189  1.7213  1.7248  1.7259  1.7293  1.7386  1.7389
          1.7473  1.7482  1.7506  1.7528  1.7640  1.7654  1.7709  1.7738  1.7759
          1.7777  1.7856  1.7915  1.7941  1.7985  1.8017  1.8080  1.8087  1.8165
          1.8193  1.8239  1.8246  1.8305  1.8414  1.8440  1.8507  1.8519  1.8645
          1.8650  1.8694  1.8705  1.8731  1.8793  1.8842  1.8873  1.8907  1.8925
          1.8984  1.9035  1.9116  1.9164  1.9174  1.9208  1.9250  1.9317  1.9344
          1.9378  1.9443  1.9454  1.9534  1.9547  1.9561  1.9574  1.9598  1.9689
          1.9710  1.9784  1.9806  1.9831  1.9853  1.9920  1.9971  2.0007  2.0058
          2.0086  2.0108  2.0160  2.0199  2.0243  2.0260  2.0314  2.0377  2.0378
          2.0410  2.0411  2.0484  2.0535  2.0577  2.0626  2.0660  2.0674  2.0759
          2.0828  2.0843  2.0917  2.1086  2.1099  2.1120  2.1121  2.1205  2.1231
          2.1294  2.1309  2.1353  2.1376  2.1440  2.1506  2.1527  2.1545  2.1573
          2.1648  2.1653  2.1771  2.1802  2.1811  2.1855  2.1903  2.1974  2.2058
          2.2164  2.2189  2.2234  2.2247  2.2319  2.2323  2.2327  2.2359  2.2385
          2.2446  2.2446  2.2509  2.2544  2.2613  2.2637  2.2644  2.2670  2.2790
          2.2885  2.2945  2.2950  2.3000  2.3055  2.3135  2.3149  2.3189  2.3217
          2.3298  2.3310  2.3332  2.3384  2.3404  2.3460  2.3565  2.3580  2.3658
          2.3667  2.3707  2.3744  2.3795  2.3808  2.3968  2.3974  2.3979  2.4077
          2.4081  2.4136  2.4172  2.4175  2.4254  2.4281  2.4314  2.4377  2.4379
          2.4416  2.4476  2.4505  2.4591  2.4613  2.4657  2.4691  2.4735  2.4752
          2.4770  2.4778  2.4790  2.4853  2.4871  2.4929  2.4938  2.4977  2.4998
          2.5020  2.5070  2.5145  2.5164  2.5176  2.5210  2.5225  2.5278  2.5327
          2.5386  2.5417  2.5462  2.5599  2.5623  2.5684  2.5695  2.5847  2.5923
          2.5954  2.5984  2.5989  2.6041  2.6066  2.6100  2.6122  2.6194  2.6249
          2.6262  2.6280  2.6365  2.6386  2.6408  2.6430  2.6499  2.6527  2.6600
          2.6615  2.6686  2.6748  2.6763  2.6803  2.6843  2.6907  2.6962  2.6968
          2.7015  2.7019  2.7041  2.7041  2.7118  2.7155  2.7163  2.7198  2.7272
          2.7326  2.7341  2.7345  2.7415  2.7431  2.7506  2.7577  2.7581  2.7637
          2.7680  2.7767  2.7777  2.7799  2.7882  2.7914  2.7963  2.7998  2.8007
          2.8064  2.8155  2.8190  2.8207  2.8288  2.8334  2.8349  2.8371  2.8542
          2.8560  2.8607  2.8608  2.8717  2.8736  2.8736  2.8844  2.8879  2.8885
          2.8896  2.8959  2.8991  2.9004  2.9022  2.9066  2.9103  2.9121  2.9182
          2.9197  2.9208  2.9248  2.9282  2.9293  2.9340  2.9343  2.9449  2.9503
          2.9547  2.9587  2.9603  2.9634  2.9648  2.9677  2.9690  2.9742  2.9780
          2.9787  2.9818  2.9872  2.9927  2.9939  2.9991  2.9992  3.0010  3.0069
          3.0124  3.0125  3.0224  3.0241  3.0288  3.0347  3.0402  3.0440  3.0481
          3.0515  3.0521  3.0586  3.0651  3.0671  3.0676  3.0709  3.0732  3.0803
          3.0847  3.0892  3.0898  3.0964  3.0968  3.1040  3.1043  3.1135  3.1177
          3.1210  3.1211  3.1224  3.1346  3.1375  3.1443  3.1465  3.1545  3.1585
          3.1603  3.1637  3.1694  3.1768  3.1769  3.1810  3.1833  3.1860  3.1877
          3.1907  3.1972  3.2059  3.2079  3.2089  3.2192  3.2274  3.2302  3.2317
          3.2346  3.2348  3.2353  3.2430  3.2459  3.2460  3.2467  3.2475  3.2560
          3.2625  3.2634  3.2652  3.2707  3.2720  3.2755  3.2824  3.2874  3.2898
          3.2901  3.2921  3.2961  3.2966  3.3046  3.3049  3.3160  3.3166  3.3196
          3.3230  3.3258  3.3267  3.3342  3.3387  3.3398  3.3467  3.3502  3.3540
          3.3551  3.3560  3.3597  3.3655  3.3688  3.3767  3.3814  3.3831  3.3870
          3.3923  3.3966  3.4016  3.4086  3.4099  3.4125  3.4161  3.4199  3.4268
          3.4323  3.4325  3.4332  3.4388  3.4410  3.4416  3.4497  3.4519  3.4523
          3.4573  3.4596  3.4616  3.4625  3.4668  3.4692  3.4736  3.4781  3.4794
          3.4869  3.4900  3.4926  3.4980  3.4991  3.4995  3.5028  3.5049  3.5064
          3.5136  3.5156  3.5220  3.5264  3.5303  3.5321  3.5364  3.5374  3.5396
          3.5436  3.5456  3.5498  3.5503  3.5510  3.5585  3.5591  3.5600  3.5630
          3.5655  3.5658  3.5689  3.5709  3.5725  3.5739  3.5745  3.5768  3.5783
          3.5863  3.5876  3.5898  3.5933  3.5941  3.6006  3.6035  3.6072  3.6108
          3.6126  3.6173  3.6229  3.6270  3.6278  3.6301  3.6358  3.6389  3.6430
          3.6503  3.6542  3.6550  3.6660  3.6751  3.6753  3.6811  3.6841  3.6890
          3.6910  3.7024  3.7036  3.7069  3.7132  3.7154  3.7207  3.7240  3.7267
          3.7273  3.7310  3.7314  3.7348  3.7381  3.7414  3.7427  3.7449  3.7460
          3.7526  3.7556  3.7593  3.7598  3.7621  3.7655  3.7655  3.7702  3.7720
          3.7818  3.7847  3.7899  3.7899  3.7948  3.7975  3.7976  3.7998  3.8026
          3.8051  3.8066  3.8104  3.8126  3.8142  3.8198  3.8205  3.8229  3.8274
          3.8277  3.8302  3.8345  3.8372  3.8406  3.8422  3.8449  3.8457  3.8502
          3.8543  3.8555  3.8560  3.8580  3.8591  3.8591  3.8608  3.8635  3.8657
          3.8674  3.8694  3.8716  3.8746  3.8805  3.8811  3.8825  3.8841  3.8852
          3.8890  3.8904  3.8935  3.8954  3.8991  3.9022  3.9064  3.9096  3.9110
          3.9151  3.9191  3.9214  3.9258  3.9308  3.9333  3.9351  3.9376  3.9468
          3.9486  3.9584  3.9599  3.9697  3.9731  3.9744  3.9754  3.9757  3.9801
          3.9834  3.9863  3.9880  3.9886  3.9909  3.9979  4.0018  4.0029  4.0103
          4.0140  4.0190  4.0193  4.0194  4.0230  4.0286  4.0347  4.0400  4.0427
          4.0449  4.0568  4.0590  4.0593  4.0657  4.0751  4.0800  4.0825  4.0841
          4.0864  4.0897  4.0908  4.0968  4.1018  4.1042  4.1042  4.1065  4.1066
          4.1114  4.1134  4.1193  4.1246  4.1264  4.1304  4.1324  4.1353  4.1359
          4.1376  4.1395  4.1434  4.1485  4.1505  4.1527  4.1545  4.1609  4.1624
          4.1643  4.1702  4.1712  4.1741  4.1757  4.1773  4.1822  4.1840  4.1862
          4.1893  4.1938  4.2001  4.2008  4.2051  4.2058  4.2153  4.2191  4.2215
          4.2253  4.2269  4.2283  4.2305  4.2321  4.2355  4.2358  4.2376  4.2400
          4.2419  4.2433  4.2464  4.2510  4.2521  4.2553  4.2617  4.2663  4.2677
          4.2687  4.2769  4.2776  4.2788  4.2800  4.2807  4.2832  4.2859  4.2884
          4.2911  4.2940  4.3004  4.3038  4.3095  4.3113  4.3182  4.3310  4.3311
          4.3344  4.3395  4.3398  4.3437  4.3437  4.3476  4.3504  4.3518  4.3569
          4.3615  4.3621  4.3636  4.3676  4.3691  4.3816  4.3817  4.3855  4.3896
          4.3943  4.3961  4.4009  4.4027  4.4033  4.4047  4.4093  4.4140  4.4151
          4.4218  4.4254  4.4272  4.4338  4.4444  4.4477  4.4495  4.4607  4.4617
          4.4660  4.4673  4.4720  4.4753  4.4821  4.4919  4.4931  4.4958  4.5029
          4.5046  4.5073  4.5090  4.5118  4.5140  4.5205  4.5208  4.5217  4.5240
          4.5276  4.5276  4.5298  4.5439  4.5475  4.5538  4.5551  4.5569  4.5620
          4.5644  4.5709  4.5768  4.5794  4.5863  4.5867  4.5876  4.5919  4.5946
          4.5989  4.6061  4.6074  4.6109  4.6118  4.6166  4.6168  4.6335  4.6348
          4.6361  4.6391  4.6418  4.6426  4.6440  4.6449  4.6487  4.6499  4.6678
          4.6705  4.6748  4.6755  4.6803  4.6858  4.6886  4.6913  4.6929  4.7016
          4.7028  4.7131  4.7168  4.7265  4.7319  4.7351  4.7395  4.7462  4.7486
          4.7520  4.7555  4.7691  4.7745  4.7796  4.7804  4.7820  4.7907  4.7943
          4.7971  4.7998  4.8062  4.8080  4.8089  4.8099  4.8135  4.8179  4.8220
          4.8303  4.8338  4.8374  4.8401  4.8487  4.8535  4.8551
 Writing out eigenvalues/vectors for ikpt=  8
 Occupation numbers for ikpt=  8
   8      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=   9
   9     -0.2298 -0.2227 -0.2118 -0.1976 -0.1812 -0.1631 -0.1443 -0.1267 -0.1117
         -0.0987 -0.0864 -0.0752 -0.0231 -0.0212 -0.0165 -0.0074 -0.0037 -0.0019
          0.0094  0.0139  0.0190  0.0347  0.0450  0.0572  0.0737  0.1973  0.1975
          0.2278  0.2292  0.2328  0.2632  0.2677  0.2702  0.2904  0.2920  0.2968
          0.3052  0.3061  0.3088  0.3155  0.3191  0.3213  0.3321  0.3345  0.3435
          0.3452  0.3464  0.3503  0.3604  0.3650  0.3993  0.4057  0.4135  0.4447
          0.4516  0.4601  0.4827  0.4869  0.4932  0.4988  0.5066  0.5135  0.5160
          0.5330  0.5412  0.5461  0.5543  0.5635  0.5763  0.5847  0.5868  0.5898
          0.5934  0.6011  0.6017  0.6071  0.6120  0.6150  0.6187  0.6268  0.6323
          0.6395  0.6422  0.6579  0.6726  0.6907  0.6997  0.7095  0.7209  0.7235
          0.7314  0.7421  0.7488  0.7550  0.7595  0.7650  0.7735  0.7809  0.7849
          0.7946  0.7996  0.8065  0.8078  0.8123  0.8136  0.8164  0.8216  0.8260
          0.8300  0.8323  0.8329  0.8435  0.8448  0.8461  0.8470  0.8532  0.8610
          0.8656  0.8706  0.8786  0.8827  0.8840  0.8967  0.8984  0.9047  0.9087
          0.9217  0.9262  0.9313  0.9350  0.9520  0.9586  0.9686  0.9721  0.9762
          0.9858  0.9864  0.9984  1.0028  1.0114  1.0156  1.0210  1.0279  1.0307
          1.0442  1.0476  1.0528  1.0587  1.0633  1.0690  1.0717  1.0767  1.0809
          1.0910  1.0924  1.0959  1.1012  1.1115  1.1224  1.1236  1.1315  1.1356
          1.1508  1.1544  1.1549  1.1589  1.1622  1.1656  1.1693  1.1728  1.1797
          1.1841  1.1857  1.1936  1.1983  1.2042  1.2060  1.2119  1.2162  1.2193
          1.2200  1.2277  1.2283  1.2369  1.2441  1.2480  1.2603  1.2660  1.2702
          1.2765  1.2784  1.2903  1.2906  1.2959  1.3065  1.3147  1.3160  1.3194
          1.3288  1.3382  1.3414  1.3466  1.3514  1.3565  1.3612  1.3692  1.3757
          1.3847  1.3860  1.3969  1.4013  1.4080  1.4115  1.4181  1.4220  1.4265
          1.4304  1.4397  1.4466  1.4533  1.4582  1.4674  1.4706  1.4757  1.4816
          1.4872  1.4883  1.4939  1.5025  1.5063  1.5100  1.5161  1.5185  1.5220
          1.5240  1.5261  1.5311  1.5338  1.5389  1.5501  1.5572  1.5603  1.5642
          1.5698  1.5747  1.5770  1.5849  1.5872  1.5924  1.6030  1.6048  1.6097
          1.6118  1.6184  1.6265  1.6351  1.6361  1.6452  1.6490  1.6536  1.6559
          1.6591  1.6735  1.6762  1.6816  1.6905  1.6961  1.6996  1.7034  1.7066
          1.7135  1.7191  1.7267  1.7304  1.7324  1.7408  1.7490  1.7507  1.7535
          1.7617  1.7686  1.7697  1.7751  1.7811  1.7879  1.7895  1.7961  1.7995
          1.8008  1.8028  1.8073  1.8083  1.8136  1.8180  1.8236  1.8262  1.8351
          1.8414  1.8479  1.8528  1.8620  1.8633  1.8673  1.8688  1.8759  1.8775
          1.8835  1.8885  1.8940  1.8971  1.9006  1.9055  1.9074  1.9158  1.9205
          1.9241  1.9312  1.9368  1.9420  1.9469  1.9535  1.9571  1.9592  1.9618
          1.9691  1.9714  1.9757  1.9779  1.9837  1.9883  1.9897  1.9916  1.9934
          1.9986  2.0039  2.0081  2.0123  2.0184  2.0243  2.0281  2.0322  2.0375
          2.0387  2.0435  2.0489  2.0517  2.0621  2.0647  2.0668  2.0698  2.0767
          2.0790  2.0850  2.0907  2.0936  2.1011  2.1057  2.1112  2.1122  2.1215
          2.1307  2.1348  2.1373  2.1444  2.1505  2.1550  2.1600  2.1615  2.1638
          2.1704  2.1732  2.1739  2.1809  2.1900  2.1903  2.1930  2.1946  2.2000
          2.2048  2.2065  2.2087  2.2113  2.2169  2.2176  2.2202  2.2282  2.2309
          2.2354  2.2396  2.2427  2.2484  2.2565  2.2596  2.2649  2.2733  2.2803
          2.2838  2.2906  2.2920  2.2987  2.3022  2.3032  2.3109  2.3126  2.3179
          2.3230  2.3247  2.3299  2.3340  2.3424  2.3439  2.3450  2.3497  2.3535
          2.3573  2.3627  2.3658  2.3712  2.3729  2.3742  2.3823  2.3830  2.3880
          2.3917  2.3987  2.4001  2.4021  2.4065  2.4071  2.4100  2.4159  2.4175
          2.4185  2.4202  2.4229  2.4285  2.4355  2.4375  2.4406  2.4434  2.4460
          2.4518  2.4542  2.4566  2.4606  2.4679  2.4698  2.4726  2.4759  2.4803
          2.4837  2.4869  2.4897  2.4906  2.4956  2.5003  2.5022  2.5099  2.5133
          2.5166  2.5178  2.5192  2.5240  2.5288  2.5330  2.5371  2.5386  2.5413
          2.5437  2.5469  2.5519  2.5542  2.5634  2.5672  2.5689  2.5713  2.5752
          2.5778  2.5800  2.5840  2.5864  2.5895  2.5926  2.5936  2.6026  2.6072
          2.6122  2.6155  2.6169  2.6208  2.6236  2.6266  2.6352  2.6369  2.6414
          2.6598  2.6623  2.6665  2.6711  2.6763  2.6767  2.6823  2.6883  2.6907
          2.6929  2.6976  2.6985  2.7022  2.7113  2.7169  2.7197  2.7224  2.7239
          2.7299  2.7358  2.7371  2.7422  2.7443  2.7457  2.7544  2.7569  2.7605
          2.7618  2.7656  2.7678  2.7757  2.7795  2.7836  2.7878  2.7879  2.7926
          2.7946  2.8025  2.8026  2.8064  2.8087  2.8128  2.8131  2.8165  2.8199
          2.8252  2.8265  2.8285  2.8343  2.8398  2.8423  2.8456  2.8535  2.8568
          2.8608  2.8648  2.8674  2.8680  2.8708  2.8738  2.8767  2.8798  2.8875
          2.8891  2.8938  2.8962  2.8981  2.8993  2.9053  2.9081  2.9116  2.9130
          2.9178  2.9216  2.9245  2.9253  2.9327  2.9364  2.9379  2.9443  2.9493
          2.9516  2.9576  2.9601  2.9628  2.9667  2.9688  2.9743  2.9759  2.9782
          2.9824  2.9866  2.9919  2.9927  3.0010  3.0052  3.0130  3.0194  3.0208
          3.0234  3.0264  3.0270  3.0322  3.0397  3.0401  3.0451  3.0482  3.0519
          3.0527  3.0575  3.0606  3.0711  3.0741  3.0781  3.0794  3.0822  3.0855
          3.0867  3.0893  3.0924  3.0962  3.0986  3.1059  3.1108  3.1111  3.1132
          3.1180  3.1187  3.1218  3.1298  3.1349  3.1375  3.1415  3.1433  3.1455
          3.1488  3.1520  3.1539  3.1602  3.1645  3.1706  3.1722  3.1739  3.1774
          3.1787  3.1838  3.1849  3.1872  3.1927  3.1945  3.1969  3.1982  3.2010
          3.2017  3.2064  3.2076  3.2122  3.2130  3.2184  3.2203  3.2258  3.2280
          3.2310  3.2317  3.2378  3.2424  3.2443  3.2494  3.2521  3.2592  3.2645
          3.2713  3.2739  3.2782  3.2800  3.2868  3.2892  3.2964  3.3008  3.3053
          3.3087  3.3122  3.3141  3.3182  3.3220  3.3270  3.3281  3.3327  3.3368
          3.3430  3.3495  3.3514  3.3556  3.3634  3.3678  3.3695  3.3763  3.3784
          3.3828  3.3861  3.3897  3.3987  3.3998  3.4034  3.4064  3.4097  3.4162
          3.4174  3.4192  3.4226  3.4261  3.4281  3.4326  3.4357  3.4399  3.4429
          3.4550  3.4560  3.4573  3.4600  3.4633  3.4654  3.4667  3.4703  3.4745
          3.4749  3.4820  3.4888  3.4920  3.4942  3.4971  3.4985  3.5027  3.5054
          3.5094  3.5108  3.5133  3.5194  3.5201  3.5242  3.5264  3.5300  3.5318
          3.5342  3.5348  3.5385  3.5422  3.5442  3.5455  3.5468  3.5493  3.5519
          3.5527  3.5552  3.5575  3.5593  3.5640  3.5682  3.5735  3.5744  3.5788
          3.5820  3.5855  3.5906  3.5967  3.6046  3.6070  3.6121  3.6144  3.6186
          3.6255  3.6307  3.6336  3.6338  3.6386  3.6411  3.6460  3.6486  3.6548
          3.6599  3.6662  3.6675  3.6770  3.6777  3.6808  3.6820  3.6826  3.6880
          3.6970  3.6992  3.7018  3.7115  3.7172  3.7181  3.7248  3.7308  3.7336
          3.7359  3.7371  3.7410  3.7497  3.7539  3.7593  3.7630  3.7648  3.7694
          3.7724  3.7746  3.7805  3.7852  3.7896  3.7983  3.8011  3.8026  3.8058
          3.8096  3.8145  3.8231  3.8240  3.8283  3.8318  3.8366  3.8393  3.8421
          3.8471  3.8485  3.8516  3.8518  3.8588  3.8612  3.8651  3.8697  3.8717
          3.8758  3.8772  3.8819  3.8886  3.8899  3.8974  3.9002  3.9012  3.9038
          3.9062  3.9064  3.9139  3.9150  3.9178  3.9212  3.9259  3.9292  3.9312
          3.9352  3.9382  3.9418  3.9457  3.9492  3.9638  3.9666  3.9692  3.9728
          3.9751  3.9771  3.9787  3.9816  3.9829  3.9927  3.9975  4.0027  4.0090
          4.0125  4.0158  4.0177  4.0230  4.0260  4.0288  4.0334  4.0371  4.0428
          4.0464  4.0514  4.0545  4.0584  4.0603  4.0637  4.0657  4.0694  4.0722
          4.0752  4.0775  4.0831  4.0836  4.0855  4.0896  4.0917  4.0980  4.1038
          4.1061  4.1101  4.1133  4.1189  4.1212  4.1260  4.1295  4.1308  4.1421
          4.1449  4.1480  4.1506  4.1565  4.1612  4.1628  4.1651  4.1708  4.1762
          4.1771  4.1845  4.1856  4.1913  4.1933  4.1970  4.1987  4.2020  4.2057
          4.2109  4.2151  4.2172  4.2195  4.2226  4.2247  4.2301  4.2326  4.2392
          4.2417  4.2451  4.2465  4.2486  4.2501  4.2520  4.2526  4.2543  4.2570
          4.2574  4.2650  4.2667  4.2668  4.2675  4.2713  4.2733  4.2771  4.2800
          4.2802  4.2824  4.2837  4.2867  4.2900  4.2923  4.2936  4.2987  4.3007
          4.3022  4.3062  4.3112  4.3139  4.3148  4.3164  4.3185  4.3198  4.3215
          4.3234  4.3257  4.3277  4.3316  4.3319  4.3368  4.3430  4.3468  4.3480
          4.3514  4.3526  4.3576  4.3577  4.3668  4.3734  4.3799  4.3823  4.3850
          4.3921  4.3981  4.4058  4.4068  4.4089  4.4146  4.4242  4.4264  4.4304
          4.4328  4.4363  4.4440  4.4456  4.4484  4.4499  4.4508  4.4542  4.4577
          4.4582  4.4638  4.4683  4.4704  4.4799  4.4823  4.4828  4.4857  4.4912
          4.4950  4.5021  4.5072  4.5103  4.5130  4.5219  4.5242  4.5305  4.5334
          4.5354  4.5374  4.5390  4.5443  4.5461  4.5472  4.5511  4.5535  4.5546
          4.5609  4.5641  4.5691  4.5722  4.5758  4.5790  4.5831  4.5852  4.5870
          4.5880  4.5921  4.5954  4.6024  4.6093  4.6131  4.6161  4.6183  4.6189
          4.6238  4.6282  4.6307  4.6373  4.6449  4.6507  4.6625  4.6634  4.6653
          4.6663  4.6677  4.6772  4.6801  4.6829  4.6852  4.6919  4.6943  4.6958
          4.7011  4.7035  4.7045  4.7062  4.7123  4.7141  4.7230  4.7246  4.7309
          4.7325  4.7421  4.7434  4.7462  4.7496  4.7519  4.7547  4.7555  4.7571
          4.7580  4.7588  4.7610  4.7697  4.7775  4.7805  4.7836  4.7917  4.8204
          4.8224  4.8248  4.8452  4.8484  4.8489  4.8519  4.8535  4.8551  4.8551
          4.8596  4.8641  4.8672  4.8714  4.8799  4.8996  4.9035  4.9061  4.9116
          4.9183  4.9235  4.9416  4.9465  4.9498  4.9722  4.9954
 Writing out eigenvalues/vectors for ikpt=  9
 Occupation numbers for ikpt=  9
   9      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  10
  10     -0.3054 -0.2975 -0.2846 -0.2679 -0.2486 -0.2303 -0.1215 -0.1031 -0.0700
         -0.0284  0.0188  0.0670  0.0879  0.0879  0.0932  0.0932  0.1013  0.1013
          0.1110  0.1115  0.1115  0.1217  0.1217  0.1290  0.1290  0.1899  0.1934
          0.2009  0.2097  0.2191  0.2245  0.2304  0.2304  0.2434  0.2434  0.2447
          0.2561  0.2561  0.2571  0.2571  0.2606  0.2606  0.2620  0.2620  0.2770
          0.2853  0.3445  0.3541  0.4038  0.4068  0.4068  0.4080  0.4080  0.4099
          0.4206  0.4246  0.4246  0.4270  0.4270  0.4289  0.4332  0.4360  0.4555
          0.4555  0.4581  0.4613  0.4948  0.4962  0.4962  0.5157  0.5271  0.5291
          0.5364  0.5387  0.5387  0.5575  0.5575  0.5931  0.5950  0.5950  0.5986
          0.5986  0.6102  0.6120  0.6459  0.6459  0.6473  0.6547  0.6547  0.6884
          0.7078  0.7155  0.7155  0.7174  0.7174  0.7369  0.7479  0.7520  0.7520
          0.7543  0.7543  0.7632  0.7814  0.7853  0.8055  0.8066  0.8145  0.8145
          0.8169  0.8169  0.8520  0.8614  0.8614  0.8653  0.8653  0.8673  0.8988
          0.9060  0.9247  0.9247  0.9376  0.9376  0.9391  0.9452  0.9836  0.9840
          0.9840  0.9842  0.9857  0.9857  1.0025  1.0276  1.0276  1.0377  1.0505
          1.0505  1.0538  1.0538  1.0554  1.0554  1.0676  1.0676  1.0699  1.0699
          1.0724  1.0724  1.0922  1.0994  1.1024  1.1024  1.1089  1.1089  1.1190
          1.1230  1.1230  1.1231  1.1231  1.1292  1.1292  1.1330  1.1396  1.1445
          1.1445  1.1619  1.1656  1.1656  1.1875  1.1875  1.1934  1.1934  1.2132
          1.2156  1.2186  1.2267  1.2390  1.2528  1.2540  1.2542  1.2700  1.2762
          1.2762  1.2816  1.2819  1.2962  1.2962  1.3020  1.3321  1.3321  1.3399
          1.3399  1.3438  1.3438  1.3575  1.3575  1.3623  1.3683  1.3744  1.3744
          1.3757  1.3757  1.3969  1.3969  1.4080  1.4080  1.4092  1.4155  1.4155
          1.4289  1.4302  1.4302  1.4395  1.4503  1.4503  1.4513  1.4689  1.4689
          1.4721  1.4767  1.4842  1.4928  1.5046  1.5116  1.5155  1.5155  1.5158
          1.5158  1.5189  1.5275  1.5301  1.5345  1.5345  1.5366  1.5366  1.5421
          1.5421  1.5518  1.5565  1.5834  1.5834  1.5997  1.6177  1.6201  1.6201
          1.6269  1.6546  1.6546  1.6547  1.6547  1.6556  1.6581  1.6581  1.6586
          1.6605  1.6605  1.6608  1.6608  1.6681  1.6681  1.6727  1.6738  1.6738
          1.6782  1.6782  1.6791  1.6791  1.6804  1.6923  1.6999  1.7045  1.7050
          1.7050  1.7059  1.7059  1.7062  1.7114  1.7151  1.7168  1.7249  1.7294
          1.7294  1.7359  1.7377  1.7412  1.7412  1.7487  1.7511  1.7511  1.7526
          1.7526  1.7548  1.7571  1.7571  1.7617  1.7690  1.7721  1.7721  1.7755
          1.7774  1.7796  1.7893  1.7893  1.7897  1.7897  1.7971  1.7971  1.7981
          1.8225  1.8225  1.8237  1.8290  1.8511  1.8511  1.8512  1.8512  1.8549
          1.8633  1.8653  1.8687  1.8687  1.8702  1.8702  1.8962  1.8982  1.9000
          1.9192  1.9192  1.9212  1.9212  1.9358  1.9391  1.9504  1.9504  1.9521
          1.9539  1.9539  1.9564  1.9589  1.9589  1.9604  1.9604  1.9712  1.9712
          1.9732  1.9732  1.9886  1.9910  1.9936  1.9936  2.0025  2.0046  2.0111
          2.0111  2.0225  2.0225  2.0260  2.0260  2.0332  2.0332  2.0373  2.0385
          2.0389  2.0437  2.0437  2.0447  2.0630  2.0632  2.0669  2.0669  2.0724
          2.0724  2.0809  2.0844  2.0916  2.0996  2.1069  2.1160  2.1160  2.1204
          2.1217  2.1217  2.1276  2.1276  2.1339  2.1339  2.1493  2.1518  2.1590
          2.1590  2.1603  2.1603  2.1621  2.1867  2.1879  2.1879  2.1965  2.1965
          2.1996  2.2011  2.2020  2.2093  2.2145  2.2145  2.2187  2.2187  2.2297
          2.2446  2.2564  2.2564  2.2583  2.2583  2.2677  2.2677  2.2697  2.2724
          2.2724  2.2779  2.2818  2.2940  2.2940  2.2952  2.2961  2.2961  2.3017
          2.3017  2.3021  2.3021  2.3098  2.3441  2.3458  2.3458  2.3508  2.3508
          2.3591  2.3604  2.3696  2.3696  2.3789  2.3808  2.3808  2.3818  2.3856
          2.3860  2.4077  2.4166  2.4218  2.4218  2.4282  2.4294  2.4374  2.4374
          2.4539  2.4539  2.4585  2.4585  2.4671  2.4730  2.4746  2.4746  2.4763
          2.4763  2.4992  2.4992  2.4992  2.5005  2.5092  2.5092  2.5391  2.5391
          2.5436  2.5436  2.5577  2.5577  2.5581  2.5622  2.5622  2.5639  2.5849
          2.5895  2.5933  2.5959  2.6097  2.6190  2.6256  2.6256  2.6334  2.6334
          2.6420  2.6420  2.6528  2.6528  2.6540  2.6605  2.6605  2.6617  2.6700
          2.6707  2.6707  2.6725  2.7042  2.7042  2.7121  2.7121  2.7259  2.7342
          2.7530  2.7530  2.7553  2.7624  2.7648  2.7648  2.7982  2.8049  2.8055
          2.8077  2.8077  2.8110  2.8257  2.8344  2.8344  2.8387  2.8387  2.8397
          2.8458  2.8458  2.8511  2.8522  2.8559  2.8559  2.8576  2.8584  2.8584
          2.8617  2.8617  2.8787  2.8787  2.8789  2.8795  2.8795  2.8843  2.8935
          2.8940  2.8940  2.8987  2.9020  2.9275  2.9275  2.9369  2.9369  2.9420
          2.9420  2.9456  2.9456  2.9539  2.9539  2.9569  2.9636  2.9704  2.9704
          2.9743  2.9884  2.9941  2.9958  2.9979  2.9979  2.9982  2.9982  2.9998
          2.9998  3.0039  3.0041  3.0041  3.0046  3.0100  3.0100  3.0153  3.0180
          3.0180  3.0234  3.0295  3.0300  3.0318  3.0396  3.0396  3.0443  3.0443
          3.0479  3.0479  3.0481  3.0481  3.0528  3.0583  3.0778  3.0782  3.0860
          3.0930  3.0935  3.0938  3.1006  3.1016  3.1149  3.1149  3.1231  3.1251
          3.1251  3.1360  3.1360  3.1583  3.1583  3.1606  3.1606  3.1704  3.1704
          3.1831  3.1831  3.1854  3.1908  3.1936  3.1936  3.2129  3.2129  3.2142
          3.2142  3.2193  3.2321  3.2321  3.2328  3.2328  3.2350  3.2350  3.2359
          3.2359  3.2417  3.2439  3.2439  3.2449  3.2449  3.2505  3.2505  3.2511
          3.2535  3.2535  3.2569  3.2570  3.2570  3.2574  3.2574  3.2752  3.2773
          3.2773  3.2776  3.2776  3.2809  3.2833  3.2899  3.2904  3.2904  3.2982
          3.2982  3.2994  3.3015  3.3116  3.3216  3.3224  3.3259  3.3274  3.3408
          3.3452  3.3452  3.3541  3.3541  3.3555  3.3607  3.3766  3.3821  3.3862
          3.3862  3.3964  3.3964  3.3978  3.3978  3.4017  3.4038  3.4134  3.4134
          3.4179  3.4309  3.4347  3.4347  3.4359  3.4359  3.4402  3.4402  3.4427
          3.4474  3.4474  3.4475  3.4475  3.4601  3.4601  3.4657  3.4670  3.4670
          3.4675  3.4675  3.4751  3.4751  3.4784  3.4784  3.4807  3.4807  3.4833
          3.4833  3.4891  3.4904  3.4915  3.4946  3.4946  3.4998  3.5034  3.5043
          3.5043  3.5080  3.5080  3.5142  3.5257  3.5296  3.5312  3.5328  3.5426
          3.5429  3.5429  3.5452  3.5510  3.5510  3.5512  3.5512  3.5609  3.5609
          3.5676  3.5676  3.5741  3.5741  3.5795  3.5805  3.5805  3.5815  3.5903
          3.5903  3.5938  3.5938  3.5947  3.5991  3.5991  3.6017  3.6046  3.6046
          3.6158  3.6158  3.6170  3.6198  3.6323  3.6323  3.6324  3.6324  3.6432
          3.6433  3.6439  3.6455  3.6526  3.6648  3.6672  3.6672  3.6721  3.6721
          3.6731  3.6826  3.6826  3.6840  3.6843  3.6843  3.6871  3.6997  3.6997
          3.7001  3.7001  3.7021  3.7162  3.7162  3.7168  3.7168  3.7189  3.7248
          3.7334  3.7365  3.7374  3.7378  3.7378  3.7443  3.7443  3.7505  3.7535
          3.7535  3.7579  3.7579  3.7660  3.7679  3.7714  3.7714  3.7734  3.7735
          3.7735  3.7753  3.7763  3.7763  3.7781  3.7781  3.7855  3.7855  3.7896
          3.7903  3.7909  3.7909  3.7926  3.7927  3.8308  3.8328  3.8328  3.8351
          3.8362  3.8362  3.8396  3.8423  3.8423  3.8436  3.8445  3.8445  3.8526
          3.8528  3.8531  3.8531  3.8547  3.8547  3.8584  3.8584  3.8631  3.8631
          3.8743  3.8743  3.8762  3.8762  3.8894  3.8964  3.8964  3.8984  3.8984
          3.8995  3.9007  3.9026  3.9130  3.9144  3.9144  3.9144  3.9215  3.9215
          3.9509  3.9589  3.9672  3.9674  3.9674  3.9758  3.9758  3.9798  3.9870
          3.9870  3.9896  3.9905  3.9905  3.9922  3.9980  3.9980  3.9991  3.9991
          4.0346  4.0346  4.0361  4.0361  4.0377  4.0407  4.0407  4.0423  4.0423
          4.0425  4.0446  4.0449  4.0495  4.0547  4.0547  4.0548  4.0600  4.0766
          4.0896  4.0965  4.0965  4.0991  4.0991  4.1060  4.1063  4.1063  4.1070
          4.1175  4.1179  4.1222  4.1222  4.1241  4.1241  4.1244  4.1294  4.1294
          4.1398  4.1398  4.1416  4.1416  4.1538  4.1557  4.1557  4.1568  4.1626
          4.1665  4.1686  4.1690  4.1690  4.1723  4.1723  4.1725  4.1741  4.1769
          4.1781  4.1781  4.1792  4.1833  4.1833  4.1836  4.1836  4.1864  4.1864
          4.1877  4.1901  4.1945  4.1945  4.1949  4.1949  4.1950  4.1950  4.1966
          4.2002  4.2020  4.2020  4.2053  4.2063  4.2063  4.2064  4.2070  4.2196
          4.2196  4.2260  4.2260  4.2336  4.2336  4.2357  4.2357  4.2401  4.2411
          4.2411  4.2415  4.2467  4.2467  4.2679  4.2679  4.2772  4.2772  4.3031
          4.3047  4.3047  4.3047  4.3056  4.3056  4.3121  4.3121  4.3155  4.3175
          4.3175  4.3226  4.3301  4.3301  4.3317  4.3348  4.3348  4.3366  4.3433
          4.3433  4.3463  4.3463  4.3518  4.3548  4.3551  4.3558  4.3590  4.3590
          4.3591  4.3591  4.3839  4.3839  4.3849  4.3849  4.3879  4.3882  4.4275
          4.4439  4.4484  4.4484  4.4510  4.4520  4.4621  4.4621  4.4728  4.4728
          4.4739  4.4743  4.4770  4.4770  4.4801  4.4801  4.4878  4.4878  4.4907
          4.4930  4.4931  4.4931  4.5013  4.5013  4.5091  4.5101  4.5101  4.5112
          4.5133  4.5133  4.5231  4.5237  4.5237  4.5255  4.5345  4.5345  4.5354
          4.5429  4.5545  4.5545  4.5562  4.5562  4.5572  4.5582  4.5608  4.5608
          4.5617  4.5617  4.5634  4.5634  4.5658  4.5663  4.5716  4.5716  4.5873
          4.5877  4.5900  4.5900  4.5901  4.5901  4.5960  4.5962  4.6190  4.6278
          4.6296  4.6320  4.6320  4.6334  4.6336  4.6336  4.6427  4.6505  4.6650
          4.6650  4.6666  4.6666  4.6865  4.6865  4.6913  4.6913  4.7021  4.7071
          4.7071  4.7077  4.7077  4.7091  4.7136  4.7151  4.7210  4.7210  4.7216
          4.7216  4.7225  4.7225  4.7225  4.7225  4.7275  4.7282
 Writing out eigenvalues/vectors for ikpt= 10
 Occupation numbers for ikpt= 10
  10      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  11
  11     -0.2790 -0.2710 -0.2582 -0.2418 -0.2226 -0.2041 -0.1147 -0.0982 -0.0707
         -0.0444 -0.0238 -0.0127 -0.0068  0.0048  0.0147  0.0254  0.0453  0.0494
          0.0565  0.0673  0.0676  0.0804  0.0932  0.0932  0.1025  0.1763  0.1861
          0.1962  0.2105  0.2129  0.2263  0.2419  0.2534  0.2635  0.2645  0.2674
          0.2853  0.2887  0.2970  0.3116  0.3193  0.3304  0.3335  0.3354  0.3480
          0.3482  0.3553  0.3592  0.3597  0.3713  0.3776  0.3782  0.3957  0.4041
          0.4097  0.4209  0.4328  0.4419  0.4505  0.4634  0.4780  0.4799  0.4904
          0.4942  0.5087  0.5128  0.5219  0.5422  0.5513  0.5544  0.5598  0.5639
          0.5831  0.5945  0.5965  0.6074  0.6101  0.6124  0.6161  0.6205  0.6346
          0.6421  0.6450  0.6465  0.6529  0.6573  0.6737  0.6783  0.6858  0.6869
          0.7017  0.7121  0.7193  0.7314  0.7352  0.7396  0.7459  0.7597  0.7603
          0.7759  0.7824  0.7905  0.7916  0.7925  0.7988  0.7998  0.8024  0.8194
          0.8203  0.8245  0.8296  0.8376  0.8426  0.8453  0.8528  0.8562  0.8629
          0.8674  0.8731  0.8770  0.8847  0.8885  0.8992  0.9022  0.9183  0.9283
          0.9300  0.9424  0.9560  0.9603  0.9691  0.9790  0.9906  0.9925  1.0000
          1.0055  1.0173  1.0230  1.0306  1.0348  1.0492  1.0541  1.0678  1.0689
          1.0787  1.0829  1.0840  1.0873  1.0976  1.1011  1.1016  1.1098  1.1190
          1.1196  1.1232  1.1265  1.1366  1.1414  1.1434  1.1486  1.1501  1.1538
          1.1561  1.1654  1.1723  1.1794  1.1889  1.1930  1.2016  1.2018  1.2063
          1.2133  1.2140  1.2194  1.2226  1.2292  1.2360  1.2371  1.2415  1.2435
          1.2461  1.2552  1.2560  1.2643  1.2848  1.2877  1.2889  1.2938  1.2974
          1.3024  1.3072  1.3108  1.3243  1.3298  1.3385  1.3451  1.3550  1.3723
          1.3794  1.3857  1.3860  1.3905  1.3971  1.4066  1.4117  1.4142  1.4213
          1.4278  1.4304  1.4314  1.4366  1.4419  1.4431  1.4477  1.4484  1.4553
          1.4568  1.4685  1.4717  1.4721  1.4829  1.4875  1.4883  1.4902  1.4980
          1.4999  1.5066  1.5078  1.5088  1.5125  1.5158  1.5225  1.5236  1.5273
          1.5291  1.5370  1.5388  1.5457  1.5472  1.5481  1.5500  1.5503  1.5522
          1.5638  1.5640  1.5659  1.5705  1.5817  1.5893  1.5935  1.5942  1.5946
          1.5980  1.6123  1.6137  1.6215  1.6240  1.6281  1.6284  1.6346  1.6475
          1.6531  1.6545  1.6578  1.6615  1.6633  1.6671  1.6837  1.6850  1.6871
          1.6995  1.7058  1.7119  1.7166  1.7192  1.7334  1.7368  1.7405  1.7422
          1.7461  1.7515  1.7519  1.7623  1.7645  1.7661  1.7680  1.7748  1.7775
          1.7864  1.7893  1.7904  1.7935  1.7940  1.8052  1.8070  1.8087  1.8127
          1.8223  1.8243  1.8287  1.8307  1.8348  1.8437  1.8463  1.8565  1.8568
          1.8570  1.8671  1.8673  1.8799  1.8868  1.8878  1.8881  1.8903  1.8994
          1.9005  1.9023  1.9052  1.9090  1.9161  1.9180  1.9249  1.9282  1.9382
          1.9428  1.9467  1.9468  1.9543  1.9550  1.9597  1.9603  1.9622  1.9650
          1.9694  1.9699  1.9774  1.9832  1.9853  1.9888  1.9919  2.0031  2.0075
          2.0114  2.0123  2.0161  2.0224  2.0231  2.0286  2.0329  2.0350  2.0417
          2.0438  2.0440  2.0465  2.0478  2.0521  2.0627  2.0683  2.0732  2.0737
          2.0794  2.0871  2.0896  2.0905  2.1054  2.1087  2.1099  2.1251  2.1299
          2.1319  2.1355  2.1372  2.1392  2.1516  2.1532  2.1576  2.1596  2.1655
          2.1663  2.1707  2.1796  2.1807  2.1845  2.1897  2.1915  2.1941  2.1983
          2.2028  2.2072  2.2176  2.2224  2.2251  2.2288  2.2301  2.2391  2.2460
          2.2509  2.2558  2.2584  2.2627  2.2659  2.2687  2.2692  2.2733  2.2756
          2.2781  2.2781  2.2803  2.2891  2.2974  2.3011  2.3138  2.3139  2.3180
          2.3258  2.3373  2.3400  2.3406  2.3445  2.3502  2.3614  2.3645  2.3669
          2.3707  2.3736  2.3847  2.3909  2.3929  2.3965  2.4004  2.4068  2.4102
          2.4132  2.4157  2.4227  2.4228  2.4270  2.4299  2.4339  2.4357  2.4392
          2.4424  2.4465  2.4467  2.4485  2.4516  2.4554  2.4607  2.4677  2.4680
          2.4704  2.4732  2.4773  2.4822  2.4828  2.4856  2.4866  2.4919  2.4983
          2.5005  2.5078  2.5151  2.5159  2.5276  2.5309  2.5313  2.5384  2.5426
          2.5428  2.5481  2.5488  2.5584  2.5590  2.5702  2.5774  2.5779  2.5829
          2.5895  2.5956  2.5974  2.5990  2.5999  2.6032  2.6075  2.6132  2.6209
          2.6215  2.6273  2.6278  2.6387  2.6395  2.6417  2.6554  2.6555  2.6614
          2.6639  2.6698  2.6713  2.6761  2.6767  2.6875  2.6911  2.6937  2.6990
          2.7014  2.7079  2.7128  2.7159  2.7214  2.7226  2.7253  2.7275  2.7315
          2.7346  2.7367  2.7401  2.7419  2.7490  2.7500  2.7589  2.7591  2.7629
          2.7653  2.7766  2.7779  2.7835  2.7887  2.7917  2.7953  2.7987  2.8004
          2.8030  2.8062  2.8123  2.8128  2.8139  2.8233  2.8258  2.8282  2.8310
          2.8314  2.8434  2.8475  2.8512  2.8590  2.8671  2.8714  2.8846  2.8897
          2.8944  2.8982  2.9040  2.9055  2.9066  2.9077  2.9151  2.9211  2.9278
          2.9284  2.9302  2.9321  2.9351  2.9384  2.9432  2.9438  2.9470  2.9483
          2.9540  2.9577  2.9633  2.9666  2.9681  2.9687  2.9760  2.9792  2.9815
          2.9878  2.9931  2.9978  3.0019  3.0048  3.0061  3.0120  3.0152  3.0175
          3.0230  3.0250  3.0263  3.0296  3.0336  3.0342  3.0383  3.0415  3.0429
          3.0484  3.0511  3.0517  3.0544  3.0553  3.0618  3.0653  3.0655  3.0693
          3.0724  3.0750  3.0867  3.0909  3.0915  3.0974  3.0979  3.0998  3.1091
          3.1146  3.1160  3.1192  3.1262  3.1282  3.1301  3.1318  3.1363  3.1523
          3.1523  3.1528  3.1608  3.1642  3.1688  3.1758  3.1793  3.1834  3.1916
          3.1939  3.1945  3.1989  3.2108  3.2201  3.2261  3.2274  3.2310  3.2319
          3.2340  3.2393  3.2405  3.2431  3.2504  3.2518  3.2601  3.2621  3.2654
          3.2738  3.2754  3.2804  3.2827  3.2880  3.2896  3.2897  3.2920  3.2940
          3.2951  3.3045  3.3063  3.3097  3.3109  3.3144  3.3162  3.3197  3.3212
          3.3224  3.3267  3.3330  3.3391  3.3416  3.3417  3.3438  3.3465  3.3506
          3.3507  3.3534  3.3622  3.3670  3.3671  3.3780  3.3786  3.3799  3.3817
          3.3869  3.3951  3.3978  3.3988  3.3998  3.4024  3.4048  3.4122  3.4124
          3.4151  3.4185  3.4213  3.4265  3.4265  3.4326  3.4367  3.4427  3.4446
          3.4489  3.4544  3.4566  3.4633  3.4657  3.4659  3.4691  3.4732  3.4767
          3.4808  3.4852  3.4866  3.4930  3.4971  3.5009  3.5072  3.5121  3.5142
          3.5178  3.5226  3.5240  3.5306  3.5359  3.5364  3.5401  3.5470  3.5479
          3.5482  3.5520  3.5526  3.5547  3.5556  3.5573  3.5594  3.5610  3.5626
          3.5630  3.5643  3.5681  3.5681  3.5695  3.5714  3.5751  3.5810  3.5869
          3.5893  3.5903  3.5953  3.5964  3.6009  3.6079  3.6094  3.6134  3.6173
          3.6174  3.6291  3.6323  3.6344  3.6377  3.6388  3.6487  3.6522  3.6528
          3.6545  3.6615  3.6721  3.6736  3.6755  3.6781  3.6794  3.6839  3.6878
          3.6912  3.6922  3.6932  3.6945  3.6976  3.7021  3.7043  3.7094  3.7102
          3.7140  3.7205  3.7272  3.7291  3.7325  3.7393  3.7395  3.7413  3.7453
          3.7539  3.7567  3.7578  3.7601  3.7618  3.7699  3.7705  3.7723  3.7751
          3.7761  3.7799  3.7822  3.7856  3.7873  3.7917  3.7948  3.7967  3.7987
          3.8023  3.8029  3.8039  3.8087  3.8115  3.8123  3.8144  3.8151  3.8202
          3.8217  3.8236  3.8269  3.8310  3.8322  3.8338  3.8379  3.8390  3.8439
          3.8458  3.8467  3.8517  3.8533  3.8559  3.8570  3.8596  3.8620  3.8650
          3.8669  3.8693  3.8724  3.8725  3.8789  3.8796  3.8841  3.8864  3.8871
          3.8905  3.8940  3.8958  3.9032  3.9035  3.9117  3.9134  3.9249  3.9296
          3.9345  3.9351  3.9375  3.9401  3.9425  3.9439  3.9510  3.9560  3.9576
          3.9619  3.9681  3.9704  3.9714  3.9741  3.9760  3.9790  3.9829  3.9893
          3.9961  4.0012  4.0026  4.0083  4.0094  4.0122  4.0125  4.0138  4.0157
          4.0205  4.0213  4.0226  4.0292  4.0296  4.0338  4.0358  4.0393  4.0427
          4.0430  4.0457  4.0460  4.0491  4.0521  4.0543  4.0558  4.0615  4.0633
          4.0683  4.0695  4.0799  4.0823  4.0824  4.0895  4.0911  4.0923  4.0999
          4.1067  4.1100  4.1141  4.1173  4.1178  4.1206  4.1271  4.1318  4.1337
          4.1340  4.1370  4.1370  4.1401  4.1453  4.1456  4.1474  4.1505  4.1516
          4.1594  4.1634  4.1646  4.1701  4.1735  4.1743  4.1755  4.1807  4.1826
          4.1886  4.1894  4.1943  4.1949  4.1998  4.2022  4.2082  4.2109  4.2136
          4.2138  4.2206  4.2206  4.2240  4.2287  4.2293  4.2326  4.2431  4.2503
          4.2509  4.2522  4.2627  4.2654  4.2715  4.2749  4.2756  4.2776  4.2815
          4.2843  4.2874  4.2918  4.2932  4.2945  4.2954  4.2986  4.2990  4.3005
          4.3037  4.3041  4.3042  4.3103  4.3113  4.3149  4.3164  4.3210  4.3233
          4.3267  4.3286  4.3301  4.3325  4.3378  4.3539  4.3570  4.3653  4.3670
          4.3717  4.3733  4.3740  4.3848  4.3855  4.3906  4.3919  4.3920  4.3966
          4.3984  4.3993  4.4020  4.4046  4.4071  4.4170  4.4205  4.4269  4.4277
          4.4303  4.4328  4.4364  4.4386  4.4482  4.4551  4.4575  4.4615  4.4616
          4.4688  4.4694  4.4733  4.4742  4.4774  4.4798  4.4820  4.4867  4.4914
          4.4931  4.4938  4.5124  4.5142  4.5164  4.5195  4.5208  4.5242  4.5261
          4.5288  4.5349  4.5354  4.5435  4.5442  4.5478  4.5484  4.5495  4.5518
          4.5539  4.5558  4.5647  4.5696  4.5809  4.5841  4.5869  4.5890  4.5934
          4.5950  4.5994  4.6002  4.6047  4.6090  4.6114  4.6134  4.6168  4.6171
          4.6274  4.6295  4.6360  4.6375  4.6385  4.6400  4.6443  4.6448  4.6484
          4.6558  4.6577  4.6614  4.6777  4.6805  4.6824  4.6855  4.6881  4.6904
          4.6932  4.6968  4.6990  4.7030  4.7220  4.7312  4.7332  4.7341  4.7354
          4.7480  4.7498  4.7635  4.7776  4.7791  4.7801  4.7825  4.7827  4.7898
          4.7909  4.7944  4.7951  4.7971  4.7981  4.8040  4.8065  4.8079  4.8287
          4.8346  4.8359  4.8403  4.8601  4.8648  4.8658  4.8694
 Writing out eigenvalues/vectors for ikpt= 11
 Occupation numbers for ikpt= 11
  11      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  12
  12     -0.2203 -0.2158 -0.2086 -0.1983 -0.1853 -0.1696 -0.1505 -0.1297 -0.1227
         -0.1154 -0.1100 -0.1062 -0.0196 -0.0180  0.0028  0.0125  0.0187  0.0269
          0.0342  0.0449  0.0455  0.0590  0.0725  0.0736  0.0824  0.1587  0.1661
          0.1702  0.1809  0.1955  0.1989  0.2033  0.2085  0.2494  0.2528  0.2603
          0.2646  0.2901  0.2948  0.2982  0.3272  0.3453  0.3559  0.3720  0.3721
          0.3877  0.4134  0.4217  0.4305  0.4323  0.4522  0.4698  0.4759  0.4783
          0.4951  0.5031  0.5172  0.5296  0.5319  0.5319  0.5329  0.5365  0.5376
          0.5412  0.5473  0.5480  0.5528  0.5570  0.5572  0.5617  0.5699  0.5726
          0.5766  0.5794  0.5814  0.5836  0.5895  0.5947  0.5948  0.5962  0.5971
          0.5997  0.6043  0.6051  0.6073  0.6192  0.6418  0.6672  0.6723  0.6846
          0.6886  0.6902  0.7190  0.7228  0.7432  0.7540  0.7806  0.7892  0.7915
          0.7946  0.8109  0.8203  0.8283  0.8291  0.8313  0.8323  0.8369  0.8428
          0.8486  0.8525  0.8532  0.8538  0.8584  0.8659  0.8754  0.8754  0.8755
          0.8827  0.8850  0.8851  0.8873  0.8943  0.9046  0.9078  0.9126  0.9126
          0.9166  0.9188  0.9398  0.9405  0.9409  0.9465  0.9543  0.9631  0.9781
          0.9797  0.9823  0.9856  0.9884  0.9946  1.0130  1.0170  1.0182  1.0284
          1.0413  1.0519  1.0571  1.0598  1.0713  1.0788  1.0865  1.0920  1.0929
          1.0995  1.1012  1.1099  1.1121  1.1160  1.1212  1.1248  1.1284  1.1381
          1.1410  1.1417  1.1445  1.1527  1.1602  1.1765  1.1796  1.1820  1.1875
          1.1969  1.1992  1.2076  1.2131  1.2151  1.2166  1.2251  1.2257  1.2280
          1.2280  1.2290  1.2434  1.2486  1.2557  1.2628  1.2656  1.2662  1.2701
          1.2897  1.2910  1.2960  1.2968  1.3032  1.3163  1.3164  1.3251  1.3304
          1.3380  1.3535  1.3549  1.3556  1.3591  1.3599  1.3665  1.3709  1.3772
          1.3838  1.3859  1.3871  1.3873  1.3971  1.3999  1.4028  1.4052  1.4181
          1.4230  1.4336  1.4342  1.4357  1.4370  1.4495  1.4541  1.4583  1.4633
          1.4658  1.4725  1.4774  1.4806  1.4818  1.4862  1.4890  1.4947  1.4996
          1.5099  1.5143  1.5233  1.5271  1.5331  1.5404  1.5476  1.5581  1.5599
          1.5627  1.5654  1.5727  1.5758  1.5860  1.5910  1.5992  1.5996  1.6054
          1.6101  1.6178  1.6203  1.6258  1.6367  1.6441  1.6502  1.6511  1.6565
          1.6622  1.6687  1.6767  1.6783  1.6822  1.6864  1.6911  1.6933  1.6946
          1.6998  1.7015  1.7148  1.7250  1.7380  1.7413  1.7518  1.7612  1.7668
          1.7726  1.7740  1.7873  1.7879  1.7976  1.7995  1.7996  1.8006  1.8023
          1.8064  1.8079  1.8237  1.8342  1.8360  1.8387  1.8460  1.8506  1.8576
          1.8588  1.8592  1.8612  1.8625  1.8625  1.8720  1.8754  1.8804  1.8824
          1.8846  1.8864  1.9042  1.9134  1.9135  1.9220  1.9240  1.9289  1.9351
          1.9364  1.9381  1.9440  1.9489  1.9562  1.9567  1.9569  1.9597  1.9638
          1.9670  1.9717  1.9780  1.9808  1.9814  1.9828  1.9879  1.9899  2.0003
          2.0027  2.0049  2.0128  2.0200  2.0202  2.0236  2.0270  2.0279  2.0294
          2.0300  2.0327  2.0355  2.0364  2.0474  2.0489  2.0493  2.0555  2.0732
          2.0837  2.0922  2.0924  2.0967  2.0979  2.1069  2.1071  2.1170  2.1250
          2.1282  2.1310  2.1326  2.1413  2.1423  2.1438  2.1575  2.1664  2.1802
          2.1845  2.1873  2.1883  2.1935  2.1999  2.2010  2.2041  2.2077  2.2090
          2.2146  2.2169  2.2236  2.2253  2.2282  2.2374  2.2392  2.2414  2.2439
          2.2478  2.2533  2.2647  2.2654  2.2671  2.2744  2.2756  2.2770  2.2810
          2.2837  2.2868  2.2869  2.2879  2.2904  2.2905  2.2917  2.2947  2.2965
          2.3061  2.3074  2.3121  2.3157  2.3170  2.3204  2.3263  2.3323  2.3324
          2.3345  2.3384  2.3404  2.3412  2.3568  2.3574  2.3684  2.3695  2.3696
          2.3730  2.3749  2.3812  2.3819  2.3883  2.3917  2.3952  2.4024  2.4083
          2.4087  2.4090  2.4167  2.4191  2.4199  2.4283  2.4330  2.4374  2.4376
          2.4446  2.4476  2.4495  2.4628  2.4657  2.4723  2.4734  2.4744  2.4754
          2.4777  2.4851  2.4884  2.4886  2.4941  2.4974  2.5037  2.5048  2.5072
          2.5073  2.5188  2.5280  2.5284  2.5431  2.5458  2.5508  2.5540  2.5562
          2.5663  2.5680  2.5760  2.5835  2.5862  2.5912  2.5923  2.5953  2.5963
          2.6070  2.6072  2.6079  2.6120  2.6232  2.6256  2.6265  2.6273  2.6396
          2.6406  2.6423  2.6443  2.6514  2.6543  2.6556  2.6563  2.6577  2.6604
          2.6629  2.6665  2.6721  2.6721  2.6768  2.6798  2.6820  2.6876  2.6929
          2.6952  2.6981  2.7012  2.7021  2.7024  2.7064  2.7134  2.7155  2.7179
          2.7226  2.7278  2.7286  2.7314  2.7346  2.7388  2.7391  2.7426  2.7515
          2.7520  2.7561  2.7570  2.7657  2.7696  2.7716  2.7738  2.7779  2.7817
          2.7844  2.7917  2.7941  2.7945  2.7960  2.8009  2.8010  2.8154  2.8181
          2.8187  2.8249  2.8252  2.8281  2.8320  2.8352  2.8373  2.8423  2.8460
          2.8506  2.8560  2.8568  2.8662  2.8670  2.8686  2.8701  2.8713  2.8810
          2.8857  2.8860  2.8861  2.8956  2.8978  2.9000  2.9066  2.9081  2.9095
          2.9125  2.9141  2.9158  2.9165  2.9212  2.9234  2.9248  2.9257  2.9267
          2.9299  2.9344  2.9403  2.9453  2.9470  2.9502  2.9580  2.9622  2.9646
          2.9689  2.9704  2.9710  2.9837  2.9894  2.9909  2.9923  2.9949  2.9978
          2.9984  3.0016  3.0075  3.0146  3.0176  3.0181  3.0237  3.0268  3.0365
          3.0381  3.0384  3.0435  3.0458  3.0550  3.0569  3.0587  3.0640  3.0641
          3.0652  3.0691  3.0719  3.0743  3.0852  3.0872  3.0979  3.0996  3.1032
          3.1075  3.1092  3.1120  3.1184  3.1252  3.1275  3.1280  3.1307  3.1408
          3.1412  3.1433  3.1460  3.1480  3.1600  3.1645  3.1737  3.1762  3.1789
          3.1811  3.1835  3.1847  3.1930  3.1964  3.2068  3.2072  3.2104  3.2117
          3.2126  3.2145  3.2241  3.2277  3.2311  3.2323  3.2328  3.2329  3.2365
          3.2410  3.2484  3.2518  3.2529  3.2659  3.2674  3.2772  3.2789  3.2809
          3.2877  3.2896  3.2959  3.2993  3.2997  3.3004  3.3033  3.3123  3.3166
          3.3189  3.3236  3.3241  3.3293  3.3377  3.3434  3.3470  3.3566  3.3599
          3.3601  3.3678  3.3728  3.3738  3.3803  3.3826  3.3843  3.3898  3.3906
          3.3933  3.3997  3.4018  3.4037  3.4043  3.4065  3.4112  3.4193  3.4194
          3.4230  3.4288  3.4320  3.4322  3.4346  3.4435  3.4469  3.4575  3.4613
          3.4622  3.4646  3.4667  3.4693  3.4711  3.4795  3.4819  3.4897  3.4922
          3.4965  3.4978  3.4979  3.5034  3.5053  3.5111  3.5124  3.5164  3.5166
          3.5177  3.5199  3.5268  3.5305  3.5315  3.5318  3.5355  3.5378  3.5388
          3.5406  3.5432  3.5460  3.5476  3.5502  3.5557  3.5576  3.5588  3.5629
          3.5682  3.5709  3.5745  3.5801  3.5881  3.5889  3.5897  3.5918  3.5988
          3.6031  3.6124  3.6154  3.6166  3.6177  3.6197  3.6211  3.6231  3.6232
          3.6360  3.6380  3.6404  3.6404  3.6459  3.6496  3.6522  3.6531  3.6549
          3.6614  3.6618  3.6628  3.6684  3.6727  3.6759  3.6762  3.6781  3.6851
          3.6862  3.6878  3.6908  3.6953  3.6990  3.6990  3.7022  3.7040  3.7055
          3.7174  3.7254  3.7319  3.7338  3.7388  3.7463  3.7475  3.7667  3.7813
          3.7832  3.7833  3.7863  3.7934  3.7979  3.8016  3.8044  3.8133  3.8140
          3.8274  3.8292  3.8338  3.8347  3.8366  3.8381  3.8399  3.8405  3.8498
          3.8501  3.8569  3.8601  3.8654  3.8681  3.8765  3.8801  3.8812  3.8851
          3.8870  3.8871  3.8878  3.8913  3.8934  3.8952  3.8953  3.8960  3.8978
          3.8979  3.9038  3.9072  3.9072  3.9086  3.9140  3.9174  3.9179  3.9223
          3.9225  3.9343  3.9358  3.9375  3.9423  3.9493  3.9515  3.9526  3.9527
          3.9549  3.9580  3.9613  3.9659  3.9707  3.9762  3.9833  3.9923  3.9957
          3.9971  3.9985  4.0210  4.0232  4.0254  4.0260  4.0287  4.0331  4.0411
          4.0430  4.0594  4.0618  4.0643  4.0685  4.0772  4.0778  4.0787  4.0865
          4.0897  4.0923  4.0929  4.0943  4.0957  4.1020  4.1120  4.1140  4.1156
          4.1167  4.1233  4.1275  4.1277  4.1298  4.1336  4.1361  4.1375  4.1401
          4.1406  4.1406  4.1433  4.1502  4.1513  4.1518  4.1570  4.1601  4.1604
          4.1628  4.1628  4.1630  4.1653  4.1670  4.1878  4.1888  4.1927  4.1947
          4.1994  4.2048  4.2049  4.2098  4.2132  4.2144  4.2154  4.2155  4.2186
          4.2207  4.2238  4.2249  4.2276  4.2298  4.2320  4.2357  4.2357  4.2384
          4.2409  4.2415  4.2435  4.2459  4.2464  4.2488  4.2490  4.2534  4.2574
          4.2576  4.2625  4.2666  4.2678  4.2684  4.2713  4.2761  4.2777  4.2792
          4.2869  4.2879  4.2888  4.2949  4.2997  4.3049  4.3089  4.3098  4.3132
          4.3141  4.3166  4.3182  4.3235  4.3243  4.3272  4.3290  4.3649  4.3683
          4.3688  4.3712  4.3721  4.3737  4.3838  4.3841  4.3881  4.3894  4.3997
          4.3998  4.4087  4.4148  4.4176  4.4216  4.4274  4.4286  4.4402  4.4405
          4.4514  4.4531  4.4555  4.4589  4.4593  4.4634  4.4650  4.4657  4.4774
          4.4791  4.4803  4.4816  4.4971  4.4976  4.4984  4.5007  4.5102  4.5103
          4.5117  4.5153  4.5173  4.5192  4.5197  4.5216  4.5240  4.5256  4.5287
          4.5303  4.5324  4.5344  4.5345  4.5414  4.5432  4.5488  4.5569  4.5609
          4.5640  4.5672  4.5743  4.5777  4.5917  4.5925  4.5955  4.5969  4.6044
          4.6125  4.6265  4.6325  4.6375  4.6378  4.6436  4.6452  4.6555  4.6557
          4.6586  4.6620  4.6651  4.6663  4.6687  4.6703  4.6709  4.6714  4.6837
          4.6846  4.6891  4.6895  4.6927  4.6928  4.6945  4.6951  4.6977  4.6987
          4.7001  4.7019  4.7080  4.7089  4.7091  4.7104  4.7208  4.7210  4.7227
          4.7247  4.7313  4.7326  4.7341  4.7346  4.7371  4.7397  4.7424  4.7424
          4.7428  4.7449  4.7578  4.7584  4.7608  4.7611  4.7843  4.7854  4.7892
          4.7900  4.7903  4.7904  4.8028  4.8040  4.8050  4.8058  4.8135  4.8135
          4.8144  4.8148  4.8159  4.8193  4.8221  4.8225  4.8869  4.8882  4.8974
          4.8976  4.9317  4.9328  4.9341  4.9345  4.9615  4.9645
 Writing out eigenvalues/vectors for ikpt= 12
 Occupation numbers for ikpt= 12
  12      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Eigenvalues in Hartree for ikpt=  13
  13     -0.2300 -0.2230 -0.2118 -0.1977 -0.1813 -0.1632 -0.1445 -0.1267 -0.1117
         -0.0987 -0.0864 -0.0751 -0.0232 -0.0212 -0.0165 -0.0074 -0.0037 -0.0019
          0.0094  0.0139  0.0191  0.0346  0.0450  0.0572  0.0737  0.1973  0.1977
          0.2282  0.2290  0.2327  0.2635  0.2663  0.2704  0.2904  0.2920  0.2967
          0.3055  0.3059  0.3119  0.3138  0.3190  0.3210  0.3326  0.3342  0.3434
          0.3458  0.3497  0.3516  0.3530  0.3607  0.4018  0.4127  0.4274  0.4291
          0.4468  0.4502  0.4867  0.4908  0.4973  0.5014  0.5017  0.5230  0.5278
          0.5289  0.5365  0.5441  0.5460  0.5554  0.5788  0.5803  0.5868  0.5884
          0.5916  0.6010  0.6017  0.6086  0.6133  0.6180  0.6277  0.6280  0.6347
          0.6399  0.6480  0.6545  0.6706  0.6792  0.6985  0.7025  0.7198  0.7262
          0.7406  0.7417  0.7499  0.7512  0.7610  0.7717  0.7758  0.7784  0.7885
          0.7956  0.8011  0.8030  0.8062  0.8108  0.8144  0.8182  0.8184  0.8228
          0.8276  0.8285  0.8293  0.8431  0.8450  0.8457  0.8483  0.8486  0.8640
          0.8716  0.8772  0.8810  0.8817  0.8852  0.8879  0.8930  0.9147  0.9200
          0.9218  0.9262  0.9309  0.9316  0.9346  0.9669  0.9669  0.9755  0.9759
          0.9763  0.9860  0.9889  1.0101  1.0178  1.0215  1.0224  1.0345  1.0364
          1.0417  1.0418  1.0465  1.0576  1.0605  1.0699  1.0704  1.0748  1.0789
          1.0836  1.0941  1.0999  1.1009  1.1091  1.1178  1.1212  1.1321  1.1498
          1.1529  1.1546  1.1577  1.1590  1.1638  1.1720  1.1730  1.1748  1.1817
          1.1840  1.1866  1.1871  1.1942  1.1988  1.2018  1.2078  1.2132  1.2136
          1.2180  1.2262  1.2273  1.2283  1.2495  1.2525  1.2576  1.2722  1.2760
          1.2782  1.2827  1.2853  1.2921  1.2973  1.3028  1.3075  1.3212  1.3268
          1.3305  1.3373  1.3375  1.3489  1.3563  1.3596  1.3651  1.3681  1.3757
          1.3780  1.3826  1.3879  1.3917  1.3961  1.4110  1.4176  1.4224  1.4320
          1.4355  1.4430  1.4480  1.4573  1.4595  1.4713  1.4730  1.4758  1.4817
          1.4846  1.4894  1.4937  1.5044  1.5065  1.5073  1.5162  1.5181  1.5214
          1.5216  1.5267  1.5346  1.5399  1.5452  1.5455  1.5456  1.5594  1.5636
          1.5702  1.5712  1.5768  1.5866  1.5874  1.5886  1.5916  1.6067  1.6088
          1.6126  1.6181  1.6252  1.6268  1.6307  1.6315  1.6490  1.6611  1.6646
          1.6671  1.6766  1.6874  1.6899  1.6956  1.7001  1.7075  1.7085  1.7116
          1.7167  1.7167  1.7213  1.7295  1.7311  1.7333  1.7358  1.7422  1.7456
          1.7519  1.7588  1.7688  1.7742  1.7746  1.7859  1.7921  1.7933  1.8009
          1.8022  1.8043  1.8068  1.8109  1.8140  1.8196  1.8265  1.8341  1.8389
          1.8421  1.8514  1.8558  1.8606  1.8612  1.8682  1.8716  1.8748  1.8836
          1.8836  1.8858  1.8912  1.8972  1.9011  1.9032  1.9079  1.9174  1.9209
          1.9274  1.9276  1.9282  1.9329  1.9424  1.9550  1.9570  1.9623  1.9668
          1.9682  1.9695  1.9771  1.9822  1.9824  1.9897  1.9917  1.9959  1.9995
          2.0013  2.0036  2.0088  2.0091  2.0119  2.0220  2.0272  2.0328  2.0341
          2.0358  2.0417  2.0445  2.0454  2.0617  2.0643  2.0694  2.0731  2.0754
          2.0810  2.0898  2.0922  2.1008  2.1053  2.1070  2.1082  2.1107  2.1222
          2.1233  2.1269  2.1344  2.1422  2.1444  2.1495  2.1506  2.1596  2.1675
          2.1763  2.1770  2.1846  2.1888  2.1890  2.1922  2.1926  2.1967  2.1975
          2.1975  2.2048  2.2058  2.2156  2.2185  2.2200  2.2282  2.2311  2.2356
          2.2376  2.2415  2.2463  2.2504  2.2579  2.2609  2.2668  2.2735  2.2739
          2.2775  2.2828  2.2860  2.2903  2.3000  2.3024  2.3077  2.3175  2.3193
          2.3202  2.3243  2.3284  2.3291  2.3377  2.3429  2.3438  2.3518  2.3547
          2.3639  2.3642  2.3694  2.3711  2.3727  2.3801  2.3807  2.3855  2.3858
          2.3873  2.3901  2.3958  2.3967  2.4009  2.4039  2.4065  2.4121  2.4186
          2.4223  2.4224  2.4279  2.4291  2.4328  2.4356  2.4430  2.4441  2.4496
          2.4513  2.4563  2.4563  2.4568  2.4649  2.4744  2.4765  2.4842  2.4858
          2.4878  2.4885  2.4919  2.4975  2.5038  2.5051  2.5071  2.5103  2.5110
          2.5171  2.5214  2.5238  2.5268  2.5274  2.5322  2.5352  2.5386  2.5423
          2.5428  2.5437  2.5515  2.5537  2.5600  2.5621  2.5677  2.5684  2.5723
          2.5745  2.5775  2.5794  2.5872  2.5936  2.5963  2.5975  2.6019  2.6064
          2.6077  2.6107  2.6146  2.6177  2.6236  2.6269  2.6337  2.6360  2.6398
          2.6440  2.6564  2.6605  2.6620  2.6725  2.6734  2.6751  2.6789  2.6866
          2.6940  2.6946  2.7038  2.7045  2.7118  2.7150  2.7180  2.7270  2.7339
          2.7396  2.7414  2.7446  2.7500  2.7548  2.7588  2.7602  2.7630  2.7630
          2.7657  2.7691  2.7769  2.7800  2.7803  2.7811  2.7845  2.7904  2.7944
          2.7956  2.8006  2.8036  2.8056  2.8087  2.8125  2.8152  2.8154  2.8172
          2.8249  2.8270  2.8275  2.8337  2.8343  2.8346  2.8449  2.8450  2.8497
          2.8569  2.8575  2.8623  2.8648  2.8696  2.8712  2.8811  2.8817  2.8872
          2.8884  2.8936  2.8954  2.8967  2.9011  2.9062  2.9066  2.9132  2.9159
          2.9187  2.9224  2.9269  2.9278  2.9333  2.9355  2.9422  2.9449  2.9470
          2.9478  2.9489  2.9534  2.9536  2.9592  2.9667  2.9675  2.9752  2.9762
          2.9767  2.9812  2.9840  2.9911  2.9999  3.0018  3.0023  3.0107  3.0182
          3.0233  3.0250  3.0290  3.0292  3.0332  3.0396  3.0436  3.0482  3.0538
          3.0626  3.0649  3.0720  3.0721  3.0775  3.0811  3.0885  3.0913  3.0941
          3.1017  3.1056  3.1062  3.1074  3.1100  3.1127  3.1173  3.1185  3.1210
          3.1236  3.1249  3.1263  3.1285  3.1305  3.1334  3.1354  3.1366  3.1419
          3.1453  3.1474  3.1523  3.1530  3.1546  3.1559  3.1703  3.1716  3.1718
          3.1730  3.1792  3.1798  3.1810  3.1854  3.1865  3.1887  3.1899  3.1946
          3.1975  3.1986  3.2031  3.2062  3.2147  3.2161  3.2216  3.2233  3.2259
          3.2318  3.2410  3.2427  3.2493  3.2517  3.2574  3.2582  3.2590  3.2613
          3.2681  3.2708  3.2737  3.2745  3.2809  3.2850  3.2914  3.2949  3.2998
          3.3016  3.3055  3.3073  3.3150  3.3175  3.3245  3.3264  3.3308  3.3380
          3.3407  3.3443  3.3450  3.3477  3.3643  3.3695  3.3705  3.3801  3.3823
          3.3908  3.3945  3.3993  3.4000  3.4057  3.4123  3.4125  3.4187  3.4200
          3.4233  3.4266  3.4311  3.4334  3.4347  3.4412  3.4424  3.4451  3.4500
          3.4540  3.4567  3.4571  3.4609  3.4635  3.4641  3.4696  3.4720  3.4726
          3.4796  3.4800  3.4823  3.4841  3.4919  3.4939  3.4956  3.5026  3.5040
          3.5046  3.5052  3.5100  3.5117  3.5153  3.5203  3.5205  3.5228  3.5252
          3.5280  3.5282  3.5319  3.5339  3.5387  3.5399  3.5418  3.5427  3.5474
          3.5492  3.5570  3.5589  3.5631  3.5656  3.5694  3.5727  3.5735  3.5752
          3.5824  3.5829  3.5906  3.5913  3.6058  3.6080  3.6098  3.6149  3.6227
          3.6255  3.6302  3.6307  3.6333  3.6338  3.6415  3.6418  3.6471  3.6496
          3.6585  3.6640  3.6734  3.6757  3.6788  3.6834  3.6869  3.6874  3.6975
          3.7038  3.7044  3.7080  3.7086  3.7118  3.7153  3.7180  3.7213  3.7231
          3.7254  3.7286  3.7318  3.7351  3.7431  3.7485  3.7510  3.7556  3.7645
          3.7688  3.7790  3.7826  3.8078  3.8101  3.8130  3.8140  3.8181  3.8210
          3.8226  3.8278  3.8304  3.8336  3.8347  3.8379  3.8415  3.8428  3.8488
          3.8501  3.8524  3.8567  3.8614  3.8628  3.8662  3.8672  3.8677  3.8698
          3.8747  3.8777  3.8785  3.8832  3.8841  3.8847  3.8891  3.8898  3.8948
          3.8988  3.9046  3.9048  3.9136  3.9136  3.9186  3.9192  3.9240  3.9260
          3.9311  3.9349  3.9366  3.9368  3.9497  3.9549  3.9575  3.9598  3.9755
          3.9770  3.9783  3.9788  3.9816  3.9833  3.9972  3.9988  4.0025  4.0037
          4.0053  4.0055  4.0161  4.0178  4.0233  4.0257  4.0286  4.0310  4.0360
          4.0383  4.0442  4.0470  4.0532  4.0562  4.0583  4.0594  4.0617  4.0628
          4.0704  4.0717  4.0812  4.0845  4.0911  4.0978  4.0981  4.1044  4.1063
          4.1069  4.1180  4.1204  4.1216  4.1244  4.1346  4.1347  4.1363  4.1395
          4.1398  4.1404  4.1618  4.1630  4.1735  4.1741  4.1809  4.1809  4.1818
          4.1832  4.1850  4.1888  4.1919  4.1938  4.1982  4.2000  4.2014  4.2066
          4.2148  4.2159  4.2193  4.2201  4.2221  4.2274  4.2274  4.2289  4.2336
          4.2376  4.2380  4.2417  4.2442  4.2471  4.2501  4.2507  4.2528  4.2571
          4.2604  4.2625  4.2626  4.2643  4.2669  4.2733  4.2740  4.2751  4.2782
          4.2788  4.2818  4.2820  4.2867  4.2894  4.2900  4.2921  4.2936  4.2975
          4.3016  4.3033  4.3051  4.3051  4.3056  4.3086  4.3120  4.3168  4.3191
          4.3212  4.3287  4.3288  4.3297  4.3359  4.3369  4.3434  4.3434  4.3466
          4.3472  4.3505  4.3518  4.3592  4.3648  4.3708  4.3755  4.3771  4.3876
          4.3877  4.3952  4.3963  4.3965  4.3996  4.4031  4.4047  4.4073  4.4133
          4.4179  4.4193  4.4345  4.4371  4.4387  4.4395  4.4418  4.4423  4.4475
          4.4516  4.4581  4.4758  4.4767  4.4791  4.4806  4.4819  4.4828  4.4894
          4.4903  4.4951  4.4980  4.5092  4.5131  4.5136  4.5253  4.5290  4.5332
          4.5355  4.5380  4.5384  4.5403  4.5483  4.5549  4.5565  4.5602  4.5634
          4.5686  4.5749  4.5771  4.5811  4.5851  4.5881  4.5901  4.5948  4.5964
          4.5968  4.5976  4.6024  4.6038  4.6044  4.6122  4.6143  4.6175  4.6198
          4.6233  4.6362  4.6421  4.6424  4.6567  4.6583  4.6612  4.6627  4.6632
          4.6682  4.6769  4.6769  4.6789  4.6796  4.6846  4.6875  4.6918  4.6925
          4.6928  4.6938  4.6965  4.7011  4.7056  4.7153  4.7230  4.7268  4.7277
          4.7324  4.7327  4.7392  4.7552  4.7556  4.7573  4.7574  4.7780  4.7807
          4.7828  4.7842  4.7846  4.7851  4.7881  4.7900  4.7944  4.7969  4.7996
          4.8004  4.8026  4.8043  4.8093  4.8112  4.8170  4.8170  4.8184  4.8207
          4.8214  4.8225  4.8235  4.8239  4.8267  4.8268  4.8360  4.8361  4.8672
          4.8929  4.8935  4.9072  4.9072  4.9366  4.9580  4.9647
 Writing out eigenvalues/vectors for ikpt= 13
 Occupation numbers for ikpt= 13
  13      2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000
          2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  2.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
          0.0000  0.0000  0.0000  0.0000  0.0000  0.0000  0.0000
 Test on the normalization of the wavefunctions
  min sum_G |a(n,k,G)| =  1.000000
  max sum_G |a(n,k,G)| =  1.000000
 Test on the orthogonalization of the wavefunctions
  min sum_G a(n,k,G)a(n',k,G) =  0.000000
  max sum_G a(n,k,G)a(n',k,G) =  0.000000
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 
 outwf: write wavefunction to file run1o_DS2_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.03, wall:     0.13
 
================================================================================
== DATASET  3 ==================================================================
-   nproc =   10   -> not optimal: autoparal keyword recommended in input file
 
 mkfilename : getkss/=0, take file _KSS from output of DATASET   2.
 
 
 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 SCREENING: Calculation of the susceptibility and dielectric matrices 
 
 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using double precision arithmetic ; gwpc =  8
 
 Unit cell volume ucvol=  2.0972773E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  96
         ecut(hartree)=      4.956   => boxcut(ratio)=   2.08241
 
 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    16   16   96
  Augmented FFT divisions ...................    17   17   96
  FFT algorithm .............................   112
  FFT cache size ............................    16
- pspini: atom type   1  psp file is 1h.pspnc
- pspatm: opening atomic psp file    1h.pspnc
-  Troullier-Martins psp for element  H         Thu Oct 27 17:28:54 EDT 1994
-  1.00000   1.00000    940714                znucl, zion, pspdat
    1    1    0    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   7.740  11.990    0   1.5855604        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
 Note: local psp for atom with Z=  1.0
 pspatm: epsatm=    0.04198703
         --- l  ekb(1:nproj) -->
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is 14si.pspnc
- pspatm: opening atomic psp file    14si.pspnc
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
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Calculation without spin-orbit
  Nonlocal part applied using Legendre polynomials
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   2
  Max number of (l,m,n) components ..   2
 
 *** Pseudo-Core Charge Info *** 
  Number of radial points for pseudo-core charge .. 2501
  XC core-correction treatment (optnlxccc) ........    1
  Radius for pseudo-core charge for each type ..... 
 
  - Atom type    1 has pseudo-core radius ..  0.0000
  - Atom type    2 has pseudo-core radius ..  5.4188
 
 *** Info on the Q-grid used for form factors in spline form *** 
  Number of q-points for radial functions ffspl ..   4611
  Number of q-points for vlspl ...................   4611
  vlspl is computed in Reciprocal Space
 XC functional for type   1 is   1
 XC functional for type   2 is   1
 
 GW calculation type              =    0
 zcut to avoid poles in chi0 [eV] =   0.100000
 
 
--- !WARNING
message: |
    Using WFK filerun1o_DS2_WFK
src_file: Subroutine Unknown
src_line: 0
...
 
 
 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:  1601
 
--- !WARNING
message: |
    
     Number of G-vectors found less then required. Calculation will proceed with 
      npwvec =   1601
      npweps =   1601
      npwwfn =   1139
 
src_file: Subroutine Unknown
src_line: 0
...
 
   1 14  1 14  1 14  1 14  1 14  1 14
   2 13  2 13  2 13  2 13  2 13  2 13
   3 12  3 12  3 12  3 12  3 12  3 12
   4 11  4 11  4 11  4 11  4 11  4 11
   5 10  5 10  5 10  5 10  5 10  5 10
   6  9  6  9  6  9  6  9  6  9  6  9
   7  8  7  8  7  8  7  8  7  8  7  8
   8  7  8  7  8  7  8  7  8  7  8  7
   9  6  9  6  9  6  9  6  9  6  9  6
  10  5 10  5 10  5 10  5 10  5 10  5
  11  4 11  4 11  4 11  4 11  4 11  4
  12  3 12  3 12  3 12  3 12  3 12  3
  13  2 13  2 13  2 13  2 13  2 13  2
  14  1 14  1 14  1 14  1 14  1 14  1
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  6.2836839 -3.6278866  0.0000000  G(1)=  0.1591423  0.0000000  0.0000000
 R(2)=  0.0000000  7.2557732  0.0000000  G(2)=  0.0795712  0.1378213  0.0000000
 R(3)=  0.0000000  0.0000000 46.0000000  G(3)=  0.0000000  0.0000000  0.0217391
 Unit cell volume ucvol=  2.0972773E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 Time-reversal symmetry is present
 
 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1    -1  0  0   0.000  1    -1  1  0   0.000  1     1 -1  0   0.000  1
  0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1     0  0 -1   0.000  1
 
 
  0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1
  1 -1  0   0.000  1    -1  1  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1     0  0 -1   0.000  1
 
 
 -1  1  0   0.000  1     1 -1  0   0.000  1     1  0  0   0.000  1    -1  0  0   0.000  1
 -1  0  0   0.000  1     1  0  0   0.000  1     1 -1  0   0.000  1    -1  1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1     0  0 -1   0.000  1
 
 
Reduced atomic positions [iatom, xred, symbol]:
    1)    0.0000000  0.0000000  0.3989703   H
    2)    0.0000000  0.0000000  0.3380723  Si
    3)    0.6666667  0.3333333  0.3058749  Si
    4)    0.6666667  0.3333333  0.2092828  Si
    5)    0.3333333 -0.3333333  0.1770855  Si
    6)    0.3333333 -0.3333333  0.0804934  Si
    7)    0.0000000  0.0000000  0.0482960  Si
    8)    0.0000000  0.0000000 -0.0482960  Si
    9)   -0.3333333  0.3333333 -0.0804934  Si
   10)   -0.3333333  0.3333333 -0.1770855  Si
   11)   -0.6666667 -0.3333333 -0.2092828  Si
   12)   -0.6666667 -0.3333333 -0.3058749  Si
   13)    0.0000000  0.0000000 -0.3380723  Si
   14)    0.0000000  0.0000000 -0.3989703   H
 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    13
 Reduced coordinates and weights : 
 
     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.09375
     5)     0.00000000E+00  0.00000000E+00  2.50000000E-01       0.03125
     6)     2.50000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     7)     5.00000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     8)    -2.50000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     9)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.18750
    10)     0.00000000E+00  0.00000000E+00  5.00000000E-01       0.01563
    11)     2.50000000E-01  0.00000000E+00  5.00000000E-01       0.09375
    12)     5.00000000E-01  0.00000000E+00  5.00000000E-01       0.04688
    13)     2.50000000E-01  2.50000000E-01  5.00000000E-01       0.09375
 
 Together with 12 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.
 
 
 ==== Q-mesh for the screening function ====
 Number of points in the irreducible wedge :    13
 Reduced coordinates and weights : 
 
     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.09375
     5)     0.00000000E+00  0.00000000E+00  2.50000000E-01       0.03125
     6)     2.50000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     7)     5.00000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     8)    -2.50000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     9)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.18750
    10)     0.00000000E+00  0.00000000E+00  5.00000000E-01       0.01563
    11)     2.50000000E-01  0.00000000E+00  5.00000000E-01       0.09375
    12)     5.00000000E-01  0.00000000E+00  5.00000000E-01       0.04688
    13)     2.50000000E-01  2.50000000E-01  5.00000000E-01       0.09375
 
 Together with 12 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.
 
 
 Optimal value for ng0sh =  1 1 1
 
 setmesh: npwwfn        =     1139; Max (m1,m2,m3)   =      3     3    23
          npweps/npwsigx=     1601; Max (mm1,mm2,mm3)=      5     5    24
          mG0 added     =   1  1  1
 calculated ecutwfn          =   4.956 [Ha] 
 calculated ecutsigx/ecuteps =   6.648 [Ha]
 using method =  2 with ecuteff =  23.085 [Ha]
Finding a FFT mesh compatible with all the symmetries
 setmesh: divisor mesh1 1 1
 setmesh: FFT mesh size selected  =  15x 15x100
          total number of points  =    22500
 
 
 integrate q->0 : numerical BZ geometry factor =   -25.9878
 
 vcoul_init : cutoff-mode = AUXILIARY_FUNCTION
 q-points for optical limit:   1
     1)      0.000010    0.000020    0.000030
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a screening       |  input file contains a screening
. ABINIT  code version 7.10.2           |  ABINIT  code version 7.10.2
. date 20150813 bantot 1300 natom   14  |  date 20150813 bantot 1300 natom   14
  nkpt  13 nsym 12 ngfft  16,  16,  96  |  nkpt  13 nsym 12 ngfft  16,  16,  96
  ntypat  2 ecut_eff   4.9563848        |  ntypat  2 ecut_eff   5.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     6.2836839  -3.6278866   0.0000000  |     6.2836839  -3.6278866   0.0000000
     0.0000000   7.2557732   0.0000000  |     0.0000000   7.2557732   0.0000000
     0.0000000   0.0000000  46.0000000  |     0.0000000   0.0000000  46.0000000
 
--- !WARNING
message: |
    input ecut_eff=    4.956385 /= disk file ecut_eff=    5.000000.
src_file: Subroutine Unknown
src_line: 0
...
 
  nband:                                |  nband:
   100 100 100 100 100 100 100 100 100  |   100 100 100 100 100 100 100 100 100
   100 100 100 100                      |   100 100 100 100
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
   -1  0  0  1  1  0  0  0  1           |   -1  0  0  1  1  0  0  0  1
    1  0  0 -1 -1  0  0  0 -1           |    1  0  0 -1 -1  0  0  0 -1
    0  1  0 -1 -1  0  0  0  1           |    0  1  0 -1 -1  0  0  0  1
    0 -1  0  1  1  0  0  0 -1           |    0 -1  0  1  1  0  0  0 -1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
    0  1  0  1  0  0  0  0 -1           |    0  1  0  1  0  0  0  0 -1
   -1 -1  0  1  0  0  0  0  1           |   -1 -1  0  1  0  0  0  0  1
    1  1  0 -1  0  0  0  0 -1           |    1  1  0 -1  0  0  0  0 -1
    1  1  0  0 -1  0  0  0  1           |    1  1  0  0 -1  0  0  0  1
   -1 -1  0  0  1  0  0  0 -1           |   -1 -1  0  0  1  0  0  0 -1
  typat:                                |  typat:
    1  2  2  2  2  2  2  2  2  2  2  2  |    1  2  2  2  2  2  2  2  2  2  2  2
    2  1                                |    2  1
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1                                   |    1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
     0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
     0.0000000   0.0000000   0.2500000  |     0.0000000   0.0000000   0.2500000
  wtk:                                  |  wtk:
    0.016  0.094  0.047  0.094  0.031   |    0.016  0.094  0.047  0.094  0.031
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 0.0 0.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
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
   znucl:                               |   znucl:
    1.00 14.00                          |    1.00 14.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   1.0  |  pspdat 940714 pspcod    1 zion   1.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.3989703  |     0.0000000   0.0000000   0.3989703
     0.0000000   0.0000000   0.3380723  |     0.0000000   0.0000000   0.3380723
     0.6666667   0.3333333   0.3058749  |     0.6666667   0.3333333   0.3058749
     0.6666667   0.3333333   0.2092828  |     0.6666667   0.3333333   0.2092828
     0.3333333  -0.3333333   0.1770855  |     0.3333333  -0.3333333   0.1770855
     0.3333333  -0.3333333   0.0804934  |     0.3333333  -0.3333333   0.0804934
     0.0000000   0.0000000   0.0482960  |     0.0000000   0.0000000   0.0482960
     0.0000000   0.0000000  -0.0482960  |     0.0000000   0.0000000  -0.0482960
    -0.3333333   0.3333333  -0.0804934  |    -0.3333333   0.3333333  -0.0804934
    -0.3333333   0.3333333  -0.1770855  |    -0.3333333   0.3333333  -0.1770855
    -0.6666667  -0.3333333  -0.2092828  |    -0.6666667  -0.3333333  -0.2092828
    -0.6666667  -0.3333333  -0.3058749  |    -0.6666667  -0.3333333  -0.3058749
     0.0000000   0.0000000  -0.3380723  |     0.0000000   0.0000000  -0.3380723
     0.0000000   0.0000000  -0.3989703  |     0.0000000   0.0000000  -0.3989703
================================================================================
 
 ==== FFT mesh used for oscillator strengths ====
  FFT mesh divisions ........................    15   15  100
  Augmented FFT divisions ...................    15   15  100
  FFT algorithm .............................   112
  FFT cache size ............................    16
 top of valence       [eV]   3.51
 bottom of conduction [eV]   4.31
 Fermi energy         [eV]   3.91
 
 
 screening : taking advantage of time-reversal symmetry 
 Maximum band index for partially occupied states nbvw =    25
 Remaining bands to be divided among processors   nbcw =    75
P Number of bands treated by each node ~    7
 
--- !COMMENT
message: |
    Using k-centered G-spheres.
src_file: Subroutine Unknown
src_line: 0
...
 
 Memory needed for Fourier components u(G) =         22.6 [Mb]
 Memory needed for real-space u(r) =        446.3 [Mb]
 ==== Info on the Wfd% object ====
  Number of irreducible k-points ........ 13
  Number of spinorial components ........ 1
  Number of spin-density components ..... 1
  Number of spin polarizations .......... 1
  Plane wave cutoff energy ..............   5.0
  Gamma-centered ........................ F
  Max number of G-vectors ............... 1138
  Total number of FFT points ............ 22500
  Number of FFT points treated by me .... 22500
 
 
 ==== FFT mesh for wavefunctions ====
  FFT mesh divisions ........................    15   15  100
  Augmented FFT divisions ...................    15   15  100
  FFT algorithm .............................   112
  FFT cache size ............................    16
 Memory allocated for Fourier components u(G) =         22.6 [Mb]
 Memory allocated for real-space u(r) =          0.0 [Mb]
 
--- !WARNING
message: |
    Wfd is init using WFK file
src_file: Subroutine Unknown
src_line: 0
...
 
 wfd_read_wfk: about to read run1o_DS2_WFK
wfd_read_wfk: will read 1300 (b,k,s) states
 about to read ik_ibz:            1 , spin:            1
 about to read ik_ibz:            2 , spin:            1
 about to read ik_ibz:            3 , spin:            1
 about to read ik_ibz:            4 , spin:            1
 about to read ik_ibz:            5 , spin:            1
 about to read ik_ibz:            6 , spin:            1
 about to read ik_ibz:            7 , spin:            1
 about to read ik_ibz:            8 , spin:            1
 about to read ik_ibz:            9 , spin:            1
 about to read ik_ibz:           10 , spin:            1
 about to read ik_ibz:           11 , spin:            1
 about to read ik_ibz:           12 , spin:            1
 about to read ik_ibz:           13 , spin:            1
cpu_time =      0.15, wall_time =      0.19
  CHECK           -1          96
 planewave contribution to nelect:   49.9991
  Number of electrons per unit cell       =    49.9990967051768     
  Charge density outside the cutoff region=    49.9990967051768     
 Number of electrons calculated from density =   49.9991; Expected =   50.0000
 average of density, n =  0.023840
 r_s =    2.1554
 omega_plasma =   14.8939 [eV]
 
 Total charge density [el/Bohr^3]
,     Maximum=    1.6793E-01  at reduced coord.    0.0000    0.0000    0.6146
,     Minimum=    1.0885E-05  at reduced coord.    0.6250    0.3125    0.5000
,  Integrated=    4.9999E+01
 
 calculating chi0 at frequencies [eV] :
  1    0.000000E+00    0.000000E+00
  2    0.000000E+00    1.670000E+01
 Memory required for chi0 matrix=         78.2 [Mb].
 
 
--------------------------------------------------------------------------------
  q-point number  1        q = ( 0.000000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Q-points for long wave-length limit. #   1
     1)      0.000010    0.000020    0.000030
 
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
 Using faster algorithm based on time reversal symmetry.
 Will sum 12032 (b,b',k,s) states in chi0q0.
 Calculating chi0(q=(0,0,0),omega,G,G")
 Calculation status (     64 to be completed):
 ik =    1 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =    2 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   50 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 limit q->0, including term <n,k|[Vnl,iqr]|n"k>
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     717.2, wall_time =     717.3
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  1, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2   0.000 -20.576  -3.556 -10.991   1.335   7.652   0.818  -4.407  -2.227
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3   0.000  -3.556 -20.576   1.335 -10.991   0.818   7.652  -2.227  -4.407
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   0.000 -10.991   1.335 -53.258   1.519 -17.485  -3.565  12.974   5.252
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   0.000   1.335 -10.991   1.519 -53.258  -3.565 -17.485   5.252  12.974
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6   0.000   7.652   0.818 -17.485  -3.565 -75.959   5.741 -20.427 -11.210
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.001
 
    7   0.000   0.818   7.652  -3.565 -17.485   5.741 -75.960 -11.210 -20.427
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.000  -4.407  -2.227  12.974   5.252 -20.427 -11.210 -89.920 -23.078
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
    9   0.000  -2.227  -4.407   5.252  12.974 -11.210 -20.427 -23.078 -89.921
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  1, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2   0.000  -1.882  -0.365  -0.894   0.448   1.006  -0.256  -0.809  -0.109
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3   0.000  -0.365  -1.882   0.448  -0.894  -0.256   1.006  -0.109  -0.809
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   0.000  -0.894   0.448  -7.069  -0.344  -2.445  -0.175   2.420   0.912
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   0.000   0.448  -0.894  -0.344  -7.069  -0.175  -2.445   0.912   2.420
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6   0.000   1.006  -0.256  -2.445  -0.175 -14.357   1.041  -4.281  -2.502
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7   0.000  -0.256   1.006  -0.175  -2.445   1.041 -14.358  -2.502  -4.281
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.000  -0.809  -0.109   2.420   0.912  -4.281  -2.502 -22.082  -3.771
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
    9   0.000  -0.109  -0.809   0.912   2.420  -2.502  -4.281  -3.771 -22.083
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
 Analyzing long wavelength limit for several q
 For q-point:  0.000010 0.000020 0.000030
  dielectric constant =  14.3889
  dielectric constant without local fields =  16.1186
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    1 :     78.20  [%]
 
 
--------------------------------------------------------------------------------
  q-point number  2        q = ( 0.250000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.7, wall_time =     501.2
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  2, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -49.914 -14.208 -12.030   9.410   8.478  -5.836  -5.530   2.276   2.225
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2 -14.208 -60.945   6.857 -17.996  -4.162  13.592   2.288  -8.512  -0.148
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3 -12.030   6.857 -55.603  -3.871 -17.001   2.005  12.977   0.122  -7.951
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   9.410 -17.996  -3.871 -79.183   2.366 -22.703  -0.981  17.316  -0.488
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   8.478  -4.162 -17.001   2.366 -77.604  -0.971 -22.918  -0.577  17.284
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -5.836  13.592   2.005 -22.703  -0.971 -96.476  -0.117 -25.341  -0.016
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7  -5.530   2.288  12.977  -0.981 -22.918  -0.117 -95.903   0.058 -25.248
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   2.276  -8.512   0.122  17.316  -0.577 -25.341   0.058-106.372  -4.701
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000  -0.001
 
    9   2.225  -0.148  -7.951  -0.488  17.284  -0.016 -25.248  -4.701-105.382
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  2, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -5.981  -1.457  -1.452   1.155   1.149  -0.738  -0.736   0.290   0.290
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -1.457  -7.633   0.835  -2.230  -0.341   2.029   0.057  -1.446   0.033
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3  -1.452   0.835  -7.606  -0.343  -2.219   0.057   2.022   0.035  -1.444
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   1.155  -2.230  -0.343 -12.153  -0.024  -3.566  -0.017   3.247   0.319
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   1.149  -0.341  -2.219  -0.024 -12.119  -0.015  -3.560   0.316   3.248
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -0.738   2.029   0.057  -3.566  -0.015 -18.436   0.430  -5.119  -1.281
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    7  -0.736   0.057   2.022  -0.017  -3.560   0.430 -18.437  -1.284  -5.134
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.290  -1.446   0.035   3.247   0.316  -5.119  -1.284 -24.944  -2.061
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    9   0.290   0.033  -1.444   0.319   3.248  -1.281  -5.134  -2.061 -24.924
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    2 :     68.21  [%]
 
 
--------------------------------------------------------------------------------
  q-point number  3        q = ( 0.500000, 0.000000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.5, wall_time =     501.1
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  3, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -93.501 -25.691 -22.511  18.280  15.336 -10.740  -9.889   4.246   4.180
        0.000   0.000   0.000   0.000  -0.001  -0.001   0.000   0.000   0.000
 
    2 -25.691-100.721  16.499 -26.324  -9.333  19.060   4.103 -12.067   0.891
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001  -0.002
 
    3 -22.511  16.499 -86.636  -9.415 -21.236   3.294  16.512   1.851 -10.412
        0.000   0.000   0.000  -0.001  -0.001   0.000  -0.001   0.000   0.001
 
    4  18.280 -26.324  -9.415-103.810   3.455 -25.792   0.994  19.856  -5.109
        0.000   0.000   0.001   0.000   0.000  -0.001  -0.002   0.000  -0.002
 
    5  15.336  -9.333 -21.236   3.455 -93.020   1.358 -25.097  -5.572  19.093
        0.001   0.000   0.001   0.000   0.000   0.001  -0.001   0.000   0.000
 
    6 -10.740  19.060   3.294 -25.792   1.358-107.478  -5.092 -26.822   9.456
        0.001   0.000   0.000   0.001  -0.001   0.000  -0.001   0.000  -0.003
 
    7  -9.889   4.103  16.512   0.994 -25.097  -5.092-104.688   9.632 -26.951
        0.000   0.000   0.001   0.002   0.001   0.001   0.000   0.002   0.000
 
    8   4.246 -12.067   1.851  19.856  -5.572 -26.822   9.632-111.720  10.955
        0.000   0.001   0.000   0.000   0.000   0.000  -0.002   0.000   0.000
 
    9   4.180   0.891 -10.412  -5.109  19.093   9.456 -26.951  10.955-109.033
        0.000   0.002  -0.001   0.002   0.000   0.003   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  3, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1 -19.357  -4.680  -4.669   3.718   3.706  -2.389  -2.381   0.962   0.952
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -4.680 -20.408   3.518  -5.149  -2.134   4.240   0.801  -2.826   0.329
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001
 
    3  -4.669   3.518 -20.340  -2.139  -5.123   0.800   4.234   0.329  -2.807
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   3.718  -5.149  -2.139 -23.159   0.744  -5.908   0.310   4.940  -1.058
        0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000  -0.001
 
    5   3.706  -2.134  -5.123   0.744 -23.087   0.314  -5.912  -1.065   4.929
        0.000   0.000   0.000   0.000   0.000   0.001   0.000   0.000   0.000
 
    6  -2.389   4.240   0.800  -5.908   0.314 -26.786  -0.994  -6.740   1.665
        0.000   0.000   0.000   0.000  -0.001   0.000  -0.001   0.000  -0.002
 
    7  -2.381   0.801   4.234   0.310  -5.912  -0.994 -26.727   1.639  -6.696
        0.000   0.000   0.000   0.001   0.000   0.001   0.000   0.001   0.000
 
    8   0.962  -2.826   0.329   4.940  -1.065  -6.740   1.639 -30.253   2.046
        0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000
 
    9   0.952   0.329  -2.807  -1.058   4.929   1.665  -6.696   2.046 -29.901
        0.000   0.001   0.000   0.001   0.000   0.002   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    3 :     58.25  [%]
 
 
--------------------------------------------------------------------------------
  q-point number  4        q = ( 0.250000, 0.250000, 0.000000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.8, wall_time =     501.3
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  4, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -88.636 -23.039 -23.039  16.246  16.246  -9.981  -9.980   3.913   3.914
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001  -0.001
 
    2 -23.039 -91.895  15.719 -24.118  -9.019  18.088   3.603 -11.424   1.424
        0.000   0.000   0.000  -0.001   0.000   0.000   0.000   0.001  -0.001
 
    3 -23.039  15.719 -91.895  -9.019 -24.118   3.603  18.088   1.424 -11.423
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000  -0.001   0.000
 
    4  16.246 -24.118  -9.019 -99.129   3.366 -26.010   1.135  20.075  -5.300
        0.000   0.001   0.000   0.000   0.001  -0.001   0.000   0.000   0.000
 
    5  16.246  -9.019 -24.118   3.366 -99.128   1.135 -26.010  -5.300  20.075
        0.000   0.000   0.000  -0.001   0.000  -0.001   0.000   0.000   0.000
 
    6  -9.981  18.088   3.603 -26.010   1.135-108.847  -5.003 -27.929   9.374
        0.000   0.000   0.001   0.001   0.001   0.000   0.000   0.000   0.000
 
    7  -9.980   3.603  18.088   1.135 -26.010  -5.003-108.848   9.374 -27.930
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   3.913 -11.424   1.424  20.075  -5.300 -27.929   9.374-114.144  10.674
        0.001  -0.001   0.001   0.000   0.000   0.000   0.000   0.000   0.000
 
    9   3.914   1.424 -11.423  -5.300  20.075   9.374 -27.930  10.674-114.149
        0.001   0.001   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  4, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1 -15.610  -3.778  -3.778   2.999   2.999  -1.928  -1.927   0.766   0.766
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -3.778 -16.820   2.768  -4.334  -1.631   3.636   0.586  -2.445   0.256
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001
 
    3  -3.778   2.768 -16.820  -1.631  -4.333   0.586   3.636   0.256  -2.444
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   2.999  -4.334  -1.631 -20.121   0.521  -5.285   0.228   4.496  -0.673
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
    5   2.999  -1.631  -4.333   0.521 -20.120   0.228  -5.285  -0.673   4.496
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -1.928   3.636   0.586  -5.285   0.228 -24.597  -0.593  -6.333   0.809
        0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000
 
    7  -1.927   0.586   3.636   0.228  -5.285  -0.593 -24.598   0.810  -6.334
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.766  -2.445   0.256   4.496  -0.673  -6.333   0.810 -28.819   0.871
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    9   0.766   0.256  -2.444  -0.673   4.496   0.809  -6.334   0.871 -28.822
        0.000   0.001   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    4 :     58.64  [%]
 
 
--------------------------------------------------------------------------------
  q-point number  5        q = ( 0.000000, 0.000000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.7, wall_time =     501.3
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  5, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -1.550  -2.600   1.814   1.846  -1.542  -0.913   0.663   0.181   0.022
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -2.600 -29.161  -3.337 -13.171   1.348   9.298   1.105  -5.548  -2.698
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3   1.814  -3.337 -12.575   1.266  -8.410   0.501   5.810  -1.678  -3.207
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   1.846 -13.171   1.266 -59.959   1.470 -18.406  -3.680  13.845   5.467
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000
 
    5  -1.542   1.348  -8.410   1.470 -45.815  -3.367 -16.357   4.963  11.946
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -0.913   9.298   0.501 -18.406  -3.367 -80.148   5.710 -20.923 -11.302
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.001
 
    7   0.663   1.105   5.810  -3.680 -16.357   5.710 -71.242 -11.047 -19.848
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.181  -5.548  -1.678  13.845   4.963 -20.923 -11.047 -92.339 -23.026
        0.000   0.000   0.000   0.001   0.000  -0.001   0.000   0.000   0.000
 
    9   0.022  -2.698  -3.207   5.467  11.946 -11.302 -19.848 -23.026 -87.100
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  5, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.120  -0.146   0.088   0.198  -0.158  -0.174   0.151   0.087  -0.079
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -0.146  -2.906  -0.341  -1.233   0.491   1.332  -0.294  -1.049  -0.130
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3   0.088  -0.341  -1.069   0.376  -0.596  -0.207   0.705  -0.084  -0.581
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   0.198  -1.233   0.376  -8.753  -0.338  -2.894  -0.182   2.801   0.968
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5  -0.158   0.491  -0.596  -0.338  -5.518  -0.164  -2.015   0.842   2.044
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -0.174   1.332  -0.207  -2.894  -0.164 -16.320   1.033  -4.733  -2.545
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7   0.151  -0.294   0.705  -0.182  -2.015   1.033 -12.423  -2.429  -3.819
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.087  -1.049  -0.084   2.801   0.842  -4.733  -2.429 -23.862  -3.755
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
    9  -0.079  -0.130  -0.581   0.968   2.044  -2.545  -3.819  -3.755 -20.213
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    5 :     87.21  [%]
 
 
--------------------------------------------------------------------------------
  q-point number  6        q = ( 0.250000, 0.000000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.7, wall_time =     501.3
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  6, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -51.678 -15.061 -12.095  10.446   7.749  -6.515  -5.138   2.518   2.223
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2 -15.061 -65.019   7.109 -19.191  -3.924  14.606   2.322  -9.163  -0.391
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3 -12.095   7.109 -51.992  -4.161 -15.214   1.949  11.700   0.446  -7.210
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4  10.446 -19.191  -4.161 -84.011   2.316 -23.620  -1.085  18.037  -0.306
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   7.749  -3.924 -15.214   2.316 -71.825  -0.781 -21.808  -0.849  16.415
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -6.515  14.606   1.949 -23.620  -0.781 -99.678  -0.156 -25.640  -0.065
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7  -5.138   2.322  11.700  -1.085 -21.808  -0.156 -92.205   0.200 -24.899
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   2.518  -9.163   0.446  18.037  -0.849 -25.640   0.200-107.728  -4.631
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
    9   2.223  -0.391  -7.210  -0.306  16.415  -0.065 -24.899  -4.631-103.741
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  6, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -6.090  -1.583  -1.377   1.328   1.013  -0.891  -0.603   0.368   0.219
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -1.583  -8.527   0.856  -2.523  -0.303   2.311   0.022  -1.655   0.016
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3  -1.377   0.856  -6.901  -0.406  -1.963   0.102   1.761   0.054  -1.246
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   1.328  -2.523  -0.406 -13.613  -0.019  -3.949  -0.022   3.572   0.368
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   1.013  -0.303  -1.963  -0.019 -10.769  -0.007  -3.187   0.254   2.925
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -0.891   2.311   0.102  -3.949  -0.007 -20.107   0.422  -5.496  -1.322
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7  -0.603   0.022   1.761  -0.022  -3.187   0.422 -16.769  -1.218  -4.744
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.368  -1.655   0.054   3.572   0.254  -5.496  -1.218 -26.404  -2.046
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
    9   0.219   0.016  -1.246   0.368   2.925  -1.322  -4.744  -2.046 -23.394
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    6 :     68.21  [%]
 
 
--------------------------------------------------------------------------------
  q-point number  7        q = ( 0.500000, 0.000000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.6, wall_time =     501.1
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  7, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -95.683 -26.089 -23.463  18.527  15.402 -11.121  -9.770   4.496   4.216
        0.000   0.000   0.000   0.000  -0.001  -0.001   0.000   0.000   0.000
 
    2 -26.089-101.796  17.026 -26.164  -9.226  19.246   3.982 -12.296   0.891
        0.000   0.000   0.000  -0.001   0.000   0.000   0.000  -0.001  -0.002
 
    3 -23.463  17.026 -87.513  -9.669 -20.911   3.477  16.014   1.883 -10.224
        0.000   0.000   0.000  -0.001   0.000   0.000  -0.001   0.000   0.000
 
    4  18.527 -26.164  -9.669-104.442   3.295 -25.914   1.056  20.080  -5.084
        0.000   0.001   0.001   0.000   0.000  -0.001  -0.002   0.000  -0.002
 
    5  15.402  -9.226 -20.911   3.295 -90.156   1.500 -24.091  -5.804  18.477
        0.001   0.000   0.000   0.000   0.000   0.001  -0.001   0.000   0.000
 
    6 -11.121  19.246   3.477 -25.914   1.500-108.761  -5.147 -27.075   9.462
        0.001   0.000   0.000   0.001  -0.001   0.000  -0.001   0.001  -0.003
 
    7  -9.770   3.982  16.014   1.056 -24.091  -5.147-102.263   9.747 -26.824
        0.000   0.000   0.001   0.002   0.001   0.001   0.000   0.002   0.000
 
    8   4.496 -12.296   1.883  20.080  -5.804 -27.075   9.747-112.082  11.084
        0.000   0.001   0.000   0.000   0.000  -0.001  -0.002   0.000   0.000
 
    9   4.216   0.891 -10.224  -5.084  18.477   9.462 -26.824  11.084-108.693
        0.000   0.002   0.000   0.002   0.000   0.003   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  7, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1 -19.432  -4.758  -4.626   3.823   3.623  -2.485  -2.298   1.016   0.907
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -4.758 -20.963   3.533  -5.321  -2.111   4.405   0.777  -2.952   0.322
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001
 
    3  -4.626   3.533 -19.909  -2.180  -4.971   0.831   4.077   0.334  -2.690
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   3.823  -5.321  -2.180 -24.022   0.747  -6.117   0.309   5.118  -1.029
        0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000  -0.001
 
    5   3.623  -2.111  -4.971   0.747 -22.270   0.317  -5.696  -1.101   4.753
        0.000   0.000   0.000   0.000   0.000   0.001   0.000   0.000   0.000
 
    6  -2.485   4.405   0.831  -6.117   0.317 -27.715  -1.000  -6.931   1.634
        0.000   0.000   0.000   0.000  -0.001   0.000  -0.001   0.000  -0.002
 
    7  -2.298   0.777   4.077   0.309  -5.696  -1.000 -25.809   1.677  -6.525
        0.000   0.000   0.000   0.001   0.000   0.001   0.000   0.001   0.000
 
    8   1.016  -2.952   0.334   5.118  -1.101  -6.931   1.677 -30.940   2.048
        0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000
 
    9   0.907   0.322  -2.690  -1.029   4.753   1.634  -6.525   2.048 -29.206
        0.000   0.001   0.000   0.001   0.000   0.002   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    7 :     58.25  [%]
 
 
--------------------------------------------------------------------------------
  q-point number  8        q = (-0.250000, 0.000000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.7, wall_time =     501.3
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  8, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -49.206 -12.550 -13.365   9.394   8.453  -5.992  -5.185   2.269   2.087
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2 -12.550 -60.401   6.904 -18.793  -3.747  14.230   2.110  -8.727  -0.213
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3 -13.365   6.904 -57.332  -4.457 -16.908   2.261  12.555   0.103  -7.856
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   9.394 -18.793  -4.457 -83.018   2.375 -23.776  -1.085  17.995  -0.378
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   8.453  -3.747 -16.908   2.375 -74.281  -0.821 -21.623  -0.730  16.492
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -5.992  14.230   2.261 -23.776  -0.821 -99.030  -0.126 -25.489  -0.032
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.001
 
    7  -5.185   2.110  12.555  -1.085 -21.623  -0.126 -92.768   0.079 -24.924
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000
 
    8   2.269  -8.727   0.103  17.995  -0.730 -25.489   0.079-106.568  -4.701
        0.000   0.000   0.000   0.000   0.000  -0.001   0.001   0.000   0.001
 
    9   2.087  -0.213  -7.856  -0.378  16.492  -0.032 -24.924  -4.701-104.599
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000  -0.001   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  8, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -6.082  -1.576  -1.380   1.321   1.017  -0.889  -0.606   0.366   0.219
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -1.576  -8.496   0.855  -2.511  -0.304   2.306   0.022  -1.652   0.019
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3  -1.380   0.855  -6.922  -0.404  -1.973   0.103   1.768   0.053  -1.247
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   1.321  -2.511  -0.404 -13.584  -0.019  -3.948  -0.021   3.573   0.365
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   1.017  -0.304  -1.973  -0.019 -10.805  -0.009  -3.197   0.257   2.925
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -0.889   2.306   0.103  -3.948  -0.009 -20.117   0.423  -5.508  -1.324
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.001
 
    7  -0.606   0.022   1.768  -0.021  -3.197   0.423 -16.780  -1.213  -4.732
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.366  -1.652   0.053   3.573   0.257  -5.508  -1.213 -26.340  -2.047
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.001
 
    9   0.219   0.019  -1.247   0.365   2.925  -1.324  -4.732  -2.047 -23.390
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000  -0.001   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    8 :     68.21  [%]
 
 
--------------------------------------------------------------------------------
  q-point number  9        q = ( 0.250000, 0.250000, 0.250000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.7, wall_time =     501.2
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q =  9, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -88.878 -23.322 -22.823  16.614  15.982 -10.342  -9.655   4.028   3.822
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000
 
    2 -23.322 -93.377  15.742 -24.431  -8.932  18.605   3.522 -11.742   1.337
        0.000   0.000   0.000  -0.001   0.000   0.000   0.000   0.001  -0.001
 
    3 -22.823  15.742 -90.606  -9.169 -23.862   3.677  17.569   1.520 -11.080
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000  -0.001   0.000
 
    4  16.614 -24.431  -9.169-101.521   3.387 -26.642   1.097  20.503  -5.180
        0.000   0.001   0.000   0.000   0.001  -0.001   0.000   0.000   0.000
 
    5  15.982  -8.932 -23.862   3.387 -96.961   1.191 -25.389  -5.439  19.605
        0.000   0.000   0.000  -0.001   0.000  -0.001   0.000   0.000   0.000
 
    6 -10.342  18.605   3.677 -26.642   1.191-110.836  -5.024 -28.045   9.337
        0.000   0.000   0.001   0.001   0.001   0.000   0.000   0.001   0.000
 
    7  -9.655   3.522  17.569   1.097 -25.389  -5.024-106.536   9.447 -27.648
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   4.028 -11.742   1.520  20.503  -5.439 -28.045   9.447-114.345  10.682
        0.001  -0.001   0.001   0.000   0.000  -0.001   0.000   0.000  -0.001
 
    9   3.822   1.337 -11.080  -5.180  19.605   9.337 -27.648  10.682-113.512
        0.000   0.001   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q =  9, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1 -15.688  -3.869  -3.723   3.125   2.899  -2.041  -1.828   0.825   0.712
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -3.869 -17.476   2.782  -4.543  -1.602   3.840   0.558  -2.593   0.246
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3  -3.723   2.782 -16.298  -1.679  -4.149   0.622   3.446   0.268  -2.302
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000
 
    4   3.125  -4.543  -1.679 -21.177   0.525  -5.555   0.225   4.714  -0.638
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   2.899  -1.602  -4.149   0.525 -19.140   0.232  -5.023  -0.718   4.275
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -2.041   3.840   0.622  -5.555   0.232 -25.740  -0.598  -6.556   0.777
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    7  -1.828   0.558   3.446   0.225  -5.023  -0.598 -23.439   0.862  -6.088
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.825  -2.593   0.268   4.714  -0.718  -6.556   0.862 -29.672   0.882
        0.000   0.000   0.001   0.000   0.000   0.000   0.000   0.000   0.000
 
    9   0.712   0.246  -2.302  -0.638   4.275   0.777  -6.088   0.882 -27.873
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point    9 :     58.64  [%]
 
 
--------------------------------------------------------------------------------
  q-point number 10        q = ( 0.000000, 0.000000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.8, wall_time =     501.3
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 10, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1  -5.956  -5.532   2.467   3.836  -2.668  -2.014   1.068   0.555   0.212
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -5.532 -37.710  -2.668 -14.943   1.347  10.728   1.329  -6.594  -3.079
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3   2.467  -2.668  -5.956   1.068  -5.532   0.212   3.836  -1.086  -2.014
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   3.836 -14.943   1.068 -65.933   1.329 -19.181  -3.717  14.592   5.619
        0.000   0.000   0.000   0.000   0.000   0.001   0.000  -0.001   0.000
 
    5  -2.668   1.347  -5.532   1.329 -37.710  -3.079 -14.943   4.585  10.728
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -2.014  10.728   0.212 -19.181  -3.079 -83.851   5.619 -21.346 -11.332
        0.000   0.000   0.000  -0.001   0.000   0.000   0.000   0.002   0.000
 
    7   1.068   1.329   3.836  -3.717 -14.943   5.619 -65.933 -10.802 -19.181
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.555  -6.594  -1.086  14.592   4.585 -21.346 -10.802 -94.382 -22.867
        0.000   0.000   0.000   0.001   0.000  -0.002   0.000   0.000   0.000
 
    9   0.212  -3.079  -2.014   5.619  10.728 -11.332 -19.181 -22.867 -83.852
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 10, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -0.478  -0.346   0.118   0.435  -0.272  -0.368   0.276   0.182  -0.148
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -0.346  -4.124  -0.272  -1.609   0.506   1.680  -0.322  -1.299  -0.149
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3   0.118  -0.272  -0.478   0.276  -0.346  -0.148   0.435  -0.058  -0.368
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   0.435  -1.609   0.276 -10.546  -0.322  -3.354  -0.184   3.181   1.008
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5  -0.272   0.506  -0.346  -0.322  -4.124  -0.149  -1.609   0.756   1.680
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -0.368   1.680  -0.148  -3.354  -0.149 -18.282   1.008  -5.166  -2.560
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7   0.276  -0.322   0.435  -0.184  -1.609   1.008 -10.546  -2.328  -3.354
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.182  -1.299  -0.058   3.181   0.756  -5.166  -2.328 -25.526  -3.707
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
    9  -0.148  -0.149  -0.368   1.008   1.680  -2.560  -3.354  -3.707 -18.283
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point   10 :     85.13  [%]
 
 
--------------------------------------------------------------------------------
  q-point number 11        q = ( 0.250000, 0.000000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.7, wall_time =     501.2
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 11, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -54.214 -15.942 -12.606  11.503   7.216  -7.191  -4.785   2.788   2.239
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2 -15.942 -69.503   7.658 -20.428  -3.775  15.580   2.355  -9.808  -0.619
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3 -12.606   7.658 -49.843  -4.610 -13.657   1.973  10.482   0.729  -6.549
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4  11.503 -20.428  -4.610 -88.585   2.225 -24.358  -1.122  18.647  -0.186
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000
 
    5   7.216  -3.775 -13.657   2.225 -65.961  -0.522 -20.425  -1.202  15.391
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -7.191  15.580   1.973 -24.358  -0.522-102.377  -0.241 -25.844  -0.071
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7  -4.785   2.355  10.482  -1.122 -20.425  -0.241 -87.908   0.401 -24.421
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   2.788  -9.808   0.729  18.647  -1.202 -25.844   0.401-108.681  -4.489
        0.000   0.000   0.000   0.001   0.000  -0.001   0.000   0.000   0.000
 
    9   2.239  -0.619  -6.549  -0.186  15.391  -0.071 -24.421  -4.489-101.633
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 11, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1  -6.405  -1.756  -1.353   1.533   0.914  -1.061  -0.492   0.452   0.157
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -1.756  -9.590   0.917  -2.847  -0.290   2.611  -0.004  -1.871   0.002
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    3  -1.353   0.917  -6.390  -0.495  -1.747   0.156   1.526   0.075  -1.060
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   1.533  -2.847  -0.495 -15.163  -0.004  -4.340  -0.023   3.894   0.403
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   0.914  -0.290  -1.747  -0.004  -9.555   0.005  -2.836   0.179   2.609
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -1.061   2.611   0.156  -4.340   0.005 -21.767   0.400  -5.856  -1.337
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7  -0.492  -0.004   1.526  -0.023  -2.836   0.400 -15.142  -1.125  -4.345
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.452  -1.871   0.075   3.894   0.179  -5.856  -1.125 -27.740  -2.003
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.000
 
    9   0.157   0.002  -1.060   0.403   2.609  -1.337  -4.345  -2.003 -21.781
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point   11 :     68.21  [%]
 
 
--------------------------------------------------------------------------------
  q-point number 12        q = ( 0.500000, 0.000000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.8, wall_time =     501.3
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 12, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -97.655 -26.316 -24.360  18.718  15.632 -11.476  -9.630   4.718   4.218
        0.000   0.000   0.000   0.000  -0.001  -0.001   0.000   0.000   0.000
 
    2 -26.316-102.611  17.526 -25.970  -9.190  19.442   3.825 -12.483   0.910
        0.000   0.000   0.000  -0.001   0.000   0.000   0.000  -0.001  -0.002
 
    3 -24.360  17.526 -89.156  -9.991 -21.070   3.717  15.649   1.868 -10.094
        0.000   0.000   0.000  -0.001   0.000   0.000  -0.001   0.000   0.000
 
    4  18.718 -25.970  -9.991-105.247   3.200 -26.169   1.135  20.316  -5.068
        0.000   0.001   0.001   0.000   0.000   0.000  -0.001   0.000  -0.002
 
    5  15.632  -9.190 -21.070   3.200 -87.977   1.645 -22.998  -6.065  17.800
        0.001   0.000   0.000   0.000   0.000   0.001  -0.001  -0.001   0.000
 
    6 -11.476  19.442   3.717 -26.169   1.645-109.980  -5.241 -27.217   9.493
        0.001   0.000   0.000   0.000  -0.001   0.000  -0.001   0.001  -0.003
 
    7  -9.630   3.825  15.649   1.135 -22.998  -5.241 -99.380   9.908 -26.487
        0.000   0.000   0.001   0.001   0.001   0.001   0.000   0.002   0.000
 
    8   4.718 -12.483   1.868  20.316  -6.065 -27.217   9.908-112.067  11.232
        0.000   0.001   0.000   0.000   0.001  -0.001  -0.002   0.000   0.000
 
    9   4.218   0.910 -10.094  -5.068  17.800   9.493 -26.487  11.232-107.893
        0.000   0.002   0.000   0.002   0.000   0.003   0.000   0.000   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 12, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1 -19.635  -4.864  -4.613   3.946   3.564  -2.590  -2.228   1.072   0.867
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -4.864 -21.615   3.571  -5.508  -2.104   4.579   0.759  -3.078   0.316
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001
 
    3  -4.613   3.571 -19.598  -2.236  -4.844   0.869   3.935   0.341  -2.579
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    4   3.946  -5.508  -2.236 -24.924   0.757  -6.327   0.310   5.290  -1.008
        0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000  -0.001
 
    5   3.564  -2.104  -4.844   0.757 -21.531   0.320  -5.489  -1.144   4.576
        0.000   0.000   0.000   0.000   0.000   0.001   0.000   0.000   0.000
 
    6  -2.590   4.579   0.869  -6.327   0.320 -28.617  -1.014  -7.102   1.618
        0.000   0.000   0.000   0.000  -0.001   0.000   0.000   0.001  -0.002
 
    7  -2.228   0.759   3.935   0.310  -5.489  -1.014 -24.879   1.734  -6.334
        0.000   0.000   0.000   0.001   0.000   0.000   0.000   0.001   0.000
 
    8   1.072  -3.078   0.341   5.290  -1.144  -7.102   1.734 -31.515   2.068
        0.000   0.000   0.000   0.000   0.000  -0.001  -0.001   0.000   0.000
 
    9   0.867   0.316  -2.579  -1.008   4.576   1.618  -6.334   2.068 -28.440
        0.000   0.001   0.000   0.001   0.000   0.002   0.000   0.000   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point   12 :     58.25  [%]
 
 
--------------------------------------------------------------------------------
  q-point number 13        q = ( 0.250000, 0.250000, 0.500000) [r.l.u.]
--------------------------------------------------------------------------------
 Using spectral method for the imaginary part =  0
 Using symmetries to sum only over the IBZ_q  =  0
Using faster algorithm based on time reversal symmetry.
 Will sum 12000 (b,b',k,s) states in chi0.
 Calculating chi0(q,omega,G,G")
 Calculation status :     64 to be completed
 ik =    1 /   64 spin =  1 done by processor   0
 ik =    2 /   64 spin =  1 done by processor   0
 ik =    3 /   64 spin =  1 done by processor   0
 ik =    4 /   64 spin =  1 done by processor   0
 ik =    5 /   64 spin =  1 done by processor   0
 ik =    6 /   64 spin =  1 done by processor   0
 ik =    7 /   64 spin =  1 done by processor   0
 ik =    8 /   64 spin =  1 done by processor   0
 ik =    9 /   64 spin =  1 done by processor   0
 ik =   10 /   64 spin =  1 done by processor   0
 ik =   11 /   64 spin =  1 done by processor   0
 ik =   12 /   64 spin =  1 done by processor   0
 ik =   13 /   64 spin =  1 done by processor   0
 ik =   14 /   64 spin =  1 done by processor   0
 ik =   15 /   64 spin =  1 done by processor   0
 ik =   16 /   64 spin =  1 done by processor   0
 ik =   17 /   64 spin =  1 done by processor   0
 ik =   18 /   64 spin =  1 done by processor   0
 ik =   19 /   64 spin =  1 done by processor   0
 ik =   20 /   64 spin =  1 done by processor   0
 ik =   21 /   64 spin =  1 done by processor   0
 ik =   22 /   64 spin =  1 done by processor   0
 ik =   23 /   64 spin =  1 done by processor   0
 ik =   24 /   64 spin =  1 done by processor   0
 ik =   25 /   64 spin =  1 done by processor   0
 ik =   26 /   64 spin =  1 done by processor   0
 ik =   27 /   64 spin =  1 done by processor   0
 ik =   28 /   64 spin =  1 done by processor   0
 ik =   29 /   64 spin =  1 done by processor   0
 ik =   30 /   64 spin =  1 done by processor   0
 ik =   31 /   64 spin =  1 done by processor   0
 ik =   32 /   64 spin =  1 done by processor   0
 ik =   33 /   64 spin =  1 done by processor   0
 ik =   34 /   64 spin =  1 done by processor   0
 ik =   35 /   64 spin =  1 done by processor   0
 ik =   36 /   64 spin =  1 done by processor   0
 ik =   37 /   64 spin =  1 done by processor   0
 ik =   38 /   64 spin =  1 done by processor   0
 ik =   39 /   64 spin =  1 done by processor   0
 ik =   40 /   64 spin =  1 done by processor   0
 ik =   41 /   64 spin =  1 done by processor   0
 ik =   42 /   64 spin =  1 done by processor   0
 ik =   43 /   64 spin =  1 done by processor   0
 ik =   44 /   64 spin =  1 done by processor   0
 ik =   45 /   64 spin =  1 done by processor   0
 ik =   46 /   64 spin =  1 done by processor   0
 ik =   47 /   64 spin =  1 done by processor   0
 ik =   48 /   64 spin =  1 done by processor   0
 ik =   49 /   64 spin =  1 done by processor   0
 ik =   50 /   64 spin =  1 done by processor   0
 ik =   51 /   64 spin =  1 done by processor   0
 ik =   52 /   64 spin =  1 done by processor   0
 ik =   53 /   64 spin =  1 done by processor   0
 ik =   54 /   64 spin =  1 done by processor   0
 ik =   55 /   64 spin =  1 done by processor   0
 ik =   56 /   64 spin =  1 done by processor   0
 ik =   57 /   64 spin =  1 done by processor   0
 ik =   58 /   64 spin =  1 done by processor   0
 ik =   59 /   64 spin =  1 done by processor   0
 ik =   60 /   64 spin =  1 done by processor   0
 ik =   61 /   64 spin =  1 done by processor   0
 ik =   62 /   64 spin =  1 done by processor   0
 ik =   63 /   64 spin =  1 done by processor   0
 ik =   64 /   64 spin =  1 done by processor   0
 cpu_time =     500.7, wall_time =     501.2
  chi0(G,G') at the    1 th omega   0.0000   0.0000 [eV]
  chi0(q = 13, omega =   1, G,G')
       1       2       3       4       5       6       7       8       9
    1 -89.567 -23.605 -22.741  17.067  15.821 -10.716  -9.381   4.163   3.747
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000
 
    2 -23.605 -95.053  15.821 -24.851  -8.903  19.112   3.445 -12.043   1.259
        0.000   0.000   0.000  -0.001   0.000   0.000   0.000   0.001   0.000
 
    3 -22.741  15.821 -89.567  -9.381 -23.605   3.747  17.067   1.619 -10.715
        0.000   0.000   0.000   0.000   0.000  -0.001   0.000  -0.001   0.000
 
    4  17.067 -24.851  -9.381-104.040   3.445 -27.208   1.083  20.869  -5.085
        0.000   0.001   0.000   0.000   0.001  -0.001   0.000   0.000   0.000
 
    5  15.821  -8.903 -23.605   3.445 -95.053   1.259 -24.850  -5.592  19.112
        0.000   0.000   0.000  -0.001   0.000  -0.001   0.000   0.000   0.000
 
    6 -10.716  19.112   3.747 -27.208   1.259-112.405  -5.085 -28.011   9.326
        0.000   0.000   0.001   0.001   0.001   0.000   0.000   0.001   0.000
 
    7  -9.381   3.445  17.067   1.083 -24.850  -5.085-104.040   9.568 -27.208
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   4.163 -12.043   1.619  20.869  -5.592 -28.011   9.568-114.164  10.713
        0.001  -0.001   0.001   0.000   0.000  -0.001   0.000   0.000  -0.001
 
    9   3.747   1.259 -10.715  -5.085  19.112   9.326 -27.208  10.713-112.407
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
  chi0(G,G') at the    2 th omega   0.0000  16.7000 [eV]
  chi0(q = 13, omega =   2, G,G')
       1       2       3       4       5       6       7       8       9
    1 -15.918  -3.993  -3.704   3.275   2.826  -2.167  -1.745   0.888   0.664
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    2  -3.993 -18.254   2.826  -4.774  -1.593   4.054   0.537  -2.744   0.238
        0.000   0.000   0.000  -0.001   0.000   0.000   0.000   0.000   0.000
 
    3  -3.704   2.826 -15.918  -1.745  -3.993   0.664   3.275   0.280  -2.166
        0.000   0.000   0.000   0.000   0.000   0.000   0.000  -0.001   0.000
 
    4   3.275  -4.774  -1.745 -22.290   0.537  -5.825   0.224   4.926  -0.613
        0.000   0.001   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    5   2.826  -1.593  -3.993   0.537 -18.253   0.238  -4.774  -0.771   4.055
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    6  -2.167   4.054   0.664  -5.825   0.238 -26.839  -0.613  -6.751   0.766
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
    7  -1.745   0.537   3.275   0.224  -4.774  -0.613 -22.290   0.932  -5.825
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.000
 
    8   0.888  -2.744   0.280   4.926  -0.771  -6.751   0.932 -30.423   0.916
        0.000   0.000   0.001   0.000   0.000  -0.001   0.000   0.000  -0.001
 
    9   0.664   0.238  -2.166  -0.613   4.055   0.766  -5.825   0.916 -26.840
        0.000   0.000   0.000   0.000   0.000   0.000   0.000   0.001   0.000
 
  Average fulfillment of the sum rule on Im[epsilon] for q-point   13 :     58.64  [%]
 
================================================================================
== DATASET  4 ==================================================================
-   nproc =   10   -> not optimal: autoparal keyword recommended in input file
 
 mkfilename : getscr/=0, take file _SCR from output of DATASET   3.
 
 mkfilename : getkss/=0, take file _KSS from output of DATASET   2.
 
 
 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 SIGMA: Calculation of the GW corrections 
 
 Based on a program developped by R.W. Godby, V. Olevano, G. Onida, and L. Reining.
 Incorporated in ABINIT by V. Olevano, G.-M. Rignanese, and M. Torrent.
.Using double precision arithmetic ; gwpc =  8
 
 Unit cell volume ucvol=  2.0972773E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  16  16  96
         ecut(hartree)=      4.956   => boxcut(ratio)=   2.08241
 
 ==== Dense FFT mesh used for densities and potentials ====
  FFT mesh divisions ........................    16   16   96
  Augmented FFT divisions ...................    17   17   96
  FFT algorithm .............................   112
  FFT cache size ............................    16
 
--- !WARNING
message: |
    Using WFK filerun1o_DS2_WFK
src_file: Subroutine Unknown
src_line: 0
...
 
 
 Sorting g-vecs for an output of states on an unique "big" PW basis.
 Since the number of g's to be written on file
 was 0 or too large, it has been set to the max. value.,
 computed from the union of the sets of G vectors for the different k-points.
 Number of G-vectors is:  1601
   1 14  1 14  1 14  1 14  1 14  1 14
   2 13  2 13  2 13  2 13  2 13  2 13
   3 12  3 12  3 12  3 12  3 12  3 12
   4 11  4 11  4 11  4 11  4 11  4 11
   5 10  5 10  5 10  5 10  5 10  5 10
   6  9  6  9  6  9  6  9  6  9  6  9
   7  8  7  8  7  8  7  8  7  8  7  8
   8  7  8  7  8  7  8  7  8  7  8  7
   9  6  9  6  9  6  9  6  9  6  9  6
  10  5 10  5 10  5 10  5 10  5 10  5
  11  4 11  4 11  4 11  4 11  4 11  4
  12  3 12  3 12  3 12  3 12  3 12  3
  13  2 13  2 13  2 13  2 13  2 13  2
  14  1 14  1 14  1 14  1 14  1 14  1
 ==== Info on the Cryst% object ====
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  6.2836839 -3.6278866  0.0000000  G(1)=  0.1591423  0.0000000  0.0000000
 R(2)=  0.0000000  7.2557732  0.0000000  G(2)=  0.0795712  0.1378213  0.0000000
 R(3)=  0.0000000  0.0000000 46.0000000  G(3)=  0.0000000  0.0000000  0.0217391
 Unit cell volume ucvol=  2.0972773E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees
 Time-reversal symmetry is present
 
 Symmetry operations in real space (Rotation tnons AFM)
  1  0  0   0.000  1    -1  0  0   0.000  1    -1  1  0   0.000  1     1 -1  0   0.000  1
  0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1     0  0 -1   0.000  1
 
 
  0 -1  0   0.000  1     0  1  0   0.000  1     0 -1  0   0.000  1     0  1  0   0.000  1
  1 -1  0   0.000  1    -1  1  0   0.000  1    -1  0  0   0.000  1     1  0  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1     0  0 -1   0.000  1
 
 
 -1  1  0   0.000  1     1 -1  0   0.000  1     1  0  0   0.000  1    -1  0  0   0.000  1
 -1  0  0   0.000  1     1  0  0   0.000  1     1 -1  0   0.000  1    -1  1  0   0.000  1
  0  0  1   0.000  1     0  0 -1   0.000  1     0  0  1   0.000  1     0  0 -1   0.000  1
 
 
Reduced atomic positions [iatom, xred, symbol]:
    1)    0.0000000  0.0000000  0.3989703   H
    2)    0.0000000  0.0000000  0.3380723  Si
    3)    0.6666667  0.3333333  0.3058749  Si
    4)    0.6666667  0.3333333  0.2092828  Si
    5)    0.3333333 -0.3333333  0.1770855  Si
    6)    0.3333333 -0.3333333  0.0804934  Si
    7)    0.0000000  0.0000000  0.0482960  Si
    8)    0.0000000  0.0000000 -0.0482960  Si
    9)   -0.3333333  0.3333333 -0.0804934  Si
   10)   -0.3333333  0.3333333 -0.1770855  Si
   11)   -0.6666667 -0.3333333 -0.2092828  Si
   12)   -0.6666667 -0.3333333 -0.3058749  Si
   13)    0.0000000  0.0000000 -0.3380723  Si
   14)    0.0000000  0.0000000 -0.3989703   H
 
--- !WARNING
message: |
    Number of G-vectors for Sigma_x found in the KSS file is less than required
    calculation will proceed with npwsigx =     3161
 
src_file: Subroutine Unknown
src_line: 0
...
 
 ==== K-mesh for the wavefunctions ====
 Number of points in the irreducible wedge :    13
 Reduced coordinates and weights : 
 
     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.09375
     5)     0.00000000E+00  0.00000000E+00  2.50000000E-01       0.03125
     6)     2.50000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     7)     5.00000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     8)    -2.50000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     9)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.18750
    10)     0.00000000E+00  0.00000000E+00  5.00000000E-01       0.01563
    11)     2.50000000E-01  0.00000000E+00  5.00000000E-01       0.09375
    12)     5.00000000E-01  0.00000000E+00  5.00000000E-01       0.04688
    13)     2.50000000E-01  2.50000000E-01  5.00000000E-01       0.09375
 
 Together with 12 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.
 
 
 top of valence       [eV]   3.51
 bottom of conduction [eV]   4.31
 Fermi energy         [eV]   3.91
 
 
 
  >>>> For spin  1
   Minimum optical gap =   1.6224 [eV], located at k-point      :   0.0000  0.0000  0.2500
   Fundamental gap     =   0.8029 [eV], Top of valence bands at :   0.0000  0.0000  0.5000
                                        Bottom of conduction at :   0.5000  0.0000  0.0000
 
 
  >>>> For spin  1
   Minimum optical gap =   1.6224 [eV], located at k-point      :   0.0000  0.0000  0.2500
   Fundamental gap     =   0.8029 [eV], Top of valence bands at :   0.0000  0.0000  0.5000
                                        Bottom of conduction at :   0.5000  0.0000  0.0000
 init_Er_from_file : testing file run1o_DS3_SCR
 
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
 Number of q-points              13
 Number of q-directions           0
 Number of frequencies            2
 Number of bands used           100
 Dimension of matrix           1601
 Number of planewaves used     1139
 Spectral method                  0
 Test_type                        0
 Time-ordering                    1
 Scissor Energy                 0.000000E+00
 Spectral smearing              0.000000E+00
 Complex Imaginary Shift        3.674933E-03
 
 q-points [r.l.u.]:
    1    0.000000    0.000000    0.000000
    2    0.250000    0.000000    0.000000
    3    0.500000    0.000000    0.000000
    4    0.250000    0.250000    0.000000
    5    0.000000    0.000000    0.250000
    6    0.250000    0.000000    0.250000
    7    0.500000    0.000000    0.250000
    8   -0.250000    0.000000    0.250000
    9    0.250000    0.250000    0.250000
   10    0.000000    0.000000    0.500000
   11    0.250000    0.000000    0.500000
   12    0.500000    0.000000    0.500000
   13    0.250000    0.250000    0.500000
 
 Frequencies used [eV]:
  1   0.00   0.00
  2   0.00  16.70
 End the ECHO of the ABINIT-SCR file header 
 ===============================================================================
 ===============================================================================
 ECHO of the ABINIT file header 
 
 First record :
.codvsn,headform,fform = 7.10.2   57 1002
 
 Second record :
 bantot,intxc,ixc,natom  =  1300     0     1    14
 ngfft(1:3),nkpt         =    16    16    96    13
 nspden,nspinor          =     1     1
 nsppol,nsym,npsp,ntypat =     1    12     2     2
 occopt,pertcase,usepaw  =     1     0     0
 ecut,ecutdg,ecutsm      =  4.9563847645E+00  4.9563847645E+00  0.0000000000E+00
 ecut_eff                =  4.9563847645E+00
 qptn(1:3)               =  0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
 rprimd(1:3,1)           =  6.2836839136E+00 -3.6278865990E+00  0.0000000000E+00
 rprimd(1:3,2)           =  0.0000000000E+00  7.2557731980E+00  0.0000000000E+00
 rprimd(1:3,3)           =  0.0000000000E+00  0.0000000000E+00  4.6000000000E+01
 stmbias,tphysel,tsmear  =  0.0000000000E+00  0.0000000000E+00  4.0000000000E-02

 Third record :
 istwfk=   1   1   1   1   1   1   1   1   1   1   1   1
   1
 nband = 100 100 100 100 100 100 100 100 100 100 100 100
 100
 npwarr= 1139 1139 1139 1139 1139 1139 1139 1139 1139 1139
 1139 1139 1139
 so_psp=   1   1
 symafm=
          1  1  1  1  1  1  1  1  1  1  1  1
 symrel=
           1   0   0   0   1   0   0   0   1    -1   0   0   0  -1   0   0   0  -1
          -1   0   0   1   1   0   0   0   1     1   0   0  -1  -1   0   0   0  -1
           0   1   0  -1  -1   0   0   0   1     0  -1   0   1   1   0   0   0  -1
           0  -1   0  -1   0   0   0   0   1     0   1   0   1   0   0   0   0  -1
          -1  -1   0   1   0   0   0   0   1     1   1   0  -1   0   0   0   0  -1
           1   1   0   0  -1   0   0   0   1    -1  -1   0   0   1   0   0   0  -1
 type  =   1   2   2   2   2   2   2   2   2   2   2   2
   2   1
 kptns =                 (max 50 k-points will be written)
            0.000000E+00    0.000000E+00    0.000000E+00
            2.500000E-01    0.000000E+00    0.000000E+00
            5.000000E-01    0.000000E+00    0.000000E+00
            2.500000E-01    2.500000E-01    0.000000E+00
            0.000000E+00    0.000000E+00    2.500000E-01
            2.500000E-01    0.000000E+00    2.500000E-01
            5.000000E-01    0.000000E+00    2.500000E-01
           -2.500000E-01    0.000000E+00    2.500000E-01
            2.500000E-01    2.500000E-01    2.500000E-01
            0.000000E+00    0.000000E+00    5.000000E-01
            2.500000E-01    0.000000E+00    5.000000E-01
            5.000000E-01    0.000000E+00    5.000000E-01
            2.500000E-01    2.500000E-01    5.000000E-01
 wtk =
          0.02  0.09  0.05  0.09  0.03  0.09  0.09  0.09  0.19  0.02
          0.09  0.05  0.09
   occ =
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
          2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00
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
  znucl=  1.00 14.00

 Pseudopotential info :
 title= Troullier-Martins psp for element  H         Thu Oct 27 17:28:54 EDT 1994
  znuclpsp=  1.00, zionpsp=  1.00, pspso=  0, pspdat=940714, pspcod=  1, pspxc=  1
  lmnmax  =  2
 title= Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
  znuclpsp= 14.00, zionpsp=  4.00, pspso=  0, pspdat=940714, pspcod=  1, pspxc=  1
  lmnmax  =  2
 
 Last record :
 residm,etot,fermie=    1.000000E+20    1.000000000000E+20    1.000000E+20
 xred =
            0.000000E+00    0.000000E+00    3.989703E-01
            0.000000E+00    0.000000E+00    3.380723E-01
            6.666667E-01    3.333333E-01    3.058749E-01
            6.666667E-01    3.333333E-01    2.092828E-01
            3.333333E-01   -3.333333E-01    1.770855E-01
            3.333333E-01   -3.333333E-01    8.049340E-02
            0.000000E+00    0.000000E+00    4.829604E-02
            0.000000E+00    0.000000E+00   -4.829604E-02
           -3.333333E-01    3.333333E-01   -8.049340E-02
           -3.333333E-01    3.333333E-01   -1.770855E-01
           -6.666667E-01   -3.333333E-01   -2.092828E-01
           -6.666667E-01   -3.333333E-01   -3.058749E-01
            0.000000E+00    0.000000E+00   -3.380723E-01
            0.000000E+00    0.000000E+00   -3.989703E-01
 End the ECHO of the ABINIT file header 
 ===============================================================================
 ==== Q-mesh for screening function ====
 Number of points in the irreducible wedge :    13
 Reduced coordinates and weights : 
 
     1)     0.00000000E+00  0.00000000E+00  0.00000000E+00       0.01563
     2)     2.50000000E-01  0.00000000E+00  0.00000000E+00       0.09375
     3)     5.00000000E-01  0.00000000E+00  0.00000000E+00       0.04688
     4)     2.50000000E-01  2.50000000E-01  0.00000000E+00       0.09375
     5)     0.00000000E+00  0.00000000E+00  2.50000000E-01       0.03125
     6)     2.50000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     7)     5.00000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     8)    -2.50000000E-01  0.00000000E+00  2.50000000E-01       0.09375
     9)     2.50000000E-01  2.50000000E-01  2.50000000E-01       0.18750
    10)     0.00000000E+00  0.00000000E+00  5.00000000E-01       0.01563
    11)     2.50000000E-01  0.00000000E+00  5.00000000E-01       0.09375
    12)     5.00000000E-01  0.00000000E+00  5.00000000E-01       0.04688
    13)     2.50000000E-01  2.50000000E-01  5.00000000E-01       0.09375
 
 Together with 12 symmetry operations and time-reversal symmetry 
 yields    64 points in the full Brillouin Zone.
 
 
 optimal value for ng0sh =  1 1 1
  Gsph_c, gvec_kss         1140 /        1601          -1           0
          22           1           0          22
  Gsph_c, gvec_kss         1141 /        1601           1           0
         -22          -1           0         -22
  Gsph_c, gvec_kss         1142 /        1601           1          -1
          22          -1           1          22
  Gsph_c, gvec_kss         1143 /        1601          -1           1
         -22           1          -1         -22
  Gsph_c, gvec_kss         1144 /        1601           0           1
          22           0          -1          22
  Gsph_c, gvec_kss         1145 /        1601           0          -1
         -22           0           1         -22
  Gsph_c, gvec_kss         1146 /        1601          -1           1
          22          -1           0          22
  Gsph_c, gvec_kss         1147 /        1601           1          -1
         -22           1           0         -22
  Gsph_c, gvec_kss         1148 /        1601           1           0
          22           1          -1          22
  Gsph_c, gvec_kss         1149 /        1601          -1           0
         -22          -1           1         -22
  Gsph_c, gvec_kss         1150 /        1601           0          -1
          22           0           1          22
  Gsph_c, gvec_kss         1151 /        1601           0           1
         -22           0          -1         -22
  Gsph_c, gvec_kss         1152 /        1601          -2           0
          18           2           0          18
  Gsph_c, gvec_kss         1153 /        1601           2           0
         -18          -2           0         -18
  Gsph_c, gvec_kss         1154 /        1601           2          -2
          18          -2           2          18
  Gsph_c, gvec_kss         1155 /        1601          -2           2
         -18           2          -2         -18
  Gsph_c, gvec_kss         1156 /        1601           0           2
          18           0          -2          18
  Gsph_c, gvec_kss         1157 /        1601           0          -2
         -18           0           2         -18
  Gsph_c, gvec_kss         1158 /        1601          -2           2
          18          -2           0          18
  Gsph_c, gvec_kss         1159 /        1601           2          -2
         -18           2           0         -18
  Gsph_c, gvec_kss         1160 /        1601           2           0
          18           2          -2          18
  Gsph_c, gvec_kss         1161 /        1601          -2           0
         -18          -2           2         -18
  Gsph_c, gvec_kss         1162 /        1601           0          -2
          18           0           2          18
  Gsph_c, gvec_kss         1163 /        1601           0           2
         -18           0          -2         -18
  Gsph_c, gvec_kss         1164 /        1601          -3           1
          13           2           1          13
  Gsph_c, gvec_kss         1165 /        1601           3          -1
         -13          -2          -1         -13
  Gsph_c, gvec_kss         1166 /        1601           3          -2
          13          -2           3          13
  Gsph_c, gvec_kss         1167 /        1601          -3           2
         -13           2          -3         -13
  Gsph_c, gvec_kss         1168 /        1601           1           2
          13           1          -3          13
  Gsph_c, gvec_kss         1169 /        1601          -1          -2
         -13          -1           3         -13
  Gsph_c, gvec_kss         1170 /        1601          -1           3
          13          -1          -2          13
  Gsph_c, gvec_kss         1171 /        1601           1          -3
         -13           1           2         -13
  Gsph_c, gvec_kss         1172 /        1601           2          -3
          13          -3           2          13
  Gsph_c, gvec_kss         1173 /        1601          -2           3
         -13           3          -2         -13
  Gsph_c, gvec_kss         1174 /        1601          -2          -1
          13           3          -1          13
  Gsph_c, gvec_kss         1175 /        1601           2           1
         -13          -3           1         -13
  Gsph_c, gvec_kss         1176 /        1601          -3           2
          13          -3           1          13
  Gsph_c, gvec_kss         1177 /        1601           3          -2
         -13           3          -1         -13
  Gsph_c, gvec_kss         1178 /        1601           3          -1
          13           3          -2          13
  Gsph_c, gvec_kss         1179 /        1601          -3           1
         -13          -3           2         -13
  Gsph_c, gvec_kss         1180 /        1601           2           1
          13           1           2          13
  Gsph_c, gvec_kss         1181 /        1601          -2          -1
         -13          -1          -2         -13
  Gsph_c, gvec_kss         1182 /        1601          -2           3
          13          -1           3          13
  Gsph_c, gvec_kss         1183 /        1601           2          -3
         -13           1          -3         -13
  Gsph_c, gvec_kss         1184 /        1601           1          -3
          13           2          -3          13
  Gsph_c, gvec_kss         1185 /        1601          -1           3
         -13          -2           3         -13
  Gsph_c, gvec_kss         1186 /        1601          -1          -2
          13          -2          -1          13
  Gsph_c, gvec_kss         1187 /        1601           1           2
         -13           2           1         -13
  Gsph_c, gvec_kss         1188 /        1601          -3           0
           8           3           0           8
  Gsph_c, gvec_kss         1189 /        1601           3           0
          -8          -3           0          -8
  Gsph_c, gvec_kss         1190 /        1601           3          -3
           8          -3           3           8
  Gsph_c, gvec_kss         1191 /        1601          -3           3
          -8           3          -3          -8
  Gsph_c, gvec_kss         1192 /        1601           0           3
           8           0          -3           8
  Gsph_c, gvec_kss         1193 /        1601           0          -3
          -8           0           3          -8
  Gsph_c, gvec_kss         1194 /        1601          -3           3
           8          -3           0           8
  Gsph_c, gvec_kss         1195 /        1601           3          -3
          -8           3           0          -8
  Gsph_c, gvec_kss         1196 /        1601           3           0
           8           3          -3           8
  Gsph_c, gvec_kss         1197 /        1601          -3           0
          -8          -3           3          -8
  Gsph_c, gvec_kss         1198 /        1601           0          -3
           8           0           3           8
  Gsph_c, gvec_kss         1199 /        1601           0           3
          -8           0          -3          -8
  Gsph_c, gvec_kss         1200 /        1601          -2           1
          20           1           1          20
  Gsph_c, gvec_kss         1201 /        1601           2          -1
         -20          -1          -1         -20
  Gsph_c, gvec_kss         1202 /        1601           2          -1
          20          -1           2          20
  Gsph_c, gvec_kss         1203 /        1601          -2           1
         -20           1          -2         -20
  Gsph_c, gvec_kss         1204 /        1601           1           1
          20           1          -2          20
  Gsph_c, gvec_kss         1205 /        1601          -1          -1
         -20          -1           2         -20
  Gsph_c, gvec_kss         1206 /        1601          -1           2
          20          -1          -1          20
  Gsph_c, gvec_kss         1207 /        1601           1          -2
         -20           1           1         -20
  Gsph_c, gvec_kss         1208 /        1601           1          -2
          20          -2           1          20
  Gsph_c, gvec_kss         1209 /        1601          -1           2
         -20           2          -1         -20
  Gsph_c, gvec_kss         1210 /        1601          -1          -1
          20           2          -1          20
  Gsph_c, gvec_kss         1211 /        1601           1           1
         -20          -2           1         -20
  Gsph_c, gvec_kss         1212 /        1601          -3           0
           9           3           0           9
  Gsph_c, gvec_kss         1213 /        1601           3           0
          -9          -3           0          -9
  Gsph_c, gvec_kss         1214 /        1601           3          -3
           9          -3           3           9
  Gsph_c, gvec_kss         1215 /        1601          -3           3
          -9           3          -3          -9
  Gsph_c, gvec_kss         1216 /        1601           0           3
           9           0          -3           9
  Gsph_c, gvec_kss         1217 /        1601           0          -3
          -9           0           3          -9
  Gsph_c, gvec_kss         1218 /        1601          -3           3
           9          -3           0           9
  Gsph_c, gvec_kss         1219 /        1601           3          -3
          -9           3           0          -9
  Gsph_c, gvec_kss         1220 /        1601           3           0
           9           3          -3           9
  Gsph_c, gvec_kss         1221 /        1601          -3           0
          -9          -3           3          -9
  Gsph_c, gvec_kss         1222 /        1601           0          -3
           9           0           3           9
  Gsph_c, gvec_kss         1223 /        1601           0           3
          -9           0          -3          -9
  Gsph_c, gvec_kss         1224 /        1601          -3           1
          14           2           1          14
  Gsph_c, gvec_kss         1225 /        1601           3          -1
         -14          -2          -1         -14
  Gsph_c, gvec_kss         1226 /        1601           3          -2
          14          -2           3          14
  Gsph_c, gvec_kss         1227 /        1601          -3           2
         -14           2          -3         -14
  Gsph_c, gvec_kss         1228 /        1601           1           2
          14           1          -3          14
  Gsph_c, gvec_kss         1229 /        1601          -1          -2
         -14          -1           3         -14
  Gsph_c, gvec_kss         1230 /        1601          -1           3
          14          -1          -2          14
  Gsph_c, gvec_kss         1231 /        1601           1          -3
         -14           1           2         -14
  Gsph_c, gvec_kss         1232 /        1601           2          -3
          14          -3           2          14
  Gsph_c, gvec_kss         1233 /        1601          -2           3
         -14           3          -2         -14
  Gsph_c, gvec_kss         1234 /        1601          -2          -1
          14           3          -1          14
  Gsph_c, gvec_kss         1235 /        1601           2           1
         -14          -3           1         -14
  Gsph_c, gvec_kss         1236 /        1601          -3           2
          14          -3           1          14
  Gsph_c, gvec_kss         1237 /        1601           3          -2
         -14           3          -1         -14
  Gsph_c, gvec_kss         1238 /        1601           3          -1
          14           3          -2          14
  Gsph_c, gvec_kss         1239 /        1601          -3           1
         -14          -3           2         -14
  Gsph_c, gvec_kss         1240 /        1601           2           1
          14           1           2          14
  Gsph_c, gvec_kss         1241 /        1601          -2          -1
         -14          -1          -2         -14
  Gsph_c, gvec_kss         1242 /        1601          -2           3
          14          -1           3          14
  Gsph_c, gvec_kss         1243 /        1601           2          -3
         -14           1          -3         -14
  Gsph_c, gvec_kss         1244 /        1601           1          -3
          14           2          -3          14
  Gsph_c, gvec_kss         1245 /        1601          -1           3
         -14          -2           3         -14
  Gsph_c, gvec_kss         1246 /        1601          -1          -2
          14          -2          -1          14
  Gsph_c, gvec_kss         1247 /        1601           1           2
         -14           2           1         -14
  Gsph_c, gvec_kss         1248 /        1601          -2           0
          19           2           0          19
  Gsph_c, gvec_kss         1249 /        1601           2           0
         -19          -2           0         -19
  Gsph_c, gvec_kss         1250 /        1601           2          -2
          19          -2           2          19
  Gsph_c, gvec_kss         1251 /        1601          -2           2
         -19           2          -2         -19
  Gsph_c, gvec_kss         1252 /        1601           0           2
          19           0          -2          19
  Gsph_c, gvec_kss         1253 /        1601           0          -2
         -19           0           2         -19
  Gsph_c, gvec_kss         1254 /        1601          -2           0
         -19          -2           0          19
  Gsph_c, gvec_kss         1255 /        1601           2           0
          19           2           0         -19
  Gsph_c, gvec_kss         1256 /        1601           2          -2
         -19           2          -2          19
  Gsph_c, gvec_kss         1257 /        1601          -2           2
          19          -2           2         -19
  Gsph_c, gvec_kss         1258 /        1601           0           2
         -19           0           2          19
  Gsph_c, gvec_kss         1259 /        1601           0          -2
          19           0          -2         -19
  Gsph_c, gvec_kss         1260 /        1601          -3           0
          10           0           0          24
  Gsph_c, gvec_kss         1261 /        1601           3           0
         -10           0           0         -24
  Gsph_c, gvec_kss         1262 /        1601           3          -3
          10           3           0          10
  Gsph_c, gvec_kss         1263 /        1601          -3           3
         -10          -3           0         -10
  Gsph_c, gvec_kss         1264 /        1601           0           3
          10          -3           3          10
  Gsph_c, gvec_kss         1265 /        1601           0          -3
         -10           3          -3         -10
  Gsph_c, gvec_kss         1266 /        1601          -3           0
         -10           0          -3          10
  Gsph_c, gvec_kss         1267 /        1601           3           0
          10           0           3         -10
  Gsph_c, gvec_kss         1268 /        1601           3          -3
         -10          -3           0          10
  Gsph_c, gvec_kss         1269 /        1601          -3           3
          10           3           0         -10
  Gsph_c, gvec_kss         1270 /        1601           0           3
         -10           3          -3          10
  Gsph_c, gvec_kss         1271 /        1601           0          -3
          10          -3           3         -10
  Gsph_c, gvec_kss         1272 /        1601          -1           0
         -23           0           3          10
  Gsph_c, gvec_kss         1273 /        1601           1           0
          23           0          -3         -10
  Gsph_c, gvec_kss         1274 /        1601           1          -1
         -23           1           0          23
  Gsph_c, gvec_kss         1275 /        1601          -1           1
          23          -1           0         -23
  Gsph_c, gvec_kss         1276 /        1601           0           1
         -23          -1           1          23
  Gsph_c, gvec_kss         1277 /        1601           0          -1
          23           1          -1         -23
  Gsph_c, gvec_kss         1278 /        1601           0          -1
         -23           0          -1          23
  Gsph_c, gvec_kss         1279 /        1601           0           1
          23           0           1         -23
  Gsph_c, gvec_kss         1280 /        1601          -1           1
         -23          -1           0          23
  Gsph_c, gvec_kss         1281 /        1601           1          -1
          23           1           0         -23
  Gsph_c, gvec_kss         1282 /        1601           1           0
         -23           1          -1          23
  Gsph_c, gvec_kss         1283 /        1601          -1           0
          23          -1           1         -23
  Gsph_c, gvec_kss         1284 /        1601          -3           1
          15           0           1          23
  Gsph_c, gvec_kss         1285 /        1601           3          -1
         -15           0          -1         -23
  Gsph_c, gvec_kss         1286 /        1601           3          -2
          15           2           1          15
  Gsph_c, gvec_kss         1287 /        1601          -3           2
         -15          -2          -1         -15
  Gsph_c, gvec_kss         1288 /        1601           1           2
          15          -2           3          15
  Gsph_c, gvec_kss         1289 /        1601          -1          -2
         -15           2          -3         -15
  Gsph_c, gvec_kss         1290 /        1601          -1           3
          15           1          -3          15
  Gsph_c, gvec_kss         1291 /        1601           1          -3
         -15          -1           3         -15
  Gsph_c, gvec_kss         1292 /        1601           2          -3
          15          -1          -2          15
  Gsph_c, gvec_kss         1293 /        1601          -2           3
         -15           1           2         -15
  Gsph_c, gvec_kss         1294 /        1601          -2          -1
          15          -3           2          15
  Gsph_c, gvec_kss         1295 /        1601           2           1
         -15           3          -2         -15
  Gsph_c, gvec_kss         1296 /        1601          -3           2
          15           3          -1          15
  Gsph_c, gvec_kss         1297 /        1601           3          -2
         -15          -3           1         -15
  Gsph_c, gvec_kss         1298 /        1601           3          -1
          15          -3           1          15
  Gsph_c, gvec_kss         1299 /        1601          -3           1
         -15           3          -1         -15
  Gsph_c, gvec_kss         1300 /        1601           2           1
          15           3          -2          15
  Gsph_c, gvec_kss         1301 /        1601          -2          -1
         -15          -3           2         -15
  Gsph_c, gvec_kss         1302 /        1601          -2           3
          15           1           2          15
  Gsph_c, gvec_kss         1303 /        1601           2          -3
         -15          -1          -2         -15
  Gsph_c, gvec_kss         1304 /        1601           1          -3
          15          -1           3          15
  Gsph_c, gvec_kss         1305 /        1601          -1           3
         -15           1          -3         -15
  Gsph_c, gvec_kss         1306 /        1601          -1          -2
          15           2          -3          15
  Gsph_c, gvec_kss         1307 /        1601           1           2
         -15          -2           3         -15
  Gsph_c, gvec_kss         1308 /        1601          -2           1
          21          -2          -1          15
  Gsph_c, gvec_kss         1309 /        1601           2          -1
         -21           2           1         -15
  Gsph_c, gvec_kss         1310 /        1601           2          -1
          21           1           1          21
  Gsph_c, gvec_kss         1311 /        1601          -2           1
         -21          -1          -1         -21
  Gsph_c, gvec_kss         1312 /        1601           1           1
          21          -1           2          21
  Gsph_c, gvec_kss         1313 /        1601          -1          -1
         -21           1          -2         -21
  Gsph_c, gvec_kss         1314 /        1601          -1           2
          21           1          -2          21
  Gsph_c, gvec_kss         1315 /        1601           1          -2
         -21          -1           2         -21
  Gsph_c, gvec_kss         1316 /        1601           1          -2
          21          -1          -1          21
  Gsph_c, gvec_kss         1317 /        1601          -1           2
         -21           1           1         -21
  Gsph_c, gvec_kss         1318 /        1601          -1          -1
          21          -2           1          21
  Gsph_c, gvec_kss         1319 /        1601           1           1
         -21           2          -1         -21
  Gsph_c, gvec_kss         1320 /        1601          -3           0
          11           2          -1          21
  Gsph_c, gvec_kss         1321 /        1601           3           0
         -11          -2           1         -21
  Gsph_c, gvec_kss         1322 /        1601           3          -3
          11           3           0          11
  Gsph_c, gvec_kss         1323 /        1601          -3           3
         -11          -3           0         -11
  Gsph_c, gvec_kss         1324 /        1601           0           3
          11          -3           3          11
  Gsph_c, gvec_kss         1325 /        1601           0          -3
         -11           3          -3         -11
  Gsph_c, gvec_kss         1326 /        1601          -3           0
         -11           0          -3          11
  Gsph_c, gvec_kss         1327 /        1601           3           0
          11           0           3         -11
  Gsph_c, gvec_kss         1328 /        1601           3          -3
         -11          -3           0          11
  Gsph_c, gvec_kss         1329 /        1601          -3           3
          11           3           0         -11
  Gsph_c, gvec_kss         1330 /        1601           0           3
         -11           3          -3          11
  Gsph_c, gvec_kss         1331 /        1601           0          -3
          11          -3           3         -11
  Gsph_c, gvec_kss         1332 /        1601          -2           0
          20           0           3          11
  Gsph_c, gvec_kss         1333 /        1601           2           0
         -20           0          -3         -11
  Gsph_c, gvec_kss         1334 /        1601           2          -2
          20           2           0          20
  Gsph_c, gvec_kss         1335 /        1601          -2           2
         -20          -2           0         -20
  Gsph_c, gvec_kss         1336 /        1601           0           2
          20          -2           2          20
  Gsph_c, gvec_kss         1337 /        1601           0          -2
         -20           2          -2         -20
  Gsph_c, gvec_kss         1338 /        1601          -2           0
         -20           0          -2          20
  Gsph_c, gvec_kss         1339 /        1601           2           0
          20           0           2         -20
  Gsph_c, gvec_kss         1340 /        1601           2          -2
         -20          -2           0          20
  Gsph_c, gvec_kss         1341 /        1601          -2           2
          20           2           0         -20
  Gsph_c, gvec_kss         1342 /        1601           0           2
         -20           2          -2          20
  Gsph_c, gvec_kss         1343 /        1601           0          -2
          20          -2           2         -20
  Gsph_c, gvec_kss         1344 /        1601          -3           0
          12           0           2          20
  Gsph_c, gvec_kss         1345 /        1601           3           0
         -12           0          -2         -20
  Gsph_c, gvec_kss         1346 /        1601           3          -3
          12           0           0          25
  Gsph_c, gvec_kss         1347 /        1601          -3           3
         -12           0           0         -25
  Gsph_c, gvec_kss         1348 /        1601           0           3
          12           3           0          12
  Gsph_c, gvec_kss         1349 /        1601           0          -3
         -12          -3           0         -12
  Gsph_c, gvec_kss         1350 /        1601          -3           0
         -12          -3           3          12
  Gsph_c, gvec_kss         1351 /        1601           3           0
          12           3          -3         -12
  Gsph_c, gvec_kss         1352 /        1601           3          -3
         -12           0          -3          12
  Gsph_c, gvec_kss         1353 /        1601          -3           3
          12           0           3         -12
  Gsph_c, gvec_kss         1354 /        1601           0           3
         -12          -3           0          12
  Gsph_c, gvec_kss         1355 /        1601           0          -3
          12           3           0         -12
  Gsph_c, gvec_kss         1356 /        1601          -3           1
          16           3          -3          12
  Gsph_c, gvec_kss         1357 /        1601           3          -1
         -16          -3           3         -12
  Gsph_c, gvec_kss         1358 /        1601           3          -2
          16           0           3          12
  Gsph_c, gvec_kss         1359 /        1601          -3           2
         -16           0          -3         -12
  Gsph_c, gvec_kss         1360 /        1601           1           2
          16           1           0          24
  Gsph_c, gvec_kss         1361 /        1601          -1          -2
         -16          -1           0         -24
  Gsph_c, gvec_kss         1362 /        1601          -1           3
          16          -1           1          24
  Gsph_c, gvec_kss         1363 /        1601           1          -3
         -16           1          -1         -24
  Gsph_c, gvec_kss         1364 /        1601           2          -3
          16           0          -1          24
  Gsph_c, gvec_kss         1365 /        1601          -2           3
         -16           0           1         -24
  Gsph_c, gvec_kss         1366 /        1601          -2          -1
          16          -1           0          24
  Gsph_c, gvec_kss         1367 /        1601           2           1
         -16           1           0         -24
  Gsph_c, gvec_kss         1368 /        1601          -3           1
         -16           1          -1          24
  Gsph_c, gvec_kss         1369 /        1601           3          -1
          16          -1           1         -24
  Gsph_c, gvec_kss         1370 /        1601           3          -2
         -16           0           1          24
  Gsph_c, gvec_kss         1371 /        1601          -3           2
          16           0          -1         -24
  Gsph_c, gvec_kss         1372 /        1601           1           2
         -16           2           1          16
  Gsph_c, gvec_kss         1373 /        1601          -1          -2
          16          -2          -1         -16
  Gsph_c, gvec_kss         1374 /        1601          -1           3
         -16          -2           3          16
  Gsph_c, gvec_kss         1375 /        1601           1          -3
          16           2          -3         -16
  Gsph_c, gvec_kss         1376 /        1601           2          -3
         -16           1          -3          16
  Gsph_c, gvec_kss         1377 /        1601          -2           3
          16          -1           3         -16
  Gsph_c, gvec_kss         1378 /        1601          -2          -1
         -16          -1          -2          16
  Gsph_c, gvec_kss         1379 /        1601           2           1
          16           1           2         -16
  Gsph_c, gvec_kss         1380 /        1601          -4           2
           0          -3           2          16
  Gsph_c, gvec_kss         1381 /        1601           4          -2
           0           3          -2         -16
  Gsph_c, gvec_kss         1382 /        1601           2           2
           0           3          -1          16
  Gsph_c, gvec_kss         1383 /        1601          -2          -2
           0          -3           1         -16
  Gsph_c, gvec_kss         1384 /        1601          -2           4
           0          -3           1          16
  Gsph_c, gvec_kss         1385 /        1601           2          -4
           0           3          -1         -16
  Gsph_c, gvec_kss         1386 /        1601          -4           2
           1           3          -2          16
  Gsph_c, gvec_kss         1387 /        1601           4          -2
          -1          -3           2         -16
  Gsph_c, gvec_kss         1388 /        1601           4          -2
           1           1           2          16
  Gsph_c, gvec_kss         1389 /        1601          -4           2
          -1          -1          -2         -16
  Gsph_c, gvec_kss         1390 /        1601           2           2
           1          -1           3          16
  Gsph_c, gvec_kss         1391 /        1601          -2          -2
          -1           1          -3         -16
  Gsph_c, gvec_kss         1392 /        1601          -2           4
           1           2          -3          16
  Gsph_c, gvec_kss         1393 /        1601           2          -4
          -1          -2           3         -16
  Gsph_c, gvec_kss         1394 /        1601           2          -4
           1          -2          -1          16
  Gsph_c, gvec_kss         1395 /        1601          -2           4
          -1           2           1         -16
  Gsph_c, gvec_kss         1396 /        1601          -2          -2
           1           2           2           0
  Gsph_c, gvec_kss         1397 /        1601           2           2
          -1          -2          -2           0
  Gsph_c, gvec_kss         1398 /        1601          -4           2
           2          -2           4           0
  Gsph_c, gvec_kss         1399 /        1601           4          -2
          -2           2          -4           0
  Gsph_c, gvec_kss         1400 /        1601           4          -2
           2          -4           2           0
  Gsph_c, gvec_kss         1401 /        1601          -4           2
          -2           4          -2           0
  Gsph_c, gvec_kss         1402 /        1601           2           2
           2           2           2           1
  Gsph_c, gvec_kss         1403 /        1601          -2          -2
          -2          -2          -2          -1
  Gsph_c, gvec_kss         1404 /        1601          -2           4
           2          -2           4           1
  Gsph_c, gvec_kss         1405 /        1601           2          -4
          -2           2          -4          -1
  Gsph_c, gvec_kss         1406 /        1601           2          -4
           2           2          -4           1
  Gsph_c, gvec_kss         1407 /        1601          -2           4
          -2          -2           4          -1
  Gsph_c, gvec_kss         1408 /        1601          -2          -2
           2          -2          -2           1
  Gsph_c, gvec_kss         1409 /        1601           2           2
          -2           2           2          -1
  Gsph_c, gvec_kss         1410 /        1601          -3           0
          13          -4           2           1
  Gsph_c, gvec_kss         1411 /        1601           3           0
         -13           4          -2          -1
  Gsph_c, gvec_kss         1412 /        1601           3          -3
          13           4          -2           1
  Gsph_c, gvec_kss         1413 /        1601          -3           3
         -13          -4           2          -1
  Gsph_c, gvec_kss         1414 /        1601           0           3
          13           1           1          22
  Gsph_c, gvec_kss         1415 /        1601           0          -3
         -13          -1          -1         -22
  Gsph_c, gvec_kss         1416 /        1601          -3           0
         -13          -1           2          22
  Gsph_c, gvec_kss         1417 /        1601           3           0
          13           1          -2         -22
  Gsph_c, gvec_kss         1418 /        1601           3          -3
         -13           1          -2          22
  Gsph_c, gvec_kss         1419 /        1601          -3           3
          13          -1           2         -22
  Gsph_c, gvec_kss         1420 /        1601           0           3
         -13          -1          -1          22
  Gsph_c, gvec_kss         1421 /        1601           0          -3
          13           1           1         -22
  Gsph_c, gvec_kss         1422 /        1601          -4           2
           3          -2           1          22
  Gsph_c, gvec_kss         1423 /        1601           4          -2
          -3           2          -1         -22
  Gsph_c, gvec_kss         1424 /        1601           4          -2
           3           2          -1          22
  Gsph_c, gvec_kss         1425 /        1601          -4           2
          -3          -2           1         -22
  Gsph_c, gvec_kss         1426 /        1601           2           2
           3           2           2           2
  Gsph_c, gvec_kss         1427 /        1601          -2          -2
          -3          -2          -2          -2
  Gsph_c, gvec_kss         1428 /        1601          -2           4
           3          -2           4           2
  Gsph_c, gvec_kss         1429 /        1601           2          -4
          -3           2          -4          -2
  Gsph_c, gvec_kss         1430 /        1601           2          -4
           3           2          -4           2
  Gsph_c, gvec_kss         1431 /        1601          -2           4
          -3          -2           4          -2
  Gsph_c, gvec_kss         1432 /        1601          -2          -2
           3          -2          -2           2
  Gsph_c, gvec_kss         1433 /        1601           2           2
          -3           2           2          -2
  Gsph_c, gvec_kss         1434 /        1601          -4           2
           4          -4           2           2
  Gsph_c, gvec_kss         1435 /        1601           4          -2
          -4           4          -2          -2
  Gsph_c, gvec_kss         1436 /        1601           4          -2
           4           4          -2           2
  Gsph_c, gvec_kss         1437 /        1601          -4           2
          -4          -4           2          -2
  Gsph_c, gvec_kss         1438 /        1601           2           2
           4           3           0          13
  Gsph_c, gvec_kss         1439 /        1601          -2          -2
          -4          -3           0         -13
  Gsph_c, gvec_kss         1440 /        1601          -2           4
           4          -3           3          13
  Gsph_c, gvec_kss         1441 /        1601           2          -4
          -4           3          -3         -13
  Gsph_c, gvec_kss         1442 /        1601           2          -4
           4           0          -3          13
  Gsph_c, gvec_kss         1443 /        1601          -2           4
          -4           0           3         -13
  Gsph_c, gvec_kss         1444 /        1601          -2          -2
           4          -3           0          13
  Gsph_c, gvec_kss         1445 /        1601           2           2
          -4           3           0         -13
  Gsph_c, gvec_kss         1446 /        1601          -3           1
         -17           3          -3          13
  Gsph_c, gvec_kss         1447 /        1601           3          -1
          17          -3           3         -13
  Gsph_c, gvec_kss         1448 /        1601           3          -2
         -17           0           3          13
  Gsph_c, gvec_kss         1449 /        1601          -3           2
          17           0          -3         -13
  Gsph_c, gvec_kss         1450 /        1601           1           2
         -17           2           2           3
  Gsph_c, gvec_kss         1451 /        1601          -1          -2
          17          -2          -2          -3
  Gsph_c, gvec_kss         1452 /        1601          -1           3
         -17          -2           4           3
  Gsph_c, gvec_kss         1453 /        1601           1          -3
          17           2          -4          -3
  Gsph_c, gvec_kss         1454 /        1601           2          -3
         -17           2          -4           3
  Gsph_c, gvec_kss         1455 /        1601          -2           3
          17          -2           4          -3
  Gsph_c, gvec_kss         1456 /        1601          -2          -1
         -17          -2          -2           3
  Gsph_c, gvec_kss         1457 /        1601           2           1
          17           2           2          -3
  Gsph_c, gvec_kss         1458 /        1601          -4           2
           5          -4           2           3
  Gsph_c, gvec_kss         1459 /        1601           4          -2
          -5           4          -2          -3
  Gsph_c, gvec_kss         1460 /        1601           4          -2
           5           4          -2           3
  Gsph_c, gvec_kss         1461 /        1601          -4           2
          -5          -4           2          -3
  Gsph_c, gvec_kss         1462 /        1601           2           2
           5           2           0          21
  Gsph_c, gvec_kss         1463 /        1601          -2          -2
          -5          -2           0         -21
  Gsph_c, gvec_kss         1464 /        1601          -2           4
           5          -2           2          21
  Gsph_c, gvec_kss         1465 /        1601           2          -4
          -5           2          -2         -21
  Gsph_c, gvec_kss         1466 /        1601           2          -4
           5           0          -2          21
  Gsph_c, gvec_kss         1467 /        1601          -2           4
          -5           0           2         -21
  Gsph_c, gvec_kss         1468 /        1601          -2          -2
           5          -2           0          21
  Gsph_c, gvec_kss         1469 /        1601           2           2
          -5           2           0         -21
  Gsph_c, gvec_kss         1470 /        1601          -3           0
          14           2          -2          21
  Gsph_c, gvec_kss         1471 /        1601           3           0
         -14          -2           2         -21
  Gsph_c, gvec_kss         1472 /        1601           3          -3
          14           0           2          21
  Gsph_c, gvec_kss         1473 /        1601          -3           3
         -14           0          -2         -21
  Gsph_c, gvec_kss         1474 /        1601           0           3
          14           2           2           4
  Gsph_c, gvec_kss         1475 /        1601           0          -3
         -14          -2          -2          -4
  Gsph_c, gvec_kss         1476 /        1601          -3           0
         -14          -2           4           4
  Gsph_c, gvec_kss         1477 /        1601           3           0
          14           2          -4          -4
  Gsph_c, gvec_kss         1478 /        1601           3          -3
         -14           2          -4           4
  Gsph_c, gvec_kss         1479 /        1601          -3           3
          14          -2           4          -4
  Gsph_c, gvec_kss         1480 /        1601           0           3
         -14          -2          -2           4
  Gsph_c, gvec_kss         1481 /        1601           0          -3
          14           2           2          -4
  Gsph_c, gvec_kss         1482 /        1601          -4           2
           6          -4           2           4
  Gsph_c, gvec_kss         1483 /        1601           4          -2
          -6           4          -2          -4
  Gsph_c, gvec_kss         1484 /        1601           4          -2
           6           4          -2           4
  Gsph_c, gvec_kss         1485 /        1601          -4           2
          -6          -4           2          -4
  Gsph_c, gvec_kss         1486 /        1601           2           2
           6           2           1          17
  Gsph_c, gvec_kss         1487 /        1601          -2          -2
          -6          -2          -1         -17
  Gsph_c, gvec_kss         1488 /        1601          -2           4
           6          -2           3          17
  Gsph_c, gvec_kss         1489 /        1601           2          -4
          -6           2          -3         -17
  Gsph_c, gvec_kss         1490 /        1601           2          -4
           6           1          -3          17
  Gsph_c, gvec_kss         1491 /        1601          -2           4
          -6          -1           3         -17
  Gsph_c, gvec_kss         1492 /        1601          -2          -2
           6          -1          -2          17
  Gsph_c, gvec_kss         1493 /        1601           2           2
          -6           1           2         -17
  Gsph_c, gvec_kss         1494 /        1601          -2          -2
          -7          -3           2          17
  Gsph_c, gvec_kss         1495 /        1601           2           2
           7           3          -2         -17
  Gsph_c, gvec_kss         1496 /        1601           2          -4
          -7           3          -1          17
  Gsph_c, gvec_kss         1497 /        1601          -2           4
           7          -3           1         -17
  Gsph_c, gvec_kss         1498 /        1601          -2           4
          -7          -3           1          17
  Gsph_c, gvec_kss         1499 /        1601           2          -4
           7           3          -1         -17
  Gsph_c, gvec_kss         1500 /        1601           2           2
          -7           3          -2          17
  Gsph_c, gvec_kss         1501 /        1601          -2          -2
           7          -3           2         -17
  Gsph_c, gvec_kss         1502 /        1601           4          -2
          -7           1           2          17
  Gsph_c, gvec_kss         1503 /        1601          -4           2
           7          -1          -2         -17
  Gsph_c, gvec_kss         1504 /        1601          -4           2
          -7          -1           3          17
  Gsph_c, gvec_kss         1505 /        1601           4          -2
           7           1          -3         -17
  Gsph_c, gvec_kss         1506 /        1601          -4           1
           0           2          -3          17
  Gsph_c, gvec_kss         1507 /        1601           4          -1
           0          -2           3         -17
  Gsph_c, gvec_kss         1508 /        1601           4          -3
           0          -2          -1          17
  Gsph_c, gvec_kss         1509 /        1601          -4           3
           0           2           1         -17
  Gsph_c, gvec_kss         1510 /        1601           1           3
           0           2           2           5
  Gsph_c, gvec_kss         1511 /        1601          -1          -3
           0          -2          -2          -5
  Gsph_c, gvec_kss         1512 /        1601          -1           4
           0          -2           4           5
  Gsph_c, gvec_kss         1513 /        1601           1          -4
           0           2          -4          -5
  Gsph_c, gvec_kss         1514 /        1601           3          -4
           0           2          -4           5
  Gsph_c, gvec_kss         1515 /        1601          -3           4
           0          -2           4          -5
  Gsph_c, gvec_kss         1516 /        1601          -3          -1
           0          -2          -2           5
  Gsph_c, gvec_kss         1517 /        1601           3           1
           0           2           2          -5
  Gsph_c, gvec_kss         1518 /        1601          -4           1
           1          -4           2           5
  Gsph_c, gvec_kss         1519 /        1601           4          -1
          -1           4          -2          -5
  Gsph_c, gvec_kss         1520 /        1601           4          -3
           1           4          -2           5
  Gsph_c, gvec_kss         1521 /        1601          -4           3
          -1          -4           2          -5
  Gsph_c, gvec_kss         1522 /        1601           1           3
           1           0           0          26
  Gsph_c, gvec_kss         1523 /        1601          -1          -3
          -1           0           0         -26
  Gsph_c, gvec_kss         1524 /        1601          -1           4
           1           3           0          14
  Gsph_c, gvec_kss         1525 /        1601           1          -4
          -1          -3           0         -14
  Gsph_c, gvec_kss         1526 /        1601           3          -4
           1          -3           3          14
  Gsph_c, gvec_kss         1527 /        1601          -3           4
          -1           3          -3         -14
  Gsph_c, gvec_kss         1528 /        1601          -3          -1
           1           0          -3          14
  Gsph_c, gvec_kss         1529 /        1601           3           1
          -1           0           3         -14
  Gsph_c, gvec_kss         1530 /        1601          -4           1
          -1          -3           0          14
  Gsph_c, gvec_kss         1531 /        1601           4          -1
           1           3           0         -14
  Gsph_c, gvec_kss         1532 /        1601           4          -3
          -1           3          -3          14
  Gsph_c, gvec_kss         1533 /        1601          -4           3
           1          -3           3         -14
  Gsph_c, gvec_kss         1534 /        1601           1           3
          -1           0           3          14
  Gsph_c, gvec_kss         1535 /        1601          -1          -3
           1           0          -3         -14
  Gsph_c, gvec_kss         1536 /        1601          -1           4
          -1           1           0          25
  Gsph_c, gvec_kss         1537 /        1601           1          -4
           1          -1           0         -25
  Gsph_c, gvec_kss         1538 /        1601           3          -4
          -1          -1           1          25
  Gsph_c, gvec_kss         1539 /        1601          -3           4
           1           1          -1         -25
  Gsph_c, gvec_kss         1540 /        1601          -3          -1
          -1           0          -1          25
  Gsph_c, gvec_kss         1541 /        1601           3           1
           1           0           1         -25
  Gsph_c, gvec_kss         1542 /        1601          -4           1
           2          -1           0          25
  Gsph_c, gvec_kss         1543 /        1601           4          -1
          -2           1           0         -25
  Gsph_c, gvec_kss         1544 /        1601           4          -3
           2           1          -1          25
  Gsph_c, gvec_kss         1545 /        1601          -4           3
          -2          -1           1         -25
  Gsph_c, gvec_kss         1546 /        1601           1           3
           2           0           1          25
  Gsph_c, gvec_kss         1547 /        1601          -1          -3
          -2           0          -1         -25
  Gsph_c, gvec_kss         1548 /        1601          -1           4
           2           2           2           6
  Gsph_c, gvec_kss         1549 /        1601           1          -4
          -2          -2          -2          -6
  Gsph_c, gvec_kss         1550 /        1601           3          -4
           2          -2           4           6
  Gsph_c, gvec_kss         1551 /        1601          -3           4
          -2           2          -4          -6
  Gsph_c, gvec_kss         1552 /        1601          -3          -1
           2           2          -4           6
  Gsph_c, gvec_kss         1553 /        1601           3           1
          -2          -2           4          -6
  Gsph_c, gvec_kss         1554 /        1601          -4           1
          -2          -2          -2           6
  Gsph_c, gvec_kss         1555 /        1601           4          -1
           2           2           2          -6
  Gsph_c, gvec_kss         1556 /        1601           4          -3
          -2          -4           2           6
  Gsph_c, gvec_kss         1557 /        1601          -4           3
           2           4          -2          -6
  Gsph_c, gvec_kss         1558 /        1601           1           3
          -2           4          -2           6
  Gsph_c, gvec_kss         1559 /        1601          -1          -3
           2          -4           2          -6
  Gsph_c, gvec_kss         1560 /        1601          -1           4
          -2           1           1          23
  Gsph_c, gvec_kss         1561 /        1601           1          -4
           2          -1          -1         -23
  Gsph_c, gvec_kss         1562 /        1601           3          -4
          -2          -1           2          23
  Gsph_c, gvec_kss         1563 /        1601          -3           4
           2           1          -2         -23
  Gsph_c, gvec_kss         1564 /        1601          -3          -1
          -2           1          -2          23
  Gsph_c, gvec_kss         1565 /        1601           3           1
           2          -1           2         -23
  Gsph_c, gvec_kss         1566 /        1601          -4           1
           3          -1          -1          23
  Gsph_c, gvec_kss         1567 /        1601           4          -1
          -3           1           1         -23
  Gsph_c, gvec_kss         1568 /        1601           4          -3
           3          -2           1          23
  Gsph_c, gvec_kss         1569 /        1601          -4           3
          -3           2          -1         -23
  Gsph_c, gvec_kss         1570 /        1601           1           3
           3           2          -1          23
  Gsph_c, gvec_kss         1571 /        1601          -1          -3
          -3          -2           1         -23
  Gsph_c, gvec_kss         1572 /        1601          -1           4
           3           2           2           7
  Gsph_c, gvec_kss         1573 /        1601           1          -4
          -3          -2          -2          -7
  Gsph_c, gvec_kss         1574 /        1601           3          -4
           3          -2           4           7
  Gsph_c, gvec_kss         1575 /        1601          -3           4
          -3           2          -4          -7
  Gsph_c, gvec_kss         1576 /        1601          -3          -1
           3           2          -4           7
  Gsph_c, gvec_kss         1577 /        1601           3           1
          -3          -2           4          -7
  Gsph_c, gvec_kss         1578 /        1601          -4           1
          -3          -2          -2           7
  Gsph_c, gvec_kss         1579 /        1601           4          -1
           3           2           2          -7
  Gsph_c, gvec_kss         1580 /        1601           4          -3
          -3          -4           2           7
  Gsph_c, gvec_kss         1581 /        1601          -4           3
           3           4          -2          -7
  Gsph_c, gvec_kss         1582 /        1601           1           3
          -3           4          -2           7
  Gsph_c, gvec_kss         1583 /        1601          -1          -3
           3          -4           2          -7
  Gsph_c, gvec_kss         1584 /        1601          -1           4
          -3           3           1           0
  Gsph_c, gvec_kss         1585 /        1601           1          -4
           3          -3          -1           0
  Gsph_c, gvec_kss         1586 /        1601           3          -4
          -3          -3           4           0
  Gsph_c, gvec_kss         1587 /        1601          -3           4
           3           3          -4           0
  Gsph_c, gvec_kss         1588 /        1601          -3          -1
          -3           1          -4           0
  Gsph_c, gvec_kss         1589 /        1601           3           1
           3          -1           4           0
  Gsph_c, gvec_kss         1590 /        1601          -4           1
          -4          -1          -3           0
  Gsph_c, gvec_kss         1591 /        1601           4          -1
           4           1           3           0
  Gsph_c, gvec_kss         1592 /        1601           4          -3
          -4          -4           3           0
  Gsph_c, gvec_kss         1593 /        1601          -4           3
           4           4          -3           0
  Gsph_c, gvec_kss         1594 /        1601           1           3
          -4           4          -1           0
  Gsph_c, gvec_kss         1595 /        1601          -1          -3
           4          -4           1           0
  Gsph_c, gvec_kss         1596 /        1601          -1           4
          -4           3           1           1
  Gsph_c, gvec_kss         1597 /        1601           1          -4
           4          -3          -1          -1
  Gsph_c, gvec_kss         1598 /        1601           3          -4
          -4          -3           4           1
  Gsph_c, gvec_kss         1599 /        1601          -3           4
           4           3          -4          -1
  Gsph_c, gvec_kss         1600 /        1601          -3          -1
          -4           1          -4           1
  Gsph_c, gvec_kss         1601 /        1601           3           1
           4          -1           4          -1
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
  Version       : 7.10.2
  Build target  : x86_64_linux_intel12.1
  Build date    : 20150220
 
 === Compiler Suite === 
  C compiler       : intel12.1
  C++ compiler     : gnu12.1
  Fortran compiler : intel12.1
  CFLAGS           :  -g -O2 -vec-report0 -O3 -axSSE4.2 -ip
  CXXFLAGS         : -m64 -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : netlib-fallback
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : yes
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 
--- !ERROR
message: |
    Mismatch between Gsph_c and gvec_kss
src_file: Subroutine Unknown
src_line: 0
...
 
mpiexec_hexa8: mpd_uncaught_except_tb handling:
  <type 'exceptions.IOError'>: [Errno 4] Interrupted system call
    /opt/intel/impi/4.0.3.008/intel64/bin/mpiexec  2281  handle_cli_stderr_input
        sys.stderr.write(msg)
    /master/opt/intel/impi/4.0.3.008/intel64/bin/mpdlib.py  988  handle_active_streams
        handler(stream,*args)
    /opt/intel/impi/4.0.3.008/intel64/bin/mpiexec  1308  mpiexec
        rv = streamHandler.handle_active_streams(timeout=1.0)
    /opt/intel/impi/4.0.3.008/intel64/bin/mpiexec  3303  <module>
        mpiexec()
