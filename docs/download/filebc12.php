This file contains any messages produced by compilers while
running configure, to aid debugging if configure makes a mistake.

It was created by AtomPAW configure 4.0.0.12, which was
generated by GNU Autoconf 2.69.  Invocation command line was

  $ ./configure 

## --------- ##
## Platform. ##
## --------- ##

hostname = Univac
uname -m = x86_64
uname -r = 3.13.0-24-generic
uname -s = Linux
uname -v = #47-Ubuntu SMP Fri May 2 23:30:00 UTC 2014

/usr/bin/uname -p = unknown
/bin/uname -X     = unknown

/bin/arch              = unknown
/usr/bin/arch -k       = unknown
/usr/convex/getsysinfo = unknown
/usr/bin/hostinfo      = unknown
/bin/machine           = unknown
/usr/bin/oslevel       = unknown
/bin/universe          = unknown

PATH: /usr/local/sbin
PATH: /usr/local/bin
PATH: /usr/sbin
PATH: /usr/bin
PATH: /sbin
PATH: /bin
PATH: /usr/games
PATH: /usr/local/games


## ----------- ##
## Core tests. ##
## ----------- ##

configure:2279: regenerating the VERSION file
configure:2329: checking build system type
configure:2343: result: x86_64-unknown-linux-gnu
configure:2363: checking host system type
configure:2376: result: x86_64-unknown-linux-gnu
configure:2396: checking target system type
configure:2409: result: x86_64-unknown-linux-gnu
configure:2451: checking for a BSD-compatible install
configure:2519: result: /usr/bin/install -c
configure:2530: checking whether build environment is sane
configure:2585: result: yes
configure:2736: checking for a thread-safe mkdir -p
configure:2775: result: /bin/mkdir -p
configure:2782: checking for gawk
configure:2798: found /usr/bin/gawk
configure:2809: result: gawk
configure:2820: checking whether make sets $(MAKE)
configure:2842: result: yes
configure:2992: setting linear algebra flavor to 'netlib'
configure:2999: checking whether make sets $(MAKE)
configure:3021: result: yes
configure:3031: checking whether ln -s works
configure:3035: result: yes
configure:3042: checking for a sed that does not truncate output
configure:3106: result: /bin/sed
configure:3115: checking for gawk
configure:3142: result: gawk
configure:3153: checking for grep that handles long lines and -e
configure:3211: result: /bin/grep
configure:3218: checking for egrep
configure:3280: result: /bin/grep -E
configure:3337: checking for dvipdf
configure:3353: found /usr/bin/dvipdf
configure:3364: result: dvipdf
configure:3379: checking for latex
configure:3395: found /usr/bin/latex
configure:3406: result: latex
configure:3421: checking for pdflatex
configure:3437: found /usr/bin/pdflatex
configure:3448: result: pdflatex
configure:3463: checking for perl
configure:3479: found /usr/bin/perl
configure:3490: result: perl
configure:3610: checking for gfortran
configure:3626: found /usr/bin/gfortran
configure:3637: result: gfortran
configure:3663: checking for Fortran compiler version
configure:3672: gfortran --version >&5
GNU Fortran (Ubuntu 4.8.4-2ubuntu1~14.04) 4.8.4
Copyright (C) 2013 Free Software Foundation, Inc.

GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
You may redistribute copies of GNU Fortran
under the terms of the GNU General Public License.
For more information about these matters, see the file named COPYING

configure:3683: $? = 0
configure:3672: gfortran -v >&5
Using built-in specs.
COLLECT_GCC=gfortran
COLLECT_LTO_WRAPPER=/usr/lib/gcc/x86_64-linux-gnu/4.8/lto-wrapper
Target: x86_64-linux-gnu
Configured with: ../src/configure -v --with-pkgversion='Ubuntu 4.8.4-2ubuntu1~14.04' --with-bugurl=file:///usr/share/doc/gcc-4.8/README.Bugs --enable-languages=c,c++,java,go,d,fortran,objc,obj-c++ --prefix=/usr --program-suffix=-4.8 --enable-shared --enable-linker-build-id --libexecdir=/usr/lib --without-included-gettext --enable-threads=posix --with-gxx-include-dir=/usr/include/c++/4.8 --libdir=/usr/lib --enable-nls --with-sysroot=/ --enable-clocale=gnu --enable-libstdcxx-debug --enable-libstdcxx-time=yes --enable-gnu-unique-object --disable-libmudflap --enable-plugin --with-system-zlib --disable-browser-plugin --enable-java-awt=gtk --enable-gtk-cairo --with-java-home=/usr/lib/jvm/java-1.5.0-gcj-4.8-amd64/jre --enable-java-home --with-jvm-root-dir=/usr/lib/jvm/java-1.5.0-gcj-4.8-amd64 --with-jvm-jar-dir=/usr/lib/jvm-exports/java-1.5.0-gcj-4.8-amd64 --with-arch-directory=amd64 --with-ecj-jar=/usr/share/java/eclipse-ecj.jar --enable-objc-gc --enable-multiarch --disable-werror --with-arch-32=i686 --with-abi=m64 --with-multilib-list=m32,m64,mx32 --with-tune=generic --enable-checking=release --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
Thread model: posix
gcc version 4.8.4 (Ubuntu 4.8.4-2ubuntu1~14.04) 
configure:3683: $? = 0
configure:3672: gfortran -V >&5
gfortran: error: unrecognized command line option '-V'
gfortran: fatal error: no input files
compilation terminated.
configure:3683: $? = 4
configure:3672: gfortran -qversion >&5
gfortran: error: unrecognized command line option '-qversion'
gfortran: fatal error: no input files
compilation terminated.
configure:3683: $? = 4
configure:3698: checking whether the Fortran compiler works
configure:3720: gfortran    conftest.f  >&5
configure:3724: $? = 0
configure:3772: result: yes
configure:3775: checking for Fortran compiler default output file name
configure:3777: result: a.out
configure:3783: checking for suffix of executables
configure:3790: gfortran -o conftest    conftest.f  >&5
configure:3794: $? = 0
configure:3816: result: 
configure:3832: checking whether we are cross compiling
configure:3840: gfortran -o conftest    conftest.f  >&5
configure:3844: $? = 0
configure:3851: ./conftest
configure:3855: $? = 0
configure:3870: result: no
configure:3875: checking for suffix of object files
configure:3891: gfortran -c   conftest.f >&5
configure:3895: $? = 0
configure:3916: result: o
configure:3924: checking whether we are using the GNU Fortran compiler
configure:3937: gfortran -c   conftest.F >&5
configure:3937: $? = 0
configure:3946: result: yes
configure:3952: checking whether gfortran accepts -g
configure:3963: gfortran -c -g  conftest.f >&5
configure:3963: $? = 0
configure:3971: result: yes
configure:4021: checking which type of Fortran compiler we have
configure:4381: result: gnu 4.8
configure:4393: checking fortran 90 modules extension
configure:4420: gfortran -c -g -O2  conftest.f >&5
configure:4420: $? = 0
configure:4443: result: mod
configure:4458: checking for Fortran flag to compile .F90 files
configure:4478: gfortran -c -g -O2  conftest.F90 >&5
configure:4478: $? = 0
configure:4487: result: none
configure:4523: determining Fortran module case
configure:4537: gfortran -c -g -O2  conftest.F90 >&5
configure:4537: $? = 0
configure:4561: checking whether Fortran modules are upper-case
configure:4563: result: no
configure:4675: checking whether the Fortran compiler accepts flush()
configure:4690: gfortran -o conftest -g -O2   conftest.F90  >&5
configure:4690: $? = 0
configure:4708: result: yes
configure:4714: checking whether the Fortran compiler accepts flush_()
configure:4729: gfortran -o conftest -g -O2   conftest.F90  >&5
/tmp/ccBct0Q5.o: In function `MAIN__':
/home/univac/Abinit/atompaw-4.0.0.12/conftest.F90:3: undefined reference to `flush__'
collect2: error: ld returned 1 exit status
configure:4729: $? = 1
configure: failed program was:
|       program main
| 
|             call flush_(1)
| 
|       end
configure:4747: result: no
configure:4805: checking how to print strings
configure:4832: result: printf
configure:4865: checking for style of include used by make
configure:4893: result: GNU
configure:4964: checking for gcc
configure:4980: found /usr/bin/gcc
configure:4991: result: gcc
configure:5220: checking for C compiler version
configure:5229: gcc --version >&5
gcc (Ubuntu 4.8.4-2ubuntu1~14.04) 4.8.4
Copyright (C) 2013 Free Software Foundation, Inc.
This is free software; see the source for copying conditions.  There is NO
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

configure:5240: $? = 0
configure:5229: gcc -v >&5
Using built-in specs.
COLLECT_GCC=gcc
COLLECT_LTO_WRAPPER=/usr/lib/gcc/x86_64-linux-gnu/4.8/lto-wrapper
Target: x86_64-linux-gnu
Configured with: ../src/configure -v --with-pkgversion='Ubuntu 4.8.4-2ubuntu1~14.04' --with-bugurl=file:///usr/share/doc/gcc-4.8/README.Bugs --enable-languages=c,c++,java,go,d,fortran,objc,obj-c++ --prefix=/usr --program-suffix=-4.8 --enable-shared --enable-linker-build-id --libexecdir=/usr/lib --without-included-gettext --enable-threads=posix --with-gxx-include-dir=/usr/include/c++/4.8 --libdir=/usr/lib --enable-nls --with-sysroot=/ --enable-clocale=gnu --enable-libstdcxx-debug --enable-libstdcxx-time=yes --enable-gnu-unique-object --disable-libmudflap --enable-plugin --with-system-zlib --disable-browser-plugin --enable-java-awt=gtk --enable-gtk-cairo --with-java-home=/usr/lib/jvm/java-1.5.0-gcj-4.8-amd64/jre --enable-java-home --with-jvm-root-dir=/usr/lib/jvm/java-1.5.0-gcj-4.8-amd64 --with-jvm-jar-dir=/usr/lib/jvm-exports/java-1.5.0-gcj-4.8-amd64 --with-arch-directory=amd64 --with-ecj-jar=/usr/share/java/eclipse-ecj.jar --enable-objc-gc --enable-multiarch --disable-werror --with-arch-32=i686 --with-abi=m64 --with-multilib-list=m32,m64,mx32 --with-tune=generic --enable-checking=release --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
Thread model: posix
gcc version 4.8.4 (Ubuntu 4.8.4-2ubuntu1~14.04) 
configure:5240: $? = 0
configure:5229: gcc -V >&5
gcc: error: unrecognized command line option '-V'
gcc: fatal error: no input files
compilation terminated.
configure:5240: $? = 4
configure:5229: gcc -qversion >&5
gcc: error: unrecognized command line option '-qversion'
gcc: fatal error: no input files
compilation terminated.
configure:5240: $? = 4
configure:5244: checking whether we are using the GNU C compiler
configure:5263: gcc -c   conftest.c >&5
configure:5263: $? = 0
configure:5272: result: yes
configure:5281: checking whether gcc accepts -g
configure:5301: gcc -c -g  conftest.c >&5
configure:5301: $? = 0
configure:5342: result: yes
configure:5359: checking for gcc option to accept ISO C89
configure:5422: gcc  -c -g -O2  conftest.c >&5
configure:5422: $? = 0
configure:5435: result: none needed
configure:5457: checking dependency style of gcc
configure:5568: result: none
configure:5583: checking for a sed that does not truncate output
configure:5647: result: /bin/sed
configure:5665: checking for fgrep
configure:5727: result: /bin/grep -F
configure:5762: checking for ld used by gcc
configure:5829: result: /usr/bin/ld
configure:5836: checking if the linker (/usr/bin/ld) is GNU ld
configure:5851: result: yes
configure:5863: checking for BSD- or MS-compatible name lister (nm)
configure:5912: result: /usr/bin/nm -B
configure:6042: checking the name lister (/usr/bin/nm -B) interface
configure:6049: gcc -c -g -O2  conftest.c >&5
configure:6052: /usr/bin/nm -B "conftest.o"
configure:6055: output
0000000000000000 B some_variable
configure:6062: result: BSD nm
configure:6066: checking the maximum length of command line arguments
configure:6196: result: 1572864
configure:6213: checking whether the shell understands some XSI constructs
configure:6223: result: yes
configure:6227: checking whether the shell understands "+="
configure:6233: result: yes
configure:6268: checking how to convert x86_64-unknown-linux-gnu file names to x86_64-unknown-linux-gnu format
configure:6308: result: func_convert_file_noop
configure:6315: checking how to convert x86_64-unknown-linux-gnu file names to toolchain format
configure:6335: result: func_convert_file_noop
configure:6342: checking for /usr/bin/ld option to reload object files
configure:6349: result: -r
configure:6423: checking for objdump
configure:6439: found /usr/bin/objdump
configure:6450: result: objdump
configure:6482: checking how to recognize dependent libraries
configure:6684: result: pass_all
configure:6769: checking for dlltool
configure:6799: result: no
configure:6829: checking how to associate runtime and link libraries
configure:6856: result: printf %s\n
configure:6917: checking for ar
configure:6933: found /usr/bin/ar
configure:6944: result: ar
configure:6981: checking for archiver @FILE support
configure:6998: gcc -c -g -O2  conftest.c >&5
configure:6998: $? = 0
configure:7001: ar cru libconftest.a @conftest.lst >&5
configure:7004: $? = 0
configure:7009: ar cru libconftest.a @conftest.lst >&5
ar: conftest.o: No such file or directory
configure:7012: $? = 1
configure:7024: result: @
configure:7082: checking for strip
configure:7098: found /usr/bin/strip
configure:7109: result: strip
configure:7181: checking for ranlib
configure:7197: found /usr/bin/ranlib
configure:7208: result: ranlib
configure:7310: checking command to parse /usr/bin/nm -B output from gcc object
configure:7430: gcc -c -g -O2  conftest.c >&5
configure:7433: $? = 0
configure:7437: /usr/bin/nm -B conftest.o \| sed -n -e 's/^.*[ ]\([ABCDGIRSTW][ABCDGIRSTW]*\)[ ][ ]*\([_A-Za-z][_A-Za-z0-9]*\)$/\1 \2 \2/p' | sed '/ __gnu_lto/d' \> conftest.nm
configure:7440: $? = 0
configure:7506: gcc -o conftest -g -O2   conftest.c conftstm.o >&5
configure:7509: $? = 0
configure:7547: result: ok
configure:7584: checking for sysroot
configure:7614: result: no
configure:7691: gcc -c -g -O2  conftest.c >&5
configure:7694: $? = 0
configure:7870: checking for mt
configure:7886: found /bin/mt
configure:7897: result: mt
configure:7920: checking if mt is a manifest tool
configure:7926: mt '-?'
configure:7934: result: no
configure:8576: checking how to run the C preprocessor
configure:8607: gcc -E  conftest.c
configure:8607: $? = 0
configure:8621: gcc -E  conftest.c
conftest.c:14:28: fatal error: ac_nonexistent.h: No such file or directory
 #include <ac_nonexistent.h>
                            ^
compilation terminated.
configure:8621: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "AtomPAW"
| #define PACKAGE_TARNAME "atompaw"
| #define PACKAGE_VERSION "4.0.0.12"
| #define PACKAGE_STRING "AtomPAW 4.0.0.12"
| #define PACKAGE_BUGREPORT "natalie@wfu.edu, marc.torrent@cea.fr"
| #define PACKAGE_URL ""
| #define PACKAGE "atompaw"
| #define VERSION "4.0.0.12"
| #define FC_GNU 1
| #define HAVE_FORTRAN2003 1
| #define HAVE_FC_FLUSH 1
| /* end confdefs.h.  */
| #include <ac_nonexistent.h>
configure:8646: result: gcc -E
configure:8666: gcc -E  conftest.c
configure:8666: $? = 0
configure:8680: gcc -E  conftest.c
conftest.c:14:28: fatal error: ac_nonexistent.h: No such file or directory
 #include <ac_nonexistent.h>
                            ^
compilation terminated.
configure:8680: $? = 1
configure: failed program was:
| /* confdefs.h */
| #define PACKAGE_NAME "AtomPAW"
| #define PACKAGE_TARNAME "atompaw"
| #define PACKAGE_VERSION "4.0.0.12"
| #define PACKAGE_STRING "AtomPAW 4.0.0.12"
| #define PACKAGE_BUGREPORT "natalie@wfu.edu, marc.torrent@cea.fr"
| #define PACKAGE_URL ""
| #define PACKAGE "atompaw"
| #define VERSION "4.0.0.12"
| #define FC_GNU 1
| #define HAVE_FORTRAN2003 1
| #define HAVE_FC_FLUSH 1
| /* end confdefs.h.  */
| #include <ac_nonexistent.h>
configure:8709: checking for ANSI C header files
configure:8729: gcc -c -g -O2  conftest.c >&5
configure:8729: $? = 0
configure:8802: gcc -o conftest -g -O2   conftest.c  >&5
configure:8802: $? = 0
configure:8802: ./conftest
configure:8802: $? = 0
configure:8813: result: yes
configure:8826: checking for sys/types.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8826: checking for sys/stat.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8826: checking for stdlib.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8826: checking for string.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8826: checking for memory.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8826: checking for strings.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8826: checking for inttypes.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8826: checking for stdint.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8826: checking for unistd.h
configure:8826: gcc -c -g -O2  conftest.c >&5
configure:8826: $? = 0
configure:8826: result: yes
configure:8840: checking for dlfcn.h
configure:8840: gcc -c -g -O2  conftest.c >&5
configure:8840: $? = 0
configure:8840: result: yes
configure:9056: checking for objdir
configure:9071: result: .libs
configure:9342: checking if gcc supports -fno-rtti -fno-exceptions
configure:9360: gcc -c -g -O2  -fno-rtti -fno-exceptions conftest.c >&5
cc1: warning: command line option '-fno-rtti' is valid for C++/ObjC++ but not for C [enabled by default]
configure:9364: $? = 0
configure:9377: result: no
configure:9704: checking for gcc option to produce PIC
configure:9711: result: -fPIC -DPIC
configure:9719: checking if gcc PIC flag -fPIC -DPIC works
configure:9737: gcc -c -g -O2  -fPIC -DPIC -DPIC conftest.c >&5
configure:9741: $? = 0
configure:9754: result: yes
configure:9783: checking if gcc static flag -static works
configure:9811: result: yes
configure:9826: checking if gcc supports -c -o file.o
configure:9847: gcc -c -g -O2  -o out/conftest2.o conftest.c >&5
configure:9851: $? = 0
configure:9873: result: yes
configure:9881: checking if gcc supports -c -o file.o
configure:9928: result: yes
configure:9961: checking whether the gcc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries
configure:11114: result: yes
configure:11151: checking whether -lc should be explicitly linked in
configure:11159: gcc -c -g -O2  conftest.c >&5
configure:11162: $? = 0
configure:11177: gcc -shared  -fPIC -DPIC conftest.o  -v -Wl,-soname -Wl,conftest -o conftest 2\>\&1 \| /bin/grep  -lc  \>/dev/null 2\>\&1
configure:11180: $? = 0
configure:11194: result: no
configure:11354: checking dynamic linker characteristics
configure:11865: gcc -o conftest -g -O2   -Wl,-rpath -Wl,/foo conftest.c  >&5
configure:11865: $? = 0
configure:12087: result: GNU/Linux ld.so
configure:12194: checking how to hardcode library paths into programs
configure:12219: result: immediate
configure:12759: checking whether stripping libraries is possible
configure:12764: result: yes
configure:12799: checking if libtool supports shared libraries
configure:12801: result: yes
configure:12804: checking whether to build shared libraries
configure:12825: result: yes
configure:12828: checking whether to build static libraries
configure:12832: result: yes
configure:12961: checking if libtool supports shared libraries
configure:12963: result: yes
configure:12966: checking whether to build shared libraries
configure:12986: result: yes
configure:12989: checking whether to build static libraries
configure:12993: result: yes
configure:13027: gfortran -c -g -O2  conftest.F90 >&5
configure:13030: $? = 0
configure:13477: checking for gfortran option to produce PIC
configure:13484: result: -fPIC
configure:13492: checking if gfortran PIC flag -fPIC works
configure:13510: gfortran -c -g -O2 -fPIC  conftest.F90 >&5
configure:13514: $? = 0
configure:13527: result: yes
configure:13550: checking if gfortran static flag -static works
configure:13578: result: yes
configure:13590: checking if gfortran supports -c -o file.o
configure:13611: gfortran -c -g -O2 -o out/conftest2.o  conftest.F90 >&5
configure:13615: $? = 0
configure:13637: result: yes
configure:13642: checking if gfortran supports -c -o file.o
configure:13689: result: yes
configure:13719: checking whether the gfortran linker (/usr/bin/ld -m elf_x86_64) supports shared libraries
configure:14822: result: yes
configure:14963: checking dynamic linker characteristics
configure:15624: result: GNU/Linux ld.so
configure:15677: checking how to hardcode library paths into programs
configure:15702: result: immediate
configure:15829: checking whether linear algebra libraries work
configure:15839: gfortran -o conftest -g -O2 -O2  conftest.F90 -llapack -lblas  >&5
configure:15839: $? = 0
configure:15846: result: yes
configure:16055: FC       = gfortran
configure:16057: CPPFLAGS = 
configure:16059: FCFLAGS  = -g -O2
configure:16061: LDFLAGS  = -O2
configure:16063: LIBS     = -llapack -lblas 
configure:16177: checking that generated files are newer than configure
configure:16183: result: done
configure:16206: creating ./config.status

## ---------------------- ##
## Running config.status. ##
## ---------------------- ##

This file was extended by AtomPAW config.status 4.0.0.12, which was
generated by GNU Autoconf 2.69.  Invocation command line was

  CONFIG_FILES    = 
  CONFIG_HEADERS  = 
  CONFIG_LINKS    = 
  CONFIG_COMMANDS = 
  $ ./config.status 

on Univac

config.status:1162: creating Makefile
config.status:1162: creating src/Makefile
config.status:1162: creating src/pkginfo.f90
config.status:1162: creating config.h
config.status:1391: executing depfiles commands
config.status:1391: executing libtool commands

## ---------------- ##
## Cache variables. ##
## ---------------- ##

ac_cv_build=x86_64-unknown-linux-gnu
ac_cv_c_compiler_gnu=yes
ac_cv_env_ATOMPAW_LIBDIR_set=
ac_cv_env_ATOMPAW_LIBDIR_value=
ac_cv_env_CC_set=
ac_cv_env_CC_value=
ac_cv_env_CFLAGS_set=
ac_cv_env_CFLAGS_value=
ac_cv_env_CPPFLAGS_set=
ac_cv_env_CPPFLAGS_value=
ac_cv_env_CPP_set=
ac_cv_env_CPP_value=
ac_cv_env_FCFLAGS_set=
ac_cv_env_FCFLAGS_value=
ac_cv_env_FC_set=
ac_cv_env_FC_value=
ac_cv_env_LDFLAGS_set=
ac_cv_env_LDFLAGS_value=
ac_cv_env_LIBS_set=
ac_cv_env_LIBS_value=
ac_cv_env_build_alias_set=
ac_cv_env_build_alias_value=
ac_cv_env_host_alias_set=
ac_cv_env_host_alias_value=
ac_cv_env_target_alias_set=
ac_cv_env_target_alias_value=
ac_cv_fc_compiler_gnu=yes
ac_cv_fc_srcext_F90=none
ac_cv_header_dlfcn_h=yes
ac_cv_header_inttypes_h=yes
ac_cv_header_memory_h=yes
ac_cv_header_stdc=yes
ac_cv_header_stdint_h=yes
ac_cv_header_stdlib_h=yes
ac_cv_header_string_h=yes
ac_cv_header_strings_h=yes
ac_cv_header_sys_stat_h=yes
ac_cv_header_sys_types_h=yes
ac_cv_header_unistd_h=yes
ac_cv_host=x86_64-unknown-linux-gnu
ac_cv_objext=o
ac_cv_path_EGREP='/bin/grep -E'
ac_cv_path_FGREP='/bin/grep -F'
ac_cv_path_GREP=/bin/grep
ac_cv_path_SED=/bin/sed
ac_cv_path_install='/usr/bin/install -c'
ac_cv_path_mkdir=/bin/mkdir
ac_cv_prog_AWK=gawk
ac_cv_prog_CPP='gcc -E'
ac_cv_prog_DVIPDF=dvipdf
ac_cv_prog_LATEX=latex
ac_cv_prog_PDFLATEX=pdflatex
ac_cv_prog_PERL=perl
ac_cv_prog_ac_ct_AR=ar
ac_cv_prog_ac_ct_CC=gcc
ac_cv_prog_ac_ct_FC=gfortran
ac_cv_prog_ac_ct_MANIFEST_TOOL=mt
ac_cv_prog_ac_ct_OBJDUMP=objdump
ac_cv_prog_ac_ct_RANLIB=ranlib
ac_cv_prog_ac_ct_STRIP=strip
ac_cv_prog_cc_c89=
ac_cv_prog_cc_g=yes
ac_cv_prog_fc_g=yes
ac_cv_prog_make_make_set=yes
ac_cv_target=x86_64-unknown-linux-gnu
am_cv_CC_dependencies_compiler_type=none
ax_cv_f90_modext=mod
lt_cv_ar_at_file=@
lt_cv_archive_cmds_need_lc=no
lt_cv_deplibs_check_method=pass_all
lt_cv_file_magic_cmd='$MAGIC_CMD'
lt_cv_file_magic_test_file=
lt_cv_ld_reload_flag=-r
lt_cv_nm_interface='BSD nm'
lt_cv_objdir=.libs
lt_cv_path_LD=/usr/bin/ld
lt_cv_path_NM='/usr/bin/nm -B'
lt_cv_path_mainfest_tool=no
lt_cv_prog_compiler_c_o=yes
lt_cv_prog_compiler_c_o_FC=yes
lt_cv_prog_compiler_pic='-fPIC -DPIC'
lt_cv_prog_compiler_pic_FC=-fPIC
lt_cv_prog_compiler_pic_works=yes
lt_cv_prog_compiler_pic_works_FC=yes
lt_cv_prog_compiler_rtti_exceptions=no
lt_cv_prog_compiler_static_works=yes
lt_cv_prog_compiler_static_works_FC=yes
lt_cv_prog_gnu_ld=yes
lt_cv_sharedlib_from_linklib_cmd='printf %s\n'
lt_cv_shlibpath_overrides_runpath=no
lt_cv_sys_global_symbol_pipe='sed -n -e '\''s/^.*[	 ]\([ABCDGIRSTW][ABCDGIRSTW]*\)[	 ][	 ]*\([_A-Za-z][_A-Za-z0-9]*\)$/\1 \2 \2/p'\'' | sed '\''/ __gnu_lto/d'\'''
lt_cv_sys_global_symbol_to_c_name_address='sed -n -e '\''s/^: \([^ ]*\)[ ]*$/  {\"\1\", (void *) 0},/p'\'' -e '\''s/^[ABCDGIRSTW]* \([^ ]*\) \([^ ]*\)$/  {"\2", (void *) \&\2},/p'\'''
lt_cv_sys_global_symbol_to_c_name_address_lib_prefix='sed -n -e '\''s/^: \([^ ]*\)[ ]*$/  {\"\1\", (void *) 0},/p'\'' -e '\''s/^[ABCDGIRSTW]* \([^ ]*\) \(lib[^ ]*\)$/  {"\2", (void *) \&\2},/p'\'' -e '\''s/^[ABCDGIRSTW]* \([^ ]*\) \([^ ]*\)$/  {"lib\2", (void *) \&\2},/p'\'''
lt_cv_sys_global_symbol_to_cdecl='sed -n -e '\''s/^T .* \(.*\)$/extern int \1();/p'\'' -e '\''s/^[ABCDGIRSTW]* .* \(.*\)$/extern char \1;/p'\'''
lt_cv_sys_max_cmd_len=1572864
lt_cv_to_host_file_cmd=func_convert_file_noop
lt_cv_to_tool_file_cmd=func_convert_file_noop

## ----------------- ##
## Output variables. ##
## ----------------- ##

ACLOCAL='${SHELL} /home/univac/Abinit/atompaw-4.0.0.12/config/gnu/missing --run aclocal-1.12'
AMDEPBACKSLASH='\'
AMDEP_FALSE='#'
AMDEP_TRUE=''
AMTAR='$${TAR-tar}'
AR='ar'
ATOMPAW_LIBDIR=''
ATP_FCOPTS='-O2'
ATP_LDOPTS='-O2'
ATP_LIBS='-llapack -lblas'
AUTOCONF='${SHELL} /home/univac/Abinit/atompaw-4.0.0.12/config/gnu/missing --run autoconf'
AUTOHEADER='${SHELL} /home/univac/Abinit/atompaw-4.0.0.12/config/gnu/missing --run autoheader'
AUTOMAKE='${SHELL} /home/univac/Abinit/atompaw-4.0.0.12/config/gnu/missing --run automake-1.12'
AWK='gawk'
CC='gcc'
CCDEPMODE='depmode=none'
CFLAGS='-g -O2'
CPP='gcc -E'
CPPFLAGS=''
CYGPATH_W='echo'
DEFS='-DHAVE_CONFIG_H'
DEPDIR='.deps'
DLLTOOL='false'
DSYMUTIL=''
DUMPBIN=''
DVIPDF='dvipdf'
ECHO_C=''
ECHO_N='-n'
ECHO_T=''
EGREP='/bin/grep -E'
EXEEXT=''
FC='gfortran'
FCFLAGS='-g -O2'
FCFLAGS_F90=''
FGREP='/bin/grep -F'
GREP='/bin/grep'
INSTALL_DATA='${INSTALL} -m 644'
INSTALL_PROGRAM='${INSTALL}'
INSTALL_SCRIPT='${INSTALL}'
INSTALL_STRIP_PROGRAM='$(install_sh) -c -s'
LATEX='latex'
LD='/usr/bin/ld -m elf_x86_64'
LDFLAGS='-O2'
LIBOBJS=''
LIBS='-llapack -lblas '
LIBTOOL='$(SHELL) $(top_builddir)/libtool'
LIPO=''
LN_S='ln -s'
LTLIBOBJS=''
LTOBJEXT='lo'
MAKEINFO='${SHELL} /home/univac/Abinit/atompaw-4.0.0.12/config/gnu/missing --run makeinfo'
MANIFEST_TOOL=':'
MKDIR_P='/bin/mkdir -p'
MODEXT='mod'
NM='/usr/bin/nm -B'
NMEDIT=''
OBJDUMP='objdump'
OBJEXT='o'
OTOOL64=''
OTOOL=''
PACKAGE='atompaw'
PACKAGE_BUGREPORT='natalie@wfu.edu, marc.torrent@cea.fr'
PACKAGE_NAME='AtomPAW'
PACKAGE_STRING='AtomPAW 4.0.0.12'
PACKAGE_TARNAME='atompaw'
PACKAGE_URL=''
PACKAGE_VERSION='4.0.0.12'
PATH_SEPARATOR=':'
PDFLATEX='pdflatex'
PERL='perl'
RANLIB='ranlib'
SED='/bin/sed'
SET_MAKE=''
SHELL='/bin/bash'
STRIP='strip'
VERSION='4.0.0.12'
ac_ct_AR='ar'
ac_ct_CC='gcc'
ac_ct_DUMPBIN=''
ac_ct_FC='gfortran'
am__EXEEXT_FALSE=''
am__EXEEXT_TRUE='#'
am__fastdepCC_FALSE=''
am__fastdepCC_TRUE='#'
am__include='include'
am__isrc=''
am__leading_dot='.'
am__nodep='_no'
am__quote=''
am__tar='$${TAR-tar} chof - "$$tardir"'
am__untar='$${TAR-tar} xf -'
atp_fc_path=''
atp_fc_vendor='gnu'
atp_fc_version='4.8'
atp_fc_wrap='no'
bindir='${exec_prefix}/bin'
build='x86_64-unknown-linux-gnu'
build_alias=''
build_cpu='x86_64'
build_os='linux-gnu'
build_vendor='unknown'
datadir='${datarootdir}'
datarootdir='${prefix}/share'
docdir='${datarootdir}/doc/${PACKAGE_TARNAME}'
dvidir='${docdir}'
exec_prefix='${prefix}'
host='x86_64-unknown-linux-gnu'
host_alias=''
host_cpu='x86_64'
host_os='linux-gnu'
host_vendor='unknown'
htmldir='${docdir}'
includedir='${prefix}/include'
infodir='${datarootdir}/info'
install_sh='${SHELL} /home/univac/Abinit/atompaw-4.0.0.12/config/gnu/install-sh'
libdir='${exec_prefix}/lib'
libexecdir='${exec_prefix}/libexec'
localedir='${datarootdir}/locale'
localstatedir='${prefix}/var'
mandir='${datarootdir}/man'
mkdir_p='$(MKDIR_P)'
oldincludedir='/usr/include'
pdfdir='${docdir}'
prefix='/usr/local'
program_transform_name='s,x,x,'
psdir='${docdir}'
sbindir='${exec_prefix}/sbin'
sharedstatedir='${prefix}/com'
sysconfdir='${prefix}/etc'
target='x86_64-unknown-linux-gnu'
target_alias=''
target_cpu='x86_64'
target_os='linux-gnu'
target_vendor='unknown'

## ----------- ##
## confdefs.h. ##
## ----------- ##

/* confdefs.h */
#define PACKAGE_NAME "AtomPAW"
#define PACKAGE_TARNAME "atompaw"
#define PACKAGE_VERSION "4.0.0.12"
#define PACKAGE_STRING "AtomPAW 4.0.0.12"
#define PACKAGE_BUGREPORT "natalie@wfu.edu, marc.torrent@cea.fr"
#define PACKAGE_URL ""
#define PACKAGE "atompaw"
#define VERSION "4.0.0.12"
#define FC_GNU 1
#define HAVE_FORTRAN2003 1
#define HAVE_FC_FLUSH 1
#define STDC_HEADERS 1
#define HAVE_SYS_TYPES_H 1
#define HAVE_SYS_STAT_H 1
#define HAVE_STDLIB_H 1
#define HAVE_STRING_H 1
#define HAVE_MEMORY_H 1
#define HAVE_STRINGS_H 1
#define HAVE_INTTYPES_H 1
#define HAVE_STDINT_H 1
#define HAVE_UNISTD_H 1
#define HAVE_DLFCN_H 1
#define LT_OBJDIR ".libs/"

configure: exit 0
