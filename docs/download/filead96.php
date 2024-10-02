
 ==============================================================================
 === Basic initialization                                                   ===
 ==============================================================================

checking build system type... x86_64-pc-linux-gnu
checking host system type... x86_64-pc-linux-gnu
checking target system type... x86_64-pc-linux-gnu
checking for a BSD-compatible install... /cvmfs/soft.computecanada.ca/custom/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether make supports nested variables... yes
checking whether UID '3084617' is supported by ustar format... no
checking whether GID '3084617' is supported by ustar format... no
checking how to create a ustar tar archive... none
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... /cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/bin/grep
checking for sh... /cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/bin/sh
checking for mv... /cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/bin/mv
checking for perl... /cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/bin/perl
checking for rm... /cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/bin/rm
checking for patch... patch
checking for tar... tar
checking for egrep... /cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/bin/grep -E
checking for realpath... realpath
checking for python3.7... no
checking for python3.6... no
checking for python3.5... no
checking for python3.4... no
checking for python3... python3
checking for python3-config... python3-config
configure: reading options from ./pomax.ac9

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 9.0.4
configure: 
configure: reporting Autotools information:
configure: 
configure:   * M4       : 010417
configure:   * Autoconf : 026900
configure:   * Automake : 011500
configure:   * Libtool  : 020406
configure: 
configure: reporting user interface changes:
configure: 
configure:   * removed option --enable-64bit-flags
configure:   * removed option --enable-config-file
configure:   * removed option --enable-connectors
configure:   * removed option --enable-debug
configure:     >>> use --with-debug-flavor instead
configure:   * removed option --enable-fallbacks
configure:     >>> use --with-fallbacks instead
configure:   * removed option --enable-gpu
configure:     >>> use --with-gpu instead
configure:   * removed option --enable-macroave
configure:   * removed option --enable-mpi
configure:     >>> use --with-mpi instead
configure:   * removed option --enable-optim
configure:     >>> use --with-optim-flavor instead
configure:   * removed option --enable-wannier90-v1
configure:   * removed option --with-algo-flavor
configure:     >>> use --with-levmar instead
configure:   * removed option --with-algo-incs
configure:     >>> use LEVMAR_CPPFLAGS, LEVMAR_FCFLAGS instead
configure:   * removed option --with-algo-libs
configure:     >>> use LEVMAR_LIBS instead
configure:   * removed option --with-atompaw-bins
configure:   * removed option --with-atompaw-incs
configure:   * removed option --with-atompaw-libs
configure:   * removed option --with-dft-flavor
configure:     >>> use --individual package options instead
configure:   * removed option --with-fft-incs
configure:     >>> use FFT_CPPFLAGS, FFT_FCFLAGS instead
configure:   * removed option --with-fft-libs
configure:     >>> use FFT_LIBS instead
configure:   * removed option --with-gpu-cflags
configure:     >>> use GPU_CFLAGS instead
configure:   * removed option --with-gpu-cppflags
configure:     >>> use GPU_CPPFLAGS instead
configure:   * removed option --with-gpu-incs
configure:     >>> use GPU_CPPFLAGS, GPU_FCFLAGS instead
configure:   * removed option --with-gpu-ldflags
configure:     >>> use GPU_LDFLAGS instead
configure:   * removed option --with-gpu-libs
configure:     >>> use GPU_LIBS instead
configure:   * removed option --with-gpu-prefix
configure:     >>> use --with-gpu instead
configure:   * removed option --with-libxc-incs
configure:     >>> use LIBXC_CPPFLAGS, LIBXC_FCFLAGS instead
configure:   * removed option --with-libxc-libs
configure:     >>> use LIBXC_LIBS instead
configure:   * removed option --with-linalg-incs
configure:     >>> use LINALG_FCFLAGS instead
configure:   * removed option --with-linalg-libs
configure:     >>> use LINALG_LIBS instead
configure:   * removed option --with-math-flavor
configure:   * removed option --with-math-incs
configure:   * removed option --with-math-libs
configure:   * removed option --with-mpi-incs
configure:     >>> use MPI_CPPFLAGS, MPI_FCFLAGS instead
configure:   * removed option --with-mpi-libs
configure:     >>> use MPI_LIBS instead
configure:   * removed option --with-mpi-prefix
configure:     >>> use --with-mpi instead
configure:   * removed option --with-psml-incs
configure:     >>> use LIBPSML_FCFLAGS instead
configure:   * removed option --with-psml-libs
configure:     >>> use LIBPSML_LIBS instead
configure:   * removed option --with-timer-flavor
configure:   * removed option --with-timer-incs
configure:     >>> use PAPI_CPPFLAGS, PAPI_FCFLAGS instead
configure:   * removed option --with-timer-libs
configure:     >>> use PAPI_LIBS instead
configure:   * removed option --with-trio-flavor
configure:     >>> use --individual package options instead
configure:   * removed option --with-triqs-incs
configure:     >>> use TRIQS_CPPFLAGS, TRIQS_FCFLAGS instead
configure:   * removed option --with-triqs-libs
configure:     >>> use TRIQS_LIBS instead
configure:   * removed option --with-wannier90-bins
configure:   * removed option --with-wannier90-incs
configure:     >>> use WANNIER90_FCFLAGS instead
configure:   * removed option --with-wannier90-libs
configure:     >>> use WANNIER90_LIBS instead
configure:   * removed option --with-yaml-incs
configure:   * removed option --with-yaml-libs
configure:   * new option --enable-libtetra is available
configure:   * new option --enable-python-invocation is available
configure:   * new option --enable-source-debug is available
configure:   * new option --enable-timer is available
configure:   * new option --with-debug-flavor is available
configure:   * new option --with-fallbacks is available
configure:   * new option --with-libxml2 is available
configure:   * new option --with-optim-flavor is available
configure:   * modified option --with-mpi-level
configure:     (changed : removed level 1, added level 3, defaulted level 2)
configure:     please check that --with-mpi-level="" is OK for you
configure:   * deprecated option --enable-bse-unpacked
configure:   * deprecated option --enable-exports
configure:   * deprecated option --enable-triqs-v1-4
configure:   * deprecated option --enable-triqs-v2-0
configure: 
configure: reporting changes in feature triggers:
configure: 
configure:   * new feature trigger for abinit_common available
configure:     >>> --with-abinit-common, ABINIT_COMMON_*FLAGS
configure:   * new feature trigger for bigdft available
configure:     >>> --with-bigdft, BIGDFT_*FLAGS
configure:   * new feature trigger for fft available
configure:     >>> --with-fft, FFT_*FLAGS
configure:   * new feature trigger for fftw3 available
configure:     >>> --with-fftw3, FFTW3_*FLAGS
configure:   * new feature trigger for gpu available
configure:     >>> --with-gpu, GPU_*FLAGS
configure:   * new feature trigger for hdf5 available
configure:     >>> --with-hdf5, HDF5_*FLAGS
configure:   * new feature trigger for levmar available
configure:     >>> --with-levmar, LEVMAR_*FLAGS
configure:   * new feature trigger for libpaw available
configure:     >>> --with-libpaw, LIBPAW_*FLAGS
configure:   * new feature trigger for libpsml available
configure:     >>> --with-libpsml, LIBPSML_*FLAGS
configure:   * new feature trigger for libxc available
configure:     >>> --with-libxc, LIBXC_*FLAGS
configure:   * new feature trigger for libxml2 available
configure:     >>> --with-libxml2, LIBXML2_*FLAGS
configure:   * new feature trigger for linalg available
configure:     >>> --with-linalg, LINALG_*FLAGS
configure:   * new feature trigger for mpi available
configure:     >>> --with-mpi, MPI_*FLAGS
configure:   * new feature trigger for netcdf available
configure:     >>> --with-netcdf, NETCDF_*FLAGS
configure:   * new feature trigger for netcdf_fortran available
configure:     >>> --with-netcdf-fortran, NETCDF_FORTRAN_*FLAGS
configure:   * new feature trigger for papi available
configure:     >>> --with-papi, PAPI_*FLAGS
configure:   * new feature trigger for pfft available
configure:     >>> --with-pfft, PFFT_*FLAGS
configure:   * new feature trigger for triqs available
configure:     >>> --with-triqs, TRIQS_*FLAGS
configure:   * new feature trigger for wannier90 available
configure:     >>> --with-wannier90, WANNIER90_*FLAGS
configure:   * new feature trigger for xmlf90 available
configure:     >>> --with-xmlf90, XMLF90_*FLAGS

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of command-line options
configure: |---> all OK
configure: 
configure: parsing command-line options
configure: |---> all OK

 ==============================================================================
 === Feature triggers and architecture startup                              ===
 ==============================================================================

checking whether we can use fallbacks... no
checking whether to enable MPI... yes
checking how MPI parameters have been set... yon
checking whether the MPI C compiler is set... yes
checking whether the MPI C++ compiler is set... yes
checking whether the MPI Fortran compiler is set... yes
checking for MPI C preprocessing flags... 
checking for MPI C flags... 
checking for MPI C++ flags... 
checking for MPI Fortran flags... 
checking for MPI linker flags... 
checking for MPI library flags... 
checking whether the 'auto' MPI flavor is valid... yes
checking whether to enable GPU... no
configure: GPU support disabled from command-line

 ==============================================================================
 === C support                                                              ===
 ==============================================================================

checking for style of include used by make... GNU
checking for mpicc... /cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/openmpi/3.1.2/bin/mpicc
checking for gcc... mpicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether mpicc accepts -g... yes
checking for mpicc option to accept ISO C89... none needed
checking whether mpicc understands -c and -o together... yes
checking dependency style of mpicc... gcc3
checking how to run the C preprocessor... mpicc -E
checking which type of compiler we have... intel 18.0

 ==============================================================================
 === C++ support                                                            ===
 ==============================================================================

checking for mpic++... /cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/openmpi/3.1.2/bin/mpic++
checking whether we are using the GNU C++ compiler... yes
checking whether mpic++ accepts -g... yes
checking dependency style of mpic++... gcc3
checking which type of C++ compiler we have... intel 18.0

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking for mpif90... /cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/openmpi/3.1.2/bin/mpif90
checking whether we are using the GNU Fortran compiler... no
checking whether mpif90 accepts -g... yes
checking which type of Fortran compiler we have... intel 18.0
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from mpif90... -v
checking for Fortran libraries of mpif90...  -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/openmpi/3.1.2/lib -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/elpa/2018.11.001/lib -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf-fortran/4.4.4/lib -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1/lib64 -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3/lib -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/python/3.8.0/lib -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/ifort/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64 -L/cvmfs/restricted.computecanada.ca/easybuild/software/2017/Core/ifort/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64 -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/icc/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64 -L/cvmfs/restricted.computecanada.ca/easybuild/software/2017/Core/icc/2018.3.222/compilers_and_libraries_2018.3.222/linux/tbb/lib/intel64/gcc4.4 -L/cvmfs/restricted.computecanada.ca/easybuild/software/2017/Core/icc/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64 -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/gcc-7.3.0/lib64 -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/gcc-7.3.0/lib -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/lib/intel64 -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/lib/intel64 -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/lib -L/cvmfs/restricted.computecanada.ca/easybuild/software/2017/Core/ifort/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64_lin -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/lib/intel64_lin -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1/lib64/../lib64 -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1/lib64/../lib64/ -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/gcc-7.3.0/lib64/../lib64 -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/gcc-7.3.0/lib64/../lib64/ -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/gcc-7.3.0/lib/../lib64 -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/gcc-7.3.0/lib/../lib64/ -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/lib/../lib64 -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/lib/../lib64/ -L/cvmfs/soft.computecanada.ca/nix/store/c9qaklf3dvjvlbky3fiakmafb1p8l106-gfortran-7.3.0/lib/gcc/x86_64-pc-linux-gnu/7.3.0/ -L/cvmfs/soft.computecanada.ca/nix/store/c9qaklf3dvjvlbky3fiakmafb1p8l106-gfortran-7.3.0/lib/gcc/x86_64-pc-linux-gnu/7.3.0/../../../../lib64 -L/cvmfs/soft.computecanada.ca/nix/store/c9qaklf3dvjvlbky3fiakmafb1p8l106-gfortran-7.3.0/lib/gcc/x86_64-pc-linux-gnu/7.3.0/../../../../lib64/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/elpa/2018.11.001/lib/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf-fortran/4.4.4/lib/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1/lib64/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3/lib/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/python/3.8.0/lib/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/openmpi/3.1.2/lib/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/ifort/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64/ -L/cvmfs/restricted.computecanada.ca/easybuild/software/2017/Core/ifort/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/icc/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64/ -L/cvmfs/restricted.computecanada.ca/easybuild/software/2017/Core/icc/2018.3.222/compilers_and_libraries_2018.3.222/linux/tbb/lib/intel64/gcc4.4/ -L/cvmfs/restricted.computecanada.ca/easybuild/software/2017/Core/icc/2018.3.222/compilers_and_libraries_2018.3.222/linux/compiler/lib/intel64/ -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/gcc-7.3.0/lib64/ -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/gcc-7.3.0/lib/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/lib/intel64/ -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/lib/intel64/ -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/lib64 -L/cvmfs/soft.computecanada.ca/nix/var/nix/profiles/16.09/lib/ -L/cvmfs/soft.computecanada.ca/nix/store/c9qaklf3dvjvlbky3fiakmafb1p8l106-gfortran-7.3.0/lib/gcc/x86_64-pc-linux-gnu/7.3.0/../../.. -lmkl_intel_lp64 -lmkl_cdft_core -lmkl_scalapack_lp64 -lmkl_blacs_intelmpi_lp64 -lmkl_sequential -lmkl_core -liomp5 -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi -lifport -lifcoremt -limf -lsvml -lm -lipgo -lirc -lpthread -lirc_s -ldl
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Hints for the build flags                                              ===
 ==============================================================================

checking for cpp... cpp
checking for a true C preprocessor... cpp
configure: setting C preprocessor vendor to 'default'
configure: setting C++ preprocessor vendor to 'default'
configure: setting Fortran preprocessor vendor to 'default'
checking which cpp hints to apply... default/default/default
checking which cc hints to apply... intel/default/default
checking which xpp hints to apply... none/none/none
checking which cxx hints to apply... intel/default/default
checking which fpp hints to apply... default/default/default
checking which fc hints to apply... intel/default/default
checking which Fortran preprocessor to use... none
checking which Fortran preprocessor flags to apply... none
checking whether to wrap Fortran compiler calls... no

 ==============================================================================
 === Debugging                                                              ===
 ==============================================================================

checking debugging status... enabled (profile: basic)
configure: debugging profile overriden by user-defined CFLAGS
configure: debugging profile overriden by user-defined CXXFLAGS
configure: debugging profile overriden by user-defined FCFLAGS
checking whether to activate debug mode in source files... no
checking whether to activate verbose debug messages in source files... no
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile: standard)
configure: optimization profile overriden by user-defined CFLAGS
configure: optimization profile overriden by user-defined CXXFLAGS
configure: optimization profile overriden by user-defined FCFLAGS
configure: disabling optimizations for src/20_datashare/
configure: disabling optimizations for src/43_ptgroups/
checking whether to apply per-directory optimizations... no
configure: fcflags_opt_43_ptgroups overriden by FCFLAGS

 ==============================================================================
 === Build flags                                                            ===
 ==============================================================================

checking for ar... ar
checking for ranlib... ranlib
configure: static builds may be performed

 ==============================================================================
 === Advanced language features                                             ===
 ==============================================================================

checking whether to enable assertions... yes
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
checking stdio.h usability... yes
checking stdio.h presence... yes
checking for stdio.h... yes
checking for string.h... (cached) yes
checking termios.h usability... yes
checking termios.h presence... yes
checking for termios.h... yes
checking for unistd.h... (cached) yes
checking errno.h usability... yes
checking errno.h presence... yes
checking for errno.h... yes
checking for inttypes.h... (cached) yes
checking math.h usability... yes
checking math.h presence... yes
checking for math.h... yes
checking stddef.h usability... yes
checking stddef.h presence... yes
checking for stddef.h... yes
checking for stdint.h... (cached) yes
checking mcheck.h usability... yes
checking mcheck.h presence... yes
checking for mcheck.h... yes
checking time.h usability... yes
checking time.h presence... yes
checking for time.h... yes
checking sys/ioctl.h usability... yes
checking sys/ioctl.h presence... yes
checking for sys/ioctl.h... yes
checking sys/resource.h usability... yes
checking sys/resource.h presence... yes
checking for sys/resource.h... yes
checking for sys/stat.h... (cached) yes
checking sys/time.h usability... yes
checking sys/time.h presence... yes
checking for sys/time.h... yes
checking for sys/types.h... (cached) yes
checking sys/malloc.h usability... no
checking sys/malloc.h presence... no
checking for sys/malloc.h... no
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
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
checking whether byte ordering is bigendian... no
checking whether the Fortran compiler accepts the ASYNCHRONOUS attribute... yes
checking whether the Gfortran compiler supports BACKTRACE... no
checking whether the Fortran compiler supports GET_COMMAND_ARGUMENT... yes
checking whether the Fortran compiler supports EXECUTE_COMMAND_LINE... yes
checking whether the Fortran compiler supports SYSTEM... yes
checking whether the Fortran compiler accepts the CONTIGUOUS attribute... yes
checking whether the Fortran compiler supports allocatable arrays in datatypes... yes
checking whether the Fortran compiler supports IEEE_ARITHMETIC... yes
checking whether the Fortran compiler supports IEEE_EXCEPTIONS... yes
checking whether the Fortran compiler supports IOMSG... yes
checking whether the Fortran compiler provides the iso_c_binding module... yes
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... yes
checking whether the Fortran compiler accepts shiftl() and shiftr()... yes
checking whether the Fortran compiler accepts getenv()... yes
checking whether the Fortran compiler accepts getpid()... yes
checking whether the Fortran compiler accepts quadruple integers... no
checking whether the Fortran compiler supports 2008 standard in ISO_FORTRAN_ENV... yes
checking whether the Fortran compiler accepts long lines... yes
checking whether the Fortran compiler supports \newline in CPP macros... no
checking whether the Fortran compiler supports MOVE_ALLOC (F2003)... yes
checking whether the Fortran compiler accepts the PRIVATE attribute... yes
checking whether the Fortran compiler accepts the PROTECTED attribute... yes
checking whether the Fortran compiler supports stream IO... yes
checking whether the Fortran compiler accepts cpu_time()... yes
checking whether the Fortran compiler accepts etime()... yes
checking whether to use C clock for timings... 
checking whether the Fortran compiler can shape arrays on-the-fly... yes
checking for Python CPPFLAGS... -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/python/3.8.0/include/python3.8 -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/python/3.8.0/include/python3.8
checking for Python CFLAGS... -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/python/3.8.0/include/python3.8 -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/python/3.8.0/include/python3.8  -Wno-unused-result -Wsign-compare  -DNDEBUG -g -fwrapv -O3 -Wall
checking for Python LDFLAGS...  -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/python/3.8.0/lib  -lcrypt -lpthread -ldl  -lutil -lm -lm 
checking for Python LIBS...  -lcrypt -lpthread -ldl  -lutil -lm -lm 
checking Python.h usability... yes
checking Python.h presence... yes
checking for Python.h... yes
checking for numpy/arrayobject.h... no
configure: adding "-I/usr/include/numpy" to CPPFLAGS
checking for numpy/arrayobject.h... no

 ==============================================================================
 === Platform-specific libraries                                            ===
 ==============================================================================

checking which operating system we have... linux-gnu
checking for library containing expl... none required
checking for library containing logl... none required

 ==============================================================================
 === Multicore architecture support                                         ===
 ==============================================================================

checking whether to enable OpenMP support... yes
checking Fortran flags for OpenMP... -qopenmp
checking whether OpenMP COLLAPSE works... yes
configure: OpenMP support is enabled in Fortran source code only
checking whether to enable MPI... yes
checking how MPI parameters have been set... yon
checking whether the MPI C compiler is set... yes
checking whether the MPI C++ compiler is set... yes
checking whether the MPI Fortran compiler is set... yes
checking for MPI C preprocessing flags... 
checking for MPI C flags... 
checking for MPI C++ flags... 
checking for MPI Fortran flags... 
checking for MPI linker flags... 
checking for MPI library flags... 
checking whether the MPI C API works... yes
checking whether the MPI C environment works... yes
checking whether the MPI C++ API works... yes
checking whether the MPI C++ environment works... yes
checking whether the MPI Fortran API works... yes
checking whether the MPI Fortran environment works... yes
checking whether to build MPI I/O code... no
checking which level of MPI is supported by the Fortran compiler... 2
configure: forcing MPI-2 standard level support
checking whether the MPI library supports MPI_INTEGER16... yes
checking whether the MPI library supports MPI_CREATE_TYPE_STRUCT... yes
checking whether the MPI library supports MPI_IBCAST (MPI3)... yes
checking whether the MPI library supports MPI_IALLTOALL (MPI3)... yes
checking whether the MPI library supports MPI_IALLTOALLV (MPI3)... yes
checking whether the MPI library supports MPI_IGATHERV (MPI3)... yes
checking whether the MPI library supports MPI_IALLREDUCE (MPI3)... yes
configure: 
configure: dumping all MPI parameters for diagnostics
configure: ------------------------------------------
configure: 
configure: Configure options:
configure: 
configure:   * enable_mpi_inplace = 'yes'
configure:   * enable_mpi_io      = 'no'
configure:   * with_mpi           = 'yes'
configure:   * with_mpi_level     = ''
configure: 
configure: Internal parameters
configure: 
configure:   * MPI enabled (required)                       : yes
configure:   * MPI C compiler is set (required)             : yes
configure:   * MPI C compiler works (required)              : yes
configure:   * MPI Fortran compiler is set (required)       : yes
configure:   * MPI Fortran compiler works (required)        : yes
configure:   * MPI environment usable (required)            : yes
configure:   * MPI C++ compiler is set (optional)           : yes
configure:   * MPI C++ compiler works (optional)            : yes
configure:   * MPI-in-place enabled (optional)              : yes
configure:   * MPI-IO enabled (optional)                    : no
configure:   * MPI configuration type (computed)            : yon
configure:   * MPI Fortran level supported (detected)       : 2
configure:   * MPI_Get_library_version available (detected) : unknown
configure: 
configure: All required parameters must be set to 'yes'.
configure: If not, the configuration and/or the build with
configure: MPI support will very likely fail.
configure: 
checking whether to activate GPU support... no

 ==============================================================================
 === Initialization of optional features                                    ===
 ==============================================================================

checking whether to enable HDF5... yes
checking how HDF5 parameters have been set... dir
checking for HDF5 C preprocessing flags... -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3/include
checking for HDF5 C flags... none
checking for HDF5 C++ flags... none
checking for HDF5 linker flags... none
checking for HDF5 library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3/lib -lhdf5
checking whether to enable FFTW3... no
checking whether to enable Levmar... no
checking whether to enable LibPSML... no
checking whether to enable LibXC... yes
checking how LibXC parameters have been set... dir
checking for LibXC C preprocessing flags... -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/Compiler/intel2018.3/libxc/4.3.4/include
checking for LibXC C flags... none
checking for LibXC linker flags... none
checking for LibXC library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/Compiler/intel2018.3/libxc/4.3.4/lib -lxc
checking whether to enable NetCDF... yes
checking how the NetCDF parameters have been set... dir
checking for NetCDF C preprocessing flags...  -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1/include
checking for NetCDF C flags... none
checking for NetCDF linker flags... none
checking for NetCDF library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1/lib -lnetcdf 
checking whether to enable the NetCDF Fortran interface... yes
checking how the NetCDF Fortran interface parameters have been set... dir
checking for the NetCDF Fortran interface C preprocessing flags...  -I/include
checking for the NetCDF Fortran interface C flags... none
checking for the NetCDF Fortran interface linker flags... none
checking for the NetCDF Fortran interface library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf-fortran/4.4.4/lib -lnetcdff 
checking whether to enable PAPI... no
checking whether to enable PFFT... no
checking whether to enable TRIQS... no
checking whether to enable Wannier90... no
checking whether to enable XMLF90... no

 ==============================================================================
 === Linear algebra support                                                 ===
 ==============================================================================

checking for the requested linear algebra flavor... auto
checking for the serial linear algebra detection sequence... mkl atlas netlib
checking for the MPI linear algebra detection sequence... mkl netlib
checking for the MPI acceleration linear algebra detection sequence... elpa
checking how to detect linear algebra libraries... verify
checking for BLAS support in the specified libraries... yes
checking for AXPBY support in the BLAS libraries... yes
checking for GEMM3M in the BLAS libraries... yes
checking for mkl_imatcopy in the specified libraries... yes
checking for mkl_omatcopy in the specified libraries... yes
checking for mkl_omatadd in the specified libraries... yes
checking for mkl_set/get_threads in the specified libraries... yes
checking for LAPACK support in the specified libraries... yes
checking for LAPACKE C API support in the specified libraries... no
checking for PLASMA support in the specified libraries... no
checking for BLACS support in the specified libraries... yes
checking for ScaLAPACK support in the specified libraries... yes
checking for ELPA support in the specified libraries... no
checking how linear algebra parameters have been set... dir (flavor: def)
checking for the actual linear algebra flavor... mkl
checking for linear algebra C preprocessing flags...  -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/include
checking for linear algebra C flags... none
checking for linear algebra C++ flags... none
checking for linear algebra Fortran flags...  -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/include
checking for linear algebra linker flags... none
checking for linear algebra library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/lib 

 ==============================================================================
 === Optimized FFT support                                                  ===
 ==============================================================================

checking which FFT flavors to enable... dfti goedecker
checking for FFT flavor... unknown
checking for FFT C preprocessing flags... 
checking for FFT C flags... 
checking for FFT Fortran flags... 
checking for FFT linker flags... 
checking for FFT library flags... 
checking for the FFT flavor to try... dfti
checking whether to enable DFTI... yes
checking how DFTI parameters have been set... mkl
checking for DFTI C preprocessing flags...  -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/include
checking for DFTI C flags... none
checking for DFTI Fortran flags...  -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/include
checking for DFTI linker flags... none
checking for DFTI library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/lib 
checking whether the DFTI library works... yes
checking for the actual FFT flavor to use... dfti

 ==============================================================================
 === Feature triggers                                                       ===
 ==============================================================================

checking whether to enable PAPI... no
checking whether to enable the internal Abinit timer... yes
checking for the HDF5 install prefix... /cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3
checking for the HDF5 build flavor... none
checking for HDF5 high-level libraries... -lhdf5_hl
checking for HDF5 extra dependencies... -lz -ldl -lm -liomp5 -lpthread
checking whether HDF5 supports MPI... no
checking whether to enable HDF5... yes
checking how HDF5 parameters have been set... dir
checking for HDF5 C preprocessing flags... -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3/include 
checking for HDF5 C flags... none
checking for HDF5 C++ flags... none
checking for HDF5 linker flags... none
checking for HDF5 library flags...  -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3/lib -L/cvmfs/restricted.computecanada.ca/easybuild/software/2017/Core/icc/2018.3.222/lib/intel64 -lhdf5_hl -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3/lib -lhdf5 -lz -ldl -lm -liomp5 -lpthread
checking hdf5.h usability... yes
checking hdf5.h presence... yes
checking for hdf5.h... yes
checking whether the HDF5 C interface works... yes
checking whether to enable NetCDF... yes
checking how the NetCDF parameters have been set... dir
checking for NetCDF C preprocessing flags...  -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1/include
checking for NetCDF C flags... none
checking for NetCDF linker flags... none
checking for NetCDF library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1/lib -lnetcdf 
checking whether the NetCDF C interface works... yes
checking whether to enable the NetCDF Fortran interface... yes
checking how the NetCDF Fortran interface parameters have been set... dir
checking for the NetCDF Fortran interface C preprocessing flags...  -I/include
checking for the NetCDF Fortran interface C flags... none
checking for the NetCDF Fortran interface linker flags... none
checking for the NetCDF Fortran interface library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf-fortran/4.4.4/lib -lnetcdff 
checking whether the NetCDF Fortran interface works... yes
checking whether to enable XMLF90... no
checking whether to enable Levmar... no
checking whether to enable LibXC... yes
checking how LibXC parameters have been set... dir
checking for LibXC C preprocessing flags... -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/Compiler/intel2018.3/libxc/4.3.4/include
checking for LibXC C flags... none
checking for LibXC linker flags... none
checking for LibXC library flags... -L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/Compiler/intel2018.3/libxc/4.3.4/lib -lxc
checking whether the LibXC library works... yes
checking whether to enable TRIQS... no
checking whether to enable Wannier90... no
checking for atompaw... no
checking for graphatom... no

 ==============================================================================
 === Build workflow                                                         ===
 ==============================================================================

checking whether to enable ABINIT Common... no
checking whether to enable LibPAW... no
checking whether to enable BigDFT... no
checking how to build the components of ABINIT... monolith

 ==============================================================================
 === Feature triggers summary                                               ===
 ==============================================================================


Abinit feature triggers status
==============================

The following summary table indicates the status of the feature triggers,
whether they are available and working, how they have been initialized
and whether there are fallbacks to substitute broken ones.

  +----------------+--------+--------+--------+--------+
  |Feature         |Enabled |Init    |Working |Fallback|
  +----------------+--------+--------+--------+--------+
  |abinit_common   |no      |def     |unknown |no      |
  |bigdft          |no      |def     |unknown |disabled|
  |fft             |yes     |def     |yes     |no      |
  |fftw3           |no      |def     |unknown |no      |
  |gpu             |no      |def     |no      |no      |
  |hdf5            |yes     |dir     |yes     |no      |
  |levmar          |no      |def     |unknown |no      |
  |libpaw          |no      |def     |unknown |no      |
  |libpsml         |no      |def     |unknown |disabled|
  |libxc           |yes     |dir     |yes     |disabled|
  |libxml2         |no      |def     |unknown |no      |
  |linalg          |yes     |dir     |yes     |disabled|
  |mpi             |yes     |yon     |yes     |no      |
  |netcdf          |yes     |dir     |yes     |disabled|
  |netcdf_fortran  |yes     |dir     |yes     |no      |
  |papi            |no      |def     |unknown |no      |
  |pfft            |no      |def     |unknown |no      |
  |triqs           |no      |def     |unknown |no      |
  |wannier90       |no      |def     |unknown |disabled|
  |xmlf90          |no      |def     |unknown |disabled|
  +----------------+--------+--------+--------+--------+

checking that generated files are newer than configure... done
configure: creating ./config.status
config.status: creating fallbacks/INSTALL
config.status: creating fallbacks/README
config.status: creating fallbacks/build-abinit-fallbacks.sh
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing default commands
checking which fallbacks to look for... none

 ==============================================================================
 === Optional source code                                                   ===
 ==============================================================================

configure: setting build switches associated to command-line options
checking whether to disable vectorization in problematic procedures... no
checking whether to activate Bethe-Salpeter unpacking... no
checking whether to enable optimize cRPA calculations for ifort <= 17.0... no
checking whether to activate build of exported libraries... no
checking whether to activate double-precision GW calculations... no
checking whether to activate internal support for libtetra(hedron) in ABINIT... yes
configure: defining the 'HAVE_LIBTETRA_ABINIT' preprocessing macro
checking whether to activate LOTF functionality (UNMAINTAINED)... no
checking whether to enable memory profiling... no
checking whether to activate support for MPI_IN_PLACE... yes
configure: defining the 'HAVE_MPI2_INPLACE' preprocessing macro
checking whether to use MPI I/O as default I/O library (maintainer-only option)... no
checking whether to use NetCDF as default I/O library (maintainer-only option)... no
checking whether to activate support for OpenMP... yes
configure: defining the 'HAVE_OPENMP' preprocessing macro
checking whether to activate possibility to call python scripts externally by invoking a python interpreter... no
checking whether to tell ABINIT to read file lists from standard input... yes
checking whether to activate internal support for TRIQS 1.4... no
checking whether to activate internal support for TRIQS 2.0 (This option is dominant over the others versions)... no
checking whether to activate workaround for bugged ZDOTC and ZDOTU... no

 ==============================================================================
 === Output                                                                 ===
 ==============================================================================

checking that generated files are newer than configure... done
configure: creating ./config.status
config.status: creating fallbacks/INSTALL
config.status: creating fallbacks/README
config.status: creating fallbacks/build-abinit-fallbacks.sh
config.status: creating config.dump
config.status: creating config.pc
config.status: creating config.sh
config.status: creating config/split/make-src-symlinks
config.status: creating config/wrappers/wrap-fc
config.status: creating abichecks/abichecks.env
config.status: creating shared/common/src/14_hidewrite/m_build_info.F90
config.status: creating Makefile
config.status: creating abichecks/Makefile
config.status: creating shared/Makefile
config.status: creating shared/common/Makefile
config.status: creating shared/common/src/Makefile
config.status: creating shared/common/src/incs/Makefile
config.status: creating shared/common/src/mods/Makefile
config.status: creating shared/libpaw/Makefile
config.status: creating shared/libpaw/incs/Makefile
config.status: creating shared/libpaw/mods/Makefile
config.status: creating src/Makefile
config.status: creating src/incs/Makefile
config.status: creating src/mods/Makefile
config.status: creating doc/Makefile
config.status: creating tests/Makefile
config.status: creating shared/common/src/02_clib/Makefile
config.status: creating shared/common/src/10_defs/Makefile
config.status: creating shared/common/src/11_memory_mpi/Makefile
config.status: creating shared/common/src/12_hide_mpi/Makefile
config.status: creating shared/common/src/14_hidewrite/Makefile
config.status: creating shared/common/src/16_hideleave/Makefile
config.status: creating shared/common/src/17_gpu_toolbox/Makefile
config.status: creating shared/common/src/17_libtetra_ext/Makefile
config.status: creating shared/common/src/17_yaml_out/Makefile
config.status: creating shared/common/src/18_timing/Makefile
config.status: creating shared/common/src/21_hashfuncs/Makefile
config.status: creating shared/common/src/27_toolbox_oop/Makefile
config.status: creating shared/common/src/28_numeric_noabirule/Makefile
config.status: creating shared/common/src/29_kpoints/Makefile
config.status: creating shared/common/src/32_util/Makefile
config.status: creating shared/common/src/33_xc_lowlevel/Makefile
config.status: creating shared/libpaw/src/Makefile
config.status: creating src/41_geometry/Makefile
config.status: creating src/42_nlstrain/Makefile
config.status: creating src/42_parser/Makefile
config.status: creating src/43_ptgroups/Makefile
config.status: creating src/43_wvl_wrappers/Makefile
config.status: creating src/44_abitools/Makefile
config.status: creating src/44_abitypes_defs/Makefile
config.status: creating src/45_geomoptim/Makefile
config.status: creating src/45_xgTools/Makefile
config.status: creating src/46_diago/Makefile
config.status: creating src/49_gw_toolbox_oop/Makefile
config.status: creating src/51_manage_mpi/Makefile
config.status: creating src/52_fft_mpi_noabirule/Makefile
config.status: creating src/52_manage_cuda/Makefile
config.status: creating src/53_ffts/Makefile
config.status: creating src/54_spacepar/Makefile
config.status: creating src/55_abiutil/Makefile
config.status: creating src/56_io_mpi/Makefile
config.status: creating src/56_mixing/Makefile
config.status: creating src/56_recipspace/Makefile
config.status: creating src/56_xc/Makefile
config.status: creating src/57_iopsp_parser/Makefile
config.status: creating src/57_iovars/Makefile
config.status: creating src/61_occeig/Makefile
config.status: creating src/62_cg_noabirule/Makefile
config.status: creating src/62_ctqmc/Makefile
config.status: creating src/62_iowfdenpot/Makefile
config.status: creating src/62_poisson/Makefile
config.status: creating src/62_wvl_wfs/Makefile
config.status: creating src/64_psp/Makefile
config.status: creating src/65_lotf_base/Makefile
config.status: creating src/65_paw/Makefile
config.status: creating src/66_nonlocal/Makefile
config.status: creating src/66_vdwxc/Makefile
config.status: creating src/66_wfs/Makefile
config.status: creating src/67_common/Makefile
config.status: creating src/67_python_invocation_ext/Makefile
config.status: creating src/67_triqs_ext/Makefile
config.status: creating src/68_dmft/Makefile
config.status: creating src/68_lotf/Makefile
config.status: creating src/68_recursion/Makefile
config.status: creating src/68_rsprc/Makefile
config.status: creating src/69_wfdesc/Makefile
config.status: creating src/70_gw/Makefile
config.status: creating src/71_bse/Makefile
config.status: creating src/71_wannier/Makefile
config.status: creating src/72_response/Makefile
config.status: creating src/77_ddb/Makefile
config.status: creating src/77_suscep/Makefile
config.status: creating src/78_effpot/Makefile
config.status: creating src/78_eph/Makefile
config.status: creating src/79_seqpar_mpi/Makefile
config.status: creating src/80_tdep/Makefile
config.status: creating src/94_scfcv/Makefile
config.status: creating src/95_drive/Makefile
config.status: creating src/98_main/Makefile
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing default commands
config.status: executing dump-optim commands
config.status: executing long-lines commands
config.status: executing script-perms commands
config.status: executing source-split commands

 ==============================================================================
 === Final remarks                                                          ===
 ==============================================================================


        +--------------------------------------------------------------+
        | About the Intel Fortran compiler                             |
        +--------------------------------------------------------------+
        | Your compiler will work properly only if the LD_LIBRARY_PATH |
        | and INTEL_LICENSE_FILE environment variables are correctly   |
        | set-up. Please make sure that this is the case before        |
        | building ABINIT.                                             |
        |                                                              |
        | In most cases it means sourcing a script in the Intel        |
        | compiler install directory, e.g.:                            |
        |                                                              |
        | . /opt/intel/fc/9.1/bin/ifortvars.sh                         |
        |                                                              |
        | for a Bourne-like shell (do not forget the leading dot), or  |
        |                                                              |
        | source /opt/intel/fc/9.1/bin/ifortvars.csh                   |
        |                                                              |
        | for a C-like shell.                                          |
        |                                                              |
        | If you do not know what this is all about, please refer to   |
        | the Intel documentation or ask your system administrator.    |
        |                                                              |
        | Please note that the same holds for the Intel C and C++      |
        | compilers.                                                   |
        +--------------------------------------------------------------+


Core build parameters
---------------------

  * C compiler       : intel version 18.0
  * Fortran compiler : intel version 18.0
  * architecture     : intel xeon (64 bits)
  * debugging        : basic
  * optimizations    : standard

  * OpenMP enabled   : yes (collapse: yes)
  * MPI    enabled   : yes (flavor: auto)
  * MPI    in-place  : yes
  * MPI-IO enabled   : no
  * GPU    enabled   : no (flavor: none)

  * LibXML2 enabled  : no
  * HDF5 enabled     : yes (MPI support: no)
  * NetCDF enabled   : yes (MPI support: no)
  * NetCDF-F enabled : yes (MPI support: no)

  * FFT flavor       : dfti (libs: auto-detected)
  * LINALG flavor    : mkl (libs: auto-detected)

  * Build workflow   : monolith

0 deprecated options have been used:.

Configuration complete.
You may now type "make" to build Abinit.
(or "make -j<n>", where <n> is the number of available processors)

