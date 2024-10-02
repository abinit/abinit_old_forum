+ . /sw/batch/init.sh
++ . /sw/modules/init.sh
++++ tclsh /sw/modules/tcl/modulecmd.tcl sh autoinit
+++ eval module '()' '{' eval '`'\''/bin/tclsh'\''' ''\''/sw/modules/tcl/modulecmd.tcl'\''' ''\''sh'\''' '$*`;' '}' ';' 'MODULESHOME=/sw/modules/tcl;' export 'MODULESHOME;'
++++ MODULESHOME=/sw/modules/tcl
++++ export MODULESHOME
++ module load site/tmpdir
+++ /bin/tclsh /sw/modules/tcl/modulecmd.tcl sh load site/tmpdir
module: loaded site/tmpdir
++ eval '_LMFILES__modshare=/sw/BASE/env/system-gcc:1:/sw/BASE/site/slurm:1:/sw/BASE/site/hummel:1:/sw/BASE/site/tmpdir:2;' export '_LMFILES__modshare;' 'LOADEDMODULES_modshare=site/hummel:1:site/tmpdir:2:env/system-gcc:1:site/slurm:1;' export 'LOADEDMODULES_modshare;' 'TMPDIR=/scratch/fckx115.725;' export 'TMPDIR;' 'RRZ_GLOBAL_TMPDIR=/work/scratch/fckx115.725;' export 'RRZ_GLOBAL_TMPDIR;' '_LMFILES_=/sw/BASE/site/slurm:/sw/BASE/site/tmpdir:/sw/BASE/site/hummel:/sw/BASE/env/system-gcc;' export '_LMFILES_;' 'LOADEDMODULES=site/slurm:site/tmpdir:site/hummel:env/system-gcc;' export 'LOADEDMODULES;' 'RRZ_LOCAL_TMPDIR=/scratch/fckx115.725;' export 'RRZ_LOCAL_TMPDIR;'
+++ _LMFILES__modshare=/sw/BASE/env/system-gcc:1:/sw/BASE/site/slurm:1:/sw/BASE/site/hummel:1:/sw/BASE/site/tmpdir:2
+++ export _LMFILES__modshare
+++ LOADEDMODULES_modshare=site/hummel:1:site/tmpdir:2:env/system-gcc:1:site/slurm:1
+++ export LOADEDMODULES_modshare
+++ TMPDIR=/scratch/fckx115.725
+++ export TMPDIR
+++ RRZ_GLOBAL_TMPDIR=/work/scratch/fckx115.725
+++ export RRZ_GLOBAL_TMPDIR
+++ _LMFILES_=/sw/BASE/site/slurm:/sw/BASE/site/tmpdir:/sw/BASE/site/hummel:/sw/BASE/env/system-gcc
+++ export _LMFILES_
+++ LOADEDMODULES=site/slurm:site/tmpdir:site/hummel:env/system-gcc
+++ export LOADEDMODULES
+++ RRZ_LOCAL_TMPDIR=/scratch/fckx115.725
+++ export RRZ_LOCAL_TMPDIR
++ unset SLURM_EXPORT_ENV
+ module switch env env/intel-15.0.3_impi-5.0.3
++ /bin/tclsh /sw/modules/tcl/modulecmd.tcl sh switch env env/intel-15.0.3_impi-5.0.3
module: unloaded env/system-gcc
module: loaded env/intel-15.0.3_impi-5.0.3
+ eval 'LD_RUN_PATH=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64;' export 'LD_RUN_PATH;' 'LD_LIBRARY_PATH=/sw/compiler/intel-15.0.3/impi/5.0.3.048/lib64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64;' export 'LD_LIBRARY_PATH;' 'CPATH=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/include:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/include;' export 'CPATH;' 'I_MPI_ROOT=/sw/compiler/intel-15.0.3/impi/5.0.3.048;' export 'I_MPI_ROOT;' 'MANPATH=/sw/compiler/intel-15.0.3/impi/5.0.3.048/man:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/man/en_US:/sw/batch/slurm/14.11.8/share/man:/usr/share/man:/sw/modules/man;' export 'MANPATH;' 'LIBRARY_PATH=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64;' export 'LIBRARY_PATH;' 'LOADEDMODULES=site/slurm:site/tmpdir:site/hummel:env/intel-15.0.3_impi-5.0.3;' export 'LOADEDMODULES;' '_LMFILES_=/sw/BASE/site/slurm:/sw/BASE/site/tmpdir:/sw/BASE/site/hummel:/sw/BASE/env/intel-15.0.3_impi-5.0.3;' export '_LMFILES_;' 'MANPATH_modshare=/sw/modules/man:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/man/en_US:1:/sw/compiler/intel-15.0.3/impi/5.0.3.048/man:1:/usr/share/man:1:/sw/batch/slurm/14.11.8/share/man:1;' export 'MANPATH_modshare;' 'LIBRARY_PATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64:1;' export 'LIBRARY_PATH_modshare;' 'INCLUDE=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/include;' export 'INCLUDE;' 'NLSPATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64/locale/%l_%t/%N:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64/locale/%l_%t/%N:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64/locale/%l_%t/%N:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/debugger/intel64/locale/%l_%t/%N:1;' export 'NLSPATH_modshare;' 'TBBROOT=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb;' export 'TBBROOT;' 'IPPROOT=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp;' export 'IPPROOT;' 'MKLROOT=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl;' export 'MKLROOT;' 'LD_RUN_PATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64:1;' export 'LD_RUN_PATH_modshare;' 'LD_LIBRARY_PATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/impi/5.0.3.048/lib64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64:1;' export 'LD_LIBRARY_PATH_modshare;' 'CPATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/include:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/include:1;' export 'CPATH_modshare;' 'NLSPATH=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64/locale/%l_%t/%N:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64/locale/%l_%t/%N:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64/locale/%l_%t/%N:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/debugger/intel64/locale/%l_%t/%N;' export 'NLSPATH;' 'MODULEPATH=/sw/BASE:/sw/TOOL:/sw/APP;' export 'MODULEPATH;' 'LOADEDMODULES_modshare=site/hummel:1:site/tmpdir:2:env/intel-15.0.3_impi-5.0.3:1:site/slurm:1;' export 'LOADEDMODULES_modshare;' '_LMFILES__modshare=/sw/BASE/site/slurm:1:/sw/BASE/site/hummel:1:/sw/BASE/site/tmpdir:2:/sw/BASE/env/intel-15.0.3_impi-5.0.3:1;' export '_LMFILES__modshare;' 'MODULEPATH_modshare=/sw/APP:1:/sw/TOOL:1:/sw/BASE:1;' export 'MODULEPATH_modshare;' 'PATH=/sw/compiler/intel-15.0.3/impi/5.0.3.048/bin64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/bin/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/debugger/gui/intel64:/sw/batch/slurm/14.11.8/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin;' export 'PATH;' 'INCLUDE_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/include:1;' export 'INCLUDE_modshare;' 'PATH_modshare=/bin:1:/usr/sbin:1:/sw/compiler/intel-15.0.3/impi/5.0.3.048/bin64:1:/usr/bin:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/bin/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/debugger/gui/intel64:1:/sw/batch/slurm/14.11.8/bin:1:/usr/local/sbin:1:/usr/local/bin:1;' export 'PATH_modshare;'
++ LD_RUN_PATH=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64
++ export LD_RUN_PATH
++ LD_LIBRARY_PATH=/sw/compiler/intel-15.0.3/impi/5.0.3.048/lib64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64
++ export LD_LIBRARY_PATH
++ CPATH=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/include:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/include
++ export CPATH
++ I_MPI_ROOT=/sw/compiler/intel-15.0.3/impi/5.0.3.048
++ export I_MPI_ROOT
++ MANPATH=/sw/compiler/intel-15.0.3/impi/5.0.3.048/man:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/man/en_US:/sw/batch/slurm/14.11.8/share/man:/usr/share/man:/sw/modules/man
++ export MANPATH
++ LIBRARY_PATH=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64
++ export LIBRARY_PATH
++ LOADEDMODULES=site/slurm:site/tmpdir:site/hummel:env/intel-15.0.3_impi-5.0.3
++ export LOADEDMODULES
++ _LMFILES_=/sw/BASE/site/slurm:/sw/BASE/site/tmpdir:/sw/BASE/site/hummel:/sw/BASE/env/intel-15.0.3_impi-5.0.3
++ export _LMFILES_
++ MANPATH_modshare=/sw/modules/man:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/man/en_US:1:/sw/compiler/intel-15.0.3/impi/5.0.3.048/man:1:/usr/share/man:1:/sw/batch/slurm/14.11.8/share/man:1
++ export MANPATH_modshare
++ LIBRARY_PATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64:1
++ export LIBRARY_PATH_modshare
++ INCLUDE=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/include
++ export INCLUDE
++ NLSPATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64/locale/%l_%t/%N:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64/locale/%l_%t/%N:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64/locale/%l_%t/%N:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/debugger/intel64/locale/%l_%t/%N:1
++ export NLSPATH_modshare
++ TBBROOT=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb
++ export TBBROOT
++ IPPROOT=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp
++ export IPPROOT
++ MKLROOT=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl
++ export MKLROOT
++ LD_RUN_PATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64:1
++ export LD_RUN_PATH_modshare
++ LD_LIBRARY_PATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/../compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64:1:/sw/compiler/intel-15.0.3/impi/5.0.3.048/lib64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/lib/intel64:1
++ export LD_LIBRARY_PATH_modshare
++ CPATH_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/include:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/tbb/include:1
++ export CPATH_modshare
++ NLSPATH=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/compiler/lib/intel64/locale/%l_%t/%N:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/ipp/lib/intel64/locale/%l_%t/%N:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/lib/intel64/locale/%l_%t/%N:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/debugger/intel64/locale/%l_%t/%N
++ export NLSPATH
++ MODULEPATH=/sw/BASE:/sw/TOOL:/sw/APP
++ export MODULEPATH
++ LOADEDMODULES_modshare=site/hummel:1:site/tmpdir:2:env/intel-15.0.3_impi-5.0.3:1:site/slurm:1
++ export LOADEDMODULES_modshare
++ _LMFILES__modshare=/sw/BASE/site/slurm:1:/sw/BASE/site/hummel:1:/sw/BASE/site/tmpdir:2:/sw/BASE/env/intel-15.0.3_impi-5.0.3:1
++ export _LMFILES__modshare
++ MODULEPATH_modshare=/sw/APP:1:/sw/TOOL:1:/sw/BASE:1
++ export MODULEPATH_modshare
++ PATH=/sw/compiler/intel-15.0.3/impi/5.0.3.048/bin64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/bin/intel64:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/debugger/gui/intel64:/sw/batch/slurm/14.11.8/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin
++ export PATH
++ INCLUDE_modshare=/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/mkl/include:1
++ export INCLUDE_modshare
++ PATH_modshare=/bin:1:/usr/sbin:1:/sw/compiler/intel-15.0.3/impi/5.0.3.048/bin64:1:/usr/bin:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/bin/intel64:1:/sw/compiler/intel-15.0.3/composer_xe_2015.3.187/debugger/gui/intel64:1:/sw/batch/slurm/14.11.8/bin:1:/usr/local/sbin:1:/usr/local/bin:1
++ export PATH_modshare
+ export I_MPI_PIN_PROCESSOR_LIST=0-15
+ I_MPI_PIN_PROCESSOR_LIST=0-15
+ result=/work/fckx115/ABINIT/co_cu/3layers/dmft
+ workdir=/work/scratch/fckx115.725
+ mpirun /home/fckx115/Software/abinit-7.10.4_impi/src/98_main/abinit
  ABINIT 
  
  Give name for formatted input file: 
co.in
  Give name for formatted output file:
co.out
  Give root name for generic input files:
co_LDA_SP
  Give root name for generic output files:
co_LDA_dmft
  Give root name for generic temporary files:
co_SP_tmp
 
--- !WARNING
message: |
    Finds that output file co.out
     already exists.
src_file: isfile.F90
src_line: 120
...
 
 new name assigned:co.out
 
 
--- !WARNING
message: |
    Finds that output file co.out
     already exists.
src_file: isfile.F90
src_line: 120
...
 
 new name assigned:co.outA
 
 
--- !WARNING
message: |
    Finds that output file co.outA
     already exists.
src_file: isfile.F90
src_line: 120
...
 
 new name assigned:co.outB
 
 
--- !WARNING
message: |
    Finds that output file co.outB
     already exists.
src_file: isfile.F90
src_line: 120
...
 
 new name assigned:co.outC
 

.Version 7.10.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel15.0 computer) 

.Copyright (C) 1998-2014 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read ~abinit/doc/users/acknowledgments.html for suggested
 acknowledgments of the ABINIT effort.
 For more information, see http://www.abinit.org .

.Starting date : Wed  5 Aug 2015.
- ( at 17h15 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.10.4
  Build target  : x86_64_linux_intel15.0
  Build date    : 20150804
 
 === Compiler Suite === 
  C compiler       : intel15.0
  C++ compiler     : gnu15.0
  Fortran compiler : intel15.0
  CFLAGS           :  -g -O2 -vec-report0
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -extend-source -noaltparam -nofpscomp
  FC_LDFLAGS       :    -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : auto
  openMP support : no
  GPU support    : no
 
 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : none
  FFT flavor    : none
  LINALG flavor : netlib
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none
 
 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : no
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -xHost


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA
 
   HAVE_FC_IEEE_EXCEPTIONS             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO        HAVE_LIBPAW_ABINIT
 
               HAVE_LINALG         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M
 
        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX
 
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI
 
         HAVE_TIMER_SERIAL              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> co.in
- output file    -> co.outC
- root for input  files -> co_LDA_SP
- root for output files -> co_LDA_dmft
 
-instrng :   138 lines of input have been read from file co.in
 

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is /home/fckx115/pseudopotentials/GBRV/cu_lda_v1.2_abinit.paw

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is /home/fckx115/pseudopotentials/GBRV/co_lda_v1.2_abinit.paw
  read the values zionpsp= 19.0 , pspcod=   7 , lmax=   2
 3 0.                                   : shape_type,rshape                     
  
nproj =      2     2     2     0
nprojso =      0     0     0
  read the values zionpsp= 17.0 , pspcod=   7 , lmax=   2
 3 0.                                   : shape_type,rshape                     
  
nproj =      2     2     2     0
nprojso =      0     0     0
 
 inpspheads: deduce mpsang  =   3, n1xccc  =   1.
 
 invars1m : enter jdtset=0
 invars1 : treat image number     1
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xangst is defined in input file
 ingeo : takes atomic coordinates from input array xangst
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
 symlatt : the Bravais lattice is tP (primitive tetragonal)
 
--- !COMMENT
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  4, is more symmetric
    than the real one, iholohedry=  2, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
src_file: symbrav.F90
src_line: 201
...
 
 
 symlatt : the Bravais lattice is mC (one-face-centered monoclinic)
 symspgr : spgroup=   8  Cm   (=Cs^3)
       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   1043.00000000000     
 chkneu : initialized the occupation numbers for occopt=    3
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  1.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
 getmpw sequential formula gave:    53623
 
 Computing all possible proc distrib for this input with nproc less than 80
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->    1|   1 ->    1|   1 ->   41|   1 ->   80|   1 ->   58|   2 ->   80|   1 ->   80|
           1|           1|           1|           8|          10|           1|          80|      43.80 |
           1|           1|           1|           8|          10|           2|          80|      41.56 |
           1|           1|           1|           6|          10|           1|          60|      25.61 |
           1|           1|           1|           6|          10|           2|          60|      24.37 |
           1|           1|           1|          16|           5|           1|          80|      19.31 |
npfft, npband, npspinor and npkpt:     1    1    1   80
 
--- !WARNING
message: |
    nproc_kpt=80 >= nkpt=1* nsppol=1
    The number of processors is larger than nkpt. This is a waste.
src_file: distrb2.F90
src_line: 107
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 1, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 1, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 1, ground state wf handled in core.
 
--- !WARNING
message: |
    Your number of spins*k-points (=1) will not distribute correctly
    with the current number of processors (=80).
    You will leave some empty.
    YOU ARE STRONGLY ADVICED TO ACTIVATE AUTOMATIC PARALLELIZATION!
    PUT "AUTOPARAL=1" IN THE INPUT FILE.
src_file: mpi_setup.F90
src_line: 617
...
 
getng is called for the coarse grid:
 For input ecut=  2.000000E+01 best grid ngfft=      90      90     125
       max ecut=  2.123848E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    90   90  125
  Augmented FFT divisions ...................    91   91  125
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=   53621
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  8.000000E+01 best grid ngfft=     180     180     243
       max ecut=  8.089296E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................   180  180  243
  Augmented FFT divisions ...................   181  181  243
  FFT algorithm .............................   112
  FFT cache size ............................    16
 
 Symmetries : space group Cm (#  8); Bravais mC (1-face-center monocl.)
 
 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         0    iscf =        17 xclevel =         1
  lmnmax =        18   lnmax =         6   mband =       580  mffmem =         1
P  mgfft =       125   mkmem =         1 mpssoang=         3     mpw =     53621
  mqgrid =     12034   natom =        55    nfft =   1012500    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         1  ntypat =         2  occopt =         3
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       243    nfftf =   7873200
================================================================================
P This job should need less than                    2700.206 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    474.553 Mbytes ; DEN or POT disk file :     60.070 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with    474.5531 MBytes.
 memana : allocated an array of    474.553 Mbytes, for testing purposes.
 memana : allocated    2700.206 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      2.0493850000E+01  2.0493850000E+01  2.9885800000E+01 Bohr
              amu      6.35460000E+01  5.89332000E+01
        autoparal           1
        dmatpuopt           1
        dmftbandf         580
        dmftbandi           1
        dmft_iter           1
        dmft_mxsf      1.0000000000E+00
        dmft_nwli     1000000
        dmft_nwlo        3000
       dmft_tollc      1.0000000000E-06
             ecut      2.00000000E+01 Hartree
-          fftalg         112
        f4of2_sla      0.00000000E+00  6.25000000E-01
           irdwfk           1
           istwfk        1
              ixc           2
            jpawu      0.00000000E+00  3.30743929E-02 Hartree
         kptrlatt        1    0    0      0    1    0      0    0    1
          kptrlen      2.04938500E+01
            lpawu          -1       2
P           mkmem           1
            natom          55
            nband         580
            ngfft          90      90     125
          ngfftdg         180     180     243
             nkpt           1
            nstep           1
             nsym           2
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  1.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000
           occopt           3
-      paral_atom           0
        pawecutdg      8.00000000E+01 Hartree
          spgroup           8
           symrel      1  0  0   0  1  0   0  0  1       0 -1  0  -1  0  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000    -0.1666827 -0.1666827  0.0000000
           toldfe      1.00000000E-08 Hartree
           tsmear      3.67493254E-04 Hartree
            typat      1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
                       1  1  1  1  1  1  1  1  1  1  1  1  1  1  2
            upawu      0.00000000E+00  1.46997302E-01 Hartree
          usedmft           1
          usepawu          10
           useylm           1
           xangst      1.8074450000E+00  9.0372250000E+00 -3.6148900000E+00
                       0.0000000000E+00  7.2297800000E+00 -3.6148900000E+00
                       0.0000000000E+00  9.0372250000E+00 -1.8074450000E+00
                       1.8074450000E+00  9.0372250000E+00  0.0000000000E+00
                       0.0000000000E+00  7.2297800000E+00  0.0000000000E+00
                       1.8074450000E+00  7.2297800000E+00 -1.8074450000E+00
                       5.4223350000E+00  9.0372250000E+00 -3.6148900000E+00
                       3.6148900000E+00  7.2297800000E+00 -3.6148900000E+00
                       3.6148900000E+00  9.0372250000E+00 -1.8074450000E+00
                       5.4223350000E+00  9.0372250000E+00  0.0000000000E+00
                       3.6148900000E+00  7.2297800000E+00  0.0000000000E+00
                       5.4223350000E+00  7.2297800000E+00 -1.8074450000E+00
                       9.0372250000E+00  9.0372250000E+00 -3.6148900000E+00
                       7.2297800000E+00  7.2297800000E+00 -3.6148900000E+00
                       7.2297800000E+00  9.0372250000E+00 -1.8074450000E+00
                       9.0372250000E+00  9.0372250000E+00  0.0000000000E+00
                       7.2297800000E+00  7.2297800000E+00  0.0000000000E+00
                       9.0372250000E+00  7.2297800000E+00 -1.8074450000E+00
                       1.8074450000E+00  5.4223350000E+00 -3.6148900000E+00
                       0.0000000000E+00  3.6148900000E+00 -3.6148900000E+00
                       0.0000000000E+00  5.4223350000E+00 -1.8074450000E+00
                       1.8074450000E+00  5.4223350000E+00  0.0000000000E+00
                       0.0000000000E+00  3.6148900000E+00  0.0000000000E+00
                       1.8074450000E+00  3.6148900000E+00 -1.8074450000E+00
                       5.4223350000E+00  5.4223350000E+00 -3.6148900000E+00
                       3.6148900000E+00  3.6148900000E+00 -3.6148900000E+00
                       3.6148900000E+00  5.4223350000E+00 -1.8074450000E+00
                       5.4223350000E+00  5.4223350000E+00  0.0000000000E+00
                       3.6148900000E+00  3.6148900000E+00  0.0000000000E+00
                       5.4223350000E+00  3.6148900000E+00 -1.8074450000E+00
                       9.0372250000E+00  5.4223350000E+00 -3.6148900000E+00
                       7.2297800000E+00  3.6148900000E+00 -3.6148900000E+00
                       7.2297800000E+00  5.4223350000E+00 -1.8074450000E+00
                       9.0372250000E+00  5.4223350000E+00  0.0000000000E+00
                       7.2297800000E+00  3.6148900000E+00  0.0000000000E+00
                       9.0372250000E+00  3.6148900000E+00 -1.8074450000E+00
                       1.8074450000E+00  1.8074450000E+00 -3.6148900000E+00
                       0.0000000000E+00  0.0000000000E+00 -3.6148900000E+00
                       0.0000000000E+00  1.8074450000E+00 -1.8074450000E+00
                       1.8074450000E+00  1.8074450000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.8074450000E+00  0.0000000000E+00 -1.8074450000E+00
                       5.4223350000E+00  1.8074450000E+00 -3.6148900000E+00
                       3.6148900000E+00  0.0000000000E+00 -3.6148900000E+00
                       3.6148900000E+00  1.8074450000E+00 -1.8074450000E+00
                       5.4223350000E+00  1.8074450000E+00  0.0000000000E+00
                       3.6148900000E+00  0.0000000000E+00  0.0000000000E+00
                       5.4223350000E+00  0.0000000000E+00 -1.8074450000E+00
                       9.0372250000E+00  1.8074450000E+00 -3.6148900000E+00
                       7.2297800000E+00  0.0000000000E+00 -3.6148900000E+00
                       7.2297800000E+00  1.8074450000E+00 -1.8074450000E+00
                       9.0372250000E+00  1.8074450000E+00  0.0000000000E+00
                       7.2297800000E+00  0.0000000000E+00  0.0000000000E+00
                       9.0372250000E+00  0.0000000000E+00 -1.8074450000E+00
                       5.4223350000E+00  3.6148900000E+00  1.2000000000E+00
            xcart      3.4155760503E+00  1.7077880251E+01 -6.8311521005E+00
                       0.0000000000E+00  1.3662304201E+01 -6.8311521005E+00
                       0.0000000000E+00  1.7077880251E+01 -3.4155760503E+00
                       3.4155760503E+00  1.7077880251E+01  0.0000000000E+00
                       0.0000000000E+00  1.3662304201E+01  0.0000000000E+00
                       3.4155760503E+00  1.3662304201E+01 -3.4155760503E+00
                       1.0246728151E+01  1.7077880251E+01 -6.8311521005E+00
                       6.8311521005E+00  1.3662304201E+01 -6.8311521005E+00
                       6.8311521005E+00  1.7077880251E+01 -3.4155760503E+00
                       1.0246728151E+01  1.7077880251E+01  0.0000000000E+00
                       6.8311521005E+00  1.3662304201E+01  0.0000000000E+00
                       1.0246728151E+01  1.3662304201E+01 -3.4155760503E+00
                       1.7077880251E+01  1.7077880251E+01 -6.8311521005E+00
                       1.3662304201E+01  1.3662304201E+01 -6.8311521005E+00
                       1.3662304201E+01  1.7077880251E+01 -3.4155760503E+00
                       1.7077880251E+01  1.7077880251E+01  0.0000000000E+00
                       1.3662304201E+01  1.3662304201E+01  0.0000000000E+00
                       1.7077880251E+01  1.3662304201E+01 -3.4155760503E+00
                       3.4155760503E+00  1.0246728151E+01 -6.8311521005E+00
                       0.0000000000E+00  6.8311521005E+00 -6.8311521005E+00
                       0.0000000000E+00  1.0246728151E+01 -3.4155760503E+00
                       3.4155760503E+00  1.0246728151E+01  0.0000000000E+00
                       0.0000000000E+00  6.8311521005E+00  0.0000000000E+00
                       3.4155760503E+00  6.8311521005E+00 -3.4155760503E+00
                       1.0246728151E+01  1.0246728151E+01 -6.8311521005E+00
                       6.8311521005E+00  6.8311521005E+00 -6.8311521005E+00
                       6.8311521005E+00  1.0246728151E+01 -3.4155760503E+00
                       1.0246728151E+01  1.0246728151E+01  0.0000000000E+00
                       6.8311521005E+00  6.8311521005E+00  0.0000000000E+00
                       1.0246728151E+01  6.8311521005E+00 -3.4155760503E+00
                       1.7077880251E+01  1.0246728151E+01 -6.8311521005E+00
                       1.3662304201E+01  6.8311521005E+00 -6.8311521005E+00
                       1.3662304201E+01  1.0246728151E+01 -3.4155760503E+00
                       1.7077880251E+01  1.0246728151E+01  0.0000000000E+00
                       1.3662304201E+01  6.8311521005E+00  0.0000000000E+00
                       1.7077880251E+01  6.8311521005E+00 -3.4155760503E+00
                       3.4155760503E+00  3.4155760503E+00 -6.8311521005E+00
                       0.0000000000E+00  0.0000000000E+00 -6.8311521005E+00
                       0.0000000000E+00  3.4155760503E+00 -3.4155760503E+00
                       3.4155760503E+00  3.4155760503E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.4155760503E+00  0.0000000000E+00 -3.4155760503E+00
                       1.0246728151E+01  3.4155760503E+00 -6.8311521005E+00
                       6.8311521005E+00  0.0000000000E+00 -6.8311521005E+00
                       6.8311521005E+00  3.4155760503E+00 -3.4155760503E+00
                       1.0246728151E+01  3.4155760503E+00  0.0000000000E+00
                       6.8311521005E+00  0.0000000000E+00  0.0000000000E+00
                       1.0246728151E+01  0.0000000000E+00 -3.4155760503E+00
                       1.7077880251E+01  3.4155760503E+00 -6.8311521005E+00
                       1.3662304201E+01  0.0000000000E+00 -6.8311521005E+00
                       1.3662304201E+01  3.4155760503E+00 -3.4155760503E+00
                       1.7077880251E+01  3.4155760503E+00  0.0000000000E+00
                       1.3662304201E+01  0.0000000000E+00  0.0000000000E+00
                       1.7077880251E+01  0.0000000000E+00 -3.4155760503E+00
                       1.0246728151E+01  6.8311521005E+00  2.2676713595E+00
             xred      1.6666346491E-01  8.3331732453E-01 -2.2857517953E-01
                       0.0000000000E+00  6.6665385962E-01 -2.2857517953E-01
                       0.0000000000E+00  8.3331732453E-01 -1.1428758977E-01
                       1.6666346491E-01  8.3331732453E-01  0.0000000000E+00
                       0.0000000000E+00  6.6665385962E-01  0.0000000000E+00
                       1.6666346491E-01  6.6665385962E-01 -1.1428758977E-01
                       4.9999039472E-01  8.3331732453E-01 -2.2857517953E-01
                       3.3332692981E-01  6.6665385962E-01 -2.2857517953E-01
                       3.3332692981E-01  8.3331732453E-01 -1.1428758977E-01
                       4.9999039472E-01  8.3331732453E-01  0.0000000000E+00
                       3.3332692981E-01  6.6665385962E-01  0.0000000000E+00
                       4.9999039472E-01  6.6665385962E-01 -1.1428758977E-01
                       8.3331732453E-01  8.3331732453E-01 -2.2857517953E-01
                       6.6665385962E-01  6.6665385962E-01 -2.2857517953E-01
                       6.6665385962E-01  8.3331732453E-01 -1.1428758977E-01
                       8.3331732453E-01  8.3331732453E-01  0.0000000000E+00
                       6.6665385962E-01  6.6665385962E-01  0.0000000000E+00
                       8.3331732453E-01  6.6665385962E-01 -1.1428758977E-01
                       1.6666346491E-01  4.9999039472E-01 -2.2857517953E-01
                       0.0000000000E+00  3.3332692981E-01 -2.2857517953E-01
                       0.0000000000E+00  4.9999039472E-01 -1.1428758977E-01
                       1.6666346491E-01  4.9999039472E-01  0.0000000000E+00
                       0.0000000000E+00  3.3332692981E-01  0.0000000000E+00
                       1.6666346491E-01  3.3332692981E-01 -1.1428758977E-01
                       4.9999039472E-01  4.9999039472E-01 -2.2857517953E-01
                       3.3332692981E-01  3.3332692981E-01 -2.2857517953E-01
                       3.3332692981E-01  4.9999039472E-01 -1.1428758977E-01
                       4.9999039472E-01  4.9999039472E-01  0.0000000000E+00
                       3.3332692981E-01  3.3332692981E-01  0.0000000000E+00
                       4.9999039472E-01  3.3332692981E-01 -1.1428758977E-01
                       8.3331732453E-01  4.9999039472E-01 -2.2857517953E-01
                       6.6665385962E-01  3.3332692981E-01 -2.2857517953E-01
                       6.6665385962E-01  4.9999039472E-01 -1.1428758977E-01
                       8.3331732453E-01  4.9999039472E-01  0.0000000000E+00
                       6.6665385962E-01  3.3332692981E-01  0.0000000000E+00
                       8.3331732453E-01  3.3332692981E-01 -1.1428758977E-01
                       1.6666346491E-01  1.6666346491E-01 -2.2857517953E-01
                       0.0000000000E+00  0.0000000000E+00 -2.2857517953E-01
                       0.0000000000E+00  1.6666346491E-01 -1.1428758977E-01
                       1.6666346491E-01  1.6666346491E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.6666346491E-01  0.0000000000E+00 -1.1428758977E-01
                       4.9999039472E-01  1.6666346491E-01 -2.2857517953E-01
                       3.3332692981E-01  0.0000000000E+00 -2.2857517953E-01
                       3.3332692981E-01  1.6666346491E-01 -1.1428758977E-01
                       4.9999039472E-01  1.6666346491E-01  0.0000000000E+00
                       3.3332692981E-01  0.0000000000E+00  0.0000000000E+00
                       4.9999039472E-01  0.0000000000E+00 -1.1428758977E-01
                       8.3331732453E-01  1.6666346491E-01 -2.2857517953E-01
                       6.6665385962E-01  0.0000000000E+00 -2.2857517953E-01
                       6.6665385962E-01  1.6666346491E-01 -1.1428758977E-01
                       8.3331732453E-01  1.6666346491E-01  0.0000000000E+00
                       6.6665385962E-01  0.0000000000E+00  0.0000000000E+00
                       8.3331732453E-01  0.0000000000E+00 -1.1428758977E-01
                       4.9999039472E-01  3.3332692981E-01  7.5877887139E-02
            znucl       29.00000   27.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency.
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1:  0.22204460E-15
            Smallest positive number:                       0.22250739-307
            Largest representable number:                   0.17976931+309
 INTEGER:   Data type name: INTEGER(default) 
            Kind value: 4
            Bit size:   32
            Largest representable number: 2147483647
 LOGICAL:   Data type name: LOGICAL 
            Kind value: 4
 CHARACTER: Data type name: CHARACTER             Kind value: 1

  ==== OpenMP parallelism is OFF ====
 
  ==== Using MPI-2 specifications ==== 
  MPI-IO support is ON
  xmpi_tag_ub ................    536870911
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................   1.000000000000000E-006
 
================================================================================
== DATASET  1 ==================================================================
-   nproc =   80   -> not optimal: autoparal keyword recommended in input file
 
 
 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Zunger-Ceperley-Alder - ixc=2
 Citation for XC functional:
  J.P.Perdew and A.Zunger, PRB 23, 5048 (1981)
 
 Unit cell volume ucvol=  1.2551973E+04 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  90  90 125
         ecut(hartree)=     20.000   => boxcut(ratio)=   2.06099
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 180 180 243
         ecut(hartree)=     80.000   => boxcut(ratio)=   2.01113
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is /home/fckx115/pseudopotentials/GBRV/cu_lda_v1.2_abinit.paw
- pspatm: opening atomic psp file    /home/fckx115/pseudopotentials/GBRV/cu_lda_v1.2_abinit.paw
- Cu - PAW data extracted from US-psp (D.Vanderbilt) - generated by USpp2Abinit v2.4.0
- 29.00000  19.00000  20140203                znucl, zion, pspdat
    7    2    2    0       583   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 1.51030043
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 583 , AA= 0.85474E-04 BB= 0.16949E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 579 , AA= 0.85474E-04 BB= 0.16949E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 689 , AA= 0.85474E-04 BB= 0.16949E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 698 , AA= 0.85474E-04 BB= 0.16949E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid  2
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 3
 Radial grid used for pseudo valence density is grid 4
 Compensation charge density is taken into account in XC energy/potential
 beta integral value:      -0.208111E+02
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is /home/fckx115/pseudopotentials/GBRV/co_lda_v1.2_abinit.paw
- pspatm: opening atomic psp file    /home/fckx115/pseudopotentials/GBRV/co_lda_v1.2_abinit.paw
- Co - PAW data extracted from US-psp (D.Vanderbilt) - generated by USpp2Abinit v2.4.0
- 27.00000  17.00000  20140203                znucl, zion, pspdat
    7    2    2    0       581   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 Pseudopotential format is: paw4
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 1.56810409
 4 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 581 , AA= 0.91806E-04 BB= 0.16949E-01
  - mesh 2: r(i)=AA*[exp(BB*(i-1))-1], size= 577 , AA= 0.91806E-04 BB= 0.16949E-01
  - mesh 3: r(i)=AA*[exp(BB*(i-1))-1], size= 685 , AA= 0.91806E-04 BB= 0.16949E-01
  - mesh 4: r(i)=AA*[exp(BB*(i-1))-1], size= 697 , AA= 0.91806E-04 BB= 0.16949E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions = sphere core radius
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid  2
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 3
 Radial grid used for pseudo valence density is grid 4
 Compensation charge density is taken into account in XC energy/potential
 beta integral value:      -0.204893E+02
 pspatm: atomic psp has been read  and splines computed
 
   1.13866510E+06                                ecore*ucvol(ha*bohr**3)
   1  2
   2  1
   3  3
   4  5
   5  4
   6  6
   7 20
   8 19
   9 21
  10 23
  11 22
  12 24
  13 38
  14 37
  15 39
  16 41
  17 40
  18 42
  19  8
  20  7
  21  9
  22 11
  23 10
  24 12
  25 26
  26 25
  27 27
  28 29
  29 28
  30 30
  31 44
  32 43
  33 45
  34 47
  35 46
  36 48
  37 14
  38 13
  39 15
  40 17
  41 16
  42 18
  43 32
  44 31
  45 33
  46 35
  47 34
  48 36
  49 50
  50 49
  51 51
  52 53
  53 52
  54 54
  55 55
inwffil: examining the header of disk file co_LDA_SP_WFK
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
        current calculation                         restart file
        -------------------                         ------------
 
  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.10.4           |  ABINIT  code version 7.10.4
. date 20150805 bantot  580 natom   55  |  date 20150803 bantot  580 natom   55
  nkpt   1 nsym  2 ngfft 180, 180, 243  |  nkpt   1 nsym  2 ngfft 192, 192, 256
  ntypat  2 ecut_eff  20.0000000        |  ntypat  2 ecut_eff  20.0000000
  usepaw  1                             |  usepaw  1
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    20.4938500   0.0000000   0.0000000  |    20.4938500   0.0000000   0.0000000
     0.0000000  20.4938500   0.0000000  |     0.0000000  20.4938500   0.0000000
     0.0000000   0.0000000  29.8858000  |     0.0000000   0.0000000  29.8858000
  PAW: ecutdg   80.000000               |  PAW: ecutdg   80.000000
  nband:                                |  nband:
   580                                  |   580
  symafm:                               |  symafm:
    1  1                                |    1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
  typat:                                |  typat:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  2                 |    1  1  1  1  1  1  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1                                   |    2
 
--- !WARNING
message: |
    For k point number1 input istwfk=1not equal disk file istwfk=2
src_file: m_header.F90
src_line: 3176
...
 
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
  wtk:                                  |  wtk:
    1.000                               |    1.000
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
 
--- !WARNING
message: |
    band,k       520, input occ=  2.0000000E+00 disk occ=  1.4142032E+00
src_file: m_header.F90
src_line: 3272
...
 
 
--- !WARNING
message: |
    band,k       521, input occ=  2.0000000E+00 disk occ=  1.2721640E+00
src_file: m_header.F90
src_line: 3272
...
 
 
--- !WARNING
message: |
    band,k       522, input occ=  1.0000000E+00 disk occ=  9.4313853E-01
src_file: m_header.F90
src_line: 3272
...
 
 
--- !WARNING
message: |
    band,k       523, input occ=  0.0000000E+00 disk occ=  9.4313385E-01
src_file: m_header.F90
src_line: 3272
...
 
 
--- !WARNING
message: |
    band,k       524, input occ=  0.0000000E+00 disk occ=  2.1337631E-01
src_file: m_header.F90
src_line: 3272
...
 
The number of warning msgs is sufficient ... stop writing them.
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
    -0.1666827  -0.1666827   0.0000000  |    -0.1666827  -0.1666827   0.0000000
   znucl:                               |   znucl:
   29.00 27.00                          |   29.00 27.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   2  lmn_size  18     |  pspso   0 pspxc   2  lmn_size  18
  pspdat ****** pspcod    7 zion  19.0  |  pspdat ****** pspcod    7 zion  19.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   2  lmn_size  18     |  pspso   0 pspxc   2  lmn_size  18
  pspdat ****** pspcod    7 zion  17.0  |  pspdat ****** pspcod    7 zion  17.0
  xred:                                 |  xred:
     0.1666635   0.8333173  -0.2285752  |     0.1666635   0.8333173  -0.2285752
     0.0000000   0.6666539  -0.2285752  |     0.0000000   0.6666539  -0.2285752
     0.0000000   0.8333173  -0.1142876  |     0.0000000   0.8333173  -0.1142876
     0.1666635   0.8333173   0.0000000  |     0.1666635   0.8333173   0.0000000
     0.0000000   0.6666539   0.0000000  |     0.0000000   0.6666539   0.0000000
     0.1666635   0.6666539  -0.1142876  |     0.1666635   0.6666539  -0.1142876
     0.4999904   0.8333173  -0.2285752  |     0.4999904   0.8333173  -0.2285752
     0.3333269   0.6666539  -0.2285752  |     0.3333269   0.6666539  -0.2285752
     0.3333269   0.8333173  -0.1142876  |     0.3333269   0.8333173  -0.1142876
     0.4999904   0.8333173   0.0000000  |     0.4999904   0.8333173   0.0000000
     0.3333269   0.6666539   0.0000000  |     0.3333269   0.6666539   0.0000000
     0.4999904   0.6666539  -0.1142876  |     0.4999904   0.6666539  -0.1142876
     0.8333173   0.8333173  -0.2285752  |     0.8333173   0.8333173  -0.2285752
     0.6666539   0.6666539  -0.2285752  |     0.6666539   0.6666539  -0.2285752
     0.6666539   0.8333173  -0.1142876  |     0.6666539   0.8333173  -0.1142876
     0.8333173   0.8333173   0.0000000  |     0.8333173   0.8333173   0.0000000
     0.6666539   0.6666539   0.0000000  |     0.6666539   0.6666539   0.0000000
     0.8333173   0.6666539  -0.1142876  |     0.8333173   0.6666539  -0.1142876
     0.1666635   0.4999904  -0.2285752  |     0.1666635   0.4999904  -0.2285752
     0.0000000   0.3333269  -0.2285752  |     0.0000000   0.3333269  -0.2285752
     0.0000000   0.4999904  -0.1142876  |     0.0000000   0.4999904  -0.1142876
     0.1666635   0.4999904   0.0000000  |     0.1666635   0.4999904   0.0000000
     0.0000000   0.3333269   0.0000000  |     0.0000000   0.3333269   0.0000000
     0.1666635   0.3333269  -0.1142876  |     0.1666635   0.3333269  -0.1142876
     0.4999904   0.4999904  -0.2285752  |     0.4999904   0.4999904  -0.2285752
     0.3333269   0.3333269  -0.2285752  |     0.3333269   0.3333269  -0.2285752
     0.3333269   0.4999904  -0.1142876  |     0.3333269   0.4999904  -0.1142876
     0.4999904   0.4999904   0.0000000  |     0.4999904   0.4999904   0.0000000
     0.3333269   0.3333269   0.0000000  |     0.3333269   0.3333269   0.0000000
     0.4999904   0.3333269  -0.1142876  |     0.4999904   0.3333269  -0.1142876
     0.8333173   0.4999904  -0.2285752  |     0.8333173   0.4999904  -0.2285752
     0.6666539   0.3333269  -0.2285752  |     0.6666539   0.3333269  -0.2285752
     0.6666539   0.4999904  -0.1142876  |     0.6666539   0.4999904  -0.1142876
     0.8333173   0.4999904   0.0000000  |     0.8333173   0.4999904   0.0000000
     0.6666539   0.3333269   0.0000000  |     0.6666539   0.3333269   0.0000000
     0.8333173   0.3333269  -0.1142876  |     0.8333173   0.3333269  -0.1142876
     0.1666635   0.1666635  -0.2285752  |     0.1666635   0.1666635  -0.2285752
     0.0000000   0.0000000  -0.2285752  |     0.0000000   0.0000000  -0.2285752
     0.0000000   0.1666635  -0.1142876  |     0.0000000   0.1666635  -0.1142876
     0.1666635   0.1666635   0.0000000  |     0.1666635   0.1666635   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.1666635   0.0000000  -0.1142876  |     0.1666635   0.0000000  -0.1142876
     0.4999904   0.1666635  -0.2285752  |     0.4999904   0.1666635  -0.2285752
     0.3333269   0.0000000  -0.2285752  |     0.3333269   0.0000000  -0.2285752
     0.3333269   0.1666635  -0.1142876  |     0.3333269   0.1666635  -0.1142876
     0.4999904   0.1666635   0.0000000  |     0.4999904   0.1666635   0.0000000
     0.3333269   0.0000000   0.0000000  |     0.3333269   0.0000000   0.0000000
     0.4999904   0.0000000  -0.1142876  |     0.4999904   0.0000000  -0.1142876
     0.8333173   0.1666635  -0.2285752  |     0.8333173   0.1666635  -0.2285752
     0.6666539   0.0000000  -0.2285752  |     0.6666539   0.0000000  -0.2285752
     0.6666539   0.1666635  -0.1142876  |     0.6666539   0.1666635  -0.1142876
     0.8333173   0.1666635   0.0000000  |     0.8333173   0.1666635   0.0000000
     0.6666539   0.0000000   0.0000000  |     0.6666539   0.0000000   0.0000000
     0.8333173   0.0000000  -0.1142876  |     0.8333173   0.0000000  -0.1142876
     0.4999904   0.3333269   0.0758779  |     0.4999904   0.3333269   0.0758779
 
--- !WARNING
message: |
    Restart of self-consistent calculation need translated wavefunctions.
src_file: m_header.F90
src_line: 3447
...
 
  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the format of wavefunctions (istwfk)
================================================================================
-inwffil : will read wavefunctions from disk file co_LDA_SP_WFK
 initwf : disk file gives npw= 26811 nband=   580 for kpt number=    1
 initwf :   580 bands have been initialized from disk
- newkpt: read input wf with ikpt,npw=   1   26811, make ikpt,npw=   1   53621
 
_setup2: Arith. and geom. avg. npw (full set) are   53621.000   53621.000
 newocc : new Fermi energy is       0.027863 , with nelect=   1043.000000
  Number of bissection calls =  49
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.414 1.272 0.943 0.943 0.213 0.213 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 
       ( number of procs used in dmft ) = 80

       ( current proc is        ) =  0
 
 
 ******************************************
 DFT+DMFT Method is used
 ******************************************
 
 DMFT uses the Continuous Time Quantum Monte Carlo solver
 
 pawpuxinit : for species    2
   number of projectors is   2
 
 pawpuxinit : dmatpuopt=1 
   PAW+U: dens. mat. constructed by projection on atomic wfn inside PAW augm. region(s)
 
 pawpuxinit: WARNING: Check that the first partial wave for lpawu:
                      - Is an atomic eigenfunction  
                      - Is normalized 
                      In other cases, choose dmatpuopt=2
 
   Slater parameters F^0, F^2, F^4 are   0.1470   0.2849   0.1781
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1669E+00  at reduced coord.    0.5000    0.1667    0.0000
,     Minimum=    7.4853E-08  at reduced coord.    0.0000    0.3333    0.3840
,  Integrated=    5.0892E+02
 
================================================================================
 FFT (fine) grid used in SCF cycle:
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 180 180 243
         ecut(hartree)=     80.000   => boxcut(ratio)=   2.01113
 
--- !WARNING
message: |
    Density went too small (lower than xc_denpos) at760681 points
    and was set to xc_denpos=  1.00E-14. Lowest was  -0.17E-04.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
src_file: mkdenpos.F90
src_line: 176
...
 
 
========== LDA+U DATA ===================================================
 
====== For Atom   55, occupations for correlated orbitals. l =   2
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.49680    0.00000   -0.00000   -0.00000    0.00000
     0.00000    0.49609    0.00000    0.00000   -0.00000
    -0.00000    0.00000    0.53360   -0.00000    0.00000
    -0.00000    0.00000   -0.00000    0.49609   -0.00000
     0.00000   -0.00000    0.00000   -0.00000    0.53024
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ****** Psp strength Dij in Ha (atom      1) *****
  -1.33226   0.23177  -0.00000   0.00311  -0.00022   0.00000  -0.00071   0.00005   0.00000  -0.00000   0.00139   0.00033 ...
   0.23177   0.07068   0.00000  -0.00063   0.00004  -0.00000   0.00013  -0.00001  -0.00000   0.00000  -0.00028  -0.00006 ...
  -0.00000   0.00000  -2.26560  -0.00000   0.00000   0.21549   0.00000  -0.00000  -0.00016   0.00260   0.00000  -0.00000 ...
   0.00311  -0.00063  -0.00000  -2.26336   0.00030   0.00000   0.21504  -0.00006  -0.00000  -0.00000   0.00289  -0.00018 ...
  -0.00022   0.00004   0.00000   0.00030  -2.26562  -0.00000  -0.00006   0.21550  -0.00000  -0.00000   0.00010   0.00257 ...
   0.00000  -0.00000   0.21549   0.00000  -0.00000   0.06222  -0.00000   0.00000   0.00003  -0.00047  -0.00000   0.00000 ...
  -0.00071   0.00013   0.00000   0.21504  -0.00006  -0.00000   0.06230   0.00001   0.00000   0.00000  -0.00052   0.00003 ...
   0.00005  -0.00001  -0.00000  -0.00006   0.21550   0.00000   0.00001   0.06222   0.00000   0.00000  -0.00002  -0.00046 ...
   0.00000  -0.00000  -0.00016  -0.00000  -0.00000   0.00003   0.00000   0.00000  -0.47578   0.00020  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00260  -0.00000  -0.00000  -0.00047   0.00000   0.00000   0.00020  -0.47407   0.00000   0.00000 ...
   0.00139  -0.00028   0.00000   0.00289   0.00010  -0.00000  -0.00052  -0.00002  -0.00000   0.00000  -0.47327   0.00012 ...
   0.00033  -0.00006  -0.00000  -0.00018   0.00257   0.00000   0.00003  -0.00046  -0.00000   0.00000   0.00012  -0.47409 ...
   ...  only 12  components have been written...
 
 ****** Psp strength Dij in Ha (atom     55) *****
  -0.83706   0.13703  -0.00000   0.00468   0.00000   0.00000  -0.00096  -0.00000   0.00000  -0.00000  -0.00006   0.00000 ...
   0.13703   0.05444   0.00000  -0.00109  -0.00000  -0.00000   0.00029   0.00000  -0.00000   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -1.76070  -0.00000   0.00000   0.19637   0.00000  -0.00000   0.00000   0.00409   0.00000   0.00000 ...
   0.00468  -0.00109  -0.00000  -1.76077   0.00000   0.00000   0.19637  -0.00000   0.00000  -0.00000   0.00269   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000  -1.76070  -0.00000  -0.00000   0.19637  -0.00000   0.00000  -0.00000   0.00409 ...
   0.00000  -0.00000   0.19637   0.00000  -0.00000   0.02631  -0.00000   0.00000  -0.00000  -0.00081  -0.00000  -0.00000 ...
  -0.00096   0.00029   0.00000   0.19637  -0.00000  -0.00000   0.02631   0.00000  -0.00000   0.00000  -0.00062  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.19637   0.00000   0.00000   0.02631   0.00000  -0.00000   0.00000  -0.00081 ...
   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.37775   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00409  -0.00000   0.00000  -0.00081   0.00000  -0.00000   0.00000  -0.37809   0.00000   0.00000 ...
  -0.00006  -0.00000   0.00000   0.00269  -0.00000  -0.00000  -0.00062   0.00000  -0.00000   0.00000  -0.37684  -0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00409  -0.00000  -0.00000  -0.00081  -0.00000   0.00000  -0.00000  -0.37809 ...
   ...  only 12  components have been written...
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.027853 , with nelect=   1043.000000
  Number of bissection calls =  49
 newocc : computed new occ. numbers for occopt=    3 , spin-unpolarized case.
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000 2.000
 2.000 2.000 2.000 1.415 1.273 0.944 0.944 0.212 0.212 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000
 
 ====================================
 =====  Start of DMFT calculation
 ====================================
 
=> Seed for QMC inside DMFT is dmftqmc_seed=     0
 
                                Log. Freq                 weight
   --ifreq--     1   0.11545141069462E-02   0.10000000000000E+01
   --ifreq--     2   0.34635423208386E-02   0.10000000000000E+01
   --ifreq--     3   0.57725705347310E-02   0.10000000000000E+01
   --ifreq--     4   0.80815987486233E-02   0.10000000000000E+01
   --ifreq--     5   0.10390626962516E-01   0.10000000000000E+01
   --ifreq--     6   0.12699655176408E-01   0.10000000000000E+01
   --ifreq--     7   0.15008683390301E-01   0.10000000000000E+01
   --ifreq--     8   0.17317711604193E-01   0.10000000000000E+01
   --ifreq--     9   0.19626739818085E-01   0.10000000000000E+01
   --ifreq--    10   0.21935768031978E-01   0.10000000000000E+01
   --ifreq--    11   0.24244796245870E-01   0.10000000000000E+01
   --ifreq--    12   0.26553824459762E-01   0.10000000000000E+01
   --ifreq--    13   0.28862852673655E-01   0.10000000000000E+01
   --ifreq--    14   0.31171880887547E-01   0.10000000000000E+01
   --ifreq--    15   0.33480909101440E-01   0.10000000000000E+01
   --ifreq--    16   0.35789937315332E-01   0.10000000000000E+01
   --ifreq--    17   0.38098965529224E-01   0.10000000000000E+01
   --ifreq--    18   0.40407993743117E-01   0.10000000000000E+01
   --ifreq--    19   0.42717021957009E-01   0.10000000000000E+01
   --ifreq--    20   0.45026050170901E-01   0.10000000000000E+01
   --ifreq--    21   0.47335078384794E-01   0.10000000000000E+01
   --ifreq--    22   0.49644106598686E-01   0.10000000000000E+01
   --ifreq--    23   0.51953134812579E-01   0.10000000000000E+01
   --ifreq--    24   0.54262163026471E-01   0.10000000000000E+01
   --ifreq--    25   0.56571191240363E-01   0.10000000000000E+01
   --ifreq--    26   0.58880219454256E-01   0.10000000000000E+01
   --ifreq--    27   0.61189247668148E-01   0.10000000000000E+01
   --ifreq--    28   0.63498275882041E-01   0.10000000000000E+01
   --ifreq--    29   0.65807304095933E-01   0.10000000000000E+01
   --ifreq--    30   0.68116332309825E-01   0.10000000000000E+01
   --ifreq--    31   0.70425360523718E-01   0.10000000000000E+01
   --ifreq--    32   0.72734388737610E-01   0.10000000000000E+01
   --ifreq--    33   0.75043416951503E-01   0.10000000000000E+01
   --ifreq--    34   0.77352445165395E-01   0.10000000000000E+01
   --ifreq--    35   0.79661473379287E-01   0.10000000000000E+01
   --ifreq--    36   0.81970501593180E-01   0.10000000000000E+01
   --ifreq--    37   0.84279529807072E-01   0.10000000000000E+01
   --ifreq--    38   0.86588558020964E-01   0.10000000000000E+01
   --ifreq--    39   0.88897586234857E-01   0.10000000000000E+01
   --ifreq--    40   0.91206614448749E-01   0.10000000000000E+01
   --ifreq--    41   0.93515642662642E-01   0.10000000000000E+01
   --ifreq--    42   0.95824670876534E-01   0.10000000000000E+01
   --ifreq--    43   0.98133699090426E-01   0.10000000000000E+01
   --ifreq--    44   0.10044272730432E+00   0.10000000000000E+01
   --ifreq--    45   0.10275175551821E+00   0.10000000000000E+01
   --ifreq--    46   0.10506078373210E+00   0.10000000000000E+01
   --ifreq--    47   0.10736981194600E+00   0.10000000000000E+01
   --ifreq--    48   0.10967884015989E+00   0.10000000000000E+01
   --ifreq--    49   0.11198786837378E+00   0.10000000000000E+01
   --ifreq--    50   0.11429689658767E+00   0.10000000000000E+01
   --ifreq--    51   0.11660592480157E+00   0.10000000000000E+01
   --ifreq--    52   0.11891495301546E+00   0.10000000000000E+01
   --ifreq--    53   0.12122398122935E+00   0.10000000000000E+01
   --ifreq--    54   0.12353300944324E+00   0.10000000000000E+01
   --ifreq--    55   0.12584203765713E+00   0.10000000000000E+01
   --ifreq--    56   0.12815106587103E+00   0.10000000000000E+01
   --ifreq--    57   0.13046009408492E+00   0.10000000000000E+01
   --ifreq--    58   0.13276912229881E+00   0.10000000000000E+01
   --ifreq--    59   0.13507815051270E+00   0.10000000000000E+01
   --ifreq--    60   0.13738717872660E+00   0.10000000000000E+01
   --ifreq--    61   0.13969620694049E+00   0.10000000000000E+01
   --ifreq--    62   0.14200523515438E+00   0.10000000000000E+01
   --ifreq--    63   0.14431426336827E+00   0.10000000000000E+01
   --ifreq--    64   0.14662329158217E+00   0.10000000000000E+01
   --ifreq--    65   0.14893231979606E+00   0.10000000000000E+01
   --ifreq--    66   0.15124134800995E+00   0.10000000000000E+01
   --ifreq--    67   0.15355037622384E+00   0.10000000000000E+01
   --ifreq--    68   0.15585940443774E+00   0.10000000000000E+01
   --ifreq--    69   0.15816843265163E+00   0.10000000000000E+01
   --ifreq--    70   0.16047746086552E+00   0.10000000000000E+01
   --ifreq--    71   0.16278648907941E+00   0.10000000000000E+01
   --ifreq--    72   0.16509551729331E+00   0.10000000000000E+01
   --ifreq--    73   0.16740454550720E+00   0.10000000000000E+01
   --ifreq--    74   0.16971357372109E+00   0.10000000000000E+01
   --ifreq--    75   0.17202260193498E+00   0.10000000000000E+01
   --ifreq--    76   0.17433163014888E+00   0.10000000000000E+01
   --ifreq--    77   0.17664065836277E+00   0.10000000000000E+01
   --ifreq--    78   0.17894968657666E+00   0.10000000000000E+01
   --ifreq--    79   0.18125871479055E+00   0.10000000000000E+01
   --ifreq--    80   0.18356774300444E+00   0.10000000000000E+01
   --ifreq--    81   0.18587677121834E+00   0.10000000000000E+01
   --ifreq--    82   0.18818579943223E+00   0.10000000000000E+01
   --ifreq--    83   0.19049482764612E+00   0.10000000000000E+01
   --ifreq--    84   0.19280385586001E+00   0.10000000000000E+01
   --ifreq--    85   0.19511288407391E+00   0.10000000000000E+01
   --ifreq--    86   0.19742191228780E+00   0.10000000000000E+01
   --ifreq--    87   0.19973094050169E+00   0.10000000000000E+01
   --ifreq--    88   0.20203996871558E+00   0.10000000000000E+01
   --ifreq--    89   0.20434899692948E+00   0.10000000000000E+01
   --ifreq--    90   0.20665802514337E+00   0.10000000000000E+01
   --ifreq--    91   0.20896705335726E+00   0.10000000000000E+01
   --ifreq--    92   0.21127608157115E+00   0.10000000000000E+01
   --ifreq--    93   0.21358510978505E+00   0.10000000000000E+01
   --ifreq--    94   0.21589413799894E+00   0.10000000000000E+01
   --ifreq--    95   0.21820316621283E+00   0.10000000000000E+01
   --ifreq--    96   0.22051219442672E+00   0.10000000000000E+01
   --ifreq--    97   0.22282122264062E+00   0.10000000000000E+01
   --ifreq--    98   0.22513025085451E+00   0.10000000000000E+01
   --ifreq--    99   0.22743927906840E+00   0.10000000000000E+01
   --ifreq--   100   0.22974830728229E+00   0.10000000000000E+01
   --ifreq--   101   0.23205733549618E+00   0.10000000000000E+01
   --ifreq--   102   0.23436636371008E+00   0.10000000000000E+01
   --ifreq--   103   0.23667539192397E+00   0.10000000000000E+01
   --ifreq--   104   0.23898442013786E+00   0.10000000000000E+01
   --ifreq--   105   0.24129344835175E+00   0.10000000000000E+01
   --ifreq--   106   0.24360247656565E+00   0.10000000000000E+01
   --ifreq--   107   0.24591150477954E+00   0.10000000000000E+01
   --ifreq--   108   0.24822053299343E+00   0.10000000000000E+01
   --ifreq--   109   0.25052956120732E+00   0.10000000000000E+01
   --ifreq--   110   0.25283858942122E+00   0.10000000000000E+01
   --ifreq--   111   0.25514761763511E+00   0.10000000000000E+01
   --ifreq--   112   0.25745664584900E+00   0.10000000000000E+01
   --ifreq--   113   0.25976567406289E+00   0.10000000000000E+01
   --ifreq--   114   0.26207470227679E+00   0.10000000000000E+01
   --ifreq--   115   0.26438373049068E+00   0.10000000000000E+01
   --ifreq--   116   0.26669275870457E+00   0.10000000000000E+01
   --ifreq--   117   0.26900178691846E+00   0.10000000000000E+01
   --ifreq--   118   0.27131081513236E+00   0.10000000000000E+01
   --ifreq--   119   0.27361984334625E+00   0.10000000000000E+01
   --ifreq--   120   0.27592887156014E+00   0.10000000000000E+01
   --ifreq--   121   0.27823789977403E+00   0.10000000000000E+01
   --ifreq--   122   0.28054692798792E+00   0.10000000000000E+01
   --ifreq--   123   0.28285595620182E+00   0.10000000000000E+01
   --ifreq--   124   0.28516498441571E+00   0.10000000000000E+01
   --ifreq--   125   0.28747401262960E+00   0.10000000000000E+01
   --ifreq--   126   0.28978304084349E+00   0.10000000000000E+01
   --ifreq--   127   0.29209206905739E+00   0.10000000000000E+01
   --ifreq--   128   0.29440109727128E+00   0.10000000000000E+01
   --ifreq--   129   0.29671012548517E+00   0.10000000000000E+01
   --ifreq--   130   0.29901915369906E+00   0.10000000000000E+01
   --ifreq--   131   0.30132818191296E+00   0.10000000000000E+01
   --ifreq--   132   0.30363721012685E+00   0.10000000000000E+01
   --ifreq--   133   0.30594623834074E+00   0.10000000000000E+01
   --ifreq--   134   0.30825526655463E+00   0.10000000000000E+01
   --ifreq--   135   0.31056429476853E+00   0.10000000000000E+01
   --ifreq--   136   0.31287332298242E+00   0.10000000000000E+01
   --ifreq--   137   0.31518235119631E+00   0.10000000000000E+01
   --ifreq--   138   0.31749137941020E+00   0.10000000000000E+01
   --ifreq--   139   0.31980040762410E+00   0.10000000000000E+01
   --ifreq--   140   0.32210943583799E+00   0.10000000000000E+01
   --ifreq--   141   0.32441846405188E+00   0.10000000000000E+01
   --ifreq--   142   0.32672749226577E+00   0.10000000000000E+01
   --ifreq--   143   0.32903652047966E+00   0.10000000000000E+01
   --ifreq--   144   0.33134554869356E+00   0.10000000000000E+01
   --ifreq--   145   0.33365457690745E+00   0.10000000000000E+01
   --ifreq--   146   0.33596360512134E+00   0.10000000000000E+01
   --ifreq--   147   0.33827263333523E+00   0.10000000000000E+01
   --ifreq--   148   0.34058166154913E+00   0.10000000000000E+01
   --ifreq--   149   0.34289068976302E+00   0.10000000000000E+01
   --ifreq--   150   0.34519971797691E+00   0.10000000000000E+01
   --ifreq--   151   0.34750874619080E+00   0.10000000000000E+01
   --ifreq--   152   0.34981777440470E+00   0.10000000000000E+01
   --ifreq--   153   0.35212680261859E+00   0.10000000000000E+01
   --ifreq--   154   0.35443583083248E+00   0.10000000000000E+01
   --ifreq--   155   0.35674485904637E+00   0.10000000000000E+01
   --ifreq--   156   0.35905388726027E+00   0.10000000000000E+01
   --ifreq--   157   0.36136291547416E+00   0.10000000000000E+01
   --ifreq--   158   0.36367194368805E+00   0.10000000000000E+01
   --ifreq--   159   0.36598097190194E+00   0.10000000000000E+01
   --ifreq--   160   0.36829000011584E+00   0.10000000000000E+01
   --ifreq--   161   0.37059902832973E+00   0.10000000000000E+01
   --ifreq--   162   0.37290805654362E+00   0.10000000000000E+01
   --ifreq--   163   0.37521708475751E+00   0.10000000000000E+01
   --ifreq--   164   0.37752611297140E+00   0.10000000000000E+01
   --ifreq--   165   0.37983514118530E+00   0.10000000000000E+01
   --ifreq--   166   0.38214416939919E+00   0.10000000000000E+01
   --ifreq--   167   0.38445319761308E+00   0.10000000000000E+01
   --ifreq--   168   0.38676222582697E+00   0.10000000000000E+01
   --ifreq--   169   0.38907125404087E+00   0.10000000000000E+01
   --ifreq--   170   0.39138028225476E+00   0.10000000000000E+01
   --ifreq--   171   0.39368931046865E+00   0.10000000000000E+01
   --ifreq--   172   0.39599833868254E+00   0.10000000000000E+01
   --ifreq--   173   0.39830736689644E+00   0.10000000000000E+01
   --ifreq--   174   0.40061639511033E+00   0.10000000000000E+01
   --ifreq--   175   0.40292542332422E+00   0.10000000000000E+01
   --ifreq--   176   0.40523445153811E+00   0.10000000000000E+01
   --ifreq--   177   0.40754347975201E+00   0.10000000000000E+01
   --ifreq--   178   0.40985250796590E+00   0.10000000000000E+01
   --ifreq--   179   0.41216153617979E+00   0.10000000000000E+01
   --ifreq--   180   0.41447056439368E+00   0.10000000000000E+01
   --ifreq--   181   0.41677959260758E+00   0.10000000000000E+01
   --ifreq--   182   0.41908862082147E+00   0.10000000000000E+01
   --ifreq--   183   0.42139764903536E+00   0.10000000000000E+01
   --ifreq--   184   0.42370667724925E+00   0.10000000000000E+01
   --ifreq--   185   0.42601570546314E+00   0.10000000000000E+01
   --ifreq--   186   0.42832473367704E+00   0.10000000000000E+01
   --ifreq--   187   0.43063376189093E+00   0.10000000000000E+01
   --ifreq--   188   0.43294279010482E+00   0.10000000000000E+01
   --ifreq--   189   0.43525181831871E+00   0.10000000000000E+01
   --ifreq--   190   0.43756084653261E+00   0.10000000000000E+01
   --ifreq--   191   0.43986987474650E+00   0.10000000000000E+01
   --ifreq--   192   0.44217890296039E+00   0.10000000000000E+01
   --ifreq--   193   0.44448793117428E+00   0.10000000000000E+01
   --ifreq--   194   0.44679695938818E+00   0.10000000000000E+01
   --ifreq--   195   0.44910598760207E+00   0.10000000000000E+01
   --ifreq--   196   0.45141501581596E+00   0.10000000000000E+01
   --ifreq--   197   0.45372404402985E+00   0.10000000000000E+01
   --ifreq--   198   0.45603307224375E+00   0.10000000000000E+01
   --ifreq--   199   0.45834210045764E+00   0.10000000000000E+01
   --ifreq--   200   0.46065112867153E+00   0.10000000000000E+01
   --ifreq--   201   0.46296015688542E+00   0.10000000000000E+01
   --ifreq--   202   0.46526918509932E+00   0.10000000000000E+01
   --ifreq--   203   0.46757821331321E+00   0.10000000000000E+01
   --ifreq--   204   0.46988724152710E+00   0.10000000000000E+01
   --ifreq--   205   0.47219626974099E+00   0.10000000000000E+01
   --ifreq--   206   0.47450529795489E+00   0.10000000000000E+01
   --ifreq--   207   0.47681432616878E+00   0.10000000000000E+01
   --ifreq--   208   0.47912335438267E+00   0.10000000000000E+01
   --ifreq--   209   0.48143238259656E+00   0.10000000000000E+01
   --ifreq--   210   0.48374141081045E+00   0.10000000000000E+01
   --ifreq--   211   0.48605043902435E+00   0.10000000000000E+01
   --ifreq--   212   0.48835946723824E+00   0.10000000000000E+01
   --ifreq--   213   0.49066849545213E+00   0.10000000000000E+01
   --ifreq--   214   0.49297752366602E+00   0.10000000000000E+01
   --ifreq--   215   0.49528655187992E+00   0.10000000000000E+01
   --ifreq--   216   0.49759558009381E+00   0.10000000000000E+01
   --ifreq--   217   0.49990460830770E+00   0.10000000000000E+01
   --ifreq--   218   0.50221363652159E+00   0.10000000000000E+01
   --ifreq--   219   0.50452266473549E+00   0.10000000000000E+01
   --ifreq--   220   0.50683169294938E+00   0.10000000000000E+01
   --ifreq--   221   0.50914072116327E+00   0.10000000000000E+01
   --ifreq--   222   0.51144974937716E+00   0.10000000000000E+01
   --ifreq--   223   0.51375877759106E+00   0.10000000000000E+01
   --ifreq--   224   0.51606780580495E+00   0.10000000000000E+01
   --ifreq--   225   0.51837683401884E+00   0.10000000000000E+01
   --ifreq--   226   0.52068586223273E+00   0.10000000000000E+01
   --ifreq--   227   0.52299489044663E+00   0.10000000000000E+01
   --ifreq--   228   0.52530391866052E+00   0.10000000000000E+01
   --ifreq--   229   0.52761294687441E+00   0.10000000000000E+01
   --ifreq--   230   0.52992197508830E+00   0.10000000000000E+01
   --ifreq--   231   0.53223100330219E+00   0.10000000000000E+01
   --ifreq--   232   0.53454003151609E+00   0.10000000000000E+01
   --ifreq--   233   0.53684905972998E+00   0.10000000000000E+01
   --ifreq--   234   0.53915808794387E+00   0.10000000000000E+01
   --ifreq--   235   0.54146711615776E+00   0.10000000000000E+01
   --ifreq--   236   0.54377614437166E+00   0.10000000000000E+01
   --ifreq--   237   0.54608517258555E+00   0.10000000000000E+01
   --ifreq--   238   0.54839420079944E+00   0.10000000000000E+01
   --ifreq--   239   0.55070322901333E+00   0.10000000000000E+01
   --ifreq--   240   0.55301225722723E+00   0.10000000000000E+01
   --ifreq--   241   0.55532128544112E+00   0.10000000000000E+01
   --ifreq--   242   0.55763031365501E+00   0.10000000000000E+01
   --ifreq--   243   0.55993934186890E+00   0.10000000000000E+01
   --ifreq--   244   0.56224837008280E+00   0.10000000000000E+01
   --ifreq--   245   0.56455739829669E+00   0.10000000000000E+01
   --ifreq--   246   0.56686642651058E+00   0.10000000000000E+01
   --ifreq--   247   0.56917545472447E+00   0.10000000000000E+01
   --ifreq--   248   0.57148448293837E+00   0.10000000000000E+01
   --ifreq--   249   0.57379351115226E+00   0.10000000000000E+01
   --ifreq--   250   0.57610253936615E+00   0.10000000000000E+01
   --ifreq--   251   0.57841156758004E+00   0.10000000000000E+01
   --ifreq--   252   0.58072059579393E+00   0.10000000000000E+01
   --ifreq--   253   0.58302962400783E+00   0.10000000000000E+01
   --ifreq--   254   0.58533865222172E+00   0.10000000000000E+01
   --ifreq--   255   0.58764768043561E+00   0.10000000000000E+01
   --ifreq--   256   0.58995670864950E+00   0.10000000000000E+01
   --ifreq--   257   0.59226573686340E+00   0.10000000000000E+01
   --ifreq--   258   0.59457476507729E+00   0.10000000000000E+01
   --ifreq--   259   0.59688379329118E+00   0.10000000000000E+01
   --ifreq--   260   0.59919282150507E+00   0.10000000000000E+01
   --ifreq--   261   0.60150184971897E+00   0.10000000000000E+01
   --ifreq--   262   0.60381087793286E+00   0.10000000000000E+01
   --ifreq--   263   0.60611990614675E+00   0.10000000000000E+01
   --ifreq--   264   0.60842893436064E+00   0.10000000000000E+01
   --ifreq--   265   0.61073796257454E+00   0.10000000000000E+01
   --ifreq--   266   0.61304699078843E+00   0.10000000000000E+01
   --ifreq--   267   0.61535601900232E+00   0.10000000000000E+01
   --ifreq--   268   0.61766504721621E+00   0.10000000000000E+01
   --ifreq--   269   0.61997407543011E+00   0.10000000000000E+01
   --ifreq--   270   0.62228310364400E+00   0.10000000000000E+01
   --ifreq--   271   0.62459213185789E+00   0.10000000000000E+01
   --ifreq--   272   0.62690116007178E+00   0.10000000000000E+01
   --ifreq--   273   0.62921018828567E+00   0.10000000000000E+01
   --ifreq--   274   0.63151921649957E+00   0.10000000000000E+01
   --ifreq--   275   0.63382824471346E+00   0.10000000000000E+01
   --ifreq--   276   0.63613727292735E+00   0.10000000000000E+01
   --ifreq--   277   0.63844630114124E+00   0.10000000000000E+01
   --ifreq--   278   0.64075532935514E+00   0.10000000000000E+01
   --ifreq--   279   0.64306435756903E+00   0.10000000000000E+01
   --ifreq--   280   0.64537338578292E+00   0.10000000000000E+01
   --ifreq--   281   0.64768241399681E+00   0.10000000000000E+01
   --ifreq--   282   0.64999144221071E+00   0.10000000000000E+01
   --ifreq--   283   0.65230047042460E+00   0.10000000000000E+01
   --ifreq--   284   0.65460949863849E+00   0.10000000000000E+01
   --ifreq--   285   0.65691852685238E+00   0.10000000000000E+01
   --ifreq--   286   0.65922755506628E+00   0.10000000000000E+01
   --ifreq--   287   0.66153658328017E+00   0.10000000000000E+01
   --ifreq--   288   0.66384561149406E+00   0.10000000000000E+01
   --ifreq--   289   0.66615463970795E+00   0.10000000000000E+01
   --ifreq--   290   0.66846366792185E+00   0.10000000000000E+01
   --ifreq--   291   0.67077269613574E+00   0.10000000000000E+01
   --ifreq--   292   0.67308172434963E+00   0.10000000000000E+01
   --ifreq--   293   0.67539075256352E+00   0.10000000000000E+01
   --ifreq--   294   0.67769978077741E+00   0.10000000000000E+01
   --ifreq--   295   0.68000880899131E+00   0.10000000000000E+01
   --ifreq--   296   0.68231783720520E+00   0.10000000000000E+01
   --ifreq--   297   0.68462686541909E+00   0.10000000000000E+01
   --ifreq--   298   0.68693589363298E+00   0.10000000000000E+01
   --ifreq--   299   0.68924492184688E+00   0.10000000000000E+01
   --ifreq--   300   0.69155395006077E+00   0.10000000000000E+01
   --ifreq--   301   0.69386297827466E+00   0.10000000000000E+01
   --ifreq--   302   0.69617200648855E+00   0.10000000000000E+01
   --ifreq--   303   0.69848103470245E+00   0.10000000000000E+01
   --ifreq--   304   0.70079006291634E+00   0.10000000000000E+01
   --ifreq--   305   0.70309909113023E+00   0.10000000000000E+01
   --ifreq--   306   0.70540811934412E+00   0.10000000000000E+01
   --ifreq--   307   0.70771714755802E+00   0.10000000000000E+01
   --ifreq--   308   0.71002617577191E+00   0.10000000000000E+01
   --ifreq--   309   0.71233520398580E+00   0.10000000000000E+01
   --ifreq--   310   0.71464423219969E+00   0.10000000000000E+01
   --ifreq--   311   0.71695326041359E+00   0.10000000000000E+01
   --ifreq--   312   0.71926228862748E+00   0.10000000000000E+01
   --ifreq--   313   0.72157131684137E+00   0.10000000000000E+01
   --ifreq--   314   0.72388034505526E+00   0.10000000000000E+01
   --ifreq--   315   0.72618937326915E+00   0.10000000000000E+01
   --ifreq--   316   0.72849840148305E+00   0.10000000000000E+01
   --ifreq--   317   0.73080742969694E+00   0.10000000000000E+01
   --ifreq--   318   0.73311645791083E+00   0.10000000000000E+01
   --ifreq--   319   0.73542548612472E+00   0.10000000000000E+01
   --ifreq--   320   0.73773451433862E+00   0.10000000000000E+01
   --ifreq--   321   0.74004354255251E+00   0.10000000000000E+01
   --ifreq--   322   0.74235257076640E+00   0.10000000000000E+01
   --ifreq--   323   0.74466159898029E+00   0.10000000000000E+01
   --ifreq--   324   0.74697062719419E+00   0.10000000000000E+01
   --ifreq--   325   0.74927965540808E+00   0.10000000000000E+01
   --ifreq--   326   0.75158868362197E+00   0.10000000000000E+01
   --ifreq--   327   0.75389771183586E+00   0.10000000000000E+01
   --ifreq--   328   0.75620674004976E+00   0.10000000000000E+01
   --ifreq--   329   0.75851576826365E+00   0.10000000000000E+01
   --ifreq--   330   0.76082479647754E+00   0.10000000000000E+01
   --ifreq--   331   0.76313382469143E+00   0.10000000000000E+01
   --ifreq--   332   0.76544285290533E+00   0.10000000000000E+01
   --ifreq--   333   0.76775188111922E+00   0.10000000000000E+01
   --ifreq--   334   0.77006090933311E+00   0.10000000000000E+01
   --ifreq--   335   0.77236993754700E+00   0.10000000000000E+01
   --ifreq--   336   0.77467896576090E+00   0.10000000000000E+01
   --ifreq--   337   0.77698799397479E+00   0.10000000000000E+01
   --ifreq--   338   0.77929702218868E+00   0.10000000000000E+01
   --ifreq--   339   0.78160605040257E+00   0.10000000000000E+01
   --ifreq--   340   0.78391507861646E+00   0.10000000000000E+01
   --ifreq--   341   0.78622410683036E+00   0.10000000000000E+01
   --ifreq--   342   0.78853313504425E+00   0.10000000000000E+01
   --ifreq--   343   0.79084216325814E+00   0.10000000000000E+01
   --ifreq--   344   0.79315119147203E+00   0.10000000000000E+01
   --ifreq--   345   0.79546021968593E+00   0.10000000000000E+01
   --ifreq--   346   0.79776924789982E+00   0.10000000000000E+01
   --ifreq--   347   0.80007827611371E+00   0.10000000000000E+01
   --ifreq--   348   0.80238730432760E+00   0.10000000000000E+01
   --ifreq--   349   0.80469633254150E+00   0.10000000000000E+01
   --ifreq--   350   0.80700536075539E+00   0.10000000000000E+01
   --ifreq--   351   0.80931438896928E+00   0.10000000000000E+01
   --ifreq--   352   0.81162341718317E+00   0.10000000000000E+01
   --ifreq--   353   0.81393244539707E+00   0.10000000000000E+01
   --ifreq--   354   0.81624147361096E+00   0.10000000000000E+01
   --ifreq--   355   0.81855050182485E+00   0.10000000000000E+01
   --ifreq--   356   0.82085953003874E+00   0.10000000000000E+01
   --ifreq--   357   0.82316855825264E+00   0.10000000000000E+01
   --ifreq--   358   0.82547758646653E+00   0.10000000000000E+01
   --ifreq--   359   0.82778661468042E+00   0.10000000000000E+01
   --ifreq--   360   0.83009564289431E+00   0.10000000000000E+01
   --ifreq--   361   0.83240467110820E+00   0.10000000000000E+01
   --ifreq--   362   0.83471369932210E+00   0.10000000000000E+01
   --ifreq--   363   0.83702272753599E+00   0.10000000000000E+01
   --ifreq--   364   0.83933175574988E+00   0.10000000000000E+01
   --ifreq--   365   0.84164078396377E+00   0.10000000000000E+01
   --ifreq--   366   0.84394981217767E+00   0.10000000000000E+01
   --ifreq--   367   0.84625884039156E+00   0.10000000000000E+01
   --ifreq--   368   0.84856786860545E+00   0.10000000000000E+01
   --ifreq--   369   0.85087689681934E+00   0.10000000000000E+01
   --ifreq--   370   0.85318592503324E+00   0.10000000000000E+01
   --ifreq--   371   0.85549495324713E+00   0.10000000000000E+01
   --ifreq--   372   0.85780398146102E+00   0.10000000000000E+01
   --ifreq--   373   0.86011300967491E+00   0.10000000000000E+01
   --ifreq--   374   0.86242203788881E+00   0.10000000000000E+01
   --ifreq--   375   0.86473106610270E+00   0.10000000000000E+01
   --ifreq--   376   0.86704009431659E+00   0.10000000000000E+01
   --ifreq--   377   0.86934912253048E+00   0.10000000000000E+01
   --ifreq--   378   0.87165815074438E+00   0.10000000000000E+01
   --ifreq--   379   0.87396717895827E+00   0.10000000000000E+01
   --ifreq--   380   0.87627620717216E+00   0.10000000000000E+01
   --ifreq--   381   0.87858523538605E+00   0.10000000000000E+01
   --ifreq--   382   0.88089426359994E+00   0.10000000000000E+01
   --ifreq--   383   0.88320329181384E+00   0.10000000000000E+01
   --ifreq--   384   0.88551232002773E+00   0.10000000000000E+01
   --ifreq--   385   0.88782134824162E+00   0.10000000000000E+01
   --ifreq--   386   0.89013037645551E+00   0.10000000000000E+01
   --ifreq--   387   0.89243940466941E+00   0.10000000000000E+01
   --ifreq--   388   0.89474843288330E+00   0.10000000000000E+01
   --ifreq--   389   0.89705746109719E+00   0.10000000000000E+01
   --ifreq--   390   0.89936648931108E+00   0.10000000000000E+01
   --ifreq--   391   0.90167551752498E+00   0.10000000000000E+01
   --ifreq--   392   0.90398454573887E+00   0.10000000000000E+01
   --ifreq--   393   0.90629357395276E+00   0.10000000000000E+01
   --ifreq--   394   0.90860260216665E+00   0.10000000000000E+01
   --ifreq--   395   0.91091163038055E+00   0.10000000000000E+01
   --ifreq--   396   0.91322065859444E+00   0.10000000000000E+01
   --ifreq--   397   0.91552968680833E+00   0.10000000000000E+01
   --ifreq--   398   0.91783871502222E+00   0.10000000000000E+01
   --ifreq--   399   0.92014774323612E+00   0.10000000000000E+01
   --ifreq--   400   0.92245677145001E+00   0.10000000000000E+01
   --ifreq--   401   0.92476579966390E+00   0.10000000000000E+01
   --ifreq--   402   0.92707482787779E+00   0.10000000000000E+01
   --ifreq--   403   0.92938385609168E+00   0.10000000000000E+01
   --ifreq--   404   0.93169288430558E+00   0.10000000000000E+01
   --ifreq--   405   0.93400191251947E+00   0.10000000000000E+01
   --ifreq--   406   0.93631094073336E+00   0.10000000000000E+01
   --ifreq--   407   0.93861996894725E+00   0.10000000000000E+01
   --ifreq--   408   0.94092899716115E+00   0.10000000000000E+01
   --ifreq--   409   0.94323802537504E+00   0.10000000000000E+01
   --ifreq--   410   0.94554705358893E+00   0.10000000000000E+01
   --ifreq--   411   0.94785608180282E+00   0.10000000000000E+01
   --ifreq--   412   0.95016511001672E+00   0.10000000000000E+01
   --ifreq--   413   0.95247413823061E+00   0.10000000000000E+01
   --ifreq--   414   0.95478316644450E+00   0.10000000000000E+01
   --ifreq--   415   0.95709219465839E+00   0.10000000000000E+01
   --ifreq--   416   0.95940122287229E+00   0.10000000000000E+01
   --ifreq--   417   0.96171025108618E+00   0.10000000000000E+01
   --ifreq--   418   0.96401927930007E+00   0.10000000000000E+01
   --ifreq--   419   0.96632830751396E+00   0.10000000000000E+01
   --ifreq--   420   0.96863733572786E+00   0.10000000000000E+01
   --ifreq--   421   0.97094636394175E+00   0.10000000000000E+01
   --ifreq--   422   0.97325539215564E+00   0.10000000000000E+01
   --ifreq--   423   0.97556442036953E+00   0.10000000000000E+01
   --ifreq--   424   0.97787344858342E+00   0.10000000000000E+01
   --ifreq--   425   0.98018247679732E+00   0.10000000000000E+01
   --ifreq--   426   0.98249150501121E+00   0.10000000000000E+01
   --ifreq--   427   0.98480053322510E+00   0.10000000000000E+01
   --ifreq--   428   0.98710956143899E+00   0.10000000000000E+01
   --ifreq--   429   0.98941858965289E+00   0.10000000000000E+01
   --ifreq--   430   0.99172761786678E+00   0.10000000000000E+01
   --ifreq--   431   0.99403664608067E+00   0.10000000000000E+01
   --ifreq--   432   0.99634567429456E+00   0.10000000000000E+01
   --ifreq--   433   0.99865470250846E+00   0.10000000000000E+01
   --ifreq--   434   0.10009637307223E+01   0.10000000000000E+01
   --ifreq--   435   0.10032727589362E+01   0.10000000000000E+01
   --ifreq--   436   0.10055817871501E+01   0.10000000000000E+01
   --ifreq--   437   0.10078908153640E+01   0.10000000000000E+01
   --ifreq--   438   0.10101998435779E+01   0.10000000000000E+01
   --ifreq--   439   0.10125088717918E+01   0.10000000000000E+01
   --ifreq--   440   0.10148179000057E+01   0.10000000000000E+01
   --ifreq--   441   0.10171269282196E+01   0.10000000000000E+01
   --ifreq--   442   0.10194359564335E+01   0.10000000000000E+01
   --ifreq--   443   0.10217449846474E+01   0.10000000000000E+01
   --ifreq--   444   0.10240540128613E+01   0.10000000000000E+01
   --ifreq--   445   0.10263630410752E+01   0.10000000000000E+01
   --ifreq--   446   0.10286720692891E+01   0.10000000000000E+01
   --ifreq--   447   0.10309810975029E+01   0.10000000000000E+01
   --ifreq--   448   0.10332901257168E+01   0.10000000000000E+01
   --ifreq--   449   0.10355991539307E+01   0.10000000000000E+01
   --ifreq--   450   0.10379081821446E+01   0.10000000000000E+01
   --ifreq--   451   0.10402172103585E+01   0.10000000000000E+01
   --ifreq--   452   0.10425262385724E+01   0.10000000000000E+01
   --ifreq--   453   0.10448352667863E+01   0.10000000000000E+01
   --ifreq--   454   0.10471442950002E+01   0.10000000000000E+01
   --ifreq--   455   0.10494533232141E+01   0.10000000000000E+01
   --ifreq--   456   0.10517623514280E+01   0.10000000000000E+01
   --ifreq--   457   0.10540713796419E+01   0.10000000000000E+01
   --ifreq--   458   0.10563804078558E+01   0.10000000000000E+01
   --ifreq--   459   0.10586894360697E+01   0.10000000000000E+01
   --ifreq--   460   0.10609984642836E+01   0.10000000000000E+01
   --ifreq--   461   0.10633074924974E+01   0.10000000000000E+01
   --ifreq--   462   0.10656165207113E+01   0.10000000000000E+01
   --ifreq--   463   0.10679255489252E+01   0.10000000000000E+01
   --ifreq--   464   0.10702345771391E+01   0.10000000000000E+01
   --ifreq--   465   0.10725436053530E+01   0.10000000000000E+01
   --ifreq--   466   0.10748526335669E+01   0.10000000000000E+01
   --ifreq--   467   0.10771616617808E+01   0.10000000000000E+01
   --ifreq--   468   0.10794706899947E+01   0.10000000000000E+01
   --ifreq--   469   0.10817797182086E+01   0.10000000000000E+01
   --ifreq--   470   0.10840887464225E+01   0.10000000000000E+01
   --ifreq--   471   0.10863977746364E+01   0.10000000000000E+01
   --ifreq--   472   0.10887068028503E+01   0.10000000000000E+01
   --ifreq--   473   0.10910158310642E+01   0.10000000000000E+01
   --ifreq--   474   0.10933248592780E+01   0.10000000000000E+01
   --ifreq--   475   0.10956338874919E+01   0.10000000000000E+01
   --ifreq--   476   0.10979429157058E+01   0.10000000000000E+01
   --ifreq--   477   0.11002519439197E+01   0.10000000000000E+01
   --ifreq--   478   0.11025609721336E+01   0.10000000000000E+01
   --ifreq--   479   0.11048700003475E+01   0.10000000000000E+01
   --ifreq--   480   0.11071790285614E+01   0.10000000000000E+01
   --ifreq--   481   0.11094880567753E+01   0.10000000000000E+01
   --ifreq--   482   0.11117970849892E+01   0.10000000000000E+01
   --ifreq--   483   0.11141061132031E+01   0.10000000000000E+01
   --ifreq--   484   0.11164151414170E+01   0.10000000000000E+01
   --ifreq--   485   0.11187241696309E+01   0.10000000000000E+01
   --ifreq--   486   0.11210331978448E+01   0.10000000000000E+01
   --ifreq--   487   0.11233422260586E+01   0.10000000000000E+01
   --ifreq--   488   0.11256512542725E+01   0.10000000000000E+01
   --ifreq--   489   0.11279602824864E+01   0.10000000000000E+01
   --ifreq--   490   0.11302693107003E+01   0.10000000000000E+01
   --ifreq--   491   0.11325783389142E+01   0.10000000000000E+01
   --ifreq--   492   0.11348873671281E+01   0.10000000000000E+01
   --ifreq--   493   0.11371963953420E+01   0.10000000000000E+01
   --ifreq--   494   0.11395054235559E+01   0.10000000000000E+01
   --ifreq--   495   0.11418144517698E+01   0.10000000000000E+01
   --ifreq--   496   0.11441234799837E+01   0.10000000000000E+01
   --ifreq--   497   0.11464325081976E+01   0.10000000000000E+01
   --ifreq--   498   0.11487415364115E+01   0.10000000000000E+01
   --ifreq--   499   0.11510505646254E+01   0.10000000000000E+01
   --ifreq--   500   0.11533595928392E+01   0.10000000000000E+01
   --ifreq--   501   0.11556686210531E+01   0.10000000000000E+01
   --ifreq--   502   0.11579776492670E+01   0.10000000000000E+01
   --ifreq--   503   0.11602866774809E+01   0.10000000000000E+01
   --ifreq--   504   0.11625957056948E+01   0.10000000000000E+01
   --ifreq--   505   0.11649047339087E+01   0.10000000000000E+01
   --ifreq--   506   0.11672137621226E+01   0.10000000000000E+01
   --ifreq--   507   0.11695227903365E+01   0.10000000000000E+01
   --ifreq--   508   0.11718318185504E+01   0.10000000000000E+01
   --ifreq--   509   0.11741408467643E+01   0.10000000000000E+01
   --ifreq--   510   0.11764498749782E+01   0.10000000000000E+01
   --ifreq--   511   0.11787589031921E+01   0.10000000000000E+01
   --ifreq--   512   0.11810679314060E+01   0.10000000000000E+01
   --ifreq--   513   0.11833769596198E+01   0.10000000000000E+01
   --ifreq--   514   0.11856859878337E+01   0.10000000000000E+01
   --ifreq--   515   0.11879950160476E+01   0.10000000000000E+01
   --ifreq--   516   0.11903040442615E+01   0.10000000000000E+01
   --ifreq--   517   0.11926130724754E+01   0.10000000000000E+01
   --ifreq--   518   0.11949221006893E+01   0.10000000000000E+01
   --ifreq--   519   0.11972311289032E+01   0.10000000000000E+01
   --ifreq--   520   0.11995401571171E+01   0.10000000000000E+01
   --ifreq--   521   0.12018491853310E+01   0.10000000000000E+01
   --ifreq--   522   0.12041582135449E+01   0.10000000000000E+01
   --ifreq--   523   0.12064672417588E+01   0.10000000000000E+01
   --ifreq--   524   0.12087762699727E+01   0.10000000000000E+01
   --ifreq--   525   0.12110852981866E+01   0.10000000000000E+01
   --ifreq--   526   0.12133943264004E+01   0.10000000000000E+01
   --ifreq--   527   0.12157033546143E+01   0.10000000000000E+01
   --ifreq--   528   0.12180123828282E+01   0.10000000000000E+01
   --ifreq--   529   0.12203214110421E+01   0.10000000000000E+01
   --ifreq--   530   0.12226304392560E+01   0.10000000000000E+01
   --ifreq--   531   0.12249394674699E+01   0.10000000000000E+01
   --ifreq--   532   0.12272484956838E+01   0.10000000000000E+01
   --ifreq--   533   0.12295575238977E+01   0.10000000000000E+01
   --ifreq--   534   0.12318665521116E+01   0.10000000000000E+01
   --ifreq--   535   0.12341755803255E+01   0.10000000000000E+01
   --ifreq--   536   0.12364846085394E+01   0.10000000000000E+01
   --ifreq--   537   0.12387936367533E+01   0.10000000000000E+01
   --ifreq--   538   0.12411026649672E+01   0.10000000000000E+01
   --ifreq--   539   0.12434116931810E+01   0.10000000000000E+01
   --ifreq--   540   0.12457207213949E+01   0.10000000000000E+01
   --ifreq--   541   0.12480297496088E+01   0.10000000000000E+01
   --ifreq--   542   0.12503387778227E+01   0.10000000000000E+01
   --ifreq--   543   0.12526478060366E+01   0.10000000000000E+01
   --ifreq--   544   0.12549568342505E+01   0.10000000000000E+01
   --ifreq--   545   0.12572658624644E+01   0.10000000000000E+01
   --ifreq--   546   0.12595748906783E+01   0.10000000000000E+01
   --ifreq--   547   0.12618839188922E+01   0.10000000000000E+01
   --ifreq--   548   0.12641929471061E+01   0.10000000000000E+01
   --ifreq--   549   0.12665019753200E+01   0.10000000000000E+01
   --ifreq--   550   0.12688110035339E+01   0.10000000000000E+01
   --ifreq--   551   0.12711200317478E+01   0.10000000000000E+01
   --ifreq--   552   0.12734290599617E+01   0.10000000000000E+01
   --ifreq--   553   0.12757380881755E+01   0.10000000000000E+01
   --ifreq--   554   0.12780471163894E+01   0.10000000000000E+01
   --ifreq--   555   0.12803561446033E+01   0.10000000000000E+01
   --ifreq--   556   0.12826651728172E+01   0.10000000000000E+01
   --ifreq--   557   0.12849742010311E+01   0.10000000000000E+01
   --ifreq--   558   0.12872832292450E+01   0.10000000000000E+01
   --ifreq--   559   0.12895922574589E+01   0.10000000000000E+01
   --ifreq--   560   0.12919012856728E+01   0.10000000000000E+01
   --ifreq--   561   0.12942103138867E+01   0.10000000000000E+01
   --ifreq--   562   0.12965193421006E+01   0.10000000000000E+01
   --ifreq--   563   0.12988283703145E+01   0.10000000000000E+01
   --ifreq--   564   0.13011373985284E+01   0.10000000000000E+01
   --ifreq--   565   0.13034464267423E+01   0.10000000000000E+01
   --ifreq--   566   0.13057554549561E+01   0.10000000000000E+01
   --ifreq--   567   0.13080644831700E+01   0.10000000000000E+01
   --ifreq--   568   0.13103735113839E+01   0.10000000000000E+01
   --ifreq--   569   0.13126825395978E+01   0.10000000000000E+01
   --ifreq--   570   0.13149915678117E+01   0.10000000000000E+01
   --ifreq--   571   0.13173005960256E+01   0.10000000000000E+01
   --ifreq--   572   0.13196096242395E+01   0.10000000000000E+01
   --ifreq--   573   0.13219186524534E+01   0.10000000000000E+01
   --ifreq--   574   0.13242276806673E+01   0.10000000000000E+01
   --ifreq--   575   0.13265367088812E+01   0.10000000000000E+01
   --ifreq--   576   0.13288457370951E+01   0.10000000000000E+01
   --ifreq--   577   0.13311547653090E+01   0.10000000000000E+01
   --ifreq--   578   0.13334637935229E+01   0.10000000000000E+01
   --ifreq--   579   0.13357728217367E+01   0.10000000000000E+01
   --ifreq--   580   0.13380818499506E+01   0.10000000000000E+01
   --ifreq--   581   0.13403908781645E+01   0.10000000000000E+01
   --ifreq--   582   0.13426999063784E+01   0.10000000000000E+01
   --ifreq--   583   0.13450089345923E+01   0.10000000000000E+01
   --ifreq--   584   0.13473179628062E+01   0.10000000000000E+01
   --ifreq--   585   0.13496269910201E+01   0.10000000000000E+01
   --ifreq--   586   0.13519360192340E+01   0.10000000000000E+01
   --ifreq--   587   0.13542450474479E+01   0.10000000000000E+01
   --ifreq--   588   0.13565540756618E+01   0.10000000000000E+01
   --ifreq--   589   0.13588631038757E+01   0.10000000000000E+01
   --ifreq--   590   0.13611721320896E+01   0.10000000000000E+01
   --ifreq--   591   0.13634811603035E+01   0.10000000000000E+01
   --ifreq--   592   0.13657901885173E+01   0.10000000000000E+01
   --ifreq--   593   0.13680992167312E+01   0.10000000000000E+01
   --ifreq--   594   0.13704082449451E+01   0.10000000000000E+01
   --ifreq--   595   0.13727172731590E+01   0.10000000000000E+01
   --ifreq--   596   0.13750263013729E+01   0.10000000000000E+01
   --ifreq--   597   0.13773353295868E+01   0.10000000000000E+01
   --ifreq--   598   0.13796443578007E+01   0.10000000000000E+01
   --ifreq--   599   0.13819533860146E+01   0.10000000000000E+01
   --ifreq--   600   0.13842624142285E+01   0.10000000000000E+01
   --ifreq--   601   0.13865714424424E+01   0.10000000000000E+01
   --ifreq--   602   0.13888804706563E+01   0.10000000000000E+01
   --ifreq--   603   0.13911894988702E+01   0.10000000000000E+01
   --ifreq--   604   0.13934985270841E+01   0.10000000000000E+01
   --ifreq--   605   0.13958075552979E+01   0.10000000000000E+01
   --ifreq--   606   0.13981165835118E+01   0.10000000000000E+01
   --ifreq--   607   0.14004256117257E+01   0.10000000000000E+01
   --ifreq--   608   0.14027346399396E+01   0.10000000000000E+01
   --ifreq--   609   0.14050436681535E+01   0.10000000000000E+01
   --ifreq--   610   0.14073526963674E+01   0.10000000000000E+01
   --ifreq--   611   0.14096617245813E+01   0.10000000000000E+01
   --ifreq--   612   0.14119707527952E+01   0.10000000000000E+01
   --ifreq--   613   0.14142797810091E+01   0.10000000000000E+01
   --ifreq--   614   0.14165888092230E+01   0.10000000000000E+01
   --ifreq--   615   0.14188978374369E+01   0.10000000000000E+01
   --ifreq--   616   0.14212068656508E+01   0.10000000000000E+01
   --ifreq--   617   0.14235158938647E+01   0.10000000000000E+01
   --ifreq--   618   0.14258249220785E+01   0.10000000000000E+01
   --ifreq--   619   0.14281339502924E+01   0.10000000000000E+01
   --ifreq--   620   0.14304429785063E+01   0.10000000000000E+01
   --ifreq--   621   0.14327520067202E+01   0.10000000000000E+01
   --ifreq--   622   0.14350610349341E+01   0.10000000000000E+01
   --ifreq--   623   0.14373700631480E+01   0.10000000000000E+01
   --ifreq--   624   0.14396790913619E+01   0.10000000000000E+01
   --ifreq--   625   0.14419881195758E+01   0.10000000000000E+01
   --ifreq--   626   0.14442971477897E+01   0.10000000000000E+01
   --ifreq--   627   0.14466061760036E+01   0.10000000000000E+01
   --ifreq--   628   0.14489152042175E+01   0.10000000000000E+01
   --ifreq--   629   0.14512242324314E+01   0.10000000000000E+01
   --ifreq--   630   0.14535332606453E+01   0.10000000000000E+01
   --ifreq--   631   0.14558422888591E+01   0.10000000000000E+01
   --ifreq--   632   0.14581513170730E+01   0.10000000000000E+01
   --ifreq--   633   0.14604603452869E+01   0.10000000000000E+01
   --ifreq--   634   0.14627693735008E+01   0.10000000000000E+01
   --ifreq--   635   0.14650784017147E+01   0.10000000000000E+01
   --ifreq--   636   0.14673874299286E+01   0.10000000000000E+01
   --ifreq--   637   0.14696964581425E+01   0.10000000000000E+01
   --ifreq--   638   0.14720054863564E+01   0.10000000000000E+01
   --ifreq--   639   0.14743145145703E+01   0.10000000000000E+01
   --ifreq--   640   0.14766235427842E+01   0.10000000000000E+01
   --ifreq--   641   0.14789325709981E+01   0.10000000000000E+01
   --ifreq--   642   0.14812415992120E+01   0.10000000000000E+01
   --ifreq--   643   0.14835506274259E+01   0.10000000000000E+01
   --ifreq--   644   0.14858596556397E+01   0.10000000000000E+01
   --ifreq--   645   0.14881686838536E+01   0.10000000000000E+01
   --ifreq--   646   0.14904777120675E+01   0.10000000000000E+01
   --ifreq--   647   0.14927867402814E+01   0.10000000000000E+01
   --ifreq--   648   0.14950957684953E+01   0.10000000000000E+01
   --ifreq--   649   0.14974047967092E+01   0.10000000000000E+01
   --ifreq--   650   0.14997138249231E+01   0.10000000000000E+01
   --ifreq--   651   0.15020228531370E+01   0.10000000000000E+01
   --ifreq--   652   0.15043318813509E+01   0.10000000000000E+01
   --ifreq--   653   0.15066409095648E+01   0.10000000000000E+01
   --ifreq--   654   0.15089499377787E+01   0.10000000000000E+01
   --ifreq--   655   0.15112589659926E+01   0.10000000000000E+01
   --ifreq--   656   0.15135679942065E+01   0.10000000000000E+01
   --ifreq--   657   0.15158770224204E+01   0.10000000000000E+01
   --ifreq--   658   0.15181860506342E+01   0.10000000000000E+01
   --ifreq--   659   0.15204950788481E+01   0.10000000000000E+01
   --ifreq--   660   0.15228041070620E+01   0.10000000000000E+01
   --ifreq--   661   0.15251131352759E+01   0.10000000000000E+01
   --ifreq--   662   0.15274221634898E+01   0.10000000000000E+01
   --ifreq--   663   0.15297311917037E+01   0.10000000000000E+01
   --ifreq--   664   0.15320402199176E+01   0.10000000000000E+01
   --ifreq--   665   0.15343492481315E+01   0.10000000000000E+01
   --ifreq--   666   0.15366582763454E+01   0.10000000000000E+01
   --ifreq--   667   0.15389673045593E+01   0.10000000000000E+01
   --ifreq--   668   0.15412763327732E+01   0.10000000000000E+01
   --ifreq--   669   0.15435853609871E+01   0.10000000000000E+01
   --ifreq--   670   0.15458943892010E+01   0.10000000000000E+01
   --ifreq--   671   0.15482034174148E+01   0.10000000000000E+01
   --ifreq--   672   0.15505124456287E+01   0.10000000000000E+01
   --ifreq--   673   0.15528214738426E+01   0.10000000000000E+01
   --ifreq--   674   0.15551305020565E+01   0.10000000000000E+01
   --ifreq--   675   0.15574395302704E+01   0.10000000000000E+01
   --ifreq--   676   0.15597485584843E+01   0.10000000000000E+01
   --ifreq--   677   0.15620575866982E+01   0.10000000000000E+01
   --ifreq--   678   0.15643666149121E+01   0.10000000000000E+01
   --ifreq--   679   0.15666756431260E+01   0.10000000000000E+01
   --ifreq--   680   0.15689846713399E+01   0.10000000000000E+01
   --ifreq--   681   0.15712936995538E+01   0.10000000000000E+01
   --ifreq--   682   0.15736027277677E+01   0.10000000000000E+01
   --ifreq--   683   0.15759117559816E+01   0.10000000000000E+01
   --ifreq--   684   0.15782207841954E+01   0.10000000000000E+01
   --ifreq--   685   0.15805298124093E+01   0.10000000000000E+01
   --ifreq--   686   0.15828388406232E+01   0.10000000000000E+01
   --ifreq--   687   0.15851478688371E+01   0.10000000000000E+01
   --ifreq--   688   0.15874568970510E+01   0.10000000000000E+01
   --ifreq--   689   0.15897659252649E+01   0.10000000000000E+01
   --ifreq--   690   0.15920749534788E+01   0.10000000000000E+01
   --ifreq--   691   0.15943839816927E+01   0.10000000000000E+01
   --ifreq--   692   0.15966930099066E+01   0.10000000000000E+01
   --ifreq--   693   0.15990020381205E+01   0.10000000000000E+01
   --ifreq--   694   0.16013110663344E+01   0.10000000000000E+01
   --ifreq--   695   0.16036200945483E+01   0.10000000000000E+01
   --ifreq--   696   0.16059291227622E+01   0.10000000000000E+01
   --ifreq--   697   0.16082381509760E+01   0.10000000000000E+01
   --ifreq--   698   0.16105471791899E+01   0.10000000000000E+01
   --ifreq--   699   0.16128562074038E+01   0.10000000000000E+01
   --ifreq--   700   0.16151652356177E+01   0.10000000000000E+01
   --ifreq--   701   0.16174742638316E+01   0.10000000000000E+01
   --ifreq--   702   0.16197832920455E+01   0.10000000000000E+01
   --ifreq--   703   0.16220923202594E+01   0.10000000000000E+01
   --ifreq--   704   0.16244013484733E+01   0.10000000000000E+01
   --ifreq--   705   0.16267103766872E+01   0.10000000000000E+01
   --ifreq--   706   0.16290194049011E+01   0.10000000000000E+01
   --ifreq--   707   0.16313284331150E+01   0.10000000000000E+01
   --ifreq--   708   0.16336374613289E+01   0.10000000000000E+01
   --ifreq--   709   0.16359464895428E+01   0.10000000000000E+01
   --ifreq--   710   0.16382555177566E+01   0.10000000000000E+01
   --ifreq--   711   0.16405645459705E+01   0.10000000000000E+01
   --ifreq--   712   0.16428735741844E+01   0.10000000000000E+01
   --ifreq--   713   0.16451826023983E+01   0.10000000000000E+01
   --ifreq--   714   0.16474916306122E+01   0.10000000000000E+01
   --ifreq--   715   0.16498006588261E+01   0.10000000000000E+01
   --ifreq--   716   0.16521096870400E+01   0.10000000000000E+01
   --ifreq--   717   0.16544187152539E+01   0.10000000000000E+01
   --ifreq--   718   0.16567277434678E+01   0.10000000000000E+01
   --ifreq--   719   0.16590367716817E+01   0.10000000000000E+01
   --ifreq--   720   0.16613457998956E+01   0.10000000000000E+01
   --ifreq--   721   0.16636548281095E+01   0.10000000000000E+01
   --ifreq--   722   0.16659638563234E+01   0.10000000000000E+01
   --ifreq--   723   0.16682728845372E+01   0.10000000000000E+01
   --ifreq--   724   0.16705819127511E+01   0.10000000000000E+01
   --ifreq--   725   0.16728909409650E+01   0.10000000000000E+01
   --ifreq--   726   0.16751999691789E+01   0.10000000000000E+01
   --ifreq--   727   0.16775089973928E+01   0.10000000000000E+01
   --ifreq--   728   0.16798180256067E+01   0.10000000000000E+01
   --ifreq--   729   0.16821270538206E+01   0.10000000000000E+01
   --ifreq--   730   0.16844360820345E+01   0.10000000000000E+01
   --ifreq--   731   0.16867451102484E+01   0.10000000000000E+01
   --ifreq--   732   0.16890541384623E+01   0.10000000000000E+01
   --ifreq--   733   0.16913631666762E+01   0.10000000000000E+01
   --ifreq--   734   0.16936721948901E+01   0.10000000000000E+01
   --ifreq--   735   0.16959812231040E+01   0.10000000000000E+01
   --ifreq--   736   0.16982902513178E+01   0.10000000000000E+01
   --ifreq--   737   0.17005992795317E+01   0.10000000000000E+01
   --ifreq--   738   0.17029083077456E+01   0.10000000000000E+01
   --ifreq--   739   0.17052173359595E+01   0.10000000000000E+01
   --ifreq--   740   0.17075263641734E+01   0.10000000000000E+01
   --ifreq--   741   0.17098353923873E+01   0.10000000000000E+01
   --ifreq--   742   0.17121444206012E+01   0.10000000000000E+01
   --ifreq--   743   0.17144534488151E+01   0.10000000000000E+01
   --ifreq--   744   0.17167624770290E+01   0.10000000000000E+01
   --ifreq--   745   0.17190715052429E+01   0.10000000000000E+01
   --ifreq--   746   0.17213805334568E+01   0.10000000000000E+01
   --ifreq--   747   0.17236895616707E+01   0.10000000000000E+01
   --ifreq--   748   0.17259985898846E+01   0.10000000000000E+01
   --ifreq--   749   0.17283076180984E+01   0.10000000000000E+01
   --ifreq--   750   0.17306166463123E+01   0.10000000000000E+01
   --ifreq--   751   0.17329256745262E+01   0.10000000000000E+01
   --ifreq--   752   0.17352347027401E+01   0.10000000000000E+01
   --ifreq--   753   0.17375437309540E+01   0.10000000000000E+01
   --ifreq--   754   0.17398527591679E+01   0.10000000000000E+01
   --ifreq--   755   0.17421617873818E+01   0.10000000000000E+01
   --ifreq--   756   0.17444708155957E+01   0.10000000000000E+01
   --ifreq--   757   0.17467798438096E+01   0.10000000000000E+01
   --ifreq--   758   0.17490888720235E+01   0.10000000000000E+01
   --ifreq--   759   0.17513979002374E+01   0.10000000000000E+01
   --ifreq--   760   0.17537069284513E+01   0.10000000000000E+01
   --ifreq--   761   0.17560159566652E+01   0.10000000000000E+01
   --ifreq--   762   0.17583249848791E+01   0.10000000000000E+01
   --ifreq--   763   0.17606340130929E+01   0.10000000000000E+01
   --ifreq--   764   0.17629430413068E+01   0.10000000000000E+01
   --ifreq--   765   0.17652520695207E+01   0.10000000000000E+01
   --ifreq--   766   0.17675610977346E+01   0.10000000000000E+01
   --ifreq--   767   0.17698701259485E+01   0.10000000000000E+01
   --ifreq--   768   0.17721791541624E+01   0.10000000000000E+01
   --ifreq--   769   0.17744881823763E+01   0.10000000000000E+01
   --ifreq--   770   0.17767972105902E+01   0.10000000000000E+01
   --ifreq--   771   0.17791062388041E+01   0.10000000000000E+01
   --ifreq--   772   0.17814152670180E+01   0.10000000000000E+01
   --ifreq--   773   0.17837242952319E+01   0.10000000000000E+01
   --ifreq--   774   0.17860333234458E+01   0.10000000000000E+01
   --ifreq--   775   0.17883423516597E+01   0.10000000000000E+01
   --ifreq--   776   0.17906513798735E+01   0.10000000000000E+01
   --ifreq--   777   0.17929604080874E+01   0.10000000000000E+01
   --ifreq--   778   0.17952694363013E+01   0.10000000000000E+01
   --ifreq--   779   0.17975784645152E+01   0.10000000000000E+01
   --ifreq--   780   0.17998874927291E+01   0.10000000000000E+01
   --ifreq--   781   0.18021965209430E+01   0.10000000000000E+01
   --ifreq--   782   0.18045055491569E+01   0.10000000000000E+01
   --ifreq--   783   0.18068145773708E+01   0.10000000000000E+01
   --ifreq--   784   0.18091236055847E+01   0.10000000000000E+01
   --ifreq--   785   0.18114326337986E+01   0.10000000000000E+01
   --ifreq--   786   0.18137416620125E+01   0.10000000000000E+01
   --ifreq--   787   0.18160506902264E+01   0.10000000000000E+01
   --ifreq--   788   0.18183597184403E+01   0.10000000000000E+01
   --ifreq--   789   0.18206687466541E+01   0.10000000000000E+01
   --ifreq--   790   0.18229777748680E+01   0.10000000000000E+01
   --ifreq--   791   0.18252868030819E+01   0.10000000000000E+01
   --ifreq--   792   0.18275958312958E+01   0.10000000000000E+01
   --ifreq--   793   0.18299048595097E+01   0.10000000000000E+01
   --ifreq--   794   0.18322138877236E+01   0.10000000000000E+01
   --ifreq--   795   0.18345229159375E+01   0.10000000000000E+01
   --ifreq--   796   0.18368319441514E+01   0.10000000000000E+01
   --ifreq--   797   0.18391409723653E+01   0.10000000000000E+01
   --ifreq--   798   0.18414500005792E+01   0.10000000000000E+01
   --ifreq--   799   0.18437590287931E+01   0.10000000000000E+01
   --ifreq--   800   0.18460680570070E+01   0.10000000000000E+01
   --ifreq--   801   0.18483770852209E+01   0.10000000000000E+01
   --ifreq--   802   0.18506861134347E+01   0.10000000000000E+01
   --ifreq--   803   0.18529951416486E+01   0.10000000000000E+01
   --ifreq--   804   0.18553041698625E+01   0.10000000000000E+01
   --ifreq--   805   0.18576131980764E+01   0.10000000000000E+01
   --ifreq--   806   0.18599222262903E+01   0.10000000000000E+01
   --ifreq--   807   0.18622312545042E+01   0.10000000000000E+01
   --ifreq--   808   0.18645402827181E+01   0.10000000000000E+01
   --ifreq--   809   0.18668493109320E+01   0.10000000000000E+01
   --ifreq--   810   0.18691583391459E+01   0.10000000000000E+01
   --ifreq--   811   0.18714673673598E+01   0.10000000000000E+01
   --ifreq--   812   0.18737763955737E+01   0.10000000000000E+01
   --ifreq--   813   0.18760854237876E+01   0.10000000000000E+01
   --ifreq--   814   0.18783944520015E+01   0.10000000000000E+01
   --ifreq--   815   0.18807034802153E+01   0.10000000000000E+01
   --ifreq--   816   0.18830125084292E+01   0.10000000000000E+01
   --ifreq--   817   0.18853215366431E+01   0.10000000000000E+01
   --ifreq--   818   0.18876305648570E+01   0.10000000000000E+01
   --ifreq--   819   0.18899395930709E+01   0.10000000000000E+01
   --ifreq--   820   0.18922486212848E+01   0.10000000000000E+01
   --ifreq--   821   0.18945576494987E+01   0.10000000000000E+01
   --ifreq--   822   0.18968666777126E+01   0.10000000000000E+01
   --ifreq--   823   0.18991757059265E+01   0.10000000000000E+01
   --ifreq--   824   0.19014847341404E+01   0.10000000000000E+01
   --ifreq--   825   0.19037937623543E+01   0.10000000000000E+01
   --ifreq--   826   0.19061027905682E+01   0.10000000000000E+01
   --ifreq--   827   0.19084118187821E+01   0.10000000000000E+01
   --ifreq--   828   0.19107208469959E+01   0.10000000000000E+01
   --ifreq--   829   0.19130298752098E+01   0.10000000000000E+01
   --ifreq--   830   0.19153389034237E+01   0.10000000000000E+01
   --ifreq--   831   0.19176479316376E+01   0.10000000000000E+01
   --ifreq--   832   0.19199569598515E+01   0.10000000000000E+01
   --ifreq--   833   0.19222659880654E+01   0.10000000000000E+01
   --ifreq--   834   0.19245750162793E+01   0.10000000000000E+01
   --ifreq--   835   0.19268840444932E+01   0.10000000000000E+01
   --ifreq--   836   0.19291930727071E+01   0.10000000000000E+01
   --ifreq--   837   0.19315021009210E+01   0.10000000000000E+01
   --ifreq--   838   0.19338111291349E+01   0.10000000000000E+01
   --ifreq--   839   0.19361201573488E+01   0.10000000000000E+01
   --ifreq--   840   0.19384291855627E+01   0.10000000000000E+01
   --ifreq--   841   0.19407382137765E+01   0.10000000000000E+01
   --ifreq--   842   0.19430472419904E+01   0.10000000000000E+01
   --ifreq--   843   0.19453562702043E+01   0.10000000000000E+01
   --ifreq--   844   0.19476652984182E+01   0.10000000000000E+01
   --ifreq--   845   0.19499743266321E+01   0.10000000000000E+01
   --ifreq--   846   0.19522833548460E+01   0.10000000000000E+01
   --ifreq--   847   0.19545923830599E+01   0.10000000000000E+01
   --ifreq--   848   0.19569014112738E+01   0.10000000000000E+01
   --ifreq--   849   0.19592104394877E+01   0.10000000000000E+01
   --ifreq--   850   0.19615194677016E+01   0.10000000000000E+01
   --ifreq--   851   0.19638284959155E+01   0.10000000000000E+01
   --ifreq--   852   0.19661375241294E+01   0.10000000000000E+01
   --ifreq--   853   0.19684465523433E+01   0.10000000000000E+01
   --ifreq--   854   0.19707555805572E+01   0.10000000000000E+01
   --ifreq--   855   0.19730646087710E+01   0.10000000000000E+01
   --ifreq--   856   0.19753736369849E+01   0.10000000000000E+01
   --ifreq--   857   0.19776826651988E+01   0.10000000000000E+01
   --ifreq--   858   0.19799916934127E+01   0.10000000000000E+01
   --ifreq--   859   0.19823007216266E+01   0.10000000000000E+01
   --ifreq--   860   0.19846097498405E+01   0.10000000000000E+01
   --ifreq--   861   0.19869187780544E+01   0.10000000000000E+01
   --ifreq--   862   0.19892278062683E+01   0.10000000000000E+01
   --ifreq--   863   0.19915368344822E+01   0.10000000000000E+01
   --ifreq--   864   0.19938458626961E+01   0.10000000000000E+01
   --ifreq--   865   0.19961548909100E+01   0.10000000000000E+01
   --ifreq--   866   0.19984639191239E+01   0.10000000000000E+01
   --ifreq--   867   0.20007729473378E+01   0.10000000000000E+01
   --ifreq--   868   0.20030819755516E+01   0.10000000000000E+01
   --ifreq--   869   0.20053910037655E+01   0.10000000000000E+01
   --ifreq--   870   0.20077000319794E+01   0.10000000000000E+01
   --ifreq--   871   0.20100090601933E+01   0.10000000000000E+01
   --ifreq--   872   0.20123180884072E+01   0.10000000000000E+01
   --ifreq--   873   0.20146271166211E+01   0.10000000000000E+01
   --ifreq--   874   0.20169361448350E+01   0.10000000000000E+01
   --ifreq--   875   0.20192451730489E+01   0.10000000000000E+01
   --ifreq--   876   0.20215542012628E+01   0.10000000000000E+01
   --ifreq--   877   0.20238632294767E+01   0.10000000000000E+01
   --ifreq--   878   0.20261722576906E+01   0.10000000000000E+01
   --ifreq--   879   0.20284812859045E+01   0.10000000000000E+01
   --ifreq--   880   0.20307903141184E+01   0.10000000000000E+01
   --ifreq--   881   0.20330993423322E+01   0.10000000000000E+01
   --ifreq--   882   0.20354083705461E+01   0.10000000000000E+01
   --ifreq--   883   0.20377173987600E+01   0.10000000000000E+01
   --ifreq--   884   0.20400264269739E+01   0.10000000000000E+01
   --ifreq--   885   0.20423354551878E+01   0.10000000000000E+01
   --ifreq--   886   0.20446444834017E+01   0.10000000000000E+01
   --ifreq--   887   0.20469535116156E+01   0.10000000000000E+01
   --ifreq--   888   0.20492625398295E+01   0.10000000000000E+01
   --ifreq--   889   0.20515715680434E+01   0.10000000000000E+01
   --ifreq--   890   0.20538805962573E+01   0.10000000000000E+01
   --ifreq--   891   0.20561896244712E+01   0.10000000000000E+01
   --ifreq--   892   0.20584986526851E+01   0.10000000000000E+01
   --ifreq--   893   0.20608076808990E+01   0.10000000000000E+01
   --ifreq--   894   0.20631167091128E+01   0.10000000000000E+01
   --ifreq--   895   0.20654257373267E+01   0.10000000000000E+01
   --ifreq--   896   0.20677347655406E+01   0.10000000000000E+01
   --ifreq--   897   0.20700437937545E+01   0.10000000000000E+01
   --ifreq--   898   0.20723528219684E+01   0.10000000000000E+01
   --ifreq--   899   0.20746618501823E+01   0.10000000000000E+01
   --ifreq--   900   0.20769708783962E+01   0.10000000000000E+01
   --ifreq--   901   0.20792799066101E+01   0.10000000000000E+01
   --ifreq--   902   0.20815889348240E+01   0.10000000000000E+01
   --ifreq--   903   0.20838979630379E+01   0.10000000000000E+01
   --ifreq--   904   0.20862069912518E+01   0.10000000000000E+01
   --ifreq--   905   0.20885160194657E+01   0.10000000000000E+01
   --ifreq--   906   0.20908250476796E+01   0.10000000000000E+01
   --ifreq--   907   0.20931340758934E+01   0.10000000000000E+01
   --ifreq--   908   0.20954431041073E+01   0.10000000000000E+01
   --ifreq--   909   0.20977521323212E+01   0.10000000000000E+01
   --ifreq--   910   0.21000611605351E+01   0.10000000000000E+01
   --ifreq--   911   0.21023701887490E+01   0.10000000000000E+01
   --ifreq--   912   0.21046792169629E+01   0.10000000000000E+01
   --ifreq--   913   0.21069882451768E+01   0.10000000000000E+01
   --ifreq--   914   0.21092972733907E+01   0.10000000000000E+01
   --ifreq--   915   0.21116063016046E+01   0.10000000000000E+01
   --ifreq--   916   0.21139153298185E+01   0.10000000000000E+01
   --ifreq--   917   0.21162243580324E+01   0.10000000000000E+01
   --ifreq--   918   0.21185333862463E+01   0.10000000000000E+01
   --ifreq--   919   0.21208424144602E+01   0.10000000000000E+01
   --ifreq--   920   0.21231514426740E+01   0.10000000000000E+01
   --ifreq--   921   0.21254604708879E+01   0.10000000000000E+01
   --ifreq--   922   0.21277694991018E+01   0.10000000000000E+01
   --ifreq--   923   0.21300785273157E+01   0.10000000000000E+01
   --ifreq--   924   0.21323875555296E+01   0.10000000000000E+01
   --ifreq--   925   0.21346965837435E+01   0.10000000000000E+01
   --ifreq--   926   0.21370056119574E+01   0.10000000000000E+01
   --ifreq--   927   0.21393146401713E+01   0.10000000000000E+01
   --ifreq--   928   0.21416236683852E+01   0.10000000000000E+01
   --ifreq--   929   0.21439326965991E+01   0.10000000000000E+01
   --ifreq--   930   0.21462417248130E+01   0.10000000000000E+01
   --ifreq--   931   0.21485507530269E+01   0.10000000000000E+01
   --ifreq--   932   0.21508597812408E+01   0.10000000000000E+01
   --ifreq--   933   0.21531688094546E+01   0.10000000000000E+01
   --ifreq--   934   0.21554778376685E+01   0.10000000000000E+01
   --ifreq--   935   0.21577868658824E+01   0.10000000000000E+01
   --ifreq--   936   0.21600958940963E+01   0.10000000000000E+01
   --ifreq--   937   0.21624049223102E+01   0.10000000000000E+01
   --ifreq--   938   0.21647139505241E+01   0.10000000000000E+01
   --ifreq--   939   0.21670229787380E+01   0.10000000000000E+01
   --ifreq--   940   0.21693320069519E+01   0.10000000000000E+01
   --ifreq--   941   0.21716410351658E+01   0.10000000000000E+01
   --ifreq--   942   0.21739500633797E+01   0.10000000000000E+01
   --ifreq--   943   0.21762590915936E+01   0.10000000000000E+01
   --ifreq--   944   0.21785681198075E+01   0.10000000000000E+01
   --ifreq--   945   0.21808771480214E+01   0.10000000000000E+01
   --ifreq--   946   0.21831861762352E+01   0.10000000000000E+01
   --ifreq--   947   0.21854952044491E+01   0.10000000000000E+01
   --ifreq--   948   0.21878042326630E+01   0.10000000000000E+01
   --ifreq--   949   0.21901132608769E+01   0.10000000000000E+01
   --ifreq--   950   0.21924222890908E+01   0.10000000000000E+01
   --ifreq--   951   0.21947313173047E+01   0.10000000000000E+01
   --ifreq--   952   0.21970403455186E+01   0.10000000000000E+01
   --ifreq--   953   0.21993493737325E+01   0.10000000000000E+01
   --ifreq--   954   0.22016584019464E+01   0.10000000000000E+01
   --ifreq--   955   0.22039674301603E+01   0.10000000000000E+01
   --ifreq--   956   0.22062764583742E+01   0.10000000000000E+01
   --ifreq--   957   0.22085854865881E+01   0.10000000000000E+01
   --ifreq--   958   0.22108945148020E+01   0.10000000000000E+01
   --ifreq--   959   0.22132035430159E+01   0.10000000000000E+01
   --ifreq--   960   0.22155125712297E+01   0.10000000000000E+01
   --ifreq--   961   0.22178215994436E+01   0.10000000000000E+01
   --ifreq--   962   0.22201306276575E+01   0.10000000000000E+01
   --ifreq--   963   0.22224396558714E+01   0.10000000000000E+01
   --ifreq--   964   0.22247486840853E+01   0.10000000000000E+01
   --ifreq--   965   0.22270577122992E+01   0.10000000000000E+01
   --ifreq--   966   0.22293667405131E+01   0.10000000000000E+01
   --ifreq--   967   0.22316757687270E+01   0.10000000000000E+01
   --ifreq--   968   0.22339847969409E+01   0.10000000000000E+01
   --ifreq--   969   0.22362938251548E+01   0.10000000000000E+01
   --ifreq--   970   0.22386028533687E+01   0.10000000000000E+01
   --ifreq--   971   0.22409118815826E+01   0.10000000000000E+01
   --ifreq--   972   0.22432209097965E+01   0.10000000000000E+01
   --ifreq--   973   0.22455299380103E+01   0.10000000000000E+01
   --ifreq--   974   0.22478389662242E+01   0.10000000000000E+01
   --ifreq--   975   0.22501479944381E+01   0.10000000000000E+01
   --ifreq--   976   0.22524570226520E+01   0.10000000000000E+01
   --ifreq--   977   0.22547660508659E+01   0.10000000000000E+01
   --ifreq--   978   0.22570750790798E+01   0.10000000000000E+01
   --ifreq--   979   0.22593841072937E+01   0.10000000000000E+01
   --ifreq--   980   0.22616931355076E+01   0.10000000000000E+01
   --ifreq--   981   0.22640021637215E+01   0.10000000000000E+01
   --ifreq--   982   0.22663111919354E+01   0.10000000000000E+01
   --ifreq--   983   0.22686202201493E+01   0.10000000000000E+01
   --ifreq--   984   0.22709292483632E+01   0.10000000000000E+01
   --ifreq--   985   0.22732382765771E+01   0.10000000000000E+01
   --ifreq--   986   0.22755473047909E+01   0.10000000000000E+01
   --ifreq--   987   0.22778563330048E+01   0.10000000000000E+01
   --ifreq--   988   0.22801653612187E+01   0.10000000000000E+01
   --ifreq--   989   0.22824743894326E+01   0.10000000000000E+01
   --ifreq--   990   0.22847834176465E+01   0.10000000000000E+01
   --ifreq--   991   0.22870924458604E+01   0.10000000000000E+01
   --ifreq--   992   0.22894014740743E+01   0.10000000000000E+01
   --ifreq--   993   0.22917105022882E+01   0.10000000000000E+01
   --ifreq--   994   0.22940195305021E+01   0.10000000000000E+01
   --ifreq--   995   0.22963285587160E+01   0.10000000000000E+01
   --ifreq--   996   0.22986375869299E+01   0.10000000000000E+01
   --ifreq--   997   0.23009466151438E+01   0.10000000000000E+01
   --ifreq--   998   0.23032556433577E+01   0.10000000000000E+01
   --ifreq--   999   0.23055646715715E+01   0.10000000000000E+01
   --ifreq--  1000   0.23078736997854E+01   0.10000000000000E+01
   --ifreq--  1001   0.23101827279993E+01   0.10000000000000E+01
   --ifreq--  1002   0.23124917562132E+01   0.10000000000000E+01
   --ifreq--  1003   0.23148007844271E+01   0.10000000000000E+01
   --ifreq--  1004   0.23171098126410E+01   0.10000000000000E+01
   --ifreq--  1005   0.23194188408549E+01   0.10000000000000E+01
   --ifreq--  1006   0.23217278690688E+01   0.10000000000000E+01
   --ifreq--  1007   0.23240368972827E+01   0.10000000000000E+01
   --ifreq--  1008   0.23263459254966E+01   0.10000000000000E+01
   --ifreq--  1009   0.23286549537105E+01   0.10000000000000E+01
   --ifreq--  1010   0.23309639819244E+01   0.10000000000000E+01
   --ifreq--  1011   0.23332730101383E+01   0.10000000000000E+01
   --ifreq--  1012   0.23355820383521E+01   0.10000000000000E+01
   --ifreq--  1013   0.23378910665660E+01   0.10000000000000E+01
   --ifreq--  1014   0.23402000947799E+01   0.10000000000000E+01
   --ifreq--  1015   0.23425091229938E+01   0.10000000000000E+01
   --ifreq--  1016   0.23448181512077E+01   0.10000000000000E+01
   --ifreq--  1017   0.23471271794216E+01   0.10000000000000E+01
   --ifreq--  1018   0.23494362076355E+01   0.10000000000000E+01
   --ifreq--  1019   0.23517452358494E+01   0.10000000000000E+01
   --ifreq--  1020   0.23540542640633E+01   0.10000000000000E+01
   --ifreq--  1021   0.23563632922772E+01   0.10000000000000E+01
   --ifreq--  1022   0.23586723204911E+01   0.10000000000000E+01
   --ifreq--  1023   0.23609813487050E+01   0.10000000000000E+01
   --ifreq--  1024   0.23632903769189E+01   0.10000000000000E+01
   --ifreq--  1025   0.23655994051327E+01   0.10000000000000E+01
   --ifreq--  1026   0.23679084333466E+01   0.10000000000000E+01
   --ifreq--  1027   0.23702174615605E+01   0.10000000000000E+01
   --ifreq--  1028   0.23725264897744E+01   0.10000000000000E+01
   --ifreq--  1029   0.23748355179883E+01   0.10000000000000E+01
   --ifreq--  1030   0.23771445462022E+01   0.10000000000000E+01
   --ifreq--  1031   0.23794535744161E+01   0.10000000000000E+01
   --ifreq--  1032   0.23817626026300E+01   0.10000000000000E+01
   --ifreq--  1033   0.23840716308439E+01   0.10000000000000E+01
   --ifreq--  1034   0.23863806590578E+01   0.10000000000000E+01
   --ifreq--  1035   0.23886896872717E+01   0.10000000000000E+01
   --ifreq--  1036   0.23909987154856E+01   0.10000000000000E+01
   --ifreq--  1037   0.23933077436995E+01   0.10000000000000E+01
   --ifreq--  1038   0.23956167719133E+01   0.10000000000000E+01
   --ifreq--  1039   0.23979258001272E+01   0.10000000000000E+01
   --ifreq--  1040   0.24002348283411E+01   0.10000000000000E+01
   --ifreq--  1041   0.24025438565550E+01   0.10000000000000E+01
   --ifreq--  1042   0.24048528847689E+01   0.10000000000000E+01
   --ifreq--  1043   0.24071619129828E+01   0.10000000000000E+01
   --ifreq--  1044   0.24094709411967E+01   0.10000000000000E+01
   --ifreq--  1045   0.24117799694106E+01   0.10000000000000E+01
   --ifreq--  1046   0.24140889976245E+01   0.10000000000000E+01
   --ifreq--  1047   0.24163980258384E+01   0.10000000000000E+01
   --ifreq--  1048   0.24187070540523E+01   0.10000000000000E+01
   --ifreq--  1049   0.24210160822662E+01   0.10000000000000E+01
   --ifreq--  1050   0.24233251104801E+01   0.10000000000000E+01
   --ifreq--  1051   0.24256341386940E+01   0.10000000000000E+01
   --ifreq--  1052   0.24279431669078E+01   0.10000000000000E+01
   --ifreq--  1053   0.24302521951217E+01   0.10000000000000E+01
   --ifreq--  1054   0.24325612233356E+01   0.10000000000000E+01
   --ifreq--  1055   0.24348702515495E+01   0.10000000000000E+01
   --ifreq--  1056   0.24371792797634E+01   0.10000000000000E+01
   --ifreq--  1057   0.24394883079773E+01   0.10000000000000E+01
   --ifreq--  1058   0.24417973361912E+01   0.10000000000000E+01
   --ifreq--  1059   0.24441063644051E+01   0.10000000000000E+01
   --ifreq--  1060   0.24464153926190E+01   0.10000000000000E+01
   --ifreq--  1061   0.24487244208329E+01   0.10000000000000E+01
   --ifreq--  1062   0.24510334490468E+01   0.10000000000000E+01
   --ifreq--  1063   0.24533424772607E+01   0.10000000000000E+01
   --ifreq--  1064   0.24556515054746E+01   0.10000000000000E+01
   --ifreq--  1065   0.24579605336884E+01   0.10000000000000E+01
   --ifreq--  1066   0.24602695619023E+01   0.10000000000000E+01
   --ifreq--  1067   0.24625785901162E+01   0.10000000000000E+01
   --ifreq--  1068   0.24648876183301E+01   0.10000000000000E+01
   --ifreq--  1069   0.24671966465440E+01   0.10000000000000E+01
   --ifreq--  1070   0.24695056747579E+01   0.10000000000000E+01
   --ifreq--  1071   0.24718147029718E+01   0.10000000000000E+01
   --ifreq--  1072   0.24741237311857E+01   0.10000000000000E+01
   --ifreq--  1073   0.24764327593996E+01   0.10000000000000E+01
   --ifreq--  1074   0.24787417876135E+01   0.10000000000000E+01
   --ifreq--  1075   0.24810508158274E+01   0.10000000000000E+01
   --ifreq--  1076   0.24833598440413E+01   0.10000000000000E+01
   --ifreq--  1077   0.24856688722552E+01   0.10000000000000E+01
   --ifreq--  1078   0.24879779004690E+01   0.10000000000000E+01
   --ifreq--  1079   0.24902869286829E+01   0.10000000000000E+01
   --ifreq--  1080   0.24925959568968E+01   0.10000000000000E+01
   --ifreq--  1081   0.24949049851107E+01   0.10000000000000E+01
   --ifreq--  1082   0.24972140133246E+01   0.10000000000000E+01
   --ifreq--  1083   0.24995230415385E+01   0.10000000000000E+01
   --ifreq--  1084   0.25018320697524E+01   0.10000000000000E+01
   --ifreq--  1085   0.25041410979663E+01   0.10000000000000E+01
   --ifreq--  1086   0.25064501261802E+01   0.10000000000000E+01
   --ifreq--  1087   0.25087591543941E+01   0.10000000000000E+01
   --ifreq--  1088   0.25110681826080E+01   0.10000000000000E+01
   --ifreq--  1089   0.25133772108219E+01   0.10000000000000E+01
   --ifreq--  1090   0.25156862390358E+01   0.10000000000000E+01
   --ifreq--  1091   0.25179952672496E+01   0.10000000000000E+01
   --ifreq--  1092   0.25203042954635E+01   0.10000000000000E+01
   --ifreq--  1093   0.25226133236774E+01   0.10000000000000E+01
   --ifreq--  1094   0.25249223518913E+01   0.10000000000000E+01
   --ifreq--  1095   0.25272313801052E+01   0.10000000000000E+01
   --ifreq--  1096   0.25295404083191E+01   0.10000000000000E+01
   --ifreq--  1097   0.25318494365330E+01   0.10000000000000E+01
   --ifreq--  1098   0.25341584647469E+01   0.10000000000000E+01
   --ifreq--  1099   0.25364674929608E+01   0.99999999999999E+00
   --ifreq--  1100   0.25387765211747E+01   0.10000000000000E+01
   --ifreq--  1101   0.25410855493886E+01   0.99999999999992E+00
   --ifreq--  1102   0.25433945776025E+01   0.10000000000003E+01
   --ifreq--  1103   0.25457036058164E+01   0.99999999999886E+00
   --ifreq--  1104   0.25480126340302E+01   0.10000000000042E+01
   --ifreq--  1105   0.25503216622441E+01   0.99999999998419E+00
   --ifreq--  1106   0.25526306904580E+01   0.10000000000590E+01
   --ifreq--  1107   0.25549397186719E+01   0.99999999977979E+00
   --ifreq--  1108   0.25572487468858E+01   0.10000000008218E+01
   --ifreq--  1109   0.25595577750997E+01   0.99999999693285E+00
   --ifreq--  1110   0.25618668033136E+01   0.10000000114467E+01
   --ifreq--  1111   0.25641758315275E+01   0.99999995728017E+00
   --ifreq--  1112   0.25664848597414E+01   0.10000001594326E+01
   --ifreq--  1113   0.25687938879553E+01   0.99999940498957E+00
   --ifreq--  1114   0.25711029161692E+01   0.10000022206092E+01
   --ifreq--  1115   0.25734119443831E+01   0.99999171257438E+00
   --ifreq--  1116   0.25757209725970E+01   0.10000309290958E+01
   --ifreq--  1117   0.25780300008108E+01   0.99988457103069E+00
   --ifreq--  1118   0.25803390290247E+01   0.10004307866978E+01
   --ifreq--  1119   0.25826480572386E+01   0.99839228197441E+00
   --ifreq--  1120   0.25849570854525E+01   0.10060000853173E+01
   --ifreq--  1121   0.25872661136664E+01   0.97760737780432E+00
   --ifreq--  1122   0.25895751418803E+01   0.10835704048625E+01
   --ifreq--  1123   0.25918841700942E+01   0.68811100088322E+00
   --ifreq--  1124   0.25941931983081E+01   0.17459789057908E+01
   --ifreq--  1125   0.25988112547359E+01   0.17459809644246E+01
   --ifreq--  1126   0.26011202829498E+01   0.68810276634802E+00
   --ifreq--  1127   0.26034293111637E+01   0.10836012843673E+01
   --ifreq--  1128   0.26057383393776E+01   0.97749209431734E+00
   --ifreq--  1129   0.26080473675914E+01   0.10064303392837E+01
   --ifreq--  1130   0.26103563958053E+01   0.99678654864964E+00
   --ifreq--  1131   0.26126654240192E+01   0.10064234662635E+01
   --ifreq--  1132   0.26149744522331E+01   0.97751958721388E+00
   --ifreq--  1133   0.26172834804470E+01   0.10834981905467E+01
   --ifreq--  1134   0.26195925086609E+01   0.68848766366155E+00
   --ifreq--  1135   0.26219015368748E+01   0.17452146120668E+01
   --ifreq--  1136   0.26265195933026E+01   0.17507661608583E+01
   --ifreq--  1137   0.26288286215165E+01   0.66628153034113E+00
   --ifreq--  1138   0.26311376497304E+01   0.11667712250916E+01
   --ifreq--  1139   0.26334466779443E+01   0.66663360099447E+00
   --ifreq--  1140   0.26357557061582E+01   0.17500179527719E+01
   --ifreq--  1141   0.26403737625859E+01   0.17499236166250E+01
   --ifreq--  1142   0.26426827907998E+01   0.66701094269487E+00
   --ifreq--  1143   0.26449918190137E+01   0.11653561494037E+01
   --ifreq--  1144   0.26473008472276E+01   0.67156446898618E+00
   --ifreq--  1145   0.26496098754415E+01   0.17402474373154E+01
   --ifreq--  1146   0.26542279318693E+01   0.18109214197710E+01
   --ifreq--  1147   0.26565369600832E+01   0.38886837452358E+00
   --ifreq--  1148   0.26588459882971E+01   0.18141247675124E+01
   --ifreq--  1149   0.26634640447249E+01   0.17178239428077E+01
   --ifreq--  1150   0.26657730729388E+01   0.77407167995584E+00
   --ifreq--  1151   0.26680821011527E+01   0.77454742003725E+00
   --ifreq--  1152   0.26703911293665E+01   0.17170509321117E+01
   --ifreq--  1153   0.26750091857943E+01   0.18188224189274E+01
   --ifreq--  1154   0.26773182140082E+01   0.36746153772616E+00
   --ifreq--  1155   0.26796272422221E+01   0.18543891516658E+01
   --ifreq--  1156   0.26842452986499E+01   0.14680835790811E+01
   --ifreq--  1157   0.26865543268638E+01   0.14670496264211E+01
   --ifreq--  1158   0.26911723832916E+01   0.18591450476984E+01
   --ifreq--  1159   0.26934814115055E+01   0.34595663962393E+00
   --ifreq--  1160   0.26957904397194E+01   0.18624524296511E+01
   --ifreq--  1161   0.27004084961471E+01   0.14438980365496E+01
   --ifreq--  1162   0.27027175243610E+01   0.15234821792902E+01
   --ifreq--  1163   0.27073355807888E+01   0.14963653999901E+01
   --ifreq--  1164   0.27096446090027E+01   0.15015211517705E+01
   --ifreq--  1165   0.27142626654305E+01   0.14997656930669E+01
   --ifreq--  1166   0.27165716936444E+01   0.15000957330178E+01
   --ifreq--  1167   0.27211897500722E+01   0.15000033427367E+01
   --ifreq--  1168   0.27234987782861E+01   0.14999620711263E+01
   --ifreq--  1169   0.27281168347139E+01   0.15002855252589E+01
   --ifreq--  1170   0.27304258629277E+01   0.14993158956525E+01
   --ifreq--  1171   0.27350439193555E+01   0.15044221347798E+01
   --ifreq--  1172   0.27373529475694E+01   0.14894349609269E+01
   --ifreq--  1173   0.27419710039972E+01   0.15682567928970E+01
   --ifreq--  1174   0.27442800322111E+01   0.13369257173340E+01
   --ifreq--  1175   0.27488980886389E+01   0.22025719599892E+01
   --ifreq--  1176   0.27535161450667E+01   0.13399266946589E+01
   --ifreq--  1177   0.27558251732806E+01   0.15607543751455E+01
   --ifreq--  1178   0.27604432297083E+01   0.15383504760057E+01
   --ifreq--  1179   0.27627522579222E+01   0.13875349931088E+01
   --ifreq--  1180   0.27673703143500E+01   0.20737494562467E+01
   --ifreq--  1181   0.27719883707778E+01   0.20647380071407E+01
   --ifreq--  1182   0.27766064272056E+01   0.14506152217690E+01
   --ifreq--  1183   0.27789154554195E+01   0.13874084694220E+01
   --ifreq--  1184   0.27835335118473E+01   0.21911515544519E+01
   --ifreq--  1185   0.27881515682751E+01   0.13922275174879E+01
   --ifreq--  1186   0.27904605964889E+01   0.14385675682867E+01
   --ifreq--  1187   0.27950786529167E+01   0.20984714453802E+01
   --ifreq--  1188   0.27996967093445E+01   0.19503814703979E+01
   --ifreq--  1189   0.28043147657723E+01   0.21000026468880E+01
   --ifreq--  1190   0.28089328222001E+01   0.14240209483589E+01
   --ifreq--  1191   0.28112418504140E+01   0.14274456703845E+01
   --ifreq--  1192   0.28158599068418E+01   0.20931531825863E+01
   --ifreq--  1193   0.28204779632695E+01   0.19750396848374E+01
   --ifreq--  1194   0.28250960196973E+01   0.20066880810982E+01
   --ifreq--  1195   0.28297140761251E+01   0.19982079540227E+01
   --ifreq--  1196   0.28343321325529E+01   0.20004801703161E+01
   --ifreq--  1197   0.28389501889807E+01   0.19998713417127E+01
   --ifreq--  1198   0.28435682454085E+01   0.20000344981351E+01
   --ifreq--  1199   0.28481863018363E+01   0.19999909415649E+01
   --ifreq--  1200   0.28528043582640E+01   0.20000020729756E+01
   --ifreq--  1201   0.28574224146918E+01   0.20000011140243E+01
   --ifreq--  1202   0.28620404711196E+01   0.19999938182645E+01
   --ifreq--  1203   0.28666585275474E+01   0.20000239645439E+01
   --ifreq--  1204   0.28712765839752E+01   0.19999105560573E+01
   --ifreq--  1205   0.28758946404030E+01   0.20003335611408E+01
   --ifreq--  1206   0.28805126968307E+01   0.19987549024361E+01
   --ifreq--  1207   0.28851307532585E+01   0.20046465892822E+01
   --ifreq--  1208   0.28897488096863E+01   0.19826586993452E+01
   --ifreq--  1209   0.28943668661141E+01   0.20647186566027E+01
   --ifreq--  1210   0.28989849225419E+01   0.17584666521787E+01
   --ifreq--  1211   0.29036029789697E+01   0.26899476352382E+01
   --ifreq--  1212   0.29105300636114E+01   0.26947043503960E+01
   --ifreq--  1213   0.29151481200391E+01   0.17413425948490E+01
   --ifreq--  1214   0.29197661764669E+01   0.21283225125545E+01
   --ifreq--  1215   0.29243842328947E+01   0.17453674526863E+01
   --ifreq--  1216   0.29290022893225E+01   0.26838968727134E+01
   --ifreq--  1217   0.29359293739642E+01   0.27443578237924E+01
   --ifreq--  1218   0.29405474303920E+01   0.15277081616164E+01
   --ifreq--  1219   0.29451654868197E+01   0.27342307732491E+01
   --ifreq--  1220   0.29520925714614E+01   0.27395956211174E+01
   --ifreq--  1221   0.29567106278892E+01   0.15083944376575E+01
   --ifreq--  1222   0.29613286843170E+01   0.27926418972167E+01
   --ifreq--  1223   0.29682557689587E+01   0.24424764252223E+01
   --ifreq--  1224   0.29728738253864E+01   0.25202749598725E+01
   --ifreq--  1225   0.29798009100281E+01   0.24960352675064E+01
   --ifreq--  1226   0.29844189664559E+01   0.25013443531217E+01
   --ifreq--  1227   0.29913460510976E+01   0.25000339748191E+01
   --ifreq--  1228   0.29959641075254E+01   0.24992174029486E+01
   --ifreq--  1229   0.30028911921670E+01   0.25044575722560E+01
   --ifreq--  1230   0.30075092485948E+01   0.24873077638987E+01
   --ifreq--  1231   0.30144363332365E+01   0.25646011321462E+01
   --ifreq--  1232   0.30190543896643E+01   0.23167450755995E+01
   --ifreq--  1233   0.30259814743060E+01   0.32488629187517E+01
   --ifreq--  1234   0.30329085589476E+01   0.23778619124520E+01
   --ifreq--  1235   0.30375266153754E+01   0.23812508642244E+01
   --ifreq--  1236   0.30444537000171E+01   0.32407294837086E+01
   --ifreq--  1237   0.30513807846588E+01   0.23641903034434E+01
   --ifreq--  1238   0.30559988410866E+01   0.24290435559550E+01
   --ifreq--  1239   0.30629259257282E+01   0.30850814071483E+01
   --ifreq--  1240   0.30698530103699E+01   0.30878834405655E+01
   --ifreq--  1241   0.30767800950116E+01   0.24156172342943E+01
   --ifreq--  1242   0.30813981514394E+01   0.24021344364966E+01
   --ifreq--  1243   0.30883252360811E+01   0.31202420764540E+01
   --ifreq--  1244   0.30952523207227E+01   0.29677813385919E+01
   --ifreq--  1245   0.31021794053644E+01   0.30086325630667E+01
   --ifreq--  1246   0.31091064900061E+01   0.29976883612161E+01
   --ifreq--  1247   0.31160335746478E+01   0.30006139772286E+01
   --ifreq--  1248   0.31229606592895E+01   0.29998557262930E+01
   --ifreq--  1249   0.31298877439311E+01   0.29999633014985E+01
   --ifreq--  1250   0.31368148285728E+01   0.30002908753461E+01
   --ifreq--  1251   0.31437419132145E+01   0.29988730857571E+01
   --ifreq--  1252   0.31506689978562E+01   0.30042166878636E+01
   --ifreq--  1253   0.31575960824978E+01   0.29842602048482E+01
   --ifreq--  1254   0.31645231671395E+01   0.30587426863684E+01
   --ifreq--  1255   0.31714502517812E+01   0.27807692229961E+01
   --ifreq--  1256   0.31783773364229E+01   0.36750757340093E+01
   --ifreq--  1257   0.31876134492784E+01   0.36581687892623E+01
   --ifreq--  1258   0.31945405339201E+01   0.28387353597947E+01
   --ifreq--  1259   0.32014676185618E+01   0.28442678358754E+01
   --ifreq--  1260   0.32083947032035E+01   0.36456632165978E+01
   --ifreq--  1261   0.32176308160590E+01   0.37311495689956E+01
   --ifreq--  1262   0.32245579007007E+01   0.25511714419953E+01
   --ifreq--  1263   0.32314849853424E+01   0.37683877350972E+01
   --ifreq--  1264   0.32407210981980E+01   0.34594720498167E+01
   --ifreq--  1265   0.32476481828396E+01   0.34633713339681E+01
   --ifreq--  1266   0.32568842956952E+01   0.37545630125931E+01
   --ifreq--  1267   0.32638113803369E+01   0.26070786758540E+01
   --ifreq--  1268   0.32707384649786E+01   0.35737585801418E+01
   --ifreq--  1269   0.32799745778341E+01   0.42336292545674E+01
   --ifreq--  1270   0.32892106906897E+01   0.33209269675376E+01
   --ifreq--  1271   0.32961377753314E+01   0.35494368775818E+01
   --ifreq--  1272   0.33053738881869E+01   0.35342370531428E+01
   --ifreq--  1273   0.33123009728286E+01   0.33600663865393E+01
   --ifreq--  1274   0.33215370856842E+01   0.41056251087577E+01
   --ifreq--  1275   0.33307731985398E+01   0.40943277934059E+01
   --ifreq--  1276   0.33400093113953E+01   0.34069295688034E+01
   --ifreq--  1277   0.33469363960370E+01   0.33918169226368E+01
   --ifreq--  1278   0.33561725088926E+01   0.41331889744632E+01
   --ifreq--  1279   0.33654086217482E+01   0.39643116642611E+01
   --ifreq--  1280   0.33746447346037E+01   0.40095639579095E+01
   --ifreq--  1281   0.33838808474593E+01   0.39974325100750E+01
   --ifreq--  1282   0.33931169603149E+01   0.40007064999013E+01
   --ifreq--  1283   0.34023530731704E+01   0.39997413139037E+01
   --ifreq--  1284   0.34115891860260E+01   0.40003282594296E+01
   --ifreq--  1285   0.34208252988816E+01   0.39989454606115E+01
   --ifreq--  1286   0.34300614117371E+01   0.40038895768717E+01
   --ifreq--  1287   0.34392975245927E+01   0.39854961234772E+01
   --ifreq--  1288   0.34485336374483E+01   0.40541264537237E+01
   --ifreq--  1289   0.34577697503038E+01   0.37979983129165E+01
   --ifreq--  1290   0.34670058631594E+01   0.46501465166770E+01
   --ifreq--  1291   0.34785510042289E+01   0.47171800904050E+01
   --ifreq--  1292   0.34877871170844E+01   0.35745540044329E+01
   --ifreq--  1293   0.34970232299400E+01   0.47612650533821E+01
   --ifreq--  1294   0.35085683710095E+01   0.44407428662873E+01
   --ifreq--  1295   0.35178044838650E+01   0.45184851696380E+01
   --ifreq--  1296   0.35293496249345E+01   0.44961085150649E+01
   --ifreq--  1297   0.35385857377901E+01   0.45002991607856E+01
   --ifreq--  1298   0.35501308788595E+01   0.45041916914743E+01
   --ifreq--  1299   0.35593669917151E+01   0.44857485890039E+01
   --ifreq--  1300   0.35709121327846E+01   0.45632031218277E+01
   --ifreq--  1301   0.35801482456401E+01   0.42980432049305E+01
   --ifreq--  1302   0.35916933867096E+01   0.52927219654624E+01
   --ifreq--  1303   0.36032385277791E+01   0.43450511765993E+01
   --ifreq--  1304   0.36124746406346E+01   0.44033762544649E+01
   --ifreq--  1305   0.36240197817041E+01   0.51371882748841E+01
   --ifreq--  1306   0.36355649227736E+01   0.49632357121780E+01
   --ifreq--  1307   0.36471100638430E+01   0.50098689436708E+01
   --ifreq--  1308   0.36586552049125E+01   0.49972885830311E+01
   --ifreq--  1309   0.36702003459819E+01   0.50009769348214E+01
   --ifreq--  1310   0.36817454870514E+01   0.49988038684098E+01
   --ifreq--  1311   0.36932906281209E+01   0.50038074345726E+01
   --ifreq--  1312   0.37048357691903E+01   0.49859659787790E+01
   --ifreq--  1313   0.37163809102598E+01   0.50523280757845E+01
   --ifreq--  1314   0.37279260513293E+01   0.48047217272098E+01
   --ifreq--  1315   0.37394711923987E+01   0.56454361870501E+01
   --ifreq--  1316   0.37533253616821E+01   0.57057995316272E+01
   --ifreq--  1317   0.37648705027515E+01   0.46071695202791E+01
   --ifreq--  1318   0.37764156438210E+01   0.56978806804971E+01
   --ifreq--  1319   0.37902698131043E+01   0.56818619972935E+01
   --ifreq--  1320   0.38018149541738E+01   0.46595940834432E+01
   --ifreq--  1321   0.38133600952433E+01   0.55456130828428E+01
   --ifreq--  1322   0.38272142645266E+01   0.62449349635357E+01
   --ifreq--  1323   0.38410684338100E+01   0.53689011677864E+01
   --ifreq--  1324   0.38526135748794E+01   0.53523772486816E+01
   --ifreq--  1325   0.38664677441628E+01   0.62900006015271E+01
   --ifreq--  1326   0.38803219134462E+01   0.53440197296317E+01
   --ifreq--  1327   0.38918670545156E+01   0.53981528700238E+01
   --ifreq--  1328   0.39057212237990E+01   0.61423644433589E+01
   --ifreq--  1329   0.39195753930823E+01   0.59617882933712E+01
   --ifreq--  1330   0.39334295623657E+01   0.60104827015568E+01
   --ifreq--  1331   0.39472837316490E+01   0.59962809708508E+01
   --ifreq--  1332   0.39611379009324E+01   0.60043927280887E+01
   --ifreq--  1333   0.39749920702157E+01   0.59861475946853E+01
   --ifreq--  1334   0.39888462394991E+01   0.60510167315045E+01
   --ifreq--  1335   0.40027004087824E+01   0.58097857659174E+01
   --ifreq--  1336   0.40165545780658E+01   0.66404875132030E+01
   --ifreq--  1337   0.40327177755630E+01   0.67058160080997E+01
   --ifreq--  1338   0.40465719448464E+01   0.55987245619785E+01
   --ifreq--  1339   0.40604261141298E+01   0.67496037315563E+01
   --ifreq--  1340   0.40765893116270E+01   0.64434427891741E+01
   --ifreq--  1341   0.40904434809104E+01   0.65067692076796E+01
   --ifreq--  1342   0.41066066784076E+01   0.65422099304497E+01
   --ifreq--  1343   0.41204608476910E+01   0.63456475685534E+01
   --ifreq--  1344   0.41366240451882E+01   0.71196356790090E+01
   --ifreq--  1345   0.41527872426855E+01   0.71056707173926E+01
   --ifreq--  1346   0.41689504401827E+01   0.63952362027291E+01
   --ifreq--  1347   0.41828046094661E+01   0.63780746555569E+01
   --ifreq--  1348   0.41989678069633E+01   0.71531950399956E+01
   --ifreq--  1349   0.42151310044605E+01   0.69461711393467E+01
   --ifreq--  1350   0.42312942019578E+01   0.70621203500673E+01
   --ifreq--  1351   0.42474573994550E+01   0.68053476124619E+01
   --ifreq--  1352   0.42636205969523E+01   0.76545866486175E+01
   --ifreq--  1353   0.42820928226634E+01   0.76362029976214E+01
   --ifreq--  1354   0.42982560201607E+01   0.68641756265672E+01
   --ifreq--  1355   0.43144192176579E+01   0.68455264715037E+01
   --ifreq--  1356   0.43305824151552E+01   0.76850115424666E+01
   --ifreq--  1357   0.43490546408663E+01   0.74584153490453E+01
   --ifreq--  1358   0.43652178383636E+01   0.75012084543607E+01
   --ifreq--  1359   0.43836900640747E+01   0.75465330327028E+01
   --ifreq--  1360   0.43998532615719E+01   0.73319696982474E+01
   --ifreq--  1361   0.44183254872831E+01   0.81625815983523E+01
   --ifreq--  1362   0.44367977129942E+01   0.79564550923596E+01
   --ifreq--  1363   0.44552699387054E+01   0.80115982371537E+01
   --ifreq--  1364   0.44737421644165E+01   0.79971524001101E+01
   --ifreq--  1365   0.44922143901276E+01   0.79997926238093E+01
   --ifreq--  1366   0.45106866158388E+01   0.80036777595629E+01
   --ifreq--  1367   0.45291588415499E+01   0.79854969063857E+01
   --ifreq--  1368   0.45476310672611E+01   0.80543351474540E+01
   --ifreq--  1369   0.45661032929722E+01   0.77971624601314E+01
   --ifreq--  1370   0.45845755186833E+01   0.86968715828045E+01
   --ifreq--  1371   0.46053567726084E+01   0.84518580283450E+01
   --ifreq--  1372   0.46238289983195E+01   0.85132245524667E+01
   --ifreq--  1373   0.46446102522445E+01   0.85000862550619E+01
   --ifreq--  1374   0.46630824779557E+01   0.84888200611766E+01
   --ifreq--  1375   0.46838637318807E+01   0.85493512448617E+01
   --ifreq--  1376   0.47023359575918E+01   0.83297917022510E+01
   --ifreq--  1377   0.47231172115169E+01   0.91641101236653E+01
   --ifreq--  1378   0.47438984654419E+01   0.89592834450708E+01
   --ifreq--  1379   0.47646797193669E+01   0.89987561737731E+01
   --ifreq--  1380   0.47854609732920E+01   0.90456925349038E+01
   --ifreq--  1381   0.48062422272170E+01   0.88184738747926E+01
   --ifreq--  1382   0.48270234811420E+01   0.96340468116002E+01
   --ifreq--  1383   0.48501137632810E+01   0.96971610128885E+01
   --ifreq--  1384   0.48708950172060E+01   0.86191648823019E+01
   --ifreq--  1385   0.48916762711310E+01   0.97276533305257E+01
   --ifreq--  1386   0.49147665532699E+01   0.95019139580625E+01
   --ifreq--  1387   0.49355478071950E+01   0.93019891502205E+01
   --ifreq--  1388   0.49586380893339E+01   0.10319185418651E+02
   --ifreq--  1389   0.49817283714728E+01   0.93310245187163E+01
   --ifreq--  1390   0.50025096253979E+01   0.93944834041523E+01
   --ifreq--  1391   0.50255999075368E+01   0.10138828388343E+02
   --ifreq--  1392   0.50486901896757E+01   0.10008059710370E+02
   --ifreq--  1393   0.50717804718146E+01   0.98289327409878E+01
   --ifreq--  1394   0.50948707539535E+01   0.10634028252197E+02
   --ifreq--  1395   0.51202700643064E+01   0.10680799130020E+02
   --ifreq--  1396   0.51433603464453E+01   0.96819381127620E+01
   --ifreq--  1397   0.51664506285842E+01   0.10523872805072E+02
   --ifreq--  1398   0.51918499389370E+01   0.11267648322068E+02
   --ifreq--  1399   0.52172492492898E+01   0.10345800240147E+02
   --ifreq--  1400   0.52403395314288E+01   0.10385379210297E+02
   --ifreq--  1401   0.52657388417816E+01   0.11154564544573E+02
   --ifreq--  1402   0.52911381521344E+01   0.10957661597902E+02
   --ifreq--  1403   0.53165374624872E+01   0.11014788961882E+02
   --ifreq--  1404   0.53419367728400E+01   0.10983182589778E+02
   --ifreq--  1405   0.53673360831928E+01   0.11052480044311E+02
   --ifreq--  1406   0.53927353935457E+01   0.10806896778090E+02
   --ifreq--  1407   0.54181347038985E+01   0.11677579793515E+02
   --ifreq--  1408   0.54458430424652E+01   0.11513378504683E+02
   --ifreq--  1409   0.54712423528180E+01   0.11296555872857E+02
   --ifreq--  1410   0.54989506913847E+01   0.12323792587077E+02
   --ifreq--  1411   0.55266590299514E+01   0.11333309281268E+02
   --ifreq--  1412   0.55520583403042E+01   0.11375552986077E+02
   --ifreq--  1413   0.55797666788709E+01   0.12202570511717E+02
   --ifreq--  1414   0.56074750174377E+01   0.11779167816515E+02
   --ifreq--  1415   0.56351833560044E+01   0.12645682017131E+02
   --ifreq--  1416   0.56652007227850E+01   0.12675121574200E+02
   --ifreq--  1417   0.56929090613517E+01   0.11687317053483E+02
   --ifreq--  1418   0.57206173999184E+01   0.12519712417281E+02
   --ifreq--  1419   0.57506347666990E+01   0.13271688216887E+02
   --ifreq--  1420   0.57806521334796E+01   0.12342752076934E+02
   --ifreq--  1421   0.58083604720463E+01   0.12387678178862E+02
   --ifreq--  1422   0.58383778388269E+01   0.13142301435381E+02
   --ifreq--  1423   0.58683952056075E+01   0.13010377101353E+02
   --ifreq--  1424   0.58984125723881E+01   0.12816190026188E+02
   --ifreq--  1425   0.59284299391687E+01   0.13687768235841E+02
   --ifreq--  1426   0.59607563341632E+01   0.13455647835340E+02
   --ifreq--  1427   0.59907737009438E+01   0.13500998547941E+02
   --ifreq--  1428   0.60231000959383E+01   0.13545929775738E+02
   --ifreq--  1429   0.60531174627189E+01   0.13326230886379E+02
   --ifreq--  1430   0.60854438577134E+01   0.14170289098770E+02
   --ifreq--  1431   0.61177702527079E+01   0.13957777110818E+02
   --ifreq--  1432   0.61500966477024E+01   0.13998602637808E+02
   --ifreq--  1433   0.61824230426969E+01   0.14047813011091E+02
   --ifreq--  1434   0.62147494376914E+01   0.13810146471987E+02
   --ifreq--  1435   0.62470758326858E+01   0.14678053242072E+02
   --ifreq--  1436   0.62817112558942E+01   0.14501113412023E+02
   --ifreq--  1437   0.63140376508887E+01   0.14337081510968E+02
   --ifreq--  1438   0.63486730740971E+01   0.15172621450096E+02
   --ifreq--  1439   0.63833084973055E+01   0.14940861033454E+02
   --ifreq--  1440   0.64179439205139E+01   0.15063934900569E+02
   --ifreq--  1441   0.64525793437223E+01   0.14803400254730E+02
   --ifreq--  1442   0.64872147669307E+01   0.15690318843102E+02
   --ifreq--  1443   0.65241592183529E+01   0.15454924645052E+02
   --ifreq--  1444   0.65587946415613E+01   0.15500078731859E+02
   --ifreq--  1445   0.65957390929836E+01   0.15549862299392E+02
   --ifreq--  1446   0.66303745161920E+01   0.15310783149259E+02
   --ifreq--  1447   0.66673189676143E+01   0.16224439187900E+02
   --ifreq--  1448   0.67042634190365E+01   0.15761062638460E+02
   --ifreq--  1449   0.67412078704588E+01   0.16701219243683E+02
   --ifreq--  1450   0.67804613500950E+01   0.16451650897758E+02
   --ifreq--  1451   0.68174058015173E+01   0.16502109375475E+02
   --ifreq--  1452   0.68566592811534E+01   0.16544609749358E+02
   --ifreq--  1453   0.68936037325757E+01   0.16328333905091E+02
   --ifreq--  1454   0.69328572122119E+01   0.17159710338319E+02
   --ifreq--  1455   0.69721106918481E+01   0.17004158537099E+02
   --ifreq--  1456   0.70113641714842E+01   0.16823655216402E+02
   --ifreq--  1457   0.70506176511204E+01   0.17673556268420E+02
   --ifreq--  1458   0.70921801589705E+01   0.17501661903161E+02
   --ifreq--  1459   0.71314336386066E+01   0.17335872857344E+02
   --ifreq--  1460   0.71729961464567E+01   0.18173198237726E+02
   --ifreq--  1461   0.72145586543068E+01   0.17945028679662E+02
   --ifreq--  1462   0.72561211621568E+01   0.18046686260956E+02
   --ifreq--  1463   0.72976836700069E+01   0.17868226057725E+02
   --ifreq--  1464   0.73392461778569E+01   0.18466763668007E+02
   --ifreq--  1465   0.73831177139209E+01   0.19293044873349E+02
   --ifreq--  1466   0.74269892499849E+01   0.18322810494037E+02
   --ifreq--  1467   0.74685517578349E+01   0.18434230495054E+02
   --ifreq--  1468   0.75124232938989E+01   0.18967818231097E+02
   --ifreq--  1469   0.75562948299628E+01   0.19646384190803E+02
   --ifreq--  1470   0.76024753942407E+01   0.19464544625769E+02
   --ifreq--  1471   0.76463469303046E+01   0.19501562217531E+02
   --ifreq--  1472   0.76925274945825E+01   0.19532094397951E+02
   --ifreq--  1473   0.77363990306464E+01   0.19375500239716E+02
   --ifreq--  1474   0.77825795949243E+01   0.19983696638087E+02
   --ifreq--  1475   0.78287601592021E+01   0.20640889370938E+02
   --ifreq--  1476   0.78772497516939E+01   0.20470144934040E+02
   --ifreq--  1477   0.79234303159717E+01   0.20484825908005E+02
   --ifreq--  1478   0.79719199084635E+01   0.20595626358181E+02
   --ifreq--  1479   0.80181004727413E+01   0.20146564748109E+02
   --ifreq--  1480   0.80665900652330E+01   0.21802973118320E+02
   --ifreq--  1481   0.81173886859387E+01   0.21631715579922E+02
   --ifreq--  1482   0.81658782784304E+01   0.20694894390228E+02
   --ifreq--  1483   0.82143678709222E+01   0.21556590833511E+02
   --ifreq--  1484   0.82651664916278E+01   0.22103501224727E+02
   --ifreq--  1485   0.83159651123334E+01   0.22018628556821E+02
   --ifreq--  1486   0.83667637330391E+01   0.21821983560214E+02
   --ifreq--  1487   0.84175623537447E+01   0.22672093545403E+02
   --ifreq--  1488   0.84706700026642E+01   0.22504826916485E+02
   --ifreq--  1489   0.85214686233698E+01   0.22321582226506E+02
   --ifreq--  1490   0.85745762722894E+01   0.23222546065214E+02
   --ifreq--  1491   0.86276839212089E+01   0.22767704760424E+02
   --ifreq--  1492   0.86807915701284E+01   0.23686269857126E+02
   --ifreq--  1493   0.87362082472618E+01   0.23501050283276E+02
   --ifreq--  1494   0.87893158961814E+01   0.23322428480760E+02
   --ifreq--  1495   0.88447325733148E+01   0.24222491070620E+02
   --ifreq--  1496   0.89001492504482E+01   0.23767982280875E+02
   --ifreq--  1497   0.89555659275816E+01   0.24686059756757E+02
   --ifreq--  1498   0.90132916329289E+01   0.24501038348022E+02
   --ifreq--  1499   0.90687083100623E+01   0.24322163474024E+02
   --ifreq--  1500   0.91264340154097E+01   0.25223028791091E+02
   --ifreq--  1501   0.91841597207570E+01   0.24766884671763E+02
   --ifreq--  1502   0.92418854261043E+01   0.25690495354767E+02
   --ifreq--  1503   0.93019201596655E+01   0.25483336093334E+02
   --ifreq--  1504   0.93596458650128E+01   0.25386088904971E+02
   --ifreq--  1505   0.94196805985740E+01   0.25987401600557E+02
   --ifreq--  1506   0.94797153321352E+01   0.26627813863774E+02
   --ifreq--  1507   0.95420590939103E+01   0.26516054077246E+02
   --ifreq--  1508   0.96020938274715E+01   0.26317735381969E+02
   --ifreq--  1509   0.96644375892466E+01   0.27224343365663E+02
   --ifreq--  1510   0.97267813510217E+01   0.26767283049253E+02
   --ifreq--  1511   0.97891251127968E+01   0.27689032268304E+02
   --ifreq--  1512   0.98537779027858E+01   0.27488013160342E+02
   --ifreq--  1513   0.99161216645608E+01   0.27368611574588E+02
   --ifreq--  1514   0.99807744545498E+01   0.28050837237398E+02
   --ifreq--  1515   0.10045427244539E+02   0.28402776904215E+02
   --ifreq--  1516   0.10112389062742E+02   0.29357778114786E+02
   --ifreq--  1517   0.10179350880945E+02   0.28132401238426E+02
   --ifreq--  1518   0.10244003670934E+02   0.29087836968199E+02
   --ifreq--  1519   0.10313274517350E+02   0.29593455189394E+02
   --ifreq--  1520   0.10380236335553E+02   0.29510579763830E+02
   --ifreq--  1521   0.10449507181970E+02   0.29357570749140E+02
   --ifreq--  1522   0.10516469000173E+02   0.30025934732465E+02
   --ifreq--  1523   0.10588048874804E+02   0.30609624832989E+02
   --ifreq--  1524   0.10657319721220E+02   0.30505005416424E+02
   --ifreq--  1525   0.10728899595851E+02   0.30363636626669E+02
   --ifreq--  1526   0.10798170442268E+02   0.31009198154531E+02
   --ifreq--  1527   0.10872059345112E+02   0.31669022565784E+02
   --ifreq--  1528   0.10943639219743E+02   0.31290412064776E+02
   --ifreq--  1529   0.11017528122588E+02   0.32175617026211E+02
   --ifreq--  1530   0.11091417025432E+02   0.31990772052277E+02
   --ifreq--  1531   0.11165305928277E+02   0.31861296647895E+02
   --ifreq--  1532   0.11239194831121E+02   0.32553230321263E+02
   --ifreq--  1533   0.11315392762180E+02   0.32945467793303E+02
   --ifreq--  1534   0.11391590693238E+02   0.33641585582057E+02
   --ifreq--  1535   0.11470097652510E+02   0.33499100592523E+02
   --ifreq--  1536   0.11546295583569E+02   0.33368797448007E+02
   --ifreq--  1537   0.11624802542841E+02   0.34036512014583E+02
   --ifreq--  1538   0.11703309502114E+02   0.34462321482553E+02
   --ifreq--  1539   0.11784125489600E+02   0.35132578600253E+02
   --ifreq--  1540   0.11864941477086E+02   0.34997763845879E+02
   --ifreq--  1541   0.11945757464572E+02   0.34876365754045E+02
   --ifreq--  1542   0.12026573452058E+02   0.35488876669040E+02
   --ifreq--  1543   0.12109698467759E+02   0.36184012089508E+02
   --ifreq--  1544   0.12192823483459E+02   0.35767085185380E+02
   --ifreq--  1545   0.12275948499159E+02   0.36733082000262E+02
   --ifreq--  1546   0.12361382543073E+02   0.36305422901334E+02
   --ifreq--  1547   0.12444507558773E+02   0.37023946887451E+02
   --ifreq--  1548   0.12532250630901E+02   0.37657645736013E+02
   --ifreq--  1549   0.12617684674815E+02   0.37325033316109E+02
   --ifreq--  1550   0.12705427746943E+02   0.38048609905322E+02
   --ifreq--  1551   0.12793170819071E+02   0.38458859947329E+02
   --ifreq--  1552   0.12883222919413E+02   0.39132524308650E+02
   --ifreq--  1553   0.12973275019754E+02   0.39002328820325E+02
   --ifreq--  1554   0.13063327120096E+02   0.38858160054057E+02
   --ifreq--  1555   0.13153379220438E+02   0.39556089269338E+02
   --ifreq--  1556   0.13245740348994E+02   0.39933746960086E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F1926FA5961  Unknown               Unknown  Unknown
libirc.so          00007F1926FA40B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F19289547B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F1928954606  Unknown               Unknown  Unknown
libifcore.so.5     00007F19288C142C  Unknown               Unknown  Unknown
libifcore.so.5     00007F19288D2328  Unknown               Unknown  Unknown
libpthread.so.0    00007F1928DF2130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F1926BF9AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1557   0.13338101477549E+02   0.40688408830989E+02
   --ifreq--  1558   0.13432771634319E+02   0.40318225387873E+02
   --ifreq--  1559   0.13525132762875E+02   0.41018722674972E+02
   --ifreq--  1560   0.13622111947858E+02   0.41659858456413E+02
   --ifreq--  1561   0.13716782104628E+02   0.41323212167660E+02
   --ifreq--  1562   0.13813761289611E+02   0.42053012753505E+02
   --ifreq--  1563   0.13910740474595E+02   0.42445456755761E+02
   --ifreq--  1564   0.14010028687792E+02   0.43179836285621E+02
   --ifreq--  1565   0.14109316900989E+02   0.42827312217674E+02
   --ifreq--  1566   0.14208605114187E+02   0.43504434359184E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F8E8181C961  Unknown               Unknown  Unknown
libirc.so          00007F8E8181B0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F8E831CB7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F8E831CB606  Unknown               Unknown  Unknown
libifcore.so.5     00007F8E8313842C  Unknown               Unknown  Unknown
libifcore.so.5     00007F8E83149328  Unknown               Unknown  Unknown
libpthread.so.0    00007F8E83669130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F8E81470AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1567   0.14310202355598E+02   0.44167668255406E+02
   --ifreq--  1568   0.14411799597009E+02   0.43818656932235E+02
   --ifreq--  1569   0.14513396838421E+02   0.44550221580984E+02
   --ifreq--  1570   0.14617303108046E+02   0.44994137613134E+02
   --ifreq--  1571   0.14721209377671E+02   0.45460729395766E+02
   --ifreq--  1572   0.14827424675510E+02   0.46176247946010E+02
   --ifreq--  1573   0.14933639973349E+02   0.45827266335324E+02
   --ifreq--  1574   0.15039855271188E+02   0.46508519444703E+02
   --ifreq--  1575   0.15148379597241E+02   0.47150679415865E+02
   --ifreq--  1576   0.15256903923294E+02   0.46882908131407E+02
   --ifreq--  1577   0.15365428249347E+02   0.47316021212560E+02
   --ifreq--  1578   0.15476261603614E+02   0.48849436404828E+02
   --ifreq--  1579   0.15589403986094E+02   0.48281729423718E+02
   --ifreq--  1580   0.15700237340361E+02   0.49010289004400E+02
   --ifreq--  1581   0.15815688751056E+02   0.49722435389883E+02
   --ifreq--  1582   0.15928831133537E+02   0.49088435156622E+02
   --ifreq--  1583   0.16044282544231E+02   0.50912998322509E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F42D59EA961  Unknown               Unknown  Unknown
libirc.so          00007F42D59E90B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F42D73997B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F42D7399606  Unknown               Unknown  Unknown
libifcore.so.5     00007F42D730642C  Unknown               Unknown  Unknown
libifcore.so.5     00007F42D7317328  Unknown               Unknown  Unknown
libpthread.so.0    00007F42D7837130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F42D563EAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F1137BC1961  Unknown               Unknown  Unknown
libirc.so          00007F1137BC00B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F11395707B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F1139570606  Unknown               Unknown  Unknown
libifcore.so.5     00007F11394DD42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F11394EE328  Unknown               Unknown  Unknown
libpthread.so.0    00007F1139A0E130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F1137815AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1584   0.16162042983140E+02   0.50248769263031E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FBA92148961  Unknown               Unknown  Unknown
libirc.so          00007FBA921470B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FBA93AF77B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FBA93AF7606  Unknown               Unknown  Unknown
libifcore.so.5     00007FBA93A6442C  Unknown               Unknown  Unknown
libifcore.so.5     00007FBA93A75328  Unknown               Unknown  Unknown
libpthread.so.0    00007FBA93F95130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FBA91D9CAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1585   0.16277494393834E+02   0.51077689182521E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FC464757961  Unknown               Unknown  Unknown
libirc.so          00007FC4647560B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FC4661067B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FC466106606  Unknown               Unknown  Unknown
libifcore.so.5     00007FC46607342C  Unknown               Unknown  Unknown
libifcore.so.5     00007FC466084328  Unknown               Unknown  Unknown
libpthread.so.0    00007FC4665A4130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FC4643ABAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F84F0029961  Unknown               Unknown  Unknown
libirc.so          00007F84F00280B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F84F19D87B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F84F19D8606  Unknown               Unknown  Unknown
libifcore.so.5     00007F84F194542C  Unknown               Unknown  Unknown
libifcore.so.5     00007F84F1956328  Unknown               Unknown  Unknown
libpthread.so.0    00007F84F1E76130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F84EFC7DAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1586   0.16397563860957E+02   0.51482063557298E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F4C6AFAA961  Unknown               Unknown  Unknown
libirc.so          00007F4C6AFA90B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F4C6C9597B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F4C6C959606  Unknown               Unknown  Unknown
libifcore.so.5     00007F4C6C8C642C  Unknown               Unknown  Unknown
libifcore.so.5     00007F4C6C8D7328  Unknown               Unknown  Unknown
libpthread.so.0    00007F4C6CDF7130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F4C6ABFEAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FC573BC1961  Unknown               Unknown  Unknown
libirc.so          00007FC573BC00B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FC5755707B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FC575570606  Unknown               Unknown  Unknown
libifcore.so.5     00007FC5754DD42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FC5754EE328  Unknown               Unknown  Unknown
libpthread.so.0    00007FC575A0E130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FC573815AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1587   0.16515324299865E+02   0.51959797257411E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F8941617961  Unknown               Unknown  Unknown
libirc.so          00007F89416160B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F8942FC67B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F8942FC6606  Unknown               Unknown  Unknown
libifcore.so.5     00007F8942F3342C  Unknown               Unknown  Unknown
libifcore.so.5     00007F8942F44328  Unknown               Unknown  Unknown
libpthread.so.0    00007F8943464130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F894126BAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FD01833D961  Unknown               Unknown  Unknown
libirc.so          00007FD01833C0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FD019CEC7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FD019CEC606  Unknown               Unknown  Unknown
libifcore.so.5     00007FD019C5942C  Unknown               Unknown  Unknown
libifcore.so.5     00007FD019C6A328  Unknown               Unknown  Unknown
libpthread.so.0    00007FD01A18A130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FD017F91AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1588   0.16637702795202E+02   0.52719447197898E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FE268291961  Unknown               Unknown  Unknown
libirc.so          00007FE2682900B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FE269C407B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FE269C40606  Unknown               Unknown  Unknown
libifcore.so.5     00007FE269BAD42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FE269BBE328  Unknown               Unknown  Unknown
libpthread.so.0    00007FE26A0DE130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FE267EE5AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F3F6E2C7961  Unknown               Unknown  Unknown
libirc.so          00007F3F6E2C60B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F3F6FC767B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F3F6FC76606  Unknown               Unknown  Unknown
libifcore.so.5     00007F3F6FBE342C  Unknown               Unknown  Unknown
libifcore.so.5     00007F3F6FBF4328  Unknown               Unknown  Unknown
libpthread.so.0    00007F3F70114130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F3F6DF1BAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1589   0.16757772262324E+02   0.52148643218755E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FF52E3BC961  Unknown               Unknown  Unknown
libirc.so          00007FF52E3BB0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FF52FD6B7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FF52FD6B606  Unknown               Unknown  Unknown
libifcore.so.5     00007FF52FCD842C  Unknown               Unknown  Unknown
libifcore.so.5     00007FF52FCE9328  Unknown               Unknown  Unknown
libpthread.so.0    00007FF530209130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FF52E010AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F083D768961  Unknown               Unknown  Unknown
libirc.so          00007F083D7670B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F083F1177B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F083F117606  Unknown               Unknown  Unknown
libifcore.so.5     00007F083F08442C  Unknown               Unknown  Unknown
libifcore.so.5     00007F083F095328  Unknown               Unknown  Unknown
libpthread.so.0    00007F083F5B5130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F083D3BCAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F103F7CB961  Unknown               Unknown  Unknown
libirc.so          00007F103F7CA0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F104117A7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F104117A606  Unknown               Unknown  Unknown
libifcore.so.5     00007F10410E742C  Unknown               Unknown  Unknown
libifcore.so.5     00007F10410F8328  Unknown               Unknown  Unknown
libpthread.so.0    00007F1041618130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F103F41FAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1590   0.16880150757660E+02   0.53681647909963E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F15CEB9B961  Unknown               Unknown  Unknown
libirc.so          00007F15CEB9A0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F15D054A7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F15D054A606  Unknown               Unknown  Unknown
libifcore.so.5     00007F15D04B742C  Unknown               Unknown  Unknown
libifcore.so.5     00007F15D04C8328  Unknown               Unknown  Unknown
libpthread.so.0    00007F15D09E8130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F15CE7EFAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F0D61649961  Unknown               Unknown  Unknown
libirc.so          00007F0D616480B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F0D62FF87B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F0D62FF8606  Unknown               Unknown  Unknown
libifcore.so.5     00007F0D62F6542C  Unknown               Unknown  Unknown
libifcore.so.5     00007F0D62F76328  Unknown               Unknown  Unknown
libpthread.so.0    00007F0D63496130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F0D6129DAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FC389AC9961  Unknown               Unknown  Unknown
libirc.so          00007FC389AC80B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FC38B4787B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FC38B478606  Unknown               Unknown  Unknown
libifcore.so.5     00007FC38B3E542C  Unknown               Unknown  Unknown
libifcore.so.5     00007FC38B3F6328  Unknown               Unknown  Unknown
libpthread.so.0    00007FC38B916130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FC38971DAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FD915650961  Unknown               Unknown  Unknown
libirc.so          00007FD91564F0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FD916FFF7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FD916FFF606  Unknown               Unknown  Unknown
libifcore.so.5     00007FD916F6C42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FD916F7D328  Unknown               Unknown  Unknown
libpthread.so.0    00007FD91749D130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FD9152A4AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1591   0.17004838281210E+02   0.54121533485331E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F096C65C961  Unknown               Unknown  Unknown
libirc.so          00007F096C65B0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F096E00B7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F096E00B606  Unknown               Unknown  Unknown
libifcore.so.5     00007F096DF7842C  Unknown               Unknown  Unknown
libifcore.so.5     00007F096DF89328  Unknown               Unknown  Unknown
libpthread.so.0    00007F096E4A9130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F096C2B0AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F3FCA43C961  Unknown               Unknown  Unknown
libirc.so          00007F3FCA43B0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F3FCBDEB7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F3FCBDEB606  Unknown               Unknown  Unknown
libifcore.so.5     00007F3FCBD5842C  Unknown               Unknown  Unknown
libifcore.so.5     00007F3FCBD69328  Unknown               Unknown  Unknown
libpthread.so.0    00007F3FCC289130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F3FCA090AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FF41E95A961  Unknown               Unknown  Unknown
libirc.so          00007FF41E9590B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FF4203097B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FF420309606  Unknown               Unknown  Unknown
libifcore.so.5     00007FF42027642C  Unknown               Unknown  Unknown
libifcore.so.5     00007FF420287328  Unknown               Unknown  Unknown
libpthread.so.0    00007FF4207A7130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FF41E5AEAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F8D593AF961  Unknown               Unknown  Unknown
libirc.so          00007F8D593AE0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F8D5AD5E7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F8D5AD5E606  Unknown               Unknown  Unknown
libifcore.so.5     00007F8D5ACCB42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F8D5ACDC328  Unknown               Unknown  Unknown
libpthread.so.0    00007F8D5B1FC130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F8D59003AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1592   0.17129525804761E+02   0.53830694895875E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F80B8ACA961  Unknown               Unknown  Unknown
libirc.so          00007F80B8AC90B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F80BA4797B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F80BA479606  Unknown               Unknown  Unknown
libifcore.so.5     00007F80BA3E642C  Unknown               Unknown  Unknown
libifcore.so.5     00007F80BA3F7328  Unknown               Unknown  Unknown
libpthread.so.0    00007F80BA917130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F80B871EAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F10B8595961  Unknown               Unknown  Unknown
libirc.so          00007F10B85940B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F10B9F447B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F10B9F44606  Unknown               Unknown  Unknown
libifcore.so.5     00007F10B9EB142C  Unknown               Unknown  Unknown
libifcore.so.5     00007F10B9EC2328  Unknown               Unknown  Unknown
libpthread.so.0    00007F10BA3E2130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F10B81E9AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F8068947961  Unknown               Unknown  Unknown
libirc.so          00007F80689460B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F806A2F67B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F806A2F6606  Unknown               Unknown  Unknown
libifcore.so.5     00007F806A26342C  Unknown               Unknown  Unknown
libifcore.so.5     00007F806A274328  Unknown               Unknown  Unknown
libpthread.so.0    00007F806A794130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F806859BAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F7C176EE961  Unknown               Unknown  Unknown
libirc.so          00007F7C176ED0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F7C1909D7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F7C1909D606  Unknown               Unknown  Unknown
libifcore.so.5     00007F7C1900A42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F7C1901B328  Unknown               Unknown  Unknown
libpthread.so.0    00007F7C1953B130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F7C17342AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1593   0.17254213328311E+02   0.54549518551520E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FB4056A6961  Unknown               Unknown  Unknown
libirc.so          00007FB4056A50B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FB4070557B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FB407055606  Unknown               Unknown  Unknown
libifcore.so.5     00007FB406FC242C  Unknown               Unknown  Unknown
libifcore.so.5     00007FB406FD3328  Unknown               Unknown  Unknown
libpthread.so.0    00007FB4074F3130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FB4052FAAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FC87195F961  Unknown               Unknown  Unknown
libirc.so          00007FC87195E0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FC87330E7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FC87330E606  Unknown               Unknown  Unknown
libifcore.so.5     00007FC87327B42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FC87328C328  Unknown               Unknown  Unknown
libpthread.so.0    00007FC8737AC130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FC8715B3AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F29603CE961  Unknown               Unknown  Unknown
libirc.so          00007F29603CD0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F2961D7D7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F2961D7D606  Unknown               Unknown  Unknown
libifcore.so.5     00007F2961CEA42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F2961CFB328  Unknown               Unknown  Unknown
libpthread.so.0    00007F296221B130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F2960022AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FAA5A8B8961  Unknown               Unknown  Unknown
libirc.so          00007FAA5A8B70B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FAA5C2677B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FAA5C267606  Unknown               Unknown  Unknown
libifcore.so.5     00007FAA5C1D442C  Unknown               Unknown  Unknown
libifcore.so.5     00007FAA5C1E5328  Unknown               Unknown  Unknown
libpthread.so.0    00007FAA5C705130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FAA5A50CAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1594   0.17381209880075E+02   0.54982546199393E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F10AB3C8961  Unknown               Unknown  Unknown
libirc.so          00007F10AB3C70B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F10ACD777B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F10ACD77606  Unknown               Unknown  Unknown
libifcore.so.5     00007F10ACCE442C  Unknown               Unknown  Unknown
libifcore.so.5     00007F10ACCF5328  Unknown               Unknown  Unknown
libpthread.so.0    00007F10AD215130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F10AB01CAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FD7B058C961  Unknown               Unknown  Unknown
libirc.so          00007FD7B058B0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FD7B1F3B7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FD7B1F3B606  Unknown               Unknown  Unknown
libifcore.so.5     00007FD7B1EA842C  Unknown               Unknown  Unknown
libifcore.so.5     00007FD7B1EB9328  Unknown               Unknown  Unknown
libpthread.so.0    00007FD7B23D9130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FD7B01E0AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FB5B8635961  Unknown               Unknown  Unknown
libirc.so          00007FB5B86340B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FB5B9FE47B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FB5B9FE4606  Unknown               Unknown  Unknown
libifcore.so.5     00007FB5B9F5142C  Unknown               Unknown  Unknown
libifcore.so.5     00007FB5B9F62328  Unknown               Unknown  Unknown
libpthread.so.0    00007FB5BA482130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FB5B8289AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FA1C65E4961  Unknown               Unknown  Unknown
libirc.so          00007FA1C65E30B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FA1C7F937B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FA1C7F93606  Unknown               Unknown  Unknown
libifcore.so.5     00007FA1C7F0042C  Unknown               Unknown  Unknown
libifcore.so.5     00007FA1C7F11328  Unknown               Unknown  Unknown
libpthread.so.0    00007FA1C8431130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FA1C6238AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1595   0.17508206431839E+02   0.55509037142309E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F7464C76961  Unknown               Unknown  Unknown
libirc.so          00007F7464C750B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F74666257B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F7466625606  Unknown               Unknown  Unknown
libifcore.so.5     00007F746659242C  Unknown               Unknown  Unknown
libifcore.so.5     00007F74665A3328  Unknown               Unknown  Unknown
libpthread.so.0    00007F7466AC3130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F74648CAAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FD34CFAA961  Unknown               Unknown  Unknown
libirc.so          00007FD34CFA90B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FD34E9597B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FD34E959606  Unknown               Unknown  Unknown
libifcore.so.5     00007FD34E8C642C  Unknown               Unknown  Unknown
libifcore.so.5     00007FD34E8D7328  Unknown               Unknown  Unknown
libpthread.so.0    00007FD34EDF7130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FD34CBFEAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F0C31113961  Unknown               Unknown  Unknown
libirc.so          00007F0C311120B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F0C32AC27B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F0C32AC2606  Unknown               Unknown  Unknown
libifcore.so.5     00007F0C32A2F42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F0C32A40328  Unknown               Unknown  Unknown
libpthread.so.0    00007F0C32F60130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F0C30D67AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F70B3D98961  Unknown               Unknown  Unknown
libirc.so          00007F70B3D970B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F70B57477B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F70B5747606  Unknown               Unknown  Unknown
libifcore.so.5     00007F70B56B442C  Unknown               Unknown  Unknown
libifcore.so.5     00007F70B56C5328  Unknown               Unknown  Unknown
libpthread.so.0    00007F70B5BE5130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F70B39ECAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1596   0.17637512011817E+02   0.55993250765874E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F4CB3BFA961  Unknown               Unknown  Unknown
libirc.so          00007F4CB3BF90B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F4CB55A97B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F4CB55A9606  Unknown               Unknown  Unknown
libifcore.so.5     00007F4CB551642C  Unknown               Unknown  Unknown
libifcore.so.5     00007F4CB5527328  Unknown               Unknown  Unknown
libpthread.so.0    00007F4CB5A47130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F4CB384EAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F093FE73961  Unknown               Unknown  Unknown
libirc.so          00007F093FE720B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F09418227B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F0941822606  Unknown               Unknown  Unknown
libifcore.so.5     00007F094178F42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F09417A0328  Unknown               Unknown  Unknown
libpthread.so.0    00007F0941CC0130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F093FAC7AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F10D154C961  Unknown               Unknown  Unknown
libirc.so          00007F10D154B0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F10D2EFB7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F10D2EFB606  Unknown               Unknown  Unknown
libifcore.so.5     00007F10D2E6842C  Unknown               Unknown  Unknown
libifcore.so.5     00007F10D2E79328  Unknown               Unknown  Unknown
libpthread.so.0    00007F10D3399130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F10D11A0AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F933C767961  Unknown               Unknown  Unknown
libirc.so          00007F933C7660B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F933E1167B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F933E116606  Unknown               Unknown  Unknown
libifcore.so.5     00007F933E08342C  Unknown               Unknown  Unknown
libifcore.so.5     00007F933E094328  Unknown               Unknown  Unknown
libpthread.so.0    00007F933E5B4130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F933C3BBAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1597   0.17766817591795E+02   0.56506112998477E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F0780025961  Unknown               Unknown  Unknown
libirc.so          00007F07800240B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F07819D47B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F07819D4606  Unknown               Unknown  Unknown
libifcore.so.5     00007F078194142C  Unknown               Unknown  Unknown
libifcore.so.5     00007F0781952328  Unknown               Unknown  Unknown
libpthread.so.0    00007F0781E72130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F077FC79AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F7BF9E22961  Unknown               Unknown  Unknown
libirc.so          00007F7BF9E210B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F7BFB7D17B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F7BFB7D1606  Unknown               Unknown  Unknown
libifcore.so.5     00007F7BFB73E42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F7BFB74F328  Unknown               Unknown  Unknown
libpthread.so.0    00007F7BFBC6F130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F7BF9A76AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F7E5B190961  Unknown               Unknown  Unknown
libirc.so          00007F7E5B18F0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F7E5CB3F7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F7E5CB3F606  Unknown               Unknown  Unknown
libifcore.so.5     00007F7E5CAAC42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F7E5CABD328  Unknown               Unknown  Unknown
libpthread.so.0    00007F7E5CFDD130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F7E5ADE4AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F3EE1733961  Unknown               Unknown  Unknown
libirc.so          00007F3EE17320B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F3EE30E27B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F3EE30E2606  Unknown               Unknown  Unknown
libifcore.so.5     00007F3EE304F42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F3EE3060328  Unknown               Unknown  Unknown
libpthread.so.0    00007F3EE3580130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F3EE1387AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1598   0.17898432199987E+02   0.56994095016342E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFDD9322961  Unknown               Unknown  Unknown
libirc.so          00007FFDD93210B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FFDDACD17B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFDDACD1606  Unknown               Unknown  Unknown
libifcore.so.5     00007FFDDAC3E42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FFDDAC4F328  Unknown               Unknown  Unknown
libpthread.so.0    00007FFDDB16F130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FFDD8F76AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F94784D6961  Unknown               Unknown  Unknown
libirc.so          00007F94784D50B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F9479E857B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F9479E85606  Unknown               Unknown  Unknown
libifcore.so.5     00007F9479DF242C  Unknown               Unknown  Unknown
libifcore.so.5     00007F9479E03328  Unknown               Unknown  Unknown
libpthread.so.0    00007F947A323130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F947812AAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F5108C2C961  Unknown               Unknown  Unknown
libirc.so          00007F5108C2B0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F510A5DB7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F510A5DB606  Unknown               Unknown  Unknown
libifcore.so.5     00007F510A54842C  Unknown               Unknown  Unknown
libifcore.so.5     00007F510A559328  Unknown               Unknown  Unknown
libpthread.so.0    00007F510AA79130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F5108880AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F800CCAB961  Unknown               Unknown  Unknown
libirc.so          00007F800CCAA0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F800E65A7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F800E65A606  Unknown               Unknown  Unknown
libifcore.so.5     00007F800E5C742C  Unknown               Unknown  Unknown
libifcore.so.5     00007F800E5D8328  Unknown               Unknown  Unknown
libpthread.so.0    00007F800EAF8130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F800C8FFAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1599   0.18030046808179E+02   0.57505811744410E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FAE44754961  Unknown               Unknown  Unknown
libirc.so          00007FAE447530B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FAE461037B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FAE46103606  Unknown               Unknown  Unknown
libifcore.so.5     00007FAE4607042C  Unknown               Unknown  Unknown
libifcore.so.5     00007FAE46081328  Unknown               Unknown  Unknown
libpthread.so.0    00007FAE465A1130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FAE443A8AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F99AA78F961  Unknown               Unknown  Unknown
libirc.so          00007F99AA78E0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F99AC13E7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F99AC13E606  Unknown               Unknown  Unknown
libifcore.so.5     00007F99AC0AB42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F99AC0BC328  Unknown               Unknown  Unknown
libpthread.so.0    00007F99AC5DC130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F99AA3E3AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F0F70994961  Unknown               Unknown  Unknown
libirc.so          00007F0F709930B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F0F723437B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F0F72343606  Unknown               Unknown  Unknown
libifcore.so.5     00007F0F722B042C  Unknown               Unknown  Unknown
libifcore.so.5     00007F0F722C1328  Unknown               Unknown  Unknown
libpthread.so.0    00007F0F727E1130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F0F705E8AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1600   0.18163970444584E+02   0.57994248342671E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F26B7646961  Unknown               Unknown  Unknown
libirc.so          00007F26B76450B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F26B8FF57B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F26B8FF5606  Unknown               Unknown  Unknown
libifcore.so.5     00007F26B8F6242C  Unknown               Unknown  Unknown
libifcore.so.5     00007F26B8F73328  Unknown               Unknown  Unknown
libpthread.so.0    00007F26B9493130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F26B729AAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FC359791961  Unknown               Unknown  Unknown
libirc.so          00007FC3597900B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FC35B1407B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FC35B140606  Unknown               Unknown  Unknown
libifcore.so.5     00007FC35B0AD42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FC35B0BE328  Unknown               Unknown  Unknown
libpthread.so.0    00007FC35B5DE130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FC3593E5AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1601   0.18297894080990E+02   0.58505700050962E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F390BD4E961  Unknown               Unknown  Unknown
libirc.so          00007F390BD4D0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F390D6FD7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F390D6FD606  Unknown               Unknown  Unknown
libifcore.so.5     00007F390D66A42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F390D67B328  Unknown               Unknown  Unknown
libpthread.so.0    00007F390DB9B130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F390B9A2AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FDFB0D16961  Unknown               Unknown  Unknown
libirc.so          00007FDFB0D150B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FDFB26C57B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FDFB26C5606  Unknown               Unknown  Unknown
libifcore.so.5     00007FDFB263242C  Unknown               Unknown  Unknown
libifcore.so.5     00007FDFB2643328  Unknown               Unknown  Unknown
libpthread.so.0    00007FDFB2B63130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FDFB096AAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1602   0.18434126745610E+02   0.58994349435990E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F0140172961  Unknown               Unknown  Unknown
libirc.so          00007F01401710B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F0141B217B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F0141B21606  Unknown               Unknown  Unknown
libifcore.so.5     00007F0141A8E42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F0141A9F328  Unknown               Unknown  Unknown
libpthread.so.0    00007F0141FBF130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F013FDC6AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FA7CB9A1961  Unknown               Unknown  Unknown
libirc.so          00007FA7CB9A00B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FA7CD3507B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FA7CD350606  Unknown               Unknown  Unknown
libifcore.so.5     00007FA7CD2BD42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FA7CD2CE328  Unknown               Unknown  Unknown
libpthread.so.0    00007FA7CD7EE130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FA7CB5F5AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1603   0.18570359410230E+02   0.59505602356687E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FA65488F961  Unknown               Unknown  Unknown
libirc.so          00007FA65488E0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FA65623E7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FA65623E606  Unknown               Unknown  Unknown
libifcore.so.5     00007FA6561AB42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FA6561BC328  Unknown               Unknown  Unknown
libpthread.so.0    00007FA6566DC130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FA6544E3AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FAF0D961961  Unknown               Unknown  Unknown
libirc.so          00007FAF0D9600B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FAF0F3107B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FAF0F310606  Unknown               Unknown  Unknown
libifcore.so.5     00007FAF0F27D42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FAF0F28E328  Unknown               Unknown  Unknown
libpthread.so.0    00007FAF0F7AE130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FAF0D5B5AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1604   0.18708901103063E+02   0.59994447309305E+02
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FDE90D56961  Unknown               Unknown  Unknown
libirc.so          00007FDE90D550B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FDE927057B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FDE92705606  Unknown               Unknown  Unknown
libifcore.so.5     00007FDE9267242C  Unknown               Unknown  Unknown
libifcore.so.5     00007FDE92683328  Unknown               Unknown  Unknown
libpthread.so.0    00007FDE92BA3130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FDE909AAAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
   --ifreq--  1605   0.18847442795897E+02   0.60505505249223E+02
   --ifreq--  1606   0.18988293516944E+02   0.60994554029067E+02
   --ifreq--  1607   0.19129144237991E+02   0.61505352440028E+02
   --ifreq--  1608   0.19272303987253E+02   0.61994873474192E+02
   --ifreq--  1609   0.19415463736514E+02   0.62504417752525E+02
   --ifreq--  1610   0.19560932513989E+02   0.62998108124280E+02
   --ifreq--  1611   0.19706401291465E+02   0.63492778309324E+02
   --ifreq--  1612   0.19854179097154E+02   0.64041042267318E+02
   --ifreq--  1613   0.20001956902843E+02   0.64335497233998E+02
   --ifreq--  1614   0.20152043736746E+02   0.65620374245694E+02
   --ifreq--  1615   0.20304439598863E+02   0.66184018304698E+02
   --ifreq--  1616   0.20456835460980E+02   0.65641541291089E+02
   --ifreq--  1617   0.20609231323096E+02   0.67225455594382E+02
   --ifreq--  1618   0.20766245241641E+02   0.67489155289811E+02
   --ifreq--  1619   0.20920950131972E+02   0.67800869342326E+02
   --ifreq--  1620   0.21080273078731E+02   0.69339209341970E+02
   --ifreq--  1621   0.21239596025489E+02   0.68819332091686E+02
   --ifreq--  1622   0.21398918972248E+02   0.69381523360684E+02
   --ifreq--  1623   0.21560550947220E+02   0.70655708950100E+02
   --ifreq--  1624   0.21724491950406E+02   0.70998614317702E+02
   --ifreq--  1625   0.21888432953593E+02   0.71345540020899E+02
   --ifreq--  1626   0.22054682984993E+02   0.72622020247197E+02
   --ifreq--  1627   0.22223242044607E+02   0.73167585125820E+02
   --ifreq--  1628   0.22391801104221E+02   0.72705775461102E+02
   --ifreq--  1629   0.22560360163836E+02   0.73994064847390E+02
   --ifreq--  1630   0.22733537279877E+02   0.75348209042952E+02
   --ifreq--  1631   0.22906714395919E+02   0.74598095290524E+02
   --ifreq--  1632   0.23079891511961E+02   0.76237954575092E+02
   --ifreq--  1633   0.23257686684431E+02   0.76478349548077E+02
   --ifreq--  1634   0.23433172828687E+02   0.76833090347246E+02
   --ifreq--  1635   0.23613277029370E+02   0.78218421228752E+02
   --ifreq--  1636   0.23793381230054E+02   0.78271089907113E+02
   --ifreq--  1637   0.23975794458952E+02   0.79699524283753E+02
   --ifreq--  1638   0.24160516716063E+02   0.79931820309959E+02
   --ifreq--  1639   0.24345238973174E+02   0.80566797334855E+02
   --ifreq--  1640   0.24532270258500E+02   0.80809787002805E+02
   --ifreq--  1641   0.24719301543825E+02   0.82170428628285E+02
   --ifreq--  1642   0.24910950885578E+02   0.82536445315733E+02
   --ifreq--  1643   0.25100291199117E+02   0.82671631520056E+02
   --ifreq--  1644   0.25294249569084E+02   0.84796755652831E+02
   --ifreq--  1645   0.25490516967265E+02   0.85124856418235E+02
   --ifreq--  1646   0.25686784365446E+02   0.84704447721995E+02
   --ifreq--  1647   0.25883051763627E+02   0.86042908417608E+02
   --ifreq--  1648   0.26083937218235E+02   0.87151475682821E+02
   --ifreq--  1649   0.26284822672844E+02   0.87335870090217E+02
   --ifreq--  1650   0.26488017155666E+02   0.88509856105650E+02
   --ifreq--  1651   0.26693520666703E+02   0.89619885906867E+02
   --ifreq--  1652   0.26901333205953E+02   0.90014888591767E+02
   --ifreq--  1653   0.27109145745204E+02   0.90317077174719E+02
   --ifreq--  1654   0.27319267312668E+02   0.91717597765233E+02
   --ifreq--  1655   0.27531697908346E+02   0.91814658637677E+02
   --ifreq--  1656   0.27744128504024E+02   0.93008937676565E+02
   --ifreq--  1657   0.27961177156130E+02   0.94175676283616E+02
   --ifreq--  1658   0.28178225808236E+02   0.94274194527702E+02
   --ifreq--  1659   0.28397583488555E+02   0.95728835202329E+02
   --ifreq--  1660   0.28619250197089E+02   0.95811874595361E+02
   --ifreq--  1661   0.28840916905623E+02   0.97009577770060E+02
   --ifreq--  1662   0.29067201670584E+02   0.98174806955718E+02
   --ifreq--  1663   0.29293486435546E+02   0.98277582343646E+02
   --ifreq--  1664   0.29522080228721E+02   0.99716283600788E+02
   --ifreq--  1665   0.29752983050110E+02   0.99858489419079E+02
   --ifreq--  1666   0.29983885871500E+02   0.10083988254499E+03
   --ifreq--  1667   0.30219406749317E+02   0.10279917641960E+03
   --ifreq--  1668   0.30457236655347E+02   0.10295479471744E+03
   --ifreq--  1669   0.30695066561378E+02   0.10337991624789E+03
   --ifreq--  1670   0.30935205495623E+02   0.10452857348091E+03
   --ifreq--  1671   0.31177653458082E+02   0.10550401391410E+03
   --ifreq--  1672   0.31422410448755E+02   0.10645640308534E+03
   --ifreq--  1673   0.31669476467641E+02   0.10766806873416E+03
   --ifreq--  1674   0.31918851514741E+02   0.10787474923093E+03
   --ifreq--  1675   0.32168226561842E+02   0.10882358180639E+03
   --ifreq--  1676   0.32422219665370E+02   0.11084622757926E+03
   --ifreq--  1677   0.32678521797112E+02   0.11078393540160E+03
   --ifreq--  1678   0.32934823928854E+02   0.11200720739108E+03
   --ifreq--  1679   0.33195744117024E+02   0.11320850475052E+03
   --ifreq--  1680   0.33456664305194E+02   0.11314835488315E+03
   --ifreq--  1681   0.33719893521577E+02   0.11519043429656E+03
   --ifreq--  1682   0.33987740794389E+02   0.11610460204174E+03
   --ifreq--  1683   0.34255588067200E+02   0.11638205532919E+03
   --ifreq--  1684   0.34525744368226E+02   0.11737229667665E+03
   --ifreq--  1685   0.34798209697465E+02   0.11911649754820E+03
   --ifreq--  1686   0.35075293083132E+02   0.12017871532039E+03
   --ifreq--  1687   0.35352376468799E+02   0.12016075524121E+03
   --ifreq--  1688   0.35631768882680E+02   0.12217133175561E+03
   --ifreq--  1689   0.35915779352989E+02   0.12316754185762E+03
   --ifreq--  1690   0.36199789823298E+02   0.12315190659865E+03
   --ifreq--  1691   0.36486109321821E+02   0.12521708907685E+03
   --ifreq--  1692   0.36777046876771E+02   0.12599396928247E+03
   --ifreq--  1693   0.37067984431721E+02   0.12679372374790E+03
   --ifreq--  1694   0.37363540043100E+02   0.12884498139310E+03
   --ifreq--  1695   0.37661404682692E+02   0.12881911137827E+03
   --ifreq--  1696   0.37959269322284E+02   0.12987159839340E+03
   --ifreq--  1697   0.38261752018304E+02   0.13170886977940E+03
   --ifreq--  1698   0.38566543742538E+02   0.13228566438704E+03
   --ifreq--  1699   0.38873644494985E+02   0.13414102483280E+03
   --ifreq--  1700   0.39185363303861E+02   0.13516429118477E+03
   --ifreq--  1701   0.39497082112736E+02   0.13519490007107E+03
   --ifreq--  1702   0.39811109949826E+02   0.13705207265868E+03
   --ifreq--  1703   0.40129755843343E+02   0.13860591051286E+03
   --ifreq--  1704   0.40450710765074E+02   0.13951809598168E+03
   --ifreq--  1705   0.40773974715019E+02   0.14032472053042E+03
   --ifreq--  1706   0.41099547693177E+02   0.14217324956589E+03
   --ifreq--  1707   0.41429738727764E+02   0.14299691625828E+03
   --ifreq--  1708   0.41759929762351E+02   0.14382609691804E+03
   --ifreq--  1709   0.42094738853365E+02   0.14571255003501E+03
   --ifreq--  1710   0.42431856972593E+02   0.14631600531656E+03
   --ifreq--  1711   0.42771284120036E+02   0.14801887768229E+03
   --ifreq--  1712   0.43115329323906E+02   0.14961825639170E+03
   --ifreq--  1713   0.43461683555989E+02   0.15050197933278E+03
   --ifreq--  1714   0.43810346816287E+02   0.15137624373715E+03
   --ifreq--  1715   0.44161319104799E+02   0.15298697908510E+03
   --ifreq--  1716   0.44516909449738E+02   0.15468519848279E+03
   --ifreq--  1717   0.44874808822892E+02   0.15526816253042E+03
   --ifreq--  1718   0.45235017224259E+02   0.15723400237313E+03
   --ifreq--  1719   0.45599843682054E+02   0.15780931486924E+03
   --ifreq--  1720   0.45964670139849E+02   0.15950511945854E+03
   --ifreq--  1721   0.46336423682285E+02   0.16120533909989E+03
   --ifreq--  1722   0.46708177224722E+02   0.16165210613054E+03
   --ifreq--  1723   0.47084548823587E+02   0.16419312365982E+03
   --ifreq--  1724   0.47465538478879E+02   0.16557468828856E+03
   --ifreq--  1725   0.47848837162385E+02   0.16650527946054E+03
   --ifreq--  1726   0.48234444874105E+02   0.16740572142919E+03
   --ifreq--  1727   0.48622361614039E+02   0.16886820801189E+03
   --ifreq--  1728   0.49014896410401E+02   0.17112439382248E+03
   --ifreq--  1729   0.49412049263190E+02   0.17263653304312E+03
   --ifreq--  1730   0.49811511144193E+02   0.17332734361524E+03
   --ifreq--  1731   0.50213282053411E+02   0.17504909840957E+03
   --ifreq--  1732   0.50619671019056E+02   0.17648603765408E+03
   --ifreq--  1733   0.51028369012915E+02   0.17799622320903E+03
   --ifreq--  1734   0.51441685063201E+02   0.17953974453550E+03
   --ifreq--  1735   0.51857310141702E+02   0.18083603644257E+03
   --ifreq--  1736   0.52277553276631E+02   0.18312034091835E+03
   --ifreq--  1737   0.52702414467987E+02   0.18468376018513E+03
   --ifreq--  1738   0.53129584687557E+02   0.18514415714589E+03
   --ifreq--  1739   0.53559063935341E+02   0.18772345799366E+03
   --ifreq--  1740   0.53995470267766E+02   0.18898864801496E+03
   --ifreq--  1741   0.54431876600192E+02   0.19029809312577E+03
   --ifreq--  1742   0.54875210017259E+02   0.19284505198608E+03
   --ifreq--  1743   0.55320852462541E+02   0.19330647476614E+03
   --ifreq--  1744   0.55768803936036E+02   0.19492790839496E+03
   --ifreq--  1745   0.56221373465959E+02   0.19698556632308E+03
   --ifreq--  1746   0.56678561052309E+02   0.19912681357504E+03
   --ifreq--  1747   0.57140366695088E+02   0.20051210329711E+03
   --ifreq--  1748   0.57604481366080E+02   0.20181890034696E+03
   --ifreq--  1749   0.58073214093500E+02   0.20421446015299E+03
   --ifreq--  1750   0.58546564877348E+02   0.20532740088773E+03
   --ifreq--  1751   0.59022224689410E+02   0.20746191379137E+03
   --ifreq--  1752   0.59504811586114E+02   0.20984523227293E+03
   --ifreq--  1753   0.59989707511031E+02   0.21014730321205E+03
   --ifreq--  1754   0.60476912464162E+02   0.21255551103142E+03
   --ifreq--  1755   0.60971044501935E+02   0.21465061515233E+03
   --ifreq--  1756   0.61467485567922E+02   0.21582823775570E+03
   --ifreq--  1757   0.61968544690337E+02   0.21804200072678E+03
   --ifreq--  1758   0.62474221869179E+02   0.22000135177621E+03
   --ifreq--  1759   0.62984517104450E+02   0.22195377988650E+03
   --ifreq--  1760   0.63499430396148E+02   0.22418109688342E+03
   --ifreq--  1761   0.64018961744273E+02   0.22532737551635E+03
   --ifreq--  1762   0.64540802120613E+02   0.22749563795377E+03
   --ifreq--  1763   0.65069569581594E+02   0.22970985772342E+03
   --ifreq--  1764   0.65600646070790E+02   0.23065317385552E+03
   --ifreq--  1765   0.66136340616413E+02   0.23367410315210E+03
   --ifreq--  1766   0.66678962246677E+02   0.23566278845465E+03
   --ifreq--  1767   0.67223892905156E+02   0.23666598597749E+03
   --ifreq--  1768   0.67773441620062E+02   0.23966968477649E+03
   --ifreq--  1769   0.68329917419610E+02   0.24166745179468E+03
   --ifreq--  1770   0.68888702247372E+02   0.24265206325063E+03
   --ifreq--  1771   0.69452105131562E+02   0.24571999509264E+03
   --ifreq--  1772   0.70022435100394E+02   0.24748136202552E+03
   --ifreq--  1773   0.70595074097439E+02   0.24933889841608E+03
   --ifreq--  1774   0.71174640179126E+02   0.25217803809103E+03
   --ifreq--  1775   0.71758824317241E+02   0.25394057504692E+03
   --ifreq--  1776   0.72347626511783E+02   0.25606102660361E+03
   --ifreq--  1777   0.72941046762753E+02   0.25781678598227E+03
   --ifreq--  1778   0.73539085070152E+02   0.26066369224123E+03
   --ifreq--  1779   0.74144050462191E+02   0.26254261018324E+03
   --ifreq--  1780   0.74751324882445E+02   0.26415300724854E+03
   --ifreq--  1781   0.75365526387340E+02   0.26785067256462E+03
   --ifreq--  1782   0.75986654976878E+02   0.26944973937762E+03
   --ifreq--  1783   0.76610092594628E+02   0.27133784945126E+03
   --ifreq--  1784   0.77240457297021E+02   0.27421198633791E+03
   --ifreq--  1785   0.77875440055842E+02   0.27580800227928E+03
   --ifreq--  1786   0.78515040871090E+02   0.27855173183190E+03
   --ifreq--  1787   0.79161568770980E+02   0.28099478712430E+03
   --ifreq--  1788   0.79812714727297E+02   0.28345862377373E+03
   --ifreq--  1789   0.80470787768257E+02   0.28618030182526E+03
   --ifreq--  1790   0.81133478865644E+02   0.28781587290326E+03
   --ifreq--  1791   0.81800788019459E+02   0.29055179483270E+03
   --ifreq--  1792   0.82475024257915E+02   0.29298648381483E+03
   --ifreq--  1793   0.83153878552799E+02   0.29549174736917E+03
   --ifreq--  1794   0.83839659932326E+02   0.29805701083304E+03
   --ifreq--  1795   0.84530059368279E+02   0.30027207551038E+03
   --ifreq--  1796   0.85227385888875E+02   0.30385576289969E+03
   --ifreq--  1797   0.85931639494112E+02   0.30531241472650E+03
   --ifreq--  1798   0.86638202127563E+02   0.30787623071506E+03
   --ifreq--  1799   0.87354000873870E+02   0.31120800523302E+03
   --ifreq--  1800   0.88074417676604E+02   0.31327461543562E+03
   --ifreq--  1801   0.88801761563980E+02   0.31669846209834E+03
   --ifreq--  1802   0.89536032535998E+02   0.31893451835758E+03
   --ifreq--  1803   0.90274921564444E+02   0.32155492362959E+03
   --ifreq--  1804   0.91020737677531E+02   0.32385696915834E+03
   --ifreq--  1805   0.91771171847046E+02   0.32700057235361E+03
   --ifreq--  1806   0.92530842129416E+02   0.33016180283778E+03
   --ifreq--  1807   0.93295130468215E+02   0.33233725462627E+03
   --ifreq--  1808   0.94066345891655E+02   0.33549602627171E+03
   --ifreq--  1809   0.94844488399737E+02   0.33867411878881E+03
   --ifreq--  1810   0.95629557992460E+02   0.34081435377458E+03
   --ifreq--  1811   0.96419245641611E+02   0.34405329594641E+03
   --ifreq--  1812   0.97218169403618E+02   0.34699377618076E+03
   --ifreq--  1813   0.98021711222053E+02   0.34995017217813E+03
   --ifreq--  1814   0.98834489153343E+02   0.35322597855065E+03
   --ifreq--  1815   0.99651885141061E+02   0.35513359185641E+03
   --ifreq--  1816   0.10047620821342E+03   0.35923681779501E+03
   --ifreq--  1817   0.10130976739864E+03   0.36193275870476E+03
   --ifreq--  1818   0.10214794464028E+03   0.36501330932200E+03
   --ifreq--  1819   0.10299535799478E+03   0.36803490097930E+03
   --ifreq--  1820   0.10384738940570E+03   0.37082803341656E+03
   --ifreq--  1821   0.10470865692948E+03   0.37466834816045E+03
   --ifreq--  1822   0.10557685153791E+03   0.37748998863724E+03
   --ifreq--  1823   0.10645197323097E+03   0.38037518679066E+03
   --ifreq--  1824   0.10733402200868E+03   0.38400306155250E+03
   --ifreq--  1825   0.10822530689924E+03   0.38762158957649E+03
   --ifreq--  1826   0.10912351887445E+03   0.39050461983451E+03
   --ifreq--  1827   0.11002865793429E+03   0.39336293686967E+03
   --ifreq--  1828   0.11094072407878E+03   0.39703734238175E+03
   --ifreq--  1829   0.11186202633612E+03   0.40049778923585E+03
   --ifreq--  1830   0.11279025567811E+03   0.40396089827224E+03
   --ifreq--  1831   0.11372772113295E+03   0.40766814034486E+03
   --ifreq--  1832   0.11467211367243E+03   0.41036192825730E+03
   --ifreq--  1833   0.11562343329655E+03   0.41388202986252E+03
   --ifreq--  1834   0.11658398903353E+03   0.41811247118395E+03
   --ifreq--  1835   0.11755378088337E+03   0.42167009994493E+03
   --ifreq--  1836   0.11853049981784E+03   0.42420634393517E+03
   --ifreq--  1837   0.11951414583696E+03   0.42849431901313E+03
   --ifreq--  1838   0.12050933699715E+03   0.43283369485970E+03
   --ifreq--  1839   0.12151145524198E+03   0.43516243229614E+03
   --ifreq--  1840   0.12252050057145E+03   0.43950817316713E+03
   --ifreq--  1841   0.12354109104199E+03   0.44382141359398E+03
   --ifreq--  1842   0.12456860859717E+03   0.44619777730727E+03
   --ifreq--  1843   0.12560305323700E+03   0.45038103974997E+03
   --ifreq--  1844   0.12664904301789E+03   0.45528912395308E+03
   --ifreq--  1845   0.12770426891164E+03   0.45845995581637E+03
   --ifreq--  1846   0.12876642189003E+03   0.46186607634425E+03
   --ifreq--  1847   0.12983781098128E+03   0.46607942356846E+03
   --ifreq--  1848   0.13091843618538E+03   0.46981686887496E+03
   --ifreq--  1849   0.13200829750233E+03   0.47464561590162E+03
   --ifreq--  1850   0.13310970396036E+03   0.47861462822187E+03
   --ifreq--  1851   0.13421803750303E+03   0.48188334604162E+03
   --ifreq--  1852   0.13533560715855E+03   0.48585978794299E+03
   --ifreq--  1853   0.13646241292693E+03   0.49066754181437E+03
   --ifreq--  1854   0.13760076383638E+03   0.49448546419811E+03
   --ifreq--  1855   0.13874604183047E+03   0.49837303254452E+03
   --ifreq--  1856   0.13990286496563E+03   0.50303852173285E+03
   --ifreq--  1857   0.14106892421365E+03   0.50745971157668E+03
   --ifreq--  1858   0.14224652860273E+03   0.51213326775182E+03
   --ifreq--  1859   0.14343336910467E+03   0.51600087102481E+03
   --ifreq--  1860   0.14462944571947E+03   0.51986634918093E+03
   --ifreq--  1861   0.14583475844712E+03   0.52452767161069E+03
   --ifreq--  1862   0.14705161631584E+03   0.52903242829579E+03
   --ifreq--  1863   0.14827771029742E+03   0.53333390375628E+03
   --ifreq--  1864   0.14951534942007E+03   0.53863618519935E+03
   --ifreq--  1865   0.15076453368378E+03   0.54312325991996E+03
   --ifreq--  1866   0.15202295406035E+03   0.54686855221429E+03
   --ifreq--  1867   0.15329061054978E+03   0.55139978619199E+03
   --ifreq--  1868   0.15456981218028E+03   0.55653580681569E+03
   --ifreq--  1869   0.15586055895184E+03   0.56145622099295E+03
   --ifreq--  1870   0.15716285086448E+03   0.56663798727368E+03
   --ifreq--  1871   0.15847668791818E+03   0.57099665693572E+03
   --ifreq--  1872   0.15979976108474E+03   0.57536826856704E+03
   --ifreq--  1873   0.16113437939237E+03   0.58053508490395E+03
   --ifreq--  1874   0.16248054284107E+03   0.58548979034540E+03
   --ifreq--  1875   0.16383825143084E+03   0.59050611409843E+03
   --ifreq--  1876   0.16520750516168E+03   0.59548578025354E+03
   --ifreq--  1877   0.16658830403359E+03   0.60055023725785E+03
   --ifreq--  1878   0.16798064804656E+03   0.60531534671967E+03
   --ifreq--  1879   0.16938453720061E+03   0.61118040291457E+03
   --ifreq--  1880   0.17080228052394E+03   0.61597789817418E+03
   --ifreq--  1881   0.17222925996013E+03   0.62089030527208E+03
   --ifreq--  1882   0.17367009356559E+03   0.62647762146357E+03
   --ifreq--  1883   0.17512247231213E+03   0.63218337323156E+03
   --ifreq--  1884   0.17658870522795E+03   0.63680700517940E+03
   --ifreq--  1885   0.17806417425663E+03   0.64256243664708E+03
   --ifreq--  1886   0.17955580648281E+03   0.64797565460050E+03
   --ifreq--  1887   0.18105667482184E+03   0.65350190380268E+03
   --ifreq--  1888   0.18257370635836E+03   0.65904961514803E+03
   --ifreq--  1889   0.18409997400775E+03   0.66426961610907E+03
   --ifreq--  1890   0.18564240485463E+03   0.67089626779087E+03
   --ifreq--  1891   0.18719638084258E+03   0.67513440699125E+03
   --ifreq--  1892   0.18876190197160E+03   0.68155812966785E+03
   --ifreq--  1893   0.19034358629811E+03   0.68765029153962E+03
   --ifreq--  1894   0.19193681576570E+03   0.69282678518717E+03
   --ifreq--  1895   0.19354389940257E+03   0.69904898474556E+03
   --ifreq--  1896   0.19516483720872E+03   0.70497537481422E+03
   --ifreq--  1897   0.19679962918415E+03   0.71104946921825E+03
   --ifreq--  1898   0.19844827532887E+03   0.71682858499016E+03
   --ifreq--  1899   0.20011077564288E+03   0.72362899701694E+03
   --ifreq--  1900   0.20178943915438E+03   0.72966838906318E+03
   --ifreq--  1901   0.20347964780695E+03   0.73468699185780E+03
   --ifreq--  1902   0.20518371062880E+03   0.74158362642152E+03
   --ifreq--  1903   0.20690393664815E+03   0.74798637760215E+03
   --ifreq--  1904   0.20863801683678E+03   0.75446088372828E+03
   --ifreq--  1905   0.21038826022291E+03   0.76117914425310E+03
   --ifreq--  1906   0.21215235777833E+03   0.76681850615116E+03
   --ifreq--  1907   0.21393030950302E+03   0.77354279258113E+03
   --ifreq--  1908   0.21572442442522E+03   0.78001907742316E+03
   --ifreq--  1909   0.21753239351669E+03   0.78637201430562E+03
   --ifreq--  1910   0.21935652580567E+03   0.79349864483898E+03
   --ifreq--  1911   0.22119682129214E+03   0.80062996884686E+03
   --ifreq--  1912   0.22305327997611E+03   0.80698707748958E+03
   --ifreq--  1913   0.22492359282936E+03   0.81341370261299E+03
   --ifreq--  1914   0.22681006888011E+03   0.82036506998729E+03
   --ifreq--  1915   0.22871270812836E+03   0.82811715931943E+03
   --ifreq--  1916   0.23063381960232E+03   0.83517980995848E+03
   --ifreq--  1917   0.23256878524556E+03   0.84115317520364E+03
   --ifreq--  1918   0.23451991408630E+03   0.84920615627905E+03
   --ifreq--  1919   0.23648951515275E+03   0.85603436938126E+03
   --ifreq--  1920   0.23847297038848E+03   0.86264204081373E+03
   --ifreq--  1921   0.24047489784993E+03   0.87140342418799E+03
   --ifreq--  1922   0.24249529753709E+03   0.87775311848641E+03
   --ifreq--  1923   0.24452955139352E+03   0.88556082182558E+03
   --ifreq--  1924   0.24658458650389E+03   0.89303420432321E+03
   --ifreq--  1925   0.24865347578354E+03   0.90027279364772E+03
   --ifreq--  1926   0.25074314631711E+03   0.90889866570818E+03
   --ifreq--  1927   0.25284898004818E+03   0.91512220897575E+03
   --ifreq--  1928   0.25497097697675E+03   0.92360429958173E+03
   --ifreq--  1929   0.25711375515924E+03   0.93147938230120E+03
   --ifreq--  1930   0.25927269653923E+03   0.93945729650050E+03
   --ifreq--  1931   0.26145241917314E+03   0.94771139010657E+03
   --ifreq--  1932   0.26364830500455E+03   0.95468409075824E+03
   --ifreq--  1933   0.26586266306168E+03   0.96355350188885E+03
   --ifreq--  1934   0.26809780237272E+03   0.97210823422337E+03
   --ifreq--  1935   0.27035141390948E+03   0.98000835385144E+03
   --ifreq--  1936   0.27262349767195E+03   0.98786134737700E+03
   --ifreq--  1937   0.27491405366013E+03   0.99654009142442E+03
   --ifreq--  1938   0.27722539090224E+03   0.10049880441350E+04
   --ifreq--  1939   0.27955520037006E+03   0.10134970063826E+04
   --ifreq--  1940   0.28190579109180E+03   0.10220346513275E+04
   --ifreq--  1941   0.28427485403925E+03   0.10303551583953E+04
   --ifreq--  1942   0.28666469824063E+03   0.10395500716905E+04
   --ifreq--  1943   0.28907532369594E+03   0.10484433908500E+04
   --ifreq--  1944   0.29150673040516E+03   0.10576747877237E+04
   --ifreq--  1945   0.29395891836832E+03   0.10658638161534E+04
   --ifreq--  1946   0.29642957855718E+03   0.10748575406872E+04
   --ifreq--  1947   0.29892332902819E+03   0.10847187451679E+04
   --ifreq--  1948   0.30143786075312E+03   0.10932626934728E+04
   --ifreq--  1949   0.30397317373197E+03   0.11032244278651E+04
   --ifreq--  1950   0.30653157699296E+03   0.11118550060814E+04
   --ifreq--  1951   0.30910845247967E+03   0.11213330182522E+04
   --ifreq--  1952   0.31171072727672E+03   0.11318359515975E+04
   --ifreq--  1953   0.31433378332771E+03   0.11403115701540E+04
   --ifreq--  1954   0.31697762063261E+03   0.11499174091798E+04
   --ifreq--  1955   0.31964454821966E+03   0.11600217860381E+04
   --ifreq--  1956   0.32233456608884E+03   0.11699943346634E+04
   --ifreq--  1957   0.32504767424017E+03   0.11800010726238E+04
   --ifreq--  1958   0.32778387267363E+03   0.11900012758909E+04
   --ifreq--  1959   0.33054316138923E+03   0.11999939681081E+04
   --ifreq--  1960   0.33332554038697E+03   0.12100227111706E+04
   --ifreq--  1961   0.33613100966685E+03   0.12199162186646E+04
   --ifreq--  1962   0.33895956922887E+03   0.12303094474126E+04
   --ifreq--  1963   0.34181352810124E+03   0.12418460187229E+04
   --ifreq--  1964   0.34469288628396E+03   0.12513168788861E+04
   --ifreq--  1965   0.34759302572061E+03   0.12618653744448E+04
   --ifreq--  1966   0.35052087349583E+03   0.12732448945774E+04
   --ifreq--  1967   0.35347181155318E+03   0.12831409296858E+04
   --ifreq--  1968   0.35644814892089E+03   0.12951913867696E+04
   --ifreq--  1969   0.35945219462716E+03   0.13061048720338E+04
   --ifreq--  1970   0.36247933061558E+03   0.13163766680036E+04
   --ifreq--  1971   0.36553186591434E+03   0.13273962272964E+04
   --ifreq--  1972   0.36860980052346E+03   0.13390306551961E+04
   --ifreq--  1973   0.37171544347114E+03   0.13504913990875E+04
   --ifreq--  1974   0.37484648572918E+03   0.13619928689222E+04
   --ifreq--  1975   0.37800523632579E+03   0.13735475640428E+04
   --ifreq--  1976   0.38118938623275E+03   0.13848080244166E+04
   --ifreq--  1977   0.38440124447827E+03   0.13972236433129E+04
   --ifreq--  1978   0.38764081106236E+03   0.14083028215677E+04
   --ifreq--  1979   0.39090577695680E+03   0.14205503941345E+04
   --ifreq--  1980   0.39420076021803E+03   0.14325155469104E+04
   --ifreq--  1981   0.39752114278961E+03   0.14443674527587E+04
   --ifreq--  1982   0.40087154272796E+03   0.14570313266852E+04
   --ifreq--  1983   0.40424965100489E+03   0.14694942891448E+04
   --ifreq--  1984   0.40765777664859E+03   0.14820032893658E+04
   --ifreq--  1985   0.41109361063087E+03   0.14944814812720E+04
   --ifreq--  1986   0.41455946197992E+03   0.15070809116915E+04
   --ifreq--  1987   0.41805302166754E+03   0.15191875215191E+04
   --ifreq--  1988   0.42157659872194E+03   0.15331674653806E+04
   --ifreq--  1989   0.42513250217133E+03   0.15461539144681E+04
   --ifreq--  1990   0.42871611395929E+03   0.15582061854616E+04
   --ifreq--  1991   0.43232974311403E+03   0.15720225242905E+04
   --ifreq--  1992   0.43597569866377E+03   0.15857088258112E+04
   --ifreq--  1993   0.43965167158029E+03   0.15981413289255E+04
   --ifreq--  1994   0.44335766186358E+03   0.16127139944914E+04
   --ifreq--  1995   0.44709828757009E+03   0.16260262707726E+04
   --ifreq--  1996   0.45086662161516E+03   0.16391552378179E+04
   --ifreq--  1997   0.45466959108344E+03   0.16543708480096E+04
   --ifreq--  1998   0.45850488694672E+03   0.16673581036432E+04
   --ifreq--  1999   0.46237020017677E+03   0.16811888498235E+04
   --ifreq--  2000   0.46627014883004E+03   0.16968907939161E+04
   --ifreq--  2001   0.47020473290651E+03   0.17102580244869E+04
   --ifreq--  2002   0.47416933434976E+03   0.17250536279386E+04
   --ifreq--  2003   0.47817088024444E+03   0.17395576357889E+04
   --ifreq--  2004   0.48220244350590E+03   0.17536872461939E+04
   --ifreq--  2005   0.48627095121877E+03   0.17697136853914E+04
   --ifreq--  2006   0.49037409435486E+03   0.17844487349808E+04
   --ifreq--  2007   0.49451187291416E+03   0.17994941361001E+04
   --ifreq--  2008   0.49868428689666E+03   0.18145730893766E+04
   --ifreq--  2009   0.50289133630237E+03   0.18292168399346E+04
   --ifreq--  2010   0.50713302113129E+03   0.18455482837347E+04
   --ifreq--  2011   0.51141395943985E+03   0.18616082338203E+04
   --ifreq--  2012   0.51572953317161E+03   0.18770023680868E+04
   --ifreq--  2013   0.52008205135480E+03   0.18923956608590E+04
   --ifreq--  2014   0.52446920496120E+03   0.19083995455790E+04
   --ifreq--  2015   0.52889561204723E+03   0.19250216568353E+04
   --ifreq--  2016   0.53335896358468E+03   0.19415010665777E+04
   --ifreq--  2017   0.53786156860177E+03   0.19579857740319E+04
   --ifreq--  2018   0.54240111807028E+03   0.19745441722748E+04
   --ifreq--  2019   0.54697992101843E+03   0.19908502429362E+04
   --ifreq--  2020   0.55159566841800E+03   0.20080380170539E+04
   --ifreq--  2021   0.55625297832542E+03   0.20250181451086E+04
   --ifreq--  2022   0.56094723268427E+03   0.20418692595160E+04
   --ifreq--  2023   0.56568304955096E+03   0.20595215244854E+04
   --ifreq--  2024   0.57045811989729E+03   0.20770313389105E+04
   --ifreq--  2025   0.57527475275147E+03   0.20943664630924E+04
   --ifreq--  2026   0.58013063908529E+03   0.21124865216812E+04
   --ifreq--  2027   0.58503039695516E+03   0.21307059825399E+04
   --ifreq--  2028   0.58996940830468E+03   0.21476766920432E+04
   --ifreq--  2029   0.59494998216205E+03   0.21665882761047E+04
   --ifreq--  2030   0.59997442755548E+03   0.21849777820795E+04
   --ifreq--  2031   0.60504043545676E+03   0.22034904939415E+04
   --ifreq--  2032   0.61015031489410E+03   0.22220702428196E+04
   --ifreq--  2033   0.61530175683929E+03   0.22402209275183E+04
   --ifreq--  2034   0.62049707032055E+03   0.22600461330863E+04
   --ifreq--  2035   0.62573856436609E+03   0.22796012840600E+04
   --ifreq--  2036   0.63102392994769E+03   0.22985431663455E+04
   --ifreq--  2037   0.63635316706535E+03   0.23172304658241E+04
   --ifreq--  2038   0.64172627571908E+03   0.23375236440448E+04
   --ifreq--  2039   0.64714787396530E+03   0.23576921014444E+04
   --ifreq--  2040   0.65261334374758E+03   0.23766952098841E+04
   --ifreq--  2041   0.65812499409414E+03   0.23975287621120E+04
   --ifreq--  2042   0.66368513403320E+03   0.24181948346508E+04
   --ifreq--  2043   0.66929145453653E+03   0.24376906940407E+04
   --ifreq--  2044   0.67494395560413E+03   0.24590329973507E+04
   --ifreq--  2045   0.68064725529245E+03   0.24801939694436E+04
   --ifreq--  2046   0.68639673554504E+03   0.25001790627121E+04
   --ifreq--  2047   0.69219470539012E+03   0.25220908288219E+04
   --ifreq--  2048   0.69804347385591E+03   0.25434654795212E+04
   --ifreq--  2049   0.70394073191419E+03   0.25650367648402E+04
   --ifreq--  2050   0.70988878859318E+03   0.25863996578116E+04
   --ifreq--  2051   0.71588533486466E+03   0.26083503207959E+04
   --ifreq--  2052   0.72193498878506E+03   0.26312120135555E+04
   --ifreq--  2053   0.72803544132616E+03   0.26527965167276E+04
   --ifreq--  2054   0.73418669248797E+03   0.26755977309099E+04
   --ifreq--  2055   0.74039105129870E+03   0.26978236374851E+04
   --ifreq--  2056   0.74664620873013E+03   0.27210909977344E+04
   --ifreq--  2057   0.75295678283870E+03   0.27438348078780E+04
   --ifreq--  2058   0.75931815556798E+03   0.27675421485245E+04
   --ifreq--  2059   0.76573725400260E+03   0.27910281018309E+04
   --ifreq--  2060   0.77220715105792E+03   0.28143145841047E+04
   --ifreq--  2061   0.77873477381860E+03   0.28387389363660E+04
   --ifreq--  2062   0.78531550422819E+03   0.28617141694490E+04
   --ifreq--  2063   0.79195165131492E+03   0.28864083302133E+04
   --ifreq--  2064   0.79864552410699E+03   0.29116525436426E+04
   --ifreq--  2065   0.80539712260441E+03   0.29359858416504E+04
   --ifreq--  2066   0.81220413777897E+03   0.29603959100701E+04
   --ifreq--  2067   0.81906887865887E+03   0.29854366024966E+04
   --ifreq--  2068   0.82599134524412E+03   0.30108526406912E+04
   --ifreq--  2069   0.83297384656293E+03   0.30371556235529E+04
   --ifreq--  2070   0.84001638261530E+03   0.30625280840104E+04
   --ifreq--  2071   0.84711664437302E+03   0.30877264281714E+04
   --ifreq--  2072   0.85427694086430E+03   0.31145657212022E+04
   --ifreq--  2073   0.86149958111736E+03   0.31410182185381E+04
   --ifreq--  2074   0.86878225610397E+03   0.31673529481010E+04
   --ifreq--  2075   0.87612727485236E+03   0.31945751678066E+04
   --ifreq--  2076   0.88353463736253E+03   0.32213467682362E+04
   --ifreq--  2077   0.89100434363447E+03   0.32490329053187E+04
   --ifreq--  2078   0.89853870269640E+03   0.32765306431354E+04
   --ifreq--  2079   0.90613540552011E+03   0.33038361127099E+04
   --ifreq--  2080   0.91379676113380E+03   0.33321293214324E+04
   --ifreq--  2081   0.92152276953749E+03   0.33596493183188E+04
   --ifreq--  2082   0.92931343073116E+03   0.33892604921513E+04
   --ifreq--  2083   0.93717336277125E+03   0.34173347308461E+04
   --ifreq--  2084   0.94509563857312E+03   0.34463666884465E+04
   --ifreq--  2085   0.95308949424961E+03   0.34762332297028E+04
   --ifreq--  2086   0.96114800271610E+03   0.35046750608938E+04
   --ifreq--  2087   0.96927578202900E+03   0.35350796912058E+04
   --ifreq--  2088   0.97747283218831E+03   0.35650020284313E+04
   --ifreq--  2089   0.98573915319405E+03   0.35949142037564E+04
   --ifreq--  2090   0.99407474504620E+03   0.36253374822048E+04
   --ifreq--  2091   0.10024819167730E+04   0.36567370962738E+04
   --ifreq--  2092   0.10109606683744E+04   0.36867207873777E+04
   --ifreq--  2093   0.10195086908222E+04   0.37183616032911E+04
   --ifreq--  2094   0.10281329112011E+04   0.37508532096531E+04
   --ifreq--  2095   0.10368287114546E+04   0.37812160846024E+04
   --ifreq--  2096   0.10455960915828E+04   0.38132785217320E+04
   --ifreq--  2097   0.10544396696420E+04   0.38466752233110E+04
   --ifreq--  2098   0.10633594456323E+04   0.38790231503910E+04
   --ifreq--  2099   0.10723531105254E+04   0.39112267944115E+04
   --ifreq--  2100   0.10814229733495E+04   0.39450688836858E+04
   --ifreq--  2101   0.10905713431330E+04   0.39785049989096E+04
   --ifreq--  2102   0.10997959108475E+04   0.40119018429740E+04
   --ifreq--  2103   0.11090989855212E+04   0.40458946338002E+04
   --ifreq--  2104   0.11184805671543E+04   0.40805122824797E+04
   --ifreq--  2105   0.11279429647748E+04   0.41150652589767E+04
   --ifreq--  2106   0.11374838693546E+04   0.41492189888924E+04
   --ifreq--  2107   0.11471055899219E+04   0.41850586166791E+04
   --ifreq--  2108   0.11568104355049E+04   0.42205538456141E+04
   --ifreq--  2109   0.11665960970754E+04   0.42557195291564E+04
   --ifreq--  2110   0.11764648836616E+04   0.42925680034578E+04
   --ifreq--  2111   0.11864191042917E+04   0.43290163525812E+04
   --ifreq--  2112   0.11964564499374E+04   0.43653582574512E+04
   --ifreq--  2113   0.12065792296271E+04   0.44025554658669E+04
   --ifreq--  2114   0.12167874433608E+04   0.44394188456933E+04
   --ifreq--  2115   0.12270810911383E+04   0.44767670501197E+04
   --ifreq--  2116   0.12374624819880E+04   0.45155115695744E+04
   --ifreq--  2117   0.12479339249380E+04   0.45541927369272E+04
   --ifreq--  2118   0.12584931109601E+04   0.45917158074116E+04
   --ifreq--  2119   0.12691400400543E+04   0.46309362175080E+04
   --ifreq--  2120   0.12798793302772E+04   0.46705518822563E+04
   --ifreq--  2121   0.12907086726003E+04   0.47098459849820E+04
   --ifreq--  2122   0.13016303760520E+04   0.47500693042621E+04
   --ifreq--  2123   0.13126444406323E+04   0.47898757995485E+04
   --ifreq--  2124   0.13237508663411E+04   0.48304234704221E+04
   --ifreq--  2125   0.13349519622067E+04   0.48714353399291E+04
   --ifreq--  2126   0.13462477282291E+04   0.49128312939180E+04
   --ifreq--  2127   0.13576404734364E+04   0.49552412813007E+04
   --ifreq--  2128   0.13691301978287E+04   0.49962108076137E+04
   --ifreq--  2129   0.13807145923778E+04   0.50388971548977E+04
   --ifreq--  2130   0.13924005841683E+04   0.50822221529012E+04
   --ifreq--  2131   0.14041835551438E+04   0.51241992636279E+04
   --ifreq--  2132   0.14160658143325E+04   0.51679828679309E+04
   --ifreq--  2133   0.14280496707626E+04   0.52118727890639E+04
   --ifreq--  2134   0.14401351244341E+04   0.52565203950976E+04
   --ifreq--  2135   0.14523244843753E+04   0.53010548197503E+04
   --ifreq--  2136   0.14646154415578E+04   0.53452521357018E+04
   --ifreq--  2137   0.14770103050100E+04   0.53909377340885E+04
   --ifreq--  2138   0.14895113837600E+04   0.54369991675157E+04
   --ifreq--  2139   0.15021186778079E+04   0.54830637702490E+04
   --ifreq--  2140   0.15148321871536E+04   0.55287490727430E+04
   --ifreq--  2141   0.15276519117971E+04   0.55759301931654E+04
   --ifreq--  2142   0.15405824697949E+04   0.56235436190665E+04
   --ifreq--  2143   0.15536215521187E+04   0.56708846495803E+04
   --ifreq--  2144   0.15667714677969E+04   0.57189246276469E+04
   --ifreq--  2145   0.15800322168292E+04   0.57674108169240E+04
   --ifreq--  2146   0.15934061082441E+04   0.58164377863996E+04
   --ifreq--  2147   0.16068931420415E+04   0.58658332839118E+04
   --ifreq--  2148   0.16204956272495E+04   0.59162307715298E+04
   --ifreq--  2149   0.16342135638682E+04   0.59652505168455E+04
   --ifreq--  2150   0.16480446428694E+04   0.60157513477892E+04
   --ifreq--  2151   0.16619957913378E+04   0.60677608825927E+04
   --ifreq--  2152   0.16760647002450E+04   0.61182004968263E+04
   --ifreq--  2153   0.16902513695912E+04   0.61704302522233E+04
   --ifreq--  2154   0.17045604174327E+04   0.62230905285921E+04
   --ifreq--  2155   0.17189895347413E+04   0.62751993224761E+04
   --ifreq--  2156   0.17335410305452E+04   0.63291115389596E+04
   --ifreq--  2157   0.17482172138727E+04   0.63823633629029E+04
   --ifreq--  2158   0.17630157756956E+04   0.64364209887670E+04
   --ifreq--  2159   0.17779413340702E+04   0.64909688889427E+04
   --ifreq--  2160   0.17929915799683E+04   0.65456893884621E+04
   --ifreq--  2161   0.18081711314465E+04   0.66022805397117E+04
   --ifreq--  2162   0.18234799885046E+04   0.66571937327167E+04
   --ifreq--  2163   0.18389158421144E+04   0.67139269889414E+04
   --ifreq--  2164   0.18544856193607E+04   0.67711219953762E+04
   --ifreq--  2165   0.18701847021870E+04   0.68275674988385E+04
   --ifreq--  2166   0.18860177086496E+04   0.68866135910721E+04
   --ifreq--  2167   0.19019869477769E+04   0.69449848726036E+04
   --ifreq--  2168   0.19180901105406E+04   0.70034378751948E+04
   --ifreq--  2169   0.19343295059689E+04   0.70622725942460E+04
   --ifreq--  2170   0.19507051340618E+04   0.71224607907302E+04
   --ifreq--  2171   0.19672216128758E+04   0.71828996120368E+04
   --ifreq--  2172   0.19838766333826E+04   0.72439242904796E+04
   --ifreq--  2173   0.20006748136387E+04   0.73054202765722E+04
   --ifreq--  2174   0.20176138446158E+04   0.73673783480002E+04
   --ifreq--  2175   0.20346983443704E+04   0.74300813852531E+04
   --ifreq--  2176   0.20519260038742E+04   0.74922858012765E+04
   --ifreq--  2177   0.20692991321555E+04   0.75557789792640E+04
   --ifreq--  2178   0.20868200382426E+04   0.76205943905434E+04
   --ifreq--  2179   0.21044910311635E+04   0.76848544792760E+04
   --ifreq--  2180   0.21223098018901E+04   0.77499728017437E+04
   --ifreq--  2181   0.21402809684788E+04   0.78152719693125E+04
   --ifreq--  2182   0.21584022219014E+04   0.78819166736258E+04
   --ifreq--  2183   0.21766804892426E+04   0.79490852952790E+04
   --ifreq--  2184   0.21951111524459E+04   0.80157214688933E+04
   --ifreq--  2185   0.22136988295677E+04   0.80840404229032E+04
   --ifreq--  2186   0.22324435206081E+04   0.81521128269196E+04
   --ifreq--  2187   0.22513475345952E+04   0.82225022841109E+04
   --ifreq--  2188   0.22704131805574E+04   0.82899039689861E+04
   --ifreq--  2189   0.22896381494662E+04   0.83668039166992E+04
   --ifreq--  2190   0.23090270593783E+04   0.42065226360944E+04
     Total number of log frequencies is  2190
   --ifreq--     1   0.11545141069462E-02
   --sel_log   1
   --ifreq--     2   0.34635423208386E-02
   --sel_log   1
   --ifreq--     3   0.57725705347310E-02
   --sel_log   1
   --ifreq--     4   0.80815987486233E-02
   --sel_log   1
   --ifreq--     5   0.10390626962516E-01
   --sel_log   1
   --ifreq--     6   0.12699655176408E-01
   --sel_log   1
   --ifreq--     7   0.15008683390301E-01
   --sel_log   1
   --ifreq--     8   0.17317711604193E-01
   --sel_log   1
   --ifreq--     9   0.19626739818085E-01
   --sel_log   1
   --ifreq--    10   0.21935768031978E-01
   --sel_log   1
   --ifreq--    11   0.24244796245870E-01
   --sel_log   1
   --ifreq--    12   0.26553824459762E-01
   --sel_log   1
   --ifreq--    13   0.28862852673655E-01
   --sel_log   1
   --ifreq--    14   0.31171880887547E-01
   --sel_log   1
   --ifreq--    15   0.33480909101440E-01
   --sel_log   1
   --ifreq--    16   0.35789937315332E-01
   --sel_log   1
   --ifreq--    17   0.38098965529224E-01
   --sel_log   1
   --ifreq--    18   0.40407993743117E-01
   --sel_log   1
   --ifreq--    19   0.42717021957009E-01
   --sel_log   1
   --ifreq--    20   0.45026050170901E-01
   --sel_log   1
   --ifreq--    21   0.47335078384794E-01
   --sel_log   1
   --ifreq--    22   0.49644106598686E-01
   --sel_log   1
   --ifreq--    23   0.51953134812579E-01
   --sel_log   1
   --ifreq--    24   0.54262163026471E-01
   --sel_log   1
   --ifreq--    25   0.56571191240363E-01
   --sel_log   1
   --ifreq--    26   0.58880219454256E-01
   --sel_log   1
   --ifreq--    27   0.61189247668148E-01
   --sel_log   1
   --ifreq--    28   0.63498275882041E-01
   --sel_log   1
   --ifreq--    29   0.65807304095933E-01
   --sel_log   1
   --ifreq--    30   0.68116332309825E-01
   --sel_log   1
   --ifreq--...
   --ifreq--******    0.23090E+04
   1  2
   2  1
   3  3
   4  5
   5  4
   6  6
   7 20
   8 19
   9 21
  10 23
  11 22
  12 24
  13 38
  14 37
  15 39
  16 41
  17 40
  18 42
  19  8
  20  7
  21  9
  22 11
  23 10
  24 12
  25 26
  26 25
  27 27
  28 29
  29 28
  30 30
  31 44
  32 43
  33 45
  34 47
  35 46
  36 48
  37 14
  38 13
  39 15
  40 17
  41 16
  42 18
  43 32
  44 31
  45 33
  46 35
  47 34
  48 36
  49 50
  50 49
  51 51
  52 53
  53 52
  54 54
  55 55
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FD4CB160961  Unknown               Unknown  Unknown
libirc.so          00007FD4CB15F0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FD4CCB0F7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FD4CCB0F606  Unknown               Unknown  Unknown
libifcore.so.5     00007FD4CCA7C42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FD4CCA8D328  Unknown               Unknown  Unknown
libpthread.so.0    00007FD4CCFAD130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FD4CADB4AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F31570F3961  Unknown               Unknown  Unknown
libirc.so          00007F31570F20B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F3158AA27B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F3158AA2606  Unknown               Unknown  Unknown
libifcore.so.5     00007F3158A0F42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F3158A20328  Unknown               Unknown  Unknown
libpthread.so.0    00007F3158F40130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F3156D47AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F33089AF961  Unknown               Unknown  Unknown
libirc.so          00007F33089AE0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F330A35E7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F330A35E606  Unknown               Unknown  Unknown
libifcore.so.5     00007F330A2CB42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F330A2DC328  Unknown               Unknown  Unknown
libpthread.so.0    00007F330A7FC130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F3308603AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F4D8BF3D961  Unknown               Unknown  Unknown
libirc.so          00007F4D8BF3C0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F4D8D8EC7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F4D8D8EC606  Unknown               Unknown  Unknown
libifcore.so.5     00007F4D8D85942C  Unknown               Unknown  Unknown
libifcore.so.5     00007F4D8D86A328  Unknown               Unknown  Unknown
libpthread.so.0    00007F4D8DD8A130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F4D8BB91AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FAE98FFF961  Unknown               Unknown  Unknown
libirc.so          00007FAE98FFE0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FAE9A9AE7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FAE9A9AE606  Unknown               Unknown  Unknown
libifcore.so.5     00007FAE9A91B42C  Unknown               Unknown  Unknown
libifcore.so.5     00007FAE9A92C328  Unknown               Unknown  Unknown
libpthread.so.0    00007FAE9AE4C130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FAE98C53AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F6D291F8961  Unknown               Unknown  Unknown
libirc.so          00007F6D291F70B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F6D2ABA77B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F6D2ABA7606  Unknown               Unknown  Unknown
libifcore.so.5     00007F6D2AB1442C  Unknown               Unknown  Unknown
libifcore.so.5     00007F6D2AB25328  Unknown               Unknown  Unknown
libpthread.so.0    00007F6D2B045130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F6D28E4CAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F15C2A20961  Unknown               Unknown  Unknown
libirc.so          00007F15C2A1F0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F15C43CF7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F15C43CF606  Unknown               Unknown  Unknown
libifcore.so.5     00007F15C433C42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F15C434D328  Unknown               Unknown  Unknown
libpthread.so.0    00007F15C486D130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F15C2674AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FC609ED8961  Unknown               Unknown  Unknown
libirc.so          00007FC609ED70B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FC60B8877B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FC60B887606  Unknown               Unknown  Unknown
libifcore.so.5     00007FC60B7F442C  Unknown               Unknown  Unknown
libifcore.so.5     00007FC60B805328  Unknown               Unknown  Unknown
libpthread.so.0    00007FC60BD25130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FC609B2CAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F95E0EAF961  Unknown               Unknown  Unknown
libirc.so          00007F95E0EAE0B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F95E285E7B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F95E285E606  Unknown               Unknown  Unknown
libifcore.so.5     00007F95E27CB42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F95E27DC328  Unknown               Unknown  Unknown
libpthread.so.0    00007F95E2CFC130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F95E0B03AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F530B377961  Unknown               Unknown  Unknown
libirc.so          00007F530B3760B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F530CD267B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F530CD26606  Unknown               Unknown  Unknown
libifcore.so.5     00007F530CC9342C  Unknown               Unknown  Unknown
libifcore.so.5     00007F530CCA4328  Unknown               Unknown  Unknown
libpthread.so.0    00007F530D1C4130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F530AFCBAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F087CC42961  Unknown               Unknown  Unknown
libirc.so          00007F087CC410B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F087E5F17B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F087E5F1606  Unknown               Unknown  Unknown
libifcore.so.5     00007F087E55E42C  Unknown               Unknown  Unknown
libifcore.so.5     00007F087E56F328  Unknown               Unknown  Unknown
libpthread.so.0    00007F087EA8F130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F087C896AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FF4D1838961  Unknown               Unknown  Unknown
libirc.so          00007FF4D18370B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FF4D31E77B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FF4D31E7606  Unknown               Unknown  Unknown
libifcore.so.5     00007FF4D315442C  Unknown               Unknown  Unknown
libifcore.so.5     00007FF4D3165328  Unknown               Unknown  Unknown
libpthread.so.0    00007FF4D3685130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FF4D148CAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007F925FC94961  Unknown               Unknown  Unknown
libirc.so          00007F925FC930B7  Unknown               Unknown  Unknown
libifcore.so.5     00007F92616437B2  Unknown               Unknown  Unknown
libifcore.so.5     00007F9261643606  Unknown               Unknown  Unknown
libifcore.so.5     00007F92615B042C  Unknown               Unknown  Unknown
libifcore.so.5     00007F92615C1328  Unknown               Unknown  Unknown
libpthread.so.0    00007F9261AE1130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007F925F8E8AF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FE2DF367961  Unknown               Unknown  Unknown
libirc.so          00007FE2DF3660B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FE2E0D167B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FE2E0D16606  Unknown               Unknown  Unknown
libifcore.so.5     00007FE2E0C8342C  Unknown               Unknown  Unknown
libifcore.so.5     00007FE2E0C94328  Unknown               Unknown  Unknown
libpthread.so.0    00007FE2E11B4130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FE2DEFBBAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FFC0335A961  Unknown               Unknown  Unknown
libirc.so          00007FFC033590B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FFC04D097B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FFC04D09606  Unknown               Unknown  Unknown
libifcore.so.5     00007FFC04C7642C  Unknown               Unknown  Unknown
libifcore.so.5     00007FFC04C87328  Unknown               Unknown  Unknown
libpthread.so.0    00007FFC051A7130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FFC02FAEAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
forrtl: severe (174): SIGSEGV, segmentation fault occurred
Image              PC                Routine            Line        Source             
libirc.so          00007FD94B826961  Unknown               Unknown  Unknown
libirc.so          00007FD94B8250B7  Unknown               Unknown  Unknown
libifcore.so.5     00007FD94D1D57B2  Unknown               Unknown  Unknown
libifcore.so.5     00007FD94D1D5606  Unknown               Unknown  Unknown
libifcore.so.5     00007FD94D14242C  Unknown               Unknown  Unknown
libifcore.so.5     00007FD94D153328  Unknown               Unknown  Unknown
libpthread.so.0    00007FD94D673130  Unknown               Unknown  Unknown
abinit             00000000021AA505  Unknown               Unknown  Unknown
abinit             0000000000D39A85  Unknown               Unknown  Unknown
abinit             00000000005FB00B  Unknown               Unknown  Unknown
abinit             0000000000599F54  Unknown               Unknown  Unknown
abinit             000000000058FE18  Unknown               Unknown  Unknown
abinit             0000000000533DCD  Unknown               Unknown  Unknown
abinit             000000000042EC81  Unknown               Unknown  Unknown
abinit             00000000004137F5  Unknown               Unknown  Unknown
abinit             000000000040875F  Unknown               Unknown  Unknown
abinit             00000000004067CE  Unknown               Unknown  Unknown
libc.so.6          00007FD94B47AAF5  Unknown               Unknown  Unknown
abinit             00000000004066D9  Unknown               Unknown  Unknown
