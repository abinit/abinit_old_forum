enable_mpi="yes"
enable_mpi_io="yes"
#with_mpi_prefix='/home/ucl/naps/ygillet/tools/openmpi-1.6.5-intel13'
#with_mpi_prefix='/usr/local/intel/ics_2013.0.028/impi/4.1.0.024'
with_mpi_incs='-I/usr/local/intel/ics_2013.0.028/impi/4.1.0.024/include64/'
with_mpi_libs='-L/usr/local/intel/ics_2013.0.028/impi/4.1.0.024/lib64 -lmt_mpi'
enable_64bit_flags="yes"
enable_mpi = "no"
AR=ar
#FC="ifort"
#CC="icc"
#CXX="icpc"
FC="mpiifort"
CC="mpiicc"
CXX="mpicxx"

#FC="mpif90"
#CC="mpicc"
#CXX="mpicxx"

enable_clib="yes"
with_fft_flavor="dfti-threads"
with_fft_libs="-L/usr/local/intel/ics_2013.0.028/composer_xe_2013.1.117/mkl/lib/intel64  -Wl,--start-group -lmkl_intel_lp64 -lmkl_core -lmkl_intel_thread -Wl,--end-group -lpthread -lm"

with_linalg_flavor="mkl"
with_linalg_libs="-L/usr/local/intel/ics_2013.0.028/composer_xe_2013.1.117/mkl/lib -Wl,--start-group -lmkl_intel_lp64 -lmkl_core -lmkl_intel_thread -Wl,--end-group -lpthread -lm"

with_netcdf_incs="-I/usr/local/netcdf/intel/64/3.6.0/include"
with_netcdf_libs="-L/usr/local/netcdf/intel/64/3.6.0/lib -lnetcdf -lnetcdff"

with_trio_flavor="netcdf+etsf_io"

with_dft_flavor="libxc"

enable_gw_dpc="yes"
enable_openmp="yes"
