#!/bin/bash

#---------------- Set versions ------------
abinit_V=7.8.2
etsf_io_V=1.0.4
libxc_V=2.0.3
atompaw_V=4.0.0.8
fox_V=4.1.2
#---------------- Set versions ------------

# Creat install directory
INSTALLDIR=$HOME/Codes

mkdir -p $HOME/Downloads

function action {
local LEN=$(bc <<< "((${#1}+1)/2)*2")
local PADDING=$(bc <<< "(80-8-$LEN)/2")
echo "================================================================================"
printf "%4s%${PADDING}s%${LEN}s%${PADDING}s%4s\n" "====" " " "$1" " " "===="
echo "================================================================================"
}

# Install libraries available in synaptic.
function standard {
action "Install standard libraries"
sudo apt-get -y install \
  wget \
  tar \
  make \
  gfortran \
  gcc \
  g++ \
  patch \
  libopenmpi-dev \
  openmpi-bin \
  libfftw3-3 \
  libfftw3-dev \
  libnetcdf-dev \
  libatlas-dev \
  libatlas3-base \
  libatlas3gf-base \
  libatlas-base-dev \
  liblapack-dev
}

# Install Fox
function fox {
action "Install FoX"
cd $HOME/Downloads/
[ -e FoX-${fox_V}.tar.gz ] || wget -O FoX-${fox_V}.tar.gz "http://forge.abinit.org/fallbacks/FoX-${fox_V}.tar.gz" || return 1
tar xfz FoX-${fox_V}.tar.gz 
cd FoX-${fox_V}/
./configure --prefix=$INSTALLDIR/FoX-${fox_V} --enable-fast --enable-wxml --enable-wcml --enable-wkml --enable-sax --enable-dom FC=gfortran || return 1
make || return 1
make install || return 1
}

# Install libxc
function libxc {
action "Install libXC"
cd $HOME/Downloads/
[ -e libxc-${libxc_V}.tar.g ] || wget -O libxc-${libxc_V}.tar.gz "http://www.tddft.org/programs/octopus/down.php?file=libxc/libxc-${libxc_V}.tar.gz" || return 1
tar xfz libxc-${libxc_V}.tar.gz 
cd libxc-${libxc_V}/
./configure --prefix=$INSTALLDIR/libxc-${libxc_V} --enable-static --disable-shared || return 1
make || return 1
make install || return 1
}

# Install AtomPaw
function atompaw {
action "Install AtomPaw"
cd $HOME/Downloads/
[ -e atompaw-${atompaw_V}.tar.gz ] || wget -O atompaw-${atompaw_V}.tar.gz "http://users.wfu.edu/natalie/papers/pwpaw/atompaw-${atompaw_V}.tar.gz" || return 1
tar xfz atompaw-${atompaw_V}.tar.gz 
cd atompaw-${atompaw_V}/
./configure --prefix=$INSTALLDIR/atompaw-${atompaw_V} --enable-libxc --with-libxc-incs="-I$INSTALLDIR/libxc-${libxc_V}/include" --with-libxc-libs="-L$INSTALLDIR/libxc-${libxc_V}/lib -lxc" --with-linalg-flavor="atlas" --enable-static --disable-shared || return 1
make || return 1
make install || return 1
}

# Install etsf_io
function etsf_io {
action "Install ETSF_IO"
cd $HOME/Downloads/
[ -e etsf_io-${etsf_io_V}.tar.gz ] || wget -O etsf_io-${etsf_io_V}.tar.gz "http://forge.abinit.org/fallbacks/etsf_io-${etsf_io_V}.tar.gz" || return 1
tar xfz etsf_io-${etsf_io_V}.tar.gz 
cd etsf_io-${etsf_io_V}/
./configure --prefix=$INSTALLDIR/etsf_io-${etsf_io_V} --with-netcdf-libs="-L/usr/lib -lnetcdf -lnetcdff" || return 1
make || return 1
make install || return 1
}

# Install abinit
function abinit {
action "Install Abinit"
cd $HOME/Downloads/
[ -e abinit-${abinit_V}.tar.gz ] || wget -O abinit-${abinit_V}.tar.gz "http://ftp.abinit.org/abinit-${abinit_V}.tar.gz" || return 1
tar xfz abinit-${abinit_V}.tar.gz 
cd abinit-${abinit_V}/
mkdir build
cd build/
cat > $HOSTNAME.ac << EOF
FC=mpif90
CC=mpicc
CPP=cpp

#FCFLAGS_EXTRA="-O3 -ffast-math -funroll-loops -march=native -mtune=native"

enable_parallel=yes
enable_mpi=yes
enable_mpi_io=yes
with_mpi_level=2

enable_64bit_flags=no
enable_optim=yes
enable_debug=no

with_trio_flavor="netcdf+etsf_io+fox"
with_fox_incs="-I$INSTALLDIR/FoX-${fox_V}/finclude"
with_fox_libs="-L$INSTALLDIR/FoX-${fox_V}/lib -lFoX_wkml -lFoX_dom -lFoX_sax -lFoX_wcml -lFoX_wxml -lFoX_common -lFoX_utils -lFoX_fsys"
with_netcdf_incs="-I/usr/include"
with_netcdf_libs="-L/usr/lib -lnetcdf -lnetcdff"
with_etsf_io_incs="-I$INSTALLDIR/etsf_io-${etsf_io_V}/include/gcc"
with_etsf_io_libs="-L$INSTALLDIR/etsf_io-${etsf_io_V}/lib -letsf_io_utils -letsf_io"

with_dft_flavor="atompaw+libxc"
with_atompaw_bins="$INSTALLDIR/atompaw-${atompaw_V}/bin"
with_atompaw_libs="-L$ISNTALLDIR/atompaw-${atompaw_V}/lib -latompaw"
with_libxc_incs="-I$INSTALLDIR/libxc-${libxc_V}/include"
with_libxc_libs="-L$INSTALLDIR/libxc-${libxc_V}/lib -lxc"

with_linalg_flavor="atlas"

with_fft_flavor="fftw3"
with_fft_incs="-I/usr/include"
with_fft_libs="-L/use/lib -lfftw3 -lfftw3f"

prefix=$INSTALLDIR/abinit-${abinit_V}

EOF
../configure --with-config-file=$HOSTNAME.ac || return 1 
make multi multi_nprocs=4 || return 1
make install || return 1
}

if [ $# -eq 0 ] 
then
  standard || exit 1
  fox || exit 1
  etsf_io || exit 1
  libxc || exit 1
  atompaw || exit 1
  abinit || exit 1
else
  for f in $@
  do
    $f
  done
fi

action "DONE"
