Scanning /u/fs1/db729/bin/abinit
Setting MPI to OpenMPI-2.1.4
  ABINIT 8.10.3
  
  Give name for formatted input file: 
lao_lat.in
  Give name for formatted output file:
lao_lat.out
  Give root name for generic input files:
laoi
  Give root name for generic output files:
laoo
  Give root name for generic temporary files:
tmp
 
--- !COMMENT
src_file: m_dtfil.F90
src_line: 1159
message: |
    Output file lao_lat.out
     already exists.
...
 
 
--- !COMMENT
src_file: m_dtfil.F90
src_line: 1183
message: |
    Renaming old lao_lat.out to lao_lat.out0003
...
 

.Version 8.10.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel17.0 computer) 

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

.Starting date : Sat 21 Mar 2020.
- ( at 09h37 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 8.10.3
  Build target  : x86_64_linux_intel17.0
  Build date    : 20200303
 
 === Compiler Suite === 
  C compiler       : intel17.0
  C++ compiler     : gnu7.4
  Fortran compiler : intel17.0
  CFLAGS           :  -g -O2 -vec-report0
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g
  FC_LDFLAGS       : 
 
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
  LINALG flavor : mkl
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

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
             HAVE_FC_ETIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV            HAVE_FC_GETPID
 
   HAVE_FC_IEEE_EXCEPTIONS             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
            HAVE_FC_SYSTEM                  HAVE_FFT            HAVE_FFT_FFTW3
 
              HAVE_FFT_MPI           HAVE_FFT_SERIAL        HAVE_LIBPAW_ABINIT
 
      HAVE_LIBTETRA_ABINIT               HAVE_LINALG         HAVE_LINALG_AXPBY
 
        HAVE_LINALG_GEMM3M  HAVE_LINALG_MKL_IMATCOPY   HAVE_LINALG_MKL_OMATADD
 
  HAVE_LINALG_MKL_OMATCOPY   HAVE_LINALG_MKL_THREADS        HAVE_LINALG_SERIAL
 
                  HAVE_MPI                 HAVE_MPI2       HAVE_MPI_IALLREDUCE
 
        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV        HAVE_MPI_INTEGER16
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX
 
         HAVE_TIMER_ABINIT              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> lao_lat.in
- output file    -> lao_lat.out
- root for input  files -> laoi
- root for output files -> laoo
 
-instrng: 132 lines of input have been read from file lao_lat.in
 

 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is /scratch/db729/abinit/lao/pseudos/pbe/La.psp8

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is /scratch/db729/abinit/lao/pseudos/pbe/Al.psp8

 Please give name of formatted atomic psp file
 iofn2 : for atom type 3, psp file is /scratch/db729/abinit/lao/pseudos/pbe/O.psp8
  read the values zionpsp= 11.0 , pspcod=   8 , lmax=   3
  read the values zionpsp=  3.0 , pspcod=   8 , lmax=   2
  read the values zionpsp=  6.0 , pspcod=   8 , lmax=   2
 
 inpspheads: deduce mpsang = 4, n1xccc = 2501.
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup= 123  P4/m m m   (=D4h^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 invars1 : treat image number: 1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 symspgr : spgroup=  99  P4 m m   (=C4v^1)
 symspgr : optical characteristics = uniaxial
 Optical axis (in reduced coordinates, real space ) :   0   0   1
 ingeo: angdeg(1:3)=   90.00000000   90.00000000   90.00000000
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
npfft, npband, npspinor and npkpt:     1    1    1    4
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2531
message: |
    nkpt*nsppol (18) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=5 and mkmem  = 18, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=5 and mkqmem = 18, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=5 and mk1mem = 18, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  4.840000E+01 best grid ngfft=      48      48      48
       max ecut=  5.144582E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   48
  Augmented FFT divisions ...................    49   49   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 6280
 
 DATASET    1 : space group P4/m m m (#123); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      16    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    2 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset=  2.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    3 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset=  3.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    4 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset=  4.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    5 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  5.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset=  5.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    6 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  6.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset=  6.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    7 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  7.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset=  7.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    8 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  8.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset=  8.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET    9 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  9.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset=  9.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET   10 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET 10.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset= 10.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
 The job will continue.
 
 DATASET   11 : space group P4 m m (# 99); Bravais tP (primitive tetrag.)
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET 11.
     intxc =       0    ionmov =       2      iscf =       7    lmnmax =       8
     lnmax =       8     mgfft =      48  mpssoang =       4    mqgrid =    3001
     natom =       5  nloc_mem =       1    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       8    n1xccc =    2501    ntypat =       3
    occopt =       1   xclevel =       2
-    mband =          16        mffmem =           1         mkmem =           5
       mpw =        6280          nfft =      110592          nkpt =          18
================================================================================
 
 memory : COMMENT -
  The determination of memory needs at this stage is meaningless,
  since getcell =  -1 is non-zero, while idtset= 11.
  The following numbers are obtained by supposing that acell and rprim
  are NOT taken from a previous dataset. You cannot rely on them.
 
P This job should need less than                      45.446 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     27.600 Mbytes ; DEN or POT disk file :      0.846 Mbytes.
================================================================================
 
 Biggest array : f_fftgr(disk), with     13.5020 MBytes.
 memana : allocated an array of     13.502 Mbytes, for testing purposes.
 memana: allocated      45.446Mbytes, for testing purposes. 
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
            acell      7.4331186300E+00  7.4331186300E+00  7.0322206319E+00 Bohr
              amu      1.38905500E+02  2.69815390E+01  1.59994000E+01
         berryopt1         -1
         berryopt2         16
         berryopt3         16
         berryopt4         16
         berryopt5         16
         berryopt6         16
         berryopt7         16
         berryopt8         16
         berryopt9         16
         berryopt10        16
         berryopt11        16
      chksymbreak           0
           diemac      2.50000000E+01
          dilatmx      1.10000000E+00
             ecut      4.00000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         312
          getcell          -1
           getwfk          -1
          getxred          -1
           ionmov           2
              ixc          11
           jdtset        1    2    3    4    5    6    7    8    9   10
                        11
              kpt      8.33333333E-02  8.33333333E-02  8.33333333E-02
                       2.50000000E-01  8.33333333E-02  8.33333333E-02
                       4.16666667E-01  8.33333333E-02  8.33333333E-02
                       2.50000000E-01  2.50000000E-01  8.33333333E-02
                       4.16666667E-01  2.50000000E-01  8.33333333E-02
                       4.16666667E-01  4.16666667E-01  8.33333333E-02
                       8.33333333E-02  8.33333333E-02  2.50000000E-01
                       2.50000000E-01  8.33333333E-02  2.50000000E-01
                       4.16666667E-01  8.33333333E-02  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       4.16666667E-01  2.50000000E-01  2.50000000E-01
                       4.16666667E-01  4.16666667E-01  2.50000000E-01
                       8.33333333E-02  8.33333333E-02  4.16666667E-01
                       2.50000000E-01  8.33333333E-02  4.16666667E-01
                       4.16666667E-01  8.33333333E-02  4.16666667E-01
                       2.50000000E-01  2.50000000E-01  4.16666667E-01
                       4.16666667E-01  2.50000000E-01  4.16666667E-01
                       4.16666667E-01  4.16666667E-01  4.16666667E-01
         kptrlatt        6    0    0      0    6    0      0    0    6
          kptrlen      4.21933238E+01
P           mkmem           5
            natom           5
            nband          16
           ndtset          11
            ngfft          48      48      48
             nkpt          18
            nstep         200
             nsym1         16
             nsym2          8
             nsym3          8
             nsym4          8
             nsym5          8
             nsym6          8
             nsym7          8
             nsym8          8
             nsym9          8
             nsym10         8
             nsym11         8
            ntime         200
           ntypat           3
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000
          optcell           6
       red_dfield1     0.00000000E+00  0.00000000E+00  0.00000000E+00
       red_dfield2     0.00000000E+00  0.00000000E+00  5.00000000E-03
       red_dfield3     0.00000000E+00  0.00000000E+00  1.00000000E-02
       red_dfield4     0.00000000E+00  0.00000000E+00  1.50000000E-02
       red_dfield5     0.00000000E+00  0.00000000E+00  2.00000000E-02
       red_dfield6     0.00000000E+00  0.00000000E+00  2.50000000E-02
       red_dfield7     0.00000000E+00  0.00000000E+00  3.00000000E-02
       red_dfield8     0.00000000E+00  0.00000000E+00  3.50000000E-02
       red_dfield9     0.00000000E+00  0.00000000E+00  4.00000000E-02
       red_dfield10    0.00000000E+00  0.00000000E+00  4.50000000E-02
       red_dfield11    0.00000000E+00  0.00000000E+00  5.00000000E-02
            rfdir           0       0       1
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup1        123
          spgroup2         99
          spgroup3         99
          spgroup4         99
          spgroup5         99
          spgroup6         99
          spgroup7         99
          spgroup8         99
          spgroup9         99
          spgroup10        99
          spgroup11        99
           symafm1       1    1    1    1    1    1    1    1    1    1
                         1    1    1    1    1    1
           symafm2       1    1    1    1    1    1    1    1
           symafm3       1    1    1    1    1    1    1    1
           symafm4       1    1    1    1    1    1    1    1
           symafm5       1    1    1    1    1    1    1    1
           symafm6       1    1    1    1    1    1    1    1
           symafm7       1    1    1    1    1    1    1    1
           symafm8       1    1    1    1    1    1    1    1
           symafm9       1    1    1    1    1    1    1    1
           symafm10      1    1    1    1    1    1    1    1
           symafm11      1    1    1    1    1    1    1    1
           symrel1     1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
           symrel2     1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel3     1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel4     1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel5     1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel6     1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel7     1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel8     1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel9     1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel10    1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
           symrel11    1  0  0   0  1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
            tnons1     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons2     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons3     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons4     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons5     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons6     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons7     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons8     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons9     0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons10    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
            tnons11    0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
           toldfe      1.00000000E-08 Hartree
           tolmxf      1.00000000E-05
            typat      1  2  3  3  3
              wtk        0.03704    0.07407    0.07407    0.03704    0.07407    0.03704
                         0.03704    0.07407    0.07407    0.03704    0.07407    0.03704
                         0.03704    0.07407    0.07407    0.03704    0.07407    0.03704
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.9667184839E+00  1.9667184839E+00  1.8606454421E+00
                       1.9667184839E+00  1.9667184839E+00  0.0000000000E+00
                       1.9667184839E+00  0.0000000000E+00  1.8606454421E+00
                       0.0000000000E+00  1.9667184839E+00  1.8606454421E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.7165593150E+00  3.7165593150E+00  3.5161103160E+00
                       3.7165593150E+00  3.7165593150E+00  0.0000000000E+00
                       3.7165593150E+00  0.0000000000E+00  3.5161103160E+00
                       0.0000000000E+00  3.7165593150E+00  3.5161103160E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
            znucl       57.00000   13.00000    8.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   1.
 
 chkinp: Checking input parameters for consistency, jdtset=   2.
 
 chkinp: Checking input parameters for consistency, jdtset=   3.
 
 chkinp: Checking input parameters for consistency, jdtset=   4.
 
 chkinp: Checking input parameters for consistency, jdtset=   5.
 
 chkinp: Checking input parameters for consistency, jdtset=   6.
 
 chkinp: Checking input parameters for consistency, jdtset=   7.
 
 chkinp: Checking input parameters for consistency, jdtset=   8.
 
 chkinp: Checking input parameters for consistency, jdtset=   9.
 
 chkinp: Checking input parameters for consistency, jdtset=  10.
 
 chkinp: Checking input parameters for consistency, jdtset=  11.
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
-   nproc =    4
 
 
--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...
 
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Unit cell volume ucvol=  3.8853900E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     48.400   => boxcut(ratio)=   2.06197
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is /scratch/db729/abinit/lao/pseudos/pbe/La.psp8
- pspatm: opening atomic psp file    /scratch/db729/abinit/lao/pseudos/pbe/La.psp8
- La    ONCVPSP-3.2.3.1  r_core=   2.11664   1.60878   1.85636   1.66739
- 57.00000  11.00000    170510                znucl, zion, pspdat
    8   11    3    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    5.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2     2
     extension_switch     1
 valence charge integrates to:    10.6684583148634     
  pspatm : epsatm=   29.83565401
         --- l  ekb(1:nproj) -->
             0    6.631488    0.621657
             1    6.300998    1.146612
             2    3.569192    0.839626
             3  -13.838546   -4.898032
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is /scratch/db729/abinit/lao/pseudos/pbe/Al.psp8
- pspatm: opening atomic psp file    /scratch/db729/abinit/lao/pseudos/pbe/Al.psp8
- Al    ONCVPSP-3.2.3.1  r_core=   1.76802   1.76802   1.70587
- 13.00000   3.00000    170504                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    5.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     2
     extension_switch     1
 valence charge integrates to:    2.91776060898237     
  pspatm : epsatm=    4.08140610
         --- l  ekb(1:nproj) -->
             0    5.126667    0.728291
             1    7.287548    0.832437
             2   -2.770497   -0.637722
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   3  psp file is /scratch/db729/abinit/lao/pseudos/pbe/O.psp8
- pspatm: opening atomic psp file    /scratch/db729/abinit/lao/pseudos/pbe/O.psp8
- O     ONCVPSP-3.2.3.1  r_core=   1.35509   1.45563   1.26150
-  8.00000   6.00000    170504                znucl, zion, pspdat
    8   11    2    4       600   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    5.99000000000000    4.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
     nproj     2     2     1
     extension_switch     1
 valence charge integrates to:    5.99903187524054     
  pspatm : epsatm=    6.19546011
         --- l  ekb(1:nproj) -->
             0    6.056735    0.824024
             1   -4.717130   -1.149271
             2   -1.331955
 pspatm: atomic psp has been read  and splines computed
 
   1.68011009E+03                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  Norm-conserving pseudopotentials
  Number of pseudopotentials ..    3
  Number of types of atoms   ..    3
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using Legendre polynomials
  Max number of non-local projectors over l and type   2
  Highest angular momentum +1 .......   4
  Max number of (l,n)   components ..   8
  Max number of (l,m,n) components ..   8
 
 Pseudo-Core Charge Info: 
   Number of radial points for pseudo-core charge .. 2501
   XC core-correction treatment (optnlxccc) ........    1
   Radius for pseudo-core charge for each type ..... 
 
  - Atom type    1 has pseudo-core radius ..  5.9900
  - Atom type    2 has pseudo-core radius ..  5.9900
  - Atom type    3 has pseudo-core radius ..  5.9900
 
 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   3001
   Number of q-points for vlspl ...................   3001
   vloc is computed in Reciprocal Space
   model core charge treated in real-space
 
  XC functional for type 1 is 11
  Pseudo valence available: yes
  XC functional for type 2 is 11
  Pseudo valence available: yes
  XC functional for type 3 is 11
  Pseudo valence available: yes
 
 wfconv:    16 bands initialized randomly with npw=  6238, for ikpt=     1
 wfconv:    16 bands initialized randomly with npw=  6241, for ikpt=     2
 wfconv:    16 bands initialized randomly with npw=  6234, for ikpt=     3
 wfconv:    16 bands initialized randomly with npw=  6245, for ikpt=     4
 wfconv:    16 bands initialized randomly with npw=  6240, for ikpt=     5
_setup2: Arith. and geom. avg. npw (full set) are    6248.926    6248.917
 initro: for itypat=  1, take pseudo charge density from pp file
 initro: for itypat=  2, take pseudo charge density from pp file
 initro: for itypat=  3, take pseudo charge density from pp file
  initberry: for direction 1, nkstr =   0, nstr =      0
  initberry: for direction 2, nkstr =   0, nstr =      0
  initberry: for direction 3, nkstr =   6, nstr =     36
 
================================================================================
 
=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================
 
--- Iteration: (  1/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.71655931500000E+00  3.71655931500000E+00  3.51611031595000E+00
  3.71655931500000E+00  3.71655931500000E+00  0.00000000000000E+00
  3.71655931500000E+00  0.00000000000000E+00  3.51611031595000E+00
  0.00000000000000E+00  3.71655931500000E+00  3.51611031595000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
 Scale of Primitive Cell (acell) [bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03222063190000E+00
 Real space primitive translations (rprimd) [bohr]
  7.43311863000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.43311863000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.03222063190000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  3.88538998244568E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03222063190000E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.26817
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   51.445821 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 
--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 Total charge density [el/Bohr^3]
      Maximum=    1.0178E+00  at reduced coord.    0.5208    0.5208    0.9375
      Minimum=    3.1880E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  1  -86.947161741832    -8.695E+01 2.367E-01 6.607E+02
 scprqt: <Vxc>= -4.2246735E-01 hartree
 
Simple mixing update:
  residual square of the potential :   290.323810905121
 scfcv_core: previous iteration took 03 [s]
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 
--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 Total charge density [el/Bohr^3]
      Maximum=    8.7670E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.1644E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  2  -87.342143566655    -3.950E-01 9.180E-03 1.608E+02
 scprqt: <Vxc>= -4.3320955E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.650      0.350
 scfcv_core: previous iteration took 02 [s]
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 
--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 Total charge density [el/Bohr^3]
      Maximum=    9.7188E-01  at reduced coord.    0.5208    0.5625    0.0000
      Minimum=    9.9995E-04  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  3  -87.380454505234    -3.831E-02 6.698E-04 7.934E+01
 scprqt: <Vxc>= -4.2501908E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05      0.177     -0.223
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 
--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 Total charge density [el/Bohr^3]
      Maximum=    9.2181E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0557E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  4  -87.391844212877    -1.139E-02 6.989E-04 1.454E+01
 scprqt: <Vxc>= -4.2867358E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.714      0.257      0.767E-02  0.214E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 
--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...
 
 Total charge density [el/Bohr^3]
      Maximum=    9.3953E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0380E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  5  -87.395200064857    -3.356E-03 1.487E-04 5.113E-01
 scprqt: <Vxc>= -4.2726271E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.22     -0.109     -0.127      0.132E-01 -0.325E-03
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 Total charge density [el/Bohr^3]
      Maximum=    9.3025E-01  at reduced coord.    0.5208    0.5625    0.9792
      Minimum=    1.0403E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  6  -87.395444920261    -2.449E-04 1.535E-04 1.850E+00
 scprqt: <Vxc>= -4.2795414E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.310       1.03     -0.239     -0.113      0.128E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 Total charge density [el/Bohr^3]
      Maximum=    9.3519E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0373E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  7  -87.396014643716    -5.697E-04 2.675E-05 2.203E-01
 scprqt: <Vxc>= -4.2753454E-01 hartree
 
 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.966      0.412E-01  0.683E-01 -0.117      0.439E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 Total charge density [el/Bohr^3]
      Maximum=    9.3191E-01  at reduced coord.    0.5208    0.5625    0.9792
      Minimum=    1.0385E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  8  -87.395938380622     7.626E-05 2.895E-05 8.665E-01
 scprqt: <Vxc>= -4.2778025E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.95      0.444      -1.37     -0.531E-01 -0.126E-02
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 Total charge density [el/Bohr^3]
      Maximum=    9.3486E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0382E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  9  -87.396125461019    -1.871E-04 4.932E-06 3.780E-02
 scprqt: <Vxc>= -4.2755830E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.390      0.626      0.150     -0.311      0.156
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 Total charge density [el/Bohr^3]
      Maximum=    9.3402E-01  at reduced coord.    0.5208    0.5625    0.9792
      Minimum=    1.0375E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 10  -87.396128854424    -3.393E-06 7.459E-06 1.311E-01
 scprqt: <Vxc>= -4.2756200E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06      0.182      0.243     -0.554E-01 -0.408
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 Total charge density [el/Bohr^3]
      Maximum=    9.3532E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0370E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 11  -87.396151292171    -2.244E-05 1.208E-06 2.517E-02
 scprqt: <Vxc>= -4.2748780E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.650      0.968     -0.250     -0.241E-01 -0.148
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    12
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 12
 Total charge density [el/Bohr^3]
      Maximum=    9.3590E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0366E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 12  -87.396146437211     4.855E-06 1.402E-06 8.326E-02
 scprqt: <Vxc>= -4.2743699E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.684     -0.116      0.541     -0.123      0.657E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    13
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 13
 Total charge density [el/Bohr^3]
      Maximum=    9.3521E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0366E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 13  -87.396155399242    -8.962E-06 2.141E-07 3.028E-03
 scprqt: <Vxc>= -4.2747992E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.563      0.567     -0.424      0.389     -0.565E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    14
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 14
 Total charge density [el/Bohr^3]
      Maximum=    9.3542E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 14  -87.396155282867     1.164E-07 1.865E-07 5.893E-03
 scprqt: <Vxc>= -4.2746147E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.696      0.109E-01  0.374     -0.325      0.264
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    15
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 15
 Total charge density [el/Bohr^3]
      Maximum=    9.3521E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 15  -87.396156242044    -9.592E-07 4.919E-08 1.242E-03
 scprqt: <Vxc>= -4.2747467E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.60     -0.368     -0.923      0.434      0.510E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    16
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 16
 Total charge density [el/Bohr^3]
      Maximum=    9.3528E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 16  -87.396156218800     2.324E-08 2.886E-08 1.866E-03
 scprqt: <Vxc>= -4.2746811E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.40       1.36      -1.05     -0.961      0.700E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    17
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 17
 Total charge density [el/Bohr^3]
      Maximum=    9.3514E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 17  -87.396156531661    -3.129E-07 1.283E-08 3.513E-04
 scprqt: <Vxc>= -4.2747569E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.682      0.170      0.788     -0.281     -0.465
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    18
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 18
 Total charge density [el/Bohr^3]
      Maximum=    9.3516E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 18  -87.396156571181    -3.952E-08 9.577E-09 1.390E-04
 scprqt: <Vxc>= -4.2747441E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.525      0.371      0.204      0.505     -0.362
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    19
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 19
 Total charge density [el/Bohr^3]
      Maximum=    9.3512E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 19  -87.396156603537    -3.236E-08 3.070E-09 6.882E-05
 scprqt: <Vxc>= -4.2747612E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.871      0.406     -0.210     -0.200      0.182
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    20
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 20
 Total charge density [el/Bohr^3]
      Maximum=    9.3511E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 20  -87.396156617932    -1.439E-08 2.605E-09 4.578E-06
 scprqt: <Vxc>= -4.2747692E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.917     -0.872E-01 -0.212E-01  0.219     -0.116
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    21
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 21
 Total charge density [el/Bohr^3]
      Maximum=    9.3511E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 21  -87.396156619820    -1.888E-09 8.269E-10 6.896E-06
 scprqt: <Vxc>= -4.2747669E-01 hartree
 
 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.523      0.729     -0.541     -0.476E-01  0.380
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER    22
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 22
 Total charge density [el/Bohr^3]
      Maximum=    9.3511E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT 22  -87.396156621488    -1.668E-09 4.165E-10 2.715E-06
 scprqt: <Vxc>= -4.2747693E-01 hartree
 
 At SCF step   22, etot is converged : 
  for the second time, diff in etot=  1.668E-09 < toldfe=  1.000E-08
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.16667 (in reduced coordinates)
  0.00000  0.00000  0.02370 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.385190598E-21
               2       -0.650708530E-21
               3       -0.155278953E-21
               4       -0.155278953E-21
               5       -0.650708530E-21
               6        0.385190598E-21
               7       -0.650708530E-21
               8        0.893943479E-21
               9       -0.580794837E-21
              10       -0.580794837E-21
              11        0.893943479E-21
              12       -0.650708530E-21
              13       -0.155278953E-21
              14       -0.580794837E-21
              15        0.209851649E-21
              16        0.209851649E-21
              17       -0.580794837E-21
              18       -0.155278953E-21
              19       -0.155278953E-21
              20       -0.580794837E-21
              21        0.209851649E-21
              22        0.209851649E-21
              23       -0.580794837E-21
              24       -0.155278953E-21
              25       -0.650708530E-21
              26        0.893943479E-21
              27       -0.580794837E-21
              28       -0.580794837E-21
              29        0.893943479E-21
              30       -0.650708530E-21
              31        0.385190598E-21
              32       -0.650708530E-21
              33       -0.155278953E-21
              34       -0.155278953E-21
              35       -0.650708530E-21
              36        0.385190598E-21
         total       -0.142730991E-21 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3           0.000000000E+00
   4      3          -0.100000000E+01
   5      3          -0.100000000E+01
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -1.427309905E-22
            Ionic phase    -5.000000000E-01
            Total phase    -5.000000000E-01
    Remapping in [-1,1]    -5.000000000E-01
 
           Polarization    -9.049568594E-03 (a.u. of charge)/bohr^2
           Polarization    -5.177689086E-01 C/m^2
 
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.47475094E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.47475094E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -3.82991545E-07  sigma(2 1)=  0.00000000E+00
 
 fftdatar_write: About to write data to: laoo_DS1_TIM1_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.71655931500000E+00  3.71655931500000E+00  3.51611031595000E+00
  3.71655931500000E+00  3.71655931500000E+00  0.00000000000000E+00
  3.71655931500000E+00  0.00000000000000E+00  3.51611031595000E+00
  0.00000000000000E+00  3.71655931500000E+00  3.51611031595000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03222063190000E+00
 Real space primitive translations (rprimd) [bohr]
  7.43311863000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.43311863000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.03222063190000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  3.88538998244568E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03222063190000E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.47475094004160E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.47475094004162E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -3.82991545255784E-07
 Total energy (etotal) [Ha]= -8.73961566214877E+01
 fconv : at Broyd/MD step   1, gradients have not converged yet. 
  max grad (force/stress) = 3.8299E-05 > tolmxf= 1.0000E-05 ha/bohr (free atoms)
 
Inverse hessian has been initialized.
 EXIT:           1           1
 mover: previous time step took 38 [s]
 
--- Iteration: (  2/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.71655931500000E+00  3.71655931500000E+00  3.51615071516570E+00
  3.71655931500000E+00  3.71655931500000E+00  0.00000000000000E+00
  3.71655931500000E+00  0.00000000000000E+00  3.51615071516570E+00
  0.00000000000000E+00  3.71655931500000E+00  3.51615071516570E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
 Scale of Primitive Cell (acell) [bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03230143033139E+00
 Real space primitive translations (rprimd) [bohr]
  7.43311863000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.43311863000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.03230143033139E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  3.88543462459108E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03230143033139E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.26817
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   51.445821 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 Total charge density [el/Bohr^3]
      Maximum=    9.3507E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0365E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  1  -87.396156608357    -8.740E+01 7.110E-08 7.549E-05
 scprqt: <Vxc>= -4.2747849E-01 hartree
 
Simple mixing update:
  residual square of the potential :  3.145856940500662E-005
 scfcv_core: previous iteration took 03 [s]
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 Total charge density [el/Bohr^3]
      Maximum=    9.3514E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0363E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  2  -87.396156600689     7.668E-09 5.858E-09 1.067E-04
 scprqt: <Vxc>= -4.2747191E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.452      0.548
 scfcv_core: previous iteration took 02 [s]
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 Total charge density [el/Bohr^3]
      Maximum=    9.3510E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  3  -87.396156622851    -2.216E-08 1.905E-10 1.757E-07
 scprqt: <Vxc>= -4.2747555E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.844      0.692E-01  0.871E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 Total charge density [el/Bohr^3]
      Maximum=    9.3510E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  4  -87.396156622963    -1.125E-10 3.345E-10 3.432E-08
 scprqt: <Vxc>= -4.2747539E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.749      0.315     -0.320E-01 -0.313E-01
 scfcv_core: previous iteration took 01 [s]
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 Total charge density [el/Bohr^3]
      Maximum=    9.3510E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  5  -87.396156622989    -2.554E-11 8.131E-11 1.138E-07
 scprqt: <Vxc>= -4.2747553E-01 hartree
 
 At SCF step    5, etot is converged : 
  for the second time, diff in etot=  2.554E-11 < toldfe=  1.000E-08
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.16667 (in reduced coordinates)
  0.00000  0.00000  0.02370 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.343764038E-22
               2       -0.640643780E-22
               3       -0.506814153E-23
               4       -0.506814153E-23
               5       -0.640643780E-22
               6        0.343764038E-22
               7       -0.640643780E-22
               8        0.964788728E-22
               9       -0.136264078E-22
              10       -0.136264078E-22
              11        0.964788728E-22
              12       -0.640643780E-22
              13       -0.506814153E-23
              14       -0.136264078E-22
              15        0.759421940E-23
              16        0.759421940E-23
              17       -0.136264078E-22
              18       -0.506814153E-23
              19       -0.506814153E-23
              20       -0.136264078E-22
              21        0.759421940E-23
              22        0.759421940E-23
              23       -0.136264078E-22
              24       -0.506814153E-23
              25       -0.640643780E-22
              26        0.964788728E-22
              27       -0.136264078E-22
              28       -0.136264078E-22
              29        0.964788728E-22
              30       -0.640643780E-22
              31        0.343764038E-22
              32       -0.640643780E-22
              33       -0.506814153E-23
              34       -0.506814153E-23
              35       -0.640643780E-22
              36        0.343764038E-22
         total       -0.300759540E-23 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3           0.000000000E+00
   4      3          -0.100000000E+01
   5      3          -0.100000000E+01
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -3.007595398E-24
            Ionic phase    -5.000000000E-01
            Total phase    -5.000000000E-01
    Remapping in [-1,1]    -5.000000000E-01
 
           Polarization    -9.049568594E-03 (a.u. of charge)/bohr^2
           Polarization    -5.177689086E-01 C/m^2
 
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.47821208E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.47821208E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  5.22916415E-08  sigma(2 1)=  0.00000000E+00
 
 fftdatar_write: About to write data to: laoo_DS1_TIM2_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.0 [s], walltime:       0.0 [s]
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.71655931500000E+00  3.71655931500000E+00  3.51615071516570E+00
  3.71655931500000E+00  3.71655931500000E+00  0.00000000000000E+00
  3.71655931500000E+00  0.00000000000000E+00  3.51615071516570E+00
  0.00000000000000E+00  3.71655931500000E+00  3.51615071516570E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03230143033139E+00
 Real space primitive translations (rprimd) [bohr]
  7.43311863000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.43311863000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.03230143033139E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  3.88543462459108E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03230143033139E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.47821208475894E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.47821208475898E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  5.22916414700397E-08
 Total energy (etotal) [Ha]= -8.73961566229886E+01
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.50098E-09
           Relative     =-1.71744E-11
 
 At Broyd/MD step   2, gradients are converged : 
  max grad (force/stress) = 5.2292E-06 < tolmxf= 1.0000E-05 ha/bohr (free atoms)
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 
 === Gap info ===
Not enough states to calculate the band gap.
 Mean square residual over all n,k,spin=   12.030E-13; max=  81.305E-12
   0.0833  0.0833  0.0833    1  1.12349E-11 kpt; spin; max resid(k); each band:
  2.28E-15 8.30E-14 2.17E-14 9.38E-14 2.26E-14 2.90E-14 2.90E-14 5.29E-13
  3.16E-13 2.60E-13 4.21E-12 3.62E-12 1.12E-11 1.14E-12 2.04E-12 1.23E-12
   0.2500  0.0833  0.0833    1  5.63883E-12 kpt; spin; max resid(k); each band:
  2.85E-15 8.36E-14 3.08E-14 1.14E-13 3.13E-14 3.13E-14 4.83E-14 3.23E-13
  3.04E-13 6.61E-13 1.06E-12 3.44E-12 1.05E-12 5.64E-12 2.05E-12 1.78E-12
   0.4167  0.0833  0.0833    1  3.60299E-12 kpt; spin; max resid(k); each band:
  2.78E-15 7.86E-14 2.68E-14 1.33E-13 2.89E-14 2.87E-14 5.73E-14 1.91E-13
  1.16E-13 6.62E-13 6.47E-13 4.41E-13 2.01E-12 3.60E-12 1.53E-12 1.22E-12
   0.2500  0.2500  0.0833    1  4.30427E-11 kpt; spin; max resid(k); each band:
  2.93E-15 8.27E-14 4.79E-14 1.25E-13 2.83E-14 6.29E-14 3.34E-14 3.25E-13
  2.93E-13 2.48E-13 6.86E-13 1.83E-12 5.83E-13 4.30E-11 1.12E-12 5.28E-13
   0.4167  0.2500  0.0833    1  2.92154E-12 kpt; spin; max resid(k); each band:
  2.82E-15 7.99E-14 4.48E-14 1.33E-13 2.87E-14 4.86E-14 6.31E-14 2.54E-13
  2.95E-13 3.93E-13 3.46E-13 7.37E-13 4.43E-13 1.38E-12 2.92E-12 1.58E-12
   0.4167  0.4167  0.0833    1  1.11158E-11 kpt; spin; max resid(k); each band:
  2.30E-15 7.88E-14 5.07E-14 9.30E-14 1.74E-14 7.03E-14 5.79E-14 2.17E-13
  9.52E-14 4.61E-13 1.80E-13 3.00E-13 6.36E-13 1.74E-12 1.11E-11 1.34E-12
   0.0833  0.0833  0.2500    1  6.34390E-12 kpt; spin; max resid(k); each band:
  2.60E-15 7.25E-14 5.65E-14 2.58E-14 3.14E-14 2.30E-14 5.45E-14 2.94E-13
  4.26E-13 5.79E-13 1.25E-12 1.77E-12 5.97E-13 6.34E-12 1.35E-12 1.99E-12
   0.2500  0.0833  0.2500    1  8.13051E-11 kpt; spin; max resid(k); each band:
  2.74E-15 7.73E-14 1.09E-13 1.16E-13 3.15E-14 5.58E-14 4.81E-14 3.04E-13
  4.42E-13 5.40E-13 6.52E-13 9.47E-13 4.38E-13 8.13E-11 9.33E-13 1.13E-12
   0.4167  0.0833  0.2500    1  2.71784E-12 kpt; spin; max resid(k); each band:
  2.71E-15 7.82E-14 6.49E-14 1.27E-13 1.95E-14 4.92E-14 3.78E-14 2.12E-13
  2.45E-13 4.71E-13 2.07E-13 7.27E-13 7.78E-13 1.55E-12 1.95E-12 2.72E-12
   0.2500  0.2500  0.2500    1  4.11047E-12 kpt; spin; max resid(k); each band:
  2.36E-15 7.67E-14 5.05E-14 1.09E-13 4.70E-14 4.92E-14 4.83E-14 3.08E-13
  3.52E-13 5.71E-13 5.43E-13 4.77E-13 5.54E-13 2.79E-12 2.99E-12 4.11E-12
   0.4167  0.2500  0.2500    1  3.50938E-12 kpt; spin; max resid(k); each band:
  1.84E-15 7.95E-14 4.65E-14 1.32E-13 3.51E-14 6.07E-14 5.16E-14 3.84E-13
  5.27E-13 1.51E-13 1.71E-13 2.24E-13 7.29E-13 2.31E-12 3.51E-12 2.88E-12
   0.4167  0.4167  0.2500    1  4.15775E-12 kpt; spin; max resid(k); each band:
  1.49E-15 8.04E-14 3.97E-14 9.93E-14 2.01E-14 5.58E-14 6.05E-14 3.80E-13
  1.67E-13 2.83E-13 1.75E-13 3.79E-13 2.23E-13 4.16E-12 3.06E-12 2.80E-12
   0.0833  0.0833  0.4167    1  4.44124E-12 kpt; spin; max resid(k); each band:
  2.47E-15 5.35E-14 2.21E-14 2.16E-14 2.94E-14 3.35E-14 3.34E-14 1.96E-13
  9.57E-14 3.18E-13 9.09E-13 3.54E-13 1.59E-12 4.44E-12 8.93E-13 7.44E-13
   0.2500  0.0833  0.4167    1  2.25446E-12 kpt; spin; max resid(k); each band:
  2.27E-15 5.23E-14 5.14E-14 3.89E-14 3.35E-14 3.73E-14 4.45E-14 2.25E-13
  2.11E-13 4.53E-13 2.48E-13 1.02E-12 6.30E-13 1.41E-12 2.25E-12 1.78E-12
   0.4167  0.0833  0.4167    1  2.65812E-12 kpt; spin; max resid(k); each band:
  2.04E-15 8.08E-14 1.04E-13 8.05E-14 2.44E-14 5.56E-14 5.46E-14 1.92E-13
  1.41E-13 5.60E-13 2.62E-13 5.12E-13 5.25E-13 1.28E-12 2.63E-12 2.66E-12
   0.2500  0.2500  0.4167    1  6.81499E-12 kpt; spin; max resid(k); each band:
  1.88E-15 5.07E-14 5.57E-14 2.80E-14 3.43E-14 4.35E-14 3.13E-14 3.62E-13
  5.93E-13 2.29E-13 2.58E-13 1.71E-13 5.40E-13 2.47E-12 1.09E-12 6.81E-12
   0.4167  0.2500  0.4167    1  3.77565E-12 kpt; spin; max resid(k); each band:
  1.42E-15 7.78E-14 1.05E-13 7.68E-14 3.16E-14 5.50E-14 4.77E-14 3.67E-13
  2.01E-13 2.93E-13 1.26E-13 2.38E-13 5.02E-13 2.29E-12 3.46E-12 3.78E-12
   0.4167  0.4167  0.4167    1  7.11413E-12 kpt; spin; max resid(k); each band:
  6.81E-16 8.14E-14 9.66E-14 1.75E-14 3.14E-14 3.23E-14 4.12E-14 3.40E-13
  2.16E-13 1.85E-13 6.78E-14 2.83E-13 9.77E-14 5.82E-12 6.14E-12 7.11E-12
 
 outwf: write wavefunction to file laoo_DS1_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     0.02[s], walltime:     0.02 [s]
 prteigrs : about to open file laoo_DS1_EIG
 Fermi (or HOMO) energy (hartree) =   0.26012   Average Vxc (hartree)=  -0.42748
 Eigenvalues (hartree) for nkpt=  18  k points:
 kpt#   1, nband= 16, wtk=  0.03704, kpt=  0.0833  0.0833  0.0833 (reduced coord)
  -0.86646   -0.39476   -0.32925   -0.32562   -0.25949   -0.25927   -0.25372    0.09425
   0.11042    0.11047    0.20134    0.20151    0.21543    0.23475    0.25286    0.25373
 kpt#   2, nband= 16, wtk=  0.07407, kpt=  0.2500  0.0833  0.0833 (reduced coord)
  -0.86554   -0.39822   -0.34168   -0.32474   -0.25897   -0.25368   -0.24133    0.08485
   0.10764    0.12543    0.18278    0.19238    0.20809    0.21348    0.24265    0.24584
 kpt#   3, nband= 16, wtk=  0.07407, kpt=  0.4167  0.0833  0.0833 (reduced coord)
  -0.86461   -0.40325   -0.34819   -0.32339   -0.25871   -0.25179   -0.23028    0.08361
   0.10388    0.13852    0.16609    0.17306    0.20435    0.21134    0.22428    0.23356
 kpt#   4, nband= 16, wtk=  0.03704, kpt=  0.2500  0.2500  0.0833 (reduced coord)
  -0.86467   -0.39546   -0.35233   -0.32938   -0.25654   -0.24551   -0.24049    0.07065
   0.11641    0.14681    0.15896    0.18577    0.19219    0.22157    0.23111    0.24799
 kpt#   5, nband= 16, wtk=  0.07407, kpt=  0.4167  0.2500  0.0833 (reduced coord)
  -0.86380   -0.39419   -0.35943   -0.33261   -0.25690   -0.24361   -0.23450    0.06793
   0.11913    0.13743    0.16418    0.17845    0.19430    0.21353    0.22604    0.23775
 kpt#   6, nband= 16, wtk=  0.03704, kpt=  0.4167  0.4167  0.0833 (reduced coord)
  -0.86298   -0.38034   -0.36898   -0.34719   -0.25420   -0.23851   -0.23739    0.06029
   0.11997    0.13179    0.17428    0.17994    0.19385    0.21119    0.22306    0.24578
 kpt#   7, nband= 16, wtk=  0.03704, kpt=  0.0833  0.0833  0.2500 (reduced coord)
  -0.86493   -0.39660   -0.34229   -0.32668   -0.25860   -0.25697   -0.23938    0.08320
   0.10890    0.12342    0.17951    0.19079    0.20326    0.20923    0.24100    0.24525
 kpt#   8, nband= 16, wtk=  0.07407, kpt=  0.2500  0.0833  0.2500 (reduced coord)
  -0.86408   -0.39432   -0.34946   -0.33125   -0.25802   -0.25028   -0.23989    0.06698
   0.11468    0.14904    0.15950    0.18237    0.18581    0.21996    0.23128    0.25213
 kpt#   9, nband= 16, wtk=  0.07407, kpt=  0.4167  0.0833  0.2500 (reduced coord)
  -0.86323   -0.39290   -0.35781   -0.33021   -0.25950   -0.24707   -0.23899    0.06263
   0.11609    0.13623    0.17117    0.17566    0.19219    0.21175    0.22497    0.24599
 kpt#  10, nband= 16, wtk=  0.03704, kpt=  0.2500  0.2500  0.2500 (reduced coord)
  -0.86329   -0.39007   -0.34522   -0.34314   -0.25997   -0.25447   -0.23790    0.04840
   0.14895    0.14955    0.15828    0.16882    0.17367    0.23291    0.24318    0.24708
 kpt#  11, nband= 16, wtk=  0.07407, kpt=  0.4167  0.2500  0.2500 (reduced coord)
  -0.86249   -0.38466   -0.35754   -0.33662   -0.26833   -0.24961   -0.24214    0.04016
   0.14084    0.15135    0.16855    0.17154    0.18859    0.23014    0.23852    0.24391
 kpt#  12, nband= 16, wtk=  0.03704, kpt=  0.4167  0.4167  0.2500 (reduced coord)
  -0.86173   -0.37173   -0.35973   -0.34590   -0.27056   -0.25405   -0.24924    0.02638
   0.14488    0.16927    0.17014    0.17350    0.20009    0.23780    0.23905    0.24720
 kpt#  13, nband= 16, wtk=  0.03704, kpt=  0.0833  0.0833  0.4167 (reduced coord)
  -0.86337   -0.40110   -0.35084   -0.32399   -0.25800   -0.25381   -0.23169    0.08132
   0.10501    0.12936    0.16678    0.16679    0.20234    0.20632    0.22285    0.22327
 kpt#  14, nband= 16, wtk=  0.07407, kpt=  0.2500  0.0833  0.4167 (reduced coord)
  -0.86261   -0.39202   -0.35822   -0.33135   -0.25798   -0.24945   -0.23922    0.06140
   0.11765    0.13549    0.16127    0.17461    0.19140    0.21122    0.22047    0.24520
 kpt#  15, nband= 16, wtk=  0.07407, kpt=  0.4167  0.0833  0.4167 (reduced coord)
  -0.86183   -0.37790   -0.36644   -0.34279   -0.25611   -0.24800   -0.24527    0.05009
   0.11632    0.13262    0.16720    0.17897    0.19596    0.21128    0.22269    0.26004
 kpt#  16, nband= 16, wtk=  0.03704, kpt=  0.2500  0.2500  0.4167 (reduced coord)
  -0.86188   -0.38358   -0.35693   -0.33634   -0.26529   -0.25500   -0.24515    0.03790
   0.14062    0.15137    0.16334    0.16739    0.19083    0.22749    0.24132    0.24147
 kpt#  17, nband= 16, wtk=  0.07407, kpt=  0.4167  0.2500  0.4167 (reduced coord)
  -0.86116   -0.37037   -0.35864   -0.34319   -0.26876   -0.26107   -0.25375    0.02282
   0.13830    0.16548    0.17150    0.17802    0.20025    0.22821    0.23986    0.25990
 kpt#  18, nband= 16, wtk=  0.03704, kpt=  0.4167  0.4167  0.4167 (reduced coord)
  -0.86047   -0.35868   -0.34852   -0.34723   -0.27982   -0.27256   -0.26694    0.00395
   0.16126    0.16808    0.17709    0.20257    0.20295    0.24425    0.25778    0.26012
 Total charge density [el/Bohr^3]
      Maximum=    9.3510E-01  at reduced coord.    0.5208    0.9792    0.5625
 Next maximum=    9.3510E-01  at reduced coord.    0.4792    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
 Next minimum=    1.5521E-03  at reduced coord.    0.5000    0.4792    0.5000
   Integrated=    3.2000E+01
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.47821208E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.47821208E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  5.22916415E-08  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure= -6.8227E+00 GPa]
- sigma(1 1)=  1.02332515E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.02332515E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.53847295E-03  sigma(2 1)=  0.00000000E+00
 
================================================================================
== DATASET  2 ==================================================================
-   nproc =    4
 
 
--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...
 
 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.
 
 find_getdtset : getcell/=0, take data from output of dataset with index  1.
 
 find_getdtset : getxred/=0, take data from output of dataset with index  1.
 
 
 getdim_nloc : deduce lmnmax  =  32, lnmax  =   8,
                      lmnmaxso=  32, lnmaxso=   8.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)
 
 Unit cell volume ucvol=  3.8854346E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     48.400   => boxcut(ratio)=   2.06197
 kpgio: loop on k-points done in parallel
inwffil: examining the header of disk file laoo_DS1_WFK
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.3           |  ABINIT  code version 8.10.3
. date 20200321 bantot  288 natom    5  |  date 20200321 bantot  288 natom    5
  nkpt  18 nsym  8 ngfft  48,  48,  48  |  nkpt  18 nsym 16 ngfft  48,  48,  48
  ntypat  3 ecut_eff  48.4000000        |  ntypat  3 ecut_eff  48.4000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     7.4331186   0.0000000   0.0000000  |     7.4331186   0.0000000   0.0000000
     0.0000000   7.4331186   0.0000000  |     0.0000000   7.4331186   0.0000000
     0.0000000   0.0000000   7.0322206  |     0.0000000   0.0000000   7.0322206
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4075
message: |
    input nsym=8 not equal disk file nsym=16
...
 
  nband:                                |  nband:
    16  16  16  16  16  16  16  16  16  |    16  16  16  16  16  16  16  16  16
    16  16  16  16  16  16  16  16  16  |    16  16  16  16  16  16  16  16  16
  typat:                                |  typat:
    1  2  3  3  3                       |    1  2  3  3  3
  so_psp  :                             |  so_psp  :
    1  1  1                             |    1  1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1                    |    1  1  1  1  1  1
  kpt:                                  |  kpt:
     0.0833333   0.0833333   0.0833333  |     0.0833333   0.0833333   0.0833333
     0.2500000   0.0833333   0.0833333  |     0.2500000   0.0833333   0.0833333
     0.4166667   0.0833333   0.0833333  |     0.4166667   0.0833333   0.0833333
     0.2500000   0.2500000   0.0833333  |     0.2500000   0.2500000   0.0833333
     0.4166667   0.2500000   0.0833333  |     0.4166667   0.2500000   0.0833333
  wtk:                                  |  wtk:
    0.037  0.074  0.074  0.037  0.074   |    0.037  0.074  0.074  0.037  0.074
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   znucl:                               |   znucl:
   57.00 13.00  8.00                    |   57.00 13.00  8.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 170510 pspcod    8 zion  11.0  |  pspdat 170510 pspcod    8 zion  11.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 170504 pspcod    8 zion   3.0  |  pspdat 170504 pspcod    8 zion   3.0
  pseudopotential atom type  3:         |  pseudopotential atom type  3:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat 170504 pspcod    8 zion   6.0  |  pspdat 170504 pspcod    8 zion   6.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.5000000   0.0000000   0.5000000  |     0.5000000   0.0000000   0.5000000
     0.0000000   0.5000000   0.5000000  |     0.0000000   0.5000000   0.5000000
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file laoo_DS1_WFK
 initwf: disk file gives npw= 6238 nband= 16 for kpt number= 1
 initwf: 16 bands have been initialized from disk
 initwf: disk file gives npw= 6241 nband= 16 for kpt number= 2
 initwf: 16 bands have been initialized from disk
 initwf: disk file gives npw= 6234 nband= 16 for kpt number= 3
 initwf: 16 bands have been initialized from disk
 initwf: disk file gives npw= 6245 nband= 16 for kpt number= 4
 initwf: 16 bands have been initialized from disk
 initwf: disk file gives npw= 6240 nband= 16 for kpt number= 5
 initwf: 16 bands have been initialized from disk
_setup2: Arith. and geom. avg. npw (full set) are    6248.926    6248.917
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
      Maximum=    9.3510E-01  at reduced coord.    0.5208    0.9792    0.4375
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
 
 initberry: Unreduced electric displacement field (a.u.)
  dfield(1:3) =        0.000000000       0.000000000       0.001137202
 
 
 initberry: Unreduced electric field (a.u.)
  efield(1:3) =        0.000000000       0.000000000       0.000000000
 
 
 initberry: Reduced electric field (ebar)
  red_efieldbar(1:3) =        0.000000000       0.000000000       0.000000000
 
  initberry: for direction 1, nkstr =   6, nstr =     36
  initberry: for direction 2, nkstr =   6, nstr =     36
  initberry: for direction 3, nkstr =   6, nstr =     36
 
 initberry: COMMENT - 
  The estimation of critical electric field should be checked after calculation.
  It is printed out just after total energy.
 
 
================================================================================
 
=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================
 
--- Iteration: (  1/200) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  3.71655931500000E+00  3.71655931500000E+00  3.51615071516570E+00
  3.71655931500000E+00  3.71655931500000E+00  0.00000000000000E+00
  3.71655931500000E+00  0.00000000000000E+00  3.51615071516570E+00
  0.00000000000000E+00  3.71655931500000E+00  3.51615071516570E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  0.00000000000000E+00
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  5.00000000000000E-01
 Scale of Primitive Cell (acell) [bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03230143033139E+00
 Real space primitive translations (rprimd) [bohr]
  7.43311863000000E+00  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.43311863000000E+00  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.03230143033139E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  3.88543462459108E+02
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  7.43311863000000E+00  7.43311863000000E+00  7.03230143033139E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.16667  0.00000  0.00000 (in reduced coordinates)
  0.02242  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.455690852E-23
               2        0.574292917E-22
               3       -0.182346534E-22
               4       -0.182346534E-22
               5        0.574292917E-22
               6        0.455690852E-23
               7       -0.500000000E+00
               8       -0.500000000E+00
               9        0.416500291E-07
              10        0.416500291E-07
              11       -0.500000000E+00
              12       -0.500000000E+00
              13       -0.500000000E+00
              14       -0.500000000E+00
              15       -0.500000000E+00
              16       -0.500000000E+00
              17       -0.500000000E+00
              18       -0.500000000E+00
              19       -0.500000000E+00
              20       -0.500000000E+00
              21       -0.500000000E+00
              22       -0.500000000E+00
              23       -0.500000000E+00
              24       -0.500000000E+00
              25       -0.500000000E+00
              26       -0.500000000E+00
              27       -0.416500291E-07
              28       -0.416500291E-07
              29       -0.500000000E+00
              30       -0.500000000E+00
              31       -0.455690852E-23
              32       -0.574292917E-22
              33        0.182346534E-22
              34        0.182346534E-22
              35       -0.574292917E-22
              36       -0.455690852E-23
         total       -0.277777778E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3          -0.100000000E+01
   4      3          -0.100000000E+01
   5      3           0.000000000E+00
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777778E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777778E-01
    Remapping in [-1,1]    -7.777777778E-01
 P(1) Shifted polarization branch to minimize red_efield            k from    -7.777777778E-01 by -1
 
           Polarization     4.251272508E-03 (a.u. of charge)/bohr^2
           Polarization     2.432355425E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.16667  0.00000 (in reduced coordinates)
  0.00000  0.02242  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.355872631E-22
               2        0.440459335E-22
               3       -0.424458468E-22
               4       -0.424458468E-22
               5        0.440459335E-22
               6       -0.355872631E-22
               7       -0.500000000E+00
               8       -0.500000000E+00
               9       -0.274511125E-07
              10       -0.274511125E-07
              11       -0.500000000E+00
              12       -0.500000000E+00
              13       -0.500000000E+00
              14       -0.500000000E+00
              15       -0.500000000E+00
              16       -0.500000000E+00
              17       -0.500000000E+00
              18       -0.500000000E+00
              19       -0.500000000E+00
              20       -0.500000000E+00
              21       -0.500000000E+00
              22       -0.500000000E+00
              23       -0.500000000E+00
              24       -0.500000000E+00
              25       -0.500000000E+00
              26       -0.500000000E+00
              27        0.274511125E-07
              28        0.274511125E-07
              29       -0.500000000E+00
              30       -0.500000000E+00
              31        0.355872631E-22
              32       -0.440459335E-22
              33        0.424458468E-22
              34        0.424458468E-22
              35       -0.440459335E-22
              36        0.355872631E-22
         total       -0.277777778E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3          -0.100000000E+01
   4      3           0.000000000E+00
   5      3          -0.100000000E+01
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777778E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777778E-01
    Remapping in [-1,1]    -7.777777778E-01
 P(2) Shifted polarization branch to minimize red_efield            k from    -7.777777778E-01 by -1
 
           Polarization     4.251272508E-03 (a.u. of charge)/bohr^2
           Polarization     2.432355425E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.16667 (in reduced coordinates)
  0.00000  0.00000  0.02370 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.500000025E+00
               2       -0.500000025E+00
               3       -0.500000025E+00
               4       -0.500000025E+00
               5       -0.500000025E+00
               6       -0.500000025E+00
               7       -0.500000025E+00
               8        0.723939811E-07
               9       -0.727531871E-07
              10       -0.727531871E-07
              11        0.723939811E-07
              12       -0.500000025E+00
              13       -0.500000025E+00
              14       -0.727531871E-07
              15        0.119455248E-06
              16        0.119455248E-06
              17       -0.727531871E-07
              18       -0.500000025E+00
              19       -0.500000025E+00
              20       -0.727531871E-07
              21        0.119455248E-06
              22        0.119455248E-06
              23       -0.727531871E-07
              24       -0.500000025E+00
              25       -0.500000025E+00
              26        0.723939811E-07
              27       -0.727531871E-07
              28       -0.727531871E-07
              29        0.723939811E-07
              30       -0.500000025E+00
              31       -0.500000025E+00
              32       -0.500000025E+00
              33       -0.500000025E+00
              34       -0.500000025E+00
              35       -0.500000025E+00
              36       -0.500000025E+00
         total       -0.277777786E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3           0.000000000E+00
   4      3          -0.100000000E+01
   5      3          -0.100000000E+01
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777864E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777864E-01
    Remapping in [-1,1]    -7.777777864E-01
 P(3) Shifted polarization branch to minimize red_efield            k from    -7.777777864E-01 by -1
 
           Polarization     4.022030330E-03 (a.u. of charge)/bohr^2
           Polarization     2.301195060E-01 C/m^2
 
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  48
         ecut(hartree)=     40.000   => boxcut(ratio)=   2.26817
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   51.445821 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 Total charge density [el/Bohr^3]
      Maximum=    9.3510E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.16667  0.00000  0.00000 (in reduced coordinates)
  0.02242  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.204523426E-23
               2       -0.848489566E-23
               3       -0.913668353E-23
               4       -0.913668353E-23
               5       -0.848489566E-23
               6       -0.204523426E-23
               7       -0.500000000E+00
               8       -0.500000000E+00
               9        0.134336084E-07
              10        0.134336084E-07
              11       -0.500000000E+00
              12       -0.500000000E+00
              13       -0.500000000E+00
              14       -0.500000000E+00
              15       -0.500000000E+00
              16       -0.500000000E+00
              17       -0.500000000E+00
              18       -0.500000000E+00
              19       -0.500000000E+00
              20       -0.500000000E+00
              21       -0.500000000E+00
              22       -0.500000000E+00
              23       -0.500000000E+00
              24       -0.500000000E+00
              25       -0.500000000E+00
              26       -0.500000000E+00
              27       -0.134336084E-07
              28       -0.134336084E-07
              29       -0.500000000E+00
              30       -0.500000000E+00
              31        0.204523426E-23
              32        0.848489566E-23
              33        0.913668353E-23
              34        0.913668353E-23
              35        0.848489566E-23
              36        0.204523426E-23
         total       -0.277777778E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3          -0.100000000E+01
   4      3          -0.100000000E+01
   5      3           0.000000000E+00
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777778E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777778E-01
    Remapping in [-1,1]    -7.777777778E-01
 P(1) Shifted polarization branch to minimize red_efield            k from    -7.777777778E-01 by -1
 
           Polarization     4.251272508E-03 (a.u. of charge)/bohr^2
           Polarization     2.432355425E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.16667  0.00000 (in reduced coordinates)
  0.00000  0.02242  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.150595134E-22
               2       -0.107626780E-23
               3        0.635498715E-25
               4        0.635498715E-25
               5       -0.107626780E-23
               6        0.150595134E-22
               7       -0.500000000E+00
               8       -0.500000000E+00
               9       -0.627568372E-08
              10       -0.627568372E-08
              11       -0.500000000E+00
              12       -0.500000000E+00
              13       -0.500000000E+00
              14       -0.500000000E+00
              15       -0.500000000E+00
              16       -0.500000000E+00
              17       -0.500000000E+00
              18       -0.500000000E+00
              19       -0.500000000E+00
              20       -0.500000000E+00
              21       -0.500000000E+00
              22       -0.500000000E+00
              23       -0.500000000E+00
              24       -0.500000000E+00
              25       -0.500000000E+00
              26       -0.500000000E+00
              27        0.627568372E-08
              28        0.627568372E-08
              29       -0.500000000E+00
              30       -0.500000000E+00
              31       -0.150595134E-22
              32        0.107626780E-23
              33       -0.635498715E-25
              34       -0.635498715E-25
              35        0.107626780E-23
              36       -0.150595134E-22
         total       -0.277777778E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3          -0.100000000E+01
   4      3           0.000000000E+00
   5      3          -0.100000000E+01
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777778E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777778E-01
    Remapping in [-1,1]    -7.777777778E-01
 P(2) Shifted polarization branch to minimize red_efield            k from    -7.777777778E-01 by -1
 
           Polarization     4.251272508E-03 (a.u. of charge)/bohr^2
           Polarization     2.432355425E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.16667 (in reduced coordinates)
  0.00000  0.00000  0.02370 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.500000015E+00
               2       -0.500000015E+00
               3       -0.500000015E+00
               4       -0.500000015E+00
               5       -0.500000015E+00
               6       -0.500000015E+00
               7       -0.500000015E+00
               8        0.294107890E-07
               9       -0.368129477E-07
              10       -0.368129477E-07
              11        0.294107890E-07
              12       -0.500000015E+00
              13       -0.500000015E+00
              14       -0.368129477E-07
              15        0.367834895E-07
              16        0.367834895E-07
              17       -0.368129477E-07
              18       -0.500000015E+00
              19       -0.500000015E+00
              20       -0.368129477E-07
              21        0.367834895E-07
              22        0.367834895E-07
              23       -0.368129477E-07
              24       -0.500000015E+00
              25       -0.500000015E+00
              26        0.294107890E-07
              27       -0.368129477E-07
              28       -0.368129477E-07
              29        0.294107890E-07
              30       -0.500000015E+00
              31       -0.500000015E+00
              32       -0.500000015E+00
              33       -0.500000015E+00
              34       -0.500000015E+00
              35       -0.500000015E+00
              36       -0.500000015E+00
         total       -0.277777787E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3           0.000000000E+00
   4      3          -0.100000000E+01
   5      3          -0.100000000E+01
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777869E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777869E-01
    Remapping in [-1,1]    -7.777777869E-01
 P(3) Shifted polarization branch to minimize red_efield            k from    -7.777777869E-01 by -1
 
           Polarization     4.022030321E-03 (a.u. of charge)/bohr^2
           Polarization     2.301195055E-01 C/m^2
 
 
scfcv: Constant reduced d-field  - Pre E-field:
 (a. u.)
       e:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
       p:   2.222222222E-01   2.222222222E-01   2.222222131E-01  
       d:   0.000000000E+00   0.000000000E+00   5.000000000E-03  
 e  +  p:   2.222222222E-01   2.222222222E-01   2.222222131E-01
 
    ebar:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
    pbar:   3.970999865E-01   3.970999865E-01   3.554288548E-01  
    dbar:   0.000000000E+00   0.000000000E+00   7.997149561E-03  
 eba+pba:   3.970999865E-01   3.970999865E-01   3.554288548E-01
 
       E:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
       P:   4.251272508E-03   4.251272508E-03   4.022030321E-03  
       D:   0.000000000E+00   0.000000000E+00   1.137202328E-03  
E+4*pi*P:   5.342306591E-02   5.342306591E-02   5.054232364E-02
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:   0.000000000E+00   0.000000000E+00   0.000000000E+00  
       P:   2.432355425E-01   2.432355425E-01   2.301195055E-01  
       D:   0.000000000E+00   0.000000000E+00   5.177689086E-03  
eps0*E+P:   2.432355425E-01   2.432355425E-01   2.301195055E-01  
 
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  1  -87.396156622936    -8.740E+01 2.632E-12 4.718E-07
 scprqt: <Vxc>= -4.2747527E-01 hartree
 
Simple mixing update:
  residual square of the potential :  1.799392691627787E-007
 scfcv_core: previous iteration took 04 [s]
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 Total charge density [el/Bohr^3]
      Maximum=    9.3509E-01  at reduced coord.    0.5208    0.9792    0.5625
      Minimum=    1.0364E-03  at reduced coord.    0.5000    0.5000    0.5000
   Integrated=    3.2000E+01
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.16667  0.00000  0.00000 (in reduced coordinates)
  0.02242  0.00000  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1        0.198694656E-23
               2        0.100242035E-22
               3        0.334840919E-23
               4        0.334840919E-23
               5        0.100242035E-22
               6        0.198694656E-23
               7       -0.500000000E+00
               8       -0.500000000E+00
               9        0.722618155E-08
              10        0.722618155E-08
              11       -0.500000000E+00
              12       -0.500000000E+00
              13       -0.500000000E+00
              14       -0.500000000E+00
              15       -0.500000000E+00
              16       -0.500000000E+00
              17       -0.500000000E+00
              18       -0.500000000E+00
              19       -0.500000000E+00
              20       -0.500000000E+00
              21       -0.500000000E+00
              22       -0.500000000E+00
              23       -0.500000000E+00
              24       -0.500000000E+00
              25       -0.500000000E+00
              26       -0.500000000E+00
              27       -0.722618155E-08
              28       -0.722618155E-08
              29       -0.500000000E+00
              30       -0.500000000E+00
              31       -0.198694656E-23
              32       -0.100242035E-22
              33       -0.334840919E-23
              34       -0.334840919E-23
              35       -0.100242035E-22
              36       -0.198694656E-23
         total       -0.277777778E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3          -0.100000000E+01
   4      3          -0.100000000E+01
   5      3           0.000000000E+00
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777778E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777778E-01
    Remapping in [-1,1]    -7.777777778E-01
 P(1) Shifted polarization branch to minimize red_efield            k from    -7.777777778E-01 by -1
 
           Polarization     4.251272508E-03 (a.u. of charge)/bohr^2
           Polarization     2.432355425E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.16667  0.00000 (in reduced coordinates)
  0.00000  0.02242  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.935837587E-23
               2       -0.539058155E-23
               3       -0.243202249E-23
               4       -0.243202249E-23
               5       -0.539058155E-23
               6       -0.935837587E-23
               7       -0.500000000E+00
               8       -0.500000000E+00
               9       -0.340832336E-08
              10       -0.340832336E-08
              11       -0.500000000E+00
              12       -0.500000000E+00
              13       -0.500000000E+00
              14       -0.500000000E+00
              15       -0.500000000E+00
              16       -0.500000000E+00
              17       -0.500000000E+00
              18       -0.500000000E+00
              19       -0.500000000E+00
              20       -0.500000000E+00
              21       -0.500000000E+00
              22       -0.500000000E+00
              23       -0.500000000E+00
              24       -0.500000000E+00
              25       -0.500000000E+00
              26       -0.500000000E+00
              27        0.340832336E-08
              28        0.340832336E-08
              29       -0.500000000E+00
              30       -0.500000000E+00
              31        0.935837587E-23
              32        0.539058155E-23
              33        0.243202249E-23
              34        0.243202249E-23
              35        0.539058155E-23
              36        0.935837587E-23
         total       -0.277777778E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3          -0.100000000E+01
   4      3           0.000000000E+00
   5      3          -0.100000000E+01
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777778E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777778E-01
    Remapping in [-1,1]    -7.777777778E-01
 P(2) Shifted polarization branch to minimize red_efield            k from    -7.777777778E-01 by -1
 
           Polarization     4.251272508E-03 (a.u. of charge)/bohr^2
           Polarization     2.432355425E-01 C/m^2
 
 
 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  0.16667 (in reduced coordinates)
  0.00000  0.00000  0.02370 (in cartesian coordinates - atomic units)
 Number of strings:    36
 Number of k points in string:    6
 
 Compute the electronic contribution to polarization
 
          istr          polberry(istr)
               1       -0.500000002E+00
               2       -0.500000002E+00
               3       -0.500000002E+00
               4       -0.500000002E+00
               5       -0.500000002E+00
               6       -0.500000002E+00
               7       -0.500000002E+00
               8        0.168047951E-07
               9       -0.120230187E-07
              10       -0.120230187E-07
              11        0.168047951E-07
              12       -0.500000002E+00
              13       -0.500000002E+00
              14       -0.120230187E-07
              15        0.167888015E-07
              16        0.167888015E-07
              17       -0.120230187E-07
              18       -0.500000002E+00
              19       -0.500000002E+00
              20       -0.120230187E-07
              21        0.167888015E-07
              22        0.167888015E-07
              23       -0.120230187E-07
              24       -0.500000002E+00
              25       -0.500000002E+00
              26        0.168047951E-07
              27       -0.120230187E-07
              28       -0.120230187E-07
              29        0.168047951E-07
              30       -0.500000002E+00
              31       -0.500000002E+00
              32       -0.500000002E+00
              33       -0.500000002E+00
              34       -0.500000002E+00
              35       -0.500000002E+00
              36       -0.500000002E+00
         total       -0.277777778E+00 (isppol=   1)
 Compute the ionic contributions
 
  itom  itypat               polion
   1      1           0.000000000E+00
   2      2          -0.500000000E+00
   3      3           0.000000000E+00
   4      3          -0.100000000E+01
   5      3          -0.100000000E+01
         total          -5.000000000E-01
 
 Summary of the results
 Electronic Berry phase    -2.777777781E-01
            Ionic phase    -5.000000000E-01
            Total phase    -7.777777781E-01
    Remapping in [-1,1]    -7.777777781E-01
 P(3) Shifted polarization branch to minimize red_efield            k from    -7.777777781E-01 by -1
 
           Polarization     4.022030480E-03 (a.u. of charge)/bohr^2
           Polarization     2.301195146E-01 C/m^2
 
JH -   E-field component:    1
 E(n)= -5.34231E-03,    E(n-1)=  0.00000E+00,    E(n)-E(n-1)= -5.34231E-03,    maxestep=  5.00000E-03
JH -   E-field component:    2
 E(n)= -5.34231E-03,    E(n-1)=  0.00000E+00,    E(n)-E(n-1)= -5.34231E-03,    maxestep=  5.00000E-03
 
scfcv: Constant reduced d-field  - updating E-field:
 (a. u.)
       e:  -2.079834042E-02  -2.079834042E-02  -2.172222219E-02  
       p:   2.222222222E-01   2.222222222E-01   2.222222219E-01  
       d:   0.000000000E+00   0.000000000E+00   5.000000000E-03  
 e  +  p:   2.014238818E-01   2.014238818E-01   2.004999997E-01
 
    ebar:  -3.716559315E-02  -3.716559315E-02  -3.474317193E-02  
    pbar:   3.970999865E-01   3.970999865E-01   3.554288689E-01  
    dbar:   0.000000000E+00   0.000000000E+00   7.997149561E-03  
 eba+pba:   3.599343934E-01   3.599343934E-01   3.206856969E-01
 
       E:  -5.000000000E-03  -5.000000000E-03  -4.940512331E-03  
       P:   4.251272508E-03   4.251272508E-03   4.022030480E-03  
       D:   0.000000000E+00   0.000000000E+00   1.137202328E-03  
E+4*pi*P:   4.842306591E-02   4.842306591E-02   4.560181331E-02
 
 (S.I.), that is V/m for E, and C/m^2 for P and D
-      E:  -2.571103160E+09  -2.571103160E+09  -2.540513373E+09  
       P:   2.432355425E-01   2.432355425E-01   2.301195146E-01  
       D:   0.000000000E+00   0.000000000E+00   5.177689086E-03  
eps0*E+P:   2.204705122E-01   2.204705122E-01   2.076253320E-01  
 
  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=      110592
 ETOT  2  -87.395006290771     1.150E-03 3.531E-12 7.457E-07
 scprqt: <Vxc>= -4.2747566E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.434      0.566
 scfcv_core: previous iteration took 04 [s]
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
