
 ==============================================================================
 === Overall startup                                                        ===
 ==============================================================================

checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... no
checking for mawk... mawk
checking whether make sets $(MAKE)... yes
checking whether make supports nested variables... yes
checking whether UID '1000' is supported by ustar format... yes
checking whether GID '1001' is supported by ustar format... yes
checking how to create a ustar tar archive... gnutar
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) mawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for realpath,readlink... no
configure: reading options from ./jim.ac

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 8.10.2
configure: M4 010416 - Autoconf 026900 - Automake 011304 - Libtool 020402
configure: reporting user interface changes:
configure:  * new option --enable-triqs-v1-4 is available
configure:  * new option --enable-triqs-v2-0 is available
configure:  * new option --enable-xml is available

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of library-related options
configure:  |---> all OK
configure: 
configure: checking consistency of experimental options
configure:  |---> all OK
configure: 
configure: checking consistency of maintainer options
configure:  |---> all OK
configure: 
configure: parsing command-line options

 ==============================================================================
 === Multicore architecture startup                                         ===
 ==============================================================================

configure: Initializing MPI support
configure: compiler checks deferred
configure: GPU support disabled from command-line

 ==============================================================================
 === Utilities                                                              ===
 ==============================================================================

checking for sh... /bin/sh
checking for mv... /bin/mv
checking for perl... /usr/bin/perl
checking for rm... /bin/rm
checking for patch... patch
checking for tar... tar

 ==============================================================================
 === C support                                                              ===
 ==============================================================================

checking for gcc... gcc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether gcc accepts -g... yes
checking for gcc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of gcc... gcc3
checking how to run the C preprocessor... gcc -E
checking which type of compiler we have... gnu 8.2
checking for ANSI C header files... yes
checking for sys/types.h... yes
checking for sys/stat.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for memory.h... yes
checking for strings.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for unistd.h... yes
checking whether byte ordering is bigendian... no
checking whether to enable assertions... yes
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes

 ==============================================================================
 === C++ support                                                            ===
 ==============================================================================

checking for g++... g++
checking whether we are using the GNU C++ compiler... yes
checking whether g++ accepts -g... yes
checking dependency style of g++... gcc3
checking which type of C++ compiler we have... gnu 8.2

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking for gfortran... gfortran
checking whether we are using the GNU Fortran compiler... yes
checking whether gfortran accepts -g... yes
checking which type of Fortran compiler we have... gnu 8.2
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from gfortran... -v
checking for Fortran libraries of gfortran...  -L/usr/lib/gcc/x86_64-linux-gnu/8 -L/usr/lib/gcc/x86_64-linux-gnu/8/../../../x86_64-linux-gnu -L/usr/lib/gcc/x86_64-linux-gnu/8/../../../../lib -L/lib/x86_64-linux-gnu -L/lib/../lib -L/usr/lib/x86_64-linux-gnu -L/usr/lib/../lib -L/usr/lib/gcc/x86_64-linux-gnu/8/../../.. -lgfortran -lm -lquadmath
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for Python CPPFLAGS... -I/usr/include/python2.7
checking for bzr... no
checking Python.h usability... yes
checking Python.h presence... yes
checking for Python.h... yes
checking for numpy/arrayobject.h... no
configure: adding "-I/usr/include/numpy" to CPPFLAGS
checking for numpy/arrayobject.h... no

 ==============================================================================
 === Libraries and linking                                                  ===
 ==============================================================================

checking for ar... ar
checking for ranlib... ranlib

 ==============================================================================
 === Hints                                                                  ===
 ==============================================================================

checking for cpp... cpp
checking for a true C preprocessor... cpp
checking which cpp hints to apply... default/default/default
checking which cc hints to apply... gnu/default/default
checking which xpp hints to apply... none/none/none
checking which cxx hints to apply... gnu/default/default
checking which fpp hints to apply... default/default/default
checking which fc hints to apply... gnu/default/default
checking which ar hints to apply... none/none/none
checking which Fortran preprocessor to use... 
checking which Fortran preprocessor flags to apply... 
checking whether to wrap Fortran compiler calls... no

 ==============================================================================
 === Debugging                                                              ===
 ==============================================================================

checking debugging status... enabled (profile mode: basic)
configure: setting C debug flags to '-g'
configure: setting C++ debug flags to '-g'
configure: setting Fortran debug flags to '-g'
checking whether to activate debug mode in source files... no
checking whether to activate debug verbosity in source files... no
checking which cc debug flags to apply... gnu/default/default
checking which cxx debug flags to apply... none/none/none
checking which fc debug flags to apply... gnu/default/default
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... gnu/default/default
checking which cxx optimizations to apply... gnu/default/default
checking which fc optimizations to apply... gnu/default/default
checking whether to apply per-directory optimizations... yes
configure: optimization for 43_ptgroups is -O0

 ==============================================================================
 === 64-bit support                                                         ===
 ==============================================================================

checking for a 64-bit architecture... yes
checking whether to use 64-bit flags... no
checking for user-defined 64-bit flags... 

 ==============================================================================
 === Build flags                                                            ===
 ==============================================================================

configure: static builds may be performed

 ==============================================================================
 === Advanced compiler features                                             ===
 ==============================================================================

checking stddef.h usability... yes
checking stddef.h presence... yes
checking for stddef.h... yes
checking stdarg.h usability... yes
checking stdarg.h presence... yes
checking for stdarg.h... yes
checking stdio.h usability... yes
checking stdio.h presence... yes
checking for stdio.h... yes
checking math.h usability... yes
checking math.h presence... yes
checking for math.h... yes
checking termios.h usability... yes
checking termios.h presence... yes
checking for termios.h... yes
checking errno.h usability... yes
checking errno.h presence... yes
checking for errno.h... yes
checking for malloc.h... (cached) yes
checking sys/malloc.h usability... no
checking sys/malloc.h presence... no
checking for sys/malloc.h... no
checking mcheck.h usability... yes
checking mcheck.h presence... yes
checking for mcheck.h... yes
checking sys/time.h usability... yes
checking sys/time.h presence... yes
checking for sys/time.h... yes
checking sys/resource.h usability... yes
checking sys/resource.h presence... yes
checking for sys/resource.h... yes
checking for abort... yes
checking for mallinfo... yes
checking size of char... 1
checking size of short... 2
checking size of int... 4
checking size of long... 8
checking size of long long... 8
checking size of unsigned int... 4
checking size of unsigned long... 8
checking size of unsigned long long... 8
checking size of float... 4
checking size of double... 8
checking size of long double... 16
checking size of size_t... 8
checking size of ptrdiff_t... 8
checking for an ANSI C-conforming const... yes
checking for size_t... yes
checking whether the Fortran compiler accepts the ASYNCHRONOUS attribute... yes
checking whether the Gfortran compiler supports BACKTRACE... yes
checking whether the Fortran compiler supports GET_COMMAND_ARGUMENT... yes
checking whether the Fortran compiler supports EXECUTE_COMMAND_LINE... yes
checking whether the Fortran compiler supports SYSTEM... yes
checking whether the Fortran compiler accepts the CONTIGUOUS attribute... yes
checking whether the Fortran compiler supports allocatable arrays in datatypes... yes
checking whether the Fortran compiler supports IEEE_EXCEPTIONS... yes
checking whether the Fortran compiler supports IOMSG... yes
checking whether the Fortran compiler provides the iso_c_binding module... yes
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... yes
checking whether the Fortran compiler accepts getenv()... yes
checking whether the Fortran compiler accepts getpid()... no
checking whether the Fortran compiler accepts quadruple integers... yes
checking whether the Fortran compiler supports 2008 standard in ISO_FORTRAN_ENV... yes
checking whether the Fortran compiler accepts long lines... yes
checking whether the Fortran compiler supports \newline in CPP macros... no
checking whether the Fortran compiler supports MOVE_ALLOC (F2003)... yes
checking whether the Fortran compiler accepts the PRIVATE attribute... yes
checking whether the Fortran compiler accepts the PROTECTED attribute... yes
checking whether the Fortran compiler supports stream IO... yes
checking whether the Fortran compiler accepts cpu_time()... yes
checking whether the Fortran compiler accepts etime()... no
checking whether to use C clock for timings... no

 ==============================================================================
 === Multicore architecture support                                         ===
 ==============================================================================

checking whether to enable OpenMP support... no
checking whether to build MPI code... auto
checking whether the C compiler supports MPI... no
checking whether the C++ compiler supports MPI... no
checking whether the Fortran Compiler supports MPI... no
checking whether MPI is usable... no
configure: WARNING: MPI support is broken - disabling MPI
checking whether to activate GPU support... no

 ==============================================================================
 === Feature triggers                                                       ===
 ==============================================================================

configure: using tarball repository /home/jim/.abinit/tarballs
checking for the requested linear algebra support... atlas
checking whether to select a fallback for linear algebra... no
checking for BLAS support in specified libraries... yes
checking for AXPBY support in specified BLAS libraries... no
checking for gemm3m in specified libraries... no
checking for mkl_imatcopy in specified libraries... no
checking for mkl_omatcopy in specified libraries... no
checking for mkl_omatadd in specified libraries... no
checking for mkl_set/get_threads in specified libraries... no
checking for LAPACK support in specified libraries... yes
checking for LAPACKE C API support in specified libraries... no
checking for BLACS support in specified libraries... no
checking for ScaLAPACK support in specified libraries... no
checking for PLASMA support in specified libraries... no
checking for MAGMA (version>=1.1.0) support in specified libraries... no
checking whether we have a serial linear algebra support... yes
checking whether we have a MPI linear algebra support... no
checking whether we have a GPU linear algebra support... no
checking for the actual linear algebra support... atlas
checking for the requested FFT support... fftw3
checking for the actual FFT support... fftw3

 ==============================================================================
 === Connectors / Fallbacks                                                 ===
 ==============================================================================

checking for the requested transferable I/O support... netcdf
checking whether to select a fallback for netcdf... no
checking netcdf.h usability... yes
checking netcdf.h presence... yes
checking for netcdf.h... yes
checking for Fortran module includes... none required
checking whether NetCDF Fortran wrappers work... no

        +--------------------------------------------------------------+
        | Connector detection failure                                  |
        +--------------------------------------------------------------+
        | The build system of Abinit has not been able to detect       |
        | one or more requested external packages, probably because    |
        | you did not provide sufficient information. This means       |
        | that the build cannot proceed, and the configure script      |
        | will thus abort now with an error.                           |
        |                                                              |
        | To address this issue, you may:                              |
        |                                                              |
        | * make sure that the prerequisites of the external           |
        | packages are available and enabled, e.g.                     |
        | --with-dft-flavor="libxc+bigdft" or                          |
        | --with-trio-flavor="netcdf+etsf_io"                          |
        |                                                              |
        | * use the --with-*-bins, --with-*-incs, and                  |
        | --with-*-libs options of configure to provide                |
        | additional information; please see the section related       |
        | to connectors in                                             |
        | ~abinit/doc/build/config-template.ac for available           |
        | options and details;                                         |
        |                                                              |
        | * disable the corresponding extensions, by using the         |
        | associated --with-*-flavor="none" options of                 |
        | configure; please see the section associated to              |
        | connectors in ~abinit/doc/build/config-template.ac for       |
        | details.                                                     |
        |                                                              |
        +--------------------------------------------------------------+

configure: error: external netcdf support does not work
