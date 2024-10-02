prefix="/home/johnnyw/modl"
enable_mpi="yes"
enable_mpi_io="yes"
with_mpi_prefix="/usr"
with_trio_flavor="netcdf+etsf_io"
with_netcdf_incs="-I/usr/include"
with_netcdf_libs="-L/usr/lib -lnetcdf -lnetcdff"
with_etsf_io_incs="-I/usr/include"
with_fft_flavor="fftw3"
with_fft_incs="-I/usr/include/"
with_fft_libs="-L/usr/lib/x86-64-linux-gnu/ -lfftw3 -lfftw3f"
with_linalg_flavor="atlas"
with_linalg_libs="-L/usr/lib -llapack -lf77blas -lcblas -latlas"
with_dft_flavor="atompaw+libxc"
with_dft_flavor="atompaw+bigdft+libxc+wannier90"
enable_gw_dpc="yes"




