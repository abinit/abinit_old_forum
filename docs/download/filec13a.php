
 ==============================================================================
 === Overall startup                                                        ===
 ==============================================================================

checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether make supports nested variables... yes
checking whether UID '1711' is supported by ustar format... yes
checking whether GID '1599' is supported by ustar format... yes
checking how to create a ustar tar archive... gnutar
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

configure: ABINIT version 8.10.1
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
checking for perl... /bin/perl
checking for rm... /bin/rm
checking for patch... patch
checking for tar... tar

 ==============================================================================
 === C support                                                              ===
 ==============================================================================

checking for mpiicc... /apps/all/impi/2017.1.132-iccifort-2017.1.132-GCC-6.3.0-2.27/bin64/mpiicc
checking for gcc... mpiicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether mpiicc accepts -g... yes
checking for mpiicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of mpiicc... gcc3
checking how to run the C preprocessor... mpiicc -E
checking which type of compiler we have... intel 17.0
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

checking for mpiicpc... /apps/all/impi/2017.1.132-iccifort-2017.1.132-GCC-6.3.0-2.27/bin64/mpiicpc
checking whether we are using the GNU C++ compiler... yes
checking whether mpiicpc accepts -g... yes
checking dependency style of mpiicpc... gcc3
checking which type of C++ compiler we have... gnu 17.0

 ==============================================================================
 === Fortran support                                                        ===
 ==============================================================================

checking for mpiifort... /apps/all/impi/2017.1.132-iccifort-2017.1.132-GCC-6.3.0-2.27/bin64/mpiifort
checking whether we are using the GNU Fortran compiler... no
checking whether mpiifort accepts -g... yes
checking which type of Fortran compiler we have... intel 0.0
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking how to get verbose linking output from mpiifort... -v
checking for Fortran libraries of mpiifort...  -L/apps/all/impi/2017.1.132-iccifort-2017.1.132-GCC-6.3.0-2.27/intel64/lib/release_mt -L/apps/all/impi/2017.1.132-iccifort-2017.1.132-GCC-6.3.0-2.27/intel64/lib -L/apps/all/netCDF/4.4.1-intel-2017a/lib64 -L/apps/all/Szip/2.1-intel-2017a/lib -L/apps/all/cURL/7.49.1-intel-2017a/lib -L/apps/all/HDF5/1.8.17-intel-2017a/lib -L/apps/all/zlib/1.2.11/lib -L/apps/all/imkl/2017.1.132-iimpi-2017a/mkl/lib/intel64 -L/apps/all/imkl/2017.1.132-iimpi-2017a/lib/intel64 -L/apps/all/impi/2017.1.132-iccifort-2017.1.132-GCC-6.3.0-2.27/lib64 -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/compilers_and_libraries_2017.1.132/linux/compiler/lib/intel64 -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/lib/intel64 -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/debugger_2017/libipt/intel64/lib -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/lib -L/apps/all/icc/2017.1.132-GCC-6.3.0-2.27/compilers_and_libraries_2017.1.132/linux/compiler/lib/intel64 -L/apps/all/icc/2017.1.132-GCC-6.3.0-2.27/lib/intel64 -L/apps/all/icc/2017.1.132-GCC-6.3.0-2.27/debugger_2017/libipt/intel64/lib -L/apps/all/icc/2017.1.132-GCC-6.3.0-2.27/lib -L/apps/all/binutils/2.27-GCCcore-6.3.0/lib -L/apps/all/GCCcore/6.3.0/lib64 -L/apps/all/GCCcore/6.3.0/lib -L/apps/all/libxc/3.0.0/lib -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/compilers_and_libraries_2017.1.132/linux/compiler/lib/intel64_lin -L/apps/all/imkl/2017.1.132-iimpi-2017a/mkl/lib/intel64_lin -L/apps/all/netCDF/4.4.1-intel-2017a/lib64/../lib64 -L/apps/all/netCDF/4.4.1-intel-2017a/lib64/../lib64/ -L/apps/all/GCCcore/6.3.0/lib64/../lib64 -L/apps/all/GCCcore/6.3.0/lib64/../lib64/ -L/apps/all/GCCcore/6.3.0/lib/../lib64 -L/apps/all/GCCcore/6.3.0/lib/../lib64/ -L/apps/all/GCCcore/6.3.0/lib/gcc/x86_64-pc-linux-gnu/6.3.0/ -L/apps/all/GCCcore/6.3.0/lib/gcc/x86_64-pc-linux-gnu/6.3.0/../../../../lib64 -L/apps/all/GCCcore/6.3.0/lib/gcc/x86_64-pc-linux-gnu/6.3.0/../../../../lib64/ -L/lib/../lib64 -L/lib/../lib64/ -L/usr/lib/../lib64 -L/usr/lib/../lib64/ -L/apps/all/netCDF/4.4.1-intel-2017a/lib64/ -L/apps/all/Szip/2.1-intel-2017a/lib/ -L/apps/all/cURL/7.49.1-intel-2017a/lib/ -L/apps/all/HDF5/1.8.17-intel-2017a/lib/ -L/apps/all/zlib/1.2.11/lib/ -L/apps/all/imkl/2017.1.132-iimpi-2017a/mkl/lib/intel64/ -L/apps/all/imkl/2017.1.132-iimpi-2017a/lib/intel64/ -L/apps/all/impi/2017.1.132-iccifort-2017.1.132-GCC-6.3.0-2.27/lib64/ -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/compilers_and_libraries_2017.1.132/linux/compiler/lib/intel64/ -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/lib/intel64/ -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/debugger_2017/libipt/intel64/lib/ -L/apps/all/ifort/2017.1.132-GCC-6.3.0-2.27/lib/ -L/apps/all/icc/2017.1.132-GCC-6.3.0-2.27/compilers_and_libraries_2017.1.132/linux/compiler/lib/intel64/ -L/apps/all/icc/2017.1.132-GCC-6.3.0-2.27/lib/intel64/ -L/apps/all/icc/2017.1.132-GCC-6.3.0-2.27/debugger_2017/libipt/intel64/lib/ -L/apps/all/icc/2017.1.132-GCC-6.3.0-2.27/lib/ -L/apps/all/binutils/2.27-GCCcore-6.3.0/lib/ -L/apps/all/GCCcore/6.3.0/lib64/ -L/apps/all/GCCcore/6.3.0/lib/ -L/apps/all/libxc/3.0.0/lib/ -L/apps/all/GCCcore/6.3.0/lib/gcc/x86_64-pc-linux-gnu/6.3.0/../../../ -L/lib64 -L/lib/ -L/usr/lib64 -L/usr/lib -lmkl_intel_lp64 -lmkl_intel_thread -lmkl_core -liomp5 -lmpifort -lmpi -lmpigi -ldl -lrt -lpthread -lifport -lifcoremt -limf -lsvml -lm -lipgo -lirc -lirc_s
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore

 ==============================================================================
 === Python support                                                         ===
 ==============================================================================

checking for python... python
checking for Python CPPFLAGS... -I/usr/include/python2.7
checking for bzr... no
checking Python.h usability... no
checking Python.h presence... no
checking for Python.h... no

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
checking whether to activate debug mode in source files... no
checking whether to activate debug verbosity in source files... no
configure: debugging profile overriden by user-defined CFLAGS
configure: debugging profile overriden by user-defined CXXFLAGS
configure: debugging profile overriden by user-defined FCFLAGS
checking whether to activate design-by-contract debugging... no

 ==============================================================================
 === Optimizations                                                          ===
 ==============================================================================

checking optimization status... enabled (using user-specified flags)
checking whether to apply per-directory optimizations... no
configure: fcflags_opt_43_ptgroups overriden by FCFLAGS

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
checking whether the Gfortran compiler supports BACKTRACE... no
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
checking whether to use C clock for timings... no

 ==============================================================================
 === Multicore architecture support                                         ===
 ==============================================================================

checking whether to enable OpenMP support... no
checking whether to build MPI code... yes
checking whether the C compiler supports MPI... yes
checking whether the C++ compiler supports MPI... yes
checking whether the Fortran Compiler supports MPI... yes
checking whether MPI is usable... yes
checking whether to build MPI I/O code... yes
checking which level of MPI is supported by the Fortran compiler... 2
configure: forcing MPI-2 standard support
checking whether the MPI library supports MPI_INTEGER16... yes
checking whether the MPI library supports MPI_CREATE_TYPE_STRUCT... yes
checking whether the MPI library supports MPI_IALLTOALL (MPI3)... yes
checking whether the MPI library supports MPI_IALLTOALLV (MPI3)... yes
checking whether the MPI library supports MPI_IALLREDUCE (MPI3)... yes
checking whether to activate GPU support... no

 ==============================================================================
 === Feature triggers                                                       ===
 ==============================================================================

configure: using tarball repository /home/acamm/.abinit/tarballs
checking for the requested linear algebra support... mkl+scalapack
checking whether to select a fallback for linear algebra... no
checking for BLAS support in specified libraries... yes
checking for AXPBY support in specified BLAS libraries... yes
checking for gemm3m in specified libraries... yes
checking for mkl_imatcopy in specified libraries... yes
checking for mkl_omatcopy in specified libraries... yes
checking for mkl_omatadd in specified libraries... yes
checking for mkl_set/get_threads in specified libraries... yes
checking for LAPACK support in specified libraries... yes
checking for LAPACKE C API support in specified libraries... no
checking for BLACS support in specified libraries... yes
checking for ScaLAPACK support in specified libraries... yes
checking for ELPA support in specified libraries... no
checking for PLASMA support in specified libraries... no
checking for MAGMA (version>=1.1.0) support in specified libraries... no
checking whether we have a serial linear algebra support... yes
checking whether we have a MPI linear algebra support... yes
checking whether we have a GPU linear algebra support... no
checking for the actual linear algebra support... mkl+scalapack
checking for the requested FFT support... fftw3-mkl
checking for the actual FFT support... fftw3-mkl

 ==============================================================================
 === Connectors / Fallbacks                                                 ===
 ==============================================================================

checking for the requested transferable I/O support... netcdf-fallback
checking whether to select a fallback for netcdf... yes
checking for the actual transferable I/O support... netcdf-fallback
checking for the requested timer support... abinit
checking time.h usability... yes
checking time.h presence... yes
checking for time.h... yes
checking for clock_gettime in -lrt... yes
checking for clock_gettime... yes
checking for the actual timer support... abinit
checking for the requested algorithmic support... none
checking for the actual algorithmic support... none
checking for the requested math support... none
checking for the actual math support... none
checking for the requested DFT support... libxc
checking whether to select a fallback for libxc... no
checking xc.h usability... yes
checking xc.h presence... yes
checking for xc.h... yes
checking xc_funcs.h usability... yes
checking xc_funcs.h presence... yes
checking for xc_funcs.h... yes
checking for library containing xc_func_init... -lxc
checking for Fortran module includes... unknown
checking for the actual DFT support... libxc-fallback
configure: fallbacks to enable => libxc netcdf
checking whether to build atompaw... no
checking whether to build bigdft... no
checking whether to build etsf_io... no
checking whether to build libxc... yes
checking whether to build linalg... no
checking whether to build netcdf... yes
checking whether to build wannier90... no
configure: correcting include flags
checking whether to postpone -I/usr/include for algo... no
checking whether to postpone -I/usr/include for bigdft... no
checking whether to postpone -I/usr/include for etsf_io... no
checking whether to postpone -I/usr/include for fft... no
checking whether to postpone -I/usr/include for gpu... no
checking whether to postpone -I/usr/include for libxc... no
checking whether to postpone -I/usr/include for linalg... no
checking whether to postpone -I/usr/include for math... no
checking whether to postpone -I/usr/include for mpi... no
checking whether to postpone -I/usr/include for netcdf... no
checking whether to postpone -I/usr/include for psml... no
checking whether to postpone -I/usr/include for timer... no
checking whether to postpone -I/usr/include for triqs... no
checking whether to postpone -I/usr/include for wannier90... no
checking whether to postpone -I/usr/include for yaml... no

 ==============================================================================
 === Experimental developments and option triggers                          ===
 ==============================================================================

checking whether to accelerate 'make check'... no
checking whether to reduce 'make check' for packaging... 
checking whether to activate maintainer checks... no
configure: setting triggers associated to command-line options
checking whether to disable vectorization in problematic procedures... yes
configure: defining the 'HAVE_AVX_SAFE_MODE' preprocessing macro
checking whether to activate Bethe-Salpeter unpacking (EXPERIMENTAL)... no
checking whether to activate build of exported libraries (EXPERIMENTAL)... no
checking whether to activate double-precision GW calculations (EXPERIMENTAL)... no
checking whether to activate internal support for libPAW in ABINIT... yes
configure: defining the 'HAVE_LIBPAW_ABINIT' preprocessing macro
checking whether to activate internal support for libtetra(hedron) in ABINIT... yes
configure: defining the 'HAVE_LIBTETRA_ABINIT' preprocessing macro
checking whether to activate LOTF functionality (EXPERIMENTAL)... no
checking whether to enable build of macroave (EXPERIMENTAL)... yes
configure: triggering the 'DO_BUILD_01_MACROAVNEW_EXT' conditional
configure: triggering the 'DO_BUILD_MACROAVE' conditional
configure: defining the 'USE_MACROAVE' preprocessing macro
checking whether to enable memory profiling... 
checking whether to activate support for MPI_IN_PLACE... yes
configure: defining the 'HAVE_MPI2_INPLACE' preprocessing macro
checking whether to use MPI-IO as default IO library (change the default value of iomode) (EXPERIMENTAL)... no
checking whether to use NetCDF as default IO library (change the default value of iomode)... no
checking whether to activate support for OpenMP (EXPERIMENTAL)... no
checking whether to tell Abinit to read file lists from standard input... yes
checking whether to activate internal support for TRIQS 1.4... no
checking whether to activate internal support for TRIQS 2.0 (This option is dominant over the others versions)... no
checking whether to activate support for Wannier90 v1.x (default is v2.x)... no
checking whether to enable support for XML... no
checking whether to activate workaround for bugged ZDOTC and ZDOTU... no

 ==============================================================================
 === Subsystems                                                             ===
 ==============================================================================

configure: setting-up bindings (type: subsystem, mode: detached)
configure: setting-up doc (type: subsystem, mode: detached)
configure: setting-up fallbacks (type: subsystem, mode: attached)
configure: setting-up tests (type: subsystem, mode: attached)

 ==============================================================================
 === Output                                                                 ===
 ==============================================================================

checking that generated files are newer than configure... done
configure: creating ./config.status
config.status: creating config.dump
config.status: creating config.pc
config.status: creating config.sh
config.status: creating bindings/config.sh
config.status: creating config/wrappers/wrap-fc
config.status: creating fallbacks/config.mk
config.status: creating abichecks/Makefile
config.status: creating abichecks/abichecks.env
config.status: creating src/incs/Makefile
config.status: creating src/mods/Makefile
config.status: creating src/10_dumpinfo/m_build_info.F90
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/01_gsl_ext/Makefile
config.status: creating src/02_clib/Makefile
config.status: creating src/10_defs/Makefile
config.status: creating src/10_dumpinfo/Makefile
config.status: creating src/11_memory_mpi/Makefile
config.status: creating src/12_hide_mpi/Makefile
config.status: creating src/14_hidewrite/Makefile
config.status: creating src/15_gpu_toolbox/Makefile
config.status: creating src/16_hideleave/Makefile
config.status: creating src/17_libtetra_ext/Makefile
config.status: creating src/18_timing/Makefile
config.status: creating src/21_hashfuncs/Makefile
config.status: creating src/27_toolbox_oop/Makefile
config.status: creating src/28_numeric_noabirule/Makefile
config.status: creating src/29_kpoints/Makefile
config.status: creating src/32_util/Makefile
config.status: creating src/41_geometry/Makefile
config.status: creating src/41_xc_lowlevel/Makefile
config.status: creating src/42_libpaw/Makefile
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
config.status: creating src/59_ionetcdf/Makefile
config.status: creating src/61_occeig/Makefile
config.status: creating src/62_cg_noabirule/Makefile
config.status: creating src/62_ctqmc/Makefile
config.status: creating src/62_iowfdenpot/Makefile
config.status: creating src/62_poisson/Makefile
config.status: creating src/62_wvl_wfs/Makefile
config.status: creating src/63_bader/Makefile
config.status: creating src/64_psp/Makefile
config.status: creating src/65_lotf_base/Makefile
config.status: creating src/65_paw/Makefile
config.status: creating src/66_nonlocal/Makefile
config.status: creating src/66_vdwxc/Makefile
config.status: creating src/66_wfs/Makefile
config.status: creating src/67_common/Makefile
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
config.status: creating src/83_cut3d/Makefile
config.status: creating src/84_fold2Bloch/Makefile
config.status: creating src/94_scfcv/Makefile
config.status: creating src/95_drive/Makefile
config.status: creating src/98_main/Makefile
config.status: creating src/libs/Makefile
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing dump-optim commands
config.status: executing script-perms commands
config.status: executing long-lines commands
=== configuring in fallbacks (/home/acamm/software/abinit-8.10.1/fallbacks)
configure: running /bin/sh ./configure --disable-option-checking '--prefix=/home/acamm/bin/abinit-8.10.1'  '--enable-mpi' '--enable-mpi-io' '--enable-optim' '--with-dft-flavor=libxc' '--with-mpi-level=2' '--enable-mpi-inplace' '--with-trio-flavor=netcdf-fallback' '--enable-fallbacks' '--enable-avx-safe-mode' '--with-fc-vendor=intel' '--with-fft-flavor=fftw3-mkl' '--with-fft-libs=-lmkl_intel_lp64 -lmkl_sequential -lmkl_core' '--with-linalg-flavor=mkl+scalapack' '--with-linalg-libs=-lmkl_scalapack_lp64 -lmkl_intel_lp64 -lmkl_sequential -lmkl_core -lmkl_blacs_intelmpi_lp64 -lpthread -lm -ldl' 'FCFLAGS=-O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays ' 'FFLAGS=-O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays ' 'CFLAGS=-O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays ' 'CXXFLAGS=-O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays ' 'FC=mpiifort' 'CC=mpiicc' 'CXX=mpiicpc' '--enable-atompaw=no' '--enable-bigdft=no' '--enable-etsf-io=no' '--enable-libxc=yes' '--enable-linalg=no' '--enable-netcdf=yes' '--enable-wannier90=no' '--with-fc-vendor=intel' '--with-fc-version=0.0' '--with-tardir=/home/acamm/.abinit/tarballs' --cache-file=/dev/null --srcdir=.
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether make supports nested variables... yes
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
configure: setting Fortran compiler vendor to intel
configure: setting Fortran compiler version to 0.0
configure: setting tarball repository to /home/acamm/.abinit/tarballs
configure: checking consistency of fallback options
checking for wget... wget
checking for curl... curl
configure: using tarball repository /home/acamm/.abinit/tarballs
checking for patch... patch
checking for gcc... mpiicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether mpiicc accepts -g... yes
checking for mpiicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of mpiicc... none
checking whether we are using the GNU Fortran compiler... no
checking whether mpiifort accepts -g... yes
checking whether to enable the LINALG fallback... no
checking whether to enable the NETCDF fallback... yes
checking for a source tarball of NETCDF... yes
checking for md5sum... md5sum
configure: tarball MD5 check succeeded
configure: applying NetCDF tricks (vendor: intel, version: 0.0)
configure: CFGFLAGS_NETCDF =  --disable-cxx --disable-cxx-4 --disable-dap --disable-hdf4 --disable-netcdf4 --enable-fortran --enable-static --disable-shared
configure: CPPFLAGS_NETCDF =  -DNDEBUG -DpgiFortran
configure: FCFLAGS_NETCDF  =  -DNDEBUG -DpgiFortran -O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays 
checking whether to enable the ETSF_IO fallback... no
checking whether to enable the LIBXC fallback... yes
checking for a source tarball of LIBXC... yes
configure: tarball MD5 check succeeded
configure: applying LIBXC tricks
configure: CFGFLAGS_LIBXC = --enable-fortran --enable-static --disable-shared
configure: CFLAGS_LIBXC   = -O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays 
checking whether to enable the ATOMPAW fallback... no
checking whether to enable the BIGDFT fallback... no
checking whether to enable the WANNIER90 fallback... no
checking that generated files are newer than configure... done
configure: creating ./config.status
config.status: creating Makefile
config.status: executing depfiles commands
=== configuring in tests (/home/acamm/software/abinit-8.10.1/tests)
configure: running /bin/sh ./configure --disable-option-checking '--prefix=/home/acamm/bin/abinit-8.10.1'  '--enable-mpi' '--enable-mpi-io' '--enable-optim' '--with-dft-flavor=libxc' '--with-mpi-level=2' '--enable-mpi-inplace' '--with-trio-flavor=netcdf-fallback' '--enable-fallbacks' '--enable-avx-safe-mode' '--with-fc-vendor=intel' '--with-fft-flavor=fftw3-mkl' '--with-fft-libs=-lmkl_intel_lp64 -lmkl_sequential -lmkl_core' '--with-linalg-flavor=mkl+scalapack' '--with-linalg-libs=-lmkl_scalapack_lp64 -lmkl_intel_lp64 -lmkl_sequential -lmkl_core -lmkl_blacs_intelmpi_lp64 -lpthread -lm -ldl' 'FCFLAGS=-O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays ' 'FFLAGS=-O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays ' 'CFLAGS=-O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays ' 'CXXFLAGS=-O2 -axCORE-AVX2 -xavx -mkl -fp-model precise -heap-arrays ' 'FC=mpiifort' 'CC=mpiicc' 'CXX=mpiicpc' '--enable-atompaw=no' '--enable-bigdft=no' '--enable-etsf-io=no' '--enable-libxc=yes' '--enable-linalg=no' '--enable-netcdf=yes' '--enable-wannier90=no' '--with-fc-vendor=intel' '--with-fc-version=0.0' '--with-tardir=/home/acamm/.abinit/tarballs' --cache-file=/dev/null --srcdir=.
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether make supports nested variables... yes
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for perl... perl
checking for python... python
checking for gcc... mpiicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether mpiicc accepts -g... yes
checking for mpiicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of mpiicc... gcc3
checking timeout for automatic tests... none
checking whether to build test timeout code... no
checking that generated files are newer than configure... done
configure: creating ./config.status
config.status: creating Makefile
config.status: creating Timeout/Makefile
config.status: executing depfiles commands

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

  * C compiler      : intel version 17.0
  * Fortran compiler: intel version 0.0
  * architecture    : intel xeon (64 bits)

  * debugging       : basic
  * optimizations   : yes

  * OpenMP enabled  : no (collapse: ignored)
  * MPI    enabled  : yes
  * MPI-IO enabled  : yes
  * GPU    enabled  : no (flavor: none)

  * TRIO   flavor = netcdf-fallback
  * TIMER  flavor = abinit (libs: ignored)
  * LINALG flavor = mkl+scalapack (libs: user-defined)
  * ALGO   flavor = none (libs: ignored)
  * FFT    flavor = fftw3-mkl (libs: user-defined)
  * MATH   flavor = none (libs: ignored)
  * DFT    flavor = libxc-fallback

Configuration complete.
You may now type "make" to build ABINIT.
(or, on a SMP machine, "make mj4", or "make multi multi_nprocs=<n>")

