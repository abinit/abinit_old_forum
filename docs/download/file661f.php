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
# in which case its definitions will apply to this particular tree only.
#
# Hint: If you do not know the name of your machine, just type "hostname".
#

#
# IMPORTANT NOTES
#
# 1. Setting CPPFLAGS, CFLAGS, CXXFLAGS, or FCFLAGS manually is not
#    recommended and will override any setting made by the build system.
#    A gentler way to do is to use the CFLAGS_EXTRA, CXXFLAGS_EXTRA and
#    FCFLAGS_EXTRA environment variables, or to override only one kind
#    of flags. See the sections dedicated to C, C++ and Fortran below
#    for details.
#
# 2. Do not forget to remove the leading "#" on a line when you customize
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
#enable_64bit_flags="yes"

# Enable debug mode (default is basic)
#
# Allowed values:
#
#     * no       : strip debugging symbols
#     * yes      : keep debugging symbols and allow for user-defined flags
#     * basic    : add '-g' option when the compiler allows for it
#     * verbose  : like basic + definition of the DEBUG_VERBOSE CPP option
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
enable_debug="basic"

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
#enable_optim="aggressive"

# Where to install ABINIT (default is /usr/local)
#
prefix="/software/abinit/7.10.2/gcc"

# ---------------------------------------------------------------------------- #
# C support                                                                    #
# ---------------------------------------------------------------------------- #

# C preprocessor (should not be set in most cases)
#
#CPP="/usr/bin/cpp"

# C preprocessor custom debug flags (when enable_debug=yes)
#
#CPPFLAGS_DEBUG="-DDEV_MG_DEBUG_MODE"

# C preprocessor custom optimization flags (when enable_optim=yes)
#
#CPPFLAGS_OPTIM="-DDEV_DIAGO_DP"

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
CC="mpicc"

# C compiler custom debug flags (when enable_debug=yes)
#
#CFLAGS_DEBUG="-g3"

# C compiler custom optimization flags (when enable_optim=yes)
#
#CFLAGS_OPTIM="-O5"

# C compiler additional custom flags
#
#CFLAGS_EXTRA="-O2"

# Forced C compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
CFLAGS="-O2 -fPIC"

# C linker custom debug flags (when enable_debug=yes)
#
#CC_LDFLAGS_DEBUG="-Wl,-debug"

# C linker custom optimization flags (when enable_optim=yes)
#
#CC_LDFLAGS_OPTIM="-Wl,-ipo"

# C linker additional custom flags
#
#CC_LDFLAGS_EXTRA="-Bstatic"

# Forced C linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CC_LDFLAGS="-Bstatic"

# C linker custom debug libraries (when enable_debug=yes)
#
#CC_LIBS_DEBUG="-ldebug"

# C linker custom optimization libraries (when enable_optim=yes)
#
#CC_LIBS_OPTIM="-lopt_funcs"

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

# C++ preprocessor custom debug flags (when enable_debug=yes)
#
#XPPFLAGS_DEBUG="-DDEV_MG_DEBUG_MODE"

# C++ preprocessor custom optimization flags (when enable_optim=yes)
#
#XPPFLAGS_OPTIM="-DDEV_DIAGO_DP"

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
CXX="mpicxx"

# C++ compiler custom debug flags (when enable_debug=yes)
#
#CXXFLAGS_DEBUG="-g3"

# C++ compiler custom optimization flags (when enable_optim=yes)
#
#CXXFLAGS_OPTIM="-O5"

# C++ compiler additional custom flags
#
#CXXFLAGS_EXTRA="-O2"

# Forced C++ compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
CXXFLAGS="-O2 -fPIC -fopenmp"

# C++ linker custom debug flags (when enable_debug=yes)
#
#CXX_LDFLAGS_DEBUG="-Wl,-debug"

# C++ linker custom optimization flags (when enable_optim=yes)
#
#CXX_LDFLAGS_OPTIM="-Wl,-ipo"

# C++ linker additional custom flags
#
#CXX_LDFLAGS_EXTRA="-Bstatic"

# Forced C++ linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CXX_LDFLAGS="-Bstatic"

# C++ linker custom debug libraries (when enable_debug=yes)
#
#CXX_LIBS_DEBUG="-ldebug"

# C++ linker custom optimization libraries (when enable_optim=yes)
#
#CXX_LIBS_OPTIM="-lopt_funcs"

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

# Fortran preprocessor custom debug flags (when enable_debug=yes)
#
#FPPFLAGS_DEBUG="-DDEV_MG_DEBUG_MODE"

# Fortran preprocessor custom optimization flags (when enable_optim=yes)
#
#FPPFLAGS_OPTIM="-DDEV_DIAGO_DP"

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
FC="mpif90"

# Fortran 77 compiler (addition for the Windows/Cygwin environment)
#
F77="mpif77"

# Fortran compiler custom debug flags (when enable_debug=yes)
#
#FCFLAGS_DEBUG="-g3"

# Fortran compiler custom OpenMP flags
#
FCFLAGS_OPENMP="-fopenmp"

# Fortran compiler custom optimization flags (when enable_optim=yes)
#
#FCFLAGS_OPTIM="-O5"

# Fortran compiler additional custom flags
#
FCFLAGS_EXTRA="-O2 -fopenmp"

# Forced Fortran compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
FCFLAGS="-O2 -fPIC -fopenmp"

# Fortran linker custom debug flags (when enable_debug=yes)
#
#FC_LDFLAGS_DEBUG="-Wl,-debug"

# Fortran linker custom optimization flags (when enable_optim=yes)
#
#FC_LDFLAGS_OPTIM="-Wl,-ipo"

# Fortran linker custom flags
#
#FC_LDFLAGS_EXTRA="-Bstatic"

# Forced Fortran linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#FC_LDFLAGS="-Bstatic"

# Fortran linker custom debug libraries (when enable_debug=yes)
#
#FC_LIBS_DEBUG="-ldebug"

# Fortran linker custom optimization libraries (when enable_optim=yes)
#
#FC_LIBS_OPTIM="-lopt_funcs"

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
# Python support                                                               #
# ---------------------------------------------------------------------------- #

# Flags to pass to the Python interpreter (default is unset)
#
#PYFLAGS="-B"

# Preprocessing flags for C/Python bindings
#
#PYTHON_CPPFLAGS="-I/usr/local/include/numpy"

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

# Archiver custom debug flags (when enable_debug=yes)
#
#ARFLAGS_DEBUG=""

# Archiver custom optimization flags (when enable_optim=yes)
#
#ARFLAGS_OPTIM=""

# Archiver additional custom flags
#
#ARFLAGS_EXTRA="-X 64"

# Forced archiver flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#ARFLAGS="-X 32_64"

# Some def introduced for MINGW/WINDOW$
# Set generator of index to archive
#RANLIB="ranlib"

# Set generator of list symbols from object files
#NM="nm"

# Set the linker
#LD="ld"

# ---------------------------------------------------------------------------- #
# MPI support                                                                  #
# ---------------------------------------------------------------------------- #

# Determine whether to build parallel code (default is auto)
#
# Permitted values:
#
#   * auto : let the configure script auto-detect MPI support
#   * no   : disable MPI support
#   * yes  : enable MPI support
#
# If left unset, the build system will take all appropriate decisions by
# itself, and MPI will be enabled only if the build environment supports
# it. If set to "yes", the configure script will stop if it does not find
# a working MPI environment.
#
enable_mpi="yes"

# Activate the MPI_IN_PLACE option whenever possible (default is no)
# WARNING: this feature requires MPI2, ignored if the MPI library
# is not MPI2 compliant.
#
#enable_mpi_inplace="no"

# Activate parallel I/O (default is auto)
#
# Permitted values:
#
#   * auto : let the configure script auto-detect MPI I/O support
#   * no   : disable MPI I/O support
#   * yes  : enable MPI I/O support
#
# If left unset, the build system will take all appropriate decisions by
# itself, and MPI I/O will be enabled only if the build environment supports
# it. If set to "yes", the configure script will stop if it does not find
# a working MPI I/O environment.
#
enable_mpi_io="yes"

# Include flags for the MPI library (default is unset)
#
#with_mpi_incs="-I/usr/local/include"

# Set MPI standard level (default is auto-detected)
# Note: usually 1 for MPICH or LAM, 2 for OpenMPI
#
# Supported levels:
#
#   * 1 : use 'mpif.h' header
#   * 2 : use mpi Fortran module
#
with_mpi_level="2"

# Link flags for the MPI library (default is unset)
#
#with_mpi_libs="-L/usr/local/lib -lmpi"

# Convenience option: try to set MPI parameters by looking into the
# specified directory (default is unset)
#
# Notes:
#
#   * the build system expects to find subdirectories named bin/, lib/,
#     include/ under the prefix;
#
#   * this option is mutually exclusive with the other with_mpi_*
#     options but with_mpi_level;
#
#   * when setting CC, CXX, and/or FC in conjunction with this option,
#     the MPI compiler wrappers are wrapped themselves, so that the
#     specified serial compilers are used when building Abinit.
#
with_mpi_prefix="/software/openmpi-1.8.2/gcc"

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
#
# Requirement: go through README.GPU before doing anything
#
# Note: this is highly experimental - USE AT YOUR OWN RISKS!
#
#enable_gpu="yes"

# Flavor of the GPU library to use (default is cuda-single)
#
# Supported libraries:
#
#   * cuda-single : Cuda with single-precision arithmetic
#   * cuda-double : Cuda with double-precision arithmetic
#   * none        : not implemented (will replace enable_gpu)
#
#with_gpu_flavor="cuda-double"

# Include flags for the GPU library (default is unset)
#
#with_gpu_incs="-I/usr/local/include/cuda"

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

                       # ------------------------------ #

#
# Advanced GPU options (experts only)
#

# DO NOT EDIT THIS SECTION UNLESS YOU *TRULY* KNOW WHAT YOU ARE DOING!
# In any case, the outcome of setting the following options is highly
# impredictible.

# nVidia C compiler (should not be set)
#
#NVCC="/usr/local/cuda/bin/nvcc"

# Forced nVidia C compiler preprocessing flags (should not be set)
#
#NVCC_CPPFLAGS="-DHAVE_CUDA_SDK"

# Forced nVidia C compiler flags (should not be set)
#
#NVCC_CFLAGS="-arch=sm_13"

# Forced nVidia linker flags (should not be set)
#
#NVCC_LDFLAGS=""

# Forced nVidia linker libraries (should not be set)
#
#NVCC_LIBS=""

# ---------------------------------------------------------------------------- #
# Connectors                                                                   #
# ---------------------------------------------------------------------------- #

# WARNING: when setting the value of a connector flavor to "custom",
#          the associated CPP options may be defined in an impredictable
#          manner by the build system. In particular, using
#          --with-linalg-flavor="custom" will systematically enable
#          support for ScaLAPACK. Checking which CPP options are
#          enabled by looking at the output of abinit is thus highly
#          recommended.

# Enable connectors (default is yes)
#
# When connectors are enabled, the build system of Abinit tries to link
# prioritarily with external libraries. In some cases, when
# unsuccessful, it can build an internal fallback instead (see the
# "Fallbacks" section below).
#
# Enabling connectors is necessary for packaging and is recommended in
# most other cases. Rely upon external optimized libraries is always smarter
# than embedding their source code, as their performance and integration
# within the local environment are usually significantly better.
#
# The connectors are associated to advanced detection mechanisms
# implemented in the build system of Abinit. On many architectures, if
# the corresponding libraries have been properly installed, specifying
# a flavor will suffice to enable the related features.
#
enable_connectors="yes"

# ---------------------------------------------------------------------------- #
# Timer library connector                                                      #
# ---------------------------------------------------------------------------- #

# Flavor of the timer library to use (default is papi)
#
# Supported libraries:
#
#   * abinit
#   * custom (bypass build-system checks)
#   * gptl   (not implemented)
#   * none   (disable timer support)
#   * papi
#
#with_timer_flavor="papi"

# Include flags for the timer library (default is unset)
#
#with_timer_incs="-I/usr/local/include/papi"

# Link flags for the timer library (default is unset)
#
#with_timer_libs="-L/usr/local/lib/papi -lpapi"

# ---------------------------------------------------------------------------- #
# Transferable I/O (TRIO) connector                                            #
# ---------------------------------------------------------------------------- #

# Flavor of transferable I/O library to support (default is netcdf+etsf_io)
#
# By transferable I/O (TRIO), we mean that the files produced by Abinit
# will be transferable seamlessly to other computers and codes
#
# Supported libraries:
#
#   * etsf_io  : ETSF_IO file format (requires netcdf)
#   * fox      : XML I/O with Fortran
#   * libpspio : universal pseudopotential support
#   * netcdf   : NetCDF file format
#   * yaml     : YAML output
#   * none     : disable TRIO support
#
# You may specify any combination, using '+' as a separator
#
#with_trio_flavor="netcdf+etsf_io+fox"
with_trio_flavor="netcdf+etsf_io+fox"

                       # ------------------------------ #

# Include flags for the ETSF_IO library (default is unset)
#
with_etsf_io_incs="-I/software/abinit-7.10.2/gcc/include"

# Link flags for the ETSF_IO library (default is unset)
#
with_etsf_io_libs="-L/software/abinit-7.10.2/gcc/lib -letsf_io -letsf_io_utils -letsf_io_low_level"

                       # ------------------------------ #

# Include flags for the FoX library (default is unset)
#
with_fox_incs="-I/software/abinit-7.10.2/gcc/finclude"

# Link flags for the FoX library (default is unset)
#
with_fox_libs="-L/software/abinit-7.10.2/gcc/lib -lFoX_sax -lFoX_utils -lFoX_common -lFoX_fsys"

                       # ------------------------------ #

# Include flags for the Libpspio library (default is unset)
#
#with_libpspio_incs="-I/opt/etsf/include"

# Link flags for the Libpspio library (default is unset)
#
#with_libpspio_libs="-L/opt/etsf/lib -lpspio_fortran -lpspio"

                       # ------------------------------ #

# Include flags for the NetCDF library (default is unset)
#
with_netcdf_incs="-I/software/netcdf-4.3.3/gcc/include"

# Link flags for the NetCDF library (default is unset)
#
with_netcdf_libs="-L/software/netcdf-4.3.3/gcc/lib -lnetcdff -lnetcdf"

                       # ------------------------------ #

# Include flags for the YAML library (default is unset)
#
#with_yaml_incs="-I/opt/etsf/include"

# Link flags for the YAML library (default is unset)
#
#with_yaml_libs="-L/opt/etsf/lib -lyaml_fortran"

# ---------------------------------------------------------------------------- #
# FFT connector                                                                #
# ---------------------------------------------------------------------------- #

# Flavor of FFT library to support (default is unset)
#
# Supported libraries:
#
#   * asl
#   * custom        (bypass build-system checks)
#   * fftw2
#   * fftw2-threads
#   * fftw3
#   * fftw3-mkl
#   * fftw3-threads
#   * fftw3-mpi     (highly experimental)
#   * dfti          (native MKL FFT library)
#   * dfti-threads  (threaded MKL FFT library)
#   * none          (disable external FFT support)
#   * sgimath
#
# Notes:
#
#   * By default, Abinit will use the internal Goedecker FFT library
#   * This connector is highly experimental - USE AT YOUR OWN RISKS!
#
with_fft_flavor="fftw3-threads"

# Include flags for the FFT library (default is unset)
#
with_fft_incs="-I/software/fftw-3.3/amd64_linux26.omp/include"

# Link flags for the FFT library (default is unset)
#
with_fft_libs="-L/software/fftw-3.3/amd64_linux26.omp/lib -lfftw3 -lfftw3f"

# ---------------------------------------------------------------------------- #
# Linear algebra connector                                                     #
# ---------------------------------------------------------------------------- #

# Flavor of linear algebra libraries to use (default is netlib)
#
# Supported libraries:
#
#   * acml      : AMD Core Math Libraries
#                 http://developer.amd.com/libraries/acml/pages/default.aspx
#
#   * asl       : NEC Advanced Scientific Library
#                 http://www.nec.co.jp/solution/hpc/library/asl_e/index.html
#
#   * atlas     : Automatically Tuned Linear Algebra Software
#                 http://math-atlas.sourceforge.net/
#
#   * custom    : just check user-specified libraries, do not try to
#                 detect their type
#
#   * essl      : IBM Engineering and Scientific Subroutine Library
#                 http://www-03.ibm.com/systems/software/essl/
#
#   * elpa     : Eigen soLvers for Petaflops Applications
#                 http://elpa.rzg.mpg.de
#
#   * goto      : TACC GOTOBLAS2 and Netlib's LAPACK
#                 http://www.tacc.utexas.edu/tacc-projects/gotoblas2
#
#   * magma     : Matrix Algebra on GPU and Multicore Architectures
#                 (MAGMA minimal version>=1.1.0, requires Cuda)
#                 http://icl.cs.utk.edu/magma/
#
#   * mkl       : Intel Math Kernel Library
#                 http://software.intel.com/en-us/articles/intel-mkl/
#
#   * mlib      : HP Mathematical Software Library
#                 http://www.hp.com/
#
#   * netlib    : Netlib repository reference libraries
#                 http://www.netlib.org/lapack/index.html
#
#   * none      : disable external linear algebra support
#
#   * plasma    : Parallel Linear Algebra for Scalable Multicore
#                 Architectures (requires MPI)
#                 http://icl.cs.utk.edu/plasma/
#                 *** SCHEDULED FOR ABINIT 6.14 ***
#
#   * scalapack : Netlib BLACS and ScaLAPACK libraries (require MPI)
#                 http://www.netlib.org/scalapack/
#
#   * sgimath   : Silicon Graphics Scientific Mathematical Library
#                 http://techpubs.sgi.com/library/tpl/cgi-bin/init.cgi
#
#   * sunperf   : Sun Performance Library
#                 http://blogs.oracle.com/hinkthink/entry/sun_performance_library_aka_perflib
#
# Notes:
#
#   * you may combine "magma" and/or "plasma" and/or "scalapack" with
#     any other flavor, using '+' as a separator
#
#   * "custom" also works when the Fortran compiler provides a full
#     BLAS+LAPACK implementation internally (e.g. Lahey Fortran)
#
#   * the include and link flags for MAGMA and ScaLAPACK have to be
#     specified together with those of BLAS and LAPACK (see options below)
#
#   * please consult the MKL link line advisor if you experience
#     problems with MKL, by going to
#     http://software.intel.com/en-us/articles/intel-mkl-link-line-advisor/
#
with_linalg_flavor="netlib+scalapack"

# Include flags for the external linear algebra libraries (default is unset)
#
with_linalg_incs="-I/software/abinit-7.10.2/gcc/include"

# Link flags for the external linear algebra libraries (default is unset)
#
with_linalg_libs="-L/software/abinit-7.10.2/gcc/lib -llapack -lblas -lscalapack"

# ---------------------------------------------------------------------------- #
# Algorithmic library connector                                                #
# ---------------------------------------------------------------------------- #

# Flavor of the algorithmic library to use (default is unset)
#
# Supported libraries:
#
#   * custom (bypass build-system checks)
#   * levmar
#   * none   (disable external algorithm support)
#
#with_algo_flavor="levmar"

# Include flags for the algorithmic libraries (default is unset)
#
#with_algo_incs="-I/usr/local/include"

# Link flags for the algorithmic libraries (default is unset)
#
#with_algo_libs="-L/usr/local/lib -llevmar"

# ---------------------------------------------------------------------------- #
# Mathematical library connector                                               #
# ---------------------------------------------------------------------------- #

# Flavor of the math library to use (default is none)
#
# Supported libraries:
#
#   * custom (bypass build-system checks)
#   * gsl
#   * mlib
#   * none   (disable external math support)
#
with_math_flavor="gsl"

# Include flags for the math library (default is unset)
#
with_math_incs="-I/software/gsl-1.16/gcc/include"

# Link flags for the math library (default is unset)
#
with_math_libs="-L/software/gsl-1.16/gcc/lib -lgsl -lgslcblas"

# ---------------------------------------------------------------------------- #
# DFT library connector                                                        #
# ---------------------------------------------------------------------------- #

# Flavor of the DFT library to use (default is atompaw+bigdft+libxc+wannier90)
#
# Supported libraries:
#
#   * atompaw   : PAW dataset generation
#   * bigdft    : wavelets
#   * libxc     : exchange-correlation functionals
#   * none      : disable external DFT support
#   * wannier90 : Wannier functions
#
# You may specify any combination, using '+' as a separator
#
#with_dft_flavor="atompaw+libxc+wannier90"
with_dft_flavor="libxc"

                       # ------------------------------ #

# Full path to the AtomPAW executables (default is unset)
#
#with_atompaw_bins="/usr/local/bin"

# Include flags for the AtomPAW library (default is unset)
#
#with_atompaw_incs="-I/usr/local/include/atompaw"

# Link flags for the AtomPAW library (default is unset)
#
#with_atompaw_libs="-L/usr/local/lib/atompaw -latompaw"

                       # ------------------------------ #

# Include flags for the BigDFT library (default is unset)
#
#with_bigdft_incs="-I/usr/local/include/bigdft"

# Link flags for the BigDFT library (default is unset)
#
#with_bigdft_libs="-L/usr/local/lib/bigdft -lbigdft -lpoissonsolver -labinit"

                       # ------------------------------ #

# Include flags for the LibXC library (default is unset)
#
with_libxc_incs="-I/software/abinit-7.10.2/gcc/include"

# Link flags for the LibXC library (default is unset)
#
#with_libxc_libs="-L/software/abinit-7.10.2/gcc/lib -lxc -lxcf90"
with_libxc_libs="-L/software/abinit-7.10.2/gcc/lib -lxc"

                       # ------------------------------ #

# Full path to the Wannier90 executables (default is unset)
#
#with_wannier90_bins="/usr/local/bin"

# Include flags for the Wannier90 library (default is unset)
#
#with_wannier90_incs="-I/usr/local/include/wannier90"

# Link flags for the Wannier90 library (default is unset)
#
#with_wannier90_libs="-L${HOME}/lib/wannier90 -lwannier90"

# ---------------------------------------------------------------------------- #
# Fallbacks                                                                    #
# ---------------------------------------------------------------------------- #

#
# Fallbacks are external packages built within Abinit, in order to
# facilitate the development and testing of advanced features. They
# should in principle not be used in production, but replaced by the
# corresponding connector instead (see above sections).
#
# IMPORTANT NOTE: the source tarballs of fallbacks are downloaded from
#                 internet into ~/.abinit/tarballs/.
#

# Enable fallbacks (default is yes)
#
# Maintainers may use the following to force the build of fallbacks:
#
#   * force: will skip connector tests when fallbacks are available.
#
# Note: if you disable fallbacks, failing connectors will cause
# configure to abort.
#
enable_fallbacks="no"

# ---------------------------------------------------------------------------- #
# Developer options                                                            #
# ---------------------------------------------------------------------------- #

# Note: all the following options are disabled by default
#       (i.e. they have the complementary values to those displayed)

# Enable BSE unpacking (gmatteo)
#
#enable_bse_unpacked="yes"

# Enable CLib (gmatteo)
#
enable_clib="yes"

# Enable exports (pouillon)
#
#enable_exports="yes"

# Enable double precision for GW calculations (gmatteo)
#
enable_gw_dpc="yes"

# Enable memory profiling (waroquiers)
#
enable_memory_profiling="no"

# Enable lotf (mancini)
#
#enable_lotf="yes"

# Enable OpenMP (gmatteo, torrent)
#
enable_openmp="yes"

# Enable ZDOTC and ZDOTU bugfix (gmatteo)
#
#enable_zdot_bugfix="yes"

# ---------------------------------------------------------------------------- #
# Maintainer options                                                           #
# ---------------------------------------------------------------------------- #

# Run test suite on 4 processors (default is no)
#
#enable_fast_check="yes"

# Activate maintainer checks (default is no)
#
enable_maintainer_checks="no"

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

