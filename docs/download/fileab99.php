
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
checking for a BSD-compatible install... /usr/bin/install -c
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for a thread-safe mkdir -p... /bin/mkdir -p
configure: not loading options (no config file available)
configure: enabling all plug-ins

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 6.2.3
configure: M4 010413 - Autoconf 026300 - Automake 011100 - Libtool 020204
configure: reporting user interface changes:
configure:  * new option --enable-bse-unpacked is available
configure:  * new option --enable-dft is available
configure:  * --enable-etsf-io-test removed
configure:  * new option --enable-fast-check is available
configure:  * --enable-fftw renamed --enable-fft
configure:  * --enable-fftw-threads removed
configure:  * --enable-cuda renamed --enable-gpu
configure:  * new option --enable-gw-cutoff is available
configure:  * new option --enable-gw-optimal is available
configure:  * new option --enable-gw-wrapper is available
configure:  * new option --enable-linalg is available
configure:  * new option --enable-maintainer-checks is available
configure:  * --enable-gsl renamed --enable-math
configure:  * new option --enable-smp is available
configure:  * --enable-nightly renamed --enable-test-timeout
configure:  * --enable-papi renamed --enable-timer
configure:  * new option --enable-trio is available
configure:  * new option --enable-vdwxc is available
configure:  * --with-64bit-flags removed
configure:  * --with-ar-dbgflags removed
configure:  * --with-ar-optflags removed
configure:  * --with-cc-dbgflags removed
configure:  * --with-cc-ld-dbgflags removed
configure:  * --with-cc-ld-dbglibs removed
configure:  * --with-cc-ld-optflags removed
configure:  * --with-cc-ld-optlibs removed
configure:  * --with-cc-optflags removed
configure:  * --with-cpp-dbgflags removed
configure:  * --with-cpp-optflags removed
configure:  * --with-cxx-dbgflags removed
configure:  * --with-cxx-ld-dbgflags removed
configure:  * --with-cxx-ld-dbglibs removed
configure:  * --with-cxx-ld-optflags removed
configure:  * --with-cxx-ld-optlibs removed
configure:  * --with-cxx-optflags removed
configure:  * new option --with-dft-flavor is available
configure:  * new option --with-dft-includes is available
configure:  * new option --with-dft-libs is available
configure:  * --with-etsf-io-test-includes removed
configure:  * --with-etsf-io-test-libs removed
configure:  * --with-fc-dbgflags removed
configure:  * --with-fc-ld-dbgflags removed
configure:  * --with-fc-ld-dbglibs removed
configure:  * --with-fc-ld-optflags removed
configure:  * --with-fc-ld-optlibs removed
configure:  * --with-fc-optflags removed
configure:  * new option --with-fft-flavor is available
configure:  * --with-fftw-includes renamed --with-fft-includes
configure:  * --with-fftw-libs renamed --with-fft-libs
configure:  * new option --with-gpu-cflags is available
configure:  * new option --with-gpu-cppflags is available
configure:  * new option --with-gpu-flavor is available
configure:  * --with-cuda-includes renamed --with-gpu-includes
configure:  * new option --with-gpu-ldflags is available
configure:  * --with-cuda-libs renamed --with-gpu-libs
configure:  * new option --with-gpu-prefix is available
configure:  * --with-linalg-type renamed --with-linalg-flavor
configure:  * new option --with-math-flavor is available
configure:  * --with-gsl-includes renamed --with-math-includes
configure:  * --with-gsl-libs renamed --with-math-libs
configure:  * --with-mpi-runner removed
configure:  * --with-scalapack-includes removed
configure:  * --with-scalapack-libs removed
configure:  * --with-timeout renamed --with-test-timeout
configure:  * new option --with-timer-flavor is available
configure:  * --with-papi-includes renamed --with-timer-includes
configure:  * --with-papi-libs renamed --with-timer-libs
configure:  * new option --with-trio-flavor is available
configure:  * new option --with-trio-includes is available
configure:  * new option --with-trio-libs is available

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of external prerequisite options
configure:  |---> all OK
configure: 
configure: checking consistency of plug-in options
configure:  |---> all OK
configure: 
configure: checking consistency of experimental options
configure:  |---> all OK
configure: 
configure: parsing command-line options

 ==============================================================================
 === Connector startup                                                      ===
 ==============================================================================

configure: Initializing MPI support
configure: looking for MPI in /share/apps/mpich2/
checking for a MPI C compiler... /share/apps/mpich2//bin/mpicc
checking for a MPI C++ compiler... /share/apps/mpich2//bin/mpicxx
checking for a MPI Fortran compiler... /share/apps/mpich2//bin/mpif90
checking for a MPI runner... /share/apps/mpich2//bin/mpirun
configure: GPU support disabled from command-line

 ==============================================================================
 === Utilities                                                              ===
 ==============================================================================

checking for sh... /bin/sh
checking for mv... /bin/mv
checking for perl... /usr/bin/perl
checking for rm... /bin/rm
checking for dvips... dvips
checking for dvipdf... dvipdf
checking for latex... latex
checking for markdown... no
checking for md5sum... md5sum
checking for patch... patch
checking for ps2pdf... ps2pdf
checking for tar... tar
checking for wget... wget
configure: using internal version of MarkDown

 ==============================================================================
 === C support                                                              ===
 ==============================================================================

checking for gcc... /share/apps/mpich2//bin/mpicc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /share/apps/mpich2//bin/mpicc accepts -g... yes
checking for /share/apps/mpich2//bin/mpicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of /share/apps/mpich2//bin/mpicc... gcc3
checking how to run the C preprocessor... /share/apps/mpich2//bin/mpicc -E
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
checking whether /share/apps/mpich2//bin/mpicxx accepts -g... yes
checking dependency style of /share/apps/mpich2//bin/mpicxx... gcc3
checking which type of C++ compiler we have... gnu 4.1

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking whether we are using the GNU Fortran compiler... yes
checking whether /share/apps/mpich2//bin/mpif90 accepts -g... yes
checking which type of Fortran compiler we have... gnu 4.1
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from /share/apps/mpich2//bin/mpif90... -v
checking for Fortran libraries of /share/apps/mpich2//bin/mpif90...  -L/share/apps/mpich2/lib -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 -L/lib/../lib64 -L/usr/lib/../lib64 -lmpichf90 -lmpich -lopa -lpthread -lrt -lgfortranbegin -lgfortran -lm
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for python-config... no
checking for python2.6-config... no
checking for python2.5-config... no
checking for python2.4-config... no
checking for Python CPPFLAGS... 
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
checking for a true C preprocessor... cpp
checking which cpp hints to apply... default/default/default
checking which cc hints to apply... gnu/default/default
checking which xpp hints to apply... none/none/none
checking which cxx hints to apply... gnu/default/default
checking which fpp hints to apply... default/default/default
checking which fc hints to apply... gnu/4.1/default
checking which ar hints to apply... none/none/none
checking which Fortran preprocessor to use... 
checking which Fortran preprocessor flags to apply... 
checking whether to wrap Fortran compiler calls... no

 ==============================================================================
 === Debugging                                                              ===
 ==============================================================================

checking debugging status... enabled (using compiler defaults)
configure: setting C debug flags to '-g'
configure: setting C++ debug flags to '-g'
configure: setting Fortran debug flags to '-g'
checking whether to activate debug mode in source files... no
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... gnu/default/default
checking which cxx optimizations to apply... gnu/default/default
checking which fc optimizations to apply... gnu/default/default
checking whether to apply per-directory optimizations... yes

 ==============================================================================
 === 64-bit support                                                         ===
 ==============================================================================

checking for a 64-bit architecture... yes
checking whether to use 64-bit flags... yes
checking for user-defined 64-bit flags... 
checking for 64-bit C preprocessor flags... none
checking for 64-bit C flags... -m64
checking for 64-bit C++ flags... -m64
checking for 64-bit Fortran flags... -m64
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
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking math.h usability... yes
checking math.h presence... yes
checking for math.h... yes
checking termios.h usability... yes
checking termios.h presence... yes
checking for termios.h... yes
checking errno.h usability... yes
checking errno.h presence... yes
checking for errno.h... yes
checking mcheck.h usability... yes
checking mcheck.h presence... yes
checking for mcheck.h... yes
checking for abort... yes
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
checking whether the Fortran compiler provides the iso_c_binding module... no
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... no
checking whether the Fortran compiler accepts getenv()... yes
checking whether the Fortran compiler accepts getpid()... no
checking whether the Fortran compiler accepts the null() intrinsic... yes
checking whether the Fortran compiler accepts quadruple integers... yes
checking whether the Fortran compiler accepts long lines... no
checking whether the Fortran compiler accepts etime()... no
checking whether to use C clock for timings... no

 ==============================================================================
 === Connectors                                                             ===
 ==============================================================================

checking whether the C compiler supports MPI... yes
checking whether the C++ compiler supports MPI... yes
checking whether the Fortran Compiler supports MPI... yes
checking whether MPI is usable... yes
checking whether to build MPI code... yes
checking whether to build MPI I/O code... no
checking whether to build MPI I/O untested features... no
checking whether to build MPI time tracing code... no
checking which level of MPI is supported by the Fortran compiler... 2
checking whether to activate GPU support... no
checking whether to use transferable I/O libraries... no
checking whether to use optimized timer libraries... no
checking whether to use optimized linear algebra libraries... yes
checking whether to activate ScaLAPACK support... no
checking for the requested linear algebra support... netlib
checking for zgemm in -lblas... no
checking for zhpev in -llapack... no
checking for the actual linear algebra support... none
checking whether to use optimized math libraries... no
checking whether to use optimized FFT libraries... no
checking whether to use DFT libraries... no

 ==============================================================================
 === Plug-ins                                                               ===
 ==============================================================================

configure: using tarball repository /home/kaswat/.abinit/tarballs
checking whether to enable the FOX plug-in... no
checking whether to build the FOX plug-in... no
checking for a source tarball of NETCDF... no
configure: downloading NETCDF - this may take a while
checking availability of NETCDF from URL 1... no
checking availability of NETCDF from URL 2... no
checking whether to enable the NETCDF plug-in... no
checking whether to build the NETCDF plug-in... no
checking for a source tarball of ETSF_IO... no
configure: downloading ETSF_IO - this may take a while
checking availability of ETSF_IO from URL 1... no
checking whether to enable the ETSF_IO plug-in... no
checking whether to build the ETSF_IO plug-in... no
checking for a source tarball of LIBXC... no
configure: downloading LIBXC - this may take a while
checking availability of LIBXC from URL 1... no
checking whether to enable the LIBXC plug-in... no
checking whether to build the LIBXC plug-in... no
checking for a source tarball of BIGDFT... no
configure: downloading BIGDFT - this may take a while
checking availability of BIGDFT from URL 1... no
checking availability of BIGDFT from URL 2... no
checking whether to enable the BIGDFT plug-in... no
checking whether to build the BIGDFT plug-in... no
checking for a source tarball of WANNIER90... no
configure: downloading WANNIER90 - this may take a while
checking availability of WANNIER90 from URL 1... no
checking availability of WANNIER90 from URL 2... no
checking whether to enable the WANNIER90 plug-in... no
checking whether to build the WANNIER90 plug-in... no

 ==============================================================================
 === Nightly builds                                                         ===
 ==============================================================================

checking whether to build test timeout code... no
checking timeout for automatic tests... none

 ==============================================================================
 === Experimental developments                                              ===
 ==============================================================================

checking whether to enable bindings... no
checking whether to enable BSE unpacking... no
checking whether to enable CLib... no
checking whether to build exports... no
checking whether to accelerate 'make check'... no
checking whether to enable GW cut-off... no
checking whether to enable GW double-precision calculations... no
checking whether to enable optimal GW... no
checking whether to enable GW wrapper... no
checking whether to activate maintainer checks... no
checking whether to use macroave... yes
checking whether to read input from stdin... yes
checking whether to activate Symmetric Multi-Processing... no

 ==============================================================================
 === Output                                                                 ===
 ==============================================================================

configure: creating ./config.status
config.status: creating config.dump
config.status: creating config.mk
config.status: creating config.pc
config.status: creating config.sh
config.status: creating config/wrappers/wrap-fc
config.status: creating src/incs/Makefile
config.status: creating src/mods/Makefile
config.status: creating src/16_hideleave/m_build_info.F90
config.status: creating tests/tests.env
config.status: creating tests/tests-install.env
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/01_gsl_ext/Makefile
config.status: creating src/01_interfaces_ext/Makefile
config.status: creating src/01_macroavnew_ext/Makefile
config.status: creating src/01_qespresso_ext/Makefile
config.status: creating src/02_clib/Makefile
config.status: creating src/10_defs/Makefile
config.status: creating src/12_hide_mpi/Makefile
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
config.status: creating src/43_ptgroups/Makefile
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
config.status: executing dump-optim commands
config.status: executing script-perms commands
config.status: executing long-lines commands

Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")


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
checking for a BSD-compatible install... /usr/bin/install -c
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for a thread-safe mkdir -p... /bin/mkdir -p
configure: not loading options (no config file available)
configure: enabling all plug-ins

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 6.2.3
configure: M4 010413 - Autoconf 026300 - Automake 011100 - Libtool 020204
configure: reporting user interface changes:
configure:  * new option --enable-bse-unpacked is available
configure:  * new option --enable-dft is available
configure:  * --enable-etsf-io-test removed
configure:  * new option --enable-fast-check is available
configure:  * --enable-fftw renamed --enable-fft
configure:  * --enable-fftw-threads removed
configure:  * --enable-cuda renamed --enable-gpu
configure:  * new option --enable-gw-cutoff is available
configure:  * new option --enable-gw-optimal is available
configure:  * new option --enable-gw-wrapper is available
configure:  * new option --enable-linalg is available
configure:  * new option --enable-maintainer-checks is available
configure:  * --enable-gsl renamed --enable-math
configure:  * new option --enable-smp is available
configure:  * --enable-nightly renamed --enable-test-timeout
configure:  * --enable-papi renamed --enable-timer
configure:  * new option --enable-trio is available
configure:  * new option --enable-vdwxc is available
configure:  * --with-64bit-flags removed
configure:  * --with-ar-dbgflags removed
configure:  * --with-ar-optflags removed
configure:  * --with-cc-dbgflags removed
configure:  * --with-cc-ld-dbgflags removed
configure:  * --with-cc-ld-dbglibs removed
configure:  * --with-cc-ld-optflags removed
configure:  * --with-cc-ld-optlibs removed
configure:  * --with-cc-optflags removed
configure:  * --with-cpp-dbgflags removed
configure:  * --with-cpp-optflags removed
configure:  * --with-cxx-dbgflags removed
configure:  * --with-cxx-ld-dbgflags removed
configure:  * --with-cxx-ld-dbglibs removed
configure:  * --with-cxx-ld-optflags removed
configure:  * --with-cxx-ld-optlibs removed
configure:  * --with-cxx-optflags removed
configure:  * new option --with-dft-flavor is available
configure:  * new option --with-dft-includes is available
configure:  * new option --with-dft-libs is available
configure:  * --with-etsf-io-test-includes removed
configure:  * --with-etsf-io-test-libs removed
configure:  * --with-fc-dbgflags removed
configure:  * --with-fc-ld-dbgflags removed
configure:  * --with-fc-ld-dbglibs removed
configure:  * --with-fc-ld-optflags removed
configure:  * --with-fc-ld-optlibs removed
configure:  * --with-fc-optflags removed
configure:  * new option --with-fft-flavor is available
configure:  * --with-fftw-includes renamed --with-fft-includes
configure:  * --with-fftw-libs renamed --with-fft-libs
configure:  * new option --with-gpu-cflags is available
configure:  * new option --with-gpu-cppflags is available
configure:  * new option --with-gpu-flavor is available
configure:  * --with-cuda-includes renamed --with-gpu-includes
configure:  * new option --with-gpu-ldflags is available
configure:  * --with-cuda-libs renamed --with-gpu-libs
configure:  * new option --with-gpu-prefix is available
configure:  * --with-linalg-type renamed --with-linalg-flavor
configure:  * new option --with-math-flavor is available
configure:  * --with-gsl-includes renamed --with-math-includes
configure:  * --with-gsl-libs renamed --with-math-libs
configure:  * --with-mpi-runner removed
configure:  * --with-scalapack-includes removed
configure:  * --with-scalapack-libs removed
configure:  * --with-timeout renamed --with-test-timeout
configure:  * new option --with-timer-flavor is available
configure:  * --with-papi-includes renamed --with-timer-includes
configure:  * --with-papi-libs renamed --with-timer-libs
configure:  * new option --with-trio-flavor is available
configure:  * new option --with-trio-includes is available
configure:  * new option --with-trio-libs is available

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of external prerequisite options
configure:  |---> all OK
configure: 
configure: checking consistency of plug-in options
configure:  |---> all OK
configure: 
configure: checking consistency of experimental options
configure:  |---> all OK
configure: 
configure: parsing command-line options

 ==============================================================================
 === Connector startup                                                      ===
 ==============================================================================

configure: Initializing MPI support
configure: looking for MPI in /share/apps/mpich2/
checking for a MPI C compiler... /share/apps/mpich2//bin/mpicc
checking for a MPI C++ compiler... /share/apps/mpich2//bin/mpicxx
checking for a MPI Fortran compiler... /share/apps/mpich2//bin/mpif90
checking for a MPI runner... /share/apps/mpich2//bin/mpirun
configure: GPU support disabled from command-line

 ==============================================================================
 === Utilities                                                              ===
 ==============================================================================

checking for sh... /bin/sh
checking for mv... /bin/mv
checking for perl... /usr/bin/perl
checking for rm... /bin/rm
checking for dvips... dvips
checking for dvipdf... dvipdf
checking for latex... latex
checking for markdown... no
checking for md5sum... md5sum
checking for patch... patch
checking for ps2pdf... ps2pdf
checking for tar... tar
checking for wget... wget
configure: using internal version of MarkDown

 ==============================================================================
 === C support                                                              ===
 ==============================================================================

checking for gcc... /share/apps/mpich2//bin/mpicc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /share/apps/mpich2//bin/mpicc accepts -g... yes
checking for /share/apps/mpich2//bin/mpicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of /share/apps/mpich2//bin/mpicc... gcc3
checking how to run the C preprocessor... /share/apps/mpich2//bin/mpicc -E
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
checking whether /share/apps/mpich2//bin/mpicxx accepts -g... yes
checking dependency style of /share/apps/mpich2//bin/mpicxx... gcc3
checking which type of C++ compiler we have... gnu 4.1

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking whether we are using the GNU Fortran compiler... yes
checking whether /share/apps/mpich2//bin/mpif90 accepts -g... yes
checking which type of Fortran compiler we have... gnu 4.1
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from /share/apps/mpich2//bin/mpif90... -v
checking for Fortran libraries of /share/apps/mpich2//bin/mpif90...  -L/share/apps/mpich2/lib -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 -L/lib/../lib64 -L/usr/lib/../lib64 -lmpichf90 -lmpich -lopa -lpthread -lrt -lgfortranbegin -lgfortran -lm
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for python-config... no
checking for python2.6-config... no
checking for python2.5-config... no
checking for python2.4-config... no
checking for Python CPPFLAGS... 
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
checking for a true C preprocessor... cpp
checking which cpp hints to apply... default/default/default
checking which cc hints to apply... gnu/default/default
checking which xpp hints to apply... none/none/none
checking which cxx hints to apply... gnu/default/default
checking which fpp hints to apply... default/default/default
checking which fc hints to apply... gnu/4.1/default
checking which ar hints to apply... none/none/none
checking which Fortran preprocessor to use... 
checking which Fortran preprocessor flags to apply... 
checking whether to wrap Fortran compiler calls... no

 ==============================================================================
 === Debugging                                                              ===
 ==============================================================================

checking debugging status... enabled (using compiler defaults)
configure: setting C debug flags to '-g'
configure: setting C++ debug flags to '-g'
configure: setting Fortran debug flags to '-g'
checking whether to activate debug mode in source files... no
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... gnu/default/default
checking which cxx optimizations to apply... gnu/default/default
checking which fc optimizations to apply... gnu/default/default
checking whether to apply per-directory optimizations... yes

 ==============================================================================
 === 64-bit support                                                         ===
 ==============================================================================

checking for a 64-bit architecture... yes
checking whether to use 64-bit flags... yes
checking for user-defined 64-bit flags... 
checking for 64-bit C preprocessor flags... none
checking for 64-bit C flags... -m64
checking for 64-bit C++ flags... -m64
checking for 64-bit Fortran flags... -m64
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
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking math.h usability... yes
checking math.h presence... yes
checking for math.h... yes
checking termios.h usability... yes
checking termios.h presence... yes
checking for termios.h... yes
checking errno.h usability... yes
checking errno.h presence... yes
checking for errno.h... yes
checking mcheck.h usability... yes
checking mcheck.h presence... yes
checking for mcheck.h... yes
checking for abort... yes
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
checking whether the Fortran compiler provides the iso_c_binding module... no
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... no
checking whether the Fortran compiler accepts getenv()... yes
checking whether the Fortran compiler accepts getpid()... no
checking whether the Fortran compiler accepts the null() intrinsic... yes
checking whether the Fortran compiler accepts quadruple integers... yes
checking whether the Fortran compiler accepts long lines... no
checking whether the Fortran compiler accepts etime()... no
checking whether to use C clock for timings... no

 ==============================================================================
 === Connectors                                                             ===
 ==============================================================================

checking whether the C compiler supports MPI... yes
checking whether the C++ compiler supports MPI... yes
checking whether the Fortran Compiler supports MPI... yes
checking whether MPI is usable... yes
checking whether to build MPI code... yes
checking whether to build MPI I/O code... no
checking whether to build MPI I/O untested features... no
checking whether to build MPI time tracing code... no
checking which level of MPI is supported by the Fortran compiler... 2
checking whether to activate GPU support... no
checking whether to use transferable I/O libraries... no
checking whether to use optimized timer libraries... no
checking whether to use optimized linear algebra libraries... yes
checking whether to activate ScaLAPACK support... no
checking for the requested linear algebra support... netlib
checking for zgemm in -lblas... no
checking for zhpev in -llapack... no
checking for the actual linear algebra support... none
checking whether to use optimized math libraries... no
checking whether to use optimized FFT libraries... no
checking whether to use DFT libraries... yes
checking for the requested DFT support... bigdft+libxc+wannier90
checking xc.h usability... no
checking xc.h presence... no
checking for xc.h... no
checking xc_funcs.h usability... no
checking xc_funcs.h presence... no
checking for xc_funcs.h... no
checking for xc_func_init in -llibxc... no
checking whether we have a working Wannier90 library... no
checking for the actual DFT support... libxc+bigdft+wannier90

 ==============================================================================
 === Plug-ins                                                               ===
 ==============================================================================

configure: using tarball repository /root/.abinit/tarballs
checking whether to enable the FOX plug-in... no
checking whether to build the FOX plug-in... no
checking for a source tarball of NETCDF... yes
configure: tarball MD5 check succeeded
configure: applying NetCDF tricks (vendor: gnu, version: 4.1)
checking whether to enable the NETCDF plug-in... yes
checking whether to build the NETCDF plug-in... yes
checking for a source tarball of ETSF_IO... no
configure: downloading ETSF_IO - this may take a while
checking availability of ETSF_IO from URL 1... no
checking whether to enable the ETSF_IO plug-in... no
checking whether to build the ETSF_IO plug-in... no
checking for a source tarball of LIBXC... yes
configure: tarball MD5 check succeeded
configure: applying LIBXC tricks
checking whether to enable the LIBXC plug-in... yes
checking whether to build the LIBXC plug-in... yes
checking for a source tarball of BIGDFT... yes
configure: tarball MD5 check succeeded
configure: applying BigDFT tricks (vendor: gnu, version: 4.1)
checking whether to enable the BIGDFT plug-in... yes
checking whether to build the BIGDFT plug-in... yes
checking for a source tarball of WANNIER90... no
configure: downloading WANNIER90 - this may take a while
checking availability of WANNIER90 from URL 1... no
checking availability of WANNIER90 from URL 2... no
checking whether to enable the WANNIER90 plug-in... no
checking whether to build the WANNIER90 plug-in... no

 ==============================================================================
 === Nightly builds                                                         ===
 ==============================================================================

checking whether to build test timeout code... no
checking timeout for automatic tests... none

 ==============================================================================
 === Experimental developments                                              ===
 ==============================================================================

checking whether to enable bindings... no
checking whether to enable BSE unpacking... no
checking whether to enable CLib... no
checking whether to build exports... no
checking whether to accelerate 'make check'... no
checking whether to enable GW cut-off... no
checking whether to enable GW double-precision calculations... no
checking whether to enable optimal GW... no
checking whether to enable GW wrapper... no
checking whether to activate maintainer checks... no
checking whether to use macroave... yes
checking whether to read input from stdin... yes
checking whether to activate Symmetric Multi-Processing... no

 ==============================================================================
 === Output                                                                 ===
 ==============================================================================

configure: creating ./config.status
config.status: creating config.dump
config.status: creating config.mk
config.status: creating config.pc
config.status: creating config.sh
config.status: creating config/wrappers/wrap-fc
config.status: creating src/incs/Makefile
config.status: creating src/mods/Makefile
config.status: creating src/16_hideleave/m_build_info.F90
config.status: creating tests/tests.env
config.status: creating tests/tests-install.env
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/01_gsl_ext/Makefile
config.status: creating src/01_interfaces_ext/Makefile
config.status: creating src/01_macroavnew_ext/Makefile
config.status: creating src/01_qespresso_ext/Makefile
config.status: creating src/02_clib/Makefile
config.status: creating src/10_defs/Makefile
config.status: creating src/12_hide_mpi/Makefile
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
config.status: creating src/43_ptgroups/Makefile
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
config.status: executing dump-optim commands
config.status: executing script-perms commands
config.status: executing long-lines commands

Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")


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
checking for a BSD-compatible install... /usr/bin/install -c
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for a thread-safe mkdir -p... /bin/mkdir -p
configure: not loading options (no config file available)
configure: enabling all plug-ins

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 6.2.3
configure: M4 010413 - Autoconf 026300 - Automake 011100 - Libtool 020204
configure: reporting user interface changes:
configure:  * new option --enable-bse-unpacked is available
configure:  * new option --enable-dft is available
configure:  * --enable-etsf-io-test removed
configure:  * new option --enable-fast-check is available
configure:  * --enable-fftw renamed --enable-fft
configure:  * --enable-fftw-threads removed
configure:  * --enable-cuda renamed --enable-gpu
configure:  * new option --enable-gw-cutoff is available
configure:  * new option --enable-gw-optimal is available
configure:  * new option --enable-gw-wrapper is available
configure:  * new option --enable-linalg is available
configure:  * new option --enable-maintainer-checks is available
configure:  * --enable-gsl renamed --enable-math
configure:  * new option --enable-smp is available
configure:  * --enable-nightly renamed --enable-test-timeout
configure:  * --enable-papi renamed --enable-timer
configure:  * new option --enable-trio is available
configure:  * new option --enable-vdwxc is available
configure:  * --with-64bit-flags removed
configure:  * --with-ar-dbgflags removed
configure:  * --with-ar-optflags removed
configure:  * --with-cc-dbgflags removed
configure:  * --with-cc-ld-dbgflags removed
configure:  * --with-cc-ld-dbglibs removed
configure:  * --with-cc-ld-optflags removed
configure:  * --with-cc-ld-optlibs removed
configure:  * --with-cc-optflags removed
configure:  * --with-cpp-dbgflags removed
configure:  * --with-cpp-optflags removed
configure:  * --with-cxx-dbgflags removed
configure:  * --with-cxx-ld-dbgflags removed
configure:  * --with-cxx-ld-dbglibs removed
configure:  * --with-cxx-ld-optflags removed
configure:  * --with-cxx-ld-optlibs removed
configure:  * --with-cxx-optflags removed
configure:  * new option --with-dft-flavor is available
configure:  * new option --with-dft-includes is available
configure:  * new option --with-dft-libs is available
configure:  * --with-etsf-io-test-includes removed
configure:  * --with-etsf-io-test-libs removed
configure:  * --with-fc-dbgflags removed
configure:  * --with-fc-ld-dbgflags removed
configure:  * --with-fc-ld-dbglibs removed
configure:  * --with-fc-ld-optflags removed
configure:  * --with-fc-ld-optlibs removed
configure:  * --with-fc-optflags removed
configure:  * new option --with-fft-flavor is available
configure:  * --with-fftw-includes renamed --with-fft-includes
configure:  * --with-fftw-libs renamed --with-fft-libs
configure:  * new option --with-gpu-cflags is available
configure:  * new option --with-gpu-cppflags is available
configure:  * new option --with-gpu-flavor is available
configure:  * --with-cuda-includes renamed --with-gpu-includes
configure:  * new option --with-gpu-ldflags is available
configure:  * --with-cuda-libs renamed --with-gpu-libs
configure:  * new option --with-gpu-prefix is available
configure:  * --with-linalg-type renamed --with-linalg-flavor
configure:  * new option --with-math-flavor is available
configure:  * --with-gsl-includes renamed --with-math-includes
configure:  * --with-gsl-libs renamed --with-math-libs
configure:  * --with-mpi-runner removed
configure:  * --with-scalapack-includes removed
configure:  * --with-scalapack-libs removed
configure:  * --with-timeout renamed --with-test-timeout
configure:  * new option --with-timer-flavor is available
configure:  * --with-papi-includes renamed --with-timer-includes
configure:  * --with-papi-libs renamed --with-timer-libs
configure:  * new option --with-trio-flavor is available
configure:  * new option --with-trio-includes is available
configure:  * new option --with-trio-libs is available

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of external prerequisite options
configure:  |---> all OK
configure: 
configure: checking consistency of plug-in options
configure:  |---> all OK
configure: 
configure: checking consistency of experimental options
configure:  |---> all OK
configure: 
configure: parsing command-line options

 ==============================================================================
 === Connector startup                                                      ===
 ==============================================================================

configure: Initializing MPI support
configure: looking for MPI in /share/apps/mpich2/
checking for a MPI C compiler... /share/apps/mpich2//bin/mpicc
checking for a MPI C++ compiler... /share/apps/mpich2//bin/mpicxx
checking for a MPI Fortran compiler... /share/apps/mpich2//bin/mpif90
checking for a MPI runner... /share/apps/mpich2//bin/mpirun
configure: GPU support disabled from command-line

 ==============================================================================
 === Utilities                                                              ===
 ==============================================================================

checking for sh... /bin/sh
checking for mv... /bin/mv
checking for perl... /usr/bin/perl
checking for rm... /bin/rm
checking for dvips... dvips
checking for dvipdf... dvipdf
checking for latex... latex
checking for markdown... no
checking for md5sum... md5sum
checking for patch... patch
checking for ps2pdf... ps2pdf
checking for tar... tar
checking for wget... wget
configure: using internal version of MarkDown

 ==============================================================================
 === C support                                                              ===
 ==============================================================================

checking for gcc... /share/apps/mpich2//bin/mpicc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /share/apps/mpich2//bin/mpicc accepts -g... yes
checking for /share/apps/mpich2//bin/mpicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of /share/apps/mpich2//bin/mpicc... gcc3
checking how to run the C preprocessor... /share/apps/mpich2//bin/mpicc -E
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
checking whether /share/apps/mpich2//bin/mpicxx accepts -g... yes
checking dependency style of /share/apps/mpich2//bin/mpicxx... gcc3
checking which type of C++ compiler we have... gnu 4.1

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking whether we are using the GNU Fortran compiler... yes
checking whether /share/apps/mpich2//bin/mpif90 accepts -g... yes
checking which type of Fortran compiler we have... gnu 4.1
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from /share/apps/mpich2//bin/mpif90... -v
checking for Fortran libraries of /share/apps/mpich2//bin/mpif90...  -L/share/apps/mpich2/lib -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 -L/lib/../lib64 -L/usr/lib/../lib64 -lmpichf90 -lmpich -lopa -lpthread -lrt -lgfortranbegin -lgfortran -lm
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for python-config... no
checking for python2.6-config... no
checking for python2.5-config... no
checking for python2.4-config... no
checking for Python CPPFLAGS... 
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
checking for a true C preprocessor... cpp
checking which cpp hints to apply... default/default/default
checking which cc hints to apply... gnu/default/default
checking which xpp hints to apply... none/none/none
checking which cxx hints to apply... gnu/default/default
checking which fpp hints to apply... default/default/default
checking which fc hints to apply... gnu/4.1/default
checking which ar hints to apply... none/none/none
checking which Fortran preprocessor to use... 
checking which Fortran preprocessor flags to apply... 
checking whether to wrap Fortran compiler calls... no

 ==============================================================================
 === Debugging                                                              ===
 ==============================================================================

checking debugging status... enabled (using compiler defaults)
configure: setting C debug flags to '-g'
configure: setting C++ debug flags to '-g'
configure: setting Fortran debug flags to '-g'
checking whether to activate debug mode in source files... no
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... gnu/default/default
checking which cxx optimizations to apply... gnu/default/default
checking which fc optimizations to apply... gnu/default/default
checking whether to apply per-directory optimizations... yes

 ==============================================================================
 === 64-bit support                                                         ===
 ==============================================================================

checking for a 64-bit architecture... yes
checking whether to use 64-bit flags... yes
checking for user-defined 64-bit flags... 
checking for 64-bit C preprocessor flags... none
checking for 64-bit C flags... -m64
checking for 64-bit C++ flags... -m64
checking for 64-bit Fortran flags... -m64
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
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking math.h usability... yes
checking math.h presence... yes
checking for math.h... yes
checking termios.h usability... yes
checking termios.h presence... yes
checking for termios.h... yes
checking errno.h usability... yes
checking errno.h presence... yes
checking for errno.h... yes
checking mcheck.h usability... yes
checking mcheck.h presence... yes
checking for mcheck.h... yes
checking for abort... yes
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
checking whether the Fortran compiler provides the iso_c_binding module... no
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... no
checking whether the Fortran compiler accepts getenv()... yes
checking whether the Fortran compiler accepts getpid()... no
checking whether the Fortran compiler accepts the null() intrinsic... yes
checking whether the Fortran compiler accepts quadruple integers... yes
checking whether the Fortran compiler accepts long lines... no
checking whether the Fortran compiler accepts etime()... no
checking whether to use C clock for timings... no

 ==============================================================================
 === Connectors                                                             ===
 ==============================================================================

checking whether the C compiler supports MPI... yes
checking whether the C++ compiler supports MPI... yes
checking whether the Fortran Compiler supports MPI... yes
checking whether MPI is usable... yes
checking whether to build MPI code... yes
checking whether to build MPI I/O code... no
checking whether to build MPI I/O untested features... no
checking whether to build MPI time tracing code... no
checking which level of MPI is supported by the Fortran compiler... 2
checking whether to activate GPU support... no
checking whether to use transferable I/O libraries... no
checking whether to use optimized timer libraries... no
checking whether to use optimized linear algebra libraries... yes
checking whether to activate ScaLAPACK support... no
checking for the requested linear algebra support... netlib
checking for zgemm in -lblas... no
checking for zhpev in -llapack... no
checking for the actual linear algebra support... none
checking whether to use optimized math libraries... no
checking whether to use optimized FFT libraries... no
checking whether to use DFT libraries... yes
checking for the requested DFT support... bigdft+libxc+wannier90
checking xc.h usability... no
checking xc.h presence... no
checking for xc.h... no
checking xc_funcs.h usability... no
checking xc_funcs.h presence... no
checking for xc_funcs.h... no
checking for xc_func_init in -llibxc... no
checking whether we have a working Wannier90 library... no
checking for the actual DFT support... libxc+bigdft+wannier90

 ==============================================================================
 === Plug-ins                                                               ===
 ==============================================================================

configure: using tarball repository /root/.abinit/tarballs
checking whether to enable the FOX plug-in... no
checking whether to build the FOX plug-in... no
checking for a source tarball of NETCDF... yes
configure: tarball MD5 check succeeded
configure: applying NetCDF tricks (vendor: gnu, version: 4.1)
checking whether to enable the NETCDF plug-in... yes
checking whether to build the NETCDF plug-in... yes
checking for a source tarball of ETSF_IO... no
configure: downloading ETSF_IO - this may take a while
checking availability of ETSF_IO from URL 1... yes
configure: tarball MD5 check succeeded
configure: applying ETSF_IO tricks (vendor: gnu, version: 4.1)
checking whether to enable the ETSF_IO plug-in... yes
checking whether to build the ETSF_IO plug-in... yes
checking for a source tarball of LIBXC... yes
configure: tarball MD5 check succeeded
configure: applying LIBXC tricks
checking whether to enable the LIBXC plug-in... yes
checking whether to build the LIBXC plug-in... yes
checking for a source tarball of BIGDFT... yes
configure: tarball MD5 check succeeded
configure: applying BigDFT tricks (vendor: gnu, version: 4.1)
checking whether to enable the BIGDFT plug-in... yes
checking whether to build the BIGDFT plug-in... yes
checking for a source tarball of WANNIER90... no
configure: downloading WANNIER90 - this may take a while
checking availability of WANNIER90 from URL 1... yes
configure: tarball MD5 check succeeded
configure: applying Wannier90 tricks (vendor: gnu, version: 4.1)
checking whether to enable the WANNIER90 plug-in... yes
checking whether to build the WANNIER90 plug-in... yes

 ==============================================================================
 === Nightly builds                                                         ===
 ==============================================================================

checking whether to build test timeout code... no
checking timeout for automatic tests... none

 ==============================================================================
 === Experimental developments                                              ===
 ==============================================================================

checking whether to enable bindings... no
checking whether to enable BSE unpacking... no
checking whether to enable CLib... no
checking whether to build exports... no
checking whether to accelerate 'make check'... no
checking whether to enable GW cut-off... no
checking whether to enable GW double-precision calculations... no
checking whether to enable optimal GW... no
checking whether to enable GW wrapper... no
checking whether to activate maintainer checks... no
checking whether to use macroave... yes
checking whether to read input from stdin... yes
checking whether to activate Symmetric Multi-Processing... no

 ==============================================================================
 === Output                                                                 ===
 ==============================================================================

configure: creating ./config.status
config.status: creating config.dump
config.status: creating config.mk
config.status: creating config.pc
config.status: creating config.sh
config.status: creating config/wrappers/wrap-fc
config.status: creating src/incs/Makefile
config.status: creating src/mods/Makefile
config.status: creating src/16_hideleave/m_build_info.F90
config.status: creating tests/tests.env
config.status: creating tests/tests-install.env
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/01_gsl_ext/Makefile
config.status: creating src/01_interfaces_ext/Makefile
config.status: creating src/01_macroavnew_ext/Makefile
config.status: creating src/01_qespresso_ext/Makefile
config.status: creating src/02_clib/Makefile
config.status: creating src/10_defs/Makefile
config.status: creating src/12_hide_mpi/Makefile
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
config.status: creating src/43_ptgroups/Makefile
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
config.status: creating plugins/fox/Makefile
config.status: creating plugins/libxc/Makefile
config.status: creating plugins/netcdf/Makefile
config.status: creating plugins/wannier90/Makefile
config.status: creating bindings/Makefile
config.status: creating bindings/parser/Makefile
config.status: creating doc/Makefile
config.status: creating tests/Makefile
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing dump-optim commands
config.status: executing script-perms commands
config.status: executing long-lines commands

Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")


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
checking for a BSD-compatible install... /usr/bin/install -c
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for a thread-safe mkdir -p... /bin/mkdir -p
configure: not loading options (no config file available)
configure: enabling all plug-ins

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 6.2.3
configure: M4 010413 - Autoconf 026300 - Automake 011100 - Libtool 020204
configure: reporting user interface changes:
configure:  * new option --enable-bse-unpacked is available
configure:  * new option --enable-dft is available
configure:  * --enable-etsf-io-test removed
configure:  * new option --enable-fast-check is available
configure:  * --enable-fftw renamed --enable-fft
configure:  * --enable-fftw-threads removed
configure:  * --enable-cuda renamed --enable-gpu
configure:  * new option --enable-gw-cutoff is available
configure:  * new option --enable-gw-optimal is available
configure:  * new option --enable-gw-wrapper is available
configure:  * new option --enable-linalg is available
configure:  * new option --enable-maintainer-checks is available
configure:  * --enable-gsl renamed --enable-math
configure:  * new option --enable-smp is available
configure:  * --enable-nightly renamed --enable-test-timeout
configure:  * --enable-papi renamed --enable-timer
configure:  * new option --enable-trio is available
configure:  * new option --enable-vdwxc is available
configure:  * --with-64bit-flags removed
configure:  * --with-ar-dbgflags removed
configure:  * --with-ar-optflags removed
configure:  * --with-cc-dbgflags removed
configure:  * --with-cc-ld-dbgflags removed
configure:  * --with-cc-ld-dbglibs removed
configure:  * --with-cc-ld-optflags removed
configure:  * --with-cc-ld-optlibs removed
configure:  * --with-cc-optflags removed
configure:  * --with-cpp-dbgflags removed
configure:  * --with-cpp-optflags removed
configure:  * --with-cxx-dbgflags removed
configure:  * --with-cxx-ld-dbgflags removed
configure:  * --with-cxx-ld-dbglibs removed
configure:  * --with-cxx-ld-optflags removed
configure:  * --with-cxx-ld-optlibs removed
configure:  * --with-cxx-optflags removed
configure:  * new option --with-dft-flavor is available
configure:  * new option --with-dft-includes is available
configure:  * new option --with-dft-libs is available
configure:  * --with-etsf-io-test-includes removed
configure:  * --with-etsf-io-test-libs removed
configure:  * --with-fc-dbgflags removed
configure:  * --with-fc-ld-dbgflags removed
configure:  * --with-fc-ld-dbglibs removed
configure:  * --with-fc-ld-optflags removed
configure:  * --with-fc-ld-optlibs removed
configure:  * --with-fc-optflags removed
configure:  * new option --with-fft-flavor is available
configure:  * --with-fftw-includes renamed --with-fft-includes
configure:  * --with-fftw-libs renamed --with-fft-libs
configure:  * new option --with-gpu-cflags is available
configure:  * new option --with-gpu-cppflags is available
configure:  * new option --with-gpu-flavor is available
configure:  * --with-cuda-includes renamed --with-gpu-includes
configure:  * new option --with-gpu-ldflags is available
configure:  * --with-cuda-libs renamed --with-gpu-libs
configure:  * new option --with-gpu-prefix is available
configure:  * --with-linalg-type renamed --with-linalg-flavor
configure:  * new option --with-math-flavor is available
configure:  * --with-gsl-includes renamed --with-math-includes
configure:  * --with-gsl-libs renamed --with-math-libs
configure:  * --with-mpi-runner removed
configure:  * --with-scalapack-includes removed
configure:  * --with-scalapack-libs removed
configure:  * --with-timeout renamed --with-test-timeout
configure:  * new option --with-timer-flavor is available
configure:  * --with-papi-includes renamed --with-timer-includes
configure:  * --with-papi-libs renamed --with-timer-libs
configure:  * new option --with-trio-flavor is available
configure:  * new option --with-trio-includes is available
configure:  * new option --with-trio-libs is available

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of external prerequisite options
configure:  |---> all OK
configure: 
configure: checking consistency of plug-in options
configure:  |---> all OK
configure: 
configure: checking consistency of experimental options
configure:  |---> all OK
configure: 
configure: parsing command-line options

 ==============================================================================
 === Connector startup                                                      ===
 ==============================================================================

configure: Initializing MPI support
configure: looking for MPI in /share/apps/mpich2/
checking for a MPI C compiler... /share/apps/mpich2//bin/mpicc
checking for a MPI C++ compiler... /share/apps/mpich2//bin/mpicxx
checking for a MPI Fortran compiler... /share/apps/mpich2//bin/mpif90
checking for a MPI runner... /share/apps/mpich2//bin/mpirun
configure: GPU support disabled from command-line

 ==============================================================================
 === Utilities                                                              ===
 ==============================================================================

checking for sh... /bin/sh
checking for mv... /bin/mv
checking for perl... /usr/bin/perl
checking for rm... /bin/rm
checking for dvips... dvips
checking for dvipdf... dvipdf
checking for latex... latex
checking for markdown... no
checking for md5sum... md5sum
checking for patch... patch
checking for ps2pdf... ps2pdf
checking for tar... tar
checking for wget... wget
configure: using internal version of MarkDown

 ==============================================================================
 === C support                                                              ===
 ==============================================================================

checking for gcc... /share/apps/mpich2//bin/mpicc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /share/apps/mpich2//bin/mpicc accepts -g... yes
checking for /share/apps/mpich2//bin/mpicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of /share/apps/mpich2//bin/mpicc... gcc3
checking how to run the C preprocessor... /share/apps/mpich2//bin/mpicc -E
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
checking whether /share/apps/mpich2//bin/mpicxx accepts -g... yes
checking dependency style of /share/apps/mpich2//bin/mpicxx... gcc3
checking which type of C++ compiler we have... gnu 4.1

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking whether we are using the GNU Fortran compiler... yes
checking whether /share/apps/mpich2//bin/mpif90 accepts -g... yes
checking which type of Fortran compiler we have... gnu 4.1
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from /share/apps/mpich2//bin/mpif90... -v
checking for Fortran libraries of /share/apps/mpich2//bin/mpif90...  -L/share/apps/mpich2/lib -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 -L/lib/../lib64 -L/usr/lib/../lib64 -lmpichf90 -lmpich -lopa -lpthread -lrt -lgfortranbegin -lgfortran -lm
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for python-config... no
checking for python2.6-config... no
checking for python2.5-config... no
checking for python2.4-config... no
checking for Python CPPFLAGS... 
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
checking for a true C preprocessor... cpp
checking which cpp hints to apply... default/default/default
checking which cc hints to apply... gnu/default/default
checking which xpp hints to apply... none/none/none
checking which cxx hints to apply... gnu/default/default
checking which fpp hints to apply... default/default/default
checking which fc hints to apply... gnu/4.1/default
checking which ar hints to apply... none/none/none
checking which Fortran preprocessor to use... 
checking which Fortran preprocessor flags to apply... 
checking whether to wrap Fortran compiler calls... no

 ==============================================================================
 === Debugging                                                              ===
 ==============================================================================

checking debugging status... enabled (using compiler defaults)
configure: setting C debug flags to '-g'
configure: setting C++ debug flags to '-g'
configure: setting Fortran debug flags to '-g'
checking whether to activate debug mode in source files... no
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... gnu/default/default
checking which cxx optimizations to apply... gnu/default/default
checking which fc optimizations to apply... gnu/default/default
checking whether to apply per-directory optimizations... yes

 ==============================================================================
 === 64-bit support                                                         ===
 ==============================================================================

checking for a 64-bit architecture... yes
checking whether to use 64-bit flags... yes
checking for user-defined 64-bit flags... 
checking for 64-bit C preprocessor flags... none
checking for 64-bit C flags... -m64
checking for 64-bit C++ flags... -m64
checking for 64-bit Fortran flags... -m64
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
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking math.h usability... yes
checking math.h presence... yes
checking for math.h... yes
checking termios.h usability... yes
checking termios.h presence... yes
checking for termios.h... yes
checking errno.h usability... yes
checking errno.h presence... yes
checking for errno.h... yes
checking mcheck.h usability... yes
checking mcheck.h presence... yes
checking for mcheck.h... yes
checking for abort... yes
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
checking whether the Fortran compiler provides the iso_c_binding module... no
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... no
checking whether the Fortran compiler accepts getenv()... yes
checking whether the Fortran compiler accepts getpid()... no
checking whether the Fortran compiler accepts the null() intrinsic... yes
checking whether the Fortran compiler accepts quadruple integers... yes
checking whether the Fortran compiler accepts long lines... no
checking whether the Fortran compiler accepts etime()... no
checking whether to use C clock for timings... no

 ==============================================================================
 === Connectors                                                             ===
 ==============================================================================

checking whether the C compiler supports MPI... yes
checking whether the C++ compiler supports MPI... yes
checking whether the Fortran Compiler supports MPI... yes
checking whether MPI is usable... yes
checking whether to build MPI code... yes
checking whether to build MPI I/O code... no
checking whether to build MPI I/O untested features... no
checking whether to build MPI time tracing code... no
checking which level of MPI is supported by the Fortran compiler... 2
checking whether to activate GPU support... no
checking whether to use transferable I/O libraries... no
checking whether to use optimized timer libraries... no
checking whether to use optimized linear algebra libraries... yes
checking whether to activate ScaLAPACK support... no
checking for the requested linear algebra support... netlib
checking for zgemm in -lblas... no
checking for zhpev in -llapack... no
checking for the actual linear algebra support... none
checking whether to use optimized math libraries... no
checking whether to use optimized FFT libraries... no
checking whether to use DFT libraries... yes
checking for the requested DFT support... bigdft+libxc+wannier90
checking xc.h usability... no
checking xc.h presence... no
checking for xc.h... no
checking xc_funcs.h usability... no
checking xc_funcs.h presence... no
checking for xc_funcs.h... no
checking for xc_func_init in -llibxc... no
checking whether we have a working Wannier90 library... no
checking for the actual DFT support... libxc+bigdft+wannier90

 ==============================================================================
 === Plug-ins                                                               ===
 ==============================================================================

configure: using tarball repository /root/.abinit/tarballs
checking whether to enable the FOX plug-in... no
checking whether to build the FOX plug-in... no
checking for a source tarball of NETCDF... yes
configure: tarball MD5 check succeeded
configure: applying NetCDF tricks (vendor: gnu, version: 4.1)
checking whether to enable the NETCDF plug-in... yes
checking whether to build the NETCDF plug-in... yes
checking for a source tarball of ETSF_IO... no
configure: downloading ETSF_IO - this may take a while
checking availability of ETSF_IO from URL 1... no
checking whether to enable the ETSF_IO plug-in... no
checking whether to build the ETSF_IO plug-in... no
checking for a source tarball of LIBXC... yes
configure: tarball MD5 check succeeded
configure: applying LIBXC tricks
checking whether to enable the LIBXC plug-in... yes
checking whether to build the LIBXC plug-in... yes
checking for a source tarball of BIGDFT... yes
configure: tarball MD5 check succeeded
configure: applying BigDFT tricks (vendor: gnu, version: 4.1)
checking whether to enable the BIGDFT plug-in... yes
checking whether to build the BIGDFT plug-in... yes
checking for a source tarball of WANNIER90... yes
configure: tarball MD5 check succeeded
configure: applying Wannier90 tricks (vendor: gnu, version: 4.1)
checking whether to enable the WANNIER90 plug-in... yes
checking whether to build the WANNIER90 plug-in... yes

 ==============================================================================
 === Nightly builds                                                         ===
 ==============================================================================

checking whether to build test timeout code... no
checking timeout for automatic tests... none

 ==============================================================================
 === Experimental developments                                              ===
 ==============================================================================

checking whether to enable bindings... no
checking whether to enable BSE unpacking... no
checking whether to enable CLib... no
checking whether to build exports... no
checking whether to accelerate 'make check'... no
checking whether to enable GW cut-off... no
checking whether to enable GW double-precision calculations... no
checking whether to enable optimal GW... no
checking whether to enable GW wrapper... no
checking whether to activate maintainer checks... no
checking whether to use macroave... yes
checking whether to read input from stdin... yes
checking whether to activate Symmetric Multi-Processing... no

 ==============================================================================
 === Output                                                                 ===
 ==============================================================================

configure: creating ./config.status
config.status: creating config.dump
config.status: creating config.mk
config.status: creating config.pc
config.status: creating config.sh
config.status: creating config/wrappers/wrap-fc
config.status: creating src/incs/Makefile
config.status: creating src/mods/Makefile
config.status: creating src/16_hideleave/m_build_info.F90
config.status: creating tests/tests.env
config.status: creating tests/tests-install.env
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/01_gsl_ext/Makefile
config.status: creating src/01_interfaces_ext/Makefile
config.status: creating src/01_macroavnew_ext/Makefile
config.status: creating src/01_qespresso_ext/Makefile
config.status: creating src/02_clib/Makefile
config.status: creating src/10_defs/Makefile
config.status: creating src/12_hide_mpi/Makefile
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
config.status: creating src/43_ptgroups/Makefile
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
config.status: creating plugins/fox/Makefile
config.status: creating plugins/libxc/Makefile
config.status: creating plugins/netcdf/Makefile
config.status: creating plugins/wannier90/Makefile
config.status: creating bindings/Makefile
config.status: creating bindings/parser/Makefile
config.status: creating doc/Makefile
config.status: creating tests/Makefile
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing dump-optim commands
config.status: executing script-perms commands
config.status: executing long-lines commands

Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")

