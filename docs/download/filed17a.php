#
# Generic config file for ABINIT (documented template)
#
# After editing this file to suit your needs, you may save it as
# "~/.abinit/build/<hostname>.ac" to keep these parameters as per-user
# defaults. Just replace "<hostname>" by the name of your machine,
# excluding the domain name.
#
# Example: if your machine is called "myhost.mydomain", you will save
#          this file as "~/.abinit/build/myhost.ac".
#
# You may put this file at the top level of an ABINIT source tree as well,
# in which case its definitIOns will apply to this particular tree only.
#
# Hint: If you do not know the name of your machine, just type "hostname".
#

#
# IMPORTANT NOTES
#
# 1. It may happen that this file is outdated. In such a case, the best is
#    to refer to the command-line options of the "configure" script. To
#    obtain a complete list of these options, just type "./configure --help"
#    from the top source directory of ABINIT.
#
# 2. Setting CPPFLAGS, CFLAGS, CXXFLAGS, or FCFLAGS manually is not
#    recommended and will override any other mechanism involved in their
#    configuration. A gentler way to do is to use the "--with-*-optflags"
#    command-line options of the "configure" script. See below for details.
#
# 3. Do not forget to remove the leading "#" on a line when you customize
#    an option.
#

# ---------------------------------------------------------------------------- #
# Global build options                                                         #
# ---------------------------------------------------------------------------- #

# Enable 64-bit compiler flags (default is no)
#
# Note: when necessary, fine-grained tuning may be achieved by setting
#       the CPPFLAGS_64BITS, CFLAGS_64BITS, CXXFLAGS_64BITS, and
#       FCFLAGS_64BITS variables manually.
#
##WARNING##
enable_64bit_flags="yes"

# Enable debug mode (default is yes)
#
# Allowed values:
#
#     * no       : strip debugging symbols
#     * yes      : keep debugging symbols and allow for user-defined flags
#     * enhanced : disable optimizations and debug verbosely
#     * paranoid : enhanced debugging with additional warnings
#     * naughty  : paranoid debugging with array bound checks
#
# Levels other than no and yes are "profile mode" levels in which
# user-defined flags are overriden and optimizations disabled (see
# below)
#
# Note: debug levels are incremental, i.e. the flags of one level are
# appended to those of the previous ones
#
#enable_debug="yes"

# Enable compiler hints (default is yes)
#
# Allowed values:
#
#     * no       : do not apply any hint
#     * yes      : apply all available hints
#
#enable_hints="no"

# Select optimization level whenever possible (default is standard,
# except when debugging is in profile mode - see above - in which case
# optimizations are turned off)
#
# Supported levels:
#
#     * no         : disable optimizations
#     * yes        : enable optimizations with user-defined flags
#     * safe       : build slow and very reliable code
#     * standard   : build fast and reliable code
#     * aggressive : build very fast code, regardless of reliability
#
# Levels other than no and yes are "profile mode" levels in which
# user-defined flags are overriden
#
# Note:
#
#     * this option is ignored when debugging is in profile mode
#
##WARNING##
enable_optim="yes"

# Where to install ABINIT (default is /usr/local)
#
#prefix="${HOME}/hpc"

# ---------------------------------------------------------------------------- #
# C support                                                                    #
# ---------------------------------------------------------------------------- #

# C preprocessor (should not be set in most cases)
#
#CPP="/usr/bin/cpp"

# C preprocessor additional custom flags
#
#CPPFLAGS_EXTRA="-P"

# Forced C preprocessor flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CPPFLAGS="-P"

                       # ------------------------------ #

# C compiler
#
CC="openmpicc"
#CC="gcc-mp-4.3"
#CC="/opt/openMPIintel/bin/mpicc"

# C compiler additional custom flags
#
##WARNING##
CFLAGS_EXTRA="-O3"

# Forced C compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CFLAGS="-O2"

# C linker additional custom flags
#
#CC_LDFLAGS_EXTRA="-Bstatic"

# Forced C linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CC_LDFLAGS="-Bstatic"

# C linker additional custom libraries
#
#CC_LIBS_EXTRA="-lrt"

# Forced C linker libraries
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CC_LIBS="-lrt"

# ---------------------------------------------------------------------------- #
# C++ support                                                                  #
# ---------------------------------------------------------------------------- #

# Note: the XPP* environment variables will likely have no effect

# C++ preprocessor (should not be set in most cases)
#
#XPP="/usr/bin/cpp"

# C++ preprocessor additional custom flags
#
#XPPFLAGS_EXTRA="-P"

# Forced C++ preprocessor flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#XPPFLAGS="-P"

                       # ------------------------------ #

# C++ compiler
#
CXX="openmpic++"
#CXX="g++-mp-4.3"
#CXX="/opt/openMPIintel/bin/mpic++"

# C++ compiler custom flags
#
##WARNING##
CXXFLAGS_EXTRA="-O3"

# Forced C++ compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CXXFLAGS="-O2"

# C++ linker additional custom flags
#
#CXX_LDFLAGS_EXTRA="-Bstatic"

# Forced C++ linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CXX_LDFLAGS="-Bstatic"

# C++ linker additional custom libraries
#
#CXX_LIBS_EXTRA="-lblitz"

# Forced C++ linker libraries
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CXX_LIBS="-lblitz"

# ---------------------------------------------------------------------------- #
# Fortran support                                                              #
# ---------------------------------------------------------------------------- #

# Fortran preprocessor (should not be set in most cases)
#
#FPP="/usr/local/bin/fpp"

# Fortran preprocessor additional custom flags
#
#FPPFLAGS_EXTRA="-P"

# Forced Fortran preprocessor flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#FPPFLAGS="-P"

                       # ------------------------------ #

# Fortran compiler
#
FC="openmpif90"
#FC="gfortran-mp-4.3"
#FC="/opt/openMPIintel/bin/mpif90"

# Fortran compiler additional custom flags
#
FCFLAGS_EXTRA="-O3"

# Forced Fortran compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#FCFLAGS="-O2"

# Fortran linker custom flags
#
#FC_LDFLAGS_EXTRA="-Wl,-search_paths_first"

# Forced Fortran linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#FC_LDFLAGS="-Bstatic"

# Fortran linker additional custom libraries
#
#FC_LIBS_EXTRA="-lsvml"

# Forced Fortran linker libraries
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#FC_LIBS="-lsvml"

                       # ------------------------------ #

# Use C clock instead of Fortran clock for timings (default is no)
#
#enable_cclock="yes"

# Wrap Fortran compiler calls (default is auto-detected)
# Combine this option with enable_debug="yes" to keep preprocessed source
# files (they are removed by default, except if their build fails)
#
#enable_fc_wrapper="yes"

# Choose whether to read file lists from standard input or "ab.files"
# (default is yes = standard input)
#
#enable_stdin="no"

# ---------------------------------------------------------------------------- #
# Build customization                                                          #
# ---------------------------------------------------------------------------- #

# Enable the build of macroave (default is yes)
#
#enable_macroave="no"

# Set per-directory Fortran optimizations (useful when a Fortran compiler
# crashes during the build)
#
# Note: this option is not available through the command line
#
#fcflags_opt_95_drive="-O0"

# ---------------------------------------------------------------------------- #
# Libraries and linking                                                        #
# ---------------------------------------------------------------------------- #

# Set archiver name
#
#AR="xiar"

# Archiver additional custom flags
#
#ARFLAGS_EXTRA="-X 64"

# Forced archiver flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#ARFLAGS="-X 32_64"

# ---------------------------------------------------------------------------- #
# MPI support                                                                  #
# ---------------------------------------------------------------------------- #

# Determine whether to build parallel code (default is unset)
#
#  * enable_mpi=unset  : let the configure script auto-detect MPI support
#  * enable_mpi=no     : disable MPI support (bypassing autodetection)
#  * enable_mpi=yes    : enable MPI support (bypassing autodetection)
#
# If left unset, the build system will take all appropriate decisions by
# itself, and MPI will be enabled only if the build environment supports
# it
#
enable_mpi="yes"

# Activate parallel I/O (default is no)
# WARNING: this feature is still under development
enable_mpi_io="yes"

# Activate untested features of parallel I/O (default is no)
# WARNING: USE AT YOUR OWN RISKS!
#enable_mpi_io_test="yes"

# Activate MPI time tracing (default is no)
# WARNING: this feature is still under development
#enable_mpi_trace="yes"

# Include flags for the MPI library (default is unset)
#
#with_mpi_includes="-I/usr/local/include"

# Set MPI standard level (default is auto-detected)
# Note: usually 1 for MPICH or LAM, 2 for OpenMPI
#
# Supported levels:
#
#   * 1 : use 'mpif.h' header
#   * 2 : use mpi Fortran module
#
#with_mpi_level="2"

# Link flags for the MPI library (default is unset)
#
#with_mpi_libs="-L/usr/local/lib -lmpi"

# Convenience option: try to set MPI parameters by looking into the
# specified directory (default is unset)
#
# Note 1: the build system expects to find subdirectories named bin/, lib/,
# include/ under the prefix
#
# Note 2: this option is mutually exclusive with the other with_mpi_*
# options
#
#with_mpi_prefix="/opt/local/openmpi-gcc43_m64"

# Set MPI runner for tests (default is unset)
# Note: replaces the former with_mpi_runner option
#
#MPI_RUNNER="/usr/local/bin/mpiexec"

# Set serial runner for tests (default is unset)
# Note: this option has no effect yet
#
#SERIAL_RUNNER="/usr/local/bin/srun"

# ---------------------------------------------------------------------------- #
# GPU support                                                                  #
# ---------------------------------------------------------------------------- #

# Enable GPU library support (default is no)
# Requirement: go through README.GPU before doing anything
# Note: this is highly experimental - USE AT YOUR OWN RISKS!
#
#enable_gpu="yes"

# Flavor of the GPU library to use (default is cuda-single)
#
# Supported libraries:
#
#   * cuda-single : Cuda with single-precision arithmetic
#   * cuda-double : Cuda with double-precision arithmetic
#
#with_gpu_flavor="cuda-double"

# Include flags for the GPU library (default is unset)
#
#with_gpu_includes="-I/usr/local/include/gsl"

# Link flags for the GPU library (default is unset)
#
#with_gpu_libs="-L/usr/local/cuda/lib64 -lcublas -lcufft -lcudart"

# Convenience option: try to set GPU parameters by looking into the
# specified directory (default is unset)
#
# Note 1: the build system expects to find subdirectories named bin/, lib/,
# include/ under the prefix
#
# Note 2: this option is mutually exclusive with the other with_gpu_*
# options
#
#with_gpu_prefix="/usr/local/cuda"

                       # ------------------------------ #

#
# The following options are used to build GPU code
#

# GPU C preprocessor flags (default is unset)
#
#with_gpu_cppflags=""

# GPU C compiler flags (default is unset)
#
#with_gpu_cflags=""

# GPU C linker flags (default is unset)
#
#with_gpu_ldflags=""

# ---------------------------------------------------------------------------- #
# Timer library support                                                        #
# ---------------------------------------------------------------------------- #

# Enable external timer library support (default is no)
#
#enable_timer="yes"

# Flavor of the timer library to use (default is papi)
#
# Supported libraries:
#
#   * abinit
#   * gptl (not implemented)
#   * papi
#
#with_timer_flavor="papi"

# Include flags for the timer library (default is unset)
#
#with_timer_includes="-I/usr/local/include/papi"

# Link flags for the timer library (default is unset)
#
#with_timer_libs="-L/usr/local/lib/papi -lpapi"

# ---------------------------------------------------------------------------- #
# Transferable I/O (TRIO) support                                              #
# ---------------------------------------------------------------------------- #

# Enable transferable I/O library support (default is no)
# By transferable I/O (TRIO), we mean that the files produced by Abinit
# will be transferable seamlessly to other computers and codes
# Note: this is highly experimental - USE AT YOUR OWN RISKS!
#
#enable_trio="yes"

# Flavor of transferable I/O library to support (default is netcdf)
#
# Supported libraries (aka TRIO: FoX, HDF, NetCDF):
#
#   * etsf   : ETSF_IO file format (NetCDF-based)
#   * fox    : XML I/O with Fortran
#   * hdf    : HDF file format
#   * netcdf : NetCDF file format
#
# You may specify any combination, using '+' as a separator
#
#with_trio_flavor="etsf"

# Include flags for the transferable I/O library (default is unset)
#
#with_trio_includes="-I/usr/local/include"

# Link flags for the transferable I/O library (default is unset)
#
#with_trio_libs="-L/usr/local/lib -letsf_io"

# ---------------------------------------------------------------------------- #
# FFT support                                                                  #
# ---------------------------------------------------------------------------- #

# Enable external FFT library support (default is no)
# Note: by default, Abinit will use the internal Goedecker FFT library
# Note: this is highly experimental - USE AT YOUR OWN RISKS!
#
#enable_fft="yes"

# Flavor of FFT library to support (default is fftw3)
#
# Supported libraries:
#
#   * fftw2
#   * fftw2-threads
#   * fftw3
#   * fftw3-mkl
#   * fftw3-threads
#
#with_fft_flavor="fftw3"

# Include flags for the FFT library (default is unset)
#
#with_fft_includes="-I/opt/local/include"

# Link flags for the FFT library (default is unset)
#
#with_fft_libs="-L/opt/local/lib -lfftw3"

# ---------------------------------------------------------------------------- #
# Linear algebra support                                                       #
# ---------------------------------------------------------------------------- #

# Enable external linear algebra support (default is yes)
#
enable_linalg="no"

# Include flags for the external linear algebra libraries
#
#with_linalg_includes="-I/opt/local/include/atlas"

# Link flags for the external linear algebra libraries (default is unset)
#
# Note: internal versions will be built if left unset.
#
#with_linalg_libs="-L/opt/local/lib -libatlas -libcblas -libf77blas -libptcblas -libptf77blas"

# Flavor of linear algebra libraries to use (default is netlib)
#
# Supported libraries:
#
#   * acml      (not implemented)
#   * asl       (not implemented)
#   * atlas     (untested)
#   * cxml      (not implemented)
#   * essl
#   * mkl       (not implemented)
#   * mlib      (not implemented)
#   * netlib
#   * sgimath   (not implemented)
#   * sunperf   (not implemented)
#
#with_linalg_flavor="atlas"

# Enable SCALapack support (default is no)
#
#enable_scalapack="yes"

# Note: the include and link flags for SCALapack have to be specified
#       with those of BLAS and LAPACK

# ---------------------------------------------------------------------------- #
# Mathematical library support                                                 #
# ---------------------------------------------------------------------------- #

# Enable external math library support (default is no)
#
#enable_math="yes"

# Flavor of the math library to use (default is gsl)
#
# Supported libraries:
#
#   * gsl
#   * mlib
#
#with_math_flavor="gsl"

# Include flags for the math library (default is unset)
#
#with_math_includes="-I/opt/local/include/gsl"

# Link flags for the math library (default is unset)
#
#with_math_libs="-L/opt/local/lib -lgsl"

# ---------------------------------------------------------------------------- #
# DFT library support                                                          #
# ---------------------------------------------------------------------------- #

# Enable external DFT library support (default is no)
#
#enable_dft="no"

# Flavor of the DFT library to use (default is bigdft+libxc+wannier90)
#
# Supported libraries:
#
#   * bigdft    : wavelets
#   * libxc     : exchange-correlation functionals
#   * wannier90 : Wannier functions
#
#with_dft_flavor="libxc"

# Include flags for the math library (default is unset)
#
#with_dft_includes="-I/usr/local/include/dft"

# Link flags for the math library (default is unset)
#
#with_dft_libs="-L/usr/local/lib -lxc"

# ---------------------------------------------------------------------------- #
# Plug-ins                                                                     #
# ---------------------------------------------------------------------------- #

#
# IMPORTANT NOTE: the source tarballs of plug-ins are downloaded from
#                 internet into ~/.abinit/tarballs
#

# Look for the plug-in components in <prefix>/bin, <prefix>/include
# and <prefix>/lib (default is unset)
#
#with_plugins_prefix="/opt/etsf/abinit-plugins"

# Set local repository where to look for plug-in tarballs (default is
# ~/.abinit/tarballs)
#
#with_plugins_tardir="/opt/etsf/abinit-plugins/tarballs"

                       # ------------------------------ #

# Enable BigDFT support (default is yes)
#
#enable_bigdft="no"

# Include flags for the BigDFT library (default is unset)
#
#with_bigdft_includes="-I/usr/local/include/bigdft"

# Link flags for the BigDFT library (default is unset)
#
#with_bigdft_libs="-L/usr/local/lib/bigdft -lbigdft -lpoissonsolver"

                       # ------------------------------ #

# Enable ETSF_IO library support (default is yes)
#
#enable_etsf_io="no"

# Include flags for the ETSF_IO library (default is unset)
#
#with_etsf_io_includes="-I/opt/etsf/include"

# Link flags for the ETSF_IO library (default is unset)
#
#with_etsf_io_libs="-L/opt/etsf/lib -letsf_io"

                       # ------------------------------ #

# Enable FoX support (default is no)
#
#enable_fox="no"

# Include flags for the FoX library (default is unset)
#
#with_fox_includes="-I/usr/local/include/fox"

# Link flags for the FoX library (default is unset)
#
#with_fox_libs="-L/usr/local/lib/fox -lFoX_wxml -lFoX_wcml -lFoX_utils -lFoX_sax -lFoX_common -lfsys"

                       # ------------------------------ #

# Enable Nanoquanta/LibXC library support (default is yes)
#
enable_libxc="no"

# Include flags for the Nanoquanta/LibXC library (default is unset)
#
#with_libxc_includes="-I/opt/etsf/include"

# Link flags for the Nanoquanta/LibXC library (default is unset)
#
#with_libxc_libs="-L/opt/etsf/lib -llibxc"

                       # ------------------------------ #

# Enable NetCDF support (default is yes)
#
enable_netcdf="no"

# Include flags for the NetCDF library (default is unset)

#with_netcdf_includes="-I/opt/local/include"

# Link flags for the NetCDF library (default is unset)
#
#with_netcdf_libs="-L/opt/local/lib -libnetcdf -libnetcdf_c++"

                       # ------------------------------ #

# Enable Wannier90 support (default is yes)
#
#enable_wannier90="no"

# Full path for the Wannier90 binary (default is unset)
#
#with_wannier90="/usr/local/bin/wannier90"

# Include flags for the Wannier90 library (default is unset)
#
#with_wannier90_includes="-I/usr/local/include/wannier90"

# Link flags for the Wannier90 library (default is unset)
#
#with_wannier90_libs="-L${HOME}/lib/wannier90 -lwannier90"

# ---------------------------------------------------------------------------- #
# Developer options                                                            #
# ---------------------------------------------------------------------------- #

# Note: all the following options are disabled by default
#       (i.e. they have the complementary values to those displayed)

# Enable bindings (caliste)
#
#enable_bindings="yes"

# Enable BSE unpacking (gmatteo)
#
#enable_bse_unpacked="yes"

# Enable CLib (gmatteo)
#
#enable_clib="yes"

# Enable exports (pouillon)
#
#enable_exports="yes"

# Enable GW calculations with cut-offs (gmatteo)
#
#enable_gw_cutoff="yes"

# Enable double precision for GW calculations (gmatteo)
#
##WARNING!!##
enable_gw_dpc="yes"

# Enable optimal GW calculations (gmatteo)
#
#enable_gw_optimal="yes"

# Enable wrapper for GW calculations (gmatteo)
#
#enable_gw_wrapper="yes"

# Enable Symmetric Multi-Processing (SMP)
#
# Note: this currently only activates OpenMP
#
#enable_smp="yes"

# ---------------------------------------------------------------------------- #
# Maintainer options                                                           #
# ---------------------------------------------------------------------------- #

# Activate support for all plug-ins (default is unset)
#
# Warning: setting this option to "no" will disable plug-in support
#
#enable_all_plugins="yes"

# Activate maintainer checks (default is no)
#
#enable_maintainer_checks="no"

# Activate test timeout support (default is no)
#
##WARNING##
#enable_test_timeout="yes"

# Set timeout for automatic tests (default is 900)
#
# Note: this option requires test timeout to be activated
#
#with_test_timeout="1200"

# Fortran compiler vendor to be used by the build system (default is unset)
#
# Note: do not use if you don't know what it is about
#
#with_fc_vendor="dummy"

# Fortran compiler version to be used by the build system (default is unset)
#
# Note: do not use if you don't know what it is about
#
#with_fc_version="0.0"

# ---------------------------------------------------------------------------- #
# Documentation options                                                        #
# ---------------------------------------------------------------------------- #

# Markdown flags
#
#MDFLAGS=""

# LaTeX flags
#
#LTXFLAGS=""

# DviPDF flags
#
#PDFFLAGS=""

# ---------------------------------------------------------------------------- #
# Advanced GPU options (experts only)                                          #
# ---------------------------------------------------------------------------- #

# DO NOT EDIT THIS SECTION UNLESS YOU *TRULY* KNOW WHAT YOU ARE DOING!
# In any case, the outcome of setting the following options is highly
# impredictible

# nVidia C compiler (should not be set)
#
#NVCC="/usr/local/cuda/bin/nvcc"

# Forced nVidia C compiler preprocessing flags (should not be set)
#
#NVCC_CPPFLAGS="-DHAVE_CUDA_SDK"

# Forced nVidia C compiler flags (should not be set)
#
#NVCC_CFLAGS=""

# Forced nVidia linker flags (should not be set)
#
#NVCC_LDFLAGS=""

# Forced nVidia linker libraries (should not be set)
#
#NVCC_LIBS=""

