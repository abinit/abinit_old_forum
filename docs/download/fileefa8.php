results of ./config

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
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) mawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
configure: not loading options (no config file available)

 ==============================================================================
 === Build-system information                                               ===
 ==============================================================================

configure: ABINIT version 6.8.1
configure: M4 010416 - Autoconf 026800 - Automake 011100 - Libtool 020204
configure: reporting user interface changes:

 ==============================================================================
 === Option consistency checking                                            ===
 ==============================================================================

configure: checking consistency of library-related options
configure:  |---> all OK
configure: 
configure: checking consistency of plug-in options
configure:  |---> all OK
configure: 
configure: checking consistency of experimental options
configure:  |---> all OK
configure: 
configure:  |---> all OK
configure: 
configure: parsing command-line options

 ==============================================================================
 === Connector startup                                                      ===
 ==============================================================================

configure: MPI support disabled from command-line
configure: GPU support disabled from command-line

 ==============================================================================
 === Utilities                                                              ===
 ==============================================================================

checking for sh... /bin/sh
checking for mv... /bin/mv
checking for perl... /usr/bin/perl
checking for rm... /bin/rm
checking for dvips... no
checking for dvipdf... dvipdf
checking for latex... no
checking for markdown... no
checking for patch... patch
checking for ps2pdf... ps2pdf
checking for tar... tar
checking for wget... wget
checking for curl... no
configure: using internal version of MarkDown

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
checking which type of compiler we have... gnu 4.4
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

checking for g++... no
checking for c++... no
checking for gpp... no
checking for aCC... no
checking for CC... no
checking for cxx... no
checking for cc++... no
checking for cl.exe... no
checking for FCC... no
checking for KCC... no
checking for RCC... no
checking for xlC_r... no
checking for xlC... no
checking whether we are using the GNU C++ compiler... no
checking whether g++ accepts -g... no
checking dependency style of g++... none
checking which type of C++ compiler we have... generic 0.0

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking for gfortran... gfortran
checking whether we are using the GNU Fortran compiler... yes
checking whether gfortran accepts -g... yes
checking which type of Fortran compiler we have... gnu 4.4
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from gfortran... -v
checking for Fortran libraries of gfortran...  -L/usr/lib/gcc/x86_64-linux-gnu/4.4.5 -L/usr/lib/gcc/x86_64-linux-gnu/4.4.5/../../../../lib -L/lib/../lib -L/usr/lib/../lib -L/usr/lib/gcc/x86_64-linux-gnu/4.4.5/../../.. -L/usr/lib/x86_64-linux-gnu -lgfortranbegin -lgfortran -lm
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for Python CPPFLAGS... -I/usr/include/python2.6
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
checking which cxx hints to apply... none/none/none
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
configure: setting Fortran debug flags to '-g'
checking whether to activate debug mode in source files... no
checking which cc debug flags to apply... gnu/default/default
checking which cxx debug flags to apply... none/none/none
checking which fc debug flags to apply... gnu/default/default
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (profile mode: standard)
checking which cc optimizations to apply... gnu/default/default
checking which cxx optimizations to apply... none/none/none
checking which fc optimizations to apply... gnu/default/default
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
checking whether the Fortran compiler supports allocatable arrays in datatypes... yes
checking whether the Fortran compiler provides the iso_c_binding module... yes
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... yes
checking whether the Fortran compiler accepts flush_()... no
checking whether the Fortran compiler accepts gamma()... yes
checking whether the Fortran compiler accepts getenv()... yes
checking whether the Fortran compiler accepts getpid()... no
checking whether the Fortran compiler accepts the null() intrinsic... yes
checking whether the Fortran compiler accepts quadruple integers... yes
checking whether the Fortran compiler accepts long lines... yes
checking whether the Fortran compiler supports stream IO... yes
checking whether the Fortran compiler accepts etime()... no
checking whether to use C clock for timings... no

 ==============================================================================
 === Connectors / Fallbacks                                                 ===
 ==============================================================================

checking whether MPI is usable... no
checking whether to build MPI code... no
checking whether the MPI library supports MPI_CREATE_TYPE_STRUCT... no
checking whether to activate GPU support... no
checking for the requested transferable I/O support... netcdf+etsf_io
checking netcdf.h usability... no
checking netcdf.h presence... no
checking for netcdf.h... no
checking for library containing nc_open... no
checking for Fortran module includes... unknown
configure: WARNING: falling back to internal netcdf version
configure: WARNING: ETSF_IO requires missing NetCDF support
configure: WARNING: falling back to internal etsf_io version
checking for the actual transferable I/O support... netcdf-fallback+etsf_io-fallback
checking for the requested timer support... abinit
checking for the actual timer support... abinit
checking for the requested linear algebra support... netlib
checking for library containing zgemm... no
checking for library containing zhpev... no
checking whether we have a serial linear algebra support... no
configure: WARNING: falling back to internal linear algebra libraries
checking whether we have a parallel linear algebra support... no
checking for the actual linear algebra support... netlib-fallback
checking for the requested math support... none
checking for the actual math support... none
checking for the requested FFT support... none
checking for the actual FFT support... none
checking for the requested DFT support... atompaw+bigdft+libxc+wannier90
checking xc.h usability... no
checking xc.h presence... no
checking for xc.h... no
checking xc_funcs.h usability... no
checking xc_funcs.h presence... no
checking for xc_funcs.h... no
checking for library containing xc_func_init... no
checking for Fortran module includes... unknown
configure: WARNING: falling back to internal libxc version
configure: WARNING: AtomPAW recommends missing LibXC support
configure: WARNING: BigDFT requires missing linear algebra support
configure: WARNING: falling back to internal atompaw version
configure: WARNING: BigDFT requires missing LibXC support
configure: WARNING: BigDFT requires missing linear algebra support
configure: WARNING: falling back to internal bigdft version
configure: WARNING: wannier90 requires missing linear algebra support
configure: WARNING: falling back to internal wannier90 version
checking for the actual DFT support... libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
configure: using former plugins as a temporary workaround
configure: fallbacks to enable => atompaw bigdft etsf_io libxc linalg netcdf wannier90
checking whether to build atompaw... yes
checking whether to build bigdft... yes
checking whether to build etsf_io... yes
checking whether to build fox... no
checking whether to build libxc... yes
checking whether to build linalg... yes
checking whether to build netcdf... yes
checking whether to build wannier90... yes
configure: using tarball repository /home/tim/.abinit/tarballs
checking for a source tarball of LINALG... yes
checking for md5sum... md5sum
configure: tarball MD5 check succeeded
configure: applying LINALG tricks (vendor: gnu, version: 4.4)
checking whether to enable the LINALG fallback... yes
checking whether to build the LINALG fallback... yes
checking whether to enable the FOX fallback... no
checking whether to build the FOX fallback... no
checking for a source tarball of NETCDF... yes
configure: tarball MD5 check succeeded
configure: applying NetCDF tricks (vendor: gnu, version: 4.4)
checking whether to enable the NETCDF fallback... yes
checking whether to build the NETCDF fallback... yes
checking for a source tarball of ETSF_IO... yes
configure: tarball MD5 check succeeded
configure: applying ETSF_IO tricks (vendor: gnu, version: 4.4)
checking whether to enable the ETSF_IO fallback... yes
checking whether to build the ETSF_IO fallback... yes
checking for a source tarball of LIBXC... yes
configure: tarball MD5 check succeeded
configure: applying LIBXC tricks
checking whether to enable the LIBXC fallback... yes
checking whether to build the LIBXC fallback... yes
checking for a source tarball of ATOMPAW... yes
configure: tarball MD5 check succeeded
configure: applying AtomPAW tricks (vendor: gnu, version: 4.4)
checking whether to enable the ATOMPAW fallback... yes
checking whether to build the ATOMPAW fallback... yes
checking for a source tarball of BIGDFT... yes
configure: tarball MD5 check succeeded
configure: applying BigDFT tricks (vendor: gnu, version: 4.4)
checking whether to enable the BIGDFT fallback... yes
checking whether to build the BIGDFT fallback... yes
checking for a source tarball of WANNIER90... yes
configure: tarball MD5 check succeeded
configure: applying Wannier90 tricks (vendor: gnu, version: 4.4)
checking whether to enable the WANNIER90 fallback... yes
checking whether to build the WANNIER90 fallback... yes

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
checking whether to reduce 'make check' for packaging... no
checking whether to read input from stdin... yes
checking whether to activate Symmetric Multi-Processing... no
checking whether to activate ZDOTC and ZDOTU workaround... no

 ==============================================================================
 === Subsystems                                                             ===
 ==============================================================================

configure: the Abinit GUI will never be built

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
config.status: creating src/18_memory_mpi/Makefile
config.status: creating src/18_timing/Makefile
config.status: creating src/27_toolbox_oop/Makefile
config.status: creating src/28_numeric_noabirule/Makefile
config.status: creating src/32_contract/Makefile
config.status: creating src/32_util/Makefile
config.status: creating src/42_geometry/Makefile
config.status: creating src/42_nlstrain/Makefile
config.status: creating src/42_parser/Makefile
config.status: creating src/43_ptgroups/Makefile
config.status: creating src/44_geomoptim/Makefile
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
config.status: creating plugins/Makefile
config.status: creating plugins/atompaw/Makefile
config.status: creating plugins/bigdft/Makefile
config.status: creating plugins/etsf_io/Makefile
config.status: creating plugins/fox/Makefile
config.status: creating plugins/libxc/Makefile
config.status: creating plugins/linalg/Makefile
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

 ==============================================================================
 === Final remarks                                                          ===
 ==============================================================================


Summary of important options:

  * C compiler      : gnu version 4.4
  * Fortran compiler: gnu version 4.4
  * architecture    : intel xeon (64 bits)

  * debugging       : basic
  * optimizations   : standard

  * MPI    enabled  : no
  * MPI-IO enabled  : no
  * GPU    enabled  : no (none)

  * TRIO   flavor = netcdf-fallback+etsf_io-fallback
  * TIMER  flavor = abinit (libs: ignored)
  * LINALG flavor = netlib-fallback (libs: internal)
  * FFT    flavor = none (libs: ignored)
  * MATH   flavor = none (libs: ignored)
  * DFT    flavor = libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback

Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")

tim@aristarchus:/usr/local/abinit-6.8.1$ 

