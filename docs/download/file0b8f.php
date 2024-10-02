cd fallbacks && make 
make[1]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
make fox
make[2]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
The build of fox has been disabled
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
Checking build of fox fallback
test -e stamps/fox-install-stamp
make libxc
make[2]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
cd sources && \
	  gzip -cd /home/temok/.abinit/tarballs/libxc-1.1.0.1.tar.gz | tar xf -
patch -d sources/libxc-1.1.0.1 -p1 <../../fallbacks/patches/libxc-1.1.0.1-0001.patch
patching file src/gga_x_b88.c
cd sources/libxc-1.1.0.1 && \
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
	  LIBS="" \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib" \
	  /bin/sh ./configure \
	    --prefix="/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports" \
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
checking for gcc... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc accepts -g... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to accept ISO C89... none needed
checking dependency style of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... gcc3
checking for a sed that does not truncate output... /bin/sed
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for fgrep... /bin/grep -F
checking for ld used by /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... /usr/bin/ld
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
checking command to parse /usr/bin/nm -B output from /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc object... ok
checking how to run the C preprocessor... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E
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
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -fno-rtti -fno-exceptions... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to produce PIC... -fPIC -DPIC
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc PIC flag -fPIC -DPIC works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc static flag -static works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for gcc... (cached) /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc
checking whether we are using the GNU C compiler... (cached) yes
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc accepts -g... (cached) yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to accept ISO C89... (cached) none needed
checking dependency style of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... (cached) gcc3
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc and cc understand -c and -o together... yes
checking for inline... inline
checking for ANSI C header files... (cached) yes
checking for working alloca.h... yes
checking for alloca... yes
checking size of void*... 8
checking for sqrtf in -lm... yes
checking for cbrt in -lm... yes
checking for cbrtf in -lm... yes
checking whether we are using the GNU Fortran compiler... no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... yes
checking whether we are using the GNU Fortran compiler... (cached) no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... (cached) yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 option to produce PIC... 
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 static flag  works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking for Fortran flag to compile .f90 files... none
configure: Using FCFLAGS="-free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
checking how to get verbose linking output from /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90... -v
checking for Fortran libraries of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90...  -L/home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib -L/opt/intel/mkl/9.1.023/lib/em64t -L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/compiler/lib/intel64 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../.. -L/lib64 -L/lib -L/usr/lib64 -L/usr/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -lnsl -lutil -lifcore -limf -lsvml -lm -lipgo -lintlc -lpthread -lirc_s
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
make[3]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make  all-recursive
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
Making all in build
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/build'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/build'
Making all in src
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
./get_funcs.pl . ..
make  all-am
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT special_functions.lo -MD -MP -MF .deps/special_functions.Tpo -c -o special_functions.lo special_functions.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT special_functions.lo -MD -MP -MF .deps/special_functions.Tpo -c special_functions.c -o special_functions.o
mv -f .deps/special_functions.Tpo .deps/special_functions.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT integrate.lo -MD -MP -MF .deps/integrate.Tpo -c -o integrate.lo integrate.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT integrate.lo -MD -MP -MF .deps/integrate.Tpo -c integrate.c -o integrate.o
mv -f .deps/integrate.Tpo .deps/integrate.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT util.lo -MD -MP -MF .deps/util.Tpo -c -o util.lo util.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT util.lo -MD -MP -MF .deps/util.Tpo -c util.c -o util.o
mv -f .deps/util.Tpo .deps/util.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mix_func.lo -MD -MP -MF .deps/mix_func.Tpo -c -o mix_func.lo mix_func.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mix_func.lo -MD -MP -MF .deps/mix_func.Tpo -c mix_func.c -o mix_func.o
mv -f .deps/mix_func.Tpo .deps/mix_func.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT functionals.lo -MD -MP -MF .deps/functionals.Tpo -c -o functionals.lo functionals.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT functionals.lo -MD -MP -MF .deps/functionals.Tpo -c functionals.c -o functionals.o
mv -f .deps/functionals.Tpo .deps/functionals.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda.lo -MD -MP -MF .deps/lda.Tpo -c -o lda.lo lda.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda.lo -MD -MP -MF .deps/lda.Tpo -c lda.c -o lda.o
mv -f .deps/lda.Tpo .deps/lda.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_x.lo -MD -MP -MF .deps/lda_x.Tpo -c -o lda_x.lo lda_x.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_x.lo -MD -MP -MF .deps/lda_x.Tpo -c lda_x.c -o lda_x.o
mv -f .deps/lda_x.Tpo .deps/lda_x.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_x_1d.lo -MD -MP -MF .deps/lda_x_1d.Tpo -c -o lda_x_1d.lo lda_x_1d.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_x_1d.lo -MD -MP -MF .deps/lda_x_1d.Tpo -c lda_x_1d.c -o lda_x_1d.o
mv -f .deps/lda_x_1d.Tpo .deps/lda_x_1d.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_x_2d.lo -MD -MP -MF .deps/lda_x_2d.Tpo -c -o lda_x_2d.lo lda_x_2d.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_x_2d.lo -MD -MP -MF .deps/lda_x_2d.Tpo -c lda_x_2d.c -o lda_x_2d.o
mv -f .deps/lda_x_2d.Tpo .deps/lda_x_2d.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_wigner.lo -MD -MP -MF .deps/lda_c_wigner.Tpo -c -o lda_c_wigner.lo lda_c_wigner.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_wigner.lo -MD -MP -MF .deps/lda_c_wigner.Tpo -c lda_c_wigner.c -o lda_c_wigner.o
mv -f .deps/lda_c_wigner.Tpo .deps/lda_c_wigner.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_gombas.lo -MD -MP -MF .deps/lda_c_gombas.Tpo -c -o lda_c_gombas.lo lda_c_gombas.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_gombas.lo -MD -MP -MF .deps/lda_c_gombas.Tpo -c lda_c_gombas.c -o lda_c_gombas.o
mv -f .deps/lda_c_gombas.Tpo .deps/lda_c_gombas.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_rpa.lo -MD -MP -MF .deps/lda_c_rpa.Tpo -c -o lda_c_rpa.lo lda_c_rpa.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_rpa.lo -MD -MP -MF .deps/lda_c_rpa.Tpo -c lda_c_rpa.c -o lda_c_rpa.o
mv -f .deps/lda_c_rpa.Tpo .deps/lda_c_rpa.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_hl.lo -MD -MP -MF .deps/lda_c_hl.Tpo -c -o lda_c_hl.lo lda_c_hl.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_hl.lo -MD -MP -MF .deps/lda_c_hl.Tpo -c lda_c_hl.c -o lda_c_hl.o
mv -f .deps/lda_c_hl.Tpo .deps/lda_c_hl.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_vwn.lo -MD -MP -MF .deps/lda_c_vwn.Tpo -c -o lda_c_vwn.lo lda_c_vwn.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_vwn.lo -MD -MP -MF .deps/lda_c_vwn.Tpo -c lda_c_vwn.c -o lda_c_vwn.o
mv -f .deps/lda_c_vwn.Tpo .deps/lda_c_vwn.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_pz.lo -MD -MP -MF .deps/lda_c_pz.Tpo -c -o lda_c_pz.lo lda_c_pz.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_pz.lo -MD -MP -MF .deps/lda_c_pz.Tpo -c lda_c_pz.c -o lda_c_pz.o
mv -f .deps/lda_c_pz.Tpo .deps/lda_c_pz.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_pw.lo -MD -MP -MF .deps/lda_c_pw.Tpo -c -o lda_c_pw.lo lda_c_pw.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_pw.lo -MD -MP -MF .deps/lda_c_pw.Tpo -c lda_c_pw.c -o lda_c_pw.o
mv -f .deps/lda_c_pw.Tpo .deps/lda_c_pw.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_ml1.lo -MD -MP -MF .deps/lda_c_ml1.Tpo -c -o lda_c_ml1.lo lda_c_ml1.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_ml1.lo -MD -MP -MF .deps/lda_c_ml1.Tpo -c lda_c_ml1.c -o lda_c_ml1.o
mv -f .deps/lda_c_ml1.Tpo .deps/lda_c_ml1.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_xc_teter93.lo -MD -MP -MF .deps/lda_xc_teter93.Tpo -c -o lda_xc_teter93.lo lda_xc_teter93.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_xc_teter93.lo -MD -MP -MF .deps/lda_xc_teter93.Tpo -c lda_xc_teter93.c -o lda_xc_teter93.o
mv -f .deps/lda_xc_teter93.Tpo .deps/lda_xc_teter93.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_1d_csc.lo -MD -MP -MF .deps/lda_c_1d_csc.Tpo -c -o lda_c_1d_csc.lo lda_c_1d_csc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_1d_csc.lo -MD -MP -MF .deps/lda_c_1d_csc.Tpo -c lda_c_1d_csc.c -o lda_c_1d_csc.o
mv -f .deps/lda_c_1d_csc.Tpo .deps/lda_c_1d_csc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_2d_amgb.lo -MD -MP -MF .deps/lda_c_2d_amgb.Tpo -c -o lda_c_2d_amgb.lo lda_c_2d_amgb.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_2d_amgb.lo -MD -MP -MF .deps/lda_c_2d_amgb.Tpo -c lda_c_2d_amgb.c -o lda_c_2d_amgb.o
mv -f .deps/lda_c_2d_amgb.Tpo .deps/lda_c_2d_amgb.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_c_2d_prm.lo -MD -MP -MF .deps/lda_c_2d_prm.Tpo -c -o lda_c_2d_prm.lo lda_c_2d_prm.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_c_2d_prm.lo -MD -MP -MF .deps/lda_c_2d_prm.Tpo -c lda_c_2d_prm.c -o lda_c_2d_prm.o
mv -f .deps/lda_c_2d_prm.Tpo .deps/lda_c_2d_prm.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lda_k_tf.lo -MD -MP -MF .deps/lda_k_tf.Tpo -c -o lda_k_tf.lo lda_k_tf.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lda_k_tf.lo -MD -MP -MF .deps/lda_k_tf.Tpo -c lda_k_tf.c -o lda_k_tf.o
mv -f .deps/lda_k_tf.Tpo .deps/lda_k_tf.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga.lo -MD -MP -MF .deps/gga.Tpo -c -o gga.lo gga.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga.lo -MD -MP -MF .deps/gga.Tpo -c gga.c -o gga.o
mv -f .deps/gga.Tpo .deps/gga.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_lg93.lo -MD -MP -MF .deps/gga_x_lg93.Tpo -c -o gga_x_lg93.lo gga_x_lg93.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_lg93.lo -MD -MP -MF .deps/gga_x_lg93.Tpo -c gga_x_lg93.c -o gga_x_lg93.o
mv -f .deps/gga_x_lg93.Tpo .deps/gga_x_lg93.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_pbe.lo -MD -MP -MF .deps/gga_x_pbe.Tpo -c -o gga_x_pbe.lo gga_x_pbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_pbe.lo -MD -MP -MF .deps/gga_x_pbe.Tpo -c gga_x_pbe.c -o gga_x_pbe.o
mv -f .deps/gga_x_pbe.Tpo .deps/gga_x_pbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_rpbe.lo -MD -MP -MF .deps/gga_x_rpbe.Tpo -c -o gga_x_rpbe.lo gga_x_rpbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_rpbe.lo -MD -MP -MF .deps/gga_x_rpbe.Tpo -c gga_x_rpbe.c -o gga_x_rpbe.o
mv -f .deps/gga_x_rpbe.Tpo .deps/gga_x_rpbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_pbea.lo -MD -MP -MF .deps/gga_x_pbea.Tpo -c -o gga_x_pbea.lo gga_x_pbea.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_pbea.lo -MD -MP -MF .deps/gga_x_pbea.Tpo -c gga_x_pbea.c -o gga_x_pbea.o
mv -f .deps/gga_x_pbea.Tpo .deps/gga_x_pbea.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_mpbe.lo -MD -MP -MF .deps/gga_x_mpbe.Tpo -c -o gga_x_mpbe.lo gga_x_mpbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_mpbe.lo -MD -MP -MF .deps/gga_x_mpbe.Tpo -c gga_x_mpbe.c -o gga_x_mpbe.o
mv -f .deps/gga_x_mpbe.Tpo .deps/gga_x_mpbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_herman.lo -MD -MP -MF .deps/gga_x_herman.Tpo -c -o gga_x_herman.lo gga_x_herman.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_herman.lo -MD -MP -MF .deps/gga_x_herman.Tpo -c gga_x_herman.c -o gga_x_herman.o
mv -f .deps/gga_x_herman.Tpo .deps/gga_x_herman.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_b86.lo -MD -MP -MF .deps/gga_x_b86.Tpo -c -o gga_x_b86.lo gga_x_b86.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_b86.lo -MD -MP -MF .deps/gga_x_b86.Tpo -c gga_x_b86.c -o gga_x_b86.o
mv -f .deps/gga_x_b86.Tpo .deps/gga_x_b86.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_b86_mgc.lo -MD -MP -MF .deps/gga_x_b86_mgc.Tpo -c -o gga_x_b86_mgc.lo gga_x_b86_mgc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_b86_mgc.lo -MD -MP -MF .deps/gga_x_b86_mgc.Tpo -c gga_x_b86_mgc.c -o gga_x_b86_mgc.o
mv -f .deps/gga_x_b86_mgc.Tpo .deps/gga_x_b86_mgc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_b88.lo -MD -MP -MF .deps/gga_x_b88.Tpo -c -o gga_x_b88.lo gga_x_b88.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_b88.lo -MD -MP -MF .deps/gga_x_b88.Tpo -c gga_x_b88.c -o gga_x_b88.o
mv -f .deps/gga_x_b88.Tpo .deps/gga_x_b88.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_g96.lo -MD -MP -MF .deps/gga_x_g96.Tpo -c -o gga_x_g96.lo gga_x_g96.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_g96.lo -MD -MP -MF .deps/gga_x_g96.Tpo -c gga_x_g96.c -o gga_x_g96.o
mv -f .deps/gga_x_g96.Tpo .deps/gga_x_g96.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_pw86.lo -MD -MP -MF .deps/gga_x_pw86.Tpo -c -o gga_x_pw86.lo gga_x_pw86.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_pw86.lo -MD -MP -MF .deps/gga_x_pw86.Tpo -c gga_x_pw86.c -o gga_x_pw86.o
mv -f .deps/gga_x_pw86.Tpo .deps/gga_x_pw86.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_pw91.lo -MD -MP -MF .deps/gga_x_pw91.Tpo -c -o gga_x_pw91.lo gga_x_pw91.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_pw91.lo -MD -MP -MF .deps/gga_x_pw91.Tpo -c gga_x_pw91.c -o gga_x_pw91.o
mv -f .deps/gga_x_pw91.Tpo .deps/gga_x_pw91.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_optx.lo -MD -MP -MF .deps/gga_x_optx.Tpo -c -o gga_x_optx.lo gga_x_optx.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_optx.lo -MD -MP -MF .deps/gga_x_optx.Tpo -c gga_x_optx.c -o gga_x_optx.o
mv -f .deps/gga_x_optx.Tpo .deps/gga_x_optx.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_dk87.lo -MD -MP -MF .deps/gga_x_dk87.Tpo -c -o gga_x_dk87.lo gga_x_dk87.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_dk87.lo -MD -MP -MF .deps/gga_x_dk87.Tpo -c gga_x_dk87.c -o gga_x_dk87.o
mv -f .deps/gga_x_dk87.Tpo .deps/gga_x_dk87.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_ft97.lo -MD -MP -MF .deps/gga_x_ft97.Tpo -c -o gga_x_ft97.lo gga_x_ft97.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_ft97.lo -MD -MP -MF .deps/gga_x_ft97.Tpo -c gga_x_ft97.c -o gga_x_ft97.o
mv -f .deps/gga_x_ft97.Tpo .deps/gga_x_ft97.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_wc.lo -MD -MP -MF .deps/gga_x_wc.Tpo -c -o gga_x_wc.lo gga_x_wc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_wc.lo -MD -MP -MF .deps/gga_x_wc.Tpo -c gga_x_wc.c -o gga_x_wc.o
mv -f .deps/gga_x_wc.Tpo .deps/gga_x_wc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_am05.lo -MD -MP -MF .deps/gga_x_am05.Tpo -c -o gga_x_am05.lo gga_x_am05.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_am05.lo -MD -MP -MF .deps/gga_x_am05.Tpo -c gga_x_am05.c -o gga_x_am05.o
mv -f .deps/gga_x_am05.Tpo .deps/gga_x_am05.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_bayesian.lo -MD -MP -MF .deps/gga_x_bayesian.Tpo -c -o gga_x_bayesian.lo gga_x_bayesian.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_bayesian.lo -MD -MP -MF .deps/gga_x_bayesian.Tpo -c gga_x_bayesian.c -o gga_x_bayesian.o
mv -f .deps/gga_x_bayesian.Tpo .deps/gga_x_bayesian.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_kt.lo -MD -MP -MF .deps/gga_x_kt.Tpo -c -o gga_x_kt.lo gga_x_kt.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_kt.lo -MD -MP -MF .deps/gga_x_kt.Tpo -c gga_x_kt.c -o gga_x_kt.o
mv -f .deps/gga_x_kt.Tpo .deps/gga_x_kt.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_perdew.lo -MD -MP -MF .deps/gga_perdew.Tpo -c -o gga_perdew.lo gga_perdew.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_perdew.lo -MD -MP -MF .deps/gga_perdew.Tpo -c gga_perdew.c -o gga_perdew.o
mv -f .deps/gga_perdew.Tpo .deps/gga_perdew.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_c_pbe.lo -MD -MP -MF .deps/gga_c_pbe.Tpo -c -o gga_c_pbe.lo gga_c_pbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_c_pbe.lo -MD -MP -MF .deps/gga_c_pbe.Tpo -c gga_c_pbe.c -o gga_c_pbe.o
mv -f .deps/gga_c_pbe.Tpo .deps/gga_c_pbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_c_lyp.lo -MD -MP -MF .deps/gga_c_lyp.Tpo -c -o gga_c_lyp.lo gga_c_lyp.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_c_lyp.lo -MD -MP -MF .deps/gga_c_lyp.Tpo -c gga_c_lyp.c -o gga_c_lyp.o
mv -f .deps/gga_c_lyp.Tpo .deps/gga_c_lyp.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_c_p86.lo -MD -MP -MF .deps/gga_c_p86.Tpo -c -o gga_c_p86.lo gga_c_p86.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_c_p86.lo -MD -MP -MF .deps/gga_c_p86.Tpo -c gga_c_p86.c -o gga_c_p86.o
mv -f .deps/gga_c_p86.Tpo .deps/gga_c_p86.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_c_pw91.lo -MD -MP -MF .deps/gga_c_pw91.Tpo -c -o gga_c_pw91.lo gga_c_pw91.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_c_pw91.lo -MD -MP -MF .deps/gga_c_pw91.Tpo -c gga_c_pw91.c -o gga_c_pw91.o
mv -f .deps/gga_c_pw91.Tpo .deps/gga_c_pw91.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_c_am05.lo -MD -MP -MF .deps/gga_c_am05.Tpo -c -o gga_c_am05.lo gga_c_am05.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_c_am05.lo -MD -MP -MF .deps/gga_c_am05.Tpo -c gga_c_am05.c -o gga_c_am05.o
mv -f .deps/gga_c_am05.Tpo .deps/gga_c_am05.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_c_lm.lo -MD -MP -MF .deps/gga_c_lm.Tpo -c -o gga_c_lm.lo gga_c_lm.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_c_lm.lo -MD -MP -MF .deps/gga_c_lm.Tpo -c gga_c_lm.c -o gga_c_lm.o
mv -f .deps/gga_c_lm.Tpo .deps/gga_c_lm.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_c_wl.lo -MD -MP -MF .deps/gga_c_wl.Tpo -c -o gga_c_wl.lo gga_c_wl.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_c_wl.lo -MD -MP -MF .deps/gga_c_wl.Tpo -c gga_c_wl.c -o gga_c_wl.o
mv -f .deps/gga_c_wl.Tpo .deps/gga_c_wl.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_c_wi.lo -MD -MP -MF .deps/gga_c_wi.Tpo -c -o gga_c_wi.lo gga_c_wi.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_c_wi.lo -MD -MP -MF .deps/gga_c_wi.Tpo -c gga_c_wi.c -o gga_c_wi.o
mv -f .deps/gga_c_wi.Tpo .deps/gga_c_wi.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_lb.lo -MD -MP -MF .deps/gga_x_lb.Tpo -c -o gga_x_lb.lo gga_x_lb.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_lb.lo -MD -MP -MF .deps/gga_x_lb.Tpo -c gga_x_lb.c -o gga_x_lb.o
mv -f .deps/gga_x_lb.Tpo .deps/gga_x_lb.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_xc_b97.lo -MD -MP -MF .deps/gga_xc_b97.Tpo -c -o gga_xc_b97.lo gga_xc_b97.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_xc_b97.lo -MD -MP -MF .deps/gga_xc_b97.Tpo -c gga_xc_b97.c -o gga_xc_b97.o
mv -f .deps/gga_xc_b97.Tpo .deps/gga_xc_b97.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_xc_edf1.lo -MD -MP -MF .deps/gga_xc_edf1.Tpo -c -o gga_xc_edf1.lo gga_xc_edf1.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_xc_edf1.lo -MD -MP -MF .deps/gga_xc_edf1.Tpo -c gga_xc_edf1.c -o gga_xc_edf1.o
mv -f .deps/gga_xc_edf1.Tpo .deps/gga_xc_edf1.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_xc_1w.lo -MD -MP -MF .deps/gga_xc_1w.Tpo -c -o gga_xc_1w.lo gga_xc_1w.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_xc_1w.lo -MD -MP -MF .deps/gga_xc_1w.Tpo -c gga_xc_1w.c -o gga_xc_1w.o
mv -f .deps/gga_xc_1w.Tpo .deps/gga_xc_1w.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_2d_b86.lo -MD -MP -MF .deps/gga_x_2d_b86.Tpo -c -o gga_x_2d_b86.lo gga_x_2d_b86.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_2d_b86.lo -MD -MP -MF .deps/gga_x_2d_b86.Tpo -c gga_x_2d_b86.c -o gga_x_2d_b86.o
mv -f .deps/gga_x_2d_b86.Tpo .deps/gga_x_2d_b86.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_2d_b86_mgc.lo -MD -MP -MF .deps/gga_x_2d_b86_mgc.Tpo -c -o gga_x_2d_b86_mgc.lo gga_x_2d_b86_mgc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_2d_b86_mgc.lo -MD -MP -MF .deps/gga_x_2d_b86_mgc.Tpo -c gga_x_2d_b86_mgc.c -o gga_x_2d_b86_mgc.o
mv -f .deps/gga_x_2d_b86_mgc.Tpo .deps/gga_x_2d_b86_mgc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_2d_b88.lo -MD -MP -MF .deps/gga_x_2d_b88.Tpo -c -o gga_x_2d_b88.lo gga_x_2d_b88.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_2d_b88.lo -MD -MP -MF .deps/gga_x_2d_b88.Tpo -c gga_x_2d_b88.c -o gga_x_2d_b88.o
mv -f .deps/gga_x_2d_b88.Tpo .deps/gga_x_2d_b88.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_x_2d_pbe.lo -MD -MP -MF .deps/gga_x_2d_pbe.Tpo -c -o gga_x_2d_pbe.lo gga_x_2d_pbe.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_x_2d_pbe.lo -MD -MP -MF .deps/gga_x_2d_pbe.Tpo -c gga_x_2d_pbe.c -o gga_x_2d_pbe.o
mv -f .deps/gga_x_2d_pbe.Tpo .deps/gga_x_2d_pbe.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_k_tflw.lo -MD -MP -MF .deps/gga_k_tflw.Tpo -c -o gga_k_tflw.lo gga_k_tflw.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_k_tflw.lo -MD -MP -MF .deps/gga_k_tflw.Tpo -c gga_k_tflw.c -o gga_k_tflw.o
mv -f .deps/gga_k_tflw.Tpo .deps/gga_k_tflw.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_k_pearson.lo -MD -MP -MF .deps/gga_k_pearson.Tpo -c -o gga_k_pearson.lo gga_k_pearson.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_k_pearson.lo -MD -MP -MF .deps/gga_k_pearson.Tpo -c gga_k_pearson.c -o gga_k_pearson.o
mv -f .deps/gga_k_pearson.Tpo .deps/gga_k_pearson.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_k_ol1.lo -MD -MP -MF .deps/gga_k_ol1.Tpo -c -o gga_k_ol1.lo gga_k_ol1.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_k_ol1.lo -MD -MP -MF .deps/gga_k_ol1.Tpo -c gga_k_ol1.c -o gga_k_ol1.o
mv -f .deps/gga_k_ol1.Tpo .deps/gga_k_ol1.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_k_ol2.lo -MD -MP -MF .deps/gga_k_ol2.Tpo -c -o gga_k_ol2.lo gga_k_ol2.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_k_ol2.lo -MD -MP -MF .deps/gga_k_ol2.Tpo -c gga_k_ol2.c -o gga_k_ol2.o
mv -f .deps/gga_k_ol2.Tpo .deps/gga_k_ol2.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT gga_k_dk.lo -MD -MP -MF .deps/gga_k_dk.Tpo -c -o gga_k_dk.lo gga_k_dk.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT gga_k_dk.lo -MD -MP -MF .deps/gga_k_dk.Tpo -c gga_k_dk.c -o gga_k_dk.o
mv -f .deps/gga_k_dk.Tpo .deps/gga_k_dk.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_b3lyp.lo -MD -MP -MF .deps/hyb_gga_xc_b3lyp.Tpo -c -o hyb_gga_xc_b3lyp.lo hyb_gga_xc_b3lyp.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_b3lyp.lo -MD -MP -MF .deps/hyb_gga_xc_b3lyp.Tpo -c hyb_gga_xc_b3lyp.c -o hyb_gga_xc_b3lyp.o
mv -f .deps/hyb_gga_xc_b3lyp.Tpo .deps/hyb_gga_xc_b3lyp.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_o3lyp.lo -MD -MP -MF .deps/hyb_gga_xc_o3lyp.Tpo -c -o hyb_gga_xc_o3lyp.lo hyb_gga_xc_o3lyp.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_o3lyp.lo -MD -MP -MF .deps/hyb_gga_xc_o3lyp.Tpo -c hyb_gga_xc_o3lyp.c -o hyb_gga_xc_o3lyp.o
mv -f .deps/hyb_gga_xc_o3lyp.Tpo .deps/hyb_gga_xc_o3lyp.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_pbeh.lo -MD -MP -MF .deps/hyb_gga_xc_pbeh.Tpo -c -o hyb_gga_xc_pbeh.lo hyb_gga_xc_pbeh.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_pbeh.lo -MD -MP -MF .deps/hyb_gga_xc_pbeh.Tpo -c hyb_gga_xc_pbeh.c -o hyb_gga_xc_pbeh.o
mv -f .deps/hyb_gga_xc_pbeh.Tpo .deps/hyb_gga_xc_pbeh.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_b1wc.lo -MD -MP -MF .deps/hyb_gga_xc_b1wc.Tpo -c -o hyb_gga_xc_b1wc.lo hyb_gga_xc_b1wc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_b1wc.lo -MD -MP -MF .deps/hyb_gga_xc_b1wc.Tpo -c hyb_gga_xc_b1wc.c -o hyb_gga_xc_b1wc.o
mv -f .deps/hyb_gga_xc_b1wc.Tpo .deps/hyb_gga_xc_b1wc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT hyb_gga_xc_b97.lo -MD -MP -MF .deps/hyb_gga_xc_b97.Tpo -c -o hyb_gga_xc_b97.lo hyb_gga_xc_b97.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT hyb_gga_xc_b97.lo -MD -MP -MF .deps/hyb_gga_xc_b97.Tpo -c hyb_gga_xc_b97.c -o hyb_gga_xc_b97.o
mv -f .deps/hyb_gga_xc_b97.Tpo .deps/hyb_gga_xc_b97.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga.lo -MD -MP -MF .deps/mgga.Tpo -c -o mgga.lo mgga.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga.lo -MD -MP -MF .deps/mgga.Tpo -c mgga.c -o mgga.o
mv -f .deps/mgga.Tpo .deps/mgga.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga_x_lta.lo -MD -MP -MF .deps/mgga_x_lta.Tpo -c -o mgga_x_lta.lo mgga_x_lta.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga_x_lta.lo -MD -MP -MF .deps/mgga_x_lta.Tpo -c mgga_x_lta.c -o mgga_x_lta.o
mv -f .deps/mgga_x_lta.Tpo .deps/mgga_x_lta.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga_x_tpss.lo -MD -MP -MF .deps/mgga_x_tpss.Tpo -c -o mgga_x_tpss.lo mgga_x_tpss.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga_x_tpss.lo -MD -MP -MF .deps/mgga_x_tpss.Tpo -c mgga_x_tpss.c -o mgga_x_tpss.o
mv -f .deps/mgga_x_tpss.Tpo .deps/mgga_x_tpss.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga_x_br89.lo -MD -MP -MF .deps/mgga_x_br89.Tpo -c -o mgga_x_br89.lo mgga_x_br89.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga_x_br89.lo -MD -MP -MF .deps/mgga_x_br89.Tpo -c mgga_x_br89.c -o mgga_x_br89.o
mv -f .deps/mgga_x_br89.Tpo .deps/mgga_x_br89.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga_xc_vsxc.lo -MD -MP -MF .deps/mgga_xc_vsxc.Tpo -c -o mgga_xc_vsxc.lo mgga_xc_vsxc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga_xc_vsxc.lo -MD -MP -MF .deps/mgga_xc_vsxc.Tpo -c mgga_xc_vsxc.c -o mgga_xc_vsxc.o
mv -f .deps/mgga_xc_vsxc.Tpo .deps/mgga_xc_vsxc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga_x_m06l.lo -MD -MP -MF .deps/mgga_x_m06l.Tpo -c -o mgga_x_m06l.lo mgga_x_m06l.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga_x_m06l.lo -MD -MP -MF .deps/mgga_x_m06l.Tpo -c mgga_x_m06l.c -o mgga_x_m06l.o
mv -f .deps/mgga_x_m06l.Tpo .deps/mgga_x_m06l.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga_x_tau_hcth.lo -MD -MP -MF .deps/mgga_x_tau_hcth.Tpo -c -o mgga_x_tau_hcth.lo mgga_x_tau_hcth.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga_x_tau_hcth.lo -MD -MP -MF .deps/mgga_x_tau_hcth.Tpo -c mgga_x_tau_hcth.c -o mgga_x_tau_hcth.o
mv -f .deps/mgga_x_tau_hcth.Tpo .deps/mgga_x_tau_hcth.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga_c_tpss.lo -MD -MP -MF .deps/mgga_c_tpss.Tpo -c -o mgga_c_tpss.lo mgga_c_tpss.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga_c_tpss.lo -MD -MP -MF .deps/mgga_c_tpss.Tpo -c mgga_c_tpss.c -o mgga_c_tpss.o
mv -f .deps/mgga_c_tpss.Tpo .deps/mgga_c_tpss.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT mgga_x_2d_prhg07.lo -MD -MP -MF .deps/mgga_x_2d_prhg07.Tpo -c -o mgga_x_2d_prhg07.lo mgga_x_2d_prhg07.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT mgga_x_2d_prhg07.lo -MD -MP -MF .deps/mgga_x_2d_prhg07.Tpo -c mgga_x_2d_prhg07.c -o mgga_x_2d_prhg07.o
mv -f .deps/mgga_x_2d_prhg07.Tpo .deps/mgga_x_2d_prhg07.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lca.lo -MD -MP -MF .deps/lca.Tpo -c -o lca.lo lca.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lca.lo -MD -MP -MF .deps/lca.Tpo -c lca.c -o lca.o
mv -f .deps/lca.Tpo .deps/lca.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lca_omc.lo -MD -MP -MF .deps/lca_omc.Tpo -c -o lca_omc.lo lca_omc.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lca_omc.lo -MD -MP -MF .deps/lca_omc.Tpo -c lca_omc.c -o lca_omc.o
mv -f .deps/lca_omc.Tpo .deps/lca_omc.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT lca_lch.lo -MD -MP -MF .deps/lca_lch.Tpo -c -o lca_lch.lo lca_lch.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT lca_lch.lo -MD -MP -MF .deps/lca_lch.Tpo -c lca_lch.c -o lca_lch.o
mv -f .deps/lca_lch.Tpo .deps/lca_lch.Plo
/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..   -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT xc_f.lo -MD -MP -MF .deps/xc_f.Tpo -c -o xc_f.lo xc_f.c
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT xc_f.lo -MD -MP -MF .deps/xc_f.Tpo -c xc_f.c -o xc_f.o
mv -f .deps/xc_f.Tpo .deps/xc_f.Plo
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o libxc_funcs.lo  libxc_funcs.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c libxc_funcs.f90 -o libxc_funcs.o
cpp -P -std=c99  -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  ./libxc_master.F90 > ../src/libxc.f90
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o libxc.lo  libxc.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c libxc.f90 -o libxc.o
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2 -version-info 0:9:0  -o libxc.la -rpath /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib special_functions.lo integrate.lo util.lo mix_func.lo functionals.lo lda.lo lda_x.lo lda_x_1d.lo lda_x_2d.lo lda_c_wigner.lo lda_c_gombas.lo lda_c_rpa.lo lda_c_hl.lo lda_c_vwn.lo lda_c_pz.lo lda_c_pw.lo lda_c_ml1.lo lda_xc_teter93.lo lda_c_1d_csc.lo lda_c_2d_amgb.lo lda_c_2d_prm.lo lda_k_tf.lo gga.lo gga_x_lg93.lo gga_x_pbe.lo gga_x_rpbe.lo gga_x_pbea.lo gga_x_mpbe.lo gga_x_herman.lo gga_x_b86.lo gga_x_b86_mgc.lo gga_x_b88.lo gga_x_g96.lo gga_x_pw86.lo gga_x_pw91.lo gga_x_optx.lo gga_x_dk87.lo gga_x_ft97.lo gga_x_wc.lo gga_x_am05.lo gga_x_bayesian.lo gga_x_kt.lo gga_perdew.lo gga_c_pbe.lo gga_c_lyp.lo gga_c_p86.lo gga_c_pw91.lo gga_c_am05.lo gga_c_lm.lo gga_c_wl.lo gga_c_wi.lo gga_x_lb.lo gga_xc_b97.lo gga_xc_edf1.lo gga_xc_1w.lo gga_x_2d_b86.lo gga_x_2d_b86_mgc.lo gga_x_2d_b88.lo gga_x_2d_pbe.lo gga_k_tflw.lo gga_k_pearson.lo gga_k_ol1.lo gga_k_ol2.lo gga_k_dk.lo hyb_gga_xc_b3lyp.lo hyb_gga_xc_o3lyp.lo hyb_gga_xc_pbeh.lo hyb_gga_xc_b1wc.lo hyb_gga_xc_b97.lo mgga.lo mgga_x_lta.lo mgga_x_tpss.lo mgga_x_br89.lo mgga_xc_vsxc.lo mgga_x_m06l.lo mgga_x_tau_hcth.lo mgga_c_tpss.lo mgga_x_2d_prhg07.lo lca.lo lca_omc.lo lca_lch.lo xc_f.lo  libxc_funcs.lo libxc.lo 
libtool: link: ar cru .libs/libxc.a  special_functions.o integrate.o util.o mix_func.o functionals.o lda.o lda_x.o lda_x_1d.o lda_x_2d.o lda_c_wigner.o lda_c_gombas.o lda_c_rpa.o lda_c_hl.o lda_c_vwn.o lda_c_pz.o lda_c_pw.o lda_c_ml1.o lda_xc_teter93.o lda_c_1d_csc.o lda_c_2d_amgb.o lda_c_2d_prm.o lda_k_tf.o gga.o gga_x_lg93.o gga_x_pbe.o gga_x_rpbe.o gga_x_pbea.o gga_x_mpbe.o gga_x_herman.o gga_x_b86.o gga_x_b86_mgc.o gga_x_b88.o gga_x_g96.o gga_x_pw86.o gga_x_pw91.o gga_x_optx.o gga_x_dk87.o gga_x_ft97.o gga_x_wc.o gga_x_am05.o gga_x_bayesian.o gga_x_kt.o gga_perdew.o gga_c_pbe.o gga_c_lyp.o gga_c_p86.o gga_c_pw91.o gga_c_am05.o gga_c_lm.o gga_c_wl.o gga_c_wi.o gga_x_lb.o gga_xc_b97.o gga_xc_edf1.o gga_xc_1w.o gga_x_2d_b86.o gga_x_2d_b86_mgc.o gga_x_2d_b88.o gga_x_2d_pbe.o gga_k_tflw.o gga_k_pearson.o gga_k_ol1.o gga_k_ol2.o gga_k_dk.o hyb_gga_xc_b3lyp.o hyb_gga_xc_o3lyp.o hyb_gga_xc_pbeh.o hyb_gga_xc_b1wc.o hyb_gga_xc_b97.o mgga.o mgga_x_lta.o mgga_x_tpss.o mgga_x_br89.o mgga_xc_vsxc.o mgga_x_m06l.o mgga_x_tau_hcth.o mgga_c_tpss.o mgga_x_2d_prhg07.o lca.o lca_omc.o lca_lch.o xc_f.o libxc_funcs.o libxc.o
libtool: link: ranlib .libs/libxc.a
libtool: link: ( cd ".libs" && rm -f "libxc.la" && ln -s "../libxc.la" "libxc.la" )
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
Making all in testsuite
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/testsuite'
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..  -I./../src/ -I../src -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT xc_get_data-xc-get_data.o -MD -MP -MF .deps/xc_get_data-xc-get_data.Tpo -c -o xc_get_data-xc-get_data.o `test -f 'xc-get_data.c' || echo './'`xc-get_data.c
mv -f .deps/xc_get_data-xc-get_data.Tpo .deps/xc_get_data-xc-get_data.Po
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2   -o xc-get_data xc_get_data-xc-get_data.o -L../src/ -lxc -lm 
libtool: link: /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -g -O2 -o xc-get_data xc_get_data-xc-get_data.o  -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src/.libs/libxc.a -lm
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..  -I./../src/ -I../src -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT xc_consistency-xc-consistency.o -MD -MP -MF .deps/xc_consistency-xc-consistency.Tpo -c -o xc_consistency-xc-consistency.o `test -f 'xc-consistency.c' || echo './'`xc-consistency.c
mv -f .deps/xc_consistency-xc-consistency.Tpo .deps/xc_consistency-xc-consistency.Po
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2   -o xc-consistency xc_consistency-xc-consistency.o -L../src/ -lxc -lm 
libtool: link: /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -g -O2 -o xc-consistency xc_consistency-xc-consistency.o  -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src/.libs/libxc.a -lm
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make[5]: Nothing to be done for `all-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
cd sources/libxc-1.1.0.1 && make install 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
Making install in build
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/build'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/build'
make[5]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/pkgconfig" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/pkgconfig"
 /usr/bin/install -c -m 644 libxc.pc '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/pkgconfig'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/build'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/build'
Making install in src
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
make  install-am
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib"
 /bin/sh ../libtool   --mode=install /usr/bin/install -c   libxc.la '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib'
libtool: install: /usr/bin/install -c .libs/libxc.lai /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libxc.la
libtool: install: /usr/bin/install -c .libs/libxc.a /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libxc.a
libtool: install: chmod 644 /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libxc.a
libtool: install: ranlib /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libxc.a
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
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
 /usr/bin/install -c -m 644 xc.h xc_config.h '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
 /usr/bin/install -c -m 644 xc_funcs.h libxc_funcs_m.mod xc_f90_lib_m.mod xc_f90_types_m.mod '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/src'
Making install in testsuite
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1/testsuite'
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/libxc-1.1.0.1'
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
Checking build of libxc fallback
test -e stamps/libxc-install-stamp
make linalg
make[2]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
The build of linalg has been disabled
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
Checking build of linalg fallback
test -e stamps/linalg-install-stamp
make netcdf
make[2]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
cd sources && \
	  gzip -cd /home/temok/.abinit/tarballs/netcdf-4.1.1.tar.gz | tar xf -
No patch to apply
cd sources/netcdf-4.1.1 && \
	  CPP="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E" \
	  CPPFLAGS="-DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" \
	  CC="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc" \
	  CFLAGS="-g -O2" \
	  CXX="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx" \
	  CXXFLAGS="" \
          FCCPP="cpp -P -std=c99" \
	  F77="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90" \
	  FFLAGS="-fixed -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" \
	  F90="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90" \
	  F90FLAGS="-free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" \
	  FC="/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90" \
	  FCFLAGS="-free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" \
	  LDFLAGS=" " \
	  LIBS="" \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib" \
	  /bin/sh ./configure \
	    --prefix="/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports" \
	    --program-suffix="-abinit" \
	    --disable-cxx --disable-cxx-4 --disable-dap --disable-hdf4 --disable-netcdf4 --enable-fortran --enable-static --disable-shared
configure: netCDF 4.1.1
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
configure: checking user options
checking whether CXX is set to ''... no
checking whether FC is set to ''... no
checking whether F90 is set to ''... no
checking whether a NCIO_MINBLOCKSIZE was specified... 256
checking whether udunits is to be built... no
checking if fsync support is enabled... yes
checking whether extra valgrind tests should be run... no
checking whether libcf is to be built... no
checking whether reading of HDF4 SD files is to be enabled... no
checking whether to fetch some sample HDF4 files from Unidata ftp site to test HDF4 reading (requires wget)... no
checking whether parallel I/O for classic and 64-bit offset files using parallel-netcdf is to be enabled... no
checking whether a location for the parallel-netcdf library was specified... no
checking whether new netCDF-4 C++ API is to be built... no
checking whether extra example tests should be run... no
checking whether parallel IO tests should be run... no
checking whether a location for the HDF5 library was specified... 
checking whether a location for the ZLIB library was specified... 
checking whether a location for the SZLIB library was specified... 
checking whether a location for the HDF4 library was specified... 
checking whether a default chunk size in bytes was specified... 4194304
checking whether a maximum per-variable cache size for HDF5 was specified... 67108864
checking whether a number of chunks for the default per-variable cache was specified... 10
checking whether a default file cache size for HDF5 was specified... 4194304
checking whether a default file cache maximum number of elements for HDF5 was specified... 1009
checking whether a default cache preemption for HDF5 was specified... 0.75
checking whether netCDF-4 logging is enabled... no
checking whether a path for curl-config was specified... no
checking whether a location for curl installation was specified... no
configure: checking whether a location for curl-config is in PATH... yes
checking whether DAP client is to be built... no
checking whether dap remote testing should be enabled (default on)... no
checking whether the time-consuming dap tests should be enabled (default off)... no
checking whether a location for liboc was specified... no
checking whether netCDF extra tests should be run (developers only)... no
checking whether Fortran compiler(s) should be tested during configure... yes
checking whether FFIO will be used... no
checking whether to skip C++, F77, or F90 APIs if compiler is broken... yes
checking whether only the C library is desired... no
checking whether examples should be built... yes
checking whether F77 API is desired... yes
checking whether any Fortran API is desired... yes
checking whether F90 API is desired... yes
checking whether fortran type sizes should be checked... yes
checking whether C API is desired... yes
checking where to get netCDF C-only library for separate fortran libraries... 
checking whether CXX API is desired... no
checking whether v2 netCDF API should be built... yes
checking whether the ncgen/ncdump should be built... yes
checking whether large file (> 2GB) tests should be run... no
checking whether benchmaks should be run (experimental)... no
checking whether extreme numbers should be used in tests... yes
checking where to put large temp files if large file tests are run... .
checking whether a win32 DLL is desired... no
checking whether separate fortran libs are desired... no
configure: finding C compiler
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc accepts -g... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... gcc3
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc and cc understand -c and -o together... yes
checking for an ANSI C-conforming const... yes
configure: finding Fortran compiler (will not be used if Fortran API is not desired)
checking whether we are using the GNU Fortran compiler... no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... yes
checking whether we are using the GNU Fortran 77 compiler... no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... yes
configure: setting up Fortran 90
checking for Fortran flag to compile .f90 files... none
checking fortran 90 modules inclusion flag... -I
checking if Fortran compiler can handle Fortran-90... yes
configure: finding C++ compiler (will not be used if C++ API is not desired)
checking whether we are using the GNU C++ compiler... yes
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx accepts -g... yes
checking dependency style of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx... gcc3
configure: setting up libtool
checking for a sed that does not truncate output... /bin/sed
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for fgrep... /bin/grep -F
checking for ld used by /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... yes
checking for /usr/bin/ld option to reload object files... -r
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc object... ok
checking how to run the C preprocessor... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E
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
checking whether we are using the GNU C++ compiler... (cached) yes
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx accepts -g... (cached) yes
checking dependency style of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx... (cached) gcc3
checking how to run the C++ preprocessor... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx -E
checking whether we are using the GNU Fortran 77 compiler... (cached) no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... (cached) yes
checking whether we are using the GNU Fortran compiler... (cached) no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... (cached) yes
checking for objdir... .libs
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -fno-rtti -fno-exceptions... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to produce PIC... -fPIC -DPIC
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc PIC flag -fPIC -DPIC works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc static flag -static works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for ld used by /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx... /usr/bin/ld -m elf_x86_64
checking if the linker (/usr/bin/ld -m elf_x86_64) is GNU ld... yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx option to produce PIC... -fPIC -DPIC
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx PIC flag -fPIC -DPIC works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx static flag -static works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 option to produce PIC... 
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 static flag  works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 option to produce PIC... 
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 static flag  works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
configure: finding other utilities
configure: trying to set fortran flags for this platform
checking if we need to set _LARGE_FILES despite results of previous tests... _LARGE_FILES=
checking for special C compiler options needed for large files... no
checking for _FILE_OFFSET_BITS value needed for large files... no
configure: displaying some results
checking CPPFLAGS... -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include
checking CC CFLAGS... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -g -O2
checking type /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc is /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc
checking CXX... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx
checking CXXFLAGS... 
checking type /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx is /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx
checking FC... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90
checking FFLAGS... -fixed -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include
checking type /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 is /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90
checking F90... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90
checking FCFLAGS... -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include
checking type /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 is /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90
checking AR... ar
checking AR_FLAGS... cru
checking type ar... ar is /usr/bin/ar
checking NM... /usr/bin/nm -B
checking NMFLAGS... 
checking for /usr/bin/nm... /usr/bin/nm -B
checking nm flags... 
checking for C-equivalent to Fortran routine "SUB"... sub_
checking for Fortran "byte"... yes
checking for Fortran "integer*2"... yes
checking if Fortran "byte" is C "signed char"... yes
checking if Fortran "byte" is C "short"... no
checking if Fortran "byte" is C "int"... no
checking if Fortran "byte" is C "long"... no
checking if Fortran "integer*2" is C "short"... yes
checking if Fortran "integer*2" is C "int"... no
checking if Fortran "integer*2" is C "long"... no
checking if Fortran "integer" is C "int"... yes
checking if Fortran "real" is C "float"... yes
checking if Fortran "doubleprecision" is C "double"... yes
checking for Fortran-equivalent to netCDF "byte"... byte
checking for Fortran-equivalent to netCDF "short"... integer*2
checking if Fortran 90 compiler capitalizes .mod filenames... no
configure: checking types, headers, and functions
checking for stdlib.h... (cached) yes
checking for sys/types.h... (cached) yes
checking locale.h usability... yes
checking locale.h presence... yes
checking for locale.h... yes
checking for dirent.h that defines DIR... yes
checking for library containing opendir... none required
checking for ANSI C header files... (cached) yes
checking for sys/wait.h that is POSIX.1 compatible... yes
checking whether time.h and sys/time.h may both be included... yes
checking stdio.h usability... yes
checking stdio.h presence... yes
checking for stdio.h... yes
checking stdarg.h usability... yes
checking stdarg.h presence... yes
checking for stdarg.h... yes
checking errno.h usability... yes
checking errno.h presence... yes
checking for errno.h... yes
checking ctype.h usability... yes
checking ctype.h presence... yes
checking for ctype.h... yes
checking fcntl.h usability... yes
checking fcntl.h presence... yes
checking for fcntl.h... yes
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking for stdlib.h... (cached) yes
checking for string.h... (cached) yes
checking for strings.h... (cached) yes
checking for unistd.h... (cached) yes
checking for sys/stat.h... (cached) yes
checking getopt.h usability... yes
checking getopt.h presence... yes
checking for getopt.h... yes
checking for vprintf... yes
checking for _doprnt... no
checking for stdbool.h that conforms to C99... yes
checking for _Bool... yes
checking for strlcat... no
checking for strerror... yes
checking for snprintf... yes
checking for strchr... yes
checking for strrchr... yes
checking for mktemp... yes
checking for strcat... yes
checking for strcpy... yes
checking for strdup... yes
checking for strcasecmp... yes
checking for getrlimit... yes
checking for gettimeofday... yes
checking for fsync... yes
checking for MPI_Comm_f2c... yes
checking for working alloca.h... yes
checking for alloca... yes
checking whether isnan is declared... yes
checking whether isinf is declared... yes
checking whether isfinite is declared... yes
checking whether signbit is declared... yes
checking for struct stat.st_blksize... yes
checking for IEEE floating point format... yes
checking for size_t... yes
checking for off_t... yes
checking for ssize_t... yes
checking for ptrdiff_t... yes
checking for uchar... no
checking whether char is unsigned... no
checking whether byte ordering is bigendian... no
checking size of short... 2
checking size of int... 4
checking size of long... 8
checking size of float... 4
checking size of double... 8
checking size of off_t... 8
checking size of size_t... 8
checking for manual-page index command... 
checking hdf5.h usability... no
checking hdf5.h presence... no
checking for hdf5.h... no
checking whether we should try to build netCDF-4... no
checking if API dispatch is enabled... no
checking what to call the output of the ftpbin target... binary-netcdf-4.1.1_nc3_/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90_/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90.tar /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx
checking binary distribution directory... /home/ftp/pub/binary/dummy_system
checking for library containing xdr_void... none required
configure: XDR Functions appear to be in libc.
checking for rpc/types.h... yes
checking for rpc/xdr.h... yes
configure: generating header files and makefiles
configure: creating ./config.status
config.status: creating Makefile
config.status: creating nc-config
config.status: creating netcdf.pc
config.status: creating man4/Makefile
config.status: creating fortran/Makefile
config.status: creating libsrc/Makefile
config.status: creating libsrc4/Makefile
config.status: creating nctest/Makefile
config.status: creating nc_test4/Makefile
config.status: creating nc_test/Makefile
config.status: creating ncdump/Makefile
config.status: creating ncgen3/Makefile
config.status: creating ncgen/Makefile
config.status: creating nf_test/Makefile
config.status: creating cxx/Makefile
config.status: creating cxx4/Makefile
config.status: creating f90/Makefile
config.status: creating examples/Makefile
config.status: creating examples/C/Makefile
config.status: creating examples/CDL/Makefile
config.status: creating examples/CXX/Makefile
config.status: creating examples/CXX4/Makefile
config.status: creating examples/F90/Makefile
config.status: creating examples/F77/Makefile
config.status: creating libncdap3/Makefile
config.status: creating libncdap3/oc/Makefile
config.status: creating libncdap4/Makefile
config.status: creating ncdap_test/Makefile
config.status: creating ncdap_test/testdata3/Makefile
config.status: creating ncdap_test/expected3/Makefile
config.status: creating ncdap_test/expected4/Makefile
config.status: creating ncdap_test/expectremote3/Makefile
config.status: creating ncdap_test/expectremote4/Makefile
config.status: creating ncdump/cdl4/Makefile
config.status: creating ncdump/expected4/Makefile
config.status: creating config.h
config.status: creating fortran/nfconfig1.inc
config.status: executing depfiles commands
config.status: executing libtool commands
=== configuring in udunits (/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/udunits)
configure: running /bin/sh ./configure --disable-option-checking '--prefix=/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports'  '--program-suffix=-abinit' '--disable-cxx' '--disable-cxx-4' '--disable-dap' '--disable-hdf4' '--disable-netcdf4' '--enable-fortran' '--enable-static' '--disable-shared' 'CC=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc' 'CFLAGS=-g -O2' 'LDFLAGS= ' 'LIBS=' 'CPPFLAGS=-DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include' 'FC=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90' 'FCFLAGS=-free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include' 'F77=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90' 'FFLAGS=-fixed -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include' 'CXX=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx' 'CXXFLAGS=' 'CPP=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E' --cache-file=/dev/null --srcdir=.
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc accepts -g... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... gcc3
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc and cc understand -c and -o together... yes
checking how to run the C preprocessor... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E
checking whether ln -s works... yes
checking whether make sets $(MAKE)... (cached) yes
checking for bison... bison -y
checking for flex... flex
checking lex output file root... lex.yy
checking lex library... -lfl
checking whether yytext is a pointer... yes
checking for library containing dirname... none required
checking for library containing log10... none required
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
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
checking float.h usability... yes
checking float.h presence... yes
checking for float.h... yes
checking for inttypes.h... (cached) yes
checking stddef.h usability... yes
checking stddef.h presence... yes
checking for stddef.h... yes
checking for stdlib.h... (cached) yes
checking for string.h... (cached) yes
checking for strings.h... (cached) yes
configure: CUNIT not found.  Disabling unit-tests.
checking for an ANSI C-conforming const... yes
checking for size_t... yes
checking whether byte ordering is bigendian... no
checking for floor... yes
checking for memmove... yes
checking for memset... yes
checking for modf... yes
checking for pow... yes
checking for strcasecmp... yes
checking for strdup... yes
checking for strpbrk... yes
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking for a sed that does not truncate output... /bin/sed
checking for fgrep... /bin/grep -F
checking for ld used by /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... yes
checking for /usr/bin/ld option to reload object files... -r
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc object... ok
checking for dlfcn.h... yes
checking for objdir... .libs
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -fno-rtti -fno-exceptions... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to produce PIC... -fPIC -DPIC
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc PIC flag -fPIC -DPIC works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc static flag -static works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
configure: creating ./config.status
config.status: creating Makefile
config.status: creating expat/Makefile
config.status: creating lib/Makefile
config.status: creating lib/xmlFailures/Makefile
config.status: creating lib/xmlSuccesses/Makefile
config.status: creating prog/Makefile
config.status: creating test/Makefile
config.status: creating config.h
config.status: creating expat/expat_config.h
config.status: executing depfiles commands
config.status: executing libtool commands
=== configuring in libcf (/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libcf)
configure: running /bin/sh ./configure --disable-option-checking '--prefix=/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports'  '--program-suffix=-abinit' '--disable-cxx' '--disable-cxx-4' '--disable-dap' '--disable-hdf4' '--disable-netcdf4' '--enable-fortran' '--enable-static' '--disable-shared' 'CC=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc' 'CFLAGS=-g -O2' 'LDFLAGS= ' 'LIBS=' 'CPPFLAGS=-DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include' 'FC=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90' 'FCFLAGS=-free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include' 'F77=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90' 'FFLAGS=-fixed -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include' 'CXX=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicxx' 'CXXFLAGS=' 'CPP=/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E' --cache-file=/dev/null --srcdir=.
configure: libcf 1.0-alpha5
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
configure: checking user options
checking whether FC is set to ''... no
checking whether documentation is to be built... no
checking whether gridspec tools are to be built... no
checking whether gridspec test data should be fetched from Unidata FTP site... no
checking whether cfcheck is to be built... yes
checking whether logging is enabled (useful to CF developers, mainly... no
checking whether netCDF-4 is to be used... no
checking whether extra tests on sample data should be performed... no
checking whether a location for the HDF5 library was specified... 
checking whether a location for the HDF4 library was specified... 
checking whether a location for the ZLIB library was specified... 
checking whether a location for the SZLIB library was specified... 
checking whether Fortran 90 API is desired... yes
checking whether a location for the netCDF library was specified... no
configure: finding C compiler
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc accepts -g... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... gcc3
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc and cc understand -c and -o together... yes
configure: finding Fortran compiler (required, even if Fortran API is not desired)
checking whether we are using the GNU Fortran compiler... no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... yes
checking whether we are using the GNU Fortran 77 compiler... no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... yes
checking for Fortran flag to compile .f90 files... none
checking fortran 90 modules inclusion flag... -I
checking if Fortran 90 compiler capitalizes .mod filenames... no
configure: finding other utilities
configure: setting up libtool
checking for a sed that does not truncate output... /bin/sed
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for fgrep... /bin/grep -F
checking for ld used by /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... yes
checking for /usr/bin/ld option to reload object files... -r
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc object... ok
checking how to run the C preprocessor... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E
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
checking whether we are using the GNU Fortran 77 compiler... (cached) no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... (cached) yes
checking whether we are using the GNU Fortran compiler... (cached) no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... (cached) yes
checking for objdir... .libs
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -fno-rtti -fno-exceptions... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to produce PIC... -fPIC -DPIC
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc PIC flag -fPIC -DPIC works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc static flag -static works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 option to produce PIC... 
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 static flag  works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 option to produce PIC... 
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 static flag  works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
configure: checking for large file support
checking for special C compiler options needed for large files... no
checking for _FILE_OFFSET_BITS value needed for large files... no
configure: checking types, headers, and functions
checking for stdlib.h... (cached) yes
checking for sys/types.h... (cached) yes
checking for unistd.h... (cached) yes
checking for strerror... yes
checking for strlcat... no
checking for working alloca.h... yes
checking for alloca... yes
checking for struct stat.st_blksize... yes
checking for size_t... yes
checking for off_t... yes
checking for ssize_t... yes
checking for ptrdiff_t... yes
checking for uchar... no
checking whether char is unsigned... no
checking whether byte ordering is bigendian... no
checking size of short... 2
checking size of int... 4
checking size of long... 8
checking size of float... 4
checking size of double... 8
checking size of off_t... 8
checking size of size_t... 8
checking for library containing floor... none required
configure: generating header files and makefiles
configure: creating ./config.status
config.status: creating gridspec/tools/make_hgrid/run_tests
config.status: creating gridspec/tools/make_vgrid/run_tests
config.status: creating gridspec/tools/make_topog/run_tests
config.status: creating Makefile
config.status: creating doc/Makefile
config.status: creating cfcheck/Makefile
config.status: creating src/Makefile
config.status: creating gridspec/Makefile
config.status: creating gridspec/shared/Makefile
config.status: creating gridspec/shared/mosaic/Makefile
config.status: creating gridspec/tools/Makefile
config.status: creating gridspec/tools/shared/Makefile
config.status: creating gridspec/tools/make_hgrid/Makefile
config.status: creating gridspec/tools/make_solo_mosaic/Makefile
config.status: creating gridspec/tools/make_coupler_mosaic/Makefile
config.status: creating gridspec/tools/fregrid/Makefile
config.status: creating gridspec/tools/make_topog/Makefile
config.status: creating gridspec/tools/make_vgrid/Makefile
config.status: creating gridspec/tools/river_regrid/Makefile
config.status: creating gridspec/tools/transfer_to_mosaic_grid/Makefile
config.status: creating config.h
config.status: creating nfconfig.inc
config.status: executing depfiles commands
config.status: executing libtool commands
cd sources/netcdf-4.1.1 && make 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make  all-recursive
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
Making all in f90
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90        -I../libsrc -I.  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o typeSizes.o  typeSizes.f90
make  all-am
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90        -I../libsrc -I.  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o typeSizes.lo  typeSizes.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -I../libsrc -I. -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c typeSizes.f90 -o typeSizes.o
/bin/sh ../libtool --tag=FC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90        -I../libsrc -I.  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c -o netcdf.lo  netcdf.f90
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -I../libsrc -I. -free -g -extend-source -vec-report0 -noaltparam -nofpscomp -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -c netcdf.f90 -o netcdf.o
/bin/sh ../libtool --tag=FC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90        -I../libsrc -I.  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include        -o libnetcdff90.la  typeSizes.lo  netcdf.lo  
libtool: link: ar cru .libs/libnetcdff90.a  typeSizes.o netcdf.o
libtool: link: ranlib .libs/libnetcdff90.a
libtool: link: ( cd ".libs" && rm -f "libnetcdff90.la" && ln -s "../libnetcdff90.la" "libnetcdff90.la" )
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
Making all in fortran
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
echo '!     NetCDF-3.' > netcdf.inc
cat ../fortran/netcdf3.inc >> netcdf.inc
echo >> netcdf.inc
echo '!     NetCDF-2.' >> netcdf.inc
cat ../fortran/netcdf2.inc >> netcdf.inc
make  all-am
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
depbase=`echo fort-attio.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-attio.lo -MD -MP -MF $depbase.Tpo -c -o fort-attio.lo fort-attio.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-attio.lo -MD -MP -MF .deps/fort-attio.Tpo -c fort-attio.c -o fort-attio.o
depbase=`echo fort-control.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-control.lo -MD -MP -MF $depbase.Tpo -c -o fort-control.lo fort-control.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-control.lo -MD -MP -MF .deps/fort-control.Tpo -c fort-control.c -o fort-control.o
depbase=`echo fort-dim.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-dim.lo -MD -MP -MF $depbase.Tpo -c -o fort-dim.lo fort-dim.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-dim.lo -MD -MP -MF .deps/fort-dim.Tpo -c fort-dim.c -o fort-dim.o
depbase=`echo fort-genatt.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-genatt.lo -MD -MP -MF $depbase.Tpo -c -o fort-genatt.lo fort-genatt.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-genatt.lo -MD -MP -MF .deps/fort-genatt.Tpo -c fort-genatt.c -o fort-genatt.o
depbase=`echo fort-geninq.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-geninq.lo -MD -MP -MF $depbase.Tpo -c -o fort-geninq.lo fort-geninq.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-geninq.lo -MD -MP -MF .deps/fort-geninq.Tpo -c fort-geninq.c -o fort-geninq.o
depbase=`echo fort-genvar.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-genvar.lo -MD -MP -MF $depbase.Tpo -c -o fort-genvar.lo fort-genvar.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-genvar.lo -MD -MP -MF .deps/fort-genvar.Tpo -c fort-genvar.c -o fort-genvar.o
depbase=`echo fort-lib.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-lib.lo -MD -MP -MF $depbase.Tpo -c -o fort-lib.lo fort-lib.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-lib.lo -MD -MP -MF .deps/fort-lib.Tpo -c fort-lib.c -o fort-lib.o
depbase=`echo fort-misc.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-misc.lo -MD -MP -MF $depbase.Tpo -c -o fort-misc.lo fort-misc.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-misc.lo -MD -MP -MF .deps/fort-misc.Tpo -c fort-misc.c -o fort-misc.o
depbase=`echo fort-v2compat.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-v2compat.lo -MD -MP -MF $depbase.Tpo -c -o fort-v2compat.lo fort-v2compat.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-v2compat.lo -MD -MP -MF .deps/fort-v2compat.Tpo -c fort-v2compat.c -o fort-v2compat.o
depbase=`echo fort-vario.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-vario.lo -MD -MP -MF $depbase.Tpo -c -o fort-vario.lo fort-vario.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-vario.lo -MD -MP -MF .deps/fort-vario.Tpo -c fort-vario.c -o fort-vario.o
depbase=`echo fort-var1io.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-var1io.lo -MD -MP -MF $depbase.Tpo -c -o fort-var1io.lo fort-var1io.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-var1io.lo -MD -MP -MF .deps/fort-var1io.Tpo -c fort-var1io.c -o fort-var1io.o
depbase=`echo fort-varaio.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-varaio.lo -MD -MP -MF $depbase.Tpo -c -o fort-varaio.lo fort-varaio.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-varaio.lo -MD -MP -MF .deps/fort-varaio.Tpo -c fort-varaio.c -o fort-varaio.o
depbase=`echo fort-varmio.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-varmio.lo -MD -MP -MF $depbase.Tpo -c -o fort-varmio.lo fort-varmio.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-varmio.lo -MD -MP -MF .deps/fort-varmio.Tpo -c fort-varmio.c -o fort-varmio.o
depbase=`echo fort-varsio.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I..         -I../libsrc   -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT fort-varsio.lo -MD -MP -MF $depbase.Tpo -c -o fort-varsio.lo fort-varsio.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../libsrc -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT fort-varsio.lo -MD -MP -MF .deps/fort-varsio.Tpo -c fort-varsio.c -o fort-varsio.o
/bin/sh ../libtool --tag=FC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90  -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -DNDEBUG -DpgiFortran -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include   -o libnetcdff.la  fort-attio.lo fort-control.lo fort-dim.lo fort-genatt.lo fort-geninq.lo fort-genvar.lo fort-lib.lo fort-misc.lo fort-v2compat.lo fort-vario.lo fort-var1io.lo fort-varaio.lo fort-varmio.lo fort-varsio.lo    ../f90/libnetcdff90.la 
libtool: link: (cd .libs/libnetcdff.lax/libnetcdff90.a && ar x "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran/../f90/.libs/libnetcdff90.a")
libtool: link: ar cru .libs/libnetcdff.a  fort-attio.o fort-control.o fort-dim.o fort-genatt.o fort-geninq.o fort-genvar.o fort-lib.o fort-misc.o fort-v2compat.o fort-vario.o fort-var1io.o fort-varaio.o fort-varmio.o fort-varsio.o  .libs/libnetcdff.lax/libnetcdff90.a/typeSizes.o .libs/libnetcdff.lax/libnetcdff90.a/netcdf.o 
libtool: link: ranlib .libs/libnetcdff.a
libtool: link: rm -fr .libs/libnetcdff.lax
libtool: link: ( cd ".libs" && rm -f "libnetcdff.la" && ln -s "../libnetcdff.la" "libnetcdff.la" )
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
Making all in libsrc
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libsrc'
depbase=`echo attr.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT attr.lo -MD -MP -MF $depbase.Tpo -c -o attr.lo attr.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT attr.lo -MD -MP -MF .deps/attr.Tpo -c attr.c -o attr.o
depbase=`echo ncx.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT ncx.lo -MD -MP -MF $depbase.Tpo -c -o ncx.lo ncx.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT ncx.lo -MD -MP -MF .deps/ncx.Tpo -c ncx.c -o ncx.o
depbase=`echo dim.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT dim.lo -MD -MP -MF $depbase.Tpo -c -o dim.lo dim.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT dim.lo -MD -MP -MF .deps/dim.Tpo -c dim.c -o dim.o
depbase=`echo error.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT error.lo -MD -MP -MF $depbase.Tpo -c -o error.lo error.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT error.lo -MD -MP -MF .deps/error.Tpo -c error.c -o error.o
depbase=`echo libvers.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT libvers.lo -MD -MP -MF $depbase.Tpo -c -o libvers.lo libvers.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT libvers.lo -MD -MP -MF .deps/libvers.Tpo -c libvers.c -o libvers.o
depbase=`echo nc.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT nc.lo -MD -MP -MF $depbase.Tpo -c -o nc.lo nc.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT nc.lo -MD -MP -MF .deps/nc.Tpo -c nc.c -o nc.o
depbase=`echo string.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT string.lo -MD -MP -MF $depbase.Tpo -c -o string.lo string.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT string.lo -MD -MP -MF .deps/string.Tpo -c string.c -o string.o
depbase=`echo v1hpg.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT v1hpg.lo -MD -MP -MF $depbase.Tpo -c -o v1hpg.lo v1hpg.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT v1hpg.lo -MD -MP -MF .deps/v1hpg.Tpo -c v1hpg.c -o v1hpg.o
depbase=`echo var.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT var.lo -MD -MP -MF $depbase.Tpo -c -o var.lo var.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT var.lo -MD -MP -MF .deps/var.Tpo -c var.c -o var.o
depbase=`echo utf8proc.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT utf8proc.lo -MD -MP -MF $depbase.Tpo -c -o utf8proc.lo utf8proc.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT utf8proc.lo -MD -MP -MF .deps/utf8proc.Tpo -c utf8proc.c -o utf8proc.o
depbase=`echo putget.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT putget.lo -MD -MP -MF $depbase.Tpo -c -o putget.lo putget.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT putget.lo -MD -MP -MF .deps/putget.Tpo -c putget.c -o putget.o
depbase=`echo posixio.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT posixio.lo -MD -MP -MF $depbase.Tpo -c -o posixio.lo posixio.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT posixio.lo -MD -MP -MF .deps/posixio.Tpo -c posixio.c -o posixio.o
depbase=`echo v2i.lo | sed 's|[^/]*$|.deps/&|;s|\.lo$||'`;\
	/bin/sh ../libtool --tag=CC   --mode=compile /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT v2i.lo -MD -MP -MF $depbase.Tpo -c -o v2i.lo v2i.c &&\
	mv -f $depbase.Tpo $depbase.Plo
libtool: compile:  /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -g -O2 -MT v2i.lo -MD -MP -MF .deps/v2i.Tpo -c v2i.c -o v2i.o
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2      -o libnetcdf2.la  v2i.lo  
libtool: link: ar cru .libs/libnetcdf2.a  v2i.o
libtool: link: ranlib .libs/libnetcdf2.a
libtool: link: ( cd ".libs" && rm -f "libnetcdf2.la" && ln -s "../libnetcdf2.la" "libnetcdf2.la" )
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2     -version-info 4:0:0   -o libnetcdf.la -rpath /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib attr.lo ncx.lo dim.lo error.lo libvers.lo nc.lo string.lo v1hpg.lo var.lo utf8proc.lo  putget.lo  posixio.lo  libnetcdf2.la ../fortran/libnetcdff.la 
libtool: link: (cd .libs/libnetcdf.lax/libnetcdf2.a && ar x "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libsrc/./.libs/libnetcdf2.a")
libtool: link: (cd .libs/libnetcdf.lax/libnetcdff.a && ar x "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libsrc/../fortran/.libs/libnetcdff.a")
libtool: link: ar cru .libs/libnetcdf.a  attr.o ncx.o dim.o error.o libvers.o nc.o string.o v1hpg.o var.o utf8proc.o putget.o posixio.o  .libs/libnetcdf.lax/libnetcdf2.a/v2i.o  .libs/libnetcdf.lax/libnetcdff.a/fort-vario.o .libs/libnetcdf.lax/libnetcdff.a/fort-attio.o .libs/libnetcdf.lax/libnetcdff.a/fort-geninq.o .libs/libnetcdf.lax/libnetcdff.a/fort-var1io.o .libs/libnetcdf.lax/libnetcdff.a/typeSizes.o .libs/libnetcdf.lax/libnetcdff.a/fort-control.o .libs/libnetcdf.lax/libnetcdff.a/fort-misc.o .libs/libnetcdf.lax/libnetcdff.a/netcdf.o .libs/libnetcdf.lax/libnetcdff.a/fort-varmio.o .libs/libnetcdf.lax/libnetcdff.a/fort-lib.o .libs/libnetcdf.lax/libnetcdff.a/fort-varsio.o .libs/libnetcdf.lax/libnetcdff.a/fort-dim.o .libs/libnetcdf.lax/libnetcdff.a/fort-genatt.o .libs/libnetcdf.lax/libnetcdff.a/fort-varaio.o .libs/libnetcdf.lax/libnetcdff.a/fort-genvar.o .libs/libnetcdf.lax/libnetcdff.a/fort-v2compat.o 
libtool: link: ranlib .libs/libnetcdf.a
libtool: link: rm -fr .libs/libnetcdf.lax
libtool: link: ( cd ".libs" && rm -f "libnetcdf.la" && ln -s "../libnetcdf.la" "libnetcdf.la" )
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libsrc'
Making all in nctest
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nctest'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nctest'
Making all in ncgen3
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen3'
depbase=`echo main.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran        -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT main.o -MD -MP -MF $depbase.Tpo -c -o main.o main.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo load.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran        -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT load.o -MD -MP -MF $depbase.Tpo -c -o load.o load.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo escapes.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran        -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT escapes.o -MD -MP -MF $depbase.Tpo -c -o escapes.o escapes.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo getfill.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran        -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT getfill.o -MD -MP -MF $depbase.Tpo -c -o getfill.o getfill.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo init.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran        -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT init.o -MD -MP -MF $depbase.Tpo -c -o init.o init.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo genlib.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran        -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT genlib.o -MD -MP -MF $depbase.Tpo -c -o genlib.o genlib.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo ncgentab.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran        -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT ncgentab.o -MD -MP -MF $depbase.Tpo -c -o ncgentab.o ncgentab.c &&\
	mv -f $depbase.Tpo $depbase.Po
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2        -o ncgen3 main.o load.o escapes.o getfill.o init.o genlib.o ncgentab.o ../libsrc/libnetcdf.la -lm 
libtool: link: /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -g -O2 -o ncgen3 main.o load.o escapes.o getfill.o init.o genlib.o ncgentab.o  ../libsrc/.libs/libnetcdf.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f90.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f77.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-rte.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-pal.a -ldl -lnsl -lutil -lm -pthread
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen3'
Making all in ncgen
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen'
depbase=`echo main.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT main.o -MD -MP -MF $depbase.Tpo -c -o main.o main.c &&\
	mv -f $depbase.Tpo $depbase.Po
main.c(371): warning #188: enumerated type mixed with another type
      fillconstant.nctype = NC_FILLVALUE;
                          ^

depbase=`echo cdata.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT cdata.o -MD -MP -MF $depbase.Tpo -c -o cdata.o cdata.c &&\
	mv -f $depbase.Tpo $depbase.Po
cdata.c(116): warning #592: variable "con" is used before its value is set
  	    semerror(con->lineno,"Vlen data must be enclosed in {..}");
  	             ^

depbase=`echo bindata.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT bindata.o -MD -MP -MF $depbase.Tpo -c -o bindata.o bindata.c &&\
	mv -f $depbase.Tpo $depbase.Po
bindata.c(113): warning #592: variable "con" is used before its value is set
  	    semerror(con->lineno,"Vlen data must be enclosed in {..}");
  	             ^

depbase=`echo genchar.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT genchar.o -MD -MP -MF $depbase.Tpo -c -o genchar.o genchar.c &&\
	mv -f $depbase.Tpo $depbase.Po
genchar.c(305): warning #188: enumerated type mixed with another type
  	chars->nctype = NC_STRING;
  	              ^

genchar.c(312): warning #188: enumerated type mixed with another type
  	    chars->nctype = NC_STRING;
  	                  ^

genchar.c(321): warning #188: enumerated type mixed with another type
          chars->nctype = NC_STRING;
                        ^

depbase=`echo cvt.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT cvt.o -MD -MP -MF $depbase.Tpo -c -o cvt.o cvt.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo data.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT data.o -MD -MP -MF $depbase.Tpo -c -o data.o data.c &&\
	mv -f $depbase.Tpo $depbase.Po
data.c(26): warning #188: enumerated type mixed with another type
  issublist(Datasrc* datasrc) {return istype(datasrc,NC_COMPOUND);}
                                                     ^

data.c(30): warning #188: enumerated type mixed with another type
  isstring(Datasrc* datasrc) {return istype(datasrc,NC_STRING);}
                                                    ^

data.c(36): warning #188: enumerated type mixed with another type
  return srcpeek(datasrc) == NULL || istype(datasrc,NC_FILLVALUE);
                                                    ^

data.c(112): warning #188: enumerated type mixed with another type
      con.nctype = NC_COMPOUND;
                 ^

data.c(219): warning #188: enumerated type mixed with another type
      ds->data[ds->index].nctype = NC_COMPOUND;
                                 ^

depbase=`echo debug.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT debug.o -MD -MP -MF $depbase.Tpo -c -o debug.o debug.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo escapes.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT escapes.o -MD -MP -MF $depbase.Tpo -c -o escapes.o escapes.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo genc.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT genc.o -MD -MP -MF $depbase.Tpo -c -o genc.o genc.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo genbin.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT genbin.o -MD -MP -MF $depbase.Tpo -c -o genbin.o genbin.c &&\
	mv -f $depbase.Tpo $depbase.Po
genbin.c(109): warning #188: enumerated type mixed with another type
  			          vsym->typ.basetype->ncid,
  			          ^

genbin.c(116): warning #188: enumerated type mixed with another type
  			          vsym->typ.basetype->ncid,
  			          ^

genbin.c(363): warning #188: enumerated type mixed with another type
                  stat = nc_put_att_schar(grpid,varid,asym->name,typid,len,data);
                                                                 ^

genbin.c(376): warning #188: enumerated type mixed with another type
                  stat = nc_put_att_short(grpid,varid,asym->name,typid,len,data);
                                                                 ^

genbin.c(381): warning #188: enumerated type mixed with another type
                  stat = nc_put_att_int(grpid,varid,asym->name,typid,len,data);
                                                               ^

genbin.c(386): warning #188: enumerated type mixed with another type
                  stat = nc_put_att_float(grpid,varid,asym->name,typid,len,data);
                                                                 ^

genbin.c(391): warning #188: enumerated type mixed with another type
                  stat = nc_put_att_double(grpid,varid,asym->name,typid,len,data);
                                                                  ^

genbin.c(434): warning #188: enumerated type mixed with another type
          stat = nc_put_att(grpid,varid,asym->name,typid,
                                                   ^

depbase=`echo generr.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT generr.o -MD -MP -MF $depbase.Tpo -c -o generr.o generr.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo genlib.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT genlib.o -MD -MP -MF $depbase.Tpo -c -o genlib.o genlib.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo getfill.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT getfill.o -MD -MP -MF $depbase.Tpo -c -o getfill.o getfill.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo odom.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT odom.o -MD -MP -MF $depbase.Tpo -c -o odom.o odom.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo offsets.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT offsets.o -MD -MP -MF $depbase.Tpo -c -o offsets.o offsets.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo semantics.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT semantics.o -MD -MP -MF $depbase.Tpo -c -o semantics.o semantics.c &&\
	mv -f $depbase.Tpo $depbase.Po
semantics.c(81): warning #188: enumerated type mixed with another type
  	    sym = lookup(NC_DIM,refsym);
  	                 ^

semantics.c(86): warning #188: enumerated type mixed with another type
  		sym = lookupingroup(NC_DIM,refsym->name,parent);
  		                    ^

semantics.c(95): warning #188: enumerated type mixed with another type
  	    sym = lookup(NC_TYPE,refsym);
  	                 ^

semantics.c(101): warning #188: enumerated type mixed with another type
  		Symbol* prim = basetypefor(i);
  		                           ^

semantics.c(113): warning #188: enumerated type mixed with another type
  		    sym = lookupingroup(NC_TYPE,refsym->name,parent);
  		                        ^

semantics.c(126): warning #188: enumerated type mixed with another type
  	    sym = lookup(NC_VAR,refsym);
  	                 ^

semantics.c(130): warning #188: enumerated type mixed with another type
  	    sym = lookupingroup(NC_VAR,refsym->name,parent);
  	                        ^

semantics.c(136): warning #188: enumerated type mixed with another type
  	    sym = lookup(NC_GRP,refsym);
  	                 ^

semantics.c(140): warning #188: enumerated type mixed with another type
  	    sym = lookupingroup(NC_GRP,refsym->name,parent);
  	                        ^

depbase=`echo ncgentab.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT ncgentab.o -MD -MP -MF $depbase.Tpo -c -o ncgentab.o ncgentab.c &&\
	mv -f $depbase.Tpo $depbase.Po
ncgen.y(243): warning #188: enumerated type mixed with another type
                (yyvsp[(1) - (1)].sym)->objectclass = NC_TYPE;
                                                    ^

ncgen.y(244): warning #188: enumerated type mixed with another type
                if(dupobjectcheck(NC_TYPE,(yyvsp[(1) - (1)].sym)))
                                  ^

ncgen.y(260): warning #188: enumerated type mixed with another type
                  (yyvsp[(3) - (6)].sym)->objectclass=NC_TYPE;
                                                     ^

ncgen.y(261): warning #188: enumerated type mixed with another type
                  (yyvsp[(3) - (6)].sym)->subclass=NC_ENUM;
                                                  ^

ncgen.y(306): warning #188: enumerated type mixed with another type
              (yyvsp[(1) - (3)].sym)->objectclass=NC_TYPE;
                                                 ^

ncgen.y(307): warning #188: enumerated type mixed with another type
              (yyvsp[(1) - (3)].sym)->subclass=NC_ECONST;
                                              ^

ncgen.y(316): warning #188: enumerated type mixed with another type
                      (yyvsp[(5) - (5)].sym)->objectclass=NC_TYPE;
                                                         ^

ncgen.y(317): warning #188: enumerated type mixed with another type
                      (yyvsp[(5) - (5)].sym)->subclass=NC_OPAQUE;
                                                      ^

ncgen.y(318): warning #188: enumerated type mixed with another type
                      (yyvsp[(5) - (5)].sym)->typ.typecode=NC_OPAQUE;
                                                          ^

ncgen.y(320): warning #188: enumerated type mixed with another type
                      (yyvsp[(5) - (5)].sym)->typ.alignment=nctypealignment(NC_OPAQUE);
                                                                            ^

ncgen.y(328): warning #188: enumerated type mixed with another type
                      (yyvsp[(5) - (5)].sym)->objectclass=NC_TYPE;
                                                         ^

ncgen.y(329): warning #188: enumerated type mixed with another type
                      (yyvsp[(5) - (5)].sym)->subclass=NC_VLEN;
                                                      ^

ncgen.y(331): warning #188: enumerated type mixed with another type
                      (yyvsp[(5) - (5)].sym)->typ.typecode=NC_VLEN;
                                                          ^

ncgen.y(333): warning #188: enumerated type mixed with another type
                      (yyvsp[(5) - (5)].sym)->typ.alignment=nctypealignment(NC_VLEN);
                                                                            ^

ncgen.y(353): warning #188: enumerated type mixed with another type
  	    (yyvsp[(2) - (5)].sym)->objectclass=NC_TYPE;
  	                                       ^

ncgen.y(354): warning #188: enumerated type mixed with another type
              (yyvsp[(2) - (5)].sym)->subclass=NC_COMPOUND;
                                              ^

ncgen.y(356): warning #188: enumerated type mixed with another type
              (yyvsp[(2) - (5)].sym)->typ.typecode=NC_COMPOUND;
                                                  ^

ncgen.y(452): warning #188: enumerated type mixed with another type
                       (yyvsp[(1) - (1)].sym)->objectclass=NC_DIM;
                                                          ^

ncgen.y(453): warning #188: enumerated type mixed with another type
                       if(dupobjectcheck(NC_DIM,(yyvsp[(1) - (1)].sym)))
                                         ^

ncgen.y(481): warning #188: enumerated type mixed with another type
  			sym->objectclass = NC_VAR;
  			                 ^

ncgen.y(482): warning #188: enumerated type mixed with another type
  		        if(dupobjectcheck(NC_VAR,sym)) {
  		                          ^

ncgen.y(525): warning #188: enumerated type mixed with another type
                      (yyvsp[(1) - (2)].sym)->objectclass=NC_VAR;
                                                         ^

ncgen.y(541): warning #188: enumerated type mixed with another type
  		dimsym->objectclass = NC_DIM;
  		                    ^

ncgen.y(584): warning #188: enumerated type mixed with another type
                  (yyvsp[(1) - (2)].sym)->objectclass=NC_TYPE;
                                                     ^

ncgen.y(585): warning #188: enumerated type mixed with another type
                  (yyvsp[(1) - (2)].sym)->subclass=NC_FIELD;
                                                  ^

ncgen.y(608): warning #188: enumerated type mixed with another type
  	     (yyval.sym)->objectclass = NC_DIM;
  	                              ^

ncgen.y(622): warning #188: enumerated type mixed with another type
  	     (yyval.sym)->objectclass = NC_DIM;
  	                              ^

ncgen.y(657): warning #188: enumerated type mixed with another type
  		tvsym->objectclass = NC_VAR;
  		                   ^

ncgen.y(660): warning #188: enumerated type mixed with another type
  		    tvsym->objectclass = NC_TYPE;
  		                       ^

ncgen.y(771): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_INT64);;}
                                      ^

ncgen.y(772): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_UBYTE);;}
                                      ^

ncgen.y(773): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_USHORT);;}
                                      ^

ncgen.y(774): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_UINT);;}
                                      ^

ncgen.y(775): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_UINT64);;}
                                      ^

ncgen.y(778): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_STRING);;}
                                      ^

ncgen.y(779): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_OPAQUE);;}
                                      ^

ncgen.y(781): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_FILLVALUE);;}
                                      ^

ncgen.y(793): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_UINT);;}
                                      ^

ncgen.y(795): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_INT64);;}
                                      ^

ncgen.y(797): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_UINT64);;}
                                      ^

ncgen.y(801): warning #188: enumerated type mixed with another type
      {(yyval.constant)=makeconstdata(NC_STRING);;}
                                      ^

ncgen.l(564): warning #188: enumerated type mixed with another type
  		    sym = lookupingroup(NC_GRP,ident,container);
  		                        ^

ncgen.l(575): warning #188: enumerated type mixed with another type
  		    sym->objectclass = NC_GRP;
  		                     ^

ncgen.y(860): warning #188: enumerated type mixed with another type
          primsymbols[i] = makeprimitivetype(i);
                                             ^

ncgen.y(869): warning #188: enumerated type mixed with another type
      sym->objectclass=NC_TYPE;
                      ^

ncgen.y(870): warning #188: enumerated type mixed with another type
      sym->subclass=NC_PRIM;
                   ^

ncgen.y(922): warning #188: enumerated type mixed with another type
      gsym->objectclass = NC_GRP;
                        ^

ncgen.y(937): warning #188: enumerated type mixed with another type
      gsym->objectclass = NC_GRP;
                        ^

ncgen.y(938): warning #188: enumerated type mixed with another type
      if(dupobjectcheck(NC_GRP,gsym)) {
                        ^

ncgen.y(1020): warning #188: enumerated type mixed with another type
      consttype = NC_ENUM;
                ^

ncgen.y(1021): warning #188: enumerated type mixed with another type
      con.nctype = NC_ECONST;
                 ^

ncgen.y(1024): warning #188: enumerated type mixed with another type
      econst->objectclass = NC_TYPE;
                          ^

ncgen.y(1025): warning #188: enumerated type mixed with another type
      econst->subclass = NC_ECONST;
                       ^

ncgen.y(1230): warning #188: enumerated type mixed with another type
      asym->objectclass = NC_ATT;
                        ^

depbase=`echo dump.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT dump.o -MD -MP -MF $depbase.Tpo -c -o dump.o dump.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo util.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT util.o -MD -MP -MF $depbase.Tpo -c -o util.o util.c &&\
	mv -f $depbase.Tpo $depbase.Po
util.c(519): warning #188: enumerated type mixed with another type
      d.nctype = NC_COMPOUND;
               ^

depbase=`echo bytebuffer.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT bytebuffer.o -MD -MP -MF $depbase.Tpo -c -o bytebuffer.o bytebuffer.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo list.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT list.o -MD -MP -MF $depbase.Tpo -c -o list.o list.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo genf77.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT genf77.o -MD -MP -MF $depbase.Tpo -c -o genf77.o genf77.c &&\
	mv -f $depbase.Tpo $depbase.Po
genf77.c(178): warning #188: enumerated type mixed with another type
  	for(nctype=0;nctype<=NC_DOUBLE;nctype++) {pertypesizes[nctype] = 0;}
  	          ^

genf77.c(822): warning #188: enumerated type mixed with another type
  	        nfstype(typecode),
  	                ^

genf77.c(831): warning #188: enumerated type mixed with another type
  	        nfstype(typecode),
  	                ^

genf77.c(878): warning #188: enumerated type mixed with another type
                                  nfdtype(typecode),
                                          ^

genf77.c(911): warning #188: enumerated type mixed with another type
                  nfstype(typecode),
                          ^

depbase=`echo f77data.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT f77data.o -MD -MP -MF $depbase.Tpo -c -o f77data.o f77data.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo genj.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT genj.o -MD -MP -MF $depbase.Tpo -c -o genj.o genj.c &&\
	mv -f $depbase.Tpo $depbase.Po
genj.c(607): warning #188: enumerated type mixed with another type
  		indented(1),jtypecap(typecode), jtypecap(typecode));
  		                     ^

genj.c(607): warning #188: enumerated type mixed with another type
  		indented(1),jtypecap(typecode), jtypecap(typecode));
  		                                         ^

genj.c(620): warning #188: enumerated type mixed with another type
  		indented(1),jtype(typecode),bbContents(code));
  		                  ^

genj.c(649): warning #188: enumerated type mixed with another type
  			indented(1),jtype(typecode),jtype(typecode));
  			                  ^

genj.c(649): warning #188: enumerated type mixed with another type
  			indented(1),jtype(typecode),jtype(typecode));
  			                                  ^

genj.c(658): warning #188: enumerated type mixed with another type
  		jtypecap(typecode),
  		         ^

genj.c(659): warning #188: enumerated type mixed with another type
  		jtypecap(typecode),
  		         ^

genj.c(670): warning #188: enumerated type mixed with another type
                      indented(2),jtypecap(typecode));
                                           ^

depbase=`echo jdata.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT jdata.o -MD -MP -MF $depbase.Tpo -c -o jdata.o jdata.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo nciter.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT nciter.o -MD -MP -MF $depbase.Tpo -c -o nciter.o nciter.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo ConvertUTF.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran       -I.. -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT ConvertUTF.o -MD -MP -MF $depbase.Tpo -c -o ConvertUTF.o ConvertUTF.c &&\
	mv -f $depbase.Tpo $depbase.Po
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2       -o ncgen main.o cdata.o bindata.o genchar.o cvt.o data.o debug.o escapes.o genc.o genbin.o generr.o genlib.o getfill.o odom.o offsets.o semantics.o ncgentab.o dump.o util.o bytebuffer.o list.o genf77.o f77data.o genj.o jdata.o nciter.o ConvertUTF.o ../libsrc/libnetcdf.la -lm 
libtool: link: /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -g -O2 -o ncgen main.o cdata.o bindata.o genchar.o cvt.o data.o debug.o escapes.o genc.o genbin.o generr.o genlib.o getfill.o odom.o offsets.o semantics.o ncgentab.o dump.o util.o bytebuffer.o list.o genf77.o f77data.o genj.o jdata.o nciter.o ConvertUTF.o  ../libsrc/.libs/libnetcdf.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f90.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f77.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-rte.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-pal.a -ldl -lnsl -lutil -lm -pthread
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen'
Making all in ncdump
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
make  all-recursive
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
Making all in cdl4
make[7]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/cdl4'
make[7]: Nothing to be done for `all'.
make[7]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/cdl4'
Making all in expected4
make[7]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/expected4'
make[7]: Nothing to be done for `all'.
make[7]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/expected4'
make[7]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
depbase=`echo ncdump.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT ncdump.o -MD -MP -MF $depbase.Tpo -c -o ncdump.o ncdump.c &&\
	mv -f $depbase.Tpo $depbase.Po
ncdump.c(1264): warning #188: enumerated type mixed with another type
      return ctype;
             ^

depbase=`echo vardata.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT vardata.o -MD -MP -MF $depbase.Tpo -c -o vardata.o vardata.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo dumplib.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT dumplib.o -MD -MP -MF $depbase.Tpo -c -o dumplib.o dumplib.c &&\
	mv -f $depbase.Tpo $depbase.Po
dumplib.c(1609): warning #188: enumerated type mixed with another type
  	tp->tid = types[i];
  	        ^

dumplib.c(1616): warning #188: enumerated type mixed with another type
  	tp->fmt = get_default_fmt(types[i]);
  	                          ^

depbase=`echo indent.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT indent.o -MD -MP -MF $depbase.Tpo -c -o indent.o indent.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo nctime.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT nctime.o -MD -MP -MF $depbase.Tpo -c -o nctime.o nctime.c &&\
	mv -f $depbase.Tpo $depbase.Po
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2        -o ncdump ncdump.o vardata.o dumplib.o indent.o nctime.o -lm     ../libsrc/libnetcdf.la 
libtool: link: /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -g -O2 -o ncdump ncdump.o vardata.o dumplib.o indent.o nctime.o  -lm ../libsrc/.libs/libnetcdf.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f90.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f77.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-rte.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-pal.a -ldl -lnsl -lutil -pthread
depbase=`echo nccopy.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT nccopy.o -MD -MP -MF $depbase.Tpo -c -o nccopy.o nccopy.c &&\
	mv -f $depbase.Tpo $depbase.Po
depbase=`echo nciter.o | sed 's|[^/]*$|.deps/&|;s|\.o$||'`;\
	/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -DHAVE_CONFIG_H -I. -I.. -I../fortran  -I../nc_test       -I../libsrc -I../libsrc  -DNDEBUG -DpgiFortran -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -g -O2 -MT nciter.o -MD -MP -MF $depbase.Tpo -c -o nciter.o nciter.c &&\
	mv -f $depbase.Tpo $depbase.Po
/bin/sh ../libtool --tag=CC   --mode=link /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc  -g -O2        -o nccopy nccopy.o nciter.o -lm     ../libsrc/libnetcdf.la 
libtool: link: /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -g -O2 -o nccopy nccopy.o nciter.o  -lm ../libsrc/.libs/libnetcdf.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f90.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi_f77.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libmpi.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-rte.a /home/temok/opt/openmpi-1.4.5/build-ABINITForum/lib/libopen-pal.a -ldl -lnsl -lutil -pthread
make[7]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
Making all in nf_test
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nf_test'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nf_test'
Making all in nc_test
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nc_test'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nc_test'
Making all in man4
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/man4'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/man4'
Making all in examples
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
Making all in C
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/C'
make[6]: Nothing to be done for `all'.
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/C'
Making all in CDL
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/CDL'
make[6]: Nothing to be done for `all'.
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/CDL'
Making all in F77
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F77'
make[6]: Nothing to be done for `all'.
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F77'
Making all in F90
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make  all-am
make[7]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[7]: Nothing to be done for `all-am'.
make[7]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
make[6]: Nothing to be done for `all-am'.
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make[5]: Nothing to be done for `all-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
cd sources/netcdf-4.1.1 && make install 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
Making install in f90
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
make  install-am
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3"
 /usr/bin/install -c -m 644 'netcdf_f90.3' '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3/netcdf_f90-abinit.3'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
 /usr/bin/install -c -m 644 typesizes.mod netcdf.mod '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/f90'
Making install in fortran
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
make  install-am
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib"
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3"
 /usr/bin/install -c -m 644 'netcdf_f77.3' '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3/netcdf_f77-abinit.3'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
 /usr/bin/install -c -m 644 netcdf.inc '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/fortran'
Making install in libsrc
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libsrc'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libsrc'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib"
 /bin/sh ../libtool   --mode=install /usr/bin/install -c   libnetcdf.la '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib'
libtool: install: /usr/bin/install -c .libs/libnetcdf.lai /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libnetcdf.la
libtool: install: /usr/bin/install -c .libs/libnetcdf.a /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libnetcdf.a
libtool: install: chmod 644 /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libnetcdf.a
libtool: install: ranlib /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/libnetcdf.a
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
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
 /usr/bin/install -c -m 644 netcdf.h '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3"
 /usr/bin/install -c -m 644 'netcdf.3' '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man3/netcdf-abinit.3'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libsrc'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/libsrc'
Making install in nctest
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nctest'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nctest'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nctest'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nctest'
Making install in ncgen3
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen3'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen3'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin"
  /bin/sh ../libtool   --mode=install /usr/bin/install -c ncgen3 '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./ncgen3-abinit'
libtool: install: /usr/bin/install -c ncgen3 /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./ncgen3-abinit
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1"
 /usr/bin/install -c -m 644 'ncgen3.1' '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1/ncgen3-abinit.1'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen3'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen3'
Making install in ncgen
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin"
  /bin/sh ../libtool   --mode=install /usr/bin/install -c ncgen '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./ncgen-abinit'
libtool: install: /usr/bin/install -c ncgen /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./ncgen-abinit
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1"
 /usr/bin/install -c -m 644 'ncgen.1' '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1/ncgen-abinit.1'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncgen'
Making install in ncdump
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
make  install-recursive
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
Making install in cdl4
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/cdl4'
make[7]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/cdl4'
make[7]: Nothing to be done for `install-exec-am'.
make[7]: Nothing to be done for `install-data-am'.
make[7]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/cdl4'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/cdl4'
Making install in expected4
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/expected4'
make[7]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/expected4'
make[7]: Nothing to be done for `install-exec-am'.
make[7]: Nothing to be done for `install-data-am'.
make[7]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/expected4'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump/expected4'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
make[7]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin"
  /bin/sh ../libtool   --mode=install /usr/bin/install -c ncdump '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./ncdump-abinit'
libtool: install: /usr/bin/install -c ncdump /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./ncdump-abinit
  /bin/sh ../libtool   --mode=install /usr/bin/install -c nccopy '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./nccopy-abinit'
libtool: install: /usr/bin/install -c nccopy /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./nccopy-abinit
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1"
 /usr/bin/install -c -m 644 'ncdump.1' '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1/ncdump-abinit.1'
 /usr/bin/install -c -m 644 'nccopy.1' '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/man/man1/nccopy-abinit.1'
make[7]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/ncdump'
Making install in nf_test
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nf_test'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nf_test'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nf_test'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nf_test'
Making install in nc_test
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nc_test'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nc_test'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nc_test'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/nc_test'
Making install in man4
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/man4'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/man4'
make[5]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/netcdf" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/netcdf"
 /usr/bin/install -c -m 644 netcdf.pdf netcdf-install.pdf netcdf-c.pdf netcdf-f77.pdf netcdf-f90.pdf netcdf-cxx.pdf netcdf-tutorial.pdf ncdump-man-1.html ncgen-man-1.html netcdf_f77-man.html netcdf-man-3.html netcdf_f90-man.html ncgen3-man-1.html netcdf.txt netcdf-install.txt netcdf-c.txt netcdf-f77.txt netcdf-f90.txt netcdf-cxx.txt netcdf-tutorial.txt netcdf.ps netcdf-install.ps netcdf-c.ps netcdf-f77.ps netcdf-f90.ps netcdf-cxx.ps netcdf-tutorial.ps netcdf.info netcdf-install.info netcdf-c.info netcdf-f77.info netcdf-f90.info netcdf-cxx.info netcdf-tutorial.info netcdf.html netcdf-install.html netcdf-c.html netcdf-f77.html netcdf-f90.html netcdf-cxx.html '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/netcdf'
 /usr/bin/install -c -m 644 netcdf-tutorial.html '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/netcdf'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/info" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/info"
 /usr/bin/install -c -m 644 ./netcdf.info ./netcdf-install.info ./netcdf-c.info ./netcdf-c.info-1 ./netcdf-c.info-2 ./netcdf-f77.info ./netcdf-f77.info-1 ./netcdf-f77.info-2 ./netcdf-f90.info ./netcdf-cxx.info ./netcdf-tutorial.info '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/info'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/man4'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/man4'
Making install in examples
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
Making install in C
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/C'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/C'
make[6]: Nothing to be done for `install-exec-am'.
make[6]: Nothing to be done for `install-data-am'.
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/C'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/C'
Making install in CDL
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/CDL'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/CDL'
make[6]: Nothing to be done for `install-exec-am'.
make[6]: Nothing to be done for `install-data-am'.
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/CDL'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/CDL'
Making install in F77
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F77'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F77'
make[6]: Nothing to be done for `install-exec-am'.
make[6]: Nothing to be done for `install-data-am'.
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F77'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F77'
Making install in F90
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make  install-am
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[7]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[7]: Nothing to be done for `install-exec-am'.
make[7]: Nothing to be done for `install-data-am'.
make[7]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples/F90'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
make[6]: Nothing to be done for `install-exec-am'.
make[6]: Nothing to be done for `install-data-am'.
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1/examples'
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin"
 /usr/bin/install -c nc-config '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./nc-config-abinit'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/pkgconfig" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/pkgconfig"
 /usr/bin/install -c -m 644 netcdf.pc '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib/pkgconfig'
make  install-data-hook
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'

+-------------------------------------------------------------+
| Congratulations! You have successfully installed netCDF!    |
|                                                             |
| You can use script "nc-config" to find out the relevant     |
| compiler options to build your application. Enter           |
|                                                             |
|     nc-config --help                                        |
|                                                             |
| for additional information.                                 |
|                                                             |
| CAUTION:                                                    |
|                                                             |
| If you have not already run "make check", then we strongly  |
| recommend you do so. It does not take very long.            |
|                                                             |
| Before using netCDF to store important data, test your      |
| build with "make check".                                    |
|                                                             |
| NetCDF is tested nightly on many platforms at Unidata       |
| but your platform is probably different in some ways.       |
|                                                             |
| If any tests fail, please see the netCDF web site:          |
| http://www.unidata.ucar.edu/software/netcdf/                |
|                                                             |
| NetCDF is developed and maintained at the Unidata Program   |
| Center. Unidata provides a broad array of data and software |
| tools for use in geoscience education and research.         |
| http://www.unidata.ucar.edu                                 |
+-------------------------------------------------------------+

make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/netcdf-4.1.1'
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
Checking build of netcdf fallback
test -e stamps/netcdf-install-stamp
make etsf_io
make[2]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
cd sources && \
	  gzip -cd /home/temok/.abinit/tarballs/etsf_io-1.0.4.tar.gz | tar xf -
No patch to apply
cd sources/etsf_io-1.0.4 && \
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
	  LIBS="-L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf " \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib" \
	  /bin/sh ./configure \
	    --prefix="/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports" \
	    --program-suffix="-abinit" \
	    --with-netcdf-incs="-I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" --with-netcdf-libs="-L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf" --with-moduledir="/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking whether the Fortran compiler works... yes
checking for Fortran compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU Fortran compiler... no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... yes
checking for Fortran flag to compile .f90 files... none
checking whether we are using the GNU Fortran compiler... (cached) no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... (cached) yes
checking which type of Fortran compiler we have... intel UNKNOWN
checking whether the Fortran compiler accepts exit()... yes
checking whether the Fortran compiler accepts flush()... no
checking for module extension for compiler 'intel'... mod
checking for ranlib... ranlib
checking for ar... ar
checking for NetCDF includes... -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include
checking for NetCDF libraries... -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf
checking for NetCDF Fortran flags... 
checking for NetCDF... yes
configure: creating ./config.status
config.status: creating Makefile
config.status: creating src/low_level/Makefile
config.status: creating src/group_level/Makefile
config.status: creating src/tutorials/Makefile
config.status: creating src/utils/Makefile
config.status: creating tests/low_level/Makefile
config.status: creating tests/group_level/Makefile
config.status: creating tests/utils/Makefile
config.status: creating doc/www/Makefile
config.status: creating doc/www/low_level/Makefile
config.status: creating doc/www/group_level/Makefile
config.status: creating doc/www/utils/Makefile
config.status: creating doc/www/tutorials/Makefile

Basics:
  Prefix:                 /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports
  Fortran90 compiler:     /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90
  Fortran90 flags:        -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include 
  Linker flags:            
  Linked libraries:       -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf 
  Installed module dir:   /home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include
  Installed lib dir:      ${exec_prefix}/lib
  Installed doc dir:      ${datarootdir}/doc/${PACKAGE_TARNAME}

cd sources/etsf_io-1.0.4 && make 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
Making all in src/low_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/low_level'
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I. -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -c -o etsf_io_low_level.o  etsf_io_low_level.f90
rm -f libetsf_io_low_level.a
ar cru libetsf_io_low_level.a etsf_io_low_level.o 
ranlib libetsf_io_low_level.a
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/low_level'
Making all in src/group_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/group_level'
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -I../../src/low_level -I. -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -c -o etsf_io.o  etsf_io.f90
rm -f libetsf_io.a
ar cru libetsf_io.a etsf_io.o ../../src/low_level/etsf_io_low_level.o
ranlib libetsf_io.a
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/group_level'
Making all in src/utils
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/utils'
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I../../src/low_level -I../../src/group_level -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -c -o etsf_io_file.o  etsf_io_file.f90
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I../../src/low_level -I../../src/group_level -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -c -o etsf_io_tools.o  etsf_io_tools.f90
rm -f libetsf_io_utils.a
ar cru libetsf_io_utils.a etsf_io_file.o etsf_io_tools.o 
ranlib libetsf_io_utils.a
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I../../src/low_level -I../../src/group_level -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -c -o etsf_io.o  etsf_io.f90
/home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I../../src/low_level -I../../src/group_level -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include  -L../../src/group_level -L.  -o etsf_io etsf_io.o -letsf_io_utils -letsf_io -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf 
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/utils'
Making all in tests/low_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
make[4]: Nothing to be done for `all'.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
Making all in tests/group_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
make[4]: Nothing to be done for `all'.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
Making all in tests/utils
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/utils'
make[4]: Nothing to be done for `all'.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/utils'
Making all in doc/www
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
Making all in low_level
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
Making all in group_level
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
Making all in tutorials
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
Making all in utils
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[5]: Nothing to be done for `all'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[5]: Nothing to be done for `all-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
make[4]: Nothing to be done for `all-am'.
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
cd sources/etsf_io-1.0.4 && make install 
make[3]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
Making install in src/low_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/low_level'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/low_level'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib"
 /usr/bin/install -c -m 644  libetsf_io_low_level.a '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib'
 ( cd '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib' && ranlib libetsf_io_low_level.a )
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
 /usr/bin/install -c -m 644 etsf_io_low_level.mod '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/low_level'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/low_level'
Making install in src/group_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/group_level'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/group_level'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib"
 /usr/bin/install -c -m 644  libetsf_io.a '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib'
 ( cd '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib' && ranlib libetsf_io.a )
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
 /usr/bin/install -c -m 644 etsf_io.mod '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/group_level'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/group_level'
Making install in src/utils
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/utils'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/utils'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin"
  /usr/bin/install -c etsf_io '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/bin/./etsf_io-abinit'
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib"
 /usr/bin/install -c -m 644  libetsf_io_utils.a '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib'
 ( cd '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib' && ranlib libetsf_io_utils.a )
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include"
 /usr/bin/install -c -m 644 etsf_io_file.mod etsf_io_tools.mod '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/utils'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/src/utils'
Making install in tests/low_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/low_level'
Making install in tests/group_level
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/group_level'
Making install in tests/utils
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/utils'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/utils'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/utils'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/tests/utils'
Making install in doc/www
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
Making install in low_level
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/low_level" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/low_level"
 /usr/bin/install -c -m 644 etsf_io_low_level_f90.html public_variables_f90.html read_routines_f90.html write_routines_f90.html '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/low_level'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/low_level'
Making install in group_level
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/group_level" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/group_level"
 /usr/bin/install -c -m 644 etsf_io_dims_def_f90.html etsf_io_dims_get_f90.html etsf_io_dims_merge_f90.html etsf_io_dims_trace_f90.html etsf_io_geometry_def_f90.html etsf_io_electrons_def_f90.html etsf_io_kpoints_def_f90.html etsf_io_basisdata_def_f90.html etsf_io_gwdata_def_f90.html etsf_io_dielectric_def_f90.html etsf_io_main_def_f90.html etsf_io_geometry_get_f90.html etsf_io_electrons_get_f90.html etsf_io_kpoints_get_f90.html etsf_io_basisdata_get_f90.html etsf_io_gwdata_get_f90.html etsf_io_dielectric_get_f90.html etsf_io_main_get_f90.html etsf_io_geometry_put_f90.html etsf_io_electrons_put_f90.html etsf_io_kpoints_put_f90.html etsf_io_basisdata_put_f90.html etsf_io_gwdata_put_f90.html etsf_io_dielectric_put_f90.html etsf_io_main_put_f90.html etsf_io_geometry_copy_f90.html etsf_io_electrons_copy_f90.html etsf_io_kpoints_copy_f90.html etsf_io_basisdata_copy_f90.html etsf_io_gwdata_copy_f90.html etsf_io_dielectric_copy_f90.html etsf_io_main_copy_f90.html etsf_io_split_init_f90.html etsf_io_split_allocate_f90.html etsf_io_split_free_f90.html etsf_io_split_def_f90.html etsf_io_split_get_f90.html etsf_io_split_put_f90.html etsf_io_split_copy_f90.html etsf_io_split_merge_f90.html '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/group_level'
 /usr/bin/install -c -m 644 etsf_io_vars_free_f90.html etsf_io_data_init_f90.html etsf_io_data_read_f90.html etsf_io_data_write_f90.html etsf_io_data_contents_f90.html etsf_io_data_get_f90.html etsf_io_data_copy_f90.html etsf_io_f90.html '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/group_level'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/group_level'
Making install in tutorials
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/tutorials" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/tutorials"
 /usr/bin/install -c -m 644 convert_to_xyz_f90.html create_a_crystal_den_file_f90.html index.html mix_ETSF_and_non_ETSF_f90.html MPI_output_of_a_density_f90.html read_a_file_f90.html README_f90.html read_write_sub_access_f90.html '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/tutorials'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/tutorials'
Making install in utils
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/utils" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/utils"
 /usr/bin/install -c -m 644 binary.html etsf_io_file_check_dielectric_function_data_f90.html etsf_io_file_check_wavefunctions_data_f90.html etsf_io_file_check_scalar_field_data_f90.html etsf_io_file_check_crystallographic_data_f90.html etsf_io_file_contents_f90.html etsf_io_file_f90.html etsf_io_file_public_f90.html etsf_io_tools_f90.html '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io/utils'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www/utils'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[6]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[6]: Nothing to be done for `install-exec-am'.
test -z "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io" || /bin/mkdir -p "/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io"
 /usr/bin/install -c -m 644 index.html masterindex.html robo_definitions.html robodoc.css robo_functions.html robo_methods.html robo_modules.html robo_sourcefiles.html robo_strutures.html robo_sub_cat.html robo_tuto_cat.html toc_index.html '/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/share/doc/etsf_io'
make[6]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4/doc/www'
make[4]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
make[5]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
make[5]: Nothing to be done for `install-exec-am'.
make[5]: Nothing to be done for `install-data-am'.
make[5]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
make[4]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
make[3]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/sources/etsf_io-1.0.4'
make[2]: Leaving directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
Checking build of etsf_io fallback
test -e stamps/etsf_io-install-stamp
make atompaw
make[2]: Entering directory `/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks'
cd sources && \
	  gzip -cd /home/temok/.abinit/tarballs/atompaw-3.0.1.3.tar.gz | tar xf -
patch -d sources/atompaw-3.0.1.3 -p1 <../../fallbacks/patches/atompaw-3.0.1.3-0001.patch
patching file src/aeatom.f90
patching file src/atompaw_prog.f90
cd sources/atompaw-3.0.1.3 && \
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
	  LIBS="-L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc " \
	  AR="ar" \
	  ARFLAGS="rc" \
	  RANLIB="ranlib" \
	  /bin/sh ./configure \
	    --prefix="/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports" \
	    --program-suffix="-abinit" \
	    --with-linalg-libs="-L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/mkl/lib/intel64 -Wl,--start-group  -lmkl_intel_lp64 -lmkl_sequential -lmkl_core -Wl,--end-group" --enable-libxc --with-libxc-incs="-I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include" --with-libxc-libs="-L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc" --enable-static --disable-shared
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
checking for gcc... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables... 
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc accepts -g... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to accept ISO C89... none needed
checking dependency style of /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... none
checking for a sed that does not truncate output... /bin/sed
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for fgrep... /bin/grep -F
checking for ld used by /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc... /usr/bin/ld
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
checking command to parse /usr/bin/nm -B output from /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc object... ok
checking how to run the C preprocessor... /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc -E
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
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -fno-rtti -fno-exceptions... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc option to produce PIC... -fPIC -DPIC
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc PIC flag -fPIC -DPIC works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc static flag -static works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpicc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking whether we are using the GNU Fortran compiler... no
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 option to produce PIC... 
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 static flag  works... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... yes
checking if /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 supports -c -o file.o... (cached) yes
checking whether the /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
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
checking whether /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90 accepts -g... (cached) yes
checking which type of Fortran compiler we have... intel 0.0
checking fortran 90 modules extension... mod
checking for Fortran flag to compile .F90 files... none
configure: determining Fortran module case
checking whether Fortran modules are upper-case... no
checking whether the LibXC library works... yes
configure: === libXC library OK for use
configure: === generating the src/libxc_names.in file
checking whether linear algebra libraries work... yes
configure: FC       = /home/temok/opt/openmpi-1.4.5/build-ABINITForum/bin/mpif90
configure: CPPFLAGS =  -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include
configure: FCFLAGS  = -free -g -extend-source -vec-report0 -noaltparam -nofpscomp  -O2 -g -O2 -I/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/include
configure: LDFLAGS  =  
configure: LIBS     = -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc -L/home/temok/opt/intel/composer_xe_2011_sp1.9.293/mkl/lib/intel64 -Wl,--start-group  -lmkl_intel_lp64 -lmkl_sequential -lmkl_core -Wl,--end-group -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lnetcdf -L/home/temok/opt/abinit-6.12.2/build-parallel-ABINITForum/fallbacks/exports/lib -lxc 
configure: creating ./config.status
config.status: creating Makefile
config.status: creating src/Makefile
config.status: creating src/pkginfo.f90
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing libtool commands
