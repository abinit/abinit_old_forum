#!/bin/sh
#PBS -N configure
#PBS -l nodes=1:ppn=1
#PBS -l walltime=1:00:00
#PBS -j oe

np=`wc -l < $PBS_NODEFILE`
nn=`sort -u $PBS_NODEFILE | wc -l`
echo Number of nodes is $nn
echo Number of processors is $np

cd $PBS_O_WORKDIR


### run the tests
../configure \
  --with-linalg-type="mkl" \
  --with-linalg-libs="-lmkl_intel_lp64 -lmkl_sequential -lmkl_core" \
  --program-suffix="-mpi" \
  --enable-mpi \
  --enable-mpi-io \
  --enable-scalapack \
  --with-scalapack-libs="-lmkl_scalapack_lp64  -lmkl_blacs_lp64" \
  --with-netcdf-includes="-I/soft/netcdf/4.0.1-intel-11-serial/include" \
  --with-netcdf-libs="-L/soft/netcdf/4.0.1-intel-11-serial/lib -lnetcdf" \
  FC=mpif90 CC=mpicc CXX=mpicxx
make
