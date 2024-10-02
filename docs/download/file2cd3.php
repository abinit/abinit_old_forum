  ABINIT 9.4.0
  
-instrng: 125 lines of input have been read from file tdmft_5.abi
 
 
--- !COMMENT
src_file: m_dtfil.F90
src_line: 1476
message: |
    Output file: tdmft_5.abo already exists.
...
 
 
--- !COMMENT
src_file: m_dtfil.F90
src_line: 1500
message: |
    Renaming old: tdmft_5.abo to: tdmft_5.abo0007
...
 

.Version 9.4.0 of ABINIT 
.(MPI version, prepared for a x86_64_linux_intel19.1 computer) 

.Copyright (C) 1998-2021 ABINIT group . 
 ABINIT comes with ABSOLUTELY NO WARRANTY.
 It is free software, and you are welcome to redistribute it
 under certain conditions (GNU General Public License,
 see ~abinit/COPYING or http://www.gnu.org/copyleft/gpl.txt).

 ABINIT is a project of the Universite Catholique de Louvain,
 Corning Inc. and other collaborators, see ~abinit/doc/developers/contributors.txt .
 Please read https://docs.abinit.org/theory/acknowledgments for suggested
 acknowledgments of the ABINIT effort.
 For more information, see https://www.abinit.org .

.Starting date : Tue  4 May 2021.
- ( at 20h46 )
  
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 === Build Information === 
  Version       : 9.4.0
  Build target  : x86_64_linux_intel19.1
  Build date    : 20210302
 
 === Compiler Suite === 
  C compiler       : intel19.1
  C++ compiler     : gnu19.1
  Fortran compiler : intel19.1
  CFLAGS           : -g -O3
  CXXFLAGS         : -g -O3 -mtune=native -march=native
  FCFLAGS          : -g -extend-source -nofpscomp     -I/home/acamm/software/abinit-9.4. ...
  FC_LDFLAGS       :   -static-intel -static-libgcc
 
 === Optimizations === 
  Debug level        : basic
  Optimization level : aggressive
  Architecture       : intel_xeon
 
 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  openMP support : 
  GPU support    : 
 
 === Connectors / Fallbacks === 
  LINALG flavor  : mkl
  FFT flavor     : dfti
  HDF5           : yes
  NetCDF         : yes
  NetCDF Fortran : yes
  LibXC          : yes
  Wannier90      : no
 
 === Experimental features === 
  Exports             : 
  GW double-precision : 
 
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 Default optimizations:
   -O3 -xHOST


 Optimizations for 43_ptgroups:
   -O0


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 CPP options activated during the build:

                  CC_INTEL                   CXX_GNU                  FC_INTEL
 
                 HAVE_DFTI HAVE_FC_ALLOCATABLE_DT...             HAVE_FC_ASYNC
 
  HAVE_FC_COMMAND_ARGUMENT      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS
 
           HAVE_FC_CPUTIME              HAVE_FC_EXIT             HAVE_FC_FLUSH
 
             HAVE_FC_GAMMA   HAVE_FC_IEEE_ARITHMETIC   HAVE_FC_IEEE_EXCEPTIONS
 
             HAVE_FC_IOMSG     HAVE_FC_ISO_C_BINDING  HAVE_FC_ISO_FORTRAN_2008
 
        HAVE_FC_LONG_LINES        HAVE_FC_MOVE_ALLOC  HAVE_FC_ON_THE_FLY_SHAPE
 
           HAVE_FC_PRIVATE         HAVE_FC_PROTECTED           HAVE_FC_SHIFTLR
 
         HAVE_FC_STREAM_IO                 HAVE_HDF5             HAVE_HDF5_MPI
 
        HAVE_LIBPAW_ABINIT              HAVE_LIBPSML      HAVE_LIBTETRA_ABINIT
 
                HAVE_LIBXC         HAVE_LINALG_AXPBY        HAVE_LINALG_GEMM3M
 
         HAVE_LINALG_GEMMT  HAVE_LINALG_MKL_IMATCOPY   HAVE_LINALG_MKL_OMATADD
 
  HAVE_LINALG_MKL_OMATCOPY   HAVE_LINALG_MKL_THREADS     HAVE_LINALG_SCALAPACK
 
                  HAVE_MPI                 HAVE_MPI2         HAVE_MPI2_INPLACE
 
       HAVE_MPI_IALLGATHER       HAVE_MPI_IALLREDUCE        HAVE_MPI_IALLTOALL
 
       HAVE_MPI_IALLTOALLV           HAVE_MPI_IBCAST         HAVE_MPI_IGATHERV
 
        HAVE_MPI_INTEGER16               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...
 
               HAVE_NETCDF       HAVE_NETCDF_FORTRAN   HAVE_NETCDF_FORTRAN_MPI
 
           HAVE_NETCDF_MPI             HAVE_OS_LINUX         HAVE_TIMER_ABINIT
 
               HAVE_XMLF90                                                      
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> tdmft_5.abi
- output file    -> tdmft_5.abo
- root for input  files -> tdmft_5i
- root for output files -> tdmft_5o
 
 Netcdf library supports MPI-IO
-instrng: 125 lines of input have been read from file tdmft_5.abi
 
 For atom type 1, psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
 For atom type 2, psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
 For atom type 3, psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
- inpspheads : Reading pseudopotential header in XML form from 
-   ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
- inpspheads : Reading pseudopotential header in XML form from 
-   ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
- inpspheads : Reading pseudopotential header in XML form from 
-   ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
 
 inpspheads: deduce mpsang = 3, n1xccc = 1.

======================================================= 
 invars1m : enter jdtset= 3
 
 symlatt: the Bravais lattice is cP (primitive cubic)
  xred   is defined in input file
 ingeo: takes atomic coordinates from input array xred
 
--- !COMMENT
src_file: m_ingeo.F90
src_line: 900
message: |
    The tolerance on symmetries =   1.000E-05 is bigger than 1.0e-8.
    In order to avoid spurious effects, the atomic coordinates have been
    symmetrized before storing them in the dataset internal variable.
    So, do not be surprised by the fact that your input variables (xcart, xred, ...)
    do not correspond exactly to the ones echoed by ABINIT, the latter being used to do the calculations.
    This is not a problem per se.
    Still, in order to avoid this symmetrization (e.g. for specific debugging/development), decrease tolsym to 1.0e-8 or lower,
    or (much preferred) use input primitive vectors that are accurate to better than 1.0e-8.
    This message will only be printed once, even if there are other datasets where tolsym is bigger than 1.0e-8.
...
 
 
 symlatt: the Bravais lattice is cP (primitive cubic)
 
 symlatt: the Bravais lattice is cP (primitive cubic)
 symspgr: spgroup= 221  Pm -3 m   (=Oh^1)
 symspgr: optical characteristics = isotropic
 chkneu: initialized the occupation numbers for occopt= 3, spin-unpolarized or antiferromagnetic case:
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  1.00  0.00  0.00  0.00
  0.00  0.00  0.00  0.00  0.00  0.00
 
--- !WARNING
src_file: m_mpinfo.F90
src_line: 2281
message: |
    nkpt*nsppol (261) is not a multiple of nproc_kpt (36)
    The k-point parallelisation is inefficient. (Ignore this warning if this is not a GS run)
...
 
 mpi_setup: With nkpt_me=8 and mkmem  = 261, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
 mpi_setup: With nkpt_me=8 and mkqmem = 261, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
 mpi_setup: With nkpt_me=8 and mk1mem = 261, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.
getng is called for the coarse grid:
 For input ecut=  2.000000E+01 best grid ngfft=      30      30      30
       max ecut=  2.106295E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    30   30   30
  Augmented FFT divisions ...................    31   31   30
  FFT algorithm .............................   512
  FFT cache size ............................    16
 getmpw: optimal value of mpw= 1659
getng is called for the fine grid:
 Using supplied coarse mesh as initial guess.
 For input ecut=  6.000000E+01 best grid ngfft=      54      54      54
       max ecut=  6.824396E+01
 
 ==== FFT mesh ====
  FFT mesh divisions ........................    54   54   54
  Augmented FFT divisions ...................    55   55   54
  FFT algorithm .............................   512
  FFT cache size ............................    16
 
 DATASET    3 : space group Pm -3 m (#221); Bravais cP (primitive cubic)
 
 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
memory: analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  3.
     intxc =       0    ionmov =       0      iscf =      -2    lmnmax =      18
     lnmax =       6     mgfft =      30  mpssoang =       3    mqgrid =    3001
     natom =       5  nloc_mem =       2    nspden =       1   nspinor =       1
    nsppol =       1      nsym =      48    n1xccc =       1    ntypat =       3
    occopt =       3   xclevel =       1
-    mband =          30        mffmem =           1         mkmem =           8
       mpw =        1659          nfft =       27000          nkpt =         261
Pmy_natom=         1
 PAW method is used; the additional fine FFT grid is defined by:
   mgfftf=        54    nfftf =    157464
================================================================================
P This job should need less than                      41.619 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    198.213 Mbytes ; DEN or POT disk file :      1.203 Mbytes.
================================================================================
 
 Biggest array : pawfgrtab%gylm(gr), with     11.2126 MBytes.
 memana : allocated an array of     11.213 Mbytes, for testing purposes.
 memana: allocated      41.619Mbytes, for testing purposes. 
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   iomode0 =  0 , fftalg0 =512 , wfoptalg0 = 10
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    0
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (tdmft_5o_OUT.nc)

            acell      7.2605000000E+00  7.2605000000E+00  7.2605000000E+00 Bohr
              amu      5.09415000E+01  8.76200000E+01  1.59994000E+01
        dmatpuopt           1
        dmftbandf          23
        dmftbandi          21
        dmft_iter          10
        dmft_mxsf      8.0000000000E-01
        dmft_nwli      100000
        dmft_nwlo        1600
        dmft_rslf           1
             ecut      2.00000000E+01 Hartree
-          fftalg         512
        f4of2_sla      0.00000000E+00  0.00000000E+00  0.00000000E+00
           getden           1
           iatsph3       1    2    3    4    5
             iscf          -2
           istwfk        1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1
              ixc       -1012
           jdtset        3
              kpt      5.00000000E-01  5.00000000E-01  5.00000000E-01
                       4.94444444E-01  4.94444444E-01  4.94444444E-01
                       4.88888889E-01  4.88888889E-01  4.88888889E-01
                       4.83333333E-01  4.83333333E-01  4.83333333E-01
                       4.77777778E-01  4.77777778E-01  4.77777778E-01
                       4.72222222E-01  4.72222222E-01  4.72222222E-01
                       4.66666667E-01  4.66666667E-01  4.66666667E-01
                       4.61111111E-01  4.61111111E-01  4.61111111E-01
                       4.55555556E-01  4.55555556E-01  4.55555556E-01
                       4.50000000E-01  4.50000000E-01  4.50000000E-01
                       4.44444444E-01  4.44444444E-01  4.44444444E-01
                       4.38888889E-01  4.38888889E-01  4.38888889E-01
                       4.33333333E-01  4.33333333E-01  4.33333333E-01
                       4.27777778E-01  4.27777778E-01  4.27777778E-01
                       4.22222222E-01  4.22222222E-01  4.22222222E-01
                       4.16666667E-01  4.16666667E-01  4.16666667E-01
                       4.11111111E-01  4.11111111E-01  4.11111111E-01
                       4.05555556E-01  4.05555556E-01  4.05555556E-01
                       4.00000000E-01  4.00000000E-01  4.00000000E-01
                       3.94444444E-01  3.94444444E-01  3.94444444E-01
                       3.88888889E-01  3.88888889E-01  3.88888889E-01
                       3.83333333E-01  3.83333333E-01  3.83333333E-01
                       3.77777778E-01  3.77777778E-01  3.77777778E-01
                       3.72222222E-01  3.72222222E-01  3.72222222E-01
                       3.66666667E-01  3.66666667E-01  3.66666667E-01
                       3.61111111E-01  3.61111111E-01  3.61111111E-01
                       3.55555556E-01  3.55555556E-01  3.55555556E-01
                       3.50000000E-01  3.50000000E-01  3.50000000E-01
                       3.44444444E-01  3.44444444E-01  3.44444444E-01
                       3.38888889E-01  3.38888889E-01  3.38888889E-01
                       3.33333333E-01  3.33333333E-01  3.33333333E-01
                       3.27777778E-01  3.27777778E-01  3.27777778E-01
                       3.22222222E-01  3.22222222E-01  3.22222222E-01
                       3.16666667E-01  3.16666667E-01  3.16666667E-01
                       3.11111111E-01  3.11111111E-01  3.11111111E-01
                       3.05555556E-01  3.05555556E-01  3.05555556E-01
                       3.00000000E-01  3.00000000E-01  3.00000000E-01
                       2.94444444E-01  2.94444444E-01  2.94444444E-01
                       2.88888889E-01  2.88888889E-01  2.88888889E-01
                       2.83333333E-01  2.83333333E-01  2.83333333E-01
                       2.77777778E-01  2.77777778E-01  2.77777778E-01
                       2.72222222E-01  2.72222222E-01  2.72222222E-01
                       2.66666667E-01  2.66666667E-01  2.66666667E-01
                       2.61111111E-01  2.61111111E-01  2.61111111E-01
                       2.55555556E-01  2.55555556E-01  2.55555556E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       2.44444444E-01  2.44444444E-01  2.44444444E-01
                       2.38888889E-01  2.38888889E-01  2.38888889E-01
                       2.33333333E-01  2.33333333E-01  2.33333333E-01
                       2.27777778E-01  2.27777778E-01  2.27777778E-01
                       2.22222222E-01  2.22222222E-01  2.22222222E-01
                       2.16666667E-01  2.16666667E-01  2.16666667E-01
                       2.11111111E-01  2.11111111E-01  2.11111111E-01
                       2.05555556E-01  2.05555556E-01  2.05555556E-01
                       2.00000000E-01  2.00000000E-01  2.00000000E-01
                       1.94444444E-01  1.94444444E-01  1.94444444E-01
                       1.88888889E-01  1.88888889E-01  1.88888889E-01
                       1.83333333E-01  1.83333333E-01  1.83333333E-01
                       1.77777778E-01  1.77777778E-01  1.77777778E-01
                       1.72222222E-01  1.72222222E-01  1.72222222E-01
                       1.66666667E-01  1.66666667E-01  1.66666667E-01
                       1.61111111E-01  1.61111111E-01  1.61111111E-01
                       1.55555556E-01  1.55555556E-01  1.55555556E-01
                       1.50000000E-01  1.50000000E-01  1.50000000E-01
                       1.44444444E-01  1.44444444E-01  1.44444444E-01
                       1.38888889E-01  1.38888889E-01  1.38888889E-01
                       1.33333333E-01  1.33333333E-01  1.33333333E-01
                       1.27777778E-01  1.27777778E-01  1.27777778E-01
                       1.22222222E-01  1.22222222E-01  1.22222222E-01
                       1.16666667E-01  1.16666667E-01  1.16666667E-01
                       1.11111111E-01  1.11111111E-01  1.11111111E-01
                       1.05555556E-01  1.05555556E-01  1.05555556E-01
                       1.00000000E-01  1.00000000E-01  1.00000000E-01
                       9.44444444E-02  9.44444444E-02  9.44444444E-02
                       8.88888889E-02  8.88888889E-02  8.88888889E-02
                       8.33333333E-02  8.33333333E-02  8.33333333E-02
                       7.77777778E-02  7.77777778E-02  7.77777778E-02
                       7.22222222E-02  7.22222222E-02  7.22222222E-02
                       6.66666667E-02  6.66666667E-02  6.66666667E-02
                       6.11111111E-02  6.11111111E-02  6.11111111E-02
                       5.55555556E-02  5.55555556E-02  5.55555556E-02
                       5.00000000E-02  5.00000000E-02  5.00000000E-02
                       4.44444444E-02  4.44444444E-02  4.44444444E-02
                       3.88888889E-02  3.88888889E-02  3.88888889E-02
                       3.33333333E-02  3.33333333E-02  3.33333333E-02
                       2.77777778E-02  2.77777778E-02  2.77777778E-02
                       2.22222222E-02  2.22222222E-02  2.22222222E-02
                       1.66666667E-02  1.66666667E-02  1.66666667E-02
                       1.11111111E-02  1.11111111E-02  1.11111111E-02
                       5.55555556E-03  5.55555556E-03  5.55555556E-03
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.00000000E-02  0.00000000E+00  0.00000000E+00
                       2.00000000E-02  0.00000000E+00  0.00000000E+00
                       3.00000000E-02  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  0.00000000E+00  0.00000000E+00
                       5.00000000E-02  0.00000000E+00  0.00000000E+00
                       6.00000000E-02  0.00000000E+00  0.00000000E+00
                       7.00000000E-02  0.00000000E+00  0.00000000E+00
                       8.00000000E-02  0.00000000E+00  0.00000000E+00
                       9.00000000E-02  0.00000000E+00  0.00000000E+00
                       1.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.10000000E-01  0.00000000E+00  0.00000000E+00
                       1.20000000E-01  0.00000000E+00  0.00000000E+00
                       1.30000000E-01  0.00000000E+00  0.00000000E+00
                       1.40000000E-01  0.00000000E+00  0.00000000E+00
                       1.50000000E-01  0.00000000E+00  0.00000000E+00
                       1.60000000E-01  0.00000000E+00  0.00000000E+00
                       1.70000000E-01  0.00000000E+00  0.00000000E+00
                       1.80000000E-01  0.00000000E+00  0.00000000E+00
                       1.90000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.10000000E-01  0.00000000E+00  0.00000000E+00
                       2.20000000E-01  0.00000000E+00  0.00000000E+00
                       2.30000000E-01  0.00000000E+00  0.00000000E+00
                       2.40000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       2.60000000E-01  0.00000000E+00  0.00000000E+00
                       2.70000000E-01  0.00000000E+00  0.00000000E+00
                       2.80000000E-01  0.00000000E+00  0.00000000E+00
                       2.90000000E-01  0.00000000E+00  0.00000000E+00
                       3.00000000E-01  0.00000000E+00  0.00000000E+00
                       3.10000000E-01  0.00000000E+00  0.00000000E+00
                       3.20000000E-01  0.00000000E+00  0.00000000E+00
                       3.30000000E-01  0.00000000E+00  0.00000000E+00
                       3.40000000E-01  0.00000000E+00  0.00000000E+00
                       3.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.60000000E-01  0.00000000E+00  0.00000000E+00
                       3.70000000E-01  0.00000000E+00  0.00000000E+00
                       3.80000000E-01  0.00000000E+00  0.00000000E+00
                       3.90000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.10000000E-01  0.00000000E+00  0.00000000E+00
                       4.20000000E-01  0.00000000E+00  0.00000000E+00
                       4.30000000E-01  0.00000000E+00  0.00000000E+00
                       4.40000000E-01  0.00000000E+00  0.00000000E+00
                       4.50000000E-01  0.00000000E+00  0.00000000E+00
                       4.60000000E-01  0.00000000E+00  0.00000000E+00
                       4.70000000E-01  0.00000000E+00  0.00000000E+00
                       4.80000000E-01  0.00000000E+00  0.00000000E+00
                       4.90000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  1.00000000E-02  0.00000000E+00
                       5.00000000E-01  2.00000000E-02  0.00000000E+00
                       5.00000000E-01  3.00000000E-02  0.00000000E+00
                       5.00000000E-01  4.00000000E-02  0.00000000E+00
                       5.00000000E-01  5.00000000E-02  0.00000000E+00
                       5.00000000E-01  6.00000000E-02  0.00000000E+00
                       5.00000000E-01  7.00000000E-02  0.00000000E+00
                       5.00000000E-01  8.00000000E-02  0.00000000E+00
                       5.00000000E-01  9.00000000E-02  0.00000000E+00
                       5.00000000E-01  1.00000000E-01  0.00000000E+00
                       5.00000000E-01  1.10000000E-01  0.00000000E+00
                       5.00000000E-01  1.20000000E-01  0.00000000E+00
                       5.00000000E-01  1.30000000E-01  0.00000000E+00
                       5.00000000E-01  1.40000000E-01  0.00000000E+00
                       5.00000000E-01  1.50000000E-01  0.00000000E+00
                       5.00000000E-01  1.60000000E-01  0.00000000E+00
                       5.00000000E-01  1.70000000E-01  0.00000000E+00
                       5.00000000E-01  1.80000000E-01  0.00000000E+00
                       5.00000000E-01  1.90000000E-01  0.00000000E+00
                       5.00000000E-01  2.00000000E-01  0.00000000E+00
                       5.00000000E-01  2.10000000E-01  0.00000000E+00
                       5.00000000E-01  2.20000000E-01  0.00000000E+00
                       5.00000000E-01  2.30000000E-01  0.00000000E+00
                       5.00000000E-01  2.40000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.60000000E-01  0.00000000E+00
                       5.00000000E-01  2.70000000E-01  0.00000000E+00
                       5.00000000E-01  2.80000000E-01  0.00000000E+00
                       5.00000000E-01  2.90000000E-01  0.00000000E+00
                       5.00000000E-01  3.00000000E-01  0.00000000E+00
                       5.00000000E-01  3.10000000E-01  0.00000000E+00
                       5.00000000E-01  3.20000000E-01  0.00000000E+00
                       5.00000000E-01  3.30000000E-01  0.00000000E+00
                       5.00000000E-01  3.40000000E-01  0.00000000E+00
                       5.00000000E-01  3.50000000E-01  0.00000000E+00
                       5.00000000E-01  3.60000000E-01  0.00000000E+00
                       5.00000000E-01  3.70000000E-01  0.00000000E+00
                       5.00000000E-01  3.80000000E-01  0.00000000E+00
                       5.00000000E-01  3.90000000E-01  0.00000000E+00
                       5.00000000E-01  4.00000000E-01  0.00000000E+00
                       5.00000000E-01  4.10000000E-01  0.00000000E+00
                       5.00000000E-01  4.20000000E-01  0.00000000E+00
                       5.00000000E-01  4.30000000E-01  0.00000000E+00
                       5.00000000E-01  4.40000000E-01  0.00000000E+00
                       5.00000000E-01  4.50000000E-01  0.00000000E+00
                       5.00000000E-01  4.60000000E-01  0.00000000E+00
                       5.00000000E-01  4.70000000E-01  0.00000000E+00
                       5.00000000E-01  4.80000000E-01  0.00000000E+00
                       5.00000000E-01  4.90000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       4.92857143E-01  4.92857143E-01  0.00000000E+00
                       4.85714286E-01  4.85714286E-01  0.00000000E+00
                       4.78571429E-01  4.78571429E-01  0.00000000E+00
                       4.71428571E-01  4.71428571E-01  0.00000000E+00
                       4.64285714E-01  4.64285714E-01  0.00000000E+00
                       4.57142857E-01  4.57142857E-01  0.00000000E+00
                       4.50000000E-01  4.50000000E-01  0.00000000E+00
                       4.42857143E-01  4.42857143E-01  0.00000000E+00
                       4.35714286E-01  4.35714286E-01  0.00000000E+00
                       4.28571429E-01  4.28571429E-01  0.00000000E+00
                       4.21428571E-01  4.21428571E-01  0.00000000E+00
                       4.14285714E-01  4.14285714E-01  0.00000000E+00
                       4.07142857E-01  4.07142857E-01  0.00000000E+00
                       4.00000000E-01  4.00000000E-01  0.00000000E+00
                       3.92857143E-01  3.92857143E-01  0.00000000E+00
                       3.85714286E-01  3.85714286E-01  0.00000000E+00
                       3.78571429E-01  3.78571429E-01  0.00000000E+00
                       3.71428571E-01  3.71428571E-01  0.00000000E+00
                       3.64285714E-01  3.64285714E-01  0.00000000E+00
                       3.57142857E-01  3.57142857E-01  0.00000000E+00
                       3.50000000E-01  3.50000000E-01  0.00000000E+00
                       3.42857143E-01  3.42857143E-01  0.00000000E+00
                       3.35714286E-01  3.35714286E-01  0.00000000E+00
                       3.28571429E-01  3.28571429E-01  0.00000000E+00
                       3.21428571E-01  3.21428571E-01  0.00000000E+00
                       3.14285714E-01  3.14285714E-01  0.00000000E+00
                       3.07142857E-01  3.07142857E-01  0.00000000E+00
                       3.00000000E-01  3.00000000E-01  0.00000000E+00
                       2.92857143E-01  2.92857143E-01  0.00000000E+00
                       2.85714286E-01  2.85714286E-01  0.00000000E+00
                       2.78571429E-01  2.78571429E-01  0.00000000E+00
                       2.71428571E-01  2.71428571E-01  0.00000000E+00
                       2.64285714E-01  2.64285714E-01  0.00000000E+00
                       2.57142857E-01  2.57142857E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       2.42857143E-01  2.42857143E-01  0.00000000E+00
                       2.35714286E-01  2.35714286E-01  0.00000000E+00
                       2.28571429E-01  2.28571429E-01  0.00000000E+00
                       2.21428571E-01  2.21428571E-01  0.00000000E+00
                       2.14285714E-01  2.14285714E-01  0.00000000E+00
                       2.07142857E-01  2.07142857E-01  0.00000000E+00
                       2.00000000E-01  2.00000000E-01  0.00000000E+00
                       1.92857143E-01  1.92857143E-01  0.00000000E+00
                       1.85714286E-01  1.85714286E-01  0.00000000E+00
                       1.78571429E-01  1.78571429E-01  0.00000000E+00
                       1.71428571E-01  1.71428571E-01  0.00000000E+00
                       1.64285714E-01  1.64285714E-01  0.00000000E+00
                       1.57142857E-01  1.57142857E-01  0.00000000E+00
                       1.50000000E-01  1.50000000E-01  0.00000000E+00
                       1.42857143E-01  1.42857143E-01  0.00000000E+00
                       1.35714286E-01  1.35714286E-01  0.00000000E+00
                       1.28571429E-01  1.28571429E-01  0.00000000E+00
                       1.21428571E-01  1.21428571E-01  0.00000000E+00
                       1.14285714E-01  1.14285714E-01  0.00000000E+00
                       1.07142857E-01  1.07142857E-01  0.00000000E+00
                       1.00000000E-01  1.00000000E-01  0.00000000E+00
                       9.28571429E-02  9.28571429E-02  0.00000000E+00
                       8.57142857E-02  8.57142857E-02  0.00000000E+00
                       7.85714286E-02  7.85714286E-02  0.00000000E+00
                       7.14285714E-02  7.14285714E-02  0.00000000E+00
                       6.42857143E-02  6.42857143E-02  0.00000000E+00
                       5.71428571E-02  5.71428571E-02  0.00000000E+00
                       5.00000000E-02  5.00000000E-02  0.00000000E+00
                       4.28571429E-02  4.28571429E-02  0.00000000E+00
                       3.57142857E-02  3.57142857E-02  0.00000000E+00
                       2.85714286E-02  2.85714286E-02  0.00000000E+00
                       2.14285714E-02  2.14285714E-02  0.00000000E+00
                       1.42857143E-02  1.42857143E-02  0.00000000E+00
                       7.14285714E-03  7.14285714E-03  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
           kptopt          -4
          kssform           3
            lpawu           2      -1      -1
P           mkmem           8
            natom           5
           natsph        5
            nband          30
         nbandkss          30
           nbdbuf           2
           ndtset           1
            ngfft          30      30      30
          ngfftdg          54      54      54
             nkpt         261
             nsym          48
           ntypat           3
           occopt           3
        optforces           0
        pawecutdg      6.00000000E+01 Hartree
        pawfatbnd           1
        pawprtvol           3
     plowan_bandi          21
     plowan_bandf          23
   plowan_compute           1
     plowan_natom           1
        plowan_nt           1
 plowan_realspace           1
        plowan_it3       0    0    0
     plowan_iatom3       1
       plowan_nbl3       1
     plowan_lcalc3       2
  plowan_projcalc3      -2
           prtvol           4
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         221
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                       0  0 -1   1  0  0   0 -1  0       0  0  1  -1  0  0   0  1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1   1  0  0   0 -1  0
                       0  0  1  -1  0  0   0 -1  0       0  0 -1   1  0  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0  1   0 -1  0       1  0  0   0  0 -1   0  1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0 -1   0 -1  0      -1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0  1  -1  0  0       0  1  0   0  0 -1   1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0  1  -1  0  0
                       0  1  0   0  0 -1  -1  0  0       0 -1  0   0  0  1   1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       0  0 -1   0  1  0  -1  0  0       0  0  1   0 -1  0   1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0  1  0  -1  0  0
                       0  0  1   0 -1  0  -1  0  0       0  0 -1   0  1  0   1  0  0
           tolwfr      1.00000000E-12
           tsmear      3.80017850E-03 Hartree
            typat      1  2  3  3  3
          usepawu          10
           useylm           1
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.9210455615E+00  1.9210455615E+00  1.9210455615E+00
                       1.9210455615E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  1.9210455615E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.9210455615E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.6302500000E+00  3.6302500000E+00  3.6302500000E+00
                       3.6302500000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  3.6302500000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.6302500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
            znucl       23.00000   38.00000    8.00000
 
================================================================================
 
 chkinp: Checking input parameters for consistency, jdtset=   3.
 Checking if input is consistent with KSS generation
 DATA TYPE INFORMATION: 
 REAL:      Data type name: REAL(DP) 
            Kind value:      8
            Precision:      15
            Smallest nonnegligible quantity relative to 1: 0.22204460E-015
            Smallest positive number:                      0.22250739E-307
            Largest representable number:                  0.17976931E+309
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
  xmpi_tag_ub ................       524287
  xmpi_bsize_ch ..............            1
  xmpi_bsize_int .............            4
  xmpi_bsize_sp ..............            4
  xmpi_bsize_dp ..............            8
  xmpi_bsize_spc .............            8
  xmpi_bsize_dpc .............           16
  xmpio_bsize_frm ............            4
  xmpi_address_kind ..........            8
  xmpi_offset_kind ...........            8
  MPI_WTICK ..................   3.846153846153846E-010
 
================================================================================
== DATASET  3 ==================================================================
-   mpi_nproc: 36, omp_nthreads: -1 (-1 if OMP is not activated)
 
 
--- !COMMENT
src_file: m_xgScalapack.F90
src_line: 236
message: |
    xgScalapack in auto mode
...
 
 mkfilename : getden/=0, take file _DEN from output of DATASET   1.
 
 
 getdim_nloc : deduce lmnmax  =  18, lnmax  =   6,
                      lmnmaxso=  18, lnmaxso=   6.
 Slater exchange
 P. A. M. Dirac, Math. Proc. Cambridge Philos. Soc. 26, 376 (1930)
 F. Bloch, Z. Phys. 57, 545 (1929)
 Perdew & Wang
 J. P. Perdew and Y. Wang, Phys. Rev. B 45, 13244 (1992)
 
 Unit cell volume ucvol=  3.8273624E+02 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees
 
 Coarse grid specifications (used for wave-functions):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  30  30  30
         ecut(hartree)=     20.000   => boxcut(ratio)=   2.05246
 
 Fine grid specifications (used for densities):
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  54  54  54
         ecut(hartree)=     60.000   => boxcut(ratio)=   2.13298
- pspini: atom type   1  psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
- pspatm: opening atomic psp file    ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
- pspatm : Reading pseudopotential header in XML form from ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.20000000
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size= 910 , AA= 0.60796E-03 BB= 0.13983E-01
 Shapefunction is BESSEL type: shapef(r,l)=aa(1,l)*jl(q(1,l)*r)+aa(2,l)*jl(q(2,l)*r)
 Radius for shape functions =  2.02290427
 mmax=  910
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to  744 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.238787E+02
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   2  psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
- pspatm: opening atomic psp file    ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
- pspatm : Reading pseudopotential header in XML form from ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  6 (lmn_size= 18), orbitals=   0   0   1   1   2   2
 Spheres core radius: rc_sph= 2.20669967
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=1500 , AA= 0.22443E-03 BB= 0.85283E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.81361893
 mmax= 1500
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1337 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.350170E+02
 pspatm: atomic psp has been read  and splines computed
 
- pspini: atom type   3  psp file is ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
- pspatm: opening atomic psp file    ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
- pspatm : Reading pseudopotential header in XML form from ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
 Pseudopotential format is: paw10
 basis_size (lnmax)=  4 (lmn_size=  8), orbitals=   0   0   1   1
 Spheres core radius: rc_sph= 1.41465230
 1 radial meshes are used:
  - mesh 1: r(i)=AA*[exp(BB*(i-1))-1], size=2001 , AA= 0.72565E-03 BB= 0.58052E-02
 Shapefunction is SIN type: shapef(r)=[sin(pi*r/rshp)/(pi*r/rshp)]**2
 Radius for shape functions =  1.20231231
 mmax= 2001
 Radial grid used for partial waves is grid 1
 Radial grid used for projectors is grid 1
 Radial grid used for (t)core density is grid 1
 Radial grid used for Vloc is grid 1
 Radial grid used for pseudo valence density is grid 1
 Mesh size for Vloc has been set to 1762 to avoid numerical noise.
 Compensation charge density is not taken into account in XC energy/potential
 beta integral value:      -0.477232E+01
 pspatm: atomic psp has been read  and splines computed
 
   2.42644211E+03                                ecore*ucvol(ha*bohr**3)
 ==== Info on pseudopotentials ====
  PAW calculation
  Number of pseudopotentials ..    3
  Number of types of atoms   ..    3
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
  - Atom type    3 has pseudo-core radius .. 80.0000
 
 Info on the Q-grid used for form factors in spline form: 
   Number of q-points for radial functions ffspl ..   3001
   Number of q-points for vlspl ...................   3001
   vloc is computed in Reciprocal Space
 
  XC functional for type 1 is -1012
  XC functional for type 2 is -1012
  XC functional for type 3 is -1012
  Pseudo number              1  read from 
 ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/V.xml
  Format or code            17
  Generation date     27061961
  Content of first line: V
  Pseudo number              2  read from 
 ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/Sr.xml
  Format or code            17
  Generation date     27061961
  Content of first line: Sr
  Pseudo number              3  read from 
 ../../../Psps_for_tests/Pseudodojo_paw_pw_standard/O.xml
  Format or code            17
  Generation date     27061961
  Content of first line: O
 
 symatm: atom number 1 is reached starting at atom
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
   1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1  1
 symatm: atom number 2 is reached starting at atom
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
   2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2  2
 symatm: atom number 3 is reached starting at atom
   3  3  3  3  3  3  3  3  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4
   3  3  3  3  3  3  3  3  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5
 symatm: atom number 4 is reached starting at atom
   4  4  4  4  4  4  4  4  3  3  3  3  3  3  3  3  5  5  5  5  5  5  5  5
   5  5  5  5  5  5  5  5  3  3  3  3  3  3  3  3  4  4  4  4  4  4  4  4
 symatm: atom number 5 is reached starting at atom
   5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  5  3  3  3  3  3  3  3  3
   4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  4  3  3  3  3  3  3  3  3
 wfconv:    30 bands initialized randomly with npw=  1640, for ikpt=     1
 wfconv:    30 bands initialized randomly with npw=  1640, for ikpt=     2
 wfconv:    30 bands initialized randomly with npw=  1640, for ikpt=     3
 wfconv:    30 bands initialized randomly with npw=  1640, for ikpt=     4
 wfconv:    30 bands initialized randomly with npw=  1640, for ikpt=     5
 wfconv:    30 bands initialized randomly with npw=  1637, for ikpt=     6
 wfconv:    30 bands initialized randomly with npw=  1631, for ikpt=     7
 wfconv:    30 bands initialized randomly with npw=  1625, for ikpt=     8
 
 PAW TEST:
 ==== setsym_ylm: rotation matrices in the basis ============
 ====              of real spherical harmonics    ============
  > Number of symmetries (nsym)=  48
   >For symmetry  1 ( 1 0 0 0 1 0 0 0 1)
    Rotation matrice for l=1:
    1.000    0.000    0.000
    0.000    1.000    0.000
    0.000    0.000    1.000
    Rotation matrice for l=2:
    1.000    0.000    0.000    0.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    0.000    0.000    1.000    0.000
    0.000    0.000    0.000    0.000    1.000
   >For symmetry  2 (-1 0 0 0-1 0 0 0-1)
    Rotation matrice for l=1:
   -1.000    0.000    0.000
    0.000   -1.000    0.000
    0.000    0.000   -1.000
    Rotation matrice for l=2:
    1.000    0.000    0.000    0.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    0.000    0.000    1.000    0.000
    0.000    0.000    0.000    0.000    1.000
   >For symmetry  3 (-1 0 0 0 1 0 0 0-1)
    Rotation matrice for l=1:
    1.000    0.000    0.000
    0.000   -1.000    0.000
    0.000    0.000   -1.000
    Rotation matrice for l=2:
   -1.000    0.000    0.000    0.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    0.000    0.000    1.000    0.000
    0.000    0.000    0.000    0.000    1.000
   >For symmetry  4 ( 1 0 0 0-1 0 0 0 1)
    Rotation matrice for l=1:
   -1.000    0.000    0.000
    0.000    1.000    0.000
    0.000    0.000    1.000
    Rotation matrice for l=2:
   -1.000    0.000    0.000    0.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    0.000    0.000    1.000    0.000
    0.000    0.000    0.000    0.000    1.000
   >For symmetry  5 (-1 0 0 0-1 0 0 0 1)
    Rotation matrice for l=1:
   -1.000    0.000    0.000
    0.000    1.000    0.000
    0.000    0.000   -1.000
    Rotation matrice for l=2:
    1.000    0.000    0.000    0.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    0.000    0.000   -1.000    0.000
    0.000    0.000    0.000    0.000    1.000
   >For symmetry  6 ( 1 0 0 0 1 0 0 0-1)
    Rotation matrice for l=1:
    1.000    0.000    0.000
    0.000   -1.000    0.000
    0.000    0.000    1.000
    Rotation matrice for l=2:
    1.000    0.000    0.000    0.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    0.000    0.000   -1.000    0.000
    0.000    0.000    0.000    0.000    1.000
   >For symmetry  7 ( 1 0 0 0-1 0 0 0-1)
    Rotation matrice for l=1:
   -1.000    0.000    0.000
    0.000   -1.000    0.000
    0.000    0.000    1.000
    Rotation matrice for l=2:
   -1.000    0.000    0.000    0.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    0.000    0.000   -1.000    0.000
    0.000    0.000    0.000    0.000    1.000
   >For symmetry  8 (-1 0 0 0 1 0 0 0 1)
    Rotation matrice for l=1:
    1.000    0.000    0.000
    0.000    1.000    0.000
    0.000    0.000   -1.000
    Rotation matrice for l=2:
   -1.000    0.000    0.000    0.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    0.000    0.000   -1.000    0.000
    0.000    0.000    0.000    0.000    1.000
   >For symmetry  9 ( 0 1 0 1 0 0 0 0 1)
    Rotation matrice for l=1:
    0.000    0.000    1.000
    0.000    1.000    0.000
    1.000    0.000    0.000
    Rotation matrice for l=2:
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000    0.000    1.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000    0.000    0.000   -1.000
   >For symmetry 10 ( 0-1 0-1 0 0 0 0-1)
    Rotation matrice for l=1:
    0.000    0.000   -1.000
    0.000   -1.000    0.000
   -1.000    0.000    0.000
    Rotation matrice for l=2:
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000    0.000    1.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000    0.000    0.000   -1.000
   >For symmetry 11 ( 0-1 0 1 0 0 0 0-1)
    Rotation matrice for l=1:
    0.000    0.000    1.000
    0.000   -1.000    0.000
   -1.000    0.000    0.000
    Rotation matrice for l=2:
   -1.000    0.000    0.000    0.000    0.000
    0.000    0.000    0.000   -1.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000    0.000    0.000   -1.000
   >For symmetry 12 ( 0 1 0-1 0 0 0 0 1)
    Rotation matrice for l=1:
    0.000    0.000   -1.000
    0.000    1.000    0.000
    1.000    0.000    0.000
    Rotation matrice for l=2:
   -1.000    0.000    0.000    0.000    0.000
    0.000    0.000    0.000   -1.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000    0.000    0.000   -1.000
   >For symmetry 13 ( 0-1 0-1 0 0 0 0 1)
    Rotation matrice for l=1:
    0.000    0.000   -1.000
    0.000    1.000    0.000
   -1.000    0.000    0.000
    Rotation matrice for l=2:
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000    0.000   -1.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    0.000    0.000   -1.000
   >For symmetry 14 ( 0 1 0 1 0 0 0 0-1)
    Rotation matrice for l=1:
    0.000    0.000    1.000
    0.000   -1.000    0.000
    1.000    0.000    0.000
    Rotation matrice for l=2:
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000    0.000   -1.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    0.000    0.000   -1.000
   >For symmetry 15 ( 0 1 0-1 0 0 0 0-1)
    Rotation matrice for l=1:
    0.000    0.000   -1.000
    0.000   -1.000    0.000
    1.000    0.000    0.000
    Rotation matrice for l=2:
   -1.000    0.000    0.000    0.000    0.000
    0.000    0.000    0.000    1.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    0.000    0.000   -1.000
   >For symmetry 16 ( 0-1 0 1 0 0 0 0 1)
    Rotation matrice for l=1:
    0.000    0.000    1.000
    0.000    1.000    0.000
   -1.000    0.000    0.000
    Rotation matrice for l=2:
   -1.000    0.000    0.000    0.000    0.000
    0.000    0.000    0.000    1.000    0.000
    0.000    0.000    1.000    0.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    0.000    0.000   -1.000
   >For symmetry 17 ( 0 0 1 1 0 0 0 1 0)
    Rotation matrice for l=1:
    0.000    0.000    1.000
    1.000    0.000    0.000
   -0.000    1.000    0.000
    Rotation matrice for l=2:
   -0.000    0.000    0.000    1.000    0.000
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.500    0.000   -0.866
    0.000    1.000    0.000    0.000    0.000
    0.000   -0.000    0.866    0.000   -0.500
   >For symmetry 18 ( 0 0-1-1 0 0 0-1 0)
    Rotation matrice for l=1:
    0.000    0.000   -1.000
   -1.000   -0.000    0.000
    0.000   -1.000    0.000
    Rotation matrice for l=2:
   -0.000    0.000    0.000    1.000    0.000
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.500    0.000   -0.866
    0.000    1.000    0.000    0.000    0.000
    0.000   -0.000    0.866    0.000   -0.500
   >For symmetry 19 ( 0 0-1 1 0 0 0-1 0)
    Rotation matrice for l=1:
    0.000    0.000    1.000
   -1.000    0.000    0.000
   -0.000   -1.000    0.000
    Rotation matrice for l=2:
   -0.000    0.000    0.000   -1.000    0.000
   -1.000    0.000    0.000    0.000    0.000
    0.000   -0.000   -0.500    0.000   -0.866
    0.000    1.000   -0.000    0.000   -0.000
    0.000    0.000    0.866    0.000   -0.500
   >For symmetry 20 ( 0 0 1-1 0 0 0 1 0)
    Rotation matrice for l=1:
    0.000    0.000   -1.000
    1.000   -0.000    0.000
    0.000    1.000    0.000
    Rotation matrice for l=2:
   -0.000    0.000    0.000   -1.000    0.000
   -1.000    0.000    0.000    0.000    0.000
    0.000   -0.000   -0.500    0.000   -0.866
    0.000    1.000   -0.000    0.000   -0.000
    0.000    0.000    0.866    0.000   -0.500
   >For symmetry 21 ( 0 0-1-1 0 0 0 1 0)
    Rotation matrice for l=1:
    0.000    0.000   -1.000
    1.000    0.000    0.000
    0.000   -1.000    0.000
    Rotation matrice for l=2:
   -0.000    0.000    0.000    1.000    0.000
   -1.000    0.000    0.000   -0.000    0.000
    0.000    0.000   -0.500    0.000   -0.866
    0.000   -1.000   -0.000    0.000   -0.000
    0.000   -0.000    0.866    0.000   -0.500
   >For symmetry 22 ( 0 0 1 1 0 0 0-1 0)
    Rotation matrice for l=1:
    0.000    0.000    1.000
   -1.000   -0.000    0.000
   -0.000    1.000    0.000
    Rotation matrice for l=2:
   -0.000    0.000    0.000    1.000    0.000
   -1.000    0.000    0.000   -0.000    0.000
    0.000    0.000   -0.500    0.000   -0.866
    0.000   -1.000   -0.000    0.000   -0.000
    0.000   -0.000    0.866    0.000   -0.500
   >For symmetry 23 ( 0 0 1-1 0 0 0-1 0)
    Rotation matrice for l=1:
    0.000    0.000   -1.000
   -1.000    0.000    0.000
    0.000    1.000    0.000
    Rotation matrice for l=2:
   -0.000    0.000    0.000   -1.000    0.000
    1.000    0.000    0.000   -0.000    0.000
    0.000   -0.000   -0.500    0.000   -0.866
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    0.866    0.000   -0.500
   >For symmetry 24 ( 0 0-1 1 0 0 0 1 0)
    Rotation matrice for l=1:
    0.000    0.000    1.000
    1.000   -0.000    0.000
   -0.000   -1.000    0.000
    Rotation matrice for l=2:
   -0.000    0.000    0.000   -1.000    0.000
    1.000    0.000    0.000   -0.000    0.000
    0.000   -0.000   -0.500    0.000   -0.866
    0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    0.866    0.000   -0.500
   >For symmetry 25 ( 1 0 0 0 0 1 0 1 0)
    Rotation matrice for l=1:
    0.000    1.000    0.000
    1.000   -0.000    0.000
    0.000    0.000    1.000
    Rotation matrice for l=2:
    0.000    0.000    0.000    1.000    0.000
    0.000    1.000   -0.000    0.000   -0.000
    0.000   -0.000   -0.500    0.000   -0.866
    1.000    0.000    0.000   -0.000    0.000
    0.000   -0.000   -0.866    0.000    0.500
   >For symmetry 26 (-1 0 0 0 0-1 0-1 0)
    Rotation matrice for l=1:
   -0.000   -1.000    0.000
   -1.000    0.000    0.000
    0.000    0.000   -1.000
    Rotation matrice for l=2:
    0.000    0.000    0.000    1.000    0.000
    0.000    1.000   -0.000    0.000   -0.000
    0.000   -0.000   -0.500    0.000   -0.866
    1.000    0.000    0.000   -0.000    0.000
    0.000   -0.000   -0.866    0.000    0.500
   >For symmetry 27 (-1 0 0 0 0 1 0-1 0)
    Rotation matrice for l=1:
   -0.000    1.000    0.000
   -1.000   -0.000    0.000
    0.000    0.000   -1.000
    Rotation matrice for l=2:
    0.000    0.000    0.000   -1.000    0.000
    0.000   -1.000   -0.000    0.000   -0.000
    0.000    0.000   -0.500    0.000   -0.866
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.866    0.000    0.500
   >For symmetry 28 ( 1 0 0 0 0-1 0 1 0)
    Rotation matrice for l=1:
    0.000   -1.000    0.000
    1.000    0.000    0.000
    0.000    0.000    1.000
    Rotation matrice for l=2:
    0.000    0.000    0.000   -1.000    0.000
    0.000   -1.000   -0.000    0.000   -0.000
    0.000    0.000   -0.500    0.000   -0.866
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.866    0.000    0.500
   >For symmetry 29 (-1 0 0 0 0-1 0 1 0)
    Rotation matrice for l=1:
   -0.000   -1.000    0.000
    1.000   -0.000    0.000
    0.000    0.000   -1.000
    Rotation matrice for l=2:
    0.000    0.000    0.000    1.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000   -0.000   -0.500    0.000   -0.866
   -1.000    0.000    0.000    0.000    0.000
    0.000   -0.000   -0.866    0.000    0.500
   >For symmetry 30 ( 1 0 0 0 0 1 0-1 0)
    Rotation matrice for l=1:
    0.000    1.000    0.000
   -1.000    0.000    0.000
    0.000    0.000    1.000
    Rotation matrice for l=2:
    0.000    0.000    0.000    1.000    0.000
    0.000   -1.000    0.000    0.000    0.000
    0.000   -0.000   -0.500    0.000   -0.866
   -1.000    0.000    0.000    0.000    0.000
    0.000   -0.000   -0.866    0.000    0.500
   >For symmetry 31 ( 1 0 0 0 0-1 0-1 0)
    Rotation matrice for l=1:
    0.000   -1.000    0.000
   -1.000   -0.000    0.000
    0.000    0.000    1.000
    Rotation matrice for l=2:
    0.000    0.000    0.000   -1.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000   -0.500    0.000   -0.866
   -1.000    0.000    0.000   -0.000    0.000
    0.000    0.000   -0.866    0.000    0.500
   >For symmetry 32 (-1 0 0 0 0 1 0 1 0)
    Rotation matrice for l=1:
   -0.000    1.000    0.000
    1.000    0.000    0.000
    0.000    0.000   -1.000
    Rotation matrice for l=2:
    0.000    0.000    0.000   -1.000    0.000
    0.000    1.000    0.000    0.000    0.000
    0.000    0.000   -0.500    0.000   -0.866
   -1.000    0.000    0.000   -0.000    0.000
    0.000    0.000   -0.866    0.000    0.500
   >For symmetry 33 ( 0 1 0 0 0 1 1 0 0)
    Rotation matrice for l=1:
    0.000    1.000   -0.000
    0.000    0.000    1.000
    1.000    0.000    0.000
    Rotation matrice for l=2:
   -0.000    1.000    0.000    0.000    0.000
    0.000    0.000    0.000    1.000   -0.000
    0.000    0.000   -0.500    0.000    0.866
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.866    0.000   -0.500
   >For symmetry 34 ( 0-1 0 0 0-1-1 0 0)
    Rotation matrice for l=1:
    0.000   -1.000    0.000
    0.000   -0.000   -1.000
   -1.000    0.000    0.000
    Rotation matrice for l=2:
   -0.000    1.000    0.000    0.000    0.000
    0.000    0.000    0.000    1.000   -0.000
    0.000    0.000   -0.500    0.000    0.866
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.866    0.000   -0.500
   >For symmetry 35 ( 0-1 0 0 0 1-1 0 0)
    Rotation matrice for l=1:
    0.000    1.000    0.000
    0.000    0.000   -1.000
   -1.000    0.000    0.000
    Rotation matrice for l=2:
   -0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    0.000   -1.000   -0.000
    0.000    0.000   -0.500   -0.000    0.866
    1.000   -0.000    0.000    0.000    0.000
    0.000    0.000   -0.866   -0.000   -0.500
   >For symmetry 36 ( 0 1 0 0 0-1 1 0 0)
    Rotation matrice for l=1:
    0.000   -1.000   -0.000
    0.000   -0.000    1.000
    1.000    0.000    0.000
    Rotation matrice for l=2:
   -0.000   -1.000    0.000    0.000    0.000
    0.000    0.000    0.000   -1.000   -0.000
    0.000    0.000   -0.500   -0.000    0.866
    1.000   -0.000    0.000    0.000    0.000
    0.000    0.000   -0.866   -0.000   -0.500
   >For symmetry 37 ( 0-1 0 0 0-1 1 0 0)
    Rotation matrice for l=1:
    0.000   -1.000    0.000
    0.000    0.000    1.000
   -1.000    0.000    0.000
    Rotation matrice for l=2:
   -0.000    1.000    0.000    0.000    0.000
    0.000    0.000   -0.000   -1.000    0.000
    0.000    0.000   -0.500    0.000    0.866
   -1.000   -0.000    0.000    0.000    0.000
    0.000    0.000   -0.866    0.000   -0.500
   >For symmetry 38 ( 0 1 0 0 0 1-1 0 0)
    Rotation matrice for l=1:
    0.000    1.000   -0.000
    0.000   -0.000   -1.000
    1.000    0.000    0.000
    Rotation matrice for l=2:
   -0.000    1.000    0.000    0.000    0.000
    0.000    0.000   -0.000   -1.000    0.000
    0.000    0.000   -0.500    0.000    0.866
   -1.000   -0.000    0.000    0.000    0.000
    0.000    0.000   -0.866    0.000   -0.500
   >For symmetry 39 ( 0 1 0 0 0-1-1 0 0)
    Rotation matrice for l=1:
    0.000   -1.000   -0.000
    0.000    0.000   -1.000
    1.000    0.000    0.000
    Rotation matrice for l=2:
   -0.000   -1.000    0.000    0.000    0.000
    0.000    0.000   -0.000    1.000    0.000
    0.000    0.000   -0.500   -0.000    0.866
   -1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.866   -0.000   -0.500
   >For symmetry 40 ( 0-1 0 0 0 1 1 0 0)
    Rotation matrice for l=1:
    0.000    1.000    0.000
    0.000   -0.000    1.000
   -1.000    0.000    0.000
    Rotation matrice for l=2:
   -0.000   -1.000    0.000    0.000    0.000
    0.000    0.000   -0.000    1.000    0.000
    0.000    0.000   -0.500   -0.000    0.866
   -1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.866   -0.000   -0.500
   >For symmetry 41 ( 0 0 1 0 1 0 1 0 0)
    Rotation matrice for l=1:
    1.000    0.000    0.000
    0.000   -0.000    1.000
    0.000    1.000    0.000
    Rotation matrice for l=2:
    0.000    1.000    0.000    0.000    0.000
    1.000   -0.000    0.000    0.000    0.000
    0.000    0.000   -0.500   -0.000    0.866
    0.000    0.000   -0.000    1.000    0.000
    0.000    0.000    0.866    0.000    0.500
   >For symmetry 42 ( 0 0-1 0-1 0-1 0 0)
    Rotation matrice for l=1:
   -1.000    0.000    0.000
    0.000    0.000   -1.000
    0.000   -1.000   -0.000
    Rotation matrice for l=2:
    0.000    1.000    0.000    0.000    0.000
    1.000   -0.000    0.000    0.000    0.000
    0.000    0.000   -0.500   -0.000    0.866
    0.000    0.000   -0.000    1.000    0.000
    0.000    0.000    0.866    0.000    0.500
   >For symmetry 43 ( 0 0-1 0 1 0-1 0 0)
    Rotation matrice for l=1:
    1.000    0.000    0.000
    0.000   -0.000   -1.000
    0.000   -1.000    0.000
    Rotation matrice for l=2:
    0.000   -1.000    0.000    0.000    0.000
   -1.000   -0.000    0.000    0.000    0.000
    0.000    0.000   -0.500    0.000    0.866
    0.000    0.000    0.000    1.000   -0.000
    0.000    0.000    0.866   -0.000    0.500
   >For symmetry 44 ( 0 0 1 0-1 0 1 0 0)
    Rotation matrice for l=1:
   -1.000    0.000    0.000
    0.000    0.000    1.000
    0.000    1.000   -0.000
    Rotation matrice for l=2:
    0.000   -1.000    0.000    0.000    0.000
   -1.000   -0.000    0.000    0.000    0.000
    0.000    0.000   -0.500    0.000    0.866
    0.000    0.000    0.000    1.000   -0.000
    0.000    0.000    0.866   -0.000    0.500
   >For symmetry 45 ( 0 0-1 0-1 0 1 0 0)
    Rotation matrice for l=1:
   -1.000    0.000    0.000
    0.000   -0.000    1.000
    0.000   -1.000   -0.000
    Rotation matrice for l=2:
    0.000    1.000    0.000    0.000    0.000
   -1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.500   -0.000    0.866
    0.000    0.000    0.000   -1.000   -0.000
    0.000    0.000    0.866    0.000    0.500
   >For symmetry 46 ( 0 0 1 0 1 0-1 0 0)
    Rotation matrice for l=1:
    1.000    0.000    0.000
    0.000    0.000   -1.000
    0.000    1.000    0.000
    Rotation matrice for l=2:
    0.000    1.000    0.000    0.000    0.000
   -1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.500   -0.000    0.866
    0.000    0.000    0.000   -1.000   -0.000
    0.000    0.000    0.866    0.000    0.500
   >For symmetry 47 ( 0 0 1 0-1 0-1 0 0)
    Rotation matrice for l=1:
   -1.000    0.000    0.000
    0.000   -0.000   -1.000
    0.000    1.000   -0.000
    Rotation matrice for l=2:
    0.000   -1.000    0.000    0.000    0.000
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.500    0.000    0.866
    0.000    0.000   -0.000   -1.000    0.000
    0.000    0.000    0.866   -0.000    0.500
   >For symmetry 48 ( 0 0-1 0 1 0 1 0 0)
    Rotation matrice for l=1:
    1.000    0.000    0.000
    0.000    0.000    1.000
    0.000   -1.000    0.000
    Rotation matrice for l=2:
    0.000   -1.000    0.000    0.000    0.000
    1.000    0.000    0.000    0.000    0.000
    0.000    0.000   -0.500    0.000    0.866
    0.000    0.000   -0.000   -1.000    0.000
    0.000    0.000    0.866   -0.000    0.500
 
 pawpuxinit : for species    1
   number of projectors is   2
 
 pawpuxinit : dmatpuopt=1 
   PAW+U: dens. mat. constructed by projection on atomic wfn inside PAW augm. region(s)
 
 pawpuxinit: WARNING: Check that the first partial wave for lpawu:
                      - Is an atomic eigenfunction  
                      - Is normalized 
                      In other cases, choose dmatpuopt=2
 
  pawpuxinit: icount, ph0phiint(icount)= 1  0.84179
  pawpuxinit: zioneff=        1.03567
 
  pawpuxinit: icount, ph0phiint(icount)= 2 -0.65544
  pawpuxinit: zioneff=       -0.72810
 
 
 
  PAW+U: icount, phiphjint(icount)= 1  0.70861
 
  PAW+U: icount, phiphjint(icount)= 2 -0.55174
 
  PAW+U: icount, phiphjint(icount)= 3  0.42960
 
   Slater parameters F^0, F^2, F^4 are   0.0000   0.0000   0.0000
 About to read data(r) from: tdmft_5o_DS1_DEN
 
================================================================================
 
          - hdr_check: checking restart file header for consistency -
 
 
          current calculation                           restart file
          -------------------                           ------------
 
  calculation expects a density             |  input file contains a density
. ABINIT  code version 9.4.0                |  ABINIT  code version 9.2.1
. date 20210504 bantot     7830 natom    5  |  date 20210426 bantot     1200 natom    5
  nkpt     261 nsym 48 ngfft  54,  54,  54  |  nkpt      40 nsym 48 ngfft  54,  54,  54
  ntypat  3 ecut_eff  20.0000000            |  ntypat  3 ecut_eff  20.0000000
  usepaw  1                                 |  usepaw  1
  usewvl  0                                 |  usewvl  0
  rprimd:                                   |  rprimd:
     7.2605000   0.0000000   0.0000000      |     7.2605000   0.0000000   0.0000000
     0.0000000   7.2605000   0.0000000      |     0.0000000   7.2605000   0.0000000
     0.0000000   0.0000000   7.2605000      |     0.0000000   0.0000000   7.2605000
  PAW: ecutdg   60.000000                   |  PAW: ecutdg   60.000000
  symafm:                                   |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1      |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1      |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1      |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1      |    1  1  1  1  1  1  1  1  1  1  1  1
  symrel:                                   |  symrel:
    1  0  0  0  1  0  0  0  1               |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1               |   -1  0  0  0 -1  0  0  0 -1
   -1  0  0  0  1  0  0  0 -1               |   -1  0  0  0  1  0  0  0 -1
    1  0  0  0 -1  0  0  0  1               |    1  0  0  0 -1  0  0  0  1
   -1  0  0  0 -1  0  0  0  1               |   -1  0  0  0 -1  0  0  0  1
    1  0  0  0  1  0  0  0 -1               |    1  0  0  0  1  0  0  0 -1
    1  0  0  0 -1  0  0  0 -1               |    1  0  0  0 -1  0  0  0 -1
   -1  0  0  0  1  0  0  0  1               |   -1  0  0  0  1  0  0  0  1
    0  1  0  1  0  0  0  0  1               |    0  1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0 -1               |    0 -1  0 -1  0  0  0  0 -1
    0 -1  0  1  0  0  0  0 -1               |    0 -1  0  1  0  0  0  0 -1
    0  1  0 -1  0  0  0  0  1               |    0  1  0 -1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0  1               |    0 -1  0 -1  0  0  0  0  1
    0  1  0  1  0  0  0  0 -1               |    0  1  0  1  0  0  0  0 -1
    0  1  0 -1  0  0  0  0 -1               |    0  1  0 -1  0  0  0  0 -1
    0 -1  0  1  0  0  0  0  1               |    0 -1  0  1  0  0  0  0  1
    0  0  1  1  0  0  0  1  0               |    0  0  1  1  0  0  0  1  0
    0  0 -1 -1  0  0  0 -1  0               |    0  0 -1 -1  0  0  0 -1  0
    0  0 -1  1  0  0  0 -1  0               |    0  0 -1  1  0  0  0 -1  0
    0  0  1 -1  0  0  0  1  0               |    0  0  1 -1  0  0  0  1  0
    0  0 -1 -1  0  0  0  1  0               |    0  0 -1 -1  0  0  0  1  0
    0  0  1  1  0  0  0 -1  0               |    0  0  1  1  0  0  0 -1  0
    0  0  1 -1  0  0  0 -1  0               |    0  0  1 -1  0  0  0 -1  0
    0  0 -1  1  0  0  0  1  0               |    0  0 -1  1  0  0  0  1  0
    1  0  0  0  0  1  0  1  0               |    1  0  0  0  0  1  0  1  0
   -1  0  0  0  0 -1  0 -1  0               |   -1  0  0  0  0 -1  0 -1  0
   -1  0  0  0  0  1  0 -1  0               |   -1  0  0  0  0  1  0 -1  0
    1  0  0  0  0 -1  0  1  0               |    1  0  0  0  0 -1  0  1  0
   -1  0  0  0  0 -1  0  1  0               |   -1  0  0  0  0 -1  0  1  0
    1  0  0  0  0  1  0 -1  0               |    1  0  0  0  0  1  0 -1  0
    1  0  0  0  0 -1  0 -1  0               |    1  0  0  0  0 -1  0 -1  0
   -1  0  0  0  0  1  0  1  0               |   -1  0  0  0  0  1  0  1  0
    0  1  0  0  0  1  1  0  0               |    0  1  0  0  0  1  1  0  0
    0 -1  0  0  0 -1 -1  0  0               |    0 -1  0  0  0 -1 -1  0  0
    0 -1  0  0  0  1 -1  0  0               |    0 -1  0  0  0  1 -1  0  0
    0  1  0  0  0 -1  1  0  0               |    0  1  0  0  0 -1  1  0  0
    0 -1  0  0  0 -1  1  0  0               |    0 -1  0  0  0 -1  1  0  0
    0  1  0  0  0  1 -1  0  0               |    0  1  0  0  0  1 -1  0  0
    0  1  0  0  0 -1 -1  0  0               |    0  1  0  0  0 -1 -1  0  0
    0 -1  0  0  0  1  1  0  0               |    0 -1  0  0  0  1  1  0  0
    0  0  1  0  1  0  1  0  0               |    0  0  1  0  1  0  1  0  0
    0  0 -1  0 -1  0 -1  0  0               |    0  0 -1  0 -1  0 -1  0  0
    0  0 -1  0  1  0 -1  0  0               |    0  0 -1  0  1  0 -1  0  0
    0  0  1  0 -1  0  1  0  0               |    0  0  1  0 -1  0  1  0  0
    0  0 -1  0 -1  0  1  0  0               |    0  0 -1  0 -1  0  1  0  0
    0  0  1  0  1  0 -1  0  0               |    0  0  1  0  1  0 -1  0  0
    0  0  1  0 -1  0 -1  0  0               |    0  0  1  0 -1  0 -1  0  0
    0  0 -1  0  1  0  1  0  0               |    0  0 -1  0  1  0  1  0  0
  typat:                                    |  typat:
    1  2  3  3  3                           |    1  2  3  3  3
  so_psp  :                                 |  so_psp  :
    1  1  1                                 |    1  1  1
 
--- !COMMENT
src_file: m_hdr.F90
src_line: 4417
message: |
    input kptrlatt = 0 0 0 0 0 0 0 0 0  /= disk file kptrlatt = 6 -6 6 -6 6 6 -6 -6 6
...
 
 
--- !COMMENT
src_file: m_hdr.F90
src_line: 4420
message: |
    input kptopt = -4  /= disk file kptopt = 1
...
 
 
--- !WARNING
src_file: m_hdr.F90
src_line: 4441
message: |
    input ival=0 not equal disk file ival=20
...
 
  tnons:                                    |  tnons:
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
   znucl:                                   |   znucl:
   23.00 38.00  8.00                        |       23.00 38.00  8.00
  pseudopotential atom type  1:             |  pseudopotential atom type  1:
  pspso   0 pspxc   -1012  lmn_size  18     |  pspso   0 pspxc   -1012  lmn_size  18
  pspdat 27061961 pspcod   17 zion  13.0    |  pspdat 27061961 pspcod   17 zion  13.0
  pseudopotential atom type  2:             |  pseudopotential atom type  2:
  pspso   0 pspxc   -1012  lmn_size  18     |  pspso   0 pspxc   -1012  lmn_size  18
  pspdat 27061961 pspcod   17 zion  10.0    |  pspdat 27061961 pspcod   17 zion  10.0
  pseudopotential atom type  3:             |  pseudopotential atom type  3:
  pspso   0 pspxc   -1012  lmn_size   8     |  pspso   0 pspxc   -1012  lmn_size   8
  pspdat 27061961 pspcod   17 zion   6.0    |  pspdat 27061961 pspcod   17 zion   6.0
  xred:                                     |  xred:
     0.0000000   0.0000000   0.0000000      |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000      |     0.5000000   0.5000000   0.5000000
     0.5000000   0.0000000   0.0000000      |     0.5000000   0.0000000   0.0000000
     0.0000000   0.5000000   0.0000000      |     0.0000000   0.5000000   0.0000000
     0.0000000   0.0000000   0.5000000      |     0.0000000   0.0000000   0.5000000
 hdr_check:  Density/Potential file is OK for restart of calculation
================================================================================
 read_rhor completed. cpu:  0.01 [s] , wall:  0.01 [s] <<< TIME
 
================================================================================
 FFT (fine) grid used in SCF cycle:
 
 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  54  54  54
         ecut(hartree)=     60.000   => boxcut(ratio)=   2.13298
 
 1/G**2 cut-off applied in the following step : cutoff-mode = CRYSTAL
 
 1/G**2 cut-off applied in the following step : cutoff-mode = CRYSTAL
 
 1/G**2 cut-off applied in the following step : cutoff-mode = CRYSTAL
 
========== DFT+U DATA ===================================================
 
    ( A DFT+DMFT calculation is carried out                              
      Thus, the following DFT+U occupation matrices are not physical     
      and just informative )
 
====== For Atom    1, occupations for correlated orbitals. l =   2
 
 
== Calculated occupation matrix for correlated orbitals:
 
Calculated occupation matrix for component up
     0.22113    0.00000    0.00000    0.00000    0.00000
     0.00000    0.22113    0.00000    0.00000    0.00000
     0.00000    0.00000    0.20550    0.00000    0.00000
     0.00000    0.00000    0.00000    0.22113    0.00000
     0.00000    0.00000    0.00000    0.00000    0.20550
 
 PAW TEST:
 ====== Moments of (n1-tn1) =========
 
 Atom   1 (ispden=1):
  ******* Moment of (n1-tn1)
   l,m= 0 0: M= 1.4038477E+00
   l,m= 1-1: M= 0.0000000E+00
   l,m= 1 0: M= 0.0000000E+00
   l,m= 1 1: M= 0.0000000E+00
   l,m= 2-2: M= 0.0000000E+00
   l,m= 2-1: M= 0.0000000E+00
   l,m= 2 0: M=-3.0759426E-17
   l,m= 2 1: M= 0.0000000E+00
   l,m= 2 2: M= 3.4721576E-16
   l,m= 3-3: M= 0.0000000E+00
   l,m= 3-2: M= 0.0000000E+00
   l,m= 3-1: M= 0.0000000E+00
   l,m= 3 0: M= 0.0000000E+00
   l,m= 3 1: M= 0.0000000E+00
   l,m= 3 2: M= 0.0000000E+00
   l,m= 3 3: M= 0.0000000E+00
   l,m= 4-4: M= 0.0000000E+00
   l,m= 4-3: M= 0.0000000E+00
   l,m= 4-2: M= 0.0000000E+00
   l,m= 4-1: M= 0.0000000E+00
   l,m= 4 0: M=-1.9465749E-02
   l,m= 4 1: M= 0.0000000E+00
   l,m= 4 2: M= 6.6942254E-17
   l,m= 4 3: M= 0.0000000E+00
   l,m= 4 4: M=-1.6451560E-02
 average electrostatic smooth potential [Ha] , [eV]      0.000000        0.000000
 
 ==== Values of psp strength Dij (Hartree) ============
 
 >>>>>>>>>> Atom   1:
   ************ Dij atomic (Dij0) ***********
   0.06156  -0.08339   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.08339   0.05327   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.44506   0.00000   0.00000  -0.49631   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.44506   0.00000   0.00000  -0.49631   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.44506   0.00000   0.00000  -0.49631   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.49631   0.00000   0.00000   0.45019   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.49631   0.00000   0.00000   0.45019   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.49631   0.00000   0.00000   0.45019   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.44321   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.44321   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.44321   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   1.44321 ...
   ...  only 12  components have been written...
   ************** Dij Hartree ***************
   0.01860  -0.00854   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000 ...
  -0.00854   0.00715   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.43482   0.00000   0.00000  -0.30385   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.43482   0.00000   0.00000  -0.30385   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.43482   0.00000   0.00000  -0.30385   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.30385   0.00000   0.00000   0.23135   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.30385   0.00000   0.00000   0.23135   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.30385   0.00000   0.00000   0.23135   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.16536   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.16536   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.16334   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.16536 ...
   ...  only 12  components have been written...
   **************** Dij_hat *****************
  -0.13298   0.04902  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000 ...
   0.04902  -0.00945   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -1.09939   0.00000  -0.00000   0.60258  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000  -1.09939   0.00000  -0.00000   0.60258  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -1.09939   0.00000  -0.00000   0.60258  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000   0.60258  -0.00000   0.00000  -0.27325   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000   0.60258  -0.00000   0.00000  -0.27325   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000   0.60258  -0.00000   0.00000  -0.27325   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -1.05223   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -1.05223   0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000  -1.05233   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -1.05223 ...
   ...  only 12  components have been written...
   ************* Dij_DFT+U (dijpawu) **********
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   ...  only 12  components have been written...
   ***************** Dij_xc *****************
  -0.47592   0.11503   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.11503  -0.02989   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000 ...
   0.00000   0.00000  -0.85687   0.00000   0.00000   0.45965   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.85687   0.00000   0.00000   0.45965   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.85687   0.00000   0.00000   0.45965   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.45965   0.00000   0.00000  -0.23870   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.45965   0.00000   0.00000  -0.23870   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.45965   0.00000   0.00000  -0.23870   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.63436   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.63436   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.63236   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.63436 ...
   ...  only 12  components have been written...
   **********    TOTAL Dij in Ha   **********
  -0.52874   0.07211  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000 ...
   0.07211   0.02109   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -1.07638   0.00000  -0.00000   0.26207  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000  -1.07638   0.00000  -0.00000   0.26207  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -1.07638   0.00000  -0.00000   0.26207  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000   0.26207  -0.00000   0.00000   0.16959   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000   0.26207  -0.00000   0.00000   0.16959   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000   0.26207  -0.00000   0.00000   0.16959   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.07801   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.07801   0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000  -0.07814   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.07801 ...
   ...  only 12  components have been written...
 
 
 PAW TEST:
 ========= Values of DIJ before symetrization =========
 
 Atom #  1
  -0.52874   0.07211  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000 ...
   0.07211   0.02109   0.00000   0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000 ...
  -0.00000   0.00000  -1.07638   0.00000  -0.00000   0.26207  -0.00000   0.00000  -0.00000  -0.00000   0.00000   0.00000 ...
  -0.00000   0.00000   0.00000  -1.07638   0.00000  -0.00000   0.26207  -0.00000   0.00000  -0.00000  -0.00000  -0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -1.07638   0.00000  -0.00000   0.26207  -0.00000   0.00000   0.00000  -0.00000 ...
   0.00000  -0.00000   0.26207  -0.00000   0.00000   0.16959   0.00000  -0.00000   0.00000   0.00000  -0.00000  -0.00000 ...
   0.00000  -0.00000  -0.00000   0.26207  -0.00000   0.00000   0.16959   0.00000  -0.00000   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000   0.26207  -0.00000   0.00000   0.16959   0.00000  -0.00000  -0.00000   0.00000 ...
  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.07801   0.00000   0.00000   0.00000 ...
   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.07801   0.00000  -0.00000 ...
  -0.00000   0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000  -0.00000   0.00000   0.00000  -0.07814   0.00000 ...
   0.00000  -0.00000   0.00000  -0.00000  -0.00000  -0.00000   0.00000   0.00000   0.00000  -0.00000   0.00000  -0.07801 ...
   ...  only 12  components have been written...
 
 
 PAW TEST:
 ========= Values of DIJ after symetrization =========
 
 Atom #  1
  -0.52874   0.07211   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.07211   0.02109   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07814   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801 ...
   ...  only 12  components have been written...
 
 vtorho: nnsclo_now = 30, note that nnsclo, dbl_nnsclo, istep= 0 0 1
 non-scf iterations; kpt #     1  , k= (  0.50000  0.50000  0.50000  ), band residuals:
 res:  1.85E+00  1.87E+00  1.99E+00  1.78E+00  1.45E+00  1.13E+00  6.23E-01  7.72E-01
 res:  4.58E-01  4.58E-01  7.48E-01  5.12E-01  7.46E-01  4.64E-01  5.01E-01  4.89E-01
 res:  8.38E-01  5.31E-01  5.81E-01  5.86E-01  1.33E+00  7.59E-01  6.81E-01  5.46E-01
 res:  1.67E+00  5.96E-01  1.48E+00  8.47E-01  7.35E-01  9.57E-01
 Performing subspace diagonalization.
 ene: -2.13E+00 -9.60E-01 -8.90E-01 -8.03E-01 -6.63E-01 -2.60E-01 -2.35E-01 -1.98E-01
 ene: -1.51E-01 -1.12E-01  6.81E-03  6.69E-02  8.73E-02  9.42E-02  1.11E-01  1.35E-01
 ene:  1.47E-01  1.72E-01  1.92E-01  2.18E-01  2.86E-01  3.03E-01  3.07E-01  4.00E-01
 ene:  4.70E-01  5.69E-01  6.57E-01  8.05E-01  1.16E+00  2.60E+00
 Calling pw_orthon to orthonormalize bands.
 k-point: [ 1 / 261 ], spin: 1
   Max resid = 1.98569E+00  (exclude nbdbuf bands). One NSCF iteration cpu-time:  0.12 [s] , wall-time:  0.12 [s]
 res:  1.21E+00  1.32E-01  1.51E-01  3.39E-01  1.93E-01  2.24E-02  1.30E-01  6.22E-02
 res:  1.46E-01  5.94E-02  2.86E-01  9.38E-02  8.77E-02  5.83E-02  6.97E-02  1.86E-01
 res:  1.04E-01  1.54E-01  8.73E-02  1.31E-01  9.43E-02  1.66E-01  1.40E-01  1.44E-01
 res:  1.06E-01  1.01E-01  1.05E-01  1.31E-01  1.37E-01  6.28E-01
 Performing subspace diagonalization.
 ene: -2.03E+00 -1.15E+00 -1.14E+00 -1.12E+00 -9.42E-01 -3.67E-01 -3.61E-01 -3.58E-01
 ene: -3.17E-01 -3.09E-01 -2.92E-01  3.29E-02  5.95E-02  7.14E-02  8.22E-02  8.46E-02
 ene:  9.57E-02  2.29E-01  2.37E-01  2.47E-01  3.59E-01  3.66E-01  3.80E-01  4.91E-01
 ene:  4.95E-01  5.15E-01  5.57E-01  6.01E-01  6.91E-01  7.02E-01
 Calling pw_orthon to orthonormalize bands.
   Max resid = 1.21436E+00  (exclude nbdbuf bands). One NSCF iteration cpu-time:  0.11 [s] , wall-time:  0.12 [s]
 res:  8.37E-03  3.06E-04  5.66E-04  3.17E-03  1.99E-03  1.95E-04  5.82E-04  9.91E-04
 res:  1.07E-04  1.15E-03  1.34E-03  3.45E-04  3.53E-04  9.26E-04  5.62E-04  8.01E-04
 res:  1.32E-03  5.11E-04  1.61E-03  2.78E-03  4.81E-04  1.70E-03  2.66E-03  3.28E-04
 res:  7.27E-04  2.49E-03  7.63E-03  1.83E-02  2.56E-02  2.10E-02
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.63E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.43E-02  5.44E-02  7.60E-02  7.61E-02
 ene:  7.63E-02  2.19E-01  2.20E-01  2.20E-01  3.50E-01  3.51E-01  3.51E-01  4.84E-01
 ene:  4.84E-01  4.87E-01  4.96E-01  5.08E-01  5.96E-01  6.04E-01
 Calling pw_orthon to orthonormalize bands.
   Max resid = 1.83420E-02  (exclude nbdbuf bands). One NSCF iteration cpu-time:  0.12 [s] , wall-time:  0.12 [s]
   Printing residuals every mod(20) iterations...
 res:  3.52E-05  7.67E-07  2.37E-06  1.89E-05  3.20E-06  2.53E-07  9.61E-07  3.75E-06
 res:  2.34E-07  7.98E-07  4.35E-06  1.56E-06  1.83E-06  4.59E-06  5.80E-07  4.19E-06
 res:  7.41E-06  3.43E-06  1.35E-05  2.83E-05  2.30E-06  1.41E-05  3.53E-05  3.20E-06
 res:  3.54E-05  7.29E-04  6.67E-05  2.72E-03  5.08E-04  1.00E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.98E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.06E-08  5.85E-10  4.08E-09  2.82E-08  5.75E-09  2.87E-10  7.14E-10  2.25E-09
 res:  1.28E-10  7.58E-10  4.26E-09  1.02E-09  1.11E-09  5.03E-09  3.28E-10  3.69E-09
 res:  4.56E-09  3.74E-09  2.60E-08  1.73E-07  6.82E-09  2.77E-08  1.52E-07  2.68E-08
 res:  1.63E-06  1.31E-05  2.18E-06  6.05E-05  7.05E-06  1.10E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.95E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.21E-11  6.61E-13  7.86E-12  2.96E-11  3.02E-12  5.95E-13  2.50E-13  1.58E-12
 res:  4.64E-13  4.08E-13  2.23E-12  6.00E-13  1.49E-12  4.25E-12  2.18E-13  9.15E-13
 res:  3.84E-12  2.26E-11  2.92E-10  4.86E-10  2.79E-11  1.90E-10  3.84E-10  1.25E-10
 res:  6.97E-08  3.90E-07  1.21E-07  3.11E-06  2.83E-07  1.87E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.93E-01
 Calling pw_orthon to orthonormalize bands.
 res:  6.64E-13  7.92E-13  2.04E-13  7.57E-13  7.86E-13  6.12E-13  2.32E-13  2.63E-13
 res:  5.36E-13  4.27E-13  4.00E-13  6.03E-13  7.93E-13  8.13E-13  9.05E-13  3.94E-13
 res:  6.82E-13  5.24E-13  6.04E-13  4.92E-12  6.86E-13  2.04E-13  2.76E-12  2.51E-12
 res:  2.28E-09  2.18E-08  7.22E-09  3.12E-07  6.39E-09  4.90E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.92E-01
 Calling pw_orthon to orthonormalize bands.
 res:  6.64E-13  8.35E-13  2.13E-13  7.06E-13  7.85E-13  6.11E-13  2.32E-13  2.63E-13
 res:  5.35E-13  4.27E-13  4.00E-13  6.05E-13  7.90E-13  8.13E-13  9.00E-13  3.94E-13
 res:  6.83E-13  3.32E-13  5.82E-13  2.24E-13  3.47E-13  2.31E-13  7.63E-13  5.45E-13
 res:  1.45E-10  6.49E-10  6.00E-10  1.26E-08  3.03E-10  4.77E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  6.64E-13  8.35E-13  2.13E-13  7.06E-13  7.85E-13  6.11E-13  2.32E-13  2.62E-13
 res:  5.35E-13  4.27E-13  4.00E-13  6.05E-13  7.90E-13  8.13E-13  9.00E-13  3.93E-13
 res:  6.83E-13  3.38E-13  5.82E-13  2.17E-13  3.46E-13  2.31E-13  7.64E-13  6.61E-13
 res:  3.75E-12  3.71E-11  2.72E-11  1.24E-09  7.80E-12  1.22E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  6.64E-13  8.35E-13  2.13E-13  7.06E-13  7.85E-13  6.11E-13  2.32E-13  2.62E-13
 res:  5.35E-13  4.27E-13  3.99E-13  6.06E-13  7.90E-13  8.13E-13  8.99E-13  3.93E-13
 res:  6.84E-13  3.38E-13  5.83E-13  2.17E-13  3.45E-13  2.31E-13  7.63E-13  3.28E-13
 res:  9.96E-13  1.07E-12  2.94E-12  4.97E-11  3.80E-13  1.19E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  6.64E-13  8.35E-13  2.13E-13  7.06E-13  7.85E-13  6.11E-13  2.32E-13  2.62E-13
 res:  5.35E-13  4.27E-13  3.99E-13  6.07E-13  7.90E-13  8.14E-13  8.99E-13  3.93E-13
 res:  6.84E-13  3.38E-13  5.83E-13  2.17E-13  3.45E-13  2.31E-13  7.63E-13  5.01E-13
 res:  1.20E-13  6.87E-13  7.33E-13  5.07E-12  2.49E-13  2.76E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  6.64E-13  8.35E-13  2.13E-13  7.05E-13  7.85E-13  6.11E-13  2.32E-13  2.63E-13
 res:  5.35E-13  4.27E-13  3.99E-13  6.07E-13  7.90E-13  8.14E-13  8.99E-13  3.92E-13
 res:  6.84E-13  3.38E-13  5.84E-13  2.17E-13  3.45E-13  2.31E-13  7.63E-13  4.98E-13
 res:  1.23E-13  6.86E-13  4.50E-13  8.45E-13  2.90E-13  2.64E-06
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.71E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
   NSCF loop completed after 12 iterations
     eigenvalues (hartree) for   30  bands
              after   12 non-SCF iterations with    4 CG line minimizations
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6356E-01 -3.6978E-01
 -3.6978E-01 -3.6978E-01 -3.1919E-01 -3.1919E-01 -3.1919E-01  2.7134E-02
  5.4192E-02  5.4192E-02  7.5923E-02  7.5923E-02  7.5923E-02  2.1920E-01
  2.1920E-01  2.1920E-01  3.5033E-01  3.5033E-01  3.5033E-01  4.8352E-01
  4.8352E-01  4.8352E-01  4.9486E-01  4.9486E-01  5.9107E-01  5.9109E-01
      mean kinetic energy (hartree) for    30   bands
              after   12 non-SCF iterations with    4 CG line minimizations
  1.0666E+00  7.6923E-01  7.6923E-01  7.6923E-01  9.4503E-01  8.3290E-01
  8.3290E-01  8.3290E-01  1.0161E+00  1.0161E+00  1.0161E+00  1.0601E+00
  1.1342E+00  1.1342E+00  1.0256E+00  1.0256E+00  1.0256E+00  1.4846E+00
  1.4846E+00  1.4846E+00  8.9828E-01  8.9828E-01  8.9828E-01  9.7186E-01
  9.7186E-01  9.7186E-01  1.1117E+00  1.1117E+00  1.1169E+00  1.1169E+00
 non-scf iterations; kpt #     2  , k= (  0.49444  0.49444  0.49444  ), band residuals:
 res:  1.85E+00  1.86E+00  1.99E+00  1.84E+00  1.43E+00  1.12E+00  6.09E-01  7.75E-01
 res:  4.60E-01  4.60E-01  7.54E-01  5.20E-01  7.74E-01  4.66E-01  5.08E-01  4.88E-01
 res:  8.27E-01  5.31E-01  5.79E-01  5.91E-01  1.31E+00  7.50E-01  6.85E-01  5.49E-01
 res:  1.68E+00  6.02E-01  1.41E+00  8.83E-01  7.41E-01  7.30E-01
 Performing subspace diagonalization.
 ene: -2.13E+00 -9.61E-01 -9.05E-01 -8.26E-01 -6.95E-01 -2.59E-01 -2.44E-01 -2.09E-01
 ene: -1.53E-01 -1.19E-01  2.60E-03  6.47E-02  8.47E-02  9.52E-02  1.08E-01  1.33E-01
 ene:  1.46E-01  1.69E-01  1.96E-01  2.15E-01  2.77E-01  2.96E-01  3.06E-01  4.11E-01
 ene:  4.61E-01  5.58E-01  6.70E-01  7.71E-01  1.10E+00  2.88E+00
 Calling pw_orthon to orthonormalize bands.
 res:  1.22E+00  1.44E-01  1.44E-01  2.52E-01  1.91E-01  2.58E-02  1.43E-01  4.76E-02
 res:  1.07E-01  6.87E-02  2.65E-01  8.15E-02  1.20E-01  5.86E-02  5.88E-02  1.30E-01
 res:  1.07E-01  1.65E-01  7.79E-02  1.39E-01  9.69E-02  1.43E-01  1.13E-01  1.68E-01
 res:  1.10E-01  1.22E-01  1.28E-01  1.61E-01  1.35E-01  5.17E-01
 Performing subspace diagonalization.
 ene: -2.01E+00 -1.15E+00 -1.14E+00 -1.12E+00 -9.37E-01 -3.66E-01 -3.62E-01 -3.57E-01
 ene: -3.17E-01 -3.06E-01 -2.89E-01  3.35E-02  5.94E-02  7.19E-02  8.04E-02  8.28E-02
 ene:  9.93E-02  2.29E-01  2.39E-01  2.49E-01  3.59E-01  3.67E-01  3.76E-01  4.91E-01
 ene:  4.96E-01  5.13E-01  5.65E-01  6.08E-01  6.69E-01  7.03E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.25E-02  2.45E-04  5.10E-04  3.64E-03  2.73E-03  1.86E-04  4.72E-04  1.29E-03
 res:  1.00E-04  1.52E-03  2.16E-03  3.84E-04  3.31E-04  8.99E-04  2.73E-04  6.17E-04
 res:  2.02E-03  5.81E-04  2.03E-03  3.27E-03  5.55E-04  1.85E-03  2.53E-03  3.64E-04
 res:  8.97E-04  2.37E-03  8.72E-03  2.20E-02  2.18E-02  2.24E-02
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.63E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.59E-02  7.60E-02
 ene:  7.64E-02  2.19E-01  2.20E-01  2.20E-01  3.50E-01  3.51E-01  3.51E-01  4.84E-01
 ene:  4.85E-01  4.86E-01  4.96E-01  5.09E-01  5.98E-01  6.02E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.48E-05  5.40E-07  3.10E-06  1.85E-05  5.70E-06  4.70E-07  6.45E-07  4.91E-06
 res:  1.66E-07  1.37E-06  5.96E-06  2.52E-06  1.77E-06  2.16E-06  3.42E-07  2.27E-06
 res:  1.37E-05  2.35E-06  2.28E-05  3.06E-05  6.98E-06  1.22E-05  3.50E-05  3.66E-06
 res:  7.34E-05  3.33E-04  8.87E-05  2.49E-03  9.25E-04  8.65E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.97E-01
 Calling pw_orthon to orthonormalize bands.
 res:  8.60E-08  6.83E-10  4.37E-09  2.43E-08  9.60E-09  2.51E-09  2.21E-10  1.16E-09
 res:  3.48E-10  4.17E-09  7.44E-10  1.68E-09  4.98E-10  2.09E-09  3.80E-09  1.03E-09
 res:  7.68E-09  1.65E-08  9.39E-08  1.06E-07  2.92E-08  2.66E-08  8.26E-08  2.40E-07
 res:  3.12E-06  1.09E-05  2.12E-06  7.98E-05  1.13E-05  1.84E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.94E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.23E-10  2.80E-12  5.14E-12  1.71E-11  7.89E-12  2.09E-12  6.85E-13  9.99E-13
 res:  3.19E-13  2.69E-12  3.69E-13  1.11E-12  2.78E-13  2.53E-12  2.22E-12  9.10E-13
 res:  4.55E-12  1.22E-10  6.47E-10  1.03E-09  5.85E-11  4.47E-11  6.72E-10  1.46E-07
 res:  1.25E-07  1.13E-07  1.99E-07  1.85E-06  4.12E-07  2.67E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.93E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.29E-13  4.38E-13  1.48E-13  4.45E-13  4.57E-13  3.66E-13  9.43E-13  7.40E-13
 res:  3.73E-13  4.83E-13  3.68E-13  2.65E-13  5.68E-13  3.51E-13  5.87E-13  9.33E-13
 res:  1.99E-13  7.86E-13  4.33E-12  5.81E-12  4.80E-13  2.98E-13  1.71E-12  9.82E-10
 res:  9.16E-09  2.81E-10  5.59E-09  2.54E-07  9.12E-09  3.92E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.92E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.29E-13  4.38E-13  1.56E-13  4.37E-13  4.57E-13  3.66E-13  9.43E-13  7.40E-13
 res:  3.72E-13  4.83E-13  3.68E-13  2.64E-13  5.69E-13  3.50E-13  5.87E-13  9.09E-13
 res:  2.21E-13  4.89E-13  5.46E-13  7.97E-13  4.79E-13  4.62E-13  2.21E-13  5.64E-11
 res:  5.16E-11  1.10E-11  6.48E-10  5.72E-09  3.47E-10  5.15E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.29E-13  4.38E-13  1.56E-13  4.37E-13  4.57E-13  3.66E-13  9.43E-13  7.39E-13
 res:  3.72E-13  4.83E-13  3.68E-13  2.64E-13  5.69E-13  3.49E-13  5.87E-13  9.09E-13
 res:  2.21E-13  5.07E-13  5.28E-13  7.96E-13  4.79E-13  4.56E-13  2.27E-13  3.26E-13
 res:  2.85E-12  2.75E-13  1.66E-11  7.39E-10  9.61E-12  1.02E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.29E-13  4.38E-13  1.56E-13  4.37E-13  4.57E-13  3.66E-13  9.42E-13  7.40E-13
 res:  3.72E-13  4.83E-13  3.68E-13  2.64E-13  5.69E-13  3.49E-13  5.87E-13  9.09E-13
 res:  2.21E-13  5.06E-13  5.27E-13  7.96E-13  4.79E-13  4.56E-13  2.27E-13  3.05E-13
 res:  7.32E-13  2.72E-13  2.19E-12  1.70E-11  4.88E-13  1.32E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.29E-13  4.38E-13  1.56E-13  4.37E-13  4.57E-13  3.66E-13  9.43E-13  7.40E-13
 res:  3.72E-13  4.83E-13  3.69E-13  2.64E-13  5.69E-13  3.49E-13  5.87E-13  9.09E-13
 res:  2.21E-13  5.06E-13  5.27E-13  7.96E-13  4.79E-13  4.56E-13  2.27E-13  2.88E-13
 res:  7.49E-13  2.72E-13  4.51E-13  2.20E-12  3.31E-13  2.76E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.29E-13  4.38E-13  1.56E-13  4.37E-13  4.57E-13  3.66E-13  9.42E-13  7.40E-13
 res:  3.72E-13  4.83E-13  3.69E-13  2.64E-13  5.70E-13  3.49E-13  5.88E-13  9.09E-13
 res:  2.21E-13  5.06E-13  5.27E-13  7.96E-13  4.79E-13  4.56E-13  2.27E-13  2.88E-13
 res:  7.49E-13  2.71E-13  6.20E-13  3.68E-13  3.98E-13  3.52E-06
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.72E-02  5.42E-02  5.42E-02  7.59E-02  7.59E-02
 ene:  7.59E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
     eigenvalues (hartree) for   30  bands
              after   12 non-SCF iterations with    4 CG line minimizations
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6356E-01 -3.6984E-01
 -3.6979E-01 -3.6979E-01 -3.1917E-01 -3.1917E-01 -3.1913E-01  2.7169E-02
  5.4211E-02  5.4211E-02  7.5902E-02  7.5933E-02  7.5933E-02  2.1916E-01
  2.1916E-01  2.1919E-01  3.5030E-01  3.5031E-01  3.5031E-01  4.8356E-01
  4.8356E-01  4.8358E-01  4.9484E-01  4.9484E-01  5.9103E-01  5.9106E-01
      mean kinetic energy (hartree) for    30   bands
              after   12 non-SCF iterations with    4 CG line minimizations
  1.0666E+00  7.6923E-01  7.6923E-01  7.6923E-01  9.4503E-01  8.3273E-01
  8.3288E-01  8.3288E-01  1.0162E+00  1.0162E+00  1.0163E+00  1.0602E+00
  1.1342E+00  1.1342E+00  1.0254E+00  1.0256E+00  1.0256E+00  1.4844E+00
  1.4844E+00  1.4845E+00  8.9825E-01  8.9825E-01  8.9825E-01  9.7223E-01
  9.7222E-01  9.7197E-01  1.1116E+00  1.1116E+00  1.1169E+00  1.1170E+00
 non-scf iterations; kpt #     3  , k= (  0.48889  0.48889  0.48889  ), band residuals:
 res:  1.85E+00  1.86E+00  1.99E+00  1.88E+00  1.42E+00  1.12E+00  5.97E-01  7.76E-01
 res:  4.62E-01  4.61E-01  7.60E-01  5.28E-01  7.97E-01  4.67E-01  5.15E-01  4.87E-01
 res:  8.17E-01  5.32E-01  5.79E-01  5.97E-01  1.29E+00  7.39E-01  6.89E-01  5.54E-01
 res:  1.69E+00  6.06E-01  1.35E+00  9.02E-01  7.34E-01  7.15E-01
 Performing subspace diagonalization.
 ene: -2.13E+00 -9.63E-01 -9.10E-01 -8.34E-01 -6.97E-01 -2.58E-01 -2.46E-01 -2.09E-01
 ene: -1.52E-01 -1.17E-01 -2.24E-03  6.53E-02  8.46E-02  9.68E-02  1.08E-01  1.29E-01
 ene:  1.46E-01  1.68E-01  1.96E-01  2.15E-01  2.76E-01  2.94E-01  3.19E-01  4.06E-01
 ene:  4.59E-01  5.54E-01  6.84E-01  7.67E-01  1.07E+00  2.90E+00
 Calling pw_orthon to orthonormalize bands.
 res:  1.25E+00  1.43E-01  1.41E-01  2.34E-01  2.00E-01  3.43E-02  1.40E-01  4.58E-02
 res:  9.51E-02  7.61E-02  2.63E-01  7.75E-02  1.42E-01  8.01E-02  4.90E-02  1.12E-01
 res:  1.11E-01  1.69E-01  6.87E-02  1.34E-01  1.05E-01  1.33E-01  9.79E-02  1.69E-01
 res:  1.06E-01  1.33E-01  1.34E-01  1.59E-01  1.30E-01  4.99E-01
 Performing subspace diagonalization.
 ene: -2.00E+00 -1.15E+00 -1.14E+00 -1.12E+00 -9.34E-01 -3.67E-01 -3.63E-01 -3.57E-01
 ene: -3.17E-01 -3.05E-01 -2.90E-01  3.35E-02  5.93E-02  7.32E-02  8.02E-02  8.21E-02
 ene:  9.94E-02  2.28E-01  2.40E-01  2.50E-01  3.60E-01  3.67E-01  3.74E-01  4.91E-01
 ene:  4.97E-01  5.13E-01  5.72E-01  6.03E-01  6.58E-01  7.08E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.40E-02  2.28E-04  6.12E-04  3.49E-03  3.34E-03  1.66E-04  4.22E-04  1.40E-03
 res:  1.00E-04  1.49E-03  2.10E-03  3.65E-04  2.86E-04  9.36E-04  2.93E-04  5.60E-04
 res:  2.22E-03  6.06E-04  2.07E-03  3.48E-03  7.16E-04  1.59E-03  2.71E-03  3.55E-04
 res:  1.03E-03  2.64E-03  9.22E-03  2.15E-02  1.87E-02  2.45E-02
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.63E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.43E-02  5.44E-02  7.59E-02  7.60E-02
 ene:  7.65E-02  2.19E-01  2.20E-01  2.20E-01  3.50E-01  3.50E-01  3.51E-01  4.84E-01
 ene:  4.85E-01  4.86E-01  4.96E-01  5.08E-01  5.99E-01  6.03E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.99E-05  4.83E-07  3.21E-06  1.61E-05  6.41E-06  1.09E-06  6.63E-07  4.33E-06
 res:  9.25E-07  1.34E-06  5.43E-06  2.84E-06  1.35E-06  2.31E-06  6.49E-07  1.12E-06
 res:  1.55E-05  2.44E-06  1.99E-05  4.16E-05  9.17E-06  7.63E-06  3.79E-05  7.19E-06
 res:  8.53E-05  1.72E-04  1.12E-04  2.25E-03  1.16E-03  1.02E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.58E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.98E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.10E-07  8.22E-10  3.45E-09  2.35E-08  1.14E-08  2.95E-09  4.11E-10  1.49E-09
 res:  5.78E-10  3.72E-09  1.04E-09  1.53E-09  4.85E-10  1.83E-09  3.71E-09  8.68E-10
 res:  7.33E-09  9.20E-09  1.23E-07  8.52E-08  3.23E-08  1.59E-08  6.72E-08  1.51E-06
 res:  3.49E-06  4.63E-06  2.34E-06  7.81E-05  8.88E-06  2.46E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.58E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.95E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.57E-10  2.19E-12  5.14E-12  1.92E-11  8.86E-12  2.39E-12  4.21E-13  1.04E-12
 res:  4.39E-13  2.61E-12  6.27E-13  8.82E-13  6.81E-13  1.67E-12  1.86E-12  5.35E-13
 res:  4.42E-12  7.83E-11  6.59E-10  8.75E-10  1.38E-10  2.99E-11  6.53E-10  6.19E-08
 res:  1.57E-07  2.16E-08  2.28E-07  1.33E-06  3.48E-07  3.10E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.58E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.92E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.72E-13  4.03E-13  1.80E-13  4.21E-13  5.37E-13  4.21E-13  2.46E-13  3.79E-13
 res:  3.22E-13  6.41E-13  6.25E-13  8.87E-13  4.65E-13  6.41E-13  5.16E-13  6.12E-13
 res:  1.90E-13  4.69E-13  5.72E-12  4.77E-12  7.83E-13  2.16E-13  1.18E-12  2.34E-09
 res:  7.14E-09  7.17E-10  4.20E-09  1.80E-07  4.69E-09  3.20E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.58E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.92E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.72E-13  4.03E-13  1.90E-13  4.11E-13  5.37E-13  4.21E-13  2.46E-13  3.80E-13
 res:  3.22E-13  6.40E-13  6.25E-13  8.87E-13  4.65E-13  6.41E-13  5.15E-13  6.02E-13
 res:  1.98E-13  4.21E-13  4.56E-13  6.88E-13  7.81E-13  2.68E-13  8.77E-13  1.37E-10
 res:  2.42E-10  8.60E-12  5.58E-10  2.80E-09  2.36E-10  5.06E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.58E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.72E-13  4.03E-13  1.90E-13  4.11E-13  5.37E-13  4.21E-13  2.46E-13  3.80E-13
 res:  3.22E-13  6.41E-13  6.25E-13  8.87E-13  4.65E-13  6.41E-13  5.15E-13  6.02E-13
 res:  1.98E-13  4.61E-13  4.17E-13  6.87E-13  7.81E-13  2.68E-13  8.77E-13  3.79E-12
 res:  1.51E-11  4.43E-13  9.24E-12  3.92E-10  8.42E-12  8.28E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.58E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.72E-13  4.03E-13  1.90E-13  4.11E-13  5.37E-13  4.21E-13  2.46E-13  3.80E-13
 res:  3.22E-13  6.40E-13  6.25E-13  8.87E-13  4.64E-13  6.41E-13  5.15E-13  6.03E-13
 res:  1.99E-13  4.61E-13  4.17E-13  6.87E-13  7.81E-13  2.68E-13  8.77E-13  5.42E-13
 res:  6.00E-13  4.41E-13  1.34E-12  6.20E-12  7.29E-13  1.25E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.58E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.72E-13  4.03E-13  1.90E-13  4.11E-13  5.37E-13  4.21E-13  2.46E-13  3.80E-13
 res:  3.22E-13  6.40E-13  6.25E-13  8.87E-13  4.64E-13  6.41E-13  5.15E-13  6.03E-13
 res:  1.99E-13  4.61E-13  4.17E-13  6.87E-13  7.81E-13  2.68E-13  8.77E-13  3.58E-13
 res:  7.84E-13  4.41E-13  2.59E-13  8.63E-13  4.90E-13  2.35E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.73E-02  5.43E-02  5.43E-02  7.58E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
     eigenvalues (hartree) for   30  bands
              after   11 non-SCF iterations with    4 CG line minimizations
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6356E-01 -3.7000E-01
 -3.6982E-01 -3.6982E-01 -3.1912E-01 -3.1912E-01 -3.1898E-01  2.7271E-02
  5.4266E-02  5.4266E-02  7.5837E-02  7.5962E-02  7.5962E-02  2.1905E-01
  2.1905E-01  2.1914E-01  3.5023E-01  3.5025E-01  3.5025E-01  4.8366E-01
  4.8366E-01  4.8375E-01  4.9478E-01  4.9478E-01  5.9091E-01  5.9096E-01
      mean kinetic energy (hartree) for    30   bands
              after   11 non-SCF iterations with    4 CG line minimizations
  1.0666E+00  7.6924E-01  7.6924E-01  7.6924E-01  9.4501E-01  8.3222E-01
  8.3282E-01  8.3282E-01  1.0164E+00  1.0164E+00  1.0170E+00  1.0604E+00
  1.1342E+00  1.1342E+00  1.0250E+00  1.0255E+00  1.0255E+00  1.4837E+00
  1.4837E+00  1.4843E+00  8.9817E-01  8.9818E-01  8.9818E-01  9.7333E-01
  9.7333E-01  9.7228E-01  1.1110E+00  1.1110E+00  1.1170E+00  1.1177E+00
 non-scf iterations; kpt #     4  , k= (  0.48333  0.48333  0.48333  ), band residuals:
 res:  1.85E+00  1.86E+00  2.00E+00  1.92E+00  1.41E+00  1.11E+00  5.86E-01  7.76E-01
 res:  4.65E-01  4.62E-01  7.66E-01  5.36E-01  8.17E-01  4.68E-01  5.21E-01  4.86E-01
 res:  8.08E-01  5.35E-01  5.79E-01  6.02E-01  1.27E+00  7.27E-01  6.91E-01  5.61E-01
 res:  1.70E+00  6.08E-01  1.30E+00  9.12E-01  7.25E-01  7.29E-01
 Performing subspace diagonalization.
 ene: -2.13E+00 -9.65E-01 -9.14E-01 -8.38E-01 -6.97E-01 -2.56E-01 -2.50E-01 -2.07E-01
 ene: -1.52E-01 -1.15E-01 -7.72E-03  6.59E-02  8.52E-02  9.96E-02  1.08E-01  1.26E-01
 ene:  1.46E-01  1.66E-01  1.95E-01  2.14E-01  2.75E-01  2.93E-01  3.33E-01  4.00E-01
 ene:  4.59E-01  5.50E-01  6.95E-01  7.65E-01  1.06E+00  2.89E+00
 Calling pw_orthon to orthonormalize bands.
 res:  1.28E+00  1.41E-01  1.39E-01  2.20E-01  2.15E-01  5.54E-02  1.31E-01  4.53E-02
 res:  8.45E-02  7.98E-02  2.60E-01  7.58E-02  1.33E-01  1.27E-01  3.64E-02  1.08E-01
 res:  1.13E-01  1.69E-01  6.63E-02  1.28E-01  1.06E-01  1.22E-01  8.83E-02  1.68E-01
 res:  9.81E-02  1.46E-01  1.39E-01  1.53E-01  1.25E-01  4.86E-01
 Performing subspace diagonalization.
 ene: -1.99E+00 -1.15E+00 -1.14E+00 -1.12E+00 -9.32E-01 -3.67E-01 -3.63E-01 -3.57E-01
 ene: -3.16E-01 -3.05E-01 -2.92E-01  3.37E-02  5.90E-02  7.44E-02  8.03E-02  8.18E-02
 ene:  9.90E-02  2.27E-01  2.39E-01  2.52E-01  3.60E-01  3.65E-01  3.73E-01  4.91E-01
 ene:  4.98E-01  5.14E-01  5.80E-01  5.99E-01  6.47E-01  7.14E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.47E-02  2.13E-04  7.56E-04  3.20E-03  3.92E-03  1.51E-04  3.74E-04  1.51E-03
 res:  9.93E-05  1.48E-03  1.86E-03  3.82E-04  2.37E-04  9.68E-04  3.29E-04  5.80E-04
 res:  2.27E-03  6.08E-04  2.02E-03  3.64E-03  7.83E-04  1.42E-03  2.57E-03  3.35E-04
 res:  1.13E-03  2.76E-03  9.57E-03  1.95E-02  1.68E-02  2.52E-02
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.63E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.76E-02  5.44E-02  5.45E-02  7.59E-02  7.60E-02
 ene:  7.65E-02  2.19E-01  2.19E-01  2.20E-01  3.50E-01  3.50E-01  3.51E-01  4.84E-01
 ene:  4.85E-01  4.87E-01  4.97E-01  5.07E-01  5.98E-01  6.05E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.29E-05  4.31E-07  2.72E-06  1.32E-05  7.20E-06  2.56E-06  6.13E-07  2.95E-06
 res:  1.26E-06  2.78E-06  3.43E-06  3.12E-06  1.09E-06  2.84E-06  1.21E-06  5.52E-07
 res:  1.40E-05  2.61E-06  1.72E-05  5.38E-05  4.20E-06  1.10E-05  3.99E-05  1.24E-05
 res:  5.71E-05  1.17E-04  2.41E-04  2.29E-03  9.78E-04  1.31E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.44E-02  5.44E-02  7.57E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.99E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.33E-07  8.97E-10  2.27E-09  2.36E-08  1.25E-08  3.29E-09  3.76E-10  1.56E-09
 res:  1.05E-09  3.12E-09  9.33E-10  1.31E-09  4.70E-10  1.78E-09  2.96E-09  4.44E-10
 res:  5.34E-09  3.77E-09  1.82E-07  5.54E-08  3.80E-08  6.38E-09  9.78E-08  1.90E-06
 res:  7.22E-07  1.99E-06  5.57E-06  7.65E-05  6.94E-06  2.98E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.44E-02  5.44E-02  7.57E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.94E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.75E-10  1.87E-12  3.69E-12  1.80E-11  9.51E-12  2.51E-12  4.14E-13  1.10E-12
 res:  6.75E-13  2.14E-12  6.01E-13  7.67E-13  7.78E-13  1.17E-12  1.99E-12  2.45E-13
 res:  3.33E-12  2.46E-11  5.80E-10  6.21E-10  1.16E-10  3.84E-11  5.17E-10  1.16E-08
 res:  2.06E-08  2.03E-08  5.27E-07  1.30E-06  2.47E-07  2.03E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.44E-02  5.44E-02  7.57E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.92E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.71E-13  4.18E-13  1.92E-13  3.04E-13  5.75E-13  4.61E-13  1.64E-13  4.30E-13
 res:  3.38E-13  7.74E-13  5.99E-13  7.76E-13  3.28E-13  6.80E-13  5.44E-13  3.20E-13
 res:  1.49E-13  3.61E-13  6.20E-12  2.45E-12  9.55E-13  4.69E-13  2.86E-12  8.65E-11
 res:  1.10E-09  8.37E-10  6.24E-09  1.64E-07  5.96E-09  1.83E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.44E-02  5.44E-02  7.57E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.71E-13  4.18E-13  1.99E-13  2.96E-13  5.75E-13  4.61E-13  1.63E-13  4.30E-13
 res:  3.38E-13  7.73E-13  5.99E-13  7.76E-13  3.28E-13  6.80E-13  5.44E-13  3.16E-13
 res:  1.54E-13  1.80E-13  5.49E-13  4.01E-13  9.54E-13  5.27E-13  3.15E-13  2.81E-12
 res:  6.40E-12  1.09E-11  9.31E-10  2.44E-09  1.84E-10  4.42E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.44E-02  5.44E-02  7.57E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.71E-13  4.18E-13  1.99E-13  2.96E-13  5.75E-13  4.61E-13  1.63E-13  4.30E-13
 res:  3.38E-13  7.74E-13  5.99E-13  7.77E-13  3.28E-13  6.81E-13  5.43E-13  3.16E-13
 res:  1.54E-13  2.12E-13  5.17E-13  4.01E-13  9.53E-13  5.26E-13  3.15E-13  7.56E-13
 res:  4.00E-13  5.47E-13  1.38E-11  3.34E-10  1.14E-11  4.58E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.44E-02  5.44E-02  7.57E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.71E-13  4.18E-13  1.99E-13  2.96E-13  5.75E-13  4.61E-13  1.63E-13  4.30E-13
 res:  3.38E-13  7.73E-13  5.99E-13  7.77E-13  3.27E-13  6.81E-13  5.43E-13  3.16E-13
 res:  1.54E-13  2.12E-13  5.16E-13  4.01E-13  9.53E-13  5.26E-13  3.15E-13  5.87E-13
 res:  5.66E-13  5.46E-13  2.24E-12  5.27E-12  6.07E-13  1.05E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.44E-02  5.44E-02  7.57E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.71E-13  4.18E-13  1.99E-13  2.96E-13  5.75E-13  4.61E-13  1.63E-13  4.30E-13
 res:  3.38E-13  7.74E-13  5.99E-13  7.77E-13  3.27E-13  6.81E-13  5.43E-13  3.16E-13
 res:  1.54E-13  2.12E-13  5.17E-13  4.01E-13  9.53E-13  5.26E-13  3.15E-13  5.87E-13
 res:  5.66E-13  5.46E-13  3.72E-13  7.55E-13  3.51E-13  1.27E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.19E-01  2.74E-02  5.44E-02  5.44E-02  7.57E-02  7.60E-02
 ene:  7.60E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
     eigenvalues (hartree) for   30  bands
              after   11 non-SCF iterations with    4 CG line minimizations
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6357E-01 -3.7028E-01
 -3.6988E-01 -3.6988E-01 -3.1904E-01 -3.1904E-01 -3.1871E-01  2.7441E-02
  5.4357E-02  5.4357E-02  7.5731E-02  7.6010E-02  7.6010E-02  2.1885E-01
  2.1885E-01  2.1906E-01  3.5012E-01  3.5014E-01  3.5014E-01  4.8383E-01
  4.8383E-01  4.8403E-01  4.9470E-01  4.9470E-01  5.9072E-01  5.9075E-01
      mean kinetic energy (hartree) for    30   bands
              after   11 non-SCF iterations with    4 CG line minimizations
  1.0666E+00  7.6925E-01  7.6925E-01  7.6925E-01  9.4498E-01  8.3137E-01
  8.3273E-01  8.3273E-01  1.0168E+00  1.0168E+00  1.0181E+00  1.0608E+00
  1.1343E+00  1.1343E+00  1.0242E+00  1.0254E+00  1.0254E+00  1.4826E+00
  1.4826E+00  1.4840E+00  8.9803E-01  8.9807E-01  8.9807E-01  9.7524E-01
  9.7524E-01  9.7279E-01  1.1099E+00  1.1099E+00  1.1172E+00  1.1177E+00
 non-scf iterations; kpt #     5  , k= (  0.47778  0.47778  0.47778  ), band residuals:
 res:  1.85E+00  1.85E+00  2.00E+00  1.94E+00  1.40E+00  1.11E+00  5.77E-01  7.75E-01
 res:  4.68E-01  4.63E-01  7.72E-01  5.43E-01  8.34E-01  4.69E-01  5.26E-01  4.86E-01
 res:  8.00E-01  5.38E-01  5.80E-01  6.07E-01  1.25E+00  7.14E-01  6.93E-01  5.70E-01
 res:  1.71E+00  6.09E-01  1.25E+00  9.14E-01  7.16E-01  7.65E-01
 Performing subspace diagonalization.
 ene: -2.13E+00 -9.68E-01 -9.17E-01 -8.39E-01 -6.97E-01 -2.55E-01 -2.52E-01 -2.04E-01
 ene: -1.53E-01 -1.14E-01 -1.28E-02  6.60E-02  8.58E-02  1.03E-01  1.08E-01  1.25E-01
 ene:  1.45E-01  1.66E-01  1.94E-01  2.14E-01  2.75E-01  2.93E-01  3.46E-01  3.93E-01
 ene:  4.60E-01  5.48E-01  7.04E-01  7.66E-01  1.05E+00  2.86E+00
 Calling pw_orthon to orthonormalize bands.
 res:  1.31E+00  1.38E-01  1.40E-01  2.10E-01  2.34E-01  1.23E-01  7.80E-02  4.55E-02
 res:  7.74E-02  7.96E-02  2.56E-01  7.64E-02  1.12E-01  1.57E-01  3.47E-02  1.18E-01
 res:  1.14E-01  1.64E-01  6.98E-02  1.25E-01  1.05E-01  1.12E-01  8.24E-02  1.64E-01
 res:  8.78E-02  1.59E-01  1.43E-01  1.44E-01  1.20E-01  4.78E-01
 Performing subspace diagonalization.
 ene: -1.99E+00 -1.15E+00 -1.14E+00 -1.12E+00 -9.31E-01 -3.67E-01 -3.64E-01 -3.57E-01
 ene: -3.16E-01 -3.04E-01 -2.95E-01  3.38E-02  5.87E-02  7.46E-02  8.06E-02  8.20E-02
 ene:  9.87E-02  2.27E-01  2.38E-01  2.53E-01  3.59E-01  3.63E-01  3.72E-01  4.91E-01
 ene:  4.99E-01  5.15E-01  5.82E-01  5.98E-01  6.39E-01  7.20E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.46E-02  1.96E-04  8.63E-04  2.83E-03  4.36E-03  1.47E-04  3.38E-04  1.54E-03
 res:  9.58E-05  1.48E-03  1.53E-03  3.96E-04  1.90E-04  9.35E-04  3.39E-04  7.00E-04
 res:  2.24E-03  5.78E-04  1.94E-03  3.67E-03  8.01E-04  1.26E-03  2.34E-03  3.11E-04
 res:  1.23E-03  2.80E-03  9.54E-03  1.62E-02  1.54E-02  2.53E-02
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.63E-01 -3.70E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.78E-02  5.45E-02  5.46E-02  7.57E-02  7.61E-02
 ene:  7.65E-02  2.19E-01  2.19E-01  2.20E-01  3.50E-01  3.50E-01  3.51E-01  4.84E-01
 ene:  4.85E-01  4.87E-01  4.98E-01  5.05E-01  5.94E-01  6.07E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.31E-05  3.75E-07  2.13E-06  1.13E-05  8.10E-06  3.21E-06  2.20E-07  2.62E-06
 res:  1.38E-06  3.42E-06  2.10E-06  2.95E-06  8.15E-07  3.23E-06  2.09E-06  3.07E-07
 res:  1.08E-05  2.51E-06  1.44E-05  5.37E-05  2.73E-06  1.11E-05  3.13E-05  1.59E-05
 res:  7.17E-05  1.20E-04  3.07E-04  2.79E-03  6.30E-04  1.18E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.91E-01  6.00E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.34E-07  1.28E-09  1.62E-09  1.99E-08  1.24E-08  3.02E-09  2.01E-10  1.27E-09
 res:  9.85E-10  2.36E-09  7.54E-10  1.26E-09  3.05E-10  1.80E-09  1.87E-09  1.50E-10
 res:  3.76E-09  2.46E-09  1.47E-07  2.92E-08  3.54E-08  4.25E-09  7.28E-08  1.08E-06
 res:  1.39E-06  1.23E-06  1.17E-05  4.63E-05  3.23E-06  2.73E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.90E-01  5.96E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.69E-10  4.56E-12  2.76E-12  1.38E-11  1.02E-11  2.68E-12  6.04E-13  8.41E-13
 res:  5.89E-13  1.78E-12  6.02E-13  1.63E-12  5.50E-13  1.72E-12  1.25E-12  4.33E-13
 res:  3.21E-12  1.04E-11  4.74E-10  2.58E-10  1.14E-10  1.51E-11  4.30E-10  8.91E-09
 res:  9.74E-08  2.75E-08  8.28E-07  2.37E-06  1.80E-07  2.97E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.90E-01  5.92E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.45E-13  9.06E-13  7.87E-13  6.61E-13  5.74E-13  4.62E-13  6.02E-13  8.39E-13
 res:  3.23E-13  5.98E-13  6.01E-13  3.00E-13  4.54E-13  4.74E-13  2.87E-13  4.79E-13
 res:  8.21E-13  5.88E-13  7.45E-12  8.56E-13  1.04E-12  9.64E-13  2.26E-12  3.17E-10
 res:  7.72E-10  1.44E-09  1.94E-08  3.03E-07  2.78E-09  6.29E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.90E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.45E-13  9.06E-13  7.93E-13  6.55E-13  5.74E-13  4.62E-13  6.01E-13  8.39E-13
 res:  3.23E-13  5.98E-13  6.01E-13  2.99E-13  4.53E-13  4.74E-13  2.88E-13  4.78E-13
 res:  8.19E-13  7.60E-13  2.36E-13  8.55E-13  4.41E-13  9.41E-13  2.84E-13  4.33E-12
 res:  6.80E-11  3.77E-11  3.15E-09  8.73E-09  1.66E-10  5.58E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.90E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.45E-13  9.06E-13  7.93E-13  6.55E-13  5.74E-13  4.62E-13  6.02E-13  8.39E-13
 res:  3.22E-13  5.98E-13  6.01E-13  2.99E-13  4.53E-13  4.74E-13  2.87E-13  4.78E-13
 res:  8.18E-13  7.87E-13  2.10E-13  8.55E-13  4.40E-13  9.44E-13  2.82E-13  5.13E-13
 res:  6.15E-13  1.69E-12  6.69E-11  1.10E-09  4.39E-12  1.16E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.90E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.46E-13  9.06E-13  7.93E-13  6.55E-13  5.74E-13  4.62E-13  6.01E-13  8.39E-13
 res:  3.22E-13  5.98E-13  6.01E-13  2.99E-13  4.54E-13  4.75E-13  2.87E-13  4.78E-13
 res:  8.17E-13  7.87E-13  2.10E-13  8.57E-13  4.40E-13  9.43E-13  2.82E-13  4.28E-13
 res:  6.97E-13  2.15E-13  1.16E-11  2.95E-11  2.58E-13  1.17E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.90E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.46E-13  9.06E-13  7.93E-13  6.55E-13  5.74E-13  4.62E-13  6.02E-13  8.39E-13
 res:  3.22E-13  5.98E-13  6.01E-13  2.99E-13  4.54E-13  4.75E-13  2.87E-13  4.78E-13
 res:  8.16E-13  7.87E-13  2.10E-13  8.57E-13  4.40E-13  9.43E-13  2.82E-13  4.28E-13
 res:  6.97E-13  2.14E-13  4.03E-13  3.82E-12  1.43E-13  2.54E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.90E-01  5.90E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.46E-13  9.06E-13  7.93E-13  6.55E-13  5.74E-13  4.62E-13  6.02E-13  8.39E-13
 res:  3.22E-13  5.98E-13  6.01E-13  2.99E-13  4.54E-13  4.75E-13  2.88E-13  4.78E-13
 res:  8.16E-13  7.87E-13  2.10E-13  8.58E-13  4.40E-13  9.43E-13  2.82E-13  4.28E-13
 res:  6.97E-13  2.14E-13  6.13E-13  8.55E-13  1.83E-13  2.64E-06
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.77E-02  5.45E-02  5.45E-02  7.56E-02  7.61E-02
 ene:  7.61E-02  2.19E-01  2.19E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.84E-01  4.95E-01  4.95E-01  5.90E-01  5.90E-01
 Calling pw_orthon to orthonormalize bands.
     eigenvalues (hartree) for   30  bands
              after   12 non-SCF iterations with    4 CG line minimizations
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6357E-01 -3.7066E-01
 -3.6995E-01 -3.6995E-01 -3.1893E-01 -3.1893E-01 -3.1835E-01  2.7678E-02
  5.4486E-02  5.4486E-02  7.5585E-02  7.6078E-02  7.6078E-02  2.1858E-01
  2.1858E-01  2.1895E-01  3.4995E-01  3.5000E-01  3.5000E-01  4.8404E-01
  4.8404E-01  4.8442E-01  4.9460E-01  4.9460E-01  5.9045E-01  5.9047E-01
      mean kinetic energy (hartree) for    30   bands
              after   12 non-SCF iterations with    4 CG line minimizations
  1.0666E+00  7.6926E-01  7.6926E-01  7.6926E-01  9.4494E-01  8.3021E-01
  8.3259E-01  8.3259E-01  1.0173E+00  1.0173E+00  1.0196E+00  1.0613E+00
  1.1343E+00  1.1343E+00  1.0231E+00  1.0253E+00  1.0253E+00  1.4810E+00
  1.4810E+00  1.4835E+00  8.9783E-01  8.9790E-01  8.9790E-01  9.7809E-01
  9.7809E-01  9.7351E-01  1.1083E+00  1.1083E+00  1.1175E+00  1.1175E+00
 non-scf iterations; kpt #     6  , k= (  0.47222  0.47222  0.47222  ), band residuals:
 res:  1.66E+00  1.65E+00  1.68E+00  1.91E+00  1.54E+00  1.60E+00  1.07E+00  7.73E-01
 res:  7.22E-01  5.48E-01  7.44E-01  5.95E-01  6.51E-01  6.75E-01  8.24E-01  7.10E-01
 res:  4.62E-01  8.09E-01  8.52E-01  7.46E-01  5.36E-01  8.08E-01  4.77E-01  3.97E-01
 res:  4.42E-01  9.33E-01  5.20E-01  8.11E-01  7.93E-01  7.59E-01
 Performing subspace diagonalization.
 ene: -1.86E+00 -1.02E+00 -9.26E-01 -7.99E-01 -7.12E-01 -3.14E-01 -2.68E-01 -2.49E-01
 ene: -2.00E-01 -1.41E-01 -9.22E-02  6.40E-02  7.22E-02  9.53E-02  1.15E-01  1.41E-01
 ene:  2.18E-01  2.26E-01  2.61E-01  2.76E-01  3.23E-01  3.60E-01  4.10E-01  4.39E-01
 ene:  5.00E-01  5.79E-01  7.21E-01  8.02E-01  1.02E+00  2.53E+00
 Calling pw_orthon to orthonormalize bands.
 res:  1.25E-01  2.21E-01  1.28E-01  1.68E-01  1.56E-01  9.10E-02  2.74E-02  3.46E-02
 res:  3.99E-02  5.94E-02  1.15E-01  4.65E-02  8.46E-02  5.30E-02  3.81E-02  7.31E-02
 res:  1.62E-01  7.58E-02  6.02E-02  1.38E-01  8.15E-02  1.02E-01  6.65E-02  7.69E-02
 res:  7.05E-02  1.11E-01  6.08E-02  8.81E-02  1.02E-01  1.86E-01
 Performing subspace diagonalization.
 ene: -2.09E+00 -1.15E+00 -1.14E+00 -1.12E+00 -9.50E-01 -3.69E-01 -3.63E-01 -3.47E-01
 ene: -3.16E-01 -3.13E-01 -3.03E-01  3.37E-02  5.86E-02  6.24E-02  7.75E-02  8.51E-02
 ene:  1.00E-01  2.24E-01  2.26E-01  2.36E-01  3.54E-01  3.57E-01  3.68E-01  4.92E-01
 ene:  4.99E-01  5.08E-01  5.35E-01  5.71E-01  6.19E-01  6.36E-01
 Calling pw_orthon to orthonormalize bands.
 res:  6.03E-04  1.70E-04  4.18E-04  2.87E-03  1.26E-03  4.90E-05  3.84E-04  2.93E-03
 res:  1.16E-04  3.94E-04  1.89E-03  3.33E-04  2.00E-04  4.32E-04  5.62E-05  4.34E-04
 res:  2.73E-03  2.13E-04  5.19E-04  1.33E-03  1.17E-04  2.11E-04  1.43E-03  3.55E-04
 res:  9.66E-04  1.34E-03  4.60E-03  9.09E-03  6.09E-03  6.12E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.55E-02  7.62E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.85E-01  4.85E-01  4.96E-01  5.00E-01  5.92E-01  6.03E-01
 Calling pw_orthon to orthonormalize bands.
 res:  2.11E-06  4.55E-07  1.17E-06  9.61E-06  1.69E-06  4.06E-07  2.92E-07  3.91E-06
 res:  1.29E-07  1.07E-06  2.80E-07  1.21E-06  3.32E-07  1.97E-06  1.46E-06  4.90E-07
 res:  3.45E-06  6.84E-07  3.24E-06  6.13E-06  3.53E-07  1.10E-06  7.57E-06  1.78E-05
 res:  1.61E-05  5.96E-05  9.33E-05  1.13E-03  2.52E-04  1.09E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.54E-02  7.62E-02
 ene:  7.62E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.85E-01  4.95E-01  4.95E-01  5.90E-01  6.00E-01
 Calling pw_orthon to orthonormalize bands.
 res:  2.89E-09  3.01E-09  5.94E-10  1.11E-08  2.17E-09  3.16E-10  1.98E-10  2.87E-09
 res:  6.49E-11  7.79E-10  1.34E-10  5.88E-10  1.39E-10  9.72E-10  9.21E-10  1.03E-10
 res:  1.71E-09  3.09E-09  8.62E-09  1.67E-08  9.91E-09  1.81E-09  2.02E-08  2.18E-07
 res:  2.42E-06  3.31E-07  3.03E-06  7.39E-06  1.71E-06  1.27E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.54E-02  7.62E-02
 ene:  7.62E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.85E-01  4.95E-01  4.95E-01  5.90E-01  5.97E-01
 Calling pw_orthon to orthonormalize bands.
 res:  8.61E-12  5.55E-12  1.42E-12  1.41E-11  2.20E-12  8.58E-13  4.72E-13  2.24E-12
 res:  2.51E-13  3.84E-13  3.12E-13  5.48E-13  4.73E-13  1.24E-12  1.11E-12  5.52E-13
 res:  1.57E-12  1.28E-11  7.10E-11  6.84E-11  2.91E-11  9.39E-12  8.56E-11  1.41E-08
 res:  1.68E-08  2.10E-08  5.82E-08  9.39E-07  1.20E-07  6.77E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.54E-02  7.62E-02
 ene:  7.62E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.85E-01  4.95E-01  4.95E-01  5.90E-01  5.94E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.91E-13  2.75E-13  3.84E-13  6.98E-13  3.93E-13  8.57E-13  4.67E-13  4.89E-13
 res:  3.00E-13  3.33E-13  3.11E-13  5.46E-13  4.65E-13  3.48E-13  2.69E-13  5.60E-13
 res:  4.23E-13  5.83E-13  2.45E-13  6.49E-13  9.27E-13  7.87E-13  4.45E-13  9.76E-11
 res:  1.19E-09  1.66E-10  5.14E-09  1.22E-08  1.18E-09  6.50E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.54E-02  7.62E-02
 ene:  7.62E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.85E-01  4.95E-01  4.95E-01  5.90E-01  5.93E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.90E-13  2.75E-13  3.83E-13  6.99E-13  3.92E-13  8.57E-13  4.67E-13  4.89E-13
 res:  3.00E-13  3.32E-13  3.11E-13  5.44E-13  4.63E-13  3.48E-13  2.69E-13  5.60E-13
 res:  4.21E-13  2.70E-13  5.55E-13  6.41E-13  9.21E-13  4.12E-13  8.15E-13  5.68E-12
 res:  6.34E-12  1.27E-11  1.04E-10  2.06E-09  9.15E-11  2.44E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.54E-02  7.62E-02
 ene:  7.62E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.85E-01  4.95E-01  4.95E-01  5.90E-01  5.92E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.90E-13  2.75E-13  3.83E-13  6.99E-13  3.92E-13  8.57E-13  4.67E-13  4.88E-13
 res:  3.00E-13  3.32E-13  3.11E-13  5.44E-13  4.63E-13  3.48E-13  2.69E-13  5.60E-13
 res:  4.21E-13  2.70E-13  5.55E-13  6.42E-13  9.20E-13  4.12E-13  8.15E-13  8.57E-13
 res:  4.46E-13  6.15E-13  1.19E-11  3.01E-11  1.21E-12  2.31E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.54E-02  7.62E-02
 ene:  7.62E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.85E-01  4.95E-01  4.95E-01  5.90E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.90E-13  2.75E-13  3.83E-13  6.99E-13  3.92E-13  8.57E-13  4.67E-13  4.88E-13
 res:  3.00E-13  3.32E-13  3.11E-13  5.43E-13  4.62E-13  3.48E-13  2.69E-13  5.60E-13
 res:  4.20E-13  2.71E-13  5.56E-13  6.41E-13  9.19E-13  4.12E-13  8.16E-13  6.44E-13
 res:  6.52E-13  6.15E-13  3.09E-13  5.34E-12  3.76E-13  7.73E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.54E-02  7.62E-02
 ene:  7.62E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.85E-01  4.95E-01  4.95E-01  5.90E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.90E-13  2.75E-13  3.83E-13  6.99E-13  3.92E-13  8.57E-13  4.67E-13  4.88E-13
 res:  3.00E-13  3.32E-13  3.11E-13  5.43E-13  4.62E-13  3.48E-13  2.69E-13  5.60E-13
 res:  4.21E-13  2.71E-13  5.56E-13  6.42E-13  9.19E-13  4.12E-13  8.16E-13  6.44E-13
 res:  6.52E-13  6.15E-13  5.46E-13  7.54E-13  4.26E-13  7.81E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.71E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.18E-01  2.80E-02  5.47E-02  5.47E-02  7.54E-02  7.62E-02
 ene:  7.62E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.84E-01
 ene:  4.84E-01  4.85E-01  4.95E-01  4.95E-01  5.90E-01  5.90E-01
 Calling pw_orthon to orthonormalize bands.
     eigenvalues (hartree) for   30  bands
              after   11 non-SCF iterations with    4 CG line minimizations
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6358E-01 -3.7114E-01
 -3.7005E-01 -3.7005E-01 -3.1879E-01 -3.1879E-01 -3.1790E-01  2.7982E-02
  5.4651E-02  5.4651E-02  7.5400E-02  7.6165E-02  7.6165E-02  2.1824E-01
  2.1824E-01  2.1881E-01  3.4974E-01  3.4981E-01  3.4981E-01  4.8429E-01
  4.8429E-01  4.8492E-01  4.9450E-01  4.9450E-01  5.9010E-01  5.9037E-01
      mean kinetic energy (hartree) for    30   bands
              after   11 non-SCF iterations with    4 CG line minimizations
  1.0666E+00  7.6927E-01  7.6927E-01  7.6927E-01  9.4489E-01  8.2874E-01
  8.3242E-01  8.3242E-01  1.0179E+00  1.0179E+00  1.0215E+00  1.0619E+00
  1.1344E+00  1.1344E+00  1.0217E+00  1.0251E+00  1.0251E+00  1.4791E+00
  1.4791E+00  1.4829E+00  8.9758E-01  8.9769E-01  8.9769E-01  9.8205E-01
  9.8205E-01  9.7442E-01  1.1059E+00  1.1059E+00  1.1178E+00  1.1183E+00
 non-scf iterations; kpt #     7  , k= (  0.46667  0.46667  0.46667  ), band residuals:
 res:  1.74E+00  1.72E+00  1.93E+00  2.46E+00  6.82E-01  9.29E-01  8.10E-01  9.58E-01
 res:  1.06E+00  8.65E-01  8.40E-01  8.82E-01  5.80E-01  4.76E-01  5.14E-01  4.95E-01
 res:  6.83E-01  9.68E-01  6.43E-01  3.55E-01  6.19E-01  5.39E-01  5.69E-01  8.46E-01
 res:  5.56E-01  7.50E-01  5.60E-01  5.86E-01  6.73E-01  7.06E-01
 Performing subspace diagonalization.
 ene: -1.89E+00 -9.64E-01 -9.45E-01 -8.39E-01 -6.83E-01 -2.76E-01 -2.46E-01 -2.32E-01
 ene: -1.74E-01 -1.24E-01 -9.39E-02  8.69E-02  9.67E-02  1.08E-01  1.34E-01  1.52E-01
 ene:  1.86E-01  1.97E-01  2.34E-01  2.62E-01  3.01E-01  3.56E-01  3.76E-01  4.19E-01
 ene:  4.75E-01  5.17E-01  6.15E-01  7.52E-01  1.26E+00  2.83E+00
 Calling pw_orthon to orthonormalize bands.
 res:  3.52E-01  1.58E-01  9.15E-02  2.46E-01  1.72E-01  4.28E-02  1.87E-02  4.08E-02
 res:  3.81E-02  4.98E-02  4.90E-02  3.93E-02  3.45E-02  1.32E-02  7.21E-02  4.95E-02
 res:  6.49E-02  1.16E-01  1.46E-01  9.93E-02  6.91E-02  7.29E-02  1.16E-01  6.66E-02
 res:  7.35E-02  7.10E-02  9.71E-02  7.13E-02  1.05E-01  2.84E-01
 Performing subspace diagonalization.
 ene: -2.08E+00 -1.15E+00 -1.14E+00 -1.10E+00 -9.45E-01 -3.69E-01 -3.67E-01 -3.65E-01
 ene: -3.16E-01 -3.13E-01 -3.08E-01  3.39E-02  5.98E-02  6.31E-02  7.77E-02  8.10E-02
 ene:  8.45E-02  2.25E-01  2.30E-01  2.38E-01  3.53E-01  3.57E-01  3.62E-01  4.90E-01
 ene:  4.95E-01  5.06E-01  5.37E-01  5.58E-01  6.23E-01  6.56E-01
 Calling pw_orthon to orthonormalize bands.
 res:  2.42E-03  1.11E-04  5.20E-04  4.11E-03  1.92E-03  1.15E-04  1.67E-04  3.95E-04
 res:  9.66E-05  1.93E-04  1.25E-03  2.45E-04  1.65E-04  5.62E-04  8.25E-05  3.82E-04
 res:  5.70E-04  2.66E-04  6.37E-04  1.45E-03  1.51E-04  2.82E-04  9.22E-04  1.45E-04
 res:  6.19E-04  1.27E-03  4.70E-03  7.70E-03  5.40E-03  1.42E-02
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.17E-01  2.84E-02  5.49E-02  5.50E-02  7.52E-02  7.63E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.50E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.86E-01  4.86E-01  4.97E-01  4.98E-01  5.92E-01  6.08E-01
 Calling pw_orthon to orthonormalize bands.
 res:  5.49E-06  2.44E-07  1.30E-06  1.05E-05  1.96E-06  1.79E-07  1.36E-07  5.74E-07
 res:  1.27E-07  8.63E-07  8.19E-07  5.42E-07  4.00E-07  2.19E-06  2.68E-07  3.45E-07
 res:  1.07E-06  7.69E-07  8.55E-06  1.05E-05  5.58E-07  6.03E-07  6.22E-06  1.61E-05
 res:  8.16E-05  2.63E-05  1.49E-04  8.30E-04  3.29E-04  2.81E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.17E-01  2.84E-02  5.49E-02  5.49E-02  7.52E-02  7.63E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.49E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.95E-01  5.90E-01  6.06E-01
 Calling pw_orthon to orthonormalize bands.
 res:  1.52E-08  8.98E-09  2.98E-10  5.43E-09  1.83E-09  1.88E-10  1.31E-10  6.51E-10
 res:  5.55E-11  6.17E-10  4.97E-10  2.55E-10  1.17E-10  1.54E-09  1.08E-10  1.02E-10
 res:  5.73E-10  3.44E-09  3.67E-08  1.93E-08  3.16E-09  1.30E-09  2.10E-08  1.82E-07
 res:  6.21E-06  3.00E-07  4.87E-06  1.85E-05  1.59E-06  1.72E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.17E-01  2.84E-02  5.49E-02  5.49E-02  7.52E-02  7.63E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.49E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.90E-01  6.01E-01
 Calling pw_orthon to orthonormalize bands.
 res:  2.97E-11  1.18E-11  2.17E-13  2.65E-12  2.19E-12  3.63E-13  5.21E-13  3.17E-13
 res:  2.93E-13  3.90E-13  2.29E-13  3.73E-13  3.55E-13  5.24E-13  2.31E-13  2.04E-13
 res:  1.59E-13  1.01E-11  8.94E-11  3.18E-11  6.72E-12  2.89E-12  2.07E-11  6.09E-09
 res:  8.70E-08  2.62E-09  2.20E-07  4.77E-07  5.89E-08  4.31E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.17E-01  2.84E-02  5.49E-02  5.49E-02  7.52E-02  7.63E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.49E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.90E-01  5.92E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.61E-13  6.72E-13  2.56E-13  5.22E-13  3.26E-13  3.62E-13  4.71E-13  3.66E-13
 res:  4.55E-13  2.26E-13  2.29E-13  3.71E-13  3.12E-13  5.47E-13  2.29E-13  1.71E-13
 res:  1.87E-13  2.26E-13  7.22E-13  1.81E-13  5.26E-13  3.51E-13  9.64E-13  6.35E-11
 res:  4.09E-09  1.86E-10  1.72E-09  4.50E-08  1.15E-09  6.27E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.17E-01  2.84E-02  5.49E-02  5.49E-02  7.52E-02  7.63E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.49E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.90E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.61E-13  6.71E-13  2.56E-13  5.21E-13  3.25E-13  3.62E-13  4.71E-13  3.65E-13
 res:  4.55E-13  2.25E-13  2.29E-13  3.72E-13  3.12E-13  5.47E-13  2.29E-13  1.71E-13
 res:  1.86E-13  2.48E-13  7.00E-13  1.80E-13  5.24E-13  3.22E-13  9.89E-13  4.41E-12
 res:  4.11E-11  3.89E-12  8.44E-11  3.44E-10  4.45E-11  9.64E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.17E-01  2.84E-02  5.49E-02  5.49E-02  7.52E-02  7.63E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.49E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.90E-01  5.90E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.61E-13  6.71E-13  2.56E-13  5.21E-13  3.25E-13  3.62E-13  4.70E-13  3.66E-13
 res:  4.55E-13  2.26E-13  2.29E-13  3.72E-13  3.12E-13  5.47E-13  2.29E-13  1.71E-13
 res:  1.86E-13  2.48E-13  7.00E-13  1.80E-13  5.23E-13  3.22E-13  9.89E-13  4.71E-13
 res:  3.04E-12  8.85E-13  1.51E-12  3.46E-11  1.54E-12  1.33E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.17E-01  2.84E-02  5.49E-02  5.49E-02  7.52E-02  7.63E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.49E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.90E-01  5.90E-01
 Calling pw_orthon to orthonormalize bands.
 res:  3.61E-13  6.71E-13  2.56E-13  5.21E-13  3.25E-13  3.62E-13  4.70E-13  3.65E-13
 res:  4.55E-13  2.25E-13  2.29E-13  3.72E-13  3.12E-13  5.48E-13  2.29E-13  1.71E-13
 res:  1.86E-13  2.48E-13  7.00E-13  1.80E-13  5.23E-13  3.22E-13  9.89E-13  4.38E-13
 res:  1.19E-13  8.83E-13  7.82E-13  3.18E-13  3.86E-13  1.90E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.19E-01 -3.19E-01 -3.17E-01  2.84E-02  5.49E-02  5.49E-02  7.52E-02  7.63E-02
 ene:  7.63E-02  2.18E-01  2.18E-01  2.19E-01  3.49E-01  3.50E-01  3.50E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.90E-01  5.90E-01
 Calling pw_orthon to orthonormalize bands.
     eigenvalues (hartree) for   30  bands
              after   10 non-SCF iterations with    4 CG line minimizations
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6359E-01 -3.7172E-01
 -3.7016E-01 -3.7016E-01 -3.1862E-01 -3.1862E-01 -3.1735E-01  2.8351E-02
  5.4852E-02  5.4852E-02  7.5179E-02  7.6273E-02  7.6273E-02  2.1782E-01
  2.1782E-01  2.1864E-01  3.4948E-01  3.4959E-01  3.4959E-01  4.8454E-01
  4.8454E-01  4.8552E-01  4.9442E-01  4.9442E-01  5.8968E-01  5.8979E-01
      mean kinetic energy (hartree) for    30   bands
              after   10 non-SCF iterations with    4 CG line minimizations
  1.0666E+00  7.6929E-01  7.6929E-01  7.6929E-01  9.4483E-01  8.2700E-01
  8.3221E-01  8.3221E-01  1.0187E+00  1.0187E+00  1.0238E+00  1.0627E+00
  1.1345E+00  1.1345E+00  1.0200E+00  1.0249E+00  1.0249E+00  1.4767E+00
  1.4767E+00  1.4822E+00  8.9727E-01  8.9743E-01  8.9743E-01  9.8738E-01
  9.8738E-01  9.7553E-01  1.1023E+00  1.1023E+00  1.1182E+00  1.1184E+00
 non-scf iterations; kpt #     8  , k= (  0.46111  0.46111  0.46111  ), band residuals:
 res:  1.63E+00  1.77E+00  1.86E+00  1.43E+00  1.51E+00  9.77E-01  6.27E-01  1.35E+00
 res:  4.83E-01  6.15E-01  6.18E-01  6.26E-01  7.25E-01  7.60E-01  4.29E-01  7.22E-01
 res:  5.74E-01  7.02E-01  5.47E-01  5.12E-01  8.56E-01  4.40E-01  1.19E+00  7.57E-01
 res:  5.91E-01  6.82E-01  1.14E+00  5.25E-01  9.99E-01  4.71E-01
 Performing subspace diagonalization.
 ene: -1.87E+00 -9.43E-01 -8.91E-01 -8.18E-01 -6.44E-01 -3.00E-01 -2.45E-01 -1.99E-01
 ene: -1.78E-01 -1.53E-01 -1.02E-01  7.07E-02  8.74E-02  1.18E-01  1.42E-01  1.66E-01
 ene:  1.87E-01  2.20E-01  2.38E-01  2.65E-01  2.92E-01  3.30E-01  3.68E-01  3.75E-01
 ene:  4.99E-01  5.69E-01  6.14E-01  9.00E-01  1.33E+00  2.56E+00
 Calling pw_orthon to orthonormalize bands.
 res:  1.80E-01  1.20E-01  2.01E-01  1.46E-01  1.01E-01  5.76E-02  3.22E-02  3.55E-02
 res:  5.92E-02  3.45E-02  8.38E-02  1.45E-02  4.21E-02  2.96E-02  4.73E-02  1.43E-01
 res:  1.03E-01  1.25E-01  9.86E-02  9.40E-02  7.29E-02  8.60E-02  9.06E-02  8.36E-02
 res:  7.25E-02  1.01E-01  1.19E-01  1.22E-01  9.77E-02  1.54E-01
 Performing subspace diagonalization.
 ene: -2.09E+00 -1.14E+00 -1.14E+00 -1.12E+00 -9.51E-01 -3.67E-01 -3.64E-01 -3.62E-01
 ene: -3.15E-01 -3.13E-01 -3.05E-01  3.27E-02  5.80E-02  7.44E-02  7.76E-02  8.52E-02
 ene:  9.35E-02  2.22E-01  2.28E-01  2.35E-01  3.56E-01  3.62E-01  3.69E-01  4.93E-01
 ene:  4.95E-01  5.00E-01  5.26E-01  5.74E-01  6.35E-01  6.57E-01
 Calling pw_orthon to orthonormalize bands.
 res:  6.99E-04  3.87E-04  5.82E-04  1.99E-03  8.76E-04  2.29E-04  3.21E-04  6.53E-04
 res:  1.49E-04  3.31E-04  9.83E-04  1.74E-04  1.07E-04  6.79E-04  2.25E-04  4.41E-04
 res:  2.37E-03  2.83E-04  7.75E-04  1.44E-03  2.99E-04  1.03E-03  1.79E-03  3.54E-04
 res:  5.61E-04  8.96E-04  3.78E-03  8.53E-03  6.86E-03  8.08E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.53E-02  7.50E-02  7.64E-02
 ene:  7.66E-02  2.17E-01  2.18E-01  2.19E-01  3.49E-01  3.49E-01  3.50E-01  4.85E-01
 ene:  4.86E-01  4.87E-01  4.96E-01  4.98E-01  5.91E-01  6.08E-01
 Calling pw_orthon to orthonormalize bands.
 res:  2.45E-06  7.87E-07  1.39E-06  5.26E-06  1.50E-06  3.18E-07  2.12E-07  8.26E-07
 res:  1.76E-07  6.78E-07  3.40E-07  5.92E-07  1.37E-07  4.20E-06  4.99E-07  6.09E-07
 res:  3.70E-06  3.10E-06  5.48E-06  4.24E-06  1.82E-06  4.09E-06  1.31E-05  6.22E-06
 res:  6.04E-05  1.22E-04  5.90E-05  7.56E-04  1.56E-04  5.97E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.51E-02  7.49E-02  7.64E-02
 ene:  7.64E-02  2.17E-01  2.17E-01  2.18E-01  3.49E-01  3.49E-01  3.49E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.95E-01  5.89E-01  6.06E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.34E-09  9.39E-10  1.14E-09  7.12E-09  1.73E-09  2.63E-10  1.85E-10  5.61E-10
 res:  4.85E-11  4.30E-10  2.31E-10  1.28E-10  4.45E-11  1.81E-09  1.18E-10  1.32E-10
 res:  1.39E-09  8.53E-09  1.47E-08  6.99E-09  1.21E-08  1.95E-09  4.99E-08  2.17E-07
 res:  3.98E-06  1.05E-06  3.16E-06  1.83E-05  3.99E-06  2.67E-03
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.51E-02  7.49E-02  7.64E-02
 ene:  7.64E-02  2.17E-01  2.17E-01  2.18E-01  3.49E-01  3.49E-01  3.49E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.89E-01  5.99E-01
 Calling pw_orthon to orthonormalize bands.
 res:  9.50E-12  8.93E-13  1.74E-12  7.36E-12  1.99E-12  5.39E-13  5.58E-13  2.59E-13
 res:  2.58E-13  5.27E-13  3.66E-13  2.62E-13  1.35E-13  7.35E-13  3.14E-13  3.79E-13
 res:  5.35E-13  1.68E-11  2.54E-11  1.31E-11  3.90E-11  2.78E-12  3.41E-11  4.21E-09
 res:  6.03E-08  2.47E-08  8.92E-08  5.95E-07  1.26E-07  5.16E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.51E-02  7.49E-02  7.64E-02
 ene:  7.64E-02  2.17E-01  2.17E-01  2.18E-01  3.49E-01  3.49E-01  3.49E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.89E-01  5.91E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.62E-13  8.93E-13  6.33E-13  4.14E-13  3.27E-13  5.40E-13  4.19E-13  3.96E-13
 res:  4.12E-13  3.71E-13  3.67E-13  2.59E-13  2.96E-13  5.30E-13  3.12E-13  3.91E-13
 res:  5.01E-13  3.19E-13  2.43E-13  8.70E-13  2.24E-13  7.09E-13  3.66E-13  9.90E-11
 res:  2.84E-09  1.06E-09  2.38E-09  4.70E-08  2.88E-09  4.04E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.51E-02  7.49E-02  7.64E-02
 ene:  7.64E-02  2.17E-01  2.17E-01  2.18E-01  3.49E-01  3.49E-01  3.49E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.89E-01  5.90E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.62E-13  8.93E-13  6.31E-13  4.16E-13  3.27E-13  5.39E-13  4.19E-13  3.95E-13
 res:  4.12E-13  3.71E-13  3.67E-13  2.59E-13  2.96E-13  5.31E-13  3.12E-13  3.92E-13
 res:  5.01E-13  3.05E-13  2.60E-13  8.66E-13  2.22E-13  5.79E-13  4.94E-13  6.35E-12
 res:  2.84E-11  3.80E-11  2.23E-10  8.84E-10  1.43E-10  1.01E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.51E-02  7.49E-02  7.64E-02
 ene:  7.64E-02  2.17E-01  2.17E-01  2.18E-01  3.49E-01  3.49E-01  3.49E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.89E-01  5.90E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.62E-13  8.93E-13  6.31E-13  4.16E-13  3.27E-13  5.39E-13  4.19E-13  3.95E-13
 res:  4.12E-13  3.71E-13  3.67E-13  2.59E-13  2.96E-13  5.31E-13  3.12E-13  3.92E-13
 res:  5.01E-13  3.05E-13  2.61E-13  8.66E-13  2.22E-13  5.78E-13  4.94E-13  7.92E-13
 res:  2.02E-12  1.73E-12  4.11E-12  9.42E-11  5.12E-12  1.00E-04
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.51E-02  7.49E-02  7.64E-02
 ene:  7.64E-02  2.17E-01  2.17E-01  2.18E-01  3.49E-01  3.49E-01  3.49E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.89E-01  5.89E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.62E-13  8.93E-13  6.31E-13  4.16E-13  3.27E-13  5.39E-13  4.19E-13  3.95E-13
 res:  4.12E-13  3.71E-13  3.67E-13  2.59E-13  2.96E-13  5.32E-13  3.12E-13  3.92E-13
 res:  5.01E-13  3.06E-13  2.61E-13  8.65E-13  2.22E-13  5.77E-13  4.94E-13  1.53E-13
 res:  8.31E-13  3.32E-13  4.66E-13  1.65E-12  3.07E-13  2.47E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.51E-02  7.49E-02  7.64E-02
 ene:  7.64E-02  2.17E-01  2.17E-01  2.18E-01  3.49E-01  3.49E-01  3.49E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.89E-01  5.89E-01
 Calling pw_orthon to orthonormalize bands.
 res:  4.62E-13  8.93E-13  6.31E-13  4.16E-13  3.27E-13  5.39E-13  4.19E-13  3.95E-13
 res:  4.12E-13  3.71E-13  3.67E-13  2.59E-13  2.96E-13  5.32E-13  3.12E-13  3.93E-13
 res:  5.01E-13  3.06E-13  2.61E-13  8.65E-13  2.22E-13  5.77E-13  4.94E-13  1.51E-13
 res:  8.33E-13  3.32E-13  5.74E-13  6.59E-13  1.70E-13  2.65E-05
 Performing subspace diagonalization.
 ene: -2.10E+00 -1.15E+00 -1.15E+00 -1.15E+00 -9.64E-01 -3.72E-01 -3.70E-01 -3.70E-01
 ene: -3.18E-01 -3.18E-01 -3.17E-01  2.88E-02  5.51E-02  5.51E-02  7.49E-02  7.64E-02
 ene:  7.64E-02  2.17E-01  2.17E-01  2.18E-01  3.49E-01  3.49E-01  3.49E-01  4.85E-01
 ene:  4.85E-01  4.86E-01  4.94E-01  4.94E-01  5.89E-01  5.89E-01
 Calling pw_orthon to orthonormalize bands.
     eigenvalues (hartree) for   30  bands
              after   11 non-SCF iterations with    4 CG line minimizations
 -2.1022E+00 -1.1543E+00 -1.1543E+00 -1.1543E+00 -9.6360E-01 -3.7238E-01
 -3.7030E-01 -3.7030E-01 -3.1842E-01 -3.1842E-01 -3.1673E-01  2.8785E-02
  5.5089E-02  5.5089E-02  7.4925E-02  7.6400E-02  7.6400E-02  2.1734E-01
  2.1734E-01  2.1843E-01  3.4918E-01  3.4932E-01  3.4932E-01  4.8476E-01
  4.8476E-01  4.8622E-01  4.9439E-01  4.9439E-01  5.8919E-01  5.8926E-01
      mean kinetic energy (hartree) for    30   bands
              after   11 non-SCF iterations with    4 CG line minimizations
  1.0666E+00  7.6931E-01  7.6932E-01  7.6932E-01  9.4476E-01  8.2499E-01
  8.3197E-01  8.3197E-01  1.0196E+00  1.0196E+00  1.0264E+00  1.0636E+00
  1.1346E+00  1.1346E+00  1.0181E+00  1.0246E+00  1.0246E+00  1.4739E+00
  1.4739E+00  1.4813E+00  8.9690E-01  8.9713E-01  8.9713E-01  9.9431E-01
  9.9431E-01  9.7684E-01  1.0975E+00  1.0975E+00  1.1186E+00  1.1188E+00
 
 -------------------------------------------------------------------------------------------------
 Ekinetic   = :     0.000000E+00 Ha ,    0.000000E+00 eV
 Evext_l    = :     0.000000E+00 Ha ,    0.000000E+00 eV
 Evext_nl   = :     0.000000E+00 Ha ,    0.000000E+00 eV
 Epsp_core  = :     6.339724E+00 Ha ,    1.725127E+02 eV
 Ehartree   = :     0.000000E+00 Ha ,    0.000000E+00 eV
 Exc_ks     = :    -1.938586E+01 Ha ,   -5.275160E+02 eV
 Enn        = :    -1.142203E+02 Ha ,   -3.108093E+03 eV
 -------------------------------------------------------------------------------------------------
 Etot       = :    -1.272664E+02 Ha ,   -3.463096E+03 eV
 -------------------------------------------------------------------------------------------------
 
 fftdatar_write: About to write data to: tdmft_5o_DS3_DEN with iomode: IO_MODE_FORTRAN
 IO operation completed. cpu:  0.00 [s] , wall:  0.00 [s] <<< TIME
- Creating HDf5 file with MPI-IO support: tdmft_5o_DS3_GSR.nc
 
 ***** Print of fatbands activated ****** 
  Number of atom: natsph =     5
  atoms  are             =     1    2    3    4    5
  (fatbands are in eV and are given for each value of L)
 
  Fermi energy is  0.79650E+01 eV =  0.29271E+00 Ha
opened file : tdmft_5o_DS3_FATBANDS_at0001_V_is1_l0000 unit1024
opened file : tdmft_5o_DS3_FATBANDS_at0001_V_is1_l0001 unit1023
opened file : tdmft_5o_DS3_FATBANDS_at0001_V_is1_l0002 unit1022
opened file : tdmft_5o_DS3_FATBANDS_at0001_V_is1_l0003 unit1021
opened file : tdmft_5o_DS3_FATBANDS_at0002_Sr_is1_l0000 unit1020
opened file : tdmft_5o_DS3_FATBANDS_at0002_Sr_is1_l0001 unit1019
opened file : tdmft_5o_DS3_FATBANDS_at0002_Sr_is1_l0002 unit1018
opened file : tdmft_5o_DS3_FATBANDS_at0002_Sr_is1_l0003 unit1017
opened file : tdmft_5o_DS3_FATBANDS_at0003_O_is1_l0000 unit1016
opened file : tdmft_5o_DS3_FATBANDS_at0003_O_is1_l0001 unit1015
opened file : tdmft_5o_DS3_FATBANDS_at0003_O_is1_l0002 unit1014
opened file : tdmft_5o_DS3_FATBANDS_at0003_O_is1_l0003 unit1013
opened file : tdmft_5o_DS3_FATBANDS_at0004_O_is1_l0000 unit1012
opened file : tdmft_5o_DS3_FATBANDS_at0004_O_is1_l0001 unit1011
opened file : tdmft_5o_DS3_FATBANDS_at0004_O_is1_l0002 unit1010
opened file : tdmft_5o_DS3_FATBANDS_at0004_O_is1_l0003 unit1009
opened file : tdmft_5o_DS3_FATBANDS_at0005_O_is1_l0000 unit1008
opened file : tdmft_5o_DS3_FATBANDS_at0005_O_is1_l0001 unit1007
opened file : tdmft_5o_DS3_FATBANDS_at0005_O_is1_l0002 unit1006
opened file : tdmft_5o_DS3_FATBANDS_at0005_O_is1_l0003 unit1005
 prtfatbands: cpu_time:     0.21[s], walltime:     0.22 [s]
- Creating HDf5 file with MPI-IO support: tdmft_5o_DS3_FATBANDS.nc
 fatbands_ncwrite: cpu_time:     0.04[s], walltime:     0.09 [s]
 Integrated electronic density in atomic spheres:
 ------------------------------------------------
 Atom  Sphere_radius  Integrated_density
    1        2.20000         11.31183667
    2        2.20670          7.30508372
    3        1.41465          4.56692005
    4        1.41465          4.56692005
    5        1.41465          4.56692005
 
 PAW TEST:
 ==== Compensation charge inside spheres ============
 Compensation charge over spherical meshes =      6.126444380230417
 
 ==== Results concerning PAW augmentation regions ====
 
 Total pseudopotential strength Dij (hartree):
 Atom #  1
  -0.52874   0.07211   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.07211   0.02109   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -1.07638   0.00000   0.00000   0.26207   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.26207   0.00000   0.00000   0.16959   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07814   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000  -0.07801 ...
   ...  only 12  components have been written...
 Atom #  5
   0.59370  -1.74040   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
  -1.74040   5.16557   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000  -0.29593   0.00000   0.00000   0.84626   0.00000   0.00000
   0.00000   0.00000   0.00000  -0.29729   0.00000   0.00000   0.85313   0.00000
   0.00000   0.00000   0.00000   0.00000  -0.29593   0.00000   0.00000   0.84626
   0.00000   0.00000   0.84626   0.00000   0.00000   0.26118   0.00000   0.00000
   0.00000   0.00000   0.00000   0.85313   0.00000   0.00000   0.22787   0.00000
   0.00000   0.00000   0.00000   0.00000   0.84626   0.00000   0.00000   0.26118
 
 
 Augmentation waves occupancies Rhoij:
 Atom #  1
   1.99201  -0.06299   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
  -0.06299   1.05979   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   1.99489   0.00000   0.00000  -0.03527   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   1.99489   0.00000   0.00000  -0.03527   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   1.99489   0.00000   0.00000  -0.03527   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000  -0.03527   0.00000   0.00000   0.18286   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000  -0.03527   0.00000   0.00000   0.18286   0.00000   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000  -0.03527   0.00000   0.00000   0.18286   0.00000   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.71080   0.00000   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.71080   0.00000   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.80965   0.00000 ...
   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000   0.71080 ...
   ...  only 12  components have been written...
 Atom #  5
   1.98202   0.02838   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.02838   0.00086   0.00000   0.00000   0.00000   0.00000   0.00000   0.00000
   0.00000   0.00000   1.73572   0.00000   0.00000   0.02849   0.00000   0.00000
   0.00000   0.00000   0.00000   1.77207   0.00000   0.00000   0.03965   0.00000
   0.00000   0.00000   0.00000   0.00000   1.73572   0.00000   0.00000   0.02849
   0.00000   0.00000   0.02849   0.00000   0.00000   0.00059   0.00000   0.00000
   0.00000   0.00000   0.00000   0.03965   0.00000   0.00000   0.00108   0.00000
   0.00000   0.00000   0.00000   0.00000   0.02849   0.00000   0.00000   0.00059
 
 "PAW+U" part of augmentation waves occupancies Rhoij:
 Atom #  1 - L=2 ONLY
   0.71080   0.00000   0.00000   0.00000   0.00000   0.05967   0.00000   0.00000   0.00000   0.00000
   0.00000   0.71080   0.00000   0.00000   0.00000   0.00000   0.05967   0.00000   0.00000   0.00000
   0.00000   0.00000   0.80965   0.00000   0.00000   0.00000   0.00000   0.16195   0.00000   0.00000
   0.00000   0.00000   0.00000   0.71080   0.00000   0.00000   0.00000   0.00000   0.05967   0.00000
   0.00000   0.00000   0.00000   0.00000   0.80965   0.00000   0.00000   0.00000   0.00000   0.16195
   0.05967   0.00000   0.00000   0.00000   0.00000   0.01031   0.00000   0.00000   0.00000   0.00000
   0.00000   0.05967   0.00000   0.00000   0.00000   0.00000   0.01031   0.00000   0.00000   0.00000
   0.00000   0.00000   0.16195   0.00000   0.00000   0.00000   0.00000   0.03723   0.00000   0.00000
   0.00000   0.00000   0.00000   0.05967   0.00000   0.00000   0.00000   0.00000   0.01031   0.00000
   0.00000   0.00000   0.00000   0.00000   0.16195   0.00000   0.00000   0.00000   0.00000   0.03723
 
 ---------- DFT+U DATA --------------------------------------------------- 
 
 ====== For Atom     1, occupations for correlated orbitals. lpawu =   2
 
  (This is PAW atomic orbital occupations)
  (For Wannier orbital occupations, refer to DFT+DMFT occupations above)
 
 == Occupation matrix for correlated orbitals:
 
 Up component only...
     0.22113    0.00000    0.00000    0.00000    0.00000
     0.00000    0.22113    0.00000    0.00000    0.00000
     0.00000    0.00000    0.20550    0.00000    0.00000
     0.00000    0.00000    0.00000    0.22113    0.00000
     0.00000    0.00000    0.00000    0.00000    0.20550
 
 
 
 
 ======================================================================================
 
 == Start computation of Projected Local Orbitals Wannier functions ==  30
 
 == Lower and upper values of the selected bands   21   23
 == Number of atoms                                      1
 == Atoms selected                                1
 == Nb of angular momenta used for each atom      1
 == Value of the angular momenta for atom 1 is :  1
 == Value of the projectors      for atom 1 is : -2
 
--- !COMMENT
src_file: m_plowannier.F90
src_line: 822
message: |
    
    Normalization of plowannier k-point by k-point
...
 
 
--- !COMMENT
src_file: m_plowannier.F90
src_line: 829
message: |
    
    Using only t2g bands in plowannier, this is under test and may lead to bugs
...
 
 
 number of k-points used is nkpt =          261
  warning: parallelised version                 261
  weights k-points used is wtk = wtk
 
  == Prepare data for projected local orbital wannier function calculation
 
---------------------------------------------------------------
 
  Print useful data (as a check)
  - Overlap of KS wfc with atomic orbital inside sphere
  - Eigenvalues
  - Weights of k-points
  - Number of spins 
  - Number of states
 ikpt =            1
 ikpt =            2
 ikpt =            3
 ikpt =            4
 ikpt =            5
 ikpt =            6
 ikpt =            7
 ikpt =            8
 ikpt =            9
 ikpt =           10
 ikpt =           11
 ikpt =           12
 ikpt =           13
 ikpt =           14
 ikpt =           15
 ikpt =           16
 ikpt =           17
 ikpt =           18
 ikpt =           19
 ikpt =           20
 ikpt =           21
 ikpt =           22
 ikpt =           23
 ikpt =           24
 ikpt =           25
 ikpt =           26
 ikpt =           27
 ikpt =           28
 ikpt =           29
 ikpt =           30
 ikpt =           31
 ikpt =           32
 ikpt =           33
 ikpt =           34
 ikpt =           35
 ikpt =           36
 ikpt =           37
 ikpt =           38
 ikpt =           39
 ikpt =           40
 ikpt =           41
 ikpt =           42
 ikpt =           43
 ikpt =           44
 ikpt =           45
 ikpt =           46
 ikpt =           47
 ikpt =           48
 ikpt =           49
 ikpt =           50
 ikpt =           51
 ikpt =           52
 ikpt =           53
 ikpt =           54
 ikpt =           55
 ikpt =           56
 ikpt =           57
 ikpt =           58
 ikpt =           59
 ikpt =           60
 ikpt =           61
 ikpt =           62
 ikpt =           63
 ikpt =           64
 ikpt =           65
 ikpt =           66
 ikpt =           67
 ikpt =           68
 ikpt =           69
 ikpt =           70
 ikpt =           71
 ikpt =           72
 ikpt =           73
 ikpt =           74
 ikpt =           75
 ikpt =           76
 ikpt =           77
 ikpt =           78
 ikpt =           79
 ikpt =           80
 ikpt =           81
 ikpt =           82
 ikpt =           83
 ikpt =           84
 ikpt =           85
 ikpt =           86
 ikpt =           87
 ikpt =           88
 ikpt =           89
 ikpt =           90
 ikpt =           91
 ikpt =           92
 ikpt =           93
 ikpt =           94
 ikpt =           95
 ikpt =           96
 ikpt =           97
 ikpt =           98
 ikpt =           99
 ikpt =          100
 ikpt =          101
 ikpt =          102
 ikpt =          103
 ikpt =          104
 ikpt =          105
 ikpt =          106
 ikpt =          107
 ikpt =          108
 ikpt =          109
 ikpt =          110
 ikpt =          111
 ikpt =          112
 ikpt =          113
 ikpt =          114
 ikpt =          115
 ikpt =          116
 ikpt =          117
 ikpt =          118
 ikpt =          119
 ikpt =          120
 ikpt =          121
 ikpt =          122
 ikpt =          123
 ikpt =          124
 ikpt =          125
 ikpt =          126
 ikpt =          127
 ikpt =          128
 ikpt =          129
 ikpt =          130
 ikpt =          131
 ikpt =          132
 ikpt =          133
 ikpt =          134
 ikpt =          135
 ikpt =          136
 ikpt =          137
 ikpt =          138
 ikpt =          139
 ikpt =          140
 ikpt =          141
 ikpt =          142
 ikpt =          143
 ikpt =          144
 ikpt =          145
 ikpt =          146
 ikpt =          147
 ikpt =          148
 ikpt =          149
 ikpt =          150
 ikpt =          151
 ikpt =          152
 ikpt =          153
 ikpt =          154
 ikpt =          155
 ikpt =          156
 ikpt =          157
 ikpt =          158
 ikpt =          159
 ikpt =          160
 ikpt =          161
 ikpt =          162
 ikpt =          163
 ikpt =          164
 ikpt =          165
 ikpt =          166
 ikpt =          167
 ikpt =          168
 ikpt =          169
 ikpt =          170
 ikpt =          171
 ikpt =          172
 ikpt =          173
 ikpt =          174
 ikpt =          175
 ikpt =          176
 ikpt =          177
 ikpt =          178
 ikpt =          179
 ikpt =          180
 ikpt =          181
 ikpt =          182
 ikpt =          183
 ikpt =          184
 ikpt =          185
 ikpt =          186
 ikpt =          187
 ikpt =          188
 ikpt =          189
 ikpt =          190
 ikpt =          191
 ikpt =          192
 ikpt =          193
 ikpt =          194
 ikpt =          195
 ikpt =          196
 ikpt =          197
 ikpt =          198
 ikpt =          199
 ikpt =          200
 ikpt =          201
 ikpt =          202
 ikpt =          203
 ikpt =          204
 ikpt =          205
 ikpt =          206
 ikpt =          207
 ikpt =          208
 ikpt =          209
 ikpt =          210
 ikpt =          211
 ikpt =          212
 ikpt =          213
 ikpt =          214
 ikpt =          215
 ikpt =          216
 ikpt =          217
 ikpt =          218
 ikpt =          219
 ikpt =          220
 ikpt =          221
 ikpt =          222
 ikpt =          223
 ikpt =          224
 ikpt =          225
 ikpt =          226
 ikpt =          227
 ikpt =          228
 ikpt =          229
 ikpt =          230
 ikpt =          231
 ikpt =          232
 ikpt =          233
 ikpt =          234
 ikpt =          235
 ikpt =          236
 ikpt =          237
 ikpt =          238
 ikpt =          239
 ikpt =          240
 ikpt =          241
 ikpt =          242
 ikpt =          243
 ikpt =          244
 ikpt =          245
 ikpt =          246
 ikpt =          247
 ikpt =          248
 ikpt =          249
 ikpt =          250
 ikpt =          251
 ikpt =          252
 ikpt =          253
 ikpt =          254
 ikpt =          255
 ikpt =          256
 ikpt =          257
 ikpt =          258
 ikpt =          259
 ikpt =          260
 ikpt =          261
 
 == For each k-point of the path, gives the eigenvalues (in eV) of the Hamiltonian in the Wannier basis
 
   (The band structure is shifted by fermie =       7.9649 eV )
 
 Wannier band structure for atom  1
 1       1.568       1.568       1.568
 2       1.567       1.567       1.567
 3       1.565       1.566       1.566
 4       1.562       1.563       1.563
 5       1.558       1.559       1.559
 6       1.552       1.554       1.554
 7       1.545       1.548       1.548
 8       1.537       1.540       1.540
 9       1.527       1.532       1.532
 10       1.517       1.523       1.523
 11       1.505       1.512       1.512
 12       1.492       1.501       1.501
 13       1.477       1.488       1.488
 14       1.462       1.474       1.474
 15       1.446       1.460       1.460
 16       1.428       1.444       1.444
 17       1.410       1.427       1.427
 18       1.390       1.409       1.409
 19       1.369       1.391       1.391
 20       1.348       1.371       1.371
 21       1.325       1.350       1.350
 22       1.301       1.329       1.329
 23       1.277       1.306       1.306
 24       1.252       1.283       1.283
 25       1.225       1.259       1.259
 26       1.198       1.234       1.234
 27       1.170       1.208       1.208
 28       1.141       1.182       1.182
 29       1.112       1.154       1.154
 30       1.082       1.126       1.126
 31       1.050       1.097       1.097
 32       1.019       1.068       1.068
 33       0.986       1.038       1.038
 34       0.953       1.007       1.007
 35       0.919       0.976       0.976
 36       0.884       0.944       0.944
 37       0.849       0.911       0.911
 38       0.813       0.878       0.878
 39       0.777       0.844       0.844
 40       0.740       0.810       0.810
 41       0.703       0.775       0.775
 42       0.665       0.740       0.740
 43       0.626       0.705       0.705
 44       0.587       0.669       0.669
 45       0.548       0.632       0.632
 46       0.509       0.595       0.595
 47       0.469       0.558       0.558
 48       0.428       0.521       0.521
 49       0.388       0.483       0.483
 50       0.347       0.445       0.445
 51       0.306       0.407       0.407
 52       0.265       0.368       0.368
 53       0.224       0.329       0.329
 54       0.182       0.290       0.290
 55       0.141       0.250       0.250
 56       0.099       0.211       0.211
 57       0.058       0.171       0.171
 58       0.016       0.131       0.131
 59      -0.025       0.090       0.090
 60      -0.066       0.050       0.050
 61      -0.107       0.009       0.009
 62      -0.148      -0.032      -0.032
 63      -0.188      -0.073      -0.073
 64      -0.228      -0.114      -0.114
 65      -0.268      -0.155      -0.155
 66      -0.308      -0.197      -0.197
 67      -0.347      -0.238      -0.238
 68      -0.386      -0.280      -0.280
 69      -0.424      -0.321      -0.321
 70      -0.461      -0.363      -0.363
 71      -0.498      -0.404      -0.404
 72      -0.535      -0.445      -0.445
 73      -0.571      -0.486      -0.486
 74      -0.606      -0.527      -0.527
 75      -0.640      -0.567      -0.567
 76      -0.674      -0.607      -0.607
 77      -0.706      -0.645      -0.645
 78      -0.738      -0.683      -0.683
 79      -0.768      -0.720      -0.720
 80      -0.797      -0.756      -0.756
 81      -0.825      -0.790      -0.790
 82      -0.851      -0.822      -0.822
 83      -0.875      -0.852      -0.852
 84      -0.898      -0.879      -0.879
 85      -0.918      -0.904      -0.904
 86      -0.935      -0.926      -0.926
 87      -0.950      -0.944      -0.944
 88      -0.962      -0.959      -0.959
 89      -0.971      -0.969      -0.969
 90      -0.976      -0.976      -0.976
 91      -0.978      -0.978      -0.978
 92      -0.978      -0.975      -0.975
 93      -0.977      -0.965      -0.965
 94      -0.977      -0.949      -0.949
 95      -0.976      -0.927      -0.927
 96      -0.975      -0.900      -0.900
 97      -0.973      -0.868      -0.868
 98      -0.972      -0.831      -0.831
 99      -0.970      -0.791      -0.791
 100      -0.968      -0.746      -0.746
 101      -0.966      -0.699      -0.699
 102      -0.964      -0.649      -0.649
 103      -0.961      -0.596      -0.596
 104      -0.958      -0.541      -0.541
 105      -0.956      -0.485      -0.485
 106      -0.952      -0.428      -0.428
 107      -0.949      -0.370      -0.370
 108      -0.946      -0.310      -0.310
 109      -0.942      -0.251      -0.251
 110      -0.939      -0.191      -0.191
 111      -0.935      -0.130      -0.130
 112      -0.931      -0.070      -0.070
 113      -0.928      -0.011      -0.011
 114      -0.924       0.048       0.048
 115      -0.920       0.107       0.107
 116      -0.916       0.165       0.165
 117      -0.912       0.222       0.222
 118      -0.908       0.278       0.278
 119      -0.904       0.332       0.332
 120      -0.900       0.385       0.385
 121      -0.896       0.437       0.437
 122      -0.892       0.487       0.487
 123      -0.889       0.536       0.536
 124      -0.885       0.582       0.582
 125      -0.882       0.626       0.626
 126      -0.878       0.669       0.669
 127      -0.875       0.709       0.709
 128      -0.872       0.747       0.747
 129      -0.869       0.782       0.782
 130      -0.867       0.815       0.815
 131      -0.864       0.846       0.846
 132      -0.862       0.873       0.873
 133      -0.860       0.898       0.898
 134      -0.858       0.921       0.921
 135      -0.856       0.940       0.940
 136      -0.855       0.957       0.957
 137      -0.854       0.970       0.970
 138      -0.853       0.981       0.981
 139      -0.852       0.988       0.988
 140      -0.852       0.993       0.993
 141      -0.852       0.994       0.994
 142      -0.849       0.994       0.994
 143      -0.841       0.994       0.994
 144      -0.828       0.994       0.994
 145      -0.809       0.993       0.994
 146      -0.786       0.993       0.994
 147      -0.758       0.992       0.993
 148      -0.726       0.991       0.993
 149      -0.691       0.991       0.993
 150      -0.652       0.990       0.992
 151      -0.610       0.990       0.992
 152      -0.565       0.990       0.991
 153      -0.518       0.990       0.990
 154      -0.469       0.990       0.990
 155      -0.418       0.989       0.991
 156      -0.366       0.988       0.993
 157      -0.312       0.988       0.995
 158      -0.258       0.987       0.998
 159      -0.203       0.986       1.001
 160      -0.148       0.986       1.005
 161      -0.092       0.985       1.011
 162      -0.036       0.984       1.017
 163       0.019       0.984       1.023
 164       0.075       0.983       1.031
 165       0.130       0.982       1.040
 166       0.184       0.982       1.049
 167       0.237       0.981       1.060
 168       0.290       0.981       1.071
 169       0.341       0.980       1.083
 170       0.392       0.980       1.096
 171       0.441       0.979       1.110
 172       0.488       0.979       1.124
 173       0.534       0.978       1.138
 174       0.579       0.978       1.153
 175       0.621       0.977       1.168
 176       0.662       0.977       1.183
 177       0.700       0.977       1.198
 178       0.736       0.976       1.213
 179       0.770       0.976       1.228
 180       0.802       0.976       1.242
 181       0.831       0.976       1.255
 182       0.858       0.975       1.268
 183       0.882       0.975       1.280
 184       0.903       0.975       1.290
 185       0.922       0.975       1.300
 186       0.938       0.975       1.308
 187       0.951       0.975       1.315
 188       0.961       0.975       1.320
 189       0.969       0.975       1.324
 190       0.973       0.975       1.326
 191       0.974       0.974       1.327
 192       0.974       0.974       1.326
 193       0.971       0.972       1.324
 194       0.967       0.969       1.320
 195       0.961       0.965       1.314
 196       0.953       0.959       1.307
 197       0.944       0.952       1.298
 198       0.932       0.944       1.288
 199       0.920       0.935       1.276
 200       0.905       0.924       1.262
 201       0.889       0.912       1.247
 202       0.872       0.899       1.231
 203       0.853       0.885       1.213
 204       0.832       0.869       1.193
 205       0.810       0.853       1.172
 206       0.787       0.835       1.150
 207       0.762       0.816       1.126
 208       0.736       0.796       1.101
 209       0.709       0.774       1.075
 210       0.680       0.751       1.047
 211       0.651       0.728       1.019
 212       0.620       0.703       0.989
 213       0.588       0.677       0.958
 214       0.555       0.649       0.925
 215       0.521       0.621       0.892
 216       0.486       0.592       0.858
 217       0.450       0.561       0.823
 218       0.414       0.530       0.787
 219       0.376       0.497       0.750
 220       0.338       0.464       0.712
 221       0.300       0.429       0.673
 222       0.261       0.394       0.634
 223       0.221       0.357       0.593
 224       0.181       0.320       0.552
 225       0.140       0.282       0.511
 226       0.099       0.243       0.469
 227       0.058       0.203       0.426
 228       0.017       0.162       0.382
 229      -0.025       0.121       0.338
 230      -0.066       0.079       0.294
 231      -0.108       0.037       0.248
 232      -0.150      -0.006       0.203
 233      -0.191      -0.050       0.157
 234      -0.233      -0.093       0.110
 235      -0.274      -0.138       0.063
 236      -0.315      -0.182       0.015
 237      -0.355      -0.227      -0.033
 238      -0.395      -0.271      -0.081
 239      -0.435      -0.316      -0.129
 240      -0.474      -0.361      -0.178
 241      -0.512      -0.405      -0.228
 242      -0.550      -0.449      -0.277
 243      -0.587      -0.492      -0.327
 244      -0.623      -0.535      -0.376
 245      -0.658      -0.577      -0.426
 246      -0.692      -0.618      -0.475
 247      -0.724      -0.658      -0.524
 248      -0.756      -0.696      -0.572
 249      -0.786      -0.733      -0.620
 250      -0.814      -0.769      -0.666
 251      -0.840      -0.802      -0.711
 252      -0.865      -0.833      -0.755
 253      -0.887      -0.862      -0.796
 254      -0.908      -0.888      -0.834
 255      -0.926      -0.911      -0.869
 256      -0.941      -0.931      -0.900
 257      -0.954      -0.947      -0.927
 258      -0.964      -0.961      -0.949
 259      -0.972      -0.970      -0.965
 260      -0.976      -0.976      -0.974
 261      -0.978      -0.978      -0.978
 
 Print the psichi coefficients in data.plowann
 
======================================================================
 Calculating and writing out Kohn-Sham electronic Structure file
 Using conjugate gradient wavefunctions and energies (kssform=3)
 
--- !WARNING
src_file: m_io_kss.F90
src_line: 1380
message: |
    Variable mpspso should be 1 !
     Program does not stop but _KSS file will not be created...
...
 
 outkss: Not allowed options found !
 Program does not stop but _KSS file will not be created...
 
--- !WARNING
src_file: m_outscfcv.F90
src_line: 1229
message: |
    outkss returned a non zero status error, check log
...
 
================================================================================
 
 ----iterations are completed or convergence reached----
 
 Mean square residual over all n,k,spin=   51.746E-14; max=  99.985E-14
   0.5000  0.5000  0.5000    1  2.63958E-06 kpt; spin; max resid(k); each band:
   6.64E-13  8.35E-13  2.13E-13  7.05E-13  7.85E-13  6.11E-13  2.32E-13  2.63E-13
   5.35E-13  4.27E-13  3.99E-13  6.07E-13  7.90E-13  8.14E-13  8.99E-13  3.92E-13
   6.84E-13  3.38E-13  5.84E-13  2.17E-13  3.45E-13  2.31E-13  7.63E-13  4.98E-13
   1.23E-13  6.86E-13  4.50E-13  8.45E-13  2.90E-13  2.64E-06
   0.4944  0.4944  0.4944    1  3.52239E-06 kpt; spin; max resid(k); each band:
   3.29E-13  4.38E-13  1.56E-13  4.37E-13  4.57E-13  3.66E-13  9.42E-13  7.40E-13
   3.72E-13  4.83E-13  3.69E-13  2.64E-13  5.70E-13  3.49E-13  5.88E-13  9.09E-13
   2.21E-13  5.06E-13  5.27E-13  7.96E-13  4.79E-13  4.56E-13  2.27E-13  2.88E-13
   7.49E-13  2.71E-13  6.20E-13  3.68E-13  3.98E-13  3.52E-06
   0.4889  0.4889  0.4889    1  2.35094E-05 kpt; spin; max resid(k); each band:
   4.72E-13  4.03E-13  1.90E-13  4.11E-13  5.37E-13  4.21E-13  2.46E-13  3.80E-13
   3.22E-13  6.40E-13  6.25E-13  8.87E-13  4.64E-13  6.41E-13  5.15E-13  6.03E-13
   1.99E-13  4.61E-13  4.17E-13  6.87E-13  7.81E-13  2.68E-13  8.77E-13  3.58E-13
   7.84E-13  4.41E-13  2.59E-13  8.63E-13  4.90E-13  2.35E-05
   0.4833  0.4833  0.4833    1  1.26900E-05 kpt; spin; max resid(k); each band:
   5.71E-13  4.18E-13  1.99E-13  2.96E-13  5.75E-13  4.61E-13  1.63E-13  4.30E-13
   3.38E-13  7.74E-13  5.99E-13  7.77E-13  3.27E-13  6.81E-13  5.43E-13  3.16E-13
   1.54E-13  2.12E-13  5.17E-13  4.01E-13  9.53E-13  5.26E-13  3.15E-13  5.87E-13
   5.66E-13  5.46E-13  3.72E-13  7.55E-13  3.51E-13  1.27E-05
   0.4778  0.4778  0.4778    1  2.63922E-06 kpt; spin; max resid(k); each band:
   5.46E-13  9.06E-13  7.93E-13  6.55E-13  5.74E-13  4.62E-13  6.02E-13  8.39E-13
   3.22E-13  5.98E-13  6.01E-13  2.99E-13  4.54E-13  4.75E-13  2.88E-13  4.78E-13
   8.16E-13  7.87E-13  2.10E-13  8.58E-13  4.40E-13  9.43E-13  2.82E-13  4.28E-13
   6.97E-13  2.14E-13  6.13E-13  8.55E-13  1.83E-13  2.64E-06
   0.4722  0.4722  0.4722    1  7.81062E-05 kpt; spin; max resid(k); each band:
   3.90E-13  2.75E-13  3.83E-13  6.99E-13  3.92E-13  8.57E-13  4.67E-13  4.88E-13
   3.00E-13  3.32E-13  3.11E-13  5.43E-13  4.62E-13  3.48E-13  2.69E-13  5.60E-13
   4.21E-13  2.71E-13  5.56E-13  6.42E-13  9.19E-13  4.12E-13  8.16E-13  6.44E-13
   6.52E-13  6.15E-13  5.46E-13  7.54E-13  4.26E-13  7.81E-05
   0.4667  0.4667  0.4667    1  1.89929E-05 kpt; spin; max resid(k); each band:
   3.61E-13  6.71E-13  2.56E-13  5.21E-13  3.25E-13  3.62E-13  4.70E-13  3.65E-13
   4.55E-13  2.25E-13  2.29E-13  3.72E-13  3.12E-13  5.48E-13  2.29E-13  1.71E-13
   1.86E-13  2.48E-13  7.00E-13  1.80E-13  5.23E-13  3.22E-13  9.89E-13  4.38E-13
   1.19E-13  8.83E-13  7.82E-13  3.18E-13  3.86E-13  1.90E-05
   0.4611  0.4611  0.4611    1  2.65309E-05 kpt; spin; max resid(k); each band:
   4.62E-13  8.93E-13  6.31E-13  4.16E-13  3.27E-13  5.39E-13  4.19E-13  3.95E-13
   4.12E-13  3.71E-13  3.67E-13  2.59E-13  2.96E-13  5.32E-13  3.12E-13  3.93E-13
   5.01E-13  3.06E-13  2.61E-13  8.65E-13  2.22E-13  5.77E-13  4.94E-13  1.51E-13
   8.33E-13  3.32E-13  5.74E-13  6.59E-13  1.70E-13  2.65E-05
   0.4556  0.4556  0.4556    1  3.07666E-05 kpt; spin; max resid(k); each band:
   4.89E-13  9.92E-13  7.00E-13  4.64E-13  3.31E-13  5.77E-13  3.96E-13  4.02E-13
   4.23E-13  4.58E-13  3.83E-13  3.09E-13  3.39E-13  6.29E-13  2.76E-13  3.90E-13
   4.93E-13  2.98E-13  2.75E-13  2.06E-13  2.10E-13  5.66E-13  4.30E-13  3.59E-13
   7.33E-13  4.58E-13  8.65E-13  2.90E-13  1.86E-13  3.08E-05
   0.4500  0.4500  0.4500    1  3.04342E-05 kpt; spin; max resid(k); each band:
   5.08E-13  1.89E-13  7.33E-13  5.09E-13  3.18E-13  5.80E-13  3.99E-13  4.85E-13
   4.43E-13  5.58E-13  3.71E-13  3.94E-13  3.66E-13  6.92E-13  2.49E-13  3.64E-13
   4.47E-13  3.30E-13  3.26E-13  9.09E-13  1.61E-13  6.04E-13  4.07E-13  5.24E-13
   4.98E-13  5.79E-13  8.55E-13  4.28E-13  2.15E-13  3.04E-05
   0.4444  0.4444  0.4444    1  6.83648E-06 kpt; spin; max resid(k); each band:
   4.98E-13  9.35E-13  7.68E-13  5.42E-13  7.43E-13  4.97E-13  6.28E-13  2.93E-13
   6.30E-13  4.92E-13  6.19E-13  2.93E-13  9.51E-13  7.87E-13  4.34E-13  4.38E-13
   5.14E-13  7.73E-13  8.28E-13  6.25E-13  6.51E-13  7.57E-13  9.06E-13  8.86E-13
   5.89E-13  4.43E-13  2.34E-13  7.07E-13  7.84E-12  6.84E-06
   0.4389  0.4389  0.4389    1  3.63140E-07 kpt; spin; max resid(k); each band:
   2.76E-13  1.93E-13  5.19E-13  4.25E-13  3.99E-13  9.38E-13  8.48E-13  5.50E-13
   5.67E-13  4.64E-13  8.14E-13  8.54E-13  9.42E-13  7.34E-13  5.68E-13  9.27E-13
   7.48E-13  3.50E-13  5.48E-13  5.05E-13  6.38E-13  9.43E-13  6.35E-13  2.71E-13
   4.83E-13  9.80E-13  4.89E-13  8.47E-13  9.85E-13  3.63E-07
   0.4333  0.4333  0.4333    1  5.32998E-07 kpt; spin; max resid(k); each band:
   2.77E-13  2.52E-13  8.90E-13  6.70E-13  4.60E-13  7.40E-13  3.87E-13  4.26E-13
   5.01E-13  3.83E-13  4.76E-13  2.94E-13  3.06E-13  8.59E-14  4.86E-13  2.39E-13
   3.11E-13  5.94E-13  7.19E-13  4.40E-13  5.46E-13  2.87E-13  1.37E-13  7.28E-13
   3.44E-13  9.73E-13  1.49E-13  6.17E-13  3.57E-13  5.33E-07
   0.4278  0.4278  0.4278    1  1.90081E-05 kpt; spin; max resid(k); each band:
   4.35E-13  3.10E-13  3.43E-13  3.11E-13  2.12E-13  1.46E-13  3.66E-13  2.40E-13
   1.89E-13  6.63E-13  3.77E-13  2.86E-13  4.38E-13  9.12E-13  4.78E-13  6.20E-13
   8.71E-13  3.87E-13  9.31E-13  5.65E-13  3.32E-13  3.73E-13  4.56E-13  8.07E-13
   7.36E-13  4.18E-13  1.95E-13  4.73E-13  7.59E-13  1.90E-05
   0.4222  0.4222  0.4222    1  1.45386E-05 kpt; spin; max resid(k); each band:
   4.50E-13  3.35E-13  3.22E-13  3.54E-13  2.14E-13  1.59E-13  3.65E-13  3.50E-13
   1.86E-13  6.81E-13  3.34E-13  2.97E-13  5.88E-13  4.55E-13  5.20E-13  5.89E-13
   6.88E-13  5.72E-13  8.80E-13  9.77E-13  2.97E-13  3.88E-13  4.35E-13  8.45E-13
   6.91E-13  9.65E-13  1.08E-13  5.04E-13  9.14E-13  1.45E-05
   0.4167  0.4167  0.4167    1  9.49612E-06 kpt; spin; max resid(k); each band:
   4.77E-13  3.03E-13  2.85E-13  4.23E-13  9.99E-13  1.42E-13  3.56E-13  3.86E-13
   2.09E-13  6.36E-13  3.22E-13  2.78E-13  6.77E-13  3.82E-13  5.42E-13  6.10E-13
   7.67E-13  5.82E-13  7.85E-13  9.49E-13  2.85E-13  4.26E-13  5.36E-13  6.84E-13
   5.18E-13  3.83E-13  1.71E-13  6.80E-13  1.65E-12  9.50E-06
   0.4111  0.4111  0.4111    1  6.71715E-06 kpt; spin; max resid(k); each band:
   5.02E-13  3.31E-13  2.60E-13  4.75E-13  9.55E-13  1.51E-13  3.18E-13  5.10E-13
   2.18E-13  6.76E-13  3.69E-13  2.79E-13  7.00E-13  2.94E-13  5.68E-13  6.99E-13
   7.59E-13  7.41E-13  6.56E-13  5.70E-13  2.57E-13  4.92E-13  5.46E-13  5.62E-13
   9.32E-13  8.53E-13  8.89E-13  6.59E-13  2.56E-12  6.72E-06
   0.4056  0.4056  0.4056    1  2.43260E-06 kpt; spin; max resid(k); each band:
   2.06E-13  1.93E-13  6.21E-13  1.88E-13  3.90E-13  7.10E-13  6.23E-13  5.87E-13
   3.67E-13  6.76E-13  1.32E-13  9.93E-13  4.09E-13  3.44E-13  6.43E-13  3.01E-13
   2.81E-13  4.81E-13  6.84E-13  6.52E-13  8.18E-13  1.91E-13  2.77E-13  4.62E-13
   5.05E-13  3.66E-13  5.22E-13  9.66E-13  2.17E-12  2.43E-06
   0.4000  0.4000  0.4000    1  1.98228E-06 kpt; spin; max resid(k); each band:
   9.70E-13  2.34E-13  7.64E-13  2.86E-13  4.39E-13  6.38E-13  6.01E-13  5.21E-13
   5.03E-13  8.08E-13  3.98E-13  2.47E-13  4.95E-13  4.37E-13  7.86E-13  2.46E-13
   2.03E-13  7.46E-13  8.79E-13  4.03E-13  6.68E-13  5.89E-13  9.51E-13  4.19E-13
   4.41E-13  8.24E-13  6.74E-13  5.86E-13  1.15E-11  1.98E-06
   0.3944  0.3944  0.3944    1  1.15731E-06 kpt; spin; max resid(k); each band:
   6.68E-13  3.93E-13  3.85E-13  5.60E-13  4.07E-13  6.95E-13  5.74E-13  6.47E-13
   2.81E-13  4.09E-13  6.37E-13  6.27E-13  4.98E-13  4.25E-13  1.96E-13  6.44E-13
   7.43E-13  5.24E-13  7.22E-13  9.36E-13  2.63E-13  3.41E-13  2.89E-13  2.94E-13
   9.45E-13  2.83E-13  4.81E-13  6.58E-13  5.38E-11  1.16E-06
   0.3889  0.3889  0.3889    1  8.54716E-07 kpt; spin; max resid(k); each band:
   6.98E-13  3.97E-13  3.94E-13  5.59E-13  4.03E-13  6.54E-13  6.26E-13  6.68E-13
   2.37E-13  4.05E-13  6.09E-13  5.01E-13  6.94E-13  5.30E-13  8.72E-13  5.51E-13
   7.37E-13  4.42E-13  4.63E-13  8.93E-13  7.62E-13  3.37E-13  6.96E-13  7.34E-13
   6.57E-13  3.32E-13  3.98E-13  5.36E-13  7.47E-11  8.55E-07
   0.3833  0.3833  0.3833    1  6.40512E-07 kpt; spin; max resid(k); each band:
   7.13E-13  4.01E-13  4.05E-13  6.53E-13  4.04E-13  5.91E-13  6.53E-13  6.90E-13
   8.60E-13  4.09E-13  5.55E-13  4.68E-13  8.99E-13  6.55E-13  7.56E-13  5.11E-13
   7.81E-13  3.46E-13  3.18E-13  6.75E-13  5.65E-13  3.57E-13  4.41E-13  3.31E-13
   5.94E-13  4.36E-13  9.18E-13  6.96E-13  9.99E-11  6.41E-07
   0.3778  0.3778  0.3778    1  4.90693E-07 kpt; spin; max resid(k); each band:
   6.96E-13  4.05E-13  4.16E-13  7.74E-13  4.06E-13  5.46E-13  6.78E-13  7.30E-13
   6.88E-13  3.60E-13  5.29E-13  5.06E-13  1.24E-13  8.13E-13  6.96E-13  4.93E-13
   8.46E-13  2.75E-13  2.96E-13  5.21E-13  4.33E-13  2.85E-13  3.66E-13  6.77E-13
   6.93E-13  6.46E-13  4.29E-13  5.77E-13  1.27E-10  4.91E-07
   0.3722  0.3722  0.3722    1  2.55864E-08 kpt; spin; max resid(k); each band:
   8.41E-13  5.04E-13  3.92E-13  3.29E-13  8.44E-13  2.90E-13  3.30E-13  3.64E-13
   3.18E-13  2.41E-13  2.22E-13  5.65E-13  1.94E-13  2.87E-13  4.15E-13  7.43E-13
   5.69E-13  6.14E-13  5.23E-13  5.74E-13  4.82E-13  4.00E-13  5.16E-13  7.31E-13
   4.80E-13  3.17E-13  8.29E-13  2.48E-13  1.21E-11  2.56E-08
   0.3667  0.3667  0.3667    1  9.86622E-09 kpt; spin; max resid(k); each band:
   9.11E-13  4.70E-13  4.18E-13  3.13E-13  8.54E-13  2.27E-13  3.85E-13  4.13E-13
   2.95E-13  2.34E-13  8.34E-13  5.57E-13  2.12E-13  3.44E-13  3.46E-13  8.40E-13
   5.77E-13  8.18E-13  4.13E-13  5.58E-13  5.18E-13  3.45E-13  5.02E-13  3.65E-13
   6.09E-13  5.51E-13  4.46E-13  2.57E-13  7.67E-12  9.87E-09
   0.3611  0.3611  0.3611    1  2.22772E-08 kpt; spin; max resid(k); each band:
   5.72E-13  1.89E-13  6.33E-13  9.83E-13  1.82E-13  3.63E-13  3.76E-13  9.77E-13
   8.35E-13  6.15E-13  2.42E-13  5.99E-13  8.03E-13  2.82E-13  9.04E-13  8.59E-13
   6.78E-13  4.50E-13  2.66E-13  6.69E-13  8.90E-13  7.91E-13  8.76E-13  7.64E-13
   3.06E-13  7.57E-13  3.13E-13  6.37E-13  1.77E-11  2.23E-08
   0.3556  0.3556  0.3556    1  1.53622E-08 kpt; spin; max resid(k); each band:
   5.89E-13  1.57E-13  7.32E-13  9.87E-13  1.90E-13  3.23E-13  3.87E-13  9.47E-13
   7.79E-13  5.89E-13  2.23E-13  5.46E-13  7.62E-13  2.48E-13  6.94E-13  8.89E-13
   4.09E-13  6.24E-13  2.31E-13  5.41E-13  7.88E-13  2.77E-13  6.54E-13  6.48E-13
   9.48E-13  4.17E-13  3.83E-13  6.55E-13  1.37E-11  1.54E-08
   0.3500  0.3500  0.3500    1  4.94011E-08 kpt; spin; max resid(k); each band:
   2.62E-13  2.30E-13  6.45E-13  5.62E-13  6.35E-13  4.32E-13  3.96E-13  2.59E-13
   1.90E-13  7.39E-13  6.05E-13  9.30E-13  5.16E-13  3.35E-13  3.75E-13  6.51E-13
   8.10E-13  8.13E-13  4.50E-13  4.69E-13  3.64E-13  2.87E-13  4.13E-13  6.41E-13
   5.53E-13  6.69E-13  5.73E-13  5.49E-13  2.68E-12  4.94E-08
   0.3444  0.3444  0.3444    1  4.06185E-08 kpt; spin; max resid(k); each band:
   2.70E-13  2.88E-13  5.49E-13  6.31E-13  7.29E-13  4.30E-13  4.37E-13  8.45E-13
   1.94E-13  5.53E-13  5.79E-13  8.31E-13  4.92E-13  3.08E-13  4.43E-13  5.90E-13
   6.71E-13  2.44E-13  3.36E-13  5.05E-13  3.16E-13  9.38E-13  3.75E-13  5.67E-13
   3.06E-13  9.97E-13  4.39E-13  4.87E-13  2.27E-12  4.06E-08
   0.3389  0.3389  0.3389    1  3.12388E-09 kpt; spin; max resid(k); each band:
   2.75E-13  3.60E-13  4.58E-13  6.98E-13  8.50E-13  4.34E-13  4.68E-13  7.12E-13
   1.96E-13  3.95E-13  5.44E-13  6.72E-13  4.86E-13  3.37E-13  5.25E-13  5.85E-13
   5.87E-13  2.45E-13  3.35E-13  6.71E-13  2.75E-13  6.75E-13  4.07E-13  2.88E-13
   3.93E-13  8.82E-13  4.61E-13  5.39E-13  7.70E-13  3.12E-09
   0.3333  0.3333  0.3333    1  3.21528E-09 kpt; spin; max resid(k); each band:
   2.82E-13  4.22E-13  4.22E-13  7.75E-13  2.40E-13  4.37E-13  5.86E-13  5.89E-13
   2.02E-13  3.28E-13  4.96E-13  4.04E-13  4.88E-13  3.51E-13  6.15E-13  6.88E-13
   6.62E-13  2.50E-13  3.84E-13  7.09E-13  2.23E-13  4.56E-13  4.17E-13  3.73E-13
   4.75E-13  7.10E-13  4.43E-13  5.58E-13  2.40E-12  3.22E-09
   0.3278  0.3278  0.3278    1  4.07328E-09 kpt; spin; max resid(k); each band:
   2.50E-13  2.40E-13  6.18E-13  4.97E-13  6.50E-13  3.34E-13  7.38E-13  7.82E-13
   4.88E-13  4.40E-13  6.16E-13  7.53E-13  2.88E-13  7.59E-13  4.74E-13  7.51E-13
   4.82E-13  4.56E-13  7.16E-13  8.24E-13  3.93E-13  7.69E-13  6.62E-13  6.49E-13
   7.52E-13  8.85E-13  4.62E-13  4.42E-13  1.93E-11  4.07E-09
   0.3222  0.3222  0.3222    1  2.30448E-09 kpt; spin; max resid(k); each band:
   9.10E-13  2.42E-13  3.26E-13  6.09E-13  5.21E-13  2.04E-13  5.89E-13  9.82E-13
   5.40E-13  3.03E-13  3.50E-13  6.97E-13  8.92E-13  5.60E-13  4.15E-13  3.77E-13
   2.50E-13  3.46E-13  2.61E-13  3.55E-13  2.69E-13  1.74E-13  2.28E-13  7.65E-13
   9.62E-13  9.15E-13  1.54E-13  5.03E-13  1.15E-11  2.30E-09
   0.3167  0.3167  0.3167    1  2.31508E-09 kpt; spin; max resid(k); each band:
   9.23E-13  2.68E-13  4.34E-13  6.03E-13  4.45E-13  2.37E-13  4.42E-13  2.90E-13
   4.21E-13  3.55E-13  3.13E-13  6.04E-13  6.72E-13  5.15E-13  7.56E-13  4.33E-13
   3.19E-13  7.30E-13  5.09E-13  3.79E-13  9.50E-13  1.42E-13  2.11E-13  6.91E-13
   8.36E-13  3.11E-13  9.13E-13  4.16E-13  8.77E-12  2.32E-09
   0.3111  0.3111  0.3111    1  2.51695E-09 kpt; spin; max resid(k); each band:
   9.66E-13  2.96E-13  5.69E-13  5.88E-13  3.83E-13  2.60E-13  3.49E-13  2.88E-13
   3.26E-13  3.36E-13  2.88E-13  5.76E-13  4.67E-13  4.82E-13  1.64E-13  3.76E-13
   3.28E-13  6.35E-13  6.00E-13  4.92E-13  7.02E-13  1.71E-13  2.19E-13  5.59E-13
   9.83E-13  4.27E-13  7.12E-13  9.88E-13  6.42E-12  2.52E-09
   0.3056  0.3056  0.3056    1  2.80597E-09 kpt; spin; max resid(k); each band:
   2.60E-13  3.27E-13  7.40E-13  5.49E-13  3.44E-13  2.66E-13  4.15E-13  9.43E-13
   3.89E-13  2.54E-13  2.69E-13  5.49E-13  5.83E-13  6.52E-13  2.38E-13  3.01E-13
   4.08E-13  4.20E-13  7.90E-13  7.03E-13  7.48E-13  2.06E-13  2.31E-13  4.79E-13
   4.61E-13  5.74E-13  1.29E-13  2.99E-13  4.20E-12  2.81E-09
   0.3000  0.3000  0.3000    1  3.25815E-09 kpt; spin; max resid(k); each band:
   6.63E-13  5.23E-13  2.62E-13  3.35E-13  4.93E-13  2.49E-13  3.57E-13  5.14E-13
   9.79E-13  7.58E-13  4.59E-13  3.49E-13  6.01E-13  8.22E-13  8.41E-13  3.75E-13
   5.91E-13  4.05E-13  5.61E-13  8.48E-13  7.06E-13  5.79E-13  7.98E-13  8.60E-13
   6.54E-13  2.68E-13  6.46E-13  2.18E-13  2.56E-13  3.26E-09
   0.2944  0.2944  0.2944    1  1.17229E-08 kpt; spin; max resid(k); each band:
   3.97E-13  8.38E-13  7.18E-13  7.31E-13  6.90E-13  1.69E-13  9.14E-13  5.63E-13
   2.61E-13  3.03E-13  8.38E-13  4.53E-13  4.11E-13  3.97E-13  5.55E-13  4.71E-13
   4.52E-13  6.58E-13  7.31E-13  9.24E-13  2.83E-13  6.55E-13  6.96E-13  3.48E-13
   3.60E-13  1.51E-13  2.69E-13  4.29E-13  4.70E-13  1.17E-08
   0.2889  0.2889  0.2889    1  3.35789E-08 kpt; spin; max resid(k); each band:
   5.60E-13  3.65E-13  8.33E-13  1.75E-13  6.28E-13  8.44E-13  5.51E-13  5.69E-13
   4.48E-13  4.53E-13  4.32E-13  2.64E-13  7.46E-13  5.18E-13  4.25E-13  2.66E-13
   1.39E-13  5.99E-13  5.16E-13  4.50E-13  8.23E-13  3.99E-13  3.03E-13  9.62E-13
   2.18E-13  5.48E-14  3.36E-13  8.05E-13  2.06E-11  3.36E-08
   0.2833  0.2833  0.2833    1  5.07277E-08 kpt; spin; max resid(k); each band:
   7.99E-13  5.08E-13  2.62E-13  5.97E-13  4.27E-13  3.43E-13  5.53E-13  5.00E-13
   2.37E-13  3.20E-13  2.29E-13  3.90E-13  2.64E-13  3.29E-13  3.63E-13  6.45E-13
   1.49E-13  5.85E-13  7.24E-13  5.85E-13  5.84E-13  1.71E-13  2.74E-13  5.26E-13
   2.74E-13  7.12E-14  6.51E-13  2.16E-13  1.23E-11  5.07E-08
   0.2778  0.2778  0.2778    1  1.17917E-08 kpt; spin; max resid(k); each band:
   8.92E-13  4.41E-13  2.89E-13  6.54E-13  7.75E-13  4.42E-13  6.52E-13  6.32E-13
   4.93E-13  4.55E-13  2.96E-13  4.78E-13  4.91E-13  2.82E-13  4.17E-13  6.76E-13
   1.81E-13  5.87E-13  5.28E-13  1.49E-13  7.23E-13  1.35E-13  2.60E-13  6.68E-13
   3.78E-13  2.40E-13  5.96E-13  5.60E-13  1.42E-11  1.18E-08
   0.2722  0.2722  0.2722    1  6.85528E-09 kpt; spin; max resid(k); each band:
   8.98E-13  4.48E-13  2.72E-13  5.63E-13  7.40E-13  4.56E-13  6.85E-13  5.79E-13
   5.06E-13  3.76E-13  3.15E-13  4.27E-13  4.49E-13  6.29E-13  1.24E-13  6.44E-13
   1.60E-13  3.19E-13  3.39E-13  2.69E-13  5.72E-13  8.90E-13  9.16E-13  8.59E-13
   5.25E-13  3.63E-13  8.16E-13  7.14E-13  1.07E-11  6.86E-09
   0.2667  0.2667  0.2667    1  5.38642E-09 kpt; spin; max resid(k); each band:
   6.28E-13  3.46E-13  9.00E-13  1.55E-13  7.81E-13  3.57E-13  6.23E-13  2.66E-13
   4.38E-13  2.98E-13  3.02E-13  7.47E-13  3.34E-13  8.00E-13  3.59E-13  7.04E-13
   2.84E-13  5.85E-13  5.60E-13  6.60E-13  8.99E-13  2.82E-13  3.00E-13  4.16E-13
   5.06E-13  4.13E-13  3.07E-13  7.79E-13  2.20E-12  5.39E-09
   0.2611  0.2611  0.2611    1  1.02963E-08 kpt; spin; max resid(k); each band:
   4.74E-13  3.99E-13  4.05E-13  1.40E-13  1.32E-13  3.66E-13  3.88E-13  3.51E-13
   2.82E-13  3.17E-13  2.21E-13  8.05E-13  3.79E-13  7.06E-13  7.35E-13  5.39E-13
   2.70E-13  2.09E-13  4.12E-13  5.68E-13  2.82E-13  4.10E-13  3.56E-13  5.75E-13
   4.35E-13  6.98E-13  8.73E-13  8.88E-13  3.41E-13  1.03E-08
   0.2556  0.2556  0.2556    1  2.44708E-08 kpt; spin; max resid(k); each band:
   4.83E-13  3.94E-13  4.44E-13  1.38E-13  1.26E-13  3.25E-13  3.67E-13  3.28E-13
   3.06E-13  3.56E-13  2.73E-13  2.85E-13  3.84E-13  9.13E-13  6.88E-13  4.97E-13
   3.59E-13  2.56E-13  5.33E-13  7.95E-13  3.34E-13  4.49E-13  4.76E-13  4.53E-13
   3.28E-13  1.60E-13  3.40E-13  9.21E-13  9.42E-13  2.45E-08
   0.2500  0.2500  0.2500    1  7.90243E-09 kpt; spin; max resid(k); each band:
   4.83E-13  3.94E-13  4.95E-13  1.40E-13  9.43E-13  9.00E-13  3.36E-13  3.08E-13
   3.40E-13  4.46E-13  3.45E-13  3.91E-13  4.31E-13  3.10E-13  6.79E-13  5.04E-13
   3.57E-13  3.30E-13  6.54E-13  9.27E-13  4.26E-13  5.53E-13  5.55E-13  7.67E-13
   6.74E-13  7.13E-13  8.32E-13  7.22E-13  2.14E-13  7.90E-09
   0.2444  0.2444  0.2444    1  7.31654E-09 kpt; spin; max resid(k); each band:
   4.77E-13  3.96E-13  5.47E-13  1.46E-13  8.45E-13  7.35E-13  3.15E-13  2.92E-13
   3.85E-13  5.68E-13  4.51E-13  5.13E-13  6.30E-13  4.81E-13  6.54E-13  4.97E-13
   8.62E-13  4.23E-13  6.88E-13  4.34E-13  5.74E-13  6.98E-13  6.54E-13  8.40E-13
   8.02E-13  4.38E-13  6.63E-13  5.37E-13  3.09E-13  7.32E-09
   0.2389  0.2389  0.2389    1  1.93757E-08 kpt; spin; max resid(k); each band:
   4.55E-13  3.52E-13  5.90E-13  1.53E-13  7.07E-13  4.69E-13  2.95E-13  2.68E-13
   4.38E-13  7.12E-13  5.57E-13  6.35E-13  7.57E-13  6.45E-13  5.24E-13  3.49E-13
   2.54E-13  5.53E-13  7.00E-13  9.09E-13  6.49E-13  7.21E-13  8.30E-13  6.77E-13
   4.42E-13  5.67E-13  7.39E-13  9.49E-13  2.01E-13  1.94E-08
   0.2333  0.2333  0.2333    1  2.34754E-07 kpt; spin; max resid(k); each band:
   4.14E-13  2.88E-13  3.14E-13  6.85E-13  3.98E-13  8.21E-13  2.57E-13  5.82E-13
   3.17E-13  4.09E-13  6.14E-13  4.19E-13  3.15E-13  5.28E-13  5.42E-13  8.80E-13
   4.58E-13  8.50E-13  4.32E-13  2.62E-13  3.53E-13  5.30E-13  5.41E-13  2.53E-13
   1.81E-13  2.04E-13  9.19E-13  8.27E-13  1.28E-12  2.35E-07
   0.2278  0.2278  0.2278    1  3.09569E-07 kpt; spin; max resid(k); each band:
   5.59E-13  5.13E-13  2.58E-13  7.32E-13  3.80E-13  6.07E-13  2.66E-13  4.05E-13
   2.01E-13  4.34E-13  4.34E-13  3.41E-13  3.01E-13  3.98E-13  4.71E-13  6.29E-13
   6.12E-13  5.34E-13  2.20E-13  5.97E-13  2.11E-13  6.19E-13  5.48E-13  6.42E-13
   5.93E-13  4.35E-13  5.11E-13  3.75E-13  3.58E-13  3.10E-07
   0.2222  0.2222  0.2222    1  3.06874E-07 kpt; spin; max resid(k); each band:
   3.25E-13  8.87E-13  3.40E-13  7.15E-13  4.28E-13  6.60E-13  5.28E-13  5.37E-13
   4.88E-13  7.42E-13  3.62E-13  4.84E-13  8.90E-13  6.16E-13  2.78E-13  1.82E-13
   4.90E-13  3.19E-13  4.21E-13  1.84E-13  4.15E-13  1.14E-13  2.56E-13  2.67E-13
   2.47E-13  8.56E-13  3.89E-13  4.16E-13  8.66E-13  3.07E-07
   0.2167  0.2167  0.2167    1  4.99241E-08 kpt; spin; max resid(k); each band:
   5.16E-13  7.66E-13  1.91E-13  3.23E-13  9.74E-13  8.93E-13  6.56E-13  7.75E-13
   2.01E-13  7.44E-13  2.87E-13  9.49E-13  9.26E-13  4.43E-13  8.01E-13  5.69E-13
   7.21E-13  2.12E-13  3.15E-13  2.97E-13  2.64E-13  5.55E-13  2.21E-13  3.71E-13
   4.43E-13  2.78E-13  6.82E-13  8.89E-13  4.00E-14  4.99E-08
   0.2111  0.2111  0.2111    1  1.49791E-07 kpt; spin; max resid(k); each band:
   5.45E-13  6.87E-13  1.87E-13  3.63E-13  8.17E-13  8.99E-13  6.17E-13  7.33E-13
   2.05E-13  8.06E-13  2.47E-13  9.29E-13  6.16E-13  5.77E-13  8.94E-13  5.56E-13
   9.17E-13  2.42E-13  3.84E-13  3.14E-13  2.18E-13  5.20E-13  3.01E-13  4.14E-13
   4.35E-13  4.09E-13  5.90E-13  2.99E-13  1.48E-13  1.50E-07
   0.2056  0.2056  0.2056    1  4.47548E-07 kpt; spin; max resid(k); each band:
   5.83E-13  6.13E-13  1.91E-13  3.57E-13  7.00E-13  9.34E-13  5.79E-13  6.17E-13
   2.35E-13  8.81E-13  2.20E-13  9.21E-13  2.54E-13  8.20E-13  1.15E-13  2.54E-13
   2.51E-13  4.76E-13  7.13E-13  2.85E-13  2.04E-13  4.14E-13  3.99E-13  2.72E-13
   2.79E-13  2.46E-13  3.43E-13  3.62E-13  2.67E-13  4.48E-07
   0.2000  0.2000  0.2000    1  3.54652E-07 kpt; spin; max resid(k); each band:
   2.78E-13  4.90E-13  3.99E-13  6.45E-13  3.16E-13  4.41E-13  4.92E-13  3.70E-13
   3.93E-13  4.18E-13  4.99E-13  2.43E-13  5.20E-13  4.32E-13  7.63E-13  2.73E-13
   3.34E-13  9.13E-13  2.59E-13  7.71E-13  3.95E-13  4.47E-13  3.45E-13  7.25E-13
   4.68E-13  5.65E-13  5.07E-13  7.84E-13  7.53E-13  3.55E-07
   0.1944  0.1944  0.1944    1  9.92370E-07 kpt; spin; max resid(k); each band:
   4.83E-13  2.18E-13  7.46E-13  8.26E-13  3.22E-13  9.18E-13  4.37E-13  2.37E-13
   5.02E-13  2.66E-13  6.44E-13  3.48E-13  5.92E-13  2.86E-13  2.99E-13  9.41E-13
   2.62E-13  4.18E-13  7.50E-13  5.56E-13  2.65E-13  3.67E-13  9.28E-13  6.36E-13
   7.95E-13  6.91E-13  6.96E-13  3.00E-13  7.05E-13  9.92E-07
   0.1889  0.1889  0.1889    1  1.79828E-06 kpt; spin; max resid(k); each band:
   4.87E-13  2.61E-13  7.46E-13  1.90E-13  3.28E-13  9.62E-13  4.58E-13  2.65E-13
   5.03E-13  2.22E-13  3.17E-13  4.03E-13  6.56E-13  2.00E-13  3.57E-13  3.24E-13
   3.13E-13  1.27E-13  3.17E-13  9.68E-13  5.46E-13  2.81E-13  2.04E-13  1.95E-13
   6.50E-13  4.26E-13  4.65E-13  1.00E-12  2.44E-13  1.80E-06
   0.1833  0.1833  0.1833    1  5.45765E-07 kpt; spin; max resid(k); each band:
   3.77E-13  2.61E-13  2.17E-13  5.15E-13  9.29E-13  4.63E-13  3.86E-13  8.87E-13
   4.37E-13  4.93E-13  4.25E-13  4.92E-13  7.24E-13  4.10E-13  5.76E-13  4.00E-13
   3.40E-13  5.41E-13  5.13E-13  9.48E-13  6.39E-13  7.04E-13  2.96E-13  5.78E-13
   8.93E-13  4.68E-13  5.62E-13  5.10E-13  2.20E-14  5.46E-07
   0.1778  0.1778  0.1778    1  6.82361E-07 kpt; spin; max resid(k); each band:
   4.36E-13  4.03E-13  2.32E-13  5.08E-13  9.74E-13  5.01E-13  5.55E-13  5.98E-13
   4.24E-13  3.88E-13  4.44E-13  2.70E-13  6.93E-13  3.51E-13  5.74E-13  3.47E-13
   3.15E-13  4.79E-13  1.49E-13  5.92E-13  2.58E-13  3.22E-13  2.07E-13  7.34E-13
   3.95E-13  5.39E-13  5.17E-13  5.46E-13  2.26E-13  6.82E-07
   0.1722  0.1722  0.1722    1  1.60412E-06 kpt; spin; max resid(k); each band:
   6.29E-13  3.75E-13  2.29E-13  6.17E-13  2.64E-13  5.27E-13  3.74E-13  7.61E-13
   4.69E-13  4.02E-13  5.09E-13  6.07E-13  6.94E-13  3.26E-13  6.79E-13  3.28E-13
   3.04E-13  5.18E-13  8.92E-13  6.00E-13  5.04E-13  4.60E-13  2.23E-13  8.45E-13
   7.88E-13  1.80E-13  5.85E-13  3.52E-13  7.90E-14  1.60E-06
   0.1667  0.1667  0.1667    1  3.61152E-07 kpt; spin; max resid(k); each band:
   7.49E-13  3.63E-13  3.39E-13  1.09E-13  7.05E-13  4.37E-13  6.49E-13  3.25E-13
   3.90E-13  5.45E-13  5.64E-13  8.36E-13  4.21E-13  5.99E-13  6.13E-13  5.76E-13
   2.19E-13  6.88E-13  4.81E-13  2.78E-13  2.99E-13  8.57E-13  3.26E-13  8.62E-13
   6.22E-13  3.99E-13  3.55E-13  7.61E-13  1.47E-13  3.61E-07
   0.1611  0.1611  0.1611    1  1.53712E-07 kpt; spin; max resid(k); each band:
   4.61E-13  5.08E-13  4.93E-13  8.06E-13  8.19E-13  5.87E-13  2.80E-13  2.33E-13
   2.74E-13  7.37E-14  6.58E-13  9.32E-13  5.70E-13  6.82E-13  5.86E-13  2.54E-13
   7.88E-13  3.07E-13  2.72E-13  7.17E-13  4.83E-13  4.41E-13  3.20E-13  1.28E-13
   3.98E-13  7.19E-13  5.94E-13  8.77E-13  4.03E-13  1.54E-07
   0.1556  0.1556  0.1556    1  1.56538E-07 kpt; spin; max resid(k); each band:
   4.58E-13  5.79E-13  4.13E-13  8.30E-13  9.54E-13  5.80E-13  9.45E-13  4.26E-13
   3.21E-13  7.16E-14  7.05E-13  7.65E-13  5.58E-13  6.27E-13  4.33E-13  2.24E-13
   8.72E-13  8.48E-13  5.53E-13  5.62E-13  6.48E-13  4.14E-13  2.22E-13  1.48E-13
   4.92E-13  4.50E-13  3.52E-13  9.11E-13  3.99E-13  1.57E-07
   0.1500  0.1500  0.1500    1  6.40899E-07 kpt; spin; max resid(k); each band:
   4.82E-13  5.22E-13  4.34E-13  8.58E-13  8.90E-13  4.87E-13  8.51E-13  4.90E-13
   3.07E-13  7.77E-14  6.39E-13  6.79E-13  6.80E-13  6.55E-13  8.58E-13  8.95E-13
   4.25E-13  3.50E-13  4.20E-13  6.94E-13  4.66E-13  5.89E-13  2.18E-13  1.37E-13
   4.74E-13  5.75E-13  3.61E-13  9.46E-13  4.36E-13  6.41E-07
   0.1444  0.1444  0.1444    1  2.14473E-05 kpt; spin; max resid(k); each band:
   4.47E-13  4.24E-13  6.43E-13  8.23E-13  8.22E-13  4.49E-13  9.06E-13  4.41E-13
   2.48E-13  9.52E-14  6.10E-13  7.65E-13  9.44E-13  8.07E-13  5.20E-13  2.20E-13
   5.29E-13  5.08E-13  5.79E-13  5.97E-13  2.79E-13  5.89E-13  1.93E-13  6.35E-13
   8.20E-13  4.23E-13  2.85E-13  8.81E-13  3.45E-13  2.14E-05
   0.1389  0.1389  0.1389    1  3.82180E-07 kpt; spin; max resid(k); each band:
   3.53E-13  7.45E-13  2.25E-13  4.80E-13  4.85E-13  4.40E-13  1.94E-13  8.10E-13
   2.03E-13  3.55E-13  2.18E-13  5.13E-13  6.63E-13  3.74E-13  5.29E-13  8.03E-13
   1.97E-13  5.34E-13  2.82E-13  5.36E-13  3.09E-13  4.64E-13  2.26E-13  9.45E-13
   3.74E-13  7.11E-13  7.43E-13  4.51E-13  4.66E-13  3.82E-07
   0.1333  0.1333  0.1333    1  1.59223E-06 kpt; spin; max resid(k); each band:
   3.64E-13  8.14E-13  8.67E-13  5.83E-13  4.50E-13  4.48E-13  1.81E-13  7.50E-13
   6.62E-13  8.03E-13  2.88E-13  4.89E-13  5.25E-13  3.37E-13  6.40E-13  2.88E-13
   1.99E-13  3.20E-13  2.80E-13  5.84E-13  5.30E-13  5.45E-13  2.34E-13  9.29E-13
   3.98E-13  5.63E-13  9.52E-13  3.48E-13  3.15E-13  1.59E-06
   0.1278  0.1278  0.1278    1  2.49913E-05 kpt; spin; max resid(k); each band:
   6.40E-13  2.05E-13  7.12E-13  2.52E-13  3.65E-13  8.38E-13  2.41E-13  3.00E-13
   6.30E-13  2.41E-13  5.67E-13  3.47E-13  6.75E-13  7.41E-13  3.12E-13  1.78E-13
   2.57E-13  2.11E-13  9.78E-13  5.88E-13  9.48E-13  8.43E-13  5.68E-13  7.17E-13
   6.46E-13  4.92E-13  9.88E-13  6.13E-13  6.04E-13  2.50E-05
   0.1222  0.1222  0.1222    1  8.58088E-06 kpt; spin; max resid(k); each band:
   6.17E-13  2.24E-13  7.40E-13  9.72E-13  3.57E-13  7.60E-13  3.41E-13  9.40E-13
   4.23E-13  1.89E-13  5.82E-13  3.75E-13  7.77E-13  6.55E-13  9.12E-13  9.42E-13
   3.13E-13  3.35E-13  4.87E-13  3.53E-13  8.28E-13  5.76E-13  6.69E-13  5.77E-13
   3.63E-13  3.24E-13  6.84E-13  9.15E-13  5.07E-13  8.58E-06
   0.1167  0.1167  0.1167    1  2.34925E-06 kpt; spin; max resid(k); each band:
   6.35E-13  2.25E-13  8.60E-13  7.43E-13  4.00E-13  6.73E-13  4.28E-13  8.54E-13
   2.60E-13  2.25E-13  6.18E-13  4.38E-13  2.29E-13  6.42E-13  9.84E-13  9.43E-13
   3.12E-13  6.54E-13  4.74E-13  3.15E-13  6.91E-13  5.66E-13  5.21E-13  4.34E-13
   3.08E-13  6.51E-13  9.16E-13  3.06E-13  4.02E-13  2.35E-06
   0.1111  0.1111  0.1111    1  5.00919E-07 kpt; spin; max resid(k); each band:
   7.27E-13  2.28E-13  8.37E-13  4.99E-13  4.91E-13  4.56E-13  3.78E-13  7.41E-13
   1.43E-13  1.57E-13  5.74E-13  4.31E-13  2.31E-13  7.32E-13  5.28E-13  1.96E-13
   5.86E-13  2.65E-13  5.37E-13  3.62E-13  2.65E-13  2.86E-13  5.14E-13  3.91E-13
   3.63E-13  5.86E-13  7.29E-13  6.60E-13  8.60E-13  5.01E-07
   0.1056  0.1056  0.1056    1  1.08056E-08 kpt; spin; max resid(k); each band:
   4.90E-13  2.93E-13  4.69E-13  9.54E-13  3.79E-13  9.46E-13  3.17E-13  3.70E-13
   6.94E-13  6.77E-13  2.94E-13  7.48E-13  8.05E-13  7.66E-13  4.23E-13  5.14E-13
   3.45E-13  2.35E-13  2.63E-13  3.10E-13  7.31E-13  5.83E-13  8.91E-13  2.26E-13
   2.47E-13  1.10E-13  3.73E-13  2.24E-13  6.86E-13  1.08E-08
   0.1000  0.1000  0.1000    1  8.37653E-08 kpt; spin; max resid(k); each band:
   5.89E-13  2.68E-13  3.68E-13  7.18E-13  2.31E-13  5.28E-13  3.51E-13  4.15E-13
   3.10E-13  2.56E-13  5.73E-13  4.76E-13  2.92E-13  5.45E-13  3.88E-13  6.39E-13
   8.38E-13  7.95E-13  8.66E-13  5.80E-13  3.34E-13  8.15E-13  5.35E-13  3.70E-13
   8.71E-13  4.59E-13  6.55E-13  3.30E-13  8.38E-08  6.68E-13
   0.0944  0.0944  0.0944    1  2.37314E-06 kpt; spin; max resid(k); each band:
   4.31E-13  9.09E-13  5.66E-13  2.50E-13  2.49E-13  3.33E-13  3.52E-13  3.55E-13
   4.93E-13  6.24E-13  9.38E-13  8.11E-13  4.22E-13  9.19E-13  4.30E-13  3.18E-13
   4.48E-13  6.11E-13  5.13E-13  7.89E-13  4.77E-13  4.58E-13  8.05E-13  6.53E-13
   3.00E-13  7.08E-13  8.16E-13  7.72E-13  2.37E-06  9.40E-13
   0.0889  0.0889  0.0889    1  9.72221E-07 kpt; spin; max resid(k); each band:
   3.80E-13  8.96E-13  5.07E-13  9.32E-13  2.58E-13  8.00E-13  2.31E-13  3.58E-13
   3.68E-13  4.53E-13  4.59E-13  7.06E-13  4.25E-13  8.78E-13  4.72E-13  3.91E-13
   5.14E-13  3.03E-13  6.08E-13  1.80E-13  9.52E-13  2.19E-13  7.05E-13  8.31E-13
   5.03E-13  3.64E-13  8.39E-13  3.96E-13  9.72E-07  9.85E-13
   0.0833  0.0833  0.0833    1  1.65935E-06 kpt; spin; max resid(k); each band:
   3.74E-13  8.35E-13  5.59E-13  6.59E-13  2.42E-13  5.96E-13  2.44E-13  3.97E-13
   9.47E-13  3.39E-13  3.43E-13  6.76E-13  7.81E-13  8.71E-13  6.09E-13  4.48E-13
   5.10E-13  2.85E-13  8.33E-13  2.03E-13  3.74E-13  2.75E-13  8.13E-13  6.92E-13
   2.74E-13  1.99E-13  5.53E-13  6.22E-13  1.66E-06  9.69E-13
   0.0778  0.0778  0.0778    1  2.37689E-06 kpt; spin; max resid(k); each band:
   3.84E-13  8.51E-13  5.85E-13  5.67E-13  2.20E-13  4.46E-13  2.64E-13  4.04E-13
   2.62E-13  3.31E-13  2.72E-13  7.01E-13  2.89E-13  8.92E-13  8.24E-13  4.76E-13
   4.08E-13  3.69E-13  7.80E-13  7.45E-13  3.77E-13  2.61E-13  8.46E-13  7.07E-13
   9.48E-13  4.12E-13  5.18E-13  6.39E-13  2.38E-06  8.24E-13
   0.0722  0.0722  0.0722    1  4.16013E-06 kpt; spin; max resid(k); each band:
   3.12E-13  5.47E-13  3.10E-13  9.17E-13  5.43E-13  3.53E-13  2.78E-13  9.48E-13
   6.86E-13  2.56E-13  9.23E-13  1.85E-13  8.02E-13  8.43E-13  2.57E-13  7.78E-13
   3.22E-13  2.08E-13  4.05E-13  2.59E-13  7.04E-13  4.06E-13  6.16E-13  4.92E-13
   6.10E-13  3.60E-13  6.97E-13  4.20E-13  4.16E-06  6.46E-13
   0.0667  0.0667  0.0667    1  1.33344E-06 kpt; spin; max resid(k); each band:
   5.52E-13  3.57E-13  8.45E-13  3.78E-13  7.08E-13  5.73E-13  4.80E-13  6.07E-13
   8.54E-13  3.77E-13  3.55E-13  8.17E-13  7.54E-13  3.80E-13  3.91E-13  3.20E-13
   6.35E-13  3.90E-13  2.29E-13  4.55E-13  2.81E-13  1.81E-13  9.16E-13  3.52E-13
   5.99E-13  2.82E-13  6.55E-13  9.32E-13  1.33E-06  6.15E-13
   0.0611  0.0611  0.0611    1  2.89127E-07 kpt; spin; max resid(k); each band:
   2.39E-13  5.35E-13  4.20E-13  3.06E-13  6.85E-13  8.94E-13  2.84E-13  2.16E-13
   7.37E-13  3.58E-13  3.03E-13  4.08E-13  2.13E-13  4.69E-13  6.54E-13  4.75E-13
   7.80E-13  6.43E-13  2.54E-13  5.60E-13  5.21E-13  4.98E-13  6.92E-13  2.10E-13
   2.73E-13  5.19E-13  8.28E-13  3.66E-13  2.89E-07  9.79E-13
   0.0556  0.0556  0.0556    1  2.84130E-07 kpt; spin; max resid(k); each band:
   2.17E-13  5.94E-13  6.03E-13  4.12E-13  8.68E-13  1.97E-13  2.84E-13  1.94E-13
   2.38E-13  2.45E-13  3.03E-13  9.91E-13  1.92E-13  4.19E-13  6.85E-13  3.11E-13
   2.52E-13  6.45E-13  2.27E-13  5.40E-13  8.80E-13  3.81E-13  7.83E-13  7.49E-13
   4.27E-13  4.25E-13  7.63E-13  7.15E-13  2.84E-07  4.54E-13
   0.0500  0.0500  0.0500    1  2.89317E-07 kpt; spin; max resid(k); each band:
   2.01E-13  6.73E-13  8.53E-13  4.81E-13  3.87E-13  1.97E-13  2.72E-13  1.59E-13
   2.52E-13  2.47E-13  2.80E-13  7.10E-13  1.90E-13  3.35E-13  7.78E-13  2.80E-13
   2.50E-13  6.02E-13  2.14E-13  4.89E-13  2.17E-13  3.38E-13  7.97E-13  6.86E-13
   6.16E-13  2.83E-13  6.46E-13  4.96E-13  2.89E-07  5.63E-13
   0.0444  0.0444  0.0444    1  1.94057E-06 kpt; spin; max resid(k); each band:
   3.72E-13  5.82E-13  7.20E-13  5.45E-13  8.58E-13  2.92E-13  3.89E-13  7.64E-13
   2.28E-13  3.98E-13  1.96E-13  3.36E-13  2.64E-13  4.49E-13  8.36E-13  4.89E-13
   2.98E-13  6.54E-13  5.91E-13  8.98E-13  6.90E-13  3.52E-13  3.42E-13  4.83E-13
   7.44E-13  4.75E-13  5.51E-13  8.62E-13  1.94E-06  6.81E-13
   0.0389  0.0389  0.0389    1  5.71325E-08 kpt; spin; max resid(k); each band:
   6.75E-13  2.80E-13  5.07E-13  3.09E-13  3.96E-13  1.91E-13  7.85E-13  4.41E-13
   5.58E-13  5.83E-13  1.78E-13  6.38E-13  3.20E-13  2.84E-13  9.03E-13  6.06E-13
   3.84E-13  3.29E-13  7.15E-13  4.26E-13  2.33E-13  4.19E-13  6.82E-13  2.69E-13
   8.85E-13  4.88E-13  5.60E-13  5.25E-13  5.71E-08  6.76E-13
   0.0333  0.0333  0.0333    1  7.23569E-08 kpt; spin; max resid(k); each band:
   5.84E-13  6.08E-13  3.92E-13  1.75E-13  5.60E-13  4.70E-13  4.11E-13  8.16E-13
   5.40E-13  7.45E-13  8.59E-13  7.64E-13  5.62E-13  3.29E-13  3.61E-13  1.96E-13
   5.69E-13  9.81E-13  5.82E-13  9.19E-13  4.38E-13  5.11E-13  4.78E-13  9.40E-13
   3.83E-13  6.52E-13  7.49E-13  6.86E-13  7.24E-08  9.47E-13
   0.0278  0.0278  0.0278    1  9.98780E-09 kpt; spin; max resid(k); each band:
   7.99E-13  2.76E-13  8.14E-13  4.72E-13  7.59E-13  3.64E-13  5.40E-13  9.21E-13
   9.18E-13  1.30E-13  5.71E-13  1.89E-13  3.21E-13  6.92E-13  2.04E-13  4.71E-13
   6.41E-13  4.40E-13  5.69E-13  1.96E-13  5.26E-13  3.52E-13  7.18E-13  3.92E-13
   5.30E-13  6.69E-13  4.02E-13  5.95E-13  9.99E-09  4.53E-13
   0.0222  0.0222  0.0222    1  2.14855E-08 kpt; spin; max resid(k); each band:
   8.47E-13  2.15E-13  5.13E-13  3.10E-13  2.32E-13  3.09E-13  4.62E-13  3.91E-13
   8.07E-14  2.01E-13  4.78E-13  6.19E-13  8.11E-13  9.34E-13  5.28E-13  2.84E-13
   4.51E-13  5.09E-13  1.91E-13  2.17E-13  6.05E-13  5.19E-13  7.50E-13  6.42E-13
   6.80E-13  4.28E-13  7.64E-13  5.93E-13  2.15E-08  8.81E-13
   0.0167  0.0167  0.0167    1  8.04152E-08 kpt; spin; max resid(k); each band:
   3.47E-13  3.02E-13  7.77E-13  6.58E-13  6.60E-13  7.34E-13  5.72E-13  4.44E-13
   1.69E-13  3.09E-13  5.89E-13  2.32E-13  3.77E-13  7.16E-13  4.02E-13  4.98E-13
   5.60E-13  1.74E-13  2.70E-13  7.34E-13  5.88E-13  4.51E-13  6.11E-13  3.17E-13
   3.85E-13  1.70E-13  3.41E-13  5.10E-13  8.04E-08  2.22E-13
   0.0111  0.0111  0.0111    1  4.98600E-09 kpt; spin; max resid(k); each band:
   3.49E-13  3.37E-13  8.54E-13  6.53E-13  6.67E-13  6.38E-13  6.65E-13  5.37E-13
   1.67E-13  3.63E-13  5.80E-13  2.77E-13  3.96E-13  8.73E-13  4.30E-13  5.77E-13
   5.63E-13  1.91E-13  3.78E-13  8.27E-13  3.33E-13  6.56E-13  4.81E-13  2.82E-13
   3.57E-13  7.57E-13  3.79E-13  4.51E-13  4.99E-09  9.11E-13
   0.0056  0.0056  0.0056    1  1.71097E-10 kpt; spin; max resid(k); each band:
   3.61E-13  5.57E-13  9.50E-13  6.78E-13  7.19E-13  6.67E-13  7.39E-13  6.30E-13
   1.86E-13  3.93E-13  4.84E-13  2.89E-13  3.22E-13  8.75E-13  4.36E-13  8.48E-13
   6.27E-13  7.49E-13  4.11E-13  7.31E-13  3.97E-13  5.59E-13  5.06E-13  2.53E-13
   3.60E-13  7.32E-13  3.66E-13  4.74E-13  1.71E-10  1.71E-13
   0.0000  0.0000  0.0000    1  9.32187E-13 kpt; spin; max resid(k); each band:
   3.84E-13  5.38E-13  3.04E-13  3.57E-13  8.55E-13  6.80E-13  2.28E-13  3.39E-13
   3.70E-13  1.44E-13  4.62E-13  6.02E-13  5.85E-13  8.94E-13  6.13E-13  1.93E-13
   5.48E-13  7.73E-13  2.20E-13  9.08E-13  2.22E-13  4.33E-13  7.96E-13  5.06E-13
   7.27E-13  8.97E-13  3.84E-13  2.65E-13  3.67E-13  9.32E-13
   0.0100  0.0000  0.0000    1  2.83713E-09 kpt; spin; max resid(k); each band:
   3.85E-13  5.05E-13  4.03E-13  6.04E-13  8.42E-13  7.85E-13  6.29E-13  5.80E-13
   4.09E-13  3.60E-13  3.42E-13  6.56E-13  6.34E-13  6.55E-13  4.52E-13  6.11E-13
   3.31E-13  4.63E-13  7.63E-13  3.53E-13  2.25E-13  7.06E-13  6.84E-13  5.43E-13
   5.72E-13  2.19E-13  9.03E-13  8.92E-13  2.84E-09  2.42E-13
   0.0200  0.0000  0.0000    1  2.73701E-07 kpt; spin; max resid(k); each band:
   3.40E-13  4.90E-13  4.20E-13  1.29E-13  8.64E-13  9.23E-13  5.06E-13  4.31E-13
   4.58E-13  3.92E-13  3.14E-13  4.81E-13  3.95E-13  4.19E-13  1.77E-13  5.47E-13
   7.72E-13  4.42E-13  8.22E-13  2.34E-13  7.56E-13  4.77E-13  4.29E-13  6.71E-13
   4.41E-13  6.57E-13  6.23E-13  5.51E-13  2.74E-07  2.88E-13
   0.0300  0.0000  0.0000    1  9.00196E-07 kpt; spin; max resid(k); each band:
   3.05E-13  4.68E-13  5.71E-13  5.11E-13  5.82E-13  2.53E-13  2.12E-13  2.88E-13
   3.32E-13  2.79E-13  7.57E-13  2.17E-13  5.18E-13  2.72E-13  2.02E-13  2.19E-13
   1.95E-13  1.83E-13  4.09E-13  3.00E-13  2.78E-13  2.45E-13  7.81E-13  5.24E-13
   6.61E-13  8.38E-13  2.52E-13  6.10E-13  9.00E-07  8.50E-13
   0.0400  0.0000  0.0000    1  3.57971E-06 kpt; spin; max resid(k); each band:
   8.59E-13  3.93E-13  7.79E-13  4.02E-13  2.05E-13  7.93E-13  3.48E-13  3.27E-13
   3.88E-13  6.94E-13  3.66E-13  4.23E-13  4.70E-13  3.59E-13  3.33E-13  4.21E-13
   9.79E-13  5.15E-13  3.33E-13  6.98E-13  6.78E-13  8.52E-13  2.85E-13  8.39E-13
   3.52E-13  5.16E-13  6.74E-13  7.74E-13  3.58E-06  2.02E-13
   0.0500  0.0000  0.0000    1  4.65264E-06 kpt; spin; max resid(k); each band:
   4.96E-13  4.79E-13  3.30E-13  7.82E-13  8.56E-13  5.10E-13  2.54E-13  3.20E-13
   1.21E-13  6.07E-13  4.43E-13  8.34E-13  2.89E-13  3.76E-13  7.91E-13  2.93E-13
   6.20E-13  6.43E-13  7.59E-13  1.54E-13  9.40E-13  5.68E-13  4.09E-13  4.81E-13
   5.72E-13  3.66E-13  2.66E-13  5.30E-13  4.65E-06  2.49E-13
   0.0600  0.0000  0.0000    1  5.34062E-07 kpt; spin; max resid(k); each band:
   9.94E-13  5.36E-13  3.78E-13  8.84E-13  8.73E-13  7.13E-13  3.92E-13  7.95E-13
   2.65E-13  4.06E-13  7.46E-13  1.83E-13  6.28E-13  4.78E-13  5.52E-13  4.98E-13
   2.53E-13  4.03E-13  5.80E-13  8.50E-13  6.63E-13  5.09E-13  6.00E-13  3.33E-13
   4.71E-13  5.71E-13  7.23E-13  6.81E-13  5.34E-07  3.17E-13
   0.0700  0.0000  0.0000    1  1.10457E-06 kpt; spin; max resid(k); each band:
   9.55E-13  6.09E-13  4.15E-13  9.41E-13  8.75E-13  7.39E-13  3.76E-13  7.61E-13
   2.65E-13  4.11E-13  7.29E-13  9.82E-13  4.92E-13  6.01E-13  6.68E-13  4.85E-13
   2.64E-13  3.44E-13  5.81E-13  7.97E-13  7.03E-13  6.35E-13  6.78E-13  9.26E-13
   5.81E-13  4.19E-13  7.10E-13  8.81E-13  1.10E-06  3.65E-13
   0.0800  0.0000  0.0000    1  2.59060E-06 kpt; spin; max resid(k); each band:
   9.90E-13  6.39E-13  4.15E-13  8.91E-13  8.95E-13  7.44E-13  4.74E-13  7.46E-13
   2.74E-13  4.29E-13  6.16E-13  2.15E-13  6.62E-13  5.36E-13  8.14E-13  3.94E-13
   6.79E-13  8.02E-13  2.41E-13  5.15E-13  3.37E-13  5.99E-13  6.97E-13  4.92E-13
   5.86E-13  2.86E-13  7.48E-13  6.00E-13  2.59E-06  3.94E-13
   0.0900  0.0000  0.0000    1  5.58379E-06 kpt; spin; max resid(k); each band:
   2.05E-13  6.70E-13  4.53E-13  8.74E-13  8.86E-13  7.59E-13  4.66E-13  6.11E-13
   2.47E-13  3.85E-13  6.91E-13  1.77E-13  6.27E-13  5.61E-13  4.74E-13  3.13E-13
   7.50E-13  9.71E-13  4.39E-13  7.03E-13  3.62E-13  4.43E-13  3.72E-13  4.44E-13
   9.44E-13  5.24E-13  8.58E-13  8.34E-13  5.58E-06  4.30E-13
   0.1000  0.0000  0.0000    1  5.26804E-06 kpt; spin; max resid(k); each band:
   9.92E-13  2.97E-13  2.80E-13  9.40E-13  7.91E-13  6.19E-13  2.67E-13  7.08E-13
   1.56E-13  6.98E-13  6.25E-13  4.12E-13  3.69E-13  8.22E-13  1.01E-13  2.48E-13
   7.12E-13  3.63E-13  6.04E-13  2.23E-13  8.85E-13  6.74E-13  2.40E-13  5.85E-13
   7.21E-13  5.74E-13  2.22E-13  3.97E-13  5.27E-06  3.37E-13
   0.1100  0.0000  0.0000    1  1.28830E-07 kpt; spin; max resid(k); each band:
   3.22E-13  4.40E-13  7.68E-13  3.78E-13  2.92E-13  4.31E-13  4.44E-13  8.79E-13
   2.50E-13  1.05E-13  9.77E-13  8.95E-13  4.11E-13  3.99E-13  1.88E-13  7.70E-13
   6.22E-13  2.83E-13  3.11E-13  4.39E-13  4.93E-13  3.11E-13  3.01E-13  4.32E-13
   9.90E-13  2.16E-13  8.73E-13  2.81E-13  1.29E-07  7.03E-13
   0.1200  0.0000  0.0000    1  1.81498E-07 kpt; spin; max resid(k); each band:
   6.76E-13  6.74E-13  5.75E-13  7.84E-13  4.60E-13  5.57E-13  2.80E-13  3.15E-13
   1.58E-13  3.83E-13  4.60E-13  5.27E-13  3.89E-13  3.73E-13  2.32E-13  2.50E-13
   2.98E-13  3.89E-13  3.22E-13  3.84E-13  5.25E-13  4.01E-13  2.50E-13  8.21E-13
   2.71E-13  3.81E-13  7.67E-13  2.92E-13  1.81E-07  5.05E-13
   0.1300  0.0000  0.0000    1  2.25612E-06 kpt; spin; max resid(k); each band:
   7.05E-13  7.21E-13  4.32E-13  4.78E-13  4.55E-13  5.01E-13  2.50E-13  2.57E-13
   2.26E-13  3.29E-13  3.72E-13  6.64E-13  4.05E-13  8.14E-13  2.56E-13  2.34E-13
   2.87E-13  5.32E-13  3.32E-13  4.53E-13  5.01E-13  3.22E-13  7.58E-13  5.92E-13
   3.29E-13  4.91E-13  8.16E-13  9.73E-13  2.26E-06  3.50E-13
   0.1400  0.0000  0.0000    1  4.83282E-05 kpt; spin; max resid(k); each band:
   3.36E-13  2.57E-13  5.97E-13  2.41E-13  6.34E-13  6.23E-13  8.01E-13  2.82E-13
   2.18E-13  3.49E-13  3.64E-13  4.46E-13  3.64E-13  7.89E-13  4.30E-13  1.28E-13
   9.06E-13  5.37E-13  3.16E-13  7.77E-13  7.95E-13  7.12E-13  2.90E-13  6.03E-13
   4.13E-13  2.31E-13  5.26E-13  6.10E-13  4.83E-05  3.18E-13
   0.1500  0.0000  0.0000    1  1.54765E-05 kpt; spin; max resid(k); each band:
   4.07E-13  2.32E-13  9.25E-13  3.05E-13  3.92E-13  7.48E-13  9.80E-13  2.78E-13
   2.00E-13  8.80E-13  2.40E-13  7.63E-13  6.31E-13  8.48E-13  4.45E-13  1.86E-13
   3.89E-13  3.68E-13  5.02E-13  6.10E-13  5.77E-13  3.54E-13  8.95E-13  2.57E-13
   3.19E-13  8.20E-13  4.25E-13  7.36E-13  1.55E-05  4.27E-13
   0.1600  0.0000  0.0000    1  5.12561E-07 kpt; spin; max resid(k); each band:
   4.92E-13  6.17E-13  9.59E-13  2.55E-13  7.90E-13  4.13E-13  3.37E-13  2.48E-13
   3.47E-13  3.58E-13  4.62E-13  6.77E-13  6.52E-13  5.04E-13  9.20E-13  5.01E-13
   3.49E-13  6.25E-13  9.88E-13  6.99E-13  6.72E-13  1.35E-13  3.35E-13  3.08E-13
   9.27E-13  5.38E-13  6.85E-13  1.58E-13  5.13E-07  6.17E-13
   0.1700  0.0000  0.0000    1  5.85273E-07 kpt; spin; max resid(k); each band:
   4.75E-13  6.04E-13  2.26E-13  2.65E-13  8.09E-13  3.91E-13  3.36E-13  2.71E-13
   3.54E-13  3.64E-13  4.96E-13  7.03E-13  6.43E-13  5.10E-13  8.56E-13  3.86E-13
   3.07E-13  6.18E-13  4.87E-13  6.25E-13  6.60E-13  5.66E-13  4.89E-13  3.42E-13
   8.89E-13  5.18E-13  8.37E-13  2.61E-13  5.85E-07  7.36E-13
   0.1800  0.0000  0.0000    1  2.31405E-07 kpt; spin; max resid(k); each band:
   5.27E-13  6.17E-13  5.04E-13  3.84E-13  6.84E-13  2.82E-13  6.28E-13  5.05E-13
   3.85E-13  6.39E-13  9.78E-13  4.85E-13  4.98E-13  1.97E-13  5.28E-13  3.86E-13
   2.87E-13  4.61E-13  8.57E-13  5.94E-13  2.01E-13  4.52E-13  4.08E-13  6.70E-13
   6.14E-13  7.00E-13  1.88E-13  9.44E-13  2.31E-07  4.61E-13
   0.1900  0.0000  0.0000    1  1.31330E-08 kpt; spin; max resid(k); each band:
   3.69E-13  2.71E-13  4.87E-13  2.10E-13  4.23E-13  5.43E-13  5.79E-13  8.82E-13
   3.23E-13  2.96E-13  4.08E-13  8.57E-13  6.24E-13  5.53E-13  5.39E-13  8.79E-13
   4.04E-13  4.06E-13  4.94E-13  2.09E-13  8.63E-13  3.42E-13  1.92E-13  8.23E-13
   5.69E-13  8.77E-13  8.67E-13  8.77E-13  1.31E-08  1.85E-13
   0.2000  0.0000  0.0000    1  7.11972E-10 kpt; spin; max resid(k); each band:
   2.85E-13  2.92E-13  4.63E-13  2.64E-13  4.41E-13  8.86E-13  4.84E-13  6.81E-13
   4.10E-13  1.73E-13  4.45E-13  2.14E-13  4.16E-13  2.43E-13  6.69E-13  4.28E-13
   4.34E-13  3.01E-13  4.99E-13  1.81E-13  5.11E-13  3.56E-13  1.89E-13  8.61E-13
   2.92E-13  3.92E-13  6.50E-13  3.69E-13  7.12E-10  2.39E-13
   0.2100  0.0000  0.0000    1  1.84652E-10 kpt; spin; max resid(k); each band:
   2.63E-13  2.72E-13  4.36E-13  2.30E-13  4.34E-13  9.05E-13  4.97E-13  5.94E-13
   3.72E-13  1.97E-13  4.24E-13  9.42E-13  7.78E-13  4.87E-13  5.39E-13  4.61E-13
   6.23E-13  2.44E-13  3.56E-13  2.32E-13  5.56E-13  3.81E-13  1.72E-13  8.68E-13
   3.26E-13  5.24E-13  8.11E-13  7.04E-13  1.85E-10  3.23E-13
   0.2200  0.0000  0.0000    1  1.70772E-08 kpt; spin; max resid(k); each band:
   8.72E-13  2.25E-13  1.94E-13  2.79E-13  7.88E-13  7.29E-13  6.18E-13  4.02E-13
   3.35E-13  7.92E-13  2.69E-13  9.65E-13  4.07E-13  1.79E-13  4.48E-13  3.55E-13
   8.51E-13  5.37E-13  7.55E-13  5.04E-13  1.93E-13  3.77E-13  2.68E-13  6.05E-13
   1.83E-13  9.69E-13  7.02E-13  9.10E-13  1.71E-08  9.24E-13
   0.2300  0.0000  0.0000    1  2.35094E-08 kpt; spin; max resid(k); each band:
   2.55E-13  3.21E-13  1.95E-13  2.52E-13  7.63E-13  5.45E-13  8.98E-13  4.08E-13
   9.26E-13  8.17E-13  2.75E-13  8.04E-13  4.30E-13  1.73E-13  3.39E-13  5.38E-13
   7.17E-13  4.26E-13  7.64E-13  2.81E-13  1.76E-13  5.03E-13  5.72E-13  5.99E-13
   2.73E-13  2.06E-13  7.47E-13  8.46E-13  2.35E-08  8.12E-13
   0.2400  0.0000  0.0000    1  2.11027E-10 kpt; spin; max resid(k); each band:
   2.92E-13  2.51E-13  5.33E-13  3.73E-13  2.64E-13  6.55E-13  6.37E-13  2.06E-13
   3.46E-13  6.56E-13  3.14E-13  1.96E-13  8.45E-13  6.11E-13  2.35E-13  7.09E-13
   5.22E-13  1.69E-13  2.74E-13  8.39E-13  5.50E-13  6.40E-13  3.23E-13  9.12E-13
   1.35E-13  9.81E-13  7.94E-13  2.89E-13  2.11E-10  5.84E-13
   0.2500  0.0000  0.0000    1  1.17924E-12 kpt; spin; max resid(k); each band:
   2.53E-13  3.19E-13  6.36E-13  2.87E-13  2.23E-13  6.26E-13  7.23E-13  2.59E-13
   3.79E-13  4.41E-13  3.55E-13  2.03E-13  6.09E-13  5.93E-13  8.60E-13  4.73E-13
   2.68E-13  7.02E-13  2.66E-13  5.94E-13  2.42E-13  7.73E-13  4.87E-13  5.32E-13
   2.46E-13  2.73E-13  9.55E-13  9.78E-13  1.18E-12  4.77E-13
   0.2600  0.0000  0.0000    1  9.78396E-13 kpt; spin; max resid(k); each band:
   9.78E-13  3.65E-13  7.38E-13  3.05E-13  1.88E-13  8.22E-13  6.13E-13  3.00E-13
   4.43E-13  4.17E-13  3.37E-13  1.77E-13  5.54E-13  5.35E-13  7.48E-13  4.98E-13
   4.08E-13  8.15E-13  2.75E-13  5.40E-13  2.02E-13  2.53E-13  3.33E-13  5.17E-13
   3.64E-13  2.58E-13  7.22E-13  7.18E-13  5.19E-13  8.91E-13
   0.2700  0.0000  0.0000    1  9.95153E-13 kpt; spin; max resid(k); each band:
   9.53E-13  4.93E-13  5.62E-13  2.01E-13  4.26E-13  6.04E-13  2.39E-13  5.03E-13
   4.39E-13  1.81E-13  3.84E-13  9.18E-13  4.06E-13  6.02E-13  2.87E-13  7.08E-13
   3.49E-13  2.90E-13  4.97E-13  3.07E-13  4.39E-13  4.82E-13  6.98E-13  7.22E-13
   7.84E-13  7.68E-13  1.53E-13  9.93E-13  9.95E-13  3.62E-13
   0.2800  0.0000  0.0000    1  9.71615E-13 kpt; spin; max resid(k); each band:
   8.93E-13  6.25E-13  5.41E-13  2.74E-13  3.37E-13  4.18E-13  9.39E-13  4.10E-13
   3.93E-13  2.21E-13  4.06E-13  8.72E-13  3.14E-13  5.35E-13  2.58E-13  6.15E-13
   4.06E-13  3.10E-13  8.11E-13  5.10E-13  4.19E-13  4.06E-13  5.80E-13  5.53E-13
   2.09E-13  2.07E-13  9.72E-13  9.08E-13  5.27E-13  7.61E-13
   0.2900  0.0000  0.0000    1  9.92862E-13 kpt; spin; max resid(k); each band:
   9.04E-13  6.66E-13  5.33E-13  5.01E-13  2.96E-13  3.21E-13  9.64E-13  2.74E-13
   3.58E-13  2.25E-13  4.40E-13  7.47E-13  2.14E-13  3.16E-13  3.44E-13  6.58E-13
   6.22E-13  2.50E-13  6.18E-13  8.42E-13  2.89E-13  5.78E-13  7.20E-13  3.97E-13
   2.74E-13  9.93E-13  7.85E-13  9.26E-13  4.15E-13  8.21E-13
   0.3000  0.0000  0.0000    1  9.31654E-13 kpt; spin; max resid(k); each band:
   1.69E-13  5.99E-13  5.12E-13  6.29E-13  2.69E-13  3.32E-13  7.29E-13  2.53E-13
   3.12E-13  2.13E-13  3.87E-13  3.12E-13  2.56E-13  6.08E-13  4.30E-13  6.28E-13
   9.32E-13  2.69E-13  8.92E-13  1.75E-13  2.19E-13  3.26E-13  1.70E-13  6.15E-13
   3.27E-13  3.44E-13  3.30E-13  2.39E-13  6.98E-13  3.81E-13
   0.3100  0.0000  0.0000    1  9.95980E-13 kpt; spin; max resid(k); each band:
   4.56E-13  8.29E-13  8.22E-13  3.90E-13  9.63E-13  2.82E-13  3.30E-13  2.58E-13
   5.58E-13  4.61E-13  4.51E-13  3.93E-13  2.60E-13  7.09E-13  9.96E-13  8.39E-13
   3.36E-13  9.57E-13  5.69E-13  4.84E-13  4.81E-13  3.41E-13  4.27E-13  3.48E-13
   7.69E-13  8.09E-13  3.46E-13  6.84E-13  5.88E-13  7.40E-13
   0.3200  0.0000  0.0000    1  1.28470E-11 kpt; spin; max resid(k); each band:
   4.40E-13  8.32E-13  8.12E-13  3.49E-13  9.63E-13  3.04E-13  3.15E-13  4.37E-13
   3.97E-13  4.69E-13  4.82E-13  4.02E-13  1.58E-13  3.11E-13  3.34E-13  1.66E-13
   8.95E-13  1.67E-13  6.82E-13  5.14E-13  3.82E-13  5.57E-13  7.09E-13  4.76E-13
   5.06E-13  3.70E-13  1.78E-13  5.55E-13  1.28E-11  2.38E-13
   0.3300  0.0000  0.0000    1  3.44644E-09 kpt; spin; max resid(k); each band:
   4.32E-13  8.26E-13  8.01E-13  3.14E-13  9.63E-13  3.41E-13  3.97E-13  4.44E-13
   3.10E-13  5.21E-13  5.06E-13  3.99E-13  6.77E-13  6.17E-13  3.86E-13  2.42E-13
   5.20E-13  2.05E-13  6.47E-13  6.16E-13  3.96E-13  6.99E-13  9.28E-13  3.93E-13
   7.71E-13  6.29E-13  3.12E-13  9.11E-13  3.45E-09  5.07E-13
   0.3400  0.0000  0.0000    1  3.96977E-09 kpt; spin; max resid(k); each band:
   2.92E-13  2.97E-13  4.75E-13  1.49E-13  6.31E-13  8.12E-13  3.31E-13  2.89E-13
   7.20E-13  1.39E-13  5.21E-13  9.95E-13  3.10E-13  9.58E-13  6.19E-13  8.64E-13
   5.19E-13  7.58E-13  8.18E-13  8.40E-13  9.35E-13  8.83E-13  3.71E-13  6.24E-13
   9.18E-13  6.50E-13  2.54E-13  4.73E-13  3.97E-09  9.05E-13
   0.3500  0.0000  0.0000    1  6.91386E-08 kpt; spin; max resid(k); each band:
   3.04E-13  3.34E-13  4.84E-13  1.55E-13  6.49E-13  9.72E-13  3.77E-13  3.11E-13
   7.26E-13  2.30E-13  4.80E-13  1.55E-13  9.43E-13  8.07E-13  7.81E-13  3.58E-13
   5.22E-13  8.88E-13  3.94E-13  6.14E-13  1.73E-13  2.63E-13  4.92E-13  8.39E-13
   7.33E-13  4.80E-13  3.42E-13  8.46E-13  6.91E-08  4.92E-13
   0.3600  0.0000  0.0000    1  8.92779E-07 kpt; spin; max resid(k); each band:
   2.71E-13  6.33E-13  4.10E-13  5.50E-13  8.07E-13  2.32E-13  3.22E-13  6.14E-13
   4.90E-13  2.75E-13  2.93E-13  2.77E-13  9.96E-13  7.22E-13  6.77E-13  2.76E-13
   6.33E-13  9.89E-13  4.74E-13  9.93E-13  6.23E-13  5.92E-13  1.63E-13  8.32E-13
   8.23E-13  6.49E-13  2.04E-13  6.42E-13  8.93E-07  2.48E-13
   0.3700  0.0000  0.0000    1  1.27991E-06 kpt; spin; max resid(k); each band:
   3.01E-13  6.76E-13  9.82E-13  5.79E-13  7.75E-13  2.40E-13  3.10E-13  5.73E-13
   5.16E-13  3.11E-13  3.08E-13  2.99E-13  8.78E-13  9.12E-13  2.22E-13  2.40E-13
   7.52E-13  2.43E-13  2.79E-13  8.86E-13  7.70E-13  6.73E-13  2.43E-13  8.93E-13
   8.13E-13  4.19E-13  8.89E-13  9.77E-13  1.28E-06  5.85E-13
   0.3800  0.0000  0.0000    1  6.41164E-06 kpt; spin; max resid(k); each band:
   6.42E-13  3.36E-13  6.91E-13  7.93E-13  4.76E-13  6.09E-13  5.57E-13  7.30E-13
   4.82E-13  8.95E-13  9.25E-13  6.22E-13  3.53E-13  8.78E-13  6.26E-13  4.48E-13
   3.05E-13  4.04E-13  3.22E-13  4.42E-13  2.80E-13  2.20E-13  3.43E-13  6.91E-13
   8.02E-13  9.48E-13  6.66E-13  6.80E-13  6.41E-06  3.95E-13
   0.3900  0.0000  0.0000    1  1.17590E-05 kpt; spin; max resid(k); each band:
   6.79E-13  3.32E-13  6.35E-13  8.08E-13  4.62E-13  6.12E-13  5.47E-13  7.76E-13
   4.36E-13  9.12E-13  9.53E-13  6.25E-13  4.77E-13  9.76E-13  5.15E-13  4.46E-13
   2.71E-13  3.91E-13  3.93E-13  5.52E-13  3.20E-13  2.28E-13  3.16E-13  7.05E-13
   6.98E-13  2.99E-13  7.13E-13  2.68E-13  1.18E-05  8.97E-13
   0.4000  0.0000  0.0000    1  3.46924E-06 kpt; spin; max resid(k); each band:
   7.20E-13  2.81E-13  5.48E-13  7.81E-13  4.43E-13  6.05E-13  5.40E-13  8.15E-13
   3.98E-13  9.17E-13  9.81E-13  6.86E-13  5.11E-13  7.09E-13  4.30E-13  4.43E-13
   2.49E-13  3.76E-13  3.62E-13  5.49E-13  3.62E-13  2.46E-13  2.80E-13  7.19E-13
   9.00E-13  4.39E-13  9.81E-13  4.67E-13  3.47E-06  4.93E-13
   0.4100  0.0000  0.0000    1  2.61955E-05 kpt; spin; max resid(k); each band:
   9.21E-13  2.61E-13  6.36E-13  2.97E-13  3.21E-13  4.00E-13  3.30E-13  5.59E-13
   6.52E-13  6.25E-13  4.85E-13  1.87E-13  3.76E-13  2.02E-13  3.96E-13  4.31E-13
   2.04E-13  5.64E-13  3.62E-13  5.91E-13  2.29E-13  3.05E-13  7.35E-13  8.27E-13
   3.20E-13  4.15E-13  9.73E-13  8.35E-13  3.18E-13  2.62E-05
   0.4200  0.0000  0.0000    1  3.86852E-05 kpt; spin; max resid(k); each band:
   3.78E-13  4.87E-13  2.14E-13  3.20E-13  2.83E-13  4.69E-13  3.17E-13  4.31E-13
   8.10E-13  6.73E-13  1.97E-13  3.66E-13  5.39E-13  7.79E-13  2.02E-13  1.78E-13
   2.42E-13  1.52E-13  4.48E-13  2.36E-13  4.97E-13  1.43E-13  6.42E-13  5.91E-13
   9.75E-13  3.97E-13  7.02E-13  3.03E-13  4.37E-13  3.87E-05
   0.4300  0.0000  0.0000    1  6.08738E-05 kpt; spin; max resid(k); each band:
   3.80E-13  5.63E-13  2.14E-13  2.94E-13  3.05E-13  3.87E-13  2.88E-13  3.50E-13
   4.18E-13  5.01E-13  2.14E-13  3.12E-13  4.68E-13  5.57E-13  8.63E-13  9.10E-13
   2.15E-13  8.98E-13  3.41E-13  1.78E-13  4.46E-13  9.57E-13  5.49E-13  7.87E-13
   9.00E-13  9.63E-13  2.92E-13  7.86E-13  5.15E-13  6.09E-05
   0.4400  0.0000  0.0000    1  5.01977E-05 kpt; spin; max resid(k); each band:
   3.77E-13  6.24E-13  2.25E-13  3.02E-13  3.22E-13  3.37E-13  3.24E-13  3.12E-13
   4.05E-13  5.61E-13  2.19E-13  2.96E-13  5.32E-13  4.53E-13  7.72E-13  8.48E-13
   1.96E-13  7.91E-13  2.83E-13  1.43E-13  3.56E-13  2.72E-13  5.48E-13  7.51E-13
   7.40E-13  3.51E-13  2.63E-13  6.66E-13  4.20E-13  5.02E-05
   0.4500  0.0000  0.0000    1  2.77395E-05 kpt; spin; max resid(k); each band:
   3.71E-13  6.95E-13  2.38E-13  3.11E-13  3.41E-13  3.28E-13  3.43E-13  2.79E-13
   5.46E-13  5.35E-13  2.16E-13  2.57E-13  4.18E-13  3.69E-13  7.65E-13  2.02E-13
   9.39E-13  6.76E-13  3.00E-13  7.10E-13  2.80E-13  2.47E-13  4.63E-13  7.06E-13
   5.53E-13  4.97E-13  1.99E-13  9.67E-13  9.47E-13  2.77E-05
   0.4600  0.0000  0.0000    1  1.38015E-05 kpt; spin; max resid(k); each band:
   3.62E-13  7.52E-13  2.45E-13  3.14E-13  3.67E-13  3.34E-13  3.45E-13  2.59E-13
   6.52E-13  3.65E-13  9.63E-13  2.11E-13  2.83E-13  2.98E-13  7.71E-13  1.93E-13
   8.25E-13  5.78E-13  5.46E-13  6.02E-13  2.19E-13  2.79E-13  3.47E-13  6.84E-13
   3.76E-13  6.49E-13  7.87E-13  4.30E-13  6.68E-13  1.38E-05
   0.4700  0.0000  0.0000    1  2.60918E-05 kpt; spin; max resid(k); each band:
   3.56E-13  7.79E-13  5.34E-13  3.87E-13  3.93E-13  3.71E-13  3.47E-13  2.49E-13
   5.58E-13  3.82E-13  8.44E-13  1.66E-13  9.45E-13  2.27E-13  7.57E-13  1.93E-13
   7.70E-13  5.18E-13  5.71E-13  4.76E-13  9.21E-13  2.47E-13  8.25E-13  6.24E-13
   7.79E-13  4.91E-13  8.98E-13  5.85E-13  7.69E-12  2.61E-05
   0.4800  0.0000  0.0000    1  1.63002E-05 kpt; spin; max resid(k); each band:
   3.41E-13  3.82E-13  2.24E-13  5.64E-13  3.94E-13  4.47E-13  4.00E-13  6.05E-13
   6.81E-13  3.92E-13  5.93E-13  5.87E-13  8.58E-13  6.39E-13  2.73E-13  4.90E-13
   3.12E-13  6.99E-13  8.41E-13  4.68E-13  6.09E-13  2.89E-13  3.42E-13  4.59E-13
   2.74E-13  9.66E-13  6.68E-13  9.35E-13  3.40E-11  1.63E-05
   0.4900  0.0000  0.0000    1  8.70437E-06 kpt; spin; max resid(k); each band:
   4.08E-13  4.80E-13  2.24E-13  8.60E-13  3.97E-13  4.07E-13  4.26E-13  5.37E-13
   5.93E-13  4.33E-13  4.92E-13  4.59E-13  9.24E-13  6.06E-13  8.88E-13  4.28E-13
   4.74E-13  6.01E-13  7.34E-13  6.39E-13  5.19E-13  2.55E-13  4.20E-13  2.28E-13
   8.92E-13  3.82E-13  4.96E-13  9.60E-13  3.26E-11  8.70E-06
   0.5000  0.0000  0.0000    1  4.18761E-06 kpt; spin; max resid(k); each band:
   4.78E-13  5.40E-13  2.49E-13  8.39E-13  4.07E-13  4.07E-13  4.82E-13  5.42E-13
   4.44E-13  4.36E-13  4.71E-13  3.76E-13  8.20E-13  6.38E-13  8.73E-13  4.83E-13
   6.12E-13  8.35E-13  4.27E-13  7.77E-13  9.05E-13  5.08E-13  7.33E-13  5.64E-13
   6.19E-13  6.78E-13  4.01E-13  4.85E-13  6.07E-12  4.19E-06
   0.5000  0.0100  0.0000    1  5.74054E-06 kpt; spin; max resid(k); each band:
   3.91E-13  6.03E-13  8.44E-13  2.37E-13  3.95E-13  3.53E-13  4.68E-13  4.69E-13
   5.67E-13  3.31E-13  4.83E-13  3.88E-13  5.70E-13  8.77E-13  8.42E-13  6.07E-13
   3.57E-13  8.24E-13  8.52E-13  3.02E-13  4.88E-13  3.26E-13  6.09E-13  5.85E-13
   7.25E-13  6.67E-13  3.77E-13  8.30E-13  5.74E-06  8.10E-07
   0.5000  0.0200  0.0000    1  3.39948E-06 kpt; spin; max resid(k); each band:
   2.64E-13  9.96E-13  5.96E-13  6.82E-13  6.12E-13  6.12E-13  8.81E-13  3.89E-13
   4.00E-13  2.94E-13  4.91E-13  3.34E-13  4.76E-13  9.71E-13  5.41E-13  7.93E-13
   3.75E-13  3.68E-13  8.08E-13  5.63E-13  1.51E-13  2.34E-13  8.27E-13  2.93E-13
   9.83E-13  6.87E-13  7.14E-13  9.07E-13  2.90E-07  3.40E-06
   0.5000  0.0300  0.0000    1  2.26580E-06 kpt; spin; max resid(k); each band:
   2.71E-13  3.53E-13  6.22E-13  4.18E-13  5.91E-13  8.46E-13  5.72E-13  3.20E-13
   8.38E-13  4.90E-13  2.54E-13  2.23E-13  6.60E-13  8.13E-13  8.58E-13  6.46E-13
   5.71E-13  4.98E-13  1.54E-13  2.72E-13  5.07E-13  4.08E-13  3.09E-13  8.18E-13
   7.30E-13  7.59E-13  8.61E-13  7.15E-13  2.39E-08  2.27E-06
   0.5000  0.0400  0.0000    1  1.78885E-06 kpt; spin; max resid(k); each band:
   6.84E-13  3.12E-13  4.70E-13  5.20E-13  9.98E-13  3.83E-13  8.70E-13  7.09E-13
   7.04E-13  6.16E-13  5.69E-13  2.09E-13  8.38E-13  3.87E-13  6.51E-13  2.34E-13
   5.62E-13  8.71E-13  9.99E-13  4.23E-13  2.10E-13  2.22E-13  8.97E-13  1.90E-13
   6.36E-13  2.46E-13  4.21E-13  8.29E-13  1.79E-07  1.79E-06
   0.5000  0.0500  0.0000    1  1.47788E-06 kpt; spin; max resid(k); each band:
   4.02E-13  2.59E-13  6.70E-13  4.13E-13  9.21E-13  5.62E-13  9.79E-13  2.26E-13
   5.49E-13  5.96E-13  4.71E-13  5.37E-13  8.09E-13  5.35E-13  5.05E-13  5.11E-13
   3.91E-13  6.04E-13  8.11E-13  3.83E-13  6.83E-13  3.21E-13  5.20E-13  8.37E-13
   5.73E-13  1.57E-13  3.82E-13  7.60E-13  1.11E-07  1.48E-06
   0.5000  0.0600  0.0000    1  1.05451E-06 kpt; spin; max resid(k); each band:
   3.69E-13  2.81E-13  6.51E-13  3.85E-13  8.13E-13  4.94E-13  9.42E-13  9.90E-13
   5.50E-13  7.25E-13  5.18E-13  5.36E-13  8.43E-13  4.85E-13  5.05E-13  4.41E-13
   3.79E-13  5.31E-13  5.59E-13  2.72E-13  8.60E-13  9.81E-13  5.93E-13  8.37E-13
   4.76E-13  8.78E-13  4.34E-13  3.33E-13  6.29E-08  1.05E-06
   0.5000  0.0700  0.0000    1  7.07084E-07 kpt; spin; max resid(k); each band:
   3.41E-13  3.35E-13  6.47E-13  3.32E-13  6.78E-13  4.27E-13  9.11E-13  8.56E-13
   6.06E-13  7.68E-13  5.81E-13  5.55E-13  6.93E-13  4.29E-13  4.90E-13  4.22E-13
   2.97E-13  3.92E-13  4.43E-13  2.06E-13  1.80E-13  6.49E-13  4.78E-13  9.49E-13
   4.65E-13  7.91E-13  4.89E-13  4.73E-13  4.00E-08  7.07E-07
   0.5000  0.0800  0.0000    1  6.93580E-07 kpt; spin; max resid(k); each band:
   7.50E-13  2.83E-13  5.69E-13  7.58E-13  7.08E-13  8.53E-13  4.78E-13  2.74E-13
   8.89E-13  7.98E-13  2.59E-13  1.94E-13  5.73E-13  8.51E-13  3.50E-13  6.44E-13
   3.66E-13  8.00E-13  6.47E-13  5.28E-13  6.34E-13  1.93E-13  4.37E-13  2.73E-13
   7.64E-13  4.47E-13  7.17E-13  4.55E-13  1.21E-08  6.94E-07
   0.5000  0.0900  0.0000    1  1.39524E-06 kpt; spin; max resid(k); each band:
   4.61E-13  6.18E-13  7.79E-13  2.21E-13  8.95E-13  7.82E-13  3.62E-13  6.28E-13
   7.50E-13  4.59E-13  6.40E-13  6.50E-13  2.87E-13  2.51E-13  2.54E-13  5.66E-13
   1.37E-13  4.87E-13  5.90E-13  4.05E-13  6.70E-13  7.15E-13  9.45E-13  3.32E-13
   8.54E-13  8.45E-13  8.05E-13  5.14E-13  3.78E-08  1.40E-06
   0.5000  0.1000  0.0000    1  7.61629E-08 kpt; spin; max resid(k); each band:
   3.15E-13  7.52E-13  2.81E-13  7.44E-13  9.19E-13  2.88E-13  4.26E-13  2.77E-13
   6.89E-13  7.23E-13  6.70E-13  3.77E-13  9.21E-13  3.44E-13  4.18E-13  2.95E-13
   8.46E-13  2.76E-13  3.05E-13  5.84E-13  6.47E-13  5.93E-13  4.52E-13  2.97E-13
   6.20E-13  8.19E-13  7.15E-13  6.53E-13  1.01E-08  7.62E-08
   0.5000  0.1100  0.0000    1  7.31592E-07 kpt; spin; max resid(k); each band:
   6.74E-13  9.71E-13  4.75E-13  9.98E-13  3.08E-13  5.26E-13  3.68E-13  7.96E-13
   4.62E-13  2.37E-13  3.17E-13  2.34E-13  2.41E-13  6.59E-13  9.87E-13  7.02E-13
   9.38E-13  8.54E-13  3.03E-13  7.60E-13  9.59E-13  3.07E-13  6.12E-13  7.27E-13
   2.50E-13  8.64E-13  7.17E-13  2.88E-13  2.63E-08  7.32E-07
   0.5000  0.1200  0.0000    1  8.40058E-09 kpt; spin; max resid(k); each band:
   2.72E-13  3.68E-13  2.06E-13  7.49E-13  8.16E-13  3.28E-13  6.08E-13  2.66E-13
   3.92E-13  8.26E-13  4.46E-13  9.32E-13  2.64E-13  2.96E-13  4.31E-13  8.86E-13
   4.68E-13  2.07E-13  2.27E-13  3.40E-13  6.22E-13  8.76E-13  8.39E-13  8.25E-13
   2.28E-13  8.65E-13  2.86E-13  2.89E-13  1.58E-09  8.40E-09
   0.5000  0.1300  0.0000    1  4.85349E-09 kpt; spin; max resid(k); each band:
   2.47E-13  4.11E-13  7.86E-13  6.89E-13  7.50E-13  3.69E-13  5.88E-13  2.60E-13
   2.77E-13  7.56E-13  5.03E-13  8.39E-13  3.01E-13  3.10E-13  3.97E-13  7.73E-13
   4.95E-13  2.68E-13  3.03E-13  2.59E-13  7.04E-13  6.82E-13  7.96E-13  2.40E-13
   3.83E-13  2.37E-13  4.10E-13  8.96E-13  1.12E-09  4.85E-09
   0.5000  0.1400  0.0000    1  1.62469E-08 kpt; spin; max resid(k); each band:
   3.11E-13  4.87E-13  3.61E-13  2.84E-13  8.50E-13  6.02E-13  8.84E-13  7.86E-13
   7.75E-13  3.90E-13  8.89E-13  8.00E-13  4.10E-13  4.40E-13  8.77E-13  4.17E-13
   5.81E-13  9.20E-13  2.86E-13  2.21E-13  3.89E-13  6.43E-13  6.29E-13  3.39E-13
   5.28E-13  7.52E-13  8.67E-13  8.11E-13  3.09E-10  1.62E-08
   0.5000  0.1500  0.0000    1  1.24161E-08 kpt; spin; max resid(k); each band:
   4.69E-13  5.23E-13  3.74E-13  4.61E-13  3.40E-13  3.75E-13  2.83E-13  3.09E-13
   3.54E-13  7.69E-13  1.31E-13  2.82E-13  4.60E-13  3.47E-13  2.96E-13  7.66E-13
   5.74E-13  3.68E-13  2.50E-13  9.66E-13  1.94E-13  1.96E-13  6.54E-13  4.84E-13
   2.90E-13  6.00E-13  1.79E-13  4.72E-13  1.73E-10  1.24E-08
   0.5000  0.1600  0.0000    1  2.55829E-09 kpt; spin; max resid(k); each band:
   7.77E-13  2.77E-13  3.41E-13  4.09E-13  1.94E-13  2.75E-13  2.20E-13  9.99E-13
   1.94E-13  5.93E-13  4.86E-13  6.87E-13  7.22E-13  7.45E-13  2.24E-13  7.88E-13
   4.12E-13  1.29E-13  4.37E-13  7.79E-13  9.44E-13  5.60E-13  2.72E-13  7.80E-13
   2.55E-13  9.43E-13  4.93E-13  3.41E-13  5.48E-13  2.56E-09
   0.5000  0.1700  0.0000    1  1.53999E-09 kpt; spin; max resid(k); each band:
   8.15E-13  2.82E-13  3.30E-13  4.50E-13  2.03E-13  2.90E-13  2.07E-13  9.92E-13
   1.97E-13  6.42E-13  5.20E-13  6.58E-13  6.73E-13  8.22E-13  2.15E-13  7.14E-13
   4.72E-13  7.94E-13  4.68E-13  2.70E-13  8.14E-13  5.94E-13  2.58E-13  7.62E-13
   2.45E-13  8.56E-13  3.88E-13  3.99E-13  7.19E-13  1.54E-09
   0.5000  0.1800  0.0000    1  7.70257E-08 kpt; spin; max resid(k); each band:
   3.37E-13  5.10E-13  4.93E-13  4.76E-13  5.19E-13  4.51E-13  8.00E-13  4.12E-13
   5.29E-13  9.85E-13  1.64E-13  2.85E-13  8.22E-13  7.26E-13  6.11E-13  3.40E-13
   3.03E-13  9.82E-13  2.28E-13  5.85E-13  6.78E-13  5.00E-13  5.20E-13  4.31E-13
   3.41E-13  3.43E-13  4.15E-13  3.30E-13  3.17E-10  7.70E-08
   0.5000  0.1900  0.0000    1  1.04199E-08 kpt; spin; max resid(k); each band:
   4.07E-13  6.70E-13  3.57E-13  9.73E-13  4.03E-13  4.23E-13  2.47E-13  3.73E-13
   4.77E-13  3.41E-13  7.53E-13  5.26E-13  8.58E-13  9.49E-13  3.81E-13  7.21E-13
   6.99E-13  2.91E-13  2.66E-13  4.93E-13  3.32E-13  2.67E-13  5.13E-13  8.91E-13
   9.24E-13  4.41E-13  2.40E-13  7.74E-13  2.97E-11  1.04E-08
   0.5000  0.2000  0.0000    1  3.43742E-09 kpt; spin; max resid(k); each band:
   4.13E-13  6.02E-13  3.51E-13  9.17E-13  3.92E-13  4.42E-13  2.39E-13  4.07E-13
   3.55E-13  2.88E-13  8.37E-13  4.72E-13  6.93E-13  8.33E-13  3.64E-13  7.42E-13
   7.44E-13  9.13E-13  2.89E-13  5.86E-13  3.38E-13  3.70E-13  6.29E-13  9.13E-13
   8.35E-13  3.34E-13  3.75E-13  3.78E-13  2.61E-11  3.44E-09
   0.5000  0.2100  0.0000    1  2.21393E-09 kpt; spin; max resid(k); each band:
   6.25E-13  4.64E-13  3.54E-13  7.99E-13  7.40E-13  4.22E-13  2.41E-13  7.47E-13
   6.83E-13  3.03E-13  8.43E-13  3.41E-13  3.50E-13  9.12E-13  6.38E-13  4.47E-13
   9.09E-13  5.54E-13  5.76E-13  6.17E-13  2.23E-13  7.84E-13  5.71E-13  5.63E-13
   4.98E-13  2.23E-13  8.16E-13  3.45E-13  6.72E-13  2.21E-09
   0.5000  0.2200  0.0000    1  1.01579E-09 kpt; spin; max resid(k); each band:
   5.83E-13  5.40E-13  4.66E-13  1.71E-13  7.83E-13  4.75E-13  7.76E-13  7.46E-13
   6.78E-13  2.83E-13  8.10E-13  3.42E-13  2.83E-13  9.33E-13  6.25E-13  5.58E-13
   7.85E-13  9.35E-13  4.36E-13  6.64E-13  3.61E-13  9.89E-13  6.12E-13  5.60E-13
   6.41E-13  3.03E-13  3.65E-13  7.66E-13  2.83E-13  1.02E-09
   0.5000  0.2300  0.0000    1  7.34271E-10 kpt; spin; max resid(k); each band:
   4.60E-13  7.71E-13  4.27E-13  4.90E-13  9.90E-13  2.67E-13  1.56E-13  4.98E-13
   6.43E-13  4.09E-13  1.86E-13  5.98E-13  3.14E-13  3.03E-13  8.43E-13  4.71E-13
   2.84E-13  4.58E-13  6.77E-13  5.91E-13  2.42E-13  4.17E-13  4.51E-13  8.60E-13
   8.94E-13  2.48E-13  5.31E-13  7.79E-13  5.46E-13  7.34E-10
   0.5000  0.2400  0.0000    1  1.18239E-08 kpt; spin; max resid(k); each band:
   9.93E-13  7.15E-13  3.66E-13  5.68E-13  8.81E-13  3.44E-13  3.68E-13  4.18E-13
   2.45E-13  2.32E-13  1.79E-13  7.17E-13  5.32E-13  8.49E-13  3.72E-13  5.08E-13
   3.84E-13  4.89E-13  6.94E-13  1.39E-13  7.29E-13  6.62E-13  3.69E-13  2.37E-13
   7.49E-13  4.12E-13  9.07E-13  4.20E-13  7.73E-13  1.18E-08
   0.5000  0.2500  0.0000    1  5.86568E-09 kpt; spin; max resid(k); each band:
   3.46E-13  7.30E-13  4.60E-13  3.66E-13  7.81E-13  3.62E-13  7.26E-13  4.94E-13
   8.80E-13  6.18E-13  5.48E-13  2.18E-13  6.90E-13  9.33E-13  3.24E-13  8.74E-13
   5.35E-13  4.24E-13  2.75E-13  3.33E-13  2.28E-13  6.38E-13  8.42E-13  7.93E-13
   6.78E-13  5.64E-13  4.10E-13  5.01E-13  3.00E-12  5.87E-09
   0.5000  0.2600  0.0000    1  2.83901E-09 kpt; spin; max resid(k); each band:
   2.95E-13  6.34E-13  4.59E-13  3.60E-13  7.72E-13  3.17E-13  6.67E-13  4.84E-13
   8.21E-13  5.41E-13  5.02E-13  8.78E-13  6.34E-13  8.43E-13  3.11E-13  1.97E-13
   5.83E-13  3.85E-13  2.23E-13  3.72E-13  2.12E-13  6.67E-13  8.20E-13  7.81E-13
   7.65E-13  6.03E-13  8.24E-13  4.22E-13  2.65E-12  2.84E-09
   0.5000  0.2700  0.0000    1  1.33579E-09 kpt; spin; max resid(k); each band:
   2.98E-13  5.06E-13  5.15E-13  3.64E-13  7.72E-13  9.65E-13  6.08E-13  4.80E-13
   7.62E-13  4.64E-13  4.87E-13  7.26E-13  5.64E-13  7.81E-13  2.85E-13  2.04E-13
   6.23E-13  3.43E-13  1.86E-13  4.10E-13  1.85E-13  7.65E-13  8.18E-13  7.46E-13
   8.73E-13  6.34E-13  4.01E-13  5.80E-13  2.28E-12  1.34E-09
   0.5000  0.2800  0.0000    1  1.00414E-10 kpt; spin; max resid(k); each band:
   5.12E-13  5.99E-13  7.48E-13  6.69E-13  8.44E-13  2.82E-13  4.60E-13  4.15E-13
   4.30E-13  2.42E-13  4.83E-13  3.27E-13  2.39E-13  9.82E-13  5.65E-13  5.50E-13
   9.72E-13  3.28E-13  7.42E-13  4.19E-13  6.92E-13  4.72E-13  3.22E-13  7.25E-13
   2.79E-13  2.25E-13  9.06E-13  9.13E-13  7.22E-13  1.00E-10
   0.5000  0.2900  0.0000    1  6.24590E-11 kpt; spin; max resid(k); each band:
   5.54E-13  9.08E-13  6.80E-13  9.64E-13  7.56E-13  2.51E-13  3.54E-13  6.79E-13
   4.12E-13  6.91E-13  2.57E-13  5.28E-13  2.59E-13  2.67E-13  4.99E-13  5.59E-13
   3.47E-13  3.00E-13  6.86E-13  2.18E-13  2.13E-13  3.25E-13  1.81E-13  2.03E-13
   4.76E-13  9.86E-13  6.18E-13  2.94E-13  6.22E-13  6.25E-11
   0.5000  0.3000  0.0000    1  4.90561E-10 kpt; spin; max resid(k); each band:
   6.04E-13  5.55E-13  3.67E-13  3.31E-13  7.90E-13  3.63E-13  7.28E-13  9.92E-13
   2.62E-13  9.71E-13  6.37E-13  6.50E-13  6.05E-13  2.10E-13  7.10E-13  1.40E-13
   1.63E-13  3.85E-13  3.20E-13  5.79E-13  1.86E-13  4.40E-13  4.62E-13  2.24E-13
   3.31E-13  7.27E-13  9.15E-13  7.47E-13  1.49E-11  4.91E-10
   0.5000  0.3100  0.0000    1  7.26285E-11 kpt; spin; max resid(k); each band:
   3.94E-13  8.10E-13  3.88E-13  9.16E-13  8.13E-13  2.66E-13  6.49E-13  4.92E-13
   3.92E-13  2.62E-13  8.92E-13  3.74E-13  7.44E-13  3.33E-13  5.06E-13  2.21E-13
   2.79E-13  5.92E-13  4.45E-13  7.68E-13  6.18E-13  3.36E-13  2.60E-13  4.69E-13
   4.38E-13  3.55E-13  9.84E-13  8.13E-13  1.08E-11  7.26E-11
   0.5000  0.3200  0.0000    1  2.07143E-10 kpt; spin; max resid(k); each band:
   4.25E-13  8.82E-13  3.10E-13  9.02E-13  9.11E-13  2.53E-13  3.04E-13  5.20E-13
   7.62E-13  2.65E-13  8.62E-13  5.76E-13  9.20E-13  4.72E-13  6.20E-13  2.61E-13
   7.87E-13  3.47E-13  4.52E-13  8.57E-13  4.81E-13  4.13E-13  8.40E-13  3.84E-13
   5.09E-13  6.15E-13  9.61E-13  9.51E-13  5.15E-12  2.07E-10
   0.5000  0.3300  0.0000    1  2.57951E-11 kpt; spin; max resid(k); each band:
   2.68E-13  6.85E-13  2.29E-13  3.23E-13  6.03E-13  7.62E-13  4.48E-13  3.24E-13
   8.04E-13  5.90E-13  1.84E-13  2.70E-13  1.74E-13  1.84E-13  9.85E-13  5.30E-13
   3.04E-13  5.55E-13  7.40E-13  2.84E-13  4.06E-13  4.35E-13  3.63E-13  6.74E-13
   2.06E-13  6.63E-13  5.89E-13  9.17E-13  3.64E-12  2.58E-11
   0.5000  0.3400  0.0000    1  2.18896E-11 kpt; spin; max resid(k); each band:
   2.69E-13  8.43E-13  5.25E-13  6.64E-13  9.52E-13  3.75E-13  8.47E-13  6.41E-13
   2.62E-13  4.24E-13  8.77E-13  3.86E-13  5.18E-13  3.90E-13  5.67E-13  7.65E-13
   4.71E-13  2.81E-13  3.43E-13  3.43E-13  2.95E-13  3.41E-13  6.77E-13  9.55E-13
   8.30E-13  2.00E-13  7.14E-13  8.35E-13  6.04E-12  2.19E-11
   0.5000  0.3500  0.0000    1  2.29482E-11 kpt; spin; max resid(k); each band:
   3.56E-13  7.56E-13  1.60E-13  8.12E-13  8.49E-13  6.59E-13  3.47E-13  2.64E-13
   1.78E-13  4.04E-13  2.49E-13  4.15E-13  6.59E-13  5.18E-13  2.87E-13  5.18E-13
   5.67E-13  4.38E-13  6.89E-13  9.83E-13  1.45E-13  3.63E-13  8.56E-13  9.03E-13
   2.36E-13  3.03E-13  2.10E-13  7.08E-13  3.98E-13  2.29E-11
   0.5000  0.3600  0.0000    1  1.43671E-12 kpt; spin; max resid(k); each band:
   9.41E-13  2.91E-13  7.44E-13  7.91E-13  4.66E-13  3.51E-13  2.66E-13  3.96E-13
   3.15E-13  5.24E-13  7.22E-13  3.95E-13  8.99E-13  2.65E-13  4.12E-13  6.19E-13
   2.45E-13  5.58E-13  2.27E-13  5.88E-13  4.16E-13  2.24E-13  2.64E-13  5.25E-13
   4.39E-13  7.34E-13  5.69E-13  9.72E-13  7.16E-13  1.44E-12
   0.5000  0.3700  0.0000    1  9.63610E-13 kpt; spin; max resid(k); each band:
   8.22E-13  9.17E-13  7.02E-13  8.38E-13  4.33E-13  3.04E-13  3.00E-13  3.70E-13
   2.74E-13  4.31E-13  6.51E-13  2.86E-13  7.44E-13  2.08E-13  3.17E-13  5.36E-13
   1.82E-13  4.81E-13  9.64E-13  6.14E-13  3.40E-13  1.96E-13  2.25E-13  4.13E-13
   4.63E-13  3.16E-13  6.46E-13  6.37E-13  6.44E-13  7.37E-13
   0.5000  0.3800  0.0000    1  7.75313E-12 kpt; spin; max resid(k); each band:
   6.47E-13  6.98E-13  5.27E-13  8.68E-13  4.47E-13  5.32E-13  2.69E-13  3.01E-13
   3.55E-13  9.70E-13  5.95E-13  3.21E-13  2.59E-13  2.06E-13  6.54E-13  2.54E-13
   1.92E-13  5.31E-13  5.54E-13  7.15E-13  4.49E-13  5.10E-13  4.16E-13  1.84E-13
   3.37E-13  9.31E-13  6.68E-13  5.34E-13  9.25E-13  7.75E-12
   0.5000  0.3900  0.0000    1  7.68033E-12 kpt; spin; max resid(k); each band:
   7.95E-13  6.31E-13  4.72E-13  7.91E-13  4.51E-13  4.65E-13  2.57E-13  9.73E-13
   2.99E-13  8.64E-13  5.88E-13  9.49E-13  1.76E-13  2.72E-13  6.29E-13  1.65E-13
   1.84E-13  5.97E-13  4.65E-13  6.24E-13  3.48E-13  5.73E-13  5.35E-13  7.09E-13
   4.11E-13  4.41E-13  5.67E-13  7.70E-13  7.68E-12  1.59E-12
   0.5000  0.4000  0.0000    1  1.15165E-12 kpt; spin; max resid(k); each band:
   9.64E-13  5.31E-13  4.07E-13  6.54E-13  4.45E-13  3.68E-13  2.37E-13  7.83E-13
   2.36E-13  1.64E-13  7.21E-13  6.89E-13  8.56E-13  3.81E-13  6.56E-13  8.66E-13
   1.67E-13  5.79E-13  7.02E-13  4.80E-13  3.57E-13  6.40E-13  6.89E-13  8.23E-13
   5.20E-13  3.89E-13  7.42E-13  3.83E-13  1.15E-12  5.90E-13
   0.5000  0.4100  0.0000    1  1.96235E-11 kpt; spin; max resid(k); each band:
   2.89E-13  3.90E-13  6.67E-13  5.60E-13  8.34E-13  2.22E-13  2.30E-13  5.61E-13
   2.08E-13  9.02E-13  2.08E-13  4.16E-13  8.07E-13  6.68E-13  3.79E-13  4.35E-13
   2.12E-13  9.26E-13  4.93E-13  9.04E-13  5.05E-13  3.54E-13  3.47E-13  5.23E-13
   3.78E-13  4.90E-13  9.07E-13  9.42E-13  1.49E-11  1.96E-11
   0.5000  0.4200  0.0000    1  1.58811E-11 kpt; spin; max resid(k); each band:
   1.68E-13  5.06E-13  2.33E-13  5.88E-13  4.96E-13  2.47E-13  7.43E-13  7.38E-13
   4.29E-13  3.25E-13  6.68E-13  7.92E-13  1.89E-13  7.51E-13  8.31E-13  1.85E-13
   2.91E-13  6.69E-13  7.83E-13  4.91E-13  6.13E-13  4.11E-13  4.06E-13  4.68E-13
   9.89E-13  4.68E-13  6.76E-13  9.82E-13  1.14E-12  1.59E-11
   0.5000  0.4300  0.0000    1  7.99467E-12 kpt; spin; max resid(k); each band:
   1.77E-13  6.68E-13  2.71E-13  6.32E-13  5.86E-13  2.64E-13  8.32E-13  7.54E-13
   6.46E-13  5.22E-13  8.61E-13  2.16E-13  2.42E-13  2.68E-13  3.26E-13  2.32E-13
   4.58E-13  5.70E-13  8.65E-13  9.52E-13  5.25E-13  6.19E-13  8.36E-13  6.08E-13
   2.26E-13  4.88E-13  7.99E-13  4.48E-13  5.90E-13  7.99E-12
   0.5000  0.4400  0.0000    1  7.12644E-12 kpt; spin; max resid(k); each band:
   8.72E-13  5.00E-13  6.33E-13  5.89E-13  3.56E-13  7.96E-13  2.98E-13  4.31E-13
   3.02E-13  2.18E-13  3.56E-13  8.80E-13  3.07E-13  9.70E-13  3.27E-13  7.50E-13
   3.21E-13  4.23E-13  1.10E-13  5.84E-13  2.24E-13  3.17E-13  5.63E-13  4.69E-13
   6.53E-13  7.87E-13  7.27E-13  6.60E-13  1.23E-12  7.13E-12
   0.5000  0.4500  0.0000    1  1.24036E-11 kpt; spin; max resid(k); each band:
   8.22E-13  4.15E-13  6.20E-13  7.59E-13  3.18E-13  7.23E-13  2.66E-13  7.04E-13
   4.26E-13  2.41E-13  3.65E-13  4.22E-13  2.37E-13  5.57E-13  3.99E-13  5.90E-13
   1.78E-13  3.36E-13  9.70E-13  5.60E-13  2.20E-13  2.57E-13  4.66E-13  5.36E-13
   7.35E-13  9.12E-13  5.76E-13  4.57E-13  1.20E-12  1.24E-11
   0.5000  0.4600  0.0000    1  1.45802E-11 kpt; spin; max resid(k); each band:
   7.16E-13  3.49E-13  5.69E-13  9.91E-13  2.94E-13  6.36E-13  8.51E-13  9.96E-13
   4.42E-13  2.35E-13  3.17E-13  3.97E-13  2.21E-13  7.65E-13  5.02E-13  5.32E-13
   5.97E-13  2.70E-13  7.48E-13  8.40E-13  2.41E-13  2.05E-13  3.95E-13  6.84E-13
   7.12E-13  7.16E-13  5.54E-13  2.82E-13  1.04E-12  1.46E-11
   0.5000  0.4700  0.0000    1  1.05175E-10 kpt; spin; max resid(k); each band:
   6.11E-13  8.80E-13  5.23E-13  3.05E-13  9.79E-13  5.78E-13  5.59E-13  2.14E-13
   4.15E-13  2.30E-13  2.40E-13  4.77E-13  2.18E-13  9.75E-13  5.30E-13  4.95E-13
   3.25E-13  2.72E-13  5.86E-13  6.08E-13  2.37E-13  2.36E-13  3.42E-13  7.56E-13
   6.48E-13  6.87E-13  7.49E-13  7.16E-13  5.14E-12  1.05E-10
   0.5000  0.4800  0.0000    1  5.66228E-10 kpt; spin; max resid(k); each band:
   4.14E-13  4.63E-13  8.50E-13  8.14E-13  6.29E-13  2.23E-13  2.68E-13  6.51E-13
   8.06E-13  6.84E-13  9.60E-13  8.86E-13  3.75E-13  3.15E-13  6.51E-13  2.65E-13
   4.95E-13  2.43E-13  2.79E-13  3.46E-13  4.68E-13  4.81E-13  2.03E-13  3.76E-13
   3.98E-13  5.91E-13  5.20E-13  8.98E-13  5.48E-12  5.66E-10
   0.5000  0.4900  0.0000    1  3.88935E-10 kpt; spin; max resid(k); each band:
   5.42E-13  6.11E-13  9.60E-13  1.43E-13  4.91E-13  9.54E-13  3.49E-13  8.18E-13
   9.40E-13  7.19E-13  9.68E-13  8.39E-13  3.25E-13  3.06E-13  2.10E-13  2.40E-13
   3.96E-13  1.93E-13  2.17E-13  5.89E-13  4.92E-13  3.02E-13  1.78E-13  3.44E-13
   9.91E-13  2.67E-13  7.48E-13  9.78E-13  1.28E-12  3.89E-10
   0.5000  0.5000  0.0000    1  6.10137E-10 kpt; spin; max resid(k); each band:
   9.19E-13  2.14E-13  6.42E-13  8.35E-13  2.79E-13  6.34E-13  6.67E-13  6.76E-13
   1.83E-13  4.70E-13  1.50E-13  2.04E-13  3.18E-13  4.92E-13  5.72E-13  4.85E-13
   2.28E-13  3.82E-13  1.50E-13  9.87E-13  7.89E-13  3.76E-13  9.59E-13  8.27E-13
   6.22E-13  9.45E-13  1.59E-13  5.23E-13  2.49E-12  6.10E-10
   0.4929  0.4929  0.0000    1  4.84926E-10 kpt; spin; max resid(k); each band:
   6.13E-13  8.86E-13  4.38E-13  2.76E-13  3.51E-13  4.96E-13  6.20E-13  3.09E-13
   6.41E-13  4.88E-13  9.67E-13  2.20E-13  7.54E-13  3.43E-13  7.57E-13  7.24E-13
   3.17E-13  4.81E-13  2.28E-13  9.94E-13  2.95E-13  1.17E-13  3.31E-13  3.27E-13
   2.33E-13  4.23E-13  5.91E-13  9.78E-13  4.88E-13  4.85E-10
   0.4857  0.4857  0.0000    1  1.47941E-10 kpt; spin; max resid(k); each band:
   5.53E-13  8.78E-13  5.03E-13  7.31E-13  5.90E-13  6.18E-13  2.34E-13  7.49E-13
   6.10E-13  6.07E-13  8.73E-13  4.34E-13  3.77E-13  3.86E-13  7.26E-13  5.35E-13
   3.12E-13  7.11E-13  2.89E-13  3.87E-13  4.16E-13  2.25E-13  3.77E-13  3.97E-13
   5.92E-13  7.28E-13  2.45E-13  8.47E-13  1.94E-13  1.48E-10
   0.4786  0.4786  0.0000    1  2.71167E-09 kpt; spin; max resid(k); each band:
   2.58E-13  6.94E-13  3.98E-13  4.15E-13  5.74E-13  2.86E-13  2.46E-13  3.71E-13
   9.77E-13  8.14E-13  4.99E-13  3.34E-13  4.88E-13  9.00E-13  2.87E-13  2.08E-13
   6.39E-13  3.75E-13  2.07E-13  5.11E-13  4.34E-13  1.61E-13  4.16E-13  5.13E-13
   1.49E-13  8.14E-13  7.48E-13  7.79E-13  3.97E-12  2.71E-09
   0.4714  0.4714  0.0000    1  3.57928E-09 kpt; spin; max resid(k); each band:
   2.99E-13  6.35E-13  3.65E-13  4.64E-13  5.36E-13  2.26E-13  9.05E-13  3.94E-13
   8.58E-13  8.13E-13  5.58E-13  3.02E-13  3.28E-13  8.48E-13  3.27E-13  6.11E-13
   5.89E-13  3.46E-13  1.87E-13  5.71E-13  2.69E-13  8.41E-13  2.37E-13  4.02E-13
   3.43E-13  8.00E-13  3.39E-13  7.68E-13  5.75E-12  3.58E-09
   0.4643  0.4643  0.0000    1  2.93327E-10 kpt; spin; max resid(k); each band:
   3.73E-13  6.23E-13  3.56E-13  5.26E-13  4.96E-13  1.94E-13  8.39E-13  4.06E-13
   7.19E-13  7.46E-13  7.03E-13  2.88E-13  2.46E-13  7.31E-13  3.80E-13  7.91E-13
   6.13E-13  2.95E-13  2.74E-13  6.78E-13  5.63E-13  6.76E-13  2.58E-13  5.16E-13
   6.52E-13  5.43E-13  7.46E-13  5.07E-13  8.56E-13  2.93E-10
   0.4571  0.4571  0.0000    1  1.27618E-10 kpt; spin; max resid(k); each band:
   3.88E-13  5.70E-13  9.32E-13  5.84E-13  4.37E-13  8.37E-13  8.63E-13  3.01E-13
   5.92E-13  6.83E-13  7.65E-13  3.01E-13  2.53E-13  7.71E-13  4.20E-13  4.40E-13
   7.35E-13  2.52E-13  3.89E-13  6.57E-13  1.99E-13  3.48E-13  3.32E-13  7.62E-13
   7.43E-13  6.13E-13  2.36E-13  8.00E-13  1.23E-12  1.28E-10
   0.4500  0.4500  0.0000    1  1.94495E-10 kpt; spin; max resid(k); each band:
   4.27E-13  5.74E-13  7.82E-13  5.99E-13  4.30E-13  6.97E-13  9.02E-13  8.62E-13
   6.14E-13  6.70E-13  7.48E-13  2.94E-13  3.10E-13  8.24E-13  4.21E-13  6.63E-13
   8.04E-13  2.18E-13  4.71E-13  5.91E-13  2.85E-13  4.10E-13  4.28E-13  8.79E-13
   9.35E-13  4.60E-13  8.03E-13  9.86E-13  1.71E-12  1.94E-10
   0.4429  0.4429  0.0000    1  9.96884E-13 kpt; spin; max resid(k); each band:
   7.32E-13  8.87E-13  9.97E-13  6.25E-13  4.59E-13  7.08E-13  2.18E-13  7.13E-13
   7.08E-13  4.63E-13  6.83E-13  6.50E-13  7.89E-13  2.69E-13  2.94E-13  2.49E-13
   4.19E-13  7.92E-13  8.92E-13  9.30E-13  7.25E-13  1.55E-13  6.29E-13  8.09E-13
   8.43E-13  5.97E-13  6.43E-13  8.40E-13  8.83E-13  4.89E-13
   0.4357  0.4357  0.0000    1  9.98714E-13 kpt; spin; max resid(k); each band:
   9.51E-13  9.28E-13  9.38E-13  6.94E-13  4.76E-13  7.69E-13  2.23E-13  9.06E-13
   8.07E-13  4.61E-13  6.39E-13  6.52E-13  8.09E-13  2.27E-13  2.71E-13  2.12E-13
   4.97E-13  8.76E-13  1.99E-13  9.99E-13  7.33E-13  2.42E-13  5.32E-13  5.75E-13
   1.74E-13  9.76E-13  9.37E-13  6.10E-13  4.99E-13  7.59E-13
   0.4286  0.4286  0.0000    1  9.53917E-13 kpt; spin; max resid(k); each band:
   2.26E-13  2.90E-13  9.31E-13  7.67E-13  5.11E-13  7.84E-13  9.54E-13  1.98E-13
   9.05E-13  4.70E-13  6.02E-13  7.87E-13  7.82E-13  3.55E-13  2.46E-13  2.14E-13
   6.96E-13  9.33E-13  2.89E-13  5.26E-13  6.96E-13  3.47E-13  6.27E-13  2.85E-13
   2.00E-13  5.24E-13  7.03E-13  7.39E-13  8.73E-13  7.61E-13
   0.4214  0.4214  0.0000    1  9.87902E-13 kpt; spin; max resid(k); each band:
   2.78E-13  3.52E-13  2.61E-13  8.31E-13  5.54E-13  7.36E-13  7.83E-13  3.55E-13
   9.88E-13  4.83E-13  6.29E-13  1.51E-13  6.52E-13  5.62E-13  2.73E-13  2.34E-13
   8.99E-13  1.93E-13  3.97E-13  5.18E-13  7.27E-13  4.67E-13  6.95E-13  5.63E-13
   2.08E-13  6.66E-13  2.93E-13  7.47E-13  7.47E-13  6.19E-13
   0.4143  0.4143  0.0000    1  3.31223E-12 kpt; spin; max resid(k); each band:
   3.38E-13  4.34E-13  3.45E-13  8.99E-13  6.05E-13  6.68E-13  5.62E-13  6.02E-13
   2.79E-13  4.77E-13  7.03E-13  1.98E-13  3.86E-13  7.36E-13  3.45E-13  2.68E-13
   2.26E-13  2.25E-13  5.04E-13  4.68E-13  7.95E-13  5.92E-13  2.66E-13  9.84E-13
   1.87E-13  9.69E-13  6.37E-13  8.41E-13  3.31E-12  7.47E-13
   0.4071  0.4071  0.0000    1  2.20776E-12 kpt; spin; max resid(k); each band:
   2.85E-13  9.08E-13  4.03E-13  3.13E-13  4.39E-13  3.94E-13  7.81E-13  5.88E-13
   9.21E-13  4.36E-13  2.25E-13  1.60E-13  1.32E-13  4.11E-13  4.26E-13  2.58E-13
   5.42E-13  3.34E-13  2.87E-13  2.27E-13  9.44E-13  4.36E-13  9.28E-13  4.34E-13
   3.61E-13  9.69E-13  2.51E-13  8.25E-13  8.53E-13  2.21E-12
   0.4000  0.4000  0.0000    1  9.31957E-12 kpt; spin; max resid(k); each band:
   2.92E-13  7.56E-13  4.66E-13  7.51E-13  4.96E-13  4.73E-13  7.91E-13  6.49E-13
   3.84E-13  6.89E-13  3.43E-13  2.73E-13  8.27E-13  3.57E-13  3.10E-13  4.54E-13
   1.99E-13  2.29E-13  2.07E-13  6.05E-13  2.90E-13  2.75E-13  8.44E-13  4.07E-13
   9.75E-13  2.16E-13  4.67E-13  9.14E-13  3.93E-12  9.32E-12
   0.3929  0.3929  0.0000    1  1.83206E-11 kpt; spin; max resid(k); each band:
   3.09E-13  1.97E-13  3.07E-13  2.32E-13  2.93E-13  7.79E-13  1.05E-13  2.08E-13
   4.17E-13  6.01E-13  2.67E-13  9.15E-13  2.45E-13  4.03E-13  7.48E-13  2.37E-13
   4.17E-13  2.46E-13  2.95E-13  4.36E-13  4.69E-13  3.13E-13  2.32E-13  2.94E-13
   3.33E-13  6.10E-13  8.28E-13  6.29E-13  1.09E-11  1.83E-11
   0.3857  0.3857  0.0000    1  1.95094E-11 kpt; spin; max resid(k); each band:
   2.79E-13  2.64E-13  9.23E-13  6.39E-13  5.43E-13  4.24E-13  4.61E-13  3.03E-13
   3.69E-13  5.97E-13  3.65E-13  3.66E-13  3.53E-13  4.90E-13  6.41E-13  8.41E-13
   7.44E-13  5.76E-13  9.67E-13  6.22E-13  6.53E-13  4.86E-13  6.68E-13  5.96E-13
   8.55E-13  9.66E-13  3.15E-13  8.56E-13  2.39E-12  1.95E-11
   0.3786  0.3786  0.0000    1  3.79191E-11 kpt; spin; max resid(k); each band:
   3.18E-13  3.22E-13  2.06E-13  6.62E-13  6.37E-13  4.94E-13  4.44E-13  3.30E-13
   3.79E-13  6.55E-13  4.74E-13  3.73E-13  9.42E-13  7.35E-13  7.60E-13  8.71E-13
   2.07E-13  4.93E-13  1.81E-13  5.11E-13  7.27E-13  5.53E-13  8.09E-13  9.96E-13
   9.09E-13  3.00E-13  6.04E-13  5.85E-13  5.79E-12  3.79E-11
   0.3714  0.3714  0.0000    1  2.20045E-10 kpt; spin; max resid(k); each band:
   3.76E-13  3.62E-13  2.60E-13  6.53E-13  7.78E-13  5.70E-13  4.80E-13  3.71E-13
   4.12E-13  6.90E-13  5.78E-13  4.17E-13  6.29E-13  2.60E-13  8.53E-13  7.50E-13
   3.17E-13  3.71E-13  1.89E-13  9.85E-13  8.97E-13  5.16E-13  8.55E-13  8.68E-13
   8.31E-13  9.54E-13  6.18E-13  5.79E-13  5.31E-11  2.20E-10
   0.3643  0.3643  0.0000    1  2.40788E-10 kpt; spin; max resid(k); each band:
   3.47E-13  9.44E-13  6.51E-13  4.38E-13  3.38E-13  2.46E-13  8.23E-13  6.41E-13
   4.20E-13  8.25E-13  4.08E-13  7.56E-13  9.07E-13  1.57E-13  5.53E-13  6.95E-13
   4.94E-13  8.65E-13  1.47E-13  7.01E-13  9.70E-13  9.56E-13  3.51E-13  9.26E-13
   3.89E-13  7.73E-13  8.40E-13  7.18E-13  5.59E-11  2.41E-10
   0.3571  0.3571  0.0000    1  1.21879E-09 kpt; spin; max resid(k); each band:
   3.39E-13  9.82E-13  7.74E-13  4.25E-13  3.62E-13  2.53E-13  8.08E-13  6.07E-13
   3.99E-13  7.90E-13  4.36E-13  7.26E-13  2.57E-13  2.23E-13  7.07E-13  8.43E-13
   6.59E-13  2.05E-13  1.64E-13  9.08E-13  3.59E-13  5.84E-13  5.03E-13  2.33E-13
   4.63E-13  4.71E-13  9.98E-13  7.83E-13  2.35E-10  1.22E-09
   0.3500  0.3500  0.0000    1  2.03644E-09 kpt; spin; max resid(k); each band:
   3.86E-13  2.60E-13  2.26E-13  3.83E-13  3.49E-13  3.03E-13  3.45E-13  4.12E-13
   6.82E-13  3.35E-13  9.81E-13  5.30E-13  3.13E-13  3.67E-13  4.32E-13  8.05E-13
   8.81E-13  7.69E-13  3.62E-13  7.75E-13  8.86E-13  8.44E-13  2.65E-13  3.71E-13
   9.71E-13  2.51E-13  9.37E-13  3.37E-13  2.04E-09  1.10E-09
   0.3429  0.3429  0.0000    1  1.39663E-08 kpt; spin; max resid(k); each band:
   2.75E-13  8.04E-13  9.95E-13  9.16E-13  4.32E-13  7.90E-13  3.21E-13  1.80E-13
   8.79E-13  9.75E-13  2.66E-13  6.88E-13  5.69E-13  3.77E-13  2.97E-13  3.77E-13
   6.25E-13  2.26E-13  3.52E-13  2.42E-13  7.63E-13  2.84E-13  3.12E-13  9.40E-13
   2.84E-13  7.23E-13  5.22E-13  6.57E-13  4.59E-10  1.40E-08
   0.3357  0.3357  0.0000    1  6.60048E-09 kpt; spin; max resid(k); each band:
   3.02E-13  7.69E-13  8.84E-13  1.76E-13  4.58E-13  7.55E-13  3.71E-13  1.71E-13
   8.99E-13  2.46E-13  3.27E-13  6.20E-13  5.86E-13  3.82E-13  1.69E-13  3.74E-13
   6.85E-13  8.20E-13  3.41E-13  9.37E-13  7.46E-13  2.98E-13  2.69E-13  5.57E-13
   8.48E-13  6.21E-13  4.69E-13  6.30E-13  2.16E-10  6.60E-09
   0.3286  0.3286  0.0000    1  2.27180E-10 kpt; spin; max resid(k); each band:
   3.12E-13  6.37E-13  8.69E-13  9.56E-13  4.18E-13  7.59E-13  4.23E-13  9.67E-13
   9.69E-13  2.51E-13  1.93E-13  4.93E-13  4.81E-13  8.79E-13  1.50E-13  2.81E-13
   5.79E-13  6.95E-13  7.98E-13  9.26E-13  7.55E-13  2.98E-13  2.40E-13  7.78E-13
   2.44E-13  8.89E-13  4.77E-13  7.78E-13  3.17E-11  2.27E-10
   0.3214  0.3214  0.0000    1  3.33690E-08 kpt; spin; max resid(k); each band:
   9.78E-13  5.75E-13  3.80E-13  8.21E-13  4.23E-13  2.13E-13  4.06E-13  4.42E-13
   3.49E-13  5.25E-13  7.10E-13  9.56E-13  6.32E-13  9.02E-13  4.82E-13  2.39E-13
   3.38E-13  4.84E-13  4.54E-13  6.92E-13  4.63E-13  8.29E-13  2.63E-13  3.51E-13
   5.73E-13  4.19E-13  3.67E-13  5.12E-13  3.34E-08  1.48E-08
   0.3143  0.3143  0.0000    1  1.02777E-08 kpt; spin; max resid(k); each band:
   3.61E-13  5.12E-13  4.01E-13  4.21E-13  4.22E-13  4.42E-13  2.53E-13  3.45E-13
   9.57E-13  3.09E-13  7.39E-13  5.96E-13  2.47E-13  3.27E-13  2.27E-13  8.45E-13
   3.47E-13  9.07E-13  7.73E-13  2.78E-13  8.90E-13  8.33E-13  3.39E-13  5.12E-13
   6.89E-13  4.58E-13  8.04E-13  5.98E-13  1.03E-08  8.63E-10
   0.3071  0.3071  0.0000    1  1.26114E-09 kpt; spin; max resid(k); each band:
   2.98E-13  6.11E-13  9.95E-13  3.89E-13  5.47E-13  5.41E-13  5.97E-13  4.41E-13
   2.42E-13  3.77E-13  6.49E-13  3.74E-13  2.90E-13  9.79E-13  2.87E-13  5.68E-13
   2.09E-13  3.76E-13  8.13E-13  5.12E-13  5.52E-13  4.31E-13  3.07E-13  4.60E-13
   5.86E-13  9.04E-13  6.37E-13  4.95E-13  1.26E-09  4.46E-11
   0.3000  0.3000  0.0000    1  1.61636E-08 kpt; spin; max resid(k); each band:
   7.03E-13  4.52E-13  1.87E-13  3.00E-13  4.69E-13  9.40E-13  4.11E-13  8.86E-13
   7.15E-13  3.40E-13  4.02E-13  1.96E-13  2.94E-13  8.92E-13  4.46E-13  6.21E-13
   2.85E-13  9.72E-13  5.64E-13  5.43E-13  3.37E-13  2.19E-13  4.07E-13  3.30E-13
   4.45E-13  9.14E-13  2.32E-13  8.59E-13  1.62E-08  1.20E-09
   0.2929  0.2929  0.0000    1  4.06209E-09 kpt; spin; max resid(k); each band:
   6.68E-13  4.69E-13  1.88E-13  3.03E-13  4.63E-13  1.08E-13  3.95E-13  8.67E-13
   6.71E-13  3.10E-13  3.39E-13  1.84E-13  2.27E-13  8.48E-13  4.51E-13  6.18E-13
   2.42E-13  8.91E-13  5.45E-13  4.04E-13  3.25E-13  7.02E-13  3.07E-13  2.93E-13
   4.60E-13  2.66E-13  9.08E-13  3.41E-13  4.06E-09  5.57E-11
   0.2857  0.2857  0.0000    1  1.30758E-09 kpt; spin; max resid(k); each band:
   5.89E-13  7.75E-13  2.99E-13  2.87E-13  9.30E-13  2.04E-13  2.31E-13  6.49E-13
   2.89E-13  6.15E-13  6.29E-13  7.54E-13  5.01E-13  3.23E-13  2.18E-13  4.29E-13
   3.45E-13  1.95E-13  2.80E-13  7.72E-13  5.47E-13  6.26E-13  3.32E-13  3.16E-13
   3.62E-13  3.24E-13  7.59E-13  4.96E-13  2.22E-11  1.31E-09
   0.2786  0.2786  0.0000    1  1.09224E-06 kpt; spin; max resid(k); each band:
   2.57E-13  7.54E-13  6.95E-13  9.68E-13  8.94E-13  9.30E-13  8.98E-13  3.06E-13
   6.77E-13  4.75E-13  2.32E-13  2.68E-13  3.16E-13  6.22E-13  4.55E-13  2.83E-13
   8.06E-13  4.92E-13  9.23E-13  3.93E-13  7.68E-13  2.38E-13  8.68E-13  8.66E-13
   3.40E-13  2.15E-13  6.88E-13  9.06E-13  1.18E-07  1.09E-06
   0.2714  0.2714  0.0000    1  2.43044E-08 kpt; spin; max resid(k); each band:
   1.94E-13  4.02E-13  9.81E-13  5.56E-13  2.60E-13  6.33E-13  7.68E-13  3.08E-13
   4.02E-13  5.01E-13  4.32E-13  9.58E-13  7.92E-13  6.47E-13  3.83E-13  7.43E-13
   4.76E-13  9.27E-13  5.39E-13  2.93E-13  2.42E-13  3.22E-13  3.71E-13  2.30E-13
   8.00E-13  7.45E-13  3.29E-13  7.45E-13  2.43E-08  6.66E-09
   0.2643  0.2643  0.0000    1  2.53992E-07 kpt; spin; max resid(k); each band:
   1.70E-13  4.61E-13  5.14E-13  5.07E-13  4.98E-13  4.18E-13  4.99E-13  4.48E-13
   7.84E-13  2.68E-13  4.95E-13  6.82E-13  2.78E-13  4.39E-13  5.63E-13  9.65E-13
   8.63E-13  3.10E-13  3.13E-13  4.31E-13  8.28E-13  4.51E-13  7.71E-13  6.25E-13
   9.23E-13  4.80E-13  8.99E-13  5.50E-13  5.09E-08  2.54E-07
   0.2571  0.2571  0.0000    1  3.15345E-07 kpt; spin; max resid(k); each band:
   1.77E-13  5.15E-13  4.17E-13  3.47E-13  5.17E-13  4.02E-13  1.51E-13  5.44E-13
   6.50E-13  7.27E-13  5.30E-13  8.94E-13  6.87E-13  4.18E-13  7.59E-13  8.27E-13
   9.10E-13  4.39E-13  2.37E-13  3.94E-13  4.34E-13  2.41E-13  3.64E-13  6.88E-13
   6.63E-13  3.14E-13  3.27E-13  3.56E-13  5.61E-08  3.15E-07
   0.2500  0.2500  0.0000    1  1.47489E-07 kpt; spin; max resid(k); each band:
   2.03E-13  5.84E-13  4.49E-13  4.18E-13  4.98E-13  4.92E-13  2.59E-13  6.55E-13
   6.79E-13  4.32E-13  5.68E-13  2.11E-13  9.29E-13  3.98E-13  6.82E-13  7.37E-13
   1.96E-13  3.47E-13  7.69E-13  3.54E-13  6.80E-13  7.61E-13  5.70E-13  4.24E-13
   3.00E-13  3.29E-13  3.00E-13  5.14E-13  7.09E-08  1.47E-07
   0.2429  0.2429  0.0000    1  6.61829E-08 kpt; spin; max resid(k); each band:
   9.39E-13  5.52E-13  5.43E-13  4.16E-13  4.51E-13  5.95E-13  3.00E-13  7.58E-13
   2.85E-13  2.84E-13  6.09E-13  2.45E-13  1.69E-13  3.57E-13  6.39E-13  7.89E-13
   2.04E-13  9.89E-13  8.09E-13  7.20E-13  4.15E-13  3.20E-13  8.57E-13  5.89E-13
   6.74E-13  1.73E-13  2.92E-13  2.38E-13  6.62E-08  6.28E-08
   0.2357  0.2357  0.0000    1  3.43423E-07 kpt; spin; max resid(k); each band:
   4.59E-13  7.90E-13  5.13E-13  2.02E-13  5.44E-13  2.72E-13  9.86E-13  4.40E-13
   3.51E-13  7.43E-13  9.06E-13  8.15E-13  3.12E-13  5.43E-13  4.53E-13  9.49E-13
   2.39E-13  3.69E-13  1.70E-13  4.43E-13  5.70E-13  7.26E-13  5.23E-13  1.83E-13
   6.25E-13  6.88E-13  3.47E-13  8.85E-13  5.87E-08  3.43E-07
   0.2286  0.2286  0.0000    1  3.65038E-09 kpt; spin; max resid(k); each band:
   9.06E-13  4.99E-13  3.45E-13  2.56E-13  5.64E-13  4.51E-13  9.51E-13  8.57E-13
   3.01E-13  3.50E-13  3.28E-13  5.31E-13  6.86E-13  7.04E-13  3.67E-13  3.92E-13
   2.74E-13  1.77E-13  7.18E-13  2.55E-13  2.91E-13  4.00E-13  2.48E-13  5.07E-13
   4.63E-13  1.71E-13  2.31E-13  5.86E-13  5.26E-10  3.65E-09
   0.2214  0.2214  0.0000    1  2.36173E-08 kpt; spin; max resid(k); each band:
   4.37E-13  1.99E-13  8.80E-13  3.54E-13  4.44E-13  9.42E-13  6.28E-13  5.94E-13
   5.11E-13  6.24E-13  1.88E-13  3.75E-13  1.95E-13  3.57E-13  5.43E-13  2.72E-13
   3.44E-13  2.84E-13  3.15E-13  6.23E-13  4.63E-13  2.92E-13  4.28E-13  9.01E-13
   8.58E-13  6.79E-13  9.42E-13  5.14E-13  3.28E-09  2.36E-08
   0.2143  0.2143  0.0000    1  1.16728E-08 kpt; spin; max resid(k); each band:
   4.31E-13  2.10E-13  8.65E-13  3.58E-13  4.62E-13  9.84E-13  6.24E-13  7.03E-13
   4.40E-13  5.93E-13  1.92E-13  3.36E-13  1.89E-13  3.00E-13  3.58E-13  3.06E-13
   3.27E-13  2.81E-13  2.57E-13  5.12E-13  3.66E-13  3.59E-13  3.77E-13  5.26E-13
   5.59E-13  5.03E-13  9.04E-13  3.55E-13  3.52E-09  1.17E-08
   0.2071  0.2071  0.0000    1  1.01545E-06 kpt; spin; max resid(k); each band:
   3.83E-13  2.24E-13  6.92E-13  8.80E-13  4.52E-13  6.46E-13  7.10E-13  2.92E-13
   1.91E-13  4.62E-13  3.95E-13  6.58E-13  6.44E-13  8.55E-13  7.56E-13  3.57E-13
   6.56E-13  9.59E-13  4.46E-13  6.37E-13  7.36E-13  3.23E-13  9.68E-13  4.49E-13
   1.41E-13  3.67E-13  5.59E-13  7.56E-13  6.58E-08  1.02E-06
   0.2000  0.2000  0.0000    1  2.21365E-08 kpt; spin; max resid(k); each band:
   2.34E-13  5.92E-13  2.30E-13  2.05E-13  2.03E-13  3.80E-13  3.63E-13  2.60E-13
   9.28E-13  3.22E-13  2.31E-13  3.11E-13  2.37E-13  3.42E-13  8.73E-13  5.09E-13
   7.11E-13  5.67E-13  7.44E-13  7.49E-13  2.04E-13  7.64E-13  2.24E-13  2.27E-13
   3.23E-13  4.88E-13  6.19E-13  4.30E-13  2.04E-10  2.21E-08
   0.1929  0.1929  0.0000    1  1.29577E-08 kpt; spin; max resid(k); each band:
   8.12E-13  2.37E-13  6.15E-13  5.55E-13  2.48E-13  5.78E-13  2.53E-13  3.01E-13
   3.02E-13  4.02E-13  3.76E-13  7.25E-13  7.08E-13  4.22E-13  3.76E-13  2.77E-13
   2.25E-13  6.51E-13  9.28E-13  2.70E-13  6.72E-13  8.27E-13  2.88E-13  4.42E-13
   9.43E-13  2.32E-13  6.35E-13  5.83E-13  3.48E-09  1.30E-08
   0.1857  0.1857  0.0000    1  1.75935E-08 kpt; spin; max resid(k); each band:
   9.38E-13  2.45E-13  6.15E-13  5.35E-13  2.46E-13  8.45E-13  2.85E-13  2.52E-13
   2.95E-13  4.42E-13  3.46E-13  6.94E-13  8.18E-13  3.78E-13  4.24E-13  3.31E-13
   4.00E-13  9.10E-13  2.38E-13  2.52E-13  6.42E-13  2.54E-13  3.89E-13  1.10E-13
   6.97E-13  2.65E-13  3.00E-13  5.57E-13  4.14E-09  1.76E-08
   0.1786  0.1786  0.0000    1  1.24445E-06 kpt; spin; max resid(k); each band:
   4.36E-13  2.56E-13  6.30E-13  8.54E-13  6.26E-13  9.71E-13  4.99E-13  2.70E-13
   5.80E-13  5.61E-13  9.20E-13  5.34E-13  4.53E-13  8.95E-13  5.58E-13  5.81E-13
   3.03E-13  5.21E-13  6.30E-13  9.56E-13  5.62E-13  6.40E-13  8.25E-13  6.05E-13
   7.70E-13  7.29E-13  4.55E-13  6.30E-13  2.27E-07  1.24E-06
   0.1714  0.1714  0.0000    1  1.29052E-06 kpt; spin; max resid(k); each band:
   4.17E-13  2.45E-13  6.43E-13  1.67E-13  6.95E-13  2.84E-13  5.47E-13  2.88E-13
   6.55E-13  5.99E-13  9.78E-13  4.59E-13  4.97E-13  9.53E-13  5.91E-13  8.77E-13
   2.44E-13  5.24E-13  4.70E-13  9.76E-13  6.94E-13  8.99E-13  9.23E-13  7.96E-13
   2.59E-13  8.55E-13  9.91E-13  5.94E-13  2.14E-07  1.29E-06
   0.1643  0.1643  0.0000    1  1.53119E-07 kpt; spin; max resid(k); each band:
   3.63E-13  5.09E-13  2.34E-13  3.34E-13  6.53E-13  4.04E-13  7.74E-13  4.32E-13
   4.31E-13  6.13E-13  4.07E-13  8.33E-13  2.22E-13  1.48E-13  5.26E-13  4.19E-13
   4.25E-13  2.58E-13  2.34E-13  7.10E-13  6.30E-13  5.82E-13  9.70E-13  5.98E-13
   7.64E-13  1.87E-13  4.41E-13  7.87E-13  1.53E-07  7.02E-08
   0.1571  0.1571  0.0000    1  1.04160E-05 kpt; spin; max resid(k); each band:
   6.62E-13  8.18E-13  6.34E-13  5.27E-13  9.70E-13  6.14E-13  3.57E-13  3.74E-13
   3.70E-13  3.95E-13  2.84E-13  4.96E-13  6.83E-13  3.17E-13  4.56E-13  7.57E-13
   4.40E-13  2.39E-13  5.26E-13  3.08E-13  4.34E-13  3.90E-13  8.91E-13  3.39E-13
   2.61E-13  2.37E-13  3.27E-13  6.39E-13  4.40E-07  1.04E-05
   0.1500  0.1500  0.0000    1  5.32818E-06 kpt; spin; max resid(k); each band:
   6.82E-13  1.88E-13  7.37E-13  5.06E-13  9.55E-13  6.76E-13  4.08E-13  3.19E-13
   4.29E-13  3.84E-13  1.90E-13  5.58E-13  5.48E-13  2.57E-13  4.80E-13  7.83E-13
   3.18E-13  3.02E-13  5.90E-13  3.02E-13  3.46E-13  3.20E-13  7.40E-13  2.97E-13
   1.67E-13  9.54E-13  7.55E-13  4.01E-13  1.99E-07  5.33E-06
   0.1429  0.1429  0.0000    1  1.72121E-06 kpt; spin; max resid(k); each band:
   3.59E-13  6.41E-13  4.55E-13  7.50E-13  6.39E-13  1.98E-13  3.52E-13  1.30E-13
   6.51E-13  3.63E-13  8.64E-13  2.32E-13  4.44E-13  5.73E-13  7.07E-13  7.71E-13
   4.02E-13  3.29E-13  5.44E-13  2.04E-13  3.43E-13  8.02E-13  6.99E-13  5.90E-13
   7.60E-13  8.39E-13  1.92E-13  6.52E-13  4.10E-07  1.72E-06
   0.1357  0.1357  0.0000    1  2.37599E-07 kpt; spin; max resid(k); each band:
   3.98E-13  8.27E-13  3.38E-13  7.10E-13  6.00E-13  8.13E-13  2.33E-13  8.75E-13
   7.40E-13  2.75E-13  8.79E-13  3.01E-13  2.89E-13  4.39E-13  6.66E-13  7.57E-13
   3.62E-13  4.34E-13  4.11E-13  1.74E-13  2.71E-13  5.09E-13  3.30E-13  8.64E-13
   3.90E-13  7.42E-13  7.80E-13  4.43E-13  1.83E-07  2.38E-07
   0.1286  0.1286  0.0000    1  3.43734E-05 kpt; spin; max resid(k); each band:
   9.13E-13  4.11E-13  3.41E-13  5.62E-13  5.91E-13  5.92E-13  5.94E-13  8.38E-13
   5.80E-13  3.38E-13  1.56E-13  5.45E-13  6.22E-13  3.50E-13  8.04E-13  8.82E-13
   9.35E-13  3.94E-13  4.78E-13  9.88E-13  8.19E-13  5.20E-13  7.79E-13  9.04E-13
   6.23E-13  1.93E-13  5.91E-13  6.27E-13  2.88E-05  3.44E-05
   0.1214  0.1214  0.0000    1  3.83308E-05 kpt; spin; max resid(k); each band:
   9.35E-13  3.76E-13  3.13E-13  5.54E-13  5.87E-13  6.06E-13  6.18E-13  7.77E-13
   6.05E-13  3.34E-13  1.67E-13  4.84E-13  5.43E-13  3.00E-13  8.89E-13  4.60E-13
   8.18E-13  3.96E-13  5.39E-13  9.77E-13  7.66E-13  3.26E-13  6.92E-13  7.04E-13
   3.81E-13  9.05E-13  6.83E-13  5.88E-13  2.79E-05  3.83E-05
   0.1143  0.1143  0.0000    1  4.25136E-07 kpt; spin; max resid(k); each band:
   2.96E-13  2.89E-13  3.62E-13  2.24E-13  3.47E-13  2.92E-13  4.06E-13  3.00E-13
   4.44E-13  4.64E-13  9.92E-13  7.28E-13  3.11E-13  2.82E-13  4.57E-13  5.74E-13
   4.60E-13  2.73E-13  4.64E-13  2.56E-13  1.72E-13  7.55E-13  3.21E-13  5.39E-13
   4.23E-13  7.73E-13  4.28E-13  9.04E-13  8.65E-08  4.25E-07
   0.1071  0.1071  0.0000    1  4.69623E-07 kpt; spin; max resid(k); each band:
   3.41E-13  2.74E-13  3.06E-13  7.06E-13  3.81E-13  2.80E-13  4.52E-13  2.43E-13
   7.86E-13  3.17E-13  7.91E-13  3.63E-13  2.08E-13  6.02E-13  7.06E-13  4.11E-13
   3.09E-13  1.75E-13  2.38E-13  2.25E-13  4.20E-13  8.54E-13  2.44E-13  5.33E-13
   2.45E-13  8.21E-13  3.79E-13  5.23E-13  4.70E-07  3.23E-07
   0.1000  0.1000  0.0000    1  6.92562E-06 kpt; spin; max resid(k); each band:
   5.65E-13  6.54E-13  3.30E-13  2.35E-13  3.40E-13  6.41E-13  3.54E-13  3.27E-13
   4.47E-13  8.62E-13  4.87E-13  5.79E-13  2.32E-13  9.25E-13  5.59E-13  2.49E-13
   1.93E-13  6.50E-13  9.60E-13  8.57E-13  2.78E-13  9.47E-13  3.62E-13  2.05E-13
   2.76E-13  6.24E-13  7.85E-13  2.25E-13  6.93E-06  3.05E-08
   0.0929  0.0929  0.0000    1  1.71371E-06 kpt; spin; max resid(k); each band:
   2.60E-13  5.74E-13  9.88E-13  4.65E-13  5.99E-13  9.71E-13  4.94E-13  7.21E-13
   1.18E-13  2.78E-13  2.23E-13  5.47E-13  2.05E-13  3.12E-13  5.22E-13  3.65E-13
   7.37E-13  7.54E-13  5.51E-13  7.23E-13  3.53E-13  1.95E-13  5.10E-13  5.89E-13
   7.52E-13  4.76E-13  2.94E-13  5.31E-13  4.74E-07  1.71E-06
   0.0857  0.0857  0.0000    1  2.95788E-06 kpt; spin; max resid(k); each band:
   2.63E-13  6.50E-13  3.37E-13  5.14E-13  6.20E-13  2.13E-13  5.27E-13  6.60E-13
   1.35E-13  2.88E-13  2.16E-13  5.63E-13  2.06E-13  3.20E-13  4.71E-13  3.73E-13
   7.29E-13  7.70E-13  6.27E-13  1.69E-13  3.42E-13  8.45E-13  4.21E-13  5.60E-13
   5.72E-13  4.64E-13  1.39E-13  4.32E-13  6.44E-07  2.96E-06
   0.0786  0.0786  0.0000    1  3.77550E-06 kpt; spin; max resid(k); each band:
   2.67E-13  7.50E-13  3.76E-13  5.65E-13  6.32E-13  2.23E-13  5.72E-13  6.01E-13
   1.56E-13  2.94E-13  1.96E-13  5.41E-13  2.19E-13  3.30E-13  3.89E-13  4.24E-13
   6.98E-13  8.75E-13  6.89E-13  2.69E-13  3.34E-13  6.91E-13  3.19E-13  4.53E-13
   8.85E-13  4.19E-13  5.51E-13  3.72E-13  8.08E-07  3.78E-06
   0.0714  0.0714  0.0000    1  3.45724E-06 kpt; spin; max resid(k); each band:
   2.68E-13  8.81E-13  4.26E-13  6.13E-13  6.36E-13  2.28E-13  6.28E-13  5.68E-13
   1.68E-13  3.02E-13  1.56E-13  4.89E-13  2.52E-13  3.43E-13  5.78E-13  6.14E-13
   6.57E-13  2.36E-13  7.03E-13  3.64E-13  3.03E-13  6.07E-13  7.72E-13  3.39E-13
   8.47E-13  3.77E-13  4.25E-13  3.51E-13  9.47E-07  3.46E-06
   0.0643  0.0643  0.0000    1  5.18975E-06 kpt; spin; max resid(k); each band:
   3.53E-13  5.58E-13  3.72E-13  7.21E-13  2.42E-13  7.05E-13  2.31E-13  3.79E-13
   2.97E-13  3.58E-13  6.09E-13  2.03E-13  6.31E-13  5.93E-13  8.66E-13  9.99E-13
   3.00E-13  2.46E-13  4.07E-13  5.60E-13  6.65E-13  3.08E-13  9.04E-13  3.09E-13
   8.02E-13  6.10E-13  8.75E-13  8.95E-13  3.84E-06  5.19E-06
   0.0571  0.0571  0.0000    1  2.29273E-06 kpt; spin; max resid(k); each band:
   3.68E-13  3.43E-13  2.61E-13  2.54E-13  6.99E-13  6.38E-13  3.68E-13  2.50E-13
   7.93E-13  5.01E-13  2.63E-13  4.26E-13  5.55E-13  2.66E-13  6.26E-13  7.02E-13
   1.68E-13  4.22E-13  3.42E-13  6.03E-13  7.84E-13  7.32E-13  4.09E-13  3.09E-13
   2.61E-13  3.59E-13  1.97E-13  6.95E-13  1.49E-06  2.29E-06
   0.0500  0.0500  0.0000    1  3.33093E-06 kpt; spin; max resid(k); each band:
   3.66E-13  3.31E-13  2.84E-13  2.65E-13  7.11E-13  6.64E-13  3.77E-13  2.55E-13
   9.15E-13  4.91E-13  2.25E-13  4.83E-13  5.18E-13  2.52E-13  7.17E-13  7.72E-13
   1.84E-13  4.63E-13  3.11E-13  6.70E-13  8.21E-13  7.02E-13  9.63E-13  2.52E-13
   5.61E-13  4.24E-13  8.17E-14  7.70E-13  1.30E-06  3.33E-06
   0.0429  0.0429  0.0000    1  8.58577E-07 kpt; spin; max resid(k); each band:
   3.34E-13  3.00E-13  2.76E-13  7.60E-13  4.24E-13  4.24E-13  3.05E-13  5.36E-13
   7.65E-13  1.37E-13  4.88E-13  6.00E-13  3.37E-13  3.25E-13  4.55E-13  2.86E-13
   2.85E-13  4.19E-13  7.34E-13  3.08E-13  2.74E-13  9.77E-13  2.73E-13  6.97E-13
   7.63E-13  7.77E-13  9.93E-14  5.56E-13  3.62E-07  8.59E-07
   0.0357  0.0357  0.0000    1  6.16877E-07 kpt; spin; max resid(k); each band:
   5.67E-13  3.16E-13  2.90E-13  6.83E-13  2.63E-13  9.96E-13  8.70E-13  3.34E-13
   4.58E-13  6.07E-13  9.64E-13  3.11E-13  4.21E-13  2.05E-13  8.43E-13  5.54E-13
   2.50E-13  3.32E-13  7.15E-13  4.18E-13  8.90E-13  7.80E-13  5.11E-13  5.07E-13
   7.61E-13  2.33E-13  9.41E-13  9.47E-13  6.17E-07  4.13E-07
   0.0286  0.0286  0.0000    1  2.62907E-07 kpt; spin; max resid(k); each band:
   4.07E-13  3.61E-13  2.27E-13  2.67E-13  3.14E-13  6.04E-13  8.99E-13  2.33E-13
   3.64E-13  5.17E-13  8.54E-13  5.27E-13  2.71E-13  2.45E-13  8.86E-13  3.95E-13
   2.31E-13  3.04E-13  5.66E-13  7.15E-13  3.24E-13  5.53E-13  7.58E-13  8.20E-13
   8.91E-13  8.22E-13  4.47E-13  3.83E-13  5.10E-08  2.63E-07
   0.0214  0.0214  0.0000    1  2.22777E-07 kpt; spin; max resid(k); each band:
   2.47E-13  6.57E-13  7.43E-13  8.32E-13  9.77E-13  6.00E-13  2.53E-13  9.83E-13
   2.33E-13  3.13E-13  3.40E-13  4.85E-13  5.76E-13  2.89E-13  9.10E-13  6.11E-13
   2.73E-13  3.06E-13  5.08E-13  4.80E-13  4.59E-13  8.28E-13  8.57E-13  1.96E-13
   3.22E-13  3.53E-13  7.14E-13  4.40E-13  8.66E-08  2.23E-07
   0.0143  0.0143  0.0000    1  4.15180E-08 kpt; spin; max resid(k); each band:
   3.26E-13  5.84E-13  5.15E-13  3.77E-13  6.66E-13  8.71E-13  3.30E-13  8.19E-13
   4.14E-13  4.07E-13  5.31E-13  2.56E-13  8.25E-13  5.86E-13  3.99E-13  1.96E-13
   5.56E-13  7.47E-13  6.20E-13  9.85E-13  7.76E-13  2.88E-13  6.65E-13  5.63E-13
   7.88E-13  2.89E-13  3.42E-13  8.54E-13  4.80E-09  4.15E-08
   0.0071  0.0071  0.0000    1  7.88752E-10 kpt; spin; max resid(k); each band:
   3.49E-13  7.64E-13  4.54E-13  3.98E-13  7.10E-13  8.06E-13  4.96E-13  9.16E-13
   4.19E-13  3.83E-13  5.52E-13  2.47E-13  8.83E-13  4.39E-13  4.56E-13  2.96E-13
   6.26E-13  7.57E-13  5.50E-13  8.35E-13  9.38E-13  3.67E-13  9.04E-13  3.26E-13
   8.71E-13  2.83E-13  7.32E-13  6.75E-13  3.58E-10  7.89E-10
   0.0000  0.0000  0.0000    1  9.32187E-13 kpt; spin; max resid(k); each band:
   3.84E-13  5.38E-13  3.04E-13  3.57E-13  8.55E-13  6.80E-13  2.28E-13  3.39E-13
   3.70E-13  1.44E-13  4.62E-13  6.02E-13  5.85E-13  8.94E-13  6.13E-13  1.93E-13
   5.48E-13  7.73E-13  2.20E-13  9.08E-13  2.22E-13  4.33E-13  7.96E-13  5.06E-13
   7.27E-13  8.97E-13  3.84E-13  2.65E-13  3.67E-13  9.32E-13
 
   outwf: writing wavefunctions to: tdmft_5o_DS3_WFK with iomode: IO_MODE_FORTRAN_MASTER
 WFK output completed. cpu:  0.18 [s] , wall:  0.35 [s] <<< TIME
 prteigrs : about to open file tdmft_5o_DS3_EIG
 Eigenvalues (hartree) for nkpt= 261  k points:
 kpt#   1, nband= 30, wtk=  1.00000, kpt=  0.5000  0.5000  0.5000 (reduced coord)
  -2.10224   -1.15427   -1.15427   -1.15427   -0.96356   -0.36978   -0.36978   -0.36978
  -0.31919   -0.31919   -0.31919    0.02713    0.05419    0.05419    0.07592    0.07592
   0.07592    0.21920    0.21920    0.21920    0.35033    0.35033    0.35033    0.48352
   0.48352    0.48352    0.49486    0.49486    0.59107    0.59109
 kpt#   2, nband= 30, wtk=  1.00000, kpt=  0.4944  0.4944  0.4944 (reduced coord)
  -2.10224   -1.15427   -1.15427   -1.15427   -0.96356   -0.36984   -0.36979   -0.36979
  -0.31917   -0.31917   -0.31913    0.02717    0.05421    0.05421    0.07590    0.07593
   0.07593    0.21916    0.21916    0.21919    0.35030    0.35031    0.35031    0.48356
   0.48356    0.48358    0.49484    0.49484    0.59103    0.59106
 kpt#   3, nband= 30, wtk=  1.00000, kpt=  0.4889  0.4889  0.4889 (reduced coord)
  -2.10224   -1.15427   -1.15427   -1.15427   -0.96356   -0.37000   -0.36982   -0.36982
  -0.31912   -0.31912   -0.31898    0.02727    0.05427    0.05427    0.07584    0.07596
   0.07596    0.21905    0.21905    0.21914    0.35023    0.35025    0.35025    0.48366
   0.48366    0.48375    0.49478    0.49478    0.59091    0.59096
 kpt#   4, nband= 30, wtk=  1.00000, kpt=  0.4833  0.4833  0.4833 (reduced coord)
  -2.10224   -1.15427   -1.15427   -1.15427   -0.96357   -0.37028   -0.36988   -0.36988
  -0.31904   -0.31904   -0.31871    0.02744    0.05436    0.05436    0.07573    0.07601
   0.07601    0.21885    0.21885    0.21906    0.35012    0.35014    0.35014    0.48383
   0.48383    0.48403    0.49470    0.49470    0.59072    0.59075
 kpt#   5, nband= 30, wtk=  1.00000, kpt=  0.4778  0.4778  0.4778 (reduced coord)
  -2.10224   -1.15426   -1.15426   -1.15426   -0.96357   -0.37066   -0.36995   -0.36995
  -0.31893   -0.31893   -0.31835    0.02768    0.05449    0.05449    0.07558    0.07608
   0.07608    0.21858    0.21858    0.21895    0.34995    0.35000    0.35000    0.48404
   0.48404    0.48442    0.49460    0.49460    0.59045    0.59047
 kpt#   6, nband= 30, wtk=  1.00000, kpt=  0.4722  0.4722  0.4722 (reduced coord)
  -2.10224   -1.15426   -1.15426   -1.15426   -0.96358   -0.37114   -0.37005   -0.37005
  -0.31879   -0.31879   -0.31790    0.02798    0.05465    0.05465    0.07540    0.07617
   0.07617    0.21824    0.21824    0.21881    0.34974    0.34981    0.34981    0.48429
   0.48429    0.48492    0.49450    0.49450    0.59010    0.59037
 kpt#   7, nband= 30, wtk=  1.00000, kpt=  0.4667  0.4667  0.4667 (reduced coord)
  -2.10225   -1.15426   -1.15426   -1.15426   -0.96359   -0.37172   -0.37016   -0.37016
  -0.31862   -0.31862   -0.31735    0.02835    0.05485    0.05485    0.07518    0.07627
   0.07627    0.21782    0.21782    0.21864    0.34948    0.34959    0.34959    0.48454
   0.48454    0.48552    0.49442    0.49442    0.58968    0.58979
 kpt#   8, nband= 30, wtk=  1.00000, kpt=  0.4611  0.4611  0.4611 (reduced coord)
  -2.10225   -1.15425   -1.15425   -1.15425   -0.96360   -0.37238   -0.37030   -0.37030
  -0.31842   -0.31842   -0.31673    0.02878    0.05509    0.05509    0.07493    0.07640
   0.07640    0.21734    0.21734    0.21843    0.34918    0.34932    0.34932    0.48476
   0.48476    0.48622    0.49439    0.49439    0.58919    0.58926
 kpt#   9, nband= 30, wtk=  1.00000, kpt=  0.4556  0.4556  0.4556 (reduced coord)
  -2.10225   -1.15425   -1.15425   -1.15425   -0.96361   -0.37312   -0.37045   -0.37045
  -0.31819   -0.31819   -0.31604    0.02928    0.05536    0.05536    0.07464    0.07655
   0.07655    0.21678    0.21678    0.21820    0.34883    0.34901    0.34901    0.48491
   0.48491    0.48701    0.49446    0.49446    0.58862    0.58868
 kpt#  10, nband= 30, wtk=  1.00000, kpt=  0.4500  0.4500  0.4500 (reduced coord)
  -2.10225   -1.15424   -1.15424   -1.15424   -0.96363   -0.37394   -0.37062   -0.37062
  -0.31793   -0.31793   -0.31528    0.02984    0.05567    0.05567    0.07433    0.07672
   0.07672    0.21616    0.21616    0.21794    0.34844    0.34867    0.34867    0.48494
   0.48494    0.48788    0.49466    0.49466    0.58798    0.58803
 kpt#  11, nband= 30, wtk=  1.00000, kpt=  0.4444  0.4444  0.4444 (reduced coord)
  -2.10225   -1.15424   -1.15423   -1.15423   -0.96364   -0.37481   -0.37081   -0.37081
  -0.31765   -0.31765   -0.31446    0.03045    0.05601    0.05601    0.07400    0.07691
   0.07691    0.21548    0.21548    0.21764    0.34800    0.34828    0.34828    0.48482
   0.48482    0.48884    0.49502    0.49502    0.58727    0.58730
 kpt#  12, nband= 30, wtk=  1.00000, kpt=  0.4389  0.4389  0.4389 (reduced coord)
  -2.10225   -1.15423   -1.15423   -1.15423   -0.96366   -0.37574   -0.37101   -0.37101
  -0.31735   -0.31735   -0.31360    0.03112    0.05639    0.05639    0.07366    0.07712
   0.07712    0.21474    0.21474    0.21732    0.34752    0.34785    0.34785    0.48452
   0.48452    0.48987    0.49557    0.49557    0.58649    0.58649
 kpt#  13, nband= 30, wtk=  1.00000, kpt=  0.4333  0.4333  0.4333 (reduced coord)
  -2.10225   -1.15422   -1.15422   -1.15422   -0.96368   -0.37673   -0.37123   -0.37123
  -0.31702   -0.31702   -0.31270    0.03185    0.05680    0.05680    0.07330    0.07735
   0.07735    0.21395    0.21395    0.21697    0.34700    0.34739    0.34739    0.48405
   0.48405    0.49096    0.49629    0.49629    0.58565    0.58565
 kpt#  14, nband= 30, wtk=  1.00000, kpt=  0.4278  0.4278  0.4278 (reduced coord)
  -2.10225   -1.15421   -1.15421   -1.15421   -0.96370   -0.37775   -0.37145   -0.37145
  -0.31667   -0.31667   -0.31176    0.03263    0.05724    0.05724    0.07294    0.07761
   0.07761    0.21310    0.21310    0.21659    0.34644    0.34689    0.34689    0.48342
   0.48342    0.49212    0.49717    0.49717    0.58474    0.58477
 kpt#  15, nband= 30, wtk=  1.00000, kpt=  0.4222  0.4222  0.4222 (reduced coord)
  -2.10225   -1.15420   -1.15420   -1.15420   -0.96372   -0.37882   -0.37169   -0.37169
  -0.31631   -0.31631   -0.31079    0.03345    0.05772    0.05772    0.07258    0.07788
   0.07788    0.21221    0.21221    0.21619    0.34584    0.34635    0.34635    0.48264
   0.48264    0.49332    0.49819    0.49819    0.58378    0.58380
 kpt#  16, nband= 30, wtk=  1.00000, kpt=  0.4167  0.4167  0.4167 (reduced coord)
  -2.10225   -1.15419   -1.15419   -1.15419   -0.96374   -0.37991   -0.37194   -0.37194
  -0.31593   -0.31593   -0.30981    0.03431    0.05823    0.05823    0.07224    0.07819
   0.07819    0.21127    0.21127    0.21576    0.34519    0.34577    0.34577    0.48172
   0.48172    0.49456    0.49932    0.49932    0.58275    0.58277
 kpt#  17, nband= 30, wtk=  1.00000, kpt=  0.4111  0.4111  0.4111 (reduced coord)
  -2.10225   -1.15418   -1.15418   -1.15418   -0.96376   -0.38103   -0.37220   -0.37220
  -0.31553   -0.31553   -0.30881    0.03521    0.05877    0.05877    0.07192    0.07851
   0.07851    0.21030    0.21030    0.21530    0.34451    0.34515    0.34515    0.48069
   0.48069    0.49583    0.50055    0.50055    0.58168    0.58169
 kpt#  18, nband= 30, wtk=  1.00000, kpt=  0.4056  0.4056  0.4056 (reduced coord)
  -2.10225   -1.15417   -1.15417   -1.15417   -0.96379   -0.38217   -0.37246   -0.37246
  -0.31512   -0.31512   -0.30780    0.03614    0.05935    0.05935    0.07162    0.07887
   0.07887    0.20930    0.20930    0.21482    0.34379    0.34450    0.34450    0.47956
   0.47956    0.49712    0.50184    0.50184    0.58056    0.58056
 kpt#  19, nband= 30, wtk=  1.00000, kpt=  0.4000  0.4000  0.4000 (reduced coord)
  -2.10225   -1.15416   -1.15416   -1.15416   -0.96382   -0.38333   -0.37273   -0.37273
  -0.31470   -0.31470   -0.30678    0.03709    0.05995    0.05995    0.07137    0.07925
   0.07925    0.20826    0.20826    0.21431    0.34303    0.34381    0.34381    0.47833
   0.47833    0.49842    0.50318    0.50318    0.57939    0.57939
 kpt#  20, nband= 30, wtk=  1.00000, kpt=  0.3944  0.3944  0.3944 (reduced coord)
  -2.10225   -1.15415   -1.15414   -1.15414   -0.96384   -0.38450   -0.37300   -0.37300
  -0.31426   -0.31426   -0.30577    0.03806    0.06058    0.06058    0.07116    0.07965
   0.07965    0.20720    0.20720    0.21378    0.34223    0.34309    0.34309    0.47702
   0.47702    0.49972    0.50455    0.50455    0.57819    0.57819
 kpt#  21, nband= 30, wtk=  1.00000, kpt=  0.3889  0.3889  0.3889 (reduced coord)
  -2.10226   -1.15414   -1.15413   -1.15413   -0.96387   -0.38569   -0.37328   -0.37328
  -0.31382   -0.31382   -0.30476    0.03904    0.06124    0.06124    0.07102    0.08008
   0.08008    0.20611    0.20611    0.21323    0.34140    0.34233    0.34233    0.47563
   0.47563    0.50102    0.50595    0.50595    0.57696    0.57696
 kpt#  22, nband= 30, wtk=  1.00000, kpt=  0.3833  0.3833  0.3833 (reduced coord)
  -2.10226   -1.15413   -1.15412   -1.15412   -0.96390   -0.38687   -0.37356   -0.37356
  -0.31338   -0.31338   -0.30376    0.04002    0.06193    0.06193    0.07095    0.08054
   0.08054    0.20501    0.20501    0.21266    0.34054    0.34154    0.34154    0.47416
   0.47416    0.50229    0.50734    0.50734    0.57570    0.57571
 kpt#  23, nband= 30, wtk=  1.00000, kpt=  0.3778  0.3778  0.3778 (reduced coord)
  -2.10226   -1.15411   -1.15410   -1.15410   -0.96394   -0.38806   -0.37384   -0.37384
  -0.31292   -0.31292   -0.30277    0.04099    0.06264    0.06264    0.07097    0.08103
   0.08103    0.20390    0.20390    0.21206    0.33964    0.34072    0.34072    0.47262
   0.47262    0.50354    0.50872    0.50872    0.57444    0.57444
 kpt#  24, nband= 30, wtk=  1.00000, kpt=  0.3722  0.3722  0.3722 (reduced coord)
  -2.10226   -1.15410   -1.15409   -1.15409   -0.96397   -0.38925   -0.37412   -0.37412
  -0.31247   -0.31247   -0.30180    0.04193    0.06338    0.06338    0.07109    0.08156
   0.08156    0.20278    0.20278    0.21145    0.33870    0.33986    0.33986    0.47102
   0.47102    0.50476    0.51006    0.51006    0.57317    0.57317
 kpt#  25, nband= 30, wtk=  1.00000, kpt=  0.3667  0.3667  0.3667 (reduced coord)
  -2.10226   -1.15408   -1.15407   -1.15407   -0.96400   -0.39044   -0.37440   -0.37440
  -0.31201   -0.31201   -0.30086    0.04285    0.06414    0.06414    0.07132    0.08211
   0.08211    0.20165    0.20165    0.21081    0.33774    0.33897    0.33897    0.46935
   0.46935    0.50594    0.51135    0.51135    0.57190    0.57190
 kpt#  26, nband= 30, wtk=  1.00000, kpt=  0.3611  0.3611  0.3611 (reduced coord)
  -2.10226   -1.15407   -1.15406   -1.15406   -0.96404   -0.39162   -0.37468   -0.37468
  -0.31156   -0.31156   -0.29993    0.04373    0.06492    0.06492    0.07168    0.08269
   0.08269    0.20053    0.20053    0.21016    0.33674    0.33806    0.33806    0.46763
   0.46763    0.50706    0.51257    0.51257    0.57065    0.57065
 kpt#  27, nband= 30, wtk=  1.00000, kpt=  0.3556  0.3556  0.3556 (reduced coord)
  -2.10226   -1.15405   -1.15404   -1.15404   -0.96408   -0.39279   -0.37495   -0.37495
  -0.31110   -0.31110   -0.29903    0.04456    0.06573    0.06573    0.07217    0.08331
   0.08331    0.19940    0.19940    0.20949    0.33571    0.33711    0.33711    0.46584
   0.46584    0.50813    0.51370    0.51370    0.56944    0.56944
 kpt#  28, nband= 30, wtk=  1.00000, kpt=  0.3500  0.3500  0.3500 (reduced coord)
  -2.10226   -1.15404   -1.15403   -1.15403   -0.96411   -0.39395   -0.37523   -0.37523
  -0.31065   -0.31065   -0.29816    0.04534    0.06655    0.06655    0.07281    0.08396
   0.08396    0.19828    0.19828    0.20881    0.33466    0.33613    0.33613    0.46401
   0.46401    0.50914    0.51472    0.51472    0.56826    0.56826
 kpt#  29, nband= 30, wtk=  1.00000, kpt=  0.3444  0.3444  0.3444 (reduced coord)
  -2.10227   -1.15402   -1.15401   -1.15401   -0.96415   -0.39511   -0.37549   -0.37549
  -0.31021   -0.31021   -0.29733    0.04606    0.06739    0.06739    0.07360    0.08465
   0.08465    0.19718    0.19718    0.20811    0.33357    0.33513    0.33513    0.46212
   0.46212    0.51008    0.51561    0.51561    0.56715    0.56715
 kpt#  30, nband= 30, wtk=  1.00000, kpt=  0.3389  0.3389  0.3389 (reduced coord)
  -2.10227   -1.15401   -1.15399   -1.15399   -0.96419   -0.39624   -0.37575   -0.37575
  -0.30977   -0.30977   -0.29652    0.04673    0.06825    0.06825    0.07455    0.08537
   0.08537    0.19609    0.19609    0.20739    0.33245    0.33410    0.33410    0.46018
   0.46018    0.51095    0.51635    0.51635    0.56611    0.56611
 kpt#  31, nband= 30, wtk=  1.00000, kpt=  0.3333  0.3333  0.3333 (reduced coord)
  -2.10227   -1.15399   -1.15397   -1.15397   -0.96423   -0.39737   -0.37601   -0.37601
  -0.30933   -0.30933   -0.29576    0.04734    0.06913    0.06913    0.07564    0.08613
   0.08613    0.19501    0.19501    0.20667    0.33131    0.33304    0.33304    0.45819
   0.45819    0.51174    0.51692    0.51692    0.56516    0.56516
 kpt#  32, nband= 30, wtk=  1.00000, kpt=  0.3278  0.3278  0.3278 (reduced coord)
  -2.10227   -1.15397   -1.15396   -1.15396   -0.96428   -0.39848   -0.37625   -0.37625
  -0.30891   -0.30891   -0.29503    0.04791    0.07001    0.07001    0.07688    0.08693
   0.08693    0.19396    0.19396    0.20593    0.33014    0.33195    0.33195    0.45616
   0.45616    0.51246    0.51730    0.51730    0.56430    0.56430
 kpt#  33, nband= 30, wtk=  1.00000, kpt=  0.3222  0.3222  0.3222 (reduced coord)
  -2.10227   -1.15395   -1.15394   -1.15394   -0.96432   -0.39956   -0.37649   -0.37649
  -0.30850   -0.30850   -0.29435    0.04844    0.07091    0.07091    0.07826    0.08777
   0.08777    0.19293    0.19293    0.20518    0.32894    0.33085    0.33085    0.45408
   0.45408    0.51310    0.51748    0.51748    0.56356    0.56356
 kpt#  34, nband= 30, wtk=  1.00000, kpt=  0.3167  0.3167  0.3167 (reduced coord)
  -2.10227   -1.15394   -1.15392   -1.15392   -0.96436   -0.40063   -0.37673   -0.37673
  -0.30809   -0.30809   -0.29371    0.04894    0.07182    0.07182    0.07977    0.08865
   0.08865    0.19193    0.19193    0.20442    0.32772    0.32971    0.32971    0.45197
   0.45197    0.51366    0.51744    0.51744    0.56293    0.56293
 kpt#  35, nband= 30, wtk=  1.00000, kpt=  0.3111  0.3111  0.3111 (reduced coord)
  -2.10228   -1.15392   -1.15390   -1.15390   -0.96441   -0.40168   -0.37695   -0.37695
  -0.30770   -0.30770   -0.29311    0.04942    0.07274    0.07274    0.08141    0.08957
   0.08957    0.19096    0.19096    0.20365    0.32647    0.32856    0.32856    0.44981
   0.44981    0.51414    0.51717    0.51717    0.56242    0.56242
 kpt#  36, nband= 30, wtk=  1.00000, kpt=  0.3056  0.3056  0.3056 (reduced coord)
  -2.10228   -1.15390   -1.15388   -1.15388   -0.96445   -0.40271   -0.37716   -0.37716
  -0.30732   -0.30732   -0.29256    0.04990    0.07366    0.07366    0.08316    0.09053
   0.09053    0.19003    0.19003    0.20288    0.32520    0.32738    0.32738    0.44762
   0.44762    0.51454    0.51668    0.51668    0.56202    0.56202
 kpt#  37, nband= 30, wtk=  1.00000, kpt=  0.3000  0.3000  0.3000 (reduced coord)
  -2.10228   -1.15388   -1.15386   -1.15386   -0.96450   -0.40372   -0.37737   -0.37737
  -0.30696   -0.30696   -0.29206    0.05037    0.07459    0.07459    0.08501    0.09153
   0.09153    0.18913    0.18913    0.20210    0.32391    0.32619    0.32619    0.44540
   0.44540    0.51486    0.51598    0.51598    0.56173    0.56173
 kpt#  38, nband= 30, wtk=  1.00000, kpt=  0.2944  0.2944  0.2944 (reduced coord)
  -2.10228   -1.15386   -1.15384   -1.15384   -0.96454   -0.40470   -0.37756   -0.37756
  -0.30661   -0.30661   -0.29160    0.05086    0.07553    0.07553    0.08696    0.09258
   0.09258    0.18827    0.18827    0.20131    0.32260    0.32497    0.32497    0.44314
   0.44314    0.51506    0.51506    0.51510    0.56153    0.56153
 kpt#  39, nband= 30, wtk=  1.00000, kpt=  0.2889  0.2889  0.2889 (reduced coord)
  -2.10228   -1.15384   -1.15382   -1.15382   -0.96459   -0.40566   -0.37775   -0.37775
  -0.30628   -0.30628   -0.29120    0.05136    0.07646    0.07646    0.08900    0.09367
   0.09367    0.18745    0.18745    0.20052    0.32126    0.32373    0.32373    0.44085
   0.44085    0.51394    0.51394    0.51526    0.56140    0.56140
 kpt#  40, nband= 30, wtk=  1.00000, kpt=  0.2833  0.2833  0.2833 (reduced coord)
  -2.10228   -1.15382   -1.15380   -1.15380   -0.96464   -0.40659   -0.37792   -0.37792
  -0.30596   -0.30596   -0.29084    0.05189    0.07740    0.07740    0.09111    0.09480
   0.09480    0.18668    0.18668    0.19972    0.31990    0.32247    0.32247    0.43853
   0.43853    0.51264    0.51264    0.51535    0.56133    0.56133
 kpt#  41, nband= 30, wtk=  1.00000, kpt=  0.2778  0.2778  0.2778 (reduced coord)
  -2.10229   -1.15380   -1.15378   -1.15378   -0.96469   -0.40750   -0.37808   -0.37808
  -0.30566   -0.30566   -0.29054    0.05245    0.07833    0.07833    0.09330    0.09597
   0.09597    0.18595    0.18595    0.19892    0.31853    0.32120    0.32120    0.43618
   0.43618    0.51118    0.51118    0.51537    0.56130    0.56130
 kpt#  42, nband= 30, wtk=  1.00000, kpt=  0.2722  0.2722  0.2722 (reduced coord)
  -2.10229   -1.15378   -1.15376   -1.15376   -0.96474   -0.40838   -0.37823   -0.37823
  -0.30538   -0.30538   -0.29028    0.05305    0.07926    0.07926    0.09556    0.09719
   0.09719    0.18528    0.18528    0.19812    0.31713    0.31991    0.31991    0.43381
   0.43381    0.50957    0.50957    0.51531    0.56129    0.56129
 kpt#  43, nband= 30, wtk=  1.00000, kpt=  0.2667  0.2667  0.2667 (reduced coord)
  -2.10229   -1.15376   -1.15374   -1.15374   -0.96479   -0.40923   -0.37837   -0.37837
  -0.30511   -0.30511   -0.29008    0.05369    0.08019    0.08019    0.09787    0.09846
   0.09846    0.18465    0.18465    0.19732    0.31572    0.31860    0.31860    0.43142
   0.43142    0.50783    0.50783    0.51519    0.56128    0.56128
 kpt#  44, nband= 30, wtk=  1.00000, kpt=  0.2611  0.2611  0.2611 (reduced coord)
  -2.10229   -1.15374   -1.15372   -1.15372   -0.96484   -0.41006   -0.37850   -0.37850
  -0.30487   -0.30487   -0.28993    0.05438    0.08111    0.08111    0.09976    0.09976
   0.10025    0.18408    0.18408    0.19652    0.31430    0.31728    0.31728    0.42901
   0.42901    0.50597    0.50597    0.51500    0.56125    0.56125
 kpt#  45, nband= 30, wtk=  1.00000, kpt=  0.2556  0.2556  0.2556 (reduced coord)
  -2.10229   -1.15372   -1.15370   -1.15370   -0.96489   -0.41085   -0.37862   -0.37862
  -0.30464   -0.30464   -0.28982    0.05511    0.08202    0.08202    0.10111    0.10111
   0.10267    0.18357    0.18357    0.19572    0.31285    0.31594    0.31594    0.42657
   0.42657    0.50400    0.50400    0.51474    0.56120    0.56120
 kpt#  46, nband= 30, wtk=  1.00000, kpt=  0.2500  0.2500  0.2500 (reduced coord)
  -2.10229   -1.15370   -1.15368   -1.15368   -0.96494   -0.41162   -0.37873   -0.37873
  -0.30443   -0.30443   -0.28977    0.05589    0.08293    0.08293    0.10250    0.10250
   0.10513    0.18311    0.18311    0.19493    0.31140    0.31459    0.31459    0.42413
   0.42413    0.50195    0.50195    0.51443    0.56111    0.56111
 kpt#  47, nband= 30, wtk=  1.00000, kpt=  0.2444  0.2444  0.2444 (reduced coord)
  -2.10230   -1.15368   -1.15366   -1.15366   -0.96499   -0.41236   -0.37882   -0.37882
  -0.30424   -0.30424   -0.28977    0.05672    0.08383    0.08383    0.10393    0.10393
   0.10764    0.18271    0.18271    0.19413    0.30993    0.31323    0.31323    0.42166
   0.42166    0.49981    0.49981    0.51405    0.56098    0.56098
 kpt#  48, nband= 30, wtk=  1.00000, kpt=  0.2389  0.2389  0.2389 (reduced coord)
  -2.10230   -1.15366   -1.15364   -1.15364   -0.96504   -0.41307   -0.37890   -0.37890
  -0.30408   -0.30408   -0.28981    0.05760    0.08471    0.08471    0.10540    0.10540
   0.11019    0.18237    0.18237    0.19335    0.30845    0.31185    0.31185    0.41918
   0.41918    0.49761    0.49761    0.51362    0.56079    0.56079
 kpt#  49, nband= 30, wtk=  1.00000, kpt=  0.2333  0.2333  0.2333 (reduced coord)
  -2.10230   -1.15364   -1.15362   -1.15362   -0.96509   -0.41375   -0.37897   -0.37897
  -0.30393   -0.30393   -0.28990    0.05854    0.08558    0.08558    0.10691    0.10691
   0.11278    0.18210    0.18210    0.19256    0.30696    0.31046    0.31046    0.41670
   0.41670    0.49535    0.49535    0.51313    0.56054    0.56054
 kpt#  50, nband= 30, wtk=  1.00000, kpt=  0.2278  0.2278  0.2278 (reduced coord)
  -2.10230   -1.15362   -1.15360   -1.15360   -0.96515   -0.41441   -0.37903   -0.37903
  -0.30380   -0.30380   -0.29004    0.05952    0.08644    0.08644    0.10847    0.10847
   0.11539    0.18188    0.18188    0.19179    0.30546    0.30906    0.30906    0.41420
   0.41420    0.49303    0.49303    0.51258    0.56023    0.56023
 kpt#  51, nband= 30, wtk=  1.00000, kpt=  0.2222  0.2222  0.2222 (reduced coord)
  -2.10230   -1.15360   -1.15357   -1.15357   -0.96520   -0.41503   -0.37908   -0.37908
  -0.30369   -0.30369   -0.29022    0.06055    0.08728    0.08728    0.11006    0.11006
   0.11804    0.18173    0.18173    0.19102    0.30395    0.30765    0.30765    0.41170
   0.41170    0.49067    0.49067    0.51197    0.55985    0.55985
 kpt#  52, nband= 30, wtk=  1.00000, kpt=  0.2167  0.2167  0.2167 (reduced coord)
  -2.10230   -1.15358   -1.15355   -1.15355   -0.96525   -0.41562   -0.37912   -0.37912
  -0.30360   -0.30360   -0.29044    0.06164    0.08810    0.08810    0.11168    0.11168
   0.12071    0.18165    0.18165    0.19025    0.30244    0.30623    0.30623    0.40919
   0.40919    0.48827    0.48827    0.51131    0.55941    0.55941
 kpt#  53, nband= 30, wtk=  1.00000, kpt=  0.2111  0.2111  0.2111 (reduced coord)
  -2.10231   -1.15356   -1.15353   -1.15353   -0.96530   -0.41619   -0.37914   -0.37914
  -0.30353   -0.30353   -0.29071    0.06276    0.08891    0.08891    0.11335    0.11335
   0.12340    0.18163    0.18163    0.18950    0.30092    0.30480    0.30480    0.40668
   0.40668    0.48584    0.48584    0.51059    0.55891    0.55891
 kpt#  54, nband= 30, wtk=  1.00000, kpt=  0.2056  0.2056  0.2056 (reduced coord)
  -2.10231   -1.15354   -1.15351   -1.15351   -0.96535   -0.41673   -0.37916   -0.37916
  -0.30347   -0.30347   -0.29101    0.06393    0.08969    0.08969    0.11505    0.11505
   0.12611    0.18167    0.18167    0.18876    0.29940    0.30336    0.30336    0.40417
   0.40417    0.48338    0.48338    0.50982    0.55834    0.55834
 kpt#  55, nband= 30, wtk=  1.00000, kpt=  0.2000  0.2000  0.2000 (reduced coord)
  -2.10231   -1.15352   -1.15349   -1.15349   -0.96541   -0.41723   -0.37916   -0.37916
  -0.30344   -0.30344   -0.29135    0.06515    0.09046    0.09046    0.11678    0.11678
   0.12884    0.18178    0.18178    0.18802    0.29788    0.30191    0.30191    0.40167
   0.40167    0.48090    0.48090    0.50898    0.55771    0.55771
 kpt#  56, nband= 30, wtk=  1.00000, kpt=  0.1944  0.1944  0.1944 (reduced coord)
  -2.10231   -1.15350   -1.15347   -1.15347   -0.96546   -0.41771   -0.37916   -0.37916
  -0.30342   -0.30342   -0.29173    0.06640    0.09120    0.09120    0.11855    0.11855
   0.13159    0.18195    0.18195    0.18730    0.29636    0.30045    0.30045    0.39917
   0.39917    0.47841    0.47841    0.50808    0.55703    0.55703
 kpt#  57, nband= 30, wtk=  1.00000, kpt=  0.1889  0.1889  0.1889 (reduced coord)
  -2.10231   -1.15348   -1.15345   -1.15345   -0.96551   -0.41816   -0.37914   -0.37914
  -0.30342   -0.30342   -0.29214    0.06768    0.09192    0.09192    0.12035    0.12035
   0.13434    0.18219    0.18219    0.18659    0.29483    0.29898    0.29898    0.39667
   0.39667    0.47590    0.47590    0.50711    0.55629    0.55630
 kpt#  58, nband= 30, wtk=  1.00000, kpt=  0.1833  0.1833  0.1833 (reduced coord)
  -2.10231   -1.15346   -1.15344   -1.15344   -0.96556   -0.41859   -0.37911   -0.37911
  -0.30344   -0.30344   -0.29258    0.06900    0.09261    0.09261    0.12218    0.12218
   0.13711    0.18249    0.18249    0.18589    0.29331    0.29751    0.29751    0.39419
   0.39419    0.47339    0.47339    0.50608    0.55551    0.55551
 kpt#  59, nband= 30, wtk=  1.00000, kpt=  0.1778  0.1778  0.1778 (reduced coord)
  -2.10232   -1.15344   -1.15342   -1.15342   -0.96561   -0.41898   -0.37908   -0.37908
  -0.30347   -0.30347   -0.29305    0.07035    0.09328    0.09328    0.12404    0.12404
   0.13988    0.18285    0.18285    0.18520    0.29180    0.29603    0.29603    0.39172
   0.39172    0.47088    0.47088    0.50497    0.55468    0.55468
 kpt#  60, nband= 30, wtk=  1.00000, kpt=  0.1722  0.1722  0.1722 (reduced coord)
  -2.10232   -1.15342   -1.15340   -1.15340   -0.96566   -0.41935   -0.37904   -0.37904
  -0.30352   -0.30352   -0.29354    0.07172    0.09393    0.09393    0.12592    0.12592
   0.14265    0.18328    0.18328    0.18453    0.29028    0.29454    0.29454    0.38927
   0.38927    0.46837    0.46837    0.50379    0.55382    0.55382
 kpt#  61, nband= 30, wtk=  1.00000, kpt=  0.1667  0.1667  0.1667 (reduced coord)
  -2.10232   -1.15340   -1.15338   -1.15338   -0.96571   -0.41969   -0.37899   -0.37899
  -0.30358   -0.30358   -0.29405    0.07311    0.09455    0.09455    0.12783    0.12783
   0.14543    0.18376    0.18376    0.18388    0.28878    0.29304    0.29304    0.38683
   0.38683    0.46588    0.46588    0.50253    0.55292    0.55293
 kpt#  62, nband= 30, wtk=  1.00000, kpt=  0.1611  0.1611  0.1611 (reduced coord)
  -2.10232   -1.15339   -1.15336   -1.15336   -0.96576   -0.42001   -0.37893   -0.37893
  -0.30366   -0.30366   -0.29459    0.07452    0.09514    0.09514    0.12976    0.12976
   0.14820    0.18323    0.18430    0.18430    0.28728    0.29154    0.29154    0.38442
   0.38442    0.46339    0.46339    0.50119    0.55200    0.55200
 kpt#  63, nband= 30, wtk=  1.00000, kpt=  0.1556  0.1556  0.1556 (reduced coord)
  -2.10232   -1.15337   -1.15334   -1.15334   -0.96581   -0.42030   -0.37886   -0.37886
  -0.30375   -0.30375   -0.29514    0.07594    0.09570    0.09570    0.13172    0.13172
   0.15097    0.18261    0.18489    0.18489    0.28579    0.29003    0.29003    0.38203
   0.38203    0.46092    0.46092    0.49977    0.55105    0.55106
 kpt#  64, nband= 30, wtk=  1.00000, kpt=  0.1500  0.1500  0.1500 (reduced coord)
  -2.10232   -1.15335   -1.15333   -1.15333   -0.96585   -0.42057   -0.37879   -0.37879
  -0.30385   -0.30385   -0.29571    0.07737    0.09624    0.09624    0.13369    0.13369
   0.15373    0.18200    0.18553    0.18553    0.28431    0.28852    0.28852    0.37966
   0.37966    0.45847    0.45847    0.49827    0.55010    0.55011
 kpt#  65, nband= 30, wtk=  1.00000, kpt=  0.1444  0.1444  0.1444 (reduced coord)
  -2.10232   -1.15333   -1.15331   -1.15331   -0.96590   -0.42082   -0.37871   -0.37871
  -0.30396   -0.30396   -0.29629    0.07880    0.09675    0.09675    0.13567    0.13567
   0.15648    0.18140    0.18622    0.18622    0.28285    0.28700    0.28700    0.37733
   0.37733    0.45606    0.45606    0.49668    0.54912    0.54970
 kpt#  66, nband= 30, wtk=  1.00000, kpt=  0.1389  0.1389  0.1389 (reduced coord)
  -2.10233   -1.15331   -1.15329   -1.15329   -0.96595   -0.42104   -0.37863   -0.37863
  -0.30408   -0.30408   -0.29688    0.08022    0.09724    0.09724    0.13767    0.13767
   0.15921    0.18083    0.18696    0.18696    0.28140    0.28548    0.28548    0.37503
   0.37503    0.45367    0.45367    0.49501    0.54815    0.54816
 kpt#  67, nband= 30, wtk=  1.00000, kpt=  0.1333  0.1333  0.1333 (reduced coord)
  -2.10233   -1.15330   -1.15328   -1.15328   -0.96599   -0.42125   -0.37854   -0.37854
  -0.30421   -0.30421   -0.29747    0.08164    0.09769    0.09769    0.13967    0.13967
   0.16192    0.18027    0.18774    0.18774    0.27996    0.28395    0.28395    0.37277
   0.37277    0.45132    0.45132    0.49327    0.54717    0.54723
 kpt#  68, nband= 30, wtk=  1.00000, kpt=  0.1278  0.1278  0.1278 (reduced coord)
  -2.10233   -1.15328   -1.15326   -1.15326   -0.96603   -0.42143   -0.37845   -0.37845
  -0.30434   -0.30434   -0.29807    0.08305    0.09813    0.09813    0.14168    0.14168
   0.16460    0.17974    0.18855    0.18855    0.27854    0.28243    0.28243    0.37055
   0.37055    0.44902    0.44902    0.49146    0.54620    0.54734
 kpt#  69, nband= 30, wtk=  1.00000, kpt=  0.1222  0.1222  0.1222 (reduced coord)
  -2.10233   -1.15327   -1.15325   -1.15325   -0.96608   -0.42159   -0.37836   -0.37836
  -0.30448   -0.30448   -0.29867    0.08444    0.09853    0.09853    0.14368    0.14368
   0.16727    0.17922    0.18940    0.18940    0.27714    0.28090    0.28090    0.36837
   0.36837    0.44676    0.44676    0.48960    0.54524    0.54622
 kpt#  70, nband= 30, wtk=  1.00000, kpt=  0.1167  0.1167  0.1167 (reduced coord)
  -2.10233   -1.15325   -1.15323   -1.15323   -0.96612   -0.42174   -0.37826   -0.37826
  -0.30463   -0.30463   -0.29926    0.08582    0.09892    0.09892    0.14568    0.14568
   0.16989    0.17872    0.19027    0.19027    0.27575    0.27938    0.27938    0.36625
   0.36625    0.44456    0.44456    0.48768    0.54430    0.54495
 kpt#  71, nband= 30, wtk=  1.00000, kpt=  0.1111  0.1111  0.1111 (reduced coord)
  -2.10233   -1.15324   -1.15322   -1.15322   -0.96616   -0.42187   -0.37816   -0.37816
  -0.30478   -0.30478   -0.29985    0.08716    0.09927    0.09927    0.14767    0.14767
   0.17249    0.17824    0.19117    0.19117    0.27439    0.27786    0.27786    0.36417
   0.36417    0.44241    0.44241    0.48573    0.54337    0.54368
 kpt#  72, nband= 30, wtk=  1.00000, kpt=  0.1056  0.1056  0.1056 (reduced coord)
  -2.10233   -1.15322   -1.15321   -1.15321   -0.96620   -0.42198   -0.37806   -0.37806
  -0.30493   -0.30493   -0.30043    0.08848    0.09961    0.09961    0.14965    0.14965
   0.17504    0.17778    0.19209    0.19209    0.27305    0.27634    0.27634    0.36215
   0.36215    0.44033    0.44033    0.48375    0.54246    0.54248
 kpt#  73, nband= 30, wtk=  1.00000, kpt=  0.1000  0.1000  0.1000 (reduced coord)
  -2.10233   -1.15321   -1.15320   -1.15320   -0.96623   -0.42208   -0.37796   -0.37796
  -0.30508   -0.30508   -0.30100    0.08975    0.09992    0.09992    0.15160    0.15160
   0.17735    0.17754    0.19302    0.19302    0.27173    0.27484    0.27484    0.36020
   0.36020    0.43832    0.43832    0.48177    0.54132    0.54158
 kpt#  74, nband= 30, wtk=  1.00000, kpt=  0.0944  0.0944  0.0944 (reduced coord)
  -2.10234   -1.15319   -1.15318   -1.15318   -0.96627   -0.42216   -0.37786   -0.37786
  -0.30524   -0.30524   -0.30156    0.09099    0.10021    0.10021    0.15353    0.15353
   0.17693    0.17999    0.19396    0.19396    0.27044    0.27334    0.27334    0.35831
   0.35831    0.43638    0.43638    0.47979    0.54028    0.54073
 kpt#  75, nband= 30, wtk=  1.00000, kpt=  0.0889  0.0889  0.0889 (reduced coord)
  -2.10234   -1.15318   -1.15317   -1.15317   -0.96630   -0.42223   -0.37776   -0.37776
  -0.30539   -0.30539   -0.30210    0.09219    0.10048    0.10048    0.15542    0.15542
   0.17654    0.18238    0.19491    0.19491    0.26918    0.27187    0.27187    0.35649
   0.35649    0.43452    0.43452    0.47783    0.53937    0.53991
 kpt#  76, nband= 30, wtk=  1.00000, kpt=  0.0833  0.0833  0.0833 (reduced coord)
  -2.10234   -1.15317   -1.15316   -1.15316   -0.96634   -0.42229   -0.37766   -0.37766
  -0.30554   -0.30554   -0.30262    0.09334    0.10072    0.10072    0.15727    0.15727
   0.17616    0.18470    0.19585    0.19585    0.26795    0.27041    0.27041    0.35474
   0.35474    0.43275    0.43275    0.47590    0.53854    0.53913
 kpt#  77, nband= 30, wtk=  1.00000, kpt=  0.0778  0.0778  0.0778 (reduced coord)
  -2.10234   -1.15316   -1.15315   -1.15315   -0.96637   -0.42234   -0.37757   -0.37757
  -0.30569   -0.30569   -0.30312    0.09443    0.10095    0.10095    0.15906    0.15906
   0.17582    0.18695    0.19678    0.19678    0.26675    0.26899    0.26899    0.35308
   0.35308    0.43107    0.43107    0.47402    0.53779    0.53839
 kpt#  78, nband= 30, wtk=  1.00000, kpt=  0.0722  0.0722  0.0722 (reduced coord)
  -2.10234   -1.15315   -1.15314   -1.15314   -0.96639   -0.42238   -0.37747   -0.37747
  -0.30583   -0.30583   -0.30360    0.09547    0.10116    0.10116    0.16080    0.16080
   0.17549    0.18912    0.19770    0.19770    0.26559    0.26759    0.26759    0.35150
   0.35150    0.42947    0.42947    0.47220    0.53716    0.53769
 kpt#  79, nband= 30, wtk=  1.00000, kpt=  0.0667  0.0667  0.0667 (reduced coord)
  -2.10234   -1.15314   -1.15313   -1.15313   -0.96642   -0.42241   -0.37738   -0.37738
  -0.30596   -0.30596   -0.30405    0.09644    0.10135    0.10135    0.16246    0.16246
   0.17519    0.19119    0.19860    0.19860    0.26448    0.26624    0.26624    0.35001
   0.35001    0.42798    0.42798    0.47046    0.53632    0.53703
 kpt#  80, nband= 30, wtk=  1.00000, kpt=  0.0611  0.0611  0.0611 (reduced coord)
  -2.10234   -1.15313   -1.15312   -1.15312   -0.96645   -0.42244   -0.37730   -0.37730
  -0.30609   -0.30609   -0.30448    0.09736    0.10152    0.10152    0.16405    0.16405
   0.17490    0.19316    0.19946    0.19946    0.26341    0.26493    0.26493    0.34862
   0.34862    0.42659    0.42659    0.46881    0.53566    0.53641
 kpt#  81, nband= 30, wtk=  1.00000, kpt=  0.0556  0.0556  0.0556 (reduced coord)
  -2.10234   -1.15312   -1.15312   -1.15312   -0.96647   -0.42246   -0.37722   -0.37722
  -0.30622   -0.30622   -0.30487    0.09820    0.10168    0.10168    0.16554    0.16554
   0.17465    0.19502    0.20030    0.20030    0.26239    0.26369    0.26369    0.34733
   0.34733    0.42531    0.42531    0.46726    0.53517    0.53585
 kpt#  82, nband= 30, wtk=  1.00000, kpt=  0.0500  0.0500  0.0500 (reduced coord)
  -2.10234   -1.15311   -1.15311   -1.15311   -0.96649   -0.42247   -0.37715   -0.37715
  -0.30633   -0.30633   -0.30523    0.09898    0.10182    0.10182    0.16694    0.16694
   0.17442    0.19676    0.20109    0.20109    0.26143    0.26251    0.26251    0.34614
   0.34614    0.42413    0.42413    0.46582    0.53474    0.53533
 kpt#  83, nband= 30, wtk=  1.00000, kpt=  0.0444  0.0444  0.0444 (reduced coord)
  -2.10234   -1.15311   -1.15310   -1.15310   -0.96651   -0.42248   -0.37708   -0.37708
  -0.30643   -0.30643   -0.30556    0.09968    0.10194    0.10194    0.16823    0.16823
   0.17421    0.19837    0.20183    0.20183    0.26053    0.26140    0.26140    0.34506
   0.34506    0.42308    0.42308    0.46451    0.53440    0.53486
 kpt#  84, nband= 30, wtk=  1.00000, kpt=  0.0389  0.0389  0.0389 (reduced coord)
  -2.10234   -1.15310   -1.15310   -1.15310   -0.96653   -0.42249   -0.37702   -0.37702
  -0.30653   -0.30653   -0.30586    0.10030    0.10205    0.10205    0.16939    0.16939
   0.17402    0.19983    0.20251    0.20251    0.25971    0.26039    0.26039    0.34410
   0.34410    0.42213    0.42213    0.46332    0.53406    0.53445
 kpt#  85, nband= 30, wtk=  1.00000, kpt=  0.0333  0.0333  0.0333 (reduced coord)
  -2.10234   -1.15310   -1.15309   -1.15309   -0.96654   -0.42249   -0.37696   -0.37696
  -0.30661   -0.30661   -0.30612    0.10085    0.10214    0.10214    0.17043    0.17043
   0.17386    0.20114    0.20312    0.20312    0.25898    0.25948    0.25948    0.34326
   0.34326    0.42131    0.42131    0.46228    0.53380    0.53409
 kpt#  86, nband= 30, wtk=  1.00000, kpt=  0.0278  0.0278  0.0278 (reduced coord)
  -2.10234   -1.15309   -1.15309   -1.15309   -0.96655   -0.42250   -0.37692   -0.37692
  -0.30668   -0.30668   -0.30634    0.10132    0.10222    0.10222    0.17132    0.17132
   0.17373    0.20227    0.20365    0.20365    0.25833    0.25869    0.25869    0.34254
   0.34254    0.42061    0.42061    0.46138    0.53356    0.53378
 kpt#  87, nband= 30, wtk=  1.00000, kpt=  0.0222  0.0222  0.0222 (reduced coord)
  -2.10234   -1.15309   -1.15309   -1.15309   -0.96656   -0.42250   -0.37688   -0.37688
  -0.30674   -0.30674   -0.30652    0.10170    0.10228    0.10228    0.17207    0.17207
   0.17362    0.20321    0.20411    0.20411    0.25778    0.25802    0.25802    0.34194
   0.34194    0.42003    0.42003    0.46064    0.53340    0.53353
 kpt#  88, nband= 30, wtk=  1.00000, kpt=  0.0167  0.0167  0.0167 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96657   -0.42250   -0.37685   -0.37685
  -0.30679   -0.30679   -0.30666    0.10200    0.10233    0.10233    0.17265    0.17265
   0.17353    0.20396    0.20447    0.20447    0.25735    0.25748    0.25748    0.34148
   0.34148    0.41958    0.41958    0.46006    0.53327    0.53333
 kpt#  89, nband= 30, wtk=  1.00000, kpt=  0.0111  0.0111  0.0111 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37683   -0.37683
  -0.30682   -0.30682   -0.30676    0.10221    0.10236    0.10236    0.17308    0.17308
   0.17347    0.20450    0.20473    0.20473    0.25703    0.25709    0.25709    0.34114
   0.34114    0.41926    0.41926    0.45964    0.53316    0.53319
 kpt#  90, nband= 30, wtk=  1.00000, kpt=  0.0056  0.0056  0.0056 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37681   -0.37681
  -0.30684   -0.30684   -0.30682    0.10234    0.10238    0.10238    0.17333    0.17333
   0.17343    0.20483    0.20489    0.20489    0.25684    0.25686    0.25686    0.34094
   0.34094    0.41907    0.41907    0.45938    0.53309    0.53310
 kpt#  91, nband= 30, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37681   -0.37681
  -0.30685   -0.30685   -0.30685    0.10239    0.10239    0.10239    0.17342    0.17342
   0.17342    0.20494    0.20494    0.20494    0.25678    0.25678    0.25678    0.34087
   0.34087    0.41900    0.41900    0.45930    0.53307    0.53307
 kpt#  92, nband= 30, wtk=  1.00000, kpt=  0.0100  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37682   -0.37681
  -0.30684   -0.30684   -0.30681    0.10233    0.10238    0.10238    0.17335    0.17335
   0.17338    0.20480    0.20490    0.20490    0.25678    0.25689    0.25689    0.34088
   0.34102    0.41907    0.41908    0.45939    0.53307    0.53312
 kpt#  93, nband= 30, wtk=  1.00000, kpt=  0.0200  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15309   -1.15308   -1.15308   -0.96658   -0.42250   -0.37685   -0.37680
  -0.30684   -0.30684   -0.30672    0.10216    0.10238    0.10238    0.17315    0.17315
   0.17326    0.20438    0.20476    0.20476    0.25679    0.25725    0.25725    0.34088
   0.34145    0.41926    0.41930    0.45966    0.53305    0.53325
 kpt#  94, nband= 30, wtk=  1.00000, kpt=  0.0300  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15309   -1.15308   -1.15308   -0.96657   -0.42250   -0.37691   -0.37679
  -0.30682   -0.30682   -0.30656    0.10189    0.10236    0.10236    0.17282    0.17282
   0.17307    0.20368    0.20454    0.20454    0.25682    0.25783    0.25783    0.34089
   0.34215    0.41960    0.41966    0.46012    0.53312    0.53348
 kpt#  95, nband= 30, wtk=  1.00000, kpt=  0.0400  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15310   -1.15308   -1.15308   -0.96656   -0.42250   -0.37698   -0.37678
  -0.30681   -0.30681   -0.30634    0.10150    0.10234    0.10234    0.17237    0.17237
   0.17281    0.20271    0.20424    0.20424    0.25685    0.25862    0.25862    0.34090
   0.34313    0.42005    0.42018    0.46076    0.53311    0.53379
 kpt#  96, nband= 30, wtk=  1.00000, kpt=  0.0500  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15311   -1.15308   -1.15308   -0.96655   -0.42251   -0.37707   -0.37677
  -0.30679   -0.30679   -0.30606    0.10100    0.10232    0.10232    0.17178    0.17178
   0.17246    0.20150    0.20388    0.20388    0.25689    0.25962    0.25962    0.34091
   0.34435    0.42064    0.42083    0.46157    0.53332    0.53419
 kpt#  97, nband= 30, wtk=  1.00000, kpt=  0.0600  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15313   -1.15308   -1.15308   -0.96654   -0.42251   -0.37718   -0.37675
  -0.30676   -0.30676   -0.30572    0.10039    0.10229    0.10229    0.17108    0.17108
   0.17205    0.20007    0.20346    0.20346    0.25693    0.26080    0.26080    0.34092
   0.34580    0.42136    0.42163    0.46256    0.53280    0.53468
 kpt#  98, nband= 30, wtk=  1.00000, kpt=  0.0700  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15315   -1.15308   -1.15308   -0.96652   -0.42252   -0.37730   -0.37673
  -0.30673   -0.30673   -0.30533    0.09969    0.10226    0.10226    0.17027    0.17027
   0.17157    0.19842    0.20300    0.20300    0.25699    0.26215    0.26215    0.34094
   0.34747    0.42220    0.42256    0.46373    0.53271    0.53525
 kpt#  99, nband= 30, wtk=  1.00000, kpt=  0.0800  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15317   -1.15308   -1.15308   -0.96650   -0.42254   -0.37742   -0.37670
  -0.30670   -0.30670   -0.30489    0.09888    0.10222    0.10222    0.16934    0.16934
   0.17102    0.19658    0.20250    0.20250    0.25705    0.26365    0.26365    0.34095
   0.34932    0.42317    0.42362    0.46507    0.53263    0.53591
 kpt# 100, nband= 30, wtk=  1.00000, kpt=  0.0900  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15319   -1.15308   -1.15308   -0.96648   -0.42256   -0.37755   -0.37667
  -0.30666   -0.30666   -0.30440    0.09797    0.10218    0.10218    0.16832    0.16832
   0.17041    0.19458    0.20199    0.20199    0.25713    0.26528    0.26528    0.34097
   0.35135    0.42426    0.42481    0.46657    0.53254    0.53664
 kpt# 101, nband= 30, wtk=  1.00000, kpt=  0.1000  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15321   -1.15307   -1.15307   -0.96646   -0.42259   -0.37768   -0.37664
  -0.30662   -0.30662   -0.30386    0.09697    0.10213    0.10213    0.16722    0.16722
   0.16974    0.19244    0.20146    0.20146    0.25720    0.26703    0.26703    0.34099
   0.35352    0.42547    0.42612    0.46824    0.53226    0.53745
 kpt# 102, nband= 30, wtk=  1.00000, kpt=  0.1100  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15324   -1.15307   -1.15307   -0.96644   -0.42263   -0.37781   -0.37661
  -0.30657   -0.30657   -0.30328    0.09588    0.10208    0.10208    0.16603    0.16603
   0.16902    0.19018    0.20092    0.20092    0.25729    0.26887    0.26887    0.34101
   0.35581    0.42681    0.42755    0.47007    0.53208    0.53834
 kpt# 103, nband= 30, wtk=  1.00000, kpt=  0.1200  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15327   -1.15307   -1.15307   -0.96641   -0.42268   -0.37793   -0.37657
  -0.30652   -0.30652   -0.30267    0.09471    0.10203    0.10203    0.16477    0.16477
   0.16825    0.18782    0.20038    0.20038    0.25739    0.27081    0.27081    0.34104
   0.35821    0.42825    0.42910    0.47206    0.53190    0.53929
 kpt# 104, nband= 30, wtk=  1.00000, kpt=  0.1300  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15330   -1.15307   -1.15307   -0.96638   -0.42274   -0.37804   -0.37653
  -0.30647   -0.30647   -0.30202    0.09345    0.10197    0.10197    0.16344    0.16344
   0.16743    0.18538    0.19984    0.19984    0.25749    0.27281    0.27281    0.34106
   0.36070    0.42981    0.43074    0.47420    0.53174    0.54032
 kpt# 105, nband= 30, wtk=  1.00000, kpt=  0.1400  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15333   -1.15307   -1.15307   -0.96636   -0.42282   -0.37814   -0.37649
  -0.30641   -0.30641   -0.30134    0.09212    0.10191    0.10191    0.16207    0.16207
   0.16657    0.18287    0.19931    0.19931    0.25759    0.27487    0.27487    0.34108
   0.36326    0.43148    0.43249    0.47649    0.53180    0.54140
 kpt# 106, nband= 30, wtk=  1.00000, kpt=  0.1500  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15336   -1.15307   -1.15307   -0.96632   -0.42291   -0.37822   -0.37644
  -0.30635   -0.30635   -0.30064    0.09072    0.10185    0.10185    0.16065    0.16065
   0.16568    0.18031    0.19878    0.19878    0.25771    0.27698    0.27698    0.34111
   0.36586    0.43326    0.43432    0.47892    0.53137    0.54255
 kpt# 107, nband= 30, wtk=  1.00000, kpt=  0.1600  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15340   -1.15307   -1.15307   -0.96629   -0.42302   -0.37827   -0.37640
  -0.30629   -0.30629   -0.29992    0.08925    0.10178    0.10178    0.15919    0.15919
   0.16475    0.17773    0.19826    0.19826    0.25782    0.27913    0.27913    0.34113
   0.36851    0.43513    0.43624    0.48148    0.53106    0.54375
 kpt# 108, nband= 30, wtk=  1.00000, kpt=  0.1700  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15344   -1.15306   -1.15306   -0.96626   -0.42315   -0.37830   -0.37635
  -0.30622   -0.30622   -0.29917    0.08773    0.10172    0.10172    0.15771    0.15771
   0.16380    0.17513    0.19774    0.19774    0.25795    0.28130    0.28130    0.34115
   0.37117    0.43710    0.43824    0.48418    0.53082    0.54501
 kpt# 109, nband= 30, wtk=  1.00000, kpt=  0.1800  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15348   -1.15306   -1.15306   -0.96622   -0.42329   -0.37831   -0.37630
  -0.30615   -0.30615   -0.29842    0.08615    0.10165    0.10165    0.15622    0.15622
   0.16282    0.17253    0.19724    0.19724    0.25807    0.28350    0.28350    0.34118
   0.37385    0.43917    0.44030    0.48701    0.53057    0.54631
 kpt# 110, nband= 30, wtk=  1.00000, kpt=  0.1900  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15352   -1.15306   -1.15306   -0.96619   -0.42345   -0.37829   -0.37625
  -0.30608   -0.30608   -0.29765    0.08453    0.10159    0.10159    0.15471    0.15471
   0.16183    0.16993    0.19675    0.19675    0.25821    0.28570    0.28570    0.34120
   0.37653    0.44131    0.44243    0.48996    0.53032    0.54765
 kpt# 111, nband= 30, wtk=  1.00000, kpt=  0.2000  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15356   -1.15306   -1.15306   -0.96615   -0.42363   -0.37823   -0.37620
  -0.30601   -0.30601   -0.29688    0.08287    0.10152    0.10152    0.15319    0.15319
   0.16082    0.16735    0.19627    0.19627    0.25834    0.28791    0.28791    0.34123
   0.37919    0.44354    0.44461    0.49304    0.53006    0.54903
 kpt# 112, nband= 30, wtk=  1.00000, kpt=  0.2100  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15360   -1.15306   -1.15306   -0.96611   -0.42382   -0.37815   -0.37614
  -0.30594   -0.30594   -0.29610    0.08117    0.10145    0.10145    0.15167    0.15167
   0.15980    0.16480    0.19579    0.19579    0.25848    0.29012    0.29012    0.34125
   0.38184    0.44585    0.44684    0.49622    0.52980    0.55044
 kpt# 113, nband= 30, wtk=  1.00000, kpt=  0.2200  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15364   -1.15305   -1.15305   -0.96607   -0.42404   -0.37804   -0.37609
  -0.30587   -0.30587   -0.29532    0.07944    0.10139    0.10139    0.15017    0.15017
   0.15878    0.16228    0.19533    0.19533    0.25862    0.29231    0.29231    0.34127
   0.38445    0.44821    0.44911    0.49952    0.52953    0.55188
 kpt# 114, nband= 30, wtk=  1.00000, kpt=  0.2300  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15368   -1.15305   -1.15305   -0.96604   -0.42427   -0.37789   -0.37603
  -0.30579   -0.30579   -0.29454    0.07770    0.10132    0.10132    0.14867    0.14867
   0.15776    0.15980    0.19488    0.19488    0.25876    0.29449    0.29449    0.34130
   0.38703    0.45064    0.45140    0.50292    0.52925    0.55334
 kpt# 115, nband= 30, wtk=  1.00000, kpt=  0.2400  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15372   -1.15305   -1.15305   -0.96600   -0.42452   -0.37772   -0.37598
  -0.30571   -0.30571   -0.29378    0.07594    0.10126    0.10126    0.14719    0.14719
   0.15674    0.15739    0.19444    0.19444    0.25891    0.29665    0.29665    0.34132
   0.38957    0.45312    0.45372    0.50642    0.52897    0.55481
 kpt# 116, nband= 30, wtk=  1.00000, kpt=  0.2500  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15377   -1.15305   -1.15305   -0.96596   -0.42478   -0.37752   -0.37592
  -0.30564   -0.30564   -0.29302    0.07418    0.10120    0.10120    0.14573    0.14573
   0.15502    0.15573    0.19401    0.19401    0.25905    0.29877    0.29877    0.34134
   0.39205    0.45565    0.45604    0.51002    0.52869    0.55630
 kpt# 117, nband= 30, wtk=  1.00000, kpt=  0.2600  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15381   -1.15305   -1.15305   -0.96592   -0.42505   -0.37729   -0.37586
  -0.30556   -0.30556   -0.29227    0.07242    0.10114    0.10114    0.14430    0.14430
   0.15272    0.15472    0.19360    0.19360    0.25920    0.30086    0.30086    0.34136
   0.39447    0.45821    0.45837    0.51372    0.52841    0.55779
 kpt# 118, nband= 30, wtk=  1.00000, kpt=  0.2700  0.0000  0.0000 (reduced coord)
  -2.10233   -1.15385   -1.15305   -1.15305   -0.96588   -0.42533   -0.37703   -0.37581
  -0.30548   -0.30548   -0.29153    0.07066    0.10109    0.10109    0.14289    0.14289
   0.15049    0.15374    0.19320    0.19320    0.25934    0.30291    0.30291    0.34138
   0.39683    0.46070    0.46079    0.51751    0.52813    0.55927
 kpt# 119, nband= 30, wtk=  1.00000, kpt=  0.2800  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15390   -1.15304   -1.15304   -0.96584   -0.42562   -0.37676   -0.37575
  -0.30541   -0.30541   -0.29081    0.06892    0.10104    0.10104    0.14152    0.14152
   0.14832    0.15277    0.19281    0.19281    0.25949    0.30492    0.30492    0.34140
   0.39913    0.46301    0.46339    0.52140    0.52786    0.56075
 kpt# 120, nband= 30, wtk=  1.00000, kpt=  0.2900  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15394   -1.15304   -1.15304   -0.96580   -0.42592   -0.37646   -0.37570
  -0.30533   -0.30533   -0.29011    0.06720    0.10100    0.10100    0.14019    0.14019
   0.14624    0.15182    0.19243    0.19243    0.25963    0.30687    0.30687    0.34142
   0.40135    0.46530    0.46599    0.52537    0.52758    0.56221
 kpt# 121, nband= 30, wtk=  1.00000, kpt=  0.3000  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15398   -1.15304   -1.15304   -0.96576   -0.42623   -0.37615   -0.37564
  -0.30526   -0.30526   -0.28943    0.06551    0.10096    0.10096    0.13889    0.13889
   0.14423    0.15090    0.19207    0.19207    0.25977    0.30877    0.30877    0.34144
   0.40350    0.46756    0.46859    0.52731    0.52942    0.56366
 kpt# 122, nband= 30, wtk=  1.00000, kpt=  0.3100  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15402   -1.15304   -1.15304   -0.96573   -0.42653   -0.37582   -0.37559
  -0.30519   -0.30519   -0.28878    0.06385    0.10092    0.10092    0.13763    0.13763
   0.14231    0.15000    0.19172    0.19172    0.25991    0.31061    0.31061    0.34145
   0.40556    0.46978    0.47117    0.52704    0.53356    0.56508
 kpt# 123, nband= 30, wtk=  1.00000, kpt=  0.3200  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15406   -1.15304   -1.15304   -0.96569   -0.42684   -0.37554   -0.37549
  -0.30512   -0.30512   -0.28814    0.06224    0.10089    0.10089    0.13642    0.13642
   0.14047    0.14913    0.19139    0.19139    0.26004    0.31239    0.31239    0.34147
   0.40754    0.47195    0.47371    0.52678    0.53778    0.56647
 kpt# 124, nband= 30, wtk=  1.00000, kpt=  0.3300  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15410   -1.15303   -1.15303   -0.96566   -0.42714   -0.37549   -0.37514
  -0.30505   -0.30505   -0.28754    0.06067    0.10086    0.10086    0.13526    0.13526
   0.13872    0.14830    0.19107    0.19107    0.26018    0.31409    0.31409    0.34149
   0.40943    0.47406    0.47622    0.52653    0.54208    0.56782
 kpt# 125, nband= 30, wtk=  1.00000, kpt=  0.3400  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15413   -1.15303   -1.15303   -0.96562   -0.42744   -0.37544   -0.37480
  -0.30498   -0.30498   -0.28696    0.05916    0.10084    0.10084    0.13415    0.13415
   0.13706    0.14750    0.19076    0.19076    0.26030    0.31573    0.31573    0.34150
   0.41123    0.47611    0.47867    0.52628    0.54646    0.56913
 kpt# 126, nband= 30, wtk=  1.00000, kpt=  0.3500  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15417   -1.15303   -1.15303   -0.96559   -0.42773   -0.37539   -0.37445
  -0.30492   -0.30492   -0.28641    0.05770    0.10083    0.10083    0.13309    0.13309
   0.13549    0.14674    0.19048    0.19048    0.26043    0.31729    0.31729    0.34151
   0.41293    0.47809    0.48106    0.52605    0.55091    0.57039
 kpt# 127, nband= 30, wtk=  1.00000, kpt=  0.3600  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15420   -1.15303   -1.15303   -0.96556   -0.42801   -0.37535   -0.37411
  -0.30486   -0.30486   -0.28589    0.05632    0.10081    0.10081    0.13208    0.13208
   0.13402    0.14602    0.19021    0.19021    0.26054    0.31876    0.31876    0.34153
   0.41454    0.47998    0.48336    0.52582    0.55543    0.57160
 kpt# 128, nband= 30, wtk=  1.00000, kpt=  0.3700  0.0000  0.0000 (reduced coord)
  -2.10232   -1.15424   -1.15303   -1.15303   -0.96553   -0.42828   -0.37530   -0.37377
  -0.30480   -0.30480   -0.28540    0.05500    0.10081    0.10081    0.13113    0.13113
   0.13264    0.14534    0.18995    0.18995    0.26065    0.32015    0.32015    0.34154
   0.41604    0.48179    0.48558    0.52561    0.56002    0.57275
 kpt# 129, nband= 30, wtk=  1.00000, kpt=  0.3800  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15427   -1.15303   -1.15303   -0.96550   -0.42854   -0.37526   -0.37345
  -0.30474   -0.30474   -0.28494    0.05376    0.10081    0.10081    0.13024    0.13024
   0.13136    0.14470    0.18972    0.18972    0.26076    0.32146    0.32146    0.34155
   0.41745    0.48349    0.48769    0.52540    0.56469    0.57384
 kpt# 130, nband= 30, wtk=  1.00000, kpt=  0.3900  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15429   -1.15302   -1.15302   -0.96547   -0.42879   -0.37523   -0.37313
  -0.30469   -0.30469   -0.28452    0.05260    0.10081    0.10081    0.12941    0.12941
   0.13018    0.14411    0.18950    0.18950    0.26086    0.32267    0.32267    0.34156
   0.41875    0.48509    0.48968    0.52521    0.56944    0.57486
 kpt# 131, nband= 30, wtk=  1.00000, kpt=  0.4000  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15432   -1.15302   -1.15302   -0.96545   -0.42902   -0.37519   -0.37284
  -0.30465   -0.30465   -0.28413    0.05152    0.10081    0.10081    0.12864    0.12864
   0.12909    0.14356    0.18930    0.18930    0.26095    0.32379    0.32379    0.34157
   0.41994    0.48658    0.49154    0.52504    0.57423    0.57581
 kpt# 132, nband= 30, wtk=  1.00000, kpt=  0.4100  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15435   -1.15302   -1.15302   -0.96543   -0.42923   -0.37516   -0.37256
  -0.30460   -0.30460   -0.28378    0.05054    0.10082    0.10082    0.12794    0.12794
   0.12811    0.14306    0.18912    0.18912    0.26103    0.32481    0.32481    0.34158
   0.42102    0.48795    0.49326    0.52488    0.57668    0.57793
 kpt# 133, nband= 30, wtk=  1.00000, kpt=  0.4200  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15437   -1.15302   -1.15302   -0.96541   -0.42942   -0.37513   -0.37230
  -0.30456   -0.30456   -0.28346    0.04965    0.10083    0.10083    0.12722    0.12731
   0.12731    0.14261    0.18895    0.18895    0.26111    0.32573    0.32573    0.34159
   0.42200    0.48919    0.49483    0.52473    0.57746    0.57822
 kpt# 134, nband= 30, wtk=  1.00000, kpt=  0.4300  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15439   -1.15302   -1.15302   -0.96539   -0.42960   -0.37510   -0.37207
  -0.30453   -0.30453   -0.28318    0.04885    0.10084    0.10084    0.12644    0.12674
   0.12674    0.14221    0.18881    0.18881    0.26118    0.32654    0.32654    0.34159
   0.42286    0.49030    0.49624    0.52460    0.57817    0.57870
 kpt# 135, nband= 30, wtk=  1.00000, kpt=  0.4400  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15440   -1.15302   -1.15302   -0.96537   -0.42975   -0.37508   -0.37186
  -0.30450   -0.30450   -0.28294    0.04815    0.10086    0.10086    0.12577    0.12625
   0.12625    0.14187    0.18868    0.18868    0.26124    0.32726    0.32726    0.34160
   0.42361    0.49128    0.49749    0.52448    0.57879    0.57913
 kpt# 136, nband= 30, wtk=  1.00000, kpt=  0.4500  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15442   -1.15302   -1.15302   -0.96536   -0.42988   -0.37506   -0.37169
  -0.30447   -0.30447   -0.28273    0.04756    0.10087    0.10087    0.12519    0.12583
   0.12583    0.14157    0.18858    0.18858    0.26129    0.32786    0.32786    0.34160
   0.42424    0.49211    0.49855    0.52438    0.57932    0.57947
 kpt# 137, nband= 30, wtk=  1.00000, kpt=  0.4600  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15443   -1.15302   -1.15302   -0.96535   -0.42999   -0.37505   -0.37154
  -0.30445   -0.30445   -0.28256    0.04707    0.10088    0.10088    0.12472    0.12548
   0.12548    0.14133    0.18849    0.18849    0.26133    0.32836    0.32836    0.34161
   0.42477    0.49280    0.49943    0.52430    0.57975    0.57982
 kpt# 138, nband= 30, wtk=  1.00000, kpt=  0.4700  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15302   -1.15302   -0.96534   -0.43007   -0.37503   -0.37142
  -0.30443   -0.30443   -0.28243    0.04669    0.10089    0.10089    0.12436    0.12521
   0.12521    0.14114    0.18842    0.18842    0.26136    0.32875    0.32875    0.34161
   0.42517    0.49334    0.50012    0.52424    0.58009    0.58014
 kpt# 139, nband= 30, wtk=  1.00000, kpt=  0.4800  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43013   -0.37503   -0.37134
  -0.30442   -0.30442   -0.28233    0.04642    0.10090    0.10090    0.12409    0.12502
   0.12502    0.14100    0.18837    0.18837    0.26139    0.32903    0.32903    0.34161
   0.42546    0.49372    0.50062    0.52419    0.58033    0.58039
 kpt# 140, nband= 30, wtk=  1.00000, kpt=  0.4900  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43017   -0.37502   -0.37129
  -0.30441   -0.30441   -0.28228    0.04625    0.10090    0.10090    0.12394    0.12490
   0.12490    0.14092    0.18834    0.18834    0.26140    0.32920    0.32920    0.34161
   0.42564    0.49396    0.50092    0.52417    0.58048    0.58051
 kpt# 141, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0000  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43018   -0.37502   -0.37127
  -0.30441   -0.30441   -0.28226    0.04620    0.10090    0.10090    0.12388    0.12486
   0.12486    0.14089    0.18833    0.18833    0.26140    0.32925    0.32925    0.34161
   0.42570    0.49404    0.50102    0.52416    0.58053    0.58054
 kpt# 142, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0100  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43016   -0.37502   -0.37129
  -0.30441   -0.30439   -0.28227    0.04619    0.10087    0.10090    0.12199    0.12484
   0.12657    0.14112    0.18823    0.18825    0.26150    0.32925    0.32925    0.34172
   0.42575    0.49407    0.50108    0.52421    0.58039    0.58053
 kpt# 143, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0200  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15302   -1.15302   -0.96533   -0.43009   -0.37501   -0.37136
  -0.30440   -0.30434   -0.28230    0.04618    0.10079    0.10091    0.11954    0.12478
   0.12842    0.14180    0.18794    0.18801    0.26180    0.32924    0.32925    0.34202
   0.42590    0.49418    0.50127    0.52438    0.57991    0.58055
 kpt# 144, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0300  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15303   -1.15302   -0.96532   -0.42999   -0.37500   -0.37146
  -0.30439   -0.30426   -0.28236    0.04617    0.10066    0.10093    0.11699    0.12467
   0.12999    0.14294    0.18745    0.18762    0.26230    0.32923    0.32924    0.34252
   0.42615    0.49436    0.50158    0.52465    0.57916    0.58057
 kpt# 145, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0400  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15304   -1.15302   -0.96532   -0.42984   -0.37498   -0.37161
  -0.30437   -0.30414   -0.28244    0.04614    0.10046    0.10095    0.11437    0.12453
   0.13127    0.14451    0.18678    0.18708    0.26297    0.32921    0.32924    0.34320
   0.42651    0.49460    0.50202    0.52504    0.57818    0.58059
 kpt# 146, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0500  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15305   -1.15302   -0.96531   -0.42964   -0.37497   -0.37180
  -0.30434   -0.30400   -0.28254    0.04611    0.10021    0.10097    0.11172    0.12434
   0.13229    0.14642    0.18594    0.18640    0.26383    0.32919    0.32923    0.34405
   0.42697    0.49492    0.50258    0.52553    0.57699    0.58062
 kpt# 147, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0600  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15306   -1.15302   -0.96530   -0.42941   -0.37495   -0.37202
  -0.30431   -0.30382   -0.28267    0.04608    0.09989    0.10100    0.10904    0.12411
   0.13312    0.14859    0.18496    0.18559    0.26485    0.32916    0.32921    0.34506
   0.42753    0.49530    0.50327    0.52612    0.57564    0.58065
 kpt# 148, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0700  0.0000 (reduced coord)
  -2.10231   -1.15445   -1.15308   -1.15301   -0.96529   -0.42913   -0.37492   -0.37229
  -0.30428   -0.30361   -0.28281    0.04603    0.09951    0.10103    0.10636    0.12385
   0.13385    0.15094    0.18384    0.18467    0.26602    0.32914    0.32920    0.34621
   0.42821    0.49575    0.50408    0.52682    0.57417    0.58069
 kpt# 149, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0800  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15310   -1.15301   -0.96528   -0.42881   -0.37490   -0.37259
  -0.30424   -0.30337   -0.28298    0.04598    0.09905    0.10107    0.10369    0.12354
   0.13451    0.15341    0.18261    0.18364    0.26733    0.32911    0.32918    0.34747
   0.42899    0.49626    0.50502    0.52762    0.57259    0.58074
 kpt# 150, nband= 30, wtk=  1.00000, kpt=  0.5000  0.0900  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15312   -1.15301   -0.96526   -0.42845   -0.37487   -0.37292
  -0.30420   -0.30311   -0.28316    0.04593    0.09852    0.10102    0.10112    0.12320
   0.13514    0.15594    0.18129    0.18253    0.26876    0.32909    0.32917    0.34883
   0.42988    0.49683    0.50607    0.52852    0.57094    0.58080
 kpt# 151, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1000  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15314   -1.15301   -0.96525   -0.42804   -0.37485   -0.37329
  -0.30415   -0.30282   -0.28336    0.04586    0.09792    0.09837    0.10116    0.12283
   0.13576    0.15852    0.17991    0.18134    0.27031    0.32908    0.32915    0.35027
   0.43089    0.49746    0.50726    0.52952    0.56923    0.58086
 kpt# 152, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1100  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15317   -1.15301   -0.96523   -0.42760   -0.37483   -0.37369
  -0.30410   -0.30251   -0.28358    0.04579    0.09575    0.09723    0.10122    0.12242
   0.13638    0.16111    0.17848    0.18008    0.27195    0.32908    0.32913    0.35175
   0.43201    0.49815    0.50856    0.53061    0.56747    0.58093
 kpt# 153, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1200  0.0000 (reduced coord)
  -2.10231   -1.15444   -1.15320   -1.15301   -0.96521   -0.42712   -0.37481   -0.37411
  -0.30404   -0.30218   -0.28381    0.04572    0.09315    0.09645    0.10128    0.12198
   0.13702    0.16371    0.17702    0.17877    0.27368    0.32908    0.32910    0.35328
   0.43324    0.49889    0.50998    0.53178    0.56569    0.58100
 kpt# 154, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1300  0.0000 (reduced coord)
  -2.10231   -1.15443   -1.15323   -1.15301   -0.96519   -0.42660   -0.37480   -0.37456
  -0.30398   -0.30183   -0.28405    0.04564    0.09058    0.09558    0.10134    0.12151
   0.13768    0.16629    0.17556    0.17742    0.27548    0.32908    0.32910    0.35481
   0.43459    0.49968    0.51152    0.53304    0.56388    0.58108
 kpt# 155, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1400  0.0000 (reduced coord)
  -2.10230   -1.15443   -1.15326   -1.15301   -0.96517   -0.42604   -0.37503   -0.37479
  -0.30391   -0.30146   -0.28431    0.04555    0.08804    0.09462    0.10141    0.12102
   0.13836    0.16885    0.17412    0.17603    0.27735    0.32906    0.32914    0.35635
   0.43605    0.50052    0.51318    0.53439    0.56206    0.58116
 kpt# 156, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1500  0.0000 (reduced coord)
  -2.10230   -1.15443   -1.15329   -1.15300   -0.96515   -0.42545   -0.37552   -0.37479
  -0.30384   -0.30108   -0.28458    0.04546    0.08555    0.09357    0.10148    0.12050
   0.13906    0.17138    0.17271    0.17461    0.27927    0.32903    0.32920    0.35787
   0.43763    0.50141    0.51496    0.53580    0.56024    0.58125
 kpt# 157, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1600  0.0000 (reduced coord)
  -2.10230   -1.15443   -1.15333   -1.15300   -0.96513   -0.42482   -0.37603   -0.37480
  -0.30377   -0.30068   -0.28485    0.04536    0.08309    0.09242    0.10156    0.11996
   0.13978    0.17135    0.17318    0.17387    0.28123    0.32901    0.32927    0.35936
   0.43930    0.50235    0.51685    0.53729    0.55841    0.58135
 kpt# 158, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1700  0.0000 (reduced coord)
  -2.10230   -1.15442   -1.15336   -1.15300   -0.96510   -0.42415   -0.37656   -0.37482
  -0.30370   -0.30027   -0.28514    0.04525    0.08068    0.09118    0.10164    0.11940
   0.14052    0.17005    0.17174    0.17631    0.28322    0.32898    0.32937    0.36080
   0.44108    0.50332    0.51886    0.53884    0.55659    0.58145
 kpt# 159, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1800  0.0000 (reduced coord)
  -2.10230   -1.15442   -1.15340   -1.15300   -0.96508   -0.42345   -0.37710   -0.37486
  -0.30362   -0.29986   -0.28542    0.04514    0.07832    0.08984    0.10173    0.11882
   0.14128    0.16882    0.17029    0.17871    0.28524    0.32896    0.32950    0.36220
   0.44296    0.50433    0.52098    0.54046    0.55479    0.58155
 kpt# 160, nband= 30, wtk=  1.00000, kpt=  0.5000  0.1900  0.0000 (reduced coord)
  -2.10230   -1.15442   -1.15344   -1.15300   -0.96505   -0.42272   -0.37764   -0.37491
  -0.30354   -0.29943   -0.28572    0.04502    0.07600    0.08842    0.10182    0.11822
   0.14206    0.16767    0.16884    0.18105    0.28728    0.32893    0.32966    0.36353
   0.44492    0.50538    0.52321    0.54213    0.55299    0.58166
 kpt# 161, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2000  0.0000 (reduced coord)
  -2.10230   -1.15441   -1.15348   -1.15300   -0.96503   -0.42195   -0.37820   -0.37498
  -0.30346   -0.29900   -0.28601    0.04489    0.07373    0.08692    0.10192    0.11762
   0.14286    0.16661    0.16740    0.18333    0.28932    0.32891    0.32985    0.36481
   0.44697    0.50645    0.52554    0.54385    0.55122    0.58177
 kpt# 162, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2100  0.0000 (reduced coord)
  -2.10230   -1.15441   -1.15352   -1.15299   -0.96500   -0.42116   -0.37876   -0.37506
  -0.30337   -0.29857   -0.28630    0.04475    0.07152    0.08534    0.10202    0.11700
   0.14367    0.16563    0.16597    0.18555    0.29137    0.32888    0.33006    0.36601
   0.44908    0.50756    0.52799    0.54561    0.54947    0.58189
 kpt# 163, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2200  0.0000 (reduced coord)
  -2.10230   -1.15441   -1.15356   -1.15299   -0.96497   -0.42033   -0.37933   -0.37517
  -0.30329   -0.29813   -0.28659    0.04461    0.06936    0.08370    0.10212    0.11638
   0.14449    0.16456    0.16474    0.18769    0.29342    0.32886    0.33032    0.36715
   0.45125    0.50868    0.53054    0.54741    0.54775    0.58201
 kpt# 164, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2300  0.0000 (reduced coord)
  -2.10230   -1.15440   -1.15360   -1.15299   -0.96495   -0.41948   -0.37989   -0.37530
  -0.30320   -0.29769   -0.28688    0.04445    0.06726    0.08200    0.10223    0.11575
   0.14532    0.16317    0.16395    0.18977    0.29545    0.32883    0.33060    0.36822
   0.45347    0.50983    0.53319    0.54606    0.54924    0.58213
 kpt# 165, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2400  0.0000 (reduced coord)
  -2.10229   -1.15440   -1.15364   -1.15299   -0.96492   -0.41860   -0.38046   -0.37545
  -0.30312   -0.29726   -0.28716    0.04428    0.06522    0.08026    0.10234    0.11512
   0.14615    0.16180    0.16324    0.19177    0.29747    0.32881    0.33092    0.36922
   0.45573    0.51099    0.53595    0.54441    0.55109    0.58226
 kpt# 166, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2500  0.0000 (reduced coord)
  -2.10229   -1.15440   -1.15368   -1.15299   -0.96489   -0.41769   -0.38102   -0.37563
  -0.30303   -0.29683   -0.28743    0.04410    0.06323    0.07849    0.10245    0.11449
   0.14698    0.16045    0.16262    0.19369    0.29946    0.32879    0.33127    0.37015
   0.45801    0.51216    0.53880    0.54279    0.55297    0.58238
 kpt# 167, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2600  0.0000 (reduced coord)
  -2.10229   -1.15439   -1.15372   -1.15299   -0.96486   -0.41677   -0.38158   -0.37584
  -0.30294   -0.29640   -0.28770    0.04391    0.06132    0.07670    0.10257    0.11386
   0.14781    0.15914    0.16208    0.19553    0.30143    0.32877    0.33165    0.37101
   0.46031    0.51333    0.54121    0.54175    0.55485    0.58251
 kpt# 168, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2700  0.0000 (reduced coord)
  -2.10229   -1.15439   -1.15376   -1.15298   -0.96484   -0.41581   -0.38212   -0.37607
  -0.30285   -0.29598   -0.28795    0.04369    0.05946    0.07490    0.10269    0.11323
   0.14864    0.15786    0.16161    0.19730    0.30336    0.32875    0.33207    0.37181
   0.46261    0.51451    0.53968    0.54479    0.55674    0.58264
 kpt# 169, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2800  0.0000 (reduced coord)
  -2.10229   -1.15439   -1.15381   -1.15298   -0.96481   -0.41484   -0.38266   -0.37634
  -0.30277   -0.29557   -0.28820    0.04347    0.05767    0.07312    0.10281    0.11262
   0.14946    0.15661    0.16122    0.19897    0.30526    0.32873    0.33252    0.37256
   0.46490    0.51569    0.53819    0.54793    0.55863    0.58277
 kpt# 170, nband= 30, wtk=  1.00000, kpt=  0.5000  0.2900  0.0000 (reduced coord)
  -2.10229   -1.15438   -1.15385   -1.15298   -0.96478   -0.41385   -0.38319   -0.37664
  -0.30268   -0.29516   -0.28843    0.04322    0.05595    0.07136    0.10293    0.11201
   0.15027    0.15541    0.16089    0.20057    0.30711    0.32871    0.33299    0.37324
   0.46716    0.51685    0.53675    0.55115    0.56050    0.58291
 kpt# 171, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3000  0.0000 (reduced coord)
  -2.10229   -1.15438   -1.15389   -1.15298   -0.96476   -0.41284   -0.38371   -0.37698
  -0.30260   -0.29477   -0.28865    0.04294    0.05430    0.06963    0.10305    0.11142
   0.15106    0.15423    0.16061    0.20208    0.30891    0.32869    0.33348    0.37387
   0.46940    0.51801    0.53535    0.55445    0.56236    0.58304
 kpt# 172, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3100  0.0000 (reduced coord)
  -2.10229   -1.15438   -1.15393   -1.15298   -0.96473   -0.41181   -0.38421   -0.37735
  -0.30251   -0.29438   -0.28886    0.04265    0.05272    0.06796    0.10317    0.11083
   0.15184    0.15311    0.16039    0.20350    0.31066    0.32867    0.33400    0.37445
   0.47159    0.51915    0.53402    0.55783    0.56419    0.58317
 kpt# 173, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3200  0.0000 (reduced coord)
  -2.10229   -1.15437   -1.15396   -1.15297   -0.96470   -0.41077   -0.38469   -0.37775
  -0.30243   -0.29401   -0.28905    0.04232    0.05122    0.06635    0.10330    0.11027
   0.15202    0.15260    0.16022    0.20484    0.31235    0.32865    0.33453    0.37498
   0.47372    0.52027    0.53274    0.56127    0.56599    0.58330
 kpt# 174, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3300  0.0000 (reduced coord)
  -2.10229   -1.15437   -1.15400   -1.15297   -0.96468   -0.40971   -0.38516   -0.37819
  -0.30235   -0.29366   -0.28924    0.04196    0.04978    0.06481    0.10342    0.10972
   0.15098    0.15333    0.16008    0.20609    0.31397    0.32864    0.33508    0.37547
   0.47580    0.52136    0.53151    0.56478    0.56775    0.58342
 kpt# 175, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3400  0.0000 (reduced coord)
  -2.10228   -1.15437   -1.15404   -1.15297   -0.96466   -0.40864   -0.38560   -0.37867
  -0.30228   -0.29331   -0.28940    0.04158    0.04842    0.06337    0.10354    0.10920
   0.14999    0.15404    0.15998    0.20726    0.31553    0.32863    0.33563    0.37591
   0.47780    0.52243    0.53035    0.56835    0.56946    0.58355
 kpt# 176, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3500  0.0000 (reduced coord)
  -2.10228   -1.15437   -1.15407   -1.15297   -0.96463   -0.40757   -0.38603   -0.37918
  -0.30220   -0.29299   -0.28955    0.04116    0.04714    0.06201    0.10366    0.10870
   0.14905    0.15473    0.15992    0.20835    0.31702    0.32861    0.33619    0.37632
   0.47972    0.52345    0.52924    0.57111    0.57196    0.58367
 kpt# 177, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3600  0.0000 (reduced coord)
  -2.10228   -1.15436   -1.15410   -1.15297   -0.96461   -0.40648   -0.38644   -0.37973
  -0.30213   -0.29268   -0.28969    0.04072    0.04593    0.06077    0.10378    0.10822
   0.14816    0.15538    0.15987    0.20935    0.31843    0.32860    0.33675    0.37669
   0.48155    0.52444    0.52820    0.57270    0.57560    0.58378
 kpt# 178, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3700  0.0000 (reduced coord)
  -2.10228   -1.15436   -1.15413   -1.15297   -0.96459   -0.40540   -0.38682   -0.38031
  -0.30207   -0.29239   -0.28982    0.04025    0.04480    0.05963    0.10390    0.10776
   0.14732    0.15600    0.15985    0.21028    0.31977    0.32859    0.33729    0.37702
   0.48329    0.52538    0.52723    0.57422    0.57925    0.58390
 kpt# 179, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3800  0.0000 (reduced coord)
  -2.10228   -1.15436   -1.15416   -1.15297   -0.96457   -0.40430   -0.38718   -0.38093
  -0.30200   -0.29211   -0.28993    0.03975    0.04376    0.05860    0.10401    0.10734
   0.14654    0.15658    0.15985    0.21112    0.32102    0.32858    0.33783    0.37732
   0.48492    0.52628    0.52632    0.57567    0.58290    0.58401
 kpt# 180, nband= 30, wtk=  1.00000, kpt=  0.5000  0.3900  0.0000 (reduced coord)
  -2.10228   -1.15436   -1.15419   -1.15296   -0.96455   -0.40321   -0.38751   -0.38159
  -0.30195   -0.29186   -0.29003    0.03925    0.04279    0.05768    0.10412    0.10694
   0.14581    0.15712    0.15986    0.21189    0.32218    0.32857    0.33834    0.37759
   0.48644    0.52548    0.52712    0.57703    0.58411    0.58653
 kpt# 181, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4000  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15422   -1.15296   -0.96454   -0.40212   -0.38782   -0.38228
  -0.30189   -0.29162   -0.29011    0.03873    0.04190    0.05687    0.10422    0.10657
   0.14514    0.15763    0.15988    0.21259    0.32325    0.32856    0.33884    0.37783
   0.48785    0.52471    0.52790    0.57829    0.58420    0.59010
 kpt# 182, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4100  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15424   -1.15296   -0.96452   -0.40103   -0.38810   -0.38300
  -0.30184   -0.29141   -0.29019    0.03822    0.04109    0.05617    0.10431    0.10623
   0.14453    0.15809    0.15991    0.21321    0.32423    0.32855    0.33930    0.37804
   0.48915    0.52401    0.52862    0.57946    0.58429    0.59358
 kpt# 183, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4200  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15426   -1.15296   -0.96451   -0.39995   -0.38835   -0.38375
  -0.30180   -0.29121   -0.29025    0.03773    0.04037    0.05557    0.10440    0.10593
   0.14398    0.15851    0.15994    0.21376    0.32512    0.32855    0.33973    0.37823
   0.49031    0.52338    0.52928    0.58052    0.58437    0.59693
 kpt# 184, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4300  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15428   -1.15296   -0.96449   -0.39888   -0.38858   -0.38452
  -0.30176   -0.29104   -0.29031    0.03726    0.03973    0.05505    0.10448    0.10566
   0.14349    0.15888    0.15998    0.21425    0.32591    0.32854    0.34012    0.37840
   0.49135    0.52282    0.52986    0.58148    0.58444    0.60011
 kpt# 185, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4400  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15430   -1.15296   -0.96448   -0.39783   -0.38877   -0.38532
  -0.30172   -0.29089   -0.29035    0.03683    0.03918    0.05462    0.10455    0.10542
   0.14307    0.15921    0.16001    0.21466    0.32659    0.32853    0.34047    0.37853
   0.49226    0.52233    0.53038    0.58231    0.58451    0.60305
 kpt# 186, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4500  0.0000 (reduced coord)
  -2.10228   -1.15435   -1.15431   -1.15296   -0.96447   -0.39680   -0.38894   -0.38613
  -0.30169   -0.29076   -0.29039    0.03644    0.03871    0.05427    0.10461    0.10522
   0.14270    0.15949    0.16004    0.21501    0.32718    0.32853    0.34077    0.37865
   0.49303    0.52192    0.53082    0.58303    0.58456    0.60569
 kpt# 187, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4600  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15432   -1.15296   -0.96446   -0.39580   -0.38908   -0.38695
  -0.30166   -0.29066   -0.29042    0.03612    0.03832    0.05400    0.10466    0.10505
   0.14241    0.15971    0.16007    0.21529    0.32766    0.32853    0.34102    0.37874
   0.49366    0.52159    0.53118    0.58362    0.58461    0.60797
 kpt# 188, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4700  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15433   -1.15296   -0.96446   -0.39486   -0.38918   -0.38775
  -0.30165   -0.29058   -0.29044    0.03586    0.03802    0.05379    0.10470    0.10492
   0.14217    0.15989    0.16009    0.21551    0.32804    0.32852    0.34122    0.37882
   0.49416    0.52132    0.53147    0.58409    0.58464    0.60982
 kpt# 189, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4800  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39402   -0.38926   -0.38850
  -0.30163   -0.29052   -0.29046    0.03566    0.03781    0.05364    0.10473    0.10483
   0.14201    0.16002    0.16011    0.21567    0.32831    0.32852    0.34137    0.37887
   0.49451    0.52114    0.53168    0.58442    0.58467    0.61119
 kpt# 190, nband= 30, wtk=  1.00000, kpt=  0.5000  0.4900  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39337   -0.38931   -0.38908
  -0.30162   -0.29048   -0.29047    0.03555    0.03768    0.05355    0.10475    0.10477
   0.14191    0.16010    0.16012    0.21576    0.32847    0.32852    0.34145    0.37890
   0.49473    0.52102    0.53180    0.58462    0.58469    0.61203
 kpt# 191, nband= 30, wtk=  1.00000, kpt=  0.5000  0.5000  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39311   -0.38932   -0.38932
  -0.30162   -0.29047   -0.29047    0.03551    0.03763    0.05352    0.10476    0.10476
   0.14187    0.16013    0.16013    0.21579    0.32852    0.32852    0.34148    0.37891
   0.49480    0.52099    0.53184    0.58469    0.58469    0.61231
 kpt# 192, nband= 30, wtk=  1.00000, kpt=  0.4929  0.4929  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39338   -0.38932   -0.38907
  -0.30162   -0.29048   -0.29047    0.03555    0.03768    0.05355    0.10475    0.10478
   0.14191    0.16009    0.16013    0.21576    0.32849    0.32850    0.34145    0.37890
   0.49473    0.52102    0.53180    0.58464    0.58466    0.61202
 kpt# 193, nband= 30, wtk=  1.00000, kpt=  0.4857  0.4857  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96445   -0.39402   -0.38930   -0.38845
  -0.30163   -0.29050   -0.29048    0.03567    0.03781    0.05364    0.10472    0.10484
   0.14201    0.15999    0.16014    0.21566    0.32839    0.32843    0.34136    0.37887
   0.49451    0.52114    0.53168    0.58451    0.58458    0.61117
 kpt# 194, nband= 30, wtk=  1.00000, kpt=  0.4786  0.4786  0.0000 (reduced coord)
  -2.10228   -1.15434   -1.15434   -1.15296   -0.96446   -0.39486   -0.38928   -0.38766
  -0.30165   -0.29054   -0.29049    0.03586    0.03804    0.05379    0.10467    0.10496
   0.14218    0.15983    0.16015    0.21550    0.32824    0.32831    0.34122    0.37882
   0.49415    0.52132    0.53147    0.58428    0.58444    0.60980
 kpt# 195, nband= 30, wtk=  1.00000, kpt=  0.4714  0.4714  0.0000 (reduced coord)
  -2.10228   -1.15433   -1.15433   -1.15296   -0.96447   -0.39578   -0.38924   -0.38681
  -0.30167   -0.29059   -0.29050    0.03612    0.03837    0.05399    0.10461    0.10511
   0.14241    0.15960    0.16018    0.21529    0.32801    0.32815    0.34101    0.37874
   0.49364    0.52155    0.53121    0.58396    0.58425    0.60796
 kpt# 196, nband= 30, wtk=  1.00000, kpt=  0.4643  0.4643  0.0000 (reduced coord)
  -2.10228   -1.15433   -1.15433   -1.15296   -0.96447   -0.39675   -0.38920   -0.38593
  -0.30169   -0.29065   -0.29051    0.03643    0.03880    0.05425    0.10453    0.10532
   0.14272    0.15932    0.16021    0.21500    0.32773    0.32795    0.34074    0.37865
   0.49299    0.52182    0.53089    0.58355    0.58400    0.60571
 kpt# 197, nband= 30, wtk=  1.00000, kpt=  0.4571  0.4571  0.0000 (reduced coord)
  -2.10228   -1.15432   -1.15432   -1.15296   -0.96448   -0.39774   -0.38914   -0.38505
  -0.30172   -0.29073   -0.29053    0.03679    0.03935    0.05458    0.10443    0.10556
   0.14308    0.15897    0.16024    0.21466    0.32738    0.32770    0.34042    0.37853
   0.49221    0.52209    0.53055    0.58306    0.58370    0.60313
 kpt# 198, nband= 30, wtk=  1.00000, kpt=  0.4500  0.4500  0.0000 (reduced coord)
  -2.10228   -1.15431   -1.15431   -1.15296   -0.96449   -0.39873   -0.38908   -0.38418
  -0.30176   -0.29082   -0.29054    0.03720    0.04002    0.05495    0.10432    0.10585
   0.14351    0.15858    0.16029    0.21426    0.32698    0.32740    0.34004    0.37840
   0.49128    0.52232    0.53023    0.58249    0.58334    0.60027
 kpt# 199, nband= 30, wtk=  1.00000, kpt=  0.4429  0.4429  0.0000 (reduced coord)
  -2.10228   -1.15431   -1.15430   -1.15296   -0.96451   -0.39973   -0.38900   -0.38334
  -0.30180   -0.29093   -0.29056    0.03765    0.04082    0.05539    0.10420    0.10619
   0.14400    0.15814    0.16034    0.21381    0.32651    0.32706    0.33960    0.37824
   0.49022    0.52245    0.52999    0.58184    0.58294    0.59717
 kpt# 200, nband= 30, wtk=  1.00000, kpt=  0.4357  0.4357  0.0000 (reduced coord)
  -2.10228   -1.15430   -1.15429   -1.15296   -0.96452   -0.40072   -0.38892   -0.38251
  -0.30185   -0.29105   -0.29058    0.03813    0.04173    0.05587    0.10407    0.10657
   0.14454    0.15765    0.16040    0.21330    0.32598    0.32667    0.33910    0.37806
   0.48903    0.52241    0.52987    0.58112    0.58248    0.59389
 kpt# 201, nband= 30, wtk=  1.00000, kpt=  0.4286  0.4286  0.0000 (reduced coord)
  -2.10228   -1.15429   -1.15428   -1.15296   -0.96454   -0.40171   -0.38882   -0.38172
  -0.30190   -0.29119   -0.29060    0.03865    0.04277    0.05642    0.10392    0.10699
   0.14514    0.15713    0.16047    0.21273    0.32540    0.32623    0.33855    0.37786
   0.48771    0.52214    0.52995    0.58033    0.58197    0.59044
 kpt# 202, nband= 30, wtk=  1.00000, kpt=  0.4214  0.4214  0.0000 (reduced coord)
  -2.10228   -1.15427   -1.15427   -1.15296   -0.96456   -0.40269   -0.38872   -0.38095
  -0.30196   -0.29133   -0.29062    0.03920    0.04392    0.05701    0.10377    0.10746
   0.14580    0.15658    0.16054    0.21212    0.32475    0.32575    0.33794    0.37764
   0.48626    0.52162    0.53022    0.57947    0.58141    0.58687
 kpt# 203, nband= 30, wtk=  1.00000, kpt=  0.4143  0.4143  0.0000 (reduced coord)
  -2.10228   -1.15426   -1.15425   -1.15297   -0.96458   -0.40365   -0.38861   -0.38022
  -0.30202   -0.29149   -0.29064    0.03980    0.04518    0.05766    0.10362    0.10797
   0.14650    0.15601    0.16063    0.21145    0.32405    0.32523    0.33728    0.37739
   0.48470    0.52086    0.53067    0.57856    0.58081    0.58319
 kpt# 204, nband= 30, wtk=  1.00000, kpt=  0.4071  0.4071  0.0000 (reduced coord)
  -2.10228   -1.15425   -1.15424   -1.15297   -0.96460   -0.40460   -0.38848   -0.37953
  -0.30209   -0.29167   -0.29067    0.04044    0.04655    0.05836    0.10346    0.10852
   0.14725    0.15542    0.16073    0.21074    0.32330    0.32466    0.33656    0.37712
   0.48301    0.51991    0.53124    0.57759    0.57942    0.58015
 kpt# 205, nband= 30, wtk=  1.00000, kpt=  0.4000  0.4000  0.0000 (reduced coord)
  -2.10228   -1.15423   -1.15422   -1.15297   -0.96462   -0.40554   -0.38835   -0.37887
  -0.30216   -0.29185   -0.29069    0.04111    0.04803    0.05911    0.10330    0.10912
   0.14805    0.15482    0.16084    0.20999    0.32249    0.32405    0.33579    0.37684
   0.48121    0.51879    0.53189    0.57557    0.57656    0.57946
 kpt# 206, nband= 30, wtk=  1.00000, kpt=  0.3929  0.3929  0.0000 (reduced coord)
  -2.10228   -1.15422   -1.15421   -1.15297   -0.96465   -0.40645   -0.38821   -0.37826
  -0.30223   -0.29205   -0.29071    0.04183    0.04961    0.05991    0.10314    0.10976
   0.14889    0.15422    0.16096    0.20920    0.32163    0.32339    0.33497    0.37652
   0.47931    0.51754    0.53257    0.57167    0.57550    0.57871
 kpt# 207, nband= 30, wtk=  1.00000, kpt=  0.3857  0.3857  0.0000 (reduced coord)
  -2.10229   -1.15420   -1.15419   -1.15297   -0.96467   -0.40734   -0.38806   -0.37769
  -0.30231   -0.29226   -0.29073    0.04259    0.05129    0.06075    0.10298    0.11044
   0.14978    0.15363    0.16109    0.20837    0.32073    0.32269    0.33410    0.37619
   0.47729    0.51618    0.53327    0.56772    0.57439    0.57793
 kpt# 208, nband= 30, wtk=  1.00000, kpt=  0.3786  0.3786  0.0000 (reduced coord)
  -2.10229   -1.15418   -1.15417   -1.15297   -0.96470   -0.40822   -0.38790   -0.37716
  -0.30240   -0.29249   -0.29075    0.04339    0.05307    0.06164    0.10282    0.11117
   0.15070    0.15304    0.16124    0.20751    0.31977    0.32194    0.33318    0.37583
   0.47518    0.51472    0.53394    0.56373    0.57325    0.57711
 kpt# 209, nband= 30, wtk=  1.00000, kpt=  0.3714  0.3714  0.0000 (reduced coord)
  -2.10229   -1.15416   -1.15415   -1.15298   -0.96473   -0.40906   -0.38773   -0.37668
  -0.30249   -0.29272   -0.29078    0.04422    0.05493    0.06257    0.10266    0.11193
   0.15166    0.15248    0.16140    0.20662    0.31876    0.32116    0.33221    0.37546
   0.47297    0.51318    0.53456    0.55971    0.57208    0.57625
 kpt# 210, nband= 30, wtk=  1.00000, kpt=  0.3643  0.3643  0.0000 (reduced coord)
  -2.10229   -1.15414   -1.15413   -1.15298   -0.96476   -0.40989   -0.38756   -0.37623
  -0.30258   -0.29297   -0.29080    0.04510    0.05689    0.06354    0.10251    0.11274
   0.15195    0.15265    0.16157    0.20570    0.31771    0.32032    0.33120    0.37505
   0.47066    0.51156    0.53511    0.55567    0.57089    0.57535
 kpt# 211, nband= 30, wtk=  1.00000, kpt=  0.3571  0.3571  0.0000 (reduced coord)
  -2.10229   -1.15412   -1.15411   -1.15298   -0.96480   -0.41069   -0.38737   -0.37584
  -0.30267   -0.29322   -0.29083    0.04601    0.05893    0.06454    0.10236    0.11359
   0.15146    0.15367    0.16177    0.20476    0.31662    0.31945    0.33014    0.37463
   0.46827    0.50988    0.53556    0.55162    0.56967    0.57442
 kpt# 212, nband= 30, wtk=  1.00000, kpt=  0.3500  0.3500  0.0000 (reduced coord)
  -2.10229   -1.15410   -1.15408   -1.15298   -0.96483   -0.41146   -0.38718   -0.37548
  -0.30277   -0.29349   -0.29087    0.04696    0.06105    0.06559    0.10222    0.11447
   0.15100    0.15473    0.16198    0.20379    0.31548    0.31853    0.32904    0.37418
   0.46579    0.50813    0.53591    0.54756    0.56844    0.57346
 kpt# 213, nband= 30, wtk=  1.00000, kpt=  0.3429  0.3429  0.0000 (reduced coord)
  -2.10229   -1.15408   -1.15406   -1.15298   -0.96487   -0.41221   -0.38698   -0.37517
  -0.30287   -0.29376   -0.29090    0.04795    0.06325    0.06667    0.10208    0.11540
   0.15060    0.15581    0.16220    0.20282    0.31431    0.31758    0.32790    0.37371
   0.46324    0.50632    0.53614    0.54349    0.56720    0.57247
 kpt# 214, nband= 30, wtk=  1.00000, kpt=  0.3357  0.3357  0.0000 (reduced coord)
  -2.10229   -1.15405   -1.15404   -1.15299   -0.96490   -0.41292   -0.38677   -0.37491
  -0.30298   -0.29405   -0.29095    0.04898    0.06552    0.06777    0.10196    0.11636
   0.15026    0.15692    0.16245    0.20183    0.31310    0.31658    0.32672    0.37321
   0.46061    0.50446    0.53622    0.53942    0.56594    0.57144
 kpt# 215, nband= 30, wtk=  1.00000, kpt=  0.3286  0.3286  0.0000 (reduced coord)
  -2.10229   -1.15403   -1.15401   -1.15299   -0.96494   -0.41361   -0.38656   -0.37468
  -0.30308   -0.29434   -0.29100    0.05003    0.06787    0.06891    0.10184    0.11737
   0.14997    0.15805    0.16271    0.20083    0.31185    0.31554    0.32550    0.37270
   0.45790    0.50255    0.53537    0.53615    0.56469    0.57040
 kpt# 216, nband= 30, wtk=  1.00000, kpt=  0.3214  0.3214  0.0000 (reduced coord)
  -2.10230   -1.15401   -1.15399   -1.15299   -0.96498   -0.41428   -0.38633   -0.37449
  -0.30319   -0.29465   -0.29107    0.05113    0.07007    0.07028    0.10172    0.11841
   0.14976    0.15920    0.16299    0.19983    0.31057    0.31446    0.32424    0.37216
   0.45513    0.50059    0.53132    0.53592    0.56343    0.56933
 kpt# 217, nband= 30, wtk=  1.00000, kpt=  0.3143  0.3143  0.0000 (reduced coord)
  -2.10230   -1.15398   -1.15396   -1.15299   -0.96502   -0.41491   -0.38610   -0.37435
  -0.30330   -0.29496   -0.29114    0.05225    0.07125    0.07275    0.10162    0.11949
   0.14962    0.16038    0.16330    0.19883    0.30925    0.31334    0.32294    0.37159
   0.45230    0.49859    0.52729    0.53552    0.56218    0.56824
 kpt# 218, nband= 30, wtk=  1.00000, kpt=  0.3071  0.3071  0.0000 (reduced coord)
  -2.10230   -1.15396   -1.15393   -1.15300   -0.96506   -0.41551   -0.38587   -0.37424
  -0.30341   -0.29527   -0.29123    0.05341    0.07245    0.07529    0.10153    0.12060
   0.14956    0.16157    0.16363    0.19783    0.30791    0.31218    0.32162    0.37101
   0.44940    0.49655    0.52328    0.53496    0.56093    0.56713
 kpt# 219, nband= 30, wtk=  1.00000, kpt=  0.3000  0.3000  0.0000 (reduced coord)
  -2.10230   -1.15393   -1.15391   -1.15300   -0.96510   -0.41608   -0.38563   -0.37416
  -0.30353   -0.29560   -0.29133    0.05460    0.07367    0.07788    0.10144    0.12175
   0.14958    0.16278    0.16398    0.19684    0.30654    0.31098    0.32026    0.37040
   0.44646    0.49447    0.51930    0.53421    0.55969    0.56601
 kpt# 220, nband= 30, wtk=  1.00000, kpt=  0.2929  0.2929  0.0000 (reduced coord)
  -2.10230   -1.15390   -1.15388   -1.15300   -0.96515   -0.41663   -0.38538   -0.37412
  -0.30364   -0.29593   -0.29145    0.05582    0.07490    0.08052    0.10136    0.12293
   0.14969    0.16401    0.16435    0.19586    0.30514    0.30975    0.31886    0.36976
   0.44346    0.49235    0.51535    0.53330    0.55847    0.56487
 kpt# 221, nband= 30, wtk=  1.00000, kpt=  0.2857  0.2857  0.0000 (reduced coord)
  -2.10230   -1.15388   -1.15385   -1.15300   -0.96519   -0.41714   -0.38513   -0.37411
  -0.30376   -0.29627   -0.29159    0.05706    0.07614    0.08321    0.10130    0.12415
   0.14990    0.16475    0.16525    0.19491    0.30373    0.30848    0.31744    0.36911
   0.44041    0.49021    0.51143    0.53222    0.55726    0.56372
 kpt# 222, nband= 30, wtk=  1.00000, kpt=  0.2786  0.2786  0.0000 (reduced coord)
  -2.10230   -1.15385   -1.15382   -1.15301   -0.96524   -0.41763   -0.38487   -0.37412
  -0.30387   -0.29661   -0.29174    0.05834    0.07738    0.08594    0.10124    0.12540
   0.15020    0.16517    0.16649    0.19397    0.30229    0.30717    0.31599    0.36843
   0.43733    0.48802    0.50754    0.53098    0.55607    0.56257
 kpt# 223, nband= 30, wtk=  1.00000, kpt=  0.2714  0.2714  0.0000 (reduced coord)
  -2.10231   -1.15382   -1.15380   -1.15301   -0.96528   -0.41808   -0.38461   -0.37416
  -0.30399   -0.29696   -0.29192    0.05964    0.07862    0.08872    0.10119    0.12668
   0.15060    0.16562    0.16775    0.19305    0.30083    0.30584    0.31451    0.36773
   0.43420    0.48581    0.50370    0.52958    0.55490    0.56140
 kpt# 224, nband= 30, wtk=  1.00000, kpt=  0.2643  0.2643  0.0000 (reduced coord)
  -2.10231   -1.15379   -1.15377   -1.15301   -0.96533   -0.41851   -0.38434   -0.37423
  -0.30411   -0.29732   -0.29212    0.06096    0.07986    0.09152    0.10115    0.12799
   0.15110    0.16609    0.16902    0.19217    0.29935    0.30446    0.31301    0.36701
   0.43104    0.48358    0.49990    0.52804    0.55375    0.56024
 kpt# 225, nband= 30, wtk=  1.00000, kpt=  0.2571  0.2571  0.0000 (reduced coord)
  -2.10231   -1.15377   -1.15374   -1.15302   -0.96538   -0.41891   -0.38407   -0.37431
  -0.30423   -0.29767   -0.29235    0.06231    0.08109    0.09436    0.10112    0.12933
   0.15170    0.16659    0.17030    0.19133    0.29786    0.30306    0.31148    0.36627
   0.42785    0.48131    0.49615    0.52636    0.55263    0.55907
 kpt# 226, nband= 30, wtk=  1.00000, kpt=  0.2500  0.2500  0.0000 (reduced coord)
  -2.10231   -1.15374   -1.15371   -1.15302   -0.96543   -0.41929   -0.38380   -0.37441
  -0.30434   -0.29803   -0.29260    0.06369    0.08232    0.09723    0.10110    0.13070
   0.15241    0.16710    0.17158    0.19052    0.29636    0.30163    0.30993    0.36551
   0.42464    0.47903    0.49245    0.52457    0.55153    0.55791
 kpt# 227, nband= 30, wtk=  1.00000, kpt=  0.2429  0.2429  0.0000 (reduced coord)
  -2.10231   -1.15371   -1.15368   -1.15302   -0.96547   -0.41963   -0.38352   -0.37453
  -0.30446   -0.29839   -0.29288    0.06508    0.08352    0.10011    0.10108    0.13209
   0.15322    0.16764    0.17287    0.18977    0.29485    0.30017    0.30835    0.36473
   0.42141    0.47672    0.48881    0.52266    0.55046    0.55675
 kpt# 228, nband= 30, wtk=  1.00000, kpt=  0.2357  0.2357  0.0000 (reduced coord)
  -2.10231   -1.15368   -1.15366   -1.15302   -0.96552   -0.41995   -0.38324   -0.37466
  -0.30458   -0.29876   -0.29318    0.06649    0.08471    0.10108    0.10302    0.13351
   0.15413    0.16819    0.17416    0.18906    0.29333    0.29868    0.30676    0.36394
   0.41816    0.47439    0.48522    0.52065    0.54941    0.55560
 kpt# 229, nband= 30, wtk=  1.00000, kpt=  0.2286  0.2286  0.0000 (reduced coord)
  -2.10231   -1.15365   -1.15363   -1.15303   -0.96557   -0.42025   -0.38296   -0.37479
  -0.30469   -0.29912   -0.29351    0.06792    0.08588    0.10108    0.10593    0.13495
   0.15514    0.16875    0.17545    0.18842    0.29180    0.29716    0.30514    0.36312
   0.41489    0.47205    0.48169    0.51855    0.54840    0.55445
 kpt# 230, nband= 30, wtk=  1.00000, kpt=  0.2214  0.2214  0.0000 (reduced coord)
  -2.10232   -1.15362   -1.15360   -1.15303   -0.96562   -0.42052   -0.38268   -0.37494
  -0.30481   -0.29949   -0.29386    0.06937    0.08701    0.10109    0.10886    0.13642
   0.15626    0.16932    0.17674    0.18785    0.29027    0.29562    0.30350    0.36229
   0.41163    0.46970    0.47823    0.51636    0.54741    0.55332
 kpt# 231, nband= 30, wtk=  1.00000, kpt=  0.2143  0.2143  0.0000 (reduced coord)
  -2.10232   -1.15360   -1.15357   -1.15303   -0.96567   -0.42076   -0.38240   -0.37509
  -0.30492   -0.29985   -0.29424    0.07083    0.08812    0.10111    0.11179    0.13790
   0.15748    0.16989    0.17803    0.18736    0.28874    0.29406    0.30184    0.36144
   0.40835    0.46734    0.47483    0.51411    0.54646    0.55219
 kpt# 232, nband= 30, wtk=  1.00000, kpt=  0.2071  0.2071  0.0000 (reduced coord)
  -2.10232   -1.15357   -1.15354   -1.15303   -0.96572   -0.42099   -0.38212   -0.37524
  -0.30503   -0.30022   -0.29465    0.07230    0.08920    0.10113    0.11471    0.13940
   0.15880    0.17045    0.17931    0.18696    0.28721    0.29248    0.30016    0.36058
   0.40508    0.46498    0.47151    0.51180    0.54554    0.55109
 kpt# 233, nband= 30, wtk=  1.00000, kpt=  0.2000  0.2000  0.0000 (reduced coord)
  -2.10232   -1.15354   -1.15352   -1.15304   -0.96576   -0.42119   -0.38183   -0.37540
  -0.30514   -0.30058   -0.29508    0.07378    0.09024    0.10116    0.11763    0.14092
   0.16021    0.17100    0.18059    0.18666    0.28569    0.29089    0.29846    0.35970
   0.40182    0.46261    0.46826    0.50944    0.54466    0.55000
 kpt# 234, nband= 30, wtk=  1.00000, kpt=  0.1929  0.1929  0.0000 (reduced coord)
  -2.10232   -1.15351   -1.15349   -1.15304   -0.96581   -0.42137   -0.38155   -0.37555
  -0.30525   -0.30094   -0.29553    0.07526    0.09124    0.10119    0.12054    0.14245
   0.16171    0.17151    0.18186    0.18647    0.28416    0.28927    0.29675    0.35882
   0.39857    0.46025    0.46508    0.50703    0.54380    0.54893
 kpt# 235, nband= 30, wtk=  1.00000, kpt=  0.1857  0.1857  0.0000 (reduced coord)
  -2.10232   -1.15349   -1.15346   -1.15304   -0.96586   -0.42154   -0.38127   -0.37570
  -0.30535   -0.30129   -0.29601    0.07675    0.09220    0.10123    0.12343    0.14400
   0.16329    0.17198    0.18313    0.18641    0.28265    0.28765    0.29502    0.35792
   0.39534    0.45789    0.46199    0.50459    0.54299    0.54788
 kpt# 236, nband= 30, wtk=  1.00000, kpt=  0.1786  0.1786  0.0000 (reduced coord)
  -2.10232   -1.15346   -1.15344   -1.15305   -0.96590   -0.42168   -0.38100   -0.37584
  -0.30546   -0.30165   -0.29650    0.07824    0.09311    0.10128    0.12631    0.14555
   0.16496    0.17239    0.18438    0.18648    0.28115    0.28602    0.29327    0.35702
   0.39213    0.45555    0.45898    0.50212    0.54220    0.54686
 kpt# 237, nband= 30, wtk=  1.00000, kpt=  0.1714  0.1714  0.0000 (reduced coord)
  -2.10233   -1.15343   -1.15341   -1.15305   -0.96595   -0.42181   -0.38072   -0.37598
  -0.30556   -0.30199   -0.29702    0.07972    0.09398    0.10133    0.12916    0.14710
   0.16671    0.17275    0.18563    0.18670    0.27966    0.28438    0.29151    0.35611
   0.38895    0.45323    0.45605    0.49963    0.54145    0.54587
 kpt# 238, nband= 30, wtk=  1.00000, kpt=  0.1643  0.1643  0.0000 (reduced coord)
  -2.10233   -1.15341   -1.15339   -1.15305   -0.96600   -0.42192   -0.38045   -0.37611
  -0.30565   -0.30233   -0.29755    0.08120    0.09480    0.10138    0.13198    0.14866
   0.16852    0.17304    0.18686    0.18705    0.27818    0.28273    0.28974    0.35520
   0.38580    0.45093    0.45322    0.49713    0.54074    0.54489
 kpt# 239, nband= 30, wtk=  1.00000, kpt=  0.1571  0.1571  0.0000 (reduced coord)
  -2.10233   -1.15338   -1.15336   -1.15305   -0.96604   -0.42202   -0.38019   -0.37623
  -0.30575   -0.30267   -0.29809    0.08266    0.09557    0.10143    0.13477    0.15022
   0.17040    0.17326    0.18755    0.18808    0.27672    0.28109    0.28795    0.35429
   0.38269    0.44866    0.45047    0.49464    0.54005    0.54399
 kpt# 240, nband= 30, wtk=  1.00000, kpt=  0.1500  0.1500  0.0000 (reduced coord)
  -2.10233   -1.15336   -1.15334   -1.15305   -0.96608   -0.42211   -0.37993   -0.37635
  -0.30584   -0.30300   -0.29864    0.08411    0.09630    0.10149    0.13751    0.15178
   0.17233    0.17342    0.18818    0.18928    0.27529    0.27946    0.28615    0.35337
   0.37963    0.44642    0.44783    0.49215    0.53941    0.54306
 kpt# 241, nband= 30, wtk=  1.00000, kpt=  0.1429  0.1429  0.0000 (reduced coord)
  -2.10233   -1.15333   -1.15332   -1.15306   -0.96612   -0.42218   -0.37967   -0.37645
  -0.30593   -0.30332   -0.29921    0.08554    0.09697    0.10155    0.14022    0.15332
   0.17353    0.17430    0.18892    0.19046    0.27388    0.27783    0.28434    0.35247
   0.37663    0.44423    0.44528    0.48968    0.53879    0.54216
 kpt# 242, nband= 30, wtk=  1.00000, kpt=  0.1357  0.1357  0.0000 (reduced coord)
  -2.10233   -1.15331   -1.15330   -1.15306   -0.96617   -0.42224   -0.37942   -0.37654
  -0.30601   -0.30363   -0.29977    0.08694    0.09760    0.10161    0.14287    0.15486
   0.17360    0.17631    0.18976    0.19161    0.27249    0.27621    0.28253    0.35157
   0.37368    0.44208    0.44283    0.48723    0.53821    0.54132
 kpt# 243, nband= 30, wtk=  1.00000, kpt=  0.1286  0.1286  0.0000 (reduced coord)
  -2.10233   -1.15329   -1.15328   -1.15306   -0.96620   -0.42230   -0.37918   -0.37662
  -0.30609   -0.30393   -0.30034    0.08831    0.09818    0.10167    0.14547    0.15638
   0.17363    0.17835    0.19069    0.19275    0.27114    0.27462    0.28071    0.35068
   0.37080    0.43999    0.44048    0.48482    0.53776    0.54064
 kpt# 244, nband= 30, wtk=  1.00000, kpt=  0.1214  0.1214  0.0000 (reduced coord)
  -2.10233   -1.15327   -1.15326   -1.15306   -0.96624   -0.42234   -0.37895   -0.37668
  -0.30617   -0.30422   -0.30091    0.08965    0.09872    0.10173    0.14802    0.15787
   0.17364    0.18041    0.19168    0.19386    0.26981    0.27305    0.27888    0.34980
   0.36800    0.43796    0.43825    0.48246    0.53724    0.53987
 kpt# 245, nband= 30, wtk=  1.00000, kpt=  0.1143  0.1143  0.0000 (reduced coord)
  -2.10234   -1.15325   -1.15324   -1.15307   -0.96628   -0.42238   -0.37872   -0.37674
  -0.30625   -0.30450   -0.30147    0.09095    0.09920    0.10179    0.15049    0.15934
   0.17363    0.18247    0.19273    0.19494    0.26853    0.27150    0.27707    0.34894
   0.36528    0.43600    0.43612    0.48016    0.53667    0.53900
 kpt# 246, nband= 30, wtk=  1.00000, kpt=  0.1071  0.1071  0.0000 (reduced coord)
  -2.10234   -1.15323   -1.15322   -1.15307   -0.96631   -0.42241   -0.37851   -0.37679
  -0.30632   -0.30476   -0.30202    0.09220    0.09965    0.10186    0.15289    0.16078
   0.17361    0.18453    0.19381    0.19599    0.26728    0.27000    0.27525    0.34810
   0.36265    0.43411    0.43411    0.47792    0.53623    0.53831
 kpt# 247, nband= 30, wtk=  1.00000, kpt=  0.1000  0.1000  0.0000 (reduced coord)
  -2.10234   -1.15321   -1.15320   -1.15307   -0.96635   -0.42243   -0.37830   -0.37682
  -0.30638   -0.30502   -0.30256    0.09340    0.10005    0.10192    0.15521    0.16218
   0.17359    0.18658    0.19490    0.19700    0.26608    0.26853    0.27346    0.34729
   0.36013    0.43221    0.43231    0.47576    0.53583    0.53764
 kpt# 248, nband= 30, wtk=  1.00000, kpt=  0.0929  0.0929  0.0000 (reduced coord)
  -2.10234   -1.15319   -1.15319   -1.15307   -0.96638   -0.42245   -0.37811   -0.37685
  -0.30645   -0.30526   -0.30308    0.09455    0.10041    0.10197    0.15744    0.16353
   0.17356    0.18859    0.19601    0.19797    0.26494    0.26712    0.27168    0.34650
   0.35771    0.43043    0.43059    0.47369    0.53542    0.53703
 kpt# 249, nband= 30, wtk=  1.00000, kpt=  0.0857  0.0857  0.0000 (reduced coord)
  -2.10234   -1.15318   -1.15317   -1.15307   -0.96641   -0.42246   -0.37792   -0.37687
  -0.30650   -0.30548   -0.30358    0.09564    0.10074    0.10203    0.15957    0.16482
   0.17354    0.19057    0.19710    0.19890    0.26384    0.26576    0.26993    0.34575
   0.35542    0.42877    0.42897    0.47172    0.53507    0.53647
 kpt# 250, nband= 30, wtk=  1.00000, kpt=  0.0786  0.0786  0.0000 (reduced coord)
  -2.10234   -1.15316   -1.15316   -1.15307   -0.96643   -0.42248   -0.37775   -0.37688
  -0.30656   -0.30569   -0.30406    0.09666    0.10103    0.10208    0.16159    0.16606
   0.17351    0.19248    0.19817    0.19978    0.26280    0.26446    0.26822    0.34504
   0.35326    0.42724    0.42746    0.46986    0.53475    0.53596
 kpt# 251, nband= 30, wtk=  1.00000, kpt=  0.0714  0.0714  0.0000 (reduced coord)
  -2.10234   -1.15315   -1.15314   -1.15307   -0.96646   -0.42248   -0.37759   -0.37688
  -0.30661   -0.30589   -0.30451    0.09761    0.10129    0.10213    0.16349    0.16723
   0.17349    0.19433    0.19920    0.20061    0.26183    0.26324    0.26657    0.34437
   0.35123    0.42583    0.42605    0.46813    0.53447    0.53549
 kpt# 252, nband= 30, wtk=  1.00000, kpt=  0.0643  0.0643  0.0000 (reduced coord)
  -2.10234   -1.15314   -1.15313   -1.15308   -0.96648   -0.42249   -0.37745   -0.37688
  -0.30665   -0.30606   -0.30492    0.09848    0.10151    0.10218    0.16525    0.16832
   0.17347    0.19609    0.20018    0.20138    0.26093    0.26210    0.26498    0.34374
   0.34936    0.42455    0.42475    0.46652    0.53439    0.53525
 kpt# 253, nband= 30, wtk=  1.00000, kpt=  0.0571  0.0571  0.0000 (reduced coord)
  -2.10234   -1.15312   -1.15312   -1.15308   -0.96650   -0.42249   -0.37732   -0.37687
  -0.30669   -0.30622   -0.30531    0.09928    0.10171    0.10222    0.16688    0.16933
   0.17346    0.19775    0.20110    0.20209    0.26010    0.26104    0.26347    0.34317
   0.34765    0.42339    0.42358    0.46506    0.53405    0.53473
 kpt# 254, nband= 30, wtk=  1.00000, kpt=  0.0500  0.0500  0.0000 (reduced coord)
  -2.10234   -1.15311   -1.15311   -1.15308   -0.96652   -0.42250   -0.37720   -0.37686
  -0.30673   -0.30637   -0.30566    0.09999    0.10187    0.10226    0.16835    0.17025
   0.17345    0.19929    0.20195    0.20273    0.25935    0.26009    0.26205    0.34265
   0.34611    0.42237    0.42252    0.46375    0.53390    0.53452
 kpt# 255, nband= 30, wtk=  1.00000, kpt=  0.0429  0.0429  0.0000 (reduced coord)
  -2.10234   -1.15311   -1.15310   -1.15308   -0.96654   -0.42250   -0.37710   -0.37685
  -0.30676   -0.30649   -0.30596    0.10062    0.10202    0.10229    0.16965    0.17106
   0.17344    0.20069    0.20270    0.20330    0.25869    0.25924    0.26076    0.34219
   0.34476    0.42148    0.42160    0.46259    0.53360    0.53398
 kpt# 256, nband= 30, wtk=  1.00000, kpt=  0.0357  0.0357  0.0000 (reduced coord)
  -2.10234   -1.15310   -1.15310   -1.15308   -0.96655   -0.42250   -0.37701   -0.37684
  -0.30678   -0.30660   -0.30623    0.10115    0.10213    0.10232    0.17078    0.17176
   0.17343    0.20192    0.20337    0.20379    0.25811    0.25850    0.25962    0.34180
   0.34359    0.42073    0.42082    0.46160    0.53354    0.53371
 kpt# 257, nband= 30, wtk=  1.00000, kpt=  0.0286  0.0286  0.0000 (reduced coord)
  -2.10234   -1.15309   -1.15309   -1.15308   -0.96656   -0.42250   -0.37694   -0.37683
  -0.30681   -0.30669   -0.30645    0.10159    0.10223    0.10234    0.17172    0.17235
   0.17343    0.20297    0.20392    0.20420    0.25764    0.25789    0.25863    0.34147
   0.34262    0.42011    0.42017    0.46078    0.53342    0.53376
 kpt# 258, nband= 30, wtk=  1.00000, kpt=  0.0214  0.0214  0.0000 (reduced coord)
  -2.10234   -1.15309   -1.15309   -1.15308   -0.96657   -0.42250   -0.37688   -0.37682
  -0.30682   -0.30676   -0.30662    0.10194    0.10230    0.10236    0.17246    0.17281
   0.17342    0.20382    0.20436    0.20452    0.25726    0.25741    0.25784    0.34121
   0.34186    0.41962    0.41966    0.46013    0.53328    0.53331
 kpt# 259, nband= 30, wtk=  1.00000, kpt=  0.0143  0.0143  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37684   -0.37682
  -0.30684   -0.30681   -0.30674    0.10219    0.10235    0.10238    0.17299    0.17315
   0.17342    0.20444    0.20468    0.20475    0.25699    0.25706    0.25725    0.34103
   0.34132    0.41928    0.41929    0.45967    0.53314    0.53324
 kpt# 260, nband= 30, wtk=  1.00000, kpt=  0.0071  0.0071  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37682   -0.37681
  -0.30684   -0.30684   -0.30682    0.10234    0.10238    0.10238    0.17331    0.17335
   0.17342    0.20482    0.20488    0.20490    0.25683    0.25685    0.25690    0.34091
   0.34099    0.41907    0.41908    0.45939    0.53309    0.53311
 kpt# 261, nband= 30, wtk=  1.00000, kpt=  0.0000  0.0000  0.0000 (reduced coord)
  -2.10234   -1.15308   -1.15308   -1.15308   -0.96658   -0.42250   -0.37681   -0.37681
  -0.30685   -0.30685   -0.30685    0.10239    0.10239    0.10239    0.17342    0.17342
   0.17342    0.20494    0.20494    0.20494    0.25678    0.25678    0.25678    0.34087
   0.34087    0.41900    0.41900    0.45930    0.53307    0.53307
 Total charge density [el/Bohr^3]
      Maximum=    1.9681E+00  at reduced coord.    0.0000    0.0000    0.0000
 Next maximum=    1.9399E+00  at reduced coord.    0.0000    0.0000    0.9815
      Minimum=    5.6281E-03  at reduced coord.    0.5000    0.5000    0.0000
 Next minimum=    5.6281E-03  at reduced coord.    0.5000    0.0000    0.5000
   Integrated=    4.1000E+01
 
== END DATASET(S) ==============================================================
================================================================================
  
 -outvars: echo values of variables after computation  --------
 
 These variables are accessible in NetCDF format (tdmft_5o_OUT.nc)

            acell      7.2605000000E+00  7.2605000000E+00  7.2605000000E+00 Bohr
              amu      5.09415000E+01  8.76200000E+01  1.59994000E+01
        dmatpuopt           1
        dmftbandf          23
        dmftbandi          21
        dmft_iter          10
        dmft_mxsf      8.0000000000E-01
        dmft_nwli      100000
        dmft_nwlo        1600
        dmft_rslf           1
             ecut      2.00000000E+01 Hartree
-          fftalg         512
        f4of2_sla      0.00000000E+00  0.00000000E+00  0.00000000E+00
           getden           1
           iatsph3       1    2    3    4    5
             iscf          -2
           istwfk        1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         0    0    0    0    0    0    0    0    0    0
                         1
              ixc       -1012
           jdtset        3
              kpt      5.00000000E-01  5.00000000E-01  5.00000000E-01
                       4.94444444E-01  4.94444444E-01  4.94444444E-01
                       4.88888889E-01  4.88888889E-01  4.88888889E-01
                       4.83333333E-01  4.83333333E-01  4.83333333E-01
                       4.77777778E-01  4.77777778E-01  4.77777778E-01
                       4.72222222E-01  4.72222222E-01  4.72222222E-01
                       4.66666667E-01  4.66666667E-01  4.66666667E-01
                       4.61111111E-01  4.61111111E-01  4.61111111E-01
                       4.55555556E-01  4.55555556E-01  4.55555556E-01
                       4.50000000E-01  4.50000000E-01  4.50000000E-01
                       4.44444444E-01  4.44444444E-01  4.44444444E-01
                       4.38888889E-01  4.38888889E-01  4.38888889E-01
                       4.33333333E-01  4.33333333E-01  4.33333333E-01
                       4.27777778E-01  4.27777778E-01  4.27777778E-01
                       4.22222222E-01  4.22222222E-01  4.22222222E-01
                       4.16666667E-01  4.16666667E-01  4.16666667E-01
                       4.11111111E-01  4.11111111E-01  4.11111111E-01
                       4.05555556E-01  4.05555556E-01  4.05555556E-01
                       4.00000000E-01  4.00000000E-01  4.00000000E-01
                       3.94444444E-01  3.94444444E-01  3.94444444E-01
                       3.88888889E-01  3.88888889E-01  3.88888889E-01
                       3.83333333E-01  3.83333333E-01  3.83333333E-01
                       3.77777778E-01  3.77777778E-01  3.77777778E-01
                       3.72222222E-01  3.72222222E-01  3.72222222E-01
                       3.66666667E-01  3.66666667E-01  3.66666667E-01
                       3.61111111E-01  3.61111111E-01  3.61111111E-01
                       3.55555556E-01  3.55555556E-01  3.55555556E-01
                       3.50000000E-01  3.50000000E-01  3.50000000E-01
                       3.44444444E-01  3.44444444E-01  3.44444444E-01
                       3.38888889E-01  3.38888889E-01  3.38888889E-01
                       3.33333333E-01  3.33333333E-01  3.33333333E-01
                       3.27777778E-01  3.27777778E-01  3.27777778E-01
                       3.22222222E-01  3.22222222E-01  3.22222222E-01
                       3.16666667E-01  3.16666667E-01  3.16666667E-01
                       3.11111111E-01  3.11111111E-01  3.11111111E-01
                       3.05555556E-01  3.05555556E-01  3.05555556E-01
                       3.00000000E-01  3.00000000E-01  3.00000000E-01
                       2.94444444E-01  2.94444444E-01  2.94444444E-01
                       2.88888889E-01  2.88888889E-01  2.88888889E-01
                       2.83333333E-01  2.83333333E-01  2.83333333E-01
                       2.77777778E-01  2.77777778E-01  2.77777778E-01
                       2.72222222E-01  2.72222222E-01  2.72222222E-01
                       2.66666667E-01  2.66666667E-01  2.66666667E-01
                       2.61111111E-01  2.61111111E-01  2.61111111E-01
                       2.55555556E-01  2.55555556E-01  2.55555556E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       2.44444444E-01  2.44444444E-01  2.44444444E-01
                       2.38888889E-01  2.38888889E-01  2.38888889E-01
                       2.33333333E-01  2.33333333E-01  2.33333333E-01
                       2.27777778E-01  2.27777778E-01  2.27777778E-01
                       2.22222222E-01  2.22222222E-01  2.22222222E-01
                       2.16666667E-01  2.16666667E-01  2.16666667E-01
                       2.11111111E-01  2.11111111E-01  2.11111111E-01
                       2.05555556E-01  2.05555556E-01  2.05555556E-01
                       2.00000000E-01  2.00000000E-01  2.00000000E-01
                       1.94444444E-01  1.94444444E-01  1.94444444E-01
                       1.88888889E-01  1.88888889E-01  1.88888889E-01
                       1.83333333E-01  1.83333333E-01  1.83333333E-01
                       1.77777778E-01  1.77777778E-01  1.77777778E-01
                       1.72222222E-01  1.72222222E-01  1.72222222E-01
                       1.66666667E-01  1.66666667E-01  1.66666667E-01
                       1.61111111E-01  1.61111111E-01  1.61111111E-01
                       1.55555556E-01  1.55555556E-01  1.55555556E-01
                       1.50000000E-01  1.50000000E-01  1.50000000E-01
                       1.44444444E-01  1.44444444E-01  1.44444444E-01
                       1.38888889E-01  1.38888889E-01  1.38888889E-01
                       1.33333333E-01  1.33333333E-01  1.33333333E-01
                       1.27777778E-01  1.27777778E-01  1.27777778E-01
                       1.22222222E-01  1.22222222E-01  1.22222222E-01
                       1.16666667E-01  1.16666667E-01  1.16666667E-01
                       1.11111111E-01  1.11111111E-01  1.11111111E-01
                       1.05555556E-01  1.05555556E-01  1.05555556E-01
                       1.00000000E-01  1.00000000E-01  1.00000000E-01
                       9.44444444E-02  9.44444444E-02  9.44444444E-02
                       8.88888889E-02  8.88888889E-02  8.88888889E-02
                       8.33333333E-02  8.33333333E-02  8.33333333E-02
                       7.77777778E-02  7.77777778E-02  7.77777778E-02
                       7.22222222E-02  7.22222222E-02  7.22222222E-02
                       6.66666667E-02  6.66666667E-02  6.66666667E-02
                       6.11111111E-02  6.11111111E-02  6.11111111E-02
                       5.55555556E-02  5.55555556E-02  5.55555556E-02
                       5.00000000E-02  5.00000000E-02  5.00000000E-02
                       4.44444444E-02  4.44444444E-02  4.44444444E-02
                       3.88888889E-02  3.88888889E-02  3.88888889E-02
                       3.33333333E-02  3.33333333E-02  3.33333333E-02
                       2.77777778E-02  2.77777778E-02  2.77777778E-02
                       2.22222222E-02  2.22222222E-02  2.22222222E-02
                       1.66666667E-02  1.66666667E-02  1.66666667E-02
                       1.11111111E-02  1.11111111E-02  1.11111111E-02
                       5.55555556E-03  5.55555556E-03  5.55555556E-03
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
                       1.00000000E-02  0.00000000E+00  0.00000000E+00
                       2.00000000E-02  0.00000000E+00  0.00000000E+00
                       3.00000000E-02  0.00000000E+00  0.00000000E+00
                       4.00000000E-02  0.00000000E+00  0.00000000E+00
                       5.00000000E-02  0.00000000E+00  0.00000000E+00
                       6.00000000E-02  0.00000000E+00  0.00000000E+00
                       7.00000000E-02  0.00000000E+00  0.00000000E+00
                       8.00000000E-02  0.00000000E+00  0.00000000E+00
                       9.00000000E-02  0.00000000E+00  0.00000000E+00
                       1.00000000E-01  0.00000000E+00  0.00000000E+00
                       1.10000000E-01  0.00000000E+00  0.00000000E+00
                       1.20000000E-01  0.00000000E+00  0.00000000E+00
                       1.30000000E-01  0.00000000E+00  0.00000000E+00
                       1.40000000E-01  0.00000000E+00  0.00000000E+00
                       1.50000000E-01  0.00000000E+00  0.00000000E+00
                       1.60000000E-01  0.00000000E+00  0.00000000E+00
                       1.70000000E-01  0.00000000E+00  0.00000000E+00
                       1.80000000E-01  0.00000000E+00  0.00000000E+00
                       1.90000000E-01  0.00000000E+00  0.00000000E+00
                       2.00000000E-01  0.00000000E+00  0.00000000E+00
                       2.10000000E-01  0.00000000E+00  0.00000000E+00
                       2.20000000E-01  0.00000000E+00  0.00000000E+00
                       2.30000000E-01  0.00000000E+00  0.00000000E+00
                       2.40000000E-01  0.00000000E+00  0.00000000E+00
                       2.50000000E-01  0.00000000E+00  0.00000000E+00
                       2.60000000E-01  0.00000000E+00  0.00000000E+00
                       2.70000000E-01  0.00000000E+00  0.00000000E+00
                       2.80000000E-01  0.00000000E+00  0.00000000E+00
                       2.90000000E-01  0.00000000E+00  0.00000000E+00
                       3.00000000E-01  0.00000000E+00  0.00000000E+00
                       3.10000000E-01  0.00000000E+00  0.00000000E+00
                       3.20000000E-01  0.00000000E+00  0.00000000E+00
                       3.30000000E-01  0.00000000E+00  0.00000000E+00
                       3.40000000E-01  0.00000000E+00  0.00000000E+00
                       3.50000000E-01  0.00000000E+00  0.00000000E+00
                       3.60000000E-01  0.00000000E+00  0.00000000E+00
                       3.70000000E-01  0.00000000E+00  0.00000000E+00
                       3.80000000E-01  0.00000000E+00  0.00000000E+00
                       3.90000000E-01  0.00000000E+00  0.00000000E+00
                       4.00000000E-01  0.00000000E+00  0.00000000E+00
                       4.10000000E-01  0.00000000E+00  0.00000000E+00
                       4.20000000E-01  0.00000000E+00  0.00000000E+00
                       4.30000000E-01  0.00000000E+00  0.00000000E+00
                       4.40000000E-01  0.00000000E+00  0.00000000E+00
                       4.50000000E-01  0.00000000E+00  0.00000000E+00
                       4.60000000E-01  0.00000000E+00  0.00000000E+00
                       4.70000000E-01  0.00000000E+00  0.00000000E+00
                       4.80000000E-01  0.00000000E+00  0.00000000E+00
                       4.90000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  0.00000000E+00  0.00000000E+00
                       5.00000000E-01  1.00000000E-02  0.00000000E+00
                       5.00000000E-01  2.00000000E-02  0.00000000E+00
                       5.00000000E-01  3.00000000E-02  0.00000000E+00
                       5.00000000E-01  4.00000000E-02  0.00000000E+00
                       5.00000000E-01  5.00000000E-02  0.00000000E+00
                       5.00000000E-01  6.00000000E-02  0.00000000E+00
                       5.00000000E-01  7.00000000E-02  0.00000000E+00
                       5.00000000E-01  8.00000000E-02  0.00000000E+00
                       5.00000000E-01  9.00000000E-02  0.00000000E+00
                       5.00000000E-01  1.00000000E-01  0.00000000E+00
                       5.00000000E-01  1.10000000E-01  0.00000000E+00
                       5.00000000E-01  1.20000000E-01  0.00000000E+00
                       5.00000000E-01  1.30000000E-01  0.00000000E+00
                       5.00000000E-01  1.40000000E-01  0.00000000E+00
                       5.00000000E-01  1.50000000E-01  0.00000000E+00
                       5.00000000E-01  1.60000000E-01  0.00000000E+00
                       5.00000000E-01  1.70000000E-01  0.00000000E+00
                       5.00000000E-01  1.80000000E-01  0.00000000E+00
                       5.00000000E-01  1.90000000E-01  0.00000000E+00
                       5.00000000E-01  2.00000000E-01  0.00000000E+00
                       5.00000000E-01  2.10000000E-01  0.00000000E+00
                       5.00000000E-01  2.20000000E-01  0.00000000E+00
                       5.00000000E-01  2.30000000E-01  0.00000000E+00
                       5.00000000E-01  2.40000000E-01  0.00000000E+00
                       5.00000000E-01  2.50000000E-01  0.00000000E+00
                       5.00000000E-01  2.60000000E-01  0.00000000E+00
                       5.00000000E-01  2.70000000E-01  0.00000000E+00
                       5.00000000E-01  2.80000000E-01  0.00000000E+00
                       5.00000000E-01  2.90000000E-01  0.00000000E+00
                       5.00000000E-01  3.00000000E-01  0.00000000E+00
                       5.00000000E-01  3.10000000E-01  0.00000000E+00
                       5.00000000E-01  3.20000000E-01  0.00000000E+00
                       5.00000000E-01  3.30000000E-01  0.00000000E+00
                       5.00000000E-01  3.40000000E-01  0.00000000E+00
                       5.00000000E-01  3.50000000E-01  0.00000000E+00
                       5.00000000E-01  3.60000000E-01  0.00000000E+00
                       5.00000000E-01  3.70000000E-01  0.00000000E+00
                       5.00000000E-01  3.80000000E-01  0.00000000E+00
                       5.00000000E-01  3.90000000E-01  0.00000000E+00
                       5.00000000E-01  4.00000000E-01  0.00000000E+00
                       5.00000000E-01  4.10000000E-01  0.00000000E+00
                       5.00000000E-01  4.20000000E-01  0.00000000E+00
                       5.00000000E-01  4.30000000E-01  0.00000000E+00
                       5.00000000E-01  4.40000000E-01  0.00000000E+00
                       5.00000000E-01  4.50000000E-01  0.00000000E+00
                       5.00000000E-01  4.60000000E-01  0.00000000E+00
                       5.00000000E-01  4.70000000E-01  0.00000000E+00
                       5.00000000E-01  4.80000000E-01  0.00000000E+00
                       5.00000000E-01  4.90000000E-01  0.00000000E+00
                       5.00000000E-01  5.00000000E-01  0.00000000E+00
                       4.92857143E-01  4.92857143E-01  0.00000000E+00
                       4.85714286E-01  4.85714286E-01  0.00000000E+00
                       4.78571429E-01  4.78571429E-01  0.00000000E+00
                       4.71428571E-01  4.71428571E-01  0.00000000E+00
                       4.64285714E-01  4.64285714E-01  0.00000000E+00
                       4.57142857E-01  4.57142857E-01  0.00000000E+00
                       4.50000000E-01  4.50000000E-01  0.00000000E+00
                       4.42857143E-01  4.42857143E-01  0.00000000E+00
                       4.35714286E-01  4.35714286E-01  0.00000000E+00
                       4.28571429E-01  4.28571429E-01  0.00000000E+00
                       4.21428571E-01  4.21428571E-01  0.00000000E+00
                       4.14285714E-01  4.14285714E-01  0.00000000E+00
                       4.07142857E-01  4.07142857E-01  0.00000000E+00
                       4.00000000E-01  4.00000000E-01  0.00000000E+00
                       3.92857143E-01  3.92857143E-01  0.00000000E+00
                       3.85714286E-01  3.85714286E-01  0.00000000E+00
                       3.78571429E-01  3.78571429E-01  0.00000000E+00
                       3.71428571E-01  3.71428571E-01  0.00000000E+00
                       3.64285714E-01  3.64285714E-01  0.00000000E+00
                       3.57142857E-01  3.57142857E-01  0.00000000E+00
                       3.50000000E-01  3.50000000E-01  0.00000000E+00
                       3.42857143E-01  3.42857143E-01  0.00000000E+00
                       3.35714286E-01  3.35714286E-01  0.00000000E+00
                       3.28571429E-01  3.28571429E-01  0.00000000E+00
                       3.21428571E-01  3.21428571E-01  0.00000000E+00
                       3.14285714E-01  3.14285714E-01  0.00000000E+00
                       3.07142857E-01  3.07142857E-01  0.00000000E+00
                       3.00000000E-01  3.00000000E-01  0.00000000E+00
                       2.92857143E-01  2.92857143E-01  0.00000000E+00
                       2.85714286E-01  2.85714286E-01  0.00000000E+00
                       2.78571429E-01  2.78571429E-01  0.00000000E+00
                       2.71428571E-01  2.71428571E-01  0.00000000E+00
                       2.64285714E-01  2.64285714E-01  0.00000000E+00
                       2.57142857E-01  2.57142857E-01  0.00000000E+00
                       2.50000000E-01  2.50000000E-01  0.00000000E+00
                       2.42857143E-01  2.42857143E-01  0.00000000E+00
                       2.35714286E-01  2.35714286E-01  0.00000000E+00
                       2.28571429E-01  2.28571429E-01  0.00000000E+00
                       2.21428571E-01  2.21428571E-01  0.00000000E+00
                       2.14285714E-01  2.14285714E-01  0.00000000E+00
                       2.07142857E-01  2.07142857E-01  0.00000000E+00
                       2.00000000E-01  2.00000000E-01  0.00000000E+00
                       1.92857143E-01  1.92857143E-01  0.00000000E+00
                       1.85714286E-01  1.85714286E-01  0.00000000E+00
                       1.78571429E-01  1.78571429E-01  0.00000000E+00
                       1.71428571E-01  1.71428571E-01  0.00000000E+00
                       1.64285714E-01  1.64285714E-01  0.00000000E+00
                       1.57142857E-01  1.57142857E-01  0.00000000E+00
                       1.50000000E-01  1.50000000E-01  0.00000000E+00
                       1.42857143E-01  1.42857143E-01  0.00000000E+00
                       1.35714286E-01  1.35714286E-01  0.00000000E+00
                       1.28571429E-01  1.28571429E-01  0.00000000E+00
                       1.21428571E-01  1.21428571E-01  0.00000000E+00
                       1.14285714E-01  1.14285714E-01  0.00000000E+00
                       1.07142857E-01  1.07142857E-01  0.00000000E+00
                       1.00000000E-01  1.00000000E-01  0.00000000E+00
                       9.28571429E-02  9.28571429E-02  0.00000000E+00
                       8.57142857E-02  8.57142857E-02  0.00000000E+00
                       7.85714286E-02  7.85714286E-02  0.00000000E+00
                       7.14285714E-02  7.14285714E-02  0.00000000E+00
                       6.42857143E-02  6.42857143E-02  0.00000000E+00
                       5.71428571E-02  5.71428571E-02  0.00000000E+00
                       5.00000000E-02  5.00000000E-02  0.00000000E+00
                       4.28571429E-02  4.28571429E-02  0.00000000E+00
                       3.57142857E-02  3.57142857E-02  0.00000000E+00
                       2.85714286E-02  2.85714286E-02  0.00000000E+00
                       2.14285714E-02  2.14285714E-02  0.00000000E+00
                       1.42857143E-02  1.42857143E-02  0.00000000E+00
                       7.14285714E-03  7.14285714E-03  0.00000000E+00
                       0.00000000E+00  0.00000000E+00  0.00000000E+00
           kptopt          -4
          kssform           3
            lpawu           2      -1      -1
P           mkmem           8
            natom           5
           natsph        5
            nband          30
         nbandkss          30
           nbdbuf           2
           ndtset           1
            ngfft          30      30      30
          ngfftdg          54      54      54
             nkpt         261
             nsym          48
           ntypat           3
           occopt           3
        optforces           0
        pawecutdg      6.00000000E+01 Hartree
        pawfatbnd           1
        pawprtvol           3
     plowan_bandi          21
     plowan_bandf          23
   plowan_compute           1
     plowan_natom           1
        plowan_nt           1
 plowan_realspace           1
        plowan_it3       0    0    0
     plowan_iatom3       1
       plowan_nbl3       1
     plowan_lcalc3       2
  plowan_projcalc3      -2
           prtvol           4
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
          spgroup         221
           symrel      1  0  0   0  1  0   0  0  1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0 -1  0   1  0  0   0  0  1
                       0  0  1   1  0  0   0  1  0       0  0 -1  -1  0  0   0 -1  0
                       0  0 -1   1  0  0   0 -1  0       0  0  1  -1  0  0   0  1  0
                       0  0 -1  -1  0  0   0  1  0       0  0  1   1  0  0   0 -1  0
                       0  0  1  -1  0  0   0 -1  0       0  0 -1   1  0  0   0  1  0
                       1  0  0   0  0  1   0  1  0      -1  0  0   0  0 -1   0 -1  0
                      -1  0  0   0  0  1   0 -1  0       1  0  0   0  0 -1   0  1  0
                      -1  0  0   0  0 -1   0  1  0       1  0  0   0  0  1   0 -1  0
                       1  0  0   0  0 -1   0 -1  0      -1  0  0   0  0  1   0  1  0
                       0  1  0   0  0  1   1  0  0       0 -1  0   0  0 -1  -1  0  0
                       0 -1  0   0  0  1  -1  0  0       0  1  0   0  0 -1   1  0  0
                       0 -1  0   0  0 -1   1  0  0       0  1  0   0  0  1  -1  0  0
                       0  1  0   0  0 -1  -1  0  0       0 -1  0   0  0  1   1  0  0
                       0  0  1   0  1  0   1  0  0       0  0 -1   0 -1  0  -1  0  0
                       0  0 -1   0  1  0  -1  0  0       0  0  1   0 -1  0   1  0  0
                       0  0 -1   0 -1  0   1  0  0       0  0  1   0  1  0  -1  0  0
                       0  0  1   0 -1  0  -1  0  0       0  0 -1   0  1  0   1  0  0
           tolwfr      1.00000000E-12
           tsmear      3.80017850E-03 Hartree
            typat      1  2  3  3  3
          usepawu          10
           useylm           1
           xangst      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       1.9210455615E+00  1.9210455615E+00  1.9210455615E+00
                       1.9210455615E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  1.9210455615E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  1.9210455615E+00
            xcart      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       3.6302500000E+00  3.6302500000E+00  3.6302500000E+00
                       3.6302500000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  3.6302500000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.6302500000E+00
             xred      0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       5.0000000000E-01  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
            znucl       23.00000   38.00000    8.00000
 
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
- [1] Gamma and beta cerium: DFT+U calculations of ground-state parameters.
- B. Amadon, F. Jollet and M. Torrent, Phys. Rev. B 77, 155104 (2008).
- Comment: DFT+U calculations, usepawu/=0. Strong suggestion to cite this paper.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#amadon2008a
-
- [2] Implementation of the Projector Augmented-Wave Method in the ABINIT code.
- M. Torrent, F. Jollet, F. Bottin, G. Zerah, and X. Gonze Comput. Mat. Science 42, 337, (2008).
- Comment: PAW calculations. Strong suggestion to cite this paper.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#torrent2008
-
- [3] Libxc: A library of exchange and correlation functionals for density functional theory.
- M.A.L. Marques, M.J.T. Oliveira, T. Burnus, Computer Physics Communications 183, 2227 (2012).
- Comment: to be cited when LibXC is used (negative value of ixc)
- Strong suggestion to cite this paper.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#marques2012
-
- [4] The Abinit project: Impact, environment and recent developments.
- Computer Phys. Comm. 248, 107042 (2020).
- X.Gonze, B. Amadon, G. Antonius, F.Arnardi, L.Baguet, J.-M.Beuken,
- J.Bieder, F.Bottin, J.Bouchet, E.Bousquet, N.Brouwer, F.Bruneval,
- G.Brunin, T.Cavignac, J.-B. Charraud, Wei Chen, M.Cote, S.Cottenier,
- J.Denier, G.Geneste, Ph.Ghosez, M.Giantomassi, Y.Gillet, O.Gingras,
- D.R.Hamann, G.Hautier, Xu He, N.Helbig, N.Holzwarth, Y.Jia, F.Jollet,
- W.Lafargue-Dit-Hauret, K.Lejaeghere, M.A.L.Marques, A.Martin, C.Martins,
- H.P.C. Miranda, F.Naccarato, K. Persson, G.Petretto, V.Planes, Y.Pouillon,
- S.Prokhorenko, F.Ricci, G.-M.Rignanese, A.H.Romero, M.M.Schmitt, M.Torrent,
- M.J.van Setten, B.Van Troeye, M.J.Verstraete, G.Zerah and J.W.Zwanzig
- Comment: the fifth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/sites/default/files/ABINIT20.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze2020
-
- [5] ABINIT: Overview, and focus on selected capabilities
- J. Chem. Phys. 152, 124102 (2020).
- A. Romero, D.C. Allan, B. Amadon, G. Antonius, T. Applencourt, L.Baguet,
- J.Bieder, F.Bottin, J.Bouchet, E.Bousquet, F.Bruneval,
- G.Brunin, D.Caliste, M.Cote,
- J.Denier, C. Dreyer, Ph.Ghosez, M.Giantomassi, Y.Gillet, O.Gingras,
- D.R.Hamann, G.Hautier, F.Jollet, G. Jomard,
- A.Martin, 
- H.P.C. Miranda, F.Naccarato, G.Petretto, N.A. Pike, V.Planes,
- S.Prokhorenko, T. Rangel, F.Ricci, G.-M.Rignanese, M.Royo, M.Stengel, M.Torrent,
- M.J.van Setten, B.Van Troeye, M.J.Verstraete, J.Wiktor, J.W.Zwanziger, and X.Gonze.
- Comment: a global overview of ABINIT, with focus on selected capabilities .
- Note that a version of this paper, that is not formatted for J. Chem. Phys 
- is available at https://www.abinit.org/sites/default/files/ABINIT20_JPC.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#romero2020
-
- [6] Recent developments in the ABINIT software package.
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
- Comment: the fourth generic paper describing the ABINIT project.
- Note that a version of this paper, that is not formatted for Computer Phys. Comm. 
- is available at https://www.abinit.org/sites/default/files/ABINIT16.pdf .
- The licence allows the authors to put it on the Web.
- DOI and bibtex: see https://docs.abinit.org/theory/bibliography/#gonze2016
 Proc.   0 individual time (sec): cpu=         10.7  wall=         11.1
 
 Calculation completed.
.Delivered   1 WARNINGs and   0 COMMENTs to log file.

--- !FinalSummary
program: abinit
version: 9.4.0
start_datetime: Tue May 04 20:46:38 2021
end_datetime: Tue May 04 20:46:50 2021
overall_cpu_time:         396.0
overall_wall_time:         397.6
exit_requested_by_user: no 
timelimit: 0
pseudos: 
    V   : e583d1cc132dd79ce204b31204bd83ed
    Sr  : 02b29cc3441fa9ed5e1433b119e79fbc
    O   : c8ba4c11dba269a1224b8b74498fed92
usepaw: 1
mpi_procs: 36
omp_threads: 1
num_warnings: 1
num_comments: 0
...
