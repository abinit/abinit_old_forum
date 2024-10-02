le
config.status: creating doc/www/tutorials/Makefile

Basics:
  Prefix:                 /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports
  Fortran90 compiler:     /home/temok/opt/openmpi-1.4.2/bin/mpif90
  Fortran90 flags:        -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include 
  Linker flags:            
  Linked libraries:       -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lnetcdf 
  Installed module dir:   /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include
  Installed lib dir:      ${exec_prefix}/lib
  Installed doc dir:      ${datarootdir}/doc/${PACKAGE_TARNAME}

cd sources/etsf_io-1.0.4 && make 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
Making all in src/low_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/low_level'
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I. -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -c -o etsf_io_low_level.o  etsf_io_low_level.f90
rm -f libetsf_io_low_level.a
ar cru libetsf_io_low_level.a etsf_io_low_level.o 
ranlib libetsf_io_low_level.a
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/low_level'
Making all in src/group_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/group_level'
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -I../../src/low_level -I. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -c -o etsf_io.o  etsf_io.f90
rm -f libetsf_io.a
ar cru libetsf_io.a etsf_io.o ../../src/low_level/etsf_io_low_level.o
ranlib libetsf_io.a
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/group_level'
Making all in src/utils
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/utils'
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I../../src/low_level -I../../src/group_level -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -c -o etsf_io_file.o  etsf_io_file.f90
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I../../src/low_level -I../../src/group_level -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -c -o etsf_io_tools.o  etsf_io_tools.f90
rm -f libetsf_io_utils.a
ar cru libetsf_io_utils.a etsf_io_file.o etsf_io_tools.o 
ranlib libetsf_io_utils.a
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I../../src/low_level -I../../src/group_level -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -c -o etsf_io.o  etsf_io.f90
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I../../src/low_level -I../../src/group_level -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -L../../src/group_level -L.  -o etsf_io etsf_io.o -letsf_io_utils -letsf_io -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lnetcdf 
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/utils'
Making all in tests/low_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
make[4]: Nothing to be done for `all'.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
Making all in tests/group_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
make[4]: Nothing to be done for `all'.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
Making all in tests/utils
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/utils'
make[4]: Nothing to be done for `all'.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/utils'
Making all in doc/www
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
Making all in low_level
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
Making all in group_level
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
Making all in tutorials
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
Making all in utils
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[5]: Nothing to be done for `all-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
make[4]: Nothing to be done for `all-am'.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
cd sources/etsf_io-1.0.4 && make install 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
Making install in src/low_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/low_level'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/low_level'
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib"
 /usr/bin/install -c -m 644  libetsf_io_low_level.a '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib'
 ( cd '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib' && ranlib libetsf_io_low_level.a )
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include"
 /usr/bin/install -c -m 644 etsf_io_low_level.mod '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/low_level'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/low_level'
Making install in src/group_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/group_level'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/group_level'
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib"
 /usr/bin/install -c -m 644  libetsf_io.a '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib'
 ( cd '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib' && ranlib libetsf_io.a )
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include"
 /usr/bin/install -c -m 644 etsf_io.mod '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/group_level'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/group_level'
Making install in src/utils
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/utils'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/utils'
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/bin" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/bin"
  /usr/bin/install -c etsf_io '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/bin/./etsf_io-abinit'
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib"
 /usr/bin/install -c -m 644  libetsf_io_utils.a '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib'
 ( cd '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib' && ranlib libetsf_io_utils.a )
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include"
 /usr/bin/install -c -m 644 etsf_io_file.mod etsf_io_tools.mod '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/utils'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/src/utils'
Making install in tests/low_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
Making install in tests/group_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
Making install in tests/utils
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/utils'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/utils'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/utils'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/tests/utils'
Making install in doc/www
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
Making install in low_level
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/low_level" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/low_level"
 /usr/bin/install -c -m 644 etsf_io_low_level_f90.html public_variables_f90.html read_routines_f90.html write_routines_f90.html '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/low_level'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
Making install in group_level
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/group_level" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/group_level"
 /usr/bin/install -c -m 644 etsf_io_dims_def_f90.html etsf_io_dims_get_f90.html etsf_io_dims_merge_f90.html etsf_io_dims_trace_f90.html etsf_io_geometry_def_f90.html etsf_io_electrons_def_f90.html etsf_io_kpoints_def_f90.html etsf_io_basisdata_def_f90.html etsf_io_gwdata_def_f90.html etsf_io_dielectric_def_f90.html etsf_io_main_def_f90.html etsf_io_geometry_get_f90.html etsf_io_electrons_get_f90.html etsf_io_kpoints_get_f90.html etsf_io_basisdata_get_f90.html etsf_io_gwdata_get_f90.html etsf_io_dielectric_get_f90.html etsf_io_main_get_f90.html etsf_io_geometry_put_f90.html etsf_io_electrons_put_f90.html etsf_io_kpoints_put_f90.html etsf_io_basisdata_put_f90.html etsf_io_gwdata_put_f90.html etsf_io_dielectric_put_f90.html etsf_io_main_put_f90.html etsf_io_geometry_copy_f90.html etsf_io_electrons_copy_f90.html etsf_io_kpoints_copy_f90.html etsf_io_basisdata_copy_f90.html etsf_io_gwdata_copy_f90.html etsf_io_dielectric_copy_f90.html etsf_io_main_copy_f90.html etsf_io_split_init_f90.html etsf_io_split_allocate_f90.html etsf_io_split_free_f90.html etsf_io_split_def_f90.html etsf_io_split_get_f90.html etsf_io_split_put_f90.html etsf_io_split_copy_f90.html etsf_io_split_merge_f90.html '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/group_level'
 /usr/bin/install -c -m 644 etsf_io_vars_free_f90.html etsf_io_data_init_f90.html etsf_io_data_read_f90.html etsf_io_data_write_f90.html etsf_io_data_contents_f90.html etsf_io_data_get_f90.html etsf_io_data_copy_f90.html etsf_io_f90.html '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/group_level'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
Making install in tutorials
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/tutorials" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/tutorials"
 /usr/bin/install -c -m 644 convert_to_xyz_f90.html create_a_crystal_den_file_f90.html index.html mix_ETSF_and_non_ETSF_f90.html MPI_output_of_a_density_f90.html read_a_file_f90.html README_f90.html read_write_sub_access_f90.html '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/tutorials'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
Making install in utils
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/utils" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/utils"
 /usr/bin/install -c -m 644 binary.html etsf_io_file_check_dielectric_function_data_f90.html etsf_io_file_check_wavefunctions_data_f90.html etsf_io_file_check_scalar_field_data_f90.html etsf_io_file_check_crystallographic_data_f90.html etsf_io_file_contents_f90.html etsf_io_file_f90.html etsf_io_file_public_f90.html etsf_io_tools_f90.html '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io/utils'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io"
 /usr/bin/install -c -m 644 index.html masterindex.html robo_definitions.html robodoc.css robo_functions.html robo_methods.html robo_modules.html robo_sourcefiles.html robo_strutures.html robo_sub_cat.html robo_tuto_cat.html toc_index.html '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/share/doc/etsf_io'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/etsf_io-1.0.4'
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
Checking build of etsf_io fallback
test -e stamps/etsf_io-install-stamp
make atompaw
make[2]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
cd sources && \
	  gzip -cd /home/temok/.abinit/tarballs/atompaw-3.0.1.3.tar.gz | tar xf -
patch -d sources/atompaw-3.0.1.3 -p1 <../../fallbacks/patches/atompaw-3.0.1.3-0001.patch
patching file src/aeatom.f90
patching file src/atompaw_prog.f90
cd sources/atompaw-3.0.1.3 && \
	  CPP="/home/temok/opt/openmpi-1.4.2/bin/mpicc -E" \
	  CPPFLAGS=" -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" \
	  CC="/home/temok/opt/openmpi-1.4.2/bin/mpicc" \
	  CFLAGS="-g -O2" \
	  CXX="/home/temok/opt/openmpi-1.4.2/bin/mpicxx" \
	  CXXFLAGS="" \
          FCCPP="cpp -P -std=c99" \
	  F77="/home/temok/opt/openmpi-1.4.2/bin/mpif90" \
	  FFLAGS="-fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" \
	  F90="/home/temok/opt/openmpi-1.4.2/bin/mpif90" \
	  F90FLAGS="-free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" \
	  FC="/home/temok/opt/openmpi-1.4.2/bin/mpif90" \
	  FCFLAGS="-free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" \
	  LDFLAGS=" " \
	  LIBS="-L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lxc " \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib" \
	  /bin/sh ./configure \
	    --prefix="/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports" \
	    --program-suffix="-abinit" \
	    --with-linalg-libs="-L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas" --enable-libxc --with-libxc-incs="-I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" --with-libxc-libs="-L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lxc" --enable-static --disable-shared
configure: regenerating the VERSION file
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking for style of include used by make... GNU
checking for gcc... /home/temok/opt/openmpi-1.4.2/bin/mpicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /home/temok/opt/openmpi-1.4.2/bin/mpicc accepts -g... yes
checking for /home/temok/opt/openmpi-1.4.2/bin/mpicc option to accept ISO C89... none needed
checking dependency style of /home/temok/opt/openmpi-1.4.2/bin/mpicc... none
checking for a sed that does not truncate output... /bin/sed
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for fgrep... /bin/grep -F
checking for ld used by /home/temok/opt/openmpi-1.4.2/bin/mpicc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... yes
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from /home/temok/opt/openmpi-1.4.2/bin/mpicc object... ok
checking how to run the C preprocessor... /home/temok/opt/openmpi-1.4.2/bin/mpicc -E
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
checking for dlfcn.h... yes
checking for objdir... .libs
checking if /home/temok/opt/openmpi-1.4.2/bin/mpicc supports -fno-rtti -fno-exceptions... no
checking for /home/temok/opt/openmpi-1.4.2/bin/mpicc option to produce PIC... -fPIC -DPIC
checking if /home/temok/opt/openmpi-1.4.2/bin/mpicc PIC flag -fPIC -DPIC works... yes
checking if /home/temok/opt/openmpi-1.4.2/bin/mpicc static flag -static works... no
checking if /home/temok/opt/openmpi-1.4.2/bin/mpicc supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.2/bin/mpicc supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.2/bin/mpicc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking whether we are using the GNU Fortran compiler... no
checking whether /home/temok/opt/openmpi-1.4.2/bin/mpif90 accepts -g... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for /home/temok/opt/openmpi-1.4.2/bin/mpif90 option to produce PIC... 
checking if /home/temok/opt/openmpi-1.4.2/bin/mpif90 static flag  works... yes
checking if /home/temok/opt/openmpi-1.4.2/bin/mpif90 supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.2/bin/mpif90 supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.2/bin/mpif90 linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
configure: setting linear algebra flavor to 'netlib'
checking whether make sets $(MAKE)... (cached) yes
checking whether ln -s works... yes
checking for a sed that does not truncate output... (cached) /bin/sed
checking for gawk... (cached) gawk
checking for grep that handles long lines and -e... (cached) /bin/grep
checking for egrep... (cached) /bin/grep -E
checking for perl... perl
checking for latex... latex
checking for dvipdf... dvipdf
checking whether we are using the GNU Fortran compiler... (cached) no
checking whether /home/temok/opt/openmpi-1.4.2/bin/mpif90 accepts -g... (cached) yes
checking which type of Fortran compiler we have... intel 10.0
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking whether the LibXC library works... yes
configure: === libXC library OK for use
configure: === generating the src/libxc_names.in file
checking whether linear algebra libraries work... yes
configure: FC       = /home/temok/opt/openmpi-1.4.2/bin/mpif90
configure: CPPFLAGS =  -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include
configure: FCFLAGS  = -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include
configure: LDFLAGS  =  
configure: LIBS     = -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lxc -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lxc 
configure: creating ./config.status
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/pkginfo.f90
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing libtool commands
cd sources/atompaw-3.0.1.3 && make 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/atompaw-3.0.1.3'
make  all-recursive
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/atompaw-3.0.1.3'
Making all in src
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/atompaw-3.0.1.3/src'
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o atomdata.lo atomdata.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c atomdata.f90 -o atomdata.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o globalmath.lo globalmath.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c globalmath.f90 -o globalmath.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o gridmod.lo gridmod.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c gridmod.f90 -o gridmod.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90 -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o libxc_mod.lo libxc_mod.F90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c libxc_mod.F90 -o libxc_mod.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o excor.lo excor.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c excor.f90 -o excor.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o interpolation_mod.lo interpolation_mod.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c interpolation_mod.f90 -o interpolation_mod.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o pkginfo.lo pkginfo.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c pkginfo.f90 -o pkginfo.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o anderson_realmix.lo anderson_realmix.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c anderson_realmix.f90 -o anderson_realmix.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o calcpotential.lo calcpotential.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c calcpotential.f90 -o calcpotential.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o radialsch.lo radialsch.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c radialsch.f90 -o radialsch.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o radialsr.lo radialsr.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c radialsr.f90 -o radialsr.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o aeatom.lo aeatom.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c aeatom.f90 -o aeatom.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o pseudo.lo pseudo.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c pseudo.f90 -o pseudo.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o abinitinterface.lo abinitinterface.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c abinitinterface.f90 -o abinitinterface.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o basis.lo basis.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c basis.f90 -o basis.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o pwscfinterface.lo pwscfinterface.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c pwscfinterface.f90 -o pwscfinterface.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o atompaw_lib.lo atompaw_lib.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c atompaw_lib.f90 -o atompaw_lib.o
/bin/sh ../libtool --tag=FC   --mode=link /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -version-info 0:0:0  -o libatompaw.la -rpath /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib abinitinterface.lo aeatom.lo anderson_realmix.lo atomdata.lo basis.lo calcpotential.lo excor.lo globalmath.lo gridmod.lo interpolation_mod.lo libxc_mod.lo pwscfinterface.lo pseudo.lo radialsch.lo radialsr.lo atompaw_lib.lo pkginfo.lo  -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lxc -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lxc 
libtool: link: ar cru .libs/libatompaw.a  abinitinterface.o aeatom.o anderson_realmix.o atomdata.o basis.o calcpotential.o excor.o globalmath.o gridmod.o interpolation_mod.o libxc_mod.o pwscfinterface.o pseudo.o radialsch.o radialsr.o atompaw_lib.o pkginfo.o
libtool: link: ranlib .libs/libatompaw.a
libtool: link: ( cd ".libs" && rm -f "libatompaw.la" && ln -s "../libatompaw.la" "libatompaw.la" )
/home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o atompaw_prog.o atompaw_prog.f90
/bin/sh ../libtool --tag=FC   --mode=link /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include   -o atompaw atompaw_prog.o libatompaw.la -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lxc -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -lxc 
libtool: link: /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -o atompaw atompaw_prog.o  ./.libs/libatompaw.a -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib -llapack -lblas /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/libnetcdf.a /home/temok/opt/openmpi-1.4.2/lib/libmpi_f90.so /home/temok/opt/openmpi-1.4.2/lib/libmpi_f77.so /home/temok/opt/openmpi-1.4.2/lib/libmpi.so /home/temok/opt/openmpi-1.4.2/lib/libopen-rte.so /home/temok/opt/openmpi-1.4.2/lib/libopen-pal.so -ldl -lnsl -lutil -lm /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/libxc.a -pthread -rpath /home/temok/opt/openmpi-1.4.2/lib -rpath /home/temok/opt/openmpi-1.4.2/lib
ifort: command line warning #10156: ignoring option '-r'; no argument required
ifort: command line warning #10156: ignoring option '-r'; no argument required
backend signals

fortcom: Severe: **Internal compiler error: internal abort** Please report this error along with the circumstances in which it occurred in a Software Problem Report.  Note: File and line given may not be explicit cause of this error.

ifort: error #10014: problem during multi-file optimization compilation (code 3)
make[5]: *** [atompaw] Error 3
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/atompaw-3.0.1.3/src'
make[4]: *** [all-recursive] Error 1
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/atompaw-3.0.1.3'
make[3]: *** [all] Error 2
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/atompaw-3.0.1.3'
make[2]: *** [stamps/atompaw-build-stamp] Error 2
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
make[1]: [all-local] Error 2 (ignored)
Checking build of atompaw fallback
test -e stamps/atompaw-install-stamp
make[1]: *** [all-local] Error 1
make[1]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
make: *** [multi] Error 2
