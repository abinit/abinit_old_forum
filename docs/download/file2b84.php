  ABINIT 
  
  Give name for formatted input file: 
tmbt_1.in
  Give name for formatted output file:
tmbt_1.out
  Give root name for generic input files:
tmbt_1i
  Give root name for generic output files:
tmbt_1o
  Give root name for generic temporary files:
tmbt_1t

--- !WARNING
message: |
    Finds that output file tmbt_1.out
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmbt_1.out


--- !WARNING
message: |
    Finds that output file tmbt_1.out
     already exists.
src_file: isfile.F90
src_line: 120
...

 new name assigned:tmbt_1.outA


.Version 7.10.4 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.4 computer) 

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

.Starting date : Mon 27 Apr 2015.
- ( at 10h59 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.10.4
  Build target  : x86_64_linux_gnu4.4
  Build date    : 20150424

 === Compiler Suite === 
  C compiler       : gnu4.4
  C++ compiler     : gnu4.4
  Fortran compiler : gnu4.4
  CFLAGS           :  -g -O2 -mtune=native -march=native
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none  -fopenmp
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : intel_xeon

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : yes
  GPU support    : yes

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc+atompaw+wannier90
  FFT flavor    : fftw3
  LINALG flavor : netlib
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
 
          HAVE_DFT_ATOMPAW            HAVE_DFT_LIBXC HAVE_DFT_LIBXC_GET_NUMBER
 
        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...  HAVE_FC_COMMAND_ARGUMENT
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV          HAVE_FC_INT_QUAD
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES
 
        HAVE_FC_MOVE_ALLOC           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED
 
         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                  HAVE_FFT
 
            HAVE_FFT_FFTW3              HAVE_FFT_MPI           HAVE_FFT_SERIAL
 
          HAVE_FORTRAN2003                  HAVE_GPU             HAVE_GPU_CUDA
 
          HAVE_GPU_CUDA_DP           HAVE_GPU_SERIAL               HAVE_GW_DPC
 
        HAVE_LIBPAW_ABINIT               HAVE_LINALG           HAVE_LINALG_MPI
 
        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL       HAVE_MPI_IALLTOALLV
 
               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...                HAVE_NUMPY
 
         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX
 
                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI
 
         HAVE_TIMER_SERIAL              USE_MACROAVE                            
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tmbt_1.in
- output file    -> tmbt_1.outA
- root for input  files -> tmbt_1i
- root for output files -> tmbt_1o

-instrng :    79 lines of input have been read from file tmbt_1.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is 14si.pspnc

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is 8o.pspnc
  read the values zionpsp=  4.0 , pspcod=   1 , lmax=   2
nproj =      1     1     0     0
nprojso =      0     0     0
  read the values zionpsp=  6.0 , pspcod=   1 , lmax=   1
nproj =      1     0     0     0
nprojso =      0     0     0

 inpspheads: deduce mpsang  =   3, n1xccc  =2501.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : spgroup= 154  P3_2 2 1   (=D3^6)
       Simple Lattice Grid

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)
 symspgr : spgroup= 154  P3_2 2 1   (=D3^6)
       Simple Lattice Grid
       Simple Lattice Grid
  dtset%nelect=   48.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00
       Simple Lattice Grid
  dtset%nelect=   48.000000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00
npfft, npband, npspinor and npkpt:     1    1    1    4

--- !WARNING
message: |
    nkpt*nsppol (9) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
src_file: distrb2.F90
src_line: 113
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=3 and mkmem  = 9, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=3 and mkqmem = 9, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=3 and mk1mem = 9, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  2.400000E+01 best grid ngfft=      45      45      48
       max ecut=  2.724975E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    45   45   48
  Augmented FFT divisions ...................    45   45   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    4304
npfft, npband, npspinor and npkpt:     1    1    1    4

--- !WARNING
message: |
    nkpt*nsppol (9) is not a multiple of nproc_kpt (4)
    The k-point parallelisation is not efficient.
src_file: distrb2.F90
src_line: 113
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=3 and mkmem  = 9, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=3 and mkqmem = 9, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=3 and mk1mem = 9, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
 For input ecut=  2.400000E+01 best grid ngfft=      45      45      48
       max ecut=  2.724975E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    45   45   48
  Augmented FFT divisions ...................    45   45   48
  FFT algorithm .............................   312
  FFT cache size ............................    16
 getmpw: optimal value of mpw=    4304

 DATASET    1 : space group P3_2 2 1 (#154); Bravais hP (primitive hexag.)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         1
_ lmnmax =         4   lnmax =         2   mband =        28  mffmem =         1
P  mgfft =        48   mkmem =         3 mpssoang=         3     mpw =      4304
  mqgrid =      3001   natom =         9    nfft =     97200    nkpt =         9
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         6  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      36.242 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     16.552 Mbytes ; DEN or POT disk file :      0.744 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with     11.8672 MBytes.
 memana : allocated an array of     11.867 Mbytes, for testing purposes.
 memana : allocated      36.242 Mbytes, for testing purposes. 
 The job will continue.

 DATASET    2 : space group P3_2 2 1 (#154); Bravais hP (primitive hexag.)

 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         1
_ lmnmax =         4   lnmax =         2   mband =       160  mffmem =         1
P  mgfft =        48   mkmem =         3 mpssoang=         3     mpw =      4304
  mqgrid =      3001   natom =         9    nfft =     97200    nkpt =         9
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =         6  n1xccc =      2501  ntypat =         2  occopt =         1
================================================================================
P This job should need less than                      51.365 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :     94.572 Mbytes ; DEN or POT disk file :      0.744 Mbytes.
================================================================================

 Biggest array : cg(disk), with     31.5254 MBytes.
 memana : allocated an array of     31.525 Mbytes, for testing purposes.
 memana : allocated      51.365 Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =   20
-
 -outvars: echo values of preprocessed input variables --------
            acell      9.2843000799E+00  9.2843000799E+00  1.0213270550E+01 Bohr
              amu      2.80855000E+01  1.59994000E+01
           diemac      4.00000000E+00
             ecut      2.40000000E+01 Hartree
-          fftalg         312
           getden1          0
           getden2         -1
             iscf1          7
             iscf2         -2
           istwfk        1    0    1    0    0    0    0    0    0
           jdtset        1    2
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  3.33333333E-01
                       2.50000000E-01  0.00000000E+00  3.33333333E-01
                       5.00000000E-01  0.00000000E+00  3.33333333E-01
                      -2.50000000E-01  0.00000000E+00  3.33333333E-01
                       2.50000000E-01  2.50000000E-01  3.33333333E-01
         kptrlatt        4    0    0      0    4    0      0    0    3
          kptrlen      3.06398116E+01
          kssform1          1
          kssform2          3
P           mkmem           3
            natom           9
            nband1         28
            nband2        160
         nbandkss1          0
         nbandkss2        150
           nbdbuf1          0
           nbdbuf2         10
           ndtset           2
            ngfft          45      45      48
             nkpt           9
            nstep         200
             nsym           6
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000
            rprim      5.0000000000E-01 -8.6602540378E-01  0.0000000000E+00
                       5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
          spgroup         154
           symrel      1  0  0   0  1  0   0  0  1       1  0  0  -1 -1  0   0  0 -1
                       0  1  0  -1 -1  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1 -1  0   1  0  0   0  0  1      -1 -1  0   0  1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000 -0.3333333     0.0000000  0.0000000 -0.3333333
                       0.0000000  0.0000000  0.3333333     0.0000000  0.0000000  0.3333333
           tolvrs1     1.00000000E-08
           tolvrs2     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-12
            typat      1  1  1  2  2  2  2  2  2
-          useylm           1
-    use_gpu_cuda           1
              wtk        0.02083    0.12500    0.06250    0.12500    0.04167    0.12500
                         0.12500    0.12500    0.25000
           xangst      1.1422818000E+00 -1.9784901142E+00  0.0000000000E+00
                       1.1422818000E+00  1.9784901142E+00  3.6030866667E+00
                      -2.2845636000E+00  0.0000000000E+00  1.8015433333E+00
                       1.6876292400E+00 -6.0843889532E-01  6.4855560000E-01
                      -1.3707381600E+00 -1.1573103463E+00  2.4500989333E+00
                      -3.1689108000E-01  1.7657492417E+00  4.2516422667E+00
                      -3.1689108000E-01 -1.7657492417E+00 -6.4855560000E-01
                       1.6876292400E+00  6.0843889532E-01  2.9545310667E+00
                      -1.3707381600E+00  1.1573103463E+00  1.1529877333E+00
            xcart      2.1585997686E+00 -3.7388044724E+00  0.0000000000E+00
                       2.1585997686E+00  3.7388044724E+00  6.8088470331E+00
                      -4.3171995372E+00  0.0000000000E+00  3.4044235165E+00
                       3.1891570774E+00 -1.1497828807E+00  1.2255924659E+00
                      -2.5903197223E+00 -2.1869996053E+00  4.6300159825E+00
                      -5.9883735515E-01  3.3367824861E+00  8.0344394990E+00
                      -5.9883735515E-01 -3.3367824861E+00 -1.2255924659E+00
                       3.1891570774E+00  1.1497828807E+00  5.5832545671E+00
                      -2.5903197223E+00  2.1869996053E+00  2.1788310506E+00
             xred      4.6500000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  4.6500000000E-01  6.6666666667E-01
                      -4.6500000000E-01 -4.6500000000E-01  3.3333333333E-01
                       4.1500000000E-01  2.7200000000E-01  1.2000000000E-01
                      -1.4300000000E-01 -4.1500000000E-01  4.5333333333E-01
                      -2.7200000000E-01  1.4300000000E-01  7.8666666667E-01
                       1.4300000000E-01 -2.7200000000E-01 -1.2000000000E-01
                       2.7200000000E-01  4.1500000000E-01  5.4666666667E-01
                      -4.1500000000E-01 -1.4300000000E-01  2.1333333333E-01
            znucl       14.00000    8.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   1.

 chkinp: Checking input parameters for consistency, jdtset=   2.
 Checking if input is consistent with KSS generation
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

  ==== OpenMP parallelism is ON ====
- Max_threads:       20
- Num_threads:       20
- Num_procs:         20
- Dynamic:           F
- Nested:            F
 
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
  MPI_WTICK ..................   9.99999999999999955E-007

 setdevice_cuda : COMMENT -
  GPU 0 has been properly initialized, continuing...

 ________________________________________________________________________________
 ________________________ Graphic Card Properties _______________________________

    Device                0 : Tesla K40c
    Revision number:                   3.5
    Total amount of global memory: 11519.6 Mbytes
    Clock rate:                        0.7 GHz
    Max GFLOP:                          89 GFP
    Total  constant memory:          65536 bytes
    Shared memory per block:         49152 bytes
    Number of registers per block:   65536

 ________________________________________________________________________________

================================================================================
== DATASET  1 ==================================================================
-   nproc =    4


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  7.6241917E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  48
         ecut(hartree)=     24.000   => boxcut(ratio)=   2.13111
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is 14si.pspnc
- pspatm: opening atomic psp file    14si.pspnc
-  Troullier-Martins psp for element  Si        Thu Oct 27 17:31:21 EDT 1994
- 14.00000   4.00000    940714                znucl, zion, pspdat
    1    1    2    2      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.907  14.692    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1   2.617   4.181    1   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    2   0.000   0.000    0   2.0872718        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1.80626423934776    0.22824404341771    1.17378968127746   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.43386982
         --- l  ekb(1:nproj) -->
             0    3.287949
             1    1.849886
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is 8o.pspnc
- pspatm: opening atomic psp file    8o.pspnc
-  Troullier-Martins psp for element  O         Thu Oct 27 17:29:57 EDT 1994
-  8.00000   6.00000    940714                znucl, zion, pspdat
    1    1    1    1      2001   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well
    0   5.480  16.893    1   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    1  20.911  28.075    0   1.4482335        l,e99.0,e99.9,nproj,rcpsp
   0.00000000   0.00000000   0.00000000   0.00000000     rms, ekb1, ekb2, epsatm
    0.56990156784787    3.95561236318184    0.63894027514378   rchrg,fchrg,qchrg
 pspatm: epsatm=    1.57752239
         --- l  ekb(1:nproj) -->
             0    5.670783
 pspatm: atomic psp has been read  and splines computed

   6.60803703E+02                                ecore*ucvol(ha*bohr**3)
   1  1  3  2  2  3
   2  3  1  1  3  2
   3  2  2  3  1  1
   4  7  5  8  6  9
   5  8  6  9  4  7
   6  9  4  7  5  8
   7  4  9  6  8  5
   8  5  7  4  9  6
   9  6  8  5  7  4
 wfconv:    28 bands initialized randomly with npw=  4301, for ikpt=     1
 wfconv:    28 bands initialized randomly with npw=  4278, for ikpt=     2
 wfconv:    28 bands initialized randomly with npw=  4304, for ikpt=     3

_setup2: Arith. and geom. avg. npw (full set) are    4280.021    4280.006
 initro : for itypat=  1, take decay length=      1.1000,
 initro : indeed, coreel=     10.0000, nval=  4 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  48
         ecut(hartree)=     24.000   => boxcut(ratio)=   2.13111

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    1.0145E+00  at reduced coord.    0.1111    0.6889    0.9167
,     Minimum=    1.1940E-03  at reduced coord.    0.0000    0.2889    0.1667
,  Integrated=    4.8000E+01
 ETOT  1  -113.02186291663    -1.130E+02 7.506E-02 1.241E+02
 scprqt: <Vxc>= -3.5664608E-01 hartree

Simple mixing update:
  residual square of the potential :   83.095495323294074

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    9.1069E-01  at reduced coord.    0.1111    0.6889    0.9167
,     Minimum=    1.5340E-03  at reduced coord.    0.0000    0.3111    0.1667
,  Integrated=    4.8000E+01
 ETOT  2  -113.08623333931    -6.437E-02 2.139E-03 1.371E+02
 scprqt: <Vxc>= -3.6729588E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.491      0.509

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    9.7469E-01  at reduced coord.    0.1111    0.6889    0.9167
,     Minimum=    1.2491E-03  at reduced coord.    0.0000    0.3111    0.1667
,  Integrated=    4.8000E+01
 ETOT  3  -113.17525116659    -8.902E-02 9.905E-04 8.062E-01
 scprqt: <Vxc>= -3.6114433E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.01      0.312E-01 -0.436E-01

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    9.6968E-01  at reduced coord.    0.1111    0.6889    0.9167
,     Minimum=    1.2626E-03  at reduced coord.    0.0000    0.3111    0.1667
,  Integrated=    4.8000E+01
 ETOT  4  -113.17576446948    -5.133E-04 3.316E-04 9.215E-03
 scprqt: <Vxc>= -3.6154642E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.917      0.104     -0.700E-02 -0.140E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    9.6991E-01  at reduced coord.    0.1111    0.6889    0.9167
,     Minimum=    1.2615E-03  at reduced coord.    0.0000    0.3111    0.1667
,  Integrated=    4.8000E+01
 ETOT  5  -113.17576736622    -2.897E-06 9.888E-05 4.486E-04
 scprqt: <Vxc>= -3.6154369E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.983      0.405E-01 -0.227E-01 -0.187E-02  0.118E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    9.6994E-01  at reduced coord.    0.1111    0.6889    0.9167
,     Minimum=    1.2610E-03  at reduced coord.    0.0000    0.3111    0.1667
,  Integrated=    4.8000E+01
 ETOT  6  -113.17576756024    -1.940E-07 1.093E-04 7.606E-06
 scprqt: <Vxc>= -3.6153644E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.03     -0.873E-02 -0.190E-01 -0.173E-02 -0.477E-04

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    9.6995E-01  at reduced coord.    0.1111    0.6889    0.9167
,     Minimum=    1.2609E-03  at reduced coord.    0.0000    0.3111    0.1667
,  Integrated=    4.8000E+01
 ETOT  7  -113.17576756298    -2.742E-09 4.432E-05 1.538E-07
 scprqt: <Vxc>= -3.6153528E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.17     -0.165     -0.109E-01  0.314E-02  0.174E-03

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    9.6995E-01  at reduced coord.    0.1111    0.6889    0.9167
,     Minimum=    1.2608E-03  at reduced coord.    0.0000    0.3111    0.1667
,  Integrated=    4.8000E+01
 ETOT  8  -113.17576756300    -1.936E-11 5.476E-05 2.273E-09
 scprqt: <Vxc>= -3.6153529E-01 hartree

 At SCF step    8       vres2   =  2.27E-09 < tolvrs=  1.00E-08 =>converged.

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.26669013E-03  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.26669013E-03  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.21849340E-03  sigma(2 1)=  0.00000000E+00

   1  1  3  2  2  3
   2  3  1  1  3  2
   3  2  2  3  1  1
   4  7  5  8  6  9
   5  8  6  9  4  7
   6  9  4  7  5  8
   7  4  9  6  8  5
   8  5  7  4  9  6
   9  6  8  5  7  4
 ioarr: writing density data
ioarr: file name is tmbt_1o_DS1_DEN
ioarr: data written to disk file tmbt_1o_DS1_DEN
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tmbt_1o_DS1_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.96, wall:     0.07

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   5.9799 [eV], located at k-point      :   0.0000  0.0000  0.0000
   Fundamental gap     =   5.7134 [eV], Top of valence bands at :   0.2500  0.2500  0.0000
                                        Bottom of conduction at :   0.0000  0.0000  0.0000

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  1.26669013E-03  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  1.26669013E-03  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  1.21849340E-03  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -3.6795E+01 GPa]
- sigma(1 1)=  3.72673040E+01  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  3.72673040E+01  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  3.58493074E+01  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =    4

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =   4, lnmax  =   2,
                      lmnmaxso=   4, lnmaxso=   2.
 Exchange-correlation functional for the present dataset will be:
  LDA: new Teter (4/93) with spin-polarized option - ixc=1
 Citation for XC functional:
  S. Goedecker, M. Teter, J. Huetter, PRB 54, 1703 (1996)

 Unit cell volume ucvol=  7.6241917E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  48
         ecut(hartree)=     24.000   => boxcut(ratio)=   2.13111
 kpgio: loop on k-points done in parallel
   1  1  3  2  2  3
   2  3  1  1  3  2
   3  2  2  3  1  1
   4  7  5  8  6  9
   5  8  6  9  4  7
   6  9  4  7  5  8
   7  4  9  6  8  5
   8  5  7  4  9  6
   9  6  8  5  7  4
 wfconv:   160 bands initialized randomly with npw=  4301, for ikpt=     1
 wfconv:   160 bands initialized randomly with npw=  4278, for ikpt=     2
 wfconv:   160 bands initialized randomly with npw=  4304, for ikpt=     3

 ioarr: reading density data
ioarr: file name is tmbt_1o_DS1_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 7.10.4           |  ABINIT  code version 7.10.4
. date 20150427 bantot 1440 natom    9  |  date 20150427 bantot  252 natom    9
  nkpt   9 nsym  6 ngfft  45,  45,  48  |  nkpt   9 nsym  6 ngfft  45,  45,  48
  ntypat  2 ecut_eff  24.0000000        |  ntypat  2 ecut_eff  24.0000000
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
     4.6421500  -8.0404397   0.0000000  |     4.6421500  -8.0404397   0.0000000
     4.6421500   8.0404397   0.0000000  |     4.6421500   8.0404397   0.0000000
     0.0000000   0.0000000  10.2132705  |     0.0000000   0.0000000  10.2132705
  nband:                                |  nband:
   160 160 160 160 160 160 160 160 160  |    28  28  28  28  28  28  28  28  28
  symafm:                               |  symafm:
    1  1  1  1  1  1                    |    1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    1  0  0 -1 -1  0  0  0 -1           |    1  0  0 -1 -1  0  0  0 -1
    0  1  0 -1 -1  0  0  0  1           |    0  1  0 -1 -1  0  0  0  1
    0  1  0  1  0  0  0  0 -1           |    0  1  0  1  0  0  0  0 -1
   -1 -1  0  1  0  0  0  0  1           |   -1 -1  0  1  0  0  0  0  1
   -1 -1  0  0  1  0  0  0 -1           |   -1 -1  0  0  1  0  0  0 -1
  typat:                                |  typat:
    1  1  1  2  2  2  2  2  2           |    1  1  1  2  2  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1           |    1  1  1  1  1  1  1  1  1
  kpt:                                  |  kpt:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.2500000   0.0000000   0.0000000  |     0.2500000   0.0000000   0.0000000
     0.5000000   0.0000000   0.0000000  |     0.5000000   0.0000000   0.0000000
     0.2500000   0.2500000   0.0000000  |     0.2500000   0.2500000   0.0000000
     0.0000000   0.0000000   0.3333333  |     0.0000000   0.0000000   0.3333333
  wtk:                                  |  wtk:
    0.021  0.125  0.063  0.125  0.042   |    0.021  0.125  0.063  0.125  0.042
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000  -0.3333333  |     0.0000000   0.0000000  -0.3333333
     0.0000000   0.0000000  -0.3333333  |     0.0000000   0.0000000  -0.3333333
     0.0000000   0.0000000   0.3333333  |     0.0000000   0.0000000   0.3333333
     0.0000000   0.0000000   0.3333333  |     0.0000000   0.0000000   0.3333333
   znucl:                               |   znucl:
   14.00  8.00                          |   14.00  8.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   4.0  |  pspdat 940714 pspcod    1 zion   4.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc   1                   |  pspso   0 pspxc   1
  pspdat 940714 pspcod    1 zion   6.0  |  pspdat 940714 pspcod    1 zion   6.0
  xred:                                 |  xred:
     0.4650000   0.0000000   0.0000000  |     0.4650000   0.0000000   0.0000000
     0.0000000   0.4650000   0.6666667  |     0.0000000   0.4650000   0.6666667
    -0.4650000  -0.4650000   0.3333333  |    -0.4650000  -0.4650000   0.3333333
     0.4150000   0.2720000   0.1200000  |     0.4150000   0.2720000   0.1200000
    -0.1430000  -0.4150000   0.4533333  |    -0.1430000  -0.4150000   0.4533333
    -0.2720000   0.1430000   0.7866667  |    -0.2720000   0.1430000   0.7866667
     0.1430000  -0.2720000  -0.1200000  |     0.1430000  -0.2720000  -0.1200000
     0.2720000   0.4150000   0.5466667  |     0.2720000   0.4150000   0.5466667
    -0.4150000  -0.1430000   0.2133333  |    -0.4150000  -0.1430000   0.2133333
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
ioarr: data read from disk file tmbt_1o_DS1_DEN

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  45  45  48
         ecut(hartree)=     24.000   => boxcut(ratio)=   2.13111
 vtorho : nnsclo_now=200, note that nnsclo,dbl_nnsclo,istep=  0 0  1
   1  1  3  2  2  3
   2  3  1  1  3  2
   3  2  2  3  1  1
   4  7  5  8  6  9
   5  8  6  9  4  7
   6  9  4  7  5  8
   7  4  9  6  8  5
   8  5  7  4  9  6
   9  6  8  5  7  4
 ioarr: writing density data
ioarr: file name is tmbt_1o_DS2_DEN
ioarr: data written to disk file tmbt_1o_DS2_DEN

======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)

--- !WARNING
message: |
    The present version of outkss does not work with useylm/=0 !
     Program does not stop but _KSS file will not be created...
src_file: outkss.F90
src_line: 347
...

 outkss: Not allowed options found !
 Program does not stop but _KSS file will not be created...

--- !WARNING
message: |
    outkss returned a non zero status error, check log
src_file: outscfcv.F90
src_line: 1073
...

================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file tmbt_1o_DS2_WFK, with accesswff -1
 outwf with iomode: -1, cpu:     0.25, wall:     0.25

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      9.2843000799E+00  9.2843000799E+00  1.0213270550E+01 Bohr
              amu      2.80855000E+01  1.59994000E+01
           diemac      4.00000000E+00
             ecut      2.40000000E+01 Hartree
           etotal1    -1.1317576756E+02
            fcart1    -9.0942069443E+00  1.5751628482E+01  7.4973142209E-29
                      -9.0942069443E+00 -1.5751628482E+01 -0.0000000000E+00
                       1.8188413889E+01  1.4210854715E-14 -0.0000000000E+00
                       1.2953992804E+02 -2.7604338050E+02  1.5883509662E+02
                      -3.0383054408E+02  2.5836821765E+01  1.5883509662E+02
                       1.7429061604E+02  2.5020655874E+02  1.5883509662E+02
                       1.7429061604E+02 -2.5020655874E+02 -1.5883509662E+02
                       1.2953992804E+02  2.7604338050E+02 -1.5883509662E+02
                      -3.0383054408E+02 -2.5836821765E+01 -1.5883509662E+02
-          fftalg         312
           getden1          0
           getden2         -1
             iscf1          7
             iscf2         -2
           istwfk        1    0    1    0    0    0    0    0    0
           jdtset        1    2
              kpt      0.00000000E+00  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  3.33333333E-01
                       2.50000000E-01  0.00000000E+00  3.33333333E-01
                       5.00000000E-01  0.00000000E+00  3.33333333E-01
                      -2.50000000E-01  0.00000000E+00  3.33333333E-01
                       2.50000000E-01  2.50000000E-01  3.33333333E-01
         kptrlatt        4    0    0      0    4    0      0    0    3
          kptrlen      3.06398116E+01
          kssform1          1
          kssform2          3
P           mkmem           3
            natom           9
            nband1         28
            nband2        160
         nbandkss1          0
         nbandkss2        150
           nbdbuf1          0
           nbdbuf2         10
           ndtset           2
            ngfft          45      45      48
             nkpt           9
            nstep         200
             nsym           6
           ntypat           2
              occ      2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       2.000000  2.000000  2.000000  2.000000  2.000000  2.000000
                       0.000000  0.000000  0.000000  0.000000
            rprim      5.0000000000E-01 -8.6602540378E-01  0.0000000000E+00
                       5.0000000000E-01  8.6602540378E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.0000000000E+00
          spgroup         154
           strten1     1.2666901304E-03  1.2666901304E-03  1.2184933974E-03
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
           symrel      1  0  0   0  1  0   0  0  1       1  0  0  -1 -1  0   0  0 -1
                       0  1  0  -1 -1  0   0  0  1       0  1  0   1  0  0   0  0 -1
                      -1 -1  0   1  0  0   0  0  1      -1 -1  0   0  1  0   0  0 -1
            tnons      0.0000000  0.0000000  0.0000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000 -0.3333333     0.0000000  0.0000000 -0.3333333
                       0.0000000  0.0000000  0.3333333     0.0000000  0.0000000  0.3333333
           tolvrs1     1.00000000E-08
           tolvrs2     0.00000000E+00
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-12
            typat      1  1  1  2  2  2  2  2  2
-          useylm           1
-    use_gpu_cuda           1
              wtk        0.02083    0.12500    0.06250    0.12500    0.04167    0.12500
                         0.12500    0.12500    0.25000
           xangst      1.1422818000E+00 -1.9784901142E+00  0.0000000000E+00
                       1.1422818000E+00  1.9784901142E+00  3.6030866667E+00
                      -2.2845636000E+00  0.0000000000E+00  1.8015433333E+00
                       1.6876292400E+00 -6.0843889532E-01  6.4855560000E-01
                      -1.3707381600E+00 -1.1573103463E+00  2.4500989333E+00
                      -3.1689108000E-01  1.7657492417E+00  4.2516422667E+00
                      -3.1689108000E-01 -1.7657492417E+00 -6.4855560000E-01
                       1.6876292400E+00  6.0843889532E-01  2.9545310667E+00
                      -1.3707381600E+00  1.1573103463E+00  1.1529877333E+00
            xcart      2.1585997686E+00 -3.7388044724E+00  0.0000000000E+00
                       2.1585997686E+00  3.7388044724E+00  6.8088470331E+00
                      -4.3171995372E+00  0.0000000000E+00  3.4044235165E+00
                       3.1891570774E+00 -1.1497828807E+00  1.2255924659E+00
                      -2.5903197223E+00 -2.1869996053E+00  4.6300159825E+00
                      -5.9883735515E-01  3.3367824861E+00  8.0344394990E+00
                      -5.9883735515E-01 -3.3367824861E+00 -1.2255924659E+00
                       3.1891570774E+00  1.1497828807E+00  5.5832545671E+00
                      -2.5903197223E+00  2.1869996053E+00  2.1788310506E+00
             xred      4.6500000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  4.6500000000E-01  6.6666666667E-01
                      -4.6500000000E-01 -4.6500000000E-01  3.3333333333E-01
                       4.1500000000E-01  2.7200000000E-01  1.2000000000E-01
                      -1.4300000000E-01 -4.1500000000E-01  4.5333333333E-01
                      -2.7200000000E-01  1.4300000000E-01  7.8666666667E-01
                       1.4300000000E-01 -2.7200000000E-01 -1.2000000000E-01
                       2.7200000000E-01  4.1500000000E-01  5.4666666667E-01
                      -4.1500000000E-01 -1.4300000000E-01  2.1333333333E-01
            znucl       14.00000    8.00000

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

 [1] ABINIT : First-principles approach of materials and nanosystem properties.
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

 [2] A brief introduction to the ABINIT software package.
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

 [3] First-principles computation of material properties : the ABINIT software project. 
 X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
 M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
 Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
 Comment : the original paper describing the ABINIT project.

 [4] Fast radix 2, 3, 4 and 5 kernels for Fast Fourier Transformations
 on computers with overlapping multiply-add instructions.
 S. Goedecker, SIAM J. on Scientific Computing 18, 1605 (1997).
 Proc.   0 individual time (sec): cpu=     326996.4  wall=      49581.8

 Calculation completed.
.Delivered    0 WARNINGs and   0 COMMENTs to log file.
--- !FinalSummary
start_date: Mon Apr 27 10:59:21 2015
end_date: Tue Apr 28  0:45:43 2015
overall_cpu_time:      989725.6
overall_wall_time:      198327.1
...
989441.72user 284.74system 13:46:22elapsed 1996%CPU (0avgtext+0avgdata 1335280maxresident)k
0inputs+231944outputs (0major+194255minor)pagefaults 0swaps
