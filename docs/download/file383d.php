
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
          HAVE_DFT_ATOMPAW            HAVE_DFT_LIBXC HAVE_DFT_LIBXC_GET_NUMBER
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
             HAVE_FC_ETIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV            HAVE_FC_GETPID
 
   HAVE_FC_IEEE_EXCEPTIONS             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
                  HAVE_FFT        HAVE_FFT_FFTW3_MKL              HAVE_FFT_MPI
 
           HAVE_FFT_SERIAL        HAVE_LIBPAW_ABINIT               HAVE_LINALG
 
         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M  HAVE_LINALG_MKL_IMATCOPY
 
   HAVE_LINALG_MKL_OMATADD  HAVE_LINALG_MKL_OMATCOPY           HAVE_LINALG_MPI
 
     HAVE_LINALG_SCALAPACK        HAVE_LINALG_SERIAL     HAVE_LINALG_ZDOTC_B*G
 
     HAVE_LINALG_ZDOTU_B*G                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY
 
         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX
 
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI
 
         HAVE_TIMER_SERIAL          HAVE_TRIO_NETCDF              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.10.5
  Build target  : x86_64_linux_intel17.0
  Build date    : 20170611
 
 === Compiler Suite === 
  C compiler       : intel17.0
  C++ compiler     : gnu17.0
  Fortran compiler : intel17.0
  CFLAGS           : -I/mnt/beegfs/include -g -traceback -ipo -xMIC-AVX512  -qopenmp -unroll-aggressive
  CXXFLAGS         : -I/mnt/beegfs/include -g -ipo -xMIC-AVX512 -qopenmp -unroll-aggressive -traceback
  FCFLAGS          : -I/mnt/beegfs/include -traceback -g -ipo -xMIC-AVX512  -qopenmp -unroll-aggressive
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : yes
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw
  FFT flavor    : fftw3-mkl
  LINALG flavor : mkl+scalapack
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
   --- None ---


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

