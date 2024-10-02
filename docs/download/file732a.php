  ABINIT 8.10.2
  
  Give name for formatted input file: 
ab.in
  Give name for formatted output file:
ab.out
  Give root name for generic input files:
abi
  Give root name for generic output files:
abo
  Give root name for generic temporary files:
tmp

.Version 8.10.2 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu6.3 computer) 

.Copyright (C) 1998-2018 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Mon  8 Apr 2019.
- ( at 22h44 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 8.10.2
  Build target  : x86_64_linux_gnu6.3
  Build date    : 20190203

 === Compiler Suite === 
  C compiler       : gnu6.3
  C++ compiler     : gnu6.3
  Fortran compiler : gnu6.3
  CFLAGS           :  -g -O3 -mtune=native -march=native
  CXXFLAGS         :  -g -O3 -mtune=native -march=native
  FCFLAGS          :  -g -ffree-line-length-none
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : aggressive
  Architecture       : intel_xeon

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : no
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc
  FFT flavor    : fftw3-mpi
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
   -O3 -mtune=native -march=native -funroll-loops -faggressive-function-elimination


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                    CC_GNU                   CXX_GNU                    FC_GNU
 
 HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC         HAVE_FC_BACKTRACE
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA            HAVE_FC_GETENV   HAVE_FC_IEEE_EXCEPTIONS
 
          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING
 
  HAVE_FC_ISO_FORTRAN_2008        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED         HAVE_FC_STREAM_IO
 
            HAVE_FC_SYSTEM                  HAVE_FFT            HAVE_FFT_FFTW3
 
        HAVE_FFT_FFTW3_MPI    HAVE_FFT_FFTW3_THREADS              HAVE_FFT_MPI
 
           HAVE_FFT_SERIAL          HAVE_FORTRAN2003        HAVE_LIBPAW_ABINIT
 
      HAVE_LIBTETRA_ABINIT                HAVE_LIBXC               HAVE_LINALG
 
         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M           HAVE_LINALG_MPI
 
        HAVE_LINALG_SERIAL                  HAVE_MPI                 HAVE_MPI2
 
         HAVE_MPI2_INPLACE       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL
 
       HAVE_MPI_IALLTOALLV        HAVE_MPI_INTEGER16               HAVE_MPI_IO
 
 HAVE_MPI_TYPE_CREATE_S...             HAVE_OS_LINUX         HAVE_TIMER_ABINIT
 
              USE_MACROAVE                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> ab.in
- output file    -> ab.out
- root for input  files -> abi
- root for output files -> abo

-instrng: 115 lines of input have been read from file ab.in


 Please give name of formatted atomic psp file
 iofn2 : for atom type 1, psp file is w.paw.xml

 Please give name of formatted atomic psp file
 iofn2 : for atom type 2, psp file is s.paw.xml
- inpspheads : Reading pseudopotential header in XML form from w.paw.xml
- inpspheads : Reading pseudopotential header in XML form from s.paw.xml

 inpspheads: deduce mpsang = 3, n1xccc = 1.
 invars1 : treat image number: 1

 symlatt : the Bravais lattice is hP (primitive hexagonal)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is hP (primitive hexagonal)

 symlatt : the Bravais lattice is hP (primitive hexagonal)

--- !COMMENT
src_file: m_symfind.F90
src_line: 815
message: |
    The Bravais lattice determined only from the primitive
    vectors, bravais(1)=  6, is more symmetric
    than the real one, iholohedry=  1, obtained by taking into
    account the atomic positions. Start deforming the primitive vector set.
...


 symlatt : the Bravais lattice is oC (one-face-centered orthorhombic)

--- !COMMENT
src_file: m_symfind.F90
src_line: 824
message: |
    The Bravais lattice determined from modified primitive
    vectors, bravais(1)=  3, has a lower symmetry than before,
    but is still more symmetric than the real one, iholohedry=  1
    obtained by taking into account the atomic positions.
...


 symlatt : the Bravais lattice is aP (primitive triclinic)
 symspgr : spgroup=   1  P1   (=C1^1)
 ingeo: angdeg(1:3)=   90.00000000   90.00000000  120.00000000
 invars2: read the value of fband=  0.00000000E+00 from input file.
 chkneu : initialized the occupation numbers for occopt=    1, spin-unpolarized or antiferromagnetic case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
npfft, npband, npspinor and npkpt:     1    1    1   13
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 13, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 13, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 13, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  1.837466E+01 best grid ngfft=      48      48     300
       max ecut=  1.932595E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48  300
  Augmented FFT divisions ...................    49   49  300
  FFT algorithm .............................   312
  FFT cache size ............................ 32384
 getmpw: optimal value of mpw= 35312
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  2.572453E+01 best grid ngfft=      60      60     360
       max ecut=  2.782937E+01

 ==== FFT mesh ====
  FFT mesh divisions ........................    60   60  360
  Augmented FFT divisions ...................    61   61  360
  FFT algorithm .............................   312
  FFT cache size ............................ 32384

 DATASET    4 : space group P1 (#  1); Bravais aP (primitive triclinic)

 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  4.
     intxc =       0    ionmov =       0      iscf =      17    lmnmax =      18
     lnmax =       6     mgfft =     300  mpssoang =       3    mqgrid =   17306
     natom =      24  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =       1    n1xccc =       1    ntypat =       2
    occopt =       1   xclevel =       2
-    mband =         104        mffmem =           1         mkmem =           1
       mpw =       35312          nfft =      691200          nkpt =          13
Pmy_natom=         2
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=       360    nfftf =   1296000
================================================================================
P This job should need less than                     611.611 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    728.484 Mbytes ; DEN or POT disk file :      9.890 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with    105.4708 MBytes.
 memana : allocated an array of    105.471 Mbytes, for testing purposes.
 memana: allocated     611.611Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =312 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      1.83850000E+02  3.20660000E+01
         berryopt           4
             ecut      1.83746627E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           efield      0.00000000E+00  0.00000000E+00  5.00000000E-04
-          fftalg         312
         fftcache       32384
           irdden           1
           irdwfk           1
           istwfk        0    0    0    0    0    0    0    0    0    0
                         0    0    1
              ixc          11
           jdtset        4
              kpt      1.00000000E-01  1.00000000E-01  5.00000000E-01
                       3.00000000E-01  1.00000000E-01  5.00000000E-01
                       5.00000000E-01  1.00000000E-01  5.00000000E-01
                      -3.00000000E-01  1.00000000E-01  5.00000000E-01
                      -1.00000000E-01  1.00000000E-01  5.00000000E-01
                       1.00000000E-01  3.00000000E-01  5.00000000E-01
                       3.00000000E-01  3.00000000E-01  5.00000000E-01
                       5.00000000E-01  3.00000000E-01  5.00000000E-01
                      -3.00000000E-01  3.00000000E-01  5.00000000E-01
                      -1.00000000E-01  3.00000000E-01  5.00000000E-01
                       1.00000000E-01  5.00000000E-01  5.00000000E-01
                       3.00000000E-01  5.00000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        5    0    0      0    5    0      0    0    1
          kptrlen      5.97234168E+01
P           mkmem           1
            natom          24
            nband         104
           ndtset           1
            ngfft          48      48     300
          ngfftdg          60      60     360
             nkpt          13
         npulayit           9
            nstep        1000
             nsym           1
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
                       2.000000  2.000000
        pawecutdg      2.57245278E+01 Hartree
            rprim      1.1944683354E+01  0.0000000000E+00  0.0000000000E+00
                      -5.9723416772E+00  1.0344399225E+01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.5797647904E+01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
        symmorphi           0
           toldfe      1.00000000E-10 Hartree
            typat      1  1  1  1  1  1  1  1  2  2  2  2  2  2  2  2  2  2  2  2
                       2  2  2  2
           useylm           1
      vdw_tol_3bt      1.00000000E-10
           vdw_xc           7
         wfoptalg         114
              wtk        0.08000    0.08000    0.08000    0.08000    0.08000    0.08000
                         0.08000    0.08000    0.08000    0.08000    0.08000    0.08000
                         0.04000
           xangst     -1.5802114483E-11  1.8246734355E+00  3.7048044602E+01
                       3.1604270975E+00  1.8246734355E+00  3.7048044602E+01
                      -1.5802135488E+00  4.5616835887E+00  3.7048044602E+01
                       1.5802135487E+00  4.5616835887E+00  3.7048044602E+01
                       1.5802135488E+00  9.1233671773E-01  3.0623431334E+00
                       4.7406406462E+00  9.1233671773E-01  3.0623431334E+00
                       1.5801996982E-11  3.6493468709E+00  3.0623431334E+00
                       3.1604270975E+00  3.6493468709E+00  3.0623431334E+00
                       1.6474922469E-03  1.8246734355E+00  1.4974307728E+00
                       3.1604270975E+00  1.8246734355E+00  1.4869762438E+00
                      -1.5802135488E+00  4.5616835887E+00  1.4869762438E+00
                       1.5802135487E+00  4.5616835887E+00  1.4869762438E+00
                       1.5802135488E+00  9.1233671773E-01  3.8623411492E+01
                       4.7406406462E+00  9.1233671773E-01  3.8623411492E+01
                       1.5801996982E-11  3.6493468709E+00  3.8623411492E+01
                       3.1604270975E+00  3.6493468709E+00  3.8623411492E+01
                       1.5802135488E+00  9.1233671773E-01  3.5471076390E+01
                       4.7406406462E+00  9.1233671773E-01  3.5471076390E+01
                       1.5801996982E-11  3.6493468709E+00  3.5471076390E+01
                       3.1604270975E+00  3.6493468709E+00  3.5471076390E+01
                      -1.5802114483E-11  1.8246734355E+00  4.6393113459E+00
                       3.1604270975E+00  1.8246734355E+00  4.6393113459E+00
                      -1.5802135488E+00  4.5616835887E+00  4.6393113459E+00
                       1.5802135487E+00  4.5616835887E+00  4.6393113459E+00
            xcart     -2.9861668693E-11  3.4481330750E+00  7.0010658057E+01
                       5.9723416772E+00  3.4481330750E+00  7.0010658057E+01
                      -2.9861708386E+00  8.6203326875E+00  7.0010658057E+01
                       2.9861708386E+00  8.6203326875E+00  7.0010658057E+01
                       2.9861708386E+00  1.7240665375E+00  5.7869898471E+00
                       8.9585125158E+00  1.7240665375E+00  5.7869898471E+00
                       2.9861446649E-11  6.8962661500E+00  5.7869898471E+00
                       5.9723416772E+00  6.8962661500E+00  5.7869898471E+00
                       3.1133091526E-03  3.4481330750E+00  2.8297340636E+00
                       5.9723416772E+00  3.4481330750E+00  2.8099778670E+00
                      -2.9861708386E+00  8.6203326875E+00  2.8099778670E+00
                       2.9861708386E+00  8.6203326875E+00  2.8099778670E+00
                       2.9861708386E+00  1.7240665375E+00  7.2987670037E+01
                       8.9585125158E+00  1.7240665375E+00  7.2987670037E+01
                       2.9861446649E-11  6.8962661500E+00  7.2987670037E+01
                       5.9723416772E+00  6.8962661500E+00  7.2987670037E+01
                       2.9861708386E+00  1.7240665375E+00  6.7030620015E+01
                       8.9585125158E+00  1.7240665375E+00  6.7030620015E+01
                       2.9861446649E-11  6.8962661500E+00  6.7030620015E+01
                       5.9723416772E+00  6.8962661500E+00  6.7030620015E+01
                      -2.9861668693E-11  3.4481330750E+00  8.7670278890E+00
                       5.9723416772E+00  3.4481330750E+00  8.7670278890E+00
                      -2.9861708386E+00  8.6203326875E+00  8.7670278890E+00
                       2.9861708386E+00  8.6203326875E+00  8.7670278890E+00
             xred      1.6666666666E-01  3.3333333333E-01  9.2365211841E-01
                       6.6666666666E-01  3.3333333333E-01  9.2365211841E-01
                       1.6666666667E-01  8.3333333333E-01  9.2365211841E-01
                       6.6666666666E-01  8.3333333333E-01  9.2365211841E-01
                       3.3333333333E-01  1.6666666666E-01  7.6347881592E-02
                       8.3333333333E-01  1.6666666666E-01  7.6347881592E-02
                       3.3333333333E-01  6.6666666666E-01  7.6347881592E-02
                       8.3333333333E-01  6.6666666666E-01  7.6347881592E-02
                       1.6692731059E-01  3.3333333333E-01  3.7332742399E-02
                       6.6666666666E-01  3.3333333333E-01  3.7072098471E-02
                       1.6666666667E-01  8.3333333333E-01  3.7072098471E-02
                       6.6666666666E-01  8.3333333333E-01  3.7072098471E-02
                       3.3333333333E-01  1.6666666666E-01  9.6292790153E-01
                       8.3333333333E-01  1.6666666666E-01  9.6292790153E-01
                       3.3333333333E-01  6.6666666666E-01  9.6292790153E-01
                       8.3333333333E-01  6.6666666666E-01  9.6292790153E-01
                       3.3333333333E-01  1.6666666666E-01  8.8433641239E-01
                       8.3333333333E-01  1.6666666666E-01  8.8433641239E-01
                       3.3333333333E-01  6.6666666666E-01  8.8433641239E-01
                       8.3333333333E-01  6.6666666666E-01  8.8433641239E-01
                       1.6666666666E-01  3.3333333333E-01  1.1566358761E-01
                       6.6666666666E-01  3.3333333333E-01  1.1566358761E-01
                       1.6666666667E-01  8.3333333333E-01  1.1566358761E-01
                       6.6666666666E-01  8.3333333333E-01  1.1566358761E-01
            znucl       74.00000   16.00000

================================================================================

 chkinp: Checking input parameters for consistency, jdtset=   4.
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
  MPI_WTICK ..................    1.0000000000000001E-009

================================================================================
== DATASET  4 ==================================================================
-   nproc =   13


--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 251
message: |
    xgScalapack in auto mode
...


 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Exchange-correlation functional for the present dataset will be:
  GGA: Perdew-Burke-Ernzerhof functional - ixc=11
 Citation for XC functional:
  J.P.Perdew, K.Burke, M.Ernzerhof, PRL 77, 3865 (1996)


--- !WARNING
src_file: m_fftw3.F90
src_line: 2637
message: |
    Using FFTW3 with threads but HAVE_OPENMP is not defined!
...


--- !WARNING
src_file: m_fftw3.F90
src_line: 2556
message: |
    Using FFTW3 with threads but HAVE_OPENMP is not defined!
...

 Unit cell volume ucvol=  9.3656008E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  1.20000000E+02 degrees

 Coarse grid specifications (used for wave-functions):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48 300
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.05112

 Fine grid specifications (used for densities):

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  60  60 360
         ecut(hartree)=     25.725   => boxcut(ratio)=   2.08021
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is w.paw.xml
- pspatm: opening atomic psp file    w.paw.xml
- pspatm : Reading pseudopotential header in XML form from w.paw.xml

--- !WARNING
src_file: m_pspini.F90
src_line: 1088
message: |
    Pseudopotential file pspxc= -101130,
    not equal to input ixc= 11.
    These parameters must agree to get the same xc 
    in ABINIT code as in psp construction.
    Action: check psp design or input file.
    Assume experienced user. Execution will continue.
...

 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.41000000
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 971 , AA= 0.19312E-03 BB= 0.14291E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  2.11911544
 mmax=  971
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to  809 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.728976E+02
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is s.paw.xml
- pspatm: opening atomic psp file    s.paw.xml
- pspatm : Reading pseudopotential header in XML form from s.paw.xml

--- !WARNING
src_file: m_pspini.F90
src_line: 1088
message: |
    Pseudopotential file pspxc= -101130,
    not equal to input ixc= 11.
    These parameters must agree to get the same xc 
    in ABINIT code as in psp construction.
    Action: check psp design or input file.
    Assume experienced user. Execution will continue.
...

 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.91526572
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1400 , AA= 0.53252E-03 BB= 0.85203E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.60139517
 mmax= 1400
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1237 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.672555E+01
 pspatm: atomic psp has been read  and splines computed

   8.63774129E+04                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  PAW calculation
  Number of pseudopotentials ..    2
  Number of types of atoms   ..    2
  Scalar calculation (no spin-orbit term)
  Nonlocal part applied using real spherical harmonics
  Max number of non-local projectors over l and type   2
  Highest angular momentum +1 .......   3
  Max number of (l,n)   components ..   6
  Max number of (l,m,n) components ..  18

 Pseudo-Core Charge Info: 
   Number of radial points for pseudo-core charge ..    1
   XC core-correction treatment (optnlxccc) ........    1
   Radius for pseudo-core charge for each type ..... 

  - Atom type    1 has pseudo-core radius .. *******
  - Atom type    2 has pseudo-core radius .. 80.0000

 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..  14627
   Number of q-points for vlspl ...................  17306
   vloc is computed in Reciprocal Space

  XC functional for type 1 is -101130
  XC functional for type 2 is -101130

inwffil: examining the header of disk file abi_DS4_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20190408 bantot 1352 natom   24  |  date 20190408 bantot 1391 natom   24
  nkpt  13 nsym  1 ngfft  60,  60, 360  |  nkpt  13 nsym  1 ngfft  60,  60, 360
  ntypat  2 ecut_eff  18.3746627        |  ntypat  2 ecut_eff  18.3746627
  usepaw  1                             |  usepaw  1
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    11.9446834   0.0000000   0.0000000  |    11.9446834   0.0000000   0.0000000
    -5.9723417  10.3443992   0.0000000  |    -5.9723417  10.3443992   0.0000000
     0.0000000   0.0000000  75.7976479  |     0.0000000   0.0000000  75.7976479
  PAW: ecutdg   25.724528               |  PAW: ecutdg   25.724528
  nband:                                |  nband:
   104 104 104 104 104 104 104 104 104  |   107 107 107 107 107 107 107 107 107
   104 104 104 104                      |   107 107 107 107

--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num1 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num2 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num3 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num4 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num5 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num6 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num7 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num8 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num9 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num10 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num11 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num12 input nband=104 not equal disk file nband=107
...


--- !WARNING
src_file: m_hdr.F90
src_line: 4161
message: |
    kpt num13 input nband=104 not equal disk file nband=107
...

  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  1  1  1  1  1  1  1  2  2  2  2  |    1  1  1  1  1  1  1  1  2  2  2  2
    2  2  2  2  2  2  2  2  2  2  2  2  |    2  2  2  2  2  2  2  2  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1                                   |    1
  kpt:                                  |  kpt:
     0.1000000   0.1000000   0.5000000  |     0.1000000   0.1000000   0.5000000
     0.3000000   0.1000000   0.5000000  |     0.3000000   0.1000000   0.5000000
     0.5000000   0.1000000   0.5000000  |     0.5000000   0.1000000   0.5000000
    -0.3000000   0.1000000   0.5000000  |    -0.3000000   0.1000000   0.5000000
    -0.1000000   0.1000000   0.5000000  |    -0.1000000   0.1000000   0.5000000
  wtk:                                  |  wtk:
    0.080  0.080  0.080  0.080  0.080   |    0.080  0.080  0.080  0.080  0.080
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   74.00 16.00                          |   74.00 16.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc ***  lmn_size  18     |  pspso   0 pspxc ***  lmn_size  18
  pspdat ****** pspcod   17 zion  14.0  |  pspdat ****** pspcod   17 zion  14.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc ***  lmn_size   8     |  pspso   0 pspxc ***  lmn_size   8
  pspdat ****** pspcod   17 zion   6.0  |  pspdat ****** pspcod   17 zion   6.0
  xred:                                 |  xred:
     0.1666667   0.3333333   0.9236521  |     0.1666667   0.3333333   0.9236521
     0.6666667   0.3333333   0.9236521  |     0.6666667   0.3333333   0.9236521
     0.1666667   0.8333333   0.9236521  |     0.1666667   0.8333333   0.9236521
     0.6666667   0.8333333   0.9236521  |     0.6666667   0.8333333   0.9236521
     0.3333333   0.1666667   0.0763479  |     0.3333333   0.1666667   0.0763479
     0.8333333   0.1666667   0.0763479  |     0.8333333   0.1666667   0.0763479
     0.3333333   0.6666667   0.0763479  |     0.3333333   0.6666667   0.0763479
     0.8333333   0.6666667   0.0763479  |     0.8333333   0.6666667   0.0763479
     0.1669273   0.3333333   0.0373327  |     0.1669273   0.3333333   0.0373327
     0.6666667   0.3333333   0.0370721  |     0.6666667   0.3333333   0.0370721
     0.1666667   0.8333333   0.0370721  |     0.1666667   0.8333333   0.0370721
     0.6666667   0.8333333   0.0370721  |     0.6666667   0.8333333   0.0370721
     0.3333333   0.1666667   0.9629279  |     0.3333333   0.1666667   0.9629279
     0.8333333   0.1666667   0.9629279  |     0.8333333   0.1666667   0.9629279
     0.3333333   0.6666667   0.9629279  |     0.3333333   0.6666667   0.9629279
     0.8333333   0.6666667   0.9629279  |     0.8333333   0.6666667   0.9629279
     0.3333333   0.1666667   0.8843364  |     0.3333333   0.1666667   0.8843364
     0.8333333   0.1666667   0.8843364  |     0.8333333   0.1666667   0.8843364
     0.3333333   0.6666667   0.8843364  |     0.3333333   0.6666667   0.8843364
     0.8333333   0.6666667   0.8843364  |     0.8333333   0.6666667   0.8843364
     0.1666667   0.3333333   0.1156636  |     0.1666667   0.3333333   0.1156636
     0.6666667   0.3333333   0.1156636  |     0.6666667   0.3333333   0.1156636
     0.1666667   0.8333333   0.1156636  |     0.1666667   0.8333333   0.1156636
     0.6666667   0.8333333   0.1156636  |     0.6666667   0.8333333   0.1156636
 hdr_check:  Wavefunction file is OK for direct restart of calculation
================================================================================
-inwffil : will read wavefunctions from disk file abi_DS4_WFK
 initwf: disk file gives npw= 35268 nband= 107 for kpt number= 1

--- !COMMENT
src_file: m_inwffil.F90
src_line: 1961
message: |
    For kpt number 1 disk file has 107 bands
    but input file gave nband= 104.
    This is not fatal. Bands are skipped or filled with random numbers.
...

 initwf: 107 bands have been initialized from disk
_setup2: Arith. and geom. avg. npw (full set) are   35227.520   35227.453
 About to read data(r) from: abi_DS4_DEN

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a density         |  input file contains a density
. ABINIT  code version 8.10.2           |  ABINIT  code version 8.10.2
. date 20190408 bantot 1352 natom   24  |  date 20190408 bantot 1391 natom   24
  nkpt  13 nsym  1 ngfft  60,  60, 360  |  nkpt  13 nsym  1 ngfft  60,  60, 360
  ntypat  2 ecut_eff  18.3746627        |  ntypat  2 ecut_eff  18.3746627
  usepaw  1                             |  usepaw  1
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:
    11.9446834   0.0000000   0.0000000  |    11.9446834   0.0000000   0.0000000
    -5.9723417  10.3443992   0.0000000  |    -5.9723417  10.3443992   0.0000000
     0.0000000   0.0000000  75.7976479  |     0.0000000   0.0000000  75.7976479
  PAW: ecutdg   25.724528               |  PAW: ecutdg   25.724528
  nband:                                |  nband:
   104 104 104 104 104 104 104 104 104  |   107 107 107 107 107 107 107 107 107
   104 104 104 104                      |   107 107 107 107
  symafm:                               |  symafm:
    1                                   |    1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
  typat:                                |  typat:
    1  1  1  1  1  1  1  1  2  2  2  2  |    1  1  1  1  1  1  1  1  2  2  2  2
    2  2  2  2  2  2  2  2  2  2  2  2  |    2  2  2  2  2  2  2  2  2  2  2  2
  so_psp  :                             |  so_psp  :
    1  1                                |    1  1
  istwfk:                               |  istwfk:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1                                   |    1
  kpt:                                  |  kpt:
     0.1000000   0.1000000   0.5000000  |     0.1000000   0.1000000   0.5000000
     0.3000000   0.1000000   0.5000000  |     0.3000000   0.1000000   0.5000000
     0.5000000   0.1000000   0.5000000  |     0.5000000   0.1000000   0.5000000
    -0.3000000   0.1000000   0.5000000  |    -0.3000000   0.1000000   0.5000000
    -0.1000000   0.1000000   0.5000000  |    -0.1000000   0.1000000   0.5000000
  wtk:                                  |  wtk:
    0.080  0.080  0.080  0.080  0.080   |    0.080  0.080  0.080  0.080  0.080
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
   znucl:                               |   znucl:
   74.00 16.00                          |   74.00 16.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc ***  lmn_size  18     |  pspso   0 pspxc ***  lmn_size  18
  pspdat ****** pspcod   17 zion  14.0  |  pspdat ****** pspcod   17 zion  14.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc ***  lmn_size   8     |  pspso   0 pspxc ***  lmn_size   8
  pspdat ****** pspcod   17 zion   6.0  |  pspdat ****** pspcod   17 zion   6.0
  xred:                                 |  xred:
     0.1666667   0.3333333   0.9236521  |     0.1666667   0.3333333   0.9236521
     0.6666667   0.3333333   0.9236521  |     0.6666667   0.3333333   0.9236521
     0.1666667   0.8333333   0.9236521  |     0.1666667   0.8333333   0.9236521
     0.6666667   0.8333333   0.9236521  |     0.6666667   0.8333333   0.9236521
     0.3333333   0.1666667   0.0763479  |     0.3333333   0.1666667   0.0763479
     0.8333333   0.1666667   0.0763479  |     0.8333333   0.1666667   0.0763479
     0.3333333   0.6666667   0.0763479  |     0.3333333   0.6666667   0.0763479
     0.8333333   0.6666667   0.0763479  |     0.8333333   0.6666667   0.0763479
     0.1669273   0.3333333   0.0373327  |     0.1669273   0.3333333   0.0373327
     0.6666667   0.3333333   0.0370721  |     0.6666667   0.3333333   0.0370721
     0.1666667   0.8333333   0.0370721  |     0.1666667   0.8333333   0.0370721
     0.6666667   0.8333333   0.0370721  |     0.6666667   0.8333333   0.0370721
     0.3333333   0.1666667   0.9629279  |     0.3333333   0.1666667   0.9629279
     0.8333333   0.1666667   0.9629279  |     0.8333333   0.1666667   0.9629279
     0.3333333   0.6666667   0.9629279  |     0.3333333   0.6666667   0.9629279
     0.8333333   0.6666667   0.9629279  |     0.8333333   0.6666667   0.9629279
     0.3333333   0.1666667   0.8843364  |     0.3333333   0.1666667   0.8843364
     0.8333333   0.1666667   0.8843364  |     0.8333333   0.1666667   0.8843364
     0.3333333   0.6666667   0.8843364  |     0.3333333   0.6666667   0.8843364
     0.8333333   0.6666667   0.8843364  |     0.8333333   0.6666667   0.8843364
     0.1666667   0.3333333   0.1156636  |     0.1666667   0.3333333   0.1156636
     0.6666667   0.3333333   0.1156636  |     0.6666667   0.3333333   0.1156636
     0.1666667   0.8333333   0.1156636  |     0.1666667   0.8333333   0.1156636
     0.6666667   0.8333333   0.1156636  |     0.6666667   0.8333333   0.1156636
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
 IO operation completed. cpu_time:       0.1 [s], walltime:       0.3 [s]

--- !WARNING
src_file: m_fftw3.F90
src_line: 2637
message: |
    Using FFTW3 with threads but HAVE_OPENMP is not defined!
...


 initberry: Reduced electric field (ebar)
  red_efieldbar(1:3) =        0.000000000       0.000000000       0.037898824

  initberry: for direction 1, nkstr =   5, nstr =      5
  initberry: for direction 2, nkstr =   5, nstr =      5
  initberry: for direction 3, nkstr =   1, nstr =     25

 initberry: COMMENT - 
  As a rough estimate,
  to be below the critical field, the bandgap of your system
  should be larger than    1.03 eV.


================================================================================

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204785028E-02
               2       -0.135974276E-02
               3       -0.672491236E-03
               4       -0.135974276E-02
               5       -0.204785028E-02
         total       -0.149753546E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497535464E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632810088E-05
    Remapping in [-1,1]     6.632810088E-05

           Polarization     7.326004687E-08 (a.u. of charge)/bohr^2
           Polarization     4.191556107E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587021581E-03
               2       -0.145782149E-03
               3       -0.859386560E-03
               4       -0.145782149E-03
               5        0.587021581E-03
         total        0.461846113E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.618461125E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.618461106E-06
    Remapping in [-1,1]     4.618461106E-06

           Polarization     5.101136208E-09 (a.u. of charge)/bohr^2
           Polarization     2.918602914E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144933763E-02
               2       -0.155224369E-02
               3       -0.159921417E-02
               4       -0.149394437E-02
               5       -0.143034318E-02
               6       -0.155571783E-02
               7       -0.167203193E-02
               8       -0.162241862E-02
               9       -0.151754580E-02
              10       -0.149681332E-02
              11       -0.160510800E-02
              12       -0.162509148E-02
              13       -0.160163206E-02
              14       -0.162509148E-02
              15       -0.160510800E-02
              16       -0.149681332E-02
              17       -0.151754580E-02
              18       -0.162241862E-02
              19       -0.167203193E-02
              20       -0.155571783E-02
              21       -0.143034318E-02
              22       -0.149394437E-02
              23       -0.159921417E-02
              24       -0.155224369E-02
              25       -0.144933763E-02
         total       -0.155365008E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553650085E-03
            Ionic phase     1.563863701E-03
            Total phase     1.021361651E-05
    Remapping in [-1,1]     1.021361651E-05

           Polarization     8.266080549E-08 (a.u. of charge)/bohr^2
           Polarization     4.729418270E-06 C/m^2

 FFT (fine) grid used in SCF cycle:

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  60  60 360
         ecut(hartree)=     25.725   => boxcut(ratio)=   2.08021
====> STARTING DFT-D3 computation
  Begin the computation of the Coordination Numbers (CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(CN) = 9.93180 (atom   5) ;  min(CN) = 3.71227 (atom  18)
  Begin the computation of the C6(CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(C6) =******** ;  min(C6) =********
  Begin the computation of pair-wise term
  of DFT-D3 energy contribution...
                                  ...Done.

  --------------------------------------------------------------
    Van der Waals DFT-D3 semi-empirical dispersion potential  
    with Becke-Jonhson (BJ) refined by Grimme et al. J.    
    Comput. Chem. 32, 1456 (2011)
  ---------------------------------------------------------------
      Scaling factors:       s6 =  1.000,    s8 =  0.787
      Damping parameters:    a1 =  0.429,    a2 =  4.441
      Cut-off radius   =  1.25892E+02 Bohr
      Number of pairs contributing =   525198
      DFT-D3 (no 3-body) energy contribution = -3.27092E-01 Ha

  ---------------------------------------------------------------
      3-Body Term Contribution:
      Number of shells considered    =    13
      Additional 3-body contribution =    1.38024356363E-02 Ha
      Total E (2-body and 3-body)    =   -3.13289999389E-01Ha
  ----------------------------------------------------------------


--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389298 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     1
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 1
 You should try to get npband*bandpp=   52
 For information matrix size is    35268
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...


 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  1  -718.47021737084    -7.185E+02 2.582E-15 4.372E-10
 scprqt: <Vxc>= -1.4215891E-01 hartree

Simple mixing update:
  residual square of the potential :   6.1159562956215786E-017

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204785149E-02
               2       -0.135974039E-02
               3       -0.672483967E-03
               4       -0.135974039E-02
               5       -0.204785149E-02
         total       -0.149753355E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497533546E-03
            Ionic phase     1.563863565E-03
            Total phase     6.633001950E-05
    Remapping in [-1,1]     6.633001950E-05

           Polarization     7.326216600E-08 (a.u. of charge)/bohr^2
           Polarization     4.191677353E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587023884E-03
               2       -0.145781216E-03
               3       -0.859387712E-03
               4       -0.145781216E-03
               5        0.587023884E-03
         total        0.461952464E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.619524645E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.619524625E-06
    Remapping in [-1,1]     4.619524625E-06

           Polarization     5.102310877E-09 (a.u. of charge)/bohr^2
           Polarization     2.919274998E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144949773E-02
               2       -0.155240991E-02
               3       -0.159938411E-02
               4       -0.149410831E-02
               5       -0.143049966E-02
               6       -0.155588406E-02
               7       -0.167220181E-02
               8       -0.162258652E-02
               9       -0.151771144E-02
              10       -0.149697742E-02
              11       -0.160527779E-02
              12       -0.162525930E-02
              13       -0.160180292E-02
              14       -0.162525930E-02
              15       -0.160527779E-02
              16       -0.149697742E-02
              17       -0.151771144E-02
              18       -0.162258652E-02
              19       -0.167220181E-02
              20       -0.155588406E-02
              21       -0.143049966E-02
              22       -0.149410831E-02
              23       -0.159938411E-02
              24       -0.155240991E-02
              25       -0.144949773E-02
         total       -0.155381596E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553815962E-03
            Ionic phase     1.563863701E-03
            Total phase     1.004773892E-05
    Remapping in [-1,1]     1.004773892E-05

           Polarization     8.131832555E-08 (a.u. of charge)/bohr^2
           Polarization     4.652608600E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.165004196E-08   5.102310877E-09   8.131832555E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225577891E-05  -5.464632131E-06   7.745581367E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.633001950E-05   4.619524625E-06   1.004773892E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671587676E-06   2.919274998E-07   4.652608600E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389298 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 06:40
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     2
 vtorho : nnsclo_now=2, note that nnsclo,dbl_nnsclo,istep=0 0 2
 You should try to get npband*bandpp=   52
 For information matrix size is    35268
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...


 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00152   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00152  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  2  -718.47021736446     6.378E-09 3.260E-15 9.154E-11
 scprqt: <Vxc>= -1.4215888E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.656      0.344

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786784E-02
               2       -0.135973713E-02
               3       -0.672464471E-03
               4       -0.135973713E-02
               5       -0.204786784E-02
         total       -0.149753488E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497534881E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632868390E-05
    Remapping in [-1,1]     6.632868390E-05

           Polarization     7.326069081E-08 (a.u. of charge)/bohr^2
           Polarization     4.191592951E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587040732E-03
               2       -0.145784876E-03
               3       -0.859411349E-03
               4       -0.145784876E-03
               5        0.587040731E-03
         total        0.462007259E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.620072592E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.620072573E-06
    Remapping in [-1,1]     4.620072573E-06

           Polarization     5.102916090E-09 (a.u. of charge)/bohr^2
           Polarization     2.919621269E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144941564E-02
               2       -0.155233134E-02
               3       -0.159930232E-02
               4       -0.149402729E-02
               5       -0.143041821E-02
               6       -0.155580548E-02
               7       -0.167212218E-02
               8       -0.162250698E-02
               9       -0.151763181E-02
              10       -0.149689604E-02
              11       -0.160519617E-02
              12       -0.162517994E-02
              13       -0.160172068E-02
              14       -0.162517994E-02
              15       -0.160519617E-02
              16       -0.149689604E-02
              17       -0.151763181E-02
              18       -0.162250698E-02
              19       -0.167212218E-02
              20       -0.155580548E-02
              21       -0.143041821E-02
              22       -0.149402729E-02
              23       -0.159930232E-02
              24       -0.155233134E-02
              25       -0.144941564E-02
         total       -0.155373550E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553735499E-03
            Ionic phase     1.563863701E-03
            Total phase     1.012820191E-05
    Remapping in [-1,1]     1.012820191E-05

           Polarization     8.196952835E-08 (a.u. of charge)/bohr^2
           Polarization     4.689867013E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164798915E-08   5.102916090E-09   8.196952835E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225547077E-05  -5.464399393E-06   7.807608521E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632868390E-05   4.620072573E-06   1.012820191E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671470224E-06   2.919621269E-07   4.689867013E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389298 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 04:19
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     3
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 3
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...


 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00006   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00006  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  3  -718.47021736739    -2.928E-09 3.365E-15 2.181E-11
 scprqt: <Vxc>= -1.4215886E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.887     -0.473E-01  0.160

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786722E-02
               2       -0.135973917E-02
               3       -0.672466571E-03
               4       -0.135973917E-02
               5       -0.204786722E-02
         total       -0.149753587E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497535869E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632769630E-05
    Remapping in [-1,1]     6.632769630E-05

           Polarization     7.325960000E-08 (a.u. of charge)/bohr^2
           Polarization     4.191530540E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587038118E-03
               2       -0.145785762E-03
               3       -0.859408118E-03
               4       -0.145785762E-03
               5        0.587038118E-03
         total        0.461931850E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.619318496E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.619318477E-06
    Remapping in [-1,1]     4.619318477E-06

           Polarization     5.102083184E-09 (a.u. of charge)/bohr^2
           Polarization     2.919144724E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144941828E-02
               2       -0.155233294E-02
               3       -0.159930466E-02
               4       -0.149403004E-02
               5       -0.143042058E-02
               6       -0.155580753E-02
               7       -0.167212354E-02
               8       -0.162250903E-02
               9       -0.151763398E-02
              10       -0.149689907E-02
              11       -0.160519906E-02
              12       -0.162518208E-02
              13       -0.160172279E-02
              14       -0.162518208E-02
              15       -0.160519906E-02
              16       -0.149689907E-02
              17       -0.151763398E-02
              18       -0.162250903E-02
              19       -0.167212354E-02
              20       -0.155580753E-02
              21       -0.143042058E-02
              22       -0.149403004E-02
              23       -0.159930466E-02
              24       -0.155233294E-02
              25       -0.144941828E-02
         total       -0.155373777E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553737774E-03
            Ionic phase     1.563863701E-03
            Total phase     1.012592698E-05
    Remapping in [-1,1]     1.012592698E-05

           Polarization     8.195111690E-08 (a.u. of charge)/bohr^2
           Polarization     4.688813607E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164721046E-08   5.102083184E-09   8.195111690E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225535389E-05  -5.464449223E-06   7.805854828E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632769630E-05   4.619318477E-06   1.012592698E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671425672E-06   2.919144724E-07   4.688813607E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389299 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 03:23
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     4
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 4
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...


 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  4  -718.47021736741    -1.842E-11 8.997E-16 1.574E-11
 scprqt: <Vxc>= -1.4215884E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.852      0.253     -0.212      0.106

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786455E-02
               2       -0.135973780E-02
               3       -0.672467387E-03
               4       -0.135973780E-02
               5       -0.204786455E-02
         total       -0.149753442E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497534418E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632914663E-05
    Remapping in [-1,1]     6.632914663E-05

           Polarization     7.326120191E-08 (a.u. of charge)/bohr^2
           Polarization     4.191622193E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587038643E-03
               2       -0.145786223E-03
               3       -0.859406956E-03
               4       -0.145786223E-03
               5        0.587038643E-03
         total        0.461957646E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.619576461E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.619576441E-06
    Remapping in [-1,1]     4.619576441E-06

           Polarization     5.102368108E-09 (a.u. of charge)/bohr^2
           Polarization     2.919307743E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144941281E-02
               2       -0.155232795E-02
               3       -0.159929959E-02
               4       -0.149402490E-02
               5       -0.143041559E-02
               6       -0.155580222E-02
               7       -0.167211794E-02
               8       -0.162250405E-02
               9       -0.151762851E-02
              10       -0.149689364E-02
              11       -0.160519384E-02
              12       -0.162517689E-02
              13       -0.160171763E-02
              14       -0.162517689E-02
              15       -0.160519384E-02
              16       -0.149689364E-02
              17       -0.151762851E-02
              18       -0.162250405E-02
              19       -0.167211794E-02
              20       -0.155580222E-02
              21       -0.143041559E-02
              22       -0.149402490E-02
              23       -0.159929959E-02
              24       -0.155232795E-02
              25       -0.144941281E-02
         total       -0.155373254E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553732539E-03
            Ionic phase     1.563863701E-03
            Total phase     1.013116182E-05
    Remapping in [-1,1]     1.013116182E-05

           Polarization     8.199348345E-08 (a.u. of charge)/bohr^2
           Polarization     4.691237598E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164889569E-08   5.102368108E-09   8.199348345E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225560685E-05  -5.464538662E-06   7.809890247E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632914663E-05   4.619576441E-06   1.013116182E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671522092E-06   2.919307743E-07   4.691237598E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389299 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 03:23
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     5
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 5
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

--- !WARNING
src_file: m_vtorho.F90
src_line: 1651
message: |
    For k-point number 1,
    The minimal occupation factor is  2.000.
    An adequate monitoring of convergence requires it to be  at most 0.01_dp.
    Action: increase slightly the number of bands.
...


 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  5  -718.47021736762    -2.162E-10 2.876E-16 7.125E-12
 scprqt: <Vxc>= -1.4215882E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.816      0.394     -0.291     -0.719E-02  0.878E-01

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786717E-02
               2       -0.135973903E-02
               3       -0.672466014E-03
               4       -0.135973903E-02
               5       -0.204786717E-02
         total       -0.149753568E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497535684E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632788130E-05
    Remapping in [-1,1]     6.632788130E-05

           Polarization     7.325980433E-08 (a.u. of charge)/bohr^2
           Polarization     4.191542231E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587038438E-03
               2       -0.145785883E-03
               3       -0.859407430E-03
               4       -0.145785883E-03
               5        0.587038438E-03
         total        0.461953600E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.619536001E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.619535981E-06
    Remapping in [-1,1]     4.619535981E-06

           Polarization     5.102323419E-09 (a.u. of charge)/bohr^2
           Polarization     2.919282174E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144941012E-02
               2       -0.155232413E-02
               3       -0.159929601E-02
               4       -0.149402176E-02
               5       -0.143041259E-02
               6       -0.155579826E-02
               7       -0.167211491E-02
               8       -0.162250008E-02
               9       -0.151762509E-02
              10       -0.149689074E-02
              11       -0.160518987E-02
              12       -0.162517308E-02
              13       -0.160171374E-02
              14       -0.162517308E-02
              15       -0.160518987E-02
              16       -0.149689074E-02
              17       -0.151762509E-02
              18       -0.162250008E-02
              19       -0.167211491E-02
              20       -0.155579826E-02
              21       -0.143041259E-02
              22       -0.149402176E-02
              23       -0.159929601E-02
              24       -0.155232413E-02
              25       -0.144941012E-02
         total       -0.155372908E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553729082E-03
            Ionic phase     1.563863701E-03
            Total phase     1.013461947E-05
    Remapping in [-1,1]     1.013461947E-05

           Polarization     8.202146691E-08 (a.u. of charge)/bohr^2
           Polarization     4.692838666E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164730771E-08   5.102323419E-09   8.202146691E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225536849E-05  -5.464425292E-06   7.812555675E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632788130E-05   4.619535981E-06   1.013461947E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671431236E-06   2.919282174E-07   4.692838666E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389299 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 03:24
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     6
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 6
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  6  -718.47021736756     5.957E-11 2.696E-16 5.732E-12
 scprqt: <Vxc>= -1.4215881E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.969      0.400     -0.395     -0.462E-01  0.139E-01

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786584E-02
               2       -0.135973816E-02
               3       -0.672466907E-03
               4       -0.135973816E-02
               5       -0.204786584E-02
         total       -0.149753498E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497534981E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632858377E-05
    Remapping in [-1,1]     6.632858377E-05

           Polarization     7.326058022E-08 (a.u. of charge)/bohr^2
           Polarization     4.191586623E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587038682E-03
               2       -0.145784801E-03
               3       -0.859406698E-03
               4       -0.145784801E-03
               5        0.587038682E-03
         total        0.462021311E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.620213113E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.620213094E-06
    Remapping in [-1,1]     4.620213094E-06

           Polarization     5.103071297E-09 (a.u. of charge)/bohr^2
           Polarization     2.919710071E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144940650E-02
               2       -0.155232069E-02
               3       -0.159929197E-02
               4       -0.149401818E-02
               5       -0.143040896E-02
               6       -0.155579479E-02
               7       -0.167211112E-02
               8       -0.162249645E-02
               9       -0.151762154E-02
              10       -0.149688682E-02
              11       -0.160518616E-02
              12       -0.162516954E-02
              13       -0.160171039E-02
              14       -0.162516954E-02
              15       -0.160518616E-02
              16       -0.149688682E-02
              17       -0.151762154E-02
              18       -0.162249645E-02
              19       -0.167211112E-02
              20       -0.155579479E-02
              21       -0.143040896E-02
              22       -0.149401818E-02
              23       -0.159929197E-02
              24       -0.155232069E-02
              25       -0.144940650E-02
         total       -0.155372543E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553725433E-03
            Ionic phase     1.563863701E-03
            Total phase     1.013826832E-05
    Remapping in [-1,1]     1.013826832E-05

           Polarization     8.205099778E-08 (a.u. of charge)/bohr^2
           Polarization     4.694528267E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164777184E-08   5.103071297E-09   8.205099778E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225543816E-05  -5.464362908E-06   7.815368495E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632858377E-05   4.620213094E-06   1.013826832E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671457791E-06   2.919710071E-07   4.694528267E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389299 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 03:25
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     7
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 7
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  7  -718.47021736775    -1.866E-10 1.028E-16 2.718E-12
 scprqt: <Vxc>= -1.4215880E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.09      0.313     -0.357     -0.110     -0.183E-01

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786526E-02
               2       -0.135973880E-02
               3       -0.672466682E-03
               4       -0.135973880E-02
               5       -0.204786526E-02
         total       -0.149753496E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497534964E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632860097E-05
    Remapping in [-1,1]     6.632860097E-05

           Polarization     7.326059922E-08 (a.u. of charge)/bohr^2
           Polarization     4.191587710E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587038633E-03
               2       -0.145784568E-03
               3       -0.859408621E-03
               4       -0.145784568E-03
               5        0.587038633E-03
         total        0.461990201E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.619902006E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.619901987E-06
    Remapping in [-1,1]     4.619901987E-06

           Polarization     5.102727676E-09 (a.u. of charge)/bohr^2
           Polarization     2.919513469E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144940193E-02
               2       -0.155231596E-02
               3       -0.159928762E-02
               4       -0.149401362E-02
               5       -0.143040479E-02
               6       -0.155579024E-02
               7       -0.167210599E-02
               8       -0.162249167E-02
               9       -0.151761673E-02
              10       -0.149688242E-02
              11       -0.160518138E-02
              12       -0.162516457E-02
              13       -0.160170518E-02
              14       -0.162516457E-02
              15       -0.160518138E-02
              16       -0.149688242E-02
              17       -0.151761673E-02
              18       -0.162249167E-02
              19       -0.167210599E-02
              20       -0.155579024E-02
              21       -0.143040479E-02
              22       -0.149401362E-02
              23       -0.159928762E-02
              24       -0.155231596E-02
              25       -0.144940193E-02
         total       -0.155372076E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553720762E-03
            Ionic phase     1.563863701E-03
            Total phase     1.014293952E-05
    Remapping in [-1,1]     1.014293952E-05

           Polarization     8.208880271E-08 (a.u. of charge)/bohr^2
           Polarization     4.696691267E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164799217E-08   5.102727676E-09   8.208880271E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225547123E-05  -5.464424112E-06   7.818969419E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632860097E-05   4.619901987E-06   1.014293952E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671470397E-06   2.919513469E-07   4.696691267E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389299 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 03:25
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     8
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 8
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  8  -718.47021736803    -2.834E-10 2.138E-17 1.784E-12
 scprqt: <Vxc>= -1.4215879E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.855      0.781     -0.663     -0.250      0.256

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786423E-02
               2       -0.135973833E-02
               3       -0.672467227E-03
               4       -0.135973833E-02
               5       -0.204786423E-02
         total       -0.149753447E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497534468E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632909714E-05
    Remapping in [-1,1]     6.632909714E-05

           Polarization     7.326114724E-08 (a.u. of charge)/bohr^2
           Polarization     4.191619065E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587039413E-03
               2       -0.145785758E-03
               3       -0.859406916E-03
               4       -0.145785758E-03
               5        0.587039413E-03
         total        0.462007875E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.620078749E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.620078729E-06
    Remapping in [-1,1]     4.620078729E-06

           Polarization     5.102922890E-09 (a.u. of charge)/bohr^2
           Polarization     2.919625160E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144939953E-02
               2       -0.155231281E-02
               3       -0.159928466E-02
               4       -0.149401089E-02
               5       -0.143040231E-02
               6       -0.155578726E-02
               7       -0.167210353E-02
               8       -0.162248907E-02
               9       -0.151761413E-02
              10       -0.149687966E-02
              11       -0.160517856E-02
              12       -0.162516224E-02
              13       -0.160170261E-02
              14       -0.162516224E-02
              15       -0.160517856E-02
              16       -0.149687966E-02
              17       -0.151761413E-02
              18       -0.162248907E-02
              19       -0.167210353E-02
              20       -0.155578726E-02
              21       -0.143040231E-02
              22       -0.149401089E-02
              23       -0.159928466E-02
              24       -0.155231281E-02
              25       -0.144939953E-02
         total       -0.155371808E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553718076E-03
            Ionic phase     1.563863701E-03
            Total phase     1.014562468E-05
    Remapping in [-1,1]     1.014562468E-05

           Polarization     8.211053423E-08 (a.u. of charge)/bohr^2
           Polarization     4.697934631E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164851226E-08   5.102922890E-09   8.211053423E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225554929E-05  -5.464437768E-06   7.821039350E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632909714E-05   4.620078729E-06   1.014562468E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671500154E-06   2.919625160E-07   4.697934631E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389299 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 03:24
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER     9
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 9
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT  9  -718.47021736829    -2.550E-10 1.005E-16 1.026E-12
 scprqt: <Vxc>= -1.4215878E-01 hartree

 Pulay update with  8 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.567      0.594      0.238     -0.543     -0.625E-01

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786268E-02
               2       -0.135973958E-02
               3       -0.672469170E-03
               4       -0.135973958E-02
               5       -0.204786268E-02
         total       -0.149753474E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497534738E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632882680E-05
    Remapping in [-1,1]     6.632882680E-05

           Polarization     7.326084865E-08 (a.u. of charge)/bohr^2
           Polarization     4.191601981E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587036315E-03
               2       -0.145784328E-03
               3       -0.859403726E-03
               4       -0.145784328E-03
               5        0.587036315E-03
         total        0.462004967E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.620049672E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.620049652E-06
    Remapping in [-1,1]     4.620049652E-06

           Polarization     5.102890774E-09 (a.u. of charge)/bohr^2
           Polarization     2.919606785E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144939654E-02
               2       -0.155230963E-02
               3       -0.159928139E-02
               4       -0.149400754E-02
               5       -0.143039940E-02
               6       -0.155578373E-02
               7       -0.167209969E-02
               8       -0.162248572E-02
               9       -0.151761071E-02
              10       -0.149687669E-02
              11       -0.160517502E-02
              12       -0.162515865E-02
              13       -0.160169895E-02
              14       -0.162515865E-02
              15       -0.160517502E-02
              16       -0.149687669E-02
              17       -0.151761071E-02
              18       -0.162248572E-02
              19       -0.167209969E-02
              20       -0.155578373E-02
              21       -0.143039940E-02
              22       -0.149400754E-02
              23       -0.159928139E-02
              24       -0.155230963E-02
              25       -0.144939654E-02
         total       -0.155371473E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553714735E-03
            Ionic phase     1.563863701E-03
            Total phase     1.014896657E-05
    Remapping in [-1,1]     1.014896657E-05

           Polarization     8.213758082E-08 (a.u. of charge)/bohr^2
           Polarization     4.699482095E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164818602E-08   5.102890774E-09   8.213758082E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225550033E-05  -5.464417459E-06   7.823615541E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632882680E-05   4.620049652E-06   1.014896657E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671481488E-06   2.919606785E-07   4.699482095E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389299 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 03:24
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER    10
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 10
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT 10  -718.47021736826     2.694E-11 1.383E-17 9.682E-13
 scprqt: <Vxc>= -1.4215878E-01 hartree

 Pulay update with  9 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.706      0.327     -0.639E-01  0.203     -0.209

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786234E-02
               2       -0.135973963E-02
               3       -0.672471532E-03
               4       -0.135973963E-02
               5       -0.204786234E-02
         total       -0.149753510E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497535097E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632846808E-05
    Remapping in [-1,1]     6.632846808E-05

           Polarization     7.326045244E-08 (a.u. of charge)/bohr^2
           Polarization     4.191579312E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587033972E-03
               2       -0.145784920E-03
               3       -0.859403040E-03
               4       -0.145784920E-03
               5        0.587033972E-03
         total        0.461901298E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.619012981E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.619012962E-06
    Remapping in [-1,1]     4.619012962E-06

           Polarization     5.101745739E-09 (a.u. of charge)/bohr^2
           Polarization     2.918951656E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144939563E-02
               2       -0.155230862E-02
               3       -0.159928031E-02
               4       -0.149400674E-02
               5       -0.143039895E-02
               6       -0.155578290E-02
               7       -0.167209884E-02
               8       -0.162248462E-02
               9       -0.151760979E-02
              10       -0.149687562E-02
              11       -0.160517418E-02
              12       -0.162515761E-02
              13       -0.160169827E-02
              14       -0.162515761E-02
              15       -0.160517418E-02
              16       -0.149687562E-02
              17       -0.151760979E-02
              18       -0.162248462E-02
              19       -0.167209884E-02
              20       -0.155578290E-02
              21       -0.143039895E-02
              22       -0.149400674E-02
              23       -0.159928031E-02
              24       -0.155230862E-02
              25       -0.144939563E-02
         total       -0.155371384E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553713835E-03
            Ionic phase     1.563863701E-03
            Total phase     1.014986568E-05
    Remapping in [-1,1]     1.014986568E-05

           Polarization     8.214485752E-08 (a.u. of charge)/bohr^2
           Polarization     4.699898430E-06 C/m^2


scfcv: Constant unreduced E-field:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164838959E-08   5.101745739E-09   8.214485752E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225553088E-05  -5.464581582E-06   7.824308647E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632846808E-05   4.619012962E-06   1.014986568E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671493136E-06   2.918951656E-07   4.699898430E-06  

  rhotov : is_hybrid_ncpp= F
  rhotov : n3xccc=     1296000

--- !WARNING
src_file: m_drivexc.F90
src_line: 1092
message: |
    Density went too small (lower than xc_denpos) at 389299 points
    and was set to xc_denpos =   1.00E-14. Lowest was  -0.15E-03.
    Likely due to too low boxcut or too low ecut for pseudopotential core charge.
...

 scfcv_core: previous iteration took 03:24
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000

 ****** Psp strength Dij in Ha (atom      1) *****
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...


 ITER STEP NUMBER    11
 vtorho : nnsclo_now=1, note that nnsclo,dbl_nnsclo,istep=0 0 11
 You should try to get npband*bandpp=   52
 For information matrix size is    35268

 *********** RHOIJ (atom   1) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...

 *********** RHOIJ (atom   2) **********
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000   0.00000   0.00044   0.00000 ...
  -0.01604   1.00590  -0.00000   0.00015   0.00000  -0.00000   0.00078   0.00001   0.00002   0.00000   0.09523  -0.00000 ...
  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158   0.00000   0.00000   0.00000   0.00014   0.00000   0.00000 ...
   0.00001   0.00015   0.00000   1.99799  -0.00000   0.00000  -0.02601  -0.00000   0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000  -0.00000   1.99833   0.00000  -0.00000  -0.02158  -0.00222   0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00000  -0.02158   0.00000   0.00000   1.52076  -0.00000  -0.00002  -0.00003  -0.00008   0.00001  -0.00000 ...
   0.00005   0.00078   0.00000  -0.02601  -0.00000  -0.00000   1.78527   0.00000  -0.00000  -0.00001   0.00153   0.00000 ...
   0.00000   0.00001   0.00000  -0.00000  -0.02158  -0.00002   0.00000   1.52081  -0.23344  -0.00000  -0.00001  -0.00006 ...
   0.00000   0.00002   0.00000   0.00000  -0.00222  -0.00003  -0.00000  -0.23344   1.46251   0.00000  -0.00004  -0.00018 ...
   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00008  -0.00001  -0.00000   0.00000   1.60650  -0.00001  -0.00000 ...
   0.00044   0.09523   0.00000   0.00005  -0.00000   0.00001   0.00153  -0.00001  -0.00004  -0.00001   1.44008   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00014  -0.00000   0.00000  -0.00006  -0.00018  -0.00000   0.00000   1.60651 ...
   ...  only 12  components have been written...

 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
   Integrated=    2.0800E+02
 ETOT 11  -718.47021736818     8.004E-11 7.261E-18 7.162E-13
 scprqt: <Vxc>= -1.4215878E-01 hartree

 At SCF step   11, etot is converged : 
  for the second time, diff in etot=  8.004E-11 < toldfe=  1.000E-10

 nkpt =    13
 copy cprj to dtefield%cprj

 Computing the polarization (Berry phase) for reciprocal vector:
  0.20000  0.00000  0.00000 (in reduced coordinates)
  0.01674  0.00967  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.204786104E-02
               2       -0.135973914E-02
               3       -0.672471728E-03
               4       -0.135973914E-02
               5       -0.204786104E-02
         total       -0.149753442E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.333333333E+00
   2      1          -0.666666667E+00
   3      1           0.333333333E+00
   4      1          -0.666666667E+00
   5      1           0.666666667E+00
   6      1          -0.333333333E+00
   7      1           0.666666667E+00
   8      1          -0.333333333E+00
   9      2          -0.998436136E+00
  10      2          -0.100000008E-10
  11      2           0.100000000E+01
  12      2          -0.100008890E-10
  13      2           0.999911265E-11
  14      2          -0.100000000E+01
  15      2           0.999955674E-11
  16      2          -0.100000000E+01
  17      2           0.999911265E-11
  18      2          -0.100000000E+01
  19      2           0.999955674E-11
  20      2          -0.100000000E+01
  21      2           0.100000000E+01
  22      2          -0.100000008E-10
  23      2           0.100000000E+01
  24      2          -0.100008890E-10
         total           1.563863565E-03

 Summary of the results
 Electronic Berry phase    -1.497534418E-03
            Ionic phase     1.563863565E-03
            Total phase     6.632914698E-05
    Remapping in [-1,1]     6.632914698E-05

           Polarization     7.326120229E-08 (a.u. of charge)/bohr^2
           Polarization     4.191622215E-06 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.20000  0.00000 (in reduced coordinates)
  0.00000  0.01933  0.00000 (in cartesian coordinates - atomic units)
 Number of strings:     5
 Number of k points in string:    5

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1        0.587036137E-03
               2       -0.145785740E-03
               3       -0.859400076E-03
               4       -0.145785740E-03
               5        0.587036137E-03
         total        0.462014372E-05 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.666666667E+00
   2      1           0.666666667E+00
   3      1          -0.333333333E+00
   4      1          -0.333333333E+00
   5      1           0.333333333E+00
   6      1           0.333333333E+00
   7      1          -0.666666667E+00
   8      1          -0.666666667E+00
   9      2           0.100000008E-10
  10      2           0.100000008E-10
  11      2          -0.100000000E+01
  12      2          -0.100000000E+01
  13      2           0.100000000E+01
  14      2           0.100000000E+01
  15      2          -0.100008890E-10
  16      2          -0.100008890E-10
  17      2           0.100000000E+01
  18      2           0.100000000E+01
  19      2          -0.100008890E-10
  20      2          -0.100008890E-10
  21      2           0.100000008E-10
  22      2           0.100000008E-10
  23      2          -0.100000000E+01
  24      2          -0.100000000E+01
         total          -1.953992523E-14

 Summary of the results
 Electronic Berry phase     4.620143720E-06
            Ionic phase    -1.953992523E-14
            Total phase     4.620143700E-06
    Remapping in [-1,1]     4.620143700E-06

           Polarization     5.102994651E-09 (a.u. of charge)/bohr^2
           Polarization     2.919666218E-07 C/m^2


 Computing the polarization (Berry phase) for reciprocal vector:
  0.00000  0.00000  1.00000 (in reduced coordinates)
  0.00000  0.00000  0.01319 (in cartesian coordinates - atomic units)
 Number of strings:    25
 Number of k points in string:    1

 Compute the electronic contribution to polarization

          istr          polberry(istr)
               1       -0.144939368E-02
               2       -0.155230624E-02
               3       -0.159927788E-02
               4       -0.149400437E-02
               5       -0.143039677E-02
               6       -0.155578040E-02
               7       -0.167209647E-02
               8       -0.162248221E-02
               9       -0.151760725E-02
              10       -0.149687329E-02
              11       -0.160517141E-02
              12       -0.162515500E-02
              13       -0.160169605E-02
              14       -0.162515500E-02
              15       -0.160517141E-02
              16       -0.149687329E-02
              17       -0.151760725E-02
              18       -0.162248221E-02
              19       -0.167209647E-02
              20       -0.155578040E-02
              21       -0.143039677E-02
              22       -0.149400437E-02
              23       -0.159927788E-02
              24       -0.155230624E-02
              25       -0.144939368E-02
         total       -0.155371144E-02 (isppol=   1)
 Compute the ionic contributions

  itom  itypat               polion
   1      1           0.931129658E+00
   2      1           0.931129658E+00
   3      1           0.931129658E+00
   4      1           0.931129658E+00
   5      1          -0.931129658E+00
   6      1          -0.931129658E+00
   7      1          -0.931129658E+00
   8      1          -0.931129658E+00
   9      2           0.223996454E+00
  10      2           0.222432591E+00
  11      2           0.222432591E+00
  12      2           0.222432591E+00
  13      2          -0.222432591E+00
  14      2          -0.222432591E+00
  15      2          -0.222432591E+00
  16      2          -0.222432591E+00
  17      2          -0.693981526E+00
  18      2          -0.693981526E+00
  19      2          -0.693981526E+00
  20      2          -0.693981526E+00
  21      2           0.693981526E+00
  22      2           0.693981526E+00
  23      2           0.693981526E+00
  24      2           0.693981526E+00
         total           1.563863701E-03

 Summary of the results
 Electronic Berry phase    -1.553711440E-03
            Ionic phase     1.563863701E-03
            Total phase     1.015226146E-05
    Remapping in [-1,1]     1.015226146E-05

           Polarization     8.216424698E-08 (a.u. of charge)/bohr^2
           Polarization     4.701007793E-06 C/m^2


 Stress tensor under a constant electric field:
====> STARTING DFT-D3 computation
  Begin the computation of the Coordination Numbers (CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(CN) = 9.93180 (atom   5) ;  min(CN) = 3.71227 (atom  18)
  Begin the computation of the C6(CN)
  required for DFT-D3 energy corrections...
                                            ... Done.
  max(C6) =******** ;  min(C6) =********
  Begin the computation of pair-wise term
  of DFT-D3 energy contribution...
                                  ...Done.

 Cartesian components of Maxwell stress tensor (hartree/bohr^3)
 Maxstr(1 1)= -7.91571747E-10 Maxstr(3 2)=  0.00000000E+00
 Maxstr(2 2)= -7.91571747E-10 Maxstr(3 1)=  0.00000000E+00
 Maxstr(3 3)=  7.91571747E-10 Maxstr(2 1)=  0.00000000E+00


 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.19193253E-06  sigma(3 2)=  1.96483539E-10
  sigma(2 2)= -1.19016843E-06  sigma(3 1)= -1.01943838E-07
  sigma(3 3)= -2.07222885E-06  sigma(2 1)=  2.74414811E-08

 fftdatar_write: About to write data to: abo_DS4_DEN with iomode IO_MODE_FORTRAN
 IO operation completed. cpu_time:       0.1 [s], walltime:       0.1 [s]

 PAW TEST:
 ==== Compensation charge inside spheres ============
 The following values must be close to each other ...
 Compensation charge over spherical meshes =     37.048493446747294
 Compensation charge over fine fft grid    =     37.048674398269803

 ==== Results concerning PAW augmentation regions ====

 Total pseudopotential strength Dij (hartree):
 Atom #  1
  -2.11129   0.31534  -0.00000  -0.00004   0.00000   0.00000   0.00001  -0.00000   0.00000  -0.00000   0.00052  -0.00000 ...
   0.31534   0.09046   0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00005   0.00000 ...
  -0.00000   0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.00000  -0.00003   0.00000   0.00000 ...
  -0.00004   0.00000  -0.00000  -1.36918  -0.00000   0.00000   0.10756   0.00000   0.00000  -0.00000  -0.00003   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -1.37065  -0.00000   0.00000   0.10776   0.00017   0.00000  -0.00000  -0.00003 ...
   0.00000  -0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00000   0.00000  -0.00000   0.00001  -0.00000   0.00000 ...
   0.00001   0.00000   0.00000   0.10756   0.00000  -0.00000   0.03014  -0.00000   0.00000   0.00000   0.00001  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000   0.10776   0.00000  -0.00000   0.03013  -0.00009   0.00000   0.00000   0.00001 ...
   0.00000  -0.00000   0.00000   0.00000   0.00017  -0.00000   0.00000  -0.00009  -0.25135  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00003  -0.00000   0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107   0.00000   0.00000 ...
   0.00052  -0.00005   0.00000  -0.00003  -0.00000  -0.00000   0.00001   0.00000  -0.00000   0.00000  -0.25065  -0.00000 ...
  -0.00000   0.00000   0.00000   0.00000  -0.00003   0.00000  -0.00000   0.00001   0.00000   0.00000  -0.00000  -0.25107 ...
   ...  only 12  components have been written...
 Atom # 24
   2.10611   0.13449   0.00000   0.00111  -0.00000  -0.00000  -0.00161   0.00000
   0.13449   7.27940   0.00000   0.00070  -0.00000  -0.00000  -0.01069   0.00000
   0.00000   0.00000   0.39565  -0.00000   0.00000  -0.01485   0.00000  -0.00000
   0.00111   0.00070  -0.00000   0.39564   0.00000   0.00000  -0.01463  -0.00000
  -0.00000  -0.00000   0.00000   0.00000   0.39565  -0.00000  -0.00000  -0.01485
  -0.00000  -0.00000  -0.01485   0.00000  -0.00000   4.75372  -0.00000  -0.00000
  -0.00161  -0.01069   0.00000  -0.01463  -0.00000  -0.00000   4.75443   0.00000
   0.00000   0.00000  -0.00000  -0.00000  -0.01485  -0.00000   0.00000   4.75372


 Augmentation waves occupancies Rhoij:
 Atom #  1
   1.99948  -0.01604  -0.00000   0.00001   0.00000  -0.00000   0.00005   0.00000   0.00000  -0.00000   0.00044  -0.00000 ...
  -0.01604   1.00591  -0.00000   0.00015   0.00000  -0.00001   0.00078   0.00001   0.00002   0.00000   0.09524  -0.00000 ...
  -0.00000  -0.00000   1.99833  -0.00000  -0.00000  -0.02158  -0.00000   0.00000   0.00000   0.00014   0.00000  -0.00000 ...
   0.00001   0.00015  -0.00000   1.99799   0.00000  -0.00000  -0.02601   0.00000  -0.00000  -0.00000   0.00005   0.00000 ...
   0.00000   0.00000  -0.00000   0.00000   1.99833   0.00000   0.00000  -0.02158  -0.00222  -0.00000  -0.00000   0.00014 ...
  -0.00000  -0.00001  -0.02158  -0.00000   0.00000   1.52076   0.00000  -0.00002  -0.00003  -0.00008   0.00001   0.00000 ...
   0.00005   0.00078  -0.00000  -0.02601   0.00000   0.00000   1.78525  -0.00000   0.00000  -0.00000   0.00150  -0.00000 ...
   0.00000   0.00001   0.00000   0.00000  -0.02158  -0.00002  -0.00000   1.52078  -0.23345   0.00000  -0.00002  -0.00008 ...
   0.00000   0.00002   0.00000  -0.00000  -0.00222  -0.00003   0.00000  -0.23345   1.46251   0.00000  -0.00004  -0.00019 ...
  -0.00000   0.00000   0.00014  -0.00000  -0.00000  -0.00008  -0.00000   0.00000   0.00000   1.60650   0.00000  -0.00000 ...
   0.00044   0.09524   0.00000   0.00005  -0.00000   0.00001   0.00150  -0.00002  -0.00004   0.00000   1.44002  -0.00000 ...
  -0.00000  -0.00000  -0.00000   0.00000   0.00014   0.00000  -0.00000  -0.00008  -0.00019  -0.00000  -0.00000   1.60651 ...
   ...  only 12  components have been written...
 Atom # 24
   1.90693   0.00378   0.00004   0.20708  -0.00008   0.00000   0.00187  -0.00000
   0.00378   0.00013  -0.00000  -0.00969   0.00000   0.00000   0.00007  -0.00000
   0.00004  -0.00000   1.39611  -0.00003  -0.00015  -0.00696  -0.00000  -0.00000
   0.20708  -0.00969  -0.00003   1.50380   0.00006  -0.00000  -0.00744   0.00000
  -0.00008   0.00000  -0.00015   0.00006   1.39634  -0.00000   0.00000  -0.00696
   0.00000   0.00000  -0.00696  -0.00000  -0.00000   0.00006   0.00000   0.00000
   0.00187   0.00007  -0.00000  -0.00744   0.00000   0.00000   0.00007  -0.00000
  -0.00000  -0.00000  -0.00000   0.00000  -0.00696   0.00000  -0.00000   0.00006


================================================================================

 ----iterations are completed or convergence reached----


 === Gap info ===
Not enough states to calculate the band gap.
 Mean square residual over all n,k,spin=   16.694E-19; max=  72.614E-19
   0.1000  0.1000  0.5000    1  6.32823E-18 kpt; spin; max resid(k); each band:
  8.44E-20 1.51E-20 4.73E-20 1.45E-20 7.08E-21 2.24E-21 1.11E-20 1.02E-20
  3.75E-20 1.35E-20 2.57E-20 4.71E-20 1.35E-20 1.05E-20 6.85E-20 1.14E-20
  4.87E-20 1.08E-20 1.09E-21 3.99E-21 2.20E-20 6.37E-21 3.98E-20 1.70E-20
  4.03E-20 2.03E-20 8.36E-21 6.13E-21 2.21E-20 7.62E-21 2.13E-20 6.99E-21
  4.58E-18 3.06E-18 2.03E-18 7.68E-19 5.86E-18 6.25E-18 5.03E-18 5.04E-18
  6.33E-18 5.92E-18 2.42E-18 2.40E-18 1.66E-18 1.63E-18 2.44E-18 1.71E-18
  1.42E-18 4.19E-18 3.90E-18 3.70E-18 2.62E-18 2.31E-18 2.25E-18 6.56E-19
  3.50E-18 1.49E-18 3.85E-18 3.74E-18 2.37E-18 2.37E-18 2.45E-18 2.36E-18
  3.05E-18 2.19E-18 1.74E-18 1.74E-18 2.14E-18 1.27E-18 1.88E-18 2.05E-18
  1.01E-18 1.04E-18 1.49E-18 6.41E-19 1.47E-18 1.66E-18 6.67E-19 4.65E-18
  9.86E-19 4.47E-18 4.24E-18 3.92E-18 1.87E-18 2.95E-18 2.84E-18 9.18E-19
  1.30E-18 5.89E-19 1.77E-18 1.87E-18 7.85E-19 7.90E-19 2.02E-18 1.87E-18
  2.21E-18 2.20E-18 5.96E-19 6.01E-19 2.07E-18 5.05E-19 1.09E-18 6.29E-19
   0.3000  0.1000  0.5000    1  7.26136E-18 kpt; spin; max resid(k); each band:
  8.28E-20 1.49E-20 5.53E-20 1.35E-20 4.15E-20 1.23E-20 2.30E-20 1.02E-20
  5.05E-20 1.43E-20 3.81E-20 1.50E-20 5.37E-20 1.33E-20 7.57E-20 6.01E-20
  1.19E-20 1.94E-20 3.52E-20 1.01E-20 5.05E-20 6.96E-21 2.73E-20 8.43E-21
  2.54E-20 6.32E-21 2.57E-20 7.35E-21 5.21E-20 7.89E-21 2.31E-20 7.50E-21
  4.87E-18 3.82E-18 7.26E-18 4.94E-18 1.98E-18 4.50E-18 9.02E-19 4.40E-18
  2.22E-18 1.39E-18 5.28E-18 2.75E-18 5.84E-18 1.68E-18 2.57E-18 1.75E-18
  1.56E-18 5.27E-18 4.28E-18 3.55E-18 2.68E-18 2.69E-18 1.47E-18 8.94E-19
  2.40E-18 1.39E-18 2.56E-18 1.60E-18 1.99E-18 3.59E-18 3.03E-18 1.78E-18
  3.78E-18 1.05E-18 2.54E-18 2.85E-18 2.56E-18 1.14E-18 2.50E-18 3.71E-18
  1.28E-18 2.00E-18 1.59E-18 2.57E-18 2.28E-18 1.17E-18 1.99E-18 6.82E-19
  2.84E-18 1.61E-18 2.14E-18 2.22E-18 7.83E-19 5.38E-19 1.75E-18 1.01E-18
  3.58E-18 1.68E-18 1.87E-18 1.62E-18 1.07E-18 1.34E-18 3.03E-18 2.54E-18
  2.47E-18 7.09E-19 2.18E-18 5.37E-19 1.94E-18 2.16E-18 5.38E-19 8.57E-19
   0.5000  0.1000  0.5000    1  6.23702E-18 kpt; spin; max resid(k); each band:
  7.46E-20 1.47E-20 3.71E-20 1.35E-20 4.39E-20 1.22E-20 2.53E-20 1.02E-20
  6.46E-20 1.53E-20 2.63E-20 1.46E-20 8.55E-20 1.23E-20 6.82E-20 9.18E-21
  3.03E-20 2.42E-20 8.02E-20 1.17E-20 3.52E-20 1.01E-20 2.69E-20 7.57E-21
  5.12E-20 6.89E-21 2.58E-20 6.38E-21 5.56E-20 7.90E-21 2.44E-20 7.81E-21
  4.85E-18 4.37E-18 6.24E-18 4.33E-18 2.14E-18 4.50E-18 4.18E-18 2.18E-18
  1.00E-18 1.26E-18 3.24E-18 4.27E-18 5.72E-18 1.65E-18 2.59E-18 1.75E-18
  1.89E-18 4.86E-18 5.07E-18 2.24E-18 3.76E-18 3.01E-18 2.68E-18 1.53E-18
  1.41E-18 1.26E-18 2.09E-18 1.25E-18 3.03E-18 2.70E-18 2.50E-18 2.89E-18
  1.65E-18 3.67E-18 2.61E-18 2.15E-18 2.42E-18 9.62E-19 1.51E-18 1.48E-18
  3.27E-18 3.19E-18 1.93E-18 8.25E-19 2.17E-18 8.93E-19 2.33E-18 2.44E-18
  1.28E-18 1.03E-18 2.45E-18 1.46E-18 1.56E-18 1.54E-18 7.51E-19 7.29E-19
  2.33E-18 9.67E-19 1.41E-18 2.69E-18 6.64E-19 3.03E-18 2.20E-18 2.46E-18
  2.92E-18 8.08E-19 2.69E-18 2.22E-18 5.39E-19 9.47E-19 2.26E-18 5.78E-19
  -0.3000  0.1000  0.5000    1  7.06575E-18 kpt; spin; max resid(k); each band:
  8.11E-20 1.49E-20 6.85E-20 1.36E-20 2.16E-20 1.21E-20 2.03E-20 1.02E-20
  4.36E-20 1.46E-20 3.77E-20 1.40E-20 4.29E-20 1.25E-20 7.18E-20 1.15E-20
  4.28E-20 9.16E-21 2.86E-20 9.96E-21 4.68E-20 6.83E-21 2.51E-20 6.50E-21
  2.48E-20 2.97E-20 5.35E-20 8.53E-21 2.34E-20 7.02E-21 2.35E-20 7.75E-21
  4.68E-18 3.27E-18 1.97E-18 7.07E-18 4.96E-18 8.84E-19 4.57E-18 4.27E-18
  2.31E-18 5.68E-18 4.81E-18 3.15E-18 1.54E-18 1.68E-18 2.54E-18 1.78E-18
  1.42E-18 4.78E-18 3.76E-18 3.45E-18 3.16E-18 2.37E-18 1.89E-18 7.38E-19
  2.72E-18 1.28E-18 3.47E-18 2.09E-18 3.20E-18 3.08E-18 2.18E-18 2.85E-18
  3.84E-18 1.57E-18 2.62E-18 2.22E-18 2.47E-18 2.05E-18 2.40E-18 8.82E-19
  1.46E-18 1.22E-18 2.07E-18 1.09E-18 1.35E-18 4.18E-18 8.05E-19 2.89E-18
  2.93E-18 9.36E-19 2.31E-18 1.76E-18 3.79E-18 3.88E-18 1.49E-18 1.43E-18
  7.52E-19 1.22E-18 2.55E-18 1.31E-18 2.03E-18 8.40E-19 2.66E-18 2.26E-18
  2.14E-18 6.38E-19 2.21E-18 5.65E-19 2.10E-18 5.37E-19 1.45E-18 7.28E-19
  -0.1000  0.1000  0.5000    1  6.75898E-18 kpt; spin; max resid(k); each band:
  8.47E-20 1.51E-20 3.96E-20 1.21E-20 1.05E-20 4.90E-21 4.84E-21 9.73E-22
  1.93E-20 4.48E-20 1.18E-20 9.32E-21 3.73E-20 1.44E-20 6.64E-20 1.22E-20
  4.94E-20 3.58E-20 3.32E-20 8.86E-21 6.66E-22 2.65E-21 4.83E-20 4.17E-20
  7.69E-21 5.81E-21 2.37E-20 2.71E-20 2.20E-20 6.92E-21 2.12E-20 7.28E-21
  4.52E-18 2.73E-18 1.99E-18 7.14E-19 5.02E-18 5.87E-18 6.76E-18 5.90E-18
  5.75E-18 6.03E-18 2.50E-18 2.38E-18 2.36E-18 1.62E-18 1.68E-18 1.67E-18
  1.41E-18 3.87E-18 3.94E-18 3.59E-18 2.30E-18 2.39E-18 2.17E-18 6.25E-19
  4.13E-18 3.97E-18 3.77E-18 2.04E-18 2.02E-18 2.40E-18 2.22E-18 2.19E-18
  2.30E-18 1.66E-18 1.75E-18 1.51E-18 1.56E-18 1.97E-18 7.72E-19 1.00E-18
  1.62E-18 8.05E-19 1.45E-18 5.58E-19 1.69E-18 1.38E-18 5.44E-19 4.35E-18
  4.50E-18 4.23E-18 2.85E-18 2.75E-18 2.80E-18 1.60E-18 1.19E-18 5.47E-19
  1.71E-18 1.71E-18 1.32E-18 7.48E-19 7.43E-19 1.57E-18 1.46E-18 4.59E-19
  2.84E-18 7.83E-19 2.19E-18 2.27E-18 5.69E-19 5.72E-19 9.68E-19 5.47E-19
   0.1000  0.3000  0.5000    1  6.85469E-18 kpt; spin; max resid(k); each band:
  8.34E-20 1.49E-20 6.08E-20 2.53E-20 3.91E-20 1.09E-20 2.34E-20 1.02E-20
  3.94E-20 1.34E-20 4.15E-20 1.46E-20 5.31E-20 1.48E-20 7.41E-20 3.88E-20
  1.19E-20 1.53E-20 6.77E-20 1.61E-20 2.72E-20 7.52E-21 5.96E-20 8.42E-21
  2.43E-20 6.30E-21 2.60E-20 7.91E-21 2.24E-20 7.66E-21 2.16E-20 6.86E-21
  4.90E-18 3.96E-18 5.12E-18 4.94E-18 2.12E-18 6.85E-18 9.25E-19 5.25E-18
  2.75E-18 1.43E-18 5.66E-18 2.37E-18 5.98E-18 1.57E-18 2.38E-18 1.74E-18
  1.55E-18 5.34E-18 4.61E-18 3.62E-18 2.93E-18 2.83E-18 1.67E-18 8.83E-19
  2.45E-18 1.39E-18 2.66E-18 1.61E-18 1.89E-18 3.73E-18 2.98E-18 1.82E-18
  3.81E-18 1.02E-18 2.49E-18 2.95E-18 2.52E-18 1.11E-18 2.73E-18 3.62E-18
  1.32E-18 1.97E-18 1.62E-18 2.56E-18 2.06E-18 1.04E-18 2.00E-18 7.44E-19
  3.15E-18 1.69E-18 2.04E-18 2.18E-18 8.12E-19 5.23E-19 1.73E-18 1.01E-18
  3.30E-18 1.76E-18 1.65E-18 1.81E-18 1.10E-18 1.33E-18 2.99E-18 2.60E-18
  2.40E-18 7.08E-19 2.26E-18 5.39E-19 1.95E-18 2.16E-18 5.34E-19 8.41E-19
   0.3000  0.3000  0.5000    1  5.80533E-18 kpt; spin; max resid(k); each band:
  8.05E-20 1.49E-20 4.72E-20 1.56E-20 7.20E-21 2.22E-21 3.12E-20 1.02E-20
  5.07E-20 1.40E-20 5.31E-20 6.96E-20 4.23E-20 1.64E-20 1.38E-20 1.66E-20
  4.16E-20 9.04E-21 8.53E-20 1.14E-20 5.00E-20 1.01E-20 1.13E-21 4.57E-21
  2.56E-20 6.30E-21 1.96E-20 2.79E-20 7.35E-21 6.78E-21 2.29E-20 7.44E-21
  4.84E-18 4.63E-18 5.69E-18 5.81E-18 4.32E-18 4.42E-18 2.48E-18 2.28E-18
  2.36E-18 1.05E-18 1.38E-18 1.38E-18 5.45E-18 5.74E-18 2.09E-18 1.50E-18
  4.19E-18 2.23E-18 2.53E-18 3.50E-18 3.49E-18 3.23E-18 1.82E-18 2.63E-18
  2.60E-18 1.91E-18 2.49E-18 2.50E-18 2.00E-18 1.19E-18 2.12E-18 2.07E-18
  2.89E-18 1.19E-18 1.88E-18 2.19E-18 1.03E-18 9.58E-19 3.33E-18 2.95E-18
  1.70E-18 2.48E-18 2.40E-18 9.15E-19 2.23E-18 2.05E-18 1.38E-18 1.44E-18
  1.06E-18 1.47E-18 1.78E-18 9.30E-19 2.59E-18 3.04E-18 1.07E-18 1.21E-18
  2.14E-18 8.15E-19 2.37E-18 2.37E-18 2.50E-18 1.31E-18 1.79E-18 2.11E-18
  2.43E-18 2.36E-18 6.28E-19 6.68E-19 2.51E-18 8.44E-19 2.12E-18 5.55E-19
   0.5000  0.3000  0.5000    1  6.93741E-18 kpt; spin; max resid(k); each band:
  8.00E-20 1.47E-20 7.02E-20 1.11E-20 2.29E-20 1.63E-20 3.07E-20 1.02E-20
  4.57E-20 1.48E-20 4.69E-20 1.06E-20 6.06E-20 1.47E-20 3.95E-20 1.13E-20
  7.87E-20 1.18E-20 4.69E-20 1.09E-20 6.07E-20 7.67E-21 2.43E-20 1.53E-20
  2.55E-20 6.33E-21 3.07E-20 8.03E-21 2.72E-20 1.81E-20 2.34E-20 7.94E-21
  4.84E-18 4.15E-18 5.15E-18 5.10E-18 6.94E-18 4.81E-18 2.21E-18 9.26E-19
  2.93E-18 2.27E-18 1.32E-18 1.45E-18 4.97E-18 6.51E-18 2.30E-18 1.77E-18
  1.99E-18 2.18E-18 4.23E-18 3.44E-18 3.19E-18 2.93E-18 1.52E-18 2.63E-18
  1.99E-18 1.17E-18 2.47E-18 2.39E-18 2.42E-18 2.01E-18 2.71E-18 3.89E-18
  2.11E-18 2.01E-18 2.52E-18 1.36E-18 2.53E-18 9.68E-19 3.38E-18 1.41E-18
  2.42E-18 2.52E-18 2.44E-18 2.25E-18 1.50E-18 8.06E-19 1.10E-18 1.23E-18
  2.08E-18 1.49E-18 3.32E-18 1.41E-18 1.90E-18 1.68E-18 7.32E-19 8.85E-19
  3.31E-18 1.52E-18 2.22E-18 1.84E-18 9.83E-19 1.44E-18 2.98E-18 2.52E-18
  2.47E-18 6.57E-19 2.20E-18 5.49E-19 2.46E-18 9.43E-19 2.19E-18 5.72E-19
  -0.3000  0.3000  0.5000    1  6.56733E-18 kpt; spin; max resid(k); each band:
  7.70E-20 1.48E-20 6.56E-20 1.11E-20 4.16E-20 1.23E-20 4.81E-21 9.21E-22
  2.01E-20 4.97E-20 1.06E-20 7.06E-21 4.47E-20 1.49E-20 7.15E-20 1.17E-20
  5.56E-20 6.16E-20 2.41E-20 7.72E-21 6.95E-21 4.22E-21 3.50E-20 8.60E-21
  5.06E-22 2.57E-21 2.40E-20 7.43E-21 2.25E-20 2.97E-20 2.16E-20 7.55E-21
  4.70E-18 3.62E-18 5.17E-18 2.10E-18 4.83E-18 8.64E-19 6.47E-18 6.57E-18
  2.62E-18 5.57E-18 5.79E-18 1.51E-18 2.39E-18 2.36E-18 1.65E-18 1.66E-18
  1.45E-18 4.73E-18 4.71E-18 3.09E-18 3.03E-18 3.15E-18 1.71E-18 7.73E-19
  2.77E-18 2.68E-18 1.41E-18 1.47E-18 1.84E-18 4.40E-18 1.71E-18 3.38E-18
  3.35E-18 1.31E-18 2.76E-18 2.79E-18 2.38E-18 1.02E-18 2.80E-18 2.99E-18
  1.57E-18 1.65E-18 1.30E-18 1.64E-18 1.02E-18 7.40E-19 3.61E-18 3.48E-18
  2.30E-18 2.26E-18 3.64E-18 1.34E-18 3.34E-18 2.18E-18 2.11E-18 1.29E-18
  7.14E-19 1.27E-18 1.26E-18 2.41E-18 2.90E-18 1.65E-18 5.24E-19 2.76E-18
  2.44E-18 8.47E-19 2.09E-18 2.13E-18 5.38E-19 5.33E-19 1.68E-18 7.61E-19
  -0.1000  0.3000  0.5000    1  7.02522E-18 kpt; spin; max resid(k); each band:
  8.08E-20 1.49E-20 3.86E-20 2.53E-20 1.82E-20 1.09E-20 2.14E-20 1.03E-20
  3.69E-20 1.29E-20 3.90E-20 1.53E-20 4.06E-20 1.32E-20 7.00E-20 1.16E-20
  5.63E-20 1.15E-20 7.17E-20 1.53E-20 2.84E-20 7.41E-21 2.24E-20 6.42E-21
  3.21E-20 2.88E-20 2.38E-20 8.10E-21 2.35E-20 7.94E-21 2.15E-20 6.50E-21
  4.69E-18 3.38E-18 2.04E-18 4.60E-18 4.56E-18 9.10E-19 7.03E-18 5.38E-18
  2.65E-18 5.97E-18 5.09E-18 2.97E-18 1.61E-18 1.58E-18 2.35E-18 1.77E-18
  1.41E-18 4.84E-18 4.12E-18 3.20E-18 3.22E-18 2.40E-18 1.90E-18 7.18E-19
  2.78E-18 1.27E-18 3.59E-18 2.06E-18 2.89E-18 3.22E-18 2.29E-18 2.81E-18
  3.81E-18 1.61E-18 2.64E-18 2.22E-18 2.38E-18 2.02E-18 2.40E-18 8.62E-19
  1.49E-18 1.20E-18 1.93E-18 9.87E-19 1.35E-18 4.46E-18 7.80E-19 2.87E-18
  2.85E-18 9.71E-19 2.39E-18 1.90E-18 3.52E-18 3.97E-18 1.47E-18 1.42E-18
  7.37E-19 1.25E-18 2.58E-18 1.34E-18 1.84E-18 8.27E-19 2.65E-18 2.26E-18
  2.25E-18 6.40E-19 2.15E-18 5.62E-19 2.09E-18 5.26E-19 1.45E-18 7.28E-19
   0.1000  0.5000  0.5000    1  7.02249E-18 kpt; spin; max resid(k); each band:
  9.51E-20 1.48E-20 4.66E-20 2.50E-20 4.19E-20 1.08E-20 2.53E-20 1.02E-20
  4.06E-20 1.25E-20 4.03E-20 3.46E-20 6.97E-20 1.43E-20 7.03E-20 1.07E-20
  2.89E-20 2.56E-20 8.11E-20 1.15E-20 6.17E-20 1.86E-20 2.48E-20 8.29E-21
  2.86E-20 7.46E-21 2.39E-20 6.28E-21 2.22E-20 7.99E-21 2.19E-20 6.18E-21
  4.80E-18 4.32E-18 4.95E-18 4.33E-18 2.16E-18 7.02E-18 5.10E-18 2.66E-18
  1.02E-18 1.03E-18 2.99E-18 5.21E-18 5.97E-18 1.56E-18 2.42E-18 1.74E-18
  1.86E-18 4.86E-18 5.80E-18 2.53E-18 3.80E-18 3.42E-18 2.66E-18 1.52E-18
  1.47E-18 1.28E-18 2.15E-18 1.25E-18 2.92E-18 2.82E-18 2.71E-18 2.85E-18
  1.62E-18 3.60E-18 2.58E-18 2.03E-18 2.38E-18 9.61E-19 1.44E-18 1.58E-18
  3.38E-18 3.30E-18 1.90E-18 8.23E-19 2.21E-18 9.19E-19 2.51E-18 2.81E-18
  1.21E-18 1.02E-18 2.47E-18 1.46E-18 1.50E-18 1.89E-18 7.68E-19 7.14E-19
  2.46E-18 8.95E-19 1.51E-18 2.56E-18 7.49E-19 3.01E-18 2.10E-18 2.53E-18
  2.76E-18 8.33E-19 2.69E-18 2.33E-18 5.56E-19 9.31E-19 2.29E-18 5.77E-19
   0.3000  0.5000  0.5000    1  7.00991E-18 kpt; spin; max resid(k); each band:
  8.34E-20 1.47E-20 5.06E-20 1.11E-20 2.23E-20 1.62E-20 3.04E-20 1.03E-20
  4.26E-20 1.34E-20 4.38E-20 1.12E-20 5.24E-20 1.55E-20 6.22E-20 1.53E-20
  7.66E-20 1.16E-20 2.39E-20 1.06E-20 5.98E-20 7.70E-21 2.57E-20 1.54E-20
  2.47E-20 6.31E-21 2.30E-20 7.62E-21 3.07E-20 1.88E-20 2.25E-20 7.22E-21
  4.95E-18 4.25E-18 5.14E-18 5.07E-18 7.01E-18 4.78E-18 2.24E-18 9.95E-19
  2.82E-18 2.31E-18 1.29E-18 1.45E-18 4.83E-18 6.66E-18 2.27E-18 1.77E-18
  1.92E-18 2.23E-18 4.28E-18 3.48E-18 3.14E-18 2.87E-18 1.58E-18 2.50E-18
  1.98E-18 1.17E-18 2.48E-18 2.39E-18 2.42E-18 2.13E-18 2.75E-18 3.73E-18
  2.24E-18 1.99E-18 2.54E-18 1.37E-18 2.51E-18 9.59E-19 3.37E-18 1.38E-18
  2.45E-18 2.54E-18 2.42E-18 2.28E-18 1.52E-18 7.40E-19 1.11E-18 1.27E-18
  2.07E-18 1.49E-18 3.08E-18 1.41E-18 1.91E-18 1.54E-18 7.24E-19 8.64E-19
  3.37E-18 1.49E-18 2.20E-18 1.84E-18 9.45E-19 1.46E-18 3.04E-18 2.53E-18
  2.49E-18 6.81E-19 2.20E-18 5.47E-19 2.50E-18 9.46E-19 2.17E-18 5.78E-19
   0.5000  0.5000  0.5000    1  6.76402E-18 kpt; spin; max resid(k); each band:
  8.64E-20 2.18E-20 7.90E-21 2.03E-21 4.81E-20 1.24E-20 4.81E-21 9.06E-22
  1.14E-20 5.41E-20 8.21E-21 2.18E-21 1.22E-19 1.64E-20 6.08E-21 1.28E-21
  3.59E-20 7.21E-21 3.75E-21 5.36E-22 1.03E-19 1.78E-20 1.82E-21 5.11E-21
  3.50E-20 8.57E-21 4.73E-22 2.56E-21 8.03E-21 2.85E-20 3.43E-21 5.94E-22
  4.60E-18 4.67E-18 4.20E-18 4.36E-18 2.59E-18 2.55E-18 8.96E-19 9.36E-19
  6.30E-18 6.76E-18 4.99E-18 5.69E-18 2.34E-18 2.29E-18 1.66E-18 1.64E-18
  4.97E-18 6.23E-18 2.92E-18 2.08E-18 3.66E-18 3.66E-18 1.48E-18 2.16E-18
  2.56E-18 1.35E-18 1.30E-18 1.28E-18 3.18E-18 3.12E-18 2.27E-18 2.34E-18
  2.87E-18 2.91E-18 2.80E-18 2.91E-18 1.91E-18 1.91E-18 4.03E-18 4.76E-18
  8.71E-19 8.80E-19 3.47E-18 3.21E-18 1.47E-18 1.49E-18 6.47E-19 6.63E-19
  3.10E-18 3.47E-18 1.35E-18 1.47E-18 1.52E-18 1.42E-18 1.41E-18 1.45E-18
  6.38E-19 6.62E-19 6.44E-19 7.57E-19 3.16E-18 3.09E-18 2.74E-18 2.45E-18
  2.87E-18 3.00E-18 9.02E-19 9.21E-19 2.29E-18 2.37E-18 5.41E-19 5.49E-19

 outwf: write wavefunction to file abo_DS4_WFK, with iomode -1
 outwf with iomode: -1, cpu_time:     3.64[s], walltime:     8.53 [s]
 prteigrs : about to open file abo_DS4_EIG
 Fermi (or HOMO) energy (hartree) =  -0.05372   Average Vxc (hartree)=  -0.14216
 Eigenvalues (hartree) for nkpt=  13  k points:
 kpt#   1, nband=104, wtk=  0.08000, kpt=  0.1000  0.1000  0.5000 (reduced coord)
  -2.78690   -2.78687   -2.78634   -2.78628   -2.78627   -2.78627   -2.78624   -2.78622
  -1.47941   -1.47933   -1.47904   -1.47901   -1.47895   -1.47895   -1.47302   -1.47297
  -1.47089   -1.47085   -1.47082   -1.47082   -1.47069   -1.47064   -1.47061   -1.47055
  -1.46987   -1.46983   -1.46979   -1.46979   -1.46770   -1.46763   -1.46697   -1.46690
  -0.61001   -0.60518   -0.55441   -0.54612   -0.53865   -0.53844   -0.53553   -0.53537
  -0.53072   -0.52838   -0.52594   -0.52590   -0.52347   -0.52336   -0.52262   -0.52118
  -0.30866   -0.30471   -0.30261   -0.30251   -0.29901   -0.29685   -0.29676   -0.28786
  -0.26458   -0.26189   -0.25851   -0.25843   -0.25293   -0.25288   -0.23506   -0.23493
  -0.23480   -0.22243   -0.22217   -0.22204   -0.19476   -0.19191   -0.19067   -0.19053
  -0.18956   -0.18950   -0.18198   -0.18141   -0.17595   -0.16540   -0.16488   -0.15066
  -0.14907   -0.14861   -0.14851   -0.14375   -0.14292   -0.14226   -0.14217   -0.13859
  -0.13262   -0.13131   -0.12669   -0.12658   -0.12350   -0.12339   -0.12091   -0.11009
  -0.10155   -0.10143   -0.09776   -0.09768   -0.09142   -0.08681   -0.07879   -0.05802
 kpt#   2, nband=104, wtk=  0.08000, kpt=  0.3000  0.1000  0.5000 (reduced coord)
  -2.78676   -2.78672   -2.78645   -2.78642   -2.78633   -2.78629   -2.78622   -2.78620
  -1.47815   -1.47807   -1.47755   -1.47748   -1.47630   -1.47623   -1.47250   -1.47247
  -1.47244   -1.47240   -1.47140   -1.47135   -1.47095   -1.47090   -1.47082   -1.47075
  -1.47061   -1.47056   -1.47053   -1.47046   -1.46915   -1.46908   -1.46768   -1.46761
  -0.59537   -0.59058   -0.55990   -0.55570   -0.54844   -0.54275   -0.54108   -0.53925
  -0.53420   -0.52947   -0.52776   -0.52707   -0.52552   -0.52383   -0.52064   -0.51921
  -0.29231   -0.28766   -0.28564   -0.28320   -0.28189   -0.28063   -0.27428   -0.27182
  -0.27010   -0.26851   -0.25210   -0.25025   -0.24529   -0.23353   -0.23194   -0.23096
  -0.22981   -0.22209   -0.22062   -0.21976   -0.21213   -0.21078   -0.20160   -0.19965
  -0.19616   -0.19187   -0.19127   -0.18413   -0.18257   -0.18037   -0.17984   -0.17845
  -0.16386   -0.16023   -0.15499   -0.15294   -0.15197   -0.15156   -0.15018   -0.14224
  -0.14026   -0.13742   -0.13294   -0.13293   -0.13195   -0.12930   -0.12191   -0.10925
  -0.10839   -0.10509   -0.09553   -0.09351   -0.08621   -0.08422   -0.07995   -0.07944
 kpt#   3, nband=104, wtk=  0.08000, kpt=  0.5000  0.1000  0.5000 (reduced coord)
  -2.78666   -2.78662   -2.78654   -2.78652   -2.78633   -2.78630   -2.78622   -2.78619
  -1.47754   -1.47746   -1.47701   -1.47693   -1.47443   -1.47436   -1.47321   -1.47314
  -1.47244   -1.47237   -1.47214   -1.47208   -1.47176   -1.47171   -1.47126   -1.47119
  -1.47097   -1.47092   -1.47059   -1.47054   -1.46867   -1.46860   -1.46816   -1.46810
  -0.58465   -0.57995   -0.57251   -0.56799   -0.54409   -0.54370   -0.54011   -0.53920
  -0.53745   -0.53345   -0.52731   -0.52718   -0.52494   -0.52387   -0.52016   -0.51868
  -0.28243   -0.27968   -0.27895   -0.27688   -0.27669   -0.27494   -0.27213   -0.26965
  -0.26354   -0.26333   -0.25050   -0.24822   -0.24077   -0.23185   -0.22991   -0.22861
  -0.22549   -0.22411   -0.22144   -0.22100   -0.21914   -0.21138   -0.20842   -0.20623
  -0.20540   -0.19796   -0.19545   -0.19507   -0.19219   -0.18650   -0.17542   -0.17519
  -0.17304   -0.17211   -0.16592   -0.16381   -0.14972   -0.14426   -0.14316   -0.14212
  -0.13719   -0.13588   -0.13370   -0.13316   -0.12971   -0.12683   -0.12291   -0.11508
  -0.10475   -0.10165   -0.09485   -0.09468   -0.09364   -0.09271   -0.08230   -0.07896
 kpt#   4, nband=104, wtk=  0.08000, kpt= -0.3000  0.1000  0.5000 (reduced coord)
  -2.78684   -2.78681   -2.78638   -2.78633   -2.78631   -2.78628   -2.78623   -2.78621
  -1.47887   -1.47879   -1.47833   -1.47825   -1.47788   -1.47781   -1.47280   -1.47275
  -1.47149   -1.47142   -1.47109   -1.47104   -1.47092   -1.47087   -1.47064   -1.47059
  -1.47026   -1.47019   -1.46956   -1.46949   -1.46890   -1.46883   -1.46727   -1.46720
  -0.60399   -0.59917   -0.55195   -0.54806   -0.54435   -0.54403   -0.54095   -0.53762
  -0.52958   -0.52893   -0.52670   -0.52660   -0.52595   -0.52370   -0.52150   -0.52012
  -0.30171   -0.29731   -0.29467   -0.29274   -0.29198   -0.28911   -0.28677   -0.28094
  -0.26672   -0.26627   -0.25548   -0.25153   -0.25128   -0.24375   -0.23435   -0.23368
  -0.23303   -0.22190   -0.22121   -0.22110   -0.19737   -0.19562   -0.19538   -0.19480
  -0.19118   -0.19005   -0.18753   -0.18584   -0.18511   -0.16488   -0.16292   -0.16002
  -0.15990   -0.15925   -0.15037   -0.14721   -0.14539   -0.14381   -0.14271   -0.14257
  -0.14122   -0.14111   -0.13784   -0.13715   -0.12954   -0.12721   -0.11997   -0.10735
  -0.10585   -0.10272   -0.09747   -0.09444   -0.08723   -0.08241   -0.08101   -0.06686
 kpt#   5, nband=104, wtk=  0.08000, kpt= -0.1000  0.1000  0.5000 (reduced coord)
  -2.78693   -2.78690   -2.78632   -2.78625   -2.78625   -2.78625   -2.78624   -2.78624
  -1.47964   -1.47961   -1.47954   -1.47954   -1.47949   -1.47941   -1.47314   -1.47308
  -1.47082   -1.47076   -1.47076   -1.47073   -1.47070   -1.47070   -1.47003   -1.46999
  -1.46994   -1.46994   -1.46974   -1.46968   -1.46707   -1.46700   -1.46681   -1.46675
  -0.61310   -0.60827   -0.55567   -0.54719   -0.53581   -0.53326   -0.53299   -0.53293
  -0.53062   -0.53047   -0.52497   -0.52385   -0.52381   -0.52291   -0.52219   -0.52210
  -0.31231   -0.30826   -0.30818   -0.30741   -0.30243   -0.30234   -0.30157   -0.29150
  -0.26268   -0.26261   -0.26074   -0.25787   -0.25784   -0.25487   -0.23577   -0.23563
  -0.23561   -0.22310   -0.22293   -0.22283   -0.19209   -0.19193   -0.19147   -0.19141
  -0.19089   -0.18911   -0.17415   -0.17362   -0.17029   -0.16838   -0.16785   -0.15008
  -0.15000   -0.14991   -0.14463   -0.14457   -0.14435   -0.13853   -0.12696   -0.12578
  -0.12465   -0.12463   -0.12246   -0.12074   -0.12072   -0.11515   -0.11434   -0.11039
  -0.10672   -0.10184   -0.09799   -0.09797   -0.09396   -0.09392   -0.07816   -0.05372
 kpt#   6, nband=104, wtk=  0.08000, kpt=  0.1000  0.3000  0.5000 (reduced coord)
  -2.78676   -2.78672   -2.78645   -2.78642   -2.78632   -2.78629   -2.78622   -2.78620
  -1.47815   -1.47807   -1.47755   -1.47748   -1.47630   -1.47623   -1.47250   -1.47247
  -1.47244   -1.47240   -1.47140   -1.47135   -1.47095   -1.47090   -1.47082   -1.47075
  -1.47061   -1.47056   -1.47053   -1.47046   -1.46915   -1.46908   -1.46768   -1.46761
  -0.59537   -0.59058   -0.55990   -0.55570   -0.54844   -0.54275   -0.54108   -0.53925
  -0.53420   -0.52947   -0.52776   -0.52707   -0.52552   -0.52383   -0.52063   -0.51921
  -0.29231   -0.28766   -0.28564   -0.28320   -0.28189   -0.28062   -0.27428   -0.27182
  -0.27011   -0.26851   -0.25210   -0.25025   -0.24528   -0.23353   -0.23195   -0.23096
  -0.22981   -0.22209   -0.22062   -0.21976   -0.21213   -0.21078   -0.20160   -0.19965
  -0.19616   -0.19187   -0.19127   -0.18413   -0.18257   -0.18036   -0.17984   -0.17846
  -0.16386   -0.16023   -0.15498   -0.15293   -0.15198   -0.15156   -0.15018   -0.14224
  -0.14026   -0.13741   -0.13294   -0.13293   -0.13195   -0.12930   -0.12191   -0.10924
  -0.10840   -0.10510   -0.09553   -0.09351   -0.08621   -0.08422   -0.07995   -0.07944
 kpt#   7, nband=104, wtk=  0.08000, kpt=  0.3000  0.3000  0.5000 (reduced coord)
  -2.78660   -2.78655   -2.78650   -2.78647   -2.78646   -2.78646   -2.78618   -2.78616
  -1.47677   -1.47669   -1.47494   -1.47490   -1.47489   -1.47485   -1.47485   -1.47482
  -1.47338   -1.47331   -1.47190   -1.47184   -1.47157   -1.47154   -1.47150   -1.47150
  -1.47045   -1.47040   -1.46954   -1.46952   -1.46946   -1.46946   -1.46882   -1.46876
  -0.57708   -0.57247   -0.56571   -0.56555   -0.56132   -0.56116   -0.54098   -0.53633
  -0.53631   -0.53486   -0.53109   -0.53100   -0.52035   -0.51964   -0.51700   -0.51674
  -0.28157   -0.27818   -0.27544   -0.27186   -0.27171   -0.26869   -0.26772   -0.26107
  -0.26097   -0.25745   -0.24037   -0.24026   -0.23435   -0.23388   -0.23336   -0.23327
  -0.23240   -0.22962   -0.22113   -0.22106   -0.21638   -0.21624   -0.21171   -0.21124
  -0.20971   -0.20020   -0.20016   -0.19936   -0.19038   -0.18978   -0.18813   -0.18811
  -0.18600   -0.18185   -0.15570   -0.15213   -0.15119   -0.15108   -0.15059   -0.15054
  -0.14702   -0.14650   -0.12147   -0.12131   -0.11809   -0.11803   -0.11790   -0.11144
  -0.09971   -0.09962   -0.09888   -0.09882   -0.09662   -0.09642   -0.07004   -0.06587
 kpt#   8, nband=104, wtk=  0.08000, kpt=  0.5000  0.3000  0.5000 (reduced coord)
  -2.78668   -2.78664   -2.78648   -2.78645   -2.78639   -2.78637   -2.78620   -2.78617
  -1.47754   -1.47747   -1.47635   -1.47628   -1.47547   -1.47539   -1.47376   -1.47369
  -1.47222   -1.47217   -1.47188   -1.47180   -1.47150   -1.47145   -1.47123   -1.47118
  -1.47051   -1.47046   -1.47023   -1.47016   -1.46933   -1.46926   -1.46818   -1.46811
  -0.58722   -0.58249   -0.56368   -0.55935   -0.55379   -0.54976   -0.54511   -0.53829
  -0.53561   -0.53152   -0.53052   -0.52722   -0.52306   -0.52153   -0.51833   -0.51758
  -0.28397   -0.27952   -0.27703   -0.27650   -0.27575   -0.27542   -0.27464   -0.27100
  -0.26651   -0.26393   -0.24272   -0.24162   -0.23645   -0.23203   -0.23171   -0.22839
  -0.22635   -0.22432   -0.22417   -0.22290   -0.22270   -0.22007   -0.20589   -0.20270
  -0.20238   -0.20146   -0.19277   -0.19122   -0.19055   -0.18740   -0.18574   -0.18406
  -0.17252   -0.16870   -0.15841   -0.15664   -0.15443   -0.14816   -0.14744   -0.14714
  -0.14439   -0.14324   -0.12895   -0.12834   -0.12583   -0.12318   -0.11854   -0.10865
  -0.10271   -0.10092   -0.09861   -0.09784   -0.09137   -0.08888   -0.07637   -0.07202
 kpt#   9, nband=104, wtk=  0.08000, kpt= -0.3000  0.3000  0.5000 (reduced coord)
  -2.78681   -2.78678   -2.78642   -2.78638   -2.78628   -2.78625   -2.78624   -2.78624
  -1.47843   -1.47840   -1.47834   -1.47834   -1.47717   -1.47710   -1.47270   -1.47264
  -1.47128   -1.47126   -1.47124   -1.47120   -1.47119   -1.47119   -1.47077   -1.47073
  -1.47070   -1.47070   -1.46950   -1.46943   -1.46919   -1.46912   -1.46738   -1.46731
  -0.60107   -0.59625   -0.55455   -0.55077   -0.55055   -0.54303   -0.53406   -0.53385
  -0.53217   -0.53118   -0.53103   -0.52793   -0.52355   -0.52351   -0.52140   -0.52130
  -0.29848   -0.29312   -0.29304   -0.28812   -0.28802   -0.28791   -0.28154   -0.27780
  -0.26169   -0.26164   -0.26072   -0.26070   -0.24812   -0.23787   -0.23361   -0.23206
  -0.23195   -0.22228   -0.22022   -0.22012   -0.20180   -0.20067   -0.19950   -0.19946
  -0.19132   -0.19119   -0.18970   -0.18174   -0.18000   -0.16985   -0.16531   -0.16526
  -0.16063   -0.16061   -0.15708   -0.15622   -0.14637   -0.14552   -0.14545   -0.14356
  -0.14224   -0.13899   -0.13895   -0.13602   -0.12359   -0.12253   -0.11970   -0.11498
  -0.10960   -0.10904   -0.09105   -0.09100   -0.08730   -0.08727   -0.08268   -0.07146
 kpt#  10, nband=104, wtk=  0.08000, kpt= -0.1000  0.3000  0.5000 (reduced coord)
  -2.78684   -2.78681   -2.78638   -2.78633   -2.78631   -2.78628   -2.78623   -2.78621
  -1.47887   -1.47879   -1.47833   -1.47825   -1.47788   -1.47781   -1.47280   -1.47275
  -1.47149   -1.47142   -1.47109   -1.47104   -1.47092   -1.47087   -1.47064   -1.47059
  -1.47026   -1.47019   -1.46956   -1.46949   -1.46890   -1.46883   -1.46727   -1.46720
  -0.60399   -0.59917   -0.55195   -0.54806   -0.54435   -0.54403   -0.54095   -0.53762
  -0.52958   -0.52893   -0.52671   -0.52660   -0.52595   -0.52370   -0.52149   -0.52011
  -0.30171   -0.29731   -0.29467   -0.29275   -0.29198   -0.28911   -0.28678   -0.28094
  -0.26673   -0.26627   -0.25548   -0.25154   -0.25127   -0.24375   -0.23435   -0.23368
  -0.23304   -0.22190   -0.22122   -0.22109   -0.19738   -0.19561   -0.19537   -0.19480
  -0.19119   -0.19005   -0.18752   -0.18584   -0.18512   -0.16488   -0.16293   -0.16003
  -0.15991   -0.15926   -0.15036   -0.14722   -0.14540   -0.14381   -0.14270   -0.14257
  -0.14121   -0.14111   -0.13784   -0.13716   -0.12954   -0.12722   -0.11997   -0.10735
  -0.10585   -0.10272   -0.09746   -0.09444   -0.08723   -0.08241   -0.08101   -0.06687
 kpt#  11, nband=104, wtk=  0.08000, kpt=  0.1000  0.5000  0.5000 (reduced coord)
  -2.78666   -2.78662   -2.78655   -2.78652   -2.78633   -2.78630   -2.78622   -2.78619
  -1.47754   -1.47746   -1.47701   -1.47693   -1.47443   -1.47436   -1.47321   -1.47314
  -1.47244   -1.47237   -1.47214   -1.47208   -1.47176   -1.47171   -1.47126   -1.47119
  -1.47097   -1.47092   -1.47059   -1.47054   -1.46867   -1.46860   -1.46816   -1.46810
  -0.58465   -0.57995   -0.57251   -0.56799   -0.54409   -0.54370   -0.54011   -0.53921
  -0.53745   -0.53345   -0.52731   -0.52718   -0.52494   -0.52387   -0.52016   -0.51867
  -0.28243   -0.27968   -0.27895   -0.27688   -0.27669   -0.27494   -0.27214   -0.26965
  -0.26354   -0.26333   -0.25050   -0.24822   -0.24077   -0.23185   -0.22991   -0.22861
  -0.22549   -0.22412   -0.22143   -0.22101   -0.21913   -0.21138   -0.20842   -0.20623
  -0.20539   -0.19796   -0.19545   -0.19507   -0.19219   -0.18650   -0.17541   -0.17518
  -0.17304   -0.17211   -0.16591   -0.16380   -0.14972   -0.14426   -0.14317   -0.14212
  -0.13719   -0.13589   -0.13370   -0.13316   -0.12971   -0.12683   -0.12291   -0.11507
  -0.10475   -0.10166   -0.09486   -0.09467   -0.09364   -0.09272   -0.08230   -0.07896
 kpt#  12, nband=104, wtk=  0.08000, kpt=  0.3000  0.5000  0.5000 (reduced coord)
  -2.78668   -2.78664   -2.78649   -2.78645   -2.78639   -2.78637   -2.78620   -2.78617
  -1.47754   -1.47747   -1.47635   -1.47628   -1.47547   -1.47539   -1.47376   -1.47369
  -1.47222   -1.47217   -1.47188   -1.47180   -1.47150   -1.47145   -1.47123   -1.47118
  -1.47051   -1.47046   -1.47023   -1.47016   -1.46933   -1.46926   -1.46818   -1.46811
  -0.58722   -0.58248   -0.56368   -0.55935   -0.55379   -0.54976   -0.54511   -0.53829
  -0.53561   -0.53152   -0.53052   -0.52722   -0.52306   -0.52153   -0.51833   -0.51758
  -0.28397   -0.27952   -0.27703   -0.27650   -0.27575   -0.27542   -0.27464   -0.27100
  -0.26652   -0.26393   -0.24272   -0.24161   -0.23646   -0.23203   -0.23171   -0.22839
  -0.22635   -0.22432   -0.22417   -0.22289   -0.22270   -0.22007   -0.20588   -0.20270
  -0.20237   -0.20146   -0.19277   -0.19121   -0.19055   -0.18740   -0.18574   -0.18405
  -0.17251   -0.16870   -0.15841   -0.15664   -0.15443   -0.14816   -0.14744   -0.14714
  -0.14439   -0.14324   -0.12896   -0.12835   -0.12583   -0.12318   -0.11854   -0.10865
  -0.10270   -0.10092   -0.09861   -0.09785   -0.09138   -0.08889   -0.07637   -0.07202
 kpt#  13, nband=104, wtk=  0.04000, kpt=  0.5000  0.5000  0.5000 (reduced coord)
  -2.78664   -2.78659   -2.78658   -2.78658   -2.78628   -2.78625   -2.78624   -2.78624
  -1.47740   -1.47738   -1.47732   -1.47732   -1.47339   -1.47334   -1.47330   -1.47330
  -1.47234   -1.47229   -1.47225   -1.47225   -1.47200   -1.47196   -1.47192   -1.47192
  -1.47077   -1.47073   -1.47070   -1.47070   -1.46829   -1.46828   -1.46822   -1.46822
  -0.57973   -0.57957   -0.57509   -0.57493   -0.54210   -0.54208   -0.53587   -0.53577
  -0.53455   -0.53436   -0.53153   -0.53138   -0.52335   -0.52331   -0.52093   -0.52082
  -0.27994   -0.27994   -0.27971   -0.27965   -0.27700   -0.27691   -0.26291   -0.26283
  -0.26283   -0.26272   -0.26030   -0.26026   -0.23519   -0.23492   -0.22947   -0.22927
  -0.22398   -0.22394   -0.21981   -0.21971   -0.21519   -0.21511   -0.20391   -0.20380
  -0.20335   -0.20332   -0.19233   -0.19233   -0.19118   -0.19116   -0.18476   -0.18460
  -0.16490   -0.16467   -0.16320   -0.16305   -0.14189   -0.14183   -0.13900   -0.13873
  -0.13746   -0.13725   -0.13549   -0.13548   -0.13523   -0.13497   -0.12150   -0.12145
  -0.10091   -0.10081   -0.09808   -0.09797   -0.08939   -0.08934   -0.08739   -0.08732
 Total charge density [el/Bohr^3]
      Maximum=    1.5296E+00  at reduced coord.    0.8333    0.1667    0.0750
 Next maximum=    1.5296E+00  at reduced coord.    0.3333    0.6667    0.0750
      Minimum=   -6.7898E-02  at reduced coord.    0.1667    0.3333    0.0389
 Next minimum=   -6.7027E-02  at reduced coord.    0.1667    0.8333    0.0361
   Integrated=    2.0800E+02

Constant unreduced E calculation  - final values:
 (a. u.)
       E:   0.000000000E+00   0.000000000E+00   5.000000000E-04  
       P:   8.164853439E-08   5.102994651E-09   8.216424698E-08

    ebar:   0.000000000E+00   0.000000000E+00   3.789882395E-02  
    pbar:   1.225555262E-05  -5.464430101E-06   7.826155496E-05

       e:   0.000000000E+00   0.000000000E+00   4.916319000E-03  
       p:   6.632914698E-05   4.620143700E-06   1.015226146E-05

 (S.I.), that is V/m for E, and C/m^2 for P
-      E:   0.000000000E+00   0.000000000E+00   2.571103160E+08  
       P:   4.671501420E-06   2.919666218E-07   4.701007793E-06  


 Please check: COMMENT - 
  As a rough estimate,
  to be below the critical field, the bandgap of your system
  should be larger than    1.03 eV.

--------------------------------------------------------------------------------

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)= -1.19193253E-06  sigma(3 2)=  1.96483539E-10
  sigma(2 2)= -1.19016843E-06  sigma(3 1)= -1.01943838E-07
  sigma(3 3)= -2.07222885E-06  sigma(2 1)=  2.74414811E-08

-Cartesian components of stress tensor (GPa)         [Pressure=  4.3684E-02 GPa]
- sigma(1 1)= -3.50678599E-02  sigma(3 2)=  5.78074434E-06
- sigma(2 2)= -3.50159584E-02  sigma(3 1)= -2.99929076E-03
- sigma(3 3)= -6.09670674E-02  sigma(2 1)=  8.07356112E-04

== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
            acell      1.0000000000E+00  1.0000000000E+00  1.0000000000E+00 Bohr
              amu      1.83850000E+02  3.20660000E+01
         berryopt           4
             ecut      1.83746627E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           efield      0.00000000E+00  0.00000000E+00  5.00000000E-04
           etotal4    -7.1847021737E+02
            fcart4     1.7205686631E-06 -2.2359115053E-08  3.4446319337E-03
                       6.1610576992E-07 -1.4227712331E-06  3.4634056083E-03
                       2.1912658636E-06  8.9866365663E-07  3.4626554773E-03
                      -2.3928177046E-07  4.6581674244E-07  3.4641563297E-03
                       8.6851874233E-04 -4.7406685811E-04  4.4094179854E-03
                      -5.5447696669E-04 -3.4748410891E-04  4.1896237091E-03
                       4.7395607755E-05  8.2116285650E-04  4.2991112191E-03
                      -6.9309153100E-06  3.5646512439E-08  3.4045201391E-03
                      -4.2905991764E-04  4.5716360531E-07 -5.1189807821E-03
                       5.4528574552E-05  1.1633444767E-05 -1.8781485316E-03
                      -1.1150146702E-06 -3.2117894860E-05 -1.8798380816E-03
                       1.9099339961E-05  2.0465419736E-05 -1.8764348208E-03
                      -2.3012193325E-05  1.3392042169E-05 -1.6028797321E-03
                       2.7295276323E-05  1.5659680278E-05 -1.5950650326E-03
                       1.7743794853E-07 -2.9037260284E-05 -1.5989687025E-03
                       1.1511039585E-07  4.7614396872E-09 -1.6341647280E-03
                       7.4656736502E-07 -1.2940070286E-07 -1.7638400500E-03
                       3.1159840449E-07 -7.5904544505E-08 -1.7637512506E-03
                       4.8258207629E-07  2.7138504098E-07 -1.7637955910E-03
                       4.9451917413E-07  2.3154949337E-08 -1.7661157429E-03
                      -7.4649489732E-06 -2.1389549848E-08 -1.1791793956E-03
                       1.1382948788E-05  6.5494609401E-05 -1.5721244115E-03
                      -6.3153840957E-05 -4.3053587424E-05 -1.5627362496E-03
                       5.0376833964E-05 -2.2533110070E-05 -1.5814992991E-03
-          fftalg         312
         fftcache       32384
           irdden           1
           irdwfk           1
           istwfk        0    0    0    0    0    0    0    0    0    0
                         0    0    1
              ixc          11
           jdtset        4
              kpt      1.00000000E-01  1.00000000E-01  5.00000000E-01
                       3.00000000E-01  1.00000000E-01  5.00000000E-01
                       5.00000000E-01  1.00000000E-01  5.00000000E-01
                      -3.00000000E-01  1.00000000E-01  5.00000000E-01
                      -1.00000000E-01  1.00000000E-01  5.00000000E-01
                       1.00000000E-01  3.00000000E-01  5.00000000E-01
                       3.00000000E-01  3.00000000E-01  5.00000000E-01
                       5.00000000E-01  3.00000000E-01  5.00000000E-01
                      -3.00000000E-01  3.00000000E-01  5.00000000E-01
                      -1.00000000E-01  3.00000000E-01  5.00000000E-01
                       1.00000000E-01  5.00000000E-01  5.00000000E-01
                       3.00000000E-01  5.00000000E-01  5.00000000E-01
                       5.00000000E-01  5.00000000E-01  5.00000000E-01
         kptrlatt        5    0    0      0    5    0      0    0    1
          kptrlen      5.97234168E+01
P           mkmem           1
            natom          24
            nband         104
           ndtset           1
            ngfft          48      48     300
          ngfftdg          60      60     360
             nkpt          13
         npulayit           9
            nstep        1000
             nsym           1
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
                       2.000000  2.000000
        pawecutdg      2.57245278E+01 Hartree
            rprim      1.1944683354E+01  0.0000000000E+00  0.0000000000E+00
                      -5.9723416772E+00  1.0344399225E+01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.5797647904E+01
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup           1
           strten4    -1.1919325303E-06 -1.1901684344E-06 -2.0722288513E-06
                       1.9648353943E-10 -1.0194383806E-07  2.7441481110E-08
        symmorphi           0
           toldfe      1.00000000E-10 Hartree
            typat      1  1  1  1  1  1  1  1  2  2  2  2  2  2  2  2  2  2  2  2
                       2  2  2  2
           useylm           1
      vdw_tol_3bt      1.00000000E-10
           vdw_xc           7
         wfoptalg         114
              wtk        0.08000    0.08000    0.08000    0.08000    0.08000    0.08000
                         0.08000    0.08000    0.08000    0.08000    0.08000    0.08000
                         0.04000
           xangst     -1.5802114483E-11  1.8246734355E+00  3.7048044602E+01
                       3.1604270975E+00  1.8246734355E+00  3.7048044602E+01
                      -1.5802135488E+00  4.5616835887E+00  3.7048044602E+01
                       1.5802135487E+00  4.5616835887E+00  3.7048044602E+01
                       1.5802135488E+00  9.1233671773E-01  3.0623431334E+00
                       4.7406406462E+00  9.1233671773E-01  3.0623431334E+00
                       1.5801996982E-11  3.6493468709E+00  3.0623431334E+00
                       3.1604270975E+00  3.6493468709E+00  3.0623431334E+00
                       1.6474922469E-03  1.8246734355E+00  1.4974307728E+00
                       3.1604270975E+00  1.8246734355E+00  1.4869762438E+00
                      -1.5802135488E+00  4.5616835887E+00  1.4869762438E+00
                       1.5802135487E+00  4.5616835887E+00  1.4869762438E+00
                       1.5802135488E+00  9.1233671773E-01  3.8623411492E+01
                       4.7406406462E+00  9.1233671773E-01  3.8623411492E+01
                       1.5801996982E-11  3.6493468709E+00  3.8623411492E+01
                       3.1604270975E+00  3.6493468709E+00  3.8623411492E+01
                       1.5802135488E+00  9.1233671773E-01  3.5471076390E+01
                       4.7406406462E+00  9.1233671773E-01  3.5471076390E+01
                       1.5801996982E-11  3.6493468709E+00  3.5471076390E+01
                       3.1604270975E+00  3.6493468709E+00  3.5471076390E+01
                      -1.5802114483E-11  1.8246734355E+00  4.6393113459E+00
                       3.1604270975E+00  1.8246734355E+00  4.6393113459E+00
                      -1.5802135488E+00  4.5616835887E+00  4.6393113459E+00
                       1.5802135487E+00  4.5616835887E+00  4.6393113459E+00
            xcart     -2.9861668693E-11  3.4481330750E+00  7.0010658057E+01
                       5.9723416772E+00  3.4481330750E+00  7.0010658057E+01
                      -2.9861708386E+00  8.6203326875E+00  7.0010658057E+01
                       2.9861708386E+00  8.6203326875E+00  7.0010658057E+01
                       2.9861708386E+00  1.7240665375E+00  5.7869898471E+00
                       8.9585125158E+00  1.7240665375E+00  5.7869898471E+00
                       2.9861446649E-11  6.8962661500E+00  5.7869898471E+00
                       5.9723416772E+00  6.8962661500E+00  5.7869898471E+00
                       3.1133091526E-03  3.4481330750E+00  2.8297340636E+00
                       5.9723416772E+00  3.4481330750E+00  2.8099778670E+00
                      -2.9861708386E+00  8.6203326875E+00  2.8099778670E+00
                       2.9861708386E+00  8.6203326875E+00  2.8099778670E+00
                       2.9861708386E+00  1.7240665375E+00  7.2987670037E+01
                       8.9585125158E+00  1.7240665375E+00  7.2987670037E+01
                       2.9861446649E-11  6.8962661500E+00  7.2987670037E+01
                       5.9723416772E+00  6.8962661500E+00  7.2987670037E+01
                       2.9861708386E+00  1.7240665375E+00  6.7030620015E+01
                       8.9585125158E+00  1.7240665375E+00  6.7030620015E+01
                       2.9861446649E-11  6.8962661500E+00  6.7030620015E+01
                       5.9723416772E+00  6.8962661500E+00  6.7030620015E+01
                      -2.9861668693E-11  3.4481330750E+00  8.7670278890E+00
                       5.9723416772E+00  3.4481330750E+00  8.7670278890E+00
                      -2.9861708386E+00  8.6203326875E+00  8.7670278890E+00
                       2.9861708386E+00  8.6203326875E+00  8.7670278890E+00
             xred      1.6666666666E-01  3.3333333333E-01  9.2365211841E-01
                       6.6666666666E-01  3.3333333333E-01  9.2365211841E-01
                       1.6666666667E-01  8.3333333333E-01  9.2365211841E-01
                       6.6666666666E-01  8.3333333333E-01  9.2365211841E-01
                       3.3333333333E-01  1.6666666666E-01  7.6347881592E-02
                       8.3333333333E-01  1.6666666666E-01  7.6347881592E-02
                       3.3333333333E-01  6.6666666666E-01  7.6347881592E-02
                       8.3333333333E-01  6.6666666666E-01  7.6347881592E-02
                       1.6692731059E-01  3.3333333333E-01  3.7332742399E-02
                       6.6666666666E-01  3.3333333333E-01  3.7072098471E-02
                       1.6666666667E-01  8.3333333333E-01  3.7072098471E-02
                       6.6666666666E-01  8.3333333333E-01  3.7072098471E-02
                       3.3333333333E-01  1.6666666666E-01  9.6292790153E-01
                       8.3333333333E-01  1.6666666666E-01  9.6292790153E-01
                       3.3333333333E-01  6.6666666666E-01  9.6292790153E-01
                       8.3333333333E-01  6.6666666666E-01  9.6292790153E-01
                       3.3333333333E-01  1.6666666666E-01  8.8433641239E-01
                       8.3333333333E-01  1.6666666666E-01  8.8433641239E-01
                       3.3333333333E-01  6.6666666666E-01  8.8433641239E-01
                       8.3333333333E-01  6.6666666666E-01  8.8433641239E-01
                       1.6666666666E-01  3.3333333333E-01  1.1566358761E-01
                       6.6666666666E-01  3.3333333333E-01  1.1566358761E-01
                       1.6666666667E-01  8.3333333333E-01  1.1566358761E-01
                       6.6666666666E-01  8.3333333333E-01  1.1566358761E-01
            znucl       74.00000   16.00000

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
 For information on why they are suggested, see also https://docs.abinit.org/theory/acknowledgments.
-
- [1] Implementation of the Projector Augmented-Wave Method in the ABINIT code.
- M. Torrent, F. Jollet, F. Bottin, G. Zerah, and X. Gonze Comput. Mat. Science 42, 337, (2008).
- Comment : PAW calculations. Strong suggestion to cite this paper.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#torrent2008
-
- [2] Recent developments in the ABINIT software package.
- Computer Phys. Comm. 205, 106 (2016).
- X.Gonze, F.Jollet, F.Abreu Araujo, D.Adams, B.Amadon, T.Applencourt,
- C.Audouze, J.-M.Beuken, J.Bieder, A.Bokhanchuk, E.Bousquet, F.Bruneval
- D.Caliste, M.Cote, F.Dahm, F.Da Pieve, M.Delaveau, M.Di Gennaro,
- B.Dorado, C.Espejo, G.Geneste, L.Genovese, A.Gerossier, M.Giantomassi,
- Y.Gillet, D.R.Hamann, L.He, G.Jomard, J.Laflamme Janssen, S.Le Roux,
- A.Levitt, A.Lherbier, F.Liu, I.Lukacevic, A.Martin, C.Martins,
- M.J.T.Oliveira, S.Ponce, Y.Pouillon, T.Rangel, G.-M.Rignanese,
- A.H.Romero, B.Rousseau, O.Rubel, A.A.Shukri, M.Stankovski, M.Torrent,
- M.J.Van Setten, B.Van Troeye, M.J.Verstraete, D.Waroquier, J.Wiktor,
- B.Xu, A.Zhou, J.W.Zwanziger.
- Comment : the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2016
-
- [3] ABINIT : First-principles approach of materials and nanosystem properties.
- Computer Phys. Comm. 180, 2582-2615 (2009).
- X. Gonze, B. Amadon, P.-M. Anglade, J.-M. Beuken, F. Bottin, P. Boulanger, F. Bruneval,
- D. Caliste, R. Caracas, M. Cote, T. Deutsch, L. Genovese, Ph. Ghosez, M. Giantomassi
- S. Goedecker, D.R. Hamann, P. Hermet, F. Jollet, G. Jomard, S. Leroux, M. Mancini, S. Mazevet,
- M.J.T. Oliveira, G. Onida, Y. Pouillon, T. Rangel, G.-M. Rignanese, D. Sangalli, R. Shaltaf,
- M. Torrent, M.J. Verstraete, G. Zerah, J.W. Zwanziger
- Comment : the third generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/about/ABINIT_CPC_v10.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2009
-
- [4] A brief introduction to the ABINIT software package.
- Z. Kristallogr. 220, 558-562 (2005).
- X. Gonze, G.-M. Rignanese, M. Verstraete, J.-M. Beuken, Y. Pouillon, R. Caracas, F. Jollet,
- M. Torrent, G. Zerah, M. Mikami, Ph. Ghosez, M. Veithen, J.-Y. Raty, V. Olevano, F. Bruneval,
- L. Reining, R. Godby, G. Onida, D.R. Hamann, and D.C. Allan.
- Comment : the second generic paper describing the ABINIT project. Note that this paper
- should be cited especially if you are using the GW part of ABINIT, as several authors
- of this part are not in the list of authors of the first or third paper.
- The .pdf of the latter paper is available at https://www.abinit.org/about/zfk_0505-06_558-562.pdf.
- Note that it should not redistributed (Copyright by Oldenburg Wissenshaftverlag,
- the licence allows the authors to put it on the Web).
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2005
-
- And optionally:
-
- [5] First-principles computation of material properties : the ABINIT software project. 
- X. Gonze, J.-M. Beuken, R. Caracas, F. Detraux, M. Fuchs, G.-M. Rignanese, L. Sindic,
- M. Verstraete, G. Zerah, F. Jollet, M. Torrent, A. Roy, M. Mikami, Ph. Ghosez, J.-Y. Raty, D.C. Allan.
- Computational Materials Science 25, 478-492 (2002). http://dx.doi.org/10.1016/S0927-0256(02)00325-7
- Comment : the original paper describing the ABINIT project.
- DOI and bibtex : see https://docs.abinit.org/theory/bibliography/#gonze2002
  Asked to delete not existent file: tmp_STATUS
 Proc.   0 individual time (sec): cpu=       2808.1  wall=       2824.1

 Calculation completed.
.Delivered   0 WARNINGs and   2 COMMENTs to log file.

--- !FinalSummary
program: abinit
version: 8.10.2
start_datetime: Mon Apr 08 22:44:35 2019
end_datetime: Mon Apr 08 23:31:39 2019
overall_cpu_time:       36569.2
overall_wall_time:       36713.3
exit_requested_by_user: no 
timelimit: 0
pseudos: 
    W   : b505bc5c1b0279f4ba08993ba4bfc499
    S   : c21f1ace4b7e9c1b3b557902b59d8542
usepaw: 1
mpi_procs: 13
omp_threads: 1
num_warnings: 0
num_comments: 2
...
