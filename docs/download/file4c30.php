make check
Making check in fallbacks
make[1]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
make libxc
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
The build of libxc has been disabled
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
Checking build of libxc fallback
test -e stamps/libxc-install-stamp
make linalg
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
The build of linalg has been disabled
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
Checking build of linalg fallback
test -e stamps/linalg-install-stamp
make netcdf
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
make[2]: Nothing to be done for 'netcdf'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
Checking build of netcdf fallback
test -e stamps/netcdf-install-stamp
make atompaw
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
The build of atompaw has been disabled
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
Checking build of atompaw fallback
test -e stamps/atompaw-install-stamp
make wannier90
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
The build of wannier90 has been disabled
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
Checking build of wannier90 fallback
test -e stamps/wannier90-install-stamp
make etsf_io
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
The build of etsf_io has been disabled
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
Checking build of etsf_io fallback
test -e stamps/etsf_io-install-stamp
make bigdft
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
The build of bigdft has been disabled
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
Checking build of bigdft fallback
test -e stamps/bigdft-install-stamp
make  check-local
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
cd sources/libxc-3.0.0 && make check 
/bin/bash: line 0: cd: sources/libxc-3.0.0: No such file or directory
Makefile:1207: recipe for target 'check-local' failed
make[2]: [check-local] Error 1 (ignored)
cd sources/lapack-abinit_6.10 && make check 
/bin/bash: line 0: cd: sources/lapack-abinit_6.10: No such file or directory
Makefile:1207: recipe for target 'check-local' failed
make[2]: [check-local] Error 1 (ignored)
cd sources/netcdf-4.1.1 && make check 
make[3]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1'
Making check in f90
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/f90'
make  check-am
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/f90'
make[5]: Nothing to be done for 'check-am'.
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/f90'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/f90'
Making check in fortran
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/fortran'
make  check-am
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/fortran'
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/fortran'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/fortran'
Making check in libsrc
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc'
make  t_nc t_type
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc'
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran   -g -O2 -MT t_nc-t_nc.o -MD -MP -MF .deps/t_nc-t_nc.Tpo -c -o t_nc-t_nc.o `test -f 't_nc.c' || echo './'`t_nc.c
mv -f .deps/t_nc-t_nc.Tpo .deps/t_nc-t_nc.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2      -o t_nc t_nc-t_nc.o  ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o t_nc t_nc-t_nc.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo t_type.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran   -g -O2 -MT t_type.o -MD -MP -MF $depbase.Tpo -c -o t_type.o t_type.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2      -o t_type t_type.o  ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o t_type t_type.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc'
make  check-TESTS
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc'
dimrename: IXX
nc_close ret = 0

reopen id = 3 for filename test.nc
NC done
GATTR VAR VATTR
VATTR
VATTR
VATTR
VATTR
VATTR
fill_seq indices	 1 2 3	75.000000 != 2.718282
Done
got val = 3.250000
got val = 0.000000
got val = 2.718282
got val = 82555
got val = 97
got NC_CHAR val = A (0x41) 
got NC_CHAR val = B (0x42) 
got NC_CHAR val = "The red death had long devastated the country."
got val = A (0x41) 
got val = B (0x42) 
got val = "The red death had long devastated the country."
got vals = 0.000000 ... 447.000000
re nc_close ret = 0
PASS: t_nc

 *** Testing netCDF classic version of nc_inq_type... OK!
PASS: t_type
==================
All 2 tests passed
==================
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc'
Making check in nctest
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nctest'
make  nctest
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nctest'
depbase=`echo add.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT add.o -MD -MP -MF $depbase.Tpo -c -o add.o add.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo atttests.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT atttests.o -MD -MP -MF $depbase.Tpo -c -o atttests.o atttests.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo cdftests.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT cdftests.o -MD -MP -MF $depbase.Tpo -c -o cdftests.o cdftests.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo dimtests.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT dimtests.o -MD -MP -MF $depbase.Tpo -c -o dimtests.o dimtests.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo driver.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT driver.o -MD -MP -MF $depbase.Tpo -c -o driver.o driver.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo emalloc.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT emalloc.o -MD -MP -MF $depbase.Tpo -c -o emalloc.o emalloc.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo error.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT error.o -MD -MP -MF $depbase.Tpo -c -o error.o error.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo misctest.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT misctest.o -MD -MP -MF $depbase.Tpo -c -o misctest.o misctest.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo rec.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT rec.o -MD -MP -MF $depbase.Tpo -c -o rec.o rec.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo slabs.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT slabs.o -MD -MP -MF $depbase.Tpo -c -o slabs.o slabs.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo val.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT val.o -MD -MP -MF $depbase.Tpo -c -o val.o val.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo vardef.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT vardef.o -MD -MP -MF $depbase.Tpo -c -o vardef.o vardef.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo varget.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT varget.o -MD -MP -MF $depbase.Tpo -c -o varget.o varget.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo vargetg.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT vargetg.o -MD -MP -MF $depbase.Tpo -c -o vargetg.o vargetg.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo varput.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT varput.o -MD -MP -MF $depbase.Tpo -c -o varput.o varput.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo varputg.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT varputg.o -MD -MP -MF $depbase.Tpo -c -o varputg.o varputg.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo vartests.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT vartests.o -MD -MP -MF $depbase.Tpo -c -o vartests.o vartests.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo vputget.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT vputget.o -MD -MP -MF $depbase.Tpo -c -o vputget.o vputget.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo vputgetg.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT vputgetg.o -MD -MP -MF $depbase.Tpo -c -o vputgetg.o vputgetg.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../libsrc   -o nctest add.o atttests.o cdftests.o dimtests.o driver.o emalloc.o error.o misctest.o rec.o slabs.o val.o vardef.o varget.o vargetg.o varput.o varputg.o vartests.o vputget.o vputgetg.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o nctest add.o atttests.o cdftests.o dimtests.o driver.o emalloc.o error.o misctest.o rec.o slabs.o val.o vardef.o varget.o vargetg.o varput.o varputg.o vartests.o vputget.o vputgetg.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nctest'
make  check-TESTS
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nctest'
Testing V2 API with 2 different netCDF formats.


Switching to netCDF classic format.
*** Testing nccreate ...	ok ***
*** Testing ncopen ...		ok ***
*** Testing ncredef ...		ok ***
*** Testing ncendef ...		ok ***
*** Testing ncclose ...		ok ***
*** Testing ncinquire ...	ok ***
*** Testing ncsync ...		ok ***
*** Testing ncabort ...		ok ***
*** Testing ncdimdef ...	ok ***
*** Testing ncdimid ...		ok ***
*** Testing ncdiminq ...	ok ***
*** Testing ncdimrename ...	ok ***
*** Testing ncvardef ...	ok ***
*** Testing ncvarid ...		ok ***
*** Testing ncvarinq ...	ok ***
*** Testing ncvarput1 ...	ok ***
*** Testing ncvarget1 ...	ok ***
*** Testing ncvarput ...	ok ***
*** Testing ncvarget ...	ok ***
*** Testing ncvarputg ...	ok ***
*** Testing ncvargetg ...	ok ***
*** Testing ncrecinq ...	ok ***
*** Testing ncrecput ...	ok ***
*** Testing ncrecget ...	ok ***
*** Testing ncvarrename ...	ok ***
*** Testing ncattput ...	ok ***
*** Testing ncattinq ...	ok ***
*** Testing ncattget ...	ok ***
*** Testing ncattcopy ...	ok ***
*** Testing ncattname ...	ok ***
*** Testing ncattrename ...	ok ***
*** Testing ncattdel ...	ok ***
*** Testing nctypelen ...	ok ***


Switching to 64-bit offset format.
*** Testing nccreate ...	ok ***
*** Testing ncopen ...		ok ***
*** Testing ncredef ...		ok ***
*** Testing ncendef ...		ok ***
*** Testing ncclose ...		ok ***
*** Testing ncinquire ...	ok ***
*** Testing ncsync ...		ok ***
*** Testing ncabort ...		ok ***
*** Testing ncdimdef ...	ok ***
*** Testing ncdimid ...		ok ***
*** Testing ncdiminq ...	ok ***
*** Testing ncdimrename ...	ok ***
*** Testing ncvardef ...	ok ***
*** Testing ncvarid ...		ok ***
*** Testing ncvarinq ...	ok ***
*** Testing ncvarput1 ...	ok ***
*** Testing ncvarget1 ...	ok ***
*** Testing ncvarput ...	ok ***
*** Testing ncvarget ...	ok ***
*** Testing ncvarputg ...	ok ***
*** Testing ncvargetg ...	ok ***
*** Testing ncrecinq ...	ok ***
*** Testing ncrecput ...	ok ***
*** Testing ncrecget ...	ok ***
*** Testing ncvarrename ...	ok ***
*** Testing ncattput ...	ok ***
*** Testing ncattinq ...	ok ***
*** Testing ncattget ...	ok ***
*** Testing ncattcopy ...	ok ***
*** Testing ncattname ...	ok ***
*** Testing ncattrename ...	ok ***
*** Testing ncattdel ...	ok ***
*** Testing nctypelen ...	ok ***

Total number of failures: 0
nctest SUCCESS!!!
PASS: nctest
PASS: compare_test_files.sh
==================
All 2 tests passed
==================
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nctest'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nctest'
Making check in ncgen3
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncgen3'
make  check-TESTS
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncgen3'
*** Testing ncgen3.
*** creating classic file c0.nc from c0.cdl...
*** creating 64-bit offset file c0_64.nc from c0.cdl...
*** Test successful!
PASS: run_tests.sh
=============
1 test passed
=============
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncgen3'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncgen3'
Making check in ncgen
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncgen'
make  check-TESTS
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncgen'
*** Testing ncgen.
*** creating classic file c0.nc from c0.cdl...
*** creating 64-bit offset file c0_64.nc from c0.cdl...
*** Test successful!
PASS: run_tests.sh
=============
1 test passed
=============
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncgen'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncgen'
Making check in ncdump
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
make  check-recursive
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
Making check in cdl4
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump/cdl4'
make[6]: Nothing to be done for 'check'.
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump/cdl4'
Making check in expected4
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump/expected4'
make[6]: Nothing to be done for 'check'.
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump/expected4'
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
make  rewrite-scalar ctest ctest64 ncdump tst_utf8 
make[7]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
depbase=`echo rewrite-scalar.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT rewrite-scalar.o -MD -MP -MF $depbase.Tpo -c -o rewrite-scalar.o rewrite-scalar.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2        -o rewrite-scalar rewrite-scalar.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o rewrite-scalar rewrite-scalar.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo ctest.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT ctest.o -MD -MP -MF $depbase.Tpo -c -o ctest.o ctest.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2        -o ctest ctest.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o ctest ctest.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo ctest64.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT ctest64.o -MD -MP -MF $depbase.Tpo -c -o ctest64.o ctest64.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2        -o ctest64 ctest64.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o ctest64 ctest64.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[7]: 'ncdump' is up to date.
depbase=`echo tst_utf8.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT tst_utf8.o -MD -MP -MF $depbase.Tpo -c -o tst_utf8.o tst_utf8.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2        -o tst_utf8 tst_utf8.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o tst_utf8 tst_utf8.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[7]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
make  check-TESTS
make[7]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'

*** Testing ncgen and ncdump using some test CDL files.
*** creating tst_small.nc from ref_tst_small.cdl...
*** creating tst_small.cdl from tst_small.nc...
*** creating test0.nc from test0.cdl...
*** creating test1.cdl from test0.nc...
*** creating test1.nc from test1.cdl...
*** creating test2.cdl from test1.nc...
*** checking that test1.cdl and test2.cdl are the same...
*** All tests of ncgen and ncdump using test0.cdl passed!
PASS: run_tests.sh

*** Testing ncgen and ncdump with 64-bit offset format.
*** creating test0.nc from test0.cdl...
*** creating test1.cdl from test0.nc...
*** creating test1.nc from test1.cdl...
*** creating test2.cdl from test1.nc...
*** All ncgen and ncdump with 64-bit offset format tests passed!
PASS: tst_64bit.sh
PASS: ctest
PASS: ctest64

*** Testing ncgen and ncdump test output for classic format.
*** creating ctest1.cdl from ctest0.nc...
*** creating c0.nc from c0.cdl...
*** creating c1.cdl from c0.nc...
*** comparing ncdump of C program output (ctest1.cdl) with c1.cdl...
*** test output for ncdump -k
*** test output for ncdump -x
*** creating tst_ncml.nc from tst_ncml.cdl
*** creating c1.ncml from tst_ncml.nc
*** comparing ncdump -x of generated file with ref1.ncml ...
*** test output for ncdump -s
*** creating tst_mslp.nc from tst_mslp.cdl
*** creating tst_format_att.cdl from tst_mslp.nc
*** comparing ncdump -s of generated file with ref_tst_format_att.cdl ...
*** All ncgen and ncdump test output for classic format passed!
*** Testing ncgen and ncdump test output for 64-bit offset format.
*** creating ctest1.cdl from test0_64.nc...
*** creating c0.nc from c0.cdl...
*** creating c1.cdl from c0.nc...
*** comparing ncdump of C program output (ctest1_64.cdl) with c1.cdl...
*** test output for ncdump -k
*** test output for ncdump -s
*** creating tst_mslp_64.nc from tst_mslp.cdl
*** creating tst_format_att_64.cdl from tst_mslp_64.nc
*** comparing ncdump -s of generated file with ref_tst_format_att_64.cdl ...
*** All ncgen and ncdump test output for 64-bit offset format passed!
PASS: tst_output.sh

*** testing length of classic file
*** testing length of classic file written with NOFILL
*** testing length of rewritten classic file
*** testing length of rewritten classic file written with NOFILL
*** testing length of 64-bit offset file
*** testing length of 64-bit offset file written with NOFILL
*** testing length of rewritten 64-bit offset file
*** testing length of rewritten 64-bit offset file written with NOFILL
*** testing length of one-record-variable classic file
*** testing length of one-record-variable classic file written with NOFILL
*** testing length of one-record-variable 64-bit offset file
*** testing length of one-record-variable 64-bit offset file written with NOFILL
PASS: tst_lengths.sh

*** Testing ncdump -t output for times with CF calendar attribute
*** creating netcdf file tst_calendars.nc from tst_calendars.cdl...
*** creating tst_isotimes.cdl from tst_calendars.nc...
*** comparing tst_times.cdl with ref_times.cdl...

*** All ncdump test output for -t option with CF calendar atts passed!
PASS: tst_calendars.sh

*** Testing UTF-8.
*** creating UTF-8 test file tst_utf8.nc...ok.
*** Tests successful!
PASS: tst_utf8

*** Testing ncgen and ncdump for UTF8 support...
*** creating classic offset file with utf8 characters...
*** dump and compare utf8 output...
*** creating 64-bit offset file with utf8 characters...
*** (64 bit) dump and compare utf8 output...
*** dumping tst_utf8.nc to tst_utf8.cdl...
*** comparing tst_utf8.cdl with tst8.cdl...
*** All utf8 tests of ncgen and ncdump passed!
PASS: run_utf8_tests.sh

*** Testing nccopy on ncdump/*.nc files
*** copy c0.nc to copy_of_c0.nc ...
*** compare  with copy_of_c0.cdl
*** copy c0tmp.nc to copy_of_c0tmp.nc ...
*** compare  with copy_of_c0tmp.cdl
*** copy ctest0.nc to copy_of_ctest0.nc ...
*** compare  with copy_of_ctest0.cdl
*** copy ctest0_64.nc to copy_of_ctest0_64.nc ...
*** compare  with copy_of_ctest0_64.cdl
*** copy small.nc to copy_of_small.nc ...
*** compare  with copy_of_small.cdl
*** copy small2.nc to copy_of_small2.nc ...
*** compare  with copy_of_small2.cdl
*** copy test0.nc to copy_of_test0.nc ...
*** compare  with copy_of_test0.cdl
*** copy test1.nc to copy_of_test1.nc ...
*** compare  with copy_of_test1.cdl
*** copy tst_calendars.nc to copy_of_tst_calendars.nc ...
*** compare  with copy_of_tst_calendars.cdl
*** copy tst_mslp.nc to copy_of_tst_mslp.nc ...
*** compare  with copy_of_tst_mslp.cdl
*** copy tst_mslp_64.nc to copy_of_tst_mslp_64.nc ...
*** compare  with copy_of_tst_mslp_64.cdl
*** copy tst_ncml.nc to copy_of_tst_ncml.nc ...
*** compare  with copy_of_tst_ncml.cdl
*** copy tst_small.nc to copy_of_tst_small.nc ...
*** compare  with copy_of_tst_small.cdl
*** copy tst_utf8.nc to copy_of_tst_utf8.nc ...
*** compare  with copy_of_tst_utf8.cdl
*** copy utf8.nc to copy_of_utf8.nc ...
*** compare  with copy_of_utf8.cdl

*** All nccopy tests passed!
PASS: tst_nccopy3.sh
*** Testing ncgen with -k1
*** PASSED: 10/10 ; 0 expected failures ; 0 unexpected failures
*** Cycle testing ncgen with -k1
*** PASSED: 14/14 ; 0 expected failures ; 0 unexpected failures
PASS: tst_ncgen4_classic.sh
===================
All 11 tests passed
===================
make[7]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/ncdump'
Making check in nf_test
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nf_test'
make  nf_test tst_f77_v2         ftest tst_f90
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nf_test'
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o test_get.o test_get.F
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o test_put.o test_put.F
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o nf_error.o nf_error.F
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o nf_test.o nf_test.F
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o test_read.o test_read.F
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o test_write.o test_write.F
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o util.o util.F
depbase=`echo fortlib.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran   -g -O2 -MT fortlib.o -MD -MP -MF $depbase.Tpo -c -o fortlib.o fortlib.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=F77   --mode=link mpif90 -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2            -o nf_test test_get.o test_put.o nf_error.o nf_test.o test_read.o test_write.o util.o fortlib.o        ../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../fortran -I../libsrc -I../fortran -I../f90 -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o nf_test test_get.o test_put.o nf_error.o nf_test.o test_read.o test_write.o util.o fortlib.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o tst_f77_v2.o tst_f77_v2.F
/bin/bash ../libtool --tag=F77   --mode=link mpif90 -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2            -o tst_f77_v2 tst_f77_v2.o        ../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../fortran -I../libsrc -I../fortran -I../f90 -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o tst_f77_v2 tst_f77_v2.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -DHAVE_CONFIG_H -I. -I.. -I../fortran   -DNDEBUG -DpgiFortran  -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o ftest.o ftest.F
/bin/bash ../libtool --tag=F77   --mode=link mpif90 -I../fortran        -I../libsrc -I../fortran  -I../f90 -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2            -o ftest ftest.o fortlib.o        ../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../fortran -I../libsrc -I../fortran -I../f90 -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o ftest ftest.o fortlib.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90  -I../fortran -I../f90        -I../libsrc -I../fortran   -I../f90 -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o tst_f90.o  tst_f90.f90
/bin/bash ../libtool --tag=FC   --mode=link mpif90  -I../fortran -I../f90        -I../libsrc -I../fortran   -I../f90 -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2            -o tst_f90 tst_f90.o        ../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../fortran -I../f90 -I../libsrc -I../fortran -I../f90 -ffree-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o tst_f90 tst_f90.o  ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nf_test'
make  check-TESTS
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nf_test'

*** Testing creating file with fill values.
*** SUCCESS!
PASS: create_fills.sh
 
 *** Testing netCDF-3 Fortran 77 API.
 NetCDF version: 4.1.1 of Feb  3 2020 10:21:05 $                                                 
 *** testing nf_strerror ... 
 *** testing nf_open ... 
 *** testing nf_close ... 
 *** testing nf_inq ... 
 *** testing nf_inq_dimid ... 
 *** testing nf_inq_dim ... 
 *** testing nf_inq_dimlen ... 
 *** testing nf_inq_dimname ... 
 *** testing nf_inq_varid ... 
 *** testing nf_inq_var ... 
 *** testing nf_inq_natts ... 
 *** testing nf_inq_ndims ... 
 *** testing nf_inq_nvars ... 
 *** testing nf_inq_unlimdim ... 
 *** testing nf_inq_format ... 
 *** testing nf_inq_vardimid ... 
 *** testing nf_inq_varname ... 
 *** testing nf_inq_varnatts ... 
 *** testing nf_inq_varndims ... 
 *** testing nf_inq_vartype ... 
 *** testing nf_get_var1_text ... 
 *** testing nf_get_var1_int1 ... 
 *** testing nf_get_var1_int2 ... 
 *** testing nf_get_var1_int ... 
 *** testing nf_get_var1_real ... 
 *** testing nf_get_var1_double ... 
 *** testing nf_get_var_text ... 
 *** testing nf_get_var_int1 ... 
 *** testing nf_get_var_int2 ... 
 *** testing nf_get_var_int ... 
 *** testing nf_get_var_real ... 
 *** testing nf_get_var_double ... 
 *** testing nf_get_vara_text ... 
 *** testing nf_get_vara_int1 ... 
 *** testing nf_get_vara_int2 ... 
 *** testing nf_get_vara_int ... 
 *** testing nf_get_vara_real ... 
 *** testing nf_get_vara_double ... 
 *** testing nf_get_vars_text ... 
 *** testing nf_get_vars_int1 ... 
 *** testing nf_get_vars_int2 ... 
 *** testing nf_get_vars_int ... 
 *** testing nf_get_vars_real ... 
 *** testing nf_get_vars_double ... 
 *** testing nf_get_varm_text ... 
 *** testing nf_get_varm_int1 ... 
 *** testing nf_get_varm_int2 ... 
 *** testing nf_get_varm_int ... 
 *** testing nf_get_varm_real ... 
 *** testing nf_get_varm_double ... 
 *** testing nf_get_att_text ... 
 *** testing nf_get_att_int1 ... 
 *** testing nf_get_att_int2 ... 
 *** testing nf_get_att_int ... 
 *** testing nf_get_att_real ... 
 *** testing nf_get_att_double ... 
 *** testing nf_inq_att ... 
 *** testing nf_inq_attname ... 
 *** testing nf_inq_attid ... 
 *** testing nf_inq_attlen ... 
 *** testing nf_inq_atttype ... 
 *** testing nf_create ... 
 *** testing nf_redef ... 
 *** testing nf_enddef ... 
 *** testing nf_sync ... 
 *** testing nf_abort ... 
 *** testing nf_def_dim ... 
 *** testing nf_rename_dim ... 
 *** testing nf_def_var ... 
 *** testing nf_put_var1_text ... 
 *** testing nf_put_var1_int1 ... 
 *** testing nf_put_var1_int2 ... 
 *** testing nf_put_var1_int ... 
 *** testing nf_put_var1_real ... 
 *** testing nf_put_var1_double ... 
 *** testing nf_put_var_text ... 
 *** testing nf_put_var_int1 ... 
 *** testing nf_put_var_int2 ... 
 *** testing nf_put_var_int ... 
 *** testing nf_put_var_real ... 
 *** testing nf_put_var_double ... 
 *** testing nf_put_vara_text ... 
 *** testing nf_put_vara_int1 ... 
 *** testing nf_put_vara_int2 ... 
 *** testing nf_put_vara_int ... 
 *** testing nf_put_vara_real ... 
 *** testing nf_put_vara_double ... 
 *** testing nf_put_vars_text ... 
 *** testing nf_put_vars_int1 ... 
 *** testing nf_put_vars_int2 ... 
 *** testing nf_put_vars_int ... 
 *** testing nf_put_vars_real ... 
 *** testing nf_put_vars_double ... 
 *** testing nf_put_varm_text ... 
 *** testing nf_put_varm_int1 ... 
 *** testing nf_put_varm_int2 ... 
 *** testing nf_put_varm_int ... 
 *** testing nf_put_varm_real ... 
 *** testing nf_put_varm_double ... 
 *** testing nf_rename_var ... 
 *** testing nf_put_att_text ... 
 *** testing nf_put_att_int1 ... 
 *** testing nf_put_att_int2 ... 
 *** testing nf_put_att_int ... 
 *** testing nf_put_att_real ... 
 *** testing nf_put_att_double ... 
 *** testing nf_copy_att ... 
 *** testing nf_rename_att ... 
 *** testing nf_del_att ... 
 *** testing nf_set_fill ... 
 *** testing nf_set_default_format ... 
 Total number of failures:            0
 *** SUCCESS!
PASS: nf_test
 
  *** Testing netCDF v2 api for F77.
  *** SUCCESS!
PASS: tst_f77_v2
 
 *** Testing netCDF-2 Fortran 77 API.
 *** testing nccre ...
 *** testing ncddef ...
 *** testing ncvdef ...
 *** testing ncapt, ncaptc ...
 *** testing ncclos ...
 *** testing ncvpt1 ...
 *** testing ncvgt1 ...
 *** testing ncvpt ...
 *** testing ncopn, ncinq, ncdinq, ncvinq, ncanam, ncainq ...
 *** testing ncvgt, ncvgtc ...
 *** testing ncagt, ncagtc ...
 *** testing ncredf, ncdren, ncvren, ncaren, ncendf ...
 *** testing ncacpy ...
 *** testing ncadel ...
 *** testing fill values ...
 Total number of failures:            0
 *** SUCCESS!
PASS: ftest
 
 *** Testing netCDF-3 Fortran 90 API.
 *** SUCCESS!
PASS: tst_f90
==================
All 5 tests passed
==================
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nf_test'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nf_test'
Making check in nc_test
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nc_test'
make  tst_small nc_test tst_misc tst_norm tst_names 
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nc_test'
depbase=`echo tst_small.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT tst_small.o -MD -MP -MF $depbase.Tpo -c -o tst_small.o tst_small.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../libsrc   -o tst_small tst_small.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o tst_small tst_small.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo nc_test.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT nc_test.o -MD -MP -MF $depbase.Tpo -c -o nc_test.o nc_test.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo error.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT error.o -MD -MP -MF $depbase.Tpo -c -o error.o error.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo test_get.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT test_get.o -MD -MP -MF $depbase.Tpo -c -o test_get.o test_get.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo test_put.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT test_put.o -MD -MP -MF $depbase.Tpo -c -o test_put.o test_put.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo test_read.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT test_read.o -MD -MP -MF $depbase.Tpo -c -o test_read.o test_read.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo test_write.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT test_write.o -MD -MP -MF $depbase.Tpo -c -o test_write.o test_write.c &&\
mv -f $depbase.Tpo $depbase.Po
depbase=`echo util.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT util.o -MD -MP -MF $depbase.Tpo -c -o util.o util.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../libsrc   -o nc_test nc_test.o error.o test_get.o test_put.o test_read.o test_write.o util.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o nc_test nc_test.o error.o test_get.o test_put.o test_read.o test_write.o util.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo tst_misc.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT tst_misc.o -MD -MP -MF $depbase.Tpo -c -o tst_misc.o tst_misc.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../libsrc   -o tst_misc tst_misc.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o tst_misc tst_misc.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo tst_norm.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT tst_norm.o -MD -MP -MF $depbase.Tpo -c -o tst_norm.o tst_norm.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../libsrc   -o tst_norm tst_norm.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o tst_norm tst_norm.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo tst_names.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I..       -I../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT tst_names.o -MD -MP -MF $depbase.Tpo -c -o tst_names.o tst_names.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../libsrc   -o tst_names tst_names.o -lm     ../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o tst_names tst_names.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nc_test'
make  check-TESTS
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nc_test'

*** Testing small files.
Switching to 64-bit offset format.
*** testing simple small file with a global attribute...ok.
*** testing simple small file with fixed dimensions...ok.
*** testing simple small file with an unlimited dimension...ok.
*** testing small file with one variable...ok.
*** testing small file with one variable and one att...ok.
*** testing small file with one record variable, which grows...ok.
*** testing small file with one growing record variable, with attributes added...ok.
*** testing small file with two growing record variables, with attributes added...ok.
Switching to netCDF classic format.
*** testing simple small file with a global attribute...ok.
*** testing simple small file with fixed dimensions...ok.
*** testing simple small file with an unlimited dimension...ok.
*** testing small file with one variable...ok.
*** testing small file with one variable and one att...ok.
*** testing small file with one record variable, which grows...ok.
*** testing small file with one growing record variable, with attributes added...ok.
*** testing small file with two growing record variables, with attributes added...ok.
*** Tests successful!
PASS: tst_small
Testing 2 different netCDF formats.


Switching to netCDF classic format.
*** Testing nc_strerror ... ok
*** Testing nc_open ... ok
*** Testing nc_close ... ok
*** Testing nc_inq ... ok
*** Testing nc_inq_dimid ... ok
*** Testing nc_inq_dim ... ok
*** Testing nc_inq_dimlen ... ok
*** Testing nc_inq_dimname ... ok
*** Testing nc_inq_varid ... ok
*** Testing nc_inq_var ... ok
*** Testing nc_inq_natts ... ok
*** Testing nc_inq_ndims ... ok
*** Testing nc_inq_nvars ... ok
*** Testing nc_inq_unlimdim ... ok
*** Testing nc_inq_vardimid ... ok
*** Testing nc_inq_varname ... ok
*** Testing nc_inq_varnatts ... ok
*** Testing nc_inq_varndims ... ok
*** Testing nc_inq_vartype ... ok
*** Testing nc_get_var_text ...  179 good comparisons. ok
*** Testing nc_get_var_uchar ...  264 good comparisons. ok
*** Testing nc_get_var_schar ...  269 good comparisons. ok
*** Testing nc_get_var_short ...  682 good comparisons. ok
*** Testing nc_get_var_int ...  1189 good comparisons. ok
*** Testing nc_get_var_long ...  1189 good comparisons. ok
*** Testing nc_get_var_float ...  1194 good comparisons. ok
*** Testing nc_get_var_double ...  1207 good comparisons. ok
*** Testing nc_get_var1_text ...  179 good comparisons. ok
*** Testing nc_get_var1_uchar ...  264 good comparisons. ok
*** Testing nc_get_var1_schar ...  269 good comparisons. ok
*** Testing nc_get_var1_short ...  682 good comparisons. ok
*** Testing nc_get_var1_int ...  1189 good comparisons. ok
*** Testing nc_get_var1_long ...  1189 good comparisons. ok
*** Testing nc_get_var1_float ...  1194 good comparisons. ok
*** Testing nc_get_var1_double ...  1207 good comparisons. ok
*** Testing nc_get_var1 ...  1386 good comparisons. ok
*** Testing nc_get_vara_text ...  179 good comparisons. ok
*** Testing nc_get_vara_uchar ...  264 good comparisons. ok
*** Testing nc_get_vara_schar ...  269 good comparisons. ok
*** Testing nc_get_vara_short ...  682 good comparisons. ok
*** Testing nc_get_vara_int ...  1189 good comparisons. ok
*** Testing nc_get_vara_long ...  1189 good comparisons. ok
*** Testing nc_get_vara_float ...  1194 good comparisons. ok
*** Testing nc_get_vara_double ...  1207 good comparisons. ok
*** Testing nc_get_vara ...  1386 good comparisons. ok
*** Testing nc_get_vars_text ...  179 good comparisons. ok
*** Testing nc_get_vars_uchar ...  264 good comparisons. ok
*** Testing nc_get_vars_schar ...  269 good comparisons. ok
*** Testing nc_get_vars_short ...  682 good comparisons. ok
*** Testing nc_get_vars_int ...  1189 good comparisons. ok
*** Testing nc_get_vars_long ...  1189 good comparisons. ok
*** Testing nc_get_vars_float ...  1194 good comparisons. ok
*** Testing nc_get_vars_double ...  1207 good comparisons. ok
*** Testing nc_get_vars ...  1386 good comparisons. ok
*** Testing nc_get_varm_text ...  179 good comparisons. ok
*** Testing nc_get_varm_uchar ...  264 good comparisons. ok
*** Testing nc_get_varm_schar ...  269 good comparisons. ok
*** Testing nc_get_varm_short ...  682 good comparisons. ok
*** Testing nc_get_varm_int ...  1189 good comparisons. ok
*** Testing nc_get_varm_long ...  1189 good comparisons. ok
*** Testing nc_get_varm_float ...  1194 good comparisons. ok
*** Testing nc_get_varm_double ...  1207 good comparisons. ok
*** Testing nc_get_varm ...  1386 good comparisons. ok
*** Testing nc_get_att_text ...  7 good comparisons. ok
*** Testing nc_get_att_uchar ...  5 good comparisons. ok
*** Testing nc_get_att_schar ...  7 good comparisons. ok
*** Testing nc_get_att_short ...  15 good comparisons. ok
*** Testing nc_get_att_int ...  19 good comparisons. ok
*** Testing nc_get_att_long ...  19 good comparisons. ok
*** Testing nc_get_att_float ...  21 good comparisons. ok
*** Testing nc_get_att_double ...  27 good comparisons. ok
*** Testing nc_get_att ...  34 good comparisons. ok
*** Testing nc_inq_att ... ok
*** Testing nc_inq_attname ... ok
*** Testing nc_inq_attid ... ok
*** Testing nc_inq_attlen ... ok
*** Testing nc_inq_atttype ... ok
*** Testing nc_create ... ok
*** Testing nc_redef ...  1386 good comparisons.  34 good comparisons.  1386 good comparisons.  34 good comparisons. ok
*** Testing nc_sync ...  34 good comparisons.  1386 good comparisons. ok
*** Testing nc_abort ...  1386 good comparisons.  34 good comparisons. ok
*** Testing nc_def_dim ... ok
*** Testing nc_rename_dim ... ok
*** Testing nc_def_var ... ok
*** Testing nc_put_var_text ...  179 good comparisons. ok
*** Testing nc_put_var_uchar ...  264 good comparisons. ok
*** Testing nc_put_var_schar ...  269 good comparisons. ok
*** Testing nc_put_var_short ...  682 good comparisons. ok
*** Testing nc_put_var_int ...  1189 good comparisons. ok
*** Testing nc_put_var_long ...  1189 good comparisons. ok
*** Testing nc_put_var_float ...  1194 good comparisons. ok
*** Testing nc_put_var_double ...  1207 good comparisons. ok
*** Testing nc_put_var1_text ...  179 good comparisons. ok
*** Testing nc_put_var1_uchar ...  264 good comparisons. ok
*** Testing nc_put_var1_schar ...  269 good comparisons. ok
*** Testing nc_put_var1_short ...  682 good comparisons. ok
*** Testing nc_put_var1_int ...  1189 good comparisons. ok
*** Testing nc_put_var1_long ...  1189 good comparisons. ok
*** Testing nc_put_var1_float ...  1194 good comparisons. ok
*** Testing nc_put_var1_double ...  1207 good comparisons. ok
*** Testing nc_put_var1 ...  1386 good comparisons. ok
*** Testing nc_put_vara_text ...  179 good comparisons. ok
*** Testing nc_put_vara_uchar ...  264 good comparisons. ok
*** Testing nc_put_vara_schar ...  269 good comparisons. ok
*** Testing nc_put_vara_short ...  682 good comparisons. ok
*** Testing nc_put_vara_int ...  1189 good comparisons. ok
*** Testing nc_put_vara_long ...  1189 good comparisons. ok
*** Testing nc_put_vara_float ...  1194 good comparisons. ok
*** Testing nc_put_vara_double ...  1207 good comparisons. ok
*** Testing nc_put_vara ...  1386 good comparisons. ok
*** Testing nc_put_vars_text ...  179 good comparisons. ok
*** Testing nc_put_vars_uchar ...  264 good comparisons. ok
*** Testing nc_put_vars_schar ...  269 good comparisons. ok
*** Testing nc_put_vars_short ...  682 good comparisons. ok
*** Testing nc_put_vars_int ...  1189 good comparisons. ok
*** Testing nc_put_vars_long ...  1189 good comparisons. ok
*** Testing nc_put_vars_float ...  1194 good comparisons. ok
*** Testing nc_put_vars_double ...  1207 good comparisons. ok
*** Testing nc_put_vars ...  1386 good comparisons. ok
*** Testing nc_put_varm_text ...  179 good comparisons. ok
*** Testing nc_put_varm_uchar ...  264 good comparisons. ok
*** Testing nc_put_varm_schar ...  269 good comparisons. ok
*** Testing nc_put_varm_short ...  682 good comparisons. ok
*** Testing nc_put_varm_int ...  1189 good comparisons. ok
*** Testing nc_put_varm_long ...  1189 good comparisons. ok
*** Testing nc_put_varm_float ...  1194 good comparisons. ok
*** Testing nc_put_varm_double ...  1207 good comparisons. ok
*** Testing nc_put_varm ...  1386 good comparisons. ok
*** Testing nc_rename_var ...  1386 good comparisons. ok
*** Testing nc_put_att_text ...  7 good comparisons. ok
*** Testing nc_put_att_uchar ...  5 good comparisons. ok
*** Testing nc_put_att_schar ...  7 good comparisons. ok
*** Testing nc_put_att_short ...  15 good comparisons. ok
*** Testing nc_put_att_int ...  19 good comparisons. ok
*** Testing nc_put_att_long ...  19 good comparisons. ok
*** Testing nc_put_att_float ...  21 good comparisons. ok
*** Testing nc_put_att_double ...  27 good comparisons. ok
*** Testing nc_put_att ...  34 good comparisons. ok
*** Testing nc_copy_att ...  34 good comparisons. ok
*** Testing nc_rename_att ...  34 good comparisons. ok
*** Testing nc_del_att ... ok
*** Testing nc_set_default_format ... ok


Switching to 64-bit offset format.
*** Testing nc_strerror ... ok
*** Testing nc_open ... ok
*** Testing nc_close ... ok
*** Testing nc_inq ... ok
*** Testing nc_inq_dimid ... ok
*** Testing nc_inq_dim ... ok
*** Testing nc_inq_dimlen ... ok
*** Testing nc_inq_dimname ... ok
*** Testing nc_inq_varid ... ok
*** Testing nc_inq_var ... ok
*** Testing nc_inq_natts ... ok
*** Testing nc_inq_ndims ... ok
*** Testing nc_inq_nvars ... ok
*** Testing nc_inq_unlimdim ... ok
*** Testing nc_inq_vardimid ... ok
*** Testing nc_inq_varname ... ok
*** Testing nc_inq_varnatts ... ok
*** Testing nc_inq_varndims ... ok
*** Testing nc_inq_vartype ... ok
*** Testing nc_get_var_text ...  179 good comparisons. ok
*** Testing nc_get_var_uchar ...  264 good comparisons. ok
*** Testing nc_get_var_schar ...  269 good comparisons. ok
*** Testing nc_get_var_short ...  682 good comparisons. ok
*** Testing nc_get_var_int ...  1189 good comparisons. ok
*** Testing nc_get_var_long ...  1189 good comparisons. ok
*** Testing nc_get_var_float ...  1194 good comparisons. ok
*** Testing nc_get_var_double ...  1207 good comparisons. ok
*** Testing nc_get_var1_text ...  179 good comparisons. ok
*** Testing nc_get_var1_uchar ...  264 good comparisons. ok
*** Testing nc_get_var1_schar ...  269 good comparisons. ok
*** Testing nc_get_var1_short ...  682 good comparisons. ok
*** Testing nc_get_var1_int ...  1189 good comparisons. ok
*** Testing nc_get_var1_long ...  1189 good comparisons. ok
*** Testing nc_get_var1_float ...  1194 good comparisons. ok
*** Testing nc_get_var1_double ...  1207 good comparisons. ok
*** Testing nc_get_var1 ...  1386 good comparisons. ok
*** Testing nc_get_vara_text ...  179 good comparisons. ok
*** Testing nc_get_vara_uchar ...  264 good comparisons. ok
*** Testing nc_get_vara_schar ...  269 good comparisons. ok
*** Testing nc_get_vara_short ...  682 good comparisons. ok
*** Testing nc_get_vara_int ...  1189 good comparisons. ok
*** Testing nc_get_vara_long ...  1189 good comparisons. ok
*** Testing nc_get_vara_float ...  1194 good comparisons. ok
*** Testing nc_get_vara_double ...  1207 good comparisons. ok
*** Testing nc_get_vara ...  1386 good comparisons. ok
*** Testing nc_get_vars_text ...  179 good comparisons. ok
*** Testing nc_get_vars_uchar ...  264 good comparisons. ok
*** Testing nc_get_vars_schar ...  269 good comparisons. ok
*** Testing nc_get_vars_short ...  682 good comparisons. ok
*** Testing nc_get_vars_int ...  1189 good comparisons. ok
*** Testing nc_get_vars_long ...  1189 good comparisons. ok
*** Testing nc_get_vars_float ...  1194 good comparisons. ok
*** Testing nc_get_vars_double ...  1207 good comparisons. ok
*** Testing nc_get_vars ...  1386 good comparisons. ok
*** Testing nc_get_varm_text ...  179 good comparisons. ok
*** Testing nc_get_varm_uchar ...  264 good comparisons. ok
*** Testing nc_get_varm_schar ...  269 good comparisons. ok
*** Testing nc_get_varm_short ...  682 good comparisons. ok
*** Testing nc_get_varm_int ...  1189 good comparisons. ok
*** Testing nc_get_varm_long ...  1189 good comparisons. ok
*** Testing nc_get_varm_float ...  1194 good comparisons. ok
*** Testing nc_get_varm_double ...  1207 good comparisons. ok
*** Testing nc_get_varm ...  1386 good comparisons. ok
*** Testing nc_get_att_text ...  7 good comparisons. ok
*** Testing nc_get_att_uchar ...  5 good comparisons. ok
*** Testing nc_get_att_schar ...  7 good comparisons. ok
*** Testing nc_get_att_short ...  15 good comparisons. ok
*** Testing nc_get_att_int ...  19 good comparisons. ok
*** Testing nc_get_att_long ...  19 good comparisons. ok
*** Testing nc_get_att_float ...  21 good comparisons. ok
*** Testing nc_get_att_double ...  27 good comparisons. ok
*** Testing nc_get_att ...  34 good comparisons. ok
*** Testing nc_inq_att ... ok
*** Testing nc_inq_attname ... ok
*** Testing nc_inq_attid ... ok
*** Testing nc_inq_attlen ... ok
*** Testing nc_inq_atttype ... ok
*** Testing nc_create ... ok
*** Testing nc_redef ...  1386 good comparisons.  34 good comparisons.  1386 good comparisons.  34 good comparisons. ok
*** Testing nc_sync ...  34 good comparisons.  1386 good comparisons. ok
*** Testing nc_abort ...  1386 good comparisons.  34 good comparisons. ok
*** Testing nc_def_dim ... ok
*** Testing nc_rename_dim ... ok
*** Testing nc_def_var ... ok
*** Testing nc_put_var_text ...  179 good comparisons. ok
*** Testing nc_put_var_uchar ...  264 good comparisons. ok
*** Testing nc_put_var_schar ...  269 good comparisons. ok
*** Testing nc_put_var_short ...  682 good comparisons. ok
*** Testing nc_put_var_int ...  1189 good comparisons. ok
*** Testing nc_put_var_long ...  1189 good comparisons. ok
*** Testing nc_put_var_float ...  1194 good comparisons. ok
*** Testing nc_put_var_double ...  1207 good comparisons. ok
*** Testing nc_put_var1_text ...  179 good comparisons. ok
*** Testing nc_put_var1_uchar ...  264 good comparisons. ok
*** Testing nc_put_var1_schar ...  269 good comparisons. ok
*** Testing nc_put_var1_short ...  682 good comparisons. ok
*** Testing nc_put_var1_int ...  1189 good comparisons. ok
*** Testing nc_put_var1_long ...  1189 good comparisons. ok
*** Testing nc_put_var1_float ...  1194 good comparisons. ok
*** Testing nc_put_var1_double ...  1207 good comparisons. ok
*** Testing nc_put_var1 ...  1386 good comparisons. ok
*** Testing nc_put_vara_text ...  179 good comparisons. ok
*** Testing nc_put_vara_uchar ...  264 good comparisons. ok
*** Testing nc_put_vara_schar ...  269 good comparisons. ok
*** Testing nc_put_vara_short ...  682 good comparisons. ok
*** Testing nc_put_vara_int ...  1189 good comparisons. ok
*** Testing nc_put_vara_long ...  1189 good comparisons. ok
*** Testing nc_put_vara_float ...  1194 good comparisons. ok
*** Testing nc_put_vara_double ...  1207 good comparisons. ok
*** Testing nc_put_vara ...  1386 good comparisons. ok
*** Testing nc_put_vars_text ...  179 good comparisons. ok
*** Testing nc_put_vars_uchar ...  264 good comparisons. ok
*** Testing nc_put_vars_schar ...  269 good comparisons. ok
*** Testing nc_put_vars_short ...  682 good comparisons. ok
*** Testing nc_put_vars_int ...  1189 good comparisons. ok
*** Testing nc_put_vars_long ...  1189 good comparisons. ok
*** Testing nc_put_vars_float ...  1194 good comparisons. ok
*** Testing nc_put_vars_double ...  1207 good comparisons. ok
*** Testing nc_put_vars ...  1386 good comparisons. ok
*** Testing nc_put_varm_text ...  179 good comparisons. ok
*** Testing nc_put_varm_uchar ...  264 good comparisons. ok
*** Testing nc_put_varm_schar ...  269 good comparisons. ok
*** Testing nc_put_varm_short ...  682 good comparisons. ok
*** Testing nc_put_varm_int ...  1189 good comparisons. ok
*** Testing nc_put_varm_long ...  1189 good comparisons. ok
*** Testing nc_put_varm_float ...  1194 good comparisons. ok
*** Testing nc_put_varm_double ...  1207 good comparisons. ok
*** Testing nc_put_varm ...  1386 good comparisons. ok
*** Testing nc_rename_var ...  1386 good comparisons. ok
*** Testing nc_put_att_text ...  7 good comparisons. ok
*** Testing nc_put_att_uchar ...  5 good comparisons. ok
*** Testing nc_put_att_schar ...  7 good comparisons. ok
*** Testing nc_put_att_short ...  15 good comparisons. ok
*** Testing nc_put_att_int ...  19 good comparisons. ok
*** Testing nc_put_att_long ...  19 good comparisons. ok
*** Testing nc_put_att_float ...  21 good comparisons. ok
*** Testing nc_put_att_double ...  27 good comparisons. ok
*** Testing nc_put_att ...  34 good comparisons. ok
*** Testing nc_copy_att ...  34 good comparisons. ok
*** Testing nc_rename_att ...  34 good comparisons. ok
*** Testing nc_del_att ... ok
*** Testing nc_set_default_format ... ok

*** Total number of failures: 0
*** nc_test SUCCESS!!!
PASS: nc_test

*** Testing some extra stuff.
*** Trying to open non-netCDF files of tiny length...ok.
*** Tests successful!
PASS: tst_misc

*** testing UTF-8 normalization...ok.
*** Tests successful!
PASS: tst_norm

*** testing names with file tst_names.nc...
*** switching to netCDF classic format...ok.
*** switching to netCDF 64-bit offset format...ok.
*** Tests successful!
PASS: tst_names
==================
All 5 tests passed
==================
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nc_test'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/nc_test'
Making check in man4
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/man4'
make[4]: Nothing to be done for 'check'.
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/man4'
Making check in examples
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples'
Making check in C
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/C'
make  simple_xy_wr simple_xy_rd sfc_pres_temp_wr sfc_pres_temp_rd pres_temp_4D_wr pres_temp_4D_rd 
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/C'
depbase=`echo simple_xy_wr.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I../.. -I../../fortran  -I../..       -I../../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT simple_xy_wr.o -MD -MP -MF $depbase.Tpo -c -o simple_xy_wr.o simple_xy_wr.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../../libsrc   -o simple_xy_wr simple_xy_wr.o -lm     ../../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o simple_xy_wr simple_xy_wr.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo simple_xy_rd.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I../.. -I../../fortran  -I../..       -I../../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT simple_xy_rd.o -MD -MP -MF $depbase.Tpo -c -o simple_xy_rd.o simple_xy_rd.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../../libsrc   -o simple_xy_rd simple_xy_rd.o -lm     ../../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o simple_xy_rd simple_xy_rd.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo sfc_pres_temp_wr.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I../.. -I../../fortran  -I../..       -I../../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT sfc_pres_temp_wr.o -MD -MP -MF $depbase.Tpo -c -o sfc_pres_temp_wr.o sfc_pres_temp_wr.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../../libsrc   -o sfc_pres_temp_wr sfc_pres_temp_wr.o -lm     ../../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o sfc_pres_temp_wr sfc_pres_temp_wr.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo sfc_pres_temp_rd.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I../.. -I../../fortran  -I../..       -I../../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT sfc_pres_temp_rd.o -MD -MP -MF $depbase.Tpo -c -o sfc_pres_temp_rd.o sfc_pres_temp_rd.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../../libsrc   -o sfc_pres_temp_rd sfc_pres_temp_rd.o -lm     ../../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o sfc_pres_temp_rd sfc_pres_temp_rd.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo pres_temp_4D_wr.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I../.. -I../../fortran  -I../..       -I../../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT pres_temp_4D_wr.o -MD -MP -MF $depbase.Tpo -c -o pres_temp_4D_wr.o pres_temp_4D_wr.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../../libsrc   -o pres_temp_4D_wr pres_temp_4D_wr.o -lm     ../../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o pres_temp_4D_wr pres_temp_4D_wr.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
depbase=`echo pres_temp_4D_rd.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
mpicc -DHAVE_CONFIG_H -I. -I../.. -I../../fortran  -I../..       -I../../libsrc  -DNDEBUG -DpgiFortran   -g -O2 -MT pres_temp_4D_rd.o -MD -MP -MF $depbase.Tpo -c -o pres_temp_4D_rd.o pres_temp_4D_rd.c &&\
mv -f $depbase.Tpo $depbase.Po
/bin/bash ../../libtool --tag=CC   --mode=link mpicc  -g -O2 -L../../libsrc   -o pres_temp_4D_rd pres_temp_4D_rd.o -lm     ../../libsrc/libnetcdf.la 
libtool: link: mpicc -g -O2 -o pres_temp_4D_rd pres_temp_4D_rd.o  -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/libsrc ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/C'
make  check-TESTS
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/C'
*** SUCCESS writing example file simple_xy.nc!
PASS: simple_xy_wr
*** SUCCESS reading example file simple_xy.nc!
PASS: simple_xy_rd
*** SUCCESS writing example file sfc_pres_temp.nc!
PASS: sfc_pres_temp_wr
*** SUCCESS reading example file sfc_pres_temp.nc!
PASS: sfc_pres_temp_rd
*** SUCCESS writing example file pres_temp_4D.nc!
PASS: pres_temp_4D_wr
*** SUCCESS reading example file pres_temp_4D.nc!
PASS: pres_temp_4D_rd
==================
All 6 tests passed
==================
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/C'
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/C'
Making check in CDL
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/CDL'
make  check-TESTS
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/CDL'

*** Creating example data files from CDL scripts.
*** creating simple_xy.nc...
*** checking sfc_pres_temp.nc...
*** checking pres_temp_4D.nc...
*** All example creations worked!
PASS: create_sample_files.sh

*** Testing that the CDL examples produced same files as C examples.
*** checking simple_xy.nc...
*** checking sfc_pres_temp.nc...
*** checking pres_temp_4D.nc...
*** All CDL example comparisons worked!
PASS: do_comps.sh
==================
All 2 tests passed
==================
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/CDL'
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/CDL'
Making check in F77
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F77'
make  simple_xy_wr simple_xy_rd sfc_pres_temp_wr sfc_pres_temp_rd pres_temp_4D_wr pres_temp_4D_rd 
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F77'
mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o simple_xy_wr.o simple_xy_wr.f
/bin/bash ../../libtool --tag=F77   --mode=link mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o simple_xy_wr simple_xy_wr.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../fortran -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o simple_xy_wr simple_xy_wr.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o simple_xy_rd.o simple_xy_rd.f
/bin/bash ../../libtool --tag=F77   --mode=link mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o simple_xy_rd simple_xy_rd.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../fortran -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o simple_xy_rd simple_xy_rd.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o sfc_pres_temp_wr.o sfc_pres_temp_wr.f
/bin/bash ../../libtool --tag=F77   --mode=link mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o sfc_pres_temp_wr sfc_pres_temp_wr.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../fortran -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o sfc_pres_temp_wr sfc_pres_temp_wr.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o sfc_pres_temp_rd.o sfc_pres_temp_rd.f
/bin/bash ../../libtool --tag=F77   --mode=link mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o sfc_pres_temp_rd sfc_pres_temp_rd.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../fortran -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o sfc_pres_temp_rd sfc_pres_temp_rd.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o pres_temp_4D_wr.o pres_temp_4D_wr.f
/bin/bash ../../libtool --tag=F77   --mode=link mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o pres_temp_4D_wr pres_temp_4D_wr.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../fortran -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o pres_temp_4D_wr pres_temp_4D_wr.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o pres_temp_4D_rd.o pres_temp_4D_rd.f
/bin/bash ../../libtool --tag=F77   --mode=link mpif90 -I../../fortran -I../../fortran      -ffixed-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o pres_temp_4D_rd pres_temp_4D_rd.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../fortran -ffixed-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o pres_temp_4D_rd pres_temp_4D_rd.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F77'
make  check-TESTS
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F77'
 *** SUCCESS writing example file simple_xy.nc!
PASS: simple_xy_wr
 *** SUCCESS reading example file simple_xy.nc!
PASS: simple_xy_rd
 *** SUCCESS writing example file sfc_pres_temp.nc!
PASS: sfc_pres_temp_wr
 *** SUCCESS reading example file sfc_pres_temp.nc!
PASS: sfc_pres_temp_rd
 *** SUCCESS writing example filepres_temp_4D.nc!
PASS: pres_temp_4D_wr
 *** SUCCESS reading example file pres_temp_4D.nc!
PASS: pres_temp_4D_rd

*** Testing that F77 examples produced same files as C examples.
*** checking simple_xy.nc...
*** checking sfc_pres_temp.nc...
*** checking pres_temp_4D.nc...
*** All F77 example comparisons worked!
PASS: do_comps.sh
==================
All 7 tests passed
==================
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F77'
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F77'
Making check in F90
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F90'
make  check-am
make[6]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F90'
make  simple_xy_wr simple_xy_rd sfc_pres_temp_wr sfc_pres_temp_rd pres_temp_4D_wr pres_temp_4D_rd   
make[7]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F90'
mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o simple_xy_wr.o  simple_xy_wr.f90
/bin/bash ../../libtool --tag=FC   --mode=link mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o simple_xy_wr simple_xy_wr.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../f90 -I../../f90 -I../../libsrc -ffree-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o simple_xy_wr simple_xy_wr.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o simple_xy_rd.o  simple_xy_rd.f90
/bin/bash ../../libtool --tag=FC   --mode=link mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o simple_xy_rd simple_xy_rd.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../f90 -I../../f90 -I../../libsrc -ffree-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o simple_xy_rd simple_xy_rd.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o sfc_pres_temp_wr.o  sfc_pres_temp_wr.f90
/bin/bash ../../libtool --tag=FC   --mode=link mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o sfc_pres_temp_wr sfc_pres_temp_wr.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../f90 -I../../f90 -I../../libsrc -ffree-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o sfc_pres_temp_wr sfc_pres_temp_wr.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o sfc_pres_temp_rd.o  sfc_pres_temp_rd.f90
/bin/bash ../../libtool --tag=FC   --mode=link mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o sfc_pres_temp_rd sfc_pres_temp_rd.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../f90 -I../../f90 -I../../libsrc -ffree-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o sfc_pres_temp_rd sfc_pres_temp_rd.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o pres_temp_4D_wr.o  pres_temp_4D_wr.f90
/bin/bash ../../libtool --tag=FC   --mode=link mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o pres_temp_4D_wr pres_temp_4D_wr.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../f90 -I../../f90 -I../../libsrc -ffree-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o pres_temp_4D_wr pres_temp_4D_wr.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2  -c -o pres_temp_4D_rd.o  pres_temp_4D_rd.f90
/bin/bash ../../libtool --tag=FC   --mode=link mpif90 -I../../fortran -I../../f90 -I../../f90      -I../../libsrc  -ffree-form -g -ffree-line-length-none   -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2       -o pres_temp_4D_rd pres_temp_4D_rd.o ../../fortran/libnetcdff.la     ../../libsrc/libnetcdf.la  
libtool: link: mpif90 -I../../fortran -I../../f90 -I../../f90 -I../../libsrc -ffree-form -g -ffree-line-length-none -O2 -mtune=native -march=native -DNDEBUG -DpgiFortran -g -O2 -o pres_temp_4D_rd pres_temp_4D_rd.o  ../../fortran/.libs/libnetcdff.a ../../libsrc/.libs/libnetcdf.a /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempif08.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_usempi_ignore_tkr.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi_mpifh.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libmpi.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-rte.so /opt/gcc/9.1.0/openmpi-4.0.0/lib/libopen-pal.so -ldl -lrt -lutil /opt/gcc/9.1.0/lib/../lib64/libgfortran.so /opt/gcc/9.1.0/lib/../lib64/libquadmath.so -lm -pthread -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64 -Wl,-rpath -Wl,/opt/gcc/9.1.0/openmpi-4.0.0/lib -Wl,-rpath -Wl,/opt/gcc/9.1.0/lib/../lib64
make[7]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F90'
make  check-TESTS
make[7]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F90'
 *** SUCCESS writing example file simple_xy.nc! 
PASS: simple_xy_wr
 *** SUCCESS reading example file simple_xy.nc! 
PASS: simple_xy_rd
 *** SUCCESS writing example file sfc_pres_temp.nc!
PASS: sfc_pres_temp_wr
 *** SUCCESS reading example file sfc_pres_temp.nc!
PASS: sfc_pres_temp_rd
 *** SUCCESS writing example file pres_temp_4D.nc!
PASS: pres_temp_4D_wr
 *** SUCCESS reading example file pres_temp_4D.nc!
PASS: pres_temp_4D_rd

*** Testing that F90 examples produced same files as C examples.
*** checking simple_xy.nc...
*** checking sfc_pres_temp.nc...
*** checking pres_temp_4D.nc...
*** All F90 example comparisons worked!
PASS: do_comps.sh
==================
All 7 tests passed
==================
make[7]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[6]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[5]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples'
make[5]: Nothing to be done for 'check-am'.
make[5]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1/examples'
make[4]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1'
make[4]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1'
make[3]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/sources/netcdf-4.1.1'
cd sources/atompaw-4.0.1.0 && make check 
/bin/bash: line 0: cd: sources/atompaw-4.0.1.0: No such file or directory
Makefile:1207: recipe for target 'check-local' failed
make[2]: [check-local] Error 1 (ignored)
cd sources/wannier90-2.0.1.1 && make check 
/bin/bash: line 0: cd: sources/wannier90-2.0.1.1: No such file or directory
Makefile:1207: recipe for target 'check-local' failed
make[2]: [check-local] Error 1 (ignored)
cd sources/etsf_io-1.0.4 && make check 
/bin/bash: line 0: cd: sources/etsf_io-1.0.4: No such file or directory
Makefile:1207: recipe for target 'check-local' failed
make[2]: [check-local] Error 1 (ignored)
cd sources/bigdft-1.7.1.25 && make check 
/bin/bash: line 0: cd: sources/bigdft-1.7.1.25: No such file or directory
Makefile:1207: recipe for target 'check-local' failed
make[2]: [check-local] Error 1 (ignored)
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
make[1]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks'
Making check in src
make[1]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src'
Making check in incs
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/incs'
There is no buildable file here
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/incs'
Making check in mods
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods'
There is no buildable file here
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods'
Making check in 02_clib
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/02_clib'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/02_clib'
Making check in 10_defs
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/10_defs'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/10_defs'
Making check in 10_dumpinfo
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/10_dumpinfo'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/10_dumpinfo'
Making check in 11_memory_mpi
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/11_memory_mpi'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/11_memory_mpi'
Making check in 12_hide_mpi
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/12_hide_mpi'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/12_hide_mpi'
Making check in 14_hidewrite
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/14_hidewrite'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/14_hidewrite'
Making check in 16_hideleave
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/16_hideleave'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/16_hideleave'
Making check in 17_libtetra_ext
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/17_libtetra_ext'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/17_libtetra_ext'
Making check in 18_timing
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/18_timing'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/18_timing'
Making check in 21_hashfuncs
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/21_hashfuncs'
make  test_md5_sum_from_file test_md5_sum_from_string
make[3]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/21_hashfuncs'
mpif90 -DHAVE_CONFIG_H -I. -I../../../src/21_hashfuncs -I../..  -I/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/exports/include   -I../../../src/incs  -ffree-form -J/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods -O2 -mtune=native -march=native -g -ffree-line-length-none   -c -o test_md5_sum_from_file-test_md5_sum_from_file.o `test -f 'test_md5_sum_from_file.F90' || echo '../../../src/21_hashfuncs/'`test_md5_sum_from_file.F90
mpif90 -ffree-form -J/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods -O2 -mtune=native -march=native -g -ffree-line-length-none     -o test_md5_sum_from_file test_md5_sum_from_file-test_md5_sum_from_file.o lib21_hashfuncs.a ../02_clib/lib02_clib.a ../16_hideleave/lib16_hideleave.a ../14_hidewrite/lib14_hidewrite.a ../12_hide_mpi/lib12_hide_mpi.a ../11_memory_mpi/lib11_memory_mpi.a ../10_dumpinfo/lib10_dumpinfo.a ../10_defs/lib10_defs.a -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/exports/lib -lnetcdf -llapack  -lblas   -L/opt/gcc/9.1.0/openmpi-4.0.0/lib -L/opt/gcc/9.1.0/lib/../lib64 -L/opt/gcc/9.1.0/lib64/../lib64 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0/../../../../lib64 -L/lib/x86_64-linux-gnu -L/lib/../lib64 -L/usr/lib/x86_64-linux-gnu -L/opt/gcc/9.1.0/libxc-4.3.4/lib -L/opt/gcc/9.1.0/fftw-3.3.8/lib -L/opt/gcc/9.1.0/OpenBLAS/lib -L/opt/gcc/9.1.0/lib -L/opt/gcc/9.1.0/lib64 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0/../../.. -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi -lgfortran -lm -lquadmath -lpthread 
/usr/bin/ld: warning: libgfortran.so.4, needed by /usr/lib/x86_64-linux-gnu/liblapack.so, may conflict with libgfortran.so.5
/usr/bin/ld: warning: libgfortran.so.4, needed by /usr/lib/x86_64-linux-gnu/liblapack.so, may conflict with libgfortran.so.5
mpif90 -DHAVE_CONFIG_H -I. -I../../../src/21_hashfuncs -I../..  -I/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/exports/include   -I../../../src/incs  -ffree-form -J/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods -O2 -mtune=native -march=native -g -ffree-line-length-none   -c -o test_md5_sum_from_string-test_md5_sum_from_string.o `test -f 'test_md5_sum_from_string.F90' || echo '../../../src/21_hashfuncs/'`test_md5_sum_from_string.F90
mpif90 -ffree-form -J/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods -O2 -mtune=native -march=native -g -ffree-line-length-none     -o test_md5_sum_from_string test_md5_sum_from_string-test_md5_sum_from_string.o lib21_hashfuncs.a ../02_clib/lib02_clib.a ../16_hideleave/lib16_hideleave.a ../14_hidewrite/lib14_hidewrite.a ../12_hide_mpi/lib12_hide_mpi.a ../11_memory_mpi/lib11_memory_mpi.a ../10_dumpinfo/lib10_dumpinfo.a ../10_defs/lib10_defs.a -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/exports/lib -lnetcdf -llapack  -lblas   -L/opt/gcc/9.1.0/openmpi-4.0.0/lib -L/opt/gcc/9.1.0/lib/../lib64 -L/opt/gcc/9.1.0/lib64/../lib64 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0/../../../../lib64 -L/lib/x86_64-linux-gnu -L/lib/../lib64 -L/usr/lib/x86_64-linux-gnu -L/opt/gcc/9.1.0/libxc-4.3.4/lib -L/opt/gcc/9.1.0/fftw-3.3.8/lib -L/opt/gcc/9.1.0/OpenBLAS/lib -L/opt/gcc/9.1.0/lib -L/opt/gcc/9.1.0/lib64 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0/../../.. -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi -lgfortran -lm -lquadmath -lpthread 
/usr/bin/ld: warning: libgfortran.so.4, needed by /usr/lib/x86_64-linux-gnu/liblapack.so, may conflict with libgfortran.so.5
/usr/bin/ld: warning: libgfortran.so.4, needed by /usr/lib/x86_64-linux-gnu/liblapack.so, may conflict with libgfortran.so.5
make[3]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/21_hashfuncs'
make  check-local
make[3]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/21_hashfuncs'
./test_md5_sum_from_file >test_md5_sum_from_file.log 2>&1; grep '^TEST FAILED' test_md5_sum_from_file.log && echo 'Unit test test_md5_sum_from_file FAILED' || echo 'Unit test test_md5_sum_from_file OK'
Unit test test_md5_sum_from_file OK
./test_md5_sum_from_string >test_md5_sum_from_string.log 2>&1; grep '^TEST FAILED' test_md5_sum_from_string.log && echo 'Unit test test_md5_sum_from_string FAILED' || echo 'Unit test test_md5_sum_from_string OK'
Unit test test_md5_sum_from_string OK
make[3]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/21_hashfuncs'
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/21_hashfuncs'
Making check in 27_toolbox_oop
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/27_toolbox_oop'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/27_toolbox_oop'
Making check in 28_numeric_noabirule
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/28_numeric_noabirule'
make  test_spline_integrate
make[3]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/28_numeric_noabirule'
mpif90 -DHAVE_CONFIG_H -I. -I../../../src/28_numeric_noabirule -I../..  -I/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/exports/include   -I../../../src/incs  -ffree-form -J/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods -O2 -mtune=native -march=native -g -ffree-line-length-none   -c -o test_spline_integrate-test_spline_integrate.o `test -f 'test_spline_integrate.F90' || echo '../../../src/28_numeric_noabirule/'`test_spline_integrate.F90
mpif90 -ffree-form -J/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods -O2 -mtune=native -march=native -g -ffree-line-length-none     -o test_spline_integrate test_spline_integrate-test_spline_integrate.o lib28_numeric_noabirule.a ../16_hideleave/lib16_hideleave.a ../14_hidewrite/lib14_hidewrite.a ../12_hide_mpi/lib12_hide_mpi.a ../11_memory_mpi/lib11_memory_mpi.a ../10_dumpinfo/lib10_dumpinfo.a ../10_defs/lib10_defs.a -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/exports/lib -lnetcdf -llapack  -lblas   -L/opt/gcc/9.1.0/openmpi-4.0.0/lib -L/opt/gcc/9.1.0/lib/../lib64 -L/opt/gcc/9.1.0/lib64/../lib64 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0/../../../../lib64 -L/lib/x86_64-linux-gnu -L/lib/../lib64 -L/usr/lib/x86_64-linux-gnu -L/opt/gcc/9.1.0/libxc-4.3.4/lib -L/opt/gcc/9.1.0/fftw-3.3.8/lib -L/opt/gcc/9.1.0/OpenBLAS/lib -L/opt/gcc/9.1.0/lib -L/opt/gcc/9.1.0/lib64 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0/../../.. -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi -lgfortran -lm -lquadmath -lpthread 
/usr/bin/ld: warning: libgfortran.so.4, needed by /usr/lib/x86_64-linux-gnu/liblapack.so, may conflict with libgfortran.so.5
/usr/bin/ld: warning: libgfortran.so.4, needed by /usr/lib/x86_64-linux-gnu/liblapack.so, may conflict with libgfortran.so.5
make[3]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/28_numeric_noabirule'
make  check-local
make[3]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/28_numeric_noabirule'
./test_spline_integrate >test_spline_integrate.log 2>&1; grep '^TEST FAILED' test_spline_integrate.log && echo 'Unit test test_spline_integrate FAILED' || echo 'Unit test test_spline_integrate OK'
Unit test test_spline_integrate OK
make[3]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/28_numeric_noabirule'
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/28_numeric_noabirule'
Making check in 29_kpoints
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/29_kpoints'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/29_kpoints'
Making check in 32_util
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/32_util'
make  test_radsintr
make[3]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/32_util'
mpif90 -DHAVE_CONFIG_H -I. -I../../../src/32_util -I../..  -I/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/exports/include   -I../../../src/incs  -ffree-form -J/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods -O2 -mtune=native -march=native -g -ffree-line-length-none   -c -o test_radsintr-test_radsintr.o `test -f 'test_radsintr.F90' || echo '../../../src/32_util/'`test_radsintr.F90
mpif90 -ffree-form -J/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/mods -O2 -mtune=native -march=native -g -ffree-line-length-none     -o test_radsintr test_radsintr-test_radsintr.o lib32_util.a ../27_toolbox_oop/lib27_toolbox_oop.a ../28_numeric_noabirule/lib28_numeric_noabirule.a ../16_hideleave/lib16_hideleave.a ../14_hidewrite/lib14_hidewrite.a ../12_hide_mpi/lib12_hide_mpi.a ../11_memory_mpi/lib11_memory_mpi.a ../10_dumpinfo/lib10_dumpinfo.a ../10_defs/lib10_defs.a -L/home/sangalli/data/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/fallbacks/exports/lib -lnetcdf -llapack  -lblas   -L/opt/gcc/9.1.0/openmpi-4.0.0/lib -L/opt/gcc/9.1.0/lib/../lib64 -L/opt/gcc/9.1.0/lib64/../lib64 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0/../../../../lib64 -L/lib/x86_64-linux-gnu -L/lib/../lib64 -L/usr/lib/x86_64-linux-gnu -L/opt/gcc/9.1.0/libxc-4.3.4/lib -L/opt/gcc/9.1.0/fftw-3.3.8/lib -L/opt/gcc/9.1.0/OpenBLAS/lib -L/opt/gcc/9.1.0/lib -L/opt/gcc/9.1.0/lib64 -L/opt/gcc/9.1.0/lib/gcc/x86_64-pc-linux-gnu/9.1.0/../../.. -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi -lgfortran -lm -lquadmath -lpthread 
/usr/bin/ld: warning: libgfortran.so.4, needed by /usr/lib/x86_64-linux-gnu/liblapack.so, may conflict with libgfortran.so.5
/usr/bin/ld: warning: libgfortran.so.4, needed by /usr/lib/x86_64-linux-gnu/liblapack.so, may conflict with libgfortran.so.5
make[3]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/32_util'
make  check-local
make[3]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/32_util'
./test_radsintr >test_radsintr.log 2>&1; grep '^TEST FAILED' test_radsintr.log && echo 'Unit test test_radsintr FAILED' || echo 'Unit test test_radsintr OK'
Unit test test_radsintr OK
make[3]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/32_util'
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/32_util'
Making check in 41_geometry
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/41_geometry'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/41_geometry'
Making check in 41_xc_lowlevel
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/41_xc_lowlevel'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/41_xc_lowlevel'
Making check in 42_libpaw
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/42_libpaw'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/42_libpaw'
Making check in 42_nlstrain
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/42_nlstrain'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/42_nlstrain'
Making check in 42_parser
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/42_parser'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/42_parser'
Making check in 43_ptgroups
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/43_ptgroups'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/43_ptgroups'
Making check in 43_wvl_wrappers
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/43_wvl_wrappers'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/43_wvl_wrappers'
Making check in 44_abitools
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/44_abitools'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/44_abitools'
Making check in 44_abitypes_defs
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/44_abitypes_defs'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/44_abitypes_defs'
Making check in 45_geomoptim
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/45_geomoptim'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/45_geomoptim'
Making check in 45_xgTools
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/45_xgTools'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/45_xgTools'
Making check in 46_diago
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/46_diago'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/46_diago'
Making check in 49_gw_toolbox_oop
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/49_gw_toolbox_oop'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/49_gw_toolbox_oop'
Making check in 51_manage_mpi
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/51_manage_mpi'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/51_manage_mpi'
Making check in 52_fft_mpi_noabirule
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/52_fft_mpi_noabirule'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/52_fft_mpi_noabirule'
Making check in 53_ffts
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/53_ffts'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/53_ffts'
Making check in 54_spacepar
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/54_spacepar'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/54_spacepar'
Making check in 55_abiutil
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/55_abiutil'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/55_abiutil'
Making check in 56_io_mpi
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/56_io_mpi'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/56_io_mpi'
Making check in 56_mixing
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/56_mixing'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/56_mixing'
Making check in 56_recipspace
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/56_recipspace'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/56_recipspace'
Making check in 56_xc
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/56_xc'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/56_xc'
Making check in 57_iopsp_parser
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/57_iopsp_parser'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/57_iopsp_parser'
Making check in 57_iovars
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/57_iovars'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/57_iovars'
Making check in 59_ionetcdf
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/59_ionetcdf'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/59_ionetcdf'
Making check in 61_occeig
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/61_occeig'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/61_occeig'
Making check in 62_cg_noabirule
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_cg_noabirule'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_cg_noabirule'
Making check in 62_ctqmc
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_ctqmc'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_ctqmc'
Making check in 62_iowfdenpot
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_iowfdenpot'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_iowfdenpot'
Making check in 62_poisson
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_poisson'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_poisson'
Making check in 62_wvl_wfs
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_wvl_wfs'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/62_wvl_wfs'
Making check in 63_bader
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/63_bader'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/63_bader'
Making check in 64_psp
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/64_psp'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/64_psp'
Making check in 65_paw
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/65_paw'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/65_paw'
Making check in 66_nonlocal
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/66_nonlocal'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/66_nonlocal'
Making check in 66_vdwxc
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/66_vdwxc'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/66_vdwxc'
Making check in 66_wfs
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/66_wfs'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/66_wfs'
Making check in 67_common
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/67_common'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/67_common'
Making check in 68_dmft
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/68_dmft'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/68_dmft'
Making check in 68_recursion
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/68_recursion'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/68_recursion'
Making check in 68_rsprc
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/68_rsprc'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/68_rsprc'
Making check in 69_wfdesc
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/69_wfdesc'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/69_wfdesc'
Making check in 70_gw
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/70_gw'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/70_gw'
Making check in 71_bse
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/71_bse'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/71_bse'
Making check in 71_wannier
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/71_wannier'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/71_wannier'
Making check in 72_response
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/72_response'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/72_response'
Making check in 77_ddb
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/77_ddb'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/77_ddb'
Making check in 77_suscep
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/77_suscep'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/77_suscep'
Making check in 78_effpot
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/78_effpot'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/78_effpot'
Making check in 78_eph
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/78_eph'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/78_eph'
Making check in 79_seqpar_mpi
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/79_seqpar_mpi'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/79_seqpar_mpi'
Making check in 80_tdep
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/80_tdep'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/80_tdep'
Making check in 83_cut3d
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/83_cut3d'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/83_cut3d'
Making check in 84_fold2Bloch
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/84_fold2Bloch'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/84_fold2Bloch'
Making check in 94_scfcv
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/94_scfcv'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/94_scfcv'
Making check in 95_drive
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/95_drive'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/95_drive'
Making check in 98_main
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main'
make[2]: Nothing to be done for 'check'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main'
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src'
make[2]: Nothing to be done for 'check-am'.
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src'
make[1]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src'
Making check in abichecks
make[1]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/abichecks'
==============================================================================
Keywords to use with the make command for abichecks tests directory:

tests_abirules     Launch the abirules tests
                   Warning: for some of the tests, the file make.log
                   must be present in the top directory. This means one has
                   to compile with the command: `make > make.log 2>&1`
tests_buildsys     Launch the buildsys tests

==============================================================================
[This file can be found at doc/help_make/help_make_abichecks.txt]
make[1]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/abichecks'
Making check in tests
make[1]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests'
make[2]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests'
==============================================================================

Issue `make check` to run a subset of tests (fast tests)

Use the script `runtests.py` located in ~abinit/tests to validate the build 
(requires python 2.7 or python >= 3.4)

To get help, cd to ~abinit/tests and issue:
    
    $ ./runtests.py --help

To run the test suite inside a build directory (e.g. ~abinit/build/tests), use:

    $ ../../tests/runtests.py

This will create a directory build/tests/Test_suite with the results of the tests.

Useful option when using manually the test suite:

    $ ../../tests/runtests.py -t0

which disables the timeout routine

To add a new test, please consult:

    https://docs.abinit.org/developers/testsuite_howto

==============================================================================
make  check-local
make[3]: Entering directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests'
[ -f "runtests.py" ] && ./runtests.py fast -o1 --no-colors --no-logo || ../../tests/runtests.py fast -o1 --no-colors --no-logo --with-pickle=0
Running on narro -- system Linux -- ncpus 4 -- Python 2.7.17 -- runtests.py-0.6.0
Regenerating database...
Running 26 test(s) with MPI_nprocs=1, OMP_nthreads=1, py_nthreads=1...
[TIP] runtests.py is using 1 CPUs but your architecture has 4 CPUs
You may want to use python threads to speed up the execution
Use `runtests -jNUM` to run with NUM threads
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t00/t00.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t00/t00.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t00/t00.stderr
 returned exit_code: 139

[fast][t00][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t00.out: 171 lines, 47 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t00/t00.out: 170 lines, 47 ignored [file=t00.out]
[fast][t00][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7fc12ac86f1f in ???
#1  0x7fc129a562e0 in ???
#2  0x7fc12cb18484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x51ad47 in __m_mover_MOD_mover
	at ../../../src/95_drive/m_mover.F90:604
#9  0x50d878 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1345
#10  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#11  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#12  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#13  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t00][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t01/t01.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t01/t01.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t01/t01.stderr
 returned exit_code: 139

[fast][t01][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t01.out: 128 lines, 26 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t01/t01.out: 127 lines, 26 ignored [file=t01.out]
[fast][t01][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7f0bc63a6f1f in ???
#1  0x7f0bc51762e0 in ???
#2  0x7f0bc8238484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t01][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t02/t02.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t02/t02.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t02/t02.stderr
 returned exit_code: 139

[fast][t02][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t02.out: 156 lines, 42 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t02/t02.out: 155 lines, 42 ignored [file=t02.out]
[fast][t02][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7fb182baef1f in ???
#1  0x7fb18197e2e0 in ???
#2  0x7fb184a40484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t02][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t03.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t03.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t03.stderr
 returned exit_code: 139

[fast][t03][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t03.out: 173 lines, 44 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t03.out: 172 lines, 44 ignored [file=t03.out]
[fast][t03][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7fa6c6256f1f in ???
#1  0x7fa6c50262e0 in ???
#2  0x7fa6c80e8484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t03][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t05.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t05.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t05.stderr
 returned exit_code: 14

File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t05o_WFK does not exist, will try netcdf version
[fast][t05][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t05.out: 150 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t05.out: 148 lines, 26 ignored [file=t05.out]
[fast][t05][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t05][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t03o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t06.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t06.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t06.stderr
 returned exit_code: 14

[fast][t06][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t06.out: 149 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t06.out: 147 lines, 26 ignored [file=t06.out]
[fast][t06][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t06][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t05o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t07.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t07.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t07.stderr
 returned exit_code: 14

[fast][t07][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t07.out: 185 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t07.out: 183 lines, 26 ignored [file=t07.out]
[fast][t07][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t07][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t05o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t08.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t08.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t08.stderr
 returned exit_code: 14

File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t08o_DEN does not exist, will try netcdf version
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t08o_DEN does not exist, will try netcdf version
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t08o_DEN does not exist, will try netcdf version
[fast][t08][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t08.out: 149 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t08.out: 147 lines, 26 ignored [file=t08.out]
[fast][t08][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t08][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t05o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t09.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t09.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t09.stderr
 returned exit_code: 14

File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t09o_WFK does not exist, will try netcdf version
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t09o_WFK does not exist, will try netcdf version
[fast][t09][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t09.out: 134 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t09.out: 132 lines, 26 ignored [file=t09.out]
[fast][t09][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t09][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t09i_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t11.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t11.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t11.stderr
 returned exit_code: 14

[fast][t11][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t11.out: 140 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t11.out: 138 lines, 26 ignored [file=t11.out]
[fast][t11][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t11][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t11i_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t12.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t12.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t12.stderr
 returned exit_code: 14

[fast][t12][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t12.out: 135 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t12.out: 133 lines, 26 ignored [file=t12.out]
[fast][t12][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t12][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t12i_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t14.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t14.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t14.stderr
 returned exit_code: 14

[fast][t14][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t14.out: 147 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t14.out: 145 lines, 26 ignored [file=t14.out]
[fast][t14][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t14][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t05o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t16.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t16.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t16.stderr
 returned exit_code: 14

[fast][t16][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t16.out: 148 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t03-t05-t06-t07-t08-t09-t11-t12-t14-t16/t16.out: 146 lines, 26 ignored [file=t16.out]
[fast][t16][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t16][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t05o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t04/t04.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t04/t04.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t04/t04.stderr
 returned exit_code: 139

[fast][t04][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t04.out: 152 lines, 26 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t04/t04.out: 151 lines, 26 ignored [file=t04.out]
[fast][t04][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7f739769ef1f in ???
#1  0x7f739646e2e0 in ???
#2  0x7f7399530484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t04][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t17.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t17.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t17.stderr
 returned exit_code: 139

File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t17o_WFK does not exist, will try netcdf version
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t17o_DEN does not exist, will try netcdf version
[fast][t17][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t17.out: 138 lines, 26 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t17.out: 137 lines, 26 ignored [file=t17.out]
[fast][t17][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7feb702def1f in ???
#1  0x7feb6f0ae2e0 in ???
#2  0x7feb72170484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t17][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t19.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t19.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t19.stderr
 returned exit_code: 14

[fast][t19][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t19.out: 135 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t19.out: 133 lines, 26 ignored [file=t19.out]
[fast][t19][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t19][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t17o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t20.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t20.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t20.stderr
 returned exit_code: 14

[fast][t20][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t20.out: 157 lines, 44 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t20.out: 153 lines, 41 ignored [file=t20.out]
[fast][t20][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t20][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t19o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t21.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t21.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t21.stderr
 returned exit_code: 14

[fast][t21][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t21.out: 160 lines, 44 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t21.out: 156 lines, 41 ignored [file=t21.out]
[fast][t21][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t21][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t20o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t23.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t23.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t23.stderr
 returned exit_code: 14

[fast][t23][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t23.out: 155 lines, 46 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t17-t19-t20-t21-t23/t23.out: 149 lines, 41 ignored [file=t23.out]
[fast][t23][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t23][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t23i_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t24/t24.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t24/t24.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t24/t24.stderr
 returned exit_code: 139

[fast][t24][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t24.out: 192 lines, 48 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t24/t24.out: 191 lines, 48 ignored [file=t24.out]
[fast][t24][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7f43fa9e6f1f in ???
#1  0x7f43f97b62e0 in ???
#2  0x7f43fc878484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t24][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t25/t25.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t25/t25.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t25/t25.stderr
 returned exit_code: 139

[fast][t25][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t25.out: 169 lines, 30 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t25/t25.out: 168 lines, 30 ignored [file=t25.out]
[fast][t25][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7fd894d66f1f in ???
#1  0x7fd893b362e0 in ???
#2  0x7fd896bf8484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t25][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t26/t26.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t26/t26.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t26/t26.stderr
 returned exit_code: 139

[fast][t26][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t26.out: 157 lines, 26 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t26/t26.out: 156 lines, 26 ignored [file=t26.out]
[fast][t26][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7fe24789ef1f in ???
#1  0x7fe24666e2e0 in ???
#2  0x7fe249730484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t26][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t27.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t27.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t27.stderr
 returned exit_code: 139

[fast][t27][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t27.out: 183 lines, 45 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t27.out: 182 lines, 45 ignored [file=t27.out]
[fast][t27][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7f5c62ff6f1f in ???
#1  0x7f5c61dc62e0 in ???
#2  0x7f5c64e88484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t27][np=1]
Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t28.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t28.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t28.stderr
 returned exit_code: 14

[fast][t28][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t28.out: 164 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t28.out: 162 lines, 26 ignored [file=t28.out]
[fast][t28][np=1]: fldiff.pl fatal error:
Unable to open input file /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t28o_TIM2_GEO [file=t28o_TIM2_GEO]
[fast][t28][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t28][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t27o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t29.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t29.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t29.stderr
 returned exit_code: 14

[fast][t29][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t29.out: 165 lines, 27 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t29.out: 163 lines, 26 ignored [file=t29.out]
[fast][t29][np=1]: fldiff.pl fatal error:
Unable to open input file /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t29o_TIM8_GEO [file=t29o_TIM8_GEO]
[fast][t29][np=1]Test was not expected to fail but subprocesses returned 14
--------------------------------------------------------------------------
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
with errorcode 14.

NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
You may or may not see output from other processes, depending on
exactly when Open MPI kills them.
--------------------------------------------------------------------------

YAML Error found in the stdout of [fast][t29][np=1]
--- !ERROR
src_file: m_inwffil.F90
src_line: 284
mpi_rank: 0
message: |
    Missing data file: t27o_WFK
...

Command   /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/src/98_main/abinit < /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t30/t30.stdin > /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t30/t30.stdout 2> /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t30/t30.stderr
 returned exit_code: 139

[fast][t30][np=1]: fldiff.pl fatal error:
The diff analysis cannot be done: the number of lines to be analysed differ.
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/fast/Refs/t30.out: 189 lines, 44 ignored
File /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t30/t30.out: 188 lines, 44 ignored [file=t30.out]
[fast][t30][np=1]Test was not expected to fail but subprocesses returned 139

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x7fc25dddef1f in ???
#1  0x7fc25cbae2e0 in ???
#2  0x7fc25fc70484 in ???
#3  0xa46e83 in __m_cgwf_MOD_cgwf
	at ../../../src/67_common/m_cgwf.F90:509
#4  0x57564a in __m_vtowfk_MOD_vtowfk
	at ../../../src/79_seqpar_mpi/m_vtowfk.F90:410
#5  0x55f161 in __m_vtorho_MOD_vtorho
	at ../../../src/79_seqpar_mpi/m_vtorho.F90:943
#6  0x52d908 in __m_scfcv_core_MOD_scfcv_core
	at ../../../src/94_scfcv/m_scfcv_core.F90:1552
#7  0x52249d in scfcv_scfcv
	at ../../../src/94_scfcv/m_scfcv.F90:746
#8  0x50f374 in __m_gstate_MOD_gstate
	at ../../../src/95_drive/m_gstate.F90:1330
#9  0x422e61 in __m_gstateimg_MOD_gstateimg
	at ../../../src/95_drive/m_gstateimg.F90:573
#10  0x412ed1 in __m_driver_MOD_driver
	at ../../../src/95_drive/m_driver.F90:705
#11  0x40a30e in abinit
	at ../../../src/98_main/abinit.F90:444
#12  0x406d2c in main
	at ../../../src/98_main/abinit.F90:94
/usr/bin/timeout: the monitored command dumped core
Segmentation fault

No YAML Error found in [fast][t30][np=1]
/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/pymods/testsuite.py:3344: UserWarning: exception while adding /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t28o_TIM2_GEO to tarball:
[Errno 2] No such file or directory: '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t28o_TIM2_GEO'
  warnings.warn("exception while adding %s to tarball:\n%s" % (p, exc))
/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/tests/pymods/testsuite.py:3344: UserWarning: exception while adding /data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t29o_TIM8_GEO to tarball:
[Errno 2] No such file or directory: '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests/Test_suite/fast_t27-t28-t29/t29o_TIM8_GEO'
  warnings.warn("exception while adding %s to tarball:\n%s" % (p, exc))

Suite   failed  passed  succeeded  skipped  disabled  run_etime  tot_etime
fast        11       0          0        0         0      18.54      19.05

Completed in 20.53 [s]. Average time for test=1.69 [s], stdev=1.51 [s]
Summary: failed=11, succeeded=0, passed=0, skipped=0, disabled=0

Execution completed.
Results in HTML format are available in Test_suite/suite_report.html
Makefile:4587: recipe for target 'check-local' failed
make[3]: *** [check-local] Error 11
make[3]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests'
Makefile:4456: recipe for target 'check-am' failed
make[2]: *** [check-am] Error 2
make[2]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests'
Makefile:4168: recipe for target 'check-recursive' failed
make[1]: *** [check-recursive] Error 1
make[1]: Leaving directory '/data/sangalli/Lavoro/Codici/abinit/abinit-git/releases/8.10/compile_netcdf/tests'
Makefile:2326: recipe for target 'check-recursive' failed
make: *** [check-recursive] Error 1

