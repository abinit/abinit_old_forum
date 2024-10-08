This file contains any messages produced by compilers while
running configure, to aid debugging if configure makes a mistake.

It was created by FoX configure 4.1.2, which was
generated by GNU Autoconf 2.61.  Invocation command line was

  $ ./configure --prefix=/public/home/kinsang/workdir/abinit-7.10.5-ompi/fallbacks/exports --bindir=/public/home/kinsang/workdir/abinit-7.10.5-ompi/fallbacks/exports/bin --libdir=/public/home/kinsang/workdir/abinit-7.10.5-ompi/fallbacks/exports/lib --program-suffix=-abinit --enable-sax

## --------- ##
## Platform. ##
## --------- ##

hostname = c0
uname -m = x86_64
uname -r = 3.10.0-327.10.1.el7.leasunhy.x86_64
uname -s = Linux
uname -v = #1 SMP Thu Mar 24 11:40:07 CST 2016

/usr/bin/uname -p = x86_64
/bin/uname -X     = unknown

/bin/arch              = x86_64
/usr/bin/arch -k       = unknown
/usr/convex/getsysinfo = unknown
/usr/bin/hostinfo      = unknown
/bin/machine           = unknown
/usr/bin/oslevel       = unknown
/bin/universe          = unknown

PATH: /usr/local/cuda-7.5/bin
PATH: /public/soft/intel/compilers_and_libraries_2016.2.181/linux/bin/intel64
PATH: /public/soft/intel/compilers_and_libraries_2016.2.181/linux/mpi/intel64/bin
PATH: /public/soft/intel/debugger_2016/gdb/intel64_mic/bin
PATH: /usr/local/bin
PATH: /usr/bin
PATH: /usr/local/sbin
PATH: /usr/sbin
PATH: /opt/ibutils/bin
PATH: /public/home/kinsang/.local/bin
PATH: /public/home/kinsang/bin


## ----------- ##
## Core tests. ##
## ----------- ##

configure:1750: checking build system type
configure:1768: result: x86_64-unknown-linux-gnu
configure:1790: checking host system type
configure:1805: result: x86_64-unknown-linux-gnu
configure:1942: checking for Fortran compiler version
configure:1945: /public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpifc --version </dev/null >&5
ifort (IFORT) 16.0.2 20160204
Copyright (C) 1985-2016 Intel Corporation.  All rights reserved.

configure:1948: $? = 0
configure:1950: /public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpifc -v </dev/null >&5
ifort version 16.0.2
configure:1953: $? = 0
configure:1955: /public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpifc -V </dev/null >&5
Intel(R) Fortran Intel(R) 64 Compiler for applications running on Intel(R) 64, Version 16.0.2.181 Build 20160204
Copyright (C) 1985-2016 Intel Corporation.  All rights reserved.

configure:1958: $? = 0
configure:1971: checking for linker flag to name executables
configure:1979: $FC $ac_link_obj_flag""conftest$ac_exeext $FCFLAGS $LDFLAGS $FCFLAGS_SRCEXT conftest.$ac_ext $LIBS >&5
ifort: error #10236: File not found:  '/exe:conftest'
configure:1982: $? = 1
configure:1979: $FC $ac_link_obj_flag""conftest$ac_exeext $FCFLAGS $LDFLAGS $FCFLAGS_SRCEXT conftest.$ac_ext $LIBS >&5
ifort: error #10236: File not found:  'conftest'
configure:1982: $? = 1
configure:1979: $FC $ac_link_obj_flag""conftest$ac_exeext $FCFLAGS $LDFLAGS $FCFLAGS_SRCEXT conftest.$ac_ext $LIBS >&5
configure:1982: $? = 0
configure:1997: result: -o 
configure:2003: checking for Fortran compiler default output file name
configure:2030: $FC $ac_link_obj_flag""conftest$ac_exeext $FCFLAGS $LDFLAGS $FCFLAGS_SRCEXT conftest.$ac_ext $LIBS >&5
configure:2033: $? = 0
configure:2079: result: conftest
configure:2084: checking whether the Fortran compiler works
configure:2094: ./conftest
./conftest: symbol lookup error: /public/soft/hpcx-icc/ompi-v1.10/lib/libmpi_mpifh.so.12: undefined symbol: mpi_fortran_errcodes_ignore__
configure:2097: $? = 127
configure:2106: error: cannot run Fortran compiled programs.
If you meant to cross compile, use `--host'.
See `config.log' for more details.

## ---------------- ##
## Cache variables. ##
## ---------------- ##

ac_cv_build=x86_64-unknown-linux-gnu
ac_cv_env_CC_set=set
ac_cv_env_CC_value=/public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpicc
ac_cv_env_CFLAGS_set=set
ac_cv_env_CFLAGS_value='-g -O2'
ac_cv_env_CPPFLAGS_set=set
ac_cv_env_CPPFLAGS_value=' '
ac_cv_env_CPP_set=set
ac_cv_env_CPP_value='/public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpicc -E'
ac_cv_env_FCFLAGS_set=set
ac_cv_env_FCFLAGS_value='-free -extend-source -vec-report0 -noaltparam -nofpscomp  -openmp -xHost -w -O2 -mkl -g -O2 '
ac_cv_env_FC_set=set
ac_cv_env_FC_value=/public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpifc
ac_cv_env_FPPFLAGS_set=
ac_cv_env_FPPFLAGS_value=
ac_cv_env_FPP_set=
ac_cv_env_FPP_value=
ac_cv_env_LDFLAGS_set=set
ac_cv_env_LDFLAGS_value=' '
ac_cv_env_LIBS_set=set
ac_cv_env_LIBS_value=
ac_cv_env_build_alias_set=
ac_cv_env_build_alias_value=
ac_cv_env_host_alias_set=
ac_cv_env_host_alias_value=
ac_cv_env_target_alias_set=
ac_cv_env_target_alias_value=
ac_cv_host=x86_64-unknown-linux-gnu

## ----------------- ##
## Output variables. ##
## ----------------- ##

BUILD_TARGETS=''
CC='/public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpicc'
CFLAGS='-g -O2'
CPP='/public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpicc -E'
CPPFLAGS=' '
CYGPATH_W=''
DEFS=''
DP_KIND=''
ECHO_C=''
ECHO_N='-n'
ECHO_T=''
EXEEXT=''
F90_RULE=''
FC='/public/home/kinsang/workdir/abinit-7.10.5-ompi/config/wrappers/wrap-mpifc'
FCFLAGS='-free -extend-source -vec-report0 -noaltparam -nofpscomp  -openmp -xHost -w -O2 -mkl -g -O2 '
FCFLAGS_free_f90=''
FC_MODEXT=''
FC_MODUPPERCASE=''
FC_MOD_FLAG=''
FFLAGS='-fixed -extend-source -vec-report0 -noaltparam -nofpscomp  -openmp -xHost -w -O2 -mkl -g -O2 '
FFLAGS_MPI=''
FPP=''
FPPDIRECT_FALSE=''
FPPDIRECT_TRUE=''
FPPFLAGS=''
FPPFLAGS_DEF=''
FPPFLAGS_fixed_F=''
FPPFLAGS_free_F90=''
FPP_COMPILE_EXT=''
FPP_MAKE_FLAGS=''
FPP_OUTPUT=''
FPP_PREPROCESS_EXT=''
INSTALL_DATA=''
INSTALL_PROGRAM=''
INSTALL_SCRIPT=''
LDFLAGS=' '
LIBEXT=''
LIBOBJS=''
LIBS=''
LINK_O_FLAG=''
LTLIBOBJS=''
OBJEXT=''
OBJSDIR=''
PACKAGE_BUGREPORT='a.walker@ucl.ac.uk'
PACKAGE_NAME='FoX'
PACKAGE_STRING='FoX 4.1.2'
PACKAGE_TARNAME='fox'
PACKAGE_VERSION='4.1.2'
PATH_SEPARATOR=':'
RANLIB='ranlib'
SHELL='/bin/sh'
SP_KIND=''
VPATH=''
ac_ct_CC=''
ac_ct_FC=''
bindir='/public/home/kinsang/workdir/abinit-7.10.5-ompi/fallbacks/exports/bin'
build='x86_64-unknown-linux-gnu'
build_alias=''
build_cpu='x86_64'
build_os='linux-gnu'
build_vendor='unknown'
datadir='${datarootdir}'
datarootdir='${prefix}/share'
docdir='${datarootdir}/doc/${PACKAGE_TARNAME}'
dvidir='${docdir}'
exec_prefix='NONE'
host='x86_64-unknown-linux-gnu'
host_alias=''
host_cpu='x86_64'
host_os='linux-gnu'
host_vendor='unknown'
htmldir='${docdir}'
includedir='${prefix}/include'
infodir='${datarootdir}/info'
libdir='/public/home/kinsang/workdir/abinit-7.10.5-ompi/fallbacks/exports/lib'
libexecdir='${exec_prefix}/libexec'
localedir='${datarootdir}/locale'
localstatedir='${prefix}/var'
mandir='${datarootdir}/man'
oldincludedir='/usr/include'
pdfdir='${docdir}'
prefix='/public/home/kinsang/workdir/abinit-7.10.5-ompi/fallbacks/exports'
program_transform_name='s,x,x,'
psdir='${docdir}'
sbindir='${exec_prefix}/sbin'
sharedstatedir='${prefix}/com'
sysconfdir='${prefix}/etc'
target_alias=''

## ----------- ##
## confdefs.h. ##
## ----------- ##

#define PACKAGE_NAME "FoX"
#define PACKAGE_TARNAME "fox"
#define PACKAGE_VERSION "4.1.2"
#define PACKAGE_STRING "FoX 4.1.2"
#define PACKAGE_BUGREPORT "a.walker@ucl.ac.uk"

configure: exit 1
