#MODULES

ml purge
ml load FFTW/3.3.7-gompi-2018a libxc/3.0.0-GCC-6.3.0-2.27 ScaLAPACK/2.0.2-gompi-2018a-OpenBLAS-0.2.20

#ABINIT 8.10.1 CONFIG
./configure --prefix=/home/acamm/bin/abinit-8.10.1_a \
 --enable-mpi --enable-optim="aggressive" \
 --enable-mpi-io \
 --enable-mpi-inplace \
 --with-fft-flavor="fftw3-mpi" \
 --with-fft-libs="-lfftw3 -lfftw3f -lfftw3_mpi -lfftw3f_mpi -lfftw3_threads -lfftw3f_threads" \
 --with-fft-incs="-I/apps/all/FFTW/3.3.7-gompi-2018a/include" \
 --with-linalg-libs="-lscalapack -lopenblas" \
 --with-dft-flavor="libxc" \
 --with-libxc-libs="-lxcf90 -lxc" \
 --with-libxc-incs="-I/apps/all/libxc/3.0.0-GCC-6.3.0-2.27/include" \
 FC=mpif90 \
 CC=mpicc \
 CXX=mpicxx 

