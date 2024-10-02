cd fallbacks && make 
make[1]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
make fox
make[2]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
The build of fox has been disabled
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
Checking build of fox fallback
test -e stamps/fox-install-stamp
make libxc
make[2]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
cd sources && \
	  gzip -cd /home/temok/.abinit/tarballs/libxc-1.1.0.1.tar.gz | tar xf -
patch -d sources/libxc-1.1.0.1 -p1 <../../fallbacks/patches/libxc-1.1.0.1-0001.patch
patching file src/gga_x_b88.c
cd sources/libxc-1.1.0.1 && \
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
	  LIBS="" \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib" \
	  /bin/sh ./configure \
	    --prefix="/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports" \
	    --program-suffix="-abinit" \
	    --enable-fortran --enable-static --disable-shared
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
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
checking dependency style of /home/temok/opt/openmpi-1.4.2/bin/mpicc... gcc3
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
checking for gcc... (cached) /home/temok/opt/openmpi-1.4.2/bin/mpicc
checking whether we are using the GNU C compiler... (cached) yes
checking whether /home/temok/opt/openmpi-1.4.2/bin/mpicc accepts -g... (cached) yes
checking for /home/temok/opt/openmpi-1.4.2/bin/mpicc option to accept ISO C89... (cached) none needed
checking dependency style of /home/temok/opt/openmpi-1.4.2/bin/mpicc... (cached) gcc3
checking whether /home/temok/opt/openmpi-1.4.2/bin/mpicc and cc understand -c and -o together... yes
checking for inline... inline
checking for ANSI C header files... (cached) yes
checking for working alloca.h... yes
checking for alloca... yes
checking size of void*... 8
checking for sqrtf in -lm... yes
checking for cbrt in -lm... yes
checking for cbrtf in -lm... yes
checking whether we are using the GNU Fortran compiler... no
checking whether /home/temok/opt/openmpi-1.4.2/bin/mpif90 accepts -g... yes
checking whether we are using the GNU Fortran compiler... (cached) no
checking whether /home/temok/opt/openmpi-1.4.2/bin/mpif90 accepts -g... (cached) yes
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
checking for Fortran flag to compile .f90 files... none
configure: Using FCFLAGS="-free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include"
checking how to get verbose linking output from /home/temok/opt/openmpi-1.4.2/bin/mpif90... -v
checking for Fortran libraries of /home/temok/opt/openmpi-1.4.2/bin/mpif90...  -L/home/temok/opt/openmpi-1.4.2/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -lnsl -lutil -L/usr -limf -lm -L/opt/intel/mkl/9.1.023/lib/em64t -L/opt/intel/fce/10.0.023/lib -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/ -L/usr/lib64 -lifport -lifcoremt -lsvml -lipgo -lirc -lpthread -lirc_s
checking for dummy main to link with Fortran libraries... none
checking for Fortran name-mangling scheme... lower case, underscore, no extra underscore
checking whether the compiler accepts very long lines... yes
checking whether the compiler accepts "line-number" lines cast by the preprocessor... yes
checking fortran 90 modules extension... mod
checking for the size of a Fortran integer... 4 bytes
checking for which C type corresponds to Fortran integer... int
configure: creating ./config.status
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating testsuite/Makefile
config.status: creating build/Makefile
config.status: creating build/libxc.pc
config.status: creating build/libxc.spec
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing libtool commands
cd sources/libxc-1.1.0.1 && make 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make  all-recursive
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
Making all in build
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/build'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/build'
Making all in src
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
./get_funcs.pl . ..
make  all-am
make[6]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT special_functions.lo -MD -MP -MF .deps/special_functions.Tpo -c -o special_functions.lo special_functions.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT special_functions.lo -MD -MP -MF .deps/special_functions.Tpo -c special_functions.c -o special_functions.o
mv -f .deps/special_functions.Tpo .deps/special_functions.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT integrate.lo -MD -MP -MF .deps/integrate.Tpo -c -o integrate.lo integrate.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT integrate.lo -MD -MP -MF .deps/integrate.Tpo -c integrate.c -o integrate.o
mv -f .deps/integrate.Tpo .deps/integrate.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT util.lo -MD -MP -MF .deps/util.Tpo -c -o util.lo util.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT util.lo -MD -MP -MF .deps/util.Tpo -c util.c -o util.o
mv -f .deps/util.Tpo .deps/util.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mix_func.lo -MD -MP -MF .deps/mix_func.Tpo -c -o mix_func.lo mix_func.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mix_func.lo -MD -MP -MF .deps/mix_func.Tpo -c mix_func.c -o mix_func.o
mv -f .deps/mix_func.Tpo .deps/mix_func.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT functionals.lo -MD -MP -MF .deps/functionals.Tpo -c -o functionals.lo functionals.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT functionals.lo -MD -MP -MF .deps/functionals.Tpo -c functionals.c -o functionals.o
mv -f .deps/functionals.Tpo .deps/functionals.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda.lo -MD -MP -MF .deps/lda.Tpo -c -o lda.lo lda.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda.lo -MD -MP -MF .deps/lda.Tpo -c lda.c -o lda.o
mv -f .deps/lda.Tpo .deps/lda.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_x.lo -MD -MP -MF .deps/lda_x.Tpo -c -o lda_x.lo lda_x.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_x.lo -MD -MP -MF .deps/lda_x.Tpo -c lda_x.c -o lda_x.o
mv -f .deps/lda_x.Tpo .deps/lda_x.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_x_1d.lo -MD -MP -MF .deps/lda_x_1d.Tpo -c -o lda_x_1d.lo lda_x_1d.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_x_1d.lo -MD -MP -MF .deps/lda_x_1d.Tpo -c lda_x_1d.c -o lda_x_1d.o
mv -f .deps/lda_x_1d.Tpo .deps/lda_x_1d.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_x_2d.lo -MD -MP -MF .deps/lda_x_2d.Tpo -c -o lda_x_2d.lo lda_x_2d.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_x_2d.lo -MD -MP -MF .deps/lda_x_2d.Tpo -c lda_x_2d.c -o lda_x_2d.o
mv -f .deps/lda_x_2d.Tpo .deps/lda_x_2d.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_wigner.lo -MD -MP -MF .deps/lda_c_wigner.Tpo -c -o lda_c_wigner.lo lda_c_wigner.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_wigner.lo -MD -MP -MF .deps/lda_c_wigner.Tpo -c lda_c_wigner.c -o lda_c_wigner.o
mv -f .deps/lda_c_wigner.Tpo .deps/lda_c_wigner.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_gombas.lo -MD -MP -MF .deps/lda_c_gombas.Tpo -c -o lda_c_gombas.lo lda_c_gombas.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_gombas.lo -MD -MP -MF .deps/lda_c_gombas.Tpo -c lda_c_gombas.c -o lda_c_gombas.o
mv -f .deps/lda_c_gombas.Tpo .deps/lda_c_gombas.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_rpa.lo -MD -MP -MF .deps/lda_c_rpa.Tpo -c -o lda_c_rpa.lo lda_c_rpa.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_rpa.lo -MD -MP -MF .deps/lda_c_rpa.Tpo -c lda_c_rpa.c -o lda_c_rpa.o
mv -f .deps/lda_c_rpa.Tpo .deps/lda_c_rpa.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_hl.lo -MD -MP -MF .deps/lda_c_hl.Tpo -c -o lda_c_hl.lo lda_c_hl.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_hl.lo -MD -MP -MF .deps/lda_c_hl.Tpo -c lda_c_hl.c -o lda_c_hl.o
mv -f .deps/lda_c_hl.Tpo .deps/lda_c_hl.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_vwn.lo -MD -MP -MF .deps/lda_c_vwn.Tpo -c -o lda_c_vwn.lo lda_c_vwn.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_vwn.lo -MD -MP -MF .deps/lda_c_vwn.Tpo -c lda_c_vwn.c -o lda_c_vwn.o
mv -f .deps/lda_c_vwn.Tpo .deps/lda_c_vwn.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_pz.lo -MD -MP -MF .deps/lda_c_pz.Tpo -c -o lda_c_pz.lo lda_c_pz.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_pz.lo -MD -MP -MF .deps/lda_c_pz.Tpo -c lda_c_pz.c -o lda_c_pz.o
mv -f .deps/lda_c_pz.Tpo .deps/lda_c_pz.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_pw.lo -MD -MP -MF .deps/lda_c_pw.Tpo -c -o lda_c_pw.lo lda_c_pw.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_pw.lo -MD -MP -MF .deps/lda_c_pw.Tpo -c lda_c_pw.c -o lda_c_pw.o
mv -f .deps/lda_c_pw.Tpo .deps/lda_c_pw.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_ml1.lo -MD -MP -MF .deps/lda_c_ml1.Tpo -c -o lda_c_ml1.lo lda_c_ml1.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_ml1.lo -MD -MP -MF .deps/lda_c_ml1.Tpo -c lda_c_ml1.c -o lda_c_ml1.o
mv -f .deps/lda_c_ml1.Tpo .deps/lda_c_ml1.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_xc_teter93.lo -MD -MP -MF .deps/lda_xc_teter93.Tpo -c -o lda_xc_teter93.lo lda_xc_teter93.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_xc_teter93.lo -MD -MP -MF .deps/lda_xc_teter93.Tpo -c lda_xc_teter93.c -o lda_xc_teter93.o
mv -f .deps/lda_xc_teter93.Tpo .deps/lda_xc_teter93.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_1d_csc.lo -MD -MP -MF .deps/lda_c_1d_csc.Tpo -c -o lda_c_1d_csc.lo lda_c_1d_csc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_1d_csc.lo -MD -MP -MF .deps/lda_c_1d_csc.Tpo -c lda_c_1d_csc.c -o lda_c_1d_csc.o
mv -f .deps/lda_c_1d_csc.Tpo .deps/lda_c_1d_csc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_2d_amgb.lo -MD -MP -MF .deps/lda_c_2d_amgb.Tpo -c -o lda_c_2d_amgb.lo lda_c_2d_amgb.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_2d_amgb.lo -MD -MP -MF .deps/lda_c_2d_amgb.Tpo -c lda_c_2d_amgb.c -o lda_c_2d_amgb.o
mv -f .deps/lda_c_2d_amgb.Tpo .deps/lda_c_2d_amgb.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_c_2d_prm.lo -MD -MP -MF .deps/lda_c_2d_prm.Tpo -c -o lda_c_2d_prm.lo lda_c_2d_prm.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_c_2d_prm.lo -MD -MP -MF .deps/lda_c_2d_prm.Tpo -c lda_c_2d_prm.c -o lda_c_2d_prm.o
mv -f .deps/lda_c_2d_prm.Tpo .deps/lda_c_2d_prm.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lda_k_tf.lo -MD -MP -MF .deps/lda_k_tf.Tpo -c -o lda_k_tf.lo lda_k_tf.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lda_k_tf.lo -MD -MP -MF .deps/lda_k_tf.Tpo -c lda_k_tf.c -o lda_k_tf.o
mv -f .deps/lda_k_tf.Tpo .deps/lda_k_tf.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga.lo -MD -MP -MF .deps/gga.Tpo -c -o gga.lo gga.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga.lo -MD -MP -MF .deps/gga.Tpo -c gga.c -o gga.o
mv -f .deps/gga.Tpo .deps/gga.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_lg93.lo -MD -MP -MF .deps/gga_x_lg93.Tpo -c -o gga_x_lg93.lo gga_x_lg93.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_lg93.lo -MD -MP -MF .deps/gga_x_lg93.Tpo -c gga_x_lg93.c -o gga_x_lg93.o
mv -f .deps/gga_x_lg93.Tpo .deps/gga_x_lg93.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_pbe.lo -MD -MP -MF .deps/gga_x_pbe.Tpo -c -o gga_x_pbe.lo gga_x_pbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_pbe.lo -MD -MP -MF .deps/gga_x_pbe.Tpo -c gga_x_pbe.c -o gga_x_pbe.o
mv -f .deps/gga_x_pbe.Tpo .deps/gga_x_pbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_rpbe.lo -MD -MP -MF .deps/gga_x_rpbe.Tpo -c -o gga_x_rpbe.lo gga_x_rpbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_rpbe.lo -MD -MP -MF .deps/gga_x_rpbe.Tpo -c gga_x_rpbe.c -o gga_x_rpbe.o
mv -f .deps/gga_x_rpbe.Tpo .deps/gga_x_rpbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_pbea.lo -MD -MP -MF .deps/gga_x_pbea.Tpo -c -o gga_x_pbea.lo gga_x_pbea.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_pbea.lo -MD -MP -MF .deps/gga_x_pbea.Tpo -c gga_x_pbea.c -o gga_x_pbea.o
mv -f .deps/gga_x_pbea.Tpo .deps/gga_x_pbea.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_mpbe.lo -MD -MP -MF .deps/gga_x_mpbe.Tpo -c -o gga_x_mpbe.lo gga_x_mpbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_mpbe.lo -MD -MP -MF .deps/gga_x_mpbe.Tpo -c gga_x_mpbe.c -o gga_x_mpbe.o
mv -f .deps/gga_x_mpbe.Tpo .deps/gga_x_mpbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_herman.lo -MD -MP -MF .deps/gga_x_herman.Tpo -c -o gga_x_herman.lo gga_x_herman.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_herman.lo -MD -MP -MF .deps/gga_x_herman.Tpo -c gga_x_herman.c -o gga_x_herman.o
mv -f .deps/gga_x_herman.Tpo .deps/gga_x_herman.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_b86.lo -MD -MP -MF .deps/gga_x_b86.Tpo -c -o gga_x_b86.lo gga_x_b86.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_b86.lo -MD -MP -MF .deps/gga_x_b86.Tpo -c gga_x_b86.c -o gga_x_b86.o
mv -f .deps/gga_x_b86.Tpo .deps/gga_x_b86.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_b86_mgc.lo -MD -MP -MF .deps/gga_x_b86_mgc.Tpo -c -o gga_x_b86_mgc.lo gga_x_b86_mgc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_b86_mgc.lo -MD -MP -MF .deps/gga_x_b86_mgc.Tpo -c gga_x_b86_mgc.c -o gga_x_b86_mgc.o
mv -f .deps/gga_x_b86_mgc.Tpo .deps/gga_x_b86_mgc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_b88.lo -MD -MP -MF .deps/gga_x_b88.Tpo -c -o gga_x_b88.lo gga_x_b88.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_b88.lo -MD -MP -MF .deps/gga_x_b88.Tpo -c gga_x_b88.c -o gga_x_b88.o
mv -f .deps/gga_x_b88.Tpo .deps/gga_x_b88.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_g96.lo -MD -MP -MF .deps/gga_x_g96.Tpo -c -o gga_x_g96.lo gga_x_g96.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_g96.lo -MD -MP -MF .deps/gga_x_g96.Tpo -c gga_x_g96.c -o gga_x_g96.o
mv -f .deps/gga_x_g96.Tpo .deps/gga_x_g96.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_pw86.lo -MD -MP -MF .deps/gga_x_pw86.Tpo -c -o gga_x_pw86.lo gga_x_pw86.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_pw86.lo -MD -MP -MF .deps/gga_x_pw86.Tpo -c gga_x_pw86.c -o gga_x_pw86.o
mv -f .deps/gga_x_pw86.Tpo .deps/gga_x_pw86.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_pw91.lo -MD -MP -MF .deps/gga_x_pw91.Tpo -c -o gga_x_pw91.lo gga_x_pw91.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_pw91.lo -MD -MP -MF .deps/gga_x_pw91.Tpo -c gga_x_pw91.c -o gga_x_pw91.o
mv -f .deps/gga_x_pw91.Tpo .deps/gga_x_pw91.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_optx.lo -MD -MP -MF .deps/gga_x_optx.Tpo -c -o gga_x_optx.lo gga_x_optx.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_optx.lo -MD -MP -MF .deps/gga_x_optx.Tpo -c gga_x_optx.c -o gga_x_optx.o
mv -f .deps/gga_x_optx.Tpo .deps/gga_x_optx.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_dk87.lo -MD -MP -MF .deps/gga_x_dk87.Tpo -c -o gga_x_dk87.lo gga_x_dk87.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_dk87.lo -MD -MP -MF .deps/gga_x_dk87.Tpo -c gga_x_dk87.c -o gga_x_dk87.o
mv -f .deps/gga_x_dk87.Tpo .deps/gga_x_dk87.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_ft97.lo -MD -MP -MF .deps/gga_x_ft97.Tpo -c -o gga_x_ft97.lo gga_x_ft97.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_ft97.lo -MD -MP -MF .deps/gga_x_ft97.Tpo -c gga_x_ft97.c -o gga_x_ft97.o
mv -f .deps/gga_x_ft97.Tpo .deps/gga_x_ft97.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_wc.lo -MD -MP -MF .deps/gga_x_wc.Tpo -c -o gga_x_wc.lo gga_x_wc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_wc.lo -MD -MP -MF .deps/gga_x_wc.Tpo -c gga_x_wc.c -o gga_x_wc.o
mv -f .deps/gga_x_wc.Tpo .deps/gga_x_wc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_am05.lo -MD -MP -MF .deps/gga_x_am05.Tpo -c -o gga_x_am05.lo gga_x_am05.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_am05.lo -MD -MP -MF .deps/gga_x_am05.Tpo -c gga_x_am05.c -o gga_x_am05.o
mv -f .deps/gga_x_am05.Tpo .deps/gga_x_am05.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_bayesian.lo -MD -MP -MF .deps/gga_x_bayesian.Tpo -c -o gga_x_bayesian.lo gga_x_bayesian.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_bayesian.lo -MD -MP -MF .deps/gga_x_bayesian.Tpo -c gga_x_bayesian.c -o gga_x_bayesian.o
mv -f .deps/gga_x_bayesian.Tpo .deps/gga_x_bayesian.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_kt.lo -MD -MP -MF .deps/gga_x_kt.Tpo -c -o gga_x_kt.lo gga_x_kt.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_kt.lo -MD -MP -MF .deps/gga_x_kt.Tpo -c gga_x_kt.c -o gga_x_kt.o
mv -f .deps/gga_x_kt.Tpo .deps/gga_x_kt.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_perdew.lo -MD -MP -MF .deps/gga_perdew.Tpo -c -o gga_perdew.lo gga_perdew.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_perdew.lo -MD -MP -MF .deps/gga_perdew.Tpo -c gga_perdew.c -o gga_perdew.o
mv -f .deps/gga_perdew.Tpo .deps/gga_perdew.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_c_pbe.lo -MD -MP -MF .deps/gga_c_pbe.Tpo -c -o gga_c_pbe.lo gga_c_pbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_c_pbe.lo -MD -MP -MF .deps/gga_c_pbe.Tpo -c gga_c_pbe.c -o gga_c_pbe.o
mv -f .deps/gga_c_pbe.Tpo .deps/gga_c_pbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_c_lyp.lo -MD -MP -MF .deps/gga_c_lyp.Tpo -c -o gga_c_lyp.lo gga_c_lyp.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_c_lyp.lo -MD -MP -MF .deps/gga_c_lyp.Tpo -c gga_c_lyp.c -o gga_c_lyp.o
mv -f .deps/gga_c_lyp.Tpo .deps/gga_c_lyp.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_c_p86.lo -MD -MP -MF .deps/gga_c_p86.Tpo -c -o gga_c_p86.lo gga_c_p86.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_c_p86.lo -MD -MP -MF .deps/gga_c_p86.Tpo -c gga_c_p86.c -o gga_c_p86.o
mv -f .deps/gga_c_p86.Tpo .deps/gga_c_p86.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_c_pw91.lo -MD -MP -MF .deps/gga_c_pw91.Tpo -c -o gga_c_pw91.lo gga_c_pw91.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_c_pw91.lo -MD -MP -MF .deps/gga_c_pw91.Tpo -c gga_c_pw91.c -o gga_c_pw91.o
mv -f .deps/gga_c_pw91.Tpo .deps/gga_c_pw91.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_c_am05.lo -MD -MP -MF .deps/gga_c_am05.Tpo -c -o gga_c_am05.lo gga_c_am05.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_c_am05.lo -MD -MP -MF .deps/gga_c_am05.Tpo -c gga_c_am05.c -o gga_c_am05.o
mv -f .deps/gga_c_am05.Tpo .deps/gga_c_am05.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_c_lm.lo -MD -MP -MF .deps/gga_c_lm.Tpo -c -o gga_c_lm.lo gga_c_lm.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_c_lm.lo -MD -MP -MF .deps/gga_c_lm.Tpo -c gga_c_lm.c -o gga_c_lm.o
mv -f .deps/gga_c_lm.Tpo .deps/gga_c_lm.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_c_wl.lo -MD -MP -MF .deps/gga_c_wl.Tpo -c -o gga_c_wl.lo gga_c_wl.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_c_wl.lo -MD -MP -MF .deps/gga_c_wl.Tpo -c gga_c_wl.c -o gga_c_wl.o
mv -f .deps/gga_c_wl.Tpo .deps/gga_c_wl.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_c_wi.lo -MD -MP -MF .deps/gga_c_wi.Tpo -c -o gga_c_wi.lo gga_c_wi.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_c_wi.lo -MD -MP -MF .deps/gga_c_wi.Tpo -c gga_c_wi.c -o gga_c_wi.o
mv -f .deps/gga_c_wi.Tpo .deps/gga_c_wi.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_lb.lo -MD -MP -MF .deps/gga_x_lb.Tpo -c -o gga_x_lb.lo gga_x_lb.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_lb.lo -MD -MP -MF .deps/gga_x_lb.Tpo -c gga_x_lb.c -o gga_x_lb.o
mv -f .deps/gga_x_lb.Tpo .deps/gga_x_lb.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_xc_b97.lo -MD -MP -MF .deps/gga_xc_b97.Tpo -c -o gga_xc_b97.lo gga_xc_b97.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_xc_b97.lo -MD -MP -MF .deps/gga_xc_b97.Tpo -c gga_xc_b97.c -o gga_xc_b97.o
mv -f .deps/gga_xc_b97.Tpo .deps/gga_xc_b97.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_xc_edf1.lo -MD -MP -MF .deps/gga_xc_edf1.Tpo -c -o gga_xc_edf1.lo gga_xc_edf1.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_xc_edf1.lo -MD -MP -MF .deps/gga_xc_edf1.Tpo -c gga_xc_edf1.c -o gga_xc_edf1.o
mv -f .deps/gga_xc_edf1.Tpo .deps/gga_xc_edf1.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_xc_1w.lo -MD -MP -MF .deps/gga_xc_1w.Tpo -c -o gga_xc_1w.lo gga_xc_1w.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_xc_1w.lo -MD -MP -MF .deps/gga_xc_1w.Tpo -c gga_xc_1w.c -o gga_xc_1w.o
mv -f .deps/gga_xc_1w.Tpo .deps/gga_xc_1w.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_2d_b86.lo -MD -MP -MF .deps/gga_x_2d_b86.Tpo -c -o gga_x_2d_b86.lo gga_x_2d_b86.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_2d_b86.lo -MD -MP -MF .deps/gga_x_2d_b86.Tpo -c gga_x_2d_b86.c -o gga_x_2d_b86.o
mv -f .deps/gga_x_2d_b86.Tpo .deps/gga_x_2d_b86.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_2d_b86_mgc.lo -MD -MP -MF .deps/gga_x_2d_b86_mgc.Tpo -c -o gga_x_2d_b86_mgc.lo gga_x_2d_b86_mgc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_2d_b86_mgc.lo -MD -MP -MF .deps/gga_x_2d_b86_mgc.Tpo -c gga_x_2d_b86_mgc.c -o gga_x_2d_b86_mgc.o
mv -f .deps/gga_x_2d_b86_mgc.Tpo .deps/gga_x_2d_b86_mgc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_2d_b88.lo -MD -MP -MF .deps/gga_x_2d_b88.Tpo -c -o gga_x_2d_b88.lo gga_x_2d_b88.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_2d_b88.lo -MD -MP -MF .deps/gga_x_2d_b88.Tpo -c gga_x_2d_b88.c -o gga_x_2d_b88.o
mv -f .deps/gga_x_2d_b88.Tpo .deps/gga_x_2d_b88.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_x_2d_pbe.lo -MD -MP -MF .deps/gga_x_2d_pbe.Tpo -c -o gga_x_2d_pbe.lo gga_x_2d_pbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_x_2d_pbe.lo -MD -MP -MF .deps/gga_x_2d_pbe.Tpo -c gga_x_2d_pbe.c -o gga_x_2d_pbe.o
mv -f .deps/gga_x_2d_pbe.Tpo .deps/gga_x_2d_pbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_k_tflw.lo -MD -MP -MF .deps/gga_k_tflw.Tpo -c -o gga_k_tflw.lo gga_k_tflw.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_k_tflw.lo -MD -MP -MF .deps/gga_k_tflw.Tpo -c gga_k_tflw.c -o gga_k_tflw.o
mv -f .deps/gga_k_tflw.Tpo .deps/gga_k_tflw.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_k_pearson.lo -MD -MP -MF .deps/gga_k_pearson.Tpo -c -o gga_k_pearson.lo gga_k_pearson.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_k_pearson.lo -MD -MP -MF .deps/gga_k_pearson.Tpo -c gga_k_pearson.c -o gga_k_pearson.o
mv -f .deps/gga_k_pearson.Tpo .deps/gga_k_pearson.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_k_ol1.lo -MD -MP -MF .deps/gga_k_ol1.Tpo -c -o gga_k_ol1.lo gga_k_ol1.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_k_ol1.lo -MD -MP -MF .deps/gga_k_ol1.Tpo -c gga_k_ol1.c -o gga_k_ol1.o
mv -f .deps/gga_k_ol1.Tpo .deps/gga_k_ol1.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_k_ol2.lo -MD -MP -MF .deps/gga_k_ol2.Tpo -c -o gga_k_ol2.lo gga_k_ol2.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_k_ol2.lo -MD -MP -MF .deps/gga_k_ol2.Tpo -c gga_k_ol2.c -o gga_k_ol2.o
mv -f .deps/gga_k_ol2.Tpo .deps/gga_k_ol2.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT gga_k_dk.lo -MD -MP -MF .deps/gga_k_dk.Tpo -c -o gga_k_dk.lo gga_k_dk.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT gga_k_dk.lo -MD -MP -MF .deps/gga_k_dk.Tpo -c gga_k_dk.c -o gga_k_dk.o
mv -f .deps/gga_k_dk.Tpo .deps/gga_k_dk.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_b3lyp.lo -MD -MP -MF .deps/hyb_gga_xc_b3lyp.Tpo -c -o hyb_gga_xc_b3lyp.lo hyb_gga_xc_b3lyp.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_b3lyp.lo -MD -MP -MF .deps/hyb_gga_xc_b3lyp.Tpo -c hyb_gga_xc_b3lyp.c -o hyb_gga_xc_b3lyp.o
mv -f .deps/hyb_gga_xc_b3lyp.Tpo .deps/hyb_gga_xc_b3lyp.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_o3lyp.lo -MD -MP -MF .deps/hyb_gga_xc_o3lyp.Tpo -c -o hyb_gga_xc_o3lyp.lo hyb_gga_xc_o3lyp.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_o3lyp.lo -MD -MP -MF .deps/hyb_gga_xc_o3lyp.Tpo -c hyb_gga_xc_o3lyp.c -o hyb_gga_xc_o3lyp.o
mv -f .deps/hyb_gga_xc_o3lyp.Tpo .deps/hyb_gga_xc_o3lyp.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_pbeh.lo -MD -MP -MF .deps/hyb_gga_xc_pbeh.Tpo -c -o hyb_gga_xc_pbeh.lo hyb_gga_xc_pbeh.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_pbeh.lo -MD -MP -MF .deps/hyb_gga_xc_pbeh.Tpo -c hyb_gga_xc_pbeh.c -o hyb_gga_xc_pbeh.o
mv -f .deps/hyb_gga_xc_pbeh.Tpo .deps/hyb_gga_xc_pbeh.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_b1wc.lo -MD -MP -MF .deps/hyb_gga_xc_b1wc.Tpo -c -o hyb_gga_xc_b1wc.lo hyb_gga_xc_b1wc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_b1wc.lo -MD -MP -MF .deps/hyb_gga_xc_b1wc.Tpo -c hyb_gga_xc_b1wc.c -o hyb_gga_xc_b1wc.o
mv -f .deps/hyb_gga_xc_b1wc.Tpo .deps/hyb_gga_xc_b1wc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_b97.lo -MD -MP -MF .deps/hyb_gga_xc_b97.Tpo -c -o hyb_gga_xc_b97.lo hyb_gga_xc_b97.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_b97.lo -MD -MP -MF .deps/hyb_gga_xc_b97.Tpo -c hyb_gga_xc_b97.c -o hyb_gga_xc_b97.o
mv -f .deps/hyb_gga_xc_b97.Tpo .deps/hyb_gga_xc_b97.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga.lo -MD -MP -MF .deps/mgga.Tpo -c -o mgga.lo mgga.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga.lo -MD -MP -MF .deps/mgga.Tpo -c mgga.c -o mgga.o
mv -f .deps/mgga.Tpo .deps/mgga.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga_x_lta.lo -MD -MP -MF .deps/mgga_x_lta.Tpo -c -o mgga_x_lta.lo mgga_x_lta.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga_x_lta.lo -MD -MP -MF .deps/mgga_x_lta.Tpo -c mgga_x_lta.c -o mgga_x_lta.o
mv -f .deps/mgga_x_lta.Tpo .deps/mgga_x_lta.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga_x_tpss.lo -MD -MP -MF .deps/mgga_x_tpss.Tpo -c -o mgga_x_tpss.lo mgga_x_tpss.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga_x_tpss.lo -MD -MP -MF .deps/mgga_x_tpss.Tpo -c mgga_x_tpss.c -o mgga_x_tpss.o
mv -f .deps/mgga_x_tpss.Tpo .deps/mgga_x_tpss.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga_x_br89.lo -MD -MP -MF .deps/mgga_x_br89.Tpo -c -o mgga_x_br89.lo mgga_x_br89.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga_x_br89.lo -MD -MP -MF .deps/mgga_x_br89.Tpo -c mgga_x_br89.c -o mgga_x_br89.o
mv -f .deps/mgga_x_br89.Tpo .deps/mgga_x_br89.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga_xc_vsxc.lo -MD -MP -MF .deps/mgga_xc_vsxc.Tpo -c -o mgga_xc_vsxc.lo mgga_xc_vsxc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga_xc_vsxc.lo -MD -MP -MF .deps/mgga_xc_vsxc.Tpo -c mgga_xc_vsxc.c -o mgga_xc_vsxc.o
mv -f .deps/mgga_xc_vsxc.Tpo .deps/mgga_xc_vsxc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga_x_m06l.lo -MD -MP -MF .deps/mgga_x_m06l.Tpo -c -o mgga_x_m06l.lo mgga_x_m06l.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga_x_m06l.lo -MD -MP -MF .deps/mgga_x_m06l.Tpo -c mgga_x_m06l.c -o mgga_x_m06l.o
mv -f .deps/mgga_x_m06l.Tpo .deps/mgga_x_m06l.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga_x_tau_hcth.lo -MD -MP -MF .deps/mgga_x_tau_hcth.Tpo -c -o mgga_x_tau_hcth.lo mgga_x_tau_hcth.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga_x_tau_hcth.lo -MD -MP -MF .deps/mgga_x_tau_hcth.Tpo -c mgga_x_tau_hcth.c -o mgga_x_tau_hcth.o
mv -f .deps/mgga_x_tau_hcth.Tpo .deps/mgga_x_tau_hcth.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga_c_tpss.lo -MD -MP -MF .deps/mgga_c_tpss.Tpo -c -o mgga_c_tpss.lo mgga_c_tpss.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga_c_tpss.lo -MD -MP -MF .deps/mgga_c_tpss.Tpo -c mgga_c_tpss.c -o mgga_c_tpss.o
mv -f .deps/mgga_c_tpss.Tpo .deps/mgga_c_tpss.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT mgga_x_2d_prhg07.lo -MD -MP -MF .deps/mgga_x_2d_prhg07.Tpo -c -o mgga_x_2d_prhg07.lo mgga_x_2d_prhg07.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT mgga_x_2d_prhg07.lo -MD -MP -MF .deps/mgga_x_2d_prhg07.Tpo -c mgga_x_2d_prhg07.c -o mgga_x_2d_prhg07.o
mv -f .deps/mgga_x_2d_prhg07.Tpo .deps/mgga_x_2d_prhg07.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lca.lo -MD -MP -MF .deps/lca.Tpo -c -o lca.lo lca.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lca.lo -MD -MP -MF .deps/lca.Tpo -c lca.c -o lca.o
mv -f .deps/lca.Tpo .deps/lca.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lca_omc.lo -MD -MP -MF .deps/lca_omc.Tpo -c -o lca_omc.lo lca_omc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lca_omc.lo -MD -MP -MF .deps/lca_omc.Tpo -c lca_omc.c -o lca_omc.o
mv -f .deps/lca_omc.Tpo .deps/lca_omc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT lca_lch.lo -MD -MP -MF .deps/lca_lch.Tpo -c -o lca_lch.lo lca_lch.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT lca_lch.lo -MD -MP -MF .deps/lca_lch.Tpo -c lca_lch.c -o lca_lch.o
mv -f .deps/lca_lch.Tpo .deps/lca_lch.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT xc_f.lo -MD -MP -MF .deps/xc_f.Tpo -c -o xc_f.lo xc_f.c
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -g -O2 -MT xc_f.lo -MD -MP -MF .deps/xc_f.Tpo -c xc_f.c -o xc_f.o
mv -f .deps/xc_f.Tpo .deps/xc_f.Plo
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o libxc_funcs.lo  libxc_funcs.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c libxc_funcs.f90 -o libxc_funcs.o
cpp -P -std=c99  -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  ./libxc_master.F90 > ../src/libxc.f90
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.2/bin/mpif90  -free -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c -o libxc.lo  libxc.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.2/bin/mpif90 -free -g -extend-source -vec-report0 -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c libxc.f90 -o libxc.o
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.2/bin/mpicc  -g -O2 -version-info 0:9:0  -o libxc.la -rpath /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib special_functions.lo integrate.lo util.lo mix_func.lo functionals.lo lda.lo lda_x.lo lda_x_1d.lo lda_x_2d.lo lda_c_wigner.lo lda_c_gombas.lo lda_c_rpa.lo lda_c_hl.lo lda_c_vwn.lo lda_c_pz.lo lda_c_pw.lo lda_c_ml1.lo lda_xc_teter93.lo lda_c_1d_csc.lo lda_c_2d_amgb.lo lda_c_2d_prm.lo lda_k_tf.lo gga.lo gga_x_lg93.lo gga_x_pbe.lo gga_x_rpbe.lo gga_x_pbea.lo gga_x_mpbe.lo gga_x_herman.lo gga_x_b86.lo gga_x_b86_mgc.lo gga_x_b88.lo gga_x_g96.lo gga_x_pw86.lo gga_x_pw91.lo gga_x_optx.lo gga_x_dk87.lo gga_x_ft97.lo gga_x_wc.lo gga_x_am05.lo gga_x_bayesian.lo gga_x_kt.lo gga_perdew.lo gga_c_pbe.lo gga_c_lyp.lo gga_c_p86.lo gga_c_pw91.lo gga_c_am05.lo gga_c_lm.lo gga_c_wl.lo gga_c_wi.lo gga_x_lb.lo gga_xc_b97.lo gga_xc_edf1.lo gga_xc_1w.lo gga_x_2d_b86.lo gga_x_2d_b86_mgc.lo gga_x_2d_b88.lo gga_x_2d_pbe.lo gga_k_tflw.lo gga_k_pearson.lo gga_k_ol1.lo gga_k_ol2.lo gga_k_dk.lo hyb_gga_xc_b3lyp.lo hyb_gga_xc_o3lyp.lo hyb_gga_xc_pbeh.lo hyb_gga_xc_b1wc.lo hyb_gga_xc_b97.lo mgga.lo mgga_x_lta.lo mgga_x_tpss.lo mgga_x_br89.lo mgga_xc_vsxc.lo mgga_x_m06l.lo mgga_x_tau_hcth.lo mgga_c_tpss.lo mgga_x_2d_prhg07.lo lca.lo lca_omc.lo lca_lch.lo xc_f.lo  libxc_funcs.lo libxc.lo 
libtool: link: ar cru .libs/libxc.a  special_functions.o integrate.o util.o mix_func.o functionals.o lda.o lda_x.o lda_x_1d.o lda_x_2d.o lda_c_wigner.o lda_c_gombas.o lda_c_rpa.o lda_c_hl.o lda_c_vwn.o lda_c_pz.o lda_c_pw.o lda_c_ml1.o lda_xc_teter93.o lda_c_1d_csc.o lda_c_2d_amgb.o lda_c_2d_prm.o lda_k_tf.o gga.o gga_x_lg93.o gga_x_pbe.o gga_x_rpbe.o gga_x_pbea.o gga_x_mpbe.o gga_x_herman.o gga_x_b86.o gga_x_b86_mgc.o gga_x_b88.o gga_x_g96.o gga_x_pw86.o gga_x_pw91.o gga_x_optx.o gga_x_dk87.o gga_x_ft97.o gga_x_wc.o gga_x_am05.o gga_x_bayesian.o gga_x_kt.o gga_perdew.o gga_c_pbe.o gga_c_lyp.o gga_c_p86.o gga_c_pw91.o gga_c_am05.o gga_c_lm.o gga_c_wl.o gga_c_wi.o gga_x_lb.o gga_xc_b97.o gga_xc_edf1.o gga_xc_1w.o gga_x_2d_b86.o gga_x_2d_b86_mgc.o gga_x_2d_b88.o gga_x_2d_pbe.o gga_k_tflw.o gga_k_pearson.o gga_k_ol1.o gga_k_ol2.o gga_k_dk.o hyb_gga_xc_b3lyp.o hyb_gga_xc_o3lyp.o hyb_gga_xc_pbeh.o hyb_gga_xc_b1wc.o hyb_gga_xc_b97.o mgga.o mgga_x_lta.o mgga_x_tpss.o mgga_x_br89.o mgga_xc_vsxc.o mgga_x_m06l.o mgga_x_tau_hcth.o mgga_c_tpss.o mgga_x_2d_prhg07.o lca.o lca_omc.o lca_lch.o xc_f.o libxc_funcs.o libxc.o
libtool: link: ranlib .libs/libxc.a
libtool: link: ( cd ".libs" && rm -f "libxc.la" && ln -s "../libxc.la" "libxc.la" )
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
Making all in testsuite
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/testsuite'
/home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..  -I./../src/ -I../src -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT xc_get_data-xc-get_data.o -MD -MP -MF .deps/xc_get_data-xc-get_data.Tpo -c -o xc_get_data-xc-get_data.o `test -f 'xc-get_data.c' || echo './'`xc-get_data.c
mv -f .deps/xc_get_data-xc-get_data.Tpo .deps/xc_get_data-xc-get_data.Po
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.2/bin/mpicc  -g -O2   -o xc-get_data xc_get_data-xc-get_data.o -L../src/ -lxc -lm 
libtool: link: /home/temok/opt/openmpi-1.4.2/bin/mpicc -g -O2 -o xc-get_data xc_get_data-xc-get_data.o  -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src/.libs/libxc.a -lm
/home/temok/opt/openmpi-1.4.2/bin/mpicc -DHAVE_CONFIG_H -I. -I..  -I./../src/ -I../src -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include  -g -O2 -MT xc_consistency-xc-consistency.o -MD -MP -MF .deps/xc_consistency-xc-consistency.Tpo -c -o xc_consistency-xc-consistency.o `test -f 'xc-consistency.c' || echo './'`xc-consistency.c
mv -f .deps/xc_consistency-xc-consistency.Tpo .deps/xc_consistency-xc-consistency.Po
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.2/bin/mpicc  -g -O2   -o xc-consistency xc_consistency-xc-consistency.o -L../src/ -lxc -lm 
libtool: link: /home/temok/opt/openmpi-1.4.2/bin/mpicc -g -O2 -o xc-consistency xc_consistency-xc-consistency.o  -L/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src/.libs/libxc.a -lm
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make[5]: Nothing to be done for `all-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
cd sources/libxc-1.1.0.1 && make install 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
Making install in build
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/build'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/build'
make[5]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/pkgconfig" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/pkgconfig"
 /usr/bin/install -c -m 644 libxc.pc '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/pkgconfig'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/build'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/build'
Making install in src
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
make  install-am
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib"
 /bin/sh ../libtool   --mode=install /usr/bin/install -c   libxc.la '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib'
libtool: install: /usr/bin/install -c .libs/libxc.lai /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/libxc.la
libtool: install: /usr/bin/install -c .libs/libxc.a /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/libxc.a
libtool: install: chmod 644 /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/libxc.a
libtool: install: ranlib /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib/libxc.a
libtool: finish: PATH="/opt/pgi/linux86-64/7.1-4/bin:/usr/lib64/openmpi/1.4-gcc/bin:/usr/kerberos/bin:/opt/intel/fce/10.0.023/bin:/usr/local/bin:/bin:/usr/bin:/home/temok/bin/:/home/temok/bin/AtomEye:/home/temok/opt/abinit-6.2.3/build-serial-ifort10-gcc41/src/98_main/:/home/temok/opt/openmpi-1.4.2/bin:/home/temok/myprograms/:./:/sbin" ldconfig -n /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib
----------------------------------------------------------------------
Libraries have been installed in:
   /home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/lib

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
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include"
 /usr/bin/install -c -m 644 xc.h xc_config.h '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include'
test -z "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include"
 /usr/bin/install -c -m 644 xc_funcs.h libxc_funcs_m.mod xc_f90_lib_m.mod xc_f90_types_m.mod '/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/src'
Making install in testsuite
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/libxc-1.1.0.1'
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
Checking build of libxc fallback
test -e stamps/libxc-install-stamp
make linalg
make[2]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks'
cd sources && \
	  gzip -cd /home/temok/.abinit/tarballs/lapack-abinit_6.10.tar.gz | tar xf -
No patch to apply
cd sources/lapack-abinit_6.10 && \
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
	  LIBS="" \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib" \
	  /bin/sh ./configure \
	    --prefix="/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports" \
	    --program-suffix="-abinit" \
	    
cd sources/lapack-abinit_6.10 && make 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/lapack-abinit_6.10'
cd blas && make
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/lapack-abinit_6.10/blas'
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c caxpy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ccopy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cdotc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cdotu.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgemm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgemv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgerc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeru.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chemm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chemv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cher.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cher2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cher2k.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cherk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c crotg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cscal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csscal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cswap.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csymm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csyr2k.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csyrk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctpmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctpsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrmm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrsm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dasum.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c daxpy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dcabs1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dcopy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ddot.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgemm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgemv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dger.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dnrm2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c drot.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c drotm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c drotmg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dscal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsdot.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dswap.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsymm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsymv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyr2k.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyrk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtpmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtpsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrmm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrsm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dzasum.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dznrm2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c icamax.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c idamax.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c isamax.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c izamax.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c lsame.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sasum.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c saxpy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c scasum.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c scabs1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c scnrm2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c scopy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sdot.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sdsdot.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgemm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgemv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sger.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c snrm2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c srot.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c srotm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c srotmg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ssbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sscal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sspmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sspr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sspr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sswap.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ssymm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ssymv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ssyr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ssyr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ssyr2k.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ssyrk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c stbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c stbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c stpmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c stpsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c strmm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c strmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c strsm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c strsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c xerbla.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c xerbla_array.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zaxpy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zcopy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zdotc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zdotu.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zdrot.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zdscal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zgbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zgemm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zgemv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zgerc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zgeru.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zhbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zhemm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zhemv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zher.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zher2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zher2k.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zherk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zhpmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zhpr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zhpr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zrotg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zscal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zswap.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zsymm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zsyr2k.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c zsyrk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ztbmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ztbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ztpmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ztpsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ztrmm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ztrmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ztrsm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ztrsv.f
ar rc libblas.a caxpy.o ccopy.o cdotc.o cdotu.o cgbmv.o cgemm.o cgemv.o cgerc.o cgeru.o chbmv.o chemm.o chemv.o cher.o cher2.o cher2k.o cherk.o chpmv.o chpr.o chpr2.o crotg.o cscal.o csscal.o cswap.o csymm.o csyr2k.o csyrk.o ctbmv.o ctbsv.o ctpmv.o ctpsv.o ctrmm.o ctrmv.o ctrsm.o ctrsv.o dasum.o daxpy.o dcabs1.o dcopy.o ddot.o dgbmv.o dgemm.o dgemv.o dger.o dnrm2.o drot.o drotm.o drotmg.o dsbmv.o dscal.o dsdot.o dspmv.o dspr.o dspr2.o dswap.o dsymm.o dsymv.o dsyr.o dsyr2.o dsyr2k.o dsyrk.o dtbmv.o dtbsv.o dtpmv.o dtpsv.o dtrmm.o dtrmv.o dtrsm.o dtrsv.o dzasum.o dznrm2.o icamax.o idamax.o isamax.o izamax.o lsame.o sasum.o saxpy.o scasum.o scabs1.o scnrm2.o scopy.o sdot.o sdsdot.o sgbmv.o sgemm.o sgemv.o sger.o snrm2.o srot.o srotm.o srotmg.o ssbmv.o sscal.o sspmv.o sspr.o sspr2.o sswap.o ssymm.o ssymv.o ssyr.o ssyr2.o ssyr2k.o ssyrk.o stbmv.o stbsv.o stpmv.o stpsv.o strmm.o strmv.o strsm.o strsv.o xerbla.o xerbla_array.o zaxpy.o zcopy.o zdotc.o zdotu.o zdrot.o zdscal.o zgbmv.o zgemm.o zgemv.o zgerc.o zgeru.o zhbmv.o zhemm.o zhemv.o zher.o zher2.o zher2k.o zherk.o zhpmv.o zhpr.o zhpr2.o zrotg.o zscal.o zswap.o zsymm.o zsyr2k.o zsyrk.o ztbmv.o ztbsv.o ztpmv.o ztpsv.o ztrmm.o ztrmv.o ztrsm.o ztrsv.o
ranlib libblas.a
BLAS for ABINIT has been built.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/lapack-abinit_6.10/blas'
cd lapack && make
make[4]: Entering directory `/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/sources/lapack-abinit_6.10/lapack'
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cbdsqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbbrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbrfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbsvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbtf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbtrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgbtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgebak.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgebal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgebd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgebrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgecon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgees.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeesx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgegs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgegv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgehd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgehrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgelq2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgelqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgelsd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgels.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgelss.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgelsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgelsy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeql2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeqlf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeqp3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeqpf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeqr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgeqrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgerfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgerfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgerq2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgerqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgesc2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgesdd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgesvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgesv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgesvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgesvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgetc2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgetf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgetrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgetri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgetrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggbak.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggbal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgges.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggesx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggglm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgghrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgglse.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggqrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggrqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggsvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cggsvp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgtcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgtrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgtsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgtsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgttrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgttrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cgtts2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbevd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbgst.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbgvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbgv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbgvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chbtrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c checon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cheequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cheevd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cheev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cheevr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cheevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chegs2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chegst.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chegvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chegv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chegvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cherfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cherfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chesv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chesvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chesvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chetd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chetf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chetrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chetrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chetri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chetrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chfrk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chgeqz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chla_transtype.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpevd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpgst.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpgvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpgv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpgvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chprfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chpsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chptrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chptrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chptri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chptrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chsein.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c chseqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clabrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clacgv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clacn2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clacon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clacp2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clacpy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clacrm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clacrt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cladiv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claed0.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claed7.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claed8.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claein.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claesy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claev2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clag2z.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_gbamv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_gbrcond_c.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_gbrcond_x.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_gbrfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_gbrpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_geamv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_gercond_c.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_gercond_x.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_gerfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clags2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clagtm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_heamv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clahef.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_hercond_c.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_hercond_x.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_herfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_herpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clahqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clahr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clahrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claic1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_lin_berr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clals0.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clalsa.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clalsd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clangb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clange.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clangt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clanhb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clanhe.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clanhf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clanhp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clanhs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clanht.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clansb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clansp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clansy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clantb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clantp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clantr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clapll.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clapmt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_porcond_c.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_porcond_x.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_porfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_porpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqgb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqge.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqhb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqhe.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqhp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqp2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqps.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqr0.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqr1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqr3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqr4.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqr5.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqsb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqsp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claqsy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clar1v.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clar2v.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarcm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarfb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarfg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarfp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarft.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarfx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clargv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarnv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_rpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarrv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarscl2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clartg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clartv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarzb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clarzt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clascl2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clascl.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claset.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clasr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c classq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c claswp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_syamv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clasyf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_syrcond_c.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_syrcond_x.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_syrfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_syrpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clatbs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clatdf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clatps.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clatrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clatrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clatrz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clatzm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clauu2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c clauum.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cla_wwaddw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbstf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbtf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbtrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpbtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpftrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpftri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpftrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpocon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpoequb.f
fortcom: Info: cpoequb.f, line 88: This statement function has not been used.   [CABS1]
      REAL               CABS1
-------------------------^
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpoequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cporfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cporfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cposv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cposvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cposvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpotf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpotrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpotri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpotrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cppcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cppequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpprfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cppsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cppsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpptrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpptri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpptrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpstf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpstrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cptcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpteqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cptrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cptsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cptsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpttrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cpttrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cptts2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c crot.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cspcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cspmv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cspr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csprfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cspsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cspsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csptrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csptri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csptrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csrscl.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cstedc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cstegr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cstein.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cstemr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csteqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csycon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csyequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csymv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csyr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csyrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csyrfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csysv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csysvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csysvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csytf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csytrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csytri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c csytrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctbcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctbrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctbtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctfsm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctftri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctfttp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctfttr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctgevc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctgex2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctgexc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctgsen.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctgsja.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctgsna.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctgsy2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctgsyl.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctpcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctprfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctptri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctptrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctpttf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctpttr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrevc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrexc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrsen.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrsna.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrsyl.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrti2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrtri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrttf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctrttp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctzrqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ctzrzf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cung2l.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cung2r.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cungbr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunghr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cungl2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunglq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cungql.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cungqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cungr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cungrq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cungtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunm2l.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunm2r.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmbr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmhr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunml2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmlq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmql.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmr3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmrq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmrz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cunmtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cupgtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c cupmtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dbdsdc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dbdsqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ddisna.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbbrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbrfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbsvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbtf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbtrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgbtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgebak.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgebal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgebd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgebrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgecon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgees.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeesx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgegs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgegv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgehd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgehrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgejsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgelq2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgelqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgelsd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgels.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgelss.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgelsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgelsy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeql2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeqlf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeqp3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeqpf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeqr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgeqrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgerfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgerfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgerq2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgerqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgesc2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgesdd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgesvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgesv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgesvj.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgesvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgesvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgetc2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgetf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgetrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgetri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgetrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggbak.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggbal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgges.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggesx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggglm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgghrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgglse.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggqrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggrqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggsvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dggsvp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgsvj0.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgsvj1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgtcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgtrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgtsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgtsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgttrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgttrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dgtts2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dhgeqz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dhsein.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dhseqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c disnan.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlabad.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlabrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlacn2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlacon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlacpy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dladiv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlae2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaebz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed0.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed4.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed5.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed6.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed7.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed8.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaed9.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaeda.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaein.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaev2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaexc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlag2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlag2s.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_gbamv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_gbrcond.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_gbrfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_gbrpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_geamv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_gercond.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_gerfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlags2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlagtf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlagtm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlagts.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlagv2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlahqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlahr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlahrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaic1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaisnan.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_lin_berr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaln2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlals0.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlalsa.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlalsd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlamch.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlamrg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaneg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlangb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlange.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlangt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlanhs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlansb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlansf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlansp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlanst.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlansy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlantb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlantp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlantr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlanv2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlapll.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlapmt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_porcond.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_porfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_porpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlapy2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlapy3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqgb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqge.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqp2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqps.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqr0.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqr1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqr3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqr4.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqr5.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqsb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqsp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqsy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaqtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlar1v.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlar2v.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarfb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarfg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarfp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarft.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarfx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlargv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarnv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_rpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarra.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarrb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarrc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarre.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarrj.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarrk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarrr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarrv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarscl2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlartg.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlartv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaruv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarzb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlarzt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlas2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlascl2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlascl.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd0.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd4.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd5.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd6.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd7.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasd8.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasda.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasdq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasdt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaset.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasq1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasq2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasq3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasq4.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasq5.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasq6.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasrt.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlassq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasv2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlaswp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasy2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_syamv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlasyf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_syrcond.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_syrfsx_extended.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_syrpvgrw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlat2s.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlatbs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlatdf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlatps.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlatrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlatrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlatrz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlatzm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlauu2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dlauum.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dla_wwaddw.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dopgtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dopmtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorg2l.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorg2r.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorgbr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorghr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorgl2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorglq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorgql.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorgqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorgr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorgrq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorgtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorm2l.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorm2r.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormbr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormhr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dorml2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormlq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormql.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormr3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormrq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormrz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dormtr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbstf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbtf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbtrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpbtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpftrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpftri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpftrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpocon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpoequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpoequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dporfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dporfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dposv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dposvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dposvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpotf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpotrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpotri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpotrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dppcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dppequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpprfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dppsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dppsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpptrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpptri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpptrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpstf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpstrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dptcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpteqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dptrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dptsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dptsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpttrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dpttrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dptts2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c drscl.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbevd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbgst.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbgvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbgv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbgvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsbtrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsfrk.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsgesv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspevd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspgst.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspgvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspgv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspgvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsposv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsprfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dspsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsptrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsptrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsptri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsptrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstebz.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstedc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstegr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstein.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstemr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsteqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsterf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstevd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstevr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dstevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsycon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyevd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyevr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsygs2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsygst.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsygvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsygv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsygvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsyrfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsysv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsysvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsysvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsytd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsytf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsytrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsytrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsytri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dsytrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtbcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtbrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtbtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtfsm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtftri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtfttp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtfttr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtgevc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtgex2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtgexc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtgsen.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtgsja.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtgsna.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtgsy2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtgsyl.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtpcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtprfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtptri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtptrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtpttf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtpttr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrevc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrexc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrsen.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrsna.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrsyl.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrti2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrtri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrttf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtrttp.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtzrqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dtzrzf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c dzsum1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c icmax1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ieeeck.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilaclc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilaclr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c iladiag.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c iladlc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c iladlr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilaenv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilaprec.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilaslc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilaslr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilatrans.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilauplo.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilaver.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilazlc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c ilazlr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c iparmq.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c izmax1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c lsame.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c lsamen.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sbdsdc.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sbdsqr.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c scsum1.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sdisna.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbbrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbcon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbrfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbrfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbsvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbsvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbtf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbtrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgbtrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgebak.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgebal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgebd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgebrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgecon.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeequb.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeequ.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgees.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeesx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgegs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgegv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgehd2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgehrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgejsv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgelq2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgelqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgelsd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgels.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgelss.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgelsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgelsy.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeql2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeqlf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeqp3.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeqpf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeqr2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgeqrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgerfs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgerfsx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgerq2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgerqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgesc2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgesdd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgesvd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgesv.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgesvj.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgesvx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgesvxx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgetc2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgetf2.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgetrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgetri.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgetrs.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggbak.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggbal.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgges.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggesx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggev.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggevx.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggglm.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgghrd.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sgglse.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggqrf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggrqf.f
/home/temok/opt/openmpi-1.4.2/bin/mpif90 -fixed -g -extend-source -vec-report0  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.1/build-parallel-openMPI/fallbacks/exports/include -c sggsvd.f
/home/temok/opt/openmpi-1