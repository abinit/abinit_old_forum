# Installation
From a fresh Ubuntu installation
```
sudo apt install gcc g++ gfortran
sudo apt install patch

sudo apt install libetsf-io-dev libnetcdf-dev
sudo apt install libfftw3-dev

sudo apt install libatlas-base-dev libatlas3-base
sudo apt install liblapack3 liblapack-dev
sudo apt install libblas3 libblas-dev
```
If you do not use Ubuntu, check for similar with your installer.
If you used your system before, check for updates.

1. Download _Open MPI_ from <https://www.open-mpi.org/software/ompi/v4.0/>. Use the `.tar.gz` file.
  - Head to the Download directory.
  - If you have a different version, adapt it. It worked with 3.1.3 under Ubuntu 18.04, 4.0.1 is used here, worked with Ubuntu 19.04.
  ```
    gunzip -c openmpi-4.0.1.tar.gz | tar xf -
    cd openmpi-4.0.1
    ./configure --prefix=/usr/local
    <...lots of output..>
    make all install
    <...more output...>
    ```
  - In the Output of the last command maybe something along the lines of
  ```
  can not create directory /*/*: Permission denied
  /usr/bin/install: cannot create regular file '/usr/****': Permission denied
  ```
  then restart the last process with
  `sudo make all install`

2. Select a version from https://www.abinit.org/packages.
  - Here 8.10.3 (Ubuntu 19.04), [8.10.1 for 18.04]
    ```
    cp ~/Downloads/abinit-8.10.3.tar.gz /the/directory/you/want
    tar xzf abinit-8.10.3.tar.gz
    cd abinit-8.10.3
    touch ubuntu.ac
    gedit ubuntu.ac &
    ```
  - Copy & paste the following lines into _ubuntu.ac_
  ```
  FC=mpif90
  CC=mpicc
  CXX=mpic++
  enable_mpi="yes"
  enable_mpi_io="yes"
  with_mpi_prefix="/usr/local"
  with_trio_flavor="netcdf"
  with_netcdf_incs="-I/usr/include"
  with_netcdf_libs="-L/usr/lib/x86_64-linux-gnu/ -lnetcdf -lnetcdff"
  with_fft_flavor="fftw3"
  with_fft_incs="-I/usr/include/"
  with_fft_libs="-L/usr/lib/x86_64-linux-gnu/ -lfftw3 -lfftw3f"
  with_linalg_flavor="atlas"
  with_linalg_libs="-L/usr/lib/x86_64-linux-gnu/ -llapack -lf77blas -lcblas -latlas"
  with_dft_flavor="atompaw+libxc+wannier90"
  enable_gw_dpc="yes"
  ```
  - If you are not sure about the paths use the following commands.
  It will show, where the programs are.
  For the libaries, look for `libfftw3`, when searching for `-lfftw3`.
  ```
  which mpirun
  which mpif90
  which mpicc
  which mpic++
  ls /usr/include
  # look for netcdf.h netcdf.inc
  ```
  - save the file

3. Prepare the installation with copying the file _m_libpaw_mpi.F90.patch_
    to the main abinit directory. Then run the following commands
  ```
  cd src/42_libpaw
  mv ../../m_libpaw_mpi.F90.patch .
  cp -a m_libpaw_mpi.F90 m_libpaw_mpi.F90.orig
  patch m_libpaw_mpi.F90 m_libpaw_mpi.F90.patch
  sed -i 's/xpaw_mpi_get_tag_ub(spaceComm)/xpaw_mpi_tag_ub/g' m_libpaw_mpi.F90
  ```
  For 18.04 use the patch file from https://forum.abinit.org/viewtopic.php?f=19&t=3935&p=11850

  Then you can proceed with the installation
  ```
  ./configure --with-config-file="./ubuntu.ac"
  ```
  find the number of cores on your computer `nproc`, in my case 4.
  ```
  make multi multi_nprocs=4
  ```
4. Now it is possible to finally install abinit
  ```
  make install
  ```
  **or**
5. Testing
  ```
  cd tests
  ./runtests.py -j 4 fast
  ./runtests.py -n 2 -j 2
  ```
  Then install with
  ```
  make install
  ```
6. Add the following lines to your `.bashrc`:
  ```
  # paths for abinit calculations

  export ABI_HOME=/home/henning/builds/abinit-8.10.1-par

  export ABI_TESTS=$ABI_HOME/tests/

  export ABI_TUTORIAL=$ABI_TESTS/tutorial/           # Files for base1-2-3-4, GW ...
  export ABI_TUTORESPFN=$ABI_TESTS/tutorespfn/       # Files specific to DFPT tutorials.
  export ABI_TUTOPARAL=$ABI_TESTS/tutoparal/         # Tutorials about parallel version
  export ABI_TUTOPLUGS=$ABI_TESTS/tutoplugs/         # Examples using external libraries.
  export ABI_PSPDIR=$ABI_TESTS/Psps_for_tests/       # Pseudos used in examples.

  export PATH=$ABI_HOME/src/98_main/:$PATH

  export ABI_RAMAN=$ABI_HOME/scripts/post_processing/Raman_spec.py
  ```
