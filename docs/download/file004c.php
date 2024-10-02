
 ==============================================================================
 === Overall startup                                                        ===
 ==============================================================================

checking build system type... i386-apple-darwin10.4.0
checking host system type... i386-apple-darwin10.4.0
checking target system type... i386-apple-darwin10.4.0
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... ../config/gnu/install-sh -c -d
checking for gawk... no
checking for mawk... no
checking for nawk... no
checking for awk... awk
checking whether make sets $(MAKE)... yes
checking whether make sets $(MAKE)... (cached) yes
checking for a BSD-compatible install... /usr/bin/install -c
checking whether ln -s works... yes
checking for a sed that does not truncate output... /usr/bin/sed
checking for gawk... (cached) awk
checking for grep that handles long lines and -e... /usr/bin/grep
checking for egrep... /usr/bin/grep -E
checking for a thread-safe mkdir -p... ../config/gnu/install-sh -c -d
configure: disabling all plug-ins

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version: 6.0.3
configure: M4 010413 - Autoconf 026300 - Automake 011100 - Libtool 020204
configure: reporting user interface changes:
configure:  * new option --enable-cuda is available
configure:  * --enable-debug has a new meaning
configure:    please check that --enable-debug="yes" is OK for you
configure:  * new option --enable-etsf-io-test is available
configure:  * --enable-tricks renamed --enable-hints
configure:  * --enable-etsf-xc renamed --enable-libxc
configure:  * --enable-mpi has a new meaning
configure:    please check that --enable-mpi="" is OK for you
configure:  * --enable-mpi-io-buggy renamed --enable-mpi-io-test
configure:  * --enable-optlevel renamed --enable-optim
configure:  * --enable-xmlf90 removed
configure:  * new option --with-cuda-includes is available
configure:  * new option --with-cuda-libs is available
configure:  * new option --with-etsf-io-test-includes is available
configure:  * new option --with-etsf-io-test-libs is available
configure:  * --with-etsf-xc-includes renamed --with-libxc-includes
configure:  * --with-etsf-xc-libs renamed --with-libxc-libs
configure:  * --with-mpi-cc-ldflags removed
configure:  * --with-mpi-cc-libs removed
configure:  * --with-mpi-cflags removed
configure:  * --with-mpi-cppflags removed
configure:  * --with-mpi-cxx-ldflags removed
configure:  * --with-mpi-cxx-libs removed
configure:  * --with-mpi-cxxflags removed
configure:  * --with-mpi-fc-ldflags removed
configure:  * --with-mpi-fc-libs removed
configure:  * --with-mpi-fcflags removed
configure:  * --with-mpi-prefix has a new meaning
configure:    please check that --with-mpi-prefix="" is OK for you
configure:  * --with-xmlf90-includes removed
configure:  * --with-xmlf90-libs removed

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of external prerequisite options
configure:  |---> all OK
configure: 
configure: checking consistency of plug-in options
configure:  |---> all OK
configure: 
configure: parsing command-line options

 ==============================================================================
 === Connector startup                                                      ===
 ==============================================================================

configure: Initializing MPI support
checking for mpirun... mpirun
configure: compiler checks deferred

 ==============================================================================
 === Utilities                                                              ===
 ==============================================================================

checking for sh... /bin/sh
checking for perl... /opt/local/bin/perl
checking for rm... /bin/rm
checking for mv... /bin/mv
checking for tar... /usr/bin/tar
checking for latex... /usr/texbin/latex
checking for dvips... /usr/texbin/dvips
checking for dvipdf... /opt/local/bin/dvipdf
checking for ps2pdf... /opt/local/bin/ps2pdf
checking for markdown... no
checking for wget... /opt/local/bin/wget
configure: using internal version of MarkDown

 ==============================================================================
 === C support                                                              ===
 ==============================================================================

checking for icc... /opt/intel/Compiler/11.1/088/bin/intel64/icc
checking for gcc... icc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether icc accepts -g... yes
checking for icc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of icc... gcc3
checking how to run the C preprocessor... icc -E
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
checking which type of compiler we have... gnu 
checking stddef.h usability... yes
checking stddef.h presence... yes
checking for stddef.h... yes
checking stdarg.h usability... yes
checking stdarg.h presence... yes
checking for stdarg.h... yes
checking stdio.h usability... yes
checking stdio.h presence... yes
checking for stdio.h... yes
checking malloc.h usability... no
checking malloc.h presence... no
checking for malloc.h... no
checking math.h usability... yes
checking math.h presence... yes
checking for math.h... yes
checking termios.h usability... yes
checking termios.h presence... yes
checking for termios.h... yes
checking for abort... yes
checking size of int... 4
checking size of unsigned int... 4
checking size of float... 4
checking size of double... 8
checking size of long... 8
checking size of unsigned long... 8
checking size of long long... 8
checking size of unsigned long long... 8
checking size of size_t... 8
checking size of ptrdiff_t... 8
checking for an ANSI C-conforming const... yes
checking for size_t... yes
checking whether byte ordering is bigendian... no

 ==============================================================================
 === C++ support                                                            ===
 ==============================================================================

checking for icpc... /opt/intel/Compiler/11.1/088/bin/intel64/icpc
checking whether we are using the GNU C++ compiler... yes
checking whether icpc accepts -g... yes
checking dependency style of icpc... gcc3
checking which type of C++ compiler we have... gnu 11.1

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking for ifort... /opt/intel/Compiler/11.1/088/bin/intel64/ifort
checking whether we are using the GNU Fortran compiler... no
checking whether ifort accepts -g... yes
configure: Fortran source will be preprocessed using C preprocessor
checking which type of Fortran compiler we have... intel 11.1
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... no
checking whether the Fortran compiler accepts get_environment_variable... yes
checking whether the Fortran compiler accepts quadruple integers... no
checking whether the Fortran compiler accepts long lines... yes
checking whether the Fortran compiler accepts the null() intrinsic... yes
checking how to get verbose linking output from ifort... -v
checking for Fortran libraries of ifort...  -L/opt/intel/Compiler/11.1/088/lib -L/usr/lib/gcc/i686-apple-darwin10/4.2.1/x86_64/ -L/usr/lib/i686-apple-darwin10/4.2.1/ -L/usr/lib/ -L/opt/intel/Compiler/11.1/088/lib/ -L/usr/lib/gcc/i686-apple-darwin10/4.2.1/x86_64 -L/usr/lib/gcc/i686-apple-darwin10/4.2.1/ -L/usr/lib/gcc/i686-apple-darwin10/4.2.1/../../../i686-apple-darwin10/4.2.1/ -L/usr/lib/gcc/i686-apple-darwin10/4.2.1/../../.. /opt/intel/Compiler/11.1/088/lib/libifport.a /opt/intel/Compiler/11.1/088/lib/libifcore.a /opt/intel/Compiler/11.1/088/lib/libimf.a /opt/intel/Compiler/11.1/088/lib/libsvml.a /opt/intel/Compiler/11.1/088/lib/libipgo.a -lSystemStubs -lmx /opt/intel/Compiler/11.1/088/lib/libirc.a -lpthread -ldl
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for python-config... python-config
checking for Python CPPFLAGS... -I/System/Library/Frameworks/Python.framework/Versions/2.6/include/python2.6 -I/System/Library/Frameworks/Python.framework/Versions/2.6/include/python2.6
checking for bzr... no
checking for Python NumPy headers... not found
checking numarray/arrayobject.h usability... no
checking numarray/arrayobject.h presence... no
checking for numarray/arrayobject.h... no

 ==============================================================================
 === Libraries and linking                                                  ===
 ==============================================================================

checking for ar... ar
checking for ranlib... ranlib

 ==============================================================================
 === Hints                                                                  ===
 ==============================================================================

checking for cpp... cpp
checking which cpp hints to apply... default/default/default
checking which cc hints to apply... gnu/default/default
checking which xpp hints to apply... none/none/none
checking which cxx hints to apply... gnu/default/default
checking which fpp hints to apply... none/none/none
checking which fc hints to apply... intel/default/default
checking which ar hints to apply... none/none/none

 ==============================================================================
 === Debugging                                                              ===
 ==============================================================================

checking debugging status... enabled (custom flags are allowed)
configure: setting C debug flags to '-g'
configure: setting C++ debug flags to '-g'
configure: setting Fortran debug flags to '-g'
checking whether to activate debug mode in source files... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... gnu/default/default
checking which cxx optimizations to apply... gnu/default/default
checking which fc optimizations to apply... intel/default/default
checking whether to apply per-directory optimizations... yes

 ==============================================================================
 === 64-bit support                                                         ===
 ==============================================================================

checking for a 64-bit architecture... 
checking whether to use 64-bit flags... no
checking for user-defined 64-bit flags... none

 ==============================================================================
 === Connectors                                                             ===
 ==============================================================================

checking whether the C compiler supports MPI... no
checking whether the C++ compiler supports MPI... no
checking whether the Fortran Compiler supports MPI... no
checking whether MPI is usable... no
checking whether to build MPI code... no
checking whether to use the CUDA Library... no
checking whether to use the FFTW library... no
checking whether to use the GNU Scientific Library... no
configure: applying linear algebra tricks (type: external)
checking whether to build the LINALG library... no
checking whether to activate ScaLAPACK support... no
checking whether to use the PAPI library... no

 ==============================================================================
 === Plug-ins                                                               ===
 ==============================================================================

configure: using tarball repository /Users/liam/.abinit/tarballs
checking whether to enable the FOX plug-in... no
checking whether to build the FOX plug-in... no
checking whether to enable the NETCDF plug-in... no
checking whether to build the NETCDF plug-in... no
checking whether to enable the ETSF_IO plug-in... no
checking whether to build the ETSF_IO plug-in... no
checking whether to enable the ETSF_IO_TEST plug-in... no
checking whether to build the ETSF_IO_TEST plug-in... no
checking whether to enable the LIBXC plug-in... no
checking whether to build the LIBXC plug-in... no
checking whether to enable the BIGDFT plug-in... no
checking whether to build the BIGDFT plug-in... no
checking whether to enable the WANNIER90 plug-in... no
checking whether to build the WANNIER90 plug-in... no

 ==============================================================================
 === Nightly builds                                                         ===
 ==============================================================================

checking whether to build Nightly code... no

 ==============================================================================
 === Experimental developments                                              ===
 ==============================================================================

checking whether to enable bindings... no
checking whether to use C clock for timings... no
checking whether to enable error handlers... no
checking whether to build exports... no
checking whether to enable GW double-precision calculations... no
checking whether to test abirules... 
checking whether to use macroave... yes
checking whether to read input from stdin... yes

 ==============================================================================
 === Output                                                                 ===
 ==============================================================================

configure: creating ./config.status
config.status: creating config.mk
config.status: creating config.dump
config.status: creating config.pc
config.status: creating config.py
config.status: creating config.sh
config.status: creating config/wrappers/wrap-fc
config.status: creating src/incs/Makefile
config.status: creating src/mods/Makefile
config.status: creating src/16_hideleave/m_build_info.F90
config.status: creating src/98_main/abinis
config.status: creating src/98_main/abinip
config.status: creating tests/tests.env
config.status: creating tests/tests-install.env
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/01_gsl_ext/Makefile
config.status: creating src/01_interfaces_ext/Makefile
config.status: creating src/01_macroavnew_ext/Makefile
config.status: creating src/10_defs/Makefile
config.status: creating src/12_hide_mpi/Makefile
config.status: creating src/14_hidewrite/Makefile
config.status: creating src/16_hideleave/Makefile
config.status: creating src/18_timing/Makefile
config.status: creating src/27_toolbox_oop/Makefile
config.status: creating src/28_numeric_noabirule/Makefile
config.status: creating src/32_contract/Makefile
config.status: creating src/32_util/Makefile
config.status: creating src/42_geometry/Makefile
config.status: creating src/42_nlstrain/Makefile
config.status: creating src/42_parser/Makefile
config.status: creating src/45_psp_parser/Makefile
config.status: creating src/47_xml/Makefile
config.status: creating src/49_gw_toolbox_oop/Makefile
config.status: creating src/50_abitypes_defs/Makefile
config.status: creating src/51_manage_cuda/Makefile
config.status: creating src/51_manage_mpi/Makefile
config.status: creating src/52_fft_mpi_noabirule/Makefile
config.status: creating src/53_abiutil/Makefile
config.status: creating src/53_ffts/Makefile
config.status: creating src/53_spacepar/Makefile
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
config.status: creating src/68_gw/Makefile
config.status: creating src/68_recursion/Makefile
config.status: creating src/68_rsprc/Makefile
config.status: creating src/69_bse/Makefile
config.status: creating src/72_geomoptim/Makefile
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
config.status: creating prereqs/Makefile
config.status: creating prereqs/linalg/Makefile
config.status: creating plugins/Makefile
config.status: creating plugins/bigdft/Makefile
config.status: creating plugins/etsf_io/Makefile
config.status: creating plugins/etsf_io_test/Makefile
config.status: creating plugins/fox/Makefile
config.status: creating plugins/libxc/Makefile
config.status: creating plugins/netcdf/Makefile
config.status: creating plugins/wannier90/Makefile
config.status: creating bindings/Makefile
config.status: creating bindings/parser/Makefile
config.status: creating doc/Makefile
config.status: creating tests/Makefile
config.status: creating config.h
config.status: config.h is unchanged
config.status: executing depfiles commands
config.status: executing script-perms commands

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


Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")

