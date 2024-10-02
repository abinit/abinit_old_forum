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
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
              HAVE_ATOMPAW        HAVE_AVX_SAFE_MODE HAVE_FC_ALLOCATABLE_DT...
 
             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME             HAVE_FC_ETIME
 
              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA
 
            HAVE_FC_GETENV            HAVE_FC_GETPID   HAVE_FC_IEEE_EXCEPTIONS
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
                  HAVE_FFT        HAVE_FFT_FFTW3_MKL              HAVE_FFT_MPI
 
           HAVE_FFT_SERIAL        HAVE_LIBPAW_ABINIT      HAVE_LIBTETRA_ABINIT
 
                HAVE_LIBXC               HAVE_LINALG         HAVE_LINALG_AXPBY
 
        HAVE_LINALG_GEMM3M  HAVE_LINALG_MKL_IMATCOPY   HAVE_LINALG_MKL_OMATADD
 
  HAVE_LINALG_MKL_OMATCOPY   HAVE_LINALG_MKL_THREADS           HAVE_LINALG_MPI
 
     HAVE_LINALG_SCALAPACK        HAVE_LINALG_SERIAL     HAVE_LINALG_ZDOTC_B*G
 
     HAVE_LINALG_ZDOTU_B*G                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
        HAVE_MPI_INTEGER16               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
               HAVE_NETCDF           HAVE_NETCDF_MPI                HAVE_NUMPY
 
         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX
 
         HAVE_TIMER_ABINIT              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 8.4.2
  Build target  : x86_64_linux_intel17.0
  Build date    : 20170610
 
 === Compiler Suite === 
  C compiler       : intel17.0
  C++ compiler     : gnu17.0
  Fortran compiler : intel17.0
  CFLAGS           : -I/mnt/beegfs/include -g -traceback -ipo -xMIC-AVX512  -qopenmp -unroll-aggressive
  CXXFLAGS         : -I/mnt/beegfs/include -g -ipo -xMIC-AVX512 -qopenmp -unroll-aggressive -traceback
  FCFLAGS          : -I/mnt/beegfs/include -traceback -g -ipo -xMIC-AVX512  -qopenmp -unroll-aggressive
  FC_LDFLAGS       : 
 
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

