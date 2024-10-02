
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
configure: not loading options (no config file available)

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 6.12.1
configure: M4 010416 - Autoconf 026800 - Automake 011100 - Libtool 020204
configure: reporting user interface changes:
configure:  * new option --enable-gui is available
configure:  * new option --enable-gw-openmp is available
configure:  * new option --with-algo-flavor is available
configure:  * new option --with-algo-incs is available
configure:  * new option --with-algo-libs is available
configure:  * --with-fallbacks-tardir removed

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of library-related options
configure:  |---> all OK
configure: 
configure: checking consistency of experimental options
configure:  |---> all OK
configure: 
configure:  |---> all OK
configure: 
configure: parsing command-line options

 ==============================================================================
 === Multicore architecture startup                                         ===
 ==============================================================================

configure: Initializing MPI support
configure: looking for MPI in /home/temok/opt/openmpi-1.4.4
checking for a MPI C compiler... /home/temok/opt/openmpi-1.4.4/bin/mpicc
checking for a MPI C++ compiler... /home/temok/opt/openmpi-1.4.4/bin/mpicxx
checking for a MPI Fortran compiler... /home/temok/opt/openmpi-1.4.4/bin/mpif90
checking for a MPI runner... /home/temok/opt/openmpi-1.4.4/bin/mpirun
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

checking for gcc... /home/temok/opt/openmpi-1.4.4/bin/mpicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /home/temok/opt/openmpi-1.4.4/bin/mpicc accepts -g... yes
checking for /home/temok/opt/openmpi-1.4.4/bin/mpicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of /home/temok/opt/openmpi-1.4.4/bin/mpicc... gcc3
checking how to run the C preprocessor... /home/temok/opt/openmpi-1.4.4/bin/mpicc -E
checking which type of compiler we have... gnu 4.1
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

checking whether we are using the GNU C++ compiler... yes
checking whether /home/temok/opt/openmpi-1.4.4/bin/mpicxx accepts -g... yes
checking dependency style of /home/temok/opt/openmpi-1.4.4/bin/mpicxx... gcc3
checking which type of C++ compiler we have... gnu 4.1

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking whether we are using the GNU Fortran compiler... no
checking whether /home/temok/opt/openmpi-1.4.4/bin/mpif90 accepts -g... yes
checking which type of Fortran compiler we have... intel 12.1
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from /home/temok/opt/openmpi-1.4.4/bin/mpif90... -v
checking for Fortran libraries of /home/temok/opt/openmpi-1.4.4/bin/mpif90...  -L/home/temok/opt/openmpi-1.4.4/lib -L/opt/intel/mkl/9.1.023/lib/em64t -L/opt/intel/composer_xe_2011_sp1.9.293/compiler/lib/intel64 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../.. -L/lib64 -L/lib -L/usr/lib64 -L/usr/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -lnsl -lutil -limf -lm -lifport -lifcore -lsvml -lipgo -lirc -lpthread -lirc_s
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for Python CPPFLAGS... -I/usr/include/python2.4 -I/usr/lib64/python2.4/site-packages/numpy/core/include
checking for bzr... bzr
checking for Python NumPy headers... found

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
checking which cc debug flags to apply... gnu/default/default
checking which cxx debug flags to apply... none/none/none
checking which fc debug flags to apply... intel/default/default
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... gnu/4.1/default
checking which cxx optimizations to apply... gnu/4.1/default
checking which fc optimizations to apply... intel/default/amd_opteron
checking whether to apply per-directory optimizations... yes

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
checking whether the Fortran compiler supports allocatable arrays in datatypes... yes
checking whether the Fortran compiler provides the iso_c_binding module... yes
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... yes
checking whether the Fortran compiler accepts getenv()... yes
checking whether the Fortran compiler accepts getpid()... yes
checking whether the Fortran compiler accepts the null() intrinsic... yes
checking whether the Fortran compiler accepts quadruple integers... no
checking whether the Fortran compiler accepts long lines... no
checking whether the Fortran compiler supports stream IO... yes
checking whether the Fortran compiler accepts cpu_time()... yes
checking whether the Fortran compiler accepts etime()... yes
checking whether to use C clock for timings... no

 ==============================================================================
 === Multicore architecture support                                         ===
 ==============================================================================

checking whether the C compiler supports MPI... yes
checking whether the C++ compiler supports MPI... yes
checking whether the Fortran Compiler supports MPI... yes
checking whether MPI is usable... yes
configure: enabling MPI I/O support
checking whether to build MPI code... yes
checking whether to build MPI I/O code... yes
checking whether to build MPI time tracing code... no
checking which level of MPI is supported by the Fortran compiler... 2
checking whether the MPI library supports MPI_CREATE_TYPE_STRUCT... yes
checking whether to activate GPU support... no

 ==============================================================================
 === Connectors / Fallbacks                                                 ===
 ==============================================================================

checking for the requested transferable I/O support... netcdf+etsf_io
checking whether to select a fallback for netcdf... no
checking netcdf.h usability... no
checking netcdf.h presence... no
checking for netcdf.h... no
checking for library containing nc_open... no
checking for Fortran module includes... unknown
configure: WARNING: falling back to internal netcdf version
checking whether to select a fallback for etsf_io... no
configure: WARNING: ETSF_IO requires missing NetCDF support
configure: WARNING: falling back to internal etsf_io version
checking for the actual transferable I/O support... netcdf-fallback+etsf_io-fallback
checking for the requested timer support... abinit
checking time.h usability... yes
checking time.h presence... yes
checking for time.h... yes
checking for clock_gettime in -lrt... yes
checking for clock_gettime... no
checking for the actual timer support... abinit
checking for the requested linear algebra support... netlib
checking whether to select a fallback for linear algebra... no
checking for library containing zgemm... no
checking for library containing zhpev... no
checking whether we have a serial linear algebra support... no
configure: WARNING: falling back to internal linear algebra libraries
checking whether we have a MPI linear algebra support... no
checking whether we have a GPU linear algebra support... no
checking for the actual linear algebra support... netlib-fallback
checking for the requested algorithmic support... none
checking for the actual algorithmic support... none
checking for the requested math support... none
checking for the actual math support... none
checking for the requested FFT support... none
checking for the actual FFT support... none
checking for the requested DFT support... atompaw+bigdft+libxc+wannier90
checking whether to select a fallback for libxc... no
checking xc.h usability... no
checking xc.h presence... no
checking for xc.h... no
checking xc_funcs.h usability... no
checking xc_funcs.h presence... no
checking for xc_funcs.h... no
checking for library containing xc_func_init... no
checking for Fortran module includes... unknown
configure: WARNING: falling back to internal libxc version
checking whether to select a fallback for atompaw... no
configure: WARNING: AtomPAW requires missing linear algebra support
configure: WARNING: AtomPAW requires missing LibXC support
configure: WARNING: falling back to internal atompaw version
checking whether to select a fallback for bigdft... no
configure: WARNING: BigDFT requires missing linear algebra support
configure: WARNING: BigDFT requires missing LibXC support
configure: WARNING: falling back to internal bigdft version
checking whether to select a fallback for wannier90... no
configure: WARNING: wannier90 requires missing linear algebra support
configure: WARNING: falling back to internal wannier90 version
checking for the actual DFT support... libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
configure: fallbacks to enable => atompaw bigdft etsf_io libxc linalg netcdf wannier90
checking whether to build atompaw... yes
checking whether to build bigdft... yes
checking whether to build etsf_io... yes
checking whether to build fox... no
checking whether to build libxc... yes
checking whether to build linalg... yes
checking whether to build netcdf... yes
checking whether to build wannier90... yes
configure: using tarball repository /home/temok/.abinit/tarballs

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
checking whether to activate build of exported libraries (EXPERIMENTAL)... no
checking whether to activate the use of cut-offs for GW calculations (EXPERIMENTAL)... no
checking whether to activate double-precision GW calculations (EXPERIMENTAL)... no
checking whether to activate OpenMP-assisted GW calculations (EXPERIMENTAL)... no
checking whether to activate optimal GW calculations (EXPERIMENTAL)... no
checking whether to activate wrapped GW calculations (EXPERIMENTAL)... no
checking whether to enable build of macroave (EXPERIMENTAL)... yes
configure: triggering the 'DO_BUILD_01_MACROAVNEW_EXT' conditional
configure: triggering the 'DO_BUILD_MACROAVE' conditional
configure: defining the 'USE_MACROAVE' preprocessing macro
checking whether to activate support for Symmetric Multi-Processing (EXPERIMENTAL)... no
checking whether to tell Abinit to read file lists from standard input... yes
checking whether to activate workaround for bugged ZDOTC and ZDOTU... no

 ==============================================================================
 === Subsystems                                                             ===
 ==============================================================================

configure: the Abinit Documentation will never be built
configure: the Abinit FALLBACKS may be built when necessary
configure: the Abinit GUI will never be built
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
config.status: creating src/11_qespresso_ext/Makefile
config.status: creating src/12_hide_mpi/Makefile
config.status: creating src/13_memory_mpi/Makefile
config.status: creating src/14_hidewrite/Makefile
config.status: creating src/15_gpu_toolbox/Makefile
config.status: creating src/16_hideleave/Makefile
config.status: creating src/18_timing/Makefile
config.status: creating src/27_toolbox_oop/Makefile
config.status: creating src/28_numeric_noabirule/Makefile
config.status: creating src/32_contract/Makefile
config.status: creating src/32_util/Makefile
config.status: creating src/42_geometry/Makefile
config.status: creating src/42_nlstrain/Makefile
config.status: creating src/42_parser/Makefile
config.status: creating src/42_wvl_wrappers/Makefile
config.status: creating src/43_abitypes_defs/Makefile
config.status: creating src/43_ptgroups/Makefile
config.status: creating src/44_geomoptim/Makefile
config.status: creating src/45_psp_parser/Makefile
config.status: creating src/47_xml/Makefile
config.status: creating src/49_gw_toolbox_oop/Makefile
config.status: creating src/51_manage_mpi/Makefile
config.status: creating src/52_fft_mpi_noabirule/Makefile
config.status: creating src/52_manage_cuda/Makefile
config.status: creating src/53_abiutil/Makefile
config.status: creating src/53_ffts/Makefile
config.status: creating src/53_spacepar/Makefile
config.status: creating src/56_mixing/Makefile
config.status: creating src/56_recipspace/Makefile
config.status: creating src/56_xc/Makefile
config.status: creating src/57_iovars/Makefile
config.status: creating src/59_io_mpi/Makefile
config.status: creating src/61_ionetcdf/Makefile
config.status: creating src/62_cg_noabirule/Makefile
config.status: creating src/62_iowfdenpot/Makefile
config.status: creating src/62_occeig/Makefile
config.status: creating src/62_poisson/Makefile
config.status: creating src/62_wvl_wfs/Makefile
config.status: creating src/63_bader/Makefile
config.status: creating src/64_atompaw/Makefile
config.status: creating src/65_nonlocal/Makefile
config.status: creating src/65_psp/Makefile
config.status: creating src/66_paw/Makefile
config.status: creating src/66_wfs/Makefile
config.status: creating src/67_common/Makefile
config.status: creating src/68_dmft/Makefile
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
config.status: creating src/93_rdm/Makefile
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
=== configuring in fallbacks (/home/temok/opt/abinit-6.12.1/build-parallel/fallbacks)
configure: running /bin/sh ../../fallbacks/configure --disable-option-checking '--prefix=/usr/local'  '--enable-mpi=yes' '--with-mpi-prefix=/home/temok/opt/openmpi-1.4.4' '--enable-gui-build=yes' '--enable-atompaw=yes' '--enable-bigdft=yes' '--enable-etsf-io=yes' '--enable-fox=no' '--enable-libxc=yes' '--enable-linalg=yes' '--enable-netcdf=yes' '--enable-wannier90=yes' '--with-fc-vendor=intel' '--with-fc-version=12.1' '--with-tardir=/home/temok/.abinit/tarballs' --cache-file=/dev/null --srcdir=../../fallbacks
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
configure: setting tarball repository to /home/temok/.abinit/tarballs
configure: checking consistency of fallback options
checking for wget... wget
checking for curl... curl
configure: using tarball repository /home/temok/.abinit/tarballs
checking for patch... patch
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
checking dependency style of gcc... none
checking for gfortran... gfortran
checking whether we are using the GNU Fortran compiler... yes
checking whether gfortran accepts -g... yes
checking whether to enable the LINALG fallback... yes
checking for a source tarball of LINALG... yes
checking for md5sum... md5sum
configure: tarball MD5 check succeeded
configure: applying linear algebra tricks (vendor: intel, version: 12.1)
checking whether to enable the FOX fallback... no
checking whether to enable the NETCDF fallback... yes
checking for a source tarball of NETCDF... yes
configure: tarball MD5 check succeeded
configure: applying NetCDF tricks (vendor: intel, version: 12.1)
configure: CFGFLAGS_NETCDF =  --disable-cxx --disable-cxx-4 --disable-dap --disable-hdf4 --disable-netcdf4 --enable-fortran --enable-static --disable-shared
configure: CPPFLAGS_NETCDF =  -DNDEBUG -DpgiFortran
configure: FCFLAGS_NETCDF  =  -DNDEBUG -DpgiFortran -g -O2
checking whether to enable the ETSF_IO fallback... yes
checking for a source tarball of ETSF_IO... yes
configure: tarball MD5 check succeeded
configure: applying ETSF_IO tricks (vendor: intel, version: 12.1)
configure: CFGFLAGS_ETSF_IO =  --with-netcdf-incs="$(lib_netcdf_incs)" --with-netcdf-libs="$(lib_netcdf_libs)" --with-moduledir="$(fallbacks_instdir)/include"
configure: FCFLAGS_ETSF_IO  = -g -O2
checking whether to enable the LIBXC fallback... yes
checking for a source tarball of LIBXC... yes
configure: tarball MD5 check succeeded
configure: applying LIBXC tricks
configure: CFGFLAGS_LIBXC = --enable-fortran --enable-static --disable-shared
configure: CFLAGS_LIBXC   = -g -O2
checking whether to enable the ATOMPAW fallback... yes
checking for a source tarball of ATOMPAW... yes
configure: tarball MD5 check succeeded
configure: applying AtomPAW tricks (vendor: intel, version: 12.1)
configure: CFGFLAGS_ATOMPAW =  --with-linalg-libs="$(lib_linalg_libs)" --enable-libxc --with-libxc-incs="$(lib_libxc_incs)" --with-libxc-libs="$(lib_libxc_libs)" --enable-static --disable-shared
checking whether to enable the BIGDFT fallback... yes
checking for a source tarball of BIGDFT... yes
configure: tarball MD5 check succeeded
configure: applying BigDFT tricks (vendor: intel, version: 12.1)
configure: CFGFLAGS_BIGDFT =  --disable-binaries --enable-libbigdft --enable-libpoissonsolver --disable-libxc --without-archives --with-moduledir="$(fallbacks_instdir)/include"
checking whether to enable the WANNIER90 fallback... yes
checking for a source tarball of WANNIER90... yes
configure: tarball MD5 check succeeded
configure: applying Wannier90 tricks (vendor: intel, version: 12.1)
configure: LIBS_WANNIER90 = $(lib_linalg_libs) -L$(fallbacks_instdir)/lib -llapack -lblas -L$(fallbacks_instdir)/lib -letsf_io_low_level -letsf_io_utils -letsf_io 
configure: creating ./config.status
config.status: creating Makefile
config.status: executing depfiles commands
=== configuring in tests (/home/temok/opt/abinit-6.12.1/build-parallel/tests)
configure: running /bin/sh ../../tests/configure --disable-option-checking '--prefix=/usr/local'  '--enable-mpi=yes' '--with-mpi-prefix=/home/temok/opt/openmpi-1.4.4' '--enable-gui-build=yes' '--enable-atompaw=yes' '--enable-bigdft=yes' '--enable-etsf-io=yes' '--enable-fox=no' '--enable-libxc=yes' '--enable-linalg=yes' '--enable-netcdf=yes' '--enable-wannier90=yes' '--with-fc-vendor=intel' '--with-fc-version=12.1' '--with-tardir=/home/temok/.abinit/tarballs' --cache-file=/dev/null --srcdir=../../tests
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
checking dependency style of gcc... none
checking timeout for automatic tests... none
checking whether to build test timeout code... no
configure: creating ./config.status
config.status: creating Makefile
config.status: executing depfiles commands

 ==============================================================================
 === Final remarks                                                          ===
 ==============================================================================


        +--------------------------------------------------------------+
        | Suboptimal linear algebra configuration                      |
        +--------------------------------------------------------------+
        | You have decided to use the Abinit version of linear         |
        | algebra libraries (BLAS, LAPACK), which is a random mix of   |
        | routines coming from official Netlib versions ranging from   |
        | 3.0 (released June 30, 1999) to 3.2 (released November 18,   |
        | 2008). They were downloaded from http://www.netlib.org/.     |
        |                                                              |
        | The current version of Netlib's libraries is 3.4.0 (released |
        | November 11, 2011). Since version 3.2, more than 60          |
        | significant bugs - including memory leaks - have been fixed, |
        | various performance improvements have been made available,   |
        | and routine interfaces have been refactored.                 |
        |                                                              |
        | Moreover, the Abinit version of the libraries rely on a      |
        | heavily modified build system and will be compiled with      |
        | build parameters optimized for Abinit, not for BLAS or       |
        | LAPACK. This might prove somewhat suboptimal or inadequate   |
        | on some computer architectures. Please note as well that the |
        | Abinit test suite does not provide specific tests for linear |
        | algebra.                                                     |
        |                                                              |
        | By using the libraries provided by Abinit, you thus accept to |
        | experience poor calculation performance, unlikely but possible |
        | random crashes without error messages, and possibly inaccurate |
        | results. However, if this is not what you intended           |
        | originally, you may instead select one of the various        |
        | optimized linear algebra implementations supported by        |
        | Abinit.                                                      |
        |                                                              |
        | For production-grade calculations, you will find detailed    |
        | documentation on how to configure Abinit for optimized       |
        | linear algebra libraries in the "Linear algebra              |
        | connector" section of Abinit's config file template:         |
        | ~abinit/doc/config/build-config.ac.                          |
        |                                                              |
        | Do not hesitate to contact your system administrator in      |
        | case of doubt or if you need linear algebra libraries        |
        | installed into your local high-performance computing         |
        | environment.                                                 |
        +--------------------------------------------------------------+


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

  * C compiler      : gnu version 4.1
  * Fortran compiler: intel version 12.1
  * architecture    : amd opteron (64 bits)

  * debugging       : basic
  * optimizations   : standard

  * MPI    enabled  : yes
  * MPI-IO enabled  : yes
  * GPU    enabled  : no (none)

  * TRIO   flavor = netcdf-fallback+etsf_io-fallback
  * TIMER  flavor = abinit (libs: ignored)
  * LINALG flavor = netlib-fallback (libs: internal)
  * ALGO   flavor = none (libs: ignored)
  * FFT    flavor = none (libs: ignored)
  * MATH   flavor = none (libs: ignored)
  * DFT    flavor = libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback

Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")

