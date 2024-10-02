
 ==============================================================================
 === Overall startup                                                        ===
 ==============================================================================

checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for realpath,readlink... no
configure: not loading options (no config file available)

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 7.6.3
configure: M4 010416 - Autoconf 026800 - Automake 011100 - Libtool 020204
configure: reporting user interface changes:
configure:  * --with-trio-flavor has been modified
configure:    (changed values)
configure:    please check that --with-trio-flavor="none" is OK for you
configure:  * new option --with-yaml-incs is available
configure:  * new option --with-yaml-libs is available

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

checking for mpiicc... /opt/mvapich2-intel-shmem-1.7/bin/mpiicc
checking for gcc... mpiicc -mkl=cluster -debug 
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether mpiicc -mkl=cluster -debug  accepts -g... yes
checking for mpiicc -mkl=cluster -debug  option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of mpiicc -mkl=cluster -debug ... gcc3
checking how to run the C preprocessor... mpiicc -mkl=cluster -debug  -E
checking which type of compiler we have... intel 12.1
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

 ==============================================================================
 === C++ support                                                            ===
 ==============================================================================

checking for mpiicpc... /opt/mvapich2-intel-shmem-1.7/bin/mpiicpc
checking whether we are using the GNU C++ compiler... yes
checking whether mpiicpc -mkl=cluster -debug  accepts -g... yes
checking dependency style of mpiicpc -mkl=cluster -debug ... gcc3
checking which type of C++ compiler we have... gnu 12.1

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking for mpiifort... /opt/mvapich2-intel-shmem-1.7/bin/mpiifort
checking whether we are using the GNU Fortran compiler... no
checking whether mpiifort -mkl=cluster -debug  accepts -g... yes
checking which type of Fortran compiler we have... intel 12.1
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from mpiifort -mkl=cluster -debug ... -v
checking for Fortran libraries of mpiifort -mkl=cluster -debug ...  -L/opt/mvapich2-intel-shmem-1.7/lib -L/opt/intel-12.1/compiler/lib/intel64 -L/usr/lib/gcc/x86_64-redhat-linux/4.4.7 -L/usr/lib/gcc/x86_64-redhat-linux/4.4.7/../../../../lib64 -L/lib/../lib64 -L/usr/lib/../lib64 -L/usr/lib/gcc/x86_64-redhat-linux/4.4.7/../../.. -L/lib64 -L/lib -L/usr/lib64 -L/usr/lib -lmpichf90 -lmpich -lopa -lmpl -lpmi -lrt -lpthread -L/opt/intel-12.1/mkl/lib/intel64 -lmkl_intel_lp64 -lmkl_cdft_core -lmkl_scalapack_lp64 -lmkl_blacs_intelmpi_lp64 -lmkl_sequential -lmkl_core -liomp5 -lifport -lifcore -limf -lsvml -lm -lipgo -lirc -lirc_s -ldl
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for Python CPPFLAGS... -I/usr/apps/python/include/python2.7 -I/usr/apps/python/lib/python2.7/site-packages/numpy/core/include
checking for bzr... no
checking Python.h usability... yes
checking Python.h presence... yes
checking for Python.h... yes
checking for numpy/arrayobject.h... yes

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
checking which cc hints to apply... intel/default/default
checking which xpp hints to apply... none/none/none
checking which cxx hints to apply... gnu/default/default
checking which fpp hints to apply... default/default/default
checking which fc hints to apply... intel/default/default
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
checking which cc debug flags to apply... none/none/none
checking which cxx debug flags to apply... none/none/none
checking which fc debug flags to apply... intel/default/default
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... intel/default/default
checking which cxx optimizations to apply... gnu/default/default
checking which fc optimizations to apply... intel/default/default
checking whether to apply per-directory optimizations... yes

 ==============================================================================
 === 64-bit support                                                         ===
 ==============================================================================

checking for a 64-bit architecture... yes
checking whether to use 64-bit flags... yes
checking for user-defined 64-bit flags... 
checking for 64-bit C preprocessor flags... none
checking for 64-bit C flags... none
checking for 64-bit C++ flags... -m64
checking for 64-bit Fortran flags... none
checking for 64-bit archiver flags... none

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
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
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
checking whether the Fortran compiler supports GET_COMMAND_ARGUMENT... yes
checking whether the Fortran compiler supports EXECUTE_COMMAND_LINE... no
checking whether the Fortran compiler supports SYSTEM... no
checking whether the Fortran compiler accepts the CONTIGUOUS attribute... yes
checking whether the Fortran compiler supports allocatable arrays in datatypes... yes
checking whether the Fortran compiler supports IOMSG... yes
checking whether the Fortran compiler provides the iso_c_binding module... yes
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... no
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... yes
checking whether the Fortran compiler accepts getenv()... no
checking whether the Fortran compiler accepts getpid()... no
checking whether the Fortran compiler accepts the null() intrinsic... yes
checking whether the Fortran compiler accepts quadruple integers... no
checking whether the Fortran compiler accepts long lines... no
checking whether the Fortran compiler supports stream IO... yes
checking whether the Fortran compiler accepts cpu_time()... yes
checking whether the Fortran compiler accepts etime()... no
checking whether to use C clock for timings... no

 ==============================================================================
 === Multicore architecture support                                         ===
 ==============================================================================

checking whether to enable OpenMP support... no
checking whether to build MPI code... auto
checking whether the C compiler supports MPI... yes
checking whether the C++ compiler supports MPI... yes
checking whether the Fortran Compiler supports MPI... yes
checking whether MPI is usable... yes
checking whether to build MPI I/O code... yes
checking whether to build MPI time tracing code... no
checking which level of MPI is supported by the Fortran compiler... 2
configure: forcing MPI-2 standard support
checking whether the MPI library supports MPI_CREATE_TYPE_STRUCT... yes
checking whether to activate GPU support... no

 ==============================================================================
 === Connectors / Fallbacks                                                 ===
 ==============================================================================

checking for the requested transferable I/O support... none
checking for the actual transferable I/O support... none
checking for the requested timer support... abinit
checking time.h usability... yes
checking time.h presence... yes
checking for time.h... yes
checking for clock_gettime in -lrt... yes
checking for clock_gettime... yes
checking for the actual timer support... abinit
checking for the requested linear algebra support... mkl+scalapack
checking whether to select a fallback for linear algebra... no
checking for AXPBY support in specified BLAS libraries... yes
checking for gemm3m in specified libraries... yes
checking for mkl_imatcopy in specified libraries... yes
checking for mkl_omatcopy in specified libraries... yes
checking for mkl_omatadd in specified libraries... yes
checking for library containing zgemm... none required
checking for library containing zhpev... none required
checking for library containing blacs_gridinit... none required
checking for library containing pzheevx... none required
checking whether we have a serial linear algebra support... yes
checking whether we have a MPI linear algebra support... yes
checking whether we have a GPU linear algebra support... no
checking for the actual linear algebra support... mkl+scalapack
checking for the requested algorithmic support... none
checking for the actual algorithmic support... none
checking for the requested math support... none
checking for the actual math support... none
checking for the requested FFT support... fftw3-mkl
checking for library containing dfftw_execute... none required
checking for the actual FFT support... fftw3-mkl
checking for the requested DFT support... none
checking for the actual DFT support... none
configure: fallbacks to enable => 
checking whether to build atompaw... no
checking whether to build bigdft... no
checking whether to build etsf_io... no
checking whether to build fox... no
checking whether to build libxc... no
checking whether to build linalg... no
checking whether to build netcdf... no
checking whether to build wannier90... no
configure: using tarball repository /g/g14/damewood/.abinit/tarballs

 ==============================================================================
 === Experimental developments and option triggers                          ===
 ==============================================================================

checking whether to accelerate 'make check'... no
checking whether to reduce 'make check' for packaging... no
checking whether to activate maintainer checks... no
configure: setting triggers associated to command-line options
checking whether to activate support for bindings (EXPERIMENTAL)... no
checking whether to activate Bethe-Salpeter unpacking (EXPERIMENTAL)... no
checking whether to enable the Abinit C library (EXPERIMENTAL)... no
checking whether to enable the use of internal timer for developments... no
checking whether to activate build of exported libraries (EXPERIMENTAL)... no
checking whether to activate double-precision GW calculations (EXPERIMENTAL)... yes
configure: defining the 'HAVE_GW_DPC' preprocessing macro
checking whether to activate internal support for libPAW in ABINIT... yes
configure: defining the 'HAVE_LIBPAW_ABINIT' preprocessing macro
checking whether to activate LOTF functionality (EXPERIMENTAL)... no
checking whether to enable build of macroave (EXPERIMENTAL)... yes
configure: triggering the 'DO_BUILD_01_MACROAVNEW_EXT' conditional
configure: triggering the 'DO_BUILD_MACROAVE' conditional
configure: defining the 'USE_MACROAVE' preprocessing macro
checking whether to enable memory profiling... 
checking whether to activate support for MPI_IN_PLACE... no
checking whether to activate support for OpenMP (EXPERIMENTAL)... no
checking whether to tell Abinit to read file lists from standard input... yes
checking whether to activate workaround for bugged ZDOTC and ZDOTU... no

 ==============================================================================
 === Subsystems                                                             ===
 ==============================================================================

configure: the Abinit Documentation will never be built
configure: the Abinit FALLBACKS may be built when necessary
configure: the Abinit Documentation may be built upon request

 ==============================================================================
 === Output                                                                 ===
 ==============================================================================

configure: creating ./config.status
config.status: creating doc/Makefile
config.status: creating config.dump
config.status: creating config.pc
config.status: creating config.sh
config.status: creating config/wrappers/wrap-fc
config.status: creating fallbacks/config.mk
config.status: creating src/incs/Makefile
config.status: creating src/mods/Makefile
config.status: creating src/16_hideleave/m_build_info.F90
config.status: creating tests/config.sh
config.status: creating tests/tests.env
config.status: creating tests/tests-install.env
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/01_gsl_ext/Makefile
config.status: creating src/01_interfaces_ext/Makefile
config.status: creating src/01_linalg_ext/Makefile
config.status: creating src/01_macroavnew_ext/Makefile
config.status: creating src/02_clib/Makefile
config.status: creating src/10_defs/Makefile
config.status: creating src/11_memory_mpi/Makefile
config.status: creating src/11_qespresso_ext/Makefile
config.status: creating src/12_hide_mpi/Makefile
config.status: creating src/14_hidewrite/Makefile
config.status: creating src/15_gpu_toolbox/Makefile
config.status: creating src/16_hideleave/Makefile
config.status: creating src/18_timing/Makefile
config.status: creating src/21_psiesta_noabirule/Makefile
config.status: creating src/27_toolbox_oop/Makefile
config.status: creating src/28_numeric_noabirule/Makefile
config.status: creating src/32_util/Makefile
config.status: creating src/41_geometry/Makefile
config.status: creating src/41_xc_lowlevel/Makefile
config.status: creating src/42_libpaw/Makefile
config.status: creating src/42_nlstrain/Makefile
config.status: creating src/42_parser/Makefile
config.status: creating src/43_ptgroups/Makefile
config.status: creating src/43_wvl_wrappers/Makefile
config.status: creating src/44_abitypes_defs/Makefile
config.status: creating src/45_geomoptim/Makefile
config.status: creating src/47_xml/Makefile
config.status: creating src/49_gw_toolbox_oop/Makefile
config.status: creating src/51_manage_mpi/Makefile
config.status: creating src/52_fft_mpi_noabirule/Makefile
config.status: creating src/52_manage_cuda/Makefile
config.status: creating src/53_abiutil/Makefile
config.status: creating src/53_ffts/Makefile
config.status: creating src/53_spacepar/Makefile
config.status: creating src/56_io_mpi/Makefile
config.status: creating src/56_mixing/Makefile
config.status: creating src/56_recipspace/Makefile
config.status: creating src/56_xc/Makefile
config.status: creating src/57_iopsp_parser/Makefile
config.status: creating src/57_iovars/Makefile
config.status: creating src/61_ionetcdf/Makefile
config.status: creating src/62_cg_noabirule/Makefile
config.status: creating src/62_ctqmc/Makefile
config.status: creating src/62_iowfdenpot/Makefile
config.status: creating src/62_occeig/Makefile
config.status: creating src/62_poisson/Makefile
config.status: creating src/62_wvl_wfs/Makefile
config.status: creating src/63_bader/Makefile
config.status: creating src/64_atompaw/Makefile
config.status: creating src/65_lotf_base/Makefile
config.status: creating src/65_nonlocal/Makefile
config.status: creating src/65_psp/Makefile
config.status: creating src/66_paw/Makefile
config.status: creating src/66_wfs/Makefile
config.status: creating src/67_common/Makefile
config.status: creating src/68_dmft/Makefile
config.status: creating src/68_lotf/Makefile
config.status: creating src/68_recursion/Makefile
config.status: creating src/68_rsprc/Makefile
config.status: creating src/69_wfdesc/Makefile
config.status: creating src/70_gw/Makefile
config.status: creating src/71_bse/Makefile
config.status: creating src/72_response/Makefile
config.status: creating src/77_ddb/Makefile
config.status: creating src/77_lwf/Makefile
config.status: creating src/77_suscep/Makefile
config.status: creating src/79_seqpar_mpi/Makefile
config.status: creating src/83_cut3d/Makefile
config.status: creating src/95_drive/Makefile
config.status: creating src/98_main/Makefile
config.status: creating src/libs/Makefile
config.status: creating tests/Nightly/Makefile
config.status: creating bindings/Makefile
config.status: creating bindings/parser/Makefile
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing dump-optim commands
config.status: executing script-perms commands
config.status: executing long-lines commands
=== configuring in fallbacks (/g/g14/damewood/Downloads/abinit-7.6.3/debug/fallbacks)
configure: running /bin/sh ../../fallbacks/configure --disable-option-checking '--prefix=/g/g14/damewood/software/abinit/7.6/intel'  '--enable-64bit-flags' '--enable-gw-dpc' '--with-linalg-flavor=mkl+scalapack' '--with-fft-flavor=fftw3-mkl' '--with-mpi-level=2' '--enable-mpi-io' 'FC=mpiifort -mkl=cluster -debug ' 'CC=mpiicc -mkl=cluster -debug ' 'CXX=mpiicpc -mkl=cluster -debug ' '--enable-gui-build=yes' '--enable-atompaw=no' '--enable-bigdft=no' '--enable-etsf-io=no' '--enable-fox=no' '--enable-libxc=no' '--enable-linalg=no' '--enable-netcdf=no' '--enable-wannier90=no' '--with-fc-vendor=intel' '--with-fc-version=12.1' '--with-tardir=/g/g14/damewood/.abinit/tarballs' --cache-file=/dev/null --srcdir=../../fallbacks
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
configure: setting Fortran compiler vendor to intel
configure: setting Fortran compiler version to 12.1
configure: setting tarball repository to /g/g14/damewood/.abinit/tarballs
configure: checking consistency of fallback options
checking for wget... wget
checking for curl... curl
configure: using tarball repository /g/g14/damewood/.abinit/tarballs
checking for patch... patch
checking for gcc... mpiicc -mkl=cluster -debug 
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether mpiicc -mkl=cluster -debug  accepts -g... yes
checking for mpiicc -mkl=cluster -debug  option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of mpiicc -mkl=cluster -debug ... none
checking whether we are using the GNU Fortran compiler... no
checking whether mpiifort -mkl=cluster -debug  accepts -g... yes
checking whether to enable the LINALG fallback... no
checking whether to enable the FOX fallback... no
checking whether to enable the NETCDF fallback... no
checking whether to enable the ETSF_IO fallback... no
checking whether to enable the LIBXC fallback... no
checking whether to enable the ATOMPAW fallback... no
checking whether to enable the BIGDFT fallback... no
checking whether to enable the WANNIER90 fallback... no
configure: creating ./config.status
config.status: creating Makefile
config.status: executing depfiles commands
=== configuring in tests (/g/g14/damewood/Downloads/abinit-7.6.3/debug/tests)
configure: running /bin/sh ../../tests/configure --disable-option-checking '--prefix=/g/g14/damewood/software/abinit/7.6/intel'  '--enable-64bit-flags' '--enable-gw-dpc' '--with-linalg-flavor=mkl+scalapack' '--with-fft-flavor=fftw3-mkl' '--with-mpi-level=2' '--enable-mpi-io' 'FC=mpiifort -mkl=cluster -debug ' 'CC=mpiicc -mkl=cluster -debug ' 'CXX=mpiicpc -mkl=cluster -debug ' '--enable-gui-build=yes' '--enable-atompaw=no' '--enable-bigdft=no' '--enable-etsf-io=no' '--enable-fox=no' '--enable-libxc=no' '--enable-linalg=no' '--enable-netcdf=no' '--enable-wannier90=no' '--with-fc-vendor=intel' '--with-fc-version=12.1' '--with-tardir=/g/g14/damewood/.abinit/tarballs' --cache-file=/dev/null --srcdir=../../tests
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for perl... perl
checking for python... python
checking for gcc... mpiicc -mkl=cluster -debug 
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether mpiicc -mkl=cluster -debug  accepts -g... yes
checking for mpiicc -mkl=cluster -debug  option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of mpiicc -mkl=cluster -debug ... none
checking for mpirun... mpirun
checking timeout for automatic tests... none
checking whether to build test timeout code... no
configure: creating ./config.status
config.status: creating Makefile
config.status: executing depfiles commands
configure: reporting test suite configuration

  * test AtomPAW   : no
  * test BigDFT    : no
  * test ETSF_IO   : no
  * test FoX       : no
  * test GPU       : no
  * test LibXC     : no
  * test MPI       : yes
  * test Wannier90 : no

  * timeout : no (0 seconds)

  * MPI_RUNNER = mpirun
  * MPI_2PROCS = -np 2
  * MPI runner present : no
  * MPI runner working : unknown

The test suite of Abinit is now configured.


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


Summary of important options:

  * C compiler      : intel version 12.1
  * Fortran compiler: intel version 12.1
  * architecture    : intel xeon (64 bits)

  * debugging       : basic
  * optimizations   : standard

  * OpenMP enabled  : no (collapse: ignored)
  * MPI    enabled  : yes
  * MPI-IO enabled  : yes
  * GPU    enabled  : no (flavor: none)

  * TRIO   flavor = none
  * TIMER  flavor = abinit (libs: ignored)
  * LINALG flavor = mkl+scalapack (libs: auto-detected)
  * ALGO   flavor = none (libs: ignored)
  * FFT    flavor = fftw3-mkl (libs: auto-detected)
  * MATH   flavor = none (libs: ignored)
  * DFT    flavor = none

Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")

