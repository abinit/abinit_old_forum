+ . /sw/batch/init.sh
++ . /sw/modules/init.sh
++++ tclsh /sw/modules/tcl/modulecmd.tcl sh autoinit
+++ eval module '()' '{' eval '`'\''/bin/tclsh'\''' ''\''/sw/modules/tcl/modulecmd.tcl'\''' ''\''sh'\''' '$*`;' '}' ';' 'MODULESHOME=/sw/modules/tcl;' export 'MODULESHOME;'
++++ MODULESHOME=/sw/modules/tcl
++++ export MODULESHOME
++ module load site/tmpdir
+++ /bin/tclsh /sw/modules/tcl/modulecmd.tcl sh load site/tmpdir
module: loaded site/tmpdir
++ eval '_LMFILES__modshare=/sw/BASE/env/system-gcc:1:/sw/BASE/site/slurm:1:/sw/BASE/site/hummel:1:/sw/BASE/site/tmpdir:2;' export '_LMFILES__modshare;' 'LOADEDMODULES_modshare=site/hummel:1:site/tmpdir:2:env/system-gcc:1:site/slurm:1;' export 'LOADEDMODULES_modshare;' 'TMPDIR=/scratch/fckx115.6357;' export 'TMPDIR;' 'RRZ_GLOBAL_TMPDIR=/work/scratch/fckx115.6357;' export 'RRZ_GLOBAL_TMPDIR;' '_LMFILES_=/sw/BASE/site/slurm:/sw/BASE/site/tmpdir:/sw/BASE/site/hummel:/sw/BASE/env/system-gcc;' export '_LMFILES_;' 'LOADEDMODULES=site/slurm:site/tmpdir:site/hummel:env/system-gcc;' export 'LOADEDMODULES;' 'RRZ_LOCAL_TMPDIR=/scratch/fckx115.6357;' export 'RRZ_LOCAL_TMPDIR;'
+++ _LMFILES__modshare=/sw/BASE/env/system-gcc:1:/sw/BASE/site/slurm:1:/sw/BASE/site/hummel:1:/sw/BASE/site/tmpdir:2
+++ export _LMFILES__modshare
+++ LOADEDMODULES_modshare=site/hummel:1:site/tmpdir:2:env/system-gcc:1:site/slurm:1
+++ export LOADEDMODULES_modshare
+++ TMPDIR=/scratch/fckx115.6357
+++ export TMPDIR
+++ RRZ_GLOBAL_TMPDIR=/work/scratch/fckx115.6357
+++ export RRZ_GLOBAL_TMPDIR
+++ _LMFILES_=/sw/BASE/site/slurm:/sw/BASE/site/tmpdir:/sw/BASE/site/hummel:/sw/BASE/env/system-gcc
+++ export _LMFILES_
+++ LOADEDMODULES=site/slurm:site/tmpdir:site/hummel:env/system-gcc
+++ export LOADEDMODULES
+++ RRZ_LOCAL_TMPDIR=/scratch/fckx115.6357
+++ export RRZ_LOCAL_TMPDIR
++ unset SLURM_EXPORT_ENV
+ module switch env env/gcc-5.2.0_openmpi-1.8.6
++ /bin/tclsh /sw/modules/tcl/modulecmd.tcl sh switch env env/gcc-5.2.0_openmpi-1.8.6
module: unloaded env/system-gcc
module: loaded env/gcc-5.2.0_openmpi-1.8.6
+ eval 'CPATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/include:/sw/compiler/gcc-5.2.0/include;' export 'CPATH;' 'LD_LIBRARY_PATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/lib/openmpi:/sw/env/gcc-5.2.0/openmpi/1.8.6/lib:/sw/compiler/gcc-5.2.0/lib64:/sw/compiler/gcc-5.2.0/lib;' export 'LD_LIBRARY_PATH;' 'LD_RUN_PATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/lib/openmpi:/sw/env/gcc-5.2.0/openmpi/1.8.6/lib:/sw/compiler/gcc-5.2.0/lib64:/sw/compiler/gcc-5.2.0/lib;' export 'LD_RUN_PATH;' 'INFOPATH=/sw/compiler/gcc-5.2.0/share/info:/usr/share/info;' export 'INFOPATH;' 'MANPATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/share/man:/sw/compiler/gcc-5.2.0/share/man:/sw/batch/slurm/14.11.8/share/man:/sw/rrz/share/man:/sw/modules/man:/usr/share/man;' export 'MANPATH;' 'LOADEDMODULES=site/slurm:site/tmpdir:site/hummel:env/gcc-5.2.0_openmpi-1.8.6;' export 'LOADEDMODULES;' '_LMFILES_=/sw/BASE/site/slurm:/sw/BASE/site/tmpdir:/sw/BASE/site/hummel:/sw/BASE/env/gcc-5.2.0_openmpi-1.8.6;' export '_LMFILES_;' 'INFOPATH_modshare=/sw/compiler/gcc-5.2.0/share/info:1:/usr/share/info:1;' export 'INFOPATH_modshare;' 'MANPATH_modshare=/sw/compiler/gcc-5.2.0/share/man:1:/sw/modules/man:1:/usr/share/man:1:/sw/env/gcc-5.2.0/openmpi/1.8.6/share/man:1:/sw/batch/slurm/14.11.8/share/man:1:/sw/rrz/share/man:1;' export 'MANPATH_modshare;' 'C_INCLUDE_PATH_modshare=/sw/env/gcc-5.2.0/openmpi/1.8.6/include:1:/sw/compiler/gcc-5.2.0/include:1;' export 'C_INCLUDE_PATH_modshare;' 'C_INCLUDE_PATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/include:/sw/compiler/gcc-5.2.0/include;' export 'C_INCLUDE_PATH;' 'CPATH_modshare=/sw/env/gcc-5.2.0/openmpi/1.8.6/include:1:/sw/compiler/gcc-5.2.0/include:1;' export 'CPATH_modshare;' 'LD_LIBRARY_PATH_modshare=/sw/env/gcc-5.2.0/openmpi/1.8.6/lib:1:/sw/compiler/gcc-5.2.0/lib:1:/sw/env/gcc-5.2.0/openmpi/1.8.6/lib/openmpi:1:/sw/compiler/gcc-5.2.0/lib64:1;' export 'LD_LIBRARY_PATH_modshare;' 'LD_RUN_PATH_modshare=/sw/env/gcc-5.2.0/openmpi/1.8.6/lib:1:/sw/compiler/gcc-5.2.0/lib:1:/sw/env/gcc-5.2.0/openmpi/1.8.6/lib/openmpi:1:/sw/compiler/gcc-5.2.0/lib64:1;' export 'LD_RUN_PATH_modshare;' 'MODULEPATH=/sw/BASE:/sw/TOOL:/sw/APP;' export 'MODULEPATH;' 'LOADEDMODULES_modshare=env/gcc-5.2.0_openmpi-1.8.6:1:site/hummel:1:site/tmpdir:2:site/slurm:1;' export 'LOADEDMODULES_modshare;' '_LMFILES__modshare=/sw/BASE/site/slurm:1:/sw/BASE/env/gcc-5.2.0_openmpi-1.8.6:1:/sw/BASE/site/hummel:1:/sw/BASE/site/tmpdir:2;' export '_LMFILES__modshare;' 'MODULEPATH_modshare=/sw/APP:1:/sw/TOOL:1:/sw/BASE:1;' export 'MODULEPATH_modshare;' 'PATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/bin:/sw/compiler/gcc-5.2.0/bin:/sw/batch/slurm/14.11.8/bin:/sw/rrz/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin;' export 'PATH;' 'PATH_modshare=/bin:1:/usr/sbin:1:/usr/bin:1:/sw/env/gcc-5.2.0/openmpi/1.8.6/bin:1:/sw/batch/slurm/14.11.8/bin:1:/sw/rrz/bin:1:/usr/local/sbin:1:/sw/compiler/gcc-5.2.0/bin:1:/usr/local/bin:1;' export 'PATH_modshare;'
++ CPATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/include:/sw/compiler/gcc-5.2.0/include
++ export CPATH
++ LD_LIBRARY_PATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/lib/openmpi:/sw/env/gcc-5.2.0/openmpi/1.8.6/lib:/sw/compiler/gcc-5.2.0/lib64:/sw/compiler/gcc-5.2.0/lib
++ export LD_LIBRARY_PATH
++ LD_RUN_PATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/lib/openmpi:/sw/env/gcc-5.2.0/openmpi/1.8.6/lib:/sw/compiler/gcc-5.2.0/lib64:/sw/compiler/gcc-5.2.0/lib
++ export LD_RUN_PATH
++ INFOPATH=/sw/compiler/gcc-5.2.0/share/info:/usr/share/info
++ export INFOPATH
++ MANPATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/share/man:/sw/compiler/gcc-5.2.0/share/man:/sw/batch/slurm/14.11.8/share/man:/sw/rrz/share/man:/sw/modules/man:/usr/share/man
++ export MANPATH
++ LOADEDMODULES=site/slurm:site/tmpdir:site/hummel:env/gcc-5.2.0_openmpi-1.8.6
++ export LOADEDMODULES
++ _LMFILES_=/sw/BASE/site/slurm:/sw/BASE/site/tmpdir:/sw/BASE/site/hummel:/sw/BASE/env/gcc-5.2.0_openmpi-1.8.6
++ export _LMFILES_
++ INFOPATH_modshare=/sw/compiler/gcc-5.2.0/share/info:1:/usr/share/info:1
++ export INFOPATH_modshare
++ MANPATH_modshare=/sw/compiler/gcc-5.2.0/share/man:1:/sw/modules/man:1:/usr/share/man:1:/sw/env/gcc-5.2.0/openmpi/1.8.6/share/man:1:/sw/batch/slurm/14.11.8/share/man:1:/sw/rrz/share/man:1
++ export MANPATH_modshare
++ C_INCLUDE_PATH_modshare=/sw/env/gcc-5.2.0/openmpi/1.8.6/include:1:/sw/compiler/gcc-5.2.0/include:1
++ export C_INCLUDE_PATH_modshare
++ C_INCLUDE_PATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/include:/sw/compiler/gcc-5.2.0/include
++ export C_INCLUDE_PATH
++ CPATH_modshare=/sw/env/gcc-5.2.0/openmpi/1.8.6/include:1:/sw/compiler/gcc-5.2.0/include:1
++ export CPATH_modshare
++ LD_LIBRARY_PATH_modshare=/sw/env/gcc-5.2.0/openmpi/1.8.6/lib:1:/sw/compiler/gcc-5.2.0/lib:1:/sw/env/gcc-5.2.0/openmpi/1.8.6/lib/openmpi:1:/sw/compiler/gcc-5.2.0/lib64:1
++ export LD_LIBRARY_PATH_modshare
++ LD_RUN_PATH_modshare=/sw/env/gcc-5.2.0/openmpi/1.8.6/lib:1:/sw/compiler/gcc-5.2.0/lib:1:/sw/env/gcc-5.2.0/openmpi/1.8.6/lib/openmpi:1:/sw/compiler/gcc-5.2.0/lib64:1
++ export LD_RUN_PATH_modshare
++ MODULEPATH=/sw/BASE:/sw/TOOL:/sw/APP
++ export MODULEPATH
++ LOADEDMODULES_modshare=env/gcc-5.2.0_openmpi-1.8.6:1:site/hummel:1:site/tmpdir:2:site/slurm:1
++ export LOADEDMODULES_modshare
++ _LMFILES__modshare=/sw/BASE/site/slurm:1:/sw/BASE/env/gcc-5.2.0_openmpi-1.8.6:1:/sw/BASE/site/hummel:1:/sw/BASE/site/tmpdir:2
++ export _LMFILES__modshare
++ MODULEPATH_modshare=/sw/APP:1:/sw/TOOL:1:/sw/BASE:1
++ export MODULEPATH_modshare
++ PATH=/sw/env/gcc-5.2.0/openmpi/1.8.6/bin:/sw/compiler/gcc-5.2.0/bin:/sw/batch/slurm/14.11.8/bin:/sw/rrz/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin
++ export PATH
++ PATH_modshare=/bin:1:/usr/sbin:1:/usr/bin:1:/sw/env/gcc-5.2.0/openmpi/1.8.6/bin:1:/sw/batch/slurm/14.11.8/bin:1:/sw/rrz/bin:1:/usr/local/sbin:1:/sw/compiler/gcc-5.2.0/bin:1:/usr/local/bin:1
++ export PATH_modshare
+ export I_MPI_PIN_PROCESSOR_LIST=1,4,9,12
+ I_MPI_PIN_PROCESSOR_LIST=1,4,9,12
+ result=/work/fckx115/ABINIT/co_cu/3layers/1_2/nline5nnsclo5/qmc
+ workdir=/work/scratch/fckx115.6357
+ mpirun /home/fckx115/Software/abinit-7.10.4_gcc5.2.0_openmpi_1.8.6/abinit-7.10.4/src/98_main/abinit
  ABINIT 
  
  Give name for formatted input file: 
qmc.in
  Give name for formatted output file:
qmc.out
  Give root name for generic input files:
co_LDA_SP14_6
  Give root name for generic output files:
co_QMC
  Give root name for generic temporary files:
co_QMC_tmp

--- !WARNING
message: |
    Finds that output file qmc.out
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:qmc.out


--- !WARNING
message: |
    Finds that output file qmc.out
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:qmc.outA


--- !WARNING
message: |
    Finds that output file qmc.outA
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:qmc.outB


.Version 7.10.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu5.2 computer) 

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

.Starting date : Sat  7 Nov 2015.
- ( at 10h26 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.10.4
  Build target  : x86_64_linux_gnu5.2
  Build date    : 20151020

 === Compiler Suite === 
  C compiler       : gnu5.2
  C++ compiler     : gnu5.2
  Fortran compiler : gnu5.2
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

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
  LINALG flavor : netlib-fallback
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
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV   HAVE_FC_IEEE_EXCEPTIONS
 
          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT                  HAVE_MPI
 
                 HAVE_MPI2       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL
 
       HAVE_MPI_IALLTOALLV               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
             HAVE_OS_LINUX                HAVE_TIMER         HAVE_TIMER_ABINIT
 
            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL              USE_MACROAVE
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> qmc.in
- output file    -> qmc.outB
- root for input  files -> co_LDA_SP14_6
- root for output files -> co_QMC

-instrng :   142 lines of input have been read from file qmc.in


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
  dtset%nelect=   1043.0000000000000     
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
 getmpw sequential formula gave:   599523

 Computing all possible proc distrib for this input with nproc less than 40
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->    1|   1 ->    1|   1 ->    1|   1 ->    1|   1 ->    1|   2 ->   40|   1 ->   40|

--- !WARNING
message: |
    Your input dataset does not let Abinit find an appropriate process distribution with nproc=40
    Try to comment all the np* vars and set paral_kgb=-40 to have advices on process distribution.
src_file: finddistrproc.F90
src_line: 625
...

npfft, npband, npspinor and npkpt:     1    1    1   40

--- !WARNING
message: |
    nproc_kpt=40 >= nkpt=1* nsppol=1
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
    with the current number of processors (=40).
    You will leave some empty.
    YOU ARE STRONGLY ADVICED TO ACTIVATE AUTOMATIC PARALLELIZATION!
    PUT "AUTOPARAL=1" IN THE INPUT FILE.
src_file: mpi_setup.F90
src_line: 617
...

getng is called for the coarse grid:
 For input ecut=  1.000000E+02 best grid ngfft=     192     192     270
       max ecut=  1.006949E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................   192  192  270
  Augmented FFT divisions ...................   193  193  270
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=  599463
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  4.000000E+02 best grid ngfft=     375     375     540
       max ecut=  4.027796E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................   375  375  540
  Augmented FFT divisions ...................   375  375  540
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
P  mgfft =       270   mkmem =         1 mpssoang=         3     mpw =    599463
  mqgrid =     26907   natom =        55    nfft =   9953280    nkpt =         1
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         2  n1xccc =         1  ntypat =         2  occopt =         3
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       540    nfftf =  75937500
================================================================================
P This job should need less than                   28344.958 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :   5305.308 Mbytes ; DEN or POT disk file :    579.359 Mbytes.
================================================================================

 Biggest array : pawfgrtab%gylm(gr), with   3781.4227 MBytes.
 memana : allocated an array of   3781.423 Mbytes, for testing purposes.
 memana : allocated   28344.958 Mbytes, for testing purposes. 
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
        dmft_nwlo        2000
       dmft_tollc      1.0000000000E-06
             ecut      1.00000000E+02 Hartree
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
            ngfft         192     192     270
          ngfftdg         375     375     540
             nkpt           1
            nline           5
           nnsclo           5
            nstep         200
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
        pawecutdg      4.00000000E+02 Hartree
          spgroup           8
           symrel      1  0  0   0  1  0   0  0  1       0 -1  0  -1  0  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000    -0.1666827 -0.1666827  0.0000000
           toldfe      1.00000000E-09 Hartree
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
  xmpi_tag_ub ................   2147483647
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................    9.9999999999999995E-007

================================================================================
== DATASET  1 ==================================================================
-   nproc =   40   -> not optimal: autoparal keyword recommended in input file


 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  LDA: Perdew-Zunger-Ceperley-Alder - ixc=2
 Citation for XC functional:
  J.P.Perdew and A.Zunger, PRB 23, 5048 (1981)

 Unit cell volume ucvol=  1.2551973E+04 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 192 192 270
         ecut(hartree)=    100.000   => boxcut(ratio)=   2.00694

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 375 375 540
         ecut(hartree)=    400.000   => boxcut(ratio)=   2.00694
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
inwffil: examining the header of disk file co_LDA_SP14_6_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.10.4           |  ABINIT  code version 7.10.4
. date 20151107 bantot  580 natom   55  |  date 20151106 bantot  580 natom   55
  nkpt   1 nsym  2 ngfft 375, 375, 540  |  nkpt   1 nsym  2 ngfft 400, 400, 540
  ntypat  2 ecut_eff 100.0000000        |  ntypat  2 ecut_eff 100.0000000
  usepaw  1                             |  usepaw  1
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    20.4938500   0.0000000   0.0000000  |    20.4938500   0.0000000   0.0000000
     0.0000000  20.4938500   0.0000000  |     0.0000000  20.4938500   0.0000000
     0.0000000   0.0000000  29.8858000  |     0.0000000   0.0000000  29.8858000
  PAW: ecutdg  400.000000               |  PAW: ecutdg  400.000000
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
    band,k       520, input occ=  2.0000000E+00 disk occ=  1.4149881E+00
src_file: m_header.F90
src_line: 3272
...


--- !WARNING
message: |
    band,k       521, input occ=  2.0000000E+00 disk occ=  1.2728963E+00
src_file: m_header.F90
src_line: 3272
...


--- !WARNING
message: |
    band,k       522, input occ=  1.0000000E+00 disk occ=  9.4182682E-01
src_file: m_header.F90
src_line: 3272
...


--- !WARNING
message: |
    band,k       523, input occ=  0.0000000E+00 disk occ=  9.4182397E-01
src_file: m_header.F90
src_line: 3272
...


--- !WARNING
message: |
    band,k       524, input occ=  0.0000000E+00 disk occ=  2.1393139E-01
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
-inwffil : will read wavefunctions from disk file co_LDA_SP14_6_WFK
 initwf : disk file gives npw=299732 nband=   580 for kpt number=    1
 initwf :   580 bands have been initialized from disk
- newkpt: read input wf with ikpt,npw=   1  299732, make ikpt,npw=   1  599463

_setup2: Arith. and geom. avg. npw (full set) are  599463.000  599463.000
 newocc : new Fermi energy is       0.027820 , with nelect=   1043.000000
  Number of bissection calls =  50
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
 2.000 2.000 2.000 1.415 1.273 0.942 0.942 0.214 0.214 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000 0.000
 0.000 0.000 0.000 0.000

       ( number of procs used in dmft ) = 40

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
,     Maximum=    1.1721E+00  at reduced coord.    0.5000    0.1667    0.0000
,     Minimum=    7.5899E-08  at reduced coord.    0.0000    0.3333    0.3815
,  Integrated=    5.0900E+02

================================================================================
 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft= 375 375 540
         ecut(hartree)=    400.000   => boxcut(ratio)=   2.00694

--- !WARNING
message: |
    Density went too small (lower than xc_denpos) at1256298 points
    and was set to xc_denpos=  1.00E-14. Lowest was  -0.79E-06.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
src_file: mkdenpos.F90
src_line: 176
...


========== LDA+U DATA ===================================================

====== For Atom   55, occupations for correlated orbitals. l =   2


== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.49779    0.00000   -0.00000   -0.00000    0.00000
     0.00000    0.49715    0.00000    0.00000   -0.00000
    -0.00000    0.00000    0.53452   -0.00000    0.00000
    -0.00000    0.00000   -0.00000    0.49715   -0.00000
     0.00000   -0.00000    0.00000   -0.00000    0.53133
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -1.33301   0.23188  -0.00000   0.00308  -0.00022   0.00000  -0.00071   0.00005   0.00000  -0.00000   0.00138   0.00033 ...
   0.23188   0.07064   0.00000  -0.00063   0.00004  -0.00000   0.00013  -0.00001  -0.00000   0.00000  -0.00028  -0.00006 ...
  -0.00000   0.00000  -2.26555  -0.00000   0.00000   0.21544   0.00000  -0.00000  -0.00016   0.00258   0.00000  -0.00000 ...
   0.00308  -0.00063  -0.00000  -2.26331   0.00030   0.00000   0.21499  -0.00006  -0.00000  -0.00000   0.00287  -0.00018 ...
  -0.00022   0.00004   0.00000   0.00030  -2.26557  -0.00000  -0.00006   0.21545  -0.00000  -0.00000   0.00010   0.00255 ...
   0.00000  -0.00000   0.21544   0.00000  -0.00000   0.06222  -0.00000   0.00000   0.00003  -0.00046  -0.00000   0.00000 ...
  -0.00071   0.00013   0.00000   0.21499  -0.00006  -0.00000   0.06230   0.00001   0.00000   0.00000  -0.00051   0.00003 ...
   0.00005  -0.00001  -0.00000  -0.00006   0.21545   0.00000   0.00001   0.06222   0.00000   0.00000  -0.00002  -0.00046 ...
   0.00000  -0.00000  -0.00016  -0.00000  -0.00000   0.00003   0.00000   0.00000  -0.47566   0.00020  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00258  -0.00000  -0.00000  -0.00046   0.00000   0.00000   0.00020  -0.47395   0.00000   0.00000 ...
   0.00138  -0.00028   0.00000   0.00287   0.00010  -0.00000  -0.00051  -0.00002  -0.00000   0.00000  -0.47316   0.00012 ...
   0.00033  -0.00006  -0.00000  -0.00018   0.00255   0.00000   0.00003  -0.00046  -0.00000   0.00000   0.00012  -0.47398 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     55) *****
  -0.83764   0.13711  -0.00000   0.00466   0.00000   0.00000  -0.00096  -0.00000   0.00000  -0.00000  -0.00006   0.00000 ...
   0.13711   0.05441   0.00000  -0.00109  -0.00000  -0.00000   0.00029   0.00000  -0.00000   0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -1.76075  -0.00000   0.00000   0.19635   0.00000  -0.00000   0.00000   0.00407   0.00000   0.00000 ...
   0.00466  -0.00109  -0.00000  -1.76082   0.00000   0.00000   0.19636  -0.00000   0.00000  -0.00000   0.00268   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000  -1.76075  -0.00000  -0.00000   0.19635  -0.00000   0.00000  -0.00000   0.00407 ...
   0.00000  -0.00000   0.19635   0.00000  -0.00000   0.02631  -0.00000   0.00000  -0.00000  -0.00080  -0.00000  -0.00000 ...
  -0.00096   0.00029   0.00000   0.19636  -0.00000  -0.00000   0.02631   0.00000  -0.00000   0.00000  -0.00062  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.19635   0.00000   0.00000   0.02631   0.00000  -0.00000   0.00000  -0.00080 ...
   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.37767   0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00407  -0.00000   0.00000  -0.00080   0.00000  -0.00000   0.00000  -0.37801   0.00000   0.00000 ...
  -0.00006   0.00000   0.00000   0.00268  -0.00000  -0.00000  -0.00062   0.00000  -0.00000   0.00000  -0.37677  -0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00407  -0.00000  -0.00000  -0.00080  -0.00000   0.00000  -0.00000  -0.37801 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  5, note that nnsclo,dbl_nnsclo,istep=  5 0  1
 newocc : new Fermi energy is       0.027821 , with nelect=   1043.000000
  Number of bissection calls =  50
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
 2.000 2.000 2.000 1.415 1.273 0.942 0.942 0.214 0.214 0.000 0.000 0.000
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
   --ifreq--   604   0.13934985270841E+01   0.99999999999998E+00
   --ifreq--   605   0.13958075552979E+01   0.10000000000001E+01
   --ifreq--   606   0.13981165835118E+01   0.10000000000001E+01
   --ifreq--   607   0.14004256117257E+01   0.99999999999992E+00
   --ifreq--   608   0.14027346399396E+01   0.99999999999994E+00
   --ifreq--   609   0.14050436681535E+01   0.10000000000000E+01
   --ifreq--   610   0.14073526963674E+01   0.10000000000000E+01
   --ifreq--   611   0.14096617245813E+01   0.99999999999999E+00
   --ifreq--   612   0.14119707527952E+01   0.10000000000001E+01
   --ifreq--   613   0.14142797810091E+01   0.10000000000001E+01
   --ifreq--   614   0.14165888092230E+01   0.99999999999990E+00
   --ifreq--   615   0.14188978374369E+01   0.10000000000000E+01
   --ifreq--   616   0.14212068656508E+01   0.99999999999999E+00
   --ifreq--   617   0.14235158938647E+01   0.10000000000000E+01
   --ifreq--   618   0.14258249220785E+01   0.10000000000000E+01
   --ifreq--   619   0.14281339502924E+01   0.99999999999999E+00
   --ifreq--   620   0.14304429785063E+01   0.10000000000000E+01
   --ifreq--   621   0.14327520067202E+01   0.99999999999992E+00
   --ifreq--   622   0.14350610349341E+01   0.10000000000000E+01
   --ifreq--   623   0.14373700631480E+01   0.10000000000000E+01
   --ifreq--   624   0.14396790913619E+01   0.10000000000001E+01
   --ifreq--   625   0.14419881195758E+01   0.99999999999990E+00
   --ifreq--   626   0.14442971477897E+01   0.10000000000000E+01
   --ifreq--   627   0.14466061760036E+01   0.10000000000000E+01
   --ifreq--   628   0.14489152042175E+01   0.99999999999990E+00
   --ifreq--   629   0.14512242324314E+01   0.10000000000001E+01
   --ifreq--   630   0.14535332606453E+01   0.10000000000001E+01
   --ifreq--   631   0.14558422888591E+01   0.99999999999990E+00
   --ifreq--   632   0.14581513170730E+01   0.10000000000000E+01
   --ifreq--   633   0.14604603452869E+01   0.10000000000000E+01
   --ifreq--   634   0.14627693735008E+01   0.99999999999992E+00
   --ifreq--   635   0.14650784017147E+01   0.10000000000000E+01
   --ifreq--   636   0.14673874299286E+01   0.10000000000000E+01
   --ifreq--   637   0.14696964581425E+01   0.10000000000001E+01
   --ifreq--   638   0.14720054863564E+01   0.99999999999990E+00
   --ifreq--   639   0.14743145145703E+01   0.10000000000000E+01
   --ifreq--   640   0.14766235427842E+01   0.10000000000000E+01
   --ifreq--   641   0.14789325709981E+01   0.99999999999992E+00
   --ifreq--   642   0.14812415992120E+01   0.10000000000000E+01
   --ifreq--   643   0.14835506274259E+01   0.10000000000001E+01
   --ifreq--   644   0.14858596556397E+01   0.10000000000000E+01
   --ifreq--   645   0.14881686838536E+01   0.99999999999990E+00
   --ifreq--   646   0.14904777120675E+01   0.10000000000001E+01
   --ifreq--   647   0.14927867402814E+01   0.10000000000000E+01
   --ifreq--   648   0.14950957684953E+01   0.99999999999991E+00
   --ifreq--   649   0.14974047967092E+01   0.10000000000001E+01
   --ifreq--   650   0.14997138249231E+01   0.10000000000001E+01
   --ifreq--   651   0.15020228531370E+01   0.99999999999992E+00
   --ifreq--   652   0.15043318813509E+01   0.99999999999994E+00
   --ifreq--   653   0.15066409095648E+01   0.10000000000000E+01
   --ifreq--   654   0.15089499377787E+01   0.99999999999998E+00
   --ifreq--   655   0.15112589659926E+01   0.10000000000001E+01
   --ifreq--   656   0.15135679942065E+01   0.10000000000001E+01
   --ifreq--   657   0.15158770224204E+01   0.99999999999991E+00
   --ifreq--   658   0.15181860506342E+01   0.10000000000000E+01
   --ifreq--   659   0.15204950788481E+01   0.10000000000001E+01
   --ifreq--   660   0.15228041070620E+01   0.99999999999992E+00
   --ifreq--   661   0.15251131352759E+01   0.99999999999993E+00
   --ifreq--   662   0.15274221634898E+01   0.10000000000001E+01
   --ifreq--   663   0.15297311917037E+01   0.10000000000001E+01
   --ifreq--   664   0.15320402199176E+01   0.99999999999995E+00
   --ifreq--   665   0.15343492481315E+01   0.99999999999985E+00
   --ifreq--   666   0.15366582763454E+01   0.10000000000001E+01
   --ifreq--   667   0.15389673045593E+01   0.10000000000002E+01
   --ifreq--   668   0.15412763327732E+01   0.99999999999988E+00
   --ifreq--   669   0.15435853609871E+01   0.10000000000000E+01
   --ifreq--   670   0.15458943892010E+01   0.10000000000000E+01
   --ifreq--   671   0.15482034174148E+01   0.10000000000002E+01
   --ifreq--   672   0.15505124456287E+01   0.99999999999879E+00
   --ifreq--   673   0.15528214738426E+01   0.10000000000043E+01
   --ifreq--   674   0.15551305020565E+01   0.99999999998426E+00
   --ifreq--   675   0.15574395302704E+01   0.10000000000590E+01
   --ifreq--   676   0.15597485584843E+01   0.99999999977964E+00
   --ifreq--   677   0.15620575866982E+01   0.10000000008222E+01
   --ifreq--   678   0.15643666149121E+01   0.99999999693183E+00
   --ifreq--   679   0.15666756431260E+01   0.10000000114505E+01
   --ifreq--   680   0.15689846713399E+01   0.99999995726599E+00
   --ifreq--   681   0.15712936995538E+01   0.10000001594858E+01
   --ifreq--   682   0.15736027277677E+01   0.99999940479087E+00
   --ifreq--   683   0.15759117559816E+01   0.10000022213502E+01
   --ifreq--   684   0.15782207841954E+01   0.99999170980775E+00
   --ifreq--   685   0.15805298124093E+01   0.10000309394218E+01
   --ifreq--   686   0.15828388406232E+01   0.99988453251322E+00
   --ifreq--   687   0.15851478688371E+01   0.10004309305360E+01
   --ifreq--   688   0.15874568970510E+01   0.99839174548127E+00
   --ifreq--   689   0.15897659252649E+01   0.10060020875685E+01
   --ifreq--   690   0.15920749534788E+01   0.97759990145104E+00
   --ifreq--   691   0.15943839816927E+01   0.10835983010382E+01
   --ifreq--   692   0.15966930099066E+01   0.68800688694140E+00
   --ifreq--   693   0.15990020381205E+01   0.17461861998328E+01
   --ifreq--   694   0.16036200945483E+01   0.17446862857713E+01
   --ifreq--   695   0.16059291227622E+01   0.69400651422435E+00
   --ifreq--   696   0.16082381509760E+01   0.10610997809558E+01
   --ifreq--   697   0.16105471791899E+01   0.10615943861541E+01
   --ifreq--   698   0.16128562074038E+01   0.69252267863404E+00
   --ifreq--   699   0.16151652356177E+01   0.17475920901177E+01
   --ifreq--   700   0.16197832920455E+01   0.17280713663037E+01
   --ifreq--   701   0.16220923202594E+01   0.77060551786790E+00
   --ifreq--   702   0.16244013484733E+01   0.76878384623732E+00
   --ifreq--   703   0.16267103766872E+01   0.17310315266098E+01
   --ifreq--   704   0.16313284331150E+01   0.17296032546351E+01
   --ifreq--   705   0.16336374613289E+01   0.77449711624604E+00
   --ifreq--   706   0.16359464895428E+01   0.74918076686142E+00
   --ifreq--   707   0.16382555177566E+01   0.17707423109250E+01
   --ifreq--   708   0.16428735741844E+01   0.14810325250502E+01
   --ifreq--   709   0.16451826023983E+01   0.14616261895859E+01
   --ifreq--   710   0.16498006588261E+01   0.18600111863733E+01
   --ifreq--   711   0.16521096870400E+01   0.34553017134291E+00
   --ifreq--   712   0.16544187152539E+01   0.18625458868562E+01
   --ifreq--   713   0.16590367716817E+01   0.14438836430101E+01
   --ifreq--   714   0.16613457998956E+01   0.15234880622088E+01
   --ifreq--   715   0.16659638563234E+01   0.14963655718683E+01
   --ifreq--   716   0.16682728845372E+01   0.15015188904120E+01
   --ifreq--   717   0.16728909409650E+01   0.14997827785097E+01
   --ifreq--   718   0.16751999691789E+01   0.15000547969447E+01
   --ifreq--   719   0.16798180256067E+01   0.15002679246399E+01
   --ifreq--   720   0.16821270538206E+01   0.14993298275329E+01
   --ifreq--   721   0.16867451102484E+01   0.15043697346762E+01
   --ifreq--   722   0.16890541384623E+01   0.14895582180275E+01
   --ifreq--   723   0.16936721948901E+01   0.15674626932552E+01
   --ifreq--   724   0.16959812231040E+01   0.13388227031576E+01
   --ifreq--   725   0.17005992795317E+01   0.21973072884787E+01
   --ifreq--   726   0.17052173359595E+01   0.13854118422055E+01
   --ifreq--   727   0.17075263641734E+01   0.14509901399696E+01
   --ifreq--   728   0.17121444206012E+01   0.20661506123890E+01
   --ifreq--   729   0.17167624770290E+01   0.20682315620673E+01
   --ifreq--   730   0.17213805334568E+01   0.14364236256770E+01
   --ifreq--   731   0.17236895616707E+01   0.14202672494015E+01
   --ifreq--   732   0.17283076180984E+01   0.21005441260361E+01
   --ifreq--   733   0.17329256745262E+01   0.19498252329378E+01
   --ifreq--   734   0.17375437309540E+01   0.21001547852926E+01
   --ifreq--   735   0.17421617873818E+01   0.14239664969466E+01
   --ifreq--   736   0.17444708155957E+01   0.14274676869412E+01
   --ifreq--   737   0.17490888720235E+01   0.20931523710598E+01
   --ifreq--   738   0.17537069284513E+01   0.19750339434331E+01
   --ifreq--   739   0.17583249848791E+01   0.20067118534230E+01
   --ifreq--   740   0.17629430413068E+01   0.19981186082115E+01
   --ifreq--   741   0.17675610977346E+01   0.20008137243724E+01
   --ifreq--   742   0.17721791541624E+01   0.19986262218651E+01
   --ifreq--   743   0.17767972105902E+01   0.20046810721136E+01
   --ifreq--   744   0.17814152670180E+01   0.19826494165961E+01
   --ifreq--   745   0.17860333234458E+01   0.20647212864161E+01
   --ifreq--   746   0.17906513798735E+01   0.17584654149730E+01
   --ifreq--   747   0.17952694363013E+01   0.26899492537906E+01
   --ifreq--   748   0.18021965209430E+01   0.26946969957847E+01
   --ifreq--   749   0.18068145773708E+01   0.17413736657820E+01
   --ifreq--   750   0.18114326337986E+01   0.21282051471581E+01
   --ifreq--   751   0.18160506902264E+01   0.17458058117695E+01
   --ifreq--   752   0.18206687466541E+01   0.26827958510351E+01
   --ifreq--   753   0.18275958312958E+01   0.27498656712390E+01
   --ifreq--   754   0.18322138877236E+01   0.15043544672448E+01
   --ifreq--   755   0.18368319441514E+01   0.27935942592337E+01
   --ifreq--   756   0.18437590287931E+01   0.24422888978770E+01
   --ifreq--   757   0.18483770852209E+01   0.25203419685641E+01
   --ifreq--   758   0.18553041698625E+01   0.24960166395037E+01
   --ifreq--   759   0.18599222262903E+01   0.25013649627663E+01
   --ifreq--   760   0.18668493109320E+01   0.24999514711196E+01
   --ifreq--   761   0.18714673673598E+01   0.24994491178743E+01
   --ifreq--   762   0.18783944520015E+01   0.25032802879089E+01
   --ifreq--   763   0.18830125084292E+01   0.24906474299016E+01
   --ifreq--   764   0.18899395930709E+01   0.25476117291943E+01
   --ifreq--   765   0.18945576494987E+01   0.23649383426510E+01
   --ifreq--   766   0.19014847341404E+01   0.30957545989884E+01
   --ifreq--   767   0.19084118187821E+01   0.30849880625941E+01
   --ifreq--   768   0.19153389034237E+01   0.24165274631394E+01
   --ifreq--   769   0.19199569598515E+01   0.24018163957850E+01
   --ifreq--   770   0.19268840444932E+01   0.31202946157092E+01
   --ifreq--   771   0.19338111291349E+01   0.29677685958343E+01
   --ifreq--   772   0.19407382137765E+01   0.30086310881267E+01
   --ifreq--   773   0.19476652984182E+01   0.29977070197759E+01
   --ifreq--   774   0.19545923830599E+01   0.30005409281773E+01
   --ifreq--   775   0.19615194677016E+01   0.30001296450171E+01
   --ifreq--   776   0.19684465523433E+01   0.29989406177772E+01
   --ifreq--   777   0.19753736369849E+01   0.30041078520870E+01
   --ifreq--   778   0.19823007216266E+01   0.29846279404661E+01
   --ifreq--   779   0.19892278062683E+01   0.30573804436938E+01
   --ifreq--   780   0.19961548909100E+01   0.27858500727973E+01
   --ifreq--   781   0.20030819755516E+01   0.36608789451945E+01
   --ifreq--   782   0.20123180884072E+01   0.37232245787577E+01
   --ifreq--   783   0.20192451730489E+01   0.25720939259318E+01
   --ifreq--   784   0.20261722576906E+01   0.37122380016445E+01
   --ifreq--   785   0.20354083705461E+01   0.37158115412764E+01
   --ifreq--   786   0.20423354551878E+01   0.25598420292957E+01
   --ifreq--   787   0.20492625398295E+01   0.37571723953968E+01
   --ifreq--   788   0.20584986526851E+01   0.35054333634299E+01
   --ifreq--   789   0.20654257373267E+01   0.33235217490018E+01
   --ifreq--   790   0.20746618501823E+01   0.42742812914774E+01
   --ifreq--   791   0.20838979630379E+01   0.33498359903869E+01
   --ifreq--   792   0.20908250476796E+01   0.34199118338313E+01
   --ifreq--   793   0.21000611605351E+01   0.40940860471029E+01
   --ifreq--   794   0.21092972733907E+01   0.40974652274127E+01
   --ifreq--   795   0.21185333862463E+01   0.34058948136805E+01
   --ifreq--   796   0.21254604708879E+01   0.33924346434973E+01
   --ifreq--   797   0.21346965837435E+01   0.41320774598374E+01
   --ifreq--   798   0.21439326965991E+01   0.39682241200360E+01
   --ifreq--   799   0.21531688094546E+01   0.39950263801664E+01
   --ifreq--   800   0.21624049223102E+01   0.40516700024343E+01
   --ifreq--   801   0.21716410351658E+01   0.37982934006681E+01
   --ifreq--   802   0.21808771480214E+01   0.46511243822084E+01
   --ifreq--   803   0.21924222890908E+01   0.47122039620715E+01
   --ifreq--   804   0.22016584019464E+01   0.35946948051856E+01
   --ifreq--   805   0.22108945148020E+01   0.47009844398164E+01
   --ifreq--   806   0.22224396558714E+01   0.47044167690514E+01
   --ifreq--   807   0.22316757687270E+01   0.35832540179034E+01
   --ifreq--   808   0.22409118815826E+01   0.47458403156989E+01
   --ifreq--   809   0.22524570226520E+01   0.45042228993366E+01
   --ifreq--   810   0.22616931355076E+01   0.43164094214585E+01
   --ifreq--   811   0.22732382765771E+01   0.52888722943219E+01
   --ifreq--   812   0.22847834176465E+01   0.43461746048982E+01
   --ifreq--   813   0.22940195305021E+01   0.44030213372083E+01
   --ifreq--   814   0.23055646715715E+01   0.51372809186294E+01
   --ifreq--   815   0.23171098126410E+01   0.49631421149218E+01
   --ifreq--   816   0.23286549537105E+01   0.50101512981297E+01
   --ifreq--   817   0.23402000947799E+01   0.49962533397819E+01
   --ifreq--   818   0.23517452358494E+01   0.50048360460035E+01
   --ifreq--   819   0.23632903769189E+01   0.49844027948232E+01
   --ifreq--   820   0.23748355179883E+01   0.50575532440638E+01
   --ifreq--   821   0.23863806590578E+01   0.47853844736152E+01
   --ifreq--   822   0.23979258001272E+01   0.57051888208107E+01
   --ifreq--   823   0.24117799694106E+01   0.54522091446848E+01
   --ifreq--   824   0.24233251104801E+01   0.55137958613916E+01
   --ifreq--   825   0.24371792797634E+01   0.55001412735881E+01
   --ifreq--   826   0.24487244208329E+01   0.54893328241312E+01
   --ifreq--   827   0.24625785901162E+01   0.55497813001315E+01
   --ifreq--   828   0.24741237311857E+01   0.53357971263828E+01
   --ifreq--   829   0.24879779004690E+01   0.61559832671345E+01
   --ifreq--   830   0.25018320697524E+01   0.59581325284961E+01
   --ifreq--   831   0.25156862390358E+01   0.60114863449248E+01
   --ifreq--   832   0.25295404083191E+01   0.59959215621483E+01
   --ifreq--   833   0.25433945776025E+01   0.60048273903868E+01
   --ifreq--   834   0.25572487468858E+01   0.59847693047289E+01
   --ifreq--   835   0.25711029161692E+01   0.60560959849989E+01
   --ifreq--   836   0.25849570854525E+01   0.57908467176407E+01
   --ifreq--   837   0.25988112547359E+01   0.67007028025256E+01
   --ifreq--   838   0.26149744522331E+01   0.64553641734623E+01
   --ifreq--   839   0.26288286215165E+01   0.65024718997331E+01
   --ifreq--   840   0.26449918190137E+01   0.65464242939247E+01
   --ifreq--   841   0.26588459882971E+01   0.63340822761919E+01
   --ifreq--   842   0.26750091857943E+01   0.71595785015618E+01
   --ifreq--   843   0.26911723832916E+01   0.69575045318589E+01
   --ifreq--   844   0.27073355807888E+01   0.70104038748846E+01
   --ifreq--   845   0.27234987782861E+01   0.70008803146492E+01
   --ifreq--   846   0.27396619757833E+01   0.69860756283606E+01
   --ifreq--   847   0.27558251732806E+01   0.70548169216695E+01
   --ifreq--   848   0.27719883707778E+01   0.67946561374177E+01
   --ifreq--   849   0.27881515682751E+01   0.76980327740773E+01
   --ifreq--   850   0.28066237939862E+01   0.74552545781086E+01
   --ifreq--   851   0.28227869914834E+01   0.75021340129423E+01
   --ifreq--   852   0.28412592171946E+01   0.75463304299512E+01
   --ifreq--   853   0.28574224146918E+01   0.73319566522488E+01
   --ifreq--   854   0.28758946404030E+01   0.81628483047870E+01
   --ifreq--   855   0.28943668661141E+01   0.79554104066420E+01
   --ifreq--   856   0.29128390918252E+01   0.80155096549709E+01
   --ifreq--   857   0.29313113175364E+01   0.79825504490540E+01
   --ifreq--   858   0.29497835432475E+01   0.80542880799272E+01
   --ifreq--   859   0.29682557689587E+01   0.78002967892039E+01
   --ifreq--   860   0.29867279946698E+01   0.86858390308658E+01
   --ifreq--   861   0.30075092485948E+01   0.84967953577475E+01
   --ifreq--   862   0.30259814743060E+01   0.83589401226246E+01
   --ifreq--   863   0.30467627282310E+01   0.91065929416080E+01
   --ifreq--   864   0.30675439821560E+01   0.91618159996034E+01
   --ifreq--   865   0.30883252360811E+01   0.81706933057193E+01
   --ifreq--   866   0.31067974617922E+01   0.90813077642863E+01
   --ifreq--   867   0.31298877439311E+01   0.97614369322776E+01
   --ifreq--   868   0.31506689978562E+01   0.88281313884713E+01
   --ifreq--   869   0.31714502517812E+01   0.88630449703346E+01
   --ifreq--   870   0.31922315057062E+01   0.96674601974958E+01
   --ifreq--   871   0.32153217878451E+01   0.95053219206429E+01
   --ifreq--   872   0.32361030417702E+01   0.93399754462179E+01
   --ifreq--   873   0.32591933239091E+01   0.10167650846971E+02
   --ifreq--   874   0.32822836060480E+01   0.99418415779123E+01
   --ifreq--   875   0.33053738881869E+01   0.10064983120276E+02
   --ifreq--   876   0.33284641703259E+01   0.97982255230697E+01
   --ifreq--   877   0.33515544524648E+01   0.10694013407217E+02
   --ifreq--   878   0.33769537628176E+01   0.10455105013826E+02
   --ifreq--   879   0.34000440449565E+01   0.10500623843715E+02
   --ifreq--   880   0.34254433553094E+01   0.10549918928050E+02
   --ifreq--   881   0.34485336374483E+01   0.10314736331196E+02
   --ifreq--   882   0.34739329478011E+01   0.11216568499937E+02
   --ifreq--   883   0.34993322581539E+01   0.10774657885572E+02
   --ifreq--   884   0.35247315685067E+01   0.11646638647444E+02
   --ifreq--   885   0.35524399070734E+01   0.11679285718808E+02
   --ifreq--   886   0.35778392174262E+01   0.10672458672860E+02
   --ifreq--   887   0.36032385277791E+01   0.11565640899123E+02
   --ifreq--   888   0.36309468663458E+01   0.12110609008522E+02
   --ifreq--   889   0.36586552049125E+01   0.11972953985467E+02
   --ifreq--   890   0.36863635434792E+01   0.11997575704230E+02
   --ifreq--   891   0.37140718820459E+01   0.12036743777099E+02
   --ifreq--   892   0.37417802206126E+01   0.11855449175195E+02
   --ifreq--   893   0.37694885591793E+01   0.12516729159425E+02
   --ifreq--   894   0.37995059259599E+01   0.13123904835831E+02
   --ifreq--   895   0.38295232927405E+01   0.12966110544560E+02
   --ifreq--   896   0.38595406595211E+01   0.13011651532865E+02
   --ifreq--   897   0.38895580263017E+01   0.12987282278033E+02
   --ifreq--   898   0.39195753930823E+01   0.13039218643905E+02
   --ifreq--   899   0.39495927598629E+01   0.12855842561970E+02
   --ifreq--   900   0.39796101266435E+01   0.13514705774538E+02
   --ifreq--   901   0.40119365216380E+01   0.14128068303191E+02
   --ifreq--   902   0.40442629166325E+01   0.13952991919349E+02
   --ifreq--   903   0.40765893116270E+01   0.14059965306562E+02
   --ifreq--   904   0.41089157066215E+01   0.13807146475272E+02
   --ifreq--   905   0.41412421016160E+01   0.14677976162921E+02
   --ifreq--   906   0.41758775248244E+01   0.14504545770982E+02
   --ifreq--   907   0.42082039198189E+01   0.14324174728060E+02
   --ifreq--   908   0.42428393430273E+01   0.15219804584762E+02
   --ifreq--   909   0.42774747662356E+01   0.14765095602805E+02
   --ifreq--   910   0.43121101894440E+01   0.15688628970981E+02
   --ifreq--   911   0.43490546408663E+01   0.15501604245068E+02
   --ifreq--   912   0.43836900640747E+01   0.15324522859038E+02
   --ifreq--   913   0.44206345154970E+01   0.16220179939152E+02
   --ifreq--   914   0.44575789669192E+01   0.15765277419699E+02
   --ifreq--   915   0.44945234183415E+01   0.16689388522643E+02
   --ifreq--   916   0.45337768979777E+01   0.16496844800183E+02
   --ifreq--   917   0.45707213494000E+01   0.16340820278006E+02
   --ifreq--   918   0.46099748290361E+01   0.17159736070520E+02
   --ifreq--   919   0.46492283086723E+01   0.16992432915238E+02
   --ifreq--   920   0.46884817883085E+01   0.16870532163250E+02
   --ifreq--   921   0.47277352679447E+01   0.17508142347575E+02
   --ifreq--   922   0.47692977757947E+01   0.18130076840483E+02
   --ifreq--   923   0.48108602836448E+01   0.17955669621263E+02
   --ifreq--   924   0.48524227914948E+01   0.18047246502107E+02
   --ifreq--   925   0.48939852993449E+01   0.17855343521799E+02
   --ifreq--   926   0.49355478071950E+01   0.18514870443903E+02
   --ifreq--   927   0.49794193432589E+01   0.19116541352701E+02
   --ifreq--   928   0.50232908793229E+01   0.19004105759159E+02
   --ifreq--   929   0.50671624153868E+01   0.18867035314692E+02
   --ifreq--   930   0.51110339514508E+01   0.19512067213591E+02
   --ifreq--   931   0.51572145157286E+01   0.20114679325650E+02
   --ifreq--   932   0.52033950800065E+01   0.20014918492817E+02
   --ifreq--   933   0.52495756442843E+01   0.19825646268995E+02
   --ifreq--   934   0.52957562085622E+01   0.20659700254573E+02
   --ifreq--   935   0.53442458010539E+01   0.20554079878714E+02
   --ifreq--   936   0.53904263653318E+01   0.20144981730300E+02
   --ifreq--   937   0.54389159578235E+01   0.21849267115561E+02
   --ifreq--   938   0.54897145785291E+01   0.21442263576092E+02
   --ifreq--   939   0.55382041710209E+01   0.21399040696458E+02
   --ifreq--   940   0.55890027917265E+01   0.21980947208161E+02
   --ifreq--   941   0.56398014124322E+01   0.22634382457690E+02
   --ifreq--   942   0.56929090613517E+01   0.22498235396188E+02
   --ifreq--   943   0.57437076820573E+01   0.22382014502534E+02
   --ifreq--   944   0.57968153309768E+01   0.22990239974589E+02
   --ifreq--   945   0.58499229798964E+01   0.23616154609536E+02
   --ifreq--   946   0.59053396570298E+01   0.23563285697614E+02
   --ifreq--   947   0.59584473059493E+01   0.23147398517943E+02
   --ifreq--   948   0.60138639830827E+01   0.24833201377116E+02
   --ifreq--   949   0.60715896884300E+01   0.24507876157222E+02
   --ifreq--   950   0.61270063655634E+01   0.24158256033067E+02
   --ifreq--   951   0.61847320709108E+01   0.25846578759918E+02
   --ifreq--   952   0.62447668044720E+01   0.25442870254753E+02
   --ifreq--   953   0.63024925098193E+01   0.25396584298252E+02
   --ifreq--   954   0.63625272433805E+01   0.25987088893666E+02
   --ifreq--   955   0.64225619769417E+01   0.26619414249793E+02
   --ifreq--   956   0.64849057387168E+01   0.26550939069863E+02
   --ifreq--   957   0.65449404722780E+01   0.26190367479201E+02
   --ifreq--   958   0.66072842340531E+01   0.27683057625814E+02
   --ifreq--   959   0.66719370240420E+01   0.28074037385860E+02
   --ifreq--   960   0.67365898140310E+01   0.28017293897165E+02
   --ifreq--   961   0.68012426040200E+01   0.27856783782783E+02
   --ifreq--   962   0.68658953940090E+01   0.28543678895011E+02
   --ifreq--   963   0.69328572122119E+01   0.28990367657170E+02
   --ifreq--   964   0.69998190304148E+01   0.29474636705132E+02
   --ifreq--   965   0.70690898768315E+01   0.30132067368587E+02
   --ifreq--   966   0.71383607232483E+01   0.29986354351373E+02
   --ifreq--   967   0.72076315696651E+01   0.29922516966415E+02
   --ifreq--   968   0.72769024160819E+01   0.30320397377578E+02
   --ifreq--   969   0.73484822907125E+01   0.31793443816663E+02
   --ifreq--   970   0.74223711935571E+01   0.31503829432750E+02
   --ifreq--   971   0.74939510681877E+01   0.31206760573057E+02
   --ifreq--   972   0.75678399710323E+01   0.32667037888785E+02
   --ifreq--   973   0.76440379020907E+01   0.33122316214266E+02
   --ifreq--   974   0.77202358331492E+01   0.32840668279022E+02
   --ifreq--   975   0.77964337642076E+01   0.33506379815564E+02
   --ifreq--   976   0.78749407234800E+01   0.34150631893345E+02
   --ifreq--   977   0.79534476827523E+01   0.33882900047894E+02
   --ifreq--   978   0.80319546420247E+01   0.34315502621121E+02
   --ifreq--   979   0.81127706295109E+01   0.35850146224562E+02
   --ifreq--   980   0.81958956452110E+01   0.35277736056843E+02
   --ifreq--   981   0.82767116326973E+01   0.36020249499098E+02
   --ifreq--   982   0.83621456766113E+01   0.36702762836761E+02
   --ifreq--   983   0.84452706923114E+01   0.36151875337861E+02
   --ifreq--   984   0.85307047362254E+01   0.37683678312809E+02
   --ifreq--   985   0.86184478083533E+01   0.38109069034864E+02
   --ifreq--   986   0.87061908804812E+01   0.37877817256642E+02
   --ifreq--   987   0.87939339526091E+01   0.38375828512964E+02
   --ifreq--   988   0.88839860529510E+01   0.39622720337444E+02
   --ifreq--   989   0.89763471815066E+01   0.40136941062406E+02
   --ifreq--   990   0.90687083100623E+01   0.39825851570759E+02
   --ifreq--   991   0.91610694386180E+01   0.40551335835597E+02
   --ifreq--   992   0.92557395953876E+01   0.40983984713169E+02
   --ifreq--   993   0.93504097521572E+01   0.41497981512443E+02
   --ifreq--   994   0.94473889371407E+01   0.42039704168428E+02
   --ifreq--   995   0.95443681221242E+01   0.42331931506461E+02
   --ifreq--   996   0.96436563353215E+01   0.43637138656935E+02
   --ifreq--   997   0.97452535767328E+01   0.44121530301709E+02
   --ifreq--   998   0.98468508181441E+01   0.43873678515687E+02
   --ifreq--   999   0.99484480595553E+01   0.44380352455519E+02
   --ifreq--  1000   0.10052354329180E+02   0.45608655927086E+02
   --ifreq--  1001   0.10158569627020E+02   0.46187852405445E+02
   --ifreq--  1002   0.10264784924859E+02   0.45636769304420E+02
   --ifreq--  1003   0.10371000222698E+02   0.47230077498532E+02
   --ifreq--  1004   0.10481833576964E+02   0.47489391063129E+02
   --ifreq--  1005   0.10590357903017E+02   0.47788827532813E+02
   --ifreq--  1006   0.10703500285498E+02   0.49399531311849E+02
   --ifreq--  1007   0.10816642667979E+02   0.48580862669278E+02
   --ifreq--  1008   0.10929785050460E+02   0.50244226366213E+02
   --ifreq--  1009   0.11047545489368E+02   0.50485206419574E+02
   --ifreq--  1010   0.11162996900063E+02   0.50793202328984E+02
   --ifreq--  1011   0.11283066367185E+02   0.52383859636960E+02
   --ifreq--  1012   0.11403135834308E+02   0.51641046929996E+02
   --ifreq--  1013   0.11523205301430E+02   0.53029847456465E+02
   --ifreq--  1014   0.11647892824980E+02   0.54281848237781E+02
   --ifreq--  1015   0.11772580348530E+02   0.53822573960822E+02
   --ifreq--  1016   0.11897267872081E+02   0.54424439102018E+02
   --ifreq--  1017   0.12024264423845E+02   0.55485532314989E+02
   --ifreq--  1018   0.12153570003823E+02   0.56627928811878E+02
   --ifreq--  1019   0.12285184612014E+02   0.57009010916475E+02
   --ifreq--  1020   0.12416799220206E+02   0.57330420553629E+02
   --ifreq--  1021   0.12550722856612E+02   0.58671633189150E+02
   --ifreq--  1022   0.12686955521232E+02   0.58985492114944E+02
   --ifreq--  1023   0.12823188185851E+02   0.59380848981185E+02
   --ifreq--  1024   0.12961729878685E+02   0.60497334563623E+02
   --ifreq--  1025   0.13102580599732E+02   0.61623784808408E+02
   --ifreq--  1026   0.13245740348994E+02   0.62013510692148E+02
   --ifreq--  1027   0.13388900098255E+02   0.62317182031069E+02
   --ifreq--  1028   0.13534368875730E+02   0.63718860265278E+02
   --ifreq--  1029   0.13682146681419E+02   0.63810493614330E+02
   --ifreq--  1030   0.13829924487108E+02   0.65017627729679E+02
   --ifreq--  1031   0.13982320349225E+02   0.66156485967335E+02
   --ifreq--  1032   0.14134716211342E+02   0.66335339014181E+02
   --ifreq--  1033   0.14289421101673E+02   0.67508548588769E+02
   --ifreq--  1034   0.14446435020218E+02   0.68624053641738E+02
   --ifreq--  1035   0.14605757966976E+02   0.69000915908350E+02
   --ifreq--  1036   0.14765080913735E+02   0.69366965166120E+02
   --ifreq--  1037   0.14926712888707E+02   0.70535859335312E+02
   --ifreq--  1038   0.15090653891894E+02   0.71487042860390E+02
   --ifreq--  1039   0.15256903923294E+02   0.72516377062570E+02
   --ifreq--  1040   0.15425462982908E+02   0.73448251129515E+02
   --ifreq--  1041   0.15596331070736E+02   0.74687132996533E+02
   --ifreq--  1042   0.15769508186778E+02   0.74808376171239E+02
   --ifreq--  1043   0.15942685302820E+02   0.76059186178148E+02
   --ifreq--  1044   0.16120480475290E+02   0.76988412667099E+02
   --ifreq--  1045   0.16298275647759E+02   0.77955666744862E+02
   --ifreq--  1046   0.16480688876657E+02   0.79221108352563E+02
   --ifreq--  1047   0.16663102105554E+02   0.79143572578965E+02
   --ifreq--  1048   0.16847824362666E+02   0.81193693047123E+02
   --ifreq--  1049   0.17037164676205E+02   0.82102463180700E+02
   --ifreq--  1050   0.17226504989744E+02   0.82383613893114E+02
   --ifreq--  1051   0.17418154331497E+02   0.83370343846139E+02
   --ifreq--  1052   0.17612112701464E+02   0.85117784287789E+02
   --ifreq--  1053   0.17810689127859E+02   0.86182296204485E+02
   --ifreq--  1054   0.18009265554254E+02   0.86142317902893E+02
   --ifreq--  1055   0.18210151008862E+02   0.88236936159372E+02
   --ifreq--  1056   0.18415654519899E+02   0.88930550949682E+02
   --ifreq--  1057   0.18621158030935E+02   0.90016680248423E+02
   --ifreq--  1058   0.18831279598399E+02   0.91031613475317E+02
   --ifreq--  1059   0.19041401165864E+02   0.91832281508477E+02
   --ifreq--  1060   0.19256140789756E+02   0.93662131577834E+02
   --ifreq--  1061   0.19473189441861E+02   0.94504157669421E+02
   --ifreq--  1062   0.19692547122181E+02   0.95326569305907E+02
   --ifreq--  1063   0.19914213830715E+02   0.97174939833726E+02
   --ifreq--  1064   0.20140498595676E+02   0.97995177270117E+02
   --ifreq--  1065   0.20366783360638E+02   0.98825461492875E+02
   --ifreq--  1066   0.20597686182027E+02   0.10072289394578E+03
   --ifreq--  1067   0.20830898031630E+02   0.10127246040395E+03
   --ifreq--  1068   0.21066418909447E+02   0.10317686906408E+03
   --ifreq--  1069   0.21306557843692E+02   0.10403907373368E+03
   --ifreq--  1070   0.21546696777937E+02   0.10465294356084E+03
   --ifreq--  1071   0.21791453768609E+02   0.10735411413996E+03
   --ifreq--  1072   0.22040828815710E+02   0.10793601095629E+03
   --ifreq--  1073   0.22290203862810E+02   0.10888724014256E+03
   --ifreq--  1074   0.22544196966338E+02   0.11053572948255E+03
   --ifreq--  1075   0.22800499098080E+02   0.11195021279006E+03
   --ifreq--  1076   0.23061419286250E+02   0.11367892341354E+03
   --ifreq--  1077   0.23324648502634E+02   0.11432688836231E+03
   --ifreq--  1078   0.23590186747232E+02   0.11600749772718E+03
   --ifreq--  1079   0.23860343048257E+02   0.11765518868430E+03
   --ifreq--  1080   0.24132808377496E+02   0.11836553805861E+03
   --ifreq--  1081   0.24407582734949E+02   0.11987930496644E+03
   --ifreq--  1082   0.24686975148830E+02   0.12212083149141E+03
   --ifreq--  1083   0.24970985619139E+02   0.12364081575334E+03
   --ifreq--  1084   0.25257305117662E+02   0.12431304651637E+03
   --ifreq--  1085   0.25545933644398E+02   0.12609907605728E+03
   --ifreq--  1086   0.25839180227563E+02   0.12730662824846E+03
   --ifreq--  1087   0.26134735838941E+02   0.12964400851846E+03
   --ifreq--  1088   0.26437218534961E+02   0.13115712254991E+03
   --ifreq--  1089   0.26739701230981E+02   0.13170383119401E+03
   --ifreq--  1090   0.27046801983428E+02   0.13403899610399E+03
   --ifreq--  1091   0.27358520792304E+02   0.13613062618242E+03
   --ifreq--  1092   0.27674857657607E+02   0.13744774292376E+03
   --ifreq--  1093   0.27993503551124E+02   0.13906512247208E+03
   --ifreq--  1094   0.28316767501069E+02   0.14030800352464E+03
   --ifreq--  1095   0.28642340479228E+02   0.14267381362943E+03
   --ifreq--  1096   0.28974840542029E+02   0.14403388013414E+03
   --ifreq--  1097   0.29307340604829E+02   0.14516144122000E+03
   --ifreq--  1098   0.29646767752271E+02   0.14834613184937E+03
   --ifreq--  1099   0.29990812956141E+02   0.14944221633583E+03
   --ifreq--  1100   0.30337167188225E+02   0.15087994333297E+03
   --ifreq--  1101   0.30688139476737E+02   0.15304333203316E+03
   --ifreq--  1102   0.31043729821676E+02   0.15494543478890E+03
   --ifreq--  1103   0.31403938223043E+02   0.15717243705474E+03
   --ifreq--  1104   0.31768764680838E+02   0.15837202307769E+03
   --ifreq--  1105   0.32135900166847E+02   0.16032384102265E+03
   --ifreq--  1106   0.32509962737498E+02   0.16335093028374E+03
   --ifreq--  1107   0.32888643364576E+02   0.16426786742364E+03
   --ifreq--  1108   0.33269633019868E+02   0.16656013173928E+03
   --ifreq--  1109   0.33657549759802E+02   0.16852037221284E+03
   --ifreq--  1110   0.34047775527950E+02   0.17033192216335E+03
   --ifreq--  1111   0.34444928380740E+02   0.17317449041307E+03
   --ifreq--  1112   0.34846699289957E+02   0.17495746006839E+03
   --ifreq--  1113   0.35253088255602E+02   0.17699868706986E+03
   --ifreq--  1114   0.35664095277675E+02   0.17904629686453E+03
   --ifreq--  1115   0.36079720356175E+02   0.18081913855787E+03
   --ifreq--  1116   0.36499963491104E+02   0.18366525524492E+03
   --ifreq--  1117   0.36927133710674E+02   0.18554002175877E+03
   --ifreq--  1118   0.37356612958458E+02   0.18715640807632E+03
   --ifreq--  1119   0.37793019290884E+02   0.19084199873840E+03
   --ifreq--  1120   0.38236352707951E+02   0.19248289833752E+03
   --ifreq--  1121   0.38681995153232E+02   0.19421126907625E+03
   --ifreq--  1122   0.39134564683155E+02   0.19768229399426E+03
   --ifreq--  1123   0.39594061297720E+02   0.20006069898092E+03
   --ifreq--  1124   0.40058175968712E+02   0.20206940365361E+03
   --ifreq--  1125   0.40526908696132E+02   0.20366753534192E+03
   --ifreq--  1126   0.41000259479980E+02   0.20723687652118E+03
   --ifreq--  1127   0.41482846376684E+02   0.20942395036832E+03
   --ifreq--  1128   0.41967742301601E+02   0.21202467054374E+03
   --ifreq--  1129   0.42461874339374E+02   0.21452339204405E+03
   --ifreq--  1130   0.42958315405361E+02   0.21683944773613E+03
   --ifreq--  1131   0.43463992584203E+02   0.22015806363661E+03
   --ifreq--  1132   0.43974287819474E+02   0.22249882929110E+03
   --ifreq--  1133   0.44491510139385E+02   0.22486596987060E+03
   --ifreq--  1134   0.45013350515725E+02   0.22801207243488E+03
   --ifreq--  1135   0.45544427004920E+02   0.23111680972354E+03
   --ifreq--  1136   0.46080121550543E+02   0.23349660295615E+03
   --ifreq--  1137   0.46622743180808E+02   0.23591394734556E+03
   --ifreq--  1138   0.47169982867501E+02   0.23882759887874E+03
   --ifreq--  1139   0.47726458667049E+02   0.24279508947801E+03
   --ifreq--  1140   0.48289861551238E+02   0.24498621634459E+03
   --ifreq--  1141   0.48857882491856E+02   0.24725560777902E+03
   --ifreq--  1142   0.49432830517115E+02   0.25098940687712E+03
   --ifreq--  1143   0.50017014655230E+02   0.25479498340891E+03
   --ifreq--  1144   0.50608125877986E+02   0.25683077589950E+03
   --ifreq--  1145   0.51203855157171E+02   0.25986764610152E+03
   --ifreq--  1146   0.51808820549210E+02   0.26371673531783E+03
   --ifreq--  1147   0.52420713025892E+02   0.26625807859008E+03
   --ifreq--  1148   0.53039532587215E+02   0.27024103703855E+03
   --ifreq--  1149   0.53667588261394E+02   0.27279995083940E+03
   --ifreq--  1150   0.54300261992000E+02   0.27652336201635E+03
   --ifreq--  1151   0.54944480863676E+02   0.28015216368900E+03
   --ifreq--  1152   0.55593317791780E+02   0.28283253310405E+03
   --ifreq--  1153   0.56251390832739E+02   0.28654149724374E+03
   --ifreq--  1154   0.56916390958340E+02   0.28998221062756E+03
   --ifreq--  1155   0.57590627196797E+02   0.29354567319418E+03
   --ifreq--  1156   0.58271790519895E+02   0.29682226563000E+03
   --ifreq--  1157   0.58962189955849E+02   0.30117059290486E+03
   --ifreq--  1158   0.59661825504658E+02   0.30449975456767E+03
   --ifreq--  1159   0.60368388138109E+02   0.30782154818490E+03
   --ifreq--  1160   0.61084186884416E+02   0.31221758338110E+03
   --ifreq--  1161   0.61809221743578E+02   0.31531524272817E+03
   --ifreq--  1162   0.62541183687382E+02   0.31950126062120E+03
   --ifreq--  1163   0.63284690772256E+02   0.32370678832712E+03
   --ifreq--  1164   0.64035124941771E+02   0.32665415813262E+03
   --ifreq--  1165   0.64794795224141E+02   0.33167450069944E+03
   --ifreq--  1166   0.65566010647581E+02   0.33566402629885E+03
   --ifreq--  1167   0.66344153155663E+02   0.33865605749914E+03
   --ifreq--  1168   0.67131531776600E+02   0.34370841906769E+03
   --ifreq--  1169   0.67930455538607E+02   0.34752798124010E+03
   --ifreq--  1170   0.68736306385255E+02   0.35115975687626E+03
   --ifreq--  1171   0.69553702372973E+02   0.35684195506502E+03
   --ifreq--  1172   0.70382643501761E+02   0.36048114343262E+03
   --ifreq--  1173   0.71218511715190E+02   0.36421577084023E+03
   --ifreq--  1174   0.72065925069688E+02   0.36966722481636E+03
   --ifreq--  1175   0.72924883565256E+02   0.37411585793964E+03
   --ifreq--  1176   0.73793078173680E+02   0.37786677030878E+03
   --ifreq--  1177   0.74670508894959E+02   0.38241275452698E+03
   --ifreq--  1178   0.75559484757307E+02   0.38748816023831E+03
   --ifreq--  1179   0.76460005760725E+02   0.39263036990666E+03
   --ifreq--  1180   0.77372071905213E+02   0.39699789436350E+03
   --ifreq--  1181   0.78293374162556E+02   0.40136764889559E+03
   --ifreq--  1182   0.79226221560969E+02   0.40653831495536E+03
   --ifreq--  1183   0.80170614100451E+02   0.41147706440694E+03
   --ifreq--  1184   0.81126551781002E+02   0.41655313266890E+03
   --ifreq--  1185   0.82094034602623E+02   0.42131334393663E+03
   --ifreq--  1186   0.83073062565313E+02   0.42718218424988E+03
   --ifreq--  1187   0.84065944697287E+02   0.43197916070141E+03
   --ifreq--  1188   0.85068062942116E+02   0.43687619612644E+03
   --ifreq--  1189   0.86084035356229E+02   0.44253879184008E+03
   --ifreq--  1190   0.87111552911411E+02   0.44795060993002E+03
   --ifreq--  1191   0.88152924635877E+02   0.45367279307764E+03
   --ifreq--  1192   0.89205841501411E+02   0.45835177086396E+03
   --ifreq--  1193   0.90270303508016E+02   0.46391662938589E+03
   --ifreq--  1194   0.91348619683904E+02   0.46998737800134E+03
   --ifreq--  1195   0.92440790029075E+02   0.47612971628911E+03
   --ifreq--  1196   0.93546814543529E+02   0.48150126543447E+03
   --ifreq--  1197   0.94664384199053E+02   0.48685494161316E+03
   --ifreq--  1198   0.95795808023860E+02   0.49308503833451E+03
   --ifreq--  1199   0.96941086017951E+02   0.49880584464130E+03
   --ifreq--  1200   0.98100218181325E+02   0.50568094652241E+03
   --ifreq--  1201   0.99275513542196E+02   0.51149146266835E+03
   --ifreq--  1202   0.10046235404414E+03   0.51732871476496E+03
   --ifreq--  1203   0.10166535774357E+03   0.52421365447470E+03
   --ifreq--  1204   0.10288221561230E+03   0.52980848280387E+03
   --ifreq--  1205   0.10411292765030E+03   0.53654707507967E+03
   --ifreq--  1206   0.10535980288580E+03   0.54301576650009E+03
   --ifreq--  1207   0.10662053229059E+03   0.54937704173849E+03
   --ifreq--  1208   0.10789742489287E+03   0.55648453011694E+03
   --ifreq--  1209   0.10919048069265E+03   0.56367911721527E+03
   --ifreq--  1210   0.11049969968993E+03   0.56980968152787E+03
   --ifreq--  1211   0.11182277285649E+03   0.57706035448767E+03
   --ifreq--  1212   0.11316431824876E+03   0.58397840978807E+03
   --ifreq--  1213   0.11451971781031E+03   0.59099525189019E+03
   --ifreq--  1214   0.11589358959758E+03   0.59807068603790E+03
   --ifreq--  1215   0.11728131555413E+03   0.60469650321080E+03
   --ifreq--  1216   0.11868751373639E+03   0.61315713330744E+03
   --ifreq--  1217   0.12011218414436E+03   0.62067417070334E+03
   --ifreq--  1218   0.12155301774983E+03   0.62714714705370E+03
   --ifreq--  1219   0.12301001455280E+03   0.63571910384904E+03
   --ifreq--  1220   0.12448779260969E+03   0.64301055468371E+03
   --ifreq--  1221   0.12597942483586E+03   0.65020205550488E+03
   --ifreq--  1222   0.12749183831596E+03   0.65920943188625E+03
   --ifreq--  1223   0.12902272402177E+03   0.66694671442081E+03
   --ifreq--  1224   0.13057208195329E+03   0.67500734787211E+03
   --ifreq--  1225   0.13213991211053E+03   0.68302255344958E+03
   --ifreq--  1226   0.13372621449347E+03   0.69090430760446E+03
   --ifreq--  1227   0.13533098910213E+03   0.69935530283290E+03
   --ifreq--  1228   0.13695654496471E+03   0.70867757575154E+03
   --ifreq--  1229   0.13860288208121E+03   0.71694072964883E+03
   --ifreq--  1230   0.14026769142343E+03   0.72554611446799E+03
   --ifreq--  1231   0.14195328201957E+03   0.73389128565978E+03
   --ifreq--  1232   0.14365734484142E+03   0.74286816149660E+03
   --ifreq--  1233   0.14538449794541E+03   0.75265607207552E+03
   --ifreq--  1234   0.14713243230333E+03   0.76149668764375E+03
   --ifreq--  1235   0.14890114791517E+03   0.77036240040521E+03
   --ifreq--  1236   0.15069064478094E+03   0.78004462845248E+03
   --ifreq--  1237   0.15250323192884E+03   0.78947330016431E+03
   --ifreq--  1238   0.15433660033067E+03   0.79904615174703E+03
   --ifreq--  1239   0.15619305901464E+03   0.80835995596727E+03
   --ifreq--  1240   0.15807029895254E+03   0.81849077887618E+03
   --ifreq--  1241   0.15997293820079E+03   0.82870357668988E+03
   --ifreq--  1242   0.16189635870296E+03   0.83767680286276E+03
   --ifreq--  1243   0.16384286948727E+03   0.84859030938545E+03
   --ifreq--  1244   0.16581477958193E+03   0.85897306595412E+03
   --ifreq--  1245   0.16780977995874E+03   0.86950267745273E+03
   --ifreq--  1246   0.16983017964589E+03   0.88003122584288E+03
   --ifreq--  1247   0.17187366961519E+03   0.89035918878299E+03
   --ifreq--  1248   0.17394255889483E+03   0.90153975180921E+03
   --ifreq--  1249   0.17603684748483E+03   0.91247956862962E+03
   --ifreq--  1250   0.17815653538519E+03   0.92354195470928E+03
   --ifreq--  1251   0.18030162259589E+03   0.93435489815895E+03
   --ifreq--  1252   0.18247210911695E+03   0.94603055015266E+03
   --ifreq--  1253   0.18467030397658E+03   0.95753594094099E+03
   --ifreq--  1254   0.18689389814656E+03   0.96881368629935E+03
   --ifreq--  1255   0.18914520065510E+03   0.98121400450737E+03
   --ifreq--  1256   0.19142421150221E+03   0.99233764524513E+03
   --ifreq--  1257   0.19372862165968E+03   0.10044170740233E+04
   --ifreq--  1258   0.19606304918392E+03   0.10170153217597E+04
   --ifreq--  1259   0.19842518504674E+03   0.10295036872452E+04
   --ifreq--  1260   0.20081733827633E+03   0.10419866484602E+04
   --ifreq--  1261   0.20323719984449E+03   0.10545331362011E+04
   --ifreq--  1262   0.20568707877943E+03   0.10668981545610E+04
   --ifreq--  1263   0.20816466605293E+03   0.10798536614991E+04
   --ifreq--  1264   0.21067457972143E+03   0.10937061222954E+04
   --ifreq--  1265   0.21321451075672E+03   0.11063142833720E+04
   --ifreq--  1266   0.21578445915878E+03   0.11200316885660E+04
   --ifreq--  1267   0.21838673395583E+03   0.11335704095681E+04
   --ifreq--  1268   0.22101902611967E+03   0.11466771432382E+04
   --ifreq--  1269   0.22368364467850E+03   0.11617176240971E+04
   --ifreq--  1270   0.22638289866054E+03   0.11754713797983E+04
   --ifreq--  1271   0.22911217000936E+03   0.11893715711273E+04
   --ifreq--  1272   0.23187607678139E+03   0.12040647304675E+04
   --ifreq--  1273   0.23467230994842E+03   0.12183538759818E+04
   --ifreq--  1274   0.23750317853865E+03   0.12335284203009E+04
   --ifreq--  1275   0.24036868255209E+03   0.12485293054929E+04
   --ifreq--  1276   0.24326882198874E+03   0.12633575166322E+04
   --ifreq--  1277   0.24620359684860E+03   0.12790324580730E+04
   --ifreq--  1278   0.24917531615988E+03   0.12945259091842E+04
   --ifreq--  1279   0.25218167089436E+03   0.13098512651339E+04
   --ifreq--  1280   0.25522497008027E+03   0.13260759603692E+04
   --ifreq--  1281   0.25830521371761E+03   0.13418449120988E+04
   --ifreq--  1282   0.26142240180636E+03   0.13585369276273E+04
   --ifreq--  1283   0.26457884337475E+03   0.13750205312416E+04
   --ifreq--  1284   0.26777222939457E+03   0.13913680827952E+04
   --ifreq--  1285   0.27100486889401E+03   0.14085150935562E+04
   --ifreq--  1286   0.27427676187310E+03   0.14255678203322E+04
   --ifreq--  1287   0.27758790833182E+03   0.14422188051453E+04
   --ifreq--  1288   0.28093830827018E+03   0.14605409084609E+04
   --ifreq--  1289   0.28433257974460E+03   0.14786429007139E+04
   --ifreq--  1290   0.28776610469866E+03   0.14958665569526E+04
   --ifreq--  1291   0.29124119216057E+03   0.15139029928639E+04
   --ifreq--  1292   0.29475784213033E+03   0.15325109071768E+04
   --ifreq--  1293   0.29831836363615E+03   0.15510665560612E+04
   --ifreq--  1294   0.30192044764982E+03   0.15692123483945E+04
   --ifreq--  1295   0.30556640319956E+03   0.15890833843477E+04
   --ifreq--  1296   0.30925853931357E+03   0.16084658635738E+04
   --ifreq--  1297   0.31299454696365E+03   0.16280378832755E+04
   --ifreq--  1298   0.31677673517800E+03   0.16473997590514E+04
   --ifreq--  1299   0.32060279492842E+03   0.16673426094229E+04
   --ifreq--  1300   0.32447734427133E+03   0.16882477788662E+04
   --ifreq--  1301   0.32839807417852E+03   0.17076612461792E+04
   --ifreq--  1302   0.33236498464999E+03   0.17290934320607E+04
   --ifreq--  1303   0.33638269374216E+03   0.17499914399755E+04
   --ifreq--  1304   0.34044658339861E+03   0.17709121400022E+04
   --ifreq--  1305   0.34456127167577E+03   0.17923858077398E+04
   --ifreq--  1306   0.34872444954542E+03   0.18145183656480E+04
   --ifreq--  1307   0.35294073506399E+03   0.18365699271208E+04
   --ifreq--  1308   0.35720551017504E+03   0.18581763006499E+04
   --ifreq--  1309   0.36152339293502E+03   0.18817375565248E+04
   --ifreq--  1310   0.36589438334392E+03   0.19038777138508E+04
   --ifreq--  1311   0.37031617237353E+03   0.19267367564259E+04
   --ifreq--  1312   0.37479337808026E+03   0.19511856985477E+04
   --ifreq--  1313   0.37932600046413E+03   0.19745233195952E+04
   --ifreq--  1314   0.38391173049692E+03   0.19977134439395E+04
   --ifreq--  1315   0.38855287720685E+03   0.20226206222505E+04
   --ifreq--  1316   0.39325174962212E+03   0.20468181880297E+04
   --ifreq--  1317   0.39800603871452E+03   0.20720828799776E+04
   --ifreq--  1318   0.40282036254049E+03   0.20968813138616E+04
   --ifreq--  1319   0.40769010304359E+03   0.21223559170881E+04
   --ifreq--  1320   0.41262218730846E+03   0.21487291564993E+04
   --ifreq--  1321   0.41761199727868E+03   0.21737061831185E+04
   --ifreq--  1322   0.42266184198247E+03   0.22004510407867E+04
   --ifreq--  1323   0.42777403044802E+03   0.22274927199129E+04
   --ifreq--  1324   0.43294856267536E+03   0.22545758479044E+04
   --ifreq--  1325   0.43818543866446E+03   0.22812090482083E+04
   --ifreq--  1326   0.44348465841535E+03   0.23095715692384E+04
   --ifreq--  1327   0.44885083998443E+03   0.23375312136785E+04
   --ifreq--  1328   0.45427936531529E+03   0.23652771764877E+04
   --ifreq--  1329   0.45977485246436E+03   0.23943788036232E+04
   --ifreq--  1330   0.46533730143163E+03   0.24241917644853E+04
   --ifreq--  1331   0.47096902124531E+03   0.24528781610520E+04
   --ifreq--  1332   0.47666539384898E+03   0.24822634349109E+04
   --ifreq--  1333   0.48243334632728E+03   0.25130960636246E+04
   --ifreq--  1334   0.48827056965200E+03   0.25433349464801E+04
   --ifreq--  1335   0.49417937285136E+03   0.25745727701165E+04
   --ifreq--  1336   0.50015975592534E+03   0.26053733550022E+04
   --ifreq--  1337   0.50621171887395E+03   0.26369282169522E+04
   --ifreq--  1338   0.51233757072540E+03   0.26689208572599E+04
   --ifreq--  1339   0.51853731147971E+03   0.27013809758110E+04
   --ifreq--  1340   0.52481325016507E+03   0.27345606321657E+04
   --ifreq--  1341   0.53116538678148E+03   0.27673765865449E+04
   --ifreq--  1342   0.53759372132896E+03   0.28009273544265E+04
   --ifreq--  1343   0.54410056283571E+03   0.28349213123074E+04
   --ifreq--  1344   0.55068591130173E+03   0.28693798969690E+04
   --ifreq--  1345   0.55735207575524E+03   0.29045644264703E+04
   --ifreq--  1346   0.56409905619623E+03   0.29393627225194E+04
   --ifreq--  1347   0.57092685262471E+03   0.29749781021473E+04
   --ifreq--  1348   0.57783777406889E+03   0.30107352599845E+04
   --ifreq--  1349   0.58483182052877E+03   0.30480630250965E+04
   --ifreq--  1350   0.59191361006078E+03   0.30850394436795E+04
   --ifreq--  1351   0.59907852460849E+03   0.31217528896900E+04
   --ifreq--  1352   0.60633118222832E+03   0.31599663449624E+04
   --ifreq--  1353   0.61367158292029E+03   0.31983714974941E+04
   --ifreq--  1354   0.62110203571259E+03   0.32375540299827E+04
   --ifreq--  1355   0.62862254060524E+03   0.32764114369285E+04
   --ifreq--  1356   0.63623309759823E+03   0.33157970447058E+04
   --ifreq--  1357   0.64393601571977E+03   0.33564006335104E+04
   --ifreq--  1358   0.65173360399809E+03   0.33976027469486E+04
   --ifreq--  1359   0.65962586243317E+03   0.34381919848047E+04
   --ifreq--  1360   0.66761279102503E+03   0.34806128746665E+04
   --ifreq--  1361   0.67569900783008E+03   0.35223856102954E+04
   --ifreq--  1362   0.68387989479190E+03   0.35648104014867E+04
   --ifreq--  1363   0.69216237899513E+03   0.36084043822643E+04
   --ifreq--  1364   0.70054415141156E+03   0.36525431760093E+04
   --ifreq--  1365   0.70902983009761E+03   0.36964541561688E+04
   --ifreq--  1366   0.71761479699687E+03   0.37406085226405E+04
   --ifreq--  1367   0.72630597919396E+03   0.37871326672340E+04
   --ifreq--  1368   0.73510337668889E+03   0.38328560048319E+04
   --ifreq--  1369   0.74400698948166E+03   0.38794383242616E+04
   --ifreq--  1370   0.75301912660048E+03   0.39263978072907E+04
   --ifreq--  1371   0.76213978804535E+03   0.39739620712605E+04
   --ifreq--  1372   0.77137128284449E+03   0.40217644361862E+04
   --ifreq--  1373   0.78071361099790E+03   0.40709639496315E+04
   --ifreq--  1374   0.79017139056201E+03   0.41204013911499E+04
   --ifreq--  1375   0.79974231250859E+03   0.41704074676664E+04
   --ifreq--  1376   0.80943099489408E+03   0.42209913249411E+04
   --ifreq--  1377   0.81923512869027E+03   0.42716086349917E+04
   --ifreq--  1378   0.82915933195358E+03   0.43245802985109E+04
   --ifreq--  1379   0.83920591371222E+03   0.43770777689103E+04
   --ifreq--  1380   0.84937256493799E+03   0.44291011814251E+04
   --ifreq--  1381   0.85966159465910E+03   0.44835104580785E+04
   --ifreq--  1382   0.87007762093197E+03   0.45378766124389E+04
   --ifreq--  1383   0.88061833472838E+03   0.45929597930623E+04
   --ifreq--  1384   0.89128835410478E+03   0.46483096413852E+04
   --ifreq--  1385   0.90208537003294E+03   0.47047732973869E+04
   --ifreq--  1386   0.91301630959751E+03   0.47626238726242E+04
   --ifreq--  1387   0.92407886377027E+03   0.48197166715384E+04
   --ifreq--  1388   0.93527534157943E+03   0.48785117327280E+04
   --ifreq--  1389   0.94660805205322E+03   0.49372445198282E+04
   --ifreq--  1390   0.95807699519162E+03   0.49974948523418E+04
   --ifreq--  1391   0.96968678905107E+03   0.50577994261044E+04
   --ifreq--  1392   0.98143512460335E+03   0.51192787990523E+04
   --ifreq--  1393   0.99332892893311E+03   0.51821118313311E+04
   --ifreq--  1394   0.10053658930121E+04   0.52442581695137E+04
   --ifreq--  1395   0.10175483258686E+04   0.53078597240547E+04
   --ifreq--  1396   0.10298785365308E+04   0.53723020064144E+04
   --ifreq--  1397   0.10423588340269E+04   0.54379307362776E+04
   --ifreq--  1398   0.10549915273851E+04   0.55039801405277E+04
   --ifreq--  1399   0.10677766166054E+04   0.55701459863304E+04
   --ifreq--  1400   0.10807164107161E+04   0.56384289510419E+04
   --ifreq--  1401   0.10938155277735E+04   0.57071534210562E+04
   --ifreq--  1402   0.11070716587495E+04   0.57749497902111E+04
   --ifreq--  1403   0.11204871126722E+04   0.58460333428865E+04
   --ifreq--  1404   0.11340688166263E+04   0.59169483558526E+04
   --ifreq--  1405   0.11478121525554E+04   0.59881403097383E+04
   --ifreq--  1406   0.11617240475441E+04   0.60615134470385E+04
   --ifreq--  1407   0.11758045015924E+04   0.61347954422797E+04
   --ifreq--  1408   0.11900558237285E+04   0.62093090124149E+04
   --ifreq--  1409   0.12044803229807E+04   0.62849655584148E+04
   --ifreq--  1410   0.12190803083772E+04   0.63608359005389E+04
   --ifreq--  1411   0.12338557799179E+04   0.64376794891029E+04
   --ifreq--  1412   0.12488113556592E+04   0.65164519599390E+04
   --ifreq--  1413   0.12639493446295E+04   0.65955147904972E+04
   --ifreq--  1414   0.12792697468287E+04   0.66744890070887E+04
   --ifreq--  1415   0.12947748712850E+04   0.67565126726843E+04
   --ifreq--  1416   0.13104716450830E+04   0.68384915717404E+04
   --ifreq--  1417   0.13263554501664E+04   0.69204907221720E+04
   --ifreq--  1418   0.13424332136197E+04   0.70055605417665E+04
   --ifreq--  1419   0.13587072444712E+04   0.70902699027079E+04
   --ifreq--  1420   0.13751775427209E+04   0.71763467005656E+04
   --ifreq--  1421   0.13918487264252E+04   0.72633578408349E+04
   --ifreq--  1422   0.14087207955841E+04   0.73512082125174E+04
   --ifreq--  1423   0.14257983682541E+04   0.74408175563725E+04
   --ifreq--  1424   0.14430837534633E+04   0.75315152819046E+04
   --ifreq--  1425   0.14605792602399E+04   0.76221325247485E+04
   --ifreq--  1426   0.14782848885841E+04   0.77149315287073E+04
   --ifreq--  1427   0.14962075655803E+04   0.78081727140164E+04
   --ifreq--  1428   0.15143449822004E+04   0.79033387235754E+04
   --ifreq--  1429   0.15327063745573E+04   0.79995141254960E+04
   --ifreq--  1430   0.15512871245945E+04   0.80955693042635E+04
   --ifreq--  1431   0.15700941593967E+04   0.81942299016006E+04
   --ifreq--  1432   0.15891297879920E+04   0.82944958541894E+04
   --ifreq--  1433   0.16083986284369E+04   0.83948098124277E+04
   --ifreq--  1434   0.16278983717032E+04   0.84962379440717E+04
   --ifreq--  1435   0.16476359448756E+04   0.85992640898250E+04
   --ifreq--  1436   0.16676113479540E+04   0.87036830855771E+04
   --ifreq--  1437   0.16878315080230E+04   0.88100227117608E+04
   --ifreq--  1438   0.17082964250828E+04   0.89162170045584E+04
   --ifreq--  1439   0.17290084081614E+04   0.90241085645353E+04
   --ifreq--  1440   0.17499720753153E+04   0.91343460318312E+04
   --ifreq--  1441   0.17711920446010E+04   0.92455166063436E+04
   --ifreq--  1442   0.17926683160184E+04   0.93565840898240E+04
   --ifreq--  1443   0.18144031985957E+04   0.94701375822906E+04
   --ifreq--  1444   0.18364036194177E+04   0.95858768361837E+04
   --ifreq--  1445   0.18586718875125E+04   0.97023516683672E+04
   --ifreq--  1446   0.18812103119083E+04   0.98197195547332E+04
   --ifreq--  1447   0.19040212016333E+04   0.99387643100359E+04
   --ifreq--  1448   0.19271091747440E+04   0.10059231362045E+05
   --ifreq--  1449   0.19504765402686E+04   0.10181301506639E+05
   --ifreq--  1450   0.19741279162635E+04   0.10304574282701E+05
   --ifreq--  1451   0.19980656117570E+04   0.10430384535596E+05
   --ifreq--  1452   0.20222965538335E+04   0.10556913530634E+05
   --ifreq--  1453   0.20468184334651E+04   0.10683936798433E+05
   --ifreq--  1454   0.20716381777362E+04   0.10814347925879E+05
   --ifreq--  1455   0.20967604047034E+04   0.10945675152925E+05
   --ifreq--  1456   0.21221874233947E+04   0.11078942052225E+05
   --ifreq--  1457   0.21479238518668E+04   0.11212574698311E+05
   --ifreq--  1458   0.21739696901195E+04   0.11348730719807E+05
   --ifreq--  1459   0.22003341742657E+04   0.11486534431311E+05
   --ifreq--  1460   0.22270173043055E+04   0.11627090956692E+05
   --ifreq--  1461   0.22540260073234E+04   0.11764178285063E+05
   --ifreq--  1462   0.22813602833194E+04   0.11920983043381E+05
   --ifreq--  1463   0.23090270593783E+04   0.60066784051778E+04
     Total number of log frequencies is  1463
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

  == Prepare data for DMFT calculation

 == Check: Occupations and Norm from psichi are

  ------ Symetrised Occupation

   -------> For Correlated Atom  55

          -- polarization spin component  1

          -- polarization spin component  1

          -- polarization spin component  1

          -- polarization spin component  1

          -- polarization spin component  1

          -- polarization spin component  1

  ------ Symetrised Norm

   -------> For Correlated Atom  55

          -- polarization spin component  1

          -- polarization spin component  1

          -- polarization spin component  1

          -- polarization spin component  1

          -- polarization spin component  1

          -- polarization spin component  1

   ** Differences between LDA+U density matrix from INPUT wfk and 
      Direct calculation of density matrix with psichi from DIAGONALIZED wfk are small enough:
      0.1983E-05 is lower than  0.1000E-02

 DMFT Checks will not be performed

 =====================================
 =====  LDA Green Function Calculation
 =====================================

  ===  Compute green function

  == Green function is computed:

  == Local Green function has been computed and projected on local orbitals

   ===  Integrate green function

     Local basis is not (yet) orthonormal: local green function is thus not integrated
     Local occupations are computed from KS occupations

  = Occupation matrix from KS occupations

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.49780   0.00000   0.00000  -0.00000   0.00000
        0.00000   0.49715   0.00000  -0.00000  -0.00000
        0.00000   0.00000   0.53453  -0.00000   0.00000
       -0.00000  -0.00000  -0.00000   0.49715  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.53133

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(w) is:    5.115928

  ==  Total number of electrons from KS green function is : 1042.813569
         (should be 1043.000000)

  == The LDA occupations (integral of the Green function) are  ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.49780   0.00000   0.00000  -0.00000   0.00000
        0.00000   0.49715   0.00000  -0.00000  -0.00000
        0.00000   0.00000   0.53453  -0.00000   0.00000
       -0.00000  -0.00000  -0.00000   0.49715  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.53133

   = In the KS basis

   --isppol--   1

   - ( in the following only the value for the first k-points are printed)

   -k-pt--   1         1.00000(<-weight(k-pt))
   -iband--   1  -0.40971E+01      0.99943E+00
   -iband--   2  -0.40971E+01      0.99943E+00
   -iband--   3  -0.40971E+01      0.99943E+00
   -iband--   4  -0.40971E+01      0.99943E+00
   -iband--   5  -0.40967E+01      0.99943E+00
   -iband--   6  -0.40967E+01      0.99943E+00
   -iband--   7  -0.40967E+01      0.99943E+00
   -iband--   8  -0.40967E+01      0.99943E+00
   -iband--   9  -0.40957E+01      0.99943E+00
   -iband--  10  -0.40956E+01      0.99943E+00
   -iband--  11  -0.40956E+01      0.99943E+00
   -iband--  12  -0.40956E+01      0.99943E+00
   -iband--  13  -0.40953E+01      0.99943E+00
   -iband--  14  -0.40949E+01      0.99943E+00
   -iband--  15  -0.40949E+01      0.99943E+00
   -iband--  16  -0.40949E+01      0.99943E+00
   -iband--  17  -0.40949E+01      0.99943E+00
   -iband--  18  -0.40885E+01      0.99943E+00
   -iband--  19  -0.40861E+01      0.99943E+00
   -iband--  20  -0.40860E+01      0.99943E+00
   -iband--  21  -0.40860E+01      0.99943E+00
   -iband--  22  -0.40859E+01      0.99943E+00
   -iband--  23  -0.40818E+01      0.99943E+00
   -iband--  24  -0.40817E+01      0.99943E+00
   -iband--  25  -0.40817E+01      0.99943E+00
   -iband--  26  -0.40816E+01      0.99943E+00
   -iband--  27  -0.40814E+01      0.99943E+00
   -iband--  28  -0.40814E+01      0.99943E+00
   -iband--  29  -0.40802E+01      0.99943E+00
   -iband--  30  -0.40802E+01      0.99943E+00
   -iband--  31  -0.40802E+01      0.99943E+00
   -iband--  32  -0.40801E+01      0.99943E+00
   -iband--  33  -0.40800E+01      0.99943E+00
   -iband--  34  -0.40799E+01      0.99943E+00
   -iband--  35  -0.40799E+01      0.99943E+00
   -iband--  36  -0.40799E+01      0.99943E+00
   -iband--  37  -0.40799E+01      0.99943E+00
   -iband--  38  -0.40799E+01      0.99943E+00
   -iband--  39  -0.40799E+01      0.99943E+00
   -iband--  40  -0.40798E+01      0.99943E+00
   -iband--  41  -0.40796E+01      0.99943E+00
   -iband--  42  -0.40795E+01      0.99943E+00
   -iband--  43  -0.40795E+01      0.99943E+00
   -iband--  44  -0.40795E+01      0.99943E+00
   -iband--  45  -0.40791E+01      0.99943E+00
   -iband--  46  -0.40791E+01      0.99943E+00
   -iband--  47  -0.40766E+01      0.99943E+00
   -iband--  48  -0.40766E+01      0.99943E+00
   -iband--  49  -0.40766E+01      0.99943E+00
   -iband--  50  -0.40766E+01      0.99943E+00
   -iband--  51  -0.40766E+01      0.99943E+00
   -iband--  52  -0.40766E+01      0.99943E+00
   -iband--  53  -0.40766E+01      0.99943E+00
   -iband--  54  -0.40766E+01      0.99943E+00
   -iband--  55  -0.34057E+01      0.99953E+00
   -iband--  56  -0.25481E+01      0.99964E+00
   -iband--  57  -0.25481E+01      0.99964E+00
   -iband--  58  -0.25481E+01      0.99964E+00
   -iband--  59  -0.25481E+01      0.99964E+00
   -iband--  60  -0.25477E+01      0.99964E+00
   -iband--  61  -0.25477E+01      0.99964E+00
   -iband--  62  -0.25477E+01      0.99964E+00
   -iband--  63  -0.25477E+01      0.99964E+00
   -iband--  64  -0.25467E+01      0.99965E+00
   -iband--  65  -0.25467E+01      0.99965E+00
   -iband--  66  -0.25467E+01      0.99965E+00
   -iband--  67  -0.25467E+01      0.99965E+00
   -iband--  68  -0.25466E+01      0.99965E+00
   -iband--  69  -0.25466E+01      0.99965E+00
   -iband--  70  -0.25465E+01      0.99965E+00
   -iband--  71  -0.25465E+01      0.99965E+00
   -iband--  72  -0.25465E+01      0.99965E+00
   -iband--  73  -0.25464E+01      0.99965E+00
   -iband--  74  -0.25463E+01      0.99965E+00
   -iband--  75  -0.25463E+01      0.99965E+00
   -iband--  76  -0.25462E+01      0.99965E+00
   -iband--  77  -0.25462E+01      0.99965E+00
   -iband--  78  -0.25461E+01      0.99965E+00
   -iband--  79  -0.25461E+01      0.99965E+00
   -iband--  80  -0.25458E+01      0.99965E+00
   -iband--  81  -0.25458E+01      0.99965E+00
   -iband--  82  -0.25456E+01      0.99965E+00
   -iband--  83  -0.25456E+01      0.99965E+00
   -iband--  84  -0.25456E+01      0.99965E+00
   -iband--  85  -0.25455E+01      0.99965E+00
   -iband--  86  -0.25453E+01      0.99965E+00
   -iband--  87  -0.25453E+01      0.99965E+00
   -iband--  88  -0.25453E+01      0.99965E+00
   -iband--  89  -0.25453E+01      0.99965E+00
   -iband--  90  -0.25453E+01      0.99965E+00
   -iband--  91  -0.25453E+01      0.99965E+00
   -iband--  92  -0.25452E+01      0.99965E+00
   -iband--  93  -0.25447E+01      0.99965E+00
   -iband--  94  -0.25447E+01      0.99965E+00
   -iband--  95  -0.25442E+01      0.99965E+00
   -iband--  96  -0.25441E+01      0.99965E+00
   -iband--  97  -0.25440E+01      0.99965E+00
   -iband--  98  -0.25440E+01      0.99965E+00
   -iband--  99  -0.25438E+01      0.99965E+00
   -iband-- 100  -0.25438E+01      0.99965E+00
   -iband-- 101  -0.25437E+01      0.99965E+00
   -iband-- 102  -0.25437E+01      0.99965E+00
   -iband-- 103  -0.25430E+01      0.99965E+00
   -iband-- 104  -0.25430E+01      0.99965E+00
   -iband-- 105  -0.25430E+01      0.99965E+00
   -iband-- 106  -0.25430E+01      0.99965E+00
   -iband-- 107  -0.25395E+01      0.99965E+00
   -iband-- 108  -0.25391E+01      0.99965E+00
   -iband-- 109  -0.25391E+01      0.99965E+00
   -iband-- 110  -0.25389E+01      0.99965E+00
   -iband-- 111  -0.25389E+01      0.99965E+00
   -iband-- 112  -0.25386E+01      0.99965E+00
   -iband-- 113  -0.25375E+01      0.99965E+00
   -iband-- 114  -0.25351E+01      0.99965E+00
   -iband-- 115  -0.25345E+01      0.99965E+00
   -iband-- 116  -0.25345E+01      0.99965E+00
   -iband-- 117  -0.25339E+01      0.99965E+00
   -iband-- 118  -0.25338E+01      0.99965E+00
   -iband-- 119  -0.25336E+01      0.99965E+00
   -iband-- 120  -0.25336E+01      0.99965E+00
   -iband-- 121  -0.25335E+01      0.99965E+00
   -iband-- 122  -0.25335E+01      0.99965E+00
   -iband-- 123  -0.25334E+01      0.99965E+00
   -iband-- 124  -0.25334E+01      0.99965E+00
   -iband-- 125  -0.25334E+01      0.99965E+00
   -iband-- 126  -0.25327E+01      0.99965E+00
   -iband-- 127  -0.25327E+01      0.99965E+00
   -iband-- 128  -0.25326E+01      0.99965E+00
   -iband-- 129  -0.25326E+01      0.99965E+00
   -iband-- 130  -0.25325E+01      0.99965E+00
   -iband-- 131  -0.25325E+01      0.99965E+00
   -iband-- 132  -0.25325E+01      0.99965E+00
   -iband-- 133  -0.25324E+01      0.99965E+00
   -iband-- 134  -0.25320E+01      0.99965E+00
   -iband-- 135  -0.25319E+01      0.99965E+00
   -iband-- 136  -0.25319E+01      0.99965E+00
   -iband-- 137  -0.25319E+01      0.99965E+00
   -iband-- 138  -0.25315E+01      0.99965E+00
   -iband-- 139  -0.25315E+01      0.99965E+00
   -iband-- 140  -0.25313E+01      0.99965E+00
   -iband-- 141  -0.25313E+01      0.99965E+00
   -iband-- 142  -0.25312E+01      0.99965E+00
   -iband-- 143  -0.25312E+01      0.99965E+00
   -iband-- 144  -0.25311E+01      0.99965E+00
   -iband-- 145  -0.25311E+01      0.99965E+00
   -iband-- 146  -0.25311E+01      0.99965E+00
   -iband-- 147  -0.25310E+01      0.99965E+00
   -iband-- 148  -0.25310E+01      0.99965E+00
   -iband-- 149  -0.25310E+01      0.99965E+00
   -iband-- 150  -0.25307E+01      0.99965E+00
   -iband-- 151  -0.25306E+01      0.99965E+00
   -iband-- 152  -0.25306E+01      0.99965E+00
   -iband-- 153  -0.25306E+01      0.99965E+00
   -iband-- 154  -0.25305E+01      0.99965E+00
   -iband-- 155  -0.25305E+01      0.99965E+00
   -iband-- 156  -0.25303E+01      0.99965E+00
   -iband-- 157  -0.25303E+01      0.99965E+00
   -iband-- 158  -0.25302E+01      0.99965E+00
   -iband-- 159  -0.25302E+01      0.99965E+00
   -iband-- 160  -0.25302E+01      0.99965E+00
   -iband-- 161  -0.25301E+01      0.99965E+00
   -iband-- 162  -0.25301E+01      0.99965E+00
   -iband-- 163  -0.25301E+01      0.99965E+00
   -iband-- 164  -0.25301E+01      0.99965E+00
   -iband-- 165  -0.25301E+01      0.99965E+00
   -iband-- 166  -0.25301E+01      0.99965E+00
   -iband-- 167  -0.25300E+01      0.99965E+00
   -iband-- 168  -0.25300E+01      0.99965E+00
   -iband-- 169  -0.25299E+01      0.99965E+00
   -iband-- 170  -0.25298E+01      0.99965E+00
   -iband-- 171  -0.25298E+01      0.99965E+00
   -iband-- 172  -0.25295E+01      0.99965E+00
   -iband-- 173  -0.25294E+01      0.99965E+00
   -iband-- 174  -0.25294E+01      0.99965E+00
   -iband-- 175  -0.25293E+01      0.99965E+00
   -iband-- 176  -0.25284E+01      0.99965E+00
   -iband-- 177  -0.25284E+01      0.99965E+00
   -iband-- 178  -0.25281E+01      0.99965E+00
   -iband-- 179  -0.25281E+01      0.99965E+00
   -iband-- 180  -0.25280E+01      0.99965E+00
   -iband-- 181  -0.25280E+01      0.99965E+00
   -iband-- 182  -0.25280E+01      0.99965E+00
   -iband-- 183  -0.25279E+01      0.99965E+00
   -iband-- 184  -0.25279E+01      0.99965E+00
   -iband-- 185  -0.25279E+01      0.99965E+00
   -iband-- 186  -0.25278E+01      0.99965E+00
   -iband-- 187  -0.25278E+01      0.99965E+00
   -iband-- 188  -0.25278E+01      0.99965E+00
   -iband-- 189  -0.25278E+01      0.99965E+00
   -iband-- 190  -0.25277E+01      0.99965E+00
   -iband-- 191  -0.25277E+01      0.99965E+00
   -iband-- 192  -0.25277E+01      0.99965E+00
   -iband-- 193  -0.25277E+01      0.99965E+00
   -iband-- 194  -0.25277E+01      0.99965E+00
   -iband-- 195  -0.25276E+01      0.99965E+00
   -iband-- 196  -0.25276E+01      0.99965E+00
   -iband-- 197  -0.25275E+01      0.99965E+00
   -iband-- 198  -0.25274E+01      0.99965E+00
   -iband-- 199  -0.25274E+01      0.99965E+00
   -iband-- 200  -0.25272E+01      0.99965E+00
   -iband-- 201  -0.25272E+01      0.99965E+00
   -iband-- 202  -0.25271E+01      0.99965E+00
   -iband-- 203  -0.25271E+01      0.99965E+00
   -iband-- 204  -0.25271E+01      0.99965E+00
   -iband-- 205  -0.25271E+01      0.99965E+00
   -iband-- 206  -0.25270E+01      0.99965E+00
   -iband-- 207  -0.25270E+01      0.99965E+00
   -iband-- 208  -0.25270E+01      0.99965E+00
   -iband-- 209  -0.25270E+01      0.99965E+00
   -iband-- 210  -0.25248E+01      0.99965E+00
   -iband-- 211  -0.25248E+01      0.99965E+00
   -iband-- 212  -0.25248E+01      0.99965E+00
   -iband-- 213  -0.25248E+01      0.99965E+00
   -iband-- 214  -0.25247E+01      0.99965E+00
   -iband-- 215  -0.25247E+01      0.99965E+00
   -iband-- 216  -0.25247E+01      0.99965E+00
   -iband-- 217  -0.25247E+01      0.99965E+00
   -iband-- 218  -0.20737E+01      0.99971E+00
   -iband-- 219  -0.20735E+01      0.99971E+00
   -iband-- 220  -0.20735E+01      0.99971E+00
   -iband-- 221  -0.29616E+00      0.99996E+00
   -iband-- 222  -0.25109E+00      0.99996E+00
   -iband-- 223  -0.24934E+00      0.99996E+00
   -iband-- 224  -0.24879E+00      0.99996E+00
   -iband-- 225  -0.24879E+00      0.99996E+00
   -iband-- 226  -0.21282E+00      0.99997E+00
   -iband-- 227  -0.21038E+00      0.99997E+00
   -iband-- 228  -0.21038E+00      0.99997E+00
   -iband-- 229  -0.20963E+00      0.99997E+00
   -iband-- 230  -0.20849E+00      0.99997E+00
   -iband-- 231  -0.17557E+00      0.99997E+00
   -iband-- 232  -0.16869E+00      0.99997E+00
   -iband-- 233  -0.16863E+00      0.99997E+00
   -iband-- 234  -0.16862E+00      0.99997E+00
   -iband-- 235  -0.16060E+00      0.99997E+00
   -iband-- 236  -0.15887E+00      0.99997E+00
   -iband-- 237  -0.15887E+00      0.99997E+00
   -iband-- 238  -0.15876E+00      0.99997E+00
   -iband-- 239  -0.15778E+00      0.99997E+00
   -iband-- 240  -0.15764E+00      0.99997E+00
   -iband-- 241  -0.15758E+00      0.99997E+00
   -iband-- 242  -0.15713E+00      0.99997E+00
   -iband-- 243  -0.15713E+00      0.99997E+00
   -iband-- 244  -0.15270E+00      0.99998E+00
   -iband-- 245  -0.15192E+00      0.99998E+00
   -iband-- 246  -0.15109E+00      0.99998E+00
   -iband-- 247  -0.15109E+00      0.99998E+00
   -iband-- 248  -0.15074E+00      0.99998E+00
   -iband-- 249  -0.14548E+00      0.99998E+00
   -iband-- 250  -0.14548E+00      0.99998E+00
   -iband-- 251  -0.14545E+00      0.99998E+00
   -iband-- 252  -0.14520E+00      0.99998E+00
   -iband-- 253  -0.14275E+00      0.99998E+00
   -iband-- 254  -0.13918E+00      0.99998E+00
   -iband-- 255  -0.13733E+00      0.99998E+00
   -iband-- 256  -0.13589E+00      0.99998E+00
   -iband-- 257  -0.13589E+00      0.99998E+00
   -iband-- 258  -0.13584E+00      0.99998E+00
   -iband-- 259  -0.13534E+00      0.99998E+00
   -iband-- 260  -0.13534E+00      0.99998E+00
   -iband-- 261  -0.13403E+00      0.99998E+00
   -iband-- 262  -0.13403E+00      0.99998E+00
   -iband-- 263  -0.13365E+00      0.99998E+00
   -iband-- 264  -0.13335E+00      0.99998E+00
   -iband-- 265  -0.13320E+00      0.99998E+00
   -iband-- 266  -0.13295E+00      0.99998E+00
   -iband-- 267  -0.13295E+00      0.99998E+00
   -iband-- 268  -0.13293E+00      0.99998E+00
   -iband-- 269  -0.13158E+00      0.99998E+00
   -iband-- 270  -0.13074E+00      0.99998E+00
   -iband-- 271  -0.13058E+00      0.99998E+00
   -iband-- 272  -0.13058E+00      0.99998E+00
   -iband-- 273  -0.13006E+00      0.99998E+00
   -iband-- 274  -0.13006E+00      0.99998E+00
   -iband-- 275  -0.12964E+00      0.99998E+00
   -iband-- 276  -0.12895E+00      0.99998E+00
   -iband-- 277  -0.12756E+00      0.99998E+00
   -iband-- 278  -0.12717E+00      0.99998E+00
   -iband-- 279  -0.12665E+00      0.99998E+00
   -iband-- 280  -0.12665E+00      0.99998E+00
   -iband-- 281  -0.12621E+00      0.99998E+00
   -iband-- 282  -0.12621E+00      0.99998E+00
   -iband-- 283  -0.12604E+00      0.99998E+00
   -iband-- 284  -0.12572E+00      0.99998E+00
   -iband-- 285  -0.12338E+00      0.99998E+00
   -iband-- 286  -0.11711E+00      0.99998E+00
   -iband-- 287  -0.11699E+00      0.99998E+00
   -iband-- 288  -0.11492E+00      0.99998E+00
   -iband-- 289  -0.11492E+00      0.99998E+00
   -iband-- 290  -0.11448E+00      0.99998E+00
   -iband-- 291  -0.11384E+00      0.99998E+00
   -iband-- 292  -0.11287E+00      0.99998E+00
   -iband-- 293  -0.11250E+00      0.99998E+00
   -iband-- 294  -0.11250E+00      0.99998E+00
   -iband-- 295  -0.11171E+00      0.99998E+00
   -iband-- 296  -0.11114E+00      0.99998E+00
   -iband-- 297  -0.11102E+00      0.99998E+00
   -iband-- 298  -0.11102E+00      0.99998E+00
   -iband-- 299  -0.11066E+00      0.99998E+00
   -iband-- 300  -0.10919E+00      0.99998E+00
   -iband-- 301  -0.10919E+00      0.99998E+00
   -iband-- 302  -0.10753E+00      0.99998E+00
   -iband-- 303  -0.10746E+00      0.99998E+00
   -iband-- 304  -0.10740E+00      0.99998E+00
   -iband-- 305  -0.10740E+00      0.99998E+00
   -iband-- 306  -0.10720E+00      0.99998E+00
   -iband-- 307  -0.10424E+00      0.99998E+00
   -iband-- 308  -0.10424E+00      0.99998E+00
   -iband-- 309  -0.10356E+00      0.99998E+00
   -iband-- 310  -0.10217E+00      0.99998E+00
   -iband-- 311  -0.10081E+00      0.99998E+00
   -iband-- 312  -0.10081E+00      0.99998E+00
   -iband-- 313  -0.10062E+00      0.99998E+00
   -iband-- 314  -0.10036E+00      0.99998E+00
   -iband-- 315  -0.99958E-01      0.99998E+00
   -iband-- 316  -0.99725E-01      0.99998E+00
   -iband-- 317  -0.99725E-01      0.99998E+00
   -iband-- 318  -0.99459E-01      0.99998E+00
   -iband-- 319  -0.98198E-01      0.99998E+00
   -iband-- 320  -0.98191E-01      0.99998E+00
   -iband-- 321  -0.98125E-01      0.99998E+00
   -iband-- 322  -0.98125E-01      0.99998E+00
   -iband-- 323  -0.98000E-01      0.99998E+00
   -iband-- 324  -0.96486E-01      0.99998E+00
   -iband-- 325  -0.96486E-01      0.99998E+00
   -iband-- 326  -0.94092E-01      0.99998E+00
   -iband-- 327  -0.94021E-01      0.99998E+00
   -iband-- 328  -0.93697E-01      0.99998E+00
   -iband-- 329  -0.93697E-01      0.99998E+00
   -iband-- 330  -0.93517E-01      0.99998E+00
   -iband-- 331  -0.93090E-01      0.99998E+00
   -iband-- 332  -0.92757E-01      0.99998E+00
   -iband-- 333  -0.92415E-01      0.99998E+00
   -iband-- 334  -0.92415E-01      0.99998E+00
   -iband-- 335  -0.90795E-01      0.99998E+00
   -iband-- 336  -0.90790E-01      0.99998E+00
   -iband-- 337  -0.90790E-01      0.99998E+00
   -iband-- 338  -0.90373E-01      0.99998E+00
   -iband-- 339  -0.90373E-01      0.99998E+00
   -iband-- 340  -0.90330E-01      0.99998E+00
   -iband-- 341  -0.90086E-01      0.99998E+00
   -iband-- 342  -0.89705E-01      0.99998E+00
   -iband-- 343  -0.89165E-01      0.99998E+00
   -iband-- 344  -0.89036E-01      0.99998E+00
   -iband-- 345  -0.89015E-01      0.99998E+00
   -iband-- 346  -0.88790E-01      0.99998E+00
   -iband-- 347  -0.88790E-01      0.99998E+00
   -iband-- 348  -0.88584E-01      0.99998E+00
   -iband-- 349  -0.88532E-01      0.99998E+00
   -iband-- 350  -0.88532E-01      0.99998E+00
   -iband-- 351  -0.87115E-01      0.99998E+00
   -iband-- 352  -0.86899E-01      0.99998E+00
   -iband-- 353  -0.86899E-01      0.99998E+00
   -iband-- 354  -0.86140E-01      0.99998E+00
   -iband-- 355  -0.86140E-01      0.99998E+00
   -iband-- 356  -0.85343E-01      0.99998E+00
   -iband-- 357  -0.84967E-01      0.99998E+00
   -iband-- 358  -0.84967E-01      0.99998E+00
   -iband-- 359  -0.84929E-01      0.99998E+00
   -iband-- 360  -0.84595E-01      0.99998E+00
   -iband-- 361  -0.84134E-01      0.99998E+00
   -iband-- 362  -0.84134E-01      0.99998E+00
   -iband-- 363  -0.83834E-01      0.99998E+00
   -iband-- 364  -0.83834E-01      0.99998E+00
   -iband-- 365  -0.83337E-01      0.99998E+00
   -iband-- 366  -0.83230E-01      0.99998E+00
   -iband-- 367  -0.83090E-01      0.99998E+00
   -iband-- 368  -0.83040E-01      0.99998E+00
   -iband-- 369  -0.81097E-01      0.99998E+00
   -iband-- 370  -0.80858E-01      0.99999E+00
   -iband-- 371  -0.79850E-01      0.99999E+00
   -iband-- 372  -0.79850E-01      0.99999E+00
   -iband-- 373  -0.78718E-01      0.99999E+00
   -iband-- 374  -0.78667E-01      0.99999E+00
   -iband-- 375  -0.78667E-01      0.99999E+00
   -iband-- 376  -0.78297E-01      0.99999E+00
   -iband-- 377  -0.77655E-01      0.99999E+00
   -iband-- 378  -0.77655E-01      0.99999E+00
   -iband-- 379  -0.76895E-01      0.99999E+00
   -iband-- 380  -0.76165E-01      0.99999E+00
   -iband-- 381  -0.74120E-01      0.99999E+00
   -iband-- 382  -0.73933E-01      0.99999E+00
   -iband-- 383  -0.73933E-01      0.99999E+00
   -iband-- 384  -0.73580E-01      0.99999E+00
   -iband-- 385  -0.73411E-01      0.99999E+00
   -iband-- 386  -0.73411E-01      0.99999E+00
   -iband-- 387  -0.73011E-01      0.99999E+00
   -iband-- 388  -0.71909E-01      0.99999E+00
   -iband-- 389  -0.71843E-01      0.99999E+00
   -iband-- 390  -0.71450E-01      0.99999E+00
   -iband-- 391  -0.71450E-01      0.99999E+00
   -iband-- 392  -0.70992E-01      0.99999E+00
   -iband-- 393  -0.70992E-01      0.99999E+00
   -iband-- 394  -0.70731E-01      0.99999E+00
   -iband-- 395  -0.70331E-01      0.99999E+00
   -iband-- 396  -0.69983E-01      0.99999E+00
   -iband-- 397  -0.69102E-01      0.99999E+00
   -iband-- 398  -0.68461E-01      0.99999E+00
   -iband-- 399  -0.68461E-01      0.99999E+00
   -iband-- 400  -0.67811E-01      0.99999E+00
   -iband-- 401  -0.66470E-01      0.99999E+00
   -iband-- 402  -0.65851E-01      0.99999E+00
   -iband-- 403  -0.65487E-01      0.99999E+00
   -iband-- 404  -0.65487E-01      0.99999E+00
   -iband-- 405  -0.65300E-01      0.99999E+00
   -iband-- 406  -0.65157E-01      0.99999E+00
   -iband-- 407  -0.65157E-01      0.99999E+00
   -iband-- 408  -0.64781E-01      0.99999E+00
   -iband-- 409  -0.64081E-01      0.99999E+00
   -iband-- 410  -0.63990E-01      0.99999E+00
   -iband-- 411  -0.63795E-01      0.99999E+00
   -iband-- 412  -0.63352E-01      0.99999E+00
   -iband-- 413  -0.63352E-01      0.99999E+00
   -iband-- 414  -0.63322E-01      0.99999E+00
   -iband-- 415  -0.62751E-01      0.99999E+00
   -iband-- 416  -0.62747E-01      0.99999E+00
   -iband-- 417  -0.62747E-01      0.99999E+00
   -iband-- 418  -0.62642E-01      0.99999E+00
   -iband-- 419  -0.62335E-01      0.99999E+00
   -iband-- 420  -0.62335E-01      0.99999E+00
   -iband-- 421  -0.62130E-01      0.99999E+00
   -iband-- 422  -0.61869E-01      0.99999E+00
   -iband-- 423  -0.61869E-01      0.99999E+00
   -iband-- 424  -0.61771E-01      0.99999E+00
   -iband-- 425  -0.61263E-01      0.99999E+00
   -iband-- 426  -0.60914E-01      0.99999E+00
   -iband-- 427  -0.60615E-01      0.99999E+00
   -iband-- 428  -0.60524E-01      0.99999E+00
   -iband-- 429  -0.60480E-01      0.99999E+00
   -iband-- 430  -0.60480E-01      0.99999E+00
   -iband-- 431  -0.60264E-01      0.99999E+00
   -iband-- 432  -0.59724E-01      0.99999E+00
   -iband-- 433  -0.59724E-01      0.99999E+00
   -iband-- 434  -0.59674E-01      0.99999E+00
   -iband-- 435  -0.59355E-01      0.99999E+00
   -iband-- 436  -0.58123E-01      0.99999E+00
   -iband-- 437  -0.58123E-01      0.99999E+00
   -iband-- 438  -0.57340E-01      0.99999E+00
   -iband-- 439  -0.56894E-01      0.99999E+00
   -iband-- 440  -0.56894E-01      0.99999E+00
   -iband-- 441  -0.56890E-01      0.99999E+00
   -iband-- 442  -0.56602E-01      0.99999E+00
   -iband-- 443  -0.56602E-01      0.99999E+00
   -iband-- 444  -0.56046E-01      0.99999E+00
   -iband-- 445  -0.55870E-01      0.99999E+00
   -iband-- 446  -0.55283E-01      0.99999E+00
   -iband-- 447  -0.55178E-01      0.99999E+00
   -iband-- 448  -0.55178E-01      0.99999E+00
   -iband-- 449  -0.55142E-01      0.99999E+00
   -iband-- 450  -0.54637E-01      0.99999E+00
   -iband-- 451  -0.54637E-01      0.99999E+00
   -iband-- 452  -0.54410E-01      0.99999E+00
   -iband-- 453  -0.54206E-01      0.99999E+00
   -iband-- 454  -0.53719E-01      0.99999E+00
   -iband-- 455  -0.53657E-01      0.99999E+00
   -iband-- 456  -0.53497E-01      0.99999E+00
   -iband-- 457  -0.53497E-01      0.99999E+00
   -iband-- 458  -0.53322E-01      0.99999E+00
   -iband-- 459  -0.53322E-01      0.99999E+00
   -iband-- 460  -0.53093E-01      0.99999E+00
   -iband-- 461  -0.52719E-01      0.99999E+00
   -iband-- 462  -0.52705E-01      0.99999E+00
   -iband-- 463  -0.52705E-01      0.99999E+00
   -iband-- 464  -0.51862E-01      0.99999E+00
   -iband-- 465  -0.51103E-01      0.99999E+00
   -iband-- 466  -0.50987E-01      0.99999E+00
   -iband-- 467  -0.50987E-01      0.99999E+00
   -iband-- 468  -0.50708E-01      0.99999E+00
   -iband-- 469  -0.50339E-01      0.99999E+00
   -iband-- 470  -0.49560E-01      0.99999E+00
   -iband-- 471  -0.49560E-01      0.99999E+00
   -iband-- 472  -0.49034E-01      0.99999E+00
   -iband-- 473  -0.48156E-01      0.99999E+00
   -iband-- 474  -0.46746E-01      0.99999E+00
   -iband-- 475  -0.45864E-01      0.99999E+00
   -iband-- 476  -0.45864E-01      0.99999E+00
   -iband-- 477  -0.45503E-01      0.99999E+00
   -iband-- 478  -0.45188E-01      0.99999E+00
   -iband-- 479  -0.44706E-01      0.99999E+00
   -iband-- 480  -0.44468E-01      0.99999E+00
   -iband-- 481  -0.44298E-01      0.99999E+00
   -iband-- 482  -0.44298E-01      0.99999E+00
   -iband-- 483  -0.43958E-01      0.99999E+00
   -iband-- 484  -0.43651E-01      0.99999E+00
   -iband-- 485  -0.43651E-01      0.99999E+00
   -iband-- 486  -0.43546E-01      0.99999E+00
   -iband-- 487  -0.43222E-01      0.99999E+00
   -iband-- 488  -0.43222E-01      0.99999E+00
   -iband-- 489  -0.43127E-01      0.99999E+00
   -iband-- 490  -0.42996E-01      0.99999E+00
   -iband-- 491  -0.42961E-01      0.99999E+00
   -iband-- 492  -0.42456E-01      0.99999E+00
   -iband-- 493  -0.42456E-01      0.99999E+00
   -iband-- 494  -0.42212E-01      0.99999E+00
   -iband-- 495  -0.42018E-01      0.99999E+00
   -iband-- 496  -0.41819E-01      0.99999E+00
   -iband-- 497  -0.41797E-01      0.99999E+00
   -iband-- 498  -0.41797E-01      0.99999E+00
   -iband-- 499  -0.41499E-01      0.99999E+00
   -iband-- 500  -0.41472E-01      0.99999E+00
   -iband-- 501  -0.41472E-01      0.99999E+00
   -iband-- 502  -0.41179E-01      0.99999E+00
   -iband-- 503  -0.40643E-01      0.99999E+00
   -iband-- 504  -0.40429E-01      0.99999E+00
   -iband-- 505  -0.39701E-01      0.99999E+00
   -iband-- 506  -0.39701E-01      0.99999E+00
   -iband-- 507  -0.30549E-01      0.99999E+00
   -iband-- 508  -0.30341E-01      0.99999E+00
   -iband-- 509  -0.28644E-01      0.99999E+00
   -iband-- 510  -0.27430E-01      0.99999E+00
   -iband-- 511  -0.27430E-01      0.99999E+00
   -iband-- 512  -0.24573E-01      0.99999E+00
   -iband-- 513  -0.23536E-01      0.99999E+00
   -iband-- 514   0.15690E-02      0.10000E+01
   -iband-- 515   0.58989E-02      0.10000E+01
   -iband-- 516   0.66156E-02      0.10000E+01
   -iband-- 517   0.68700E-02      0.10000E+01
   -iband-- 518   0.68700E-02      0.10000E+01
   -iband-- 519   0.20438E-01      0.10000E+01
   -iband-- 520   0.27496E-01      0.70745E+00
   -iband-- 521   0.27615E-01      0.63641E+00
   -iband-- 522   0.27864E-01      0.47092E+00
   -iband-- 523   0.27864E-01      0.47091E+00
   -iband-- 524   0.28601E-01      0.10701E+00
   -iband-- 525   0.28601E-01      0.10700E+00
   -iband-- 526   0.31199E-01      0.10232E-03
   -iband-- 527   0.31245E-01      0.90326E-04
   -iband-- 528   0.31245E-01      0.90321E-04
   -iband-- 529   0.31794E-01      0.20700E-04
   -iband-- 530   0.34300E-01      0.91526E-06
   -iband-- 531   0.44479E-01      0.22965E-05
   -iband-- 532   0.49808E-01      0.30310E-05
   -iband-- 533   0.50345E-01      0.31051E-05
   -iband-- 534   0.50345E-01      0.31051E-05
   -iband-- 535   0.52670E-01      0.34256E-05
   -iband-- 536   0.58027E-01      0.41641E-05
   -iband-- 537   0.59315E-01      0.43417E-05
   -iband-- 538   0.59315E-01      0.43417E-05
   -iband-- 539   0.61320E-01      0.46181E-05
   -iband-- 540   0.61671E-01      0.46665E-05
   -iband-- 541   0.61671E-01      0.46665E-05
   -iband-- 542   0.62182E-01      0.47369E-05
   -iband-- 543   0.66931E-01      0.53916E-05
   -iband-- 544   0.10647E+00      0.10842E-04
   -iband-- 545   0.11605E+00      0.12163E-04
   -iband-- 546   0.11605E+00      0.12163E-04
   -iband-- 547   0.12032E+00      0.12752E-04
   -iband-- 548   0.12032E+00      0.12752E-04
   -iband-- 549   0.12184E+00      0.12962E-04
   -iband-- 550   0.12662E+00      0.13620E-04
   -iband-- 551   0.12662E+00      0.13620E-04
   -iband-- 552   0.12912E+00      0.13965E-04
   -iband-- 553   0.13042E+00      0.14144E-04
   -iband-- 554   0.15362E+00      0.17343E-04
   -iband-- 555   0.15517E+00      0.17556E-04
   -iband-- 556   0.15517E+00      0.17556E-04
   -iband-- 557   0.16252E+00      0.18569E-04
   -iband-- 558   0.16574E+00      0.19013E-04
   -iband-- 559   0.16606E+00      0.19058E-04
   -iband-- 560   0.16606E+00      0.19058E-04
   -iband-- 561   0.16833E+00      0.19371E-04
   -iband-- 562   0.16867E+00      0.19418E-04
   -iband-- 563   0.16875E+00      0.19428E-04
   -iband-- 564   0.16875E+00      0.19428E-04
   -iband-- 565   0.16983E+00      0.19576E-04
   -iband-- 566   0.17108E+00      0.19750E-04
   -iband-- 567   0.17695E+00      0.20558E-04
   -iband-- 568   0.17695E+00      0.20558E-04
   -iband-- 569   0.18015E+00      0.21000E-04
   -iband-- 570   0.18215E+00      0.21275E-04
   -iband-- 571   0.19852E+00      0.23532E-04
   -iband-- 572   0.20085E+00      0.23853E-04
   -iband-- 573   0.20085E+00      0.23853E-04
   -iband-- 574   0.20142E+00      0.23932E-04
   -iband-- 575   0.20180E+00      0.23984E-04
   -iband-- 576   0.21215E+00      0.25412E-04
   -iband-- 577   0.21623E+00      0.25974E-04
   -iband-- 578   0.21623E+00      0.25974E-04
   -iband-- 579   0.21729E+00      0.26119E-04
   -iband-- 580   0.22871E+00      0.27694E-04

  == Check lda occ. mat. from green with respect to the direct calc ==

   ** Differences between Occup from LDA green function and 
      LDA occupations are small enough:
      0.4954E-06 is lower than  0.1000E-03

  ***** => Calculation of Green function is thus correct without self ****

  ====================================== 
  == Renormalization for all K-points == 
  =======================================

  - Overlap (before orthonormalization) -

   ** Differences between Overlap after renormalization and 
      Identity are small enough:
      0.1828E-15 is lower than  0.1000E-05

 ===============================================================
 =====  LDA Green Function Calculation with renormalized psichi
 ==============================================================

   ===  Integrate green function

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(w) is:    7.868295

  = Occupation matrix from KS occupations

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.75950   0.00001   0.00000  -0.00001   0.00000
        0.00001   0.76951   0.00000   0.00100  -0.00000
        0.00000   0.00000   0.80804  -0.00000   0.00000
       -0.00001   0.00100  -0.00000   0.76951  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.82759

  ==  Total number of electrons from KS green function is : 1042.813569
         (should be 1043.000000)

   ** Differences between Local_projection_of_kohnsham_occupations and 
      Integration_of_local_green_function are small enough:
      0.1132E-15 is lower than  0.1000E-03

  ***** => Calculations of Green function in KS and local spaces are coherent ****

  == The LDA_renormalized occupations (integral of the Green function) are  ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.75950   0.00001   0.00000  -0.00001   0.00000
        0.00001   0.76951   0.00000   0.00100  -0.00000
        0.00000   0.00000   0.80804  -0.00000   0.00000
       -0.00001   0.00100  -0.00000   0.76951  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.82759

   = In the KS basis
     (not written)

  == Compute LDA+DMFT energy terms

  == Compute Band Energy terms for DMFT
     Warning !:Differences between band energy from LDA occupations
               and LDA green function is:   -0.548486
               which is larger than          0.00001
   Action: increase number of frequencies, or reduce the number of high energies_dmft bands
  nocctot(1)   3.9341476507109059        0.0000000000000000     

======= LDA+U Energy terms (in Hartree) ====

 For Atom   55
   Contributions to the direct expression of energy:
     Double counting  correction   =    0.3590207640E+01
     Interaction energy            =    0.3685357049E+01
     Total LDA+U Contribution      =    0.9514940897E-01

   For the "Double-counting" decomposition:
     LDA+U Contribution            =    0.3530401348E+00
     edcdctemp                     =   -0.4038397183E+01
     eldaumdcdc for current atom   =    0.3530401348E+00

   pawuenergy: -VUKS pred          =    0.2578907258E+00


Warning, energy is recently computed, not checked

     -----------------------------------------------
     --- Energy in DMFT (in Ha)  
     --- E_bandlda (1)  (Ha.) =   ***************
     --- E_banddmft(2)  (Ha.) =   ***************
     --- E_hu      (3)  (Ha.) =     0.00000000000
     --- E_hu_mig  (4)  (Ha.) =     0.00000000000
     --- E_hu_qmc  (4)  (Ha.) =     0.00000000000
     --- E_hu_ldau (5)  (Ha.) =     3.68535704863
     --- E_dc      (6)  (Ha.) =     3.59020763965
     --- edmft=(    3-6)(Ha.) =    -3.59020763965
     -----------------------------------------------

 ===============================================================
 ===== Define Interaction and self-energy
 ==============================================================

  == Compute Interactions for DMFT

  -------> For Correlated Species   2

     -------- Interactions in the density matrix representation
       1      2      3      4      5      6      7      8      9     10
  1  0.000  0.108  0.097  0.108  0.142  0.185  0.134  0.126  0.134  0.157
  2  0.108  0.000  0.131  0.108  0.108  0.134  0.185  0.149  0.134  0.134
  3  0.097  0.131  0.000  0.131  0.097  0.126  0.149  0.185  0.149  0.126
  4  0.108  0.108  0.131  0.000  0.108  0.134  0.134  0.149  0.185  0.134
  5  0.142  0.108  0.097  0.108  0.000  0.157  0.134  0.126  0.134  0.185
  6  0.185  0.134  0.126  0.134  0.157  0.000  0.108  0.097  0.108  0.142
  7  0.134  0.185  0.149  0.134  0.134  0.108  0.000  0.131  0.108  0.108
  8  0.126  0.149  0.185  0.149  0.126  0.097  0.131  0.000  0.131  0.097
  9  0.134  0.134  0.149  0.185  0.134  0.108  0.108  0.131  0.000  0.108
 10  0.157  0.134  0.126  0.134  0.185  0.142  0.108  0.097  0.108  0.000
     --------------------------------------------------------
    -> Put Self-Energy Equal to double counting term
 self after dc (  2.3496860100627266E-310,  2.3496860100627266E-310)
 optrw,use_fixed_self,istep,iter,istep_imp,iter_imp
           0           0           0           0           0           0

  == The self-energy for smallest frequency is   ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.96954   0.00000   0.00000   0.00000   0.00000
        0.00000   0.96954   0.00000   0.00000   0.00000
        0.00000   0.00000   0.96954   0.00000   0.00000
        0.00000   0.00000   0.00000   0.96954   0.00000
        0.00000   0.00000   0.00000   0.00000   0.96954

  == The self-energy for large frequency is   ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.96954   0.00000   0.00000   0.00000   0.00000
        0.00000   0.96954   0.00000   0.00000   0.00000
        0.00000   0.00000   0.96954   0.00000   0.00000
        0.00000   0.00000   0.00000   0.96954   0.00000
        0.00000   0.00000   0.00000   0.00000   0.96954

  == The double counting hamiltonian is (diagonal part)  ==

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.96954   0.96954   0.96954   0.96954   0.96954

 =================================================================
 =====  Green Function Calculation with input self-energy ========
 =================================================================

   ===  Integrate green function

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(w) is:    7.868295

  = Occupation matrix from KS occupations

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.75950   0.00001   0.00000  -0.00001   0.00000
        0.00001   0.76951   0.00000   0.00100  -0.00000
        0.00000   0.00000   0.80804  -0.00000   0.00000
       -0.00001   0.00100  -0.00000   0.76951  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.82759

  ==  Total number of electrons from KS green function is : 1042.813569
         (should be 1043.000000)

   ** Differences between Local_projection_of_kohnsham_occupations and 
      Integration_of_local_green_function are small enough:
      0.1132E-15 is lower than  0.1000E-03

  ***** => Calculations of Green function in KS and local spaces are coherent ****

  == The Green_inputself occupations (integral of the Green function) are  ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.75950   0.00001   0.00000  -0.00001   0.00000
        0.00001   0.76951   0.00000   0.00100  -0.00000
        0.00000   0.00000   0.80804  -0.00000   0.00000
       -0.00001   0.00100  -0.00000   0.76951  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.82759

   = In the KS basis
     (not written)

          == Compute Fermi level

  |---Newton method to search Fermi level ------------|

  |--- Initial value for Fermi level     0.027821

     Precision required : 0.100000E-05
     Fermi level   Charge    Difference
  --    0.027821 1042.813569   -0.186431
  --    0.047821 1061.823248   18.823248
  -     0.027821 1042.813569   -0.186431
  -     0.027821 1042.814183   -0.185817
  -     0.027851 1043.000766    0.000766
  -     0.027861 1043.062241    0.062241
  -     0.027861 1043.061475    0.061475
  -     0.027862 1043.063957    0.063957
  -     0.027852 1043.002482    0.002482
  -     0.027852 1043.002499    0.002499
  -     0.027851 1043.000017    0.000017
  -     0.027851 1042.999403   -0.000597
  -     0.027851 1042.999385   -0.000615
  -     0.027851 1042.999354   -0.000646
  -     0.027851 1042.999969   -0.000031
  -     0.027851 1042.999969   -0.000031
  -     0.027851 1043.000000   -0.000000

     Precision achieved on Fermi Level : 0.503713E-08
     Precision achieved on number of electrons : 0.100000E-05

  |---  Final  value for Fermi level     0.027851

  |---------------------------------------------------|

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(w) is:    7.869095

   ** Differences between Local_projection_of_kohnsham_occupations and 
      Integration_of_local_green_function are small enough:
      0.1943E-15 is lower than  0.1000E-03

  ***** => Calculations of Green function in KS and local spaces are coherent ****

 ======================================================
 =====  DMFT Loop starts here                  ========
 ======================================================

 =====  DMFT Loop : ITER number  1             ========

  ===  Use Dyson Equation => weiss

   ===  Initialize Green function G(tau)

  ===  Solve impurity model

  ===  CT-QMC solver ===
  Slm basis is used

   == Print Energy levels for Fermi Level=      0.02785

   -------> For Correlated Atom  55

          -- polarization spin component  1
       -0.99438   0.00000  -0.00000  -0.00000   0.00000
        0.00000  -0.99996   0.00000  -0.00030   0.00000
       -0.00000   0.00000  -0.99112  -0.00000   0.00000
       -0.00000  -0.00030  -0.00000  -0.99996   0.00000
        0.00000   0.00000   0.00000   0.00000  -1.00025

   == CT-QMC Energy levels rotated

   == Coeff analytical C_ij such that F -> C_ij/iw_n for large frequency

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.00228   0.00000  -0.00000  -0.00000   0.00000
        0.00000   0.00315   0.00000  -0.00007   0.00000
       -0.00000   0.00000   0.00278  -0.00000   0.00000
       -0.00000  -0.00007  -0.00000   0.00315   0.00000
        0.00000   0.00000   0.00000   0.00000   0.00361

   == Preparing data for CTQMC

   == Print product of  weiss times invers for freq   1463

   -------> For Correlated Atom  55

          -- polarization spin component  1
        1.00000  -0.00000  -0.00000   0.00000   0.00000
        0.00000   1.00000  -0.00000  -0.00000  -0.00000
       -0.00000  -0.00000   1.00000   0.00000   0.00000
        0.00000  -0.00000   0.00000   1.00000  -0.00000
       -0.00000   0.00000   0.00000  -0.00000   1.00000

   == Initializing CTQMC

   == Initialization CTQMC done

Starting QMC (Thermalization)
 |----------------------------------------------------------------------------------------------------|
 |----------------------------------------------------------------------------------------------------|
Thermalization done in         7    seconds
The QMC should run in      16233    seconds on    40 CPUs
 |----------------------------------------------------------------------------------------------------|
 |----------------------------------------------------------------------------------------------------|
  10000000000. sweeps in   16688.81 seconds on    40 CPUs
Segments added        [%] :   8.25
Segments removed      [%] :   8.25
Segments sign         [%] :   0.00
Anti-segments added   [%] :  16.81
Anti-segments removed [%] :  16.81
Anti-segments sign    [%] :   0.00
Global Move           [%] :   2.85
Global Move Reduced   [%] :   3.20
<Epot>                [U] :   3.54257229080104E+00 +/-  7.18608096845303E-06
Noise                [/U] :   1.5273 x^-0.4713
Niquist puls.     [/beta] :   0.69E+00
Max Acc. Epot Error   [U] :   0.35742059342234E-12

--- !WARNING
message: |
    WARNING in QMC : Ctqmc_printQMC : bad statistic according to Noise. Increase sweeps
src_file: m_global.F90
src_line: 227
...


   == Destroy CTQMC

   == Destroy CTQMC done

   == nsppol==1 and nspden==1: Green functions from CTQMC have been symetrized over spin

   == Rotate Green function to original basis

   == Occupation from G(tau) in the original basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.72386   0.00000   0.00000   0.00000   0.00000
        0.00000   0.78572   0.00000   0.00000   0.00000
        0.00000   0.00000   0.76687   0.00000   0.00000
        0.00000   0.00000   0.00000   0.78572   0.00000
        0.00000   0.00000   0.00000   0.00000   0.84437

   == Symetrized occupations

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.72386   0.00000   0.00000   0.00000   0.00000
        0.00000   0.78572   0.00000   0.00000   0.00000
        0.00000   0.00000   0.76687   0.00000   0.00000
        0.00000   0.00000   0.00000   0.78572   0.00000
        0.00000   0.00000   0.00000   0.00000   0.84437

   ** Differences between CTQMC Occup and 
      CTQMC Occup symetrized are small enough:
      0.2312E-06 is lower than  0.1000E-03

   == Symetrise green function after QMC

  == The occupations (value of G(tau) for tau=0-) are  ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.72386   0.00000   0.00000   0.00000   0.00000
        0.00000   0.78572   0.00000   0.00000   0.00000
        0.00000   0.00000   0.76687   0.00000   0.00000
        0.00000   0.00000   0.00000   0.78572   0.00000
        0.00000   0.00000   0.00000   0.00000   0.84437

   = In the KS basis
     (not written)

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(tau) is:    7.813087

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(w) is:    7.813087

   ===  Integrate local part of green function

   ===  Integrate green function

  == The occupations (integral of the Green function) are  ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.72385   0.00000   0.00000   0.00000   0.00000
        0.00000   0.78571   0.00000   0.00000   0.00000
        0.00000   0.00000   0.76687   0.00000   0.00000
        0.00000   0.00000   0.00000   0.78571   0.00000
        0.00000   0.00000   0.00000   0.00000   0.84436

   = In the KS basis
     (not written)

  ===  Use Dyson Equation => self
 optrw,use_fixed_self,istep,iter,istep_imp,iter_imp
           3           0           0           0           0           0

  == Compute LDA+DMFT energy terms

  == Compute Band Energy terms for DMFT
  nocctot(1)   3.9065436036416132        3.9065436036416132     

======= LDA+U Energy terms (in Hartree) ====

 For Atom   55
   Contributions to the direct expression of energy:
     Double counting  correction   =    0.3536880157E+01
     Interaction energy            =    0.3633275296E+01
     Total LDA+U Contribution      =    0.9639513973E-01

   For the "Double-counting" decomposition:
     LDA+U Contribution            =    0.3486496707E+00
     edcdctemp                     =   -0.3981924967E+01
     eldaumdcdc for current atom   =    0.3486496707E+00

   pawuenergy: -VUKS pred          =    0.2522545310E+00


Warning, energy is recently computed, not checked

     -----------------------------------------------
     --- Energy in DMFT (in Ha)  
     --- E_bandlda (1)  (Ha.) =   ***************
     --- E_banddmft(2)  (Ha.) =   ***************
     --- E_hu      (3)  (Ha.) =     3.54257229080
     --- E_hu_mig  (4)  (Ha.) =     3.53957483326
     --- E_hu_qmc  (4)  (Ha.) =     3.54257229080
     --- E_hu_ldau (5)  (Ha.) =     3.63327529645
     --- E_dc      (6)  (Ha.) =     3.53688015673
     --- edmft=(    3-6)(Ha.) =     0.00569213407
     -----------------------------------------------
        DMFT Loop: Precision on self-energy is 0.72025E-02

        DMFT Loop: Self Energy is not converged

  == After mixing,

  == The self-energy for smallest frequency is   ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.97111   0.00003  -0.00000  -0.00003  -0.00000
        0.00003   0.96294  -0.00000   0.00003  -0.00001
       -0.00000  -0.00000   0.97107   0.00000  -0.00000
       -0.00003   0.00003   0.00000   0.96294  -0.00001
        0.00000  -0.00001   0.00000  -0.00001   0.96342

  == The self-energy for large frequency is   ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.93744  -0.00000   0.00000   0.00000  -0.00000
       -0.00000   0.92948  -0.00000   0.00030  -0.00000
        0.00000  -0.00000   0.93135   0.00000   0.00000
        0.00000   0.00030   0.00000   0.92948  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.92368

  == The double counting hamiltonian is (diagonal part)  ==

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.96233   0.96233   0.96233   0.96233   0.96233

  ===  Compute green function

  == Green function is computed:

  == Local Green function has been computed and projected on local orbitals

   ===  Integrate green function

  = green%occup%matlu from int(gloc(w))

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.67828   1.54565    -0.00000   0.00000     0.00000   0.00000     0.00000  -0.00000     0.00000   0.00000
       -0.00000   0.00000     0.74382   1.54634    -0.00000   0.00000     0.00000  -0.00000     0.00000  -0.00000
        0.00000   0.00000    -0.00000   0.00000     0.71270   1.49752     0.00000  -0.00000     0.00000   0.00000
        0.00000  -0.00000     0.00000  -0.00000     0.00000  -0.00000     0.74382   1.54634     0.00000  -0.00000
        0.00000   0.00000     0.00000  -0.00000     0.00000   0.00000     0.00000  -0.00000     0.82029   1.61250

  = green%occup%matlu from int(gloc(w)) with symetrization

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.67828   1.54565    -0.00000   0.00000     0.00000   0.00000     0.00000  -0.00000     0.00000   0.00000
       -0.00000   0.00000     0.74382   1.54634    -0.00000   0.00000     0.00000  -0.00000     0.00000  -0.00000
        0.00000   0.00000    -0.00000   0.00000     0.71270   1.49752     0.00000  -0.00000     0.00000   0.00000
        0.00000  -0.00000     0.00000  -0.00000     0.00000  -0.00000     0.74382   1.54634     0.00000  -0.00000
        0.00000   0.00000     0.00000  -0.00000     0.00000   0.00000     0.00000  -0.00000     0.82029   1.61250

  = green%occup%matlu from int(gloc(w)) symetrized with post-treatment

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.67828   0.00000    -0.00000  -0.00000     0.00000   0.00000     0.00000   0.00000     0.00000   0.00000
       -0.00000   0.00000     0.74382   0.00000    -0.00000   0.00000     0.00000   0.00000     0.00000   0.00000
        0.00000  -0.00000    -0.00000  -0.00000     0.71270   0.00000     0.00000   0.00000     0.00000   0.00000
        0.00000  -0.00000     0.00000   0.00000     0.00000  -0.00000     0.74382   0.00000     0.00000   0.00000
        0.00000   0.00000     0.00000  -0.00000     0.00000   0.00000     0.00000  -0.00000     0.82029   0.00000

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(w) is:    7.397807

  = green%occup%matlu from projection of int(gks(w)) without symetrization

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.67828  -0.00000     0.00000  -0.00000     0.00000  -0.00000     0.00000  -0.00000    -0.00000  -0.00000
        0.00000   0.00000     0.74387  -0.00000     0.00000  -0.00000     0.00000  -0.00000    -0.00000  -0.00000
        0.00000   0.00000     0.00000   0.00000     0.71270  -0.00000     0.00000   0.00000    -0.00000  -0.00000
        0.00000   0.00000     0.00000   0.00000     0.00000  -0.00000     0.74377  -0.00000     0.00000   0.00000
       -0.00000   0.00000    -0.00000   0.00000    -0.00000   0.00000     0.00000  -0.00000     0.82029   0.00000

  = Occupation matrix from KS occupations

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.67828  -0.00000   0.00000   0.00000   0.00000
       -0.00000   0.74382  -0.00000   0.00000   0.00000
        0.00000  -0.00000   0.71270   0.00000   0.00000
        0.00000   0.00000   0.00000   0.74382   0.00000
        0.00000   0.00000   0.00000   0.00000   0.82029

  ==  Total number of electrons from KS green function is : 1043.133178
         (should be 1043.000000)

   ** Differences between Local_projection_of_kohnsham_occupations and 
      Integration_of_local_green_function are small enough:
      0.4896E-15 is lower than  0.1000E-03

  ***** => Calculations of Green function in KS and local spaces are coherent ****

  == The DMFT occupations (integral of the Green function) are  ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.67828  -0.00000   0.00000   0.00000   0.00000
       -0.00000   0.74382  -0.00000   0.00000   0.00000
        0.00000  -0.00000   0.71270   0.00000   0.00000
        0.00000   0.00000   0.00000   0.74382   0.00000
        0.00000   0.00000   0.00000   0.00000   0.82029

   = In the KS basis
     (not written)

          == Compute Fermi level

  |---Newton method to search Fermi level ------------|

  |--- Initial value for Fermi level     0.027851

     Precision required : 0.100000E-05
     Fermi level   Charge    Difference
  --    0.027851 1043.133178    0.133178
  --    0.007851 1031.882358  -11.117642
  -     0.027851 1043.133178    0.133178
  -     0.027851 1043.133795    0.133795
  -     0.027830 1043.000660    0.000660
  -     0.027840 1043.062277    0.062277
  -     0.027840 1043.061617    0.061617
  -     0.027840 1043.060902    0.060902
  -     0.027830 1042.999299   -0.000701
  -     0.027830 1042.999285   -0.000715
  -     0.027830 1042.999986   -0.000014
  -     0.027830 1042.999370   -0.000630
  -     0.027830 1042.999384   -0.000616
  -     0.027830 1042.999385   -0.000615
  -     0.027830 1043.000001    0.000001

     Precision achieved on Fermi Level : 0.100001E-06
     Precision achieved on number of electrons : 0.100000E-05

  |---  Final  value for Fermi level     0.027830

  |---------------------------------------------------|

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(w) is:    7.397777

   ** Differences between Local_projection_of_kohnsham_occupations and 
      Integration_of_local_green_function are small enough:
      0.6038E-15 is lower than  0.1000E-03

  ***** => Calculations of Green function in KS and local spaces are coherent ****

  == Write self function and Fermi Level on file co_QMCSelf-omega_iatom0055_isppol1
 optrw,use_fixed_self,istep,iter,istep_imp,iter_imp
           2           0           0           0           0           0

  == Write self function and Fermi Level on file co_QMCSelf-omega_iatom0055_isppol1
 optrw,use_fixed_self,istep,iter,istep_imp,iter_imp
           2           0           0           0           0           0

 =====  DMFT Loop :  END                       ========
  nocctot(1)   3.6988886107326424        3.9065436036416132     

======= LDA+U Energy terms (in Hartree) ====

 For Atom   55
   Contributions to the direct expression of energy:
     Double counting  correction   =    0.2141851542E+02
     Interaction energy            =    0.3256928517E+01
     Total LDA+U Contribution      =   -0.1816158690E+02

   For the "Double-counting" decomposition:
     LDA+U Contribution            =    0.2102822558E+02
     edcdctemp                     =   -0.2428515409E+02
     eldaumdcdc for current atom   =    0.2102822558E+02

   pawuenergy: -VUKS pred          =    0.3918981248E+02


  ===  Compute green function

  == Green function is computed:

  == Local Green function has been computed and projected on local orbitals

   ===  Integrate green function

   -------> For Correlated Atom  55
        Nb of Corr. elec. from G(w) is:    7.397777

  = Occupation matrix from KS occupations

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.67833   0.00000  -0.00000  -0.00000   0.00000
        0.00000   0.74373  -0.00000   0.00000  -0.00000
       -0.00000  -0.00000   0.71280   0.00000   0.00000
       -0.00000   0.00000   0.00000   0.74373  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.82029

  ==  Total number of electrons from KS green function is : 1043.000001
         (should be 1043.000000)

   ** Differences between Local_projection_of_kohnsham_occupations and 
      Integration_of_local_green_function are small enough:
      0.6038E-15 is lower than  0.1000E-03

  ***** => Calculations of Green function in KS and local spaces are coherent ****

  == Compute LDA+DMFT energy terms : Band energy terms

  == Compute Band Energy terms for DMFT

     -----------------------------------------------
     --- Energy in DMFT (in Ha)  
     --- E_bandlda (1)  (Ha.) =   ***************
     --- E_banddmft(2)  (Ha.) =   ***************
     --- E_hu      (3)  (Ha.) =     3.54257229080
     --- E_hu_mig  (4)  (Ha.) =     3.53957483326
     --- E_hu_qmc  (4)  (Ha.) =     3.54257229080
     --- E_hu_ldau (5)  (Ha.) =     3.63327529645
     --- E_dc      (6)  (Ha.) =     3.53688015673
     --- edmft=(    3-6)(Ha.) =     0.00569213407
     -----------------------------------------------

  == The converged DMFT occupations (integral of the Green function) are  ==

   = In the atomic basis

   -------> For Correlated Atom  55

          -- polarization spin component  1
        0.67833   0.00000  -0.00000  -0.00000   0.00000
        0.00000   0.74373  -0.00000   0.00000  -0.00000
       -0.00000  -0.00000   0.71280   0.00000   0.00000
       -0.00000   0.00000   0.00000   0.74373  -0.00000
        0.00000  -0.00000   0.00000  -0.00000   0.82029

   = In the KS basis

   --isppol--   1

   - ( in the following only the value for the first k-points are printed)

  Writes occupations for k-pt    1and between bands    1 and  580

--- !WARNING
message: |
    Occupations are imaginary !
      Maximal value is   0.2522E-01

src_file: m_oper.F90
src_line: 542
...


 =====  DMFT  :  END                       ========

  == Print DMFT non diagonal occupations on disk
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    1.1714E+00  at reduced coord.    0.5000    0.1667    0.0000
,     Minimum=    1.1034E-07  at reduced coord.    0.0000    0.3333    0.3852
,  Integrated=    5.0918E+02

 *********** RHOIJ (atom   1) **********
   2.00594   0.03396   0.00000  -0.00003  -0.00000  -0.00000  -0.00177   0.00000  -0.00000   0.00000  -0.00030   0.00001 ...
   0.03396   0.59186   0.00000  -0.00405   0.00010   0.00000   0.06698  -0.00211   0.00001   0.00001   0.02356  -0.00314 ...
   0.00000   0.00000   2.00787  -0.00000  -0.00000   0.09435  -0.00000   0.00000   0.00012  -0.00053  -0.00000   0.00000 ...
  -0.00003  -0.00405  -0.00000   2.00787   0.00001  -0.00000   0.09759  -0.00027  -0.00000   0.00000  -0.00116  -0.00012 ...
  -0.00000   0.00010  -0.00000   0.00001   2.00788   0.00000  -0.00026   0.09432   0.00000   0.00000   0.00012  -0.00055 ...
  -0.00000   0.00000   0.09435  -0.00000   0.00000   0.20092   0.00001  -0.00007  -0.00247  -0.01339   0.00003  -0.00001 ...
  -0.00177   0.06698  -0.00000   0.09759  -0.00026   0.00001   0.13822   0.00634  -0.00000  -0.00001  -0.00015   0.00430 ...
   0.00000  -0.00211   0.00000  -0.00027   0.09432  -0.00007   0.00634   0.20311  -0.00001  -0.00000  -0.00379  -0.01294 ...
  -0.00000   0.00001   0.00012  -0.00000   0.00000  -0.00247  -0.00000  -0.00001   1.78559   0.00126  -0.00002   0.00000 ...
   0.00000   0.00001  -0.00053   0.00000   0.00000  -0.01339  -0.00001  -0.00000   0.00126   1.82210  -0.00003   0.00002 ...
  -0.00030   0.02356  -0.00000  -0.00116   0.00012   0.00003  -0.00015  -0.00379  -0.00002  -0.00003   1.84969   0.00049 ...
   0.00001  -0.00314   0.00000  -0.00012  -0.00055  -0.00001   0.00430  -0.01294   0.00000   0.00002   0.00049   1.82095 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom  55) **********
   1.99972  -0.00187  -0.00000   0.00187   0.00000  -0.00000   0.01524   0.00000   0.00000  -0.00000   0.00035   0.00000 ...
  -0.00187   0.96507  -0.00000   0.01821   0.00000   0.00002  -0.24216  -0.00002  -0.00000   0.00007   0.01272  -0.00007 ...
  -0.00000  -0.00000   2.00123  -0.00000  -0.00000   0.03241   0.00000  -0.00000   0.00000  -0.00146  -0.00000  -0.00003 ...
   0.00187   0.01821  -0.00000   2.00140   0.00000   0.00000   0.03350  -0.00000   0.00000   0.00000  -0.00833  -0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   2.00123  -0.00000  -0.00000   0.03241  -0.00000  -0.00003   0.00000  -0.00146 ...
  -0.00000   0.00002   0.03241   0.00000  -0.00000   0.24098  -0.00001   0.00002  -0.00001  -0.10999   0.00008   0.00042 ...
   0.01524  -0.24216   0.00000   0.03350  -0.00000  -0.00001   0.20956   0.00001   0.00000  -0.00005   0.00204   0.00005 ...
   0.00000  -0.00002  -0.00000  -0.00000   0.03241   0.00002   0.00001   0.24098   0.00001   0.00042  -0.00008  -0.10999 ...
   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00001   0.00000   0.00001   0.98142   0.00002  -0.00000  -0.00002 ...
  -0.00000   0.00007  -0.00146   0.00000  -0.00003  -0.10999  -0.00005   0.00042   0.00002   0.99510   0.00025  -0.00302 ...
   0.00035   0.01272  -0.00000  -0.00833   0.00000   0.00008   0.00204  -0.00008  -0.00000   0.00025   1.03963  -0.00025 ...
   0.00000  -0.00007  -0.00003  -0.00000  -0.00146   0.00042   0.00005  -0.10999  -0.00002  -0.00302  -0.00025   0.99510 ...
   ...  only 12  components have been written...


========== LDA+U DATA ===================================================

====== For Atom   55, occupations for correlated orbitals. l =   2


== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.45281    0.00001   -0.00000   -0.00001    0.00000
     0.00001    0.47391    0.00009   -0.00136   -0.00000
    -0.00000    0.00009    0.47093   -0.00009    0.00000
    -0.00001   -0.00136   -0.00009    0.47391   -0.00000
     0.00000   -0.00000    0.00000   -0.00000    0.52540
 Total charge density [el/Bohr^3]
,     Maximum=    7.0967E+00  at reduced coord.    0.0000    0.3333    0.0000
,     Minimum=    1.1030E-07  at reduced coord.    0.0000    0.3333    0.3833
,  Integrated=    1.0430E+03

--------------------------------------------------------------------------------
 Components of total free energy (in Hartree) :

    Kinetic energy  =  1.18799908749889E+03
    Hartree energy  =  2.10146349802839E+04
    XC energy       = -9.82293326178261E+02
    Ewald energy    =  1.15701732903276E+04
    PspCore energy  =  9.07160259974788E+01
    Loc. psp. energy= -4.50898577347589E+04
    Spherical terms =  1.36552254014213E+03
    >>>>> Internal E= -1.08431051366871E+04

    -kT*entropy     = -2.44480242359667E-03
    >>>>>>>>> Etotal= -1.08431075814896E+04

 "Double-counting" decomposition of free energy:
    Band energy     = -1.33380416711092E+03
    Ewald energy    =  1.15701732903276E+04
    PspCore energy  =  9.07160259974788E+01
    Dble-C XC-energy= -2.07201644606396E+04
    Spherical terms = -4.49157833075057E+02
    >>>>> Internal E= -1.08422371445005E+04

    -kT*entropy     = -2.44480242359667E-03
    >>>> Etotal (DC)= -1.08422395893029E+04

  >Total energy in eV           = -2.95055962635189E+05
  >Total DC energy in eV        = -2.95032343366610E+05
--------------------------------------------------------------------------------
 ETOT  1  -10842.239589303    -1.084E+04 9.239E-14 1.229E+02
 scprqt: <Vxc>= -2.2219623E-01 hartree

Simple mixing update:
  residual square of the potential :   4.6022531611125533E-007

--- !WARNING
message: |
    Density went too small (lower than xc_denpos) at1496514 points
    and was set to xc_denpos=  1.00E-14. Lowest was  -0.85E-06.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
src_file: mkdenpos.F90
src_line: 176
...


========== LDA+U DATA ===================================================

====== For Atom   55, occupations for correlated orbitals. l =   2


== Calculated occupation matrix for correlated orbitals:

Calculated occupation matrix for component up
     0.46630    0.00001   -0.00000   -0.00001    0.00000
     0.00001    0.48088    0.00007   -0.00095   -0.00000
    -0.00000    0.00007    0.49001   -0.00007    0.00000
    -0.00001   -0.00095   -0.00007    0.48088   -0.00000
     0.00000   -0.00000    0.00000   -0.00000    0.52718
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -1.33263   0.23175   0.00000   0.00318  -0.00026  -0.00000  -0.00073   0.00006   0.00000  -0.00000   0.00135   0.00030 ...
   0.23175   0.07067  -0.00000  -0.00065   0.00005   0.00000   0.00013  -0.00001  -0.00000   0.00000  -0.00027  -0.00005 ...
   0.00000  -0.00000  -2.26466  -0.00000   0.00000   0.21526   0.00000  -0.00000  -0.00019   0.00266  -0.00000   0.00000 ...
   0.00318  -0.00065  -0.00000  -2.26246   0.00027   0.00000   0.21481  -0.00005   0.00000   0.00000   0.00295  -0.00022 ...
  -0.00026   0.00005   0.00000   0.00027  -2.26467  -0.00000  -0.00005   0.21526   0.00000   0.00000   0.00012   0.00264 ...
  -0.00000   0.00000   0.21526   0.00000  -0.00000   0.06226  -0.00000   0.00000   0.00004  -0.00048   0.00000  -0.00000 ...
  -0.00073   0.00013   0.00000   0.21481  -0.00005  -0.00000   0.06233   0.00001  -0.00000  -0.00000  -0.00053   0.00004 ...
   0.00006  -0.00001  -0.00000  -0.00005   0.21526   0.00000   0.00001   0.06226  -0.00000  -0.00000  -0.00002  -0.00047 ...
   0.00000  -0.00000  -0.00019   0.00000   0.00000   0.00004  -0.00000  -0.00000  -0.47479   0.00018  -0.00000  -0.00000 ...
  -0.00000   0.00000   0.00266   0.00000   0.00000  -0.00048  -0.00000  -0.00000   0.00018  -0.47312  -0.00000   0.00000 ...
   0.00135  -0.00027  -0.00000   0.00295   0.00012   0.00000  -0.00053  -0.00002  -0.00000  -0.00000  -0.47234   0.00010 ...
   0.00030  -0.00005   0.00000  -0.00022   0.00264  -0.00000   0.00004  -0.00047  -0.00000   0.00000   0.00010  -0.47313 ...
   ...  only 12  components have been written...

 ****** Psp strength Dij in Ha (atom     55) *****
  -0.86949   0.14829   0.00000   0.00435  -0.00000  -0.00000  -0.00089   0.00000  -0.00012   0.00000  -0.00169  -0.00000 ...
   0.14829   0.05146  -0.00000  -0.00101   0.00000   0.00000   0.00027  -0.00000   0.00002  -0.00000   0.00032   0.00000 ...
   0.00000  -0.00000  -1.85302   0.00000  -0.00011   0.21671  -0.00000   0.00002  -0.00000   0.00378  -0.00000  -0.00000 ...
   0.00435  -0.00101   0.00000  -1.85567  -0.00000  -0.00000   0.21723   0.00000  -0.00000   0.00000   0.00249  -0.00000 ...
  -0.00000   0.00000  -0.00011  -0.00000  -1.85302   0.00002   0.00000   0.21671   0.00000  -0.00000   0.00000   0.00378 ...
  -0.00000   0.00000   0.21671  -0.00000   0.00002   0.02224   0.00000  -0.00000   0.00000  -0.00075   0.00000   0.00000 ...
  -0.00089   0.00027  -0.00000   0.21723   0.00000   0.00000   0.02214  -0.00000   0.00000  -0.00000  -0.00058   0.00000 ...
   0.00000  -0.00000   0.00002   0.00000   0.21671  -0.00000  -0.00000   0.02224  -0.00000   0.00000  -0.00000  -0.00075 ...
  -0.00012   0.00002  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000  -0.46501  -0.00000   0.00007   0.00000 ...
   0.00000  -0.00000   0.00378   0.00000  -0.00000  -0.00075  -0.00000   0.00000  -0.00000  -0.46632   0.00000  -0.00008 ...
  -0.00169   0.00032  -0.00000   0.00249   0.00000   0.00000  -0.00058  -0.00000   0.00007   0.00000  -0.46635  -0.00000 ...
  -0.00000   0.00000  -0.00000  -0.00000   0.00378   0.00000   0.00000  -0.00075   0.00000  -0.00008  -0.00000  -0.46632 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  5, note that nnsclo,dbl_nnsclo,istep=  5 0  2
mpirun: Forwarding signal 18 to job
slurmstepd: *** JOB 6357 CANCELLED AT 2015-11-09T09:31:34 *** on node371
