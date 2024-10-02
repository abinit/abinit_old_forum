  ABINIT 
  
  Give name for formatted input file: 
SrTiO3.in
  Give name for formatted output file:
SrTiO3.out
  Give root name for generic input files:
SrTiO3i
  Give root name for generic output files:
SrTiO3o
  Give root name for generic temporary files:
/tmp/SrTiO3

.Version 7.6.3 of ABINIT 
.(MPI version, prepared for a x86_64_linux_gnu4.9 computer) 

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

.Starting date : Mon 15 Sep 2014.
- ( at 14h53 )
  

 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

 === Build Information === 
  Version       : 7.6.3
  Build target  : x86_64_linux_gnu4.9
  Build date    : 20140613

 === Compiler Suite === 
  C compiler       : gnu4.9
  CFLAGS           :  -g -O2 -mtune=native -march=native
  C++ compiler     : gnu4.9
  CXXFLAGS         :  -g -O2 -mtune=native -march=native
  Fortran compiler : gnu4.9
  FCFLAGS          :  -g -ffree-line-length-none  -fopenmp
  FC_LDFLAGS       : 

 === Optimizations === 
  Debug level        : basic
  Optimization level : standard
  Architecture       : unknown_unknown

 === Multicore === 
  Parallel build : yes
  Parallel I/O   : yes
  Time tracing   : no
  openMP support : yes
  GPU support    : no

 === Connectors / Fallbacks === 
  Connectors on : yes
  Fallbacks on  : yes
  DFT flavor    : libxc-fallback+atompaw-fallback+bigdft-fallback+wannier90-fallback
  FFT flavor    : fftw3
  LINALG flavor : atlas
  MATH flavor   : none
  TIMER flavor  : abinit
  TRIO flavor   : netcdf+etsf_io-fallback

 === Experimental features === 
  Bindings            : no
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

          HAVE_DFT_ATOMPAW           HAVE_DFT_BIGDFT            HAVE_DFT_LIBXC

        HAVE_DFT_WANNIER90 HAVE_FC_ALLOCATABLE_DT...  HAVE_FC_COMMAND_ARGUMENT

      HAVE_FC_COMMAND_LINE        HAVE_FC_CONTIGUOUS           HAVE_FC_CPUTIME

              HAVE_FC_EXIT             HAVE_FC_FLUSH             HAVE_FC_GAMMA

            HAVE_FC_GETENV          HAVE_FC_INT_QUAD             HAVE_FC_IOMSG

     HAVE_FC_ISO_C_BINDING        HAVE_FC_LONG_LINES              HAVE_FC_NULL

         HAVE_FC_STREAM_IO            HAVE_FC_SYSTEM                  HAVE_FFT

            HAVE_FFT_FFTW3              HAVE_FFT_MPI           HAVE_FFT_SERIAL

          HAVE_FORTRAN2003               HAVE_GW_DPC        HAVE_LIBPAW_ABINIT

               HAVE_LINALG        HAVE_LINALG_SERIAL                  HAVE_MPI

                 HAVE_MPI2               HAVE_MPI_IO HAVE_MPI_TYPE_CREATE_S...

         HAVE_OMP_COLLAPSE               HAVE_OPENMP             HAVE_OS_LINUX

                HAVE_TIMER         HAVE_TIMER_ABINIT            HAVE_TIMER_MPI

         HAVE_TIMER_SERIAL         HAVE_TRIO_ETSF_IO          HAVE_TRIO_NETCDF

              USE_MACROAVE
 ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

- input  file    -> SrTiO3.in
- output file    -> SrTiO3.out
- root for input  files -> SrTiO3i
- root for output files -> SrTiO3o

-instrng :   105 lines of input have been read from file SrTiO3.in


 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   1 , psp file is sr.optgga1.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   2 , psp file is ti.optgga2.fhi

 iofn2 : Please give name of formatted atomic psp file
 iofn2 : for atom type   3 , psp file is o.optgga1.fhi
  read the values zionpsp= 10.0 , pspcod=   6 , lmax=   3
  read the values zionpsp= 12.0 , pspcod=   6 , lmax=   3
  read the values zionpsp=  6.0 , pspcod=   6 , lmax=   1

 inpspheads : deduce mpsang  =   4, n1xccc  =   0.

 invars1m : enter jdtset=1
 invars1 : treat image number     1

 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is tP (primitive tetragonal)

--- !COMMENT
message: |
    According to the symmetry finder, the unit cell is
      not primitive, with multiplicity=2.
      This is allowed, as the input variable chkprim is 0.
src_file: chkprimit.F90
src_line: 106
...

 getkgrid : length of smallest supercell vector (bohr)=    5.927789E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1

 invars1m : enter jdtset=2
 invars1 : treat image number     1

 symlatt : the Bravais lattice is tP (primitive tetragonal)
  xred   is defined in input file
 ingeo : takes atomic coordinates from input array xred

 symlatt : the Bravais lattice is tP (primitive tetragonal)

--- !COMMENT
message: |
    According to the symmetry finder, the unit cell is
      not primitive, with multiplicity=2.
      This is allowed, as the input variable chkprim is 0.
src_file: chkprimit.F90
src_line: 106
...

 getkgrid : length of smallest supercell vector (bohr)=    6.242104E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
 getkgrid : length of smallest supercell vector (bohr)=    5.927789E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   160.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
 getkgrid : length of smallest supercell vector (bohr)=    6.242104E+01
       Simple Lattice Grid
 symkpt : found identity, with number  1
  dtset%nelect=   160.00000000000000     
 chkneu : initialized the occupation numbers for occopt=    1
    spin-unpolarized case :
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00
  2.00  2.00  2.00  2.00  2.00  2.00  2.00  2.00  0.00  0.00  0.00  0.00
 getmpw sequential formula gave:     6985

 Computing all possible proc distrib for this input with nproc less than 24
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|  12 ->   12|   1 ->    1|   2 ->    2|   1 ->    1|   1 ->    8|   2 ->   24|   1 ->   24|
           1|          12|           1|           2|           1|           1|          24|      22.38 |
npfft, npband, npspinor and npkpt:     2    1    1   12
mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=1 and mkmem  = 12, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=1 and mkqmem = 12, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=1 and mk1mem = 12, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
message: |
    The second and third dimension of the FFT grid: 0, 0
    were imposed to be multiple of the number of processors for the FFT: 2
src_file: getng.F90
src_line: 200
...

 For input ecut=  2.025807E+01 best grid ngfft=      45      48      64
       max ecut=  2.206762E+01
 However, must be changed due to symmetry =>      48      48      64
       with max ecut=  0.230093E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   64
  Augmented FFT divisions ...................    49   49   64
  FFT algorithm .............................   401
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 getmpw: optimal value of mpw=    3505
 getmpw sequential formula gave:     6985

 Computing all possible proc distrib for this input with nproc less than 24
     npimage|       npkpt|    npspinor|       npfft|      npband|     bandpp |       nproc|      weight|
   1 ->    1|  12 ->   12|   1 ->    1|   2 ->    2|   1 ->    1|   1 ->    8|   2 ->   24|   1 ->   24|
           1|          12|           1|           2|           1|           1|          24|      19.50 |
npfft, npband, npspinor and npkpt:     2    1    1   12

--- !WARNING
message: |
    nkpt*nsppol (30) is not a multiple of nproc_kpt (12)
    The k-point parallelisation is not efficient.
src_file: distrb2.F90
src_line: 112
...

mpi_setup: mkmem  undefined in the input file.Use default mkmem  = nkpt
 mpi_setup: With nkpt_me=3 and mkmem  = 30, ground state wf handled in core.
 Resetting mkmem  to nkpt_me to save memory space.
mpi_setup: mkqmem undefined in the input file.Use default mkqmem = nkpt
 mpi_setup: With nkpt_me=3 and mkqmem = 30, ground state wf handled in core.
 Resetting mkqmem to nkpt_me to save memory space.
mpi_setup: mk1mem undefined in the input file.Use default mk1mem = nkpt
 mpi_setup: With nkpt_me=3 and mk1mem = 30, ground state wf handled in core.
 Resetting mk1mem to nkpt_me to save memory space.

--- !WARNING
message: |
    The number of KPT processors, npkpt, should be
    a multiple of the number of nkpt*nsppol.
    However, npkpt=12 and nkpt*nsppol=30
src_file: mpi_setup.F90
src_line: 697
...

 For input ecut=  2.025807E+01 best grid ngfft=      45      48      64
       max ecut=  2.206762E+01
 However, must be changed due to symmetry =>      48      48      64
       with max ecut=  0.230093E+02

 ==== FFT mesh ====
  FFT mesh divisions ........................    48   48   64
  Augmented FFT divisions ...................    49   49   64
  FFT algorithm .............................   401
  FFT cache size ............................    16
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.01
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 getmpw: optimal value of mpw=    3507

 DATASET    1 : the unit cell is not primitive

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  1.
   intxc =         0  ionmov =         0    iscf =         7 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        84  mffmem =         1
P  mgfft =        64   mkmem =         1 mpssoang=         4     mpw =      3505
  mqgrid =      3003   natom =        20    nfft =     73728    nkpt =        12
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        32  n1xccc =         0  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                      33.512 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    107.822 Mbytes ; DEN or POT disk file :      0.565 Mbytes.
================================================================================

 Biggest array : f_fftgr(disk), with      9.0020 MBytes.
 memana : allocated an array of      9.002 Mbytes, for testing purposes.
 memana : allocated      33.512 Mbytes, for testing purposes.
 The job will continue.

 DATASET    2 : the unit cell is not primitive

 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
 memory : analysis of memory needs
================================================================================
 Values of the parameters that define the memory need for DATASET  2.
   intxc =         0  ionmov =         0    iscf =        -2 xclevel =         2
  lmnmax =         4   lnmax =         4   mband =        84  mffmem =         1
P  mgfft =        64   mkmem =         3 mpssoang=         4     mpw =      3507
  mqgrid =      3003   natom =        20    nfft =     73728    nkpt =        30
  nloalg =         4  nspden =         1 nspinor =         1  nsppol =         1
    nsym =        32  n1xccc =         0  ntypat =         3  occopt =         1
================================================================================
P This job should need less than                      33.057 Mbytes of memory.
  Rough estimation (10% accuracy) of disk space for files :
_ WF disk file :    269.705 Mbytes ; DEN or POT disk file :      0.565 Mbytes.
================================================================================

 Biggest array : cg(disk), with     13.4872 MBytes.
 memana : allocated an array of     13.487 Mbytes, for testing purposes.
 memana : allocated      33.057 Mbytes, for testing purposes.
 The job will continue.
--------------------------------------------------------------------------------
------------- Echo of variables that govern the present computation ------------
--------------------------------------------------------------------------------
-
- outvars: echo of selected default values                                      
-   accesswff0 =  0 , fftalg0 =312 , wfoptalg0 =  0
-
- outvars: echo of global parameters not present in the input file              
-  max_nthreads =    1
-
 -outvars: echo values of preprocessed input variables --------
 
 These variables are accessible in NetCDF format (SrTiO3o_OUT.nc)

        accesswff           1
            acell      1.0403507002E+01  1.0403507002E+01  1.4819473101E+01 Bohr
              amu      8.76200000E+01  4.78800000E+01  1.59994000E+01
         berryopt1          0
         berryopt2         -1
      chksymbreak           0
           diemac      1.00000000E+01
          dilatmx      1.05000000E+00
             ecut      1.83746627E+01 Hartree
           ecutsm      5.00000000E-01 Hartree
           fftalg         401
      fft_opt_lob           2
           getden1          0
           getden2         -1
           getwfk1          0
           getwfk2         -1
           iprcch           6
             iscf1          7
             iscf2         -2
              ixc     -116133
           jdtset        1    2
              kpt1     8.33333333E-02  8.33333333E-02  1.25000000E-01
                       2.50000000E-01  8.33333333E-02  1.25000000E-01
                       4.16666667E-01  8.33333333E-02  1.25000000E-01
                       2.50000000E-01  2.50000000E-01  1.25000000E-01
                       4.16666667E-01  2.50000000E-01  1.25000000E-01
                       4.16666667E-01  4.16666667E-01  1.25000000E-01
                       8.33333333E-02  8.33333333E-02  3.75000000E-01
                       2.50000000E-01  8.33333333E-02  3.75000000E-01
                       4.16666667E-01  8.33333333E-02  3.75000000E-01
                       2.50000000E-01  2.50000000E-01  3.75000000E-01
                       4.16666667E-01  2.50000000E-01  3.75000000E-01
                       4.16666667E-01  4.16666667E-01  3.75000000E-01
              kpt2     8.33333333E-02  8.33333333E-02  5.00000000E-02
                       2.50000000E-01  8.33333333E-02  5.00000000E-02
                       4.16666667E-01  8.33333333E-02  5.00000000E-02
                       2.50000000E-01  2.50000000E-01  5.00000000E-02
                       4.16666667E-01  2.50000000E-01  5.00000000E-02
                       4.16666667E-01  4.16666667E-01  5.00000000E-02
                       8.33333333E-02  8.33333333E-02  1.50000000E-01
                       2.50000000E-01  8.33333333E-02  1.50000000E-01
                       4.16666667E-01  8.33333333E-02  1.50000000E-01
                       2.50000000E-01  2.50000000E-01  1.50000000E-01
                       4.16666667E-01  2.50000000E-01  1.50000000E-01
                       4.16666667E-01  4.16666667E-01  1.50000000E-01
                       8.33333333E-02  8.33333333E-02  2.50000000E-01
                       2.50000000E-01  8.33333333E-02  2.50000000E-01
                       4.16666667E-01  8.33333333E-02  2.50000000E-01
                       2.50000000E-01  2.50000000E-01  2.50000000E-01
                       4.16666667E-01  2.50000000E-01  2.50000000E-01
                       4.16666667E-01  4.16666667E-01  2.50000000E-01
                       8.33333333E-02  8.33333333E-02  3.50000000E-01
                       2.50000000E-01  8.33333333E-02  3.50000000E-01
                       4.16666667E-01  8.33333333E-02  3.50000000E-01
                       2.50000000E-01  2.50000000E-01  3.50000000E-01
                       4.16666667E-01  2.50000000E-01  3.50000000E-01
                       4.16666667E-01  4.16666667E-01  3.50000000E-01
                       8.33333333E-02  8.33333333E-02  4.50000000E-01
                       2.50000000E-01  8.33333333E-02  4.50000000E-01
                       4.16666667E-01  8.33333333E-02  4.50000000E-01
                       2.50000000E-01  2.50000000E-01  4.50000000E-01
                       4.16666667E-01  2.50000000E-01  4.50000000E-01
                       4.16666667E-01  4.16666667E-01  4.50000000E-01
         kptrlatt1       6    0    0      0    6    0      0    0    4
         kptrlatt2       6    0    0      0    6    0      0    0   10
          kptrlen1     5.92778924E+01
          kptrlen2     6.24210420E+01
P           mkmem1          1
P           mkmem2          3
            natom          20
            nband1         84
            nband2         84
           nbdbuf1          0
           nbdbuf2          2
           ndtset           2
            ngfft          48      48      64
             nkpt1         12
             nkpt2         30
            npfft           2
-           npkpt          12
            nstep         100
             nsym          32
           ntypat           3
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
                       2.000000  2.000000  0.000000  0.000000  0.000000  0.000000
        optforces           1
           ortalg          -2
        paral_kgb           1
            rfdir1          0       0       0
            rfdir2          1       1       1
           shiftk      5.00000000E-01  5.00000000E-01  5.00000000E-01
           symrel      1  0  0   0  1  0   0  0  1       1  0  0   0  1  0   0  0  1
                      -1  0  0   0 -1  0   0  0 -1      -1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0 -1      -1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0  1       1  0  0   0 -1  0   0  0  1
                      -1  0  0   0 -1  0   0  0  1      -1  0  0   0 -1  0   0  0  1
                       1  0  0   0  1  0   0  0 -1       1  0  0   0  1  0   0  0 -1
                       1  0  0   0 -1  0   0  0 -1       1  0  0   0 -1  0   0  0 -1
                      -1  0  0   0  1  0   0  0  1      -1  0  0   0  1  0   0  0  1
                       0  1  0   1  0  0   0  0  1       0  1  0   1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0 -1       0 -1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0 -1       0 -1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0  1       0  1  0  -1  0  0   0  0  1
                       0 -1  0  -1  0  0   0  0  1       0 -1  0  -1  0  0   0  0  1
                       0  1  0   1  0  0   0  0 -1       0  1  0   1  0  0   0  0 -1
                       0  1  0  -1  0  0   0  0 -1       0  1  0  -1  0  0   0  0 -1
                       0 -1  0   1  0  0   0  0  1       0 -1  0   1  0  0   0  0  1
            tnons      0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.5000000  0.5000000  0.0000000     0.0000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.5000000  0.5000000  0.0000000     0.0000000  0.0000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.0000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.5000000  0.5000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
                       0.5000000  0.5000000  0.0000000     0.0000000  0.0000000  0.5000000
                       0.0000000  0.0000000  0.5000000     0.5000000  0.5000000  0.0000000
                       0.5000000  0.5000000  0.5000000     0.0000000  0.0000000  0.0000000
                       0.0000000  0.0000000  0.0000000     0.5000000  0.5000000  0.5000000
           toldfe1     1.00000000E-11 Hartree
           toldfe2     0.00000000E+00 Hartree
           tolwfr1     0.00000000E+00
           tolwfr2     1.00000000E-22
            typat      1  1  1  1  2  2  2  2  3  3  3  3  3  3  3  3  3  3  3  3
         wfoptalg          14
              wtk1       0.05556    0.11111    0.11111    0.05556    0.11111    0.05556
                         0.05556    0.11111    0.11111    0.05556    0.11111    0.05556
              wtk2       0.02222    0.04444    0.04444    0.02222    0.04444    0.02222
                         0.02222    0.04444    0.04444    0.02222    0.04444    0.02222
                         0.02222    0.04444    0.04444    0.02222    0.04444    0.02222
                         0.02222    0.04444    0.04444    0.02222    0.04444    0.02222
                         0.02222    0.04444    0.04444    0.02222    0.04444    0.02222
           xangst      0.0000000000E+00  2.7526493974E+00  5.8815955563E+00
                       2.7526493974E+00  0.0000000000E+00  5.8815955563E+00
                       2.7526493974E+00  0.0000000000E+00  1.9605318521E+00
                       0.0000000000E+00  2.7526493974E+00  1.9605318521E+00
                       2.7526493974E+00  2.7526493974E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  3.9210637042E+00
                       2.7526493974E+00  2.7526493974E+00  3.9210637042E+00
                       0.0000000000E+00  0.0000000000E+00  1.9605318521E+00
                       2.7526493974E+00  2.7526493974E+00  1.9605318521E+00
                       2.7526493974E+00  2.7526493974E+00  5.8815955563E+00
                       0.0000000000E+00  0.0000000000E+00  5.8815955563E+00
                      -1.2289283996E+00  1.5237209978E+00  0.0000000000E+00
                       3.9815777970E+00 -1.2289283996E+00  0.0000000000E+00
                       1.5237209978E+00  1.2289283996E+00  0.0000000000E+00
                       1.2289283996E+00  3.9815777970E+00  0.0000000000E+00
                       1.5237209978E+00 -1.2289283996E+00  3.9210637042E+00
                       1.2289283996E+00  1.5237209978E+00  3.9210637042E+00
                      -1.2289283996E+00  3.9815777970E+00  3.9210637042E+00
                       3.9815777970E+00  1.2289283996E+00  3.9210637042E+00
            xcart      0.0000000000E+00  5.2017535010E+00  1.1114604826E+01
                       5.2017535010E+00  0.0000000000E+00  1.1114604826E+01
                       5.2017535010E+00  0.0000000000E+00  3.7048682753E+00
                       0.0000000000E+00  5.2017535010E+00  3.7048682753E+00
                       5.2017535010E+00  5.2017535010E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  7.4097365505E+00
                       5.2017535010E+00  5.2017535010E+00  7.4097365505E+00
                       0.0000000000E+00  0.0000000000E+00  3.7048682753E+00
                       5.2017535010E+00  5.2017535010E+00  3.7048682753E+00
                       5.2017535010E+00  5.2017535010E+00  1.1114604826E+01
                       0.0000000000E+00  0.0000000000E+00  1.1114604826E+01
                      -2.3223381122E+00  2.8794153888E+00  0.0000000000E+00
                       7.5240916132E+00 -2.3223381122E+00  0.0000000000E+00
                       2.8794153888E+00  2.3223381122E+00  0.0000000000E+00
                       2.3223381122E+00  7.5240916132E+00  0.0000000000E+00
                       2.8794153888E+00 -2.3223381122E+00  7.4097365505E+00
                       2.3223381122E+00  2.8794153888E+00  7.4097365505E+00
                      -2.3223381122E+00  7.5240916132E+00  7.4097365505E+00
                       7.5240916132E+00  2.3223381122E+00  7.4097365505E+00
             xred      0.0000000000E+00  5.0000000000E-01  7.5000000000E-01
                       5.0000000000E-01  0.0000000000E+00  7.5000000000E-01
                       5.0000000000E-01  0.0000000000E+00  2.5000000000E-01
                       0.0000000000E+00  5.0000000000E-01  2.5000000000E-01
                       5.0000000000E-01  5.0000000000E-01  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  0.0000000000E+00
                       0.0000000000E+00  0.0000000000E+00  5.0000000000E-01
                       5.0000000000E-01  5.0000000000E-01  5.0000000000E-01
                       0.0000000000E+00  0.0000000000E+00  2.5000000000E-01
                       5.0000000000E-01  5.0000000000E-01  2.5000000000E-01
                       5.0000000000E-01  5.0000000000E-01  7.5000000000E-01
                       0.0000000000E+00  0.0000000000E+00  7.5000000000E-01
                      -2.2322646697E-01  2.7677353303E-01  0.0000000000E+00
                       7.2322646697E-01 -2.2322646697E-01  0.0000000000E+00
                       2.7677353303E-01  2.2322646697E-01  0.0000000000E+00
                       2.2322646697E-01  7.2322646697E-01  0.0000000000E+00
                       2.7677353303E-01 -2.2322646697E-01  5.0000000000E-01
                       2.2322646697E-01  2.7677353303E-01  5.0000000000E-01
                      -2.2322646697E-01  7.2322646697E-01  5.0000000000E-01
                       7.2322646697E-01  2.2322646697E-01  5.0000000000E-01
            znucl       38.00000   22.00000    8.00000

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

  ==== OpenMP parallelism is ON ====
- Max_threads:       1
- Num_threads:       1
- Num_procs:         1
- Dynamic:           F
- Nested:            F
 
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
-   nproc =   24


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
Perdew, Burke & Ernzerhof SOL
JP Perdew, et al, Phys. Rev. Lett. 100, 136406 (2008)
Perdew, Burke & Ernzerhof SOL
JP Perdew, et al, Phys. Rev. Lett. 100, 136406 (2008)
 Unit cell volume ucvol=  1.6039554E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  64
         ecut(hartree)=     20.258   => boxcut(ratio)=   2.13149
 Relative gap for number of plane waves between process:     0.00
 kpgio: loop on k-points done in parallel
- pspini: atom type   1  psp file is sr.optgga1.fhi
- pspatm: opening atomic psp file    sr.optgga1.fhi
- OPIUM generated Sr potential
- 38.00000  10.00000     50427                znucl, zion, pspdat
    6   11    3    3      1138   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

--- !WARNING
message: |
    Pseudopotential file pspxc=      11,
      not equal to input ixc= -116133.
      These parameters must agree to get the same xc 
      in ABINIT code as in psp construction.
      Action : check psp design or input file.
      Assume experienced user. Execution will continue.

src_file: pspatm_abinit.F90
src_line: 412
...

    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=   48.28914420
         --- l  ekb(1:nproj) -->
             0   -0.995000
             1   -1.686965
             2   -2.506987
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   2  psp file is ti.optgga2.fhi
- pspatm: opening atomic psp file    ti.optgga2.fhi
- OPIUM generated Ti potential
- 22.00000  12.00000     70524                znucl, zion, pspdat
    6   11    3    3      1124   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

--- !WARNING
message: |
    Pseudopotential file pspxc=      11,
      not equal to input ixc= -116133.
      These parameters must agree to get the same xc 
      in ABINIT code as in psp construction.
      Action : check psp design or input file.
      Assume experienced user. Execution will continue.

src_file: pspatm_abinit.F90
src_line: 412
...

    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=   51.38795001
         --- l  ekb(1:nproj) -->
             0   -5.228205
             1   -6.900037
             2   -8.628027
 pspatm: atomic psp has been read  and splines computed

- pspini: atom type   3  psp file is o.optgga1.fhi
- pspatm: opening atomic psp file    o.optgga1.fhi
- OPIUM generated O potential
-  8.00000   6.00000     50324                znucl, zion, pspdat
    6   11    1    0      1098   0.00000      pspcod,pspxc,lmax,lloc,mmax,r2well

--- !WARNING
message: |
    Pseudopotential file pspxc=      11,
      not equal to input ixc= -116133.
      These parameters must agree to get the same xc 
      in ABINIT code as in psp construction.
      Action : check psp design or input file.
      Assume experienced user. Execution will continue.

src_file: pspatm_abinit.F90
src_line: 412
...

    0.00000000000000    0.00000000000000    0.00000000000000   rchrg,fchrg,qchrg
  1.013085          amesh (Hamman grid)
 pspatm: epsatm=    7.82114105
         --- l  ekb(1:nproj) -->
             1   -3.634400
 pspatm: atomic psp has been read  and splines computed

   7.88099311E+04                                ecore*ucvol(ha*bohr**3)
   1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4
   1  3  2  4  1  3  2  4
   2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3
   2  4  1  3  2  4  1  3
   3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2
   3  1  4  2  3  1  4  2
   4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1
   4  2  3  1  4  2  3  1
   5  7  7  5  8  6  6  8  5  7  7  5  8  6  6  8  6  8  8  6  7  5  5  7
   6  8  8  6  7  5  5  7
   6  8  8  6  7  5  5  7  6  8  8  6  7  5  5  7  5  7  7  5  8  6  6  8
   5  7  7  5  8  6  6  8
   7  5  5  7  6  8  8  6  7  5  5  7  6  8  8  6  8  6  6  8  5  7  7  5
   8  6  6  8  5  7  7  5
   8  6  6  8  5  7  7  5  8  6  6  8  5  7  7  5  7  5  5  7  6  8  8  6
   7  5  5  7  6  8  8  6
   9 11 10 12  9 11 10 12  9 11 10 12  9 11 10 12 10 12  9 11 10 12  9 11
  10 12  9 11 10 12  9 11
  10 12  9 11 10 12  9 11 10 12  9 11 10 12  9 11  9 11 10 12  9 11 10 12
   9 11 10 12  9 11 10 12
  11  9 12 10 11  9 12 10 11  9 12 10 11  9 12 10 12 10 11  9 12 10 11  9
  12 10 11  9 12 10 11  9
  12 10 11  9 12 10 11  9 12 10 11  9 12 10 11  9 11  9 12 10 11  9 12 10
  11  9 12 10 11  9 12 10
  13 17 20 16 18 14 15 19 16 20 17 13 19 15 14 18 13 17 20 16 18 14 15 19
  16 20 17 13 19 15 14 18
  14 18 19 15 17 13 16 20 15 19 18 14 20 16 13 17 15 19 18 14 20 16 13 17
  14 18 19 15 17 13 16 20
  15 19 18 14 20 16 13 17 14 18 19 15 17 13 16 20 14 18 19 15 17 13 16 20
  15 19 18 14 20 16 13 17
  16 20 17 13 19 15 14 18 13 17 20 16 18 14 15 19 16 20 17 13 19 15 14 18
  13 17 20 16 18 14 15 19
  17 13 16 20 14 18 19 15 20 16 13 17 15 19 18 14 17 13 16 20 14 18 19 15
  20 16 13 17 15 19 18 14
  18 14 15 19 13 17 20 16 19 15 14 18 16 20 17 13 19 15 14 18 16 20 17 13
  18 14 15 19 13 17 20 16
  19 15 14 18 16 20 17 13 18 14 15 19 13 17 20 16 18 14 15 19 13 17 20 16
  19 15 14 18 16 20 17 13
  20 16 13 17 15 19 18 14 17 13 16 20 14 18 19 15 20 16 13 17 15 19 18 14
  17 13 16 20 14 18 19 15
 wfconv:    84 bands initialized randomly with npw=  3497, for ikpt=     1

_setup2: Arith. and geom. avg. npw (full set) are    3494.667    3494.657
 initro : for itypat=  1, take decay length=      0.8500,
 initro : indeed, coreel=     28.0000, nval= 10 and densty=  0.0000E+00.
 initro : for itypat=  2, take decay length=      0.6000,
 initro : indeed, coreel=     10.0000, nval= 12 and densty=  0.0000E+00.
 initro : for itypat=  3, take decay length=      0.5000,
 initro : indeed, coreel=      2.0000, nval=  6 and densty=  0.0000E+00.

================================================================================

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  64
         ecut(hartree)=     18.375   => boxcut(ratio)=   2.23806

 getcut : COMMENT -
  Note that boxcut > 2.2 ; recall that boxcut=Gcut(box)/Gcut(sphere) = 2
  is sufficient for exact treatment of convolution.
  Such a large boxcut is a waste : you could raise ecut
  e.g. ecut=   23.009341 Hartrees makes boxcut=2


 ewald : nr and ng are    3 and   18

 ITER STEP NUMBER     1
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  1
 Total charge density [el/Bohr^3]
,     Maximum=    1.2939E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    7.5897E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  1  -540.36002960459    -5.404E+02 2.789E-02 8.081E+03 8.152E-03 8.152E-03
 scprqt: <Vxc>= -4.2486832E-01 hartree

Simple mixing update:
  residual square of the potential :   2444.4218590442451

 ITER STEP NUMBER     2
 vtorho : nnsclo_now=  2, note that nnsclo,dbl_nnsclo,istep=  0 0  2
 Total charge density [el/Bohr^3]
,     Maximum=    1.3208E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    4.9548E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  2  -543.49224480189    -3.132E+00 1.007E-02 1.424E+03 1.519E-02 7.042E-03
 scprqt: <Vxc>= -4.2347132E-01 hartree

 Pulay update with  1 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.725      0.275

 ITER STEP NUMBER     3
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  3
 Total charge density [el/Bohr^3]
,     Maximum=    1.2419E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.2164E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  3  -543.71369225027    -2.214E-01 2.675E-03 3.095E+02 6.564E-03 4.773E-04
 scprqt: <Vxc>= -4.2394961E-01 hartree

 Pulay update with  2 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.497      0.391      0.112

 ITER STEP NUMBER     4
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  4
 Total charge density [el/Bohr^3]
,     Maximum=    1.2879E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3387E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  4  -543.89656714373    -1.829E-01 1.555E-03 3.332E+01 6.066E-04 1.084E-03
 scprqt: <Vxc>= -4.2588830E-01 hartree

 Pulay update with  3 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.766      0.210      0.439E-02  0.198E-01

 ITER STEP NUMBER     5
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  5
 Total charge density [el/Bohr^3]
,     Maximum=    1.2799E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.2400E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  5  -543.92153876272    -2.497E-02 6.231E-04 8.730E+00 1.955E-03 3.038E-03
 scprqt: <Vxc>= -4.2457393E-01 hartree

 Pulay update with  4 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.624      0.399      0.357E-01 -0.618E-01  0.319E-02

 ITER STEP NUMBER     6
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  6
 Total charge density [el/Bohr^3]
,     Maximum=    1.2799E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3711E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  6  -543.92516814244    -3.629E-03 2.673E-04 2.740E-01 1.963E-03 1.076E-03
 scprqt: <Vxc>= -4.2533558E-01 hartree

 Pulay update with  5 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.16     -0.194     -0.144E-01  0.324E-01  0.177E-01

 ITER STEP NUMBER     7
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  7
 Total charge density [el/Bohr^3]
,     Maximum=    1.2793E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.2836E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  7  -543.92607682149    -9.087E-04 5.311E-04 1.186E+00 5.286E-04 1.604E-03
 scprqt: <Vxc>= -4.2500245E-01 hartree

 Pulay update with  6 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.343      0.689     -0.321E-01  0.680E-02 -0.166E-02

 ITER STEP NUMBER     8
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  8
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3291E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  8  -543.92660140668    -5.246E-04 1.236E-04 2.367E-01 2.206E-04 1.384E-03
 scprqt: <Vxc>= -4.2523457E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.947     -0.261      0.242      0.819E-01 -0.354E-02

 ITER STEP NUMBER     9
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0  9
 Total charge density [el/Bohr^3]
,     Maximum=    1.2791E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3219E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT  9  -543.92669536581    -9.396E-05 3.892E-04 8.609E-02 8.581E-05 1.470E-03
 scprqt: <Vxc>= -4.2516272E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.835      0.130     -0.376E-01  0.136     -0.654E-01

 ITER STEP NUMBER    10
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 10
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3368E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 10  -543.92681221710    -1.169E-04 7.278E-05 2.768E-04 4.365E-05 1.426E-03
 scprqt: <Vxc>= -4.2525959E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.734      0.227      0.389E-01 -0.844E-02  0.260E-01

 ITER STEP NUMBER    11
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 11
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3334E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 11  -543.92681740171    -5.185E-06 1.811E-04 1.711E-03 2.931E-05 1.455E-03
 scprqt: <Vxc>= -4.2525121E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.19     -0.290      0.135      0.133E-01 -0.548E-01

 ITER STEP NUMBER    12
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 12
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3366E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 12  -543.92681700531     3.964E-07 5.242E-05 7.963E-04 2.585E-05 1.429E-03
 scprqt: <Vxc>= -4.2526240E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.964      0.234E-01 -0.910E-01  0.694E-01  0.302E-01

 ITER STEP NUMBER    13
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 13
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3344E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 13  -543.92681822115    -1.216E-06 1.114E-04 9.231E-05 2.461E-05 1.454E-03
 scprqt: <Vxc>= -4.2525422E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.768      0.492     -0.195     -0.107      0.432E-02

 ITER STEP NUMBER    14
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 14
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 14  -543.92681825759    -3.643E-08 4.231E-05 9.851E-05 7.415E-06 1.447E-03
 scprqt: <Vxc>= -4.2525503E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.348      0.360      0.407     -0.292E-01 -0.108

 ITER STEP NUMBER    15
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 15
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 15  -543.92681827165    -1.406E-08 7.081E-05 7.225E-05 2.369E-06 1.449E-03
 scprqt: <Vxc>= -4.2525515E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.899     -0.359      0.165      0.342      0.175E-01

 ITER STEP NUMBER    16
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 16
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 16  -543.92681830230    -3.066E-08 4.030E-05 2.536E-05 1.056E-06 1.448E-03
 scprqt: <Vxc>= -4.2525563E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.15      0.547      -1.28     -0.435     -0.472E-01

 ITER STEP NUMBER    17
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 17
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 17  -543.92681829086     1.144E-08 6.424E-05 3.832E-05 7.093E-07 1.449E-03
 scprqt: <Vxc>= -4.2525658E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.433      0.616      0.929     -0.628     -0.394

 ITER STEP NUMBER    18
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 18
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 18  -543.92681831020    -1.934E-08 3.711E-05 1.614E-05 3.860E-07 1.449E-03
 scprqt: <Vxc>= -4.2525616E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.460      0.818      0.245       1.01     -0.324

 ITER STEP NUMBER    19
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 19
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 19  -543.92681831545    -5.252E-09 5.343E-05 6.596E-06 1.376E-08 1.449E-03
 scprqt: <Vxc>= -4.2525618E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   2.69      -2.23      0.562      0.393     -0.951

 ITER STEP NUMBER    20
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 20
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 20  -543.92681831547    -1.774E-11 3.953E-05 5.068E-06 1.188E-06 1.450E-03
 scprqt: <Vxc>= -4.2525578E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)= -0.184       2.08      -1.17      0.351     -0.168

 ITER STEP NUMBER    21
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 21
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 21  -543.92681831593    -4.616E-10 4.135E-05 4.549E-06 1.197E-06 1.449E-03
 scprqt: <Vxc>= -4.2525585E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   3.35      -2.35       1.49     -0.984      0.629E-02

 ITER STEP NUMBER    22
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 22
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 22  -543.92681831594    -6.253E-12 3.939E-05 3.318E-06 9.343E-07 1.448E-03
 scprqt: <Vxc>= -4.2525585E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.616       2.25      -1.85      0.779     -0.584

 ITER STEP NUMBER    23
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 23
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 23  -543.92681831794    -1.999E-09 3.031E-05 6.830E-07 4.977E-07 1.449E-03
 scprqt: <Vxc>= -4.2525607E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.55     -0.520       1.51      -1.49     -0.886E-02

 ITER STEP NUMBER    24
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 24
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 24  -543.92681831782     1.138E-10 3.660E-05 5.697E-07 2.189E-07 1.448E-03
 scprqt: <Vxc>= -4.2525610E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.13      0.628      -1.07       1.01     -0.487

 ITER STEP NUMBER    25
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 25
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 25  -543.92681831807    -2.440E-10 2.505E-05 1.446E-07 3.400E-07 1.449E-03
 scprqt: <Vxc>= -4.2525620E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.927      0.154      0.275     -0.591      0.420

 ITER STEP NUMBER    26
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 26
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 26  -543.92681831814    -6.889E-11 3.174E-05 2.163E-08 2.577E-07 1.448E-03
 scprqt: <Vxc>= -4.2525622E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=  0.836      0.246     -0.194      0.240     -0.167

 ITER STEP NUMBER    27
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 27
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 27  -543.92681831814    -6.821E-12 2.002E-05 8.088E-09 1.911E-07 1.449E-03
 scprqt: <Vxc>= -4.2525623E-01 hartree

 Pulay update with  7 previous iterations:
 mixing of old trial potential : alpha(m:m-4)=   1.05      0.190     -0.159     -0.182      0.110

 ITER STEP NUMBER    28
 vtorho : nnsclo_now=  1, note that nnsclo,dbl_nnsclo,istep=  0 0 28
 Total charge density [el/Bohr^3]
,     Maximum=    1.2792E+00  at reduced coord.    0.0417    0.9583    0.0000
,     Minimum=    5.3347E-03  at reduced coord.    0.2500    0.2500    0.2500
,  Integrated=    1.6000E+02
 ETOT 28  -543.92681831814    -7.958E-13 2.559E-05 4.635E-10 3.489E-08 1.449E-03
 scprqt: <Vxc>= -4.2525624E-01 hartree

 At SCF step   28, etot is converged : 
  for the second time, diff in etot=  7.958E-13 < toldfe=  1.000E-11

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.12688158E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.12688158E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  8.09279456E-05  sigma(2 1)=  0.00000000E+00

   1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4
   1  3  2  4  1  3  2  4
   2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3
   2  4  1  3  2  4  1  3
   3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2
   3  1  4  2  3  1  4  2
   4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1
   4  2  3  1  4  2  3  1
   5  7  7  5  8  6  6  8  5  7  7  5  8  6  6  8  6  8  8  6  7  5  5  7
   6  8  8  6  7  5  5  7
   6  8  8  6  7  5  5  7  6  8  8  6  7  5  5  7  5  7  7  5  8  6  6  8
   5  7  7  5  8  6  6  8
   7  5  5  7  6  8  8  6  7  5  5  7  6  8  8  6  8  6  6  8  5  7  7  5
   8  6  6  8  5  7  7  5
   8  6  6  8  5  7  7  5  8  6  6  8  5  7  7  5  7  5  5  7  6  8  8  6
   7  5  5  7  6  8  8  6
   9 11 10 12  9 11 10 12  9 11 10 12  9 11 10 12 10 12  9 11 10 12  9 11
  10 12  9 11 10 12  9 11
  10 12  9 11 10 12  9 11 10 12  9 11 10 12  9 11  9 11 10 12  9 11 10 12
   9 11 10 12  9 11 10 12
  11  9 12 10 11  9 12 10 11  9 12 10 11  9 12 10 12 10 11  9 12 10 11  9
  12 10 11  9 12 10 11  9
  12 10 11  9 12 10 11  9 12 10 11  9 12 10 11  9 11  9 12 10 11  9 12 10
  11  9 12 10 11  9 12 10
  13 17 20 16 18 14 15 19 16 20 17 13 19 15 14 18 13 17 20 16 18 14 15 19
  16 20 17 13 19 15 14 18
  14 18 19 15 17 13 16 20 15 19 18 14 20 16 13 17 15 19 18 14 20 16 13 17
  14 18 19 15 17 13 16 20
  15 19 18 14 20 16 13 17 14 18 19 15 17 13 16 20 14 18 19 15 17 13 16 20
  15 19 18 14 20 16 13 17
  16 20 17 13 19 15 14 18 13 17 20 16 18 14 15 19 16 20 17 13 19 15 14 18
  13 17 20 16 18 14 15 19
  17 13 16 20 14 18 19 15 20 16 13 17 15 19 18 14 17 13 16 20 14 18 19 15
  20 16 13 17 15 19 18 14
  18 14 15 19 13 17 20 16 19 15 14 18 16 20 17 13 19 15 14 18 16 20 17 13
  18 14 15 19 13 17 20 16
  19 15 14 18 16 20 17 13 18 14 15 19 13 17 20 16 18 14 15 19 13 17 20 16
  19 15 14 18 16 20 17 13
  20 16 13 17 15 19 18 14 17 13 16 20 14 18 19 15 20 16 13 17 15 19 18 14
  17 13 16 20 14 18 19 15
 ioarr: writing density data
ioarr: file name is SrTiO3o_DS1_DEN

--- !COMMENT
message: |
    MPI/IO accessing FORTRAN file header: detected record mark length=4
src_file: m_wffile.F90
src_line: 332
...

ioarr: data written to disk file SrTiO3o_DS1_DEN
================================================================================

 ----iterations are completed or convergence reached----


 outwf: write wavefunction to file SrTiO3o_DS1_WFK, with accesswff 1

--- !COMMENT
message: |
    MPI/IO accessing FORTRAN file header: detected record mark length=4
src_file: m_wffile.F90
src_line: 332
...

 outwf with iomode:  1, cpu:    15.08, wall:    15.47

 === Gap info ===
  >>>> For spin  1
   Minimum optical gap =   2.2125 [eV], located at k-point      :   0.0833  0.0833  0.1250
   Fundamental gap     =   2.2125 [eV], Top of valence bands at :   0.0833  0.0833  0.1250
                                        Bottom of conduction at :   0.0833  0.0833  0.1250

 Cartesian components of stress tensor (hartree/bohr^3)
  sigma(1 1)=  7.12688158E-05  sigma(3 2)=  0.00000000E+00
  sigma(2 2)=  7.12688158E-05  sigma(3 1)=  0.00000000E+00
  sigma(3 3)=  8.09279456E-05  sigma(2 1)=  0.00000000E+00

-Cartesian components of stress tensor (GPa)         [Pressure= -2.1915E+00 GPa]
- sigma(1 1)=  2.09680060E+00  sigma(3 2)=  0.00000000E+00
- sigma(2 2)=  2.09680060E+00  sigma(3 1)=  0.00000000E+00
- sigma(3 3)=  2.38098196E+00  sigma(2 1)=  0.00000000E+00

================================================================================
== DATASET  2 ==================================================================
-   nproc =   24

 mkfilename : getwfk/=0, take file _WFK from output of DATASET   1.

 mkfilename : getden/=0, take file _DEN from output of DATASET   1.


 getdim_nloc : deduce lmnmax  =  16, lnmax  =   4,
                      lmnmaxso=  16, lnmaxso=   4.
Perdew, Burke & Ernzerhof SOL
JP Perdew, et al, Phys. Rev. Lett. 100, 136406 (2008)
Perdew, Burke & Ernzerhof SOL
JP Perdew, et al, Phys. Rev. Lett. 100, 136406 (2008)
 Unit cell volume ucvol=  1.6039554E+03 bohr^3
 Angles (23,13,12)=  9.00000000E+01  9.00000000E+01  9.00000000E+01 degrees

 getcut: wavevector=  0.0000  0.0000  0.0000  ngfft=  48  48  64
         ecut(hartree)=     20.258   => boxcut(ratio)=   2.13149
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 Relative gap for number of plane waves between process:     0.00
 kpgio: loop on k-points done in parallel
   1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4
   1  3  2  4  1  3  2  4
   2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3  2  4  1  3
   2  4  1  3  2  4  1  3
   3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2
   3  1  4  2  3  1  4  2
   4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1  4  2  3  1
   4  2  3  1  4  2  3  1
   5  7  7  5  8  6  6  8  5  7  7  5  8  6  6  8  6  8  8  6  7  5  5  7
   6  8  8  6  7  5  5  7
   6  8  8  6  7  5  5  7  6  8  8  6  7  5  5  7  5  7  7  5  8  6  6  8
   5  7  7  5  8  6  6  8
   7  5  5  7  6  8  8  6  7  5  5  7  6  8  8  6  8  6  6  8  5  7  7  5
   8  6  6  8  5  7  7  5
   8  6  6  8  5  7  7  5  8  6  6  8  5  7  7  5  7  5  5  7  6  8  8  6
   7  5  5  7  6  8  8  6
   9 11 10 12  9 11 10 12  9 11 10 12  9 11 10 12 10 12  9 11 10 12  9 11
  10 12  9 11 10 12  9 11
  10 12  9 11 10 12  9 11 10 12  9 11 10 12  9 11  9 11 10 12  9 11 10 12
   9 11 10 12  9 11 10 12
  11  9 12 10 11  9 12 10 11  9 12 10 11  9 12 10 12 10 11  9 12 10 11  9
  12 10 11  9 12 10 11  9
  12 10 11  9 12 10 11  9 12 10 11  9 12 10 11  9 11  9 12 10 11  9 12 10
  11  9 12 10 11  9 12 10
  13 17 20 16 18 14 15 19 16 20 17 13 19 15 14 18 13 17 20 16 18 14 15 19
  16 20 17 13 19 15 14 18
  14 18 19 15 17 13 16 20 15 19 18 14 20 16 13 17 15 19 18 14 20 16 13 17
  14 18 19 15 17 13 16 20
  15 19 18 14 20 16 13 17 14 18 19 15 17 13 16 20 14 18 19 15 17 13 16 20
  15 19 18 14 20 16 13 17
  16 20 17 13 19 15 14 18 13 17 20 16 18 14 15 19 16 20 17 13 19 15 14 18
  13 17 20 16 18 14 15 19
  17 13 16 20 14 18 19 15 20 16 13 17 15 19 18 14 17 13 16 20 14 18 19 15
  20 16 13 17 15 19 18 14
  18 14 15 19 13 17 20 16 19 15 14 18 16 20 17 13 19 15 14 18 16 20 17 13
  18 14 15 19 13 17 20 16
  19 15 14 18 16 20 17 13 18 14 15 19 13 17 20 16 18 14 15 19 13 17 20 16
  19 15 14 18 16 20 17 13
  20 16 13 17 15 19 18 14 17 13 16 20 14 18 19 15 20 16 13 17 15 19 18 14
  17 13 16 20 14 18 19 15

--- !COMMENT
message: |
    MPI/IO accessing FORTRAN file header: detected record mark length=4
src_file: m_wffile.F90
src_line: 332
...

inwffil: examining the header of disk file SrTiO3o_DS1_WFK

================================================================================

          - hdr_check: checking restart file header for consistency -


        current calculation                         restart file
        -------------------                         ------------

  calculation expects a wf_planewave    |  input file contains a wf_planewave
. ABINIT  code version 7.6.3            |  ABINIT  code version 7.6.3
. date 20140915 bantot 2520 natom   20  |  date 20140915 bantot 1008 natom   20
  nkpt  30 nsym 32 ngfft  48,  48,  64  |  nkpt  12 nsym 32 ngfft  48,  48,  64
  ntypat  3 ecut_eff  20.2580656        |  ntypat  3 ecut_eff  20.2580656
  usepaw  0                             |  usepaw  0
  usewvl  0                             |  usewvl  0
  rprimd:                               |  rprimd:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
    10.4035070   0.0000000   0.0000000  |    10.4035070   0.0000000   0.0000000

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
     0.0000000  10.4035070   0.0000000  |     0.0000000  10.4035070   0.0000000
     0.0000000   0.0000000  14.8194731  |     0.0000000   0.0000000  14.8194731


Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
--- !WARNING

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.
message: |

Backtrace for this error:

Backtrace for this error:
    input nkpt=30 not equal disk file nkpt=12
src_file: m_header.F90
src_line: 3838
...

  symafm:                               |  symafm:
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1  1  1  1  1  |    1  1  1  1  1  1  1  1  1  1  1  1
    1  1  1  1  1  1  1  1              |    1  1  1  1  1  1  1  1
  symrel:                               |  symrel:
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
    1  0  0  0  1  0  0  0  1           |    1  0  0  0  1  0  0  0  1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
   -1  0  0  0 -1  0  0  0 -1           |   -1  0  0  0 -1  0  0  0 -1
   -1  0  0  0  1  0  0  0 -1           |   -1  0  0  0  1  0  0  0 -1
   -1  0  0  0  1  0  0  0 -1           |   -1  0  0  0  1  0  0  0 -1
    1  0  0  0 -1  0  0  0  1           |    1  0  0  0 -1  0  0  0  1
    1  0  0  0 -1  0  0  0  1           |    1  0  0  0 -1  0  0  0  1
   -1  0  0  0 -1  0  0  0  1           |   -1  0  0  0 -1  0  0  0  1
   -1  0  0  0 -1  0  0  0  1           |   -1  0  0  0 -1  0  0  0  1
    1  0  0  0  1  0  0  0 -1           |    1  0  0  0  1  0  0  0 -1
    1  0  0  0  1  0  0  0 -1           |    1  0  0  0  1  0  0  0 -1
    1  0  0  0 -1  0  0  0 -1           |    1  0  0  0 -1  0  0  0 -1
    1  0  0  0 -1  0  0  0 -1           |    1  0  0  0 -1  0  0  0 -1
   -1  0  0  0  1  0  0  0  1           |   -1  0  0  0  1  0  0  0  1
   -1  0  0  0  1  0  0  0  1           |   -1  0  0  0  1  0  0  0  1
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0  1  0  1  0  0  0  0  1           |    0  1  0  1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
    0 -1  0 -1  0  0  0  0 -1           |    0 -1  0 -1  0  0  0  0 -1
    0 -1  0  1  0  0  0  0 -1           |    0 -1  0  1  0  0  0  0 -1
    0 -1  0  1  0  0  0  0 -1           |    0 -1  0  1  0  0  0  0 -1
    0  1  0 -1  0  0  0  0  1           |    0  1  0 -1  0  0  0  0  1
    0  1  0 -1  0  0  0  0  1           |    0  1  0 -1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
    0 -1  0 -1  0  0  0  0  1           |    0 -1  0 -1  0  0  0  0  1
    0  1  0  1  0  0  0  0 -1           |    0  1  0  1  0  0  0  0 -1
    0  1  0  1  0  0  0  0 -1           |    0  1  0  1  0  0  0  0 -1
    0  1  0 -1  0  0  0  0 -1           |    0  1  0 -1  0  0  0  0 -1
    0  1  0 -1  0  0  0  0 -1           |    0  1  0 -1  0  0  0  0 -1
    0 -1  0  1  0  0  0  0  1           |    0 -1  0  1  0  0  0  0  1
    0 -1  0  1  0  0  0  0  1           |    0 -1  0  1  0  0  0  0  1
  typat:                                |  typat:
    1  1  1  1  2  2  2  2  3  3  3  3  |    1  1  1  1  2  2  2  2  3  3  3  3
    3  3  3  3  3  3  3  3              |    3  3  3  3  3  3  3  3
  so_psp  :                             |  so_psp  :
    1  1  1                             |    1  1  1
  tnons:                                |  tnons:
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
   znucl:                               |   znucl:
   38.00 22.00  8.00                    |   38.00 22.00  8.00
  pseudopotential atom type  1:         |  pseudopotential atom type  1:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  50427 pspcod    6 zion  10.0  |  pspdat  50427 pspcod    6 zion  10.0
  pseudopotential atom type  2:         |  pseudopotential atom type  2:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  70524 pspcod    6 zion  12.0  |  pspdat  70524 pspcod    6 zion  12.0
  pseudopotential atom type  3:         |  pseudopotential atom type  3:
  pspso   0 pspxc  11                   |  pspso   0 pspxc  11
  pspdat  50324 pspcod    6 zion   6.0  |  pspdat  50324 pspcod    6 zion   6.0
  xred:                                 |  xred:
     0.0000000   0.5000000   0.7500000  |     0.0000000   0.5000000   0.7500000
     0.5000000   0.0000000   0.7500000  |     0.5000000   0.0000000   0.7500000
     0.5000000   0.0000000   0.2500000  |     0.5000000   0.0000000   0.2500000
     0.0000000   0.5000000   0.2500000  |     0.0000000   0.5000000   0.2500000
     0.5000000   0.5000000   0.0000000  |     0.5000000   0.5000000   0.0000000
     0.0000000   0.0000000   0.0000000  |     0.0000000   0.0000000   0.0000000
     0.0000000   0.0000000   0.5000000  |     0.0000000   0.0000000   0.5000000
     0.5000000   0.5000000   0.5000000  |     0.5000000   0.5000000   0.5000000
     0.0000000   0.0000000   0.2500000  |     0.0000000   0.0000000   0.2500000
     0.5000000   0.5000000   0.2500000  |     0.5000000   0.5000000   0.2500000
     0.5000000   0.5000000   0.7500000  |     0.5000000   0.5000000   0.7500000
     0.0000000   0.0000000   0.7500000  |     0.0000000   0.0000000   0.7500000
    -0.2232265   0.2767735   0.0000000  |    -0.2232265   0.2767735   0.0000000
     0.7232265  -0.2232265   0.0000000  |     0.7232265  -0.2232265   0.0000000
     0.2767735   0.2232265   0.0000000  |     0.2767735   0.2232265   0.0000000
     0.2232265   0.7232265   0.0000000  |     0.2232265   0.7232265   0.0000000
     0.2767735  -0.2232265   0.5000000  |     0.2767735  -0.2232265   0.5000000
     0.2232265   0.2767735   0.5000000  |     0.2232265   0.2767735   0.5000000
    -0.2232265   0.7232265   0.5000000  |    -0.2232265   0.7232265   0.5000000
     0.7232265   0.2232265   0.5000000  |     0.7232265   0.2232265   0.5000000

--- !WARNING
message: |
    Restart of self-consistent calculation need translated wavefunctions.
src_file: m_header.F90
src_line: 4351
...

#0  0x2AC3EB226457
#1  0x2AC3EB226A6E
#0  0x2B0FA05E5457
#1  0x2B0FA05E5A6E
#0  #2  0x36C14302CF
#2  0x36C14302CF
#0  0x2ACE751C1457
#1  0x2ACE751C1A6E
#2  0x3D5D4302CF
0x2B39088D0457
#1  0x#0  0x2B5941744457
#1  0x2B5941744A6E
2B39088D0A6E
#2  0x36C14302CF
#2  0x3D5D4302CF
  Indeed, critical differences between current calculation and
  restart file have been detected in:
        * the number, position, or weight of k-points
        * the format of wavefunctions (istwfk)
================================================================================
-inwffil : will read wavefunctions from disk file SrTiO3o_DS1_WFK

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:

Program received signal SIGSEGV: Segmentation fault - invalid memory reference.

Backtrace for this error:
#0  0x2AE6CC12F457
#1  0x2AE6CC12FA6E
#2  0x33DB4302CF
#0  0x2B8CAC3EA457
#1  0x2B8CAC3EAA6E
#2  0x33DB4302CF
#3  0xE8FBEA in __m_distribfft_MOD_copy_distribfft
#3  0x#4  0xDFBB3E in copy_mpi_enreg_
E8FBEA in __m_distribfft_MOD_copy_distribfft
#4  0xDFBB3E in copy_mpi_enreg_
#0  0x2ABADD12F457
#1  0x2ABADD12FA6E
#0  #0  0x2B4625A1D457
#1  0x2B4625A1DA6E
#2  0x31364302CF
#2  0x31364302CF
0x2AE669B7B457
#1  0x2AE669B7BA6E#5  0x4DFAB8 in inwffil_

#5  #2  0x0x#6  0x48A21D in gstate_
4DFAB8 in inwffil_31364302CF
#7  0x42AB1E in gstateimg_

#8  0x41C297 in driver_
#3  0xE8FBEA in __m_distribfft_MOD_copy_distribfft
#3  0xE8FBEA in __m_distribfft_MOD_copy_distribfft
#6  #9  0x414569 in MAIN__ at abinit.F90:0
0x48A21D in gstate_#4  0xDFBB3E in copy_mpi_enreg_
#4  0xDFBB3E in copy_mpi_enreg_
#3  0xE8FBEA in __m_distribfft_MOD_copy_distribfft

#7  0x#4  0xDFBB3E in copy_mpi_enreg_
42AB1E in gstateimg_
#8  0x41C297 in driver_
#9  0x414569 in MAIN__ at abinit.F90:0
#0  0x2B318B26F457
#1  0x2B318B26FA6E
#2  0x36C14302CF
#5  0x4DFAB8 in inwffil_
#5  0x4DFAB8 in inwffil_
#5  #6  0x48A21D in gstate_
#6  0x48A21D in gstate_
0x#7  0x42AB1E in gstateimg_
#7  0x42AB1E in gstateimg_
4DFAB8#8  0x41C297 in driver_
#8  0x41C297 in driver_
 in #9  0x414569 in MAIN__ at abinit.F90:0
#9  0x414569 in MAIN__ at abinit.F90:0
inwffil_
#3  0xE8FBEA in __m_distribfft_MOD_copy_distribfft
#4  0xDFBB3E in copy_mpi_enreg_
#3  0xE8FBEA in __m_distribfft_MOD_copy_distribfft
#4  0xDFBB3E in copy_mpi_enreg_
#6  0x48A21D in gstate_
#7  0x42AB1E in gstateimg_
#8  0x41C297 in driver_
#9  0x414569 in MAIN__ at abinit.F90:0
#5  0x4DFAB8 in inwffil_
#6  0x48A21D in gstate_
#7  0x42AB1E in gstateimg_
#8  0x41C297 in driver_
#9  0x414569 in MAIN__ at abinit.F90:0
#5  0x4DFAB8 in inwffil_
#6  0x48A21D in gstate_
#7  0x42AB1E in gstateimg_
#8  0x41C297 in driver_
#9  0x414569 in MAIN__ at abinit.F90:0
--------------------------------------------------------------------------
mpirun noticed that process rank 9 with PID 22283 on node compute-0-4 exited on signal 11 (Segmentation fault).
--------------------------------------------------------------------------
5 total processes killed (some possibly by mpirun during cleanup)

