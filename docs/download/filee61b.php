/* config.h.  Generated from config.h.in by configure.  */
/* config.h.in.  Generated from configure.ac by autoheader.  */

/*
 * Copyright (C) 2005-2011 Abinit Group (Yann Pouillon)
 *
 * This file is part of the Abinit software package. For license information,
 * please see the COPYING file in the top-level directory of the Abinit source
 * distribution.
 *
 */

/* Abinit configuration */

#ifndef _ABINIT_CONFIG_H
#define _ABINIT_CONFIG_H

#ifdef __INTEL_COMPILER
#define FC_INTEL 1
#endif



/* Abinit target description. */
#define ABINIT_TARGET "x86_64_linux_gnu4.4"

/* Abinit whole version number. */
#define ABINIT_VERSION "7.0.5"

/* Abinit base version number. */
#define ABINIT_VERSION_BASE "7.0"

/* Abinit build date. */
#define ABINIT_VERSION_BUILD "20130201"

/* Abinit major version number. */
#define ABINIT_VERSION_MAJOR "7"

/* Abinit micro version number (patch level). */
#define ABINIT_VERSION_MICRO "5"

/* Abinit minor version number. */
#define ABINIT_VERSION_MINOR "0"

/* Fortran module name mangling macro. */
/* #undef ABI_FC_MOD */

/* Define if building universal (internal helper macro) */
/* #undef AC_APPLE_UNIVERSAL_BUILD */

/* Define to 1 if you are using the COMPAQ C compiler. */
/* #undef CC_COMPAQ */

/* Define to 1 if you are using the GNU C compiler. */
#define CC_GNU 1

/* Define to 1 if you are using the IBM XL C compiler. */
/* #undef CC_IBM */

/* Define to 1 if you are using the Intel C compiler. */
/* #undef CC_INTEL */

/* Define to 1 if you are using the Open64 C compiler. */
/* #undef CC_OPEN64 */

/* Define to 1 if you are using the PathScale C compiler. */
/* #undef CC_PATHSCALE */

/* Define to 1 if you are using the Portland Group C compiler. */
/* #undef CC_PGI */

/* Define to 1 if you are using the Sun C compiler. */
/* #undef CC_SUN */

/* Define to 1 if you are using the COMPAQ C++ compiler. */
/* #undef CXX_COMPAQ */

/* Define to 1 if you are using the GNU C++ compiler. */
#define CXX_GNU 1

/* Define to 1 if you are using the IBM XL C++ compiler. */
/* #undef CXX_IBM */

/* Define to 1 if you are using the Intel C++ compiler. */
/* #undef CXX_INTEL */

/* Define to 1 if you are using the Open64 C++ compiler. */
/* #undef CXX_OPEN64 */

/* Define to 1 if you are using the PathScale C++ compiler. */
/* #undef CXX_PATHSCALE */

/* Define to 1 if you are using the Portland Group C++ compiler. */
/* #undef CXX_PGI */

/* Define to 1 if you are using the Sun C++ compiler. */
/* #undef CXX_SUN */

/* Define to 1 if you want to activate design-by-contract debugging tests. */
/* #undef DEBUG_CONTRACT */

/* Define to 1 to turn on debug mode. */
/* #undef DEBUG_MODE */

/* Define to 1 if you are using the ABSOFT Fortran compiler. */
/* #undef FC_ABSOFT */

/* Define to dummy `main' function (if any) required to link to the Fortran
   libraries. */
/* #undef FC_DUMMY_MAIN */

/* Define if F77 and FC dummy `main' functions are identical. */
/* #undef FC_DUMMY_MAIN_EQ_F77 */

/* Define to 1 if you are using the Fujitsu Fortran compiler. */
/* #undef FC_FUJITSU */

/* Define to a macro mangling the given C identifier (in lower and upper
   case), which must not contain underscores, for linking with Fortran. */
#define FC_FUNC(name,NAME) name ## _

/* As FC_FUNC, but for C identifiers containing underscores. */
#define FC_FUNC_(name,NAME) name ## _

/* Define to 1 if you are using the G95 Fortran compiler. */
/* #undef FC_G95 */

/* Define to 1 if you are using the GNU Fortran compiler. */
#define FC_GNU 1

/* Define to 1 if you are using the Hitachi Fortran compiler. */
/* #undef FC_HITACHI */

/* Define to 1 if you are using the IBM XL Fortran compiler. */
/* #undef FC_IBM */

/* Define to 1 if you are using the Intel Fortran compiler. */
/* #undef FC_INTEL */

/* Define to 1 if you are using the MIPSpro Fortran compiler. */
/* #undef FC_MIPSPRO */

/* Define to 1 if you are using the NAGWare Fortran 95 compiler. */
/* #undef FC_NAG */

/* Define to 1 if you are using the Open64 Fortran compiler. */
/* #undef FC_OPEN64 */

/* Define to 1 if you are using the PathScale Fortran compiler. */
/* #undef FC_PATHSCALE */

/* Define to 1 if you are using the Portland Group Fortran compiler. */
/* #undef FC_PGI */

/* Define to 1 if you are using the Sun Fortran compiler. */
/* #undef FC_SUN */

/* Define to 1 if you have the `abort' function. */
#define HAVE_ABORT 1

/* Define to 1 if you have an optimized algorithmic library. */
/* #undef HAVE_ALGO */

/* Define to 1 if you have the Levenberg-Marquardt algorithmic library. */
/* #undef HAVE_ALGO_LEVMAR */

/* Define to 1 if you have an optimized MPI-parallel algorithmic library. */
/* #undef HAVE_ALGO_MPI */

/* Define to 1 if you have an optimized serial algorithmic library. */
/* #undef HAVE_ALGO_SERIAL */

/* Define to 1 if you want to activate support for bindings (EXPERIMENTAL). */
/* #undef HAVE_BINDINGS */

/* Define to 1 if you want to activate Bethe-Salpeter unpacking
   (EXPERIMENTAL). */
#define HAVE_BSE_UNPACKED 1

/* Define to 1 if you are working in a Bazaar branch. */
/* #undef HAVE_BZR_BRANCH */

/* Use C clock for timings. */
/* #undef HAVE_CCLOCK */

/* Define to 1 if you want to enable the Abinit C library (EXPERIMENTAL). */
/* #undef HAVE_CLIB */

/* Define to 1 if you have the `clock_gettime' function. */
/* #undef HAVE_CLOCK_GETTIME */

/* Define to 1 if you have the <cublas.h> header file. */
/* #undef HAVE_CUBLAS_H */

/* Define to 1 if you have the <cuda_runtime_api.h> header file. */
/* #undef HAVE_CUDA_RUNTIME_API_H */

/* Define to 1 if you have the <cufft.h> header file. */
/* #undef HAVE_CUFFT_H */

/* Define to 1 if you want to enable the use of internal timer for
   developments. */
/* #undef HAVE_DEV_TIMER */

/* Define to 1 if you have the AtomPAW library. */
#define HAVE_DFT_ATOMPAW 1

/* Define to 1 if you have the BigDFT library. */
#define HAVE_DFT_BIGDFT 1

/* Define to 1 if you have the LibXC library. */
#define HAVE_DFT_LIBXC 1

/* Define to 1 if you have the Wannier90 library. */
#define HAVE_DFT_WANNIER90 1

/* Define to 1 if you have the <errno.h> header file. */
#define HAVE_ERRNO_H 1

/* Define to 1 if your Fortran compiler supports allocatable arrays in
   datatypes. */
#define HAVE_FC_ALLOCATABLE_DTARRAYS 1

/* Define to 1 if your Fortran compiler supports cpu_time(). */
#define HAVE_FC_CPUTIME 1

/* Define to 1 if your Fortran compiler supports etime(). */
/* #undef HAVE_FC_ETIME */

/* Define to 1 if your Fortran compiler supports exit(). */
#define HAVE_FC_EXIT 1

/* Define to 1 if your Fortran compiler supports flush(). */
#define HAVE_FC_FLUSH 1

/* Define to 1 if your Fortran compiler supports flush_(). */
/* #undef HAVE_FC_FLUSH_ */

/* Define to 1 if your Fortran compiler supports gamma(). */
#define HAVE_FC_GAMMA 1

/* Define to 1 if your Fortran compiler supports getenv(). */
#define HAVE_FC_GETENV 1

/* Define to 1 if your Fortran compiler supports getpid(). */
/* #undef HAVE_FC_GETPID */

/* Define to 1 if your Fortran compiler accepts quadruple integers. */
#define HAVE_FC_INT_QUAD 1

/* Define to 1 if your Fortran compiler provides the iso_c_binding module. */
#define HAVE_FC_ISO_C_BINDING 1

/* Define to 1 if your Fortran compiler supports long lines. */
#define HAVE_FC_LONG_LINES 1

/* Define to 1 if your Fortran compiler supports the null() intrinsic. */
#define HAVE_FC_NULL 1

/* Define to 1 if your Fortran compiler supports stream IO. */
#define HAVE_FC_STREAM_IO 1

/* Define to 1 if you have an optimized FFT library. */
#define HAVE_FFT 1

/* Define to 1 if you want to use the ASL library for FFT. */
/* #undef HAVE_FFT_ASL */

/* Define to 1 if you want to use the FFTW2 library. */
/* #undef HAVE_FFT_FFTW2 */

/* Define to 1 if you want to use the threaded FFTW2 library. */
/* #undef HAVE_FFT_FFTW2_THREADS */

/* Define to 1 if you want to use the FFTW3 library. */
#define HAVE_FFT_FFTW3 1

/* Define to 1 if you want to use the threaded FFTW3 library. */
/* #undef HAVE_FFT_FFTW3_MKL */

/* Define to 1 if you want to use the threaded FFTW3 library. */
/* #undef HAVE_FFT_FFTW3_THREADS */

/* Define to 1 if you want to use the HP MLIB library for FFT. */
/* #undef HAVE_FFT_MLIB */

/* Define to 1 if you have an optimized MPI-parallel FFT library. */
#define HAVE_FFT_MPI 1

/* Define to 1 if you have an optimized serial FFT library. */
#define HAVE_FFT_SERIAL 1

/* Define to 1 if you want to use the SGIMATH library for FFT. */
/* #undef HAVE_FFT_SGIMATH */

/* Define to 1 if your Fortran compiler supports Fortran 2003. */
#define HAVE_FORTRAN2003 1

/* Define to 1 if you have a GPU library. */
/* #undef HAVE_GPU */

/* Define to 1 if you have the Cuda library. */
/* #undef HAVE_GPU_CUDA */

/* Define to 1 if you have a Cuda version < 4. */
/* #undef HAVE_GPU_CUDA3 */

/* Define to 1 if you want to perform double-precision Cuda calculations. */
/* #undef HAVE_GPU_CUDA_DP */

/* Define to 1 if you want to perform single-precision Cuda calculations. */
/* #undef HAVE_GPU_CUDA_SP */

/* Define to 1 if you have a MPI-aware GPU library. */
/* #undef HAVE_GPU_MPI */

/* Define to 1 if you have a serial GPU library. */
/* #undef HAVE_GPU_SERIAL */

/* Define to 1 if you have the <gsl/gsl_sf_gamma.h> header file. */
/* #undef HAVE_GSL_GSL_SF_GAMMA_H */

/* Define to 1 if you want to activate double-precision GW calculations
   (EXPERIMENTAL). */
#define HAVE_GW_DPC 1

/* Define to 1 if you have the <inttypes.h> header file. */
#define HAVE_INTTYPES_H 1

/* Define to 1 if you have the <levmar.h> header file. */
/* #undef HAVE_LEVMAR_H */

/* Define to 1 if you have the `veclib' library (-lveclib). */
/* #undef HAVE_LIBVECLIB */

/* Define to 1 if you have an optimized linear algebra library. */
/* #undef HAVE_LINALG */

/* Define to 1 if you have the ASL linear algebra library. */
/* #undef HAVE_LINALG_ASL */

/* Define to 1 if you have an AXPBY BLAS1 extensions. */
/* #undef HAVE_LINALG_AXPBY */

/* Define to 1 if you have the ESSL linear algebra library. */
/* #undef HAVE_LINALG_ESSL */

/* Define to 1 if you have ?GEMM3M BLAS3 extensions. */
/* #undef HAVE_LINALG_GEMM3M */

/* Define to 1 if you have an optimized GPU-compatible linear algebra library.
   */
/* #undef HAVE_LINALG_GPU */

/* Define to 1 if you have the MAGMA linear algebra library. */
/* #undef HAVE_LINALG_MAGMA */

/* Define to 1 if you have mkl_?imatcopy extensions. */
/* #undef HAVE_LINALG_MKL_IMATCOPY */

/* Define to 1 if you have mkl_?omatadd extensions. */
/* #undef HAVE_LINALG_MKL_OMATADD */

/* Define to 1 if you have mkl_?omatcopy extensions. */
/* #undef HAVE_LINALG_MKL_OMATCOPY */

/* Define to 1 if you have an optimized MPI-parallel linear algebra library.
   */
/* #undef HAVE_LINALG_MPI */

/* Define to 1 if you have an optimized ScaLAPACK linear algebra library. */
/* #undef HAVE_LINALG_SCALAPACK */

/* Define to 1 if you have an optimized serial linear algebra library. */
/* #undef HAVE_LINALG_SERIAL */

/* Define to 1 if you want to activate workaround for bugged ZDOTC and ZDOTU.
   */
/* #undef HAVE_LINALG_ZDOTC_BUG */

/* Define to 1 if you want to activate workaround for bugged ZDOTC and ZDOTU.
   */
/* #undef HAVE_LINALG_ZDOTU_BUG */

/* Define to 1 if you have the `mallinfo' function. */
#define HAVE_MALLINFO 1

/* Define to 1 if you have the <malloc.h> header file. */
#define HAVE_MALLOC_H 1

/* Define to 1 if you have an optimized math library. */
/* #undef HAVE_MATH */

/* Define to 1 if you have the GNU Scientific Library. */
/* #undef HAVE_MATH_GSL */

/* Define to 1 if you have the <math.h> header file. */
#define HAVE_MATH_H 1

/* Define to 1 if you have the HP MLib Library. */
/* #undef HAVE_MATH_MLIB */

/* Define to 1 if you have an optimized MPI-parallel math library. */
/* #undef HAVE_MATH_MPI */

/* Define to 1 if you have an optimized serial math library. */
/* #undef HAVE_MATH_SERIAL */

/* Define to 1 if you have the <mcheck.h> header file. */
#define HAVE_MCHECK_H 1

/* Define to 1 if you have the <memory.h> header file. */
#define HAVE_MEMORY_H 1

/* Define to 1 if you want to enable memory profiling. */
/* #undef HAVE_MEM_PROFILING */

/* Define to 1 if you want to enable MPI support. */
#define HAVE_MPI 1

/* Define to 1 if you have a MPI-1 implementation. */
/* #undef HAVE_MPI1 */

/* Define to 1 if you have a MPI-2 implementation. */
#define HAVE_MPI2 1

/* Define to 1 if you want to activate support for MPI_IN_PLACE. */
/* #undef HAVE_MPI2_INPLACE */

/* Define to 1 if you are using XLF. */
/* #undef HAVE_MPI_INCLUDED_ONCE */

/* Define to 1 if you want MPI I/O support. */
#define HAVE_MPI_IO 1

/* Define to 1 if you want MPI time tracing support. */
/* #undef HAVE_MPI_TRACE */

/* Define to 1 if your MPI library supports MPI_TYPE_CREATE_STRUCT. */
#define HAVE_MPI_TYPE_CREATE_STRUCT 1

/* Define to 1 if you have the <netcdf.h> header file. */
#define HAVE_NETCDF_H 1

/* Define to 1 if you have a standard implementation of NumPy. */
#define HAVE_NUMPY 1

/* Set to 1 if OpenMP has a working implementation of COLLAPSE. */
#define HAVE_OMP_COLLAPSE 1

/* Define to 1 if you want to activate support for OpenMP (EXPERIMENTAL). */
#define HAVE_OPENMP 1

/* Define to 1 if you are using Linux. */
#define HAVE_OS_LINUX 1

/* Define to 1 if you are using MacOS X. */
/* #undef HAVE_OS_MACOSX */

/* Define to 1 if you are using Windows. */
/* #undef HAVE_OS_WINDOWS */

/* Define to 1 if you have the <papi.h> header file. */
/* #undef HAVE_PAPI_H */

/* Define to 1 if you have the <stdarg.h> header file. */
#define HAVE_STDARG_H 1

/* Define to 1 if you have the <stddef.h> header file. */
#define HAVE_STDDEF_H 1

/* Define to 1 if you have the <stdint.h> header file. */
#define HAVE_STDINT_H 1

/* Define to 1 if you have the <stdio.h> header file. */
#define HAVE_STDIO_H 1

/* Define to 1 if you have the <stdlib.h> header file. */
#define HAVE_STDLIB_H 1

/* Define to 1 if you have the <strings.h> header file. */
#define HAVE_STRINGS_H 1

/* Define to 1 if you have the <string.h> header file. */
#define HAVE_STRING_H 1

/* Define to 1 if you have the <sys/malloc.h> header file. */
/* #undef HAVE_SYS_MALLOC_H */

/* Define to 1 if you have the <sys/resource.h> header file. */
#define HAVE_SYS_RESOURCE_H 1

/* Define to 1 if you have the <sys/stat.h> header file. */
#define HAVE_SYS_STAT_H 1

/* Define to 1 if you have the <sys/time.h> header file. */
#define HAVE_SYS_TIME_H 1

/* Define to 1 if you have the <sys/types.h> header file. */
#define HAVE_SYS_TYPES_H 1

/* Define to 1 if you have the <termios.h> header file. */
#define HAVE_TERMIOS_H 1

/* Define to 1 if you have an optimized timer library. */
#define HAVE_TIMER 1

/* Define to 1 if you want to use the Abinit timer. */
#define HAVE_TIMER_ABINIT 1

/* Define to 1 if you have an optimized MPI-parallel timer library. */
#define HAVE_TIMER_MPI 1

/* Define to 1 if you have the PAPI library. */
/* #undef HAVE_TIMER_PAPI */

/* Define to 1 if you have an optimized serial timer library. */
#define HAVE_TIMER_SERIAL 1

/* Define to 1 if you have the <time.h> header file. */
#define HAVE_TIME_H 1

/* Define to 1 if you have the ETSF_IO library. */
#define HAVE_TRIO_ETSF_IO 1

/* Define to 1 if you have the FoX library. */
/* #undef HAVE_TRIO_FOX */

/* Define to 1 if you have the NetCDF library. */
#define HAVE_TRIO_NETCDF 1

/* Define to 1 if you have the <unistd.h> header file. */
#define HAVE_UNISTD_H 1

/* Define to 1 if you have the <xc_funcs.h> header file. */
/* #undef HAVE_XC_FUNCS_H */

/* Define to 1 if you have the <xc.h> header file. */
/* #undef HAVE_XC_H */

/* Define to 1 if your C compiler doesn't accept -c and -o together. */
/* #undef NO_MINUS_C_MINUS_O */

/* Name of package */
#define PACKAGE "abinit"

/* Define to the address where bug reports for this package should be sent. */
#define PACKAGE_BUGREPORT "https://bugs.launchpad.net/abinit/"

/* Define to the full name of this package. */
#define PACKAGE_NAME "ABINIT"

/* Define to the full name and version of this package. */
#define PACKAGE_STRING "ABINIT 7.0.5"

/* Define to the one symbol short name of this package. */
#define PACKAGE_TARNAME "abinit"

/* Define to the version of this package. */
#define PACKAGE_VERSION "7.0.5"

/* Define to 1 if you want to tell Abinit to read file lists from standard
   input. */
/* #undef READ_FROM_FILE */

/* The size of `char', as computed by sizeof. */
#define SIZEOF_CHAR 1

/* The size of `double', as computed by sizeof. */
#define SIZEOF_DOUBLE 8

/* The size of `float', as computed by sizeof. */
#define SIZEOF_FLOAT 4

/* The size of `int', as computed by sizeof. */
#define SIZEOF_INT 4

/* The size of `long', as computed by sizeof. */
#define SIZEOF_LONG 8

/* The size of `long double', as computed by sizeof. */
#define SIZEOF_LONG_DOUBLE 16

/* The size of `long long', as computed by sizeof. */
#define SIZEOF_LONG_LONG 8

/* The size of `ptrdiff_t', as computed by sizeof. */
#define SIZEOF_PTRDIFF_T 8

/* The size of `short', as computed by sizeof. */
#define SIZEOF_SHORT 2

/* The size of `size_t', as computed by sizeof. */
#define SIZEOF_SIZE_T 8

/* The size of `unsigned int', as computed by sizeof. */
#define SIZEOF_UNSIGNED_INT 4

/* The size of `unsigned long', as computed by sizeof. */
#define SIZEOF_UNSIGNED_LONG 8

/* The size of `unsigned long long', as computed by sizeof. */
#define SIZEOF_UNSIGNED_LONG_LONG 8

/* Define to 1 if you have the ANSI C header files. */
#define STDC_HEADERS 1

/* Define to 1 if you want to enable build of macroave (EXPERIMENTAL). */
#define USE_MACROAVE 1

/* Version number of package */
#define VERSION "7.0.5"

/* Define WORDS_BIGENDIAN to 1 if your processor stores words with the most
   significant byte first (like Motorola and SPARC, unlike Intel). */
#if defined AC_APPLE_UNIVERSAL_BUILD
# if defined __BIG_ENDIAN__
#  define WORDS_BIGENDIAN 1
# endif
#else
# ifndef WORDS_BIGENDIAN
/* #  undef WORDS_BIGENDIAN */
# endif
#endif

/* Define to empty if `const' does not conform to ANSI C. */
/* #undef const */

/* Define to `unsigned int' if <sys/types.h> does not define. */
/* #undef size_t */

/* *** BEGIN sanity checks *** */

/* MPI options */
#if defined HAVE_MPI 

/* Check that one MPI level is actually defined */
#if ! defined HAVE_MPI1 && ! defined HAVE_MPI2
#error "HAVE_MPI1 and HAVE_MPI2 are both undefined"
#endif

/* Check that only one MPI level has been defined */
#if defined HAVE_MPI1 && defined HAVE_MPI2
#error "HAVE_MPI1 and HAVE_MPI2 are both defined"
#endif

#else /* HAVE_MPI */

/* Check that no MPI level is defined */
#if defined HAVE_MPI1 || defined HAVE_MPI2
#error "HAVE_MPI1 and HAVE_MPI2 must be undefined"
#endif

/* Check that MPI-IO is undefined */
#if defined HAVE_MPI_IO
#error "HAVE_MPI_IO must be undefined"
#endif

/* Check that MPI time tracing is undefined */
#if defined HAVE_MPI_TRACE
#error "HAVE_MPI_TRACE must be undefined"
#endif

/* Check that MPI tricks are undefined */
#if defined HAVE_MPI_INCLUDED_ONCE
#error "MPI-related CPP tricks must be undefined"
#endif

#endif /* HAVE_MPI */

/* ETSF_IO support */
#if defined HAVE_ETSF_IO

/* Check that NetCDF is defined */
#if ! defined HAVE_NETCDF
#error "HAVE_NETCDF must but defined for ETSF_IO to work"
#endif

#endif /* HAVE_ETSF_IO */

/* *** END sanity checks *** */

#endif /* _ABINIT_CONFIG_H */
