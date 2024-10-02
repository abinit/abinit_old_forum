  ABINIT 8.10.2
  
  Give name for formatted input file: 
toptic_1.in
  Give name for formatted output file:
toptic_1.out
  Give root name for generic input files:
toptic_1i
  Give root name for generic output files:
toptic_1o
  Give root name for generic temporary files:
toptic_1

.Version 8.10.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel15.0 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Sat 25 May 2019.
- ( at 09h17 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 8.10.2
  Build target  : x86_64_linux_intel15.0
  Build date    : 20190524
 
 === Compiler Suite === 
  C compiler       : intel15.0
  C++ compiler     : intel15.0
  Fortran compiler : intel15.0
  CFLAGS           :  -g -O2 -vec-report0
  CXXFLAGS         :  -g -O2 -vec-report0
  FCFLAGS          :  -g -extend-source -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : auto
  openMP support : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : fftw3
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O3


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                 CXX_INTEL                  FC_INTEL
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
             HAVE_FC_ETIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV            HAVE_FC_GETPID
 
   HAVE_FC_IEEE_EXCEPTIONS             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
            HAVE_FC_SYSTEM                  HAVE_FFT            HAVE_FFT_FFTW3
 
              HAVE_FFT_MPI           HAVE_FFT_SERIAL        HAVE_LIBPAW_ABINIT
 
      HAVE_LIBTETRA_ABINIT               HAVE_LINALG        HAVE_LINALG_SERIAL
 
                  HAVE_MPI                 HAVE_MPI2       HAVE_MPI_IALLREDUCE
 
        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV        HAVE_MPI_INTEGER16
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY
 
             HAVE_OS_LINUX         HAVE_TIMER_ABINIT              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> toptic_1.in
- output file    -> toptic_1.out
- root for input  files -> toptic_1i
- root for output files -> toptic_1o
 
-instrng: 115 lines of input have been read from file toptic_1.in
 

 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is /public/app/abinit8.10.2/Psps_for_tests/31ga.pspnc

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is /public/app/abinit8.10.2/Psps_for_tests/33as.pspnc
  read the values zionpsp=  3.0 , pspcod=   1 , lmax=   1
  read the values zionpsp=  5.0 , pspcod=   1 , lmax=   1
 
 inpspheads: deduce mpsang = 2, n1xccc = 2501.
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
 symspgr : optical characteristics = isotropic
 ingeo: angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
 symspgr : optical characteristics = isotropic
 ingeo: angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
 symspgr : optical characteristics = isotropic
 ingeo: angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
 symspgr : optical characteristics = isotropic
 ingeo: angdeg(1:3)=   60.00000000   60.00000000   60.00000000
 chkneu : initialized the occupation numbers for occopt=    3, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 chkneu : initialized the occupation numbers for occopt=    3, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 chkneu : initialized the occupation numbers for occopt=    3, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
 chkneu : initialized the occupation numbers for occopt=    3, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=10 and mkmem  = 10, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=10 and mkqmem = 10, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=10 and mk1mem = 10, ground state wf handled in core.
 For input ecut=  4.000000E+00 best grid ngfft=      15      15      15
       max ecut=  4.348037E+00
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 119
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=10 and mkmem  = 10, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=10 and mkqmem = 10, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=10 and mk1mem = 10, ground state wf handled in core.
 For input ecut=  4.000000E+00 best grid ngfft=      15      15      15
       max ecut=  4.348037E+00
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 119
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=256 and mkmem  = 256, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=256 and mkqmem = 256, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=256 and mk1mem = 256, ground state wf handled in core.
 For input ecut=  4.000000E+00 best grid ngfft=      15      15      15
       max ecut=  4.348037E+00
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 119
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=256 and mkmem  = 256, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=256 and mkqmem = 256, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=256 and mk1mem = 256, ground state wf handled in core.
 For input ecut=  4.000000E+00 best grid ngfft=      15      15      15
       max ecut=  4.348037E+00
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    15   15   15
  Augmented FFT divisions ...................    15   15   15
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 119
 getmpw: optimal value of mpw= 119
 
 DATASET    1 : space group F-4 3 m (#216); Bravais cF (face-center cubic)
 
 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       0      iscf =       7    lmnmax =       1
     lnmax =       1     mgfft =      15  mpssoang =       2    mqgrid =    3001
     natom =       2  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      24    n1xccc =    2501    ntypat =       2
    occopt =       3   xclevel =       1
-    mband =          12        mffmem =           1         mkmem =          10
       mpw =         119          nfft =        3375          nkpt =          10
================================================================================
P This job should need less than                       2.634 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.220 Mbytes ; DEN or POT disk file :      0.028 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with      0.4140 MBytes.
 memana : allocated an array of      0.414 Mbytes, for testing purposes.
 memana: allocated       2.634Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    2 : space group F-4 3 m (#216); Bravais cF (face-center cubic)
 
 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
     intxc =       0    ionmov =       0      iscf =      -2    lmnmax =       1
     lnmax =       1     mgfft =      15  mpssoang =       2    mqgrid =    3001
     natom =       2  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      24    n1xccc =    2501    ntypat =       2
    occopt =       3   xclevel =       1
-    mband =          12        mffmem =           1         mkmem =          10
       mpw =         119          nfft =        3375          nkpt =          10
================================================================================
P This job should need less than                       2.222 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.220 Mbytes ; DEN or POT disk file :      0.028 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with      0.2199 MBytes.
 memana : allocated an array of      0.220 Mbytes, for testing purposes.
 memana: allocated       2.222Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    3 : space group F-4 3 m (#216); Bravais cF (face-center cubic)
 
 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
     intxc =       0    ionmov =       0      iscf =      -2    lmnmax =       1
     lnmax =       1     mgfft =      15  mpssoang =       2    mqgrid =    3001
     natom =       2  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      24    n1xccc =    2501    ntypat =       2
    occopt =       3   xclevel =       1
-    mband =          12        mffmem =           1         mkmem =         256
       mpw =         119          nfft =        3375          nkpt =         256
================================================================================
P This job should need less than                       8.367 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      5.580 Mbytes ; DEN or POT disk file :      0.028 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with      5.5801 MBytes.
 memana : allocated an array of      5.580 Mbytes, for testing purposes.
 memana: allocated       8.367Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    4 : space group F-4 3 m (#216); Bravais cF (face-center cubic)
 
 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
 memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4 (RF).
     intxc =       0      iscf =      -3    lmnmax =       1     lnmax =       1
     mgfft =      15  mpssoang =       2    mqgrid =    3001     natom =       2
  nloc_mem =       1    nspden =       1   nspinor =       1    nsppol =       1
      nsym =      24    n1xccc =    2501    ntypat =       2    occopt =       3
   xclevel =       1
-    mband =          12        mffmem =           1         mkmem =         256
-   mkqmem =         256        mk1mem =         256           mpw =         119
      nfft =        3375          nkpt =         256
================================================================================
P This job should need less than                      20.302 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      5.580 Mbytes ; DEN or POT disk file :      0.028 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with      5.5801 MBytes.
 memana : allocated an array of      5.580 Mbytes, for testing purposes.
 memana: allocated      20.302Mbytes, for testing purposes. 
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
            acell      1.0600000000E+01  1.0600000000E+01  1.0600000000E+01 Bohr
              amu      6.97200000E+01  7.49216000E+01
           diemac      1.00000000E+01
             ecut      4.00000000E+00 Hartree
-          fftalg         312
           getden1          0
           getden2          1
           getden3          1
           getden4          0
           getwfk1          0
           getwfk2          1
           getwfk3          2
           getwfk4          3
             iscf1          7
             iscf2         -2
             iscf3         -2
             iscf4         -3
           jdtset        1    2    3    4
              kpt1    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -3.75000000E-01  0.00000000E+00  0.00000000E+00
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
              kpt3    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -1.25000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                      -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                       5.00000000E-01 -1.25000000E-01  0.00000000E+00
                      -3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -2.50000000E-01 -1.25000000E-01  2.50000000E-01
                      -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01 -3.75000000E-01  0.00000000E+00
                      -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                      -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                       3.75000000E-01 -2.50000000E-01  0.00000000E+00
                       5.00000000E-01 -2.50000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                      -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                       2.50000000E-01 -1.25000000E-01  0.00000000E+00
                       3.75000000E-01 -1.25000000E-01  1.25000000E-01
                       5.00000000E-01 -1.25000000E-01  2.50000000E-01
                      -3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -2.50000000E-01 -1.25000000E-01  5.00000000E-01
                      -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -2.50000000E-01  3.75000000E-01  2.50000000E-01
                      -1.25000000E-01  3.75000000E-01  3.75000000E-01
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  3.75000000E-01
                      -1.25000000E-01  5.00000000E-01  5.00000000E-01
                       2.50000000E-01 -3.75000000E-01  0.00000000E+00
              kpt4    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -1.25000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                      -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                       5.00000000E-01 -1.25000000E-01  0.00000000E+00
                      -3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -2.50000000E-01 -1.25000000E-01  2.50000000E-01
                      -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01 -3.75000000E-01  0.00000000E+00
                      -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                      -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                       3.75000000E-01 -2.50000000E-01  0.00000000E+00
                       5.00000000E-01 -2.50000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                      -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                       2.50000000E-01 -1.25000000E-01  0.00000000E+00
                       3.75000000E-01 -1.25000000E-01  1.25000000E-01
                       5.00000000E-01 -1.25000000E-01  2.50000000E-01
                      -3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -2.50000000E-01 -1.25000000E-01  5.00000000E-01
                      -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -2.50000000E-01  3.75000000E-01  2.50000000E-01
                      -1.25000000E-01  3.75000000E-01  3.75000000E-01
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  3.75000000E-01
                      -1.25000000E-01  5.00000000E-01  5.00000000E-01
                       2.50000000E-01 -3.75000000E-01  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
           kptopt1          1
           kptopt2          1
           kptopt3          3
           kptopt4          3
         kptrlatt        4   -4    4     -4    4    4     -4   -4    4
          kptrlen      4.24000000E+01
P           mkmem1         10
P           mkmem2         10
P           mkmem3        256
P           mkmem4        256
P          mkqmem1         10
P          mkqmem2         10
P          mkqmem3        256
P          mkqmem4        256
P          mk1mem1         10
P          mk1mem2         10
P          mk1mem3        256
P          mk1mem4        256
            natom           2
            nband1         12
            nband2         12
            nband3         12
            nband4         12
           nbdbuf1          0
           nbdbuf2          2
           nbdbuf3          2
           nbdbuf4          2
           ndtset           4
            ngfft          15      15      15
             nkpt1         10
             nkpt2         10
             nkpt3        256
             nkpt4        256
            nline1          4
            nline2          4
            nline3          4
            nline4          0
             nqpt1          0
             nqpt2          0
             nqpt3          0
             nqpt4          1
            nstep1         50
            nstep2         50
            nstep3         50
            nstep4          1
             nsym          24
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
              occ4     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           3
        optdriver1          0
        optdriver2          0
        optdriver3          0
        optdriver4          1
           prtcif1          1
           prtcif2          0
           prtcif3          0
           prtcif4          0
            prtwf1          1
            prtwf2          1
            prtwf3          1
            prtwf4          3
            rfdir1          0       0       0
            rfdir2          0       0       0
            rfdir3          0       0       0
            rfdir4          1       0       0
           rfelfd1          0
           rfelfd2          0
           rfelfd3          0
           rfelfd4          2
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         216
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
           tolvrs1     1.00000000E-12
           tolvrs2     0.00000000E+00
           tolvrs3     0.00000000E+00
           tolvrs4     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-20
           tolwfr3     1.00000000E-20
           tolwfr4     1.00000000E-20
            typat      1  2
              wtk1       0.09375    0.09375    0.09375    0.18750    0.09375    0.09375
                         0.09375    0.18750    0.03125    0.03125
              wtk2       0.09375    0.09375    0.09375    0.18750    0.09375    0.09375
                         0.09375    0.18750    0.03125    0.03125
              wtk3       0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
              wtk4       0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
                       outvars : Printing only first  50 k-points.
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.4023196028E+00  1.4023196028E+00  1.4023196028E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.6500000000E+00  2.6500000000E+00  2.6500000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       31.00000   33.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   1.
 
 chkinp: Checking input parameters for consistency, jdtset=   2.
 
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
  MPI_WTICK ..................   1.000000000000000E-009
 
================================================================================
== DATASET  1 ==================================================================
-   nproc =    1
 
 
--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...
 
 
 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Unit cell volume ucvol=  2.9775400E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
- pspini: atom type   1  psp file is /public/app/abinit8.10.2/Psps_for_tests/31ga.pspnc
- pspatm: opening atomic psp file    /public/app/abinit8.10.2/Psps_for_tests/31ga.pspnc
-  Troullier-Martins psp for element  Ga        Thu Oct 27 17:36:43 EDT 1994
- 31.00000   3.00000    940714                znucl, zion, pspdat
    1    1    1    0      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   6.570  15.885    0   1.9956558        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.122   7.249    1   1.9956558        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.57649862033350    0.14924926558032    2.22766011456380   rchrg,fchrg,qchrg
  pspatm : epsatm=   27.06235248
         --- l  ekb(1:nproj) -->
             1    2.537532
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is /public/app/abinit8.10.2/Psps_for_tests/33as.pspnc
- pspatm: opening atomic psp file    /public/app/abinit8.10.2/Psps_for_tests/33as.pspnc
-  Troullier-Martins psp for element  As        Thu Oct 27 17:37:14 EDT 1994
- 33.00000   5.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   4.772  10.829    1   2.5306160        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.745   5.580    0   2.5306160        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2.05731715564010    0.36322996461007    2.76014815959125   rchrg,fchrg,qchrg
  pspatm : epsatm=   27.20579911
         --- l  ekb(1:nproj) -->
             0    0.838751
 pspatm: atomic psp has been read  and splines computed
 
   4.34145213E+02                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using Legendre polynomials
  Max number of non-local projectors over l and type   1
  Highest angular momentum +1 .......   2
  Max number of (l,n)   components ..   1
  Max number of (l,m,n) components ..   1
 
 Pseudo-Core Charge Info: 
   Number of radial points for pseudo-core charge .. 2501
   XC core-correction treatment (optnlxccc) ........    1
   Radius for pseudo-core charge for each type ..... 
 
  - Atom type    1 has pseudo-core radius ..  7.7295
  - Atom type    2 has pseudo-core radius ..  6.1720
 
 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   3001
   Number of q-points for vlspl ...................   3001
   vloc is computed in Reciprocal Space
   model core charge treated in real-space
 
  XC functional for type 1 is 1
  Pseudo valence available: no
  XC functional for type 2 is 1
  Pseudo valence available: no
 
 wfconv:    12 bands initialized randomly with npw=   119, for ikpt=     1
 wfconv:    12 bands initialized randomly with npw=   115, for ikpt=     2
 wfconv:    12 bands initialized randomly with npw=   118, for ikpt=     3
 wfconv:    12 bands initialized randomly with npw=   114, for ikpt=     4
 wfconv:    12 bands initialized randomly with npw=   112, for ikpt=     5
 wfconv:    12 bands initialized randomly with npw=   111, for ikpt=     6
 wfconv:    12 bands initialized randomly with npw=   112, for ikpt=     7
 wfconv:    12 bands initialized randomly with npw=   110, for ikpt=     8
 wfconv:    12 bands initialized randomly with npw=   116, for ikpt=     9
 wfconv:    12 bands initialized randomly with npw=   114, for ikpt=    10
_setup2: Arith. and geom. avg. npw (full set) are     113.594     113.557
 initro: for itypat=  1, take decay length=      1.1500,
 initro: indeed, coreel=     28.0000, nval=  3 and densty=  0.0000E+00.
 initro: for itypat=  2, take decay length=      1.0000,
 initro: indeed, coreel=     28.0000, nval=  5 and densty=  0.0000E+00.
 
================================================================================
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 newocc: new Fermi energy is      -0.001087 , with nelect=      8.000000
  Number of bissection calls =  38
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.997 1.997 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.002 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.990 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.023 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.961 1.960 0.006 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.996 1.996 0.039 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.5160E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.3415E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    9.5160E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.3415E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  1  -10.701770095630    -1.070E+01 5.931E-02 2.827E+00
 scprqt: <Vxc>= -3.5310332E-01 hartree
 
Simple mixing update:
  residual square of the potential :   1.25918618467976
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 newocc: new Fermi energy is       0.013466 , with nelect=      8.000000
  Number of bissection calls =  44
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.010 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.974 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.061 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.891 1.891 0.012 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.990 1.990 0.100 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    8.8827E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7405E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    8.8827E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7405E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  2  -10.709759071710    -7.989E-03 5.933E-02 1.541E-01
 scprqt: <Vxc>= -3.5503069E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.880      0.120
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 newocc: new Fermi energy is       0.010539 , with nelect=      8.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.976 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.055 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.901 1.901 0.013 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.991 1.991 0.096 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.0274E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7159E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    9.0274E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7159E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  3  -10.710162183236    -4.031E-04 1.037E-01 8.390E-03
 scprqt: <Vxc>= -3.5471643E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.973      0.643E-01 -0.372E-01
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 newocc: new Fermi energy is       0.011181 , with nelect=      8.000000
  Number of bissection calls =  44
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.897 1.897 0.013 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.991 1.991 0.099 0.001 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.0045E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7403E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    9.0045E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7403E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  4  -10.710171262408    -9.079E-06 1.166E-01 9.531E-05
 scprqt: <Vxc>= -3.5480160E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28     -0.268     -0.189E-01  0.806E-02
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 newocc: new Fermi energy is       0.011147 , with nelect=      8.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.897 1.897 0.013 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.991 1.991 0.099 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7452E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7452E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  5  -10.710181246720    -9.984E-06 5.427E-02 1.426E-06
 scprqt: <Vxc>= -3.5481318E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21     -0.257      0.429E-01  0.188E-02 -0.119E-02
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 newocc: new Fermi energy is       0.011140 , with nelect=      8.000000
  Number of bissection calls =  43
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.897 1.897 0.013 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.991 1.991 0.099 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7458E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7458E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  6  -10.710181251661    -4.940E-09 5.914E-02 6.004E-09
 scprqt: <Vxc>= -3.5481467E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.16     -0.192      0.406E-01 -0.719E-02 -0.309E-03
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 newocc: new Fermi energy is       0.011138 , with nelect=      8.000000
  Number of bissection calls =  43
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.897 1.897 0.013 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.991 1.991 0.099 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  7  -10.710181251676    -1.520E-11 6.796E-02 3.191E-10
 scprqt: <Vxc>= -3.5481469E-01 hartree
 
 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.35     -0.378      0.314E-01 -0.679E-02  0.127E-02
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 newocc: new Fermi energy is       0.011138 , with nelect=      8.000000
  Number of bissection calls =  41
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.897 1.897 0.013 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.991 1.991 0.099 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  8  -10.710181157158     9.452E-08 7.306E-02 1.528E-12
 scprqt: <Vxc>= -3.5481469E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.18     -0.223      0.465E-01 -0.224E-02  0.561E-03
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 newocc: new Fermi energy is       0.007494 , with nelect=      8.000000
  Number of bissection calls =  43
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.993 1.992 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.997 0.083 0.003 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.006 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.964 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.002 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.040 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.855 1.855 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.986 1.986 0.070 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    8.9992E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7386E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    8.9992E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7386E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT  9  -10.705380450201     4.801E-03 1.469E-02 2.366E-05
 scprqt: <Vxc>= -3.5483627E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.834E-04   1.13     -0.153      0.220E-01  0.794E-03
 scfcv_core: previous iteration took 00 [s]
 
 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 newocc: new Fermi energy is       0.011117 , with nelect=      8.000000
  Number of bissection calls =  42
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.897 1.897 0.013 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.991 1.991 0.099 0.000 0.000 0.000 0.000 0.000 0.000 0.000
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=        3375
 ETOT 10  -10.710181251651    -4.801E-03 2.960E-02 2.563E-13
 scprqt: <Vxc>= -3.5481469E-01 hartree
 
 At SCF step   10       vres2   =  2.56E-13 < tolvrs=  1.00E-12 =>converged.
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.50478868E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.50478868E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.50478868E-04  sigma(2 1)=  0.00000000E+00
 
 fftdatar_write: About to write data to: toptic_1o_DS1_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
================================================================================
 
 ----iterations are completed or convergence reached----
 
 
 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.1533 [eV], located at k-point      :  -0.1250  0.0000  0.0000
   Fundamental gap     =   1.5973 [eV], Top of valence bands at :  -0.1250  0.0000  0.0000
                                        Bottom of conduction at :  -0.3750  0.0000  0.0000
 Mean square residual over all n,k,spin=   40.522E-05; max=  29.600E-03
  -0.1250 -0.2500  0.0000    1  7.27520E-03 kpt; spin; max resid(k); each band:
  1.48E-17 8.26E-18 4.53E-18 3.89E-18 7.48E-18 7.94E-18 3.84E-18 4.64E-18
  5.58E-18 1.23E-13 2.03E-12 7.28E-03
  -0.1250  0.5000  0.0000    1  1.01903E-03 kpt; spin; max resid(k); each band:
  6.08E-17 6.41E-17 3.22E-17 7.26E-18 1.02E-03 2.36E-14 8.06E-09 1.49E-16
  8.17E-13 2.13E-08 4.72E-05 5.97E-04
  -0.2500 -0.3750  0.0000    1  3.55321E-03 kpt; spin; max resid(k); each band:
  1.32E-17 9.60E-18 5.63E-18 5.78E-18 3.72E-18 6.16E-18 6.84E-16 3.11E-15
  6.53E-13 5.20E-08 1.99E-07 3.55E-03
  -0.1250 -0.3750  0.1250    1  5.50397E-03 kpt; spin; max resid(k); each band:
  1.20E-17 1.00E-17 6.43E-18 4.90E-18 7.26E-18 4.85E-18 5.00E-18 4.96E-18
  3.74E-16 2.96E-13 1.01E-07 5.50E-03
  -0.1250  0.2500  0.0000    1  1.12918E-06 kpt; spin; max resid(k); each band:
  1.39E-17 8.92E-18 5.49E-18 2.48E-18 9.36E-18 4.56E-18 1.88E-18 8.92E-18
  7.02E-19 3.38E-15 4.81E-12 1.13E-06
  -0.2500  0.3750  0.0000    1  5.79481E-04 kpt; spin; max resid(k); each band:
  9.41E-18 9.59E-18 7.85E-18 4.50E-18 4.76E-18 7.58E-18 3.57E-18 8.00E-18
  4.89E-17 6.28E-17 2.06E-07 5.79E-04
  -0.3750  0.5000  0.0000    1  1.37956E-04 kpt; spin; max resid(k); each band:
  8.49E-18 9.64E-18 7.32E-18 8.05E-18 3.27E-18 4.14E-18 8.78E-11 2.67E-12
  1.06E-12 2.08E-08 1.38E-04 8.35E-06
  -0.2500  0.5000  0.1250    1  2.95995E-02 kpt; spin; max resid(k); each band:
  8.02E-18 8.98E-18 6.81E-18 6.49E-18 5.75E-18 7.56E-18 7.59E-16 4.02E-16
  3.06E-12 4.33E-09 3.00E-05 2.96E-02
  -0.1250  0.0000  0.0000    1  2.00538E-06 kpt; spin; max resid(k); each band:
  1.51E-17 7.54E-18 1.51E-18 1.51E-18 1.23E-17 1.60E-18 1.60E-18 6.82E-18
  8.70E-14 1.45E-11 1.71E-11 2.01E-06
  -0.3750  0.0000  0.0000    1  2.72319E-04 kpt; spin; max resid(k); each band:
  1.27E-17 1.11E-17 3.24E-18 3.21E-18 8.67E-18 8.47E-18 1.82E-16 3.96E-14
  8.68E-13 1.31E-14 6.49E-12 2.72E-04
 
 outwf: write wavefunction to file toptic_1o_DS1_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     0.00[s], walltime:     0.00 [s]
 prteigrs : about to open file toptic_1o_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.01112   Average Vxc (hartree)=  -0.35481
 Eigenvalues (hartree) for nkpt=  10  k points:
 kpt#   1, nband= 12, wtk=  0.09375, kpt= -0.1250 -0.2500  0.0000 (reduced coord)
  -0.44478   -0.13710   -0.04905   -0.04830    0.08913    0.12282    0.18916    0.18991
   0.26596    0.34229    0.37132    0.41633
      occupation numbers for kpt#   1
   2.00000    2.00000    1.99514    1.99476    0.00082    0.00003    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#   2, nband= 12, wtk=  0.09375, kpt= -0.1250  0.5000  0.0000 (reduced coord)
  -0.40482   -0.23767   -0.08478   -0.05700    0.07221    0.14393    0.17796    0.27430
   0.34014    0.41509    0.44434    0.46469
      occupation numbers for kpt#   2
   2.00000    2.00000    1.99986    1.99780    0.00443    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#   3, nband= 12, wtk=  0.09375, kpt= -0.2500 -0.3750  0.0000 (reduced coord)
  -0.41676   -0.19495   -0.09275   -0.07736    0.06493    0.11153    0.22480    0.25225
   0.34015    0.40903    0.44453    0.48692
      occupation numbers for kpt#   3
   2.00000    2.00000    1.99994    1.99971    0.00916    0.00009    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#   4, nband= 12, wtk=  0.18750, kpt= -0.1250 -0.3750  0.1250 (reduced coord)
  -0.40722   -0.21599   -0.11629   -0.06797    0.10744    0.14195    0.19108    0.23852
   0.33380    0.38455    0.44192    0.47705
      occupation numbers for kpt#   4
   2.00000    2.00000    1.99999    1.99927    0.00013    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#   5, nband= 12, wtk=  0.09375, kpt= -0.1250  0.2500  0.0000 (reduced coord)
  -0.43065   -0.17908   -0.08208   -0.03252    0.08588    0.16118    0.16372    0.21751
   0.27393    0.35152    0.39194    0.46686
      occupation numbers for kpt#   5
   2.00000    2.00000    1.99982    1.97486    0.00113    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#   6, nband= 12, wtk=  0.09375, kpt= -0.2500  0.3750  0.0000 (reduced coord)
  -0.39354   -0.23296   -0.13840   -0.06709    0.07705    0.19452    0.22348    0.25849
   0.30269    0.33064    0.45862    0.54497
      occupation numbers for kpt#   6
   2.00000    2.00000    2.00000    1.99920    0.00274    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#   7, nband= 12, wtk=  0.09375, kpt= -0.3750  0.5000  0.0000 (reduced coord)
  -0.38650   -0.23906   -0.11716   -0.09349    0.04634    0.08408    0.30671    0.32056
   0.38825    0.43760    0.46574    0.49677
      occupation numbers for kpt#   7
   2.00000    2.00000    1.99999    1.99994    0.05739    0.00136    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#   8, nband= 12, wtk=  0.18750, kpt= -0.2500  0.5000  0.1250 (reduced coord)
  -0.38482   -0.23692   -0.13891   -0.10068    0.09679    0.16372    0.20409    0.28030
   0.32878    0.40730    0.42926    0.46503
      occupation numbers for kpt#   8
   2.00000    2.00000    2.00000    1.99997    0.00038    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#   9, nband= 12, wtk=  0.03125, kpt= -0.1250  0.0000  0.0000 (reduced coord)
  -0.45949   -0.07740   -0.01801   -0.01801    0.06112    0.14217    0.14217    0.14725
   0.30642    0.30642    0.31869    0.39146
      occupation numbers for kpt#   9
   2.00000    1.99971    1.89698    1.89698    0.01338    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 kpt#  10, nband= 12, wtk=  0.03125, kpt= -0.3750  0.0000  0.0000 (reduced coord)
  -0.42015   -0.21723   -0.04238   -0.04238    0.04068    0.15639    0.15639    0.27356
   0.33032    0.35051    0.35051    0.51081
      occupation numbers for kpt#  10
   2.00000    2.00000    1.99054    1.99054    0.09884    0.00000    0.00000    0.00000
   0.00000    0.00000    0.00000    0.00000
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
 Next maximum=    9.0036E-02  at reduced coord.    0.1333    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
 Next minimum=    2.7459E-03  at reduced coord.    0.8000    0.7333    0.7333
   Integrated=    8.0000E+00
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.50478868E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.50478868E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.50478868E-04  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure= -1.3254E+01 GPa]
- sigma(1 1)=  1.32535436E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.32535436E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.32535436E+01  sigma(2 1)=  0.00000000E+00
 
================================================================================
== DATASET  2 ==================================================================
-   nproc =    1
 
 
--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...
 
 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.
 
 mkfilename : getden/=0, take file _DEN from output of DATASET   1.
 
 
 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Unit cell volume ucvol=  2.9775400E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
inwffil: examining the header of disk file toptic_1o_DS1_WFK
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20190525 bantot  120 natom    2  |  date 20190525 bantot  120 natom    2
  nkpt  10 nsym 24 ngfft  15,  15,  15  |  nkpt  10 nsym 24 ngfft  15,  15,  15
  ntypat  2 ecut_eff   4.0000000        |  ntypat  2 ecut_eff   4.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.3000000   5.3000000  |     0.0000000   5.3000000   5.3000000
     5.3000000   0.0000000   5.3000000  |     5.3000000   0.0000000   5.3000000
     5.3000000   5.3000000   0.0000000  |     5.3000000   5.3000000   0.0000000
  nband:                                |  nband:
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12                                  |    12
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
    1  2                                |    1  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
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
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0  |   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 2.0 2.0 2.0 2.0 0.0 0.0  |   0.0 0.0 0.0 2.0 2.0 2.0 2.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 2.0 2.0 2.0  |   0.0 0.0 0.0 0.0 0.0 0.0 2.0 2.0 2.0
   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0  |   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 3, input occ=  2.0000000E+00 disk occ=  1.9951376E+00
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 4, input occ=  2.0000000E+00 disk occ=  1.9947597E+00
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 5, input occ=  0.0000000E+00 disk occ=  8.1788354E-04
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 6, input occ=  0.0000000E+00 disk occ=  2.8174888E-05
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 15, input occ=  2.0000000E+00 disk occ=  1.9998632E+00
...
 
The number of warning msgs is sufficient ... stop writing them.
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
   31.00 33.00                          |   31.00 33.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   5.0  |  pspdat 940714 pspcod    1 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file toptic_1o_DS1_WFK
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 1
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 115 nband= 12 for kpt number= 2
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 3
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 4
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 5
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 6
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 7
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 8
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 116 nband= 12 for kpt number= 9
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 10
 initwf: 12 bands have been initialized from disk
 About to read data(r) from: toptic_1o_DS1_DEN
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a density         |  input file contains a density
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20190525 bantot  120 natom    2  |  date 20190525 bantot  120 natom    2
  nkpt  10 nsym 24 ngfft  15,  15,  15  |  nkpt  10 nsym 24 ngfft  15,  15,  15
  ntypat  2 ecut_eff   4.0000000        |  ntypat  2 ecut_eff   4.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.3000000   5.3000000  |     0.0000000   5.3000000   5.3000000
     5.3000000   0.0000000   5.3000000  |     5.3000000   0.0000000   5.3000000
     5.3000000   5.3000000   0.0000000  |     5.3000000   5.3000000   0.0000000
  nband:                                |  nband:
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12                                  |    12
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
    1  2                                |    1  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
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
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0  |   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 2.0 2.0 2.0 2.0 0.0 0.0  |   0.0 0.0 0.0 2.0 2.0 2.0 2.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 2.0 2.0 2.0  |   0.0 0.0 0.0 0.0 0.0 0.0 2.0 2.0 2.0
   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0  |   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 3, input occ=  2.0000000E+00 disk occ=  1.9951376E+00
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 4, input occ=  2.0000000E+00 disk occ=  1.9947597E+00
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 5, input occ=  0.0000000E+00 disk occ=  8.1788354E-04
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 6, input occ=  0.0000000E+00 disk occ=  2.8174888E-05
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 15, input occ=  2.0000000E+00 disk occ=  1.9998632E+00
...
 
The number of warning msgs is sufficient ... stop writing them.
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
   31.00 33.00                          |   31.00 33.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   5.0  |  pspdat 940714 pspcod    1 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
 
================================================================================
 in scfcv_core: results_gs%fermie:   1.111660404713470E-002
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
 vtorho : nnsclo_now=50, note that nnsclo,dbl_nnsclo,istep=0 0 1
 fftdatar_write: About to write data to: toptic_1o_DS2_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
================================================================================
 
 ----iterations are completed or convergence reached----
 
 
 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.1533 [eV], located at k-point      :  -0.1250  0.0000  0.0000
   Fundamental gap     =   1.5973 [eV], Top of valence bands at :  -0.1250  0.0000  0.0000
                                        Bottom of conduction at :  -0.3750  0.0000  0.0000
 Mean square residual over all n,k,spin=   23.288E-06; max=  15.177E-04
  -0.1250 -0.2500  0.0000    1  7.32216E-04 kpt; spin; max resid(k); each band:
  9.69E-21 1.63E-21 1.12E-21 2.67E-21 3.35E-21 1.67E-21 1.75E-21 1.18E-21
  3.18E-21 4.35E-21 1.80E-17 7.32E-04
  -0.1250  0.5000  0.0000    1  1.19883E-06 kpt; spin; max resid(k); each band:
  9.86E-22 3.17E-21 5.75E-21 9.67E-22 3.97E-21 1.91E-21 1.98E-21 6.89E-22
  7.93E-22 5.16E-21 1.62E-11 1.20E-06
  -0.2500 -0.3750  0.0000    1  1.51775E-03 kpt; spin; max resid(k); each band:
  2.69E-21 9.14E-21 3.04E-21 1.65E-21 8.48E-21 4.11E-21 6.03E-21 4.31E-21
  8.34E-22 4.54E-21 4.10E-13 1.52E-03
  -0.1250 -0.3750  0.1250    1  3.86659E-10 kpt; spin; max resid(k); each band:
  1.38E-21 1.08E-21 7.76E-21 3.16E-21 8.34E-21 2.02E-21 9.43E-21 3.76E-21
  6.18E-21 5.81E-21 1.21E-12 3.87E-10
  -0.1250  0.2500  0.0000    1  5.20810E-11 kpt; spin; max resid(k); each band:
  6.46E-22 4.43E-21 3.32E-21 1.50E-21 2.62E-21 3.82E-21 9.33E-22 4.11E-21
  2.96E-21 3.65E-21 7.89E-18 5.21E-11
  -0.2500  0.3750  0.0000    1  5.66854E-05 kpt; spin; max resid(k); each band:
  5.64E-21 4.07E-21 4.65E-21 3.15E-21 3.96E-21 3.80E-22 9.13E-22 1.17E-21
  6.29E-21 1.80E-21 3.30E-10 5.67E-05
  -0.3750  0.5000  0.0000    1  4.35326E-11 kpt; spin; max resid(k); each band:
  5.44E-21 9.54E-22 8.56E-21 6.54E-21 8.37E-21 7.18E-21 8.73E-21 3.54E-21
  5.76E-21 4.01E-21 4.35E-11 6.70E-12
  -0.2500  0.5000  0.1250    1  3.90127E-08 kpt; spin; max resid(k); each band:
  3.25E-21 7.64E-21 4.74E-21 1.85E-21 1.93E-21 6.22E-21 9.97E-21 3.47E-21
  2.90E-21 2.72E-21 2.43E-12 3.90E-08
  -0.1250  0.0000  0.0000    1  5.10482E-09 kpt; spin; max resid(k); each band:
  6.27E-22 3.00E-21 1.06E-21 1.08E-21 2.39E-21 2.51E-21 2.50E-21 4.22E-21
  3.22E-21 3.38E-21 3.52E-19 5.10E-09
  -0.3750  0.0000  0.0000    1  4.86702E-04 kpt; spin; max resid(k); each band:
  3.64E-21 7.72E-21 4.78E-21 4.06E-21 1.07E-21 9.68E-22 1.14E-21 5.83E-21
  4.40E-21 4.57E-21 8.81E-21 4.87E-04
 
 outwf: write wavefunction to file toptic_1o_DS2_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     0.00[s], walltime:     0.00 [s]
 prteigrs : about to open file toptic_1o_DS2_EIG
 Eigenvalues (hartree) for nkpt=  10  k points:
 kpt#   1, nband= 12, wtk=  0.09375, kpt= -0.1250 -0.2500  0.0000 (reduced coord)
  -0.44476   -0.13708   -0.04903   -0.04828    0.08915    0.12284    0.18918    0.18993
   0.26599    0.34231    0.37134    0.41919
 kpt#   2, nband= 12, wtk=  0.09375, kpt= -0.1250  0.5000  0.0000 (reduced coord)
  -0.40480   -0.23765   -0.08476   -0.05698    0.07224    0.14395    0.17798    0.27432
   0.34017    0.41251    0.42317    0.45801
 kpt#   3, nband= 12, wtk=  0.09375, kpt= -0.2500 -0.3750  0.0000 (reduced coord)
  -0.41673   -0.19492   -0.09273   -0.07734    0.06495    0.11155    0.22482    0.25227
   0.34018    0.40905    0.44455    0.50792
 kpt#   4, nband= 12, wtk=  0.18750, kpt= -0.1250 -0.3750  0.1250 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#   5, nband= 12, wtk=  0.09375, kpt= -0.1250  0.2500  0.0000 (reduced coord)
  -0.43063   -0.17906   -0.08206   -0.03250    0.08590    0.16120    0.16375    0.21753
   0.27395    0.35154    0.39196    0.46689
 kpt#   6, nband= 12, wtk=  0.09375, kpt= -0.2500  0.3750  0.0000 (reduced coord)
  -0.39351   -0.23294   -0.13838   -0.06706    0.07707    0.19454    0.22350    0.25851
   0.30271    0.33066    0.45864    0.54261
 kpt#   7, nband= 12, wtk=  0.09375, kpt= -0.3750  0.5000  0.0000 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#   8, nband= 12, wtk=  0.18750, kpt= -0.2500  0.5000  0.1250 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52302
 kpt#   9, nband= 12, wtk=  0.03125, kpt= -0.1250  0.0000  0.0000 (reduced coord)
  -0.45947   -0.07738   -0.01799   -0.01799    0.06114    0.14220    0.14220    0.14728
   0.30644    0.30644    0.31871    0.39148
 kpt#  10, nband= 12, wtk=  0.03125, kpt= -0.3750  0.0000  0.0000 (reduced coord)
  -0.42013   -0.21721   -0.04236   -0.04236    0.04071    0.15641    0.15641    0.27358
   0.33035    0.35053    0.35053    0.51216
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
 Next maximum=    9.0036E-02  at reduced coord.    0.1333    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
 Next minimum=    2.7459E-03  at reduced coord.    0.8000    0.7333    0.7333
   Integrated=    8.0000E+00
 
================================================================================
== DATASET  3 ==================================================================
-   nproc =    1
 
 
--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...
 
 mkfilename : getwfk/=0, take file _WFK from output of DATASET   2.
 
 mkfilename : getden/=0, take file _DEN from output of DATASET   1.
 
 
 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Unit cell volume ucvol=  2.9775400E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
inwffil: examining the header of disk file toptic_1o_DS2_WFK
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20190525 bantot 3072 natom    2  |  date 20190525 bantot  120 natom    2
  nkpt 256 nsym 24 ngfft  15,  15,  15  |  nkpt  10 nsym 24 ngfft  15,  15,  15
  ntypat  2 ecut_eff   4.0000000        |  ntypat  2 ecut_eff   4.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.3000000   5.3000000  |     0.0000000   5.3000000   5.3000000
     5.3000000   0.0000000   5.3000000  |     5.3000000   0.0000000   5.3000000
     5.3000000   5.3000000   0.0000000  |     5.3000000   5.3000000   0.0000000
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4054
message: |
    input nkpt=256 not equal disk file nkpt=10
...
 
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
    1  2                                |    1  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4300
message: |
    input kptopt= 3  /= disk file kptopt= 1
...
 
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
   31.00 33.00                          |   31.00 33.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   5.0  |  pspdat 940714 pspcod    1 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4595
message: |
    Restart of self-consistent calculation need translated wavefunctions.
...
 
  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the number, position, or weight of k-points
        * the format of wavefunctions (istwfk)
================================================================================
-inwffil : will read wavefunctions from disk file toptic_1o_DS2_WFK
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 1
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 115 nband= 12 for kpt number= 2
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 3
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 4
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 5
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 6
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 7
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 8
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 116 nband= 12 for kpt number= 9
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 10
 initwf: 12 bands have been initialized from disk
- newkpt: read input wf with ikpt,npw=   1     119, make ikpt,npw=   1     119
- newkpt: read input wf with ikpt,npw=   1     119, make ikpt,npw=   2     119
- newkpt: read input wf with ikpt,npw=   1     119, make ikpt,npw=   3     119
- newkpt: read input wf with ikpt,npw=   2     115, make ikpt,npw=   4     115
- newkpt: read input wf with ikpt,npw=   3     118, make ikpt,npw=   5     118
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=   6     114
- newkpt: read input wf with ikpt,npw=   3     118, make ikpt,npw=   7     118
- newkpt: read input wf with ikpt,npw=   3     118, make ikpt,npw=   8     118
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=   9     114
- newkpt: read input wf with ikpt,npw=   2     115, make ikpt,npw=  10     115
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=  11     114
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=  12     114
- newkpt: read input wf with ikpt,npw=   2     115, make ikpt,npw=  13     115
- newkpt: read input wf with ikpt,npw=   5     112, make ikpt,npw=  14     112
- newkpt: read input wf with ikpt,npw=   6     111, make ikpt,npw=  15     111
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=  16     114
- newkpt: read input wf with ikpt,npw=   7     112, make ikpt,npw=  17     112
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  18     110
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  19     110
- newkpt: read input wf with ikpt,npw=   7     112, make ikpt,npw=  20     112
- newkpt: read input wf with ikpt,npw=   7     112, make ikpt,npw=  21     112
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  22     110
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  23     110
- newkpt: read input wf with ikpt,npw=   6     111, make ikpt,npw=  24     111
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  25     110
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  26     110
- newkpt: read input wf with ikpt,npw=   6     111, make ikpt,npw=  27     111
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=  28     114
- newkpt: read input wf with ikpt,npw=   5     112, make ikpt,npw=  29     112
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=  30     114
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  31     110
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  32     110
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=  33     114
- newkpt: read input wf with ikpt,npw=   5     112, make ikpt,npw=  34     112
- newkpt: read input wf with ikpt,npw=   9     116, make ikpt,npw=  35     116
- newkpt: read input wf with ikpt,npw=   5     112, make ikpt,npw=  36     112
- newkpt: read input wf with ikpt,npw=   1     119, make ikpt,npw=  37     119
- newkpt: read input wf with ikpt,npw=   6     111, make ikpt,npw=  38     111
- newkpt: read input wf with ikpt,npw=   4     114, make ikpt,npw=  39     114
- newkpt: read input wf with ikpt,npw=   3     118, make ikpt,npw=  40     118
- newkpt: read input wf with ikpt,npw=   7     112, make ikpt,npw=  41     112
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  42     110
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  43     110
- newkpt: read input wf with ikpt,npw=   7     112, make ikpt,npw=  44     112
- newkpt: read input wf with ikpt,npw=   7     112, make ikpt,npw=  45     112
- newkpt: read input wf with ikpt,npw=   7     112, make ikpt,npw=  46     112
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  47     110
- newkpt: read input wf with ikpt,npw=   8     110, make ikpt,npw=  48     110
- newkpt: read input wf with ikpt,npw=   7     112, make ikpt,npw=  49     112
- newkpt: read input wf with ikpt,npw=   6     111, make ikpt,npw=  50     111
- newkpt : prtvol=0 or 1, do not print more k-points.
 About to read data(r) from: toptic_1o_DS1_DEN
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a density         |  input file contains a density
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20190525 bantot 3072 natom    2  |  date 20190525 bantot  120 natom    2
  nkpt 256 nsym 24 ngfft  15,  15,  15  |  nkpt  10 nsym 24 ngfft  15,  15,  15
  ntypat  2 ecut_eff   4.0000000        |  ntypat  2 ecut_eff   4.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.3000000   5.3000000  |     0.0000000   5.3000000   5.3000000
     5.3000000   0.0000000   5.3000000  |     5.3000000   0.0000000   5.3000000
     5.3000000   5.3000000   0.0000000  |     5.3000000   5.3000000   0.0000000
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
    1  2                                |    1  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4300
message: |
    input kptopt= 3  /= disk file kptopt= 1
...
 
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
   31.00 33.00                          |   31.00 33.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   5.0  |  pspdat 940714 pspcod    1 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
 
================================================================================
 in scfcv_core: results_gs%fermie:   1.111660404713470E-002
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
 vtorho : nnsclo_now=50, note that nnsclo,dbl_nnsclo,istep=0 0 1
 fftdatar_write: About to write data to: toptic_1o_DS3_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
================================================================================
 
 ----iterations are completed or convergence reached----
 
 
 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.1533 [eV], located at k-point      :   0.0000 -0.1250  0.0000
   Fundamental gap     =   1.5973 [eV], Top of valence bands at :   0.0000 -0.1250  0.0000
                                        Bottom of conduction at :   0.3750  0.0000  0.0000
 Mean square residual over all n,k,spin=   73.622E-06; max=  86.386E-04
  -0.1250 -0.2500  0.0000    1  3.55289E-04 kpt; spin; max resid(k); each band:
  9.69E-21 1.63E-21 1.12E-21 2.67E-21 3.34E-21 1.67E-21 1.75E-21 1.16E-21
  3.14E-21 4.26E-21 1.55E-18 3.55E-04
  -0.2500 -0.1250  0.0000    1  3.55289E-04 kpt; spin; max resid(k); each band:
  9.71E-21 1.64E-21 1.15E-21 2.69E-21 3.35E-21 1.71E-21 1.78E-21 1.19E-21
  3.25E-21 4.36E-21 1.56E-18 3.55E-04
  -0.1250 -0.1250  0.1250    1  3.55289E-04 kpt; spin; max resid(k); each band:
  9.69E-21 1.64E-21 1.15E-21 2.66E-21 3.34E-21 1.72E-21 1.78E-21 1.16E-21
  3.17E-21 4.13E-21 1.55E-18 3.55E-04
  -0.1250  0.5000  0.0000    1  1.01024E-06 kpt; spin; max resid(k); each band:
  9.86E-22 3.17E-21 5.75E-21 9.67E-22 3.97E-21 1.91E-21 1.98E-21 6.89E-22
  7.93E-22 5.16E-21 1.62E-14 1.01E-06
  -0.2500 -0.3750  0.0000    1  8.18704E-05 kpt; spin; max resid(k); each band:
  2.69E-21 9.15E-21 3.03E-21 1.65E-21 8.46E-21 4.09E-21 6.01E-21 4.31E-21
  8.07E-22 4.13E-21 5.54E-13 8.19E-05
  -0.1250 -0.3750  0.1250    1  5.55339E-09 kpt; spin; max resid(k); each band:
  1.38E-21 1.08E-21 7.76E-21 3.16E-21 8.34E-21 2.02E-21 9.43E-21 3.76E-21
  6.18E-21 5.81E-21 5.17E-13 5.55E-09
  -0.3750 -0.2500  0.0000    1  8.18704E-05 kpt; spin; max resid(k); each band:
  2.69E-21 9.20E-21 3.04E-21 1.67E-21 8.51E-21 4.09E-21 6.01E-21 4.39E-21
  8.24E-22 4.09E-21 5.54E-13 8.19E-05
  -0.2500 -0.2500  0.1250    1  8.18704E-05 kpt; spin; max resid(k); each band:
  2.71E-21 9.15E-21 3.08E-21 1.61E-21 8.46E-21 4.17E-21 6.04E-21 4.33E-21
  9.09E-22 4.24E-21 5.54E-13 8.19E-05
  -0.1250 -0.2500  0.2500    1  5.55340E-09 kpt; spin; max resid(k); each band:
  1.38E-21 1.09E-21 7.74E-21 3.16E-21 8.32E-21 2.05E-21 9.34E-21 3.74E-21
  6.18E-21 5.86E-21 5.17E-13 5.55E-09
   0.5000 -0.1250  0.0000    1  1.01024E-06 kpt; spin; max resid(k); each band:
  1.01E-21 3.17E-21 5.80E-21 9.73E-22 4.03E-21 1.88E-21 2.01E-21 7.04E-22
  7.93E-22 5.13E-21 1.62E-14 1.01E-06
  -0.3750 -0.1250  0.1250    1  5.55338E-09 kpt; spin; max resid(k); each band:
  1.40E-21 1.08E-21 7.76E-21 3.22E-21 8.39E-21 2.03E-21 9.51E-21 3.76E-21
  6.18E-21 5.86E-21 5.17E-13 5.55E-09
  -0.2500 -0.1250  0.2500    1  5.55342E-09 kpt; spin; max resid(k); each band:
  1.39E-21 1.09E-21 7.75E-21 3.21E-21 8.41E-21 2.05E-21 9.40E-21 3.81E-21
  6.23E-21 5.93E-21 5.17E-13 5.55E-09
  -0.1250 -0.1250  0.3750    1  1.01024E-06 kpt; spin; max resid(k); each band:
  1.00E-21 3.20E-21 5.75E-21 9.63E-22 3.97E-21 1.98E-21 1.98E-21 7.21E-22
  8.22E-22 5.20E-21 1.62E-14 1.01E-06
  -0.1250  0.2500  0.0000    1  2.47920E-10 kpt; spin; max resid(k); each band:
  6.46E-22 4.43E-21 3.32E-21 1.50E-21 2.62E-21 3.82E-21 9.33E-22 4.11E-21
  2.96E-21 3.65E-21 1.17E-18 2.48E-10
  -0.2500  0.3750  0.0000    1  8.63860E-03 kpt; spin; max resid(k); each band:
  5.64E-21 4.07E-21 4.65E-21 3.15E-21 3.96E-21 3.80E-22 9.13E-22 1.17E-21
  6.29E-21 1.80E-21 5.73E-11 8.64E-03
  -0.1250  0.3750  0.1250    1  5.55342E-09 kpt; spin; max resid(k); each band:
  1.43E-21 1.11E-21 7.75E-21 3.29E-21 8.41E-21 2.08E-21 9.52E-21 3.85E-21
  6.21E-21 5.99E-21 5.17E-13 5.55E-09
  -0.3750  0.5000  0.0000    1  7.35608E-11 kpt; spin; max resid(k); each band:
  5.44E-21 9.54E-22 8.56E-21 6.54E-21 8.37E-21 7.18E-21 8.73E-21 3.54E-21
  5.76E-21 4.01E-21 6.93E-11 7.36E-11
  -0.2500  0.5000  0.1250    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.25E-21 7.64E-21 4.74E-21 1.85E-21 1.93E-21 6.22E-21 9.97E-21 3.47E-21
  2.90E-21 2.72E-21 6.41E-13 5.13E-06
  -0.1250  0.5000  0.2500    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.29E-21 7.65E-21 4.77E-21 1.86E-21 1.88E-21 6.25E-21 1.31E-21 3.54E-21
  3.04E-21 2.76E-21 6.41E-13 5.13E-06
   0.5000 -0.3750  0.0000    1  7.35607E-11 kpt; spin; max resid(k); each band:
  5.48E-21 9.53E-22 8.55E-21 6.55E-21 8.32E-21 7.15E-21 8.78E-21 3.61E-21
  5.74E-21 4.04E-21 6.93E-11 7.36E-11
  -0.3750 -0.3750  0.1250    1  7.35608E-11 kpt; spin; max resid(k); each band:
  5.46E-21 9.58E-22 8.70E-21 6.47E-21 8.37E-21 7.27E-21 8.81E-21 3.54E-21
  5.91E-21 4.02E-21 6.93E-11 7.36E-11
  -0.2500 -0.3750  0.2500    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.27E-21 7.64E-21 4.74E-21 1.82E-21 1.89E-21 6.17E-21 9.99E-21 3.47E-21
  2.87E-21 2.74E-21 6.41E-13 5.13E-06
  -0.1250 -0.3750  0.3750    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.28E-21 7.67E-21 4.75E-21 1.82E-21 1.86E-21 6.22E-21 9.96E-21 3.54E-21
  3.01E-21 2.72E-21 6.41E-13 5.13E-06
   0.3750 -0.2500  0.0000    1  8.63860E-03 kpt; spin; max resid(k); each band:
  5.66E-21 4.07E-21 4.66E-21 3.19E-21 3.96E-21 4.10E-22 9.14E-22 1.22E-21
  6.25E-21 1.89E-21 5.73E-11 8.64E-03
   0.5000 -0.2500  0.1250    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.24E-21 7.65E-21 4.77E-21 1.87E-21 1.93E-21 6.27E-21 1.29E-21 3.48E-21
  2.94E-21 2.82E-21 6.41E-13 5.13E-06
  -0.3750 -0.2500  0.2500    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.27E-21 7.65E-21 4.73E-21 1.86E-21 1.91E-21 6.19E-21 9.98E-21 3.49E-21
  2.98E-21 2.66E-21 6.41E-13 5.13E-06
  -0.2500 -0.2500  0.3750    1  8.63860E-03 kpt; spin; max resid(k); each band:
  5.61E-21 4.10E-21 4.66E-21 3.15E-21 3.98E-21 4.14E-22 9.19E-22 1.19E-21
  6.32E-21 1.82E-21 5.73E-11 8.64E-03
  -0.1250 -0.2500  0.5000    1  5.55340E-09 kpt; spin; max resid(k); each band:
  1.41E-21 1.09E-21 7.74E-21 3.22E-21 8.36E-21 2.09E-21 9.46E-21 3.81E-21
  6.20E-21 6.00E-21 5.17E-13 5.55E-09
   0.2500 -0.1250  0.0000    1  2.47920E-10 kpt; spin; max resid(k); each band:
  6.69E-22 4.46E-21 3.34E-21 1.51E-21 2.68E-21 3.83E-21 9.69E-22 4.20E-21
  3.00E-21 3.78E-21 1.18E-18 2.48E-10
   0.3750 -0.1250  0.1250    1  5.55339E-09 kpt; spin; max resid(k); each band:
  1.43E-21 1.10E-21 7.75E-21 3.28E-21 8.43E-21 2.06E-21 9.56E-21 3.81E-21
  6.20E-21 5.95E-21 5.17E-13 5.55E-09
   0.5000 -0.1250  0.2500    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.26E-21 7.65E-21 4.78E-21 1.88E-21 1.90E-21 6.29E-21 1.34E-21 3.51E-21
  3.01E-21 2.84E-21 6.41E-13 5.13E-06
  -0.3750 -0.1250  0.3750    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.25E-21 7.68E-21 4.73E-21 1.85E-21 1.90E-21 6.23E-21 9.91E-21 3.52E-21
  3.05E-21 2.61E-21 6.41E-13 5.13E-06
  -0.2500 -0.1250  0.5000    1  5.55340E-09 kpt; spin; max resid(k); each band:
  1.40E-21 1.08E-21 7.75E-21 3.21E-21 8.41E-21 2.06E-21 9.48E-21 3.84E-21
  6.24E-21 6.00E-21 5.17E-13 5.55E-09
  -0.1250 -0.1250 -0.3750    1  2.47920E-10 kpt; spin; max resid(k); each band:
  6.37E-22 4.40E-21 3.38E-21 1.50E-21 2.64E-21 3.86E-21 9.53E-22 4.03E-21
  2.98E-21 3.61E-21 1.18E-18 2.48E-10
  -0.1250  0.0000  0.0000    1  2.96180E-09 kpt; spin; max resid(k); each band:
  6.27E-22 3.00E-21 1.06E-21 1.08E-21 2.39E-21 2.51E-21 2.50E-21 4.22E-21
  3.22E-21 3.38E-21 2.12E-20 2.96E-09
  -0.2500  0.1250  0.0000    1  2.47920E-10 kpt; spin; max resid(k); each band:
  6.69E-22 4.46E-21 3.34E-21 1.51E-21 2.68E-21 3.83E-21 9.69E-22 4.20E-21
  3.00E-21 3.78E-21 1.18E-18 2.48E-10
  -0.1250  0.1250  0.1250    1  3.55289E-04 kpt; spin; max resid(k); each band:
  9.72E-21 1.66E-21 1.17E-21 2.64E-21 3.38E-21 1.72E-21 1.74E-21 1.23E-21
  3.06E-21 4.50E-21 1.55E-18 3.55E-04
  -0.3750  0.2500  0.0000    1  8.63860E-03 kpt; spin; max resid(k); each band:
  5.66E-21 4.07E-21 4.66E-21 3.19E-21 3.96E-21 4.10E-22 9.14E-22 1.22E-21
  6.25E-21 1.89E-21 5.73E-11 8.64E-03
  -0.2500  0.2500  0.1250    1  5.55340E-09 kpt; spin; max resid(k); each band:
  1.43E-21 1.10E-21 7.76E-21 3.29E-21 8.42E-21 2.04E-21 9.61E-21 3.83E-21
  6.26E-21 5.94E-21 5.17E-13 5.55E-09
  -0.1250  0.2500  0.2500    1  8.18704E-05 kpt; spin; max resid(k); each band:
  2.68E-21 9.15E-21 3.04E-21 1.63E-21 8.53E-21 4.09E-21 6.12E-21 4.28E-21
  8.33E-22 4.02E-21 5.54E-13 8.19E-05
   0.5000  0.3750  0.0000    1  7.35607E-11 kpt; spin; max resid(k); each band:
  5.48E-21 9.53E-22 8.55E-21 6.55E-21 8.32E-21 7.15E-21 8.78E-21 3.61E-21
  5.74E-21 4.04E-21 6.93E-11 7.36E-11
  -0.3750  0.3750  0.1250    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.26E-21 7.62E-21 4.75E-21 1.88E-21 1.94E-21 6.25E-21 1.29E-21 3.49E-21
  2.88E-21 2.80E-21 6.41E-13 5.13E-06
  -0.2500  0.3750  0.2500    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.27E-21 7.65E-21 4.77E-21 1.87E-21 1.90E-21 6.33E-21 1.32E-21 3.53E-21
  3.02E-21 2.76E-21 6.41E-13 5.13E-06
  -0.1250  0.3750  0.3750    1  7.35608E-11 kpt; spin; max resid(k); each band:
  5.49E-21 9.76E-22 8.52E-21 6.54E-21 8.28E-21 7.14E-21 8.83E-21 3.53E-21
  5.75E-21 4.06E-21 6.93E-11 7.36E-11
   0.3750  0.5000  0.0000    1  7.35608E-11 kpt; spin; max resid(k); each band:
  5.44E-21 9.54E-22 8.56E-21 6.54E-21 8.37E-21 7.18E-21 8.73E-21 3.54E-21
  5.76E-21 4.01E-21 6.93E-11 7.36E-11
   0.5000  0.5000  0.1250    1  7.35607E-11 kpt; spin; max resid(k); each band:
  5.50E-21 9.56E-22 8.68E-21 6.47E-21 8.32E-21 7.24E-21 8.87E-21 3.62E-21
  5.88E-21 4.04E-21 6.93E-11 7.36E-11
  -0.3750  0.5000  0.2500    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.29E-21 7.62E-21 4.76E-21 1.86E-21 1.91E-21 6.19E-21 1.29E-21 3.50E-21
  2.87E-21 2.80E-21 6.41E-13 5.13E-06
  -0.2500  0.5000  0.3750    1  5.12693E-06 kpt; spin; max resid(k); each band:
  3.25E-21 7.66E-21 4.75E-21 1.83E-21 1.89E-21 6.29E-21 9.94E-21 3.53E-21
  3.01E-21 2.69E-21 6.41E-13 5.13E-06
  -0.1250  0.5000  0.5000    1  7.35607E-11 kpt; spin; max resid(k); each band:
  5.46E-21 9.85E-22 8.53E-21 6.52E-21 8.34E-21 7.19E-21 8.79E-21 3.59E-21
  5.84E-21 4.05E-21 6.93E-11 7.36E-11
   0.2500 -0.3750  0.0000    1  8.63860E-03 kpt; spin; max resid(k); each band:
  5.64E-21 4.07E-21 4.65E-21 3.15E-21 3.96E-21 3.80E-22 9.13E-22 1.17E-21
  6.29E-21 1.80E-21 5.73E-11 8.64E-03
 outwf : prtvol=0 or 1, do not print more k-points.
 
 
 outwf: write wavefunction to file toptic_1o_DS3_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     0.01[s], walltime:     0.01 [s]
 prteigrs : about to open file toptic_1o_DS3_EIG
 Eigenvalues (hartree) for nkpt= 256  k points:
 kpt#   1, nband= 12, wtk=  0.00391, kpt= -0.1250 -0.2500  0.0000 (reduced coord)
  -0.44476   -0.13708   -0.04903   -0.04828    0.08915    0.12284    0.18918    0.18993
   0.26599    0.34231    0.37134    0.43159
 kpt#   2, nband= 12, wtk=  0.00391, kpt= -0.2500 -0.1250  0.0000 (reduced coord)
  -0.44476   -0.13708   -0.04903   -0.04828    0.08915    0.12284    0.18918    0.18993
   0.26599    0.34231    0.37134    0.43159
 kpt#   3, nband= 12, wtk=  0.00391, kpt= -0.1250 -0.1250  0.1250 (reduced coord)
  -0.44476   -0.13708   -0.04903   -0.04828    0.08915    0.12284    0.18918    0.18993
   0.26599    0.34231    0.37134    0.43159
 kpt#   4, nband= 12, wtk=  0.00391, kpt= -0.1250  0.5000  0.0000 (reduced coord)
  -0.40480   -0.23765   -0.08476   -0.05698    0.07224    0.14395    0.17798    0.27432
   0.34017    0.41251    0.42317    0.45800
 kpt#   5, nband= 12, wtk=  0.00391, kpt= -0.2500 -0.3750  0.0000 (reduced coord)
  -0.41673   -0.19492   -0.09273   -0.07734    0.06495    0.11155    0.22482    0.25227
   0.34018    0.40905    0.44455    0.51126
 kpt#   6, nband= 12, wtk=  0.00391, kpt= -0.1250 -0.3750  0.1250 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#   7, nband= 12, wtk=  0.00391, kpt= -0.3750 -0.2500  0.0000 (reduced coord)
  -0.41673   -0.19492   -0.09273   -0.07734    0.06495    0.11155    0.22482    0.25227
   0.34018    0.40905    0.44455    0.51126
 kpt#   8, nband= 12, wtk=  0.00391, kpt= -0.2500 -0.2500  0.1250 (reduced coord)
  -0.41673   -0.19492   -0.09273   -0.07734    0.06495    0.11155    0.22482    0.25227
   0.34018    0.40905    0.44455    0.51126
 kpt#   9, nband= 12, wtk=  0.00391, kpt= -0.1250 -0.2500  0.2500 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#  10, nband= 12, wtk=  0.00391, kpt=  0.5000 -0.1250  0.0000 (reduced coord)
  -0.40480   -0.23765   -0.08476   -0.05698    0.07224    0.14395    0.17798    0.27432
   0.34017    0.41251    0.42317    0.45800
 kpt#  11, nband= 12, wtk=  0.00391, kpt= -0.3750 -0.1250  0.1250 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#  12, nband= 12, wtk=  0.00391, kpt= -0.2500 -0.1250  0.2500 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#  13, nband= 12, wtk=  0.00391, kpt= -0.1250 -0.1250  0.3750 (reduced coord)
  -0.40480   -0.23765   -0.08476   -0.05698    0.07224    0.14395    0.17798    0.27432
   0.34017    0.41251    0.42317    0.45800
 kpt#  14, nband= 12, wtk=  0.00391, kpt= -0.1250  0.2500  0.0000 (reduced coord)
  -0.43063   -0.17906   -0.08206   -0.03250    0.08590    0.16120    0.16375    0.21753
   0.27395    0.35154    0.39196    0.46689
 kpt#  15, nband= 12, wtk=  0.00391, kpt= -0.2500  0.3750  0.0000 (reduced coord)
  -0.39351   -0.23294   -0.13838   -0.06706    0.07707    0.19454    0.22350    0.25851
   0.30271    0.33066    0.45864    0.46083
 kpt#  16, nband= 12, wtk=  0.00391, kpt= -0.1250  0.3750  0.1250 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#  17, nband= 12, wtk=  0.00391, kpt= -0.3750  0.5000  0.0000 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#  18, nband= 12, wtk=  0.00391, kpt= -0.2500  0.5000  0.1250 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  19, nband= 12, wtk=  0.00391, kpt= -0.1250  0.5000  0.2500 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  20, nband= 12, wtk=  0.00391, kpt=  0.5000 -0.3750  0.0000 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#  21, nband= 12, wtk=  0.00391, kpt= -0.3750 -0.3750  0.1250 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#  22, nband= 12, wtk=  0.00391, kpt= -0.2500 -0.3750  0.2500 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  23, nband= 12, wtk=  0.00391, kpt= -0.1250 -0.3750  0.3750 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  24, nband= 12, wtk=  0.00391, kpt=  0.3750 -0.2500  0.0000 (reduced coord)
  -0.39351   -0.23294   -0.13838   -0.06706    0.07707    0.19454    0.22350    0.25851
   0.30271    0.33066    0.45864    0.46083
 kpt#  25, nband= 12, wtk=  0.00391, kpt=  0.5000 -0.2500  0.1250 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  26, nband= 12, wtk=  0.00391, kpt= -0.3750 -0.2500  0.2500 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  27, nband= 12, wtk=  0.00391, kpt= -0.2500 -0.2500  0.3750 (reduced coord)
  -0.39351   -0.23294   -0.13838   -0.06706    0.07707    0.19454    0.22350    0.25851
   0.30271    0.33066    0.45864    0.46083
 kpt#  28, nband= 12, wtk=  0.00391, kpt= -0.1250 -0.2500  0.5000 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#  29, nband= 12, wtk=  0.00391, kpt=  0.2500 -0.1250  0.0000 (reduced coord)
  -0.43063   -0.17906   -0.08206   -0.03250    0.08590    0.16120    0.16375    0.21753
   0.27395    0.35154    0.39196    0.46689
 kpt#  30, nband= 12, wtk=  0.00391, kpt=  0.3750 -0.1250  0.1250 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#  31, nband= 12, wtk=  0.00391, kpt=  0.5000 -0.1250  0.2500 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  32, nband= 12, wtk=  0.00391, kpt= -0.3750 -0.1250  0.3750 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  33, nband= 12, wtk=  0.00391, kpt= -0.2500 -0.1250  0.5000 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#  34, nband= 12, wtk=  0.00391, kpt= -0.1250 -0.1250 -0.3750 (reduced coord)
  -0.43063   -0.17906   -0.08206   -0.03250    0.08590    0.16120    0.16375    0.21753
   0.27395    0.35154    0.39196    0.46689
 kpt#  35, nband= 12, wtk=  0.00391, kpt= -0.1250  0.0000  0.0000 (reduced coord)
  -0.45947   -0.07738   -0.01799   -0.01799    0.06114    0.14220    0.14220    0.14728
   0.30644    0.30644    0.31871    0.39148
 kpt#  36, nband= 12, wtk=  0.00391, kpt= -0.2500  0.1250  0.0000 (reduced coord)
  -0.43063   -0.17906   -0.08206   -0.03250    0.08590    0.16120    0.16375    0.21753
   0.27395    0.35154    0.39196    0.46689
 kpt#  37, nband= 12, wtk=  0.00391, kpt= -0.1250  0.1250  0.1250 (reduced coord)
  -0.44476   -0.13708   -0.04903   -0.04828    0.08915    0.12284    0.18918    0.18993
   0.26599    0.34231    0.37134    0.43159
 kpt#  38, nband= 12, wtk=  0.00391, kpt= -0.3750  0.2500  0.0000 (reduced coord)
  -0.39351   -0.23294   -0.13838   -0.06706    0.07707    0.19454    0.22350    0.25851
   0.30271    0.33066    0.45864    0.46083
 kpt#  39, nband= 12, wtk=  0.00391, kpt= -0.2500  0.2500  0.1250 (reduced coord)
  -0.40720   -0.21597   -0.11627   -0.06795    0.10746    0.14197    0.19110    0.23854
   0.33382    0.38457    0.44194    0.48306
 kpt#  40, nband= 12, wtk=  0.00391, kpt= -0.1250  0.2500  0.2500 (reduced coord)
  -0.41673   -0.19492   -0.09273   -0.07734    0.06495    0.11155    0.22482    0.25227
   0.34018    0.40905    0.44455    0.51126
 kpt#  41, nband= 12, wtk=  0.00391, kpt=  0.5000  0.3750  0.0000 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#  42, nband= 12, wtk=  0.00391, kpt= -0.3750  0.3750  0.1250 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  43, nband= 12, wtk=  0.00391, kpt= -0.2500  0.3750  0.2500 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  44, nband= 12, wtk=  0.00391, kpt= -0.1250  0.3750  0.3750 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#  45, nband= 12, wtk=  0.00391, kpt=  0.3750  0.5000  0.0000 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#  46, nband= 12, wtk=  0.00391, kpt=  0.5000  0.5000  0.1250 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#  47, nband= 12, wtk=  0.00391, kpt= -0.3750  0.5000  0.2500 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  48, nband= 12, wtk=  0.00391, kpt= -0.2500  0.5000  0.3750 (reduced coord)
  -0.38480   -0.23690   -0.13889   -0.10066    0.09681    0.16374    0.20411    0.28032
   0.32880    0.42928    0.46474    0.52295
 kpt#  49, nband= 12, wtk=  0.00391, kpt= -0.1250  0.5000  0.5000 (reduced coord)
  -0.38647   -0.23904   -0.11714   -0.09346    0.04636    0.08410    0.30673    0.32058
   0.38828    0.43763    0.46748    0.49669
 kpt#  50, nband= 12, wtk=  0.00391, kpt=  0.2500 -0.3750  0.0000 (reduced coord)
  -0.39351   -0.23294   -0.13838   -0.06706    0.07707    0.19454    0.22350    0.25851
   0.30271    0.33066    0.45864    0.46083
 prteigrs : prtvol=0 or 1, do not print more k-points.
 
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
 Next maximum=    9.0036E-02  at reduced coord.    0.1333    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
 Next minimum=    2.7459E-03  at reduced coord.    0.8000    0.7333    0.7333
   Integrated=    8.0000E+00
 
================================================================================
== DATASET  4 ==================================================================
-   nproc =    1
 
 
--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...
 
 mkfilename : getwfk/=0, take file _WFK from output of DATASET   3.
 
 
 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)
 
 Unit cell volume ucvol=  2.9775400E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 setup1 : take into account q-point for computing boxcut.
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
inwffil: examining the header of disk file toptic_1o_DS3_WFK
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20190525 bantot 3072 natom    2  |  date 20190525 bantot 3072 natom    2
  nkpt 256 nsym 24 ngfft  15,  15,  15  |  nkpt 256 nsym 24 ngfft  15,  15,  15
  ntypat  2 ecut_eff   4.0000000        |  ntypat  2 ecut_eff   4.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.3000000   5.3000000  |     0.0000000   5.3000000   5.3000000
     5.3000000   0.0000000   5.3000000  |     5.3000000   0.0000000   5.3000000
     5.3000000   5.3000000   0.0000000  |     5.3000000   5.3000000   0.0000000
  nband:                                |  nband:
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
=> stop printing nband after 100 values
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
    1  2                                |    1  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
=> stop printing istwfk after 100 values
  kpt:                                  |  kpt:
    -0.1250000  -0.2500000   0.0000000  |    -0.1250000  -0.2500000   0.0000000
    -0.2500000  -0.1250000   0.0000000  |    -0.2500000  -0.1250000   0.0000000
    -0.1250000  -0.1250000   0.1250000  |    -0.1250000  -0.1250000   0.1250000
    -0.1250000   0.5000000   0.0000000  |    -0.1250000   0.5000000   0.0000000
    -0.2500000  -0.3750000   0.0000000  |    -0.2500000  -0.3750000   0.0000000
  wtk:                                  |  wtk:
    0.004  0.004  0.004  0.004  0.004   |    0.004  0.004  0.004  0.004  0.004
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0  |   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 2.0 2.0 2.0 2.0 0.0 0.0  |   0.0 0.0 0.0 2.0 2.0 2.0 2.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 2.0 2.0 2.0  |   0.0 0.0 0.0 0.0 0.0 0.0 2.0 2.0 2.0
   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0  |   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0
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
   31.00 33.00                          |   31.00 33.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   5.0  |  pspdat 940714 pspcod    1 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file toptic_1o_DS3_WFK
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 1
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 2
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 3
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 115 nband= 12 for kpt number= 4
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 5
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 6
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 7
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 8
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 9
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 115 nband= 12 for kpt number= 10
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 11
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 12
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 115 nband= 12 for kpt number= 13
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 14
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 15
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 16
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 17
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 18
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 19
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 20
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 21
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 22
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 23
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 24
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 25
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 26
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 27
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 28
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 29
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 30
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 31
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 32
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 33
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 34
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 116 nband= 12 for kpt number= 35
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 36
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 37
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 38
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 39
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 40
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 41
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 42
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 43
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 44
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 45
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 46
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 47
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 48
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 49
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 50
 initwf: 12 bands have been initialized from disk
 initwf: the number of similar message is sufficient... stop printing them
 
 respfn : eigen0 array
 newocc: new Fermi energy is       0.011138 , with nelect=      8.000000
  Number of bissection calls =  44
 newocc : computed new occ. numbers for occopt= 3 , spin-unpolarized case.
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.998 0.004 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.897 1.897 0.013 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.975 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 1.995 1.995 0.001 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.009 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 2.000 0.057 0.001 0.000 0.000 0.000 0.000 0.000 0.000
 2.000 2.000 2.000 1.999 0.003 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 newocc: prtvol=0, stop printing more k-point information
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.0036E-02  at reduced coord.    0.2000    0.2000    0.4667
      Minimum=    2.7459E-03  at reduced coord.    0.7333    0.7333    0.7333
   Integrated=    8.0000E+00
 
 ==>  initialize data related to q vector <== 
 
 respfn : the norm of the phonon wavelength (as input) was small (<1.d-7).
  q has been set exactly to (0 0 0)
 The list of irreducible perturbations for this q vector is:
    1)    idir= 1    ipert=   3
 
================================================================================
 Real(R)+Recip(G) space primitive vectors, cartesian coordinates (Bohr,Bohr^-1):
 R(1)=  0.0000000  5.3000000  5.3000000  G(1)= -0.0943396  0.0943396  0.0943396
 R(2)=  5.3000000  0.0000000  5.3000000  G(2)=  0.0943396 -0.0943396  0.0943396
 R(3)=  5.3000000  5.3000000  0.0000000  G(3)=  0.0943396  0.0943396 -0.0943396
 Unit cell volume ucvol=  2.9775400E+02 bohr^3
 Unit cell volume ucvol=  2.9775400E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
 
--------------------------------------------------------------------------------
 Perturbation wavevector (in red.coord.)   0.000000  0.000000  0.000000
 Perturbation : derivative vs k along direction   1
 littlegroup_pert : only one element in the set of symmetries for this perturbation :
   1   0   0   0   1   0   0   0   1
 symkpt : not enough symmetry to change the number of k points.
 getmpw: optimal value of mpw= 119
inwffil: examining the header of disk file toptic_1o_DS3_WFK
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20190525 bantot 3072 natom    2  |  date 20190525 bantot 3072 natom    2
  nkpt 256 nsym 24 ngfft  15,  15,  15  |  nkpt 256 nsym 24 ngfft  15,  15,  15
  ntypat  2 ecut_eff   4.0000000        |  ntypat  2 ecut_eff   4.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     0.0000000   5.3000000   5.3000000  |     0.0000000   5.3000000   5.3000000
     5.3000000   0.0000000   5.3000000  |     5.3000000   0.0000000   5.3000000
     5.3000000   5.3000000   0.0000000  |     5.3000000   5.3000000   0.0000000
  nband:                                |  nband:
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
    12  12  12  12  12  12  12  12  12  |    12  12  12  12  12  12  12  12  12
=> stop printing nband after 100 values
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
    1  2                                |    1  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
=> stop printing istwfk after 100 values
  kpt:                                  |  kpt:
    -0.1250000  -0.2500000   0.0000000  |    -0.1250000  -0.2500000   0.0000000
    -0.2500000  -0.1250000   0.0000000  |    -0.2500000  -0.1250000   0.0000000
    -0.1250000  -0.1250000   0.1250000  |    -0.1250000  -0.1250000   0.1250000
    -0.1250000   0.5000000   0.0000000  |    -0.1250000   0.5000000   0.0000000
    -0.2500000  -0.3750000   0.0000000  |    -0.2500000  -0.3750000   0.0000000
  wtk:                                  |  wtk:
    0.004  0.004  0.004  0.004  0.004   |    0.004  0.004  0.004  0.004  0.004
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0  |   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0
   0.0 0.0 0.0 2.0 2.0 2.0 2.0 0.0 0.0  |   0.0 0.0 0.0 2.0 2.0 2.0 2.0 0.0 0.0
   0.0 0.0 0.0 0.0 0.0 0.0 2.0 2.0 2.0  |   0.0 0.0 0.0 0.0 0.0 0.0 2.0 2.0 2.0
   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0  |   2.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0 0.0
   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0  |   2.0 2.0 2.0 2.0 0.0 0.0 0.0 0.0 0.0
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 3, input occ=  1.9951376E+00 disk occ=  2.0000000E+00
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 4, input occ=  1.9947597E+00 disk occ=  2.0000000E+00
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 5, input occ=  8.1788369E-04 disk occ=  0.0000000E+00
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 6, input occ=  2.8174897E-05 disk occ=  0.0000000E+00
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4413
message: |
    band,k: 15, input occ=  1.9951376E+00 disk occ=  2.0000000E+00
...
 
The number of warning msgs is sufficient ... stop writing them.
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
   31.00 33.00                          |   31.00 33.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   3.0  |  pspdat 940714 pspcod    1 zion   3.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   5.0  |  pspdat 940714 pspcod    1 zion   5.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.2500000  |     0.2500000   0.2500000   0.2500000
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file toptic_1o_DS3_WFK
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 1
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 2
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 3
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 115 nband= 12 for kpt number= 4
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 5
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 6
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 7
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 8
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 9
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 115 nband= 12 for kpt number= 10
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 11
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 12
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 115 nband= 12 for kpt number= 13
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 14
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 15
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 16
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 17
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 18
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 19
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 20
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 21
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 22
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 23
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 24
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 25
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 26
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 27
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 28
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 29
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 30
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 31
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 32
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 33
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 34
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 116 nband= 12 for kpt number= 35
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 36
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 119 nband= 12 for kpt number= 37
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 38
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 114 nband= 12 for kpt number= 39
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 118 nband= 12 for kpt number= 40
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 41
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 42
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 43
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 44
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 45
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 46
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 47
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 110 nband= 12 for kpt number= 48
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 112 nband= 12 for kpt number= 49
 initwf: 12 bands have been initialized from disk
 initwf: disk file gives npw= 111 nband= 12 for kpt number= 50
 initwf: 12 bands have been initialized from disk
 initwf: the number of similar message is sufficient... stop printing them
 getmpw: optimal value of mpw= 119
qpt is Gamma, psi_k+q initialized from psi_k in memory
 
 dfpt_looppert : eigenq array
 dfpt_looppert : total number of electrons, from k and k+q
  fully or partially occupied states are    8.000000E+00 and    8.000000E+00.
 Initialisation of the first-order wave-functions :
  ireadwf=   0
 wfconv :    12 bands set=0 with npw=    119, for ikpt=   1
 wfconv :    12 bands set=0 with npw=    119, for ikpt=   2
 wfconv :    12 bands set=0 with npw=    119, for ikpt=   3
 wfconv :    12 bands set=0 with npw=    115, for ikpt=   4
 wfconv :    12 bands set=0 with npw=    118, for ikpt=   5
 wfconv :    12 bands set=0 with npw=    114, for ikpt=   6
 wfconv :    12 bands set=0 with npw=    118, for ikpt=   7
 wfconv :    12 bands set=0 with npw=    118, for ikpt=   8
 wfconv :    12 bands set=0 with npw=    114, for ikpt=   9
 wfconv :    12 bands set=0 with npw=    115, for ikpt=  10
 wfconv :    12 bands set=0 with npw=    114, for ikpt=  11
 wfconv :    12 bands set=0 with npw=    114, for ikpt=  12
 wfconv :    12 bands set=0 with npw=    115, for ikpt=  13
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  14
 wfconv :    12 bands set=0 with npw=    111, for ikpt=  15
 wfconv :    12 bands set=0 with npw=    114, for ikpt=  16
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  17
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  18
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  19
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  20
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  21
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  22
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  23
 wfconv :    12 bands set=0 with npw=    111, for ikpt=  24
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  25
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  26
 wfconv :    12 bands set=0 with npw=    111, for ikpt=  27
 wfconv :    12 bands set=0 with npw=    114, for ikpt=  28
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  29
 wfconv :    12 bands set=0 with npw=    114, for ikpt=  30
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  31
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  32
 wfconv :    12 bands set=0 with npw=    114, for ikpt=  33
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  34
 wfconv :    12 bands set=0 with npw=    116, for ikpt=  35
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  36
 wfconv :    12 bands set=0 with npw=    119, for ikpt=  37
 wfconv :    12 bands set=0 with npw=    111, for ikpt=  38
 wfconv :    12 bands set=0 with npw=    114, for ikpt=  39
 wfconv :    12 bands set=0 with npw=    118, for ikpt=  40
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  41
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  42
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  43
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  44
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  45
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  46
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  47
 wfconv :    12 bands set=0 with npw=    110, for ikpt=  48
 wfconv :    12 bands set=0 with npw=    112, for ikpt=  49
 wfconv :    12 bands set=0 with npw=    111, for ikpt=  50
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  15  15  15
         ecut(hartree)=      4.000   => boxcut(ratio)=   2.08519
-ETOT  1  -8.0449418131908     -8.045E+00 0.000E+00 0.000E+00
 
 At SCF step    1   max residual=  0.00E+00 < tolwfr=  1.00E-20 =>converged.
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFAF5E07721  Unknown               Unknown  Unknown
libirc.so          00007FFAF5E05E77  Unknown               Unknown  Unknown
libifcore.so.5     00007FFAF74B64C2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFAF74B6316  Unknown               Unknown  Unknown
libifcore.so.5     00007FFAF7421DBC  Unknown               Unknown  Unknown
libifcore.so.5     00007FFAF7432B98  Unknown               Unknown  Unknown
libpthread.so.0    00007FFAF5BED7E0  Unknown               Unknown  Unknown
libblas.so.3       00007FFAF85229E0  Unknown               Unknown  Unknown
abinit             0000000001E4C7C6  Unknown               Unknown  Unknown
abinit             0000000000B5A793  Unknown               Unknown  Unknown
abinit             00000000009CF4F7  Unknown               Unknown  Unknown
abinit             0000000000994F77  Unknown               Unknown  Unknown
abinit             00000000006204DC  Unknown               Unknown  Unknown
abinit             0000000000488F16  Unknown               Unknown  Unknown
abinit             0000000000415FE4  Unknown               Unknown  Unknown
abinit             0000000000409184  Unknown               Unknown  Unknown
abinit             000000000040746E  Unknown               Unknown  Unknown
libc.so.6          00007FFAF5664D1D  Unknown               Unknown  Unknown
abinit             0000000000407379  Unknown               Unknown  Unknown
