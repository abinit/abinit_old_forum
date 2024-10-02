.. part 2 ..

config.status: executing depfiles commands
config.status: executing libtool commands
cd sources/atompaw-3.0.1.3 && make 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make  all-recursive
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
Making all in src
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3/src'
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o atomdata.lo atomdata.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c atomdata.f90 -o atomdata.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o globalmath.lo globalmath.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c globalmath.f90 -o globalmath.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o gridmod.lo gridmod.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c gridmod.f90 -o gridmod.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o libxc_mod.lo libxc_mod.F90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c libxc_mod.F90 -o libxc_mod.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o excor.lo excor.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c excor.f90 -o excor.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o interpolation_mod.lo interpolation_mod.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c interpolation_mod.f90 -o interpolation_mod.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o pkginfo.lo pkginfo.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c pkginfo.f90 -o pkginfo.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o anderson_realmix.lo anderson_realmix.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c anderson_realmix.f90 -o anderson_realmix.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o calcpotential.lo calcpotential.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c calcpotential.f90 -o calcpotential.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o radialsch.lo radialsch.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c radialsch.f90 -o radialsch.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o radialsr.lo radialsr.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c radialsr.f90 -o radialsr.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o aeatom.lo aeatom.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c aeatom.f90 -o aeatom.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o pseudo.lo pseudo.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c pseudo.f90 -o pseudo.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o abinitinterface.lo abinitinterface.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c abinitinterface.f90 -o abinitinterface.o
abinitinterface.f90(667): remark #8290: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+3'.
  write(std_out,'(a,2x,a,f4.1,a,f3.1,a,g6.1,a)') ch10,&
---------------------------------^
abinitinterface.f90(667): remark #8291: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+7'.
  write(std_out,'(a,2x,a,f4.1,a,f3.1,a,g6.1,a)') ch10,&
----------------------------------------^
abinitinterface.f90(696): remark #8290: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+3'.
  write(std_out,'(a,2x,a,i3,a,f5.3,a)') ch10,&
-------------------------------^
abinitinterface.f90(1807): remark #8291: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+7'.
  write(std_out,'(3(/,2x,a),2(/,2x,a,g10.4),4(/,2x,a,i4))') &
--------------------------------------^
abinitinterface.f90(1924): remark #8291: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+7'.
   write (funit,'(1x,i1,1x,i1,1x,i4,1x,es22.16,15x,a,i1,a)') &
-----------------------------------------^
abinitinterface.f90(1928): remark #8291: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+7'.
   write (funit,'(1x,i1,1x,i1,1x,i4,1x,es22.16,1x,es22.16,a,i1,a)') &
-----------------------------------------^
abinitinterface.f90(1928): remark #8291: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+7'.
   write (funit,'(1x,i1,1x,i1,1x,i4,1x,es22.16,1x,es22.16,a,i1,a)') &
----------------------------------------------------^
abinitinterface.f90(2294): remark #8291: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+7'.
   write (funit,'(1x,i1,1x,i1,1x,i4,1x,es22.16,15x,a,i1,a)') &
-----------------------------------------^
abinitinterface.f90(2298): remark #8291: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+7'.
   write (funit,'(1x,i1,1x,i1,1x,i4,1x,es22.16,1x,es22.16,a,i1,a)') &
-----------------------------------------^
abinitinterface.f90(2298): remark #8291: Recommended relationship between field width 'W' and the number of fractional digits 'D' in this edit descriptor is 'W>=D+7'.
   write (funit,'(1x,i1,1x,i1,1x,i4,1x,es22.16,1x,es22.16,a,i1,a)') &
----------------------------------------------------^
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o basis.lo basis.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c basis.f90 -o basis.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o pwscfinterface.lo pwscfinterface.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c pwscfinterface.f90 -o pwscfinterface.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o atompaw_lib.lo atompaw_lib.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c atompaw_lib.f90 -o atompaw_lib.o
/bin/sh ../libtool --tag=FC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -version-info 0:0:0  -o libatompaw.la -rpath /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib abinitinterface.lo aeatom.lo anderson_realmix.lo atomdata.lo basis.lo calcpotential.lo excor.lo globalmath.lo gridmod.lo interpolation_mod.lo libxc_mod.lo pwscfinterface.lo pseudo.lo radialsch.lo radialsr.lo atompaw_lib.lo pkginfo.lo  -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc -L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/mkl/lib/intel64 -Wl,--start-group  -lmkl_intel_lp64 -lmkl_sequential -lmkl_core -Wl,--end-group -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc 
libtool: link: ar cru .libs/libatompaw.a  abinitinterface.o aeatom.o anderson_realmix.o atomdata.o basis.o calcpotential.o excor.o globalmath.o gridmod.o interpolation_mod.o libxc_mod.o pwscfinterface.o pseudo.o radialsch.o radialsr.o atompaw_lib.o pkginfo.o
libtool: link: ranlib .libs/libatompaw.a
libtool: link: ( cd ".libs" && rm -f "libatompaw.la" && ln -s "../libatompaw.la" "libatompaw.la" )
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o atompaw_prog.o atompaw_prog.f90
/bin/sh ../libtool --tag=FC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include   -o atompaw atompaw_prog.o libatompaw.la -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc -L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/mkl/lib/intel64 -Wl,--start-group  -lmkl_intel_lp64 -lmkl_sequential -lmkl_core -Wl,--end-group -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc 
libtool: link: /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -o atompaw atompaw_prog.o --start-group --end-group  ./.libs/libatompaw.a -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/mkl/lib/intel64 -lmkl_intel_lp64 -lmkl_sequential -lmkl_core /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libnetcdf.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f90.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f77.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-rte.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-pal.a -ldl -lnsl -lutil /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libxc.a -pthread
ifort: command line warning #10006: ignoring unknown option '-fstart-group'
ifort: command line warning #10006: ignoring unknown option '-fend-group'
ifort: command line remark #10010: option '-pthread' is deprecated and will be removed in a future release. See '-help deprecated'
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o graphatom.o graphatom.f90
/bin/sh ../libtool --tag=FC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include   -o graphatom graphatom.o libatompaw.la -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc -L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/mkl/lib/intel64 -Wl,--start-group  -lmkl_intel_lp64 -lmkl_sequential -lmkl_core -Wl,--end-group -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc 
libtool: link: /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -o graphatom graphatom.o --start-group --end-group  ./.libs/libatompaw.a -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/mkl/lib/intel64 -lmkl_intel_lp64 -lmkl_sequential -lmkl_core /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libnetcdf.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f90.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f77.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-rte.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-pal.a -ldl -lnsl -lutil /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libxc.a -pthread
ifort: command line warning #10006: ignoring unknown option '-fstart-group'
ifort: command line warning #10006: ignoring unknown option '-fend-group'
ifort: command line remark #10010: option '-pthread' is deprecated and will be removed in a future release. See '-help deprecated'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3/src'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make[5]: Nothing to be done for `all-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
cd sources/atompaw-3.0.1.3 && make install 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
Making install in src
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3/src'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3/src'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib"
 /bin/sh ../libtool   --mode=install /usr/bin/install -c   libatompaw.la '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib'
libtool: install: /usr/bin/install -c .libs/libatompaw.lai /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libatompaw.la
libtool: install: /usr/bin/install -c .libs/libatompaw.a /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libatompaw.a
libtool: install: chmod 644 /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libatompaw.a
libtool: install: ranlib /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libatompaw.a
libtool: finish: PATH="/opt/pgi/linux86-64/7.1-4/bin:/usr/lib64/openmpi/1.4-gcc/bin:/usr/kerberos/bin:/opt/intel/fce/10.0.023/bin:/usr/local/bin:/bin:/usr/bin:/home/temok/bin/:/home/temok/bin/AtomEye:/home/temok/opt/abinit-6.2.3/build-serial-ifort10-gcc41/src/98_main/:/home/temok/opt/openmpi-1.4.2/bin:/home/temok/myprograms/:./:/sbin" ldconfig -n /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib
----------------------------------------------------------------------
Libraries have been installed in:
   /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib

If you ever happen to want to link against installed libraries
in a given directory, LIBDIR, you must either use libtool, and
specify the full pathname of the library, or use the `-LLIBDIR'
flag during linking and do at least one of the following:
   - add LIBDIR to the `LD_LIBRARY_PATH' environment variable
     during execution
   - add LIBDIR to the `LD_RUN_PATH' environment variable
     during linking
   - use the `-Wl,-rpath -Wl,LIBDIR' linker flag
   - have your system administrator add LIBDIR to `/etc/ld.so.conf'

See any operating system documentation about shared libraries for
more information, such as the ld(1) and ld.so(8) manual pages.
----------------------------------------------------------------------
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin"
  /bin/sh ../libtool   --mode=install /usr/bin/install -c atompaw '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./atompaw-abinit'
libtool: install: /usr/bin/install -c atompaw /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./atompaw-abinit
  /bin/sh ../libtool   --mode=install /usr/bin/install -c graphatom '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./graphatom-abinit'
libtool: install: /usr/bin/install -c graphatom /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./graphatom-abinit
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3/src'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3/src'
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make[5]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw"
/bin/mkdir -p '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/example/C'
 /usr/bin/install -c -m 644  example/C/C.atomicdata example/C/C.atompaw.input '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/example/C'
/bin/mkdir -p '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/example/F'
 /usr/bin/install -c -m 644  example/F/F.atomicdata.gz example/F/F.GGA-PBE-paw.abinit.gz example/F/F.GGA-PBE-paw.UPF.gz example/F/F.atompaw.input '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/example/F'
/bin/mkdir -p '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/example/Li'
 /usr/bin/install -c -m 644  example/Li/Li.atomicdata.gz example/Li/Li.GGA-PBE-paw.abinit.gz example/Li/Li.GGA-PBE-paw.UPF.gz example/Li/Li.atompaw.input '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/example/Li'
/bin/mkdir -p '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/example/Cu'
 /usr/bin/install -c -m 644  example/Cu/Cu.atomicdata example/Cu/Cu.atompaw.input '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/example/Cu'
/bin/mkdir -p '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/doc'
 /usr/bin/install -c -m 644  doc/atompaw-usersguide.pdf '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/atompaw/doc'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/atompaw-3.0.1.3'
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
Checking build of atompaw fallback
test -e stamps/atompaw-install-stamp
make wannier90
make[2]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
cd sources && \
	  gzip -cd /home/temok/.abinit/tarballs/wannier90-1.2.0.1.tar.gz | tar xf -
No patch to apply
cd sources/wannier90-1.2.0.1 && \
	  CPP="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E" \
	  CPPFLAGS=" -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" \
	  CC="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc" \
	  CFLAGS="-g -O2" \
	  CXX="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx" \
	  CXXFLAGS="" \
          FCCPP="cpp -P -std=c99" \
	  F77="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90" \
	  FFLAGS="-fixed -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" \
	  F90="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90" \
	  F90FLAGS="-free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" \
	  FC="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90" \
	  FCFLAGS="-free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" \
	  LDFLAGS=" " \
	  LIBS="-L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/mkl/lib/intel64 -Wl,--start-group  -lmkl_intel_lp64 -lmkl_sequential -lmkl_core -Wl,--end-group  -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -letsf_io_low_level -letsf_io_utils -letsf_io " \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib" \
	  /bin/sh ./configure \
	    --prefix="/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports" \
	    --program-suffix="-abinit" \
	    --disable-shared --enable-static
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking for style of include used by make... GNU
checking for gcc... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... configure: error: in `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/wannier90-1.2.0.1':
configure: error: cannot run C compiled programs.
If you meant to cross compile, use `--host'.
See `config.log' for more details.
make[2]: *** [stamps/wannier90-config-stamp] Error 1
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
make[1]: [all-local] Error 2 (ignored)
Checking build of wannier90 fallback
test -e stamps/wannier90-install-stamp
make[1]: *** [all-local] Error 1
make[1]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
make: *** [multi] Error 2
