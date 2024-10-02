  ABINIT 
  
  Give name for formatted input file: 
abinit.in
  Give name for formatted output file:
abinit.out
  Give root name for generic input files:
abi
  Give root name for generic output files:
abo
  Give root name for generic temporary files:
tmp

.Version 7.10.5 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel16.0 computer) 

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

.Starting date : Mon  5 Dec 2016.
- ( at 13h26 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 7.10.5
  Build target  : x86_64_linux_intel16.0
  Build date    : 20161130
 
 === Compiler Suite === 
  C compiler       : intel16.0
  C++ compiler     : gnu16.0
  Fortran compiler : intel16.0
  CFLAGS           :  -g -O2 -vec-report0
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -extend-source -vec-report0 -noaltparam -nofpscomp
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
  DFT flavor    : libxc
  FFT flavor    : fftw3
  LINALG flavor : mkl
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
 
            HAVE_DFT_LIBXC HAVE_DFT_LIBXC_GET_NUMBER HAVE_FC_ALLOCATABLE_DT...
 
             HAVE_FC_ASYNC  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE
 
        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME              HAVE_FC_EXIT
 
             HAVE_FC_FLUSH             HAVE_FC_GAMMA   HAVE_FC_IEEE_EXCEPTIONS
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES
 
        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED
 
         HAVE_FC_STREAM_IO                  HAVE_FFT            HAVE_FFT_FFTW3
 
              HAVE_FFT_MPI           HAVE_FFT_SERIAL        HAVE_LIBPAW_ABINIT
 
               HAVE_LINALG        HAVE_LINALG_SERIAL                  HAVE_MPI
 
                 HAVE_MPI2       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL
 
       HAVE_MPI_IALLTOALLV               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
                HAVE_NUMPY             HAVE_OS_LINUX                HAVE_TIMER
 
         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> abinit.in
- output file    -> abinit.out
- root for input  files -> abi
- root for output files -> abo
 
-instrng :    35 lines of input have been read from file abinit.in
 

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 13-Al.GGA.fhi
  read the values zionpsp=  3.0 , pspcod=   6 , lmax=   3
nproj =      1     1     1     1
nprojso =      0     0     0
 
 inpspheads: deduce mpsang  =   4, n1xccc  =   0.
 
 invars1m : enter jdtset=0
 invars1 : treat image number     1
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 
 symlatt : the Bravais lattice is cF (face-centered cubic)
 symspgr : spgroup= 225  Fm -3 m   (=Oh^5)
       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   3.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    6
    spin-unpolarized case :
  2.00  1.00  0.00  0.00  0.00  0.00
 getmpw sequential formula gave:     3126
 
 Computing all possible proc distrib for this input with nproc less than 8
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->    8|   1 ->    1|   1 ->    8|   1 ->    6|   1 ->    4|   2 ->    8|   1 ->    8|
           1|           8|           1|           1|           1|           1|           8|       7.76 |
           1|           4|           1|           2|           1|           1|           8|       7.23 |
           1|           4|           1|           1|           2|           1|           8|       7.23 |
           1|           7|           1|           1|           1|           1|           7|       6.80 |
           1|           2|           1|           4|           1|           1|           8|       6.71 |
npfft, npband, npspinor and npkpt:     1    1    1    8
 
--- !WARNING
message: |
    nkpt*nsppol (455) is not a multiple of nproc_kpt (8)
    The k-point parallelisation is not efficient.
src_file: distrb2.F90
src_line: 113
...
 
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=57 and mkmem  = 455, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=57 and mkqmem = 455, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=57 and mk1mem = 455, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  7.144069E+01 best grid ngfft=      45      45      45
       max ecut=  8.339544E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    45   45   45
  Augmented FFT divisions ...................    45   45   45
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    3146
 
 Symmetries : space group Fm -3 m (#225); Bravais cF (face-center cubic)
 
 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need of the present run
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =         6  mffmem =         1
P  mgfft =        45   mkmem =        57 mpssoang=         4     mpw =      3146
  mqgrid =      3001   natom =         1    nfft =     91125    nkpt =       455
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        48  n1xccc =         0  ntypat =         1  occopt =         6
================================================================================
P This job should need less than                      47.590 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    131.053 Mbytes ; DEN or POT disk file :      0.697 Mbytes.
================================================================================
 
 Biggest array : cg(disk), with     16.4194 MBytes.
 memana : allocated an array of     16.419 Mbytes, for testing purposes.
 memana : allocated      47.590 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.8897261329E+00  1.8897261329E+00  1.8897261329E+00 Bohr
              amu      2.69815390E+01
        autoparal           1
          dilatmx      1.80000000E+00
        dosdeltae      1.83746627E-03 Hartree
             ecut      2.20495952E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           enunit           1
-          fftalg         312
           ionmov           2
           istwfk        2    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
              ixc     -263267
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  0.00000000E+00  0.00000000E+00
                       8.00000000E-02  0.00000000E+00  0.00000000E+00
                       1.20000000E-01  0.00000000E+00  0.00000000E+00
                       1.60000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.40000000E-01  0.00000000E+00  0.00000000E+00
                       2.80000000E-01  0.00000000E+00  0.00000000E+00
                       3.20000000E-01  0.00000000E+00  0.00000000E+00
                       3.60000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.40000000E-01  0.00000000E+00  0.00000000E+00
                       4.80000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  4.00000000E-02  0.00000000E+00
                       8.00000000E-02  4.00000000E-02  0.00000000E+00
                       1.20000000E-01  4.00000000E-02  0.00000000E+00
                       1.60000000E-01  4.00000000E-02  0.00000000E+00
                       2.00000000E-01  4.00000000E-02  0.00000000E+00
                       2.40000000E-01  4.00000000E-02  0.00000000E+00
                       2.80000000E-01  4.00000000E-02  0.00000000E+00
                       3.20000000E-01  4.00000000E-02  0.00000000E+00
                       3.60000000E-01  4.00000000E-02  0.00000000E+00
                       4.00000000E-01  4.00000000E-02  0.00000000E+00
                       4.40000000E-01  4.00000000E-02  0.00000000E+00
                       4.80000000E-01  4.00000000E-02  0.00000000E+00
                      -4.80000000E-01  4.00000000E-02  0.00000000E+00
                      -4.40000000E-01  4.00000000E-02  0.00000000E+00
                      -4.00000000E-01  4.00000000E-02  0.00000000E+00
                      -3.60000000E-01  4.00000000E-02  0.00000000E+00
                      -3.20000000E-01  4.00000000E-02  0.00000000E+00
                      -2.80000000E-01  4.00000000E-02  0.00000000E+00
                      -2.40000000E-01  4.00000000E-02  0.00000000E+00
                      -2.00000000E-01  4.00000000E-02  0.00000000E+00
                      -1.60000000E-01  4.00000000E-02  0.00000000E+00
                      -1.20000000E-01  4.00000000E-02  0.00000000E+00
                      -8.00000000E-02  4.00000000E-02  0.00000000E+00
                      -4.00000000E-02  4.00000000E-02  0.00000000E+00
                       8.00000000E-02  8.00000000E-02  0.00000000E+00
                       1.20000000E-01  8.00000000E-02  0.00000000E+00
                       1.60000000E-01  8.00000000E-02  0.00000000E+00
                       2.00000000E-01  8.00000000E-02  0.00000000E+00
                       2.40000000E-01  8.00000000E-02  0.00000000E+00
                       2.80000000E-01  8.00000000E-02  0.00000000E+00
                       3.20000000E-01  8.00000000E-02  0.00000000E+00
                       3.60000000E-01  8.00000000E-02  0.00000000E+00
                       4.00000000E-01  8.00000000E-02  0.00000000E+00
                       4.40000000E-01  8.00000000E-02  0.00000000E+00
                       4.80000000E-01  8.00000000E-02  0.00000000E+00
                      -4.80000000E-01  8.00000000E-02  0.00000000E+00
                      -4.40000000E-01  8.00000000E-02  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt       25    0    0      0   25    0      0    0   25
          kptrlen      1.33790846E+02
P           mkmem          57
            natom           1
            nband           6
            ngfft          45      45      45
             nkpt         455
-           npkpt           8
            nstep          50
             nsym          48
            ntime          30
           ntypat           1
              occ      2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  1.000000  0.000000  0.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           6
          optcell           1
           prtden           0
           prtdos           2
        prtposcar           1
            prtwf           0
            rprim      0.0000000000E+00  2.0025000000E+00  2.0025000000E+00
                       2.0025000000E+00  0.0000000000E+00  2.0025000000E+00
                       2.0025000000E+00  2.0025000000E+00  0.0000000000E+00
          spgroup         225
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
                      -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
                       0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
                      -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
                       0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                       0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
                      -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                       0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
                       1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
                       0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
                      -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
                       1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                      -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
                       0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
                      -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
           toldfe      3.67493254E-08 Hartree
           tolmxf      1.00000000E-08
           tsmear      7.34986508E-03 Hartree
            typat      1
          usekden           1
              wtk        0.00006    0.00051    0.00051    0.00051    0.00051    0.00051
                         0.00051    0.00051    0.00051    0.00051    0.00051    0.00051
                         0.00051    0.00038    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00077    0.00038    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154
                       outvars : Printing only first  50 k-points.
            znucl       13.00000
 
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
  MPI_WTICK ..................   1.000000000000000E-006
 
================================================================================
== DATASET  1 ==================================================================
-   nproc =    8
 
 
 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
SCAN exchange of Sun, Ruzsinszky, and Perdew
SCAN exchange of Sun, Ruzsinszky, and Perdew
SCAN correlation of Sun, Ruzsinszky, and Perdew
SCAN correlation of Sun, Ruzsinszky, and Perdew
 Unit cell volume ucvol=  1.0837876E+02 bohr^3
 Angles (23,13,12)=  6.00000000E+01  6.00000000E+01  6.00000000E+01 degrees
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     71.441   => boxcut(ratio)=   2.16087
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 13-Al.GGA.fhi
- pspatm: opening atomic psp file    13-Al.GGA.fhi
- aluminium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
- 13.00000   3.00000     21003                znucl, zion, pspdat
    6   11    3    2       493   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
 
--- !WARNING
message: |
    Pseudopotential file pspxc=      11,
    not equal to input ixc= -263267.
    These parameters must agree to get the same xc 
    in ABINIT code as in psp construction.
    Action : check psp design or input file.
    Assume experienced user. Execution will continue.
src_file: pspatm_abinit.F90
src_line: 418
...
 
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   -2.68844188
         --- l  ekb(1:nproj) -->
             0    2.856913
             1    1.400534
             3   -1.215994
 pspatm: atomic psp has been read  and splines computed
 
  -8.06532564E+00                                ecore*ucvol(ha*bohr**3)
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 wfconv:     6 bands initialized randomly with npw=  1560, for ikpt=     1
 wfconv:     6 bands initialized randomly with npw=  3125, for ikpt=     2
 wfconv:     6 bands initialized randomly with npw=  3125, for ikpt=     3
 wfconv:     6 bands initialized randomly with npw=  3119, for ikpt=     4
 wfconv:     6 bands initialized randomly with npw=  3119, for ikpt=     5
 wfconv:     6 bands initialized randomly with npw=  3116, for ikpt=     6
 wfconv:     6 bands initialized randomly with npw=  3119, for ikpt=     7
 wfconv:     6 bands initialized randomly with npw=  3125, for ikpt=     8
 wfconv:     6 bands initialized randomly with npw=  3124, for ikpt=     9
 wfconv:     6 bands initialized randomly with npw=  3124, for ikpt=    10
 wfconv:     6 bands initialized randomly with npw=  3121, for ikpt=    11
 wfconv:     6 bands initialized randomly with npw=  3133, for ikpt=    12
 wfconv:     6 bands initialized randomly with npw=  3139, for ikpt=    13
 wfconv:     6 bands initialized randomly with npw=  3127, for ikpt=    14
 wfconv:     6 bands initialized randomly with npw=  3124, for ikpt=    15
 wfconv:     6 bands initialized randomly with npw=  3127, for ikpt=    16
 wfconv:     6 bands initialized randomly with npw=  3118, for ikpt=    17
 wfconv:     6 bands initialized randomly with npw=  3117, for ikpt=    18
 wfconv:     6 bands initialized randomly with npw=  3121, for ikpt=    19
 wfconv:     6 bands initialized randomly with npw=  3116, for ikpt=    20
 wfconv:     6 bands initialized randomly with npw=  3122, for ikpt=    21
 wfconv:     6 bands initialized randomly with npw=  3127, for ikpt=    22
 wfconv:     6 bands initialized randomly with npw=  3119, for ikpt=    23
 wfconv:     6 bands initialized randomly with npw=  3128, for ikpt=    24
 wfconv:     6 bands initialized randomly with npw=  3132, for ikpt=    25
 wfconv:     6 bands initialized randomly with npw=  3133, for ikpt=    26
 wfconv:     6 bands initialized randomly with npw=  3131, for ikpt=    27
 wfconv:     6 bands initialized randomly with npw=  3129, for ikpt=    28
 wfconv:     6 bands initialized randomly with npw=  3124, for ikpt=    29
 wfconv:     6 bands initialized randomly with npw=  3116, for ikpt=    30
 wfconv:     6 bands initialized randomly with npw=  3123, for ikpt=    31
 wfconv:     6 bands initialized randomly with npw=  3128, for ikpt=    32
 wfconv:     6 bands initialized randomly with npw=  3123, for ikpt=    33
 wfconv:     6 bands initialized randomly with npw=  3118, for ikpt=    34
 wfconv:     6 bands initialized randomly with npw=  3118, for ikpt=    35
 wfconv:     6 bands initialized randomly with npw=  3131, for ikpt=    36
 wfconv:     6 bands initialized randomly with npw=  3129, for ikpt=    37
 wfconv:     6 bands initialized randomly with npw=  3123, for ikpt=    38
 wfconv:     6 bands initialized randomly with npw=  3126, for ikpt=    39
 wfconv:     6 bands initialized randomly with npw=  3129, for ikpt=    40
 wfconv:     6 bands initialized randomly with npw=  3119, for ikpt=    41
 wfconv:     6 bands initialized randomly with npw=  3126, for ikpt=    42
 wfconv:     6 bands initialized randomly with npw=  3125, for ikpt=    43
 wfconv:     6 bands initialized randomly with npw=  3114, for ikpt=    44
 wfconv:     6 bands initialized randomly with npw=  3115, for ikpt=    45
 wfconv:     6 bands initialized randomly with npw=  3116, for ikpt=    46
 wfconv:     6 bands initialized randomly with npw=  3130, for ikpt=    47
 wfconv:     6 bands initialized randomly with npw=  3128, for ikpt=    48
 wfconv:     6 bands initialized randomly with npw=  3131, for ikpt=    49
 wfconv:     6 bands initialized randomly with npw=  3132, for ikpt=    50
 
_setup2: Arith. and geom. avg. npw (full set) are    3125.823    3125.816
 initro : for itypat=  1, take decay length=      1.2500,
 initro : indeed, coreel=     10.0000, nval=  3 and densty=  0.0000E+00.
 
================================================================================
 
=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================
 
--- Iteration: ( 1/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.88972613288564E+00  1.88972613288564E+00  1.88972613288564E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.78417658110350E+00  3.78417658110350E+00
  3.78417658110350E+00  0.00000000000000E+00  3.78417658110350E+00
  3.78417658110350E+00  3.78417658110350E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.08378759740405E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.35163384341122E+00  5.35163384341122E+00  5.35163384341122E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   3.88956
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   83.395445 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.628783 , with nelect=      3.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.019 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.573 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.004 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2129E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    2.5229E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.5792E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.6200E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.6542E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.2129E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    2.5229E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0670471037127    -2.067E+00 3.095E-02 1.659E+02
 scprqt: <Vxc>= -3.6236895E-01 hartree
 
Simple mixing update:
  residual square of the potential :   147.624429768348
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.331141 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.007 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.601 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.002 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2586E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    3.8782E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.5256E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.4245E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.5751E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.2586E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    3.8782E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0698443961822    -2.797E-03 5.761E-03 4.574E+01
 scprqt: <Vxc>= -3.6396020E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.730      0.270
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.330904 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.610 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.002 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2715E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    3.9853E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.5275E-02  at reduced coord.    0.0889    0.9111    0.9111
,     Minimum=    6.4185E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.5767E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.2715E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    3.9853E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0698907776368    -4.638E-05 1.041E-03 5.529E+00
 scprqt: <Vxc>= -3.6377801E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.46     -0.475      0.113E-01
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.330884 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.627 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.002 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2833E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0508E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.5334E-02  at reduced coord.    0.0889    0.9111    0.9111
,     Minimum=    6.4138E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.5804E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.2833E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0508E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  4  -2.0699020356632    -1.126E-05 4.983E-04 2.938E-01
 scprqt: <Vxc>= -3.6397161E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.870      0.252     -0.132      0.103E-01
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 newocc : new Fermi energy is       0.330880 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.626 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.002 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2836E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0583E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.5335E-02  at reduced coord.    0.0889    0.9111    0.9111
,     Minimum=    6.4170E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.5803E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.2836E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0583E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  5  -2.0699026295599    -5.939E-07 6.790E-04 1.705E-02
 scprqt: <Vxc>= -3.6387835E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14     -0.621E-01 -0.979E-01  0.185E-01  0.133E-03
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 newocc : new Fermi energy is       0.330880 , with nelect=      3.000000
  Number of bissection calls =  42
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.627 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.002 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2840E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0625E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.5338E-02  at reduced coord.    0.0889    0.9111    0.9111
,     Minimum=    6.4172E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.5805E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.2840E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0625E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  6  -2.0699027134081    -8.385E-08 7.178E-04 5.322E-04
 scprqt: <Vxc>= -3.6389741E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06     -0.236E-01 -0.509E-01  0.145E-01 -0.314E-02
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 newocc : new Fermi energy is       0.330877 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.627 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.002 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2839E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0628E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.5337E-02  at reduced coord.    0.0889    0.9111    0.9111
,     Minimum=    6.4183E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.5805E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.2839E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0628E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  7  -2.0699027213879    -7.980E-09 7.325E-04 5.576E-05
 scprqt: <Vxc>= -3.6388498E-01 hartree
 
 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02      0.751E-01 -0.115      0.104E-01  0.547E-02
 
 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 newocc : new Fermi energy is       0.330877 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.627 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.002 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.2839E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0630E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.5337E-02  at reduced coord.    0.0889    0.9111    0.9111
,     Minimum=    6.4187E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.5805E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.2839E-02  at reduced coord.    0.8444    0.8444    0.8667
,     Minimum=    4.0630E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  8  -2.0699027225736    -1.186E-09 3.973E-04 6.112E-06
 scprqt: <Vxc>= -3.6388640E-01 hartree
 
 At SCF step    8, etot is converged : 
  for the second time, diff in etot=  1.186E-09 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.58733246E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.58733246E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.58733246E-04  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.88972613288564E+00  1.88972613288564E+00  1.88972613288564E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.78417658110350E+00  3.78417658110350E+00
  3.78417658110350E+00  0.00000000000000E+00  3.78417658110350E+00
  3.78417658110350E+00  3.78417658110350E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.08378759740405E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.35163384341122E+00  5.35163384341122E+00  5.35163384341122E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  4.58733246359845E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  4.58733246359845E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  4.58733246359845E-04
 Total energy (etotal) [Ha]= -2.06990272257357E+00
 fconv : at Broyd/MD step   1, gradients have not converged yet. 
  max grad (force/stress) = 4.5873E-02 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
Inverse hessian has been initialized.
 EXIT:           1           1
 
--- Iteration: ( 2/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.86371972677555E+00  1.86371972677555E+00  1.86371972677555E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.73209875286805E+00  3.73209875286805E+00
  3.73209875286805E+00  0.00000000000000E+00  3.73209875286805E+00
  3.73209875286805E+00  3.73209875286805E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.03965531029765E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.27798467242170E+00  5.27798467242170E+00  5.27798467242170E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   3.94384
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   85.739088 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.353043 , with nelect=      3.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.588 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.001 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.4062E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9242E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.6128E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.8578E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.8199E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.4062E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9242E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0693363518821    -2.069E+00 2.474E-03 3.122E+01
 scprqt: <Vxc>= -3.6864051E-01 hartree
 
Simple mixing update:
  residual square of the potential :   30.8854798106216
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.348341 , with nelect=      3.000000
  Number of bissection calls =  42
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.605 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.001 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.4103E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9324E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.6180E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.8068E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.8229E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.4103E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9324E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0693469896727    -1.064E-05 2.759E-03 1.569E-01
 scprqt: <Vxc>= -3.6911367E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00     -0.146E-02
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.348359 , with nelect=      3.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.601 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.001 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.4106E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9292E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.6182E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.8016E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.8228E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.4106E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9292E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0693483356153    -1.346E-06 1.895E-04 4.384E-02
 scprqt: <Vxc>= -3.6901456E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.834      0.189     -0.227E-01
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.348376 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.604 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.001 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.4112E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9276E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.6183E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.7973E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.8228E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.4112E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9276E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  4  -2.0693485403450    -2.047E-07 1.923E-03 3.843E-03
 scprqt: <Vxc>= -3.6907199E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.33     -0.202     -0.124     -0.210E-02
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 newocc : new Fermi energy is       0.348379 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.604 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.001 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.4115E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9261E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.6182E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.7968E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.8228E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.4115E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9261E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  5  -2.0693485829053    -4.256E-08 1.254E-04 1.283E-04
 scprqt: <Vxc>= -3.6906674E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.996      0.318E-01 -0.421E-01  0.144E-01  0.142E-03
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 newocc : new Fermi energy is       0.348381 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.604 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.001 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.4116E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9260E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.6183E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.7959E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.8229E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.4116E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9260E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  6  -2.0693485862246    -3.319E-09 1.143E-03 2.575E-05
 scprqt: <Vxc>= -3.6907161E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.902      0.180     -0.813E-01 -0.474E-02  0.445E-02
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 newocc : new Fermi energy is       0.348382 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.604 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.001 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.4116E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9259E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.6183E-02  at reduced coord.    0.1111    0.8889    0.9111
,     Minimum=    6.7958E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    8.8229E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.4116E-02  at reduced coord.    0.8444    0.8444    0.8444
,     Minimum=    3.9259E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  7  -2.0693485866614    -4.368E-10 6.991E-05 1.826E-06
 scprqt: <Vxc>= -3.6907127E-01 hartree
 
 At SCF step    7, etot is converged : 
  for the second time, diff in etot=  4.368E-10 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.79493580E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.79493580E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.79493580E-04  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.86371972677555E+00  1.86371972677555E+00  1.86371972677555E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.73209875286805E+00  3.73209875286805E+00
  3.73209875286805E+00  0.00000000000000E+00  3.73209875286805E+00
  3.73209875286805E+00  3.73209875286805E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.03965531029765E+02
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.27798467242170E+00  5.27798467242170E+00  5.27798467242170E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.79493580095109E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.79493580095109E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.79493580095109E-04
 Total energy (etotal) [Ha]= -2.06934858666141E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 5.54136E-04
           Relative     = 2.67747E-04
 fconv : at Broyd/MD step   2, gradients have not converged yet. 
  max grad (force/stress) = 3.7949E-02 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: ( 3/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.76373975878127E+00  1.76373975878127E+00  1.76373975878127E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.53188886695950E+00  3.53188886695950E+00
  3.53188886695950E+00  0.00000000000000E+00  3.53188886695950E+00
  3.53188886695950E+00  3.53188886695950E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  8.81152514736457E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  4.99484513644867E+00  4.99484513644867E+00  4.99484513644867E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.16740
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   95.735069 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.441166 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.007 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.203 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.0489E-02  at reduced coord.    0.8222    0.8222    0.8222
,     Minimum=    3.5128E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.9889E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.8247E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.8776E-01
 Total charge density [el/Bohr^3]
,     Maximum=    4.0489E-02  at reduced coord.    0.8222    0.8222    0.8222
,     Minimum=    3.5128E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0605990026786    -2.061E+00 8.636E+00 2.491E+02
 scprqt: <Vxc>= -3.8788808E-01 hartree
 
Simple mixing update:
  residual square of the potential :   245.342328012805
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.421600 , with nelect=      3.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.249 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.0744E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5453E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    2.0104E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.7769E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.8891E-01
 Total charge density [el/Bohr^3]
,     Maximum=    4.0744E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5453E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0606885498093    -8.955E-05 1.166E+00 1.672E+00
 scprqt: <Vxc>= -3.8943067E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.987      0.132E-01
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.421504 , with nelect=      3.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.216 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.0722E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5499E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    2.0089E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.7935E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.8878E-01
 Total charge density [el/Bohr^3]
,     Maximum=    4.0722E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5499E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0606989033215    -1.035E-05 3.564E-01 3.881E-01
 scprqt: <Vxc>= -3.8879798E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.695      0.307     -0.240E-02
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.421552 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.226 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.0747E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5496E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    2.0092E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.7831E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.8880E-01
 Total charge density [el/Bohr^3]
,     Maximum=    4.0747E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5496E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  4  -2.0607007072262    -1.804E-06 6.488E-02 7.937E-03
 scprqt: <Vxc>= -3.8906517E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.317E-01 -0.372E-01 -0.818E-03
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 newocc : new Fermi energy is       0.421531 , with nelect=      3.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.222 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.0749E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5500E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    2.0088E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.7864E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.8880E-01
 Total charge density [el/Bohr^3]
,     Maximum=    4.0749E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5500E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  5  -2.0607009605600    -2.533E-07 7.455E-04 6.046E-03
 scprqt: <Vxc>= -3.8897542E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.847      0.275     -0.111     -0.104E-01 -0.393E-04
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 newocc : new Fermi energy is       0.421537 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.223 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.0753E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5502E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    2.0089E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.7849E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.8881E-01
 Total charge density [el/Bohr^3]
,     Maximum=    4.0753E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5502E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  6  -2.0607009977810    -3.722E-08 2.340E-03 3.444E-05
 scprqt: <Vxc>= -3.8901196E-01 hartree
 
 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.967      0.516E-01 -0.209E-01 -0.198E-02  0.470E-02
 
 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 newocc : new Fermi energy is       0.421534 , with nelect=      3.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.223 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.0754E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5504E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    2.0089E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.7854E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.8881E-01
 Total charge density [el/Bohr^3]
,     Maximum=    4.0754E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5504E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  7  -2.0607010039562    -6.175E-09 8.702E-05 7.379E-05
 scprqt: <Vxc>= -3.8900258E-01 hartree
 
 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02      0.201     -0.208     -0.267E-01  0.152E-01
 
 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 newocc : new Fermi energy is       0.421534 , with nelect=      3.000000
  Number of bissection calls =  42
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.006 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.223 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    4.0755E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5505E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    2.0089E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.7852E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.8881E-01
 Total charge density [el/Bohr^3]
,     Maximum=    4.0755E-02  at reduced coord.    0.8000    0.8222    0.8222
,     Minimum=    3.5505E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  8  -2.0607010045171    -5.610E-10 5.662E-04 8.042E-07
 scprqt: <Vxc>= -3.8900708E-01 hartree
 
 At SCF step    8, etot is converged : 
  for the second time, diff in etot=  5.610E-10 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -2.42223448E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -2.42223448E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.42223448E-04  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.76373975878127E+00  1.76373975878127E+00  1.76373975878127E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.53188886695950E+00  3.53188886695950E+00
  3.53188886695950E+00  0.00000000000000E+00  3.53188886695950E+00
  3.53188886695950E+00  3.53188886695950E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  8.81152514736457E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  4.99484513644867E+00  4.99484513644867E+00  4.99484513644867E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -2.42223447969212E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -2.42223447969213E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -2.42223447969213E-04
 Total energy (etotal) [Ha]= -2.06070100451712E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 8.64758E-03
           Relative     = 4.18764E-03
 fconv : at Broyd/MD step   3, gradients have not converged yet. 
  max grad (force/stress) = 2.4222E-02 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: ( 4/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79883855082566E+00  1.79883855082566E+00  1.79883855082566E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.60217419802839E+00  3.60217419802839E+00
  3.60217419802839E+00  0.00000000000000E+00  3.60217419802839E+00
  3.60217419802839E+00  3.60217419802839E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.34811677654040E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.09424360488218E+00  5.09424360488218E+00  5.09424360488218E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.08609
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   92.035567 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.387653 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.004 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.424 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8113E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6869E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8632E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    7.9953E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.4927E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8113E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6869E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0651120788454    -2.065E+00 4.736E-05 3.861E+01
 scprqt: <Vxc>= -3.8234289E-01 hartree
 
Simple mixing update:
  residual square of the potential :   38.0953483582104
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.394733 , with nelect=      3.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.398 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8061E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6620E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8583E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.0017E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.4888E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8061E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6620E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0651231537224    -1.107E-05 8.498E-06 2.710E-01
 scprqt: <Vxc>= -3.8178861E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.954      0.457E-01
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.394760 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.409 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8072E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6573E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8587E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    7.9954E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.4891E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8072E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6573E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0651243057363    -1.152E-06 3.273E-06 3.157E-02
 scprqt: <Vxc>= -3.8199897E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.768      0.234     -0.181E-02
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.394743 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.405 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8066E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6564E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8586E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    7.9991E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.4891E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8066E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6564E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  4  -2.0651244965143    -1.908E-07 4.900E-06 9.844E-04
 scprqt: <Vxc>= -3.8191255E-01 hartree
 
 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.896      0.121     -0.155E-01 -0.203E-02
 
 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 newocc : new Fermi energy is       0.394748 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.406 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8066E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6557E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8586E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    7.9980E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.4891E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8066E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6557E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  5  -2.0651245206248    -2.411E-08 2.087E-06 2.044E-04
 scprqt: <Vxc>= -3.8193849E-01 hartree
 
 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.917      0.161     -0.687E-01 -0.896E-02 -0.141E-03
 
 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 newocc : new Fermi energy is       0.394746 , with nelect=      3.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.406 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8066E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6555E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8586E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    7.9985E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.4891E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8066E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6555E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  6  -2.0651245232032    -2.578E-09 5.255E-06 7.207E-06
 scprqt: <Vxc>= -3.8192901E-01 hartree
 
 At SCF step    6, etot is converged : 
  for the second time, diff in etot=  2.578E-09 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.98632420E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.98632420E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.98632420E-05  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79883855082566E+00  1.79883855082566E+00  1.79883855082566E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.60217419802839E+00  3.60217419802839E+00
  3.60217419802839E+00  0.00000000000000E+00  3.60217419802839E+00
  3.60217419802839E+00  3.60217419802839E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.34811677654040E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.09424360488218E+00  5.09424360488218E+00  5.09424360488218E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.98632419913781E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.98632419913787E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.98632419913783E-05
 Total energy (etotal) [Ha]= -2.06512452320318E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.42352E-03
           Relative     =-2.14431E-03
 fconv : at Broyd/MD step   4, gradients have not converged yet. 
  max grad (force/stress) = 3.9863E-03 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: ( 5/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79362139454971E+00  1.79362139454971E+00  1.79362139454971E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59172684258579E+00  3.59172684258579E+00
  3.59172684258579E+00  0.00000000000000E+00  3.59172684258579E+00
  3.59172684258579E+00  3.59172684258579E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26701565618417E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07946881312431E+00  5.07946881312431E+00  5.07946881312431E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.09797
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   92.571759 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.399685 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8426E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6343E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8794E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1100E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5461E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8426E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6343E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0645735058847    -2.065E+00 6.040E-04 9.470E-01
 scprqt: <Vxc>= -3.8291376E-01 hartree
 
Simple mixing update:
  residual square of the potential :  0.935665819151634
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.398647 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.382 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8434E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6374E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8802E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1087E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5466E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8434E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6374E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0645737402344    -2.343E-07 1.330E-03 5.467E-03
 scprqt: <Vxc>= -3.8299478E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.962      0.379E-01
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.398643 , with nelect=      3.000000
  Number of bissection calls =  43
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.380 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8433E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6379E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8802E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1096E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5466E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8433E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6379E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0645737666417    -2.641E-08 7.628E-04 7.984E-04
 scprqt: <Vxc>= -3.8296317E-01 hartree
 
 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.766      0.239     -0.473E-02
 
 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 newocc : new Fermi energy is       0.398646 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.380 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8433E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6380E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8802E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1091E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5466E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8433E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6380E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  4  -2.0645737709897    -4.348E-09 2.718E-03 2.070E-05
 scprqt: <Vxc>= -3.8297617E-01 hartree
 
 At SCF step    4, etot is converged : 
  for the second time, diff in etot=  4.348E-09 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.85488734E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.85488734E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.85488734E-06  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79362139454971E+00  1.79362139454971E+00  1.79362139454971E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59172684258579E+00  3.59172684258579E+00
  3.59172684258579E+00  0.00000000000000E+00  3.59172684258579E+00
  3.59172684258579E+00  3.59172684258579E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26701565618417E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07946881312431E+00  5.07946881312431E+00  5.07946881312431E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  2.85488734054007E-06  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  2.85488734054018E-06  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.85488734054007E-06
 Total energy (etotal) [Ha]= -2.06457377098974E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 5.50752E-04
           Relative     = 2.66728E-04
 fconv : at Broyd/MD step   5, gradients have not converged yet. 
  max grad (force/stress) = 2.8549E-04 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: ( 6/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79322269269637E+00  1.79322269269637E+00  1.79322269269637E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59092844212449E+00  3.59092844212449E+00
  3.59092844212449E+00  0.00000000000000E+00  3.59092844212449E+00
  3.59092844212449E+00  3.59092844212449E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26083716988511E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07833970436374E+00  5.07833970436374E+00  5.07833970436374E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.09888
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   92.612928 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.399024 , with nelect=      3.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6365E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1178E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5510E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6365E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0645302214626    -2.065E+00 1.745E-02 5.859E-03
 scprqt: <Vxc>= -3.8304673E-01 hartree
 
Simple mixing update:
  residual square of the potential :  5.775095560607206E-003
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.398944 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8462E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6367E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8819E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1177E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5510E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8462E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6367E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0645302235402    -2.078E-09 2.344E-02 5.803E-05
 scprqt: <Vxc>= -3.8305548E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.943      0.567E-01
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.398944 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8462E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1178E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5510E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8462E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0645302238229    -2.826E-10 6.697E-03 7.771E-06
 scprqt: <Vxc>= -3.8305201E-01 hartree
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  2.826E-10 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.57310083E-07  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.57310083E-07  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.57310083E-07  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79322269269637E+00  1.79322269269637E+00  1.79322269269637E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59092844212449E+00  3.59092844212449E+00
  3.59092844212449E+00  0.00000000000000E+00  3.59092844212449E+00
  3.59092844212449E+00  3.59092844212449E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26083716988511E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07833970436374E+00  5.07833970436374E+00  5.07833970436374E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.57310082602911E-07  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.57310082603019E-07  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.57310082602043E-07
 Total energy (etotal) [Ha]= -2.06453022382287E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 4.35472E-05
           Relative     = 2.10928E-05
 fconv : at Broyd/MD step   6, gradients have not converged yet. 
  max grad (force/stress) = 1.5731E-05 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: ( 7/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79324350148766E+00  1.79324350148766E+00  1.79324350148766E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59097011172904E+00  3.59097011172904E+00
  3.59097011172904E+00  0.00000000000000E+00  3.59097011172904E+00
  3.59097011172904E+00  3.59097011172904E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26115956553315E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07839863408364E+00  5.07839863408364E+00  5.07839863408364E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.09884
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   92.610778 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.398924 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8460E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8460E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0645325018318    -2.065E+00 4.294E-03 2.310E-05
 scprqt: <Vxc>= -3.8304981E-01 hartree
 
Simple mixing update:
  residual square of the potential :  2.234476552573578E-005
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.398929 , with nelect=      3.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8460E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8460E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0645325018600    -2.814E-11 2.485E-03 1.101E-06
 scprqt: <Vxc>= -3.8304858E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.846      0.154
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.398929 , with nelect=      3.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8460E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8460E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0645325018652    -5.220E-12 7.676E-03 6.759E-08
 scprqt: <Vxc>= -3.8304906E-01 hartree
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  5.220E-12 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.03307795E-08  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.03307795E-08  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.03307795E-08  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79324350148766E+00  1.79324350148766E+00  1.79324350148766E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59097011172904E+00  3.59097011172904E+00
  3.59097011172904E+00  0.00000000000000E+00  3.59097011172904E+00
  3.59097011172904E+00  3.59097011172904E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26115956553315E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07839863408364E+00  5.07839863408364E+00  5.07839863408364E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  3.03307795482136E-08  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  3.03307795482136E-08  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  3.03307795484304E-08
 Total energy (etotal) [Ha]= -2.06453250186520E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.27804E-06
           Relative     =-1.10342E-06
 fconv : at Broyd/MD step   7, gradients have not converged yet. 
  max grad (force/stress) = 3.0331E-06 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: ( 8/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79324013779985E+00  1.79324013779985E+00  1.79324013779985E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096337594419E+00  3.59096337594419E+00
  3.59096337594419E+00  0.00000000000000E+00  3.59096337594419E+00
  3.59096337594419E+00  3.59096337594419E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110745059541E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838910824535E+00  5.07838910824535E+00  5.07838910824535E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.09884
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   92.611126 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.398932 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8460E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8460E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0645321336737    -2.065E+00 3.962E-03 5.523E-07
 scprqt: <Vxc>= -3.8304948E-01 hartree
 
Simple mixing update:
  residual square of the potential :  5.373691969245128E-007
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0645321336742    -5.560E-13 1.914E-03 1.998E-08
 scprqt: <Vxc>= -3.8304965E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.870      0.130
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  46
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0645321336744    -1.421E-13 2.925E-04 1.604E-09
 scprqt: <Vxc>= -3.8304958E-01 hartree
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  1.421E-13 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.37627939E-09  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.37627939E-09  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.37627939E-09  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79324013779985E+00  1.79324013779985E+00  1.79324013779985E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096337594419E+00  3.59096337594419E+00
  3.59096337594419E+00  0.00000000000000E+00  3.59096337594419E+00
  3.59096337594419E+00  3.59096337594419E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110745059541E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838910824535E+00  5.07838910824535E+00  5.07838910824535E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.37627938592063E-09  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.37627938613747E-09  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.37627938624589E-09
 Total energy (etotal) [Ha]= -2.06453213367435E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 3.68191E-07
           Relative     = 1.78341E-07
 fconv : at Broyd/MD step   8, gradients have not converged yet. 
  max grad (force/stress) = 1.3763E-07 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: ( 9/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323997791634E+00  1.79323997791634E+00  1.79323997791634E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096305577748E+00  3.59096305577748E+00
  3.59096305577748E+00  0.00000000000000E+00  3.59096305577748E+00
  3.59096305577748E+00  3.59096305577748E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110497346230E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838865546124E+00  5.07838865546124E+00  5.07838865546124E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.09884
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   92.611142 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0645321161745    -2.065E+00 1.353E-04 9.353E-10
 scprqt: <Vxc>= -3.8304964E-01 hartree
 
Simple mixing update:
  residual square of the potential :  8.684996083270533E-010
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0645321161744     2.531E-14 6.210E-05 1.483E-10
 scprqt: <Vxc>= -3.8304963E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.786      0.214
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  40
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1173E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0645321161745    -4.619E-14 1.935E-04 5.054E-12
 scprqt: <Vxc>= -3.8304964E-01 hartree
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  4.619E-14 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.97348856E-10  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.97348855E-10  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  7.97348855E-10  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323997791634E+00  1.79323997791634E+00  1.79323997791634E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096305577748E+00  3.59096305577748E+00
  3.59096305577748E+00  0.00000000000000E+00  3.59096305577748E+00
  3.59096305577748E+00  3.59096305577748E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110497346230E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838865546124E+00  5.07838865546124E+00  5.07838865546124E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  7.97348855561056E-10  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  7.97348855452636E-10  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.97348855344215E-10
 Total energy (etotal) [Ha]= -2.06453211617448E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 1.74999E-08
           Relative     = 8.47643E-09
 fconv : at Broyd/MD step   9, gradients have not converged yet. 
  max grad (force/stress) = 7.9735E-08 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: (10/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323975771229E+00  1.79323975771229E+00  1.79323975771229E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096261481887E+00  3.59096261481887E+00
  3.59096261481887E+00  0.00000000000000E+00  3.59096261481887E+00
  3.59096261481887E+00  3.59096261481887E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110156176181E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838803185160E+00  5.07838803185160E+00  5.07838803185160E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.09884
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   92.611165 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1174E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0645320920904    -2.065E+00 8.916E-05 1.763E-09
 scprqt: <Vxc>= -3.8304967E-01 hartree
 
Simple mixing update:
  residual square of the potential :  1.738364326883069E-009
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1174E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0645320920904    -1.821E-14 4.095E-05 1.660E-11
 scprqt: <Vxc>= -3.8304968E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.945      0.549E-01
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1174E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6368E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0645320920904     1.021E-14 5.916E-06 2.298E-12
 scprqt: <Vxc>= -3.8304968E-01 hartree
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  1.021E-14 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -8.62916040E-10  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -8.62916039E-10  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -8.62916039E-10  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323975771229E+00  1.79323975771229E+00  1.79323975771229E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096261481887E+00  3.59096261481887E+00
  3.59096261481887E+00  0.00000000000000E+00  3.59096261481887E+00
  3.59096261481887E+00  3.59096261481887E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110156176181E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838803185160E+00  5.07838803185160E+00  5.07838803185160E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -8.62916039621672E-10  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -8.62916039404832E-10  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -8.62916039079571E-10
 Total energy (etotal) [Ha]= -2.06453209209044E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)= 2.40840E-08
           Relative     = 1.16656E-08
 fconv : at Broyd/MD step  10, gradients have not converged yet. 
  max grad (force/stress) = 8.6292E-08 > tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
 EXIT:           1           1
 
--- Iteration: (11/30) Internal Cycle: (1/1)
--------------------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323987216245E+00  1.79323987216245E+00  1.79323987216245E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096284400530E+00  3.59096284400530E+00
  3.59096284400530E+00  0.00000000000000E+00  3.59096284400530E+00
  3.59096284400530E+00  3.59096284400530E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110333497909E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838835597016E+00  5.07838835597016E+00  5.07838835597016E+00
 
---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  45
         ecut(hartree)=     22.050   => boxcut(ratio)=   4.09884
 
 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   92.611153 Hartrees makes boxcut=2
 
 
 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  47
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1174E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  1  -2.0645321046335    -2.065E+00 2.696E-06 4.688E-10
 scprqt: <Vxc>= -3.8304966E-01 hartree
 
Simple mixing update:
  residual square of the potential :  4.623967620010355E-010
 
 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  48
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1174E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  2  -2.0645321046335     4.041E-14 1.227E-06 4.124E-12
 scprqt: <Vxc>= -3.8304965E-01 hartree
 
 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.947      0.531E-01
 
 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 newocc : new Fermi energy is       0.398931 , with nelect=      3.000000
  Number of bissection calls =  45
 newocc : computed new occ. numbers for occopt=    6 , spin-unpolarized case.
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.005 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.378 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000 0.000 0.000 0.000 0.000 0.000
 2.000-0.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 2.000 2.000 0.000 0.000 0.000 0.000
 newocc : prtvol=0, stop printing more k-point informations
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
mkrho: echo density (plane-wave part only)
 Total kinetic energy density [Ha/Bohr^3]
,     Maximum=    1.8818E-02  at reduced coord.    0.1111    0.8889    0.8889
,     Minimum=    8.1174E-03  at reduced coord.    0.2444    0.2444    0.2444
,  Integrated=    9.5508E-01
 Total charge density [el/Bohr^3]
,     Maximum=    3.8461E-02  at reduced coord.    0.8222    0.8222    0.8444
,     Minimum=    3.6369E-03  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    3.0000E+00
 ETOT  3  -2.0645321046335    -6.350E-14 3.934E-06 5.531E-13
 scprqt: <Vxc>= -3.8304966E-01 hartree
 
 At SCF step    3, etot is converged : 
  for the second time, diff in etot=  6.350E-14 < toldfe=  3.675E-08
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.54238493E-12  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.54238514E-12  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.54238525E-12  sigma(2 1)=  0.00000000E+00
 
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
about to write to the DOS file
 tetrahedron : integrate to  1.20000000E+01
 
---OUTPUT-----------------------------------------------------------------------
 
 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 0.00000E+00 0.00000E+00 (free atoms)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 Scale of Primitive Cell (acell) [bohr]
  1.79323987216245E+00  1.79323987216245E+00  1.79323987216245E+00
 Real space primitive translations (rprimd) [bohr]
  0.00000000000000E+00  3.59096284400530E+00  3.59096284400530E+00
  3.59096284400530E+00  0.00000000000000E+00  3.59096284400530E+00
  3.59096284400530E+00  3.59096284400530E+00  0.00000000000000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  9.26110333497909E+01
 Angles (23,13,12)= [degrees]
  6.00000000000000E+01  6.00000000000000E+01  6.00000000000000E+01
 Lengths [Bohr]
  5.07838835597016E+00  5.07838835597016E+00  5.07838835597016E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.54238492637571E-12  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.54238514321614E-12  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.54238525163636E-12
 Total energy (etotal) [Ha]= -2.06453210463353E+00
 
 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.25431E-08
           Relative     =-6.07552E-09
 
 At Broyd/MD step  11, gradients are converged : 
  max grad (force/stress) = 1.5424E-10 < tolmxf= 1.0000E-08 ha/bohr (free atoms)
 
 Geometry Optimization Precondition:           0
================================================================================
 
 ----iterations are completed or convergence reached----
 
 
 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.54238493E-12  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.54238514E-12  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.54238525E-12  sigma(2 1)=  0.00000000E+00
 
-Cartesian components of stress tensor (GPa)         [Pressure=  4.5379E-08 GPa]
- sigma(1 1)= -4.53785236E-08  sigma(3 2)=  0.00000000E+00
- sigma(2 2)= -4.53785300E-08  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -4.53785332E-08  sigma(2 1)=  0.00000000E+00
 
== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.7932398722E+00  1.7932398722E+00  1.7932398722E+00 Bohr
              amu      2.69815390E+01
        autoparal           1
          dilatmx      1.80000000E+00
        dosdeltae      1.83746627E-03 Hartree
             ecut      2.20495952E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           enunit           1
           etotal     -2.0645321046E+00
            fcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
-          fftalg         312
           ionmov           2
           istwfk        2    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                       outvar_i_n : Printing only first  50 k-points.
              ixc     -263267
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  0.00000000E+00  0.00000000E+00
                       8.00000000E-02  0.00000000E+00  0.00000000E+00
                       1.20000000E-01  0.00000000E+00  0.00000000E+00
                       1.60000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.40000000E-01  0.00000000E+00  0.00000000E+00
                       2.80000000E-01  0.00000000E+00  0.00000000E+00
                       3.20000000E-01  0.00000000E+00  0.00000000E+00
                       3.60000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.40000000E-01  0.00000000E+00  0.00000000E+00
                       4.80000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  4.00000000E-02  0.00000000E+00
                       8.00000000E-02  4.00000000E-02  0.00000000E+00
                       1.20000000E-01  4.00000000E-02  0.00000000E+00
                       1.60000000E-01  4.00000000E-02  0.00000000E+00
                       2.00000000E-01  4.00000000E-02  0.00000000E+00
                       2.40000000E-01  4.00000000E-02  0.00000000E+00
                       2.80000000E-01  4.00000000E-02  0.00000000E+00
                       3.20000000E-01  4.00000000E-02  0.00000000E+00
                       3.60000000E-01  4.00000000E-02  0.00000000E+00
                       4.00000000E-01  4.00000000E-02  0.00000000E+00
                       4.40000000E-01  4.00000000E-02  0.00000000E+00
                       4.80000000E-01  4.00000000E-02  0.00000000E+00
                      -4.80000000E-01  4.00000000E-02  0.00000000E+00
                      -4.40000000E-01  4.00000000E-02  0.00000000E+00
                      -4.00000000E-01  4.00000000E-02  0.00000000E+00
                      -3.60000000E-01  4.00000000E-02  0.00000000E+00
                      -3.20000000E-01  4.00000000E-02  0.00000000E+00
                      -2.80000000E-01  4.00000000E-02  0.00000000E+00
                      -2.40000000E-01  4.00000000E-02  0.00000000E+00
                      -2.00000000E-01  4.00000000E-02  0.00000000E+00
                      -1.60000000E-01  4.00000000E-02  0.00000000E+00
                      -1.20000000E-01  4.00000000E-02  0.00000000E+00
                      -8.00000000E-02  4.00000000E-02  0.00000000E+00
                      -4.00000000E-02  4.00000000E-02  0.00000000E+00
                       8.00000000E-02  8.00000000E-02  0.00000000E+00
                       1.20000000E-01  8.00000000E-02  0.00000000E+00
                       1.60000000E-01  8.00000000E-02  0.00000000E+00
                       2.00000000E-01  8.00000000E-02  0.00000000E+00
                       2.40000000E-01  8.00000000E-02  0.00000000E+00
                       2.80000000E-01  8.00000000E-02  0.00000000E+00
                       3.20000000E-01  8.00000000E-02  0.00000000E+00
                       3.60000000E-01  8.00000000E-02  0.00000000E+00
                       4.00000000E-01  8.00000000E-02  0.00000000E+00
                       4.40000000E-01  8.00000000E-02  0.00000000E+00
                       4.80000000E-01  8.00000000E-02  0.00000000E+00
                      -4.80000000E-01  8.00000000E-02  0.00000000E+00
                      -4.40000000E-01  8.00000000E-02  0.00000000E+00
                       outvar_i_n : Printing only first  50 k-points.
         kptrlatt       25    0    0      0   25    0      0    0   25
          kptrlen      1.33790846E+02
P           mkmem          57
            natom           1
            nband           6
            ngfft          45      45      45
             nkpt         455
-           npkpt           8
            nstep          50
             nsym          48
            ntime          30
           ntypat           1
              occ      2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000 -0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.004727  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.378372  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000 -0.000211  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  0.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000 -0.000006  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
                       prtocc : prtvol=0, do not print more k-points.
           occopt           6
          optcell           1
           prtden           0
           prtdos           2
        prtposcar           1
            prtwf           0
            rprim      0.0000000000E+00  2.0025000000E+00  2.0025000000E+00
                       2.0025000000E+00  0.0000000000E+00  2.0025000000E+00
                       2.0025000000E+00  2.0025000000E+00  0.0000000000E+00
          spgroup         225
           strten     -1.5423849264E-12 -1.5423851432E-12 -1.5423852516E-12
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                       0 -1  1   0 -1  0   1 -1  0       0  1 -1   0  1  0  -1  1  0
                      -1  0  0  -1  0  1  -1  1  0       1  0  0   1  0 -1   1 -1  0
                       0  1 -1   1  0 -1   0  0 -1       0 -1  1  -1  0  1   0  0  1
                      -1  0  0  -1  1  0  -1  0  1       1  0  0   1 -1  0   1  0 -1
                       0 -1  1   1 -1  0   0 -1  0       0  1 -1  -1  1  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                       0  1 -1   0  0 -1   1  0 -1       0 -1  1   0  0  1  -1  0  1
                      -1  0  1  -1  1  0  -1  0  0       1  0 -1   1 -1  0   1  0  0
                       0 -1  0   1 -1  0   0 -1  1       0  1  0  -1  1  0   0  1 -1
                       1  0 -1   0  0 -1   0  1 -1      -1  0  1   0  0  1   0 -1  1
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       1  0 -1   0  1 -1   0  0 -1      -1  0  1   0 -1  1   0  0  1
                       0 -1  0   0 -1  1   1 -1  0       0  1  0   0  1 -1  -1  1  0
                      -1  0  1  -1  0  0  -1  1  0       1  0 -1   1  0  0   1 -1  0
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0  0 -1   0  1 -1   1  0 -1       0  0  1   0 -1  1  -1  0  1
                       1 -1  0   0 -1  1   0 -1  0      -1  1  0   0  1 -1   0  1  0
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                      -1  1  0  -1  0  0  -1  0  1       1 -1  0   1  0  0   1  0 -1
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       1 -1  0   0 -1  0   0 -1  1      -1  1  0   0  1  0   0  1 -1
                       0  0 -1   1  0 -1   0  1 -1       0  0  1  -1  0  1   0 -1  1
                      -1  1  0  -1  0  1  -1  0  0       1 -1  0   1  0 -1   1  0  0
           toldfe      3.67493254E-08 Hartree
           tolmxf      1.00000000E-08
           tsmear      7.34986508E-03 Hartree
            typat      1
          usekden           1
              wtk        0.00006    0.00051    0.00051    0.00051    0.00051    0.00051
                         0.00051    0.00051    0.00051    0.00051    0.00051    0.00051
                         0.00051    0.00038    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00077    0.00038    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154    0.00154    0.00154    0.00154    0.00154
                         0.00154    0.00154
                       outvars : Printing only first  50 k-points.
            znucl       13.00000
 
================================================================================
  

================================================================================

 Suggested references for the acknowledgment of ABINIT usage.

 The users of ABINIT have little formal obligations with respect to the ABINIT group
 (those specified in the GNU General Public License, http://www.gnu.org/copyleft/gpl.txt).
 However, it is common practice in the scientific literature,
 to acknowledge the efforts of people that have made the research possible.
 In this spirit, please find below suggested citations of work written by ABINIT developers,
 corresponding to implementations inside of ABINIT that you have used in the present run.
 Note also that it will be of great value to readers of publications presenting these results,
 to read papers enabling them to understand the theoretical formalism and details
 of the ABINIT implementation.
 For information on why they are suggested, see also http://www.abinit.org/about/?text=acknowledgments.

 [1] Libxc: A library of exchange and correlation functionals for density functional theory.
 M.A.L. Marques, M.J.T. Oliveira, T. Burnus, Computer Physics Communications 183, 2227 (2012).
 Comment : to be cited when LibXC is used (negative value of ixc)
 Strong suggestion to cite this paper.

 [2] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [3] ABINIT : First-principles approach of materials and nanosystem properties.
 X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
 D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
 S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
 M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
 M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
 Computer Phys. Comm. 180, 2582-2615 (2009).
 Comment : the third generic paper describing the ABINIT project.
 Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
 is available at http://www.abinit.org/about/ABINIT_CPC_v10.pdf .
 The licence allows the authors to put it on the Web.

 [4] A brief introduction to the ABINIT software package.
 X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
 M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
 L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
 Z. Kristallogr. 220, 558-562 (2005).
 Comment : the second generic paper describing the ABINIT project. Note that this paper
 should be cited especially if you are using the GW part of ABINIT, as several authors
 of this part are not in the list of authors of the first or third paper.
 The .pdf of the latter paper is available at http://www.abinit.org/about/zfk_0505-06_558-562.pdf.
 Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
 the licence allows the authors to put it on the Web).


 And optionally :

 [5] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.
 Proc.   0 individual time (sec): cpu=       1714.6  wall=       1713.8
 
 Calculation completed.
.Delivered    0 WARNINGs and  11 COMMENTs to log file.
--- !FinalSummary
start_date: Mon Dec  5 13:26:16 2016
end_date: Mon Dec  5 13:54:50 2016
overall_cpu_time:       13717.2
overall_wall_time:       13710.1
...
