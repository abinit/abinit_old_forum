  ABINIT 
  
  Give name for formatted input file: 
toptic_1.in
  Give name for formatted output file:
toptic_1.out
  Give root name for generic input files:
toptic_1i
  Give root name for generic output files:
toptic_1o
  Give root name for generic temporary files:
toptic_1

.Version 7.10.5 of ABINIT 
.(sequential version, prepared for a i686_cygwin_gnu4.9 computer) 

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

.Starting date : Fri 15 Jan 2016.
- ( at 11h13 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.10.5
  Build target  : i686_cygwin_gnu4.9
  Build date    : 20151202

 === Compiler Suite === 
  C compiler       : gnu4.9
  C++ compiler     : gnu4.9
  Fortran compiler : gnu4.9
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : _

 === Multicore === 
  Parallel build : no
  Parallel I/O   : no
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
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV             HAVE_FC_IOMSG
 
     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
            HAVE_FC_SYSTEM          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT
 
               HAVE_LINALG        HAVE_LINALG_SERIAL           HAVE_OS_WINDOWS
 
                HAVE_TIMER         HAVE_TIMER_ABINIT         HAVE_TIMER_SERIAL
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> toptic_1.in
- output file    -> toptic_1.out
- root for input  files -> toptic_1i
- root for output files -> toptic_1o

-instrng :   104 lines of input have been read from file toptic_1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 31ga.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 33as.pspnc
  read the values zionpsp=  3.0 , pspcod=   1 , lmax=   1
nproj =      0     1     0     0
nprojso =      0     0     0
  read the values zionpsp=  5.0 , pspcod=   1 , lmax=   1
nproj =      1     0     0     0
nprojso =      0     0     0

 inpspheads: deduce mpsang  =   2, n1xccc  =2501.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
       Simple Lattice Grid

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
       Simple Lattice Grid

 invars1m : enter jdtset=3
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
       Simple Lattice Grid

 invars1m : enter jdtset=4
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
       Simple Lattice Grid

 invars1m : enter jdtset=5
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
       Simple Lattice Grid

 invars1m : enter jdtset=6
 invars1 : treat image number     1

 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is cF (face-centered cubic)

 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 216  F-4 3 m   (=Td^2)
       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00
       Simple Lattice Grid
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
       Simple Lattice Grid
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
       Simple Lattice Grid
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
       Simple Lattice Grid
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
       Simple Lattice Grid
  dtset%nelect=   8.0000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=10 and mkmem  = 10, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=10 and mkqmem = 10, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=10 and mk1mem = 10, ground state wf handled in core.
 For input ecut=  2.000000E+00 best grid ngfft=      10      10      10
       max ecut=  2.239898E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    10   10   10
  Augmented FFT divisions ...................    11   11   10
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      43
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=10 and mkmem  = 10, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=10 and mkqmem = 10, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=10 and mk1mem = 10, ground state wf handled in core.
 For input ecut=  2.000000E+00 best grid ngfft=      10      10      10
       max ecut=  2.239898E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    10   10   10
  Augmented FFT divisions ...................    11   11   10
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      43
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=256 and mkmem  = 256, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=256 and mkqmem = 256, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=256 and mk1mem = 256, ground state wf handled in core.
 For input ecut=  2.000000E+00 best grid ngfft=      10      10      10
       max ecut=  2.239898E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    10   10   10
  Augmented FFT divisions ...................    11   11   10
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      43
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=256 and mkmem  = 256, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=256 and mkqmem = 256, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=256 and mk1mem = 256, ground state wf handled in core.
 For input ecut=  2.000000E+00 best grid ngfft=      10      10      10
       max ecut=  2.239898E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    10   10   10
  Augmented FFT divisions ...................    11   11   10
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      43
 getmpw: optimal value of mpw=      43
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=256 and mkmem  = 256, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=256 and mkqmem = 256, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=256 and mk1mem = 256, ground state wf handled in core.
 For input ecut=  2.000000E+00 best grid ngfft=      10      10      10
       max ecut=  2.239898E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    10   10   10
  Augmented FFT divisions ...................    11   11   10
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      43
 getmpw: optimal value of mpw=      43
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=256 and mkmem  = 256, ground state wf handled in core.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=256 and mkqmem = 256, ground state wf handled in core.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=256 and mk1mem = 256, ground state wf handled in core.
 For input ecut=  2.000000E+00 best grid ngfft=      10      10      10
       max ecut=  2.239898E+00

 ==== FFT mesh ====
  FFT mesh divisions ........................    10   10   10
  Augmented FFT divisions ...................    11   11   10
  FFT algorithm .............................   112
  FFT cache size ............................    16
 getmpw: optimal value of mpw=      43
 getmpw: optimal value of mpw=      43

 DATASET    1 : space group F-4 3 m (#216); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         3 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =         4  mffmem =         1
P  mgfft =        10   mkmem =        10 mpssoang=         2     mpw =        43
  mqgrid =      3001   natom =         2    nfft =      1000    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                       0.968 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.028 Mbytes ; DEN or POT disk file :      0.010 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      0.0325 MBytes.
 memana : allocated an array of      0.033 Mbytes, for testing purposes.
 memana : allocated       0.968 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : space group F-4 3 m (#216); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        20  mffmem =         1
P  mgfft =        10   mkmem =        10 mpssoang=         2     mpw =        43
  mqgrid =      3001   natom =         2    nfft =      1000    nkpt =        10
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                       1.079 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      0.133 Mbytes ; DEN or POT disk file :      0.010 Mbytes.
================================================================================

 Biggest array : cg(disk), with      0.1332 MBytes.
 memana : allocated an array of      0.133 Mbytes, for testing purposes.
 memana : allocated       1.079 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    3 : space group F-4 3 m (#216); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
  lmnmax =         1   lnmax =         1   mband =        20  mffmem =         1
P  mgfft =        10   mkmem =       256 mpssoang=         2     mpw =        43
  mqgrid =      3001   natom =         2    nfft =      1000    nkpt =       256
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        24  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                       5.179 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      3.361 Mbytes ; DEN or POT disk file :      0.010 Mbytes.
================================================================================

 Biggest array : cg(disk), with      3.3614 MBytes.
 memana : allocated an array of      3.361 Mbytes, for testing purposes.
 memana : allocated       5.179 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    4 : space group F-4 3 m (#216); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
 memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4 (RF).
   intxc =         0    iscf =        -3 xclevel =         1  lmnmax =         1
   lnmax =         1   mband =        20  mffmem =         1   mgfft =        10
P  mkmem =       256  mkqmem =       256  mk1mem =       256 mpssoang=         2
     mpw =        43  mqgrid =      3001   natom =         2    nfft =      1000
    nkpt =       256  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =        24  n1xccc =      2501  ntypat =         2
  occopt =         1
================================================================================
P This job should need less than                      13.200 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      3.361 Mbytes ; DEN or POT disk file :      0.010 Mbytes.
================================================================================

 Biggest array : cg(disk), with      3.3614 MBytes.
 memana : allocated an array of      3.361 Mbytes, for testing purposes.
 memana : allocated      13.200 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    5 : space group F-4 3 m (#216); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
 memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  5 (RF).
   intxc =         0    iscf =        -3 xclevel =         1  lmnmax =         1
   lnmax =         1   mband =        20  mffmem =         1   mgfft =        10
P  mkmem =       256  mkqmem =       256  mk1mem =       256 mpssoang=         2
     mpw =        43  mqgrid =      3001   natom =         2    nfft =      1000
    nkpt =       256  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =        24  n1xccc =      2501  ntypat =         2
  occopt =         1
================================================================================
P This job should need less than                      13.200 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      3.361 Mbytes ; DEN or POT disk file :      0.010 Mbytes.
================================================================================

 Biggest array : cg(disk), with      3.3614 MBytes.
 memana : allocated an array of      3.361 Mbytes, for testing purposes.
 memana : allocated      13.200 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    6 : space group F-4 3 m (#216); Bravais cF (face-center cubic)

 getdim_nloc : deduce lmnmax  =   3, lnmax  =   1,
                      lmnmaxso=   3, lnmaxso=   1.
 memorf : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  6 (RF).
   intxc =         0    iscf =        -3 xclevel =         1  lmnmax =         1
   lnmax =         1   mband =        20  mffmem =         1   mgfft =        10
P  mkmem =       256  mkqmem =       256  mk1mem =       256 mpssoang=         2
     mpw =        43  mqgrid =      3001   natom =         2    nfft =      1000
    nkpt =       256  nloalg =         4  nspden =         1 nspinor =         1
  nsppol =         1    nsym =        24  n1xccc =      2501  ntypat =         2
  occopt =         1
================================================================================
P This job should need less than                      13.200 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :      3.361 Mbytes ; DEN or POT disk file :      0.010 Mbytes.
================================================================================

 Biggest array : cg(disk), with      3.3614 MBytes.
 memana : allocated an array of      3.361 Mbytes, for testing purposes.
 memana : allocated      13.200 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =112 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0600000000E+01  1.0600000000E+01  1.0600000000E+01 Bohr
              amu      6.97200000E+01  7.49216000E+01
           diemac      1.00000000E+01
             ecut      2.00000000E+00 Hartree
-          fftalg         112
           getden1          0
           getden2          1
           getden3          1
           getden4          0
           getden5          0
           getden6          0
           getwfk1          0
           getwfk2          1
           getwfk3          2
           getwfk4          3
           getwfk5          3
           getwfk6          3
             iscf1          3
             iscf2         -2
             iscf3         -2
             iscf4         -3
             iscf5         -3
             iscf6         -3
              ixc           3
           jdtset        1    2    3    4    5    6
              kpt1    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -3.75000000E-01  0.00000000E+00  0.00000000E+00
              kpt2    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -3.75000000E-01  0.00000000E+00  0.00000000E+00
              kpt3    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -1.25000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                      -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                       5.00000000E-01 -1.25000000E-01  0.00000000E+00
                      -3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -2.50000000E-01 -1.25000000E-01  2.50000000E-01
                      -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01 -3.75000000E-01  0.00000000E+00
                      -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                      -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                       3.75000000E-01 -2.50000000E-01  0.00000000E+00
                       5.00000000E-01 -2.50000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                      -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                       2.50000000E-01 -1.25000000E-01  0.00000000E+00
                       3.75000000E-01 -1.25000000E-01  1.25000000E-01
                       5.00000000E-01 -1.25000000E-01  2.50000000E-01
                      -3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -2.50000000E-01 -1.25000000E-01  5.00000000E-01
                      -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -2.50000000E-01  3.75000000E-01  2.50000000E-01
                      -1.25000000E-01  3.75000000E-01  3.75000000E-01
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  3.75000000E-01
                      -1.25000000E-01  5.00000000E-01  5.00000000E-01
                       2.50000000E-01 -3.75000000E-01  0.00000000E+00
              kpt4    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -1.25000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                      -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                       5.00000000E-01 -1.25000000E-01  0.00000000E+00
                      -3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -2.50000000E-01 -1.25000000E-01  2.50000000E-01
                      -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01 -3.75000000E-01  0.00000000E+00
                      -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                      -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                       3.75000000E-01 -2.50000000E-01  0.00000000E+00
                       5.00000000E-01 -2.50000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                      -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                       2.50000000E-01 -1.25000000E-01  0.00000000E+00
                       3.75000000E-01 -1.25000000E-01  1.25000000E-01
                       5.00000000E-01 -1.25000000E-01  2.50000000E-01
                      -3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -2.50000000E-01 -1.25000000E-01  5.00000000E-01
                      -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -2.50000000E-01  3.75000000E-01  2.50000000E-01
                      -1.25000000E-01  3.75000000E-01  3.75000000E-01
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  3.75000000E-01
                      -1.25000000E-01  5.00000000E-01  5.00000000E-01
                       2.50000000E-01 -3.75000000E-01  0.00000000E+00
              kpt5    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -1.25000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                      -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                       5.00000000E-01 -1.25000000E-01  0.00000000E+00
                      -3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -2.50000000E-01 -1.25000000E-01  2.50000000E-01
                      -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01 -3.75000000E-01  0.00000000E+00
                      -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                      -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                       3.75000000E-01 -2.50000000E-01  0.00000000E+00
                       5.00000000E-01 -2.50000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                      -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                       2.50000000E-01 -1.25000000E-01  0.00000000E+00
                       3.75000000E-01 -1.25000000E-01  1.25000000E-01
                       5.00000000E-01 -1.25000000E-01  2.50000000E-01
                      -3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -2.50000000E-01 -1.25000000E-01  5.00000000E-01
                      -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -2.50000000E-01  3.75000000E-01  2.50000000E-01
                      -1.25000000E-01  3.75000000E-01  3.75000000E-01
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  3.75000000E-01
                      -1.25000000E-01  5.00000000E-01  5.00000000E-01
                       2.50000000E-01 -3.75000000E-01  0.00000000E+00
              kpt6    -1.25000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -1.25000000E-01  0.00000000E+00
                      -1.25000000E-01 -1.25000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01 -3.75000000E-01  0.00000000E+00
                      -1.25000000E-01 -3.75000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  0.00000000E+00
                      -2.50000000E-01 -2.50000000E-01  1.25000000E-01
                      -1.25000000E-01 -2.50000000E-01  2.50000000E-01
                       5.00000000E-01 -1.25000000E-01  0.00000000E+00
                      -3.75000000E-01 -1.25000000E-01  1.25000000E-01
                      -2.50000000E-01 -1.25000000E-01  2.50000000E-01
                      -1.25000000E-01 -1.25000000E-01  3.75000000E-01
                      -1.25000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  3.75000000E-01  0.00000000E+00
                      -1.25000000E-01  3.75000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  0.00000000E+00
                      -2.50000000E-01  5.00000000E-01  1.25000000E-01
                      -1.25000000E-01  5.00000000E-01  2.50000000E-01
                       5.00000000E-01 -3.75000000E-01  0.00000000E+00
                      -3.75000000E-01 -3.75000000E-01  1.25000000E-01
                      -2.50000000E-01 -3.75000000E-01  2.50000000E-01
                      -1.25000000E-01 -3.75000000E-01  3.75000000E-01
                       3.75000000E-01 -2.50000000E-01  0.00000000E+00
                       5.00000000E-01 -2.50000000E-01  1.25000000E-01
                      -3.75000000E-01 -2.50000000E-01  2.50000000E-01
                      -2.50000000E-01 -2.50000000E-01  3.75000000E-01
                      -1.25000000E-01 -2.50000000E-01  5.00000000E-01
                       2.50000000E-01 -1.25000000E-01  0.00000000E+00
                       3.75000000E-01 -1.25000000E-01  1.25000000E-01
                       5.00000000E-01 -1.25000000E-01  2.50000000E-01
                      -3.75000000E-01 -1.25000000E-01  3.75000000E-01
                      -2.50000000E-01 -1.25000000E-01  5.00000000E-01
                      -1.25000000E-01 -1.25000000E-01 -3.75000000E-01
                      -1.25000000E-01  0.00000000E+00  0.00000000E+00
                      -2.50000000E-01  1.25000000E-01  0.00000000E+00
                      -1.25000000E-01  1.25000000E-01  1.25000000E-01
                      -3.75000000E-01  2.50000000E-01  0.00000000E+00
                      -2.50000000E-01  2.50000000E-01  1.25000000E-01
                      -1.25000000E-01  2.50000000E-01  2.50000000E-01
                       5.00000000E-01  3.75000000E-01  0.00000000E+00
                      -3.75000000E-01  3.75000000E-01  1.25000000E-01
                      -2.50000000E-01  3.75000000E-01  2.50000000E-01
                      -1.25000000E-01  3.75000000E-01  3.75000000E-01
                       3.75000000E-01  5.00000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  1.25000000E-01
                      -3.75000000E-01  5.00000000E-01  2.50000000E-01
                      -2.50000000E-01  5.00000000E-01  3.75000000E-01
                      -1.25000000E-01  5.00000000E-01  5.00000000E-01
                       2.50000000E-01 -3.75000000E-01  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
           kptopt1          1
           kptopt2          1
           kptopt3          3
           kptopt4          3
           kptopt5          3
           kptopt6          3
         kptrlatt        4   -4    4     -4    4    4     -4   -4    4
          kptrlen      4.24000000E+01
P           mkmem1         10
P           mkmem2         10
P           mkmem3        256
P           mkmem4        256
P           mkmem5        256
P           mkmem6        256
P          mkqmem1         10
P          mkqmem2         10
P          mkqmem3        256
P          mkqmem4        256
P          mkqmem5        256
P          mkqmem6        256
P          mk1mem1         10
P          mk1mem2         10
P          mk1mem3        256
P          mk1mem4        256
P          mk1mem5        256
P          mk1mem6        256
            natom           2
            nband1          4
            nband2         20
            nband3         20
            nband4         20
            nband5         20
            nband6         20
           nbdbuf1          0
           nbdbuf2          2
           nbdbuf3          2
           nbdbuf4          2
           nbdbuf5          2
           nbdbuf6          2
           ndtset           6
            ngfft          10      10      10
             nkpt1         10
             nkpt2         10
             nkpt3        256
             nkpt4        256
             nkpt5        256
             nkpt6        256
            nline1          4
            nline2          4
            nline3          4
            nline4          0
            nline5          0
            nline6          0
             nqpt1          0
             nqpt2          0
             nqpt3          0
             nqpt4          1
             nqpt5          1
             nqpt6          1
            nstep1         25
            nstep2         25
            nstep3         25
            nstep4          1
            nstep5          1
            nstep6          1
             nsym          24
           ntypat           2
              occ1     2.000000  2.000000  2.000000  2.000000
              occ4     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
              occ5     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
              occ6     2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       0.000000  0.000000
        optdriver1          0
        optdriver2          0
        optdriver3          0
        optdriver4          1
        optdriver5          1
        optdriver6          1
        optforces           1
            prtwf1          1
            prtwf2          1
            prtwf3          1
            prtwf4          3
            prtwf5          3
            prtwf6          3
            rfdir1          0       0       0
            rfdir2          0       0       0
            rfdir3          0       0       0
            rfdir4          1       0       0
            rfdir5          0       1       0
            rfdir6          0       0       1
           rfelfd1          0
           rfelfd2          0
           rfelfd3          0
           rfelfd4          2
           rfelfd5          2
           rfelfd6          2
            rprim      0.0000000000E+00  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         216
           symrel      1  0  0   0  1  0   0  0  1       0 -1  1   0 -1  0   1 -1  0
                      -1  0  0  -1  0  1  -1  1  0       0  1 -1   1  0 -1   0  0 -1
                      -1  0  0  -1  1  0  -1  0  1       0 -1  1   1 -1  0   0 -1  0
                       1  0  0   0  0  1   0  1  0       0  1 -1   0  0 -1   1  0 -1
                      -1  0  1  -1  1  0  -1  0  0       0 -1  0   1 -1  0   0 -1  1
                       1  0 -1   0  0 -1   0  1 -1       0  1  0   0  0  1   1  0  0
                       1  0 -1   0  1 -1   0  0 -1       0 -1  0   0 -1  1   1 -1  0
                      -1  0  1  -1  0  0  -1  1  0       0  1  0   1  0  0   0  0  1
                       0  0 -1   0  1 -1   1  0 -1       1 -1  0   0 -1  1   0 -1  0
                       0  0  1   1  0  0   0  1  0      -1  1  0  -1  0  0  -1  0  1
                       0  0  1   0  1  0   1  0  0       1 -1  0   0 -1  0   0 -1  1
                       0  0 -1   1  0 -1   0  1 -1      -1  1  0  -1  0  1  -1  0  0
           tolwfr      1.00000000E-20
            typat      1  2
              wtk1       0.09375    0.09375    0.09375    0.18750    0.09375    0.09375
                         0.09375    0.18750    0.03125    0.03125
              wtk2       0.09375    0.09375    0.09375    0.18750    0.09375    0.09375
                         0.09375    0.18750    0.03125    0.03125
              wtk3       0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
              wtk4       0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
              wtk5       0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
              wtk6       0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391    0.00391    0.00391    0.00391    0.00391
                         0.00391    0.00391
                       outvars : Printing only first  50 k-points.
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.4023196028E+00  1.4023196028E+00  1.4023196028E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.6500000000E+00  2.6500000000E+00  2.6500000000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.5000000000E-01  2.5000000000E-01  2.5000000000E-01
            znucl       31.00000   33.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.

 chkinp: Checking input parameters for consistency, jdtset=   3.

 chkinp: Checking input parameters for consistency, jdtset=   4.

 chkinp: Checking input parameters for consistency, jdtset=   5.

 chkinp: Checking input parameters for consistency, jdtset=   6.
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
