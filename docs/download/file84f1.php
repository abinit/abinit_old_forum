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
# in which case its definitions will apply to this particular tree only. In
# some situations, you may even want to put it at your current top build
# directory, in which case it will replace any other config file.
#
# Hint: If you do not know the name of your machine, just type "hostname"
#       in a terminal.
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

# -------------------------------------------------------------------------- #
# Global build options                                                       #
# -------------------------------------------------------------------------- #

# Where to install ABINIT (default is /usr/local)
#
#prefix="${HOME}/hpc"

# Select debug level (default is basic)
#
# Allowed values:
#
#     * none     : strip debugging symbols
#     * custom   : allow for user-defined debug flags
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
#with_debug_flavor="custom"

# Select optimization level whenever possible (default is standard,
# except when debugging is in profile mode - see above - in which case
# optimizations are turned off)
#
# Supported levels:
#
#     * none       : disable optimizations
#     * custom     : enable optimizations with user-defined flags
#     * safe       : build slow and very reliable code
#     * standard   : build fast and reliable code
#     * aggressive : build very fast code, regardless of reliability
#
# Levels other than no and yes are "profile mode" levels in which
# user-defined flags are overriden
#
# Note:
#
#     * this option is ignored when the debug is level is higher than basic
#
#with_optim_flavor="aggressive"

# Reduce AVX optimizations in sensitive subprograms (default is no)
#
#enable_avx_safe_mode="yes"

# Enable compiler hints (default is yes)
#
# Allowed values:
#
#     * no       : do not apply any hint
#     * yes      : apply all available hints
#
#enable_hints="no"

# -------------------------------------------------------------------------- #
# C support                                                                  #
# -------------------------------------------------------------------------- #

# C preprocessor (should not be set in most cases)
#
#CPP="/usr/bin/cpp"

# C preprocessor custom debug flags (when with_debug_flavor=custom)
#
#CPPFLAGS_DEBUG="-DDEV_MG_DEBUG_MODE"

# C preprocessor custom optimization flags (when with_optim_flavor=custom)
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
#CC="mpibugbugbgubgubgubgu"

# C compiler custom debug flags (when with_debug_flavor=custom)
#
#CFLAGS_DEBUG="-g3"

# C compiler custom optimization flags (when with_optim_flavor=custom)
#
#CFLAGS_OPTIM="-O5"

# C compiler additional custom flags
#
#CFLAGS_EXTRA="-O2"

# Forced C compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
CFLAGS="-O2 -xCore-AVX512 -ftz -fp-speculation=safe -fp-model source -mkl=cluster"

                       # ------------------------------ #

# C linker custom debug flags (when with_debug_flavor=custom)
#
#CC_LDFLAGS_DEBUG="-Wl,-debug"

# C linker custom optimization flags (when with_optim_flavor=custom)
#
#CC_LDFLAGS_OPTIM="-Wl,-ipo"

# C linker additional custom flags
#
#CC_LDFLAGS_EXTRA="-Bstatic"

# Forced C linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CC_LDFLAGS="-Bstatic"

# C linker custom debug libraries (when with_debug_flavor=custom)
#
#CC_LIBS_DEBUG="-ldebug"

# C linker custom optimization libraries (when with_optim_flavor=custom)
#
#CC_LIBS_OPTIM="-lopt_funcs"

# C linker additional custom libraries
#
#CC_LIBS_EXTRA="-lrt"

# Forced C linker libraries
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CC_LIBS="-lrt"

# -------------------------------------------------------------------------- #
# C++ support                                                                #
# -------------------------------------------------------------------------- #

# Note: the XPP* environment variables will likely have no effect

# C++ preprocessor (should not be set in most cases)
#
#XPP="/usr/bin/cpp"

# C++ preprocessor custom debug flags (when with_debug_flavor=custom)
#
#XPPFLAGS_DEBUG="-DDEV_MG_DEBUG_MODE"

# C++ preprocessor custom optimization flags (when with_optim_flavor=custom)
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
CXX="mpic++"

# C++ compiler custom debug flags (when with_debug_flavor=custom)
#
#CXXFLAGS_DEBUG="-g3"

# C++ compiler custom optimization flags (when with_optim_flavor=custom)
#
#CXXFLAGS_OPTIM="-O5"

# C++ compiler additional custom flags
#
#CXXFLAGS_EXTRA="-O2"

# Forced C++ compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
CXXFLAGS="-O2 -xCore-AVX512 -ftz -fp-speculation=safe -fp-model source -mkl=cluster"

                       # ------------------------------ #

# C++ linker custom debug flags (when with_debug_flavor=custom)
#
#CXX_LDFLAGS_DEBUG="-Wl,-debug"

# C++ linker custom optimization flags (when with_optim_flavor=custom)
#
#CXX_LDFLAGS_OPTIM="-Wl,-ipo"

# C++ linker additional custom flags
#
#CXX_LDFLAGS_EXTRA="-Bstatic"

# Forced C++ linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CXX_LDFLAGS="-Bstatic"

# C++ linker custom debug libraries (when with_debug_flavor=custom)
#
#CXX_LIBS_DEBUG="-ldebug"

# C++ linker custom optimization libraries (when with_optim_flavor=custom)
#
#CXX_LIBS_OPTIM="-lopt_funcs"

# C++ linker additional custom libraries
#
#CXX_LIBS_EXTRA="-lblitz"

# Forced C++ linker libraries
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#CXX_LIBS="-lblitz"

# -------------------------------------------------------------------------- #
# Fortran support                                                            #
# -------------------------------------------------------------------------- #

# Fortran preprocessor (should not be set in most cases)
#
#FPP="/usr/local/bin/fpp"

# Fortran preprocessor custom debug flags (when with_debug_flavor=custom)
#
#FPPFLAGS_DEBUG="-DDEV_MG_DEBUG_MODE"

# Fortran preprocessor custom optimization flags (when with_optim_flavor=custom)
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
#F77="gfortran"

# Fortran compiler custom debug flags (when with_debug_flavor=custom)
#
#FCFLAGS_DEBUG="-g3"

# Fortran compiler custom OpenMP flags
#
#FCFLAGS_OPENMP="-fopenmp"

# Fortran compiler custom optimization flags (when with_optim_flavor=custom)
#
#FCFLAGS_OPTIM="-O5"

# Fortran compiler additional custom flags
#
#FCFLAGS_EXTRA="-O2"

# Forced Fortran compiler flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
FCFLAGS="-O2 -xCore-AVX512 -ftz -fp-speculation=safe -fp-model source -mkl=cluster"

# Fortran flags for fixed-form source files
#
#FCFLAGS_FIXEDFORM="-ffixed-form"

# Fortran flags for free-form source files
#
#FCFLAGS_FREEFORM="-ffree-form"

# Fortran compiler flags to use a module directory
#
#FCFLAGS_MODDIR=="-J$(abinit_moddir)"

# Tricky Fortran compiler flags
#
#FCFLAGS_HINTS="-ffree-line-length-none"

# Fortran linker custom debug flags (when with_debug_flavor=custom)
#
#FC_LDFLAGS_DEBUG="-Wl,-debug"

# Fortran linker custom optimization flags (when with_optim_flavor=custom)
#
#FC_LDFLAGS_OPTIM="-Wl,-ipo"

# Fortran linker custom flags
#
#FC_LDFLAGS_EXTRA="-Bstatic"

# Forced Fortran linker flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#FC_LDFLAGS="-Bstatic"

# Fortran linker custom debug libraries (when with_debug_flavor=custom)
#
#FC_LIBS_DEBUG="-ldebug"

# Fortran linker custom optimization libraries (when with_optim_flavor=custom)
#
#FC_LIBS_OPTIM="-lopt_funcs"

# Fortran linker additional custom libraries
#
#FC_LIBS_EXTRA="-lsvml"

# Forced Fortran linker libraries
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#FC_LIBS="-lstdc++ -ldl"

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

# Set per-directory Fortran optimizations (useful when a Fortran compiler
# crashes during the build)
#
# Note: this option is not available through the command line
#
#fcflags_opt_95_drive="-O0"

# -------------------------------------------------------------------------- #
# Python support                                                             #
# -------------------------------------------------------------------------- #

# Flags to pass to the Python interpreter (default is unset)
#
#PYFLAGS="-B"

# Preprocessing flags for C/Python bindings
#
#PYTHON_CPPFLAGS="-I/usr/local/include/numpy"

# -------------------------------------------------------------------------- #
# Libraries and linking                                                      #
# -------------------------------------------------------------------------- #

# Set archiver name
#
#AR="xiar"

# Archiver custom debug flags (when with_debug_flavor=custom)
#
#ARFLAGS_DEBUG=""

# Archiver custom optimization flags (when with_optim_flavor=custom)
#
#ARFLAGS_OPTIM=""

# Archiver additional custom flags
#
#ARFLAGS_EXTRA="-X 64"

# Forced archiver flags
# Note: will override build-system configuration - USE AT YOUR OWN RISKS!
#
#ARFLAGS="-X 32_64"

                       # ------------------------------ #

# Note: the following definitions are necessary for MINGW/WINDOW$ only
#       and should be left unset on other architectures

# Archive index generator
#RANLIB="ranlib"

# Object symbols lister
#NM="nm"

# Generic linker
#LD="ld"

# Language-independent libraries to add to the build configuration
#LIBS="-lstdc++ -lpython2.7"

# -------------------------------------------------------------------------- #
# MPI support                                                                #
# -------------------------------------------------------------------------- #

# Determine whether to build parallel code (default is auto)
#
# Permitted values:
#
#   * no       : disable MPI support
#   * yes      : enable MPI support, assuming the compiler is MPI-aware
#   * <prefix> : look for MPI in the <prefix> directory
#
# If left unset, the build system will take all appropriate decisions by
# itself, and MPI will be enabled only if the build environment supports
# it. If set to "yes", the configure script will stop if it does not find
# a working MPI environment.
#
# Note:
#
#   * the build system expects to find subdirectories named bin/, lib/,
#     include/ under the prefix.
#
with_mpi="yes"

# Define MPI flavor (optional, only useful on some systems)
#
# Permitted values:
#
#   * auto         : Let the build system configure MPI (recommended).
#
#   * double-wrap  : Internally wrap the MPI compiler wrappers, only for
#                    severely bugged and oldish MPI implementations.
#
#   * flags        : Do not look for MPI compiler wrappers, only use
#                    compiler flags to enable MPI.
#
#   * native       : Assume that the compilers have native MPI support.
#
#   * prefix       : Assume that MPI wrappers are located under
#                    specified prefix and exclude any other
#                    configuration.
#
with_mpi_flavor="auto"

# Activate the MPI_IN_PLACE option whenever possible (default is no)
# WARNING: this feature requires MPI2, ignored if the MPI library
# is not MPI2 compliant.
#
#enable_mpi_inplace="no"
enable_mpi_inplace="yes"

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
#enable_mpi_io="yes"
enable_mpi_io="no"

# Enable MPI-IO mode in Abinit (use MPI I/O as default I/O library,
# change the default values of iomode)   
# Beware that not all the features of Abinit support MPI I/O,
# This options is mainly used by developers for debugging purposes.
#
#enable_mpi_io_default="no"

# Set MPI standard level (default is auto-detected)
# Note: all current implementations should support at least level 2
#
# Supported levels:
#
#   * 1 : use 'mpif.h' header
#   * 2 : use mpi Fortran module
#   * 3 : use mpi_f08 Fortran module
#
#with_mpi_level="2"

# C preprocessor flags for MPI (default is unset)
#
#MPI_CPPFLAGS="-I/usr/local/include"

# C flags for MPI (default is unset)
#
#MPI_CFLAGS=""

# C++ flags for MPI (default is unset)
#
#MPI_CXXFLAGS=""

# Fortran flags for MPI (default is unset)
#
#MPI_FCFLAGS=""

# Link flags for MPI (default is unset)
#
#MPI_LDFLAGS=""

# Library flags for MPI (default is unset)
#
#MPI_LIBS="-L/usr/local/lib -lmpi"

# -------------------------------------------------------------------------- #
# GPU support                                                                #
# -------------------------------------------------------------------------- #

# Requirement: go through README.GPU before doing anything
#
# Note: this is highly experimental - USE AT YOUR OWN RISKS!

# Trigger and install prefix for GPU libraries and compilers
#
# Permitted values:
#
#   * no       : disable GPU support
#   * yes      : enable GPU support, assuming the build environment
#                is properly set
#   * <prefix> : look for GPU in the <prefix> directory
#
# Note: The build system expects to find subdirectories named bin/, lib/,
#       include/ under the prefix.
#
#with_gpu="/usr/local/cuda"

# Flavor of the GPU library to use (default is cuda-single)
#
# Supported libraries:
#
#   * cuda-single : Cuda with single-precision arithmetic
#   * cuda-double : Cuda with double-precision arithmetic
#   * none        : not implemented (will replace enable_gpu)
#
#with_gpu_flavor="cuda-double"

# GPU C preprocessor flags (default is unset)
#
#GPU_CPPFLAGS="-I/usr/local/include/cuda"

# GPU C flags (default is unset)
#
#GPU_CFLAGS="-I/usr/local/include/cuda"

# GPU C++ flags (default is unset)
#
#GPU_CXXFLAGS="-std=c++11"

# GPU Fortran flags (default is unset)
#
#GPU_FCFLAGS="-I/usr/local/include/cuda"

# GPU link flags (default is unset)
#
#GPU_LDFLAGS="-L/usr/local/cuda/lib64 -lcublas -lcufft -lcudart"

# GPU link flags (default is unset)
#
#GPU_LIBS="-L/usr/local/cuda/lib64 -lcublas -lcufft -lcudart"

                       # ------------------------------ #

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

# -------------------------------------------------------------------------- #
# Linear algebra support                                                     #
# -------------------------------------------------------------------------- #

# WARNING: when setting the value of the linear algebra flavor to "custom",
#          the associated CPP options may be defined in an impredictable
#          manner by the build system. In such a case, checking which
#          CPP options are enabled by looking at the output of abinit
#          is thus highly recommended before running production
#          calculations.

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
#   * auto      : automatically look for linear algebra libraries
#                 depending on the build environment (default)
#
#   * easybuild : EasyBuild - Building software with ease
#                 https://easybuilders.github.io/easybuild/
#
#   * elpa      : Eigen soLvers for Petaflops Applications
#                 http://elpa.rzg.mpg.de
#
#   * essl      : IBM Engineering and Scientific Subroutine Library
#                 http://www-03.ibm.com/systems/software/essl/
#
#   * magma     : Matrix Algebra on GPU and Multicore Architectures
#                 (MAGMA minimal version>=1.1.0, requires Cuda)
#                 http://icl.cs.utk.edu/magma/
#
#   * mkl       : Intel Math Kernel Library
#                 http://software.intel.com/en-us/articles/intel-mkl/
#
#   * netlib    : Netlib repository reference libraries
#                 http://www.netlib.org/lapack/
#                 http://www.netlib.org/scalapack/
#
#   * none      : just check user-specified libraries, do not try to
#                 detect their type
#
#   * openblas  : OpenBLAS - An Optimized BLAS Library
#                 https://www.openblas.net/
#
#   * plasma    : Parallel Linear Algebra for Scalable Multicore
#                 Architectures (requires MPI)
#                 http://icl.cs.utk.edu/plasma/
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
#   * if with_linalg is set to "no", linear algebra tests will be disabled
#     and the configuration will be assumed to work as-is by the build
#     system (USE AT YOUR OWN RISKS)
#
#   * with_linalg_incs and with_linalg_libs systematically override the
#     contents of with_linalg
#

# Install prefix for linear algebra
#
#with_linalg="/home/olivier/Software/abinit-9.0.3/build/fallbacks/install_fb/gnu/8.3/linalg/abinit_6.10"
#with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/11.3.4.258/mkl"
#with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl"
#with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/mkl"
#with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/MPI/intel2016.4/openmpi2.1/elpa/2017.11.001"
#with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/mkl"
#with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/"
#with_linalg="yes"
#with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222 /cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl /cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/bin /cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/bin cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/include"
# Flavor of linear algebra libraries to use (default is netlib)
#
#with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl"
with_linalg="/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222"
#with_linalg_flavor="mkl"


# C preprocessing flags for linear algebra (default is unset)
#
#LINALG_CPPFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/include -mkl=cluster"
#LINALG_CPPFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/mkl/include"
#LINALG_CPPFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/MPI/intel2016.4/openmpi2.1/elpa/2017.11.001/include"
#LINALG_CPPFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/eigen/3.3.5/include/Eigen/src/misc"

# C flags for linear algebra (default is unset)
#
#LINALG_CFLAGS="-m64 -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/include -mkl=cluster"
#LINALG_CFLAGS="-m64 -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/Compiler/gcc7.3/lapack/3.8.0/include"
#LINALG_CFLAGS="-m64 -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/eigen/3.3.5/include/Eigen/src/misc"
# C++ flags for linear algebra (default is unset)
#
#LINALG_CXXFLAGS="-m64 -I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/include -mkl=cluster"
#LINALG_FCFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/eigen/3.3.5/include/Eigen/src/misc"

# Fortran flags for linear algebra (default is unset)
#
#LINALG_FCFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/mkl/include"
#LINALG_FCFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/MPI/intel2016.4/openmpi2.1/elpa/2017.11.001/include"
#LINALG_FCFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/include/mkl"
#LINALG_FCFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/include -mkl=cluster"
#LINALG_FCFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/eigen/3.3.5/include/Eigen/src/misc"

# Link flags for linear algebra (default is unset)
#
#LINALG_LDFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/include -mkl=cluster"
#LINALG_LDFLAGS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/mkl/lib"
#LINALG_LDFLAGS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/lib"
#LINALG_LDFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/eigen/3.3.5/include/Eigen/src/misc"

# Library flags for linear algebra (default is unset)
#
#LINALG_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/mkl/lib /cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/lib -llapack -lblas"
#LINALG_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/mkl/lib /cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2019.3.199/mkl/include -llapack -lblas -lscalapack"
LINALG_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/lib -llapack -lblas -lscalapack"
#LINALG_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/Core/imkl/2018.3.222/mkl/lib -llapack -lblas"
# -------------------------------------------------------------------------- #
# Optimized FFT support                                                      #
# -------------------------------------------------------------------------- #

# Supported libraries:
#
#   * auto          : select library depending on build environment (default)
#   * custom        : bypass build-system checks
#   * dfti          : native MKL FFT library
#   * fftw3         : serial FFTW3 library
#   * fftw3-threads : threaded FFTW3 library
#   * pfft          : MPI-parallel PFFT library (for maintainers only)
#   * goedecker     : Abinit internal FFT
#
# Notes:
#
#   * only one flavor can be selected at a time, flavors being mutually
#     exclusive
#

# Install prefix for the FFT library
#
#with_fft="/usr/local"
#with_fft="no"

# Flavor of FFT framework to support (default is auto)
#
#with_fft_flavor="dfti"

# C preprocessor flags for the FFT framework (default is unset)
#
#FFT_CPPFLAGS="-I/usr/local/include/fftw"

# C flags for the FFT framework (default is unset)
#
#FFT_CFLAGS="-I/usr/local/include/fftw"

# Fortran flags for the FFT framework (default is unset)
#
#FFT_FCFLAGS="-I/usr/local/include/fftw"

# Link flags for the FFT framework (default is unset)
#
#FFT_LDFLAGS="-L/usr/local/lib/fftw -lfftw3"

# Library flags for the FFT framework (default is unset)
#
#FFT_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/MPI/intel2017.1/openmpi2.0/fftw-mpi/3.3.6/lib -lfftw3"

                       # ------------------------------ #

# Install prefix for the FFTW3 library
#
#with_fftw3="/usr/local"
#with_fftw3="yes"

# C preprocessor flags for the FFTW3 library (default is unset)
#
#FFTW3_CPPFLAGS="-I/usr/local/include/fftw"

# C flags for the FFTW3 library (default is unset)
#
#FFTW3_CFLAGS="-I/usr/local/include/fftw"

# Fortran flags for the FFTW3 library (default is unset)
#
#FFTW3_FCFLAGS="-I/usr/local/include/fftw"

# Link flags for the FFTW3 library (default is unset)
#
#FFTW3_LDFLAGS="-L/usr/local/lib/fftw -lfftw3"

# Library flags for the FFTW3 library (default is unset)
#
#FFTW3_LIBS="-L/usr/local/lib/fftw -lfftw3"

                       # ------------------------------ #

# Install prefix for the PFFT library
#
#with_pfft="/usr/local"

# C preprocessor flags for the PFFT library (default is unset)
#
#PFFT_CPPFLAGS="-I/usr/local/include/fftw"

# C flags for the PFFT library (default is unset)
#
#PFFT_CFLAGS="-I/usr/local/include/fftw"

# Fortran flags for the PFFT library (default is unset)
#
#PFFT_FCFLAGS="-I/usr/local/include/fftw"

# Link flags for the PFFT library (default is unset)
#
#PFFT_LDFLAGS="-L/usr/local/lib/fftw -lfftw3"

# Library flags for the PFFT library (default is unset)
#
#PFFT_LIBS="-L/usr/local/lib/fftw -lfftw3"

# -------------------------------------------------------------------------- #
# Feature triggers                                                           #
# -------------------------------------------------------------------------- #

# Through feature triggers, the build system of Abinit tries to link
# prioritarily with external libraries to provide the requested
# functionality. When unsuccessful, Abinit will run in degraded mode,
# which means that it will provide poor performance and scalability, as
# well as refuse to run some standard calculations. However, in some
# cases, for historical reasons, it can resort to a limited internal
# implementation.
#
# Enabling feature triggers is necessary for packaging and is recommended
# in most other cases. Relying upon external optimized libraries is always
# smarter than embedding their source code, as their performance and
# integration within the local environment are always significantly
# better.
#
# The following optional dependencies are sorted by alphabetical order.
# Please note that some of them may depend on others, as indicated.

# Notes:
#
#   * when specifying with_package="prefix", the build system automatically
#     looks for the relevant libraries in prefix/include and prefix/lib
#
#   * the 'with_package' options can also be set to yes or no, to let the
#     build system find out the corresponding parameters on plaftorms where
#     the external packages are available system-wide
#
#   * the 'with_package_incs' and 'with_package_libs' options systematically
#     override the settings provided by corresponding 'with_package' options
#

                       # ------------------------------ #

# BigDFT (depends on LibXC, see below)
# Website: http://bigdft.org/

# Enable BigDFT support (default is no)
#
#with_bigdft="yes"

# Fortran flags for BigDFT (default is unset)
#
#BIGDFT_FCFLAGS="-I/usr/local/include/bigdft"

# Link flags for BigDFT (default is unset)
#
#BIGDFT_LDFLAGS=""

# Library flags for BigDFT (default is unset)
#
#BIGDFT_LIBS="-L/usr/local/lib/bigdft -lbigdft -lpoissonsolver -labinit"

                       # ------------------------------ #

# Levenberg-Marquardt algorithm
# Website: http://users.ics.forth.gr/~lourakis/levmar/

# Trigger and install prefix for Levmar (default is unset)
#
#with_levmar="yes"

# C preprocessor flags for Levmar (default is unset)
#
#LEVMAR_CPPFLAGS="-I/opt/etsf/include"

# C flags for Levmar (default is unset)
#
#LEVMAR_CFLAGS="-I/opt/etsf/include"

# Fortran flags for Levmar (default is unset)
#
#LEVMAR_FCFLAGS="-I/opt/etsf/include"

# Link flags for Levmar (default is unset)
#
#LEVMAR_LDFLAGS=""

# Library flags for Levmar (default is unset)
#
#LEVMAR_LIBS="-L/opt/etsf/lib -llevmar"

                       # ------------------------------ #

# LibXC
# Website: http://www.tddft.org/programs/octopus/wiki/index.php/Libxc

# Trigger and install prefix for LibXC (default is unset)
#
#with_libxc=yes
with_libxc="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx2/Compiler/intel2018.3/libxc/4.3.4"

# C preprocessor flags for LibXC (default is unset)
#
#LIBXC_CPPFLAGS="-I/usr/local/include"

# C flags for LibXC (default is unset)
#
#LIBXC_CFLAGS="-I/usr/local/include"

# Fortran flags for LibXC (default is unset)
#
#LIBXC_FCFLAGS="-I/usr/local/include"

# Link flags for the LibXC library (default is unset)
#
#LIBXC_LDFLAGS=""

# Library flags for LibXC (default is unset)
#
#LIBXC_LIBS="-L/usr/local/lib -lxcf90 -lxc"

                       # ------------------------------ #

# LibXML2
# Website: http://www.xmlsoft.org/

# Trigger and install prefix for LibXML2 (default is unset)
#
#with_libxml2="/usr/local"

# C preprocessor flags for LibXML2 (default is unset)
#
#LIBXML2_CPPFLAGS="-I/usr/local/include"

# C flags for LibXML2 (default is unset)
#
#LIBXML2_CFLAGS="-I/usr/local/include"

# Fortran flags for LibXML2 (default is unset)
#
#LIBXML2_FCFLAGS="-I/usr/local/include"

# Link flags for the LibXML2 library (default is unset)
#
#LIBXML2_LDFLAGS=""

# Library flags for LibXML2 (default is unset)
#
#LIBXML2_LIBS="-L/usr/local/lib -lxcf90 -lxc"

                       # ------------------------------ #

# HDF5
# Website: https://www.hdfgroup.org/

# Trigger and install prefix for HDF5 (default is unset)
#
#with_hdf5="yes"
#with_hdf5="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/hdf5-mpi/1.10.3"
with_hdf5="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3"

# Location of the h5cc (or h5pcc) compiler (default is unset)
#
# Note: This parameter can greatly help the build system of ABINIT in
#       selecting the correct version of HDF5.
#
#H5CC="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/hdf5-mpi/1.10.3/bin/h5pcc"
H5CC="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/hdf5/1.10.3/bin/h5cc"

# C preprocessing flags for HDF5 (default is unset)
#
#HDF5_CPPFLAGS="-I/opt/hdf5/latest/hdf5/include"

# C flags for HDF5 (default is unset)
#
#HDF5_CFLAGS="-std=c99"

# Fortran flags for HDF5 (default is unset)
#
#HDF5_FCFLAGS="-I/usr/local/include/hdf5"

# Link flags for HDF5 (default is unset)
#
#HDF5_LDFLAGS=""

# Library flags for HDF5 (default is unset)
#
#HDF5_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/hdf5-mpi/1.10.3/lib -lhdf5 -lhdf5_hl"

                       # ------------------------------ #

# NetCDF
# Website: http://www.unidata.ucar.edu/software/netcdf/

# Trigger and install prefix for NetCDF (default is unset)
#
#with_netcdf="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-mpi/4.6.1"
with_netcdf="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf/4.6.1"
#with_netcdf="yes"

# C preprocessing flags for NetCDF (default is unset)
#
#NETCDF_CPPFLAGS="-I/usr/local/include/netcdf"
#NETCDF_CPPFLAGS="-I/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-mpi/4.6.1/include"

# C flags for NetCDF (default is unset)
#
#NETCDF_CFLAGS="-std=c99"

# Fortran flags for NetCDF (default is unset)
#
#NETCDF_FCFLAGS="-I/usr/local/include/netcdf"

# Link flags for NetCDF (default is unset)
#
#NETCDF_LDFLAGS=""

# Library flags for NetCDF (default is unset)
#
#NETCDF_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-mpi/4.6.1/lib64 /cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-mpi/4.6.1/include -lnetcdf"
#NETCDF_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-mpi/4.6.1/lib -lnetcdf"

# Enable Netcdf mode in Abinit (use netcdf as default I/O library,
# change the default values of accesswff)   
#
#enable_netcdf_default="yes"
#enable_netcdf_default="no"

                       # ------------------------------ #

# NetCDF-Fortran
# Website: http://www.unidata.ucar.edu/software/netcdf/

# Trigger and install prefix for NetCDF-Fortran (default is unset)
#
#with_netcdf_fortran="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-fortran-mpi/4.5.1"
with_netcdf_fortran="/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/Compiler/intel2018.3/netcdf-fortran/4.4.4"
#with_netcdf_fortran=yes

# C preprocessing flags for NetCDF-Fortran (default is unset)
#
#NETCDF_FORTRAN_CPPFLAGS="-I/usr/local/include/netcdf_fortran"
#NETCDF_FORTRAN_CPPFLAGS="-I/usr/local/include"
# C flags for NetCDF-Fortran (default is unset)
#
#NETCDF_FORTRAN_CFLAGS="-I/usr/include"

# Fortran flags for NetCDF-Fortran (default is unset)
#
#NETCDF_FORTRAN_FCFLAGS="-I/usr/local/include/netcdf_fortran"
#NETCDF_FORTRAN_FCFLAGS="-I/usr/lib64/gfortran/modules"
#NETCDF_FORTRAN_FCFLAGS="-I/usr/lib64/gfortran/modules/openmpi"
#NETCDF_FORTRAN_FCFLAGS="-I/lib64"
#NETCDF_FORTRAN_FCFLAGS="-I/usr/lib64"

# Link flags for NetCDF-Fortran (default is unset)
#
#NETCDF_FORTRAN_LDFLAGS=""

# Library flags for NetCDF-Fortran (default is unset)
#
#NETCDF_FORTRAN_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-fortran-mpi/4.5.1/lib -lnetcdff"
#NETCDF_FORTRAN_LIBS="-L/cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-fortran-mpi/4.5.1/include /cvmfs/soft.computecanada.ca/easybuild/software/2017/avx512/MPI/intel2018.3/openmpi3.1/netcdf-fortran-mpi/4.5.1/lib -lnetcdff"

                       # ------------------------------ #

# Enable LibPSML support (default is no)
#
#with_libpsml="${FALLBACKS_HOME}_9.0/${FB}/libpsml/1.1.7"

# Fortran flags for the LibPSML library (default is unset)
#
#LIBPSML_FCFLAGS="-I/usr/local/libpsml-1.1.7/include"

# Link flags for the LibPSML library (default is unset)
#
#LIBPSML_LDFLAGS=""

# Library flags for LibPSML (default is unset)
#
#LIBPSML_LIBS="-L/usr/local/libpsml-1.1.7/lib -lpsml"

                       # ------------------------------ #

# TRIQS DMFT library (for CTQMC and rotationally invariant interaction)
# Website: https://triqs.ipht.cnrs.fr/1.x/index.html

# Trigger and install prefix for TRIQS (default is unset)
#
#with_triqs="/usr/local"

# Allow Fortran programs to call Python
#
#enable_python_invocation="yes"

# Select the 1.4 version of TRIQS
#
#enable_triqs_v1_4="yes"

# Select the 2.0 version of TRIQS
#
#enable_triqs_v2_0="yes"

# C++ flags for the TRIQS library (default is unset)
#
#TRIQS_CXXFLAGS="-I/usr/local/triqs/include -I/usr/local/cthyb/src/c++"

# Fortran flags for the TRIQS library (default is unset)
#
#TRIQS_FCFLAGS="-I/usr/local/triqs/include -I/usr/local/cthyb/src/c++"

# Link flags for the TRIQS library (default is unset)
#
#TRIQS_LDFLAGS="-L/usr/local/triqs/lib -ltriqs -lcthyb_c"

# Link flags for the TRIQS library (default is unset)
#
#TRIQS_LIBS="-L/usr/local/triqs/lib -ltriqs -lcthyb_c"

                       # ------------------------------ #

# Enable Wannier90 support (default is no)
#
#with_wannier90="${FALLBACKS_HOME}_9.0/${FB}/wannier90/2.0.1.1"

# Fortran flags for the Wannier90 library (default is unset)
#
#WANNIER90_FCFLAGS="-I/usr/local/include/wannier90"

# Link flags for the Wannier90 library (default is unset)
#
#WANNIER90_LDFLAGS=""

# Link flags for the Wannier90 library (default is unset)
#
#WANNIER90_LIBS="-L${HOME}/lib/wannier90 -lwannier90"

                       # ------------------------------ #

# Enable XMLF90 support (default is no)
#
#with_xmlf90="${FALLBACKS_HOME}_9.0/${FB}/xmlf90/1.5.3.1"

# Fortran flags for the XMLF90 library (default is unset)
#
#XMLF90_FCFLAGS="-I/usr/local/include"

# Link flags for the LibPSML library (default is unset)
#
#XMLF90_LDFLAGS=""

# Link flags for the LibPSML library (default is unset)
#
#XMLF90_LIBS="-L/usr/local/lib -lxmlf90"

# -------------------------------------------------------------------------- #
# Profiling and performance analysis                                         #
# -------------------------------------------------------------------------- #

# Enable internal Abinit timer (default is yes)
#
#enable_timer="no"

# Enable PAPI support (default is no)
#
#with_papi="yes"

# C preprocessor flags for the PAPI library (default is unset)
#
#PAPI_CPPFLAGS="-I/usr/local/include/papi"

# C flags for the PAPI library (default is unset)
#
#PAPI_CFLAGS="-I/usr/local/include/papi"

# Fortran flags for the PAPI library (default is unset)
#
#PAPI_FCFLAGS="-I/usr/local/include/papi"

# Link flags for the PAPI library (default is unset)
#
#PAPI_LDFLAGS=""

# Library flags for the PAPI library (default is unset)
#
#PAPI_LIBS="-L/usr/local/lib/papi -lpapi"

# -------------------------------------------------------------------------- #
# Fallbacks                                                                  #
# -------------------------------------------------------------------------- #

# Fallbacks are external packages pre-built together for Abinit, in order to
# partly compensate for the absence of required external packages. If used,
# they will provide lower reliability, performance and scalability than the
# proper installation of the full-fledged corresponding packages. In any case,
# they should not be used in production.
#
# Fallbacks are enabled when the "with_fallbacks" option below points to
# an existing and readable directory. If this is not the case, failed
# detections of external packages will cause configure to abort.
#
# Example: if you set with_fallbacks="/path/to/fallbacks", the
# build system of Abinit will look for:
#
#   * executables in /path/to/fallbacks/bin/
#   * C headers and Fortran modules in /path/to/fallbacks/include/
#   * libraries in /path/to/fallbacks/lib/
#
# when it cannot detect properly installed external packages.
#
# Please note that this mechanism will work only if you have built and
# installed the fallbacks you need beforehand. You can have a look at
# the following helper script after running configure for more
# information:
#
#   ~abinit-builddir/fallbacks/build-abinit-fallbacks.sh
#
# Comprehensive documentation about how to use external packages properly
# and build fallbacks can be found on the Abinit Wiki, at:
#
#   https://wiki.abinit.org/
#

# Prefix for already installed fallbacks (default is unset)
#
#with_fallbacks="/opt/abinit-dev/fallbacks/gnu/4.9/mpi"

# -------------------------------------------------------------------------- #
# Build workflow                                                             #
# -------------------------------------------------------------------------- #

# Note: if you do not know what the following is about, just leave it unset.

# Use external ABINIT Common (default is no)
#
#with_abinit_common="yes"

# Fortran flags for ABINIT Common (default is unset)
#
#ABINIT_COMMON_FCFLAGS="-I/usr/local/include/abinit_common"

# Link flags for ABINIT Common (default is unset)
#
#ABINIT_COMMON_LDFLAGS=""

# Library flags for ABINIT Common (default is unset)
#
#ABINIT_COMMON_LIBS="-L${HOME}/abinit/lib -labinit_common"

                       # ------------------------------ #

# Use external LibPAW (default is no)
#
#with_libpaw="yes"

# C preprocessing flags for LibPAW (default is unset)
#
#LIBPAW_CPPFLAGS="-I/usr/local/include/libpaw"

# C flags for LibPAW (default is unset)
#
#LIBPAW_CFLAGS="-std=c99"

# Fortran flags for LibPAW (default is unset)
#
#LIBPAW_FCFLAGS="-I/usr/local/include/libpaw"

# Link flags for LibPAW (default is unset)
#
#LIBPAW_LDFLAGS=""

# Library flags for LibPAW (default is unset)
#
#LIBPAW_LIBS="-L${HOME}/abinit_shared/lib -lpaw"

# -------------------------------------------------------------------------- #
# Developer options                                                          #
# -------------------------------------------------------------------------- #

# Note: all the following options are disabled by default because they
#       enable the build of highly experimental code (i.e. they have
#       the complementary default values to those displayed below)
#
# Uncomment the following lines at your own risks

# Enable BSE unpacking (gmatteo)
#
#enable_bse_unpacked="yes"

# Enable optimized cRPA build for ifort <=17 (routerovitch)
#
#enable_crpa_optim="yes"

# Enable exports (pouillon)
#
#enable_exports="yes"

# Enable double precision for GW calculations (gmatteo)
#
#enable_gw_dpc="yes"

# Use tetrahedrons from Libtetra (torrent)
#
#enable_libtetra="yes"

# Enable lotf (mancini)
#
#enable_lotf="yes"

# Enable memory profiling (waroquiers)
#
#enable_memory_profiling="yes"

# Enable OpenMP (gmatteo, torrent)
#
#enable_openmp="yes"

# Enable ZDOTC and ZDOTU bugfix (gmatteo)
#
#enable_zdot_bugfix="yes"

# -------------------------------------------------------------------------- #
# Maintainer options                                                         #
# -------------------------------------------------------------------------- #

# Fortran compiler vendor to be used by the build system (default is unset)
#
# Note: do not use if you do not know what it is about
#
#with_fc_vendor="dummy"

# Fortran compiler version to be used by the build system (default is unset)
#
# Note: do not use if you do not know what it is about
#
#with_fc_version="0.0"

# Build debugging instructions present in the source code
#
#enable_source_debug="yes"
