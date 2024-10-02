c-3-1
  ABINIT 
  
  Give name for formatted input file: 
telast_1.in
  Give name for formatted output file:
telast_1.out
  Give root name for generic input files:
telast_1i
  Give root name for generic output files:
telast_1o
  Give root name for generic temporary files:
telast_1

.Version 7.8.1 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.8 computer) 

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

.Starting date : Thu 31 Jul 2014.
- ( at 00h14 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.8.1
  Build target  : x86_64_linux_gnu4.8
  Build date    : 20140729

 === Compiler Suite === 
  C compiler       : gnu4.8
  C++ compiler     : gnu4.8
  Fortran compiler : gnu4.8
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : amd_opteron

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw
  FFT flavor    : fftw3
  LINALG flavor : atlas
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : none

 === Experimental features === 
  Bindings            : @enable_bindings@
  Exports             : no
  GW double-precision : yes

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O2 -mtune=native -march=native


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
          HAVE_DFT_ATOMPAW            HAVE_DFT_LIBXC HAVE_FC_ALLOCATABLE_DT...
 
             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE  HAVE_FC_COMMAND_ARGUMENT
 
      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME
 
              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA
 
            HAVE_FC_GETENV          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG
 
     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES           HAVE_FC_PRIVATE
 
         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM
 
                  HAVE_FFT            HAVE_FFT_FFTW3              HAVE_FFT_MPI
 
           HAVE_FFT_SERIAL          HAVE_FORTRAN2003               HAVE_GW_DPC
 
        HAVE_LIBPAW_ABINIT               HAVE_LINALG        HAVE_LINALG_SERIAL
 
                  HAVE_MPI                 HAVE_MPI2               HAVE_MPI_IO
 
 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX                HAVE_TIMER
 
         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI         HAVE_TIMER_SERIAL
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> telast_1.in
- output file    -> telast_1.out
- root for input  files -> telast_1i
- root for output files -> telast_1o

-instrng :    98 lines of input have been read from file telast_1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 03-Li.GGA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 26-Fe.GGA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is 15-P.GGA.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   4 , psp file is 08-O.GGA.fhi
  read the values zionpsp=  1.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  8.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  5.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  6.0 , pspcod=   6 , lmax=   3

 inpspheads: deduce mpsang  =   4, n1xccc  =2501.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2   -1  0  0  0 -1  0  0  0  1    5.00E-01    0.00E+00    5.00E-01  1
  3   -1  0  0  0  1  0  0  0 -1    0.00E+00    5.00E-01    0.00E+00  1
  4    1  0  0  0 -1  0  0  0 -1    5.00E-01    5.00E-01    5.00E-01  1
  the choosen orientation corresponds to: abc; the proper one

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
 symspgr : spgroup=  62  Pn m a   (=D2h^16)
       Simple Lattice Grid

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred
  Describe the different generators (index,symrel,tnons,symafm)
  1    1  0  0  0  1  0  0  0  1    0.00E+00    0.00E+00    0.00E+00  1
  2   -1  0  0  0 -1  0  0  0  1    5.00E-01    0.00E+00    5.00E-01  1
  3   -1  0  0  0  1  0  0  0 -1    0.00E+00    5.00E-01    0.00E+00  1
  4    1  0  0  0 -1  0  0  0 -1    5.00E-01    5.00E-01    5.00E-01  1
  the choosen orientation corresponds to: abc; the proper one

 symlatt : the Bravais lattice is oP (primitive orthorhombic)

 symlatt : the Bravais lattice is oP (primitive orthorhombic)
 symspgr : spgroup=  62  Pn m a   (=D2h^16)
       Simple Lattice Grid
 invars2: take the default value of fband=  1.25000000E-01
       Simple Lattice Grid
  dtset%nelect=   152.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
 invars2: take the default value of fband=  1.25000000E-01
       Simple Lattice Grid
  dtset%nelect=   152.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
 getmpw sequential formula gave:     5456

 Computing all possible proc distrib for this input with nproc less than 40
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->   40|   1 ->    1|   1 ->   18|   1 ->   40|   1 ->    8|   2 ->   40|   1 ->   40|
           1|          40|           1|           1|           1|           1|          40|      38.51 |
           1|          20|           1|           2|           1|           1|          40|      37.67 |
           1|          20|           1|           1|           2|           1|          40|      37.67 |
           1|          10|           1|           1|           4|           1|          40|      36.00 |
           1|          10|           1|           2|           2|           1|          40|      36.00 |
npfft, npband, npspinor and npkpt:     1    1    1   40
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 40, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 40, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 40, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !COMMENT
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 1
src_file: getng.F90
src_line: 204
...

 For input ecut=  1.500000E+01 best grid ngfft=      72      40      32
       max ecut=  1.530323E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    72   40   32
  Augmented FFT divisions ...................    73   41   32
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    5490
 getmpw sequential formula gave:     6316

 Computing all possible proc distrib for this input with nproc less than 40
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|   1 ->   40|   1 ->    1|   1 ->   20|   1 ->   40|   1 ->    8|   2 ->   40|   1 ->   40|
           1|          40|           1|           1|           1|           1|          40|      38.51 |
           1|          20|           1|           2|           1|           1|          40|      37.67 |
           1|          20|           1|           1|           2|           1|          40|      37.67 |
           1|          10|           1|           2|           2|           1|          40|      36.00 |
           1|          10|           1|           1|           4|           1|          40|      36.00 |
npfft, npband, npspinor and npkpt:     1    1    1   40
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 40, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 40, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 40, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  1.653750E+01 best grid ngfft=      72      45      36
       max ecut=  1.677677E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    72   45   36
  Augmented FFT divisions ...................    73   45   36
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    6340

 DATASET    1 : space group Pn m a (# 62); Bravais oP (primitive ortho.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        80  mffmem =         1
P  mgfft =        72   mkmem =         1 mpssoang=         4     mpw =      5490
  mqgrid =      3405   natom =        28    nfft =     92160    nkpt =        40
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         8  n1xccc =      2501  ntypat =         4  occopt =         1
================================================================================
P This job should need less than                      39.838 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    268.068 Mbytes ; DEN or POT disk file :      0.705 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     11.2520 MBytes.
 memana : allocated an array of     11.252 Mbytes, for testing purposes.
 memana : allocated      39.838 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : space group Pn m a (# 62); Bravais oP (primitive ortho.)

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         2    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        80  mffmem =         1
P  mgfft =        72   mkmem =         1 mpssoang=         4     mpw =      6340
  mqgrid =      3575   natom =        28    nfft =    116640    nkpt =        40
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         8  n1xccc =      2501  ntypat =         4  occopt =         1
================================================================================
P This job should need less than                      48.046 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    309.572 Mbytes ; DEN or POT disk file :      0.892 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     14.2403 MBytes.
 memana : allocated an array of     14.240 Mbytes, for testing purposes.
 memana : allocated      48.046 Mbytes, for testing purposes. 
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
            acell      1.9524648914E+01  1.1357253191E+01  8.8665943380E+00 Bohr
              amu      6.94100000E+00  5.58470000E+01  3.09737620E+01
                       1.59994000E+01
        autoparal           1
           diemac      2.00000000E+00
          dilatmx1     1.00000000E+00
          dilatmx2     1.05000000E+00
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
-          fftalg         312
           getwfk1          0
           getwfk2         -1
          getxred1          0
          getxred2         -1
           iatfix        1    7   13   19
          iatfixy        2    3    4    5    8    9   10   11   14   15
                        16   17   20   21   22   23
           ionmov           2
              ixc          11
           jdtset        1    2
              kpt      1.25000000E-01  7.14285714E-02  5.55555556E-02
                       3.75000000E-01  7.14285714E-02  5.55555556E-02
                       1.25000000E-01  2.14285714E-01  5.55555556E-02
                       3.75000000E-01  2.14285714E-01  5.55555556E-02
                       1.25000000E-01  3.57142857E-01  5.55555556E-02
                       3.75000000E-01  3.57142857E-01  5.55555556E-02
                       1.25000000E-01  5.00000000E-01  5.55555556E-02
                       3.75000000E-01  5.00000000E-01  5.55555556E-02
                       1.25000000E-01  7.14285714E-02  1.66666667E-01
                       3.75000000E-01  7.14285714E-02  1.66666667E-01
                       1.25000000E-01  2.14285714E-01  1.66666667E-01
                       3.75000000E-01  2.14285714E-01  1.66666667E-01
                       1.25000000E-01  3.57142857E-01  1.66666667E-01
                       3.75000000E-01  3.57142857E-01  1.66666667E-01
                       1.25000000E-01  5.00000000E-01  1.66666667E-01
                       3.75000000E-01  5.00000000E-01  1.66666667E-01
                       1.25000000E-01  7.14285714E-02  2.77777778E-01
                       3.75000000E-01  7.14285714E-02  2.77777778E-01
                       1.25000000E-01  2.14285714E-01  2.77777778E-01
                       3.75000000E-01  2.14285714E-01  2.77777778E-01
                       1.25000000E-01  3.57142857E-01  2.77777778E-01
                       3.75000000E-01  3.57142857E-01  2.77777778E-01
                       1.25000000E-01  5.00000000E-01  2.77777778E-01
                       3.75000000E-01  5.00000000E-01  2.77777778E-01
                       1.25000000E-01  7.14285714E-02  3.88888889E-01
                       3.75000000E-01  7.14285714E-02  3.88888889E-01
                       1.25000000E-01  2.14285714E-01  3.88888889E-01
                       3.75000000E-01  2.14285714E-01  3.88888889E-01
                       1.25000000E-01  3.57142857E-01  3.88888889E-01
                       3.75000000E-01  3.57142857E-01  3.88888889E-01
                       1.25000000E-01  5.00000000E-01  3.88888889E-01
                       3.75000000E-01  5.00000000E-01  3.88888889E-01
                       1.25000000E-01  7.14285714E-02  5.00000000E-01
                       3.75000000E-01  7.14285714E-02  5.00000000E-01
                       1.25000000E-01  2.14285714E-01  5.00000000E-01
                       3.75000000E-01  2.14285714E-01  5.00000000E-01
                       1.25000000E-01  3.57142857E-01  5.00000000E-01
                       3.75000000E-01  3.57142857E-01  5.00000000E-01
                       1.25000000E-01  5.00000000E-01  5.00000000E-01
                       3.75000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    7    0      0    0    9
          kptrlen      7.80985957E+01
P           mkmem           1
           natfix           4
          natfixy          16
            natom          28
            nband          80
           ndtset           2
            ngfft1         72      40      32
            ngfft2         72      45      36
             nkpt          40
-           npkpt          40
            nstep          40
             nsym           8
            ntime1          5
            ntime2         12
           ntypat           4
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
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000
          optcell1          0
          optcell2          2
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup          62
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0 -1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.5000000  0.0000000     0.5000000  0.5000000  0.5000000
                      -0.0000000 -0.0000000 -0.0000000     0.5000000 -0.0000000  0.5000000
                      -0.0000000  0.5000000 -0.0000000     0.5000000  0.5000000  0.5000000
           tolmxf      1.00000000E-06
           tolvrs      1.00000000E-10
            typat      1  2  3  4  4  4  1  2  3  4  4  4  1  2  3  4  4  4  1  2
                       3  4  4  4  4  4  4  4
              wtk        0.03175    0.03175    0.03175    0.03175    0.03175    0.03175
                         0.01587    0.01587    0.03175    0.03175    0.03175    0.03175
                         0.03175    0.03175    0.01587    0.01587    0.03175    0.03175
                         0.03175    0.03175    0.03175    0.03175    0.01587    0.01587
                         0.03175    0.03175    0.03175    0.03175    0.03175    0.03175
                         0.01587    0.01587    0.01587    0.01587    0.01587    0.01587
                         0.01587    0.01587    0.00794    0.00794
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.9158968173E+00  1.5024998852E+00  4.5733858905E+00
                       9.8009344516E-01  1.5024998852E+00  1.9621942501E+00
                       9.9993088364E-01  1.5024998852E+00  3.4851704137E+00
                       4.7227568394E+00  1.5024998852E+00  9.6664576614E-01
                       1.7107724294E+00  2.7922457867E-01  1.3361876579E+00
                       5.1659996055E+00  0.0000000000E+00  2.3459998207E+00
                       2.2501027882E+00  4.5074996556E+00  2.2273860698E+00
                       4.1859061603E+00  4.5074996556E+00  4.3081940708E+00
                       4.1660687219E+00  4.5074996556E+00  1.1391705930E+00
                       4.4324276615E-01  4.5074996556E+00  3.3126455869E+00
                       3.4552271761E+00  5.7307749622E+00  3.6821874786E+00
                       0.0000000000E+00  3.0049997704E+00  0.0000000000E+00
                       7.4161023937E+00  4.5074996556E+00  1.1861375094E-01
                       9.3519057659E+00  4.5074996556E+00  2.7298053914E+00
                       9.3320683274E+00  4.5074996556E+00  1.2068292278E+00
                       5.6092423717E+00  4.5074996556E+00  3.7253538753E+00
                       8.6212267817E+00  3.2842243491E+00  3.3558119836E+00
                       5.1659996055E+00  3.0049997704E+00  2.3459998207E+00
                       8.0818964228E+00  1.5024998852E+00  2.4646135717E+00
                       6.1460930507E+00  1.5024998852E+00  3.8380557067E-01
                       6.1659304891E+00  1.5024998852E+00  3.5528290485E+00
                       9.8887564449E+00  1.5024998852E+00  1.3793540546E+00
                       6.8767720349E+00  2.7257751918E+00  1.0098121628E+00
                       8.6212267817E+00  5.7307749622E+00  3.3558119836E+00
                       6.8767720349E+00  2.7922457867E-01  1.0098121628E+00
                       1.7107724294E+00  2.7257751918E+00  1.3361876579E+00
                       3.4552271761E+00  3.2842243491E+00  3.6821874786E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.5102464165E+00  2.8393132977E+00  8.6424468331E+00
                       1.8521081960E+00  2.8393132977E+00  3.7080097522E+00
                       1.8895955219E+00  2.8393132977E+00  6.5860176083E+00
                       8.9247170186E+00  2.8393132977E+00  1.8266957655E+00
                       3.2328913672E+00  5.2765798325E-01  2.5250287356E+00
                       9.7623244570E+00  0.0000000000E+00  4.4332971690E+00
                       4.2520780405E+00  8.5179398933E+00  4.2091496641E+00
                       7.9102162610E+00  8.5179398933E+00  8.1413069212E+00
                       7.8727289351E+00  8.5179398933E+00  2.1527204393E+00
                       8.3760743841E-01  8.5179398933E+00  6.2599929345E+00
                       6.5294330898E+00  1.0829595208E+01  6.9583259046E+00
                       0.0000000000E+00  5.6786265955E+00  0.0000000000E+00
                       1.4014402497E+01  8.5179398933E+00  2.2414750486E-01
                       1.7672540718E+01  8.5179398933E+00  5.1585845858E+00
                       1.7635053392E+01  8.5179398933E+00  2.2805767297E+00
                       1.0599931895E+01  8.5179398933E+00  7.0398985725E+00
                       1.6291757547E+01  6.2062845788E+00  6.3415656024E+00
                       9.7623244570E+00  5.6786265955E+00  4.4332971690E+00
                       1.5272570874E+01  2.8393132977E+00  4.6574446739E+00
                       1.1614432653E+01  2.8393132977E+00  7.2528741685E-01
                       1.1651919979E+01  2.8393132977E+00  6.7138738987E+00
                       1.8687041476E+01  2.8393132977E+00  2.6066014035E+00
                       1.2995215824E+01  5.1509686122E+00  1.9082684334E+00
                       1.6291757547E+01  1.0829595208E+01  6.3415656024E+00
                       1.2995215824E+01  5.2765798325E-01  1.9082684334E+00
                       3.2328913672E+00  5.1509686122E+00  2.5250287356E+00
                       6.5294330898E+00  6.2062845788E+00  6.9583259046E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.8222000000E-01  2.5000000000E-01  9.7472000000E-01
                       9.4860000000E-02  2.5000000000E-01  4.1820000000E-01
                       9.6780000000E-02  2.5000000000E-01  7.4279000000E-01
                       4.5710000000E-01  2.5000000000E-01  2.0602000000E-01
                       1.6558000000E-01  4.6460000000E-02  2.8478000000E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       2.1778000000E-01  7.5000000000E-01  4.7472000000E-01
                       4.0514000000E-01  7.5000000000E-01  9.1820000000E-01
                       4.0322000000E-01  7.5000000000E-01  2.4279000000E-01
                       4.2900000000E-02  7.5000000000E-01  7.0602000000E-01
                       3.3442000000E-01  9.5354000000E-01  7.8478000000E-01
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       7.1778000000E-01  7.5000000000E-01  2.5280000000E-02
                       9.0514000000E-01  7.5000000000E-01  5.8180000000E-01
                       9.0322000000E-01  7.5000000000E-01  2.5721000000E-01
                       5.4290000000E-01  7.5000000000E-01  7.9398000000E-01
                       8.3442000000E-01  5.4646000000E-01  7.1522000000E-01
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       7.8222000000E-01  2.5000000000E-01  5.2528000000E-01
                       5.9486000000E-01  2.5000000000E-01  8.1800000000E-02
                       5.9678000000E-01  2.5000000000E-01  7.5721000000E-01
                       9.5710000000E-01  2.5000000000E-01  2.9398000000E-01
                       6.6558000000E-01  4.5354000000E-01  2.1522000000E-01
                       8.3442000000E-01  9.5354000000E-01  7.1522000000E-01
                       6.6558000000E-01  4.6460000000E-02  2.1522000000E-01
                       1.6558000000E-01  4.5354000000E-01  2.8478000000E-01
                       3.3442000000E-01  5.4646000000E-01  7.8478000000E-01
            znucl        3.00000   26.00000   15.00000    8.00000

================================================================================

 chkinp: machine precision is   2.2204460492503131E-16

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.
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
  xmpi_tag_ub ................   1073741824
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
-   nproc =   40


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Unit cell volume ucvol=  1.9661352E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  40  32
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.02011
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 03-Li.GGA.fhi
- pspatm: opening atomic psp file    03-Li.GGA.fhi
- lithium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  3.00000   1.00000     21003                znucl, zion, pspdat
    6   11    3    2       433   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    4.64900000000000    1.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    1.23671241
         --- l  ekb(1:nproj) -->
             0    0.973348
             1   -0.648459
             3   -0.970140
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 26-Fe.GGA.fhi
- pspatm: opening atomic psp file    26-Fe.GGA.fhi
- iron, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
- 26.00000   8.00000     11001                znucl, zion, pspdat
    6   11    3    1       521   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   55.77939889
         --- l  ekb(1:nproj) -->
             0   -1.869362
             2   -7.454216
             3   -1.202972
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is 15-P.GGA.fhi
- pspatm: opening atomic psp file    15-P.GGA.fhi
- phosphorus, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
- 15.00000   5.00000     21003                znucl, zion, pspdat
    6   11    3    2       499   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    1.26983417
         --- l  ekb(1:nproj) -->
             0    4.175676
             1    2.277966
             3   -1.487146
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   4  psp file is 08-O.GGA.fhi
- pspatm: opening atomic psp file    08-O.GGA.fhi
- oxygen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  8.00000   6.00000     21003                znucl, zion, pspdat
    6   11    3    2       473   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    3.69310156
         --- l  ekb(1:nproj) -->
             0    2.919212
             1   -2.890047
             3   -3.320245
 pspatm: atomic psp has been read  and splines computed

   4.44194779E+04                                ecore*ucvol(ha*bohr**3)
   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 wfconv:    80 bands initialized randomly with npw=  5455, for ikpt=     1

_setup2: Arith. and geom. avg. npw (full set) are    5455.079    5455.070
 initro : for itypat=  1, take decay length=      1.8000,
 initro : indeed, coreel=      2.0000, nval=  1 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.8000,
 initro : indeed, coreel=     18.0000, nval=  8 and densty=  0.0000E+00.
 initro : for itypat=  3, take decay length=      1.0000,
 initro : indeed, coreel=     10.0000, nval=  5 and densty=  0.0000E+00.
 initro : for itypat=  4, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.

================================================================================

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: (1/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.51024641650908E+00  2.83931329775000E+00  8.64244683313536E+00
  1.85210819598204E+00  2.83931329775000E+00  3.70800975215160E+00
  1.88959552189692E+00  2.83931329775000E+00  6.58601760832302E+00
  8.92471701858940E+00  2.83931329775000E+00  1.82669576551476E+00
  3.23289136718012E+00  5.27657983253860E-01  2.52502873557564E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.25207804049092E+00  8.51793989325000E+00  4.20914966413536E+00
  7.91021626101796E+00  8.51793989325000E+00  8.14130692115160E+00
  7.87272893510308E+00  8.51793989325000E+00  2.15272043932302E+00
  8.37607438410601E-01  8.51793989325000E+00  6.25999293451476E+00
  6.52943308981988E+00  1.08295952077461E+01  6.95832590457564E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.40144024974909E+01  8.51793989325000E+00  2.24147504864640E-01
  1.76725407180180E+01  8.51793989325000E+00  5.15858458584840E+00
  1.76350533921031E+01  8.51793989325000E+00  2.28057672967698E+00
  1.05999318954106E+01  8.51793989325000E+00  7.03989857248524E+00
  1.62917575468199E+01  6.20628457875386E+00  6.34156560242436E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.52725708735091E+01  2.83931329775000E+00  4.65744467386464E+00
  1.16144326529820E+01  2.83931329775000E+00  7.25287416848400E-01
  1.16519199788969E+01  2.83931329775000E+00  6.71387389867698E+00
  1.86870414755894E+01  2.83931329775000E+00  2.60660140348524E+00
  1.29952158241801E+01  5.15096861224614E+00  1.90826843342436E+00
  1.62917575468199E+01  1.08295952077461E+01  6.34156560242436E+00
  1.29952158241801E+01  5.27657983253860E-01  1.90826843342436E+00
  3.23289136718012E+00  5.15096861224614E+00  2.52502873557564E+00
  6.52943308981988E+00  6.20628457875386E+00  6.95832590457564E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.82220000000000E-01  2.50000000000000E-01  9.74720000000000E-01
  9.48600000000000E-02  2.50000000000000E-01  4.18200000000000E-01
  9.67800000000000E-02  2.50000000000000E-01  7.42790000000000E-01
  4.57100000000000E-01  2.50000000000000E-01  2.06020000000000E-01
  1.65580000000000E-01  4.64600000000000E-02  2.84780000000000E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.17780000000000E-01  7.50000000000000E-01  4.74720000000000E-01
  4.05140000000000E-01  7.50000000000000E-01  9.18200000000000E-01
  4.03220000000000E-01  7.50000000000000E-01  2.42790000000000E-01
  4.29000000000000E-02  7.50000000000000E-01  7.06020000000000E-01
  3.34420000000000E-01  9.53540000000000E-01  7.84780000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.17780000000000E-01  7.50000000000000E-01  2.52800000000000E-02
  9.05140000000000E-01  7.50000000000000E-01  5.81800000000000E-01
  9.03220000000000E-01  7.50000000000000E-01  2.57210000000000E-01
  5.42900000000000E-01  7.50000000000000E-01  7.93980000000000E-01
  8.34420000000000E-01  5.46460000000000E-01  7.15220000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.82220000000000E-01  2.50000000000000E-01  5.25280000000000E-01
  5.94860000000000E-01  2.50000000000000E-01  8.18000000000000E-02
  5.96780000000000E-01  2.50000000000000E-01  7.57210000000000E-01
  9.57100000000000E-01  2.50000000000000E-01  2.93980000000000E-01
  6.65580000000000E-01  4.53540000000000E-01  2.15220000000000E-01
  8.34420000000000E-01  9.53540000000000E-01  7.15220000000000E-01
  6.65580000000000E-01  4.64600000000000E-02  2.15220000000000E-01
  1.65580000000000E-01  4.53540000000000E-01  2.84780000000000E-01
  3.34420000000000E-01  5.46460000000000E-01  7.84780000000000E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  40  32
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.02011

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    9.3307E-01  at reduced coord.    0.7222    0.7500    0.9375
,     Minimum=    9.9098E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -337.89278399879    -3.379E+02 1.842E-01 1.208E+04
 scprqt: <Vxc>= -3.7949205E-01 hartree

Simple mixing update:
  residual square of the potential :   7480.3938779767586

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    1.1072E+00  at reduced coord.    0.3333    0.9750    0.8438
,     Minimum=    5.1583E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT  2  -306.33370417255     3.156E+01 5.026E-02 7.679E+04
 scprqt: <Vxc>= -3.7347364E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.291      0.709

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    9.4051E-01  at reduced coord.    0.3056    0.9500    0.7813
,     Minimum=    9.1654E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -328.61800316877    -2.228E+01 3.638E-02 2.136E+04
 scprqt: <Vxc>= -4.0601204E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.540     -0.722E-01  0.532

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.4337E-01  at reduced coord.    0.3056    0.9500    0.7813
,     Minimum=    5.9896E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -349.95833221420    -2.134E+01 8.488E-02 6.493E+02
 scprqt: <Vxc>= -3.7831499E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.435      0.300     -0.194E-01  0.284

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.0074E-01  at reduced coord.    0.0833    0.2750    0.7813
,     Minimum=    4.6060E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -350.79333196185    -8.350E-01 4.856E-02 1.233E+03
 scprqt: <Vxc>= -3.7899255E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.731     -0.555E-01  0.170      0.415E-01  0.113

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.1421E-01  at reduced coord.    0.5417    0.8000    0.7813
,     Minimum=    4.5990E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -351.38592261647    -5.926E-01 5.912E-02 3.682E+02
 scprqt: <Vxc>= -3.7951342E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.555      0.378     -0.151      0.106      0.442E-01

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.0575E-01  at reduced coord.    0.0833    0.2750    0.7813
,     Minimum=    4.7184E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -351.65065124060    -2.647E-01 2.458E-02 9.477E+01
 scprqt: <Vxc>= -3.8011345E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.573      0.359      0.666E-01 -0.130      0.504E-01

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.2907E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.8731E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -351.79563574566    -1.450E-01 1.055E-02 1.602E+01
 scprqt: <Vxc>= -3.8041139E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.242      0.390      0.221      0.133     -0.113

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.4732E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.7862E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -351.85623452583    -6.060E-02 5.701E-03 2.629E+01
 scprqt: <Vxc>= -3.7981045E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.578      0.784      0.614      0.190      0.142

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.3689E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.8990E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -351.89442413447    -3.819E-02 3.891E-03 1.529E+01
 scprqt: <Vxc>= -3.8042388E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.499      -1.53       1.50      0.605     -0.878E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.7130E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.7952E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -351.91525298368    -2.083E-02 2.520E-03 2.104E+01
 scprqt: <Vxc>= -3.7911154E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.48      0.535      -6.02       3.48       1.53

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.4127E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.8566E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -351.85210274583     6.315E-02 5.151E-03 4.406E+01
 scprqt: <Vxc>= -3.7990893E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.238       1.62      0.969      -7.86       4.21

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.1127E-01  at reduced coord.    0.5972    0.3000    0.7500
,     Minimum=    4.8575E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -351.66668269009     1.854E-01 4.189E-03 9.705E+01
 scprqt: <Vxc>= -3.7977011E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.252     -0.225       1.30      0.562      -5.63

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.3871E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.8631E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -351.82116989688    -1.545E-01 1.784E-03 5.971E+01
 scprqt: <Vxc>= -3.8010082E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.968      0.174      -1.05       1.31      0.965

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.0817E-01  at reduced coord.    0.5972    0.3000    0.7500
,     Minimum=    4.8287E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -351.76629267719     5.488E-02 1.725E-03 5.375E+01
 scprqt: <Vxc>= -3.7974708E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.71       1.82     -0.297      -4.38      0.455

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.4648E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9136E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -351.85624416175    -8.995E-02 6.515E-03 2.517E+01
 scprqt: <Vxc>= -3.8072553E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.453       1.90      0.686      0.312      -3.58

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.4339E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.8843E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 17  -351.90332504122    -4.708E-02 7.776E-03 1.902E+01
 scprqt: <Vxc>= -3.8053584E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.717      0.404       1.61     -0.936       1.07

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.0402E-01  at reduced coord.    0.3056    0.9500    0.7813
,     Minimum=    4.9133E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -351.82462379271     7.870E-02 3.510E-03 1.521E+01
 scprqt: <Vxc>= -3.8086890E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.950      0.500      0.127      0.757      -1.89

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.0937E-01  at reduced coord.    0.3056    0.9500    0.7813
,     Minimum=    4.9025E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -351.75213050839     7.249E-02 1.114E-02 1.499E+01
 scprqt: <Vxc>= -3.8050217E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.185      0.772      0.537      0.160      0.598

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.1716E-01  at reduced coord.    0.2778    0.3000    0.9063
,     Minimum=    4.8965E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -351.74340501426     8.725E-03 3.008E-03 1.720E+01
 scprqt: <Vxc>= -3.8024412E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.35       1.87      0.696      0.182      0.102

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    8.0821E-01  at reduced coord.    0.3056    0.9500    0.7813
,     Minimum=    4.8525E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 21  -351.75913952043    -1.573E-02 5.397E-03 1.274E+01
 scprqt: <Vxc>= -3.8026683E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.69      -3.06       2.28     -0.307E-01  0.907E-01

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    8.6309E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.3204E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 22  -351.91965895742    -1.605E-01 9.197E-04 3.159E+01
 scprqt: <Vxc>= -3.8064455E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.584       1.01      -3.85       4.17      0.353

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    8.4382E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.8062E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 23  -351.92062760440    -9.686E-04 1.950E-03 3.132E+01
 scprqt: <Vxc>= -3.7974639E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.654      0.450       1.47      -6.30       6.41

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    8.5753E-01  at reduced coord.    0.2639    0.7500    0.5000
,     Minimum=    4.8335E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 24  -351.93772066535    -1.709E-02 3.529E-04 3.520E+01
 scprqt: <Vxc>= -3.7926673E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.361      0.414      0.355      0.930      -6.78

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    8.7447E-01  at reduced coord.    0.2639    0.7500    0.5000
,     Minimum=    4.8155E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 25  -351.93531963198     2.401E-03 9.484E-04 3.981E+01
 scprqt: <Vxc>= -3.7913581E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09     -0.820     -0.246      0.216       1.79

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    8.7165E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.2820E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 26  -351.94476910813    -9.449E-03 1.142E-03 2.641E+01
 scprqt: <Vxc>= -3.7919871E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.808       1.45      -1.35     -0.416      0.441E-01

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    8.9099E-01  at reduced coord.    0.2639    0.7500    0.5000
,     Minimum=    4.7899E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 27  -351.93485263431     9.916E-03 1.030E-02 2.951E+01
 scprqt: <Vxc>= -3.7860749E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.729     -0.547E-01 -0.573     -0.581      0.734

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 Total charge density [el/Bohr^3]
,     Maximum=    8.7701E-01  at reduced coord.    0.2639    0.7500    0.5000
,     Minimum=    4.9128E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 28  -351.95340239190    -1.855E-02 1.418E-03 7.128E+00
 scprqt: <Vxc>= -3.7964373E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.794      0.473     -0.922E-01  -1.08      0.171E-01

 ITER STEP NUMBER    29
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 29
 Total charge density [el/Bohr^3]
,     Maximum=    8.9348E-01  at reduced coord.    0.2639    0.7500    0.5000
,     Minimum=    4.8747E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 29  -351.95825952191    -4.857E-03 4.952E-04 2.603E+00
 scprqt: <Vxc>= -3.7971033E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.530      0.362      0.412     -0.192     -0.865

 ITER STEP NUMBER    30
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 30
 Total charge density [el/Bohr^3]
,     Maximum=    8.7717E-01  at reduced coord.    0.2639    0.7500    0.5000
,     Minimum=    4.6902E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 30  -351.96084977392    -2.590E-03 5.109E-04 6.898E-01
 scprqt: <Vxc>= -3.7981249E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.613E-01 -0.138      0.117     -0.105

 ITER STEP NUMBER    31
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 31
 Total charge density [el/Bohr^3]
,     Maximum=    8.8801E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6440E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 31  -351.96184314934    -9.934E-04 2.868E-04 1.195E-01
 scprqt: <Vxc>= -3.7978127E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.727      0.456     -0.125     -0.842E-01  0.441E-01

 ITER STEP NUMBER    32
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 32
 Total charge density [el/Bohr^3]
,     Maximum=    8.8518E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6615E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 32  -351.96213031028    -2.872E-04 4.554E-04 7.760E-02
 scprqt: <Vxc>= -3.7984355E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.862      0.404     -0.296      0.627E-02  0.280E-01

 ITER STEP NUMBER    33
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 33
 Total charge density [el/Bohr^3]
,     Maximum=    8.9271E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6364E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 33  -351.96242628265    -2.960E-04 2.164E-04 2.353E-02
 scprqt: <Vxc>= -3.7977858E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.772      0.274     -0.354E-01 -0.143E-02 -0.113E-01

 ITER STEP NUMBER    34
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 34
 Total charge density [el/Bohr^3]
,     Maximum=    8.8981E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6160E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 34  -351.96254869174    -1.224E-04 3.237E-04 2.061E-02
 scprqt: <Vxc>= -3.7981994E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.30      0.387     -0.293     -0.377     -0.592E-01

 ITER STEP NUMBER    35
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 35
 Total charge density [el/Bohr^3]
,     Maximum=    8.9608E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6258E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 35  -351.96273662039    -1.879E-04 1.710E-04 2.355E-02
 scprqt: <Vxc>= -3.7977603E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.217       1.10      0.201     -0.227     -0.293

 ITER STEP NUMBER    36
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 36
 Total charge density [el/Bohr^3]
,     Maximum=    8.9425E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6055E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 36  -351.96279266835    -5.605E-05 1.825E-04 6.253E-03
 scprqt: <Vxc>= -3.7980574E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.361      0.371E-01  0.794      0.226     -0.188

 ITER STEP NUMBER    37
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 37
 Total charge density [el/Bohr^3]
,     Maximum=    8.9516E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6116E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 37  -351.96280852060    -1.585E-05 1.353E-04 1.167E-02
 scprqt: <Vxc>= -3.7979345E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.969      0.363      0.802      0.942      0.177

 ITER STEP NUMBER    38
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 38
 Total charge density [el/Bohr^3]
,     Maximum=    8.9391E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6091E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 38  -351.96276827455     4.025E-05 1.179E-04 1.621E-02
 scprqt: <Vxc>= -3.7980681E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.59       2.65      0.673      -1.15      0.402

 ITER STEP NUMBER    39
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 39
 Total charge density [el/Bohr^3]
,     Maximum=    8.9653E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.6030E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 39  -351.96283575603    -6.748E-05 1.115E-04 1.057E-02
 scprqt: <Vxc>= -3.7979185E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.569      -1.51       2.60      0.908      -1.63

 ITER STEP NUMBER    40
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 40
 Total charge density [el/Bohr^3]
,     Maximum=    8.9620E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.5878E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT 40  -351.96287617334    -4.042E-05 9.339E-05 1.657E-03
 scprqt: <Vxc>= -3.7979894E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.250      0.439      -1.14       1.95      0.703

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -7.86911712E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.64024893E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.20767896E-04  sigma(2 1)=  0.00000000E+00


--- !ScfConvergenceWarning
message: |
    
     scprqt:  WARNING -
      nstep=   40 was not enough SCF cycles to converge;
...

 scprqt:  WARNING -
  nstep=   40 was not enough SCF cycles to converge;
  potential residual=  1.657E-03 exceeds tolvrs=  1.000E-10

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS1_TIM1_DEN
ioarr: data written to disk file telast_1o_DS1_TIM1_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.51024641650908E+00  2.83931329775000E+00  8.64244683313536E+00
  1.85210819598204E+00  2.83931329775000E+00  3.70800975215160E+00
  1.88959552189692E+00  2.83931329775000E+00  6.58601760832302E+00
  8.92471701858940E+00  2.83931329775000E+00  1.82669576551476E+00
  3.23289136718012E+00  5.27657983253860E-01  2.52502873557564E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.25207804049092E+00  8.51793989325000E+00  4.20914966413536E+00
  7.91021626101796E+00  8.51793989325000E+00  8.14130692115160E+00
  7.87272893510308E+00  8.51793989325000E+00  2.15272043932302E+00
  8.37607438410601E-01  8.51793989325000E+00  6.25999293451476E+00
  6.52943308981988E+00  1.08295952077461E+01  6.95832590457564E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.40144024974909E+01  8.51793989325000E+00  2.24147504864640E-01
  1.76725407180180E+01  8.51793989325000E+00  5.15858458584840E+00
  1.76350533921031E+01  8.51793989325000E+00  2.28057672967698E+00
  1.05999318954106E+01  8.51793989325000E+00  7.03989857248524E+00
  1.62917575468199E+01  6.20628457875386E+00  6.34156560242436E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.52725708735091E+01  2.83931329775000E+00  4.65744467386464E+00
  1.16144326529820E+01  2.83931329775000E+00  7.25287416848400E-01
  1.16519199788969E+01  2.83931329775000E+00  6.71387389867698E+00
  1.86870414755894E+01  2.83931329775000E+00  2.60660140348524E+00
  1.29952158241801E+01  5.15096861224614E+00  1.90826843342436E+00
  1.62917575468199E+01  1.08295952077461E+01  6.34156560242436E+00
  1.29952158241801E+01  5.27657983253860E-01  1.90826843342436E+00
  3.23289136718012E+00  5.15096861224614E+00  2.52502873557564E+00
  6.52943308981988E+00  6.20628457875386E+00  6.95832590457564E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.82220000000000E-01  2.50000000000000E-01  9.74720000000000E-01
  9.48600000000000E-02  2.50000000000000E-01  4.18200000000000E-01
  9.67800000000000E-02  2.50000000000000E-01  7.42790000000000E-01
  4.57100000000000E-01  2.50000000000000E-01  2.06020000000000E-01
  1.65580000000000E-01  4.64600000000000E-02  2.84780000000000E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.17780000000000E-01  7.50000000000000E-01  4.74720000000000E-01
  4.05140000000000E-01  7.50000000000000E-01  9.18200000000000E-01
  4.03220000000000E-01  7.50000000000000E-01  2.42790000000000E-01
  4.29000000000000E-02  7.50000000000000E-01  7.06020000000000E-01
  3.34420000000000E-01  9.53540000000000E-01  7.84780000000000E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.17780000000000E-01  7.50000000000000E-01  2.52800000000000E-02
  9.05140000000000E-01  7.50000000000000E-01  5.81800000000000E-01
  9.03220000000000E-01  7.50000000000000E-01  2.57210000000000E-01
  5.42900000000000E-01  7.50000000000000E-01  7.93980000000000E-01
  8.34420000000000E-01  5.46460000000000E-01  7.15220000000000E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.82220000000000E-01  2.50000000000000E-01  5.25280000000000E-01
  5.94860000000000E-01  2.50000000000000E-01  8.18000000000000E-02
  5.96780000000000E-01  2.50000000000000E-01  7.57210000000000E-01
  9.57100000000000E-01  2.50000000000000E-01  2.93980000000000E-01
  6.65580000000000E-01  4.53540000000000E-01  2.15220000000000E-01
  8.34420000000000E-01  9.53540000000000E-01  7.15220000000000E-01
  6.65580000000000E-01  4.64600000000000E-02  2.15220000000000E-01
  1.65580000000000E-01  4.53540000000000E-01  2.84780000000000E-01
  3.34420000000000E-01  5.46460000000000E-01  7.84780000000000E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 7.82347E-02 3.94189E-02 (free atoms)
 -7.43452918275774E-19 -2.47817639425258E-19 -1.73472347597681E-18
 -1.21431483984525E-02 -2.47817639425258E-19  1.53941162707952E-02
  5.85638670635436E-03 -2.47817639425258E-19  1.21159812323587E-02
  1.97552370586932E-02 -2.47817639425258E-19  7.82347111198858E-02
 -7.16178162253259E-02 -2.47817639425258E-19  9.60719273345813E-03
  3.58620148541791E-02 -4.63576731146877E-02 -3.59571353859058E-02
 -7.43452918275774E-19 -2.47817639425258E-19 -1.73472347597681E-18
  1.21431483984525E-02 -2.47817639425258E-19  1.53941162707952E-02
 -5.85638670635436E-03 -2.47817639425258E-19  1.21159812323587E-02
 -1.97552370586932E-02 -2.47817639425258E-19  7.82347111198858E-02
  7.16178162253259E-02 -2.47817639425258E-19  9.60719273345813E-03
 -3.58620148541791E-02  4.63576731146877E-02 -3.59571353859058E-02
 -7.43452918275774E-19 -2.47817639425258E-19 -1.73472347597681E-18
  1.21431483984525E-02 -2.47817639425119E-19 -1.53941162707952E-02
 -5.85638670635436E-03 -2.47817639425258E-19 -1.21159812323587E-02
 -1.97552370586932E-02 -2.47817639425258E-19 -7.82347111198858E-02
  7.16178162253259E-02 -2.47817639425258E-19 -9.60719273345813E-03
 -3.58620148541791E-02 -4.63576731146877E-02  3.59571353859058E-02
 -7.43452918275774E-19 -2.47817639425258E-19 -1.73472347597681E-18
 -1.21431483984525E-02 -2.47817639425397E-19 -1.53941162707952E-02
  5.85638670635436E-03 -2.47817639425397E-19 -1.21159812323588E-02
  1.97552370586932E-02 -2.47817639425258E-19 -7.82347111198858E-02
 -7.16178162253259E-02 -2.47817639425258E-19 -9.60719273345813E-03
  3.58620148541791E-02  4.63576731146877E-02  3.59571353859058E-02
 -3.58620148541791E-02  4.63576731146877E-02  3.59571353859058E-02
  3.58620148541791E-02 -4.63576731146877E-02  3.59571353859058E-02
  3.58620148541791E-02  4.63576731146877E-02 -3.59571353859058E-02
 -3.58620148541791E-02 -4.63576731146877E-02 -3.59571353859058E-02
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.37090709190386E-01  0.00000000000000E+00 -1.36493384165146E-01
 -1.14343894346186E-01  0.00000000000000E+00 -1.07427490594146E-01
 -3.85714067783826E-01  0.00000000000000E+00 -6.93675446650645E-01
  1.39831271778686E+00  0.00000000000000E+00 -8.51830806945546E-02
 -7.00193249376499E-01  5.26495830909122E-01  3.18817333023372E-01
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.37090709190386E-01  0.00000000000000E+00 -1.36493384165146E-01
  1.14343894346186E-01  0.00000000000000E+00 -1.07427490594146E-01
  3.85714067783826E-01  0.00000000000000E+00 -6.93675446650645E-01
 -1.39831271778686E+00  0.00000000000000E+00 -8.51830806945546E-02
  7.00193249376499E-01 -5.26495830909122E-01  3.18817333023372E-01
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.37090709190386E-01 -1.57772181044202E-30  1.36493384165146E-01
  1.14343894346186E-01  0.00000000000000E+00  1.07427490594146E-01
  3.85714067783826E-01  0.00000000000000E+00  6.93675446650645E-01
 -1.39831271778686E+00  0.00000000000000E+00  8.51830806945546E-02
  7.00193249376499E-01  5.26495830909122E-01 -3.18817333023372E-01
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.37090709190386E-01  1.57772181044202E-30  1.36493384165146E-01
 -1.14343894346186E-01  1.57772181044202E-30  1.07427490594146E-01
 -3.85714067783826E-01  0.00000000000000E+00  6.93675446650645E-01
  1.39831271778686E+00  0.00000000000000E+00  8.51830806945546E-02
 -7.00193249376499E-01 -5.26495830909122E-01 -3.18817333023372E-01
  7.00193249376499E-01 -5.26495830909122E-01 -3.18817333023372E-01
 -7.00193249376499E-01  5.26495830909122E-01 -3.18817333023372E-01
 -7.00193249376499E-01 -5.26495830909122E-01  3.18817333023372E-01
  7.00193249376499E-01  5.26495830909122E-01  3.18817333023372E-01
 Total energy (etotal) [Ha]= -3.51962876173339E+02
 fconv : at Broyd/MD step   1, gradients have not converged yet. 
  max grad (force/stress) = 7.8235E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
Inverse hessian has been initialized.
 EXIT:           1           1

--- Iteration: (2/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.49810326811063E+00  2.83931329775000E+00  8.65784094940616E+00
  1.85796458268839E+00  2.83931329775000E+00  3.72012573338396E+00
  1.90935075895561E+00  2.83931329775000E+00  6.66425231944290E+00
  8.85309920236407E+00  2.83931329775000E+00  1.83630295824822E+00
  3.26875338203430E+00  4.81300310139172E-01  2.48907160018973E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.26422118888937E+00  8.51793989325000E+00  4.22454378040616E+00
  7.90435987431161E+00  8.51793989325000E+00  8.15342290238396E+00
  7.85297369804439E+00  8.51793989325000E+00  2.23095515044290E+00
  9.09225254635927E-01  8.51793989325000E+00  6.26960012724822E+00
  6.49357107496570E+00  1.08759528808608E+01  6.92236876918973E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.40265456458894E+01  8.51793989325000E+00  2.08753388593845E-01
  1.76666843313116E+01  8.51793989325000E+00  5.14646860461604E+00
  1.76152981550444E+01  8.51793989325000E+00  2.20234201855710E+00
  1.06715497116359E+01  8.51793989325000E+00  7.03029137975178E+00
  1.62558955319657E+01  6.15992690563917E+00  6.37752273781027E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.52604277251106E+01  2.83931329775000E+00  4.64205055759385E+00
  1.16202890396884E+01  2.83931329775000E+00  7.13171435616042E-01
  1.16716752159556E+01  2.83931329775000E+00  6.63563918755710E+00
  1.86154236593641E+01  2.83931329775000E+00  2.59699421075178E+00
  1.30310778390343E+01  5.19732628536083E+00  1.94422556881027E+00
  1.62558955319657E+01  1.08759528808608E+01  6.37752273781027E+00
  1.30310778390343E+01  4.81300310139172E-01  1.94422556881027E+00
  3.26875338203430E+00  5.19732628536083E+00  2.48907160018973E+00
  6.49357107496570E+00  6.15992690563917E+00  6.92236876918973E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.81598060601656E-01  2.50000000000000E-01  9.76456192689545E-01
  9.51599483745982E-02  2.50000000000000E-01  4.19566475195604E-01
  9.77918101045355E-02  2.50000000000000E-01  7.51613535636968E-01
  4.53431928090447E-01  2.50000000000000E-01  2.07103526816185E-01
  1.67416755939230E-01  4.23782319584613E-02  2.80724650898056E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.18401939398344E-01  7.50000000000000E-01  4.76456192689545E-01
  4.04840051625402E-01  7.50000000000000E-01  9.19566475195604E-01
  4.02208189895465E-01  7.50000000000000E-01  2.51613535636968E-01
  4.65680719095529E-02  7.50000000000000E-01  7.07103526816185E-01
  3.32583244060770E-01  9.57621768041539E-01  7.80724650898056E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.18401939398344E-01  7.50000000000000E-01  2.35438073104551E-02
  9.04840051625402E-01  7.50000000000000E-01  5.80433524804396E-01
  9.02208189895464E-01  7.50000000000000E-01  2.48386464363032E-01
  5.46568071909553E-01  7.50000000000000E-01  7.92896473183815E-01
  8.32583244060769E-01  5.42378231958461E-01  7.19275349101944E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.81598060601656E-01  2.50000000000000E-01  5.23543807310455E-01
  5.95159948374598E-01  2.50000000000000E-01  8.04335248043962E-02
  5.97791810104536E-01  2.50000000000000E-01  7.48386464363032E-01
  9.53431928090447E-01  2.50000000000000E-01  2.92896473183815E-01
  6.67416755939231E-01  4.57621768041539E-01  2.19275349101944E-01
  8.32583244060769E-01  9.57621768041539E-01  7.19275349101944E-01
  6.67416755939231E-01  4.23782319584613E-02  2.19275349101944E-01
  1.67416755939230E-01  4.57621768041539E-01  2.80724650898056E-01
  3.32583244060770E-01  5.42378231958461E-01  7.80724650898056E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  40  32
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.02011

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    9.0746E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    5.1501E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -351.71896815233    -3.517E+02 5.574E-04 6.999E+02
 scprqt: <Vxc>= -3.8048894E-01 hartree

Simple mixing update:
  residual square of the potential :   362.39719285277198

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.5103E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    4.2936E-04  at reduced coord.    0.7222    0.7500    0.0313
,  Integrated=    1.5200E+02
 ETOT  2  -351.60854589902     1.104E-01 4.111E-03 9.165E+02
 scprqt: <Vxc>= -3.8376995E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.468      0.532

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    9.0524E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.8386E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.02171517435    -4.132E-01 1.867E-03 1.251E+01
 scprqt: <Vxc>= -3.8053699E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.550      0.230      0.220

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.9506E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9432E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.03079809844    -9.083E-03 2.196E-04 6.235E-01
 scprqt: <Vxc>= -3.8104454E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.636      0.203      0.905E-01  0.712E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.9562E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9614E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.03117065840    -3.726E-04 1.493E-04 2.993E-01
 scprqt: <Vxc>= -3.8121307E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.591      0.348      0.151E-01  0.306E-01  0.153E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.9483E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9489E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.03131279202    -1.421E-04 8.202E-05 2.912E-02
 scprqt: <Vxc>= -3.8116139E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.892      0.133      0.512E-02 -0.283E-01  0.173E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.9458E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9511E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.03132856393    -1.577E-05 1.302E-04 2.974E-03
 scprqt: <Vxc>= -3.8117519E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.471      0.573      0.366E-02 -0.319E-01 -0.133E-01

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.9486E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9517E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.03133341869    -4.855E-06 7.019E-05 3.462E-04
 scprqt: <Vxc>= -3.8117852E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.832      0.154      0.117E-01  0.844E-02 -0.220E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.9474E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9516E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.03133506552    -1.647E-06 1.123E-04 3.310E-04
 scprqt: <Vxc>= -3.8118133E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.57     -0.238     -0.235     -0.985E-01 -0.170E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.9517E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9514E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.03133641482    -1.349E-06 6.064E-05 4.888E-04
 scprqt: <Vxc>= -3.8117569E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09      0.752     -0.691     -0.674E-01 -0.774E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.9495E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9516E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.03133748029    -1.065E-06 9.643E-05 3.779E-05
 scprqt: <Vxc>= -3.8118076E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.608      0.485      0.426E-01 -0.125      0.220E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.9515E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.03133773173    -2.514E-07 5.100E-05 1.802E-05
 scprqt: <Vxc>= -3.8117795E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.847      0.315     -0.818E-01 -0.115      0.111E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.9511E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.03133788588    -1.541E-07 8.084E-05 4.772E-06
 scprqt: <Vxc>= -3.8117881E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.478      0.591      0.183     -0.149     -0.163

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.9519E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.03133793052    -4.464E-08 4.480E-05 6.196E-06
 scprqt: <Vxc>= -3.8117778E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.800      0.257     -0.889E-01  0.125     -0.563E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.9516E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.03133796170    -3.119E-08 6.690E-05 2.953E-07
 scprqt: <Vxc>= -3.8117851E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.432      0.573      0.628E-01 -0.869E-01  0.682E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.9519E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.03133796982    -8.113E-09 3.939E-05 1.131E-06
 scprqt: <Vxc>= -3.8117809E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.376      0.351      0.352      0.152E-03 -0.893E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.9518E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.03133797583    -6.008E-09 5.942E-05 1.485E-07
 scprqt: <Vxc>= -3.8117833E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.689      0.395     -0.259E-01  0.126     -0.862E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.03133797955    -3.720E-09 3.438E-05 2.130E-07
 scprqt: <Vxc>= -3.8117814E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.754      0.953     -0.150     -0.323     -0.124

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.9519E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.03133798009    -5.405E-10 5.234E-05 4.259E-07
 scprqt: <Vxc>= -3.8117832E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.380      0.284      0.552      0.630E-01 -0.235

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.03133798130    -1.217E-09 2.985E-05 5.229E-08
 scprqt: <Vxc>= -3.8117821E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.352      0.302      0.226      0.237     -0.321E-01

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 21  -352.03133798141    -1.068E-10 4.583E-05 6.891E-09
 scprqt: <Vxc>= -3.8117823E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.591      0.119      0.200      0.105     -0.280E-01

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 22  -352.03133798141    -2.387E-12 2.580E-05 3.116E-09
 scprqt: <Vxc>= -3.8117822E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.892     -0.222      0.441E-01  0.151      0.118

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 23  -352.03133798142    -9.720E-12 3.993E-05 1.570E-09
 scprqt: <Vxc>= -3.8117823E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.929      0.586     -0.612      0.451E-01  0.326E-01

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 24  -352.03133798142    -2.956E-12 2.357E-05 5.839E-10
 scprqt: <Vxc>= -3.8117822E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.527      0.600      0.198     -0.362      0.141E-01

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 25  -352.03133798143    -8.185E-12 3.464E-05 1.124E-09
 scprqt: <Vxc>= -3.8117823E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.125      0.572      0.782      0.194     -0.555

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 26  -352.03133798143     7.162E-12 2.613E-05 1.120E-09
 scprqt: <Vxc>= -3.8117822E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.429     -0.655      0.638       1.44      0.293E-01

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 27  -352.03133798143    -4.547E-12 3.347E-05 8.560E-10
 scprqt: <Vxc>= -3.8117823E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.817      0.723      -1.66      0.363       1.56

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 28  -352.03133798143     2.274E-12 2.880E-05 1.028E-09
 scprqt: <Vxc>= -3.8117822E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.299      0.759      0.692      -1.40      0.445

 ITER STEP NUMBER    29
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 29
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 29  -352.03133798143    -2.672E-12 3.698E-05 9.550E-10
 scprqt: <Vxc>= -3.8117822E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -6.24       5.38      0.340      -1.29       1.65

 ITER STEP NUMBER    30
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 30
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 30  -352.03133798144    -5.116E-12 3.149E-05 6.760E-10
 scprqt: <Vxc>= -3.8117822E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.424      -4.30       3.71      0.524E-01 -0.652

 ITER STEP NUMBER    31
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 31
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 31  -352.03133798144    -9.663E-13 4.049E-05 1.427E-10
 scprqt: <Vxc>= -3.8117822E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.736      0.236      -2.09       2.00     -0.192

 ITER STEP NUMBER    32
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 32
 Total charge density [el/Bohr^3]
,     Maximum=    8.9520E-01  at reduced coord.    0.2778    0.2500    0.8750
,     Minimum=    4.9513E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 32  -352.03133798143     5.230E-12 3.408E-05 2.371E-11
 scprqt: <Vxc>= -3.8117822E-01 hartree

 At SCF step   32       vres2   =  2.37E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.00843806E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.05950000E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.34346175E-05  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS1_TIM2_DEN
ioarr: data written to disk file telast_1o_DS1_TIM2_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.49810326811063E+00  2.83931329775000E+00  8.65784094940616E+00
  1.85796458268839E+00  2.83931329775000E+00  3.72012573338396E+00
  1.90935075895561E+00  2.83931329775000E+00  6.66425231944290E+00
  8.85309920236407E+00  2.83931329775000E+00  1.83630295824822E+00
  3.26875338203430E+00  4.81300310139172E-01  2.48907160018973E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.26422118888937E+00  8.51793989325000E+00  4.22454378040616E+00
  7.90435987431161E+00  8.51793989325000E+00  8.15342290238396E+00
  7.85297369804439E+00  8.51793989325000E+00  2.23095515044290E+00
  9.09225254635927E-01  8.51793989325000E+00  6.26960012724822E+00
  6.49357107496570E+00  1.08759528808608E+01  6.92236876918973E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.40265456458894E+01  8.51793989325000E+00  2.08753388593845E-01
  1.76666843313116E+01  8.51793989325000E+00  5.14646860461604E+00
  1.76152981550444E+01  8.51793989325000E+00  2.20234201855710E+00
  1.06715497116359E+01  8.51793989325000E+00  7.03029137975178E+00
  1.62558955319657E+01  6.15992690563917E+00  6.37752273781027E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.52604277251106E+01  2.83931329775000E+00  4.64205055759385E+00
  1.16202890396884E+01  2.83931329775000E+00  7.13171435616042E-01
  1.16716752159556E+01  2.83931329775000E+00  6.63563918755710E+00
  1.86154236593641E+01  2.83931329775000E+00  2.59699421075178E+00
  1.30310778390343E+01  5.19732628536083E+00  1.94422556881027E+00
  1.62558955319657E+01  1.08759528808608E+01  6.37752273781027E+00
  1.30310778390343E+01  4.81300310139172E-01  1.94422556881027E+00
  3.26875338203430E+00  5.19732628536083E+00  2.48907160018973E+00
  6.49357107496570E+00  6.15992690563917E+00  6.92236876918973E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.81598060601656E-01  2.50000000000000E-01  9.76456192689545E-01
  9.51599483745982E-02  2.50000000000000E-01  4.19566475195604E-01
  9.77918101045355E-02  2.50000000000000E-01  7.51613535636968E-01
  4.53431928090447E-01  2.50000000000000E-01  2.07103526816185E-01
  1.67416755939230E-01  4.23782319584613E-02  2.80724650898056E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.18401939398344E-01  7.50000000000000E-01  4.76456192689545E-01
  4.04840051625402E-01  7.50000000000000E-01  9.19566475195604E-01
  4.02208189895465E-01  7.50000000000000E-01  2.51613535636968E-01
  4.65680719095529E-02  7.50000000000000E-01  7.07103526816185E-01
  3.32583244060770E-01  9.57621768041539E-01  7.80724650898056E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.18401939398344E-01  7.50000000000000E-01  2.35438073104551E-02
  9.04840051625402E-01  7.50000000000000E-01  5.80433524804396E-01
  9.02208189895464E-01  7.50000000000000E-01  2.48386464363032E-01
  5.46568071909553E-01  7.50000000000000E-01  7.92896473183815E-01
  8.32583244060769E-01  5.42378231958461E-01  7.19275349101944E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.81598060601656E-01  2.50000000000000E-01  5.23543807310455E-01
  5.95159948374598E-01  2.50000000000000E-01  8.04335248043962E-02
  5.97791810104536E-01  2.50000000000000E-01  7.48386464363032E-01
  9.53431928090447E-01  2.50000000000000E-01  2.92896473183815E-01
  6.67416755939231E-01  4.57621768041539E-01  2.19275349101944E-01
  8.32583244060769E-01  9.57621768041539E-01  7.19275349101944E-01
  6.67416755939231E-01  4.23782319584613E-02  2.19275349101944E-01
  1.67416755939230E-01  4.57621768041539E-01  2.80724650898056E-01
  3.32583244060770E-01  5.42378231958461E-01  7.80724650898056E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 4.46387E-02 2.37043E-02 (free atoms)
 -2.47817639425258E-19 -0.00000000000000E+00  7.43452918275774E-19
 -2.06522032791752E-02 -0.00000000000000E+00  1.54167800442050E-02
  1.44849325653112E-03 -0.00000000000000E+00  9.61358071845895E-03
  2.02296425314213E-02 -0.00000000000000E+00  4.46387067487210E-02
 -3.67844792496187E-02  1.38917551973948E-31 -2.76425837969424E-05
  2.27887623993725E-02 -2.15953270037541E-02 -2.62817691788927E-02
 -2.47817639425258E-19 -0.00000000000000E+00  7.43452918275774E-19
  2.06522032791752E-02 -0.00000000000000E+00  1.54167800442050E-02
 -1.44849325653112E-03 -0.00000000000000E+00  9.61358071845895E-03
 -2.02296425314213E-02 -0.00000000000000E+00  4.46387067487210E-02
  3.67844792496187E-02 -1.38917551973948E-31 -2.76425837969424E-05
 -2.27887623993725E-02  2.15953270037541E-02 -2.62817691788927E-02
 -2.47817639425258E-19 -0.00000000000000E+00  7.43452918275774E-19
  2.06522032791752E-02 -0.00000000000000E+00 -1.54167800442050E-02
 -1.44849325653112E-03 -0.00000000000000E+00 -9.61358071845895E-03
 -2.02296425314213E-02 -0.00000000000000E+00 -4.46387067487210E-02
  3.67844792496187E-02 -0.00000000000000E+00  2.76425837969439E-05
 -2.27887623993725E-02 -2.15953270037541E-02  2.62817691788927E-02
 -2.47817639425258E-19 -0.00000000000000E+00  7.43452918275774E-19
 -2.06522032791752E-02 -0.00000000000000E+00 -1.54167800442050E-02
  1.44849325653112E-03 -0.00000000000000E+00 -9.61358071845895E-03
  2.02296425314213E-02 -0.00000000000000E+00 -4.46387067487210E-02
 -3.67844792496187E-02 -0.00000000000000E+00  2.76425837969439E-05
  2.27887623993725E-02  2.15953270037541E-02  2.62817691788927E-02
 -2.27887623993725E-02  2.15953270037541E-02  2.62817691788927E-02
  2.27887623993725E-02 -2.15953270037541E-02  2.62817691788927E-02
  2.27887623993725E-02  2.15953270037541E-02 -2.62817691788927E-02
 -2.27887623993725E-02 -2.15953270037541E-02 -2.62817691788927E-02
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  4.03227018326456E-01  0.00000000000000E+00 -1.36694334650140E-01
 -2.82813222880667E-02  0.00000000000000E+00 -8.52397203661941E-02
 -3.94976668081723E-01  0.00000000000000E+00 -3.95793304513852E-01
  7.18204042833124E-01 -1.57772181044202E-30  2.45095576981666E-04
 -4.44942585032311E-01  2.45263596524075E-01  2.33029785794193E-01
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.03227018326456E-01  0.00000000000000E+00 -1.36694334650140E-01
  2.82813222880667E-02  0.00000000000000E+00 -8.52397203661941E-02
  3.94976668081723E-01  0.00000000000000E+00 -3.95793304513852E-01
 -7.18204042833124E-01  1.57772181044202E-30  2.45095576981666E-04
  4.44942585032311E-01 -2.45263596524075E-01  2.33029785794193E-01
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.03227018326456E-01  0.00000000000000E+00  1.36694334650140E-01
  2.82813222880667E-02  0.00000000000000E+00  8.52397203661941E-02
  3.94976668081723E-01  0.00000000000000E+00  3.95793304513852E-01
 -7.18204042833124E-01  0.00000000000000E+00 -2.45095576981666E-04
  4.44942585032311E-01  2.45263596524075E-01 -2.33029785794193E-01
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  4.03227018326456E-01  0.00000000000000E+00  1.36694334650140E-01
 -2.82813222880667E-02  0.00000000000000E+00  8.52397203661941E-02
 -3.94976668081723E-01  0.00000000000000E+00  3.95793304513852E-01
  7.18204042833124E-01  0.00000000000000E+00 -2.45095576981666E-04
 -4.44942585032311E-01 -2.45263596524075E-01 -2.33029785794193E-01
  4.44942585032311E-01 -2.45263596524075E-01 -2.33029785794193E-01
 -4.44942585032311E-01  2.45263596524075E-01 -2.33029785794193E-01
 -4.44942585032311E-01 -2.45263596524075E-01  2.33029785794193E-01
  4.44942585032311E-01  2.45263596524075E-01  2.33029785794193E-01
 Total energy (etotal) [Ha]= -3.52031337981431E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-6.84618E-02
           Relative     =-1.94495E-04
 fconv : at Broyd/MD step   2, gradients have not converged yet. 
  max grad (force/stress) = 4.4639E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (3/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.44709479046614E+00  2.83931329775000E+00  8.69673866524802E+00
  1.86219066282943E+00  2.83931329775000E+00  3.74470760850488E+00
  1.96033407830575E+00  2.83931329775000E+00  6.78124083753943E+00
  8.75576867223669E+00  2.83931329775000E+00  1.83748162514971E+00
  3.32794945761693E+00  4.23600997352477E-01  2.42150201086235E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.31522966653387E+00  8.51793989325000E+00  4.26344149624803E+00
  7.90013379417056E+00  8.51793989325000E+00  8.17800477750489E+00
  7.80199037869425E+00  8.51793989325000E+00  2.34794366853943E+00
  1.00655578476332E+00  8.51793989325000E+00  6.27077879414971E+00
  6.43437499938309E+00  1.09336521936475E+01  6.85479917986236E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.40775541235339E+01  8.51793989325000E+00  1.69855672751970E-01
  1.76624582511706E+01  8.51793989325000E+00  5.12188672949511E+00
  1.75643148356943E+01  8.51793989325000E+00  2.08535350046057E+00
  1.07688802417633E+01  8.51793989325000E+00  7.02911271285029E+00
  1.61966994563831E+01  6.10222759285248E+00  6.44509232713764E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.52094192474661E+01  2.83931329775000E+00  4.60315284175198E+00
  1.16245151198294E+01  2.83931329775000E+00  6.88589560495118E-01
  1.17226585353057E+01  2.83931329775000E+00  6.51865066946057E+00
  1.85180931292367E+01  2.83931329775000E+00  2.59581554385029E+00
  1.30902739146169E+01  5.25502559814752E+00  2.01179515813765E+00
  1.61966994563831E+01  1.09336521936475E+01  6.44509232713764E+00
  1.30902739146169E+01  4.23600997352477E-01  2.01179515813765E+00
  3.32794945761693E+00  5.25502559814752E+00  2.42150201086235E+00
  6.43437499938309E+00  6.10222759285248E+00  6.85479917986236E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.78985543579242E-01  2.50000000000000E-01  9.80843188909183E-01
  9.53763968321173E-02  2.50000000000000E-01  4.22338889742142E-01
  1.00403038586784E-01  2.50000000000000E-01  7.64807837038030E-01
  4.48446920136855E-01  2.50000000000000E-01  2.07236460257883E-01
  1.70448619705046E-01  3.72978386788240E-02  2.73103958357991E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.21014456420759E-01  7.50000000000000E-01  4.80843188909184E-01
  4.04623603167882E-01  7.50000000000000E-01  9.22338889742143E-01
  3.99596961413216E-01  7.50000000000000E-01  2.64807837038030E-01
  5.15530798631456E-02  7.50000000000000E-01  7.07236460257884E-01
  3.29551380294955E-01  9.62702161321176E-01  7.73103958357992E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.21014456420758E-01  7.50000000000000E-01  1.91568110908166E-02
  9.04623603167883E-01  7.50000000000000E-01  5.77661110257857E-01
  8.99596961413216E-01  7.50000000000000E-01  2.35192162961970E-01
  5.51553079863145E-01  7.50000000000000E-01  7.92763539742116E-01
  8.29551380294954E-01  5.37297838678824E-01  7.26896041642008E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.78985543579242E-01  2.50000000000000E-01  5.19156811090817E-01
  5.95376396832117E-01  2.50000000000000E-01  7.76611102578581E-02
  6.00403038586784E-01  2.50000000000000E-01  7.35192162961970E-01
  9.48446920136855E-01  2.50000000000000E-01  2.92763539742116E-01
  6.70448619705046E-01  4.62702161321176E-01  2.26896041642009E-01
  8.29551380294954E-01  9.62702161321176E-01  7.26896041642008E-01
  6.70448619705046E-01  3.72978386788240E-02  2.26896041642009E-01
  1.70448619705046E-01  4.62702161321176E-01  2.73103958357991E-01
  3.29551380294955E-01  5.37297838678824E-01  7.73103958357992E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  40  32
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.02011

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    9.0869E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0405E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -351.36126432109    -3.514E+02 3.183E-03 1.674E+03
 scprqt: <Vxc>= -3.8071638E-01 hartree

Simple mixing update:
  residual square of the potential :   850.01286441474042

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.0634E-01  at reduced coord.    0.0694    0.2500    0.7813
,     Minimum=    6.0444E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -349.95200011212     1.409E+00 7.029E-03 4.285E+03
 scprqt: <Vxc>= -3.8989504E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.383      0.617

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    9.3311E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    4.8714E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -351.91579634190    -1.964E+00 1.719E-02 2.020E+02
 scprqt: <Vxc>= -3.8223499E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.425      0.258      0.317

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    9.0015E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    4.9414E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.06145012517    -1.457E-01 1.411E-03 3.371E+01
 scprqt: <Vxc>= -3.8203608E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.600      0.142      0.143      0.114

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.9903E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0578E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.07405760577    -1.261E-02 3.744E-04 1.180E+01
 scprqt: <Vxc>= -3.8290678E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.707      0.215     -0.226E-01  0.693E-01  0.320E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.9590E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0219E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.07890841350    -4.851E-03 1.015E-04 1.813E+00
 scprqt: <Vxc>= -3.8279332E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.153     -0.114     -0.439E-01  0.684E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.9362E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0519E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.07982501493    -9.166E-04 1.031E-04 4.197E-02
 scprqt: <Vxc>= -3.8300263E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.521      0.599     -0.254E-01 -0.781E-01 -0.144E-01

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.9393E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0451E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.07987197303    -4.696E-05 6.509E-05 1.289E-02
 scprqt: <Vxc>= -3.8297837E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.743      0.271     -0.179E-01  0.461E-02 -0.505E-03

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.9376E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0446E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.07987921839    -7.245E-06 7.461E-05 3.515E-03
 scprqt: <Vxc>= -3.8298053E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.943      0.905E-01 -0.106E-01 -0.406E-01  0.136E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.9407E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0445E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.07988249676    -3.278E-06 5.343E-05 1.205E-04
 scprqt: <Vxc>= -3.8297633E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.847      0.256     -0.692E-01 -0.214E-01 -0.185E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.9403E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0444E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.07988327751    -7.807E-07 6.200E-05 1.121E-04
 scprqt: <Vxc>= -3.8297806E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.667      0.598     -0.215     -0.487E-01  0.580E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.9411E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0445E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.07988369984    -4.223E-07 4.738E-05 4.826E-05
 scprqt: <Vxc>= -3.8297745E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.58     -0.183E-01 -0.507     -0.888E-02 -0.410E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.9411E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0445E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.07988412215    -4.223E-07 6.506E-05 3.473E-05
 scprqt: <Vxc>= -3.8297886E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.04      0.584     -0.569     -0.138      0.612E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.9415E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.07988425396    -1.318E-07 4.812E-05 7.151E-06
 scprqt: <Vxc>= -3.8297693E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.605      0.483      0.141     -0.236      0.788E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.9414E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.07988429884    -4.488E-08 7.260E-05 2.740E-06
 scprqt: <Vxc>= -3.8297785E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.582      0.388      0.132     -0.678E-01 -0.703E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.9416E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.07988431930    -2.046E-08 5.070E-05 8.568E-07
 scprqt: <Vxc>= -3.8297754E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.685      0.399      0.564E-01 -0.251E-01 -0.108

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.9416E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.07988433499    -1.569E-08 7.564E-05 5.064E-07
 scprqt: <Vxc>= -3.8297770E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14      0.963E-01 -0.230      0.557E-01 -0.483E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.07988434054    -5.550E-09 5.002E-05 4.868E-07
 scprqt: <Vxc>= -3.8297749E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.438      0.638     -0.684E-01 -0.285E-01  0.358E-01

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.07988434238    -1.841E-09 7.397E-05 7.596E-08
 scprqt: <Vxc>= -3.8297760E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.509      0.312      0.402     -0.183     -0.312E-01

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.07988434364    -1.258E-09 4.674E-05 8.033E-08
 scprqt: <Vxc>= -3.8297754E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.577E-01  0.483      0.297      0.420     -0.208

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 21  -352.07988434381    -1.718E-10 6.887E-05 4.087E-08
 scprqt: <Vxc>= -3.8297756E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.31     -0.589E-01 -0.259      0.282E-01  0.139

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 22  -352.07988434401    -2.044E-10 4.193E-05 4.809E-08
 scprqt: <Vxc>= -3.8297753E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.305      0.991     -0.337     -0.897E-01  0.598E-01

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 23  -352.07988434406    -4.229E-11 6.171E-05 3.534E-08
 scprqt: <Vxc>= -3.8297755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.243      0.289      0.879     -0.419     -0.865E-01

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 24  -352.07988434407    -1.864E-11 3.647E-05 3.150E-08
 scprqt: <Vxc>= -3.8297755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02      0.241     -0.526E-02  0.588     -0.873

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 25  -352.07988434409    -1.768E-11 5.370E-05 2.168E-08
 scprqt: <Vxc>= -3.8297755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.28      0.207      0.355     -0.205      0.350

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 26  -352.07988434408     9.436E-12 3.097E-05 1.881E-08
 scprqt: <Vxc>= -3.8297754E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.781      0.671     -0.144      0.423     -0.343

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 27  -352.07988434410    -1.461E-11 4.566E-05 1.214E-08
 scprqt: <Vxc>= -3.8297754E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.32      0.321     -0.492     -0.672E-01 -0.432E-01

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 28  -352.07988434410    -5.173E-12 2.583E-05 7.624E-09
 scprqt: <Vxc>= -3.8297755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.393      0.904       1.55      -1.82     -0.124

 ITER STEP NUMBER    29
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 29
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 29  -352.07988434411    -3.695E-12 3.813E-05 1.183E-09
 scprqt: <Vxc>= -3.8297755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.785      0.294     -0.299      0.975      -1.51

 ITER STEP NUMBER    30
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 30
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 30  -352.07988434411    -4.263E-12 2.123E-05 1.175E-09
 scprqt: <Vxc>= -3.8297755E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.979      0.169      0.122E-01 -0.823E-01  0.893E-01

 ITER STEP NUMBER    31
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 31
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 31  -352.07988434411    -2.956E-12 3.139E-05 1.508E-10
 scprqt: <Vxc>= -3.8297756E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.553      0.465      0.823E-02 -0.140E-01  0.201E-01

 ITER STEP NUMBER    32
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 32
 Total charge density [el/Bohr^3]
,     Maximum=    8.9417E-01  at reduced coord.    0.3194    0.2500    0.9375
,     Minimum=    5.0443E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 32  -352.07988434412    -1.478E-12 1.741E-05 6.631E-11
 scprqt: <Vxc>= -3.8297756E-01 hartree

 At SCF step   32       vres2   =  6.63E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  3.35926988E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  2.54077437E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  3.81987688E-04  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS1_TIM3_DEN
ioarr: data written to disk file telast_1o_DS1_TIM3_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.44709479046614E+00  2.83931329775000E+00  8.69673866524802E+00
  1.86219066282943E+00  2.83931329775000E+00  3.74470760850488E+00
  1.96033407830575E+00  2.83931329775000E+00  6.78124083753943E+00
  8.75576867223669E+00  2.83931329775000E+00  1.83748162514971E+00
  3.32794945761693E+00  4.23600997352477E-01  2.42150201086235E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.31522966653387E+00  8.51793989325000E+00  4.26344149624803E+00
  7.90013379417056E+00  8.51793989325000E+00  8.17800477750489E+00
  7.80199037869425E+00  8.51793989325000E+00  2.34794366853943E+00
  1.00655578476332E+00  8.51793989325000E+00  6.27077879414971E+00
  6.43437499938309E+00  1.09336521936475E+01  6.85479917986236E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.40775541235339E+01  8.51793989325000E+00  1.69855672751970E-01
  1.76624582511706E+01  8.51793989325000E+00  5.12188672949511E+00
  1.75643148356943E+01  8.51793989325000E+00  2.08535350046057E+00
  1.07688802417633E+01  8.51793989325000E+00  7.02911271285029E+00
  1.61966994563831E+01  6.10222759285248E+00  6.44509232713764E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.52094192474661E+01  2.83931329775000E+00  4.60315284175198E+00
  1.16245151198294E+01  2.83931329775000E+00  6.88589560495118E-01
  1.17226585353057E+01  2.83931329775000E+00  6.51865066946057E+00
  1.85180931292367E+01  2.83931329775000E+00  2.59581554385029E+00
  1.30902739146169E+01  5.25502559814752E+00  2.01179515813765E+00
  1.61966994563831E+01  1.09336521936475E+01  6.44509232713764E+00
  1.30902739146169E+01  4.23600997352477E-01  2.01179515813765E+00
  3.32794945761693E+00  5.25502559814752E+00  2.42150201086235E+00
  6.43437499938309E+00  6.10222759285248E+00  6.85479917986236E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.78985543579242E-01  2.50000000000000E-01  9.80843188909183E-01
  9.53763968321173E-02  2.50000000000000E-01  4.22338889742142E-01
  1.00403038586784E-01  2.50000000000000E-01  7.64807837038030E-01
  4.48446920136855E-01  2.50000000000000E-01  2.07236460257883E-01
  1.70448619705046E-01  3.72978386788240E-02  2.73103958357991E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.21014456420759E-01  7.50000000000000E-01  4.80843188909184E-01
  4.04623603167882E-01  7.50000000000000E-01  9.22338889742143E-01
  3.99596961413216E-01  7.50000000000000E-01  2.64807837038030E-01
  5.15530798631456E-02  7.50000000000000E-01  7.07236460257884E-01
  3.29551380294955E-01  9.62702161321176E-01  7.73103958357992E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.21014456420758E-01  7.50000000000000E-01  1.91568110908166E-02
  9.04623603167883E-01  7.50000000000000E-01  5.77661110257857E-01
  8.99596961413216E-01  7.50000000000000E-01  2.35192162961970E-01
  5.51553079863145E-01  7.50000000000000E-01  7.92763539742116E-01
  8.29551380294954E-01  5.37297838678824E-01  7.26896041642008E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.78985543579242E-01  2.50000000000000E-01  5.19156811090817E-01
  5.95376396832117E-01  2.50000000000000E-01  7.76611102578581E-02
  6.00403038586784E-01  2.50000000000000E-01  7.35192162961970E-01
  9.48446920136855E-01  2.50000000000000E-01  2.92763539742116E-01
  6.70448619705046E-01  4.62702161321176E-01  2.26896041642009E-01
  8.29551380294954E-01  9.62702161321176E-01  7.26896041642008E-01
  6.70448619705046E-01  3.72978386788240E-02  2.26896041642009E-01
  1.70448619705046E-01  4.62702161321176E-01  2.73103958357991E-01
  3.29551380294955E-01  5.37297838678824E-01  7.73103958357992E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 3.62775E-02 1.30457E-02 (free atoms)
 -3.09772049281573E-20 -0.00000000000000E+00 -1.23908819712629E-19
 -3.62775025196249E-02 -0.00000000000000E+00  1.95540489051554E-02
  2.40642733313417E-03 -0.00000000000000E+00  4.90481962060204E-03
  1.30007434219942E-02 -0.00000000000000E+00 -5.43909311303571E-03
  4.25434766876791E-03 -0.00000000000000E+00 -9.74868115848010E-03
  7.17973653693888E-03  5.15026013703595E-03 -9.65699252492318E-03
 -3.09772049281573E-20 -0.00000000000000E+00 -1.23908819712629E-19
  3.62775025196249E-02 -0.00000000000000E+00  1.95540489051554E-02
 -2.40642733313417E-03 -0.00000000000000E+00  4.90481962060205E-03
 -1.30007434219942E-02 -0.00000000000000E+00 -5.43909311303571E-03
 -4.25434766876791E-03 -0.00000000000000E+00 -9.74868115848010E-03
 -7.17973653693888E-03 -5.15026013703595E-03 -9.65699252492318E-03
 -3.09772049281573E-20 -0.00000000000000E+00 -1.23908819712629E-19
  3.62775025196249E-02 -0.00000000000000E+00 -1.95540489051554E-02
 -2.40642733313417E-03 -0.00000000000000E+00 -4.90481962060205E-03
 -1.30007434219942E-02 -0.00000000000000E+00  5.43909311303571E-03
 -4.25434766876791E-03 -0.00000000000000E+00  9.74868115848010E-03
 -7.17973653693888E-03  5.15026013703595E-03  9.65699252492318E-03
 -3.09772049280967E-20 -0.00000000000000E+00 -1.23908819712629E-19
 -3.62775025196249E-02 -0.00000000000000E+00 -1.95540489051554E-02
  2.40642733313417E-03 -0.00000000000000E+00 -4.90481962060205E-03
  1.30007434219942E-02 -0.00000000000000E+00  5.43909311303571E-03
  4.25434766876791E-03 -0.00000000000000E+00  9.74868115848010E-03
  7.17973653693888E-03 -5.15026013703595E-03  9.65699252492318E-03
 -7.17973653693888E-03 -5.15026013703595E-03  9.65699252492318E-03
  7.17973653693888E-03  5.15026013703595E-03  9.65699252492318E-03
  7.17973653693888E-03 -5.15026013703595E-03 -9.65699252492318E-03
 -7.17973653693888E-03  5.15026013703595E-03 -9.65699252492318E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  7.08305500172426E-01  0.00000000000000E+00 -1.73377819307426E-01
 -4.69846488164980E-02  0.00000000000000E+00 -4.34890458769414E-02
 -2.53834950935432E-01  0.00000000000000E+00  4.82262321998972E-02
 -8.30646445907878E-02  0.00000000000000E+00  8.64376011627470E-02
 -1.40181835178750E-01 -5.84928083758316E-02  8.56246352435922E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -7.08305500172426E-01  0.00000000000000E+00 -1.73377819307426E-01
  4.69846488164980E-02  0.00000000000000E+00 -4.34890458769414E-02
  2.53834950935432E-01  0.00000000000000E+00  4.82262321998972E-02
  8.30646445907879E-02  0.00000000000000E+00  8.64376011627470E-02
  1.40181835178750E-01  5.84928083758316E-02  8.56246352435922E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -7.08305500172426E-01  0.00000000000000E+00  1.73377819307426E-01
  4.69846488164980E-02  0.00000000000000E+00  4.34890458769414E-02
  2.53834950935432E-01  0.00000000000000E+00 -4.82262321998972E-02
  8.30646445907879E-02  0.00000000000000E+00 -8.64376011627470E-02
  1.40181835178750E-01 -5.84928083758316E-02 -8.56246352435922E-02
 -1.18329135783152E-30  0.00000000000000E+00  0.00000000000000E+00
  7.08305500172426E-01  0.00000000000000E+00  1.73377819307426E-01
 -4.69846488164980E-02  0.00000000000000E+00  4.34890458769414E-02
 -2.53834950935432E-01  0.00000000000000E+00 -4.82262321998972E-02
 -8.30646445907879E-02  0.00000000000000E+00 -8.64376011627470E-02
 -1.40181835178750E-01  5.84928083758316E-02 -8.56246352435922E-02
  1.40181835178750E-01  5.84928083758316E-02 -8.56246352435922E-02
 -1.40181835178750E-01 -5.84928083758316E-02 -8.56246352435922E-02
 -1.40181835178750E-01  5.84928083758316E-02  8.56246352435922E-02
  1.40181835178750E-01 -5.84928083758316E-02  8.56246352435922E-02
 Total energy (etotal) [Ha]= -3.52079884344115E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.85464E-02
           Relative     =-1.37894E-04
 fconv : at Broyd/MD step   3, gradients have not converged yet. 
  max grad (force/stress) = 3.6278E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (4/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.39045348633069E+00  2.83931329775000E+00  8.73075071013474E+00
  1.86680721935537E+00  2.83931329775000E+00  3.75732035475608E+00
  1.98925173599687E+00  2.83931329775000E+00  6.80852065043828E+00
  8.73184415283933E+00  2.83931329775000E+00  1.82698620450457E+00
  3.35351495273015E+00  4.12131333241635E-01  2.39119573703678E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.37187097066932E+00  8.51793989325000E+00  4.29745354113475E+00
  7.89551723764463E+00  8.51793989325000E+00  8.19061752375610E+00
  7.77307272100314E+00  8.51793989325000E+00  2.37522348143829E+00
  1.03048030416068E+00  8.51793989325000E+00  6.26028337350457E+00
  6.40880950426987E+00  1.09451218577584E+01  6.82449290603679E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.41341954276693E+01  8.51793989325000E+00  1.35843627865248E-01
  1.76578416946446E+01  8.51793989325000E+00  5.10927398324390E+00
  1.75353971780031E+01  8.51793989325000E+00  2.05807368756172E+00
  1.07928047611607E+01  8.51793989325000E+00  7.03960813349543E+00
  1.61711339612699E+01  6.09075792874164E+00  6.47539860096321E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.51527779433307E+01  2.83931329775000E+00  4.56914079686526E+00
  1.16291316763554E+01  2.83931329775000E+00  6.75976814243918E-01
  1.17515761929969E+01  2.83931329775000E+00  6.49137085656172E+00
  1.84941686098393E+01  2.83931329775000E+00  2.60631096449543E+00
  1.31158394097301E+01  5.26649526225836E+00  2.04210143196322E+00
  1.61711339612699E+01  1.09451218577584E+01  6.47539860096321E+00
  1.31158394097301E+01  4.12131333241635E-01  2.04210143196322E+00
  3.35351495273015E+00  5.26649526225836E+00  2.39119573703678E+00
  6.40880950426987E+00  6.09075792874164E+00  6.82449290603679E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.76084528335129E-01  2.50000000000000E-01  9.84679165112690E-01
  9.56128444397681E-02  2.50000000000000E-01  4.23761391524719E-01
  1.01884123231045E-01  2.50000000000000E-01  7.67884532763462E-01
  4.47221570605463E-01  2.50000000000000E-01  2.06052756544253E-01
  1.71758015598710E-01  3.62879409581383E-02  2.69685929668476E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.23915471664871E-01  7.50000000000000E-01  4.84679165112691E-01
  4.04387155560232E-01  7.50000000000000E-01  9.23761391524722E-01
  3.98115876768955E-01  7.50000000000000E-01  2.67884532763462E-01
  5.27784293945376E-02  7.50000000000000E-01  7.06052756544254E-01
  3.28241984401291E-01  9.63712059041861E-01  7.69685929668478E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.23915471664871E-01  7.50000000000000E-01  1.53208348873091E-02
  9.04387155560232E-01  7.50000000000000E-01  5.76238608475278E-01
  8.98115876768955E-01  7.50000000000000E-01  2.32115467236539E-01
  5.52778429394537E-01  7.50000000000000E-01  7.93947243455746E-01
  8.28241984401292E-01  5.36287940958139E-01  7.30314070331522E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.76084528335129E-01  2.50000000000000E-01  5.15320834887310E-01
  5.95612844439768E-01  2.50000000000000E-01  7.62386084752802E-02
  6.01884123231045E-01  2.50000000000000E-01  7.32115467236538E-01
  9.47221570605463E-01  2.50000000000000E-01  2.93947243455746E-01
  6.71758015598708E-01  4.63712059041862E-01  2.30314070331524E-01
  8.28241984401292E-01  9.63712059041861E-01  7.30314070331522E-01
  6.71758015598708E-01  3.62879409581382E-02  2.30314070331524E-01
  1.71758015598710E-01  4.63712059041862E-01  2.69685929668476E-01
  3.28241984401291E-01  5.36287940958139E-01  7.69685929668478E-01
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -1.6653345369377348E-016   0.0000000000000000        5.5511151231257827E-016
  -2.2204460492503131E-016   0.0000000000000000        1.7763568394002505E-015
  -2.7755575615628914E-017   0.0000000000000000        0.0000000000000000     
  -1.1102230246251565E-016   0.0000000000000000        3.3306690738754696E-016
  -1.1657341758564144E-015   2.7755575615628914E-016   8.3266726846886741E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -2.2204460492503131E-016   0.0000000000000000       -5.5511151231257827E-016
   0.0000000000000000        0.0000000000000000       -1.4432899320127035E-015
  -4.9960036108132044E-016   0.0000000000000000       -2.2204460492503131E-016
  -4.3715031594615539E-016   0.0000000000000000       -1.1102230246251565E-016
   5.5511151231257827E-017   3.3306690738754696E-016  -7.7715611723760958E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   0.0000000000000000        0.0000000000000000        6.5919492087118670E-016
  -1.1102230246251565E-016   0.0000000000000000        1.4432899320127035E-015
   3.3306690738754696E-016   0.0000000000000000       -1.6653345369377348E-016
   1.1102230246251565E-016   0.0000000000000000        1.1102230246251565E-016
  -6.6613381477509392E-016  -3.3306690738754696E-016   7.7715611723760958E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -1.1102230246251565E-016   0.0000000000000000       -6.6613381477509392E-016
   1.1102230246251565E-016   0.0000000000000000       -1.1102230246251565E-015
  -3.3306690738754696E-016   0.0000000000000000        0.0000000000000000     
  -1.1102230246251565E-016   0.0000000000000000        1.6653345369377348E-016
   6.6613381477509392E-016  -2.7755575615628914E-016  -7.7715611723760958E-016
  -6.6613381477509392E-016   3.3306690738754696E-016   7.7715611723760958E-016
   6.6613381477509392E-016   2.8449465006019636E-016  -7.7715611723760958E-016
  -1.1657341758564144E-015  -2.7755575615628914E-016   8.3266726846886741E-016
   5.5511151231257827E-017  -3.3306690738754696E-016  -7.7715611723760958E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  40  32
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.02011

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    9.0548E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    4.8558E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -351.98895042424    -3.520E+02 7.867E-04 2.349E+02
 scprqt: <Vxc>= -3.8180021E-01 hartree

Simple mixing update:
  residual square of the potential :   120.07843764273555

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.3596E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.5425E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -351.81860175660     1.703E-01 2.786E-03 5.594E+02
 scprqt: <Vxc>= -3.8619061E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.393      0.607

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.9473E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0297E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.07971527698    -2.611E-01 2.799E-03 1.280E+01
 scprqt: <Vxc>= -3.8316837E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.542      0.215      0.243

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8423E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0394E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.09002656657    -1.031E-02 1.870E-04 1.174E+00
 scprqt: <Vxc>= -3.8307971E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.641      0.228      0.806E-01  0.510E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8609E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0809E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.09081555552    -7.890E-04 7.486E-05 3.127E-01
 scprqt: <Vxc>= -3.8334123E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.689      0.267      0.145E-01  0.270E-01  0.289E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8504E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0683E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.09100439566    -1.888E-04 3.345E-05 2.081E-02
 scprqt: <Vxc>= -3.8328836E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.818      0.179      0.131E-01 -0.126E-01  0.547E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8479E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0728E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.09101649908    -1.210E-05 3.742E-05 3.223E-03
 scprqt: <Vxc>= -3.8331382E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.444      0.563      0.188E-01 -0.208E-01 -0.588E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8486E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0725E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.09101983811    -3.339E-06 2.611E-05 7.476E-05
 scprqt: <Vxc>= -3.8331214E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.866      0.126      0.358E-01 -0.165E-01 -0.910E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0725E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.09102000200    -1.639E-07 3.165E-05 9.596E-05
 scprqt: <Vxc>= -3.8331302E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.935      0.107     -0.348E-01 -0.128E-01  0.552E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8483E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0723E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.09102010525    -1.033E-07 2.110E-05 5.400E-06
 scprqt: <Vxc>= -3.8331148E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.780      0.404     -0.153     -0.257E-01 -0.135E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8482E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.09102013354    -2.829E-08 2.805E-05 2.635E-06
 scprqt: <Vxc>= -3.8331224E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.710      0.470     -0.108     -0.779E-01  0.925E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8482E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.09102014480    -1.126E-08 1.825E-05 1.797E-06
 scprqt: <Vxc>= -3.8331188E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06      0.345     -0.266     -0.135     -0.355E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.09102015312    -8.325E-09 2.502E-05 7.810E-07
 scprqt: <Vxc>= -3.8331209E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21      0.270     -0.417     -0.602E-01 -0.254E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.09102015625    -3.122E-09 1.760E-05 1.010E-07
 scprqt: <Vxc>= -3.8331193E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.688      0.365      0.464E-01 -0.497E-01 -0.428E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.09102015701    -7.599E-10 2.226E-05 5.109E-08
 scprqt: <Vxc>= -3.8331198E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.519      0.373      0.164      0.588E-02 -0.340E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.09102015736    -3.520E-10 1.898E-05 8.788E-09
 scprqt: <Vxc>= -3.8331196E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.883      0.219      0.123E-01 -0.245E-01 -0.453E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.09102015752    -1.675E-10 2.111E-05 2.000E-08
 scprqt: <Vxc>= -3.8331200E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.496      0.647     -0.515E-01  0.513E-01 -0.113

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.09102015759    -6.770E-11 2.035E-05 1.595E-09
 scprqt: <Vxc>= -3.8331197E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.669      0.218      0.239     -0.894E-01  0.275E-02

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.09102015760    -6.708E-12 2.272E-05 3.088E-09
 scprqt: <Vxc>= -3.8331198E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.545      0.451      0.385E-01  0.912E-01 -0.102

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.09102015761    -1.040E-11 2.166E-05 2.856E-10
 scprqt: <Vxc>= -3.8331197E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00     -0.287      0.149      0.663E-01  0.970E-01

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 21  -352.09102015761    -3.524E-12 2.425E-05 9.068E-10
 scprqt: <Vxc>= -3.8331198E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.548       1.07     -0.512     -0.875E-01 -0.209E-01

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 22  -352.09102015761     5.173E-12 2.286E-05 1.884E-10
 scprqt: <Vxc>= -3.8331197E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.279      0.430      0.843     -0.444     -0.756E-01

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 23  -352.09102015762    -1.148E-11 2.565E-05 3.224E-10
 scprqt: <Vxc>= -3.8331198E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.316      0.242      0.316      0.603     -0.386

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 24  -352.09102015761     8.640E-12 2.390E-05 1.531E-10
 scprqt: <Vxc>= -3.8331197E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.07     -0.220     -0.262      0.379      0.431

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 25  -352.09102015761     3.183E-12 2.684E-05 1.318E-10
 scprqt: <Vxc>= -3.8331197E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.55       1.43      0.224     -0.216E-01  0.551

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 26  -352.09102015761    -4.775E-12 2.475E-05 5.403E-10
 scprqt: <Vxc>= -3.8331198E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.986      0.581E-01   1.77      -1.59     -0.337

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 27  -352.09102015761     5.116E-13 2.777E-05 1.032E-10
 scprqt: <Vxc>= -3.8331197E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.455      0.924       3.75       1.76      -3.64

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 28  -352.09102015761     6.423E-12 2.536E-05 1.110E-10
 scprqt: <Vxc>= -3.8331197E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.814     -0.404       1.10      0.476       1.67

 ITER STEP NUMBER    29
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 29
 Total charge density [el/Bohr^3]
,     Maximum=    8.8480E-01  at reduced coord.    0.7639    0.7500    0.9688
,     Minimum=    5.0724E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 29  -352.09102015761    -5.343E-12 2.840E-05 1.631E-11
 scprqt: <Vxc>= -3.8331197E-01 hartree

 At SCF step   29       vres2   =  1.63E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.09231790E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  3.88446453E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.79931656E-04  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS1_TIM4_DEN
ioarr: data written to disk file telast_1o_DS1_TIM4_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.39045348633068E+00  2.83931329775000E+00  8.73075071013475E+00
  1.86680721935537E+00  2.83931329775000E+00  3.75732035475609E+00
  1.98925173599687E+00  2.83931329775000E+00  6.80852065043828E+00
  8.73184415283932E+00  2.83931329775000E+00  1.82698620450457E+00
  3.35351495273013E+00  4.12131333241638E-01  2.39119573703678E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.37187097066932E+00  8.51793989325000E+00  4.29745354113475E+00
  7.89551723764463E+00  8.51793989325000E+00  8.19061752375609E+00
  7.77307272100313E+00  8.51793989325000E+00  2.37522348143828E+00
  1.03048030416068E+00  8.51793989325000E+00  6.26028337350457E+00
  6.40880950426988E+00  1.09451218577584E+01  6.82449290603679E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.41341954276693E+01  8.51793989325000E+00  1.35843627865254E-01
  1.76578416946446E+01  8.51793989325000E+00  5.10927398324391E+00
  1.75353971780031E+01  8.51793989325000E+00  2.05807368756172E+00
  1.07928047611607E+01  8.51793989325000E+00  7.03960813349543E+00
  1.61711339612699E+01  6.09075792874164E+00  6.47539860096322E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.51527779433307E+01  2.83931329775000E+00  4.56914079686525E+00
  1.16291316763554E+01  2.83931329775000E+00  6.75976814243909E-01
  1.17515761929969E+01  2.83931329775000E+00  6.49137085656172E+00
  1.84941686098393E+01  2.83931329775000E+00  2.60631096449543E+00
  1.31158394097301E+01  5.26649526225836E+00  2.04210143196322E+00
  1.61711339612699E+01  1.09451218577584E+01  6.47539860096322E+00
  1.31158394097301E+01  4.12131333241638E-01  2.04210143196322E+00
  3.35351495273013E+00  5.26649526225836E+00  2.39119573703678E+00
  6.40880950426988E+00  6.09075792874164E+00  6.82449290603679E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.76084528335129E-01  2.50000000000000E-01  9.84679165112690E-01
  9.56128444397679E-02  2.50000000000000E-01  4.23761391524721E-01
  1.01884123231045E-01  2.50000000000000E-01  7.67884532763462E-01
  4.47221570605463E-01  2.50000000000000E-01  2.06052756544254E-01
  1.71758015598709E-01  3.62879409581385E-02  2.69685929668477E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.23915471664871E-01  7.50000000000000E-01  4.84679165112690E-01
  4.04387155560232E-01  7.50000000000000E-01  9.23761391524721E-01
  3.98115876768955E-01  7.50000000000000E-01  2.67884532763462E-01
  5.27784293945372E-02  7.50000000000000E-01  7.06052756544254E-01
  3.28241984401291E-01  9.63712059041862E-01  7.69685929668477E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.23915471664871E-01  7.50000000000000E-01  1.53208348873098E-02
  9.04387155560232E-01  7.50000000000000E-01  5.76238608475279E-01
  8.98115876768955E-01  7.50000000000000E-01  2.32115467236538E-01
  5.52778429394537E-01  7.50000000000000E-01  7.93947243455746E-01
  8.28241984401291E-01  5.36287940958138E-01  7.30314070331523E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.76084528335129E-01  2.50000000000000E-01  5.15320834887310E-01
  5.95612844439768E-01  2.50000000000000E-01  7.62386084752791E-02
  6.01884123231045E-01  2.50000000000000E-01  7.32115467236538E-01
  9.47221570605463E-01  2.50000000000000E-01  2.93947243455746E-01
  6.71758015598709E-01  4.63712059041861E-01  2.30314070331523E-01
  8.28241984401291E-01  9.63712059041862E-01  7.30314070331523E-01
  6.71758015598709E-01  3.62879409581385E-02  2.30314070331523E-01
  1.71758015598709E-01  4.63712059041861E-01  2.69685929668477E-01
  3.28241984401291E-01  5.36287940958138E-01  7.69685929668477E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.87661E-02 1.13009E-02 (free atoms)
  1.54886024640786E-19 -0.00000000000000E+00 -3.09772049281573E-20
 -2.87661410250786E-02 -0.00000000000000E+00  9.18502615259372E-03
  2.60750024554216E-03 -0.00000000000000E+00 -2.22789288119504E-04
  2.59051676058336E-03 -0.00000000000000E+00 -1.90807994120483E-02
  1.30739399592237E-02 -0.00000000000000E+00 -1.26305751457048E-02
  2.92933572015325E-03  8.42716593338072E-03 -2.09624466273912E-03
  1.54886024640786E-19 -0.00000000000000E+00 -3.09772049281573E-20
  2.87661410250786E-02 -0.00000000000000E+00  9.18502615259372E-03
 -2.60750024554216E-03 -0.00000000000000E+00 -2.22789288119504E-04
 -2.59051676058336E-03 -0.00000000000000E+00 -1.90807994120483E-02
 -1.30739399592237E-02 -0.00000000000000E+00 -1.26305751457048E-02
 -2.92933572015325E-03 -8.42716593338072E-03 -2.09624466273912E-03
  1.54886024640786E-19 -0.00000000000000E+00 -3.09772049281573E-20
  2.87661410250786E-02 -0.00000000000000E+00 -9.18502615259372E-03
 -2.60750024554216E-03 -0.00000000000000E+00  2.22789288119504E-04
 -2.59051676058336E-03 -0.00000000000000E+00  1.90807994120483E-02
 -1.30739399592237E-02 -0.00000000000000E+00  1.26305751457048E-02
 -2.92933572015325E-03  8.42716593338072E-03  2.09624466273912E-03
  1.54886024640786E-19 -0.00000000000000E+00 -3.09772049281573E-20
 -2.87661410250786E-02 -0.00000000000000E+00 -9.18502615259372E-03
  2.60750024554216E-03 -0.00000000000000E+00  2.22789288119504E-04
  2.59051676058336E-03 -0.00000000000000E+00  1.90807994120483E-02
  1.30739399592237E-02  1.38917551973948E-31  1.26305751457048E-02
  2.92933572015325E-03 -8.42716593338072E-03  2.09624466273912E-03
 -2.92933572015325E-03 -8.42716593338072E-03  2.09624466273912E-03
  2.92933572015325E-03  8.42716593338072E-03  2.09624466273912E-03
  2.92933572015325E-03 -8.42716593338072E-03 -2.09624466273912E-03
 -2.92933572015325E-03  8.42716593338072E-03 -2.09624466273912E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.61648804125271E-01  0.00000000000000E+00 -8.14399008789694E-02
 -5.09105268373795E-02  0.00000000000000E+00  1.97538224060745E-03
 -5.05789302562227E-02  0.00000000000000E+00  1.69181708031381E-01
 -2.55264087626558E-01  0.00000000000000E+00  1.11990186072590E-01
 -5.71942514872316E-02 -9.57094571879747E-02  1.85865510577054E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -5.61648804125271E-01  0.00000000000000E+00 -8.14399008789695E-02
  5.09105268373795E-02  0.00000000000000E+00  1.97538224060745E-03
  5.05789302562227E-02  0.00000000000000E+00  1.69181708031381E-01
  2.55264087626558E-01  0.00000000000000E+00  1.11990186072590E-01
  5.71942514872316E-02  9.57094571879747E-02  1.85865510577054E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -5.61648804125271E-01  0.00000000000000E+00  8.14399008789695E-02
  5.09105268373795E-02  0.00000000000000E+00 -1.97538224060745E-03
  5.05789302562227E-02  0.00000000000000E+00 -1.69181708031381E-01
  2.55264087626558E-01  0.00000000000000E+00 -1.11990186072590E-01
  5.71942514872316E-02 -9.57094571879747E-02 -1.85865510577054E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.61648804125271E-01  0.00000000000000E+00  8.14399008789694E-02
 -5.09105268373795E-02  0.00000000000000E+00 -1.97538224060745E-03
 -5.05789302562227E-02  0.00000000000000E+00 -1.69181708031381E-01
 -2.55264087626558E-01 -1.57772181044202E-30 -1.11990186072590E-01
 -5.71942514872316E-02  9.57094571879747E-02 -1.85865510577054E-02
  5.71942514872316E-02  9.57094571879747E-02 -1.85865510577054E-02
 -5.71942514872316E-02 -9.57094571879747E-02 -1.85865510577054E-02
 -5.71942514872316E-02  9.57094571879747E-02  1.85865510577054E-02
  5.71942514872316E-02 -9.57094571879747E-02  1.85865510577054E-02
 Total energy (etotal) [Ha]= -3.52091020157611E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.11358E-02
           Relative     =-3.16282E-05
 fconv : at Broyd/MD step   4, gradients have not converged yet. 
  max grad (force/stress) = 2.8766E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (5/5) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.31745821765981E+00  2.83931329775000E+00  8.76279027971840E+00
  1.87379812004983E+00  2.83931329775000E+00  3.76419643658620E+00
  2.00892865430610E+00  2.83931329775000E+00  6.80008422355182E+00
  8.73302890523159E+00  2.83931329775000E+00  1.80336776869349E+00
  3.37413361695094E+00  4.14674198427718E-01  2.36973895284817E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.44486623934017E+00  8.51793989325000E+00  4.32949311071840E+00
  7.88852633695019E+00  8.51793989325000E+00  8.19749360558618E+00
  7.75339580269389E+00  8.51793989325000E+00  2.36678705455183E+00
  1.02929555176840E+00  8.51793989325000E+00  6.23666493769348E+00
  6.38819084004904E+00  1.09425789925723E+01  6.80303612184817E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.42071906963402E+01  8.51793989325000E+00  1.03804058281603E-01
  1.76508507939502E+01  8.51793989325000E+00  5.10239790141382E+00
  1.75157202596939E+01  8.51793989325000E+00  2.06651011444817E+00
  1.07916200087684E+01  8.51793989325000E+00  7.06322656930652E+00
  1.61505152970490E+01  6.09330079392771E+00  6.49685538515183E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.50797826746598E+01  2.83931329775000E+00  4.53710122728160E+00
  1.16361225770498E+01  2.83931329775000E+00  6.69100732413800E-01
  1.17712531113061E+01  2.83931329775000E+00  6.49980728344818E+00
  1.84953533622316E+01  2.83931329775000E+00  2.62992940030652E+00
  1.31364580739510E+01  5.26395239707229E+00  2.06355821615183E+00
  1.61505152970490E+01  1.09425789925723E+01  6.49685538515183E+00
  1.31364580739510E+01  4.14674198427718E-01  2.06355821615183E+00
  3.37413361695094E+00  5.26395239707229E+00  2.36973895284817E+00
  6.38819084004904E+00  6.09330079392771E+00  6.80303612184817E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.72345907016385E-01  2.50000000000000E-01  9.88292679880851E-01
  9.59708995692226E-02  2.50000000000000E-01  4.24536895801559E-01
  1.02891922059895E-01  2.50000000000000E-01  7.66933048285334E-01
  4.47282250436249E-01  2.50000000000000E-01  2.03389001452870E-01
  1.72814048120043E-01  3.65118388622634E-02  2.67265971861605E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.27654092983614E-01  7.50000000000000E-01  4.88292679880851E-01
  4.04029100430778E-01  7.50000000000000E-01  9.24536895801557E-01
  3.97108077940105E-01  7.50000000000000E-01  2.66933048285334E-01
  5.27177495637504E-02  7.50000000000000E-01  7.03389001452869E-01
  3.27185951879956E-01  9.63488161137738E-01  7.67265971861605E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.27654092983615E-01  7.50000000000000E-01  1.17073201191493E-02
  9.04029100430777E-01  7.50000000000000E-01  5.75463104198443E-01
  8.97108077940105E-01  7.50000000000000E-01  2.33066951714665E-01
  5.52717749563751E-01  7.50000000000000E-01  7.96610998547131E-01
  8.27185951879956E-01  5.36511838862262E-01  7.32734028138395E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.72345907016385E-01  2.50000000000000E-01  5.11707320119149E-01
  5.95970899569223E-01  2.50000000000000E-01  7.54631041984409E-02
  6.02891922059895E-01  2.50000000000000E-01  7.33066951714666E-01
  9.47282250436249E-01  2.50000000000000E-01  2.96610998547131E-01
  6.72814048120044E-01  4.63488161137737E-01  2.32734028138396E-01
  8.27185951879956E-01  9.63488161137738E-01  7.32734028138395E-01
  6.72814048120044E-01  3.65118388622634E-02  2.32734028138396E-01
  1.72814048120043E-01  4.63488161137737E-01  2.67265971861605E-01
  3.27185951879956E-01  5.36511838862262E-01  7.67265971861605E-01

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  40  32
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.02011

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.7925E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    4.7339E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.05455188653    -3.521E+02 6.117E-04 9.364E+01
 scprqt: <Vxc>= -3.8167147E-01 hartree

Simple mixing update:
  residual square of the potential :   51.586268953310622

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.2299E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.4529E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.00642120754     4.813E-02 1.404E-03 1.771E+02
 scprqt: <Vxc>= -3.8484758E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.424      0.576

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.6889E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1399E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.09423846388    -8.782E-02 1.219E-03 6.821E+00
 scprqt: <Vxc>= -3.8314641E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.648      0.207      0.145

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.6133E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.0826E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.09918795327    -4.949E-03 1.263E-04 2.935E-01
 scprqt: <Vxc>= -3.8297807E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.634      0.253      0.786E-01  0.346E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.6241E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1198E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.09939301511    -2.051E-04 1.794E-04 9.509E-02
 scprqt: <Vxc>= -3.8316099E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.618      0.334      0.299E-01  0.205E-01 -0.265E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.6136E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1150E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.09948730334    -9.429E-05 7.478E-05 3.721E-03
 scprqt: <Vxc>= -3.8312879E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.917      0.867E-01 -0.275E-02 -0.309E-02  0.326E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.6133E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1154E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.09949353928    -6.236E-06 1.264E-04 1.404E-03
 scprqt: <Vxc>= -3.8312793E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.463      0.615     -0.257E-01 -0.439E-01 -0.754E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.6105E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1161E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.09949608686    -2.548E-06 5.502E-05 3.713E-04
 scprqt: <Vxc>= -3.8313508E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09      0.143     -0.138     -0.635E-01 -0.262E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.6101E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1163E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.09949808658    -2.000E-06 9.548E-05 1.852E-04
 scprqt: <Vxc>= -3.8313333E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.957      0.469     -0.226     -0.190     -0.154E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.6076E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1161E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.09949872936    -6.428E-07 3.972E-05 2.485E-04
 scprqt: <Vxc>= -3.8313522E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.599      0.861     -0.885E-01 -0.288     -0.118

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.6081E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.09949923399    -5.046E-07 7.074E-05 3.534E-05
 scprqt: <Vxc>= -3.8313235E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.775      0.233      0.229E-01 -0.102E-01 -0.166E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.6073E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1161E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.09949934620    -1.122E-07 2.833E-05 9.093E-06
 scprqt: <Vxc>= -3.8313409E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.666      0.360      0.277E-01 -0.107E-01 -0.358E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.6073E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.09949940646    -6.026E-08 5.167E-05 2.105E-06
 scprqt: <Vxc>= -3.8313331E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.638      0.550     -0.164E-02 -0.846E-01 -0.618E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.09949942825    -2.179E-08 2.003E-05 2.426E-06
 scprqt: <Vxc>= -3.8313392E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.866      0.419     -0.289      0.781E-02  0.447E-03

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.6069E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.09949943645    -8.199E-09 3.720E-05 1.701E-07
 scprqt: <Vxc>= -3.8313356E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.490      0.442      0.161     -0.117      0.149E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.6069E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.09949943778    -1.326E-09 1.407E-05 1.164E-07
 scprqt: <Vxc>= -3.8313362E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.578      0.334      0.178      0.387E-01 -0.110

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.6069E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.09949943902    -1.241E-09 2.651E-05 6.622E-08
 scprqt: <Vxc>= -3.8313355E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.654      0.188      0.897E-01  0.123     -0.695E-02

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.09949943935    -3.261E-10 1.181E-05 2.992E-09
 scprqt: <Vxc>= -3.8313361E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.578      0.514     -0.793E-01 -0.327E-01  0.353E-01

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.09949943942    -7.918E-11 1.876E-05 4.183E-09
 scprqt: <Vxc>= -3.8313358E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.179      0.600      0.342     -0.103     -0.295E-01

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.09949943945    -2.740E-11 1.071E-05 1.823E-09
 scprqt: <Vxc>= -3.8313360E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.02     -0.552      0.351      0.302     -0.103

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 21  -352.09949943948    -2.757E-11 1.701E-05 2.701E-09
 scprqt: <Vxc>= -3.8313359E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.44      0.374     -0.952      0.182     -0.138E-01

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 22  -352.09949943949    -5.343E-12 9.670E-06 4.913E-10
 scprqt: <Vxc>= -3.8313360E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.436      0.888      0.365     -0.800      0.158

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 23  -352.09949943949    -2.842E-13 1.547E-05 2.149E-09
 scprqt: <Vxc>= -3.8313359E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.484      0.255      0.441      0.367     -0.607

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 24  -352.09949943949    -1.535E-12 8.708E-06 1.299E-09
 scprqt: <Vxc>= -3.8313360E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.928     -0.719E-01  0.693E-01  0.206      0.284

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 25  -352.09949943949     5.684E-13 1.401E-05 1.536E-09
 scprqt: <Vxc>= -3.8313359E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.585      0.768      0.329      0.246      0.450

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 26  -352.09949943949     9.095E-13 7.820E-06 1.443E-09
 scprqt: <Vxc>= -3.8313359E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.741E-01  -1.57      0.335       1.27      0.497

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 27  -352.09949943948     1.933E-12 1.264E-05 1.634E-09
 scprqt: <Vxc>= -3.8313359E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.68      -2.51       1.37       3.57      -1.73

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 28  -352.09949943949    -5.684E-12 7.006E-06 9.665E-10
 scprqt: <Vxc>= -3.8313359E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.338       2.50     -0.889     -0.480       5.22

 ITER STEP NUMBER    29
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 29
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 29  -352.09949943948     9.550E-12 1.137E-05 3.315E-09
 scprqt: <Vxc>= -3.8313359E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.26      0.613      0.142E-01   4.67      -8.58

 ITER STEP NUMBER    30
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 30
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 30  -352.09949943949    -7.617E-12 6.264E-06 1.184E-09
 scprqt: <Vxc>= -3.8313360E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.81      0.211     -0.521       2.59      -6.78

 ITER STEP NUMBER    31
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 31
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 31  -352.09949943949    -3.411E-13 1.021E-05 1.001E-09
 scprqt: <Vxc>= -3.8313360E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21      0.128      0.259      0.931      -1.03

 ITER STEP NUMBER    32
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 32
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 32  -352.09949943949    -4.604E-12 5.591E-06 5.252E-10
 scprqt: <Vxc>= -3.8313360E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.646      0.807      0.220     -0.517      0.670

 ITER STEP NUMBER    33
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 33
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 33  -352.09949943949     1.819E-12 9.139E-06 1.135E-10
 scprqt: <Vxc>= -3.8313360E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.465      0.371      0.594      0.499E-01 -0.363

 ITER STEP NUMBER    34
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 34
 Total charge density [el/Bohr^3]
,     Maximum=    8.6068E-01  at reduced coord.    0.7222    0.7500    0.9063
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 34  -352.09949943948     7.049E-12 4.983E-06 1.895E-11
 scprqt: <Vxc>= -3.8313360E-01 hartree

 At SCF step   34       vres2   =  1.90E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.11824505E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.60013186E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.65921058E-04  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS1_TIM5_DEN
ioarr: data written to disk file telast_1o_DS1_TIM5_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.31745821765981E+00  2.83931329775000E+00  8.76279027971840E+00
  1.87379812004983E+00  2.83931329775000E+00  3.76419643658620E+00
  2.00892865430610E+00  2.83931329775000E+00  6.80008422355182E+00
  8.73302890523159E+00  2.83931329775000E+00  1.80336776869349E+00
  3.37413361695094E+00  4.14674198427718E-01  2.36973895284817E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.44486623934017E+00  8.51793989325000E+00  4.32949311071840E+00
  7.88852633695019E+00  8.51793989325000E+00  8.19749360558618E+00
  7.75339580269389E+00  8.51793989325000E+00  2.36678705455183E+00
  1.02929555176840E+00  8.51793989325000E+00  6.23666493769348E+00
  6.38819084004904E+00  1.09425789925723E+01  6.80303612184817E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.42071906963402E+01  8.51793989325000E+00  1.03804058281603E-01
  1.76508507939502E+01  8.51793989325000E+00  5.10239790141382E+00
  1.75157202596939E+01  8.51793989325000E+00  2.06651011444817E+00
  1.07916200087684E+01  8.51793989325000E+00  7.06322656930652E+00
  1.61505152970490E+01  6.09330079392771E+00  6.49685538515183E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.50797826746598E+01  2.83931329775000E+00  4.53710122728160E+00
  1.16361225770498E+01  2.83931329775000E+00  6.69100732413800E-01
  1.17712531113061E+01  2.83931329775000E+00  6.49980728344818E+00
  1.84953533622316E+01  2.83931329775000E+00  2.62992940030652E+00
  1.31364580739510E+01  5.26395239707229E+00  2.06355821615183E+00
  1.61505152970490E+01  1.09425789925723E+01  6.49685538515183E+00
  1.31364580739510E+01  4.14674198427718E-01  2.06355821615183E+00
  3.37413361695094E+00  5.26395239707229E+00  2.36973895284817E+00
  6.38819084004904E+00  6.09330079392771E+00  6.80303612184817E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.72345907016385E-01  2.50000000000000E-01  9.88292679880851E-01
  9.59708995692226E-02  2.50000000000000E-01  4.24536895801559E-01
  1.02891922059895E-01  2.50000000000000E-01  7.66933048285334E-01
  4.47282250436249E-01  2.50000000000000E-01  2.03389001452870E-01
  1.72814048120043E-01  3.65118388622634E-02  2.67265971861605E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.27654092983614E-01  7.50000000000000E-01  4.88292679880851E-01
  4.04029100430778E-01  7.50000000000000E-01  9.24536895801557E-01
  3.97108077940105E-01  7.50000000000000E-01  2.66933048285334E-01
  5.27177495637504E-02  7.50000000000000E-01  7.03389001452869E-01
  3.27185951879956E-01  9.63488161137738E-01  7.67265971861605E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.27654092983615E-01  7.50000000000000E-01  1.17073201191493E-02
  9.04029100430777E-01  7.50000000000000E-01  5.75463104198443E-01
  8.97108077940105E-01  7.50000000000000E-01  2.33066951714665E-01
  5.52717749563751E-01  7.50000000000000E-01  7.96610998547131E-01
  8.27185951879956E-01  5.36511838862262E-01  7.32734028138395E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.72345907016385E-01  2.50000000000000E-01  5.11707320119149E-01
  5.95970899569223E-01  2.50000000000000E-01  7.54631041984409E-02
  6.02891922059895E-01  2.50000000000000E-01  7.33066951714666E-01
  9.47282250436249E-01  2.50000000000000E-01  2.96610998547131E-01
  6.72814048120044E-01  4.63488161137737E-01  2.32734028138396E-01
  8.27185951879956E-01  9.63488161137738E-01  7.32734028138395E-01
  6.72814048120044E-01  3.65118388622634E-02  2.32734028138396E-01
  1.72814048120043E-01  4.63488161137737E-01  2.67265971861605E-01
  3.27185951879956E-01  5.36511838862262E-01  7.67265971861605E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.05340E-02 8.79155E-03 (free atoms)
 -7.74430123203932E-20 -0.00000000000000E+00 -1.85863229568944E-19
 -5.05199691055014E-03 -0.00000000000000E+00  1.19996783601963E-02
  2.19683825597448E-03 -0.00000000000000E+00 -6.83838865902831E-03
 -7.97815287170651E-03 -0.00000000000000E+00 -2.05339990458540E-02
  1.15165505248882E-02  1.38917551973948E-31 -1.26749820208959E-02
 -5.99801705432822E-04  4.66581171466667E-03  4.36659291575075E-03
 -7.74430123202720E-20 -0.00000000000000E+00 -1.85863229568944E-19
  5.05199691055014E-03 -0.00000000000000E+00  1.19996783601963E-02
 -2.19683825597448E-03 -0.00000000000000E+00 -6.83838865902831E-03
  7.97815287170651E-03 -0.00000000000000E+00 -2.05339990458540E-02
 -1.15165505248882E-02 -0.00000000000000E+00 -1.26749820208959E-02
  5.99801705432822E-04 -4.66581171466667E-03  4.36659291575075E-03
 -7.74430123204740E-20 -0.00000000000000E+00 -1.85863229568944E-19
  5.05199691055014E-03 -1.38917551973948E-31 -1.19996783601963E-02
 -2.19683825597448E-03 -0.00000000000000E+00  6.83838865902831E-03
  7.97815287170651E-03 -0.00000000000000E+00  2.05339990458540E-02
 -1.15165505248882E-02  1.04188163980461E-31  1.26749820208959E-02
  5.99801705432822E-04  4.66581171466667E-03 -4.36659291575075E-03
 -7.74430123203932E-20 -0.00000000000000E+00 -1.85863229568944E-19
 -5.05199691055014E-03 -1.38917551973948E-31 -1.19996783601963E-02
  2.19683825597448E-03 -0.00000000000000E+00  6.83838865902831E-03
 -7.97815287170651E-03 -0.00000000000000E+00  2.05339990458540E-02
  1.15165505248882E-02 -1.38917551973948E-31  1.26749820208959E-02
 -5.99801705432822E-04 -4.66581171466667E-03 -4.36659291575075E-03
  5.99801705432822E-04 -4.66581171466667E-03 -4.36659291575075E-03
 -5.99801705432822E-04  4.66581171466667E-03 -4.36659291575075E-03
 -5.99801705432822E-04 -4.66581171466667E-03  4.36659291575075E-03
  5.99801705432822E-04  4.66581171466667E-03  4.36659291575075E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  9.86384659931041E-02  0.00000000000000E+00 -1.06396280206338E-01
 -4.28924956687457E-02  0.00000000000000E+00  6.06332181651839E-02
  1.55770633802290E-01  0.00000000000000E+00  1.82066639676466E-01
 -2.24856605698784E-01 -1.57772181044202E-30  1.12383923820727E-01
  1.17109177165943E-02 -5.29908049850032E-02 -3.87168080231466E-02
 -2.36658271566304E-30  0.00000000000000E+00  0.00000000000000E+00
 -9.86384659931041E-02  0.00000000000000E+00 -1.06396280206338E-01
  4.28924956687457E-02  0.00000000000000E+00  6.06332181651839E-02
 -1.55770633802290E-01  0.00000000000000E+00  1.82066639676466E-01
  2.24856605698784E-01  0.00000000000000E+00  1.12383923820727E-01
 -1.17109177165943E-02  5.29908049850032E-02 -3.87168080231466E-02
  1.57772181044202E-30  0.00000000000000E+00  0.00000000000000E+00
 -9.86384659931041E-02  1.57772181044202E-30  1.06396280206338E-01
  4.28924956687457E-02  0.00000000000000E+00 -6.06332181651838E-02
 -1.55770633802290E-01  0.00000000000000E+00 -1.82066639676466E-01
  2.24856605698784E-01 -1.18329135783152E-30 -1.12383923820727E-01
 -1.17109177165943E-02 -5.29908049850032E-02  3.87168080231465E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  9.86384659931041E-02  1.57772181044202E-30  1.06396280206338E-01
 -4.28924956687457E-02  0.00000000000000E+00 -6.06332181651838E-02
  1.55770633802290E-01  0.00000000000000E+00 -1.82066639676466E-01
 -2.24856605698784E-01  1.57772181044202E-30 -1.12383923820727E-01
  1.17109177165943E-02  5.29908049850032E-02  3.87168080231465E-02
 -1.17109177165943E-02  5.29908049850032E-02  3.87168080231465E-02
  1.17109177165943E-02 -5.29908049850032E-02  3.87168080231465E-02
  1.17109177165943E-02  5.29908049850032E-02 -3.87168080231465E-02
 -1.17109177165943E-02 -5.29908049850032E-02 -3.87168080231465E-02
 Total energy (etotal) [Ha]= -3.52099499439484E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-8.47928E-03
           Relative     =-2.40824E-05

 fconv : WARNING -
  ntime=    5 was not enough Broyd/MD steps to converge gradients: 
  max grad (force/stress) = 2.0534E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)


--- !RelaxConvergenceWarning
message: | 
    
     fconv : WARNING -
      ntime=    5 was not enough Broyd/MD steps to converge gradients: 
      max grad (force/stress) = 2.0534E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

...
 Geometry Optimization Precondition:           0
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file telast_1o_DS1_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     1.83, wall:     2.37

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   0.3941 [eV], located at k-point      :   0.1250  0.0714  0.0556
   Fundamental gap     =   0.2209 [eV], Top of valence bands at :   0.1250  0.5000  0.0556
                                        Bottom of conduction at :   0.1250  0.0714  0.0556

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.11824505E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.60013186E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.65921058E-04  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -1.3119E+01 GPa]
- sigma(1 1)=  1.21162932E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  1.35340529E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  1.37078685E+01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =   40

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

 find_getdtset : getxred/=0, take data from output of dataset with index  1.


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)

 Unit cell volume ucvol=  1.9661352E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     16.538   => boxcut(ratio)=   2.01442
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 03-Li.GGA.fhi
- pspatm: opening atomic psp file    03-Li.GGA.fhi
- lithium, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  3.00000   1.00000     21003                znucl, zion, pspdat
    6   11    3    2       433   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    4.64900000000000    1.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    1.23671241
         --- l  ekb(1:nproj) -->
             0    0.973348
             1   -0.648459
             3   -0.970140
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 26-Fe.GGA.fhi
- pspatm: opening atomic psp file    26-Fe.GGA.fhi
- iron, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 1 local
- 26.00000   8.00000     11001                znucl, zion, pspdat
    6   11    3    1       521   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=   55.77939889
         --- l  ekb(1:nproj) -->
             0   -1.869362
             2   -7.454216
             3   -1.202972
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is 15-P.GGA.fhi
- pspatm: opening atomic psp file    15-P.GGA.fhi
- phosphorus, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
- 15.00000   5.00000     21003                znucl, zion, pspdat
    6   11    3    2       499   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    1.26983417
         --- l  ekb(1:nproj) -->
             0    4.175676
             1    2.277966
             3   -1.487146
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   4  psp file is 08-O.GGA.fhi
- pspatm: opening atomic psp file    08-O.GGA.fhi
- oxygen, fhi98PP : Trouiller-Martins-type, GGA Perdew/Burke/Ernzerhof (1996), l= 2 local
-  8.00000   6.00000     21003                znucl, zion, pspdat
    6   11    3    2       473   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.024700          amesh (Hamman grid)
 pspatm: epsatm=    3.69310156
         --- l  ekb(1:nproj) -->
             0    2.919212
             1   -2.890047
             3   -3.320245
 pspatm: atomic psp has been read  and splines computed

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
inwffil: examining the header of disk file telast_1o_DS1_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.8.1            |  ABINIT  code version 7.8.1
. date 20140731 bantot 3200 natom   28  |  date 20140731 bantot 3200 natom   28
  nkpt  40 nsym  8 ngfft  72,  45,  36  |  nkpt  40 nsym  8 ngfft  72,  40,  32
  ntypat  4 ecut_eff  16.5375000        |  ntypat  4 ecut_eff  15.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    19.5246489   0.0000000   0.0000000  |    19.5246489   0.0000000   0.0000000
     0.0000000  11.3572532   0.0000000  |     0.0000000  11.3572532   0.0000000
     0.0000000   0.0000000   8.8665943  |     0.0000000   0.0000000   8.8665943

--- !WARNING
message: |
    input ecut_eff=   16.537500 /= disk file ecut_eff=   15.000000.
src_file: m_header.F90
src_line: 2991
...

  nband:                                |  nband:
    80  80  80  80  80  80  80  80  80  |    80  80  80  80  80  80  80  80  80
    80  80  80  80  80  80  80  80  80  |    80  80  80  80  80  80  80  80  80
    80  80  80  80  80  80  80  80  80  |    80  80  80  80  80  80  80  80  80
    80  80  80  80  80  80  80  80  80  |    80  80  80  80  80  80  80  80  80
    80  80  80  80                      |    80  80  80  80
  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1              |    1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0  1           |   -1  0  0  0 -1  0  0  0  1
   -1  0  0  0  1  0  0  0 -1           |   -1  0  0  0  1  0  0  0 -1
    1  0  0  0 -1  0  0  0 -1           |    1  0  0  0 -1  0  0  0 -1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
    1  0  0  0  1  0  0  0 -1           |    1  0  0  0  1  0  0  0 -1
    1  0  0  0 -1  0  0  0  1           |    1  0  0  0 -1  0  0  0  1
   -1  0  0  0  1  0  0  0  1           |   -1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  2  3  4  4  4  1  2  3  4  4  4  |    1  2  3  4  4  4  1  2  3  4  4  4
    1  2  3  4  4  4  1  2  3  4  4  4  |    1  2  3  4  4  4  1  2  3  4  4  4
    4  4  4  4                          |    4  4  4  4
  so_psp  :                             |  so_psp  :
    1  1  1  1                          |    1  1  1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1                          |    1  1  1  1
  kpt:                                  |  kpt:
     0.1250000   0.0714286   0.0555556  |     0.1250000   0.0714286   0.0555556
     0.3750000   0.0714286   0.0555556  |     0.3750000   0.0714286   0.0555556
     0.1250000   0.2142857   0.0555556  |     0.1250000   0.2142857   0.0555556
     0.3750000   0.2142857   0.0555556  |     0.3750000   0.2142857   0.0555556
     0.1250000   0.3571429   0.0555556  |     0.1250000   0.3571429   0.0555556
  wtk:                                  |  wtk:
    0.032  0.032  0.032  0.032  0.032   |    0.032  0.032  0.032  0.032  0.032
  occ:                                  |  occ:
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0  |   2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0 2.0
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.0000000   0.5000000  |     0.5000000   0.0000000   0.5000000
     0.0000000   0.5000000   0.0000000  |     0.0000000   0.5000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
    -0.0000000  -0.0000000  -0.0000000  |    -0.0000000  -0.0000000  -0.0000000
     0.5000000  -0.0000000   0.5000000  |     0.5000000  -0.0000000   0.5000000
    -0.0000000   0.5000000  -0.0000000  |    -0.0000000   0.5000000  -0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
   znucl:                               |   znucl:
    3.00 26.00 15.00  8.00              |    3.00 26.00 15.00  8.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   1.0  |  pspdat  21003 pspcod    6 zion   1.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  11001 pspcod    6 zion   8.0  |  pspdat  11001 pspcod    6 zion   8.0
  pseudopotential atom type  3:         |  pseudopotential atom type  3:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   5.0  |  pspdat  21003 pspcod    6 zion   5.0
  pseudopotential atom type  4:         |  pseudopotential atom type  4:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  21003 pspcod    6 zion   6.0  |  pspdat  21003 pspcod    6 zion   6.0
  xred:                                 |  xred:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2723459   0.2500000   0.9882927  |     0.2723459   0.2500000   0.9882927
     0.0959709   0.2500000   0.4245369  |     0.0959709   0.2500000   0.4245369
     0.1028919   0.2500000   0.7669330  |     0.1028919   0.2500000   0.7669330
     0.4472823   0.2500000   0.2033890  |     0.4472823   0.2500000   0.2033890
     0.1728140   0.0365118   0.2672660  |     0.1728140   0.0365118   0.2672660
     0.5000000   0.0000000   0.5000000  |     0.5000000   0.0000000   0.5000000
     0.2276541   0.7500000   0.4882927  |     0.2276541   0.7500000   0.4882927
     0.4040291   0.7500000   0.9245369  |     0.4040291   0.7500000   0.9245369
     0.3971081   0.7500000   0.2669330  |     0.3971081   0.7500000   0.2669330
     0.0527177   0.7500000   0.7033890  |     0.0527177   0.7500000   0.7033890
     0.3271860   0.9634882   0.7672660  |     0.3271860   0.9634882   0.7672660
     0.0000000   0.5000000   0.0000000  |     0.0000000   0.5000000   0.0000000
     0.7276541   0.7500000   0.0117073  |     0.7276541   0.7500000   0.0117073
     0.9040291   0.7500000   0.5754631  |     0.9040291   0.7500000   0.5754631
     0.8971081   0.7500000   0.2330670  |     0.8971081   0.7500000   0.2330670
     0.5527177   0.7500000   0.7966110  |     0.5527177   0.7500000   0.7966110
     0.8271860   0.5365118   0.7327340  |     0.8271860   0.5365118   0.7327340
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.7723459   0.2500000   0.5117073  |     0.7723459   0.2500000   0.5117073
     0.5959709   0.2500000   0.0754631  |     0.5959709   0.2500000   0.0754631
     0.6028919   0.2500000   0.7330670  |     0.6028919   0.2500000   0.7330670
     0.9472823   0.2500000   0.2966110  |     0.9472823   0.2500000   0.2966110
     0.6728140   0.4634882   0.2327340  |     0.6728140   0.4634882   0.2327340
     0.8271860   0.9634882   0.7327340  |     0.8271860   0.9634882   0.7327340
     0.6728140   0.0365118   0.2327340  |     0.6728140   0.0365118   0.2327340
     0.1728140   0.4634882   0.2672660  |     0.1728140   0.4634882   0.2672660
     0.3271860   0.5365118   0.7672660  |     0.3271860   0.5365118   0.7672660

--- !WARNING
message: |
    Restart of self-consistent calculation need translated wavefunctions.
src_file: m_header.F90
src_line: 3453
...

  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the plane-wave cutoff
================================================================================
-inwffil : will read wavefunctions from disk file telast_1o_DS1_WFK
 initwf : disk file gives npw=  5455 nband=    80 for kpt number=    1
 initwf :    80 bands have been initialized from disk
- newkpt: read input wf with ikpt,npw=   1    5455, make ikpt,npw=   1    6309

_setup2: Arith. and geom. avg. npw (full set) are    6315.016    6315.006
mkrho: echo density (plane-wave part only)
 Total charge density [el/Bohr^3]
,     Maximum=    8.8584E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02

================================================================================

=== [ionmov= 2] Broyden-Fletcher-Goldfard-Shanno method (forces)            
================================================================================

--- Iteration: ( 1/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.31745821765981E+00  2.83931329775000E+00  8.76279027971840E+00
  1.87379812004983E+00  2.83931329775000E+00  3.76419643658620E+00
  2.00892865430610E+00  2.83931329775000E+00  6.80008422355182E+00
  8.73302890523159E+00  2.83931329775000E+00  1.80336776869349E+00
  3.37413361695094E+00  4.14674198427718E-01  2.36973895284817E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.44486623934017E+00  8.51793989325000E+00  4.32949311071840E+00
  7.88852633695019E+00  8.51793989325000E+00  8.19749360558618E+00
  7.75339580269389E+00  8.51793989325000E+00  2.36678705455183E+00
  1.02929555176840E+00  8.51793989325000E+00  6.23666493769348E+00
  6.38819084004904E+00  1.09425789925723E+01  6.80303612184817E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.42071906963402E+01  8.51793989325000E+00  1.03804058281603E-01
  1.76508507939502E+01  8.51793989325000E+00  5.10239790141382E+00
  1.75157202596939E+01  8.51793989325000E+00  2.06651011444817E+00
  1.07916200087684E+01  8.51793989325000E+00  7.06322656930652E+00
  1.61505152970490E+01  6.09330079392771E+00  6.49685538515183E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.50797826746598E+01  2.83931329775000E+00  4.53710122728160E+00
  1.16361225770498E+01  2.83931329775000E+00  6.69100732413800E-01
  1.17712531113061E+01  2.83931329775000E+00  6.49980728344818E+00
  1.84953533622316E+01  2.83931329775000E+00  2.62992940030652E+00
  1.31364580739510E+01  5.26395239707229E+00  2.06355821615183E+00
  1.61505152970490E+01  1.09425789925723E+01  6.49685538515183E+00
  1.31364580739510E+01  4.14674198427718E-01  2.06355821615183E+00
  3.37413361695094E+00  5.26395239707229E+00  2.36973895284817E+00
  6.38819084004904E+00  6.09330079392771E+00  6.80303612184817E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.72345907016385E-01  2.50000000000000E-01  9.88292679880851E-01
  9.59708995692226E-02  2.50000000000000E-01  4.24536895801559E-01
  1.02891922059895E-01  2.50000000000000E-01  7.66933048285334E-01
  4.47282250436249E-01  2.50000000000000E-01  2.03389001452870E-01
  1.72814048120043E-01  3.65118388622634E-02  2.67265971861605E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.27654092983614E-01  7.50000000000000E-01  4.88292679880851E-01
  4.04029100430778E-01  7.50000000000000E-01  9.24536895801557E-01
  3.97108077940105E-01  7.50000000000000E-01  2.66933048285334E-01
  5.27177495637504E-02  7.50000000000000E-01  7.03389001452869E-01
  3.27185951879956E-01  9.63488161137738E-01  7.67265971861605E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.27654092983615E-01  7.50000000000000E-01  1.17073201191493E-02
  9.04029100430777E-01  7.50000000000000E-01  5.75463104198443E-01
  8.97108077940105E-01  7.50000000000000E-01  2.33066951714665E-01
  5.52717749563751E-01  7.50000000000000E-01  7.96610998547131E-01
  8.27185951879956E-01  5.36511838862262E-01  7.32734028138395E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.72345907016385E-01  2.50000000000000E-01  5.11707320119149E-01
  5.95970899569223E-01  2.50000000000000E-01  7.54631041984409E-02
  6.02891922059895E-01  2.50000000000000E-01  7.33066951714666E-01
  9.47282250436249E-01  2.50000000000000E-01  2.96610998547131E-01
  6.72814048120044E-01  4.63488161137737E-01  2.32734028138396E-01
  8.27185951879956E-01  9.63488161137738E-01  7.32734028138395E-01
  6.72814048120044E-01  3.65118388622634E-02  2.32734028138396E-01
  1.72814048120043E-01  4.63488161137737E-01  2.67265971861605E-01
  3.27185951879956E-01  5.36511838862262E-01  7.67265971861605E-01
 Scale of Primitive Cell (acell) [bohr]
  1.95246489140000E+01  1.13572531910000E+01  8.86659433800000E+00
 Real space primitive translations (rprimd) [bohr]
  1.95246489140000E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.13572531910000E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.86659433800000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.96613520785748E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.95246489140000E+01  1.13572531910000E+01  8.86659433800000E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.11514

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.8608E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1158E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.10019672980    -3.521E+02 4.142E-06 6.194E-04
 scprqt: <Vxc>= -3.8314006E-01 hartree

Simple mixing update:
  residual square of the potential :   3.9595511505316071E-004

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.8582E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.10019621647     5.133E-07 3.946E-06 1.652E-03
 scprqt: <Vxc>= -3.8314332E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.388      0.612

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8594E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.10019707542    -8.589E-07 5.896E-06 1.929E-05
 scprqt: <Vxc>= -3.8314255E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.649      0.141      0.210

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8596E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1159E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.10019709860    -2.318E-08 3.414E-06 6.693E-06
 scprqt: <Vxc>= -3.8314181E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.612      0.319      0.223E-01  0.468E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8596E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.10019710006    -1.463E-09 5.267E-06 1.447E-06
 scprqt: <Vxc>= -3.8314188E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.698      0.268      0.492E-01  0.119E-02 -0.159E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8596E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.10019710090    -8.371E-10 3.075E-06 2.494E-07
 scprqt: <Vxc>= -3.8314196E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.887      0.176     -0.610E-01 -0.282E-03  0.507E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8596E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.10019709999     9.150E-10 4.721E-06 8.735E-08
 scprqt: <Vxc>= -3.8314186E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.965      0.501     -0.256     -0.183     -0.337E-01

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8596E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.10019710036    -3.755E-10 2.751E-06 1.916E-07
 scprqt: <Vxc>= -3.8314201E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.898      0.585     -0.827E-01 -0.330     -0.572E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8597E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.10019709982     5.381E-10 4.231E-06 1.867E-08
 scprqt: <Vxc>= -3.8314190E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.566      0.500      0.992E-01 -0.890E-01 -0.844E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8597E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.10019709999    -1.714E-10 2.466E-06 4.878E-09
 scprqt: <Vxc>= -3.8314194E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.849      0.282     -0.708E-01 -0.121      0.207E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8597E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.10019709981     1.893E-10 3.792E-06 2.556E-09
 scprqt: <Vxc>= -3.8314193E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.556      0.515      0.713E-01 -0.495E-01 -0.807E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8597E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.10019709986    -5.826E-11 2.208E-06 8.494E-10
 scprqt: <Vxc>= -3.8314194E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.593      0.296      0.156      0.476E-01 -0.442E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8597E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.10019709976     1.029E-10 3.398E-06 2.090E-10
 scprqt: <Vxc>= -3.8314194E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.431      0.484      0.805E-01  0.263E-01  0.232E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8597E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1160E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.10019709979    -2.501E-11 1.977E-06 6.976E-11
 scprqt: <Vxc>= -3.8314194E-01 hartree

 At SCF step   14       vres2   =  6.98E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.12760864E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  4.55334567E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  4.68748871E-04  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM1_DEN
ioarr: data written to disk file telast_1o_DS2_TIM1_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.31745821765981E+00  2.83931329775000E+00  8.76279027971840E+00
  1.87379812004983E+00  2.83931329775000E+00  3.76419643658620E+00
  2.00892865430610E+00  2.83931329775000E+00  6.80008422355182E+00
  8.73302890523159E+00  2.83931329775000E+00  1.80336776869349E+00
  3.37413361695094E+00  4.14674198427718E-01  2.36973895284817E+00
  9.76232445700000E+00  0.00000000000000E+00  4.43329716900000E+00
  4.44486623934017E+00  8.51793989325000E+00  4.32949311071840E+00
  7.88852633695019E+00  8.51793989325000E+00  8.19749360558618E+00
  7.75339580269389E+00  8.51793989325000E+00  2.36678705455183E+00
  1.02929555176840E+00  8.51793989325000E+00  6.23666493769348E+00
  6.38819084004904E+00  1.09425789925723E+01  6.80303612184817E+00
  0.00000000000000E+00  5.67862659550000E+00  0.00000000000000E+00
  1.42071906963402E+01  8.51793989325000E+00  1.03804058281603E-01
  1.76508507939502E+01  8.51793989325000E+00  5.10239790141382E+00
  1.75157202596939E+01  8.51793989325000E+00  2.06651011444817E+00
  1.07916200087684E+01  8.51793989325000E+00  7.06322656930652E+00
  1.61505152970490E+01  6.09330079392771E+00  6.49685538515183E+00
  9.76232445700000E+00  5.67862659550000E+00  4.43329716900000E+00
  1.50797826746598E+01  2.83931329775000E+00  4.53710122728160E+00
  1.16361225770498E+01  2.83931329775000E+00  6.69100732413800E-01
  1.17712531113061E+01  2.83931329775000E+00  6.49980728344818E+00
  1.84953533622316E+01  2.83931329775000E+00  2.62992940030652E+00
  1.31364580739510E+01  5.26395239707229E+00  2.06355821615183E+00
  1.61505152970490E+01  1.09425789925723E+01  6.49685538515183E+00
  1.31364580739510E+01  4.14674198427718E-01  2.06355821615183E+00
  3.37413361695094E+00  5.26395239707229E+00  2.36973895284817E+00
  6.38819084004904E+00  6.09330079392771E+00  6.80303612184817E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.72345907016385E-01  2.50000000000000E-01  9.88292679880851E-01
  9.59708995692226E-02  2.50000000000000E-01  4.24536895801559E-01
  1.02891922059895E-01  2.50000000000000E-01  7.66933048285334E-01
  4.47282250436249E-01  2.50000000000000E-01  2.03389001452870E-01
  1.72814048120043E-01  3.65118388622634E-02  2.67265971861605E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.27654092983614E-01  7.50000000000000E-01  4.88292679880851E-01
  4.04029100430778E-01  7.50000000000000E-01  9.24536895801557E-01
  3.97108077940105E-01  7.50000000000000E-01  2.66933048285334E-01
  5.27177495637504E-02  7.50000000000000E-01  7.03389001452869E-01
  3.27185951879956E-01  9.63488161137738E-01  7.67265971861605E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.27654092983615E-01  7.50000000000000E-01  1.17073201191493E-02
  9.04029100430777E-01  7.50000000000000E-01  5.75463104198443E-01
  8.97108077940105E-01  7.50000000000000E-01  2.33066951714665E-01
  5.52717749563751E-01  7.50000000000000E-01  7.96610998547131E-01
  8.27185951879956E-01  5.36511838862262E-01  7.32734028138395E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.72345907016385E-01  2.50000000000000E-01  5.11707320119149E-01
  5.95970899569223E-01  2.50000000000000E-01  7.54631041984409E-02
  6.02891922059895E-01  2.50000000000000E-01  7.33066951714666E-01
  9.47282250436249E-01  2.50000000000000E-01  2.96610998547131E-01
  6.72814048120044E-01  4.63488161137737E-01  2.32734028138396E-01
  8.27185951879956E-01  9.63488161137738E-01  7.32734028138395E-01
  6.72814048120044E-01  3.65118388622634E-02  2.32734028138396E-01
  1.72814048120043E-01  4.63488161137737E-01  2.67265971861605E-01
  3.27185951879956E-01  5.36511838862262E-01  7.67265971861605E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.05714E-02 8.72381E-03 (free atoms)
 -1.54886024640786E-20  6.19544098563145E-20  1.85863229568944E-19
 -1.44838559154336E-03  6.19544098563145E-20  1.22577354835175E-02
  2.19192411140697E-03  6.19544098563145E-20 -6.79268896619444E-03
 -7.95891116718087E-03  6.19544098563145E-20 -2.05713912174923E-02
  1.14688786573586E-02  6.19544098563145E-20 -1.27031496403545E-02
 -6.03240299944509E-04  4.62171911435595E-03  4.43239224621235E-03
 -1.54886024640786E-20  6.19544098563145E-20  1.85863229568944E-19
  1.44838559154336E-03  6.19544098563145E-20  1.22577354835175E-02
 -2.19192411140697E-03  6.19544098563145E-20 -6.79268896619444E-03
  7.95891116718087E-03  6.19544103521113E-20 -2.05713912174923E-02
 -1.14688786573586E-02  6.19544100010319E-20 -1.27031496403545E-02
  6.03240299944509E-04 -4.62171911435595E-03  4.43239224621235E-03
 -1.54886024640786E-20  6.19544098563145E-20  1.85863229568944E-19
  1.44838559154336E-03  6.19544098563145E-20 -1.22577354835175E-02
 -2.19192411140698E-03  6.19544098563145E-20  6.79268896619444E-03
  7.95891116718087E-03  6.19544098545086E-20  2.05713912174923E-02
 -1.14688786573586E-02  6.19544099887724E-20  1.27031496403545E-02
  6.03240299944509E-04  4.62171911435595E-03 -4.43239224621235E-03
 -1.54886024640786E-20  6.19544098563145E-20  1.85863229568944E-19
 -1.44838559154336E-03  6.19544098561756E-20 -1.22577354835175E-02
  2.19192411140698E-03  6.19544098563145E-20  6.79268896619444E-03
 -7.95891116718087E-03  6.19544098563145E-20  2.05713912174923E-02
  1.14688786573586E-02  6.19544098563145E-20  1.27031496403545E-02
 -6.03240299944509E-04 -4.62171911435595E-03 -4.43239224621235E-03
  6.03240299944509E-04 -4.62171911435595E-03 -4.43239224621235E-03
 -6.03240299944509E-04  4.62171911435595E-03 -4.43239224621235E-03
 -6.03240299944510E-04 -4.62171911435595E-03  4.43239224621235E-03
  6.03240299944510E-04  4.62171911435595E-03  4.43239224621235E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.82792201669804E-02  0.00000000000000E+00 -1.08684368034858E-01
 -4.27965487213526E-02  0.00000000000000E+00  6.02280175274547E-02
  1.55394946276920E-01  0.00000000000000E+00  1.82398180893800E-01
 -2.23925829222195E-01  0.00000000000000E+00  1.12633674675934E-01
  1.17780550671926E-02 -5.24900341594248E-02 -3.93002239940615E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.82792201669804E-02  0.00000000000000E+00 -1.08684368034858E-01
  4.27965487213526E-02  0.00000000000000E+00  6.02280175274547E-02
 -1.55394946276920E-01 -5.63088914146758E-27  1.82398180893800E-01
  2.23925829222195E-01 -1.64359169602798E-27  1.12633674675934E-01
 -1.17780550671926E-02  5.24900341594248E-02 -3.93002239940615E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.82792201669804E-02  0.00000000000000E+00  1.08684368034858E-01
  4.27965487213526E-02  0.00000000000000E+00 -6.02280175274547E-02
 -1.55394946276920E-01  2.05103835357463E-29 -1.82398180893800E-01
  2.23925829222195E-01 -1.50435774625647E-27 -1.12633674675934E-01
 -1.17780550671926E-02 -5.24900341594248E-02  3.93002239940615E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.82792201669804E-02  1.57772181044202E-30  1.08684368034858E-01
 -4.27965487213526E-02  0.00000000000000E+00 -6.02280175274547E-02
  1.55394946276920E-01  0.00000000000000E+00 -1.82398180893800E-01
 -2.23925829222195E-01  0.00000000000000E+00 -1.12633674675934E-01
  1.17780550671926E-02  5.24900341594248E-02  3.93002239940615E-02
 -1.17780550671926E-02  5.24900341594248E-02  3.93002239940615E-02
  1.17780550671926E-02 -5.24900341594248E-02  3.93002239940615E-02
  1.17780550671926E-02  5.24900341594248E-02 -3.93002239940615E-02
 -1.17780550671926E-02 -5.24900341594248E-02 -3.93002239940615E-02
 Scale of Primitive Cell (acell) [bohr]
  1.95246489140000E+01  1.13572531910000E+01  8.86659433800000E+00
 Real space primitive translations (rprimd) [bohr]
  1.95246489140000E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.13572531910000E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.86659433800000E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.96613520785748E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.95246489140000E+01  1.13572531910000E+01  8.86659433800000E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  4.12760863631578E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  4.55334567325565E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  4.68748871019666E-04
 Total energy (etotal) [Ha]= -3.52100197099786E+02
 fconv : at Broyd/MD step   1, gradients have not converged yet. 
  max grad (force/stress) = 4.6875E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
Inverse hessian has been initialized.
 EXIT:           1           1

--- Iteration: ( 2/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.25018260778751E+00  2.80052817299202E+00  8.65164919969384E+00
  1.85275998603747E+00  2.80052817299202E+00  3.70456538468015E+00
  1.97619208316056E+00  2.80052817299202E+00  6.68417616274773E+00
  8.63621619016988E+00  2.80052817299202E+00  1.76548345849645E+00
  3.33175653729838E+00  4.13568319786213E-01  2.34078464096578E+00
  9.64143929278231E+00  0.00000000000000E+00  4.37095407771410E+00
  4.39125668499478E+00  8.40158451897606E+00  4.28069512197974E+00
  7.78867930674486E+00  8.40158451897606E+00  8.07551946239423E+00
  7.66524720962174E+00  8.40158451897606E+00  2.31322208503363E+00
  1.00522310261243E+00  8.40158451897606E+00  6.13643753621054E+00
  6.30968275548391E+00  1.07885443721819E+01  6.71173871867987E+00
  0.00000000000000E+00  5.60105634598404E+00  0.00000000000000E+00
  1.40326959777771E+01  8.40158451897606E+00  9.02589557343573E-02
  1.74301185995271E+01  8.40158451897606E+00  5.03734277074806E+00
  1.73066865024041E+01  8.40158451897606E+00  2.05773199268046E+00
  1.06466623953947E+01  8.40158451897606E+00  6.97642469693175E+00
  1.59511220482662E+01  6.01462466577024E+00  6.40112351446242E+00
  9.64143929278231E+00  5.60105634598404E+00  4.37095407771410E+00
  1.48916219005698E+01  2.80052817299202E+00  4.46121303344845E+00
  1.14941992788198E+01  2.80052817299202E+00  6.66388693033950E-01
  1.16176313759429E+01  2.80052817299202E+00  6.42868607039456E+00
  1.82776554829522E+01  2.80052817299202E+00  2.60547061921765E+00
  1.29731958300807E+01  5.18748802619783E+00  2.03016943674832E+00
  1.59511220482662E+01  1.07885443721819E+01  6.40112351446242E+00
  1.29731958300807E+01  4.13568319786213E-01  2.03016943674832E+00
  3.33175653729838E+00  5.18748802619783E+00  2.34078464096578E+00
  6.30968275548391E+00  6.01462466577024E+00  6.71173871867987E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.72271724602252E-01  2.50000000000000E-01  9.89675142528430E-01
  9.60831640263743E-02  2.50000000000000E-01  4.23770796811659E-01
  1.02484288037781E-01  2.50000000000000E-01  7.64612947643159E-01
  4.47869655552104E-01  2.50000000000000E-01  2.01956303716162E-01
  1.72783151774475E-01  3.69187787302605E-02  2.67765869801811E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.27728275397747E-01  7.50000000000000E-01  4.89675142528430E-01
  4.03916835973626E-01  7.50000000000000E-01  9.23770796811657E-01
  3.97515711962219E-01  7.50000000000000E-01  2.64612947643160E-01
  5.21303444478952E-02  7.50000000000000E-01  7.01956303716162E-01
  3.27216848225524E-01  9.63081221269741E-01  7.67765869801811E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.27728275397748E-01  7.50000000000000E-01  1.03248574715707E-02
  9.03916835973625E-01  7.50000000000000E-01  5.76229203188343E-01
  8.97515711962219E-01  7.50000000000000E-01  2.35387052356840E-01
  5.52130344447896E-01  7.50000000000000E-01  7.98043696283838E-01
  8.27216848225524E-01  5.36918778730259E-01  7.32234130198189E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.72271724602252E-01  2.50000000000000E-01  5.10324857471570E-01
  5.96083164026375E-01  2.50000000000000E-01  7.62292031883409E-02
  6.02484288037781E-01  2.50000000000000E-01  7.35387052356841E-01
  9.47869655552104E-01  2.50000000000000E-01  2.98043696283838E-01
  6.72783151774476E-01  4.63081221269740E-01  2.32234130198189E-01
  8.27216848225524E-01  9.63081221269741E-01  7.32234130198189E-01
  6.72783151774476E-01  3.69187787302605E-02  2.32234130198189E-01
  1.72783151774475E-01  4.63081221269740E-01  2.67765869801811E-01
  3.27216848225524E-01  5.36918778730259E-01  7.67765869801811E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92828785855646E+01  1.12021126919681E+01  8.74190815542819E+00
 Real space primitive translations (rprimd) [bohr]
  1.92828785855646E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.12021126919681E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.74190815542819E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.88833065465033E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92828785855646E+01  1.12021126919681E+01  8.74190815542819E+00
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   2.2204460492503131E-016   0.0000000000000000        0.0000000000000000     
   6.9388939039072284E-017   0.0000000000000000       -9.9920072216264089E-016
   3.3306690738754696E-016   0.0000000000000000        3.3306690738754696E-016
   0.0000000000000000        0.0000000000000000       -5.2735593669694936E-016
   7.2164496600635175E-016  -7.0776717819853729E-016  -3.8857805861880479E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   7.4940054162198066E-016   0.0000000000000000       -5.5511151231257827E-017
  -7.7715611723760958E-016   0.0000000000000000        1.1102230246251565E-015
   1.6653345369377348E-016   0.0000000000000000       -2.7755575615628914E-016
   4.2327252813834093E-016   0.0000000000000000        2.2204460492503131E-016
   2.2204460492503131E-016  -5.5511151231257827E-016   1.1102230246251565E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -1.1102230246251565E-016   0.0000000000000000       -2.8275992658421956E-016
   3.3306690738754696E-016   0.0000000000000000       -8.8817841970012523E-016
   2.2204460492503131E-016   0.0000000000000000        4.7184478546569153E-016
  -2.2204460492503131E-016   0.0000000000000000       -2.2204460492503131E-016
   4.4408920985006262E-016   5.5511151231257827E-016  -1.1102230246251565E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   3.3306690738754696E-016   0.0000000000000000        3.3306690738754696E-016
  -3.3306690738754696E-016   0.0000000000000000        9.0205620750793969E-016
  -2.2204460492503131E-016   0.0000000000000000       -2.2204460492503131E-016
   1.1102230246251565E-016   0.0000000000000000       -5.5511151231257827E-017
  -4.4408920985006262E-016   3.8857805861880479E-016  -1.3877787807814457E-016
   4.4408920985006262E-016  -5.5511151231257827E-016  -1.1102230246251565E-016
  -4.4408920985006262E-016  -7.0776717819853729E-016  -1.3877787807814457E-016
   7.2164496600635175E-016   3.8857805861880479E-016  -4.4408920985006262E-016
   2.2204460492503131E-016   5.5511151231257827E-016   1.1102230246251565E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14166

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    9.0143E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    3.2957E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -351.95276865960    -3.520E+02 4.975E+07 3.248E+02
 scprqt: <Vxc>= -3.8277946E-01 hartree

Simple mixing update:
  residual square of the potential :   191.63891619216972

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.7127E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.7260E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -351.99940222828    -4.663E-02 3.629E+02 1.298E+02
 scprqt: <Vxc>= -3.9438504E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.606      0.394

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.7653E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6890E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.10525602163    -1.059E-01 1.998E+01 2.625E+01
 scprqt: <Vxc>= -3.8866518E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.534      0.334      0.132

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8373E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7590E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.12644882225    -2.119E-02 1.020E+01 7.055E-01
 scprqt: <Vxc>= -3.8958143E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.855      0.103      0.499E-01 -0.863E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8000E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7824E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.12661646073    -1.676E-04 4.357E+00 3.921E-01
 scprqt: <Vxc>= -3.8983786E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.522      0.518     -0.672E-02 -0.117E-01 -0.215E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8113E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7850E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.12681755223    -2.011E-04 1.773E+00 9.368E-03
 scprqt: <Vxc>= -3.8984420E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.806      0.122      0.804E-01 -0.141E-02 -0.487E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8135E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7802E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.12682163998    -4.088E-06 8.026E-01 6.612E-03
 scprqt: <Vxc>= -3.8983330E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.422      0.519      0.489E-01  0.154E-01 -0.135E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8121E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7785E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.12682567197    -4.032E-06 2.003E-01 1.822E-04
 scprqt: <Vxc>= -3.8982724E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.975      0.144E-01  0.126E-02  0.142E-01 -0.532E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8115E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.12682586962    -1.977E-07 8.636E-02 1.105E-05
 scprqt: <Vxc>= -3.8982702E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.760      0.250     -0.870E-03 -0.817E-02  0.922E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8117E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.12682589861    -2.899E-08 1.951E-02 7.144E-06
 scprqt: <Vxc>= -3.8982681E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.566      0.447      0.613E-02 -0.546E-02 -0.117E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8115E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.12682591067    -1.206E-08 7.643E-03 6.336E-07
 scprqt: <Vxc>= -3.8982703E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.972      0.768E-01 -0.997E-02 -0.466E-01  0.602E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8115E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.12682591348    -2.804E-09 1.618E-03 8.041E-07
 scprqt: <Vxc>= -3.8982686E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13      0.261     -0.325     -0.701E-01  0.560E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8115E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.12682591537    -1.894E-09 6.119E-04 1.479E-07
 scprqt: <Vxc>= -3.8982698E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.971      0.298     -0.223     -0.312E-01 -0.147E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8115E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.12682591601    -6.394E-10 1.271E-04 6.403E-08
 scprqt: <Vxc>= -3.8982693E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.709      0.569     -0.104     -0.198      0.255E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8114E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.12682591634    -3.307E-10 4.715E-05 3.155E-08
 scprqt: <Vxc>= -3.8982696E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.14      0.113     -0.169     -0.468E-01 -0.496E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8114E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.12682591649    -1.485E-10 9.790E-06 7.887E-09
 scprqt: <Vxc>= -3.8982691E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.551      0.543      0.495E-01 -0.803E-01 -0.588E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8114E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.12682591656    -6.622E-11 7.278E-06 2.326E-09
 scprqt: <Vxc>= -3.8982695E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.892      0.232     -0.135E-01 -0.421E-01 -0.551E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.8114E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.12682591658    -2.683E-11 6.006E-06 4.403E-10
 scprqt: <Vxc>= -3.8982694E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.717      0.345      0.501E-01 -0.517E-01 -0.250E-01

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.8114E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.12682591660    -2.041E-11 6.294E-06 5.861E-10
 scprqt: <Vxc>= -3.8982695E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.332      0.466      0.265      0.291E-01 -0.514E-01

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.8114E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.7779E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.12682591662    -1.035E-11 5.183E-06 2.053E-11
 scprqt: <Vxc>= -3.8982694E-01 hartree

 At SCF step   20       vres2   =  2.05E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  8.51306009E-06  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.58449130E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.00495276E-04  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM2_DEN
ioarr: data written to disk file telast_1o_DS2_TIM2_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.25018260778752E+00  2.80052817299202E+00  8.65164919969384E+00
  1.85275998603747E+00  2.80052817299202E+00  3.70456538468014E+00
  1.97619208316057E+00  2.80052817299202E+00  6.68417616274773E+00
  8.63621619016988E+00  2.80052817299202E+00  1.76548345849645E+00
  3.33175653729840E+00  4.13568319786205E-01  2.34078464096578E+00
  9.64143929278231E+00  0.00000000000000E+00  4.37095407771410E+00
  4.39125668499479E+00  8.40158451897606E+00  4.28069512197974E+00
  7.78867930674484E+00  8.40158451897606E+00  8.07551946239424E+00
  7.66524720962174E+00  8.40158451897606E+00  2.31322208503363E+00
  1.00522310261243E+00  8.40158451897606E+00  6.13643753621054E+00
  6.30968275548391E+00  1.07885443721819E+01  6.71173871867987E+00
  0.00000000000000E+00  5.60105634598404E+00  0.00000000000000E+00
  1.40326959777771E+01  8.40158451897606E+00  9.02589557343548E-02
  1.74301185995272E+01  8.40158451897606E+00  5.03734277074805E+00
  1.73066865024041E+01  8.40158451897606E+00  2.05773199268046E+00
  1.06466623953947E+01  8.40158451897606E+00  6.97642469693175E+00
  1.59511220482662E+01  6.01462466577024E+00  6.40112351446242E+00
  9.64143929278231E+00  5.60105634598404E+00  4.37095407771410E+00
  1.48916219005698E+01  2.80052817299202E+00  4.46121303344845E+00
  1.14941992788198E+01  2.80052817299202E+00  6.66388693033958E-01
  1.16176313759429E+01  2.80052817299202E+00  6.42868607039456E+00
  1.82776554829522E+01  2.80052817299202E+00  2.60547061921765E+00
  1.29731958300807E+01  5.18748802619783E+00  2.03016943674832E+00
  1.59511220482662E+01  1.07885443721819E+01  6.40112351446242E+00
  1.29731958300807E+01  4.13568319786205E-01  2.03016943674832E+00
  3.33175653729840E+00  5.18748802619783E+00  2.34078464096578E+00
  6.30968275548391E+00  6.01462466577024E+00  6.71173871867987E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.72271724602252E-01  2.50000000000000E-01  9.89675142528430E-01
  9.60831640263743E-02  2.50000000000000E-01  4.23770796811658E-01
  1.02484288037781E-01  2.50000000000000E-01  7.64612947643160E-01
  4.47869655552104E-01  2.50000000000000E-01  2.01956303716162E-01
  1.72783151774476E-01  3.69187787302598E-02  2.67765869801811E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.27728275397748E-01  7.50000000000000E-01  4.89675142528430E-01
  4.03916835973626E-01  7.50000000000000E-01  9.23770796811658E-01
  3.97515711962219E-01  7.50000000000000E-01  2.64612947643160E-01
  5.21303444478957E-02  7.50000000000000E-01  7.01956303716162E-01
  3.27216848225524E-01  9.63081221269740E-01  7.67765869801811E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.27728275397748E-01  7.50000000000000E-01  1.03248574715704E-02
  9.03916835973626E-01  7.50000000000000E-01  5.76229203188342E-01
  8.97515711962219E-01  7.50000000000000E-01  2.35387052356840E-01
  5.52130344447896E-01  7.50000000000000E-01  7.98043696283838E-01
  8.27216848225525E-01  5.36918778730260E-01  7.32234130198189E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.72271724602252E-01  2.50000000000000E-01  5.10324857471570E-01
  5.96083164026374E-01  2.50000000000000E-01  7.62292031883418E-02
  6.02484288037781E-01  2.50000000000000E-01  7.35387052356840E-01
  9.47869655552104E-01  2.50000000000000E-01  2.98043696283838E-01
  6.72783151774475E-01  4.63081221269740E-01  2.32234130198189E-01
  8.27216848225525E-01  9.63081221269740E-01  7.32234130198189E-01
  6.72783151774475E-01  3.69187787302598E-02  2.32234130198189E-01
  1.72783151774476E-01  4.63081221269740E-01  2.67765869801811E-01
  3.27216848225524E-01  5.36918778730260E-01  7.67765869801811E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.26878E-02 5.19594E-03 (free atoms)
 -1.08420217248550E-19  3.09772049281573E-20 -1.18100593788600E-19
 -4.54523248580754E-03  3.09772049281573E-20  4.81677574786475E-03
  2.51930911345513E-03  3.09772050041412E-20 -8.18712841691735E-03
 -1.26878381088345E-02  3.09772050723789E-20  2.24897374973070E-05
  5.40025487875562E-03  3.09772049281573E-20 -1.11292204539249E-03
  2.25172659851014E-03 -5.43228364836953E-03 -3.08342306889574E-04
 -1.08420217248550E-19  3.09772049281573E-20 -1.18100593788600E-19
  4.54523248580754E-03  3.09772049281573E-20  4.81677574786475E-03
 -2.51930911345513E-03  3.09772049281573E-20 -8.18712841691735E-03
  1.26878381088345E-02  3.09772047839356E-20  2.24897374973070E-05
 -5.40025487875562E-03  3.09772049281573E-20 -1.11292204539249E-03
 -2.25172659851014E-03  5.43228364836953E-03 -3.08342306889574E-04
 -1.08420217248550E-19  3.09772049281573E-20 -1.18100593788600E-19
  4.54523248580754E-03  3.09772049281573E-20 -4.81677574786475E-03
 -2.51930911345513E-03  3.09772047938385E-20  8.18712841691735E-03
  1.26878381088345E-02  3.09772049979442E-20 -2.24897374973073E-05
 -5.40025487875562E-03  3.09772050002681E-20  1.11292204539249E-03
 -2.25172659851014E-03 -5.43228364836953E-03  3.08342306889574E-04
 -1.08420217248550E-19  3.09772049281573E-20 -1.18100593788600E-19
 -4.54523248580754E-03  3.09772049281573E-20 -4.81677574786475E-03
  2.51930911345513E-03  3.09772049281573E-20  8.18712841691735E-03
 -1.26878381088345E-02  3.09772049281573E-20 -2.24897374973073E-05
  5.40025487875562E-03  3.09772048560464E-20  1.11292204539249E-03
  2.25172659851014E-03  5.43228364836953E-03  3.08342306889574E-04
 -2.25172659851014E-03  5.43228364836953E-03  3.08342306889574E-04
  2.25172659851014E-03 -5.43228364836953E-03  3.08342306889574E-04
  2.25172659851014E-03  5.43228364836953E-03 -3.08342306889574E-04
 -2.25172659851014E-03 -5.43228364836953E-03 -3.08342306889574E-04
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  8.76451661669908E-02  0.00000000000000E+00 -4.21078111931276E-02
 -4.85795317542617E-02 -8.51180916733472E-28  7.15711246773877E-02
  2.44658041765956E-01 -1.61558713389263E-27 -1.96603219641149E-04
 -1.04132459158148E-01  0.00000000000000E+00  9.72906230497240E-03
 -4.34197706069574E-02  6.08530536037710E-02  2.69550012726151E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -8.76451661669908E-02  0.00000000000000E+00 -4.21078111931276E-02
  4.85795317542617E-02  0.00000000000000E+00  7.15711246773877E-02
 -2.44658041765956E-01  1.61558713389263E-27 -1.96603219641149E-04
  1.04132459158148E-01  0.00000000000000E+00  9.72906230497240E-03
  4.34197706069574E-02 -6.08530536037710E-02  2.69550012726151E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -8.76451661669908E-02  0.00000000000000E+00  4.21078111931276E-02
  4.85795317542617E-02  1.50465356909593E-27 -7.15711246773877E-02
 -2.44658041765956E-01 -7.81761157074023E-28  1.96603219641149E-04
  1.04132459158148E-01 -8.07793566946316E-28 -9.72906230497240E-03
  4.34197706069574E-02  6.08530536037710E-02 -2.69550012726151E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  8.76451661669908E-02  0.00000000000000E+00  4.21078111931276E-02
 -4.85795317542617E-02  0.00000000000000E+00 -7.15711246773877E-02
  2.44658041765956E-01  0.00000000000000E+00  1.96603219641149E-04
 -1.04132459158148E-01  8.07793566946316E-28 -9.72906230497240E-03
 -4.34197706069574E-02 -6.08530536037710E-02 -2.69550012726151E-03
  4.34197706069574E-02 -6.08530536037710E-02 -2.69550012726151E-03
 -4.34197706069574E-02  6.08530536037710E-02 -2.69550012726151E-03
 -4.34197706069574E-02 -6.08530536037710E-02  2.69550012726151E-03
  4.34197706069574E-02  6.08530536037710E-02  2.69550012726151E-03
 Scale of Primitive Cell (acell) [bohr]
  1.92828785855646E+01  1.12021126919681E+01  8.74190815542819E+00
 Real space primitive translations (rprimd) [bohr]
  1.92828785855646E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.12021126919681E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.74190815542819E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.88833065465033E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92828785855646E+01  1.12021126919681E+01  8.74190815542819E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  8.51306008861630E-06  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.58449129566238E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.00495276230985E-04
 Total energy (etotal) [Ha]= -3.52126825916615E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.66288E-02
           Relative     =-7.56257E-05
 fconv : at Broyd/MD step   2, gradients have not converged yet. 
  max grad (force/stress) = 1.5845E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 3/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.23821383427930E+00  2.78154230068422E+00  8.61774452691395E+00
  1.85375282200411E+00  2.78154230068422E+00  3.67679638409419E+00
  1.95778423113262E+00  2.78154230068422E+00  6.65140131692508E+00
  8.63319994660626E+00  2.78154230068422E+00  1.75496338619576E+00
  3.33044445262455E+00  4.04519373511380E-01  2.32973848713155E+00
  9.62982196928485E+00  0.00000000000000E+00  4.35044538610189E+00
  4.39160813500554E+00  8.34462690205267E+00  4.26729914081208E+00
  7.77606914728073E+00  8.34462690205267E+00  8.02724177019608E+00
  7.67203773815223E+00  8.34462690205267E+00  2.30095593082319E+00
  9.96622022678593E-01  8.34462690205267E+00  6.10540877229764E+00
  6.29937751666030E+00  1.07216498292255E+01  6.68018387323343E+00
  0.00000000000000E+00  5.56308460136845E+00  0.00000000000000E+00
  1.40214301042904E+01  8.34462690205267E+00  8.31462452898197E-02
  1.74058911165656E+01  8.34462690205267E+00  5.02409438810960E+00
  1.73018597074371E+01  8.34462690205267E+00  2.04948945527870E+00
  1.06264439919635E+01  8.34462690205267E+00  6.94592738600803E+00
  1.59291994859452E+01  5.96760397487983E+00  6.37115228507224E+00
  9.62982196928485E+00  5.56308460136845E+00  4.35044538610189E+00
  1.48680358035642E+01  2.78154230068422E+00  4.43359163139173E+00
  1.14835747912890E+01  2.78154230068422E+00  6.73649002007707E-01
  1.15876062004175E+01  2.78154230068422E+00  6.39993484138059E+00
  1.82630219158911E+01  2.78154230068422E+00  2.59548199990613E+00
  1.29602664219094E+01  5.15856522785707E+00  2.02070689897035E+00
  1.59291994859452E+01  1.07216498292255E+01  6.37115228507224E+00
  1.29602664219094E+01  4.04519373511380E-01  2.02070689897035E+00
  3.33044445262455E+00  5.15856522785707E+00  2.32973848713155E+00
  6.29937751666030E+00  5.96760397487983E+00  6.68018387323343E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.71978747425811E-01  2.50000000000000E-01  9.90443938733784E-01
  9.62506278889065E-02  2.50000000000000E-01  4.22577007384144E-01
  1.01652150858923E-01  2.50000000000000E-01  7.64450616731556E-01
  4.48253351626988E-01  2.50000000000000E-01  2.01699277940856E-01
  1.72923469574375E-01  3.63574709444356E-02  2.67758617838787E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.28021252574188E-01  7.50000000000000E-01  4.90443938733786E-01
  4.03749372111093E-01  7.50000000000000E-01  9.22577007384144E-01
  3.98347849141078E-01  7.50000000000000E-01  2.64450616731555E-01
  5.17466483730128E-02  7.50000000000000E-01  7.01699277940855E-01
  3.27076530425625E-01  9.63642529055564E-01  7.67758617838787E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.28021252574188E-01  7.50000000000000E-01  9.55606126621449E-03
  9.03749372111094E-01  7.50000000000000E-01  5.77422992615857E-01
  8.98347849141078E-01  7.50000000000000E-01  2.35549383268445E-01
  5.51746648373013E-01  7.50000000000000E-01  7.98300722059145E-01
  8.27076530425626E-01  5.36357470944436E-01  7.32241382161213E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.71978747425812E-01  2.50000000000000E-01  5.09556061266216E-01
  5.96250627888906E-01  2.50000000000000E-01  7.74229926158564E-02
  6.01652150858922E-01  2.50000000000000E-01  7.35549383268445E-01
  9.48253351626987E-01  2.50000000000000E-01  2.98300722059144E-01
  6.72923469574374E-01  4.63642529055565E-01  2.32241382161213E-01
  8.27076530425626E-01  9.63642529055564E-01  7.32241382161213E-01
  6.72923469574374E-01  3.63574709444356E-02  2.32241382161213E-01
  1.72923469574375E-01  4.63642529055565E-01  2.67758617838787E-01
  3.27076530425625E-01  5.36357470944436E-01  7.67758617838787E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92596439385697E+01  1.11261692027369E+01  8.70089077220378E+00
 Real space primitive translations (rprimd) [bohr]
  1.92596439385697E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.11261692027369E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.70089077220378E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.86447957809489E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92596439385697E+01  1.11261692027369E+01  8.70089077220378E+00
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   6.6613381477509392E-016   0.0000000000000000        8.8817841970012523E-016
   5.5511151231257827E-017   0.0000000000000000       -5.5511151231257827E-017
  -2.2204460492503131E-016   0.0000000000000000       -2.2204460492503131E-016
  -5.5511151231257827E-016   0.0000000000000000       -5.5511151231257827E-016
  -4.7184478546569153E-016   6.9388939039072284E-017  -2.7755575615628914E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -1.6653345369377348E-016   0.0000000000000000       -1.1102230246251565E-015
   4.4408920985006262E-016   0.0000000000000000       -2.2204460492503131E-016
  -5.5511151231257827E-017   0.0000000000000000        2.2204460492503131E-016
   2.3592239273284576E-016   0.0000000000000000        3.3306690738754696E-016
   7.2164496600635175E-016   1.1102230246251565E-016   2.2204460492503131E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   4.4408920985006262E-016   0.0000000000000000        6.8348104953486200E-016
  -2.2204460492503131E-016   0.0000000000000000       -2.2204460492503131E-016
  -1.1102230246251565E-016   0.0000000000000000       -1.3877787807814457E-016
  -3.3306690738754696E-016   0.0000000000000000       -3.3306690738754696E-016
  -6.6613381477509392E-016  -2.2204460492503131E-016  -2.2204460492503131E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -5.5511151231257827E-016   0.0000000000000000       -8.8817841970012523E-016
   2.2204460492503131E-016   0.0000000000000000       -2.7755575615628914E-017
   1.1102230246251565E-016   0.0000000000000000        0.0000000000000000     
   4.4408920985006262E-016   0.0000000000000000        2.7755575615628914E-016
   6.6613381477509392E-016  -2.2204460492503131E-016   2.7755575615628914E-016
  -6.6613381477509392E-016   1.1102230246251565E-016  -2.2204460492503131E-016
   6.6613381477509392E-016   6.9388939039072284E-017   2.7755575615628914E-016
  -4.7184478546569153E-016  -2.2204460492503131E-016  -2.7755575615628914E-016
   7.2164496600635175E-016  -2.2204460492503131E-016   2.2204460492503131E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14424

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.9043E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.1629E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.10920973119    -3.521E+02 9.584E+04 3.066E+01
 scprqt: <Vxc>= -3.8959505E-01 hartree

Simple mixing update:
  residual square of the potential :   19.612680632350944

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.7501E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.9967E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.10988271715    -6.730E-04 6.784E+00 2.212E+01
 scprqt: <Vxc>= -3.9378719E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.539      0.461

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.7972E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6794E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.12867380782    -1.879E-02 1.827E+00 2.256E+00
 scprqt: <Vxc>= -3.9183273E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.593      0.266      0.141

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8182E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6753E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.12999488818    -1.321E-03 4.099E-01 6.786E-02
 scprqt: <Vxc>= -3.9196974E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.785      0.148      0.575E-01  0.960E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8068E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6830E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13001327241    -1.838E-05 3.627E-01 4.090E-02
 scprqt: <Vxc>= -3.9203779E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.551      0.483     -0.853E-02 -0.716E-02 -0.184E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8095E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6833E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13003678685    -2.351E-05 1.553E-01 6.678E-04
 scprqt: <Vxc>= -3.9204488E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.846      0.118      0.446E-01 -0.310E-02 -0.349E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8102E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6823E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13003728570    -4.988E-07 5.636E-02 4.794E-04
 scprqt: <Vxc>= -3.9204376E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.424      0.534      0.472E-01  0.102E-02 -0.321E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8095E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6818E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13003760413    -3.184E-07 1.928E-02 1.031E-05
 scprqt: <Vxc>= -3.9204219E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.880      0.514E-01  0.716E-01  0.676E-02 -0.875E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8094E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13003762913    -2.500E-08 6.396E-03 2.879E-06
 scprqt: <Vxc>= -3.9204223E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.833      0.222     -0.334E-01 -0.184E-01 -0.716E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8093E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13003763770    -8.572E-09 2.069E-03 1.926E-06
 scprqt: <Vxc>= -3.9204241E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.850      0.485     -0.306     -0.117E-01 -0.141E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8093E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13003764374    -6.032E-09 6.496E-04 4.288E-07
 scprqt: <Vxc>= -3.9204234E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19      0.217     -0.315     -0.111      0.901E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8093E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13003764609    -2.355E-09 1.982E-04 3.570E-07
 scprqt: <Vxc>= -3.9204230E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.725      0.683     -0.254     -0.199      0.353E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8092E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13003764710    -1.005E-09 6.043E-05 1.956E-08
 scprqt: <Vxc>= -3.9204233E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.762      0.209      0.130     -0.321E-01 -0.624E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8092E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13003764739    -2.941E-10 1.992E-05 2.025E-08
 scprqt: <Vxc>= -3.9204232E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.420      0.549      0.875E-01  0.763E-02 -0.420E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8092E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13003764752    -1.320E-10 2.479E-05 3.460E-09
 scprqt: <Vxc>= -3.9204233E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.614      0.293      0.169      0.599E-02 -0.329E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8092E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.13003764758    -5.775E-11 1.846E-05 2.563E-09
 scprqt: <Vxc>= -3.9204233E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.549      0.399      0.263E-01  0.641E-01  0.513E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8092E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.13003764760    -2.348E-11 2.312E-05 3.977E-10
 scprqt: <Vxc>= -3.9204233E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.776      0.363     -0.716E-01 -0.300E-01 -0.115E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.8092E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.13003764762    -1.313E-11 1.749E-05 1.124E-10
 scprqt: <Vxc>= -3.9204233E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.529      0.463      0.131     -0.494E-01 -0.395E-01

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.8092E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6817E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.13003764763    -1.154E-11 2.198E-05 7.192E-11
 scprqt: <Vxc>= -3.9204233E-01 hartree

 At SCF step   19       vres2   =  7.19E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -3.84211888E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.63366244E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.32739174E-04  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM3_DEN
ioarr: data written to disk file telast_1o_DS2_TIM3_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.23821383427931E+00  2.78154230068422E+00  8.61774452691396E+00
  1.85375282200411E+00  2.78154230068422E+00  3.67679638409418E+00
  1.95778423113262E+00  2.78154230068422E+00  6.65140131692508E+00
  8.63319994660625E+00  2.78154230068422E+00  1.75496338619576E+00
  3.33044445262454E+00  4.04519373511381E-01  2.32973848713154E+00
  9.62982196928485E+00  0.00000000000000E+00  4.35044538610189E+00
  4.39160813500553E+00  8.34462690205267E+00  4.26729914081207E+00
  7.77606914728074E+00  8.34462690205267E+00  8.02724177019608E+00
  7.67203773815223E+00  8.34462690205267E+00  2.30095593082319E+00
  9.96622022678598E-01  8.34462690205267E+00  6.10540877229765E+00
  6.29937751666031E+00  1.07216498292255E+01  6.68018387323343E+00
  0.00000000000000E+00  5.56308460136845E+00  0.00000000000000E+00
  1.40214301042904E+01  8.34462690205267E+00  8.31462452898256E-02
  1.74058911165656E+01  8.34462690205267E+00  5.02409438810960E+00
  1.73018597074371E+01  8.34462690205267E+00  2.04948945527870E+00
  1.06264439919634E+01  8.34462690205267E+00  6.94592738600803E+00
  1.59291994859452E+01  5.96760397487983E+00  6.37115228507224E+00
  9.62982196928485E+00  5.56308460136845E+00  4.35044538610189E+00
  1.48680358035642E+01  2.78154230068422E+00  4.43359163139172E+00
  1.14835747912890E+01  2.78154230068422E+00  6.73649002007707E-01
  1.15876062004175E+01  2.78154230068422E+00  6.39993484138059E+00
  1.82630219158911E+01  2.78154230068422E+00  2.59548199990614E+00
  1.29602664219094E+01  5.15856522785706E+00  2.02070689897035E+00
  1.59291994859452E+01  1.07216498292255E+01  6.37115228507224E+00
  1.29602664219094E+01  4.04519373511381E-01  2.02070689897035E+00
  3.33044445262454E+00  5.15856522785706E+00  2.32973848713154E+00
  6.29937751666031E+00  5.96760397487983E+00  6.68018387323343E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.71978747425812E-01  2.50000000000000E-01  9.90443938733785E-01
  9.62506278889066E-02  2.50000000000000E-01  4.22577007384144E-01
  1.01652150858922E-01  2.50000000000000E-01  7.64450616731555E-01
  4.48253351626987E-01  2.50000000000000E-01  2.01699277940855E-01
  1.72923469574374E-01  3.63574709444356E-02  2.67758617838787E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.28021252574188E-01  7.50000000000000E-01  4.90443938733785E-01
  4.03749372111093E-01  7.50000000000000E-01  9.22577007384143E-01
  3.98347849141078E-01  7.50000000000000E-01  2.64450616731555E-01
  5.17466483730130E-02  7.50000000000000E-01  7.01699277940855E-01
  3.27076530425626E-01  9.63642529055564E-01  7.67758617838787E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.28021252574188E-01  7.50000000000000E-01  9.55606126621518E-03
  9.03749372111093E-01  7.50000000000000E-01  5.77422992615856E-01
  8.98347849141078E-01  7.50000000000000E-01  2.35549383268445E-01
  5.51746648373013E-01  7.50000000000000E-01  7.98300722059145E-01
  8.27076530425626E-01  5.36357470944436E-01  7.32241382161213E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.71978747425812E-01  2.50000000000000E-01  5.09556061266215E-01
  5.96250627888907E-01  2.50000000000000E-01  7.74229926158564E-02
  6.01652150858922E-01  2.50000000000000E-01  7.35549383268445E-01
  9.48253351626987E-01  2.50000000000000E-01  2.98300722059144E-01
  6.72923469574374E-01  4.63642529055564E-01  2.32241382161213E-01
  8.27076530425626E-01  9.63642529055564E-01  7.32241382161213E-01
  6.72923469574374E-01  3.63574709444356E-02  2.32241382161213E-01
  1.72923469574374E-01  4.63642529055564E-01  2.67758617838787E-01
  3.27076530425626E-01  5.36357470944436E-01  7.67758617838787E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.02879E-02 4.49653E-03 (free atoms)
  2.32329036961180E-20 -0.00000000000000E+00 -2.32329036961180E-20
 -4.29011574342676E-03 -0.00000000000000E+00  2.37361164145598E-03
  9.24184856520008E-04 -0.00000000000000E+00 -3.79024321539396E-03
 -1.02879391124305E-02 -0.00000000000000E+00  4.10983227071333E-03
  2.86279380454193E-03 -0.00000000000000E+00  1.59667864878413E-03
  1.19350276957480E-03 -7.15714992186761E-03 -1.58545373712316E-03
  2.32329036961180E-20 -0.00000000000000E+00 -2.32329036961180E-20
  4.29011574342676E-03 -0.00000000000000E+00  2.37361164145598E-03
 -9.24184856520008E-04 -0.00000000000000E+00 -3.79024321539396E-03
  1.02879391124305E-02  1.39250337616019E-28  4.10983227071333E-03
 -2.86279380454193E-03 -0.00000000000000E+00  1.59667864878413E-03
 -1.19350276957480E-03  7.15714992186761E-03 -1.58545373712316E-03
  2.32329036961180E-20 -0.00000000000000E+00 -2.32329036961180E-20
  4.29011574342676E-03 -0.00000000000000E+00 -2.37361164145598E-03
 -9.24184856520008E-04 -0.00000000000000E+00  3.79024321539396E-03
  1.02879391124305E-02 -0.00000000000000E+00 -4.10983227071333E-03
 -2.86279380454193E-03 -9.04701786140736E-29 -1.59667864878413E-03
 -1.19350276957480E-03 -7.15714992186761E-03  1.58545373712316E-03
  2.32329036961180E-20 -0.00000000000000E+00 -2.32329036961180E-20
 -4.29011574342676E-03 -0.00000000000000E+00 -2.37361164145598E-03
  9.24184856520008E-04 -0.00000000000000E+00  3.79024321539396E-03
 -1.02879391124305E-02 -0.00000000000000E+00 -4.10983227071333E-03
  2.86279380454193E-03 -0.00000000000000E+00 -1.59667864878413E-03
  1.19350276957480E-03  7.15714992186761E-03  1.58545373712316E-03
 -1.19350276957480E-03  7.15714992186761E-03  1.58545373712316E-03
  1.19350276957480E-03 -7.15714992186761E-03  1.58545373712316E-03
  1.19350276957480E-03  7.15714992186761E-03 -1.58545373712316E-03
 -1.19350276957480E-03 -7.15714992186761E-03 -1.58545373712316E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  8.26261016736517E-02  0.00000000000000E+00 -2.06525356279398E-02
 -1.77994712699935E-02  0.00000000000000E+00  3.29784922172293E-02
  1.98142044167096E-01  0.00000000000000E+00 -3.57592016795549E-02
 -5.51363893450208E-02  0.00000000000000E+00 -1.38925265213806E-02
 -2.29864383817074E-02  7.96316610400541E-02  1.37948597910909E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -8.26261016736517E-02  0.00000000000000E+00 -2.06525356279398E-02
  1.77994712699935E-02  0.00000000000000E+00  3.29784922172293E-02
 -1.98142044167096E-01 -1.54932281785407E-27 -3.57592016795549E-02
  5.51363893450208E-02  0.00000000000000E+00 -1.38925265213806E-02
  2.29864383817074E-02 -7.96316610400541E-02  1.37948597910909E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -8.26261016736517E-02  0.00000000000000E+00  2.06525356279398E-02
  1.77994712699935E-02  0.00000000000000E+00 -3.29784922172293E-02
 -1.98142044167096E-01  0.00000000000000E+00  3.57592016795549E-02
  5.51363893450208E-02  1.00658651506201E-27  1.38925265213806E-02
  2.29864383817074E-02  7.96316610400541E-02 -1.37948597910909E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  8.26261016736517E-02  0.00000000000000E+00  2.06525356279398E-02
 -1.77994712699935E-02  0.00000000000000E+00 -3.29784922172293E-02
  1.98142044167096E-01  0.00000000000000E+00  3.57592016795549E-02
 -5.51363893450208E-02  0.00000000000000E+00  1.38925265213806E-02
 -2.29864383817074E-02 -7.96316610400541E-02 -1.37948597910909E-02
  2.29864383817074E-02 -7.96316610400541E-02 -1.37948597910909E-02
 -2.29864383817074E-02  7.96316610400541E-02 -1.37948597910909E-02
 -2.29864383817074E-02 -7.96316610400541E-02  1.37948597910909E-02
  2.29864383817074E-02  7.96316610400541E-02  1.37948597910909E-02
 Scale of Primitive Cell (acell) [bohr]
  1.92596439385697E+01  1.11261692027369E+01  8.70089077220378E+00
 Real space primitive translations (rprimd) [bohr]
  1.92596439385697E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.11261692027369E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.70089077220378E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.86447957809489E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92596439385697E+01  1.11261692027369E+01  8.70089077220378E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -3.84211887936477E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.63366244448633E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.32739173728903E-04
 Total energy (etotal) [Ha]= -3.52130037647628E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-3.21173E-03
           Relative     =-9.12091E-06
 fconv : at Broyd/MD step   3, gradients have not converged yet. 
  max grad (force/stress) = 1.6337E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 4/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.21286015717753E+00  2.71923967449857E+00  8.61169143702240E+00
  1.85869485485025E+00  2.71923967449857E+00  3.64103464187468E+00
  1.90726644324439E+00  2.71923967449857E+00  6.63603425658728E+00
  8.64029081268385E+00  2.71923967449857E+00  1.74777047970555E+00
  3.33254180953499E+00  3.72656872150819E-01  2.32094320690142E+00
  9.61605391924843E+00  0.00000000000000E+00  4.33864373192613E+00
  4.40319376207090E+00  8.15771902349572E+00  4.27304770509627E+00
  7.75735906439819E+00  8.15771902349572E+00  7.97967837380080E+00
  7.70878747600404E+00  8.15771902349572E+00  2.29739052466116E+00
  9.75763106564581E-01  8.15771902349572E+00  6.08641421163168E+00
  6.28351210971344E+00  1.05043018258435E+01  6.65958693882754E+00
  0.00000000000000E+00  5.43847934899715E+00  0.00000000000000E+00
  1.40192476813194E+01  8.15771902349572E+00  6.55960268298580E-02
  1.73734129836466E+01  8.15771902349572E+00  5.03625282197758E+00
  1.73248413952525E+01  8.15771902349572E+00  2.04125320726497E+00
  1.05918170258130E+01  8.15771902349572E+00  6.92951698414671E+00
  1.58995660289619E+01  5.81113622114795E+00  6.35634425695084E+00
  9.61605391924843E+00  5.43847934899715E+00  4.33864373192613E+00
  1.48289140764259E+01  2.71923967449857E+00  4.40423975875599E+00
  1.14747487740987E+01  2.71923967449857E+00  6.97609090051453E-01
  1.15233203624928E+01  2.71923967449857E+00  6.37989693919109E+00
  1.82563447319323E+01  2.71923967449857E+00  2.59087325222058E+00
  1.29485957287834E+01  5.06582247684632E+00  2.01770052502471E+00
  1.58995660289619E+01  1.05043018258435E+01  6.35634425695084E+00
  1.29485957287834E+01  3.72656872150819E-01  2.01770052502471E+00
  3.33254180953499E+00  5.06582247684632E+00  2.32094320690142E+00
  6.28351210971344E+00  5.81113622114795E+00  6.65958693882754E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.71049861042426E-01  2.50000000000000E-01  9.92440491674026E-01
  9.66454051973284E-02  2.50000000000000E-01  4.19605165443977E-01
  9.91709519965677E-02  2.50000000000000E-01  7.64759066036661E-01
  4.49263850080364E-01  2.50000000000000E-01  2.01418990322309E-01
  1.73280112482744E-01  3.42611278113557E-02  2.67473356918274E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.28950138957574E-01  7.50000000000000E-01  4.92440491674027E-01
  4.03354594802672E-01  7.50000000000000E-01  9.19605165443976E-01
  4.00829048003432E-01  7.50000000000000E-01  2.64759066036662E-01
  5.07361499196358E-02  7.50000000000000E-01  7.01418990322309E-01
  3.26719887517256E-01  9.65738872188645E-01  7.67473356918274E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.28950138957576E-01  7.50000000000000E-01  7.55950832597365E-03
  9.03354594802671E-01  7.50000000000000E-01  5.80394834556023E-01
  9.00829048003432E-01  7.50000000000000E-01  2.35240933963338E-01
  5.50736149919636E-01  7.50000000000000E-01  7.98581009677691E-01
  8.26719887517256E-01  5.34261127811354E-01  7.32526643081726E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.71049861042424E-01  2.50000000000000E-01  5.07559508325974E-01
  5.96645405197329E-01  2.50000000000000E-01  8.03948345560229E-02
  5.99170951996568E-01  2.50000000000000E-01  7.35240933963338E-01
  9.49263850080364E-01  2.50000000000000E-01  2.98581009677691E-01
  6.73280112482744E-01  4.65738872188644E-01  2.32526643081726E-01
  8.26719887517256E-01  9.65738872188645E-01  7.32526643081726E-01
  6.73280112482744E-01  3.42611278113557E-02  2.32526643081726E-01
  1.73280112482744E-01  4.65738872188644E-01  2.67473356918274E-01
  3.26719887517256E-01  5.34261127811354E-01  7.67473356918274E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92321078384969E+01  1.08769586979943E+01  8.67728746385226E+00
 Real space primitive translations (rprimd) [bohr]
  1.92321078384969E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.08769586979943E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.67728746385226E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.81517436719694E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92321078384969E+01  1.08769586979943E+01  8.67728746385226E+00
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -9.4368957093138306E-016   0.0000000000000000        4.4408920985006262E-016
   2.3592239273284576E-016   0.0000000000000000       -5.5511151231257827E-016
   4.0245584642661925E-016   0.0000000000000000        6.6613381477509392E-016
  -2.2204460492503131E-016   0.0000000000000000        5.5511151231257827E-017
   1.6653345369377348E-016  -3.6082248300317588E-016  -3.8857805861880479E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   1.0547118733938987E-015   0.0000000000000000       -5.5511151231257827E-016
  -2.7755575615628914E-016   0.0000000000000000        6.6613381477509392E-016
   5.5511151231257827E-017   0.0000000000000000        1.1102230246251565E-016
   2.2204460492503131E-016   0.0000000000000000        2.2204460492503131E-016
   0.0000000000000000       -4.4408920985006262E-016   2.2204460492503131E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -9.9920072216264089E-016   0.0000000000000000        1.4831885719601701E-016
   4.4408920985006262E-016   0.0000000000000000        0.0000000000000000     
   2.2204460492503131E-016   0.0000000000000000        1.6653345369377348E-016
  -3.3306690738754696E-016   0.0000000000000000       -2.2204460492503131E-016
  -1.1102230246251565E-016   8.8817841970012523E-016  -1.1102230246251565E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   1.1102230246251565E-015   0.0000000000000000       -3.3306690738754696E-016
  -3.3306690738754696E-016   0.0000000000000000        2.7755575615628914E-016
  -2.2204460492503131E-016   0.0000000000000000        7.7715611723760958E-016
   0.0000000000000000        0.0000000000000000        2.7755575615628914E-016
   0.0000000000000000        1.1657341758564144E-015   1.1102230246251565E-016
  -1.1102230246251565E-016  -4.4408920985006262E-016  -1.1102230246251565E-016
   0.0000000000000000       -3.6082248300317588E-016   1.1102230246251565E-016
   1.6653345369377348E-016   1.1657341758564144E-015  -3.8857805861880479E-016
   0.0000000000000000        8.8817841970012523E-016   2.2204460492503131E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14731

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    9.0115E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    3.5905E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.02871987537    -3.520E+02 5.926E+05 1.394E+02
 scprqt: <Vxc>= -3.9200751E-01 hartree

Simple mixing update:
  residual square of the potential :   93.299135779129998

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.6655E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.1094E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.03403275410    -5.313E-03 8.451E+02 1.032E+02
 scprqt: <Vxc>= -4.0030077E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.540      0.460

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.7560E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4997E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.12118151875    -8.715E-02 1.596E+02 1.049E+01
 scprqt: <Vxc>= -3.9639826E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.600      0.265      0.135

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8096E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4914E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.12730728853    -6.126E-03 3.758E+01 3.923E-01
 scprqt: <Vxc>= -3.9669371E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.734      0.179      0.723E-01  0.154E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.7849E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5071E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.12744549501    -1.382E-04 1.483E+01 1.676E-01
 scprqt: <Vxc>= -3.9683582E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.583      0.430      0.222E-02 -0.134E-04 -0.152E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.7897E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5072E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.12754757454    -1.021E-04 8.773E+00 3.162E-03
 scprqt: <Vxc>= -3.9685266E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.857      0.121      0.274E-01 -0.198E-02 -0.253E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.7900E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5056E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.12755013229    -2.558E-06 1.630E+00 1.900E-03
 scprqt: <Vxc>= -3.9685545E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.451      0.510      0.488E-01 -0.367E-02 -0.344E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.7891E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5046E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.12755138432    -1.252E-06 7.482E-01 5.410E-05
 scprqt: <Vxc>= -3.9685138E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.926      0.462E-01  0.324E-01  0.445E-02 -0.854E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.7889E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5044E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.12755153351    -1.492E-07 1.412E-01 1.132E-05
 scprqt: <Vxc>= -3.9685157E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.41     -0.245     -0.926E-01 -0.660E-01 -0.762E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.7886E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5044E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.12755159280    -5.929E-08 6.362E-02 8.533E-06
 scprqt: <Vxc>= -3.9685173E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.701      0.618     -0.306     -0.104E-01 -0.178E-02

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.7887E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5044E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.12755161415    -2.135E-08 1.173E-02 2.696E-06
 scprqt: <Vxc>= -3.9685156E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.877      0.371     -0.220     -0.492E-01  0.926E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.7886E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5044E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.12755162554    -1.139E-08 5.243E-03 6.563E-07
 scprqt: <Vxc>= -3.9685160E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.707      0.469      0.339E-01 -0.211     -0.774E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.7886E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5043E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.12755162878    -3.240E-09 9.602E-04 1.918E-07
 scprqt: <Vxc>= -3.9685159E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.952      0.120     -0.387E-01  0.315E-01 -0.731E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.7885E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5044E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.12755163009    -1.307E-09 4.287E-04 3.880E-08
 scprqt: <Vxc>= -3.9685162E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.449      0.519      0.954E-01 -0.149E-01 -0.662E-02

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.7885E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5043E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.12755163046    -3.646E-10 7.862E-05 1.089E-08
 scprqt: <Vxc>= -3.9685159E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.868      0.193     -0.358E-01  0.467E-02  0.162E-03

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.7885E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5043E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.12755163068    -2.260E-10 3.557E-05 3.964E-09
 scprqt: <Vxc>= -3.9685161E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.686      0.451     -0.799E-01 -0.334E-01  0.124E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.7885E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5043E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.12755163073    -4.894E-11 2.711E-05 1.221E-09
 scprqt: <Vxc>= -3.9685160E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.608      0.355      0.163     -0.345E-01 -0.795E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.7885E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5043E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.12755163077    -4.087E-11 1.171E-05 2.054E-10
 scprqt: <Vxc>= -3.9685160E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.919      0.167     -0.142      0.609E-01  0.825E-02

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.7885E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5043E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.12755163078    -8.981E-12 2.322E-05 1.020E-10
 scprqt: <Vxc>= -3.9685160E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.362      0.604      0.145     -0.104     -0.658E-02

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.7885E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5043E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.12755163079    -1.012E-11 1.010E-05 7.688E-11
 scprqt: <Vxc>= -3.9685160E-01 hartree

 At SCF step   20       vres2   =  7.69E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.14272489E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -3.95295173E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.74952561E-04  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM4_DEN
ioarr: data written to disk file telast_1o_DS2_TIM4_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.21286015717751E+00  2.71923967449857E+00  8.61169143702240E+00
  1.85869485485025E+00  2.71923967449857E+00  3.64103464187467E+00
  1.90726644324439E+00  2.71923967449857E+00  6.63603425658729E+00
  8.64029081268385E+00  2.71923967449857E+00  1.74777047970555E+00
  3.33254180953500E+00  3.72656872150815E-01  2.32094320690142E+00
  9.61605391924843E+00  0.00000000000000E+00  4.33864373192613E+00
  4.40319376207092E+00  8.15771902349572E+00  4.27304770509627E+00
  7.75735906439819E+00  8.15771902349572E+00  7.97967837380080E+00
  7.70878747600404E+00  8.15771902349572E+00  2.29739052466116E+00
  9.75763106564585E-01  8.15771902349572E+00  6.08641421163168E+00
  6.28351210971344E+00  1.05043018258435E+01  6.65958693882755E+00
  0.00000000000000E+00  5.43847934899715E+00  0.00000000000000E+00
  1.40192476813194E+01  8.15771902349572E+00  6.55960268298593E-02
  1.73734129836466E+01  8.15771902349572E+00  5.03625282197758E+00
  1.73248413952525E+01  8.15771902349572E+00  2.04125320726497E+00
  1.05918170258130E+01  8.15771902349572E+00  6.92951698414671E+00
  1.58995660289619E+01  5.81113622114796E+00  6.35634425695084E+00
  9.61605391924843E+00  5.43847934899715E+00  4.33864373192613E+00
  1.48289140764259E+01  2.71923967449857E+00  4.40423975875599E+00
  1.14747487740987E+01  2.71923967449857E+00  6.97609090051456E-01
  1.15233203624928E+01  2.71923967449857E+00  6.37989693919110E+00
  1.82563447319323E+01  2.71923967449857E+00  2.59087325222058E+00
  1.29485957287834E+01  5.06582247684633E+00  2.01770052502471E+00
  1.58995660289619E+01  1.05043018258435E+01  6.35634425695084E+00
  1.29485957287834E+01  3.72656872150815E-01  2.01770052502471E+00
  3.33254180953500E+00  5.06582247684633E+00  2.32094320690142E+00
  6.28351210971344E+00  5.81113622114796E+00  6.65958693882755E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.71049861042425E-01  2.50000000000000E-01  9.92440491674026E-01
  9.66454051973286E-02  2.50000000000000E-01  4.19605165443977E-01
  9.91709519965681E-02  2.50000000000000E-01  7.64759066036662E-01
  4.49263850080364E-01  2.50000000000000E-01  2.01418990322309E-01
  1.73280112482744E-01  3.42611278113553E-02  2.67473356918274E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.28950138957575E-01  7.50000000000000E-01  4.92440491674026E-01
  4.03354594802671E-01  7.50000000000000E-01  9.19605165443977E-01
  4.00829048003432E-01  7.50000000000000E-01  2.64759066036662E-01
  5.07361499196361E-02  7.50000000000000E-01  7.01418990322309E-01
  3.26719887517256E-01  9.65738872188645E-01  7.67473356918274E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.28950138957575E-01  7.50000000000000E-01  7.55950832597380E-03
  9.03354594802672E-01  7.50000000000000E-01  5.80394834556023E-01
  9.00829048003432E-01  7.50000000000000E-01  2.35240933963338E-01
  5.50736149919636E-01  7.50000000000000E-01  7.98581009677691E-01
  8.26719887517256E-01  5.34261127811355E-01  7.32526643081726E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.71049861042425E-01  2.50000000000000E-01  5.07559508325974E-01
  5.96645405197329E-01  2.50000000000000E-01  8.03948345560231E-02
  5.99170951996568E-01  2.50000000000000E-01  7.35240933963338E-01
  9.49263850080364E-01  2.50000000000000E-01  2.98581009677691E-01
  6.73280112482744E-01  4.65738872188645E-01  2.32526643081726E-01
  8.26719887517256E-01  9.65738872188645E-01  7.32526643081726E-01
  6.73280112482744E-01  3.42611278113553E-02  2.32526643081726E-01
  1.73280112482744E-01  4.65738872188645E-01  2.67473356918274E-01
  3.26719887517256E-01  5.34261127811355E-01  7.67473356918274E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.52483E-02 6.02344E-03 (free atoms)
 -0.00000000000000E+00  9.29316147844718E-20 -1.23908819712629E-19
 -2.66646990854948E-03  9.29316147844718E-20  9.19061577027860E-04
 -4.73556301154726E-03  9.29316147844718E-20  1.52482955633357E-02
 -1.02534814180716E-03  9.29316146359388E-20  2.01706684113532E-03
 -5.18331064936859E-03  9.29316147844718E-20  4.06439012597255E-03
 -3.57237992116744E-03 -7.64890807244935E-03 -5.19678928798510E-03
 -0.00000000000000E+00  9.29316147844718E-20 -1.23908819712629E-19
  2.66646990854948E-03  9.29316147844718E-20  9.19061577027860E-04
  4.73556301154726E-03  9.29316149291609E-20  1.52482955633357E-02
  1.02534814180716E-03  9.29316149330048E-20  2.01706684113532E-03
  5.18331064936859E-03  9.29316147844718E-20  4.06439012597255E-03
  3.57237992116744E-03  7.64890807244935E-03 -5.19678928798510E-03
 -0.00000000000000E+00  9.29316147844718E-20 -1.23908819712629E-19
  2.66646990854948E-03  9.29316147844718E-20 -9.19061577027860E-04
  4.73556301154726E-03  9.29316146898255E-20 -1.52482955633357E-02
  1.02534814180716E-03  9.29316147844718E-20 -2.01706684113532E-03
  5.18331064936859E-03  9.29316148587383E-20 -4.06439012597255E-03
  3.57237992116744E-03 -7.64890807244935E-03  5.19678928798510E-03
 -0.00000000000000E+00  9.29316147844718E-20 -1.23908819712629E-19
 -2.66646990854948E-03  9.29316147844718E-20 -9.19061577027860E-04
 -4.73556301154726E-03  9.29316147844718E-20 -1.52482955633357E-02
 -1.02534814180716E-03  9.29316147844718E-20 -2.01706684113532E-03
 -5.18331064936859E-03  9.29316147102053E-20 -4.06439012597255E-03
 -3.57237992116744E-03  7.64890807244935E-03  5.19678928798510E-03
  3.57237992116744E-03  7.64890807244935E-03  5.19678928798510E-03
 -3.57237992116744E-03 -7.64890807244935E-03  5.19678928798510E-03
 -3.57237992116744E-03  7.64890807244935E-03 -5.19678928798510E-03
  3.57237992116744E-03 -7.64890807244935E-03 -5.19678928798510E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.12818368293306E-02  0.00000000000000E+00 -7.97496150085213E-03
  9.10748585140738E-02  0.00000000000000E+00 -1.32313843936847E-01
  1.97196060352377E-02  1.61558713389263E-27 -1.75026688143356E-02
  9.96859893690860E-02  0.00000000000000E+00 -3.52678814883065E-02
  6.87043958839732E-02  8.31968571887867E-02  4.50940345409148E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -5.12818368293306E-02  0.00000000000000E+00 -7.97496150085213E-03
 -9.10748585140738E-02 -1.57377750591592E-27 -1.32313843936847E-01
 -1.97196060352377E-02 -1.61558713389263E-27 -1.75026688143356E-02
 -9.96859893690860E-02  0.00000000000000E+00 -3.52678814883065E-02
 -6.87043958839732E-02 -8.31968571887867E-02  4.50940345409148E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -5.12818368293306E-02  0.00000000000000E+00  7.97496150085213E-03
 -9.10748585140738E-02  1.02946348131342E-27  1.32313843936847E-01
 -1.97196060352377E-02  0.00000000000000E+00  1.75026688143356E-02
 -9.96859893690860E-02 -8.07793566946316E-28  3.52678814883065E-02
 -6.87043958839732E-02  8.31968571887867E-02 -4.50940345409148E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.12818368293306E-02  0.00000000000000E+00  7.97496150085213E-03
  9.10748585140738E-02  0.00000000000000E+00  1.32313843936847E-01
  1.97196060352377E-02  0.00000000000000E+00  1.75026688143356E-02
  9.96859893690860E-02  8.07793566946316E-28  3.52678814883065E-02
  6.87043958839732E-02 -8.31968571887867E-02 -4.50940345409148E-02
 -6.87043958839732E-02 -8.31968571887867E-02 -4.50940345409148E-02
  6.87043958839732E-02  8.31968571887867E-02 -4.50940345409148E-02
  6.87043958839732E-02 -8.31968571887867E-02  4.50940345409148E-02
 -6.87043958839732E-02  8.31968571887867E-02  4.50940345409148E-02
 Scale of Primitive Cell (acell) [bohr]
  1.92321078384969E+01  1.08769586979943E+01  8.67728746385226E+00
 Real space primitive translations (rprimd) [bohr]
  1.92321078384969E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.08769586979943E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.67728746385226E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.81517436719694E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92321078384969E+01  1.08769586979943E+01  8.67728746385226E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.14272488795039E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -3.95295172863453E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -2.74952560878422E-04
 Total energy (etotal) [Ha]= -3.52127551630790E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 2.48602E-03
           Relative     = 7.05996E-06
 fconv : at Broyd/MD step   4, gradients have not converged yet. 
  max grad (force/stress) = 3.9530E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 5/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.22944020991827E+00  2.75754196236506E+00  8.63984437595314E+00
  1.85731506698033E+00  2.75754196236506E+00  3.67236295988549E+00
  1.93082467076976E+00  2.75754196236506E+00  6.66296018852725E+00
  8.64659591453984E+00  2.75754196236506E+00  1.75750878615842E+00
  3.33472852164257E+00  3.85028581697149E-01  2.32962119285820E+00
  9.63441682115869E+00  0.00000000000000E+00  4.35641857703624E+00
  4.40497661124041E+00  8.27262588709518E+00  4.28342579891689E+00
  7.77710175417836E+00  8.27262588709518E+00  8.02878153692173E+00
  7.70359215038893E+00  8.27262588709518E+00  2.30654161149101E+00
  9.87820906618843E-01  8.27262588709518E+00  6.11392736319466E+00
  6.29968829951613E+00  1.06451392677631E+01  6.68603976989446E+00
  0.00000000000000E+00  5.51508392473012E+00  0.00000000000000E+00
  1.40393934323991E+01  8.27262588709518E+00  7.29927781193486E-02
  1.74115185753371E+01  8.27262588709518E+00  5.04047419418700E+00
  1.73380089715476E+01  8.27262588709518E+00  2.04987696554524E+00
  1.06222377277775E+01  8.27262588709518E+00  6.95532836791407E+00
  1.59341051206748E+01  5.90011250642726E+00  6.38321596121427E+00
  9.63441682115869E+00  5.51508392473012E+00  4.35641857703624E+00
  1.48638570310770E+01  2.75754196236506E+00  4.42941135515558E+00
  1.14917318881390E+01  2.75754196236506E+00  6.84055617150756E-01
  1.15652414919284E+01  2.75754196236506E+00  6.40629554258148E+00
  1.82810127356985E+01  2.75754196236506E+00  2.59890979087783E+00
  1.29691453428012E+01  5.13005534303297E+00  2.02679738417803E+00
  1.59341051206748E+01  1.06451392677631E+01  6.38321596121427E+00
  1.29691453428012E+01  3.85028581697149E-01  2.02679738417803E+00
  3.33472852164257E+00  5.13005534303297E+00  2.32962119285820E+00
  6.29968829951613E+00  5.90011250642726E+00  6.68603976989446E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.71393707942633E-01  2.50000000000000E-01  9.91622386964363E-01
  9.63895947963023E-02  2.50000000000000E-01  4.21488763642160E-01
  1.00204543077759E-01  2.50000000000000E-01  7.64729108406772E-01
  4.48734784629131E-01  2.50000000000000E-01  2.01714866820039E-01
  1.73063330326283E-01  3.49068651494719E-02  2.67378025281847E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.28606292057366E-01  7.50000000000000E-01  4.91622386964362E-01
  4.03610405203698E-01  7.50000000000000E-01  9.21488763642159E-01
  3.99795456922241E-01  7.50000000000000E-01  2.64729108406772E-01
  5.12652153708688E-02  7.50000000000000E-01  7.01714866820039E-01
  3.26936669673717E-01  9.65093134850529E-01  7.67378025281848E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.28606292057365E-01  7.50000000000000E-01  8.37761303563798E-03
  9.03610405203698E-01  7.50000000000000E-01  5.78511236357840E-01
  8.99795456922241E-01  7.50000000000000E-01  2.35270891593228E-01
  5.51265215370868E-01  7.50000000000000E-01  7.98285133179961E-01
  8.26936669673718E-01  5.34906865149471E-01  7.32621974718152E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.71393707942635E-01  2.50000000000000E-01  5.08377613035637E-01
  5.96389594796302E-01  2.50000000000000E-01  7.85112363578402E-02
  6.00204543077759E-01  2.50000000000000E-01  7.35270891593228E-01
  9.48734784629132E-01  2.50000000000000E-01  2.98285133179961E-01
  6.73063330326282E-01  4.65093134850528E-01  2.32621974718153E-01
  8.26936669673718E-01  9.65093134850529E-01  7.32621974718152E-01
  6.73063330326282E-01  3.49068651494719E-02  2.32621974718153E-01
  1.73063330326283E-01  4.65093134850528E-01  2.67378025281847E-01
  3.26936669673717E-01  5.34906865149471E-01  7.67378025281848E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92688336423174E+01  1.10301678494602E+01  8.71283715407248E+00
 Real space primitive translations (rprimd) [bohr]
  1.92688336423174E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10301678494602E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.71283715407248E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85181307231858E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92688336423174E+01  1.10301678494602E+01  8.71283715407248E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14322

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.6629E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.4599E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.09611333757    -3.521E+02 5.549E-04 7.042E+01
 scprqt: <Vxc>= -3.9673800E-01 hartree

Simple mixing update:
  residual square of the potential :   42.342130121238341

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.9498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.2218E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.09702856901    -9.152E-04 1.375E-04 5.622E+01
 scprqt: <Vxc>= -3.9102020E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.533      0.467

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8222E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5983E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.13149143572    -3.446E-02 1.850E-04 4.357E+00
 scprqt: <Vxc>= -3.9356765E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.626      0.245      0.130

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8105E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6096E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.13344330065    -1.952E-03 1.763E-05 1.163E-01
 scprqt: <Vxc>= -3.9343495E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.781      0.164      0.464E-01  0.907E-02

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8232E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5990E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13347435193    -3.105E-05 1.023E-05 6.425E-02
 scprqt: <Vxc>= -3.9335357E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.559      0.447      0.123E-01 -0.467E-02 -0.142E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8212E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6019E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13351195393    -3.760E-05 6.473E-06 2.315E-03
 scprqt: <Vxc>= -3.9335730E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.828      0.174      0.118E-01 -0.791E-02 -0.359E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8207E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6019E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13351365177    -1.698E-06 4.545E-06 3.023E-04
 scprqt: <Vxc>= -3.9335247E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.523      0.442      0.611E-01 -0.192E-01 -0.513E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8214E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6025E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13351389964    -2.479E-07 3.646E-06 2.084E-05
 scprqt: <Vxc>= -3.9335462E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.706      0.204      0.913E-01  0.888E-02 -0.824E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8214E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6025E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13351393870    -3.905E-08 2.367E-06 6.518E-06
 scprqt: <Vxc>= -3.9335430E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.821      0.239     -0.385E-01 -0.175E-01 -0.231E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8216E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13351395410    -1.540E-08 2.207E-06 2.716E-06
 scprqt: <Vxc>= -3.9335372E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.21      0.199     -0.343     -0.506E-01 -0.212E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8216E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6025E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13351396392    -9.823E-09 1.444E-06 1.704E-06
 scprqt: <Vxc>= -3.9335421E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.978      0.421     -0.322     -0.715E-01 -0.955E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8216E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13351396755    -3.627E-09 1.528E-06 5.166E-07
 scprqt: <Vxc>= -3.9335389E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.507      0.647      0.901E-01 -0.244     -0.120E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8216E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13351396889    -1.344E-09 1.108E-06 1.472E-07
 scprqt: <Vxc>= -3.9335402E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.719      0.368      0.349E-01 -0.757E-01 -0.588E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8217E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13351396942    -5.248E-10 1.280E-06 4.183E-08
 scprqt: <Vxc>= -3.9335394E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.697      0.357      0.658E-01 -0.286E-01 -0.899E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8217E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13351396963    -2.085E-10 9.295E-07 2.264E-08
 scprqt: <Vxc>= -3.9335401E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.466      0.427      0.135      0.458E-01 -0.208E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8217E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.13351396968    -5.821E-11 1.079E-06 2.317E-09
 scprqt: <Vxc>= -3.9335397E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.780      0.307      0.106E-01 -0.363E-01 -0.198E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8217E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.13351396972    -3.627E-11 7.837E-07 2.970E-09
 scprqt: <Vxc>= -3.9335399E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.623      0.338      0.859E-01  0.274E-01 -0.375E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.8217E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.13351396972     2.274E-13 9.132E-07 1.887E-10
 scprqt: <Vxc>= -3.9335398E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.611      0.296      0.631E-01  0.473E-01  0.521E-02

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.8217E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.13351396973    -7.162E-12 6.631E-07 1.775E-10
 scprqt: <Vxc>= -3.9335398E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25      0.324     -0.220     -0.311     -0.661E-01

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.8217E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.13351396972     2.501E-12 7.744E-07 4.184E-10
 scprqt: <Vxc>= -3.9335398E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.376      0.641      0.121     -0.869E-01 -0.432E-01

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    8.8217E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6024E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 21  -352.13351396972     1.705E-12 5.623E-07 1.645E-11
 scprqt: <Vxc>= -3.9335398E-01 hartree

 At SCF step   21       vres2   =  1.64E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -5.24330008E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -9.59140098E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.39274396E-04  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM5_DEN
ioarr: data written to disk file telast_1o_DS2_TIM5_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.22944020991827E+00  2.75754196236506E+00  8.63984437595314E+00
  1.85731506698033E+00  2.75754196236506E+00  3.67236295988549E+00
  1.93082467076976E+00  2.75754196236506E+00  6.66296018852725E+00
  8.64659591453984E+00  2.75754196236506E+00  1.75750878615842E+00
  3.33472852164257E+00  3.85028581697149E-01  2.32962119285820E+00
  9.63441682115869E+00  0.00000000000000E+00  4.35641857703624E+00
  4.40497661124041E+00  8.27262588709518E+00  4.28342579891689E+00
  7.77710175417836E+00  8.27262588709518E+00  8.02878153692173E+00
  7.70359215038893E+00  8.27262588709518E+00  2.30654161149101E+00
  9.87820906618843E-01  8.27262588709518E+00  6.11392736319466E+00
  6.29968829951613E+00  1.06451392677631E+01  6.68603976989446E+00
  0.00000000000000E+00  5.51508392473012E+00  0.00000000000000E+00
  1.40393934323991E+01  8.27262588709518E+00  7.29927781193486E-02
  1.74115185753371E+01  8.27262588709518E+00  5.04047419418700E+00
  1.73380089715476E+01  8.27262588709518E+00  2.04987696554524E+00
  1.06222377277775E+01  8.27262588709518E+00  6.95532836791407E+00
  1.59341051206748E+01  5.90011250642726E+00  6.38321596121427E+00
  9.63441682115869E+00  5.51508392473012E+00  4.35641857703624E+00
  1.48638570310770E+01  2.75754196236506E+00  4.42941135515558E+00
  1.14917318881390E+01  2.75754196236506E+00  6.84055617150756E-01
  1.15652414919284E+01  2.75754196236506E+00  6.40629554258148E+00
  1.82810127356985E+01  2.75754196236506E+00  2.59890979087783E+00
  1.29691453428012E+01  5.13005534303297E+00  2.02679738417803E+00
  1.59341051206748E+01  1.06451392677631E+01  6.38321596121427E+00
  1.29691453428012E+01  3.85028581697149E-01  2.02679738417803E+00
  3.33472852164257E+00  5.13005534303297E+00  2.32962119285820E+00
  6.29968829951613E+00  5.90011250642726E+00  6.68603976989446E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.71393707942633E-01  2.50000000000000E-01  9.91622386964363E-01
  9.63895947963023E-02  2.50000000000000E-01  4.21488763642160E-01
  1.00204543077759E-01  2.50000000000000E-01  7.64729108406772E-01
  4.48734784629131E-01  2.50000000000000E-01  2.01714866820039E-01
  1.73063330326283E-01  3.49068651494719E-02  2.67378025281847E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.28606292057366E-01  7.50000000000000E-01  4.91622386964362E-01
  4.03610405203698E-01  7.50000000000000E-01  9.21488763642159E-01
  3.99795456922241E-01  7.50000000000000E-01  2.64729108406772E-01
  5.12652153708688E-02  7.50000000000000E-01  7.01714866820039E-01
  3.26936669673717E-01  9.65093134850529E-01  7.67378025281848E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.28606292057365E-01  7.50000000000000E-01  8.37761303563798E-03
  9.03610405203698E-01  7.50000000000000E-01  5.78511236357840E-01
  8.99795456922241E-01  7.50000000000000E-01  2.35270891593228E-01
  5.51265215370868E-01  7.50000000000000E-01  7.98285133179961E-01
  8.26936669673718E-01  5.34906865149471E-01  7.32621974718152E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.71393707942635E-01  2.50000000000000E-01  5.08377613035637E-01
  5.96389594796302E-01  2.50000000000000E-01  7.85112363578402E-02
  6.00204543077759E-01  2.50000000000000E-01  7.35270891593228E-01
  9.48734784629132E-01  2.50000000000000E-01  2.98285133179961E-01
  6.73063330326282E-01  4.65093134850528E-01  2.32621974718153E-01
  8.26936669673718E-01  9.65093134850529E-01  7.32621974718152E-01
  6.73063330326282E-01  3.49068651494719E-02  2.32621974718153E-01
  1.73063330326283E-01  4.65093134850528E-01  2.67378025281847E-01
  3.26936669673717E-01  5.34906865149471E-01  7.67378025281848E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 5.55161E-03 2.95558E-03 (free atoms)
  1.47141723408747E-19 -0.00000000000000E+00  3.09772049281573E-20
 -4.31833131517570E-03 -0.00000000000000E+00  1.59226058145698E-03
 -7.13118253119659E-04 -2.92939718768050E-28  3.90434548184216E-03
 -3.37807096649980E-03 -0.00000000000000E+00  1.15377354195561E-03
 -1.07521721890661E-03 -0.00000000000000E+00  1.48593155254743E-03
 -9.85010201040646E-04 -5.55160669309151E-03 -1.68417163931099E-03
  1.47141723408747E-19 -0.00000000000000E+00  3.09772049281573E-20
  4.31833131517570E-03 -0.00000000000000E+00  1.59226058145698E-03
  7.13118253119660E-04 -2.92939718768050E-28  3.90434548184216E-03
  3.37807096649980E-03 -0.00000000000000E+00  1.15377354195561E-03
  1.07521721890661E-03 -3.03953565616262E-30  1.48593155254743E-03
  9.85010201040647E-04  5.55160669309151E-03 -1.68417163931099E-03
  1.47141723408747E-19 -0.00000000000000E+00  3.09772049281573E-20
  4.31833131517570E-03 -0.00000000000000E+00 -1.59226058145698E-03
  7.13118253119660E-04 -0.00000000000000E+00 -3.90434548184216E-03
  3.37807096649980E-03 -0.00000000000000E+00 -1.15377354195561E-03
  1.07521721890661E-03 -0.00000000000000E+00 -1.48593155254743E-03
  9.85010201040647E-04 -5.55160669309151E-03  1.68417163931099E-03
  1.47141723408665E-19 -0.00000000000000E+00  3.09772049281573E-20
 -4.31833131517570E-03 -0.00000000000000E+00 -1.59226058145698E-03
 -7.13118253119659E-04 -7.06423845735207E-29 -3.90434548184216E-03
 -3.37807096649980E-03 -0.00000000000000E+00 -1.15377354195561E-03
 -1.07521721890661E-03 -0.00000000000000E+00 -1.48593155254743E-03
 -9.85010201040647E-04  5.55160669309151E-03  1.68417163931099E-03
  9.85010201040647E-04  5.55160669309151E-03  1.68417163931099E-03
 -9.85010201040646E-04 -5.55160669309151E-03  1.68417163931099E-03
 -9.85010201040646E-04  5.55160669309151E-03 -1.68417163931099E-03
  9.85010201040647E-04 -5.55160669309151E-03 -1.68417163931099E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  8.32092077245302E-02  0.00000000000000E+00 -1.38731071530834E-02
  1.37409569866627E-02  3.23117426778526E-27 -3.40179263765294E-02
  6.50914874854269E-02  0.00000000000000E+00 -1.00526409837367E-02
  2.07181817204667E-02  0.00000000000000E+00 -1.29466796394439E-02
  1.89799976998378E-02  6.12351536589863E-02  1.46739132328239E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -8.32092077245302E-02  0.00000000000000E+00 -1.38731071530834E-02
 -1.37409569866627E-02  3.23117426778526E-27 -3.40179263765294E-02
 -6.50914874854269E-02  0.00000000000000E+00 -1.00526409837367E-02
 -2.07181817204667E-02  3.35265884718930E-29 -1.29466796394439E-02
 -1.89799976998378E-02 -6.12351536589863E-02  1.46739132328239E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -8.32092077245302E-02  0.00000000000000E+00  1.38731071530834E-02
 -1.37409569866627E-02  0.00000000000000E+00  3.40179263765294E-02
 -6.50914874854269E-02  0.00000000000000E+00  1.00526409837367E-02
 -2.07181817204667E-02  0.00000000000000E+00  1.29466796394439E-02
 -1.89799976998378E-02  6.12351536589863E-02 -1.46739132328239E-02
  1.57772181044202E-30  0.00000000000000E+00  0.00000000000000E+00
  8.32092077245302E-02  0.00000000000000E+00  1.38731071530834E-02
  1.37409569866627E-02  7.79197359132054E-28  3.40179263765294E-02
  6.50914874854269E-02  0.00000000000000E+00  1.00526409837367E-02
  2.07181817204667E-02  0.00000000000000E+00  1.29466796394439E-02
  1.89799976998378E-02 -6.12351536589863E-02 -1.46739132328239E-02
 -1.89799976998378E-02 -6.12351536589863E-02 -1.46739132328239E-02
  1.89799976998378E-02  6.12351536589863E-02 -1.46739132328239E-02
  1.89799976998378E-02 -6.12351536589863E-02  1.46739132328239E-02
 -1.89799976998378E-02  6.12351536589863E-02  1.46739132328239E-02
 Scale of Primitive Cell (acell) [bohr]
  1.92688336423174E+01  1.10301678494602E+01  8.71283715407248E+00
 Real space primitive translations (rprimd) [bohr]
  1.92688336423174E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10301678494602E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.71283715407248E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85181307231858E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92688336423174E+01  1.10301678494602E+01  8.71283715407248E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -5.24330007713979E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -9.59140098091508E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.39274396036917E-04
 Total energy (etotal) [Ha]= -3.52133513969723E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-5.96234E-03
           Relative     =-1.69322E-05
 fconv : at Broyd/MD step   5, gradients have not converged yet. 
  max grad (force/stress) = 1.3927E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 6/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.23199247746300E+00  2.76871069094857E+00  8.66537921181570E+00
  1.85896783159874E+00  2.76871069094857E+00  3.68705513456699E+00
  1.93238018989414E+00  2.76871069094857E+00  6.68154951877514E+00
  8.65543387204509E+00  2.76871069094857E+00  1.76330815966296E+00
  3.33758696523672E+00  3.82920287454872E-01  2.33521405274970E+00
  9.64615985080493E+00  0.00000000000000E+00  4.36870435311831E+00
  4.41416737334192E+00  8.30613207284572E+00  4.29667485869739E+00
  7.78719201920619E+00  8.30613207284572E+00  8.05575948768532E+00
  7.71377966091078E+00  8.30613207284572E+00  2.31284516565684E+00
  9.90725978759846E-01  8.30613207284572E+00  6.13201251278128E+00
  6.30857288556821E+00  1.06919224763394E+01  6.70391840586802E+00
  0.00000000000000E+00  5.53742138189714E+00  0.00000000000000E+00
  1.40603272241468E+01  8.30613207284572E+00  7.20294944209313E-02
  1.74333518700111E+01  8.30613207284572E+00  5.05035357166962E+00
  1.73599395117157E+01  8.30613207284572E+00  2.05585918746148E+00
  1.06368858295648E+01  8.30613207284572E+00  6.97410054657366E+00
  1.59547327363732E+01  5.92034166935201E+00  6.40219465348692E+00
  9.64615985080493E+00  5.53742138189714E+00  4.36870435311831E+00
  1.48781523282680E+01  2.76871069094857E+00  4.44073384753924E+00
  1.15051276824037E+01  2.76871069094857E+00  6.81649218551313E-01
  1.15785400406991E+01  2.76871069094857E+00  6.42456354057980E+00
  1.83015937228500E+01  2.76871069094857E+00  2.60539619345535E+00
  1.29837468160416E+01  5.15450109444228E+00  2.03349030036861E+00
  1.59547327363732E+01  1.06919224763394E+01  6.40219465348692E+00
  1.29837468160416E+01  3.82920287454872E-01  2.03349030036861E+00
  3.33758696523672E+00  5.15450109444228E+00  2.33521405274970E+00
  6.30857288556821E+00  5.92034166935201E+00  6.70391840586802E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.71195613507608E-01  2.50000000000000E-01  9.91756194903700E-01
  9.63579217196788E-02  2.50000000000000E-01  4.21984968144529E-01
  1.00163185131796E-01  2.50000000000000E-01  7.64706075155435E-01
  4.48646612015393E-01  2.50000000000000E-01  2.01811340060622E-01
  1.73000811559131E-01  3.45756861403675E-02  2.67266203432015E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.28804386492391E-01  7.50000000000000E-01  4.91756194903700E-01
  4.03642078280321E-01  7.50000000000000E-01  9.21984968144530E-01
  3.99836814868203E-01  7.50000000000000E-01  2.64706075155436E-01
  5.13533879846068E-02  7.50000000000000E-01  7.01811340060623E-01
  3.26999188440869E-01  9.65424313859633E-01  7.67266203432016E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.28804386492389E-01  7.50000000000000E-01  8.24380509630021E-03
  9.03642078280322E-01  7.50000000000000E-01  5.78015031855470E-01
  8.99836814868205E-01  7.50000000000000E-01  2.35293924844564E-01
  5.51353387984606E-01  7.50000000000000E-01  7.98188659939377E-01
  8.26999188440871E-01  5.34575686140367E-01  7.32733796567984E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.71195613507611E-01  2.50000000000000E-01  5.08243805096299E-01
  5.96357921719678E-01  2.50000000000000E-01  7.80150318554702E-02
  6.00163185131795E-01  2.50000000000000E-01  7.35293924844565E-01
  9.48646612015394E-01  2.50000000000000E-01  2.98188659939378E-01
  6.73000811559129E-01  4.65424313859633E-01  2.32733796567984E-01
  8.26999188440871E-01  9.65424313859633E-01  7.32733796567984E-01
  6.73000811559129E-01  3.45756861403675E-02  2.32733796567984E-01
  1.73000811559131E-01  4.65424313859633E-01  2.67266203432015E-01
  3.26999188440869E-01  5.34575686140367E-01  7.67266203432016E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92923197016099E+01  1.10748427637943E+01  8.73740870623663E+00
 Real space primitive translations (rprimd) [bohr]
  1.92923197016099E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10748427637943E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73740870623663E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.86682956502466E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92923197016099E+01  1.10748427637943E+01  8.73740870623663E+00
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   1.7208456881689926E-015   0.0000000000000000       -1.1102230246251565E-016
  -1.6653345369377348E-016   0.0000000000000000        6.6613381477509392E-016
   2.7755575615628914E-017   0.0000000000000000        3.3306690738754696E-016
   4.4408920985006262E-016   0.0000000000000000        3.8857805861880479E-016
  -1.1102230246251565E-015  -3.1918911957973251E-016   5.5511151231257827E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -7.2164496600635175E-016   0.0000000000000000        0.0000000000000000     
   1.6653345369377348E-016   0.0000000000000000       -2.2204460492503131E-016
   7.7715611723760958E-016   0.0000000000000000       -7.2164496600635175E-016
  -3.5388358909926865E-016   0.0000000000000000       -3.3306690738754696E-016
   1.2212453270876722E-015  -1.1102230246251565E-016  -3.3306690738754696E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   1.3322676295501878E-015   0.0000000000000000       -4.3888503942213219E-016
  -2.2204460492503131E-016   0.0000000000000000        3.3306690738754696E-016
  -3.3306690738754696E-016   0.0000000000000000       -2.7755575615628914E-017
   3.3306690738754696E-016   0.0000000000000000        2.2204460492503131E-016
  -8.8817841970012523E-016   0.0000000000000000        2.2204460492503131E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -1.3322676295501878E-015   0.0000000000000000        3.3306690738754696E-016
   1.1102230246251565E-016   0.0000000000000000        0.0000000000000000     
   3.3306690738754696E-016   0.0000000000000000       -4.4408920985006262E-016
  -3.3306690738754696E-016   0.0000000000000000       -1.1102230246251565E-016
   1.3322676295501878E-015  -1.6653345369377348E-016  -2.7755575615628914E-017
  -8.8817841970012523E-016  -1.1102230246251565E-016   2.2204460492503131E-016
   1.3322676295501878E-015  -3.1918911957973251E-016  -2.7755575615628914E-017
  -1.1102230246251565E-015  -1.6653345369377348E-016   5.5511151231257827E-016
   1.2212453270876722E-015   0.0000000000000000       -3.3306690738754696E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14061

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.7909E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    5.0196E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.12637952400    -3.521E+02 7.968E-05 1.815E+01
 scprqt: <Vxc>= -3.9348932E-01 hartree

Simple mixing update:
  residual square of the potential :   9.9880975055163148

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.9026E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4665E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.12689933835    -5.198E-04 2.980E-05 1.299E+01
 scprqt: <Vxc>= -3.9095945E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.543      0.457

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8468E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6398E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.13349644015    -6.597E-03 4.355E-05 1.003E+00
 scprqt: <Vxc>= -3.9209323E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.591      0.263      0.146

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8471E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6453E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.13397233155    -4.759E-04 5.067E-06 2.777E-02
 scprqt: <Vxc>= -3.9201298E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.759      0.172      0.524E-01  0.164E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8502E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6418E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13397935935    -7.028E-06 2.719E-06 1.652E-02
 scprqt: <Vxc>= -3.9198332E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.559      0.452      0.101E-01 -0.677E-02 -0.147E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6436E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13398892897    -9.570E-06 1.669E-06 3.506E-04
 scprqt: <Vxc>= -3.9198823E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.806      0.165      0.473E-01 -0.104E-01 -0.416E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8496E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6431E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13398918711    -2.581E-07 1.670E-06 4.631E-05
 scprqt: <Vxc>= -3.9198355E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.631      0.359      0.314E-01 -0.155E-01 -0.448E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13398922588    -3.877E-08 1.109E-06 7.236E-06
 scprqt: <Vxc>= -3.9198486E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.571      0.336      0.994E-01  0.391E-02 -0.957E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8497E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13398923357    -7.683E-09 1.182E-06 7.726E-07
 scprqt: <Vxc>= -3.9198470E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.756      0.229      0.235E-01 -0.533E-02 -0.604E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13398923477    -1.205E-09 7.975E-07 2.343E-07
 scprqt: <Vxc>= -3.9198450E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.830      0.253     -0.578E-01 -0.160E-01 -0.988E-02

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13398923524    -4.669E-10 9.545E-07 4.577E-08
 scprqt: <Vxc>= -3.9198462E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.852      0.255     -0.817E-01 -0.182E-01 -0.578E-02

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13398923537    -1.340E-10 7.184E-07 7.037E-09
 scprqt: <Vxc>= -3.9198455E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.31     -0.181E-01 -0.254     -0.471E-01 -0.239E-04

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13398923544    -7.049E-11 8.973E-07 1.039E-08
 scprqt: <Vxc>= -3.9198459E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.876      0.740     -0.454     -0.161     -0.128E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13398923546    -1.990E-11 6.773E-07 1.496E-10
 scprqt: <Vxc>= -3.9198457E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.00      0.130     -0.872E-01 -0.873E-01  0.307E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13398923548    -1.728E-11 8.452E-07 1.726E-09
 scprqt: <Vxc>= -3.9198458E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.664      0.484     -0.572E-01 -0.350E-01 -0.789E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8498E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6434E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.13398923548     1.478E-12 6.398E-07 6.915E-11
 scprqt: <Vxc>= -3.9198457E-01 hartree

 At SCF step   16       vres2   =  6.91E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  2.89574570E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.32763734E-04  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  7.31494705E-05  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM6_DEN
ioarr: data written to disk file telast_1o_DS2_TIM6_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.23199247746303E+00  2.76871069094857E+00  8.66537921181570E+00
  1.85896783159874E+00  2.76871069094857E+00  3.68705513456700E+00
  1.93238018989414E+00  2.76871069094857E+00  6.68154951877515E+00
  8.65543387204510E+00  2.76871069094857E+00  1.76330815966296E+00
  3.33758696523670E+00  3.82920287454868E-01  2.33521405274970E+00
  9.64615985080493E+00  0.00000000000000E+00  4.36870435311831E+00
  4.41416737334190E+00  8.30613207284572E+00  4.29667485869739E+00
  7.78719201920620E+00  8.30613207284572E+00  8.05575948768531E+00
  7.71377966091079E+00  8.30613207284572E+00  2.31284516565683E+00
  9.90725978759839E-01  8.30613207284572E+00  6.13201251278127E+00
  6.30857288556823E+00  1.06919224763394E+01  6.70391840586802E+00
  0.00000000000000E+00  5.53742138189714E+00  0.00000000000000E+00
  1.40603272241468E+01  8.30613207284572E+00  7.20294944209275E-02
  1.74333518700111E+01  8.30613207284572E+00  5.05035357166963E+00
  1.73599395117157E+01  8.30613207284572E+00  2.05585918746148E+00
  1.06368858295648E+01  8.30613207284572E+00  6.97410054657366E+00
  1.59547327363732E+01  5.92034166935201E+00  6.40219465348692E+00
  9.64615985080493E+00  5.53742138189714E+00  4.36870435311831E+00
  1.48781523282680E+01  2.76871069094857E+00  4.44073384753924E+00
  1.15051276824037E+01  2.76871069094857E+00  6.81649218551313E-01
  1.15785400406991E+01  2.76871069094857E+00  6.42456354057980E+00
  1.83015937228500E+01  2.76871069094857E+00  2.60539619345535E+00
  1.29837468160416E+01  5.15450109444228E+00  2.03349030036861E+00
  1.59547327363732E+01  1.06919224763394E+01  6.40219465348692E+00
  1.29837468160416E+01  3.82920287454868E-01  2.03349030036861E+00
  3.33758696523670E+00  5.15450109444228E+00  2.33521405274970E+00
  6.30857288556823E+00  5.92034166935201E+00  6.70391840586802E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.71195613507610E-01  2.50000000000000E-01  9.91756194903700E-01
  9.63579217196786E-02  2.50000000000000E-01  4.21984968144530E-01
  1.00163185131796E-01  2.50000000000000E-01  7.64706075155436E-01
  4.48646612015394E-01  2.50000000000000E-01  2.01811340060622E-01
  1.73000811559130E-01  3.45756861403672E-02  2.67266203432016E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.28804386492390E-01  7.50000000000000E-01  4.91756194903700E-01
  4.03642078280321E-01  7.50000000000000E-01  9.21984968144530E-01
  3.99836814868204E-01  7.50000000000000E-01  2.64706075155436E-01
  5.13533879846065E-02  7.50000000000000E-01  7.01811340060622E-01
  3.26999188440870E-01  9.65424313859633E-01  7.67266203432016E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.28804386492391E-01  7.50000000000000E-01  8.24380509629977E-03
  9.03642078280321E-01  7.50000000000000E-01  5.78015031855470E-01
  8.99836814868204E-01  7.50000000000000E-01  2.35293924844564E-01
  5.51353387984606E-01  7.50000000000000E-01  7.98188659939378E-01
  8.26999188440870E-01  5.34575686140367E-01  7.32733796567984E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.71195613507609E-01  2.50000000000000E-01  5.08243805096300E-01
  5.96357921719679E-01  2.50000000000000E-01  7.80150318554702E-02
  6.00163185131796E-01  2.50000000000000E-01  7.35293924844564E-01
  9.48646612015394E-01  2.50000000000000E-01  2.98188659939378E-01
  6.73000811559130E-01  4.65424313859633E-01  2.32733796567984E-01
  8.26999188440870E-01  9.65424313859633E-01  7.32733796567984E-01
  6.73000811559130E-01  3.45756861403672E-02  2.32733796567984E-01
  1.73000811559130E-01  4.65424313859633E-01  2.67266203432016E-01
  3.26999188440870E-01  5.34575686140367E-01  7.67266203432016E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 3.61663E-03 1.87564E-03 (free atoms)
 -3.09772049281573E-20 -0.00000000000000E+00  1.21004706750614E-20
 -3.36697625562455E-03 -0.00000000000000E+00  1.94000509411474E-03
  6.08538436766569E-05 -0.00000000000000E+00  1.26209303982293E-03
 -2.12615044622612E-03 -0.00000000000000E+00 -4.60387848253364E-04
 -4.88529065042646E-04 -0.00000000000000E+00  6.21380322811483E-05
 -8.38639152729197E-04 -3.61662812371302E-03 -8.29799085414830E-05
 -3.09772049281573E-20 -0.00000000000000E+00  1.21004706750614E-20
  3.36697625562455E-03 -0.00000000000000E+00  1.94000509411474E-03
 -6.08538436766570E-05 -0.00000000000000E+00  1.26209303982293E-03
  2.12615044622612E-03 -4.13133924143797E-30 -4.60387848253364E-04
  4.88529065042646E-04 -0.00000000000000E+00  6.21380322811483E-05
  8.38639152729197E-04  3.61662812371302E-03 -8.29799085414830E-05
 -3.09772049281573E-20 -0.00000000000000E+00  1.21004706750614E-20
  3.36697625562455E-03 -0.00000000000000E+00 -1.94000509411474E-03
 -6.08538436766570E-05 -3.07268356081949E-29 -1.26209303982293E-03
  2.12615044622612E-03 -0.00000000000000E+00  4.60387848253364E-04
  4.88529065042646E-04  1.45879013214913E-28 -6.21380322811482E-05
  8.38639152729197E-04 -3.61662812371302E-03  8.29799085414830E-05
 -3.09772049281573E-20 -0.00000000000000E+00  1.21004706750614E-20
 -3.36697625562455E-03 -0.00000000000000E+00 -1.94000509411474E-03
  6.08538436766569E-05  3.07357393565601E-29 -1.26209303982293E-03
 -2.12615044622612E-03 -2.91758026429826E-28  4.60387848253364E-04
 -4.88529065042646E-04 -1.45879013214913E-28 -6.21380322811482E-05
 -8.38639152729197E-04  3.61662812371302E-03  8.29799085414830E-05
  8.38639152729197E-04  3.61662812371302E-03  8.29799085414830E-05
 -8.38639152729197E-04 -3.61662812371302E-03  8.29799085414830E-05
 -8.38639152729197E-04  3.61662812371302E-03 -8.29799085414830E-05
  8.38639152729197E-04 -3.61662812371302E-03 -8.29799085414830E-05
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  6.49567823512381E-02  0.00000000000000E+00 -1.69506173994615E-02
 -1.17401180728186E-03  0.00000000000000E+00 -1.10274227142295E-02
  4.10183741423148E-02  0.00000000000000E+00  4.02259679357449E-03
  9.42485890633129E-03  0.00000000000000E+00 -5.42925384241717E-04
  1.61792946487389E-02  4.00535878052380E-02  7.25029375333072E-04
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -6.49567823512381E-02  0.00000000000000E+00 -1.69506173994615E-02
  1.17401180728186E-03  0.00000000000000E+00 -1.10274227142295E-02
 -4.10183741423148E-02  4.57539325028187E-29  4.02259679357449E-03
 -9.42485890633129E-03  0.00000000000000E+00 -5.42925384241717E-04
 -1.61792946487389E-02 -4.00535878052380E-02  7.25029375333072E-04
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -6.49567823512381E-02  0.00000000000000E+00  1.69506173994615E-02
  1.17401180728186E-03  3.40294872989714E-28  1.10274227142295E-02
 -4.10183741423148E-02  0.00000000000000E+00 -4.02259679357449E-03
 -9.42485890633129E-03 -1.61558713389263E-27  5.42925384241717E-04
 -1.61792946487389E-02  4.00535878052380E-02 -7.25029375333072E-04
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  6.49567823512381E-02  0.00000000000000E+00  1.69506173994615E-02
 -1.17401180728186E-03 -3.40393480602867E-28  1.10274227142295E-02
  4.10183741423148E-02  3.23117426778526E-27 -4.02259679357449E-03
  9.42485890633129E-03  1.61558713389263E-27  5.42925384241717E-04
  1.61792946487389E-02 -4.00535878052380E-02 -7.25029375333072E-04
 -1.61792946487389E-02 -4.00535878052380E-02 -7.25029375333072E-04
  1.61792946487389E-02  4.00535878052380E-02 -7.25029375333072E-04
  1.61792946487389E-02 -4.00535878052380E-02  7.25029375333072E-04
 -1.61792946487389E-02  4.00535878052380E-02  7.25029375333072E-04
 Scale of Primitive Cell (acell) [bohr]
  1.92923197016099E+01  1.10748427637943E+01  8.73740870623663E+00
 Real space primitive translations (rprimd) [bohr]
  1.92923197016099E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10748427637943E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73740870623663E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.86682956502466E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92923197016099E+01  1.10748427637943E+01  8.73740870623663E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  2.89574570129618E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.32763734263037E-04  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  7.31494705095703E-05
 Total energy (etotal) [Ha]= -3.52133989235480E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-4.75266E-04
           Relative     =-1.34967E-06
 fconv : at Broyd/MD step   6, gradients have not converged yet. 
  max grad (force/stress) = 1.3276E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 7/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.22603241232788E+00  2.76093781209208E+00  8.66499323192506E+00
  1.85886967546928E+00  2.76093781209208E+00  3.68560151097664E+00
  1.92462945525638E+00  2.76093781209208E+00  6.67834291312379E+00
  8.65517277437863E+00  2.76093781209208E+00  1.76271990141671E+00
  3.33667341673573E+00  3.75500960122730E-01  2.33291988077765E+00
  9.64450915792742E+00  0.00000000000000E+00  4.36662584612132E+00
  4.41847674559953E+00  8.28281343627624E+00  4.29836738580374E+00
  7.78563948245814E+00  8.28281343627624E+00  8.05222735709795E+00
  7.71987970267104E+00  8.28281343627624E+00  2.31171706700247E+00
  9.89336383548799E-01  8.28281343627624E+00  6.12934574753804E+00
  6.30783574119168E+00  1.06682502882456E+01  6.69954572689898E+00
  0.00000000000000E+00  5.52187562418416E+00  0.00000000000000E+00
  1.40629859035270E+01  8.28281343627624E+00  6.82584603175761E-02
  1.74301486403855E+01  8.28281343627624E+00  5.04765018126601E+00
  1.73643888605985E+01  8.28281343627624E+00  2.05490877911885E+00
  1.06338455414762E+01  8.28281343627624E+00  6.97053179082592E+00
  1.59523448991191E+01  5.89737658430689E+00  6.40033181146498E+00
  9.64450915792742E+00  5.52187562418416E+00  4.36662584612132E+00
  1.48705415702553E+01  2.76093781209208E+00  4.43488430643890E+00
  1.15033788333967E+01  2.76093781209208E+00  6.81024335144680E-01
  1.15691386131838E+01  2.76093781209208E+00  6.42153462524017E+00
  1.82996819323060E+01  2.76093781209208E+00  2.60390594470460E+00
  1.29811825746632E+01  5.14637466406143E+00  2.03370596534366E+00
  1.59523448991191E+01  1.06682502882456E+01  6.40033181146498E+00
  1.29811825746632E+01  3.75500960122730E-01  2.03370596534366E+00
  3.33667341673573E+00  5.14637466406143E+00  2.33291988077765E+00
  6.30783574119168E+00  5.89737658430689E+00  6.69954572689898E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.70933042146177E-01  2.50000000000000E-01  9.92184072700182E-01
  9.63693250237292E-02  2.50000000000000E-01  4.22019385316743E-01
  9.97785073216716E-02  2.50000000000000E-01  7.64702902019401E-01
  4.48709863438950E-01  2.50000000000000E-01  2.01840043495192E-01
  1.72983060210644E-01  3.40012149565764E-02  2.67130727819270E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.29066957853822E-01  7.50000000000000E-01  4.92184072700182E-01
  4.03630674976271E-01  7.50000000000000E-01  9.22019385316742E-01
  4.00221492678328E-01  7.50000000000000E-01  2.64702902019401E-01
  5.12901365610505E-02  7.50000000000000E-01  7.01840043495193E-01
  3.27016939789356E-01  9.65998785043424E-01  7.67130727819271E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.29066957853823E-01  7.50000000000000E-01  7.81592729981744E-03
  9.03630674976270E-01  7.50000000000000E-01  5.77980614683258E-01
  9.00221492678328E-01  7.50000000000000E-01  2.35297097980599E-01
  5.51290136561051E-01  7.50000000000000E-01  7.98159956504807E-01
  8.27016939789355E-01  5.34001214956577E-01  7.32869272180729E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.70933042146177E-01  2.50000000000000E-01  5.07815927299818E-01
  5.96369325023730E-01  2.50000000000000E-01  7.79806146832575E-02
  5.99778507321672E-01  2.50000000000000E-01  7.35297097980599E-01
  9.48709863438949E-01  2.50000000000000E-01  2.98159956504808E-01
  6.72983060210645E-01  4.65998785043424E-01  2.32869272180729E-01
  8.27016939789355E-01  9.65998785043424E-01  7.32869272180729E-01
  6.72983060210645E-01  3.40012149565764E-02  2.32869272180729E-01
  1.72983060210644E-01  4.65998785043424E-01  2.67130727819270E-01
  3.27016939789356E-01  5.34001214956577E-01  7.67130727819271E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92890183158548E+01  1.10437512483683E+01  8.73325169224264E+00
 Real space primitive translations (rprimd) [bohr]
  1.92890183158548E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10437512483683E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73325169224264E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.86038452414835E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92890183158548E+01  1.10437512483683E+01  8.73325169224264E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14098

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.8925E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4834E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.13206314523    -3.521E+02 2.194E+00 3.764E+00
 scprqt: <Vxc>= -3.9194745E-01 hartree

Simple mixing update:
  residual square of the potential :   2.4722491781311544

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.8191E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6915E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.13152870104     5.344E-04 3.595E-02 4.926E+00
 scprqt: <Vxc>= -3.9319135E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.477      0.523

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8506E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6113E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.13457451090    -3.046E-03 9.236E-02 1.751E-01
 scprqt: <Vxc>= -3.9262078E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.647      0.195      0.158

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8547E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6080E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.13463951123    -6.500E-05 2.123E-03 7.711E-03
 scprqt: <Vxc>= -3.9262410E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.723      0.205      0.473E-01  0.245E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8532E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6096E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13464208840    -2.577E-06 3.724E-03 3.740E-03
 scprqt: <Vxc>= -3.9263487E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.590      0.416      0.538E-02  0.160E-03 -0.117E-01

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8531E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6090E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13464439284    -2.304E-06 4.530E-04 9.759E-05
 scprqt: <Vxc>= -3.9263419E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.766      0.193      0.590E-01 -0.119E-01 -0.114E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8532E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6093E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13464447394    -8.111E-08 5.416E-04 1.571E-05
 scprqt: <Vxc>= -3.9263720E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.634      0.346      0.394E-01 -0.116E-01 -0.677E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13464448470    -1.076E-08 5.941E-05 5.075E-06
 scprqt: <Vxc>= -3.9263677E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.546      0.383      0.830E-01  0.513E-03 -0.109E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8531E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13464448901    -4.305E-09 6.732E-05 3.522E-07
 scprqt: <Vxc>= -3.9263667E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05      0.782E-01 -0.892E-01 -0.389E-01 -0.181E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13464449022    -1.209E-09 7.459E-06 2.973E-07
 scprqt: <Vxc>= -3.9263687E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.11      0.315     -0.295     -0.114     -0.195E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13464449075    -5.293E-10 8.298E-06 3.688E-07
 scprqt: <Vxc>= -3.9263667E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.494      0.856     -0.116     -0.179     -0.550E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13464449126    -5.131E-10 1.061E-06 3.071E-08
 scprqt: <Vxc>= -3.9263676E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.790      0.278      0.801E-01 -0.130      0.645E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13464449137    -1.130E-10 1.157E-06 2.678E-08
 scprqt: <Vxc>= -3.9263674E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.06      0.232     -0.149     -0.454E-01 -0.147

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13464449148    -1.066E-10 5.304E-07 6.079E-09
 scprqt: <Vxc>= -3.9263677E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.715      0.231      0.713E-01  0.286E-01 -0.398E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13464449151    -3.138E-11 7.094E-07 1.314E-09
 scprqt: <Vxc>= -3.9263675E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.606      0.397      0.256E-01 -0.981E-02  0.117E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.13464449153    -1.666E-11 4.973E-07 1.606E-10
 scprqt: <Vxc>= -3.9263676E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.809      0.230      0.730E-01 -0.328E-01 -0.376E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.13464449153    -7.049E-12 6.650E-07 3.175E-10
 scprqt: <Vxc>= -3.9263675E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.471      0.517      0.271E-02  0.625E-01 -0.330E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.8530E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6091E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.13464449154    -9.152E-12 4.681E-07 3.038E-11
 scprqt: <Vxc>= -3.9263675E-01 hartree

 At SCF step   18       vres2   =  3.04E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.31945430E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -4.38660178E-06  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.53460896E-05  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM7_DEN
ioarr: data written to disk file telast_1o_DS2_TIM7_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.22603241232788E+00  2.76093781209208E+00  8.66499323192506E+00
  1.85886967546928E+00  2.76093781209208E+00  3.68560151097664E+00
  1.92462945525638E+00  2.76093781209208E+00  6.67834291312379E+00
  8.65517277437863E+00  2.76093781209208E+00  1.76271990141671E+00
  3.33667341673573E+00  3.75500960122730E-01  2.33291988077765E+00
  9.64450915792742E+00  0.00000000000000E+00  4.36662584612132E+00
  4.41847674559953E+00  8.28281343627624E+00  4.29836738580374E+00
  7.78563948245814E+00  8.28281343627624E+00  8.05222735709795E+00
  7.71987970267104E+00  8.28281343627624E+00  2.31171706700247E+00
  9.89336383548799E-01  8.28281343627624E+00  6.12934574753804E+00
  6.30783574119168E+00  1.06682502882456E+01  6.69954572689898E+00
  0.00000000000000E+00  5.52187562418416E+00  0.00000000000000E+00
  1.40629859035270E+01  8.28281343627624E+00  6.82584603175761E-02
  1.74301486403855E+01  8.28281343627624E+00  5.04765018126601E+00
  1.73643888605985E+01  8.28281343627624E+00  2.05490877911885E+00
  1.06338455414762E+01  8.28281343627624E+00  6.97053179082592E+00
  1.59523448991191E+01  5.89737658430689E+00  6.40033181146498E+00
  9.64450915792742E+00  5.52187562418416E+00  4.36662584612132E+00
  1.48705415702553E+01  2.76093781209208E+00  4.43488430643890E+00
  1.15033788333967E+01  2.76093781209208E+00  6.81024335144680E-01
  1.15691386131838E+01  2.76093781209208E+00  6.42153462524017E+00
  1.82996819323060E+01  2.76093781209208E+00  2.60390594470460E+00
  1.29811825746632E+01  5.14637466406143E+00  2.03370596534366E+00
  1.59523448991191E+01  1.06682502882456E+01  6.40033181146498E+00
  1.29811825746632E+01  3.75500960122730E-01  2.03370596534366E+00
  3.33667341673573E+00  5.14637466406143E+00  2.33291988077765E+00
  6.30783574119168E+00  5.89737658430689E+00  6.69954572689898E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.70933042146177E-01  2.50000000000000E-01  9.92184072700182E-01
  9.63693250237292E-02  2.50000000000000E-01  4.22019385316743E-01
  9.97785073216716E-02  2.50000000000000E-01  7.64702902019401E-01
  4.48709863438950E-01  2.50000000000000E-01  2.01840043495192E-01
  1.72983060210644E-01  3.40012149565764E-02  2.67130727819270E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.29066957853822E-01  7.50000000000000E-01  4.92184072700182E-01
  4.03630674976271E-01  7.50000000000000E-01  9.22019385316742E-01
  4.00221492678328E-01  7.50000000000000E-01  2.64702902019401E-01
  5.12901365610505E-02  7.50000000000000E-01  7.01840043495193E-01
  3.27016939789356E-01  9.65998785043424E-01  7.67130727819271E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.29066957853823E-01  7.50000000000000E-01  7.81592729981744E-03
  9.03630674976270E-01  7.50000000000000E-01  5.77980614683258E-01
  9.00221492678328E-01  7.50000000000000E-01  2.35297097980599E-01
  5.51290136561051E-01  7.50000000000000E-01  7.98159956504807E-01
  8.27016939789355E-01  5.34001214956577E-01  7.32869272180729E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.70933042146177E-01  2.50000000000000E-01  5.07815927299818E-01
  5.96369325023730E-01  2.50000000000000E-01  7.79806146832575E-02
  5.99778507321672E-01  2.50000000000000E-01  7.35297097980599E-01
  9.48709863438949E-01  2.50000000000000E-01  2.98159956504808E-01
  6.72983060210645E-01  4.65998785043424E-01  2.32869272180729E-01
  8.27016939789355E-01  9.65998785043424E-01  7.32869272180729E-01
  6.72983060210645E-01  3.40012149565764E-02  2.32869272180729E-01
  1.72983060210644E-01  4.65998785043424E-01  2.67130727819270E-01
  3.27016939789356E-01  5.34001214956577E-01  7.67130727819271E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.97050E-03 1.64456E-03 (free atoms)
 -3.09772049281573E-20  1.54886024640786E-20  9.68037654004915E-21
 -2.54008528028032E-03  1.54886024640786E-20  1.93488204435917E-03
 -5.15853040129138E-04  1.54886025161604E-20  1.15907406193169E-03
 -9.20354392958507E-04  1.54886024640786E-20  4.18721185165354E-04
 -1.17532014834071E-03  1.54886025372235E-20  1.30037582750367E-04
 -1.72935048492065E-03 -2.97049511663072E-03 -6.78828052305463E-05
 -3.09772049282186E-20  1.54886024640786E-20  9.68037654004915E-21
  2.54008528028032E-03  1.54886024640786E-20  1.93488204435917E-03
  5.15853040129138E-04  1.54886024492077E-20  1.15907406193169E-03
  9.20354392958507E-04  1.54886024640786E-20  4.18721185165354E-04
  1.17532014834071E-03  1.54886023909338E-20  1.30037582750367E-04
  1.72935048492065E-03  2.97049511663072E-03 -6.78828052305463E-05
 -3.09772049281573E-20  1.54886024640786E-20  9.68037654004915E-21
  2.54008528028032E-03  1.54886024640786E-20 -1.93488204435917E-03
  5.15853040129138E-04  1.54886025012850E-20 -1.15907406193169E-03
  9.20354392958507E-04  1.54886026103683E-20 -4.18721185165354E-04
  1.17532014834071E-03  1.54886023909338E-20 -1.30037582750367E-04
  1.72935048492065E-03 -2.97049511663072E-03  6.78828052305464E-05
 -3.09772049281573E-20  1.54886024640786E-20  9.68037654004915E-21
 -2.54008528028032E-03  1.54886024640786E-20 -1.93488204435917E-03
 -5.15853040129138E-04  1.54886024640786E-20 -1.15907406193169E-03
 -9.20354392958507E-04  1.54886023177889E-20 -4.18721185165354E-04
 -1.17532014834071E-03  1.54886025372235E-20 -1.30037582750367E-04
 -1.72935048492065E-03  2.97049511663072E-03  6.78828052305464E-05
  1.72935048492065E-03  2.97049511663072E-03  6.78828052305464E-05
 -1.72935048492065E-03 -2.97049511663072E-03  6.78828052305464E-05
 -1.72935048492065E-03  2.97049511663072E-03 -6.78828052305463E-05
  1.72935048492065E-03 -2.97049511663072E-03 -6.78828052305463E-05
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  4.89957514951604E-02  0.00000000000000E+00 -1.68978118881896E-02
  9.95029873934034E-03 -5.75178207519270E-28 -1.01224855127995E-02
  1.77527327428541E-02  0.00000000000000E+00 -3.65679749892317E-03
  2.26707718683373E-02 -8.07793566946316E-28 -1.13565093960979E-03
  3.33574731781669E-02  3.28054091525624E-02  5.92837623653846E-04
  1.18329135783152E-30  0.00000000000000E+00  0.00000000000000E+00
 -4.89957514951604E-02  0.00000000000000E+00 -1.68978118881896E-02
 -9.95029873934034E-03  1.64230979705699E-28 -1.01224855127995E-02
 -1.77527327428541E-02  0.00000000000000E+00 -3.65679749892317E-03
 -2.26707718683373E-02  8.07793566946316E-28 -1.13565093960979E-03
 -3.33574731781669E-02 -3.28054091525624E-02  5.92837623653846E-04
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -4.89957514951604E-02  0.00000000000000E+00  1.68978118881896E-02
 -9.95029873934034E-03 -4.10897924006995E-28  1.01224855127995E-02
 -1.77527327428541E-02 -1.61558713389263E-27  3.65679749892317E-03
 -2.26707718683373E-02  8.07793566946316E-28  1.13565093960979E-03
 -3.33574731781669E-02  3.28054091525624E-02 -5.92837623653846E-04
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  4.89957514951604E-02  0.00000000000000E+00  1.68978118881896E-02
  9.95029873934034E-03  0.00000000000000E+00  1.01224855127995E-02
  1.77527327428541E-02  1.61558713389263E-27  3.65679749892317E-03
  2.26707718683373E-02 -8.07793566946316E-28  1.13565093960979E-03
  3.33574731781669E-02 -3.28054091525624E-02 -5.92837623653846E-04
 -3.33574731781669E-02 -3.28054091525624E-02 -5.92837623653846E-04
  3.33574731781669E-02  3.28054091525624E-02 -5.92837623653846E-04
  3.33574731781669E-02 -3.28054091525624E-02  5.92837623653846E-04
 -3.33574731781669E-02  3.28054091525624E-02  5.92837623653846E-04
 Scale of Primitive Cell (acell) [bohr]
  1.92890183158548E+01  1.10437512483683E+01  8.73325169224264E+00
 Real space primitive translations (rprimd) [bohr]
  1.92890183158548E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10437512483683E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73325169224264E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.86038452414835E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92890183158548E+01  1.10437512483683E+01  8.73325169224264E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.31945430210858E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -4.38660178064994E-06  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.53460896499692E-05
 Total energy (etotal) [Ha]= -3.52134644491542E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-6.55256E-04
           Relative     =-1.86081E-06
 fconv : at Broyd/MD step   7, gradients have not converged yet. 
  max grad (force/stress) = 2.9705E-03 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 8/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.21800234527652E+00  2.75909018625480E+00  8.66868299451952E+00
  1.85772087454318E+00  2.75909018625480E+00  3.68693464955032E+00
  1.91825901034566E+00  2.75909018625480E+00  6.67825643019385E+00
  8.65161719999808E+00  2.75909018625480E+00  1.76293177576530E+00
  3.33323008650439E+00  3.67731016703326E-01  2.33175740143109E+00
  9.64135573376644E+00  0.00000000000000E+00  4.36615532239592E+00
  4.42335338848991E+00  8.27727055876439E+00  4.30252767212361E+00
  7.78363485922327E+00  8.27727055876439E+00  8.05308997194622E+00
  7.72309672342079E+00  8.27727055876439E+00  2.31210110779792E+00
  9.89738533768387E-01  8.27727055876439E+00  6.12908709816122E+00
  6.30812564726203E+00  1.06686297283159E+01  6.69791272382702E+00
  0.00000000000000E+00  5.51818037250960E+00  0.00000000000000E+00
  1.40647091222564E+01  8.27727055876439E+00  6.36276502723021E-02
  1.74249905929897E+01  8.27727055876439E+00  5.04537599524153E+00
  1.73644524571872E+01  8.27727055876439E+00  2.05405421459799E+00
  1.06310942675349E+01  8.27727055876439E+00  6.96937886902653E+00
  1.59494813810284E+01  5.88591138921292E+00  6.40055324336072E+00
  9.64135573376644E+00  5.51818037250960E+00  4.36615532239592E+00
  1.48593580790429E+01  2.75909018625480E+00  4.42978297266823E+00
  1.14990766083096E+01  2.75909018625480E+00  6.79220672845601E-01
  1.15596147441121E+01  2.75909018625480E+00  6.42020953699390E+00
  1.82929729337645E+01  2.75909018625480E+00  2.60322354663062E+00
  1.29745858202709E+01  5.15044935580628E+00  2.03439792096481E+00
  1.59494813810284E+01  1.06686297283159E+01  6.40055324336072E+00
  1.29745858202709E+01  3.67731016703326E-01  2.03439792096481E+00
  3.33323008650439E+00  5.15044935580628E+00  2.33175740143109E+00
  6.30812564726203E+00  5.88591138921292E+00  6.69791272382702E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.70605218257935E-01  2.50000000000000E-01  9.92713537932797E-01
  9.63412680665320E-02  2.50000000000000E-01  4.22217532051416E-01
  9.94807713414949E-02  2.50000000000000E-01  7.64775407317527E-01
  4.48672232355142E-01  2.50000000000000E-01  2.01886058281350E-01
  1.72861067392762E-01  3.33199525821305E-02  2.67026391556720E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.29394781742064E-01  7.50000000000000E-01  4.92713537932798E-01
  4.03658731933468E-01  7.50000000000000E-01  9.22217532051415E-01
  4.00519228658505E-01  7.50000000000000E-01  2.64775407317526E-01
  5.13277676448591E-02  7.50000000000000E-01  7.01886058281351E-01
  3.27138932607236E-01  9.66680047417870E-01  7.67026391556721E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.29394781742066E-01  7.50000000000000E-01  7.28646206720226E-03
  9.03658731933466E-01  7.50000000000000E-01  5.77782467948585E-01
  9.00519228658506E-01  7.50000000000000E-01  2.35224592682474E-01
  5.51327767644860E-01  7.50000000000000E-01  7.98113941718649E-01
  8.27138932607235E-01  5.33319952582131E-01  7.32973608443279E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.70605218257934E-01  2.50000000000000E-01  5.07286462067204E-01
  5.96341268066532E-01  2.50000000000000E-01  7.77824679485842E-02
  5.99480771341494E-01  2.50000000000000E-01  7.35224592682473E-01
  9.48672232355140E-01  2.50000000000000E-01  2.98113941718650E-01
  6.72861067392765E-01  4.66680047417870E-01  2.32973608443279E-01
  8.27138932607235E-01  9.66680047417870E-01  7.32973608443279E-01
  6.72861067392765E-01  3.33199525821305E-02  2.32973608443279E-01
  1.72861067392762E-01  4.66680047417870E-01  2.67026391556720E-01
  3.27138932607236E-01  5.33319952582131E-01  7.67026391556721E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92827114675329E+01  1.10363607450192E+01  8.73231064479183E+00
 Real space primitive translations (rprimd) [bohr]
  1.92827114675329E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10363607450192E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73231064479183E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85833141044403E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92827114675329E+01  1.10363607450192E+01  8.73231064479183E+00
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -3.8857805861880479E-016   0.0000000000000000        4.4408920985006262E-016
   5.4123372450476381E-016   0.0000000000000000       -7.2164496600635175E-016
  -4.0245584642661925E-016   0.0000000000000000       -5.5511151231257827E-016
  -1.4432899320127035E-015   0.0000000000000000        5.5511151231257827E-016
   1.4710455076283324E-015  -1.5265566588595902E-016   1.1102230246251565E-015
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   8.8817841970012523E-016   0.0000000000000000       -7.2164496600635175E-016
  -5.5511151231257827E-016   0.0000000000000000        4.4408920985006262E-016
   1.6653345369377348E-016   0.0000000000000000        5.5511151231257827E-016
   2.4980018054066022E-016   0.0000000000000000       -4.4408920985006262E-016
  -2.7755575615628914E-016   1.1102230246251565E-016  -4.4408920985006262E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -6.6613381477509392E-016   0.0000000000000000        6.1062266354383610E-016
   1.2212453270876722E-015   0.0000000000000000       -6.6613381477509392E-016
  -3.3306690738754696E-016   0.0000000000000000       -4.1633363423443370E-016
  -8.8817841970012523E-016   0.0000000000000000        5.5511151231257827E-016
   9.9920072216264089E-016  -2.2204460492503131E-016   6.6613381477509392E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   5.5511151231257827E-016   0.0000000000000000       -9.9920072216264089E-016
   1.1102230246251565E-016   0.0000000000000000        4.8572257327350599E-016
   2.2204460492503131E-016   0.0000000000000000        5.5511151231257827E-016
   7.7715611723760958E-016   0.0000000000000000       -4.9960036108132044E-016
  -8.8817841970012523E-016  -3.8857805861880479E-016   5.5511151231257827E-017
   9.9920072216264089E-016   1.1102230246251565E-016   6.6613381477509392E-016
  -8.8817841970012523E-016  -1.5265566588595902E-016   5.5511151231257827E-017
   1.4710455076283324E-015  -3.8857805861880479E-016   1.1102230246251565E-015
  -2.7755575615628914E-016  -2.2204460492503131E-016  -4.4408920985006262E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14168

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.8833E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5609E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.13337593360    -3.521E+02 1.040E+02 2.863E+00
 scprqt: <Vxc>= -3.9261899E-01 hartree

Simple mixing update:
  residual square of the potential :   1.8018867561981238

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.8456E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.6177E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.13340562730    -2.969E-05 3.333E-01 2.658E+00
 scprqt: <Vxc>= -3.9316256E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.518      0.482

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8659E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5777E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.13484404670    -1.438E-03 4.694E-01 1.858E-01
 scprqt: <Vxc>= -3.9283698E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.569      0.251      0.181

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8644E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5863E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.13492300358    -7.896E-05 2.922E-03 4.194E-03
 scprqt: <Vxc>= -3.9288934E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.711      0.193      0.603E-01  0.358E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8646E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5861E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13492472149    -1.718E-06 4.887E-03 1.548E-03
 scprqt: <Vxc>= -3.9288835E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.544      0.405      0.405E-01  0.103E-01  0.731E-03

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5856E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13492568661    -9.651E-07 3.282E-04 4.535E-05
 scprqt: <Vxc>= -3.9288567E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.736      0.177      0.875E-01  0.633E-04  0.133E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5859E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13492572486    -3.825E-08 2.862E-04 4.252E-06
 scprqt: <Vxc>= -3.9288790E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.748      0.257      0.534E-02 -0.750E-02 -0.255E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5858E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13492572665    -1.785E-09 2.380E-05 1.899E-06
 scprqt: <Vxc>= -3.9288777E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.490      0.484      0.503E-01 -0.125E-01 -0.102E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5859E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13492572809    -1.441E-09 2.530E-05 4.551E-08
 scprqt: <Vxc>= -3.9288774E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.798      0.140      0.845E-01 -0.144E-01 -0.467E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5859E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13492572807     1.592E-11 3.102E-06 3.203E-08
 scprqt: <Vxc>= -3.9288781E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.836      0.202     -0.513E-01  0.894E-02  0.477E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5858E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13492572809    -1.074E-11 3.054E-06 7.934E-09
 scprqt: <Vxc>= -3.9288775E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.945      0.205     -0.111     -0.946E-02 -0.246E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5859E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13492572806     2.694E-11 1.164E-06 1.996E-09
 scprqt: <Vxc>= -3.9288778E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.544      0.518      0.567E-01 -0.973E-01 -0.761E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5859E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13492572806    -5.002E-12 1.372E-06 9.392E-10
 scprqt: <Vxc>= -3.9288777E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03      0.410     -0.329     -0.151      0.348E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5859E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13492572805     1.569E-11 1.093E-06 8.496E-10
 scprqt: <Vxc>= -3.9288778E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.688      0.626     -0.348E-01 -0.136     -0.135

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8645E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5859E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13492572804     4.434E-12 1.285E-06 4.875E-11
 scprqt: <Vxc>= -3.9288777E-01 hartree

 At SCF step   15       vres2   =  4.88E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.13450561E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -2.03846206E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.70978316E-06  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM8_DEN
ioarr: data written to disk file telast_1o_DS2_TIM8_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.21800234527652E+00  2.75909018625480E+00  8.66868299451952E+00
  1.85772087454319E+00  2.75909018625480E+00  3.68693464955031E+00
  1.91825901034565E+00  2.75909018625480E+00  6.67825643019384E+00
  8.65161719999805E+00  2.75909018625480E+00  1.76293177576530E+00
  3.33323008650442E+00  3.67731016703325E-01  2.33175740143110E+00
  9.64135573376644E+00  0.00000000000000E+00  4.36615532239592E+00
  4.42335338848993E+00  8.27727055876439E+00  4.30252767212361E+00
  7.78363485922326E+00  8.27727055876439E+00  8.05308997194622E+00
  7.72309672342079E+00  8.27727055876439E+00  2.31210110779793E+00
  9.89738533768392E-01  8.27727055876439E+00  6.12908709816122E+00
  6.30812564726202E+00  1.06686297283159E+01  6.69791272382702E+00
  0.00000000000000E+00  5.51818037250960E+00  0.00000000000000E+00
  1.40647091222564E+01  8.27727055876439E+00  6.36276502723075E-02
  1.74249905929897E+01  8.27727055876439E+00  5.04537599524152E+00
  1.73644524571872E+01  8.27727055876439E+00  2.05405421459799E+00
  1.06310942675348E+01  8.27727055876439E+00  6.96937886902653E+00
  1.59494813810285E+01  5.88591138921292E+00  6.40055324336073E+00
  9.64135573376644E+00  5.51818037250960E+00  4.36615532239592E+00
  1.48593580790430E+01  2.75909018625480E+00  4.42978297266822E+00
  1.14990766083096E+01  2.75909018625480E+00  6.79220672845605E-01
  1.15596147441121E+01  2.75909018625480E+00  6.42020953699390E+00
  1.82929729337645E+01  2.75909018625480E+00  2.60322354663062E+00
  1.29745858202709E+01  5.15044935580627E+00  2.03439792096481E+00
  1.59494813810285E+01  1.06686297283159E+01  6.40055324336073E+00
  1.29745858202709E+01  3.67731016703325E-01  2.03439792096481E+00
  3.33323008650442E+00  5.15044935580627E+00  2.33175740143110E+00
  6.30812564726202E+00  5.88591138921292E+00  6.69791272382702E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.70605218257935E-01  2.50000000000000E-01  9.92713537932797E-01
  9.63412680665325E-02  2.50000000000000E-01  4.22217532051415E-01
  9.94807713414945E-02  2.50000000000000E-01  7.64775407317526E-01
  4.48672232355141E-01  2.50000000000000E-01  2.01886058281350E-01
  1.72861067392764E-01  3.33199525821304E-02  2.67026391556721E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.29394781742065E-01  7.50000000000000E-01  4.92713537932797E-01
  4.03658731933468E-01  7.50000000000000E-01  9.22217532051415E-01
  4.00519228658505E-01  7.50000000000000E-01  2.64775407317526E-01
  5.13277676448593E-02  7.50000000000000E-01  7.01886058281350E-01
  3.27138932607236E-01  9.66680047417870E-01  7.67026391556721E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.29394781742065E-01  7.50000000000000E-01  7.28646206720287E-03
  9.03658731933467E-01  7.50000000000000E-01  5.77782467948585E-01
  9.00519228658505E-01  7.50000000000000E-01  2.35224592682474E-01
  5.51327767644859E-01  7.50000000000000E-01  7.98113941718650E-01
  8.27138932607236E-01  5.33319952582130E-01  7.32973608443279E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.70605218257935E-01  2.50000000000000E-01  5.07286462067203E-01
  5.96341268066533E-01  2.50000000000000E-01  7.77824679485847E-02
  5.99480771341494E-01  2.50000000000000E-01  7.35224592682474E-01
  9.48672232355141E-01  2.50000000000000E-01  2.98113941718650E-01
  6.72861067392764E-01  4.66680047417870E-01  2.32973608443279E-01
  8.27138932607236E-01  9.66680047417870E-01  7.32973608443279E-01
  6.72861067392764E-01  3.33199525821304E-02  2.32973608443279E-01
  1.72861067392764E-01  4.66680047417870E-01  2.67026391556721E-01
  3.27138932607236E-01  5.33319952582130E-01  7.67026391556721E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.25061E-03 1.34902E-03 (free atoms)
 -3.09772049281573E-20 -7.74430123203932E-21  1.16164518480590E-20
 -1.16671470555124E-03 -7.74430123203932E-21  1.93693713385785E-03
 -6.28365016208180E-04 -7.74430123203932E-21  1.25481016359950E-04
 -2.53912638912531E-04 -7.74430123203932E-21  7.18991455355671E-04
 -1.35695748474623E-03 -7.74430093926398E-21  1.44180678403914E-04
 -2.25060667518589E-03 -1.86786621110729E-03  4.48577728694239E-04
 -3.09772049281573E-20 -7.74430123203932E-21  1.16164518480590E-20
  1.16671470555124E-03 -7.74430123203932E-21  1.93693713385785E-03
  6.28365016208180E-04 -7.74430119176126E-21  1.25481016359950E-04
  2.53912638912531E-04 -7.74430121745773E-21  7.18991455355671E-04
  1.35695748474623E-03 -7.74430152481466E-21  1.44180678403914E-04
  2.25060667518590E-03  1.86786621110729E-03  4.48577728694239E-04
 -3.09772049281573E-20 -7.74430123203932E-21  1.16164518480590E-20
  1.16671470555124E-03 -7.74430123203932E-21 -1.93693713385785E-03
  6.28365016208181E-04 -7.74430117601816E-21 -1.25481016359950E-04
  2.53912638912531E-04 -7.74430111265260E-21 -7.18991455355671E-04
  1.35695748474623E-03 -7.74430123203932E-21 -1.44180678403914E-04
  2.25060667518589E-03 -1.86786621110729E-03 -4.48577728694239E-04
 -3.09772049281573E-20 -7.74430123203932E-21  1.16164518480590E-20
 -1.16671470555124E-03 -7.74430123203932E-21 -1.93693713385785E-03
 -6.28365016208180E-04 -7.74430123203932E-21 -1.25481016359950E-04
 -2.53912638912531E-04 -7.74430123203932E-21 -7.18991455355671E-04
 -1.35695748474623E-03 -7.74430123203932E-21 -1.44180678403914E-04
 -2.25060667518589E-03  1.86786621110729E-03 -4.48577728694238E-04
  2.25060667518589E-03  1.86786621110729E-03 -4.48577728694239E-04
 -2.25060667518589E-03 -1.86786621110729E-03 -4.48577728694238E-04
 -2.25060667518590E-03  1.86786621110729E-03  4.48577728694239E-04
  2.25060667518590E-03 -1.86786621110729E-03  4.48577728694239E-04
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.24974230320722E-02  0.00000000000000E+00 -1.69139367522795E-02
  1.21165813038340E-02  0.00000000000000E+00 -1.09573921487929E-03
  4.89612415411019E-03  0.00000000000000E+00 -6.27845673911670E-03
  2.61658196520708E-02 -3.23117426778526E-27 -1.25903047279981E-03
  4.33977991445131E-02  2.06144453292122E-02 -3.91712007529324E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.24974230320722E-02  0.00000000000000E+00 -1.69139367522795E-02
 -1.21165813038340E-02 -4.44523120092040E-28 -1.09573921487929E-03
 -4.89612415411019E-03 -1.60927624665086E-28 -6.27845673911670E-03
 -2.61658196520708E-02  3.23117426778526E-27 -1.25903047279981E-03
 -4.33977991445131E-02 -2.06144453292122E-02 -3.91712007529324E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.24974230320722E-02  0.00000000000000E+00  1.69139367522795E-02
 -1.21165813038340E-02 -6.18269734466968E-28  1.09573921487929E-03
 -4.89612415411019E-03 -1.31759492694539E-27  6.27845673911670E-03
 -2.61658196520708E-02  0.00000000000000E+00  1.25903047279981E-03
 -4.33977991445131E-02  2.06144453292122E-02  3.91712007529324E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.24974230320722E-02  0.00000000000000E+00  1.69139367522795E-02
  1.21165813038340E-02  0.00000000000000E+00  1.09573921487929E-03
  4.89612415411019E-03  0.00000000000000E+00  6.27845673911670E-03
  2.61658196520708E-02  0.00000000000000E+00  1.25903047279981E-03
  4.33977991445131E-02 -2.06144453292122E-02  3.91712007529324E-03
 -4.33977991445131E-02 -2.06144453292122E-02  3.91712007529324E-03
  4.33977991445131E-02  2.06144453292122E-02  3.91712007529324E-03
  4.33977991445131E-02 -2.06144453292122E-02 -3.91712007529324E-03
 -4.33977991445131E-02  2.06144453292122E-02 -3.91712007529324E-03
 Scale of Primitive Cell (acell) [bohr]
  1.92827114675329E+01  1.10363607450192E+01  8.73231064479183E+00
 Real space primitive translations (rprimd) [bohr]
  1.92827114675329E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10363607450192E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73231064479183E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85833141044403E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92827114675329E+01  1.10363607450192E+01  8.73231064479183E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.13450561121213E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -2.03846205616177E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  1.70978315710245E-06
 Total energy (etotal) [Ha]= -3.52134925728043E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.81237E-04
           Relative     =-7.98662E-07
 fconv : at Broyd/MD step   8, gradients have not converged yet. 
  max grad (force/stress) = 2.2506E-03 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: ( 9/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.20139924653216E+00  2.75740277443060E+00  8.67887109159223E+00
  1.85405235500010E+00  2.75740277443060E+00  3.68897249815045E+00
  1.90657577073579E+00  2.75740277443060E+00  6.68016772634367E+00
  8.63966186312872E+00  2.75740277443060E+00  1.76379400652430E+00
  3.32231415717483E+00  3.52921205645617E-01  2.33121455417760E+00
  9.63167716844903E+00  0.00000000000000E+00  4.36592985610525E+00
  4.43027792191690E+00  8.27220832329179E+00  4.31294123548697E+00
  7.77762481344894E+00  8.27220832329179E+00  8.05490235425571E+00
  7.72510139771324E+00  8.27220832329179E+00  2.31423787023843E+00
  9.92015305320283E-01  8.27220832329179E+00  6.12972386262954E+00
  6.30936301127422E+00  1.06766898920768E+01  6.69714441028283E+00
  0.00000000000000E+00  5.51480554886120E+00  0.00000000000000E+00
  1.40619550903659E+01  8.27220832329179E+00  5.29886206182868E-02
  1.74093019818980E+01  8.27220832329179E+00  5.04288721406004E+00
  1.73567785661623E+01  8.27220832329179E+00  2.05169198586682E+00
  1.06236924737693E+01  8.27220832329179E+00  6.96806570568622E+00
  1.59410401797233E+01  5.86772675450681E+00  6.40064515803294E+00
  9.63167716844903E+00  5.51480554886120E+00  4.36592985610525E+00
  1.48330764149812E+01  2.75740277443060E+00  4.41891847672352E+00
  1.14857295234491E+01  2.75740277443060E+00  6.76957357954798E-01
  1.15382529391848E+01  2.75740277443060E+00  6.41762184197208E+00
  1.82713390315778E+01  2.75740277443060E+00  2.60213584958095E+00
  1.29539913256238E+01  5.16188434321558E+00  2.03471530192767E+00
  1.59410401797233E+01  1.06766898920768E+01  6.40064515803294E+00
  1.29539913256238E+01  3.52921205645617E-01  2.03471530192767E+00
  3.32231415717483E+00  5.16188434321558E+00  2.33121455417760E+00
  6.30936301127422E+00  5.86772675450681E+00  6.69714441028283E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.70015240106398E-01  2.50000000000000E-01  9.93931576735689E-01
  9.62476380060530E-02  2.50000000000000E-01  4.22472717122545E-01
  9.89742356077534E-02  2.50000000000000E-01  7.65033789652189E-01
  4.48502462864416E-01  2.50000000000000E-01  2.01995229499375E-01
  1.72468101820205E-01  3.19976110235197E-02  2.66978012818697E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.29984759893603E-01  7.50000000000000E-01  4.93931576735688E-01
  4.03752361993947E-01  7.50000000000000E-01  9.22472717122545E-01
  4.01025764392246E-01  7.50000000000000E-01  2.65033789652190E-01
  5.14975371355820E-02  7.50000000000000E-01  7.01995229499373E-01
  3.27531898179796E-01  9.68002388976480E-01  7.66978012818694E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.29984759893601E-01  7.50000000000000E-01  6.06842326431199E-03
  9.03752361993949E-01  7.50000000000000E-01  5.77527282877454E-01
  9.01025764392247E-01  7.50000000000000E-01  2.34966210347810E-01
  5.51497537135581E-01  7.50000000000000E-01  7.98004770500627E-01
  8.27531898179799E-01  5.31997611023520E-01  7.33021987181307E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.70015240106399E-01  2.50000000000000E-01  5.06068423264309E-01
  5.96247638006051E-01  2.50000000000000E-01  7.75272828774552E-02
  5.98974235607752E-01  2.50000000000000E-01  7.34966210347811E-01
  9.48502462864418E-01  2.50000000000000E-01  2.98004770500625E-01
  6.72468101820201E-01  4.68002388976480E-01  2.33021987181305E-01
  8.27531898179799E-01  9.68002388976480E-01  7.33021987181307E-01
  6.72468101820201E-01  3.19976110235197E-02  2.33021987181305E-01
  1.72468101820205E-01  4.68002388976480E-01  2.66978012818697E-01
  3.27531898179796E-01  5.31997611023520E-01  7.66978012818694E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92633543368981E+01  1.10296110977224E+01  8.73185971221050E+00
 Real space primitive translations (rprimd) [bohr]
  1.92633543368981E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10296110977224E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73185971221050E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85523471617835E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92633543368981E+01  1.10296110977224E+01  8.73185971221050E+00
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   0.0000000000000000        0.0000000000000000       -3.3306690738754696E-016
  -1.0408340855860843E-015   0.0000000000000000        4.4408920985006262E-016
  -3.8857805861880479E-016   0.0000000000000000        7.7715611723760958E-016
   1.4988010832439613E-015   0.0000000000000000       -1.0547118733938987E-015
  -2.2759572004815709E-015  -6.2450045135165055E-017  -1.9984014443252818E-015
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -1.4155343563970746E-015   0.0000000000000000        8.8817841970012523E-016
   1.0547118733938987E-015   0.0000000000000000       -2.2204460492503131E-016
   8.8817841970012523E-016   0.0000000000000000       -6.6613381477509392E-016
   2.5673907444456745E-016   0.0000000000000000        1.1102230246251565E-015
   1.4988010832439613E-015   0.0000000000000000        6.6613381477509392E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   7.7715611723760958E-016   0.0000000000000000       -9.8445557261683803E-016
  -1.5543122344752192E-015   0.0000000000000000        4.4408920985006262E-016
  -4.4408920985006262E-016   0.0000000000000000        6.6613381477509392E-016
   7.7715611723760958E-016   0.0000000000000000       -1.1102230246251565E-015
  -2.1094237467877974E-015   0.0000000000000000       -1.4432899320127035E-015
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -7.7715611723760958E-016   0.0000000000000000        1.5543122344752192E-015
   7.7715611723760958E-016   0.0000000000000000       -3.4694469519536142E-016
   7.7715611723760958E-016   0.0000000000000000       -7.7715611723760958E-016
  -4.4408920985006262E-016   0.0000000000000000        1.0547118733938987E-015
   1.3322676295501878E-015   1.1102230246251565E-016   1.1102230246251565E-016
  -2.1094237467877974E-015   0.0000000000000000       -1.4432899320127035E-015
   1.3322676295501878E-015  -6.2450045135165055E-017   1.1102230246251565E-016
  -2.2759572004815709E-015   1.1102230246251565E-016  -1.9984014443252818E-015
   1.4988010832439613E-015   0.0000000000000000        6.6613381477509392E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14383

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.9112E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5167E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.12967755356    -3.521E+02 1.043E+01 1.125E+01
 scprqt: <Vxc>= -3.9285033E-01 hartree

Simple mixing update:
  residual square of the potential :   6.8869666498107014

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.8510E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5909E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.13031592281    -6.384E-04 1.778E-01 8.530E+00
 scprqt: <Vxc>= -3.9376023E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.540      0.460

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8836E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5217E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.13493450027    -4.619E-03 2.568E-01 6.805E-01
 scprqt: <Vxc>= -3.9316963E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.554      0.268      0.179

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8806E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5423E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.13525554243    -3.210E-04 1.870E-03 1.347E-02
 scprqt: <Vxc>= -3.9329537E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.727      0.181      0.597E-01  0.325E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8810E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5408E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13526119791    -5.655E-06 4.852E-03 5.128E-03
 scprqt: <Vxc>= -3.9328786E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.523      0.418      0.463E-01  0.112E-01  0.109E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5401E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13526428696    -3.089E-06 2.176E-04 1.466E-04
 scprqt: <Vxc>= -3.9328372E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.748      0.168      0.822E-01  0.235E-02  0.138E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5405E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13526442118    -1.342E-07 2.367E-04 1.420E-05
 scprqt: <Vxc>= -3.9328782E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.771      0.244     -0.372E-02 -0.105E-01 -0.122E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8810E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13526443320    -1.202E-08 2.914E-05 6.168E-06
 scprqt: <Vxc>= -3.9328740E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.530      0.481      0.244E-01 -0.201E-01 -0.136E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13526444003    -6.829E-09 2.578E-05 6.178E-07
 scprqt: <Vxc>= -3.9328727E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.151     -0.938E-01 -0.636E-01 -0.460E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13526444212    -2.089E-09 3.029E-06 3.884E-07
 scprqt: <Vxc>= -3.9328751E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.25      0.182     -0.295     -0.156     -0.540E-03

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8812E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13526444288    -7.654E-10 3.004E-06 3.371E-07
 scprqt: <Vxc>= -3.9328728E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.542      0.712     -0.315E-01 -0.148     -0.831E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13526444330    -4.133E-10 1.875E-06 7.654E-08
 scprqt: <Vxc>= -3.9328739E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.561      0.361      0.231     -0.868E-01 -0.396E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13526444336    -6.077E-11 2.769E-06 2.860E-08
 scprqt: <Vxc>= -3.9328737E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.810      0.327     -0.394E-01 -0.269E-01 -0.711E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13526444336    -2.842E-13 1.732E-06 1.407E-08
 scprqt: <Vxc>= -3.9328741E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.434      0.580      0.117     -0.293E-01 -0.695E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13526444336     1.876E-12 2.563E-06 9.816E-10
 scprqt: <Vxc>= -3.9328738E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.729      0.250      0.140     -0.338E-01 -0.396E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.13526444333     2.279E-11 1.603E-06 1.980E-09
 scprqt: <Vxc>= -3.9328739E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.616      0.415      0.431E-01  0.185E-01 -0.695E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8811E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.13526444332     1.609E-11 2.376E-06 5.120E-11
 scprqt: <Vxc>= -3.9328738E-01 hartree

 At SCF step   17       vres2   =  5.12E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.08089772E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -3.03842854E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -7.77777001E-06  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM9_DEN
ioarr: data written to disk file telast_1o_DS2_TIM9_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.20139924653216E+00  2.75740277443060E+00  8.67887109159223E+00
  1.85405235500008E+00  2.75740277443060E+00  3.68897249815046E+00
  1.90657577073578E+00  2.75740277443060E+00  6.68016772634368E+00
  8.63966186312875E+00  2.75740277443060E+00  1.76379400652429E+00
  3.32231415717478E+00  3.52921205645616E-01  2.33121455417758E+00
  9.63167716844903E+00  0.00000000000000E+00  4.36592985610525E+00
  4.43027792191687E+00  8.27220832329179E+00  4.31294123548697E+00
  7.77762481344896E+00  8.27220832329179E+00  8.05490235425571E+00
  7.72510139771325E+00  8.27220832329179E+00  2.31423787023843E+00
  9.92015305320288E-01  8.27220832329179E+00  6.12972386262955E+00
  6.30936301127425E+00  1.06766898920768E+01  6.69714441028283E+00
  0.00000000000000E+00  5.51480554886120E+00  0.00000000000000E+00
  1.40619550903659E+01  8.27220832329179E+00  5.29886206182782E-02
  1.74093019818980E+01  8.27220832329179E+00  5.04288721406005E+00
  1.73567785661623E+01  8.27220832329179E+00  2.05169198586683E+00
  1.06236924737693E+01  8.27220832329179E+00  6.96806570568621E+00
  1.59410401797233E+01  5.86772675450681E+00  6.40064515803292E+00
  9.63167716844903E+00  5.51480554886120E+00  4.36592985610525E+00
  1.48330764149812E+01  2.75740277443060E+00  4.41891847672353E+00
  1.14857295234491E+01  2.75740277443060E+00  6.76957357954795E-01
  1.15382529391848E+01  2.75740277443060E+00  6.41762184197208E+00
  1.82713390315778E+01  2.75740277443060E+00  2.60213584958096E+00
  1.29539913256238E+01  5.16188434321558E+00  2.03471530192767E+00
  1.59410401797233E+01  1.06766898920768E+01  6.40064515803292E+00
  1.29539913256238E+01  3.52921205645616E-01  2.03471530192767E+00
  3.32231415717478E+00  5.16188434321558E+00  2.33121455417758E+00
  6.30936301127425E+00  5.86772675450681E+00  6.69714441028283E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.70015240106398E-01  2.50000000000000E-01  9.93931576735689E-01
  9.62476380060520E-02  2.50000000000000E-01  4.22472717122545E-01
  9.89742356077530E-02  2.50000000000000E-01  7.65033789652189E-01
  4.48502462864418E-01  2.50000000000000E-01  2.01995229499374E-01
  1.72468101820203E-01  3.19976110235196E-02  2.66978012818695E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.29984759893602E-01  7.50000000000000E-01  4.93931576735689E-01
  4.03752361993948E-01  7.50000000000000E-01  9.22472717122545E-01
  4.01025764392247E-01  7.50000000000000E-01  2.65033789652189E-01
  5.14975371355823E-02  7.50000000000000E-01  7.01995229499374E-01
  3.27531898179797E-01  9.68002388976480E-01  7.66978012818695E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.29984759893602E-01  7.50000000000000E-01  6.06842326431100E-03
  9.03752361993948E-01  7.50000000000000E-01  5.77527282877455E-01
  9.01025764392247E-01  7.50000000000000E-01  2.34966210347811E-01
  5.51497537135582E-01  7.50000000000000E-01  7.98004770500626E-01
  8.27531898179797E-01  5.31997611023520E-01  7.33021987181305E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.70015240106398E-01  2.50000000000000E-01  5.06068423264311E-01
  5.96247638006052E-01  2.50000000000000E-01  7.75272828774548E-02
  5.98974235607753E-01  2.50000000000000E-01  7.34966210347811E-01
  9.48502462864418E-01  2.50000000000000E-01  2.98004770500626E-01
  6.72468101820203E-01  4.68002388976480E-01  2.33021987181305E-01
  8.27531898179797E-01  9.68002388976480E-01  7.33021987181305E-01
  6.72468101820203E-01  3.19976110235196E-02  2.33021987181305E-01
  1.72468101820203E-01  4.68002388976480E-01  2.66978012818695E-01
  3.27531898179797E-01  5.31997611023520E-01  7.66978012818695E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.51764E-03 1.26692E-03 (free atoms)
 -4.64658073922359E-20  1.21004706750614E-22  3.09772049281573E-20
  7.31425588697684E-04  1.21004706750614E-22  1.49746886008179E-03
 -1.00953138745832E-03  1.21004706750614E-22 -6.96632024110787E-04
  6.98157760718262E-04  1.21004706750614E-22  3.84827415418865E-04
 -1.20058725950560E-03  1.21004706750614E-22  5.18360121231964E-04
 -2.51763541702134E-03  1.16774276713597E-05  1.25830347302937E-03
 -4.64658073922359E-20  1.21004706750614E-22  3.09772049281573E-20
 -7.31425588697684E-04  1.21004706750614E-22  1.49746886008179E-03
  1.00953138745832E-03  1.21004706750614E-22 -6.96632024110787E-04
 -6.98157760718262E-04  1.21004955075332E-22  3.84827415418865E-04
  1.20058725950560E-03  1.21004391409692E-22  5.18360121231964E-04
  2.51763541702134E-03 -1.16774276713597E-05  1.25830347302937E-03
 -4.64658073922359E-20  1.21004706750614E-22  3.09772049281573E-20
 -7.31425588697684E-04  1.21004706750614E-22 -1.49746886008179E-03
  1.00953138745832E-03  1.21004706750614E-22  6.96632024110787E-04
 -6.98157760718262E-04  1.21004856982777E-22 -3.84827415418865E-04
  1.20058725950560E-03  1.21004837993661E-22 -5.18360121231964E-04
  2.51763541702134E-03  1.16774276713597E-05 -1.25830347302937E-03
 -4.64658073922359E-20  1.21004706750614E-22  3.09772049281573E-20
  7.31425588697684E-04  1.21004706750614E-22 -1.49746886008179E-03
 -1.00953138745832E-03  1.21004706750614E-22  6.96632024110787E-04
  6.98157760718262E-04  1.21004706750614E-22 -3.84827415418865E-04
 -1.20058725950560E-03  1.21004706750614E-22 -5.18360121231964E-04
 -2.51763541702134E-03 -1.16774276713597E-05 -1.25830347302937E-03
  2.51763541702134E-03 -1.16774276713597E-05 -1.25830347302937E-03
 -2.51763541702134E-03  1.16774276713597E-05 -1.25830347302937E-03
 -2.51763541702134E-03 -1.16774276713597E-05  1.25830347302937E-03
  2.51763541702134E-03  1.16774276713597E-05  1.25830347302937E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -1.40897102861577E-02  0.00000000000000E+00 -1.30756880096380E-02
  1.94469608308299E-02  0.00000000000000E+00  6.08289310556864E-03
 -1.34488603277712E-02  0.00000000000000E+00 -3.36025900485008E-03
  2.31273377922218E-02  0.00000000000000E+00 -4.52624785900194E-03
  4.84981031292062E-02 -1.28797485836880E-04 -1.09873294018797E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  1.40897102861577E-02  0.00000000000000E+00 -1.30756880096380E-02
 -1.94469608308299E-02  0.00000000000000E+00  6.08289310556864E-03
  1.34488603277712E-02 -2.73892506292735E-27 -3.36025900485008E-03
 -2.31273377922218E-02  3.47808773111944E-27 -4.52624785900194E-03
 -4.84981031292062E-02  1.28797485836880E-04 -1.09873294018797E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  1.40897102861577E-02  0.00000000000000E+00  1.30756880096380E-02
 -1.94469608308299E-02  0.00000000000000E+00 -6.08289310556864E-03
  1.34488603277712E-02 -1.65700233141674E-27  3.36025900485008E-03
 -2.31273377922218E-02 -1.44755976108056E-27  4.52624785900194E-03
 -4.84981031292062E-02 -1.28797485836880E-04  1.09873294018797E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -1.40897102861577E-02  0.00000000000000E+00  1.30756880096380E-02
  1.94469608308299E-02  0.00000000000000E+00 -6.08289310556864E-03
 -1.34488603277712E-02  0.00000000000000E+00  3.36025900485008E-03
  2.31273377922218E-02  0.00000000000000E+00  4.52624785900194E-03
  4.84981031292062E-02  1.28797485836880E-04  1.09873294018797E-02
 -4.84981031292062E-02  1.28797485836880E-04  1.09873294018797E-02
  4.84981031292062E-02 -1.28797485836880E-04  1.09873294018797E-02
  4.84981031292062E-02  1.28797485836880E-04 -1.09873294018797E-02
 -4.84981031292062E-02 -1.28797485836880E-04 -1.09873294018797E-02
 Scale of Primitive Cell (acell) [bohr]
  1.92633543368981E+01  1.10296110977224E+01  8.73185971221050E+00
 Real space primitive translations (rprimd) [bohr]
  1.92633543368981E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10296110977224E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73185971221050E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85523471617835E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92633543368981E+01  1.10296110977224E+01  8.73185971221050E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.08089771567906E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -3.03842853836400E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -7.77777000684696E-06
 Total energy (etotal) [Ha]= -3.52135264443317E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-3.38715E-04
           Relative     =-9.61890E-07
 fconv : at Broyd/MD step   9, gradients have not converged yet. 
  max grad (force/stress) = 3.0384E-03 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (10/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.19092649959968E+00  2.75801389949678E+00  8.68572663543907E+00
  1.84998669109200E+00  2.75801389949678E+00  3.68970724321605E+00
  1.90090288856406E+00  2.75801389949678E+00  6.68147792281346E+00
  8.62764955489280E+00  2.75801389949678E+00  1.76500140254944E+00
  3.31200921710624E+00  3.45342770392456E-01  2.33250602577939E+00
  9.62207741130955E+00  0.00000000000000E+00  4.36579221488879E+00
  4.43115091170986E+00  8.27404169849035E+00  4.31993442055028E+00
  7.77209072021755E+00  8.27404169849035E+00  8.05549945810484E+00
  7.72117452274548E+00  8.27404169849035E+00  2.31568570792466E+00
  9.94427856416752E-01  8.27404169849035E+00  6.13079361743823E+00
  6.31006819420331E+00  1.06867128275947E+01  6.69829824066818E+00
  0.00000000000000E+00  5.51602779899357E+00  0.00000000000000E+00
  1.40532283230194E+01  8.27404169849035E+00  4.58577943385150E-02
  1.73941681315271E+01  8.27404169849035E+00  5.04187718656153E+00
  1.73432519340551E+01  8.27404169849035E+00  2.05010650696413E+00
  1.06165052677263E+01  8.27404169849035E+00  6.96658302722814E+00
  1.59321456055129E+01  5.86137056938603E+00  6.39907840399819E+00
  9.62207741130955E+00  5.51602779899357E+00  4.36579221488879E+00
  1.48130039109092E+01  2.75801389949678E+00  4.41165000922730E+00
  1.14720641024016E+01  2.75801389949678E+00  6.76084971672741E-01
  1.15229802998736E+01  2.75801389949678E+00  6.41589872185291E+00
  1.82497269662023E+01  2.75801389949678E+00  2.60079081233936E+00
  1.29340866284158E+01  5.17068502860111E+00  2.03328618910940E+00
  1.59321456055129E+01  1.06867128275947E+01  6.39907840399819E+00
  1.29340866284158E+01  3.45342770392456E-01  2.03328618910940E+00
  3.31200921710624E+00  5.17068502860111E+00  2.33250602577939E+00
  6.31006819420331E+00  5.86137056938603E+00  6.69829824066818E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.69740424947028E-01  2.50000000000000E-01  9.94748055784455E-01
  9.61323949086906E-02  2.50000000000000E-01  4.22570184471094E-01
  9.87781955656368E-02  2.50000000000000E-01  7.65207961573093E-01
  4.48325719389457E-01  2.50000000000000E-01  2.02139876988442E-01
  1.72104685689464E-01  3.13035741458252E-02  2.67134337935824E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.30259575052971E-01  7.50000000000000E-01  4.94748055784455E-01
  4.03867605091309E-01  7.50000000000000E-01  9.22570184471095E-01
  4.01221804434363E-01  7.50000000000000E-01  2.65207961573092E-01
  5.16742806105429E-02  7.50000000000000E-01  7.02139876988443E-01
  3.27895314310536E-01  9.68696425854174E-01  7.67134337935825E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.30259575052972E-01  7.50000000000000E-01  5.25194421554521E-03
  9.03867605091310E-01  7.50000000000000E-01  5.77429815528905E-01
  9.01221804434364E-01  7.50000000000000E-01  2.34792038426907E-01
  5.51674280610544E-01  7.50000000000000E-01  7.97860123011557E-01
  8.27895314310536E-01  5.31303574145826E-01  7.32865662064175E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.69740424947028E-01  2.50000000000000E-01  5.05251944215545E-01
  5.96132394908690E-01  2.50000000000000E-01  7.74298155289054E-02
  5.98778195565636E-01  2.50000000000000E-01  7.34792038426907E-01
  9.48325719389457E-01  2.50000000000000E-01  2.97860123011558E-01
  6.72104685689464E-01  4.68696425854175E-01  2.32865662064175E-01
  8.27895314310536E-01  9.68696425854174E-01  7.32865662064175E-01
  6.72104685689464E-01  3.13035741458252E-02  2.32865662064175E-01
  1.72104685689464E-01  4.68696425854175E-01  2.67134337935824E-01
  3.27895314310536E-01  5.31303574145826E-01  7.67134337935825E-01
 Scale of Primitive Cell (acell) [bohr]
  1.92441548226191E+01  1.10320555979871E+01  8.73158442977758E+00
 Real space primitive translations (rprimd) [bohr]
  1.92441548226191E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10320555979871E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73158442977758E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85373795379004E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92441548226191E+01  1.10320555979871E+01  8.73158442977758E+00

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.14597

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.8994E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5020E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.13375600070    -3.521E+02 3.479E+04 3.555E+00
 scprqt: <Vxc>= -3.9323508E-01 hartree

Simple mixing update:
  residual square of the potential :   2.1472043895963404

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.8774E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5404E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.13407862750    -3.226E-04 1.365E+01 2.169E+00
 scprqt: <Vxc>= -3.9373121E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.563      0.437

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8849E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5008E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.13532372327    -1.245E-03 3.597E-01 1.909E-01
 scprqt: <Vxc>= -3.9340505E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.541      0.286      0.173

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8871E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5143E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.13544407106    -1.203E-04 2.041E-02 5.486E-03
 scprqt: <Vxc>= -3.9348184E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.689      0.202      0.729E-01  0.365E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8860E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5130E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13544689988    -2.829E-06 8.204E-03 1.893E-03
 scprqt: <Vxc>= -3.9347948E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.523      0.400      0.621E-01  0.136E-01  0.110E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5126E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13544788187    -9.820E-07 1.089E-03 3.610E-05
 scprqt: <Vxc>= -3.9347594E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.782      0.149      0.646E-01  0.584E-02  0.805E-03

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8865E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5128E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13544793116    -4.929E-08 2.816E-04 8.213E-06
 scprqt: <Vxc>= -3.9347817E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.813      0.232     -0.287E-01 -0.152E-01 -0.681E-03

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13544794264    -1.149E-08 2.396E-04 6.519E-06
 scprqt: <Vxc>= -3.9347743E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.505      0.588     -0.195E-01 -0.443E-01 -0.266E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8866E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13544795063    -7.987E-09 2.465E-05 1.606E-06
 scprqt: <Vxc>= -3.9347764E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.885      0.382     -0.954E-01 -0.148     -0.119E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13544795433    -3.698E-09 2.112E-05 8.902E-07
 scprqt: <Vxc>= -3.9347760E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.758      0.635     -0.327E-01 -0.354     -0.527E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13544795566    -1.327E-09 2.236E-06 8.446E-07
 scprqt: <Vxc>= -3.9347783E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.653      0.549     -0.398E-01 -0.572E-01 -0.124

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13544795652    -8.612E-10 1.711E-06 2.619E-08
 scprqt: <Vxc>= -3.9347760E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.696      0.259      0.149     -0.534E-01 -0.701E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13544795663    -1.126E-10 2.171E-06 9.699E-08
 scprqt: <Vxc>= -3.9347772E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.753      0.328     -0.378E-01  0.249E-01 -0.718E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13544795665    -1.819E-11 1.721E-06 1.184E-09
 scprqt: <Vxc>= -3.9347766E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.744      0.219      0.990E-01 -0.219E-01 -0.148E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13544795664     2.615E-12 2.192E-06 1.249E-08
 scprqt: <Vxc>= -3.9347768E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.718      0.554     -0.118     -0.803E-01 -0.496E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.13544795661     3.376E-11 1.742E-06 5.428E-10
 scprqt: <Vxc>= -3.9347766E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.768      0.276      0.702E-02 -0.497E-01 -0.357E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.13544795662    -8.072E-12 2.223E-06 5.746E-10
 scprqt: <Vxc>= -3.9347767E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.384      0.525      0.129      0.507E-02 -0.345E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5127E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.13544795660     1.700E-11 1.765E-06 9.398E-11
 scprqt: <Vxc>= -3.9347766E-01 hartree

 At SCF step   18       vres2   =  9.40E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.70705860E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)= -1.79202137E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -1.00618978E-05  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM10_DEN
ioarr: data written to disk file telast_1o_DS2_TIM10_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.19092649959968E+00  2.75801389949678E+00  8.68572663543907E+00
  1.84998669109200E+00  2.75801389949678E+00  3.68970724321605E+00
  1.90090288856406E+00  2.75801389949678E+00  6.68147792281346E+00
  8.62764955489280E+00  2.75801389949678E+00  1.76500140254944E+00
  3.31200921710624E+00  3.45342770392456E-01  2.33250602577939E+00
  9.62207741130955E+00  0.00000000000000E+00  4.36579221488879E+00
  4.43115091170986E+00  8.27404169849035E+00  4.31993442055028E+00
  7.77209072021755E+00  8.27404169849035E+00  8.05549945810484E+00
  7.72117452274548E+00  8.27404169849035E+00  2.31568570792466E+00
  9.94427856416752E-01  8.27404169849035E+00  6.13079361743823E+00
  6.31006819420331E+00  1.06867128275947E+01  6.69829824066818E+00
  0.00000000000000E+00  5.51602779899357E+00  0.00000000000000E+00
  1.40532283230194E+01  8.27404169849035E+00  4.58577943385150E-02
  1.73941681315271E+01  8.27404169849035E+00  5.04187718656153E+00
  1.73432519340551E+01  8.27404169849035E+00  2.05010650696413E+00
  1.06165052677263E+01  8.27404169849035E+00  6.96658302722814E+00
  1.59321456055129E+01  5.86137056938603E+00  6.39907840399819E+00
  9.62207741130955E+00  5.51602779899357E+00  4.36579221488879E+00
  1.48130039109092E+01  2.75801389949678E+00  4.41165000922730E+00
  1.14720641024016E+01  2.75801389949678E+00  6.76084971672741E-01
  1.15229802998736E+01  2.75801389949678E+00  6.41589872185291E+00
  1.82497269662023E+01  2.75801389949678E+00  2.60079081233936E+00
  1.29340866284158E+01  5.17068502860111E+00  2.03328618910940E+00
  1.59321456055129E+01  1.06867128275947E+01  6.39907840399819E+00
  1.29340866284158E+01  3.45342770392456E-01  2.03328618910940E+00
  3.31200921710624E+00  5.17068502860111E+00  2.33250602577939E+00
  6.31006819420331E+00  5.86137056938603E+00  6.69829824066818E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.69740424947028E-01  2.50000000000000E-01  9.94748055784455E-01
  9.61323949086906E-02  2.50000000000000E-01  4.22570184471094E-01
  9.87781955656368E-02  2.50000000000000E-01  7.65207961573093E-01
  4.48325719389457E-01  2.50000000000000E-01  2.02139876988442E-01
  1.72104685689464E-01  3.13035741458252E-02  2.67134337935824E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.30259575052971E-01  7.50000000000000E-01  4.94748055784455E-01
  4.03867605091309E-01  7.50000000000000E-01  9.22570184471095E-01
  4.01221804434363E-01  7.50000000000000E-01  2.65207961573092E-01
  5.16742806105429E-02  7.50000000000000E-01  7.02139876988443E-01
  3.27895314310536E-01  9.68696425854174E-01  7.67134337935825E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.30259575052972E-01  7.50000000000000E-01  5.25194421554521E-03
  9.03867605091310E-01  7.50000000000000E-01  5.77429815528905E-01
  9.01221804434364E-01  7.50000000000000E-01  2.34792038426907E-01
  5.51674280610544E-01  7.50000000000000E-01  7.97860123011557E-01
  8.27895314310536E-01  5.31303574145826E-01  7.32865662064175E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.69740424947028E-01  2.50000000000000E-01  5.05251944215545E-01
  5.96132394908690E-01  2.50000000000000E-01  7.74298155289054E-02
  5.98778195565636E-01  2.50000000000000E-01  7.34792038426907E-01
  9.48325719389457E-01  2.50000000000000E-01  2.97860123011558E-01
  6.72104685689464E-01  4.68696425854175E-01  2.32865662064175E-01
  8.27895314310536E-01  9.68696425854174E-01  7.32865662064175E-01
  6.72104685689464E-01  3.13035741458252E-02  2.32865662064175E-01
  1.72104685689464E-01  4.68696425854175E-01  2.67134337935824E-01
  3.27895314310536E-01  5.31303574145826E-01  7.67134337935825E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 1.99215E-03 1.18099E-03 (free atoms)
 -0.00000000000000E+00 -1.93607530800983E-20 -0.00000000000000E+00
  1.06582805415406E-03 -1.93607530800983E-20  1.03459804897621E-03
 -1.12365973378800E-03 -1.93607530800983E-20 -6.31359348197694E-04
  7.43628393259631E-04 -1.93607530800983E-20 -3.76553454476427E-05
 -8.19809515456022E-04 -1.93607530800983E-20  1.02358282032824E-03
 -1.99215435860580E-03  8.22684318183529E-04  1.43063721164410E-03
 -0.00000000000000E+00 -1.93607530800983E-20 -0.00000000000000E+00
 -1.06582805415406E-03 -1.93607530800983E-20  1.03459804897621E-03
  1.12365973378800E-03 -1.93607529074107E-20 -6.31359348197694E-04
 -7.43628393259631E-04 -1.93607529925746E-20 -3.76553454476427E-05
  8.19809515456022E-04 -1.93607530800983E-20  1.02358282032824E-03
  1.99215435860580E-03 -8.22684318183529E-04  1.43063721164411E-03
 -0.00000000000000E+00 -1.93607530800983E-20 -0.00000000000000E+00
 -1.06582805415406E-03 -1.93607530800983E-20 -1.03459804897621E-03
  1.12365973378800E-03 -1.93607531944010E-20  6.31359348197694E-04
 -7.43628393259631E-04 -1.93607531639394E-20  3.76553454476427E-05
  8.19809515456022E-04 -1.93607530800983E-20 -1.02358282032824E-03
  1.99215435860580E-03  8.22684318183529E-04 -1.43063721164410E-03
 -0.00000000000000E+00 -1.93607530800983E-20 -0.00000000000000E+00
  1.06582805415406E-03 -1.93607530800983E-20 -1.03459804897621E-03
 -1.12365973378800E-03 -1.93607527931080E-20  6.31359348197694E-04
  7.43628393259631E-04 -1.93607530800983E-20  3.76553454476427E-05
 -8.19809515456022E-04 -1.93607530800983E-20 -1.02358282032824E-03
 -1.99215435860580E-03 -8.22684318183529E-04 -1.43063721164410E-03
  1.99215435860580E-03 -8.22684318183529E-04 -1.43063721164410E-03
 -1.99215435860580E-03  8.22684318183529E-04 -1.43063721164410E-03
 -1.99215435860580E-03 -8.22684318183529E-04  1.43063721164410E-03
  1.99215435860580E-03  8.22684318183529E-04  1.43063721164410E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.05109600884315E-02  0.00000000000000E+00 -9.03368021551890E-03
  2.16238818849592E-02  0.00000000000000E+00  5.51276745431751E-03
 -1.43104999303838E-02  0.00000000000000E+00  3.28790828008533E-04
  1.57765412404920E-02  0.00000000000000E+00 -8.93749981656588E-03
  3.83373269075654E-02 -9.07589913779283E-03 -1.24917296018521E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.05109600884315E-02  0.00000000000000E+00 -9.03368021551890E-03
 -2.16238818849592E-02 -1.90509908610874E-27  5.51276745431751E-03
  1.43104999303838E-02 -9.65565747990518E-28  3.28790828008533E-04
 -1.57765412404920E-02  0.00000000000000E+00 -8.93749981656588E-03
 -3.83373269075654E-02  9.07589913779283E-03 -1.24917296018521E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.05109600884315E-02  0.00000000000000E+00  9.03368021551890E-03
 -2.16238818849592E-02  1.26099415699579E-27 -5.51276745431751E-03
  1.43104999303838E-02  9.24939411371636E-28 -3.28790828008533E-04
 -1.57765412404920E-02  0.00000000000000E+00  8.93749981656588E-03
 -3.83373269075654E-02 -9.07589913779283E-03  1.24917296018521E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.05109600884315E-02  0.00000000000000E+00  9.03368021551891E-03
  2.16238818849592E-02 -3.16609324310453E-27 -5.51276745431751E-03
 -1.43104999303838E-02  0.00000000000000E+00 -3.28790828008533E-04
  1.57765412404920E-02  0.00000000000000E+00  8.93749981656588E-03
  3.83373269075654E-02  9.07589913779283E-03  1.24917296018521E-02
 -3.83373269075654E-02  9.07589913779282E-03  1.24917296018521E-02
  3.83373269075654E-02 -9.07589913779283E-03  1.24917296018521E-02
  3.83373269075654E-02  9.07589913779283E-03 -1.24917296018521E-02
 -3.83373269075654E-02 -9.07589913779283E-03 -1.24917296018521E-02
 Scale of Primitive Cell (acell) [bohr]
  1.92441548226191E+01  1.10320555979871E+01  8.73158442977758E+00
 Real space primitive translations (rprimd) [bohr]
  1.92441548226191E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10320555979871E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73158442977758E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85373795379004E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.92441548226191E+01  1.10320555979871E+01  8.73158442977758E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  1.70705860457719E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00 -1.79202136859659E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -1.00618978063089E-05
 Total energy (etotal) [Ha]= -3.52135447956602E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-1.83513E-04
           Relative     =-5.21144E-07
 fconv : at Broyd/MD step  10, gradients have not converged yet. 
  max grad (force/stress) = 1.9922E-03 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (11/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.17157941688946E+00  2.75996638461779E+00  8.69823659748952E+00
  1.84018454499189E+00  2.75996638461779E+00  3.69100766023754E+00
  1.89249700642683E+00  2.75996638461779E+00  6.68411789790486E+00
  8.59947658651312E+00  2.75996638461779E+00  1.76905306817607E+00
  3.29047349320482E+00  3.35829393508157E-01  2.33710635026106E+00
  9.59798330460887E+00  0.00000000000000E+00  4.36620482391913E+00
  4.42640388771936E+00  8.27989915385338E+00  4.33203177357037E+00
  7.75779875961697E+00  8.27989915385338E+00  8.05721248415668E+00
  7.70548629818201E+00  8.27989915385338E+00  2.31791307398570E+00
  9.98506718095762E-01  8.27989915385338E+00  6.13525789209522E+00
  6.30750981140405E+00  1.07040361449630E+01  6.70331117418019E+00
  0.00000000000000E+00  5.51993276923558E+00  0.00000000000000E+00
  1.40243871923283E+01  8.27989915385338E+00  3.41730503487625E-02
  1.73557820642259E+01  8.27989915385338E+00  5.04140198760072E+00
  1.73034696027909E+01  8.27989915385338E+00  2.04829174993342E+00
  1.05964900227047E+01  8.27989915385338E+00  6.96335657966219E+00
  1.59054931160129E+01  5.85576216274377E+00  6.39530329757721E+00
  9.59798330460887E+00  5.51993276923558E+00  4.36620482391913E+00
  1.47695627214983E+01  2.75996638461779E+00  4.40037787426788E+00
  1.14381678496008E+01  2.75996638461779E+00  6.75197163681584E-01
  1.14904803110357E+01  2.75996638461779E+00  6.41449657385254E+00
  1.81974598911220E+01  2.75996638461779E+00  2.59715175574308E+00
  1.28884567978137E+01  5.18410337572743E+00  2.02909847365807E+00
  1.59054931160129E+01  1.07040361449630E+01  6.39530329757721E+00
  1.28884567978137E+01  3.35829393508157E-01  2.02909847365807E+00
  3.29047349320482E+00  5.18410337572743E+00  2.33710635026106E+00
  6.30750981140405E+00  5.85576216274377E+00  6.70331117418019E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.69409690179713E-01  2.50000000000000E-01  9.96086641405192E-01
  9.58630832431355E-02  2.50000000000000E-01  4.22679169792643E-01
  9.85882630947103E-02  2.50000000000000E-01  7.65437968151155E-01
  4.47983514536003E-01  2.50000000000000E-01  2.02584754897980E-01
  1.71414837303622E-01  3.04196996184306E-02  2.67635904007276E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.30590309820285E-01  7.50000000000000E-01  4.96086641405191E-01
  4.04136916756864E-01  7.50000000000000E-01  9.22679169792643E-01
  4.01411736905288E-01  7.50000000000000E-01  2.65437968151151E-01
  5.20164854639978E-02  7.50000000000000E-01  7.02584754897981E-01
  3.28585162696378E-01  9.69580300381567E-01  7.67635904007277E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.30590309820287E-01  7.50000000000000E-01  3.91335859480918E-03
  9.04136916756865E-01  7.50000000000000E-01  5.77320830207357E-01
  9.01411736905292E-01  7.50000000000000E-01  2.34562031848847E-01
  5.52016485464000E-01  7.50000000000000E-01  7.97415245102019E-01
  8.28585162696379E-01  5.30419699618433E-01  7.32364095992724E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.69409690179713E-01  2.50000000000000E-01  5.03913358594808E-01
  5.95863083243135E-01  2.50000000000000E-01  7.73208302073564E-02
  5.98588263094708E-01  2.50000000000000E-01  7.34562031848845E-01
  9.47983514536001E-01  2.50000000000000E-01  2.97415245102022E-01
  6.71414837303622E-01  4.69580300381570E-01  2.32364095992722E-01
  8.28585162696379E-01  9.69580300381567E-01  7.32364095992724E-01
  6.71414837303622E-01  3.04196996184306E-02  2.32364095992722E-01
  1.71414837303622E-01  4.69580300381570E-01  2.67635904007276E-01
  3.28585162696378E-01  5.30419699618433E-01  7.67635904007277E-01
 Scale of Primitive Cell (acell) [bohr]
  1.91959666092177E+01  1.10398655384712E+01  8.73240964783827E+00
 Real space primitive translations (rprimd) [bohr]
  1.91959666092177E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10398655384712E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73240964783827E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85058002656916E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.91959666092177E+01  1.10398655384712E+01  8.73240964783827E+00
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   8.3266726846886741E-016   0.0000000000000000       -3.3306690738754696E-016
  -1.3877787807814457E-016   0.0000000000000000        4.9960036108132044E-016
  -5.9674487573602164E-016   0.0000000000000000       -1.4432899320127035E-015
  -1.3322676295501878E-015   0.0000000000000000        2.7755575615628914E-016
  -3.0531133177191805E-016   9.6797569959505836E-016   2.7755575615628914E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   1.8041124150158794E-015   0.0000000000000000        5.5511151231257827E-016
   6.6613381477509392E-016   0.0000000000000000        0.0000000000000000     
   2.2204460492503131E-015   0.0000000000000000        2.3314683517128287E-015
   8.4654505627668186E-016   0.0000000000000000       -9.9920072216264089E-016
   2.7755575615628914E-016   1.2212453270876722E-015   1.1102230246251565E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -4.4408920985006262E-016   0.0000000000000000       -7.0689981646054889E-016
  -3.3306690738754696E-016   0.0000000000000000       -1.1102230246251565E-016
  -1.2212453270876722E-015   0.0000000000000000       -4.7184478546569153E-016
  -1.5543122344752192E-015   0.0000000000000000        9.9920072216264089E-016
  -7.7715611723760958E-016  -1.3322676295501878E-015  -2.2204460492503131E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   5.5511151231257827E-016   0.0000000000000000        8.8817841970012523E-016
   4.4408920985006262E-016   0.0000000000000000        4.9960036108132044E-016
   1.5543122344752192E-015   0.0000000000000000        1.4432899320127035E-015
   6.6613381477509392E-016   0.0000000000000000       -1.8318679906315083E-015
   1.1102230246251565E-016  -1.5543122344752192E-015   7.7715611723760958E-016
  -7.7715611723760958E-016   1.2212453270876722E-015  -2.2204460492503131E-016
   1.1102230246251565E-016   9.8185348740287282E-016   7.7715611723760958E-016
  -3.0531133177191805E-016  -1.5543122344752192E-015   2.7755575615628914E-016
   2.7755575615628914E-016  -1.3322676295501878E-015   1.1102230246251565E-016

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.15135

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.9067E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4214E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.13199412778    -3.521E+02 6.088E+03 7.247E+00
 scprqt: <Vxc>= -3.9334308E-01 hartree

Simple mixing update:
  residual square of the potential :   4.4707078863778085

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.8807E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5191E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.13256049086    -5.664E-04 8.018E-01 4.373E+00
 scprqt: <Vxc>= -3.9426379E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.563      0.437

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8792E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4467E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.13538423712    -2.824E-03 2.819E-01 4.399E-01
 scprqt: <Vxc>= -3.9371739E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.533      0.296      0.171

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8896E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4660E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.13572592893    -3.417E-04 1.677E-01 1.659E-02
 scprqt: <Vxc>= -3.9382369E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.658      0.215      0.858E-01  0.408E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8867E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4647E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13573483359    -8.905E-06 1.647E-01 4.939E-03
 scprqt: <Vxc>= -3.9383013E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.551      0.369      0.643E-01  0.154E-01  0.305E-03

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4637E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13573710446    -2.271E-06 2.944E-02 9.280E-05
 scprqt: <Vxc>= -3.9382275E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.810      0.139      0.477E-01  0.603E-02  0.160E-04

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8877E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4640E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13573727468    -1.702E-07 2.509E-02 3.222E-05
 scprqt: <Vxc>= -3.9382672E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.857      0.226     -0.584E-01 -0.217E-01 -0.201E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8880E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13573732984    -5.516E-08 2.663E-03 2.343E-05
 scprqt: <Vxc>= -3.9382491E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.512      0.571     -0.610E-02 -0.498E-01 -0.241E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8878E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13573736164    -3.180E-08 3.540E-03 7.771E-06
 scprqt: <Vxc>= -3.9382561E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.919      0.451     -0.165     -0.190     -0.457E-02

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8880E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13573738218    -2.055E-08 3.419E-04 3.219E-06
 scprqt: <Vxc>= -3.9382556E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.806      0.571     -0.179E-01 -0.338     -0.678E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8878E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4639E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13573738718    -4.991E-09 4.758E-04 3.866E-06
 scprqt: <Vxc>= -3.9382592E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.524      0.577      0.497E-01 -0.364E-01 -0.127

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13573739109    -3.913E-09 4.788E-05 2.575E-07
 scprqt: <Vxc>= -3.9382550E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.590      0.261      0.231     -0.326E-01  0.304E-02

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13573739169    -5.976E-10 6.505E-05 3.778E-07
 scprqt: <Vxc>= -3.9382572E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.694      0.323      0.126E-01  0.554E-01 -0.791E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13573739200    -3.114E-10 8.396E-06 8.817E-09
 scprqt: <Vxc>= -3.9382559E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.893      0.165      0.129E-01 -0.287E-01 -0.286E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13573739204    -4.485E-11 1.138E-05 3.390E-08
 scprqt: <Vxc>= -3.9382564E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.651      0.569     -0.734E-01 -0.798E-01 -0.452E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.13573739204     1.421E-12 3.261E-06 6.037E-10
 scprqt: <Vxc>= -3.9382559E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.837      0.225     -0.279E-01 -0.381E-01 -0.102E-02

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.13573739205    -7.844E-12 4.466E-06 1.744E-09
 scprqt: <Vxc>= -3.9382561E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.408      0.531      0.974E-01  0.693E-02 -0.266E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.13573739202     3.104E-11 2.624E-06 1.652E-10
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.348E-01  0.373      0.603      0.116     -0.217E-01

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.13573739202    -6.423E-12 3.591E-06 4.440E-10
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  -1.20       1.13      0.637      0.406      0.622E-01

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.13573739202     7.276E-12 2.566E-06 8.296E-10
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.874      -3.08       1.90      0.870      0.390

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 21  -352.13573739203    -1.143E-11 3.490E-06 1.587E-09
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.267       1.34      -3.73       2.17       1.10

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 22  -352.13573739203    -5.684E-13 2.581E-06 1.626E-09
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.52      -5.76       2.01       2.18      -1.06

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 23  -352.13573739202     5.855E-12 3.487E-06 6.630E-10
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.479       1.64      -3.37       1.19      0.737

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 24  -352.13573739203    -4.320E-12 2.605E-06 4.511E-10
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.68      -1.20       1.87      -4.54      0.987

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 25  -352.13573739201     2.177E-11 3.496E-06 1.266E-10
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.539      0.889      -1.04      0.882      -2.05

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 26  -352.13573739201    -1.080E-12 2.629E-06 1.682E-10
 scprqt: <Vxc>= -3.9382560E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.532      0.297      0.329     -0.474      0.774

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    8.8879E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.4638E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 27  -352.13573739200     5.173E-12 3.505E-06 1.014E-11
 scprqt: <Vxc>= -3.9382560E-01 hartree

 At SCF step   27       vres2   =  1.01E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  4.61157267E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.14371775E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  2.49869896E-06  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM11_DEN
ioarr: data written to disk file telast_1o_DS2_TIM11_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.17157941688948E+00  2.75996638461779E+00  8.69823659748951E+00
  1.84018454499189E+00  2.75996638461779E+00  3.69100766023755E+00
  1.89249700642682E+00  2.75996638461779E+00  6.68411789790485E+00
  8.59947658651310E+00  2.75996638461779E+00  1.76905306817607E+00
  3.29047349320482E+00  3.35829393508167E-01  2.33710635026106E+00
  9.59798330460887E+00  0.00000000000000E+00  4.36620482391913E+00
  4.42640388771940E+00  8.27989915385338E+00  4.33203177357038E+00
  7.75779875961699E+00  8.27989915385338E+00  8.05721248415668E+00
  7.70548629818205E+00  8.27989915385338E+00  2.31791307398572E+00
  9.98506718095778E-01  8.27989915385338E+00  6.13525789209521E+00
  6.30750981140406E+00  1.07040361449630E+01  6.70331117418019E+00
  0.00000000000000E+00  5.51993276923558E+00  0.00000000000000E+00
  1.40243871923283E+01  8.27989915385338E+00  3.41730503487563E-02
  1.73557820642259E+01  8.27989915385338E+00  5.04140198760072E+00
  1.73034696027909E+01  8.27989915385338E+00  2.04829174993342E+00
  1.05964900227046E+01  8.27989915385338E+00  6.96335657966220E+00
  1.59054931160129E+01  5.85576216274375E+00  6.39530329757721E+00
  9.59798330460887E+00  5.51993276923558E+00  4.36620482391913E+00
  1.47695627214983E+01  2.75996638461779E+00  4.40037787426789E+00
  1.14381678496008E+01  2.75996638461779E+00  6.75197163681588E-01
  1.14904803110357E+01  2.75996638461779E+00  6.41449657385255E+00
  1.81974598911220E+01  2.75996638461779E+00  2.59715175574306E+00
  1.28884567978137E+01  5.18410337572742E+00  2.02909847365807E+00
  1.59054931160129E+01  1.07040361449630E+01  6.39530329757721E+00
  1.28884567978137E+01  3.35829393508168E-01  2.02909847365807E+00
  3.29047349320482E+00  5.18410337572742E+00  2.33710635026106E+00
  6.30750981140406E+00  5.85576216274375E+00  6.70331117418019E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.69409690179713E-01  2.50000000000000E-01  9.96086641405192E-01
  9.58630832431353E-02  2.50000000000000E-01  4.22679169792643E-01
  9.85882630947097E-02  2.50000000000000E-01  7.65437968151153E-01
  4.47983514536001E-01  2.50000000000000E-01  2.02584754897980E-01
  1.71414837303622E-01  3.04196996184316E-02  2.67635904007277E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.30590309820287E-01  7.50000000000000E-01  4.96086641405192E-01
  4.04136916756865E-01  7.50000000000000E-01  9.22679169792643E-01
  4.01411736905290E-01  7.50000000000000E-01  2.65437968151153E-01
  5.20164854639986E-02  7.50000000000000E-01  7.02584754897980E-01
  3.28585162696378E-01  9.69580300381568E-01  7.67635904007277E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.30590309820287E-01  7.50000000000000E-01  3.91335859480847E-03
  9.04136916756865E-01  7.50000000000000E-01  5.77320830207357E-01
  9.01411736905290E-01  7.50000000000000E-01  2.34562031848847E-01
  5.52016485463999E-01  7.50000000000000E-01  7.97415245102020E-01
  8.28585162696378E-01  5.30419699618432E-01  7.32364095992723E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.69409690179713E-01  2.50000000000000E-01  5.03913358594808E-01
  5.95863083243135E-01  2.50000000000000E-01  7.73208302073569E-02
  5.98588263094710E-01  2.50000000000000E-01  7.34562031848847E-01
  9.47983514536001E-01  2.50000000000000E-01  2.97415245102020E-01
  6.71414837303622E-01  4.69580300381568E-01  2.32364095992723E-01
  8.28585162696378E-01  9.69580300381568E-01  7.32364095992723E-01
  6.71414837303622E-01  3.04196996184316E-02  2.32364095992723E-01
  1.71414837303622E-01  4.69580300381568E-01  2.67635904007277E-01
  3.28585162696378E-01  5.30419699618432E-01  7.67635904007277E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 2.16552E-03 1.03101E-03 (free atoms)
  1.93607530800983E-21 -0.00000000000000E+00 -2.32329036961180E-20
  6.53171458893254E-04 -0.00000000000000E+00 -1.97797577779297E-05
 -8.21792767753250E-04  1.78639156082116E-30  1.33836945777680E-04
 -4.58828903966380E-05 -0.00000000000000E+00 -8.95504442591907E-04
 -2.89769704704989E-04 -0.00000000000000E+00  2.16552248180215E-03
 -4.24370570917849E-04  1.46552452549944E-03  1.32821867416013E-03
  1.93607530800983E-21 -0.00000000000000E+00 -2.32329036961180E-20
 -6.53171458893254E-04 -0.00000000000000E+00 -1.97797577779297E-05
  8.21792767753249E-04  7.98517027687061E-30  1.33836945777680E-04
  4.58828903966380E-05 -0.00000000000000E+00 -8.95504442591907E-04
  2.89769704704989E-04 -0.00000000000000E+00  2.16552248180215E-03
  4.24370570917849E-04 -1.46552452549944E-03  1.32821867416013E-03
  1.93607530800983E-21 -0.00000000000000E+00 -2.32329036961180E-20
 -6.53171458893254E-04 -0.00000000000000E+00  1.97797577779296E-05
  8.21792767753250E-04 -0.00000000000000E+00 -1.33836945777680E-04
  4.58828903966380E-05 -1.82926495828087E-29  8.95504442591907E-04
  2.89769704704989E-04 -3.65852991656174E-29 -2.16552248180215E-03
  4.24370570917849E-04  1.46552452549944E-03 -1.32821867416013E-03
  1.93607530800983E-21 -0.00000000000000E+00 -2.32329036961180E-20
  6.53171458893254E-04 -0.00000000000000E+00  1.97797577779296E-05
 -8.21792767753250E-04  9.77156183769177E-30 -1.33836945777680E-04
 -4.58828903966380E-05  1.82926495828087E-29  8.95504442591907E-04
 -2.89769704704989E-04  3.65852991656174E-29 -2.16552248180216E-03
 -4.24370570917849E-04 -1.46552452549944E-03 -1.32821867416013E-03
  4.24370570917849E-04 -1.46552452549944E-03 -1.32821867416013E-03
 -4.24370570917849E-04  1.46552452549944E-03 -1.32821867416013E-03
 -4.24370570917849E-04 -1.46552452549944E-03  1.32821867416013E-03
  4.24370570917849E-04  1.46552452549944E-03  1.32821867416013E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -1.25382575150089E-02  0.00000000000000E+00  1.72724947651897E-04
  1.57751065294880E-02 -1.97215226305253E-29 -1.16871903654622E-03
  8.80766431988261E-04  0.00000000000000E+00  7.81991163417160E-03
  5.56240957587985E-03  0.00000000000000E+00 -1.89102294126998E-02
  8.14620330927369E-03 -1.61791937048455E-02 -1.15985495646749E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  1.25382575150089E-02  0.00000000000000E+00  1.72724947651897E-04
 -1.57751065294880E-02 -8.81552061584481E-29 -1.16871903654622E-03
 -8.80766431988261E-04  0.00000000000000E+00  7.81991163417160E-03
 -5.56240957587985E-03  0.00000000000000E+00 -1.89102294126998E-02
 -8.14620330927369E-03  1.61791937048455E-02 -1.15985495646749E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  1.25382575150089E-02  0.00000000000000E+00 -1.72724947651897E-04
 -1.57751065294880E-02  0.00000000000000E+00  1.16871903654622E-03
 -8.80766431988261E-04  2.01948391736579E-28 -7.81991163417160E-03
 -5.56240957587985E-03  4.03896783473158E-28  1.89102294126998E-02
 -8.14620330927369E-03 -1.61791937048455E-02  1.15985495646749E-02
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -1.25382575150089E-02  0.00000000000000E+00 -1.72724947651897E-04
  1.57751065294880E-02 -1.07876728788973E-28  1.16871903654622E-03
  8.80766431988261E-04 -2.01948391736579E-28 -7.81991163417160E-03
  5.56240957587985E-03 -4.03896783473158E-28  1.89102294126998E-02
  8.14620330927369E-03  1.61791937048455E-02  1.15985495646749E-02
 -8.14620330927369E-03  1.61791937048455E-02  1.15985495646749E-02
  8.14620330927369E-03 -1.61791937048455E-02  1.15985495646749E-02
  8.14620330927369E-03  1.61791937048455E-02 -1.15985495646749E-02
 -8.14620330927369E-03 -1.61791937048455E-02 -1.15985495646749E-02
 Scale of Primitive Cell (acell) [bohr]
  1.91959666092177E+01  1.10398655384712E+01  8.73240964783827E+00
 Real space primitive translations (rprimd) [bohr]
  1.91959666092177E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10398655384712E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73240964783827E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.85058002656916E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.91959666092177E+01  1.10398655384712E+01  8.73240964783827E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
  4.61157267260658E-05  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.14371775351736E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  2.49869896305939E-06
 Total energy (etotal) [Ha]= -3.52135737392001E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)=-2.89435E-04
           Relative     =-8.21943E-07
 fconv : at Broyd/MD step  11, gradients have not converged yet. 
  max grad (force/stress) = 4.6116E-03 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

 Geometry Optimization Precondition:           0
 EXIT:           1           1

--- Iteration: (12/12) Internal Cycle: (1/1)
--------------------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.11532112438142E+00  2.76388871521791E+00  8.72631827859414E+00
  1.81224680973039E+00  2.76388871521791E+00  3.69452326173674E+00
  1.86837015589703E+00  2.76388871521791E+00  6.68892547943267E+00
  8.51349480318704E+00  2.76388871521791E+00  1.78220713154697E+00
  3.23303903294800E+00  3.15627226464932E-01  2.34943203681537E+00
  9.51962530231828E+00  0.00000000000000E+00  4.36698593013207E+00
  4.40430417793691E+00  8.29166614565374E+00  4.35933234846208E+00
  7.70737849258791E+00  8.29166614565374E+00  8.06150919186880E+00
  7.65125514642127E+00  8.29166614565374E+00  2.32193954930064E+00
  1.00613049913123E+00  8.29166614565374E+00  6.14919306167902E+00
  6.28658626937029E+00  1.07399276344067E+01  6.71641796694743E+00
  0.00000000000000E+00  5.52777743043583E+00  0.00000000000000E+00
  1.39239294802552E+01  8.29166614565374E+00  7.65358166998402E-03
  1.72270037949062E+01  8.29166614565374E+00  5.03944859852739E+00
  1.71708804487395E+01  8.29166614565374E+00  2.04504638083144E+00
  1.05257558014495E+01  8.29166614565374E+00  6.95176472871717E+00
  1.58062115716885E+01  5.84340465690073E+00  6.38453982344877E+00
  9.51962530231828E+00  5.52777743043583E+00  4.36698593013207E+00
  1.46349464266997E+01  2.76388871521791E+00  4.37463951180207E+00
  1.13318721120487E+01  2.76388871521791E+00  6.72462668395333E-01
  1.13879954582153E+01  2.76388871521791E+00  6.41203231096353E+00
  1.80331201055054E+01  2.76388871521791E+00  2.58477879858509E+00
  1.27526643352663E+01  5.21215020397089E+00  2.01755389331670E+00
  1.58062115716885E+01  1.07399276344067E+01  6.38453982344877E+00
  1.27526643352663E+01  3.15627226464932E-01  2.01755389331670E+00
  3.23303903294800E+00  5.21215020397089E+00  2.34943203681537E+00
  6.28658626937029E+00  5.84340465690073E+00  6.71641796694743E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.68672398436507E-01  2.50000000000000E-01  9.99123699756257E-01
  9.51847763004419E-02  2.50000000000000E-01  4.23006087132620E-01
  9.81325470573949E-02  2.50000000000000E-01  7.65851503353754E-01
  4.47154931671196E-01  2.50000000000000E-01  2.04054599678212E-01
  1.69809153736369E-01  2.85491981575719E-02  2.68999267962414E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.31327601563495E-01  7.50000000000000E-01  4.99123699756258E-01
  4.04815223699559E-01  7.50000000000000E-01  9.23006087132620E-01
  4.01867452942606E-01  7.50000000000000E-01  2.65851503353759E-01
  5.28450683288036E-02  7.50000000000000E-01  7.04054599678211E-01
  3.30190846263631E-01  9.71450801842430E-01  7.68999267962413E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.31327601563494E-01  7.50000000000000E-01  8.76300243741861E-04
  9.04815223699558E-01  7.50000000000000E-01  5.76993912867380E-01
  9.01867452942603E-01  7.50000000000000E-01  2.34148496646243E-01
  5.52845068328800E-01  7.50000000000000E-01  7.95945400321789E-01
  8.30190846263629E-01  5.28549198157570E-01  7.31000732037587E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.68672398436507E-01  2.50000000000000E-01  5.00876300243744E-01
  5.95184776300442E-01  2.50000000000000E-01  7.69939128673809E-02
  5.98132547057397E-01  2.50000000000000E-01  7.34148496646246E-01
  9.47154931671198E-01  2.50000000000000E-01  2.95945400321786E-01
  6.69809153736371E-01  4.71450801842428E-01  2.31000732037587E-01
  8.30190846263629E-01  9.71450801842430E-01  7.31000732037587E-01
  6.69809153736371E-01  2.85491981575719E-02  2.31000732037587E-01
  1.69809153736369E-01  4.71450801842428E-01  2.68999267962414E-01
  3.30190846263631E-01  5.28549198157570E-01  7.68999267962413E-01
 Scale of Primitive Cell (acell) [bohr]
  1.90392506046366E+01  1.10555548608717E+01  8.73397186026413E+00
 Real space primitive translations (rprimd) [bohr]
  1.90392506046366E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10555548608717E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73397186026413E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.83840919144116E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.90392506046366E+01  1.10555548608717E+01  8.73397186026413E+00
 WARNING: ATOMIC COORDINATES WERE SYMMETRIZED
 DIFFERENCES:
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -7.2164496600635175E-016   0.0000000000000000        4.4408920985006262E-016
   0.0000000000000000        0.0000000000000000       -1.6653345369377348E-016
   7.2164496600635175E-016   0.0000000000000000        1.8873791418627661E-015
   1.4432899320127035E-015   0.0000000000000000       -1.1102230246251565E-016
   9.1593399531575415E-016  -1.0963452368173421E-015  -3.8857805861880479E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -1.5820678100908481E-015   0.0000000000000000       -8.8817841970012523E-016
  -4.9960036108132044E-016   0.0000000000000000        0.0000000000000000     
  -1.5543122344752192E-015   0.0000000000000000       -2.7200464103316335E-015
  -1.2490009027033011E-015   0.0000000000000000        9.9920072216264089E-016
  -9.4368957093138306E-016  -9.9920072216264089E-016   0.0000000000000000     
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
   4.4408920985006262E-016   0.0000000000000000        6.6266436782314031E-016
   2.2204460492503131E-016   0.0000000000000000        1.1102230246251565E-016
   1.3322676295501878E-015   0.0000000000000000        1.0547118733938987E-015
   2.1094237467877974E-015   0.0000000000000000       -9.9920072216264089E-016
   9.9920072216264089E-016   1.3322676295501878E-015  -1.1102230246251565E-016
   0.0000000000000000        0.0000000000000000        0.0000000000000000     
  -5.5511151231257827E-016   0.0000000000000000       -1.1102230246251565E-015
  -2.2204460492503131E-016   0.0000000000000000       -5.2735593669694936E-016
  -8.8817841970012523E-016   0.0000000000000000       -1.7763568394002505E-015
  -4.4408920985006262E-016   0.0000000000000000        1.7208456881689926E-015
  -1.1102230246251565E-015   1.2767564783189300E-015  -1.9428902930940239E-016
   9.9920072216264089E-016  -9.9920072216264089E-016  -1.1102230246251565E-016
  -1.1102230246251565E-015  -1.0963452368173421E-015  -1.9428902930940239E-016
   9.1593399531575415E-016   1.2767564783189300E-015  -3.8857805861880479E-016
  -9.4368957093138306E-016   1.3322676295501878E-015   0.0000000000000000     

---SELF-CONSISTENT-FIELD CONVERGENCE--------------------------------------------

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  72  45  36
         ecut(hartree)=     15.000   => boxcut(ratio)=   2.16906

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    8.9232E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.1345E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  1  -352.11253154730    -3.521E+02 2.518E+02 3.704E+01
 scprqt: <Vxc>= -3.9349530E-01 hartree

Simple mixing update:
  residual square of the potential :   23.876744363168509

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    8.8365E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.5172E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  2  -352.11279651398    -2.650E-04 1.161E-01 2.729E+01
 scprqt: <Vxc>= -3.9640978E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.538      0.462

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    8.8361E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3037E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  3  -352.13301015890    -2.021E-02 4.835E-02 2.409E+00
 scprqt: <Vxc>= -3.9486417E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.558      0.275      0.167

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    8.8679E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3360E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  4  -352.13485823350    -1.848E-03 1.279E-01 1.247E-01
 scprqt: <Vxc>= -3.9506086E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.620      0.241      0.931E-01  0.466E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    8.8586E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3339E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  5  -352.13492269931    -6.447E-05 9.677E-03 3.360E-02
 scprqt: <Vxc>= -3.9509258E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.596      0.340      0.553E-01  0.115E-01 -0.321E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    8.8616E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3316E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  6  -352.13493761495    -1.492E-05 2.719E-02 5.645E-04
 scprqt: <Vxc>= -3.9507832E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.843      0.126      0.358E-01  0.139E-02 -0.153E-02

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    8.8610E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3323E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  7  -352.13493872753    -1.113E-06 8.313E-04 2.139E-04
 scprqt: <Vxc>= -3.9508912E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.813      0.270     -0.597E-01 -0.201E-01 -0.251E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    8.8614E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3317E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  8  -352.13493915717    -4.296E-07 2.044E-03 7.746E-05
 scprqt: <Vxc>= -3.9508415E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.893      0.244     -0.105     -0.171E-01 -0.125E-01

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    8.8610E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3319E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT  9  -352.13493933769    -1.805E-07 4.697E-05 9.322E-05
 scprqt: <Vxc>= -3.9508695E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.546      0.784     -0.120     -0.207      0.846E-03

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    8.8613E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3319E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 10  -352.13493946690    -1.292E-07 1.259E-04 1.510E-05
 scprqt: <Vxc>= -3.9508598E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.942      0.350      0.462E-01 -0.302     -0.674E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    8.8609E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3319E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 11  -352.13493950216    -3.525E-08 6.839E-06 2.681E-05
 scprqt: <Vxc>= -3.9508674E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.454      0.645      0.450E-01  0.544E-02 -0.149

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 12  -352.13493952943    -2.727E-08 7.908E-06 2.514E-06
 scprqt: <Vxc>= -3.9508585E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.607      0.261      0.230     -0.599E-01  0.297E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3319E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 13  -352.13493953389    -4.461E-09 6.655E-06 1.540E-06
 scprqt: <Vxc>= -3.9508621E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.687      0.349      0.413E-01  0.392E-01 -0.927E-01

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 14  -352.13493953593    -2.045E-09 5.272E-06 6.521E-08
 scprqt: <Vxc>= -3.9508595E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.818      0.225      0.315E-01 -0.158E-01 -0.366E-01

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 15  -352.13493953602    -9.089E-11 6.627E-06 1.246E-07
 scprqt: <Vxc>= -3.9508599E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.593      0.445      0.253E-01 -0.182E-01 -0.320E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 16  -352.13493953616    -1.382E-10 5.317E-06 6.938E-09
 scprqt: <Vxc>= -3.9508595E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.831      0.245     -0.115E-01 -0.309E-01 -0.149E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 17  -352.13493953606     1.067E-10 6.630E-06 5.634E-09
 scprqt: <Vxc>= -3.9508595E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.506      0.429      0.964E-01  0.217E-01 -0.242E-01

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 18  -352.13493953604     1.597E-11 5.365E-06 1.904E-10
 scprqt: <Vxc>= -3.9508594E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.959      0.109     -0.115      0.581E-01 -0.515E-02

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 19  -352.13493953600     3.649E-11 6.637E-06 1.928E-10
 scprqt: <Vxc>= -3.9508594E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.721      0.597     -0.196     -0.161      0.389E-01

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 20  -352.13493953600     4.434E-12 5.410E-06 1.034E-10
 scprqt: <Vxc>= -3.9508594E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.333      0.508      0.360     -0.141     -0.982E-01

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    8.8611E-01  at reduced coord.    0.7083    0.6889    0.9722
,     Minimum=    4.3318E-04  at reduced coord.    0.0000    0.0000    0.0000
,  Integrated=    1.5200E+02
 ETOT 21  -352.13493953599     1.035E-11 6.642E-06 2.297E-11
 scprqt: <Vxc>= -3.9508594E-01 hartree

 At SCF step   21       vres2   =  2.30E-11 < tolvrs=  1.00E-10 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.74913855E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  9.41529174E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.65410352E-06  sigma(2 1)=  0.00000000E+00

   1  7 13 19  1  7 13 19
   2  8 14 20 14 20  2  8
   3  9 15 21 15 21  3  9
   4 10 16 22 16 22  4 10
   5 11 17 23 17 23  5 11
   6 12 18 24 25 26 27 28
   7  1 19 13  7  1 19 13
   8  2 20 14 20 14  8  2
   9  3 21 15 21 15  9  3
  10  4 22 16 22 16 10  4
  11  5 23 17 23 17 11  5
  12  6 24 18 26 25 28 27
  13 19  1  7 13 19  1  7
  14 20  2  8  2  8 14 20
  15 21  3  9  3  9 15 21
  16 22  4 10  4 10 16 22
  17 23  5 11  5 11 17 23
  18 24  6 12 27 28 25 26
  19 13  7  1 19 13  7  1
  20 14  8  2  8  2 20 14
  21 15  9  3  9  3 21 15
  22 16 10  4 10  4 22 16
  23 17 11  5 11  5 23 17
  24 18 12  6 28 27 26 25
  25 26 27 28  6 12 18 24
  26 25 28 27 12  6 24 18
  27 28 25 26 18 24  6 12
  28 27 26 25 24 18 12  6
 ioarr: writing density data
ioarr: file name is telast_1o_DS2_TIM12_DEN
ioarr: data written to disk file telast_1o_DS2_TIM12_DEN

---OUTPUT-----------------------------------------------------------------------

 Cartesian coordinates (xcart) [bohr]
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  5.11532112438140E+00  2.76388871521791E+00  8.72631827859414E+00
  1.81224680973039E+00  2.76388871521791E+00  3.69452326173674E+00
  1.86837015589705E+00  2.76388871521791E+00  6.68892547943268E+00
  8.51349480318707E+00  2.76388871521791E+00  1.78220713154697E+00
  3.23303903294801E+00  3.15627226464920E-01  2.34943203681537E+00
  9.51962530231828E+00  0.00000000000000E+00  4.36698593013207E+00
  4.40430417793688E+00  8.29166614565374E+00  4.35933234846208E+00
  7.70737849258790E+00  8.29166614565374E+00  8.06150919186880E+00
  7.65125514642124E+00  8.29166614565374E+00  2.32193954930062E+00
  1.00613049913121E+00  8.29166614565374E+00  6.14919306167903E+00
  6.28658626937027E+00  1.07399276344067E+01  6.71641796694743E+00
  0.00000000000000E+00  5.52777743043583E+00  0.00000000000000E+00
  1.39239294802552E+01  8.29166614565374E+00  7.65358166998980E-03
  1.72270037949062E+01  8.29166614565374E+00  5.03944859852739E+00
  1.71708804487395E+01  8.29166614565374E+00  2.04504638083145E+00
  1.05257558014495E+01  8.29166614565374E+00  6.95176472871717E+00
  1.58062115716886E+01  5.84340465690075E+00  6.38453982344877E+00
  9.51962530231828E+00  5.52777743043583E+00  4.36698593013207E+00
  1.46349464266997E+01  2.76388871521791E+00  4.37463951180206E+00
  1.13318721120487E+01  2.76388871521791E+00  6.72462668395329E-01
  1.13879954582153E+01  2.76388871521791E+00  6.41203231096351E+00
  1.80331201055054E+01  2.76388871521791E+00  2.58477879858510E+00
  1.27526643352663E+01  5.21215020397091E+00  2.01755389331670E+00
  1.58062115716886E+01  1.07399276344067E+01  6.38453982344877E+00
  1.27526643352663E+01  3.15627226464920E-01  2.01755389331670E+00
  3.23303903294801E+00  5.21215020397091E+00  2.34943203681537E+00
  6.28658626937027E+00  5.84340465690075E+00  6.71641796694743E+00
 Reduced coordinates (xred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.68672398436506E-01  2.50000000000000E-01  9.99123699756257E-01
  9.51847763004419E-02  2.50000000000000E-01  4.23006087132620E-01
  9.81325470573956E-02  2.50000000000000E-01  7.65851503353756E-01
  4.47154931671198E-01  2.50000000000000E-01  2.04054599678212E-01
  1.69809153736370E-01  2.85491981575708E-02  2.68999267962413E-01
  5.00000000000000E-01  0.00000000000000E+00  5.00000000000000E-01
  2.31327601563494E-01  7.50000000000000E-01  4.99123699756257E-01
  4.04815223699558E-01  7.50000000000000E-01  9.23006087132620E-01
  4.01867452942604E-01  7.50000000000000E-01  2.65851503353756E-01
  5.28450683288024E-02  7.50000000000000E-01  7.04054599678212E-01
  3.30190846263630E-01  9.71450801842429E-01  7.68999267962413E-01
  0.00000000000000E+00  5.00000000000000E-01  0.00000000000000E+00
  7.31327601563494E-01  7.50000000000000E-01  8.76300243742524E-04
  9.04815223699558E-01  7.50000000000000E-01  5.76993912867380E-01
  9.01867452942604E-01  7.50000000000000E-01  2.34148496646244E-01
  5.52845068328802E-01  7.50000000000000E-01  7.95945400321788E-01
  8.30190846263630E-01  5.28549198157571E-01  7.31000732037587E-01
  5.00000000000000E-01  5.00000000000000E-01  5.00000000000000E-01
  7.68672398436506E-01  2.50000000000000E-01  5.00876300243743E-01
  5.95184776300442E-01  2.50000000000000E-01  7.69939128673804E-02
  5.98132547057396E-01  2.50000000000000E-01  7.34148496646244E-01
  9.47154931671198E-01  2.50000000000000E-01  2.95945400321788E-01
  6.69809153736370E-01  4.71450801842429E-01  2.31000732037587E-01
  8.30190846263630E-01  9.71450801842429E-01  7.31000732037587E-01
  6.69809153736370E-01  2.85491981575708E-02  2.31000732037587E-01
  1.69809153736370E-01  4.71450801842429E-01  2.68999267962413E-01
  3.30190846263630E-01  5.28549198157571E-01  7.68999267962413E-01
 Cartesian forces (fcart) [Ha/bohr]; max,rms= 5.66755E-03 2.70485E-03 (free atoms)
 -1.54886024640786E-20 -3.09772049281573E-20 -7.74430123203932E-20
 -1.15973344810640E-03 -3.09772049281573E-20 -3.45916808971306E-03
  1.00033651314364E-03 -3.09772049281573E-20  1.73025791765648E-03
 -3.32991006422069E-03 -3.09772049281573E-20 -2.74731928486368E-03
  6.64969403026404E-04 -3.09772049235906E-20  5.66754510529614E-03
  3.24659010963508E-03  2.30175146095185E-03  1.05955842384277E-03
 -1.54886024640786E-20 -3.09772049281573E-20 -7.74430123203932E-20
  1.15973344810640E-03 -3.09772049281573E-20 -3.45916808971306E-03
 -1.00033651314364E-03 -3.09772049599278E-20  1.73025791765648E-03
  3.32991006422069E-03 -3.09772049281573E-20 -2.74731928486368E-03
 -6.64969403026405E-04 -3.09772049327239E-20  5.66754510529614E-03
 -3.24659010963508E-03 -2.30175146095185E-03  1.05955842384277E-03
 -1.54886024640786E-20 -3.09772049281573E-20 -7.74430123203932E-20
  1.15973344810640E-03 -3.09772049281573E-20  3.45916808971306E-03
 -1.00033651314364E-03 -3.09772049945792E-20 -1.73025791765648E-03
  3.32991006422069E-03 -3.09772049281573E-20  2.74731928486368E-03
 -6.64969403026405E-04 -3.09772049281573E-20 -5.66754510529614E-03
 -3.24659010963508E-03  2.30175146095186E-03 -1.05955842384277E-03
 -1.54886024640786E-20 -3.09772049281573E-20 -7.74430123203932E-20
 -1.15973344810640E-03 -3.09772049281573E-20  3.45916808971306E-03
  1.00033651314364E-03 -3.09772049281573E-20 -1.73025791765648E-03
 -3.32991006422069E-03 -3.09772049281573E-20  2.74731928486368E-03
  6.64969403026404E-04 -3.09772049281573E-20 -5.66754510529614E-03
  3.24659010963508E-03 -2.30175146095186E-03 -1.05955842384277E-03
 -3.24659010963508E-03 -2.30175146095185E-03 -1.05955842384277E-03
  3.24659010963508E-03  2.30175146095186E-03 -1.05955842384277E-03
  3.24659010963508E-03 -2.30175146095185E-03  1.05955842384277E-03
 -3.24659010963508E-03  2.30175146095186E-03  1.05955842384277E-03
 Reduced forces (fred)
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.20804557530770E-02  0.00000000000000E+00  3.02122767554775E-02
 -1.90456575627100E-02  0.00000000000000E+00 -1.51120239638109E-02
  6.33989922035991E-02  0.00000000000000E+00  2.39950093251604E-02
 -1.26605191086353E-02 -5.04870979341448E-29 -4.95001794664342E-02
 -6.18126427078768E-02 -2.54471395526447E-02 -9.25415345814858E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.20804557530770E-02  0.00000000000000E+00  3.02122767554775E-02
  1.90456575627100E-02  3.51240318049656E-28 -1.51120239638109E-02
 -6.33989922035991E-02  0.00000000000000E+00  2.39950093251604E-02
  1.26605191086353E-02  5.04870979341448E-29 -4.95001794664342E-02
  6.18126427078768E-02  2.54471395526447E-02 -9.25415345814858E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
 -2.20804557530770E-02  0.00000000000000E+00 -3.02122767554775E-02
  1.90456575627101E-02  7.34330895147609E-28  1.51120239638109E-02
 -6.33989922035991E-02  0.00000000000000E+00 -2.39950093251604E-02
  1.26605191086353E-02  0.00000000000000E+00  4.95001794664342E-02
  6.18126427078768E-02 -2.54471395526447E-02  9.25415345814858E-03
  0.00000000000000E+00  0.00000000000000E+00  0.00000000000000E+00
  2.20804557530770E-02  0.00000000000000E+00 -3.02122767554775E-02
 -1.90456575627101E-02  0.00000000000000E+00  1.51120239638109E-02
  6.33989922035991E-02  0.00000000000000E+00 -2.39950093251604E-02
 -1.26605191086353E-02  0.00000000000000E+00  4.95001794664342E-02
 -6.18126427078768E-02  2.54471395526447E-02  9.25415345814858E-03
  6.18126427078768E-02  2.54471395526447E-02  9.25415345814858E-03
 -6.18126427078768E-02 -2.54471395526447E-02  9.25415345814858E-03
 -6.18126427078768E-02  2.54471395526447E-02 -9.25415345814858E-03
  6.18126427078768E-02 -2.54471395526447E-02 -9.25415345814858E-03
 Scale of Primitive Cell (acell) [bohr]
  1.90392506046366E+01  1.10555548608717E+01  8.73397186026413E+00
 Real space primitive translations (rprimd) [bohr]
  1.90392506046366E+01  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  1.10555548608717E+01  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00  8.73397186026413E+00
 Unitary Cell Volume (ucvol) [Bohr^3]=  1.83840919144116E+03
 Angles (23,13,12)= [degrees]
  9.00000000000000E+01  9.00000000000000E+01  9.00000000000000E+01
 Lengths [Bohr]
  1.90392506046366E+01  1.10555548608717E+01  8.73397186026413E+00
 Stress tensor in cartesian coordinates (strten) [Ha/bohr^3]
 -1.74913855087168E-04  0.00000000000000E+00  0.00000000000000E+00
  0.00000000000000E+00  9.41529174237170E-05  0.00000000000000E+00
  0.00000000000000E+00  0.00000000000000E+00 -2.65410352241410E-06
 Total energy (etotal) [Ha]= -3.52134939535988E+02

 Difference of energy with previous step (new-old):
           Absolute (Ha)= 7.97856E-04
           Relative     = 2.26577E-06

 fconv : WARNING -
  ntime=   12 was not enough Broyd/MD steps to converge gradients: 
  max grad (force/stress) = 1.7491E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)


--- !RelaxConvergenceWarning
message: | 
    
     fconv : WARNING -
      ntime=   12 was not enough Broyd/MD steps to converge gradients: 
      max grad (force/stress) = 1.7491E-02 > tolmxf= 1.0000E-06 ha/bohr (free atoms)

...
 Geometry Optimization Precondition:           0
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file telast_1o_DS2_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     2.05, wall:     2.77

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   0.6601 [eV], located at k-point      :   0.1250  0.0714  0.0556
   Fundamental gap     =   0.4194 [eV], Top of valence bands at :   0.3750  0.5000  0.5000
                                        Bottom of conduction at :   0.1250  0.0714  0.0556

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.74913855E-04  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  9.41529174E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)= -2.65410352E-06  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure=  8.1805E-01 GPa]
- sigma(1 1)= -5.14614242E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.77007400E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)= -7.80864084E-02  sigma(2 1)=  0.00000000E+00

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell1     1.9524648914E+01  1.1357253191E+01  8.8665943380E+00 Bohr
            acell2     1.9039250605E+01  1.1055554861E+01  8.7339718603E+00 Bohr
              amu      6.94100000E+00  5.58470000E+01  3.09737620E+01
                       1.59994000E+01
        autoparal           1
           diemac      2.00000000E+00
          dilatmx1     1.00000000E+00
          dilatmx2     1.05000000E+00
             ecut      1.50000000E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           etotal1    -3.5209949944E+02
           etotal2    -3.5213493954E+02
            fcart1    -7.7443012320E-20 -0.0000000000E+00 -1.8586322957E-19
                      -5.0519969106E-03 -0.0000000000E+00  1.1999678360E-02
                       2.1968382560E-03 -0.0000000000E+00 -6.8383886590E-03
                      -7.9781528717E-03 -0.0000000000E+00 -2.0533999046E-02
                       1.1516550525E-02  1.3891755197E-31 -1.2674982021E-02
                      -5.9980170543E-04  4.6658117147E-03  4.3665929158E-03
                      -7.7443012320E-20 -0.0000000000E+00 -1.8586322957E-19
                       5.0519969106E-03 -0.0000000000E+00  1.1999678360E-02
                      -2.1968382560E-03 -0.0000000000E+00 -6.8383886590E-03
                       7.9781528717E-03 -0.0000000000E+00 -2.0533999046E-02
                      -1.1516550525E-02 -0.0000000000E+00 -1.2674982021E-02
                       5.9980170543E-04 -4.6658117147E-03  4.3665929158E-03
                      -7.7443012320E-20 -0.0000000000E+00 -1.8586322957E-19
                       5.0519969106E-03 -1.3891755197E-31 -1.1999678360E-02
                      -2.1968382560E-03 -0.0000000000E+00  6.8383886590E-03
                       7.9781528717E-03 -0.0000000000E+00  2.0533999046E-02
                      -1.1516550525E-02  1.0418816398E-31  1.2674982021E-02
                       5.9980170543E-04  4.6658117147E-03 -4.3665929158E-03
                      -7.7443012320E-20 -0.0000000000E+00 -1.8586322957E-19
                      -5.0519969106E-03 -1.3891755197E-31 -1.1999678360E-02
                       2.1968382560E-03 -0.0000000000E+00  6.8383886590E-03
                      -7.9781528717E-03 -0.0000000000E+00  2.0533999046E-02
                       1.1516550525E-02 -1.3891755197E-31  1.2674982021E-02
                      -5.9980170543E-04 -4.6658117147E-03 -4.3665929158E-03
                       5.9980170543E-04 -4.6658117147E-03 -4.3665929158E-03
                      -5.9980170543E-04  4.6658117147E-03 -4.3665929158E-03
                      -5.9980170543E-04 -4.6658117147E-03  4.3665929158E-03
                       5.9980170543E-04  4.6658117147E-03  4.3665929158E-03
            fcart2    -1.5488602464E-20 -3.0977204928E-20 -7.7443012320E-20
                      -1.1597334481E-03 -3.0977204928E-20 -3.4591680897E-03
                       1.0003365131E-03 -3.0977204928E-20  1.7302579177E-03
                      -3.3299100642E-03 -3.0977204928E-20 -2.7473192849E-03
                       6.6496940303E-04 -3.0977204924E-20  5.6675451053E-03
                       3.2465901096E-03  2.3017514610E-03  1.0595584238E-03
                      -1.5488602464E-20 -3.0977204928E-20 -7.7443012320E-20
                       1.1597334481E-03 -3.0977204928E-20 -3.4591680897E-03
                      -1.0003365131E-03 -3.0977204960E-20  1.7302579177E-03
                       3.3299100642E-03 -3.0977204928E-20 -2.7473192849E-03
                      -6.6496940303E-04 -3.0977204933E-20  5.6675451053E-03
                      -3.2465901096E-03 -2.3017514610E-03  1.0595584238E-03
                      -1.5488602464E-20 -3.0977204928E-20 -7.7443012320E-20
                       1.1597334481E-03 -3.0977204928E-20  3.4591680897E-03
                      -1.0003365131E-03 -3.0977204995E-20 -1.7302579177E-03
                       3.3299100642E-03 -3.0977204928E-20  2.7473192849E-03
                      -6.6496940303E-04 -3.0977204928E-20 -5.6675451053E-03
                      -3.2465901096E-03  2.3017514610E-03 -1.0595584238E-03
                      -1.5488602464E-20 -3.0977204928E-20 -7.7443012320E-20
                      -1.1597334481E-03 -3.0977204928E-20  3.4591680897E-03
                       1.0003365131E-03 -3.0977204928E-20 -1.7302579177E-03
                      -3.3299100642E-03 -3.0977204928E-20  2.7473192849E-03
                       6.6496940303E-04 -3.0977204928E-20 -5.6675451053E-03
                       3.2465901096E-03 -2.3017514610E-03 -1.0595584238E-03
                      -3.2465901096E-03 -2.3017514610E-03 -1.0595584238E-03
                       3.2465901096E-03  2.3017514610E-03 -1.0595584238E-03
                       3.2465901096E-03 -2.3017514610E-03  1.0595584238E-03
                      -3.2465901096E-03  2.3017514610E-03  1.0595584238E-03
-          fftalg         312
           getwfk1          0
           getwfk2         -1
          getxred1          0
          getxred2         -1
           iatfix        1    7   13   19
          iatfixy        2    3    4    5    8    9   10   11   14   15
                        16   17   20   21   22   23
           ionmov           2
              ixc          11
           jdtset        1    2
              kpt      1.25000000E-01  7.14285714E-02  5.55555556E-02
                       3.75000000E-01  7.14285714E-02  5.55555556E-02
                       1.25000000E-01  2.14285714E-01  5.55555556E-02
                       3.75000000E-01  2.14285714E-01  5.55555556E-02
                       1.25000000E-01  3.57142857E-01  5.55555556E-02
                       3.75000000E-01  3.57142857E-01  5.55555556E-02
                       1.25000000E-01  5.00000000E-01  5.55555556E-02
                       3.75000000E-01  5.00000000E-01  5.55555556E-02
                       1.25000000E-01  7.14285714E-02  1.66666667E-01
                       3.75000000E-01  7.14285714E-02  1.66666667E-01
                       1.25000000E-01  2.14285714E-01  1.66666667E-01
                       3.75000000E-01  2.14285714E-01  1.66666667E-01
                       1.25000000E-01  3.57142857E-01  1.66666667E-01
                       3.75000000E-01  3.57142857E-01  1.66666667E-01
                       1.25000000E-01  5.00000000E-01  1.66666667E-01
                       3.75000000E-01  5.00000000E-01  1.66666667E-01
                       1.25000000E-01  7.14285714E-02  2.77777778E-01
                       3.75000000E-01  7.14285714E-02  2.77777778E-01
                       1.25000000E-01  2.14285714E-01  2.77777778E-01
                       3.75000000E-01  2.14285714E-01  2.77777778E-01
                       1.25000000E-01  3.57142857E-01  2.77777778E-01
                       3.75000000E-01  3.57142857E-01  2.77777778E-01
                       1.25000000E-01  5.00000000E-01  2.77777778E-01
                       3.75000000E-01  5.00000000E-01  2.77777778E-01
                       1.25000000E-01  7.14285714E-02  3.88888889E-01
                       3.75000000E-01  7.14285714E-02  3.88888889E-01
                       1.25000000E-01  2.14285714E-01  3.88888889E-01
                       3.75000000E-01  2.14285714E-01  3.88888889E-01
                       1.25000000E-01  3.57142857E-01  3.88888889E-01
                       3.75000000E-01  3.57142857E-01  3.88888889E-01
                       1.25000000E-01  5.00000000E-01  3.88888889E-01
                       3.75000000E-01  5.00000000E-01  3.88888889E-01
                       1.25000000E-01  7.14285714E-02  5.00000000E-01
                       3.75000000E-01  7.14285714E-02  5.00000000E-01
                       1.25000000E-01  2.14285714E-01  5.00000000E-01
                       3.75000000E-01  2.14285714E-01  5.00000000E-01
                       1.25000000E-01  3.57142857E-01  5.00000000E-01
                       3.75000000E-01  3.57142857E-01  5.00000000E-01
                       1.25000000E-01  5.00000000E-01  5.00000000E-01
                       3.75000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        4    0    0      0    7    0      0    0    9
          kptrlen      7.80985957E+01
P           mkmem           1
           natfix           4
          natfixy          16
            natom          28
            nband          80
           ndtset           2
            ngfft1         72      40      32
            ngfft2         72      45      36
             nkpt          40
-           npkpt          40
            nstep          40
             nsym           8
            ntime1          5
            ntime2         12
           ntypat           4
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
                       2.000000  2.000000  2.000000  2.000000  0.000000  0.000000
                       0.000000  0.000000
          optcell1          0
          optcell2          2
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup          62
           strten1     4.1182450512E-04  4.6001318590E-04  4.6592105782E-04
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           strten2    -1.7491385509E-04  9.4152917424E-05 -2.6541035224E-06
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0 -1  0   0  0 -1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0  1      -1  0  0   0  1  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.0000000  0.5000000
                       0.0000000  0.5000000  0.0000000     0.5000000  0.5000000  0.5000000
                      -0.0000000 -0.0000000 -0.0000000     0.5000000 -0.0000000  0.5000000
                      -0.0000000  0.5000000 -0.0000000     0.5000000  0.5000000  0.5000000
           tolmxf      1.00000000E-06
           tolvrs      1.00000000E-10
            typat      1  2  3  4  4  4  1  2  3  4  4  4  1  2  3  4  4  4  1  2
                       3  4  4  4  4  4  4  4
              wtk        0.03175    0.03175    0.03175    0.03175    0.03175    0.03175
                         0.01587    0.01587    0.03175    0.03175    0.03175    0.03175
                         0.03175    0.03175    0.01587    0.01587    0.03175    0.03175
                         0.03175    0.03175    0.03175    0.03175    0.01587    0.01587
                         0.03175    0.03175    0.03175    0.03175    0.03175    0.03175
                         0.01587    0.01587    0.01587    0.01587    0.01587    0.01587
                         0.01587    0.01587    0.00794    0.00794
           xangst1     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.8138776964E+00  1.5024998852E+00  4.6370688997E+00
                       9.9157125863E-01  1.5024998852E+00  1.9919269629E+00
                       1.0630792575E+00  1.5024998852E+00  3.5984495876E+00
                       4.6213198586E+00  1.5024998852E+00  9.5430112190E-01
                       1.7855146088E+00  2.1943613480E-01  1.2540118442E+00
                       5.1659996055E+00  0.0000000000E+00  2.3459998207E+00
                       2.3521219091E+00  4.5074996556E+00  2.2910690789E+00
                       4.1744283469E+00  4.5074996556E+00  4.3379267836E+00
                       4.1029203480E+00  4.5074996556E+00  1.2524497669E+00
                       5.4467974690E-01  4.5074996556E+00  3.3003009426E+00
                       3.3804849967E+00  5.7905634061E+00  3.6000116649E+00
                       0.0000000000E+00  3.0049997704E+00  0.0000000000E+00
                       7.5181215146E+00  4.5074996556E+00  5.4930741802E-02
                       9.3404279524E+00  4.5074996556E+00  2.7000726786E+00
                       9.2689199535E+00  4.5074996556E+00  1.0935500539E+00
                       5.7106793524E+00  4.5074996556E+00  3.7376985196E+00
                       8.5464846022E+00  3.2244359052E+00  3.4379877973E+00
                       5.1659996055E+00  3.0049997704E+00  2.3459998207E+00
                       7.9798773019E+00  1.5024998852E+00  2.4009305625E+00
                       6.1575708641E+00  1.5024998852E+00  3.5407285784E-01
                       6.2290788630E+00  1.5024998852E+00  3.4395498746E+00
                       9.7873194641E+00  1.5024998852E+00  1.3916986988E+00
                       6.9515142143E+00  2.7855636356E+00  1.0919879766E+00
                       8.5464846022E+00  5.7905634061E+00  3.4379877973E+00
                       6.9515142143E+00  2.1943613480E-01  1.0919879766E+00
                       1.7855146088E+00  2.7855636356E+00  1.2540118442E+00
                       3.3804849967E+00  3.2244359052E+00  3.6000116649E+00
           xangst2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.7069113536E+00  1.4625869152E+00  4.6177687479E+00
                       9.5899970805E-01  1.4625869152E+00  1.9550575067E+00
                       9.8869890371E-01  1.4625869152E+00  3.5396269137E+00
                       4.5051474153E+00  1.4625869152E+00  9.4310339500E-01
                       1.7108505707E+00  1.6702273466E-01  1.2432658870E+00
                       5.0375687443E+00  0.0000000000E+00  2.3109094245E+00
                       2.3306573907E+00  4.3877607455E+00  2.3068593235E+00
                       4.0785690363E+00  4.3877607455E+00  4.2659669312E+00
                       4.0488698406E+00  4.3877607455E+00  1.2287174892E+00
                       5.3242132901E-01  4.3877607455E+00  3.2540128195E+00
                       3.3267181736E+00  5.6833249260E+00  3.5541753115E+00
                       0.0000000000E+00  2.9251738303E+00  0.0000000000E+00
                       7.3682261350E+00  4.3877607455E+00  4.0501009838E-03
                       9.1161377806E+00  4.3877607455E+00  2.6667613422E+00
                       9.0864385849E+00  4.3877607455E+00  1.0821919352E+00
                       5.5699900733E+00  4.3877607455E+00  3.6787154539E+00
                       8.3642869179E+00  3.0921965650E+00  3.3785529619E+00
                       5.0375687443E+00  2.9251738303E+00  2.3109094245E+00
                       7.7444800979E+00  1.4625869152E+00  2.3149595254E+00
                       5.9965684524E+00  1.4625869152E+00  3.5585191774E-01
                       6.0262676480E+00  1.4625869152E+00  3.3931013597E+00
                       9.5427161596E+00  1.4625869152E+00  1.3678060295E+00
                       6.7484193150E+00  2.7581510957E+00  1.0676435374E+00
                       8.3642869179E+00  5.6833249260E+00  3.3785529619E+00
                       6.7484193150E+00  1.6702273466E-01  1.0676435374E+00
                       1.7108505707E+00  2.7581510957E+00  1.2432658870E+00
                       3.3267181736E+00  3.0921965650E+00  3.5541753115E+00
            xcart1     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.3174582177E+00  2.8393132977E+00  8.7627902797E+00
                       1.8737981200E+00  2.8393132977E+00  3.7641964366E+00
                       2.0089286543E+00  2.8393132977E+00  6.8000842236E+00
                       8.7330289052E+00  2.8393132977E+00  1.8033677687E+00
                       3.3741336170E+00  4.1467419843E-01  2.3697389528E+00
                       9.7623244570E+00  0.0000000000E+00  4.4332971690E+00
                       4.4448662393E+00  8.5179398933E+00  4.3294931107E+00
                       7.8885263370E+00  8.5179398933E+00  8.1974936056E+00
                       7.7533958027E+00  8.5179398933E+00  2.3667870546E+00
                       1.0292955518E+00  8.5179398933E+00  6.2366649377E+00
                       6.3881908400E+00  1.0942578993E+01  6.8030361218E+00
                       0.0000000000E+00  5.6786265955E+00  0.0000000000E+00
                       1.4207190696E+01  8.5179398933E+00  1.0380405828E-01
                       1.7650850794E+01  8.5179398933E+00  5.1023979014E+00
                       1.7515720260E+01  8.5179398933E+00  2.0665101144E+00
                       1.0791620009E+01  8.5179398933E+00  7.0632265693E+00
                       1.6150515297E+01  6.0933007939E+00  6.4968553852E+00
                       9.7623244570E+00  5.6786265955E+00  4.4332971690E+00
                       1.5079782675E+01  2.8393132977E+00  4.5371012273E+00
                       1.1636122577E+01  2.8393132977E+00  6.6910073241E-01
                       1.1771253111E+01  2.8393132977E+00  6.4998072834E+00
                       1.8495353362E+01  2.8393132977E+00  2.6299294003E+00
                       1.3136458074E+01  5.2639523971E+00  2.0635582162E+00
                       1.6150515297E+01  1.0942578993E+01  6.4968553852E+00
                       1.3136458074E+01  4.1467419843E-01  2.0635582162E+00
                       3.3741336170E+00  5.2639523971E+00  2.3697389528E+00
                       6.3881908400E+00  6.0933007939E+00  6.8030361218E+00
            xcart2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.1153211244E+00  2.7638887152E+00  8.7263182786E+00
                       1.8122468097E+00  2.7638887152E+00  3.6945232617E+00
                       1.8683701559E+00  2.7638887152E+00  6.6889254794E+00
                       8.5134948032E+00  2.7638887152E+00  1.7822071315E+00
                       3.2330390329E+00  3.1562722646E-01  2.3494320368E+00
                       9.5196253023E+00  0.0000000000E+00  4.3669859301E+00
                       4.4043041779E+00  8.2916661457E+00  4.3593323485E+00
                       7.7073784926E+00  8.2916661457E+00  8.0615091919E+00
                       7.6512551464E+00  8.2916661457E+00  2.3219395493E+00
                       1.0061304991E+00  8.2916661457E+00  6.1491930617E+00
                       6.2865862694E+00  1.0739927634E+01  6.7164179669E+00
                       0.0000000000E+00  5.5277774304E+00  0.0000000000E+00
                       1.3923929480E+01  8.2916661457E+00  7.6535816700E-03
                       1.7227003795E+01  8.2916661457E+00  5.0394485985E+00
                       1.7170880449E+01  8.2916661457E+00  2.0450463808E+00
                       1.0525755801E+01  8.2916661457E+00  6.9517647287E+00
                       1.5806211572E+01  5.8434046569E+00  6.3845398234E+00
                       9.5196253023E+00  5.5277774304E+00  4.3669859301E+00
                       1.4634946427E+01  2.7638887152E+00  4.3746395118E+00
                       1.1331872112E+01  2.7638887152E+00  6.7246266840E-01
                       1.1387995458E+01  2.7638887152E+00  6.4120323110E+00
                       1.8033120106E+01  2.7638887152E+00  2.5847787986E+00
                       1.2752664335E+01  5.2121502040E+00  2.0175538933E+00
                       1.5806211572E+01  1.0739927634E+01  6.3845398234E+00
                       1.2752664335E+01  3.1562722646E-01  2.0175538933E+00
                       3.2330390329E+00  5.2121502040E+00  2.3494320368E+00
                       6.2865862694E+00  5.8434046569E+00  6.7164179669E+00
             xred1     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.7234590702E-01  2.5000000000E-01  9.8829267988E-01
                       9.5970899569E-02  2.5000000000E-01  4.2453689580E-01
                       1.0289192206E-01  2.5000000000E-01  7.6693304829E-01
                       4.4728225044E-01  2.5000000000E-01  2.0338900145E-01
                       1.7281404812E-01  3.6511838862E-02  2.6726597186E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       2.2765409298E-01  7.5000000000E-01  4.8829267988E-01
                       4.0402910043E-01  7.5000000000E-01  9.2453689580E-01
                       3.9710807794E-01  7.5000000000E-01  2.6693304829E-01
                       5.2717749564E-02  7.5000000000E-01  7.0338900145E-01
                       3.2718595188E-01  9.6348816114E-01  7.6726597186E-01
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       7.2765409298E-01  7.5000000000E-01  1.1707320119E-02
                       9.0402910043E-01  7.5000000000E-01  5.7546310420E-01
                       8.9710807794E-01  7.5000000000E-01  2.3306695171E-01
                       5.5271774956E-01  7.5000000000E-01  7.9661099855E-01
                       8.2718595188E-01  5.3651183886E-01  7.3273402814E-01
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       7.7234590702E-01  2.5000000000E-01  5.1170732012E-01
                       5.9597089957E-01  2.5000000000E-01  7.5463104198E-02
                       6.0289192206E-01  2.5000000000E-01  7.3306695171E-01
                       9.4728225044E-01  2.5000000000E-01  2.9661099855E-01
                       6.7281404812E-01  4.6348816114E-01  2.3273402814E-01
                       8.2718595188E-01  9.6348816114E-01  7.3273402814E-01
                       6.7281404812E-01  3.6511838862E-02  2.3273402814E-01
                       1.7281404812E-01  4.6348816114E-01  2.6726597186E-01
                       3.2718595188E-01  5.3651183886E-01  7.6726597186E-01
             xred2     0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       2.6867239844E-01  2.5000000000E-01  9.9912369976E-01
                       9.5184776300E-02  2.5000000000E-01  4.2300608713E-01
                       9.8132547057E-02  2.5000000000E-01  7.6585150335E-01
                       4.4715493167E-01  2.5000000000E-01  2.0405459968E-01
                       1.6980915374E-01  2.8549198158E-02  2.6899926796E-01
                       5.0000000000E-01  0.0000000000E+00  5.0000000000E-01
                       2.3132760156E-01  7.5000000000E-01  4.9912369976E-01
                       4.0481522370E-01  7.5000000000E-01  9.2300608713E-01
                       4.0186745294E-01  7.5000000000E-01  2.6585150335E-01
                       5.2845068329E-02  7.5000000000E-01  7.0405459968E-01
                       3.3019084626E-01  9.7145080184E-01  7.6899926796E-01
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       7.3132760156E-01  7.5000000000E-01  8.7630024374E-04
                       9.0481522370E-01  7.5000000000E-01  5.7699391287E-01
                       9.0186745294E-01  7.5000000000E-01  2.3414849665E-01
                       5.5284506833E-01  7.5000000000E-01  7.9594540032E-01
                       8.3019084626E-01  5.2854919816E-01  7.3100073204E-01
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       7.6867239844E-01  2.5000000000E-01  5.0087630024E-01
                       5.9518477630E-01  2.5000000000E-01  7.6993912867E-02
                       5.9813254706E-01  2.5000000000E-01  7.3414849665E-01
                       9.4715493167E-01  2.5000000000E-01  2.9594540032E-01
                       6.6980915374E-01  4.7145080184E-01  2.3100073204E-01
                       8.3019084626E-01  9.7145080184E-01  7.3100073204E-01
                       6.6980915374E-01  2.8549198158E-02  2.3100073204E-01
                       1.6980915374E-01  4.7145080184E-01  2.6899926796E-01
                       3.3019084626E-01  5.2854919816E-01  7.6899926796E-01
            znucl        3.00000   26.00000   15.00000    8.00000

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

 [1] Ab initio pseudopotentials for electronic structure calculations of poly-atomic systems, 
 using density-functional theory.
 M. Fuchs, M. Scheffler, Comput. Phys. Commun. 119, 67 (1999).
 Comment : Some pseudopotential generated using the FHI code were used.

 [2] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [3] A brief introduction to the ABINIT software package.
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

 [4] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [5] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
 Proc.   0 individual time (sec): cpu=       6831.0  wall=       6942.3

 Calculation completed.
.Delivered    3 WARNINGs and   0 COMMENTs to log file.
--- !FinalSummary
start_date: Thu Jul 31  0:14:29 2014
end_date: Thu Jul 31  2:10:12 2014
overall_cpu_time:      272732.6
overall_wall_time:      277690.6
...
